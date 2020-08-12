<?php  
			$kota->ubah_kota($_GET['id'],$_POST['nama']);
			echo "<script>alert('berhasil diubah') ;</script>";
			echo "<script>location='index.php?halaman=kota';</script>";
	
?>