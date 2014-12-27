-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 07:05 AM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud01`
--

-- --------------------------------------------------------

--
-- Table structure for table `deploment`
--

CREATE TABLE IF NOT EXISTS `deploment` (
`id` int(10) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_business` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `timefrom` date NOT NULL,
  `timeto` date NOT NULL,
  `duration` int(11) NOT NULL,
  `responsibilities` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `deploment`
--

INSERT INTO `deploment` (`id`, `company_name`, `company_business`, `address`, `designation`, `department`, `timefrom`, `timeto`, `duration`, `responsibilities`) VALUES
(1, 'abc', 'xyz', 'werwe', 'sdfsf', 'sdfs', '2012-12-10', '2014-12-10', 2, 'sfsdfsfsdf'),
(2, 'abc', 'xyz', 'werwe', 'sdfsf', 'sdfs', '2012-12-10', '2014-12-10', 2, 'sfsdfsfsdf'),
(3, 'abc', 'xyz', 'werwe', 'sdfsf', 'sdfs', '2012-12-10', '2014-12-10', 2, 'sfsdfsfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE IF NOT EXISTS `personalinfo` (
`id` int(10) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`id`, `code`, `track`, `fullname`, `fathername`, `mothername`, `religion`, `dob`, `gender`, `nationality`, `nationalid`, `useremail`, `mobile`, `hometown`, `currentcity`, `sscroll`, `sscboard`, `sscyear`, `sscgroup`, `sscresult`, `hscroll`, `hscboard`, `hscyear`, `hscgroup`, `hscresult`, `honssubject`, `honsresult`, `bangla`, `english`) VALUES
(1, 826445, 'ITS', 'Kamal Hossain', 'Gafur Mridha', 'Hanufa Bibi', 'Muslim', '1989-11-20', 'Male', 'Bangladeshi', 2147483647, 'abc@gmail.com', '01731456879', 'Rajshahi', 'Dhaka', 102334, 'Dhaka', 2003, 'Commerce', 5, 104251, 'Rajshahi', 2008, 'Commerce', 5, 'EEE', 4, 'Medium', 'Low'),
(2, 823154, 'ITS', 'Shahlal Hossain', 'Nur Hossain', 'Sonavan Begum', 'Muslim', '1989-11-26', 'Male', 'Bangladeshi', 123456789, 'shahlal@abc.com', '01731479874', 'Rajshahi', 'Dhaka', 102332, 'Rajshahi', 2005, 'Science', 4.38, 4598746, 'Rajshahi', 2007, 'Science', 3.5, 'CSE', 3, 'High', 'Medium'),
(3, 823154, 'ITS', 'Shahlal Hossain', 'Nur Hossain', 'Sonavan Begum', 'Muslim', '1989-11-26', 'Male', 'Bangladeshi', 123456789, 'shahlal@abc.com', '01731479874', 'Rajshahi', 'Dhaka', 102332, 'Rajshahi', 2005, 'Science', 4.38, 4598746, 'Rajshahi', 2007, 'Science', 3.5, 'CSE', 3, 'High', 'Medium'),
(4, 823154, 'ITS', 'Shahlal Hossain', 'Nur Hossain', 'Sonavan Begum', 'Muslim', '1989-11-26', 'Male', 'Bangladeshi', 123456789, 'shahlal@abc.com', '01731479874', 'Rajshahi', 'Dhaka', 102332, 'Rajshahi', 2005, 'Science', 4.38, 4598746, 'Rajshahi', 2007, 'Science', 3.5, 'CSE', 3, 'High', 'Medium'),
(5, 823154, 'ITS', 'Shahlal Hossain', 'Nur Hossain', 'Sonavan Begum', 'Muslim', '1989-11-26', 'Male', 'Bangladeshi', 123456789, 'shahlal@abc.com', '01731479874', 'Rajshahi', 'Dhaka', 102332, 'Rajshahi', 2005, 'Science', 4.38, 4598746, 'Rajshahi', 2007, 'Science', 3.5, 'CSE', 3, 'High', 'Medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deploment`
--
ALTER TABLE `deploment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deploment`
--
ALTER TABLE `deploment`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
