<?php  
			$biaya->ubah_biaya($_GET['id'],$_POST['biaya'],$_POST['id_kurir'],$_POST['id_kota']);
			echo "<script>alert('berhasil diubah') ;</script>";
			echo "<script>location='index.php?halaman=biaya';</script>";
	
?>