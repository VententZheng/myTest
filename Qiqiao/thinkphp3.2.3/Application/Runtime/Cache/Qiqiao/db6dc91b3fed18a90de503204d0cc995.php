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
.online li span{display:block;width:140px;text-align:center;height:20px;float:left;background:white;}
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
                <form class= style="padding:8px 0 " method='post' action="<?php echo U('Admin/user');?>">
                    <a type="button" class="btn btn-primary pull-right" href="<?php echo U('Admin/adduser');?>" style="margin:5px 3px">新增管理员</a>
                    <button type="submit" class="btn btn-primary pull-right" style="margin:5px 3px">搜索</button>
                    <input type="text" class="form-control pull-right" name='login_name' style="margin:5px 3px" placeholder="请输入登录名" />
                </form>
            </div>
        </div>
        <div class="row">
            <div class="center-block">
                <table class="table table-hover">
                    <tr>
                        <th>序号</th>
                        <th>登录名</th>
                        <th>真实姓名</th>
                        <th>创建时间</th>
                        <th>所属角色</th>
                        <th>管理</th>
                    </tr>
                    <?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
                    <td><?php echo ($v["id"]); ?></td>
                    <td><?php echo ($v["name"]); ?></td>
                    <td><?php echo ($v["real_name"]); ?></td>
                    <td><?php echo ($v["create_time"]); ?></td>
                    <td><?php echo ($v["title"]); ?></td>
                    <td>
                        <button class="btn btn-primary btn-xs information" onclick="display_information(this,<?php echo ($v["id"]); ?>)">信息</button>
                        <a href="<?php echo U('Admin/user_power');?>/id/<?php echo ($v["id"]); ?>"><button class="btn btn-primary btn-info btn-xs">权限</button></a>
                        <?php if(($v["status"]) == "0"): ?><button class="btn btn-primary btn-danger btn-xs" id="model_<?php echo ($v["id"]); ?>" data-toggle="modal" data-target="#myModal_<?php echo ($v["id"]); ?>">锁定</button>
                        <?php else: ?>
                        <button class="btn btn-primary btn-danger btn-xs" id="model_<?php echo ($v["id"]); ?>" data-toggle="modal" data-target="#myModal_<?php echo ($v["id"]); ?>">解绑</button><?php endif; ?>

                        <!-- 模态框（Modal） -->
                        <div class="modal fade" id="myModal_<?php echo ($v["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                  &times;
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                <?php if(($v["status"]) == "0"): ?>锁定用户
                                <?php else: ?>
                                  解绑用户<?php endif; ?>
                                </h4>
                              </div>
                              <div class="modal-body">
                                <?php if(($v["status"]) == "0"): ?>锁定用户后，用户将不能进行任何操作
                                <?php else: ?>
                                解绑用户后，用户将恢复操作<?php endif; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                </button>

                                <?php if(($v["status"]) == "0"): ?><button type="button" class="btn btn-primary" onclick="
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
                        <li><span class="real_name">姓名</span><span ondblclick="showelement(this,<?php echo ($v["id"]); ?>)"><?php echo ($v["real_name"]); ?></span></li>
                        <li><span>登录名</span><span><?php echo ($v["name"]); ?></span></li>
                        <li><span class="id_card">身份证</span><span ondblclick="showelement(this,<?php echo ($v["id"]); ?>)"><?php echo ($v["id_card"]); ?></span></li>
                        
                        </ul>
                        <br>
  
                        <ul>
                        <li><span class="tel">电话</span><span ondblclick="showelement(this,<?php echo ($v["id"]); ?>)"><?php echo ($v["tel"]); ?></span></li>
                        <li><span class="age">年龄</span><span ondblclick="showelement(this,<?php echo ($v["id"]); ?>)"><?php echo ($v["age"]); ?></span></li>
                        <li><span class="mail">邮箱</span><span ondblclick="showelement(this,<?php echo ($v["id"]); ?>)"><?php echo ($v["mail"]); ?></span></li>
                        </ul>
                        <br>

                        <ul>
                        <li><span>创建时间</span><span><?php echo ($v["create_time"]); ?></span></li>
                        <li><span class="role">角色</span>
						            <span class="modify_select" ondblclick="showelement(this,<?php echo ($v["id"]); ?>,<?php echo ($v["roleid"]); ?>)"><?php echo ($v["title"]); ?></span>


            						<select class="select_whole_<?php echo ($v["id"]); ?>" onchange="change_select(this,<?php echo ($v["id"]); ?>,<?php echo ($v["roleid"]); ?>)" style="display:none">
            							<?php if(is_array($role_title)): $i = 0; $__LIST__ = $role_title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option class="select_<?php echo ($val["id"]); ?>" value="<?php echo ($val["title"]); ?>"><?php echo ($val["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            						</select>
						
						
						
						</li>
                        <li><span></span><span>双击内容修改</span></li>
                        </ul>
                        </br>
                    </td>
                    </tr><?php endforeach; endif; ?>
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

function showelement(element,id,roleid){
  var oldhtml=$(element).html();
  var input="<input type='text' style='width:135px;' value='"+oldhtml+"' />";
  var reg_id_card = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
  var reg_tel=/^1[3|4|5|8][0-9]\d{4,8}$/;
  var reg_age=/^[0-9]*[1-9][0-9]*$/;
  var reg_mail=/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
  $(element).html('');
  if($(element).prev().attr('class')=='role'){
    $(".select_whole_"+id).children("option").removeAttr('selected');
		$(".select_whole_"+id).children(".select_"+roleid).attr('selected','selected');
		str=$(".select_whole_"+id).prop("outerHTML");
    reg=/style="display:none"/;
    str=str.replace(reg,"");
		$(element).append(str);
  }
  else{
  $(element).append(input);

  $(element).children('input').blur(function(){
    if($(this).val()==''){
      var value=oldhtml;
    }
    else{
      var value=$(this).val();
    }
    str=$(element).prev().attr('class');
    
    switch(str){
      case 'id_card':
           if(!reg_id_card.test(value)){
            value=oldhtml;
          }
           break;
      case 'tel':
          if(!reg_tel.test(value)){
            value=oldhtml;
          }
          break;
      case 'age':
          if(!reg_age.test(value)){
            value=oldhtml;
          }
          break;
      case 'mail':
          if(!reg_mail.test(value)){
            value=oldhtml;
          }
          break;
    }
     $.ajax({
           url:'<?php echo U('Admin/edit_user');?>',
           type:'post',
           dataType:'json',
           data:{"str":str,"id":id,"value":value},
           success:function(data){
              //$("#no-see").show().delay(1000).hide(1000);
            }
    }); 
    $(element).html(value);
  });
  $(element).children('input').focus();
  }
};

function display_information(element,id){
  var name="#none_"+id;
  if($(name).css('display')=='none'){
    $(name).show();
  }
  else{
    $(name).hide();
  }
  
};

function change_select(select_whole,element,select)
{
	//console.log($(".select_whole_"+element+" option:selected").val());
  //console.log(element);

  str = $(".select_whole_"+element+" option:selected").val();
   $.ajax({
     url:'<?php echo U('Admin/change_role');?>',
     type:'post',
     dataType:'json',
     data:{"id":element,"str":str},
     success:function(data){
        if(data){
          str_span='showelement(this,'+element+','+data+')';
          $(select_whole).parent('.modify_select').attr("ondblclick",str_span);
          $(select_whole).parent('.modify_select').html(str);
        }
      }
  }); 



};






function lock(id,num){
       $.ajax({
           url:'<?php echo U('Admin/lock_user');?>',
           type:'post',
           dataType:'json',
           data:{"id":id,"num":num},
           success:function(data){
              if(data=='1'){
                window.location.href="<?php echo U('Admin/user');?>";
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