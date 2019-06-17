-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 17, 2019 at 08:42 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `kakeibo`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `balance_date` date DEFAULT NULL,
  `in_out` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(128) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `created_at`, `user_id`) VALUES
(1, 'ぱち', '2019-06-17 02:27:56', 1),
(2, 'すろ', '2019-06-17 02:28:02', 1),
(3, '雑貨', '2019-06-17 02:28:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logined_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`user_id`, `user_name`, `created_at`, `logined_at`, `password`) VALUES
(1, 'admin', '2019-04-08 01:18:45', '2019-04-08 01:18:45', 'pass'),
(2, 'test2', '2019-05-14 07:12:17', '2019-05-14 07:12:17', 'passqord'),
(3, 'p', '2019-05-14 08:09:06', '2019-05-14 08:09:06', 'p'),
(4, 'test', '2019-05-14 08:09:28', '2019-05-14 08:09:28', 'root'),
(5, 'kaji', '2019-05-14 09:19:15', '2019-05-14 09:19:15', 'root'),
(6, 'pati', '2019-05-17 01:32:31', '2019-05-17 01:32:31', 'root'),
(7, 'pati', '2019-05-17 01:33:07', '2019-05-17 01:33:07', 'root'),
(8, 'test', '2019-05-27 00:39:15', '2019-05-27 00:39:15', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
