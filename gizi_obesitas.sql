-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 07:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gizi_obesitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `buah`
--

CREATE TABLE `buah` (
  `Index` int(100) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` tinytext NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buah`
--

INSERT INTO `buah` (`Index`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(0, 'Alpokat', '1/2 buah besar', 60, 4.62, 0.54, 3.9),
(1, 'Anggur', '20 buah sedang', 165, 21.12, 0.825, 0.33),
(2, 'Apel merah', '1 buah kecil', 85, 12.665, 0.255, 0.34),
(3, 'Apel malang', '1 buah sedang', 75, 10.35, 0.225, 0.15),
(4, 'Belimbing', '1 buah besar', 140, 12.32, 0.56, 0.56),
(5, 'Blewah', '1 potong sedang', 70, 9.1, 0.91, 0.21),
(6, 'Duku', '16 buah sedang', 80, 12.88, 0.8, 1.6),
(7, 'Durian', '2 biji besar', 35, 9.8, 8.75, 1.05),
(8, 'Jambu air', '2 buah sedang', 110, 12.98, 0.66, 0.22),
(9, 'Jambu biji', '1 buah besar', 100, 12.2, 0.9, 0.3),
(10, 'Jambu boi', '1 buah kecil', 90, 12.78, 0.54, 0.27),
(11, 'Jeruk bali', '1 potong', 105, 13.02, 0.63, 0.21),
(12, 'Jeruk garut', '1 buah sedang', 115, 12.535, 0.92, 0.345),
(13, 'Jeruk manis', '2 buah sedang', 100, 12.32, 0.99, 0.22),
(14, 'Jeruk nipis', '1 1/4 gelas', 135, 16.605, 1.08, 5),
(15, 'Kedondong', '2 buah sedang', 120, 12.36, 1.2, 0.12),
(16, 'Kesemek', '1/2 buah', 65, 13, 0.52, 0.26),
(17, 'Kurma', '3 buah', 15, 11.2545, 0.3675, 0.0585),
(18, 'Leci', '10 buah', 75, 1.1925, 0.06, 0.03),
(19, 'Mangga', '3/4 buah besar', 90, 10.08, 0.63, 0.18),
(20, 'Manggis', '2 buah sedang', 80, 12.48, 0.48, 0.48),
(21, 'Markisa', '3/4 buah sedang', 35, 8.183, 0.77, 0.245),
(22, 'Melon', '1 potong', 90, 16.34, 1.596, 0.361),
(23, 'Nangka masak', '3 biji sedang', 45, 12.42, 0.54, 0.135),
(24, 'Nanas', '1/4 buah sedang', 85, 13.015, 0.38, 0.19),
(25, 'Pear', '1/2 buah sedang', 85, 21.811, 0.5355, 0.17),
(26, 'Pepaya', '1 potong besar', 190, 23.18, 0.95, 0),
(27, 'Pisang ambon', '1 buah sedang', 50, 12.9, 0.6, 0.1),
(28, 'Pisang kepok', '1 buah', 45, 11.835, 0.36, 0.225),
(29, 'Pisang mas', '2 buah', 40, 13.44, 0.56, 0.08),
(30, 'Pisang raja', '2 buah kecil', 40, 12.44, 0.48, 0.08),
(31, 'Rambutan', '8 buah', 75, 13.575, 0.675, 0.75),
(32, 'Sawo', '1 buah sedang', 55, 12.32, 0.275, 0.605),
(33, 'Salak', '2 buah sedang', 65, 13.585, 13.585, 0),
(34, 'Semangka', '2 potong sedang', 180, 12.42, 0.9, 0.36),
(35, 'Sirsak', '1/2 gelas', 60, 9.78, 0.6, 0.18),
(36, 'Srikaya', '2 buah besar', 50, 12.6, 0.85, 0.3),
(37, 'Strawberry', '4 buah besar', 215, 16.555, 1.505, 0.645);

-- --------------------------------------------------------

--
-- Table structure for table `sayur`
--

CREATE TABLE `sayur` (
  `Index` int(100) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` varchar(255) NOT NULL,
  `Gr` varchar(255) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sayur`
--

INSERT INTO `sayur` (`Index`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(0, 'Tomat sayur', '', '100', 4.2, 1, 0.3),
(1, 'Daun bawang', '', '100', 5.2, 1.8, 0.7),
(2, 'Bayam', '', '100', 6.5, 3.5, 0.5),
(3, 'Kapri muda', '', '100', 17.7, 6.7, 0.4),
(4, 'Brokoli', '', '100', 6.6, 2.8, 0.4),
(5, 'Kembang kol', '', '100', 4.9, 2.4, 0.2),
(6, 'Kemangi', '', '100', 7.5, 5.5, 0.3),
(7, 'Kangkung', '', '100', 5.4, 3, 0.3),
(8, 'Bit', '', '100', 9.6, 1.6, 0.1),
(9, 'Kol', '', '100', 5.3, 1.4, 0.2),
(10, 'Daun kecipir', '', '0.4', 8.5, 5, 0.5),
(11, 'Buncis', '', '100', 7.7, 2.4, 0.2),
(12, 'Daun Kacang Panjang', '', '100', 5.8, 4.1, 0.4),
(13, 'Terong', '', '100', 5.5, 1.1, 0.2),
(14, 'Daun talas', '', '100', 7.4, 3, 0.8),
(15, 'Labu waluh', '', '100', 1.1, 0.3, 0.3),
(16, 'Pepaya muda', '', '100', 4.9, 2.1, 0.1),
(17, 'Labu Siam', '', '100', 6.7, 0.6, 0.1),
(18, 'Pare', '', '100', 6.6, 1.1, 0.3),
(19, 'Kacang panjang', '', '100', 7.8, 2.7, 0.3),
(20, 'Genjer', '', '100', 7.7, 1.7, 0.2),
(21, 'Jagung muda', '', '100', 7.4, 2.2, 0.1),
(22, 'Sawi', '', '100', 4, 2.3, 0.3),
(23, 'Wortel', '', '100', 9.3, 1.2, 0.3),
(24, 'Bayam merah', '', '100', 10, 4.6, 0.5),
(25, 'Daun melinjo', '', '100', 21.3, 5, 1.3),
(26, 'Kacang kapri', '', '100', 17.7, 6.7, 0.4),
(27, 'Mlinjo', '', '100', 13.3, 5, 0.7),
(28, 'Daun talas', '', '100', 4.1, 2.1, 12.3),
(29, 'Kluwih', '', '100', 27.2, 1.5, 0.3),
(30, 'Daun papaya', '', '100', 11.9, 8, 2),
(31, 'Taoge kedelai', '', '100', 6.4, 9, 2.6),
(32, 'Daun singkong', '', '100', 13, 6.8, 1.2);

-- --------------------------------------------------------

--
-- Table structure for table `sumberhewani`
--

CREATE TABLE `sumberhewani` (
  `Index` int(100) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` tinytext NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumberhewani`
--

INSERT INTO `sumberhewani` (`Index`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(0, 'Babat', '1 potong sedang', 40, 0, 7.04, 1.68),
(1, 'Cumi-cumi', '1 ekor kecil', 45, 0.045, 7.245, 0.315),
(2, 'Daging ayam tanpa kulit', '1 potong sedang', 40, 0, 12.304, 1.416),
(3, 'Gabus kering', '1 potong kecil', 10, 0, 5.8, 0.4),
(4, 'Ikan asin kering', '1 potong sedang', 15, 0, 6.3, 0.225),
(5, 'Ikan kakap', '1/3 ekor besar', 35, 0, 7, 0.245),
(6, 'Ikan kembung', '1/3 ekor sedang', 30, 0, 6.6, 0.3),
(7, 'Ikan lele', '1/2 ekor sedang', 40, 1.4, 3.12, 14.52),
(8, 'Ikan mas', '1/3 ekor sedang', 45, 0, 7.2, 0.9),
(9, 'Ikan mujair', '1/3 ekor sedang', 30, 0, 5.61, 0.3),
(10, 'Ikan peda', '1 ekor kecil', 35, 1.33, 3.99, 0.665),
(11, 'Ikan pindang', '1/2 ekor sedang', 25, 0, 7, 1.05),
(12, 'Ikan segar', '1 potong sedang', 40, 0, 6.8, 1.8),
(13, 'Ikan teri kering', '1 sendok makan', 20, 0, 6.68, 0.6),
(14, 'Kerang', '1/2 gelas', 90, 3.24, 7.2, 0.99),
(15, 'Ikan lemuru', '1 potong sedang', 35, 0, 7, 1.05),
(16, 'Putih telur ayam', '2 1/2 butir', 65, 0.52, 7.02, 0),
(17, 'Rebon kering', '2 sendok makan', 10, 0.32, 5.94, 0.36),
(18, 'Rebon basah', '2 sendok makan', 45, 0.315, 7.29, 0.54),
(19, 'Selar kering', '1 ekor', 20, 0, 6.68, 0.6),
(20, 'Sepat kering', '1 potong sedang', 20, 0, 7.6, 2.8),
(21, 'Teri nasi', '1/3 gelas', 20, 0, 6.5, 0.12),
(22, 'Udang segar', '5 ekor sedang', 35, 0.035, 7.35, 0.07);

-- --------------------------------------------------------

--
-- Table structure for table `sumbernabati`
--

CREATE TABLE `sumbernabati` (
  `Index` int(100) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` tinytext NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumbernabati`
--

INSERT INTO `sumbernabati` (`Index`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(0, 'Kacang Hijau', '2 Sendok Makan', 20, 3.66, 1.74, 0.1),
(1, 'Kacang Kedelai', '2 1/2Sendok Makan', 25, 6.225, 10, 4.175),
(2, 'Kacang Merah', '2 Sendok Makan', 20, 5.6, 2.2, 0.44),
(3, 'Kacang Mete', '1 1/2 Sendok Makan', 15, 5.235, 2.925, 7.095),
(4, 'Kacang Tanah Kupas', '2 Sendok Makan', 15, 3.165, 3.795, 6.42),
(5, 'Kacang Tolo', '2 Sendok Makan', 20, 11.32, 4.88, 0.38),
(6, 'Keju Kacang Tanah', '1 Sendok Makan', 15, 3.135, 4.05, 7.35),
(7, 'Kembang Tahu', '1 Lembar', 20, 4.66, 9.78, 2.76),
(8, 'Petai Segar', '1/2 Gelas', 55, 12.1, 5.72, 5.06),
(9, 'Tahu', '1 Biji Besar ', 110, 1.76, 8.58, 5.06),
(10, 'Sari Kedelai', '2 1/2 Gelas', 185, 79.55, 55.5, 37);

-- --------------------------------------------------------

--
-- Table structure for table `sumberpokok`
--

CREATE TABLE `sumberpokok` (
  `Index` int(100) NOT NULL,
  `Nama_Pangan` varchar(255) NOT NULL,
  `URT` tinytext NOT NULL,
  `Gr` int(100) NOT NULL,
  `Karbohidrat` float NOT NULL,
  `Protein` float NOT NULL,
  `Lemak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumberpokok`
--

INSERT INTO `sumberpokok` (`Index`, `Nama_Pangan`, `URT`, `Gr`, `Karbohidrat`, `Protein`, `Lemak`) VALUES
(0, 'Bihun', '1/2 Gelas', 60, 49.26, 2.82, 0.06),
(1, 'Biskuit', '4 Buah Besar', 40, 30.04, 2.76, 5.76),
(2, 'Havermout', '5 1/2 Sendok Besar', 45, 38.79, 6.39, 3.33),
(3, 'Jagung segar', '3 Buah Sedang', 125, 41.375, 5.875, 1.625),
(4, 'Kentang', '2 Buah Sedang', 210, 40.11, 4.2, 0.21),
(5, 'Kentang Hitam', '12 Biji', 125, 42.125, 1.125, 0.5),
(6, 'Maizena', '10 Sendok Makan', 50, 127.5, 0.45, 0),
(7, 'Makaroni', '1/2 Gelas', 50, 39.35, 4.35, 0.2),
(8, 'Mie Basah', '2 Gelas', 200, 28, 1.2, 6.6),
(9, 'Mie Kering', '1 Gelas', 50, 25, 3.95, 5.9),
(10, 'Nasi Beras Giling Putih', '3/4 Gelas', 100, 40.6, 2.1, 0.1),
(11, 'Nasi Beras Giling Merah', '3/4 Gelas', 100, 40.6, 2.1, 0.1),
(12, 'Nasi Beras Giling Hitam', '3/4 Gelas', 100, 40.6, 2.1, 0.1),
(13, 'Nasi Beras 1/2 Giling', '3/4 Gelas', 100, 33.2, 4, 0.5),
(14, 'Nasi Ketan Putih', '3/4 Gelas', 100, 79.4, 6.7, 0.7),
(15, 'Roti Putih', '3 Iris', 70, 35, 5.6, 0.84),
(16, 'Roti warna Coklat', '3 Iris', 70, 34.79, 5.53, 1.05),
(17, 'Singkong', '1 1/2 Potong', 120, 6.72, 0.24, 4.32),
(18, 'Sukun', '3 Potong Sedang', 150, 42.15, 2.1, 0.3),
(19, 'Talas', '1/2 Biji Sedang', 125, 29.625, 2.375, 0.25),
(20, 'Tape Beras Ketan', '5 Sendok Makan', 100, 34.4, 2.8, 1),
(21, 'Tape Singkong', '1 Potong Sedang', 100, 42.5, 0.5, 0.1),
(22, 'Tepung Tapioka', '8 Sendok Makan', 50, 43.45, 0.25, 0.15),
(23, 'Tepung Beras', '8 Sendok Makan', 50, 40, 3.5, 0.25),
(24, 'Tepung Hungkwe', '10 Sendok Makan', 50, 41.75, 2.25, 0.5),
(25, 'Tepung Sagu', '8 Sendok Makan', 50, 42.35, 0.35, 0.1),
(26, 'Tepung Singkong', '5 Sendok Makan', 50, 43.35, 0.25, 0.15),
(27, 'Tepung Terigu', '5 Sendok Makan', 50, 38.65, 4.45, 0.65),
(28, 'Ubi Jalar Kuning', '1 Biji Sedang', 135, 36.045, 1.08, 0.675);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
