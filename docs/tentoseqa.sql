-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 02:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tentoseqa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tentosa`
--

CREATE TABLE `tentosa` (
  `id` int(11) NOT NULL,
  `equipeA` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tentosa`
--

INSERT INTO `tentosa` (`id`, `equipeA`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 4),
(6, 0),
(7, 2),
(8, 0),
(9, 4),
(10, 0),
(11, 2),
(12, 8),
(13, 0),
(14, 12),
(15, 0),
(16, 2),
(17, 0),
(18, 2),
(19, 0),
(20, 12),
(21, 0),
(22, 2),
(23, 0),
(24, 0),
(25, 2),
(26, 8),
(27, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tentosa`
--
ALTER TABLE `tentosa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tentosa`
--
ALTER TABLE `tentosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
