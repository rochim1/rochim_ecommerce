<?php 
		$kurir->simpan_kurir($_POST['nama']);
		//pesan di layar
		echo "<script>alert('data tersimpan..'); </script>";
		// //redirect menggunakan JS
		echo "<script>location='index.php?halaman=kurir';</script>";
?>