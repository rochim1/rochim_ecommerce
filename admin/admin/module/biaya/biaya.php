<?php 
$data_biaya = $biaya->tampil_biaya();
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">biaya</h1> fitur saya tambahi sistem tidak bisa menginputkan duplikasi data pada tambah atau ubah.. :)
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
<table class="table table-bordered table-striped" id="example1">
	<thead>
		<tr>
			<th>No</th>
			<th>kota</th>
			<th>kurir</th>
			<th>biaya</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_biaya as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $kota->ambil_kota_satu($value['kota'])['nama_kota']; ?></td>
				<td><?php echo $kurir->ambil_kurir_satu($value['id_kurir'])['nama_kurir']; ?></td>
				<td><?php echo $value['biaya'] ?></td>
				<td>
				<a href="index.php?halaman=ubahbiaya&id=<?php echo $value['id_biaya_kirim'];?>" class="btn btn-warning btn-sm">Ubah</a>
				<a href="index.php?halaman=hapusbiaya&id=<?php echo $value['id_biaya_kirim'];?>" class="btn btn-danger btn-sm">Hapus</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahbiaya" class="btn btn-primary">Tambah biaya</a>
</div>
</section>