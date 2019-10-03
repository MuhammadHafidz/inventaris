-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2019 pada 13.16
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.26

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
-- Struktur dari tabel `barang`
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
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`ID_BARANG`, `ID_KONDISI`, `ID_JENIS`, `ID_RUANG`, `KODE_BARANG`, `NAMA_BARANG`, `KETERANGAN`, `JUMLAH`, `SATUAN`, `UPDATE_TIME`) VALUES
(3, 4, 1, 4, 'BRG101', 'Chitose', 'Baik', 50, 'Buah', '2019-10-02 10:00:12'),
(4, 1, 2, 4, 'BRG102', 'VIP', 'Baik', 1, 'Buah', '2019-10-01 09:02:38'),
(5, 1, 3, 4, 'BRG103', 'Papan Tulis GM', 'Baik', 1, 'Buah', '2019-10-01 09:02:38'),
(6, 1, 4, 4, 'BRG104', 'Remot AC', 'Baik', 1, 'Buah', '2019-10-01 09:01:57'),
(7, 1, 14, 4, 'BRG105', 'AC \"DAIKIN\" 2 PK ', 'Baik', 2, 'Unit', '2019-10-01 09:15:57'),
(8, 1, 13, 4, 'BRG106', 'Control Arm Kebakaran', 'Baik', 2, 'Buah', '2019-10-01 09:05:24'),
(9, 1, 7, 4, 'BRG107', 'LCD View \"Sonic\" DLP PG 603X', 'Baik', 1, 'Unit', '2019-10-01 09:15:57'),
(10, 1, 8, 4, 'BRG108', 'Wereless \"TOA\"', 'Baik', 1, 'Unit', '2019-10-01 09:15:57'),
(12, 1, 2, 5, 'BRG110', 'VIP', 'Baik', 1, 'Buah', '2019-10-01 09:10:32'),
(13, 1, 3, 5, 'BRG111', 'Papan Tulis GM White Board', 'Baik', 1, 'Buah', '2019-10-01 09:11:33'),
(14, 1, 4, 5, 'BRG112', 'Remot AC', 'Baik', 1, 'Buah', '2019-10-01 09:12:04'),
(15, 1, 14, 5, 'BRG113', 'AC \"DAIKIN\" 2 PK', 'Baik', 2, 'Unit', '2019-10-01 09:15:57'),
(16, 1, 13, 5, 'BRG114', 'Control Arm Kebakaran', 'Baik', 2, 'Buah', '2019-10-01 09:13:20'),
(17, 1, 7, 5, 'BRG115', 'LCD View \"Sonic\" DLP PG 603X', 'Baik', 1, 'Unit', '2019-10-01 09:14:24'),
(18, 1, 8, 5, 'BRG116', 'Wereless \"TOA\"', 'Baik', 1, 'Unit', '2019-10-01 09:16:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `ID_GEDUNG` int(11) NOT NULL,
  `NAMA_GEDUNG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`ID_GEDUNG`, `NAMA_GEDUNG`) VALUES
(1, 'Giri Santika 1'),
(2, 'Gedung Baru FIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `ID_JENIS` int(11) NOT NULL,
  `KODE_JENIS` varchar(50) DEFAULT NULL,
  `JENIS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`ID_JENIS`, `KODE_JENIS`, `JENIS`) VALUES
