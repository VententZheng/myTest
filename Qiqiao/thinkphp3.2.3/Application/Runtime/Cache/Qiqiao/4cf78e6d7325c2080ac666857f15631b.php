<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>七巧网后台系统-<?php echo ($meta_title); ?></title>

  <link rel="stylesheet" href="/thinkphp3.2.3/Public/dist/css/demo.css">
  <link rel="stylesheet" href="/thinkphp3.2.3/Public/dist/css/dropify.min.css">
  <link href="/thinkphp3.2.3/Public/css/style.css" rel="stylesheet">
  <link href="/thinkphp3.2.3/Public/css/style-responsive.css" rel="stylesheet">
  <link href="/thinkphp3.2.3/Public/css/jquery.stepy.css" rel="stylesheet">
  <link href="/thinkphp3.2.3/Public/js/iCheck/skins/flat/blue.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>


<style>
.social-links span{
	
    background: #EFF0F4;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    display: inline-block;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #7A7676;

}

.social-links span:hover{
	cursor:pointer;
	background:#65CEA7;
}


</style>


<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo start-->
        <div class="logo">
            <a href="index.html"><img src="/thinkphp3.2.3/Public/img/logo.png" alt=""></a>
        </div>
        <!--logo end-->


        <div class="left-side-inner">


            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">您好,<?php echo session('user_auth.username');?></a></h4>
                    </div>
                </div>

                <h5 class="left-nav-title">菜单选项</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>前台首页</span></a></li>
                    <li><a href="<?php echo U('Public/logout','','');?>"><i class="fa fa-cog"></i> <span>注销登录</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>修改密码</span></a></li>
                </ul>
            </div>


            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                
                <li class="menu-list"><a href=""><i class="fa fa-gear"></i> <span>系统</span></a>
                    <ul class="sub-menu-list">
                        <li class="active"><a href="<?php echo U('Index/information','','');?>"> 系统信息</a></li>
                        <li><a href="<?php echo U('Index/log',array('p'=>1),'');?>"> 日志管理</a></li>
                        <li><a href="<?php echo U('Index/setting','','');?>"> 系统设置</a></li>
                        <li><a href="<?php echo U('Index/database','','');?>"> 数据库操作</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>用户</span></a>
                    <ul class="sub-menu-list">
                        <!--li><a href="<?php echo U('User/add','','');?>"> 用户添加</a></li-->
                        <li><a href="<?php echo U('User/manage','','');?>"> 用户管理</a></li>
                        <li><a href="<?php echo U('User/message','','');?>"> 消息管理</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-male"></i> <span>管理员</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo U('Admin/user','','');?>"> 管理人员</a></li>
                        <li><a href="<?php echo U('Admin/role','','');?>"> 角色列表</a></li>
                        <!--li><a href="<?php echo U('Admin/addfunction','','');?>"> 添加功能</a></li-->

                    </ul>
                </li>



                <li class="menu-list"><a href=""><i class="fa fa-video-camera"></i> <span>视频</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo U('Video/attributes','','');?>"> 视频审核</a></li>
                        <!--li><a href="<?php echo U('Video/handle','','');?>">操作设置</a></li>
                        <li><a href="<?php echo U('Video/change','','');?>"> 视频转换</a></li-->
                        <li><a href="<?php echo U('Video/pass','','');?>"> 视频概况</a></li>
                        <!--li><a href="<?php echo U('Video/view','','');?>">视频浏览</a></li-->
                        <li><a href="<?php echo U('Video/setting','','');?>"> 视频设置</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-pencil"></i> <span>资讯</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo U('Information/add','','');?>"> 资讯添加</a></li>
                        <li><a href="<?php echo U('Information/manage','','');?>">资讯管理</a></li>
                        <li><a href="<?php echo U('Information/setting','','');?>"> 资讯设置</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-star"></i> <span>策划称号</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo U('Plan/planmanage','','');?>"> 策划管理</a></li>
                        <!--li><a href="<?php echo U('Plan/add','','');?>"> 称号添加</a></li-->
                        <li><a href="<?php echo U('Plan/titlemanage','','');?>"> 称号管理</a></li>
                        <li><a href="<?php echo U('Plan/setting','','');?>"> 策划设置</a></li>
                    </ul>
                </li>



            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    
    <!-- left side end-->
     <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start>
        <form class="searchform" action="index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
        </form>
        <search end-->



        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <!--li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 8 pending task</h5>
                        <ul class="dropdown-list user-list">
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Database update</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                            <span class="">40%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Dashboard done</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                            <span class="">90%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            

                            <li class="new"><a href="">See All Pending Task</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 5 Mails </h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="#">
                                    <span class="thumb"><img src="" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="thumb"><img src="" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            
                            <li class="new"><a href="">Read All Mails</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #1 overloaded.  </span>
                                    <em class="small">34 mins</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #3 overloaded.  </span>
                                    <em class="small">1 hrs</em>
                                </a>
                            </li>
                          
                            <li class="new"><a href="">See All Notifications</a></li>
                        </ul>
                    </div>
                </li-->
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <!--img src="" alt="" /-->
                        admin
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="<?php echo U('Public/logout','','');?>"><i class="fa fa-user"></i>  前台首页</a></li>
                        <li><a href="<?php echo U('Public/logout','','');?>"><i class="fa fa-cog"></i>  注销登录</a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> 清除缓存</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->
        

