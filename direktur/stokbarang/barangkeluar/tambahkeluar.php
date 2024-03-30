<?php

include '../../../koneksi.php';

$tanggal=$_POST['tanggal'];
$kode_produk=$_POST['kode_produk'];
$nama_produk=$_POST['nama_produk'];
$qty=$_POST['qty'];
$keterangan=$_POST['keterangan'];
$jenis_stok=$_POST['jenis_stok'];

$query=mysqli_query($conn, "
    INSERT INTO stok VALUES('','$tanggal','$kode_produk','$nama_produk','$qty','$keterangan','$jenis_stok');
    ");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Berhasil.");
            window.location='barangkeluar.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Gagal(Ada Kesalahan!)");
            window.location='barangkeluar.php';
        </script>
        <?php 
    
    }
?>