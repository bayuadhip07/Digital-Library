-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 04:07 PM
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
(3, 'Kristen');

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
(12, 'Bayu Adhi Pamungkas', '1', '1', '1', '1', '1', '1710631170067', 'Bayu_Adhi_Pamungkas.png', 'Kebumen', 'Aktif', 29),
(13, 'Rendy Galih Saputra', '1', '1', '1', '1', '1', '1710631170167', 'Rendy.jpg', 'Bekasi', 'Aktif', 32),
(14, 'Reza Rizqi R', '1', '1', '1', '1', '1', '1710631170176', 'Reza_Rizqi_R.JPG', 'Karawang', 'Aktif', 34);

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
('scjvoo8021tkg6jiimb8lf31ldou4l6p', '::1', 1586964717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936343731373b6d73677c733a33333a224461746120556e69766572736974617320626572686173696c206469756261682e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('qcduqbic5ss3oiu8b19ckgk6ceu3qb7n', '::1', 1586965028, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936353032383b),
('htaoq47othrr4v60gshth1d7mnb2maj5', '::1', 1586965512, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936353531323b),
('ogp6h8a8q8sjq8gt5ecj62in5c440huc', '::1', 1586965986, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936353938363b),
('75imk17s568lktdctoeeub63b8o22nfi', '::1', 1586966351, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936363335313b),
('qlo7dd03gvg7mcjij29lolpu681mrlo3', '::1', 1586966951, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936363935313b),
('9a8fuh6oq01bieikok5g9jqhd7jv3hvv', '::1', 1586967271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936373237313b),
('9mr9qiot1if5jrj2spdknls5kj1mi137', '::1', 1586967830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936373833303b6d73677c733a33333a224461746120556e69766572736974617320626572686173696c206469756261682e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('5cnctd5g722ce3g4qvdkf1ia7b9b2cdr', '::1', 1586968292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936383239323b),
('utmrlo35prt60ldenadh7eevj6gqnre0', '::1', 1586968594, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936383539343b),
('t1u3077r9fdlhtdinaklda9qh8t4t3l6', '::1', 1586969142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936393134323b6d73677c733a33323a22446174612046616b756c74617320626572686173696c20646973696d70616e2e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('8ddsqp4t2mulacto4vcovtf16i97peej', '::1', 1586969551, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936393535313b),
('p0dopt1960iiel3c3d1fip9cek8a2ifh', '::1', 1586969990, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363936393939303b),
('53niolbc01f5335sirmr7jorbqcisk35', '::1', 1586970299, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937303239393b),
('cshv3b2sampjlel38s1qobopbu33ie74', '::1', 1586970980, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937303938303b6d73677c733a33303a22446174612066616b756c74617320626572686173696c206469756261682e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('3lagrpr6gr8tl2rjghgl0malfajiai69', '::1', 1586971482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937313438323b),
('c59f39tur8n1jsmfs5t57dkjagmuph41', '::1', 1586972732, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937323733323b),
('9n7a5fsl4f7cgq8jou5vlf1rda49dgum', '::1', 1586973160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937333136303b),
('5rn4p8vqn9l6vc5m4al9j05r2jnjv95r', '::1', 1586973478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937333437383b),
('1cl586aedl1c39ltfbsrse56uhan9n19', '::1', 1586973859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937333835393b),
('dgculs49pm8mjho1nprs5gjogfardkli', '::1', 1586974220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937343232303b),
('j0nnbpf12p9bg9lac6eifad7ba4p4h8a', '::1', 1586974220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363937343232303b),
('hfuav0b2dmhr8nge55dt3jpgdl0kjm7k', '::1', 1587045905, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538373034353835313b);

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
(4, 'Hukum', 0);

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
(1, 'Jurnal'),
(2, 'Skripsi'),
(4, 'E-Book');

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
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(2, '::1', 'admin@admin.com', 1586878260),
(3, '::1', 'bayuadhip01@gmail.com', 1586878464),
(4, '::1', 'bayuadhip01@gmail.co', 1586878536);

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
(4, 0, 'Akuntansi');

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
(8, 'Universitas Teknologi Bandung');

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
(1, '127.0.0.1', 'administrator', '$2y$12$CBr08t8zgqwN7/S3xirOIePHUcKjzQNjeuMstw0HH58CQgJMjGi3C', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1586802041, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(29, '::1', '1710631170067', '$2y$10$ymRfj28fDh/DRrrVVzDD/eOKOgiLIhPudhFsM7fN2WLCZDw2nmqY6', 'bayuadhip01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1586945789, NULL, 1, 'Bayu Adhi Pamungkas', '', NULL, '082242484585'),
(32, '::1', '1710631170167', '$2y$10$gtEC5JiulU4e6YcgZI65h.Rb.mieD.0mxRonxg6PzdTWUP2Z5Tf7G', '1@s.c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1586953690, NULL, 1, 'Rendy', '', NULL, '09876'),
(34, '::1', '1710631170176', '$2y$10$yiWXSs7yKzMtn16R/WSdueXDGFafENpg5KNZUod4hObtgAD9l7XIe', 'aasas@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1586954294, NULL, 1, 'Reza Rizqi R', '', NULL, '12345');

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
(27, 29, 2),
(30, 32, 2),
(32, 34, 2);

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
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_univ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
