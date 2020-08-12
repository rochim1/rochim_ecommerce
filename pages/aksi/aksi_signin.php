<?php
include '../../lib/config.php';
$nama = $_POST["nama"];
$password = $_POST["password"];
// echo "<script>alert('".$nama."'); </script>";
// echo "<script>alert('".$password."'); </script>";
$hasil = $member->signIn($nama,$password);
if ($hasil == "success") {
    echo "<script>alert('berhasil signin.'); </script>";
    echo "<script>location='../../index.php';</script>";
    // echo "<script>location='index.php?halaman=pelanggan';</script>";
}else{
    echo "gagal sign in".$hasil;
}
?>