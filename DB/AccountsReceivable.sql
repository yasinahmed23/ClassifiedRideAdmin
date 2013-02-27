-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 50.63.106.13
-- Generation Time: Feb 26, 2013 at 02:56 PM
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
-- Table structure for table `AccountsReceivable`
--

CREATE TABLE `AccountsReceivable` (
  `ARID` int(11) NOT NULL auto_increment,
  `ARdate` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `ARemployee` varchar(255) NOT NULL,
  `EmplEmail` text NOT NULL,
  `ARusername` varchar(255) NOT NULL,
  `ARpassword` varchar(255) NOT NULL,
  `LastLogin` text NOT NULL,
  `LastLoginLocation` text NOT NULL,
  PRIMARY KEY  (`ARID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `AccountsReceivable`
--

INSERT INTO `AccountsReceivable` VALUES(1, '2013-02-22 12:44:03', 'Stephanie l McGlathery', 'stephmcglathery@gmail.com', 'stephmcglathery', 'f0fd52e74857e4e8cf2dba8cf46befa7f6283264a7b28b3725c80718c59b32bd', '', '74.179.31.248');
INSERT INTO `AccountsReceivable` VALUES(2, '2013-02-07 13:40:27', 'Test A User', 'test@gmail.com', 'ARtest', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', '', '');
