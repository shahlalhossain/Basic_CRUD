-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2014 at 05:44 PM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl2nd`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE IF NOT EXISTS `trainee` (
  `code` int(10) NOT NULL,
  `track` varchar(5) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `fathername` varchar(40) NOT NULL,
  `mothername` varchar(40) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `nationalid` int(20) NOT NULL,
  `useremail` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `hometown` varchar(20) NOT NULL,
  `currentcity` varchar(20) NOT NULL,
  `sscroll` int(10) NOT NULL,
  `sscboard` varchar(15) NOT NULL,
  `sscyear` int(5) NOT NULL,
  `sscgroup` varchar(10) NOT NULL,
  `sscresult` float NOT NULL,
  `hscroll` int(10) NOT NULL,
  `hscboard` varchar(15) NOT NULL,
  `hscyear` int(5) NOT NULL,
  `hscgroup` varchar(10) NOT NULL,
  `hscresult` float NOT NULL,
  `honssubject` varchar(50) NOT NULL,
  `honsresult` float NOT NULL,
  `bangla` varchar(10) NOT NULL,
  `english` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`code`, `track`, `fullname`, `fathername`, `mothername`, `religion`, `dob`, `gender`, `nationality`, `nationalid`, `useremail`, `mobile`, `hometown`, `currentcity`, `sscroll`, `sscboard`, `sscyear`, `sscgroup`, `sscresult`, `hscroll`, `hscboard`, `hscyear`, `hscgroup`, `hscresult`, `honssubject`, `honsresult`, `bangla`, `english`) VALUES
(8264, 'ITES', 'Kamal Hossain', 'Gafur Mridha', 'Hanufa Bibi', 'Muslim', '1989-11-20', 'Male', 'Bangladeshi', 2147483647, 'abc@gmail.com', '01731456879', 'Rajshahi', 'Dhaka', 102334, 'Rajshahi', 2006, 'Science', 5, 104251, 'Rajshahi', 2008, 'Science', 5, 'EEE', 4, 'High', 'High');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
