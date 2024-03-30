<?php

include '../../../koneksi.php';

$id_satuan=$_POST['id_satuan'];
$nama_satuan=$_POST['nama_satuan'];
$tanggal_input=$_POST['tgl_input'];

$query=mysqli_query($conn, "
    UPDATE satuan SET nama_satuan='$nama_satuan', tgl_input='$tanggal_input'
    WHERE id_satuan ='$id_satuan'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Update Data Berhasil.");
            window.location='satuan.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Update Data Gagal (Ada Kesalahan!)");
            window.location='satuan.php';
        </script>
        <?php 
    
    }
?>