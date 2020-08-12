-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 12:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biaya_kirim`
--

CREATE TABLE `tbl_biaya_kirim` (
  `id_biaya_kirim` int(10) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `biaya` int(10) NOT NULL,
  `id_kurir` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_biaya_kirim`
--

INSERT INTO `tbl_biaya_kirim` (`id_biaya_kirim`, `kota`, `biaya`, `id_kurir`) VALUES
(1, '5', 1250, 2),
(2, '6', 2000, 1),
(3, '1', 4000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_detail_order`, `id_order`, `id_produk`, `jumlah`, `harga`) VALUES
(19, 9, 3, 3, 2000),
(20, 9, 4, 3, 900),
(21, 9, 5, 3, 3000),
(22, 10, 3, 3, 2000),
(23, 10, 4, 3, 900),
(24, 10, 5, 3, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `deskripsi_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`) VALUES
(1, '  peralatan rumah tangga', 'berbagai perlengkapan yang mendukung aktifitas rumah tangga'),
(2, 'elektronik', ''),
(3, 'pecah belah', ''),
(5, ' sepatu', 'sepatu mulai dari merk A sampai dengan merk Z semua ada'),
(6, 'kemeja', 'kemeja katun sampai flanel'),
(9, 'handpone', 'handpone android dan ipone');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `id_kota` int(5) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Solo'),
(4, 'Sleman'),
(5, 'Klaten'),
(6, 'Tegal'),
(7, 'Purworejo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurir`
--

CREATE TABLE `tbl_kurir` (
  `id_kurir` int(2) NOT NULL,
  `nama_kurir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kurir`
--

INSERT INTO `tbl_kurir` (`id_kurir`, `nama_kurir`) VALUES
(1, 'JNE-Indonesia'),
(2, 'POS'),
(3, 'JNT'),
(4, 'lazada ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(10) NOT NULL,
  `username` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(18) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `username`, `password`, `nama`, `alamat`, `email`, `no_hp`, `id_kota`) VALUES
(8, 44, '12345678', 'muhammad', 'jakal km 11', 'mamad@gmail.com', '082154441119', 4),
(14, 5, '', '', '0', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merek`
--

CREATE TABLE `tbl_merek` (
  `id_merek` int(3) NOT NULL,
  `nama_merek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_merek`
--

INSERT INTO `tbl_merek` (`id_merek`, `nama_merek`) VALUES
(1, 'united'),
(2, 'polygon'),
(3, 'giant'),
(4, 'xtrada'),
(5, 'pasiffic'),
(6, 'thrill'),
(10, 'tupperware');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(5) NOT NULL,
  `status_order` char(1) NOT NULL,
  `tgl_order` date NOT NULL,
  `jam_order` time NOT NULL,
  `id_member` int(10) NOT NULL,
  `Total_harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `status_order`, `tgl_order`, `jam_order`, `id_member`, `Total_harga`) VALUES
(9, 'p', '2020-07-30', '08:30:53', 8, 19700),
(10, 'p', '2020-07-30', '08:31:47', 8, 19700);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) NOT NULL,
  `id_kategori_produk` int(3) NOT NULL,
  `id_merek` int(3) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `stock` int(10) NOT NULL,
  `slide` char(1) DEFAULT NULL,
  `rekomendasi` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_kategori_produk`, `id_merek`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `stock`, `slide`, `rekomendasi`) VALUES
(3, 2, 5, 'sepeda kaca', 'sepeda gampang pecah', 2000, '2020-04-01-02-13-40-chat.jpg', 0, 'N', 'N'),
(4, 6, 2, 'flannel woll', 'lembut', 900, '2020-04-01-02-30-42-chat.png', 21, 'N', 'Y'),
(5, 1, 1, 'united TDR-3000', 'sepeda UPIN IPIN', 3000, '2020-04-01-04-42-30-CARAN.TV.png', 20, 'Y', 'N'),
(11, 3, 4, 'jumping cycle', '', 2000, '2020-04-19-01-57-16acDE8H.jpg', 0, 'Y', 'Y'),
(13, 1, 2, 'sepeda gunung', 'suka merayap', 20000, '2020-04-19-01-57-33682e3ff96211005773f2321bb0113424.jpg', 20, 'Y', 'Y'),
(15, 1, 1, 'masterpiece', 'mantap soul', 21000, '2020-04-19-01-43-42-1b4842f7e69879c74fe510f7fea4ab91.jpg', 21, 'Y', 'N'),
(16, 2, 5, 'waw', 'mantap', 21, '2020-04-19-02-32-30-fondo-de-cristal-polivinilico-bajo-suave_3811-64.jpg', 2, 'N', 'N'),
(17, 2, 5, 'wawaw', 'top', 2, '2020-04-19-02-36-32-site-background.jpg', 2, 'Y', 'N'),
(18, 2, 2, 'sepeda walik', 'sepeda mundur jadi maju', 2500000, '2020-07-18-01-52-51-microscope.png', 20, 'N', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD PRIMARY KEY (`id_biaya_kirim`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_merek`
--
ALTER TABLE `tbl_merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  MODIFY `id_biaya_kirim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `id_kota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  MODIFY `id_kurir` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_merek`
--
ALTER TABLE `tbl_merek`
  MODIFY `id_merek` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
