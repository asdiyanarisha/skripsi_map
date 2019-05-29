-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 08:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-general`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subjek` varchar(225) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(1, 'Produk Satu', 'admin@jogjarekayasa.co.id', 'sdas', 'dsasdasda', '2018-12-28 17:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id_map` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `jam_buka` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `longt` varchar(225) NOT NULL,
  `lat` varchar(225) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id_map`, `nama`, `alamat`, `telpon`, `foto`, `jam_buka`, `deskripsi`, `longt`, `lat`, `keterangan`) VALUES
(6, 'Showroom Contoh 1', 'Jl. AM. Sangaji 66, Yogyakarta', '0821-34212463', 'dfghj.jpg', '-', 'loren', '110.3658967', '-7.77528', ''),
(7, 'Showroom Contoh 2', 'Jl. Krasak No.1 Kotabaru', '085754829935', 'dfghj1.jpg', '-', 'hjhjh', '110.3705191', '-7.7888758', ''),
(12, 'Showroom Contoh 3', 'jln asdasdasdasda', '02742802418', '', '-', 'asasd', '110.33878326416017', '-7.784472396665788', ''),
(13, 'Showroom Contoh 4', 'sdasdasdas', '02742802418', '', '-', 'zdsdasd', '110.38616180419922', '-7.792976282659098', '');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_map` int(11) NOT NULL,
  `nama_mobil` varchar(225) NOT NULL,
  `foto_mobil` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_map`, `nama_mobil`, `foto_mobil`, `harga`, `deskripsi`) VALUES
(1, 7, 'Suzuki', '594a53bb86f2f560b0000001.jpg', 122222, 'lorem'),
(2, 12, 'Honda', '900311626.jpg', 1200000, 'sdasdasdas'),
(3, 6, 'Honda', 'adventure-backpack-climb-868097.jpg', 120000, 'asdas'),
(4, 6, 'Suzuki', '1200px-Coding_Shots_Annual_Plan_high_res-5.jpg', 120000, 'sdasda'),
(5, 13, 'Daihatsu', '416x416.jpg', 1200000, 'hgjh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(5, 'admin@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id_map`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
