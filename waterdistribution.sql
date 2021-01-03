-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 03:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waterdistribution`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'Main admin', '12345678', '2020-06-28 02:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `phoneNumber` varchar(191) NOT NULL,
  `password` longtext NOT NULL,
  `address` varchar(191) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phoneNumber`, `password`, `address`, `date`) VALUES
(1, 'Epa', '0789440033', '12345678', 'NY 345 St', '2020-11-15 06:41:48'),
(2, 'Ratifat', '0788837753', '12345678', 'Nyanza', '2021-01-03 12:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `username`, `password`, `address`, `phone`, `date`) VALUES
(1, 'Luc', '12345678', 'KG 456 ST', '0789440055', '2020-11-15 08:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `distributor_sales`
--

CREATE TABLE `distributor_sales` (
  `id` int(11) NOT NULL,
  `customerName` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor_sales`
--

INSERT INTO `distributor_sales` (`id`, `customerName`, `address`, `phone`, `quantity`, `amount`, `date`) VALUES
(1, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(2, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(3, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(4, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(5, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(6, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(7, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(8, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(9, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(10, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(11, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(12, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(13, 'My name', 'KN232ST', '0789660023', 18, '1080', '2020-11-14 22:00:00'),
(14, 'fcgvhbmn.,.', 'dfghjbjnkml', '0783748399', 1, '60', '2020-11-14 22:00:00'),
(15, '', 'KN232ST', '0783748398', 17, '1020', '2020-11-14 22:00:00'),
(16, 'Namnm', 'ghdhsg', '0789454545', 12, '720', '2020-11-15 12:16:15'),
(17, 'Namnm', 'ghdhsg', '0789454545', 12, '720', '2020-11-15 12:17:41'),
(18, 'Namnm', 'ghdhsg', '0789454545', 12, '720', '2020-11-15 12:19:41'),
(19, 'Namnm', 'ghdhsg', '0789454545', 12, '720', '2020-11-15 12:20:02'),
(20, 'Namnm', 'ghdhsg', '0789454545', 12, '720', '2020-11-15 12:20:35'),
(21, 'Namnm', 'ghdhsg', '0789454545', 12, '720', '2020-11-15 12:21:33'),
(22, 'Namnm', 'ghdhsg', '0789454545', 12, '720', '2020-11-15 12:21:43'),
(23, 'My name', 'KN232ST', '0789660023', 17, '1020', '2020-11-15 12:28:32'),
(24, 'My name', 'KN232ST', '0789660023', 17, '1020', '2020-11-15 12:28:53'),
(25, 'Majajja', 'KN232ST', '0783748399', 19, '1140', '2020-11-15 12:29:00'),
(26, 'My Igor', 'KN232ST', '0783748398', 20, '1200', '2021-01-03 09:11:50'),
(27, 'My Igor', 'KN232ST', '0783748398', 20, '1200', '2021-01-03 11:09:56'),
(28, 'Epa', 'KN232ST', '0783748398', 20, '1200', '2021-01-03 11:34:58'),
(29, 'Isaac', 'Huye', '0783748398', 7, '420', '2021-01-03 12:04:15'),
(30, 'Ratifat', 'KN232ST', '0783748398', 20, '1200', '2021-01-03 12:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerID` varchar(191) NOT NULL,
  `customerName` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `phoneNumber` varchar(191) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `processed` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerID`, `customerName`, `address`, `phoneNumber`, `quantity`, `discount`, `processed`, `date`) VALUES
(1, '1222hgh', 'Namnm', 'ghdhsg', '0789454545', 12, 23, 1, '2020-11-15 10:19:12'),
(2, '13232hgd', 'My name', 'KN232ST', '0789660023', 18, 0, 1, '2020-11-15 11:51:13'),
(3, '13232hgd', 'My name', 'KN232ST', '0789660023', 18, 0, 1, '2020-11-15 11:51:08'),
(4, '13232hgd', 'My name', 'KN232ST', '0789660023', 18, 0, 1, '2020-11-15 11:50:36'),
(5, '13232hgd', 'My name', 'KN232ST', '0789660023', 18, 0, 1, '2020-11-15 11:51:34'),
(6, '13232hgd', 'My name', 'KN232ST', '0789660023', 18, 0, 1, '2020-11-15 11:52:20'),
(7, '13232hgd', 'fcgvhbmn.,.', 'dfghjbjnkml', '0783748399', 1, 0, 1, '2020-11-15 11:52:28'),
(8, '', '', 'KN232ST', '0783748398', 17, 0, 1, '2020-11-15 11:52:34'),
(9, '13232hgd', 'My name', 'KN232ST', '0789660023', 17, 0, 1, '2020-11-15 12:28:32'),
(10, '13232hgd', 'My Igor', 'KN232ST', '0783748398', 20, 0, 1, '2021-01-03 09:11:50'),
(11, 'MyID', 'Majajja', 'KN232ST', '0783748399', 19, 0, 1, '2020-11-15 12:29:00'),
(12, 'MyID', 'My Igor', 'KN232ST', '0783748398', 20, 0, 1, '2021-01-03 11:09:57'),
(13, '', '', 'KN232ST', '0783748398', 20, 0, 0, '2021-01-03 11:33:30'),
(14, '1', 'Epa', 'KN232ST', '0783748398', 20, 0, 1, '2021-01-03 11:34:58'),
(15, '13232hgd', 'Isaac', 'Huye', '0783748398', 7, 0, 1, '2021-01-03 12:04:15'),
(16, '2', 'Ratifat', 'KN232ST', '0783748398', 20, 0, 1, '2021-01-03 12:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `username`, `password`, `date`) VALUES
(1, 'Igor', '12345678', '2020-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `vieworder`
--

CREATE TABLE `vieworder` (
  `id` int(11) NOT NULL,
  `distributor_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `processed` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vieworder`
--

INSERT INTO `vieworder` (`id`, `distributor_name`, `phone_number`, `Address`, `quantity`, `processed`, `date`) VALUES
(13, 'Luc', '0788454545', 'KG345ST', 20, 1, '2021-01-03'),
(14, 'Luc', '0787887878', 'KG345ST', 20, 1, '2021-01-03'),
(15, 'Luc', '0787887878', 'KN677ST', 20, 1, '2021-01-03'),
(16, 'Luc', '0787887878', 'KN677ST', 12, 1, '2021-01-03'),
(17, 'Luc', '078999898', 'KN677ST', 1, 0, '2021-01-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor_sales`
--
ALTER TABLE `distributor_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vieworder`
--
ALTER TABLE `vieworder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `distributor_sales`
--
ALTER TABLE `distributor_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vieworder`
--
ALTER TABLE `vieworder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
