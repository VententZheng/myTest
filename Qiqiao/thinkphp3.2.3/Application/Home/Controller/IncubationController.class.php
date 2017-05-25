<?php 
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class IncubationController extends CommonController
{
	//构造方法
    public function __construct(){
        //指定不需要检查登录的方法列表
        parent::__construct();
        $allow_action = array(
            'index','incubationDetail'
            );
        if($this->userinfo ==false && !in_array(ACTION_NAME, $allow_action)){
            $this->error('请登录!',U('User/login'));//跳转到登录页面
        }
        $this->assign('title','节目孵化 - 七巧网');
    }
	
	//显示节目孵化主页面
	public function index(){
		$type_id=trim(I('type_id'));
		$video_id=trim(I('video_id'));
		$item_id=trim(I('item_id'));

    	$pre=C('DB_PREFIX');
		$where='plan_state=1';
        $orderby = 'planup_time DESC';
		$this->type=0;
		$this->video=0;
		$this->item=0;
        // 类型
		if(!empty($type_id)){
            $this->type=$type_id;
            $where=$where.' and plan_stage='.$type_id;
		}
        // 进程
		if(!empty($video_id)){
			$this->video=$video_id;
			$where=$where.' and plan_type='.$video_id;
		}
        // 排序
		if(!empty($item_id)){
			if($item_id=='1'){
			// $where=$where.' ORDER BY plan_times DESC';
            $orderby = 'planup_time DESC';
			$this->item=$item_id;
			}
			else if($item_id=='2'){
			// $where=$where.' ORDER BY planup_time DESC';
                $orderby = 'plan_times DESC';
			$this->item=$item_id;
			}
		}

        $Plan = D('Plan');
        $p=getpage($Plan,$where,3);
		// $sql='select * from '.$pre.'plan where '.$where;
		// $plan=M()->query($sql);
        $plan = $Plan->where($where)->order($orderby)->select();

		foreach($plan as $key=>$val){
			$res=M('user')->field('username,head_pic')->where(array('id'=>$val['uid']))->find();
			$plan[$key]['username']=$res['username'];
			$plan[$key]['head_pic']=$res['head_pic'];
			if($plan[$key]['tid']!='0'){
				$result=M('team')->field('team_name')->where(array('id'=>$plan[$key]['tid']))->find();
				$plan[$key]['team_name']=$result['team_name'];
			}
			else{
				$plan[$key]['team_name']='暂无创建团队';
			}
			//类型
				$arr=M('video_block')->field('type')->where(array('id'=>$plan[$key]['plan_type']))->find();
				$plan[$key]['plan_type']=$arr['type'];
			//进度
				$pro=M('plan_block')->field('name')->where(array('id'=>$plan[$key]['plan_stage']))->find();
				$plan[$key]['plan_stage']=$pro['name'];
		}

		$this->list=$plan;

        $this->video_block=M('video_block')->order('id desc')->select();
        $this->type_block=M('plan_block')->select();

        //显示分页
        $this->page=$p->show();

		$this->display();
	}

	//详细的节目孵化页面
	public function incubationDetail(){
		$id = I('get.id/d',0);   //获取id
		//实例化
		$Plan = M('Plan');
		$User = M('User');
		//策划书查看次数
    	$Plan->where(array('id'=>$id))->setInc('plan_times',1);


    	//获取数据
		//$user = $User->where(array('id'=>session('id')))->find();

		$data = $Plan->where(array('id'=>$id))->find();
		if(empty($data)){
    		$this->error('您访问的页面不存在，已删除！');
    	}
		if($data['tid']!='0'){
			$result=M('team')->field('team_name')->where(array('id'=>$data['tid']))->find();
			$tid=$data['tid'];
			$data['tid']=$result['team_name'];
			$this->res=M('teammember')->where(array('Tid'=>$tid))->select();
		}
		else{
			$data['tid']='暂无创建团队';
		}

		$arr=M('plan_block')->field('name')->where(array('id'=>$data['plan_stage']))->find();
		$data['plan_stage']=$arr['name'];

		$array=M('video_block')->field('type')->where(array('id'=>$data['plan_type']))->find();
		$data['plan_type']=$array['type'];

		
	     $this->array=explode("|", $data['plan_highlights']);
	     $this->num = count($this->array)-1;


		
    	$this->assign('Idata',$data);
    	//$this->assign('Ireuser',$reuser);
		$this->display();
	}


	//查询收藏,点赞,
    public function checkUpdate(){
        $pid = I('get.planId');
        $uid = $_SESSION['uid'];

        //收藏
        $collection = M('Collection');
        $favorite = $collection->where(array('Uid'=>$uid,'Pid'=>$pid))->count();
        //点赞
        $praise = M('Praise');
        $fabulous = $praise->where(array('Uid'=>$uid,'Pid'=>$pid))->count();
        $data['plan_praise'] = $praise->where(array('Pid'=>$pid))->count(); //点赞总数
        //将点赞总数传入视频video表
        $Plan = M('Plan');
        $Plan->where('id='.$pid)->save($data);

        $arr = array(
            'favorite'=>$favorite,
            'fabulous'=>$fabulous,
            );
        echo json_encode($arr);
    }

    //添加收藏
    public function addCollection(){
        $pid = I('get.planId');
        $uid = session('uid');

        $collection = M('Collection');
        $arr = array(
            'Uid'=>$uid,
            'Pid'=>$pid,
        );
        $collection->add($arr);
        $data = array(
            'uid'=> $uid,
            );
         echo json_encode($data); 
    }
    //删除收藏
    public function delCollection(){
        $pid = I('get.planId');
        $uid = session('uid');

        $collection = M('Collection');
        $collection->where(array('Uid'=>$uid,'Pid'=>$pid))->delete();
    }

    //添加点赞
    public function addPraise(){
        $pid = I('get.planId');
        $uid = session('uid');
        $praise = M('Praise');
        $arr = array(
            'Uid'=>$uid,
            'Pid'=>$pid,
        );
        $praise->add($arr);
        $data = array(
            'uid'=> $uid,
            );
         echo json_encode($data);
    }
    //删除点赞
    public function delPraise(){
        $pid = I('get.planId');
        $uid = session('uid');
        $praise = M('Praise');
        $praise->where(array('Uid'=>$uid,'Pid'=>$pid))->delete();
        $data = array(
            'uid'=> $uid,
            );
         echo json_encode($data);
    }

    //更新点赞个数
    public function updataPraise(){
        $pid = I('get.planId');
        $praise = M('Praise');
        $pnum = $praise->where(array('Pid'=>$pid))->count();
        $arr = array(
            'pnum'=>$pnum,
            'Pid'=>$pid
        );
        echo json_encode($arr);
    }


}