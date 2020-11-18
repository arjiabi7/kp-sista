-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 06:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
(2, '3411171133', 'arji@sista.com', '140', '16', '0', '0', '4.0');

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
('3411171133', 'Arji Abiyoga', 'arji@sista.com', '0896123456', '7', 'L', 'DSE', 'Aktif');

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
(1, 'HAY', 'pembimbing@sista.com', 'Herdi Ashaury');

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
-- Table structure for table `tbl_jadwal_seminar`
--

CREATE TABLE `tbl_jadwal_seminar` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `hari_seminar` varchar(10) NOT NULL,
  `tgl_seminar` varchar(20) NOT NULL,
  `jam_seminar` varchar(10) NOT NULL,
  `tempat_seminar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(14, 'P Mahardika', 'sista@unjani.com', '3411171100', '16', '130', '2', '0', '3.3', 'kopi itut enak', 'SETUJU', 'sudah bagus juga'),
(16, 'Arji Abiyoga', 'arji@sista.com', '3411171133', '16', '140', '0', '0', '4.0', 'sistem pindah agama', 'SETUJU', 'sok atuh');

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
(4, 'P Mahardika', 'sista@unjani.com', '3411171100', '16', '130', '2', '0', '3.3', 'tadi kan udah nyoba', 'SETUJU', 'wow'),
(5, 'Arji Abiyoga', 'arji@sista.com', '3411171133', '16', '140', '0', '0', '4.0', 'asdasd', 'SETUJU', 'sok weh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_seminar`
--

CREATE TABLE `tbl_penilaian_seminar` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kd_penguji` varchar(3) NOT NULL,
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

--
-- Dumping data for table `tbl_penilaian_seminar`
--

INSERT INTO `tbl_penilaian_seminar` (`id`, `nama_lengkap`, `nim`, `email`, `kd_penguji`, `peran_dosen`, `pemahaman_teori`, `komentar_pemahaman_teori`, `pemahaman_kebutuhan`, `komentar_pemahaman_kebutuhan`, `pemahaman_pl`, `komentar_pemahaman_pl`, `maju_sidang`, `komentar_maju_sidang`) VALUES
(1, 'Mahardika', '3411171107', 'sista@unjani.com', 'UNC', 'Pembimbing 1', 'Paham', 'Wah bagus sih', 'Paham', 'Wagelaseh', 'Paham', 'woaaw', 'Maju', 'wakwaw'),
(2, 'Mahardika', '3411171107', 'sista@unjani.com', 'AHY', 'Pembimbing 1', 'Paham', 'sdsd', 'Paham', 'sdsd', 'Paham', 'sdsd', 'Maju', 'sdsds'),
(3, 'Arji Abiyoga', '3411171133', 'arji@sista.com', 'UNC', 'Pembimbing 1', 'Paham', 'asdasdasd', 'Paham', 'asdasdasd', 'Paham', 'asdasdad', 'Maju', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_sidang`
--

CREATE TABLE `tbl_penilaian_sidang` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kd_penguji` varchar(3) NOT NULL,
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

--
-- Dumping data for table `tbl_penilaian_sidang`
--

INSERT INTO `tbl_penilaian_sidang` (`id`, `nama_lengkap`, `nim`, `email`, `kd_penguji`, `peran_dosen`, `materi_penilaian`, `pemahaman_teori`, `pemahaman_penelitian`, `pencapaian_target`, `aspek_kedisiplinan`, `teori_keilmuan`, `metode_penelitian`, `analisis_penelitian`, `teknik_presentasi`, `teknik_penulisan`, `pemahaman_software`, `revisi_saran`) VALUES
(1, 'Mahardika', '3411171107', 'sista@unjani.com', 'UNC', 'Penguji 1', '30', '15', '15', '20', '20', '20', '15', '20', '10', '10', '10', 'wowww'),
(2, 'Mahardika', '3411171107', 'sista@unjani.com', 'AHY', 'Pembimbing 1', '30', '15', '15', '20', '20', '20', '15', '20', '10', '10', '10', 'sadsadas'),
(3, 'Arji Abiyoga', '3411171133', 'arji@sista.com', 'UNC', 'Pembimbing 1', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', 'askdjhjkahsd');

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
(2, '3411171133', 'arjiabiyoga99@gmail.com', 'DSE', 'genap 2020', '343434', '3434343', 'coba aja dulu', 'senin', '23 nov 202', '19.00', 'r.1-3', 'lulus', '2019');

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
  `status` varchar(20) DEFAULT NULL,
  `komentar_ta2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi_daftarta2`
--

INSERT INTO `tbl_verifikasi_daftarta2` (`id`, `nama_lengkap`, `email`, `nim`, `no_hp`, `semester`, `jk`, `peminatan`, `jumlah_sks_proses`, `jumlah_sks_lulus`, `ipk`, `jumlah_nilai_D`, `jumlah_nilai_E`, `judul_skripsi`, `pembimbing_1`, `pembimbing_2`, `khs`, `krs`, `status`, `komentar_ta2`) VALUES
(22, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'MEMBUAT KOPI ITU ENAK', 'HAY', 'PNS', 'khs', 'krs', 'SETUJU', 'sudah bagus'),
(25, 'Arji Abiyoga', 'arji@sista.com', '3411171133', '0896123456', '7', 'L', 'DSE', '16', '140', '4.0', '0', '0', 'sistem pindah agama', 'ADK', 'EKP', 'khs', 'krs', 'SETUJU', 'bagus baguys');

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
  `komentar_seminar` varchar(300) DEFAULT NULL,
  `hari_seminar` varchar(10) DEFAULT NULL,
  `tgl_seminar` varchar(15) DEFAULT NULL,
  `jam_seminar` varchar(15) DEFAULT NULL,
  `tempat_seminar` varchar(30) DEFAULT NULL,
  `kd_penguji1` varchar(3) DEFAULT NULL,
  `kd_penguji2` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi_seminar`
