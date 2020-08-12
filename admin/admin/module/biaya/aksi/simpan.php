<?php 
		$biaya->simpan_biaya($_POST['id_kurir'], $_POST['id_kota'], $_POST['biaya']);
		//pesan di layar
		echo "<script>alert('data tersimpan..'); </script>";
		// //redirect menggunakan JS
		echo "<script>location='index.php?halaman=biaya';</script>";
?>