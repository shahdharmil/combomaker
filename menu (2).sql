-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 01:07 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `max` int(5) NOT NULL,
  `min` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `max`, `min`) VALUES
(1, 'cheese cake', 110, 95),
(2, 'Pizza', 450, 250),
(3, 'Coffee', 70, 65),
(5, 'Burger', 210, 195),
(6, 'Pizza', 450, 250),
(7, 'Tea', 50, 40),
(8, 'Bread Butter', 40, 30),
(9, 'Chocolate', 100, 85),
(10, 'sandwich', 60, 45),
(11, 'Ice Cream', 80, 60),
(12, 'Wafers', 55, 40),
(13, 'Desserts', 90, 75),
(14, 'Juice', 65, 40),
(15, 'Soft Drinks', 50, 35),
(16, 'Cappucci', 110, 90),
(17, 'Espresso', 200, 180),
(18, 'Milk Cream', 120, 100),
(19, 'Black Tea', 130, 110),
(25, 'BreadButter', 70, 50),
(26, 'ChocolateCake', 100, 75),
(27, 'cheesecake', 100, 75),
(28, 'BlackTea', 150, 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
