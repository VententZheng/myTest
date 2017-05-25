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
        
	<div class="row" style="width:1000px;margin-left:50px;margin-top:50px;">
                <div class="col-md-12">
                    <div class="square-widget">
                        <div class="widget-container">
                            <div class="stepy-tab">
                            </div>
                            <form id="default" action="<?php echo U('Plan/modify_Plan');?>"  enctype="multipart/form-data"  method="post" class="form-horizontal">
                                <fieldset title="————">
                                    <legend>简介亮点</legend>
                                     <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">资讯简介</label>
                                    <div class="col-md-6 col-sm-6">
                                    <textarea  rows="11" cols="80" name="summary"><?php echo ($res["plan_summary"]); ?></textarea>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">节目亮点</label>
                                        <div class="key">


                                        <?php if(($num) > "0"): ?><div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点一"  class="form-control" name="key0" id="key0" value='<?php echo ($array[0]); ?>'>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点一"  class="form-control" name="key0" id="key0" value=''>
                                        </div><?php endif; ?>


                                        <?php if(($num) > "1"): ?><div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点二" class="form-control" name="key1" id="key1" value='<?php echo ($array[1]); ?>'>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2" style="display:none;">
                                            <input type="text" placeholder="亮点二" class="form-control" name="key1" id="key1" value=''>
                                        </div><?php endif; ?>

                                        <?php if(($num) > "2"): ?><div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点三" class="form-control" name="key2" id="key2" value='<?php echo ($array[2]); ?>'>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2" style="display:none;">
                                            <input type="text" placeholder="亮点三" class="form-control" name="key2" id="key2" value=''>
                                        </div><?php endif; ?>
                
                                        <?php if(($num) > "3"): ?><div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点四" class="form-control" name="key3" id="key3" value='<?php echo ($array[3]); ?>'>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2" style="display:none;">
                                            <input type="text" placeholder="亮点四" class="form-control" name="key3" id="key3" value=''>
                                        </div><?php endif; ?>

                                        <?php if(($num) > "4"): ?><div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点五" class="form-control" name="key4" id="key4" value='<?php echo ($array[4]); ?>'>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2" style="display:none;">
                                            <input type="text" placeholder="亮点五" class="form-control" name="key4" id="key4" value=''>
                                        </div><?php endif; ?>


                                        <?php if(($num) > "5"): ?><div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点六" class="form-control" name="key5" id="key5" value='<?php echo ($array[5]); ?>'>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2" style="display:none;">
                                            <input type="text" placeholder="亮点六" class="form-control" name="key5" id="key5" value=''>
                                        </div><?php endif; ?>


                                        <?php if(($num) > "6"): ?><div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点七" class="form-control" name="key6" id="key6" value='<?php echo ($array[6]); ?>'>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2" style="display:none;">
                                            <input type="text" placeholder="亮点七" class="form-control" name="key6" id="key6" value=''>
                                        </div><?php endif; ?>

                                        <?php if(($num) > "7"): ?><div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2">
                                            <input type="text" placeholder="亮点八" class="form-control" name="key7" id="key7" value='<?php echo ($array[7]); ?>'>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-md-9 col-sm-9 col-md-offset-2 col-sm-offset-2" style="display:none;">
                                            <input type="text" placeholder="亮点八" class="form-control" name="key7" id="key7" value=''>
                                        </div><?php endif; ?>


                                        </div>
                                        <div class="col-md-1 col-sm-1">
                                            <img src="/thinkphp3.2.3/Public/img/add.png" id="img" />
                                        </div>



                                    </div>
                                </fieldset>
                                <fieldset title="———">
                                    <legend>封面阶段</legend>
                                    

                                    <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">缩略图</label>
                                    <input type="hidden" name="id" value="<?php echo ($id); ?>" />
                                    <div class="col-md-6 col-sm-6">
                                    <!--img src="/thinkphp3.2.3/Public/information_img/<?php echo ($res["news_img"]); ?>" width='124px' height='70px'/-->
                                    <input type="file" id="input-file-now" name="img" class="dropify"  data-default-file="/thinkphp3.2.3/Public/Home/image/<?php echo ($res["plan_cover"]); ?>"/>
                                    <input type='hidden' name='last_img' value='<?php echo ($res["plan_cover"]); ?>' />
                                    <!--input type="file" name="img" id="img" style='float:right;margin-top:20px;'/-->
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label class="col-md-2 col-sm-2 control-label">所处阶段</label>
                                    <div class="col-md-6 col-sm-6">
                                    <div class="col-md-6 col-sm-6">
                                            <div class="dropdown">
                                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width:150px;"  val="{res.plan_stage}">
                                                <?php echo ($res["name"]); ?>
                                                <span class="caret"></span>
                                              </button>
                                              <input name="blockid" type="hidden" value="<?php echo ($res["plan_stage"]); ?>" id="hide"></input>

                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <?php if(is_array($block)): foreach($block as $key=>$vv): ?><li class="block" value="<?php echo ($vv["id"]); ?>"><a href="#"><?php echo ($vv["name"]); ?></a></li><?php endforeach; endif; ?>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </div>


                                    
                                </fieldset>
                                <fieldset title="———">
                                    <legend>方案规则</legend>


                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-2 control-label">规则内容</label>
                                        <div class="col-md-6 col-sm-6">
                                            <textarea name="content" id="Editorld"><?php echo ($res["plan_rule"]); ?></textarea>
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
                    alert('最多八大亮点');
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