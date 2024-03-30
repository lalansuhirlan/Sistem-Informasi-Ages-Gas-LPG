<?php

include '../../koneksi.php';

$id_kantor=$_POST['id_kantor'];
$nama_barang=$_POST['nama_barang'];
$jumlah=$_POST['jumlah'];
$sumber=$_POST['sumber'];
$kondisi=$_POST['kondisi']; 
$tanggal_masuk=$_POST['tanggal_masuk'];
$tanggal_update=$_POST['tanggal_update'];
$keterangan=$_POST['keterangan'];

$query=mysqli_query($conn, "
    UPDATE tbl_kantor SET  nama_barang='$nama_barang', jumlah='$jumlah', sumber='$sumber', kondisi='$kondisi', 
    tanggal_masuk='$tanggal_masuk', tanggal_update='$tanggal_update', keterangan='$keterangan'
    WHERE id_kantor='$id_kantor'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Update Data Berhasil.");
            window.location='../kantor.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Update Data Gagal(Ada Kesalahan!)");
            window.location='../kantor.php';
        </script>
        <?php 
    
    }
?>