<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en" class="">
<head>
<meta charset="utf-8" />
<title>Feature</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="/excavator/Public/Admin/css/app.v2.css" type="text/css" />
  <link rel="stylesheet" href="/excavator/Public/Admin/css/landing.css" type="text/css" cache="false" />
  <!--[if lt IE 9]>
  <script src="/excavator/Public/Admin/js/ie/html5shiv.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/ie/respond.min.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/ie/excanvas.js" cache="false"></script> <![endif]-->
</head>
<body>
  <!-- header -->
  <header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light" data-spy="affix" data-offset-top="1">
    <div class="container">
        <div class="navbar-header"> <a href="#" class="navbar-brand"><img src="/excavator/Public/Admin/images/logo.png" class="m-r-sm"><span class="text-muted">Notebook</span></a>
            <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"> <a href="/excavator/index.php/Admin/Page/landing.html">Home</a> </li>
                <li> <a href="/excavator/index.php/Admin/Page/features.html">Features</a> </li>
                <li> <a href="/excavator/index.php/Admin/Page/price.html">Plans & Pricing</a> </li>
                <li> <a href="/excavator/index.php/Admin/Page/blog.html">Blog</a> </li>
                <li>
                    <div class="m-t-sm"><a href="/excavator/index.php/Admin/Page/signin.html" class="btn btn-link btn-sm">Sign in</a> <a href="/excavator/index.php/Admin/Page/signup.html" class="btn btn-sm btn-success m-l"><strong>Sign up</strong></a></div>
                </li>
            </ul>
        </div>
    </div>
