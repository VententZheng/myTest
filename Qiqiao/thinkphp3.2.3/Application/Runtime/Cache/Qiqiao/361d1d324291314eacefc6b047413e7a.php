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
 .img-modal strong{display:inline-block;width:80px;}
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
        
        <div class="container" style="margin-top:10px;margin-right:100px;">
            <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-6 form-inline pull-right">

                    <form class= style="padding:8px 0 " action="<?php echo U('Video/attributes');?>" method="post" id="information_form">


                    <button type="submit" class="btn btn-primary pull-right" id="sub" style="margin:5px 3px">搜索</button>
                    <input type="text" class="form-control pull-right" style="margin:5px 3px" name='subcontent' placeholder="请输入视频标题" id="cont"/>
                    <input type="hidden" name='hide_sub' value='1' />
                    <select  name="block_select" class="pull-right text-center" style="border-radius:4px;width:120px;height:34px;margin:5px 3px">
                        <option name="select_block" value="0">选择板块</option>
                        <?php if(is_array($block_select)): $i = 0; $__LIST__ = $block_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["type"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    </form>
            </div>
        </div>
        </div>



    
     <div class="panel-body">
                          
                            
                            <div id="gallery" class="media-gal">
                                <?php if(is_array($video)): foreach($video as $key=>$v): ?><div class="images item " >
                                    <a href="#myModal_<?php echo ($v["id"]); ?>" data-toggle="modal">
                                        <img src="/thinkphp3.2.3/Public/Home/upload_img/<?php echo ($v["video_cover"]); ?>" alt="" />
                                    </a>
                                    <p><?php echo ($v["video_title"]); ?> </p>
                                </div>
                                <!-- Modal -->
                            <div class="modal fade" id="myModal_<?php echo ($v["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">属性查看</h4>
                                        </div>

                                        <div class="modal-body row">

                                            <div class="col-md-5 img-modal">
                                                <img src="/thinkphp3.2.3/Public/Home/upload_img/<?php echo ($v["video_cover"]); ?>" alt="">
                                                <!--a href="#myModal_video_<?php echo ($v["id"]); ?>" class="btn btn-white btn-sm" data-toggle="modal"><i class="fa fa-eye"></i> 观看视频</a>
                                                <a href="<?php echo U('video/view');?>" class="btn btn-white btn-sm" data-toggle="modal"><i class="fa fa-eye"></i> 观看视频</a-->



                                                <a href="#" class="btn btn-white btn-sm" onclick="change_video(this,<?php echo ($v["id"]); ?>)"><i class="fa fa-pencil"></i> 水印+转换</a>
                                                <?php if(0 == $v['is_change']): ?><span style='padding: 5px 10px;font-size: 12px;line-height: 1.5;border-radius: 3px;'>状态：未转换</span>
                                                <div class="progress  poo_1">
                                                    <div  id='percent_<?php echo ($v["id"]); ?>' style="width: 0%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar">
                                                        0%
                                                    </div>
                                                </div>
                                                <?php elseif(1 == $v['is_change']): ?>
                                                <span style='padding: 5px 10px;font-size: 12px;line-height: 1.5;border-radius: 3px;'>状态：正在转换...</span>
                                                <div class="progress  poo_1">
                                                    <div id='percent_<?php echo ($v["id"]); ?>' style="width: 0%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar">
                                                        0%
                                                    </div>
                                                </div>
                                                <?php else: ?>
                                                <span style='padding: 5px 10px;font-size: 12px;line-height: 1.5;border-radius: 3px;'>状态：完成转换</span>
                                                <div class="progress  poo_1">
                                                    <div  id='percent_<?php echo ($v["id"]); ?>' style="width: 100%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar">
                                                        100%
                                                    </div>
                                                </div><?php endif; ?>

                                                <?php if(2 == $v['is_change']): ?><a href="<?php echo U('Video/view');?>/id/<?php echo ($v["id"]); ?>" target="_blank" class="btn btn-white btn-sm"><i class="fa fa-eye"></i> 观看视频</a><?php endif; ?>


                                                <div class='p_parent'>
                                                <p class="mtop10"><strong>视频属性</strong><button class="btn btn-primary" onclick="get_attributes(this,<?php echo ($v["id"]); ?>)" style="width:70px;height:30px;">获取</button></p>
                                                <p class='channels'><strong >视频声道:</strong><?php echo ($v["channels"]); ?></p>
                                                <p class='vbit_rate'><strong >视频码率:</strong><?php echo ($v["vbit_rate"]); ?>kbps</p>
                                                <p class='abit_rate'><strong >音频码率:</strong><?php echo ($v["abit_rate"]); ?>kbps</p>
                                                <p class='width_height'><strong >  分辨率:</strong><?php echo ($v["width"]); ?>*<?php echo ($v["height"]); ?></p>
                                                <p class='duration'><strong >视频时长:</strong><?php echo ($v["duration"]); ?></p>
                                                <p class='size'><strong >视频大小:</strong><?php echo ($v["size"]); ?></p>
                                                <p class='vcodec_name'><strong >视频编码:</strong><?php echo ($v["vcodec_name"]); ?></p>
                                                <p class='acodec_name'><strong >音频编码:</strong><?php echo ($v["acodec_name"]); ?></p>
                                                <p class='avg_frame_rate'><strong >    帧率:</strong><?php echo ($v["avg_frame_rate"]); ?></p>
                                                </div>
                                            </div>
                                            <form action="<?php echo U('Video/change_info');?>" method='post' enctype="multipart/form-data">
                                                <input name='id' value='<?php echo ($v["id"]); ?>' style='display:none' />
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label> 视频标题</label>
                                                    <input  value="<?php echo ($v["video_title"]); ?>" name='title_<?php echo ($v["id"]); ?>' class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label> 上传时间</label>
                                                    <h5><?php echo (date('Y-m-d H:m:s',$v["vidup_time"])); ?></h5>
                                                    <!--input id="title" value="<?php echo (date('Y-m-d H:m:s',$v["vidup_time"])); ?>" class="form-control"-->
                                                </div>
                                                <div class="form-group">
                                                    <label> 简介</label>
                                                    <textarea rows="7" name='summary_<?php echo ($v["id"]); ?>' class="form-control"><?php echo ($v["video_summary"]); ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label> 上传人</label>
                                                    <h5><?php echo ($v["username"]); ?></h5>
                                                    <!--input id="link" value="<?php echo ($v["username"]); ?>" class="form-control"-->
                                                </div>
                                                <div class="form-group">
                                                    <label>所属模块</label>
                                                    <h5><?php echo ($v["video_type"]); ?></h5>
                                                </div>

                                                <div class="form-group">
                                                    <label>封面</label>
                                                    <input type="file" name='img' />
                                                </div>

                                                <div class="form-group">
                                                    <label>截图封面</label>
                                                    <div>
                                                    <input type='text' style='margin:8px;width:30px;' name='hour_<?php echo ($v["id"]); ?>'>时<input type='text' style='margin:8px;width:30px;' name='minutes_<?php echo ($v["id"]); ?>'>分<input type='text' style='margin:8px;width:30px;' name='seconds_<?php echo ($v["id"]); ?>'>秒
                                                    </div>
                                                </div>

                                                <span id="warn_<?php echo ($v["id"]); ?>"></span>
                                                <div class="pull-right">
                                                    <button class="btn btn-success btn-sm" onclick="is_send('<?php echo ($v["id"]); ?>')" type="button">通过审核</button>
                                                    <button class="btn btn-danger btn-sm" onclick="is_notsend('<?php echo ($v["id"]); ?>')" type="button">审核失败</button>
                                                    <button class="btn btn-info btn-sm" type="button" data-dismiss="modal" >取消</button>
                                                    <button class="btn btn-primary btn-sm"  type="submit">修改</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; ?>
                            </div>
                        </div>
                        <input type='hidden' value='' id='nokown'/>




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
      
    var all_num='<?php echo ($arr); ?>';
        arr_num = all_num.split(',');

    if(all_num!=''){
            
            $.ajax({
                url:'<?php echo U('Video/change_all');?>',    //请求的url地址
                dataType:"json",   //返回格式为json
                data:{"id":all_num},    //参数值
                type:"post",   //请求方式
                success:function(req){
                    req=eval("("+req+")");
                    length=req.length;
                    complete=0;
                    for(i=0;i<length;i++){
                        $("#percent_"+arr_num[i]).text(req[i].num+'%');
                        $("#percent_"+arr_num[i]).attr('style','width:'+req[i].num+'%');
                        $("#percent_"+arr_num[i]).parent('.poo_1').siblings('span').text('状态：'+req[i].status);
                        if(req[i].num=='100'){
                            complete=complete+1;
                        }
                    }
                    if(complete==length){
                        clearInterval(interval_all); 
                    }
                }
            });
            
            var interval_all=setInterval(run_all,'5000');
            function run_all(){
                 $.ajax({
                    url:'<?php echo U('Video/change_all');?>',    //请求的url地址
                    dataType:"json",   //返回格式为json
                    data:{"id":all_num},    //参数值
                    type:"post",   //请求方式
                    success:function(req){
                        req=eval("("+req+")");
                        length=req.length;
                        complete=0;
                        for(i=0;i<length;i++){
                            $("#percent_"+arr_num[i]).text(req[i].num+'%');
                            $("#percent_"+arr_num[i]).attr('style','width:'+req[i].num+'%');
                            $("#percent_"+arr_num[i]).parent('.poo_1').siblings('span').text('状态：'+req[i].status);
                            if(req[i].num=='100'){
                                complete=complete+1;
                            }
                        }
                        if(complete==length){
                            clearInterval(interval_all); 
                        }
                    }
                });
            }
    };




    function change_video(element,num){
        var percent=$(element).siblings('.poo_1').children('div').text();
        if(percent=='100%'){
            return;
        }
        else{

            $.ajax({
                url:'http://127.0.0.1/change.php',    //请求的url地址
                dataType:"json",   //返回格式为json
                data:{"id":num},    //参数值
                type:"post",   //请求方式
                success:function(req){
                    console.log(req);
                    //请求成功时处理
                }
            });
            $(element).next('span').text('状态：正在转换...'); 
            var nokown=$('#nokown').val();
            if(nokown==''){
                send=num+',';
            }
            else{
                send=nokown+num+',';
            }
            $('#nokown').val(send);
            console.log(send);

            clearInterval(interval); 

            var interval=setInterval(run,'5000');
            
            function run(){
                 $.ajax({
                    url:'<?php echo U('Video/change_run');?>',    //请求的url地址
                    dataType:"json",   //返回格式为json
                    data:{"id":send},    //参数值
                    type:"post",   //请求方式
                    success:function(req){

                        req=eval("("+req+")");
                        console.log(req[0].num);

                        console.log(req[0].status);

                        length=req.length;
                        console.log(length);
                        complete=0;
                        arr_num = send.split(',');
                        for(i=0;i<length;i++){
                            $("#percent_"+arr_num[i]).text(req[i].num+'%');
                            $("#percent_"+arr_num[i]).attr('style','width:'+req[i].num+'%');

                            $("#percent_"+arr_num[i]).parent('.poo_1').siblings('span').text('状态：'+req[i].status);


                            if(req[i].num=='100'){
                                complete=complete+1;
                            }
                        }
                        if(complete==length){
                            clearInterval(interval); 
                        }
                    }
                });
            }
        }
        
        
    };

    function get_attributes(element,num){
        $.ajax({
           url:'<?php echo U('Video/get_attributes');?>',
           type:'post',
           dataType:'json',
           data:{"id":num},
           success:function(data){
            console.log(data);
            var res = eval("("+data+")"); 
            console.log(res);
            var channels_str='<strong >视频声道:</strong>'+res.channels;
            var vbit_rate_str='<strong >视频码率:</strong>'+res.vbit_rate+'kbps';
            var abit_rate_str='<strong >音频码率:</strong>'+res.abit_rate+'kbps';
            var width_height_str='<strong >分辨率:</strong>'+res.width+'*'+res.height;
            var duration_str='<strong >视频时长:</strong>'+res.duration;
            var size_str='<strong >视频大小:</strong>'+res.size;
            var vcodec_name_str='<strong >视频编码:</strong>'+res.vcodec_name;
            var acodec_name_str='<strong >音频编码:</strong>'+res.acodec_name;
            var avg_frame_rate_str='<strong >帧率:</strong>'+res.avg_frame_rate;
            $(element).parents('.p_parent').children('.channels').html(channels_str);
            $(element).parents('.p_parent').children('.vbit_rate').html(vbit_rate_str);
            $(element).parents('.p_parent').children('.abit_rate').html(abit_rate_str);
            $(element).parents('.p_parent').children('.width_height').html(width_height_str);
            $(element).parents('.p_parent').children('.duration').html(duration_str);
            $(element).parents('.p_parent').children('.size').html(size_str);
            $(element).parents('.p_parent').children('.vcodec_name').html(vcodec_name_str);
            $(element).parents('.p_parent').children('.acodec_name').html(acodec_name_str);
            $(element).parents('.p_parent').children('.avg_frame_rate').html(avg_frame_rate_str);
            }
        }); 
    }

    function is_send(element){
        if($.trim($("#percent_"+element).text())=='100%'){
            location.href="<?php echo U('Video/is_send');?>/id/"+element;
        }
        else{
            $("#warn_"+element).text('视频还未转换，不可通过审核');
        }
    }

    function is_notsend(element){
        if($.trim($("#percent_"+element).text())=='100%'){
            location.href="<?php echo U('Video/is_notsend');?>/id/"+element;
        }
        else{
            $("#warn_"+element).text('视频还未转换，不可取消审核资格');
        }
    }
    




</script>



</body>
</html>