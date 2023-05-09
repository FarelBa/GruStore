-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2023 pada 03.56
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_legend`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diamond`
--

CREATE TABLE `diamond` (
  `id` int(11) NOT NULL,
  `jumlah_diamond` int(11) DEFAULT NULL,
  `jenis_produk` varchar(50) DEFAULT 'Diamond',
  `harga` decimal(10,2) AS (`jumlah_diamond` * 300 / 1) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diamond`
--

INSERT INTO `diamond` (`id`, `jumlah_diamond`, `jenis_produk`) VALUES
(1, 5, 'Diamond'),
(4, 10, 'Diamond'),
(5, 20, 'Diamond'),
(6, 40, 'Diamond'),
(7, 80, 'Diamond'),
(8, 160, 'Diamond'),
(9, 320, 'Diamond'),
(10, 640, 'Diamond'),
(11, 1280, 'Diamond'),
(12, 2560, 'Diamond'),
(13, 5120, 'Diamond'),
(14, 10240, 'Diamond'),
(15, 20480, 'Diamond'),
(16, 40960, 'Diamond'),
(17, 81920, 'Diamond'),
(18, 163840, 'Diamond');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pembelian`
--

CREATE TABLE `riwayat_pembelian` (
  `id` int(11) NOT NULL,
  `alamat_email` varchar(255) DEFAULT NULL,
  `jenis_game` varchar(255) DEFAULT NULL,
  `id_game` int(11) DEFAULT NULL,
  `id_zone` int(11) DEFAULT NULL,
  `jumlah_diamond` int(11) DEFAULT NULL,
  `tanggal_pembelian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_harga` int(11) AS (`jumlah_diamond` * 300) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pembelian`
--

INSERT INTO `riwayat_pembelian` (`id`, `alamat_email`, `jenis_game`, `id_game`, `id_zone`, `jumlah_diamond`, `tanggal_pembelian`) VALUES
(1, 'farelabdulah31@gmail.com', 'Mobile Legend', 717171, 7171, 163840, '2023-05-08 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat_pembelian`
--
ALTER TABLE `riwayat_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat_pembelian`
--
ALTER TABLE `riwayat_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
