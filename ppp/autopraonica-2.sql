-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 09:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autopraonica`
--

-- --------------------------------------------------------

--
-- Table structure for table `autopraonica`
--

CREATE TABLE `autopraonica` (
  `id` int(50) NOT NULL,
  `Autopraonica` varchar(50) DEFAULT NULL,
  `Adresa` varchar(50) DEFAULT NULL,
  `Kontakt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autopraonica`
--

INSERT INTO `autopraonica` (`id`, `Autopraonica`, `Adresa`, `Kontakt`) VALUES
(1, 'Blistava', 'Mostarska 3', '009988996'),
(2, 'Sjajna', 'Zagrebacka 3 ', '006655884'),
(3, 'SuperPraonica', 'Splitska 4', '002255446');

-- --------------------------------------------------------

--
-- Table structure for table `autopraonica_vrsta_pranja`
--

CREATE TABLE `autopraonica_vrsta_pranja` (
  `idVrstePranja` int(11) NOT NULL,
  `idAutopraone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `autopraonica_vrsta_pranja`
--

INSERT INTO `autopraonica_vrsta_pranja` (`idVrstePranja`, `idAutopraone`) VALUES
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(9, 3),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(50) NOT NULL,
  `Korisnik` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `kontakt` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `Korisnik`, `mail`, `kontakt`) VALUES
(1, 'Marko Buhac', 'buhacm@gmail.com', '00387 63 620 100'),
(2, 'petar peroc', 'peric444@gmail.com', '00387 63 565 448'),
(3, 'Tomislav', 'tomi_blazevic@hotmail.com', '063839892');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `id` int(50) NOT NULL,
  `Datum` date NOT NULL,
  `Vrijeme` time(6) NOT NULL,
  `idKorisnika` int(11) DEFAULT NULL,
  `Idpraone` int(11) DEFAULT NULL,
  `idPranja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id`, `Datum`, `Vrijeme`, `idKorisnika`, `Idpraone`, `idPranja`) VALUES
(25, '2017-01-09', '06:14:00.000000', 2, 2, 8),
(26, '2017-01-09', '13:30:00.000000', 1, 1, 5),
(27, '2017-01-09', '06:14:00.000000', 1, 1, 7),
(28, '2017-01-09', '13:30:00.000000', 1, 1, 5),
(29, '2017-01-09', '06:14:00.000000', 2, 2, 8),
(30, '2017-01-09', '03:14:00.000000', 2, 2, 10),
(31, '2017-01-09', '06:14:00.000000', 3, 3, 9),
(32, '2017-01-01', '13:14:00.000000', 3, 3, 8),
(33, '2017-01-09', '14:12:00.000000', 3, 3, 10),
(34, '2017-01-09', '18:12:00.000000', 3, 3, 7),
(35, '2017-01-20', '10:00:00.000000', 1, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `vrsta_pranja`
--

CREATE TABLE `vrsta_pranja` (
  `id` int(50) NOT NULL,
  `Vrsta_pranja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vrsta_pranja`
--

INSERT INTO `vrsta_pranja` (`id`, `Vrsta_pranja`) VALUES
(5, 'Dubinsko'),
(6, 'Unutarnje'),
(7, 'Vanjsko'),
(8, 'Vanjsko/Unutarnje'),
(9, 'dubinsko'),
(10, 'Pranje Motora');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autopraonica`
--
ALTER TABLE `autopraonica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Autopraonica` (`Autopraonica`),
  ADD KEY `Autopraonica_2` (`Autopraonica`),
  ADD KEY `Autopraonica_3` (`Autopraonica`),
  ADD KEY `Autopraonica_4` (`Autopraonica`),
  ADD KEY `Autopraonica_5` (`Autopraonica`),
  ADD KEY `Autopraonica_6` (`Autopraonica`),
  ADD KEY `Autopraonica_7` (`Autopraonica`),
  ADD KEY `Autopraonica_8` (`Autopraonica`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `autopraonica_vrsta_pranja`
--
ALTER TABLE `autopraonica_vrsta_pranja`
  ADD PRIMARY KEY (`idVrstePranja`,`idAutopraone`),
  ADD KEY `idAutopraone` (`idAutopraone`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Korisnik` (`Korisnik`),
  ADD KEY `Korisnik_2` (`Korisnik`),
  ADD KEY `Korisnik_3` (`Korisnik`),
  ADD KEY `Korisnik_4` (`Korisnik`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKorisnika` (`idKorisnika`) USING BTREE,
  ADD KEY `idPranja` (`idPranja`) USING BTREE,
  ADD KEY `Idpraone` (`Idpraone`) USING BTREE;

--
-- Indexes for table `vrsta_pranja`
--
ALTER TABLE `vrsta_pranja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autopraonica`
--
ALTER TABLE `autopraonica`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `vrsta_pranja`
--
ALTER TABLE `vrsta_pranja`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `autopraonica_vrsta_pranja`
--
ALTER TABLE `autopraonica_vrsta_pranja`
  ADD CONSTRAINT `autopraonica_vrsta_pranja_ibfk_1` FOREIGN KEY (`idVrstePranja`) REFERENCES `vrsta_pranja` (`id`),
  ADD CONSTRAINT `autopraonica_vrsta_pranja_ibfk_2` FOREIGN KEY (`idAutopraone`) REFERENCES `autopraonica` (`id`);

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `rezervacija_ibfk_1` FOREIGN KEY (`Idpraone`) REFERENCES `autopraonica` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rezervacija_ibfk_2` FOREIGN KEY (`idKorisnika`) REFERENCES `korisnik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rezervacija_ibfk_3` FOREIGN KEY (`idPranja`) REFERENCES `vrsta_pranja` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
