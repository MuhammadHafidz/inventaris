-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 01:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventarisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_BARANG` int(11) NOT NULL,
  `ID_KONDISI` int(11) DEFAULT NULL,
  `ID_JENIS` int(11) DEFAULT NULL,
  `ID_RUANG` int(11) DEFAULT NULL,
  `KODE_BARANG` varchar(50) DEFAULT NULL,
  `NAMA_BARANG` varchar(100) DEFAULT NULL,
  `KETERANGAN` varchar(100) DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `SATUAN` varchar(10) DEFAULT NULL,
  `UPDATE_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_BARANG`, `ID_KONDISI`, `ID_JENIS`, `ID_RUANG`, `KODE_BARANG`, `NAMA_BARANG`, `KETERANGAN`, `JUMLAH`, `SATUAN`, `UPDATE_TIME`) VALUES
(2, 1, 1, 1, '12321', 'BARG', 'Banget SEKALI', 10, 'Biji', '2019-09-11 03:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `ID_GEDUNG` int(11) NOT NULL,
  `NAMA_GEDUNG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`ID_GEDUNG`, `NAMA_GEDUNG`) VALUES
(1, 'Giri Santika 1');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `ID_JENIS` int(11) NOT NULL,
  `KODE_JENIS` varchar(50) DEFAULT NULL,
  `JENIS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`ID_JENIS`, `KODE_JENIS`, `JENIS`) VALUES
(1, 'JETKE', 'kursi');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `ID_KONDISI` int(11) NOT NULL,
  `KONDISI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`ID_KONDISI`, `KONDISI`) VALUES
(1, 'Baik'),
(2, 'Kurang Baik'),
(3, 'Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `users` varchar(100) DEFAULT NULL,
  `table_do` varchar(100) DEFAULT NULL,
  `do` varchar(100) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `users`, `table_do`, `do`, `time`) VALUES
(1, 'karyawan', 'users', 'Login', '2019-09-10 10:01:26'),
(2, 'karyawan', 'users', 'Login', '2019-09-10 13:01:05'),
(3, 'karyawan', 'users', 'Login', '2019-09-10 13:01:12'),
(4, 'karyawan', 'users', 'Logout', '2019-09-10 13:19:12'),
(5, 'karyawan', 'users', 'Login', '2019-09-10 22:38:57'),
(6, 'karyawan', 'users', 'Login', '2019-09-11 00:32:25'),
(7, 'karyawan', 'users', 'Login', '2019-09-11 09:18:28'),
(8, 'karyawan', 'users', 'Logout', '2019-09-11 09:22:43'),
(9, 'karyawan', 'users', 'Login', '2019-09-11 09:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `p_barang`
--

CREATE TABLE `p_barang` (
  `ID_PBARANG` int(11) NOT NULL,
  `ID_BARANG` int(11) DEFAULT NULL,
  `NAMA_PBARANG` varchar(100) DEFAULT NULL,
  `EMAIL_PBARANG` varchar(100) DEFAULT NULL,
  `KETERANGAN_PBARANG` varchar(255) DEFAULT NULL,
  `PBARANG_IN` timestamp NULL DEFAULT NULL,
  `PBARANG_OUT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `STATUS_PBARANG` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_ruang`
--

CREATE TABLE `p_ruang` (
  `ID_PRUANG` int(11) NOT NULL,
  `ID_RUANG` int(11) DEFAULT NULL,
  `NAMA_PRUANG` varchar(100) DEFAULT NULL,
  `EMAIL_PRUANG` varchar(100) DEFAULT NULL,
  `KETERANGAN_PRUANG` varchar(255) DEFAULT NULL,
  `PRUANG_IN` timestamp NULL DEFAULT NULL,
  `PRUANG_OUT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `STATUS_PRUANG` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID_ROLE` int(11) NOT NULL,
  `ROLE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID_ROLE`, `ROLE`) VALUES
(1, 'karyawan'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `ID_RUANG` int(11) NOT NULL,
  `ID_GEDUNG` int(11) DEFAULT NULL,
  `NAMA_RUANG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`ID_RUANG`, `ID_GEDUNG`, `NAMA_RUANG`) VALUES
(1, 1, 'Ruang 201'),
(2, 1, '304');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_USERS` int(11) NOT NULL,
  `ID_ROLE` int(11) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_USERS`, `ID_ROLE`, `NAMA`, `USERNAME`, `PASSWORD`, `CREATED_DATE`) VALUES
(1, 2, 'Ngadimin', 'admin', '$2y$12$hnRU4j9E91/Q5uAV9gkXq.6Ni6DtpPjKqsBQMfe5ohLF3TjVMNony', '2019-09-10 03:50:01'),
(3, 1, 'Karyawan Tunggal', 'karyawan', '$2y$12$3osS5ETZ/xrO8uLP2KCFJOViuSg.zGG72/wYklLjbNocpF.UmYHd6', '2019-09-10 03:50:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_BARANG`),
  ADD UNIQUE KEY `KODE_BARANG` (`KODE_BARANG`),
  ADD KEY `FK_3` (`ID_RUANG`),
  ADD KEY `FK_4` (`ID_JENIS`),
  ADD KEY `FK_5` (`ID_KONDISI`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`ID_GEDUNG`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`ID_JENIS`),
  ADD UNIQUE KEY `KODE_JENIS` (`KODE_JENIS`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`ID_KONDISI`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_barang`
--
ALTER TABLE `p_barang`
  ADD PRIMARY KEY (`ID_PBARANG`),
  ADD KEY `FK_8` (`ID_BARANG`);

--
-- Indexes for table `p_ruang`
--
ALTER TABLE `p_ruang`
  ADD PRIMARY KEY (`ID_PRUANG`),
  ADD KEY `FK_7` (`ID_RUANG`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`ID_RUANG`),
  ADD KEY `FK_2` (`ID_GEDUNG`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USERS`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD KEY `FK_1` (`ID_ROLE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_BARANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `ID_GEDUNG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `ID_JENIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `ID_KONDISI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `p_barang`
--
ALTER TABLE `p_barang`
  MODIFY `ID_PBARANG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_ruang`
--
ALTER TABLE `p_ruang`
  MODIFY `ID_PRUANG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID_ROLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `ID_RUANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_USERS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `FK_3` FOREIGN KEY (`ID_RUANG`) REFERENCES `ruang` (`ID_RUANG`),
  ADD CONSTRAINT `FK_4` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis_barang` (`ID_JENIS`),
  ADD CONSTRAINT `FK_5` FOREIGN KEY (`ID_KONDISI`) REFERENCES `kondisi` (`ID_KONDISI`);

--
-- Constraints for table `p_barang`
--
ALTER TABLE `p_barang`
  ADD CONSTRAINT `FK_8` FOREIGN KEY (`ID_BARANG`) REFERENCES `barang` (`ID_BARANG`);

--
-- Constraints for table `p_ruang`
--
ALTER TABLE `p_ruang`
  ADD CONSTRAINT `FK_7` FOREIGN KEY (`ID_RUANG`) REFERENCES `ruang` (`ID_RUANG`);

--
-- Constraints for table `ruang`
--
ALTER TABLE `ruang`
  ADD CONSTRAINT `FK_2` FOREIGN KEY (`ID_GEDUNG`) REFERENCES `gedung` (`ID_GEDUNG`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
