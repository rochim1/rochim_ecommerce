<?php 
$data_kota = $kota->tampil_kota();
$data_kurir = $kurir->tampil_kurir();
$data_biaya = $biaya->tampil_biaya();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah biaya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">biaya</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">

<form method="post" action="index.php?halaman=tambahbiaya_aksi" enctype="multipart/form-data" class="form-horizontal">
	
  <div class="form-group">
		<label class="col-md-2 control-label">Pilih kota</label>
		<div class="col-md-8"><select class="form-control" name="id_kota" required>
			<option value="">pilih kota</option>
			<?php foreach ($data_kota as $key => $value): ?>
				<option required value="<?php echo $value["id_kota"];?>"> <?php echo $value["nama_kota"]; ?></option>
			<?php endforeach ?>
		</select></div>
	</div>

  <div class="form-group">
		<label class="col-md-2 control-label">Pilih kurir</label>
		<div class="col-md-8"><select class="form-control" name="id_kurir" required>
			<option value="">pilih kurir</option>
			<?php foreach ($data_kurir as $key => $value): ?>
				<option required value="<?php echo $value["id_kurir"];?>"> <?php echo $value["nama_kurir"]; ?></option>
			<?php endforeach ?>
		</select></div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">biaya Pengiriman</label>
		<div  class="col-md-8">
			<input type="number" required name="biaya" class="form-control">
		</div>
	</div>
	
	<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
</form>


</div>
</section>