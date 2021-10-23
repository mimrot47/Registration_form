-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 04:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsicon`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_charges`
--

CREATE TABLE `acc_charges` (
  `id` int(11) NOT NULL,
  `subpack_id` int(11) NOT NULL,
  `charges` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_charges`
--

INSERT INTO `acc_charges` (`id`, `subpack_id`, `charges`) VALUES
(1, 1, '4720');

-- --------------------------------------------------------

--
-- Table structure for table `acompany`
--

CREATE TABLE `acompany` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `id` int(11) NOT NULL,
  `subpack_id` int(11) NOT NULL,
  `occ_id` int(11) NOT NULL,
  `charges` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`id`, `subpack_id`, `occ_id`, `charges`) VALUES
(5, 3, 4, '1416'),
(6, 2, 3, '5900'),
(7, 1, 1, '16520'),
(8, 1, 2, '11210');

-- --------------------------------------------------------

--
-- Table structure for table `occupancy`
--

CREATE TABLE `occupancy` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `occupancy`
--

INSERT INTO `occupancy` (`id`, `name`) VALUES
(1, 'Single Occupancy'),
(2, 'Shared Occupancy'),
(3, 'Individual'),
(4, 'Virtual');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `pack_name`) VALUES
(1, 'Physical'),
(2, 'Virtual');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `id` int(11) NOT NULL,
  `pack` int(11) NOT NULL,
  `subpack` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `alt_mob` varchar(14) NOT NULL,
  `m_r_s_No` varchar(20) NOT NULL,
  `institude` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `gender` varchar(90) NOT NULL,
  `state` varchar(90) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `country` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `Acompany_name` varchar(50) NOT NULL,
  `Acompany_age` varchar(20) NOT NULL,
  `pyment_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subpackage`
--

CREATE TABLE `subpackage` (
  `subpack_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `subpack_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subpackage`
--

INSERT INTO `subpackage` (`subpack_id`, `pack_id`, `subpack_name`) VALUES
(1, 1, 'Resident'),
(2, 1, 'Non Resident'),
(3, 2, 'Virtual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_charges`
--
ALTER TABLE `acc_charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subpack_id` (`subpack_id`);

--
-- Indexes for table `acompany`
--
ALTER TABLE `acompany`
  ADD PRIMARY KEY (`id`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subpack_id` (`subpack_id`),
  ADD KEY `occ_id` (`occ_id`);

--
-- Indexes for table `occupancy`
--
ALTER TABLE `occupancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration1`
--
ALTER TABLE `registration1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subpackage`
--
ALTER TABLE `subpackage`
  ADD PRIMARY KEY (`subpack_id`),
  ADD KEY `pack_id` (`pack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_charges`
--
ALTER TABLE `acc_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `acompany`
--
ALTER TABLE `acompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `occupancy`
--
ALTER TABLE `occupancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration1`
--
ALTER TABLE `registration1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subpackage`
--
ALTER TABLE `subpackage`
  MODIFY `subpack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acc_charges`
--
ALTER TABLE `acc_charges`
  ADD CONSTRAINT `acc_charges_ibfk_1` FOREIGN KEY (`subpack_id`) REFERENCES `subpackage` (`subpack_id`);

--
-- Constraints for table `acompany`
--
ALTER TABLE `acompany`
  ADD CONSTRAINT `acompany_ibfk_1` FOREIGN KEY (`did`) REFERENCES `registration` (`id`);

--
-- Constraints for table `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `charges_ibfk_1` FOREIGN KEY (`subpack_id`) REFERENCES `subpackage` (`subpack_id`),
  ADD CONSTRAINT `charges_ibfk_2` FOREIGN KEY (`occ_id`) REFERENCES `occupancy` (`id`);

--
-- Constraints for table `subpackage`
--
ALTER TABLE `subpackage`
  ADD CONSTRAINT `subpackage_ibfk_1` FOREIGN KEY (`pack_id`) REFERENCES `package` (`pack_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
