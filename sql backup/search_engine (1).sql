-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2015 at 05:14 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `search_engine`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_course`
--

CREATE TABLE IF NOT EXISTS `college_course` (
  `id` int(15) NOT NULL,
  `college_courses` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_course`
--

INSERT INTO `college_course` (`id`, `college_courses`) VALUES
(1, 'BTECH-CS'),
(2, 'BTECH-ME'),
(3, 'BTECH-AERONAUTICAL'),
(4, 'HISTORY'),
(5, 'MUSIC');

-- --------------------------------------------------------

--
-- Table structure for table `college_course_selection`
--

CREATE TABLE IF NOT EXISTS `college_course_selection` (
  `id` int(15) NOT NULL,
  `course_name` varchar(150) NOT NULL,
  `course_category` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_course_selection`
--

INSERT INTO `college_course_selection` (`id`, `course_name`, `course_category`) VALUES
(2, 'BTECH-ME', 'ENGINEERING'),
(4, 'M.B.A-Finance', 'MANAGEMENT & BUSSINESS'),
(5, 'MBA-HR', 'MANAGEMENT & BUSSINESS'),
(6, 'BTECH-CS', 'ENGINEERING'),
(9, 'BTECH-EC', 'ENGINEERING'),
(10, 'BTECH-CIVIL', 'ENGINEERING');

-- --------------------------------------------------------

--
-- Table structure for table `college_detail`
--

CREATE TABLE IF NOT EXISTS `college_detail` (
  `id` int(15) NOT NULL,
  `college_code` int(10) NOT NULL,
  `college_name` varchar(150) NOT NULL,
  `college_rank` int(200) NOT NULL,
  `college_type` varchar(100) NOT NULL,
  `college_est` int(15) NOT NULL,
  `college_courses` varchar(100) NOT NULL,
  `college_faculty` int(20) NOT NULL,
  `college_batch` int(15) NOT NULL,
  `college_pcompany` varchar(40) NOT NULL,
  `college_approved` varchar(40) NOT NULL,
  `college_admode` varchar(20) NOT NULL,
  `college_hostel` varchar(20) NOT NULL,
  `college_hosac` varchar(20) NOT NULL,
  `college_library` varchar(20) NOT NULL,
  `college_address` varchar(50) NOT NULL,
  `college_city` varchar(150) NOT NULL,
  `college_state` varchar(150) NOT NULL,
  `college_pincode` int(6) NOT NULL,
  `college_rlystn` int(4) NOT NULL,
  `college_busstn` int(6) NOT NULL,
  `college_website` varchar(50) NOT NULL,
  `college_contact` int(10) NOT NULL,
  `college_email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `approved` int(2) NOT NULL DEFAULT '0',
  `deleted` int(2) NOT NULL DEFAULT '0',
  `deleted_by` varchar(250) NOT NULL,
  `total_rate` int(250) NOT NULL DEFAULT '0',
  `total_count` int(250) NOT NULL DEFAULT '0',
  `ratings` int(250) NOT NULL DEFAULT '0',
  `visited` int(100) NOT NULL DEFAULT '0',
  `meta` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_detail`
--

INSERT INTO `college_detail` (`id`, `college_code`, `college_name`, `college_rank`, `college_type`, `college_est`, `college_courses`, `college_faculty`, `college_batch`, `college_pcompany`, `college_approved`, `college_admode`, `college_hostel`, `college_hosac`, `college_library`, `college_address`, `college_city`, `college_state`, `college_pincode`, `college_rlystn`, `college_busstn`, `college_website`, `college_contact`, `college_email`, `password`, `approved`, `deleted`, `deleted_by`, `total_rate`, `total_count`, `ratings`, `visited`, `meta`) VALUES
(1, 1, 'Anand Engineering College', 5, 'ENGINEERING', 0, 'BTECH-ME', 0, 0, '45', 'GOOGLE\r\nINFOSYS\r\nTCS\r\nBHEL\r\nSAIL\r\nHCL\r\nH', '', 'yes', 'yes', 'yes', 'Anand Engineering College\r\nAgra-Delhi Highway (NH2', '', '', 282007, 12, 15, 'www.aecagra.org', 2147483647, 'admissions@sgei.org', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(43, 4, 'National Institute Of Technology', 0, 'Engineering', 0, '4', 14, 14, '36', 'GOogle\r\nTCS', '', 'yes', 'yes', 'yes', 'Off Warangal-Hyderabad Highway, National Institute', '', '', 506004, 20, 14, 'www.nitw.ac.in', 870, 'registrar@nitw.ac.in', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(44, 0, '', 0, 'Arts Science', 0, '', 0, 0, '', ' ', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(45, 4, 'name', 0, 'Engineering', 1234, '200', 0, 0, '23', ' wqqq\r\nff', '', 'yes', 'yes', 'no', ' ff', '', '', 32222, 233, 433, '223', 122333, 'ssddd', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(46, 26, 'name3', 0, 'Engineering', 1902, 'B.TECH(C.S),B.TECH(M', 345, 12, ' google\r\nbhel', 'aicte', '', 'no', 'no', 'no', ' fff', '', '', 0, 12, 34, '32swdf', 2334, 'swrwr', '', 1, 0, '', 0, 0, 0, 16, ''),
(47, 26, 'name3', 0, 'Engineering', 1902, 'B.TECH(C.S),B.TECH(M.E),B.TECH(E.C)', 345, 12, ' google\r\nbhel', 'aicte', '', 'no', 'no', 'no', ' fff', '', '', 0, 12, 34, '32swdf', 2334, 'swrwr', '', 1, 0, '', 0, 0, 0, 16, ''),
(48, 5, 'name5', 0, 'Arts Science', 1995, 'B.TECH(C.S),B.TECH(M.E),B.TECH(E.C)', 34, 18, ' google\r\nbhel', 'aicte', 'ONLINE,OFFLINE', 'no', 'no', 'no', ' fff', '', '', 0, 12, 34, '32swdf', 2334, 'swrwr', '', 1, 0, '', 0, 0, 0, 16, ''),
(49, 0, '', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', '', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(61, 12, '', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', 'ds', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(62, 12, '', 0, 'ENGINEERING', 1980, '', 22, 0, ' ', '22', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(63, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '21', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(64, 12, '', 0, 'ENGINEERING', 1980, '', 21, 0, ' ', '21', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(65, 11, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(66, 32, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '21', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(67, 32, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '21', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(68, 22, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(69, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(70, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(71, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(72, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(73, 12, '', 0, 'ENGINEERING', 1980, '', 21, 0, ' ', '21', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(74, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(75, 43, '', 0, 'ENGINEERING', 1980, '', 43, 0, ' ', '32', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(76, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(77, 12, '', 0, 'ENGINEERING', 1980, '', 34, 0, ' ', '43', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(78, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(79, 12, '', 0, 'ENGINEERING', 1980, '', 32, 0, ' ', '23', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(80, 12, '', 0, 'ENGINEERING', 1980, '', 32, 0, ' ', '23', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(81, 12, '', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', '23', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(82, 12, '', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', '23', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(83, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(84, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(85, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(86, 32, '', 0, 'ENGINEERING', 1980, '', 43, 0, ' ', '23', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, 'shanky', 0, 0, 0, 16, ''),
(87, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(88, 21, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(89, 123, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(90, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(91, 12, '', 0, 'ENGINEERING', 1980, '', 12, 0, ' ', '12', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(92, 0, '', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', '', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(93, 0, '', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', '', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(94, 0, '', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', '', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(95, 0, '7', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', '', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(96, 0, '712', 0, 'ENGINEERING', 1980, '', 0, 0, ' ', '', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(98, 99, 'ad', 98, 'ENGINEERING', 1980, 'BTECH (C.S)', 322, 34, ' asdc', 'UPTU', 'ONLINE,OFFLINE', 'yes', 'yes', 'yes', ' asc', '', '', 121212, 12, 12, 'adsadsa', 2147483647, 'admissions@sgei.org', '', 1, 0, '', 0, 0, 0, 16, ''),
(99, 12, 'helo', 12, 'ENGINEERING', 1980, '', 23, 0, ' ', 'w', '', '', '', '', ' ', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(100, 10, 'abeeeesss', 12, 'ENGINEERING', 1994, 'BTECH (C.S)', 233, 23, ' wsfd', 'UPTU', 'ONLINE', 'yes', 'yes', 'yes', ' wsf', '', '', 121211, 0, 0, 'ASD', 2147483647, 'sagarraghav@hotmail.com', '', 1, 0, '', 0, 0, 0, 16, ''),
(101, 10, 'abeeeesss', 12, 'ENGINEERING', 1994, 'BTECH (C.S)', 233, 23, ' wsfd', 'UPTU', 'ONLINE', 'yes', 'yes', 'yes', ' wsf', '', '', 121211, 0, 0, 'ASD', 2147483647, 'sagarraghav@hotmail.com', '', 1, 0, '', 0, 0, 0, 16, ''),
(102, 10, 'abeeeesss', 12, 'ENGINEERING', 1994, 'BTECH (C.S)', 233, 23, ' wsfd', 'UPTU', 'ONLINE', 'yes', 'yes', 'yes', ' wsf', '', '', 121211, 0, 0, 'ASD', 2147483647, 'sagarraghav@hotmail.com', '', 1, 0, '', 0, 0, 0, 16, ''),
(103, 111, 'new1', 22, 'ENGINEERING', 1980, 'BTECH (C.S)', 1212, 33, ' sc', 'aaa', 'ONLINE,OFFLINE', 'no', 'no', 'no', ' ddds', 'noida', 'Uttar Pradesh', 201301, 12, 12, 'sdsd', 1222222222, 'sagarraghav@hotmail.com', '', 1, 0, '', 0, 0, 0, 16, ''),
(124, 0, '', 0, '', 0, 'BTECH (C.S), BTECH(M.E)', 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, 0, '', 0, '', '', 1, 0, '', 0, 0, 0, 16, ''),
(125, 111, '123', 12, 'ENGINEERING', 1980, 'BTECH(AERONAUTICAL), BTECH (M.E)', 1222, 23, ' asd', 'aaaa', 'ONLINE,OFFLINE', '', '0', 'yes', ' ade', 'ads', 'ads', 203001, 0, 0, 'asd', 2147483647, 'shanky.rags@gmail.com', 'MYC-124-111', 1, 0, '', 0, 0, 0, 16, ''),
(126, 198, 'M.I.T', 3, 'ENGINEERING,MANAGEMENT & BUSINESS,MEDICAL & HEALTH CARE,ARCHITECTURE ,COMMERCE,SCIENCE', 1980, 'BTECH-ME,BTECH-CIVIL BTECH(AERONAUTICAL), M.B.A(Finance), M.B.A(H.R), BTECH (C.S)', 252, 252, ' google\r\ntcs\r\ninfosys', 'UPTU', 'ONLINE', 'NO', 'YES', 'yes', ' bulanshahr', 'NOIDA', 'Uttar Pradesh', 203001, 12, 12, 'www.aecagra.org', 89, 'helo@gmail.com', 'shanky', 1, 0, 'shanky', 19, 5, 4, 59, ''),
(135, 122, 'TOP', 11, 'selected', 1998, 'BTECH (M.E), BTECH(AERONAUTICAL), BTECH (C.S)', 312, 312, '			 				\r\n	adsasdas		 			', 'mmtu', 'ONLINE,OFFLINE', 'YES', 'YES', 'no', 'House No.100, Durgapuram, Panni  Nagar, Near Gul G', 'bsr', 'up', 203001, 12, 12, 'aasssaa', 122333, 'fake2@gmail.com', 'MYC-126-122', 1, 0, '', 0, 0, 0, 16, ''),
(136, 12, 'Top2', 21, 'MASS COM & MEDIA', 1997, 'M.B.A(H.R)', 1222, 23, '			 				\r\n	gggg		 			', 'yrr', 'ONLINE,OFFLINE', '', '0', 'yes', ' xdgfvd', 'weew', 'sas', 203001, 1222, 1212, 'wqwq', 2147483647, 'new@gmail.com', 'MYC-135-12', 1, 0, '', 0, 0, 0, 16, ''),
(137, 12, 'Top2', 21, 'MASS COM & MEDIA', 1997, 'M.B.A(H.R)', 1222, 23, '			 				\r\n	gggg		 			', 'yrr', 'ONLINE,OFFLINE', '', '0', 'yes', ' xdgfvd', 'weew', 'sas', 203001, 1222, 1212, 'wqwq', 2147483647, 'new@gmail.com', 'MYC-136-12', 1, 0, '', 0, 0, 0, 16, ''),
(139, 12, 'asas', 12, 'ENGINEERING,ARCHITECTURE ,COMMERCE,SCIENCE,ARTS & HUMANITIES,PHARMACY,LAW,COMPUTERS', 1980, 'BTECH (M.E), BTECH(AERONAUTICAL)', 1222, 1222, '	sdfsdsd		 				\r\n			 			', 'asas', 'ONLINE,OFFLINE', 'YES', 'YES', 'yes', ' qwqw', 'fdf', 'qwqw', 203001, 12, 1212, 'sasas', 2147483647, 'reeewwww', 'MYC-137-12', 1, 0, '', 0, 0, 0, 16, ''),
(140, 122, 'asas', 11, 'ENGINEERING', 1980, 'BTECH (M.E), M.B.A(Finance)', 1222, 12, '			 				\r\n	AXA		 			', 'aS', 'ONLINE,OFFLINE', '', '0', 'yes', ' AXDAX', 'QAAS', 'AXSA', 121211, 1222, 1212, '12', 1234567890, 'WQQQ', 'MYC-139-122', 0, 1, 'shanky', 0, 0, 0, 16, ''),
(141, 0, 'qww', 12, 'ENGINEERING', 1980, '', 0, 12, '			 				\r\n			 			', '', '', 'yes', 'yes', 'yes', ' ', '', '', 0, 0, 0, '', 0, '', 'MYC-140-', 1, 0, '', 0, 0, 0, 16, ''),
(142, 122, 'saas', 12, 'ENGINEERING', 1996, 'BTECH (M.E), BTECH(AERONAUTICAL)', 1222, 1212, '			 				\r\naeqe			 			', 'eww', 'ONLINE,OFFLINE', '', '0', 'yes', ' awraw', '1212', 'saa', 121211, 0, 122, 'wqqq', 2147483647, 'qwwww', 'MYC-141-122', 0, 0, '', 0, 0, 0, 16, ''),
(143, 122, 'saaa', 43, 'ENGINEERING,MANAGEMENT & BUSINESS', 1980, 'BTECH (M.E), BTECH(AERONAUTICAL), BTECH (C.S)', 211, 544, 'ugiu			 				\r\n			 			', 'uopp', 'ONLINE,OFFLINE', '', '0', 'yes', 'gvhjv ', '43', 'dfgxg', 203001, 67, 8, 'b', 0, 'saaaaz', 'MYC-142-122', 0, 0, '', 0, 0, 0, 16, ''),
(144, 32, 'fgfxg', 54, 'ENGINEERING', 1999, 'BTECH (M.E), BTECH(AERONAUTICAL)', 78, 555, '			 				\r\n,kn,l			 			', 'njkjn', 'ONLINE', '', '0', 'yes', ' lklk', ',jbnkj', ',lknlkn', 123456, 7, 8, 'k', 7, 'gf', 'MYC-143-32', 0, 0, '', 0, 0, 0, 16, ''),
(145, 23, 'sdf', 65, 'ENGINEERING,MANAGEMENT & BUSINESS,COMMERCE', 1998, 'BTECH(AERONAUTICAL)', 66, 66, '			 				\r\n	lkml		 			', 'lknl', 'OFFLINE', 'yes', 'yes', 'yes', ' lknl', 'lkn', '.,m ', 32222, 98, 99, 'ioui', 5555, 'bn', 'MYC-144-23', 0, 0, '', 0, 0, 0, 16, ''),
(146, 1212, 'scf', 234, '', 1980, '', 0, 323, '			 				\r\n			 			', '', '', 'no', '0', 'no', ' ', '', '', 0, 0, 0, '', 0, '', 'MYC-145-1212', 1, 0, '', 0, 0, 0, 16, ''),
(147, 1212, '123', 12, '', 1980, '', 13, 23, '			 				\r\n			 			', '', '', 'yes', 'yes', 'yes', ' ', '', '', 0, 0, 0, '', 0, '', 'MYC-146-1212', 1, 0, '', 0, 0, 0, 16, ''),
(148, 0, 'as', 21, '', 1980, '', 23, 34, '			 				\r\n			 			', '', '', 'no', '0', 'yes', ' ', '', '', 0, 0, 0, '', 0, '', 'MYC-147-', 1, 0, '', 0, 0, 0, 16, ''),
(149, 12, 'wq', 12, '', 1980, '', 6655, 87, '			 				\r\n			 			', '', '', 'yes', 'yes', '', ' ', '', '', 0, 0, 0, '', 0, '', 'MYC-148-12', 0, 1, 'shanky', 0, 0, 0, 16, ''),
(150, 141, 'TechAge Academy', 12, 'ENGINEERING,MANAGEMENT & BUSINESS', 1980, 'BTECH (M.E), BTECH(AERONAUTICAL) BTECH-CS', 123, 12, '			 				\r\n	adad		 			', 'uptu', 'ONLINE,OFFLINE', '', '0', 'yes', ' ada', 'qww', 'wde', 203001, 0, 0, 'asd', 2147483647, 'wer', 'MYC-149-141', 0, 0, '', 0, 0, 0, 16, ''),
(151, 0, '12', 12, '', 1980, 'BTECH (M.E), BTECH(AERONAUTICAL)', 0, 12, '			 				\r\n			 			', '', '', '', '0', '', ' ', '', '', 0, 0, 0, '', 0, '', 'MYC-150-', 0, 1, 'shanky', 0, 0, 0, 16, ''),
(152, 32, 'technical', 23, 'ENGINEERING,MANAGEMENT & BUSINESS', 1997, 'BTECH-ME, BTECH-AERONAUTICAL', 233, 87, 'The BEst College		 			', 'google', 'ONLINE,OFFLINE', '', '0', 'yes', 'A-50, link road', 'delhi', 'uttar Pradesh', 203001, 87, 8, 'www.ac.jm', 2147483647, 'eww', 'MYC-151-32', 0, 0, '', 0, 0, 0, 16, ''),
(153, 23, 'technical2', 12, 'ENGINEERING,MANAGEMENT & BUSINESS', 1997, 'BTECH-ME, BTECH-AERONAUTICAL', 32, 78, '			 				\r\nj;lm			 			', 'google', 'ONLINE,OFFLINE', '', '0', 'yes', ' A-45 ,link road', 'delhi', 'uttar Pradesh', 203001, 76, 89, 'www.ac.jm', 2147483647, 'qwza', 'MYC-152-23', 1, 0, '', 0, 0, 0, 18, 'the best institute	 			'),
(154, 54, 'nameww', 54, 'ENGINEERING,MANAGEMENT & BUSINESS', 1980, 'BTECH-ME, BTECH-AERONAUTICAL', 43, 322, '		google	 				\r\n			 			', 'upt', 'ONLINE,OFFLINE', '', '0', 'yes', 'helo ', 'noida', 'up', 203001, 65, 89, 'www.ac.jm', 2147483647, 'dss', 'MYC-153-54', 1, 0, '', 0, 0, 0, 17, 'godd college	 			,54,nameww,upt,ENGINEERING,MANAGEMENT & BUSINESS,BTECH-ME, BTECH-AERONAUTICAL,noida,up'),
(155, 199, 'jss', 21, 'ENGINEERING', 1980, 'BTECH-CS, BTECH-EC, BTECH-CIVIL', 222, 23, 'google			 				\r\n			 			', 'UPTU', 'OFFLINE', '', '0', 'yes', ' noida', 'noida', 'uttar Pradesh', 203001, 12, 22, 'www.ac.jm', 2147483647, 'saaa', 'MYC-154-199', 1, 0, '', 0, 0, 0, 17, 'best college			 			,199,jss,UPTU,ENGINEERING,BTECH-CS, BTECH-EC, BTECH-CIVIL,noida,uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `college_feedback`
--

CREATE TABLE IF NOT EXISTS `college_feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `ratings` int(200) NOT NULL,
  `college_email` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_feedback`
--

INSERT INTO `college_feedback` (`id`, `name`, `user_email`, `ratings`, `college_email`) VALUES
(7, 'shashank', 'new@mail.com', 3, 'helo@gmail.com'),
(8, 'shashank', 'shanky.rags@gmail.com', 5, 'helo@gmail.com'),
(9, 'shashank', 'shanky.rags@gmail.com', 5, 'helo@gmail.com'),
(10, 'shashank', 'shanky.rags@gmail.com', 2, 'helo@gmail.com'),
(11, 'shashank', 'shanky.rags@gmail.com', 2, 'helo@gmail.com'),
(12, 'shashank', 'shanky.rags@gmail.com', 2, 'helo@gmail.com'),
(13, 'shashank', 'shanky.rags@gmail.com', 2, 'helo@gmail.com'),
(14, 'ad', 'saa', 5, 'helo@gmail.com'),
(15, '', '', 5, 'helo@gmail.com'),
(16, 'j', 'sam', 5, 'helo@gmail.com'),
(17, 'j', 'sam2', 5, 'helo@gmail.com'),
(18, 'shashank', '12', 5, 'helo@gmail.com'),
(19, 'shashank', '123', 4, 'helo@gmail.com'),
(20, 'shashank', '123', 5, 'helo@gmail.com'),
(21, 'shashank', '123', 5, 'helo@gmail.com'),
(22, 'shashank', '123', 5, 'helo@gmail.com'),
(23, 'shashank', '123', 5, 'helo@gmail.com'),
(24, 'shashank', '123', 5, 'helo@gmail.com'),
(25, 'shashank', '123', 5, 'helo@gmail.com'),
(26, 'shashank', '123', 5, 'helo@gmail.com'),
(27, 'shashank', 'WQ', 3, 'helo@gmail.com'),
(28, 'shashank', 'WQ', 1, 'helo@gmail.com'),
(29, 'shashank', 'WQ', 1, 'helo@gmail.com'),
(30, 'shashank', 'WQ', 1, 'helo@gmail.com'),
(31, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(32, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(33, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(34, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(35, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(36, 'shashank', 'WQ', 3, 'helo@gmail.com'),
(37, 'shashank', 'WQ', 1, 'helo@gmail.com'),
(38, 'shashank', 'WQ', 1, 'helo@gmail.com'),
(39, 'shashank', 'WQ', 3, 'helo@gmail.com'),
(40, 'shashank', 'WQ', 3, 'helo@gmail.com'),
(41, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(42, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(43, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(44, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(45, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(46, 'shashank', 'WQ', 5, 'helo@gmail.com'),
(47, '', '', 4, 'helo@gmail.com'),
(48, '', '', 2, 'helo@gmail.com'),
(49, '', '', 5, 'helo@gmail.com'),
(50, '', '', 5, 'helo@gmail.com'),
(51, '', '', 5, 'helo@gmail.com'),
(52, '', '', 5, 'helo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `college_matter`
--

CREATE TABLE IF NOT EXISTS `college_matter` (
  `college_overview` varchar(2000) NOT NULL,
  `college_logo` varchar(250) NOT NULL,
  `college_image_1` varchar(2000) NOT NULL,
  `college_image_2` varchar(2000) NOT NULL,
  `college_image_3` varchar(2000) NOT NULL,
  `college_image_4` varchar(2000) NOT NULL,
  `college_image_5` varchar(2000) NOT NULL,
  `college_video_title` varchar(500) NOT NULL,
  `college_video_url` varchar(1000) NOT NULL,
  `college_email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_matter`
--

INSERT INTO `college_matter` (`college_overview`, `college_logo`, `college_image_1`, `college_image_2`, `college_image_3`, `college_image_4`, `college_image_5`, `college_video_title`, `college_video_url`, `college_email`) VALUES
('overview3', '434_10340_0.jpg', '390_8851_1.jpg', '2_887_2.jpg', '538_Australian_Bear.jpeg', '', '2_875_2.jpg', 'jh,', 'http://www.s.com', 'helo@gmail.com'),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', 'Resource id #8'),
('', '', '', '', '', '', '', '', '', '70'),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', 'sagarraghav@hotmail.com'),
('', '', '', '', '', '', '', '', '', 'fake2@gmail.com'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'helo@gmail.com'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'helo@gmail.com'),
('', '', '', '', '', '', '', '', '', 'ssddd'),
('', '', '', '', '', '', '', '', '', 'helo@gmail.com'),
('', '', '', '', '', '', '', '', '', 'new@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `college_types`
--

CREATE TABLE IF NOT EXISTS `college_types` (
  `id` int(15) NOT NULL,
  `college_type` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_types`
--

INSERT INTO `college_types` (`id`, `college_type`) VALUES
(4, 'MANAGEMENT & BUSINESS'),
(5, 'MEDICAL & HEALTH CARE'),
(6, 'ARCHITECTURE '),
(8, 'SCIENCE'),
(9, 'ARTS & HUMANITIES'),
(14, 'HOTEL MANAGEMENT,AVIATION & TRAVEL'),
(20, 'LAW'),
(21, 'LANGUAGES AND TEACHING'),
(23, 'PHARMACY'),
(27, 'ENGINEERING'),
(28, 'COMMERCE');

-- --------------------------------------------------------

--
-- Table structure for table `course_name`
--

CREATE TABLE IF NOT EXISTS `course_name` (
  `course_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useful_links`
--

CREATE TABLE IF NOT EXISTS `useful_links` (
  `id` int(100) NOT NULL,
  `links` varchar(250) NOT NULL,
  `date` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useful_links`
--

INSERT INTO `useful_links` (`id`, `links`, `date`) VALUES
(2, 'http://www.canadacollege.edu/', 0),
(3, 'https://www.stanford.edu/', 0),
(4, 'http://www.buffalo.edu/', 0),
(5, 'https://australiancollege.edu.au/', 0),
(6, 'http://www.canadacollege.edu/', 0),
(7, 'http://www.buffalo.edu/', 0),
(8, 'https://australiancollege.edu.au/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`) VALUES
(1, 'shanky', 'mychoiceadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_course`
--
ALTER TABLE `college_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_course_selection`
--
ALTER TABLE `college_course_selection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_detail`
--
ALTER TABLE `college_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_feedback`
--
ALTER TABLE `college_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_types`
--
ALTER TABLE `college_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useful_links`
--
ALTER TABLE `useful_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_course`
--
ALTER TABLE `college_course`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `college_course_selection`
--
ALTER TABLE `college_course_selection`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `college_detail`
--
ALTER TABLE `college_detail`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `college_feedback`
--
ALTER TABLE `college_feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `college_types`
--
ALTER TABLE `college_types`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `useful_links`
--
ALTER TABLE `useful_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
