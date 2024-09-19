-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 01:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agence`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idA` int(11) NOT NULL AUTO_INCREMENT,
  `emailA` varchar(100) NOT NULL,
  `passwordA` varchar(100) CHARACTER SET utf16 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idA`, `emailA`, `passwordA`, `date`) VALUES
(18, 'walid@gmail.com', '9b42c60dfb2b5a8e1c588b0ec793752aa4f299f3', '2023-02-26 12:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `idCR` int(11) NOT NULL AUTO_INCREMENT,
  `name_Car` varchar(200) NOT NULL,
  `matricul_Car` varchar(200) NOT NULL,
  `info_Car` varchar(200) NOT NULL,
  `prix_Car` float NOT NULL,
  `type` varchar(100) NOT NULL,
  `pict_Car` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCR`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=290 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`idCR`, `name_Car`, `matricul_Car`, `info_Car`, `prix_Car`, `type`, `pict_Car`, `date`) VALUES
(286, 'kia rio', '225 tunise', 'essonce', 100, 'manuelle', 'kia.webp', '2023-02-17 10:32:50'),
(287, 'symbole', '230 tunise', 'essonce', 90, 'manuelle', 'symbol.jpg', '2023-02-17 10:33:21'),
(288, 'clio 4', '225 tunise', 'essonce', 130, 'manuelle', 'clio.jpg', '2023-02-17 10:33:50'),
(289, 'golf 7', '225 tunise', 'essonce', 200, 'auto', 'golf.jpg', '2023-02-17 10:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=367 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `email`, `tel`, `password`, `date`) VALUES
(363, 'walid', 'walid', 'walid@gmailwalid', 45646545, 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '2023-03-05 22:52:00'),
(366, 'roudaina', 'dfgdfg', 'roudain@gmail.com', 46464654, '173af653133d964edfc16cafe0aba33c8f500a07f3ba3f81943916910c257705', '2023-03-07 13:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `reserv`
--

CREATE TABLE IF NOT EXISTS `reserv` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name_Car` varchar(100) NOT NULL,
  `pict_Car` varchar(100) NOT NULL,
  `days` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_res`),
  KEY `idn` (`id`),
  KEY `id` (`id`),
  KEY `id_res` (`id_res`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=585 ;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `idREV` int(11) NOT NULL AUTO_INCREMENT,
  `idCR` int(11) NOT NULL,
  `name_Car` varchar(100) NOT NULL,
  `pict_Car` varchar(100) NOT NULL,
  `days` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idREV`),
  KEY `id` (`idCR`),
  KEY `idCR` (`idCR`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `vip`
--

CREATE TABLE IF NOT EXISTS `vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_Car` varchar(100) NOT NULL,
  `matricul_Car` varchar(200) NOT NULL,
  `info_Car` varchar(200) NOT NULL,
  `prix_Car` float NOT NULL,
  `type` varchar(100) NOT NULL,
  `pict_Car` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `vip`
--

INSERT INTO `vip` (`id`, `name_Car`, `matricul_Car`, `info_Car`, `prix_Car`, `type`, `pict_Car`, `date`) VALUES
(17, 'bmw  ', '230 tunise  ', 'essonce  ', 260, 'auto', 'bmw.jpg', '2023-02-26 02:18:37'),
(18, 'marcedes', '230 tunise', 'essonce', 300, 'auto', 'macedes.jpg', '2023-02-17 10:30:46'),
(20, 'jaguar', '230 tunise', 'essonce', 500, 'auto', 'jag.jpg', '2023-02-17 10:31:46'),
(21, 'rolls royce', '225 tunise', 'essonce', 300, 'auto', 'rols.jpg', '2023-02-18 16:31:58');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserv`
--
ALTER TABLE `reserv`
  ADD CONSTRAINT `vip` FOREIGN KEY (`id`) REFERENCES `vip` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `cars` FOREIGN KEY (`idCR`) REFERENCES `cars` (`idCR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
