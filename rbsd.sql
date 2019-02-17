-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 11:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(100) NOT NULL,
  `dates` date NOT NULL,
  `holiday` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `dates`, `holiday`) VALUES
(6, '2019-02-05', 'Chinese New Year'),
(9, '2019-06-12', 'Independence Day'),
(12, '2019-08-21', 'Ninoy Aquino Day'),
(51, '2019-02-25', 'People Power');

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `id` int(11) NOT NULL,
  `employeeID` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `vacation` varchar(100) DEFAULT NULL,
  `sick` varchar(100) NOT NULL,
  `slp` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `cp_no` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(30) NOT NULL,
  `supervisorID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `fname`, `lname`, `mname`, `pg_level`, `birthday`, `date_hired`, `position`, `email`, `promo_date`, `civil_stat`, `cp_no`, `username`, `password`, `type`, `supervisorID`) VALUES
('01', 'Janelyn Ann', 'Gellado', '', '8', '1999-08-08', '2019-01-02', 'OJT', 'janelynanngellado@gmail.com', '2019-01-08', 'single', '09774643758', 'Janelyn', 'admin', '', ''),
('02', 'Franchesca Marie', 'Cortez', 'Cadondon', '5', '1998-11-12', '2019-01-02', 'OJT', 'chesca@gmail.com', '2019-01-08', 'single', '09774643759', 'Chesca', '123', 'Employee', '1'),
('03', 'Xandra', 'Bello', '', '6', '1999-01-30', '2019-01-02', 'OJT1', 'xandra@gmail.com', '2019-01-08', 'single', '12355', 'Anda', 'superadmin', '', ''),
('04', 'Noel', 'Benusa', 'Dannug', '6', '1998-11-18', '2018-12-11', 'OJT1', 'noelbenusad@gmail.com', '2019-01-25', 'Single', '2147483647', 'Noel', '12345', 'employee', ''),
('05', 'Julius Rabbi', 'Liscano', 'Apas', '6', '1999-07-30', '2019-01-29', 'Trainee', 'yot.liscano', '2019-01-29', 'Single', '12344', 'Julius', '12345', 'employee', ''),
('06', 'Lovely', 'Dayo', 'Grace', '14', '2019-02-05', '2019-02-06', 'Department Head', 'xxxxxxxxx', '2019-02-04', 'Single', '12345678900', 'Lovely', '12345', '', ''),
('09', 'Franchessy', 'Orias', 'Marie', '6', '2019-02-16', '2019-02-12', 'employee', 'chesca.cortez@gmail.com', '2019-02-14', 'Married', '1234567890', 'chengky', '12345', 'Employee', '1'),
('10', 'Angela', 'Mercado', 'Apas', '6', '2019-02-13', '2019-02-21', 'Supervisor', 'chesca.cortez@yahoo.com', '2019-02-28', 'Married', '12349', 'Angela', '12345', 'Employee', ''),
('12345', 'ghjkl', 'Orias', 'Apas', '6', '2019-02-21', '2019-02-27', 'Supervisor', 'yot.liscano', '2019-02-21', 'Single', '123456245', 'sample', '12345', 'Supervisor', '');

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
  `id` int(11) NOT NULL,
  `date_of_filing` date NOT NULL,
  `employeeID` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `type_info` varchar(100) NOT NULL,
  `inc_from` date NOT NULL,
  `inc_to` date NOT NULL,
  `supervisorID` varchar(100) NOT NULL,
  `no_of_days` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavedb`
--

