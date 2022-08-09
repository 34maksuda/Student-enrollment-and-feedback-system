-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 08:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_feedback41`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregistration`
--

CREATE TABLE `adminregistration` (
  `adminId` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `instituteName` varchar(150) NOT NULL,
  `departmentName` varchar(150) NOT NULL,
  `departmentCode` varchar(20) NOT NULL,
  `contactNumber` varchar(50) NOT NULL,
  `profilePic` varchar(255) NOT NULL,
  `registrationTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminregistration`
--

INSERT INTO `adminregistration` (`adminId`, `name`, `email`, `password`, `gender`, `instituteName`, `departmentName`, `departmentCode`, `contactNumber`, `profilePic`, `registrationTime`) VALUES
('Hajee Mohammad Danesh Science & Technology University(HSTU)02', 'Mst.Maksuda', 'maksudabilkis69@gmail.com', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 'Female', 'Hajee Mohammad Danesh Science & Technology University(HSTU)', 'Computer Science & Engineering(CSE)', '02', '01899435678', '60e5444eed0d8.jpg', '2021-07-07 06:06:06'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)03', 'Mst.Maimuna', 'maimunaafrin67@gmail.com', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', 'Female', 'Hajee Mohammad Danesh Science & Technology University(HSTU)', 'EEE', '03', '0783345677', '60e544b65ea26.jpg', '2021-07-07 06:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `courseregistration`
--

CREATE TABLE `courseregistration` (
  `courseId` varchar(255) NOT NULL,
  `teacherRegId` varchar(255) DEFAULT NULL,
  `courseUniqueId` varchar(255) NOT NULL,
  `courseTitle` varchar(255) DEFAULT NULL,
  `courseCode` varchar(50) DEFAULT NULL,
  `deptCode` varchar(50) DEFAULT NULL,
  `levels` varchar(10) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `section` varchar(10) DEFAULT NULL,
  `years` varchar(10) DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `entryTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseregistration`
--

INSERT INTO `courseregistration` (`courseId`, `teacherRegId`, `courseUniqueId`, `courseTitle`, `courseCode`, `deptCode`, `levels`, `semester`, `section`, `years`, `passwords`, `entryTime`) VALUES
('HSTU02CSE 3022021', 'Hajee Mohammad Danesh Science & Technology University(HSTU)1234', '1234CSE302kjslh', 'Java with OOP', 'CSE 302', '02', '1st year', 'I', 'I', '2021', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', '2021-09-17 05:55:56'),
('HSTU02CSE 3552021', 'Hajee Mohammad Danesh Science & Technology University(HSTU)1234', '1234CSE355jhlks', 'Web Engineering', 'CSE 355', '02', '3rd year', 'I', 'I', '2021', '1f82ea75c5cc526729e2d581aeb3aeccfef4407e', '2021-09-16 14:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackId` int(20) NOT NULL,
  `studentRegId` varchar(255) DEFAULT NULL,
  `courseUniqueId` varchar(255) DEFAULT NULL,
  `question1` varchar(255) DEFAULT NULL,
  `question2` varchar(255) DEFAULT NULL,
  `question3` varchar(255) DEFAULT NULL,
  `question4` varchar(255) DEFAULT NULL,
  `question5` varchar(255) DEFAULT NULL,
  `question6` varchar(255) DEFAULT NULL,
  `question7` varchar(255) DEFAULT NULL,
  `question8` varchar(255) DEFAULT NULL,
  `question9` varchar(255) DEFAULT NULL,
  `question10` varchar(255) DEFAULT NULL,
  `question11` varchar(255) DEFAULT NULL,
  `question12` varchar(255) DEFAULT NULL,
  `question13` varchar(255) DEFAULT NULL,
  `question14` varchar(255) DEFAULT NULL,
  `entryTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackId`, `studentRegId`, `courseUniqueId`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `entryTime`) VALUES
(8, 'Hajee Mohammad Danesh Science & Technology University(HSTU)1702001', '1234CSE355jhlks', '5', '4', '4', '5', '4', '4', '5', '4', '4', '5', '4', '4', '', '', '2021-09-18 14:38:11'),
(9, 'Hajee Mohammad Danesh Science & Technology University(HSTU)1702002', '1234CSE355jhlks', '4', '4', '5', '4', '5', '3', '4', '3', '1', '2', '5', '4', '', '', '2021-09-18 14:24:14'),
(10, 'Hajee Mohammad Danesh Science & Technology University(HSTU)1702003', '1234CSE355jhlks', '3', '4', '5', '4', '3', '2', '1', '1', '2', '4', '5', '4', '', '', '2021-09-18 14:24:58'),
(11, 'Hajee Mohammad Danesh Science & Technology University(HSTU)1702004', '1234CSE355jhlks', '2', '1', '5', '1', '2', '3', '4', '4', '4', '3', '5', '4', '', '', '2021-09-18 14:26:04'),
(12, 'Hajee Mohammad Danesh Science & Technology University(HSTU)1702005', '1234CSE355jhlks', '1', '3', '4', '1', '1', '2', '3', '4', '5', '4', '5', '4', '', '', '2021-09-18 14:26:57'),
(13, 'Hajee Mohammad Danesh Science & Technology University(HSTU)1702001', '1234CSE302kjslh', '5', '5', '5', '5', '4', '4', '4', '4', '4', '5', '5', '4', '', '', '2021-09-18 14:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `registerId` varchar(255) NOT NULL,
  `studentId` varchar(255) NOT NULL,
  `adminId` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `section` varchar(10) DEFAULT NULL,
  `session` varchar(20) NOT NULL,
  `attendance` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `entryTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`registerId`, `studentId`, `adminId`, `email`, `Name`, `password`, `Level`, `semester`, `section`, `session`, `attendance`, `gender`, `entryTime`) VALUES
('Hajee Mohammad Danesh Science & Technology University(HSTU)1702001', '1702001', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', 'maksudabilkis67@gmail.com', NULL, '12345678', '1st year', 'I', '', '2016-2017', NULL, NULL, '2021-09-11 17:57:22'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1702002', '1702002', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', '1st year', 'I', '', '2016-2017', NULL, NULL, '2021-09-11 07:25:01'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1702003', '1702003', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', '1st year', 'I', '', '2016-2017', NULL, NULL, '2021-09-11 07:25:01'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1702004', '1702004', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', '1st year', 'I', '', '2016-2017', NULL, NULL, '2021-09-11 07:25:02'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1702005', '1702005', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', '1st year', 'I', '', '2016-2017', NULL, NULL, '2021-09-11 07:25:02'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1702062', '1702062', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', '1st year', 'I', '', '2020-2021', NULL, NULL, '2021-07-06 17:22:59'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1702063', '1702063', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', '1st year', 'I', '', '2020-2021', NULL, NULL, '2021-07-06 17:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `registerId` varchar(255) NOT NULL,
  `teacherId` varchar(255) NOT NULL,
  `adminId` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `profilePic` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `entryTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`registerId`, `teacherId`, `adminId`, `email`, `name`, `password`, `gender`, `profilePic`, `entryTime`) VALUES
('Hajee Mohammad Danesh Science & Technology University(HSTU)1234', '1234', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', 'maksudabilkis@gmail.com', 'Maksuda', '12345678', 'Female', '6142c8fddf658.jpg', '2021-09-16 04:47:29'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1235', '1235', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', NULL, 'avatar.png', '2021-09-15 05:18:38'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1236', '1236', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', NULL, 'avatar.png', '2021-09-15 05:18:44'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1237', '1237', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', NULL, 'avatar.png', '2021-09-15 05:18:51'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)1238', '1238', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', NULL, 'avatar.png', '2021-09-15 05:18:55'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)2001', '2001', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', 'abdullahasif@gmail.com', 'Abdullah', '12345678', 'Male', '6142cd39b745a.jpg', '2021-09-16 04:51:05'),
('Hajee Mohammad Danesh Science & Technology University(HSTU)2002', '2002', 'Hajee Mohammad Danesh Science & Technology University(HSTU)02', NULL, NULL, '12345678', NULL, 'avatar.png', '2021-09-15 05:19:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregistration`
--
ALTER TABLE `adminregistration`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `courseregistration`
--
ALTER TABLE `courseregistration`
  ADD PRIMARY KEY (`courseId`),
  ADD KEY `teacherRegId` (`teacherRegId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackId`),
  ADD KEY `studentRegId` (`studentRegId`);

--
-- Indexes for table `studentregistration`
--
ALTER TABLE `studentregistration`
  ADD PRIMARY KEY (`registerId`),
  ADD KEY `adminId` (`adminId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`registerId`),
  ADD KEY `adminId` (`adminId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courseregistration`
--
ALTER TABLE `courseregistration`
  ADD CONSTRAINT `courseregistration_ibfk_1` FOREIGN KEY (`teacherRegId`) REFERENCES `teacher` (`registerId`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`studentRegId`) REFERENCES `studentregistration` (`registerId`);

--
-- Constraints for table `studentregistration`
--
ALTER TABLE `studentregistration`
  ADD CONSTRAINT `studentregistration_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `adminregistration` (`adminId`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `adminregistration` (`adminId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
