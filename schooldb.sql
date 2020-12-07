-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 06:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `uid` int(100) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `managequota` varchar(255) NOT NULL,
  `sportquota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `name`, `email`, `dob`, `gender`, `fname`, `mname`, `add1`, `add2`, `city`, `state`, `pincode`, `uid`, `pan`, `class`, `managequota`, `sportquota`) VALUES
(3, 'Anuj', 'student1@gmail.com', '2020-12-01', 'Male', 'vv', 'vvnbv', 'fghffhf', 'vqgvggq', 'mumbai_city', 'maharashtra', 400001, 0, '', '', '', ''),
(4, 'Anuj', 'student1@gmail.com', '2020-12-01', 'Male', 'vv', 'vvnbv', 'fghffhf', 'vqgvggq', 'mumbai_city', 'maharashtra', 400001, 2147483647, 'fgddgdf454', 'third', '', ''),
(5, 'Anuj', 'student1@gmail.com', '2020-12-02', 'Male', 'vv', 'vvnbv', 'fghffhf', 'vqgvggq', 'mumbai_city', 'maharashtra', 400001, 2147483647, 'fgddgdf454', 'sixth', 'No', ''),
(7, 'Anuj Ashok Jaiswal', 'student1@gmail.com', '2020-12-02', 'Male', 'Ashok Kumar Jaiswal', 'Kaushalya', 'j-604, Shree Chamunda Garden', 'khambalpada, Thalurli(east)', 'mumbai_city', 'maharashtra', 400001, 2147483647, 'fgddgdf454', 'second', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sid` int(5) NOT NULL,
  `maths` int(3) DEFAULT NULL,
  `physics` int(3) DEFAULT NULL,
  `chemistry` int(3) DEFAULT NULL,
  `SS` int(3) DEFAULT NULL,
  `english` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sid`, `maths`, `physics`, `chemistry`, `SS`, `english`) VALUES
(14001, 100, 88, 98, 78, 79);

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `pid` int(5) NOT NULL,
  `pname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneNo` int(10) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`pid`, `pname`, `email`, `phoneNo`, `password`) VALUES
(21001, 'Anuj', 'Anuj@xyz.com', 2147483647, 'Anuj');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(5) NOT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `std` int(2) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneNo` bigint(10) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `std`, `email`, `phoneNo`, `password`) VALUES
(14001, 'Anuj', 4, 'student1@gmail.com', 8080048719, 'ryt789'),
(14002, 'Smit', 12, 'smit@xyz.com', 1010101010, 'zxcvbn'),
(14003, 'Raj', 11, 'raj@xyz.com', 4444444444, 'rajxxxx'),
(14004, 'hema', 11, 'hema@xyz.com', 111111111, 'hemaaaa'),
(14005, 'ravi', 6, 'ravi@xyz.com', 7777777777, 'ravi'),
(14006, 'Lokesh', 4, 'lokesh@gmail.com', 784519658, 'aj153789'),
(14007, 'Akhilesh', 5, 'akm789@gmail.com', 457981256, 'gyu45');

-- --------------------------------------------------------

--
-- Table structure for table `studentleave`
--

CREATE TABLE `studentleave` (
  `sid` int(5) NOT NULL,
  `tid` int(5) DEFAULT NULL,
  `reason` varchar(150) DEFAULT NULL,
  `fdate` date DEFAULT NULL,
  `tdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentleave`
--

INSERT INTO `studentleave` (`sid`, `tid`, `reason`, `fdate`, `tdate`) VALUES
(14001, 10002, 'Not feeling well', '2020-12-11', '2020-12-12'),
(14002, 10001, 'hhdgddgdcd vjhgjhihl vg', '2020-10-30', '2020-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `studentmsg`
--

CREATE TABLE `studentmsg` (
  `sid` int(5) NOT NULL,
  `tid` int(5) DEFAULT NULL,
  `msg` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmsg`
--

INSERT INTO `studentmsg` (`sid`, `tid`, `msg`) VALUES
(14001, 10001, 'need help in science project'),
(14002, 10001, 'hello maam, i am new student in your class');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(5) NOT NULL,
  `tname` varchar(45) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneNo` int(10) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tname`, `subject`, `email`, `phoneNo`, `password`) VALUES
(10001, 'Vrajesh Mehta', 'MEP', 'mehta@gmail.com', 2147483647, 'mehta456'),
(10002, 'ShyamSundar Magar', 'IP', 'magar@gmail.com', 78944545, 'agy78');

-- --------------------------------------------------------

--
-- Table structure for table `teacherleave`
--

CREATE TABLE `teacherleave` (
  `tid` int(100) NOT NULL,
  `pid` int(100) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `fdate` date DEFAULT NULL,
  `tdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherleave`
--

INSERT INTO `teacherleave` (`tid`, `pid`, `reason`, `fdate`, `tdate`) VALUES
(10001, 21001, 'Diwali leave', '2020-12-12', '2020-12-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentleave`
--
ALTER TABLE `studentleave`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentmsg`
--
ALTER TABLE `studentmsg`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `markF` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
