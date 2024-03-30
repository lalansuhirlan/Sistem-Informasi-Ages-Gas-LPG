<?php

include '../koneksi.php';

$id_pengguna=$_POST['id_pengguna'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];


$query=mysqli_query($conn, "
    UPDATE pengguna SET nama='$nama', username='$username', password='$password', level='$level'
    WHERE id_pengguna ='$id_pengguna'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Update Data Berhasil.");
            window.location='pengaturan.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Update Data Gagal (Ada Kesalahan!)");
            window.location='pengaturan.php';
        </script>
     <?php 
    
}
?>