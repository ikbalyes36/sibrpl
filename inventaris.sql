-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 01:08 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminfakultas`
--

CREATE TABLE `adminfakultas` (
  `usernamefak` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `namaadmin` varchar(10) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminfakultas`
--

INSERT INTO `adminfakultas` (`usernamefak`, `password`, `namaadmin`, `fakultas`, `alamat`, `nohp`) VALUES
('FIF', 'OKEBANGET', 'nurulFIF', 'INFORMATIKA', 'Dayeuhkolot', '081221841826'),
('FKB', 'FKB', 'imamasad', 'KOMUNIKASI BISNIS', 'Telkom', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `adminuniversitas`
--

CREATE TABLE `adminuniversitas` (
  `usernameuniv` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `namaadmin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuniversitas`
--

INSERT INTO `adminuniversitas` (`usernameuniv`, `password`, `namaadmin`) VALUES
('admin', 'admin', 'admindito');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` varchar(7) NOT NULL,
  `namabarang` varchar(20) NOT NULL,
  `kepemilikan` varchar(3) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `kondisibaik` int(5) NOT NULL,
  `kondisiburuk` int(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `tanggalinput` datetime NOT NULL,
  `usernameuniv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `kepemilikan`, `jumlah`, `kondisibaik`, `kondisiburuk`, `keterangan`, `tanggalinput`, `usernameuniv`) VALUES
('DBR0001', 'Kursi', 'FEB', 500, 500, 0, 'iseng kka', '2016-05-09 23:33:31', 'admin'),
('DBR0002', 'Kursi', 'FIF', 500, 400, 100, 'haha', '2016-05-10 01:18:19', 'admin'),
('DBR0003', 'Kursi', 'FRI', 500, 500, 0, 'Kondisi Baik', '2016-05-09 23:05:09', 'admin'),
('DBR0004', 'Meja', 'FRI', 500, 500, 0, 'Kondisi Baik', '2016-05-11 20:33:49', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `detailpengajuan`
--

CREATE TABLE `detailpengajuan` (
  `iddetailpengajuan` int(3) NOT NULL,
  `idpengajuan` varchar(7) NOT NULL,
  `namabarang` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpengajuan`
--

INSERT INTO `detailpengajuan` (`iddetailpengajuan`, `idpengajuan`, `namabarang`, `jumlah`) VALUES
(16, 'FIF0001', 'Proyektor', 20);

-- --------------------------------------------------------

--
-- Table structure for table `mutasibarang`
--

CREATE TABLE `mutasibarang` (
  `idmutasibarang` int(5) NOT NULL,
  `idbarang` varchar(7) NOT NULL,
  `kepemilikanawal` varchar(3) NOT NULL,
  `kepemilikanbaru` varchar(3) NOT NULL,
  `tanggalmutasi` datetime NOT NULL,
  `usernameuniv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasibarang`
--

INSERT INTO `mutasibarang` (`idmutasibarang`, `idbarang`, `kepemilikanawal`, `kepemilikanbaru`, `tanggalmutasi`, `usernameuniv`) VALUES
(6, 'DBR0001', 'FIK', 'FEB', '2016-05-09 23:33:31', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mutasitanah`
--

CREATE TABLE `mutasitanah` (
  `idmutasitanah` int(5) NOT NULL,
  `idtanah` varchar(5) NOT NULL,
  `kepemilikanawal` varchar(3) NOT NULL,
  `kepemilikanbaru` varchar(3) NOT NULL,
  `tanggalmutasi` datetime NOT NULL,
  `usernameuniv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasitanah`
--

INSERT INTO `mutasitanah` (`idmutasitanah`, `idtanah`, `kepemilikanawal`, `kepemilikanbaru`, `tanggalmutasi`, `usernameuniv`) VALUES
(5, 'DTN02', 'FIF', 'FEB', '2016-05-09 23:47:49', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idpengajuan` varchar(7) NOT NULL,
  `tanggalpengajuan` date NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `usernamefak` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `usernameuniv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`idpengajuan`, `tanggalpengajuan`, `keterangan`, `usernamefak`, `status`, `usernameuniv`) VALUES
('FIF0001', '2016-05-11', 'maaf', 'FIF', 'Ditolak', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tanah`
--

CREATE TABLE `tanah` (
  `idtanah` varchar(5) NOT NULL,
  `luas` int(10) NOT NULL,
  `kepemilikan` varchar(3) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `tanggalinput` datetime NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `usernameuniv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanah`
--

INSERT INTO `tanah` (`idtanah`, `luas`, `kepemilikan`, `lokasi`, `tanggalinput`, `keterangan`, `usernameuniv`) VALUES
('DTN01', 100, 'FKB', '123123', '2016-05-09 23:45:49', 'iseng', 'admin'),
('DTN02', 150, 'FEB', '090821', '2016-05-09 23:47:49', 'iseng', 'admin'),
('DTN03', 500, 'FIF', 'Belakang SC', '2016-05-02 00:00:00', 'MANTAP', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminfakultas`
--
ALTER TABLE `adminfakultas`
  ADD PRIMARY KEY (`usernamefak`);

--
-- Indexes for table `adminuniversitas`
--
ALTER TABLE `adminuniversitas`
  ADD PRIMARY KEY (`usernameuniv`),
  ADD KEY `nama_admin` (`namaadmin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`),
  ADD KEY `username` (`usernameuniv`);

--
-- Indexes for table `detailpengajuan`
--
ALTER TABLE `detailpengajuan`
  ADD PRIMARY KEY (`iddetailpengajuan`),
  ADD KEY `id_pengajuan` (`idpengajuan`);

--
-- Indexes for table `mutasibarang`
--
ALTER TABLE `mutasibarang`
  ADD PRIMARY KEY (`idmutasibarang`),
  ADD KEY `id_barang` (`idbarang`);

--
-- Indexes for table `mutasitanah`
--
ALTER TABLE `mutasitanah`
  ADD PRIMARY KEY (`idmutasitanah`),
  ADD KEY `id_tanah` (`idtanah`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idpengajuan`),
  ADD KEY `username` (`usernamefak`),
  ADD KEY `username_2` (`usernamefak`),
  ADD KEY `disetujuioleh` (`usernameuniv`),
  ADD KEY `disetujuioleh_2` (`usernameuniv`);

--
-- Indexes for table `tanah`
--
ALTER TABLE `tanah`
  ADD PRIMARY KEY (`idtanah`),
  ADD KEY `username` (`usernameuniv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailpengajuan`
--
ALTER TABLE `detailpengajuan`
  MODIFY `iddetailpengajuan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `mutasibarang`
--
ALTER TABLE `mutasibarang`
  MODIFY `idmutasibarang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mutasitanah`
--
ALTER TABLE `mutasitanah`
  MODIFY `idmutasitanah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`usernameuniv`) REFERENCES `adminuniversitas` (`usernameuniv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailpengajuan`
--
ALTER TABLE `detailpengajuan`
  ADD CONSTRAINT `detailpengajuan_ibfk_1` FOREIGN KEY (`idpengajuan`) REFERENCES `pengajuan` (`idpengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mutasibarang`
--
ALTER TABLE `mutasibarang`
  ADD CONSTRAINT `mutasibarang_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mutasitanah`
--
ALTER TABLE `mutasitanah`
  ADD CONSTRAINT `mutasitanah_ibfk_1` FOREIGN KEY (`idtanah`) REFERENCES `tanah` (`idtanah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`usernamefak`) REFERENCES `adminfakultas` (`usernamefak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_ibfk_2` FOREIGN KEY (`usernameuniv`) REFERENCES `adminuniversitas` (`usernameuniv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tanah`
--
ALTER TABLE `tanah`
  ADD CONSTRAINT `tanah_ibfk_1` FOREIGN KEY (`usernameuniv`) REFERENCES `adminuniversitas` (`usernameuniv`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
