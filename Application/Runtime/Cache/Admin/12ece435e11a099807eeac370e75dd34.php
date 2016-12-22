<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Components</title>
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
            
  <link rel="stylesheet" href="/excavator/Public/Admin/js/fuelux/fuelux.css" type="text/css" cache="false" />
  <!-- fuelux -->
  <script src="/excavator/Public/Admin/js/fuelux/fuelux.js" cache="false"></script>
  <section id="content">
    <section class="vbox">
      <header class="header bg-light dker bg-gradient">
        <p>Components</p>
      </header>
      <section class="scrollable wrapper">
        <div class="row">
          <div class="col-lg-12"> <!-- .breadcrumb -->
            <ul class="breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#"><i class="fa fa-list-ul"></i> Elements</a></li>
              <li class="active">Components</li>
            </ul>
            <!-- / .breadcrumb --> </div>
          <div class="col-lg-6"> <!-- .crousel slide -->
            <section class="panel panel-default">
              <div class="carousel slide auto panel-body" id="c-slide">
                <ol class="carousel-indicators out">
                  <li data-target="#c-slide" data-slide-to="0" class="active"></li>
                  <li data-target="#c-slide" data-slide-to="1" class=""></li>
                  <li data-target="#c-slide" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <p class="text-center"> <em class="h4 text-mute">Save your time</em><br>
                      <small class="text-muted">Many components</small> </p>
                  </div>
                  <div class="item">
                    <p class="text-center"> <em class="h4 text-mute">Nice and easy to use</em><br>
                      <small class="text-muted">Full documents</small> </p>
                  </div>
                  <div class="item">
                    <p class="text-center"> <em class="h4 text-mute">Mobile header first</em><br>
                      <small class="text-muted">Mobile/Tablet/Desktop</small> </p>
                  </div>
                </div>
                <a class="left carousel-control" href="#c-slide" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="right carousel-control" href="#c-slide" data-slide="next"> <i class="fa fa-angle-right"></i> </a> </div>
            </section>
            <!-- / .carousel slide --> </div>
          <div class="col-lg-6"> <!-- .crousel fade -->
            <section class="panel bg-dark">
              <div class="carousel slide carousel-fade panel-body" id="c-fade">
                <ol class="carousel-indicators out">
                  <li data-target="#c-fade" data-slide-to="0" class=""></li>
                  <li data-target="#c-fade" data-slide-to="1" class="active"></li>
                  <li data-target="#c-fade" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <p class="text-center"> <em class="h4 text-mute">Save your time</em><br>
                      <small class="text-muted">Many components</small> </p>
                  </div>
                  <div class="item active">
                    <p class="text-center"> <em class="h4 text-mute">Nice and easy to use</em><br>
                      <small class="text-muted">Full documents</small> </p>
                  </div>
                  <div class="item">
                    <p class="text-center"> <em class="h4 text-mute">Mobile header first</em><br>
                      <small class="text-muted">Mobile/Tablet/Desktop</small> </p>
                  </div>
                </div>
                <a class="left carousel-control" href="#c-fade" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="right carousel-control" href="#c-fade" data-slide="next"> <i class="fa fa-angle-right"></i> </a> </div>
            </section>
            <!-- / .carousel fade --> </div>
          <div class="col-lg-6"> <!-- .accordion -->
            <div class="panel-group m-b" id="accordion2">
              <div class="panel panel-default">
                <div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> Collapsible Group Item #1 </a> </div>
                <div id="collapseOne" class="panel-collapse in">
                  <div class="panel-body text-sm"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> Collapsible Group Item #2 </a> </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body text-sm"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> Collapsible Group Item #3 </a> </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body text-sm"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                </div>
              </div>
            </div>
            <!-- / .accordion --> <!-- .nav-justified -->
            <section class="panel panel-default">
              <header class="panel-heading bg-light">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                  <li><a href="#profile" data-toggle="tab">Profile</a></li>
                  <li><a href="#messages" data-toggle="tab">Messages</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="home">home</div>
                  <div class="tab-pane" id="profile">profile</div>
                  <div class="tab-pane" id="messages">message</div>
                  <div class="tab-pane" id="settings">settings</div>
                </div>
              </div>
            </section>
            <!-- / .nav-justified --> <!-- left tab -->
            <section class="panel panel-default">
              <header class="panel-heading bg-light">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#messages-1" data-toggle="tab"><i class="fa fa-comments text-default"></i></a></li>
                  <li><a href="#profile-1" data-toggle="tab"><i class="fa fa-user text-default"></i> Profile</a></li>
                  <li><a href="#settings-1" data-toggle="tab"><i class="fa fa-cog text-default"></i> Settings</a></li>
                </ul>
                <span class="hidden-sm">Right tab</span> </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="messages-1">message</div>
                  <div class="tab-pane" id="profile-1">profile</div>
                  <div class="tab-pane" id="settings-1">settings</div>
                </div>
              </div>
            </section>
            <!-- / left tab --> <!-- right tab -->
            <section class="panel panel-default">
              <header class="panel-heading text-right bg-light">
                <ul class="nav nav-tabs pull-left">
                  <li><a href="#messages-2" data-toggle="tab"><i class="fa fa-comments text-default"></i></a></li>
                  <li class="active"><a href="#profile-2" data-toggle="tab"><i class="fa fa-user text-default"></i> Profile</a></li>
                  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog text-default"></i> Settings <b class="caret"></b></a>
                    <ul class="dropdown-menu text-left">
                      <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
                      <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
                    </ul>
                  </li>
                </ul>
                <span class="hidden-sm">Left tab</span> </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane fade" id="messages-2">message</div>
                  <div class="tab-pane fade active in" id="profile-2">profile</div>
                  <div class="tab-pane fade" id="dropdown1">dropdown1</div>
                  <div class="tab-pane fade" id="dropdown2">dropdown2</div>
                </div>
              </div>
            </section>
            <!-- / right tab --> <!-- .dropdown -->
            <section class="panel panel-default pos-rlt clearfix">
              <header class="panel-heading">
                <ul class="nav nav-pills pull-right">
                  <li> <a href="#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a> </li>
                </ul>
                Dropdown </header>
              <div class="panel-body clearfix">
                <div class="dropdown pull-left m-r">
                  <ul class="dropdown-menu pos-stc inline" role="menu" aria-labelledby="dropdownMenu">
                    <li><a tabindex="-1" href="#">Action</a></li>
                    <li><a tabindex="-1" href="#">Another action</a></li>
                    <li><a tabindex="-1" href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-submenu"> <a tabindex="-1" href="#">Separated link</a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li><a tabindex="-1" href="#">Action</a></li>
                        <li><a tabindex="-1" href="#">Another action</a></li>
                        <li><a tabindex="-1" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="dropdown dropup pull-left">
                  <ul class="dropdown-menu bg-inverse pos-stc inline" role="menu" aria-labelledby="dropdownMenu">
                    <li><a tabindex="-1" href="#">Action</a></li>
                    <li><a tabindex="-1" href="#">Another action</a></li>
                    <li><a tabindex="-1" href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-submenu"> <a tabindex="-1" href="#">Separated link</a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu pull-left"> <a tabindex="-1" href="#">Action</a>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li><a tabindex="-1" href="#">Action</a></li>
                            <li><a tabindex="-1" href="#">Another action</a></li>
                            <li><a tabindex="-1" href="#">Something else here</a></li>
                          </ul>
                        </li>
                        <li><a tabindex="-1" href="#">Another action</a></li>
                        <li><a tabindex="-1" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
            <!-- / .dropmenu --> <!-- .tooltip & popup -->
            <section class="panel panel-default text-sm doc-buttons">
              <div class="panel-body">
                <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">On right</button>
                <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">On bottom</button>
                <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">On left</button>
                <button class="btn btn-sm btn-info" data-toggle="popover" data-html="true" data-placement="top" data-content="<div class='scrollable' style='height:40px'>Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>" title="" data-original-title='<button type="button" class="close pull-right" data-dismiss="popover">&times;</button>Popover on top'>Popover on top</button>
                <a href="modal.html" data-toggle="ajaxModal" class="btn btn-sm btn-default">Modal</a> </div>
            </section>
            <section class="panel panel-default">
              <div class="wizard clearfix">
                <ul class="steps">
                  <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Step 1</li>
                  <li data-target="#step2"><span class="badge">2</span>Step 2</li>
                  <li data-target="#step3"><span class="badge">3</span>Step 3</li>
                </ul>
                <div class="actions">
                  <button type="button" class="btn btn-default btn-xs btn-prev" disabled="disabled">Prev</button>
                  <button type="button" class="btn btn-default btn-xs btn-next" data-last="Finish">Next</button>
                </div>
              </div>
              <div class="step-content">
                <div class="step-pane active" id="step1">This is step 1</div>
                <div class="step-pane" id="step2">This is step 2</div>
                <div class="step-pane" id="step3">This is step 3</div>
              </div>
            </section>
            <section class="panel panel-default clearfix">
              <div class="wizard wizard-vertical clearfix" id="wizard-2">
                <ul class="steps">
                  <li data-target="#step4" class="active"><span class="badge badge-info">1</span>Get it!</li>
                  <li data-target="#step5"><span class="badge">2</span>Unzip it</li>
                  <li data-target="#step6"><span class="badge">3</span>Finish</li>
                </ul>
              </div>
              <div class="step-content">
                <div class="step-pane active" id="step4">
                  <p>You can get this theme at <a href="http://themeforest.net/user/Flatfull/portfolio"><strong>here</strong></a> <br>
                    <small class="text-muted">Do not forget to rate it when you get it.</small></p>
                </div>
                <div class="step-pane" id="step5">
                  <p>Unzipping this file, please wait it complete...</p>
                  <div class="progress progress-xs m-t-sm">
                    <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                  </div>
                  <p class="text-muted"><small>Some features you need know...</small></p>
                </div>
                <div class="step-pane" id="step6">
                  <p>Thank you for choose this theme for your web application. <br>
                    Have Fun!</p>
                </div>
                <div class="actions m-t text-right">
                  <button type="button" class="btn btn-default btn-sm btn-prev" data-target="#wizard-2" data-wizard="previous" disabled="disabled">Prev</button>
                  <button type="button" class="btn btn-default btn-sm btn-next" data-target="#wizard-2" data-wizard="next" data-last="Finish">Next</button>
                </div>
              </div>
            </section>
          </div>
          <div class="col-lg-6">
            <section class="panel panel-default" id="progressbar">
              <header class="panel-heading">
                <ul class="nav nav-pills pull-right">
                  <li><a href="#" data-toggle="progress" data-target="#progressbar">Random</a></li>
                </ul>
                Progress bar </header>
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="progress progress-xs m-t-sm">
                    <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                  </div>
                  <div class="progress progress-xs progress-striped">
                    <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="10%" style="width: 10%"></div>
                  </div>
                  <div class="progress progress-xs progress-striped">
                    <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="30%" style="width: 30%"></div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="progress progress-sm m-t-sm">
                    <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="10%" style="width: 10%"></div>
                  </div>
                  <div class="progress progress-sm progress-striped active">
                    <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="30%" style="width: 30%"></div>
                  </div>
                  <div class="progress progress-sm progress-striped">
                    <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="20%" style="width: 20%"></div>
                  </div>
                  <div class="progress progress-sm progress-striped">
                    <div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="10%" style="width: 10%"></div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="progress m-t-sm">
                    <div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                    <div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="10%" style="width: 10%"></div>
                    <div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%"></div>
                  </div>
                </li>
              </ul>
            </section>
          </div>
          <div class="col-lg-6"> <!-- .label and .badge -->
            <div class="m-b-lg text-center">
              <p> <span class="label bg-light">label</span> <span class="label bg-primary">Primary</span> <span class="label bg-success">Success</span> <span class="label bg-info">Info</span> <span class="label bg-dark">Inverse</span> <span class="label bg-warning">Warning</span> <span class="label bg-danger">Danger</span> </p>
              <p class="m-b-none"> <span class="badge">15</span> <span class="badge bg-primary">15</span> <span class="badge bg-success">20</span> <span class="badge bg-info">21</span> <span class="badge bg-dark">13</span> <span class="badge bg-warning">35</span> <span class="badge bg-danger">32</span> </p>
            </div>
            <!-- / .label and .badge -->
            <div class="alert alert-warning alert-block">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4><i class="fa fa-bell-alt"></i>Warning!</h4>
              <p>Best check yo self, you're not looking too good...</p>
            </div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <i class="fa fa-ban-circle"></i><strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again. </div>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <i class="fa fa-ok-sign"></i><strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>. </div>
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <i class="fa fa-info-sign"></i><strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important. </div>
            <div class="text-center">
              <ul class="pagination pagination-lg">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
            <div class="text-center">
              <ul class="pagination pagination">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
            <div class="text-center">
              <ul class="pagination pagination-sm">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
              </ul>
            </div>
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