-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2022 at 06:03 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18439400_myproj`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`id18439400_localhost`@`%` PROCEDURE `teacher` ()  BEGIN
select usn,name,email,phone from `myproj` where varification = 1;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `name`, `email`, `phone`) VALUES
('admin', 'Admin@123', 'admin', 'vishal702355@gmail.com', 7023553430);

-- --------------------------------------------------------

--
-- Table structure for table `marksfifthsem`
--

CREATE TABLE `marksfifthsem` (
  `usn` varchar(10) NOT NULL,
  `outoff` int(3) NOT NULL DEFAULT 100,
  `18CS51` int(3) NOT NULL DEFAULT 0,
  `18CS52` int(3) NOT NULL DEFAULT 0,
  `18CS53` int(3) NOT NULL DEFAULT 0,
  `18CS54` int(3) NOT NULL DEFAULT 0,
  `18CS55` int(3) NOT NULL DEFAULT 0,
  `18CS56` int(3) NOT NULL DEFAULT 0,
  `18CSL57` int(3) NOT NULL DEFAULT 0,
  `18CSL58` int(3) NOT NULL DEFAULT 0,
  `18CIV59` int(3) NOT NULL DEFAULT 0,
  `first_updated_by` varchar(100) DEFAULT NULL,
  `last_inserted_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marksfifthsem`
--

INSERT INTO `marksfifthsem` (`usn`, `outoff`, `18CS51`, `18CS52`, `18CS53`, `18CS54`, `18CS55`, `18CS56`, `18CSL57`, `18CSL58`, `18CIV59`, `first_updated_by`, `last_inserted_by`) VALUES
('1RN19CS002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1RN19CS181', 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1RN19CS183', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1RN19CS185', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1rn19cs188', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1rn19cs189', 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1RN19CS802', 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marksforthsem`
--

