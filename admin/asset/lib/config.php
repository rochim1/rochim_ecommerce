<?php
session_start(); 
$_SESSION['admin'] = "";
// yang dibutuhkan untuk menghubungkan ke database
/*
1. adanya server = localhost 
2. adanya user = root
3. adanya password = 
4. adanya adanya nama database = agustus-aplikasi
*/
$mysqli =new mysqli("localhost","root","","project_ecommerce");

class admin
{
    public $koneksi;
	// membuat functiion penampung
	function __construct($mysqli) //fungction construct adalahfungsi yang pertama kali dijalankan pada sebuah class dan menangkap attribut dari objek
	{
		// mendeklarasikan $koneksi terhubung dengan $mysqli(yaitu variabel yang menghubungkan ke database) 
		$this->koneksi = $mysqli;
    }
    
    function login_admin($email, $password)
    {
        $pass = sha1($password);
        $ambil = $this->koneksi->query("SELECT * FROM tbl_admin WHERE email='$email' AND password ='$pass'");
        $hitung = $ambil->num_rows;
		// jika isi dari hitung sama dengan 1 (benar) maka
		if ($hitung==1) 
		{
			$akun = $ambil->fetch_assoc();
			// data yang dipecah disimpan kedalam sesion member
			$_SESSION['admin'] = $akun;
			// mengoutputkan berhasil
			return 'sukses';
		}
		else
		{
			//mengoutputkan gagal
			return 'gagal';
		}
    }
}
$admin = new admin($mysqli);

class kategori
{
    public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi = $mysqli;
	}
	
	function tampil_kategori()
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_kategori");

			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}

			return $bungkus;
		}
	function simpan_kategori($nama, $kategori)
		{
			$this->koneksi->query("INSERT INTO tbl_kategori (nama_kategori, deskripsi_kategori) VALUES ('$nama','$kategori')");
		}
    function hapus_kategori($id)
		{
			$this->koneksi->query("DELETE FROM tbl_kategori WHERE id_kategori='$id'");
		}

	function ambil_kategori($idkategori)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_kategori WHERE id_kategori='$idkategori'");

			$pecah = $ambil->fetch_assoc();
			return $pecah;
		}

	function ubah_kategori($nama, $deskripsi, $id)
		{
			$this->koneksi->query("UPDATE tbl_kategori SET nama_kategori='$nama', deskripsi_kategori='$deskripsi' WHERE id_kategori='$id'");
		}
}
$kategori = new kategori($mysqli);


class merek
{
    public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi = $mysqli;
	}
	
	function tampil_merek()
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_merek");

			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}

			return $bungkus;
		}
	function simpan_merek($nama)
		{
			$this->koneksi->query("INSERT INTO tbl_merek (nama_merek) VALUES ('$nama')");
		}
    function hapus_merek($id)
		{
			$this->koneksi->query("DELETE FROM tbl_merek WHERE id_merek='$id'");
		}

	function ambil_merek($idmerek)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_merek WHERE id_merek='$idmerek'");

			$pecah = $ambil->fetch_assoc();
			return $pecah;
		}

	function ubah_merek($nama, $id)
		{
			$this->koneksi->query("UPDATE tbl_merek SET nama_merek='$nama' WHERE id_merek='$id'");
		}
}
$merek = new merek($mysqli);


