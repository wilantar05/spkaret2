-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2021 pada 14.01
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `id_bidang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `status`, `level`, `id_bidang`) VALUES
(2, 'sayu', '81dc9bdb52d04dc20036dbd8313ed055', 'Sayu Gita', 1, 1, 6),
(3, 'Dian', '81dc9bdb52d04dc20036dbd8313ed055', 'Dian Ary', 1, 2, 6),
(4, 'dummy', '81dc9bdb52d04dc20036dbd8313ed055', 'Dummy1', 1, 2, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(100) NOT NULL,
  `nama_bidang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `nama_bidang`) VALUES
(5, 'Kepala Desa'),
(6, 'Admin Utama'),
(7, 'Kasi Pemerintahan'),
(8, 'Kasi Kesejahteraan'),
(9, 'Kasi Pelayanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengaduan`
--

CREATE TABLE `data_pengaduan` (
  `id_pelapor` int(100) NOT NULL,
  `id_pengaduan` varchar(255) NOT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `tanggal_pengaduan` date NOT NULL DEFAULT current_timestamp(),
  `uraian` longtext NOT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `bukti1` varchar(100) DEFAULT NULL,
  `bukti2` varchar(100) DEFAULT NULL,
  `jenis_pengaduan` int(20) NOT NULL,
  `tindak_lanjut` longtext DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `id_media_pelaporan` int(20) DEFAULT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `id_bidang` int(100) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_bukti1` varchar(100) NOT NULL,
  `nama_bukti2` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pengaduan`
--

INSERT INTO `data_pengaduan` (`id_pelapor`, `id_pengaduan`, `nomor`, `tanggal_pengaduan`, `uraian`, `ktp`, `bukti1`, `bukti2`, `jenis_pengaduan`, `tindak_lanjut`, `status`, `id_media_pelaporan`, `penerima`, `id_bidang`, `gambar`, `nama_bukti1`, `nama_bukti2`, `nik`, `tanggal_selesai`) VALUES
(1, '1', '1', '0000-00-00', '1', NULL, NULL, NULL, 1, NULL, 0, 1, 'Belum Diterima', NULL, '1', '', '', '', '0000-00-00'),
(1633333049, '16333330493', '', '2021-10-04', '\"asdfa\"', NULL, NULL, NULL, 1, NULL, 0, 2, 'Belum Diterima', 7, '', '', '', '', '0000-00-00'),
(1633333348, '16333333484', '4/2021', '2021-10-04', '\"asda\"', NULL, NULL, NULL, 5, NULL, 0, 2, 'Belum Diterima', NULL, '', '', '', '', '0000-00-00'),
(1633334032, '16333340325', '5/2021', '1212-12-12', '\"aaaa\"', NULL, NULL, NULL, 2, NULL, 0, 2, 'Belum Diterima', NULL, '', '', '', '-', '0000-00-00'),
(1633334883, '16333348835', '', '2021-10-04', '\"Saya mau Bansos\"', NULL, NULL, NULL, 3, '<p>Sudah terkirim</p>\r\n', 1, 2, 'Belum Diterima', 8, '', '', '', '', '2021-10-04'),
(1633339370, '16333393705', '5/2021', '2021-10-04', '\"Jalan Rusak\"', NULL, NULL, NULL, 5, NULL, 0, 2, 'Belum Diterima', NULL, '', '', '', '', '0000-00-00'),
(1633414171, '16334141715', '', '2021-10-05', '\"Saya mau bansos\r\n\"', NULL, NULL, NULL, 2, '<p>Sudah selesai</p>\r\n', 1, 2, 'Belum Diterima', 7, '', '', '', '', '2021-10-05'),
(1633572326, '16335723266', '6/2021', '2021-10-07', '\"saya ingin pesan\"', NULL, NULL, NULL, 5, NULL, 0, 2, 'Belum Diterima', NULL, '', '', '', '', '0000-00-00'),
(1633603375, '16336033757', '7/2021', '2021-10-07', '\"aaaaa\"', NULL, NULL, NULL, 5, NULL, 0, 1, 'Belum Diterima', 6, 'IMG_00051.JPG', '', '', '', '0000-00-00'),
(1633604449, '16336044498', '8/2021', '2021-10-07', '\"asdfaaa\"', NULL, NULL, NULL, 5, NULL, 0, 1, 'Belum Diterima', 6, 'IMG_0124.JPG', '', '', '', '0000-00-00'),
(1633607409, '16336074099', '9/2021', '2021-10-07', '\"aaaaa\"', NULL, NULL, NULL, 5, NULL, 0, 1, 'Belum Diterima', 6, 'IMG_0108.JPG', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `judul` varchar(100) NOT NULL,
  `artikel` longtext NOT NULL,
  `id_informasi` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`judul`, `artikel`, `id_informasi`, `tanggal`, `foto`) VALUES
('Saya Belum siap ', '                                        Saya Pasrah\n                                      ', 2, '2021-10-07 11:03:05', 'https://www.bing.com/images/search?view=detailV2&ccid=1kua7xzS&id=79D46BB5FA69AAAE463AE8758B0F8C20AD6B83B0&thid=OIP.1kua7xzSHXpKVSPL1nPQoAHaEK&mediaurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.d64b9aef1cd21d7a4a5523cbd673d0a0%3frik%3dsINrrSCMD4t16A%26riu%3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_informasi`
--

CREATE TABLE `jenis_informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_jenis_informasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pengaduan`
--

CREATE TABLE `jenis_pengaduan` (
  `id_jenis_pengaduan` int(20) NOT NULL,
  `nama_jenis_pengaduan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pengaduan`
--

INSERT INTO `jenis_pengaduan` (`id_jenis_pengaduan`, `nama_jenis_pengaduan`) VALUES
(1, 'Saran'),
(2, 'Kritik'),
(3, 'Pengaduan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media_pelaporan`
--

CREATE TABLE `media_pelaporan` (
  `id_media_pelaporan` int(11) NOT NULL,
  `nama_media_pelaporan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `media_pelaporan`
--

INSERT INTO `media_pelaporan` (`id_media_pelaporan`, `nama_media_pelaporan`) VALUES
(1, 'Kantor Desa'),
(2, 'Sistem Pandumas'),
(3, 'Japri Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `id_pelapor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelapor`
--

INSERT INTO `pelapor` (`nama`, `alamat`, `tgl_lahir`, `email`, `no_telepon`, `id_pelapor`) VALUES
('aaa', 'aaa', '2222-02-21', '', 'aaa', 1633333049),
('aaa', 'aaa', '1222-12-12', '-', 'aaa', 1633333348),
('bbb', '$alamat', '0000-00-00', 'bbb', 'bbb', 1633333349),
('bbbb', 'asd', '1212-12-12', '-', 'asd', 1633334032),
('Dian', 'Disana', '2000-02-20', '', '081', 1633334883),
('Gita', 'Banjar Lantang Katik', '2000-08-26', '-', '085277788899', 1633339370),
('Sayu', 'Kebon', '2000-04-26', '', '081', 1633414171),
('sayu ', 'br kebon', '0001-04-26', '-', '123', 1633572326),
('aaaa', 'aaaa', '1997-12-22', '-', 'aaa', 1633603281),
('aaaa', 'aaaa', '1997-12-22', '-', 'aaa', 1633603375),
('Dian', 'Sidemen', '2222-11-11', '-', '0812345', 1633604449),
('TEST', 'bbb', '2222-12-11', '-', 'aaa', 1633607409);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `nama_kantor` varchar(100) NOT NULL,
  `nama_kepala` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`nama_kantor`, `nama_kepala`, `nip`, `jabatan`) VALUES
('Kantor Pertanahan <BR>Kota Banda Aceh', 'Drs.SURIA BAKTI, M.Si', '196408071986031004', 'Kepala');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bidang` (`id_bidang`);

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indeks untuk tabel `data_pengaduan`
--
ALTER TABLE `data_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `jenis_informasi`
--
ALTER TABLE `jenis_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
  ADD PRIMARY KEY (`id_jenis_pengaduan`);

--
-- Indeks untuk tabel `media_pelaporan`
--
ALTER TABLE `media_pelaporan`
  ADD PRIMARY KEY (`id_media_pelaporan`);

--
-- Indeks untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_informasi`
--
ALTER TABLE `jenis_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_pengaduan`
--
ALTER TABLE `jenis_pengaduan`
  MODIFY `id_jenis_pengaduan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `media_pelaporan`
--
ALTER TABLE `media_pelaporan`
  MODIFY `id_media_pelaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1633607410;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_bidang` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
