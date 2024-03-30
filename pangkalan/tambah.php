<?php

include '../koneksi.php';

$id_registrasi=$_POST['id_registrasi'];
$nama_pangkalan=$_POST['nama_pangkalan'];
$nama_pemilik=$_POST['nama_pemilik'];
$no_telepon=$_POST['no_telepon'];
$no_ktp=$_POST['no_ktp'];
$alokasi=$_POST['alokasi'];
$tipe_pembayaran=$_POST['tipe_pembayaran'];
$status=$_POST['status'];
$provinsi=$_POST['provinsi'];
$kabupaten=$_POST['kabupaten'];
$kecamatan=$_POST['kecamatan'];
$kelurahan=$_POST['kelurahan'];
$alamat=$_POST['alamat'];

$sql= "INSERT INTO tbl_pangkalan VALUES(NULL,'$id_registrasi','$nama_pangkalan','$nama_pemilik','$no_telepon','$no_ktp','$alokasi'
,'$tipe_pembayaran','$status','$provinsi','$kabupaten','$kecamatan','$kelurahan','$alamat')";

$query=mysqli_query($conn, $sql );

//   die($sql);

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Berhasil.");
            window.location='daftarpangkalan.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Gagal(Ada Kesalahan!)");
            window.location='daftarpangkalan.php';
        </script>
        <?php 
    
    }
?>