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
.panel-head{border-bottom: 1px dashed #7A7676; height:35px;margin-bottom: 20px;}
.tubox{display: inline-block; width: 36px;height: 36px;line-height: 34px;overflow: hidden;border:1px solid #ccc;border-radius: 18px;margin-right: 20px;}
.tubox span{display: inline-block;text-align: center;width: 70px;}


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
        
    
    
    	<div class="panel-head"><strong style="color:#7A7676;line-height:35px;">数据备份</strong></div>
        <div style="margin-left:20px;">
        <form id="export-form" method="post" action="<?php echo U('optimize');?>">
        <div class="padding border-bottom">
        	<div class="button-group button-group-small">
            <button type="button" class="btn btn-primary btn-md information"  id="checkall" name="checkall" style="float:right"><span class="glyphicon glyphicon-ok"></span> 全选</button>
             <button type="button" id="export" class="btn btn-primary btn-md information"><span class="glyphicon glyphicon-refresh"></span> 立即备份</button>
             <button type="button" id="optimize" class="btn btn-primary btn-md information"><span class="glyphicon glyphicon-check"></span> 优化表</button>
             <button type="button" id="repair" class="btn btn-primary btn-md information"><span class="glyphicon glyphicon-wrench"></span> 修复表</button>
              <button type="button" id="restore" class="btn btn-primary btn-md information" ><span class=""></span> 还原数据</button>
             

            

             </div>
             <div class="warn" style="display:none;float:left;width:100px;"></div>
        </div>

        </form>
        <table class="table table-hover text-center">
        	<tr>
        	    <th class="text-center">选择</th>
                <th class="text-center">表名</th>
                <th class="text-center">数据量</th>
                <th class="text-center">数据大小</th>
                <th class="text-center">创建时间</th>
                <th class="text-center">操作</th>
            </tr>
            <?php if(is_array($re)): foreach($re as $key=>$v): ?><tr>
                <td>
                    <div style="width:20px;height:50px;margin-left:20px;">
                <div class="look" style="background-image:url(/thinkphp3.2.3/Public/img/blue_select.jpg); margin: 3px 0 0;width:20px;height:20px; float:left;display:none;">&nbsp;</div>
                    <input name="tables[]" type="checkbox" value="<?php echo ($v["name"]); ?>" style="float:left;width:20px;height:20px;">
                    </div>
                    

                </td>
                <td><?php echo ($v["name"]); ?></td>
                <td><?php echo ($v["rows"]); ?></td>
                <td><?php echo ($v["data_length"]); ?></td>
                <td><?php echo ($v["create_time"]); ?></td>
                <td style="width:300px">
                    <div  class="optimize_one tubox" val='<?php echo ($v["name"]); ?>' ><img class="tu" src="/thinkphp3.2.3/Public/img/optimize_gray.png"><span>优化表</span></div>
                    <div  class="repair_one tubox" val='<?php echo ($v["name"]); ?>'><img class="tu" src="/thinkphp3.2.3/Public/img/repair_gray.png"><span>修复表</span></div>
                </td>
            </tr><?php endforeach; endif; ?>
        </table>
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



    <script type="text/javascript">

    $(function() {
	     	$('#checkall').click(function(){
	     		if($('input').attr('checked')){
                    $('.look').hide();
                    $('input').show();
	     			$('input').removeAttr('Checked');
	     			$('input').prop('checked',false);
	     		}
	     		else{
                    $('input').hide();
                    $('.look').show();
	     			$('input').attr('checked','checked');
	     		}

	     	});

            $(".tubox").hover(function(){
                var imgSrc=$(this).find("img").attr("src");     
                $(this).stop().animate({"width":"120px"},300)
                $(this).css({"background":"#5AB6DF","color":"#fff","border-color":"#337AB7","cursor":"pointer"})

                imgSrc=imgSrc.replace("_gray","_white")
                $(this).find("img").attr("src",imgSrc);
            },function(){
                var imgSrc=$(this).find("img").attr("src");
                $(this).stop().animate({"width":"36px"},300)
                $(this).css({"background":"#fff","border-color":"#ccc"})
                imgSrc=imgSrc.replace("_white","_gray")
                $(this).find("img").attr("src",imgSrc);
            });

	     	 $("input[name='tables[]']").click(function(){
	     	 	var name = 'input[value="'+$(this).attr("value")+'"]';
	     	 	if($(name).attr('checked')){
                    $(this).hide();
                    $(this).prev('.look').show();
	     	 		$(name).attr('checked','checked');
	     	 	}
	     	 	else{
                    $(this).prev('.look').hide();
                    $(this).show();
	     			$(name).removeAttr('Checked');
	     			$(name).prop('checked',false);
	     	 	}

	     	 });

             $('.look').click(function(){
                $(this).hide();
                $(this).next('input').show();
                $(this).next('input').removeAttr('Checked');
                $(this).next('input').prop('checked',false);
             });


             $('#export').click(function(){
                var data=[];
                $('input[name="tables[]"]:checked').each(function(){
                    data.push($(this).val());
                });
                if(data==''){
                    alert('选择表再进行备份吧');
                }
                else{
                        $.ajax({
                       url:'<?php echo U('Index/export');?>',
                       type:'post',
                       dataType:'json',
                       data:{"db":data},
                       success:function(data){
                          $('.warn').html(data);
                          $('.warn').css('display','inline-block');
                          setTimeout($('.warn').hide(5000),2000);
                          
                        }
                    });
                }
            });

            $('#optimize').click(function(){
                var data=[];
                $('input[name="tables[]"]:checked').each(function(){
                    data.push($(this).val());
                });
                if(data==''){
                    alert('选择表再进行优化吧');
                }
                else{
                    $.ajax({
                       url:'<?php echo U('Index/optimize');?>',
                       type:'post',
                       dataType:'json',
                       data:{"db":data},
                       success:function(data){
                          $('.warn').html(data);
                          $('.warn').css('display','inline-block');
                          setTimeout($('.warn').hide(5000),2000);
                        }
                    });
                }
            });


            $('#restore').click(function(){

              /*$.ajax({
                       url:'<?php echo U('Index/restore');?>',
                       type:'post',
                       dataType:'json',
                       data:{"db":data},
                       success:function(data){
                          $('.warn').html(data);
                          $('.warn').css('display','inline-block');
                          setTimeout($('.warn').hide(5000),2000);
                        }
              });*/
              window.location.href='<?php echo U("Index/restore");?>';
            });


            $('#repair').click(function(){
                var data=[];
                $('input[name="tables[]"]:checked').each(function(){
                    data.push($(this).val());
                });
                if(data==''){
                    alert('选择表再进行修复吧');
                }
                else{
                    $.ajax({
                       url:'<?php echo U('Index/repair');?>',
                       type:'post',
                       dataType:'json',
                       data:{"db":data},
                       success:function(data){
                          $('.warn').html(data);
                          $('.warn').css('display','inline-block');
                          setTimeout($('.warn').hide(5000),2000);
                        }
                    });
                }
            });


            $('.repair_one').click(function(){
                data=$(this).attr('val');
                $.ajax({
                       url:'<?php echo U('Index/repair_one');?>',
                       type:'post',
                       dataType:'json',
                       data:{"db":data},
                       success:function(data){
                          $('.warn').html(data);
                          $('.warn').css('display','inline-block');
                          setTimeout($('.warn').hide(5000),2000);
                        }
                 });
                
            });



            $('.optimize_one').click(function(){
			
                data=$(this).attr('val');
                $.ajax({
                       url:'<?php echo U('Index/optimize_one');?>',
                       type:'post',
                       dataType:'json',
                       data:{"db":data},
                       success:function(data){
                          $('.warn').html(data);
                          $('.warn').css('display','inline-block');
                          setTimeout($('.warn').hide(5000),2000);
                        }
                 });
            });





	     	 /*$('#optimization').click(function(){
	     	 	var data=[];
	     	 	$('input[name="tables[]"]:checked').each(function(){
	     	 		data.push($(this).val());
	     	 	});
	     	 	alert(data);
	     	 	var url = "<?php echo U('optimize');?>";
	     	 	$.ajax({
	     	 		type: "post",
	     	 		url: url,
	     	 		data: data,
	     	 		success: function(){
	     	 			alert("success");
	     	 		}
	     	 	});




	     	 	
	     	 	});*/

	     	});
    </script>



</body>
</html>