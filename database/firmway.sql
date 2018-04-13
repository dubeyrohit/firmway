-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 04:37 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firmway`
--

-- --------------------------------------------------------

--
-- Table structure for table `element`
--

CREATE TABLE `element` (
  `id` int(11) UNSIGNED NOT NULL,
  `element` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element`
--

INSERT INTO `element` (`id`, `element`, `cost`) VALUES
(1, 'Gold', 200),
(2, 'Silver', 150),
(3, 'Bronze', 100);

-- --------------------------------------------------------

--
-- Table structure for table `metal`
--

CREATE TABLE `metal` (
  `id` int(11) UNSIGNED NOT NULL,
  `metal` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metal`
--

INSERT INTO `metal` (`id`, `metal`, `cost`) VALUES
(1, 'Aluminium', 2000),
(2, 'Steel', 1500),
(3, 'Copper', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `shape`
--

CREATE TABLE `shape` (
  `id` int(11) NOT NULL,
  `shape` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shape`
--

INSERT INTO `shape` (`id`, `shape`) VALUES
(1, 'Sphere'),
(2, 'Cylinder'),
(3, 'Cube'),
(4, 'Cuboid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metal`
--
ALTER TABLE `metal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shape`
--
ALTER TABLE `shape`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `element`
--
ALTER TABLE `element`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `metal`
--
ALTER TABLE `metal`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shape`
--
ALTER TABLE `shape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
