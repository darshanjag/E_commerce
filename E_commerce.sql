-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2019 at 08:04 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-8+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `E_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `unique_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `quantity`, `price`, `user_id`, `unique_id`) VALUES
(1, 1, '1', '28.5', 0, '1742949036'),
(2, 1, '1', '28.5', 0, '1742949036'),
(3, 1, '1', '28.5', 0, '1152498071'),
(4, 1, '1', '28.5', 0, '1152498071'),
(6, 1, '1', '28.5', 0, '1397406139'),
(7, 1, '7', '28.5', 0, '1640060275'),
(8, 1, '1', '28.5', 0, '1640060275'),
(9, 1, '4', '28.5', 0, '1872286513'),
(11, 2, '4', '11.76', 0, '1872286513'),
(12, 2, '4', '11.76', 0, '1872286513'),
(13, 1, '5', '28.5', 0, '1872286513'),
(14, 1, '2', '28.5', 0, '1606023593'),
(15, 0, '', '', 0, '1606023593'),
(16, 0, '', '', 0, '1606023593'),
(17, 0, '', '', 0, '1606023593'),
(18, 0, '', '', 0, '1606023593'),
(19, 0, '', '', 0, '1606023593'),
(20, 0, '', '', 0, '1606023593'),
(21, 0, '', '', 0, '1606023593'),
(22, 0, '', '', 0, '1606023593'),
(23, 0, '', '', 0, '1606023593'),
(24, 0, '', '', 0, '1606023593'),
(25, 0, '', '', 0, '1606023593'),
(26, 0, '', '', 0, '1606023593'),
(27, 0, '', '', 0, '1606023593'),
(28, 0, '', '', 0, '1606023593'),
(29, 0, '', '', 0, '1606023593'),
(30, 0, '', '', 0, '1606023593'),
(31, 0, '', '', 0, '1606023593'),
(32, 0, '', '', 0, '1606023593'),
(33, 0, '', '', 0, '1606023593'),
(34, 0, '', '', 0, '1606023593'),
(35, 0, '', '', 0, '1606023593'),
(36, 0, '', '', 0, '1606023593'),
(37, 0, '', '', 0, '1606023593'),
(38, 0, '', '', 0, '1606023593'),
(39, 0, '', '', 0, '1606023593'),
(40, 0, '', '', 0, '1606023593'),
(41, 0, '', '', 0, '1606023593'),
(42, 0, '', '', 0, '1606023593'),
(43, 0, '', '', 0, '1606023593'),
(44, 0, '', '', 0, '1606023593'),
(45, 0, '', '', 0, '1606023593'),
(46, 0, '', '', 0, '1606023593'),
(47, 0, '', '', 0, '1606023593'),
(48, 0, '', '', 0, '1606023593'),
(49, 0, '', '', 0, '1606023593'),
(50, 0, '', '', 0, '1606023593'),
(51, 0, '', '', 0, '1606023593'),
(52, 0, '', '', 0, '1606023593'),
(53, 0, '', '', 0, '1606023593'),
(54, 1, '2', '28.5', 0, '1606023593'),
(55, 1, '1', '28.5', 0, '1606023593'),
(56, 1, '1', '28.5', 0, '1606023593'),
(57, 2, '1', '11.76', 0, '1606023593'),
(58, 1, '1', '28.5', 0, '1606023593'),
(59, 2, '1', '11.76', 0, '1606023593');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` enum('0','1') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_status`, `created_date`) VALUES
(1, 'Foods', '1', '2019-09-25 09:44:48'),
(2, 'Beverages', '1', '2019-09-25 09:44:56'),
(3, 'Frozon Foods', '1', '2019-09-25 09:45:10'),
(4, 'Backery', '1', '2019-09-25 09:45:16'),
(5, 'House holds', '1', '2019-09-25 09:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `product_status` enum('0','1') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `subcategory_id`, `product_name`, `quantity`, `price`, `discount`, `description`, `image`, `product_status`, `created_date`) VALUES
(1, 1, 1, 'Knorr Instant Soup (100 Gm)', '12', '30', '5', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\r\n\r\ndsdfsdfdsfdsgsgs', '5.png', '1', '2019-09-25 09:48:27'),
(2, 1, 2, 'Chings Noodles (75 Gm)', '100', '12', '2', 'dsfghhgjh', '6.png', '1', '2019-09-25 09:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping_detail`
--

CREATE TABLE `tbl_shipping_detail` (
  `ship_id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `gross_amount` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shipping_detail`
--

INSERT INTO `tbl_shipping_detail` (`ship_id`, `product_id`, `quantity`, `gross_amount`, `user_id`, `firstname`, `lastname`, `email_id`, `pincode`, `address`, `city`, `state`, `create_date`, `update_date`) VALUES
(1, '', '', '', 0, 'sdf', 'sadfsdf', 'asdfsaf@gmail.com', 'sdfsafd', 'asdfsaf', 'assdf', 'asdfsdf', '2019-09-30 06:48:38', '2019-09-30 06:48:38'),
(2, '', '', '', 0, 'sdf', 'sadfsdf', 'asdfsaf@gmail.com', 'sdfsafd', 'asdfsaf', 'assdf', 'asdfsdf', '2019-09-30 07:23:04', '2019-09-30 07:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `subcategory_status` enum('0','1') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `category_id`, `subcategory_name`, `subcategory_status`, `created_date`) VALUES
(1, 1, 'Soups', '1', '2019-09-25 09:46:35'),
(2, 1, 'Noodles', '1', '2019-09-25 09:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `role`, `is_active`, `created_date`) VALUES
(1, 'administrator', 'amidn', 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'master', '1', '2019-09-25 06:58:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping_detail`
--
ALTER TABLE `tbl_shipping_detail`
  ADD PRIMARY KEY (`ship_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_shipping_detail`
--
ALTER TABLE `tbl_shipping_detail`
  MODIFY `ship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
