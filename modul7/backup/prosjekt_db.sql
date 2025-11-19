-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19. Nov, 2025 14:57 PM
-- Tjener-versjon: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prosjekt_db`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `brukere`
--

CREATE TABLE `brukere` (
  `brukerID` int(10) UNSIGNED NOT NULL,
  `epost` varchar(100) NOT NULL,
  `fornavn` varchar(40) NOT NULL,
  `etternavn` varchar(40) NOT NULL,
  `tlf` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dataark for tabell `brukere`
--

INSERT INTO `brukere` (`brukerID`, `epost`, `fornavn`, `etternavn`, `tlf`) VALUES
(1, 'katarina@uia.no', 'Katarina', 'Studentesen', '98765432'),
(11, 'nfjel@mfek.no', 'Mikael', 'Nyhus', '23456789'),
(13, 'buschocracy@uia.no', 'Peter', 'Busch', '45375923');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brukere`
--
ALTER TABLE `brukere`
  ADD PRIMARY KEY (`brukerID`),
  ADD UNIQUE KEY `epost` (`epost`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brukere`
--
ALTER TABLE `brukere`
  MODIFY `brukerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
