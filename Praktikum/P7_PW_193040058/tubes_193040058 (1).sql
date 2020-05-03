-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 04:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040058`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(3) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `nama_buku` varchar(30) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `gambar`, `nama_buku`, `penulis`, `tahun_terbit`, `penerbit`) VALUES
(1, 'ArcGISToturial.jpg', 'Toturial ArcGIS', 'Eddy Prahasta', 2019, 'INFORMATIKA'),
(2, 'jaringanTelekomunikasi.jpg', 'Jaringan Telekomunikasi', 'Usman, Uke Kurniwan ', 2018, 'LOKOMEDIA'),
(3, 'metodanumerik.jpg', 'Metoda Numerik', 'Rinaldi Munir', 2019, 'INFORMATIKA'),
(4, 'frameworkyii.jpg', 'Framework Yii', 'Budi Raharjo', 2017, 'INFORMATIKA'),
(5, 'PWAtoturial.jpg', 'Toturial PWA', 'Hendra Santoso', 2019, 'LOKOMEDIA'),
(6, 'MatemTeknik.jpg', 'Teknik Matematika', 'Prof. Dr. Muljono', 2020, 'ANDI'),
(7, 'EsensiBahsaR.jpg', 'Esensi Bahasa R', 'Dr. Bambang Hariyant', 2019, 'INFORMATIKA'),
(8, 'Koperasisimpanpinjam.jpg', 'Membuat Aplikasi Simpan Pinjam', 'Bunafit Nugroho', 2017, 'GAVA MEDIA'),
(9, 'swarmintelegence.jpg', 'Swarm Intelligence', 'Dr. Suyanto,S.T.,M.S', 2018, 'INFORMATIKA'),
(10, 'belajarfotran.jpg', 'Belajar Fotran', 'Budi Raharjo', 2017, 'INFORMATIKA'),
(12, 'mantul', 'aye', 'oaewa', 1883, 'kabeh'),
(14, 'bjxbahbx', 'dobleh', 'xan akn', 1990, 'dobleh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
