-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2015 at 02:44 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Pratham-Team10`
--

-- --------------------------------------------------------

--
-- Table structure for table `Center`
--

CREATE TABLE IF NOT EXISTS `Center` (
  `name` varchar(25) DEFAULT NULL,
  `id` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Company`
--

CREATE TABLE IF NOT EXISTS `Company` (
  `name` varchar(25) NOT NULL,
  `skill` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE IF NOT EXISTS `Course` (
  `course_id` varchar(5) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE IF NOT EXISTS `Employee` (
  `name` varchar(25) NOT NULL,
  `center` varchar(5) DEFAULT NULL,
  `phone_no` int(10) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `fkey` (`center`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Fees`
--

CREATE TABLE IF NOT EXISTS `Fees` (
  `id` int(10) NOT NULL DEFAULT '0',
  `type` int(5) DEFAULT NULL,
  `sponsor` varchar(25) DEFAULT NULL,
  `fees_paid` int(10) DEFAULT NULL,
  `sponsor_paid` int(100) DEFAULT NULL,
  `total_due` int(10) DEFAULT NULL,
  `sponsor_percent` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Performance`
--

CREATE TABLE IF NOT EXISTS `Performance` (
  `id` int(10) NOT NULL DEFAULT '0',
  `course` varchar(5) NOT NULL,
  `test1` int(2) NOT NULL,
  `test2` int(2) NOT NULL,
  `final` int(2) DEFAULT NULL,
  `vocal` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE IF NOT EXISTS `Rating` (
  `id` int(11) NOT NULL DEFAULT '0',
  `stu_name` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `employer` varchar(25) NOT NULL,
  `performance` int(2) DEFAULT NULL,
  `well_being` int(2) DEFAULT NULL,
  `satisfaction` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `name` varchar(25) NOT NULL,
  `phone_no` int(11) DEFAULT NULL,
  `course` varchar(5) DEFAULT NULL,
  `registered` tinyint(1) NOT NULL,
  PRIMARY KEY (`name`),
  KEY `course` (`course`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Sponsor`
--

CREATE TABLE IF NOT EXISTS `Sponsor` (
  `name` varchar(25) NOT NULL DEFAULT '',
  `amount_contributed` int(10) DEFAULT NULL,
  `phone_no` int(10) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `name` varchar(25) NOT NULL DEFAULT '',
  `phone_no` int(10) DEFAULT NULL,
  `DOR` date DEFAULT NULL,
  `DOC` date NOT NULL,
  `DOB` date DEFAULT NULL,
  `center` int(5) DEFAULT NULL,
  `certified` tinyint(1) DEFAULT NULL,
  `mentor` varchar(25) DEFAULT NULL,
  `fees` int(10) DEFAULT NULL,
  `performance` int(10) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Employee`
--
ALTER TABLE `Employee`
  ADD CONSTRAINT `fkey` FOREIGN KEY (`center`) REFERENCES `Center` (`id`);

--
-- Constraints for table `sms`
--
ALTER TABLE `sms`
  ADD CONSTRAINT `sms_ibfk_1` FOREIGN KEY (`course`) REFERENCES `Course` (`course_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
