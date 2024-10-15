<?php

require_once "functions.php";

if (isset($_POST["tambah"])) {
  if (tambahBarang($_POST) > 1) {
    header("Location: tabel_barang.php");
    exit;
  } else {
    header("Location: tabel_barang.php");
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="App/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="App/dist/css/adminlte.min.css">
  <!-- Icon Bootsrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="pesan.php" class="nav-link">Pesan</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="service.php" class="nav-link">Service</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="img/logo_minimarket.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Market</span>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="App/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="tabel_barang.php" class="nav-link">
                <i class="bi bi-bag-fill"></i>
                <p style="margin-left: 10px;">
                  Tabel Barang
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="barang_masuk.php" class="nav-link">
                <i class="bi bi-arrow-up-circle-fill"></i>
                <p style="margin-left: 10px;">
                  Detail Barang Masuk
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="barang_keluar.php" class="nav-link">
                <i class="bi bi-arrow-down-circle-fill"></i>
                <p style="margin-left: 10px;">
                  Detail Barang Keluar
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="pemasukan_pengeluaran.php" class="nav-link">
                <i class="bi bi-union"></i>
                <p style="margin-left: 10px;">
                  Pemasukan Pengeluaran
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Tambah Barang</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="post" id="quickForm">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama_barang">Nama Barang</label>
                      <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Masukan Nama Barang">
                    </div>
                    <div class="form-group">
                      <label for="jumlah_barang">Jumlah Barang</label>
                      <input type="number" name="jumlah_barang" class="form-control" id="jumlah_barang" placeholder="Masukan Jumlah Barang">
                    </div>
                    <div class="form-group">
                      <label for="jenis_barang">Jenis Barang</label>
                      <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" placeholder="Masukan Jenis Barang">
                    </div>
                    <div class="form-group">
                      <label for="harga_barang">Harga Barang</label>
                      <input type="number" name="harga_barang" class="form-control" id="harga_barang" placeholder="Masukan Harga Barang">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="App/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="App/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jquery-validation -->
  <script src="App/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="App/plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="App/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="App/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $.validator.setDefaults({
        // submitHandler: function() {
        //   alert("Form successful submitted!");
        // }
      });
      $('#quickForm').validate({
        rules: {
          nama_barang: {
            required: true
          },
          jumlah_barang: {
            required: true
          },
          jenis_barang: {
            required: true
          },
          harga_barang: {
            required: true
          }
        },
        messages: {
          nama_barang: {
            required: "Tolong Masukan Nama Barang Terlebih Dahulu"
          },
          jumlah_barang: {
            required: "Tolong Masukan Jumlah Barang Terlebih Dahulu"
          },
          jenis_barang: {
            required: "Tolong Masukan Jenis Barang Terlebih Dahulu"
          },
          harga_barang: {
            required: "Tolong Masukan Harga Barang Terlebih Dahulu"
          }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>

</html>