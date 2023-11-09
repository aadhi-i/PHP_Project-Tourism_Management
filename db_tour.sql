-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 11:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `book_id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `package_id` int(10) NOT NULL,
  `status_admin` int(4) NOT NULL DEFAULT 0 COMMENT '0- Pending, 1- Confirm, 2- Completed ,3-Cancel',
  `status_user` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 - Confirm , 1- Cancel',
  `date_book` datetime NOT NULL DEFAULT current_timestamp(),
  `from_date` date NOT NULL,
  `no_ppl` int(10) NOT NULL DEFAULT 1,
  `tcost` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`book_id`, `uid`, `package_id`, `status_admin`, `status_user`, `date_book`, `from_date`, `no_ppl`, `tcost`) VALUES
(8, 17, 21, 2, 0, '2023-09-30 17:47:05', '2023-10-01', 1, 400),
(7, 16, 21, 2, 0, '2023-09-30 16:37:16', '2023-10-02', 3, 1200),
(4, 12, 22, 2, 0, '2023-09-30 12:43:47', '2023-10-03', 5, 250),
(5, 12, 22, 0, 1, '2023-09-30 12:50:42', '2023-10-03', 5, 250),
(6, 12, 21, 1, 0, '2023-09-30 12:52:19', '0000-00-00', 2, 800);

-- --------------------------------------------------------

--
-- Table structure for table `mode`
--

CREATE TABLE `mode` (
  `mode_id` int(10) NOT NULL,
  `mode` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mode`
--

INSERT INTO `mode` (`mode_id`, `mode`) VALUES
(3, 'Flight'),
(4, 'Bus'),
(7, 'Ship'),
(6, 'Train'),
(8, 'Boat');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(10) NOT NULL,
  `title` text NOT NULL,
  `cost` double NOT NULL,
  `description` text NOT NULL,
  `mode_id` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1-  Active, 0- Inactive',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `upload` varchar(30) NOT NULL,
  `no_days` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `title`, `cost`, `description`, `mode_id`, `status`, `date_created`, `upload`, `no_days`) VALUES
(22, 'Kochi-Kayal Yathra', 50, 'Example', 8, 1, '2023-09-27 23:43:03', 'kayal.jpg', '1 Day'),
(23, 'Japan Tour', 200, 'Example', 3, 1, '2023-09-30 17:44:33', 'b7.jpg', '3 Days'),
(21, 'Example3', 400, 'Example', 3, 1, '2023-09-27 22:30:42', 'kayal.jpg', '4 Days');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(10) NOT NULL,
  `place` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place`) VALUES
(3, 'Paris'),
(4, 'Tokyo'),
(5, 'Kyoto'),
(6, 'Kochi'),
(8, 'Shibuya');

-- --------------------------------------------------------

--
-- Table structure for table `place_pack`
--

CREATE TABLE `place_pack` (
  `place_id` int(10) NOT NULL,
  `package_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `place_pack`
--

INSERT INTO `place_pack` (`place_id`, `package_id`) VALUES
(6, 22),
(3, 21),
(5, 23),
(4, 23);

-- --------------------------------------------------------

--
-- Table structure for table `rate_review`
--

CREATE TABLE `rate_review` (
  `review_id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `book_id` int(11) NOT NULL,
  `package_id` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `review` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rate_review`
--

INSERT INTO `rate_review` (`review_id`, `uid`, `book_id`, `package_id`, `rate`, `review`) VALUES
(5, 12, 4, 22, 4, 'Good experience'),
(6, 16, 7, 21, 5, 'Nice'),
(7, 17, 8, 21, 4, 'Impressive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `housename` text NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `username`, `password`, `email`, `phone`, `housename`, `pincode`) VALUES
(15, 'user', 'user', '123456', 'user@mail.', 1234567890, 'ABC', 12345),
(16, 'Goat', 'goat', '123456', 'goat@gmail', 1234567890, 'GoatHouse', 12345),
(12, 'Leo', 'messi', '123456', 'messi@gmai', 1234567890, 'Barcelona', 67800),
(17, 'Ronaldo', 'cr7', '123456', 'cr7@mail.c', 1234567890, 'Saudi', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `mode`
--
ALTER TABLE `mode`
  ADD PRIMARY KEY (`mode_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `rate_review`
--
ALTER TABLE `rate_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mode`
--
ALTER TABLE `mode`
  MODIFY `mode_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rate_review`
--
ALTER TABLE `rate_review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
