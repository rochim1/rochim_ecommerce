<?php 
include '../../lib/config.php';
$id_kurir =  $_GET['id_kurir'];
$hasil = $produk->tampil_biayashipping($id_kurir);
echo json_encode($hasil);
?>