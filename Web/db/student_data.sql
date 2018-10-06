-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 10:15 PM
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
  `address` varchar(60) NOT NULL,
  `p_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`roll_no`, `name`, `class`, `division`, `s_phone`, `s_email`, `p_name`, `p_phone`, `p_email`, `address`, `p_id`) VALUES
('15IT1042', 'shivani bhalerao', 'be', 'a', 1234567890, 'abc@gmail.com', 'ghanashyam bhalerao', 987654321, 'parent@gmail.com', 'kalyan', '1'),
('15IT1002', 'neel bhave', 'be', 'a', 1235479582, 'ghjg@gmail.com', 'ninad bhave', 654789321, 'bhgh@gmail.com', 'thane', '2'),
('15IT2007', 'aniket dhagavkar', 'be', 'a', 568741258, 'jhjhjh@gmail.com', 'nitin dhagavkar', 547812965, 'hgjhj@gmail.com', 'thane', '3'),
('15IT1052', 'shruthi borkar', 'be', 'b', 1234568790, 'njkjknkjn@gmail.com', 'radhakrishna borkar', 1234569870, 'jijijl@gmail.com', 'dombivali', '4'),
('15IT1001', 'siya', 'be', 'b', 565656565, 'nbjhjhjkh@gmail.com', 'abc', 1234598752, 'kjkjkjkljl@gmail.com', 'nerul', '5'),
('15IT0072', 'monis bana', 'be', 'b', 1235479583, 'jhjh@gmail.com', 'xyz', 231456987, 'hhjhjkhkh@gmail.com', 'matunga', '6'),
('15IT1000', 'kalpesh', 'be', 'a', 1235479585, 'jshjh@gmail.com', 'pqr', 54564564, 'nbjhhjh@gmail.com', 'dombivali', '7'),
('15IT1062', 'shruti anekar', 'be', 'b', 545456456, 'hjh@gmail.com', 'wxy', 454544444, 'hgjhkkj@gmail.com', 'lalbaug', '8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
