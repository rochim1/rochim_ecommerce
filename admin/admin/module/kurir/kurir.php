<?php 
$data_kurir = $kurir->tampil_kurir();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">kurir</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">kurir</li>
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
			<th>Nama kurir</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_kurir as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['nama_kurir'] ?></td>
				<td>
				<a href="index.php?halaman=ubahkurir&id=<?php echo $value['id_kurir'];?>" class="btn btn-warning btn-sm">Ubah</a>
				<a href="index.php?halaman=hapuskurir&id=<?php echo $value['id_kurir'];?>" class="btn btn-danger btn-sm">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahkurir" class="btn btn-primary">Tambah kurir</a>
</div>
</section>