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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
