<?php
namespace Qiqiao\Controller;
use Think\Controller;

class InformationController extends CommonController{
	

	Public function  add(){

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
		$this->block=M('block')->select();

    	$this->display();
    }
   }

   public function edit_information(){
   	$array['news_title']=trim(I('title'));
   	$array['author']=trim(I('author'));
   	$array['blockid']=trim(I('blockid'));
   	$array['news_content']=trim(I('content'));
   	$array['news_source']=trim(I('source'));
      $array['news_summary']=trim(I('summary'));


      $upload = new \Think\Upload();// 实例化上传类

      $upload->maxSize   =     3145728 ;// 设置附件上传大小
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =     './Public/information_img/'; // 设置附件上传根目录
      $upload->saveName  =  array('date', 'YmdHis'); //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
      $info = $upload->uploadOne($_FILES['img']);
      if(!$info) {// 上传错误提示错误信息
         $this->error($upload->getError());
      }else{// 上传成功 获取上传文件信息
          $array['news_img']=$info['savepath'].$info['savename'];
      }
   	$key0=trim(I('key0'));
   	$key1=trim(I('key1'));
   	$key2=trim(I('key2'));
   	$key3=trim(I('key3'));
      $array['news_time']= time();
      if(!empty($key0)){
         $array['news_keywords'] = $array['news_keywords'].$key0.'|';
      }
      if(!empty($key1)){
         $array['news_keywords'] = $array['news_keywords'].$key1.'|';
      }
      if(!empty($key2)){
         $array['news_keywords'] = $array['news_keywords'].$key2.'|';
      }
      if(!empty($key3)){
         $array['news_keywords'] = $array['news_keywords'].$key3.'|';
      }
      if($array['blockid']<=0 || empty($array['news_title']) || empty($array['author'])  || empty($array['news_content']) || empty($array['news_source']) || empty($array['news_keywords']) || empty($array['news_summary']) ){
         $this->error('新增失败');
      }
      else{
         M('information')->add($array);
         $this->success('新增成功', 'manage');
      }
   }




   Public function  manage(){

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
      $this->block_select=M('block')->select();
      $block_id=intval(I('block_select'));
      $subcontent=trim(I('subcontent'));
      $p_num=I('p');
      if(empty($p_num)){
         $p_num=1;
      }

      if(I('hide_sub')=='1'){
         $p_num=1;
      }
      $page_num=8;
      $start = ($p_num-1)*$page_num;
      if($block_id==0){
         
      $sql="select info.id,blo.blockname,info.news_title,info.news_time,info.is_send from qiq_information info , qiq_block blo where info.blockid=blo.id order by info.id desc limit $start,$page_num";
      $sql_count='select count(*) as count from qiq_information info , qiq_block blo where info.blockid=blo.id';
      }
      else if($block_id>0){
      $sql="select info.id,blo.blockname,info.news_title,info.news_time,info.is_send from qiq_information info , qiq_block blo where info.blockid=blo.id and blo.id=".$block_id." order by info.id desc limit $start,$page_num";
      $sql_count='select count(*) as count from qiq_information info , qiq_block blo where info.blockid=blo.id and blo.id='.$block_id;
      }
      if($block_id==0 && $subcontent!=''){
         $sql="select  info.id,blo.blockname,info.news_title,info.news_time,info.is_send from qiq_information info , qiq_block blo where info.blockid=blo.id and info.news_title like '%".$subcontent."%' order by info.id desc limit $start,$page_num";
         $sql_count='select count(*) as count from qiq_information info , qiq_block blo where info.blockid=blo.id and info.news_title like "%'.$subcontent.'%"';
      }
      else if($block_id>0 && $subcontent!=''){
         $sql="select  info.id,blo.blockname,info.news_title,info.news_time,info.is_send from qiq_information info , qiq_block blo where info.blockid=blo.id and blo.id=".$block_id." and info.news_title like '%".$subcontent."%' order by info.id desc limit $start,$page_num";
         $sql_count='select count(*) as count from qiq_information info , qiq_block blo where info.blockid=blo.id and blo.id='.$block_id.' and info.news_title like "%'.$subcontent.'%"';
      }
      $this->info=M()->query($sql);
      $count = M()->query($sql_count);
      $count = $count[0]['count'];
      import('ORG.Util.Page');
      $Page = new \Think\Page($count,$page_num);
      if($block_id>0){
         $Page->parameter['block_select']= urldecode($block_id);
      }
      if($block_id==0 && $subcontent!=''){
         $Page->parameter['subcontent']= urldecode($subcontent);
      }
      else if($block_id>0 && $subcontent!=''){
         $Page->parameter['block_select']= urldecode($block_id);
         $Page->parameter['subcontent']= urldecode($subcontent);
      }
      $Page -> setConfig('prev','上一页');
      $Page -> setConfig('next','下一页');
      $show = $Page->show();
      $this->assign('page',$show);
      $this->display();
    }
   }

   public function change(){
      $num['is_send']=trim(I('num'));
      $id = trim(I('id'));
      $result=M('information')->where(array('id'=>$id))->save($num);
      if($result){
         $this->ajaxReturn('1');
      }
      else{
         $this->ajaxReturn('0');
      }


   }












   public function display_information(){
      $id=I('id');
      if(empty($id) || $id<=0){
         $this->error('出现错误');
      }
      else{
         $sql='select blo.id,blo.blockname,info.news_title,info.author,info.news_source,info.news_keywords,info.news_content,info.news_img,info.news_summary from qiq_information info , qiq_block blo where info.blockid=blo.id and info.id='.$id;
         $res=M()->query($sql);
         $this->res=$res[0];
         $this->array=explode("|", $this->res['news_keywords']);

         $this->num = count($this->array)-1;
         
         $this->block=M('block')->select();
         $this->id = $id;
         $this->display();
      }
   }

   public function modify_information(){
      $array['news_title']=trim(I('title'));
      $array['author']=trim(I('author'));
      $array['blockid']=trim(I('blockid'));
      $array['news_content']=trim(I('content'));
      $array['news_source']=trim(I('source'));
      $array['news_summary']=I('summary');

      



      $upload = new \Think\Upload();// 实例化上传类

      $upload->maxSize   =     3145728 ;// 设置附件上传大小
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =     './Public/information_img/'; // 设置附件上传根目录
      $upload->saveName  =  array('date', 'YmdHis'); //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
      $info = $upload->uploadOne($_FILES['img']);
      if(!$info) {// 上传错误提示错误信息
         $array['news_img']=I('last_img');
      }else{// 上传成功 获取上传文件信息
          $array['news_img']=$info['savepath'].$info['savename'];
      }


      $key0=trim(I('key0'));
      $key1=trim(I('key1'));
      $key2=trim(I('key2'));
      $key3=trim(I('key3'));
      $array['news_time']= date('y-m-d h:i:s',time());
      if(!empty($key0)){
         $array['news_keywords'] = $array['news_keywords'].$key0.'|';
      }
      if(!empty($key1)){
         $array['news_keywords'] = $array['news_keywords'].$key1.'|';
      }
      if(!empty($key2)){
         $array['news_keywords'] = $array['news_keywords'].$key2.'|';
      }
      if(!empty($key3)){
         $array['news_keywords'] = $array['news_keywords'].$key3.'|';
      }



      /*
      var_dump($array['blockid']);
      var_dump($array['infotitle']);
      var_dump($array['infoauthor']);
      var_dump($array['infocontent']);
      var_dump($array['infosource']);
      var_dump($array['infokeywords']);
      die();
      */




      
      if($array['blockid']<=0 || empty($array['news_title']) || empty($array['author'])  || empty($array['news_content']) || empty($array['news_source']) || empty($array['news_keywords']) || empty($array['news_summary'])  ){
         $this->error('新增失败');
      }
      else{

      
         $id=I('id');
         M('information')->where(array('id'=>$id))->save($array);
         $this->success('修改成功', 'manage');
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
            $this->block=M('block')->select();
            $this->display();
         }
   }

   public function change_setting(){
      $block=M('block')->field('id')->select();
      $data=array();
      $data_key=array();
      foreach($block as $v){
         $data[$v['id']]['blockname']=trim(I('setting_'.$v['id']));
         if(empty($data[$v['id']]['blockname'])){
            $this->redirect('Information/setting');
         }
      }

      foreach($data as $key=>$v){
         M('block')->where(array('id'=>$key))->save($v);
      }
      $this->redirect('Information/setting');
   }

   Public function add_type(){
    $data['blockname']=trim(I('name'));
    if(!empty($data)){
      $res=M('block')->add($data);
      $this->redirect('Information/setting');
    }
    else{
      $this->redirect('Information/setting');
    }
   }


}

?>