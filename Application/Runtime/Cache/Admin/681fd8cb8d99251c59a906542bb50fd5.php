<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Blog</title>
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
          <h3 class="m-b-none">Blog</h3>
          <small class="text-muted">Just another blog</small> </div>
      </div>
    </div>
    <div class="bg-white b-b b-light">
      <div class="container">
        <ul class="breadcrumb no-border bg-empty m-b-none m-l-n-sm">
          <li><a href="/excavator/index.php/Admin/Page/landing.html">Home</a></li>
          <li class="active">Blog</li>
        </ul>
      </div>
    </div>
    <div class="container m-t-lg m-b-lg">
      <div class="row">
        <div class="col-sm-9">
          <div class="blog-post">
            <div class="post-item">
              <div class="post-media">
                <section class="panel bg-primary dk m-b-none">
                  <div class="carousel auto slide panel-body" id="c-fade">
                    <ol class="carousel-indicators out">
                      <li data-target="#c-fade" data-slide-to="0" class="active"></li>
                      <li data-target="#c-fade" data-slide-to="1" class=""></li>
                      <li data-target="#c-fade" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active text-center"> <span class="h2"><i class="fa fa-clock-o fa-5x m-t icon-muted"></i></span>
                        <p class="text-muted m-t m-b-lg">Time saving</p>
                      </div>
                      <div class="item text-center"> <span class="h2"><i class="fa fa-file-o fa-5x m-t icon-muted"></i></span>
                        <p class="text-muted m-t m-b-lg">Full documents</p>
                      </div>
                      <div class="item text-center"> <span class="h2"><i class="fa fa-mobile fa-5x m-t icon-muted"></i></span>
                        <p class="text-muted m-t m-b-lg">Mobile/Tablet/Desktop</p>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#c-fade" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="right carousel-control" href="#c-fade" data-slide="next"> <i class="fa fa-angle-right"></i> </a> </div>
                </section>
              </div>
              <div class="caption wrapper-lg">
                <h2 class="post-title"><a href="#">7 things you need to know about the flat design</a></h2>
                <div class="post-sum">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. <br>
                    <br>
                    Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                </div>
                <div class="line line-lg"></div>
                <div class="text-muted"> <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">Admin</a> <i class="fa fa-clock-o icon-muted"></i> Feb 20, 2013 <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 2 comments</a> </div>
              </div>
            </div>
            <div class="post-item">
              <div class="caption wrapper-lg">
                <h2 class="post-title"><a href="#">Bootstrap 3: What you need to know</a></h2>
                <div class="post-sum">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. </p>
                  <h3>Html5 and CSS3</h3>
                  <p> Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                </div>
                <div class="line line-lg"></div>
                <div class="text-muted"> <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">Admin</a> <i class="fa fa-clock-o icon-muted"></i> Feb 15, 2013 <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 4 comments</a> </div>
              </div>
            </div>
          </div>
          <div class="text-center m-t-lg m-b-lg">
            <ul class="pagination pagination-md">
              <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
          <h4 class="m-t-lg m-b">3 Comments</h4>
          <section class="comment-list block">
            <article id="comment-id-1" class="comment-item"> <a class="pull-left thumb-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-rounded"> </a>
              <section class="comment-body m-b">
                <header> <a href="#"><strong>John smith</strong></a>
                  <label class="label bg-info m-l-xs">Editor</label>
                  <span class="text-muted text-xs block m-t-xs"> 24 minutes ago </span> </header>
                <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.</div>
              </section>
            </article>
            <!-- .comment-reply -->
            <article id="comment-id-2" class="comment-item comment-reply"> <a class="pull-left thumb-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-rounded"> </a>
              <section class="comment-body m-b">
                <header> <a href="#"><strong>John smith</strong></a>
                  <label class="label bg-dark m-l-xs">Admin</label>
                  <span class="text-muted text-xs block m-t-xs"> 26 minutes ago </span> </header>
                <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
              </section>
            </article>
            <!-- / .comment-reply -->
            <article id="comment-id-2" class="comment-item"> <a class="pull-left thumb-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-rounded"> </a>
              <section class="comment-body m-b">
                <header> <a href="#"><strong>John smith</strong></a>
                  <label class="label bg-dark m-l-xs">Admin</label>
                  <span class="text-muted text-xs block m-t-xs"> 26 minutes ago </span> </header>
                <blockquote class="m-t">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
                <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
              </section>
            </article>
          </section>
          <h4 class="m-t-lg m-b">Leave a comment</h4>
          <form>
            <div class="form-group pull-in clearfix">
              <div class="col-sm-6">
                <label>Your name</label>
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="col-sm-6">
                <label >Email</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label>Comment</label>
              <textarea class="form-control" rows="5" placeholder="Type your comment"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Submit comment</button>
            </div>
          </form>
        </div>
        <div class="col-sm-3">
          <h5 class="font-semibold">About me</h5>
          <div class="line line-dashed"></div>
          <div class="m-b-lg"> <span class="pull-left thumb-sm avatar m-r-sm m-t-xs"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </span>
            <p class="clear text-sm"> I am a UI/UX designer for Flatfull where i focus on Web applications, Mobile apps... </p>
          </div>
          <h5 class="font-semibold">Subscribe</h5>
          <div class="line line-dashed"></div>
          <div class="m-t-sm m-b-lg"> <a href="#" title="RSS" class="btn btn-rounded btn-warning btn-icon"><i class="fa fa-rss"></i></a> <a href="#" title="Twitter" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a> <a href="#" title="Facebook" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a> <a href="#" title="Google+" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a> <a href="#" title="LinkedIn" class="btn btn-rounded btn-info btn-icon"><i class="fa fa-linkedin"></i></a> </div>
          <h5 class="font-semibold">Recent Tweets</h5>
          <div class="line line-dashed"></div>
          <div class="clear m-b"> <a href="#" class="text-info"> <span class="thumb-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </span> @Mike Mcalidek <i class="fa fa-twitter"></i> </a> </div>
          <ul class="list-unstyled m-b-lg">
            <li>
              <p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </p>
              <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
              <div class="line"></div>
            </li>
            <li>
              <p>Morbi nec <a href="#" class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
              <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
              <div class="line"></div>
            </li>
            <li>
              <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
              <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
              <div class="line"></div>
            </li>
          </ul>
          <h5 class="font-semibold">Categories</h5>
          <div class="line line-dashed"></div>
          <ul class="list-unstyled">
            <li> <a href="#" class="dk"> <span class="badge pull-right">15</span> Photograph </a> </li>
            <li class="line"></li>
            <li> <a href="#"> <span class="badge pull-right">30</span> Life style </a> </li>
            <li class="line"></li>
            <li> <a href="#"> <span class="badge pull-right">9</span> Food </a> </li>
            <li class="line"></li>
            <li> <a href="#"> <span class="badge pull-right">4</span> Travel world </a> </li>
            <li class="line"></li>
          </ul>
          <div class="tags m-b-lg"> <a href="#" class="label bg-success">Bootstrap</a> <a href="#" class="label bg-success">Application</a> <a href="#" class="label bg-success">Apple</a> <a href="#" class="label bg-success">Less</a> <a href="#" class="label bg-success">Theme</a> <a href="#" class="label bg-success">Wordpress</a> </div>
          <h5 class="font-semibold">Recent Posts</h5>
          <div class="line line-dashed"></div>
          <div>
            <article class="media"> <a class="pull-left thumb thumb-wrapper m-t-xs"> <img src="/excavator/Public/Admin/images/thumb_1.png"> </a>
              <div class="media-body"> <a href="#" class="font-semibold">Bootstrap 3: What you need to know</a>
                <div class="text-xs block m-t-xs"><a href="#">Travel</a> 2 minutes ago</div>
              </div>
            </article>
            <div class="line"></div>
            <article class="media m-t-none"> <a class="pull-left thumb thumb-wrapper m-t-xs"> <img src="/excavator/Public/Admin/images/thumb_2.png"> </a>
              <div class="media-body"> <a href="#" class="font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                <div class="text-xs block m-t-xs"><a href="#">Design</a> 2 hours ago</div>
              </div>
            </article>
            <div class="line"></div>
            <article class="media m-t-none"> <a class="pull-left thumb thumb-wrapper m-t-xs"> <img src="/excavator/Public/Admin/images/thumb_3.png"> </a>
              <div class="media-body"> <a href="#" class="font-semibold">Sed diam nonummy nibh euismod tincidunt ut laoreet</a>
                <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
              </div>
            </article>
          </div>
        </div>
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