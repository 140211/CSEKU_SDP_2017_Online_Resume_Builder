-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 02:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `eduid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `group` varchar(20) NOT NULL,
  `gpa` varchar(100) NOT NULL,
  `board` varchar(30) NOT NULL,
  `fromyear` varchar(20) NOT NULL,
  `toyear` varchar(20) NOT NULL,
  `college` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`eduid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`eduid`, `uid`, `group`, `gpa`, `board`, `fromyear`, `toyear`, `college`, `course`, `description`) VALUES
(1, 1, 'Science', '5.00 out of 5.00', 'Jessore', '2000', '2010', 'Dumuria Govt. Girls'' College', 'SSC', 'secondary certificate '),
(2, 1, 'Science', '4.30 out of 5.00', 'Jessore', '2010', '2012', 'Dumuria Girls'' College', 'HSC', 'Higher certificate'),
(5, 1, 'Science', 'Enrolled(102.75\ncredits completed)', 'Jessore', '2014', 'present', 'khulna university', 'Bachelor', ''),
(7, 0, 'Science', '0', 'Jessore', '2098', '2099', 'dumuria college', 'inter', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE IF NOT EXISTS `employment` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `fromyear` varchar(20) NOT NULL,
  `toyear` varchar(20) NOT NULL,
  `company` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`empid`, `fromyear`, `toyear`, `company`, `designation`, `description`) VALUES
(1, '2014', '2045', 'w3 engineer', 'WEB D', 'low'),
(8, '2010', '2012', 'ocilosoft', 'web designer', 'good performance'),
(9, '2001', '2012', 'ab coder', 'web', 'medium'),
(2, '2015', '2017', 'dohatek', 'SENIOR DESIGNER', 'medium'),
(10, '2001', '2012', 'ab coder', 'web', 'medium'),
(3, '2012', '2014', 'w3 engineer', 'ART DIRECTOR', 'good work'),
(6, '2010', '2012', 'ocilosoft', 'web designer', 'good performance'),
(7, '2010', '2012', 'ocilosoft', 'web designer', 'good performance');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `pid` int(11) NOT NULL,
  `page` varchar(20) NOT NULL,
  `data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pid` int(11) NOT NULL,
  `page` varchar(20) NOT NULL,
  `data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pid`, `page`, `data`) VALUES
(1, 'home', 'Seeking the position to utilize my skills and abilities in the Information Technology industry that offers professional growth while being resourceful, innovative and flexible, and helpful to others. With this Utilizing my skills that leads to not only my development, but rather overall development of organization. I have also interested in research base work.');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `uid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `datebirth` date NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`uid`, `image`, `fname`, `lname`, `designation`, `phone`, `email`, `website`, `bloodgroup`, `datebirth`) VALUES
(1, 'images/21557772_912002588953959_4783010329474803026_n.jpg', 'nadia eva', 'Akter', 'Graphic & Web Designer', '01925688', 'Nadia@gmail.com', 'http://www.nadira.com', 'B+', '1994-11-28'),
(8, 'images/21584941_1263971433730226_1538538417_n.jpg', '', '', '', '', '', '', '', '0000-00-00'),
(10, '', '', '', '', ' 01926588436', ' nadira@gmail.com', ' www.nadira.com', '', '0000-00-00'),
(9, 'images/21270997_770001556535096_3048590026141692056_n.jpg', '', '', '', '', '', '', '', '0000-00-00'),
(11, '', '', '', '', ' 01926588436', ' nadira@gmail.com', ' www.nadira.com', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `subtitle` varchar(30) NOT NULL,
  `filter` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `uid`, `photo`, `title`, `subtitle`, `filter`) VALUES
(1, 1, 'images/portfolio1.jpg', 'Advanced programmming lab', 'c#', 'Game'),
(2, 0, 'images/portfolio4.jpg', 'software development project', 'php', 'web'),
(5, 1, '', 'Bulk SMS System by PHP,HTML,My', '', ''),
(6, 1, '', 'Online Book Exchange by PHP(ra', '', ''),
(7, 1, '', 'Shop Management System by Lara', '', ''),
(8, 1, '', 'UPS by using 8051 Microcontrol', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
  `refId` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`refId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`refId`, `Name`, `Designation`, `Institute`, `contact_number`, `email`, `uid`) VALUES
(1, 'Dr. Kamrul Hasan Talukder', 'Professor', 'khulna university', '01925687763', ' khtalukder@gmail.com', 1),
(2, 'Dr. Kazi Masudul Alam', 'Associate Professor', 'khulna university', '+880-1711149360', 'kazi AT cseku DOT ac DOT bd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `skillid` int(11) NOT NULL AUTO_INCREMENT,
  `skilltype` varchar(20) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `skillvalue` int(11) NOT NULL,
  PRIMARY KEY (`skillid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skillid`, `skilltype`, `skill`, `skillvalue`) VALUES
(1, 'progskill', 'Wordpress', 67),
(2, 'progskill', 'PHP', 80),
(3, 'progskill', 'HTML', 99),
(4, 'progskill', 'CSS', 90),
(5, 'progskill', 'MySQL', 70),
(6, 'progskill', 'JavaScript', 99),
(7, 'graphskill', 'AdobePhotoshop', 99),
(8, 'graphskill', 'AdobeIllustrator', 80),
(9, 'graphskill', 'AdobeIndesign', 70),
(10, 'graphskill', 'CorelDraw', 60),
(11, 'graphskill', '3DMax', 50);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `uid` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`uid`, `facebook`, `twitter`, `googleplus`, `instagram`) VALUES
(1, 'www.facebook.com', 'www.twitter', 'www.gmail.com', 'https://www.linkedin.com/'),
(8, 'www.fb.com', 'www.twittercom', 'www.googleplus.com', 'www.insta.com'),
(10, ' www.fb.com', ' www.fb.com', ' www.fb.com', ' www.fb.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`) VALUES
(1, 'nadiaeva@gmail.com', 'nadiaeva'),
(2, 'nadia@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(3, 'rokeya@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9'),
(4, 'eva@gmail.com', '$2y$10$JEMq0AXzJh4rEYMO7TpuouTAKWwTtxoBC8CJxmotlJkF6krHtoGve'),
(5, 'eva2@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(6, 'sumit@gmail.com', '4f6ff51f541e12e548fe01318f01d382'),
(7, 'rokeya@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(8, 'nadial@gmail.com', '62a5575cc3f63d9d98e085a395e60599'),
(9, 'arif@gmail.com', '902e86f96481554ee763f8e75f7d34fc'),
(10, 'nadira@gmail.com', 'a7a755458b2bbda537a10905b6e8808a'),
(11, 'nadiaeva@gmail.com', 'f45a9d96c60cf86ca0921277743bb731'),
(12, 'pinky@gmail.com', 'd60be65004e4e90d37ec683ba6dd4649'),
(13, 'nadiraeva@gmail.com', 'c6467b6752afa64f93b2570edfdd8486'),
(14, 'nadiaeva@gmail.com', 'f45a9d96c60cf86ca0921277743bb731'),
(15, 'nadiaeva@gmail.com', 'f45a9d96c60cf86ca0921277743bb731'),
(16, 'rokeyacse160210@gmail.com', 'f1c0909fe6d0370d49a4cd7fc9ebc554');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
