-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 01:48 PM
-- Server version: 10.4.18-MariaDB-log
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualanobat_sidelima`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tgl_input`) VALUES
(3, 'sabun mandi pagi', '2022-05-15 17:00:00'),
(13, 'makanan untuk bayi berusia tujuh tahun', '2022-05-29 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluar`
--

INSERT INTO `keluar` (`id`, `tanggal`, `kode_produk`, `nama_produk`, `qty`, `keterangan`) VALUES
(1, '2022-05-28 17:00:00', 'A001', 'bodrek', 4, 'out'),
(2, '2022-05-28 17:00:00', 'A002', 'parfum', 6, 'out'),
(3, '2022-06-06 17:00:00', 'A001', 'parfum', 3, 'out'),
(4, '2022-06-06 17:00:00', 'A001', 'tt', 3, 'out');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `tanggal`, `kode_produk`, `nama_produk`, `qty`, `keterangan`) VALUES
(3, '2022-05-27 17:00:00', 'A001', 'bodrek', 4, 'masuk'),
(4, '2022-05-27 17:00:00', 'A002', 'parfum', 4, 'masuk'),
(5, '2022-05-30 17:00:00', 'A004', 'batu jam ABC', 3, 'masuk'),
(6, '2022-06-04 17:00:00', '', 'A002', 5, 'masuk'),
(7, '2022-06-06 17:00:00', '', 'bodrek', 19, 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `id_satuan` varchar(20) NOT NULL,
  `harga_beli` varchar(30) NOT NULL,
  `harga_jual` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode_produk`, `nama_produk`, `id_kategori`, `id_satuan`, `harga_beli`, `harga_jual`, `stok`) VALUES
(1, 'A001', 'bodrek', 'sabun mandi pagi', 'tablet', '2500', '4000', 7),
(3, 'A002', 'parfum', 'sabun mandi pagi', 'box', '3000', '3000', 10),
(4, 'A003', 'batu jam ABC', 'makanan untuk bayi b', 'tablet', '3000', '6500', 10),
(5, 'A004', 'konidin', 'makanan untuk bayi b', 'tablet', '3000', '4000', 6),
(6, 'A005', 'zzz', 'sabun mandi pagi', 'pcs', '2500', '4000', 6),
(7, 'A006', 'aaa', 'sabun mandi pagi', 'box', '3000', '4000', 10),
(8, 'A007', 'sss', 'sabun mandi pagi', 'box', '5500', '6500', 6),
(9, 'A008', 'qqq', 'sabun mandi pagi', 'pcs', '5500', '6500', 6),
(11, 'A010', 'tt', 'sabun mandi pagi', 'box', '5500', '6500', 6),
(12, 'A011', 'batu jam ABC', 'makanan untuk bayi b', 'tablet', '5500', '250000', 6);

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(30) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `nama_satuan`, `tgl_input`) VALUES
(3, 'box', '2022-05-15 17:00:00'),
(4, 'pcs', '2022-05-19 17:00:00'),
(5, 'tablet', '2022-05-20 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(20) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'dede', 'marin2001@gmail.com', 'aa', 'b4be1c568a6dc02dcaf2849852bdb13e'),
(2, 'Lalan Suhirlan', 'lalansuhirlan2001@gmail.com', 'lalan', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Rhima Nurul Fathia', 'rima@gmail.com', 'rhima', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`kode_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`),
  ADD KEY `id_satuan` (`id_satuan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_satuan_2` (`id_satuan`),
  ADD KEY `id_kategori_2` (`id_kategori`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `masuk`
--
ALTER TABLE `masuk`
  ADD CONSTRAINT `masuk_ibfk_1` FOREIGN KEY (`id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