<div class="directory-info-row">
                <div class="row">

                <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-9 col-sm-9" style="margin-left:100px;">
                        <div class="panel" >
                            <div class="panel-body" style="background:#EFF0F4;min-height:284px; ">
                                <h4><?php echo ($v["username"]); ?> <span class="text-muted small"> - 普通会员</span></h4>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="thumb media-object" src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($v["head_pic"]); ?>"  width="103" height="93" alt="">
                                    </a>
                                    <div class="media-body">
                                        <div class='message_<?php echo ($v["id"]); ?>'>
                                            <strong>用户信息</strong><br>

                                            性别：<?php if(NULL == $v['sex']): ?>暂无填写<br>
                                            	  <?php else: echo ($v['sex']); ?><br><?php endif; ?>
                                           	姓名：<?php if(NULL == $v['realname']): ?>暂无填写<br>
                                            	  <?php else: echo ($v['realname']); ?><br><?php endif; ?>
                                           	手机号码：<?php if(NULL == $v['phone']): ?>暂无填写<br>
                                            	  <?php else: echo ($v['phone']); ?><br><?php endif; ?>
                                            邮箱：<?php if(NULL == $v['phone']): ?>暂无填写<br>
                                            	  <?php else: echo ($v['email']); ?><br><?php endif; ?>
                                            职业：<?php if(NULL == $v['phone']): ?>暂无填写<br>
                                            	  <?php else: echo ($v['occupation']); ?><br><?php endif; ?>
                                            地址：<?php if(NULL == $v['province']): ?>暂无填写<br>
                                            	  <?php else: echo ($v['province']); echo ($v['city']); echo ($v['district']); ?><br><?php endif; ?>
                                            个性签名：<?php if(NULL == $v['province']): ?>暂无填写<br>
                                            	  <?php else: echo ($v['motto']); ?><br><?php endif; ?>
                                        </div>

                                        <div class="video_<?php echo ($v["id"]); ?>" style="display: none">
                                            <strong>观看过的视频</strong><br>
                                            <?php if(is_array($arr[$v['id']]['video_title'])): $k = 0; $__LIST__ = $arr[$v['id']]['video_title'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($k % 2 );++$k;?><h5><span style="width:80px;display:inline-block;text-align: center;"><?php echo ($val); ?></span><button class="btn btn-primary btn-sm" onclick="see_detail(<?php echo ($v["id"]); ?>,<?php echo ($k); ?>)">查看详情</button></h5><?php endforeach; endif; else: echo "" ;endif; ?> 


                                        </div>

                                        <div class="detail<?php echo ($v["id"]); ?>" style="display:none">
                                            <?php if(is_array($array[$v['id']])): $j = 0; $__LIST__ = $array[$v['id']];if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$value): $mod = ($j % 2 );++$j;?><div class="detail<?php echo ($v["id"]); ?>_<?php echo ($j); ?>" style="display: none">
                                              <strong>观看记录</strong><br>
                                              <span>点击开始:</span>
                                              <?php if(is_array($value['arr_start'])): $b = 0; $__LIST__ = $value['arr_start'];if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$v_start): $mod = ($b % 2 );++$b; echo (date_change($v_start)); ?>、<?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
                                              <br>
                                              <span>点击暂停:</span>
                                              <?php if(is_array($value['arr_pause'])): $x = 0; $__LIST__ = $value['arr_pause'];if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$v_pause): $mod = ($x % 2 );++$x; echo (date_change($v_pause)); ?>、<?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
                                              <br>
                                              <span>拖到进度条到:</span>
                                              <?php if(is_array($value['arr_long'])): $z = 0; $__LIST__ = $value['arr_long'];if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$v_long): $mod = ($z % 2 );++$z; echo (date_change($v_long)); ?>、<?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
                                              <br>  
                                              </div><?php endforeach; endif; else: echo "" ;endif; ?> 
                                        </div>

                                        <div class="send_message<?php echo ($v["id"]); ?>" style="display:none">
                                            <strong>发送消息</strong><br>
                                            <textarea rows="5" cols="40"></textarea>
                                            <button onclick="send(this,'<?php echo ($v["id"]); ?>')" class="btn btn-primary btn-sm" style="margin-top:5px;margin-left:250px;">发送</button>
                                            
                                        </div>

                                        <div class="coll<?php echo ($v["id"]); ?>" style="display:none">
                                            <strong>收藏项目</strong><br>
                                            <?php if(is_array($coll[$v['id']])): $o = 0; $__LIST__ = $coll[$v['id']];if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$value1): $mod = ($o % 2 );++$o; if($value1['id'] != null and $value1['type_name'] == video): ?><div>
                                                  
                                                  <?php echo ($value1["id"]); ?>----视频------<?php echo ($value1["video_title"]); ?>
                                                  </div>
                                                  <?php elseif($value1['id'] != null and $value1['type_name'] == plan): ?>
                                                  <div>
                                                  <?php echo ($value1["id"]); ?>----策划------<?php echo ($value1["plan_title"]); ?>
                                                  </div><?php endif; endforeach; endif; else: echo "暂无数据" ;endif; ?> 
                                        </div>


                                        <div class="praise<?php echo ($v["id"]); ?>" style="display:none">
                                            <strong>点过赞</strong><br>
                                            <?php if(is_array($praise[$v['id']])): $l = 0; $__LIST__ = $praise[$v['id']];if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$value2): $mod = ($l % 2 );++$l; if($value2['id'] != null and $value2['type_name'] == video): ?><div>
                                                  <?php echo ($value2["id"]); ?>----视频------<?php echo ($value2["video_title"]); ?>
                                                  </div>
                                                  <?php elseif($value2['id'] != null and $value2['type_name'] == plan): ?>
                                                  <div>
                                                  <?php echo ($value2["id"]); ?>----策划------<?php echo ($value2["plan_title"]); ?>
                                                  </div><?php endif; endforeach; endif; else: echo "暂无数据" ;endif; ?> 
                                        </div>


                                        <ul class="social-links col-md-6 col-sm-6">
                                            <li><span onclick='see_message(<?php echo ($v["id"]); ?>)'><i class="glyphicon glyphicon-user"></i></span></li>
                                            <li><span onclick='see_movies(<?php echo ($v["id"]); ?>)'><i class="glyphicon glyphicon-film"></i></span></li>
                                            <!--li><span onclick='detail(<?php echo ($v["id"]); ?>)'><i class="glyphicon glyphicon-facetime-video"></i></span></li-->
                                            <li><span onclick='send_message(<?php echo ($v["id"]); ?>)'><i class="glyphicon glyphicon-envelope"></i></span></li>

                                            <li><span onclick='see_coll(<?php echo ($v["id"]); ?>)'><i class="glyphicon glyphicon-folder-open"></i></span></li>


                                            <li><span onclick='see_praise(<?php echo ($v["id"]); ?>)'><i class="glyphicon glyphicon-thumbs-up"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "暂无数据" ;endif; ?>
                    </div>
                    </div>




    </section>









