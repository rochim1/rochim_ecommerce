<?php
function random_password( $length = 8 ) 
{
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	$password = substr( str_shuffle( $chars ), 0, $length );
	return $password;
}
// membuat class pelanggan
class pelanggan
{
	// membuat atribut
	public $koneksi;
	// membuat functiion penampung
	function __construct($mysqli) //fungction construct adalahfungsi yang pertama kali dijalankan pada sebuah class dan menangkap attribut dari objek
	{
		// mendeklarasikan $koneksi terhubung dengan $mysqli(yaitu variabel yang menghubungkan ke database) 
		$this->koneksi = $mysqli;
	}

	function tampil_pelanggan() 
	{
		$ambil = $this->koneksi->query("SELECT * FROM pelanggan");
		
		while ($dataarray = $ambil->fetch_assoc())
		{
			$semuadata[]=$dataarray;
		} 
		return $semuadata;
		
		
	}

	function login_pelanggan($email, $password)
	{
		// merubah password kedalam bentuk encrypt(dikodekan)
		$pass = sha1($password);
		// mencocokan data yang ada didalam tabel pelanggan berdasarkan email dan password
		$ambil = $this->koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$pass'");

		// menghitung jumlah data yang cocok

		$hitung = $ambil->num_rows;
		echo '$hitung';
		// jika isi dari hitung sama dengan 1 (benar) maka
		if ($hitung==1) 
		{
			$akun = $ambil->fetch_assoc();
			// data yang dipecah disimpan kedalam sesion member
			$_SESSION['member'] = $akun;
			// mengoutputkan berhasil
			return 'berhasil';
		}
		else
		{
			//mengoutputkan gagal
			return 'gagal';
		}

	}

	function simpan_pelanggan($nama, $email, $telepon,$alamat, $foto)
	{
		$password= random_password(8);
		$pass= sha1($password);
		//mendapatkan namafoto
		$waktu = date('Y-m-d-H-i-s-');
		$namafoto = $foto['name'];
		//menggabungkan
		$namafiks = $waktu.$namafoto;
		$lokasifoto = $foto['tmp_name'];
		move_uploaded_file($lokasifoto, "foto/$namafiks");

		$this->koneksi->query("INSERT INTO pelanggan
			(nama_pelanggan,email_pelanggan,password_pelanggan,telepon_pelanggan,alamat_pelanggan, foto_pelanggan)
			VALUES ('$nama','$email','$pass','$telepon','$alamat','$namafiks')");

		$to = "$mail";
		$subject = "Pendaftaran Member";

		$message = "
		<html>
		<head>
			<title>HTML email</title>
		</head>
		<body>
			<p>Terimakasih telah mendaftar sebagai member kami</p>
			<p>Silahkan login menggunakan</p>
			<br>
			<b>E-mail = $email <br>
				password = $pass </b>

			</body>
			</html>
			";

// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
			$headers .= 'From: <mamadanjar@gmail.com>' . "\r\n";

			mail($to,$subject,$message,$headers);

		}

		function ambil_pelanggan($id)
		{
			$ambil = $this->koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan=('$id')");
			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}

		function hapus_pelanggan($id)
		{
		// mengambil data pelanggan berdasarkan Id
			$ambil = $this->ambil_pelanggan($id);
			$foto = $ambil['foto_pelanggan'];
		// jika ada file didalam folder foto maka
			if(file_exists("foto/$foto"))
			{
				unlink("foto/$foto");
			}

		//menghapus data dari table pelanggan berdasarkan id_pelanggan= '$id'
			$this->koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan='$id'");
		}

		function ubah_pelanggan($nama, $email, $telepon, $alamat, $foto, $id)
		{
		// mengambil nama foto dan tmp_name foto 
			$nama_foto = $foto['name'];
			$lokasi_foto = $foto['tmp_name'];

			if(empty($lokasi_foto))
			{
		// mengubah data yang ada di table pelanggan berdasarkan id_pelanggan kecuali fotonya (foto tidak di simpan/diubah)
				$this->koneksi->query("UPDATE pelanggan SET nama_pelanggan='$nama', email_pelanggan='$email', telepon_pelanggan='$telepon', alamat_pelanggan='$alamat' WHERE id_pelanggan='$id'");

			}
		// selain itu, ada lokasi foto(foto diubah jadi harusdisimpan)
			else
			{
				$ambil = $this->ambil_pelanggan($id);
				$foto_lama = $ambil['foto_pelanggan'];

				if(file_exists("foto/$foto_lama"))
				{
				// menghapus foto yang telah tersimpan
					unlink("foto/$foto_lama");
				}

				$waktu = date("Y-m-d-H-i-s");
				$namafiks = $waktu.$nama_foto;
			// mengupload foto yang baru
				move_uploaded_file($lokasi_foto, "foto/$namafiks");
			// mengubah data yang ada di table pelanggan berserta fotonya berdasarkan id_pelanggan
				$this->koneksi->query("UPDATE pelanggan SET nama_pelanggan='$nama', email_pelanggan='$email', telepon_pelanggan='$telepon', alamat_pelanggan='$alamat', foto_pelanggan='$namafiks' WHERE id_pelanggan='$id'");
			}
		}
	}
	$pelanggan = new pelanggan($mysqli);
// mengkoneksikan (mengirim$mysqli kedalam class pelanggan)

