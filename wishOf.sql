-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2020 at 11:41 PM
-- Server version: 5.7.30-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wytuelib_teamwishof`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer_dat`
--

CREATE TABLE `farmer_dat` (
  `id` int(11) NOT NULL,
  `f_name` varchar(225) NOT NULL,
  `age` varchar(225) NOT NULL,
  `info` text NOT NULL,
  `address` varchar(225) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farmer_dat`
--

INSERT INTO `farmer_dat` (`id`, `f_name`, `age`, `info`, `address`, `reg_date`, `status`) VALUES
(1, 'U Thar Aung', '56', '\r\nThe model village owns 5 acres of land but needs investors to grow maize.', '\r\n25th Thura Gone Village ', '2020-06-15 15:11:20', 1),
(2, 'U Thiha', '56', 'Test In Data Base for Info1', '75 Shan Koe Pin Village, Nyoung That Ywar', '2020-06-12 05:05:23', 12),
(3, 'U Thiha Khent', '56', 'Test In Data Base for Info2', '75 Shan Koe Pin Village, Nyoung That Ywar', '2020-06-12 05:05:23', 12),
(4, 'U Min Khent Kyaw', '87', 'Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222Test Data 22222', '75 Padaukpin Street KyiMyinDaing Tsp, Yangon', '2020-06-12 05:05:23', 12);

-- --------------------------------------------------------

--
-- Table structure for table `invest_dat`
--

CREATE TABLE `invest_dat` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `type_invest` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `company_name` varchar(225) NOT NULL,
  `company_id` varchar(225) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invest_dat`
--

INSERT INTO `invest_dat` (`id`, `name`, `email`, `phone`, `type_invest`, `password`, `company_name`, `company_id`, `reg_date`, `status`) VALUES
(1, 'testing', 'testing@gmail.com', '0900000000', '', '5d41402abc4b2a76b9719d911017c592', '', '', '2020-06-14 18:44:34', 1),
(2, 'testing', 'testing@gmail.com', '0900000000', '', '5d41402abc4b2a76b9719d911017c592', '', '', '2020-06-14 18:48:07', 1),
(3, 'testing', 'testign@gmail.com', '0900000000', '1', '0', '0', '6c6df59fc9a6c8523031238265cba829', '2020-06-14 19:13:18', 1),
(4, 'testing', 'testign@gmail.com', '0900000000', '1', '0', '0', '6c6df59fc9a6c8523031238265cba829', '2020-06-14 19:15:25', 1),
(5, 'test', 'testing@gmail.com', '0900000000', '1', '0', '0', 'fc5e038d38a57032085441e7fe7010b0', '2020-06-14 19:36:48', 1),
(6, 'testing', 'testing@gmail.com', '0900000000', '1', 'fc5e038d38a57032085441e7fe7010b0', '0', '0', '2020-06-14 19:37:51', 1),
(7, 'testing', 'naignaunglinn369@gmail.com', '0900000000', '2', '5d41402abc4b2a76b9719d911017c592', '0', '0', '2020-06-15 03:02:58', 1),
(8, 'testing', 'testing@gmail.com', '0900000000', '2', '6c6df59fc9a6c8523031238265cba829', 'testing', 'tesing', '2020-06-15 03:05:04', 1),
(9, 'Khant Ko Ko Aung', 'Khantkokoaung18@gmail.com', '09446863976', '1', 'c624811a858b6abc852f007abfce86ec', '0', '0', '2020-06-15 14:22:58', 1),
(10, 'DigitalFarmers', 'digitalfarmers@protonmail.com', '09794251341', '1', '38b2d2dd350ae3301e9743c112e81ca0', '0', '0', '2020-06-15 14:24:40', 1),
(11, 'DigitalFarmers', 'digitalfarmers@protonmail.com', '09794251341', '1', 'fc827897b0f22a5d0fd7a5e5d0f112b9', '0', '0', '2020-06-15 14:25:25', 1),
(12, 'testing', 'testing@gmail.com', '0900000000', '1', '5d41402abc4b2a76b9719d911017c592', '0', '0', '2020-06-15 14:25:39', 1),
(13, 'testing', 'testing@gmail.com', '0900000000', '1', 'ae2b1fca515949e5d54fb22b8ed95575', '0', '0', '2020-06-15 14:26:59', 1),
(14, 'DigitalFarmers', 'digitalfarmers@protonmail.com', '0900000000', '1', 'c44a471bd78cc6c2fea32b9fe028d30a', '0', '0', '2020-06-15 14:28:41', 1),
(15, 'Khant Ko Ko Aung', 'Khantkokoaung18@gmail.com', '09446863976', '1', 'c624811a858b6abc852f007abfce86ec', '0', '0', '2020-06-15 14:38:23', 1),
(16, 'testing', 'naingaunglinn369@gmail.com', '0900000000', '1', '5d41402abc4b2a76b9719d911017c592', '0', '0', '2020-06-15 15:11:58', 1),
(17, 'Min Khant Kyaw', 'digitalfarmers@protonmail.com', '0900000000', '1', 'ae2b1fca515949e5d54fb22b8ed95575', '0', '0', '2020-06-15 15:54:11', 1),
(18, 'testing', 'testing@gmail.com', '0900000000', '2', 'ae2b1fca515949e5d54fb22b8ed95575', 'company name', 'company id', '2020-06-15 16:30:49', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer_dat`
--
ALTER TABLE `farmer_dat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invest_dat`
--
ALTER TABLE `invest_dat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmer_dat`
--
ALTER TABLE `farmer_dat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invest_dat`
--
ALTER TABLE `invest_dat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
