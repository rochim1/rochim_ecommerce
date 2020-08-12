<?php 
$data_kategori = $kategori->tampil_kategori();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Kategori</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">kategori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th width="50px">No</th>
			<th width="200px">Nama Kategori</th>
			<th>Deskripsi</th>
			<th width="130px">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_kategori as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value['nama_kategori'] ?></td>
			<td><?php echo $value['deskripsi_kategori'] ?></td>
			<td><a href="index.php?halaman=ubahkategori&kd=<?php echo $value['id_kategori'];?>" class="button btn-warning btn-sm">Ubah</a>  <a href="index.php?halaman=hapuskategori&id=<?php echo $value['id_kategori'];?>" class="button btn-danger btn-sm">Hapus</a></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahkategori" class="btn btn-primary">Tambah Data</a>
    </div>
</section>   

