-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 05:33 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order_number` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `fullname`, `email`, `order_number`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'fs', 'admin@gmail.com', 213213, 3, '2015-12-06 06:49:07', '2015-12-06 06:49:07'),
(2, 'second', 'admin@gmal.com', 213213, 3, '2015-12-06 08:26:11', '2015-12-06 08:26:11'),
(3, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-06 08:26:33', '2015-12-06 08:26:33'),
(4, 'fs', 'sdf@dfdf', 0, 2, '2015-12-06 08:48:44', '2015-12-06 08:48:44'),
(5, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-06 08:52:03', '2015-12-06 08:52:03'),
(6, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-06 08:53:02', '2015-12-06 08:53:02'),
(7, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-06 08:58:42', '2015-12-06 08:58:42'),
(8, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-06 09:08:24', '2015-12-06 09:08:24'),
(9, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-06 09:11:15', '2015-12-06 09:11:15'),
(10, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-06 09:11:34', '2015-12-06 09:11:34'),
(11, 'dfdf', 'admin@gmal.com', 213213, 4, '2015-12-07 04:44:59', '2015-12-07 04:44:59'),
(12, 'second', 'admin@gmail.com', 213213, 3, '2015-12-07 04:49:31', '2015-12-07 04:49:31'),
(13, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-07 04:50:15', '2015-12-07 04:50:15'),
(14, 'fs', 'admin@gmail.com', 213213, 3, '2015-12-07 04:51:36', '2015-12-07 04:51:36'),
(15, 'dfdf', 'admin@gmail.com', 213213, 3, '2015-12-07 04:52:18', '2015-12-07 04:52:18'),
(16, 'second', 'vinodjoshi6219@yahoo.com', 213213, 3, '2015-12-07 04:59:53', '2015-12-07 04:59:53'),
(17, 'second', 'vinodjoshi6219@yahoo.com', 213213, 3, '2015-12-07 05:00:48', '2015-12-07 05:00:48'),
(18, 'second', 'vinodjoshi6219@yahoo.com', 213213, 3, '2015-12-07 05:01:54', '2015-12-07 05:01:54'),
(19, 'second', 'vinodjoshi6219@yahoo.com', 213213, 2, '2015-12-07 05:04:12', '2015-12-07 05:04:12'),
(20, 'second', 'vinodjoshi6219@yahoo.com', 213213, 3, '2015-12-07 05:08:00', '2015-12-07 05:08:00'),
(21, 'second', 'vinodjoshi6219@yahoo.com', 213213, 3, '2015-12-07 05:08:42', '2015-12-07 05:08:42'),
(22, 'second', 'vinodjoshi6219@yahoo.com', 213213, 3, '2015-12-07 05:12:08', '2015-12-07 05:12:08'),
(23, 'dfdf', 'vinodjoshi6219@yahoo.com', 213213, 3, '2015-12-07 05:14:57', '2015-12-07 05:14:57'),
(24, 'fs', 'vinodjoshi6219@yahoo.com', 213213, 3, '2015-12-07 05:15:22', '2015-12-07 05:15:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
