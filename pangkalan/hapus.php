<?php

include '../koneksi.php';

$id_registrasi=$_POST['id_registrasi'];

$query=mysqli_query($conn, "
    DELETE FROM tbl_pangkalan WHERE id_registrasi ='$id_registrasi'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Berhasil.");
            window.location='daftarpangkalan.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Gagal(Ada Kesalahan!)");
            window.location='daftarpangkalan.php';
        </script>
        <?php 
    
    }
?>