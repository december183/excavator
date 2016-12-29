<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title>首页</title>
    <link href="/excavator/Public/Home/css/beas.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/excavator/Public/Home/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/excavator/Public/Home/js/jquery.touchSlider.js"></script>
</head>
<body style="background:#fff;">
<header>
    <div id="user"><img src="/excavator/Public/Home/images/1.png"/></div>
    <div id="search"><input type="search" value="搜索商品" class="search" onfocus="if (value =='搜索商品'){value =''}"onblur="if (value ==''){value='搜索商品'}"/><img src="/excavator/Public/Home/images/2_06.png"/></div>
    <div class="city"><a href="#">添加城市</a></div>
</header>
<div class="main_visual">
    <div class="flicking_con">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
    </div>
    <div class="main_image">
        <ul>
            <li><img  src="/excavator/Public/Home/images/img_main_1.jpg"></li>
            <li><img  src="/excavator/Public/Home/images/img_main_2.jpg"></li>
            <li><img  src="/excavator/Public/Home/images/img_main_3.jpg"></li>
            <li><img  src="/excavator/Public/Home/images/img_main_4.jpg"></li>
            <li><img  src="/excavator/Public/Home/images/img_main_5.jpg"></li>
        </ul>
        <a href="javascript:;" id="btn_prev"></a>
        <a href="javascript:;" id="btn_next"></a>
    </div>
</div>
<div id="classify">
    <ul>
        <li><a><img src="/excavator/Public/Home/images/6.png"/><div>签到红包</div></a></li>
        <li><a><img src="/excavator/Public/Home/images/3.png"/><div>天天特卖</div></a></li>
        <li><a><img src="/excavator/Public/Home/images/4.png"/><div>推荐好货</div></a></li>
        <li><a><img src="/excavator/Public/Home/images/8.png"/><div>分类</div></a></li>
        <li><a><img src="/excavator/Public/Home/images/5.png"/><div>闪电砍价</div></a></li>
        <li><a><img src="/excavator/Public/Home/images/2.png"/><div>拼团</div></a></li>
        <li><a><img src="/excavator/Public/Home/images/9.png"/><div>积分商城</div></a></li>
        <li><a><img src="/excavator/Public/Home/images/10.png"/><div>常见问题</div></a></li>
    </ul>
</div>
<hr style="height:15px; background:#d3d3d3; width:100%; border:none;"/>
<div id="recommend">
    <div class="left">
        <div class="timename"><a style="color:#ef0000;" href="#">限时秒杀</a></div>
        <div class="time">
            <div class="dt">
                <span id="hour"></span>:
                <span id="munite"></span>:
                <span id="second"></span>
            </div>
            <!--设置限时秒杀结束块-->
            <div id="bot-box"></div>
        </div>
        <div id="seckill">
            <img src="/excavator/Public/Home/images/2_50.png"/>
            <br/><div class="now">￥200.00</div>
            <br/><div class="formerly">￥500.00</div>
        </div>
    </div>
    <div class="right">
        <div class="top">
            <div class="second_hand";>
                <div style="color:#58aa89; font-size:40px; font-weight:bold; width:200px; text-align:center; margin:0 auto;">配件商城</div>
                <div style="font-size:24px;width:300px; text-align:center;margin:0 auto;">超多配件等你来来购</div>
                <div class="second_img"><img src="/excavator/Public/Home/images/2_47.png"/></div>
            </div>
            <div class="top_right">
                <div style="color:#58aa89; font-size:40px; font-weight:bold; width:200px; text-align:center; margin:0 auto;">维修网点</div>
                <div style="font-size:24px;width:300px; text-align:center;margin:0 auto;">到处都是我们的网点</div>
                <div class="second_img"><img src="/excavator/Public/Home/images/2_47.png"/></div>
            </div>
        </div>
        <div class="bottom">
            <div class="brand">
                <div>
                    <a><span style="color:#C60; font-size:40px; margin:15px 0 0 15px;">品牌专区</span><br/>
                        <span style="font-size:24px;margin:20px 0 0 15px;">正品低价</span></a>
                </div>
                <a><img src="/excavator/Public/Home/images/2_57.png"/></a>
            </div>
            <div class="quality">
                <div>
                    <a><div style="color:#C60; font-size:25px;width:150px; margin:0 auto; text-align:center;">二手主机</div>
                        <div style="font-size:18px; width:150px;margin:0 auto; text-align:center;">安全保障</div></a>
                </div>
                <div class="quality_img"><img src="/excavator/Public/Home/images/2_54.png"/></div>
            </div>
            <div class="quality2">
                <div>
                    <a><div style="color:#C60; font-size:25px;width:150px; margin:0 auto; text-align:center;">破碎锤</div>
                        <div style="font-size:18px; width:150px;margin:0 auto; text-align:center;">高端品质</div></a>
                </div>
                <div class="quality_img2"><img src="/excavator/Public/Home/images/2_54.png"/></div>
            </div>
        </div>
    </div>
