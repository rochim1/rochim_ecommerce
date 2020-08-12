<?php 
			$kurir->ubah_kurir($_GET['id'],$_POST['nama']);
			echo "<script>alert('berhasil diubah') ;</script>";
			echo "<script>location='index.php?halaman=kurir';</script>";
?>