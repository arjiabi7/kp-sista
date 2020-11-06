-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 12:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(5, 'Dosen', 'General User');

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
-- Table structure for table `tbl_data_mhsw`
--

CREATE TABLE `tbl_data_mhsw` (
  `nim` varchar(10) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `peminatan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_mhsw`
--

INSERT INTO `tbl_data_mhsw` (`nim`, `nama_lengkap`, `email`, `no_hp`, `semester`, `jk`, `peminatan`) VALUES
('3411171107', 'Dika Arji', 'dikaarji@sista.com', '08928932', '7', 'L', 'DSE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seminar`
--

CREATE TABLE `tbl_seminar` (
  `kd_seminar` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
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

INSERT INTO `tbl_seminar` (`kd_seminar`, `nim`, `peminatan`, `ta_aktif`, `no_sk_ta_pembimbing`, `nid_r1`, `nid_r2`, `judul_skripsi`, `hari_ajuan_seminar`, `tgl_ajuan_seminar`, `jam_ajuan_seminar`, `hari_seminar`, `tgl_seminar`, `jam_seminar`, `tempat_seminar`, `status_seminar`, `lulus_review`) VALUES
('s23', '3411171107', 'DSE', 'genap 2020', 'sdsd', '343434', '3434343', 'coba aja dulu', 'senin', '23 nov 202', '19.00', 'senin', '23 nov 202', '19.00', 'r.1-3', 'lulus', '2019');

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
  `nim` varchar(10) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `nim`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$j8ow8y9DsIwnGTGKOREGX.HbAg5Za9JONQvHZTi2o2cC7m393qTPe', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1603263180, 1, '', 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'administrator', '$2y$12$XqhuVu4SxsKfewLgezJTBOpx.2cT5MxLTZV2cNebwJDkMvH8AUsQ6', 'dikaarji@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602832500, 1604663671, 1, '3411171107', 'Dika', 'Arji', 'Unjani', '081902060468'),
(5, '::1', NULL, '$2y$10$vKeCuVJO9coW1vCw5eDm7eZUWXwWDGlLD8GvUDDKFeinZoBFUlC3q', 'arjiabi@yahoo.co.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1604304557, 1604658776, 1, '3411171133', 'arji', 'abiyoga', 'Unjani', '085176548790');

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
(2, 1, 2),
(4, 2, 1),
(5, 2, 2),
(12, 5, 4);

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
-- Indexes for table `tbl_data_mhsw`
--
ALTER TABLE `tbl_data_mhsw`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  ADD PRIMARY KEY (`kd_seminar`);

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
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
