-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 06:56 AM
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
(51, '2019-02-25', 'People Power'),
(52, '2019-11-01', 'All Saints Day');

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

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`id`, `employeeID`, `lname`, `fname`, `mname`, `vacation`, `sick`, `slp`, `others`) VALUES
(11, '02', 'Cortez', 'Franchesca Marie', 'Cadondon', '2', '4', '4', '5'),
(12, '04', 'Benusa', 'Noel', 'Dannug', '4', '5', '6', '7'),
(13, '03', 'Bello', 'Xandra', '', '0', '1', '1', '1');

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
  `supervisorID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `fname`, `lname`, `mname`, `pg_level`, `birthday`, `date_hired`, `position`, `email`, `promo_date`, `civil_stat`, `cp_no`, `username`, `password`, `type`, `supervisorID`) VALUES
('01', 'Janelyn Ann', 'Gellado', '', '8', '1999-08-08', '2019-01-02', 'OJT', 'janelynanngellado@gmail.com', '2019-01-08', 'single', '09774643758', 'Janelyn', 'admin', '', '20'),
('010', 'Christopher', 'Gamban', 'Lipnica', '5', '2019-02-27', '2019-02-28', 'OJT1', 'try@gmail.com', '2019-02-28', 'Single', '09424892314', '010', '12345', 'Supervisor', '20'),
('02', 'Franchesca Marie', 'Cortez', 'Cadondon', '5', '1998-11-12', '2019-01-02', 'OJT', 'chesca@gmail.com', '2019-01-08', 'single', '09774643759', 'Chesca', '123', 'Employee', '20'),
('03', 'Xandra', 'Bello', '', '6', '1999-01-30', '2019-01-02', 'OJT1', 'xandra@gmail.com', '2019-01-08', 'single', '12355', 'Anda', 'superadmin', '', '20'),
('04', 'Noel', 'Benusa', 'Dannug', '6', '1998-11-18', '2018-12-11', 'OJT1', 'noelbenusad@gmail.com', '2019-01-25', 'Single', '2147483647', 'Noel', '12345', 'employee', '20'),
('05', 'Julius Rabbi', 'Liscano', 'Apas', '6', '1999-07-30', '2019-01-29', 'Trainee', 'yot.liscano', '2019-01-29', 'Single', '12344', 'Julius', '12345', 'employee', '20'),
('06', 'Lovely', 'Dayo', 'Grace', '14', '2019-02-05', '2019-02-06', 'Department Head', 'xxxxxxxxx', '2019-02-04', 'Single', '12345678900', 'Lovely', '12345', '', '20'),
('09', 'Franchessy', 'Orias', 'Marie', '6', '2019-02-16', '2019-02-12', 'employee', 'chesca.cortez@gmail.com', '2019-02-14', 'Married', '1234567890', 'chengky', '12345', 'Employee', '20'),
('10', 'Angela', 'Mercado', 'Apas', '6', '2019-02-13', '2019-02-21', 'Supervisor', 'chesca.cortez@yahoo.com', '2019-02-28', 'Married', '12349', 'Angela', '12345', 'Employee', '20'),
('11', 'Herchell', 'Forteo', 'Mari', '6', '1998-03-20', '2019-02-19', 'OJT1', 'xxxxxxxxx', '2019-02-19', 'Single', '2314567', 'Chel', '12345', 'Employee', '20'),
('12345', 'ghjkl', 'Orias', 'Apas', '6', '2019-02-21', '2019-02-27', 'Supervisor', 'yot.liscano', '2019-02-21', 'Single', '123456245', 'sample', '12345', 'Supervisor', '20'),
('1234567890', 'dsf', '2drgqtwf', 'dg', '5', '3434-04-23', '0034-04-03', 'dg', '32r', '0043-03-31', 'Single', '34', '1234567890', '12345', 'Employee', '20'),
('54555', 'dag', 'gdadg', 'adg', '5', '3333-03-03', '3333-03-03', 'reg', 'gr', '5532-04-04', 'Single', '34324', '54555', '12345', 'Employee', '20');

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
-- Table structure for table `emp_ot`
--

CREATE TABLE `emp_ot` (
  `employeeID` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `jan` varchar(10) NOT NULL DEFAULT '60',
  `feb` int(10) NOT NULL DEFAULT '60',
  `mar` int(100) NOT NULL DEFAULT '60',
  `apr` int(100) NOT NULL DEFAULT '60',
  `may` int(10) NOT NULL DEFAULT '60',
  `june` int(10) NOT NULL DEFAULT '60',
  `july` int(10) NOT NULL DEFAULT '60',
  `aug` int(11) NOT NULL DEFAULT '60',
  `sept` int(10) NOT NULL DEFAULT '60',
  `oct` int(10) NOT NULL DEFAULT '60',
  `nov` int(10) NOT NULL DEFAULT '60',
  `dec` int(10) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_ot`
--

