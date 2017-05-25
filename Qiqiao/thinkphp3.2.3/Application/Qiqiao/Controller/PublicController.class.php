<?php
namespace Qiqiao\Controller;
use Think\Controller;
//use Org\Util\Rbac;

/* 后台登录首页控制器 */
Class PublicController extends Controller {
	
	/* 登录界面显示 */
	Public function login(){
		$this->display();
		if(IS_POST){
			$passcode = I('passcode');
			//验证码校验
			if(!check_verify($passcode)){
				$this->error("验证码错误");
			}
			/* 管理员登录判断 */
	        $name = I('username');
			$password = I('password','','md5');
		    $admin = M('admin')->where(array('name' => $name))->find();
			//dump($admin);
			if(!$admin || $admin['password'] != $password){
				$this -> error('输入信息有误');
			}
			if($admin['status'] == 1){
				$this-> error('用户当前状态不可登录');
			}
			else{

				$real_name=M('admin')->field('real_name')->where(array('id'=>$admin['id']))->find();
				$log_data['user']=$real_name['real_name'];
				$log_data['name']="登录";
				$log_data['time']=date("Y-m-d H:i:s");
				$log_data['ip']=get_client_ip();
				$log_data['action']=$log_data['user']."登录后台系统";
				M('log')->add($log_data);
				$_SESSION=array();
			    session('id',$admin['id']);
			    $this->success('登录成功',U('Index/index'));
			}	
	    }
	}
	
	Public function logout(){
		$real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
		$log_data['name']="注销";
		$log_data['time']=date("Y-m-d H:i:s");
		$log_data['ip']=get_client_ip();
		$log_data['action']=$real_name['real_name']."注销后台系统";
		M('log')->add($log_data);
		session_unset();
		session_destroy();
		$this->redirect('Public/login');
	}

    Public function base(){
    	$this->display();
    }
	
	/* 生成验证码 */
    Public function verifyImg(){
    	ob_clean();
		$config = array(
		'length' => 4,
		'imageW' => 130, 
		'imageH' => 36,
		'fontSize' => 16,
		'fontttf' => '4.ttf',
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}
	
}





?>