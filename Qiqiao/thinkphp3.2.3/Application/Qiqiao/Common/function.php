<?php
  

  /*  归类同一应用  */
function node_merge($node, $access = null, $pid = 0){
	//p($node);
	$arr = array();
	foreach ($node as $v){
            if(is_array($access)){
                  $v['access'] = in_array($v['id'],$access) ? 1 : 0;
            }
		if($v['pid'] == $pid){
			$v['child'] = node_merge($node,$access,$v['id']);
			$arr[] = $v;
		}
	}
	return $arr;

}

/* 大小格式化   */
function byte_format($size,$dec=2)
{
    $a = array("B","KB","MB","GB","TB","PB","EB","ZB","YB");
    $pos = 0;
    while ($size >= 1024)   
    {
        $size /= 1024;
        $pos++;
    }
    return round($size,$dec)." ".$a[$pos];
}


 /* 检测验证码 */
 
function check_verify($code, $id = ''){
	ob_clean();
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

/*  对视频的属性进行处理     形成两边分化掉  dump($infoval[$i]);   */
 function handleoutput($outPut){
       $handleoutPut=array();
       $information=array();
       $num=array();
       $info=array();
       $infoval=array();

       foreach($outPut as $v){
            $v=str_replace(" ","",$v);
            $v=str_replace('"',"",$v);
            $handleoutPut[]=str_replace(',',"",$v);
       }
       foreach($handleoutPut as $key => $v){
       	if(substr_count($v,'index:')){
       		$num[]=$key;
       	}
       	if(substr_count($v,'codec_type:audio')){
       		$information[]="audio";
       	}
       	if(substr_count($v,'codec_type:video')){
       		$information[]="video";
       	}
       	if(substr_count($v,'format:{')){
       		$information[]="format";
       		$num[]=$key;
       	}
       }
       $num[]=count($handleoutPut);       
       //dump($information);               /********获取分点类型**************/
       //dump($num);                       /********获取分点**************/
       $number=count($num)-1;
       for($i=0;$i<$number;$i++){
       	$info[]=array_slice($handleoutPut,$num[$i],$num[$i+1]-$num[$i]);
            //dump($info[$i]);
            foreach($info[$i] as $v){
                  $key=substr($v,0,strpos($v,":"));
                  $v=strstr($v,":");  
                  $infoval[$i][$key]=substr($v,1);
                  //$infoval[$i][$key]=str_replace(':',"",$v);
            }

            //dump($infoval[$i]);
           
       }
       return $infoval;
}


 function date_change($time){

        
        $hour=intval($time/3600);
        $time=($time%3600);
        $minutes=intval($time/60);
        $seconds=($time%60);
        $other=$hour.':'.$minutes.':'.$seconds;//持续时间
        return $other;

  }
?>