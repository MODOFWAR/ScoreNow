-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 04:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

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

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'adit', '$2y$10$16w5WaKNY.CBHaYqjYAM/e3ELDxhtQfzilg1Tpxlbjl.1SrCrtaWW'),
(2, 'figo', '$2y$10$9J3lHT4kY7ggxNLZr4nXVOPfkDiFl16F9C5P7ziJ5OHEUOEU8gaHu');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id_club` int(11) NOT NULL,
  `nama_club` varchar(50) NOT NULL,
  `akronim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id_club`, `nama_club`, `akronim`) VALUES
(1, 'Arsenal', 'ARS'),
(3, 'Manchester United', 'MUN'),
(4, 'Manchester City', 'MCI'),
(5, 'Everton', 'EVE');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pertandingan`
--

CREATE TABLE `hasil_pertandingan` (
  `id_hasilpertandingan` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `skor_pertandingan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `pemain` (
  `id_pemain` int(11) NOT NULL,
  `id_club` int(11) NOT NULL,
  `nama_pemain` varchar(50) NOT NULL,
  `no_punggung` int(11) NOT NULL,
  `gol` int(11) NOT NULL,
  `assist` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id_pemain`, `id_club`, `nama_pemain`, `no_punggung`, `gol`, `assist`) VALUES
(16, 3, 'Marcus Rashford', 10, 20, 20),
(12, 1, 'Pierre Aubameyang', 14, 3, 9),
(13, 5, 'Richarlison', 10, 7, 7),
(14, 4, 'Sergio Aguero', 10, 25, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id_club`);

--
-- Indexes for table `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  ADD PRIMARY KEY (`id_hasilpertandingan`),
  ADD KEY `id_club` (`id_club`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id_pemain`),
  ADD KEY `id_club` (`id_club`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id_club` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  MODIFY `id_hasilpertandingan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `id_pemain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
