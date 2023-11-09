-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 01:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pesawat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `no_tiket` int(11) NOT NULL,
  `nama_pemesan` varchar(32) NOT NULL,
  `nama_pesawat` varchar(32) NOT NULL,
  `kelas` varchar(32) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `jml_tiket` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`no_tiket`, `nama_pemesan`, `nama_pesawat`, `kelas`, `harga_tiket`, `jml_tiket`, `total_bayar`) VALUES
(1, 'Ihsan Maulana', 'Garuda', 'Eksekutif', 1500000, 4, 6000000),
(2, 'Vidi Azzahra Mujahidillah', 'Merpati', 'Ekonomi', 400000, 10, 4000000),
(3, 'Ari Zainal Fauziah', 'Batavia', 'Eksekutif', 1000000, 10, 10000000),
(4, 'Dikri', 'Garuda', 'Eksekutif', 1500000, 5, 7500000),
(5, 'Dzikri', 'Batavia', 'Eksekutif', 1000000, 1, 1000000),
(6, 'M Luthfi Tauhid', 'Merpati', 'Ekonomi', 400000, 2, 800000),
(7, 'Al Fariq', 'Garuda', 'Ekonomi', 500000, 2, 1000000),
(8, 'Alfi', 'Merpati', 'Bisnis', 800000, 1, 800000),
(9, 'Fauziah', 'Batavia', 'Eksekutif', 1000000, 1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id` int(11) NOT NULL,
  `nama_pesawat` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `harga_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id`, `nama_pesawat`, `kelas`, `harga_tiket`) VALUES
(1, 'Garuda', 'Eksekutif', 1500000),
(2, 'Garuda', 'Bisnis', 900000),
(3, 'Garuda', 'Ekonomi', 500000),
(4, 'Merpati', 'Eksekutif', 1200000),
(5, 'Merpati', 'Bisnis', 800000),
(6, 'Merpati', 'Ekonomi', 400000),
(7, 'Batavia', 'Eksekutif', 1000000),
(8, 'Batavia', 'Bisnis', 700000),
(9, 'Batavia', 'Ekonomi', 300000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`no_tiket`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `no_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
