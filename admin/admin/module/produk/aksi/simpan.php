<?php 
// validasi 
		// $data[] = $_POST['id_kategori'],$_POST['id_merek'], $_POST['nama'], $_POST['deskripsi'], $_POST['harga'], $_FILES['foto'],$_POST['stock'];
		$data = array($_POST['id_kategori'],$_POST['id_merek'], $_POST['nama'], $_POST['deskripsi'], $_POST['harga'], $_FILES['foto'],$_POST['stock']);
		
			if (in_array("", $data)) 
			{ 
				//pesan di layar
				echo "<script>alert('isikan semua data..'); </script>";
				// //redirect menggunakan JS
				echo "<script>location='index.php?halaman=produk';</script>";
			} 
			else
			{ 

				$produk->simpan_produk($_POST['id_kategori'],$_POST['id_merek'], $_POST['nama'], $_POST['deskripsi'], $_POST['harga'], $_FILES['foto'],$_POST['stock']);
				//pesan di layar
				echo "<script>alert('data tersimpan..'); </script>";
				// //redirect menggunakan JS
				echo "<script>location='index.php?halaman=produk';</script>";
				
			} 
?>