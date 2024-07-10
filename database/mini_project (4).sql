-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 12:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `DepartmentShortName` varchar(100) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `code`, `DepartmentShortName`, `CreationDate`) VALUES
(5, 'Mechanical Engineering', '7734', 'ME', '2024-04-04 08:31:52'),
(6, 'Electrical Engineering', '1234', 'ee', '2024-04-12 23:47:51'),
(7, 'Electronics and telecommunication', 'ELE1234', 'ENTC', '2024-04-13 05:22:09'),
(8, 'None', 'None', 'NONE', '2024-04-20 12:53:17'),
(9, 'Computer Science And Engineering', '123', 'CSE', '2024-05-10 04:58:28'),
(10, 'Civil Engineering ', 'Cvil123', 'CE', '2024-05-10 05:03:49'),
(11, 'General science And Humanities ', '6797011011', 'GSH', '2024-05-11 10:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `emp_id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Dob` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Av_leave` varchar(40) NOT NULL,
  `Phonenumber` varchar(11) NOT NULL,
  `emp` int(50) NOT NULL,
  `aadhar` int(15) NOT NULL,
  `pan` varchar(30) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `subcaste` varchar(50) NOT NULL,
  `ssc` varchar(50) NOT NULL,
  `hsc` varchar(50) NOT NULL,
  `diploma` varchar(50) NOT NULL,
  `be` varchar(50) NOT NULL,
  `pg` varchar(50) NOT NULL,
  `phd` varchar(50) NOT NULL,
  `publication` varchar(50) NOT NULL,
  `journal` varchar(50) NOT NULL,
  `patent` varchar(50) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `aadhar_pdf` varchar(50) NOT NULL,
  `pan_pdf` varchar(50) NOT NULL,
  `ssc_pdf` varchar(50) NOT NULL,
  `hsc_pdf` varchar(50) NOT NULL,
  `be_pdf` varchar(50) NOT NULL,
  `pg_pdf` varchar(50) NOT NULL,
  `phd_pdf` varchar(50) NOT NULL,
  `passbook` varchar(30) NOT NULL,
  `caste_crf` varchar(30) NOT NULL,
  `caste_validity` varchar(30) NOT NULL,
  `domacile` varchar(30) NOT NULL,
  `diploma_mrk` varchar(30) NOT NULL,
  `diploma_crf` varchar(30) NOT NULL,
  `be_crf` varchar(30) NOT NULL,
  `pg_crf` varchar(30) NOT NULL,
  `phd_crf` varchar(30) NOT NULL,
  `other_mrk` varchar(30) NOT NULL,
  `other_crf` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`emp_id`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `Department`, `Address`, `Av_leave`, `Phonenumber`, `emp`, `aadhar`, `pan`, `caste`, `subcaste`, `ssc`, `hsc`, `diploma`, `be`, `pg`, `phd`, `publication`, `journal`, `patent`, `Status`, `RegDate`, `role`, `location`, `aadhar_pdf`, `pan_pdf`, `ssc_pdf`, `hsc_pdf`, `be_pdf`, `pg_pdf`, `phd_pdf`, `passbook`, `caste_crf`, `caste_validity`, `domacile`, `diploma_mrk`, `diploma_crf`, `be_crf`, `pg_crf`, `phd_crf`, `other_mrk`, `other_crf`) VALUES
