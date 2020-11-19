-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 02:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `londri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(11) NOT NULL,
  `Nama_admin` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_admin`, `Nama_admin`, `alamat`, `no_telepon`, `status`, `Username`, `Password`) VALUES
(1, 'Eva Dwi meliani', 'Jl Kalibata Tengah V No.16', '082210397356', 'Aktif', 'adminlaundry', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Id_barang` int(11) NOT NULL,
  `Nama_barang` varchar(30) NOT NULL,
  `Harga_barang` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Id_barang`, `Nama_barang`, `Harga_barang`) VALUES
(3, 'Celana Panjang', 11000),
(4, 'Celana Pendek', 9000),
(5, 'Dress', 15000),
(6, 'Long Dress', 16000),
(7, 'Jas', 13000),
(8, 'Jas Stelan', 18000),
(9, 'Jas Wanita', 11000),
(10, 'Jaket', 15000),
(11, 'Jeans', 12000),
(12, 'Kemeja', 11000),
(13, 'Batik', 13000),
(14, 'Baju Kaos', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `kiloan`
--

CREATE TABLE `kiloan` (
  `Id_Kiloan` int(11) NOT NULL,
  `Kode_order` varchar(20) NOT NULL,
  `jenis_layanan` varchar(15) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `No_Hp` varchar(200) NOT NULL,
  `Tanggal_masuk` varchar(10) DEFAULT NULL,
  `Tanggal_ambil` varchar(10) DEFAULT NULL,
  `Status` varchar(60) NOT NULL,
  `Total_berat_cucian` float NOT NULL,
  `Harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kiloan`
--

INSERT INTO `kiloan` (`Id_Kiloan`, `Kode_order`, `jenis_layanan`, `username`, `nama`, `Alamat`, `No_Hp`, `Tanggal_masuk`, `Tanggal_ambil`, `Status`, `Total_berat_cucian`, `Harga`) VALUES
(84, 'LK-0001', 'Antar Jemput', 'evad ', 'Eva Dwi Meliani ', 'Jl.Kalibata tengah v no.16 ', '082210397356 ', '03-08-2019', '09-08-2019', 'Selesai', 5.8, 40600),
(87, 'LK-0003', 'Antar Jemput', 'ria ', 'Ria Kurniawati ', 'Jl.margonda raya no.16  ', '082210101223 ', '02-08-2019', '03-08-2019', 'Sedang di antar', 5.9, 41300),
(90, 'LK-0006', '', NULL, 'isabel', 'jl merdeka', '98765432', '19-08-2019', '21-08-2019', 'Selesai', 2, 14000),
(91, 'LK-0007', 'Antar Jemput', 'ria ', 'Ria Kurniawati ', 'Jl.margonda raya no.16  ', '082210101223 ', '25-08-2019', '27-08-2019', 'Belum', 3, 21000),
(92, 'LK-0008', '', NULL, 'alika', 'jalan cinta', '0998877665', '14-08-2019', '16-08-2019', 'Belum', 11, 77000),
(93, 'LK-0009', '', NULL, 'maman', 'jl. bunga 1 no.11', '12323212', '29-08-2019', '30-08-2019', 'Belum', 33, 231000),
(94, 'LK-0010', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '24-08-2019', '26-08-2019', 'Belum', 6, 42000),
(95, 'LK-0011', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '01-08-2019', '02-08-2019', 'Belum', 9, 63000),
(96, 'LK-0012', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '17-08-2019', '18-08-2019', 'Belum', 3.2, 22400),
(97, 'LK-0013', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '25-08-2019', '27-08-2019', 'Belum', 2.2, 15400),
(98, 'LK-0014', 'Antar Jemput', 'evad ', 'Eva Dwi Meliani ', 'Jl.Kalibata tengah v no.16 ', '082210397356 ', '05-09-2019', '06-09-2019', 'Belum', 2, 14000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_pelanggan` varchar(200) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pelanggan`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `no_telepon`, `username`, `password`) VALUES
('USR-0001', 'Eva Dwi Meliani', 'perempuan', 'Jl.Kalibata tengah v no.16', '082210397356', 'evad', 'e10adc3949ba59abbe56e057f20f883e'),
('USR-0002', 'ardhi', 'laki-laki', 'jl berkah', '242342', 'godhi', 'e10adc3949ba59abbe56e057f20f883e'),
('USR-0003', 'Ria Kurniawati', 'perempuan', 'Jl.margonda raya no.16 ', '082210101223', 'ria', 'e10adc3949ba59abbe56e057f20f883e'),
('USR-0004', 'urip dinoarti', 'laki-laki', 'jl. kesehatan 3 rt 5 rw 06 no 333 ', '099886655443', 'urip', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `Id_satuan` int(11) NOT NULL,
  `Kode_order` varchar(20) NOT NULL,
  `jenis_layanan` varchar(15) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `Tanggal_masuk` varchar(10) NOT NULL,
  `Tanggal_ambil` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Kuantitas` int(20) NOT NULL,
  `Total_Harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`Id_satuan`, `Kode_order`, `jenis_layanan`, `username`, `Nama`, `Alamat`, `No_Hp`, `Tanggal_masuk`, `Tanggal_ambil`, `Status`, `Kuantitas`, `Total_Harga`) VALUES
(22, 'LS-0001', 'Antar Jemput', 'evad ', 'Eva Dwi Meliani ', 'Jl.Kalibata tengah v no.16 ', '082210397356 ', '09-08-2019', '14-08-2019', 'Selesai', 8, 88000),
(23, 'LS-0002', '', NULL, 'lala', 'jl ceria', '2232', '23-08-2019', '25-08-2019', 'Selesai', 5, 57000),
(24, 'LS-0003', '', NULL, 'aryo', 'kalibata', '082299886464', '23-08-2019', '30-08-2019', 'Belum', 22, 280000),
(25, 'LS-0004', 'Antar Jemput', 'ria ', 'Ria Kurniawati ', 'Jl.margonda raya no.16  ', '082210101223 ', '01-08-2019', '03-08-2019', 'Belum', 7, 70000),
(26, 'LS-0005', 'Antar Jemput', 'ria ', 'Ria Kurniawati ', 'Jl.margonda raya no.16  ', '082210101223 ', '22-08-2019', '30-08-2019', 'Sedang di antar', 7, 72000),
(27, 'LS-0006', 'Antar Jemput', 'ria ', 'Ria Kurniawati ', 'Jl.margonda raya no.16  ', '082210101223 ', '07-08-2019', '01-08-2019', 'Belum', 3, 33000),
(28, 'LS-0007', '', NULL, 'nono', 'jl cawang', '87654321345', '29-08-2019', '31-08-2019', 'Selesai', 4, 48000),
(32, 'LS-0008', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '09-08-2019', '15-08-2019', 'Belum', 5, 58000),
(34, 'LS-0009', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '08-08-2019', '16-08-2019', 'Belum', 2, 20000),
(35, 'LS-0010', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '08-08-2019', '23-08-2019', 'Belum', 2, 20000),
(36, 'LS-0011', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '09-08-2019', '16-08-2019', 'Belum', 2, 20000),
(37, 'LS-0012', 'Antar Jemput', 'urip ', 'urip dinoarti ', 'jl. kesehatan 3 rt 5 rw 06 no 333  ', '099886655443 ', '10-08-2019', '16-08-2019', 'Belum', 2, 20000),
(38, 'LS-0013', 'Antar Jemput', 'evad ', 'Eva Dwi Meliani ', 'Jl.Kalibata tengah v no.16 ', '082210397356 ', '26-08-2019', '28-08-2019', 'Selesai', 2, 20000),
(39, 'LS-0014', 'Antar Jemput', 'evad ', 'Eva Dwi Meliani ', 'Jl.Kalibata tengah v no.16 ', '082210397356 ', '26-08-2019', '28-08-2019', 'Sedang di proses', 5, 54000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id_barang`);

--
-- Indexes for table `kiloan`
--
ALTER TABLE `kiloan`
  ADD PRIMARY KEY (`Id_Kiloan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`Id_satuan`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `Id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kiloan`
--
ALTER TABLE `kiloan`
  MODIFY `Id_Kiloan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `Id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kiloan`
--
ALTER TABLE `kiloan`
  ADD CONSTRAINT `kiloan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `pelanggan` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `satuan`
--
ALTER TABLE `satuan`
  ADD CONSTRAINT `satuan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `pelanggan` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
