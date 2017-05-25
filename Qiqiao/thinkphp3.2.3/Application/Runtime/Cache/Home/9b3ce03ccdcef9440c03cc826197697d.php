<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
<link href="/thinkphp3.2.3/Public/Home/css/information.css" rel="stylesheet">
<!-- 综艺资讯详细内容页面 -->
<div class="container news">
    <!-- -------综艺资讯头部---------- -->
    <div class="row">
        <div class="new-title col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-8 col-xs-offset-1">
            <h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo ($data["news_title"]); ?></h1>

            <div class="new-infor col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <ul>
                    <li><i class="fa fa-clock-o"> &nbsp;<?php echo ($data["news_time"]); ?></i></li>
                    <li><span>来源：</span><a href="<?php echo U('Information/index');?>"><?php echo ($data["news_source"]); ?></a></li>
                </ul>
            </div>
            <!-- <div class="new-share col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <ul>
                    <li><a href="#"><i class="fa fa-qq" title="QQ分享"></i></a></li>
                    <li><a href="#"><i class="fa fa-wechat" title="微信分享"></i></a></li>
                    <li><a href="#"><i class="fa fa-weibo" title="微博分享"></i></a></li>
                </ul>
            </div> -->
        </div>
    </div>

    <!-- ----综艺资讯详细内容--------- -->
    <div class="row">
        <div class="new-content  col-lg-10 col-md-10 col-sm-10 col-xs-10">
             <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10" style="text-align:justify; white-space:pre-wrap;"><?php echo (html_entity_decode($data["news_content"])); ?>
             </div>
        </div>
        <div class="new-source col-lg-11 col-md-11 col-sm-11 col-xs-11">
            <ul class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <li><i><img src="/thinkphp3.2.3/Public/Home/image/source.png"></i><span> <?php echo ($data["news_source"]); ?></span></li>
                <li><span>责任编辑：<?php echo ($data["author"]); ?></span></li>
            </ul>
        </div>
    </div>

    <!-- 分割线 -->
    <div class="row">
        <hr class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-8 col-xs-offset-1" style="height:3px;border:none;border-top:2px solid rgba(55,55,55,0.5);"/>
    </div>

    <!-- -------综艺资讯评论---------- -->
    <div class="row">
        <div class="news-comment col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-8 col-xs-offset-1">
            <!--  发表评论区begin -->
            <div class="report-comment">
                <?php if($commoninfo["id"] == 0): ?><div class="cominfor">
                        <span>请登录后发表评论</span>
                    </div>
                    <?php else: ?>
                    <div class="cominfor">
                        <img src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($commoninfo["head_pic"]); ?>">
                        <span><?php echo ($commoninfo["username"]); ?>：</span>
                        <span class="total-com">总 <?php echo ($totalcom); ?>条</span>
                    </div><?php endif; ?>
                <form action="<?php echo U('Information/addComment');?>" method="post" role="form">
                    <div class="input-group">
                        <!-- 用户id -->
                        <input type="hidden" class="input-group" name="userid" value="<?php echo ($commoninfo["id"]); ?>">
                    </div>
                    <!-- 上级评论id -->
                    <div class="input-group">
                        <input type="hidden" class=" input-group" placeholder="" name="pid" value="0">
                    </div>
                    <!-- 资讯id -->
                    <div class="input-group">
                        <input type="hidden" name="inforid" value="<?php echo ($data["id"]); ?>">
                    </div>

                    <?php if($commoninfo["id"] == 0): ?><div class="input-group combtn">
                            <textarea class="form-control comment" id="content-text" name="comment" rows="3" placeholder="请登陆后输入评论内容"></textarea>
                            <span class="input-group-btn">
                            <button class="btn btn-default submit-btn" type="submit" style="height:74px;"><p><i class="fa fa-edit"></i></p><span>登录并发表评论</span></button>
                            </span>
                        </div>
                        <?php else: ?>
                        <div class="input-group combtn">
                            <textarea class="form-control comment" id="content-text" name="comment" rows="3" placeholder="请输入评论内容"></textarea>
                            <span class="input-group-btn">
                            <button class="btn btn-default submit-btn" type="submit" style="height:74px;"><p><i class="fa fa-edit"></i></p><span>马上发表</span></button>
                            </span>
                        </div>
                        <p id="error-promt">您是不是忘了说点什么？</p><?php endif; ?>
                </form>
            </div>
        </div>
        </div>
    <!--  发表评论区end  -->

    <!--  评论列表显示区begin  -->
    <div class="row">
        <div class="comment-show col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-8 col-xs-offset-1">
            <h4>评论内容</h4>
            <?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["pid"]) == "0"): ?><hr class="phr col-lg-12" style="height: 1px;border:none;border-top:1px solid rgba(55,55,55,0.2);" />
                    <?php else: ?>
                    <hr class="chr col-lg-12" style="height: 1px;border:none;border-top:1px dashed rgba(55,55,55,0.2);" /><?php endif; ?>
            <div class="comment-list col-lg-12" style="padding-left:<?php echo ($vo['level']-1); ?>cm">
                    <!-- 第二个父元素parent().parent() -->
                <div class="compic col-lg-1">
                    <img src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($vo["headPic"]); ?>">
                </div>
                <div class="comcontent col-lg-11">
                        <!-- 第一个父元素parent() -->
                    <div class="user"><?php echo ($vo["uname"]); ?></div>
                    <div class="hftime" id="comtime"><?php echo ($vo["com_time"]); ?></div>
                    <div class="content"><?php echo ($vo["com_content"]); ?></div>
                    <div class="hf" id="<?php echo ($vo["id"]); ?>">回复</div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <!-- 评论列表显示区end -->

