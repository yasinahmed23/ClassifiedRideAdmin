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
-- Table structure for table `Referrals`
--

CREATE TABLE `Referrals` (
  `RefID` int(11) NOT NULL auto_increment,
  `EmployeeID` text NOT NULL,
  `EmployeeName` text NOT NULL,
  `NewEmpEmail` text NOT NULL,
  `NewEmplName` text NOT NULL,
  PRIMARY KEY  (`RefID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `Referrals`
--

INSERT INTO `Referrals` VALUES(1, '2', 'Troy M Martoccia', 'stephmcglathery@gmail.com', 'Stephanie l McGlathery');
INSERT INTO `Referrals` VALUES(2, '1', 'Stephanie l McGlathery', 'Lois@gmail.com', 'Lois  Griffin');
INSERT INTO `Referrals` VALUES(3, '1', 'Stephanie l McGlathery', 'Angela@gmail.com', 'Angela R Longaberger');
INSERT INTO `Referrals` VALUES(4, '1', 'Stephanie l McGlathery', 'ironman@gmail.com', 'Tony  Stark');
INSERT INTO `Referrals` VALUES(5, '1', 'Stephanie l McGlathery', 'Stephen@gmail.com', 'Stephen M McGlathery');
INSERT INTO `Referrals` VALUES(6, '1', 'Stephanie l McGlathery', 'SGunter@gmail.com', 'Sydney  Gunter');
INSERT INTO `Referrals` VALUES(7, '1', 'Stephanie l McGlathery', 'JMayben@gmail.com', 'Joshua  Mayben');
INSERT INTO `Referrals` VALUES(8, '2', 'Troy M Martoccia', 'CButler@gmail.com', 'Caleb  Butler');
INSERT INTO `Referrals` VALUES(9, '1', 'Stephanie l McGlathery', 'RobZombie@gmail.com', 'Rob  Zombie');
INSERT INTO `Referrals` VALUES(10, '2', 'Troy M Martoccia', 'Brandon@gmail.com', 'Brandon  Cline');
INSERT INTO `Referrals` VALUES(11, '1', 'Stephanie l McGlathery', 'JFields@gmail.com', 'Jonas  Fields');
INSERT INTO `Referrals` VALUES(12, '2', 'Troy M Martoccia', 'Jason@gmail.com', 'Jason  Smith');
INSERT INTO `Referrals` VALUES(13, '1', 'Stephanie l McGlathery', 'Cartoon@gmail.com', 'Chris  Eatherly');
INSERT INTO `Referrals` VALUES(14, '1', 'Stephanie l McGlathery', 'Batman@gmail.com', 'Bruce  Wayne');
INSERT INTO `Referrals` VALUES(15, '1', 'Stephanie l McGlathery', 'jdepp@gmail.com', 'Johnny  Depp');
INSERT INTO `Referrals` VALUES(16, '1', 'Stephanie l McGlathery', 'stephmcglathery@gmail.com', 'Hank  Hill');
INSERT INTO `Referrals` VALUES(17, '2', 'Troy M Martoccia', 'ghandersen@comcast.net', 'Glenn H Andersen');
