-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2023 pada 14.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anakos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kos`
--

CREATE TABLE `tb_kos` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(150) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `harga_kos` varchar(150) NOT NULL,
  `min_bayar` varchar(200) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kos`
--

INSERT INTO `tb_kos` (`id`, `nama_pemilik`, `no_telpon`, `harga_kos`, `min_bayar`, `alamat`, `foto`) VALUES
(4, 'Wildan Mursalin Rizqia', '082127312767', 'Rp. 780.000', '3 Bulan', 'Sleman, Yogyakarta', 'WhatsApp Image 2023-10-09 at 14.51.10_a788d5b2.jpg'),
(18, 'Faizya Qori Surya Baeti', '087968746763', 'Rp. 850.000', '1 Bulan', 'Yogyakarta', 'WhatsApp Image 2023-10-20 at 21.26.44_58dc4554.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kos`
--
ALTER TABLE `tb_kos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kos`
--
ALTER TABLE `tb_kos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