CREATE TABLE `marksforthsem` (
  `USN` varchar(10) NOT NULL,
  `outoff` int(3) NOT NULL DEFAULT 100,
  `18CS42` int(3) NOT NULL DEFAULT 0,
  `18CS43` int(3) NOT NULL DEFAULT 0,
  `18CS45` int(3) NOT NULL DEFAULT 0,
  `18CS46` int(3) NOT NULL DEFAULT 0,
  `18CSL47` int(3) NOT NULL DEFAULT 0,
  `18CSL48` int(3) NOT NULL DEFAULT 0,
  `18MAT41` int(3) NOT NULL DEFAULT 0,
  `18MATDIP41` int(3) NOT NULL DEFAULT 0,
  `first_updated_by` varchar(100) DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marksforthsem`
--

INSERT INTO `marksforthsem` (`USN`, `outoff`, `18CS42`, `18CS43`, `18CS45`, `18CS46`, `18CSL47`, `18CSL48`, `18MAT41`, `18MATDIP41`, `first_updated_by`, `last_updated_by`) VALUES
('1rn19cs100', 100, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1RN19CS147', 30, 35, 23, 25, 29, 21, 22, 22, 25, '234', 'NULL'),
('1rn19cs181', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1rn19cs183', 0, 34, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1rn19cs184', 100, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1RN19CS185', 0, 35, 0, 0, 0, 0, 0, 0, 0, '', ''),
('1rn19cs199', 100, 0, 0, 0, 0, 0, 0, 0, 0, 'vishal', 'vishal');

-- --------------------------------------------------------

--
-- Table structure for table `markssixthsemIA`
--

CREATE TABLE `markssixthsemIA` (
  `usn` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `outoff` int(11) NOT NULL,
  `18cs61` int(11) NOT NULL DEFAULT -1,
  `18cs62` int(11) NOT NULL DEFAULT -1,
  `18cs63` int(11) NOT NULL DEFAULT -1,
  `18csmp68` int(11) NOT NULL DEFAULT -1,
  `18cs641` int(11) NOT NULL DEFAULT -1,
  `18cs643` int(11) NOT NULL DEFAULT -1,
  `18cs644` int(11) NOT NULL DEFAULT -1,
  `first_updated_by` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_updated_by` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `markssixthsemIA`
--

INSERT INTO `markssixthsemIA` (`usn`, `outoff`, `18cs61`, `18cs62`, `18cs63`, `18csmp68`, `18cs641`, `18cs643`, `18cs644`, `first_updated_by`, `last_updated_by`) VALUES
('1RN19CS001', 50, 44, 44, -1, -1, -1, -1, 31, NULL, NULL),
('1RN19CS002', 50, 45, 45, -1, -1, -1, -1, -1, NULL, NULL),
('1RN19CS003', 50, 43, 43, -1, -1, -1, -1, -1, NULL, NULL),
('1RN19CS004', 50, 42, 42, -1, -1, -1, -1, -1, NULL, NULL),
('1RN19CS005', 50, 41, 41, -1, -1, -1, -1, -1, NULL, NULL),
('1RN19CS006', 50, 40, -1, -1, -1, -1, -1, -1, NULL, NULL),
('1RN19CS183', 34, 50, -1, -1, -1, -1, -1, -1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marksthirdsem`
--

CREATE TABLE `marksthirdsem` (
  `usn` varchar(10) NOT NULL,
  `outoff` int(11) NOT NULL DEFAULT 100,
  `s18CS32` int(11) NOT NULL DEFAULT 0,
  `s18CS33` int(11) NOT NULL DEFAULT 0,
  `s18CS34` int(11) NOT NULL DEFAULT 0,
  `s18CS35` int(11) NOT NULL DEFAULT 0,
  `s18CS36` int(11) NOT NULL DEFAULT 0,
  `s18CSL37` int(11) NOT NULL DEFAULT 0,
  `s18MAT31` int(11) NOT NULL DEFAULT 0,
  `s18CPC39` int(11) NOT NULL DEFAULT 0,
  `s18MATDIP31` int(11) NOT NULL DEFAULT 0,
  `first_updated_by` varchar(100) DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marksthirdsem`
--

INSERT INTO `marksthirdsem` (`usn`, `outoff`, `s18CS32`, `s18CS33`, `s18CS34`, `s18CS35`, `s18CS36`, `s18CSL37`, `s18MAT31`, `s18CPC39`, `s18MATDIP31`, `first_updated_by`, `last_updated_by`) VALUES
('1RN19CS001', 40, 35, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS002', 40, 35, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS003', 40, 35, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS004', 40, 35, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS005', 40, 35, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS006', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS007', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS008', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS009', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS010', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS011', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS012', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS013', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS014', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS015', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS016', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS017', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS018', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS019', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS020', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS021', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS022', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS023', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS024', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS025', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS026', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS027', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS028', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS029', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS030', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS031', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS032', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS033', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS034', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS035', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS036', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS037', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS039', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS040', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS041', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1RN19CS042', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 'NULL', 'NULL'),
('1rn19cs091', 100, 38, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
('1RN19CS147', 100, 35, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
('1rn19cs183', 100, 34, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
('1RN19CS185', 100, 35, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `myproj`
--

CREATE TABLE `myproj` (
  `sno` int(4) NOT NULL,
  `name` text NOT NULL,
  `usn` varchar(10) NOT NULL,
  `DOB` varchar(12) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `other` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `varification` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myproj`
--

INSERT INTO `myproj` (`sno`, `name`, `usn`, `DOB`, `subject`, `phone`, `email`, `other`, `date`, `varification`) VALUES
(121, 'vishal', '1', 'Sri702355#', '18CS61,18CS51,18CS41', '7023553430', 'vishal702355@gmail.com', NULL, '2022-04-21 10:49:05', 1),
(124, 'k', '2', 'Sri702355#', '18CS62,18CS52,18CS42', '9746923657', 'vsk@gmail.com', NULL, '2022-04-24 07:05:13', 1),
(125, 'vishal', '3', 'Sri702355#', '18cs61,18cs51', '7638757656', '1rn19cs183.vishalkumar@gmail.com', NULL, '2022-04-25 10:57:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `usn` varchar(12) NOT NULL,
  `phy` int(3) DEFAULT 0,
  `math` int(3) DEFAULT 0,
  `sci` int(3) DEFAULT 0,
  `total` decimal(3,0) NOT NULL DEFAULT 0,
  `outof` int(3) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`usn`, `phy`, `math`, `sci`, `total`, `outof`) VALUES
('1RN19CS007', 50, 50, 61, 161, 300),
('1RN19CS008', 50, 50, 61, 161, 300),
('1RN19CS1', 50, 50, 61, 161, 150),
('1rn19cs18', 50, 50, 61, 161, 300),
('1RN19CS181', 90, 90, 99, 279, 300),
('1RN19CS183', 50, 50, 61, 161, 300),
('1RN19CS185', 50, 50, 61, 161, 300),
('1RN19IS183', 10, 5, 81, 96, 300);

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksfifthsem`
--
ALTER TABLE `marksfifthsem`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `marksforthsem`
--
ALTER TABLE `marksforthsem`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `markssixthsemIA`
--
ALTER TABLE `markssixthsemIA`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `marksthirdsem`
--
ALTER TABLE `marksthirdsem`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `myproj`
--
ALTER TABLE `myproj`
  ADD PRIMARY KEY (`sno`,`usn`),
  ADD UNIQUE KEY `usn` (`usn`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`usn`),
  ADD UNIQUE KEY `usn` (`usn`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myproj`
--
ALTER TABLE `myproj`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
