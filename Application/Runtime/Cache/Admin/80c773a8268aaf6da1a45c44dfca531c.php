<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Notebook | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="/excavator/Public/Admin/css/app.v2.css" type="text/css" />
  <!-- App -->
  <script src="/excavator/Public/Admin/js/app.v2.js"></script>
  <!--[if lt IE 9]>
  <script src="/excavator/Public/Admin/js/ie/html5shiv.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/ie/respond.min.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/ie/excanvas.js" cache="false"></script> <![endif]-->
</head>
<body>
<section class="vbox">
  <!-- header -->
  <header class="bg-dark dk header navbar navbar-fixed-top-xs">
    <div class="navbar-header aside-md"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="/excavator/Public/Admin/images/logo.png" class="m-r-sm">Notebook</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a> </div>
    <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i class="fa fa-building-o"></i> <span class="font-bold">Activity</span> </a>
            <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
                <div class="wrapper lter m-t-n-xs"> <a href="#" class="thumb pull-left m-r"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a>
                    <div class="clear"> <a href="#"><span class="text-white font-bold">@Mike Mcalidek</a></span> <small class="block">Art Director</small> <a href="#" class="btn btn-xs btn-success m-t-xs">Upgrade</a> </div>
                </div>
                <div class="row m-l-none m-r-none m-b-n-xs text-center">
                    <div class="col-xs-4">
                        <div class="padder-v"> <span class="m-b-xs h4 block text-white">245</span> <small class="text-muted">Followers</small> </div>
                    </div>
                    <div class="col-xs-4 dk">
                        <div class="padder-v"> <span class="m-b-xs h4 block text-white">55</span> <small class="text-muted">Likes</small> </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="padder-v"> <span class="m-b-xs h4 block text-white">2,035</span> <small class="text-muted">Photos</small> </div>
                    </div>
                </div>
            </section>
        </li>
        <li>
            <div class="m-t m-l"> <a href="/excavator/index.php/Admin/Page/price.html" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade"><i class="fa fa-long-arrow-up"></i></a> </div>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
        <li class="hidden-xs"> <a href="#" class="dropdown-toggle dk" data-toggle="dropdown"> <i class="fa fa-bell"></i> <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span> </a>
            <section class="dropdown-menu aside-xl">
                <section class="panel bg-white">
                    <header class="panel-heading b-light bg-light"> <strong>You have <span class="count">2</span> notifications</strong> </header>
                    <div class="list-group list-group-alt animated fadeInRight"> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" alt="John said" class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br>
              <small class="text-muted">10 minutes ago</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br>
              <small class="text-muted">1 hour ago</small> </span> </a> </div>
                    <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </footer>
                </section>
            </section>
        </li>
        <li class="dropdown hidden-xs"> <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
            <section class="dropdown-menu aside-xl animated fadeInUp">
                <section class="panel bg-white">
                    <form role="search">
                        <div class="form-group wrapper m-b-none">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                  <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
                  </span> </div>
                        </div>
                    </form>
                </section>
            </section>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="/excavator/Public/Admin/images/avatar.jpg"> </span> John.Smith <b class="caret"></b> </a>
            <ul class="dropdown-menu animated fadeInRight">
                <span class="arrow top"></span>
                <li> <a href="#">Settings</a> </li>
                <li> <a href="/excavator/index.php/Admin/Page/profile.html">Profile</a> </li>
                <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
                <li> <a href="/excavator/index.php/Admin/Page/docs.html">Help</a> </li>
                <li class="divider"></li>
                <li> <a href="/excavator/index.php/Admin/Page/logout" data-toggle="ajaxModal" >Logout</a> </li>
            </ul>
        </li>
    </ul>
