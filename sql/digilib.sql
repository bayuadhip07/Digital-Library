-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 05:26 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digilib`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(3, 'Kristen'),
(4, 'Katolik'),
(5, 'Hindu'),
(6, 'Buddha'),
(7, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `univ` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `agama`, `jk`, `univ`, `fakultas`, `prodi`, `nim`, `foto`, `alamat`, `status`, `id_user`) VALUES
(15, 'Bayu Adhi Pamungkas', '1', '1', '1', '1', '1', '1710631170067', 'Bayu_Adhi_Pamungkas.png', 'Kebumen', 'Aktif', 32);

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('gilpo1ujlbe9184bp2vgi67tfps0vajn', '::1', 1588252044, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235323034343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323336393936223b6c6173745f636865636b7c693a313538383234383931343b),
('2ma46cu02aq1n0muh5bijk7u488eie92', '::1', 1588252234, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235323233343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('i09n1mlu0552vberlrneau7r822hr6sh', '::1', 1588252600, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235323630303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('i41sf20qq2c1luitsn1et4nkmoc7fpmc', '::1', 1588252913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235323931333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('gl16ecqhnlog6vkhojdlu6loifblaoc6', '::1', 1588253233, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235333233333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('nfu5p0j2qcsmigjf53no22cl0i0h861e', '::1', 1588253653, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235333635333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('ktmn3qkih4pufj8djo8upsu836sup6de', '::1', 1588253989, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235333938393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('1vmq230jp6b032n0c3lcr85l16a61eq5', '::1', 1588254308, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235343330383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('ipugkfoubj1g2iuu6io29ba57o7qeirc', '::1', 1588254620, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235343632303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('mdpguv8e5moook7qkt4lshusq3ucpj47', '::1', 1588254921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235343932313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b6d73677c733a32323a224461746120626572686173696c20646968617075732e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('dpcddgvagsk4o7tt7t0full4r3negkoe', '::1', 1588255238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235353233383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('bn12o7hqm02hr7flrf9t7upcabqso8s7', '::1', 1588255563, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235353536333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('n7lcmicanll9kobqluqpmqm9cos9fbj7', '::1', 1588255884, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235353838343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('0nf18aosmhj62o0qtsuvr71l79lb8eah', '::1', 1588256267, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235363236373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('olbkjlorj13slca0pjl0atvg93vm4m4o', '::1', 1588256570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235363537303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('hp86smbmkrabgccmdhc5f0v4p07h30hp', '::1', 1588256917, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235363931373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('bi6rliofqg1pcl8mluhepmhpcsqooemj', '::1', 1588257246, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235373234363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('rntmahh8c6phpjheupmjijsni906nfj6', '::1', 1588259006, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235393030363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353838323438393134223b6c6173745f636865636b7c693a313538383235323233333b),
('4l7r5e0o6a7mgn4b81g908oefguaubtq', '::1', 1588259559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235393535393b),
('bia596ql3m4388d6nc1v087uuq14a1ep', '::1', 1588259907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383235393930373b),
('hu0rujlp82mot2bp65ej6g8kurue3296', '::1', 1588260210, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383236303231303b),
('gjersi76n09qi5i2oqsojvlpg6itffl0', '::1', 1588260309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383236303330393b6964656e746974797c733a32313a22626179756164686970303140676d61696c2e636f6d223b656d61696c7c733a32313a22626179756164686970303140676d61696c2e636f6d223b757365725f69647c733a323a223332223b6f6c645f6c6173745f6c6f67696e7c4e3b6c6173745f636865636b7c693a313538383236303330393b),
('kpdo9fij477psnotts66m84kaa9477re', '::1', 1588260386, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538383236303338363b);

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `penulis` varchar(300) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id_buku`, `judul`, `penulis`, `tahun`, `penerbit`, `kota`, `email`, `sinopsis`, `file`) VALUES
(7, 'Buku Sakti Hacker', 'Efvy Zam', '2011', 'mediakita', 'Jakarta Selatan', 'redaksi@mediakita.com', 'ini ebook tentang  panduan menjadi hacker', 'Buku_Sakti_Hacker.pdf'),
(8, 'Elon Musk Pria Dibalik Paypal, Tesla, Space X, dan Masa Depan Yang Fantastis', 'Niken Fitria Apriani', '2017', 'Kaifa', 'Bandung', 'kaifa@mizan.com', 'ini berisi tentang perjalanan hidup elon musk', 'Elon_Musk_Pria_Dibalik_Paypal,_Tesla,_Space_X,_dan_Masa_Depan_Yang_Fantastis.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `id_univ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `fakultas`, `id_univ`) VALUES
(1, 'Ilmu Komputer', 1),
(2, 'Agama Islam', 1),
(4, 'Hukum', 0),
(5, 'Keguruan dan Ilmu Pendidikan', 0),
(6, 'Pertanian', 0),
(7, 'Ekonomi dan Bisnis', 0),
(8, 'Teknik', 0),
(9, 'Ilmu Sosial dan Ilmu Politik', 0),
(10, 'Ilmu Kesehatan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dokumen`
--

CREATE TABLE `jenis_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_dokumen`
--

INSERT INTO `jenis_dokumen` (`id_dokumen`, `nama`) VALUES
(6, 'Prosiding'),
(7, 'Tugas Akhir'),
(8, 'Thesis'),
(9, 'Disertasi'),
(11, 'Karya Tulis Ilmiah');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jk` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jk`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id_jenjang` int(11) NOT NULL,
  `jenjang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id_jenjang`, `jenjang`) VALUES
(1, 'S1'),
(2, 'D3'),
(3, 'D2'),
(4, 'D1');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `penulis` varchar(300) NOT NULL,
  `abstrak` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tahun` int(4) NOT NULL,
  `issn` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `pdf_jurnal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `judul`, `penulis`, `abstrak`, `email`, `tahun`, `issn`, `isbn`, `pdf_jurnal`) VALUES
(7, 'PENGUJIAN BLACK BOX TESTING PADA APLIKASI  ACTION & STRATEGY BERBASIS ANDROID  DENGAN TEKNOLOGI PHONEGAP', 'Wahyu Nur Cholifah', 'Perkembangan android saat ini sudah menjadi bagian kebutuhan harian bagi masyarakat umum dan pekerja. Dengan demikian dianggap perlu membangun aplikasi action & strategy berbasis Android sebagai media sharing knowledge bagi anggota brimob untuk meningkatkan mutu dan kualitas dari tiap-tiap personil. Dan untuk mendapatkan hasil yang optimal maka dilakukan pengujian secara menyeluruh terhadap interface sistem aplikasi dengan menggunakan black box testing dengan tujuan mengetahui apakah fungsi-fungsi pada aplikasi telah berjalan sesuai dengan fungsinya dan mengevaluasi kesesuaian aplikasi dengan kebutuhan pengguna.Pengujian dilakukan dalam dua tahap, pertama uji fungsi aplikasi android oleh sejumlah pengguna dan dilakukan secara bersamaan.pengujiankeduauji fungsi web admin oleh seorang pengguna dan pada kedua hasil pengujian tidak ditemukan adanya kesalahan pada sistem.Metode kuantitatif digunakan dalam proses penelitian ini untuk digunakan dalam melakukan testing.', 'wnurcholifah@gmail.com', 2018, ' 2549 -2837 ', '-', 'PENGUJIAN_BLACK_BOX_TESTING_PADA_APLIKASI_ACTION_STRATEGY_BERBASIS_ANDROID_DENGAN_TEKNOLOGI_PHONEGAP.pdf'),
(8, 'Pengujian Black Box pada Aplikasi Penjualan Berbasis Web Menggunakan Teknik Boundary Value Analysis ', 'Yulianti', 'In a software test, validation is one of the processes of checking whether the software meets the expected specifications and objectives or not. The data validation process has not been maximized can result in a mismatch of data that will be stored in the database. For example the amount of stock turned negative, or the number of digits entered can exceed the defined limits. This can be detrimental to the owner and user in using this application. Therefore, it is necessary to improve the quality of validation more accurately, so it can help the owner in terms of data accuracy. Applications are designed in such a way must go through a testing phase to ensure the quality of the software itself. Examples of tests can be said to be good if they have a chance of finding an error that cannot be revealed. Among the many ways of the Black Box testing methods, this study uses the Boundary Value Analysis testing method. The method tests the maximum number of limits and the minimum number of limi', 'rio06121998@gmail.com', 2019, ' 2541-1004 ', '-', 'Pengujian_Black_Box_pada_Aplikasi_Penjualan_Berbasis_Web_Menggunakan_Teknik_Boundary_Value_Analysis_.pdf'),
(9, 'Sistem Pakar Diagnosis Persalinan Ibu Hamil Menggunakan  Metode Certainty Factor ', 'Andi Irmayana, Suriani, Marwah', ' Perkembangan dunia medis terkini banyak menggunakan komputer untuk membantu diagnosa maupun pencegahan dan penanganan suatu penyakit. Penelitian ini bertujuan menyusun sebuah sstem pakar yang digunakan untuk mendiagnosa awal persalinan ibu hamil, dimana pengguna dapat mendiagnosa sendiri persalinan yang akan ditempuh berdasarkan gejala yang dialami. Diagnosa awal ini hanya untuk membantu pasien untuk langkah selanjutnya. Sistem pakar untuk diagnosa penyakit dibangun dengan menerapkan metode certainty factor. Sistem tersebut memberikan hasil berupa kemungkinan persalinan yang akan dialami dan prosentase keyakinan berdasarkan fakta-  fakta dan nilai keyakinan yang diberikan oleh pengguna dalam menjawab dan mengisi keluhan ketika menggunakan sistem ini. Implementasi sistem ini digunakan untuk mengevaluasi proses akuisisi pengetahuan dalam membangun basis pengetahuan', 'irmayana.andi@dipanegara.ac.id', 2019, '-', '-', 'Sistem_Pakar_Diagnosis_Persalinan_Ibu_Hamil_Menggunakan_Metode_Certainty_Factor_.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lainnya`
--

CREATE TABLE `lainnya` (
  `id_lainnya` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `jenis_dokumen` varchar(255) NOT NULL,
  `ringkasan` varchar(1000) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lainnya`
--

INSERT INTO `lainnya` (`id_lainnya`, `judul`, `penulis`, `email`, `tahun`, `jenis_dokumen`, `ringkasan`, `file`) VALUES
(6, 'SISTEM PAKAR UNTUK MENDIAGNOSA PENYAKIT KULIT WAJAH BERBASIS MOBILE ', 'Yusuf Sofyan', 'sofyan@gmail.com', '2013', 'Tugas Akhir', 'Wajah merupakan salah satu bagian yang paling penting dari penampilan. Tidak harus memiliki wajah cantik dan berkulit putih untuk bisa tampil menarik, tetapi dengan memiliki kulit wajah yang sehat dan bersih pun kita dapat tampil dengan menarik dan percaya diri. Sistem pakar untuk mendiagnosa penyakit kulit wajah merupakan suatu sistem pakar yang dirancang sebagai alat bantu dalam mendiagnosa penyakit kulit wajah bagi para penderita dengan tujuan dalam pengambilan keputusan. Sehingga diharapkan sistem pakar ini dapat membantu para ahli dalam mendiagnosa penyakit kulit wajah. Tujuan dari sistem pakar untuk mendiagnosa penyakit kulit wajah berbasis mobile ini agar dapat digunakan oleh use r untuk dapat mengetahui penyakit kulit wajah yang diderita. ', 'SISTEM_PAKAR_UNTUK_MENDIAGNOSA_PENYAKIT_KULIT_WAJAH_BERBASIS_MOBILE_.pdf'),
(7, 'PERSONAL HYGIENE DAN KEJADIAN PENYAKIT KULIT PADA PENGHUNI RUMAH SUSUN SEDERHANA SEWA  COKRODIRJAN YOGYAKARTA ', 'DANI NOVITA PUTRI ', 'dani@gmail.com', '2017', 'Prosiding', 'Kesehatan merupakan hak asasi manusia dan merupakan unsur kesejahteraan yang harus diwujudkan sesuai dengan cita-cita bangsa Indonesia sebagaimana dimaksud dalam Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 (Kemenkes RI, 2009). Upaya kesejahteraan  pada dasarnya bagian dari upaya mewujudkan kesehatan. Kesejahteraan akan menjamin kesehatan dan kesehatan pasti akan mensejahterakan (Wisal, 2011)', 'PERSONAL_HYGIENE_DAN_KEJADIAN_PENYAKIT_KULIT_PADA_PENGHUNI_RUMAH_SUSUN_SEDERHANA_SEWA_COKRODIRJAN_YOGYAKARTA_.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_fakultas`, `prodi`) VALUES
(1, 1, 'Teknik Informatika'),
(2, 1, 'Sistem Informasi'),
(4, 0, 'Akuntansi'),
(5, 0, 'Ilmu Hukum'),
(6, 0, 'Manajemen'),
(7, 0, 'Pendidikan Luar Sekolah'),
(8, 0, 'Pendidikan Matematika'),
(9, 0, 'Pendidikan Bahasa Inggris'),
(10, 0, 'Pendidikan Jasmani, Kesehatan, dan Rekreasi'),
(11, 0, 'Pendidikan Bahasa dan Sastra Indonesia'),
(12, 0, 'Agroteknologi'),
(13, 0, 'Agribisnis'),
(14, 0, 'Kebidanan'),
(15, 0, 'Farmasi'),
(16, 0, 'Ilmu Gizi'),
(17, 0, 'Ilmu Keolahragaan'),
(18, 0, 'Pendidikan Agama Islam'),
(19, 0, 'Manajemen Pendidikan Islam'),
(20, 0, 'Teknik Industri'),
(21, 0, 'Teknik Mesin'),
(22, 0, 'Teknik Elektro'),
(23, 0, 'Teknik Kimia'),
(24, 0, 'Ilmu Komunikasi'),
(25, 0, 'Ilmu Pemerintahan');

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `id_skripsi` int(4) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `penulis` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `universitas` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `judul`, `penulis`, `email`, `tahun`, `universitas`, `file`) VALUES
(9, 'Sistem Pakar Diagnosa Penyakit Kulit Dengan Menggunakan Metode Forward Chaining ', 'Anindita Dhiaksa', 'anindita@gmail.com', '2016', 'Lainnya', 'Sistem_Pakar_Diagnosa_Penyakit_Kulit_Dengan_Menggunakan_Metode_Forward_Chaining_.pdf'),
(10, 'Prevalensi Penyakit Kulit dan Pengobatannya Pada Beberapa RW di Kelurahan Petamburan Jakarta Pusat', 'Nindya Nugerahdita', 'nindya@gmail.com', '2009', 'Universitas Indonesia', 'Prevalensi_Penyakit_Kulit_dan_Pengobatannya_Pada_Beberapa_RW_di_Kelurahan_Petamburan_Jakarta_Pusat.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id_univ` int(11) NOT NULL,
  `nama_univ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitas`
--

INSERT INTO `universitas` (`id_univ`, `nama_univ`) VALUES
(1, 'Universitas Singaperbangsa Karawang'),
(2, 'Universitas Indonesia'),
(7, 'Universitas Negeri Jakarta'),
(8, 'Universitas Teknologi Bandung'),
(9, 'Universitas Gajah Mada');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$tfxnODMMp0B4AxIb3ub9Xu2aPSVdZs/lP3JQf591lFj.wN3HniA8q', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1588252233, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(32, '::1', '1710631170067', '$2y$10$yH42r2W9ro7Jn1V28lQVnOEnPwRnU58G/f8yXdovnT/2MSSCNC8By', 'bayuadhip01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1588253092, 1588260309, 1, 'Bayu Adhi Pamungkas', '', NULL, '082242484585');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(30, 32, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD KEY `id_univ` (`id_univ`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `lainnya`
--
ALTER TABLE `lainnya`
  ADD PRIMARY KEY (`id_lainnya`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id_skripsi`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id_univ`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lainnya`
--
ALTER TABLE `lainnya`
  MODIFY `id_lainnya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id_skripsi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_univ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
