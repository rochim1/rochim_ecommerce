        <?php  
        
        $kategori->ubah_kategori($_POST['nama'], $_POST['deskripsi'],$_GET['id']);

        echo "<script>alert('berhasil diubah') ;</script>";
        echo "<script>location='index.php?halaman=kategori';</script>";
        
        ?>