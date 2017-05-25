<?php if (!defined('THINK_PATH')) exit();?><!-- 导入个人中心左侧导航 -->
<!-- 导入头部文件 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title><?php echo ($title); ?></title>
    <link rel="icon" href="/thinkphp3.2.3/Public/Home/image/ico-logo.ico">

    <!-- Bootstrap core CSS -->
    <link href="/thinkphp3.2.3/Public/Home/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
    <!-- 首页 -->
    <link href="/thinkphp3.2.3/Public/Home/css/index.css" rel="stylesheet">

    <!-- Custom Fonts奥森图标 -->
    <link rel="stylesheet" href="/thinkphp3.2.3/Public/Home/font-awesome/css/font-awesome.min.css">
     <!-- javaScript -->
    <script src="/thinkphp3.2.3/Public/Home/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/js/jquery.form.js"></script>
    <script src="/thinkphp3.2.3/Public/Home/bootstrap/js/bootstrap.min.js"></script>
    <script src="/thinkphp3.2.3/Public/Home/owl-carousel/owl.carousel.min.js"></script> 
</head>

<body>
    <!-- 判断session用户是否存在使用标签present  -->
    <?php if(isset($_SESSION['uid'])): ?><div class="navigation-back">
            <!-- 导航栏 -->
            <nav class="navbar navbar-default" id="navigation" role="navigation">
                <div class="container-fluid  col-lg-offset-1 col-md-offset-1">
                    <div class="navbar-header" style="border:none;padding:0px;margin-bottom:0px">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"  href="<?php echo U('Index/index');?>"><img src="/thinkphp3.2.3/Public/Home/image/logo.png" alt="七巧网logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <!-- <ul class="nav navbar-nav navbar-left search">
                            <li id="search-btn"><a href="javascript:void(0);"><i class="glyphicon glyphicon-search" title="搜索"></i></a></li>
                        </ul> -->
                        <ul class="nav navbar-nav menu">
                            <li id="homepage"><a href="<?php echo U('Index/index');?>">首 页</a></li>
                            <li id="information"><a href="<?php echo U('Information/index');?>">综艺资讯</a></li>
                            <li id="variety"><a href="<?php echo U('Variety/index');?>">原创综艺</a></li>
                            <li id="team"><a href="<?php echo U('Team/index');?>">优秀团队</a></li>
                            <li id="hatch"><a href="<?php echo U('Incubation/index');?>">节目孵化</a></li>
                            <li id="wisdom"><a href="<?php echo U('Wisdom/index');?>">我的智慧</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right person-center">
                            <li class="dropdown" style="text-align:center">
                                <a href="<?php echo U('User/index');?>" class="dropdown-toggle" id="membercenter" data-toggle="dropdown">
                            <?php echo ($commoninfo["username"]); ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="menu-top">
                                        <img src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($commoninfo["head_pic"]); ?>">
                                        <div class="user-name">
                                            <p class="personal-name"><a href="<?php echo U('User/myProject');?>"><?php echo ($commoninfo["username"]); ?></a></p>
                                            <p>等级：普通会员</p>
                                        </div>
                                    </li>
                                    <li class="divider" style="padding:0px;margin:0px;"></li>
                                    <ul class="menu-middle">
                                        <li><a href="<?php echo U('User/myProject');?>" title="我的项目"><i class="fa fa-file-video-o"></i><p>我的项目</p></a></li>
                                        <li><a href="<?php echo U('User/myTeam');?>" title="我的团队"><i class="fa fa-users"></i><p>我的团队</p></a></li>
                                        <li><a href="<?php echo U('User/myMessage');?>" title="我的消息"><i class="fa fa-bell-o"></i><p>我的消息</p></a></li>
                                        <li><a href="<?php echo U('User/myAccount');?>" title="账户设置"><i class="fa fa-shield"></i><p>账户设置</p></a></li>
                                    </ul>
                                    <li class="menu-bottom">
                                        <a href="<?php echo U('User/myProject');?>">个人中心 <i class="fa fa-angle-right"></i></a>
                                        <a href="<?php echo U('User/logout');?>" class="navbar-right">退出登录 <i class="glyphicon glyphicon-log-out"></i></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <?php else: ?>
        <div class="navigation-back">
            <!-- 导航栏 -->
            <nav class="navbar navbar-default" id="navigation" role="navigation">
                <div class="container-fluid  col-lg-offset-1 col-md-offset-1">
                    <div class="navbar-header" style="border:none;padding:0px;margin-bottom:0px">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"  href="<?php echo U('Index/index');?>"><img src="/thinkphp3.2.3/Public/Home/image/logo.png" alt="七巧网logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                      
                        <ul class="nav navbar-nav menu">
                            <li id="homepage"><a href="<?php echo U('Index/index');?>">首 页</a></li>
                            <li id="information"><a href="<?php echo U('Information/index');?>">综艺资讯</a></li>
                            <li id="variety"><a href="<?php echo U('Variety/index');?>">原创综艺</a></li>
                            <li id="team"><a href="<?php echo U('Team/index');?>">优秀团队</a></li>
                            <li id="hatch"><a href="<?php echo U('Incubation/index');?>">节目孵化</a></li>
                            <li id="wisdom"><a href="<?php echo U('Wisdom/index');?>">我的智慧</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right log-reg">
                            <li><a href="<?php echo U('User/login');?>"><i></i> <span>登 录</span></a></li>
                            <li><a href="<?php echo U('User/login?flag=true');?>" target="_parent" class="reg"><i></i><span>注 册</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- 搜索框 -->
            <nav class="navbar navbar-default search-box" role="navigation">
                <div class="col-lg-12">
                    <form class="col-lg-12" method="post" action="" role="search">
                        <div class="col-lg-offset-1 col-lg-10">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入搜索关键字">
                                <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i>&nbsp;搜索</button>
                    </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </form>
                </div>
            </nav>
        </div><?php endif; ?>
    
    <script type="text/javascript">
        $('#search-btn').click(function () {
            $('.search-box').toggle(1000);
        })
    </script>
