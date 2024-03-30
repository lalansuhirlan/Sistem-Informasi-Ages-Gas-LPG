<?php

include '../../../koneksi.php';

$id_stok=$_POST['id_stok'];
$tanggal=$_POST['tanggal'];
$kode_produk=$_POST['kode_produk'];
$nama_produk=$_POST['nama_produk'];
$qty=$_POST['qty'];
$keterangan=$_POST['keterangan'];
$jenis_stok=$_POST['jenis_stok'];


$query=mysqli_query($conn, "
    UPDATE stok SET tanggal='$tanggal', kode_produk='$kode_produk', nama_produk='$nama_produk', 
    qty='$qty', keterangan='$keterangan' WHERE id_stok ='$id_stok'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Update Data Berhasil.");
            window.location='barangmasuk.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Update Data Gagal (Ada Kesalahan!)");
            window.location='barangmasuk.php';
        </script>
        <?php 
    
    }
?>