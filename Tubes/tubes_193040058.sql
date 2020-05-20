-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 04:34 PM
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
  `penerbit` varchar(30) NOT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `gambar`, `nama_buku`, `penulis`, `tahun_terbit`, `penerbit`, `deskripsi`, `harga`) VALUES
(1, 'ArcGISToturial.png', 'Toturial ArcGIS', 'Eddy Prahasta', 2019, 'INFORMATIKA', 'Pada buku ini, penulis membahas beberapa bab yang kini menjadi topik-topik utama milik perangkat lunak SIG ArcGIS khususnya ArcMap &amp; ArcCatalog. Analisis spasial (raster, vektor, dan 3-dimensi [DEM]), kosmetik peta &amp; pembuatan layout, query, topology, konsep &amp; implementasi basisdata spasial, model builder, geodatabase, pemrograman (baris-baris kode / script) python, pembuatan toolbox &amp; tool, dan kekayaan fungsionalitas konversi data adalah sebagian dari topik-topik yang dimaksud dimana ArcGIS unggul atas perangkat lunak SIG yang lain.⁣⁣⁣⁣', 107999),
(2, 'jaringanTelekomunikasi.png', 'Jaringan Telekomunikasi', 'Usman, Uke Kurniwan ', 2018, 'LOKOMEDIA', 'Seiring dengan perkembangan dan pemanfaatan Teknologi Jaringan Telekomunikasi, menunjukkan bahwa layanan yang digunakan oleh pengguna layanan telekomunikasi semakin beragam. Salah satunya adalah perkembangan dari teknologi jaringan telekomunikasi, dimulai dari konsep jaringan telekomunikasi memberikan kemudahan melakukan hubungan komunikasi, keragaman layanan serta kecepatan dalam proses pengiriman dan pertukaran data informasi di antara pengguna jaringan telekomunikasi. ⁣⁣', 165000),
(3, 'metodanumerik.png', 'Metoda Numerik', 'Rinaldi Munir', 2019, 'INFORMATIKA', 'Dengan metode numerik kita dapat menemukan solusi persoalan yang selalu dalam bentuk angka. Angka yang dihasilkan sebagai solusi ini pada hakikatnya tidak dalam bentuk solusi sejati atau yang sebenarnya, tetapi dalam bentuk solusi pendekatan atau solusi hampiran (approximation), namun solusi hampiran ini dapat dibuat seteliti mungkin sesuai denqan yang kita inginkan. ⁣\r\n⁣\r\nDi dalam buku ini juga disertakan banyak contoh pengqunaan program komputer untuk menyelesaikan persoalan dengan metode numerik, karena perhitungan dengan tangan biasanya pekerjaan yang menjemukan dan melelahkan mengingat volume perhitungan dalam metode numerik umumnya sangat besar.⁣', 78900),
(4, 'frameworkyii.png', 'Framework Yii', 'Budi Raharjo', 2017, 'INFORMATIKA', 'Yii merupakan salah satu framework PHP berbasis komponen yang digunakan untuk mengembangkan aplikasi web secara mudah dan cepat, baik untuk web personal maupun web berskala enterprise. Sama seperti sebagian besar framework PHP lainnya, Yii juga menerapkan pola desain Model-View-Controller (MVC); yang memisahkan bagian kode untuk keperluan pemodelan struktur data, proses, dan presentasi/tampilan. Dengan pola pemisahan seperti ini, kode di dalam aplikasi menjadi lebih mudah dibaca, dipelihara, dan dikembangkan di kemudian hari.⁣⁣⁣', 99000),
(5, 'PWAtoturial.png', 'Toturial PWA', 'Hendra Santoso', 2019, 'LOKOMEDIA', 'Dalam buku ini dibahas mulai dari Pengenalan dan Dasar-Dasar PWA, Fitur-FItur PWA seperti: Web App Manifest, Service Workers, A2HS, Push Notification, Camera, Speech Recognition, Storage, Payment, Background Sync, Touch Gesture, Geolocation, Single Page Application, dll.⁣⁣⁣', 98000),
(6, 'MatemTeknik.png', 'Teknik Matematika', 'Prof. Dr. Muljono', 2020, 'ANDI', 'Buku Matematika untuk Teknik ini menyajikan topik matematika yang berkaitan dengan ilmu teknik sehingga sangat bermanfaat untuk mahasiswa jurusan teknik, dosen, dan siapa pun yang berkecimpung dalam bidang teknik. Setiap bab yang disajikan dalam buku ini terdapat contoh soal serta latihan soal untuk memberikan pemahaman bagi pembaca.', 56000),
(7, 'EsensiBahsaR.png', 'Esensi Bahasa R', 'Dr. Bambang Hariyant', 2019, 'INFORMATIKA', 'R adalah perkembangan teknologi yang seharusnya telah menjadi alat sehari-hari yang seharusnya menjadi diakrabi oleh knowledge workers Indonesia untuk meningkatkan daya saingnya. Kami, IAII-RightWay Data Science sedang mempunyai gerakan untuk meningkatkan keahlian analytics di knowledge workers Indonesia, melalui serangkaian buku, serangkaian workshop, serangkaian pelatihan, dan serangkaian mata kuliah. Pendekatan yang dilakukan agar mudah adalah template-based-approach yaitu mahasiswa-mahasiswa atau knowledge workers mengikuti template atau pola penyelesaian.⁣⁣', 90999),
(8, 'Koperasisimpanpinjam.png', 'Membuat Aplikasi Simpan Pinjam', 'Bunafit Nugroho', 2017, 'GAVA MEDIA', 'Buku ini akan memandu Anda untuk membangun Software Aplikasi Koperasi Simpan Pinjam secara mandiri, mulai dari NOL, yaitu mulai dari mendesin database dan struktur data yang dibutuhkan dalam Koperasi. Supaya lebi mudah mengikuti panduan, buku ini menggambarkan setiap langkahnya menggunakan editor Dreamweaver', 100000),
(9, 'swarmintelegence.png', 'Swarm Intelligence', 'Dr. Suyanto,S.T.,M.S', 2018, 'INFORMATIKA', 'Buku ini memberi Anda gambaran sederhana bagaimana cara memahami masalah secara benar. ⁣\r\n⁣\r\nKegagalan memahami masalah akan membat Anda salah memilih algoritma yang sesuai dan akan mengalami banyak kesulitan saat mendesain dan membangun sistem big data mining. ⁣\r\n⁣\r\nSelain itu, buku ini akan memandu Anda memahami beragam masalah, dari yang sederhana hingga yang kompleks. ⁣', 100000),
(10, 'belajarfotran.png', 'Belajar Fotran', 'Budi Raharjo', 2017, 'INFORMATIKA', 'Fortran merupakan bahasa pemograman klasik yang sampai saat ini masih sering digunakan oleh para peneliti untuk keperluan riset dan pengembangan program-program yang berkaitan dengan metode numerik, khususnya di bidang matematika, sains, dan teknik; meskipun sebenarnya Fortran juga dapat digunakan untuk mengembangakan program-program di luar keperluan tersebut, sama seperti bahasa bahasa pemograman lain ( C, C++, Java, Phyton, Ruby, dll).⁣', 98000);

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Bandung', 10000),
(2, 'Jakarta', 15000),
(3, 'Jogjakarta', 25000),
(4, 'Surabaya', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat`) VALUES
(1, 1, 1, '2020-05-22', 150000, '', 0, ''),
(3, 3, 2, '2020-05-18', 221999, '', 0, ''),
(4, 3, 2, '2020-05-18', 221999, '', 0, ''),
(5, 3, 4, '2020-05-18', 236999, '', 0, ''),
(6, 3, 3, '2020-05-18', 495999, '', 0, ''),
(7, 3, 1, '2020-05-18', 480999, '', 0, ''),
(8, 3, 0, '2020-05-18', 165000, '', 0, ''),
(9, 3, 0, '2020-05-18', 429000, '', 0, ''),
(10, 3, 0, '2020-05-18', 165000, '', 0, ''),
(11, 4, 3, '2020-05-18', 103900, '', 0, ''),
(12, 4, 4, '2020-05-18', 108900, '', 0, ''),
(13, 4, 1, '2020-05-18', 109000, 'Bandung', 10000, ''),
(14, 4, 1, '2020-05-18', 117999, 'Bandung', 10000, 'jln. babakan-ciwaruga No. sekian Rt. sekian Rw. Sekian'),
(15, 4, 0, '2020-05-18', 165000, '', 0, 'jln. Setiabudhi'),
(16, 4, 0, '2020-05-18', 56000, '', 0, 'bahnbvxhab '),
(17, 4, 0, '2020-05-18', 56000, '', 0, 'xam xma x'),
(18, 4, 0, '2020-05-18', 56000, '', 0, 'nknxma x'),
(19, 4, 0, '2020-05-18', 56000, '', 0, 'bjbhbh'),
(20, 4, 0, '2020-05-18', 56000, '', 0, 'hvgvgbgccf'),
(21, 4, 0, '2020-05-18', 56000, '', 0, 'm mx ma '),
(22, 4, 0, '2020-05-19', 265000, '', 0, 'bxabaxba'),
(23, 4, 0, '2020-05-19', 165000, '', 0, 'jbjabjbxahxahjb'),
(24, 4, 3, '2020-05-19', 462999, 'Jogjakarta', 25000, 'agxvgavggxavggcxafgaxcf'),
(25, 4, 2, '2020-05-20', 508999, 'Jakarta', 15000, 'jln rawamangun'),
(26, 4, 0, '2020-05-20', 165000, '', 0, 'sawah lega'),
(27, 4, 0, '2020-05-20', 272999, '', 0, 'jbaxj'),
(28, 4, 1, '2020-05-20', 108000, 'Bandung', 10000, ''),
(29, 4, 0, '2020-05-20', 165000, '', 0, ''),
(30, 4, 1, '2020-05-20', 175000, 'Bandung', 10000, ''),
(31, 4, 2, '2020-05-20', 114000, 'Jakarta', 15000, ''),
(32, 4, 0, '2020-05-20', 165000, '', 0, ''),
(33, 4, 3, '2020-05-20', 124000, 'Jogjakarta', 25000, 'knkxnkanxkxank'),
(34, 4, 4, '2020-05-20', 216899, 'Surabaya', 30000, 'dlmkmdknkakna'),
(35, 6, 1, '2020-05-20', 117999, 'Bandung', 10000, 'hvggcgcgcgxf'),
(36, 6, 0, '2020-05-20', 107999, '', 0, ''),
(37, 4, 4, '2020-05-20', 130000, 'Surabaya', 30000, 'axknnjkaxnxa');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id`, `jumlah`, `nama_buku`, `harga`, `subharga`) VALUES
(1, 0, 4, 1, '', 0, 0),
(2, 0, 1, 1, '', 0, 0),
(3, 5, 4, 1, '', 0, 0),
(4, 5, 1, 1, '', 0, 0),
(5, 6, 4, 2, '', 0, 0),
(6, 6, 1, 1, '', 0, 0),
(7, 6, 2, 1, '', 0, 0),
(8, 7, 4, 2, '', 0, 0),
(9, 7, 1, 1, '', 0, 0),
(10, 7, 2, 1, '', 0, 0),
(11, 8, 2, 1, '', 0, 0),
(12, 9, 2, 2, '', 0, 0),
(13, 9, 4, 1, '', 0, 0),
(14, 10, 2, 1, '', 0, 0),
(15, 11, 3, 1, '', 0, 0),
(16, 12, 3, 1, 'Metoda Numerik', 78900, 78900),
(17, 13, 4, 1, 'Framework Yii', 99000, 99000),
(18, 14, 1, 1, 'Toturial ArcGIS', 107999, 107999),
(19, 15, 2, 1, 'Jaringan Telekomunikasi', 165000, 165000),
(20, 16, 6, 1, 'Teknik Matematika', 56000, 56000),
(21, 17, 6, 1, 'Teknik Matematika', 56000, 56000),
(22, 18, 6, 1, 'Teknik Matematika', 56000, 56000),
(23, 19, 6, 1, 'Teknik Matematika', 56000, 56000),
(24, 20, 6, 1, 'Teknik Matematika', 56000, 56000),
(25, 21, 6, 1, 'Teknik Matematika', 56000, 56000),
(26, 22, 9, 1, 'Swarm Intelligence', 100000, 100000),
(27, 22, 2, 1, 'Jaringan Telekomunikasi', 165000, 165000),
(28, 23, 2, 1, 'Jaringan Telekomunikasi', 165000, 165000),
(29, 24, 2, 2, 'Jaringan Telekomunikasi', 165000, 330000),
(30, 24, 1, 1, 'Toturial ArcGIS', 107999, 107999),
(31, 25, 2, 2, 'Jaringan Telekomunikasi', 165000, 330000),
(32, 25, 1, 1, 'Toturial ArcGIS', 107999, 107999),
(33, 25, 6, 1, 'Teknik Matematika', 56000, 56000),
(34, 26, 2, 1, 'Jaringan Telekomunikasi', 165000, 165000),
(35, 27, 2, 1, 'Jaringan Telekomunikasi', 165000, 165000),
(36, 27, 1, 1, 'Toturial ArcGIS', 107999, 107999),
(37, 28, 10, 1, 'Belajar Fotran', 98000, 98000),
(38, 29, 2, 1, 'Jaringan Telekomunikasi', 165000, 165000),
(39, 30, 2, 1, 'Jaringan Telekomunikasi', 165000, 165000),
(40, 31, 4, 1, 'Framework Yii', 99000, 99000),
(41, 32, 2, 1, 'Jaringan Telekomunikasi', 165000, 165000),
(42, 33, 4, 1, 'Framework Yii', 99000, 99000),
(43, 34, 1, 1, 'Toturial ArcGIS', 107999, 107999),
(44, 34, 3, 1, 'Metoda Numerik', 78900, 78900),
(45, 35, 1, 1, 'Toturial ArcGIS', 107999, 107999),
(46, 36, 1, 1, 'Toturial ArcGIS', 107999, 107999),
(47, 37, 8, 1, 'Membuat Aplikasi Simpan Pinjam', 100000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `telp`) VALUES
(2, 'bayu', '$2y$10$o1ZOHXbeUhYYpax2cNat0.iiiXLL2T2Imleyy.1h4MmmK1Tsqge2u', 'Bayu Cucan', 'bayucucan36@gmail.com', '08954000675'),
(3, 'bayuc', '$2y$10$rrUEjeAdoZgFWwlSeFKaE.RJeM9eRfJ822tbrmjw7xvEl6rDXQF1G', 'Bayu Cucan', 'bayuc@gmail.com', '081778990002'),
(4, 'admin', '$2y$10$b8/YHtJ.m/h.NJW9PKBoSObDmzLxuI9z6kWNp5sn3l7qLcjDcDNHm', 'Bayu Cucan', 'admin@gmail.com', '021002222812'),
(5, 'username', '$2y$10$vxJjoXe.LI/xl3bOBDbmPezLEyD2BNcoZYcH4rpuIZUWW.euv/WQC', 'ujangcoba', 'zgnsyvmaxpzimxwbkg@awdrt.org', '089564555789'),
(6, 'jajang', '$2y$10$zE.FPptj.SyT.JIVONVbAOh/mU4kZY8K91/YhowaKVchdyKLjPX8y', 'jajang sunaedi', 'jajang@yahoo.com', '0895646754');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
