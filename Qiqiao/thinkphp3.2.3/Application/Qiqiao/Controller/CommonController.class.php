<?php
namespace Qiqiao\Controller;
use Think\Controller;

class CommonController extends Controller {
	
Public function _initialize(){
	if(!isset($_SESSION['id'])){
		$this ->redirect('Public/login');
	}


	/*
	$Auth = new \Think\Auth();
	$name = CONTROLLER_NAME . '/' . ACTION_NAME;   
	$uid = $_SESSION['id'];   
	$type = CONTROLLER_NAME;   
	$mode = 'url';   
	$relation = 'and';
	*/   
	/*
	if ($Auth->check($name, $uid, $type, $mode, $relation)) 
		{    $this->success('认证成功',U(CONTROLLER_NAME . '/' . ACTION_NAME)); echo $name; echo $uid; die('认证：成功');   } 
	else 
		//{    $this->error('认证失败'); echo $name; echo $uid; die('认证：失败');   }  
}
*/


/*	
	Public function _initialize(){
		if(!isset($_SESSION['uid']) || !isset($_SESSION['username'])){
			$this ->redirect('Admin/Public/login');
		}
	}
*/	
	
	
}
}








?>