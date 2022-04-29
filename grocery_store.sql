-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 03:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(4) NOT NULL COMMENT 'Category ID',
  `category_name` varchar(40) NOT NULL COMMENT 'category name',
  `category_image` longtext CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'beverages and drinks', 'assets/images/beverages.png'),
(2, 'Fruits and vegetables', 'assets/images/fruits.png'),
(3, 'baby products', 'assets/images/baby products.png'),
(4, 'personal care', 'assets/images/cosmetics.png'),
(5, 'cereals and grains', 'assets/images/grains.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(4) NOT NULL COMMENT 'Product ID',
  `product_categoryID` int(4) NOT NULL COMMENT 'Product Category',
  `product_storeID` int(4) NOT NULL COMMENT 'Product Store ID',
  `product_name` varchar(40) NOT NULL COMMENT 'Product Name',
  `product_price` varchar(40) NOT NULL COMMENT 'Product Price',
  `product_brand` varchar(40) NOT NULL COMMENT 'Product brand',
  `product_image` varchar(40) NOT NULL COMMENT 'Product Image',
  `product_section` varchar(40) NOT NULL COMMENT 'Product Section'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_categoryID`, `product_storeID`, `product_name`, `product_price`, `product_brand`, `product_image`, `product_section`) VALUES
(1, 1, 1, 'Sparkling Water - Club Soda', '20', 'Kinley', 'assets/images/store-drinks/all/1.jpg', 'Recommended'),
(2, 1, 1, 'Soft Drink - Lime Flavoured', '95', 'Sprite', 'assets/images/store-drinks/all/10.jpg', 'Recommended'),
(3, 1, 1, 'Thums Up - Soft Drink', '90', 'Thums Up', 'assets/images/store-drinks/all/2.jpg', 'Recommended'),
(4, 1, 1, 'Coca Cola Diet Coke ', '35', 'Coca Cola', 'assets/images/store-drinks/all/4.jpg', 'Recommended');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(4) NOT NULL,
  `store_categoryID` int(4) NOT NULL,
  `store_name` varchar(35) NOT NULL,
  `store_region` varchar(35) NOT NULL,
  `store_image` longtext NOT NULL,
  `store_category` varchar(40) NOT NULL COMMENT 'store category',
  `store_username` varchar(40) NOT NULL COMMENT 'store username',
  `store_password` varchar(40) NOT NULL COMMENT 'store password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_categoryID`, `store_name`, `store_region`, `store_image`, `store_category`, `store_username`, `store_password`) VALUES
(1, 1, 'Drink Frooty', 'Hinjewadi Pune Region', 'assets/images/drinks/1.jpg', 'beverages and drinks', 'store1', 'store1'),
(2, 1, 'Drinks Gallary', 'Pimpri Chinchwad Region - Pune', 'assets/images/drinks/04.jpg', 'beverages and drinks', 'store2', 'store2'),
(3, 1, 'Energy Drinkers', 'Cidco Region - Nashik', 'assets/images/drinks/10.jpg', 'beverages and drinks', 'store3', 'store3'),
(4, 1, 'Frooti Mazha', 'ABC Chowk Pune', 'assets/images/drinks/12.jpg', 'beverages and drinks', 'store4', 'store4'),
(5, 1, 'Store Ka Naam', 'Hinjewadi Region - Pune', 'assets/images/drinks/2.jpg', 'beverages and drinks', 'store5', 'store5'),
(6, 1, 'Drinks Wala', 'Pimpri Chinchwad - Region', 'assets/images/drinks/23.jpg', 'beverages and drinks', 'store6', 'store6'),
(7, 1, 'coca cola tu', 'Pune', 'assets/images/drinks/1.jpg', 'beverages and drinks', 'store7', 'store7');

-- --------------------------------------------------------

--
-- Table structure for table `store_application`
--

CREATE TABLE `store_application` (
  `application_no` int(4) NOT NULL COMMENT 'application number',
  `store_name` varchar(40) NOT NULL COMMENT 'store name',
  `store_category` varchar(40) NOT NULL COMMENT 'store category',
  `store_region` varchar(40) NOT NULL COMMENT 'store region',
  `contact` varchar(40) NOT NULL COMMENT 'contact'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_application`
--

INSERT INTO `store_application` (`application_no`, `store_name`, `store_category`, `store_region`, `contact`) VALUES
(1, 'coca cola tu', 'beverages and drinks', 'Pune', '0203023402');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(4) NOT NULL COMMENT 'user_id',
  `u_firstname` varchar(35) CHARACTER SET latin1 NOT NULL COMMENT 'user first name',
  `u_username` varchar(25) CHARACTER SET latin1 NOT NULL COMMENT 'username',
  `u_password` varchar(10) CHARACTER SET latin1 NOT NULL COMMENT 'password',
  `u_contact` varchar(12) CHARACTER SET latin1 NOT NULL COMMENT 'contact no.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_firstname`, `u_username`, `u_password`, `u_contact`) VALUES
(1, 'admin', 'admin', 'admin', '00000000'),
(2, 'shreyas', 'shreyas', 'shreyas', '12321231'),
(3, 'sauhard', 'sauhard', 'sauhard', '1231231');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `store_application`
--
ALTER TABLE `store_application`
  ADD PRIMARY KEY (`application_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Category ID', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Product ID', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store_application`
--
ALTER TABLE `store_application`
  MODIFY `application_no` int(4) NOT NULL AUTO_INCREMENT COMMENT 'application number', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'user_id', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
