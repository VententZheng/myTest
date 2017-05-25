<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class VarietyController extends CommonController
{
	//构造方法
    public function __construct(){
        //指定不需要检查登录的方法列表
        parent::__construct();
        $allow_action = array(
            'index','player'
            );
        if($this->userinfo ==false && !in_array(ACTION_NAME, $allow_action)){
            $this->error('请登录!',U('User/login'));//跳转到登录页面
        }
        $this->assign('title','原创综艺 - 七巧网');
    }

    //显示原创综艺页面
	public function index(){
		//显示视频列表
        $id=trim(I('get.id'));
        $vtype = trim(I('get.vtype'));   //类型
        $vuptime = trim(I('get.vuptime'));  //时间
        $vstate = trim(I('get.vstate'));  //状态

        $condition = 'video_state=1';  //审核通过
        $orderby = 'v.vidup_time desc';
        if(!empty($vtype)){
            $condition = $condition.' and video_type='.$vtype;
        }
        if(!empty($vstate)){
            if($vstate==1){
                $orderby = 'v.play_times DESC';
            }
            if($vstate==2){
                $orderby = 'v.vidup_time DESC';
            }
            if($vstate==3){
                $orderby = 'v.video_praise DESC';
            }
        }
        // 分页
		$Video= D('Video');
        $p=getpage($Video,$condition,8);

    	$list = $Video->alias('v')->join('LEFT JOIN '.C('DB_PREFIX').'video_attributes a ON v.id=a.videoid')->order($orderby)->where($condition)->select();
        foreach($list as $key=>$v){
            if($v['duration']>3600){
                $hour=intval($v['duration']/3600);
                $v['duration']=$v['duration']%3600;
                $min=intval($v['duration']/60);
                $sed=$v['duration']%60;
            }
            else if($v['duration']>60 && $v['duration']<3600){
                $hour= 0;
                $min=intval($v['duration']/60);
                $sed=$v['duration']%60;
            }
            else if($v['duration']<60){
                $hour=0;
                $min=0;
                $sed=$v['duration'];
            }
            $list[$key]['duration']="$hour:$min:$sed";
        }
        $this->assign('vtype',$vtype);
        $this->assign('vuptime',$vuptime);
        $this->assign('vstate',$vstate);
    	$this->assign('Vlist',$list);
        $this->video_block=M('video_block')->order('id DESC')->select(); //输出类型
        //$this->video_time=M('video_time')->order('id DESC')->select(); //输出时间
        //显示分页
        $this->page=$p->show();

		$this->display();
	}

    // 原创综艺搜索
    public function vidSearch(){
        $vsearchcon = trim(I('get.vid-search'));
        $Video = D('Video');
        $condition['video_state'] = 1;
        $condition['_string'] = '(video_title like "%'.$vsearchcon.'%")  OR (video_summary like "%'.$vsearchcon.'%")';
        $list = $Video->alias('v')->join('LEFT JOIN '.C('DB_PREFIX').'video_attributes a ON v.id=a.videoid')->order('v.vidup_time desc')->where($condition)->select();
        $this->assign('Vlist',$list);
        $this->display('Variety/index');
    }

	// 显示视频播放页面
	public function player(){
        $id=trim(I('id'));
        $this->assign('videId',$id);
        $type=trim(I('type'));
        $other=intval(trim(I('other')));
        $video=M('video')->field('video_route')->where(array('id'=>$id))->find();
        $video=$video['video_route'];
        $pre=substr($video,0, strpos($video,'.'));
        //$this->video=$pre.'/normal/index.m3u8';

        $res=M('app')->field('token')->where(array('id'=>1))->find();
        $today=date('Y-m-d');
        $today_time=strtotime($today);
        $token=$res['token'].$today_time;
        $this->video='id/'.$id.'/type/normal/token/'.$token;
        $this->id=$id;
        if($type==2){
        $this->video='id/'.$id.'/type/all_high/token/'.$token;
        //$this->video=$pre.'/all_high/index.m3u8';
        }
        else if($type==1){
          $this->video='id/'.$id.'/type/high/token/'.$token;
          //$this->video=$pre.'/high/index.m3u8';
        }
        $this->time=0;
        if(!empty($other)){
          $this->time=$other;
        }
        $width=M('video_attributes')->field('width')->where(array('videoid'=>$this->id))->find();
        $width=$width['width'];
        if($width>1440){
          $this->num='<li><a href="#" style="color:black">全高清</a></li><li><a href="#" style="color:black">高清</a></li><li><a href="#" style="color:black">标清</a></li>';
        }
        else if($width>1024 && $width<1440){
          $this->num='<li><a href="#" style="color:black">高清</a></li><li><a href="#" style="color:black">标清</a></li>';
        }
        else if($width<1024){
          $this->num='<li><a href="#" style="color:black">标清</a></li>';
        }
        $this->width=$width;

		//实例化
		$Video = M("Video");
		$User = D('User');
		//视频播放量，刷新和点击均加1
    	$Video->where(array('id'=>$id))->setInc('play_times',1);

        //多表查询用户表、视频表
        $vudata = $Video->join('qiq_user ON qiq_video.Uid = qiq_user.id')->where(array('qiq_video.id'=>$id))->field('qiq_user.id,video_type,username,video_summary,video_title,head_pic')->find();
    	if(empty($vudata)){
    		$this->error('您访问的页面不存在，已删除！');
    	}
        //显示类型
        $videtype=M('video')->field('video_type')->where(array('id'=>$id))->find();
        $videotype = M('Video_block')->where(array('id'=>$videtype['video_type']))->getField('type');
        $this->assign('videotype',$videotype);
    	$this->assign('Vdata',$vudata);

        //评论显示
        $comment = $this->CommentList($pid = 0, $commentList = array(), $spac = 0);
        $this->assign('commentList', $comment);
        $vid=trim(I('id'));
        $totalcom = M('Comment')->where(array('Vid'=>$vid))->count();
        $this->assign('totalcom',$totalcom);
		$this->display();
	}

    



        public function play(){
        $id=trim(I('id'));
        $type=trim(I('type'));
        $one_token=trim(I('token'));
        $video=M('video')->field('video_route')->where(array('id'=>$id))->find();
        $video=$video['video_route'];
        $pre=substr($video,0, strpos($video,'.'));
        $result=M('app')->field('token')->where(array('id'=>1))->find();
        $today=date('Y-m-d');
        $today_time=strtotime($today);
        $token=$result['token'].$today_time;
        if($one_token==$token){
            preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
            $str=str_replace('\\', '/', $str);
            $str=$str[0].'/Public/Home'.$pre.'/'.$type.'/index.m3u8';
            $res=file_get_contents($str);

            //$token=$today_time;
            $res=str_replace('.ts','/other/'.$token,$res);
            echo $res;
        }
        else{
            preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
            $str=str_replace('\\', '/', $str);
            $str=$str[0].'/Public/Home'.$pre.'/'.$type.'/'.$one_token.'.ts';
            if(I('other')==$token){

            $res=file_get_contents($str);
            echo $res;
            }
        }
    }


    //查询收藏,点赞,
    public function checkUpdate(){
        $vid = I('get.videoId');
        $uid = $_SESSION['uid'];

        //收藏
        $collection = M('Collection');
        $data['favorite'] = $collection->where(array('Uid'=>$uid,'Vid'=>$vid))->count();
        //点赞
        $praise = M('Praise');
        $data['fabulous'] = $praise->where(array('Uid'=>$uid,'Vid'=>$vid))->count();
        echo json_encode($data);
    }

    //添加点赞
    public function addPraise(){
        $vid = I('get.videoId');
        $uid = $_SESSION['uid'];
        $Praise = M('Praise');
        $arr = array(
            'Uid'=>$uid,
            'Vid'=>$vid,
        );
        $res=M('praise')->field('zid')->where($arr)->find();
        $res=$res['zid'];
        if(empty($res)){
            $res=M('praise')->add($arr);
        }
        //更新视频video表点赞总数
        $vpraise = $Praise->where(array('Vid'=>$vid))->count(); //点赞总数
        $Video = M('Video');
        $Video->where('id='.$vid)->setField('video_praise',$vpraise);

        $data = array(
            'uid'=> $uid,
            );
         echo json_encode($data);
    }
    //删除点赞
    public function delPraise(){
        $vid = I('get.videoId');
        $uid = session('uid');
        $praise = M('Praise');
        $praise->where(array('Uid'=>$uid,'Vid'=>$vid))->delete();

        //更新视频video表点赞总数
        $vpraise = $praise->where(array('Vid'=>$vid))->count(); //点赞总数
        $Video = M('Video');
        $Video->where('id='.$vid)->setField('video_praise',$vpraise);

        
        $data = array(
            'uid'=> $uid,
            );
         echo json_encode($data);
    }

    //更新点赞个数
    public function updataPraise(){
        $vid = I('get.videoId');
        $Praise = M('Praise');

        $data['praise'] = $Praise->where(array('Vid'=>$vid))->count();
        // $arr = array(
        //     'praise'=>$praise,
        //     'vid'=>$vid
        // );
        echo json_encode($data);
    }

    //添加收藏
    public function addCollection(){
        $vid = I('get.videoId');
        $id = session('uid');
        $arr = array(
            'Uid'=>$id,
            'Vid'=>$vid,
        );
        $res=M('collection')->field('cid')->where($arr)->find();
        $res=$res['cid'];
        if(empty($res)){
            $res=M('collection')->add($arr);
        }
        $data = array(
            'uid'=> $id,
            'res'=> $res
            );
        //更新视频video表收藏总数
        $vcollection = M('collection')->where(array('Vid'=>$vid))->count(); //点赞总数
        $Video = M('Video');
        $Video->where('id='.$vid)->setField('video_collection',$vcollection);
         echo json_encode($data); 
    }
    //删除收藏
    public function delCollection(){
        $vid = I('get.videoId');
        $id = session('uid');
        $collection = M('Collection');
        $res=$collection->where(array('Uid'=>$id,'Vid'=>$vid))->delete();
        //更新视频video表收藏总数
        $vcollection = M('collection')->where(array('Vid'=>$vid))->count(); //点赞总数
        $Video = M('Video');
        $Video->where('id='.$vid)->setField('video_collection',$vcollection);
        $this->ajaxReturn($res);
    }
    
    // 发送私信
    public function addLetter(){
        $map['lettercontent'] = I('post.letter_content');  //私信内容
        $map['Fromid'] = session('uid');   //发送私信用户id
        $map['Toid'] = I('post.video_uid');   //接收私信用户id
        $map['letter_time'] = time();
        $data = 0;
        $Letter = M('Private_letter');
        if($Letter->add($map)){
            $data = 1;

        }
        echo json_encode($data);
    }


    // 评论
    /**
    *添加评论
    */
    public function addComment() {
        $fid = I('post.inforid');
        $data = array(
            'com_content' => I("post.comment"),
            'pid' => trim(I('post.pid')),
            'Vid' => trim(I('post.inforid')),
            'Uid' => trim(I('post.userid')),
            'com_time' => date('Y-m-d H:i:s',time()),
        );
        $comment = M("Comment"); // 实例化User对象
        if (!$comment->create()) {//验证昵称和评论
            exit($comment->getError());
        } else {
            $add = $comment->add($data);
            if ($add) {
                $this->redirect('Variety/player', array('id' => $fid), 0);
            } else {
                $this->error('评论失败');
            }
        }
    }

     //评论列表
    function CommentList($pid = 0, &$commentList = array(), $spac = 0) {
        $id=I('get.id');
        static $i = 0;
        $spac = $spac + 1; //初始为1级评论
        $List = M('comment')->field('id,com_time,uid,vid,com_content,pid,nid')->where(array('pid' => $pid,'Vid'=>$id))->order("id DESC")->select();
        foreach ($List as $k => $v) {
            $uname = M('User')->field('username,head_pic')->where(array('id'=>$v['uid']))->find();
            $commentList[$i]['level'] = $spac; //评论层级
            $commentList[$i]['uname'] = $uname['username'];
            $commentList[$i]['headPic']=$uname['head_pic'];
            $commentList[$i]['id'] = $v['id'];
            $commentList[$i]['vid'] = $v['vid'];
            $commentList[$i]['pid'] = $v['pid']; //此条评论的父id
            $commentList[$i]['com_content'] = $v['com_content'];
            $commentList[$i]['com_time'] = $v['com_time'];
            $i++;
            $this->CommentList($v['id'], $commentList, $spac);
        }
        return $commentList;
    }

}