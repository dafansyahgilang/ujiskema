-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 05:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `tanggal_jam` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_kandidat`, `id_pemilih`, `tanggal_jam`) VALUES
(2, 2, 3, '2023-11-23 02:29:34'),
(3, 2, 4, '2023-11-23 02:39:18'),
(4, 2, 4, '2023-11-23 02:40:41'),
(5, 2, 4, '2023-11-23 02:40:59'),
(6, 2, 4, '2023-11-23 02:41:16'),
(7, 1, 4, '2023-11-23 03:03:35'),
(8, 1, 5, '2023-11-23 03:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kandidat`
--

CREATE TABLE `tb_kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama_ketos` varchar(100) NOT NULL,
  `nama_waketos` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `visi` varchar(100) NOT NULL,
  `misi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kandidat`
--

INSERT INTO `tb_kandidat` (`id_kandidat`, `nama_ketos`, `nama_waketos`, `image`, `visi`, `misi`) VALUES
(1, 'zidane', 'arrif', 'Kandidat 1.png', 'visi1', 'misi2'),
(2, 'abdul', 'kak', 'Kandidat 2.png', 'visi2', 'misi2'),
(3, 'radit', 'rafi', 'Kandidat 3.png', 'visi3', 'misi3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilih`
--

CREATE TABLE `tb_pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `NISN` varchar(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemilih`
--

INSERT INTO `tb_pemilih` (`id_pemilih`, `username`, `nama`, `password`, `NISN`, `alamat`) VALUES
(4, 'pemilih', 'Zidane', '12345', '123458', 'bataan'),
(5, 'rara', 'rara', '1234', '1111111111', 'kajar'),
(6, 'rafi', 'rafi', '1234', '123456', 'bataan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`) VALUES
(5, 'admin', 'admin@gmail.com', 'admin'),
(6, 'rahmat', 'rahmat@gmail.com', 'rahmat'),
(7, 'aaaa', 'a@a', 'afdf'),
(8, 'kaka', 'kaka@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `kandidat_id` (`id_kandidat`),
  ADD KEY `pemilih_id` (`id_pemilih`),
  ADD KEY `pemilih_id_2` (`id_pemilih`);

--
-- Indexes for table `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `tb_pemilih`
--
ALTER TABLE `tb_pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kandidat`
--
ALTER TABLE `tb_kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pemilih`
--
ALTER TABLE `tb_pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
