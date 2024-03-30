<?php

include '../koneksi.php';

$id_registrasi=$_POST['id_registrasi'];
$nama_pangkalan=$_POST['nama_pangkalan'];
$nama_pemilik=$_POST['nama_pemilik'];
$no_ktp=$_POST['no_ktp'];
$alokasi=$_POST['alokasi'];
$tipe_pembayaran=$_POST['tipe_pembayaran'];
$status=$_POST['status'];
$provinsi=$_POST['provinsi'];
$kabupaten=$_POST['kabupaten'];
$kecamatan=$_POST['kecamatan'];
$kelurahan=$_POST['kelurahan'];
$alamat=$_POST['alamat'];

$sql= "UPDATE tbl_pangkalan SET nama_pangkalan='$nama_pangkalan', nama_pemilik='$nama_pemilik', no_ktp='$no_ktp',
alokasi='$alokasi', tipe_pembayaran='$tipe_pembayaran', status='$status', provinsi='$provinsi', kabupaten='$kabupaten', 
kecamatan='$kecamatan', kelurahan='$kelurahan', alamat='$alamat'
WHERE id_registrasi ='$id_registrasi'";

$query=mysqli_query($conn, $sql);

    // die($sql);

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Update Data Berhasil.");
            window.location='daftarpangkalan.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Update Data Gagal (Ada Kesalahan!)");
            window.location='daftarpangkalan.php';
        </script>
     <?php 
    
}
?>