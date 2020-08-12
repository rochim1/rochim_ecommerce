<?php
$nama_kategori = $kategori->tampil_kategori();
$data_merek = $merek->tampil_merek();
$data_produk = $produk->tampil_produk();
$data_rekomendasi = $produk->tampil_recomended_produk();
?>
<body>
    
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                                <a href="index.html"><img src="asset/images/home/logo.png" alt="" /></a>
                            </div>
                            <div class="btn-group pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                        USA
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Canada</a></li>
                                        <li><a href="#">UK</a></li>
                                    </ul>
                                </div>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                        DOLLAR
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Canadian Dollar</a></li>
                                        <li><a href="#">Pound</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                    <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                    <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <?php
                                    if (isset($_SESSION['member'])) {
                                        echo    '<li><a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i> Logout</a></li>';
                                    }else{
                                        echo    '<li><a href="index.php?halaman=login"><i class="fa fa-lock"></i> Login</a></li>';
                                    }
                                    ?>
                                    
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
                                    <li><a href="index.html" class="active">Home</a></li>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.html">Products</a></li>
                                            <li><a href="product-details.html">Product Details</a></li> 
                                            <li><a href="checkout.html">Checkout</a></li> 
                                            <li><a href="cart.html">Cart</a></li> 
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
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
        <section id="slider"><!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-carousel" data-slide-to="1"></li>
                                <li data-target="#slider-carousel" data-slide-to="2"></li>
                            </ol>
                            
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>Free E-Commerce Template</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="asset/images/home/banner (1).svg" class="girl img-responsive" alt="" />
                                        <img src="asset/images/home/pricing.png"  class="pricing" alt="" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>100% Responsive Design</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="asset/images/home/banner (2).svg" class="girl img-responsive" alt="" />
                                        <img src="asset/images/home/pricing.png"  class="pricing" alt="" />
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>Free Ecommerce Template</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="asset/images/home/banner (3).svg" class="girl img-responsive" alt="" />
                                        <img src="asset/images/home/pricing.png" class="pricing" alt="" />
                                    </div>
                                </div>
                                
                            </div>
                            
                            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section><!--/slider-->
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <?php foreach ($nama_kategori as $key => $value) {?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" onclick="kategori(<?php echo $value['id_kategori']?>)">
                                            <h4 class="panel-title" style="cursor: pointer"><a><?php echo $value['nama_kategori']?></a></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div><!--/category-products-->
                            
                            <div class="brands_products"><!--brands_products-->
                                <h2>Brands</h2>
                                <div class="brands-name">
                                    <ul class="nav nav-pills nav-stacked">
                                        <?php foreach ($data_merek as $key => $value) {?>
                                            <li style="cursor: pointer" onclick="merek(<?php echo $value['id_merek']?>)" ><a> <span class="pull-right">(<?php echo $value['jumlah'];?>)</span><?php echo $value['nama_merek'];?></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div><!--/brands_products-->
                            <script>
                                function merek(id){
                                    var dataHandler = $("#konten_produk");
                                    dataHandler.html("");
                                    $.ajax({
                                        type : "GET",
                                        data : "id="+id,
                                        url : "pages/aksi/aksi_merek.php",
                                        success : function(hasil){
                                            console.log(hasil);
                                            var result = JSON.parse(hasil);
                                            // alert(hasil);
                                            if(hasil  == "false"){
                                                var NewRow = $("<div class='text-center p-5 w-100 m-5'>");
                                                NewRow.html("tidak ada data ditemukan");
                                                dataHandler.append(NewRow);
                                            }
                                            else{
                                            $.each(result, function(key, val){
                                                var NewRow = $("<div class='col-sm-4'>");
                                                NewRow.html("<div class='product-image-wrapper animated animate__animated  animate__zoomIn'> <div class='single-products'> <div class='productinfo text-center'> <div class='w-100 overflow-hidden' style='height:200px'><img src='admin/admin/module/upload/produk/"+val.gambar+"'></div> <h2>"+val.harga+"</h2> <p>"+val.nama_produk+"</p> <a href='index.php?halaman=addToCart&id_barang="+val.id_produk+"' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a> </div> <div class='product-overlay'> <div class='overlay-content'> <h2>"+val.harga+"</h2> <p>"+val.nama_produk+"</p> <a href='index.php?halaman=addToCart&id_barang="+val.id_produk+"' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a> </div> </div> </div> <div class='choose'> <ul class='nav nav-pills nav-justified'> <li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li> <li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li> </ul> </div> </div>");
                                                dataHandler.append(NewRow);
                                            });
                                            }
                                        },
                                        error : function(){ 
                                            console.log(hasil);
                                            alert("gagal");
                                        }
                                    });
                                    
                                }
                            </script>
                            <div class="price-range"><!--price-range-->
                                <h2>Price Range</h2>
                                <div class="well text-center">
                                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                    <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                                </div>
                            </div><!--/price-range-->
                            
                            <div class="shipping text-center"><!--shipping-->
                                <img src="asset/images/home/shipping.jpg" alt="" />
                            </div><!--/shipping-->
                            
                        </div>
                    </div>
                    
                    <div class="col-sm-9 padding-right">
                        <h2 class="title text-center">Features Items</h2>
                        <div class="features_items" id="konten_produk"><!--features_items-->
                            <?php foreach ($data_produk as $key => $value) {?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper animated animate__animated  animate__zoomIn">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <div class="w-100 overflow-hidden" style="height:200px"><img src="admin/admin/module/upload/produk/<?php 
                                                echo $value['gambar']?>" alt="" /></div>
                                                <h2><?php echo $value['harga'] ?></h2>
                                                <p><?php echo $value['nama_produk'] ?></p>
                                                <a href="index.php?halaman=addToCart&id_barang=<?php echo $value['id_produk']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2><?php echo $value['harga'] ?></h2>
                                                    <p><?php echo $value['nama_produk'] ?></p>
                                                    <a href="index.php?halaman=addToCart&id_barang=<?php echo $value['id_produk']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <script>
                                function kategori(id){
                                    var dataHandler = $("#konten_produk");
                                    dataHandler.html("");
                                    $.ajax({
                                        type : "GET",
                                        data : "id="+id,
                                        url : "pages/aksi/aksi_kategori.php",
                                        success : function(hasil){
                                            console.log(hasil);
                                            var result = JSON.parse(hasil);
                                            // alert(hasil);
                                            if(hasil  == "false"){
                                                var NewRow = $("<div class='text-center p-5 w-100 m-5'>");
                                                NewRow.html("tidak ada data ditemukan");
                                                dataHandler.append(NewRow);
                                            }
                                            else{
                                            $.each(result, function(key, val){
                                                var NewRow = $("<div class='col-sm-4'>");
                                                NewRow.html("<div class='product-image-wrapper animated animate__animated  animate__zoomIn'> <div class='single-products'> <div class='productinfo text-center'> <div class='w-100 overflow-hidden' style='height:200px'><img src='admin/admin/module/upload/produk/"+val.gambar+"'></div> <h2>"+val.harga+"</h2> <p>"+val.nama_produk+"</p> <a href='index.php?halaman=addToCart&id_barang="+val.id_produk+"' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a> </div> <div class='product-overlay'> <div class='overlay-content'> <h2>"+val.harga+"</h2> <p>"+val.nama_produk+"</p> <a href='index.php?halaman=addToCart&id_barang="+val.id_produk+"' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a> </div> </div> </div> <div class='choose'> <ul class='nav nav-pills nav-justified'> <li><a href='#'><i class='fa fa-plus-square'></i>Add to wishlist</a></li> <li><a href='#'><i class='fa fa-plus-square'></i>Add to compare</a></li> </ul> </div> </div>");
                                                dataHandler.append(NewRow);
                                            });
                                            }
                                        },
                                        error : function(){ 
                                            console.log(hasil);
                                            alert("gagal");
                                        }
                                    });
                                    
                                }
                            </script>
                        </div><!--features_items-->
                        
                        <div class="category-tab"><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                                    <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                                    <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
                                    <li><a href="#kids" data-toggle="tab">Kids</a></li>
                                    <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tshirt" >
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery4.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="blazers" >
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery4.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="sunglass" >
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery4.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="kids" >
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery4.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="poloshirt" >
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery4.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="asset/images/home/gallery1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/category-tab-->
                        
                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">recommended items</h2>
                            
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active"> 
                                    
                                    <?php foreach ($data_rekomendasi as $key => $value) {
                                    ?>  
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <div class="w-100" style="overflow: hidden; height:150px">
                                                        <img src="admin/admin/module/upload/produk/<?php echo $value['gambar']?>" alt="" />
                                                        </div>
                                                        <h2><?php echo $value['harga'] ?></h2>
                                                        <p><?php echo $value['nama_produk'] ?></p>
                                                        <a href="index.php?halaman=addToCart&id_barang=<?php echo $value['id_produk']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }?>    
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>            
                            </div>
                        </div><!--/recommended_items-->
                        
                    </div>
                </div>
            </div>
        </section>