<?php 
	$kategori->simpan_kategori($_POST["nama"], $_POST["deskripsi"]);
	echo "<script>alert'berhasil ditambahkan';</script>";
	echo "<script>location='index.php?halaman=kategori';</script>";
?>