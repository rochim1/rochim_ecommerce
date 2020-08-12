<?php 
$id = $_GET['id'];
$data_kota = $kota->tampil_kota();
$data_kurir = $kurir->tampil_kurir();
$data_biaya = $biaya->ambil_biaya($id);
?><br>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah biaya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ubah biaya</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
		<form method="post" action="index.php?halaman=ubahbiaya_aksi&id=<?php echo $id;?>" enctype="multipart/form-data" class="form-horizontal pb-5">
					
					<div class="form-group row">
						<label class="col-md-2 control-label">jumlah biaya</label>
						<div  class="col-md-10">
							<input type="text" required name="biaya" class="form-control" value="<?php echo $data_biaya["biaya"];?>">
						</div>
					</div>

          <div class="form-group row">
						<label class="col-md-2 control-label">Pilih kurir</label>
						<div class="col-md-10">
							<select class="form-control" name="id_kurir" required>
								<option value="">pilih kurir</option>
								<?php foreach ($data_kurir as $key => $value): ?>

									<option value="<?php echo $value['id_kurir'];?>" <?php if($data_biaya['id_kurir']==$value['id_kurir']){echo "selected";} ?>><?php echo $value['nama_kurir']; ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
          <div class="form-group row">
						<label class="col-md-2 control-label">Pilih Kota</label>
						<div class="col-md-10">
							<select class="form-control" name="id_kota" required>
								<option value="">pilih Kota</option>
								<?php foreach ($data_kota as $key => $value): ?>

									<option value="<?php echo $value['id_kota'];?>" <?php if($data_biaya['kota']==$value['id_kota']){echo "selected";} ?>><?php echo $value['nama_kota']; ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
								
			<button type="submit" class="btn btn-primary float-right" >Simpan</button>
			
		</form>
		
	</div>
</section>