<?php
        $merek->ubah_merek($_POST['nama'], $_GET['id']);
        echo "<script>alert('berhasil diubah') ;</script>";
        echo "<script>location='index.php?halaman=merek';</script>";
?>