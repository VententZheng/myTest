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



<link rel="stylesheet" type="text/css" href="/thinkphp3.2.3/Public/ueditor/themes/default/css/ueditor.css">








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
        
	<div class="row" style="width:1000px;margin:auto;margin-top:80px;">
                <div class="col-md-12">
                    <div class="square-widget">
                        <div class="widget-container">
                            <div class="stepy-tab">
                            </div>
                            <form id="default" action="<?php echo U('Information/edit_information');?>"  enctype="multipart/form-data" method="post" class="form-horizontal">
                                <fieldset title="————">
                                    <legend>资讯基本信息</legend>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">标题</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" placeholder="标题" class="form-control" name="title" id="infotitle">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">作者</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" placeholder="作者" class="form-control" name="author" id="infoauthor">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">关键字</label>
                                        <div class="key">
                                        <div class="col-md-2 col-sm-2">
                                            <input type="text" placeholder="关键字"  class="form-control" name="key0" id="key0" value=''>
                                        </div>
                                        <div class="col-md-2 col-sm-2" style="display:none;">
                                            <input type="text" placeholder="关键字" class="form-control" name="key1" id="key1" value=''>
                                        </div>
                                        <div class="col-md-2 col-sm-2" style="display:none;">
                                            <input type="text" placeholder="关键字" class="form-control" name="key2" id="key2" value=''>
                                        </div>
                                        <div class="col-md-2 col-sm-2" style="display:none;">
                                            <input type="text" placeholder="关键字" class="form-control" name="key3" id="key3" value=''>
                                        </div>
                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                            <img src="/thinkphp3.2.3/Public/img/add.png" id="img" />
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset title="———">
                                    <legend>资讯概要</legend>


                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">缩略图</label>
                                        <div class="col-md-6 col-sm-6">
                                         <input type="file" id="input-file-now" name="img" class="dropify" />
                                            <!--input type="file" name="img" id="img" /-->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">资讯简介</label>
                                    <div class="col-md-6 col-sm-6">
                                    <textarea  rows="6" cols="50" name="summary"></textarea>
                                    </div>
                                    </div>

                                </fieldset>
                                <fieldset title="———">
                                    <legend>资讯正文</legend>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">板块</label>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width:150px;"  val="0">
                                                选择所属于板块
                                                <span class="caret"></span>
                                              </button>
                                              <input name="blockid" type="hidden" value="0" id="hide"></input>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <?php if(is_array($block)): foreach($block as $key=>$v): ?><li class="block" value="<?php echo ($v["id"]); ?>"><a href="#"><?php echo ($v["blockname"]); ?></a></li><?php endforeach; endif; ?>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">来源</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" placeholder="来源" name="source" id="infosource" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">内容</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea name="content" id="Editorld"></textarea>
                                        </div>
                                    </div>


                                </fieldset>
                                <fieldset title="——">
                                    <legend>操作</legend>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <p>确保你已经编辑以上信息</p>
                                        </div>
                                    </div>
                                </fieldset>
                                <span class="btn btn-info finish" id='sub'>
                                    保存 </span>
                            </form>
                        </div>
                    </div>
                </div>
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



<script type="text/javascript" src="/thinkphp3.2.3/Public/js/jquery.stepy.js"></script>
<script type="text/javascript" src="/thinkphp3.2.3/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/thinkphp3.2.3/Public/ueditor/ueditor.all.js"></script>
<script type="text/javascript" charset="utf-8" src="/thinkphp3.2.3/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/thinkphp3.2.3/Public/dist/js/dropify.js"></script>



<script>
        $(document).ready(function(){
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: '点我上传图片',
                replace: '点我更换图片',
                remove:  '移除',
                error:   '哦哦，出错了。'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("你想要删除 \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element){
            alert('文件删除');
        });

        drEvent.on('dropify.errors', function(event, element){
            console.log('出现错误');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });









    $(function(){
        window.UEDITOR_HOME_URL='/thinkphp3.2.3/Public/ueditor/';
        window.onload=function(){
            window.UEDITOR_CONFIG.initialFrameWidth=800;  //初始化编辑器宽度,默认800
            window.UEDITOR_CONFIG.initialFrameHeight=500;

            var editor = new UE.ui.Editor({
                imageUrl:'/thinkphp3.2.3/Public/ueditor/uploadImage',
                fileUrl:'/thinkphp3.2.3/Public/ueditor/uploadFile',
                imagePath : '', 
                filePath : '', 
                imageManagerUrl:'/thinkphp3.2.3/Public/ueditor/imageManage', //图片在线管理的处理地址 
            });
             editor.render("Editorld"); 
        }

    });

    /*=====STEPY WIZARD====*/
    $(function() {
        $('#default').stepy({
            backLabel: '返回',
            block: true,
            nextLabel: '继续',
            titleClick: true,
            titleTarget: '.stepy-tab'
        });
    });
    /*=====STEPY WIZARD WITH VALIDATION====*/
    $(function() {
        $('#stepy_form').stepy({
            backLabel: '返回',
            nextLabel: '继续',
            errorImage: true,
            block: true,
            description: true,
            legend: false,
            titleClick: true,
            titleTarget: '#top_tabby',
            validate: true
        });
        
    });

    $("#img").click(function(){
            $('.key').children('div').each(function(){
                if($(this).css('display')=='none'){
                    $(this).css('display','block');
                    return false;
                }
                if($('.key').children('div:last').css('display')!='none'){
                    alert('最多四个关键字');
                    return false;
                }
            });
    });


    $('.block').click(function(){
        var val=$(this).attr('value');
        var str=$(this).children('a').text()+'<span class="caret" style="float:right;margin-top:8px;"></span>';
        $("#hide").attr('value',val);
        $('#dropdownMenu1').html(str);
        $('#dropdownMenu1').attr('val',val);

    });


</script>





</body>
</html>