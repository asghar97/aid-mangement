-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 12:55 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aid_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain_currency`
--

CREATE TABLE `domain_currency` (
  `id` int(11) NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `currency_symbols` text NOT NULL,
  `currency_rate` int(10) NOT NULL,
  `status` tinyint(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `domain_currency`
--

INSERT INTO `domain_currency` (`id`, `currency_name`, `currency_symbols`, `currency_rate`, `status`, `created_at`, `updated_at`) VALUES
(9, 'US Dollar', '$', 142, 0, '2018-12-03 20:46:41', '2018-12-04 02:43:46'),
(10, 'Pakistani Rupee', 'Rs', 0, 0, '2018-12-03 22:15:31', '2018-12-04 06:15:31'),
(11, 'Japanese Yen', '¥', 200, 1, '2018-12-03 20:46:41', '2018-12-03 13:46:34'),
(12, 'British Pound', '£', 300, 0, '2018-12-03 05:47:12', '2018-12-03 13:47:12'),
(13, 'Chinese Yuan', '¥', 155, 0, '2018-12-03 05:48:13', '2018-12-03 13:48:13'),
(14, 'Indian Rupee', '₹', 78, 0, '2018-12-03 19:27:36', '2018-12-04 03:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `identity_no` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(80) NOT NULL,
  `country` varchar(80) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `company` varchar(80) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `identity_no`, `fname`, `lname`, `address`, `city`, `country`, `phone`, `email`, `company`, `image`, `created_at`, `updated_at`, `status`, `created_by`) VALUES
(1, '12345678', 'Shahzaib', 'Khalid', 'North Nazimabad, Karachi, Pakistan', 'Karachi', 'Pakistan', '+922136900074', 'ShahzaibKhalid99@gmail.com', 'Alisons Technology', '1.jpg', '2018-10-30 09:41:24', '2018-10-30 04:36:39', 1, 1),
(2, '123456', 'Suleman', 'Sarfaraz', 'New York City, USA', 'New York', 'America', '+923368063326', 'sulemansgk@gmail.com', 'Alisons Technology', '71RYQtJKHlL._UX385_.jpg', '2018-10-30 06:18:28', '2018-10-30 06:18:28', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `donar_id` int(11) NOT NULL,
  `amount` varchar(80) NOT NULL,
  `currency` varchar(80) NOT NULL,
  `type` varchar(80) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `donar_id`, `amount`, `currency`, `type`, `comment`, `created_at`, `updated_at`, `status`, `created_by`) VALUES
(1, 2, '2000', '10', 'Food Donations', 'Food Donation', '2018-10-30 12:42:03', '2018-10-30 07:42:03', 1, 1),
(2, 1, '5000', '10', 'Food Donations', 'Food Donation', '2018-11-28 13:52:23', '2018-11-28 13:52:23', 1, 1),
(3, 2, '4000', '13', 'Cloth Donations', 'Cloth Donation', '2018-11-28 13:59:54', '2018-11-28 13:59:54', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `amount` varchar(80) NOT NULL,
  `currency` varchar(80) NOT NULL,
  `type` varchar(80) NOT NULL,
  `comment` text NOT NULL,
  `location` varchar(256) NOT NULL,
  `date_added` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `amount`, `currency`, `type`, `comment`, `location`, `date_added`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, '2000', '10', 'Food Donations', 'Saylani Walfare Trust', 'Saylani Walfare', '2018-10-30', 1, '2018-10-30 07:49:01', '2018-10-30 07:49:01', 1),
(2, '5000', '10', 'Study Donations', 'Study Donation', 'London', '2018-11-29', 1, '2018-11-29 13:12:31', '2018-11-29 13:12:31', 1),
(3, '5000', '11', 'Study Donations', 'Study ', 'London', '2018-11-30', 1, '2018-11-30 17:50:16', '2018-11-30 17:50:16', 1),
(4, '10000', '9', 'Food Donations', 'Study ', 'London', '2018-12-01', 1, '2018-11-30 17:50:59', '2018-11-30 17:50:59', 1),
(5, '67000', '11', 'Cloth Donations', '', 'London', '2018-11-30', 1, '2018-11-30 19:08:33', '2018-11-30 19:08:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `status`, `date_added`, `created_at`, `updated_at`) VALUES
(1, 'Food Donations', 1, '2018-10-30 10:02:59', '2018-10-30 10:06:19', '2018-10-30 05:06:19'),
(2, 'Cloth Donations', 1, '2018-10-30 10:03:40', '2018-10-30 10:06:30', '2018-10-30 05:06:30'),
(3, 'Study Donations', 1, '2018-10-30 10:03:49', '2018-10-30 10:07:00', '2018-10-30 05:07:00'),
(4, 'Health Donations', 1, '2018-10-30 10:03:56', '2018-10-30 10:07:06', '2018-10-30 05:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `api_token`, `created_at`, `updated_at`, `user_type`, `image`, `status`, `created_by`) VALUES
(1, 'Arsalan Yousuf', 'admin', 'arsal.55.ay@gmail.com', '$2a$07$CYYskIChCg9OO3LxQ9kRC..a/fPCZC.UDyhjzTYMPqvHaEhqUGpTC', 'FPDd79YZpJg8iWunYQjg7u6fj7FfyIGxYqAy1rjWoKR4h5Yd67ktxNUPH9ZV', NULL, '2018-10-28 23:00:00', '2018-11-30 14:15:45', 'admin', 'not_found.png', 1, 0),
(2, 'Shahzaib Khalid', 'shahzaib', 'ShahzaibKhalid99@gmail.com', '$2y$10$rqPrseA2TivdpzziLlVzlOqx7aVpL1kSXvctti.toS05A.E7D4TW6', '$2y$10$rqPrseA2TivdpzziLlVzlOqx7aVpL1kSXvctti.toS05A.E7D4TW6', NULL, '2018-10-30 08:15:06', '2018-10-30 08:15:06', 'admin', '1.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain_currency`
--
ALTER TABLE `domain_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domain_currency`
--
ALTER TABLE `domain_currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
