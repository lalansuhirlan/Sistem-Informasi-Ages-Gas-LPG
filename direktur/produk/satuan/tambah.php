<?php

include '../../../koneksi.php';

$nama_satuan=$_POST['nama_satuan'];
$tanggal_input=$_POST['tanggal_input'];

$query=mysqli_query($conn, "
    INSERT INTO satuan VALUES('','$nama_satuan','$tanggal_input');
    ");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Berhasil.");
            window.location='satuan.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Tambah Data Gagal(Ada Kesalahan!)");
            window.location='satuan.php';
        </script>
        <?php 
    
    }
?>