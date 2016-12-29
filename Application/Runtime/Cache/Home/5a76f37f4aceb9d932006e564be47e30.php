<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户注册</title>
    <link href="/excavator/Public/Home/css/entry.css"  rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/excavator/Public/Home/js/jquery.min.js"></script>
    <script type="text/javascript" src="/excavator/Public/Home/js/jquery.form.js"></script>
</head>
<body>
<header>
    <a href="javascript:window.history.go(-1);"><div class="back"><img src="/excavator/Public/Home/images/2149945922266881.png"/></div></a>
    <a href="/excavator/index.php?s=/Home/Register/index"><div class="entry">注册</div></a>
</header>
<div id="register">
    <form id="ajaxForm" action="/excavator/index.php?s=/Home/Register/index" >
        <div>
            <input id="tel" name="phone" type="text" placeholder="请输入手机号"/>
        </div>
        <div>
            <input id="pass" name="pass" type="password" placeholder="请输入密码"/>
        </div>
        <div>
            <input id="pass2" name="chkpass" type="password" placeholder="请确认密码"/>
        </div>
    </form> </div>
<div class="affirm"><input name="code"  value="" type="text" placeholder="验证码" class="affirm_name">
    <input type="button" value="获取验证码" id="identifying_code" /></div>
<div class="affirm2"><input type="submit" value="注册" /></div>
<div class="agree">
    <div style="margin-left:5%;"><label><input name="agree" type="checkbox" value="1" style="width:40px; height:40px; margin-right:10px;">同意</label><a href="#"><span>《用户协议》</span></a></div>
    <div style="float:right; margin-right:5%;">已有帐号请<a href="/excavator/index.php?s=/Home/Login/index"><span>登录</span></a></div>
</div>
<script type="text/javascript" src="/excavator/Public/Home/js/register/index.js"></script>
</body>
</html>