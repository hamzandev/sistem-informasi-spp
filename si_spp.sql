-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2023 pada 15.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `id_komp_keahlian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `id_komp_keahlian`) VALUES
(1, 'X', 1),
(2, 'XI', 1),
(3, 'XII', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komp_keahlian`
--

CREATE TABLE `tb_komp_keahlian` (
  `id_komp_keahlian` int(11) NOT NULL,
  `nama_keahlian` varchar(50) NOT NULL,
  `keterangan_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komp_keahlian`
--

INSERT INTO `tb_komp_keahlian` (`id_komp_keahlian`, `nama_keahlian`, `keterangan_keahlian`) VALUES
(1, 'RPL', '														Rekayasa Perangkat Lunak												'),
(2, 'ATU', 'Agribisnis Ternak Unggas'),
(3, 'ATR', 'Agribisnis Ternak Ruminansia'),
(5, 'APHP', 'Agribisnis Pengolahan Hasil Pertanian '),
(6, 'ATPH', 'Agribisnis Tanaman Pangan & Holtikultura'),
(7, 'TBSM', 'Teknik & Bisnis Sepeda Motor'),
(8, 'TGP', 'Teknik Geologi & Pertambangan'),
(9, 'TITL', 'Teknik Instalasi Tenaga Listrik'),
(10, 'TKPI', 'Teknik Kapal Penangkap Ikan'),
(11, 'NKPI', 'Nautika Kapal Penangkap Ikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` varchar(20) NOT NULL,
  `id_petugas` varchar(35) NOT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(10) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) DEFAULT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
('PBYR-1302202367', '1', '1234567890', '2023-02-13', 'Juli', '2023', 23, 150000),
('PBYR-1302202383', '1', '1234567890', '2023-02-13', 'Agustus', '2023', 23, 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'hamzan.wahyu', '$2y$10$Ux1wLYIqDf4bMpZGdWHg/eQkX6bc4Jfu00PHdbiQxNuwP8JTPOScS', 'Hamzan Wahyudi', 'admin'),
(2, 'fikro.keren123', '$2y$10$HOGuV4MHfN8l8DAZOtupq.WMkocwoebAfDnY.ci2JEoFEKcOSwKbe', 'Fikro Najiah', 'petugas'),
(4, 'rizkigg', '$2y$10$R.LgCPENaoFaTvkGzqE/oOG0spd7zTGUUnswfTZoNTGFcrST7zJY6', 'RIzki Lufia', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_komp_keahlian` int(11) DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `id_komp_keahlian`, `alamat`, `no_telp`, `id_spp`, `password`) VALUES
('1098765431', '1234567898', 'Joko Winardo', 2, 7, 'Desa Perpresidenan', '08756253625', 23, '$2y$10$Ys84OuDV6LBQoancS0/G5uSYIneRpLj522PZf9oo48aMp9wnWM5Za'),
('1234567890', '1098765432', 'Puan Putri Discantik', 1, 5, 'Desa Banteng Merah', '08767464789', 23, '$2y$10$tU1y4r8BEXudPhH1jtGv0.EpLc3bJBUi7wGRv6WDvERyKxYgmGu2O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `nominal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_spp`
--

INSERT INTO `tb_spp` (`id_spp`, `tahun`, `nominal`) VALUES
(23, 2023, 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `nisn` char(10) DEFAULT NULL,
  `bulan` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum Dibayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `nisn`, `bulan`, `status`) VALUES
(74, '1234567890', 'Juli', 'Dibayar'),
(75, '1234567890', 'Agustus', 'Dibayar'),
(76, '1234567890', 'September', 'Belum Dibayar'),
(77, '1234567890', 'Oktober', 'Belum Dibayar'),
(78, '1234567890', 'November', 'Belum Dibayar'),
(79, '1234567890', 'Desember', 'Belum Dibayar'),
(80, '1234567890', 'Januari', 'Belum Dibayar'),
(81, '1234567890', 'Februari', 'Belum Dibayar'),
(82, '1234567890', 'Maret', 'Belum Dibayar'),
(83, '1234567890', 'April', 'Belum Dibayar'),
(84, '1234567890', 'Mei', 'Belum Dibayar'),
(85, '1234567890', 'Juni', 'Belum Dibayar'),
(86, '1098765431', 'Juli', 'Belum Dibayar'),
(87, '1098765431', 'Agustus', 'Belum Dibayar'),
(88, '1098765431', 'September', 'Belum Dibayar'),
(89, '1098765431', 'Oktober', 'Belum Dibayar'),
(90, '1098765431', 'November', 'Belum Dibayar'),
(91, '1098765431', 'Desember', 'Belum Dibayar'),
(92, '1098765431', 'Januari', 'Belum Dibayar'),
(93, '1098765431', 'Februari', 'Belum Dibayar'),
(94, '1098765431', 'Maret', 'Belum Dibayar'),
(95, '1098765431', 'April', 'Belum Dibayar'),
(96, '1098765431', 'Mei', 'Belum Dibayar'),
(97, '1098765431', 'Juni', 'Belum Dibayar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_komp_keahlian` (`id_komp_keahlian`);

--
-- Indeks untuk tabel `tb_komp_keahlian`
--
ALTER TABLE `tb_komp_keahlian`
  ADD PRIMARY KEY (`id_komp_keahlian`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nisn` (`nisn`,`id_spp`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_komp_keahlian` (`id_komp_keahlian`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indeks untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_komp_keahlian`
--
ALTER TABLE `tb_komp_keahlian`
  MODIFY `id_komp_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_komp_keahlian`) REFERENCES `tb_komp_keahlian` (`id_komp_keahlian`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `tb_siswa` (`nisn`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`id_komp_keahlian`) REFERENCES `tb_komp_keahlian` (`id_komp_keahlian`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
