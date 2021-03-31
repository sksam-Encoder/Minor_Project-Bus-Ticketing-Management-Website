-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 05:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'skadmin@gmail.com', 'sksam1g@gmail.com', 'Qwerty123@', '9330812278');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `ID` int(225) NOT NULL,
  `bus_no` text NOT NULL,
  `route` text NOT NULL,
  `amount` float NOT NULL,
  `time` varchar(223) NOT NULL,
  `arrivalTime` time NOT NULL,
  `round_trip` tinyint(1) NOT NULL,
  `bus_image` text NOT NULL,
  `bus_desc` text NOT NULL,
  `category` text NOT NULL,
  `total_seats` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`ID`, `bus_no`, `route`, `amount`, `time`, `arrivalTime`, `round_trip`, `bus_image`, `bus_desc`, `category`, `total_seats`) VALUES
(1, 'WB-16AF42', 'Kolkata To Digha', 500, 'Morning', '06:42:16', 1, 'pic1.jpg', 'Fully AC', 'Ac with Food', 70),
(2, 'WB-16AB187', 'Kolkata To Darjeeling', 1500, 'Afternoon', '03:12:00', 0, 'dar.jpg', 'Normal Ac', 'Ac with Food', 80),
(5, 'WB-12-2242', 'Kolkata To New Delhi ', 2000, 'Night', '20:42:16', 0, 'New Delhi.jpg', 'Fully AC', 'AC with Food ', 70),
(6, 'WB-17-A985', 'Kolkata To Assam', 600, 'Morning', '09:49:36', 1, 'assam.jpg', 'Normal AC', 'Food And 3 Buses', 65);

-- --------------------------------------------------------

--
-- Table structure for table `sample_image`
--

CREATE TABLE `sample_image` (
  `id` int(11) NOT NULL,
  `SAMPLE_IMAGES` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample_image`
--

INSERT INTO `sample_image` (`id`, `SAMPLE_IMAGES`) VALUES
(1, 'bus1.jpg'),
(2, 'bus2.jpg'),
(3, 'bus3.jpg'),
(4, 'bus4.jpg'),
(5, 'bus5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `bus_no` int(11) NOT NULL,
  `route` text NOT NULL,
  `peoples` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `date` date NOT NULL,
  `round_trip` tinyint(4) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `bus_no`, `route`, `peoples`, `price`, `total_price`, `date`, `round_trip`, `name`, `email`, `phone`) VALUES
(1, 0, 'Kolkata To Digha', 3, 500, 1500, '2021-03-31', 1, 'seikh sam', 'sksam4g@gmail.com', '7998949016'),
(3, 0, 'Kolkata To Assam', 3, 600, 1800, '2021-03-31', 1, 'seikh sam', 'sksam4g@gmail.com', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `password`, `phone`) VALUES
(2, 'seikh sam', 'sksam4g@gmail.com', 'Qwertyu1!', '2147483647'),
(3, 'seikh viku', 'skviku420@gmail.com', 'Qwertyu1!', '2147483647'),
(4, 'vikash Raj', 'rajVikash@gmail.com', 'Newsreporter1!', '7998949016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sample_image`
--
ALTER TABLE `sample_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sample_image`
--
ALTER TABLE `sample_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
