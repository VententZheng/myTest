<?php
namespace Qiqiao\Controller;
use Think\Controller;

class PlanController extends CommonController{
	

   Public function  add(){
    $id=I('id');
    $pre=C('DB_PREFIX');
      if(empty($id) || $id<=0){
        $this->error('出现错误');
      }
     else{
      $sql="select blo.name,p.plan_highlights,p.plan_rule,p.Uid,p.Tid,p.plan_type,p.plan_route,p.plan_title,p.planup_time,plan_stage,p.plan_summary,p.plan_cover,p.plan_state,p.plan_times,u.username from ".$pre."plan p,".$pre."user u,".$pre."plan_block blo where p.Uid=u.id and p.id=".$id." and blo.id=p.plan_stage";
     }
      $res=M()->query($sql);
     $this->res=$res[0];
     $this->array=explode("|", $this->res['plan_highlights']);
     $this->num = count($this->array)-1;
     $this->block=M('plan_block')->select();
     $this->id = $id;
     $this->display();
   }

   public function modify_Plan(){
      $array['plan_rule']=trim(I('content'));
      $array['plan_stage']=trim(I('blockid'));
      $array['plan_summary']=I('summary');
      $upload = new \Think\Upload();// 实例化上传类
      $upload->maxSize   =     3145728 ;// 设置附件上传大小
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =     './Public/Home/image/'; // 设置附件上传根目录
      $upload->saveName  =  array('date', 'YmdHis'); //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
      $info = $upload->uploadOne($_FILES['img']);
      if(!$info) {// 上传错误提示错误信息
         $array['plan_cover']=I('last_img');
      }else{// 上传成功 获取上传文件信息
          $array['plan_cover']=$info['savepath'].$info['savename'];
      }
      $key0=trim(I('key0'));
      $key1=trim(I('key1'));
      $key2=trim(I('key2'));
      $key3=trim(I('key3'));
      $key4=trim(I('key4'));
      $key5=trim(I('key5'));
      $key6=trim(I('key6'));
      $key7=trim(I('key7'));
      if(!empty($key0)){
         $array['plan_highlights'] = $array['plan_highlights'].$key0.'|';
      }
      if(!empty($key1)){
         $array['plan_highlights'] = $array['plan_highlights'].$key1.'|';
      }
      if(!empty($key2)){
         $array['plan_highlights'] = $array['plan_highlights'].$key2.'|';
      }
      if(!empty($key3)){
         $array['plan_highlights'] = $array['plan_highlights'].$key3.'|';
      }
      if(!empty($key4)){
         $array['plan_highlights'] = $array['plan_highlights'].$key4.'|';
      }
      if(!empty($key5)){
         $array['plan_highlights'] = $array['plan_highlights'].$key5.'|';
      }
      if(!empty($key6)){
         $array['plan_highlights'] = $array['plan_highlights'].$key6.'|';
      }
      if(!empty($key7)){
         $array['plan_highlights'] = $array['plan_highlights'].$key7.'|';
      }
      if(I('blockid')<=0 || empty($array['plan_rule']) || empty($array['plan_summary'])  || empty($array['plan_cover']) || empty($array['plan_highlights'])  ){
         $this->error('新增失败');
      }
      else{
         $id=I('id');
         M('plan')->where(array('id'=>$id))->save($array);
         $this->success('修改成功', 'planmanage');
      }
   }
   Public function  planmanage(){

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
    $name=trim(I('name'));
    $pre=C('DB_PREFIX');
    $p_num=I('p');
    if(empty($p_num)){
      $p_num=1;
    }
    $page_num=8;
        $start = ($p_num-1)*$page_num;
    if(empty($name)){
      $sql="select p.plan_highlights,p.plan_rule,blo.name,p.id,p.Uid,p.Tid,p.plan_type,p.plan_route,p.plan_title,p.planup_time,plan_stage,p.plan_summary,p.plan_cover,p.plan_state,p.plan_times,u.username from ".$pre."plan p,".$pre."user u,".$pre."plan_block blo where p.Uid=u.id and blo.id=p.plan_stage order by p.id desc limit $start,$page_num";
      $sql_count="select count(*) as count from ".$pre."plan";
    }
    else{
      $sql="select p.plan_highlights,p.plan_rule,blo.name,p.id,p.Uid,p.Tid,p.plan_type,p.plan_route,p.plan_title,p.planup_time,plan_stage,p.plan_summary,p.plan_cover,p.plan_state,p.plan_times,u.username from ".$pre."plan p,".$pre."user u,".$pre."plan_block blo where p.Uid=u.id and blo.id=p.plan_stage and plan_title like '%".$name."%' limit $start,$page_num";
      $sql_count="select count(*) as count from ".$pre."plan where plan_title like '%".$name."%' ";
    }
    $plan=M()->query($sql);
    $array_light=array();
    foreach($plan as $key=>$v){
      if(!empty($plan[$key]['plan_highlights'])){
        $arrr=explode("|",$plan[$key]['plan_highlights']);

        array_pop($arrr);
        $array_light[$v['id']][]=$arrr;
      }
      else{
        $array_light[$v['id']][]='';
      }
    }

    $this->array_light=$array_light;




    $arr=array();
    foreach($plan as $key=>$v){
      $plan_type=M('video_block')->where(array('id'=>$v['plan_type']))->find();
      $plan[$key]['plan_type']=$plan_type['type'];
    }

    $array=array();

    foreach($plan as $key=>$v){
      if($plan[$key]['tid']>0){
        $plan_team_name=M('team')->where(array('Uid'=>$v['uid']))->find();
        $plan[$key]['team_name']=$plan_team_name['team_name'];
        $res=M('teammember')->where(array('Tid'=>$plan[$key]['tid']))->select();
        $array[$v['id']][]=$res;

      }
      else{
        $plan[$key]['team_name']='暂无';
        $array[$v['id']][]='暂无';
      }
    }
    $this->plan=$plan;
    $this->array = $array;
    //var_dump($array);
    //die();
    $count = M()->query($sql_count);
        $count = $count[0]['count'];

        import('ORG.Util.Page');
        $Page = new \Think\Page($count,$page_num);

        if(!empty($name)){
          $Page->parameter['name']= urldecode($name);
        }
        $Page -> setConfig('prev','上一页');
      $Page -> setConfig('next','下一页');
      $show = $Page->show();
      $this->assign('page',$show);
    
    $this->display();
    }
   }

   Public function lock_team(){
    $id=trim(I('id'));
    $data['status']=trim(I('num'));
    $res=M('team')->where(array('id'=>$id))->save($data);
    if($res){
      echo '1';
    }
    else{
      echo '0';
    }
   }

   public function lock_plan(){
    $id=trim(I('id'));
    $data['plan_state']=trim(I('num'));
    $res=M('plan')->where(array('id'=>$id))->save($data);
    if($res){
      echo 1;
    }
    else{
      echo 0;
    }

   }




   Public function  titlemanage(){

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
    $name=trim(I('name'));
    $pre=C('DB_PREFIX');
    $p_num=I('p');
    if(empty($p_num)){
      $p_num=1;
    }
    $page_num=3;
        $start = ($p_num-1)*$page_num;

    if(empty($name)){
      
      $sql="select t.id,t.team_name,t.team_slogan,t.team_summary,t.team_pic,t.status,u.username from ".$pre."team t,".$pre."user u where t.Uid=u.id limit $start,$page_num";

      $sql_count="select count(*) as count from ".$pre."team";
    }
    else{
      $sql="select t.id,t.team_name,t.team_slogan,t.team_summary,t.team_pic,t.status,u.username from ".$pre."team t,".$pre."user u where t.Uid=u.id and team_name like '%".$name."%' limit $start,$page_num";
      $sql_count="select count(*) as count from ".$pre."team where team_name like '%".$name."%' ";
    }
    
    $this->team=M()->query($sql);
    $arr=array();
    foreach($this->team as $v){
      $member=M('teammember')->where(array('Tid'=>$v['id']))->select();
      //var_dump($member);
      //die();
      foreach($member as $val){
        $arr[$v['id']][]=$val;
      }
    }

    $array=array();
    foreach($this->team as $v){
      $video=M('video')->where(array('Tid'=>$v['id']))->select();
      foreach($video as $val){
        $array[$v['id']][]=$val;
      }
    }



    $this->arr=$arr;
    $this->array=$array;
    //die();
    $count = M()->query($sql_count);
        $count = $count[0]['count'];

        import('ORG.Util.Page');
        $Page = new \Think\Page($count,$page_num);

        if(!empty($name)){
          $Page->parameter['name']= urldecode($name);
        }
        $Page -> setConfig('prev','上一页');
      $Page -> setConfig('next','下一页');
      $show = $Page->show();
      $this->assign('page',$show);
    
    $this->display();
   }
 }

 public function setting(){

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
        $this->block=M('plan_block')->select();
            $this->display();
      }
 }

    public function change_setting(){
      $block=M('plan_block')->field('id')->select();
      $data=array();
      $data_key=array();
      foreach($block as $v){
         $data[$v['id']]['name']=trim(I('setting_'.$v['id']));
         if(empty($data[$v['id']]['name'])){
            $this->redirect('Plan/setting');
         }
      }

      foreach($data as $key=>$v){
         M('plan_block')->where(array('id'=>$key))->save($v);
      }
      $this->redirect('Plan/setting');
   }


   public function add_type(){
    $data['name']=trim(I('name'));
    if(!empty($data)){
      $res=M('plan_block')->add($data);
      $this->redirect('Plan/setting');
    }
    else{
      $this->redirect('Plan/setting');
    }
   }



}

?>