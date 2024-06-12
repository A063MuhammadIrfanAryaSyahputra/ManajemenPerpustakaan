-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 06:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpti2`
--

-- --------------------------------------------------------

--
-- Table structure for table `haji`
--

CREATE TABLE `haji` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `itenary1` varchar(250) NOT NULL,
  `itenary2` varchar(250) NOT NULL,
  `itenary3` varchar(250) NOT NULL,
  `itenary4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `haji`
--

INSERT INTO `haji` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`, `itenary2`, `itenary3`, `itenary4`) VALUES
(1, 'Coming Soon', '66691b45d3d99.jpg', '66691b45d3d9b.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(2, 'Coming Soon', '66691b57b76fe.jpg', '66691b57b7701.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(3, 'Coming Soon', '66691b613d11a.jpg', '66691b613d11d.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(4, 'Coming Soon', '66691b6d20945.jpg', '66691b6d20947.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(5, 'Coming Soon', '66691b7e0145c.jpg', '66691b7e0145e.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(6, 'Coming Soon', '66691b8a77053.jpg', '66691b8a77055.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon');

-- --------------------------------------------------------

--
-- Table structure for table `umroh`
--

CREATE TABLE `umroh` (
  `id` int(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `itenary1` varchar(250) NOT NULL,
  `itenary2` varchar(250) NOT NULL,
  `itenary3` varchar(250) NOT NULL,
  `itenary4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `umroh`
--

INSERT INTO `umroh` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`, `itenary2`, `itenary3`, `itenary4`) VALUES
(5, 'Umrah Bulan Maulid', '66689d67cbd84_Frame 8.png', 'Frame 8.png', 'Bayangkan, kamu selalu berada di sisi Nabi Muhammad ﷺ.. Mengikuti setiap jejak episode perjalanan dakwahnya... Mengikuti setiap momen-momen berharga bersamanya.  Kisah luar biasa perjalanan Nabi kita Nabi Muhammad ﷺ yang penuh cinta dan pengorbanan, siap untuk kami ungkapkan !  Dalam program Umroh Siroh Nabawi 14 September 2024', 'Penerbangan tanpa transit', '3 hari Madinah', '3 Hari Mekkah', 'Gratis wisata Thoif'),
(6, 'Umroh 13H', '6668a19e1b2db_jul 1.png', 'jul 1.png', 'Bagi anda yang mengingnkan perjalanan ibadah dengan durasi waktu yang lama, sehingga banyak waktu untuk bermunajat di tanah haram, perjalanan 13 hari menjadi pilihan yang tepat.', 'Penerbangan Tanpa Transit', '4 Hari Madinah', '4 Hari Mekkah', 'Gratis Wisata Thoif'),
(7, 'Umroh Plus', '6668a1952d344_aug 1.png', 'aug 1.png', 'Dengan program umrah plus, anda bisa menikmati perjalanan yang menakjubkan. Mulai dari menikmati indahnya ciptaan Allah yang terbentang di Benua Eropa, dilanjutkan dengan khidmatnya perjalanan ibadah di tanah suci.', 'Umroh plus Turkey', 'Umroh plus Eropa Barat', '-', '-'),
(8, 'Coming Soon', '6668b2dade816.jpg', '6668b2dade819.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(9, 'Coming Soon', '6668b2eec6d04.jpg', '6668b2eec6d06.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(10, 'Coming Soon', '6668b2f98c775.jpg', '6668b2f98c778.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `haji`
--
ALTER TABLE `haji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umroh`
--
ALTER TABLE `umroh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `haji`
--
ALTER TABLE `haji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `umroh`
--
ALTER TABLE `umroh`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
