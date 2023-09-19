-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 10:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgjdonors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_phone` varchar(30) NOT NULL,
  `admin_passord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_phone`, `admin_passord`) VALUES
(1, 'Mamun All Rasid', '7001731589', 'MamunAllRasid');

-- --------------------------------------------------------

--
-- Table structure for table `blood_center_list`
--

CREATE TABLE `blood_center_list` (
  `center_id` int(11) NOT NULL,
  `district_id` int(50) NOT NULL,
  `blood_center_list` varchar(250) NOT NULL,
  `blood_center_status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_center_list`
--

INSERT INTO `blood_center_list` (`center_id`, `district_id`, `blood_center_list`, `blood_center_status`) VALUES
(1, 1, 'Raiganj Govt. Medical College & Hosital Blood Center', 1),
(2, 1, 'Islampur S.D.Hospital Blood Centre', 1),
(3, 1, 'Biswajit Mess', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ph_no` varchar(15) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `ph_no`, `msg`, `date`, `time`) VALUES
(1, 'Mamun All Rasid', 'mamunallrasid20@gmail.com', '7001731578', 'Nice Website', '2023-08-13', '00:00:00'),
(2, 'Mamun', 'm@gmail.com', '7001731578', 'Hello', '2023-08-13', '00:00:00'),
(3, 'Mamun All Rasid', 'mamunallrasid20@gmail.com', '7001731589', 'Ok Done', '2023-08-13', '00:38:34'),
(4, 'M Rasid', 'm@gmail.com', '7001731589', 'Nice Approch', '2023-08-15', '22:26:55'),
(5, 'Nana', 'iamsarforaj@gmail.com', '7098765432', 'Hello', '2023-08-23', '00:39:04'),
(6, 'Mamun', 'mamun@gmail.com', '7001731567', 'Hello', '2023-09-01', '02:32:01'),
(7, 'Mamun All Rasid', 'mamunall@gmail.com', '7001731589', 'Ok Done', '2023-09-18', '11:45:35'),
(8, 'ok', 'ok@gmail.com', '5612873265', 'Ok Thanks', '2023-09-18', '23:31:13'),
(9, 'Mamun', 'support@rgjblooddonors.in', '', 'Ok Thank You', '2023-09-18', '23:34:05'),
(10, 'ok', 'ok@gmail.com', '', 'ok DOne', '2023-09-18', '23:38:08'),
(11, 'Mamun', 'support@rgjblooddonors.in', '', 'Analysis', '2023-09-18', '23:39:22'),
(12, 'support@rgjblooddonors.in', 'support@rgjblooddonors.in', '', 'support@rgjblooddonors.in', '2023-09-18', '23:42:41'),
(13, 'support@rgjblooddonors.in', 'support@rgjblooddonors.in', '', 'support@rgjblooddonors.in', '2023-09-18', '23:45:44'),
(14, 'support@rgjblooddonors.in', 'support@rgjblooddonors.in', '', 'support@rgjblooddonors.in', '2023-09-18', '23:48:59'),
(15, 'support@rgjblooddonors.in', 'support@rgjblooddonors.in', '', 'support@rgjblooddonors.in', '2023-09-18', '23:50:39'),
(16, 'Mamun ALl Rasid', 'support@rgjblooddonors.in', '', 'support@rgjblooddonors.in', '2023-09-18', '23:55:20'),
(17, 'Rasid All Mamun', 'mamunallrasid20@gmail.com', '', 'Thanks', '2023-09-18', '23:58:23'),
(18, 'M', 'support@rgjblooddonors.in', '', 'support@rgjblooddonors.in', '2023-09-19', '00:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `district_list`
--

CREATE TABLE `district_list` (
  `id` int(11) NOT NULL,
  `state_id` int(50) NOT NULL,
  `district_name` varchar(30) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district_list`
--

INSERT INTO `district_list` (`id`, `state_id`, `district_name`, `status`) VALUES
(1, 1, 'Uttar Dinajpur', 1),
(2, 1, 'Malda', 0),
(3, 1, 'Dakshin Dinajpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donor_registation`
--

CREATE TABLE `donor_registation` (
  `registation_id` int(11) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `donor_name` varchar(30) NOT NULL,
  `donr_dob` date NOT NULL,
  `donor_gender` varchar(30) NOT NULL,
  `donor_mobile_number` varchar(15) NOT NULL,
  `donor_email` varchar(40) NOT NULL,
  `donor_state` int(30) NOT NULL,
  `donor_district` int(30) NOT NULL,
  `donor_blood_center` int(30) NOT NULL,
  `donor_blood_available` int(30) NOT NULL,
  `status_update_date` date NOT NULL,
  `delete_status` int(100) NOT NULL,
  `registation_date` date NOT NULL,
  `registation_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_registation`
--

INSERT INTO `donor_registation` (`registation_id`, `blood_group`, `donor_name`, `donr_dob`, `donor_gender`, `donor_mobile_number`, `donor_email`, `donor_state`, `donor_district`, `donor_blood_center`, `donor_blood_available`, `status_update_date`, `delete_status`, `registation_date`, `registation_time`) VALUES
(1, 'B+', 'Mamun All Rasid', '2002-04-18', 'Male', '7001731589', 'mamunallrasid20@gmail.com', 1, 1, 1, 1, '2023-08-30', 0, '2023-08-23', '01:15:56'),
(2, 'A+', 'A+ blood', '2000-01-01', 'Male', '0000000000', '', 1, 1, 1, 1, '2023-08-24', 0, '2023-08-23', '21:52:42'),
(3, 'O-', 'Juel Rana', '2000-01-01', 'Male', '1111111111', '', 1, 1, 1, 1, '2023-08-30', 0, '2023-08-23', '21:55:15'),
(4, 'B+', 'Sushama Parvin Ahammed', '2000-01-01', 'Female', '8170969489', 'susma@gmail.com', 1, 1, 1, 1, '2023-08-26', 1, '2023-08-25', '20:47:14'),
(5, 'B+', 'Bapi Haldar', '2000-01-01', 'Male', '2222222222', '', 1, 1, 1, 0, '2023-12-18', 0, '2023-08-25', '20:52:16'),
(6, 'A+', 'Baisu', '2000-01-01', 'Male', '9999999999', '', 1, 1, 2, 0, '2023-11-28', 0, '2023-08-25', '22:26:28'),
(7, 'B+', 'Shibam Ghosh', '2002-04-26', 'Male', '6295375881', '', 1, 1, 1, 1, '2023-08-30', 1, '2023-08-30', '20:12:50'),
(8, 'B+', 'Test', '2005-09-01', 'Female', '7001731567', '', 1, 1, 1, 0, '2023-12-07', 0, '2023-09-01', '02:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image_path`, `date`, `time`) VALUES
(6, 'Mamun All Rasid', 'WhatsApp Image 2023-08-20 at 14.50.15.jpg', '2023-08-20', '14:51:04'),
(7, 'Osman Goni', 'WhatsApp Image 2023-08-20 at 14.56.08.jpg', '2023-08-20', '14:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `log_info`
--

CREATE TABLE `log_info` (
  `id` int(11) NOT NULL,
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `activities` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_info`
--

INSERT INTO `log_info` (`id`, `admin_id`, `admin_name`, `title`, `activities`, `date`, `time`) VALUES
(1, 1, 'Mamun All Rasid', 'Blood Center Status Update', ' Blood Center Status Updated by <b>Mamun All Rasid</b> Blood Center Name3', '2023-08-27', '00:15:25'),
(2, 1, 'Mamun All Rasid', 'Blood Center Add', 'New Blood Center Add by <b>Mamun All Rasid</b> & New Blood Center Name IsGangrampur Blood Bank', '2023-08-27', '00:21:32'),
(3, 1, 'Mamun All Rasid', 'Blood Center Status Update', ' Blood Center Status Updated by <b>Mamun All Rasid</b> Blood Center Name4', '2023-08-27', '00:30:06'),
(4, 1, 'Mamun All Rasid', 'Blood Center Status Update', ' Blood Center Status Updated by <b>Mamun All Rasid</b> Blood Center Name4', '2023-08-27', '00:32:13'),
(5, 1, 'Mamun All Rasid', 'District Status Change', ' Disrtict Status Change by <b>Mamun All Rasid</b> District Name Is\n', '2023-08-27', '00:33:44'),
(6, 0, '', 'Admin Logout', 'An Admin logout ,Admin Name <b></b> & Logout Time 00:52:09 am', '2023-08-27', '00:52:09'),
(7, 0, '', 'Admin Login', 'An Admin Login ,Admin Name <b></b> & Login Time 00:53:04 am', '2023-08-27', '00:53:04'),
(8, 0, '', 'Admin Logout', 'An Admin logout ,Admin Name <b></b> & Logout Time 00:53:39 am', '2023-08-27', '00:53:39'),
(9, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 00:54:45 am', '2023-08-27', '00:54:45'),
(10, 1, 'Mamun All Rasid', 'Admin Logout', 'An Admin logout ,Admin Name <b>Mamun All Rasid</b> & Logout Time 00:55:14 am', '2023-08-27', '00:55:14'),
(11, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 00:56:09 am', '2023-08-27', '00:56:09'),
(12, 1, 'Mamun All Rasid', 'Admin Logout', 'An Admin logout ,Admin Name <b>Mamun All Rasid</b> & Logout Time 00:59:50 am', '2023-08-27', '00:59:50'),
(13, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 01:00:06 am', '2023-08-27', '01:00:06'),
(14, 1, 'Mamun All Rasid', 'Email Reply', 'Send A Email Reply by <b>Mamun All Rasid</b> & Email Message Is  $server=new Main_Class();', '2023-08-27', '01:02:14'),
(15, 1, 'Mamun All Rasid', 'Blood Donor Image Add', 'New Blood Donor Image Add by <b>Mamun All Rasid</b> & Blood Donor Name Test', '2023-08-27', '01:03:12'),
(16, 1, 'Mamun All Rasid', 'Blood Donor Image Delete', 'Blood Donor Image Deleted by <b>Mamun All Rasid</b> & Blood Donor Image  Name header_1.jpg', '2023-08-27', '01:03:39'),
(17, 1, 'Mamun All Rasid', 'District Status Change', ' Disrtict Status Change by <b>Mamun All Rasid</b>', '2023-08-27', '01:03:59'),
(18, 1, 'Mamun All Rasid', 'Blood Center Status Update', ' Blood Center Status Updated by <b>Mamun All Rasid</b>', '2023-08-27', '01:04:08'),
(19, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 23:32:26 pm', '2023-08-27', '23:32:26'),
(20, 1, 'Mamun All Rasid', 'Blood Custom Date', 'Blood Availability Custom date Update By by <b>Mamun All Rasid</b> & New Custom date Date2023-08-28', '2023-08-28', '00:03:09'),
(21, 1, 'Mamun All Rasid', 'Blood Availability Update', 'Blood Donor Availability Update By by <b>Mamun All Rasid</b> & New Update Status Date2023-11-28', '2023-08-28', '00:03:46'),
(22, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 22:24:09 pm', '2023-08-29', '22:24:09'),
(23, 1, 'Mamun All Rasid', 'Blood Center Add', 'New Blood Center Add by <b>Mamun All Rasid</b> & New Blood Center Name Is ok', '2023-08-29', '22:28:48'),
(24, 1, 'Mamun All Rasid', 'Blood Center Add', 'New Blood Center Add by <b>Mamun All Rasid</b> & New Blood Center Name Is ok', '2023-08-29', '22:28:57'),
(25, 1, 'Mamun All Rasid', 'Blood Center Add', 'New Blood Center Add by <b>Mamun All Rasid</b> & New Blood Center Name Is Done', '2023-08-29', '22:29:11'),
(26, 1, 'Mamun All Rasid', 'Blood Center Add', 'New Blood Center Add by <b>Mamun All Rasid</b> & New Blood Center Name Is ok Done', '2023-08-29', '22:29:24'),
(27, 1, 'Mamun All Rasid', 'Blood Center Add', 'New Blood Center Add by <b>Mamun All Rasid</b> & New Blood Center Name Is Hey', '2023-08-29', '22:29:36'),
(28, 1, 'Mamun All Rasid', 'Blood Center Add', 'New Blood Center Add by <b>Mamun All Rasid</b> & New Blood Center Name Is Gangrampur', '2023-08-29', '22:29:55'),
(29, 1, 'Mamun All Rasid', 'Blood Center Add', 'New Blood Center Add by <b>Mamun All Rasid</b> & New Blood Center Name Is Null', '2023-08-29', '22:30:08'),
(30, 1, 'Mamun All Rasid', 'Blood Availability Update', 'Blood Donor Availability Update By by <b>Mamun All Rasid</b> & New Update Status Date 2023-08-30', '2023-08-30', '20:02:55'),
(31, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 20:32:51 pm', '2023-08-30', '20:32:51'),
(32, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 20:39:29 pm', '2023-08-30', '20:39:29'),
(33, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 21:14:44 pm', '2023-08-30', '21:14:44'),
(34, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 12:03:55 pm', '2023-09-18', '12:03:55'),
(35, 1, 'Mamun All Rasid', 'Blood Availability Update', 'Blood Donor Availability Update By by <b>Mamun All Rasid</b> & New Update Status Date 2023-12-18', '2023-09-18', '12:04:35'),
(36, 1, 'Mamun All Rasid', 'Admin Login', 'An Admin Login ,Admin Name <b>Mamun All Rasid</b> & Login Time 21:00:51 pm', '2023-09-18', '21:00:51'),
(37, 1, 'Mamun All Rasid', 'Email Reply', 'Send A Email Reply by <b>Mamun All Rasid</b> & Email Message Is  ok', '2023-09-18', '21:01:08'),
(38, 1, 'Mamun All Rasid', 'Email Reply', 'Send A Email Reply by <b>Mamun All Rasid</b> & Email Message Is  Ok Thank You', '2023-09-18', '21:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `state_name`) VALUES
(1, 'West Bengal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blood_center_list`
--
ALTER TABLE `blood_center_list`
  ADD PRIMARY KEY (`center_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_list`
--
ALTER TABLE `district_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registation`
--
ALTER TABLE `donor_registation`
  ADD PRIMARY KEY (`registation_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_info`
--
ALTER TABLE `log_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_center_list`
--
ALTER TABLE `blood_center_list`
  MODIFY `center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `district_list`
--
ALTER TABLE `district_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donor_registation`
--
ALTER TABLE `donor_registation`
  MODIFY `registation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `log_info`
--
ALTER TABLE `log_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