</header>
  <!-- /header -->
  <section>
    <section class="hbox stretch">
      <!-- .aside -->
      <aside class="bg-dark lter nav-xs aside-md hidden-print" id="nav">
    <section class="vbox">
        <header class="header bg-primary lter text-center clearfix">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></button>
                <div class="btn-group hidden-nav-xs">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> Switch Project <span class="caret"></span> </button>
                    <ul class="dropdown-menu text-left">
                        <li><a href="#">Project</a></li>
                        <li><a href="#">Another Project</a></li>
                        <li><a href="#">More Projects</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333"> <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <ul class="nav">
                        <li class="active"> <a href="/excavator/index.php/Admin/Index/index.html" class="active"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span>Workset</span> </a> </li>
                        <li > <a href="#layout" > <i class="fa fa-columns icon"> <b class="bg-warning"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Layouts</span> </a>
                            <ul class="nav lt">
                                <li > <a href="layout-c.html" > <i class="fa fa-angle-right"></i> <span>Color option</span> </a> </li>
                                <li > <a href="layout-r.html" > <i class="fa fa-angle-right"></i> <span>Right nav</span> </a> </li>
                                <li > <a href="layout-h.html" > <i class="fa fa-angle-right"></i> <span>H-Layout</span> </a> </li>
                            </ul>
                        </li>
                        <li > <a href="#uikit" > <i class="fa fa-flask icon"> <b class="bg-success"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>UI kit</span> </a>
                            <ul class="nav lt">
                                <li > <a href="/excavator/index.php/Admin/Uikit/buttons.html" > <i class="fa fa-angle-right"></i> <span>Buttons</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/icons.html" > <b class="badge bg-info pull-right">369</b> <i class="fa fa-angle-right"></i> <span>Icons</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/grid.html" > <i class="fa fa-angle-right"></i> <span>Grid</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/widgets.html" > <b class="badge pull-right">8</b> <i class="fa fa-angle-right"></i> <span>Widgets</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/components.html" > <i class="fa fa-angle-right"></i> <span>Components</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/lists.html" > <i class="fa fa-angle-right"></i> <span>List group</span> </a> </li>
                                <li > <a href="#table" > <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> <span>Table</span> </a>
                                    <ul class="nav bg">
                                        <li > <a href="/excavator/index.php/Admin/Uikit/table_static.html" > <i class="fa fa-angle-right"></i> <span>Table static</span> </a> </li>
                                        <li > <a href="/excavator/index.php/Admin/Uikit/table_datatable.html" > <i class="fa fa-angle-right"></i> <span>Datatable</span> </a> </li>
                                        <li > <a href="/excavator/index.php/Admin/Uikit/table_datagrid.html" > <i class="fa fa-angle-right"></i> <span>Datagrid</span> </a> </li>
                                    </ul>
                                </li>
                                <li > <a href="#form" > <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> <span>Form</span> </a>
                                    <ul class="nav bg">
                                        <li > <a href="/excavator/index.php/Admin/Uikit/form_elements.html" > <i class="fa fa-angle-right"></i> <span>Form elements</span> </a> </li>
                                        <li > <a href="/excavator/index.php/Admin/Uikit/form_validation.html" > <i class="fa fa-angle-right"></i> <span>Form validation</span> </a> </li>
                                        <li > <a href="/excavator/index.php/Admin/Uikit/form_wizard.html" > <i class="fa fa-angle-right"></i> <span>Form wizard</span> </a> </li>
                                    </ul>
                                </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/chart.html" > <i class="fa fa-angle-right"></i> <span>Chart</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/fullcalendar.html" > <i class="fa fa-angle-right"></i> <span>Fullcalendar</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/portlet.html" > <i class="fa fa-angle-right"></i> <span>Portlet</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Uikit/timeline.html" > <i class="fa fa-angle-right"></i> <span>Timeline</span> </a> </li>
                            </ul>
                        </li>
                        <li > <a href="#pages" > <i class="fa fa-file-text icon"> <b class="bg-primary"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Pages</span> </a>
                            <ul class="nav lt">
                                <li > <a href="/excavator/index.php/Admin/Page/gallery.html" > <i class="fa fa-angle-right"></i> <span>Gallery</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Page/profile.html" > <i class="fa fa-angle-right"></i> <span>Profile</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Page/invoice.html" > <i class="fa fa-angle-right"></i> <span>Invoice</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Page/intro.html" > <i class="fa fa-angle-right"></i> <span>Intro</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Page/master.html" > <i class="fa fa-angle-right"></i> <span>Master</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Page/gmap.html" > <i class="fa fa-angle-right"></i> <span>Google Map</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Page/signin.html" > <i class="fa fa-angle-right"></i> <span>Signin</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Page/signup.html" > <i class="fa fa-angle-right"></i> <span>Signup</span> </a> </li>
                                <li > <a href="/excavator/index.php/Admin/Page/errors.html" > <i class="fa fa-angle-right"></i> <span>404</span> </a> </li>
                            </ul>
                        </li>
                        <li > <a href="/excavator/index.php/Admin/Page/mail.html" > <b class="badge bg-danger pull-right">3</b> <i class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i> <span>Message</span> </a> </li>
                        <li > <a href="/excavator/index.php/Admin/Page/notebook.html" > <i class="fa fa-pencil icon"> <b class="bg-info"></b> </i> <span>Notes</span> </a> </li>
                        <li > <a href="/excavator/index.php/Admin/Page/docs.html"><i class="fa fa-question icon"</a><b class="bg-primary dker"></b> </i> <span>Help</span></li>
                    </ul>
                </nav>
                <!-- / nav --> </div>
        </section>
        <footer class="footer lt hidden-xs b-t b-dark">
            <div id="chat" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                    <section class="panel bg-white">
                        <header class="panel-heading b-b b-light">Active chats</header>
                        <div class="panel-body animated fadeInRight">
                            <p class="text-sm">No active chats.</p>
                            <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                        </div>
                    </section>
                </section>
            </div>
            <div id="invite" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                    <section class="panel bg-white">
                        <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header>
                        <div class="panel-body animated fadeInRight">
                            <p class="text-sm">No contacts in your lists.</p>
                            <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                        </div>
                    </section>
                </section>
            </div>
            <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
            <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
            </div>
        </footer>
    </section>
