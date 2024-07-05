-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Agu 2021 pada 14.00
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rangpol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_acara`
--

CREATE TABLE `detail_acara` (
  `id` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `PJ` varchar(100) NOT NULL,
  `PA` varchar(100) NOT NULL,
  `PK` varchar(100) NOT NULL,
  `n_tamu` int(11) NOT NULL,
  `sifat_acara` varchar(50) NOT NULL,
  `jenis_acara` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_acara`
--

INSERT INTO `detail_acara` (`id`, `id_peminjaman`, `PJ`, `PA`, `PK`, `n_tamu`, `sifat_acara`, `jenis_acara`, `keterangan`) VALUES
(10, 10, 'ana jannatu uzlifat', 'jusriyani sirait', 'tiara angraini', 10, 'Acara Polibatam', 'Kunjungan', '-'),
(13, 13, 'Tasya Selvia Ulfa', 'Erna Nadira', 'Shaliha Ninda', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(17, 17, 'TASYA SELVIA ULFA', 'ERNA NADIRA', 'JUSRIYANI SIRAIT', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(18, 18, 'TASYA SELVIA ULFA', 'ERNA NADIRA', 'JUSRIYANI SIRAIT', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(19, 19, 'TASYA SELVIA ULFA', 'ERNA NADIRA', 'JUSRIYANI SIRAIT', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(20, 20, 'Jusriyani Sirait', 'Tiara Angraini', 'Tasya Selvia', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(21, 21, 'Tasya Selvia', 'Erna Nadira', 'Jusriyani Sirait', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(22, 22, 'Tasya Selvia', 'Erna Nadira', 'Jusriyani Sirait', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(23, 23, 'aca', 'tasya', 'dira', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(24, 24, 'aca', 'tasya', 'dira', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(25, 25, 'aca', 'tasya', 'dira', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(29, 29, 'Tasya Selvia Ulfa', 'Erna Nadira', 'Jusriyani Sirait', 10, 'Acara Mahasiswa', 'Diskusi', '-'),
(30, 30, 'TASYA SELVIA ULFA', 'ERNA NADIRA', 'JUSRIYANI SIRAIT', 10, 'Acara Mahasiswa', 'Diskusi', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_ruangan`
--

CREATE TABLE `detail_ruangan` (
  `id_DR` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `fungsi` varchar(100) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `PIC` varchar(100) NOT NULL,
  `PIC2` varchar(50) NOT NULL,
  `KoorLAB` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_ruangan`
--

INSERT INTO `detail_ruangan` (`id_DR`, `id_ruangan`, `fungsi`, `keperluan`, `PIC`, `PIC2`, `KoorLAB`) VALUES
(3, 11, 'BROADCAST', 'STUDIO BROADCAST', 'TASYA', 'AHMAD', 'Muhammad Zainuddin'),
(4, 12, 'LABORATORIUM', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(5, 13, 'LABORATORIUM', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(6, 14, 'LABORATORIUM', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainnudin'),
(7, 15, 'BLENDED LEARNING', 'STUDIO BLENDED LEARNING', '', '', 'Muhammad Zainuddin'),
(8, 16, 'LABORATORIUM', 'PERKULIAHAN', 'MATHEUS ', 'SEPTI', 'Muhammad Zainuddin'),
(9, 17, 'RUANG KELAS BIASA', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(10, 18, 'RUANG KELAS BIASA', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(11, 19, 'RUANG LAB KOMPUTER', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(12, 20, 'RUANG LAB KOMPUTER', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(13, 21, 'RUANG KELAS BIASA', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(14, 22, 'RUANG KELAS BIASA', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(15, 23, 'RUANG LAB BIASA', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(16, 24, 'RUANG LAB BIASA', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(17, 25, 'RUANG KELAS DISKUSI', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(18, 26, 'RUANG KELAS DISKUSI', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(19, 27, 'RUANG KELAS', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(20, 28, 'RUANG KELAS', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(21, 29, 'RUANG KELAS DISKUSI', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(22, 30, 'RUANG KELAS DISKUSI', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(23, 31, 'WORK SPACE SERVICE EXCELLENT', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(24, 32, 'RUANG KELAS DISKUSI', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(25, 33, 'RUANG KELAS DISKUSI', 'PERKULIAHAN', 'AGUS', 'ATIQ', 'Muhammad Zainuddin'),
(26, 34, 'RUANG KELAS DISKUSI', 'PERKULIAHAN', 'TIARA', 'ANNISYA', 'Muhammad Zainuddin'),
(27, 7, 'RUANG KELAS BIASA', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin'),
(28, 10, 'LAB KOMPUTER LAYOUT KANTOR', 'PERKULIAHAN', 'MATHEUS', 'SEPTI', 'Muhammad Zainuddin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `detail_fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `detail_fasilitas`) VALUES
(1, 'Kursi Mahasiswa', 'Warna Hitam'),
(2, 'Meja Dosen', ''),
(3, 'Infokus', ''),
(4, 'E-station/Podium', ''),
(5, 'Papan Tulis Kaca', ''),
(6, 'Papan Tulis Putih', ''),
(7, 'AC', ''),
(8, 'Lampu', ''),
(9, 'Kursi Hitam Pesta', ''),
(10, 'Kursi Tunggu Depan Ruangan', ''),
(11, 'Kursi Hitam Mahasiswa', ''),
(12, 'PC Mahasiswa', ''),
(13, 'CPU', ''),
(14, 'Mouse', ''),
(15, 'Keyboard', ''),
(17, 'Kursi Dosen', ''),
(18, 'PC Dosen', ''),
(19, 'CPU Dosen', ''),
(20, 'Keyboard Dosen', ''),
(21, 'Mouse Dosen', ''),
(22, 'Meja Printer', ''),
(23, 'Kalkulator', ''),
(24, 'Filling Cabinet', ''),
(25, 'Lemari Kaca', ''),
(26, 'Telepon Kantor', ''),
(27, 'Later Try', ''),
(28, 'Router', ''),
(29, 'Printer HP Laserjet', 'M3035XS'),
(30, 'Printer HP Laserjet', 'M3035XS Flow MFP'),
(31, 'Printer Canon ', 'MX308'),
(34, 'PC Full Set', '(Monitor , Mouse, Keyboard , CPU , Headset)'),
(35, 'J5 Video/Audio Capture		\r\n', ''),
(36, 'Soundcraft Mixer Sound		\r\n', ''),
(37, 'Behringer Soundcard		\r\n', ''),
(38, 'Godok Lighting Set		\r\n', ''),
(39, 'Receiver Microphone		\r\n', ''),
(40, 'Microphone Wireless		\r\n', ''),
(41, 'Microphone Kabel		\r\n', ''),
(42, 'Kabel XLR		\r\n', ''),
(43, 'Tripod Kamera		\r\n', ''),
(44, 'Battery Dummy Canon		\r\n', ''),
(45, 'Kabel HDMI		\r\n', ''),
(46, 'Printer Epson', 'L360');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_ruangan`
--

CREATE TABLE `fasilitas_ruangan` (
  `id_FR` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status_fr` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas_ruangan`
--

INSERT INTO `fasilitas_ruangan` (`id_FR`, `id_fasilitas`, `id_ruangan`, `jumlah`, `status_fr`) VALUES
(7, 3, 7, 1, 1),
(8, 4, 7, 1, 1),
(9, 5, 7, 1, 1),
(10, 6, 7, 1, 1),
(11, 7, 7, 1, 1),
(12, 8, 7, 9, 1),
(13, 9, 7, 3, 1),
(15, 30, 7, 1, 1),
(16, 9, 10, 30, 1),
(18, 5, 7, 1, 1),
(19, 31, 7, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Manajemen Bisnis'),
(2, 'Teknik Informatika'),
(3, 'Teknik Elektro'),
(4, 'Teknik Mesin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lantai`
--

CREATE TABLE `lantai` (
  `id_lantai` int(11) NOT NULL,
  `no_lantai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lantai`
--

INSERT INTO `lantai` (`id_lantai`, `no_lantai`) VALUES
(2, 5),
(3, 6),
(4, 7),
(5, 8),
(6, 9),
(7, 10),
(12, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `foto_u` varchar(100) NOT NULL DEFAULT 'pp.png',
  `level` varchar(20) NOT NULL DEFAULT 'peminjam',
  `v_email` tinyint(1) NOT NULL DEFAULT '0',
  `code` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`id_peminjam`, `nim`, `nama`, `id_jurusan`, `email`, `no_tlp`, `role`, `username`, `password`, `foto_u`, `level`, `v_email`, `code`) VALUES
(11, '3311901011', 'Ana Jannatu Uzlifat', 1, 'viacahya1@gmail.com', '085315194081', 'Staff', '3311901011', '$2y$10$3w0lCDg49oF/aRyil1m72eD4BG9XUgyPPDpzGrVnOh4288eZTGogK', '377-adm2.jpg', 'admin', 1, NULL),
(12, '3311901019', 'Erna Nadira', 1, 'ernanadira@gmail.com', '085315194081', 'Mahasiswa', '3311901019', '$2y$10$xEx7XtKwmvUyXdannzCLTeyKSRvIieUZdjJ8BeAAuDtGWlaF9vzPu', 'pp.png', 'peminjam', 1, 'asfafafdf'),
(32, '3311901016', 'Sapinah', 1, 'anatafesanti@gmail.com', '085315194081', 'Mahasiswa', '3311901016', '3311901011', 'pp.png', 'peminjam', 0, NULL),
(41, '3311901099', 'TASYA SELVIA ULFA', 1, 'auzlifat@gmail.com', '085315194081', 'Mahasiswa', '3311901099', '$2y$10$0zfbyKHofSYveN5c52o6l.ogpFH.cj.XN5V1CvKU9sgbr0Ic3Wh52', '840-a907c8cdccbd2d3ec3288e23b9f472bc.jpg', 'peminjam', 1, '18c7e0a084daefa3b3c5fb63f965ddad'),
(42, '3311901080', 'Shalihah Ninda Putri', 1, 'viacahya1@gmail.com', '085315194081', 'Staff', '3311901080', '$2y$10$2qdI3GkwXzoE.2kWAYqhG.AZo4HAW.RkDtCgzbdSoYMLNqfSMleh6', 'pp.png', 'admin', 1, '354ac417a63a163b79e5f035a50a3352'),
(43, '3311901013', 'ana', 1, 'tasyaselvia18@gmail.com', '085315194081', 'mahasiswa', '3311901013', '$2y$10$zVXTcJWOOvbw6fy993F8KefQPv5HgsqBiI2nA2m2WX.0a/0tYv77i', 'pp.png', 'peminjam', 1, 'adsadasd'),
(44, '3311901022', 'Jusriyani Sirait', 1, 'auzlifat@gmail.com', '085315194081', 'Staff', '3311901022', '$2y$10$S5VcDIE6rRUUZ5irhOietuNipNUBAJxb/yeJ7TJxv2v8LQZMLZyUO', 'pp.png', 'admin', 1, 'ff4557110f2594f41a744b05ee87f7f2'),
(45, '3311901021', 'UMI NASINTHA', 1, '3311901011', '085315194081', 'Mahasiswa', '3311901021', '$2y$10$l2QWelN3gaQInGf5AY3hVOBNqAJ8ZqA7xW7rbPiYVIq0jIgNtajaS', 'pp.png', 'peminjam', 0, 'eae1c47bbc253168d68715a467f96198'),
(46, '3311901087', 'SHALIHAH NINDA PUTRI', 1, 'viacahya1@gmail.com', '085315194081', 'Mahasiswa', '3311901087', '$2y$10$q7cstLN7uY5gVkp9RnzOMeeNK59lDv4yPRO1IdDHrFEv7YixMrW72', 'pp.png', 'peminjam', 1, '109c558524fb89ca22063572bce01466'),
(47, '3311901060', 'UMI NASINTHA', 1, 'auzlifat@gmail.com', '085315194081', 'Mahasiswa', '3311901060', '$2y$10$RLbOGzAXPxLYhLgPhlq0Sexf69teL69g4sY1/CStby0qRXYIE5A1a', 'pp.png', 'peminjam', 1, 'fe94df7fedf1c8d58777e64bbdd6fc0c'),
(48, '3311901068', 'Ana jannatu Uzlifat', 1, 'auzlifat@gmail.com', '085315194081', 'Mahasiswa', '3311901068', '$2y$10$YX19RCDHc1W0Vwn3g/JpqOA9RgrhIUXClYlZV1GhKEL8W/kyDfGW2', 'pp.png', 'peminjam', 1, '16060d958140b2a59bf9e5a4da5680b7'),
(52, '101169', 'popo', 1, 'psycodie123@gmail.com', '08657213', 'Staff', '101169', '$2y$10$aOZw5iA6Hjo3T9b9kZHeCeXlrseOItXiAgfoLJ57dvd1SxDxT559u', 'pp.png', 'admin', 0, '11b53c2893559fccc99d99ce4dcf7db4'),
(53, '051011', 'ana', 1, 'viacahya1@gmail.com', '086541871', 'Mahasiswa', '051011', '$2y$10$ND4ltcYXC9eBpRjcXXgLo.XBkJZd82E1NfMxdz.Pa2JYYj7vSOW1m', 'pp.png', 'peminjam', 1, '0d046c8c2350376e673db7d774f4db8f'),
(54, '3311901088', 'Jusriyani Sirait', 1, 'psycodie123@gmail.com', '085315194081', 'Mahasiswa', '3311901088', '$2y$10$2iMWBX927lqYYPD5U9bCSu2Qt/IWQUsmi2YC6mrI9MJ9DjH13RRIW', 'pp.png', 'peminjam', 1, 'fda84d8f63dc49914d692a15984d6734'),
(55, '218284', 'Muhammad Ilham', 1, 'pais@polibatam.ac.id', '085315194081', 'Staff', '218284', '$2y$10$BWK40/BMNPL05ZatkYwHX.frxdeOy9nkKWAIbAjuR7/P0axax1ZdK', 'pp.png', 'admin', 1, 'bed9b0f9017f4b29db64e486f543c911');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tgl_acara` datetime NOT NULL,
  `tgl_akhir_acara` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `tgl_acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_peminjam`, `id_ruangan`, `nama_kegiatan`, `tgl_acara`, `tgl_akhir_acara`, `status`, `tgl_acc`) VALUES
(10, 12, 7, 'OSC', '2021-06-28 09:00:00', '2021-06-28 16:00:00', 3, '0000-00-00'),
(13, 11, 7, 'Pengerjaan Proyek PBL', '2021-07-11 07:15:00', '2021-07-11 17:10:00', 3, '0000-00-00'),
(17, 11, 17, 'OSC', '2021-07-29 10:50:00', '2021-07-29 14:50:00', 0, '2021-08-06'),
(18, 11, 7, 'Pengerjaan Proyek PBL', '2021-08-01 10:50:00', '2021-08-01 17:50:00', 3, '0000-00-00'),
(19, 11, 7, 'Proyek PBL ', '2021-08-02 09:35:00', '2021-08-02 17:35:00', 1, '0000-00-00'),
(20, 48, 19, 'Proyek PBL', '2021-08-04 12:30:00', '2021-08-04 15:30:00', 3, '0000-00-00'),
(21, 11, 11, 'Pengerjaan PBL ', '2021-08-06 10:50:00', '2021-08-06 18:00:00', 0, '0000-00-00'),
(22, 11, 11, 'Pengerjaan PBL ', '2021-08-06 10:50:00', '2021-08-06 17:55:00', 0, '0000-00-00'),
(23, 11, 11, 'pbl', '2021-08-06 10:55:00', '2021-08-06 13:55:00', 0, '0000-00-00'),
(24, 11, 11, 'pbl', '2021-08-06 10:55:00', '2021-08-06 13:55:00', 0, '0000-00-00'),
(25, 11, 11, 'pbl', '2021-08-06 10:55:00', '2021-08-06 13:55:00', 2, '2021-08-06'),
(29, 48, 7, 'Pengerjaan Proyek PBL', '2021-08-06 10:25:00', '2021-08-06 15:30:00', 1, '2021-08-06'),
(30, 48, 7, 'Pengerjaan Proyek PBL', '2021-08-13 17:20:00', '2021-08-13 17:30:00', 1, '2021-08-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `tgl_pengembalian` datetime DEFAULT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `foto_b` varchar(50) NOT NULL,
  `kendala` text NOT NULL,
  `status_kembali` tinyint(1) NOT NULL DEFAULT '0',
  `alasan` text NOT NULL,
  `tgl_acc_back` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `tgl_pengembalian`, `id_peminjaman`, `foto_b`, `kendala`, `status_kembali`, `alasan`, `tgl_acc_back`) VALUES
(9, '2021-06-28 17:00:00', 10, '838-56daa913ac18c12177d41cad982fc6ae.jpg', 'tidak ada', 1, '', '0000-00-00'),
(12, '2021-07-11 17:10:00', 13, '509-R5.2 Belakang.jpeg', 'AC tidak berfungsi dengan baik ', 1, '', '0000-00-00'),
(16, '0000-00-00 00:00:00', 17, '', '', 0, '', '0000-00-00'),
(17, '2021-08-01 17:50:00', 18, '988-158-609b99f1cb70a.jpeg', 'AC tidak berfungsi dengan baik', 1, '', '0000-00-00'),
(18, '2021-08-08 17:10:00', 19, '655-883-609b99f1cb70a.jpeg', 'AC tidak berfungsi dengan baik ', 0, '', '2021-08-06'),
(19, '2021-08-04 17:30:00', 20, '331-248-R3.1 Depan.jpeg', 'AC tidak berfungsi dengan baik ', 1, '', '0000-00-00'),
(21, '0000-00-00 00:00:00', 29, '', '', 0, '', '0000-00-00'),
(22, '0000-00-00 00:00:00', 30, '', '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peraturan`
--

CREATE TABLE `peraturan` (
  `id_peraturan` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi_peraturan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peraturan`
--

INSERT INTO `peraturan` (`id_peraturan`, `judul`, `isi_peraturan`) VALUES
(1, 'PERATURAN PEMINJAMAN RUANGAN JURUSAN MANAJEMEN BISNIS ', '&lt;ol&gt;\r\n	&lt;li&gt;Perhatikan jam ruangan jika ingin meminjam ruangan tersebut&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;Perhatikan jam ruangan jika ingin meminjam ruangan tersebut&amp;nbsp;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `no_ruangan` varchar(50) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `lantai` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `foto2` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `no_ruangan`, `nama_ruangan`, `lantai`, `kapasitas`, `foto`, `foto2`, `status`) VALUES
(7, 'R 3.1', 'KELAS BIASA', 3, 40, 'R3.1 Belakang.JPEG', 'R3.1 Depan.JPEG', 0),
(10, 'R 3.2', 'LAB KOMPUTER LAYOUT KANTOR', 3, 34, 'R3.2 Belakang.JPEG', 'R3.2 Depan.JPEG', 1),
(11, 'R 5.1', 'STUDIO BROADCAST', 5, 10, 'R5.1 Belakang.JPG', 'R5.1 Depan.JPG', 1),
(12, 'R 5.2', 'LAB KOMPUTER', 5, 20, 'R5.2 Belakang.JPEG', 'R5.2 Depan.JPEG', 1),
(13, 'R 5.3', 'LAB KOMPUTER		', 5, 20, 'R5.3 Belakang.JPEG', 'R5.3 Depan.JPEG', 1),
(14, 'R 5.4', 'LAB KOMPUTER		', 5, 20, 'R5.4 Belakang.JPEG', 'R5.4 Depan.JPEG', 1),
(15, 'R 5.5', 'STUDIO BLENDED LEARNING		', 5, 10, 'R5.5 Belakang.JPG', 'R5.5 Depan.JPG', 1),
(16, 'R 5.6', 'LAB KOMPUTER', 5, 20, 'R5.6 Belakang.JPEG', 'R5.6 Depan.JPEG', 1),
(17, 'R 6.1', 'RUANG KELAS KECIL', 6, 49, 'R6.1 Belakang.JPEG', 'R6.1 Depan.JPEG', 0),
(18, 'R 6.2', 'RUANG KELAS KECIL', 6, 40, 'R6.2 Belakang.JPEG', 'R6.2 Depan.JPEG', 1),
(19, 'R 6.3', 'LAB KOMPUTER', 6, 20, 'R6.3 Belakang.JPEG', 'R6.3 Depan.JPEG', 1),
(20, 'R 6.4', 'LAB KOMPUTER', 6, 20, 'R6.4 Belakang.JPEG', 'R6.4 Depan.JPEG', 1),
(21, 'R 7.1', 'RUANG KELAS KECIL', 7, 40, 'R7.1 Belakang.JPEG', 'R7.1 Depan.JPEG', 1),
(22, 'R 7.2', 'RUANG KELAS KECIL', 7, 40, 'R7.2 Belakang.JPEG', 'R7.2 Depan.JPEG', 1),
(23, 'R 7.3.1', 'RUANG LAB BIASA', 7, 30, 'R7.3 Belakang.JPEG', 'R7.3 Depan.JPEG', 1),
(24, 'R 7.3.2', 'RUANG LAB BIASA', 7, 20, 'R7.4 Belakang.JPEG', 'R7.4 Depan.JPEG', 1),
(25, 'R 8.1', 'RUANG KELAS KECIL', 8, 24, 'R8.1 Belakang.JPEG', 'R8.1 Depan.JPEG', 1),
(26, 'R 8.2', 'RUANG KELAS BESAR', 8, 44, 'R8.2 Belakang.JPG', 'R8.2 Depan.JPG', 1),
(27, 'R 8.3', 'RUANG KELAS BESAR', 8, 56, 'R8.3 Belakang.JPEG', 'R8.3 Depan.JPEG', 1),
(28, 'R 8.4', 'RUANG KELAS BESAR', 8, 56, 'R8.4 Belakang.JPEG', 'R8.4 Depan.JPEG', 1),
(29, 'R 9.1', 'RUANG KELAS KECIL', 9, 48, 'R9.1 Belakang.JPEG', 'R9.1 Depan.JPEG', 1),
(30, 'R 9.2', 'RUANG KELAS BESAR', 9, 80, 'R9.2 Belakang.JPG', 'R9.2 Depan.JPG', 1),
(31, 'R 9.3', 'WORK SPACE SERVICE EXCELLENT', 9, 53, 'R9.3 Belakang.JPEG', 'R9.3 Depan.JPEG', 1),
(32, 'R 9.4', 'RUANG KELAS BESAR', 9, 64, 'R9.4 Belakang.JPEG', 'R9.4 Depan.JPEG', 1),
(33, 'R 10.1', 'RUANG KELAS KECIL', 10, 24, 'R10.1 Belakang.JPEG', 'R10.1 Depan.JPEG', 1),
(34, 'R 10.2', 'RUANG KELAS BESAR', 10, 36, 'R10.2 Belakang.JPEG', 'R10.2 Depan.JPEG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_acara`
--
ALTER TABLE `detail_acara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_acara_ibfk_1` (`id_peminjaman`);

--
-- Indexes for table `detail_ruangan`
--
ALTER TABLE `detail_ruangan`
  ADD PRIMARY KEY (`id_DR`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  ADD PRIMARY KEY (`id_FR`),
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`id_lantai`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_peminjam` (`id_peminjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengembalian_ibfk_1` (`id_peminjaman`);

--
-- Indexes for table `peraturan`
--
ALTER TABLE `peraturan`
  ADD PRIMARY KEY (`id_peraturan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_acara`
--
ALTER TABLE `detail_acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `detail_ruangan`
--
ALTER TABLE `detail_ruangan`
  MODIFY `id_DR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  MODIFY `id_FR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lantai`
--
ALTER TABLE `lantai`
  MODIFY `id_lantai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `peraturan`
--
ALTER TABLE `peraturan`
  MODIFY `id_peraturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_acara`
--
ALTER TABLE `detail_acara`
  ADD CONSTRAINT `detail_acara_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_ruangan`
--
ALTER TABLE `detail_ruangan`
  ADD CONSTRAINT `detail_ruangan_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  ADD CONSTRAINT `fasilitas_ruangan_ibfk_1` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fasilitas_ruangan_ibfk_2` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD CONSTRAINT `peminjam_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_peminjam`) REFERENCES `peminjam` (`id_peminjam`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
