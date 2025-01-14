<?php
session_start();
require_once "functions.php";

$barang_keluar = query("SELECT * FROM barang_keluar");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barang Keluar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="App/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="App/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="App/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="App/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
              <a href="barang_keluar.php" class="nav-link active">
                <i class="bi bi-arrow-down-circle-fill"></i>
                <p style="margin-left: 10px;">
                  Detail Barang Keluar
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="keuangan.php" class="nav-link">
                <i class="bi bi-union"></i>
                <p style="margin-left: 10px;">
                  Detail Keuangan
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
              <h1>Data Barang Keluar</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Pesan CRUD -->
      <div class="container-fluid">
        <?php if (isset($_SESSION["berhasil"])) : ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Berhasil</h5>
            Data Barang Keluar Berhasil Di <?= $_SESSION["berhasil"]; ?>
          </div>
          <?php unset($_SESSION["berhasil"]); ?>
        <?php elseif (isset($_SESSION["error"])) : ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-ban"></i> Gagal</h5>
            Data Barang Keluar Gagal Di <?= $_SESSION["error"]; ?>
          </div>
          <?php unset($_SESSION["error"]); ?>
        <?php endif; ?>
      </div>
      <!-- Akhir Pesan CRUD -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-12">
              <!-- Tombol Tambah Data -->
              <a href="tambah_brg_keluar.php" class="btn btn-md btn-primary">Tambah Data</a>
              <!-- Akhir tombol tambah -->
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Total Harga</th>
                        <th>Harga Barang</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($barang_keluar as $brg_keluar) : ?>
                        <tr>
                          <td><?= $brg_keluar["tanggal"]; ?></td>
                          <td><?= $brg_keluar["nama_barang"]; ?></td>
                          <td><?= $brg_keluar["jenis_barang"]; ?></td>
                          <td><?= $brg_keluar["jumlah_barang"]; ?></td>
                          <td><?= $brg_keluar["total_harga"]; ?></td>
                          <td><?= $brg_keluar["harga_barang"]; ?></td>
                          <td>
                            <a href="ubah_brg_keluar.php?id=<?= $brg_keluar["id_brg_keluar"]; ?>" class="btn btn-success btn-sm">Ubah</a> |
                            <a href="hapus_brg_keluar.php?id=<?= $brg_keluar["id_brg_keluar"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus?');">Hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Total Harga</th>
                        <th>Harga Barang</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2024 <a href="index.php">X Market</a>.</strong> All rights reserved.
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
  <!-- DataTables  & Plugins -->
  <script src="App/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="App/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="App/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="App/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="App/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="App/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="App/plugins/jszip/jszip.min.js"></script>
  <script src="App/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="App/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="App/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="App/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="App/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="App/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="App/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>