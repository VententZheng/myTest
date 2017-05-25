<?php if (!defined('THINK_PATH')) exit();?><!-- 导入个人中心左侧 -->
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



            <!--   账户设置  -->
            <div class="myaccount col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <div class="myaccount-title">
                    <h3>账户设置</h3>
                </div>
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active col-lg-2 col-md-2 col-xs-3"><a href="#myEmail" data-toggle="tab"><i class="fa fa-envelope-o"></i>&nbsp;邮箱验证</a></li>
                    <li class="col-lg-2 col-md-2 col-xs-3"><a href="#myPhone" data-toggle="tab"><i class="fa fa-mobile-phone"></i>&nbsp;手机验证</a></li>
                    <li class="col-lg-2 col-md-2 col-xs-3"><a href="#modifyPassword" data-toggle="tab"><i class="fa fa-lock"></i>&nbsp;修改密码</a></li>
                    <li class="col-lg-2 col-md-2 col-xs-3"><a href="#otherAccount" data-toggle="tab"><i class="fa fa-link"></i>&nbsp;第三方账号</a></li>
                </ul>

                <div id="myTabContent" class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--   邮箱绑定   -->
                    <div class="tab-pane fade in active myemail" id="myEmail">
                        <!-- 已经绑定邮箱样式 -->
                        <?php if(!empty($adata["email"])): ?><form class="form-horizontal email-bond" role="form">
                            <div class="form-group">
                                <label for="label" class="col-lg-2 col-md-2 col-sm-3 col-xs-3 control-label">已绑定邮箱：</label>
                                <div class="col-lg-5 col-md-6 col-sm-8 col-xs-9 email-content">
                                    <span><?php echo ($adata["email"]); ?></span>
                                    <a href="/thinkphp3.2.3/index.php/Home/User/removerEmail" onclick="if(confirm('确定要解除邮箱绑定吗?')){return true;}else{return false;}">解除绑定</a>
                                </div>
                            </div>
                        </form>
                        <?php else: ?>
                        <!-- 没绑定邮箱样式 -->
                        <form role="form" class="form-horizontal" method="post" action="<?php echo U('User/addEmail');?>" id="emailModify">
                            <div class="form-group">
                                <label for="email" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">邮&nbsp;&nbsp;&nbsp;箱</label>
                                <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8">
                                    <input type="text" class="form-control mailbox" id="email" name="email" placeholder="请输入常用邮箱">
                                </div>
                                <div>
                                    <label for="email" class="error control-label col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-sm-offset-2 col-sm-9 col-xs-offset-2 col-xs-9" style="color: red;text-align: left;padding-left: 20px;"></label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="emailcode" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">验证码</label>
                                <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control emailboxcode" name="mailboxcode" placeholder="请输入邮箱验证码">
                                        <span class="input-group-addon">获取验证码</span>
                                    </div>
                                </div>
                                <div>
                                <label for="mailboxcode" class="error control-label col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-sm-offset-2 col-sm-9 col-xs-offset-2 col-xs-9" style="color: red;text-align: left;padding-left: 20px;"></label>
                                </div>
                            </div>

                            <div class="form-group email-btn" style="text-align:left;">
                                <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-offset-2 col-xs-10">
                                    <button type="submit" class="btn btn-default col-lg-5 col-md-5 col-sm-7 col-xs-7">保 存</button>
                                </div>
                            </div>
                        </form><?php endif; ?>
                    </div>

                    <!--  手机验证  -->
                    <div class="tab-pane fade myphone" id="myPhone">
                    <!-- 已经绑定手机号码样式 -->
                    <?php if(!empty($adata["phone"])): ?><form class="form-horizontal phone-bond" role="form">
                            <div class="form-group">
                                <label for="label" class="col-lg-2 col-md-2 col-sm-3 col-xs-4 control-label">已绑定手机号：</label>
                                <div class="col-lg-5 col-md-6 col-sm-8 col-xs-8 phone-content">
                                    <span><?php echo ($adata["phone"]); ?></span>
                                    <!--a href="/thinkphp3.2.3/index.php/Home/User/removerPhone" onclick="if(confirm('确定要解除手机号绑定吗?')){return true;}else{return false;}">解除手机绑定</a-->
                                </div>
                            </div>
                        </form>
                        <?php else: ?>
                        <!-- 未绑定手机号样式 -->
                        <form role="form" class="form-horizontal" id="phoneBind" method="POST" action="<?php echo U('User/addPhone');?>">
                            <div class="form-group">
                                <label for="phone" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">手&nbsp;&nbsp;&nbsp;机</label>
                                <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8">
                                    <input type="text" class="form-control" id="phonenum" name="phonenum" placeholder="请输入常用手机号码" required>
                                </div>
                                 <label for="phonenum" class="error control-label col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-sm-offset-2 col-sm-9 col-xs-offset-2 col-xs-9" style="color: red;text-align: left;padding-left: 20px;"></label>
                            </div>
                            <div class="form-group">
                                <label for="phonecode" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">验证码</label>
                                <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="请输入手机验证码" name="phonecode">
                                        <span class="input-group-addon">获取验证码</span>
                                    </div>
                                </div>
                                <label for="phonecode" class="error control-label col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-sm-offset-2 col-sm-9 col-xs-offset-2 col-xs-9" style="color: red;text-align: left;padding-left: 20px;"></label>
                            </div>
                            <div class="form-group phone-btn" style="text-align:left;">
                                <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-offset-2 col-xs-10">
                                    <button type="submit" class="btn btn-default col-lg-5 col-md-5 col-sm-7 col-xs-7">保 存</button>
                                </div>
                            </div>
                        </form><?php endif; ?>
                    </div>

                    <!--  修改密码  -->
                    <div class="tab-pane fade mypassword" id="modifyPassword">
                        <form role="form" class="form-horizontal" id="passwordEdit" method="POST" action="<?php echo U('User/modifyPwd');?>">
                            <div class="form-group">
                                <label for="password" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">原密码</label>
                                <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="请输入原密码">
                                </div>
                                <label for="password" class="error control-label col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-sm-offset-2 col-sm-9 col-xs-offset-2 col-xs-9" style="color: red;text-align: left;padding-left: 20px;"></label>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">新密码</label>
                                <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8">
                                    <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="请输入新密码" required>
                                </div>
                                <label for="newpassword" class="error control-label col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-sm-offset-2 col-sm-9 col-xs-offset-2 col-xs-9" style="color: red;text-align: left;padding-left: 20px;"></label>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label">确认密码</label>
                                <div class="col-lg-6 col-md-7 col-sm-8 col-xs-8">
                                    <input type="password" class="form-control" id="confirmpwd" name="confirmpwd" placeholder="请输入确认新密码" required>
                                </div>
                                <label for="confirmpwd" class="error control-label col-lg-offset-2 col-lg-9 col-md-offset-2 col-md-9 col-sm-offset-2 col-sm-9 col-xs-offset-2 col-xs-9" style="color: red;text-align: left;padding-left: 20px;"></label>
                            </div>
                            <div class="form-group password-btn" style="text-align:left;">
                                <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-offset-2 col-xs-10">
                                    <button type="submit" class="btn btn-default col-lg-5 col-md-5 col-sm-7 col-xs-7">保存</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--  第三方账户绑定   -->
                    <div class="tab-pane fade myother" id="otherAccount">
                        <ul>
                            <li><i class="fa fa-weixin"></i></li>
                            <li><span>微信</span></li>
                            <li><a href="#">立即绑定</a></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-weibo"></i></li>
                            <li><span>新浪微博</span></li>
                            <li><a href="#">立即绑定</a></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-qq"></i></li>
                            <li><span>QQ</span></li>
                            <li><a href="#">立即绑定</a></li>
                        </ul>
                    </div>

                </div>
            </div>

    <!-- JavaScript -->
    <script src="/thinkphp3.2.3/Public/Home/js/jquery.validate.min.js"></script>
    <script src="/thinkphp3.2.3/Public/Home/js/validate-messages_zh.min.js"></script>

    <!--  邮箱绑定验证  -->
    <script>
        $().ready(function () {
            $("#emailModify").validate({
                //验证规则
                rules: {
                    email: {
                        required: true,
                        checkemail:true,
                        remote: {
                            url: "/thinkphp3.2.3/index.php/Home/User/checkemail",
                            type: "post",
                            data: {
                                ajaxemail: function () {
                                    return $('#email').val();
                                }
                            },
                            dataType: "html",
                            dataFilter: function (data, type) {
                                if (data == true)
                                    return true;
                                else
                                    return false;
                            },
                        }
                    },
                    mailboxcode: 'required',
                },
                //提示信息
                messages: {
                    email: {
                        required: '*请输入常用邮箱',
                        remote: '*该邮箱已经注册',
                    },
                    mailboxcode: '*请输入邮箱验证码',
                },

            });
            //邮箱正则表达式验证
            $.validator.addMethod("checkemail", function (value, element, params) {
                var checkemail = /^^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/;
                return this.optional(element) || (checkemail.test(value));
            }, "*请输入正确的邮箱");
        });
    </script>

    <!-- 手机绑定验证 -->
    <script type="text/javascript">
         $().ready(function () {
            $("#phoneBind").validate({
                //验证规则
                rules: {
                    phonenum: {
                        required: true,
                        checkPhone: true,
                        remote: {
                            url: "/thinkphp3.2.3/index.php/Home/User/checkphone",
                            type: "post",
                            data: {
                                ajaxphone: function () {
                                    return $('#phonenum').val();
                                }
                            },
                            dataType: "html",
                            dataFilter: function (data, type) {
                                if (data == true)
                                    return true;
                                else
                                    return false;
                            },
                        }
                    },
                    phonecode: 'required',
                },
                //提示信息
                messages: {
                    phonenum: {
                        required: '*请输入常用手机号',
                        remote: '*该手机号已经注册',
                    },
                    phonecode: '*请输入手机验证码',
                },

            });
            //手机号码正则表达式验证
            $.validator.addMethod("checkPhone", function (value, element, params) {
                var checkPhone = /^1[3|4|5|7|8][0-9]{9}$/;
                return this.optional(element) || (checkPhone.test(value));
            }, "*请输入正确的手机号码");
        });
