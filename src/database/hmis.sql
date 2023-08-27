-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 05:45 AM
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
-- Database: `hmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointement_details`
--

CREATE TABLE `appointement_details` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointement_details`
--

INSERT INTO `appointement_details` (`id`, `name`, `phone`, `email`, `date`, `time`, `address`) VALUES
(1, 'Bhatt Nishiket ', 2147483647, 'b@gmail.com', '2023-08-09', '11:15', 'scslf,elf,,, swodk, skd, 123');

-- --------------------------------------------------------

--
-- Table structure for table `patient_dti`
--

CREATE TABLE `patient_dti` (
  `id` int(10) NOT NULL,
  `reg_date` varchar(20) NOT NULL,
  `aayushmaan_no` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` text NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `marital_status` text NOT NULL DEFAULT 'single',
  `age` varchar(3) NOT NULL,
  `parent_name` varchar(20) DEFAULT NULL,
  `p_number` int(10) DEFAULT NULL,
  `emergency_contact` varchar(10) NOT NULL,
  `relationship` text NOT NULL,
  `contact_number` int(10) NOT NULL,
  `health_hestory` varchar(100) DEFAULT NULL,
  `additional_notes` varchar(100) DEFAULT NULL,
  `perement_illness` varchar(3) NOT NULL,
  `discription_illness` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_dti`
--

INSERT INTO `patient_dti` (`id`, `reg_date`, `aayushmaan_no`, `name`, `sex`, `dob`, `mobile`, `mail`, `address`, `marital_status`, `age`, `parent_name`, `p_number`, `emergency_contact`, `relationship`, `contact_number`, `health_hestory`, `additional_notes`, `perement_illness`, `discription_illness`) VALUES
(20, '26/08/2023', 4598498, 'nishiket  bhatt', 'Male', '7/9/2012', 2147483647, 'adc@gmail.com', 'dkdijeoddwds, cdidkeodkwo, jisdhviu, ldsdod, 15684', 'Married', 'Yes', 'fdbggf kkkklllllll', 2147483647, 'sooooook s', 'swodod', 1405105330, 'ewkodkeo', 'gyghiuohi', 'No', '');

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `r_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`r_id`, `name`, `email`, `password`) VALUES
(1, 'abc', 'a@gmail.com', 'abc@007'),
(3, 'Bhatt Nishiket ', 'nishiket04@gmail.com', 'cfdsvfds'),
(4, 'Bhatt Nishiket ', 'nishiket04@gmail.com', 'cfdsvfds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointement_details`
--
ALTER TABLE `appointement_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_dti`
--
ALTER TABLE `patient_dti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointement_details`
--
ALTER TABLE `appointement_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_dti`
--
ALTER TABLE `patient_dti`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `regform`
--
ALTER TABLE `regform`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
