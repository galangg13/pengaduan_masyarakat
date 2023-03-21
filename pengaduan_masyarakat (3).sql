-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mar 2023 pada 10.57
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(11, 'Perhubungan	'),
(12, 'Kesehatan'),
(13, 'Pelanggaran Peraturan Daerah	'),
(14, 'Perizinan'),
(15, 'Sosial'),
(16, 'Perpajakan'),
(17, 'Komunikasi dan Informatika	'),
(18, 'Kepegawaian'),
(19, 'Pelayanan Kecamatan '),
(20, 'pendidikan'),
(21, 'sarana umum	'),
(22, 'saluran air	'),
(23, 'Kejahatan	'),
(27, 'prasarana umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama`, `username`, `password`, `telepon`) VALUES
(21, '34345345345', 'papa', 'papa', '$2y$10$qoTTOc8/TEV0Fq1w5Oy9i.3HRKkGOtDRxc2RuZHRGm6lAzwSTsamC', '4238472340271'),
(22, '11223344', 'user', 'user', '$2y$10$AU6w0Fm28n07Te/CQEGxZuilAocLVlCy.LNDRmqLS4XwoPhw5Kw0e', '2394324823942'),
(31, 'abc', 'sidik', 'sidik', '$2y$10$QCTrh17uWSMVu6JSJRFh7.uk.oP4isbx2hNoS8D7EZnI2ivIeHiRS', '1111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `sub_kategori` varchar(255) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('segera','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `id_pengaduan`, `id_kategori`, `tgl_pengaduan`, `nik`, `kategori`, `sub_kategori`, `isi_laporan`, `foto`, `status`) VALUES
(15, 0, 11, '2023-03-20', '', '11', '16', 'haha', 'man.png', 'proses'),
(16, 0, 17, '2023-03-21', '', '17', '23', 'kesalahan teknis\r\n', 'ss2.png', 'segera'),
(17, 0, 12, '2023-03-21', '', '12', '18', 'ya', 'logo_a.png', 'segera'),
(18, 0, 16, '2023-03-21', '', '16', '22', 'kjnjn', 'profile-img.jpg', 'segera'),
(19, 0, 14, '2023-03-21', '', '14', '20', 'pengaduan', '6.jpg', 'segera'),
(20, 0, 23, '2023-03-21', '', '23', '29', 'pengaduan2', '35388450747d66cc94e19c96af601c94.jpg', 'segera'),
(21, 0, 19, '2023-03-21', '', '19', '25', 'sidik', 'Judul.docx', 'segera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(7, 'petugas', 'petugas', '$2y$10$wbST3cS0T6bb7NxJaYr32O9tE', '09988776', 'admin'),
(13, 'admin2', 'admin2', '$2y$10$r.MrdFWqiQIr2ul3jXP8mO6jQ', '120932173', 'admin'),
(14, 'petugas2', 'petugas2', '$2y$10$QEccR2lmbkZ5dfI6lMfVKOpYK', '021903190', 'petugas'),
(15, 'petugas22', 'petugas22', '$2y$10$2NJiFvpYQRdz6Z5zCGNk0uKC5', '536346363636', 'admin'),
(16, 'petu', 'petu', '$2y$10$qm1DeaHFPsxQj0j7LqBwRuw5N', '5213213', 'admin'),
(17, 'adminn', 'adminn', '$2y$10$E/N7mgY5OTQcd4rLgH.Jh.BSG', '213291031', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id_subkategori` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `sub_kategori` varchar(156) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_subkategori`, `id_kategori`, `sub_kategori`) VALUES
(10, 9, 'hhhh'),
(12, 24, 'gfggfhfhgf'),
(13, 26, 'rttyrtrtrt'),
(14, 9, 'kakap'),
(17, 11, 'pelaksanaan '),
(18, 12, 'ambulance/rumah sakit'),
(19, 13, 'pelanggaran hak'),
(20, 14, 'pengizinan'),
(21, 15, 'kampung/kecamatan'),
(22, 16, 'pengurusan pajak'),
(23, 17, 'informasi teknik'),
(24, 18, 'pegawai'),
(25, 19, 'tempat ramai'),
(26, 20, 'tingkat pendidikan'),
(27, 21, 'transportasi umum'),
(28, 22, 'sungai&got mampet'),
(29, 23, 'pencurian,pembunuhan'),
(30, 27, 'transportasi umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id` int(11) NOT NULL,
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_subkategori`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_subkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
