-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 03:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmaledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `uid` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_contact_number` int(10) NOT NULL,
  `company_identification_number` int(11) NOT NULL,
  `company_email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`uid`, `company_name`, `company_address`, `company_contact_number`, `company_identification_number`, `company_email_id`) VALUES
(1, 'Sahil', 'Chopra court', 1234567898, 12546, 'sahil@gmail.com'),
(2, 'Dhiraj', 'Near New Era School', 1234569877, 14588, 'dhiraj@gmail.com'),
(3, 'Juhi', 'Aman talkies', 987009870, 12546, 'juhi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `manufacturer_product_cost` int(11) NOT NULL,
  `wholesaler_product_cost` int(11) NOT NULL,
  `retailer_product_cost` int(11) NOT NULL,
  `image_extension` varchar(255) NOT NULL,
  `product_power` int(11) NOT NULL,
  `best_before_months` int(11) NOT NULL,
  `product_contents` varchar(255) NOT NULL,
  `product_supervision` varchar(255) NOT NULL,
  `product_temp_range` int(11) NOT NULL,
  `product_mg` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `manufacturer_product_cost`, `wholesaler_product_cost`, `retailer_product_cost`, `image_extension`, `product_power`, `best_before_months`, `product_contents`, `product_supervision`, `product_temp_range`, `product_mg`, `manufacturer_id`) VALUES
(1, 'Metacin', 20, 22, 24, '.jpg', 400, 12, 'aspirin,etc.', 'No', 45, 25, 1),
(2, 'Crocin', 40, 43, 45, '.jpg', 400, 24, 'aspirin,etc.', 'No', 45, 30, 1),
(3, 'HH LEVO M', 39, 43, 46, '.jpg', 455, 30, 'etc.', 'no', 45, 60, 2),
(4, 'Levocitrizine', 40, 45, 55, '.jpg', 60, 24, 'etc.', 'No', 50, 45, 2),
(5, 'Combifllam', 20, 25, 30, '', 200, 8, 'aspirin', 'No', 30, 45, 1),
(6, 'catrazone', 23, 25, 30, '.jpg', 300, 12, 'abc,xyz...', 'no', 45, 35, 3),
(7, 'zenophill', 36, 38, 43, '.jpg', 50, 24, 'xyz,abc..', 'no', 50, 45, 3);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `uid` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `shop_email_id` varchar(255) NOT NULL,
  `shop_telephone_no` int(10) NOT NULL,
  `gst_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`uid`, `shop_name`, `shop_address`, `shop_email_id`, `shop_telephone_no`, `gst_number`) VALUES
(7, 'vanita', 'near netaji', 'vani@gmail.com', 1452369870, 145236),
(8, 'rahul', 'madhav srishti', 'king@gmail.com', 1236547890, 1452369);

-- --------------------------------------------------------

--
-- Table structure for table `retailer_order`
--

CREATE TABLE `retailer_order` (
  `retailer_order_id` int(11) NOT NULL,
  `retailer_id` int(11) NOT NULL,
  `wholesaler_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_cost` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `phone_number`, `email`, `password`, `type`) VALUES
(1, 'Sahil', 838080686, 'ssahil@gmail.com', 'abc123', 1),
(2, 'Dhiraj', 983009830, 'dhiraj@gmail.com', 'abc123', 1),
(3, 'Juhi', 987009870, 'juhi@gmail.com', 'abc123', 1),
(4, 'Chirag', 838018380, 'chirag@gmail.com', 'abc123', 2),
(5, 'Karan', 985009850, 'karan@gmail.com', 'abc1223', 2),
(6, 'Yogita', 1236547890, 'yogita@gmail.com', 'yogita', 2),
(7, 'vanita', 1236547890, 'vanita@gmail.com', 'vanita', 3),
(8, 'rahul', 1236547890, 'rahul@gmail.com', 'rahul', 3);

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler`
--

CREATE TABLE `wholesaler` (
  `uid` int(11) NOT NULL,
  `warehouse_name` varchar(255) NOT NULL,
  `warehouse_address` varchar(255) NOT NULL,
  `warehouse_email_id` varchar(255) NOT NULL,
  `warehouse_telephone_no` int(10) NOT NULL,
  `gst_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wholesaler`
--

INSERT INTO `wholesaler` (`uid`, `warehouse_name`, `warehouse_address`, `warehouse_email_id`, `warehouse_telephone_no`, `gst_number`) VALUES
(4, 'Chirag', 'Chopra court Ulhasnagar', 'chirag@gmail.com', 838018380, 231234892),
(5, 'karan', 'khemani unr 1', 'karan7@gmail.com', 1452364569, 125478),
(6, 'Yogita', 'near nehru chownk', 'abc@gmail.com', 1452369870, 125246);

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler_manufacturer`
--

CREATE TABLE `wholesaler_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `wholesaler_id` int(11) NOT NULL,
  `connection_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler_order`
--

CREATE TABLE `wholesaler_order` (
  `wholesaler_order_id` int(11) NOT NULL,
  `wholesaler_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_cost` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wholesaler_order`
--

INSERT INTO `wholesaler_order` (`wholesaler_order_id`, `wholesaler_id`, `manufacturer_id`, `product_id`, `product_quantity`, `received_date`, `total_cost`, `status`) VALUES
(1, 4, 1, 1, 12, '2019-10-30 13:25:25', 0, -1),
(2, 1, 1, 5, 80, '2019-10-10 03:51:40', 0, 0),
(3, 1, 1, 2, 30, '2019-10-10 04:11:56', 0, 0),
(4, 5, 1, 2, 30, '2019-10-30 12:41:05', 0, 0),
(5, 6, 3, 7, 20, '2019-10-30 12:41:05', 0, 1),
(6, 1, 3, 7, 15, '2019-10-30 12:42:42', 0, 0),
(7, 1, 3, 6, 20, '2019-10-30 12:42:42', 0, 1),
(8, 1, 2, 3, 29, '2019-10-30 12:43:58', 0, 0),
(9, 1, 2, 4, 30, '2019-10-30 12:43:58', 0, 1),
(10, 1, 2, 4, 15, '2019-10-30 12:45:37', 0, 0),
(11, 1, 3, 6, 27, '2019-10-30 12:45:37', 0, 1),
(12, 1, 1, 5, 22, '2019-10-30 13:14:27', 440, 0),
(13, 1, 1, 2, 25, '2019-10-30 13:15:39', 1000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `retailer_order`
--
ALTER TABLE `retailer_order`
  ADD PRIMARY KEY (`retailer_order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wholesaler`
--
ALTER TABLE `wholesaler`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wholesaler_order`
--
ALTER TABLE `wholesaler_order`
  ADD PRIMARY KEY (`wholesaler_order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `retailer`
--
ALTER TABLE `retailer`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `retailer_order`
--
ALTER TABLE `retailer_order`
  MODIFY `retailer_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wholesaler`
--
ALTER TABLE `wholesaler`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wholesaler_order`
--
ALTER TABLE `wholesaler_order`
  MODIFY `wholesaler_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
