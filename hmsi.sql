-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 10:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_hmsi`
--

CREATE TABLE `admin_hmsi` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_hmsi`
--

INSERT INTO `admin_hmsi` (`id`, `username`, `nama_lengkap`, `Email`, `password`) VALUES
(1, 'dhemol', 'Dede Maulana', 'dhemol@hotmail.com', 'dede'),
(6, 'admin', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `gambar_berita` varchar(100) NOT NULL,
  `headnews` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `pic_berita` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `created_time` time NOT NULL,
  `modified_date` date NOT NULL,
  `event_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `gambar_berita`, `headnews`, `isi_berita`, `pic_berita`, `created_date`, `created_time`, `modified_date`, `event_date`) VALUES
(1, 1, '../gambar/WhatsApp Image 2021-06-26 at 4.01.41 PM.jpeg', 'PELANTIKAN ANGGOTA HIMA SI (HMSI) PERIODE 2021/2022 OLEH REKTOR UNIVERSITAS PAMULANG', '<b>TANGERANG SELATAN, UNPAM</b>, DEDE MAULANA ADALAH KEMBARAN JUSTIN BIEBER YANG LAHIR PADA TANGGAL 01 JUNI 1997 DI BOGOR, JAWA BARAT INDONESIA\r\n\r\nKABARNYA SEKARANG BELIAU TINGGAL DI CALIFORNIA, USA\r\n\r\nDAN BELIAU HIDUP BAHAGIA BERSAMA PASANGANNYA', 'Dede Maulana', '2021-03-25', '14:43:23', '0000-00-00', NULL),
(2, 1, '../gambar/WhatsApp Image 2021-06-26 at 4.02.14 PM.jpeg', 'OPEN RECRUITMENT HIMPUNAN MAHASISWA SISTEM INFORMASI UNIVERSITAS PAMULANG PERIODE 2021/2022', 'DEDE', 'Dede Maulana', '2021-03-26', '16:17:21', '0000-00-00', NULL),
(3, 1, '../gambar/WhatsApp Image 2021-06-26 at 4.02.51 PM.jpeg', '(INFO) PENERIMAAN MAHASISWA BARU PROGRAM STUDI SISTEM INFORMASI UNIVERSITAS PAMULANG', 'DEDE', 'Dede Maulana', '2021-03-31', '21:20:05', '0000-00-00', NULL),
(4, 4, '../gambar/WhatsApp Image 2021-06-26 at 4.03.25 PM.jpeg', 'BERBAGI DI BULAN YANG SUCI BERSAMA HMSI MELALUI BERDONASI DALAM KEGIATAN SANTUNAN ANAK YATIM ', 'DEDE', 'Dede Maulana', '2021-04-03', '17:21:28', '2021-04-26', NULL),
(5, 1, '../gambar/WhatsApp Image 2021-06-26 at 14.48.15.jpeg', 'HMSI UNPAM MENDUKUNG PENUH PROGRAM PEMERINTAH DENGAN PROGRAM PERTUKARAN MAHASISWA SISWA MERDEKA', 'DHEMOL KEREN', 'Dede Maulana', '2021-06-26', '10:20:22', '2021-06-26', NULL),
(6, 1, '../gambar/WhatsApp Image 2021-06-26 at 14.49.59.jpeg', 'HMSI UNPAM MENDUKUNG PENUH PROGRAM PEMERINTAH DENGAN PROGRAM KAMPUS MENGAJAR', 'dedede', 'Dede Maulana', '2021-06-26', '10:20:22', '2021-06-26', NULL),
(7, 1, '../gambar/WhatsApp Image 2021-06-26 at 3.59.12 PM.jpeg', 'LOMBA DESIGN LOGO YAYASAN SASMITA JAYA & UNIVERSITAS SOETOMO, HMSI UNPAM BERKONTRIBUSI DALAM LOMBA D', 'xsx', 'Dede Maulana', '2021-06-26', '10:20:22', '2021-06-26', '2021-07-16 19:58:00'),
(9, 1, '../gambar/DEZL6502.JPG', 'HIMPUNAN MAHASISWA SISTEM INFORMASI INGIN MENGADAKAN SEMINAR KEAMANAN KOMPUTER', 'csxcs', 'Dede Maulana', '2021-06-28', '00:00:00', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Apa itu HMSI UNPAM?', 'HMSI UNPAM adalah singkatan dari Himpunan Mahasiswa Sistem Informasi Universitas Pamulang yang merupakan Organisasi Kemahasiswaan yang menaungi aspirasi mahasiswa SI diberbagai bidang, baik yang bersifat akademik maupun nonakademik.'),
(2, 'Siapa saja yang ada di HMSI UNPAM?', 'Seluruh mahasiswa Sistem Informasi Universitas Pamulang yang terbagi menjadi dua, yaitu:\r\n<b>MAHASISWA AKTIF & MAHASISWA PASIF</b>\r\n<blockquote> <i class=\"fa fa-quote-left\"></i> <b>MAHASISWA AKTIF</b> adalah Mahasiswa Sistem Informasi Universitas Pamulang yang mengikuti seluruh rangkaian proses menjadi anggota resmi HMSI UNPAM. \r\n<br>\r\n<b>MAHASISWA PASIF</b> adalah Mahasiswa Sistem Informasi Universitas Pamulang yang tidak menjadi anggota resmi HMSI UNPAM.\r\n</blockquote>'),
(3, 'Bagaimana cara bergabung di HMSI UNPAM?', 'Kalian yang khususnya mahasiswa SI dapat langsung mendaftarkan diri kalian dengan mengisi Google Form dengan link berikut ini :\r\n<ul class=\"categor-list\">\r\n<li><a href=\"https://page.co.id/hmsiunpam\"><b>\"PENDAFTARAN ANGGOTA HMSI UNPAM\"</b></a></li>'),
(4, 'Apa saja keuntungan menjadi anggota resmi HMSI UNPAM?', '<b>PASTINYA BANYAK SEKALI</b>, Selain dapat belajar mengenai dunia teknologi lainnya, HMSI UNPAM juga memberikan dampak yang luar biasa untuk pengalaman dalam belajar berorganisasi, meningkatkan kemampuan public speaking, leadership, kewirausahaan dan lain - lain.');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id` int(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id`, `nama_lengkap`, `subject`, `email`, `no_hp`, `pesan`) VALUES
(1, 'Wildan Kemal', 'Wildan Jelek', 'wildankemal@gmail.com', '082189992899', 'Dhemol keren banget sumpah'),
(2, 'Syahwafaa Andaruni', 'Wafa jelek', 'syahwafaa@gmail.com', '089666229988', 'Dhemol keren banget sumpah'),
(3, 'Muhammad Azizan', 'Webnya bagus', 'muhammadazizan@gmail.com', '085155575557', 'Keren banget webnya');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` int(5) NOT NULL,
  `Nama_kategori` varchar(30) NOT NULL,
  `aktif_kategori` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `Nama_kategori`, `aktif_kategori`) VALUES
(1, 'Umum', 'Y'),
(2, 'Beasiswa', 'Y'),
(3, 'Lomba', 'Y'),
(4, 'PKM', 'Y'),
(5, 'Seminar', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(5) NOT NULL,
  `isi_profil` text NOT NULL,
  `img_profil` varchar(100) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `isi_profil`, `img_profil`, `modified_date`) VALUES
(1, 'VISI & MISI', '../gambar/visimisi.png', '2021-05-02'),
(2, 'STRUKTUR ORGANISASI HMSI UNPAM PERIODE 2021/2022', '../gambar/strukturorg.png', '2021-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'Dhemol Keren', 'Dede', '2021-04-27 18:11:49'),
(2, 1, 'Bacot', 'Wafa', '2021-04-27 18:12:07'),
(31, 0, 'Bima jelek', 'Bimantara', '2021-04-28 16:41:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_hmsi`
--
ALTER TABLE `admin_hmsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_hmsi`
--
ALTER TABLE `admin_hmsi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_berita` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
