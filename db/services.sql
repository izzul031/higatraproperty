-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 10:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `higatra`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description_2` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image_url`, `description`, `description_2`, `link`) VALUES
(1, 'construction (4).png', 'Jasa Bangun', 'Layanan pembangunan rumah, ruko, perkantoran, hingga gedung dengan fokus pada kualitas material dan desain sesuai kebutuhan Anda.', 'detail-layanan.php'),
(2, 'house (5).png', 'Jasa Renovasi', 'Layanan renovasi kami meliputi perbaikan dan perombakan bangunan untuk memenuhi perubahan gaya hidup, kebutuhan ruang, dan estetika terkini.', 'detail-layanan-renovasi.php'),
(3, 'renewal (3).png', 'Eksterior dan Interior', 'Jasa desain interior dan eksterior untuk menciptakan ruang yang harmonis, fungsional, dan estetis, baik untuk hunian maupun bangunan komersial.', 'detail-layanan-interior.php'),
(4, 'house (3).png', 'Fasilitas dan Majemen Perumahan', 'Mengelola perumahan dan fasilitas secara profesional untuk menjaga kenyamanan dan keamanan lingkungan.', ''),
(8, 'brand-identity (4).png', 'Branding dan Pemasaran', 'Layanan branding dan pemasaran properti untuk membantu Anda menjual atau memasarkan rumah dengan strategi yang efektif.', ''),
(11, 'document (1).png', 'Jasa Notaris dan PPAT', 'Layanan pengurusan dokumen transaksi properti, termasuk jual beli, pajak, dan balik nama sertifikat, dengan cepat dan aman.\r\n', ''),
(12, 'watering-can.png', 'Vertical Garden', 'Menawarkan solusi vertikal garden untuk mempercantik hunian dengan area hijau yang asri dan estetis, baik indoor maupun outdoor.', ''),
(13, 'gardening (2).png', 'Perawatan Taman', 'Layanan ini mencakup perawatan taman dan area hijau secara berkala untuk menjaga keindahan dan kesehatan yang tahan lama.', ''),
(14, 'renovation (4).png', 'Perawatan Gedung', 'Layanan perawatan gedung meliputi perawatan struktural, teknis, dan kebersihan untuk menjaga bangunan dalam kondisi optimal.', ''),
(15, 'home-repair (7).png', 'Garansi Pekerjaan', 'Semua pekerjaan kami dilindungi garansi sesuai perjanjian, sebagai komitmen terhadap kualitas dan kepuasan klien.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
