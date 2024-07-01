-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2024 at 07:46 PM
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
-- Database: `rpl1`
--

-- --------------------------------------------------------

--
-- Table structure for table `badal`
--

CREATE TABLE `badal` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `itenary1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badal`
--

INSERT INTO `badal` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`) VALUES
(1, 'badal haji', '66691b45d3d99.jpg', '6674b30bbe8f7.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Coming Soon'),
(2, 'badal umroh', '66691b57b76fe.jpg', '66691b57b7701.jpg', 'asdasd', 'Coming Soon');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(25) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `image4` varchar(250) NOT NULL,
  `image5` varchar(250) NOT NULL,
  `image6` varchar(250) NOT NULL,
  `image7` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `name`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`) VALUES
(1, 'Firdaus, 12 Hari Group 24 Januari', '6674b75de6f0c_galeri1.png', '6674b782c600c_galeri2.png', '6674b782c60f4_galeri3.png', '6674b782c6191_galeri1.png', '6674b782c621d_galeri2.png', '6674b782c6432_galeri3.png', '6674b782c64e9_galeri1.png'),
(2, 'Firdaus, 11 Hari Group 20 Februri', '6674c01a7eaa7_galeri3.png', '6674b2f4d6b1f.png', '6674b2f4d6cb5.png', '6674b2f4d6dd8.png', '6674b2f4d6f19.png', '6674b2f4d70fa.png', '6674b2f4d71a2.png'),
(3, 'test3', '6674b30bbe7dc.png', '6674b30bbe8f7.png', '6674b30bbeb8c.png', '6674b30bbec44.png', '6674b30bbeced.png', '6674b30bbed74.png', '6674b30bbee11.png');

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
(1, 'Coming Soon', '66691b45d3d99.jpg', '66691b8a77055.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(2, 'Coming Soon', '66691b57b76fe.jpg', '66691b57b7701.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(3, 'Coming Soon', '66691b613d11a.jpg', '66691b613d11d.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(4, 'Coming Soon', '66691b6d20945.jpg', '66691b6d20947.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(5, 'Coming Soon', '66691b7e0145c.jpg', '66691b7e0145e.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(6, 'Coming Soon', '66691b8a77053.jpg', '66691b8a77055.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(25) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `itenary1` varchar(250) NOT NULL,
  `itenary2` varchar(250) NOT NULL,
  `itenary3` varchar(250) NOT NULL,
  `itenary4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`, `itenary2`, `itenary3`, `itenary4`) VALUES
(1, 'home', 'amansalogo.png', 'Asset 1@4x 2.svg', 'Lorem Ipsum Dolore Sijamet is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1', '1', '1', '1'),
(2, 'carousel2', '1', 'PLANE 1.jpeg', '1', '1', '1', '1', '1'),
(3, 'carousel3', '1', 'jumbo.jpeg', '1', '1', '1', '1', '1'),
(4, 'why1', '1', 'Group 66.png', '1', '1', '1', '1', '1'),
(5, 'why2', '1', 'rpl1.sql', 'WblcJtSu8X8?si=LNTb2vPM0_v8PyS0', '1', '1', '1', '1'),
(8, 'youtube1', '1', '1', 'WblcJtSu8X8?si=LNTb2vPM0_v8PyS0', 'WblcJtSu8X8?si=LNTb2vPM0_v8PyS0', '1', '1', '1'),
(9, '', '', '', '', '', '', '', '');

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
(5, 'Umrah Bulan Maulid', 'jumbo.jpeg', '6674b2f4d6b1f.png', 'Bayangkan, kamu selalu berada di sisi Nabi Muhammad ﷺ.. Mengikuti setiap jejak episode perjalanan dakwahnya... Mengikuti setiap momen-momen berharga bersamanya.  Kisah luar biasa perjalanan Nabi kita Nabi Muhammad ﷺ yang penuh cinta dan pengorbanan, siap untuk kami ungkapkan !  Dalam program Umroh Siroh Nabawi 14 September 2024', 'Penerbangan tanpa transit', '3 hari Madinah', '3 Hari Mekkah', 'Gratis wisata Thoif2'),
(6, 'Umroh 13H', '6668a19e1b2db_jul 1.png', 'jul 1.png', 'Bagi anda yang mengingnkan perjalanan ibadah dengan durasi waktu yang lama, sehingga banyak waktu untuk bermunajat di tanah haram, perjalanan 13 hari menjadi pilihan yang tepat.', 'Penerbangan Tanpa Transit', '4 Hari Madinah', '4 Hari Mekkah', 'Gratis Wisata Thoif'),
(7, 'Umroh Plus', '6668a1952d344_aug 1.png', 'aug 1.png', 'Dengan program umrah plus, anda bisa menikmati perjalanan yang menakjubkan. Mulai dari menikmati indahnya ciptaan Allah yang terbentang di Benua Eropa, dilanjutkan dengan khidmatnya perjalanan ibadah di tanah suci.', 'Umroh plus Turkey', 'Umroh plus Eropa Barat', '-', '-'),
(8, 'Coming Soon', '6668b2dade816.jpg', '6668b2dade819.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(9, 'Coming Soon', '6668b2eec6d04.jpg', '6668b2eec6d06.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(10, 'Coming Soon', '6668b2f98c775.jpg', '6668b2f98c778.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, '1', '1'),
(2, '2', '$2y$10$Fi38wt17V7OFjkhBFQVA3uO6qmrOOsnHcpcsUDnYDdKpyE3KSgj22'),
(3, 'admin', '$2y$10$svH1LmXc9poHKYoXlq9vFODViwkZcefrbspgO6SA/5j4hngRnkT8y'),
(4, 'admin1', '$2y$10$euBdU8ezJUQDAmXuJLUJ7e94mr0oJQxh8StmzKTJWMnDs9thUeAoq'),
(5, 'irfan', '$2y$10$kM9Uaxo/cwI5bNJ3Oy6ax.nYbmpn/rDVfE1xnHUowQhhanAkDYQ5C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badal`
--
ALTER TABLE `badal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haji`
--
ALTER TABLE `haji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umroh`
--
ALTER TABLE `umroh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badal`
--
ALTER TABLE `badal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `haji`
--
ALTER TABLE `haji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `umroh`
--
ALTER TABLE `umroh`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
