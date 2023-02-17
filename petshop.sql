-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bird`
--

CREATE TABLE `bird` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bird`
--

INSERT INTO `bird` (`id`, `name`, `price`, `image`) VALUES
(1, 'Cockatoo', 40000, '1671704569.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`, `price`, `image`) VALUES
(1, 'Chartreux', 60000, '1671704352.jpeg'),
(3, ' Ragdoll', 25000, '1671708849.jpg'),
(5, 'shiv', 2, '1674826766.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dog`
--

CREATE TABLE `dog` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog`
--

INSERT INTO `dog` (`id`, `name`, `price`, `image`) VALUES
(1, 'Husky', 50000, '1671703462.jpeg'),
(2, 'Pitbull', 60000, '1671703484.jpeg'),
(3, 'Pomeranian', 20000, '1671703530.webp'),
(4, 'Pug', 20000, '1671703571.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(255) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_no` int(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pay_Mode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_no`, `Address`, `Pay_Mode`) VALUES
(1, 'Rajan Singh', 2147483647, 'pune', 'on'),
(2, 'Neeraj', 2147483647, 'pune', 'on'),
(3, 'Neeraj', 2147483647, 'pune', 'on'),
(4, 'Rajan Singh', 2147483647, 'pune', 'on'),
(5, 'Rajan Singh', 2147483647, 'pune', 'on'),
(6, 'Saloni ', 466464646, 'pune', 'on'),
(7, 'shiv', 34252525, 'ballia', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `name`, `price`, `image`) VALUES
(1, 'Fuzzy Mouse', 12000, '1671702891.jpeg'),
(6, 'Husky', 50000, '1671875503.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(255) NOT NULL,
  `Petname` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Petname`, `Price`, `Quantity`) VALUES
(1, 'pitbull', 25000, 1),
(1, 'pomeranian', 5000, 1),
(1, 'husky', 39000, 1),
(1, 'pug', 9000, 1),
(2, 'pitbull', 25000, 2),
(2, 'husky', 39000, 1),
(3, 'pitbull', 25000, 1),
(4, 'pitbull', 25000, 1),
(5, 'Husky', 50000, 1),
(6, 'Fuzzy Mouse', 12000, 1),
(7, 'Husky', 50000, 3),
(7, 'Pitbull', 60000, 1),
(7, 'Pomeranian', 20000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bird`
--
ALTER TABLE `bird`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bird`
--
ALTER TABLE `bird`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dog`
--
ALTER TABLE `dog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