INSERT INTO `leavedb` (`id`, `date_of_filing`, `employeeID`, `type`, `type_info`, `inc_from`, `inc_to`, `supervisorID`, `no_of_days`, `status`) VALUES
(1, '2019-02-17', '02', 'Sick Leave', 'In hospital', '2312-12-02', '0003-02-03', '12312', '12321321', 'disapprove'),
(2, '2019-02-17', '02', 'Vacation Leave(Local)', 'Inside the Country', '2019-02-14', '2019-02-15', '312312', '12321312', 'disapprove'),
(3, '2019-02-17', '02', 'Vacation Leave(Local)', 'Inside the Country', '2019-02-22', '2019-02-28', '12321312', '12321312123213', 'disapprove'),
(4, '2019-02-17', '02', 'Vacation Leave(Local)', 'Inside the Country', '2019-02-22', '2019-02-27', '23423', '234324', 'disapprove'),
(5, '2019-02-17', '02', 'Vacation Leave(Local)', 'Inside the Country', '2019-02-23', '2019-02-25', 'dsadsa', '2', 'disapprove');

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
('04', 'Noel', '12345', 'employee'),
('05', 'Julius', '12345', 'employee'),
('06', 'Lovely', '12345', 'depthead'),
('09', 'chengky', '12345', 'Employee'),
('10', 'Angela', '12345', 'Employee'),
('12345', 'sample', '12345', 'Supervisor');

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
('02', 'Cortez', 'Franchesca Marie', 'Cadondon', '2019-02-14', '23', '12', 'Property', 'New', '2019-02-07', '12345', '123', '123', '', '123'),
('01', 'Gellado', 'Janelyn Ann', 'Dannug', '2019-02-09', '123', '1', 'PC', '3', '2019-02-14', '15-037-074', '3', '3', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ot`
--

CREATE TABLE `ot` (
  `id` int(100) NOT NULL,
  `employeeID` varchar(50) NOT NULL,
  `date_of_filing` date NOT NULL,
  `auto_OT` varchar(100) NOT NULL,
  `aot_from` varchar(20) NOT NULL,
  `aot_to` varchar(20) NOT NULL,
  `hours_weekends` varchar(50) NOT NULL DEFAULT '00',
  `minutes_weekends` varchar(50) NOT NULL,
  `hours_weekdays` varchar(50) NOT NULL,
  `minutes_weekdays` varchar(50) NOT NULL DEFAULT '00',
  `task` text NOT NULL,
  `authorized_by` text NOT NULL,
  `status` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ot`
--

INSERT INTO `ot` (`id`, `employeeID`, `date_of_filing`, `auto_OT`, `aot_from`, `aot_to`, `hours_weekends`, `minutes_weekends`, `hours_weekdays`, `minutes_weekdays`, `task`, `authorized_by`, `status`, `remarks`) VALUES
(16, '02', '2019-02-16', '2:00 - 3:00', '14:00', '15:00', '00', '00', '1', '00', 'asdffregrfh', 'Armando, Alexia', 'Pending', ''),
(17, '02', '2019-02-16', '20', '14:00', '17:00', '00', '00', '2', '0', 'Debugging', 'Armando, Alexia', 'Pending', '');

--
-- Triggers `ot`
--
DELIMITER $$
CREATE TRIGGER `notification_ot` AFTER INSERT ON `ot` FOR EACH ROW INSERT INTO ot_notification (id, employeeID, date_of_filing) VALUES (NEW.id, NEW.employeeID, NEW.date_of_filing)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ot_notification`
--

CREATE TABLE `ot_notification` (
  `id` int(100) NOT NULL,
  `employeeID` varchar(50) NOT NULL,
  `date_of_filing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ot_notification`
--

INSERT INTO `ot_notification` (`id`, `employeeID`, `date_of_filing`) VALUES
(13, '03', '2019-02-11'),
(14, '03', '2019-02-06'),
(15, '02', '2019-02-16'),
(16, '02', '2019-02-16'),
(17, '02', '2019-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(50) NOT NULL,
  `property_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `property_no`) VALUES
(8, '15-094-423'),
(9, '12345'),
(10, '15-037-062'),
(11, '15-037-074');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(50) NOT NULL,
  `sv_firstname` varchar(100) NOT NULL,
  `sv_lastname` varchar(100) NOT NULL,
  `sv_middlename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `sv_firstname`, `sv_lastname`, `sv_middlename`) VALUES
(1, 'Alexia', 'Armando', 'Mendoza');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(100) NOT NULL,
  `employeeID` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `inc_from` date NOT NULL,
  `inc_to` date NOT NULL,
  `no_of_hours` varchar(50) NOT NULL,
  `conducted_by` varchar(50) NOT NULL,
  `attachments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `employeeID`, `username`, `title`, `inc_from`, `inc_to`, `no_of_hours`, `conducted_by`, `attachments`) VALUES
(2, '02', 'Chesca', 'Title 3', '2019-02-19', '2019-02-08', '12', 'fhbs', 'abundance-assortment-basket-1458694.jpg'),
(5, '02', 'Chesca', 'RPA Programming', '2019-02-13', '2019-02-15', '24', 'Landbank', ''),
(6, '02', 'Chesca', 'RPA Programming', '2019-02-28', '2019-02-27', '24', 'IBM', '4 PROJ. STRUCTURE.jpg'),
(7, '02', 'Chesca', 'sample training', '2015-11-11', '1231-12-12', '8', 'IBM', '4 PROJ. STRUCTURE.jpg'),
(8, '02', 'Chesca', 'Chesca\'s Training', '2019-02-12', '2019-02-13', '8', 'Landbank', 'CHAP 4.jpg');

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
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mr`
--
ALTER TABLE `mr`
  ADD PRIMARY KEY (`property_no`);

--
-- Indexes for table `ot`
--
ALTER TABLE `ot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ot_notification`
--
ALTER TABLE `ot_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leavedb`
--
ALTER TABLE `leavedb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ot`
--
ALTER TABLE `ot`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ot_notification`
--
ALTER TABLE `ot_notification`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
