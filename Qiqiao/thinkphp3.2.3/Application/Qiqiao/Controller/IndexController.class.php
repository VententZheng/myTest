<?php
namespace Qiqiao\Controller;
use Think\Controller;
use Think\Db;
use Vendor\Database;
class IndexController extends CommonController {
    public function index(){

        $this->meta_title = '系统首页';
		$info['movie']	=	M('video_attributes')->count();
        $info['news']		=	M('video')->count();
		$info['users']		=	M('user')->count();
        $this->assign('info',$info);
		$this->display();
    }

    public function information(){
        $Auth = new \Think\Auth();
        //需要验证的规则列表,支持逗号分隔的权限规则或索引数组
        $name = CONTROLLER_NAME . '/' . ACTION_NAME;   
        //当前用户id   
        $uid = $_SESSION['id'];   
        //分类   
        $type = CONTROLLER_NAME;   
        //执行check的模式   
        $mode = 'url';   
        //'or' 表示满足任一条规则即通过验证;   
        //'and'则表示需满足所有规则才能通过验证   
        $relation = 'and';   
    
        if ($Auth->check($name, $uid, $type, $mode, $relation)) {    
            $this->meta_title = '系统信息';
            $info['movie']  =   M('video_attributes')->count();
            $info['news']       =   M('video')->count();
            $info['users']      =   M('user')->count();
            $this->assign('info',$info);
            $this->display();
        } 
        else{
            $this->redirect('Index/index');
        }
    }

	public function setting(){

        $Auth = new \Think\Auth();
        $name = CONTROLLER_NAME . '/' . ACTION_NAME; 
        $uid = $_SESSION['id'];  
        $type = CONTROLLER_NAME;   
        $mode = 'url';   
        $relation = 'and';
        if (!$Auth->check($name, $uid, $type, $mode, $relation)) {   
             $this->redirect('Index/index');
        }
        else{
            $data=M('app')->find();
            $this->appkey = $data['appkey'];
            $this->secretKey = $data['secretkey'];
            $this->display();
        }


        
    }

    public function change_key(){
        $res['appkey']=ltrim(I('appkey'));
        $res['secretkey']=ltrim(I('secretKey'));
        if(empty($res['appkey']) || empty($res['secretkey'])){
            $this->redirect('Index/setting');
        }
        else{
            $real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
            $log_data['user']=$real_name['real_name'];
            $log_data['name']="更改阿里大于";
            $log_data['time']=date("Y-m-d H:i:s");
            $log_data['ip']=get_client_ip();
            $data=M('app')->where(array('id'=>1))->find();
            $log_data['action']="appkey:".$data['appkey'].'<br>'.'secretkey:'.$data['secretkey'].'<br>已经被更改';
            M('app')->where(array('id'=>1))->save($res);
            M('log')->add($log_data);
            $this->redirect('Index/setting');
        }
        

    }
	
	public function log(){

        $Auth = new \Think\Auth();
        $name = CONTROLLER_NAME . '/' . ACTION_NAME; 
        $uid = $_SESSION['id'];  
        $type = CONTROLLER_NAME;   
        $mode = 'url';   
        $relation = 'and';
        if (!$Auth->check($name, $uid, $type, $mode, $relation)) {   
             $this->redirect('Index/index');
        }
        else{

        $p_num=I('p');
        if(empty($p_num)){
            $p_num=1;
        }
        $log = M('log');
        $user=I('user');
        if(empty($user)){
            $condiction = 1;
        }
        else{
            $condiction = 'user like "%'.$user.'%"';
            $cond['user'] = $user;
        }
        $list = $log->where($condiction)->page($p_num.',5')->select();
        $this->assign('list',$list);
        $count = $log->where($condiction)->count();
        import('ORG.Util.Page');
        $Page = new \Think\Page($count,5);



        if(!empty($user)){
            $Page->parameter['user']= urldecode($user);
        }
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
        }
    }

    public function clear_log(){
        $beginLastweek=mktime(0,0,0,date('m'),date('d')-date('w')+1-7,date('Y'));
        $now = date("Y-m-d H:i:s",$beginLastweek);
        $result=M('log')->where("time <= STR_TO_DATE('$now','%Y-%m-%d %H:%i:%s')")->delete();
        $this->redirect('Index/log');
    }



