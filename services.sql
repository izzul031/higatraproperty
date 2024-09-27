-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2024 pada 04.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

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
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description_2` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `image_url`, `description`, `description_2`, `link`) VALUES
(1, 'construction (3).png', 'Jasa Bangun', 'Layanan pembangunan rumah, ruko, perkantoran, hingga gedung dengan fokus pada kualitas material dan desain sesuai kebutuhan Anda.', 'detail-layanan.php'),
(2, 'home-repair (2).png', 'Jasa Renovasi', 'Layanan renovasi kami meliputi perbaikan dan perombakan bangunan untuk memenuhi perubahan gaya hidup, kebutuhan ruang, dan estetika terkini.', 'detail-layanan-renovasi.php'),
(3, 'renewal (1).png', 'Eksterior dan Interior', 'Jasa desain interior dan eksterior untuk menciptakan ruang yang harmonis, fungsional, dan estetis, baik untuk hunian maupun bangunan komersial.', 'detail-layanan-interior.php'),
(4, 'house (2).png', 'ff', NULL, NULL),
(8, 'Screenshot 2024-09-09 083648.png', 'ff', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
