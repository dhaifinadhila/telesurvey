-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Agu 2017 pada 11.18
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telesurvey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_area`
--

CREATE TABLE `tb_area` (
  `id_area` int(11) NOT NULL,
  `kode_distribusi` int(11) NOT NULL,
  `kode_area` int(11) NOT NULL,
  `nama_area` varchar(50) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_area`
--

INSERT INTO `tb_area` (`id_area`, `kode_distribusi`, `kode_area`, `nama_area`, `keterangan`) VALUES
(1, 54, 54000, 'Kantor Distribusi', '90999'),
(22, 54, 54110, 'Menteng', '-'),
(23, 54, 54130, 'Cempaka Putih', '-'),
(24, 54, 54210, 'Bandengan', '-'),
(25, 54, 54330, 'Kebon Jeruk', '-'),
(26, 54, 54310, 'Bulungan', '-'),
(27, 54, 54630, 'Cengkareng', '-'),
(28, 54, 54710, 'Kramat Jati', '-'),
(29, 54, 54740, 'Pasar Minggu', '-'),
(30, 54, 54720, 'Ciracas', '-'),
(31, 54, 54530, 'Marunda', '-'),
(41, 54, 54840, 'UPJ PRIMA SELATAN', '-'),
(61, 54, 54360, 'Ciputat', '-'),
(62, 54, 54380, 'Bintaro', '-'),
(63, 54, 54410, 'Jatinegara', '-'),
(64, 54, 54420, 'Pondok Kopi', '-'),
(65, 54, 54510, 'Tanjung Priuk', '-'),
(66, 54, 54610, 'Cikokol', '-'),
(67, 54, 54640, 'Cikupa', '-'),
(68, 54, 54660, 'Teluk Naga', '-'),
(69, 54, 54730, 'Pondok Gede', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_call`
--

CREATE TABLE `tb_call` (
  `id_call` int(11) NOT NULL,
  `id_master` int(11) NOT NULL,
  `nama_rek` varchar(50) NOT NULL,
  `nama_penjawab` varchar(50) NOT NULL,
  `kesesuaian_nama` int(11) NOT NULL,
  `kepemilikan` int(11) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `jumlah_gaji` int(11) NOT NULL,
  `pemakaian_bln` int(11) NOT NULL,
  `penghematan` int(11) NOT NULL,
  `alasan_hemat` varchar(50) NOT NULL,
  `cara_hemat` varchar(50) NOT NULL,
  `interest_alat_listrik` int(11) NOT NULL,
  `pengetahuan_tarif` int(11) NOT NULL,
  `gangguan_listrik` int(11) NOT NULL,
  `pengaruh_ac` int(11) NOT NULL,
  `biaya_tagihan` int(11) NOT NULL,
  `saran` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_call` date NOT NULL,
  `info_01` varchar(50) DEFAULT NULL,
  `info_02` varchar(50) DEFAULT NULL,
  `info_03` varchar(50) DEFAULT NULL,
  `info_04` varchar(50) DEFAULT NULL,
  `info_05` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_distribusi`
--

CREATE TABLE `tb_distribusi` (
  `id_distribusi` int(11) NOT NULL,
  `kode_distribusi` int(11) NOT NULL,
  `nama_distribusi` varchar(40) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_distribusi`
--

INSERT INTO `tb_distribusi` (`id_distribusi`, `kode_distribusi`, `nama_distribusi`, `keterangan`) VALUES
(2, 54, 'Distribusi Jakarta Raya', '--\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file_upload`
--

CREATE TABLE `tb_file_upload` (
  `id_file_upload` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `kode_area` int(6) NOT NULL,
  `nama_file` varchar(40) NOT NULL,
  `jumlah_row` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `info_01` varchar(10) DEFAULT NULL,
  `info_02` varchar(10) DEFAULT NULL,
  `info_03` varchar(10) DEFAULT NULL,
  `info_04` varchar(10) DEFAULT NULL,
  `info_05` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_file_upload`
--

INSERT INTO `tb_file_upload` (`id_file_upload`, `id_pengguna`, `kode_area`, `nama_file`, `jumlah_row`, `tgl_upload`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`) VALUES
(96, 5, 233, 'Format Tele Tunggakan1.xlsx', 0, '2017-03-16', '', '', '', '', ''),
(97, 5, 233, 'Format Tele Tunggakan12.xlsx', 0, '2017-03-16', '', '', '', '', ''),
(98, 5, 123, 'Format Tele Tunggakan14.xlsx', 0, '2017-03-17', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hak_akses`
--

CREATE TABLE `tb_hak_akses` (
  `id_hak_akses` int(11) NOT NULL,
  `kode_hak_akses` varchar(6) NOT NULL,
  `nama_hak_akses` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hak_akses`
--

INSERT INTO `tb_hak_akses` (`id_hak_akses`, `kode_hak_akses`, `nama_hak_akses`) VALUES
(8, '100', 'Viewer'),
(9, '200', 'Agent'),
(10, '300', 'QA'),
(11, '400', 'Supervisor'),
(12, '500', 'Manager Area'),
(13, '600', 'Management');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master`
--

CREATE TABLE `tb_master` (
  `id_master` int(11) NOT NULL,
  `kode_distribusi` int(11) NOT NULL,
  `kode_area` int(11) NOT NULL,
  `kode_rayon` int(11) NOT NULL,
  `id_pelanggan` bigint(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kogol` varchar(20) NOT NULL,
  `tarif` varchar(10) NOT NULL,
  `daya` int(11) NOT NULL,
  `status_call` int(11) NOT NULL COMMENT '0=Blm Call;1=Sudah Call; 2=Gagal Call;3=Kadaluwarsa',
  `id_file_upload` int(11) NOT NULL,
  `info_01` int(11) NOT NULL,
  `info_02` int(11) NOT NULL,
  `info_03` int(11) NOT NULL,
  `info_04` int(11) NOT NULL,
  `info_05` int(11) NOT NULL,
  `info_06` int(11) NOT NULL,
  `info_07` int(11) NOT NULL,
  `info_08` int(11) NOT NULL,
  `info_09` int(11) NOT NULL,
  `info_10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_master`
--

INSERT INTO `tb_master` (`id_master`, `kode_distribusi`, `kode_area`, `kode_rayon`, `id_pelanggan`, `nama`, `no_telp`, `no_hp`, `alamat`, `kogol`, `tarif`, `daya`, `status_call`, `id_file_upload`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`, `info_06`, `info_07`, `info_08`, `info_09`, `info_10`) VALUES
(11, 0, 0, 0, 546301897282, 'PT. CAKRAWALA RESPATI', '02129423773', '02129423774', 'PR CITRA SEC.6 BLOK H.6A NO 42 KALIDERES', '', 'R3', 11000, 1, 96, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 546301991324, 'Alwafi', '085217168828', '085217168828', 'JL TMN SURYA 2 BLOK E5 NO 23 KALIDERES', '', 'R3', 7700, 2, 97, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 546301991324, 'Putri Amalia', '085217168828', '085217168828', 'JL TMN SURYA 2 BLOK E5 NO 23 KALIDERES', '', 'R3', 7700, 2, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 546301991321, 'Dianti', '085217168828', '085217168828', 'JL TMN SURYA 2 BLOK E5 NO 23 KALIDERES', '', 'R4', 7701, 0, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 546301991328, 'Indah R', '085217168828', '085217168828', 'JL TMN SURYA 2 BLOK E5 NO 23 KALIDERES', '', 'R5', 7702, 0, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 546301991341, 'Irene', '085217168828', '085217168828', 'JL TMN SURYA 2 BLOK E5 NO 23 KALIDERES', '', 'R6', 7703, 0, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 546301991110, 'Patricia', '085217168828', '085217168828', 'JL TMN SURYA 2 BLOK E5 NO 23 KALIDERES', '', 'R7', 7704, 0, 98, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_pengguna` int(11) NOT NULL,
  `kode_distribusi` int(11) NOT NULL,
  `kode_area` int(11) NOT NULL,
  `kode_rayon` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `kode_hak_akses` varchar(6) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `info_01` int(11) DEFAULT NULL,
  `info_02` int(11) DEFAULT NULL,
  `info_03` int(11) DEFAULT NULL,
  `info_04` int(11) DEFAULT NULL,
  `info_05` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_pengguna`, `kode_distribusi`, `kode_area`, `kode_rayon`, `nip`, `nama`, `email`, `passwd`, `jabatan`, `kode_hak_akses`, `keterangan`, `info_01`, `info_02`, `info_03`, `info_04`, `info_05`) VALUES
(1, 54, 54000, 54000, '8409077-Z', 'Kustan Setiawan', 'kustan@gmail.com', 'kustan123', 'SPV Database', '400', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 54, 54000, 54000, '6991107M', 'PEPEN SUWARGANA', 'PEPEN.SUWARGANA', 'PEPENCBC123', 'ADMINISTRATOR CBC', '400', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 54, 54000, 54000, '0', 'Ratna Dewi ', 'CBC.ratna.dewi', 'cbc0031', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 54, 54000, 54000, '0', 'Yora Friano', 'CBC.yora.friano', 'cbc0023', 'SUPERVISOR CBC', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 54, 54000, 54000, '0', 'Anisha Septiani Hapsari', 'CBC.anisha.hapsari', 'yuwana22', 'QUALITY ASSURANCE', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 54, 54000, 54000, '0', 'Dewi Komalasari ', 'CBC.dewi.komalasari', 'cbc0039', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 54, 54000, 54000, '0', 'Nafilla Oktaviana', 'CBC.nafilla.oktaviana', 'cbc0042', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 54, 54000, 54000, '0', 'Sarah Alfianti', 'CBC.sarah.alfianti', 'cbc0360', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 54, 54000, 54000, '0', 'Devina Aulia Natasya', 'CBC.devina.natasya', 'cbc0025', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 54, 54000, 54000, '0', 'Nungki Pradita Hussen', 'CBC.nungki.hussen', 'cbc0015', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 54, 54000, 54000, '0', 'Nur Fitria Ramadhani', 'CBC.nur.fitria', 'cbc0096', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 54, 54000, 54000, '0', 'Irawati', 'CBC.irawati', 'cbc0056', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 54, 54000, 54000, '0', 'RIHA JUMIATI', 'CBC.riha.jumiati', 'cbc0080', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 54, 54000, 54000, '0', 'Ardiyanti Kusniasari', 'CBC.ardiyanti.kurniasari', 'cbc0073', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 54, 54000, 54000, '0', 'NOVA MELASARI', 'CBC.nova.melasari', 'cbc0072', 'AGENT', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 54, 54000, 54000, '7507305Z', 'Nurul Ashtri Damayanti', 'Nurul.Ashtri@pln.co.id', '123456', 'SPV contact center ', '400', NULL, NULL, NULL, NULL, NULL, NULL),
(101, 54, 54000, 54000, '6585185M', 'SANTOSO', 'SANTOSO', 'SANTOSO123', 'KOORDINATOR CALLBACK', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(121, 54, 54000, 54000, '6893001K', 'Syamsul Huda', 'huda@pln.co.id', '123456', 'GENERAL MANAGER', '400', NULL, NULL, NULL, NULL, NULL, NULL),
(141, 54, 54840, 54840, '6893174D', 'akhiyar', 'akhiyar', 'pln@123', 'MANAJER PERENCANAAN', '600', NULL, NULL, NULL, NULL, NULL, NULL),
(142, 54, 54000, 54000, '6994033P', 'MATIAS.HARYANTO', 'MATIAS.HARYANTO', 'pln@123', 'DM NIAGA', '400', NULL, NULL, NULL, NULL, NULL, NULL),
(143, 54, 54000, 54000, '0', 'MARISYA FADHILAH', 'CBC.marisya.fadhilah', 'cbc0075', 'Agent', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(144, 54, 54000, 54000, '0', 'AULIYAWATI', 'CBC.auliyawati', 'cbc0079', 'Agent PT.MUST', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(145, 54, 54210, 54210, '0', 'APL_BANDENGAN', 'APL_BDG', 'APLBDG@123', 'KARYAWAN AREA BANDENGAN', '100', NULL, NULL, NULL, NULL, NULL, NULL),
(146, 54, 54380, 54380, '0', 'APL_BINTARO', 'APL_BTR', 'APLBTR@123', 'KARYAWAN AREA BINTARO', '100', NULL, NULL, NULL, NULL, NULL, NULL),
(147, 54, 54310, 54310, '0', 'APL_BULUNGAN', 'APL_BLG', 'APLBLG@123', 'KARYAWAN AREA BULUNGAN', '100', NULL, NULL, NULL, NULL, NULL, NULL),
(161, 54, 54000, 54000, '0', 'AMELIA AGUSTINA', 'CBC.amelia.agustina', 'cbc0074', 'AGENT CBC MUST', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(181, 54, 54000, 54000, '0', 'SITI MILLATI', 'CBC.siti.millati', 'cbc0077', 'AGENT PT MUST', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(201, 54, 54000, 1, 'CBCmust 0081', 'FANNY DESLITA', 'CBC.fanny.deslita', 'cbc0081', 'AGENT must', '200', NULL, NULL, NULL, NULL, NULL, NULL),
(202, 54, 54000, 0, '1', '1', '1', '1', '1', '100', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_area`
--
ALTER TABLE `tb_area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `tb_call`
--
ALTER TABLE `tb_call`
  ADD PRIMARY KEY (`id_call`);

--
-- Indexes for table `tb_distribusi`
--
ALTER TABLE `tb_distribusi`
  ADD PRIMARY KEY (`id_distribusi`),
  ADD KEY `kode_distribusi` (`kode_distribusi`);

--
-- Indexes for table `tb_file_upload`
--
ALTER TABLE `tb_file_upload`
  ADD PRIMARY KEY (`id_file_upload`);

--
-- Indexes for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`),
  ADD KEY `kode_hak_akses` (`kode_hak_akses`);

--
-- Indexes for table `tb_master`
--
ALTER TABLE `tb_master`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_area`
--
ALTER TABLE `tb_area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `tb_call`
--
ALTER TABLE `tb_call`
  MODIFY `id_call` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_distribusi`
--
ALTER TABLE `tb_distribusi`
  MODIFY `id_distribusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_file_upload`
--
ALTER TABLE `tb_file_upload`
  MODIFY `id_file_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `tb_hak_akses`
--
ALTER TABLE `tb_hak_akses`
  MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_master`
--
ALTER TABLE `tb_master`
  MODIFY `id_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
