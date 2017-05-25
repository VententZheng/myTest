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
<link href="/thinkphp3.2.3/Public/Home/css/incubation.css" rel="stylesheet">

    <!--  详细的节目孵化内容展示  -->
    <div class="container">
        <div class="row">
            <div class="hatch col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- 节目孵化顶部begin -->
                <div class="hatch-head col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="hatch-title col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <li class="hatchtitle-left col-lg-6 col-md-6 col-sm-12col-xs-12">
                            <img src="/thinkphp3.2.3/Public/Home/image/<?php echo ($Idata["plan_cover"]); ?>">
                        </li>
                        <li class="hatchtitle-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <dl>
                                <dt><span><?php echo ($Idata["plan_title"]); ?></span><span class="love">
                                <a href="javascript:void(0)" id="praise"><i class="fa fa-thumbs-o-up" title="点赞"><!--span class="badge"></span--></i></a>
                                <a href="javascript:void(0);" id="collection"><i class="fa fa-heart-o" title="点击收藏"></i></a>
                                </span>
                                </dt>

                                <dd>
                                    <p><?php echo ($Idata["plan_summary"]); ?></p>
                                </dd>
                                <dd><span><i class="fa fa-history"  style="color:rgba(247,132,17,1.0)"></i>&nbsp;&nbsp;进度描述：</span><span>&nbsp;<?php echo ($Idata["plan_stage"]); ?></span></dd>
                                <dd><span><i class="fa fa-th-large"  style="color:rgba(247,132,17,1.0)"></i>&nbsp;节目类型：</span><span>&nbsp;&nbsp;<?php echo ($Idata["plan_type"]); ?></span></dd>
                                <dd><span><i class="fa fa-users"  style="color:rgba(247,132,17,1.0)"></i>&nbsp;核心团队：</span><span>&nbsp;&nbsp;<?php echo ($Idata["tid"]); ?></span></dd>
                                <dd><span><i class="fa fa-clock-o"  style="color:rgba(247,132,17,1.0)"></i>&nbsp;发起时间：</span><span>&nbsp;&nbsp;<?php echo (date("Y-m-d",$Idata["planup_time"])); ?></span></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <!-- 节目孵化顶部end  -->

                <!-- 节目孵化详细内容begin  -->
                <div class="hatch-footer col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hatch-content">
                        <span>节目概况</span>
                    </div>
                    <div class="hatch-introduction">
                        <dl class="hatch-summary">
                            <dt><i class="fa fa-file-text-o"  style="color:rgba(247,132,17,1.0)"></i>&nbsp;&nbsp;节目规则</dt>
                            <dd>
                                <p><?php echo (html_entity_decode($Idata["plan_rule"])); ?></p>
                            </dd>
                        </dl>
                        <dl class="hatch-advantage">
                            <dt><i class="fa fa-graduation-cap" style="color:rgba(247,132,17,1.0)"></i>&nbsp;&nbsp;节目亮点</dt>
                            <dd>
                                     <?php if(($num) > "0"): ?><p>亮点一: <?php echo ($array[0]); ?></p><?php endif; ?>
                                    <?php if(($num) > "1"): ?><p>亮点二: <?php echo ($array[1]); ?></p><?php endif; ?>
                                    <?php if(($num) > "2"): ?><p>亮点三: <?php echo ($array[2]); ?></p><?php endif; ?>
                                    <?php if(($num) > "3"): ?><p>亮点四: <?php echo ($array[3]); ?></p><?php endif; ?>
                                    <?php if(($num) > "4"): ?><p>亮点五: <?php echo ($array[4]); ?></p><?php endif; ?>
                                    <?php if(($num) > "5"): ?><p>亮点六: <?php echo ($array[5]); ?></p><?php endif; ?>
                                    <?php if(($num) > "6"): ?><p>亮点七: <?php echo ($array[6]); ?></p><?php endif; ?>
                                    <?php if(($num) > "7"): ?><p>亮点八: <?php echo ($array[7]); ?></p><?php endif; ?>
                            </dd>
                        </dl>
                        <dl class="hatch-schedule">
                            <dt><i class="fa fa-history" style="color:rgba(247,132,17,1.0)"></i>&nbsp;&nbsp;节目进度</dt>
                            <dd>
                                <span><?php echo ($Idata["plan_stage"]); ?></span>
                            </dd>
                        </dl>
                        <dl class="hatch-team">
                            <dt><i class="fa fa-users"  style="color:rgba(247,132,17,1.0)"></i>&nbsp;&nbsp;核心团队</dt>

                            <dd class="hatch-team-name"><h4><?php echo ($Idata["tid"]); ?></h4></dd>
                            <dd>

                                
                                <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul class="hatch-team-detail">
                                        <li><?php echo ($v["member_name"]); ?></li>
                                        <li><p><?php echo ($v["member_summary"]); ?></p></li>
                                    </ul><?php endforeach; endif; else: echo "" ;endif; ?>

                            </dd>



                        </dl>
                    </div>

                </div>
                <!-- 节目孵化详细内容begin  -->
            </div>
        </div>
    </div>
