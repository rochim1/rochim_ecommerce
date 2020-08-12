<?php 
$data_kota = $kota->tampil_kota();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kota</h1>
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
<table class="table table-bordered table-striped" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama kota</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_kota as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['nama_kota'] ?></td>
				<td>
				<a href="index.php?halaman=ubahkota&id=<?php echo $value['id_kota'];?>" class="btn btn-warning btn-sm">Ubah</a>
				<a href="index.php?halaman=hapuskota&id=<?php echo $value['id_kota'];?>" class="btn btn-danger btn-sm">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahkota" class="btn btn-primary">Tambah kota</a>
</div>
</section>