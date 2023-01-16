-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 08:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alat`
--

CREATE TABLE `tb_alat` (
  `kode_alat` varchar(20) NOT NULL,
  `tgl_input_alat` datetime NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `lokasi_alat` text NOT NULL,
  `pemilik_alat` varchar(255) NOT NULL,
  `jumlah_alat` int(255) NOT NULL,
  `th_produksi` date NOT NULL,
  `kedaluwarsa` date NOT NULL,
  `safe_work_load` varchar(255) NOT NULL,
  `merk_alat` varchar(255) NOT NULL,
  `sertifikasi` varchar(255) NOT NULL,
  `foto_alat` varchar(500) NOT NULL,
  `kode_qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alat`
--

INSERT INTO `tb_alat` (`kode_alat`, `tgl_input_alat`, `nama_alat`, `lokasi_alat`, `pemilik_alat`, `jumlah_alat`, `th_produksi`, `kedaluwarsa`, `safe_work_load`, `merk_alat`, `sertifikasi`, `foto_alat`, `kode_qr`) VALUES
('IDM000206153', '2022-12-01 16:48:37', 'Helm', 'Lemari APD', 'UPT Bali', 1, '2022-04-29', '2027-04-29', '5Kg', 'MSA', '6620.671./13.340/V/2022', '../foto-alat/01-12-22-04-39-IMG_20221201_163742.jpg', '../hasil-kode-qr/01-12-2022-16-52-39.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` varchar(255) NOT NULL,
  `nama_peminjam` varchar(255) NOT NULL,
  `kode_alat` varchar(255) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `status_pinjaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjaman`, `nama_peminjam`, `kode_alat`, `tanggal_peminjaman`, `tanggal_kembali`, `nama_admin`, `status_pinjaman`) VALUES
('111222011211', 'putu', 'IDM000206153', '2022-12-11', '2022-12-15 00:47:40', 'admin', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `tanggal_waktu`) VALUES
(3, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2022-11-23 23:57:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`kode_alat`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `kode_alat` (`kode_alat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
