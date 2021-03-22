-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 04:50 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flights`
--

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abreviation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `name`, `abreviation`, `city`, `state`, `zipcode`, `timezone`, `created_at`, `updated_at`) VALUES
(1, 'Kollam', 'KLM ll', 'THIRUVANANTHAPURAM', 'KERALA', '122022', '11:21', NULL, NULL),
(2, 'kochin', 'EKM', 'ERNAKULAM', 'KERALA', '12345', '13:40', NULL, NULL),
(3, 'Akhila', 'asd', 'ERNAKULAM', 'MAHARASHTRA', '2456', '17:57', NULL, NULL),
(5, 'Alli', 'AWS', 'KOZHIKODE', 'MAHARASHTRA', '1357', '10:23', NULL, NULL),
(7, 'joice', 'azxf', 'THIRUVANANTHAPURAM', 'NEWDELHI', '123456', '10:44', NULL, NULL),
(8, 'International Airport', 'KLM', 'THIRUVANANTHAPURAM', 'KERALA', '2468', '22:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flightname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `flightname`, `departure`, `arrival`, `class`, `cost`, `created_at`, `updated_at`) VALUES
(1, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic Class', 100, '2021-03-13 05:00:57', '2021-03-13 05:00:57'),
(2, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic Class', 100, '2021-03-13 05:33:48', '2021-03-13 05:33:48'),
(3, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 21:56:30', '2021-03-13 21:56:30'),
(4, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 21:57:44', '2021-03-13 21:57:44'),
(5, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 21:58:25', '2021-03-13 21:58:25'),
(6, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 22:00:32', '2021-03-13 22:00:32'),
(7, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 22:03:23', '2021-03-13 22:03:23'),
(8, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 22:04:02', '2021-03-13 22:04:02'),
(9, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 22:06:46', '2021-03-13 22:06:46'),
(10, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 22:08:05', '2021-03-13 22:08:05'),
(11, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 22:09:15', '2021-03-13 22:09:15'),
(12, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-13 22:10:36', '2021-03-13 22:10:36'),
(13, 'Arya', '12S', 'TRIVANDRUM', 'KOCHI', 'ecnomic', 200, '2021-03-14 01:43:43', '2021-03-14 01:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `flight` int(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`id`, `flight`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `counts`
--

CREATE TABLE `counts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counts`
--

INSERT INTO `counts` (`id`, `flight`, `created_at`, `updated_at`) VALUES
(1, '20', '2021-03-10 06:21:44', '2021-03-11 06:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deptime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bseat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fseat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eseat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fcost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bcost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `fno`, `fname`, `departure`, `depdate`, `deptime`, `dest`, `desdate`, `destime`, `bseat`, `fseat`, `eseat`, `fcost`, `bcost`, `ecost`, `created_at`, `updated_at`) VALUES
(1, 'dff', 'm,mnj', 'KOCHI', '2021-03-04', '19:53', 'TRIVANDRUM', '2021-03-18', '20:51', '60', '40', '30', '200', '500', '400', NULL, '2021-03-13 12:00:12'),
(2, 'Emirates', '12S', 'TRIVANDRUM', '2021-03-05', '10:51', 'KOCHI', '2021-03-05', '12:51', '60', '50', '47', '500', '150', '200', NULL, '2021-03-14 12:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `flight_notifications`
--

CREATE TABLE `flight_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_notifications`
--

INSERT INTO `flight_notifications` (`id`, `number`, `name`, `date`, `notification`, `created_at`, `updated_at`) VALUES
(1, 'Emirates', '12S', '2021-03-04', 'Delay by 10 minutess', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_03_09_150007_create_registers_table', 1),
(2, '2021_03_10_114944_create_flights_table', 2),
(3, '2021_03_11_061945_create_counts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `age` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phno` int(20) NOT NULL,
  `adno` int(20) NOT NULL,
  `loginid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `fname`, `lname`, `age`, `gender`, `address`, `phno`, `adno`, `email`, `pass`, `user_type`, `created_at`, `updated_at`) VALUES
(6, 'Arya', 'Raj', '23', 'female', 'Muthirakkalayil Angadical South Po', '7510188862', '86348484', 'arya@gmail.com', 'qwerty', '1', '2021-03-10 23:27:12', '2021-03-10 23:27:12'),
(7, 'Arya', 'Raj', '25', 'female', 'Muthirakkalayil Angadical South Po', '0907886756', '86348484', 'aryas@gmail.com', '$2y$10$nwRqnrMv5Nm5ZJXNBAzO6OeX3AKxF2eAgSgms/AMj5m6IgmeUzgDS', '1', '2021-03-14 03:30:00', '2021-03-14 03:30:00'),
(8, 'Kavya', 'B', '24', 'female', 'Kavya Nivas,Alappuzha', '0907886756', '86348484', 'kavya@gmail.com', '$2y$10$TxxrmAw4mhBnUA4hj2JUxeTzNpMOqI5hJuxobIGR0QKFSc95qs3hu', '0', '2021-03-14 03:33:39', '2021-03-14 03:33:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_notifications`
--
ALTER TABLE `flight_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counts`
--
ALTER TABLE `counts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flight_notifications`
--
ALTER TABLE `flight_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
