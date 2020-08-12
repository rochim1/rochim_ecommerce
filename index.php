<?php
include 'lib/config.php';
 error_reporting(0);
if ($_SESSION['member'] == "" or empty($_SESSION['member']) ) {
    echo '<div class="card-header alert-warning" style="padding : 10px"> anda belum login silahkan <a href="index.php?halaman=login">login</a> untuk dapat berbelanja</div>
';
}else{
    print_r($_SESSION['member']);
?>
    
<?php
}
include 'template/header.php';
// isi body
    if (!isset($_GET['halaman'])) {
    include 'pages/main.php';
    }
    else if($_GET['halaman'] == 'login'){
        include 'template/login.php';
    }
    else if($_GET['halaman'] == 'logout'){
        include 'pages/aksi/aksi_logout.php';
    }
    else if($_GET['halaman'] == 'checkout'){
        include 'template/checkout.php';
    }
    else if($_GET['halaman'] == 'addToCart'){
        include 'pages/aksi/aksi_tambahcart.php';
    }
    else if($_GET['halaman'] == 'cart'){
        include 'template/cart.php';
    }
    else if($_GET['halaman'] == 'history'){
        include 'template/history.php';
    }
    else {
        include 'template/header.php'; 
    }
// isi body
include 'template/footer.php';
?>