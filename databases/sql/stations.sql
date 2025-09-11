-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2025 at 03:31 AM
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
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(1) DEFAULT NULL,
  `workshop_name` varchar(15) DEFAULT NULL,
  `name` varchar(71) DEFAULT NULL,
  `count` int(1) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `workshop_name`, `name`, `count`, `status`) VALUES
(1, 'AIRWAY WORKSHOP', 'Station 1: Front of Neck Access', 0, 'enabled'),
(2, 'AIRWAY WORKSHOP', 'Station 2: Video Laryncoscope', 0, 'enabled'),
(3, 'AIRWAY WORKSHOP', 'Station 3: Bougie', 0, 'enabled'),
(4, 'AIRWAY WORKSHOP', 'Station 4: Optical Stylet', 0, 'enabled'),
(5, 'AIRWAY WORKSHOP', 'Station 5: Dual Technique', 0, 'enabled'),
(6, 'AIRWAY WORKSHOP', 'Station 6: Suction-Assisted Laryngoscopy Airway Decontamination (SALAD)', 0, 'enabled'),
(7, 'AIRWAY WORKSHOP', 'Station 7: Flexible Laryngoscopy', 0, 'enabled'),
(8, 'AIRWAY WORKSHOP', 'Station 8: Hight Flow Nasal Cannula', 0, 'enabled');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
