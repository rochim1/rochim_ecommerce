<?php 
session_start();
// $_SESSION['member'] = "hai";
$mysqli =new mysqli("localhost","root","","project_ecommerce");

class kategori{
    public $koneksi;
    function __construct($mysqli){
        $this->koneksi = $mysqli;
    }

    function tampil_kategori(){
        $sql = "Select * from tbl_kategori";
        $ambil = $this->koneksi->query($sql);
        while ($pecah = $ambil->fetch_assoc()) {
            $bungkus[] = $pecah;
        }
        return $bungkus;
    }
   function tampil_kategoriByProduk($id_kategori){

        $sql = "SELECT * from tbl_produk WHERE tbl_produk.id_kategori_produk =".$id_kategori."";
        // $sql = "SELECT * from tbl_produk inner join tbl_kategori WHERE tbl_produk.id_kategori_produk =".$id_kategori." AND tbl_kategori.id_kategori=".$id_kategori."";
        $ambil = $this->koneksi->query($sql);
        $jumlah = $ambil->num_rows;
        if ($jumlah == 0) {
            return false;
        }
        else{
        while ($pecah = $ambil->fetch_assoc()) {
            $bungkus[] = $pecah;
        }
        }
        return $bungkus;
    }
}
$kategori = new kategori($mysqli);

class merek{
    public $koneksi;
    function __construct($mysqli){
        $this->koneksi = $mysqli;
    }
    function tampil_merek(){
        $sql = "select tbl_merek.id_merek, tbl_merek.nama_merek, count(tbl_merek.id_merek) as jumlah from tbl_merek inner join tbl_produk where tbl_merek.id_merek = tbl_produk.id_merek group by(tbl_merek.id_merek)";
        $ambil = $this->koneksi->query($sql);
        while($pecah = $ambil->fetch_assoc()){
            $bungkus[] = $pecah;
        }
        return $bungkus;
    }

    function tampil_merekById($id_merek){

        $sql = "SELECT * from tbl_produk WHERE tbl_produk.id_merek =".$id_merek."";
        // $sql = "SELECT * from tbl_produk inner join tbl_kategori WHERE tbl_produk.id_kategori_produk =".$id_kategori." AND tbl_kategori.id_kategori=".$id_kategori."";
        $ambil = $this->koneksi->query($sql);
        $jumlah = $ambil->num_rows;
        if ($jumlah == 0) {
            return false;
        }
        else{
        while ($pecah = $ambil->fetch_assoc()) {
            $bungkus[] = $pecah;
        }
        }
        return $bungkus;
    }
}
$merek = new merek($mysqli);

class produk{
    public $koneksi;
    function __construct($mysqli){
        $this->koneksi = $mysqli;
    }

