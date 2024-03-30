<?php

include '../../../koneksi.php';

$id_produk=$_POST['id_produk'];
$kode_produk=$_POST['kode_produk'];
$nama_produk=$_POST['nama_produk'];
$id_kategori=$_POST['id_kategori'];
$id_satuan=$_POST['id_satuan'];
$harga_beli=$_POST['harga_beli'];
$harga_jual=$_POST['harga_jual'];
$stok=$_POST['stok'];

$query=mysqli_query($conn, "
    UPDATE produk SET kode_produk='$kode_produk', nama_produk='$nama_produk', id_kategori='$id_kategori', id_satuan='$id_satuan',
    harga_beli='$harga_beli', harga_jual='$harga_jual', stok='$stok' WHERE id_produk ='$id_produk'");

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Update Data Berhasil.");
            window.location='produk.php';
        </script>
        <?php 
    } else {
        ?>
        <script type="text/javascript">
            alert("Update Data Gagal (Ada Kesalahan!)");
            window.location='produk.php';
        </script>
        <?php 
    
    }
?>