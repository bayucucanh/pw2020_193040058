-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 04:35 PM
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
-- Database: `pw_193040058`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Bayu Cucan', '193040058', 'bayucucan36@gmail.com', 'Teknik Informatika', 'bayucucan.jpg'),
(2, 'Herlan', '193040052', 'herlan@gmail.com', 'Teknik Industri', 'herlan.jpg'),
(3, 'Adinda Fadhil', '193040050', 'dida@gmail.com', 'Teknik Mesin', 'dida.jpg'),
(4, 'Aji', '193040042', 'aji@gmail.com', 'Teknik pangan', 'aji.jpg'),
(5, 'Angga', '193040070', 'Angga@gmail.com', 'Teknik Informatika', 'angga.jpg'),
(6, 'Sahid Jafar', '193040056', 'Sahid@gmail.com', 'Teknik Mesin', 'sahid.jpg'),
(8, 'Agam', '150303000', 'agam@gmail.com', 'Ekonomi', 'agam.jpg'),
(14, 'ujangcoba', '19329IE', 'zgnsyvmaxpzimxwbkg@awdrt.org', 'Hukum Rimba', '5ebd5ec4b9b3c.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$RoFRdIj2wPWnU90z8XTfv.TllCAIa27OY/jFsgDFitCe9lB72t1/S'),
(4, 'admin', '$2y$10$QjZh5R4CWbvm.IW.pmKWzeltTjizQI0xVM9YeyUKrfDsvojinzd2e'),
(5, 'bayucucan36', '$2y$10$NYD3TwnT/nik3ZSMHHWvdOicIpAWHeUrQMycAyxgXedX0V7J4RkmK'),
(6, 'bayuc', '$2y$10$G3J8S80.ZmAksOSIlJOUS.sraekMV1eUlBTyurXc4IYPXZryDO3xW'),
(7, 'admin1', '$2y$10$01I3RjKD.6UK/TBEvrev4ezOdroEurLGR9aRvsOBj9Q.F0kHNgJce');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