(123456795, 'Pooja', 'Pondkule', 'pooja.pondkule@dnyanshree.edu.in', '202cb962ac59075b964b07152d234b70', 'female', '12 November 1992', 'CSE', 'Satara', '12', '9356955133', 123445678, 2147483647, 'asd123fgh', 'hindu', 'hindu', '89', '78', 'none', '9', '9', '9', '1', '1', '0', 1, '2024-04-12 23:56:20', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456801, 'Sameer', 'Kazi', 'sameer@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '01 January 1979', 'NONE', 'Satara', '12', '1234567890', 1234567, 123456789, '123456789', 'Hindu', 'hindu', '90', '90', '9', '9', '9', '0', '0', '0', '0', 1, '2024-05-10 04:57:05', 'Admin', 'OIP.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123456802, 'Sham', 'Kosbatwar', 'sham@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '01 January 1979', 'CSE', 'Satara', '12', '123467890', 12345678, 123456789, '123456789', 'hindu', 'hindu', '89', '90', '9', '9', '9', '9', '70', '50', '70', 1, '2024-05-10 05:06:33', 'HOD', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123456803, 'Gunjan', 'Deo', 'gunjan@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '01 January 1979', 'CSE', 'Satara', '12', '1234567890', 123456789, 2147483647, 'wer5678yio', 'hindu', 'hindu', '80', '75', 'none', '8', '8', 'none', '1', '1', '0', 1, '2024-05-10 05:08:17', 'Staff', 'OIP.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123456804, 'Pooja ', 'Pondkule', 'pooja@gmail.com', '202cb962ac59075b964b07152d234b70', 'female', '01 January 1979', 'CSE', 'Satara', '12', '1234567890', 2147483647, 2147483647, 'ada883aff', 'hindu', 'hindu', '89', 'none', '83', '8.7', '8.5', '8.6', '1', '1', '0', 1, '2024-05-10 05:12:07', 'Staff', 'OIP (1).jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123456805, 'Mayuri ', 'Ghorpade', 'mayuri@gmail.com', '202cb962ac59075b964b07152d234b70', 'female', '01 January 1979', 'CSE', 'Satara', '12', '1234567890', 2147483647, 2147483647, 'asd789tyy', 'hindu', 'hindu', '89', 'none', '89', '8.2', '8.2', '8.5', '1', '1', '0', 1, '2024-05-10 05:14:08', 'Staff', 'OIP (1).jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123456806, 'Dipali', 'Karche', 'dipali@gmail.com', '202cb962ac59075b964b07152d234b70', 'female', '01 January 1979', 'CSE', 'Satara', '10', '1234567890', 2147483647, 2147483647, 'uio124tyu', 'hindu', 'hindu', '89', '90', 'none', '8.3', '8.3', 'none', '1', '1', '0', 1, '2024-05-10 05:15:28', 'Staff', 'OIP (1).jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123456807, 'Ajay', 'Jadhav', 'ajay@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '01 January 1979', '', 'Satara', '12', '1234567890', 2147483647, 1234567890, '1234567890', 'Hindu', 'hind', '99%', 'none', '99.1%', '9', '9', '90', '60', '40', '80', 1, '2024-05-10 05:17:36', 'Principal', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblleaves`
--

CREATE TABLE `tblleaves` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` date NOT NULL,
  `AdminRemark` mediumtext DEFAULT NULL,
  `registra_remarks` mediumtext NOT NULL,
  `principalRemark` mediumtext NOT NULL,
  `principal_remark` varchar(255) NOT NULL,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `principal_remark_date` varchar(255) NOT NULL,
  `Status` int(1) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT 0,
  `principal_status` int(11) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL,
  `num_days` int(11) NOT NULL,
  `leave_pdf` varchar(50) NOT NULL,
  `dateA` varchar(60) NOT NULL,
  `existing_loadA` varchar(60) NOT NULL,
  `schedule_timeA` varchar(60) NOT NULL,
  `classA` varchar(60) NOT NULL,
  `alternative_facultyA` varchar(60) NOT NULL,
  `date1` varchar(60) NOT NULL,
  `existing_load` varchar(60) NOT NULL,
  `schedule_time` varchar(60) NOT NULL,
  `class` varchar(60) NOT NULL,
  `alternative_faculty` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblleaves`
--

INSERT INTO `tblleaves` (`id`, `LeaveType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `registra_remarks`, `principalRemark`, `principal_remark`, `AdminRemarkDate`, `principal_remark_date`, `Status`, `admin_status`, `principal_status`, `IsRead`, `empid`, `num_days`, `leave_pdf`, `dateA`, `existing_loadA`, `schedule_timeA`, `classA`, `alternative_facultyA`, `date1`, `existing_load`, `schedule_time`, `class`, `alternative_faculty`) VALUES
(57, 'Medical Leave', '2024-05-11', '2024-05-12', 'Feaver', '2024-05-10', 'asd', 'asdf', '', 'qwee', '2024-05-10 22:11:26 ', '2024-05-10 22:12:28 ', 1, 1, 1, 3, 123456806, 2, '', '2024-05-10', 'Sy b.tech', '10.00am', 'Ty b.tech', 'G.H.Deo', 'none', 'none', 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(200) DEFAULT NULL,
  `date_from` varchar(200) NOT NULL,
  `date_to` varchar(200) NOT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblleavetype`
--

INSERT INTO `tblleavetype` (`id`, `LeaveType`, `date_from`, `date_to`, `Description`, `CreationDate`) VALUES
(5, 'Casual Leave', '', '', 'Casual Leave', '2021-05-19 14:32:03'),
(6, 'Medical Leave', '', '', 'Medical Leave', '2021-05-19 15:29:05'),
(8, 'Other', '', '', 'Leave all staff', '2021-05-20 17:17:43'),
(9, 'family Leave', '', '', 'xyz', '2024-04-04 14:04:16'),
(10, 'Emergency ', '', '', 'qwe', '2024-04-04 14:09:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tblleaves`
--
ALTER TABLE `tblleaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`empid`);

--
-- Indexes for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
