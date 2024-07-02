-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 04:58 PM
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
-- Database: `blood_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_stock`
--

CREATE TABLE `blood_stock` (
  `blood_group_id` varchar(5) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `DonerId` int(11) NOT NULL,
  `f_name` varchar(10) DEFAULT NULL,
  `m_name` varchar(10) NOT NULL,
  `l_name` varchar(10) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `bloodgroup` varchar(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(15) DEFAULT NULL,
  `form_fill_date` date DEFAULT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`DonerId`, `f_name`, `m_name`, `l_name`, `gender`, `bloodgroup`, `email`, `contact`, `address`, `form_fill_date`, `birth_date`) VALUES
(10, 'rojan', '', 'shrestha', 'male', 'A+', 'shrestharojan902@gmail.com', 9853215, 'changu', '2024-05-01', '2002-10-10'),
(11, 'roman', '', 'shainju', 'male', 'A+', 'roman@gmail.com', 9, 'khauma', '2024-05-31', '1999-01-01'),
(12, 'roman', '', 'shainju', 'male', 'A+', 'roman@gmail.com', 9, 'khauma', '2024-05-31', '2024-06-04'),
(13, 'roman', '', 'shainju', 'male', 'A+', 'roman@gmail.com', 9, 'khauma', '2024-05-31', '1985-02-20'),
(16, 'rojan', '', 'shrestha', 'male', 'A+', 'shrestharojan902@gmail.com', 9853215, 'changu', '2024-05-29', '1985-02-05'),
(32, 'sarina', '', 'bati', 'male', 'A+', 'sarina.bati@gmail.com', 951, 'itachhe', '2024-06-20', '1852-05-08'),
(33, 'roman', '', 'shainju', 'male', 'AB-', 'roman1@gmail.com', 985522222222222, 'sf', '2024-06-17', '1999-05-05'),
(34, 'ruchi', 'genius', 'gosai', 'female', 'AB+', 'rur@gamil.com', 9744444516, 'bkt', '2024-06-20', '2000-02-02'),
(35, 'rupesh', '', 'pancha', 'male', 'AB-', 'rupeshpancha123@gmail.com', 9881353500, 'bhaktapur', '2024-06-28', '2002-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientId` int(11) NOT NULL,
  `f_name` varchar(10) NOT NULL,
  `m_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `bloodgroup` varchar(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `contact` bigint(11) DEFAULT NULL,
  `address` varchar(15) DEFAULT NULL,
  `file` varchar(11) DEFAULT NULL,
  `doctor_name` varchar(20) DEFAULT NULL,
  `hospital_name` varchar(30) DEFAULT NULL,
  `disease` varchar(30) DEFAULT NULL,
  `form_fill_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientId`, `f_name`, `m_name`, `l_name`, `gender`, `bloodgroup`, `email`, `contact`, `address`, `file`, `doctor_name`, `hospital_name`, `disease`, `form_fill_date`) VALUES
(1, 'rupesh', '', 'male', 'male', 'A+', 'rupeshpancha7@gmail.com', 564125485, 'khauma', '', 'zxv', 'hhj', 'hj', '2024-03-13'),
(31, 'sarina', '', 'bati', 'female', 'A+', 'sarina.bati@gmail.com', 9845646212, 'itachhe', '', 'kjhsdkjf', 'bakjbd', 'sdjb', '2024-05-31'),
(32, 'rohit', '', 'prajapati', 'male', 'AB+', 'rohit@gmail.com', 9801515155, 'thimi', '', 'rupesh', 'thimi', 'asd', '2024-06-04'),
(33, 'rohit', '', 'prajapati', 'male', 'A+', 'rohit@gmail.com', 9801515155, 'thimi', '', 'rupesh', 'thimi', 'asd', '2024-06-04'),
(34, 'rohit', '', 'prajapati', 'male', 'A+', 'rohit@gmail.com', 9801515155, 'thimi', '', 'rupesh', 'thimi', 'asd', '2024-06-04'),
(35, 'ram', '', 'hero', 'male', 'B-', 'ram@gmail.com', 9801515155, 'thimi', '', 'rupesh', 'thimi', 'asd', '2024-06-05'),
(36, 'asd', '', 'as', 'male', 'A+', 'asd@gmail.com', 9897456651, 'as', '', 'asd', 'asd', 'asd', '2024-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `register_donor`
--

CREATE TABLE `register_donor` (
  `DonerId` int(11) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `bloodgroup` varchar(5) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `form_fill_date` date DEFAULT NULL,
  `verified_date` date DEFAULT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_donor`
--

INSERT INTO `register_donor` (`DonerId`, `f_name`, `m_name`, `l_name`, `gender`, `bloodgroup`, `email`, `contact`, `address`, `form_fill_date`, `verified_date`, `birth_date`) VALUES
(1, 'Rupesh', '', 'Pancha', 'male', 'AB', 'rupeshpancha7@gmail.com', 0, 'khauma', '0000-00-00', '2023-06-13', NULL),
(13, 'rojan', '', 'shrestha', 'male', 'A+', 'shrestharojan902@gmail.com', 0, 'changu', '2024-05-01', '2024-05-19', NULL),
(15, 'roman', '', 'shainju', 'male', 'A+', 'roman@gmail.com', 9, 'khauma', '2024-05-31', '2024-10-19', NULL),
(17, 'roman', '', 'shainju', 'male', 'AB-', 'roman1@gmail.com', 985522222222222, 'sf', '2024-06-17', '2024-06-04', '2002-02-02'),
(18, 'sarina', '', 'bati', 'female', 'A+', 'sarina.bati@gmail.com', 951, 'itachhe', '2024-06-20', '2024-06-05', NULL),
(19, 'sarina', '', 'bati', 'female', 'A+', 'sarina.bati@gmail.com', 951, 'itachhe', '2024-06-20', '2024-06-07', NULL),
(20, 'ruchi', 'genius', 'gosai', 'female', 'AB+', 'rur@gamil.com', 9744444516, 'bkt', '2024-06-20', '2024-06-18', NULL),
(21, 'sarina', '', 'bati', 'male', 'A+', 'sarina.bati@gmail.com', 951, 'itachhe', '2024-06-20', '2024-06-22', NULL),
(22, 'rupesh', '', 'pancha', 'male', 'AB-', 'rupeshpancha123@gmail.com', 9881353500, 'bhaktapur', '2024-06-28', '2024-06-25', '2002-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `register_patient`
--

CREATE TABLE `register_patient` (
  `patientId` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `form_fill_date` date NOT NULL,
  `verified_date` date NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_patient`
--

INSERT INTO `register_patient` (`patientId`, `f_name`, `m_name`, `l_name`, `gender`, `bloodgroup`, `email`, `contact`, `address`, `file`, `doctor_name`, `hospital_name`, `disease`, `form_fill_date`, `verified_date`, `status`) VALUES
(19, 'rupesh', '', 'male', 'male', 'A+', 'rupeshpancha7@gmail.com', '564125485', 'khauma', '', 'zxv', 'hhj', 'hj', '2024-05-21', '2024-05-20', NULL),
(20, 'sarina', '', 'bati', 'female', 'A+', 'sarina.bati@gmail.com', '9845646212', 'itachhe', '', 'kjhsdkjf', 'bakjbd', 'sjhhk', '2024-05-31', '2024-05-31', NULL),
(21, 'rohit', '', 'prajapati', 'male', 'AB+', 'rohit@gmail.com', '9801515155', 'thimi', '', 'rupesh', 'thimi', 'asd', '2024-06-04', '2024-06-04', NULL),
(22, 'rohit', '', 'prajapati', 'male', 'A+', 'rohit@gmail.com', '9801515155', 'thimi', '', 'rupesh', 'thimi', 'asd', '2024-06-04', '2024-06-05', NULL),
(23, 'rohit', '', 'prajapati', 'male', 'A+', 'rohit@gmail.com', '9801515155', 'thimi', '', 'rupesh', 'thimi', 'asd', '2024-06-04', '2024-06-08', NULL),
(24, 'asd', '', 'as', 'male', 'A+', 'asd@gmail.com', '9897456651', 'as', '', 'asd', 'asd', 'asd', '2024-06-22', '2024-06-22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `role_id` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin123', 1),
(4, 'rupeshpancha7@gmail.com', 'asd', 2),
(17, 'shrestharojan902@gmail.com', 'asd', 2),
(18, 'roman@gmail.com', 'asd', 2),
(20, 'ruru', 'asd', 1),
(42, 'sarina.bati@gmail.com', 'sarinabati', 2),
(46, 'asd', 'asd12345', 1),
(47, 'roman1@gmail.com', 'bloodbank', 2),
(48, 'ruru@gamil.com', 'ruchi123', 2),
(49, 'rur@gamil.com', 'ruchi123', 2),
(56, 'rupesh', 'rupeshpancha', 3),
(58, 'rupeshpancha123@gmail.com', 'rupeshpancha', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`DonerId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientId`);

--
-- Indexes for table `register_donor`
--
ALTER TABLE `register_donor`
  ADD PRIMARY KEY (`DonerId`);

--
-- Indexes for table `register_patient`
--
ALTER TABLE `register_patient`
  ADD PRIMARY KEY (`patientId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `DonerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `register_donor`
--
ALTER TABLE `register_donor`
  MODIFY `DonerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register_patient`
--
ALTER TABLE `register_patient`
  MODIFY `patientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
