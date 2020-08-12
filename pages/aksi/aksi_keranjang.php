<?php 
include '../../lib/config.php';
$id_barang =  $_GET['id_barang'];
$jumlah =  $_GET['jumlah'];
$hasil = $produk->simpan_keranjang($id_barang,$jumlah);
if ($hasil == "success") {
    echo "success";
}
?>