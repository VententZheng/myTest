<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class CommonController extends Controller
{
	protected $session_id = false;  //用户登录信息（未登录为false）
	//构造方法
	public function __construct(){
		parent::__construct();
		//检查登录
		$this->checkUser();
		$commoninfo = M('User')->where(array('id'=>session('uid')))->find();
		$this->assign('commoninfo',$commoninfo);
	}

	//检查登录
	private function checkUser(){
		if (session('?userinfo')) {
			$this->userinfo = session('userinfo');
			$this->assign('userinfo',$this->userinfo);
		}
	}
	public function _empty($name){
		$this->error('无效的操作'.$name);
	}
}