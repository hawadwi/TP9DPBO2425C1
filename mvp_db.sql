-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 05:09 PM
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
(4, 'Silverstone Circuit', 'Inggris', 5.89, 18, 'Sirkuit permanen');

-- --------------------------------------------------------

--
-- Table structure for table `pembalap`
--

CREATE TABLE `pembalap` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tim` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `poinMusim` int(11) DEFAULT 0,
  `jumlahMenang` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembalap`
--

INSERT INTO `pembalap` (`id`, `nama`, `tim`, `negara`, `poinMusim`, `jumlahMenang`) VALUES
(1, 'Lewis Hamilton', 'Mercedes', 'United Kingdom', 347, 11),
(2, 'Max Verstappen', 'Red Bull', 'Netherlands', 335, 10),
(3, 'Valtteri Bottas', 'Mercedes', 'Finland', 203, 2),
(4, 'Sergio Perez', 'Red Bull', 'Mexico', 190, 1),
(5, 'Carlos Sainz', 'Ferrari', 'Spain', 150, 0),
(6, 'Daniel Ricciardo', 'McLaren', 'Australia', 115, 1),
(7, 'Charles Leclerc', 'Ferrari', 'Monaco', 95, 0),
(8, 'Lando Norris', 'McLaren', 'United Kingdom', 88, 0),
(9, 'Pierre Gasly', 'AlphaTauri', 'France', 75, 0),
(10, 'Fernando Alonso', 'Alpine', 'Spain', 65, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_lintasan`
--
ALTER TABLE `data_lintasan`
  ADD PRIMARY KEY (`id_lintasan`);

--
-- Indexes for table `pembalap`
--
ALTER TABLE `pembalap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_lintasan`
--
ALTER TABLE `data_lintasan`
  MODIFY `id_lintasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembalap`
--
ALTER TABLE `pembalap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
