<?php
$keranjang = $produk->tampil_keranjang($_SESSION['keranjang']);
$tampil_shipping = $produk->tampil_shipping();
$tampil_kota = $kota->tampil_kota();
?>
<body>
    <header id="header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a><i class="fa fa-phone"></i> +62 083840494000</a></li>
                                <li><a><i class="fa fa-envelope"></i> information@febridk.id</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a><i class="fa fa-facebook"></i></a></li>
                                <li><a><i class="fa fa-twitter"></i></a></li>
                                <li><a><i class="fa fa-linkedin"></i></a></li>
                                <li><a><i class="fa fa-dribbble"></i></a></li>
                                <li><a><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 clearfix">
                        <div class="logo pull-left">
                            <h4><span>bike </span>goes</h4>
                        </div>
                    </div>
                    <div class="col-md-8 clearfix">
                        <div class="shop-menu clearfix pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="profile.php"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
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
                                <li><a href="https://ecommerce.febridk.id/" class="active">Home</a></li>
                                <li class="dropdown"><a>Menu Member<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="profile.php">Profil</a></li>
                                        <li><a href="history.php">Riwayat Pembelian</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <form action="search.php" method="GET">
                                <input type="text" name="n" placeholder="Search" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Shipping</h2>
                        <form method="POST" class="contact-form row" style="margin-bottom: 2rem">
                            <div class="form-group col-md-9">
                                <select id="pil_kurir" name="kurir" class="form-control" onclick="biaya_shiping()">
                                    <option value=""> -- Choose Shipping Agent</option>
                                    <?php foreach ($tampil_shipping as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value['id_kurir']?>"><?php echo $value['nama_kurir']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-3" style="margin-top: -15px;">
                                <button type="submit" name="submit" class="btn btn-primary pull-right" style="height: 45px;">Choose Shipping</button>
                            </div>
                        </form>
                        <h2 class="title text-center">Personal Information</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_SESSION['member']['nama'] ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['member']['email'] ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="notelp" class="form-control" placeholder="No Telp" value="<?php echo $_SESSION['member']['no_hp'] ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" name="kota" disabled>
                                    <?php foreach ($tampil_kota as $key => $value) {?>
                                        <option value="<?php echo $value['id_kota'];?>" <?php if ($value['id_kota'] == $_SESSION['member']['id_kota']) { echo 'selected';}?>><?php echo $value['nama_kota']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="alamat" id="message" class="form-control" rows="8" placeholder="Alamat" disabled><?php echo $_SESSION['member']['alamat'] ?></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Detail Order</h2>
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                                <table class="table table-condensed total-result text-right">
                                    <tr>
                                        
                                        <td>Sub Total</td>
                                        <td>Rp <?php foreach ($keranjang as $key => $value) {
                                            $hasil += $value['sub_total'];
                                        }
                                        echo "<span id='sub_total'>".$hasil."</span>";?></td>
                                    </tr>
                                    <tr class="shipping-cost">
                                        <td>Shipping Cost</td>
                                        <td class="shiping_cost">Rp 0</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="total_seluruh">Rp 0</td>
                                    </tr>
                                </table>
                            </table>
                        </div>
                    </div>
                    <form method="POST" action="pages/aksi/aksi_checkout.php">
                        <input class="total_seluruh" type="hidden" name="sub_total" value="<?php $hasil ?>">
                            <input id="form_idkurir" type="hidden" name="id_kurir" value="id">
                            <input type="hidden" name="biaya" value="">
                            <div class="form-group col-md-12">
                                <button id="ok" type="submit" name="submit" class="btn btn-primary pull-right" style="margin-bottom: 1rem">Confirm Order</button>
                            </div>
                        </form>
                        <script>
                            $("#sub_total").hide();
                            function biaya_shiping() {
                                hasilsub = $("#sub_total").html(); 
                                container = $(".shiping_cost");
                                container_total = $(".total_seluruh");
                                hasil = $("#pil_kurir :selected").val(); 
                                $.ajax({
                                    type : "GET",
                                    data : "id_kurir="+hasil,
                                    url  : "pages/aksi/aksi_biayaShip.php",
                                    success : function (result) {
                                        $("#form_idkurir")
                                        var data = JSON.parse(result);
                                        container.text("Rp "+data['biaya']);
                                        container.val(data['biaya']);
                                        ttl = parseInt(data['biaya']) + parseInt(hasilsub);
                                        container_total.text("Rp "+ttl);
                                        container_total.val(ttl);
                                    }
                                })
                                
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="cart_items">
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
                                        <!-- <a style="cursor: pointer" class="cart_quantity_down" onclick="tambah(-1,<?php echo $value['id_produk']?>)"> - </a> -->
                                        <input disabled id="jumlah<?php echo $value['id_produk']?>" class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value['jumlah_beli'];?>" size="2">
                                        <!-- <a style="cursor: pointer" class="cart_quantity_up" onclick="tambah(1 ,<?php echo $value['id_produk']?>)"> + </a> -->
                                    </div>
                                </td>
                                
                                <td class="cart_total">
                                    <p id="total<?php echo $value['id_produk']?>" class="cart_total_price"><?php echo $value['sub_total'];?></p>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>