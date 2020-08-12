<?php
$id = $_GET['id'];

$produk->hapus_produk($id);
echo "<script>alert('berhasil dihapus') ;</script>";
echo "<script>location='index.php?halaman=produk';</script>";

?>