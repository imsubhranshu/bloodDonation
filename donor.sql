-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 06:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `address`, `city`, `state`, `pin`, `bgroup`, `contact`, `password`) VALUES
(1, 'Subhranshu Behera', 'Balangir', '     delete from don', 'Odisha', '767002', 'A+', '7789869717', 'demo@123'),
(2, 'Rajat Behera', 'At: Dungripada\r\nPo: Rajendra College\r\nDist: Balangir\r\nPIN: 767002', 'Raipur', 'Odisha', '767002', 'O+', '8895867264', 'rajat@1234'),
(12, 'Madhabi Nanda', 'At: Dungripada\r\nPo: Rajendra College\r\nDist: Balangir\r\nPIN: 767002', 'Balangir', 'Odisha', '767002', 'A+', '6372960336', 'mnanda'),
(13, 'Hemanta kumar Behera', 'At: Dungripada\r\nPo: Rajendra College\r\nDist: Balangir\r\nPIN: 767002', 'Balangir', 'Odisha', '767002', 'AB+', '7008057485', 'hemanta@123'),
(14, 'Kathani Kausik', 'Sonepur\r\n', 'Raipur', 'Odisha', '767017', 'O+', '7978641959', 'kathani@123'),
(15, 'Pratyushranjan nanda', 'Jankpur\r\nFatkara', 'Raipur', 'chatisgarh', '6363637', 'O-', '6484548', 'qwerty'),
(16, 'R.L.Livingstone', 'Koshan Nagar\r\nBalangir', 'Balangir', 'Odisha', '767002', 'O+', '7377726895', 'livingstone'),
(17, 'Deepak kumar Nayak', 'Deogarh', 'Deogarh', 'Odisha', '768108', 'O+', '123456', '1234566');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
