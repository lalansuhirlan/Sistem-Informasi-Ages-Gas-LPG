<?php
  include_once '../koneksi.php';
  ?>


<!DOCTYPE html>
<html lang="en">
<?php
  include_once '../layouts/header.php';
  ?>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
              <i class="fas fa-bars"></i>
            </a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="../index3.html" class="nav-link">Home</a>
          </li>
         
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
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
         
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <?php
      require_once '../layouts/sidebar.php';
      ?>
      <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Inventaris Barang Kantor</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">kantor</li>
                </ol>
              </div>
            </div>
          </div>
        </section>
      
        <section class="content">
        
                                 
        <div class="container-fluid">
              <div class="card shadow mb-4">
                 <div class="card-body">       
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            Tambah Barang
                            </button>
                          <hr>
                            <div class="table-responsive">
                              <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                               <thead>
                                <tr>
                                  <th class="text-center" width="40">No</th>
                                  <th width="15%">Kode Barang </th>
                                  <th width="15%">Nama Barang</th>
                                  <th>Jumlah</th>
                                  <th>Sumber</th>
                                  <th>Kondisi</th>
                                  <th width="15%">Tanggal Masuk</th>
                                  <th width="15%">Tanggal Update</th>
                                  <th width="15%">Keterangan</th>
                                         
                                  <th width="15%" class="text-center">Aksi</th>
                                </tr>
                               </thead> 
                                    
                                 <tbody>
                                    <?php
                                        
                                     $no=0;
                                     $query=mysqli_query($conn, "SELECT * FROM tbl_kantor ");
                                     while ($row=mysqli_fetch_assoc($query)) {
                                       $no++;
                                    ?>
                                  <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $row['kode_barang']; ?></td>
                                    <td><?php echo $row['nama_barang'] ?></td>
                                    <td><?php echo $row['jumlah'] ?></td>
                                    <td><?php echo $row['sumber'] ?></td>
                                    <td><?php echo $row['kondisi'] ?></td>
                                    <td><?php echo $row['tanggal_masuk'] ?></td>
                                    <td><?php echo $row['tanggal_update'] ?></td>
                                    <td><?php echo $row['keterangan'] ?></td>
                                    <td class="text-center">
                                       <button type="button" class="btn btn-info" data-toggle="modal" 
                                            data-target="#modal-edit<?php echo $row['id_kantor']?>">
                                             Edit
                                          </button>
                                    
                                          <button type="button" class="btn btn-danger" data-toggle="modal"
                                           data-target="#modal-hapus<?php echo $row['id_kantor']?>">
                                             Delete
                                           </button>
                                    </td>  
                                  </tr>

                               <!-- Modal Edit -->
                                  <div class="modal fade" id="modal-edit<?php echo $row['id_kantor']?>">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Edit Data Barang</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- form start -->
                                                <form action="kantor/edit.php" method="post">
                                                    <div class="card-body">
                                                      <div class="form-group">
                                
                                                        <input type="hidden" name="id_kantor" value="<?php echo $row ['id_kantor']?>">
                                                    
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Kode Barang </label>
                                                        <input type="text" class="form-control" name="kode_barang" 
                                                          placeholder="Masukan Nama Barang" value="<?php echo $row['kode_barang']?>" disabled>
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Nama Barang </label>
                                                        <input type="text" class="form-control" name="nama_barang" 
                                                          placeholder="Masukan Nama Barang" value="<?php echo $row['nama_barang']?>">
                                                      </div>

                                                      <div class="form-group">
                                                          <label for="exampleInputPassword1">Jumlah </label>
                                                          <input type="number" class="form-control" name="jumlah" 
                                                          placeholder="Masukan Jumlah Barang" value="<?php echo $row['jumlah']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1">Sumber</label>
                                                          <input type="text" class="form-control" name="sumber"
                                                           placeholder="Masukan Sumber Barang" value="<?php echo $row['sumber']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1">Kondisi</label>
                                                          <input type="text" class="form-control" name="kondisi"
                                                           placeholder="Masukan Sumber Barang" value="<?php echo $row['kondisi']?>">
                                                        </div>
                                                      


                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1">Tanggal Masuk</label>
                                                          <input type="date" class="form-control" name="tanggal_masuk" 
                                                          placeholder="Masukan Tanggal Masuk Barang" value="<?php echo $row['tanggal_masuk']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1"> Tanggal Update</label>
                                                          <input type="date" class="form-control" name="tanggal_update" 
                                                          placeholder="Masukan Tanggal Update Barang" value="<?php echo $row['tanggal_update']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1"> Keterangan</label>
                                                          <input type="text" class="form-control" name="keterangan" 
                                                          placeholder="Masukan Keterangan" value="<?php echo $row['keterangan']?>">
                                                        </div>

                                                      
                                                      <!-- /.card-body -->
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


                                            <!-- /.modal Hapus -->
                                          <div class="modal fade" id="modal-hapus<?php echo $row['id_kantor']?>">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Hapus Data Barang</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- form start -->
                                                <form action="kantor/hapus.php" method="post">
                                                    <div class="card-body">
                                                      <div class="form-group">
                                                        <label for="exampleInputEmail1">Apakah anda yakin akan menghapus Data Barang?</label>
                                                        <input type="hidden" name="id_kantor" value="<?php echo $row ['id_kantor']?>">
                                                        <input type="text" class="form-control" name="nama_barang" 
                                                          placeholder="" value="<?php echo $row['nama_barang']?>" readonly>
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

                                  <?php
                                    }
                                  ?> 
                                </tbody>
                             </table>
                           </div>
                         </hr>
                    </div> 
                </div>
           </div>
        </section>

<!-- Modal Tambah -->
        <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <!-- form start -->
             <form action="kantor/tambah.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" placeholder="masukan Kode Barang">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" placeholder="Masukan Jumlah Barang">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Sumber barang</label>
                    <input type="text" class="form-control" name="sumber" placeholder="Masukan Sumber Barang">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Kondisi Barang</label>
                    <input type="text" class="form-control" name="kondisi" placeholder="Masukan Kondisi Barang">
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_masuk" placeholder="Masukan Tanggal Mausk">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1"> Tanggal Update</label>
                    <input type="date" class="form-control" name="tanggal_update" placeholder="Masukan Tanggal Update">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1"> Keterangan</label>
                    <input type="textarea" class="form-control" name="keterangan" placeholder="Masukan Keterangan">
                  </div>
 
                <!-- /.card-body -->
              </div>




              </div>
                <div class="card-footer " >
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </form>
            </div>
            </div>          
          </div>
        </div>        
      </div>                              




      <?php
        require_once '../layouts/footer.php';
      ?>
      <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/adminlte.min.js?v=3.2.0"></script>
    <script src="../js/demo.js"></script>


    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


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