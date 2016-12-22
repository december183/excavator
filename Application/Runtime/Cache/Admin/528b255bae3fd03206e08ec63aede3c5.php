<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Master</title>
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
                <li> <a href="/excavator/index.php/Admin/Page/logout" data-toggle="ajaxModal" >Logout</a> </li>
            </ul>
        </li>
    </ul>
</header>
    <!-- /header -->
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-light lter b-r aside-md hidden-print" id="nav">
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
        <footer class="footer lt hidden-xs b-t b-light">
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
            <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-default btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>
            <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-default" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-default" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
            </div>
        </footer>
    </section>
</aside>
            <!-- /.aside -->
            <!-- content -->
            
  <section id="content">
    <section class="hbox stretch">
      <aside class="aside-md bg-white b-r" id="subNav">
        <div class="wrapper b-b header">Submenu Header</div>
        <ul class="nav">
          <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Phasellus at ultricies</a></li>
          <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Malesuada augue</a></li>
          <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Donec eleifend</a></li>
          <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Dapibus porta</a></li>
          <li class="b-b b-light"><a href="#"><i class="fa fa-chevron-right pull-right m-t-xs text-xs icon-muted"></i>Dacus eu neque</a></li>
        </ul>
      </aside>
      <aside>
        <section class="vbox">
          <header class="header bg-white b-b clearfix">
            <div class="row m-t-sm">
              <div class="col-sm-8 m-b-xs"> <a href="#subNav" data-toggle="class:hide" class="btn btn-sm btn-default active"><i class="fa fa-caret-right text fa-lg"></i><i class="fa fa-caret-left text-active fa-lg"></i></a>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></button>
                  <button type="button" class="btn btn-sm btn-default" title="Remove"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-sm btn-default" title="Filter" data-toggle="dropdown"><i class="fa fa-filter"></i> <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <a href="modal.html" data-toggle="ajaxModal" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Create</a> </div>
              <div class="col-sm-4 m-b-xs">
                <div class="input-group">
                  <input type="text" class="input-sm form-control" placeholder="Search">
                  <span class="input-group-btn">
                      <button class="btn btn-sm btn-default" type="button">Go!</button>
                      </span> </div>
              </div>
            </div>
          </header>
          <section class="scrollable wrapper w-f">
            <section class="panel panel-default">
              <div class="table-responsive">
                <table class="table table-striped m-b-none">
                  <thead>
                  <tr>
                    <th width="20"><input type="checkbox"></th>
                    <th width="20"></th>
                    <th class="th-sortable" data-toggle="class">Project <span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i> </span> </th>
                    <th>Task</th>
                    <th>Date</th>
                    <th width="30"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="2"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Idrawfast</td>
                    <td>4c</td>
                    <td>Jul 25, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="3"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Formasa</td>
                    <td>8c</td>
                    <td>Jul 22, 2013</td>
                    <td><a href="#" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="4"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Avatar system</td>
                    <td>15c</td>
                    <td>Jul 15, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="4"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Throwdown</td>
                    <td>4c</td>
                    <td>Jul 11, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="5"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Idrawfast</td>
                    <td>4c</td>
                    <td>Jul 7, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="6"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Formasa</td>
                    <td>8c</td>
                    <td>Jul 3, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="7"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Avatar system </b></td>
                    <td>15c</td>
                    <td>Jul 2, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="8"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Videodown</td>
                    <td>4c</td>
                    <td>Jul 1, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="4"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Throwdown</td>
                    <td>4c</td>
                    <td>Jul 11, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="5"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Idrawfast</td>
                    <td>4c</td>
                    <td>Jul 7, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="6"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Formasa</td>
                    <td>8c</td>
                    <td>Jul 3, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="7"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Avatar system </b></td>
                    <td>15c</td>
                    <td>Jul 2, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="8"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Videodown</td>
                    <td>4c</td>
                    <td>Jul 1, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="4"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Throwdown</td>
                    <td>4c</td>
                    <td>Jul 11, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="5"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Idrawfast</td>
                    <td>4c</td>
                    <td>Jul 7, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="6"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Formasa</td>
                    <td>8c</td>
                    <td>Jul 3, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="7"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Avatar system </b></td>
                    <td>15c</td>
                    <td>Jul 2, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="post[]" value="8"></td>
                    <td><a href="#modal" data-toggle="modal"><i class="fa fa-search-plus"></i></a></td>
                    <td>Videodown</td>
                    <td>4c</td>
                    <td>Jul 1, 2013</td>
                    <td><a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </section>
          <footer class="footer bg-white b-t">
            <div class="row text-center-xs">
              <div class="col-md-6 hidden-sm">
                <p class="text-muted m-t">Showing 20-30 of 50</p>
              </div>
              <div class="col-md-6 col-sm-12 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-sm m-b-none">
                  <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
              </div>
            </div>
          </footer>
        </section>
      </aside>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
  <div class="modal fade" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Idrawfast 02/2013</h4>
        </div>
        <div class="modal-body">
          <p>This is a table in a modal, click the trash icon to remove the item</p>
          <section class="panel panel-default m-l-n-md m-r-n-md m-b-none">
            <header class="panel-heading"> <span class="label bg-danger pull-right">4 left</span> Tasks </header>
            <table class="table table-striped m-b-none text-sm">
              <thead>
              <tr>
                <th>Progress</th>
                <th>Item</th>
                <th width="20"></th>
              </tr>
              </thead>
              <tbody>
              <tr id="item-1">
                <td><div class="progress progress-sm progress-striped active m-t-xs m-b-none">
                  <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
                </div></td>
                <td>App prototype design</td>
                <td class="text-right"><a href="#item-1" data-dismiss="alert"><i class="fa fa-trash-o"></i></a></td>
              </tr>
              <tr id="item-2">
                <td><div class="progress progress-xs m-t-xs m-b-none">
                  <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                </div></td>
                <td>Design documents</td>
                <td class="text-right"><a href="#item-2" data-dismiss="alert"><i class="fa fa-trash-o"></i></a></td>
              </tr>
              <tr id="item-3">
                <td><div class="progress progress-xs m-t-xs m-b-none">
                  <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="20%" style="width: 20%"></div>
                </div></td>
                <td>UI toolkit</td>
                <td class="text-right"><a href="#item-3" data-dismiss="alert"><i class="fa fa-trash-o"></i></a></td>
              </tr>
              <tr id="item-4">
                <td><div class="progress progress-xs m-t-xs m-b-none">
                  <div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%"></div>
                </div></td>
                <td>Testing</td>
                <td class="text-right"><a href="#item-4" data-dismiss="alert"><i class="fa fa-trash-o"></i></a></td>
              </tr>
              </tbody>
            </table>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info" data-loading-text="Updating...">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content --> </div>
    <!-- /.modal-dialog --> </div>

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