</div>
<hr/>
<div id="recommend1">
    <div class="recommend1name" ><img src="/excavator/Public/Home/images/882091507727965503.jpg"/>精品推荐</div>
    <div class="merchandise">
        <ul>
            <li>
                <div>
                    <a><div class="t1" style="margin-top:20px;">发动机油</div>
                        <div class="t2">低价实惠</div>
                        <div class="tp"><img src="/excavator/Public/Home/images/2_66.png"/></div></a>
                </div>
            </li>
            <li>
                <div>
                    <a><div class="t1" style="margin-top:20px;">栓活塞</div>
                        <div class="t2">密封包装</div>
                        <div class="tp"><img src="/excavator/Public/Home/images/2_63.png"/></div></a>
                </div>
            </li>
            <li>
                <div>
                    <a><div class="t1" style="margin-top:20px;">橡皮轮胎</div>
                        <div class="t2">不易磨损</div>
                        <div class="tp"><img src="/excavator/Public/Home/images/2_69.png"/></div></a>
                </div>
            </li>
            <li>
                <div>
                    <a><div class="t1" style="margin-top:20px;">机油滤芯</div>
                        <div class="t2">节能环保</div>
                        <div class="tp"><img src="/excavator/Public/Home/images/2_78.png"/></div></a>
                </div>
            </li>
            <li>
                <div>
                    <a><div class="t1" style="margin-top:20px;">接收器</div>
                        <div class="t2">结实耐用</div>
                        <div class="tp"><img src="/excavator/Public/Home/images/2_75.png"/></div></a>
                </div>
            </li>
            <li>
                <div>
                    <a><div class="t1" style="margin-top:20px;">管道</div>
                        <div class="t2">品种齐全</div>
                        <div class="tp"><img src="/excavator/Public/Home/images/2_81.png"/></div></a>
                </div>
            </li>
        </ul>
    </div>
</div>
<hr/>
<div id="ADD"></div>
<input type="button" value="点击加载更多" class="more"/>
<a href="#top"><img class="gotop" src="/excavator/Public/Home/images/480750962012981946.png" alt="返回顶部" /></a>
<script type="text/javascript" src="/excavator/Public/Home/js/index/index.js"></script>
<footer>
    <ul>
        <li style="margin-left:16%;"><a href="/"><img src="/excavator/Public/Home/images/2_87.png"/><div style="position:relative; bottom:10px;">首页</div></a></li>
        <li><a href="/excavator/index.php?s=/Home/CateList/index"><img src="/excavator/Public/Home/images/2_93.png"/><div style=" position:relative; left:15px;">分类</div></a></li>
        <li><a href="/excavator/index.php?s=/Home/UserCenter/index"><img src="/excavator/Public/Home/images/2_90.png"/><div style=" position:absolute; margin-left:32px; bottom:0px;">我的</div></a></li>
    </ul>
</footer>
</body>
</html>