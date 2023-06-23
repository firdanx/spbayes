-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jun 2023 pada 23.16
-- Versi server: 8.0.30
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `works_sp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `nilai` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `kode`, `nama_gejala`, `nilai`) VALUES
(30, 'G001', 'Batuk terus menerus dengan dahak selama tiga minggu atau lebih.', 0.50),
(31, 'G002', 'Dahak bercampur darah.', 0.70),
(32, 'G003', 'Sesak napas dan nyeri di dada.', 0.40),
(33, 'G004', 'Badan lemah, nafsu makan menurun, dan berat badan juga menurun.', 0.60),
(34, 'G005', 'Keringat pada waktu malam hari walaupun tanpa aktivitas.', 0.20),
(35, 'G006', 'Demam meriang ( demam ringan) lebih dari sebulan.', 0.60),
(36, 'G007', 'Munculnya benjolan di area leher, ketiak, dan lipatan paha.', 0.60),
(37, 'G008', 'Diare berulang ulang yang tidak sembuh dengan obat diare biasa.', 0.20),
(38, 'G009', 'Bila terjadi sumbatan sebagian bronkus (saluran yang menuju paru-paru) akibat penekanan kelenjar getah bening yang membesar akan menimbulkan suara mengi (suara napas melemah) disertai sesak.', 0.40),
(39, 'G010', 'Kalau ada cairan di rongga pleura (pembungkus paru-paru), dapat disertai dengan keluhan sakit dada.', 0.40),
(40, 'G011', 'Bila mengenai tulang, maka akan terjadi gejala seperti infeksi tulang yang pada suatu saat dapat membentuk saluran dan bermuara pada kulit diatasnya, pada muara ini akan keluar cairan nanah.', 0.80),
(42, 'G012', 'Pada anak-anak dapat mengenai otak (lapisan pembungkus otak) dan disebut sebagai meningitis (radang selaput otak), gejalanya adalah demam tinggi, adanya penurunan kesadaran dan kejang kejang ', 0.80),
(43, 'G013', 'Adanya scrophuloderma atau TBC kulit (seperti koreng yang kronis dan tak kunjung sembuh).', 0.80),
(44, 'G014', 'Adanya phlycternular conjungtivitis (kadang di mata ada merah, lalu ada bintik putih),', 0.20),
(45, 'G015', 'Adanya specific lymphadenopathy (pembesaran kelenjar getah bening di leher).', 0.80),
(46, 'G016', 'Pada TBC, biasanya kelenjar yang membesar akan berderet atau lebih dari satu.', 0.40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `id` int NOT NULL,
  `gejala_id` int NOT NULL,
  `penyakit_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala_penyakit`
--

INSERT INTO `gejala_penyakit` (`id`, `gejala_id`, `penyakit_id`) VALUES
(95, 30, 20),
(96, 31, 20),
(97, 32, 20),
(98, 33, 20),
(99, 34, 20),
(100, 35, 20),
(101, 38, 20),
(102, 39, 20),
(103, 34, 21),
(104, 36, 21),
(105, 43, 21),
(106, 44, 21),
(107, 45, 21),
(108, 36, 22),
(109, 37, 22),
(110, 46, 22),
(111, 33, 23),
(112, 40, 23),
(113, 33, 24),
(114, 35, 24),
(115, 42, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_diagnosa`
--

CREATE TABLE `hasil_diagnosa` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kepercayaan` float NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_diagnosa`
--

