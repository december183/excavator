<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
    <title>后台管理登录页面</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/excavator/Public/Admin/css/login.css" type="text/css" />
    <script src="/excavator/Public/Admin/js/jquery.min.js"></script>
    <script src="/excavator/Public/Admin/js/jquery.form.js"></script>
    <script src="/excavator/Public/Admin/js/login/check.js"></script>
</head>
<body>
<div class="box">
    <div class="login-box">
        <div class="login-title text-center">
            <h1><small>登录</small></h1>
        </div>
        <div class="login-content ">
            <div class="form">
                <form id="ajaxForm" action="/excavator/index.php?s=/Admin/Login/index">
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" id="username" name="username" class="form-control" placeholder="用户名">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12  ">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" id="password" name="userpass" class="form-control" placeholder="密码">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <input type="text" id="code" name="code" class="form-control" placeholder="验证码">
                        </div>
                        <div class="col-xs-6">
                            <img src="/excavator/index.php?s=/Admin/Login/verify" alt="验证码" class="col-xs-12" onclick="this.src='verify?id='+Math.random();" />
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-4 col-xs-offset-4 pad_top">
                            <button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-off"></span> 登录</button>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <div class="col-xs-6 link">
                            <p class="text-center remove-margin"><small>忘记密码？</small> <a href="javascript:void(0)" ><small>找回</small></a>
                            </p>
                        </div>
                        <div class="col-xs-6 link">
                            <p class="text-center remove-margin"><small>还没注册?</small> <a href="javascript:void(0)" ><small>注册</small></a>
                            </p>
                        </div>
                    </div>-->
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>