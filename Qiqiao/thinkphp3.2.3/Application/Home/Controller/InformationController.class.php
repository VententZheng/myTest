<?php
namespace Home\Controller;
use Think\Controller;

class InformationController extends CommonController {

	//构造方法
    public function __construct(){
        //指定不需要检查登录的方法列表
        parent::__construct();
        $allow_action = array(
            'index','detail','upload','showAllUsers'
            );
        if($this->userinfo ==false && !in_array(ACTION_NAME, $allow_action)){
            $this->error('请登录!',U('User/login'));//跳转到登录页面
        }
        $this->assign('title','综艺资讯 - 七巧网');
    }

    public function index(){
    	//显示标题
        $block_id=I('get.blockid');
        $this->assign('block_id', $block_id);
        //获取板块
        $Block = D('Block');
        $block = $Block->select();
        $this->assign('block', $block);
        $Infor = D('information');
        
        if(empty($block_id)){
            $where['is_send'] = 1;
            $p=getpage($Infor,$where,5);
            $list = $Infor->where($where)->order('news_time desc')->select();
            $this->assign('list',$list);
        }else{
            $where['is_send'] = 1;
            $where['blockid'] =$block_id;
            $p=getpage($Infor,$where,5);
            $list = $Infor->where($where)->order('news_time desc')->select();
            $this->assign('list',$list);
        }
        $this->page=$p->show();

    	//显示24小时热门榜
    	$day_time = strtotime(date('Y-m-d H:i:s', strtotime('-1 day')));
        $mpp['news_time'] = array('gt',$day_time);
        $mpp['is_send'] = 1;
        $hot_day = $Infor->field('id,news_title')->limit(10)->where($mpp)->order('news_visit DESC')->select();
        $this->assign('hot_day',$hot_day);

        //权威人士专访
        $week_time = strtotime(date('Y-m-d H:i:s', strtotime('-1 week')));
        $map['news_time'] = array('egt',$week_time);
        $map['blockid'] = array('eq',4);
        $map['is_send'] = 1;
        $hot_week = $Infor->field('id,news_title')->limit(10)->where($map)->order('news_visit DESC')->select();
        $this->assign('hot_week',$hot_week);
        
        $this->display();      
    }

    //综艺资讯搜索
    public function search(){
        $search = I('get.infor-search');
        //实例化
        $Information = M('Information');
        $condition['is_send'] = 1;
        $condition['_string'] = '(news_title like "%'.$search.'%")  OR (news_keywords like "%'.$search.'%")';
        $list = $Information->where($condition)->select();
        $this->assign('list',$list);

        $this->display('Information/index');
    }

    //跳转到新闻资讯详情页面
    public function detail(){
    	$id = I('get.id/d',0);   //获取详细新闻资讯id
    	$Infor = D('Information');
    	$User = D('User');
    	//新闻浏览量，刷新和点击均加1
    	$Infor->where(array('id'=>$id))->setInc('news_visit',1);

    	$user = $User->where(array('id'=>session('uid')))->find();
    	//替换手机号码和邮箱中间几个字符用星号代替
    	$reuser['username']=$user['username'];
    	$reuser['phone'] = substr_replace($user['phone'], '****', 3, 4);
    	$reuser['email'] = substr_replace($user['email'], '****', 3, 4);

    	$data = $Infor->where(array('id'=>$id,'is_send'=>1))->find();
    	if(empty($data)){
    		$this->error('您访问的新闻资讯不存在，已删除！');
    	}
    	$this->assign('data',$data);
    	$this->assign('reuser',$reuser);

        //评论显示
        $comment = $this->CommentList($pid = 0, $commentList = array(), $spac = 0);
        $this->assign('commentList', $comment);
        $totalcom = M('Comment')->where(array('Nid'=>$id))->count();
        $this->assign('totalcom',$totalcom);
    	$this->display();
    }

    /**
    *添加评论
    */
    public function addComment() {
        $fid = I('post.inforid');
        $data = array(
            'com_content' => I("post.comment"),
            'com_time' => date('Y-m-d H:i:s',time()),
            'pid' => trim(I('post.pid')),
            'Nid' => trim(I('post.inforid')),
            'Uid' => trim(I('post.userid')),
        );
        $comment = M("Comment"); // 实例化User对象
        if (!$comment->create()) {//验证昵称和评论
            exit($comment->getError());
        } else {
            $add = $comment->add($data);
            if ($add) {
                $this->redirect('Information/detail', array('id' => $fid), 0);
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
        $List = M('comment')->field('id,com_time,uid,vid,com_content,pid,nid')->where(array('pid' => $pid,'Nid'=>$id))->order("id DESC")->select();
        foreach ($List as $k => $v) {
            $uname = M('User')->field('username,head_pic')->where(array('id'=>$v['uid']))->find();
            $commentList[$i]['level'] = $spac; //评论层级
            $commentList[$i]['uname'] = $uname['username'];
            $commentList[$i]['headPic']=$uname['head_pic'];
            $commentList[$i]['id'] = $v['id'];
            $commentList[$i]['nid'] = $v['nid'];
            $commentList[$i]['pid'] = $v['pid']; //此条评论的父id
            $commentList[$i]['com_content'] = $v['com_content'];
            $commentList[$i]['com_time'] = $v['com_time'];
            $i++;
            $this->CommentList($v['id'], $commentList, $spac);
        }
        return $commentList;
    }



}