INSERT INTO `hasil_diagnosa` (`id`, `user_id`, `kode`, `nama`, `kepercayaan`, `keterangan`, `created_at`) VALUES
(194, 0, 'P004', 'TB Tulang', 58.24, 'Penyakit Tubercolosis  ini menyerang di bagian tulang belakang pada area toraks (bagian dada belakang).', '2023-06-23 15:59:55'),
(195, 0, 'P001', 'TB Paru', 59.11, 'Penyakit Tubercolosis  yang menyerang  dan terinfeksi di bagian paru paru.', '2023-06-23 16:00:51'),
(196, 0, 'P004', 'TB Tulang', 58.24, 'Penyakit Tubercolosis  ini menyerang di bagian tulang belakang pada area toraks (bagian dada belakang).', '2023-06-23 16:15:17'),
(197, 0, 'P001', 'TB Paru', 63.24, 'Penyakit Tubercolosis  yang menyerang  dan terinfeksi di bagian paru paru.', '2023-06-23 16:15:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `user_id` int NOT NULL,
  `gejala_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`user_id`, `gejala_id`, `created_at`) VALUES
(3, 5, '2018-08-30 10:39:41'),
(3, 6, '2018-08-30 10:39:41'),
(3, 11, '2018-08-30 10:39:41'),
(3, 12, '2018-08-30 10:39:41'),
(3, 8, '2018-08-30 10:41:04'),
(3, 7, '2018-08-30 10:41:04'),
(6, 7, '2018-08-30 11:18:05'),
(6, 9, '2018-08-30 11:18:05'),
(6, 10, '2018-08-30 11:18:05'),
(3, 10, '2018-08-30 13:01:09'),
(3, 11, '2018-08-30 13:01:09'),
(3, 1, '2018-08-30 15:43:26'),
(3, 2, '2018-08-30 15:43:26'),
(3, 3, '2018-08-30 15:43:26'),
(3, 1, '2018-08-30 15:45:11'),
(3, 4, '2018-08-30 15:45:11'),
(3, 5, '2018-08-30 15:45:11'),
(3, 6, '2018-08-30 15:45:11'),
(0, 9, '2018-08-31 07:08:35'),
(0, 10, '2018-08-31 07:08:35'),
(3, 16, '2018-09-04 14:34:02'),
(3, 17, '2018-09-04 14:34:02'),
(3, 18, '2018-09-04 14:34:02'),
(3, 20, '2018-09-04 14:34:02'),
(3, 16, '2018-09-04 14:34:32'),
(3, 17, '2018-09-04 14:34:32'),
(3, 18, '2018-09-04 14:34:32'),
(3, 20, '2018-09-04 14:34:32'),
(3, 32, '2018-09-04 14:34:32'),
(3, 33, '2018-09-04 14:34:32'),
(4, 1, '2018-09-05 00:22:36'),
(4, 2, '2018-09-05 00:22:36'),
(4, 3, '2018-09-05 00:22:36'),
(4, 28, '2018-09-05 00:41:54'),
(4, 31, '2018-09-05 00:41:54'),
(4, 32, '2018-09-05 00:41:54'),
(4, 28, '2018-09-05 00:44:03'),
(4, 31, '2018-09-05 00:44:03'),
(4, 32, '2018-09-05 00:44:03'),
(3, 1, '2018-09-05 09:16:38'),
(3, 2, '2018-09-05 09:16:38'),
(3, 3, '2018-09-05 09:16:38'),
(3, 4, '2018-09-05 09:16:38'),
(3, 1, '2018-09-05 10:12:03'),
(4, 1, '2018-09-07 12:56:57'),
(4, 2, '2018-09-07 12:56:57'),
(4, 3, '2018-09-07 12:56:57'),
(3, 30, '2018-09-22 16:20:50'),
(3, 33, '2018-09-22 16:34:33'),
(3, 30, '2018-09-22 16:34:33'),
(0, 1, '2020-01-28 03:56:02'),
(0, 18, '2020-01-28 03:56:02'),
(0, 1, '2020-01-28 03:57:43'),
(0, 18, '2020-01-28 03:57:43'),
(0, 1, '2020-01-28 03:57:47'),
(0, 18, '2020-01-28 03:57:47'),
(0, 1, '2020-01-28 03:58:03'),
(0, 18, '2020-01-28 03:58:03'),
(0, 1, '2020-01-28 03:58:53'),
(0, 2, '2020-01-28 03:58:53'),
(0, 3, '2020-01-28 03:58:53'),
(0, 4, '2020-01-28 03:58:53'),
(0, 15, '2020-01-28 03:58:53'),
(0, 17, '2020-01-28 03:58:53'),
(0, 33, '2020-01-28 03:58:53'),
(0, 35, '2020-01-28 03:58:53'),
(0, 36, '2020-01-28 03:58:53'),
(0, 4, '2020-01-28 04:48:40'),
(0, 5, '2020-01-28 04:48:40'),
(0, 6, '2020-01-28 04:48:40'),
(0, 9, '2020-01-28 04:48:40'),
(0, 10, '2020-01-28 04:48:40'),
(0, 11, '2020-01-28 04:48:40'),
(0, 15, '2020-01-28 04:48:40'),
(0, 31, '2020-01-28 04:48:40'),
(0, 32, '2020-01-28 04:48:40'),
(0, 33, '2020-01-28 04:48:40'),
(0, 35, '2020-01-28 04:48:40'),
(0, 36, '2020-01-28 04:48:40'),
(0, 4, '2020-06-16 08:07:25'),
(0, 11, '2020-06-16 08:07:25'),
(0, 35, '2020-06-16 08:07:25'),
(0, 2, '2020-06-16 08:22:23'),
(0, 3, '2020-06-16 08:22:23'),
(0, 1, '2020-06-18 08:11:44'),
(0, 2, '2020-06-18 08:11:44'),
(0, 3, '2020-06-18 08:11:44'),
(0, 5, '2020-06-25 13:23:27'),
(0, 6, '2020-06-25 13:23:27'),
(0, 7, '2020-06-25 13:23:27'),
(0, 29, '2023-06-22 15:38:16'),
(0, 29, '2023-06-22 15:40:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `nilai` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `nama`, `keterangan`, `nilai`) VALUES
(20, 'P001', 'TB Paru', 'Penyakit Tubercolosis  yang menyerang  dan terinfeksi di bagian paru paru.', 0.30),
(21, 'P002', 'TB Kulit', 'Penyakit Tubercolosis yang menyerang di bagian kulit, biasanya seperti koreng yang kronis yang tak kunjung sembuh.', 0.50),
(22, 'P003', 'TB Kelenjar', 'Penyakit Tubercolosis  yang menyerang di bagian getah bening, biasanya terjadi pembesaran getah bening di leher.', 0.60),
(23, 'P004', 'TB Tulang', 'Penyakit Tubercolosis  ini menyerang di bagian tulang belakang pada area toraks (bagian dada belakang).', 0.50),
(24, 'P005', 'TB Otak', 'Tubercolosis ini biasanya menyerang anak- anak dengan menyerang di bagian selaput otak atu biasa di sebut meningitis.', 0.40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`, `status`) VALUES
(4, 'juju', 'ee11cbb19052e40b07aac0ca060c23ee', 'Juwanda', 'juju@mail.com', 'admin', ''),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Firdana', 'firdan@mail.com', 'admin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userx`
--

CREATE TABLE `userx` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userx`
--

INSERT INTO `userx` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(3, 'pasien', 'f5c25a0082eb0748faedca1ecdcfb131', 'pasien1', 'hardiantix.1@gmail.com', 'pasien'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'hardianti', 'hardiantix.1@gmail.com', 'admin'),
(6, 'hardianti', '3843a08b3283e5603449b42a746ac973', 'hardianti', 'hardiantix.1@gmail.com', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_id` (`gejala_id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indeks untuk tabel `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `userx`
--
ALTER TABLE `userx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT untuk tabel `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `userx`
--
ALTER TABLE `userx`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD CONSTRAINT `gejala_penyakit_ibfk_1` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gejala_penyakit_ibfk_2` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
