<?php
// Inisialisasi
require_once '../core/init.php';

// Mengambil data
$result = mysqli_query($conn, "SELECT * FROM barang_sidelima ORDER BY id DESC");

if (isset($_POST['submit'])) {
    $kode_barang = trim($_POST['kode_barang']);
    $nama_barang = trim($_POST['nama_barang']);
    $jenis_barang  = trim($_POST['jenis_barang']);
    $harga_beli  = trim($_POST['harga_beli']);
    $harga_jual  = trim($_POST['harga_jual']);
    $stok  = trim($_POST['stok']);


    // Menambahkan ke database
    $sql = "INSERT INTO barang_sidelima VALUES (null, '$kode_barang', '$nama_barang', '$jenis_barang', '$harga_beli', '$harga_jual', '$stok')";
    $result = mysqli_query($conn, $sql) or die('Ups, ada kesalahan... <br>' . mysqli_error($conn));

    if ($result) {
        header('Location: ' . $basePath . '/barang/index.php');
    }
}

?>

<?php
                                      $get = msqli_query($c,"select * from kategori");
                                      $i = 1;
                                      while($p=msqli_fetch_array($get)){
                                        $namakategori = $p['namaproduk'];
                                        $tanggalinput = $p['tanggalinput'];
                                      
                                            
                                        ?>

                                       <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$namakategori?></td>
                                        <td><?=$tanggalinput?></td>
                                        <td></td>
                                       </tr>

                                        <?php
                                      };
                                    ?>

if (!isset($_SESSION['login'])) {
  //jika variabel login bernilai FALSE maka akan dikembalikan ke halaman login
  echo "<script>
  alert('Silahkan Login Terlebih Dahulu !');
  window.location='login.php';
  </script>";
  exit;
}



                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                        <h3>Tambah User Admin</h3>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            Tambah User
                            </button>
                            <hr>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="40">No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        
                                        $no=0;
                                        $query=mysqli_query($conn, "SELECT * FROM user ");
                                        while ($row=mysqli_fetch_assoc($query)) {
                                          $no++;
                                        ?>
                                        <tr>
                                          <td><?php echo $no ?></td>
                                          <td><?php echo $row['nama']; ?></td>
                                          <td><?php echo $row['email'] ?></td>
                                          <td><?php echo $row['username'] ?></td>
                                          <td><?php echo $row['password'] ?></td>

                                          <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal" 
                                              data-target="#modal-edit<?php echo $row['id_user']?>">
                                              Edit
                                            </button>

                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#modal-hapus<?php echo $row['id_user']?>">
                                              Delete
                                            </button>
                                          </td>
                                        
    
                                        <div class="modal fade" id="modal-edit<?php echo $row['id_user']?>">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Edit Kategori</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- form start -->
                                                <form action="edit.php" method="post">
                                                    <div class="card-body">
                                                      <div class="form-group">
                                                        <label for="exampleInputEmail1">Nama User</label>
                                                        <input type="hidden" name="id_kategori" value="<?php echo $row ['id_user']?>">
                                                        <input type="text" class="form-control" name="nama_user" 
                                                          placeholder="masukan Kategori" value="<?php echo $row['nama']?>">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Email</label>
                                                        <input type="text" class="form-control" name="email" 
                                                          placeholder="Masukan Tanggal" value="<?php echo $row['email']?>">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Username </label>
                                                        <input type="text" class="form-control" name="username" 
                                                          placeholder="Masukan Tanggal" value="<?php echo $row['username']?>">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="text" class="form-control" name="password" 
                                                          placeholder="Masukan Tanggal" value="<?php echo $row['password']?>">
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
 

                                          </tr>
                               
                                            
                                        <div class="modal fade" id="modal-hapus<?php echo $row['id_user']?>">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Hapus User</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                <!-- form start -->
                                                <form action="hapus.php" method="post">
                                                    <div class="card-body">
                                                      <div class="form-group">
                                                        <label for="exampleInputEmail1">Apakah anda yakin akan menghapus Admin?</label>
                                                        <input type="hidden" name="id_kategori" value="<?php echo $row ['id_user']?>">
                                                        <input type="text" class="form-control" name="nama" 
                                                          placeholder="masukan Kategori" value="<?php echo $row['nama']?>" readonly>
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
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                


  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <!-- form start -->
             <form action="tambah.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_kategori" placeholder="masukan Nama Lengkap" required>
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="nama_kategori" placeholder="masukan Email" required>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="nama_kategori" placeholder="masukan Usernaem" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password </label>
                    <input type="text" class="form-control" name="tanggal_input" placeholder="Masukan Password" required>
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

      

      <div class="modal fade" id="modal-default">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Pengguna</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <!-- form start -->
                  <form action="tambahpengguna.php" method="post">
                      <div class="card-body">
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama </label>
                          <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                        </div>


                        <div class="form-group">
                          <label for="exampleInputPassword1">Username</label>
                          <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">password</label>
                          <input type="text" class="form-control" name="password" placeholder="Masukan Keterangan">
                        </div>

                        <div class="form-group">
                            <label >Vevel</label>
                            <select name="nama_produk" class="form-control" required onchange="produk()">
                            <option value="" selected disabled>-Pilih level-</option>
                            <?php 
                            
                            $q=mysqli_query($conn, "SELECT * FROM penguna");
                                while ($data=mysqli_fetch_assoc($q)) {
                                    ?>
                                    <option value="<?= $data['level'] ?>"><?= $data['level']?></option>
                                    <?php
                                }
                            
                            ?>
                            </select>
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



  