    function tampil_produk(){
        $sql = "SELECT * FROM tbl_produk INNER JOIN tbl_kategori ON 
			tbl_produk.id_kategori_produk = tbl_kategori.id_kategori INNER JOIN tbl_merek 
            ON tbl_merek.id_merek = tbl_produk.id_merek limit 9";
        $ambil = $this->koneksi->query($sql);	
			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}
			return $bungkus;
    }
    function ambil_produk_simple($id_produk)
		{
            $sql = "SELECT * FROM tbl_produk where id_produk = $id_produk";
			$ambil = $this->koneksi->query($sql);
			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}

    function ambil_produk($id_produk)
		{
            $sql = "SELECT * FROM tbl_produk INNER JOIN tbl_kategori ON 
			tbl_produk.id_kategori_produk = tbl_kategori.id_kategori INNER JOIN tbl_merek 
            ON tbl_merek.id_merek = tbl_produk.id_merek WHERE tbl_produk.id_produk = $id_produk";
			$ambil = $this->koneksi->query($sql);
			$dataarray = $ambil->fetch_assoc();
			return $dataarray;
		}
    
    function tampil_recomended_produk(){
        $sql = "SELECT * FROM tbl_produk INNER JOIN tbl_kategori ON 
			tbl_produk.id_kategori_produk = tbl_kategori.id_kategori INNER JOIN tbl_merek 
            ON tbl_merek.id_merek = tbl_produk.id_merek limit 3";
        $ambil = $this->koneksi->query($sql);	
			while ($pecah = $ambil->fetch_assoc())
			{
				$bungkus[] = $pecah;
			}
			return $bungkus;
    }
    function simpan_keranjang($id_produk, $jumlah_beli)
		{
		// jika ada session keranjang yang id-nya sama maka
			if (isset($_SESSION['keranjang']))
			{
                $_SESSION['keranjang'][$id_produk] += $jumlah_beli;
                return "success";
			}
			else
			{
                $_SESSION['keranjang'][$id_produk]=$jumlah_beli;
                return "success";
            }
            return "failed";
        }
    function tampil_keranjang($keranjang)
		{
			foreach ($keranjang as $id_produk => $jumlah_beli) 
			{
				$data_produk = $this->ambil_produk($id_produk);

				$data_produk['sub_total'] = $data_produk['harga']*$jumlah_beli;
				$data_produk['jumlah_beli'] = $jumlah_beli;
				// $data_produk['total'] = $jumlah_beli;

				$semua_produk[] = $data_produk;
			}
			return $semua_produk;
        }
        function hapus_keranjang($id_produk)
		{
            unset($_SESSION['keranjang'][$id_produk]);
        }
        function tampil_shipping()
        {
            $sql = "select * from tbl_kurir join tbl_biaya_kirim on tbl_kurir.id_kurir = tbl_biaya_kirim.id_kurir";
            $ambil = $this->koneksi->query($sql);
            while ($pecah = $ambil->fetch_assoc()) {
                $bungkus[] = $pecah;
            }
            return $bungkus;
        }
        function tampil_biayashipping($id_kurir)
        {
            $sql = "SELECT * from tbl_biaya_kirim WHERE id_kurir = $id_kurir";
            $ambil = $this->koneksi->query($sql);
            return $ambil->fetch_assoc();
        }
        function checkout($status_order,$tgl_order,$jam_order,$id_member,$ttl)
        {
            $sql = "INSERT INTO tbl_order VALUES('','$status_order','$tgl_order','$jam_order','$id_member','$ttl')";
            $hasil = $this->koneksi->query($sql);
            if ($hasil) {
                return $this->koneksi->insert_id;
            }else {
                return 'failed';
            }
        }

        function checkout_detail($id_order,$id_produk,$jumlah,$harga)
        {
            $sql = "INSERT INTO tbl_detail_order VALUES('','$id_order','$id_produk','$jumlah','$harga')";
            $hasil = $this->koneksi->query($sql);
            if ($hasil) {
                return 'success';
            }else {
                return 'failed';
            }
        }

        function tampil_checkout()
        {
            $name = $_SESSION['member']['id_member'];
            $sql = "SELECT * FROM tbl_order AS a INNER JOIN tbl_detail_order AS b ON b.id_order = a.id_order WHERE a.id_member = '$name' and a.status_order = 'p' group by a.id_order";
            $ambil = $this->koneksi->query($sql);
            while ($pecah = $ambil->fetch_assoc()) {
                $bungkus[] = $pecah;
            }
            return $bungkus;
        }

        function data_barang($id_member, $id_order){
            $sql = "SELECT * FROM tbl_order AS a INNER JOIN tbl_detail_order AS b ON b.id_order = a.id_order where a.id_member = '$id_member' and b.id_order= '$id_order'";
            $ambil = $this->koneksi->query($sql);
            while ($pecah = $ambil->fetch_assoc()) {
                $bungkus[] = $pecah;
            }
            return $bungkus;
        }
        
}
$produk = new produk($mysqli);

class kota{
    public $koneksi;
    function __construct($mysqli){
        $this->koneksi = $mysqli;
    }

    function tampil_kota(){
        $sql = "select * from tbl_kota";
        $ambil = $this->koneksi->query($sql);
        while ($pecah = $ambil->fetch_assoc()) {
            $bungkus[] = $pecah;
        }
        return $bungkus;
    }
}
$kota = new kota($mysqli);

class member{
    public $koneksi;
    function __construct($mysqli){
        $this->koneksi = $mysqli;
    }

    function signUp($nama, $password,$email,$kota,$telpon){
        $username = rand(0,100);
        $sql = "INSERT INTO tbl_member (username,password,nama,alamat,email,no_hp )VALUES ('$username','$password','$nama','$kota','$email','$telpon')";
        $hasil = $this->koneksi->query($sql);
        if ($hasil) {
            return 'success';
        }else {
            return 'failed';
        }
    }

    function signIn($nama,$password){
        $sql = "select * from tbl_member where nama = '$nama' and password = '$password'";
        $hasil = $this->koneksi->query($sql);
        $hitung = $hasil->num_rows;
        if ($hitung >= 1) {
            $akun = $hasil->fetch_assoc();
            $_SESSION['member'] = $akun;
			if($_SESSION['member'] = $akun)
			{
				return "success"; 
			}
        }else {
            return 'failed';
        }
    }
}
$member = new member($mysqli);
?>