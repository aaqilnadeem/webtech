-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 12:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikeinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `invent`
--

CREATE TABLE `invent` (
  `id` int(100) NOT NULL,
  `bike` varchar(100) NOT NULL,
  `chasisnum` varchar(100) NOT NULL,
  `enginenum` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `sold` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invent`
--

INSERT INTO `invent` (`id`, `bike`, `chasisnum`, `enginenum`, `color`, `sold`, `date`, `owner`) VALUES
(1, 'd', 'd', 'd', 'd', 'yes', '', '1'),
(2, 'd', 'd', 'd', 'd', '', '', ''),
(3, 'd', 'd', 'd', 'd', '', '', ''),
(4, 'd', 'd', 'd', 'd', '', '', ''),
(5, 'Honda', '123456', '987654', 'Red', 'yes', '2019-11-05', 'Wasey'),
(6, 'Honda', '786389', '527537', 'Red', 'yes', '2019-11-05', 'Aaqil'),
(7, 'Yamaha', '786389', '527537', 'Red', '', '', ''),
(8, 'Yamaha', '476933', '669833', 'Black', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invent`
--
ALTER TABLE `invent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invent`
--
ALTER TABLE `invent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
