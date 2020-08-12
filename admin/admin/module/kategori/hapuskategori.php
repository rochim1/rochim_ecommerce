<?php 
$id_kategori=$_GET['id'];

$kategori->hapus_kategori($id_kategori); 

echo "<script>alert('berhasil dihapus');</script>";
echo "<script>location='index.php?halaman=kategori';</script>";
?>