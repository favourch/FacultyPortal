-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2014 at 09:35 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` varchar(6) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `total_marks` int(2) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `question`, `total_marks`, `due_date`) VALUES
('week1', '1.What is JDK ?\r\n2.What is JRE ?', 44, '2014-02-25'),
('week10', NULL, NULL, NULL),
('week11', NULL, NULL, NULL),
('week12', NULL, NULL, NULL),
('week13', NULL, NULL, NULL),
('week14', NULL, NULL, NULL),
('week15', NULL, NULL, NULL),
('week2', 'Some other Value', 10, '2014-10-10'),
('week3', NULL, NULL, NULL),
('week4', NULL, NULL, NULL),
('week5', NULL, NULL, NULL),
('week6', NULL, NULL, NULL),
('week7', NULL, NULL, NULL),
('week8', NULL, NULL, NULL),
('week9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `sid` int(11) NOT NULL,
  `week1` tinyint(1) DEFAULT NULL,
  `week2` tinyint(1) DEFAULT NULL,
  `week3` tinyint(1) DEFAULT NULL,
  `week4` tinyint(1) DEFAULT NULL,
  `week5` tinyint(1) DEFAULT NULL,
  `week6` tinyint(1) DEFAULT NULL,
  `week7` tinyint(1) DEFAULT NULL,
  `week8` tinyint(1) DEFAULT NULL,
  `week9` tinyint(1) DEFAULT NULL,
  `week10` tinyint(1) DEFAULT NULL,
  `week11` tinyint(1) DEFAULT NULL,
  `week12` tinyint(1) DEFAULT NULL,
  `week13` tinyint(1) DEFAULT NULL,
  `week14` tinyint(1) DEFAULT NULL,
  `week15` tinyint(1) DEFAULT NULL,
  UNIQUE KEY `sid` (`sid`),
  UNIQUE KEY `sid_2` (`sid`),
  UNIQUE KEY `sid_3` (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sid`, `week1`, `week2`, `week3`, `week4`, `week5`, `week6`, `week7`, `week8`, `week9`, `week10`, `week11`, `week12`, `week13`, `week14`, `week15`) VALUES
(10101, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11111, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22222, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33333, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44444, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55555, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66666, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77777, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88888, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99999, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `handout`
--

CREATE TABLE IF NOT EXISTS `handout` (
  `h_week_id` varchar(6) NOT NULL,
  `material` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`h_week_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handout`
--

INSERT INTO `handout` (`h_week_id`, `material`) VALUES
('week1', 'Some material one check this website professorweb.com'),
('week10', ''),
('week11', ''),
('week12', ''),
('week13', ''),
('week14', ''),
('week15', ''),
('week2', 'http:\\professorWebsiteLink2.com\\mypage'),
('week3', ''),
('week4', ''),
('week5', ''),
('week6', ''),
('week7', ''),
('week8', ''),
('week9', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(5) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `photo`, `lname`, `fname`) VALUES
(10101, '../images/Kim.png', 'Wilson', 'Kim'),
(11111, '../images/Manisha.png', 'Vyas', 'Manisha'),
(22222, '../images/David.png', 'Gatta', 'David'),
(33333, '../images/Jennifer.png', 'Aniston', 'Jennifer'),
(44444, '../images/Mary.png', 'Chang', 'Mary'),
(55555, '../images/Mac.png', 'Donald', 'Mac'),
(66666, '../images/Dennis.png', 'Cooper', 'Deinnis'),
(77777, '../images/Kathy.png', 'Sitter', 'Kathy'),
(88888, '../images/Sam.png', 'Valantine', 'Sam'),
(99999, '../images/Rajan.png', 'Vyas', 'Rajan');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
