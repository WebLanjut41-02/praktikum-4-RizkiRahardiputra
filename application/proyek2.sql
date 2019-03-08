-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mar 2019 pada 05.09
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bptp`
--

CREATE TABLE `bptp` (
  `noproduct` varchar(60) NOT NULL,
  `namaproduct` varchar(200) NOT NULL,
  `kelasproduct` varchar(5) NOT NULL,
  `hargaproduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bptp`
--

INSERT INTO `bptp` (`noproduct`, `namaproduct`, `kelasproduct`, `hargaproduct`) VALUES
('K01', 'Kedelai Hitam', 'FS', 40000),
('K02', 'Kedelai Putih', 'FS', 30000),
('P01', 'Padi Rojolele', 'FS', 50000),
('P02', 'Padi Delanggu', 'SS', 30000),
('P03', 'Padi Hitam', 'FS', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bptp`
--
ALTER TABLE `bptp`
  ADD PRIMARY KEY (`noproduct`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
