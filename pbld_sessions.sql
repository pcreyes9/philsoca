-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2025 at 07:17 AM
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
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pbld_sessions`
--

INSERT INTO `pbld_sessions` (`id`, `topic`, `count`, `status`) VALUES
(1, 'Pediatric Airway Management (Pierre-Robin)', 2, 'enabled'),
(2, 'VATS', 2, 'enabled'),
(3, 'Neonatal TIVA', 2, 'enabled'),
(4, 'Hip Surgery', 2, 'enabled'),
(5, 'Coagulopathy', 2, 'enabled'),
(6, 'Hypertension in Pregnancy', 3, 'enabled'),
(7, 'Neonatal Surgical Emergencies', 3, 'enabled'),
(8, 'Anesthesia for Spine Surgery', 3, 'enabled'),
(9, 'Obstetric Hemorrhage', 3, 'enabled'),
(10, 'Hypotensive Patient for Surgery for EXLAP', 3, 'enabled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pbld_sessions`
--
ALTER TABLE `pbld_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pbld_sessions`
--
ALTER TABLE `pbld_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
