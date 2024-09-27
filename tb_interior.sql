-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2024 pada 03.58
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
-- Struktur dari tabel `tb_interior`
--

CREATE TABLE `tb_interior` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `nomor_whatsapp` varchar(20) DEFAULT NULL,
  `pesan_otomatis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_interior`
--

INSERT INTO `tb_interior` (`id`, `category`, `type`, `harga`, `fasilitas`, `nomor_whatsapp`, `pesan_otomatis`) VALUES
(3, 'Interior', 'Hemat', '46 jt', 'Kitchen Set,Lemari Partisi,Backdrop TV', '+6285336458889', 'Saya ingin pesan '),
(4, 'Eksterior', 'Hemat', '19 jt', 'Pagar Minimalis,Pintu Minimalis', '087729791118	', 'yy'),
(5, 'Interior', 'Standar', '54 jt', 'Kitchen Set,Lemari Partisiu,Backdrop TV,Meja Minibar,Wall panel Gypsum', '087729791118	', 'Saya ingin pesan'),
(6, 'Eksterior', 'Standar', '29,5 jt', 'Pagar Minimalis,Pintu Minimalis,Kanopi', '087729791118', 'Saya ingin pesan '),
(7, 'Interior', 'Deluxe', '63 jt', 'Kitchen Set,Lemari Partisiu,Backdrop TV,Meja Minibar,Wall panel PVC,Waredrop', '087729791118', 'Saya ingin pesan'),
(8, 'Eksterior', 'Deluxe', '33 jt', 'Pagar Cutting,Pintu Pagar Cutting,Kanopi + Plafond Kalsiboard', '087729791118', 'Saya ingin pesan '),
(9, 'Interior', 'Luxury', '75,5 jt', 'Kitchen Set + Rak Lemari Es,Lemari Partisi,Backdrop TV,Meja Minibar,Wall panel PVC,Waredrop,Plavon PVC', '087729791118', 'Saya ingin pesan'),
(10, 'Eksterior', 'Luxury', '42 jt', 'Pagar Cutting,Pintu Pagar Cutting,Kanopi + Plavond PVC', '087729791118', 'Saya ingin pesan ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_interior`
--
ALTER TABLE `tb_interior`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_interior`
--
ALTER TABLE `tb_interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
