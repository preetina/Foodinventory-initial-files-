-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2017 at 07:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE IF NOT EXISTS `kitchen` (
  `userid` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`userid`, `username`, `password`) VALUES
(1, 'kitchen', '2F56C0AC09EF740'),
(2, 'kit', 'b17eb192f8d22d50442f606b1a3ddeaec3ee8e08');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `Item` varchar(50) NOT NULL,
  `Quantity` float NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Rate` float NOT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`SN`, `Item`, `Quantity`, `Unit`, `Category`, `Date`, `Rate`) VALUES
(58, 'Rice', 3, 'Kg', 'Lentils', '2017-08-22', 80),
(66, 'Potato', 2, 'Kg', 'Fruit & Grocery', '2017-08-31', 80),
(77, 'Cheese', 55, 'Kg', 'Miscellaneous', '2017-08-23', 50),
(78, 'Coke', 4, 'Litre', 'Liquid & Beverages', '2017-08-22', 30),
(79, 'Daal', 6, 'Kg', 'Lentils', '2017-08-08', 70);

-- --------------------------------------------------------

--
-- Table structure for table `list_menu`
--

CREATE TABLE IF NOT EXISTS `list_menu` (
  `SN` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  KEY `SN` (`SN`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`SN`, `Date`, `Name`, `Quantity`) VALUES
(3, '2017-08-08', 'Chowmein', 10),
(7, '2017-08-15', 'coke', 5),
(8, '2017-08-15', 'Momo', 20),
(23, '2017-08-22', 'coke', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `Category` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `Name`, `Price`, `Category`) VALUES
(56, 'Coke', 50, 'Beverages'),
(57, 'Fanta', 80, 'Beverages'),
(60, 'apple cider', 100, 'Beverages'),
(61, 'Chowmein', 100, 'Snacks'),
(62, 'Momo', 120, 'Snacks'),
(65, 'bread', 65, 'Breakfast'),
(68, 'real juice', 25, 'Beverages'),
(69, 'Coke ', 30, 'Beverages'),
(70, 'Burger', 120, 'Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `menu_log`
--

CREATE TABLE IF NOT EXISTS `menu_log` (
  `Id` int(11) NOT NULL,
  `SN` int(11) NOT NULL,
  KEY `Id` (`Id`),
  KEY `SN` (`SN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Item` varchar(50) NOT NULL,
  `Quantity` float NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Id`, `Item`, `Quantity`, `Unit`, `Category`, `Date`) VALUES
(1, 'Rice', 1, 'Kg', 'Fruit & Grocery', '2013-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb'),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_menu`
--
ALTER TABLE `list_menu`
  ADD CONSTRAINT `list_menu_ibfk_1` FOREIGN KEY (`SN`) REFERENCES `list` (`SN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `list_menu_ibfk_2` FOREIGN KEY (`Id`) REFERENCES `menu` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_log`
--
ALTER TABLE `menu_log`
  ADD CONSTRAINT `menu_log_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `menu` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_log_ibfk_2` FOREIGN KEY (`SN`) REFERENCES `log` (`SN`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
