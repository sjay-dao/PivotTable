-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 08:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `convenience_store_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_code`, `name`, `price`) VALUES
(1, 729184, 'Astron Ceiling Fan', 1200),
(2, 836192, 'Washing Machine Dell', 4500),
(8, 7619251, 'Shine Gasoline', 1100),
(9, 0, 'Fridge Freeze 25ic', 4529),
(10, 721649, 'Takure', 200);

-- --------------------------------------------------------

--
-- Table structure for table `sold_items`
--

CREATE TABLE `sold_items` (
  `id` int(11) NOT NULL,
  `item_code` int(11) NOT NULL,
  `seller_code` int(11) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sold_items`
--

INSERT INTO `sold_items` (`id`, `item_code`, `seller_code`, `date`) VALUES
(1, 729184, 20220001, '2022-07-21 19:46:18'),
(2, 7619251, 202200414, '2022-07-21 23:13:43'),
(3, 7619251, 20220001, '2022-07-21 23:14:36'),
(4, 836192, 202200414, '2022-07-21 23:14:54'),
(5, 836192, 20220001, '2022-07-21 23:15:15'),
(6, 836192, 202200414, '2022-07-21 23:16:34'),
(7, 729184, 20220001, '2022-07-21 23:16:47'),
(8, 729184, 20220001, '2022-07-21 23:16:55'),
(9, 7619251, 202200414, '2022-07-21 23:17:14'),
(10, 729184, 202200414, '2022-07-21 23:22:45'),
(11, 836192, 9281741, '2022-07-22 00:58:48'),
(12, 0, 202200414, '2022-07-22 01:03:10'),
(13, 0, 9281741, '2022-07-22 01:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_no`, `Name`) VALUES
(3, 20220001, 'Sjay Pits'),
(8, 202200414, 'Marco Polo'),
(9, 9281741, 'Billy Jims');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_items`
--
ALTER TABLE `sold_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sold_items`
--
ALTER TABLE `sold_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
