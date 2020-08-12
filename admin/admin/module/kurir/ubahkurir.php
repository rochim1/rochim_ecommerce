<?php 
$id = $_GET['id'];
$data_kurir = $kurir->ambil_kurir($id);
?><br>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah kurir</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ubah kurir</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
		<form method="post" action="index.php?halaman=ubahkurir_aksi&id=<?php echo $id;?>" enctype="multipart/form-data" class="form-horizontal pb-5">
					
					<div class="form-group row">
						<label class="col-md-2 control-label">Nama kurir</label>
						<div  class="col-md-10">
							<input type="text" required name="nama" class="form-control" value="<?php echo $data_kurir["nama_kurir"];?>">
						</div>
					</div>
								
			<button type="submit" class="btn btn-primary float-right" >Simpan</button>
			
		</form>
		
	</div>
</section>