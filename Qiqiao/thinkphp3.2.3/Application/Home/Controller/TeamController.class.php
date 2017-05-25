<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class TeamController extends CommonController
{
	//构造方法
    public function __construct(){
        //指定不需要检查登录的方法列表
        parent::__construct();
        $allow_action = array(
            'index','excellentTeam'
            );
        if($this->userinfo ==false && !in_array(ACTION_NAME, $allow_action)){
            $this->error('请登录!',U('User/login'));//跳转到登录页面
        }
        $this->assign('title','优秀团队 - 七巧网');
    }
	
	public function index(){
		$Team = M('Team');
		$map['status'] = 1;
		$tdata = $Team->where($map)->select();
		$this->assign('tdata',$tdata);

		//分页
		$p=getpage($Team,$map,3);
        $list=$Team->field(true)->where($map)->order('id desc')->select();
        $this->tdata=$list;
        $this->page=$p->show();
        $this->display();
	}
	
	public function excellentTeam(){
		$id = I('get.id/d',0);
		$Team = M('Team');

		//新闻浏览量，刷新和点击均加1
    	$Team->where(array('id'=>$id))->setInc('team_times',1);

		//获取团队表信息
		$tdata = $Team->where(array('id'=>$id))->find();
		if(empty($tdata)){
    		$this->error('您访问的页面不存在，已删除！');
    	}
    	$this->assign('Tdata',$tdata);
		//获取成员表信息
		$Member =D('Teammember');
		$tmap['Tid'] = $id;
		$tmap['member_type'] = '导师';
		$tmdata = $Member->where($tmap)->select();
		$this->assign('tmdata',$tmdata);

		$mmap['Tid'] = $id;
		$mmap['member_type'] = '成员';
		$mdata = $Member->where($mmap)->select();
		$this->assign('mdata',$mdata);

	    	

	    $this->video=M('video')->field('video_title,vidup_time')->where(array('Tid'=>$id))->select();

		$this->display();
	}

}