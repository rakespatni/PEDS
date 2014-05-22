-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 06:51 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PEDS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `name` varchar(20) DEFAULT NULL,
  `c_id` varchar(10) NOT NULL DEFAULT '',
  `c_contact` int(11) DEFAULT NULL,
  `g_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `name` varchar(10) DEFAULT NULL,
  `id` varchar(10) NOT NULL DEFAULT '',
  `mentor_contact` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_name` varchar(20) DEFAULT NULL,
  `post` varchar(10) DEFAULT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `contact` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `g_name` varchar(20) NOT NULL DEFAULT '',
  `s_roll` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`g_name`,`s_roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infra`
--

CREATE TABLE IF NOT EXISTS `infra` (
  `type` varchar(10) DEFAULT NULL,
  `location` varchar(20) NOT NULL DEFAULT '',
  `descr` varchar(30) NOT NULL DEFAULT '',
  `g_name` varchar(20) NOT NULL DEFAULT '',
  `count` int(10) DEFAULT NULL,
  PRIMARY KEY (`location`,`descr`,`g_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`,`password`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `date` date DEFAULT NULL,
  `n_id` int(4) NOT NULL DEFAULT '0',
  `g_name` varchar(20) DEFAULT NULL,
  `n_descr` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `name` varchar(20) DEFAULT NULL,
  `roll` varchar(10) NOT NULL DEFAULT '',
  `gender` char(2) DEFAULT NULL,
  `rank` int(3) DEFAULT NULL,
  `s_dept` varchar(10) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `overall_score` decimal(10,2) DEFAULT NULL,
  `course_id` varchar(10) DEFAULT NULL,
  `course_marks` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `date` date DEFAULT NULL,
  `event_id` varchar(20) NOT NULL DEFAULT '',
  `g_name` varchar(20) DEFAULT NULL,
  `p_name` varchar(20) DEFAULT NULL,
  `opp_name` varchar(20) DEFAULT NULL,
  `p_score` decimal(10,2) DEFAULT NULL,
  `opp_score` decimal(10,2) DEFAULT NULL,
  `event_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `event_id` varchar(20) NOT NULL DEFAULT '',
  `g_name` varchar(20) DEFAULT NULL,
  `s_roll` varchar(10) NOT NULL DEFAULT '',
  `descr` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`event_id`,`s_roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `s_id` int(4) NOT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `s_descr` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_event`
--

CREATE TABLE IF NOT EXISTS `upcoming_event` (
  `name` varchar(20) DEFAULT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `g_name` varchar(20) NOT NULL DEFAULT '',
  `s_roll` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`date`,`g_name`,`s_roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
