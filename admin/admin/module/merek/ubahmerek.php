<?php 
$idmerek=$_GET['kd'];
$hasilmerek = $merek->ambil_merek($idmerek);
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah merek</h1>
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
                
        <form method="post" action=index.php?halaman=ubahmerek_aksi&id=<?php echo $idmerek?>" class="form-horizontal">

            <div class="form-group">
                <label class="col-md-2 control-label">Nama merek</label>
                <div  class="col-md-8">
                    <input type="text" required name="nama" class="form-control" value=" <?php echo $hasilmerek['nama_merek'] ?>">
                </div>
            </div>

            <button class="button btn-primary" name="simpan">Simpan</button>

        </form>
        
    </div>
</section>   