<!-- JavaScript -->
    <!-- 导航栏点击变颜色 -->
    <script type="text/javascript">
        $("#hatch").addClass('homepage');
    </script>

    <!-- 使用toggle()函数 -->
    <script src="/thinkphp3.2.3/Public/Home/js/jquery.min-1.7.2.js"></script> 
    <!-- 显示点赞和收藏图标 -->
    <script type="text/javascript">
        $pid = '<?php echo ($Idata["id"]); ?>';
        $.get('<?php echo U("Incubation/checkUpdate");?>',{planId:$pid},function(data){
            console.log(data);
        //如果用户已收藏改变图标颜色
        if(data.favorite>0){
            $('#collection i').attr('class','fa fa-heart');
            $('#collection i').css('color','rgba(255,0,0,1.0)');
                }
        //如果用户已点赞改变图标颜色
        if(data.fabulous>0){
            $('#praise i').attr('class','fa fa-thumbs-up');
            $('#praise i').css('color','rgba(37,187,16,1.0)');
            $('#praise i span').css('color','rgba(37,187,16,1.0)');   
                }

    },'json');
        
        $.get('<?php echo U("Incubation/updataPraise");?>',{planId:$pid},function(data){
            $('#praise i span').html(data.pnum);
            },'json');
    </script>

    <!-- 点击收藏按钮 -->
    <script type="text/javascript">
        $pid = '<?php echo ($Idata["id"]); ?>';
        $('#collection').toggle(function(){
            $.get('<?php echo U("Incubation/addCollection");?>',{planId:$pid},function(data){console.log(data);
                if(data.uid){
                    $('#collection i').attr('class','fa fa-heart');
                    $('#collection i').css('color','rgba(255,0,0,1.0)');
                    $('#collection i').attr('title','已收藏，再次点击取消收藏');
                }else{
                    alert('请先登录');
                }
            },'json');
        },function(){
            $.get('<?php echo U("Incubation/delCollection");?>',{planId:$pid});
                    $('#collection i').attr('class','fa fa-heart-o');
                    $('#collection i').css('color','rgba(45,186,223,1.0)');
                    $('#collection i').attr('title','点击收藏');
                });
    </script>
    
    <!-- 点击点赞按钮 -->
    <script type="text/javascript">
        $pid = '<?php echo ($Idata["id"]); ?>';
        $('#praise').toggle(function(){
            //点赞+1
            $.get('<?php echo U("Incubation/updataPraise");?>',{planId:$pid},function(data){
            $('#praise i span').html(data.pnum);
            },'json');
            //点赞样式变化
            $.get('<?php echo U("Incubation/addPraise");?>',{planId:$pid},function(data){console.log(data);
            if(data.uid){
                $('#praise i').attr('class','fa fa-thumbs-up');
                $('#praise i').css('color','rgba(37,187,76,1.0)');
                $('#praise i span').css('color','rgba(37,187,76,1.0)');
                $('#praise i').attr('title','已点赞，再次点击取消');
            }else{
              alert('请先登录');
             }
            },'json');
        },function(){
            //取消点赞—1
            $.get('<?php echo U("Incubation/updataPraise");?>',{planId:$pid},function(data){
            $('#praise i span').html(data.pnum);
            },'json');
            //取消点赞样式变化
            $.get('<?php echo U("Incubation/delPraise");?>',{planId:$pid},function(data){console.log(data);
            if(data.uid){
                $('#praise i').attr('class','fa fa-thumbs-o-up');
                $('#praise i').css('color','rgba(45,186,223,1.0)');
                $('#praise i span').css('color','rgba(45,186,223,1.0)');
                $('#praise i').attr('title','点赞');
            }else{
                alert('请先登录');
            }
            },'json');
        });
    </script>
    <!-- 显示点赞总数 -->
    <script type="text/javascript">
        $pid = '<?php echo ($Idata["id"]); ?>';
        $.get('<?php echo U("Incubation/updataPraise");?>',{planId:$pid},function(data){
            $('#praise i span').html(data.praise);
            },'json');
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