class produk
	{
		public $koneksi;
		function __construct($mysqli)
		{
			$this->koneksi = $mysqli;
		}
		function tampil_produk()
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_produk INNER JOIN tbl_kategori ON 
			tbl_produk.id_kategori_produk = tbl_kategori.id_kategori INNER JOIN tbl_merek 
			ON tbl_merek.id_merek = tbl_produk.id_merek 
			");	
			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}
			return $bungkus;
		}

		function ambil_produk($id_produk)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_produk INNER JOIN tbl_kategori ON 
			tbl_produk.id_kategori_produk=tbl_kategori.id_kategori 
			INNER JOIN tbl_merek ON tbl_merek.id_merek = tbl_produk.id_merek
			WHERE tbl_produk.id_produk='$id_produk'");

			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}
		function ambil_produk_satu($id_produk)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");

			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}

		function simpan_produk($id_kategori,$id_merek,$nama,$deskripsi,$harga,$foto,$stock)
		{
			$waktu = date('Y-m-d-H-i-s-');
			$namafoto = $foto['name'];
			$namafiks = $waktu.$namafoto;
			$lokasifoto = $foto['tmp_name'];
			move_uploaded_file($lokasifoto, "module/upload/produk/$namafiks");
			$data_produk = $this->tampil_produk();
			foreach ($data_produk as $key => $value) 
			{
				if ($value['id_kategori_produk']==$id_kategori && $value['id_merek']==$id_merek && $value['nama_produk']==$nama) 
				{	
					echo "<script>alert('data sudah ada, tidak dapat diinputkan') ;</script>";
					echo "<script>location='index.php?halaman=produk';</script>";
					return 0;
				}
			}
			$this->koneksi->query("INSERT INTO tbl_produk (id_kategori_produk,id_merek,nama_produk,deskripsi,harga,gambar,stock,slide,rekomendasi) 
			VALUES ('$id_kategori','$id_merek','$nama', '$deskripsi', '$harga', '$namafiks' ,'$stock', 'NONE','NONE')");	
		}

		function hapus_produk($id)
		{
			$ambil = $this->ambil_produk_satu($id);
			$foto = $ambil['gambar'];
			if(file_exists("module/upload/produk/$foto"))
			{
				unlink("module/upload/produk/$foto");
			}
			$this->koneksi->query("DELETE FROM tbl_produk WHERE id_produk='$id'");
		}
		
		function ubah_produk($id_kategori,$id_merek,$nama,$deskripsi,$harga,$foto,$stock,$slide,$rekomendasi,$id)
		{
			$waktu = date('Y-m-d-H-i-s-');
			$nama_foto = $foto['name'];
			$lokasi_foto = $foto['tmp_name'];

			$data_produk = $this->tampil_produk();
			foreach ($data_produk as $key => $value) 
			{
				if ($value['id_kategori_produk']==$id_kategori && $value['id_merek']==$id_merek && $value['nama_produk']==$nama && $value['id_produk']!=$id) 
				{	
					echo "<script>alert('data sudah ada, tidak dapat diinputkan') ;</script>";
					echo "<script>location='index.php?halaman=produk';</script>";
					return 0;
				}
			}
			if(empty($lokasi_foto))
			{
			// mengubah data yang ada di table pelanggan berdasarkan id_pelanggan kecuali fotonya (foto tidak di simpan/diubah)
				$this->koneksi->query("UPDATE tbl_produk SET id_kategori_produk='$id_kategori',id_merek='$id_merek', nama_produk='$nama', deskripsi='$deskripsi', harga='$harga', slide='$slide', rekomendasi='$rekomendasi' WHERE id_produk='$id'");
			}
			// selain itu, ada lokasi foto(foto diubah jadi harusdisimpan)
			else
			{
				$ambil = $this->ambil_produk_satu($id);
				$foto_lama = $ambil['gambar'];
				if(file_exists("module/upload/produk/$foto_lama"))
				{
			// menghapus foto yang telah tersimpan
					unlink("module/upload/produk/$foto_lama");
				}
				$waktu = date("Y-m-d-H-i-s");
				$namafiks = $waktu.$nama_foto;
			// mengupload foto yang baru
				move_uploaded_file($lokasi_foto, "module/upload/produk/$namafiks");
			// mengubah data yang ada di table pelanggan berserta fotonya berdasarkan id_pelanggan
				$this->koneksi->query("UPDATE tbl_produk SET id_kategori_produk='$id_kategori',id_merek='$id_merek', nama_produk='$nama', deskripsi='$deskripsi', harga='$harga', gambar='$namafiks',slide='$slide', rekomendasi='$rekomendasi' WHERE id_produk='$id'");
			}
		}
	}
	$produk = new produk($mysqli);

	class kota
	{
		public $koneksi;

		function __construct($mysqli){
			$this->koneksi = $mysqli;
		}

		function tampil_kota()
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_kota");

			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}

			return $bungkus;
		}

		function ambil_kota($idkota)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_kota WHERE id_kota='$idkota'");

			$pecah = $ambil->fetch_assoc();
			return $pecah;
		}

		function ubah_kota($idkota , $namakota)
		{
			$this->koneksi->query("UPDATE tbl_kota SET nama_kota='$namakota' WHERE id_kota='$idkota'");
		}
		function hapus_kota($id)
		{
			$this->koneksi->query("DELETE FROM tbl_kota WHERE id_kota='$id'");
		}

		function simpan_kota($nama)
		{
			$this->koneksi->query("INSERT INTO tbl_kota (nama_kota) VALUES ('$nama')");
		}

		function ambil_kota_satu($id_kota)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_kota WHERE id_kota='$id_kota'");

			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}
	}
	$kota = new kota($mysqli);

	
	class kurir
	{
		public $koneksi;

		function __construct($mysqli){
			$this->koneksi = $mysqli;
		}

		function tampil_kurir()
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_kurir");

			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}

			return $bungkus;
		}

		function ambil_kurir($idkurir)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_kurir WHERE id_kurir='$idkurir'");

			$pecah = $ambil->fetch_assoc();
			return $pecah;
		}

		function ubah_kurir($idkurir , $namakurir)
		{
			$this->koneksi->query("UPDATE tbl_kurir SET nama_kurir='$namakurir' WHERE id_kurir='$idkurir'");
		}
		function hapus_kurir($id)
		{
			$this->koneksi->query("DELETE FROM tbl_kurir WHERE id_kurir='$id'");
		}

		function simpan_kurir($nama)
		{
			$this->koneksi->query("INSERT INTO tbl_kurir (nama_kurir) VALUES ('$nama')");
		}
		function ambil_kurir_satu($id_kurir)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_kurir WHERE id_kurir='$id_kurir'");

			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}
	}
	$kurir = new kurir($mysqli);

	class biaya
	{
		public $koneksi;

		function __construct($mysqli){
			$this->koneksi = $mysqli;
		}

		function tampil_biaya()
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_biaya_kirim");

			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}

			return $bungkus;
		}

		function ambil_biaya($idbiaya)
		{
			$ambil = $this->koneksi->query("SELECT * FROM tbl_biaya_kirim WHERE id_biaya_kirim='$idbiaya'");

			$pecah = $ambil->fetch_assoc();
			return $pecah;
		}

		function ubah_biaya($id,$jumlahbiaya,$kurir,$kota)
		{
			$data_biaya = $this->tampil_biaya();
			foreach ($data_biaya as $key => $value) {
				if ($value['kota']==$kota && $value['id_kurir']==$kurir && $value['id_biaya_kirim']!=$id) 
				{	
					echo "<script>alert('data sudah ada, tidak dapat diinputkan') ;</script>";
					echo "<script>location='index.php?halaman=biaya';</script>";
					return 0;
				}
			}
			$this->koneksi->query("UPDATE tbl_biaya_kirim SET biaya='$jumlahbiaya' , kota='$kota' , id_kurir='$kurir' WHERE id_biaya_kirim='$id'");
		}
		function hapus_biaya($id)
		{
			$this->koneksi->query("DELETE FROM tbl_biaya_kirim WHERE id_biaya_kirim='$id'");
		}

		function simpan_biaya($kurir , $kota, $biaya)
		{
			$data_biaya = $this->tampil_biaya();
			foreach ($data_biaya as $key => $value) {
				if ($value['kota']==$kota && $value['id_kurir']==$kurir) 
				{	
					echo "<script>alert('data sudah ada, tidak dapat diinputkan') ;</script>";
					echo "<script>location='index.php?halaman=biaya';</script>";
					return 0;
				}
			}
			$this->koneksi->query("INSERT INTO tbl_biaya_kirim (kota,biaya,id_kurir) VALUES ('$kota','$biaya','$kurir')");
			
		}
		
	}
	$biaya = new biaya($mysqli);