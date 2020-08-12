<?php 
$data_merek = $merek->tampil_merek();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data merek</h1>
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
        <table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th width="50px">No</th>
			<th width="200px">Nama merek</th>
			<th width="130px">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_merek as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value['nama_merek'] ?></td>
			<td><a href="index.php?halaman=ubahmerek&kd=<?php echo $value['id_merek'];?>" class="button btn-warning btn-sm">Ubah</a>  <a href="index.php?halaman=hapusmerek&id=<?php echo $value['id_merek'];?>" class="button btn-danger btn-sm">Hapus</a></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahmerek" class="btn btn-primary">Tambah Data</a>
    </div>
</section>   

