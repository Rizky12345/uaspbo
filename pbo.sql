-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2022 pada 03.07
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `type_id` int(12) NOT NULL,
  `day` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `tanggal`, `type_id`, `day`) VALUES
(13, 'rizky', '2022/12/02', 4, 3),
(14, 'wer', '2020/06/30', 1, 3),
(15, 'rizky julian ricaldy', '2022/01/18', 2, 2),
(16, 'rizky julian ricaldy', '2022/01/18', 2, 2),
(17, 'rizky julian ricaldy', '2022/01/18', 3, 0),
(18, 'asd', '2022/01/18', 2, 3),
(19, 'rizky julian ricaldy', '2022/01/19', 2, 3),
(20, 'rizky julian ricaldy', '2022/01/19', 2, 3),
(21, 'rizky julian ricaldy', '2022/01/19', 2, 4),
(22, 'rizky julian ricaldy', '2022/01/19', 2, 4),
(23, 'rizky julian ricaldy', '2022/01/19', 2, 4),
(24, 'wer', '2022/01/19', 3, 4),
(25, 'wer', '2022/01/19', 3, 4),
(26, 'dsf', '2022/01/19', 2, 2),
(27, 'asd', '2022/01/19', 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `id` int(12) NOT NULL,
  `type` varchar(12) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`id`, `type`, `harga`) VALUES
(1, 'Single', 300000),
(2, 'Double', 500000),
(3, 'Family', 1000000),
(4, 'Suite', 1500000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
