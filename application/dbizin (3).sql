-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 09:15 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbizin`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_izin`
--

CREATE TABLE `m_izin` (
  `id_izin` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(2) DEFAULT NULL,
  `divisi` varchar(50) DEFAULT NULL,
  `keperluan` text,
  `alasan` text,
  `tawal_izin` datetime DEFAULT NULL,
  `takhir_izin` datetime DEFAULT NULL,
  `nomor_surat` varchar(20) DEFAULT NULL,
  `tanggal_setuju` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_izin`
--

INSERT INTO `m_izin` (`id_izin`, `id_user`, `nama`, `jenis_kelamin`, `divisi`, `keperluan`, `alasan`, `tawal_izin`, `takhir_izin`, `nomor_surat`, `tanggal_setuju`, `status`) VALUES
(1, 14, 'Fabiyan', 'L', 'Admin', 'IjinCuti', 'Tes', '0000-00-00 00:00:00', '2017-04-14 00:00:00', '9831', NULL, 1),
(2, 14, 'Fabiyan', 'L', 'Admin', 'IjinCuti', 'teas', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'qwe23123', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_jabatan`
--

CREATE TABLE `m_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_jabatan`
--

INSERT INTO `m_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'manager'),
(2, 'kepala'),
(3, 'staf');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telp` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `id_jabatan`, `nama`, `jenis_kelamin`, `divisi`, `tanggal_lahir`, `alamat`, `nomor_telp`, `username`, `password`) VALUES
(14, 2, 'Fabiyanu Ramadani', '', 'Software', '2017-05-26', 'Jl. Bronggalan No. 42', 2147483647, 'admin1', '4a6629303c679cfa6a5a81433743e52c'),
(15, 3, 'Admin', 'L', 'Software', '2017-05-25', 'Admin', 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `m_verifikasi`
--

CREATE TABLE `m_verifikasi` (
  `id_verifikasi` bigint(20) UNSIGNED NOT NULL,
  `id_dari` int(11) DEFAULT NULL,
  `id_tujuan` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_verifikasi`
--

INSERT INTO `m_verifikasi` (`id_verifikasi`, `id_dari`, `id_tujuan`, `status`) VALUES
(3, 14, 15, 0),
(4, 14, 15, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_izin`
--
ALTER TABLE `m_izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `m_verifikasi`
--
ALTER TABLE `m_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_izin`
--
ALTER TABLE `m_izin`
  MODIFY `id_izin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `m_verifikasi`
--
ALTER TABLE `m_verifikasi`
  MODIFY `id_verifikasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