INSERT INTO `emp_ot` (`employeeID`, `fname`, `lname`, `mname`, `jan`, `feb`, `mar`, `apr`, `may`, `june`, `july`, `aug`, `sept`, `oct`, `nov`, `dec`) VALUES
('02', 'Franchesca Marie', 'Cortez', 'Cadondon', '60', 58, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60);

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
(11, '2019-02-23', '02', 'Vacation Leave(International)', 'Singapore', '2019-02-28', '2019-03-01', 'Armando, Alexia', '1', 'disapproved'),
(12, '2019-02-23', '02', 'Vacation Leave(International)', 'Hehe', '2019-02-28', '2019-03-01', 'Armando, Alexia', '1', 'approved'),
(13, '2019-02-23', '02', 'Vacation Leave(Local)', 'Inside the Country', '2019-02-28', '2019-03-01', 'Armando, Alexia', '1', 'approved'),
(14, '2019-02-23', '02', 'Sick Leave', 'In hospital', '2019-02-28', '2019-02-28', 'Armando, Alexia', '0', 'pending'),
(15, '2019-02-23', '02', 'Sick Leave', 'In hospital', '2019-02-28', '2019-03-01', 'Armando, Alexia', '1', 'pending'),
(16, '2019-02-23', '02', 'Special Leave Priveledge', 'Paternity', '2019-02-28', '2019-03-02', 'Armando, Alexia', '2', 'approved'),
(17, '2019-02-23', '02', 'Others', 'Hehe', '2019-02-28', '2019-03-01', 'Armando, Alexia', '1', 'pending'),
(18, '2019-02-23', '02', 'Others', 'Hehe', '2019-02-28', '2019-03-01', 'Armando, Alexia', '1', 'approved'),
(19, '2019-02-23', '02', 'Others', 'hehehehe', '2019-02-28', '2019-03-01', 'Armando, Alexia', '1', 'approved'),
(20, '2019-02-26', '03', 'Vacation Leave(International)', 'Hehe', '2019-03-07', '2019-03-08', 'Armando, Alexia', '1', 'pending');

--
-- Triggers `leavedb`
--
DELIMITER $$
CREATE TRIGGER `leave_notification` AFTER INSERT ON `leavedb` FOR EACH ROW INSERT INTO leaved_notification(id, employeeID, date_of_filing) VALUES (NEW.id, NEW.employeeID, NEW.date_of_filing)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `leave_notification_delete` AFTER DELETE ON `leavedb` FOR EACH ROW DELETE FROM leaved_notification WHERE id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `leaved_notification`
--

