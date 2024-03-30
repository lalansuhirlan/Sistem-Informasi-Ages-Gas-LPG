<?php

include '../../../koneksi.php';


$id_stok =$_POST['id_stok'];

$query=mysqli_query($conn, "
    DELETE FROM stok WHERE id_stok ='$id_stok'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Berhasil.");
            window.location='barangkeluar.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Hapus Data Gagal(Ada Kesalahan!)");
            window.location='barangkeluar.php';
        </script>
        <?php 
    
    }
?>