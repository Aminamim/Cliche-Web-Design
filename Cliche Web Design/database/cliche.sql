-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 12:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cliche`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `dscrp` varchar(200) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `recepient` varchar(100) NOT NULL,
  `occasion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `title`, `price`, `image`, `dscrp`, `catagory`, `recepient`, `occasion`) VALUES
(1, 'Elegant House Model', 1200, 'house.jpg', 'An elegant handmade mordern house design', 'Handmade', 'Friend', 'Birthday'),
(2, 'Black Mug', 200, 'mugblk.jpg', 'Charcoal Black Mug', 'Minimal', 'friend', 'casual'),
(3, 'Vintage Telescope', 2000, 'tel.jpg', 'A Unique and Authentic item of the 60s', 'Luxurious', 'Men', 'Birthday'),
(4, 'Silver Earring', 150, 'ear.jpg', 'A beautiful metal earring', 'Accessories', 'women', 'Anniversary'),
(5, 'Gift Basket for Newborn', 0, 'baby.jpg', 'The perfect gift basket for a newborn. We can fill it up with your requirements.', 'Personalized', 'Kids', 'Casual'),
(6, 'Teracotta Dinner Set', 1000, 'dinset.jpg', 'A perfect unique gift to give at any occassion', 'Minimal', 'All', 'Wedding'),
(7, 'Cute Showpiece', 200, 'show.jpg', 'A cute casual showpiece', 'Casual', 'Friend', 'Casual'),
(8, 'Crow Paint', 1500, 'lux.jpg', 'A luxorious pil paint.Perfect for living room decoration.', 'Luxurious', 'women', 'Anniversary'),
(9, 'Addidas Cap', 900, 'ad.jpg', 'Addidas Baseball Cap', 'Casual', 'Men', 'Birthday'),
(10, 'Wooden Bluetooth Speaker', 1200, 'blsp.jpg', 'Bluetooth speaker with wooden design', 'Minimal', 'Men', 'Birthday'),
(11, 'Frozen Figure', 800, 'elsa.jpg', 'Original Elsa Figure From Frozen 2', 'Casual', 'Kids', 'Birthday'),
(33, 'Big Ben Showpiece', 300, 'bigben.jpg', 'Its an Antique Showpiece', 'Antiques', 'all', 'casual'),
(44, 'Stone Bracelet', 800, 'bracelet.jpg', 'Gold plated blue stone bracelet. Golden color.', 'Accessories', 'women', 'Anniversary'),
(122, 'HeadPhone Black', 500, 'hdphn.jpg', 'Black head phone', 'Accessories', 'men', 'casual'),
(123, 'FRuit juice Bundle', 2000, 'dr.jpg', 'Barn farm authentic drinks. Contains 8 cans ', 'Casual', 'Friend', 'Party'),
(124, 'Coffee Beans', 500, 'cf.jpg', 'A classy gift for a coffee lover', 'Casual', 'Friend', 'Casual'),
(125, 'Handmade DIY Lamp', 300, 'lmp.jpg', 'Cute handmade lamp', 'Handmade', 'women', 'Birthday');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `orderId` int(11) NOT NULL,
  `pId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`orderId`, `pId`, `userId`, `name`, `phone`, `address`, `delivery`) VALUES
(1, 2, 0, 'mina', '19', '', ''),
(2, 4, 0, 'mina', '19', '', 'Courier'),
(3, 2, 0, 'mina', '19', '', 'Cash'),
(4, 6, 0, 'Siza', '019', '', 'Cash'),
(5, 6, 0, 'siza', '019', 'Bondor, Narayanganj', 'Cash'),
(6, 9, 0, 'Admin', '0', '', 'Cash'),
(7, 8, 9, 'Anan', '<br />\r\n<b>', 'bondorrr', 'Courier'),
(8, 3, 0, 'mim', '01xxxxxxxxx', 'Bondor', 'Courier'),
(9, 123, 0, 'Amina', '016', 'Bondor', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `psw` varchar(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `privilage` int(1) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `mail`, `psw`, `phone`, `privilage`, `address`) VALUES
(1, 'mim', 'm@m', 'mim', '19', 0, ''),
(72, 'mina', 'm@m', 'mina', '19', 0, ''),
(74, 'anan', 'an@n', 'anan', '18', 0, ''),
(76, 'sadia', 's@dia', 'sadia', '13', 0, ''),
(77, 'Admin', 'admin@admin', 'Admin', '0', 1, ''),
(79, 'ela', 'el@', 'ela', '0193', 0, ''),
(84, 'siza', 'siza', 'siza', '019', 0, 'Bondor, Narayanganj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `pId` (`pId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `products` (`pId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
