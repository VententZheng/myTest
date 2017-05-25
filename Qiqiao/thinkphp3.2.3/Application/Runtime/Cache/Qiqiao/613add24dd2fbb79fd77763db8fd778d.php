<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/png">
    <title>Login</title>
    <link href="/thinkphp3.2.3/Public/css/style.css" rel="stylesheet">
    <link href="/thinkphp3.2.3/Public/css/style-responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" method="post" action="<?php echo U('Public/login','','');?>">


        <div class="form-signin-heading text-center">
            <h1 class="sign-title">用户登录</h1>
            <img src="/thinkphp3.2.3/Public/img/login-logo.png" alt=""/>
        </div>


        <div class="login-wrap">
            <input type="text" name="username" class="form-control" placeholder="登录账号" autofocus>
            <input type="password" name="password" class="form-control" placeholder="登录密码">

            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
            <input type="text" name="passcode" placeholder="填写右侧的验证码" class="form-control">
            </div>

            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
            <img src="<?php echo U('Public/verifyImg',array());?>" class="passcode"/>
            </div>

            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>


            <div class="buildsystem">
                基于七巧网系统构建
            </div>

                         

        </div>

       
    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/thinkphp3.2.3/Public/js/jquery-3.0.0.min.js"></script>
<script src="/thinkphp3.2.3/Public/js/bootstrap.min.js"></script>
<script src="/thinkphp3.2.3/Public/js/modernizr.min.js"></script>

    <script type="text/javascript">
        <!-- 点击验证码刷新 -->
        $(function(){
            var verifyimg = $(".passcode").attr("src");
             $(".passcode").click(function(){
                        $(".passcode").attr("src", verifyimg+'/random'+Math.random());
              });
          });
    </script>

</body>
</html>