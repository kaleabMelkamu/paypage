-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 01:10 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paypage`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `created_at`) VALUES
('cus_KDyqLBHXsUb75Z', 'Kaleab', 'Melkamu', 'kaleabm18@gmail.com', '2021-09-14 01:20:52'),
('cus_KDza390f8UIfkx', 'Eyob', 'Abrham', 'eyo@gmail.com', '2021-09-14 02:06:41'),
('cus_KDzhU4002Qf4pE', 'Ermiyas', 'Teshome', 'ET@gmail.com', '2021-09-14 02:13:32'),
('cus_KDziod0oaoadhG', 'Ermiyas', 'Teshome', 'ET@gmail.com', '2021-09-14 02:14:35'),
('cus_KDzSJXqGID7KKG', 'Dawit', 'Amare', 'dave@gmail.com', '2021-09-14 01:58:18'),
('cus_KDzVW4PL6bgHlg', 'Eyob', 'Abrham', 'eyo@gmail.com', '2021-09-14 02:01:32'),
('cus_KE0wA5Hq294No3', 'Josh', 'Tekba', 'Jt@gmail.com', '2021-09-14 03:30:50'),
('cus_KE11pjoi3oJMte', 'Muluken', 'Temsegen', 'kaleabm18@gmail.com', '2021-09-14 03:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `customer_id`, `product`, `amount`, `currency`, `status`, `created_at`) VALUES
('ch_3JZXiuJJ8742NYJt06gkzGEi', 'cus_KDziod0oaoadhG', 'HtU digital', '899', 'usd', 'succeeded', '2021-09-14 02:14:36'),
('ch_3JZYuhJJ8742NYJt0veHOVt7', 'cus_KE0wA5Hq294No3', 'HtU digital', '899', 'usd', 'succeeded', '2021-09-14 03:30:50'),
('ch_3JZYznJJ8742NYJt0b8sOiuj', 'cus_KE11pjoi3oJMte', 'HtU digital', '899', 'usd', 'succeeded', '2021-09-14 03:36:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
