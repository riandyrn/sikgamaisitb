-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2015 pada 09.05
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sikgamais`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL,
  `filename` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kader`
--

CREATE TABLE IF NOT EXISTS `kader` (
`id` int(11) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `nama_lengkap` text,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `angkatan` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat_libur` text,
  `alamat_bdg` text,
  `asal_sma` varchar(255) DEFAULT NULL,
  `kondisi_mentoring` int(255) DEFAULT '0' COMMENT 'belum ada kelompok - 0, tidak berjalan - 1, sudah mentoring - 2',
  `data_akademik` int(255) DEFAULT '0' COMMENT 'range kurang dri 1, diantara 1-2, diantara 2-3, diatas 3',
  `hobi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_kepanitiaan`
--

CREATE TABLE IF NOT EXISTS `riwayat_kepanitiaan` (
`id` int(11) NOT NULL,
  `id_kader` varchar(255) NOT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_organisasi`
--

CREATE TABLE IF NOT EXISTS `riwayat_organisasi` (
`id` int(11) NOT NULL,
  `id_kader` varchar(255) NOT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `organisasi` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pembinaan`
--

CREATE TABLE IF NOT EXISTS `riwayat_pembinaan` (
  `id` int(11) NOT NULL,
  `id_kader` varchar(255) NOT NULL,
  `agenda` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_kepanitiaan`
--
ALTER TABLE `riwayat_kepanitiaan`
 ADD PRIMARY KEY (`id`,`id_kader`);

--
-- Indexes for table `riwayat_organisasi`
--
ALTER TABLE `riwayat_organisasi`
 ADD PRIMARY KEY (`id`,`id_kader`);

--
-- Indexes for table `riwayat_pembinaan`
--
ALTER TABLE `riwayat_pembinaan`
 ADD PRIMARY KEY (`id`,`id_kader`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `riwayat_kepanitiaan`
--
ALTER TABLE `riwayat_kepanitiaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `riwayat_organisasi`
--
ALTER TABLE `riwayat_organisasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
