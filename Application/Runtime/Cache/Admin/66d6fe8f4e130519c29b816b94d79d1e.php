<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>上传水印图片</title>
    <link rel="stylesheet" href="/excavator/Public/Admin/css/app.v2.css" type="text/css" />
    <!-- jQuery -->
    <script src="/excavator/Public/Admin/js/jquery.min.js"></script>
    <!--layer-->
    <script charset="utf-8" src="/excavator/Plugins/layer/layer.js"></script>
    <!-- jQuery.form.js -->
    <script src="/excavator/Public/Admin/js/jquery.form.js"></script>
</head>
<body>
<section id="content">
    <section class="vbox">
        <section class="scrollable padder">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold"></header>
                        <div class="panel-body">
                            <form class="bs-example form-horizontal" id="ajaxForm" action="/excavator/index.php?s=/Admin/Up/mark">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">水印图片</label>
                                    <div class="col-sm-4">
                                        <input type="file" name="pic" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s">
                                    </div>
                                    <div class="col-sm-4"><button type="submit" class="btn btn-sm btn-default">上传水印图片</button></div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</section>
<script type="text/javascript" src="/excavator/Public/Admin/js/up/index.js"></script>
</body>
</html>