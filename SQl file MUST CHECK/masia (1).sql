-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2019 at 05:23 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masia`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

DROP TABLE IF EXISTS `applicant`;
CREATE TABLE IF NOT EXISTS `applicant` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `applicant_name` varchar(20) NOT NULL,
  `applicant_email` varchar(225) NOT NULL,
  `applicant_course` varchar(225) NOT NULL,
  `applicant_photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `applicant_name`, `applicant_email`, `applicant_course`, `applicant_photo`) VALUES
(4, 'zeeshan Haider', 'zeeshan.masia@masia.com', 'php', 'zeeshan.jpg'),
(6, 'Sarfaraz ali', 'sarfaraz.masia@masia.com', 'java', 'sarfaraz.jpg'),
(7, 'Mubdi Hussain Shah', 'mubdi.masia@masia.com', 'php', 'mubdi.jpg'),
(8, 'Javed iqbal', 'javaid.masia@gmail.com', 'java', '300713_404031816324551_107301040_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(20) NOT NULL,
  `fees` int(11) NOT NULL,
  `old_fee` int(11) NOT NULL,
  `duration` varchar(11) NOT NULL,
  `photo` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `fees`, `old_fee`, `duration`, `photo`) VALUES
(1, 'Laravel', 12000, 15000, '2 month', 'l.png'),
(2, 'PHP', 18000, 20000, '4 month', 'p.png'),
(3, 'C++', 10000, 12000, '2 months', 'c.png'),
(7, 'JAVA Programming', 18000, 20000, '3 month', 'j.png'),
(8, 'ASP.Net (C#)', 18000, 20000, '3 month', 'asp.png'),
(9, 'Android Develepment', 18000, 20000, '3 month', 'a.png'),
(10, 'Adobe Illustrator', 12000, 14000, '2 month', 'ai.png'),
(11, 'AutoCAD', 12000, 14000, '2 month', 'auto.png'),
(12, 'Microsoft Office', 8000, 10000, '2 month', 'micro.png'),
(13, 'Adobe Photoshop', 9000, 10000, '2 month', 'ap.png'),
(14, 'Corel Draw', 9000, 10000, '1 month', 'cd.png'),
(15, 'Graphics Designing', 18000, 20000, '2 month', 'g.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
