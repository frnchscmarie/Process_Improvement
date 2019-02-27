-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 02:57 PM
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
(14, '2019-0002', 'Supervisor', '1', '', '9', '10', '10', '10'),
(15, '2019-0004', 'Employee', '1', '', '-1', '10', '8', '10'),
(16, '2019-0007', 'Gellado', 'Janelyn Ann', '', '6', '10', '10', '10'),
(17, '2019-0008', 'Garcia', 'May', 'xx', '10', '10', '10', '10');

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
('2019-0001', 'Head', 'Department', '', '14', '2019-02-05', '2019-02-06', 'Vice President', 'xxxxxxxxx@gmail.com', '2019-02-04', 'Single', '12345678900', 'depthead', '12345', 'Department Head', '2019-0001'),
('2019-0002', '1', 'Supervisor', '', '13', '1999-01-30', '2019-01-02', 'Information Technolo', 'supervisor1@gmail.com', '2019-01-08', 'single', '09111111111', 'supervisor1', 'supervisor1', 'Supervisor', '2019-0001'),
('2019-0003', 'User', 'Admin', '', '8', '1999-08-08', '2019-01-02', 'Secretary', 'secretary@gmail.com', '2019-01-08', 'single', '09774643758', 'admin', 'admin', 'Admin', '2019-0002'),
('2019-0004', '1', 'Employee', '', '5', '1998-11-12', '2019-01-02', 'Information Technolo', 'employee1@gmail.com', '2019-01-08', 'single', '09774643759', 'employee1', 'employee1', 'Employee', '2019-0002'),
('2019-0007', 'Janelyn Ann', 'Gellado', '', '10', '1999-08-08', '2019-02-27', 'Information Technolo', 'janelynanngellado@gmail.com', '2019-02-27', 'Single', '09123456789', '2019-0007', '12345', 'Employee', '2019-0002'),
('2019-0008', 'May', 'Garcia', 'xx', '8', '2019-02-27', '2019-02-27', 'Information Technolo', 'xxxxxxxxx', '2019-02-27', 'Single', '09123456778', '2019-0008', '12345', 'Employee', '2019-0002');

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
('2019-0004', '1', 'Employee', '', '60', 56, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60);

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
(29, '2019-02-26', '2019-0004', 'Vacation Leave(International)', 'Singapore', '2019-03-06', '2019-03-08', '2019-0002', '3', 'approved'),
(30, '2019-02-27', '2019-0004', 'Vacation Leave(International)', 'Greece', '2019-03-07', '2019-03-14', '2019-0002', '8', 'approved'),
(31, '2019-02-27', '2019-0007', 'Vacation Leave(International)', 'Paris', '2019-03-19', '2019-03-22', '2019-0002', '4', 'approved'),
(32, '2019-02-27', '2019-0004', 'Special Leave Priveledge', 'Birthday', '2019-03-13', '2019-03-13', '2019-0002', '1', 'approved'),
(33, '2019-02-27', '2019-0004', 'Special Leave Priveledge', 'Birthday', '2019-03-06', '2019-03-06', '2019-0002', '1', 'approved');

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
('2019-0001', 'depthead', '12345', 'Department Head'),
('2019-0002', 'supervisor1', 'supervisor1', 'Supervisor'),
('2019-0003', 'admin', 'admin', 'Admin'),
('2019-0004', 'employee1', 'employee1', 'Employee'),
('2019-0007', '2019-0007', '12345', 'Employee'),
('2019-0008', '2019-0008', '12345', 'Employee');

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
(NULL, NULL, NULL, NULL, '2019-02-27', '10', '2', 'PC', 'Personal Computer', '2019-02-27', '2019-0001-0001', '0001', '25000', '50000', '0001', 'pending'),
('2019-0008', 'Garcia', 'May', 'xx', '2019-02-27', '1', '1', 'PC', 'Personal Computer', '2019-02-27', '2019-0001-0008', '0001', '50000', '50000', '0008', 'approved');

--
-- Triggers `mr`
--
DELIMITER $$
CREATE TRIGGER `mr_notification_delete` BEFORE DELETE ON `mr` FOR EACH ROW DELETE FROM mr_notification WHERE property_no = OLD.property_no
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
('2019-0001-0001', NULL, '2019-02-27');

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
(20, '02', '2019-02-25', '2019-02-28', '17:00 - 19:00', '17:00', '19:00', '00', '00', '2', '00', 'Dami', 'Armando, Alexia', 'disapproved', 'ddsds'),
(21, '2019-0004', '2019-02-27', '2019-02-27', '18:00 - 20:00', '18:00', '20:00', '00', '00', '2', '00', 'Debugging', 'Supervisor, 1', 'approved', ''),
(22, '2019-0004', '2019-02-27', '2019-02-26', '18:00 - 20:00', '18:00', '20:00', '00', '00', '2', '00', 'Debugging', 'Supervisor, 1', 'Pending', '');

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

--
-- Dumping data for table `ot_notification`
--

INSERT INTO `ot_notification` (`id`, `employeeID`, `date_of_filing`) VALUES
(22, '2019-0004', '2019-02-27');

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
(27, '2019-0001-0001'),
(28, '2019-0001-0002'),
(29, '2019-0001-0003'),
(30, '2019-0001-0008');

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

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` varchar(500) NOT NULL,
  `sv_firstname` varchar(100) NOT NULL,
  `sv_lastname` varchar(100) NOT NULL,
  `sv_middlename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `sv_firstname`, `sv_lastname`, `sv_middlename`) VALUES
('2019-0001', 'Head', 'Department', ''),
('2019-0002', '1', 'Supervisor', '');

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
(16, '2019-0004', 'employee1', 'Title 1', '2019-02-28', '2019-02-28', '8', 'Rizal', 'Doc1.docx'),
(17, '2019-0004', 'employee1', 'Training 2', '2019-02-27', '2019-02-28', '8', 'TUP', 'OT Form.pdf');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `leavedb`
--
ALTER TABLE `leavedb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ot`
--
ALTER TABLE `ot`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ot_notification`
--
ALTER TABLE `ot_notification`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
