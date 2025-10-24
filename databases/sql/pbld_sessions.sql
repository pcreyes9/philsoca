-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2025 at 06:08 AM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u179905176_acaTest`
--

-- --------------------------------------------------------

--
-- Table structure for table `pbld_sessions`
--

CREATE TABLE `pbld_sessions` (
  `id` int(2) DEFAULT NULL,
  `topic` varchar(42) DEFAULT NULL,
  `speaker` varchar(31) DEFAULT NULL,
  `count` int(1) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pbld_sessions`
--

INSERT INTO `pbld_sessions` (`id`, `topic`, `speaker`, `count`, `status`) VALUES
(1, 'Pediatric Airway Management (Pierre-Robin)', 'Annery Garcia-Marcinkiewicz, MD', 2, 'enabled'),
(2, 'VATS', 'Wanda Popescu, MD', 2, 'enabled'),
(3, 'Neonatal TIVA', 'Vesna Todorovic, MD', 2, 'enabled'),
(4, 'Hip Surgery', 'Sanjib Adhikary, MD', 2, 'enabled'),
(5, 'Neonatal Surgical Emergencies', 'Ina Ismiarti Shariffuddin, MD', 2, 'enabled'),
(6, 'Hypertension in Pregnancy', 'Heather Nixon, MD', 3, 'enabled'),
(7, 'Anesthesia for Spine Surgery', 'Jeffrey Pasternak, MD', 3, 'enabled'),
(8, 'Obstetric Hemorrhage', 'Christopher Bowden, MD', 3, 'enabled'),
(9, 'Coagulopathy', 'Klaus Goerlinger, MD', 3, 'enabled'),
(10, 'Hypotensive Patient for Surgery for EXLAP', 'Suneel Desai, MD', 3, 'enabled');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