--

INSERT INTO `tbl_verifikasi_seminar` (`id`, `nama_lengkap`, `email`, `nim`, `no_hp`, `semester`, `jk`, `peminatan`, `jumlah_sks_proses`, `jumlah_sks_lulus`, `ipk`, `jumlah_nilai_D`, `jumlah_nilai_E`, `judul_skripsi`, `pembimbing_1`, `pembimbing_2`, `jml_bimbingan1`, `jml_bimbingan2`, `pelunasan`, `bukti_lunas`, `matkul_sedang_diambil`, `draft_laporan`, `khs`, `sertifikat`, `status`, `komentar_seminar`, `hari_seminar`, `tgl_seminar`, `jam_seminar`, `tempat_seminar`, `kd_penguji1`, `kd_penguji2`) VALUES
(9, 'P Mahardika', 'sista@unjani.com', '3411171100', '089698762991', '7', 'L', 'DSE', '16', '130', '3.3', '2', '0', 'MEMBUAT KOPI ITU ENAK', 'HAY', 'PNS', '23', '2', 'Lunas', 'SURAT_KUASA_PENGAMBILAN_BPKB_MOTOR.pdf', 'PNS', 'SURAT_KUASA_PENGAMBILAN_BPKB_MOTOR.pdf', 'SURAT_KUASA_PENGAMBILAN_BPKB_MOTOR.pdf', 'SURAT_KUASA_PENGAMBILAN_BPKB_MOTOR.pdf', 'SETUJU', 'sudah baik', 'Jumat', '2020-11-18', '20.00', 'R.1-2', 'RZK', 'YHC'),
(10, 'Arji Abiyoga', 'arji@sista.com', '3411171133', '0896123456', '7', 'L', 'DSE', '16', '140', '4.0', '0', '0', 'sistem pindah agama', 'ADK', 'EKP', '6', '6', 'Lunas', 'ATV312_programming_manual_EN_BBV46385_043.pdf', 'EKP', 'ATV312_programming_manual_EN_BBV46385_043.pdf', 'ATV312_programming_manual_EN_BBV46385_043.pdf', 'ATV312_programming_manual_EN_BBV46385_043.pdf', 'SETUJU', 'asdasd', 'serah lu', '2020-11-04', 'serah lu dah', 'warteg juga gapapa', 'YHC', 'THP');

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
  `komentar_sidang` varchar(300) DEFAULT NULL,
  `hari_sidang` varchar(10) DEFAULT NULL,
  `tgl_sidang` varchar(15) DEFAULT NULL,
  `jam_sidang` varchar(10) DEFAULT NULL,
  `tempat_sidang` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_verifikasi_sidang`
--

INSERT INTO `tbl_verifikasi_sidang` (`id`, `nama_lengkap`, `email`, `nim`, `judul_skripsi`, `kd_pembimbing1`, `kd_pembimbing2`, `kd_penguji1`, `kd_penguji2`, `izin_maju_p1`, `bukti_izin_p1`, `izin_maju_p2`, `bukti_izin_p2`, `izin_maju_r1`, `bukti_izin_r1`, `izin_maju_r2`, `bukti_izin_r2`, `link_seminar`, `pinjam_perpus`, `khs`, `nilai_kosong`, `draft_laporan`, `sertifikat`, `status`, `komentar_sidang`, `hari_sidang`, `tgl_sidang`, `jam_sidang`, `tempat_sidang`) VALUES
(6, 'P Mahardika', 'sista@unjani.com', '3411171100', 'MEMBUAT KOPI ITU ENAK', 'HAY', 'PNS', 'ECD', 'ECD', 'Ya', 'dddddd5.jpg', 'Ya', 'dddddd5.jpg', 'Ya', 'dddddd5.jpg', 'Ya', 'dddddd5.jpg', 'asdasdsadsadsad', 'dddddd5.jpg', 'dddddd5.jpg', 'ghghhf', 'dddddd5.jpg', 'dddddd5.jpg', 'SETUJU', 'bagussss', 'Jumat', '2020-11-19', '20.00', 'R.1-3'),
(7, 'Arji Abiyoga', 'arji@sista.com', '3411171133', 'sistem pindah agama', 'ADK', 'EKP', 'AGK', 'AGK', 'Ya', 'ATV312_programming_manual_EN_BBV46385_047.pdf', 'Ya', 'ATV312_programming_manual_EN_BBV46385_047.pdf', 'Ya', 'ATV312_programming_manual_EN_BBV46385_047.pdf', 'Ya', 'ATV312_programming_manual_EN_BBV46385_047.pdf', 'xnx.ccom', 'ATV312_programming_manual_EN_BBV46385_047.pdf', 'ATV312_programming_manual_EN_BBV46385_047.pdf', 'lkasd', 'ATV312_programming_manual_EN_BBV46385_047.pdf', 'ATV312_programming_manual_EN_BBV46385_047.pdf', 'SETUJU', 'asdasd', 'asdasd', '2020-11-03', 'asdasd', 'asdasd');

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
(2, '::1', 'administrator', '$2y$12$XqhuVu4SxsKfewLgezJTBOpx.2cT5MxLTZV2cNebwJDkMvH8AUsQ6', 'dikaarji@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602832500, 1605619857, 1, 'Dika', 'Arji', 'Unjani', '081902060468'),
(5, '::1', NULL, '$2y$10$vKeCuVJO9coW1vCw5eDm7eZUWXwWDGlLD8GvUDDKFeinZoBFUlC3q', 'arjiabiyoga99@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1604304557, 1605247466, 1, 'arji', 'abiyoga', 'Unjani', '085176548790'),
(8, '::1', NULL, '$2y$10$DzMaSJmMtvGfZj2jpbHhMu5tRUo/dztOQPVOoNWYwmzjGMlAr5ycy', 'sista@unjani.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1604851430, 1605607773, 1, 'Muhammad P', 'Mahardika', 'Unjani', '123123123123'),
(9, '::1', NULL, '$2y$10$wEcGeZFZNbTvKDHfWg46L.cqQSM00mMIUHfuEDyFyybfdy6DmOGOu', 'pembimbing@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605258309, 1605632862, 1, 'nyoba', 'pembimbing', 'Unjani', '081902060468'),
(10, '::1', NULL, '$2y$10$DE5ondXLd7jxLeWTVI7kOelYMExvfx.roeX8ph7Lu89KirU2n81xG', 'koordinator@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605258973, 1605621926, 1, 'nyoba', 'koordinator', 'Unjani', '081902060468'),
(11, '::1', NULL, '$2y$10$KUvHyV/secTLbp4iqPts4ue5GOijMGrBbAta28BqrIaYH.LX5dysW', 'penguji@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605259370, 1605631388, 1, 'nyoba', 'Penguji', 'Unjani', '081902060468'),
(12, '::1', NULL, '$2y$10$IPp6rHyb5kQNo32W6HC.5OaCg1soHtrNIUFztrSLdM69nVZPY9Et.', 'arji@sista.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1605619877, 1605630685, 1, 'Arji', 'Abiyoga', 'Unjani', '08967975123');

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
-- Indexes for table `tbl_jadwal_seminar`
--
ALTER TABLE `tbl_jadwal_seminar`
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
-- AUTO_INCREMENT for table `tbl_jadwal_seminar`
--
ALTER TABLE `tbl_jadwal_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengajuan_seminar`
--
ALTER TABLE `tbl_pengajuan_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_pengajuan_sidang`
--
ALTER TABLE `tbl_pengajuan_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_penilaian_seminar`
--
ALTER TABLE `tbl_penilaian_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_penilaian_sidang`
--
ALTER TABLE `tbl_penilaian_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_verifikasi_daftarta2`
--
ALTER TABLE `tbl_verifikasi_daftarta2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_verifikasi_seminar`
--
ALTER TABLE `tbl_verifikasi_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_verifikasi_sidang`
--
ALTER TABLE `tbl_verifikasi_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
