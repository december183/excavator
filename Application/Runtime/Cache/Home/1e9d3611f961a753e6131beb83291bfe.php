<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="/excavator/Public/Home/css/entry.css"  rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/excavator/Public/Home/js/jquery.min.js"></script>
    <script type="text/javascript" src="/excavator/Public/Home/js/jquery.form.js"></script>
    <script type="text/javascript" src="/excavator/Public/Home/js/login/index.js"></script>
    <title>用户登录</title>
</head>
<body>
<header>
    <a href="javascript:window.history.go(-1);"><div class="back"><img src="/excavator/Public/Home/images/2149945922266881.png"/></div></a>
    <a href="/excavator/index.php?s=/Home/Login/index"><div class="entry">登录</div></a>
    <a href="/excavator/index.php?s=/Home/Register/index"><div class="register">注册</div></a>
</header>
<hr style="width:100%; margin-top:25px;"/>
<form id="ajaxForm" action="/excavator/index.php?s=/Home/Login/index">
    <div id="tel">
        <img src="/excavator/Public/Home/images/163916173454885191.png"/>
        <input name="phone" type="text" value="请输入手机号" class="tel" onfocus="if (value =='请输入手机号'){value =''}"onblur="if (value ==''){value='请输入手机号'}">
    </div>
    <hr style="width:100%; margin-top:15px;"/>
    <div id="validate">
        <img src="/excavator/Public/Home/images/10338649259175399.png"/>
        <input name="pass" type="password" placeholder="请输入密码" class="tel2" onfocus="if (placeholder =='请输入密码'){placeholder =''}"onblur="if (placeholder ==''){placeholder='请输入密码'}"/>
    </div>
    <hr style="width:100%; margin-top:15px;"/>
    <div class="into"><input type="submit" value="登录" ></div>
</form>
<div style="margin-top:-50px;">
    <hr style="width:100%; margin-top:220px; height:2px; background:#ccc;"/>
    <div class="into2">第三方快捷登录</div>
</div>
<div id="other">
    <div class="weixin"><div class="weixin2"><img src="/excavator/Public/Home/images/85786179558532214.png"/><span>微信登录</span></div></div>
    <div class="QQ"><div class="QQ2"><img src="/excavator/Public/Home/images/447365112150777903.png"/><span>QQ登录</span></div></div>
</div>
</body>

</html>