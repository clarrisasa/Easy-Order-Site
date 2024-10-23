-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 04.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makan`
--

CREATE TABLE `makan` (
  `nama` varchar(50) NOT NULL,
  `nmrmeja` varchar(10) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `pesanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `makan`
--

INSERT INTO `makan` (`nama`, `nmrmeja`, `hp`, `pesanan`) VALUES
('', '', '', ''),
('cindy helmaliana', '1', '08110002211', 'Donut MIX'),
('Clarrisa Fitria Ardianti', '2', '085232931056', 'spageti, bluberry cake'),
('fatimatus zahro', '3', '08110002203', 'cupcake, nasi goreng, cupcake'),
('haninda agyanti', '4', '08110002211', 'croisant, salad mix, tiramisu cake,cupcake'),
('Nauval', '8', '085232931056', 'donut, cupcake, mie goreng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minum`
--

CREATE TABLE `minum` (
  `nama` varchar(50) NOT NULL,
  `nmrmeja` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `minum`
--

INSERT INTO `minum` (`nama`, `nmrmeja`, `hp`, `pesan`) VALUES
('cindy helmaliana', '1', '08110002211', 'ice jeruk nipis, black coffe'),
('Clarrisa Fitria Ardianti', '2', '085232931056', 'mixed berry, black coffe'),
('fatimatus zahro', '3', '08110002203', 'ice teh, character coffe, ice semangka, small ice cream'),
('haninda agyanti', '4', '08110002211', 'frambos semangka, small ice cream'),
('Nauval', '8', '085232931056', 'ice tea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paradise`
--

CREATE TABLE `paradise` (
  `nama` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `orang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paradise`
--

INSERT INTO `paradise` (`nama`, `ktp`, `hp`, `orang`) VALUES
('', '', '', ''),
('cindy helmaliana', '215678554436', '08110002211', '1'),
('Clarrisa Fitria Ardianti', '3502067834562002', '085232931056', '2'),
('fatimatus zahro', '2122789067800033', '08110002211', '3'),
('haninda agyanti', '3502067834562002', '08110002211', '4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makan`
--
ALTER TABLE `makan`
  ADD PRIMARY KEY (`nmrmeja`);

--
-- Indeks untuk tabel `minum`
--
ALTER TABLE `minum`
  ADD PRIMARY KEY (`nmrmeja`);

--
-- Indeks untuk tabel `paradise`
--
ALTER TABLE `paradise`
  ADD PRIMARY KEY (`orang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
