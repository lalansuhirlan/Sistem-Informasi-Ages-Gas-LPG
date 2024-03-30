<?php

include '../../../koneksi.php';

$id_satuan=$_POST['id_satuan'];

$query=mysqli_query($conn, "
    DELETE FROM satuan WHERE id_satuan ='$id_satuan'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Berhasil.");
            window.location='satuan.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Gagal(Ada Kesalahan!)");
            window.location='satuan.php';
        </script>
        <?php 
    
    }
?>