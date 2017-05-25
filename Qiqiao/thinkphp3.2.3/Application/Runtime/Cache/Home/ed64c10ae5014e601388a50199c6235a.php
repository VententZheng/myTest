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
<link href="/thinkphp3.2.3/Public/Home/css/video.css" rel="stylesheet">
<link href="/thinkphp3.2.3/Public/css/video-js.min.css" rel="stylesheet">
<script src="/thinkphp3.2.3/Public/js/video.min.js"></script>
<script src="/thinkphp3.2.3/Public/js/videojs-contrib-hls.js"></script>

<style>
.dropdown-menu>li>a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #fff;
    white-space: nowrap;
}



</style>
    <div id="DivLocker"></div>
    <div class="video-cont">
        <div class="container">


            <!-- ----视频标题--------- -->
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
                <div class="player-title col-lg-7 col-md-7 col-sm-6 col-xs-12" style="padding-left:0px;">
                    <h3><span style="color: rgba(247,132,17,1.0)">[<?php echo ($videotype); ?>]</span><?php echo ($Vdata["video_title"]); ?></h3></div>
                <div class="player-share col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <ul style="margin:0px;">
                        <li id="praise"><a href="javascript:void(0)"><i class="fa fa-thumbs-up" title="点赞"><!--<span class="badge"></span>--></i></a></li>
                        <li id="collection"><a href="javascript:void(0);"><i class="fa fa-folder-open" title="点击收藏"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-qq" title="QQ分享"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-wechat" title="微信分享"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-weibo" title="微博分享"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- -----视频播放------- -->
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="background:white; padding:0px; position:relative;">
                    <!--video class="video-player col-lg-10" controls>
                        <source src="/thinkphp3.2.3/Public/Home<?php echo ($Vdata["video_route"]); ?>" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg"> 您的浏览器不支持 HTML5 video 标签。
                    </video-->

                     <video id="example-video"   class="video-player col-lg-12 col-md-12 col-sm-12 col-xs-12 video-js vjs-default-skin" controls>
                                            <source src="<?php echo U('variety/play');?>/<?php echo ($video); ?>" type="application/x-mpegURL" >
                    </video>

                    <form id='form' action='<?php echo U("variety/player");?>' method='post'>
                      <input name='type' id='type' type='hidden' value='' />
                      <input name='other' id='other' type='hidden' value='' />  
                      <input name='id'   id='id' type='hidden' value='<?php echo ($id); ?>' />
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="player-author col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="player-people col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($Vdata["head_pic"]); ?>">
                            <div class="player-user">
                                <a class="player-username" href="javascript:void(0)"><?php echo ($Vdata["username"]); ?></a>
                                <br>
                                <a href="javascript:void(0)" id="private-letter"><span class="private-letter"><i class="fa fa-envelope"></i> 私信</span></a>
                            </div>
                            <span id="letter_succ" style="display: inline-block;font-size: 16px;color: red"></span>
                        </div>
                        <div class="player-content col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <p><b> 综艺内容：</b><?php echo ($Vdata["video_summary"]); ?></p>
                        </div>
                    </div>
                    <!-- 私信 -->
                    <div class="Pletter" id="Pletter">
                        <form>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 P-letter">
                            <div class="input-group">
                                <textarea class="form-control" rows="2" placeholder="@<?php echo ($Vdata["username"]); ?>：" required="required"></textarea>
                                <span class="input-group-btn">
                                    <button class="btn btn-default send" type="button" id="send_letter" style="height: 55px;">发送</button>
                                </span>
                            </div>
                            </div>
                        </form>
                        <p id="letter_prompt" style="font-size: 16px;float: right;margin: 4px 20px 0px 0px;"></p>
                    </div>
                </div>
            </div>


                <!-- 综艺节目评论 -->
    <div class="row">
        <div class="player-comment col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <div class="news-comment">
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
                    <form action="<?php echo U('Variety/addComment');?>" method="post" role="form">
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
                            <input type="hidden" name="inforid" value="<?php echo ($videId); ?>">
                        </div>

                        <?php if($commoninfo["id"] == 0): ?><div class="input-group combtn">
                                <textarea class="form-control comment" id="content-text" name="comment" rows="3" placeholder="请登陆后输入评论内容"></textarea>
                                <span class="input-group-btn">
                            <button class="btn btn-default submit-btn" id="logincom" type="submit" style="height:74px;"><p><i class="fa fa-edit"></i></p><span>登录并发表评论</span></button>
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
        </div>

        <!--   -----评论内容显示---- -->
        <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 comment-show">
            <h4>评论内容</h4>
            <?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["pid"]) == "0"): ?><hr class="phr col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 1px;border:none;border-top:1px solid rgba(55,55,55,0.2);" />
                    <?php else: ?>
                    <hr class="chr col-lg-12" style="height: 1px;border:none;border-top:1px dashed rgba(55,55,55,0.2);" /><?php endif; ?>
                <div class="comment-list col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:<?php echo ($vo['level']-1); ?>cm">
                    <!-- 第二个父元素parent().parent() -->
                    <div class="compic col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <img src="/thinkphp3.2.3/Public/Home/image/user_img/<?php echo ($vo["headPic"]); ?>">
                    </div>
                    <div class="comcontent col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <!-- 第一个父元素parent() -->
                        <div class="user"><?php echo ($vo["uname"]); ?></div>
                        <div class="hftime" id="comtime"><?php echo ($vo["com_time"]); ?></div>
                        <div class="content"><?php echo ($vo["com_content"]); ?></div>
                        <div class="hf" id="<?php echo ($vo["id"]); ?>">回复</div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

    <div class="row">
    <div class="copyright-infor col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <p>版权归作者所有，没有作者本人的书面许可任何人不得转载或使用整体或任何部分的内容。</p>
        </div>
        </div>

    </div>
    </div>

    <!-- JavaScript   -->
    <script type="text/javascript">
        
    </script>


    <script type="text/javascript">
    /*
    var player = videojs('example-video');
    player.play();
    */

      /*$('#DivLocker').css({
        "position": "absolute",
        "margin-left": "1px",
        "margin-top": "1px",
        "background-color": "#000000",
        "height": function () { return $(document).height(); },
        "filter": "alpha(opacity=30)",
        "opacity": "0.3",
        "overflow": "hidden",
        "width": function () { return $(document).width(); },
        "z-index": "999"
    });*/





        //播放器实例
        var player = videojs('example-video',{

          "controls": true,
          "autoplay": false,
          "preload": "auto",
          "loop": false,
          controlBar: {
            volumeMenuButton: {
            inline: false,
            vertical: true
            },//竖着的音量条
          }
        });


        player.currentTime(<?php echo ($time); ?>);

        
        function playerInitVideo() {
            videoPanelMenu = $(".vjs-fullscreen-control");
            str='<div class="dropup" style="position:relative;"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:5px;">清晰度</button><ul class="dropdown-menu" aria-labelledby="dropdownMenu2" position:absolute;z-index:99; style="min-width:70px;background:white; color:red;"><?php echo ($num); ?></ul></div>';
            videoPanelMenu.before(''+ ''+ ''+ str);
            $('li').click(function(){
              time=parseInt(player.currentTime());
              if($(this).children('a').text()=='全高清'){
                $("#type").val('2');
                $("#other").val(time);
                $("#form").submit();
              }

              if($(this).children('a').text()=='高清'){
                $("#type").val('1');
                $("#other").val(time);
                $("#form").submit();
              }

              if($(this).children('a').text()=='标清'){
                $("#type").val('0');
                $("#other").val(time);
                $("#form").submit();
              }

            })
        }
        //加载页面进行播放器初始化
        //
        player.ready(function() {playerInitVideo()});

       // player.enterFullScreen();
       // 
       // 
       player.on('pause',function(){
           time = player.currentTime();
           id=$('#id').val();
           if(id==''){
           }
           else{
           $.ajax({
               url:'<?php echo U('Handle/action_pause');?>',
               type:'post',
               dataType:'json',
               data:{"time":time,"id":id},
               success:function(data){
                    console.log(data);

                }
            });
           }
       });



       player.on('play',function(){
           time = player.currentTime();
           id=$('#id').val();
           if(id==''){

           }
           else{
           $.ajax({
               url:'<?php echo U('Handle/action_start');?>',
               type:'post',
               dataType:'json',
               data:{"time":time,"id":id},
               success:function(data){

                    console.log(data);
                }
            });
        }
       });


       player.on('enterFullScreen',function(){
        console.log('1111');
       });

        
        /*
        setsrc(player,"rtmp://192.168.30.21/live/test3","rtmp/flv");});
        //通过id获取DOM
        function get(index) {return document.getElementById(index);}
        //修改播放地址并播放
        function writeAddressAndPlay(index,url,type) {
        播放器操作setsrc(index, url, type?type:"rtmp/flv");play(index);}
        //高清标清切换就是应用名加减HD
        function changeUrl(video) {
            var index = $(video).text();
        //获取当前播放的url
        var CurrentUrl = getCurrentAddr(player);$(".vjs-menu-item").removeClass("vjs-selected");$(video).addClass("vjs-selected");if (index == "高清") {if (CurrentUrl.indexOf("HD") == -1) {CurrentUrl = CurrentUrl + "HD";} else {return;}} else {if (CurrentUrl.indexOf("HD") != -1) {CurrentUrl = CurrentUrl.replace("HD", "");} else {return;}}
        //修改地址并播放
        writeAddressAndPlay(player, CurrentUrl);}
        */

        /*function playPause() {
            if (myVideo.paused)
                myVideo.play();
            else
                myVideo.pause();
        }

        function makeBig() {
            myVideo.width = 560;
        }

        function makeSmall() {
            myVideo.width = 320;
        }

        function makeNormal() {
            myVideo.width = 420;
        }
        */
    </script>

    <!-- 导航栏点击变颜色 -->
    <script type="text/javascript">
        $("#variety").addClass('homepage');
    </script>

    <!-- 使用toggle()函数 -->
    <script src="/thinkphp3.2.3/Public/Home/js/jquery.min-1.7.2.js"></script> 
    <!-- 显示点赞和收藏 -->
    <script type="text/javascript">
        $vid = '<?php echo ($videId); ?>';
        $.get('<?php echo U("Variety/checkUpdate");?>',{videoId:$vid},function(data){
            console.log(data);
        //如果用户已收藏改变图标颜色
        if(data.favorite>0){
            $('.fa-folder-open').css('color','rgba(239,179,18,1.0)');
            $('.fa-folder-open').css('border-color','rgba(239,179,18,1.0)');
                }
        //如果用户已点赞改变图标颜色
        if(data.fabulous>0){
            $('.fa-thumbs-up').css('color','rgba(37,187,76,1.0)');
            $('.fa-thumbs-up').css('border-color','rgba(37,187,76,1.0)');
            $('.fa-thumbs-up span').css('color','rgba(37,187,76,1.0)');   
                }

    },'json');
    </script>

    <!-- 点击收藏按钮 -->
    <script type="text/javascript">
        $vid = '<?php echo ($videId); ?>';
        $('#collection').toggle(function(){
            $.get('<?php echo U("Variety/addCollection");?>',{videoId:$vid},function(data){console.log(data);
                if(data.uid){
                    $('.fa-folder-open').css('color','rgba(239,179,18,1.0)');
                    $('.fa-folder-open').css('border-color','rgba(239,179,18,1.0)');
                    $('.fa-folder-open').attr('title','已收藏，再次点击取消收藏');
                }else{
                    alert('请先登录');
                }
            },'json');
        },function(){
            $.get('<?php echo U("Variety/delCollection");?>',{videoId:$vid});
                    $('.fa-folder-open').css('color','rgba(55,55,55,0.7)');
                    $('.fa-folder-open').css('border-color','rgba(55,55,55,0.7)');
                    $('.fa-folder-open').attr('title','点击收藏');
                });
    </script>
    
    <!-- 点击点赞按钮 -->
    <script type="text/javascript">
        $vid = '<?php echo ($videId); ?>';
        $('#praise').toggle(function(){
            //点赞+1
            $.get('<?php echo U("Variety/updataPraise");?>',{videoId:$vid},function(data){
            $('.fa-thumbs-up span').html(data.praise);
            },'json');
            //点赞样式变化
            $.get('<?php echo U("Variety/addPraise");?>',{videoId:$vid},function(data){console.log(data);
            if(data.uid){
            $('.fa-thumbs-up').css('color','rgba(37,187,76,1.0)');
            $('.fa-thumbs-up').css('border-color','rgba(37,187,76,1.0)');
            $('.fa-thumbs-up span').css('color','rgba(37,187,76,1.0)');
            $('.fa-thumbs-up').attr('title','已点赞，再次点击取消');
           }else{
              alert('请先登录');
             }
            },'json');
        },function(){
            //取消点赞—1
            $.get('<?php echo U("Variety/updataPraise");?>',{videoId:$vid},function(data){
            $('.fa-thumbs-up span').html(data.praise);
            },'json');
            //取消点赞样式变化
            $.get('<?php echo U("Variety/delPraise");?>',{videoId:$vid},function(data){console.log(data);
            if(data.uid){
                $('.fa-thumbs-up').css('color','rgba(55,55,55,0.7)');
                $('.fa-thumbs-up').css('border-color','rgba(55,55,55,0.7)');
                $('.fa-thumbs-up span').css('color','rgba(55,55,55,0.7)');
                $('.fa-thumbs-up').attr('title','点赞');
            }else{
                alert('请先登录');
            }
            },'json');
        });
    </script>
    <!-- 显示点赞总数 -->
    <script type="text/javascript">
        $vid = '<?php echo ($videId); ?>';
        $.get('<?php echo U("Variety/updataPraise");?>',{videoId:$vid},function(data){
            $('.fa-thumbs-up span').html(data.praise);
            },'json');
    </script>

    <!-- 私信输入框显示和隐藏 -->
    <script type="text/javascript">
    // 私信发送框隐藏和显示
    $('#private-letter').click(function () {
        $comid = '<?php echo ($commoninfo["id"]); ?>';
        if(!$comid){
            alert('请先登录');
            return false;
        }
           $('#Pletter').slideToggle(300);       
        }); 

    // 发送私信
    $('#send_letter').click(function(){
        var Lcontent = $('.P-letter textarea').val();
        if(!Lcontent){
            $('#letter_prompt').css('color','red');
            $('#letter_prompt').html("私信内容不能为空哦!");
            return false;
        }
        var video_uid = '<?php echo ($Vdata["id"]); ?>';
        $.post(
            '<?php echo U("Variety/addLetter");?>',{letter_content:Lcontent,video_uid:video_uid},function(data){
                if(data){
                    $('#Pletter').slideUp("speed");
                    $('#letter_succ').html("私信发送成功").fadeOut(5000);
                }
            },'json');
    })
    </script>

    <!-- 未登录评论提示 -->
    <script type="text/javascript">
        $('#logincom').click(function(){
            $logid = '<?php echo ($commoninfo["id"]); ?>';
            if(!$logid){
                alert('登录后发表评论');
            }
        });

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
                            $this.parent().parent().after('<div class="hftext"><form action="/thinkphp3.2.3/index.php/Home/Variety/addComment" method="post" role="form"><div class="input-group"><input name="article_id" type="hidden" value="<?php echo ($Article["id"]); ?>" /></div><div class="input-group"><input name="article_id" type="hidden" value="<?php echo ($Article["id"]); ?>" /></div><div class="input-group"><input id="pid" type="hidden" name="pid" value="<?php echo ($vo["id"]); ?>" /></div><div class="input-group"><input type="hidden" name="inforid" value="<?php echo ($videId); ?>" placeholder="视频id"></div><div class="input-group"><input type="hidden" class="input-group" placeholder="用户id" name="userid" value="<?php echo ($commoninfo["id"]); ?>"></div><?php if($commoninfo["id"] == 0): ?><div class="input-group combtn"> <textarea class="form-control comment" id="content-text2" name="comment" rows="3" placeholder="请登陆后输入评论内容"></textarea><span class="input-group-btn"><button class="btn btn-default submit-btn" type="submit" style="height:74px;"><p><i class="fa fa-edit"></i></p><span>登录并发表评论</span></button></span></div><?php else: ?><div class="input-group combtn"><textarea class="form-control comment" id="content-text2" name="comment" rows="3" placeholder="请输入评论内容"></textarea><span class="input-group-btn"><button class="btn btn-default submit-btn" type="submit" style="height:74px;"><p><i class="fa fa-edit"></i></p><span>马上发表</span></button></span></div><p id="error-promtc">您是不是忘了说点什么？</p><?php endif; ?></form></div>');
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