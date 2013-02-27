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
  `LastLogin` text NOT NULL,
  `LastLoginLocation` text NOT NULL,
  PRIMARY KEY  (`employeeID`),
  UNIQUE KEY `EmplUserName` (`EmplUserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` VALUES('2012-12-21 14:07:25', 1, 'Stephanie l McGlathery', 'Troy M Martocci', 'Stephanie', 'l', 'McGlathery', 'stephmcglathery@gmail.com', 615, 554, '0580', '615', '554', '0580', '3831 West End Ave', '6', 'Nashville', 'TN', 37205, 'United States', 'Stephanie', 'L', 'McGlathery', '', '3831 West End Ave', '6', 'Nashville', 'TN', 37205, 'United States', 615, 554, 580, 'stephmcglathery@gmail.com', 'ConfidentialityAgreement_stephmcglathery.pdf', 'IndependentContractorAgreement_stephmcglathery.pdf', 'w9_stephmcglathery.pdf', 'StephMcGlathery', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'stephmcglathery.jpg', '02/26/2013 12:07:38 pm', '74.179.31.248');
INSERT INTO `employees` VALUES('2012-12-21 14:09:52', 2, 'Troy M Martoccia', '', 'Troy', 'M', 'Martoccia', 'Troy@gmail.com', 615, 943, '5202', '615', '943', '5202', '255 3rd Ave', 'A', 'Nasvhil', 'TN', 37210, 'United States', 'Troy', 'M', 'Martocia', 'iautolead.com', '522 3rd Ave', 'A', 'Nashvile', 'TN', 37210, 'United States', 615, 123, 4566, 'Troy@gmail.com', '', '', '', 'TroyM', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'TroyM.png', '02/13/2013 09:10:40 am', '74.179.28.83');
INSERT INTO `employees` VALUES('2012-12-26 11:56:57', 3, 'Stephen M McGlathery', 'Stephanie l McGlathery', 'Stephen', 'M', 'McGlathery', 'Stephen@gmail.com', 615, 859, '1975', '615', '859', '1975', '3038 Patton Branch Rd', '', 'Goodletsville', 'TN', 37072, 'United States', 'Stephen', 'M', 'McGlathery', '', '3038 Patton Branch Rd', '', 'Goodlettsville', 'TN', 37072, 'United States', 615, 859, 1975, 'Stephen@gmail.com', '', '', '', 'StephenM', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'StephenM.png', '', '');
INSERT INTO `employees` VALUES('2012-12-26 12:03:04', 4, 'Angela R Longaberger', 'Stephanie l McGlathery', 'Angela', 'R', 'Longaberger', 'ClassifiedRideWebsite@gmail.com', 615, 679, '9679', '967', '967', '9679', '3831 West End Ave', '', 'Nashville', 'TN', 37205, 'United States', 'Angela', 'R', 'Longaberger', 'Rockstar INC', '3831 West End Ave', '', 'Nashvile', 'TN', 37205, 'United States', 679, 679, 9679, 'Angela@gmail.com', '', '', '', 'ALongaberger', '0ec5f7c0abe435d22cca61c6d4ed58226e83f9cecef7dcbfda3b48c449c77b35', 'ALongaberger.jpg', '', '');
INSERT INTO `employees` VALUES('2012-12-26 12:15:34', 5, 'Sydney  Gunter', 'Peter A. Bond', 'Sydney', '', 'Gunter', 'SGunter@gmail.com', 615, 123, '1234', '123', '123', '1234', '194 Northview Ct', '', 'Hendersonville', 'TN', 37075, 'United States', 'Sydney', '', 'Gunter', '', '194 Northview Ct', '', 'Hendersonville', 'TN', 37075, 'United States', 878, 780, 780, 'SGunter@gmail.com', '', '', '', 'SGunter', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'SGunter.jpeg', '', '');
INSERT INTO `employees` VALUES('2012-12-26 12:18:33', 6, 'Joshua  Mayben', 'Stephanie l McGlathery', 'Joshua', '', 'Mayben', 'JMayben@gmail.com', 780, 780, '0780', '807', '807', '0780', '123 Main Street', '', 'Atlanta', 'GA', 11111, 'United States', 'Joshua', 'M', 'Mayben', '', '123 Main Street', '', 'Atlanta', 'GA', 11111, 'United States', 987, 654, 3211, 'JMayben@gmail.com', '', '', '', 'JMayben', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'JMayben.jpg', '', '');
INSERT INTO `employees` VALUES('2012-12-26 12:24:08', 7, 'Caleb  Butler', 'Troy Martoccia', 'Caleb', '', 'Butler', 'CButler@gmail.com', 256, 679, '6796', '256', '769', '6976', '987 Main Street', '', 'Rainbow City', 'AL', 35903, 'United States', 'Caleb', '', 'Butler', 'Butler INC', '987 Main Street', '', 'Rainbow City', 'AL', 35903, 'United States', 256, 767, 6796, 'CButler@gmail.com', '', '', '', 'CButler', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'CButler.jpg', '', '');
INSERT INTO `employees` VALUES('2012-12-28 13:23:08', 8, 'Rob  Zombie', 'Stephanie l McGlathery', 'Rob', '', 'Zombie', 'RobZombie@gmail.com', 780, 708, '7807', '078', '078', '8078', '500 TN Ave', '', 'Nashville', 'TN', 37210, 'United States', 'Rob', '', 'Zombie', '', '500 TN Ave', 'D', 'Nashville', 'TN', 37210, 'United States', 780, 807, 8078, 'RobZombie@gmail.com', '', '', '', 'RobZombie', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'RobZombie.jpg', '', '');
INSERT INTO `employees` VALUES('2013-01-02 11:15:11', 9, 'Brandon  Cline', 'Troy Martoccia', 'Brandon', '', 'Cline', 'Brandon@gmail.com', 780, 780, '0780', '780', '078', '8078', '123 Main Street', '', 'Hermitage', 'TN', 37056, 'United States', 'Brandon', '', 'Cline', 'Syndicate Mstrmnd LLC', '123 Main Street', '', 'Hermitage', 'TN', 37056, 'United States', 780, 780, 7807, 'Brandon@gmail.com', '', '', '', 'BCline', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'BCline.jpeg', '', '');
INSERT INTO `employees` VALUES('2013-01-04 10:23:08', 10, 'Jonas  Fields', 'Stephanie l McGlathery', 'Jonas', '', 'Fields', 'JFields@gmail.com', 780, 780, '7807', '780', '780', '7807', '123 Main Street', 'D12', 'Murfreesborro', 'TN', 37129, 'United States', 'Jonas', '', 'Fields', '', '123 Main Street', 'D12', 'Murfreesborro', 'TN', 37129, 'United States', 780, 780, 8078, 'JFields@gmail.com', '', '', '', 'JFields', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', '', '', '');
INSERT INTO `employees` VALUES('2013-01-04 10:38:51', 11, 'Jason  Smith', 'Troy Martoccia', 'Jason', '', 'Smith', 'Jason@gmail.com', 780, 807, '7807', '780', '078', '8078', '123 Main Street', 'G4', 'Madison', 'TN', 37115, 'United States', 'Jason', '', 'Smith', '', '123 Main Street', 'G4', 'Madison', 'TN', 37115, 'United States', 679, 679, 9769, 'Jason@gmail.com', '', '', '', 'JSmith', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', '', '', '');
INSERT INTO `employees` VALUES('2013-01-04 10:58:36', 12, 'Chris  Eatherly', 'Stephanie l McGlathery', 'Chris', '', 'Eatherly', 'Cartoon@gmail.com', 780, 780, '8078', '078', '807', '0780', '123 Main Street', '', 'Hermitage', 'TN', 37215, 'United States', 'Chris', '', 'Eatherly', '', '123 Main Street', '', 'Hermitage', 'TN', 37215, 'United States', 780, 780, 7809, 'Cartoon@gmail.com', '', '', '', 'Cartoon', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'cartoon.jpg', '', '');
INSERT INTO `employees` VALUES('2013-01-04 11:01:39', 13, 'Bruce  Wayne', 'Stephanie l McGlathery', 'Bruce', '', 'Wayne', 'Batman@gmail.com', 787, 87, '8078', '780', '780', '8079', '123 Main Street', '', 'Gotham City', 'NY', 12234, 'United States', 'Bruce', '', 'Wayne', 'Batman, INC', '123 Main Street', '', 'Gotham Cith', 'NY', 12234, 'United States', 780, 780, 780, 'Batman@gmail.com', '', '', '', 'Batman', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'Batman.jpg', '', '');
INSERT INTO `employees` VALUES('2013-01-07 20:14:54', 18, 'Johnny  Depp', 'Stephanie l McGlathery', 'Johnny', '', 'Depp', 'jdepp@gmail.com', 178, 807, '0780', '807', '807', '7807', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'Johnny', '', 'Depp', '', '123 Main Street', 'B', 'Nashville', 'Tn', 37205, 'United States', 780, 780, 700, 'Johnny@gmail.com', '', '', '', 'JohnnyDepp', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'JohnnyDepp.jpg', '', '');
INSERT INTO `employees` VALUES('2013-01-08 11:54:40', 20, 'Lois  Griffin', 'Stephanie l McGlathery', 'Lois', '', 'Griffin', 'Lois@gmail.com', 780, 780, '7807', '780', '780', '6780', '31 Spooner Street', '', 'Quahog', 'RI', 1234, 'United States', 'Lois', '', 'Griffin', '', '31 Spooner Street', '', 'Quahog', 'RI', 1234, 'United States', 780, 807, 7807, 'Lois@gmail.com', '', '', '', 'LGriffin', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'LGriffin.jpg', '', '');
INSERT INTO `employees` VALUES('2013-01-10 10:13:42', 21, 'Tony  Stark', 'Stephanie l McGlathery', 'Tony', '', 'Stark', 'ironman@gmail.com', 87, 870, '7098', '907', '089', '0987', '123 Main Street', '', 'Nashville', 'TN', 37210, 'United States', 'Tony', '', 'Stark', 'Stark Industries', '123 Main Street', '', 'Nashville', 'TN', 37210, 'United States', 780, 780, 780, 'ironman@gmail.com', '', '', '', 'Ironman', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'Ironman.jpg', '', '');
INSERT INTO `employees` VALUES('2013-01-15 09:12:30', 22, 'Hank  Hill', 'Stephanie l McGlathery', 'Hank', '', 'Hill', 'Hank@gmail.com', 780, 78, '0780', '078', '807', '7807', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 'Peggy', '', 'Hill', '', '123 Main Street', 'B', 'Nashville', 'TN', 37205, 'United States', 780, 807, 780, 'Pegg@gmail.com', '', '', '', 'HankHill', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'HankHill.jpg', '', '');
INSERT INTO `employees` VALUES('2013-01-24 15:23:56', 23, 'Glenn H Andersen', 'Troy M Martoccia', 'Glenn', 'H', 'Andersen', 'ghandersen@comcast.net', 206, 579, '0846', '253', '661', '2255', '2412 S 371st Street', '', 'Federal Way', 'WA', 98003, 'United States', 'Glenn', 'H', 'Andersen', '', '2412 S 371st Street', '', 'Federal Way', 'WA', 98003, 'United States', 206, 579, 846, 'ghandersen@comcast.net', '', '', '', 'ghandersen', 'fd4599e730269bb8f0e1ccf2eff27dc06ee00ed214c7777db152259a9782bdcc', 'ghandersen.jpg', '', '');
INSERT INTO `employees` VALUES('2013-02-07 09:02:06', 25, 'Test A User', 'Stephanie l McGlathery', 'Test', 'A', 'User', 'test@gmail.com', 615, 123, '4567', '615', '987', '6543', '123 Main Street', 'C', 'Nashville', 'TN', 37210, 'United States', 'Test', 'A', 'User', 'Test Business', '123 Main Street', 'C', 'Nashville', 'TN', 37210, 'United States', 615, 123, 4567, 'test@gmail.com', '', '', '', 'testuser', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL auto_increment,
  `employee` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `LastLogin` text NOT NULL,
  `LastLoginLocation` text NOT NULL,
  PRIMARY KEY  (`member_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` VALUES(1, 'Stephanie l McGlathery', 'AdminSteph', 'stephmcglathery@gmail.com', 'f0fd52e74857e4e8cf2dba8cf46befa7f6283264a7b28b3725c80718c59b32bd', '02/22/2013 05:11:07 pm', '74.179.31.248');
INSERT INTO `members` VALUES(2, '', 'AdminTestUser', '', '6ca13d52ca70c883e0f0bb101e425a89e8624de51db2d2392593af6a84118090', '', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

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
INSERT INTO `Referrals` VALUES(19, '1', 'Stephanie l McGlathery', 'test@gmail.com', 'Test A User');

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
  `Commission` varchar(255) NOT NULL,
  `ReferralAmount` text NOT NULL,
  PRIMARY KEY  (`TransactionID`),
  KEY `employeeID` (`eID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` VALUES('2012-12-26 09:38:27', 80, 1, 'Stephanie l McGlathery', 1, 'My Dealership', 'Online Registration', '2487', 'Troy M Martoccia', '', '637.8', '60');
INSERT INTO `transactions` VALUES('2012-12-26 12:08:03', 83, 4, 'Angela R Longaberger', 4, 'ABC Dealership', 'Online Registration', '997', 'Stephanie l McGlathery', '', '339.8', '60');
INSERT INTO `transactions` VALUES('2012-12-27 13:37:52', 84, 1, 'Stephanie l McGlathery', 5, 'ZYXDealer', 'Online Registration', '498', 'Troy M Martoccia', '', '169.8', '30');
INSERT INTO `transactions` VALUES('2013-01-04 12:15:49', 85, 1, 'Stephanie l McGlathery', 6, 'This Dealership', 'Online Registration', '798', 'Troy M Martoccia', '', '300', '60');
INSERT INTO `transactions` VALUES('2013-01-08 13:02:35', 86, 1, 'Stephanie l McGlathery', 7, 'Brand New Dealership', 'Online Registration', '2687', 'Troy M Martoccia', '', '677.8', '60');
INSERT INTO `transactions` VALUES('2013-01-08 13:36:33', 94, 1, 'Stephanie l McGlathery', 10, 'Used Dealership #1', 'Online Registration', '798', 'Troy M Martoccia', '', '300', '60');
INSERT INTO `transactions` VALUES('2013-01-15 11:13:08', 96, 4, 'Angela R Longaberger', 12, 'Old Dealership', 'Online Registration', '3975', 'Stephanie l McGlathery', '', '935.4', '60');
INSERT INTO `transactions` VALUES('2013-01-21 15:53:40', 97, 4, 'Angela R Longaberger', 13, 'That Dealership', 'Online Registration', '3576', 'Stephanie l McGlathery', '', '785.4', '30');
INSERT INTO `transactions` VALUES('2013-01-29 10:51:23', 98, 23, 'Glenn H Andersen', 14, 'Used Dealership #2', 'Online Registration', '3975', 'Troy M Martoccia', '', '935.4', '60');
INSERT INTO `transactions` VALUES('2013-01-29 11:34:34', 99, 1, 'Stephanie l McGlathery', 15, 'New Dealership', 'Online Registration', '3975', 'Troy M Martoccia', '', '935.4', '60');
INSERT INTO `transactions` VALUES('2013-01-30 15:08:46', 100, 23, 'Glenn H Andersen', 16, 'Old Dealership #2', 'Online Registration', '1988', 'Troy M Martoccia', '', '467.8', '30');
INSERT INTO `transactions` VALUES('2013-02-04 14:13:21', 112, 1, 'Stephanie l McGlathery', 20, 'Old Dealership #3', 'Online Registration', '1988', 'Troy M Martoccia', '', '467.8', '30');
