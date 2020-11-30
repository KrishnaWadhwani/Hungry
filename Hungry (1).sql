-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2020 at 01:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hungry`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `piid` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `food_type` varchar(100) NOT NULL,
  `sellername` varchar(100) NOT NULL,
  `selleremail` varchar(100) NOT NULL,
  `selleraddress` varchar(100) NOT NULL,
  `selleraddress2` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `sellerpincode` varchar(100) NOT NULL,
  `costumerpincode` varchar(100) NOT NULL,
  `costumercno` varchar(100) NOT NULL,
  `sellercno` varchar(100) NOT NULL,
  `costumeraddress` varchar(100) NOT NULL,
  `costumeremail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companyfund`
--

CREATE TABLE `companyfund` (
  `id` int(11) NOT NULL,
  `companyfund` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `drivename` varchar(100) NOT NULL,
  `drivermail` varchar(100) NOT NULL,
  `drivercno` varchar(100) NOT NULL,
  `driveraddr` varchar(100) NOT NULL,
  `drivertpg` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL,
  `upat` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL,
  `upat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `cno` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `income` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `piid` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `product-name` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `sellername` varchar(100) NOT NULL,
  `selleremail` varchar(100) NOT NULL,
  `sellercno` varchar(100) NOT NULL,
  `selleraddress` varchar(100) NOT NULL,
  `selleraddress2` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `costumeraddress` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `dish` varchar(100) NOT NULL,
  `costumeremail` varchar(100) NOT NULL,
  `costumercno` varchar(100) NOT NULL,
  `costumername` varchar(100) NOT NULL,
  `piid` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `selldb`
--

CREATE TABLE `selldb` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `cno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `doi` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `address2` varchar(500) NOT NULL,
  `dish` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `name` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyfund`
--
ALTER TABLE `companyfund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindb`
--
ALTER TABLE `logindb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selldb`
--
ALTER TABLE `selldb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companyfund`
--
ALTER TABLE `companyfund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logindb`
--
ALTER TABLE `logindb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `selldb`
--
ALTER TABLE `selldb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
