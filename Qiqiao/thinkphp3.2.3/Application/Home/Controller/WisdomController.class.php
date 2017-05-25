<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class WisdomController extends CommonController
{
	//构造方法
    public function __construct(){
        //指定不需要检查登录的方法列表
        parent::__construct();
        $allow_action = array(
            'index'
            );
        if($this->userinfo ==false && !in_array(ACTION_NAME, $allow_action)){
            $this->error('请登录!',U('User/login'));//跳转到登录页面
        }
        $this->assign('title','我的智慧 - 七巧网');
    }


	public function index(){
		$where['type']=array('NEQ','其它');
		$this->res=M('video_block')->where($where)->select();
		$id=M('video_block')->field('id')->where(array('type'=>'其它'))->find();
		$this->id=$id['id'];
		// 判断用户是否创建团队
		$isteam = M('Team')->field('id')->where(array('Uid'=>$_SESSION['uid']))->find();
		$this->isteam=$isteam;
		$this->display();
	}


/**
* 策划书文件上传
*/
	public function uploadPlan(){
		header("content-type:text/html;charset=utf-8");
		$upload = new \Think\Upload();  //实例化上传类
		$upload->maxSize   =  200*1024*1024;  //设置策划书上传大小为200M
		$upload->exts      =  array(
			'doc', 'docx', 'pdf', 'zip', 'rar', 'ppt', 'xls', 'txt'
			);    //设置策划书上传类型
		$upload->rootPath  =  './Public/Home/';     //设置策划书上传保存的根路径
		$upload->savePath  =  '/upload/planning-book/';  //设置策划书上传子目录
		$upload->saveName  =  array('uniqid', '');  //设置上传的策划书的保存规则(文件名)默认是uniqid()函数基于以微秒计的当前时间，生成一个唯一的 ID。
		$upload->autoSub   =  true;                 //设置自动使用子目录保存策划书
		$upload->subName = array('date','Y-m-d');
		$upload->replace   =  false;                //设置是否同名覆盖

		//上传文件
		$info = $upload->upload();
		if(!$info){
			$this->error($upload->getError());
		}else{  //上传成功，获取上传文件信息
			foreach($info as $file){
				$arr['plan_route']   = $file['savepath'].$file['savename'];  //文件保存路径
				// $savepath = $file['savepath'];  //文件保存路径
				// $savename = $file['savename'];  //文件保存名称
				// $name     = $file['name'];      //文件原始名称
				// $size     = $file['size'];      //文件大小
				// $ext      = $file['ext'];       //文件后缀
   				 }
   				$arr['Uid']      = $_SESSION['uid'];           //用户id
   				$arr['plan_type']    = I('post.plan-type');       //文件类型
				$arr['plan_title']   = I('post.plan-title');      //项目名称
				$arr['plan_summary'] = I('post.plan-summary');    //项目简介
				$arr['planup_time']  = time();             //项目发起时间
				$arr['plan_stage']   = 1;

				//$arr['plan_team']    = I('post.plan-role'); //发起角色
				//团队id
				if(I('post.plan-role')==1){
					$team_id=M('team')->field('id')->where(array('Uid'=>$arr['Uid']))->find();
					if($team_id['id']>0){
						$arr['Tid']=$team_id['id'];
					}
					else{
						$arr['Tid']=0;
					}
				}
				else{
					$arr['Tid']=0;
				}

   				 // echo $arr['plan_route']."<br>".$arr['plan_type']."<br>".$arr['plan_state']."<br>".$arr['plan_title']."<br>".$arr['plan_summary']."<br>".$arr['planup_time'];
   				 //判断存入数据库
   				 // if(POST){
   				 	//实例化$Plan对象
   				 	$Plan = D('Plan');
   				 	//自动验证
   				 	if(!$data = $Plan->create($arr)){
   				 		header("Content-type: text/html; charset=utf-8");
   				 		$this->error('发起失败：'.$Plan->getError(),U('Wisdom/index'));
   				 	}
   				 	//插入数据库
   				 	if($Plan->add($data)){
   				 		$this->success('项目添加成功！',U('Wisdom/index'));
   				 	}else{
   				 		$this->error('项目添加失败：'.$Plan->getError(),U('Wisdom/index'));
   				 	}
		}
	}


	/**
* 视频作品上传
*/
	public function uploadVideo(){
		header("content-type:text/html;charset=utf-8");
		$upload = new \Think\Upload();  //实例化上传类
		$upload->maxSize   =  2*1024*1024*1024;  //设置视频作品上传大小为2G
		$upload->exts      =  array(
			'mp4', 'rmvb', 'flv','mkv'
			);    //设置视频作品上传类型
		$upload->rootPath  =  './Public/Home/';     //设置视频作品上传保存的根路径
		$upload->savePath  =  '/upload/Video/';  //设置策划书上传子目录
		$upload->saveName  =  array('uniqid', '');  //设置上传视频作品的保存规则(文件名)默认是uniqid()函数基于以微秒计的当前时间，生成一个唯一的 ID。
		$upload->autoSub   =  true;                 //设置自动使用子目录保存策划书
		$upload->subName = array('date','Y-m-d');
		$upload->replace   =  false;                //设置是否同名覆盖

		//上传文件
		$info = $upload->upload();
		if(!$info){
			$this->error($upload->getError());
		}else{  //上传成功，获取上传文件信息
			foreach($info as $file){
				$arr['video_route']   = $file['savepath'].$file['savename'];  //文件保存路径

				preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
		        $str=$str[0].'\\Public\\Home';
		        $str=str_replace('\\', '/', $str);
				$onestr=$str.$arr['video_route'];
				preg_match('/.*\./',$onestr,$attribute);

				
				preg_match("/.*\./", $file['savename'], $upload_img);
				$upload_img=str_replace('.', '', $upload_img[0]);
				$arr['video_cover']=$upload_img.'.jpg';
				$twostr=$str.'/upload_img/'.$upload_img;
				$str=str_replace('/', '\\\\', $str);
				$cmd="ffmpeg -ss 00:01:00 -i ".$onestr." -f image2 -y ".$twostr.'.jpg';
				exec($cmd);

				//file_put_contents('E:/1.txt', $cmd);

				// $savepath = $file['savepath'];  //文件保存路径
				// $savename = $file['savename'];  //文件保存名称
				// $name     = $file['name'];      //文件原始名称
				// $size     = $file['size'];      //文件大小
				// $ext      = $file['ext'];       //文件后缀
   				 }
   				$arr['Uid']      = $_SESSION['uid'];           //用户id
   				$arr['video_type']    = I('post.video-type');       //文件类型
				$arr['video_title']   = I('post.video-title');      //项目名称
				$arr['video_summary'] = I('post.video-summary');    //项目简介
				$arr['vidup_time']  = time();             //视频上传时间
				//$arr['plan_team']    = I('post.video-role'); //发起角色


				if(I('post.video-role')==1){
					$team_id=M('team')->field('id')->where(array('Uid'=>$arr['Uid']))->find();
					if($team_id['id']>0){
						$arr['Tid']=$team_id['id'];
					}
					else{
						$arr['Tid']=0;
					}
				}
				else{
					$arr['Tid']=0;
				}

   				 // echo $arr['plan_route']."<br>".$arr['plan_type']."<br>".$arr['plan_state']."<br>".$arr['plan_title']."<br>".$arr['plan_summary']."<br>".$arr['planup_time'];
   				 //判断存入数据库
   				 // if(POST){
   				 	//实例化$Plan对象
   				 	$Plan = D('Video');
   				 	//自动验证
   				 	if(!$data = $Plan->create($arr)){
   				 		header("Content-type: text/html; charset=utf-8");
   				 		$this->error('发起失败：'.$Plan->getError(),U('Wisdom/index'));
   				 	}
   				 	//插入数据库
   				 	$id=$Plan->add($data);
   				 	if($id){
				 			
   				 		$this->success('项目添加成功！',U('Wisdom/index'));
   				 	}
   				 	else{
   				 		$this->error('项目添加失败：'.$Plan->getError(),U('Wisdom/index'));
   				 	}
		}
	}


	public function lll(){
		//$root = realpath(__FILE__);
		//var_dump($root);
		preg_match("/.*\./", '58cea4d0edd13.mp4', $str);
		$str1=str_replace('.', '', $str);
		//$str=$str[0].'\\Public\\Home';
		//$str=$str.
		//$str=str_replace('\\', '/', $str);

		
		var_dump($str1);
	}

}