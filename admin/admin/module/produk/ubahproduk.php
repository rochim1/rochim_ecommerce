<?php 
$id = $_GET['id'];
$data_merek = $merek->tampil_merek();
$data_kategori = $kategori->tampil_kategori();
$data_produk = $produk->ambil_produk($id);
?><br>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ubah produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
		<form action="index.php?halaman=ubahproduk_aksi&id=<?php echo $id?>" method="post" enctype="multipart/form-data" class="form-horizontal pb-5">
			<div class="row">
				<div class="col-md-4">
						<div class="form-group">
							<label class="col-md-2 control-label">Foto </label>
								<div class="col-md-10"><img src="module/upload/produk/<?php echo $data_produk["gambar"];?>" class="h-100 w-100" ><br><br>
							<input type="file" name="foto"></div>
						</div>	

				
				<div class="card-header">
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-4">Slide</label>
					<div class="col-sm-8">
						<div class="form-check form-check-inline">
							<input <?php if($data_produk['slide'] == "Y"){echo "checked";}?> class="form-check-input" type="radio" name="RBslide" id="inlineRadio1" value="Y">
							<label class="form-check-label" for="inlineRadio1">Ya</label>
						</div>
						<div class="form-check form-check-inline">
							<input <?php if($data_produk['slide'] == "N"){echo "checked";}?> class="form-check-input" type="radio" name="RBslide" id="inlineRadio2" value="N">
							<label class="form-check-label" for="inlineRadio2">Tidak</label>
						</div>
					</div>
				
				</div>
				
				
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-4">Rekomendasi</label>
					<div class="col-sm-8">
						<div class="form-check form-check-inline">
							<input <?php if($data_produk['rekomendasi'] == "Y"){echo "checked";}?> class="form-check-input" type="radio" name="RBrekomendasi" id="inlineRadio3" value="Y">
							<label class="form-check-label" for="inlineRadio1">Ya</label>
						</div>
						<div class="form-check form-check-inline">
							<input <?php if($data_produk['rekomendasi'] == "N"){echo "checked";}?> class="form-check-input" type="radio" name="RBrekomendasi" id="inlineRadio4" value="N">
							<label class="form-check-label" for="inlineRadio2">Tidak</label>
						</div>
					</div>
				</div>
				</div>		
				</div>
				<div class="col-md-8">
					<div class="form-group row">
						<label class="col-md-2 control-label">Pilih Kategori</label>
						<div class="col-md-10">
							<select class="form-control" name="id_kategori" required="">
								<option value="">pilih kategori</option>
								<?php foreach ($data_kategori as $key => $value): ?>

									<option value="<?php echo $value['id_kategori'];?>" <?php if($data_produk['id_kategori']==$value['id_kategori']){echo "selected";} ?>><?php echo $value['nama_kategori']; ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-2 control-label">Pilih Merek</label>
						<div class="col-md-10">
							<select class="form-control" name="id_merek" required="">
								<option value="">pilih Merek</option>
								<?php foreach ($data_merek as $key => $value): ?>
									<option value="<?php echo $value["id_merek"];?>" <?php if($data_produk['id_merek']==$value['id_merek']){echo "selected";} ?> ><?php echo $value["nama_merek"];  ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-2 control-label">Nama Produk</label>
						<div  class="col-md-10">
							<input type="text" name="nama" class="form-control" value="<?php echo $data_produk["nama_produk"];?>">
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-md-2 control-label">Deskripsi</label>
						<div class="col-md-10"><textarea rows="8" class="form-control" name="deskripsi"><?php echo $data_produk["deskripsi"];?></textarea></div>
					</div>

					<div class="form-group row">
						<label class="col-md-2 control-label">Harga</label>
						<div  class="col-md-10">
							<input type="number" name="harga" class="form-control" value="<?php echo $data_produk["harga"];?>" >
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-2 control-label">Stock</label>
						<div  class="col-md-10">
							<input type="number" name="stock" class="form-control" value="<?php echo $data_produk["harga"];?>" >
						</div>
					</div>
				</div>
				
			</div>				
			<button class="btn btn-primary float-right" name="simpan">Simpan</button>
			
		</form>
		
	</div>
</section>