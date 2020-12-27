-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 09:19 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `size` int(255) NOT NULL,
  `style` varchar(255) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id`, `nama`, `slug`, `size`, `style`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Air Jordan 1 Mid SE', 'air-jordan-1-mid-se', 7, 'Shown: Metallic Gold/White/Black/Black Style: DC1419-700', 'The Air Jordan 1 Mid SE maintains the timeless appeal of the OG AJ1. This version gets revamped with gold detailing and premium materials. It\'s built with a lightweight Air-Sole unit and classic design lines, capturing the essence of the original through a modern lens.', 'AirJordan1.png', NULL, NULL),
(2, 'asEdit', 'asedit', 1, 'asEdit', 'aasEdit', '1608970467_2d72ea1fc79b0ede951e.png', '2020-12-25 12:26:01', '2020-12-26 02:14:27'),
(3, 'tes2', 'tes2', 2, 'tes2', 'tes2', '1608928732_a4ebafa8bdb021b059fb.jpg', '2020-12-25 14:38:52', '2020-12-25 14:38:52'),
(4, 'SepatuPage2', 'sepatupage2', 2, '2', '2', 'default.jpg', '2020-12-27 01:32:56', '2020-12-27 01:32:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