	/* 备份数据库 */
	public function database(){

        $Auth = new \Think\Auth();
        $name = CONTROLLER_NAME . '/' . ACTION_NAME; 
        $uid = $_SESSION['id'];  
        $type = CONTROLLER_NAME;   
        $mode = 'url';   
        $relation = 'and';
        if (!$Auth->check($name, $uid, $type, $mode, $relation)) {   
             $this->redirect('Index/index');
        }
        else{
		$dbName=C('DB_NAME');
        $re=M()->query('SHOW TABLE STATUS FROM '.$dbName);
        foreach ($re as $key=>$v){
		$re["$key"]["data_length"]=byte_format($v["data_length"]);
	    }
        $this->assign("re",$re);
		$this->display();
        }
    }

    
   
    /* 优化数据库 */
    public function optimize(){
        
        $tb = I('db');
        $str=implode(',',$tb);
        foreach($tb as $table)   
        {
            $tablename = $table;
            $connect=mysql_connect ('127.0.0.1','root','root');
            mysql_select_db ( 'qiqiao', $connect);
            foreach($tb as $table){
                $word= "OPTIMIZE TABLE `$table`";
                $res = mysql_query($word);
                if($res){
                    $real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
                    $log_data['user']=$real_name['real_name'];
                    $log_data['name']="优化数据库";
                    $log_data['time']=date("Y-m-d H:i:s");
                    $log_data['ip']=get_client_ip();
                    $log_data['action']="优化数据表:".$str;
                    M('log')->add($log_data);
                    $this->ajaxReturn('优化数据库成功');
                }
            }
        }
    }

    /* 优化一个数据表 */
    public function optimize_one(){
        
            $table = I('db'); 
            $connect=mysql_connect ('127.0.0.1','root','root');
            mysql_select_db ( 'qiqiao', $connect);
                $word= "OPTIMIZE TABLE `$table`";
                $res = mysql_query($word);
                if($res){
                    $real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
                    $log_data['user']=$real_name['real_name'];
                    $log_data['name']="优化数据表";
                    $log_data['time']=date("Y-m-d H:i:s");
                    $log_data['ip']=get_client_ip();
                    $log_data['action']="优化数据表:".$table;
                    M('log')->add($log_data);
                    $this->ajaxReturn('优化数据库成功');
                }
    }

    public function repair_one(){
        
            $table = I('db'); 
            $connect=mysql_connect ('127.0.0.1','root','root');
            mysql_select_db ( 'qiqiao', $connect);
                $word= "REPAIR TABLE `$table`";
                $res = mysql_query($word);
                if($res){
                    $real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
                    $log_data['user']=$real_name['real_name'];
                    $log_data['name']="修复数据表";
                    $log_data['time']=date("Y-m-d H:i:s");
                    $log_data['ip']=get_client_ip();
                    $log_data['action']="修复数据表:".$table;
                    M('log')->add($log_data);
                    $this->ajaxReturn('修复数据表成功');
                }
    }

    /* 修复数据库 */
    public function repair(){
        
        $tb = I('db');
        $str=implode(',',$tb);
        foreach($tb as $table)   
        {
            $tablename = $table;
            $connect=mysql_connect ('127.0.0.1','root','root');
            mysql_select_db ( 'qiqiao', $connect);
            foreach($tb as $table){
                $word= "REPAIR TABLE `$table`";
                $res = mysql_query($word);
                if($res){
                    $real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
                    $log_data['user']=$real_name['real_name'];
                    $log_data['name']="修复数据库";
                    $log_data['time']=date("Y-m-d H:i:s");
                    $log_data['ip']=get_client_ip();
                    $log_data['action']="修复数据表:".$str;
                    M('log')->add($log_data);
                    $this->ajaxReturn('修复数据库成功');
                }
            }
        }
    }



