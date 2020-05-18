-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2020 pada 13.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040118`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(2) NOT NULL,
  `img` varchar(50) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahunterbitan` int(20) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `img`, `judulbuku`, `pengarang`, `tahunterbitan`, `rating`) VALUES
(1, 'img1.jfif', 'NKCTHI', 'Marchella Febritrisia Putri', 2018, 9),
(2, 'img2.jfif', '5CM', 'Donny Dhirgantoro', 2005, 10),
(3, 'img3.jfif', 'Kami (bukan) sarjana kertas', 'J. S Khairen', 2019, 8),
(4, 'img4.jfif', '#Berhentidikamu', 'Gia Pratama', 2019, 8),
(5, 'img5.jfif', 'SI ANAK BADAI', 'Tere Liye', 2019, 8),
(6, 'img6.jfif', 'Negeri Para Bedebah', 'Tere Liye', 2012, 9),
(7, 'img7.jfif', 'Orang-orang Biasa', 'Andrea Hirata', 2019, 8),
(8, 'img8.jfif', 'Merdeka Sejak Hati', 'Ahmad Fuadi', 2019, 8),
(9, 'img9.jfif', 'Konspirasi alam semesta', 'Fiersa Besari', 2017, 10),
(10, 'img10.jfif', 'Arah langkah', 'Fiersa Besari', 2018, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'rafi', '$2y$10$SjFxndUIqN9AWUu/wXgxQO9ge0wMXhray18sMxqaainKF3CrtDaA2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
