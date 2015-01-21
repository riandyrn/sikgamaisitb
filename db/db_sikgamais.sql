-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2015 pada 02.34
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `kader`
--

INSERT INTO `kader` (`id`, `nim`, `nama_lengkap`, `nama_panggilan`, `jurusan`, `angkatan`, `hp`, `email`, `tempat_lahir`, `tanggal_lahir`, `alamat_libur`, `alamat_bdg`, `asal_sma`, `kondisi_mentoring`, `data_akademik`, `hobi`) VALUES
(9, '13511014', 'Riandy Rahman Nugraha', 'Riandy', 'Teknik Informatika', '2011', '085793174788', 'riandyrn@gmail.com', 'Semarang', '0000-00-00', 'Komp. Graha Alam Raya W2/4, Margaluyu, Buah Batu, Bandung', 'Komp. Graha Alam Raya W2/4, Margaluyu, Buah Batu, Bandung', 'SMA Negeri 3 Bandung', 2, 3, 'Baca buku, main game'),
(10, '13212014', 'Syaiful Andy', 'Ipul', 'Teknik Elektro', '2012', '085793168799', 'syaifulandy@gmail.com', 'Cilacap', '0000-00-00', 'Jalan Ganesha no. 7', 'Jalan Ganesha no. 7', 'SMA Negeri 1 Cilacap', 1, 3, 'Ngoprek');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `riwayat_kepanitiaan`
--

INSERT INTO `riwayat_kepanitiaan` (`id`, `id_kader`, `tahun`, `kegiatan`, `jabatan`) VALUES
(1, '9', '2014', 'GIT', 'Akomtrans');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `riwayat_organisasi`
--

INSERT INTO `riwayat_organisasi` (`id`, `id_kader`, `tahun`, `organisasi`, `jabatan`) VALUES
(3, '9', '2014', 'Gamais ITB', 'Kepala Departemen G-TECH'),
(5, '10', '2014', 'Gamais ITB', 'Kepala Departemen G-TECH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pembinaan`
--

CREATE TABLE IF NOT EXISTS `riwayat_pembinaan` (
`id` int(11) NOT NULL,
  `id_kader` varchar(255) NOT NULL,
  `agenda` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `riwayat_pembinaan`
--

INSERT INTO `riwayat_pembinaan` (`id`, `id_kader`, `agenda`) VALUES
(7, '9', 'Simfoni Day 1'),
(8, '9', 'Simfoni Day 2'),
(9, '9', 'Simfoni Day 3');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `riwayat_kepanitiaan`
--
ALTER TABLE `riwayat_kepanitiaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `riwayat_organisasi`
--
ALTER TABLE `riwayat_organisasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `riwayat_pembinaan`
--
ALTER TABLE `riwayat_pembinaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
