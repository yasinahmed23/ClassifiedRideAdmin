-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 50.63.106.13
-- Generation Time: Feb 26, 2013 at 02:57 PM
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
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `DealerID` int(11) NOT NULL auto_increment,
  `TimeRegistered` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `RepName` varchar(25) NOT NULL,
  `DealerName` varchar(50) NOT NULL,
  `DealerStreet1` text NOT NULL,
  `DealerStreet2` text NOT NULL,
  `DealerCity` varchar(50) NOT NULL,
  `DealerState` varchar(2) NOT NULL,
  `DealerZip` int(5) NOT NULL,
  `DealerCountry` varchar(50) NOT NULL,
  `DealerWebsite` text NOT NULL,
  `Franchise` varchar(3) NOT NULL,
  `DealerMainContactFirst` varchar(15) NOT NULL,
  `DealerMainContactLast` varchar(15) NOT NULL,
  `DealerCellPhone1` text NOT NULL,
  `DealerCellPhone2` text NOT NULL,
  `DealerCellPhone3` text NOT NULL,
  `DealerOfficePhone1` text NOT NULL,
  `DealerOfficePhone2` text NOT NULL,
  `DealerOfficePhone3` text NOT NULL,
  `OfficePhoneExt` text NOT NULL,
  `DealerEmail` text NOT NULL,
  `ContactPosition` text NOT NULL,
  `AccountPayFirstName` varchar(30) NOT NULL,
  `AccountPayLastName` varchar(15) NOT NULL,
  `AccountPayableEmail` text NOT NULL,
  `AccountPayableCell1` int(3) NOT NULL,
  `AccountPayableCell2` int(3) NOT NULL,
  `AccountPayableCell3` int(4) NOT NULL,
  `LeadCell1` text NOT NULL,
  `LeadCell2` text NOT NULL,
  `LeadCell3` text NOT NULL,
  `LeadEmail` text NOT NULL,
  `DataFeedProvider` text NOT NULL,
  `OtherDataFeedProvider` text NOT NULL,
  `DataFeedMainContactFirst` varchar(15) NOT NULL,
  `DataFeedMainContactLast` varchar(15) NOT NULL,
  `DataFeedMainPhone1` text NOT NULL,
  `DataFeedMainPhone2` text NOT NULL,
  `DataFeedMainPhone3` text NOT NULL,
  `DataFeedMainEmail` text NOT NULL,
  `UsedCarsInStock` text NOT NULL,
  `Rep` varchar(3) NOT NULL,
  `Program` text NOT NULL,
  `directory` varchar(255) NOT NULL default 'DirectoryDeclined',
  `CaBID` varchar(255) NOT NULL default 'CaBIDDeclined',
  `YouTube` varchar(255) NOT NULL default 'YouTubeDeclined',
  `SMS` varchar(255) NOT NULL default 'SMSDeclined',
  `facebook` varchar(255) NOT NULL default 'FacebookDeclined',
  `MthlyPmt` int(11) NOT NULL,
  `StartDate` text NOT NULL,
  `Authorization` varchar(30) NOT NULL,
  `AgentFirstName` varchar(15) NOT NULL,
  `AgentLastName` varchar(15) NOT NULL,
  `Signature` varchar(3) NOT NULL,
  `DateSigned` text NOT NULL,
  `DealerUserName` varchar(20) NOT NULL,
  `DealerPassword` text NOT NULL,
  `MemberStatus` varchar(255) NOT NULL default 'INACTIVE',
  `Notes` text NOT NULL,
  `Cancelled` varchar(255) NOT NULL,
  `LastLogin` text NOT NULL,
  `LastLoginLocation` text NOT NULL,
  `Restored` text NOT NULL,
  PRIMARY KEY  (`DealerID`),
  UNIQUE KEY `DealerUserName` (`DealerUserName`),
  UNIQUE KEY `DealerName` (`DealerName`),
  KEY `RepName` (`RepName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` VALUES(1, '2012-12-26 09:38:27', 'Stephanie l McGlathery', 'My Dealership', '123 Main Street', 'A', 'Nashville', 'TN', 37205, 'United States', 'MyDealership.com', 'Yes', 'Bart', 'Simpson', '780', '780', '7807', '7807', '807', '780', '8780', 'Bart@MyDealership.com', 'Manager', 'Lisa', 'Simpson', 'Lisa@MyDealership.com', 615, 780, 780, '679', '679', '6796', 'crm@MyDealership.com', 'Kelly Karpower', '', 'Marge', 'Simpson', '087', '878', '9078', 'Marge@MyDealership.com', 'Bentley, Lexus, G37', 'Yes', '798', 'DirectoryDeclined', 'CaBIDDeclined', 'YouTubeDeclined', 'SMSDeclined', 'FacebookDeclined', 798, 'Jan/30/2013', 'check', 'Homer', 'Simpson', 'HJS', '12', 'MyDealer1', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', 'Updated note for my dealership', '', '', '74.179.31.248', '02/20/2013 01:56:42 pm');
INSERT INTO `dealers` VALUES(3, '2012-12-26 10:39:28', 'Troy M Martoccia', 'A New Dealership', '100 14th Ave', 'B', 'Nashville', 'TN', 37210, 'United States', 'ANewDealership.com', 'Yes', 'Peter', 'Griffin', '780', '780', '0780', '8078', '807', '807', '8078', 'Peter@ANewDealership.com', 'Sales Manager', 'Lois', 'Grifin', 'Lois@ANewDealership.com', 615, 807, 8078, '786', '679', '5645', 'crm@ANewDealership.com', 'Lightyear', '', 'Chris', 'Griffin', '976', '976', '6796', 'Chris@ANewDealership.com', 'Ford, Chevy, Toyota', 'Yes', '399', 'DirectoryDeclined', 'CaBIDON', 'YouTubeDeclined', 'SMSDeclined', 'FacebookDeclined', 798, 'Jan/16/2013', 'check', 'Meg', 'Griffin', 'MAG', '12', 'ANewDealership', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', 'a new note for a New Dealership', '', '', '', '');
INSERT INTO `dealers` VALUES(4, '2012-12-26 12:08:03', 'Angela R Longaberger', 'ABC Dealership', '123 Main Street', '', 'Hendersonville', 'TN', 37075, 'United States', 'ABCDealership.com', 'Yes', 'Hank ', 'Hil', '679', '679', '6799', '7967', '967', '796', '7967', 'Hank@ABCDealership.com', 'Assistant Manager', 'Hank', 'Hill', 'Hank@ABCDealership.com', 908, 780, 7807, '087', '807', '0780', 'crm@ABCDealership.com', 'Auto Uplink', '', 'Jim', 'Doe', '807', '870', '7807', 'Jim@ABCDealership.com', 'Ford F-150s', 'Yes', '798', 'DirectoryDeclined', 'CaBIDDeclined', 'YouTubeDeclined', 'SMSDeclined', 'FacebookDeclined', 798, 'Feb/13/2013', 'check', 'Angie', 'Longaberger', 'ARL', '12', 'ABCDealer', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', 'new note for ABC Dealership', '', '', '', '');
INSERT INTO `dealers` VALUES(5, '2012-12-27 13:37:52', 'Stephanie l McGlathery', 'ZYXDealer', '123 Main Street', 'C', 'Madison', 'TN', 37115, 'United States', 'ZYXDealership.com', 'Yes', 'Peggy', 'Hill', '780', '780', '0780', '8078', '078', '807', '8074', 'Peggy@ZYXDealership.com', 'Sales Manager', 'Bobby', 'Hill', 'Bobby@ZYXDealership.com', 870, 780, 7807, '769', '697', '9679', 'crm@ZYXDealership.com', 'Kelly Karpower', '', 'Hank', 'Hill', '780', '807', '7807', 'Hank@ZYXDealership.com', 'Ford, Chevy', 'Yes', '399', 'directoryON', 'CaBIDDeclined', 'YouTubeDeclined', 'SMSDeclined', 'FacebookDeclined', 498, 'Feb/19/2013', 'check', 'Bobby', 'Hill', 'BAH', '12', 'ZYXDealer', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(6, '2013-01-04 12:15:49', 'Stephanie l McGlathery', 'This Dealership', '123 Main Street', 'B', 'Nashville', 'TN', 37210, 'United States', 'ThisDealership.com', 'Yes', 'Stan', 'Smith', '780', '780', '0780', '1234', '087', '780', '8078', 'stephmcglathery@gmail.com', 'Manager', 'Stan', 'Smith', 'Stan@us.gov', 808, 807, 7807, '787', '087', '7807', 'crm@gmail.com', 'Kelly Karpower', '', 'Stan', 'Smith', '780', '807', '7807', 'stan@us.gov', 'American Made Cars', 'Yes', '798', 'DirectoryDeclined', 'CaBIDDeclined', 'YouTubeDeclined', 'SMSDeclined', 'FacebookDeclined', 798, 'Feb/28/2013', 'check', 'Stan', 'Smith', 'SSS', '01', 'ThisDealer', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '02/13/2013 09:08:30 am', '74.179.28.83', '');
INSERT INTO `dealers` VALUES(7, '2013-01-08 13:02:35', 'Stephanie l McGlathery', 'Brand New Dealership', '123 Main Street', '', 'Nashville', 'TN', 37205, 'United States', 'BrandNewDealer.com', 'Yes', 'Jon', 'Alan', '870', '870', '870', '0780', '780', '708', '8078', 'stephmcglathery@gmail.com', 'Manager', 'Jon', 'Alan', 'Jon@gmail.com', 780, 807, 8078, '870', '807', '0870', 'crm@gmail.com', 'Kelly Karpower', '', 'Joe', 'Bob', '787', '078', '7807', 'Joe@Bob.com', 'Blah, Blah, Blah, ', 'Yes', '798', 'DirectoryDeclined', 'CaBIDON', 'YouTubeDeclined', 'SMSDeclined', 'facebookON', 2687, '', 'check', 'Joe', 'Bob', 'JAB', '78', 'BrandNewDealer', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', 'note for Brand New', '', '', '', '');
INSERT INTO `dealers` VALUES(8, '2013-01-08 13:14:08', 'Stephanie l McGlathery', 'Used Dealership #1', '123 Main Street', '', 'Madison', 'TN', 37115, 'United States', 'UsedDealer.com', 'Yes', 'Micah', 'Mortimer', '780', '780', '7807', '7807', '780', '078', '7807', 'Micah@gmail.com', 'Sales Manager', 'Micah', 'Mortimer', 'Micah@gmail.com', 87, 967, 7967, '679', '967', '6796', 'CRM@gmail.com', 'Autonation', '', 'Jeremy', 'Mortimer', '780', '807', '8780', 'Jeremy@gmail.com', 'blah, blah, blah', 'Yes', '798', 'DirectoryDeclined', 'CaBIDDeclined', 'YouTubeDeclined', 'SMSDeclined', 'FacebookDeclined', 798, '', 'check', 'Micah', 'Mortimer', 'MAM', '78', 'UsedDealer1', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(12, '2013-01-15 11:13:08', 'Angela R Longaberger', 'Old Dealership', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'OldDealer.com', 'Yes', 'Maggie', 'Simpson', '476', '769', '9679', '5685', '865', '685', '8568', 'stephmcglathery@gmail.com', 'Manager', 'Maggie', 'Simpson', 'Maggie@gmail.com', 780, 78, 8078, '807', '807', '7807', 'crm@gmail.com', 'Auto Express', '', 'Joe', 'Bob', '780', '807', '8078', 'Joe@Bob.com', 'Blah', 'Yes', '798', 'directoryON', 'CaBIDON', 'YouTubeON', 'SMSON', 'facebookON', 3975, '', 'check', 'Maggie', 'Simpson', 'MAS', '01', 'OldDealer', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(13, '2013-01-21 15:53:39', 'Angela R Longaberger', 'That Dealership', '123 Main Street', 'B', 'Nashville', 'TN', 37210, 'United States', 'ThatDealer.com', 'Yes', 'John', 'Doe', '807', '078', '0780', '8078', '078', '807', '8078', 'stephmcglathery@gmail.com', 'Manager', 'John', 'Doe', 'stephmcglathery@gmail.com', 615, 780, 1234, '780', '807', '7807', 'crm@gmail.com', 'Autonation', '', 'John', 'Doe', '780', '807', '7807', 'steph@gmail.com', 'blah', 'Yes', '399', 'directoryON', 'CaBIDON', 'YouTubeON', 'SMSDeclined', 'facebookON', 2586, 'Jan/31/2013', 'check', 'John', 'Doe', 'JAD', '01', 'ThatDealer', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', 'updated note', '', '', '', '');
INSERT INTO `dealers` VALUES(14, '2013-01-29 10:51:23', 'Glenn H Andersen', 'Used Dealership #2', '123 Main Street', 'B', 'Nashville', 'TN', 37210, 'United States', 'UsedDealer2.com', 'Yes', 'Homer', 'Simpson', '123', '456', '7890', '1234', '123', '456', '7890', 'Homer@simpsons.com', 'Sales Manager', 'Homer', 'Simpson', 'Homer@simpsons.com', 123, 456, 7809, '123', '456', '7890', 'Homer@simpsons.com', 'Autofunds', '', 'Homer', 'Simpson', '123', '456', '7809', 'Homer@simpsons.com', 'Plow', 'Yes', '798', 'directoryON', 'CaBIDON', 'YouTubeON', 'SMSON', 'facebookON', 3975, '', 'check', 'Homer', 'Simpson', 'HJS', '01', 'UsedDealer2', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(15, '2013-01-29 11:34:34', 'Stephanie l McGlathery', 'New Dealership', '123 Main Street', 'B', 'Nashville', 'TN', 37210, 'United States', 'NewDealer.com', 'Yes', 'Homer', 'Simpson', '123', '456', '7890', '1234', '123', '456', '7809', 'Homer@simpsons.com', 'Sales Manager', 'Homer', 'Simpson', 'Homer@simpsons.com', 123, 456, 7890, '124', '655', '5435', 'Homer@simpsons.com', 'Autofunds', '', 'Homer', 'Simpson', '976', '767', '6786', 'Homer@simpsons.com', 'Blah', 'Yes', '798', 'directoryON', 'CaBIDON', 'YouTubeON', 'SMSON', 'facebookON', 3975, 'Jan/16/2013', 'check', 'Homer', 'Simpson', 'HJS', '01', 'NewDealer', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(16, '2013-01-30 15:08:46', 'Glenn H Andersen', 'Old Dealership #2', '123 Main Street ', 'B', 'Nashville', 'Tn', 37205, 'United States', 'OldDealer2.com', 'Yes', 'Lisa', 'Simpson', '987', '769', '7967', '3463', '796', '547', '7436', 'stephmcglathery@gmail.com', 'Owner', 'Lisa', 'Simpson', 'Lisa@gmail.com', 697, 976, 6796, '679', '867', '9867', 'crm@gmail.com', 'Autosoft', '', 'Lisa', 'Simpson', '555', '555', '5555', 'Lisa@gmail.com', 'mercedes', 'Yes', '399', 'directoryON', '', '', '', 'facebookON', 1988, '', 'check', 'Lisa', 'Simpson', 'LAS', '01/30/2013', 'OldDealer#2', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(20, '2013-02-04 14:13:21', 'Stephanie l McGlathery', 'Old Dealership #3', '123 main street', '', 'Nashville', 'Tn', 37205, 'United States', 'olddealer3.com', 'Yes', 'Bart', 'Simpson', '780', '789', '0978', '8097', '870', '709', '8780', 'bart@gmail.com', 'Sales Manager', 'Bart', 'Simpson', 'Bart@gmail.com', 877, 870, 8078, '870', '807', '7807', 'crm@gmail.com', 'Automanager', '', 'Bart', 'Simpson', '870', '878', '8078', 'Bart@gmail.com', 'blah', 'Yes', '399', 'directoryON', '', '', '', 'facebookON', 1988, '', 'check', 'Stephanie', 'McGlathery', 'SLM', '02/04/2013', 'OldDealer3', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(22, '2013-02-04 15:01:19', 'Stephanie l McGlathery', 'Old Dealership # 4', '123 Main Street', 'B', 'Nashville', 'Tn', 37230, 'United States', 'OldDealer4.com', 'Yes', 'Lisa', 'Simpson', '087', '807', '0780', '0780', '807', '807', '7807', 'lisa@gmail.com', 'Manager', 'Lisa', 'Simpson', 'Lisa@gmail.com', 780, 807, 7807, '870', '780', '8097', 'crm@gmail.com', 'Autolot Manager', '', 'Lisa', 'Simpson', '679', '679', '9867', 'Lisa@gmail.com', 'blah', 'Yes', '399', 'directoryON', '', '', '', 'facebookON', 1988, '', 'check', 'Lisa', 'Simpson', 'LAS', '02/04/2013', 'OldDealer4', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(27, '2013-02-05 12:02:12', 'Stephanie l McGlathery', 'Old Dealership #5', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'MyDealer5.com', 'Yes', 'Bart', 'Simpson', '870', '870', '8078', '7807', '780', '780', '7088', 'stephmcglathery@gmail.com', 'Manager', 'Bart', 'Simpson', 'Bart@gmail.com', 807, 780, 678, '967', '679', '9679', 'crm@gmail.com', 'Automanager', '', 'Bart', 'Simpson', '708', '798', '9079', 'Bart@gmail.com', 'Blah', 'Yes', '798', 'DirectoryDeclined', 'CaBIDDeclined', 'YouTubeDeclined', 'SMSDeclined', 'facebookON', 2288, '', 'check', 'Bart', 'Simpson', 'BBS', '02/05/2013', 'OldDealer5', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(28, '2013-02-05 13:45:28', 'Stephanie l McGlathery', 'My Dealership 2', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'MyDealer2.com', 'Yes', 'Bart', 'Simpson', '574', '546', '7457', '7547', '574', '457', '5745', 'stephmcglathery@gmail.com', 'Manager', 'Bart', 'Simpson', 'Bart@gmail.com', 677, 876, 6789, '568', '756', '0568', 'crm@gmail.com', '1Auto Revo', '', 'Joe', 'Bob', '556', '567', '6585', 'Joe@bob.com', 'blah', 'Yes', '798', 'directoryON', 'CaBIDON', 'YouTubeDeclined', 'SMSON', 'facebookON', 3776, 'Feb/11/2013', 'check', 'Bart', 'Simpson', 'BAS', '02/05/2013', 'MyDealer2', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(29, '2013-02-05 14:28:25', 'Angela R Longaberger', 'My Dealership 4', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'MyDealer4.com', 'Yes', 'Bart', 'Simpson', '807', '078', '0780', '0780', '078', '807', '8078', 'stephmcglathery@gmail.com', 'manager', 'Bart', 'Simpson', 'Bart@gmail.com', 780, 807, 7807, '780', '078', '7807', 'crm@gmail.com', 'Autoexperts', '', 'Bart', 'Simpson', '780', '807', '7897', 'Bart@gmail.com', 'blah', 'Yes', '798', '', 'CaBIDON', 'YouTubeON', '', 'facebookON', 2886, 'Feb/10/2013', 'check', 'Bart', 'Simpson', 'BAS', '02/05/2013', 'MyDealer4', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
INSERT INTO `dealers` VALUES(31, '2013-02-05 17:30:11', 'Troy M Martoccia', 'New Dealership #25', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'NewDealer25.com', 'Yes', 'Bart', 'Simpson', '098', '798', '0987', '7809', '870', '709', '8907', 'stephmcglathery@gmail.com', 'Manager', 'Bart', 'Simpson', 'Bart@gmail.com', 786, 678, 7890, '786', '957', '8769', 'Bart@gmail.com', 'AutoMate', '', 'Bart', 'Simpson', '870', '987', '0987', 'Bart@gmail.com', 'blah blah', 'Yes', '798', 'directoryON', 'CaBIDON', '', '', 'FacebookDeclined', 1296, '', 'check', 'Bart', 'Simpson', 'BAS', '02/05/2013', 'NewDealer25', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'INACTIVE', '', '', '', '', '');
