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



            <!--   我的消息  -->
            <div class="mymessage col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <div class="mymessage-title">
                    <h3>我的消息</h3>
                </div>
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#inform" data-toggle="tab"><i class="glyphicon glyphicon-bullhorn"></i>&nbsp;通知</a></li>
                    <li>
                        <a href="#privateLetter" data-toggle="tab">
                            <i class="fa fa-envelope-o"></i>&nbsp;私信</a>
                    </li>
                    <!-- <li><a href="#comment" data-toggle="tab"><i class="glyphicon glyphicon-comment"></i>&nbsp;评论</a></li> -->
                </ul>

                <div id="myTabContent" class="tab-content">
                <!-- 通知 -->
                    <div class="tab-pane fade in active" id="inform">
                    
                       <dl class="col-lg-12 col-md-12">

                        <?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dd class="col-lg-12 col-md-12 message_<?php echo ($v["id"]); ?>">
                                <span class="letcontent col-lg-7 col-md-7"><?php echo ($v["content"]); ?></span>
                                <a  onclick="set_message('<?php echo ($v["id"]); ?>')" class="col-lg-1 col-md-1">知道了</a>
                            </dd><?php endforeach; endif; else: echo "" ;endif; ?>
                        </dl>
                        </div>
                    
                    <!-- 私信 -->
                    <div class="tab-pane fade" id="privateLetter">
                        <dl class="col-lg-12 col-md-12">

                        <?php if(is_array($letter_data)): $i = 0; $__LIST__ = $letter_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$levo): $mod = ($i % 2 );++$i;?><dd class="col-lg-12 col-md-12 privateletter_<?php echo ($levo["id"]); ?>">
                                <span class="letcontent col-lg-7 col-md-7"><?php echo ($levo["lettercontent"]); ?></span>
                                <span class="lettime col-lg-3 col-md-3"><?php echo (date("Y年m月d日 H:i:s",$levo["letter_time"])); ?></span>
                                <a  onclick="set_privateletter('<?php echo ($levo["id"]); ?>')" class="col-lg-2 col-md-2">知道了</a>
                                
                            </dd><?php endforeach; endif; else: echo "" ;endif; ?>
                        </dl>
                    </div>
                    <!-- 评论 -->
                    <div class="tab-pane fade" id="comment">
                        <form class="form-horizontal" role="form">
                            评论
                        </form>
                    </div>
                </div>
            </div>

    <!-- JavaScript   -->
    <!--  点击保存  -->
    <script>
        $('.update-nikename').click(function () {
            $('#nickname').attr("readonly", "readonly"); //设置为只读状态
            $('.updatenick-btn').trigger('click');
        });
    </script>
    <!-- 侧边导航点击变颜色 -->
    <script type="text/javascript">
        $("#mymessage").addClass('centerhome');
    </script>
    <!-- 点击查看私信 -->
    <script type="text/javascript">
        $('#checkLet').click(function(){
            var letterid = $('.letter<?php echo ($levo["id"]); ?>').text();
            alert(letterid);
            // $.post(
            //     '<?php echo U("User/checkLetter");?>',
            //     {}
            //     )
        })
    </script>

    <script>
        function set_message(element){
           $.ajax({
               url:'<?php echo U('User/set_message');?>',
               type:'post',
               dataType:'json',
               data:{"id":element},
               success:function(data){
                  if(data>=1){
                    $('.message_'+element).attr('style','display:none');
                  }
                }
            }); 
            }

    </script>
    <script>
           function set_privateletter(element){
           $.ajax({
               url:'<?php echo U('User/set_privateletter');?>',
               type:'post',
               dataType:'json',
               data:{"id":element},
               success:function(data){
                  if(data>=1){
                    $('.privateletter_'+element).attr('style','display:none');
                  }
                }
            }); 
            }        
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