	class kategori 
	{
		public $koneksi;

		function __construct($mysqli)
		{
			$this->koneksi = $mysqli;
		}

		function tampil_kategori()
		{
			$ambil = $this->koneksi->query("SELECT * FROM kategori");

			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}

			return $bungkus;
		}

		function simpan_kategori($nama, $kategori)
		{
			$this->koneksi->query("INSERT INTO kategori (nama_kategori, deskripsi_kategori) VALUES ('$nama','$kategori')");
		}

		function hapus_kategori($id)
		{
			$this->koneksi->query("DELETE FROM kategori WHERE id_kategori='$id'");
		}
		function ambil_kategori($idkategori)
		{
			$ambil = $this->koneksi->query("SELECT * FROM kategori WHERE id_kategori='$idkategori'");

			$pecah = $ambil->fetch_assoc();
			return $pecah;
		}

		function ubah_kategori($nama, $deskripsi, $id)
		{
			$this->koneksi->query("UPDATE kategori SET nama_kategori='$nama', deskripsi_kategori='$deskripsi' WHERE id_kategori='$id'");
		}
	}

	$kategori = new kategori($mysqli);

// membuat class produk
	class produk
	{
	// membuat atribut
		public $koneksi;

	// membuat function penampung koneksi database
		function __construct($mysqli)
		{
		// $koneksi yang ditampung kita simpan didalam atribut
			$this->koneksi = $mysqli;
		}

	// membuat function tampil produk
		function tampil_produk()
		{
		// mengambil data dari table produk
			$ambil = $this->koneksi->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori");
		// data yang telah di ambil di pecah di ubah menjadi bentuk array data  yang telah diubah ke array di perulangan
			while ($pecah = $ambil->fetch_assoc())
			{
			// data yang  telah diubah ke array dan diperulangkan di bungkus di array
				$bungkus[] = $pecah;
			}
		// mengoutputkan seumua data yang telah membungkus array
			return $bungkus;
		}

		function ambil_produk($id_produk)
		{
			$ambil = $this->koneksi->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE id_produk='$id_produk'");

			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}
		function ambil_produk1($id_produk)
		{
			$ambil = $this->koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");

			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}

		function tampil_produk_kategori($id_kategori)
		{
			$ambil = $this->koneksi->query("SELECT * FROM produk WHERE id_kategori='$id_kategori' ");

			while($data_array = $ambil->fetch_assoc())
			{
				$semua_data[] = $data_array;	
			}
			return $semua_data;
		}
		function simpan_produk($id_kategori, $nama, $harga, $berat, $deskripsi, $foto)
		{
			$waktu = date('Y-m-d-H-i-s-');
			$namafoto = $foto['name'];
		//menggabungkan
			$namafiks = $waktu.$namafoto;
			$lokasifoto = $foto['tmp_name'];
			move_uploaded_file($lokasifoto, "foto/produk/$namafiks");

			$this->koneksi->query("INSERT INTO produk (id_kategori, nama_produk, harga_produk, berat_produk, deskripsi_produk, foto_produk) VALUES ('$id_kategori', '$nama', '$harga', '$berat', '$deskripsi', '$namafiks')");	

			echo "<pre>";
			print_r($foto);
			echo "</pre>";
		}
		function hapus_produk($id)
		{
			// mengambil data pelanggan berdasarkan Id
			$ambil = $this->ambil_produk1($id);
			$foto = $ambil['foto_produk'];
		// jika ada file didalam folder foto maka
			if(file_exists("foto/produk/$foto"))
			{
				unlink("foto/produk/$foto");
			}

		//menghapus data dari table pelanggan berdasarkan id_pelanggan= '$id'
			$this->koneksi->query("DELETE FROM produk WHERE id_produk='$id'");
		}


		function ubah_produk($id, $nama, $harga, $berat, $deskripsi, $foto, $id_produk)
		{
			echo "$id";echo "$nama";echo "$harga";echo "$berat";echo "$deskripsi";echo "$id_produk";
			echo "<pre>";
			print_r($foto);
			echo"</pre>";
			$waktu = date('Y-m-d-H-i-s-');
			$nama_foto = $foto['name'];
			$lokasi_foto = $foto['tmp_name'];
			if(empty($lokasi_foto))
			{
		// mengubah data yang ada di table pelanggan berdasarkan id_pelanggan kecuali fotonya (foto tidak di simpan/diubah)
				$this->koneksi->query("UPDATE produk SET id_kategori='$id', nama_produk='$nama', harga_produk='$harga', berat_produk='$berat', deskripsi_produk='$deskripsi' WHERE id_produk='$id_produk'");

			}
		// selain itu, ada lokasi foto(foto diubah jadi harusdisimpan)
			else
			{
				$ambil = $this->ambil_produk1($id_produk);
				$foto_lama = $ambil['foto_produk'];

				if(file_exists("foto/produk/$foto_lama"))
				{
				// menghapus foto yang telah tersimpan
					unlink("foto/produk/$foto_lama");
				}

				$waktu = date("Y-m-d-H-i-s");
				$namafiks = $waktu.$nama_foto;
			// mengupload foto yang baru
				move_uploaded_file($lokasi_foto, "foto/produk/$namafiks");
			// mengubah data yang ada di table pelanggan berserta fotonya berdasarkan id_pelanggan
				$this->koneksi->query("UPDATE produk SET id_kategori='$id', nama_produk='$nama', harga_produk='$harga', berat_produk='$berat', deskripsi_produk='$deskripsi', foto_produk='$namafiks' WHERE id_produk='$id_produk'");
			}
		}

	}

	$produk = new produk($mysqli);

	class pembelian extends produk

	{
		public $koneksi;
		function __construct($mysqli)
		{
			$this->koneksi = $mysqli;
		}

		function pembelian_pelanggan($id_pelanggan)
		{
			$ambil = $this->koneksi->query("SELECT * FROM pembelian WHERE id_pelanggan = '$id_pelanggan'");

			while($dataarray = $ambil->fetch_assoc())
			{
				$semua_data[] = $dataarray;
			}
			return $semua_data;
		}

		function simpan_pembayaran($id_pembelian, $nama, $bank, $tgl_byr, $jumlah, $bukti)
		{
			$nama_bukti = $bukti['name'];
			$lokasi_bukti = $bukti['tmp_name'];

			move_uploaded_file($lokasi_bukti, "img/bukti/$nama_bukti");

			$tgl_konfir = date('Y-m-d');

			$this->koneksi->query("INSERT INTO pembayaran (id_pembelian, nama_penyetor, tanggal_pembayaran, tanggal_konfirmasi, bank_penyetor, jumlah_pembayaran, bukti_pembayaran )VALUES('$id_pembelian', '$nama', '$tgl_byr', '$tgl_konfir', '$bank', '$jumlah', '$nama_bukti')")or die(mysqli_error($this->koneksi));

			$this->koneksi->query("UPDATE pembelian SET status_pembelian='konfirmasi pembayaran' WHERE id_pembelian='$id_pembelian'");
		}

		function tampil_pembelian()
		{
			$ambil = $this->koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan");
			while($pecah = $ambil->fetch_assoc())
			{
				$semuadata[]=$pecah;
			}
			return $semuadata;
		}

		function ambil_pembelian($id_pembelian)
		{
			$ambil = $this->koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$id_pembelian'");
			$pecah = $ambil->fetch_assoc();
			return $pecah;
		}

		function tampil_produk_pembelian($id_pembelian)
		{
			$ambil = $this->koneksi->query("SELECT * FROM pembeliandetail WHERE id_pembelian='$id_pembelian'");

			while($pecah = $ambil->fetch_assoc() )
			{
				$semua_data[] = $pecah;
			}
			return $semua_data;
		}
		function simpan_keranjang($id_produk, $jumlah_beli)
		{
		// jika ada session keranjang yang id-nya sama maka
			if (isset($_SESSION['keranjang']))
			{
				$_SESSION['keranjang'][$id_produk]+=$jumlah_beli;
			}
			else
			{
				$_SESSION['keranjang'][$id_produk]=$jumlah_beli;
			}
		}

		function tampil_keranjang($keranjang)
		{
			foreach ($keranjang as $id_produk => $jumlah_beli) 
			{
				$data_produk = $this->ambil_produk($id_produk);

				$data_produk['sub_total'] = $data_produk['harga_produk']*$jumlah_beli;
				$data_produk['sub_berat'] =$data_produk['berat_produk']*$jumlah_beli; 
				$data_produk['jumlah_beli'] = $jumlah_beli;

				$semua_produk[] = $data_produk;
			}
			return $semua_produk;
		}

		function simpan_pembelian($total_berat, $total_belanja,$total_ongkir,$total_pembelian,$provinsi,$kota,$tipe_kota,$kode_pos,$ekspedisi,$peket_ekspedisi,$lama_pengiriman,$nama,$telepon,$alamat,$id_pelanggan,$keranjang)
		{
			$tgl = date("Y-m-d");

			$this->koneksi->query("INSERT INTO pembelian (id_pelanggan,tanggal_pembelian,status_pembelian,total_berat,total_belanja,total_ongkir,total_pembelian,provinsi,distrik,tipe,kodepos_pengiriman,ekspedisi_pengiriman,paket_pengiriman,lama_pengiriman,nama_penerima,telepon_penerima,alamat_penerima)VALUES('$id_pelanggan','$tgl', 'belum lunas','$total_berat','$total_belanja','$total_ongkir','$total_pembelian','$provinsi','$kota','$tipe_kota','$kode_pos','$ekspedisi','$peket_ekspedisi','$lama_pengiriman','$nama','$telepon','$alamat')")or die(mysqli_error($this->koneksi));
			$id_pembelian_baru = mysqli_insert_id($this->koneksi);

			foreach ($keranjang as $key => $value) 
			{
				$this->koneksi->query("INSERT INTO pembeliandetail (id_pembelian,nama_produk,harga_produk,berat_produk,jumlah_produk,subberat_produk,subtotal_produk)VALUES('$id_pembelian_baru','$value[nama_produk]','$value[harga_produk]','$value[berat_produk]','$value[jumlah_beli]','$value[sub_berat]','$value[sub_total]')")or die(mysqli_error($this->koneksi));
			}

			return $id_pembelian_baru;
		}


	}

	$pembelian = new pembelian($mysqli);

	class keranjang
	{
		public $koneksi;
		function __construct($mysqli)
		{
			$this->koneksi = $mysqli;
		}
	}

	$keranjang = new keranjang($mysqli);

	class pengaturan
	{
		public $koneksi;

		function __construct($mysqli)
		{
			$this->koneksi = $mysqli;	
		}
		function tampil_pengaturan()
		{
			$ambil = $this->koneksi->query("SELECT * FROM pengaturan");

			while ($pecah = $ambil->fetch_assoc()) 
			{
				$semua_data[] = $pecah;
			}
			return $semua_data;
		}

		function ambil_pengaturan($id_pengaturan)
		{
			$ambil = $this->koneksi->query("SELECT * FROM pengaturan WHERE id_pengaturan='$id_pengaturan'");
			$pecah = $ambil->fetch_assoc();
			return $pecah;
		}

		function ubah_pengaturan( $isi, $id_pengaturan)
		{
			$this->koneksi->query("UPDATE INTO pengaturan SET isi='$isi' WHERE id_pengaturan='$id_pengaturan'");
		}
	}

	$pengaturan = new pengaturan($mysqli);
	
	class admin
	{
		public $koneksi;

		function __construct($mysqli)
		{
			$this->koneksi = $mysqli;	
		}

		function login_admin($email, $password)
		{
		// merubah password kedalam bentuk encrypt(dikodekan)
			$pass = sha1($password);
// mencocokan data yang ada didalam tabel pelanggan berdasarkan email dan password
			$ambil = $this->koneksi->query("SELECT * FROM admin WHERE email_admin='$email' AND password_admin='$pass'");

		// menghitung jumlah data yang cocok

			$hitung = $ambil->num_rows;
		// jika isi dari hitung sama dengan 1 (benar) maka
			if ($hitung==1) 
			{
				$akun = $ambil->fetch_assoc();
			// data yang dipecah disimpan kedalam sesion member
				$_SESSION['admin'] = $akun;
			// mengoutputkan berhasil
				return "sukses";
			}
			else
			{
			//mengoutputkan gagal
				return "gagal";
			}

		}

	}
	$admin = new admin($mysqli);


	class apiongkir
	{
		function update_provinsi()
		{
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "http://api.rajaongkir.com/starter/province?id=",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"key: 71692b2f5c22513703ad26d3d45b6bb3"
					),
				));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) 
			{
				echo "cURL Error #:" . $err;
			} else 
			{
		  // echo $response;
		  // konvert ke array
				$dataprovinsi = json_decode($response,TRUE);
				$dataprovinsi = $dataprovinsi['rajaongkir']['results'];

				return $dataprovinsi;

			}
		}
		function update_kota($id_provinsi)
		{

			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "http://api.rajaongkir.com/starter/city?id=&province=$id_provinsi",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"key: 71692b2f5c22513703ad26d3d45b6bb3"
					),
				));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
		  // echo $response;
			// konvert ke array
				$datakota = json_decode($response,TRUE);
			// hanya data kota
				$datakota = $datakota['rajaongkir']['results'];

				return $datakota;
			}
		}

		function update_ongkir($id_kota_asal,$id_kota_tujuan,$berat,$ekspedisi)
		{
		// 419 sebagai contoh toko saya ada
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => "origin=$id_kota_asal&destination=$id_kota_tujuan&weight=$berat&courier=$ekspedisi",
				CURLOPT_HTTPHEADER => array(
					"content-type: application/x-www-form-urlencoded",
					"key: 71692b2f5c22513703ad26d3d45b6bb3"
					),
				));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
		  // echo $response;
		  // konvert ke array
				$dataongkir = json_decode($response,TRUE);

				$dataongkir = $dataongkir['rajaongkir']['results']['0']["costs"];

				return $dataongkir;
			}
		}
	}



	$apiongkir = new apiongkir();


	?>


?>