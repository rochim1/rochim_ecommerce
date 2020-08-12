<?php
$id = $_GET['id'];

$biaya->hapus_biaya($id);
echo "<script>alert('berhasil dihapus') ;</script>";
echo "<script>location='index.php?halaman=biaya';</script>";

?>