<!-- 导入css文件 -->
<link href="/thinkphp3.2.3/Public/Home/css/myCenter.css" rel="stylesheet">

    <!---------------内容----------------------  -->
    <div class="container">
        <div class="row">
            <!--  顶部 -->

            <div class="person-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="top-img col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <img class="col-lg-12" src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($commoninfo["head_pic"]); ?>">
                </div>
                <div class="top-content col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <h3>欢迎您！<?php echo ($commoninfo["username"]); ?></h3>
                    <span><i class="fa fa-vimeo-square"></i> 等级：普通会员</span>
                    <?php if($commoninfo["motto"] == null): ?><p style="margin-bottom: 10px">个性签名：快去个人资料设置你的签名吧</p>
                    <?php else: ?>
                    <p style="margin-bottom: 10px">个性签名：<?php echo ($commoninfo["motto"]); ?></p><?php endif; ?>
                </div>
            </div>

            <div class="person-body col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--   左侧导航栏   -->
                <div class="body-left col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <ul>
                        <a href="<?php echo U('User/myProject');?>" id="myproject">
                            <li><i class="fa fa-upload"></i> &nbsp;我的项目</li>
                        </a>
                        <a href="<?php echo U('User/myConcern');?>" id="myconcern">
                            <li><i class="glyphicon glyphicon-star-empty"></i>&nbsp; 关注项目</li>
                        </a>
                        <a href="<?php echo U('User/myMessage');?>" id="mymessage">
                            <li><i class="fa fa-bell-o"></i> &nbsp;我的消息</li>
                        </a>
                        <a href="<?php echo U('User/myTeam');?>" id="myteam">
                            <li><i class="fa fa-users"></i> &nbsp;我的团队</li>
                        </a>
                        <a href="<?php echo U('User/myData');?>" id="mydata">
                            <li><i class=" fa fa-user"></i>&nbsp; 个人资料</li>
                        </a>
                        <a href="<?php echo U('User/myAccount');?>" id="myaccount">
                            <li><i class="fa fa-shield"></i>&nbsp; 账户设置</li>
                        </a>
                    </ul>
                </div>





