<?php
namespace Qiqiao\Controller;
use Think\Controller;


Class AdminController extends CommonController {
	public function user(){

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

		$name=trim(I('login_name'));
		$pre=C('DB_PREFIX');
		$p_num=I('p');
		if(empty($p_num)){
			$p_num=1;
		}
		$page_num=3;
      	$start = ($p_num-1)*$page_num;

		if(empty($name)){
			
			$sql="select a.status,a.id,a.real_name,a.sex,a.age,a.tel,a.id_card,a.mail,a.name,a.create_time,ag.title,ag.id as roleid from ".$pre."admin a,".$pre."auth_group_access ga,".$pre."auth_group ag where  a.id=ga.uid and ga.group_id=ag.id limit $start,$page_num";
			$sql_count="select count(*) as count from ".$pre."admin a,".$pre."auth_group_access ga,".$pre."auth_group ag where  a.id=ga.uid and ga.group_id=ag.id";
		}
		else{
			$sql="select a.status,a.id,a.real_name,a.sex,a.age,a.tel,a.id_card,a.mail,a.name,a.create_time,ag.title,ag.id as roleid from ".$pre."admin a,".$pre."auth_group_access ga,".$pre."auth_group ag where  a.id=ga.uid and ga.group_id=ag.id and a.name like '%".$name."%' limit $start,$page_num";
			$sql_count="select count(*) as count from ".$pre."admin a,".$pre."auth_group_access ga,".$pre."auth_group ag where  a.id=ga.uid and ga.group_id=ag.id and a.name like '%".$name."%' ";

		}
		
		$this->user=M()->query($sql);
		$count = M()->query($sql_count);
      	$count = $count[0]['count'];

        import('ORG.Util.Page');
        $Page = new \Think\Page($count,$page_num);

        if(!empty($name)){
        	$Page->parameter['login_name']= urldecode($name);
        }
        $Page -> setConfig('prev','上一页');
	    $Page -> setConfig('next','下一页');
	    $show = $Page->show();
	    $this->assign('page',$show);


		$this->role_title=M('auth_group')->field('title,id')->select();
		//var_dump($this->role_title);
		
		$this->display();
		}
	}

	public function edit_user(){
		$id=I('id');
		$str=I('str');
		$data[$str]=I('value');
		if(!empty($id) && !empty($data[$str])){
			$result=M('admin')->where(array('id'=>$id))->save($data);
			$this->ajaxReturn($result);
		}
	}

	public function user_power(){
		$id=I('id');
		$role_id=I('role_id');
		if(!empty($id)){
			//echo $id;
			$power_list=M('auth_group_access')->where(array('uid'=>$id))->select();
			$group_id=$power_list[0]['group_id'];
			//var_dump($group_id);
			$group_list=M('auth_group')->where(array('id'=>$group_id,'status'=>1))->select();

			$this->user_id=$id;
		}
		else if(!empty($role_id)){
			$group_list=M('auth_group')->where(array('id'=>$role_id,'status'=>1))->select();
			$this->role_id=$role_id;

		}
			
		
			//获取有权限的str
			$this->group_rules=$group_list[0]['rules'];
			$this->group_title=$group_list[0]['title'];

			$this->whole_list_index=M('auth_rule')->where(array('type'=>'Index'))->select();
			$this->whole_list_user=M('auth_rule')->where(array('type'=>'User'))->select();
			$this->whole_list_admin=M('auth_rule')->where(array('type'=>'Admin'))->select();
			$this->whole_list_video=M('auth_rule')->where(array('type'=>'Video'))->select();
			$this->whole_list_information=M('auth_rule')->where(array('type'=>'Information'))->select();
			$this->whole_list_plan=M('auth_rule')->where(array('type'=>'Plan'))->select();

			//var_dump($group_rules);
			//var_dump($this->whole_list_index);
			$this->display();
	}

	public function change_power(){
		$id=I('id');
		$data['rules']=substr(I('str'),0,-1);
		$res=M('auth_group_access')->where(array('uid'=>$id))->find();
		$result=M('auth_group')->where(array('id'=>$res['group_id']))->save($data);
		$real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
		$log_data['user']=$real_name['real_name'];
		$action_name=M('auth_group')->field('title')->where(array('id'=>$res['group_id']))->find();
		$user=$action_name['title'];
		if($result){
			$log_data['name']="更改权限";
			$log_data['time']=date("Y-m-d H:i:s");
			$log_data['ip']=get_client_ip();
			$log_data['action']="更改'".$user."'的权限";
			M('log')->add($log_data);
			$this->ajaxReturn($result);
		}
		
	}


	public function change_adminrole(){
		$id=I('id');
		$data['rules']=substr(I('str'),0,-1);
		M('auth_group')->where(array('id'=>$id))->save($data);
		$this->ajaxReturn('1');
	}

	


	public function lock_user(){
		$id=trim(I('id'));
		$data['status']=trim(I('num'));
		$result=M('admin')->where(array('id'=>$id))->save($data);
		$this->ajaxReturn($result);
	}

	public function change_role(){
		$id=trim(I("id"));
		$str=trim(I("str"));
		$role_id=M('auth_group')->field('id')->where('title="'.$str.'" and status=1')->find();
		$data['group_id']=$role_id['id'];
		$res=M('auth_group_access')->where(array('uid'=>$id))->save($data);
		if($res){
		$this->ajaxReturn($data['group_id']);
		}
		else{
		$this->ajaxReturn($res);
		}
	}


	public function adduser(){
		$this->role = M('auth_group')->field('id,title')->select();
		$this->display();
	}



	Public function handleadduser(){
	$user = array(
		'real_name' => I('real_name'),
		'sex' => I('sex'),
		'age' => I('age'),
		'tel' => I('tel'),
		'id_card' => I('id_card'),
		'mail' => I('mail'),
		'name' => I('name'),
		'password' => I('password','','md5'),
		'login_time' => time(),
		'last_login_ip' => get_client_ip(),
		'last_login_time' => time(),
		'create_time'=>date('Y-m-d H:m:s',time()),
		'status' => 0
	);

	$condition['name']=trim(I('name'));
	$result=M('admin')->field('id')->where($condition)->find();
	if($result['id']){
		$this->error('用户已存在');
	}
	else{
		if($uid = M('admin')->add($user)) {
		$data['group_id']=trim(I('role_id'));
		$data['uid']=$uid;
		$res=M('auth_group_access')->add($data);
		if($res){
			$this->redirect('Admin/user');
		}
		}
		else{
				$this->error('添加失败');
		}
	}



	}


	public function del_role(){
		$id=I('id');
		$res=M('auth_group_access')->field('uid')->where(array('group_id'=>$id))->select();
		if(empty($res)){

			$result=M('auth_group')->where(array('id'=>$id))->delete();
			$this->ajaxReturn('1');
		}
		else{
			$this->ajaxReturn('0');
		}
	}

	public function add_role(){
		$data['title']=I('name');
		$data['status']=1;
		$res=M('auth_group')->add($data);
		if($res){
			$this->ajaxReturn('1');
		}
		else{
			$this->ajaxReturn('0');
		}
	}


















	Public function handelselect(){

		$id = I('id',0,'intval');
		$db = M('access');
		$db->where(array('role_id' => $id))->delete();
		$data=array();
		foreach($_POST['access'] as $v){
			$tmp=explode('_', $v);
			$data[]=array(
				'role_id' => $id,
				'node_id' => $tmp[0],
				'level' => $tmp[1]
			);
		}
		if($db->addAll($data)){
			$this->success('修改成功',U('Admin/role'));
		}else{
			$this->error('修改失败');
		}
	}






	public function role(){

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
        $title=I("role_name");
        if(empty($title)){
        	$where=1;
        }
        else{
        	$where['title']=array('like','%'.$title.'%');
        }
		$this->role=M('auth_group')->where($where)->select();
		$this->display();
		}
	}

		public function functions(){
		$information = array('id','name','title','pid');
	    $node = M('node')->field($information)->select();
	    $this->node = node_merge($node);
		$this->display();
	}
	


		public function addrole(){
		$this->display();
	}
	
	public function addfunction(){
		$this->pid = I('pid',0,'intval');
		$this->level = I('level',1,'intval');

		switch($this->level) {
			case 1:
			     $this -> type ='应用';
			     break;
			case 2:
			     $this -> type = '横向导航';
			     break;
			case 3:
			     $this -> type ='竖向导航';
			     break;
		}
		$this->display();
	}

	Public function addrolehandle(){
		if (M('role')->add($_POST)) {
			$this->success('成功提交',U('Admin/role'));
		}
		else{
				$this->error('提交失败');
		}
	}
    /*  配置权限  */
	Public function power (){
		$id = I('id',0,'intval');
		$field = array('id','name','title','pid');
		$node = M('node')->order('sort')->field($field)->select();
		//$node = M('node')->select();

		$access = M('access')->where(array('role_id' => $id))->getField('node_id',true);
		$this->node = node_merge($node,$access);
		//dump($access);

		$node = node_merge($node, $access);
		//die;





		//$this->node = node_merge($node);
		$this->id =$id;
		$this->display();
	}

	Public function addfunctionhandle(){
		if (M('node')->add($_POST)) {
			$this->success('成功提交',U('Admin/functions'));
		}
		else{
				$this->error('提交失败');
		}
	}







}







?>