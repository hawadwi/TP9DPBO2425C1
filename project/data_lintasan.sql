-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 03:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_lintasan`
--

CREATE TABLE `data_lintasan` (
  `id_lintasan` int(11) NOT NULL,
  `nama_lintasan` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `panjang_km` decimal(5,2) DEFAULT 0.00,
  `jumlah_tikungan` int(11) DEFAULT 0,
  `tipe_lintasan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_lintasan`
--

INSERT INTO `data_lintasan` (`id_lintasan`, `nama_lintasan`, `negara`, `panjang_km`, `jumlah_tikungan`, `tipe_lintasan`) VALUES
(1, 'Sirkuit Internasional Sepang', 'Malaysia', 5.54, 15, 'Sirkuit permanen'),
(2, 'Autodromo Nazionale Monza', 'Italia', 5.79, 11, 'Sirkuit permanen'),
(3, 'Circuit de Monaco', 'Monaco', 3.34, 19, 'Sirkuit jalan raya'),
(4, 'Silverstone Circuit', 'Inggris', 5.89, 18, 'Sirkuit permanen'),
(5, 'Marina Bay Street Circuit', 'Singapura', 5.06, 23, 'Sirkuit jalan raya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_lintasan`
--
ALTER TABLE `data_lintasan`
  ADD PRIMARY KEY (`id_lintasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_lintasan`
--
ALTER TABLE `data_lintasan`
  MODIFY `id_lintasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
