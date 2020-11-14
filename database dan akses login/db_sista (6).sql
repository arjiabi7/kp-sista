-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 06:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sista`
--

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
(2, 'members', 'General User'),
(4, 'Mahasiswa', 'General User'),
(5, 'Dosen', 'General User'),
(6, 'pembimbing', ''),
(7, 'koordinator', ''),
(8, 'penguji', '');

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
-- Table structure for table `tbl_data_akademik`
--

CREATE TABLE `tbl_data_akademik` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jumlah_sks_lulus` varchar(3) NOT NULL,
  `jumlah_sks_proses` varchar(3) NOT NULL,
  `jumlah_nilai_D` varchar(2) NOT NULL,
  `jumlah_nilai_E` varchar(2) NOT NULL,
  `ipk_sementara` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_akademik`
--

INSERT INTO `tbl_data_akademik` (`id`, `nim`, `email`, `jumlah_sks_lulus`, `jumlah_sks_proses`, `jumlah_nilai_D`, `jumlah_nilai_E`, `ipk_sementara`) VALUES
(1, '3411171100', 'sista@unjani.com', '130', '16', '2', '0', '3.3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_koordinator`
--

CREATE TABLE `tbl_data_koordinator` (
  `id` int(11) NOT NULL,
  `kd_koordinator` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_koordinator` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_koordinator`
--

INSERT INTO `tbl_data_koordinator` (`id`, `kd_koordinator`, `email`, `nama_koordinator`) VALUES
(1, 'K0001', 'dikaarji@sista.com', 'Dika dan Arji'),
(2, 'K0002', 'koordinator@sista.com', 'Nyoba Koordinator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_mhsw`
--

CREATE TABLE `tbl_data_mhsw` (
  `nim` varchar(10) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `peminatan` varchar(3) NOT NULL,
  `status` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_mhsw`
--

INSERT INTO `tbl_data_mhsw` (`nim`, `nama_lengkap`, `email`, `no_hp`, `semester`, `jk`, `peminatan`, `status`) VALUES
('3411171100', 'P Mahardika', 'sista@unjani.com', '089698762991', '7', 'L', 'DSE', 'Pasif'),
('3411171107', 'Dika Arji', 'dikaarji@sista.com', '08928932', '7', 'L', 'DSE', 'Aktif'),
('3411171133', 'Arji Abiyoga', 'arjiabi@ymail.com', '089698762991', '7', 'L', 'DSE', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_penguji`
--

CREATE TABLE `tbl_data_penguji` (
  `kd_penguji` varchar(3) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `password` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_penguji`
--

INSERT INTO `tbl_data_penguji` (`kd_penguji`, `nim`, `password`) VALUES
('HAY', '3411171134', '123123123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seminar`
--

CREATE TABLE `tbl_seminar` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `peminatan` varchar(3) NOT NULL,
  `ta_aktif` varchar(10) NOT NULL,
  `no_sk_ta_pembimbing` varchar(10) NOT NULL,
  `nid_r1` varchar(10) NOT NULL,
  `nid_r2` varchar(10) NOT NULL,
  `judul_skripsi` varchar(50) NOT NULL,
  `hari_ajuan_seminar` varchar(10) NOT NULL,
  `tgl_ajuan_seminar` varchar(10) NOT NULL,
  `jam_ajuan_seminar` varchar(10) NOT NULL,
  `hari_seminar` varchar(10) NOT NULL,
  `tgl_seminar` varchar(10) NOT NULL,
  `jam_seminar` varchar(10) NOT NULL,
  `tempat_seminar` varchar(10) NOT NULL,
  `status_seminar` varchar(10) NOT NULL,
  `lulus_review` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seminar`
--

INSERT INTO `tbl_seminar` (`id`, `nim`, `email`, `peminatan`, `ta_aktif`, `no_sk_ta_pembimbing`, `nid_r1`, `nid_r2`, `judul_skripsi`, `hari_ajuan_seminar`, `tgl_ajuan_seminar`, `jam_ajuan_seminar`, `hari_seminar`, `tgl_seminar`, `jam_seminar`, `tempat_seminar`, `status_seminar`, `lulus_review`) VALUES
(1, '3411171100', 'sista@unjani.com', 'DSE', '2020', 'gdfgfd', '435453', '34535', 'Masi kala jao', 'senin', '27', '1900', 'selasa', '28', '1800', 'r29', 'lulus', '2020'),
(2, '3411171133', 'arjiabiyoga99@gmail.com', 'DSE', 'genap 2020', 'sdsd', '343434', '3434343', 'coba aja dulu', 'senin', '23 nov 202', '19.00', 'senin', '23 nov 202', '19.00', 'r.1-3', 'lulus', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifikasi_daftarta2`
--

CREATE TABLE `tbl_verifikasi_daftarta2` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `peminatan` varchar(3) NOT NULL,
  `jumlah_sks_proses` varchar(3) NOT NULL,
  `jumlah_sks_lulus` varchar(3) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `jumlah_nilai_D` varchar(2) NOT NULL,
  `jumlah_nilai_E` varchar(2) NOT NULL,
  `judul_skripsi` varchar(100) NOT NULL,
  `pembimbing_1` varchar(10) NOT NULL,
  `pembimbing_2` varchar(10) NOT NULL,
  `khs` varchar(10) NOT NULL,
  `krs` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi_daftarta2`
--

INSERT INTO `tbl_verifikasi_daftarta2` (`id`, `nama_lengkap`, `email`, `nim`, `no_hp`, `semester`, `jk`, `peminatan`, `jumlah_sks_proses`, `jumlah_sks_lulus`, `ipk`, `jumlah_nilai_D`, `jumlah_nilai_E`, `judul_skripsi`, `pembimbing_1`, `pembimbing_2`, `khs`, `krs`, `status`) VALUES
(11, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'tester', 'ECD', 'FZR', '18380426_1', '18380426_1', 'Lulus'),
(12, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'coba pdf', 'FZR', 'ECD', 'Panduan_Pe', 'Panduan_Pe', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifikasi_seminar`
--

CREATE TABLE `tbl_verifikasi_seminar` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `peminatan` varchar(3) NOT NULL,
  `jumlah_sks_proses` varchar(3) NOT NULL,
  `jumlah_sks_lulus` varchar(3) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `jumlah_nilai_D` varchar(2) NOT NULL,
  `jumlah_nilai_E` varchar(2) NOT NULL,
  `judul_skripsi` varchar(50) NOT NULL,
  `pembimbing_1` varchar(3) NOT NULL,
  `pembimbing_2` varchar(3) NOT NULL,
  `jml_bimbingan1` varchar(2) NOT NULL,
  `jml_bimbingan2` varchar(2) NOT NULL,
  `pelunasan` varchar(15) NOT NULL,
  `bukti_lunas` varchar(200) NOT NULL,
  `matkul_sedang_diambil` varchar(255) NOT NULL,
  `draft_laporan` varchar(255) NOT NULL,
  `khs` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi_seminar`
--

INSERT INTO `tbl_verifikasi_seminar` (`id`, `nama_lengkap`, `email`, `nim`, `no_hp`, `semester`, `jk`, `peminatan`, `jumlah_sks_proses`, `jumlah_sks_lulus`, `ipk`, `jumlah_nilai_D`, `jumlah_nilai_E`, `judul_skripsi`, `pembimbing_1`, `pembimbing_2`, `jml_bimbingan1`, `jml_bimbingan2`, `pelunasan`, `bukti_lunas`, `matkul_sedang_diambil`, `draft_laporan`, `khs`, `sertifikat`, `status`) VALUES
(2, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'ssssssss', 'ADK', 'ECD', '23', '2', 'Lunas', '13.pdf', 'ECD', '13.pdf', '13.pdf', '13.pdf', ''),
(3, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'jkdksjd', 'AIH', 'HAY', '23', '2', 'Lunas', '83.pdf', 'HAY', '83.pdf', '83.pdf', '83.pdf', ''),
(4, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'llllll', 'ECD', 'FZR', '2', '2', 'Belum Lunas', '3_Benchmarking_Database4.pdf', 'FZR', '3_Benchmarking_Database4.pdf', '3_Benchmarking_Database4.pdf', '3_Benchmarking_Database4.pdf', ''),
(5, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'kkkkkkk', 'FKI', 'FRU', '23', '2', 'Belum Lunas', '62-Article_Text-164-1-10-20190426.pdf', 'FRU', '62-Article_Text-164-1-10-20190426.pdf', '62-Article_Text-164-1-10-20190426.pdf', '62-Article_Text-164-1-10-20190426.pdf', '');

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
(1, '127.0.0.1', 'administrator', '123123123', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1603263180, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'administrator', '$2y$12$XqhuVu4SxsKfewLgezJTBOpx.2cT5MxLTZV2cNebwJDkMvH8AUsQ6', 'dikaarji@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602832500, 1605259330, 1, 'Dika', 'Arji', 'Unjani', '081902060468'),
(5, '::1', NULL, '$2y$10$vKeCuVJO9coW1vCw5eDm7eZUWXwWDGlLD8GvUDDKFeinZoBFUlC3q', 'arjiabiyoga99@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1604304557, 1605247466, 1, 'arji', 'abiyoga', 'Unjani', '085176548790'),
(8, '::1', NULL, '$2y$10$DzMaSJmMtvGfZj2jpbHhMu5tRUo/dztOQPVOoNWYwmzjGMlAr5ycy', 'sista@unjani.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1604851430, 1605336174, 1, 'Muhammad P', 'Mahardika', 'Unjani', '123123123123'),
(9, '::1', NULL, '$2y$10$wEcGeZFZNbTvKDHfWg46L.cqQSM00mMIUHfuEDyFyybfdy6DmOGOu', 'pembimbing@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605258309, 1605259299, 1, 'nyoba', 'pembimbing', 'Unjani', '081902060468'),
(10, '::1', NULL, '$2y$10$DE5ondXLd7jxLeWTVI7kOelYMExvfx.roeX8ph7Lu89KirU2n81xG', 'koordinator@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605258973, 1605371045, 1, 'nyoba', 'koordinator', 'Unjani', '081902060468'),
(11, '::1', NULL, '$2y$10$KUvHyV/secTLbp4iqPts4ue5GOijMGrBbAta28BqrIaYH.LX5dysW', 'penguji@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605259370, 1605259633, 1, 'nyoba', 'Penguji', 'Unjani', '081902060468');

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
(21, 1, 5),
(20, 2, 1),
(12, 5, 4),
(18, 8, 4),
(24, 9, 6),
(26, 10, 7),
(28, 11, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data_akademik`
--
ALTER TABLE `tbl_data_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data_koordinator`
--
ALTER TABLE `tbl_data_koordinator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data_mhsw`
--
ALTER TABLE `tbl_data_mhsw`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_data_penguji`
--
ALTER TABLE `tbl_data_penguji`
  ADD PRIMARY KEY (`kd_penguji`);

--
-- Indexes for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_verifikasi_daftarta2`
--
ALTER TABLE `tbl_verifikasi_daftarta2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_verifikasi_seminar`
--
ALTER TABLE `tbl_verifikasi_seminar`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_data_akademik`
--
ALTER TABLE `tbl_data_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_data_koordinator`
--
ALTER TABLE `tbl_data_koordinator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_verifikasi_daftarta2`
--
ALTER TABLE `tbl_verifikasi_daftarta2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_verifikasi_seminar`
--
ALTER TABLE `tbl_verifikasi_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
