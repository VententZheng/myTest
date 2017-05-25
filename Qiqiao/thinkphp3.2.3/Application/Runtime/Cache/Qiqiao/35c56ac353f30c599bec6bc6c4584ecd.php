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


<link href="/thinkphp3.2.3/Public/css/video-js.min.css" rel="stylesheet">
<style>
  


/*----------显示的评论内容--------------*/

.comment-show{
    /*background: white;*/
}
.comment-show h4{
    border-left: 3px solid rgba(45,186,223,1.0);
    padding-left: 5px;
}
.comment-show hr{
    margin-top: 5px;
    padding: 0px;
    padding-bottom: 0px;
}
.comment-show .chr{
    margin-top: 5px;
}
.comment-show .comment-list{
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
    background: white;
}
.comment-show .comment-list .compic{
    display: inline-block;
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
    text-align: right;
}
.comment-show .comment-list .compic img{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
}
.comment-show .comment-list .comcontent{
    display: inline-block;
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
}
.comment-show .comment-list .comcontent .user{
    display: inline-block;
    margin: 0px 0px 10px 0px;
    padding: 0px 0px 0px 0px;
    color: rgba(247,132,17,1.0);
}
.comment-show .comment-list .comcontent .hftime{
    display: inline-block;
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
    float: right;
    color: rgba(55,55,55,0.4);
}
.comment-show .comment-list .comcontent .hf{
    float: right;
    cursor: pointer;
    color: rgba(55,55,55,0.6);
    margin-right: 20px;
}
.comment-show .comment-list .comcontent .hf:hover{
    color: rgba(247,132,17,1.0);
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
        


<div style="margin-left:100px;margin-top:25px;">
 <video id="example-video"   class="video-player col-lg-7 video-js vjs-default-skin" controls>
                        <source src="/thinkphp3.2.3/Public/Home<?php echo ($video); ?>" type="application/x-mpegURL">
</video>

<form id='form' action='<?php echo U("Video/view");?>' method='post'>
  <input name='type' id='type' type='hidden' value='' />
  <input name='other' id='other' type='hidden' value='' />  
  <input name='id'   id='id' type='hidden' value='<?php echo ($id); ?>' />
</form>
</div>


        <!--   -----评论内容显示---- -->
        <div class="row">
        <div class="col-lg-9 comment-show" style="margin-left:100px;margin-top:25px;">
            <h4>评论内容</h4>
            <?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["pid"]) == "0"): ?><hr class="phr col-lg-12" style="height: 1px;border:none;border-top:1px solid rgba(55,55,55,0.2);" />
                    <?php else: ?>
                    <hr class="chr col-lg-12" style="height: 1px;border:none;border-top:1px dashed rgba(55,55,55,0.2);" /><?php endif; ?>
                <div class="comment-list col-lg-12" style="padding-left:<?php echo ($vo['level']-1); ?>cm">
                    <!-- 第二个父元素parent().parent() -->
                    <div class="compic col-lg-1">
                        <img src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($vo["headPic"]); ?>">
                    </div>
                    <div class="comcontent col-lg-11">
                        <!-- 第一个父元素parent() -->
                        <div class="user"><?php echo ($vo["uname"]); ?></div>
                        <div class="hftime" id="comtime"><?php echo ($vo["com_time"]); ?><soan style="margin-left:30px;color:red" onclick="del_comment('<?php echo ($vo["id"]); ?>')">删除</soan></div>
                        <div class="content"><?php echo ($vo["com_content"]); ?></div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
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



    <script src="/thinkphp3.2.3/Public/js/video.min.js"></script>
    <script src="/thinkphp3.2.3/Public/js/videojs-contrib-hls.js"></script>
    <script>



        //播放器实例
        var player = videojs('example-video',{

          "controls": true,
          "autoplay": false,
          "preload": "auto",
          "loop": false,
          controlBar: {
            volumeMenuButton: {
            inline: false,
            vertical: true
            },//竖着的音量条
          }
        });


        player.currentTime(<?php echo ($time); ?>);

        
        function playerInitVideo() {
            videoPanelMenu = $(".vjs-fullscreen-control");
            str='<div class="dropup" style="position:relative;"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:5px;">清晰度</button><ul class="dropdown-menu" aria-labelledby="dropdownMenu2" position:absolute;z-index:99; style="min-width:70px;background:white; color:red;"><?php echo ($num); ?></ul></div>';
            videoPanelMenu.before(''+ ''+ ''+ str);
            $('li').click(function(){
              time=parseInt(player.currentTime());
              if($(this).children('a').text()=='全高清'){
                $("#type").val('2');
                $("#other").val(time);
                $("#form").submit();
              }

              if($(this).children('a').text()=='高清'){
                $("#type").val('1');
                $("#other").val(time);
                $("#form").submit();
              }

              if($(this).children('a').text()=='标清'){
                $("#type").val('0');
                $("#other").val(time);
                $("#form").submit();
              }

            })
        }
        //加载页面进行播放器初始化
        //
        player.ready(function() {playerInitVideo()});



        //player.play();



        function del_comment(element){
           $.ajax({
           url:'<?php echo U('Video/del_comment');?>',
           type:'post',
           dataType:'json',
           data:{"id":element},
           success:function(data){
                //console.log(data);
              if(data == '1'){
                window.location.href="<?php echo U('Video/video_detail');?>/id/<?php echo ($id); ?>";
              }
              else{
                $('#myModal_'+element).modal('hide');
              }


            }
          }); 
        }
        




    </script>




</body>
</html>