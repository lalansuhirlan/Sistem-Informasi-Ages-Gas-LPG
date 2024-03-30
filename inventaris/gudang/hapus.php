<?php

include '../../koneksi.php';

$idproduk=$_POST['id'];

$query=mysqli_query($conn, "
    DELETE FROM produk WHERE id ='$idproduk'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Berhasil.");
            window.location='produk.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Gagal(Ada Kesalahan!)");
            window.location='produk.php';
        </script>
        <?php 
    
    }
?>