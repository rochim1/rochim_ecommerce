<?php 
include '../../lib/config.php';
$id_kategori =  $_GET['id'];
$hasil = $kategori->tampil_kategoriByProduk($id_kategori);
// echo $id_outlet;
echo json_encode($hasil);
?>