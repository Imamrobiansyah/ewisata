-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 06:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `desa_code` varchar(10) NOT NULL,
  `kec_code` varchar(8) NOT NULL,
  `desa` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`desa_code`, `kec_code`, `desa`) VALUES
('000001', '00001', 'bugel'),
('000002', '00002', 'pasar baru');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kat_code` varchar(4) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kat_code`, `kategori`, `icon`) VALUES
('001', 'Danau', '');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kec_code` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `kota_code` varchar(4) CHARACTER SET utf8mb4 NOT NULL,
  `kecamatan` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kec_code`, `kota_code`, `kecamatan`) VALUES
('00001', '001', 'karawaci'),
('00002', '002', 'cisoka');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan_lonlat`
--

CREATE TABLE `kecamatan_lonlat` (
  `id` int(10) UNSIGNED NOT NULL,
  `kec_kode` char(6) DEFAULT NULL,
  `longitude` text DEFAULT NULL,
  `latitude` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kota_code` varchar(4) NOT NULL,
  `prov_code` varchar(4) NOT NULL,
  `kota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kota_code`, `prov_code`, `kota`) VALUES
('001', '46', 'Tangerang'),
('002', '46', 'Balaraja'),
('012', '47', 'Grogol');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--INI YG DITAMBAHIN BILA DI GABUNGIN----

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `lokasi_code` varchar(4) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `lkat_code` varchar(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `lprov_code` varchar(11) NOT NULL,
  `lkota_code` varchar(11) DEFAULT NULL,
  `lkec_code` varchar(11) DEFAULT NULL,
  `ldesa_code` varchar(11) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-------------------------------
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `lokasi_code`, `nama`, `lkat_code`, `alamat`, `lprov_code`, `lkota_code`, `lkec_code`, `ldesa_code`, `kode_pos`, `telepon`, `fax`, `email`, `status`, `deskripsi`) VALUES
(17, '2323', 'kali cili', '001', 'jl kaliurang', '46', '001', '00001', '000001', '4334', '0876755545', '54545', 'pariwisata@mail.com', 1, '<p>terjangkau</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_foto`
--

CREATE TABLE `lokasi_foto` (
  `id` int(11) NOT NULL,
  `lokasi_code` varchar(4) NOT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `lokasi_foto`
--

INSERT INTO `lokasi_foto` (`id`, `lokasi_code`, `foto`, `status`) VALUES
(4, '001', '001.png', 1),
(5, '090', '090.png', 4),
(6, '555', '555.jpg', 4),
(7, '888', '888.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_jawdal_hari`
--

CREATE TABLE `lokasi_jawdal_hari` (
  `id` int(11) NOT NULL,
  `lokasi_code` varchar(4) NOT NULL,
  `senin` varchar(11) DEFAULT NULL COMMENT '1 buka;0 tutup',
  `selasa` varchar(11) DEFAULT NULL,
  `rabu` varchar(11) DEFAULT NULL,
  `kamis` varchar(11) DEFAULT NULL,
  `jumat` varchar(11) DEFAULT NULL,
  `sabtu` varchar(11) DEFAULT NULL,
  `minggu` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `lokasi_jawdal_hari`
--

INSERT INTO `lokasi_jawdal_hari` (`id`, `lokasi_code`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
(0, '001', 'Buka', 'Tutup', 'Buka', 'Buka', 'Tutup', 'Buka', 'Buka');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_jawdal_jam`
--

CREATE TABLE `lokasi_jawdal_jam` (
  `id` int(11) NOT NULL,
  `lokasi_code` varchar(4) NOT NULL,
  `senin` varchar(20) DEFAULT NULL,
  `selasa` varchar(20) DEFAULT NULL,
  `rabu` varchar(20) DEFAULT NULL,
  `kamis` varchar(20) DEFAULT NULL,
  `jumat` varchar(20) DEFAULT NULL,
  `sabtu` varchar(20) DEFAULT NULL,
  `minggu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `lokasi_jawdal_jam`
--

INSERT INTO `lokasi_jawdal_jam` (`id`, `lokasi_code`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
(1, '011', '01:00', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_tiket`
--

CREATE TABLE `lokasi_tiket` (
  `lokasi_code` varchar(4) NOT NULL,
  `tiket_code` varchar(4) NOT NULL,
  `harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `prov_code` varchar(3) NOT NULL,
  `provinsi` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`prov_code`, `provinsi`) VALUES
('46', 'Banten'),
('47', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_kategori`
--

CREATE TABLE `tiket_kategori` (
  `tiket_code` varchar(4) NOT NULL,
  `tiket_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `hak_akses` enum('Super Admin','Manajer','Gudang') NOT NULL,
  `status` enum('aktif','blokir') NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama_user`, `password`, `email`, `telepon`, `foto`, `hak_akses`, `status`, `created_at`, `updated_at`) VALUES
(2, 'imam', 'Imam Robiansyah', '25d55ad283aa400af464c76d713c07ad', 'imam@mail.com', '091233445', NULL, 'Super Admin', 'aktif', '2021-02-03 12:56:26', '2021-02-03 12:57:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_code`,`kec_code`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kat_code`) USING BTREE;

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kec_code`),
  ADD KEY `kecamatan_ibfk_2` (`kota_code`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_code`),
  ADD KEY `prov_code` (`prov_code`);

--
-- Indexes for table `lokasi`
--DARI SINI YG DITAMBAHIN JUGA--------
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`,`lokasi_code`) USING BTREE,
  ADD KEY `lokasi_ibfk_1` (`lkat_code`),
  ADD KEY `lokasi_ibfk_2` (`lprov_code`),
  ADD KEY `lokasi_ibfk_3` (`lkota_code`),
  ADD KEY `lokasi_ibfk_4` (`lkec_code`),
  ADD KEY `lokasi_ibfk_5` (`ldesa_code`);

--SAMPAI SINI------------
-- Indexes for table `lokasi_foto`
--
ALTER TABLE `lokasi_foto`
  ADD PRIMARY KEY (`id`,`lokasi_code`) USING BTREE;

--
-- Indexes for table `lokasi_jawdal_hari`
--
ALTER TABLE `lokasi_jawdal_hari`
  ADD PRIMARY KEY (`id`,`lokasi_code`) USING BTREE;

--
-- Indexes for table `lokasi_jawdal_jam`
--
ALTER TABLE `lokasi_jawdal_jam`
  ADD PRIMARY KEY (`id`,`lokasi_code`) USING BTREE;

--
-- Indexes for table `lokasi_tiket`
--
ALTER TABLE `lokasi_tiket`
  ADD PRIMARY KEY (`lokasi_code`,`tiket_code`) USING BTREE;

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`prov_code`) USING BTREE;

--
-- Indexes for table `tiket_kategori`
--
ALTER TABLE `tiket_kategori`
  ADD PRIMARY KEY (`tiket_code`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`) USING BTREE,
  ADD KEY `level` (`hak_akses`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `lokasi_foto`
--
ALTER TABLE `lokasi_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lokasi_jawdal_hari`
--
ALTER TABLE `lokasi_jawdal_hari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lokasi_jawdal_jam`
--
ALTER TABLE `lokasi_jawdal_jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kecamatan`

ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_2` FOREIGN KEY (`kota_code`) REFERENCES `kota` (`kota_code`);

--
-- Constraints for table `kota`
--
--DAN INI JUGA DI COPY------------
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`prov_code`) REFERENCES `provinsi` (`prov_code`);

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`lkat_code`) REFERENCES `kategori` (`kat_code`),
  ADD CONSTRAINT `lokasi_ibfk_2` FOREIGN KEY (`lprov_code`) REFERENCES `provinsi` (`prov_code`),
  ADD CONSTRAINT `lokasi_ibfk_3` FOREIGN KEY (`lkota_code`) REFERENCES `kota` (`kota_code`),
  ADD CONSTRAINT `lokasi_ibfk_4` FOREIGN KEY (`lkec_code`) REFERENCES `kecamatan` (`kec_code`),
  ADD CONSTRAINT `lokasi_ibfk_5` FOREIGN KEY (`ldesa_code`) REFERENCES `desa` (`desa_code`);
----sampai sini terakhir--------
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
