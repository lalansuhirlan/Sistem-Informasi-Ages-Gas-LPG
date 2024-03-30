<?php

include '../../../koneksi.php';

$nama_kategori=$_POST['nama_kategori'];
$tanggal_input=$_POST['tanggal_input'];

$query=mysqli_query($conn, "
    INSERT INTO kategori VALUES('','$nama_kategori','$tanggal_input');
    ");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Berhasil.");
            window.location='kategori.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Gagal(Ada Kesalahan!)");
            window.location='kategori.php';
        </script>
        <?php 
    
    }
?>

