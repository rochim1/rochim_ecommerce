<?php 
//mengambil parameter dari URL
$id_produk = $_GET['id'];
//variabel yang menyimpan class produk, menjalankan function ambil produk()
$detail_produk = $produk->ambil_produk($id_produk);
?>
<pre>
<?php print_r($detail_produk)?>
</pre>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Detail produk</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">detail produk</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<img src="module/upload/produk/<?php echo $detail_produk['gambar'];?>" class="img-responsive w-100">
			</div>
			<div class="col-md-8">
				<table class="table">
					<tr>
						<td>Nama kategori</td>
						<td><?php echo $detail_produk['nama_kategori']; ?></td>
					</tr>
					<tr>
						<td>Nama produk</td>
						<td><?php echo $detail_produk['nama_merek']; ?></td>
					</tr>
					<tr>
						<td>Nama Produk</td>
						<td><?php echo $detail_produk['nama_produk']; ?></td>
					</tr>
					<tr>
						<td>Harga Produk</td>
						<td><?php echo $detail_produk['harga']; ?></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td><?php echo $detail_produk['deskripsi']; ?></td>
					</tr>
					<tr>
						<td>Stock</td>
						<td><?php echo $detail_produk['stock']; ?></td>
					</tr>
				</table>
				<div class="row">
				<div class="col-md-6">
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-2">Slide</label>
					<div class="col-sm-10">
						<div class="form-check form-check-inline">
							<input <?php if($detail_produk['slide'] == "Y"){echo "checked";}?> class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							<label class="form-check-label" for="inlineRadio1">Ya</label>
						</div>
						<div class="form-check form-check-inline">
							<input <?php if($detail_produk['slide'] == "N"){echo "checked";}?> class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							<label class="form-check-label" for="inlineRadio2">Tidak</label>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-6">
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-4">Rekomendasi</label>
					<div class="col-sm-8">
						<div class="form-check form-check-inline">
							<input <?php if($detail_produk['rekomendasi'] == "Y"){echo "checked";}?> class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio3" value="option1">
							<label class="form-check-label" for="inlineRadio1">Ya</label>
						</div>
						<div class="form-check form-check-inline">
							<input <?php if($detail_produk['rekomendasi'] == "N"){echo "checked";}?> class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio4" value="option2">
							<label class="form-check-label" for="inlineRadio2">Tidak</label>
						</div>
					</div>
				</div>
				</div>
				</div>
				<a href="index.php?halaman=produk" class="btn btn-danger btn-sm">Kembali</a>
			</div>
		</div>
	</div>
</section>