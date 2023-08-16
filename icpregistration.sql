-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 10:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icpcertification`
--

-- --------------------------------------------------------

--
-- Table structure for table `icpregistration`
--

CREATE TABLE `icpregistration` (
  `id` int(6) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(80) NOT NULL,
  `userCellNo` varchar(12) NOT NULL,
  `userPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icpregistration`
--

INSERT INTO `icpregistration` (`id`, `userName`, `userEmail`, `userCellNo`, `userPassword`) VALUES
(3, 'siva', 'kumar@gmail.com', '9052624578', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icpregistration`
--
ALTER TABLE `icpregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icpregistration`
--
ALTER TABLE `icpregistration`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