</aside>
      <!-- /.aside -->
      <!-- content -->
      <section id="content">
        <section class="hbox stretch"> <!-- .aside -->
          <aside class="aside aside-md bg-white">
            <section class="vbox">
              <header class="dk header">
                <button class="btn btn-icon btn-default btn-sm pull-right"><i class="fa fa-plus"></i></button>
                <button class="btn btn-icon btn-default btn-sm pull-right visible-xs m-r-xs" data-toggle="class:show" data-target="#mail-nav"><i class="fa fa-reorder"></i></button>
                <p class="h4">Mailbox</p>
              </header>
              <section>
                <section>
                  <section id="mail-nav" class="hidden-xs">
                    <ul class="nav nav-pills nav-stacked no-radius">
                      <li> <a href="#"> <span class="badge pull-right">15</span> <i class="fa fa-fw fa-inbox"></i> Inbox </a> </li>
                      <li class="active"> <a href="#"> <i class="fa fa-fw fa-envelope-o"></i> Sent mail </a> </li>
                      <li> <a href="#"> <span class="badge badge-hollow pull-right">4</span> <i class="fa fa-fw fa-bookmark-o"></i> Important </a> </li>
                      <li> <a href="#"> <i class="fa fa-fw fa-pencil"></i> Draft </a> </li>
                      <li> <a href="#"> <span class="badge badge-hollow pull-right">3</span> <i class="fa fa-fw fa-star-o"></i> Spam </a> </li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked no-radius m-t-sm">
                      <li class="padder dk text-sm l-h-2x">
                        <p>Labels</p>
                      </li>
                      <li> <a href="#"> <i class="fa fa-circle text-danger pull-right m-t-xs"></i> Work </a> </li>
                      <li> <a href="#"> <i class="fa fa-circle pull-right m-t-xs"></i> Private </a> </li>
                      <li> <a href="#"> <i class="fa fa-circle text-success pull-right m-t-xs"></i> Clients </a> </li>
                    </ul>
                  </section>
                </section>
              </section>
            </section>
          </aside>
          <!-- /.aside --> <!-- .aside -->
          <aside class="bg-light lter b-l" id="email-list">
            <section class="vbox">
              <header class="bg-light dk header clearfix">
                <div class="btn-group pull-right">
                  <button type="button" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-sm btn-default"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="btn-toolbar">
                  <div class="btn-group select">
                    <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="dropdown-label" style="width: 65px;">Filter</span> <span class="caret"></span> </button>
                    <ul class="dropdown-menu text-left text-sm">
                      <li><a href="#">Read</a></li>
                      <li><a href="#">Unread</a></li>
                      <li><a href="#">Starred</a></li>
                      <li><a href="#">Unstarred</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="bottom" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                  </div>
                </div>
              </header>
              <section class="scrollable hover">
                <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-alt list-group-lg">
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">3 minuts ago</small> <strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span> <span>Wellcome and play this web application template ... </span> </a> </li>
                  <li class="list-group-item animated fadeInRightBig" href="#email-content, #email-list" data-toggle="class:show,hide"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">1 hour ago</small> <strong>Jonathan George</strong> <span>Morbi nec nunc condimentum...<span class="text-danger">click me</span></span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">2 hours ago</small> <strong>Josh Long</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">1 day ago</small> <strong>Jack Dorsty</strong> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">3 days ago</small> <strong>Morgen Kntooh</strong> <span>Mobile first web app for startup...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">Jun 21</small> <strong>Yoha Omish</strong> <span class="label label-sm bg-danger text-uc">private</span> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">May 10</small> <strong>Gole Lido</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">Jan 2</small> <strong>Jonthan Snow</strong> <span class="label label-sm bg-success text-uc">clients</span> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item" href="#email-content" data-toggle="class:show"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">3 minuts ago</small> <strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span> <span>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">1 hour ago</small> <strong>Jonathan George</strong> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">2 hours ago</small> <strong>Josh Long</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">1 day ago</small> <strong>Jack Dorsty</strong> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">3 days ago</small> <strong>Morgen Kntooh</strong> <span>Mobile first web app for startup...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">Jun 21</small> <strong>Yoha Omish</strong> <span class="label label-sm bg-danger text-uc">private</span> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">May 10</small> <strong>Gole Lido</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">Jan 2</small> <strong>Jonthan Snow</strong> <span class="label label-sm bg-success text-uc">clients</span> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item" href="#email-content" data-toggle="class:show"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">3 minuts ago</small> <strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span> <span>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">1 hour ago</small> <strong>Jonathan George</strong> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">2 hours ago</small> <strong>Josh Long</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">1 day ago</small> <strong>Jack Dorsty</strong> <span>Morbi nec nunc condimentum...</span> </a> </li>
                  <li class="list-group-item"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right text-muted">3 days ago</small> <strong>Morgen Kntooh</strong> <span>Mobile first web app for startup...</span> </a> </li>
                </ul>
              </section>
              <footer class="footer b-t bg-white-only">
                <form class="m-t-sm">
                  <div class="input-group">
                    <input type="text" class="input-sm form-control input-s-sm" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </footer>
            </section>
          </aside>
          <!-- /.aside --> <!-- .aside -->
          <aside class="bg-white hide b-l" id="email-content">
            <section class="vbox">
              <section class="scrollable">
                <div class="wrapper b-b b-light"> <a href="#" data-toggle="class" class="pull-left m-r-sm"><i class="fa fa-star-o fa-1x text"></i><i class="fa fa-star text-warning fa-1x text-active"></i></a> <a href="#email-content, #email-list" data-toggle="class:show,hide" class="pull-right text"> <i class="fa fa-trash-o"></i> </a>
                  <h4 class="m-n"> Kickoff meeting</h4>
                </div>
                <div class="text-sm padder m-t">
                  <div class="block clearfix m-b"> <a href="#" class="thumb-xs inline"><img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"></a> <span class="inline m-t-xs">Mika Sokeil &lt;mica_sokeil@gmail.com&gt; to me</span>
                    <div class="pull-right inline">May 12 (<em>4 days ago</em>)
                      <div class="btn-group">
                        <button class="btn btn-default btn-xs" data-toggle="tooltip" data-title="Reply"><i class="fa fa-reply"></i></button>
                        <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                          <li><a href="#"><i class="fa fa-signout"></i> Forward</a></li>
                          <li><a href="#">Add Mika Sokeil to contact list</a></li>
                          <li><a href="#">Mark as unread</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Delete this message</a></li>
                          <li><a href="#">Report spam</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="line pull-in"></div>
                  <p>Mr. Soe</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                  <blockquote> <em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a justo.<br>
                    <br>
                    Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis</em> </blockquote>
                  <div class="show">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                    <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                    <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend</p>
                  </div>
                  <p>Best Regards<br>
                    Mical</p>
                </div>
                <div class="padder">
                  <div class="panel text-sm bg-light">
                    <div class="panel-body"> Click here to <a href="#">Reply</a> or <a href="#">Forward</a> </div>
                  </div>
                </div>
              </section>
            </section>
          </aside>
          <!-- /.aside -->
          <aside class="aside-sm b-l">
            <section class="vbox">
              <header class="bg-light dk header">
                <p>Contacts (25)</p>
              </header>
              <section class="scrollable bg-white">
                <div class="list-group list-group-alt no-radius no-borders"> <a class="list-group-item" href="#"> <i class="fa fa-circle text-success text-xs"></i> <span>Cris Labiso</span> </a> <a class="list-group-item" href="#"> <i class="fa fa-circle text-muted text-xs"></i> <span>Daniel Sandvid</span> </a> <a class="list-group-item" href="#"> <i class="fa fa-circle text-danger text-xs"></i> <span>Helder Oliveira</span> </a> <a class="list-group-item" href="#"> <i class="fa fa-circle text-muted text-xs"></i> <span>Jeff Broderik</span> </a> <a class="list-group-item" href="#"> <i class="fa fa-circle text-muted text-xs"></i> <span>Jonathan Morina</span> </a> <a class="list-group-item" href="#"> <i class="fa fa-circle text-success text-xs"></i> <span>Mason Yarnell</span> </a> <a class="list-group-item" href="#"> <i class="fa fa-circle text-danger text-xs"></i> <span>Mike Mcalidek</span> </a> </div>
              </section>
              <footer class="footer text-center b-t">
                <button class="btn btn-success btn-sm"><i class="fa fa-plus"></i> New contact</button>
              </footer>
            </section>
          </aside>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
      </section>
      <!-- /content -->
      <!-- rightside -->
      <aside class="bg-light lter b-l aside-md hide" id="notes">
    <div class="wrapper">Notification</div>
</aside>
      <!-- /rightside -->
    </section>
  </section>
</section>
</body>
</html>