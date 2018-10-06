-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 08:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks_and_attendance`
--

CREATE TABLE `marks_and_attendance` (
  `subject_id` int(10) NOT NULL,
  `ut1_marks` int(4) NOT NULL,
  `ut2_marks` int(4) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_and_attendance`
--

INSERT INTO `marks_and_attendance` (`subject_id`, `ut1_marks`, `ut2_marks`, `roll_no`, `category`) VALUES
(10, 7, 30, '15IT1000', ''),
(20, 8, 30, '15IT1000', ''),
(30, 17, 25, '15IT1000', ''),
(40, 12, 4, '15IT1000', ''),
(50, 5, 27, '15IT1000', ''),
(10, 7, 14, '15IT1002', ''),
(20, 7, 30, '15IT1002', ''),
(30, 7, 17, '15IT1002', ''),
(40, 22, 29, '15IT1002', ''),
(50, 22, 22, '15IT1002', ''),
(10, 22, 22, '15IT1062', ''),
(20, 20, 20, '15IT1062', ''),
(30, 12, 30, '15IT1062', ''),
(40, 15, 16, '15IT1062', ''),
(50, 10, 20, '15IT1062', ''),
(10, 7, 18, '15IT2007', ''),
(20, 15, 12, '15IT2007', ''),
(30, 7, 15, '15IT2007', ''),
(40, 6, 4, '15IT2007', ''),
(50, 29, 28, '15IT2007', ''),
(10, 30, 30, '15IT1042', ''),
(20, 30, 30, '15IT1042', ''),
(40, 30, 30, '15IT1042', ''),
(50, 29, 28, '15IT1042', ''),
(10, 12, 27, '15IT1052', ''),
(20, 29, 25, '15IT1052', ''),
(30, 26, 28, '15IT1052', ''),
(40, 5, 15, '15IT1052', ''),
(50, 29, 29, '15IT1052', ''),
(10, 5, 15, '15IT1001', ''),
(20, 25, 25, '15IT1001', ''),
(30, 17, 7, '15IT1001', ''),
(40, 7, 17, '15IT1001', ''),
(50, 17, 7, '15IT1001', ''),
(10, 7, 17, '15IT0072', ''),
(20, 6, 15, '15IT0072', ''),
(30, 4, 24, '15IT0072', ''),
(40, 29, 30, '15IT0072', ''),
(50, 30, 30, '15IT0072', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `roll_no` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `class` varchar(4) NOT NULL,
  `division` varchar(2) NOT NULL,
  `s_phone` int(10) NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `p_phone` int(10) NOT NULL,
  `p_email` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`roll_no`, `name`, `class`, `division`, `s_phone`, `s_email`, `p_name`, `p_phone`, `p_email`, `address`) VALUES
('15IT1042', 'shivani bhalerao', 'be', 'a', 1234567890, 'abc@gmail.com', 'ghanashyam bhalerao', 987654321, 'parent@gmail.com', 'kalyan'),
('15IT1002', 'neel bhave', 'be', 'a', 1235479582, 'ghjg@gmail.com', 'ninad bhave', 654789321, 'bhgh@gmail.com', 'thane'),
('15IT2007', 'aniket dhagavkar', 'be', 'a', 568741258, 'jhjhjh@gmail.com', 'nitin dhagavkar', 547812965, 'hgjhj@gmail.com', 'thane'),
('15IT1052', 'shruthi borkar', 'be', 'b', 1234568790, 'njkjknkjn@gmail.com', 'radhakrishna borkar', 1234569870, 'jijijl@gmail.com', 'dombivali'),
('15IT1001', 'siya', 'be', 'b', 565656565, 'nbjhjhjkh@gmail.com', 'abc', 1234598752, 'kjkjkjkljl@gmail.com', 'nerul'),
('15IT0072', 'monis bana', 'be', 'b', 1235479583, 'jhjh@gmail.com', 'xyz', 231456987, 'hhjhjkhkh@gmail.com', 'matunga'),
('15IT1000', 'kalpesh', 'be', 'a', 1235479585, 'jshjh@gmail.com', 'pqr', 54564564, 'nbjhhjh@gmail.com', 'dombivali'),
('15IT1062', 'shruti anekar', 'be', 'b', 545456456, 'hjh@gmail.com', 'wxy', 454544444, 'hgjhkkj@gmail.com', 'lalbaug');

-- --------------------------------------------------------

--
-- Table structure for table `subject_data`
--

CREATE TABLE `subject_data` (
  `subject_id` int(10) NOT NULL,
  `subject_name` varchar(30) NOT NULL,
  `prof_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_data`
--

INSERT INTO `subject_data` (`subject_id`, `subject_name`, `prof_name`) VALUES
(10, 'wt', 'Nilesh Marathe'),
(20, 'is', 'jyoti joshi'),
(30, 'spm', 'nilam panse'),
(50, 'cc', 'sujata oak'),
(40, 'ip', 'swapnil shinde');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
