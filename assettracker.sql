-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 06:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assettracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `fa_data`
--

CREATE TABLE `fa_data` (
  `MovementID` int(11) NOT NULL,
  `MovementDate` date DEFAULT NULL,
  `AssetMovementType` varchar(50) DEFAULT NULL,
  `TicketNumber` int(11) DEFAULT NULL,
  `AssetTag` varchar(50) DEFAULT NULL,
  `AssetType` varchar(50) DEFAULT NULL,
  `FromWorkstation` varchar(50) DEFAULT NULL,
  `ToWorkstation` varchar(50) DEFAULT NULL,
  `EmployeeAssignment` varchar(100) DEFAULT NULL,
  `AccountDepartment` varchar(100) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL,
  `Site` varchar(50) DEFAULT NULL,
  `AssetChecker` varchar(50) DEFAULT NULL,
  `AssetListWork` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fa_data`
--

INSERT INTO `fa_data` (`MovementID`, `MovementDate`, `AssetMovementType`, `TicketNumber`, `AssetTag`, `AssetType`, `FromWorkstation`, `ToWorkstation`, `EmployeeAssignment`, `AccountDepartment`, `Timestamp`, `Site`, `AssetChecker`, `AssetListWork`) VALUES
(1, '2024-10-22', 'Asset Transfer Request', 995634, 'BACTEMP-CPU-01', 'CPU Set', 'BCDP-015', 'BCDP-015', 'F04580 - Gonzales, Joshua Laurel', 'TL', '2024-10-22 15:34:06', 'Home Invest', 'Active', 'BCDP-015');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_access` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `user_access`) VALUES
(1, 'cj', '123', 'admin'),
(1, 'cj', '123', 'admin'),
(0, 'cj', '$2y$10$ByeDy9yDkWFQA', ''),
(0, 'cj', '$2y$10$bQSOvBrKFxX.7', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fa_data`
--
ALTER TABLE `fa_data`
  ADD PRIMARY KEY (`MovementID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fa_data`
--
ALTER TABLE `fa_data`
  MODIFY `MovementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
