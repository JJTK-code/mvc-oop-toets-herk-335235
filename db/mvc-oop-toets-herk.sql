-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2023 at 09:10 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets-herk`
--

-- --------------------------------------------------------

--
-- Table structure for table `poundforpound`
--

DROP TABLE IF EXISTS `poundforpound`;
CREATE TABLE IF NOT EXISTS `poundforpound` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Ranking` smallint(100) NOT NULL,
  `Length` varchar(100) NOT NULL,
  `Weight` varchar(20) NOT NULL,
  `Age` tinyint(3) NOT NULL,
  `WinsByKnockout` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poundforpound`
--

INSERT INTO `poundforpound` (`id`, `Name`, `Ranking`, `Length`, `Weight`, `Age`, `WinsByKnockout`) VALUES
(1, 'Jon Jones', 1, '1.93', '112', 35, 10),
(2, 'Alexander Volkanovski', 2, '1.68', '66', 34, 12),
(3, 'Islam Makhachev', 3, '1.78', '70', 31, 4),
(4, 'Leon Edwards', 4, '1.83', '77', 31, 7),
(5, 'Israel Adesanya', 5, '1.93', '84', 33, 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