</div>


<!-- JavaScript   -->
    <!-- 导航栏点击变颜色 -->
    <script type="text/javascript">
        $("#information").addClass('homepage');
    </script>

    <!-- 评论 -->

    <script type="text/javascript">
        $(function() {
            $(".hf").click(//点击回复按钮事件
                    function(e) {
                        var $this = $(this);
                        if ($this.parent().parent().next().hasClass('hftext')) {
                            $this.parent().parent().next().remove();
                        } else {
                            $this.parent().parent().after('<div class="hftext"><form action="/thinkphp3.2.3/index.php/Home/Information/addComment" method="post" role="form"><div class="input-group"><input name="article_id" type="hidden" value="<?php echo ($Article["id"]); ?>" /></div><div class="input-group"><input name="article_id" type="hidden" value="<?php echo ($Article["id"]); ?>" /></div><div class="input-group"><input id="pid" type="hidden" name="pid" value="<?php echo ($vo["id"]); ?>" /></div><div class="input-group"><input type="hidden" name="inforid" value="<?php echo ($data["id"]); ?>"></div><div class="input-group"><input type="hidden" class="input-group" placeholder="用户id" name="userid" value="<?php echo ($commoninfo["id"]); ?>"></div><?php if($commoninfo["id"] == 0): ?><div class="input-group combtn"> <textarea class="form-control comment" id="content-text2" name="comment" rows="3" placeholder="请登陆后输入评论内容"></textarea><span class="input-group-btn"><button class="btn btn-default submit-btn" type="submit" style="height:74px;"><p><i class="fa fa-edit"></i></p><span>登录并发表评论</span></button></span></div><?php else: ?><div class="input-group combtn"><textarea class="form-control comment" id="content-text2" name="comment" rows="3" placeholder="请输入评论内容"></textarea><span class="input-group-btn"><button class="btn btn-default submit-btn" type="submit" style="height:74px;"><p><i class="fa fa-edit"></i></p><span>马上发表</span></button></span></div><p id="error-promtc">您是不是忘了说点什么？</p><?php endif; ?></form></div>');
                            var v_id = $(e.target).attr('id');//获取元素id;
                            $("#pid").val(v_id);
                        }

                        $(".submit-btn").click(function() {
                            var $this = $(this);
                            var content = $('#content-text2').val();
                            if (content == "") {
                                // alert("评论内容不能为空哦");
                                $('#error-promtc').slideDown().show().fadeOut(5000);
                                return false;
                            }
                        });
                        
                    });
            $(".submit-btn").click(function() {
                var $this = $(this);
                var content = $('#content-text').val();
                if (content == "") {
                    $('#error-promt').slideDown().show().fadeOut(5000);
                    return false;
                }
            });
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