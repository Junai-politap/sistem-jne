-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jan 2023 pada 05.13
-- Versi server: 5.7.33
-- Versi PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jne`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_kurir`
--

CREATE TABLE `admin_kurir` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_module`
--

CREATE TABLE `admin_module` (
  `id` char(36) NOT NULL,
  `app` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_module`
--

INSERT INTO `admin_module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `url`, `color`, `menu`, `created_at`, `updated_at`) VALUES
('98211385-104c-4a77-971e-80e01a87f5bc', 'Admin', 'jne-terpadu-admin', 'Admin', 'Super Admin', 'admin', 'admin', '#085f63', 'admin', '2023-01-02 17:36:59', '2023-01-02 17:36:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_pegawai`
--

CREATE TABLE `admin_pegawai` (
  `id` char(36) NOT NULL,
  `nup` varchar(50) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_pegawai`
--

INSERT INTO `admin_pegawai` (`id`, `nup`, `nama`, `tempat_lahir`, `tanggal_lahir`, `email`, `username`, `password`, `foto`, `alamat`, `created_at`, `updated_at`) VALUES
('981aecb2-5ecd-46e9-b192-587c753a7c70', '198701142019031007', 'Junaidi', 'Ketapang', '1998-06-09', 'junaidiju4109@gmail.com', 'junaidi', '$2y$10$wvqdSiLe4KXS.f6HpWga7OD/i4UlDHE5nqX0klys8ohvdFVXeVG06', 'app/pegawai/1672415368-K97Vq.jpg', 'Jl. Rahadi Usman Desa Sungai Besar', '2023-01-03 04:56:59', '2023-01-02 21:56:59'),
('98205c3b-f856-4a81-9ed9-3845de712f0f', '19820601201602198', 'Teguh Eko Saputra,A.Md.Kom', 'Ketapang', '1996-09-02', 'teguh@politap.ac.id', 'teguh@politap.ac.id', '$2y$10$hsveIaNatuyxcC2UZXPzoe0jDMBV.ok2UpQAFFMaBMz5LgqyIrkBK', 'app/pegawai/1672647536-zkRZi.jpg', 'Jl. Ketapang', '2023-01-02 01:18:58', '2023-01-02 01:18:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_role`
--

CREATE TABLE `admin_role` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) NOT NULL,
  `id_module` char(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_role`
--

INSERT INTO `admin_role` (`id`, `id_pegawai`, `id_module`, `created_at`, `updated_at`) VALUES
('9821260e-76a1-4f0b-8e0f-e9a7ea247955', '981aecb2-5ecd-46e9-b192-587c753a7c70', '98211385-104c-4a77-971e-80e01a87f5bc', '2023-01-02 10:43:18', '2023-01-02 10:43:18'),
('982130a7-1181-4a2d-9570-4fa32c36f719', '98205c3b-f856-4a81-9ed9-3845de712f0f', '98211385-104c-4a77-971e-80e01a87f5bc', '2023-01-02 11:12:55', '2023-01-02 11:12:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_kurir`
--
ALTER TABLE `admin_kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_module`
--
ALTER TABLE `admin_module`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_pegawai`
--
ALTER TABLE `admin_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
