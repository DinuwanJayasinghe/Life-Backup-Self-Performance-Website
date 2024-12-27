-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 11:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sels_performance_evaluation_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch_code` varchar(20) DEFAULT NULL,
  `branch_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch_code`, `branch_name`) VALUES
(1, 'BR001', 'Colombo Branch'),
(2, 'BR002', 'Negombo Branch'),
(3, 'BR003', 'Dehiwala Branch'),
(4, 'BR004', 'Mathara Branch');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `branch_code` varchar(50) DEFAULT NULL,
  `team_leader` varchar(100) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `cash_handed_date` date DEFAULT NULL,
  `agent_signature` varchar(20) DEFAULT NULL,
  `supervisor_code` varchar(50) DEFAULT NULL,
  `seals_agent_code` varchar(50) DEFAULT NULL,
  `policy_no` varchar(20) DEFAULT NULL,
  `payment_frequent` varchar(200) DEFAULT NULL,
  `pre_ammount` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `branch_code`, `team_leader`, `invoice_date`, `cash_handed_date`, `agent_signature`, `supervisor_code`, `seals_agent_code`, `policy_no`, `payment_frequent`, `pre_ammount`) VALUES
(1, 'BR001', 'TL001', '2024-04-04', '2024-04-11', 'Yes', 'SUP002', 'SA003', 'POL0002', 'Quarter', 'Rs 40,000.00'),
(2, 'BR002', 'TL002', '2024-04-12', '2024-04-03', 'Yes', 'SUP002', 'SA003', 'PL0001', 'Monthly', 'Rs 10,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `agent_code` varchar(20) DEFAULT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `position` varchar(150) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `agent_code`, `full_name`, `dob`, `reg_date`, `position`, `branch`, `phone`, `email`, `password`) VALUES
(1, 'SUP001', 'Saman Fernando', '1990-10-16', '2024-04-21', 'Supervisor', 'Colombo Branch', '0715471321', 'saman@gmail.com', '7890'),
(2, 'TL001', 'Kamal Gunarathne', '1976-05-30', '2024-04-28', 'Team Leader', 'Dehiwla Braanch', '0324567896', 'kamal123@gmail.com', '1234'),
(3, 'TL002', 'Sman Edirimuni', '1997-04-09', '2024-04-04', 'Team Leader', 'Negombo Branch', 'feafaeff', '0775203344', '5678'),
(4, 'SUP003', 'ddwdwdw', '2024-05-02', '2024-05-02', 'Team Leader', 'Negombo Branch', '0766661951', 'dinuwan1211@gmail.com', 'wdwd'),
(5, 'AG001', 'Malaka Godahewa', '1970-06-20', '2024-04-11', 'Team Leader', 'Negombo Branch', '0766661951', 'dinuwan1211@gmail.com', '1234'),
(6, 'CA001', 'Viahra Madushani', '1984-10-24', '2024-04-18', 'Cashier', 'Dehiwla Braanch', '0778963321', 'vihara@gmail.com', '1234'),
(7, 'MA001', 'Malan Sameera', '1986-12-11', '2024-04-28', 'Manager', 'Dehiwla Braanch', '0775031277', 'malan@gmail.com', '123456'),
(8, 'CA002', 'Sasmi Ishanka', '1998-02-13', '2024-04-29', 'Cashier', 'Negombo Branch', '0714521278', 'sasmi@gmail.com', '1234'),
(9, 'LIA001', 'Kasun Fernando', '0000-00-00', '0000-00-00', 'Life Insurance Agent', 'Negombo Branch', '0772031174', 'kasun@gmail.com', '1234'),
(10, 'SA001', 'Kavindu Lakshan', '1999-11-17', '2024-04-29', 'Seals Agent', 'Dehiwala Branch', '0778546632', 'kavindu@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
