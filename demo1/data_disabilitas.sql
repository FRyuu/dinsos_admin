-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 06:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_disabilitas`
--

CREATE TABLE `data_disabilitas` (
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(30) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `jenis_disabilitas` enum('PDFSK (Penyandang Disabilitas Fisik)','PDINT (Penyandang Disabilitas Intelektual)','PDMTL (Penyandang Disabilitas Mental)','PDSNS (Penyandang Disabilitas Sensorik)') NOT NULL,
  `gambaran_disabilitas` varchar(50) NOT NULL,
  `sejak_kapan` date NOT NULL,
  `penyebab_disabilitas` varchar(50) NOT NULL,
  `agama` enum('-','Islam','Protestan','Katolik','Hindu','Buddha') NOT NULL,
  `pendidikan` enum('TIDAK / BELUM SEKOLAH','TAMAT SD / SEDERAJAT','TIDAK TAMAT SD / SEDERAJAT','SLTA / SEDERAJAT','SLTP/SEDERAJAT','DIPLOMA I / II','AKADEMI/ DIPLOMA III/S. MUDA','DIPLOMA IV/ STRATA I','STRATA II','STRATA III') NOT NULL,
  `status_kawin` enum('Belum Kawin','Kawin') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `alamat_domisili` varchar(50) NOT NULL,
  `program_pemerintah` varchar(30) NOT NULL,
  `pekerjaan_disabilitas` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `penghasilan_disabilitas` bigint(30) NOT NULL,
  `penghasilan_orangtua` bigint(30) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `penghasilan_wali` bigint(30) NOT NULL,
  `bantuan_ygdibutuhkan` varchar(30) NOT NULL,
  `ppks_tinggal_bersama` varchar(30) NOT NULL,
  `no_hp` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_disabilitas`
--

INSERT INTO `data_disabilitas` (`nama`, `tempat_lahir`, `tanggal_lahir`, `umur`, `nik`, `jenis_kelamin`, `jenis_disabilitas`, `gambaran_disabilitas`, `sejak_kapan`, `penyebab_disabilitas`, `agama`, `pendidikan`, `status_kawin`, `alamat`, `alamat_domisili`, `program_pemerintah`, `pekerjaan_disabilitas`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_disabilitas`, `penghasilan_orangtua`, `nama_wali`, `pekerjaan_wali`, `penghasilan_wali`, `bantuan_ygdibutuhkan`, `ppks_tinggal_bersama`, `no_hp`) VALUES
('syfr', 'kijang', '2022-02-09', 1, 2102022508000007, 'Perempuan', 'PDINT (Penyandang Disabilitas Intelektual)', 'nmbvfgjj', '2022-02-10', 'kecelakaan ', 'Islam', 'SLTA / SEDERAJAT', 'Belum Kawin', 'bdszdfghjkjnbv', 'mbvddrtyhhjooufeew', 'tidak ada', 'tidak  bekerja', 'buruh', 'ibu rumah tangga', 1000000, 2000000, 'tidak', 'fbfhfh', 500000000, 'kursi roda', 'orangtua', 78237897092830);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_disabilitas`
--
ALTER TABLE `data_disabilitas`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
