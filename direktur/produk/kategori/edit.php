<?php

include '../../../koneksi.php';

$id_kategori=$_POST['id_kategori'];
$nama_kategori=$_POST['nama_kategori'];
$tanggal_input=$_POST['tgl_input'];

$query=mysqli_query($conn, "
    UPDATE kategori SET nama_kategori='$nama_kategori', tgl_input='$tanggal_input'
    WHERE id_kategori ='$id_kategori'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Update Data Berhasil.");
            window.location='kategori.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Update Data Gagal(Ada Kesalahan!)");
            window.location='kategori.php';
        </script>
        <?php 
    
    }
?>