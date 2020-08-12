<?php
include '../../lib/config.php';
$nama = $_POST["nama"];
$password = $_POST["password"];
$email = $_POST["email"];
$kota = $_POST["kota"];
$telpon = $_POST["telpon"];

$hasil = $member->signUp($nama,$password,$email,$kota,$telpon);
if ($hasil == "success") {
    echo "<script>alert('berhasil signup, silahkan login'); </script>";
	echo "<script>location='../../index.php?halaman=login';</script>";
}else{
    echo $hasil;
}
?>