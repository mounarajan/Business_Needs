-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2013 at 11:20 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `total_price` varchar(200) DEFAULT NULL,
  `updated_on` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `name`, `quantity`, `price`, `total_price`, `updated_on`) VALUES
(1, 'b,jeb,b,jeb,b,jeb,b,jeb,b,jeb', '1,1,1,1,1', '121,21,2,121,12', '277', '2013-05-23'),
(2, 'b,jeb,b,jeb,b,jeb,b,jeb,b,jeb', '1,1,1,1,1', '121,21,2,121,12', '277', '2013-05-23'),
(3, 'b,jeb,b,jeb,b,jeb,b,jeb,b,jeb', '1,1,1,1,1', '121,21,2,121,12', '277', '2013-05-23'),
(5, 'pen,,,,', '1,,,,', '45,,,,', '45', '2013-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `updated_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `price`, `quantity`, `updated_on`) VALUES
(4, 'tv', 'onita', '15000', '49', '2013-05-23'),
(5, 'pen', 'hero', '45', '39', '2013-05-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
