<?php
$id = $_GET['id'];

$kota->hapus_kota($id);
echo "<script>alert('berhasil dihapus') ;</script>";
echo "<script>location='index.php?halaman=kota';</script>";

?>