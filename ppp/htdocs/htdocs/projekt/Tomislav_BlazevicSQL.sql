-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 07:06 PM
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autopraonica`
--
ALTER TABLE `autopraonica`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
