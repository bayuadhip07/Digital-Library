-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 03:09 PM
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
(2, 'Kristen');

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
('kuab95ub91shsam9fqomot0dv3cpije9', '::1', 1586940589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934303538393b),
('b5kmciu8gqk84sc06tcfo50eg7gps56v', '::1', 1586940994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934303939343b),
('en1b49lep6igb0o14jbsh613s8sjog4q', '::1', 1586941306, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934313330363b),
('sp36og4k2ksd0uuiqs9j5kqqd5e59ejn', '::1', 1586941661, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934313636313b),
('1tq67p14vnpncnhvgfr7mt6vs6c6of5b', '::1', 1586942251, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934323235313b),
('2n9402c56aeaf8gmea2tbm2qvudf66rb', '::1', 1586942302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934323235313b),
('kdqeh39a6djuvn44uruigshirnl1g657', '::1', 1586942749, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934323734393b6572727c733a32323a22452d6d61696c20737564616820746572646166746172223b5f5f63695f766172737c613a313a7b733a333a22657272223b733a333a226f6c64223b7d),
('bmsnu37apkmcv5itga9t5ho7g1bjojkl', '::1', 1586943058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934333035383b),
('3h4k71e539j5030dnmv1u19t3tu70hpu', '::1', 1586943363, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934333336333b),
('k2varlid4r5me2ud4tqefse3vblmbmla', '::1', 1586943683, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934333638333b),
('at081s1j8dn6mn9sjdst03q41jg8dhom', '::1', 1586944078, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934343037383b6d73677c733a32353a22416e67676f746120626572686173696c20646968617075732e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('dt2hovs4a6lug602h4ih6n71ltpk4nai', '::1', 1586944400, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934343430303b),
('9qipgg8ruupkddapk7doci6s4ooa225l', '::1', 1586944759, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934343735393b),
('rdch0o0r4go5njv0t2k5gh46m12gh3sv', '::1', 1586945351, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934353335313b),
('utbdnkliebih5u83kaq44fht3lbjmv8o', '::1', 1586945733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934353733333b),
('m9086b21spr4mi53l82ck2e00f77uv8t', '::1', 1586946041, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934363034313b6d73677c733a32313a224461746120626572686173696c206469756261682e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('arb6mnui6q28g34m2iivk3ghsl3uivc0', '::1', 1586946875, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934363837353b),
('c48bciv5alvd5te1emf3hitnf3dbp50k', '::1', 1586947766, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934373736363b),
('i264986npmpqak7jd3pte47hds56sqnd', '::1', 1586948078, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934383037383b),
('fgqdmr2bfu98reoogc4f176ela5kj9qh', '::1', 1586948414, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934383431343b),
('cqqn62gjfc9b2vl88r45dbrb29m2u4f2', '::1', 1586948833, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934383833333b),
('7omleu80nv94kr5iqgn3g6cs7j6e6763', '::1', 1586949140, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934393134303b),
('8frr6dd5tbhl57df3bu68jco3f8dp75m', '::1', 1586949462, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934393436323b),
('gk1a00hs4ddc0nri2eih00sed165pv4e', '::1', 1586949667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363934393436323b),
('inf607135b3ljv3ti7q85diseaj9hgkh', '::1', 1586950212, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935303231323b),
('aov9lupjlm81smm8lu11fvgc305cfchj', '::1', 1586950448, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935303231323b),
('jsg7pt2q8184aqe43v4nhvorr0fgorbt', '::1', 1586951289, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935313238393b),
('rbnfuhrdvl54je5tqt6jv2p2jmhq8utr', '::1', 1586951289, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935313238393b),
('dlsf88u6i8hcueqics63s7s1t2p6qmua', '::1', 1586951514, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935313436313b),
('vfbme3ov2vd2lhd9cdpo9fb4n4t03uod', '::1', 1586952432, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935323433323b),
('fdvovc3cln02bs5lp18n18sidd1ilh3o', '::1', 1586952891, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935323839313b),
('aud6jm83ekpum1dfl6bkmvvns7f0re5l', '::1', 1586953277, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935333237373b),
('s85nmpbf3951q1gok70ac24affg8mkq3', '::1', 1586953690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935333639303b),
('jes39dcrikfr8lqs8lngp1768hq5fl6e', '::1', 1586954000, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935343030303b),
('n7vtvcshfc91jvt9cerrfdrm42ngbsnp', '::1', 1586954303, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935343330333b6d73677c733a32323a224461746120426572686173696c20646973696d70616e223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('j0s8nnobvsu322nf4lsuhc3rpnj914if', '::1', 1586954617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935343631373b),
('gmi1p3fk0g6hpasf532r2onj5aioie1l', '::1', 1586955006, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935353030363b),
('uj9g1v8ldimtdabkqignbtru7k57fuqg', '::1', 1586955480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935353438303b),
('mm3fmv4e7rse82hafgjq0b24kct09lnj', '::1', 1586955481, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935353438303b),
('qq7b9q4mcetj7retaj14ukpntvf2f3ij', '::1', 1586956045, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935353838353b),
('4667sbmb9otsodu6nqrr03na64k2mdj5', '::1', 1586956095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538363935363037383b);

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
(2, 'Ekonomi dan Bisnis', 1);

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
(3, 'E-Book');

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
(2, 1, 'Sistem Informasi');

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
(2, 'Universitas Indonesia');

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
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_univ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
