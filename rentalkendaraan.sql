-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2021 pada 17.33
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalkendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `Nama` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`Nama`, `Username`, `Password`, `Email`) VALUES
('azikha', 'azikhaabn', '12007720', 'azikhaabnafadla@smkwikrama.sch.id'),
('Oktaviana', 'oktavianamnd', '12345', 'vianaamanda044@gmail.com'),
('Viana', 'Oktavianamnd', '678910', 'oktavianaamandatempessy@smkwikrama.sch.id'),
('Amanda', 'amnd', 'cantik', 'hanasiti246@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id_mobil` int(11) NOT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `gambar` varchar(256) NOT NULL,
  `harga` int(100) DEFAULT NULL,
  `plat_no` varchar(255) DEFAULT NULL,
  `tahun` int(50) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `bensin` varchar(255) DEFAULT NULL,
  `penumpang` int(50) DEFAULT NULL,
  `waktu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id_mobil`, `merk`, `gambar`, `harga`, `plat_no`, `tahun`, `warna`, `bensin`, `penumpang`, `waktu`) VALUES
(1, 'Daihatsu Xenia', 'daihatsu.jpeg', 550000, 'F 1650 EG', 2015, 'silver', 'full', 7, '24 jam'),
(2, 'Honda BR Va', 'honda.jpeg', 600000, 'F 1384 DJ', 2015, 'biru', 'full', 4, '24 jam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` int(100) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_pesanan`, `nama`, `tanggal`, `alamat`, `no_telp`, `pesan`) VALUES
(1, 'Web developers', '2021-05-29', 'kasda', 2312321, 'Pesan mobil'),
(3, 'nizar', '2021-05-29', 'kasda', 2312, 'Pesan mobil'),
(4, 'nizar', '2021-05-29', 'kasda', 2312, 'Pesan mobil'),
(5, 'Game developer', '2021-05-29', 'kasdasdsa', 2312, 'Pesan mobil'),
(6, 'nizar11', '2021-05-29', 'kasdasdsaad', 2312312, 'Pesan mobil');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Password`);

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
