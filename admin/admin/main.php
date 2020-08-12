<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminLTE/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminLTE/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="adminLTE/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="index.php?halaman=kategori" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?halaman=merek" class="nav-link">
              <i class="fas fa-tags"></i>
              <p>
                Merek
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?halaman=produk" class="nav-link">
              <i class="fas fa-boxes"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Biaya Kirim
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=kota" class="nav-link">
                  <i class="far fa-building"></i>
                  <p>
                    Kota
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=kurir" class="nav-link">
                  <i class="fas fa-truck-loading"></i>
                  <p>
                    Kurir
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=biaya" class="nav-link">
                  <i class="fas fa-hand-holding-usd"></i>
                  <p>
                    Biaya Kirim
                  </p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <?php 
			//jika tidak ada parameter halaman maka munculkan index
				if (!isset($_GET['halaman']))
				{
					include'landing.php';
				}
				else 
				{
					if ($_GET['halaman']=="kategori") 
					{
						include'module/kategori/kategori.php';
					}
					elseif ($_GET['halaman']=="tambahkategori") 
					{
						include'module/kategori/tambahkategori.php';
          }
					elseif ($_GET['halaman']=="tambahkategori_aksi") 
					{
						include'module/kategori/aksi/simpan.php';
          }
          elseif($_GET['halaman']=="detailkategori")
					{
						include'module/kategori/detailkategori.php';
					}
					elseif($_GET['halaman']=="hapuskategori")
					{
						include'module/kategori/hapuskategori.php';
					}
					elseif($_GET['halaman']=="ubahkategori")
					{
						include'module/kategori/ubahkategori.php';
          }
          elseif($_GET['halaman']=="ubahkategori_aksi")
					{
						include'module/kategori/aksi/ubah.php';
					}

          elseif ($_GET['halaman']=="merek") 
					{
						include'module/merek/merek.php';
					}
					elseif ($_GET['halaman']=="tambahmerek") 
					{
						include'module/merek/tambahmerek.php';
          }
					elseif ($_GET['halaman']=="tambahmerek_aksi") 
					{
						include'module/merek/aksi/simpan.php';
          }
          elseif($_GET['halaman']=="detailmerek")
					{
						include'module/merek/detailmerek.php';
					}
					elseif($_GET['halaman']=="hapusmerek")
					{
						include'module/merek/hapusmerek.php';
					}
					elseif($_GET['halaman']=="ubahmerek")
					{
						include'module/merek/ubahmerek.php';
          }
          elseif($_GET['halaman']=="ubahmerek_aksi")
					{
						include'module/merek/aksi/ubah.php';
					}
          
					elseif ($_GET['halaman']=="produk") 
					{
						include'module/produk/produk.php';
					}
					elseif ($_GET['halaman']=="tambahproduk") 
					{
						include'module/produk/tambahproduk.php';
          }
					elseif ($_GET['halaman']=="tambahproduk_aksi") 
					{
						include'module/produk/aksi/simpan.php';
          }
          elseif($_GET['halaman']=="detailproduk")
					{
						include'module/produk/detailproduk.php';
					}
					elseif($_GET['halaman']=="hapusproduk")
					{
						include'module/produk/hapusproduk.php';
					}
					elseif($_GET['halaman']=="ubahproduk")
					{
						include'module/produk/ubahproduk.php';
          }
          elseif($_GET['halaman']=="ubahproduk_aksi")
					{
						include'module/produk/aksi/ubah.php';
					}      

          elseif ($_GET['halaman']=="kota") 
					{
						include'module/kota/kota.php';
					}
					elseif ($_GET['halaman']=="tambahkota") 
					{
						include'module/kota/tambahkota.php';
          }
					elseif ($_GET['halaman']=="tambahkota_aksi") 
					{
						include'module/kota/aksi/simpan.php';
          }
          elseif($_GET['halaman']=="detailkota")
					{
						include'module/kota/detailkota.php';
					}
					elseif($_GET['halaman']=="hapuskota")
					{
						include'module/kota/hapuskota.php';
					}
					elseif($_GET['halaman']=="ubahkota")
					{
						include'module/kota/ubahkota.php';
          }
          elseif($_GET['halaman']=="ubahkota_aksi")
					{
						include'module/kota/aksi/ubah.php';
					}

          elseif ($_GET['halaman']=="kurir") 
					{
						include'module/kurir/kurir.php';
					}
					elseif ($_GET['halaman']=="tambahkurir") 
					{
						include'module/kurir/tambahkurir.php';
          }
					elseif ($_GET['halaman']=="tambahkurir_aksi") 
					{
						include'module/kurir/aksi/simpan.php';
          }
          elseif($_GET['halaman']=="detailkurir")
					{
						include'module/kurir/detailkurir.php';
					}
					elseif($_GET['halaman']=="hapuskurir")
					{
						include'module/kurir/hapuskurir.php';
					}
					elseif($_GET['halaman']=="ubahkurir")
					{
						include'module/kurir/ubahkurir.php';
          }
          elseif($_GET['halaman']=="ubahkurir_aksi")
					{
						include'module/kurir/aksi/ubah.php';
					}
          
          elseif ($_GET['halaman']=="biaya") 
					{
						include'module/biaya/biaya.php';
					}
					elseif ($_GET['halaman']=="tambahbiaya") 
					{
						include'module/biaya/tambahbiaya.php';
          }
					elseif ($_GET['halaman']=="tambahbiaya_aksi") 
					{
						include'module/biaya/aksi/simpan.php';
          }
          elseif($_GET['halaman']=="detailbiaya")
					{
						include'module/biaya/detailbiaya.php';
					}
					elseif($_GET['halaman']=="hapusbiaya")
					{
						include'module/biaya/hapusbiaya.php';
					}
					elseif($_GET['halaman']=="ubahbiaya")
					{
						include'module/biaya/ubahbiaya.php';
          }
          elseif($_GET['halaman']=="ubahbiaya_aksi")
					{
						include'module/biaya/aksi/ubah.php';
					}
          
          
         



					elseif ($_GET['halaman']=="pelanggan") 
					{
						include'pelanggan/tampilpelanggan.php';
					}
					elseif ($_GET['halaman']=="tambahpelanggan") 
					{
						include'pelanggan/tambahpelanggan.php';
					}
					elseif ($_GET['halaman']=="ubahpelanggan") 
					{
						include'pelanggan/ubahpelanggan.php';
					}
					elseif ($_GET['halaman']=="hapuspelanggan") 
					{
						include'pelanggan/hapuspelanggan.php';
					}
					elseif ($_GET['halaman']=="detailpelanggan") 
					{
						include'pelanggan/detailpelanggan.php';
					}
					elseif ($_GET['halaman']=="pembelian") 
					{
						include'pembelian/tampilpembelian.php';
					}
					elseif ($_GET['halaman']=="pengaturan") 
					{
						include'pengaturan/tampilpengaturan.php';
					}
					elseif ($_GET['halaman']=="logout") 
					{
						include'logout/tampillogout.php';
					}	
					
					elseif($_GET['halaman']=="nota")
					{
						include'pembelian/nota.php';
					}
					elseif($_GET['halaman']=="ubahpengaturan")
					{
						include'pengaturan/ubahpengaturan.php';
					}
				}

				?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
