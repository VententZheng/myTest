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
.online{background:white;display:none;height:100px;}
.online li{list-style-type:none;display:block;float:left;}
.online li span{display:block;width:200px;text-align:center;height:20px;float:left;background:white;}
.num,.current,.prev,.next,.first,.end{color:#337AB7;border:1px solid #AA939B; margin-left:5px;width:30px;height:30px;display: inline-block;line-height: 30px}
.num:hover,.current:hover,.prev:hover,.next:hover,.first:hover,.end:hover{text-decoration:none;background:#EAEAEC;}
.padding{float: left}
.prev,.next{width:50px;}

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
        
		<div class="container" style="width:1000px;">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-6 form-inline pull-right">
                <form class= style="padding:8px 0 " method='post' action="<?php echo U('Plan/planmanage');?>">
                    <button type="submit" class="btn btn-primary pull-right" style="margin:5px 3px">搜索</button>
                    <input type="text" class="form-control pull-right" name='name' style="margin:5px 3px" placeholder="请输入策划标题" />
                </form>
            </div>
        </div>
        <div class="row">
            <div class="center-block">
                <table class="table table-hover">
                    <tr>
                        <th>序号</th>
                        <th>策划发起人</th>
                        <th>策划标题</th>
                        <th>策划类型</th>
                        <th>策划阶段</th>
                        <th>管理</th>
                    </tr>
                    <?php if(is_array($plan)): $i = 0; $__LIST__ = $plan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td><?php echo ($v["username"]); ?></td>
                    <td><?php echo ($v["plan_title"]); ?></td>
                    <td><?php echo ($v["plan_type"]); ?></td>
                    <td><?php echo ($v["name"]); ?></td>
                    <td>
                        <button class="btn btn-primary btn-xs information" onclick="display_information(this,<?php echo ($v["id"]); ?>)">详情</button>
                        <a class="btn btn-primary btn-xs information" href="<?php echo U('Plan/add');?>/id/<?php echo ($v["id"]); ?>">编辑</a>
                        <a class="btn btn-primary btn-xs information" href="/thinkphp3.2.3/Public/Home<?php echo ($v["plan_route"]); ?>">下载</a>
                        <!--a href="<?php echo U('Admin/user_power');?>/id/<?php echo ($v["id"]); ?>"><button class="btn btn-primary btn-info btn-xs">权限</button></a-->
                        <?php if(($v["plan_state"]) == "0"): ?><button class="btn btn-primary btn-danger btn-xs" id="model_<?php echo ($v["id"]); ?>" data-toggle="modal" data-target="#myModal_<?php echo ($v["id"]); ?>">节目搁置</button>
                        <?php else: ?>
                        <button class="btn btn-primary btn-danger btn-xs" id="model_<?php echo ($v["id"]); ?>" data-toggle="modal" data-target="#myModal_<?php echo ($v["id"]); ?>">节目进行</button><?php endif; ?>

                        <!-- 模态框（Modal） -->
                        <div class="modal fade" id="myModal_<?php echo ($v["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                  &times;
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                <?php if(($v["plan_state"]) == "0"): ?>节目孵化
                                <?php else: ?>
                                  节目搁置<?php endif; ?>
                                </h4>
                              </div>
                              <div class="modal-body">
                                <?php if(($v["plan_state"]) == "0"): ?>通过审核，进行节目孵化，前台将在节目孵化板块可见该孵化信息
                                <?php else: ?>
                                撤销审核资格，该节目孵化搁置，不可再节目孵化板块可见<?php endif; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                </button>

                                <?php if(($v["plan_state"]) == "0"): ?><button type="button" class="btn btn-primary" onclick="
                                lock(<?php echo ($v["id"]); ?>,1)">
                                  确定
                                </button>
                                <?php else: ?>
                                <button type="button" class="btn btn-primary" onclick="
                                lock(<?php echo ($v["id"]); ?>,0)">
                                  确定
                                </button><?php endif; ?>

                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal -->
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="6" class="online" id="none_<?php echo ($v["id"]); ?>">
                        <ul>
                        <li><span class="real_name">策划标题</span><span><?php echo ($v["plan_title"]); ?></span></li>
                        <li><span>发起时间</span><?php echo (date("Y-m-d",$v["planup_time"])); ?></span></li>
                        </ul>
                        <br>
  
                        <ul>
                        <li><span class="tel">方案简介</span><span style='width:600px;height:100%;margin-bottom: 10px;border:1px solid #EAEAEC;'><?php echo ($v["plan_summary"]); ?></span></li>
                        </ul>
                        <br>

                        <ul>
                        <li><span>策划封面</span><span style='width:600px;height:100%;margin-bottom: 10px;border:1px solid #EAEAEC;'><img src='/thinkphp3.2.3/Public/Home/image/<?php echo ($v["plan_cover"]); ?>' width='600px'  height='100%' /></span></li>
                        </ul>
                        <br>
						
            						<ul>
            						<li><span>团队</span><span style='width:600px;height:100%;margin-bottom: 10px;border:1px solid #EAEAEC;'>
                            <h5> 团队名称:<?php echo ($v["team_name"]); ?></h5>
            							<?php if(is_array($array[$v['id']][0])): $i = 0; $__LIST__ = $array[$v['id']][0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><br>
            								<h5 style="margin:auto">姓名：<?php echo ($val["member_name"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;身份：<?php echo ($val["member_type"]); ?></h5>
            								<br>
            								<textare style='display:inline-block;height:20px;width:600px;text-align:left;'>简介：<?php echo ($val["member_summary"]); ?></textare>
            								<br><?php endforeach; endif; else: echo "" ;endif; ?>
            						</span></li>
            						</ul>
                        </br>


                        <ul>
                        	<li><span>策划规则</span><span style="width:600px;height:100%;margin-bottom: 10px;border:1px solid #EAEAEC;">
                        		<?php echo (html_entity_decode($v["plan_rule"])); ?>

                        	</span></li>

                        </ul>

                        <ul>
                          <li><span>策划亮点</span><span style="width:600px;height:100%;margin-bottom: 10px;border:1px solid #EAEAEC;">
                            <?php if(is_array($array_light[$v['id']][0])): $k = 0; $__LIST__ = $array_light[$v['id']][0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$light): $mod = ($k % 2 );++$k;?><br>
                            <textare style='display:inline-block;height:20px;width:600px;text-align:left;'>亮点<?php echo ($k); ?>：<?php echo ($light); ?></textare>
                            <br><?php endforeach; endif; else: echo "" ;endif; ?>
                          </span></li>
                        </ul>
                        </br>
                    </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </div>
    </div>

    <div class="text-center" style="margin-top:50px">
            <div class="page"><?php echo ($page); ?></div>
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


function display_information(element,id){
  var name="#none_"+id;
  if($(name).css('display')=='none'){
    $(name).show();
  }
  else{
    $(name).hide();
  }
  
};


function lock(id,num){
       $.ajax({
           url:'<?php echo U('Plan/lock_plan');?>',
           type:'post',
           dataType:'json',
           data:{"id":id,"num":num},
           success:function(data){
              if(data=='1'){
                window.location.href="<?php echo U('Plan/planmanage');?>";
              }
              else{
                $('#myModal_'+id).modal('hide');
              }
            }
        }); 



}



</script>






</body>
</html>