<?php 
$data_produk = $produk->tampil_produk();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data produk</h1>fitur saya tambahi sistem tidak bisa menginputkan duplikasi data (nama produk, kategori,merek yang sama) pada tambah atau ubah.. :)
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
<table class="table table-bordered table-striped" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama kategori</th>
			<th>Merek</th>
			<th>Nama Produk</th>
			<th>Harga produk</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_produk as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['nama_kategori'] ?></td>
				<td><?php echo $value['nama_merek'] ?></td>
				<td><?php echo $value['nama_produk'] ?></td>
				<td><?php echo $value['harga'] ?></td>
				<td> <img src="module/upload/produk/<?php echo $value['gambar'];?>" class="rounded mx-auto d-block" width="80px">
				<td>
				<a href="index.php?halaman=detailproduk&id=<?php echo $value['id_produk']; ?>" class="btn btn-info btn-sm">Detail</a>
				<a href="index.php?halaman=ubahproduk&id=<?php echo $value['id_produk'];?>" class="btn btn-warning btn-sm">Ubah</a>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $value['id_produk'];?>" class="btn btn-danger btn-sm">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a>
</div>
</section>