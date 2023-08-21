-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 01:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `asal`
--

CREATE TABLE `asal` (
  `id_asal` int(11) NOT NULL,
  `asal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asal`
--

INSERT INTO `asal` (`id_asal`, `asal`) VALUES
(1, 'Kalimantan'),
(2, 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `keterangan_tolak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `nama_file`, `file`, `id_permohonan`, `id_user`, `keterangan`, `keterangan_tolak`) VALUES
(11, 'Laporan Hasil', 'TEST3.pdf', 12, 4, 'Ditolak', 'test'),
(12, 'Laporan Hasil Pengujian ', 'Tes_Online_BCA_FAQ3.pdf', 1, 8, 'Ditolak', 'Gk mau'),
(13, 'LHP', 'TEST7.pdf', 5, 8, 'Ditolak', NULL),
(15, 'Laporan Hasil Pengujian ', 'TEST4.pdf', 1, 8, 'Menunggu Verifikasi', NULL),
(16, 'Laporan Hasil', 'TEST5.pdf', 5, 4, 'Menunggu Verifikasi', NULL),
(17, 'LHP', '3292-11017-1-PB.pdf', 13, 4, 'Disetujui', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kaji_ulang`
--

CREATE TABLE `kaji_ulang` (
  `id_kaji_ulang` int(11) NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `tgl_kaji_ulang` date NOT NULL,
  `lab` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kaji_ulang`
--

INSERT INTO `kaji_ulang` (`id_kaji_ulang`, `id_permohonan`, `tgl_kaji_ulang`, `lab`, `kondisi`, `id_user`) VALUES
(1, 1, '2022-11-16', '2', 'Baik', 1),
(2, 2, '2022-11-16', '1', 'Baik', 1),
(3, 4, '2022-12-10', '1', 'Baik', 1),
(4, 12, '2022-12-11', '1', 'Baik', 3),
(7, 13, '2023-01-13', 'Laboratorium Entomologi', 'Baik', 3);

-- --------------------------------------------------------

--
-- Table structure for table `metode`
--

CREATE TABLE `metode` (
  `id_metode` int(11) NOT NULL,
  `metode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode`
--

INSERT INTO `metode` (`id_metode`, `metode`) VALUES
(1, 'Observasi'),
(2, 'Washing Test');

-- --------------------------------------------------------

--
-- Table structure for table `pengujian`
--

CREATE TABLE `pengujian` (
  `id_pengujian` int(11) NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `tgl_pengujian` date NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengujian`
--

INSERT INTO `pengujian` (`id_pengujian`, `id_permohonan`, `tgl_pengujian`, `hasil`, `id_user`) VALUES
(3, 1, '2022-11-16', 'Layak Ujik', 4),
(4, 5, '2022-12-09', 'Selesai', 4),
(5, 2, '2022-12-10', 'Belum Diuji', 4),
(8, 12, '2022-12-11', 'Layak ', 8),
(14, 2, '2023-01-17', 'Belum Diuji', 4),
(15, 1, '2023-01-06', 'Belum Diuji', 4),
(16, 5, '2023-01-17', 'Belum Diuji', 8),
(17, 1, '2023-01-17', 'Belum Diuji', 4),
(18, 2, '2023-01-17', 'Belum Diuji', 8),
(19, 12, '2023-01-17', 'Belum Diuji', 4),
(20, 5, '2023-01-17', 'Belum Diuji', 4),
(21, 1, '2023-01-17', 'Belum Diuji', 4);

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id_permohonan` int(11) NOT NULL,
  `no_permohonan` varchar(50) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `id_sampel` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `id_asal` int(11) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id_permohonan`, `no_permohonan`, `tgl_permohonan`, `id_sampel`, `jumlah`, `berat`, `id_asal`, `id_tujuan`, `id_metode`, `id_user`) VALUES
(1, 'PER/001', '2022-11-15', 1, 23, 27, 1, 1, 1, 4),
(2, 'PER/002', '2022-11-15', 1, 2, 3, 1, 1, 1, 4),
(4, 'PER/003', '2022-11-27', 1, 2, 271, 1, 1, 1, 4),
(5, 'PER/004', '2022-11-27', 1, 2, 27, 1, 1, 1, 4),
(12, 'PER/005', '2022-12-11', 2, 2, 27, 1, 1, 1, 8),
(13, 'PER/006', '2022-12-29', 1, 3, 8, 1, 1, 1, 4),
(18, 'PER/007', '2023-01-17', 1, 16000, 66, 1, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `respon`
--

CREATE TABLE `respon` (
  `id_respon` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `tgl_respon` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan_tolak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `respon`
--

INSERT INTO `respon` (`id_respon`, `id_status`, `id_permohonan`, `tgl_respon`, `id_user`, `keterangan_tolak`) VALUES
(1, 1, 1, '2022-11-15', 1, '-'),
(2, 1, 2, '2022-11-15', 1, '-'),
(4, 1, 12, '2022-12-11', 3, '-'),
(5, 1, 5, '2022-12-25', 1, '-'),
(9, 2, 1, '2023-01-13', 3, 'Yagitu'),
(10, 2, 1, '2023-01-14', 3, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `sampel`
--

CREATE TABLE `sampel` (
  `id_sampel` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sampel`
--

INSERT INTO `sampel` (`id_sampel`, `nama`, `jenis`) VALUES
(1, 'Kayu Manis', 'Batang'),
(2, 'Biji Kopi', 'Biji');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Diterima'),
(2, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `tujuan`) VALUES
(1, 'Lampung'),
(2, 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Pajar Padillah', 'pajar', '202cb962ac59075b964b07152d234b70', 'Admin'),
(2, 'Darman', 'darman', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(3, 'Rohamah', 'rohamah', '202cb962ac59075b964b07152d234b70', 'Petugas'),
(4, 'Wisnu Prayoga', 'wisnu', '202cb962ac59075b964b07152d234b70', 'Analis'),
(5, 'Muhammad Jumadh', 'jumadh', '202cb962ac59075b964b07152d234b70', 'Kepala Balai'),
(6, 'Irsan Nuhantoro', 'irsan', '202cb962ac59075b964b07152d234b70', 'Koordinator Tanaman'),
(7, 'Erma Nurlita', 'erma', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(8, 'Bambang Purnama', 'bambang', '202cb962ac59075b964b07152d234b70', 'Analis'),
(9, 'Purwadi', 'purwadi', '202cb962ac59075b964b07152d234b70', 'Tata Usaha'),
(10, 'Sinta Rahmawati', 'sinta', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(11, 'Test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Pelanggan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_file`
-- (See below for the actual view)
--
CREATE TABLE `view_file` (
`id_file` int(11)
,`nama_file` varchar(50)
,`file` varchar(100)
,`keterangan_tolak` text
,`id_permohonan` int(11)
,`no_permohonan` varchar(50)
,`tgl_permohonan` date
,`id_pelanggan` int(11)
,`id_analis` int(11)
,`nama` varchar(50)
,`keterangan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pengujian`
-- (See below for the actual view)
--
CREATE TABLE `view_pengujian` (
`id_pengujian` int(11)
,`no_permohonan` varchar(50)
,`id_user` int(11)
,`tgl_permohonan` date
,`sampel` varchar(50)
,`jenis` varchar(50)
,`tgl_pengujian` date
,`hasil` varchar(50)
,`metode` varchar(50)
,`nama_analis` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_permohonan`
-- (See below for the actual view)
--
CREATE TABLE `view_permohonan` (
`id_permohonan` int(11)
,`no_permohonan` varchar(50)
,`id_user` int(11)
,`nama` varchar(50)
,`tgl_permohonan` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_respon`
-- (See below for the actual view)
--
CREATE TABLE `view_respon` (
`id_respon` int(11)
,`no_permohonan` varchar(50)
,`status` varchar(50)
,`tgl_respon` date
,`keterangan_tolak` text
,`id_pelanggan` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `view_file`
--
DROP TABLE IF EXISTS `view_file`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_file`  AS SELECT `file`.`id_file` AS `id_file`, `file`.`nama_file` AS `nama_file`, `file`.`file` AS `file`, `file`.`keterangan_tolak` AS `keterangan_tolak`, `permohonan`.`id_permohonan` AS `id_permohonan`, `permohonan`.`no_permohonan` AS `no_permohonan`, `permohonan`.`tgl_permohonan` AS `tgl_permohonan`, `permohonan`.`id_user` AS `id_pelanggan`, `file`.`id_user` AS `id_analis`, `user`.`nama` AS `nama`, `file`.`keterangan` AS `keterangan` FROM ((`file` join `permohonan` on(`file`.`id_permohonan` = `permohonan`.`id_permohonan`)) join `user` on(`file`.`id_user` = `user`.`id_user`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_pengujian`
--
DROP TABLE IF EXISTS `view_pengujian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pengujian`  AS SELECT `pengujian`.`id_pengujian` AS `id_pengujian`, `permohonan`.`no_permohonan` AS `no_permohonan`, `permohonan`.`id_user` AS `id_user`, `permohonan`.`tgl_permohonan` AS `tgl_permohonan`, `sampel`.`nama` AS `sampel`, `sampel`.`jenis` AS `jenis`, `pengujian`.`tgl_pengujian` AS `tgl_pengujian`, `pengujian`.`hasil` AS `hasil`, `metode`.`metode` AS `metode`, `user`.`nama` AS `nama_analis` FROM ((((`pengujian` join `permohonan` on(`pengujian`.`id_permohonan` = `permohonan`.`id_permohonan`)) join `user` on(`pengujian`.`id_user` = `user`.`id_user`)) join `sampel` on(`permohonan`.`id_sampel` = `sampel`.`id_sampel`)) join `metode` on(`permohonan`.`id_metode` = `metode`.`id_metode`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_permohonan`
--
DROP TABLE IF EXISTS `view_permohonan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_permohonan`  AS SELECT `permohonan`.`id_permohonan` AS `id_permohonan`, `permohonan`.`no_permohonan` AS `no_permohonan`, `user`.`id_user` AS `id_user`, `user`.`nama` AS `nama`, `permohonan`.`tgl_permohonan` AS `tgl_permohonan` FROM (`permohonan` join `user` on(`permohonan`.`id_user` = `user`.`id_user`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_respon`
--
DROP TABLE IF EXISTS `view_respon`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_respon`  AS SELECT `respon`.`id_respon` AS `id_respon`, `permohonan`.`no_permohonan` AS `no_permohonan`, `status`.`status` AS `status`, `respon`.`tgl_respon` AS `tgl_respon`, `respon`.`keterangan_tolak` AS `keterangan_tolak`, `permohonan`.`id_user` AS `id_pelanggan` FROM ((`respon` join `permohonan` on(`respon`.`id_permohonan` = `permohonan`.`id_permohonan`)) join `status` on(`respon`.`id_status` = `status`.`id_status`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal`
--
ALTER TABLE `asal`
  ADD PRIMARY KEY (`id_asal`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `kaji_ulang`
--
ALTER TABLE `kaji_ulang`
  ADD PRIMARY KEY (`id_kaji_ulang`),
  ADD KEY `id_permohonan` (`id_permohonan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `pengujian`
--
ALTER TABLE `pengujian`
  ADD PRIMARY KEY (`id_pengujian`),
  ADD KEY `id_permohonan` (`id_permohonan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `id_asal` (`id_asal`),
  ADD KEY `id_sampel` (`id_sampel`),
  ADD KEY `id_tujuan` (`id_tujuan`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `permohonan_ibfk_4` (`id_user`);

--
-- Indexes for table `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`id_respon`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_permohonan` (`id_permohonan`);

--
-- Indexes for table `sampel`
--
ALTER TABLE `sampel`
  ADD PRIMARY KEY (`id_sampel`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asal`
--
ALTER TABLE `asal`
  MODIFY `id_asal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kaji_ulang`
--
ALTER TABLE `kaji_ulang`
  MODIFY `id_kaji_ulang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `metode`
--
ALTER TABLE `metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengujian`
--
ALTER TABLE `pengujian`
  MODIFY `id_pengujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `id_respon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sampel`
--
ALTER TABLE `sampel`
  MODIFY `id_sampel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kaji_ulang`
--
ALTER TABLE `kaji_ulang`
  ADD CONSTRAINT `kaji_ulang_ibfk_1` FOREIGN KEY (`id_permohonan`) REFERENCES `permohonan` (`id_permohonan`),
  ADD CONSTRAINT `kaji_ulang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pengujian`
--
ALTER TABLE `pengujian`
  ADD CONSTRAINT `pengujian_ibfk_1` FOREIGN KEY (`id_permohonan`) REFERENCES `permohonan` (`id_permohonan`),
  ADD CONSTRAINT `pengujian_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD CONSTRAINT `permohonan_ibfk_1` FOREIGN KEY (`id_asal`) REFERENCES `asal` (`id_asal`),
  ADD CONSTRAINT `permohonan_ibfk_2` FOREIGN KEY (`id_sampel`) REFERENCES `sampel` (`id_sampel`),
  ADD CONSTRAINT `permohonan_ibfk_3` FOREIGN KEY (`id_tujuan`) REFERENCES `tujuan` (`id_tujuan`),
  ADD CONSTRAINT `permohonan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `permohonan_ibfk_5` FOREIGN KEY (`id_metode`) REFERENCES `metode` (`id_metode`);

--
-- Constraints for table `respon`
--
ALTER TABLE `respon`
  ADD CONSTRAINT `respon_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `respon_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `respon_ibfk_3` FOREIGN KEY (`id_permohonan`) REFERENCES `permohonan` (`id_permohonan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
