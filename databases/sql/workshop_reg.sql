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
-- Table structure for table `workshop_reg`
--

CREATE TABLE `workshop_reg` (
  `id` int(10) NOT NULL,
  `psa_id` int(10) DEFAULT NULL,
  `workshop` varchar(200) DEFAULT NULL,
  `station` varchar(200) DEFAULT NULL,
  `created_at` varchar(200) DEFAULT NULL,
  `updated_at` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `workshop_reg`
--

INSERT INTO `workshop_reg` (`id`, `psa_id`, `workshop`, `station`, `created_at`, `updated_at`) VALUES
(1, 4125, 'AIRWAY WORKSHOP', 'Station 2: Video Laryncoscope', '1/20/2025 17:06', '1/20/2025 17:06'),
(2, 4126, 'AIRWAY WORKSHOP', 'Station 2: Video Laryncoscope', '2025-09-08 16:38:39', '2025-09-08 16:38:39'),
(3, 4127, 'AIRWAY WORKSHOP', 'Station 6: Suction-Assisted Laryngoscopy Airway Decontamination (SALAD)', '2025-09-08 16:44:58', '2025-09-08 16:44:58'),
(4, 4124, 'AIRWAY WORKSHOP', 'Station 6: Suction-Assisted Laryngoscopy Airway Decontamination (SALAD)', '2025-09-09 10:18:45', '2025-09-09 10:18:45'),
(5, 4123, 'POCUS WORKSHOP', '', '2025-09-10 09:39:01', '2025-09-10 09:39:01'),
(6, 4122, 'REGIONAL ANESTHESIA WORKSHOP', '', '2025-09-10 09:51:02', '2025-09-10 09:51:02'),
(7, 4121, 'REGIONAL ANESTHESIA WORKSHOP', '', '2025-09-10 09:51:07', '2025-09-10 09:51:07'),
(8, 4120, 'REGIONAL ANESTHESIA WORKSHOP', '', '2025-09-10 09:51:11', '2025-09-10 09:51:11'),
(9, 4117, 'REGIONAL ANESTHESIA WORKSHOP', '', '2025-09-10 09:51:23', '2025-09-10 09:51:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workshop_reg`
--
ALTER TABLE `workshop_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workshop_reg`
--
ALTER TABLE `workshop_reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
