<?php
	$id=$_POST['id'];
	$con=mysqli_connect("localhost",'root','root','qiqiao');
	if(!$con){
		$res='fail';
    	echo json_encode($res);
	}
	else{
		$sql="select video_wm from qiq_app where id=1";
		$wm=mysqli_query($con,$sql);
		$wm=mysqli_fetch_array($wm);
		$wm=$wm['video_wm'];
		$int=strpos($wm,'/')+1;
		$wm=substr($wm, $int);
		$sql='update qiq_video set is_change=1 where id='.$id;
		mysqli_query($con,$sql);
		$sql='select video_route from qiq_video where id='.$id;
		$res=mysqli_query($con,$sql);
		$result=mysqli_fetch_array($res);
		$onestr=__FILE__;
		$onestr=substr_replace($onestr, '', -11);
		$file=$onestr.'/thinkphp3.2.3/Public/Home'.$result['video_route'];
		$onestr=str_replace('\\', '/', $file);
	    preg_match('/.*\./',$onestr,$attribute);
	    $file=substr_replace($attribute[0],'',-1);
	    if(!file_exists($file.'.txt')){
	    	$cmd_attribute="ffprobe -v quiet -print_format json -show_format -show_streams ".$onestr." > ".$file.".txt";
	    	exec($cmd_attribute);
	    }
		    $data=file_get_contents($file.'.txt');
		    $res=json_decode($data);
		    if($res->streams[0]->codec_type=='audio'){
		      $one=0;
		      $two=1;
		    }
		    else{
		      $one=1;
		      $two=0;
		    }
		   $result['width']=intval($res->streams[$two]->coded_width);  //视频长分辨率
		   if(!file_exists($file)){
		   	mkdir($file);
		   }
		  if($result['width']>1440){
		    if(!file_exists($file.'/allhigh')){
		    	mkdir($file.'/allhigh');
		    }
		    if(!file_exists($file.'/high')){
		    	mkdir($file.'/high');
		    }
		    if(!file_exists($file.'/normal')){
		    	mkdir($file.'/normal');
		    }
		    $file_one=$file.'/allhigh';
	    	$twostr_one=$file_one.'/index.m3u8';
	    	$threestr_one=$file_one.'/index%4d.ts';
	    	$file_two=$file.'/high';
	    	$twostr_two=$file_two.'/index.m3u8';
	    	$threestr_two=$file_two.'/index%4d.ts';
	    	$file_three=$file.'/normal';
	    	$twostr_three=$file_three.'/index.m3u8';
	    	$threestr_three=$file_three.'/index%4d.ts';
	    	$cmd='ffmpeg -i '.$onestr.' -vf "movie='.$wm.' [watermark];[in][watermark] overlay=10:10[out]"'." -codec:v libx264 -codec:a aac -strict -2 -map 0  -f ssegment -segment_format mpegts -segment_list $twostr_one -segment_time 120 $threestr_one & ffmpeg -i ".$onestr.' -vf "movie='.$wm.' [watermark];[in][watermark] overlay=10:10[out]"'." -s 1280x720 -codec:v libx264 -codec:a aac -strict -2 -map 0 -f ssegment -segment_format mpegts -segment_list $twostr_two -segment_time 120 $threestr_two & ffmpeg -i ".$onestr.' -vf "movie='.$wm.' [watermark];[in][watermark] overlay=10:10[out]"'." -s 720x576 -codec:v libx264 -codec:a aac -strict -2 -map 0  -f ssegment -segment_format mpegts -segment_list $twostr_three -segment_time 120 $threestr_three";
	    	
		  }
		  else if($result['width']>1024 && $result['width']<1440){
		    if(!file_exists($file.'/high')){
		    	mkdir($file.'/high');
		    }
		    if(!file_exists($file.'/normal')){
		    	mkdir($file.'/normal');
		    }

	    	$file_two=$file.'/high';
	    	$twostr_two=$file_two.'/index.m3u8';
	    	$threestr_two=$file_two.'/index%4d.ts';

	    	$file_three=$file.'/normal';
	    	$twostr_three=$file_three.'/index.m3u8';
	    	$threestr_three=$file_three.'/index%4d.ts';


		    $cmd='ffmpeg -i '.$onestr.' -vf "movie='.$wm.' [watermark];[in][watermark] overlay=10:10[out]"'." -codec:v libx264 -codec:a aac -strict -2 -map 0 -f ssegment -segment_format mpegts -segment_list $twostr_two -segment_time 120 $threestr_two & ffmpeg -i $onestr".' -vf "movie='.$wm.' [watermark];[in][watermark] overlay=10:10[out]"'." -s 720x576 -codec:v libx264 -codec:a aac -strict -2 -map 0  -f ssegment -segment_format mpegts -segment_list $twostr_three -segment_time 120 $threestr_three";
		  }
		  else if($result['width']<1024){
		    if(!file_exists($file.'/normal')){
		    	mkdir($file.'/normal');
		    }

	    	$file_three=$file.'/normal';
	    	$twostr_three=$file_three.'/index.m3u8';
	    	$threestr_three=$file_three.'/index%4d.ts';
		    $cmd='ffmpeg -i '.$onestr.' -vf "movie='.$wm.' [watermark];[in][watermark] overlay=10:10[out]"'." -codec:v libx264 -codec:a aac -strict -2 -map 0  -f ssegment -segment_format mpegts -segment_list $twostr_three -segment_time 120 $threestr_three";
		  }
    	exec($cmd);
	}









?>