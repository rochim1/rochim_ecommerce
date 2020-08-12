<?php
$tampil_detail = $produk->tampil_checkout();

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
                                <li><a><i class="fa fa-envelope"></i>muhammadnurrochim</a></li>
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
                                <li><a href="" class="active">Home</a></li>
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
    </header><section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">History</li>
                </ol>
            </div>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i> Checkout berhasil !</div>        <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu text-center">
                                <td>Invoice</td>
                                <td>Items</td>
                                <td>Total</td>
                                <td>Status</td>
                                <td>jam</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($tampil_detail as $key => $value) {?>
                            <tr class="text-center">
                                <td><a href="detail-order.php?inv=7878"><?php echo $value['id_order']?></a></td>
                                <td>
                                <?php
                                $data_barang = $produk->data_barang($_SESSION['member']['id_member'],$value['id_order']);
                                // echo $value['id_order']
                                    foreach ($data_barang as $key => $nilai) {
                                        $nama_brg = $produk->ambil_produk_simple($nilai['id_produk']);
                                            echo $nama_brg['nama_produk'].",";
                                        
                                    }
                                ?>                          </td>
                                <td>
                                Rp <?php echo $value['Total_harga'];?>                       </td>
                                <td>
                                <?php if ($value['status_order'] == p) {
                                    echo "pending";
                                }?>                            </td>
                                <td><?php echo $value['jam_order']?></td>
                                <td><?php echo $value['tgl_order']?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="do_action">
            <div class="container">
            </div>
        </section>