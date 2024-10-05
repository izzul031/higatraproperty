-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2024 pada 04.10
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
-- Struktur dari tabel `legalitas`
--

CREATE TABLE `legalitas` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_type` enum('landscape','portrait') DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `legalitas`
--

INSERT INTO `legalitas` (`id`, `image_name`, `image_type`, `image_path`) VALUES
(5, 'potret1.jpg', 'portrait', '../../images/Legalitas/potret1.jpg'),
(6, 'Picture13.jpg', 'landscape', '../../images/Legalitas/Picture13.jpg'),
(7, 'Picture23.jpg', 'landscape', '../../images/Legalitas/Picture23.jpg'),
(12, 'potret3.jpg', 'portrait', '../../images/Legalitas/potret3.jpg'),
(13, 'Picture33.jpg', 'landscape', '../../images/Legalitas/Picture33.jpg'),
(14, 'Picture43.jpg', 'landscape', '../../images/Legalitas/Picture43.jpg'),
(15, 'potret2.jpg', 'portrait', '../../images/Legalitas/potret2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `legalitas`
--
ALTER TABLE `legalitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `legalitas`
--
ALTER TABLE `legalitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
