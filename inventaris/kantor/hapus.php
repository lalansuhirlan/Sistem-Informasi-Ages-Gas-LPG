<?php

include '../../koneksi.php';

$id_kantor=$_POST['id_kantor'];

$query=mysqli_query($conn, "
    DELETE FROM tbl_kantor WHERE id_kantor ='$id_kantor'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Berhasil.");
            window.location='../kantor.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Gagal(Ada Kesalahan!)");
            window.location='../kantor.php';
        </script>
        <?php 
    
    }
?>