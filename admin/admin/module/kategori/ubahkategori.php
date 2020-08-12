<?php 
$idkategori=$_GET['kd'];
$hasilkategori = $kategori->ambil_kategori($idkategori);
?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah Kategori</h1>
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
                
        <form method="post" action="index.php?halaman=ubahkategori_aksi&id=<?php echo $idkategori?>" class="form-horizontal">

            <div class="form-group">
                <label class="col-md-2 control-label">Nama Kategori</label>
                <div  class="col-md-8">
                    <input type="text" name="nama" required class="form-control" value=" <?php echo $hasilkategori['nama_kategori'] ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Deskripsi</label>
                <div  class="col-md-8">
                    <textarea type="text" name="deskripsi" class="form-control"><?php echo $hasilkategori['deskripsi_kategori']?></textarea>
                </div>
            </div>
            <button class="button btn-primary" name="simpan">Simpan</button>

        </form>
    </div>
</section>   

