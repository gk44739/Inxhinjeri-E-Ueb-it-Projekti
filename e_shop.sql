-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 11:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date/time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `subject`, `email`, `attachment`, `message`, `date/time`) VALUES
(10, 'test', 'gentrittkrasniqi@gmail.com', 'applewatch.png', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', '2020-07-15 23:41:26'),
(11, 'test', 'gentrittkrasniqi@gmail.com', '', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', '2020-07-15 23:41:54'),
(12, 'test', 'gentrittkrasniqi@gmail.com', '', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', '2020-07-15 23:42:03'),
(13, 'test', 'gentrittkrasniqi@gmail.com', 'applewatch_1.png', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', '2020-07-15 23:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `work_position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `photo`, `name`, `surname`, `work_position`) VALUES
(1, 'person1.png', 'James', 'Smith', 'Developer'),
(3, 'Person2.png', 'Amelia', 'Smith', 'CEO'),
(4, 'person3.png', 'Liam', 'Williams', 'Front-End Developer');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `photo_main` varchar(200) NOT NULL,
  `photo_1` varchar(200) NOT NULL,
  `photo_2` varchar(200) NOT NULL,
  `photo_3` varchar(200) NOT NULL,
  `user_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `description`, `photo_main`, `photo_1`, `photo_2`, `photo_3`, `user_ID`) VALUES
(5, 'MacBook Pro 16â€', 2399.02, 'Designed for those who defy limits and change the world, the new MacBook Pro is by far the most powerful notebook weâ€™ve ever made. With an immersive 16-inch Retina display, superfast processors, next-generation graphics, the largest battery capacity ever in a MacBook Pro, a new Magic Keyboard, and massive storage, itâ€™s the ultimate pro notebook for the ultimate user.', 'macbook-1.png', 'macbook-2.jpg', 'macbook-3.jpg', 'macbook-4.jfif', 1),
(6, 'MacBook Pro 13â€', 1299.01, 'MacBook Pro elevates the notebook to a whole new level of performance and portability. Wherever your ideas take you, youâ€™ll get there faster than ever with highâ€‘performance processors and memory, advanced graphics, blazingâ€‘fast storage, and more â€” all in a compact 3-pound package.', 'macbook13_1.png', 'macbook13_2.png', 'macbook13_3.png', 'macbook13_4.png', 1),
(10, 'Apple iPhone 11 ', 849.03, 'Meet iPhone 11. All-new dual-camera system with Ultra Wide and Night mode. All-day battery. Six new colors. And the A13 Bionic, our fastest chip ever.', 'iphone11_1(purple).jpg', 'iphone11_featured.jpg', 'iphone11_2(purple).jpg', 'iphone11_3(purple).jpg', 1),
(14, 'Apple Watch Series 5', 1299.01, 'With a new Always-On Retina display, Apple Watch Series 5 is always there for you. To monitor your health, help you stay fit, and keep you connected.', 'applewatch.png', 'applewatch_1.png', 'applewatch_2.png', 'applewatch_3.png', 1),
(15, 'Apple iPhone 11 Pro Max', 1299.01, 'A transformative tripleâ€‘camera system that adds tons of capability without complexity. An unprecedented leap in battery life. And a mindâ€‘blowing chip that doubles down on machine learning and pushes the boundaries of what a smartphone can do. Welcome to the first iPhone powerful enough to be called Pro.', 'iphone11_1.png', 'iphone11_2.png', 'iphone11_3.png', 'iphone11_4.png', 4),
(18, 'Apple iPhone 11 Pro', 1449.04, 'A transformative tripleâ€‘camera system that adds tons of capability without complexity. An unprecedented leap in battery life. And a mindâ€‘blowing chip that doubles down on machine learning and pushes the boundaries of what a smartphone can do. Welcome to the first iPhone powerful enough to be called Pro.', 'iphone11basic_1.png', 'iphone11basic_2.png', 'iphone11basic_3.png', 'iphone11basic_4.png', 1),
(19, 'Power Wave 10 Dual Pad', 238.1, 'Power Wave 10 Dual PadPower Wave 10 Dual PadPower Wave 10 Dual PadPower Wave 10 Dual PadPower Wave 10 Dual PadPower Wave 10 Dual PadPower Wave 10 Dual Pad', 'product-2.png', 'featured__product-1.png', 'product-3.png', 'product-4.png', 1),
(20, 'PowerWave Wireless Charge', 98.04, 'PowerWave Wireless ChargePowerWave Wireless ChargePowerWave Wireless ChargePowerWave Wireless ChargePowerWave Wireless ChargePowerWave Wireless Charge', 'product-1.png', 'featured__product-2.png', 'product-2.png', 'product-3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `roli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `roli`) VALUES
(1, 'admin', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(10, 'genti', 'gentrittkrasniqi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(14, 'dion', 'dionkuka@hotmail.com', '202cb962ac59075b964b07152d234b70', 0),
(15, 'alban', 'as@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(16, 'lirijon', 'la45454@ubt-uni.net', '202cb962ac59075b964b07152d234b70', 0),
(17, 'genti3', 'gentrittkrasniqi3@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
