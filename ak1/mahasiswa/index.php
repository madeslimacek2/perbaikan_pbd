<?php

session_start();
include "../koneksi.php";
include "../auth/auth_user.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Laman Mahasiswa</title>
  <!-- Icon -->
  <link rel="shortcut icon" type="image/icon" href="../favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
    include "../auth/content_header.php";
    ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <p></p>
          </div>
        </div><!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">
            <h4><b>
                <center>Menu</center>
              </b></h4>
          </li>
          <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>

          <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Mahasiswa</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i> Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="alert alert-block alert-success">
                  <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                  </button>
                  <i class="ace-icon fa fa-check green"> </i>
                  Selamat Datang di
                  <strong class="green">
                    Panel Mahasiswa
                  </strong>,
                  Dibuat Oleh Mahasiswa
                  Manajemen Informatika, <small>Politeknik Negeri Lampung.</small>
                </div>
                <div class="box-body">

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
    include  "../auth/content_footer.php";
    ?>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.4 -->
  <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../aset/dist/js/app.min.js"></script>
</body>

</html>