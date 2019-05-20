-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 02:40 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bjb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
  `id_score` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `ktp` int(50) NOT NULL,
  `kk` int(50) NOT NULL,
  `npwp` int(50) NOT NULL,
  `surat_nikah` int(50) NOT NULL,
  `tanggungan` int(50) NOT NULL,
  `penghasilan_usaha` int(50) NOT NULL,
  `penghasilan_kerja` int(50) NOT NULL,
  `persediaan_barang` int(50) NOT NULL,
  `laporan_keuangan` int(50) NOT NULL,
  `laba_rugi` int(50) NOT NULL,
  `struktur_pemodalan` int(50) NOT NULL,
  `domisili_usaha` int(50) NOT NULL,
  `agunan` int(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_score`, `id_kriteria`, `ktp`, `kk`, `npwp`, `surat_nikah`, `tanggungan`, `penghasilan_usaha`, `penghasilan_kerja`, `persediaan_barang`, `laporan_keuangan`, `laba_rugi`, `struktur_pemodalan`, `domisili_usaha`, `agunan`, `jumlah`) VALUES
(27, 36, 10, 10, 10, 1, 5, 1, 10, 10, 1, 1, 1, 10, 7, 77),
(28, 37, 10, 10, 10, 10, 3, 10, 7, 10, 10, 10, 1, 10, 5, 106);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_nasabah` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `surat_nikah` varchar(50) NOT NULL,
  `tanggungan` varchar(50) NOT NULL,
  `penghasilan_usaha` varchar(50) NOT NULL,
  `penghasilan_kerja` varchar(50) NOT NULL,
  `persediaan_barang` varchar(50) NOT NULL,
  `laporan_keuangan` varchar(50) NOT NULL,
  `laba_rugi` varchar(50) NOT NULL,
  `struktur_pemodalan` varchar(50) NOT NULL,
  `domisili_usaha` varchar(50) NOT NULL,
  `agunan` varchar(50) NOT NULL,
  `keterangan` enum('Diterima','Ditolak','','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `id_nasabah`, `id_user`, `ktp`, `kk`, `npwp`, `surat_nikah`, `tanggungan`, `penghasilan_usaha`, `penghasilan_kerja`, `persediaan_barang`, `laporan_keuangan`, `laba_rugi`, `struktur_pemodalan`, `domisili_usaha`, `agunan`, `keterangan`) VALUES
(36, 9, 12345, 'Elektrik', 'ADA', 'ADA', 'TIDAK', '4 - 5', 'Tidak', '> 10.000.000', 'ADA', 'TIDAK', 'TIDAK', 'TIDAK', 'Layak', 'Tanah Kosong / Sawah', 'Ditolak'),
(37, 8, 12345, 'Elektrik', 'ADA', 'ADA', 'ADA', '6 - 7', 'Layak', '10.000.000 - 5.000.000', 'ADA', 'ADA', 'ADA', 'TIDAK', 'Layak', 'Kios / Dasaran / Los / Lapak / Lain Sejenis', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `matrik`
--

CREATE TABLE IF NOT EXISTS `matrik` (
  `idmatrik` int(11) NOT NULL,
  `idnasabah` int(11) NOT NULL,
  `idkriteria` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `kriteria3` int(11) NOT NULL,
  `kriteria4` int(11) NOT NULL,
  `kriteria5` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matrik`
--

INSERT INTO `matrik` (`idmatrik`, `idnasabah`, `idkriteria`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`, `kriteria5`) VALUES
(23, 9, 36, 21, 7, 3, 10, 36),
(24, 8, 37, 27, 5, 21, 10, 43);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi`
--

CREATE TABLE IF NOT EXISTS `normalisasi` (
  `id` int(11) NOT NULL,
  `idmatrik` int(11) NOT NULL,
  `c1` double NOT NULL,
  `c2` double NOT NULL,
  `c3` double NOT NULL,
  `c4` double NOT NULL,
  `c5` double NOT NULL,
  `saw` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normalisasi`
--

INSERT INTO `normalisasi` (`id`, `idmatrik`, `c1`, `c2`, `c3`, `c4`, `c5`, `saw`) VALUES
(9, 23, 0.7, 0.7, 0.1, 1, 0.72, 9.46),
(10, 24, 1, 0.71428571428571, 1, 1, 1, 15.7143);

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE IF NOT EXISTS `pemohon` (
  `Id_nasabah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kantor_cabang` varchar(50) NOT NULL,
  `kantor_cabang_pembantu` varchar(50) NOT NULL,
  `nama_nasabah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `ktp` varchar(30) NOT NULL,
  `alamat` longtext NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jumlah_tanggungan` varchar(11) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_saudara_kandung` varchar(50) NOT NULL,
  `alamat_ibu` longtext NOT NULL,
  `telp_ibu` varchar(15) NOT NULL,
  `hp_ibu` varchar(15) NOT NULL,
  `status_tempat_tinggal` varchar(50) NOT NULL,
  `lama_menetap` varchar(50) NOT NULL,
  `lama_berusaha` varchar(50) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `sistem_penjualan` varchar(50) NOT NULL,
  `kepemilikan_tempat_usaha` varchar(50) NOT NULL,
  `lokasi_usaha` varchar(50) NOT NULL,
  `daerah_pemasaran` varchar(50) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `jumlah_tenaga_kerja` varchar(50) NOT NULL,
  `penglolaan_keuangan` varchar(50) NOT NULL,
  `debitur` varchar(50) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `jenis_jasa` varchar(50) NOT NULL,
  `pinjaman_sisapokok` varchar(50) NOT NULL,
  `pinjaman_angsuran` varchar(50) NOT NULL,
  `besar_permohonan` varchar(50) NOT NULL,
  `jangka_waktu` varchar(50) NOT NULL,
  `tujuan_pengguanaan` varchar(50) NOT NULL,
  `jenis_agunan` varchar(50) NOT NULL,
  `bukti_kepemilikan` varchar(50) NOT NULL,
  `nama_pemilik_agunan` varchar(50) NOT NULL,
  `hubungan_dengan_pemohon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`Id_nasabah`, `id_user`, `kantor_cabang`, `kantor_cabang_pembantu`, `nama_nasabah`, `tempat_lahir`, `tgl_lahir`, `ktp`, `alamat`, `kota`, `kodepos`, `telp`, `hp`, `kewarganegaraan`, `status`, `jumlah_tanggungan`, `pendidikan_terakhir`, `nama_ibu`, `nama_saudara_kandung`, `alamat_ibu`, `telp_ibu`, `hp_ibu`, `status_tempat_tinggal`, `lama_menetap`, `lama_berusaha`, `jenis_usaha`, `jenis_produk`, `sistem_penjualan`, `kepemilikan_tempat_usaha`, `lokasi_usaha`, `daerah_pemasaran`, `cabang`, `jumlah_tenaga_kerja`, `penglolaan_keuangan`, `debitur`, `nama_bank`, `jenis_jasa`, `pinjaman_sisapokok`, `pinjaman_angsuran`, `besar_permohonan`, `jangka_waktu`, `tujuan_pengguanaan`, `jenis_agunan`, `bukti_kepemilikan`, `nama_pemilik_agunan`, `hubungan_dengan_pemohon`) VALUES
(8, 12345, '129000', '129000', 'awaludin', 'pandeglang', '2018-08-14', '009086345236', 'cikeusik', 'pandeglang', 42286, '1234123', '12123123', 'WNA', 'Menikah', '1', 'SD', 'awasdas', 'asdsda', '1123213', '123123', '123123', 'Sewa/Kontrak', '1', '2', 'Pertanian', '', 'Konsinyasi/Bagi Hasil', 'Sewa', 'Lain-Lain', 'Sekitar Lokasi Usaha', 'Tidak Ada', '2', 'Tidak ada pencatatan maupun pemisahan pengelolaan ', 'Belum Pernah', 'asdasd', '', '100000000', '48', '900000000', '48', 'Modal Kerja', 'Tanah dan/atau Bangunan', 'SHW / SHGB / SHGP', 'awal', 'Suami/Istri'),
(9, 12345, '129000', '129001', 'erni nuraini', 'serang', '1995-07-20', '360909090', 'bumi banten permai ciracas', 'serang', 41628, '097970', '945678', 'WNI', 'Belum Menikah', '1', 'SMA', 'heva', 'a', '3', '1', '3', 'Milik Sendiri', '23', '23', 'Lainya', 'semuanya', 'Tunai', 'Sewa', 'Lain-Lain', 'Sekitar Lokasi Usaha', 'Tidak Ada', '12', 'Tidak ada pencatatan maupun pemisahan pengelolaan ', 'Belum Pernah', 'BRI', 'semuanya', '123412', '19', '100000000', '12', 'Modal Kerja', 'Tanah dan/atau Bangunan', 'SHW / SHGB / SHGP', 'erni', 'Orang Tua');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`) VALUES
(12345, 'awaludin ramdani', 'awal1234'),
(11214209, 'erni', 'erni1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_score`,`id_kriteria`), ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`,`id_nasabah`,`id_user`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `matrik`
--
ALTER TABLE `matrik`
  ADD PRIMARY KEY (`idmatrik`,`idnasabah`,`idkriteria`), ADD KEY `idnasabah` (`idnasabah`), ADD KEY `idkriteria` (`idkriteria`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`id`,`idmatrik`), ADD KEY `idmatrik` (`idmatrik`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`Id_nasabah`,`id_user`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_score` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `matrik`
--
ALTER TABLE `matrik`
  MODIFY `idmatrik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `Id_nasabah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bobot`
--
ALTER TABLE `bobot`
ADD CONSTRAINT `bobot_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kriteria`
--
ALTER TABLE `kriteria`
ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `matrik`
--
ALTER TABLE `matrik`
ADD CONSTRAINT `matrik_ibfk_1` FOREIGN KEY (`idnasabah`) REFERENCES `pemohon` (`Id_nasabah`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `matrik_ibfk_2` FOREIGN KEY (`idkriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `normalisasi`
--
ALTER TABLE `normalisasi`
ADD CONSTRAINT `normalisasi_ibfk_1` FOREIGN KEY (`idmatrik`) REFERENCES `matrik` (`idmatrik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemohon`
--
ALTER TABLE `pemohon`
ADD CONSTRAINT `pemohon_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
