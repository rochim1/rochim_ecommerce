<?php 
		$kota->simpan_kota($_POST['nama']);
		//pesan di layar
		echo "<script>alert('data tersimpan..'); </script>";
		// //redirect menggunakan JS
		echo "<script>location='index.php?halaman=kota';</script>";
?>