<!-- Placed js at the end of the document so the pages load faster -->

<script src="/thinkphp3.2.3/Public/js/jquery-2.1.4.min.js"></script>
<script src="/thinkphp3.2.3/Public/js/bootstrap.min.js"></script>
<script src="/thinkphp3.2.3/Public/js/modernizr.min.js"></script>


<script src="/thinkphp3.2.3/Public/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/thinkphp3.2.3/Public/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/thinkphp3.2.3/Public/js/jquery.nicescroll.js"></script>

<!--icheck -->
<script src="/thinkphp3.2.3/Public/js/iCheck/jquery.icheck.js"></script>
<script src="/thinkphp3.2.3/Public/js/icheck-init.js"></script>

<!--common scripts for all pages-->
<script src="/thinkphp3.2.3/Public/js/scripts.js"></script>



	
		<script>
		function see_message(element){
            $('.detail'+element).attr('style','display:none');
            $('.message_'+element).attr('style','display:block');
            $('.detail'+element).children('div').attr('style','display:none');
            $('.video_'+element).attr('style','display:none');
            $('.send_message'+element).attr('style','display:none');
             $('.praise'+element).attr('style','display:none');
            $('.coll'+element).attr('style','display:none');
		}

		function see_movies(element){
            $('.detail'+element).attr('style','display:none');
            $('.detail'+element).children('div').attr('style','display:none');
            $('.send_message'+element).attr('style','display:none');
            $('.message_'+element).attr('style','display:none');
             $('.praise'+element).attr('style','display:none');
            $('.coll'+element).attr('style','display:none');
            $('.video_'+element).attr('style','display:block');

		}

		function see_detail(id,element){
            console.log('.detail'+id+'_'+element);
            $('.message_'+id).attr('style','display:none');
            $('.send_message'+element).attr('style','display:none');
            $('.video_'+id).attr('style','display:none');
             $('.praise'+element).attr('style','display:none');
            $('.coll'+element).attr('style','display:none');
            $('.detail'+id).attr('style','display:block');
            $('.detail'+id+'_'+element).attr('style','display:block');

		}	

		function send_message(element){

            $('.detail'+element).attr('style','display:none');
            $('.message_'+element).attr('style','display:none');
            $('.detail'+element).children('div').attr('style','display:none');
            $('.video_'+element).attr('style','display:none');
             $('.praise'+element).attr('style','display:none');
            $('.coll'+element).attr('style','display:none');
            $('.send_message'+element).attr('style','display:block');
		}

        function see_coll(element){
            $('.detail'+element).attr('style','display:none');
            $('.message_'+element).attr('style','display:none');
            $('.detail'+element).children('div').attr('style','display:none');
            $('.video_'+element).attr('style','display:none');
            $('.send_message'+element).attr('style','display:none');

            $('.praise'+element).attr('style','display:none');
            $('.coll'+element).attr('style','display:block');
        }


        function see_praise(element){
            $('.detail'+element).attr('style','display:none');
            $('.message_'+element).attr('style','display:none');
            $('.detail'+element).children('div').attr('style','display:none');
            $('.video_'+element).attr('style','display:none');
            $('.send_message'+element).attr('style','display:none');
            
            $('.coll'+element).attr('style','display:none');
            $('.praise'+element).attr('style','display:block');


        }

        function send(element,id){
            var text=$(element).siblings('textarea').val();
            if(text==''){
                alert('输入消息再进行发送');
            }
            else{     
                $.ajax({
                       url:"<?php echo U('User/send');?>",
                       type:'post',
                       dataType:'json',
                       data:{"text":text,'id':id},
                       success:function(data){
                            if(data){
                                $(element).siblings('textarea').val('');
                                alert('发送成功');
                            }
                            else{
                                alert('发送失败');
                            }
                        }
                    });
            }

        }

</script>




</body>
</html>