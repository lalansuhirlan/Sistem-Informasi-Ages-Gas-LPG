<?php

include '../../koneksi.php';

$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];
$sumber=$_POST['sumber'];
$kondisi=$_POST['kondisi']; 
$tanggal_masuk=$_POST['tanggal_masuk'];
$tanggal_update=$_POST['tanggal_update'];
$keterangan=$_POST['keterangan'];

$query=mysqli_query($conn, "
    INSERT INTO tbl_gudang VALUES('','$kode_barang','$nama_barang','$jumlah','$sumber',
    '$kondisi','$tanggal_masuk','$tanggal_update','$keterangan');
    ");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Berhasil.");
            window.location='../gudang.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Gagal(Ada Kesalahan!)");
            window.location='../gudang.php';
        </script>
        <?php 
    
    }
?>

