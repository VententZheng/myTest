<?php
namespace Home\Model;
use Think\Model;

/**
* 
*/
class UserModel extends Model
{
	//自动验证

	//自动完成
	protected $_auto = array(
		array('password','md5',3,'function'),
		array('head_pic','default.jpg'),
		array('reg_ip','get_client_ip',1,'function'),
		array('reg_time','date',1,'function')
		);


	//检查用户名和密码函数
    public function checkLogin(){
      $phone = $this->data['phone'];
      $password = $this->data['password'];
      //根据输入的用户名查密码
      $userdata = $this->field('id,password,username')->where(array('phone'=>$phone))->find();
      //判断密码
      if($userdata && ($userdata['password'] == $password)){
        return array('id'=>$userdata['id'],'phone'=>$phone);
      }
      return false;
    }

    //用户密码使用MD5加密函数,自动完成已经对输入的密码MD5加密
    // private function pswMD($psw){
    //   return md5($psw);
    // }
}