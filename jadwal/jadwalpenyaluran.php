<?php
  require_once '../koneksi.php';

  if (isset($_GET['bulan']) && isset($_GET['tahun'])) {
    // mengambil jumlah hari per periode sesuai bulan dan tahun
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
  }else {
    // mengambil bulan dan tahun sekarang
    $bulan = date("m");
    $tahun = date("Y");
  }

  $total_hari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);

  // Mengambil data pangkalan
  // $sql = "SELECT * FROM tbl_jadwal INNER JOIN tbl_pangkalan ON tbl_jadwal.id_pangkalan = tbl_pangkalan.id";
  $sql = 'SELECT * FROM tbl_pangkalan ORDER BY id DESC';
  $query = mysqli_query($conn, $sql);

  // Mengambil data jadwal
  $sql_jadwal = "SELECT * FROM tbl_jadwal WHERE tanggal LIKE '$tahun-$bulan%'";
  $query_jadwal = mysqli_query($conn, $sql_jadwal);
  $data_jadwal = mysqli_fetch_all($query_jadwal, MYSQLI_ASSOC);
 
  // Mengambil hari dari tanggal di database
  function ekstrakTanggal($date) {
    $timestamp = strtotime($date);
    return [
      'tanggal' => date("j", $timestamp),
      'bulan' =>  date("m", $timestamp),
      'tahun' => date("Y", $timestamp)
    ];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <?php
  include_once '../layouts/header.php';
  ?>
  <body class="hold-transition sidebar-mini">
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
                <h1>Jadwal Penyaluran</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Jadwal</li>
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
                            Tambah Jadwal
                            </button>
                          <hr>
                          
                          <div class="mb-3">
                            <form action="" method="GET">
                              <div class="row g-3 align-items-center">
                                <div class="col-auto" >
                                    <select name="bulan" id="bulan" class="form-control" required>
                                        <option value="" selected disabled>-Bulan-</option>
                                        <option value="01" <?= $bulan == "01" ? "selected" : "" ?>>Januari</option>
                                        <option value="02" <?= $bulan == "02" ? "selected" : "" ?>> Februari</option>
                                        <option value="03" <?= $bulan == "03" ? "selected" : "" ?>> Maret</option>
                                        <option value="04" <?= $bulan == "04" ? "selected" : "" ?>> April</option>
                                        <option value="05" <?= $bulan == "05" ? "selected" : "" ?>> Mei</option>
                                        <option value="06" <?= $bulan == "06" ? "selected" : "" ?>> Juni</option>
                                        <option value="07" <?= $bulan == "07" ? "selected" : "" ?>> Juli</option>
                                        <option value="08" <?= $bulan == "08" ? "selected" : "" ?>> Agustus</option>
                                        <option value="09" <?= $bulan == "09" ? "selected" : "" ?>> September</option>
                                        <option value="10" <?= $bulan == "10" ? "selected" : "" ?>> Oktober</option>
                                        <option value="11" <?= $bulan == "11" ? "selected" : "" ?>> November</option>
                                        <option value="12" <?= $bulan == "12" ? "selected" : "" ?>> Desember</option>
                                    </select>
                                </div>

                                <div class="col-auto" >
                                    <select name="tahun" id="tahun" class="form-control" required>
                                        <option value="" selected disabled>-Tahun-</option>
                                        <option value="2023" <?= $tahun == "2023" ? "selected" : "" ?>>2023</option>
                                        <option value="2024" <?= $tahun == "2024" ? "selected" : "" ?>>2024</option>
                                        <option value="2025" <?= $tahun == "2025" ? "selected" : "" ?>>2025</option>
                                        <option value="2026" <?= $tahun == "2026" ? "selected" : "" ?>>2026</option>
                                        <option value="2027" <?= $tahun == "2027" ? "selected" : "" ?>>2027</option>
                                        <option value="2028" <?= $tahun == "2028" ? "selected" : "" ?>> 2028</option>
                                        <option value="2029" <?= $tahun == "2029" ? "selected" : "" ?>> 2029</option>
                                        <option value="2030" <?= $tahun == "2030" ? "selected" : "" ?>> 2030</option>
                                    </select>
                                </div>

                                <div class="col-auto">
                                <button type="submit" class="btn btn-success">Submit</button>
                                </div>

                              </div>
                            </form>
                          </div>

                            <div class="table-responsive">
                              <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                               <thead>
                                <tr>
                                  <th class="text-center" width="40">No</th>
                                  <th>Id Registrasi </th>
                                  <th>Nama Pangkalan</th>
                                  <th>Alokasi</th>
                                  <th>Status</th>
                                  <?php for($i=1; $i<=$total_hari; $i++): ?>
                                    <th><?= $i; ?></th>
                                  <?php endfor;?>
                                  
                                  <th>jumlah Alokasi</th>
                                         
                                  <th width="15%" class="text-center">Aksi</th>
                                </tr>
                               </thead> 
                                    
                                 <tbody>
                                   <?php $no=1 ?>
                                   <?php while ($row=mysqli_fetch_assoc($query)): ?>
                                    <tr>
                                      <td><?= $no++ ?></td>
                                      <td><?= $row['id_registrasi'] ?></td>
                                      <td><?= $row['nama_pangkalan'] ?></td>
                                      <td><?= $row['alokasi'] ?></td>
                                      <td><?= $row['status'] ?></td>
                                      <?php for($i=1; $i<=$total_hari; $i++): ?>
                                        <td>
                                          <?php foreach ($data_jadwal as $jadwal):?>
                                            <?php
                                              $tanggal = ekstrakTanggal($jadwal['tanggal']);

                                              if ($jadwal['id_pangkalan'] == $row['id'] &&
                                              $tanggal['tanggal'] == $i &&
                                              $tanggal['bulan'] == $bulan &&
                                              $tanggal['tahun'] == $tahun) {
                                                echo $jadwal['jumlah'];
                                              } else {
                                                echo '0';
                                              }
                                            ?>
                                          <?php endforeach; ?>
                                        </td>
                                      <?php endfor;?>
                                    </tr>
                                   <?php endwhile; ?>
                                </tbody>
                             </table>
                           </div>
                         </hr>
                    </div> 
                </div>
           </div>
        </section>



        </section>
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
  </body>
</html>