    /**  
     * 数据库备份  
     * 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2000，即2M)  
     *  
     * @param $string $dir  
     * @param int $size  
     * @param $string $tablename  
     */  
    function export()   
    {   
        $tb=I('db');
        $size = 10000;
        $dir = $_SERVER['DOCUMENT_ROOT']."/database/";
        //echo $dir; 
        $sql = '';  
        $dbName=C('DB_NAME');
         // 备份全部表   
            if ($tables = M()->query('SHOW TABLE STATUS FROM '.$dbName))  
            {   
            }   
            else  
            {   
                $this->ajaxReturn('读取数据库结构失败');
                die();
            }
            // 插入基础信息   
            $sql .= $this->_retrieve(); 
            // 文件名前面部分   
            $filename = date ( 'YmdHis' ); 
            $str=implode(',',$tb);
            // 循环所有表   
            foreach($tb as $table)   
            {   
                // 获取表名   
                $tablename = $table;
                // 获取表结构   
                $sql .= $this->_insert_table_structure ( $tablename );
                mysql_query("SET NAMES UTF8");
                $data = mysql_query ( "select * from " . $tablename );   
                $num_fields = mysql_num_fields ( $data );   
                // 循环每条记录   
                while ( $record = mysql_fetch_array ( $data ) )   
                {   
                    // 单条记录   
                    $sql .= $this->_insert_record ( $tablename, $num_fields, $record ); 
                        $file = $filename.".sql";   
                        // 写入文件   
                        if ($this->_write_file ( $sql, $file, $dir ))   
                        {   
                        }   
                        else  
                        {   
                            $this->ajaxReturn('备份失败');
                        } 
                }
            }   
            $real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
            $log_data['user']=$real_name['real_name'];
            $log_data['name']="备份数据库";
            $log_data['time']=date("Y-m-d H:i:s");
            $log_data['ip']=get_client_ip();
            $log_data['action']="备份数据库:".$str."<br>备份文件名称:".$filename;
            M('log')->add($log_data);
            $this->ajaxReturn('备份成功');  
    }  


    /**  
     * 写入文件  
     *  
     * @param string $sql  
     * @param string $filename  
     * @param string $dir  
     * @return boolean  
     */  
    private function _write_file($sql, $filename, $dir) { 
        // 不存在文件夹则创建   
        if (! file_exists ( $dir )) {   
            mkdir ( $dir );   
        }   
        $re = true;   
        if (! @$fp = fopen ( $dir . $filename, "w+" )) {   
            $re = false;   //打开文件失败  
        }   
        if (! @fwrite ( $fp, $sql )) {   
            $re = false;   //写入文件失败，请文件是否可写   
        }   
        if (! @fclose ( $fp )) {   
            $re = false;   //关闭文件失败
        }   
        return $re;   
    }    


     /**  
     * 插入单条记录  
     *  
     * @param string $table  
     * @param int $num_fields  
     * @param array $record  
     * @return string  
     */  
    private function _insert_record($table, $num_fields, $record) {   
        // sql字段逗号分割   
        $insert = $comma = "";   
        $insert .= "INSERT INTO `" . $table . "` VALUES(";   
        // 循环每个子段下面的内容   
        for($i = 0; $i < $num_fields; $i ++) {   
            $insert .= ($comma . "'" . $record [$i]  . "'");   
            $comma = ",";   
        }   
        $insert .= ");" . $this->ds;   
        return $insert;   
    }  


    /**  
     * 插入数据库备份基础信息  
     *  
     * @return string  
     */  
    public function _retrieve() {  
        $this->ds = "\n";  
        $value = '';   
        $value .= '--' . $this->ds;   
        $value .= '-- MySQL database export' . $this->ds; 
        $value .= '--' . $this->ds;   
        $value .= '-- 生成日期: ' . date ( 'Y' ) . ' 年  ' . date ( 'm' ) . ' 月 ' . date ( 'd' ) . ' 日 ' . date ( 'H:i' ) . $this->ds;   
        $value .= '-- MySQL版本: ' . mysql_get_server_info () . $this->ds;   
        $value .= '-- PHP 版本: ' . phpversion () . $this->ds;   
        $value .= $this->ds;   
        $value .= '--' . $this->ds;   
        $value .= '-- 数据库: `' . C('DB_NAME') . '`' . $this->ds;   
        $value .= '--' . $this->ds . $this->ds;   
        $value .= '-- -------------------------------------------------------';   
        $value .= $this->ds . $this->ds;   
        return $value;   
    }


