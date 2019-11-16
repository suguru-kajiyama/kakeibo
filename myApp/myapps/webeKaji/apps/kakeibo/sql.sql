-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 16, 2019 at 05:44 AM
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
  `money` int(11) DEFAULT '0',
  `category_id` int(11) DEFAULT '3',
  `deleteFlag` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `user_id`, `balance_date`, `in_out`, `created_at`, `money`, `category_id`, `deleteFlag`) VALUES
(42, 1, '2019-11-01', -1, '2019-11-12 06:48:40', 3000, 3, 0),
(43, 1, '2019-11-01', 1, '2019-11-12 06:50:15', 300, 1, 0),
(44, 1, '2019-11-02', 1, '2019-11-12 06:51:23', 300, 3, 0),
(45, 1, '2017-02-28', -1, '2019-11-12 09:06:01', 10000, 3, 0),
(46, 1, '2019-06-11', -1, '2019-11-12 09:07:42', 4999, 3, 0),
(47, 1, '2019-11-01', -1, '2019-11-12 09:09:02', 999, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(128) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `deleteFlag` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `created_at`, `user_id`, `deleteFlag`) VALUES
(1, 'ぱち', '2019-06-17 02:27:56', 1, 0),
(2, 'すろ', '2019-06-17 02:28:02', 1, 0),
(3, '雑貨', '2019-06-17 02:28:07', 1, 0),
(4, '雑貨', '2019-07-09 07:03:03', 10, 0),
(5, 'ぱち', '2019-07-09 07:46:25', 10, 0),
(6, 'すろ', '2019-07-09 08:27:56', 10, 0),
(7, '食費', '2019-07-09 08:28:07', 10, 0),
(8, '雑貨', '2019-07-23 06:55:13', 11, 0),
(9, 'test', '2019-07-29 05:27:47', 12, 0),
(10, 't', '2019-10-29 08:22:44', 1, 1),
(11, 'test', '2019-11-16 02:39:25', 1, 1),
(12, 'aa', '2019-11-16 02:44:14', 1, 1),
(13, 'aaa', '2019-11-16 02:44:54', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logined_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(128) DEFAULT NULL,
  `deleateFlag` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`user_id`, `user_name`, `created_at`, `logined_at`, `password`, `deleateFlag`) VALUES
(1, 'admin', '2019-04-08 01:18:45', '2019-04-08 01:18:45', 'pass', 0),
(4, 'test', '2019-05-14 08:09:28', '2019-05-14 08:09:28', 'root', 0),
(5, 'kaji', '2019-05-14 09:19:15', '2019-05-14 09:19:15', 'root', 0),
(6, 'pati', '2019-05-17 01:32:31', '2019-05-17 01:32:31', 'root', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
