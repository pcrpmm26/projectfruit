-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 05:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catName`) VALUES
(1, 'Hot Season'),
(2, 'Cool Season'),
(3, 'Rain Season');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `order_detail_quantity` int(4) NOT NULL,
  `order_detail_price` decimal(10,2) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `status_process_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) NOT NULL,
  `price_totle` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `cust_id` varchar(100) NOT NULL,
  `status_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `price_totle`, `order_date`, `cust_id`, `status_id`) VALUES
(1, 250, '2021-02-25 11:47:23', '6', 1),
(2, 340, '2021-02-25 12:29:59', '6', 1),
(3, 20, '2021-02-25 12:54:16', '1', 1),
(4, 190, '2021-02-25 12:55:49', '5', 1),
(5, 20, '2021-02-25 13:51:01', '1', 1),
(6, 20, '2021-02-25 13:51:46', '1', 0),
(7, 150, '2021-02-25 13:52:55', '1', 1),
(8, 20, '2021-03-02 14:35:33', '1', 0),
(9, 20, '2021-03-02 14:35:45', '1', 1),
(10, 30, '2021-03-02 15:55:29', '1', 1),
(11, 30, '2021-03-04 14:13:03', '7', 1),
(12, 180, '2021-03-04 14:14:12', '7', 1),
(13, 300, '2021-03-04 14:17:01', '7', 1),
(14, 300, '2021-03-05 16:26:55', '1', 1),
(15, 350, '2021-03-05 16:27:56', '1', 1),
(16, 20, '2021-03-09 08:55:49', '1', 1),
(17, 150, '2021-03-09 08:57:59', '2', 1),
(18, 150, '2021-03-09 08:58:49', '2', 1),
(19, 200, '2021-03-09 09:00:22', '2', 1),
(20, 20, '2021-03-11 19:46:06', '1', 1),
(21, 20, '2021-03-11 19:46:36', '1', 1),
(22, 150, '2021-03-11 19:47:21', '2', 1),
(23, 20, '2021-03-12 09:32:58', '8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(70) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_pic` varchar(50) CHARACTER SET utf8 NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `qty` int(255) NOT NULL,
  `catid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_pic`, `product_price`, `qty`, `catid`) VALUES
(1, 'มะม่วง', 'มะม่วงเป็นผลไม้รสหวานที่หลายชื่นชอบ เต็มไปด้วยสารต้านอนุมูลอิสระ ', 'shutterstock_1214051554.jpg', '20.00', 300, ' 1'),
(22, 'มังคุด', 'มังคุดอุดมไปด้วยสรรพคุณอย่างสารต้านอนุมูลอิสระหลากชนิด ', 'shutterstock_460997758.jpg', '30.00', 1500, ' 1'),
(23, 'แตงโม', 'ผลไม้ฉ่ำน้ำชนิดนี้อุดมไปด้วยไลโคปีน วิตามิน C B1 B5 ', 'HappyFresh-Summer-Fruits-Watermelon.jpg', '50.00', 2000, ' 1'),
(24, 'สับปะรด', 'ผลไม้หน้าร้อนอย่างสับปะรดเต็มไปด้วยวิตามิน เอนไซม์ ', 'HappyFresh-Summer-Fruits-Pineapple.jpg', '20.00', 500, ' 1'),
(25, 'องุ่น', 'องุ่นจัดได้ว่าเป็นผลไม้ที่มีสายพันธุ์ค่อนข้างหลากหลายในประเทศไทย ', 'grapes-thumnail.jpg', '30.00', 1600, ' 2');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `custaddr` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `fullname`, `username`, `useremail`, `custaddr`, `password`, `regdate`, `role_id`) VALUES
(1, 'chalermchai sarapee', 'tan', 'tan.yout001@gmail.com', '55/1 55', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-25 13:25:19', 1),
(2, 'tantahai', 'tan2', 'tan.yout001@gmail.com', '99/25', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-25 13:31:13', 1),
(3, 'chalermchai sarapee', 'test', 'tannanongna77@gmail.com', '55/1 หมู่5 ตำบลวังเย็น อำดภอเมือง จังหวัดนครปฐม', 'b4b147bc522828731f1a016bfa72c073', '2021-01-26 04:06:08', 1),
(4, 'chalermchai sarapee', 'chalermchai', 'tan.yout001@gmail.com', '55/1 55', 'c20ad4d76fe97759aa27a0c99bff6710', '2021-01-26 04:55:11', 1),
(5, 'admin', 'admin', 'tan.yout001@gmail.com', '99/25', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-28 04:00:25', 0),
(6, 'toy', 'toy', 'toy@gmail.com', 'toy', '10016b6ed5a5b09be08133fa2d282636', '2021-02-25 03:32:21', 0),
(7, 'ก', 'tk', 'tan.yout001@gmail.com', '55/1 55', '202cb962ac59075b964b07152d234b70', '2021-03-04 07:11:31', 0),
(8, 'chalermchai', 'tanthai', 'tan.yout001@gmail.com', '94 m5', '81dc9bdb52d04dc20036dbd8313ed055', '2021-03-12 02:32:04', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
