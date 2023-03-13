-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2023 pada 18.01
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berobat`
--

CREATE TABLE `berobat` (
  `idBerobat` int(11) NOT NULL,
  `idPasien` int(5) NOT NULL,
  `idDokter` int(5) NOT NULL,
  `tanggalBerobat` date NOT NULL,
  `keluhanPasien` varchar(255) NOT NULL,
  `hasilDiagnosa` varchar(255) NOT NULL,
  `penataLaksana` enum('Rawat Inap','Rawat Jalan','Rujuk','Lainnya') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berobat`
--

INSERT INTO `berobat` (`idBerobat`, `idPasien`, `idDokter`, `tanggalBerobat`, `keluhanPasien`, `hasilDiagnosa`, `penataLaksana`) VALUES
(2, 2, 4, '2023-03-01', 'Gatal-gatal', 'Panu Kudis', 'Rawat Inap'),
(3, 3, 5, '2023-03-02', '', '', 'Rawat Inap'),
(4, 5, 4, '2023-03-10', '', '', 'Rawat Inap'),
(5, 4, 5, '2023-03-12', '', '', 'Rawat Inap'),
(6, 5, 6, '2023-03-12', '', '', 'Rawat Inap'),
(7, 2, 4, '2023-03-13', '', '', 'Rawat Inap'),
(8, 3, 5, '2023-03-10', '', '', 'Rawat Inap'),
(9, 6, 5, '2023-03-09', '', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `idDokter` int(5) NOT NULL,
  `namaDokter` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`idDokter`, `namaDokter`) VALUES
(4, 'dr. M. Paula Cynthia'),
(5, 'dr. Sonia Avila Veta Putri'),
(6, ' dr. Roswita Noor, Sp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `idObat` int(5) NOT NULL,
  `namaObat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`idObat`, `namaObat`) VALUES
(1, 'Decolgen '),
(4, 'Tremenza '),
(5, 'Rivanol Kompres');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `idPasien` int(5) NOT NULL,
  `namaPasien` varchar(40) NOT NULL,
  `jenisKelamin` enum('Pria','Wanita') NOT NULL,
  `umurPasien` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`idPasien`, `namaPasien`, `jenisKelamin`, `umurPasien`) VALUES
(2, ' Med. Sandjaja', 'Pria', 25),
(3, 'Maximus Mudjur', 'Pria', 35),
(4, 'Nuskah Sudjana', 'Pria', 27),
(5, 'Amaylia Oehadian', 'Wanita', 17),
(6, 'Yetty Mulyatie', 'Wanita', 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `idResep` int(11) NOT NULL,
  `idBerobat` int(11) NOT NULL,
  `idObat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`idResep`, `idBerobat`, `idObat`) VALUES
(1, 2, 1),
(2, 2, 4),
(3, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`) VALUES
(3, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'DEDE IRYAWAN'),
(4, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'Dede');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`idBerobat`),
  ADD KEY `berobat_ibfk_1` (`idDokter`),
  ADD KEY `berobat_ibfk_2` (`idPasien`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idObat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idPasien`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`idResep`),
  ADD KEY `idBerobat` (`idBerobat`),
  ADD KEY `idObat` (`idObat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berobat`
--
ALTER TABLE `berobat`
  MODIFY `idBerobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `idDokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `idObat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idPasien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `idResep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD CONSTRAINT `berobat_ibfk_1` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`) ON UPDATE CASCADE,
  ADD CONSTRAINT `berobat_ibfk_2` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`idBerobat`) REFERENCES `berobat` (`idBerobat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_ibfk_2` FOREIGN KEY (`idObat`) REFERENCES `obat` (`idObat`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
