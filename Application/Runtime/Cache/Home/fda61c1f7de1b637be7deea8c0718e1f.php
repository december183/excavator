<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品分类列表</title>
    <link href="/excavator/Public/Home/css/classify.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <div><img src="/excavator/Public/Home/images/789235141690588498.png"/><input type="search" placeholder="搜索商品"></div>
    <div id="brand">
        <form id="ajaxForm" action="">
            <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
                <tr class="brand">
                    <td align="center">品牌: </td>
                    <td><select name="selProvince" onChange="changeCity();">
                        <option value="">请选择品牌</option>
                    </select></td>
                </tr>
                <tr class="model">
                    <td align="center" valign="bottom"> 型号: </td>
                    <td><P>
                        <select name="selCity">
                            <option value="">请选择型号</option>
                        </select>
                    </P>
                    </td>
                </tr>
            </table>
            <input type="submit" value="搜索"/>
        </form>
    </div>
</header>
<div id="box">
    <ul id="tab_nav">
        <li><a href="#t_1">油品类</a></li>
        <li><a href="#t_2">滤芯类</a></li>
        <li><a href="#t_3">油缸类</a></li>
    </ul>
    <div id="tab_content">
        <div id="t_1">
            <ul>
                <li><img src="/excavator/Public/Home/images/2_50.png"/><p>液压油200L</p></li>
                <li><img src="/excavator/Public/Home/images/2_50.png"/><p>液压油200L</p></li>
                <li><img src="/excavator/Public/Home/images/2_50.png"/><p>液压油200L</p></li>
                <li><img src="/excavator/Public/Home/images/2_50.png"/><p>液压油200L</p></li>
                <li><img src="/excavator/Public/Home/images/2_50.png"/><p>液压油200L</p></li>
            </ul>
        </div>
        <div id="t_2">tab_贰</div>
        <div id="t_3">tab_叁</div>
        <div id="t_4"></div>
    </div>
</div>
<footer>
    <ul>
        <li style="margin-left:16%;"><a href="/"><img src="/excavator/Public/Home/images/2_87.png"/><div style="position:relative; bottom:10px;">首页</div></a></li>
        <li><a href="/excavator/index.php?s=/Home/CateList/index"><img src="/excavator/Public/Home/images/2_93.png"/><div style=" position:relative; left:15px;">分类</div></a></li>
        <li><a href="/excavator/index.php?s=/Home/UserCenter/index"><img src="/excavator/Public/Home/images/2_90.png"/><div style=" position:absolute; margin-left:32px; bottom:0px;">我的</div></a></li>
    </ul>
</footer>
</body>
</html>