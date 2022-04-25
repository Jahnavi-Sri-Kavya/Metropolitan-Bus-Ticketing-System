-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 05:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `businfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ticketid` int(100) NOT NULL,
  `Dateof_journey` varchar(50) NOT NULL,
  `busnum` varchar(10) NOT NULL,
  `routenum` varchar(5) NOT NULL,
  `point1` varchar(30) NOT NULL,
  `point2` varchar(30) NOT NULL,
  `adult` int(10) NOT NULL,
  `child` int(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ticketid`, `Dateof_journey`, `busnum`, `routenum`, `point1`, `point2`, `adult`, `child`, `type`, `cost`) VALUES
(1, '0000-00-00', 'TN22MS1001', '515', 'Tambaram', 'Mamallapuram', 2, 3, 'Non AC', 70),
(2, '0000-00-00', 'TN22MS1001', '515', 'Tambaram', 'Mamallapuram', 2, 3, 'Non AC', 70),
(3, '05/06/2020', 'TN22MS1001', '515', 'Tambaram', 'Mamallapuram', 2, 2, 'AC', 140),
(4, '05/06/2020', 'TN22MS1001', '515', 'Tambaram', 'Mamallapuram', 2, 0, 'AC', 100),
(5, '05/06/2020', 'TN22MS1001', '515', 'Tambaram', 'Mamallapuram', 1, 0, 'Non AC', 20),
(6, '05/06/2020', 'TN22MS1001', '515', 'Tambaram', 'Mamallapuram', 5, 0, 'Non AC', 100);

-- --------------------------------------------------------

--
-- Table structure for table `busdetails`
--

CREATE TABLE `busdetails` (
  `vehicle_num` varchar(10) NOT NULL,
  `route_num` varchar(5) NOT NULL,
  `point1` varchar(30) NOT NULL,
  `point2` varchar(30) NOT NULL,
  `via` varchar(200) NOT NULL,
  `avl_seats` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busdetails`
--

INSERT INTO `busdetails` (`vehicle_num`, `route_num`, `point1`, `point2`, `via`, `avl_seats`) VALUES
('TN22MS1001', '515', 'Tambaram', 'Mamallapuram', 'Perungalathur vandalur Kolapakkam Kandigai VIT mambakkam Kelambakkam SSN Thirupporur ', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ticketid`);

--
-- Indexes for table `busdetails`
--
ALTER TABLE `busdetails`
  ADD PRIMARY KEY (`vehicle_num`),
  ADD UNIQUE KEY `vehicle_num` (`vehicle_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ticketid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
