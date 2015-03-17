-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2014 at 02:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paris`
--

-- --------------------------------------------------------

--
-- Table structure for table `npreferences`
--

CREATE TABLE IF NOT EXISTS `npreferences` (
`ID` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `address` varchar(65) NOT NULL,
  `budget` int(11) NOT NULL,
  `comments` varchar(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `npreferences`
--

INSERT INTO `npreferences` (`ID`, `name`, `address`, `budget`, `comments`) VALUES
(1, 'La Pagode', '57 Babylone Paris', 30, 'movies'),
(2, 'Le Grand Rex', '1 Boulevard', 25, 'movies'),
(3, 'Lucemaire', '53 Rue Notre Dame', 40, 'movies'),
(4, 'Le Bonnie & Clyde', '12 Rue Frochot', 50, 'pub'),
(5, 'Le Bonnie & Clyde', '12 Rue Frochot', 50, 'pub'),
(6, 'Le Zorba', '137 Rue du Faubourg', 60, 'pub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `npreferences`
--
ALTER TABLE `npreferences`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `npreferences`
--
ALTER TABLE `npreferences`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
