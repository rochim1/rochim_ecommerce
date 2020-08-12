<?php 
include '../../lib/config.php';
$hasil = $produk->hapus_keranjang($_GET['id_cart']);
if ($hasil == "success") {
    echo "success";
}
?>