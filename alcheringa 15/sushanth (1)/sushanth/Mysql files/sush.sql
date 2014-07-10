-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2014 at 02:08 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `knowyourhero`
--

CREATE TABLE IF NOT EXISTS `knowyourhero` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `hero[first_name]` varchar(255) NOT NULL,
  `hero[last_name]` varchar(255) NOT NULL,
  `hero[hero_emailid]` varchar(255) NOT NULL,
  `hero[hero_phone]` varchar(255) NOT NULL,
  `hero_image` varchar(255) NOT NULL,
  `hero_image_two` varchar(255) DEFAULT NULL,
  `hero_image_three` varchar(255) DEFAULT NULL,
  `hero_story` longtext NOT NULL,
  `hero[author]` varchar(255) NOT NULL,
  `hero[author_email]` varchar(255) NOT NULL,
  `hero[value_id]` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `knowyourhero`
--

INSERT INTO `knowyourhero` (`ID`, `hero[first_name]`, `hero[last_name]`, `hero[hero_emailid]`, `hero[hero_phone]`, `hero_image`, `hero_image_two`, `hero_image_three`, `hero_story`, `hero[author]`, `hero[author_email]`, `hero[value_id]`) VALUES
(1, 'ndkfb', 'cmv ', 'xcg', 'dfgb', '', '', '', 'dfgh', 'efgh', 'fdghjm', 7),
(2, 'sdfgb', 'dfgh', 'fgfgh', 'fgh', '2-objects2.jpg', NULL, NULL, 'aertyhj', 'rty', 'fgh', 129),
(3, 'dfghj', 'gbhjkl', 'fghjkl', 'tghjk', '3-objects2.jpg', NULL, NULL, 'fghjgmbn\r\ndfcghj', 'dfgh', 'ghjk', 11),
(4, 'ebdjfb', ' djkf', 'dbic k', ' dkdxkdwk', '4-objects2.jpg', NULL, NULL, 'dcxvdsr', 'dc', 'dcvrewesd', 97),
(5, 'jbckjngf', ' kjnlkl', 'bnkll', 'k lkl', '', '5-Objects.jpg', '5-objects2.jpg', ' js xj kxc', ' cxhj cx', ' kj l', 81),
(6, 'sdcjvcv', ' cv vccxc', 'dkfckfd', ' dkcvc ', '', NULL, NULL, 'dmscf v,m ', 'we dfgm,', 'fc v', 5);

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
