<?php 
$data_produk = $kategori->tampil_kategori();
$data_merek = $merek->tampil_merek();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">merek</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">

<form method="post" enctype="multipart/form-data" action="index.php?halaman=tambahproduk_aksi" class="form-horizontal">
	<div class="form-group">
		<label class="col-md-2 control-label">Pilih Kategori</label>
		<div class="col-md-8"><select class="form-control" name="id_kategori" required>
			<option value="">pilih kategori</option>
			<?php foreach ($data_produk as $key => $value): ?>
				<option value="<?php echo $value["id_kategori"];?>"><?php echo $value["nama_kategori"]; ?></option>
			<?php endforeach ?>
		</select></div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Pilih Merek</label>
		<div class="col-md-8"><select class="form-control" name="id_merek" required>
			<option value="">pilih Merek</option>
			<?php foreach ($data_merek as $key => $value): ?>
				<option value="<?php echo $value["id_merek"];?>"><?php echo $value["nama_merek"]; ?></option>
			<?php endforeach ?>
		</select></div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Nama Produk</label>
		<div  class="col-md-8">
			<input required type="text" name="nama" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Deskripsi</label>
		<div class="col-md-8"><textarea rows="8" class="form-control" name="deskripsi"></textarea></div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Harga</label>
		<div  class="col-md-8">
			<input required type="number" name="harga" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Foto</label>
		<div class="col-md-8"><input required type="file" name="foto"></div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Stock</label>
		<div  class="col-md-8">
			<input required type="number" name="stock" class="form-control">
		</div>
	</div>

	
	<button class="btn btn-primary" name="simpan">Simpan</button>
</form>
</div>
</section>