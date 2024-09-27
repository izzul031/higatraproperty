-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2024 at 04:29 AM
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
-- Database: `higatra`
--

-- --------------------------------------------------------

--
-- Table structure for table `bast`
--

CREATE TABLE `bast` (
  `id` int(11) NOT NULL,
  `id_klien` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bast`
--

INSERT INTO `bast` (`id`, `id_klien`, `gambar`, `deskripsi`) VALUES
(1, 2, 'WhatsApp Image 2024-08-22 at 16.20.16.jpeg', '13 Mei 2024\r\n'),
(5, 1, 'WhatsApp Image 2024-08-22 at 13.38.53 (1).jpeg', '16 Agustus 2024'),
(6, 13, 'WhatsApp Image 2024-08-22 at 14.16.32.jpeg', '15 Juni 2024'),
(7, 16, 'WhatsApp Image 2024-08-22 at 13.38.56 (1).jpeg', '21 Juni 2024'),
(8, 4, 'WhatsApp Image 2024-08-22 at 13.38.56.jpeg', '27 Juni 2024'),
(9, 19, 'WhatsApp Image 2024-08-22 at 13.38.53.jpeg', '21 Agustus 2024'),
(10, 7, 'WhatsApp Image 2024-09-26 at 10.42.44_1ccfb243.jpg', '26 September 2024');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_3d`
--

CREATE TABLE `gambar_3d` (
  `id` int(11) NOT NULL,
  `id_klien` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gambar_3d`
--

INSERT INTO `gambar_3d` (`id`, `id_klien`, `gambar`, `deskripsi`) VALUES
(12, 1, 'RAMPAK PO_1 - Photo.jpg', 'TIPE 80'),
(13, 2, 'new_7 - Photo.jpg', 'TIPE 60'),
(14, 3, 'render merah 620_Photo - 10.jpg', 'TIPE 57'),
(15, 5, '1.jpg', 'TIPE 56'),
(18, 12, 'EXTER_1 - Photo.jpg', 'TIPE 56'),
(19, 4, 'sukmanew_2 - Photo.jpg', 'TIPE 67'),
(20, 7, 'bagus ex_3 - Photo.jpg', 'TIPE 55'),
(21, 10, 'risno ok_1 - Photo.jpg', 'TIPE 75'),
(22, 16, '02_Desain 3D_Ahmad Nuril Fajri.png', '-'),
(23, 8, 'bangkalan_1 - Photo.jpg', 'TIPE 140'),
(24, 18, 'ok_Photo - 1.jpg', 'TIPE 55'),
(25, 14, 'WhatsApp Image 2024-06-19 at 11.54.10.jpeg', 'TIPE 136'),
(26, 15, 'BUSUN HIGATRA1_12 - Photo.jpg', 'TIPE 136'),
(27, 13, 'WhatsApp Image 2024-03-20 at 15.01.11(1).jpeg', 'TIPE 62');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_jadi`
--

CREATE TABLE `hasil_jadi` (
  `id` int(11) NOT NULL,
  `id_klien` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil_jadi`
--

INSERT INTO `hasil_jadi` (`id`, `id_klien`, `gambar`, `deskripsi`) VALUES
(1, 3, 'gambar_3dimg-2.jpg', 'fg'),
(2, 1, 'gambar_3dimg-2.jpg', 'kk'),
(3, 1, 'gambar_3dimg-2.jpg', 'fffffffff'),
(4, 1, 'gambar_3dimg-2.jpg', 'ffffffffffff'),
(5, 1, 'gambar_3dimg-2.jpg', 'bbbbbbbbbbbbb'),
(6, 1, 'gambar_3dimg-2.jpg', 'gggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jabatan`, `gambar`) VALUES
(1, 'Heri ', 'Manajer', 'Desain tanpa judul (1).png'),
(2, 'Magda', 'HRD', 'magda.png'),
(3, 'Olif', 'ADMIN', 'olif.png'),
(4, 'Linda', 'Keuangan', 'linda.png'),
(7, 'Hanif', 'Engineet Estimate', '6.png'),
(8, 'Oyong', 'Drafter', '3.png'),
(9, 'Wahyu', 'Site Supervisor', '2.png'),
(10, 'Alex', 'Site Supervisor', '5.png'),
(11, 'Iril', 'Site Supervisor', '4.png'),
(12, 'Irsyad', 'Logistik', '1.png'),
(13, 'Sugeng', 'Driver', 'WhatsApp Image 2024-09-25 at 14.25.56_26f77d3f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_gambar`
--

CREATE TABLE `layanan_gambar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan_gambar`
--

INSERT INTO `layanan_gambar` (`id`, `gambar`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, '4.png'),
(5, '5.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image_url`) VALUES
(1, 'Semen_Indonesia_logo_(svg).jpg'),
(2, 'pvF2dAPQHpsOnYQoqE54ZQWDmJqGpsMaj5BBIbTp.webp'),
(3, 'unnamed.jpg'),
(4, 'logo-kia-300x143.png'),
(5, 'logo_ina_transparent.png'),
(6, 'Logo Yon Elektrikal-01-01.png'),
(7, 'IMG_20240708_083421.png'),
(8, 'images.png'),
(9, 'images.jpg'),
(10, 'images.jpeg'),
(11, 'Hannochs-Emboss-Glow-scaled.webp');

-- --------------------------------------------------------

--
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `id` int(11) NOT NULL,
  `id_klien` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progres`
--

INSERT INTO `progres` (`id`, `id_klien`, `gambar`, `deskripsi`) VALUES
(1, 1, 'rumah-2.jpg', 'rtttt1'),
(3, 1, 'rumah-2.jpg', 'rrrrrrrrrrrrrr'),
(4, 1, 'rumah-2.jpg', 'rrrrrrrrrrrrrrr'),
(5, 1, 'rumah-2.jpg', 'sssssssssssssssss'),
(6, 1, 'rumah-2.jpg', 'fffffffffffffffff'),
(7, 1, 'rumah-2.jpg', 'fffffffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reasons`
--

INSERT INTO `reasons` (`id`, `icon`, `description`) VALUES
(7, 'agreement (2).png', 'Garansi Resmi 1 Tahun'),
(8, 'agreement (2).png', 'Desain Menyesuaikan'),
(9, 'agreement (2).png', 'Harga Menyesuaikan'),
(10, 'agreement (2).png', 'Pembangunan Terkonsep & Tertata'),
(11, 'agreement (2).png', 'Konsultasi Gratis');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `report_type` enum('bebas1','bebas2') NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `report_type`, `image_url`, `title`) VALUES
(1, 'bebas1', 'img20240903_15304546.jpg', 'Perizinan Berusaha Berbasis Resiko'),
(2, 'bebas2', 'Picture13.jpg', 'Kartu NPWP'),
(3, 'bebas2', 'Picture23.jpg', 'Sertifikat BPJS'),
(4, 'bebas1', 'img20240903_15401564.jpg', 'Surat Keterangan Pendaftaran'),
(5, 'bebas1', 'img20240904_13464478.jpg', 'AKTA'),
(8, 'bebas2', 'Picture33.jpg', 'Sertifikat LPJK Bpk Hanif'),
(9, 'bebas2', 'Picture43.jpg', 'Sertifikat LPJK Bpk Iril');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image_url`, `description`, `description_2`, `link`) VALUES
(1, 'construction (3).png', 'Jasa Bangun', 'Layanan pembangunan rumah, ruko, perkantoran, hingga gedung dengan fokus pada kualitas material dan desain sesuai kebutuhan Anda.', 'detail-layanan.php'),
(2, 'home-repair (2).png', 'Jasa Renovasi', 'Layanan renovasi kami meliputi perbaikan dan perombakan bangunan untuk memenuhi perubahan gaya hidup, kebutuhan ruang, dan estetika terkini.', 'detail-layanan-renovasi.php'),
(3, 'renewal (1).png', 'Eksterior dan Interior', 'Jasa desain interior dan eksterior untuk menciptakan ruang yang harmonis, fungsional, dan estetis, baik untuk hunian maupun bangunan komersial.', 'detail-layanan-interior.php'),
(4, 'house (2).png', 'ff', NULL, NULL),
(8, 'Screenshot 2024-09-09 083648.png', 'ff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_interior`
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
-- Dumping data for table `tb_interior`
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

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `nama`, `profesi`, `deskripsi`, `gambar`) VALUES
(1, 'Tri Wahyuni Romadhani', 'Toko Jakarta', 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Wikipedia\r\n', 'RAMPAK POJOK_11 - Photo.jpg'),
(2, 'Sujono Riyadi', 'WaKepSek SMK 1 Sumenep', 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Wikipedia\r\n', 'testimonial-3.jpg'),
(3, 'Martina Setiawati', 'Guru SMA 1 Sumenep', 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Wikipedia\r\n', 'testimonial-3.jpg'),
(4, 'Sukmawati', 'Apoteker RSI Esto Ebhu', 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Wikipedia\r\n', 'testimonial-3.jpg'),
(5, 'Dewi Ratih', 'Pegawai RSUD', 'lorem\r\n', 'contact-img.jpg'),
(6, 'Kurniawan Yuswardani / Drg. Avila', 'Dokter Gigi', 'lorem', 'contact-img.jpg'),
(7, 'Bagus Bekti Wibowo', 'Polres Sumenep', 'lorem', 'contact-img.jpg'),
(8, 'Sy. Ibrohim', 'Pemilik Toko', 'lorem', 'contact-img.jpg'),
(9, 'Nurul Wahid Huda', 'Polres Sumenep', 'lokre', 'contact-img.jpg'),
(10, 'Risno', 'TKW', 'las', 'contact-img.jpg'),
(11, 'Yulius Sukardiantoro', 'Guru', 'lasd', 'contact-img.jpg'),
(12, 'M. Habibur Rahman', 'Polisi Masalembu', 'asd', 'contact-img.jpg'),
(13, 'R. Brian Adli Angga / Ustad Fatah', 'Pengusaha', 'asda', 'contact-img.jpg'),
(14, 'Yusi Indah Merfandiana', 'Pegawai Bank', 'asda', 'contact-img.jpg'),
(15, 'Sunnatun Hasanah', 'Guru', 'asd', 'contact-img.jpg'),
(16, 'Ahmad Nuril Fajri', 'Polres Sumenep', 'adas', 'contact-img.jpg'),
(17, 'Ahmad Nurul Ramdhani', 'Polres Sumenep', 'adkjakds\r\n', 'contact-img.jpg'),
(18, 'Heriyanto', 'Guru', 'adsas', 'contact-img.jpg'),
(19, 'Rosiyah Yogaiswara', 'Karyawan Swasta', '-', 'contact-img.jpg'),
(20, 'Ferina Wahyurini', 'IRT', '-', 'contact-img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `us_section2`
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
-- Dumping data for table `us_section2`
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
-- Indexes for table `bast`
--
ALTER TABLE `bast`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klien` (`id_klien`);

--
-- Indexes for table `gambar_3d`
--
ALTER TABLE `gambar_3d`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klien` (`id_klien`);

--
-- Indexes for table `hasil_jadi`
--
ALTER TABLE `hasil_jadi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klien` (`id_klien`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_gambar`
--
ALTER TABLE `layanan_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klien` (`id_klien`);

--
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_interior`
--
ALTER TABLE `tb_interior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `us_section2`
--
ALTER TABLE `us_section2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_us_section2_services` (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bast`
--
ALTER TABLE `bast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gambar_3d`
--
ALTER TABLE `gambar_3d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hasil_jadi`
--
ALTER TABLE `hasil_jadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `layanan_gambar`
--
ALTER TABLE `layanan_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `progres`
--
ALTER TABLE `progres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_interior`
--
ALTER TABLE `tb_interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `us_section2`
--
ALTER TABLE `us_section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bast`
--
ALTER TABLE `bast`
  ADD CONSTRAINT `bast_ibfk_1` FOREIGN KEY (`id_klien`) REFERENCES `testimonials` (`id`);

--
-- Constraints for table `gambar_3d`
--
ALTER TABLE `gambar_3d`
  ADD CONSTRAINT `gambar_3d_ibfk_1` FOREIGN KEY (`id_klien`) REFERENCES `testimonials` (`id`);

--
-- Constraints for table `hasil_jadi`
--
ALTER TABLE `hasil_jadi`
  ADD CONSTRAINT `hasil_jadi_ibfk_1` FOREIGN KEY (`id_klien`) REFERENCES `testimonials` (`id`);

--
-- Constraints for table `progres`
--
ALTER TABLE `progres`
  ADD CONSTRAINT `progres_ibfk_1` FOREIGN KEY (`id_klien`) REFERENCES `testimonials` (`id`);

--
-- Constraints for table `us_section2`
--
ALTER TABLE `us_section2`
  ADD CONSTRAINT `fk_us_section2_services` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
