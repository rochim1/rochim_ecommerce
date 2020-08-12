<?php
include '../../lib/config.php';
$keranjang = $produk->tampil_keranjang($_SESSION['keranjang']);
$ttl = $_POST['sub_total'];

$id_member = $_SESSION['member']['id_member'];
$status_order = "pending";
$tgl_order = date("Y-m-d");
$jam_order = date("h:i:sa");

$conn = $produk->checkout($status_order,$tgl_order,$jam_order,$id_member,$ttl);

$id_order = $conn;

foreach ($keranjang as $key => $value) {
$id_produk = $value['id_produk'];
$harga = $value['harga'];
$jumlah = $value['jumlah_beli'];
$produk->checkout_detail($id_order,$id_produk,$jumlah,$harga);
}

unset($_SESSION['keranjang']);
// echo "<script>alert(''); </script>";
    echo "<script>location='../../index.php?halaman=history';</script>";
?>