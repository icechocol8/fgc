-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 09:21 AM
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
  `MovementDate` date DEFAULT NULL,
  `AssetTag` varchar(50) DEFAULT NULL,
  `AssetType` varchar(50) DEFAULT NULL,
  `Workstation` varchar(50) DEFAULT NULL,
  `Site` varchar(100) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Assignee` varchar(100) DEFAULT NULL,
  `AccountDepartment` varchar(100) DEFAULT NULL,
  `Function` varchar(100) DEFAULT NULL,
  `Manager` varchar(100) DEFAULT NULL,
  `Designation` varchar(100) DEFAULT NULL,
  `WSDesignation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fa_data`
--

INSERT INTO `fa_data` (`MovementDate`, `AssetTag`, `AssetType`, `Workstation`, `Site`, `Location`, `Assignee`, `AccountDepartment`, `Function`, `Manager`, `Designation`, `WSDesignation`) VALUES
('2024-09-11', 'BAC-0001-20240910', 'CPU Set', 'BCDO-001', 'Home Invest', 'Bacolod', 'F04518 - Oro, Rona', 'Human Resource', 'Shared Services Group', 'Human Resource', 'Office', 'Ground Floor - New Jersey Room - HR Office');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
