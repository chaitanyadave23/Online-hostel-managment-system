-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 07:00 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocated`
--

CREATE TABLE `allocated` (
  `Reg_no` varchar(20) DEFAULT NULL,
  `blockname_roomno` varchar(20) DEFAULT NULL,
  `mess_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocated`
--

INSERT INTO `allocated` (`Reg_no`, `blockname_roomno`, `mess_id`) VALUES
('17BCE0387', 'Q-761', 'DR1'),
('17BCE0529', 'L-101', 'PR2');

-- --------------------------------------------------------

--
-- Table structure for table `block_room_details`
--

CREATE TABLE `block_room_details` (
  `blockname_roomno` varchar(20) NOT NULL,
  `roomtype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block_room_details`
--

INSERT INTO `block_room_details` (`blockname_roomno`, `roomtype`) VALUES
('D-448', '1-bed AC'),
('L-101', '2-bed AC'),
('N-519', '2-bed AC'),
('Q-646', '2-bed AC'),
('L-442', '2-bed NON-AC'),
('N-110', '3-bed AC'),
('Q-262', '3-bed AC'),
('Q-761', '3-bed AC'),
('L-223', '3-bed NON-AC'),
('Q-447', '4-bed AC'),
('L-G06', '4-bed NON-AC'),
('L-801', '6-bed AC'),
('N-223', '6-bed AC'),
('N1012', '6-bed AC'),
('Q-623', '6-bed AC'),
('N-612', '6-bed NON-AC');

-- --------------------------------------------------------

--
-- Table structure for table `fess_details`
--

CREATE TABLE `fess_details` (
  `roomtype` varchar(20) NOT NULL,
  `fees` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fess_details`
--

INSERT INTO `fess_details` (`roomtype`, `fees`) VALUES
('1-bed AC', 84000),
('1-bed NON-AC', 42000),
('2-bed AC', 60000),
('2-bed NON-AC', 30000),
('3-bed AC', 52000),
('3-bed NON-AC', 29000),
('4-bed AC', 45000),
('4-bed NON-AC', 25000),
('6-bed AC', 35000),
('6-bed NON-AC', 21000);

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `mess_id` varchar(20) NOT NULL,
  `caterer` varchar(50) DEFAULT NULL,
  `messtype` varchar(50) DEFAULT NULL,
  `fess` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`mess_id`, `caterer`, `messtype`, `fess`) VALUES
('DR1', 'darling special', 'special mess', 60000),
('DR2', 'darling south', 'south indian mess', 48000),
('PR1', 'pr veg', 'veg mess', 50000),
('PR2', 'pr spl', 'special mess', 60000),
('SRC 1002', 'Rajarajeshwari', 'special', 60000),
('SRC2', 'foodmall', 'paid mess', 60000),
('ZEN3', 'foodpark', 'paid mess', 60000),
('ZEN5', 'foodcy', 'paid mess', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `student_credentials`
--

CREATE TABLE `student_credentials` (
  `regno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_credentials`
--

INSERT INTO `student_credentials` (`regno`, `password`) VALUES
('', ''),
('17BCE0387', 'chaitanya'),
('17BCE2295', 'nilesh');

-- --------------------------------------------------------

--
-- Table structure for table `student_personal_details`
--

CREATE TABLE `student_personal_details` (
  `Reg_no` varchar(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Sex` varchar(10) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Bloodgrp` char(5) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_personal_details`
--

INSERT INTO `student_personal_details` (`Reg_no`, `Name`, `Sex`, `Branch`, `email_id`, `Address`, `Bloodgrp`, `password`) VALUES
('17BCE0387', 'CHAITANYA DAVE', ' M', 'CSE', 'chaitanyadave23@gmail.com', 'Gujarat', 'O', '17BCE0387'),
('17BCE0529', 'GOWTHAM', ' M', 'CSE', 'gowtham123@gmail.com', 'Vellore', 'B-', '17BCE0529');

-- --------------------------------------------------------

--
-- Table structure for table `student_phno`
--

CREATE TABLE `student_phno` (
  `Reg_no` varchar(20) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_phno`
--

INSERT INTO `student_phno` (`Reg_no`, `phno`) VALUES
('17BCE0387', '9106618364'),
('17BCE0529', '9848022281');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `supervisor_id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `blockname` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`supervisor_id`, `name`, `blockname`, `password`) VALUES
('BLD123', 'ravindra', 'D', 'BLD123'),
('BLL123', 'ram', 'L', 'BLL123'),
('BLN123', 'ganesh', 'N', 'BLN123'),
('BLQ123', 'srinivasan', 'Q', 'BLQ123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocated`
--
ALTER TABLE `allocated`
  ADD KEY `Reg_no` (`Reg_no`),
  ADD KEY `blockname_roomno` (`blockname_roomno`),
  ADD KEY `mess_id` (`mess_id`);

--
-- Indexes for table `block_room_details`
--
ALTER TABLE `block_room_details`
  ADD PRIMARY KEY (`blockname_roomno`),
  ADD KEY `roomtype` (`roomtype`);

--
-- Indexes for table `fess_details`
--
ALTER TABLE `fess_details`
  ADD PRIMARY KEY (`roomtype`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indexes for table `student_credentials`
--
ALTER TABLE `student_credentials`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `student_personal_details`
--
ALTER TABLE `student_personal_details`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `student_phno`
--
ALTER TABLE `student_phno`
  ADD KEY `Reg_no` (`Reg_no`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`supervisor_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allocated`
--
ALTER TABLE `allocated`
  ADD CONSTRAINT `allocated_ibfk_1` FOREIGN KEY (`Reg_no`) REFERENCES `student_personal_details` (`Reg_no`),
  ADD CONSTRAINT `allocated_ibfk_2` FOREIGN KEY (`blockname_roomno`) REFERENCES `block_room_details` (`blockname_roomno`),
  ADD CONSTRAINT `allocated_ibfk_3` FOREIGN KEY (`mess_id`) REFERENCES `mess` (`mess_id`);

--
-- Constraints for table `block_room_details`
--
ALTER TABLE `block_room_details`
  ADD CONSTRAINT `block_room_details_ibfk_1` FOREIGN KEY (`roomtype`) REFERENCES `fess_details` (`roomtype`);

--
-- Constraints for table `student_phno`
--
ALTER TABLE `student_phno`
  ADD CONSTRAINT `student_phno_ibfk_1` FOREIGN KEY (`Reg_no`) REFERENCES `student_personal_details` (`Reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