(1, 'JETKE', 'Kursi Kuliah'),
(2, 'JETKE02', 'Meja Dosen'),
(3, 'JETKE03', 'Papan Tulis'),
(4, 'JETKE04', 'Remot AC'),
(6, 'JETKE06', 'Fire Alarm \"Protektor\"'),
(7, 'JETKE07', 'LCD'),
(8, 'JETKE08', 'Wereless \"TOA\"'),
(9, 'JETKE09', 'Komputer'),
(10, 'JETKE10', 'Meja Komputer'),
(11, 'JETKE11', 'Kursi Komputer'),
(12, 'JETKE12', 'Korden'),
(13, 'JETKE13', 'Control Arm Kebakaran'),
(14, 'JETKE05', 'AC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `ID_KONDISI` int(11) NOT NULL,
  `KONDISI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`ID_KONDISI`, `KONDISI`) VALUES
(1, 'Bagus'),
(4, 'Kurang Baik'),
(5, 'Baik'),
(6, 'Rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `users` varchar(100) DEFAULT NULL,
  `table_do` varchar(100) DEFAULT NULL,
  `do` varchar(100) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
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
(9, 'karyawan', 'users', 'Login', '2019-09-11 09:39:03'),
(10, 'admin', 'users', 'Login', '2019-10-01 06:24:12'),
(11, 'admin', 'users', 'Logout', '2019-10-01 06:28:09'),
(12, 'karyawan', 'users', 'Login', '2019-10-01 06:28:20'),
(13, 'karyawan', 'users', 'Logout', '2019-10-01 06:32:53'),
(14, 'admin', 'users', 'Login', '2019-10-01 06:33:01'),
(15, 'admin', 'users', 'Logout', '2019-10-01 06:33:49'),
(16, 'karyawan', 'users', 'Login', '2019-10-01 07:28:06'),
(17, 'karyawan', 'users', 'Logout', '2019-10-01 07:33:05'),
(18, 'admin', 'users', 'Login', '2019-10-01 07:33:15'),
(19, 'admin', 'users', 'Logout', '2019-10-01 07:43:50'),
(20, 'karyawan', 'users', 'Login', '2019-10-01 07:43:58'),
(21, 'karyawan', 'barang', 'add BRG201', '2019-10-01 08:57:14'),
(22, 'karyawan', 'barang', 'add BRG202', '2019-10-01 08:58:55'),
(23, 'karyawan', 'barang', 'add BRG203', '2019-10-01 09:00:03'),
(24, 'karyawan', 'barang', 'add BRG104', '2019-10-01 09:01:57'),
(25, 'karyawan', 'barang', 'add BRG105', '2019-10-01 09:03:46'),
(26, 'karyawan', 'barang', 'add BRG106', '2019-10-01 09:05:24'),
(27, 'karyawan', 'barang', 'add BRG107', '2019-10-01 09:06:29'),
(28, 'karyawan', 'barang', 'add BRG108', '2019-10-01 09:07:38'),
(29, 'karyawan', 'barang', 'add BRG109', '2019-10-01 09:09:17'),
(30, 'karyawan', 'barang', 'add BRG110', '2019-10-01 09:10:32'),
(31, 'karyawan', 'barang', 'add BRG111', '2019-10-01 09:11:33'),
(32, 'karyawan', 'barang', 'add BRG112', '2019-10-01 09:12:04'),
(33, 'karyawan', 'barang', 'add BRG113', '2019-10-01 09:12:35'),
(34, 'karyawan', 'barang', 'add BRG114', '2019-10-01 09:13:20'),
(35, 'karyawan', 'barang', 'add BRG115', '2019-10-01 09:14:24'),
(36, 'karyawan', 'barang', 'add BRG116', '2019-10-01 09:16:31'),
(37, 'karyawan', 'users', 'Logout', '2019-10-01 09:18:58'),
(38, 'admin', 'users', 'Login', '2019-10-01 09:19:07'),
(39, 'admin', 'users', 'Logout', '2019-10-01 09:19:48'),
(40, 'karyawan', 'users', 'Login', '2019-10-01 09:19:58'),
(41, 'karyawan', 'users', 'Logout', '2019-10-01 09:21:11'),
(42, 'admin', 'users', 'Login', '2019-10-01 09:21:22'),
(43, 'admin', 'users', 'Logout', '2019-10-01 09:21:51'),
(44, 'karyawan', 'users', 'Login', '2019-10-01 09:22:04'),
(45, 'karyawan', 'users', 'Logout', '2019-10-01 09:48:51'),
(46, 'admin', 'users', 'Login', '2019-10-01 09:49:00'),
(47, 'admin', 'users', 'Logout', '2019-10-01 10:10:07'),
(48, 'Ade', 'users', 'Login', '2019-10-01 10:10:20'),
(49, 'Ade', 'users', 'Login', '2019-10-01 10:10:35'),
(50, 'admin', 'users', 'Login', '2019-10-01 10:10:44'),
(51, 'admin', 'users', 'Logout', '2019-10-01 10:11:32'),
(52, 'ade', 'users', 'Login', '2019-10-01 10:11:39'),
(53, 'ade', 'users', 'Logout', '2019-10-01 10:13:41'),
(54, 'karyawan', 'users', 'Login', '2019-10-01 10:13:54'),
(55, 'karyawan', 'users', 'Logout', '2019-10-01 10:29:15'),
(56, 'admin', 'users', 'Login', '2019-10-01 10:29:25'),
(57, 'admin', 'users', 'Logout', '2019-10-01 10:45:10'),
(58, 'ade', 'users', 'Login', '2019-10-01 10:45:59'),
(59, 'ade', 'users', 'Logout', '2019-10-01 10:51:18'),
(60, 'admin', 'users', 'Login', '2019-10-01 10:52:28'),
(61, 'admin', 'users', 'Logout', '2019-10-01 10:53:48'),
(62, 'admin', 'users', 'Login', '2019-10-01 10:54:48'),
(63, 'admin', 'users', 'Logout', '2019-10-01 12:03:03'),
(64, 'karyawan', 'users', 'Login', '2019-10-01 12:03:16'),
(65, 'karyawan', 'users', 'Logout', '2019-10-01 12:05:42'),
(66, 'ade', 'users', 'Login', '2019-10-01 12:05:51'),
(67, 'pimpinan', 'users', 'Login', '2019-10-02 06:00:10'),
(68, 'ade', 'users', 'Login', '2019-10-02 06:00:21'),
(69, 'ade', 'users', 'Logout', '2019-10-02 06:03:23'),
(70, 'karyawan', 'users', 'Login', '2019-10-02 07:22:24'),
(71, 'karyawan', 'users', 'Login', '2019-10-02 09:37:39'),
(72, 'karyawan', 'barang', 'update BRG101', '2019-10-02 10:00:12'),
(73, 'karyawan', 'barang', 'delete ', '2019-10-02 10:02:39'),
(74, 'karyawan', 'users', 'Login', '2019-10-03 09:14:01'),
(75, 'karyawan', 'users', 'Logout', '2019-10-03 09:17:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_barang`
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

--
-- Dumping data untuk tabel `p_barang`
--

INSERT INTO `p_barang` (`ID_PBARANG`, `ID_BARANG`, `NAMA_PBARANG`, `EMAIL_PBARANG`, `KETERANGAN_PBARANG`, `PBARANG_IN`, `PBARANG_OUT`, `STATUS_PBARANG`) VALUES
(1, 9, 'M. Hafidz', 'hafidzamarul@gmail.com', 'Seminar Nasional', '2019-10-04 23:00:00', '2019-10-07 00:00:00', -1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_ruang`
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

--
-- Dumping data untuk tabel `p_ruang`
--

INSERT INTO `p_ruang` (`ID_PRUANG`, `ID_RUANG`, `NAMA_PRUANG`, `EMAIL_PRUANG`, `KETERANGAN_PRUANG`, `PRUANG_IN`, `PRUANG_OUT`, `STATUS_PRUANG`) VALUES
(1, 1, 'Nuraini Ersanti', 'nurainiersanti31@gmail.com', 'Sidang Umum BLJ', '2019-10-04 08:00:00', '2019-10-04 08:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `ID_ROLE` int(11) NOT NULL,
  `ROLE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`ID_ROLE`, `ROLE`) VALUES
(1, 'karyawan'),
(2, 'admin'),
(3, 'pimpinan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `ID_RUANG` int(11) NOT NULL,
  `ID_GEDUNG` int(11) DEFAULT NULL,
  `NAMA_RUANG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`ID_RUANG`, `ID_GEDUNG`, `NAMA_RUANG`) VALUES
(1, 1, 'Ruang 201'),
(3, 1, 'Ruang 202'),
(4, 2, 'Ruang 101'),
(5, 2, 'Ruang 102'),
(6, 2, 'Ruang 107'),
(7, 2, 'Ruang 108'),
(8, 2, 'Ruang 203'),
(9, 1, 'Ruang 204'),
(10, 2, 'Ruang 207/LAB'),
(11, 2, 'Ruang 301'),
(12, 2, 'Ruang 302'),
(13, 2, 'Ruang 303'),
(14, 2, 'Ruang 304');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID_USERS`, `ID_ROLE`, `NAMA`, `USERNAME`, `PASSWORD`, `CREATED_DATE`) VALUES
(1, 2, 'Ngadimin', 'admin', '$2y$12$hnRU4j9E91/Q5uAV9gkXq.6Ni6DtpPjKqsBQMfe5ohLF3TjVMNony', '2019-09-10 03:50:01'),
(3, 1, 'Akbar', 'karyawan', '$2y$12$3osS5ETZ/xrO8uLP2KCFJOViuSg.zGG72/wYklLjbNocpF.UmYHd6', '2019-10-01 10:36:21'),
(4, 3, 'Ilham Ade', 'ade', '$2y$10$tkOid0GMUhCmHnInb9gycOpq5GLTanW9Tw1Lwzw4gDYgB1SiJhxn.', '2019-10-01 10:11:29'),
(5, 1, 'Ilvi Nur Diana', 'ilvinur', '$2y$10$q8q0wTYzQSyvHdFc1or1v.0biwo/BSN11nzyb25f71t624.cfx8U6', '2019-10-01 10:34:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_BARANG`),
  ADD UNIQUE KEY `KODE_BARANG` (`KODE_BARANG`),
  ADD KEY `FK_3` (`ID_RUANG`),
  ADD KEY `FK_4` (`ID_JENIS`),
  ADD KEY `FK_5` (`ID_KONDISI`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`ID_GEDUNG`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`ID_JENIS`),
  ADD UNIQUE KEY `KODE_JENIS` (`KODE_JENIS`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`ID_KONDISI`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `p_barang`
--
ALTER TABLE `p_barang`
  ADD PRIMARY KEY (`ID_PBARANG`),
  ADD KEY `FK_8` (`ID_BARANG`);

--
-- Indeks untuk tabel `p_ruang`
--
ALTER TABLE `p_ruang`
  ADD PRIMARY KEY (`ID_PRUANG`),
  ADD KEY `FK_7` (`ID_RUANG`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`ID_RUANG`),
  ADD KEY `FK_2` (`ID_GEDUNG`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USERS`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD KEY `FK_1` (`ID_ROLE`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_BARANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `gedung`
--
ALTER TABLE `gedung`
  MODIFY `ID_GEDUNG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `ID_JENIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `ID_KONDISI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `p_barang`
--
ALTER TABLE `p_barang`
  MODIFY `ID_PBARANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `p_ruang`
--
ALTER TABLE `p_ruang`
  MODIFY `ID_PRUANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `ID_ROLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `ID_RUANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID_USERS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `FK_3` FOREIGN KEY (`ID_RUANG`) REFERENCES `ruang` (`ID_RUANG`),
  ADD CONSTRAINT `FK_4` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis_barang` (`ID_JENIS`),
  ADD CONSTRAINT `FK_5` FOREIGN KEY (`ID_KONDISI`) REFERENCES `kondisi` (`ID_KONDISI`);

--
-- Ketidakleluasaan untuk tabel `p_barang`
--
ALTER TABLE `p_barang`
  ADD CONSTRAINT `FK_8` FOREIGN KEY (`ID_BARANG`) REFERENCES `barang` (`ID_BARANG`);

--
-- Ketidakleluasaan untuk tabel `p_ruang`
--
ALTER TABLE `p_ruang`
  ADD CONSTRAINT `FK_7` FOREIGN KEY (`ID_RUANG`) REFERENCES `ruang` (`ID_RUANG`);

--
-- Ketidakleluasaan untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD CONSTRAINT `FK_2` FOREIGN KEY (`ID_GEDUNG`) REFERENCES `gedung` (`ID_GEDUNG`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
