-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 11:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2020-11-03 05:55:30');

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
(2, 'Information Technologies', '6789', 'ICT', '2017-11-01 07:19:37'),
(3, 'Library', '7894', 'LIb', '2021-05-21 08:27:45'),
(4, 'Computer science ', '123', 'Cs', '2024-03-20 17:23:17'),
(5, 'Mechanical', '7734', 'ME', '2024-04-04 14:01:52'),
(6, 'electrical', 'mah', 'ee', '2024-04-13 05:17:51'),
(7, 'Electronics and telecommunication', 'ELE1234', 'ENTC', '2024-04-13 10:52:09'),
(8, 'None', 'None', 'NONE', '2024-04-20 18:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocument`
--

CREATE TABLE `tbldocument` (
  `doc_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `pan_pdf` varchar(255) NOT NULL,
  `aadhar_pdf` varchar(255) NOT NULL,
  `passbook` varchar(255) NOT NULL,
  `caste_crf` varchar(255) NOT NULL,
  `caste_val` varchar(255) NOT NULL,
  `domacile` varchar(255) NOT NULL,
  `ssc_mrk` varchar(255) NOT NULL,
  `hsc_mrk` varchar(255) NOT NULL,
  `diploma_mrk` varchar(255) NOT NULL,
  `diploma_crf` varchar(255) NOT NULL,
  `ug_mrk` varchar(255) NOT NULL,
  `ug_crf` varchar(255) NOT NULL,
  `pg_mrk` varchar(255) NOT NULL,
  `pg_crf` varchar(255) NOT NULL,
  `phd_mrk` varchar(255) NOT NULL,
  `phd_crf` varchar(255) NOT NULL,
  `other_mrk` varchar(255) NOT NULL,
  `other_crf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(0, 'Edemy', 'Mcwilliams', 'james@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male', '3 February, 1990', 'NONE', 'N NEPO', '30', '8587944255', 2130190, 2147483647, 'opi789yuo', 'hindu', 'hindu', '78', '78', '56', '89', '81', '76', 'abc', 'abc', 'abc', 1, '2017-11-10 13:40:02', 'Admin', 'OIP.jpg', 'unit 1.pdf', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(4, 'Nathaniel', 'Nkrumah', 'nat@gmail.com', 'b4cc344d25a2efe540adbf2678e2304c', 'Male', '3 February, 1990', 'ICT', 'N NEPO', '30', '587944255', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-10 13:40:02', 'Admin', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(5, 'Gideon', 'Annan', 'gideon@gmail.com', 'b4cc344d25a2efe540adbf2678e2304c', 'Male', '3 February, 1990', 'ICT', 'N NEPO', '30', '587944255', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-10 13:40:02', 'HOD', 'photo5.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(7, 'Bridget', 'Gafa', 'bridget@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', '3 February, 1990', 'ICT', 'N NEPO', '-4', '0596667981', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-10 13:40:02', 'Staff', '1920_File_logo4.png', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(8, 'Anna', 'Mensah', 'an@gmail.com', 'b4cc344d25a2efe540adbf2678e2304c', 'Female', '3 February, 1990', 'LIb', 'N NEPO', '30', '587944255', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2017-11-10 13:40:02', 'HOD', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(10, 'prem', 'shinde', 'prem@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '11 October 2023', 'ICT', 'jdli', '9', '07499034380', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2023-10-07 08:30:58', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(11, 'aakash', 'Kolhapure', 'aakash@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '08/03/2007', 'ICT', 'satara', '21', '07499034380', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-03-19 15:04:11', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(12, 'ron', 'sharma', 'ron@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'male', '07 March 2024', 'NONE', 'pune', '20', '08983081348', 894, 78944646, 'fsd45524dsds', 'sd', 'sdf', '4565', '55', '23', '54', '54', '45', 'sd', 'df', 'df', 1, '2024-03-19 16:43:14', 'Principal', 'OIP.jpg', 'hall ticket.pdf', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123, 'Aaditya', 'kolhapure', 'aadityakolhapure28@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'male', '29 March 2024', 'Cs', 'st colony satara', '7', '8983081348', 12389, 41456, '2242', 'asd', 'fdsf', '87', '89', '12', '89', '48', '78', '44', 'dsjk', 'asknda', 1, '2024-03-20 10:27:59', 'Staff', 'OIP.jpg', 'asd2.pdf', 'tblleaves.pdf', 'dataBase.pdf', 'DigitalLogic_FlipFlops.pdf', 'exp 5 se.pdf', 'php.pdf', 'unit 1.pdf', 'tblleaves.pdf', 'unit 1.pdf', 'micro_report.pdf', 'unit 1.pdf', 'ads.pdf', '17-aaditya-kolhapure-f0cde98f-', 'ads.pdf', 'dataBase.pdf', 'hall ticket.pdf', '0', '0'),
(12334, 'pranav', 'kadam', 'pravan@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '07 March 2024', 'Cs', 'satara', '30', '123465432', 12334, 5464646, 'sffsaf545ef', 'asd', 'dasd', '78', '89', '89', '45', '54', '45', 'adas', 'ds', 'as', 1, '2024-03-20 16:11:33', 'HOD', 'OIP.jpg', 'exp4 se.pdf', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456793, 'Rushikesh', 'mote', 'rushi@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '20 April 2003', 'ME', 'satara', '30', '1234567890', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-04-04 14:37:39', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456794, 'amit', 'Patil', 'amit@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '04 April 2003', 'Cs', 'pune', '30', '123465432', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-04-11 08:15:19', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456795, 'Pooja', 'Pondkule', 'pooja.pondkule@dnyanshree.edu.in', '202cb962ac59075b964b07152d234b70', 'female', '12 November 1992', 'Cs', 'Satara', '0', '9356955133', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-04-13 05:26:20', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456796, 'Gaurav', 'Kamble', 'aadityakolhapure17@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '12 November 1992', 'ICT', 'Satara', '30', '8080346865', 0, 0, '283471291312', 'sdfds', 'fdsf', '213', '32', '321', '32', '312', '32', 'sdsddf', 'fsdf', 'sdf', 1, '2024-04-13 10:54:47', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', 'calculator.pdf', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456797, 'Pravin', 'Kadam', 'kolhapureaaditya25@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '12 April 2024', 'Cs', 'satara', '30', '7894561230', 0, 0, 'g', 'ch', 'hvj', '54646', '12', '<br /><b>Warning</b>:  Undefined array key ', '1121', '212', '11', 'jfksldf', 'dfshk', 'fdfkj', 1, '2024-04-17 18:09:02', 'HOD', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456798, 'aakash', 'shinde', '@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '05 April 1989', 'Cs', 'sataara', '12', '4561237890', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-04-20 08:05:53', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456799, 'prasad', 'xyz', 'aaditya28kolhapure@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '06 April 2024', 'Cs', 'satara', '12', '456789123', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-04-20 08:13:00', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0'),
(123456800, 'vinod', 'asd', 'aditya28kolhapure@gmail.com', '202cb962ac59075b964b07152d234b70', 'male', '10 April 2024', 'Cs', 'sdasd', '12', '123456789', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 1, '2024-04-20 08:15:00', 'Staff', 'NO-IMAGE-AVAILABLE.jpg', '', '', '', '', '', '', '', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0');

--
-- Triggers `tblemployees`
--
DELIMITER $$
CREATE TRIGGER `before_employee_delete` BEFORE DELETE ON `tblemployees` FOR EACH ROW BEGIN
  -- Trigger logic goes here
  -- Example: Insert record into audit table
  INSERT INTO employee_audit (emp_id, action_taken, action_date)
  VALUES (OLD.emp_id, 'DELETE', NOW());
END
$$
DELIMITER ;

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
  `leave_pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblleaves`
--

INSERT INTO `tblleaves` (`id`, `LeaveType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `registra_remarks`, `principalRemark`, `principal_remark`, `AdminRemarkDate`, `principal_remark_date`, `Status`, `admin_status`, `principal_status`, `IsRead`, `empid`, `num_days`, `leave_pdf`) VALUES
(13, 'Casual Leave', '2021-05-02', '2021-05-12', 'I want to take a leave.', '2021-05-20', 'Ok', 'ok', '', '', '2021-05-24 20:26:19 ', '', 1, 1, 0, 1, 7, 3, ''),
(14, 'Medical Leave', '08-05-2021', '11-05-2021', 'Noted', '0000-00-00', 'Not this time', '', '', '', '2021-05-21 0:31:10 ', '', 0, 0, 0, 1, 6, 4, ''),
(16, 'Casual Leave', '02-05-2021', '05-05-2021', 'Nice Leave', '2021-05-20', 'Ok', 'Noted', '', '', '2021-05-24 20:42:18 ', '', 1, 1, 0, 1, 7, 4, ''),
(17, 'Casual Leave', '11-05-2021', '15-05-2021', 'Just', '2021-05-21', 'Leave Approved', 'Noted', '', '', '2021-05-24 19:56:45 ', '', 1, 1, 0, 1, 7, 5, ''),
(18, 'Casual Leave', '10-10-2023', '14-10-2023', 'abc', '2023-10-06', 'xyz', 'abc', '', '', '2023-10-07 13:50:15 ', '', 1, 1, 0, 1, 7, 5, ''),
(19, 'Medical Leave', '13-10-2023', '15-10-2023', 'xyz', '2023-10-07', 'mibn', 'vv', '', '', '2023-10-07 14:07:34 ', '', 1, 1, 0, 1, 10, 3, ''),
(20, 'Casual Leave', '08-03-2024', '16-03-2024', 'xyz', '2024-03-19', 'xyz\r\n', 'abc\r\n', '', '', '2024-03-19 20:41:20 ', '', 1, 1, 0, 1, 11, 9, ''),
(21, 'Casual Leave', '20-03-2024', '21-03-2024', 'abc\r\n', '2024-03-19', 'dfg', 'Leave was Rejected. Registra/Registry will not see it', '', '', '2024-04-04 19:46:11 ', '', 2, 2, 0, 1, 11, 2, ''),
(22, 'Casual Leave', '22-03-2024', '23-03-2024', 'xyz', '2024-03-21', 'abc', 'abc\r\n', '', '', '2024-03-21 10:48:09 ', '', 1, 1, 0, 1, 12345, 2, ''),
(24, 'Medical Leave', '30-03-2024', '31-03-2024', '123', '2024-03-29', 'zxcv', '', '', '', '2024-03-29 21:04:17 ', '', 1, 0, 0, 1, 12345, 2, ''),
(25, 'family Leave', '05-04-2024', '06-04-2024', 'abc', '2024-04-04', 'asd', 'Leave was Rejected. Registra/Registry will not see it', '', '', '2024-04-04 19:45:22 ', '', 1, 2, 0, 1, 12345, 2, ''),
(30, 'Other', '13-04-2024', '14-04-2024', 'qwe', '2024-04-06', 'wer', 'Leave was Rejected. Registra/Registry will not see it', '', '', '2024-04-06 21:05:32 ', '', 2, 2, 0, 1, 123456, 2, ''),
(31, 'Medical Leave', '12-04-2024', '12-04-2024', 'qwe', '2024-04-11', 'qwe', 'qwe', '', '', '2024-04-13 10:52:35 ', '', 1, 1, 0, 1, 123, 1, ''),
(32, 'family Leave', '12-04-2024', '13-04-2024', 'Vaccation', '2024-04-12', 'qwe', 'Leave was Rejected. Registra/Registry will not see it', '', '', '2024-04-13 9:53:48 ', '', 2, 2, 0, 1, 123, 2, ''),
(33, 'Casual Leave', '15-04-2024', '15-04-2024', 'personal ', '2024-04-13', 'asd', 'asdfjs', '', '', '2024-04-14 17:41:29 ', '', 1, 1, 0, 1, 123, 1, ''),
(34, 'Casual Leave', '20-04-2024', '20-04-2024', 'Election Duty', '2024-04-13', 'Lwp', 'Leave was Rejected. Registra/Registry will not see it', '', '', '2024-04-20 13:19:27 ', '', 2, 2, 2, 1, 123456795, 1, ''),
(35, 'Casual Leave', '14-04-2024', '15-04-2024', 'personal ', '2024-04-13', 'qwe\r\n', 'Leave was Rejected. Registra/Registry will not see it', '', '', '2024-04-15 16:00:52 ', '', 2, 2, 0, 1, 123456796, 2, ''),
(38, 'Other', '16-04-2024', '17-04-2024', 'qwe', '2024-04-15', 'qwe', '123sda', '', 'asd', '2024-04-15 23:29:07 ', '2024-04-16 0:07:23 ', 1, 1, 1, 1, 123456796, 2, ''),
(39, 'Medical Leave', '17-04-2024', '18-04-2024', 'qwe', '2024-04-15', 'zxc', 'asd', '', '123bfg', '2024-04-16 0:23:18 ', '2024-04-16 0:31:42 ', 1, 1, 1, 1, 123456796, 2, ''),
(40, 'Casual Leave', '19-04-2024', '19-04-2024', 'asd', '2024-04-16', 'asd', 'qwe\r\n', '', '123gh', '2024-04-16 9:19:43 ', '2024-04-16 9:51:41 ', 1, 1, 1, 1, 123456796, 1, ''),
(41, 'Medical Leave', '17-04-2024', '17-04-2024', 'asd', '2024-04-16', 'qwe', 'asd', '', 'qwe', '2024-04-16 10:00:50 ', '2024-04-16 10:04:34 ', 1, 1, 1, 1, 123456796, 1, '');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldocument`
--
ALTER TABLE `tbldocument`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `fk_tbldocument_tblemployees` (`employee_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456801;

--
-- AUTO_INCREMENT for table `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbldocument`
--
ALTER TABLE `tbldocument`
  ADD CONSTRAINT `fk_tbldocument_tblemployees` FOREIGN KEY (`employee_id`) REFERENCES `tblemployees` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
