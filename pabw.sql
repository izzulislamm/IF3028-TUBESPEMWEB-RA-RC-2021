-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Des 2021 pada 19.01
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pabw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` varchar(255) NOT NULL,
  `aspek_komentar` varchar(50) NOT NULL,
  `isi_komentar` varchar(255) NOT NULL,
  `file_komentar` varchar(255) DEFAULT NULL,
  `waktu_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `aspek_komentar`, `isi_komentar`, `file_komentar`, `waktu_komentar`) VALUES
('12312312312', 'asdasdas', 'asdasdasd', NULL, '2021-12-25 17:27:38'),
('26122161c756589fdf3', 'Infrastruktur', 'asdasd', 'default.jpg', '0000-00-00 00:00:00'),
('26122161c7576349d24', 'Mahasiswa', 'asdasda', 'default.jpg', '2021-12-25 17:39:47'),
('26122161c757852db9b', 'Mahasiswa', 'ttytytyty', 'default.jpg', '2021-12-25 17:40:21'),
('26122161c759696cf3a', 'Staff', 'asdasdasd', 'default.jpg', '2021-12-25 17:48:25'),
('26122161c75a539c857', 'Mahasiswa', 'asdasd', '26122161c75a539c857.pdf', '2021-12-25 17:52:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
