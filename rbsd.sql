-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 05:35 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `pg_level` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `date_hired` date NOT NULL,
  `position` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `promo_date` date NOT NULL,
  `civil_stat` varchar(20) NOT NULL,
  `cp_no` int(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `fname`, `lname`, `mname`, `pg_level`, `birthday`, `date_hired`, `position`, `email`, `promo_date`, `civil_stat`, `cp_no`, `username`, `password`, `type`) VALUES
('01', 'Janelyn', 'Gellado', '', '6', '1999-08-08', '2019-01-02', 'OJT', 'janelynanngellado@gmail.com', '2019-01-08', 'single', 12355, 'Janelyn', 'admin', ''),
('02', 'Franchesca Marie', 'Cortez', 'Cadondon', '5', '1998-11-12', '2019-01-02', 'OJT', 'chesca@gmail.com', '2019-01-08', 'single', 12355, 'Chesca', 'employee', ''),
('03', 'Xandra', 'Bello', '', '6', '1999-01-30', '2019-01-02', 'OJT1', 'xandra@gmail.com', '2019-01-08', 'single', 12355, 'Anda', 'superadmin', ''),
('04', 'Noel', 'Benusa', 'Dannug', '6', '1998-11-18', '2018-12-11', 'OJT1', 'noelbenusad@gmail.com', '2019-01-25', 'Single', 2147483647, 'Noel', '12345', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `employetype_id` varchar(25) NOT NULL,
  `employee_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leavedb`
--

CREATE TABLE `leavedb` (
  `date_of_filing` varchar(20) NOT NULL,
  `place` text NOT NULL,
  `type` text NOT NULL,
  `inc_dates` date NOT NULL,
  `recommendation` varchar(50) NOT NULL,
  `supervisor` text NOT NULL,
  `no_of_days` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavedb`
--

INSERT INTO `leavedb` (`date_of_filing`, `place`, `type`, `inc_dates`, `recommendation`, `supervisor`, `no_of_days`, `status`) VALUES
('09/17/2018', 'manila', 'Sick Leave', '0000-00-00', '', 'aaaa', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
('01', 'Janelyn', 'admin', 'admin'),
('02', 'Chesca', 'employee', 'employee'),
('03', 'Anda', 'superadmin', 'superadmin'),
('04', 'Noel', '12345', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `mr`
--

CREATE TABLE `mr` (
  `employeeID` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `date_assigned` date NOT NULL,
  `qty` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date_purchased` date NOT NULL,
  `property_no` varchar(50) NOT NULL,
  `classification_no` varchar(50) NOT NULL,
  `unit_value` varchar(50) NOT NULL,
  `total_value` varchar(50) NOT NULL,
  `mr_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr`
--

INSERT INTO `mr` (`employeeID`, `lname`, `fname`, `mname`, `date_assigned`, `qty`, `unit`, `property_name`, `description`, `date_purchased`, `property_no`, `classification_no`, `unit_value`, `total_value`, `mr_no`) VALUES
('08', 'sdfa', 'fadsg', 'fgad', '0000-00-00', 'dsgdg', '21', 'rfweag', 'dgsahd', '0002-03-04', 'sfag', '4543', '433', '3454', '654654');

-- --------------------------------------------------------

--
-- Table structure for table `ot`
--

CREATE TABLE `ot` (
  `employeeID` varchar(50) NOT NULL,
  `filing_date` date NOT NULL,
  `aot_from` varchar(20) NOT NULL,
  `aot_to` varchar(20) NOT NULL,
  `rate` varchar(20) NOT NULL,
  `hours` varchar(20) NOT NULL,
  `minutes` varchar(20) NOT NULL,
  `task` text NOT NULL,
  `authorized_by` text NOT NULL,
  `status` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `employeeID` varchar(25) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `inc_dates` varchar(50) NOT NULL,
  `no_of_hours` varchar(50) NOT NULL,
  `conducted_by` varchar(50) NOT NULL,
  `attachments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`employeeID`, `lname`, `fname`, `mname`, `title`, `inc_dates`, `no_of_hours`, `conducted_by`, `attachments`) VALUES
('', '', '', '', 'sfsaf', '2019-01-09', '4536', 'fhbs', 'dsag');

-- --------------------------------------------------------

--
-- Table structure for table `training_sched`
--

CREATE TABLE `training_sched` (
  `employeeID` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`employetype_id`);

--
-- Indexes for table `leavedb`
--
ALTER TABLE `leavedb`
  ADD PRIMARY KEY (`date_of_filing`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mr`
--
ALTER TABLE `mr`
  ADD PRIMARY KEY (`date_assigned`);

--
-- Indexes for table `ot`
--
ALTER TABLE `ot`
  ADD PRIMARY KEY (`filing_date`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
