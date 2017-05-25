<?php
namespace Qiqiao\Controller;
use Think\Controller;


Class UserController extends CommonController {
	Public function add(){
		$this->display();
	}
	
	Public function manage(){

        $Auth = new \Think\Auth();
        $name = CONTROLLER_NAME . '/' . ACTION_NAME; 
        $uid = $_SESSION['id'];  
        $type = CONTROLLER_NAME;   
        $mode = 'url';   
        $relation = 'and';
        if (!$Auth->check($name, $uid, $type, $mode, $relation)) {   
             $this->redirect('Index/index');
        }
        else{


        $user=M('user')->select();
        $arr=array();
        $array=array();
        foreach($user as $key=>$v){
        	$result=M('user_behavior')->where(array('userid'=>$v['id']))->select();
            $collection_data=M('collection')->where(array('Uid'=>$v['id']))->select();
            $praise_data=M('praise')->where(array('Uid'=>$v['id']))->select();
   
        	if(!empty($result)){
        		foreach($result as $keyword=>$val){
        			$vt=M('video')->field('video_title')->where(array('id'=>$val['videoid']))->find();
        			$arr[$v['id']]['video_title'][$keyword]=$vt['video_title'];


        			if(!empty($val['pause']) && !empty($val['start'])){
        				$arr_pause=array_unique(array_filter(explode(",",$val['pause'])));
        				$arr_start=array_unique(array_filter(explode(",",$val['start'])));
        				$array[$v['id']][$keyword]['arr_long'] =array_intersect($arr_pause,$arr_start);
        				$array[$v['id']][$keyword]['arr_start'] =array_diff($arr_start,$array[$v['id']][$keyword]['arr_long']);
        				$array[$v['id']][$keyword]['arr_pause'] =array_diff($arr_pause,$array[$v['id']][$keyword]['arr_long']);
        			}
        		}
        	}

            if(!empty($collection_data)){
                foreach($collection_data as $keyword1=>$val1){
                    if(!empty($val1['pid'])){
                        $coll[$v['id']][$keyword1]=M('plan')->where(array('id'=>$val1['pid']))->find();
                        $coll[$v['id']][$keyword1]['type_name']='plan';
                    }
                    else if(!empty($val1['vid'])){
                        $coll[$v['id']][$keyword1]=M('video')->where(array('id'=>$val1['vid']))->find();
                        $coll[$v['id']][$keyword1]['type_name']='video';
                    }
                }
            }

            if(!empty($praise_data)){
                foreach($praise_data as $keyword2=>$val2){
                    if(!empty($val2['pid'])){
                        $praise[$v['id']][$keyword2]=M('plan')->where(array('id'=>$val2['pid']))->find();
                        $praise[$v['id']][$keyword2]['type_name']='plan';
                    }
                    else if(!empty($val2['vid'])){
                        $praise[$v['id']][$keyword2]=M('video')->where(array('id'=>$val2['vid']))->find();
                        $praise[$v['id']][$keyword2]['type_name']='video';
                    }
                }
            }



        	

        }




        $this->arr=$arr;
        $this->array=$array;
        $this->user=$user;
        $this->coll=$coll;
        $this->praise=$praise;

		$this->display();

		/*$count = M('users')->count();
		$page = new \Think\Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		$user = M('users')->limit($limit)->select();
		$this->user = $user;
		$this->page = $page->show();*/
		}
	}

	Public function del(){
		$id = I('id','','intval');
		if(M('users')->delete($id)){
			$this->success('删除成功',U('User/manage'));
		}
		else{
			$this->error('删除失败');
		}
	}

	Public function message(){

        $Auth = new \Think\Auth();
        $name = CONTROLLER_NAME . '/' . ACTION_NAME; 
        $uid = $_SESSION['id'];  
        $type = CONTROLLER_NAME;   
        $mode = 'url';   
        $relation = 'and';
        if (!$Auth->check($name, $uid, $type, $mode, $relation)) {   
             $this->redirect('Index/index');
        }
        else{
            $this->message=M('message')->field('qiq_user.username,qiq_message.*')->join('qiq_user ON qiq_message.user_id = qiq_user.id')->select();

			$this->display();
		}
	}

    Public function send(){
        $data['content']=I('text');
        $data['user_id']=I('id');
        $data['is_used']=1;
        $res=M('message')->add($data);
        $real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
        $name=M('user')->field('username')->where(array('id'=>$data['user_id']))->find();
        $log_data['user']=$real_name['real_name'];
        $log_data['name']="发送消息";
        $log_data['time']=date("Y-m-d H:i:s");
        $log_data['ip']=get_client_ip();
        $log_data['action']='对'.$name['username'].'发送消息:'.$data['content'];
        M('log')->add($log_data);
        $this->ajaxReturn($res);
    }

    Public function delmessage(){
        $id=I('id');
            $real_name=M('admin')->field('real_name')->where(array('id'=>$_SESSION['id']))->find();
            $data=M('message')->field('content,user_id')->where(array('id'=>$id))->find();
            $name=M('user')->field('username')->where(array('id'=>$data['user_id']))->find();
            $log_data['user']=$real_name['real_name'];
            $log_data['name']="删除消息";
            $log_data['time']=date("Y-m-d H:i:s");
            $log_data['ip']=get_client_ip();
            $log_data['action']='对'.$name['username'].'删除消息:'.$data['content'];
            M('log')->add($log_data);

            $res=M('message')->where(array('id'=>$id))->delete();
            $this->redirect('User/message');
    }


}	
	
?>