    /**  
     * 插入表结构  
     *  
     * @param unknown_type $table  
     * @return string  
     */  
    private function _insert_table_structure($table) {  
        $this->ds = "\n";  
        $this->sqlEnd = ";";   
        $sql = '';   
        $sql .= "--" . $this->ds;   
        $sql .= "-- 表的结构" . $table . $this->ds;   
        $sql .= "--" . $this->ds . $this->ds; 
        // 如果存在则删除表   
        $sql .= "DROP TABLE IF EXISTS `" . $table . '`' . $this->sqlEnd . $this->ds;   
        // 获取详细表信息   
        $word = 'SHOW CREATE TABLE `' . $table . '`';
         $connect=mysql_connect ('127.0.0.1','root','root');
         mysql_select_db ( 'qiqiao', $connect);
        $res = mysql_query($word);   
        $row = mysql_fetch_array ( $res );   
        $sql .= $row [1];
        $sql .= $this->sqlEnd . $this->ds;   
        // 加上   
        $sql .= $this->ds;   
        $sql .= "--" . $this->ds;   
        $sql .= "-- 转存表中的数据 " . $table . $this->ds;   
        $sql .= "--" . $this->ds;   
        $sql .= $this->ds;   
        return $sql;   
    }      
	
	/* 还原数据库 */
	public function restore(){

        $dir = $_SERVER['DOCUMENT_ROOT']."/database/";
        $sqlfile=$dir.'20170318000949.sql';
        $sqls = array ();   
        $f = fopen ( $sqlfile, "rb" );   
        // 创建表缓冲变量   
        $create = '';   
        while ( ! feof ( $f ) ) {   
            // 读取每一行sql   
            $line = fgets ( $f );   

            //$encoding = mb_detect_encoding($line, array('UTF-8','GB2312','GBK','UTF-16','UCS-2','BIG5','ASCII'));

            //echo $encoding;

            //echo $encoding.'<br>';
            // 如果包含'-- '等注释，或为空白行，则跳过   
            if (trim ( $line ) == '' || preg_match ( '/--*?/', $line, $match )) {   
                continue;   
            }   
            // 如果结尾包含';'(即为一个完整的sql语句，这里是插入语句)，并且不包含'ENGINE='(即创建表的最后一句)，   
            if (! preg_match ( '/;/', $line, $match ) || preg_match ( '/ENGINE=/', $line, $match )) {   
                // 将本次sql语句与创建表sql连接存起来   
                //$line = iconv($encoding, 'UTF-8', $line);
                //$encoding = mb_detect_encoding($line,array('UTF-8','GB2312','GBK','ASCII'));
                //echo $encoding;
                $create .= $line;   
                // 如果包含了创建表的最后一句   
                if (preg_match ( '/ENGINE=/', $create, $match )) {   
                    // 则将其合并到sql数组   
                    $sqls [] = $create;   
                    // 清空当前，准备下一个表的创建   
                    $create = '';   
                }   
                // 跳过本次   
                continue;   
            }   
            $sqls [] = $line;   
        }   
        fclose ( $f );   
        var_dump($sqls);
        //var_dump($sqls);
        //
        
        mysql_query("SET NAMES UTF8");
        $connect=mysql_connect ('127.0.0.1','root','root');
        mysql_select_db ( 'qiqiao', $connect);
        // 循环sql语句数组，分别执行   
         
        foreach ( $sqls as $sql ) { 
            echo $sql.'<br>';
            //mysql_query(trim($sql));
            
            /*
            if (! mysql_query ( trim ( $sql ) )) {   
                echo mysql_error ();   
                return false;   
            } 
            */ 
            //var_dump($sql);
            //$sql = mb_convert_encoding($sql,'UTF-8','auto');
            $sql = iconv('utf-8', 'utf8', $sql);
            mysql_query ($sql);
            die();

        }
        

		//$this->display();
    }

    
}