<link href="/thinkphp3.2.3/Public/Home/Uploadpic/head/cropper.min.css" rel="stylesheet">
<link href="/thinkphp3.2.3/Public/Home/Uploadpic/head/sitelogo.css" rel="stylesheet">
<link href="/thinkphp3.2.3/Public/Home/Uploadpic/head/sitelogo.css" rel="stylesheet">



            <!--   我的团队  -->
            <div class="myteam col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <div class="myteam-title">
                    <h3>我的团队</h3>
                </div>
                <div class="myteam-detail col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--  团队基本信息 -->
                    <div class="base-infor col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4>基本信息
                        <?php if($mtdata["id"] == 0): ?><a href="javaScript:void(0)" id="infor-edit">创建团队</a>
                        <?php else: ?>
                        <a href="javaScript:void(0)" id="infor-edit">修改团队信息</a><?php endif; ?>
                        <a href="javaScript:void(0)" id="infor-cancel" style="display: none;">取消</a></h4>
                        <div class="team-inforhead col-lg-5 col-md-6 col-sm-6 col-xs-12">
                        <?php if($mtdata["team_pic"] == null): ?><img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="team-pic" src="/thinkphp3.2.3/Public/Home/image/team/team-default.jpg">
                        <?php else: ?>
                            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="team-pic" src="/thinkphp3.2.3/Public/Home/image/team/<?php echo ($mtdata["team_pic"]); ?>"><?php endif; ?>
                            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-toggle="modal" data-target="#avatar-modal">团队图片修改</span>
                        </div>
                        <!--  点击编辑前样式  -->
                        <div class="infordetail-show col-lg-7 col-md-6 col-sm-6 col-xs-12">
                            <form action="" class="form-horizontal" method="POST" role="form">
                                <div class="form-group">
                                    <div class="team-name">
                                        <input type="text" class="form-control" id="" value="<?php echo ($mtdata['team_name']); ?>" readonly title="团队名称">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="team-slogan">
                                        <input type="text" class="form-control" id="" value="<?php echo ($mtdata['team_slogan']); ?>" readonly title="团队口号">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="team-summary">
                                        <p><?php echo ($mtdata['team_summary']); ?></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--  点击编辑后的样式  -->
                        <div class="infordetail-edit col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display:none;">
                            <form role="form" action="<?php echo U('User/updateTeam');?>" method="post">
                                <div class="form-group">
                                    <label for="teamname">团队名称</label>
                                    <input type="text" class="form-control" id="team-name" name="teamname" value="<?php echo ($mtdata["team_name"]); ?>" placeholder="请输入团队名称" required>
                                </div>
                                <div class="form-group">
                                    <label for="teamslogan">团队口号</label>
                                    <input type="text" name="teamsolgan" class="form-control" id="team-slogan" value="<?php echo ($mtdata["team_slogan"]); ?>" placeholder="请输入团队口号">
                                </div>
                                <div class="form-group">
                                    <label for="name">团队简介</label>
                                    <textarea class="form-control" name="teamsummary" id="brief" rows="5"></textarea>
                                </div>
                                <button type="submit" id="teaminfor-save" class="btn btn-default col-lg-10 col-md-10 col-sm-8 col-xs-12">保&nbsp;存</button>
                            </form>
                        </div>
                    </div>

                    <!-- 团队头像上传模态框 -->
                    <div class="modal fade head-modal" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content col-lg-offset-0 col-lg-12 col-md-offset-0 col-md-12 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12">
                                <form class="avatar-form" action="/thinkphp3.2.3/index.php/Home/User/test" enctype="multipart/form-data" method="post">
                                   
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal" type="button">&times;</button>
                                        <h4 class="modal-title" id="avatar-modal-label">团队照片修改</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="avatar-body">
                                            <div class="avatar-upload">
                                                <input class="avatar-src" name="avatar_src" type="hidden">
                                                <input class="avatar-data" name="avatar_data" type="hidden">
                                                <button class="btn select-pic" type="button" onClick="$('input[id=avatarInput]').click();">请选择本地照片</button>
                                                <span id="avatar-name" title="上传图片名称"></span>
                                                <input class="avatar-input hide" id="avatarInput" name="avatar_file" type="file">
                                            </div>
                                            <!--  图片画布 -->
                                            <div class="row">
                                                <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="avatar-wrapper"></div>
                                                </div>
                                                <div class="head-preview col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <h4>截图预览</h4>
                                                    <div class="avatar-preview preview-lg" id="imageHead"></div>
                                                </div>
                                            </div>

                                            <div class="row avatar-btns">
                                                <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                                                    <div class="btn-group">
                                                        <button class="btn fa fa-undo" data-method="rotate" data-option="-90" type="button" title="向左旋转"></button>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn fa fa-repeat" data-method="rotate" data-option="90" type="button" title="向右旋转"></button>
                                                    </div>
                                                    <button class="btn fa fa-arrows" data-method="setDragMode" data-option="move" type="button" title="移动">
                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                </span>
                                                    </button>
                                                    <button type="button" class="btn fa fa-search-plus" data-method="zoom" data-option="0.1" title="放大图片">
                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;zoom&quot;, 0.1)">
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn fa fa-search-minus" data-method="zoom" data-option="-0.1" title="缩小图片">
                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;zoom&quot;, -0.1)">
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn fa fa-refresh" data-method="reset" title="重置图片">
                                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="$().cropper(&quot;reset&quot;)" aria-describedby="tooltip866214"></span>
                                                    </button>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <button class="btn btn-block avatar-save fa fa-save" type="button" data-dismiss="modal"> 保存修改</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- 团队头像上传模态框结束 -->

                    <!-- 团队指导老师和成员 -->
                    <div class="myteam-member col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><span>团队成员</span><a href="javaScript:void(0)" id="member-edit" class="btn btn-primary btn-md" data-toggle="modal" data-target="0">添加成员</a></h4>
                        <div class="teammember-show">
                        <?php if(is_array($tdata)): $i = 0; $__LIST__ = $tdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
                                <dt><?php echo ($vo["member_name"]); ?><span>（导师）</span>
                                    <a href="/thinkphp3.2.3/index.php/Home/User/delMember/id/<?php echo ($vo["id"]); ?>" onclick="
                                    if(confirm('确定要删除 <?php echo ($vo["member_name"]); echo ($vo["member_type"]); ?> 吗?')){
                                    return true;}else{return false;}">
                                    <i class="fa fa-trash-o" title="删除"></i></a></dt>
                                <dd><?php echo ($vo["member_summary"]); ?></dd>
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php if(is_array($mdata)): $i = 0; $__LIST__ = $mdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl>
                                <dt><?php echo ($vo["member_name"]); ?><span>（成员）</span><a href="/thinkphp3.2.3/index.php/Home/User/delMember/id/<?php echo ($vo["id"]); ?>" onclick="
                                    if(confirm('确定要删除 <?php echo ($vo["member_name"]); echo ($vo["member_type"]); ?> 吗?')){
                                    return true;}else{return false;}">
                                    <i class="fa fa-trash-o" title="删除"></i></a></dt>
                                <dd><?php echo ($vo["member_summary"]); ?></dd>
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        </div>
                        <!--  添加团队成员模态框  -->
                        <div class="modal fade" id="teammemberAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">添加团队成员</h4>
                                    </div>
                                    <form class="form-horizontal" role="form" method="POST" action="<?php echo U('User/addMember');?>">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="person" class="col-lg-2 col-md-2 col-sm-2 col-xs-3 control-label">对&nbsp;&nbsp;&nbsp;象</label>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                                    <label class="checkbox-inline">
                                                        <input type="radio" name="membertype" id="optionsRadios3" value="导师">导师
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="radio" name="membertype" id="optionsRadios4" value="成员" checked>成员
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">姓&nbsp;&nbsp;&nbsp;名</label>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" name="membername" placeholder="请输入名字">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="summary" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">简&nbsp;&nbsp;&nbsp;介</label>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <textarea class="form-control" name="membersummary" rows="5" placeholder="请输入简介"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">关 闭
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                添 加
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal -->
                        </div>
                    </div>
                </div>
            </div>

    <!-- JavaScript   -->
    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/Uploadpic/head/jquery.min.js"></script>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/Uploadpic/head/bootstrap.min.js"></script>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/Uploadpic/head/cropper.js"></script>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/Uploadpic/head/sitelogo.js"></script>
    <script src="/thinkphp3.2.3/Public/Home/Uploadpic/head/html2canvas.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- 团队图片上传 -->
    <script type="text/javascript">
        //做个下简易的验证  大小 格式 
        $('#avatarInput').on('change', function (e) {
            var filemaxsize = 1024 * 5; //5M
            var target = $(e.target);
            var Size = target[0].files[0].size / 1024;
            if (Size > filemaxsize) {
                alert('图片过大，请重新选择!');
                $(".avatar-wrapper").childre().remove;
                return false;
            }
            if (!this.files[0].type.match(/image.*/)) {
                alert('请选择正确的图片!')
            } else {
                var filename = document.querySelector("#avatar-name");
                var texts = document.querySelector("#avatarInput").value;
                var teststr = texts; //你这里的路径写错了
                testend = teststr.match(/[^\\]+\.[^\(]+/i); //直接完整文件名的
                filename.innerHTML = testend;
            }

        });

        $(".avatar-save").on("click", function () {
            var img_lg = document.getElementById('imageHead');
            // 截图小的显示框内的内容
            html2canvas(img_lg, {
                allowTaint: true,
                taintTest: false,
                onrendered: function (canvas) {
                    canvas.id = "mycanvas";
                    //生成base64图片数据
                    var dataUrl = canvas.toDataURL("image/jpg"); //生成的base68
                    var newImg = document.createElement("img");
                    newImg.src = dataUrl;
                    //                alert(newImg.src);
                    imagesAjax(dataUrl);
                }
            });
        });

        function imagesAjax(src) {
            var pic = src;
            $.ajax({
                url: "/thinkphp3.2.3/index.php/Home/User/editTeampic",
                data: {
                    basecode: pic
                },
                type: "POST",
                dataType: 'html',
                success: function (data) {
                    var pic_route = '/thinkphp3.2.3/Public/Home/image/team/'+data;
                    $('#team-pic').attr('src', pic_route);
                }
            });
        }
    </script>
    <!-- 团队图片上传结束 -->

    <!--  点击保存  -->
    <script>
        $('.update-nikename').click(function () {
            $('#nickname').attr("readonly", "readonly"); //设置为只读状态
            $('.updatenick-btn').trigger('click');
        });
    </script>
    
    <script>
        $(document).ready(function () {
            var i = "<?php echo($mtdata['team_summary']); ?>";
            // 点击团队修改基本信息
            $("#infor-edit").click(function () {
                $(".infordetail-show").hide();
                $(".infordetail-edit").show();
                $("#infor-cancel").show();
                $("#infor-edit").hide();
                $("#brief").html(i);  //给textarea赋值
            });
            // 点击保存
            $("#teaminfor-save").click(function () {
                $(".infordetail-show").show();
                $(".infordetail-edit").hide();
                $("#infor-edit").show();
                $("#infor-cancel").hide();
            });
            // 点击取消
            $("#infor-cancel").click(function () {
                $(".infordetail-show").show();
                $(".infordetail-edit").hide();
                $("#infor-edit").show();
                $("#infor-cancel").hide();
            });
        });
    </script>

    <!-- 添加团队成员之前判断是否创建团队 -->
    <script type="text/javascript">
        $('#member-edit').click(function(){
            $.get('<?php echo U("User/checkTeam");?>',function(data){
                console.log(data);
            if(data){
                $('#member-edit').attr('data-target','#teammemberAdd');
            }else{
                alert("请先创建团队");
            }
            },'json');
        })
    </script>

    <!-- 侧边导航点击变颜色 -->
    <script type="text/javascript">
        $("#myteam").addClass('centerhome');
    </script>

 <!-- -------------footer底部--------- -->
 <!-- -------------footer底部--------- -->
    
    <div class="footer">
        <div class="wrap-footer">
            <div class="container footer-t">
                <div class="row">
                <hr style="background-color:#999999; height:2px" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" />
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-top">
                        <ul>
                            <li><a href="#">关于我们</a></li><span> | </span>
                            <li><a href="#">诚聘英才</a></li><span> | </span>
                            <li><a href="#">服务条款</a></li><span> | </span>
                            <li><a href="#">广告服务</a></li><span> | </span>
                            <li><a href="#">客服中心</a></li><span> | </span>
                            <li><a href="#">意见反馈</a></li><span> | </span>
                            <li><a href="#">网站导航</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-middle">
                        &copy; 七巧网 ****版权所有
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  返回顶部  -->
    <div class="bottom_tools">
        <a id="scrollUp" href="javascript:;" title="回到顶部"></a>
    </div>
    <script type="text/javascript">
    $(function () {
            var $body = $(document.body);
            var $bottomTools = $('.bottom_tools');
            var $qrTools = $('.qr_tool');
            var qrImg = $('.qr_img');
            $(window).scroll(function () {
                var scrollHeight = $(document).height();
                var scrollTop = $(window).scrollTop();
                var $footerHeight = $('.footer').outerHeight(true);
                var $windowHeight = $(window).innerHeight();
                scrollTop > 300 ? $("#scrollUp").fadeIn(200).css("display", "block") : $("#scrollUp").fadeOut(200);//fadeIn元素淡入，fadeOut(2000)元素淡出2秒
                $bottomTools.css("bottom", scrollHeight - scrollTop - $footerHeight > $windowHeight ? 40 : $windowHeight + scrollTop + $footerHeight + 40 - scrollHeight);
            });
            $('#scrollUp').click(function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                });
            });
            $qrTools.hover(function () {
                qrImg.fadeIn();
            }, function () {
                qrImg.fadeOut();
            });
        });
    </script>
    </body>

</html>