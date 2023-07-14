-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 01:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `sr` int(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`sr`, `id`, `date`, `status`) VALUES
(18, '8252', '2021-10-07', 'Present'),
(19, '8252', '2021-10-08', 'Present'),
(20, '1427', '2021-11-15', 'Present'),
(21, '1427', '2021-11-16', 'Absent'),
(22, '2072', '2021-11-15', 'Absent'),
(23, '1427', '2021-11-17', 'Absent'),
(24, '2072', '2021-11-16', 'Present'),
(25, '2072', '2021-11-14', 'Absent'),
(26, '2072', '2021-11-18', 'Present'),
(27, '9317', '2021-11-16', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jdate` date NOT NULL,
  `salary` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `depart` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `image` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `lname`, `dob`, `address`, `pincode`, `phone`, `email`, `jdate`, `salary`, `qualification`, `depart`, `designation`, `gender`, `image`) VALUES
(1427, '          pratham          ', '          gupta          ', '1999-03-23', '          sagar', '    470118', '   9516825337', '          pratham@gmail.com          ', '2021-11-03', '          50000          ', '          M-TECH          ', '          Information Technology          ', '          Tester          ', '', 'contact.png'),
(4299, 'bhupendra', 'kumar', '2000-10-10', 'khurai', '470117', '9516825336', 'bhupendra@gmai.com', '2021-11-07', '40000', 'M-TECH', 'Information Technology', 'Tester', 'male', 'sdlc-models.png'),
(4682, 'shiv', 'narayan', '1999-06-15', 'annuppur', '40125', '562143562', 'shivnarayan@gmail.com', '2020-10-28', '40000', 'M-TECH', 'Information Technology', 'Guest Faculty', 'male', 'cropped-header_cercamedico.jpg'),
(6987, '  vikash  ', '  kori  ', '2000-10-23', '  satna', '  40152  ', '  951824632  ', '  vikash@gmail.com  ', '2021-10-18', '  30000  ', '  B-TECH  ', '  Information Technology  ', '  Tester  ', '', 'Doctor with Scope.jpg'),
(7237, 'rahul', 'yadav', '1998-11-14', 'sagar', '401523', '951682453', 'rahul@gmail.com', '2019-12-16', '50000', 'M-TECH', 'Electrical Engineering', 'Assistance Professor', 'male', 'contact-1.jpg'),
(9317, '       raj       ', '       kumar       ', '2001-10-16', '       rewa', ' 105024 ', ' 1015423 ', '       raj@gmail.com       ', '2021-11-01', '   10000   ', '       B-TECH       ', '       Information Technology       ', '       Fresher       ', '', 'background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `empsignup`
--

CREATE TABLE `empsignup` (
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empsignup`
--

INSERT INTO `empsignup` (`email`, `password`, `cpassword`) VALUES
('pratham@gmail.com', 'pra@123', 'pra@123'),
('rahul@gmail.com', 'ra@123', 'ra@123'),
('raj@gmail.com', 'raj@123', 'raj@123'),
('vikash@gmail.com', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `response` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `response`) VALUES
(2072, 'bhupendra@gmail.com', 'Ecellent'),
(6987, 'vikash@gmail.com', 'Good'),
(9317, 'raj@gmail.com', 'Average');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(100) NOT NULL,
  `source` date NOT NULL,
  `desti` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `timing` varchar(200) NOT NULL,
  `sr` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `source`, `desti`, `status`, `timing`, `sr`) VALUES
(2072, '2021-11-15', '2021-11-16', 'Accept', 'Full Time', 11),
(1427, '2021-11-15', '2021-11-16', 'Pending', 'After Launch', 12),
(6987, '2021-11-16', '2021-11-17', 'Pending', 'Before Launch', 13),
(6987, '2021-11-18', '2021-11-19', 'Pending', 'Full Time', 14),
(1427, '2021-11-21', '2021-11-22', 'Pending', 'Full Time', 15),
(1427, '2021-11-21', '2021-11-22', 'Pending', 'Before Launch', 16),
(9317, '2021-11-16', '2021-11-19', 'Running', 'Full Time', 17),
(9317, '2021-11-20', '2021-11-21', 'Running', 'Emergency Launch', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empsignup`
--
ALTER TABLE `empsignup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `sr` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
