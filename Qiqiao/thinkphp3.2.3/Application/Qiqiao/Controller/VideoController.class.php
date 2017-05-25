<?php
namespace Qiqiao\Controller;
use Think\Controller;

class VideoController extends CommonController{
	Public function attributes() {

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
    $this->block_select=M('video_block')->select();
    $content=trim(I('subcontent'));
    $select=trim(I('block_select'));
    $sql='select id,video_route from qiq_video where is_change=1';
    $load=M()->query($sql);
    $arr='';
    preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
    $str=str_replace('\\', '/', $str);
    $str=$str[0].'/Public/Home';
    foreach($load as $v){
        $onestr=$str.$v['video_route'];
        preg_match('/.*\./',$onestr,$attribute);
        $file=substr_replace($attribute[0],'',-1);
        $file=$file.'/index.m3u8';
        $content=file_get_contents($file);
        $is_str=strpos($content,'#EXT-X-ENDLIST');
        if($is_str!=false){
          $array['is_change']=2;
          M('video')->where(array('id'=>$v['id']))->save($array);
        }
        else{
          $arr=$arr.$v['id'].',';
        }
    }
		//$information = array('id','video_title','video_summary','video_cover','vidup_time','uid');
		//$video = M('video')->field($information)->where(array('video_state'=>0))->select();
    $sql='select v.video_type,u.username,v.id,v.video_title,v.video_summary,v.video_cover,v.vidup_time,v.uid,a.channels,a.abit_rate,a.width,a.height,a.vbit_rate,a.duration,a.size,a.id as aid,a.acodec_name,a.vcodec_name,a.avg_frame_rate,v.is_change from qiq_video v LEFT JOIN qiq_video_attributes a ON v.id=a.videoid LEFT JOIN qiq_user u ON u.id=v.Uid  where  v.video_state=0 ';


    if(!empty($content)){
       $sql='select v.video_type,u.username,v.id,v.video_title,v.video_summary,v.video_cover,v.vidup_time,v.uid,a.channels,a.abit_rate,a.width,a.height,a.vbit_rate,a.duration,a.size,a.id as aid,a.acodec_name,a.vcodec_name,a.avg_frame_rate,v.is_change from qiq_video v LEFT JOIN qiq_video_attributes a ON v.id=a.videoid LEFT JOIN qiq_user u ON u.id=v.Uid  where  v.video_state=0 and v.video_title like "%'.$content.'%"';
    }
    if($select>0){
      $sql='select v.video_type,u.username,v.id,v.video_title,v.video_summary,v.video_cover,v.vidup_time,v.uid,a.channels,a.abit_rate,a.width,a.height,a.vbit_rate,a.duration,a.size,a.id as aid,a.acodec_name,a.vcodec_name,a.avg_frame_rate,v.is_change from qiq_video v LEFT JOIN qiq_video_attributes a ON v.id=a.videoid LEFT JOIN qiq_user u ON u.id=v.Uid  where  v.video_state=0 and v.video_type='.$select;
    }
    if(!empty($content) && $select>0){
      $sql='select v.video_type,u.username,v.id,v.video_title,v.video_summary,v.video_cover,v.vidup_time,v.uid,a.channels,a.abit_rate,a.width,a.height,a.vbit_rate,a.duration,a.size,a.id as aid,a.acodec_name,a.vcodec_name,a.avg_frame_rate,v.is_change from qiq_video v LEFT JOIN qiq_video_attributes a ON v.id=a.videoid LEFT JOIN qiq_user u ON u.id=v.Uid  where  v.video_state=0 and v.video_type='.$select.' and v.video_title like "%'.$content.'%"';

    }


    $video=M()->query($sql);
    foreach($video as $key=>$v){
      $type=M('video_block')->field('type')->where(array('id'=>$v['video_type']))->find();
      $video[$key]['video_type']=$type['type'];
    }

    foreach($video as $key=>$v){
      if(!empty($v['duration'])){
        $time=intval($v['duration']);
        $video[$key]['hour']=intval($time/3600);
        $time=($time%3600);
        $video[$key]['minutes']=intval($time/60);
        $video[$key]['seconds']=($time%60);
        $other=$video[$key]['hour'].'小时'.$video[$key]['minutes'].'分'.$video[$key]['seconds'].'秒';//持续时间
        $video[$key]['duration']=$other;
      }
    }

    $this->arr=$arr;
		$this->video = $video;
		$this->display('Video/attributes');
  }
	}

  public function get_attributes(){
    $id=trim(I('id'));
    $res=M('video_attributes')->field('id')->where(array('videoid'=>$id))->find();
    $vid=$res['id'];
        preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
        $str=str_replace('\\', '/', $str);
        $str=$str[0].'/Public/Home';
        $arr=M('video')->field('video_route')->where(array('id'=>$id))->find();
        $onestr=$str.$arr['video_route'];
        preg_match('/.*\./',$onestr,$attribute);
        $cmd_attribute="ffprobe -v quiet -print_format json -show_format -show_streams ".$onestr." > ".$attribute[0]."txt";
        if(!file_exists($attribute[0].'txt')){
          exec($cmd_attribute);
        }
        $data=file_get_contents($attribute[0].'txt');
        $res=json_decode($data);
        if($res->streams[0]->codec_type=='audio'){
          $one=0;
          $two=1;
        }
        else{
          $one=1;
          $two=0;
        }
        $result['videoid']=$id;
        $result['channels']=intval($res->streams[$one]->channels);  //声道数量
        $result['abit_rate']=intval($res->streams[$one]->bit_rate/1000);  //声波比特率
        $result['acodec_name']=$res->streams[$one]->codec_name;  //声波编码
        $result['vcodec_name']=$res->streams[$two]->codec_name;  //视频编码
        $result['vbit_rate']=intval($res->streams[$two]->bit_rate/1000);  //视频比特率
        $result['avg_frame_rate']=$res->streams[$two]->avg_frame_rate; // 视频帧率
        $result['width']=$res->streams[$two]->coded_width;  //视频长分辨率
        $result['height']=$res->streams[$two]->coded_height; // 视频宽分辨率
        $time=intval($res->format->duration);
        $result['duration']=$time;
        $hour=intval($time/3600);
        $time=($time%3600);
        $minutes=intval($time/60);
        $seconds=($time%60);
        $other=$hour.'小时'.$minutes.'分'.$seconds.'秒';//持续时间
        $size=intval($res->format->size);
        if($size>=1073741824){
          $size=round($size/1073741824,2);
          $size=$size.'GB';
        }
        else{
          $size=round($size/1048576,2);
          $size=$size.'MB';
        }
        $result['size']=$size;//视频大小

      if(!$vid){
        M('video_attributes')->add($result);
        $result['duration']=$other;
        $result=json_encode($result);
        $this->ajaxReturn($result);
      }
      else{
        M('video_attributes')->where(array('videoid'=>$vid))->save();
        $result['duration']=$other;
        $result=json_encode($result);
        $this->ajaxReturn($result);

      }
        
  }


  Public function  change(){
    $id=I('id');
    preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
    $str=$str[0].'\\Public\\Home';
    $arr=M('video')->field('video_route')->where(array('id'=>$id))->find();
    $str=str_replace('\\', '/', $str);
    $onestr=$str.$arr['video_route'];

    preg_match('/.*\./',$onestr,$attribute);
    $file=substr_replace($attribute[0],'',-1);
    if(!file_exists($file)){
      mkdir($file);
    }
    $twostr=$file.'/index.m3u8';
    $threestr=$file.'/index%004d.ts';
    $cmd="ffmpeg -i $onestr -codec:v libx264 -codec:a aac -map 0  -f ssegment -segment_format mpegts -segment_list $twostr -segment_time 60 $threestr";
    echo "ture";
    //if(!file_exists($file.'/index.bat')){
      //fopen($file.'/index.bat','w+');
      //file_put_contents($file.'/index.bat', $cmd);
    //}
    fastcgi_finish_request();
    exec($cmd);
    
   }


   public function change_run(){
    $id=I('id');
    $all_id=explode(',', $id);
    preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
    $str=$str[0].'\\Public\\Home';
    $str=str_replace('\\', '/', $str);
    $result=array();
    foreach ($all_id as $id) {
      $arr=M('video')->field('video_route')->where(array('id'=>$id))->find();
      $time=M('video_attributes')->field("duration")->where(array('videoid'=>$id))->find();
      $onestr=$str.$arr['video_route'];
      preg_match('/.*\./',$onestr,$attribute);
      $file=substr_replace($attribute[0],'',-1);
      $dir=scandir($file);
      $dir_array=array();
      foreach($dir as $key=>$v){
        if($key>1){
          $dir_array[]=$v;
        }
      }
      $arr_num=count($dir_array);

      file_put_contents('D:/1.txt', 'num:'.$arr_num.'\n',FILE_APPEND);
      //$this->ajaxReturn($num."===".$dir_array);
      if($arr_num==3){
        $twostr=$file.'/allhigh/index.m3u8';
        $content=file_get_contents($twostr);
        $data['num']='0';
        $data['status']='转换中...';
        if($num=intval(substr_count($content, '#EXTINF:'))){
          $all_num=intval(intval($time['duration'])/120);
            $data['num']=$num/$all_num*33;

            $data['status']='超高清转换中';
            if($data['num']>33){
              $data['num']=30;
            }
            $is_str=strpos($content,'#EXT-X-ENDLIST');
            if($is_str!=false){
              $data['num']=33;
              $data['status']='超高清转换成功';
            }
          
        }

        if($data['num']==33){
          $twostr=$file.'/high/index.m3u8';
          $content=file_get_contents($twostr);
          if($num=intval(substr_count($content, '#EXTINF:'))){
            $all_num=intval(intval($time['duration'])/120);
              $data['num']=33+$num/$all_num*33;
              $data['status']='高清转换中';
              if($data['num']>66){
                $data['num']=64;
              }
              $is_str=strpos($content,'#EXT-X-ENDLIST');
              if($is_str!=false){
                $data['num']=66;
                $data['status']='高清转换成功';
              }
            }
        }
      


        if($data['num']==66){
            $twostr=$file.'/normal/index.m3u8';
            $content=file_get_contents($twostr);
            if($num=intval(substr_count($content, '#EXTINF:'))){
              $all_num=intval(intval($time['duration'])/120);
                $data['num']=66+$num/$all_num*33;
                $data['status']='普清转换中';
                if($data['num']>=100){
                  $data['num']=98;
                }
                $is_str=strpos($content,'#EXT-X-ENDLIST');
                if($is_str!=false){
                  $data['num']=100;
                  $data['status']='转换成功';
                }
              
          }
        }

        if($data['num']==100){
          $is_change['is_change']=2;
          M('video')->where(array('id'=>$id))->save($is_change);
        }
        $data['num']=round($data['num'],2);
        $result[]=$data;
      }




      else if($arr_num==2){

        $twostr=$file.'/high/index.m3u8';
        $content=file_get_contents($twostr);
        $data['num']='0';
        $data['status']='转换中...';
        if($num=intval(substr_count($content, '#EXTINF:'))){
            $all_num=intval(intval($time['duration'])/120);
            $data['num']=$num/$all_num*50;
            $data['status']='高清转换中';
            if($data['num']>50){
              $data['num']='48';
            }
            $is_str=strpos($content,'#EXT-X-ENDLIST');
            if($is_str!=false){
              $data['num']=50;
              $data['status']='高清转换成功';
            }
        }
        


        if($data['num']==50){
            $twostr=$file.'/normal/index.m3u8';
            $content=file_get_contents($twostr);

            if($num=intval(substr_count($content, '#EXTINF:'))){
                $all_num=intval(intval($time['duration'])/120);
                $data['num']=50+$num/$all_num*50;
                $data['status']='普清转换中';
                if($data['num']>=100){
                  $data['num']=98;
                }
                $is_str=strpos($content,'#EXT-X-ENDLIST');
                if($is_str!=false){
                  $data['num']=100;
                  $data['status']='转换成功';
                }
          }
        }

        if($data['num']==100){
          $is_change['is_change']=2;
          M('video')->where(array('id'=>$id))->save($is_change);
        }
        $data['num']=round($data['num'],2);
        $result[]=$data;

      }


      else if($arr_num==1){
        $twostr=$file.'/normal/index.m3u8';
        $content=file_get_contents($twostr);
        $data['num']='0';
        $data['status']='转换中...';
        if($num=intval(substr_count($content, '#EXTINF:'))){
          $all_num=intval(intval($time['duration'])/120);
          $data['num']=$num/$all_num*100;
          $data['status']='普清转换中';
            if($data['num']>=100){
              $data['num']=98;
            }
            $is_str=strpos($content,'#EXT-X-ENDLIST');
            if($is_str!=false){
              $data['num']=100;
              $data['status']='转换成功';
            }
          }

        if($data['num']==100){
          $is_change['is_change']=2;
          M('video')->where(array('id'=>$id))->save($is_change);
        }
        $data['num']=round($data['num'],2);
        $result[]=$data;
      }
    }
    $result=json_encode($result);
    $this->ajaxReturn($result);
  }


   public function change_all(){
    $id=I('id');
    $all_id=explode(',', $id);
    preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
    $str=$str[0].'\\Public\\Home';
    $str=str_replace('\\', '/', $str);
    $result=array();
    foreach ($all_id as $id) {
      $arr=M('video')->field('video_route')->where(array('id'=>$id))->find();
      $time=M('video_attributes')->field("duration")->where(array('videoid'=>$id))->find();
      $onestr=$str.$arr['video_route'];
      preg_match('/.*\./',$onestr,$attribute);
      $file=substr_replace($attribute[0],'',-1);
      $dir=scandir($file);
      $dir_array=array();
      foreach($dir as $key=>$v){
        if($key>1){
          $dir_array[]=$v;
        }
      }
      $arr_num=count($dir_array);
      if($arr_num==3){
        $twostr=$file.'/allhigh/index.m3u8';
        $content=file_get_contents($twostr);
        $data['num']='0';
        $data['status']='转换中...';
        if($num=intval(substr_count($content, '#EXTINF:'))){
          $all_num=intval(intval($time['duration'])/120);
            $data['num']=$num/$all_num*33;

            $data['status']='超高清转换中';
            if($data['num']>33){
              $data['num']=30;
            }
            $is_str=strpos($content,'#EXT-X-ENDLIST');
            if($is_str!=false){
              $data['num']=33;
              $data['status']='超高清转换成功';
            }
          
        }

        if($data['num']==33){
          $twostr=$file.'/high/index.m3u8';
          $content=file_get_contents($twostr);
          if($num=intval(substr_count($content, '#EXTINF:'))){
            $all_num=intval(intval($time['duration'])/120);
              $data['num']=33+$num/$all_num*33;
              $data['status']='高清转换中';
              if($data['num']>66){
                $data['num']=64;
              }
              $is_str=strpos($content,'#EXT-X-ENDLIST');
              if($is_str!=false){
                $data['num']=66;
                $data['status']='高清转换成功';
              }
            }
        }
      


        if($data['num']==66){
            $twostr=$file.'/normal/index.m3u8';
            $content=file_get_contents($twostr);
            if($num=intval(substr_count($content, '#EXTINF:'))){
              $all_num=intval(intval($time['duration'])/120);
                $data['num']=66+$num/$all_num*33;
                $data['status']='普清转换中';
                if($data['num']>=100){
                  $data['num']=98;
                }
                $is_str=strpos($content,'#EXT-X-ENDLIST');
                if($is_str!=false){
                  $data['num']=100;
                  $data['status']='转换成功';
                }
              
          }
        }

        if($data['num']==100){
          $is_change['is_change']=2;
          M('video')->where(array('id'=>$id))->save($is_change);
        }
        $data['num']=round($data['num'],2);
        $result[]=$data;
      }




      else if($arr_num==2){

        $twostr=$file.'/high/index.m3u8';
        $content=file_get_contents($twostr);
        $data['num']='0';
        $data['status']='转换中...';
        if($num=intval(substr_count($content, '#EXTINF:'))){
            $all_num=intval(intval($time['duration'])/120);
            $data['num']=$num/$all_num*50;
            $data['status']='高清转换中';
            if($data['num']>50){
              $data['num']='48';
            }
            $is_str=strpos($content,'#EXT-X-ENDLIST');
            if($is_str!=false){
              $data['num']=50;
              $data['status']='高清转换成功';
            }
        }
        


        if($data['num']==50){
            $twostr=$file.'/normal/index.m3u8';
            $content=file_get_contents($twostr);

            if($num=intval(substr_count($content, '#EXTINF:'))){
                $all_num=intval(intval($time['duration'])/120);
                $data['num']=50+$num/$all_num*50;
                $data['status']='普清转换中';
                if($data['num']>=100){
                  $data['num']=98;
                }
                $is_str=strpos($content,'#EXT-X-ENDLIST');
                if($is_str!=false){
                  $data['num']=100;
                  $data['status']='转换成功';
                }
          }
        }

        if($data['num']==100){
          $is_change['is_change']=2;
          M('video')->where(array('id'=>$id))->save($is_change);
        }
        $data['num']=round($data['num'],2);
        $result[]=$data;

      }


      else if($arr_num==1){
        $twostr=$file.'/normal/index.m3u8';
        $content=file_get_contents($twostr);
        $data['num']='0';
        $data['status']='转换中...';
        if($num=intval(substr_count($content, '#EXTINF:'))){
          $all_num=intval(intval($time['duration'])/120);
          $data['num']=$num/$all_num*100;
          $data['status']='普清转换中';
            if($data['num']>=100){
              $data['num']=98;
            }
            $is_str=strpos($content,'#EXT-X-ENDLIST');
            if($is_str!=false){
              $data['num']=100;
              $data['status']='转换成功';
            }
          }

        if($data['num']==100){
          $is_change['is_change']=2;
          M('video')->where(array('id'=>$id))->save($is_change);
        }
        $data['num']=round($data['num'],2);
        $result[]=$data;
      }
    }
    $result=json_encode($result);
    $this->ajaxReturn($result);

 }


 public function changewm(){

    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Public/Home/wm/'; // 设置附件上传根目录
    $upload->saveName  =  array('date', 'YmdHis'); //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
    $info = $upload->uploadOne($_FILES['img']);
    if(!$info) {
    }
    else{
        // 上传成功 获取上传文件信息
        $data['video_wm']=$info['savepath'].$info['savename'];
        $result=copy("./Public/Home/wm/".$data['video_wm'],"D:/ProgramFilesStudy/phpStudy/WWW/".$info['savename']);
        M('app')->where(array('id'=>1))->save($data);
    }
    $this->redirect('Video/setting');
 }

 public function changetoken(){

    $data['token']=trim(I('token'));
    if(!empty($data['token'])){
      M('app')->where(array('id'=>1))->save($data);
    }
    $this->redirect('Video/setting');
 }


   public function change_info(){
    $id=trim(I('id'));
    $data['video_title']=trim(I("title_$id"));
    $data['video_summary']=trim(I("summary_$id"));
    $hour=intval(trim(I("hour_$id")));
    $minutes=intval(trim(I("minutes_$id")));
    $seconds=intval(trim(I("seconds_$id")));
    $array=M('video')->field('video_cover')->where(array('id'=>$id))->find();
    $data['video_cover']=$array['video_cover'];

    $time=$hour+$minutes+$seconds;
    if($time>0){

    if($hour>=0 && $hour<=60 && $minutes>=0 && $minutes<=60 && $seconds>=0 && $seconds<=60){
      $h_time=$hour*60*60;
      $m_time=$minutes*60;
      $time=$h_time+$m_time+$seconds;
      $res=M('video_attributes')->field('duration')->where(array('videoid'=>$id))->find();
      $res=$res['duration'];
      if($time<=$res && $time>=0){
        preg_match("/.*thinkphp3.2.3/", __FILE__, $str);
        $str=$str[0].'\\Public\\Home';
        $str=str_replace('\\', '/', $str);
        $arr=M('video')->field('video_route')->where(array('id'=>$id))->find();
        $onestr=$str.$arr['video_route'];
        $img_name=time();
        $twostr=$str.'/upload_img/'.$img_name;
        $data['video_cover']=$img_name.'.jpg';
        $cmd="ffmpeg -ss $hour:$minutes:$seconds -i ".$onestr." -f image2 -y ".$twostr.'.jpg';
        exec($cmd);
      }
    }
    
    }


    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Public/Home/upload_img/'; // 设置附件上传根目录
    $upload->saveName  =  array('date', 'YmdHis'); //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组
    $info = $upload->uploadOne($_FILES['img']);


    if(!$info) {
    }
    else{
        // 上传成功 获取上传文件信息
        $data['video_cover']=$info['savepath'].$info['savename'];
    }



    
      M('video')->where(array('id'=>$id))->save($data);
    $this->redirect('Video/attributes');
   }


   Public function  view(){
    $id=trim(I('id'));
    $type=trim(I('type'));
    $other=intval(trim(I('other')));
    $video=M('video')->field('video_route')->where(array('id'=>$id))->find();
    $video=$video['video_route'];
    $pre=substr($video,0, strpos($video,'.'));
    $this->video=$pre.'/normal/index.m3u8';
    $this->id=$id;
    if($type==2){
      $this->video=$pre.'/all_high/index.m3u8';
    }
    else if($type==1){
      $this->video=$pre.'/high/index.m3u8';
    }
    $this->time=0;
    if(!empty($other)){
      $this->time=$other;
    }

    $width=M('video_attributes')->field('width')->where(array('videoid'=>$this->id))->find();

    $width=$width['width'];
    if($width>1440){
      $this->num='<li><a href="#">全高清</a></li><li><a href="#">高清</a></li><li><a href="#" >标清</a></li>';
    }
    else if($width>1024 && $width<1440){
      $this->num='<li><a href="#">高清</a></li><li><a href="#" >标清</a></li>';
    }
    else if($width<1024){
      $this->num='<li><a href="#" >标清</a></li>';
    }

    $this->width=$width;
    $this->display();

   }



   Public function  video_detail(){
    $id=trim(I('id'));
    $type=trim(I('type'));
    $other=intval(trim(I('other')));
    $video=M('video')->field('video_route')->where(array('id'=>$id))->find();
    $video=$video['video_route'];
    $pre=substr($video,0, strpos($video,'.'));
    $this->video=$pre.'/normal/index.m3u8';
    $this->id=$id;
    if($type==2){
      $this->video=$pre.'/all_high/index.m3u8';
    }
    else if($type==1){
      $this->video=$pre.'/high/index.m3u8';
    }
    $this->time=0;
    if(!empty($other)){
      $this->time=$other;
    }

    $width=M('video_attributes')->field('width')->where(array('videoid'=>$this->id))->find();

    $width=$width['width'];
    if($width>1440){
      $this->num='<li><a href="#">全高清</a></li><li><a href="#">高清</a></li><li><a href="#" >标清</a></li>';
    }
    else if($width>1024 && $width<1440){
      $this->num='<li><a href="#">高清</a></li><li><a href="#" >标清</a></li>';
    }
    else if($width<1024){
      $this->num='<li><a href="#" >标清</a></li>';
    }
    $this->width=$width;
    
    //评论显示
    $comment = $this->CommentList($pid = 0, $commentList = array(), $spac = 0);
    $this->assign('commentList', $comment);
    $vid=trim(I('id'));
    $totalcom = M('Comment')->where(array('Vid'=>$vid))->count();
    $this->assign('totalcom',$totalcom);


    $this->display();

   }

   function del_comment(){
    $condition['pid']=I('id');
    $id=I('id');
    /* 是否为别人的母亲*/
    $res=M('comment')->field('id')->where($condition)->select();
    if($res){
      $this->action_del($res);
    }
    M('comment')->where(array('id'=>$id))->delete();
    $this->ajaxReturn('1');
   }


   function action_del($res){
        foreach($res as $key=>$v){
          $condition['pid']=$v['id'];
          $result=M('comment')->field('id')->where($condition)->select();
          if($result){
            $this->action_del($result);
          }
          else{
            M('comment')->where(array('id'=>$v['id']))->delete();
          }
        }
      
   }


   function add_type(){
    $data['type']=trim(I('name'));
    if(!empty($data['type'])){
      $res=M('video_block')->add($data);
    }
    $this->redirect('Video/setting');

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



   Public function  setting(){

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
    $img=M('app')->field('video_wm,token')->find();
    $this->img=$img['video_wm'];
    $this->token=$img['token'];
    $this->block=M('video_block')->select();
    $this->display();
    }
   }


   public function is_send(){
    $id=intval(trim(I('id')));
      $data['video_state']=1;
      M('video')->where(array('id'=>$id))->save($data);
      $this->redirect('Video/pass');
   }

   public function is_notsend(){
    $id=intval(trim(I('id')));
    $data['video_state']=2;
    M('video')->where(array('id'=>$id))->save($data);
    $this->redirect('Video/attributes');
   }


    public function change_setting(){
      $block=M('video_block')->field('id')->select();
      $data=array();
      $data_key=array();
      foreach($block as $v){
         $data[$v['id']]['type']=trim(I('setting_'.$v['id']));
         if(empty($data[$v['id']]['type'])){
            $this->redirect('Video/setting');
         }
      }

      foreach($data as $key=>$v){
         M('video_block')->where(array('id'=>$key))->save($v);
      }
      $this->redirect('Video/setting');
   }



	 Public function  handle(){
    $this->display();
   }

   Public function  pass(){

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
      $this->block_select=M('video_block')->select();
      $block_id=intval(I('block_select'));
      $subcontent=trim(I('subcontent'));
      $p_num=I('p');
      if(empty($p_num)){
         $p_num=1;
      }

      if(I('hide_sub')=='1'){
         $p_num=1;
      }
      $page_num=3;
      $start = ($p_num-1)*$page_num;
      if($block_id==0){
         
      $sql="select vid.id,blo.type,vid.video_title,vid.play_times,vid.video_praise,vid.video_collection from qiq_video vid, qiq_video_block blo where vid.video_type=blo.id and vid.video_state=1 order by vid.id desc limit $start,$page_num";

      $sql_count='select count(*) as count from qiq_video vid , qiq_video_block blo where vid.video_type=blo.id and vid.video_state=1';
      }
      else if($block_id>0){
      $sql="select vid.id,blo.type,vid.video_title,vid.play_times,vid.video_praise,vid.video_collection from qiq_video vid, qiq_video_block blo where vid.video_type=blo.id and vid.video_state=1 and blo.id=".$block_id." order by vid.id desc limit $start,$page_num";
      $sql_count='select count(*) as count from qiq_video vid , qiq_video_block blo where vid.video_type=blo.id and vid.video_state=1 and blo.id='.$block_id;
      }
      if($block_id==0 && $subcontent!=''){
         $sql="select vid.id,blo.type,vid.video_title,vid.play_times,vid.video_praise,vid.video_collection from qiq_video vid, qiq_video_block blo where vid.video_type=blo.id and vid.video_state=1 and vid.video_title like '%".$subcontent."%' order by vid.id desc limit $start,$page_num";
         $sql_count='select count(*) as count from qiq_video vid , qiq_video_block blo where vid.video_type=blo.id and vid.video_state=1 and vid.video_title like "%'.$subcontent.'%"';
      }
      else if($block_id>0 && $subcontent!=''){
         $sql="select vid.id,blo.type,vid.video_title,vid.play_times,vid.video_praise,vid.video_collection from qiq_video vid, qiq_video_block blo where vid.video_type=blo.id and vid.video_state=1 and blo.id=".$block_id." and vid.video_title like '%".$subcontent."%' order by vid.id desc limit $start,$page_num";
         $sql_count='select count(*) as count from qiq_video vid , qiq_video_block blo where vid.video_type=blo.id and vid.video_state=1 and blo.id='.$block_id.' and vid.video_title like "%'.$subcontent.'%"';
      }
      $this->info=M()->query($sql);
      $count = M()->query($sql_count);
      $count = $count[0]['count'];
      import('ORG.Util.Page');
      $Page = new \Think\Page($count,$page_num);
      if($block_id>0){
         $Page->parameter['block_select']= urldecode($block_id);
      }
      if($block_id==0 && $subcontent!=''){
         $Page->parameter['subcontent']= urldecode($subcontent);
      }
      else if($block_id>0 && $subcontent!=''){
         $Page->parameter['block_select']= urldecode($block_id);
         $Page->parameter['subcontent']= urldecode($subcontent);
      }
      $Page -> setConfig('prev','上一页');
      $Page -> setConfig('next','下一页');
      $show = $Page->show();
      $this->assign('page',$show);
      $this->display();
    }
   }

   public function set_state(){
    $condition['id']=I('id');
    $data['video_state']=I('num');
    $res=M('video')->where($condition)->save($data);
    if($res){
      $this->ajaxReturn('1');
    }
    else{
      $this->ajaxReturn('-1');
    }
   }



	Public function query(){
		$outPut = array();
		$infoval = array();
		$id = I('id','','intval');
		$video = M('video_attributes')->where('videoid ='.$id)->field('VideoURL')->select();
		$video=$video[0];
		//var_dump($video);
		$url = $video["videourl"];
        exec("ffprobe -v quiet -print_format json -show_format -show_streams ".$url,$outPut,$status);
	    $infoval = handleoutput($outPut);
	    $num=count($infoval);
	    for($i=0;$i<$num;$i++){
	     switch ($infoval[$i]["codec_type"]) {
                  case 'audio':
                        echo "音频:<br>";
                        echo "采样率:".$infoval[$i]["sample_rate"]."HZ<br>";
                        echo "音频码率:".$infoval[$i]["bit_rate"]."bps<br>";
                        echo "声音通道:".$infoval[$i]["channels"]."<br>";
                        echo "编码:".$infoval[$i]["codec_name"]."<br><br>";
                        break;

                  case 'video':
                        echo "视频:<br>";
                        echo "视频码率:".$infoval[$i]["bit_rate"]."bps<br>";
                        echo "编码:".$infoval[$i]["codec_name"]."<br>";
                        echo "分辨率".$infoval[$i]["coded_width"]."*".$infoval[$i]["coded_height"]."<br>";
                        echo "帧率:".$infoval[$i]["r_frame_rate"]."<br>";
                        echo "宽高比:".$infoval[$i]["display_aspect_ratio"]."<br>";
                        echo "像素宽高比:".$infoval[$i]["sample_aspect_ratio"]."<br><br>";
                        break;
            
                  default:
                        break;
            }
            if($infoval[$i]["format"]=="{"){
                   echo "容器:<br>";
                   echo "大小:".$infoval[$i]["size"]."byte<br>";         //1024/1024 m
                   echo "时长:".$infoval[$i]["duration"]."秒<br>";
                   echo "容器码率:".$infoval[$i]["bit_rate"]."<br><br>";
            }
        }
        
	}
}
?>