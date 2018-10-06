-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 02:10 PM
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
  `ut1_marks` int(4) NOT NULL DEFAULT '0',
  `ut2_marks` int(4) NOT NULL DEFAULT '0',
  `roll_no` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_and_attendance`
--

INSERT INTO `marks_and_attendance` (`subject_id`, `ut1_marks`, `ut2_marks`, `roll_no`, `category`, `total`) VALUES
(10, 7, 30, '15IT1000', '', 37),
(20, 8, 30, '15IT1000', '', 38),
(30, 17, 25, '15IT1000', '', 42),
(40, 12, 4, '15IT1000', '', 16),
(50, 5, 27, '15IT1000', '', 32),
(10, 25, 14, '15IT1002', '', 21),
(20, 25, 30, '15IT1002', '', 37),
(30, 25, 17, '15IT1002', '', 24),
(40, 25, 29, '15IT1002', '', 51),
(50, 25, 22, '15IT1002', '', 44),
(10, 22, 22, '15IT1062', '', 44),
(20, 20, 20, '15IT1062', '', 40),
(30, 12, 30, '15IT1062', '', 42),
(40, 15, 16, '15IT1062', '', 31),
(50, 10, 20, '15IT1062', '', 30),
(10, 7, 18, '15IT2007', '', 25),
(20, 15, 12, '15IT2007', '', 27),
(30, 7, 15, '15IT2007', '', 22),
(40, 6, 4, '15IT2007', '', 10),
(50, 29, 28, '15IT2007', '', 57),
(10, 30, 30, '15IT1042', '', 60),
(20, 30, 30, '15IT1042', '', 60),
(40, 30, 30, '15IT1042', '', 60),
(50, 29, 28, '15IT1042', '', 57),
(10, 12, 27, '15IT1052', '', 39),
(20, 29, 25, '15IT1052', '', 54),
(30, 26, 28, '15IT1052', '', 54),
(40, 5, 15, '15IT1052', '', 20),
(50, 29, 29, '15IT1052', '', 58),
(10, 5, 15, '15IT1001', '', 20),
(20, 25, 25, '15IT1001', '', 50),
(30, 17, 7, '15IT1001', '', 24),
(40, 7, 17, '15IT1001', '', 24),
(50, 17, 7, '15IT1001', '', 24),
(10, 7, 17, '15IT0072', '', 24),
(20, 6, 15, '15IT0072', '', 21),
(30, 4, 24, '15IT0072', '', 28),
(40, 29, 30, '15IT0072', '', 59),
(50, 30, 30, '15IT0072', '', 60);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
