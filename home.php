<?php 
include 'koneksi.php';
$coba22 = sqlsrv_query($koneksi, "SELECT * FROM apd_base.dbo.work_order,apd_base.dbo.gi,apd_base.dbo.pen,apd_base.dbo.bagian WHERE work_order.id_gi=gi.id_gi AND work_order.id_pen=pen.id_pen AND work_order.id_bag=bagian.id_bag AND type_wo='rutin' AND work_order.status='proses' AND work_order.id_bag = 1 ORDER BY work_order.id_wo ASC");
$coba23 = sqlsrv_query($koneksi, "SELECT * FROM apd_base.dbo.work_order,apd_base.dbo.gi,apd_base.dbo.pen,apd_base.dbo.bagian WHERE work_order.id_gi=gi.id_gi AND work_order.id_pen=pen.id_pen AND work_order.id_bag=bagian.id_bag AND type_wo='rutin' AND work_order.status='proses' AND work_order.id_bag = 2 ORDER BY work_order.id_wo ASC");
$coba24 = sqlsrv_query($koneksi, "SELECT * FROM apd_base.dbo.work_order,apd_base.dbo.gi,apd_base.dbo.pen,apd_base.dbo.bagian WHERE work_order.id_gi=gi.id_gi AND work_order.id_pen=pen.id_pen AND work_order.id_bag=bagian.id_bag AND type_wo='rutin' AND work_order.status='proses' AND work_order.id_bag = 3 ORDER BY work_order.id_wo ASC");
$coba25 = sqlsrv_query($koneksi, "SELECT * FROM apd_base.dbo.work_order,apd_base.dbo.gi,apd_base.dbo.pen,apd_base.dbo.bagian WHERE work_order.id_gi=gi.id_gi AND work_order.id_pen=pen.id_pen AND work_order.id_bag=bagian.id_bag AND type_wo='rutin' AND work_order.status='proses' AND work_order.id_bag = 4 ORDER BY work_order.id_wo ASC");
$coba26 = sqlsrv_query($koneksi, "SELECT * FROM apd_base.dbo.work_order,apd_base.dbo.gi,apd_base.dbo.pen,apd_base.dbo.bagian WHERE work_order.id_gi=gi.id_gi AND work_order.id_pen=pen.id_pen AND work_order.id_bag=bagian.id_bag AND type_wo='rutin' AND work_order.status='proses' AND work_order.id_bag = 5 ORDER BY work_order.id_wo ASC");
?>
<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PLN APD Jatim</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="dist/img/pln.jpg" class="img-square" width="30px" alt="User Image"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="dist/img/pln.jpg" class="img-square" width="30px" alt="User Image"><b> APD</b>Jatim</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="login.php">
                <i class="fa fa-user"></i>
                <span class="hidden-xs">Login</span>
              </a>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          DAFTAR PEKERJAAN TIAP BAGIAN
          <!-- <small>Layout with collapsed sidebar on load</small> -->
        </h1>
        <!-- <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Collapsed Sidebar</li>
        </ol> -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">SCADA</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Nama G.I</th>
                    <th class="col-md-1">Penyulang</th>
                    <th class="col-md-1">Tanggal Gangguan</th>
                    <th class="col-md-1">Keterangan</th>
                    <th class="col-md-1">Status</th>
                    <th class="col-md-1">Tanggal Selesai</th>
                  </tr>
                  <?php
                  while ($lihat = sqlsrv_fetch_array($coba22)) {
                    ?>
                    <tr>
                      <td><a href="#"><?php echo $lihat['id_wo']; ?></a></td>
                      <td><?php echo $lihat['nama_gi']; ?></td>
                      <td><?php echo $lihat['nama_pen']; ?></td>
                      <td><?php echo $lihat['tanggal_gangguan']->format('d/m/Y');?></td>
                      <td><?php echo $lihat['keterangan']; ?></td>
                      <?php
                      if ($lihat['status'] =='proses') { ?>
                      <td><span class="label label-danger"><?php echo $lihat['status'] ?></span></td>
                      <?php } else if($lihat['status']=='selesai') { ?>
                      <td><span class="label label-success"><?php echo $lihat['status'] ?></span></td>
                      <?php } ?>
                      <td><?php echo $lihat['tanggal_selesai']; ?></td>

                    </tr>
                    <?php
                  }
                  ?>
                  

                </table>
              </div>
              <!-- /.box-body -->
              
            </div>
            <!-- /.box -->

            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Pemeliharaan</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Nama G.I</th>
                    <th class="col-md-1">Penyulang</th>
                    <th class="col-md-1">Tanggal Gangguan</th>
                    <th class="col-md-1">Keterangan</th>
                    <th class="col-md-1">Status</th>
                    <th class="col-md-1">Tanggal Selesai</th>

                  </tr>
                  <?php
                  while ($lihat3 = sqlsrv_fetch_array($coba24)) {
                    ?>
                    <tr>
                      <td><a href="#"><?php echo $lihat3['id_wo']; ?></a></td>
                      <td><?php echo $lihat3['nama_gi']; ?></td>
                      <td><?php echo $lihat3['nama_pen']; ?></td>
                      <td><?php echo $lihat3['tanggal_gangguan']->format('d/m/Y');?></td>
                      <td><?php echo $lihat3['keterangan']; ?></td>
                      <?php
                      if ($lihat3['status'] =='proses') { ?>
                      <td><span class="label label-danger"><?php echo $lihat3['status'] ?></span></td>
                      <?php } else if($lihat3['status']=='selesai') { ?>
                      <td><span class="label label-success"><?php echo $lihat3['status'] ?></span></td>
                      <?php } ?>
                      <td><?php echo $lihat3['tanggal_selesai']; ?></td>

                    </tr>
                    <?php
                  }
                  ?>
                  
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">SCADA dan Pemelihaan</h3>

              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Nama G.I</th>
                    <th class="col-md-1">Penyulang</th>
                    <th class="col-md-1">Tanggal Gangguan</th>
                    <th class="col-md-1">Keterangan</th>
                    <th class="col-md-1">Status</th>
                    <th class="col-md-1">Tanggal Selesai</th>

                  </tr>
                  <?php
                  while ($lihat5 = sqlsrv_fetch_array($coba26)) {
                    ?>
                    <tr>
                      <td><a href="#"><?php echo $lihat5['id_wo']; ?></a></td>
                      <td><?php echo $lihat5['nama_gi']; ?></td>
                      <td><?php echo $lihat5['nama_pen']; ?></td>
                      <td><?php echo $lihat5['tanggal_gangguan']->format('d/m/Y');?></td>
                      <td><?php echo $lihat5['keterangan']; ?></td>
                      <?php
                      if ($lihat5['status'] =='proses') { ?>
                      <td><span class="label label-danger"><?php echo $lihat5['status'] ?></span></td>
                      <?php } else if($lihat5['status']=='selesai') { ?>
                      <td><span class="label label-success"><?php echo $lihat5['status'] ?></span></td>
                      <?php } ?>
                      <td><?php echo $lihat5['tanggal_selesai']; ?></td>

                    </tr>
                    <?php
                  }
                  ?>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

          <!-- /.col -->
          <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Operasi</h3>

                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Nama G.I</th>
                    <th class="col-md-1">Penyulang</th>
                    <th class="col-md-1">Tanggal Gangguan</th>
                    <th class="col-md-1">Keterangan</th>
                    <th class="col-md-1">Status</th>
                    <th class="col-md-1">Tanggal Selesai</th>

                  </tr>
                  <?php
                  while ($lihat2 = sqlsrv_fetch_array($coba23)) {
                    ?>
                    <tr>
                      <td><a href="#"><?php echo $lihat2['id_wo']; ?></a></td>
                      <td><?php echo $lihat2['nama_gi']; ?></td>
                      <td><?php echo $lihat2['nama_pen']; ?></td>
                      <td><?php echo $lihat2['tanggal_gangguan']->format('d/m/Y');?></td>
                      <td><?php echo $lihat2['keterangan']; ?></td>
                      <?php
                      if ($lihat2['status'] =='proses') { ?>
                      <td><span class="label label-danger"><?php echo $lihat2['status'] ?></span></td>
                      <?php } else if($lihat2['status']=='selesai') { ?>
                      <td><span class="label label-success"><?php echo $lihat2['status'] ?></span></td>
                      <?php } ?>
                      <td><?php echo $lihat2['tanggal_selesai']; ?></td>

                    </tr>
                    <?php
                  }
                  ?>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">SCADA dan Operasi</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-1">Nama G.I</th>
                    <th class="col-md-1">Penyulang</th>
                    <th class="col-md-1">Tanggal Gangguan</th>
                    <th class="col-md-1">Keterangan</th>
                    <th class="col-md-1">Status</th>
                    <th class="col-md-1">Tanggal Selesai</th>

                  </tr>
                  <?php
                  while ($lihat4 = sqlsrv_fetch_array($coba25)) {
                    ?>
                    <tr>
                      <td><a href="#"><?php echo $lihat4['id_wo']; ?></a></td>
                      <td><?php echo $lihat4['nama_gi']; ?></td>
                      <td><?php echo $lihat4['nama_pen']; ?></td>
                      <td><?php echo $lihat4['tanggal_gangguan']->format('d/m/Y');?></td>
                      <td><?php echo $lihat4['keterangan']; ?></td>
                      <?php
                      if ($lihat4['status'] =='proses') { ?>
                      <td><span class="label label-danger"><?php echo $lihat4['status'] ?></span></td>
                      <?php } else if($lihat4['status']=='selesai') { ?>
                      <td><span class="label label-success"><?php echo $lihat4['status'] ?></span></td>
                      <?php } ?>
                      <td><?php echo $lihat4['tanggal_selesai']; ?></td>

                    </tr>
                    <?php
                  }
                  ?>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-xs-6">
          </div>
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.8
      </div>
      <strong>Copyright &copy; 2017 <a href="http://pln.co.id">PLN APD Jatim</a></strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
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
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
