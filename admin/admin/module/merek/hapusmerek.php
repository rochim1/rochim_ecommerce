<?php 
$id_merek=$_GET['id'];

$merek->hapus_merek($id_merek); 

echo "<script>alert('berhasil dihapus');</script>";
echo "<script>location='index.php?halaman=merek';</script>";
?>