-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 03:06 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hotel`
--
CREATE DATABASE IF NOT EXISTS `db_hotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_hotel`;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` char(10) NOT NULL,
  `nama_fasilitas` char(60) NOT NULL,
  PRIMARY KEY (`id_fasilitas`),
  UNIQUE KEY `id_fasilitas` (`id_fasilitas`),
  UNIQUE KEY `id_fasilitas_2` (`id_fasilitas`),
  UNIQUE KEY `nama_fasilitas` (`nama_fasilitas`),
  UNIQUE KEY `nama_fasilitas_8` (`nama_fasilitas`),
  KEY `nama_fasilitas_2` (`nama_fasilitas`),
  KEY `nama_fasilitas_3` (`nama_fasilitas`),
  KEY `nama_fasilitas_4` (`nama_fasilitas`),
  KEY `nama_fasilitas_5` (`nama_fasilitas`),
  KEY `nama_fasilitas_6` (`nama_fasilitas`),
  KEY `nama_fasilitas_7` (`nama_fasilitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`) VALUES
('A13', 'Kasur Ekstra 2x, Kamar Mandi, Lemari, Meja, TV, AC, Sarapan'),
('A02', 'Kasur Ekstra, Kamar Mandi, Lemari, Meja, TV, AC'),
('A03', 'Kasur Jumbo, Kamar Mandi, Lemari, Meja, TV, AC, Sarapan'),
('A11', 'Kasur Standar 2x, Kamar Mandi, Lemari, Meja'),
('A12', 'Kasur Standar 2x, Kamar Mandi, Lemari, Meja, TV, AC'),
('A01', 'Kasur Standar, Kamar Mandi, Lemari, Meja');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `nomor_kamar` int(50) NOT NULL,
  `tipe_kamar` char(20) NOT NULL,
  `id_fasilitas` char(10) NOT NULL,
  `tarif` double NOT NULL,
  PRIMARY KEY (`nomor_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`nomor_kamar`, `tipe_kamar`, `id_fasilitas`, `tarif`) VALUES
(1, 'Standar', 'A01', 115000),
(2, 'Standar', 'A01', 115000),
(3, 'Standar', 'A02', 130000),
(4, 'Standar', 'A02', 130000),
(5, 'Superior', 'A03', 150000),
(6, 'Superior', 'A11', 175000),
(7, 'Superior', 'A12', 199000),
(8, 'Deluxe', 'A12', 215000),
(9, 'Deluxe', 'A13', 245000),
(10, 'Deluxe', 'A13', 245000),
(11, 'Eksklusif', 'A13', 245000),
(12, 'Eksklusif', 'A13', 245000);

-- --------------------------------------------------------

--
-- Table structure for table `resepsionis`
--

CREATE TABLE IF NOT EXISTS `resepsionis` (
  `id_resepsionis` int(20) NOT NULL,
  `nama_resepsionis` char(20) NOT NULL,
  PRIMARY KEY (`id_resepsionis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resepsionis`
--

INSERT INTO `resepsionis` (`id_resepsionis`, `nama_resepsionis`) VALUES
(11011456, 'Riyas Amin'),
(11011457, 'Andre Vikta'),
(11011458, 'Lalu Ferdian');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `kode_reservasi` int(10) NOT NULL,
  `tgl_masuk` char(20) NOT NULL,
  `tgl_keluar` char(20) NOT NULL,
  `tarif` double NOT NULL,
  `id_KTP` int(20) NOT NULL,
  `nomor_kamar` int(50) NOT NULL,
  `id_resepsionis` int(20) NOT NULL,
  `id_fasilitas` char(10) NOT NULL,
  PRIMARY KEY (`kode_reservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`kode_reservasi`, `tgl_masuk`, `tgl_keluar`, `tarif`, `id_KTP`, `nomor_kamar`, `id_resepsionis`, `id_fasilitas`) VALUES
(211006650, '06 Oktober 2021', '07 Oktober 2021', 115000, 520305061, 2, 11011456, 'A01'),
(211023650, '23 Oktober 2021', '24 Oktober 2021', 150000, 520305062, 5, 11011456, 'A02'),
(211023651, '23 Oktober 2021', '24 Oktober 2021', 150000, 520305063, 4, 11011457, 'A02'),
(211029601, '29 Oktober 2021', '30 Oktober 2021', 150000, 520305065, 4, 11011457, 'A02'),
(211105768, '05 November 2021', '06 November 2021', 245000, 520305999, 11, 11011458, 'A13');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `id_KTP` int(20) NOT NULL AUTO_INCREMENT,
  `nama` char(20) NOT NULL,
  `alamat` char(50) NOT NULL,
  `no_telepon` int(15) NOT NULL,
  PRIMARY KEY (`id_KTP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=520306000 ;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_KTP`, `nama`, `alamat`, `no_telepon`) VALUES
(999994, 'heheheh', 'erwrwer', 2147483647),
(520305061, 'Didik Indirman', 'Masbagik', 62877650),
(520305062, 'Diaz Dwi', 'Mataram', 62878648),
(520305063, 'Ray Surya', 'Lepak', 62878647),
(520305065, 'Rizal Akbar', 'Mataram', 62878601),
(520305999, 'Pro_Player', 'Gatka', 12345678);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
