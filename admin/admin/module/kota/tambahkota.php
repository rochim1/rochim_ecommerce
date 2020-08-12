<?php 
$data_kota = $kota->tampil_kota();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Kota</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">kota</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">

<form method="post" action="index.php?halaman=tambahkota_aksi" enctype="multipart/form-data" class="form-horizontal">
	
	<div class="form-group">
		<label class="col-md-2 control-label">Nama Kota</label>
		<div  class="col-md-8">
			<input type="text" required name="nama" class="form-control">
		</div>
	</div>
	
	<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
</form>


</div>
</section>