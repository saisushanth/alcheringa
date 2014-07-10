-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2014 at 10:45 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sush`
--

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE IF NOT EXISTS `messaging` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Message` text NOT NULL,
  `your_name` varchar(255) NOT NULL,
  `your_email` varchar(255) NOT NULL,
  `recieptent_name` varchar(255) NOT NULL,
  `recieptent_email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`ID`, `Message`, `your_name`, `your_email`, `recieptent_name`, `recieptent_email`) VALUES
(1, 'hjdcbvck', ' jdf', 'bd skf', ' dkfd', ' dkcv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
