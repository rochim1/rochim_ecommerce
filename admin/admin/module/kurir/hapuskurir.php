<?php
$id = $_GET['id'];

$kurir->hapus_kurir($id);
echo "<script>alert('berhasil dihapus') ;</script>";
echo "<script>location='index.php?halaman=kurir';</script>";

?>