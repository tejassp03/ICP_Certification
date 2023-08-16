-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 01:52 PM
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
-- Table structure for table `coursesinfo`
--

CREATE TABLE `coursesinfo` (
  `cid` int(3) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `oldAmount` varchar(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `rating` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursesinfo`
--

INSERT INTO `coursesinfo` (`cid`, `courseName`, `amount`, `oldAmount`, `image`, `description`, `rating`) VALUES
(1, 'Angular JS', '4,999', '6,999', 'assets/images/js.png', 'Master Angular JS with the most complete course! Projects Excellent course. we explain the core concepts in javascript that are usually glossed over in other courses', '4.9'),
(2, 'Python', '3,999', '5,999', 'assets/images/pyth.jpg', 'Master Python with the most complete course! Projects Excellent course. we explain the core concepts in Python that are usually glossed over in other courses', '4.2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursesinfo`
--
ALTER TABLE `coursesinfo`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursesinfo`
--
ALTER TABLE `coursesinfo`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
