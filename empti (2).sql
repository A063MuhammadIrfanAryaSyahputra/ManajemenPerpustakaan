-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2024 at 03:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empti`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badal`
--

INSERT INTO `badal` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`) VALUES
(1, 'Badal Haji', 'BADAL HAJI.jpeg', 'BADAL HAJI.jpeg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Coming Soon'),
(2, 'Badal Umroh', 'BADAL UMROH.jpeg', 'BADAL UMROH.jpeg', 'Hadiahkan Pahala Umrah Senilai Haji bersama Rasulullah 🕋  Ramadhan merupakan bulan berlimpah pahala. Selain puasa, amalan-amalan yang dilakukan di Bulan Ramadhan akan dilipatgandakan pahalanya.  Mari hadiahkan pahala Badal Umroh untuk orang tua/keluarga yang Kita sayangi di Bulan Ramadhan 1443 H ini.  Jika Ramadhan tiba, berumrahlah saat itu. Karena Umrah Ramadhan senilai dengan haji (HR. Bukhari No.1782 dan Muslim)  InsyaAllah, amanah Anda diberikan kepada para Asatidz Muthowwif kami yang tentunya faham Ilmu agama dan terpercaya.  Pelaksanaan Badal Umrah dilakukan hampir setiap harinya, sudah lebih dari 100 Anggota Keluarga yang kami Badalkan Umrahnya.', 'Coming Soon');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `name`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`) VALUES
(1, 'Firdaus, 12 Hari Group 24 Januarii', '6674b75de6f0c_galeri1.png', '6674b782c600c_galeri2.png', '6674b782c60f4_galeri3.png', '6674b782c6191_galeri1.png', '6674b782c621d_galeri2.png', '6674b782c6432_galeri3.png', '6674b782c64e9_galeri1.png'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `haji`
--

INSERT INTO `haji` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`, `itenary2`, `itenary3`, `itenary4`) VALUES
(1, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(2, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(3, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(4, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(5, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(6, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon');

-- --------------------------------------------------------

--
-- Table structure for table `hajiKhusus`
--

CREATE TABLE `hajiKhusus` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `itenary1` varchar(250) NOT NULL,
  `itenary2` varchar(250) NOT NULL,
  `itenary3` varchar(250) NOT NULL,
  `itenary4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hajiKhusus`
--

INSERT INTO `hajiKhusus` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`, `itenary2`, `itenary3`, `itenary4`) VALUES
(1, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(2, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(3, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(4, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(5, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon'),
(6, 'Coming Soon', 'Coming Soon.jpg', 'Coming Soon.jpg', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon', 'Coming Soon');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`, `itenary2`, `itenary3`, `itenary4`) VALUES
(1, 'Logo Amansa', 'amansalogo.png', 'Asset 1@4x 2.svg', 'Umroh dan Haji merupakan sebuah proses menuju kesempurnaan tauhid, oleh karena itu Makkah Al Mukaromah dan Madinah Al Munawarah merpuakan suatu dambaan bagi setiap muslim dan muslimat. Didukung oleh program perjalanan yang dikemas berupa paket, kami mengajak Bapak dan Ibu berkunjung ke tanah suci dalam rangka menunaikan ibadah umroh dan haji untuk meriah kesempurnaan ibadah. Selamat ! Selangkah lagi Anda akan tiba di Tanah Suci untuk berumroh, bersama kami Amansa, biro perjalaan umroh yang akan memberikan experience paling berkesan tak terlupakan dengan layanan eksklusif serta bimbingan umroh sesuai sunnah Nabi', '1', '1', '1', '1'),
(4, 'Mengapa Amansa?', '1', 'Mengaoa.png', '1', '1', '1', '1', '1'),
(5, 'Testimonial 1', 'testi1.png', 'TESTIMONI 1.jpeg', 'Testimonial 1', '1', '1', '1', '1'),
(6, 'Testimonial 2', '1', 'TESTIMONI 2.jpeg', 'Testimonial 2', '1', '1', '1', '1'),
(7, 'Testimonial 3', '', 'TESTIMONI 3.jpeg', 'Testimonial 3', '1', '1', '1', '1'),
(8, 'Testimonial 4', '', 'TESTIMONI 4.jpeg', 'Testimonial 4', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kemitraan`
--

CREATE TABLE `kemitraan` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `itenary1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kemitraan`
--

INSERT INTO `kemitraan` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`) VALUES
(1, 'Kemitraan', 'MITRA.jpeg', 'Coming Soon.jpg', 'amansaumroh Pendaftaran Mitra Amansa Batch 2 Menjadi agen kebaikan adalah suatu pilihan yang harus kita tunaikan. Sebab ada keutamaan yang akan kita dapatkan..  Salah satu diantara kebaikan itu adalah merekomendasikan Travel Haji dan Umroh yang sesuai Sunnah & Tuntunan Nabi kepada setiap insan yang memiliki keinginan beribadah ke tanah suci  Selain dapat pahala kebaikan, anda juga akan dapat banyak benefitnya.  Berniat bergabung menjadi Mitra dan Agen Kebaikan Amansa? segera daftar dan raih keuntungannya sekarang', 'Coming Soon');

-- --------------------------------------------------------

--
-- Table structure for table `tabura`
--

CREATE TABLE `tabura` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL,
  `itenary1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabura`
--

INSERT INTO `tabura` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`) VALUES
(1, 'Tabungan Umroh', 'TABURA.jpeg', 'Coming Soon.jpg', 'Ada Yang Spesial Untuk Anda Karena Selama Ada Niat, Selalu Ada Jalan  Punya keinginan ibadah umroh tapi masih bingung buat ngumpulin dananya? Atau sudah mengumpulkan tapi entah kemana itu dana terpakai begitu saja.  Yuk bergabung bersama kami, ikuti program Tabungan Umroh Terencana hasil kolaborasi Amansa X Bank Muamalat  Alasan mengapa Anda harus memilih Tabura : 1. Aman penyimpanan dananya 2. Transparan pengelolaannya 3. Mudah dan ringan cicilannya 4. InsyaAllah pasti berangkat', 'Coming Soon');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umroh`
--

INSERT INTO `umroh` (`id`, `nama`, `image`, `cover`, `deskripsi`, `itenary1`, `itenary2`, `itenary3`, `itenary4`) VALUES
(5, 'Umrah Bulan Maulid', 'Umroh Maulid.png', 'Umroh Maulid.png', 'Bayangkan, kamu selalu berada di sisi Nabi Muhammad ﷺ.. Mengikuti setiap jejak episode perjalanan dakwahnya... Mengikuti setiap momen-momen berharga bersamanya.  Kisah luar biasa perjalanan Nabi kita Nabi Muhammad ﷺ yang penuh cinta dan pengorbanan, siap untuk kami ungkapkan !  Dalam program Umroh Siroh Nabawi 14 September 2024', 'Penerbangan tanpa transit', '3 hari Madinah', '3 Hari Mekkah', 'Gratis wisata Thoif'),
(6, 'Umroh 15H', 'Umroh Awal Musim.png', 'Umroh Awal Musim.png', 'Bagi anda yang mengingnkan perjalanan ibadah dengan durasi waktu yang lama, sehingga banyak waktu untuk bermunajat di tanah haram, perjalanan 13 hari menjadi pilihan yang tepat.', 'Penerbangan Tanpa Transit', '4 Hari Madinah', '4 Hari Mekkah', 'Gratis Wisata Thoif'),
(7, 'Umroh Kemerdekaan', 'Umroh Kemerdekaan.png', 'Umroh Kemerdekaan.png', 'Dengan program umrah plus, anda bisa menikmati perjalanan yang menakjubkan. Mulai dari menikmati indahnya ciptaan Allah yang terbentang di Benua Eropa, dilanjutkan dengan khidmatnya perjalanan ibadah di tanah suci.', 'Umroh plus Turkey', 'Umroh plus Eropa Barat', '-', '-'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, '1', '1'),
(2, '2', '$2y$10$Fi38wt17V7OFjkhBFQVA3uO6qmrOOsnHcpcsUDnYDdKpyE3KSgj22'),
(3, 'admin', '$2y$10$svH1LmXc9poHKYoXlq9vFODViwkZcefrbspgO6SA/5j4hngRnkT8y'),
(4, 'admin1', '$2y$10$euBdU8ezJUQDAmXuJLUJ7e94mr0oJQxh8StmzKTJWMnDs9thUeAoq'),
(5, 'irfan', '$2y$10$kM9Uaxo/cwI5bNJ3Oy6ax.nYbmpn/rDVfE1xnHUowQhhanAkDYQ5C'),
(6, 'Ujang', '$2y$10$pTSpRt7A6WWnjiJ7fRRIyerbaQCWXC7mcfsJ6a3CaoKv8BRn26RVq');

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
-- Indexes for table `hajiKhusus`
--
ALTER TABLE `hajiKhusus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kemitraan`
--
ALTER TABLE `kemitraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabura`
--
ALTER TABLE `tabura`
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
-- AUTO_INCREMENT for table `hajiKhusus`
--
ALTER TABLE `hajiKhusus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kemitraan`
--
ALTER TABLE `kemitraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabura`
--
ALTER TABLE `tabura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `umroh`
--
ALTER TABLE `umroh`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
