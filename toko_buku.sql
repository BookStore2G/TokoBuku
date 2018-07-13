-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 07:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(15) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `harga_brg` int(20) NOT NULL,
  `stock_brg` int(20) NOT NULL,
  `gbr_brg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `harga_brg`, `stock_brg`, `gbr_brg`) VALUES
(1, 'meja', 1000, 5, ''),
(2, 'kursi', 5000, 5, ''),
(20, 'ajuh', 1, 1, 'brg-151613'),
(21, 'aku', 1, 1, 'brg-151613'),
(22, 'cun', 1, 1, 'brg-151613'),
(23, 'men', 1, 2, 'brg-151613');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(12) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `noisbn` varchar(20) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  `stok` int(12) NOT NULL,
  `harga_pokok` varchar(12) NOT NULL,
  `harga_jual` varchar(12) NOT NULL,
  `ppn` varchar(12) NOT NULL,
  `diskon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `noisbn`, `penulis`, `penerbit`, `tahun`, `stok`, `harga_pokok`, `harga_jual`, `ppn`, `diskon`) VALUES
(5, 'memory berkasih', '2398700', 'riki', 'jiwa film', 2012, 78, '103700', '97000', '9700', '3000'),
(6, 'samudra cinta', '2345', 'afandi', 'mutiara fim', 2003, 19, '90000', '90000', '9000', '9000'),
(7, 'kasih ibu', '12345', 'riki', 'ahmad', 2000, 68, '89000', '90000', '9000', '10000'),
(8, 'ceria', '45678', 'bambang', 'mutiara buku', 2009, 117, '92000', '90000', '9000', '7000'),
(9, 'sikancil', '98765', 'didit', 'cahaya timur', 2001, 84, '66500', '65000', '6500', '5000'),
(10, 'perjalanan hidup', '23457654', 'nanang', 'jiwa karya', 2010, 48, '131500', '125000', '12500', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_distributor`
--

CREATE TABLE `tb_distributor` (
  `id_distributor` int(12) NOT NULL,
  `nama_distributor` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telephon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_distributor`
--

INSERT INTO `tb_distributor` (`id_distributor`, `nama_distributor`, `alamat`, `telephon`) VALUES
(4, 'diki', 'sedeng', '089123456781'),
(6, 'rr', 'jj', '08912345678'),
(7, 'latif', 'ngrao', '089765432123'),
(8, 'mimin', 'sendang', '089765432124'),
(9, 'yuyun', 'madiun', '089765432125'),
(10, 'jiho', 'kanor', '089765432127');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jual`
--

CREATE TABLE `tb_jual` (
  `id_jual` varchar(12) NOT NULL,
  `total` varchar(40) NOT NULL,
  `uang` varchar(40) NOT NULL,
  `kembali` varchar(40) NOT NULL,
  `id_kasir` int(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jual`
--

INSERT INTO `tb_jual` (`id_jual`, `total`, `uang`, `kembali`, `id_kasir`, `tanggal`) VALUES
('PJN0001', '636000', '700000', '64000', 22, '2018-01-17'),
('PJN0002', '968500', '1000000', '31500', 22, '2018-01-17'),
('PJN0003', '309500', '400000', '90500', 22, '2018-01-17'),
('PJN0004', '540000', '600000', '60000', 22, '2018-01-17'),
('PJN0005', '518500', '550000', '31500', 22, '2018-01-19'),
('PJN0006', '103700', '12000000', '11896300', 17, '2018-05-24'),
('PJN0007', '103700', '120000', '16300', 17, '2018-05-24'),
('PJN0008', '103700', '200000', '96300', 17, '2018-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `id_kasir` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telephon` varchar(13) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `akses` enum('admin','kasir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kasir`
--

INSERT INTO `tb_kasir` (`id_kasir`, `nama`, `alamat`, `telephon`, `status`, `username`, `password`, `akses`) VALUES
(13, 'mesi', 'sedeng', '085655461886', 'aktif', 'Maju Mundur', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(17, 'ahmad', 'kanor bjn', '085655461887', 'aktif', 'afandi', '797701d20f53a3e656902ddb9d93b777', 'kasir'),
(22, 'yazid', 'bojonegoro', '085655461889', 'aktif', 'yazid', 'ad097d2585bc7c62fd1ed53083637aaa', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(12) NOT NULL,
  `id_buku` int(12) NOT NULL,
  `id_kasir` int(12) NOT NULL,
  `jumlah` varchar(40) NOT NULL,
  `jumlah_harga` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasok`
--

CREATE TABLE `tb_pasok` (
  `id_pasok` int(12) NOT NULL,
  `id_distributor` int(12) NOT NULL,
  `id_buku` int(12) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `tanggal` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasok`
--

INSERT INTO `tb_pasok` (`id_pasok`, `id_distributor`, `id_buku`, `jumlah`, `tanggal`) VALUES
(11, 4, 5, 92, '17-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(12) NOT NULL,
  `id_buku` int(12) NOT NULL,
  `jumlah` varchar(15) NOT NULL,
  `jumlah_harga` varchar(15) NOT NULL,
  `id_jual` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_buku`, `jumlah`, `jumlah_harga`, `id_jual`) VALUES
(53, 6, '4', '360000', 'PJN0001'),
(54, 8, '3', '276000', 'PJN0001'),
(56, 5, '5', '518500', 'PJN0002'),
(57, 6, '5', '450000', 'PJN0002'),
(58, 7, '2', '178000', 'PJN0003'),
(59, 10, '1', '131500', 'PJN0003'),
(61, 6, '6', '540000', 'PJN0004'),
(62, 5, '5', '518500', 'PJN0005'),
(63, 5, '1', '103700', 'PJN0006'),
(64, 5, '1', '103700', 'PJN0007'),
(65, 5, '1', '103700', 'PJN0008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_distributor`
--
ALTER TABLE `tb_distributor`
  ADD PRIMARY KEY (`id_distributor`);

--
-- Indexes for table `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD PRIMARY KEY (`id_jual`);

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_pasok`
--
ALTER TABLE `tb_pasok`
  ADD PRIMARY KEY (`id_pasok`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_buku` (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_distributor`
--
ALTER TABLE `tb_distributor`
  MODIFY `id_distributor` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  MODIFY `id_kasir` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pasok`
--
ALTER TABLE `tb_pasok`
  MODIFY `id_pasok` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
