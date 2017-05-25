<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class HandleController extends CommonController
{
	public function action_pause(){
		$uid=$_SESSION['uid'];
		if(!empty($uid)){	
			$time=intval(I('time'));
			$videoid=trim(I('id'));
			$res=M('user_behavior')->where(array('userid'=>$uid,'videoid'=>$videoid))->find();
			$data['videoid']=$videoid;
			$data['userid']=$uid;
			if(empty($res)){
				$data['pause']=$time;
				M('user_behavior')->add($data);
			}
			else{
				$array=$res['pause'].','.$time;
				$arr=explode(',', $array);
				$arr=array_unique($arr);
				$data['pause']=implode(",", $arr);
				M('user_behavior')->where(array('userid'=>$uid,'videoid'=>$videoid))->save($data);
			}
			$this->ajaxReturn($data);
			break;
		}
	}


	public function action_start(){
		$uid=$_SESSION['uid'];
		if(!empty($uid)){	
			$time=intval(I('time'));
			$videoid=trim(I('id'));
			$res=M('user_behavior')->where(array('userid'=>$uid,'videoid'=>$videoid))->find();
			$data['videoid']=$videoid;
			$data['userid']=$uid;

			if(empty($res)){
				$data['start']=$time;
				M('user_behavior')->add($data);
			}
			else{
				$array=$res['start'].','.$time;
				$arr=explode(',', $array);
				$arr=array_unique($arr);
				$data['start']=implode(",", $arr);
				M('user_behavior')->where(array('userid'=>$uid,'videoid'=>$videoid))->save($data);
			}
			$this->ajaxReturn($data);
			break;
		}
	}


	public function message(){
		Vendor('ali.TopSdk');
		$phonenum=trim(I('phone'));
		$phone=M('user')->field('id')->where(array('phone'=>$phonenum))->find();
		if(empty($phone['id'])){
		$c = new \TopClient;
		$cond['id']=array('NEQ','0');
		$one=M('app')->field('appkey,secretkey')->where($cond)->find();

		$c->appkey = $one['appkey'];
		$c->secretKey = $one['secretkey'];
		$req = new \AlibabaAliqinFcSmsNumSendRequest;
		$req->setExtend("123456");
		$req->setSmsType("normal");
		$req->setSmsFreeSignName("个人测试");
		$num=rand(1000,9999);
		$req->setSmsParam("{\"code\":\"".$num."\",\"product\":\"code\"}");
		$req->setRecNum($phonenum);
		$req->setSmsTemplateCode("SMS_45175038");
		$resp = $c->execute($req);
		if($resp->result->success){
			$_SESSION['code']=$num;
			$this->ajaxReturn($resp);
		}
		else{
			$this->ajaxReturn('-1');
		}
		}
		else{
			$this->ajaxReturn('-1');
		}

	}











}



?>