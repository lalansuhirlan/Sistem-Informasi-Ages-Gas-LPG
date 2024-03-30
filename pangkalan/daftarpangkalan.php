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
                <h1>Daftar Pangkalan</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Pangkalan</li>
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
                            Tambah Pangkalan
                            </button>
                          <hr>
                            <div class="table-responsive">
                              <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                               <thead>
                                <tr>
                                  <th class="text-center" width="40">No</th>
                                  <th>Id Registrasi </th>
                                  <th>Nama Pangkalan</th>
                                  <th>Alokasi</th>
                                  <th>Status</th>
                                  <th>Alamat</th>
                                  <th>No Telepon</th>
                                  <th>Tipe Pembayaran</th>
                                         
                                  <th width="15%" class="text-center">Aksi</th>
                                </tr>
                               </thead> 
                                    
                                 <tbody>
                                    <?php
                                        
                                     $no=0;
                                     $query=mysqli_query($conn, "SELECT * FROM tbl_pangkalan ORDER BY id DESC");
                                     while ($row=mysqli_fetch_assoc($query)) {
                                       $no++;
                                    ?>
                                  <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $row['id_registrasi']; ?></td>
                                    <td><?php echo $row['nama_pangkalan'] ?></td>
                                    <td><?php echo $row['alokasi'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                    <td><?php echo $row['kecamatan'] ?></td>
                                    <td><?php echo $row['no_telepon'] ?></td>
                                    <td><?php echo $row['tipe_pembayaran'] ?></td>
                                    <td class="text-center">
                                       <button type="button" class="btn btn-info" data-toggle="modal" 
                                            data-target="#modal-edit<?php echo $row['id_registrasi']?>">
                                             Edit
                                          </button>
                                    
                                          <button type="button" class="btn btn-danger" data-toggle="modal"
                                           data-target="#modal-hapus<?php echo $row['id_registrasi']?>">
                                             Delete
                                           </button>
                                    </td>  
                                  </tr>

                               <!-- Modal Edit -->
                                  <div class="modal fade" id="modal-edit<?php echo $row['id_registrasi']?>">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Edit Pangkalan</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- form start -->
                                                <form action="edit.php" method="post">
                                                    <div class="card-body">
                                                      <div class="form-group">
                                                        <label for="exampleInputEmail1">ID Pangkalan</label>
                                                        <input type="hidden" name="id_kategori" value="<?php echo $row ['id_registrasi']?>">
                                                        <input type="text" class="form-control" name="id_registrasi" 
                                                          placeholder="masukan Kategori" value="<?php echo $row["id_registrasi"]?>">
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Nama Pangkalan </label>
                                                        <input type="text" class="form-control" name="nama_pangkalan" 
                                                          placeholder="Masukan Tanggal" value="<?php echo $row['nama_pangkalan']?>">
                                                      </div>

                                                      <div class="form-group">
                                                          <label for="exampleInputPassword1">Nama Pemilik Pangkalan</label>
                                                          <input type="text" class="form-control" name="nama_pemilik" 
                                                          placeholder="Masukan Nama Pemilik Pangkalan" value="<?php echo $row['nama_pemilik']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1">No telepon</label>
                                                          <input type="number" class="form-control" name="no_telepon"
                                                           placeholder="Masukan No telepon" value="<?php echo $row['no_telepon']?>">
                                                        </div>

                                                      
                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1">No KTP Pemilik</label>
                                                          <input type="number" class="form-control" name="no_ktp" 
                                                          placeholder="Masukan NO KTP pemilik" value="<?php echo $row['no_ktp']?>">
                                                        </div>

                                                        <div class="form-group">
                                                        <label > Alokasi</label>
                                                            <select name="alokasi" id="alokasi" class="form-control" required>
                                                                <option value="" disabled>-Pilih Jumlah Alokasi-</option>
                                                                      <option value="560" <?= $row['alokasi'] == "560" ? "selected" : "" ?> > 560</option>
                                                                      <option value="1120" <?= $row['alokasi'] == "1120" ? "selected" : "" ?>> 1120</option>
                                                                      <option value="1680" <?= $row['alokasi'] == "1680" ? "selected" : "" ?>> 1680</option>
                                                                      <option value="2240" <?= $row['alokasi'] == "2240" ? "selected" : "" ?>> 2240</option>
                                                                    </select>
                                                        </div>

                                                        <div class="form-group">
                                                        <label > Tipe Pembayaran</label>
                                                            <select name="tipe_pembayaran" id="tipe_pembayaran" class="form-control" required>
                                                                <option value="value="" selected disabled>-Pilih Tipe Pembayaran-</option>
                                                                      <option value="Cash" <?= $row['tipe_pembayaran'] == "Cash" ? "selected" : "" ?>> Cash</option>
                                                                      <option value="Cashless" <?= $row['tipe_pembayaran'] == "Cashless" ? "selected" : "" ?>> Cashless</option>
                                                                    
                                                                    </select>
                                                        </div>

                                                        <div class="form-group">
                                                        <label > Status</label>
                                                            <select name="status" id="status" class="form-control" required>
                                                                <option value="" selected disabled>-Pilih Status-</option>
                                                                      <option value="Aktif" <?= $row['status'] == "Aktif" ? "selected" : "" ?>>Aktif</option>
                                                                      <option value="Tidak Aktif" <?= $row['status'] == "Tidak Aktif" ? "selected" : "" ?>>Tidak Aktif</option>
                                                                      
                                                                    </select>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1">Provinsi</label>
                                                          <input type="text" class="form-control" name="provinsi" 
                                                          placeholder="Masukan Provinsi" value="<?php echo $row['provinsi']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1"> Kabupaten</label>
                                                          <input type="text" class="form-control" name="kabupaten" 
                                                          placeholder="Masukan Kabupaten" value="<?php echo $row['kabupaten']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1"> Kecamatan</label>
                                                          <input type="text" class="form-control" name="kecamatan" 
                                                          placeholder="Masukan Kecamatan" value="<?php echo $row['kecamatan']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1"> Kelurahan</label>
                                                          <input type="text" class="form-control" name="kelurahan" 
                                                          placeholder="Masukan Kelurahan/Desa" value="<?php echo $row['kelurahan']?>">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="exampleInputPassword1">Alamat</label>
                                                          <input type="text" class="form-control" name="alamat" 
                                                          placeholder="Masukan ALamat Beserta RT/RW" value="<?php echo $row['alamat']?>">
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
                                          <div class="modal fade" id="modal-hapus<?php echo $row["id_registrasi"]?>">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Hapus Pangkalan</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- form start -->
                                                <form action="hapus.php" method="post">
                                                    <div class="card-body">
                                                      <div class="form-group">
                                                        <label for="exampleInputEmail1">Apakah anda yakin akan menghapus Kategori?</label>
                                                        <input type="hidden" name="id_registrasi" value="<?php echo $row ["id_registrasi"]?>">
                                                        <input type="text" class="form-control" name="nama_pangkalan" 
                                                          placeholder="" value="<?php echo $row['nama_pangkalan']?>" readonly>
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
              <h4 class="modal-title">Tambah Pangkalan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <!-- form start -->
             <form action="tambah.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Pangkalan</label>
                    <input type="text" class="form-control" name="id_registrasi" placeholder="masukan ID Pangkalan" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pangkalan</label>
                    <input type="text" class="form-control" name="nama_pangkalan" placeholder="Masukan Nama Pangkalan" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pemilik Pangkalan</label>
                    <input type="text" class="form-control" name="nama_pemilik" placeholder="Masukan Nama Pemilik Pangkalan" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">No telepon</label>
                    <input type="number" class="form-control" name="no_telepon" placeholder="Masukan No telepon" required>
                  </div>

                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">No KTP Pemilik</label>
                    <input type="number" class="form-control" name="no_ktp" placeholder="Masukan NO KTP pemilik" required>
                  </div>

                  <div class="form-group">
                  <label > Alokasi</label>
                      <select name="alokasi" id="alokasi" class="form-control" required>
                          <option value="" selected disabled>-Pilih Jumlah Alokasi-</option>
                          <option value="560"> 560</option>
                          <option value="1120"> 1120</option>
                          <option value="1680"> 1680</option>
                          <option value="2240"> 2240</option>
                      </select>
                  </div>

                  <div class="form-group">
                  <label > Tipe Pembayaran</label>
                      <select name="tipe_pembayaran" id="tipe_pembayaran" class="form-control" required>
                           <option value="" selected disabled>-Pilih Tipe Pembayaran-</option>
                                <option value="Cash"> Cash</option>
                                <option value="Cashless"> Cashless</option>
                              
                              </select>
                  </div>

                  <div class="form-group">
                  <label > Status</label>
                      <select name="status" id="status" class="form-control" required>
                           <option value="" selected disabled>-Pilih Status-</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                                
                              </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" placeholder="Masukan Provinsi" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1"> Kabupaten</label>
                    <input type="text" class="form-control" name="kabupaten" placeholder="Masukan Kabupaten" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1"> Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" placeholder="Masukan Kecamatan" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1"> Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan" placeholder="Masukan Kelurahan/Desa" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukan ALamat Beserta RT/RW" required>
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