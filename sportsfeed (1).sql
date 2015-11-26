-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2015 at 04:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sportsfeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `Id` int(10) NOT NULL,
  `gall_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(500) NOT NULL,
  PRIMARY KEY (`gall_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `Id` int(10) NOT NULL,
  `id_member1` int(10) NOT NULL AUTO_INCREMENT,
  `membername` varchar(100) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `rollno` int(20) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `post_date` date NOT NULL,
  `aboutme` varchar(200) NOT NULL,
  PRIMARY KEY (`id_member1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Id`, `id_member1`, `membername`, `pos`, `dept`, `rollno`, `file_name`, `post_date`, `aboutme`) VALUES
(1, 2, 'sherine', 'CB', 'cse', 106113096, 'images/11.jpg', '0000-00-00', 'catch me :P');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `Id` int(10) NOT NULL,
  `pos_id` int(10) NOT NULL AUTO_INCREMENT,
  `PostCont` varchar(500) NOT NULL,
  `PostHeadline` varchar(100) NOT NULL,
  `PostDate` datetime(6) NOT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `Id` int(10) NOT NULL,
  `score_id` int(10) NOT NULL AUTO_INCREMENT,
  `TeamAname` varchar(20) NOT NULL,
  `TeamBname` varchar(20) NOT NULL,
  `TeamAscore` int(20) NOT NULL,
  `TeamBscore` int(20) NOT NULL,
  `Dateandtime` datetime(6) NOT NULL,
  PRIMARY KEY (`score_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`Id`, `score_id`, `TeamAname`, `TeamBname`, `TeamAscore`, `TeamBscore`, `Dateandtime`) VALUES
(1, 2, 'NITT', 'NITK', 12, 10, '2015-09-22 10:14:28.000000'),
(1, 3, 'nitw', 'nitt', 20, 24, '2015-09-22 10:15:25.000000');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `Team` varchar(100) NOT NULL,
  `Id` int(10) NOT NULL,
  `AccessKey` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`Team`, `Id`, `AccessKey`) VALUES
('Football', 1, '456foot');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
