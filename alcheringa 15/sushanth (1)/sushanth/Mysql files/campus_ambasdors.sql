-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2014 at 02:09 AM
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
-- Table structure for table `campus_ambasdors`
--

CREATE TABLE IF NOT EXISTS `campus_ambasdors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `contact1` varchar(255) NOT NULL,
  `contact2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `res_address` text NOT NULL,
  `colg_address` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `campus_ambasdors`
--

INSERT INTO `campus_ambasdors` (`id`, `username`, `college`, `contact1`, `contact2`, `email`, `res_address`, `colg_address`, `timestamp`) VALUES
(1, 'check1', 'check2', '1234567890', '1234567891', 'check3', 'check4', 'check5', '2014-06-08 00:06:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
