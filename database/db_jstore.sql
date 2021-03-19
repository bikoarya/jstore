-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Mar 2021 pada 08.30
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `nama_lengkap`, `id_role`, `password`) VALUES
(1, 'admin', 'Administrator', 2, '$2y$10$wUXgdNJoBNQAotnUYuTV7OvIaQmMGZVmCxl6BJArxRh5r7B/0soqK'),
(2, 'bikoarya', 'Biko Arya Maulana', 3, '$2y$10$G08T2ZV5N9RPbz8lU1BTaOZKQa0p67AtJkCBp7cQAet8jcigQzRma'),
(3, 'tessa', 'Tessa Aurelia', 3, '$2y$10$z0aoL38HPrwulDPK6xu2luyp.KfIn98lXd0r2Dg2qmP0F91Q6JJn.'),
(5, 'stephen', 'Stephen Malik', 3, '$2y$10$lfpVDWb6.izfnFjx01l74.OPv92MEhxSX5xuz7yZxRfo09MV4Bg5e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_barang`
--

CREATE TABLE `t_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_barang`
--

INSERT INTO `t_barang` (`id_barang`, `nama_barang`, `deskripsi`, `id_kategori`, `harga`, `gambar`, `stok`) VALUES
(10, 'SkinWhite', 'Kosmetik memiliki sejarah yang panjang dan sudah dikenal keberadaannya oleh peradaban manusia sejak 6000 tahun silam. Bahkan salah seorang filsuf, Plautus mengatakan bahwa wanita tanpa adanya riasan wajah dapat disamakan dengan makanan tanpa garam.', 2, 50000, 'IMG_20201031_092726_746.jpg', 5),
(11, 'Body Scrub', 'Kosmetik memiliki sejarah yang panjang dan sudah dikenal keberadaannya oleh peradaban manusia sejak 6000 tahun silam. Bahkan salah seorang filsuf, Plautus mengatakan bahwa wanita tanpa adanya riasan wajah dapat disamakan dengan makanan tanpa garam.', 1, 40000, 'IMG_20200930_114244_444.jpg', 3),
(12, 'ParaSun', 'Kosmetik memiliki sejarah yang panjang dan sudah dikenal keberadaannya oleh peradaban manusia sejak 6000 tahun silam. Bahkan salah seorang filsuf, Plautus mengatakan bahwa wanita tanpa adanya riasan wajah dapat disamakan dengan makanan tanpa garam.', 3, 50000, 'IMG_20201031_092910_764.jpg', 0),
(13, 'Universali', 'Sangat bagus untuk kulit yang sering terpancar matahari', 6, 60000, 'IMG_20201114_203141_894.jpg', 0),
(15, 'u', 'u', 2, 40000, 'IMG_20201031_092910_765.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Make Up'),
(2, 'Skincare'),
(3, 'Hair Care'),
(6, 'Body');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_role`
--

CREATE TABLE `t_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_role`
--

INSERT INTO `t_role` (`id_role`, `nama_role`) VALUES
(2, 'Admin'),
(3, 'Pengelola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_transaksi`
--

INSERT INTO `t_transaksi` (`id_transaksi`, `id_barang`, `qty`, `nama`, `telp`, `alamat`, `tanggal`) VALUES
(1, 11, 1, 'Stephen', '08950349650', 'Jl Arjuno gg 3, Klojen, Malang, Jawa Timur', '2021-03-19'),
(2, 10, 1, 'Tes', '096494893438', 'Jl Galunggung, Wagir, Malang, Jawa Timur', '2021-03-19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `t_role`
--
ALTER TABLE `t_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_role`
--
ALTER TABLE `t_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_transaksi`
--
ALTER TABLE `t_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
