-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 50.63.106.13
-- Generation Time: Jan 21, 2013 at 04:09 PM
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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `TimeRegistered` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `employeeID` int(255) NOT NULL auto_increment,
  `employee` text NOT NULL,
  `ReferredBy` varchar(50) NOT NULL,
  `EmplFirstName` varchar(15) NOT NULL,
  `EmplMiddleInitial` varchar(1) NOT NULL,
  `EmplLastName` varchar(15) NOT NULL,
  `EmplEmail` text NOT NULL,
  `EmplCellPhone1` int(3) NOT NULL,
  `EmplCellPhone2` int(3) NOT NULL,
  `EmplCellPhone3` text NOT NULL,
  `EmplHome1` text NOT NULL,
  `EmplHome2` text NOT NULL,
  `EmplHome3` text NOT NULL,
  `EmplStreet1` varchar(30) NOT NULL,
  `EmplStreet2` varchar(30) NOT NULL,
  `EmplCity` varchar(30) NOT NULL,
  `EmplState` varchar(30) NOT NULL,
  `EmplZip` int(5) NOT NULL,
  `EmplCountry` varchar(30) NOT NULL,
  `EmplPayFirstName` varchar(15) NOT NULL,
  `EmplPayMiddleInitial` varchar(1) NOT NULL,
  `EmplPayLastName` varchar(15) NOT NULL,
  `BusPayName` varchar(30) NOT NULL,
  `EmplPayStreet1` varchar(30) NOT NULL,
  `EmplPayStreet2` text NOT NULL,
  `EmplPayCity` varchar(30) NOT NULL,
  `EmplPayState` text NOT NULL,
  `EmplPayZip` int(5) NOT NULL,
  `EmplPayCountry` text NOT NULL,
  `EmplPayCell1` int(3) NOT NULL,
  `EmplPayCell2` int(3) NOT NULL,
  `EmplPayCell3` int(4) NOT NULL,
  `EmplPayEmail` text NOT NULL,
  `ConfidentialityAgreement` text NOT NULL,
  `IndependentContractorAgreement` text NOT NULL,
  `w9` text NOT NULL,
  `EmplUserName` varchar(255) NOT NULL,
  `EmplPassword` text NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY  (`employeeID`),
  UNIQUE KEY `EmplUserName` (`EmplUserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` VALUES('2012-12-21 14:07:25', 1, 'Stephanie l McGlathery', 'Troy M Martocci', 'Stephanie', 'l', 'McGlathery', 'stephmcglathery@gmail.com', 615, 554, '0580', '615', '554', '0580', '3831 West End Ave', '6', 'Nasvhile', 'TN', 37205, 'United States', 'Stephanie', 'L', 'McGlathery', '', '3831 West End Ave', '6', 'Nashville', 'TN', 37205, 'United States', 615, 554, 580, 'stephmcglathery@gmail.com', 'ConfidentialityAgreement_stephmcglathery.pdf', 'IndependentContractorAgreement_stephmcglathery.pdf', 'w9_stephmcglathery.pdf', 'StephMcGlathery', 'f0fd52e74857e4e8cf2dba8cf46befa7f6283264a7b28b3725c80718c59b32bd', 'stephmcglathery.jpg');
INSERT INTO `employees` VALUES('2012-12-21 14:09:52', 2, 'Troy M Martoccia', '', 'Troy', 'M', 'Martoccia', 'Troy@gmail.com', 615, 943, '5202', '615', '943', '5202', '255 3rd Ave', 'A', 'Nasvhil', 'TN', 37210, 'United States', 'Troy', 'M', 'Martocia', 'iautolead.com', '522 3rd Ave', 'A', 'Nashvile', 'TN', 37210, 'United States', 615, 123, 4566, 'Troy@gmail.com', '', '', '', 'TroyM', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'TroyM.png');
INSERT INTO `employees` VALUES('2012-12-26 11:56:57', 3, 'Stephen M McGlathery', 'Stephanie l McGlathery', 'Stephen', 'M', 'McGlathery', 'Stephen@gmail.com', 615, 859, '1975', '615', '859', '1975', '3038 Patton Branch Rd', '', 'Goodletsville', 'TN', 37072, 'United States', 'Stephen', 'M', 'McGlathery', '', '3038 Patton Branch Rd', '', 'Goodlettsville', 'TN', 37072, 'United States', 615, 859, 1975, 'Stephen@gmail.com', '', '', '', 'StephenM', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'StephenM.png');
INSERT INTO `employees` VALUES('2012-12-26 12:03:04', 4, 'Angela R Longaberger', 'Stephanie l McGlathery', 'Angela', 'R', 'Longaberger', 'Angela@gmail.com', 615, 679, '9679', '967', '967', '9679', '3831 West End Ave', '', 'Nashville', 'TN', 37205, 'United States', 'Angela', 'R', 'Longaberger', 'Rockstar INC', '3831 West End Ave', '', 'Nashvile', 'TN', 37205, 'United States', 679, 679, 9679, 'Angela@gmail.com', '', '', '', 'ALongaberger', '0ec5f7c0abe435d22cca61c6d4ed58226e83f9cecef7dcbfda3b48c449c77b35', 'ALongaberger.jpg');
INSERT INTO `employees` VALUES('2012-12-26 12:15:34', 5, 'Sydney  Gunter', 'Peter A. Bond', 'Sydney', '', 'Gunter', 'SGunter@gmail.com', 615, 123, '1234', '123', '123', '1234', '194 Northview Ct', '', 'Hendersonville', 'TN', 37075, 'United States', 'Sydney', '', 'Gunter', '', '194 Northview Ct', '', 'Hendersonville', 'TN', 37075, 'United States', 878, 780, 780, 'SGunter@gmail.com', '', '', '', 'SGunter', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'SGunter.jpeg');
INSERT INTO `employees` VALUES('2012-12-26 12:18:33', 6, 'Joshua  Mayben', 'Stephanie l McGlathery', 'Joshua', '', 'Mayben', 'JMayben@gmail.com', 780, 780, '0780', '807', '807', '0780', '123 Main Street', '', 'Atlanta', 'GA', 11111, 'United States', 'Joshua', 'M', 'Mayben', '', '123 Main Street', '', 'Atlanta', 'GA', 11111, 'United States', 987, 654, 3211, 'JMayben@gmail.com', '', '', '', 'JMayben', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'JMayben.jpg');
INSERT INTO `employees` VALUES('2012-12-26 12:24:08', 7, 'Caleb  Butler', 'Troy Martoccia', 'Caleb', '', 'Butler', 'CButler@gmail.com', 256, 679, '6796', '256', '769', '6976', '987 Main Street', '', 'Rainbow City', 'AL', 35903, 'United States', 'Caleb', '', 'Butler', 'Butler INC', '987 Main Street', '', 'Rainbow City', 'AL', 35903, 'United States', 256, 767, 6796, 'CButler@gmail.com', '', '', '', 'CButler', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'CButler.jpg');
INSERT INTO `employees` VALUES('2012-12-28 13:23:08', 8, 'Rob  Zombie', 'Stephanie l McGlathery', 'Rob', '', 'Zombie', 'RobZombie@gmail.com', 780, 708, '7807', '078', '078', '8078', '500 TN Ave', '', 'Nashville', 'TN', 37210, 'United States', 'Rob', '', 'Zombie', '', '500 TN Ave', 'D', 'Nashville', 'TN', 37210, 'United States', 780, 807, 8078, 'RobZombie@gmail.com', '', '', '', 'RobZombie', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'RobZombie.jpg');
INSERT INTO `employees` VALUES('2013-01-02 11:15:11', 9, 'Brandon  Cline', 'Troy Martoccia', 'Brandon', '', 'Cline', 'Brandon@gmail.com', 780, 780, '0780', '780', '078', '8078', '123 Main Street', '', 'Hermitage', 'TN', 37056, 'United States', 'Brandon', '', 'Cline', 'Syndicate Mstrmnd LLC', '123 Main Street', '', 'Hermitage', 'TN', 37056, 'United States', 780, 780, 7807, 'Brandon@gmail.com', '', '', '', 'BCline', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'BCline.jpeg');
INSERT INTO `employees` VALUES('2013-01-04 10:23:08', 10, 'Jonas  Fields', 'Stephanie l McGlathery', 'Jonas', '', 'Fields', 'JFields@gmail.com', 780, 780, '7807', '780', '780', '7807', '123 Main Street', 'D12', 'Murfreesborro', 'TN', 37129, 'United States', 'Jonas', '', 'Fields', '', '123 Main Street', 'D12', 'Murfreesborro', 'TN', 37129, 'United States', 780, 780, 8078, 'JFields@gmail.com', '', '', '', 'JFields', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', '');
INSERT INTO `employees` VALUES('2013-01-04 10:38:51', 11, 'Jason  Smith', 'Troy Martoccia', 'Jason', '', 'Smith', 'Jason@gmail.com', 780, 807, '7807', '780', '078', '8078', '123 Main Street', 'G4', 'Madison', 'TN', 37115, 'United States', 'Jason', '', 'Smith', '', '123 Main Street', 'G4', 'Madison', 'TN', 37115, 'United States', 679, 679, 9769, 'Jason@gmail.com', '', '', '', 'JSmith', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', '');
INSERT INTO `employees` VALUES('2013-01-04 10:58:36', 12, 'Chris  Eatherly', 'Stephanie l McGlathery', 'Chris', '', 'Eatherly', 'Cartoon@gmail.com', 780, 780, '8078', '078', '807', '0780', '123 Main Street', '', 'Hermitage', 'TN', 37215, 'United States', 'Chris', '', 'Eatherly', '', '123 Main Street', '', 'Hermitage', 'TN', 37215, 'United States', 780, 780, 7809, 'Cartoon@gmail.com', '', '', '', 'Cartoon', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'cartoon.jpg');
INSERT INTO `employees` VALUES('2013-01-04 11:01:39', 13, 'Bruce  Wayne', 'Stephanie l McGlathery', 'Bruce', '', 'Wayne', 'Batman@gmail.com', 787, 87, '8078', '780', '780', '8079', '123 Main Street', '', 'Gotham City', 'NY', 12234, 'United States', 'Bruce', '', 'Wayne', 'Batman, INC', '123 Main Street', '', 'Gotham Cith', 'NY', 12234, 'United States', 780, 780, 780, 'Batman@gmail.com', '', '', '', 'Batman', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'Batman.jpg');
INSERT INTO `employees` VALUES('2013-01-07 20:14:54', 18, 'Johnny  Depp', 'Stephanie l McGlathery', 'Johnny', '', 'Depp', 'jdepp@gmail.com', 178, 807, '0780', '807', '807', '7807', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'Johnny', '', 'Depp', '', '123 Main Street', 'B', 'Nashville', 'Tn', 37205, 'United States', 780, 780, 700, 'Johnny@gmail.com', '', '', '', 'JohnnyDepp', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'JohnnyDepp.jpg');
INSERT INTO `employees` VALUES('2013-01-08 11:54:40', 20, 'Lois  Griffin', 'Stephanie l McGlathery', 'Lois', '', 'Griffin', 'Lois@gmail.com', 780, 780, '7807', '780', '780', '6780', '31 Spooner Street', '', 'Quahog', 'RI', 1234, 'United States', 'Lois', '', 'Griffin', '', '31 Spooner Street', '', 'Quahog', 'RI', 1234, 'United States', 780, 807, 7807, 'Lois@gmail.com', '', '', '', 'LGriffin', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'LGriffin.jpg');
INSERT INTO `employees` VALUES('2013-01-10 10:13:42', 21, 'Tony  Stark', 'Stephanie l McGlathery', 'Tony', '', 'Stark', 'ironman@gmail.com', 87, 870, '7098', '907', '089', '0987', '123 Main Street', '', 'Nashville', 'TN', 37210, 'United States', 'Tony', '', 'Stark', 'Stark Industries', '123 Main Street', '', 'Nashville', 'TN', 37210, 'United States', 780, 780, 780, 'ironman@gmail.com', '', '', '', 'Ironman', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'Ironman.jpg');
INSERT INTO `employees` VALUES('2013-01-15 09:12:30', 22, 'Hank  Hill', 'Stephanie l McGlathery', 'Hank', '', 'Hill', 'Hank@gmail.com', 780, 78, '0780', '078', '807', '7807', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'Peggy', '', 'Hill', '', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 780, 807, 780, 'Pegg@gmail.com', '', '', '', 'HankHill', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'HankHill.jpg');
