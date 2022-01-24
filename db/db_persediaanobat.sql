-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 05.33
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_persediaanobat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_perkara` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_perkara`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('01/PID.B/2018/PN.KIS', 'A. Nasution', '2018-12-14', '2018-12-16', 2, '-', 4),
('01/PDT.G/2018/PN.KIS', 'J. Siahaan', '2018-12-10', 'Belum Kembali', 0, '-', 5),
('02/PID.B/2018/PN.KIS', 'Bejo', '2018-12-11', 'Belum Kembali', 0, 'Input ke CTS', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obatkeluar`
--

CREATE TABLE `tbl_obatkeluar` (
  `idkeluar` int(11) NOT NULL,
  `idobat` int(11) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_obatkeluar`
--

INSERT INTO `tbl_obatkeluar` (`idkeluar`, `idobat`, `jumlah`, `tanggal`) VALUES
(16, 7, 2, '2021-12-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obatmasuk`
--

CREATE TABLE `tbl_obatmasuk` (
  `idmasuk` int(11) NOT NULL,
  `idobat` int(11) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_obatmasuk`
--

INSERT INTO `tbl_obatmasuk` (`idmasuk`, `idobat`, `jumlah`, `tanggal`) VALUES
(7, 7, 1000, '2021-12-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_persediaanobat`
--

CREATE TABLE `tbl_persediaanobat` (
  `idobat` int(11) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `jenis_obat` varchar(100) NOT NULL,
  `stok` int(12) NOT NULL,
  `tgl_exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_persediaanobat`
--

INSERT INTO `tbl_persediaanobat` (`idobat`, `nama_obat`, `jenis_obat`, `stok`, `tgl_exp`) VALUES
(7, 'anti biotik', 'obat demam', 86, '2022-01-30'),
(8, 'paramek', 'kapsul', 268, '2021-12-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'DFR@gmail.com', 'Dailami Fahmi Rico', 1, 'Aministrator'),
('pemilik', '58399557dae3c60e23c78606771dfa3d', 'Soojuu@gmail.com', 'SOOju', 0, 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_obatkeluar`
--
ALTER TABLE `tbl_obatkeluar`
  ADD PRIMARY KEY (`idkeluar`),
  ADD KEY `idobat` (`idobat`);

--
-- Indeks untuk tabel `tbl_obatmasuk`
--
ALTER TABLE `tbl_obatmasuk`
  ADD PRIMARY KEY (`idmasuk`),
  ADD KEY `idobat` (`idobat`);

--
-- Indeks untuk tabel `tbl_persediaanobat`
--
ALTER TABLE `tbl_persediaanobat`
  ADD PRIMARY KEY (`idobat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_obatkeluar`
--
ALTER TABLE `tbl_obatkeluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_obatmasuk`
--
ALTER TABLE `tbl_obatmasuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_persediaanobat`
--
ALTER TABLE `tbl_persediaanobat`
  MODIFY `idobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
