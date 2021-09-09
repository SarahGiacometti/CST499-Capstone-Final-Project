-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 12:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbemployee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `id` int(4) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `semester` varchar(10) CHARACTER SET utf8 NOT NULL,
  `maxSize` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`id`, `name`, `semester`, `maxSize`) VALUES
(1, 'Capstone CST 499', 'Fall', 25),
(2, 'English 1 ENC1101', 'Spring', 30),
(3, 'Algebra 1 MAT 101', 'Summer', 20),
(4, 'Art History HUM 102', 'Spring', 35),
(5, '20th Century Art History ART 202', 'Summer', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE `tblregistration` (
  `id` int(4) NOT NULL,
  `uname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cname` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`id`, `uname`, `cname`) VALUES
(4, 'new@gmail.com', 'English 1 ENC1101'),
(7, 'new@gmail.com', 'Capstone CST 499'),
(8, 'new@gmail.com', 'Algebra 1 MAT 101'),
(9, 'new@gmail.com', '20th Century Art History ART 202');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(6) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  `firstName` text CHARACTER SET utf8 NOT NULL,
  `lastName` text CHARACTER SET utf8 NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8 NOT NULL,
  `salary` int(7) NOT NULL,
  `ssn` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `email`, `password`, `firstName`, `lastName`, `address`, `phone`, `salary`, `ssn`) VALUES
(1, 'melesanth1@gmail.com', 'password', 'sarah', 'giacometti', '101 trevor court', '1234567890', 75000, '111223344'),
(2, 'test2@gmail.com', 'password', 'test2', 'test2', '', '1112223333', 0, ''),
(3, 'blagoue@cox.net', 'password', 'sarah', 'giacometti', '', '1234567890', 0, ''),
(4, 'new@gmail.com', 'password', 'SarahNew', 'TestNew', '', '8883334444', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblregistration`
--
ALTER TABLE `tblregistration`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