</header>
  <!-- / header -->
  <section id="content">
    <div class="bg-dark lt">
      <div class="container">
        <div class="m-b-lg m-t-lg">
          <h3 class="m-b-none">Features</h3>
          <small class="text-muted">Killer features you need know</small> </div>
      </div>
    </div>
    <div class="bg-white b-b b-light">
      <div class="container">
        <ul class="breadcrumb no-border bg-empty m-b-none m-l-n-sm">
          <li><a href="/excavator/index.php/Admin/Page/landing.html">Home</a></li>
          <li class="active">Features</li>
        </ul>
      </div>
    </div>
    <div>
      <div class="container m-t-xl">
        <div class="row">
          <div class="col-sm-7">
            <h2 class="font-thin m-b-lg">Fully Responsive on <span class="text-primary">Mobile</span>, <span class="text-primary">Tablet</span> and <span class="text-primary">Desktop</span></h2>
            <p class="h4 m-b-lg l-h-1x">Your application will works no matter where you are, You can use your application at anywhere in the world. This template works on mobile device too. </p>
            <div class="row m-b-xl">
              <div class="col-sm-6"><i class="fa fa-fw fa-angle-right"></i>Have Any Number of Columns</div>
              <div class="col-sm-6"><i class="fa fa-fw fa-angle-right"></i>Scales to Any Width</div>
              <div class="col-sm-6"><i class="fa fa-fw fa-angle-right"></i>It's Smart and Easy</div>
              <div class="col-sm-6"><i class="fa fa-fw fa-angle-right"></i>It Fits In with You</div>
              <div class="col-sm-6"><i class="fa fa-fw fa-angle-right"></i>Take What You Need</div>
              <div class="col-sm-6"><i class="fa fa-fw fa-angle-right"></i>Flexible way to create a responsive layout</div>
            </div>
            <p class="clearfix">&nbsp;</p>
            <div class="row m-b-xl">
              <div class="col-xs-2"><i class="fa fa-desktop fa-4x icon-muted"></i></div>
              <div class="col-xs-2"><i class="fa fa-plus icon-muted m-t"></i></div>
              <div class="col-xs-2"><i class="fa fa-tablet fa-4x icon-muted"></i></div>
              <div class="col-xs-2"><i class="fa fa-plus icon-muted m-t"></i></div>
              <div class="col-xs-2"><i class="fa fa-mobile fa-4x icon-muted"></i></div>
            </div>
          </div>
          <div class="col-sm-5 text-center">
            <section class="panel bg-dark inline aside-md no-border device phone animated fadeInRightBig">
              <header class="panel-heading text-center"> <i class="fa fa-minus fa-2x icon-muted m-b-n-xs block"></i> </header>
              <div class="m-l-xs m-r-xs">
                <div class="carousel auto slide" id="c-fade" data-interval="3000">
                  <div class="carousel-inner">
                    <div class="item active text-center"> <img src="images/phone-2.png" class="img-full" > </div>
                    <div class="item text-center"> <img src="images/phone-1.png" class="img-full" > </div>
                  </div>
                </div>
              </div>
              <footer class="bg-dark text-center panel-footer no-border"> <i class="fa fa-circle icon-muted fa-lg"></i> </footer>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white b-t b-light">
      <div class="container">
        <div class="row m-t-xl m-b-xl">
          <div class="col-sm-5 text-center clearfix m-t-xl" data-ride="animated" data-animation="fadeInLeftBig">
            <div class="h1 font-bold m-t-xl m-b-xl"><span class="fa-2x icon-muted">{less}</span></div>
          </div>
          <div class="col-sm-7">
            <h2 class="font-thin m-b-lg">Using LESS</h2>
            <p class="h4 m-b-lg l-h-1x">This file provide Less css files, You can compiled the less to css files with lessphp, it provides the following mechanisms: variables, nesting, mixins, operators and functions. </p>
            <p class="m-b-xl">We make the less files as Bootstrap way. you can config the variables in one place, like colors: @brand-primary, @brand-success, @border-color. and you can get the unlimited colors for your application.</p>
            <p class="m-t-xl m-b-xl h4"><i class="fa fa-quote-left fa-fw fa-1x icon-muted"></i> Less is More</p>
          </div>
        </div>
      </div>
    </div>
    <div class="b-t b-light">
      <div class="container m-t-xl">
        <div class="row">
          <div class="col-sm-7">
            <h2 class="font-thin m-b-lg">Application Layout</h2>
            <p class="h4 m-b-lg l-h-1x">We provide .hbox and .vbox to create the application layout. it let you create complicated layout as you want. </p>
            <p class="m-b-xl"> <a href="index.html" class="btn btn-sm btn-primary font-bold">Try it now</a> </p>
          </div>
          <div class="col-sm-5 text-center" data-ride="animated" data-animation="fadeInUp" >
            <section class="panel bg-dark m-t-lg m-r-n-lg m-b-n-lg no-border device animated fadeInUp">
              <header class="panel-heading text-left"> <i class="fa fa-circle fa-fw icon-muted"></i> <i class="fa fa-circle fa-fw icon-muted"></i> <i class="fa fa-circle fa-fw icon-muted"></i> </header>
              <img src="images/main.png" class="img-full" > </section>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white b-t b-light pos-rlt">
      <div class="container">
        <div class="row m-t-xl m-b-xl">
          <div class="col-sm-5 text-center clearfix m-t-xl" data-ride="animated" data-animation="fadeInLeftBig">
            <div class="h3 font-bold m-t-xl m-b-xl"> <i class="fa fa-circle text-primary fa-2x"></i> <i class="fa fa-circle text-info fa-2x"></i> <i class="fa fa-circle text-success fa-2x"></i> <i class="fa fa-circle text-warning fa-2x"></i> <i class="fa fa-circle text-danger fa-2x"></i> <i class="fa fa-circle text-dark fa-2x"></i> <i class="fa fa-circle text-light fa-2x"></i> </div>
          </div>
          <div class="col-sm-7">
            <h2 class="font-thin m-b-lg">Rich Components & Widgets</h2>
            <p class="h4 m-b-lg l-h-1x">We create many components and widgets for your real application, we provide 8 default color palettes for you to create the colorful components. </p>
            <ul class="m-b-xl fa-ul">
              <li><i class="fa fa-li fa-check text-muted"></i>369 Fontawesome icons</li>
              <li><i class="fa fa-li fa-check text-muted"></i>+30 Jquery Components</li>
              <li><i class="fa fa-li fa-check text-muted"></i>Application pages</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="b-t b-light">
      <div class="container m-t-xl">
        <div class="row">
          <div class="col-sm-7">
            <h2 class="font-thin m-b-lg">Backbone Notes with Mysql & RESTful API</h2>
            <p class="h4 m-b-lg l-h-1x"> We built a Backbone Note application for your inspiration, It supports local storage and mysql data save. We also created a RESTful api to Get, Post, Put and Delete the data. </p>
            <p class="m-b-xl"> <a href="notebook.html" class="btn btn-dark font-bold">Try it now</a> </p>
          </div>
          <div class="col-sm-5 text-center" data-ride="animated" data-animation="fadeInRightBig" >
            <section class="panel bg-light m-t-lg m-r-n-lg m-b-n-lg no-border device animated fadeInUp">
              <header class="panel-heading text-left"> <i class="fa fa-circle fa-fw icon-muted"></i> <i class="fa fa-circle fa-fw icon-muted"></i> <i class="fa fa-circle fa-fw icon-muted"></i> </header>
              <img src="images/app.png" class="img-full" > </section>
          </div>
        </div>
      </div>
    </div>
    <div class="b-t b-light pos-rlt bg-white">
      <div class="container">
        <p class="m-t-xl m-b-xl">Much more features will be added in. </p>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="bg-primary text-center">
        <div class="container wrapper">
            <div class="m-t-xl m-b"> For your faster and easier web development. <a href="" target="_blank" class="btn btn-lg btn-dark b-white bg-empty m-sm">Download it</a> <a href="index.html" target="_blank" class="btn btn-lg btn-warning b-white bg-empty m-sm">Live Preview</a> </div>
        </div>
        <i class="fa fa-caret-down fa-4x text-primary m-b-n-lg block"></i> </div>
    <div class="bg-dark dker wrapper">
        <div class="container text-center m-t-lg">
            <div class="row m-t-xl m-b-xl">
                <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300"> <i class="fa fa-map-marker fa-3x icon-muted"></i>
                    <h5 class="text-uc m-b m-t-lg">Find Us</h5>
                    <p class="text-sm">23 soe Midlokls <br>
                        120002 Loki — UNITED KINGDOM </p>
                </div>
                <div class="col-sm-4" data-ride="animated" data-animation="fadeInUp" data-delay="600"> <i class="fa fa-envelope-o fa-3x icon-muted"></i>
                    <h5 class="text-uc m-b m-t-lg">Mail Us</h5>
                    <p class="text-sm"><a href="mailto:hey@example.com">info@example.com</a></p>
                </div>
                <div class="col-sm-4" data-ride="animated" data-animation="fadeInRight" data-delay="900"> <i class="fa fa-globe fa-3x icon-muted"></i>
                    <h5 class="text-uc m-b m-t-lg">Join Us</h5>
                    <p class="text-sm">Send your resume to <br>
                        <a href="mailto:hey@example.com">recruit@example.com</a></p>
                </div>
            </div>
            <div class="m-t-xl m-b-xl">
                <p> <a href="#" class="btn btn-icon btn-rounded btn-facebook bg-empty m-sm"><i class="fa fa-facebook"></i></a> <a href="#" class="btn btn-icon btn-rounded btn-twitter bg-empty m-sm"><i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-icon btn-rounded btn-gplus bg-empty m-sm"><i class="fa fa-google-plus"></i></a> </p>
                <p> <a href="#content" data-jump="true" class="btn btn-icon btn-rounded btn-dark b-dark bg-empty m-sm text-muted"><i class="fa fa-angle-up"></i></a> </p>
            </div>
        </div>
    </div>
</footer>
  <!-- / footer -->
  <script src="/excavator/Public/Admin/js/app.v2.js"></script> <!-- Bootstrap --> <!-- App -->
  <script src="/excavator/Public/Admin/js/appear/jquery.appear.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/scroll/smoothscroll.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/landing.js" cache="false"></script>
</body>
</html>