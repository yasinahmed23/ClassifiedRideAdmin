-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 50.63.106.13
-- Generation Time: Jan 24, 2013 at 04:02 PM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ClassifiedRideAd`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransactionDate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `TransactionID` int(11) NOT NULL auto_increment,
  `eID` int(255) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `DealerID` int(11) NOT NULL,
  `DealerName` varchar(255) NOT NULL,
  `member` varchar(25) NOT NULL,
  `registered` varchar(255) NOT NULL,
  `EmplReferral` text NOT NULL,
  `Renewed` varchar(255) NOT NULL,
  `Commission` int(11) NOT NULL,
  `ReferralAmount` text NOT NULL,
  PRIMARY KEY  (`TransactionID`),
  KEY `employeeID` (`eID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` VALUES('2012-12-26 09:38:27', 80, 1, 'Stephanie l McGlathery', 1, 'My Dealership', 'Online Registration', '798', 'Troy M Martoccia', '', 300, '60');
INSERT INTO `transactions` VALUES('2012-12-26 10:39:28', 82, 2, 'Troy M Martoccia', 3, 'A New Dealership', 'Online Registration', '399', '', '', 150, '30');
INSERT INTO `transactions` VALUES('2012-12-26 12:08:03', 83, 4, 'Angela R Longaberger', 4, 'ABC Dealership', 'Online Registration', '798', 'Stephanie l McGlathery', '', 300, '60');
INSERT INTO `transactions` VALUES('2012-12-27 13:37:52', 84, 1, 'Stephanie l McGlathery', 5, 'ZYXDealer', 'Online Registration', '399', 'Troy M Martoccia', '', 150, '30');
INSERT INTO `transactions` VALUES('2013-01-04 12:15:49', 85, 1, 'Stephanie l McGlathery', 6, 'This Dealership', 'Online Registration', '798', 'Troy M Martoccia', '', 300, '60');
INSERT INTO `transactions` VALUES('2013-01-08 13:02:35', 86, 1, 'Stephanie l McGlathery', 7, 'Brand New Dealership', 'Online Registration', '798', 'Troy M Martoccia', '', 300, '60');
INSERT INTO `transactions` VALUES('2013-01-08 13:36:33', 94, 1, 'Stephanie l McGlathery', 10, 'Used Dealership #1', 'Online Registration', '798', 'Troy M Martoccia', '', 300, '60');
INSERT INTO `transactions` VALUES('2013-01-15 11:13:08', 96, 4, 'Angela R Longaberger', 12, 'Old Dealership', 'Online Registration', '798', 'Stephanie l McGlathery', '', 300, '60');
INSERT INTO `transactions` VALUES('2013-01-21 15:53:40', 97, 4, 'Angela R Longaberger', 13, 'That Dealership', 'Online Registration', '399', 'Stephanie l McGlathery', '', 150, '30');
