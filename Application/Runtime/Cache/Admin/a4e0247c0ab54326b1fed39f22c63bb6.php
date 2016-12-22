<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Lists</title>
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
            
  <link rel="stylesheet" href="/excavator/Public/Admin/js/nestable/nestable.css" type="text/css" cache="false" />
  <script src="/excavator/Public/Admin/js/sortable/jquery.sortable.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/nestable/jquery.nestable.js" cache="false"></script>
  <script src="/excavator/Public/Admin/js/nestable/demo.js" cache="false"></script>
  <section id="content">
    <section class="vbox">
      <header class="header bg-light bg-gradient b-b">
        <p>List groups</p>
      </header>
      <section class="scrollable wrapper">
        <div class="">
          <h4 class="m-t-none">Sortable list <small>(drag to sort)</small></h4>
          <ul class="list-group gutter list-group-lg list-group-sp sortable">
            <li class="list-group-item"> <span class="pull-right" > <a href="#"><i class="fa fa-pencil icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-plus icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-times icon-muted fa-fw"></i></a> </span> <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 01</span>
              <div class="clear"> Browser compatibility </div>
            </li>
            <li class="list-group-item"> <span class="pull-right" > <a href="#"><i class="fa fa-pencil icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-plus icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-times icon-muted fa-fw"></i></a> </span> <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 02</span>
              <div class="clear"> Looking for more example templates </div>
            </li>
            <li class="list-group-item"> <span class="pull-right" > <a href="#"><i class="fa fa-pencil icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-plus icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-times icon-muted fa-fw"></i></a> </span> <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 03</span>
              <div class="clear"> Customizing components </div>
            </li>
            <li class="list-group-item"> <span class="pull-right" > <a href="#"><i class="fa fa-pencil icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-plus icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-times icon-muted fa-fw"></i></a> </span> <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 04</span>
              <div class="clear"> The fastest way to get started </div>
            </li>
            <li class="list-group-item"> <span class="pull-right" > <a href="#"><i class="fa fa-pencil icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-plus icon-muted fa-fw m-r-xs"></i></a> <a href="#"><i class="fa fa-times icon-muted fa-fw"></i></a> </span> <span class="pull-left media-xs"><i class="fa fa-sort text-muted fa m-r-sm"></i> 05</span>
              <div class="clear"> HTML5 doctype required </div>
            </li>
          </ul>
        </div>
        <h4 class="m-t-none">Nestable list
          <button id="nestable-menu" class="btn btn-xs btn-default active" data-toggle="class:show"> <i class="fa fa-plus text"></i> <span class="text">Expand All</span> <i class="fa fa-minus text-active"></i> <span class="text-active">Collapse All</span> </button>
        </h4>
        <div class="row m-b">
          <div class="col-sm-4">
            <div class="dd" id="nestable1">
              <ol class="dd-list">
                <li class="dd-item" data-id="1">
                  <div class="dd-handle">Item 1</div>
                </li>
                <li class="dd-item" data-id="2">
                  <div class="dd-handle">Item 2</div>
                  <ol class="dd-list">
                    <li class="dd-item" data-id="3">
                      <div class="dd-handle">Item 3</div>
                    </li>
                    <li class="dd-item" data-id="4">
                      <div class="dd-handle">Item 4</div>
                    </li>
                    <li class="dd-item" data-id="5">
                      <div class="dd-handle">Item 5</div>
                      <ol class="dd-list">
                        <li class="dd-item" data-id="6">
                          <div class="dd-handle">Item 6</div>
                        </li>
                        <li class="dd-item" data-id="7">
                          <div class="dd-handle">Item 7</div>
                        </li>
                        <li class="dd-item" data-id="8">
                          <div class="dd-handle">Item 8</div>
                        </li>
                      </ol>
                    </li>
                    <li class="dd-item" data-id="9">
                      <div class="dd-handle">Item 9</div>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="dd" id="nestable2">
              <ol class="dd-list">
                <li class="dd-item" data-id="10">
                  <div class="dd-handle">Item 10</div>
                  <ol class="dd-list">
                    <li class="dd-item" data-id="11">
                      <div class="dd-handle">Item 11</div>
                    </li>
                  </ol>
                </li>
                <li class="dd-item" data-id="12">
                  <div class="dd-handle">Item 12</div>
                </li>
                <li class="dd-item" data-id="13">
                  <div class="dd-handle">Item 13</div>
                </li>
                <li class="dd-item" data-id="14">
                  <div class="dd-handle">Item 14</div>
                </li>
                <li class="dd-item" data-id="15">
                  <div class="dd-handle">Item 15</div>
                  <ol class="dd-list">
                    <li class="dd-item" data-id="16">
                      <div class="dd-handle">Item 16</div>
                    </li>
                    <li class="dd-item" data-id="17">
                      <div class="dd-handle">Item 17</div>
                    </li>
                    <li class="dd-item" data-id="18">
                      <div class="dd-handle">Item 18</div>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="dd" id="nestable3">
              <ol class="dd-list">
                <li class="dd-item dd3-item" data-id="13">
                  <div class="dd-handle dd3-handle">Drag</div>
                  <div class="dd3-content">Item 13</div>
                </li>
                <li class="dd-item dd3-item" data-id="14">
                  <div class="dd-handle dd3-handle">Drag</div>
                  <div class="dd3-content">Item 14</div>
                </li>
                <li class="dd-item dd3-item" data-id="15">
                  <div class="dd-handle dd3-handle">Drag</div>
                  <div class="dd3-content">Item 15</div>
                  <ol class="dd-list">
                    <li class="dd-item dd3-item" data-id="16">
                      <div class="dd-handle dd3-handle">Drag</div>
                      <div class="dd3-content">Item 16</div>
                    </li>
                    <li class="dd-item dd3-item" data-id="17">
                      <div class="dd-handle dd3-handle">Drag</div>
                      <div class="dd3-content">Item 17</div>
                    </li>
                    <li class="dd-item dd3-item" data-id="18">
                      <div class="dd-handle dd3-handle">Drag</div>
                      <div class="dd3-content">Item 18</div>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="list-group bg-white"> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <span class="badge">201</span> <i class="fa fa-envelope icon-muted fa-fw"></i> Inbox </a> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <span class="badge bg-info">5021</span> <i class="fa fa-eye icon-muted fa-fw"></i> Profile visits </a> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <span class="badge bg-success">14</span> <i class="fa fa-phone icon-muted fa-fw"></i> Call </a> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <span class="badge bg-dark">20</span> <i class="fa fa-comments-o icon-muted fa-fw"></i> Messages </a> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <span class="badge">14</span> <i class="fa fa-bookmark icon-muted fa-fw"></i> Bookmarks </a> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <span class="badge bg-info">30</span> <i class="fa fa-bell icon-muted fa-fw"></i> Notifications </a> <a href="#" class="list-group-item"> <i class="fa fa-chevron-right icon-muted"></i> <span class="badge bg-danger">10</span> <i class="fa fa-clock-o icon-muted fa-fw"></i> Watch </a> </div>
          </div>
          <div class="col-sm-6">
            <section class="panel panel-default">
              <header class="panel-heading">
                <div class="input-group text-sm">
                  <input type="text" class="input-sm form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
              </header>
              <ul class="list-group alt">
                <li class="list-group-item">
                  <div class="media"> <span class="pull-left thumb-sm"><img src="/excavator/Public/Admin/images/avatar.jpg" alt="John said" class="img-circle"></span>
                    <div class="pull-right text-success m-t-sm"> <i class="fa fa-circle"></i> </div>
                    <div class="media-body">
                      <div><a href="#">Chris Fox</a></div>
                      <small class="text-muted">about 2 minutes ago</small> </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media"> <span class="pull-left thumb-sm"><img src="/excavator/Public/Admin/images/avatar.jpg" alt="John said" class="img-circle"></span>
                    <div class="pull-right text-muted m-t-sm"> <i class="fa fa-circle"></i> </div>
                    <div class="media-body">
                      <div><a href="#">Amanda Conlan</a></div>
                      <small class="text-muted">about 2 hours ago</small> </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media"> <span class="pull-left thumb-sm"><img src="/excavator/Public/Admin/images/avatar.jpg" alt="John said" class="img-circle"></span>
                    <div class="pull-right text-warning m-t-sm"> <i class="fa fa-circle"></i> </div>
                    <div class="media-body">
                      <div><a href="#">Dan Doorack</a></div>
                      <small class="text-muted">3 days ago</small> </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="media"> <span class="pull-left thumb-sm"><img src="/excavator/Public/Admin/images/avatar.jpg" alt="John said" class="img-circle"></span>
                    <div class="pull-right text-danger m-t-sm"> <i class="fa fa-circle"></i> </div>
                    <div class="media-body">
                      <div><a href="#">Lauren Taylor</a></div>
                      <small class="text-muted">about 2 minutes ago</small> </div>
                  </div>
                </li>
              </ul>
            </section>
          </div>
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