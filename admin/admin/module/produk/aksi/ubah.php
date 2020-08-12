<?php  
			$produk->ubah_produk($_POST['id_kategori'],$_POST['id_merek'], $_POST['nama'], $_POST['deskripsi'], $_POST['harga'], $_FILES['foto'],$_POST['stock'],$_POST['RBslide'],$_POST['RBrekomendasi'],$_GET['id']);
			echo "<script>alert('berhasil diubah') ;</script>";
			echo "<script>location='index.php?halaman=produk';</script>";
?>