-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 08:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `kd_kriteria` varchar(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kd_kriteria`, `kriteria`, `tipe`, `bobot`) VALUES
(1, 'C1', 'Orang Tua', 'Cost', 4),
(2, 'C2', 'Saudara Usia Sekolah', 'Benefit', 4),
(3, 'C3', 'Penghasilan Orang Tua', 'Cost', 4),
(4, 'C4', 'Luas Tempat Tinggal', 'Cost', 1),
(5, 'C5', 'Luas Bangunan Rumah', 'Cost', 1),
(6, 'C6', 'Atap', 'Cost', 1),
(7, 'C7', 'Dinding', 'Cost', 1),
(8, 'C8', 'Lantai', 'Cost', 1),
(9, 'C9', 'Kepemilikan Rumah', 'Cost', 1),
(10, 'C10', 'Kendaraan', 'Cost', 1),
(11, 'C11', 'Barang Elektronik', 'Cost', 1),
(12, 'C12', 'Luas Sawah/ Ladang', 'Cost', 1),
(13, 'C13', 'Hewan Ternak', 'Cost', 1),
(14, 'C14', 'Tagihan Listrik (PLN)', 'Benefit', 3),
(15, 'C15', 'Tagihan Air (PAM)', 'Benefit', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `c1` double NOT NULL,
  `c2` double NOT NULL,
  `c3` double NOT NULL,
  `c4` double NOT NULL,
  `c5` double NOT NULL,
  `c6` double NOT NULL,
  `c7` double NOT NULL,
  `c8` double NOT NULL,
  `c9` double NOT NULL,
  `c10` double NOT NULL,
  `c11` double NOT NULL,
  `c12` double NOT NULL,
  `c13` double NOT NULL,
  `c14` double NOT NULL,
  `c15` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`, `c15`, `total`) VALUES
(30, 18, 2, 4, 2, 1, 1, 3, 3, 3, 4, 3, 4, 1, 1, 4, 1, 18.83),
(31, 19, 3, 2, 3, 1, 1, 1, 3, 3, 1, 3, 3, 1, 2, 2, 1, 15),
(32, 20, 3, 2, 2, 1, 2, 3, 3, 2, 1, 3, 4, 1, 1, 3, 1, 16),
(33, 21, 3, 1, 3, 3, 2, 1, 3, 3, 4, 3, 3, 1, 2, 3, 1, 12.83),
(34, 22, 2, 2, 2, 1, 1, 3, 3, 2, 1, 3, 3, 1, 2, 3, 1, 16.75),
(35, 23, 1, 2, 1, 2, 2, 3, 3, 2, 1, 1, 3, 1, 1, 1, 1, 19.42),
(36, 24, 2, 3, 2, 4, 4, 1, 3, 3, 4, 3, 3, 1, 1, 3, 1, 16.33),
(37, 25, 3, 2, 2, 1, 1, 3, 3, 2, 1, 3, 3, 1, 2, 2, 1, 15.33),
(38, 26, 2, 2, 2, 1, 1, 3, 3, 3, 1, 1, 1, 1, 1, 4, 3, 21),
(41, 27, 3, 2, 2, 1, 2, 3, 3, 3, 1, 3, 4, 1, 3, 4, 1, 15.75);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(5) NOT NULL,
  `siswa` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `siswa`) VALUES
(18, 'Andreas Bernito'),
(19, 'Andreas Nuno'),
(20, 'Angela Betania'),
(21, 'Benediktus Hanung'),
(22, 'Daniel Bayu'),
(23, 'Heppy Surya'),
(24, 'Muhammad Rizqi'),
(25, 'Roberto Ardean'),
(26, 'Sony Candra'),
(27, 'Yoga Eka');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(5) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `subkriteria` varchar(50) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `id_kriteria`, `subkriteria`, `nilai`) VALUES
(1, 1, 'Yatim Piatu', 1),
(2, 1, 'Yatim/ Piatu', 2),
(3, 1, 'Lengkap', 3),
(4, 2, 'Tidak ada', 1),
(5, 2, '1', 2),
(6, 2, '2', 3),
(7, 2, '> 2', 4),
(8, 3, 'Tidak ada', 1),
(9, 3, '< 1juta', 2),
(10, 3, '1.1juta - 3juta', 3),
(11, 3, '> 3juta', 4),
(12, 4, '< 50m2', 1),
(13, 4, '50m2 - 75m2', 2),
(14, 4, '75m2 - 100m2', 3),
(15, 4, '> 100m2', 4),
(16, 5, '< 25m2', 1),
(17, 5, '25m2 - 50m2', 2),
(18, 5, '50m2 - 75m2', 3),
(19, 5, '> 75m2', 4),
(20, 6, 'Seng', 1),
(21, 6, 'Asbes', 2),
(22, 6, 'Genteng', 3),
(23, 7, 'Kayu', 1),
(24, 7, 'Semi Tembok', 2),
(25, 7, 'Tembok', 3),
(26, 8, 'Tanah', 1),
(27, 8, 'Semen', 2),
(28, 8, 'Keramik', 3),
(29, 9, 'Lainnya', 1),
(30, 9, 'Pinjam', 2),
(31, 9, 'Sewa/ Kontrak', 3),
(32, 9, 'Milik Sendiri', 4),
(33, 10, 'Tidak ada', 1),
(34, 10, 'Sepeda', 2),
(35, 10, 'Motor', 3),
(36, 10, 'Mobil', 4),
(37, 11, 'Tidak ada', 1),
(38, 11, 'Tape/ Radio', 2),
(39, 11, 'TV', 3),
(40, 11, 'Komputer/ Kulkas', 4),
(41, 12, 'Tidak ada', 1),
(42, 12, '< 500m2', 2),
(43, 12, '500m2 - 1000m2', 3),
(44, 12, '> 1000m2', 4),
(45, 13, 'Tidak ada', 1),
(46, 13, 'Ayam', 2),
(47, 13, 'Kambing', 3),
(48, 13, 'Sapi/ Kerbau', 4),
(49, 14, 'Tidak ada', 1),
(50, 14, '< Rp. 50rb', 2),
(51, 14, 'Rp. 50rb - Rp. 100rb', 3),
(52, 14, '> Rp. 100rb', 4),
(53, 15, 'Tidak ada', 1),
(54, 15, '< Rp. 50rb', 2),
(55, 15, 'Rp. 50rb - Rp. 100rb', 3),
(56, 15, '> Rp. 100rb', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
