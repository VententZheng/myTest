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
<link href="/thinkphp3.2.3/Public/Home/css/information.css" rel="stylesheet">

<style type="text/css">
    #inforhover{
        color: white;
        background:rgba(45,186,223,1.0);
        border-radius: 3px;
        padding: 2px 4px 2px 4px;
    }
    #inforhover:hover{
        background:rgba(20,160,198,1.0);
        color: white;
    }
</style>


    <!--  --------------页面内容----------------  -->
    <div class="container">
        <div class="row">
            <div class="infor-top col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- 综艺资讯分类 -->
                <dl class="infor-type col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <dt>资讯类型：</dt>
                    <?php if($block_id == 0): ?><dd><a href="<?php echo U('Information/index');?>" id="inforhover">全部</a></dd>
                    <?php else: ?>
                    <dd><a href="<?php echo U('Information/index');?>">全部</a></dd><?php endif; ?>

                    <?php if(is_array($block)): $i = 0; $__LIST__ = $block;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i; if($block_id == $block['id']): ?><dd><a href="<?php echo U('Information/index',array('blockid'=>$block['id']));?>" id="inforhover"><?php echo ($block["blockname"]); ?></a></dd>
                    <?php else: ?>
                    <dd><a href="<?php echo U('Information/index',array('blockid'=>$block['id']));?>"><?php echo ($block["blockname"]); ?></a></dd><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </dl>
                <!-- 综艺资讯搜索 -->
                <form action="<?php echo U('Information/search');?>" method="get">
                    <div class="infor-seach col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="input-group">
                            <input type="text" name="infor-search" placeholder="请输入新闻关键字" class="form-control">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--  新闻展示  -->
        <div class="row">
            <div class="infor-body col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="padding:0px;">

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$inforvo): $mod = ($i % 2 );++$i;?><div class="initem col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a class="in-img col-lg-2 col-md-2 col-sm-2 col-xs-12" href="#">
                            <img class="img-responsive  center-block" src="/thinkphp3.2.3/Public/information_img/<?php echo ($inforvo["news_img"]); ?>">
                        </a>
                        <div class="in-content col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <h4><a href="<?php echo U('Information/detail',array('id'=>$inforvo['id']));?>"><?php echo ($inforvo["news_title"]); ?></a></h4>
                            <p class="in-summary"><?php echo ($inforvo["news_summary"]); ?></p>
                            <p class="in-uc"><i class="fa fa-user">&nbsp;<?php echo ($inforvo["news_visit"]); ?></i><i class="fa fa-clock-o">&nbsp;<?php echo (date("Y年m月d日 H:i:s",$inforvo["news_time"])); ?></i><a href="#">更多</a></p>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- 分页 -->
                    <div class="infor-page paginList" style="padding: 20px 0px 0px 0px;margin: 20px 0px 0px 0px;"><?php echo ($page); ?>
                    </div>
                    
                </div>
                <!--   排行榜 -->
                <div class="the-charts col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <!-- 24小时榜 -->
                <dl class="tchat col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <dt><h4>24小时热门榜</h4></dt>
                    <?php if(is_array($hot_day)): $i = 0; $__LIST__ = $hot_day;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hday): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('Information/detail',array('id'=>$hday['id']));?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-angle-right"></i> <?php echo ($hday["news_title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>
                <!-- 权威名人榜 -->
                <dl class="famous-person">
                    <dt><h4>权威名人周榜</h4></dt>
                    <?php if(is_array($hot_week)): $i = 0; $__LIST__ = $hot_week;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hweek): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('Information/detail',array('id'=>$hweek['id']));?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-angle-right"></i> <?php echo ($hweek["news_title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>
                </div>

            </div>
        </div>
    </div>


    <!-- JavaScript   -->
    <!-- 导航栏点击变颜色 -->
    <script type="text/javascript">
        $("#information").addClass('homepage');
    </script>
    <script type="text/javascript">       
        $(function(){
        });
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