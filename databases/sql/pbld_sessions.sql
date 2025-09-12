-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2025 at 03:34 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pbld_sessions`
--

CREATE TABLE `pbld_sessions` (
  `id` int(2) DEFAULT NULL,
  `topic` varchar(42) DEFAULT NULL,
  `count` int(1) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pbld_sessions`
--

INSERT INTO `pbld_sessions` (`id`, `topic`, `count`, `status`) VALUES
(1, 'Pediatric Airway Management (Pierre-Robin)', 2, 'enabled'),
(2, 'VATS', 2, 'enabled'),
(3, 'Neonatal TIVA', 2, 'enabled'),
(4, 'Hip Surgery', 2, 'enabled'),
(5, 'Neonatal Surgical Emergencies', 2, 'enabled'),
(6, 'Hypertension in Pregnancy', 3, 'enabled'),
(7, 'Anesthesia for Spine Surgery', 3, 'enabled'),
(8, 'Obstetric Hemorrhage', 3, 'enabled'),
(9, 'Coagulopathy', 3, 'enabled'),
(10, 'Hypotensive Patient for Surgery for EXLAP', 3, 'enabled');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
