<?php

include '../koneksi.php';

$id_pengguna =$_POST['id_pengguna'];

$query=mysqli_query($conn, "
    DELETE FROM pengguna WHERE id_pengguna ='$id_pengguna'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Berhasil.");
            window.location='pengaturan.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Gagal(Ada Kesalahan!)");
            window.location='pengaturan.php';
        </script>
        <?php 
    
    }
?>