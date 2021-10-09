-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 06:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(10) NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  `exam_paper` varchar(1000) NOT NULL,
  `exam_startdate` date NOT NULL,
  `exam_enddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `exam_paper`, `exam_startdate`, `exam_enddate`) VALUES
(20210101, '1st term test', '', '2021-09-01', '2021-10-07 12:00:00'),
(20210102, 'assignment 01', '', '2021-08-03', '2021-10-07 11:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grd_id` int(5) NOT NULL,
  `gdr_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_id` int(5) NOT NULL,
  `note_name` varchar(15) NOT NULL,
  `grd_id` int(5) NOT NULL,
  `sub_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_code` varchar(10) NOT NULL,
  `exam_id` int(10) NOT NULL,
  `result_sheet` blob NOT NULL,
  `release_date` date NOT NULL,
  `release_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `index_number` int(5) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `student_DOB` date NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`index_number`, `student_name`, `student_address`, `student_DOB`, `age`) VALUES
(1, 'nethmi', 'matara', '2006-05-12', 15),
(2, 'senuth', 'matara', '2007-05-12', 14);

-- --------------------------------------------------------

--
-- Table structure for table `student_examanswersheets`
--

CREATE TABLE `student_examanswersheets` (
  `index_number` int(5) NOT NULL,
  `exam_id` int(10) NOT NULL,
  `answersheet` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE `student_subject` (
  `Index_Number` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(5) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `medium` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `subject_name`, `medium`) VALUES
(1, 'sinhala', 'sinhala'),
(2, 'english', 'english'),
(3, 'mathematics', 'sinhala'),
(4, 'science', 'sinhala'),
(5, 'buddhism', 'sinhala'),
(6, 'history', 'sinhala'),
(7, 'tamil', 'sinhala'),
(8, 'health', 'sinhala'),
(9, 'esthetic', 'sinhala');

-- --------------------------------------------------------

--
-- Table structure for table `subject_exam`
--

CREATE TABLE `subject_exam` (
  `sub_id` int(10) NOT NULL,
  `exam_id` int(10) NOT NULL,
  `exam_paper` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_NIC` varchar(10) NOT NULL,
  `teacher_name` varchar(20) NOT NULL,
  `teacher_DOB` date NOT NULL,
  `age` int(10) NOT NULL,
  `teacher_address` varchar(30) NOT NULL,
  `teacher_tele` int(10) NOT NULL,
  `teacher_salary` double NOT NULL,
  `qualifications` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_NIC`, `teacher_name`, `teacher_DOB`, `age`, `teacher_address`, `teacher_tele`, `teacher_salary`, `qualifications`) VALUES
(10101, '967330408v', 'chapa', '1996-11-04', 25, 'matara', 412242556, 60000, 'degree'),
(10102, '945463635v', 'thakshila', '1994-09-01', 27, 'galle', 745454669, 65000, 'degree');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `teacher_id` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`teacher_id`, `sub_id`) VALUES
(10101, 1),
(10102, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grd_id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `grd_id` (`grd_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_code`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `student_examanswersheets`
--
ALTER TABLE `student_examanswersheets`
  ADD PRIMARY KEY (`index_number`,`exam_id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `index_number` (`index_number`);

--
-- Indexes for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`Index_Number`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `Index_Number` (`Index_Number`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD UNIQUE KEY `sub_id` (`sub_id`);

--
-- Indexes for table `subject_exam`
--
ALTER TABLE `subject_exam`
  ADD PRIMARY KEY (`sub_id`,`exam_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD PRIMARY KEY (`teacher_id`,`sub_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`grd_id`) REFERENCES `grade` (`grd_id`),
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`exam_id`);

--
-- Constraints for table `student_examanswersheets`
--
ALTER TABLE `student_examanswersheets`
  ADD CONSTRAINT `student_examanswersheets_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`exam_id`);

--
-- Constraints for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD CONSTRAINT `student_subject_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`sub_id`);

--
-- Constraints for table `subject_exam`
--
ALTER TABLE `subject_exam`
  ADD CONSTRAINT `subject_exam_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`exam_id`),
  ADD CONSTRAINT `subject_exam_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);

--
-- Constraints for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD CONSTRAINT `teacher_subject_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`),
  ADD CONSTRAINT `teacher_subject_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
