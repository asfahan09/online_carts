-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 06:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_carts`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_Id` int(11) NOT NULL,
  `Category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_Id`, `Category`) VALUES
(1, 'Watches'),
(2, 'Mobiles'),
(3, 'airpods'),
(4, 'hodiee'),
(5, 'shoes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prodname` varchar(100) NOT NULL,
  `prodprice` int(11) NOT NULL,
  `prodimage` varchar(255) NOT NULL,
  `Prod_Desc` varchar(255) NOT NULL,
  `Prod_Category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prodname`, `prodprice`, `prodimage`, `Prod_Desc`, `Prod_Category`) VALUES
(1, 'Smart Watch', 6700, 'assets/images/smartwatch.png', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price. ', 1),
(4, 'Smart watch', 780, 'assets/images/smartwatch2.webp', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price. ', 1),
(5, 'Smart Watch', 6800, 'assets/images/smartwatch3.gif', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(6, 'Smart Watch', 670, 'assets/images/smartwatch4.webp', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(7, 'Smart Watch', 4000, 'assets/images/watch5.jpg', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(8, 'Smart Watch', 4000, 'assets/images/watch6.jpg', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(9, 'Smart Watch', 4000, 'assets/images/watch7.jpg', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(10, 'Smart Watch', 7000, 'assets/images/watch8.jpg', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(11, 'Smart Watch', 7000, 'assets/images/watch9.jpg', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(12, 'Smart Watch', 7000, 'assets/images/watch10.jpg', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(13, 'Smart Watch', 5670, 'assets/images/watch11.jpg', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(15, 'Smart Watch', 5670, 'assets/images/smartwatch12.webp', 'Shophive is the best place to buy Smart Watches in Pakistan and you can find them at lowest price.', 1),
(16, 'Smart Phone', 67000, 'assets/images/mobile1.webp', 'Get your hands on the hottest smartphones in Pakistan at MyShop.PK', 2),
(17, 'Smart Phone', 67000, 'assets/images/mobile2.webp', 'Get your hands on the hottest smartphones in Pakistan at MyShop.PK', 2),
(18, 'Smart Phone', 67000, 'assets/images/mobile3.webp', 'Get your hands on the hottest smartphones in Pakistan at MyShop.PK', 2),
(19, 'Smart Phone', 30000, 'assets/images/mobile4.png', 'Get your hands on the hottest smartphones in Pakistan at MyShop.PK', 2),
(20, 'Smart Phone', 30500, 'assets/images/mobile5.png', 'Get your hands on the hottest smartphones in Pakistan at MyShop.PK', 2),
(21, 'Smart Phone', 30500, 'assets/images/mobile6.png', 'Get your hands on the hottest smartphones in Pakistan at MyShop.PK', 2),
(22, 'Smart Phone', 30500, 'assets/images/mobile7.webp', 'Get your hands on the hottest smartphones in Pakistan at MyShop.PK', 2),
(23, 'Smart Phone', 50, 'assets/images/mobile8.webp', 'Get your hands on the hottest smartphones in Pakistan at MyShop.PK', 2),
(24, 'Airbuds', 800, 'assets/images/AP 01.png', 'Audionic is the largest distributor of Wireless Earbuds in Pakistan.', 3),
(25, 'Airbuds', 800, 'assets/images/AP 02.png', 'Audionic is the largest distributor of Wireless Earbuds in Pakistan.', 3),
(26, 'Airbuds', 3000, 'assets/images/AP 03.png', 'Audionic is the largest distributor of Wireless Earbuds in Pakistan.', 3),
(27, 'Airbuds', 600, 'assets/images/AP 04.png', 'Audionic is the largest distributor of Wireless Earbuds in Pakistan.', 3),
(28, 'Airbuds', 7800, 'assets/images/AP 05.png', 'Audionic is the largest distributor of Wireless Earbuds in Pakistan.', 3),
(29, 'Airbuds', 3070, 'assets/images/AP 06.png', 'Audionic is the largest distributor of Wireless Earbuds in Pakistan.', 3),
(30, 'Airbuds', 2500, 'assets/images/AP 07.png', 'Audionic is the largest distributor of Wireless Earbuds in Pakistan.', 3),
(31, 'Airbuds', 2590, 'assets/images/AP 08.png', 'Audionic is the largest distributor of Wireless Earbuds in Pakistan.', 3),
(32, 'Hoodie', 4000, 'assets/images/01.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(34, 'Hoodie', 4000, 'assets/images/02.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(35, 'Hoodie', 4800, 'assets/images/03.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(36, 'Hoodie', 4800, 'assets/images/04.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(37, 'Hoodie', 4800, 'assets/images/05.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(38, 'Hoodie', 4800, 'assets/images/06.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(39, 'Hoodie', 800, 'assets/images/07.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(40, 'Hoodie', 800, 'assets/images/09.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(41, 'Hoodie', 800, 'assets/images/10.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(42, 'Hoodie', 2300, 'assets/images/11.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(43, 'Hoodie', 2300, 'assets/images/12.png', 'Shop high quality Mens Hoodies online Shopping at the best price in Pakistan. ', 4),
(44, 'Shoes', 4000, 'assets/images/shoe1.jpeg', ' Fully Lined Supple Glove Leather Interior .', 5),
(46, 'Shoes', 3490, 'assets/images/shoe3.jpeg', 'Fully Lined Supple Glove Leather Interior .', 5),
(47, 'Shoes', 1490, 'assets/images/shoe4.jpeg', 'Fully Lined Supple Glove Sports Interior .', 5),
(48, 'Shoes', 1490, 'assets/images/shoe5.jpeg', 'Fully Lined Supple Glove Sports Interior .', 5),
(49, 'Shoes', 5490, 'assets/images/shoe6.jpeg', 'Fully Lined Supple Glove Sports Interior .', 5),
(53, 'Shoes', 6003, 'assets/images/shoe2.jpeg', 'Fully Lined Supple Glove Leather Interior .', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwordd` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `Phone` varchar(11) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `passwordd`, `address`, `Phone`, `role`) VALUES
(1, 'Asfhan', 'asfahan@gmail.com', '12345', 'home', '12345678988', 2),
(2, 'wardah', 'xyz@gmail.com', 'abc123', 'karachi', '12345678901', 2),
(3, 'Ibrahim', 'xyz@gmail.com', 'abc123', 'lahore', '12345678908', 2),
(4, 'Ibrahim', 'xyz@gmail.com', 'abc123', 'lahore', '12345678908', 2),
(5, 'asfand', 'xyz@gmail.com', '123', 'lahore', '12345678988', 2),
(6, 'admin', 'admin@gmail.com', 'admin123', 'karachi', '03124567894', 1),
(7, 'Mubsir', 'mubsir@gmail.com', 'mubsir', 'I block', '03172239904', 2),
(9, 'Arbaz', 'arbaz@gmail.com', '6767', 'aotech', '7654', 1),
(10, 'talha', 'talha@gmail.com', 'talha', 'new', '98768868686', 2),
(11, 'hina', 'hina@gmail.com', 'hina', '234567', '0987654', 2),
(12, 'jannat', 'jannat@gmail.com', 'janat', 'home', '98765', 2),
(13, 'anus', 'anus@gmail.com', 'anus', 'hme', '09876876', 2),
(14, 'Imran', 'imran@gmail.com', 'imran', 'home', '0987654', 1),
(15, 'niazi', 'nizazi@gmail.com', '234', '2345', '2334', NULL),
(16, 'xubi', 'xubi@gmail.com', 'xubi', 'home', '098765', NULL),
(17, 'Ibrahim', 'xyz@gmail.com', '112233', 'street', '12345678988', 2),
(18, 'kuch bhiii', 'kuchbhi@gmail.com', 'kuchbhi', 'lahore', '090078601', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cat_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `Prod_Category` (`Prod_Category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Cat_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Prod_Category`) REFERENCES `categories` (`Cat_Id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
