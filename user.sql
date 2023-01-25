-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2023 pada 01.01
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_crm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `rule` int(2) NOT NULL COMMENT '1:"admin'';2:''pemilik'';3:''pegawai''',
  `status` int(2) NOT NULL COMMENT '1:"Active",2:"not Active"'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `no_tlp`, `rule`, `status`) VALUES
(1, 'admin', 'admin', 'admin@example.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '0895405583600', 1, 1),
(2, 'Pemilik Toko', 'owner123', 'owner123@example.com', '63b8385c84ecd530f3fc39522a5f42fbc5d63c3f', '0895405583600', 2, 1),
(3, 'Karyawan', 'karyawan1', 'karyawan1@example.com', 'dc81dffaab0d6632eef2e0032d8beb79b72f383e', '0895405583600', 3, 1),
(4, 'admin 2', 'admin2', 'admin2@example.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0895405583600', 1, 2),
(6, 'yusuf maulana', 'yusufmaulana', 'printingtheking@gmail.com', '4dae488556a23dcccc8fa76c607896d3e0b5f991', '0895405583600', 4, 1),
(7, 'Fitter Thia Armando', 'fitteramin', 'printingtheking@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0895405583600', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
