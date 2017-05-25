<?php if (!defined('THINK_PATH')) exit();?><!-- 导入头部文件 -->
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
<link href="/thinkphp3.2.3/Public/Home/css/myWisdom.css" rel="stylesheet">



    <!---------------内容----------------------  -->
    <div class="container">
        <div class="row">
            <div class="myUpload col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="upload-title col-lg-12">
                    <h3>发起原创综艺节目孵化</h3>
                </div>
                <div class="upload-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="form-group mywisdom-stage">
                        <label for="" class="col-lg-3 col-md-3 col-sm-3 col-xs-4 control-label">上传项目：</label>
                        <div class="col-sm-8 col-md-8 col-sm-8 col-xs-12">
                            <ul id="myTab" class="nav nav-pills">
                                <li class="active"><a href="#uploadPlan" data-toggle="tab">上传策划方案</a></li>
                                <li><a href="#uploadVideo" data-toggle="tab">上传作品</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="myTabContent" class="tab-content  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- 策划书上传 -->
                        <div class="tab-pane fade in active mywisdom-scheme" id="uploadPlan">
                            <form class="form-horizontal" action="<?php echo U('Wisdom/uploadPlan');?>" method="POST" role="form" enctype="multipart/form-data">
                               <!--------------项目名称---------->
                                <div class="wisdom-title form-group">
                                    <label for="wisdom-name" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">方案标题：</label>
                                    <div class="item-cont col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <input type="text" class="form-control" id="firstname" name="plan-title" placeholder="请综艺创意标题" required>
                                        <span class="help-block">项目名称应简要而独特地概括综艺创意的内容</span>
                                    </div>
                                </div>
                                <!--------------项目类型---------->
                                <div class="wisdom-type form-group">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">方案类型：</label>
                                    <div class="item-cont col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                    <?php if(is_array($res)): foreach($res as $key=>$v): ?><label class="checkbox-inline" title="例如《<?php echo ($v["example"]); ?>》">
                                            <input type="radio" name="plan-type" id="optionsRadios<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>" > <?php echo ($v["type"]); ?>
                                        </label><?php endforeach; endif; ?>
                                        
                                        <label class="checkbox-inline">
                                            <input type="radio" name="plan-type" id="optionsRadios<?php echo ($id); ?>" value="<?php echo ($id); ?>"> 其它
                                        </label>
                                    </div>
                                </div>
                                
                                <!--------------项目简介---------->
                                <div class="wisdom-summary form-group">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label" for="name">方案简介：</label>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <textarea class="form-control" name="plan-summary" rows="5" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!--------------项目策划书---------->
                                <div class="wisdom-plan form-group">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label" for="inputfile">项目策划书：</label>
                                    <div class="item-cont col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <input class="" type="file" name="plan-file" id="inputfile">
                                        <span class="help-block">支持PDF、Word、Excel、Powerpoint、Zip、Rar文件</span>
                                    </div>
                                </div>
                                <!--------------发起人角色---------->
                                <div class="wisdom-role form-group">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">发起人角色：</label>
                                    <div class="item-cont col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <label class="checkbox-inline" title="个人">
                                            <input type="radio" name="plan-role" id="optionsRadios13" value="0" checked> 策划人
                                        </label>
                                        <?php if(!empty($isteam)): ?><label class="checkbox-inline" title="团队">
                                            <input type="radio" name="plan-role" id="optionsRadios14" value="1"> 主创团队
                                        </label>
                                        <span class="help-block">主创团队默认为个人中心-我的团队中的团队</span><?php endif; ?>
                                    </div>
                                </div>
                                <div class="wisdom-btn form-group">
                                    <div class="col-sm-offset-8 col-lg-3">
                                        <button type="submit" class="btn btn-default col-lg-6">发起项目</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                <!-- 作品上传 -->
                        <div class="tab-pane fade mywisdom-project" id="uploadVideo">
                            <form class="form-horizontal" action="<?php echo U('Wisdom/uploadVideo');?>" method="POST" role="form" enctype="multipart/form-data">
                               <!--------------项目名称---------->
                                <div class="project-title form-group">
                                    <label for="project-name" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">作品标题：</label>
                                    <div class="item-cont col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <input type="text" class="form-control" id="firstname" name="video-title" placeholder="请作品标题" required>
                                        <span class="help-block">作品标题应简要而独特地概括整个作品的内容</span>
                                    </div>
                                </div>
                                <!--------------项目类型---------->
                                <div class="project-type form-group">
                                    <label for="project-type" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">作品类型：</label>
                                    <div class="item-cont col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                      <?php if(is_array($res)): foreach($res as $key=>$v): ?><label class="checkbox-inline" title="例如《<?php echo ($v["example"]); ?>》">
                                            <input type="radio" name="video-type" id="optionsRadios<?php echo ($v["id"]); ?>" value="<?php echo ($v["id"]); ?>" > <?php echo ($v["type"]); ?>
                                        </label><?php endforeach; endif; ?>

                                        <label class="checkbox-inline">
                                            <input type="radio" name="video-type" id="optionsRadios<?php echo ($id); ?>" value="<?php echo ($id); ?>"> 其它
                                        </label>
                                        
                                        <!--label class="checkbox-inline">
                                            <input type="radio" name="video-type" id="optionsRadios12" value="其它"> 其它
                                        </label-->
                                    </div>
                                </div>
                                
                                <!--------------项目简介---------->
                                <div class="project-summary form-group">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label" for="name">作品简介：</label>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <textarea class="form-control" name="video-summary" rows="5" placeholder=""></textarea>
                                    </div>
                                </div>
                                <!--------------作品---------->
                                <div class="project-plan form-group">
                                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label" for="inputfile">视频作品：</label>
                                    <div class="item-cont col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <input class="" type="file" name="video-file" id="inputfile">
                                        <span class="help-block">支持Mp4、Rmvb、flv、mkv文件，最大为1024M</span>
                                    </div>
                                </div>
                                <!--------------发起人角色---------->
                                <div class="project-role form-group">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">发起人角色：</label>
                                    <div class="item-cont col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <label class="checkbox-inline" title="个人">
                                            <input type="radio" name="video-role" id="optionsRadios13" value="0" checked> 策划人
                                        </label>
                                        <?php if(!empty($isteam)): ?><label class="checkbox-inline" title="团队">
                                            <input type="radio" name="video-role" id="optionsRadios14" value="1"> 主创团队
                                        </label>
                                        <span class="help-block">主创团队默认为个人中心-我的团队中的团队</span><?php endif; ?>
                                    </div>
                                </div>
                                <div class="project-btn form-group">
                                    <div class="col-sm-offset-8 col-lg-3">
                                        <button type="submit" class="btn btn-default col-lg-6">发起项目</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>



            </div>
        </div>
    </div>

    <!-- JavaScript   -->
    <!-- 导航栏点击变颜色 -->
    <script type="text/javascript">
        $("#wisdom").addClass('homepage');
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