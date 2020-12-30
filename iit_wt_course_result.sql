-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 05:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iit_wt_course_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `pk_course` int(11) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`pk_course`, `code`) VALUES
(1, 'WT 1'),
(2, 'WT 2');

-- --------------------------------------------------------

--
-- Table structure for table `result_sheet`
--

CREATE TABLE `result_sheet` (
  `pk_student_course` int(11) NOT NULL,
  `fk_teacher` int(11) NOT NULL,
  `fk_student` int(11) NOT NULL,
  `fk_course` int(11) NOT NULL,
  `mark` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_sheet`
--

INSERT INTO `result_sheet` (`pk_student_course`, `fk_teacher`, `fk_student`, `fk_course`, `mark`) VALUES
(32, 1, 1, 2, 45),
(33, 1, 2, 2, 23),
(34, 1, 3, 2, 32),
(35, 1, 4, 2, 32),
(36, 2, 1, 2, 45),
(37, 2, 2, 2, 23),
(38, 2, 3, 2, 32),
(39, 2, 4, 2, 32),
(44, 1, 1, 1, 10),
(45, 1, 2, 1, 10),
(46, 1, 3, 1, 10),
(47, 1, 4, 1, 10),
(52, 2, 1, 1, 12),
(53, 2, 2, 1, 14),
(54, 2, 3, 1, 15),
(55, 2, 4, 1, 50);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `pk_student` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`pk_student`, `name`) VALUES
(1, 'alvy'),
(2, 'saimum'),
(3, 'robiul'),
(4, 'emon');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `pk_teacher` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`pk_teacher`, `name`) VALUES
(1, 'Sakib Sir'),
(2, 'Rakib Sir');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `pk_test` int(11) NOT NULL,
  `varchar_1` varchar(50) NOT NULL,
  `int_1` int(11) NOT NULL,
  `float_1` float NOT NULL,
  `decimal_1` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`pk_course`);

--
-- Indexes for table `result_sheet`
--
ALTER TABLE `result_sheet`
  ADD PRIMARY KEY (`pk_student_course`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`pk_student`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`pk_teacher`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`pk_test`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `pk_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `result_sheet`
--
ALTER TABLE `result_sheet`
  MODIFY `pk_student_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `pk_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `pk_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `pk_test` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
