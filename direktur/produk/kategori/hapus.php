<?php

include '../../../koneksi.php';

$id_kategori=$_POST['id_kategori'];

$query=mysqli_query($conn, "
    DELETE FROM kategori WHERE id_kategori ='$id_kategori'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Berhasil.");
            window.location='kategori.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Gagal(Ada Kesalahan!)");
            window.location='kategori.php';
        </script>
        <?php 
    
    }
?>