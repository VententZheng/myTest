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



<!-- 修改头像CSS -->
<link href="/thinkphp3.2.3/Public/Home/Uploadpic/head/cropper.min.css" rel="stylesheet">
<link href="/thinkphp3.2.3/Public/Home/Uploadpic/head/sitelogo.css" rel="stylesheet">
<link href="/thinkphp3.2.3/Public/Home/Uploadpic/head/sitelogo.css" rel="stylesheet">

<!--   个人资料  -->
<div class="mydata col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <div class="mydata-title">
        <h3>个人资料</h3>
    </div>
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#headPic" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i>&nbsp;头像设置</a></li>
        <li><a href="#myInformation" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>个人信息</a></li>
    </ul>

    <div id="myTabContent" class="tab-content  col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- 用户头像修改 -->
        <div class="tab-pane fade in active" id="headPic">
            <ul class="myavatar">
                <li class="avatarimg"><img id="userimg" src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($mydata["head_pic"]); ?>" style="border:black 1px solid;"></li>
                <li class=""><a href="javascript:void(0)" data-toggle="modal" data-target="#avatar-modal">修改头像</a></li>
            </ul>
        </div>

        <!-- 修改头像模态框 -->
                    <div class="modal fade head-modal" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content col-lg-offset-0 col-lg-12 col-md-offset-0 col-md-12 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12">
                                <form class="avatar-form" action="/thinkphp3.2.3/index.php/Home/User/test" enctype="multipart/form-data" method="post">
                                   
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal" type="button">&times;</button>
                                        <h4 class="modal-title" id="avatar-modal-label">头像修改</h4>
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
                                                    <h4>头像预览</h4>
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
                    <!-- 修改头像模态框结束 -->


        <!-- 个人信息修改 -->
        <div class="tab-pane fade" id="myInformation">
            <!-- 显示个人信息-->
            <div class="myinfor-show col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myinfor-show">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="nickname" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">昵&nbsp;&nbsp;&nbsp;称</label>
                        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" id="" value="<?php echo ($mydata["username"]); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="realname" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">真实姓名</label>
                        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" id="" value="<?php echo ($mydata["realname"]); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sex" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">性&nbsp;&nbsp;&nbsp;别</label>
                        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" id="" value="<?php echo ($mydata["sex"]); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="occupation" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">职&nbsp;&nbsp;&nbsp;业</label>
                        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" id="" value="<?php echo ($mydata["occupation"]); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">所在地</label>
                        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" id="" value="<?php echo ($mydata["province"]); ?> <?php echo ($mydata["city"]); ?> <?php echo ($mydata["district"]); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group mymotto">
                        <label for="name" class="control-label col-lg-2 col-md-2 col-sm-3 col-xs-3">个性签名</label>
                        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
                            <p class="form-control"><?php echo ($mydata["motto"]); ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-3 col-sm-9 col-xs-offset-3 col-sm-9">
                            <button type="button" id="mydata-edit-btn" class="btn btn-default col-lg-4 col-md-6 col-sm-8 col-xs-8">修&nbsp;改</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 点击修改出现修改表单 -->
            <div class="myinfor-edit col-lg-12 col-md-12 col-sm-12 col-xs-12" id="myinfor-edit" style="display:none">
                <form class="form-horizontal" action="<?php echo U('User/updateData');?>" method="post" role="form">
                    <div class="form-group">
                        <label for="nickname" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">昵&nbsp;&nbsp;&nbsp;称：</label>
                        <div class="col-lg-7 col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="username" value="<?php echo ($mydata["username"]); ?>" placeholder="请输入昵称" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="realname" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">真实姓名：</label>
                        <div class="col-lg-7 col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="realname" placeholder="请输入真实姓名" value="<?php echo ($mydata["realname"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sex" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">性&nbsp;&nbsp;&nbsp;别：</label>
                        <div class="col-lg-7 col-md-9 col-sm-9 col-xs-9">
                            <div class="radio" requird>
                                <label style="margin-right:30px;">
                                    <input type="radio" name="sex" id="optionsRadios1" value="男"> 男
                                </label>
                                <label>
                                    <input type="radio" name="sex" id="optionsRadios2" value="女">女
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="occupation" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">职&nbsp;&nbsp;&nbsp;业：</label>
                        <div class="col-lg-7 col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="occupation" placeholder="请输入职业" value="<?php echo ($mydata["occupation"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">所在地：</label>
                        <div class="address-edit col-lg-7 col-md-9 col-sm-9 col-xs-9" id="distpicker">
                            <select data-province="<?php echo ($mydata["province"]); ?>" class="col-lg-3 col-md-3 col-sm-4 col-xs-12" name="province"></select>
                            <select data-city="<?php echo ($mydata["city"]); ?>" class="col-lg-3 col-md-3 col-sm-4 col-xs-12" name="city"></select>
                            <select data-district="<?php echo ($mydata["district"]); ?>" class="col-lg-3 col-md-3 col-sm-4 col-xs-12" name="district"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label col-lg-2 col-md-2 col-sm-3 col-xs-3">个性签名</label>
                        <div class="col-lg-7 col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" id="mymotto-edit" rows="3" name="motto" placeholder="请输入您的个性签名"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-3 col-sm-10 col-xs-offset-3 col-xs-10">
                            <button type="submit" class="btn btn-default mydata-save col-lg-4 col-md-4 col-sm-6 col-xs-8" id="mydata-save">保&nbsp;存</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- JavaScript   -->
<script src="/thinkphp3.2.3/Public/Home/Distpicker-js/distpicker.data.js"></script>
<script src="/thinkphp3.2.3/Public/Home/Distpicker-js/distpicker.js"></script>
<script src="/thinkphp3.2.3/Public/Home/Distpicker-js/main.js"></script>
<script>
    $("#distpicker").distpicker({
        autoSelect: false
    });
</script>

<!--  修改个人信息  -->
<script>
    $(document).ready(function () {
        var motto = "<?php echo($mydata['motto']); ?>";
        $("#mydata-edit-btn").click(function () {
            $("#myinfor-show").hide();
            $("#myinfor-edit").show();
            $('#mymotto-edit').html(motto);
        });
        $("#mydata-save").click(function () {
            $("#myinfor-show").show();
            $("#myinfor-edit").hide();
        });
    });
</script>

<div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/Uploadpic/head/jquery.min.js"></script>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/Uploadpic/head/bootstrap.min.js"></script>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/Uploadpic/head/cropper.js"></script>
    <script type="text/javascript" src="/thinkphp3.2.3/Public/Home/Uploadpic/head/sitelogo.js"></script>
    <script src="/thinkphp3.2.3/Public/Home/Uploadpic/head/html2canvas.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- 修改头像 -->
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
                url: "/thinkphp3.2.3/index.php/Home/User/editUserimg",
                data: {
                    basecode: pic
                },
                type: "POST",
                dataType: 'html',
                success: function (data) {
                    var pic_route = '/thinkphp3.2.3/Public/Home/image/user_img/'+data;
                    $('#userimg').attr('src', pic_route);
                    window.location.href="<?php echo U('User/myData');?>"
                }
            });
        }
    </script>

<!-- 侧边导航点击变颜色 -->
    <script type="text/javascript">
        $("#mydata").addClass('centerhome');
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