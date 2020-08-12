<?php 
include '../../lib/config.php';
$id_barang =  $_GET['id_barang'];
if (isset($_GET['jumlah'])) {
    $jumlah =  $_GET['jumlah'];
}else{
    $jumlah =1;
}
if (!empty($_SESSION['member'])) {
    $hasil = $produk->simpan_keranjang($id_barang,$jumlah);
    if ($hasil == "success") {
    echo "<script>location='index.php?halaman=cart';</script>";
}
}else {
   echo "<script>alert('anda harus login terlebih dahulu')</script>";
   echo "<script>location='index.php?halaman=login';</script>";
}

?>