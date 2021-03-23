-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2021 at 02:34 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scorenow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'adit', '$2y$10$16w5WaKNY.CBHaYqjYAM/e3ELDxhtQfzilg1Tpxlbjl.1SrCrtaWW');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `id_club` int(11) NOT NULL AUTO_INCREMENT,
  `nama_club` varchar(50) NOT NULL,
  `akronim` varchar(10) NOT NULL,
  PRIMARY KEY (`id_club`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id_club`, `nama_club`, `akronim`) VALUES
(1, 'Arsenal', 'ARS'),
(3, 'Manchester United', 'MUN');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pertandingan`
--

DROP TABLE IF EXISTS `hasil_pertandingan`;
CREATE TABLE IF NOT EXISTS `hasil_pertandingan` (
  `id_hasilpertandingan` int(11) NOT NULL AUTO_INCREMENT,
  `id_club` int(11) NOT NULL,
  `skor_pertandingan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_hasilpertandingan`),
  KEY `id_club` (`id_club`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_03_21_152040_create_admins_table', 1),
(2, '2021_03_21_153115_create_admins_table', 2),
(3, '2021_03_21_153646_create_admins_table', 3),
(4, '2021_03_21_154110_create_admins_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

DROP TABLE IF EXISTS `pemain`;
CREATE TABLE IF NOT EXISTS `pemain` (
  `id_pemain` int(11) NOT NULL AUTO_INCREMENT,
  `id_club` int(11) NOT NULL,
  `nama_pemain` varchar(50) NOT NULL,
  `no_punggung` int(11) NOT NULL,
  `gol` int(11) NOT NULL,
  `assist` int(11) NOT NULL,
  PRIMARY KEY (`id_pemain`),
  KEY `id_club` (`id_club`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
