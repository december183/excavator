<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Widgets</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="/excavator/Public/Admin/css/app.v2.css" type="text/css" />
    <!-- App -->
    <script src="/excavator/Public/Admin/js/app.v2.js"></script>
    <script src="/excavator/Public/Admin/js/function.js"></script>
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
                <li> <a href="/excavator/index.php/Admin/Uikit/logout" data-toggle="ajaxModal" >Logout</a> </li>
            </ul>
        </li>
    </ul>
</header>
    <!-- /header -->
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-dark lter aside-md hidden-print" id="nav">
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
                        <li > <a href="/excavator/index.php/Admin/Index/index.html" class="active"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span>Workset</span> </a> </li>
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
                        <?php if(is_array($userItem)): $i = 0; $__LIST__ = $userItem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($curAction['pid'] == $vo['id']): ?>class="active"<?php endif; ?>> <a href="javascript:;" > <i class="<?php echo ($vo["icon"]); ?>"> <b class="bg-primary"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span><?php echo ($vo["name"]); ?></span> </a>
                                <ul class="nav lt">
                                    <?php if(is_array($vo['child'])): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?><li <?php if($curAction['id'] == $voo['id']): ?>class="active"<?php endif; ?>> <a href="/excavator/index.php/Admin/<?php echo ($voo["action"]); ?>" > <i class="fa fa-angle-right"></i> <span><?php echo ($voo["name"]); ?></span> </a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <li > <a href="/excavator/index.php/Admin/Page/mail.html" > <b class="badge bg-danger pull-right">3</b> <i class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i> <span>Message</span> </a> </li>
                        <li > <a href="/excavator/index.php/Admin/Page/notebook.html" > <i class="fa fa-pencil icon"> <b class="bg-info"></b> </i> <span>Notes</span> </a> </li>
                        <li > <a href="/excavator/index.php/Admin/Page/docs.html"><i class="fa fa-question icon"</a><b class="bg-success"></b> </i> <span>Help</span></li>
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
            
  <script src="/excavator/Public/Admin/js/charts/easypiechart/jquery.easy-pie-chart.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/charts/sparkline/jquery.sparkline.min.js" cache="false"></script>
  <section id="content">
    <section class="vbox">
      <header class="header bg-white b-b b-light">
        <p>Widgets <small>(colorful)</small></p>
      </header>
      <section class="scrollable wrapper">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-sm-6">
                <section class="panel panel-default">
                  <header class="panel-heading bg-danger lt no-border">
                    <div class="clearfix"> <a href="#" class="pull-left thumb avatar b-3x m-r"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a>
                      <div class="clear">
                        <div class="h3 m-t-xs m-b-xs text-white"> John.Smith <i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i> </div>
                        <small class="text-muted">Art director</small> </div>
                    </div>
                  </header>
                  <div class="list-group no-radius alt"> <a class="list-group-item" href="#"> <span class="badge bg-success">25</span> <i class="fa fa-comment icon-muted"></i> Messages </a> <a class="list-group-item" href="#"> <span class="badge bg-info">16</span> <i class="fa fa-envelope icon-muted"></i> Inbox </a> <a class="list-group-item" href="#"> <span class="badge bg-light">5</span> <i class="fa fa-eye icon-muted"></i> Profile visits </a> </div>
                </section>
                <section class="panel panel-info">
                  <div class="panel-body"> <a href="#" class="thumb pull-right m-l"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a>
                    <div class="clear"> <a href="#" class="text-info">@Mike Mcalidek <i class="icon-twitter"></i></a> <small class="block text-muted">2,415 followers / 225 tweets</small> <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a> </div>
                  </div>
                </section>
              </div>
              <div class="col-sm-6">
                <section class="panel panel-default">
                  <div class="text-center wrapper bg-light lt">
                    <div class="sparkline inline" data-type="pie" data-height="165" data-slice-colors="['#77c587','#41586e','#f2f2f2']">45000,23200,15000</div>
                  </div>
                  <ul class="list-group no-radius">
                    <li class="list-group-item"> <span class="pull-right">45,000</span> <span class="label bg-primary">1</span> .inc company </li>
                    <li class="list-group-item"> <span class="pull-right">23,200</span> <span class="label bg-dark">2</span> Gamecorp </li>
                    <li class="list-group-item"> <span class="pull-right">15,000</span> <span class="label bg-light">3</span> Neosoft company </li>
                  </ul>
                </section>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <section class="panel panel-default">
              <div class="panel-body">
                <div class="clearfix text-center m-t">
                  <div class="inline">
                    <div class="easypiechart" data-percent="75" data-line-width="5" data-bar-color="#4cc0c1" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="130" data-line-cap='butt' data-animate="1000">
                      <div class="thumb-lg"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </div>
                    </div>
                    <div class="h4 m-t m-b-xs">John.Smith</div>
                    <small class="text-muted m-b">Art director</small> </div>
                </div>
              </div>
              <footer class="panel-footer bg-info text-center">
                <div class="row pull-out">
                  <div class="col-xs-4">
                    <div class="padder-v"> <span class="m-b-xs h3 block text-white">245</span> <small class="text-muted">Followers</small> </div>
                  </div>
                  <div class="col-xs-4 dk">
                    <div class="padder-v"> <span class="m-b-xs h3 block text-white">55</span> <small class="text-muted">Following</small> </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="padder-v"> <span class="m-b-xs h3 block text-white">2,035</span> <small class="text-muted">Tweets</small> </div>
                  </div>
                </div>
              </footer>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6"> <!-- chat -->
            <section class="panel panel-default">
              <header class="panel-heading">Chat</header>
              <section class="chat-list panel-body">
                <article id="chat-id-1" class="chat-item left"> <a href="#" class="pull-left thumb-sm avatar"><img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"></a>
                  <section class="chat-body">
                    <div class="panel b-light text-sm m-b-none">
                      <div class="panel-body"> <span class="arrow left"></span>
                        <p class="m-b-none">Hi John, What's up...</p>
                      </div>
                    </div>
                    <small class="text-muted"><i class="fa fa-ok text-success"></i> 2 minutes ago</small> </section>
                </article>
                <article id="chat-id-1" class="chat-item right"> <a href="#" class="pull-right thumb-sm avatar"><img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"></a>
                  <section class="chat-body">
                    <div class="panel bg bg-success text-sm m-b-none">
                      <div class="panel-body"> <span class="arrow right"></span>
                        <p class="m-b-none">Lorem ipsum dolor sit amet, conse <br>
                          adipiscing eli...<br>
                          :)</p>
                      </div>
                    </div>
                    <small class="text-muted">1 minutes ago</small> </section>
                </article>
              </section>
              <footer class="panel-footer"> <!-- chat form -->
                <article class="chat-item" id="chat-form"> <a class="pull-left thumb-sm avatar"><img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"></a>
                  <section class="chat-body">
                    <form action="" class="m-b-none">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Say something">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">SEND</button>
                            </span> </div>
                    </form>
                  </section>
                </article>
              </footer>
            </section>
            <!-- /chat -->
            <section class="panel panel-default">
              <header class="panel-heading"> <span class="label bg-dark">15</span> Inbox </header>
              <section class="panel-body slim-scroll" data-height="230px">
                <article class="media"> <span class="pull-left thumb-sm"><img src="/excavator/Public/Admin/images/avatar_default.jpg" class="img-circle"></span>
                  <div class="media-body">
                    <div class="pull-right media-xs text-center text-muted"> <strong class="h4">12:18</strong><br>
                      <small class="label bg-light">pm</small> </div>
                    <a href="#" class="h4">Bootstrap 3 released</a> <small class="block"><a href="#" class="">John Smith</a> <span class="label label-success">Circle</span></small> <small class="block m-t-sm">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small> </div>
                </article>
                <div class="line pull-in"></div>
                <article class="media"> <span class="pull-left thumb-sm"><i class="fa fa-file-o fa-3x icon-muted"></i></span>
                  <div class="media-body">
                    <div class="pull-right media-xs text-center text-muted"> <strong class="h4">17</strong><br>
                      <small class="label bg-light">feb</small> </div>
                    <a href="#" class="h4">Bootstrap documents</a> <small class="block"><a href="#" class="">John Smith</a> <span class="label label-info">Friends</span></small> <small class="block m-t-sm">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small> </div>
                </article>
                <div class="line pull-in"></div>
                <article class="media">
                  <div class="media-body">
                    <div class="pull-right media-xs text-center text-muted"> <strong class="h4">09</strong><br>
                      <small class="label bg-light">jan</small> </div>
                    <a href="#" class="h4 text-success">Mobile first html/css framework</a> <small class="block m-t-sm">Bootstrap, Ratchet</small> </div>
                </article>
              </section>
            </section>
          </div>
          <div class="col-lg-6"> <!-- .comment-list -->
            <section class="comment-list block">
              <article id="comment-id-1" class="comment-item"> <a class="pull-left thumb-sm avatar"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <span class="arrow left"></span>
                <section class="comment-body panel panel-default">
                  <header class="panel-heading bg-white"> <a href="#">John smith</a>
                    <label class="label bg-info m-l-xs">Editor</label>
                    <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> Just now </span> </header>
                  <div class="panel-body">
                    <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
                    <div class="comment-action m-t-sm"> <a href="#" data-toggle="class" class="btn btn-default btn-xs active"> <i class="fa fa-star-o text-muted text"></i> <i class="fa fa-star text-danger text-active"></i> Like </a> <a href="#comment-form" class="btn btn-default btn-xs"> <i class="fa fa-mail-reply text-muted"></i> Reply </a> </div>
                  </div>
                </section>
              </article>
              <!-- .comment-reply -->
              <article id="comment-id-2" class="comment-item comment-reply"> <a class="pull-left thumb-sm avatar"> <img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"> </a> <span class="arrow left"></span>
                <section class="comment-body panel panel-default text-sm">
                  <div class="panel-body"> <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 10m ago </span> <a href="#">Mika Sam</a>
                    <label class="label bg-dark m-l-xs">Admin</label>
                    Report this comment is helpful </div>
                </section>
              </article>
              <!-- / .comment-reply -->
              <article id="comment-id-3" class="comment-item"> <a class="pull-left thumb-sm avatar"><img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"></a> <span class="arrow left"></span>
                <section class="comment-body panel panel-default">
                  <header class="panel-heading"> <a href="#">By me</a>
                    <label class="label bg-success m-l-xs">User</label>
                    <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 1h ago </span> </header>
                  <div class="panel-body">
                    <div>This comment was posted by you.</div>
                    <div class="comment-action m-t-sm"> <a href="#comment-id-3" data-dismiss="alert" class="btn btn-default btn-xs"> <i class="fa fa-trash-o text-muted"></i> Remove </a> </div>
                  </div>
                </section>
              </article>
              <article id="comment-id-4" class="comment-item"> <a class="pull-left thumb-sm avatar"><img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"></a> <span class="arrow left"></span>
                <section class="comment-body panel panel-default">
                  <header class="panel-heading"> <a href="#">Peter</a>
                    <label class="label bg-primary m-l-xs">Vip</label>
                    <span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 2hs ago </span> </header>
                  <div class="panel-body">
                    <blockquote>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
                    <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...</div>
                    <div class="comment-action m-t-sm"> <a href="#" data-toggle="class" class="btn btn-default btn-xs"> <i class="fa fa-star-o text-muted text"></i> <i class="fa fa-star text-danger text-active"></i> Like </a> <a href="#comment-form" class="btn btn-default btn-xs"><i class="fa fa-mail-reply text-muted"></i> Reply</a> </div>
                  </div>
                </section>
              </article>
              <!-- comment form -->
              <article class="comment-item media" id="comment-form"> <a class="pull-left thumb-sm avatar"><img src="/excavator/Public/Admin/images/avatar.jpg" class="img-circle"></a>
                <section class="media-body">
                  <form action="" class="m-b-none">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Input your comment here">
                      <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">POST</button>
                          </span> </div>
                  </form>
                </section>
              </article>
            </section>
            <!-- / .comment-list --> </div>
        </div>
      </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>

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