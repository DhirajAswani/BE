-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2019 at 03:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_contact_number` int(10) NOT NULL,
  `company_identification_number` int(11) NOT NULL,
  `company_email_id` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`uid`, `company_name`, `company_address`, `company_contact_number`, `company_identification_number`, `company_email_id`) VALUES
(1, 'Sahil', 'Chopra court', 1234567898, 12546, 'sahil@gmail.com'),
(2, 'Dhiraj', 'Near New Era School', 1234569877, 14588, 'dhiraj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `manufacturer_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `manufacturer_product_cost`, `wholesaler_product_cost`, `retailer_product_cost`, `image_extension`, `product_power`, `best_before_months`, `product_contents`, `product_supervision`, `product_temp_range`, `product_mg`, `manufacturer_id`) VALUES
(1, 'Metacin', 20, 22, 24, '.jpg', 400, 12, 'aspirin,etc.', 'No', 45, 25, 1),
(2, 'Crocin', 40, 43, 45, '.jpg', 400, 24, 'aspirin,etc.', 'No', 45, 30, 1),
(3, 'HH LEVO M', 39, 43, 46, '.jpg', 455, 30, 'etc.', 'jpg.', 45, 60, 2),
(4, 'Levocitrizine', 40, 45, 55, '.jpg', 60, 24, 'etc.', 'No', 50, 45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

DROP TABLE IF EXISTS `retailer`;
CREATE TABLE IF NOT EXISTS `retailer` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `shop_email_id` varchar(255) NOT NULL,
  `shop_telephone_no` int(10) NOT NULL,
  `gst_number` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retailer_order`
--

DROP TABLE IF EXISTS `retailer_order`;
CREATE TABLE IF NOT EXISTS `retailer_order` (
  `retailer_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `retailer_id` int(11) NOT NULL,
  `wholesaler_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_cost` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`retailer_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler`
--

DROP TABLE IF EXISTS `wholesaler`;
CREATE TABLE IF NOT EXISTS `wholesaler` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `warehouse_name` varchar(255) NOT NULL,
  `warehouse_address` varchar(255) NOT NULL,
  `warehouse_email_id` varchar(255) NOT NULL,
  `warehouse_telephone_no` int(10) NOT NULL,
  `gst_number` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler_manufacturer`
--

DROP TABLE IF EXISTS `wholesaler_manufacturer`;
CREATE TABLE IF NOT EXISTS `wholesaler_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `wholesaler_id` int(11) NOT NULL,
  `connection_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler_order`
--

DROP TABLE IF EXISTS `wholesaler_order`;
CREATE TABLE IF NOT EXISTS `wholesaler_order` (
  `wholesaler_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `wholesaler_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_cost` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`wholesaler_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
