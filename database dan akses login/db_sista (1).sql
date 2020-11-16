-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 04:21 PM
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
(1, '3411171100', 'sista@unjani.com', '130', '16', '2', '0', '3.3'),
(2, '3411171133', 'arjiabi@sista.com', '130', '16', '2', '0', '4.0');

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
('3411171133', 'Arji Abiyoga', 'arjiabi@sista.com', '085156152078', '7', 'L', 'DSE', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_pembimbing`
--

CREATE TABLE `tbl_data_pembimbing` (
  `id` int(11) NOT NULL,
  `kd_pembimbing` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_pembimbing` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_pembimbing`
--

INSERT INTO `tbl_data_pembimbing` (`id`, `kd_pembimbing`, `email`, `nama_pembimbing`) VALUES
(1, 'AHY', 'pembimbing@sista.com', 'AHAHAHAY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_penguji`
--

CREATE TABLE `tbl_data_penguji` (
  `id` int(11) NOT NULL,
  `kd_penguji` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_penguji` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_penguji`
--

INSERT INTO `tbl_data_penguji` (`id`, `kd_penguji`, `email`, `nama_penguji`) VALUES
(1, 'UNC', 'penguji@sista.com', 'UNchhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan_seminar`
--

CREATE TABLE `tbl_pengajuan_seminar` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jumlah_sks_proses` varchar(3) NOT NULL,
  `jumlah_sks_lulus` varchar(3) NOT NULL,
  `jumlah_nilai_D` varchar(2) NOT NULL,
  `jumlah_nilai_E` varchar(2) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `judul_skripsi` varchar(255) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `komentar_pengajuan_seminar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan_seminar`
--

INSERT INTO `tbl_pengajuan_seminar` (`id`, `nama_lengkap`, `email`, `nim`, `jumlah_sks_proses`, `jumlah_sks_lulus`, `jumlah_nilai_D`, `jumlah_nilai_E`, `ipk`, `judul_skripsi`, `status`, `komentar_pengajuan_seminar`) VALUES
(13, 'P Mahardika', 'sista@unjani.com', '3411171100', '16', '130', '2', '0', '3.3', 'nyoba pengajuan seminar', NULL, ''),
(14, 'Arji Abiyoga', 'arjiabi@sista.com', '3411171133', '16', '130', '2', '0', '4.0', 'Sistem pendukung keputusan dengan metode SAW', NULL, 'test komentar pengajuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan_sidang`
--

CREATE TABLE `tbl_pengajuan_sidang` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jumlah_sks_proses` varchar(3) NOT NULL,
  `jumlah_sks_lulus` varchar(3) NOT NULL,
  `jumlah_nilai_D` varchar(3) NOT NULL,
  `jumlah_nilai_E` varchar(2) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `judul_skripsi` varchar(255) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `komentar_pengajuan_sidang` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan_sidang`
--

INSERT INTO `tbl_pengajuan_sidang` (`id`, `nama_lengkap`, `email`, `nim`, `jumlah_sks_proses`, `jumlah_sks_lulus`, `jumlah_nilai_D`, `jumlah_nilai_E`, `ipk`, `judul_skripsi`, `status`, `komentar_pengajuan_sidang`) VALUES
(3, 'P Mahardika', 'sista@unjani.com', '3411171100', '16', '130', '2', '0', '3.3', 'nyoba pengajuan sidang', NULL, ''),
(4, 'Arji Abiyoga', 'arjiabi@sista.com', '3411171133', '16', '130', '2', '0', '4.0', 'Sistem pendukung keputusan dengan metode SAW', NULL, 'test komentar pengajuan sidang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_seminar`
--

CREATE TABLE `tbl_penilaian_seminar` (
  `id` int(11) NOT NULL,
  `peran_dosen` varchar(15) NOT NULL,
  `pemahaman_teori` varchar(500) NOT NULL,
  `komentar_pemahaman_teori` varchar(500) NOT NULL,
  `pemahaman_kebutuhan` varchar(500) NOT NULL,
  `komentar_pemahaman_kebutuhan` varchar(500) NOT NULL,
  `pemahaman_pl` varchar(500) NOT NULL,
  `komentar_pemahaman_pl` varchar(500) NOT NULL,
  `maju_sidang` varchar(500) NOT NULL,
  `komentar_maju_sidang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_sidang`
--

CREATE TABLE `tbl_penilaian_sidang` (
  `id` int(11) NOT NULL,
  `peran_dosen` varchar(15) NOT NULL,
  `materi_penilaian` varchar(2) NOT NULL,
  `pemahaman_teori` varchar(2) NOT NULL,
  `pemahaman_penelitian` varchar(2) NOT NULL,
  `pencapaian_target` varchar(2) NOT NULL,
  `aspek_kedisiplinan` varchar(2) NOT NULL,
  `teori_keilmuan` varchar(2) NOT NULL,
  `metode_penelitian` varchar(2) NOT NULL,
  `analisis_penelitian` varchar(2) NOT NULL,
  `teknik_presentasi` varchar(2) NOT NULL,
  `teknik_penulisan` varchar(2) NOT NULL,
  `pemahaman_software` varchar(2) NOT NULL,
  `revisi_saran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nid_r1` varchar(10) NOT NULL,
  `nid_r2` varchar(10) NOT NULL,
  `judul_skripsi` varchar(50) NOT NULL,
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

INSERT INTO `tbl_seminar` (`id`, `nim`, `email`, `peminatan`, `ta_aktif`, `nid_r1`, `nid_r2`, `judul_skripsi`, `hari_seminar`, `tgl_seminar`, `jam_seminar`, `tempat_seminar`, `status_seminar`, `lulus_review`) VALUES
(1, '3411171100', 'sista@unjani.com', 'DSE', '2020', '435453', '34535', 'Masi kala jao', 'selasa', '28', '1800', 'r29', 'lulus', '2020'),
(3, '3411171133', 'arjiabi@sista.com', 'DSE', '2020', '435453', '34535', 'Sistem pendukung keputusan dengan metode SAW', 'selasa', '28', '1800', 'r29', 'lulus', '2020');

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
  `khs` varchar(10) NOT NULL DEFAULT 'khs',
  `krs` varchar(10) NOT NULL DEFAULT 'krs',
  `status` varchar(10) DEFAULT NULL,
  `komentar_ta2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi_daftarta2`
--

INSERT INTO `tbl_verifikasi_daftarta2` (`id`, `nama_lengkap`, `email`, `nim`, `no_hp`, `semester`, `jk`, `peminatan`, `jumlah_sks_proses`, `jumlah_sks_lulus`, `ipk`, `jumlah_nilai_D`, `jumlah_nilai_E`, `judul_skripsi`, `pembimbing_1`, `pembimbing_2`, `khs`, `krs`, `status`, `komentar_ta2`) VALUES
(18, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'Mencoba daftar TA', 'THP', 'ECD', 'khs', 'krs', NULL, ''),
(19, 'Arji Abiyoga', 'arjiabi@sista.com', '3411171133', '085156152078', '7', 'L', 'DSE', '16', '130', '4.0', '2', '0', 'sistem pemdukung keputusan', 'WNI', 'ADK', 'khs', 'krs', NULL, 'test komentar');

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
  `status` varchar(20) DEFAULT NULL,
  `komentar_seminar` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi_seminar`
--

INSERT INTO `tbl_verifikasi_seminar` (`id`, `nama_lengkap`, `email`, `nim`, `no_hp`, `semester`, `jk`, `peminatan`, `jumlah_sks_proses`, `jumlah_sks_lulus`, `ipk`, `jumlah_nilai_D`, `jumlah_nilai_E`, `judul_skripsi`, `pembimbing_1`, `pembimbing_2`, `jml_bimbingan1`, `jml_bimbingan2`, `pelunasan`, `bukti_lunas`, `matkul_sedang_diambil`, `draft_laporan`, `khs`, `sertifikat`, `status`, `komentar_seminar`) VALUES
(8, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'nyoba persetujuan seminar', 'ADK', 'ECD', '23', '2', 'Lunas', 'KRS1.PNG', 'ECD', 'KRS1.PNG', 'KRS1.PNG', 'KRS1.PNG', NULL, ''),
(9, 'Arji Abiyoga', 'arjiabi@sista.com', '3411171133', '085156152078', '7', 'L', 'DSE', '16', '130', '4.0', '2', '0', 'sistem pemdukung keputusan', 'WNI', 'ADK', '6', '6', 'Lunas', 'Screenshot_20201009-191459.jpg', 'ADK', 'Screenshot_20201009-191459.jpg', 'Screenshot_20201009-191459.jpg', 'Screenshot_20201009-191459.jpg', NULL, 'test komentar daftar seminar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifikasi_sidang`
--

CREATE TABLE `tbl_verifikasi_sidang` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `judul_skripsi` varchar(255) NOT NULL,
  `kd_pembimbing1` varchar(3) NOT NULL,
  `kd_pembimbing2` varchar(3) NOT NULL,
  `kd_penguji1` varchar(3) NOT NULL,
  `kd_penguji2` varchar(3) NOT NULL,
  `izin_maju_p1` varchar(5) NOT NULL,
  `bukti_izin_p1` varchar(50) NOT NULL,
  `izin_maju_p2` varchar(5) NOT NULL,
  `bukti_izin_p2` varchar(50) NOT NULL,
  `izin_maju_r1` varchar(5) NOT NULL,
  `bukti_izin_r1` varchar(50) NOT NULL,
  `izin_maju_r2` varchar(5) NOT NULL,
  `bukti_izin_r2` varchar(50) NOT NULL,
  `link_seminar` varchar(255) NOT NULL,
  `pinjam_perpus` varchar(255) NOT NULL,
  `khs` varchar(255) NOT NULL,
  `nilai_kosong` varchar(255) NOT NULL,
  `draft_laporan` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `status` varchar(11) DEFAULT NULL,
  `komentar_sidang` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi_sidang`
--

INSERT INTO `tbl_verifikasi_sidang` (`id`, `nama_lengkap`, `email`, `nim`, `judul_skripsi`, `kd_pembimbing1`, `kd_pembimbing2`, `kd_penguji1`, `kd_penguji2`, `izin_maju_p1`, `bukti_izin_p1`, `izin_maju_p2`, `bukti_izin_p2`, `izin_maju_r1`, `bukti_izin_r1`, `izin_maju_r2`, `bukti_izin_r2`, `link_seminar`, `pinjam_perpus`, `khs`, `nilai_kosong`, `draft_laporan`, `sertifikat`, `status`, `komentar_sidang`) VALUES
(3, 'P Mahardika', 'sista@unjani.com', '3411171100', 'nyoba persetujuan tugas akhir', 'FZR', 'EKP', 'FZR', 'FZR', 'Ya', 'status.PNG', 'Ya', 'status.PNG', 'Ya', 'status.PNG', 'Ya', 'status.PNG', 'asdasdsad', 'status.PNG', 'status.PNG', 'asdads', 'status.PNG', 'status.PNG', NULL, ''),
(4, 'Arji Abiyoga', 'arjiabi@sista.com', '3411171133', 'sistem pemdukung keputusan', 'WNI', 'ADK', 'AGK', 'AGK', 'Ya', 'IMG-20201112-WA001415.jpg', 'Ya', 'IMG-20201112-WA001415.jpg', 'Ya', 'IMG-20201112-WA001415.jpg', 'Ya', 'IMG-20201112-WA001415.jpg', 'facebook.com', 'IMG-20201112-WA001415.jpg', 'IMG-20201112-WA001415.jpg', 'lagi ngulang', 'IMG-20201112-WA001415.jpg', 'IMG-20201112-WA001415.jpg', NULL, 'test komentar daftar sidang');

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
(2, '::1', 'administrator', '$2y$12$XqhuVu4SxsKfewLgezJTBOpx.2cT5MxLTZV2cNebwJDkMvH8AUsQ6', 'dikaarji@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602832500, 1605532966, 1, 'Dika', 'Arji', 'Unjani', '081902060468'),
(5, '::1', NULL, '$2y$10$vKeCuVJO9coW1vCw5eDm7eZUWXwWDGlLD8GvUDDKFeinZoBFUlC3q', 'arjiabiyoga99@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1604304557, 1605247466, 1, 'arji', 'abiyoga', 'Unjani', '085176548790'),
(8, '::1', NULL, '$2y$10$DzMaSJmMtvGfZj2jpbHhMu5tRUo/dztOQPVOoNWYwmzjGMlAr5ycy', 'sista@unjani.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1604851430, 1605537732, 1, 'Muhammad P', 'Mahardika', 'Unjani', '123123123123'),
(9, '::1', NULL, '$2y$10$wEcGeZFZNbTvKDHfWg46L.cqQSM00mMIUHfuEDyFyybfdy6DmOGOu', 'pembimbing@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605258309, 1605492636, 1, 'nyoba', 'pembimbing', 'Unjani', '081902060468'),
(10, '::1', NULL, '$2y$10$DE5ondXLd7jxLeWTVI7kOelYMExvfx.roeX8ph7Lu89KirU2n81xG', 'koordinator@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605258973, 1605537809, 1, 'nyoba', 'koordinator', 'Unjani', '081902060468'),
(11, '::1', NULL, '$2y$10$KUvHyV/secTLbp4iqPts4ue5GOijMGrBbAta28BqrIaYH.LX5dysW', 'penguji@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605259370, 1605492676, 1, 'nyoba', 'Penguji', 'Unjani', '081902060468'),
(12, '::1', NULL, '$2y$10$tojauPT5fRDJ2kgH/z.n0.WKkimG522P3BO7LA/t0jMyatYXpmeJu', 'arjiabi@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605533022, 1605539021, 1, 'Arji', 'Abiyoga', 'Unjani', '085156152078');

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
(28, 11, 8),
(30, 12, 4);

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
-- Indexes for table `tbl_data_pembimbing`
--
ALTER TABLE `tbl_data_pembimbing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data_penguji`
--
ALTER TABLE `tbl_data_penguji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengajuan_seminar`
--
ALTER TABLE `tbl_pengajuan_seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengajuan_sidang`
--
ALTER TABLE `tbl_pengajuan_sidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penilaian_seminar`
--
ALTER TABLE `tbl_penilaian_seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penilaian_sidang`
--
ALTER TABLE `tbl_penilaian_sidang`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_verifikasi_sidang`
--
ALTER TABLE `tbl_verifikasi_sidang`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_data_koordinator`
--
ALTER TABLE `tbl_data_koordinator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_data_pembimbing`
--
ALTER TABLE `tbl_data_pembimbing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_data_penguji`
--
ALTER TABLE `tbl_data_penguji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pengajuan_seminar`
--
ALTER TABLE `tbl_pengajuan_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pengajuan_sidang`
--
ALTER TABLE `tbl_pengajuan_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_penilaian_seminar`
--
ALTER TABLE `tbl_penilaian_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penilaian_sidang`
--
ALTER TABLE `tbl_penilaian_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_verifikasi_daftarta2`
--
ALTER TABLE `tbl_verifikasi_daftarta2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_verifikasi_seminar`
--
ALTER TABLE `tbl_verifikasi_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_verifikasi_sidang`
--
ALTER TABLE `tbl_verifikasi_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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