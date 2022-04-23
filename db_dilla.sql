-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2022 pada 09.24
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dilla`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_033`
--

CREATE TABLE `tbl_033` (
  `id_033` int(11) NOT NULL,
  `nama_033` varchar(13) DEFAULT NULL,
  `email_033` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_033`
--

INSERT INTO `tbl_033` (`id_033`, `nama_033`, `email_033`) VALUES
(7, 'dila 123', 'ggg 123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_033`
--
ALTER TABLE `tbl_033`
  ADD PRIMARY KEY (`id_033`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_033`
--
ALTER TABLE `tbl_033`
  MODIFY `id_033` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
