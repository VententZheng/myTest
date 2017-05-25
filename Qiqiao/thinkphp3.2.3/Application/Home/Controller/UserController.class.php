<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
    //构造方法
    public function __construct(){
        //指定不需要检查登录的方法列表
        parent::__construct();
        $allow_action = array(
           'logout','login','phoneRegister','emailRegister','checkphone','checkemail'
            );
        if($this->userinfo ==false && !in_array(ACTION_NAME, $allow_action)){
            $this->error('请登录!',U('User/login'));//跳转到登录页面
        }
        $this->assign('title','个人中心 - 七巧网');
    }

    //我的项目
    public function myProject(){
        //实例化
        $Plan = M('Plan');
        $Video = M('Video');
        $id = $_SESSION['uid'];
        $hatchPro = $Plan->where(array('Uid'=>$id))->select();
        $originalPro =$Video->where(array('Uid'=>$id))->select();
        foreach($hatchPro as $key=>$v){
            $res=M('plan_block')->field('name')->where(array('id'=>$v['plan_stage']))->find();
            $hatchPro[$key]['plan_stage']=$res['name'];
        }
        $this->assign('hatchPro',$hatchPro);
        $this->assign('originalPro',$originalPro);
        $this->display();
    }
    //关注项目
    public function myConcern(){
        $Model = M('Collection');
        $id = $_SESSION['uid'];

        //关注视频作品
        $vdata = $Model->join('qiq_video ON qiq_collection.vid = qiq_video.id')->where(array('qiq_collection.uid'=>$id))->select();
        foreach($vdata as $key=>$v){
            $res=M('video_block')->field('type')->where(array('id'=>$v['video_type']))->find();
            $vdata[$key]['video_type']=$res['type'];
        }

        $this->assign('video',$vdata);
        

        //关注孵化项目
        $pdata = $Model->join('qiq_plan ON qiq_collection.pid = qiq_plan.id')->where(array('qiq_collection.uid'=>$id))->select(); 
        foreach($pdata as $key=>$v){
            $res=M('video_block')->field('type')->where(array('id'=>$v['plan_type']))->find();
            $result=M('plan_block')->field('name')->where(array('id'=>$v['plan_stage']))->find();
            $pdata[$key]['plan_type']=$res['type'];
            $pdata[$key]['plan_stage']=$result['name'];
        }
        $this->assign('plan',$pdata);

        //分页

        $this->display();
    }

    //取消关注
    public function cancelConcern(){
        $Model = M('Collection');
        $id = I('get.id/d',0);
        if($Model->where(array('cid'=>$id))->delete()){
            header("Content-Type:text/html; charset=utf-8");
            echo "<script language='javascript' type='text/javascript'>alert('取消关注成功');";
            echo "window.location.href='".U('/User/myConcern')."'";
            echo "</script>";
        }
    }

    //个人中心我的消息
    public function myMessage(){
        $id =session('uid');
        $Letter = M('private_letter');
        $letter_data = $Letter->where(array('Toid'=>$id,'letter_state'=>0))->order('letter_state asc,letter_time desc')->select();

        $this->message=M('message')->where(array('user_id'=>$id,'is_used'=>1))->select();
        $this->assign('letter_data',$letter_data);
        $this->display();
    }


    //个人中心我的团队
    public function myTeam(){
        //显示团队基本信息
        $Team = M('Team');
        $data = $Team->where(array('Uid'=>$_SESSION['uid']))->find();
        $this->assign('mtdata',$data);
        //显示团队成员信息
        $Member = M('Teammember');
        //显示导师
        $tap['Tid'] = $data['id'];
        $tap['member_type'] = '导师';
        $tdata = $Member->where($tap)->select();
        $this->assign('tdata',$tdata);
        //显示成员
        $map['Tid'] = $data['id'];
        $map['member_type'] = '成员';
        $mdata = $Member->where($map)->select();
        $this->assign('mdata',$mdata);
        $this->display();
    }
    //添加团队信息
    public function updateTeam(){
        $data['Uid'] = $_SESSION['uid'];
        $data['team_name'] = I('post.teamname');
        $data['team_slogan'] = I('post.teamsolgan');
        $data['team_summary'] = I('post.teamsummary');
        //判断提交方式
        if(IS_POST){
            //实例化
            $Team = D('Team');
            //判断用户是否已经创建团队，若有则更新团队信息，若没则创建
            if(!$Team->where(array('Uid'=>$data['Uid']))->select()){
                if(!$adata=$Team->create($data)){  //创建团队
                    // $this->error("团队创建失败".$Team->getError(),U('User/myTeam'));
                    header("Content-Type:text/html; charset=utf-8");
                    echo "<script language='javascript'>alert('团队创建失败');window.location.href='./myTeam.html';</script>";
                }else{
                    if($Team->add($adata)){
                        header("Content-Type:text/html; charset=utf-8");
                        // $this->success("团队创建成功",U('User/myTeam'));
                        echo "<script language='javascript'>alert('团队创建成功');window.location.href='./myTeam.html';</script>";

                    }else{
                        header("Content-Type:text/html; charset=utf-8");
                        // $this->error("团队添加失败".$Team->getError(),U('User/myTeam'));
                        echo "<script language='javascript'>alert('团队添加失败');window.location.href='./myTeam.html';</script>";
                    }
                }
            }else{  //更新团队信息
                if(!$updata=$Team->create($data)){
                    // $this->error("更新失败".$Team->getError(),U('User/Team'));
                    header("Content-Type:text/html; charset=utf-8");
                    echo "<script language='javascript'>alert('团队信息更新成功');window.location.href='./myTeam.html';</script>";
                }else{
                    if($Team->where(array('Uid'=>$_SESSION['uid']))->save($updata)){
                        header("Content-Type:text/html; charset=utf-8");
                        // $this->redirect('User/myTeam');
                        // $this->success("团队更新成功",U('User/myTeam'));
                        echo "<script language='javascript'>alert('团队信息更新成功');window.location.href='./myTeam.html';</script>";

                    }else{
                        header("Content-Type:text/html; charset=utf-8");
                        $this->redirect('User/myTeam');
                        // $this->error("团队更新失败".$Team->getError(),U('User/myTeam'));
                        // echo "<script language='javascript'>alert('团队信息更新失败');window.location.href='./myTeam.html';</script>";
                    }
                }
            }
        }
    }

    //修改团队图片
    public function editTeampic(){

        $uid = $_SESSION['uid'];
        $Team = M('Team');

        $basecode = I('post.basecode');  
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $basecode, $result)){
          $type = $result[2];
            $route = "./Public/Home/image/team/";
            $pic_name = uniqid().".{$type}";
          $new_file = $route.$pic_name;
          if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $basecode)))){
           $data = $pic_name;
           $tdata = $Team->where(array('Uid'=>$uid))->setField('team_pic',$data);
           echo $data;
          }else{
            $data = "error";
              echo $data;
          }
            
         }
    }

    //添加团队成员判断团队是否已经创建
    public function checkTeam(){
        $uid = $_SESSION['uid'];
        $Team = M('Team');
        $data = $Team->where(array('Uid'=>$uid))->getField('id');
        echo json_encode($data);
    }

    // 添加团队成员
    public function addMember(){
        $data['Uid'] = $_SESSION['uid']; //用户id
        $data['member_type'] = I('post.membertype');
        $data['member_name'] = I('post.membername');
        $data['member_summary'] = I('post.membersummary');
        //实例化
        $Team = D('Team');
        $Member = D('Teammember');
        //通过Uid得到Tid
        $data['Tid'] = $Team->where(array('Uid'=>$data['Uid']))->getField('id');
        if(IS_POST){
            //判断添加成员是否已存在
            $map['Uid'] = $data['Tid'];
            $map['member_name'] = $data['member_name'];
            if($Member->where($map)->select()){
                header("Content-Type:text/html; charset=utf-8");
                echo "<script language='javascript'>alert('该成员已存在');window.location.href='./myTeam.html';</script>";
            }else{
                if(!$mdata=$Member->create($data)){
                    header("Content-Type:text/html; charset=utf-8");
                    // $this->error('添加成员失败'.$Member->getError(),U('User/myTeam'));
                    echo "<script language='javascript'>alert('添加成员失败');window.location.href='./myTeam.html';</script>";
                }else{
                    if($Member->add($mdata)){
                        header("Content-Type:text/html; charset=utf-8");
                        echo "<script language='javascript'>alert('成员添加成功');window.location.href='./myTeam.html';</script>";
                    }else{
                        header("Content-Type:text/html; charset=utf-8");
                        // $this->error('添加成员失败'.$Member->getError(),U('User/myTeam'));
                        echo "<script language='javascript'>alert('添加成员失败');window.location.href='./myTeam.html';</script>";
                    }
                }
            }
        }
    }
    //删除团队成员
    public function delMember(){
        $id = I('get.id/d',0);
        $Member = M('Teammember');
        if($Member->where(array('id'=>$id))->delete()){
            header("Content-Type:text/html; charset=utf-8");
            echo "<script language='javascript' type='text/javascript'>alert('删除成功');";
            echo "window.location.href='".U('/User/myTeam')."'";
            echo "</script>";
        }
    }

    //个人中心我的资料
    public function myData(){
        $User = D('User');
        $id = $_SESSION['uid'];
        $mydata = $User->where(array('id'=>$id))->find();
        $this->assign('mydata',$mydata);
        $this->display();
    }
    //更新我的资料-个人信息
    public function updateData(){
        $User = M('User');  //实例化
        if(IS_POST){
            if(!$mydata=$User->create()){
                $this->error('个人修改失败'.$User->getError(),U('User/myData'));
            }else{
                if($User->where(array('id'=>$_SESSION['uid']))->save($mydata)){
                    header("Content-Type:text/html; charset=utf-8");
                    echo "<script language='javascript'>alert('个人信息修改成功');window.location.href='./myData.html';</script>";
                }else{
                    header("Content-Type:text/html; charset=utf-8");
                    echo "<script language='javascript'>alert('您没有对个人信息进行修改');window.location.href='./myData.html';</script>";
                }
            }
        }
    }

    //修改头像
    public function editUserimg(){

        $uid = $_SESSION['uid'];
        $User = M('User');

        $basecode = I('post.basecode');  
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $basecode, $result)){
          $type = $result[2];
            $route = "./Public/Home/image/user_img/";
            $pic_name = uniqid().".{$type}";
          $new_file = $route.$pic_name;
          if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $basecode)))){
           $data = $pic_name;
           $tdata = $User->where(array('id'=>$uid))->setField('head_pic',$data);
           echo $data;
          }else{
            $data = "error";
              echo $data;
          }
            
         }
    }

    //个人中心账户设置
    public function myAccount(){
        $User = M('User');
        $user = $User->where(array('id'=>$_SESSION['uid']))->find();
        $this->assign('adata',$user);
        $this->display();
    }
    //解除邮箱绑定
    public function removerEmail(){
        $User = M('User');
        $checkphone = $User->where(array('id'=>$_SESSION['uid']))->getField('phone');
        if(!$checkphone){  //先判断手机号码是否存在
            header("Content-Type:text/html; charset=utf-8");
            echo "<script language='javascript'>alert('请先绑定手机号再解除邮箱');window.location.href='./myAccount.html';</script>";
        }else{
            if($User->where(array('id'=>$_SESSION['uid']))->setField('email','')){
                header("Content-Type:text/html; charset=utf-8");
                echo "<script language='javascript'>alert('邮箱解除成功');window.location.href='./myAccount.html';</script>";
            }else{
                header("Content-Type:text/html; charset=utf-8");
                echo "<script language='javascript'>alert('邮箱解除失败');window.location.href='./myAccount.html';</script>"; 
            }
        }
    }
    //邮箱绑定
    public function addEmail(){
        $User = M('User');
        $id = $_SESSION['uid'];
        $data['email'] = I('post.email');
        if(IS_POST){
            if(!$edata=$User->create($data)){
                $this->error('邮箱绑定失败'.$User->getError(),U('User/myAccount'));
            }else{
                if($User->where(array('id'=>$id))->save($edata)){
                    header("Content-Type:text/html; charset=utf-8");
                    echo "<script language='javascript' type='text/javascript'>alert('邮箱绑定成功');";
                    echo "window.location.href='".U('/User/myAccount')."'";
                    echo "</script>";
                }else{
                    header("Content-Type:text/html; charset=utf-8");
                    echo "<script language='javascript' type='text/javascript'>alert('邮箱绑定失败');";
                    echo "window.location.href='".U('/User/myAccount')."'";
                    echo "</script>";
                }
            }
        }
    }

     //手机号解除绑定
    public function removerPhone(){
        $User = M('User');
        $checkphone = $User->where(array('id'=>$_SESSION['uid']))->getField('email');
        if(!$checkphone){  //先判断手机号码是否存在
            header("Content-Type:text/html; charset=utf-8");
            echo "<script language='javascript'>alert('请先绑定邮箱再解除手机号');window.location.href='./myAccount.html';</script>";
        }else{
            if($User->where(array('id'=>$_SESSION['uid']))->setField('phone','')){
                header("Content-Type:text/html; charset=utf-8");
                echo "<script language='javascript'>alert('手机号解除成功');window.location.href='./myAccount.html';</script>";
            }else{
                header("Content-Type:text/html; charset=utf-8");
                echo "<script language='javascript'>alert('手机号解除失败');window.location.href='./myAccount.html';</script>"; 
            }
        }
    }

    //手机号绑定
    public function addPhone(){
        $User = M('User');
        $id = $_SESSION['uid'];
        $data['phone'] = I('post.phonenum');
        if(IS_POST){
            if(!$edata=$User->create($data)){
                $this->error('手机号绑定失败'.$User->getError(),U('User/myAccount'));
            }else{
                if($User->where(array('id'=>$id))->save($edata)){
                    header("Content-Type:text/html; charset=utf-8");
                    echo "<script language='javascript' type='text/javascript'>alert('手机号绑定成功');";
                    echo "window.location.href='".U('/User/myAccount')."'";
                    echo "</script>";
                }else{
                    header("Content-Type:text/html; charset=utf-8");
                    echo "<script language='javascript' type='text/javascript'>alert('手机号绑定失败');";
                    echo "window.location.href='".U('/User/myAccount')."'";
                    echo "</script>";
                }
            }
        }
    }

    //修改密码
    public function modifyPwd(){
        $condition['id'] = $_SESSION['uid'];
        $data['password'] = md5(I('post.newpassword'));
        $pwd=M('user')->where($condition)->save($data);
        if($pwd){
            header("Content-Type:text/html; charset=utf-8");
            echo "<script language='javascript' type='text/javascript'>alert('修改密码成功');";
            echo "window.location.href='".U('/User/myAccount')."'";
            echo "</script>";
        }else{
            header("Content-Type:text/html; charset=utf-8");
            echo "<script language='javascript' type='text/javascript'>alert('修改密码失败');";
            echo "window.location.href='".U('/User/myAccount')."'";
            echo "</script>";
        }
    }



    /**
    * 用户登录
    */
    public function login(){
        //判断提交方式
        if(IS_POST){
            $phone=I('phone');
            $password=md5(I('password'));
            $map['phone'] = $phone;
            $map['email'] = $phone;
            $map['_logic'] = 'OR';
            $userdata = M('user')->field('id,password,username')->where($map)->find();
            if($userdata && ($userdata['password'] == $password)){
               $userinfo['id']=$userdata['id'];
               $userinfo['phone']=$phone;
            }
            if($userinfo){
            	//登录成功
            	session('userinfo', $userinfo);
                session('uid',$userinfo['id']);
                $data['reg_time']=date('Y-m-d H:i:s',time());
                M('user')->where(array('id'=>$_SESSION['uid']))->save($data);
            	$this->redirect('Index/index');
            }
            $this->error('登录失败：用户名或密码错误。',U('User/login'),3);
        }
        $this->display();
    }

    /**
    * 用户注册
    */
    // 手机号码注册
    public function phoneRegister(){
        //判断提交方式
        $regdata['phone'] = I('post.phoneNum');
        $regdata['password'] = I('post.password');
        $regdata['username'] = time().rand(10,99);
        $code=I('pCode');
        if($code==$_SESSION['code']){


     	if(IS_POST){
    		//实例化模型
			 $User = D('User');
             //自动验证
			 if(!$data=$User->create($regdata)){
                header("Content-type: text/html; charset=utf-8");
			 	$this->error('注册失败：'.$User->getError(),U('Index/index'));
			 	}
             //插入数据库
             if($User->add($data)){
                     // $this->success('注册成功！',U('User/index')); 
                $this->redirect('User/index');
                 }else{
                     $this->error('数据添加失败：'.$User->getError(),U('Index/index'));
                 }
			 }
            $this->display('User/login');
        }
        else{
                $this->error('注册失败',U('Index/index'));
        }
    }
    //邮箱注册
    public function emailRegister(){
        //判断提交方式
        $regdata['email'] = I('post.email');
        $regdata['password'] = I('post.password');
        $regdata['username'] = time().rand(10,99);
        if(IS_POST){
            //实例化模型
             $User = D('User');
             //自动验证
             if(!$data=$User->create($regdata)){
                header("Content-type: text/html; charset=utf-8");
                $this->error('注册失败：'.$User->getError(),U('User/login'));
                }
             //插入数据库
             if($User->add($data)){
                     // $this->success('注册成功！',U('User/index')); 
                $this->redirect('User/index');
                 }else{
                     $this->error('数据添加失败：'.$User->getError(),U('Index/index'));
                 }
             }
            $this->display('User/login');
    }

    //ajax检查注册手机号码是否存在
    public function checkphone(){
        $valid = true;
        $phonenum = trim($_REQUEST['ajaxphone']);
        $Form = M("User");
        if($Form->getByPhone($phonenum)){
            $valid = flase;
        }
        echo $valid;
    }

    //ajax检查注册邮箱是否存在
    public function checkemail(){
        $valid = true;
        $email = trim($_REQUEST['ajaxemail']);
        $Form = M("User");
        if($Form->getByEmail($email)){
            $valid = flase;
        }
        echo $valid;
    }

    //ajax检查密码原密码是否正确
    public function checkpwd(){
        $valid = true;
        $password = I('post.ajaxpwd','','md5');
        $User = M('User');
        $pwd = $User->where(array('id'=>$_SESSION['uid']))->getField('password');
        if($pwd != $password){
            $valid = false;
        }
        echo $valid;
    }

    //消息通知

    Public function set_message(){
        $condition['id']=I('id');
        $data['is_used']='0';
        $res=M('message')->where($condition)->save($data);
        $this->ajaxReturn($res);
    }

    //私信
    Public function set_privateletter(){
        $id=I('id');
        $data['letter_state']=1;
        $res=M('private_letter')->where(array('id'=>$id))->save($data);
        $this->ajaxReturn($res);
    }



    //退出系统
    public function logout(){
        session(null); //清空前台所有session会话
        $this->redirect('User/login');
    }

}