</script>

<!-- 两次密码相同 -->
    <script>
        $().ready(function () {
            $("#passwordEdit").validate({
                //验证规则
                rules: {
                    //密码
                    password: {
                        required: true,
                        remote: {
                            url: "/thinkphp3.2.3/index.php/Home/User/checkpwd",
                            type: "post",
                            data: {
                                ajaxpwd: function () {
                                    return $('#password').val();
                                }
                            },
                            dataType: "html",
                            dataFilter: function (data, type) {
                                if (data == true)
                                    return true;
                                else
                                    return false;
                            },
                        }
                    },
                    newpassword: {
                        required: true,
                    },
                    //确认密码
                    confirmpwd: {
                        required: true,
                        equalTo: "#newpassword",
                    },
                },
                //提示信息
                messages: {
                    password:　{
                        required: '*请输入原密码',
                        remote: '*原密码输入错误',
                    },
                    newpassword: {
                        required: '*请输入新密码',
                    },
                    confirmpwd: {
                        required: '*请输入确认密码',
                        equalTo: '*两次输入的密码不一致',
                    },
                },
            });
        });
    </script>

<!-- 直接跳转修改密码 -->
    <script>
        var url = window.location.href;
        var index = url.indexOf("flag");
        if (index == 'pwd') {
            $('.toregister a').trigger("click");
        }
    </script>

    <!-- 侧边导航点击变颜色 -->
    <script type="text/javascript">
        $("#myaccount").addClass('centerhome');
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