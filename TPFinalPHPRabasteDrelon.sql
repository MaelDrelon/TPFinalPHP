-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2020 at 04:20 PM
-- Server version: 10.1.47-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TPFinalPHPRabasteDrelon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Classe`
--

CREATE TABLE `Classe` (
  `NumClasse` int(11) NOT NULL,
  `Nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Classe`
--

INSERT INTO `Classe` (`NumClasse`, `Nom`) VALUES
(1, 'SN1'),
(2, 'SN2');

-- --------------------------------------------------------

--
-- Table structure for table `Eleves`
--

CREATE TABLE `Eleves` (
  `NumEleves` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Classe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Eleves`
--

INSERT INTO `Eleves` (`NumEleves`, `Nom`, `Prenom`, `Classe`) VALUES
(1, 'Drelon', 'Mael', 'SN1'),
(2, 'Caudron', 'Clement', 'SN1');

-- --------------------------------------------------------

--
-- Table structure for table `Prof`
--

CREATE TABLE `Prof` (
  `NumProf` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Prof`
--

INSERT INTO `Prof` (`NumProf`, `Nom`, `Prenom`) VALUES
(1, 'Phillipe ', 'Pertier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Classe`
--
ALTER TABLE `Classe`
  ADD PRIMARY KEY (`NumClasse`);

--
-- Indexes for table `Eleves`
--
ALTER TABLE `Eleves`
  ADD PRIMARY KEY (`NumEleves`);

--
-- Indexes for table `Prof`
--
ALTER TABLE `Prof`
  ADD PRIMARY KEY (`NumProf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Classe`
--
ALTER TABLE `Classe`
  MODIFY `NumClasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Eleves`
--
ALTER TABLE `Eleves`
  MODIFY `NumEleves` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Prof`
--
ALTER TABLE `Prof`
  MODIFY `NumProf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
