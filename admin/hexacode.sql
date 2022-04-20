-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2022 pada 18.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hexacode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diklat`
--

CREATE TABLE `diklat` (
  `id_diklat` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `materi` varchar(40) NOT NULL,
  `jpl` int(11) NOT NULL,
  `jum_peserta` int(11) NOT NULL,
  `jadwal` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `instruktur`
--

CREATE TABLE `instruktur` (
  `id_instruktur` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(18) NOT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `no_npwp` varchar(20) DEFAULT NULL,
  `alamat` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instruktur`
--

INSERT INTO `instruktur` (`id_instruktur`, `nama`, `jabatan`, `no_ktp`, `no_npwp`, `alamat`) VALUES
(1, '', 'Asisten Instruktur', '1213423434234331', '42335235235', 'Jl. Ahmad Yani Lorong Manggis No.63 Palembang, Sumatera Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_materi` int(10) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `jpl` varchar(5) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `tgl_pembukaan` date NOT NULL,
  `tgl_penutupan` date NOT NULL,
  `jumlah` int(7) NOT NULL,
  `status` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_materi`, `materi`, `jpl`, `angkatan`, `tgl_pembukaan`, `tgl_penutupan`, `jumlah`, `status`, `deskripsi`) VALUES
(6, 'Pembuatan Layout Animasi 3D', '146', 1, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(7, 'Pembuatan Aset Animasi 3D', '283', 1, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(9, 'Desainer Grafis Muda', '187', 1, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(10, 'Pembuatan Gambar Penceritaan Animasi', '67', 1, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(11, '3D Character Setup', '196', 1, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(13, 'Pembuatan Gambar Penceritaan Animasi', '67', 3, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(14, 'Pembuatan Gerak Animasi 3D', '221', 10, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(16, 'Desainer Grafis Muda', '187', 2, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(17, 'Desainer Grafis Muda', '187', 3, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(19, 'Pembuatan Gerak Animasi 3D', '221', 16, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(20, 'Junior Web Programmer', '177', 1, '0000-00-00', '0000-00-00', 24, 'Pendaftaran', ''),
(21, 'Desainer Grafis Muda', '187', 4, '0000-00-00', '0000-00-00', 24, 'Pendaftaran', ''),
(22, 'Pembuatan Aset Animasi 3D', '283', 10, '0000-00-00', '0000-00-00', 24, 'Pendaftaran', ''),
(23, 'Pembuatan Gerak Animasi 3D', '221', 21, '0000-00-00', '0000-00-00', 24, 'Pendaftaran', ''),
(24, 'Pembuatan Latar Animasi 2D', '104', 7, '0000-00-00', '0000-00-00', 24, 'Pendaftaran', ''),
(25, 'Pembuatan Layout Animasi 3D', '146', 9, '0000-00-00', '0000-00-00', 24, 'Pendaftaran', ''),
(26, 'Pembuatan Latar Animasi 2D', '104', 8, '0000-00-00', '0000-00-00', 24, 'Pendaftaran', ''),
(27, 'Pembuatan Aset Animasi 3D', '283', 13, '0000-00-00', '0000-00-00', 24, 'Pendaftaran', ''),
(28, 'Pembuatan Layout Animasi 3D', '146', 3, '0000-00-00', '0000-00-00', 24, 'Selesai', ''),
(29, 'Pembuatan Gerak Animasi 3D', '221', 14, '0000-00-00', '0000-00-00', 24, 'Selesai', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(5) NOT NULL,
  `alamat` longtext NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama`, `no_ktp`, `email`, `telp`, `tempat`, `tanggal`, `jk`, `agama`, `pendidikan`, `alamat`, `provinsi`, `kota`, `kecamatan`, `desa`, `status`) VALUES
(1, 'Bella Claudia', '', 'bclaudia2106@gmail.com', '', 'Palembang', '1998-06-21', 'Perempuan', 'Islam', 'SMK', 'Plaju', 'Sumatera Selatan', 'Palembang', 'Seberang Ulu I', 'SILABERANTI', 'Belum Bekerja'),
(7, 'Yusuf Andika', '', 'yusufandika@gmail.com', '', 'Palembang', '2019-06-21', 'Laki-laki', 'Islam', 'SMA', 'Talang Keramat', 'Sumatera Selatan', 'Palembang', 'Banyuasin I', 'Kenten', 'Sudah Bekerja'),
(8, 'ema juniarty', '1234', 'emajuniarty07@gmail.com', '085159083374', 'kendari', '2022-03-31', 'on', '1', '1', 'BTN Graha Multazam Tacipi', 'a', 'Makassar', 'ULAWENG', 'a', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diklat`
--
ALTER TABLE `diklat`
  ADD PRIMARY KEY (`id_diklat`);

--
-- Indeks untuk tabel `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id_instruktur`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diklat`
--
ALTER TABLE `diklat`
  MODIFY `id_diklat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id_instruktur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_materi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