CREATE TABLE `leaved_notification` (
  `id` int(11) NOT NULL,
  `employeeID` varchar(100) NOT NULL,
  `date_of_filing` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaved_notification`
--

INSERT INTO `leaved_notification` (`id`, `employeeID`, `date_of_filing`) VALUES
(14, '02', '2019-02-23'),
(15, '02', '2019-02-23'),
(17, '02', '2019-02-23'),
(20, '03', '2019-02-26');

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
('01', 'Janelyn', 'admin', 'Admin'),
('02', 'Chesca', 'employee', 'Employee'),
('03', 'Anda', 'superadmin', 'Supervisor'),
('04', 'Noel', '12345', 'Employee'),
('05', 'Julius', '12345', 'Employee'),
('06', 'Lovely', '12345', 'Department Head'),
('09', 'chengky', '12345', 'Employee'),
('10', 'Angela', '12345', 'Employee'),
('11', 'Chel', '12345', 'Employee'),
('12345', 'sample', '12345', 'Supervisor'),
('20', 'Alexia', '12345', 'Supervisor'),
('54555', '54555', '12345', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `mr`
--

CREATE TABLE `mr` (
  `employeeID` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `mname` varchar(25) DEFAULT NULL,
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
  `mr_no` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr`
--

INSERT INTO `mr` (`employeeID`, `lname`, `fname`, `mname`, `date_assigned`, `qty`, `unit`, `property_name`, `description`, `date_purchased`, `property_no`, `classification_no`, `unit_value`, `total_value`, `mr_no`, `status`) VALUES
('02', 'Cortez', 'Franchesca Marie', 'Cadondon', '2019-02-26', '123', '123', 'PC', '123', '2019-02-26', '2018-0001-0001', '123', '123', '123', '123', 'returned'),
('02', 'Cortez', 'Franchesca Marie', 'Cadondon', '2019-02-28', '123', '123', '123', '123', '2019-02-28', '2018-0001-0002', '123', '123', '123', '123', 'approved'),
('02', 'Cortez', 'Franchesca Marie', 'Cadondon', '2019-02-28', '32', '321', '123', '123', '2019-02-21', '2018-0001-0003', '123', '123', '123', '123', 'pending'),
(NULL, NULL, NULL, NULL, '2019-02-27', '123', 'DA', 'sqadaD', 'DA', '2019-02-27', '2018-0001-0004', '34', '324', '343', '20', 'pending');

--
-- Triggers `mr`
--
DELIMITER $$
CREATE TRIGGER `mr_notification_delete` AFTER DELETE ON `mr` FOR EACH ROW DELETE FROM `mr_notification` WHERE `dateassigned` = old.date_assigned AND `property_no` = old.property_no AND `employeeID` = old.employeeID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `mr_notification_insert` AFTER INSERT ON `mr` FOR EACH ROW INSERT INTO `mr_notification`(`property_no`, `employeeID`, `dateassigned`) VALUES (new.property_no, new.employeeID, new.date_assigned)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mr_notification`
--

CREATE TABLE `mr_notification` (
  `property_no` varchar(50) NOT NULL,
  `employeeID` varchar(50) DEFAULT NULL,
  `dateassigned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr_notification`
--

INSERT INTO `mr_notification` (`property_no`, `employeeID`, `dateassigned`) VALUES
('2018-0001-0002', '', '2019-02-28'),
('2018-0001-0003', '', '2019-02-28'),
('2018-0001-0004', NULL, '2019-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `ot`
--

CREATE TABLE `ot` (
  `id` int(100) NOT NULL,
  `employeeID` varchar(50) NOT NULL,
  `date_of_filing` date NOT NULL,
  `date_of_ot` date NOT NULL,
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

INSERT INTO `ot` (`id`, `employeeID`, `date_of_filing`, `date_of_ot`, `auto_OT`, `aot_from`, `aot_to`, `hours_weekends`, `minutes_weekends`, `hours_weekdays`, `minutes_weekdays`, `task`, `authorized_by`, `status`, `remarks`) VALUES
(19, '02', '2019-02-25', '2019-02-27', '17:00 - 19:00', '17:00', '19:00', '2', '34', '2', '20', 'dasda', 'Armando, Alexia', 'approved', ''),
(20, '02', '2019-02-25', '2019-02-28', '17:00 - 19:00', '17:00', '19:00', '00', '00', '2', '00', 'Dami', 'Armando, Alexia', 'disapproved', 'ddsds');

--
-- Triggers `ot`
--
DELIMITER $$
CREATE TRIGGER `notification_ot` AFTER INSERT ON `ot` FOR EACH ROW INSERT INTO ot_notification (id, employeeID, date_of_filing) VALUES (NEW.id, NEW.employeeID, NEW.date_of_filing)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ot_notification_delete` AFTER DELETE ON `ot` FOR EACH ROW DELETE FROM ot_notification WHERE id = OLD.id
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
(13, '2018-0001-0001'),
(14, '2018-0001-0002'),
(15, '2018-0001-0003'),
(16, '2018-0001-0004'),
(17, '2019-1231-2314');

-- --------------------------------------------------------

--
-- Table structure for table `pullout`
--

CREATE TABLE `pullout` (
  `employeeID` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
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
  `mr_no` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pullout`
--

INSERT INTO `pullout` (`employeeID`, `lname`, `fname`, `mname`, `date_assigned`, `qty`, `unit`, `property_name`, `description`, `date_purchased`, `property_no`, `classification_no`, `unit_value`, `total_value`, `mr_no`, `status`) VALUES
('02', 'Cortez', 'Franchesca Marie', 'Cadondon', '2019-02-13', '123', '123', '123', '123', '2019-02-20', '12323123123', '123', '123', '123', '1231', 'approved'),
('02', 'Cortez', 'Franchesca Marie', 'Cadondon', '2019-02-27', '1234', '1234', '1234', '1234', '2019-02-27', '2018-0001-0002', '1234', '1234', '1234', '1234', 'returned');

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
(10, 'Christopher', 'Gamban', 'Lipnica'),
(20, 'Alexia', 'Armando', 'Mendoza');

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
(7, '02', 'Chesca', '123123', '0123-03-02', '0213-02-02', '12312', '123131', 'Book1.xlsx'),
(8, '02', 'Chesca', 'Title 1', '2019-02-26', '2019-02-28', '12', '1231', 'ATTENDANCE_SHEETS (1).xlsx'),
(9, '02', 'Chesca', 'qwtfewt', '4413-02-03', '0352-02-03', '325', '342', 'Evaluation (2).docx'),
(10, '02', 'Chesca', 'sfa', '6656-06-05', '0777-07-06', 'dsgs', 'dfssg', 'OT Form.docx'),
(11, '02', 'Chesca', 'fdsgfd', '0005-05-04', '0005-06-05', 'df', 'bf', 'export-to-excel.xls'),
(12, '02', 'Chesca', 'safg', '0545-03-31', '0045-05-04', 'dew', '332', 'Appendix-A.docx'),
(13, '02', 'Chesca', 'dasfd', '0023-02-02', '0004-03-31', '32423', '32432', 'pix.docx'),
(14, '02', 'Chesca', 'wqrawsf', '0014-02-23', '0004-03-31', '3432', '434', 'srf');

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
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `supervisorID` (`supervisorID`);

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`employetype_id`);

--
-- Indexes for table `emp_ot`
--
ALTER TABLE `emp_ot`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `leavedb`
--
ALTER TABLE `leavedb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaved_notification`
--
ALTER TABLE `leaved_notification`
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
-- Indexes for table `mr_notification`
--
ALTER TABLE `mr_notification`
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
-- Indexes for table `pullout`
--
ALTER TABLE `pullout`
  ADD PRIMARY KEY (`property_no`);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leavedb`
--
ALTER TABLE `leavedb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ot`
--
ALTER TABLE `ot`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ot_notification`
--
ALTER TABLE `ot_notification`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
