<!-- <pre> -->
<?php
	// print_r($_SESSION['keranjang']);
	// error_reporting(0);
// obyek yang menyimpan class pembelian menjalankan function tampil_keranjang
$keranjang = $produk->tampil_keranjang($_SESSION['keranjang']);
if (isset($_GET['hapuscart'])) 
{
	// echo'<script>confirm("yakin akan menghapus?");</script>';
	$produk->hapus_keranjang($_GET['hapuscart']);
	echo "<script>
	alert('Produk berhasil dihapus dari keranjang');
	location='index.php?halaman=cart';</script>";
}
// $keranjang = $keranjang->tampil_keranjang($_SESSION['keranjang']);
// if (isset($_GET['hapus'])) 
// {
// 	$pembelian->hapus_keranjang($_GET['hapus']);
// 	echo "<script>alert('Produk berhasil dihapus dari keranjang');
// 	location='keranjang.php';</script>";
// }
?>

<!-- </pre> -->
<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html" class="active">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input id="cari" type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
					foreach ($keranjang as $key => $value) {
					?>
						<tr>
							<td class="cart_product">
								<a href=""><img width="50px" src="admin/admin/module/upload/produk/<?php echo $value['gambar']?>" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $value['nama_produk'];?></a></h4>
								<p>ID: <?php echo $value['id_produk'];?></p>
							</td>
							<td class="cart_price">
								<p id="harga<?php echo $value['id_produk']?>"><?php echo $value['harga'];?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a style="cursor: pointer" class="cart_quantity_down" onclick="tambah(-1,<?php echo $value['id_produk']?>)"> - </a>
									<input id="jumlah<?php echo $value['id_produk']?>" class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value['jumlah_beli'];?>" size="2">
									<a style="cursor: pointer" class="cart_quantity_up" onclick="tambah(1 ,<?php echo $value['id_produk']?>)"> + </a>
								</div>
							</td>
							
							<td class="cart_total">
								<p id="total<?php echo $value['id_produk']?>" class="cart_total_price"><?php echo $value['sub_total'];?></p>
							</td>
							<td class="cart_delete">
								<a style="cursor: pointer" href="index.php?halaman=cart&hapuscart=<?php echo $value['id_produk']; ?>" class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
							<script>
								function tambah(jumlah, id_barang){
									var data_input = $("#jumlah"+id_barang);
									var data_total = $("#total"+id_barang);
									var value = $("#jumlah"+id_barang).val();
									var harga = $("#harga"+id_barang).html();
							
									if (value == 0) {
										if (jumlah == -1) {
											alert("batas minimum pemesanan");
										}else{
											$.ajax({
											type : "GET",
											data : "jumlah="+jumlah+"&id_barang="+id_barang,
											url  : "pages/aksi/aksi_keranjang.php",
											success : function(data){
												hasil = parseInt(value) + jumlah;
												data_input.val(hasil);
												data_total.text(parseInt(harga)*hasil);

											},
											error : function(){}
										})
										}
									}else{
										$.ajax({
											type : "GET",
											data : "jumlah="+jumlah+"&id_barang="+id_barang,
											url  : "pages/aksi/aksi_keranjang.php",
											success : function(data){
												hasil = parseInt(value) + jumlah;
												data_input.val(hasil);
												data_total.text(parseInt(harga)*hasil);
											},
											error : function(){}
										})
									}
									}
								
							</script>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
			</div>
		<a href="index.php?halaman=checkout" class="btn btn-default get" style="float : right; margin :30px">checkout</a href="index.php?halaman=checkout">
		</div>
	</section> <!--/#cart_items-->
