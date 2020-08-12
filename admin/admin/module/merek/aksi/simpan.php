<?php 
	$merek->simpan_merek($_POST["nama"]);
	echo "<script>alert'berhasil ditambahkan';</script>";
	echo "<script>location='index.php?halaman=merek';</script>";
?>