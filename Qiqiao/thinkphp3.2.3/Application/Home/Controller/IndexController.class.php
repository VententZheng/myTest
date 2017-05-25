<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

    //构造方法
    public function __construct(){
        //指定不需要检查登录的方法列表
        parent::__construct();
        $allow_action = array(
            'index',
            );
        if($this->userinfo ==false && !in_array(ACTION_NAME, $allow_action)){
            $this->error('请登录!',U('User/login'));//跳转到登录页面
        }
        $this->assign('title','首页 - 七巧网');
    }


    //首页
    public function index(){
        $User = D('User');
        $Video = D('Video');
        //轮播图片
        $carousel = $Video->limit(5)->where(array('video_state'=>1))->order('play_times desc')->select();
        $this->assign('carousel',$carousel);
        
        //最新综艺
        $updata = $Video->limit(9)->where(array('video_state'=>1))->order('vidup_time desc')->select();
        $this->assign('updatevid',$updata);
        //综艺排行榜
        $Hot = $Video->limit(10)->where(array('video_state'=>1))->order('play_times desc')->select();
        $this->assign('hotvid',$Hot);

        //最新孵化
        $Plan = D('Plan');
        $nplan = $Plan->limit(6)->where(array('plan_state'=>1))->order('planup_time desc')->select();
        foreach($nplan as $key=>$v){
            $name=M('plan_block')->field('name')->where(array('id'=>$v['plan_stage']))->find();
            $nplan[$key]['plan_stage']=$name['name'];
        }

        foreach($nplan as $key=>$v){
            $name=M('video_block')->field('type')->where(array('id'=>$v['plan_type']))->find();
            $nplan[$key]['plan_type']=$name['type'];
        }

        $this->assign('nplan',$nplan);
        //热门孵化排行榜
        $hotplan = $Plan->limit(10)->where(array('plan_state'=>1))->order('plan_times desc')->select();
        $this->assign('hotplan',$hotplan);

        //综艺资讯显示
        $Infor = D('information');
        $information = $Infor->limit(5)->order('news_visit desc')->select();
        $this->assign('information', $information);
        //综艺资讯排行榜
        $hotinfor = $Infor->limit(10)->order('news_visit desc')->select();
        $this->assign('hotinfor',$hotinfor);

        //团队展示
        $Team = D('Team');
        $tdata = $Team->limit(8)->where(array('status'=>1))->order('id DESC')->select();
        $this->assign('team', $tdata);
        //优秀团队
        $hdata = $Team->limit(8)->where(array('status'=>1))->order('team_times DESC')->select();
        $this->assign('hotteam', $hdata);
        $this->display();
    }
    
    


}