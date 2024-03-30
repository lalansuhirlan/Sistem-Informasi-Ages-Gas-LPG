<?php
require "../../../koneksi.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APLIKASI DELIMA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../../img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
       
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../../img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADELIMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item ">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
            
            <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../produk/kategori/kategori.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../produk/satuan/satuan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Satuan Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../produk/produk/produk.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk</p>
                </a>
              </li>
            </ul>
          </li>

            
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
              Stok Barang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../barangmasuk/barangmasuk.php" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../barangkeluar/barangkeluar.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="../../transaksi/transaksi.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
            

          
          <li class="nav-item">
            <a href="../../../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Barang Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            Tambah Produk Masuk
                            </button>
                            <hr>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="40">No</th>
                                            
                                            <th>Tanggal Masuk</th>
                                            <th>Kode Produk</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Jenis Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        
                                        $no=0;
                                        $query=mysqli_query($conn, "SELECT * FROM stok ");
                                        while ($row=mysqli_fetch_assoc($query)) {
                                          $no++;
                                        ?>
                                        <tr>
                                          <td><?php echo $no ?></td>
                                          <td><?php echo $row['tanggal']; ?></td>
                                          <td><?php echo $row['kode_produk']; ?></td>
                                          <td><?php echo $row['nama_produk']; ?></td>
                                          <td><?php echo $row['qty']; ?></td>
                                          <td><?php echo $row['keterangan'] ?></td>
                                          <td><?php echo $row['jenis_stok'] ?></td>
                                          <td>
                                          <button type="button" class="btn btn-info" data-toggle="modal"
                                           data-target="#modal-lg-edit<?php echo $row['id_stok']?>">
                                             Edit
                                           </button>

                                           
                                           <button type="button" class="btn btn-danger" data-toggle="modal"
                                           data-target="#modal-hapus<?php echo $row['id_stok']?>">
                                           Dellete
                                           </button>


                                           
                                        <div class="modal fade" id="modal-lg-edit<?php echo $row['id_stok']?>">
                                          <div class="modal-dialog  modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Edit Barang Masuk</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body">
                                              <!-- form start -->
                                              <form action="editmasuk.php" method="post">
                                                <div class="card-body">
                                                  <div class="form-group">
                                                    <label >Tanggal</label>
                                                    <input type="hidden" name="id_stok" value="<?php echo $row ['id_stok']?>">
                                                    <input type="date" class="form-control" name="tanggal" 
                                                      placeholder="masukan Tanggal" value="<?php echo $row['tanggal']?>" >
                                                  </div>

                                                       
                                                <div class="form-group">
                                                    <label >Kode Produk</label>
                                                    <input type="text" class="form-control" name="kode_produk" 
                                                    placeholder="Masukan Nama Produk" value="<?php echo $row['kode_produk']?>" readonly>
                                                </div>
                                                  
                                                <div class="form-group">
                                                    <label >Nama Produk</label>
                                                    <input type="text" class="form-control" name="nama_produk" 
                                                    placeholder="Masukan Nama Produk" value="<?php echo $row['nama_produk']?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label >Jumlah</label>
                                                    <input type="number" class="form-control" name="qty" 
                                                    placeholder="Masukan Jumlah" value="<?php echo $row['qty']?>" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Keterangan</label>
                                                    <input type="text" class="form-control" name="keterangan" 
                                                    placeholder="Masukan keterangan" value="<?php echo $row['keterangan']?>" >
                                                </div>
                                                <div class="form-group">
                                                    <label >Jenis Stok</label>
                                                    <input type="text" class="form-control" name="jenis_stok" 
                                                    placeholder="Masukan keterangan" value="<?php echo $row['jenis_stok']?>" >
                                                </div>
                                                      
                                                  <div class="card-footer">
                                                      <button type="submit" class="btn btn-primary">Submit</button>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </form>
                                                  </div>        
                                            </form>

                                            </div>
                                                                    
                                            </div>
                                            <!-- /.modal-content -->
                                          </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                      <!-- /.modal -->


    
                                      </tr>


                                            
                                      <div class="modal fade" id="modal-hapus<?php echo $row['id_masuk']?>">
                                        <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title">Hapus Barang Masuk</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <!-- form start -->
                                            <form action="hapusmasuk.php" method="post">
                                            <div class="card-body">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1">Apakah anda yakin akan menghapus Produk?</label>
                                                <input type="hidden" name="id_masuk" value="<?php echo $row ['id_masuk']?>">
                                                <input type="text" class="form-control" name="nama_produk" 
                                                    placeholder="masukan Kategori" value="<?php echo $row['nama_produk']?>" readonly>
                                                </div>
                                                    
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>        
                                            </form>

                                        </div>
                                                                
                                        </div>
                                        <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                   

                                            
                                       <?php
                                        }
                                        ?>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->







          </div>

        </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

        

  <div class="modal fade" id="modal-default">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Barang Masuk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <!-- form start -->
                  <form action="tambahmasuk.php" method="post">
                      <div class="card-body">
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">Tanggal </label>
                          <input type="date" class="form-control" name="tanggal" placeholder="Masukan Tanggal">
                        </div>

                        <div class="form-group">
                            <label >Kode Produk</label>
                            <select name="kode_produk"class="form-control" required onchange="produk()">
                            <option value="" selected disabled>-Pilih Kode Produk-</option>
                            <?php 
                            
                            $q=mysqli_query($conn, "SELECT * FROM produk");
                                while ($data=mysqli_fetch_assoc($q)) {
                                    ?>
                                    <option value="<?= $data['kode_produk'] ?>"><?= $data['kode_produk']?></option>
                                    <?php
                                }
                            
                            ?>
                            </select>
                        </div>


                        

                        <div class="form-group">
                            <label >Nama Produk</label>
                            <select name="nama_produk" class="form-control" required onchange="produk()">
                            <option value="" selected disabled>-Pilih Nama Produk-</option>
                            <?php 
                            
                            $q=mysqli_query($conn, "SELECT * FROM produk");
                                while ($data=mysqli_fetch_assoc($q)) {
                                    ?>
                                    <option value="<?= $data['nama_produk'] ?>"><?= $data['nama_produk']?></option>
                                    <?php
                                }
                            
                            ?>
                            </select>
                        </div>

                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">Jumlah </label>
                          <input type="number" class="form-control" name="qty" placeholder="Masukan Jumlah">
                        </div>

                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">Keterangan</label>
                          <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan">
                        </div>

                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                  </div>
                  <!-- /.card -->

                  </div>
                
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->




  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">Lalan Suhirlan & Rhima Nurul Fathia</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../js/pages/dashboard.js"></script>


<!-- DataTables  & Plugins -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

</body>
</html>
