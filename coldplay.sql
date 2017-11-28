-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 06:07 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coldplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `contact_email` varchar(128) NOT NULL,
  `contact_comment` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `contact_email`, `contact_comment`) VALUES
(6, 'Nicole Wong', 'jsumpter626@gmail.com', 'test'),
(7, 'Nicole Wong', 'nicole@gmail.com', 'Hello'),
(8, 'Nicole Wong', 'nicole2@gmail.com', 'hello'),
(9, 'Nicole Wong', 'nicolewong@gmail.com', 'hello'),
(10, 'Nicole Wong', 'jsumpter626@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_purchase`
--

CREATE TABLE `ticket_purchase` (
  `tID` int(11) NOT NULL,
  `ticket` int(100) NOT NULL,
  `bk_email` varchar(280) NOT NULL,
  `price` decimal(13,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_purchase`
--

INSERT INTO `ticket_purchase` (`tID`, `ticket`, `bk_email`, `price`) VALUES
(21, 2, 'nicolewong1@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tour_info`
--

CREATE TABLE `tour_info` (
  `tiID` int(11) NOT NULL,
  `location` varchar(128) NOT NULL,
  `tour_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_info`
--

INSERT INTO `tour_info` (`tiID`, `location`, `tour_date`) VALUES
(11, 'London', '0000-00-00'),
(12, 'Jakarta', '0000-00-00'),
(13, 'Kuala Lumpur', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `email` varchar(320) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `email`, `pwd`) VALUES
(1, 'test1@gmail.com', '123'),
(2, 'nic@gmail.com', 'abc'),
(3, 'nicole@gmail.com', '1234'),
(4, 'nicole@gmail.com1', '1234'),
(5, 'test7@gmail.com', '1234'),
(6, 'nicole2@gmail.com', '123'),
(7, 'nicole3@gmail.com', '123'),
(8, 'nicolewong@gmail.com', '1234'),
(9, 'nicolewong1@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `ticket_purchase`
--
ALTER TABLE `ticket_purchase`
  ADD PRIMARY KEY (`tID`);

--
-- Indexes for table `tour_info`
--
ALTER TABLE `tour_info`
  ADD PRIMARY KEY (`tiID`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ticket_purchase`
--
ALTER TABLE `ticket_purchase`
  MODIFY `tID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tour_info`
--
ALTER TABLE `tour_info`
  MODIFY `tiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
