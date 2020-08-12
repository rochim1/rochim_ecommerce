<?php 
include '../../lib/config.php';
$id_merek =  $_GET['id'];
$hasil = $merek->tampil_merekById($id_merek);
// echo $id_outlet;
echo json_encode($hasil);
?>