-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 04:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_and_reservation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middle_initial` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'admin',
  `enable2FA` varchar(255) DEFAULT 'true',
  `status` varchar(255) DEFAULT 'Active',
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `phone`, `password`, `firstname`, `middle_initial`, `lastname`, `account_no`, `address`, `profile`, `role`, `enable2FA`, `status`, `date`) VALUES
(1, 'caballeroaldrin02@gmail.com', '099999999999', 'admin123', 'John', 'E', 'Doe', '576681987956493900885023', 'Lorem Ipsum Dolor sit amet', 'profile/profile_662793257a4cd_cqt3VIGwgE1ZUeDB7lcK--1--4pxly_2x.png', 'admin', 'true', 'Active', '2024-04-23 09:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_inventory`
--

CREATE TABLE `restaurant_inventory` (
  `id` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `max_item_qty` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant_inventory`
--

INSERT INTO `restaurant_inventory` (`id`, `product`, `description`, `max_item_qty`, `available`, `date`) VALUES
(1, 'uploads/upload_6627c1c2e5702_download (1).jpg', 'Pork Meat 10 lbs', 10, 4, '2024-04-23 14:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_and_venues`
--

CREATE TABLE `rooms_and_venues` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `room_venue_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `max_capacity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms_and_venues`
--

INSERT INTO `rooms_and_venues` (`id`, `image`, `room_venue_type`, `status`, `max_capacity`, `price`, `date`) VALUES
(2, 'uploads/upload_6630f7f6c6d20_W7X72.png', 'dfgdfg', 'gfhgfhg', 546546, 546, '2024-04-30 13:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `room_inventory`
--

CREATE TABLE `room_inventory` (
  `id` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `max_item_qty` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_inventory`
--

INSERT INTO `room_inventory` (`id`, `product`, `description`, `max_item_qty`, `available`, `date`) VALUES
(1, 'uploads/upload_6627c142d3260_download.jpg', 'Mattreaa', 10, 6, '2024-04-23 14:10:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_inventory`
--
ALTER TABLE `restaurant_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms_and_venues`
--
ALTER TABLE `rooms_and_venues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_inventory`
--
ALTER TABLE `room_inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurant_inventory`
--
ALTER TABLE `restaurant_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms_and_venues`
--
ALTER TABLE `rooms_and_venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_inventory`
--
ALTER TABLE `room_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
