-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2012 at 03:37 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bala0069`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_title` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `director` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `release_date`, `director`) VALUES
(2, 'Lord of the Rings: The Fellowship of the Ring', '2001-12-12', 'Peter Jackson'),
(4, 'Shrek', '2000-05-05', 'Erika Balarezo'),
(6, 'Toy Story 3', '2010-02-11', 'Lee Unkrich'),
(8, 'Inception', '2012-07-10', 'Christopher Nolan'),
(9, 'Madagascar 3', '0000-00-00', 'Eric Darnell'),
(10, 'Titanic', '1997-12-19', 'James Cameron');
