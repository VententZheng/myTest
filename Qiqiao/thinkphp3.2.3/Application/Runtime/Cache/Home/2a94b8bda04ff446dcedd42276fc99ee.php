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

    <!-- ----------------------轮播------------------------------ -->
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
        <?php if(is_array($carousel)): $i = 0; $__LIST__ = $carousel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li data-target="#myCarousel" data-slide-to="<?php echo ($i-1); ?>" class='<?php if($i-1 == 0): ?>active<?php endif; ?>'></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
        <?php if(is_array($carousel)): $i = 0; $__LIST__ = $carousel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vot): $mod = ($i % 2 );++$i;?><div class='item <?php if($i-1 == 0): ?>active<?php endif; ?>'>
                <a href="<?php echo U('Variety/player',array('id'=>$vot['id']));?>"><img src="/thinkphp3.2.3/Public/Home/upload_img/<?php echo ($vot["video_cover"]); ?>" alt="First slide"></a>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- 轮播（Carousel）导航 -->

        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;
    </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;
    </a>
</div>

    <!-- --------------类型--------------------  -->
    <div class="container">
        <!-- 原创综艺 -->
        <div class="row">
            <!--  左边内容  -->
            <div class="modular col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="vcontent col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="vid-header">
                        <h4><span><i class="fa fa-file-video-o"></i>&nbsp;最新综艺</span><a href="<?php echo U('Variety/index',array('pid'=>0,'id'=>0));?>">更多<i class="fa fa-chevron-circle-right"></i></a></h4>
                    </div>
                    <div class="vid-content col-lg-12">

                    <?php if(is_array($updatevid)): $i = 0; $__LIST__ = $updatevid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$upvid): $mod = ($i % 2 );++$i;?><div class="col-lg-4 col-md-4 col-sm-4  col-xs-6">
                            <div class="vitem col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="vitem-caption">
                                <?php if($upvid["play_times"] > 50): ?><span>热门</span><?php endif; ?>
                                    <a href="<?php echo U('Variety/player',array('id'=>$upvid['id']));?>"><i class="fa fa-play-circle-o"></i></a>
                                    <p><?php echo ($upvid["video_title"]); ?></p>
                                </div>
                                <div class="vitem-img">
                                    <img src="/thinkphp3.2.3/Public/Home/upload_img/<?php echo ($upvid["video_cover"]); ?>" class="img-responsive  center-block" alt="">
                                </div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>    
            </div>
                </div>
                <!--  右边排行榜  -->
                <div class="vranking-list col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="vrank-header col-lg-12 col-md-12 cl-sm-12 col-xs-12">
                        <h4><span>综艺热门排行榜</span></h4>
                    </div>
                    <div class="vrank-content col-lg-12 col-md-12 cl-sm-12 col-xs-12">
                        <ul>
                        <?php if(is_array($hotvid)): $i = 0; $__LIST__ = $hotvid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hvid): $mod = ($i % 2 );++$i;?><li class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="<?php echo U('Variety/player',array('id'=>$hvid['id']));?>" class="col-lg-10 col-md-10 col-sm-8 col-xs-10" title="<?php echo ($hvid["video_title"]); ?>"><i class="fa fa-angle-right"></i>&nbsp;<?php echo ($hvid["video_title"]); ?></a><span class="col-lg-2 col-md-2 col-sm-4 col-xs-2"><?php echo ($hvid["play_times"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- 节目孵化  -->
        <div class="row">
            <!--  左边内容  -->
            <div class="modular col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="vcontent col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="vid-header">
                        <h4><span><i class="fa fa-file-word-o"></i>&nbsp;最新孵化</span><a href="<?php echo U('Incubation/index');?>">更多<i class="fa fa-chevron-circle-right"></i></a></h4>
                    </div>
                    <div class="pid-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <?php if(is_array($nplan)): $i = 0; $__LIST__ = $nplan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nplan): $mod = ($i % 2 );++$i;?><div class="pitem col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="pitem-pic col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="<?php echo U('Incubation/incubationDetail',array('id'=>$nplan['id']));?>"><img src="/thinkphp3.2.3/Public/Home/image/<?php echo ($nplan["plan_cover"]); ?>" class="img-responsive center-block" alt=""></a>
                            </div>
                            <div class="pitem-caption">
                                <!-- <span>热门</span> -->
                                <a href="<?php echo U('Incubation/incubationDetail',array('id'=>$nplan['id']));?>"><?php echo ($nplan["plan_title"]); ?></a>
                                <p><i class="fa fa-history"></i> 进 度：<?php echo ($nplan["plan_stage"]); ?></p>
                                <p><i class="fa fa-th-large"></i> 类 型：<?php echo ($nplan["plan_type"]); ?></p>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>


                    </div>
                </div>
                <!--  右边排行榜  -->
                <div class="vranking-list col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="vrank-header col-lg-12 col-md-12 cl-sm-12 col-xs-12">
                        <h4><span>孵化热门排行榜</span></h4>
                    </div>
                    <div class="vrank-content col-lg-12 col-md-12 cl-sm-12 col-xs-12">
                        <ul>
                        <?php if(is_array($hotplan)): $i = 0; $__LIST__ = $hotplan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotplan): $mod = ($i % 2 );++$i;?><li class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="<?php echo U('Incubation/incubationDetail',array('id'=>$hotplan['id']));?>" class="col-lg-10 col-md-10 col-sm-8 col-xs-10" title="<?php echo ($hotplan["plan_title"]); ?>"><i class="fa fa-angle-right"></i>&nbsp;<?php echo ($hotplan["plan_title"]); ?></a><span class="col-lg-2 col-md-2 col-sm-4 col-xs-2"><?php echo ($hotplan["plan_times"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- 综艺资讯  -->
        <div class="row">
            <!--  左边内容  -->
            <div class="modular col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="vcontent col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="vid-header">
                        <h4><span><i class="fa fa-file-text-o"></i>&nbsp;综艺资讯</span><a href="<?php echo U('Information/index');?>">更多<i class="fa fa-chevron-circle-right"></i></a></h4>
                    </div>
                    <div class="icontent col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <?php if(is_array($information)): $i = 0; $__LIST__ = $information;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?><div class="iitem col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="iitem-pic col-lg-3 col-md-3"><img src="/thinkphp3.2.3/Public/information_img/<?php echo ($infor["news_img"]); ?>" class="img-responsive center-block" alt=""></div>
                            <div class="title col-lg-9 col-md-9 col-sm-12 col-xs-12"><a href="<?php echo U('Information/detail',array('id'=>$infor['id']));?>"><?php echo ($infor["news_title"]); ?></a></div>
                            <div class="time col-lg-9 col-md-9 col-sm-12 col-xs-12"><span><?php echo ($infor["news_time"]); ?></span></div>
                            <div class="summary col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <p><?php echo ($infor["news_summary"]); ?></p>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>

                <!--  右边排行榜  -->
                <div class="vranking-list col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="vrank-header col-lg-12 col-md-12 cl-sm-12 col-xs-12">
                        <h4><span>热门综艺资讯</span></h4>
                    </div>
                    <div class="vrank-content col-lg-12 col-md-12 cl-sm-12 col-xs-12">
                        <ul>
                        <?php if(is_array($hotinfor)): $i = 0; $__LIST__ = $hotinfor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotinfor): $mod = ($i % 2 );++$i;?><li class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="<?php echo U('Information/detail',array('id'=>$hotinfor['id']));?>" class="col-lg-10 col-md-10 col-sm-8 col-xs-10" title="<?php echo ($hotinfor["news_title"]); ?>"><i class="fa fa-angle-right"></i>&nbsp;<?php echo ($hotinfor["news_title"]); ?></a><span class="col-lg-2 col-md-2 col-sm-4 col-xs-2">&nbsp;&nbsp;<?php echo ($hotinfor["news_visit"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 优秀团队  -->
        <div class="row">
            <!--  左边内容  -->
            <div class="modular col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="vcontent col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="vid-header">
                        <h4><span><i class="fa fa-users"></i>&nbsp;优秀团队</span><a href="<?php echo U('Team/index');?>">更多<i class="fa fa-chevron-circle-right"></i></a></h4>
                    </div>
                    <div class="tcontent col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <?php if(is_array($team)): $i = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$team): $mod = ($i % 2 );++$i;?><div class="titem col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="titem-s col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="t-pic col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php if($team["team_pic"] == null): ?><img src="/thinkphp3.2.3/Public/Home/image/team/team-default.jpg" class="img-responsive center-block" alt=""></div>
                                <?php else: ?>
                                <img src="/thinkphp3.2.3/Public/Home/image/team/<?php echo ($team["team_pic"]); ?>" class="img-responsive center-block" alt=""></div><?php endif; ?>
                                <div class="t-name col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px">
                                    <a href="<?php echo U('Team/excellentTeam',array('id'=>$team['id']));?>"><h4><?php echo ($team["team_name"]); ?></h4></a></div>
                                <!--div class="t-project col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul>
                                        <li>《霹雳天使》</li>
                                        <li>《达芬奇密码》</li>
                                    </ul>
                                </div-->
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>


                    </div>
                </div>

                <!--  右边排行榜  -->
                <div class="vranking-list col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="vrank-header col-lg-12 col-md-12 cl-sm-12 col-xs-12">
                        <h4><span>优秀团队榜</span></h4>
                    </div>
                    <div class="vrank-content col-lg-12 col-md-12 cl-sm-12 col-xs-12">
                        <ul>
                        <?php if(is_array($hotteam)): $i = 0; $__LIST__ = $hotteam;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotteam): $mod = ($i % 2 );++$i;?><li class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="<?php echo U('Team/excellentTeam',array('id'=>$team['id']));?>" class="col-lg-10 col-md-10 col-sm-8 col-xs-10" title="<?php echo ($hottem["team_name"]); ?>"><i class="fa fa-angle-right"></i>&nbsp;<?php echo ($hotteam["team_name"]); ?></a><span class="col-lg-2 col-md-2 col-sm-4 col-xs-2"></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>


<!-- JavaScript   -->  
   <!-- 轮播 -->
    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 3000
        });
    </script>    
    <!-- 导航栏点击变颜色 -->
    <script type="text/javascript">
        $("#homepage").addClass('homepage');
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