-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2024 at 04:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktk`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `adress` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Mở','Khóa') DEFAULT 'Mở',
  `role` enum('admin','user','shipper') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `Name`, `username`, `password`, `image`, `adress`, `phone`, `email`, `created_at`, `status`, `role`) VALUES
(1, 'kuro', 'admin', '123', NULL, 'Sơn Tây', '0867836619', 'mativi2005@gmail.co,', '2024-11-15 14:57:20', 'Mở', 'admin'),
(3, 'user', 'shipper001', '123', NULL, 'Hồ tùng mậu', '0123456788', '', '2024-11-15 17:09:07', 'Mở', 'shipper');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `variation_id` int NOT NULL,
  `unit_price` int NOT NULL COMMENT 'giá tại thời điểm cho vàp giỏ hàng',
  `quantity` int NOT NULL,
  `added at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'pizza'),
(2, 'hamburger');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_id` int NOT NULL,
  `discount_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `discount_value` int NOT NULL COMMENT 'phần trăm giảm giá',
  `minimum_order` int NOT NULL COMMENT 'giá trị tối thiểu của đơn hàng',
  `valid_from` timestamp NOT NULL COMMENT 'ngày bắt đầu',
  `valid_to` timestamp NOT NULL COMMENT 'ngày hết hạn',
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`discount_id`, `discount_code`, `discount_value`, `minimum_order`, `valid_from`, `valid_to`, `status`, `created_at`) VALUES
(1, 'SQLTEST', 10, 100000, '2024-11-15 15:24:45', '2024-11-15 15:24:45', 'active', '2024-11-15 15:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `product_status` enum('available','unavailable','delete') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_quantity` int NOT NULL,
  `category_id` int NOT NULL,
  `discount_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `product_price`, `product_image`, `product_status`, `product_quantity`, `category_id`, `discount_id`) VALUES
(1, 'pizza bòa', 'có size S M L', '500000', 'https://img.dominos.vn/cach-lam-banh-pizza-bo-2.jpg', 'available', 1000, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variation`
--

CREATE TABLE `product_variation` (
  `variation_id` int NOT NULL,
  `product_id` int NOT NULL,
  `variation_name` varchar(256) NOT NULL,
  `price` int NOT NULL,
  `status` enum('available','unavailable') NOT NULL,
  `variation_quantity` int NOT NULL COMMENT 'số lượng của biến thể ấy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_variation`
--

INSERT INTO `product_variation` (`variation_id`, `product_id`, `variation_name`, `price`, `status`, `variation_quantity`) VALUES
(1, 1, 'size S', 5000000, 'available', 50);

-- --------------------------------------------------------

--
-- Table structure for table `reset_account`
--

CREATE TABLE `reset_account` (
  `user_id` int NOT NULL,
  `reset_token` int DEFAULT NULL COMMENT 'mã để reset mk',
<<<<<<< HEAD
  `reset_expired` datetime DEFAULT NULL COMMENT 'thời gian hết hạn của mã ',
=======
  `reset_expiry` datetime DEFAULT NULL COMMENT 'thời gian hết hạn của mã ',
>>>>>>> 9515e8645d11d25fb642412b4e125c243376d52a
  `email_send_count` int NOT NULL DEFAULT '0' COMMENT 'số lần gửi mã OTP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE EVENT delete_expired_tokens
ON SCHEDULE EVERY 10 MINUTE
DO
  DELETE FROM reset_account
  WHERE reset_expiry < NOW() - INTERVAL 10 MINUTE;


-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `rating` int NOT NULL COMMENT 'từ 1 tới 5',
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `product_id`, `rating`, `comment`, `created_at`) VALUES
(1, 1, 1, 4, 'đồ ăn ngon, oke, giá cả phải chăng', '2024-11-15 17:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--

CREATE TABLE `shipper` (
  `shipper_id` int NOT NULL,
  `user_id` int NOT NULL,
  `vehicle_number` varchar(10) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shipper`
--

INSERT INTO `shipper` (`shipper_id`, `user_id`, `vehicle_number`, `status`) VALUES
(1, 3, '29A-45668', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `shipper_reviews`
--

CREATE TABLE `shipper_reviews` (
  `review_id` int NOT NULL,
  `order_id` int NOT NULL COMMENT 'đơn hàng đã giao',
  `user_id` int NOT NULL,
  `shipper_id` int NOT NULL,
  `rating` int NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `order_id` int NOT NULL,
  `order_date` timestamp NOT NULL,
  `order_status` enum('pending','processing','completed','canceled') NOT NULL,
  `order_totalAmount` int NOT NULL,
  `discount_id` int NOT NULL,
  `discount_amount` int NOT NULL,
  `payment_method` enum('COD','online') NOT NULL,
  `shipping_fee` int NOT NULL,
  `shipping_status` enum('not_shipped','shipped','delivered','returned') NOT NULL,
  `user_id` int NOT NULL,
  `order_name` varchar(256) NOT NULL COMMENT 'người nhận hàng',
  `order_phoneNumber` int NOT NULL COMMENT 'số điện thoại người nhận',
  `order_address` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'địa chỉ người nhận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`order_id`, `order_date`, `order_status`, `order_totalAmount`, `discount_id`, `discount_amount`, `payment_method`, `shipping_fee`, `shipping_status`, `user_id`, `order_name`, `order_phoneNumber`, `order_address`) VALUES
(1, '2024-11-15 17:13:44', 'processing', 500000, 1, 450000, 'COD', 0, 'shipped', 1, 'nguyễn văn A', 988665334, 'số 4 hồ tùng mậu');

-- --------------------------------------------------------

--
-- Table structure for table `userorder_details`
--

CREATE TABLE `userorder_details` (
  `order_details_id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `variation_id` int NOT NULL,
  `quantity` int NOT NULL,
  `unit_price` int NOT NULL COMMENT 'Giá đơn vị của sản phẩm khi đặt hàng',
  `note` text NOT NULL,
  `order_price` int NOT NULL COMMENT 'tổng giá trị đơn hàng chưa tính giảm giá',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userorder_details`
--

INSERT INTO `userorder_details` (`order_details_id`, `order_id`, `product_id`, `variation_id`, `quantity`, `unit_price`, `note`, `order_price`, `created_at`) VALUES
(1, 1, 1, 1, 1, 450000, 'giao hàng nhanh', 450000, '2024-11-15 17:36:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_cart_account` (`user_id`),
  ADD KEY `fk_cart_product` (`product_id`),
  ADD KEY `fk_cart_product_variation` (`variation_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_category` (`category_id`),
  ADD KEY `fk_discount_product` (`discount_id`);

--
-- Indexes for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD PRIMARY KEY (`variation_id`),
  ADD KEY `fk_product_variation` (`product_id`);

--
-- Indexes for table `reset_account`
--
ALTER TABLE `reset_account`
  ADD KEY `user_id_reset_pass` (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`shipper_id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Indexes for table `shipper_reviews`
--
ALTER TABLE `shipper_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `shipper_id` (`shipper_id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_userorder_user_id` (`user_id`),
  ADD KEY `discount` (`discount_id`);

--
-- Indexes for table `userorder_details`
--
ALTER TABLE `userorder_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `fk_userorder_details_useroder` (`order_id`),
  ADD KEY `fk_userorder_details-product` (`product_id`),
  ADD KEY `fk_userorder_details_variation` (`variation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `variation_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipper`
--
ALTER TABLE `shipper`
  MODIFY `shipper_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipper_reviews`
--
ALTER TABLE `shipper_reviews`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userorder_details`
--
ALTER TABLE `userorder_details`
  MODIFY `order_details_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_account` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_cart_product_variation` FOREIGN KEY (`variation_id`) REFERENCES `product_variation` (`variation_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `fk_discount_product` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`discount_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD CONSTRAINT `fk_product_variation` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `reset_account`
--
ALTER TABLE `reset_account`
  ADD CONSTRAINT `user_id_reset_pass` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `shipper`
--
ALTER TABLE `shipper`
  ADD CONSTRAINT `fk_shipper_account` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `shipper_reviews`
--
ALTER TABLE `shipper_reviews`
  ADD CONSTRAINT `shipper_id` FOREIGN KEY (`shipper_id`) REFERENCES `shipper` (`shipper_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `userorder`
--
ALTER TABLE `userorder`
  ADD CONSTRAINT `discount` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`discount_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_userorder_user_id` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`);

--
-- Constraints for table `userorder_details`
--
ALTER TABLE `userorder_details`
  ADD CONSTRAINT `fk_userorder_details-product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_userorder_details_useroder` FOREIGN KEY (`order_id`) REFERENCES `userorder` (`order_id`),
  ADD CONSTRAINT `fk_userorder_details_variation` FOREIGN KEY (`variation_id`) REFERENCES `product_variation` (`variation_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
