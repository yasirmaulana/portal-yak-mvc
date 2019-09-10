<?php
// session_start();
$isID = $_SESSION["id"];

// require 'functions.php';


// var_dump($menuFR);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashoarad</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= BASEURL ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASEURL ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= BASEURL ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?= BASEURL ?>/bower_components/morris.js/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASEURL ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= BASEURL ?>/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- <div class="wrapper"> -->

<header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>P</b>YAK</span>
      <span class="logo-lg"><b>Portal</b>YAK</span>
    </a>

    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= BASEURL ?>/dist/img/avatar6.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= BASEURL ?>/dist/img/avatar6.png" class="img-circle" alt="User Image">
            
                <p>
                  <?php echo $_SESSION['username']; ?> 
                  <!-- - Web Developer -->
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <!-- <a href="#">Followers</a> -->
                  </div>
                  <div class="col-xs-4 text-center">
                    <!-- <a href="#">Sales</a> -->
                  </div>
                  <div class="col-xs-4 text-center">
                    <!-- <a href="#">Friends</a> -->
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <form action="../includes/logout.php" method="post">
                        <button class="btn btn-default btn-flat" type="submit">Sign out</button>
                    </form>
                </div>
              </li>
            </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
      </div>
    </nav>

    <!-- <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        </ul>
      </div>
    </nav> -->
  </header>



    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= BASEURL ?>/dist/img/avatar6.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["username"]; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?= $menu['master']; ?>
        <li class="treeview">
          <?php if (sizeof($menuMaster) > 0 ) { ?>
          <a href="#">
            <i class="fa fa-folder-o"></i><span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <?php } ?>
          <ul class="treeview-menu">
            <?php foreach ($menuMaster as $menumaster) : ?>
            <li><a href="<?= $menumaster['url']; ?>"><i class="fa fa-circle-o"></i> <?= $menumaster["submenu"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li><li class="treeview">
            <?php if (sizeof($menuIT) > 0 ) { ?>
          <a href="#">
            
            <i class="fa fa-desktop"></i><span>IT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

          </a>
            <?php } ?>
          <ul class="treeview-menu">
            <?php foreach ($menuIT as $menuit) : ?>
            <li><a href="<?= $menuit['url']; ?>"><i class="fa fa-circle-o"></i> <?= $menuit["submenu"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="treeview">
            <?php if (sizeof($menuFR) > 0 ) { ?>
          <a href="#">

            <i class="fa fa-handshake-o"></i><span>Fundrising</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

          </a>
            <?php } ?>
          <ul class="treeview-menu">
            <?php foreach ($menuFR as $menu) : ?>
            <li><a href="<?= $menu['url']; ?>"><i class="fa fa-circle-o"></i> <?= $menu["submenu"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>

        <li class="treeview">
            <?php if (sizeof($menuOta) > 0 ) { ?>
          <a href="#">

            <i class="fa fa-users"></i><span>OTA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

          </a>
            <?php } ?>
          <ul class="treeview-menu">
            <?php foreach ($menuOta as $menu) : ?>
            <li><a href="<?= $menu['url']; ?>"><i class="fa fa-circle-o"></i> <?= $menu["submenu"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="treeview">
            <?php if (sizeof($menuCrm) > 0 ) { ?>
          <a href="#">
  
            <i class="fa fa-phone"></i><span>CRM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

          </a>
            <?php } ?>
          <ul class="treeview-menu">
            <?php foreach ($menuCrm as $menucrm) : ?>
            <li><a href="<?= $menucrm['url']; ?>"><i class="fa fa-circle-o"></i> <?= $menucrm["submenu"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="treeview">
            <?php if (sizeof($menuFin) > 0 ) { ?>
          <a href="#">
  
            <i class="fa fa-money"></i><span>Keuangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

          </a>
            <?php } ?>
          <ul class="treeview-menu">
            <?php foreach ($menuFin as $menufin) : ?>
            <li><a href="<?= $menufin['url']; ?>"><i class="fa fa-circle-o"></i> <?= $menufin["submenu"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <!-- <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li> -->
      <!-- <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li> -->
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  