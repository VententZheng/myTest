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
<style>
    .item-type dl dd span:hover,.item-process dl dd span:hover, .item-sort dl dd span:hover {
    cursor:pointer;
    color: rgba(247,132,17,1.0);
    text-decoration: none;
    }

    .item-type dl dd span,.item-process dl dd span, .item-sort dl dd span {
    margin: 0px 0px 0px 0px;
    padding: 2px 4px 2px 4px;
    color: #333333;
    font-size: 16px;
    font-family: "微软雅黑";
   }

    #navdown span {
    background: rgba(45,186,223,1.0);
    /*color: rgba(255,255,255,1.0);*/
    color: white;
    border-radius: 4px;
    text-decoration: none;
}


</style>
    <!---------------内容----------------------  -->
    <div class="container">
        <div class="row">
            <!--    类型      -->
            <div id="top-classify" class="top-classify col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="item-project">

                    <li class="item-type">
                        <dl>
                            <dt>项目类型：</dt>

                            <?php if($video == 0): ?><dd id="navdown" class="navdown"><span onclick="run('video_id','0')" target='_self'>全部</span></dd>
                            <?php else: ?>
                            <dd><span target='_self' onclick="run('video_id','0')">全部</span></dd><?php endif; ?>
                            <?php if(is_array($video_block)): foreach($video_block as $key=>$v): if($video == $v['id']): ?><dd id="navdown" class="navdown"><span onclick="run('video_id','<?php echo ($v["id"]); ?>')" target='_self'><?php echo ($v["type"]); ?></span></dd>
                                <?php else: ?>
                                <dd><span  onclick="run('video_id','<?php echo ($v["id"]); ?>')" target='_self'><?php echo ($v["type"]); ?></span></dd><?php endif; endforeach; endif; ?>

                        </dl>
                    </li>

                    <li class="item-process">
                        <dl>
                            <dt>项目进程：</dt>
                            <?php if($type == 0): ?><dd id="navdown" class="navdown"><span target='_self' onclick="run('type_id','0')">全部</span></dd>
                            <?php else: ?>
                            <dd><span target='_self' onclick="run('type_id','0')">全部</span></dd><?php endif; ?>
                            <?php if(is_array($type_block)): foreach($type_block as $key=>$v): if($type == $v['id']): ?><dd id="navdown" class="navdown"><span  target='_self' onclick="run('type_id','<?php echo ($v["id"]); ?>')"><?php echo ($v["name"]); ?></span></dd>
                                <?php else: ?>
                                <dd><span target='_self' onclick="run('type_id','<?php echo ($v["id"]); ?>')"><?php echo ($v["name"]); ?></span></dd><?php endif; endforeach; endif; ?>
                        </dl>
                    </li>
                    <li class="item-sort">
                        <dl>
                            <dt>项目排序：</dt>
                            <?php if($item == 0): ?><dd id="navdown" class="navdown"><span href="" target='_self' onclick="run('item_id',0)">全部</span></dd>
                            <?php else: ?>
                            <dd><span target='_self' onclick="run('item_id',0)">全部</span></dd><?php endif; ?>
                            <?php if($item == 2): ?><dd id="navdown" class="navdown"><span onclick="run('item_id',2)">最新上线</span></dd>
                            <?php else: ?>
                            <dd><span onclick="run('item_id',2)">最新上线</span></dd><?php endif; ?>
                            <?php if($item == 1): ?><dd id="navdown" class="navdown"><span onclick="run('item_id',1)">支持人数</span></dd>
                            <?php else: ?>
                            <dd><span onclick="run('item_id',1)">支持人数</span></dd><?php endif; ?>
                        </dl>
                    </li>
                </ul>
            </div>
            <!--     节目孵化      -->
            <div class="program-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <li class="li-img col-lg-7 col-md-7 col-sm-12 col-xs-12">
                           <span><?php echo ($vo["plan_stage"]); ?></span>
                            <a href="javascript:void(0)"><img style="height:282px;" src="/thinkphp3.2.3/Public/Home/image/<?php echo ($vo["plan_cover"]); ?>"></a>
                        </li>
                        <li class="li-content col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <dl>
                                <dt><h3><a href="<?php echo U('Incubation/incubationDetail',array('id'=>$vo['id']));?>"><?php echo ($vo["plan_title"]); ?></a></h3></dt>
                                <dd>
                                    <ul class="tream-infor">
                                        <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($vo["head_pic"]); ?>" title="用户头像"></li>
                                        <li class="puser"><p><i class="fa fa-user"></i> &nbsp;<?php echo ($vo["username"]); ?></p></li>

                                        <?php if($vo["tid"] == 0): ?><li class="pteam"><p><i class="fa fa-users" style=""></i>&nbsp;团 队：<?php echo ($vo["team_name"]); ?></p></li>
                                        <?php else: ?>
                                        <li class="teamp"><a href="<?php echo U('Team/excellentTeam',array('id'=>$vo['tid']));?>"><p><i class="fa fa-users"></i>&nbsp;团 队：<?php echo ($vo["team_name"]); ?></p></a></li><?php endif; ?>
                                    
                                        <li class="ptype"><p><i class="fa fa-th-large"></i>&nbsp;类 型：<?php echo ($vo["plan_type"]); ?></p></li>
                                    </ul>
                                </dd>
                                <dd class="item-time col-lg-12 col-md-12 col-sm-12 col-xs-11"><i class="fa fa-clock-o"></i> &nbsp;<?php echo (date("Y-m-d",$vo["planup_time"])); ?></dd>
                                <dd class="item-detail col-lg-12 col-md-12 col-sm-12 col-xs-12"><a class="col-lg-10 col-md-10 col-sm-10 col-xs-12" href="<?php echo U('Incubation/incubationDetail',array('id'=>$vo['id']));?>">查看详情</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <!-- 分页 -->
                    <div class="infor-page paginList" style="padding: 20px 0px 0px 0px;margin: 20px 0px 0px 0px;"><?php echo ($page); ?>
                    </div>

            <span style='display:none;' id='type_id'><?php echo ($type); ?></span>
            <span style='display:none;' id='video_id'><?php echo ($video); ?></span>
            <span style='display:none;' id='item_id'><?php echo ($item); ?></span>

        </div>
    </div>

    <!-- JavaScript   --> 
    <script type="text/javascript">
        //点击背景变色
        $(function () {
            $(".item-type dl dd").click(function () {
                $(".item-type dl dd").eq($(this).index() - 1).addClass("navdown").siblings().removeClass("navdown");
            })
        })
        $(function () {
            $(".item-process dl dd").click(function () {
                $(".item-process dl dd").eq($(this).index() - 1).addClass("navdown").siblings().removeClass("navdown");
            })
        })
        $(function () {
            $(".item-sort dl dd").click(function () {
                $(".item-sort dl dd").eq($(this).index() - 1).addClass("navdown").siblings().removeClass("navdown");
            })
        })
    </script>

    <!-- 导航栏点击变颜色 -->
    <script type="text/javascript">
        $("#hatch").addClass('homepage');
    </script>

    <script type="text/javascript">
        function run(action,num){
            if(action=='video_id'){
                type_id=parseInt($("#type_id").text());
                item_id=parseInt($("#item_id").text());
                //console.log("<?php echo U('Incubation/index');?>/type_id/"+type_id+"/item_id/"+item_id+"/video_id/"+num);
                //return;
                window.location.href="<?php echo U('Incubation/index');?>/type_id/"+type_id+"/item_id/"+item_id+"/video_id/"+num;
            }
            if(action=='type_id'){
                video_id=parseInt($("#video_id").text());
                item_id=parseInt($("#item_id").text());
                //console.log("<?php echo U('Incubation/index');?>/type_id/"+num+"/item_id/"+item_id+"/video_id/"+video_id);
                //return;
                window.location.href="<?php echo U('Incubation/index');?>/type_id/"+num+"/item_id/"+item_id+"/video_id/"+video_id;

            }
            if(action=='item_id'){
                type_id=parseInt($("#type_id").text());
                video_id=parseInt($("#video_id").text());
                //console.log("<?php echo U('Incubation/index');?>/type_id/"+type_id+"/item_id/"+num+"/video_id/"+video_id);
                //return;
                window.location.href="<?php echo U('Incubation/index');?>/type_id/"+type_id+"/item_id/"+num+"/video_id/"+video_id;

            }
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