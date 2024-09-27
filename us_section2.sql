-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2024 pada 03.57
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
-- Struktur dari tabel `us_section2`
--

CREATE TABLE `us_section2` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `nomor_whatsapp` varchar(20) DEFAULT NULL,
  `pesan_otomatis` varchar(255) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `us_section2`
--

INSERT INTO `us_section2` (`id`, `type`, `harga`, `fasilitas`, `nomor_whatsapp`, `pesan_otomatis`, `service_id`) VALUES
(2, 'Type 42', '168 jt', '2 Kamar Tidur,1 Kamar Mandi,Ruang Tamu,Ruang Keluarga,Full Pasir Hitam,Lantai Granit/Kramik,Kusen Jati,Kloset Duduk atau Jongkok', '+6287729791118', 'Saya mau pesen', 1),
(3, 'Type 49', '196 jt', '2 Kamar Tidur,2 Kamar Mandi,Ruang Tamu,Ruang Keluarga,Full Pasir Hitam,Lantai Granit/Kramik,Kusen Jati,Kloset Duduk atau Jongkok', '+6287849880465', '', 1),
(4, 'Type 56', '224 jt', '2 Kamar Tidur,2 Kamar Mandi,Ruang Tamu,Ruang Keluarga,Full Pasir Hitam,Lantai Granit/Kramik,Kusen Jati,Kloset Duduk atau Jongkok', '087729791118', 'Saya mau pesen', 1),
(5, 'Type 70', '280 jt', '3 Kamar Tidur,2 Kamar Mandi,Ruang Tamu,Ruang Keluarga,Full Pasir Hitam,Lantai Granit/Kramik,Kusen Jati,Kloset Duduk atau Jongkok', '087729791118', 'Saya mau pesen', 1),
(9, 'Interior | Hemat', '46 jt', 'Kitchen Set,Lemari Partisi,Backdrop TV', '087849880465', 'Saya mau pesen', 3),
(10, 'Eksterior | Hemat', '19 jt', '1 Pagar Minimalis,2 Pintu Minimalis', '087849880465', 'hai', 3),
(11, 'Interior | Standar', '54 jt', 'Kitchen Set,Lemari Partisiu,Backdrop TV,Meja Minibar,Wall Panel Gypsum', '087849880465', 'hai', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `us_section2`
--
ALTER TABLE `us_section2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_us_section2_services` (`service_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `us_section2`
--
ALTER TABLE `us_section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `us_section2`
--
ALTER TABLE `us_section2`
  ADD CONSTRAINT `fk_us_section2_services` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
