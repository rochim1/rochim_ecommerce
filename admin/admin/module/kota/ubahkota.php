<?php 
$id = $_GET['id'];
$data_kota = $kota->ambil_kota($id);
?><br>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah kota</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ubah kota</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
		<form method="post" action="index.php?halaman=ubahkota_aksi&id=<?php echo $id;?>" enctype="multipart/form-data" class="form-horizontal pb-5">
					
					<div class="form-group row">
						<label class="col-md-2 control-label">Nama kota</label>
						<div  class="col-md-10">
							<input type="text" required name="nama" class="form-control" value="<?php echo $data_kota["nama_kota"];?>">
						</div>
					</div>
								
			<button type="submit" class="btn btn-primary float-right" >Simpan</button>
			
		</form>
		
	</div>
</section>