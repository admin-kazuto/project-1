-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 26, 2024 lúc 01:48 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ktk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `user_id` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adress` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Mở','Khóa') DEFAULT 'Mở',
  `role` enum('admin','user','shipper') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`user_id`, `Name`, `username`, `password`, `adress`, `phone`, `email`, `created_at`, `status`, `role`) VALUES
(5, 'nguyễn tuấn', 'kuro tatsuya', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'trịnh văn bô', '0559295064', 'mativi1243@gmaill.com', '2024-11-23 03:43:54', 'Mở', 'admin'),
(6, 'Hoàng Vinh Khoa', 'khoa', '601f1889667efaebb33b8c12572835da3f027f78', 'Mê Linh, Hà Nội', '0976890935', 'kenhoangkhoaghost@gmail.com', '2024-11-25 13:17:49', 'Mở', 'admin'),
(7, 'Nam Kiệm', 'kiem', '601f1889667efaebb33b8c12572835da3f027f78', 'Mê Linh, Hà Nội', '0976890931', 'namkiem0000@gmail.com', '2024-11-25 13:56:05', 'Mở', 'admin'),
(8, 'Nguyễn Minh Tuấn', 'tuan', '601f1889667efaebb33b8c12572835da3f027f78', 'ABC', '0559295064', 'mativi1243@gmaill.com', '2024-11-25 13:57:07', 'Mở', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
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
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Pizza'),
(2, 'Hamburger'),
(3, 'Toasts'),
(4, 'Salad'),
(5, 'Drink');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discount`
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
-- Đang đổ dữ liệu cho bảng `discount`
--

INSERT INTO `discount` (`discount_id`, `discount_code`, `discount_value`, `minimum_order`, `valid_from`, `valid_to`, `status`, `created_at`) VALUES
(1, 'SQLTEST', 10, 100000, '2024-11-15 15:24:45', '2024-11-15 15:24:45', 'active', '2024-11-15 15:24:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `product_status` enum('available','unavailable','delete') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_totalQuantity` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `product_image`, `product_status`, `product_totalQuantity`, `category_id`) VALUES
(2, 'Pizza Phô Mai', 'Lớp phô mai Mozzarella tan chảy, đế giòn, thêm chút mùi thơm của thảo mộc Ý.', 'pngtree-delicious-brushed-cheese-pizza-png-image_12982049.png', 'available', 300, 1),
(3, 'Pizza Hải Sản', 'Tôm, mực, và thanh cua tươi ngon, kết hợp với sốt cà chua đặc trưng.', '—Pngtree—seafood pizza with shrimp squid_14541980.png', 'available', 300, 1),
(4, 'Pizza Thịt Xông Khói', 'Thịt xông khói thơm lừng, kết hợp phô mai và hành tây caramel ngọt dịu.', 'pngtree-cheese-and-bacon-pizza-with-fresh-toppings-flat-png-image_12195153.png', 'available', 300, 1),
(5, 'Pizza Rau Củ', 'Sự kết hợp hoàn hảo của ớt chuông, bắp ngọt, và nấm tươi trên nền sốt cà đặc biệt.', '0002218_sup-deluxe_500.png', 'available', 300, 1),
(6, 'Pizza BBQ', 'Thịt bò BBQ đậm vị, kết hợp phô mai tan chảy và sốt BBQ đặc biệt từ đầu bếp.', '2024-MME-OLO-Pizza-BBQ_500x500.png', 'available', 300, 1),
(7, 'Bánh mì nướng phô Mai Trứng Muối', 'Bánh mì nướng giòn rụm, phô mai béo ngậy, phủ lớp trứng muối mằn mặn đầy kích thích.', 'B_012-3.png', 'available', 100, 3),
(8, 'bánh mì nướng bơ Đường', 'Món ăn tuổi thơ với bơ thơm lừng, hòa quyện với đường hạt giòn ngọt.', 'pngtree-bread-with-butter-appetizer-png-image_13236078.png', 'available', 100, 3),
(9, 'Bánh mì thịt nướng', 'Bánh mì kèm thịt nướng, dưa leo và nước sốt Mayonnaise.', '221-800x800.png', 'available', 100, 3),
(10, 'Bánh mì xúc xích', 'Đậm đà với xúc xích nướng, phô mai và tương ớt đặc trưng', 'B_021-2.png', 'available', 100, 3),
(11, 'Bánh mì Tiramisu', 'Sự kết hợp giữa bánh mì nướng và lớp kem Tiramisu mềm mịn, phủ bột cacao thơm lừng.', '7to5LFaajnvs4enGQlqmPOpXmU3mjV7oFTGpEf5e.png', 'available', 100, 3),
(12, 'Hamburger Bò Phô Mai', 'Bánh mềm thơm, kẹp thịt bò nướng chín tới và phô mai tan chảy.', 'xbigmac_bb.png.pagespeed.ic.z9ftemCCs7.png', 'available', 300, 2),
(13, 'Hamburger Gà Giòn', 'Lớp gà chiên giòn rụm, thêm rau xanh tươi và sốt Mayonnaise.', 'xmcchickendlx_bb.png.pagespeed.ic.RkyD3il4lc.png', 'available', 300, 2),
(14, 'Hamburger Thịt Bò BBQ', 'Thịt bò xay nướng thơm lừng, rưới sốt BBQ đậm vị, ăn kèm rau tươi.', 'pngtree-beef-barbecue-burger-png-image_13361009.png', 'available', 300, 2),
(15, 'Hamburger Tôm Chiên', 'Tôm chiên giòn kèm sốt chanh dây, tạo cảm giác vừa giòn, vừa tươi mới.', 'burger_-_7.png', 'available', 300, 2),
(16, 'Hamburger Chay', 'Đậu phụ chiên giòn và rau củ tươi xanh, phù hợp với người ăn chay.', 'pngtree-vegan-meat-free-plant-based-burger-png-image_12638781.png', 'available', 300, 2),
(17, 'Salad Rau Củ', 'Bắp cải tím, cà chua bi, dưa leo và sốt mè rang thanh mát.', '13.png', 'available', 300, 4),
(18, 'Salad Caesar Gà', 'Ức gà áp chảo thơm lừng, trộn sốt Caesar cổ điển và bánh mì nướng giòn.', 'pngtree-chicken-and-bacon-caesar-salad-png-image_13232869.png', 'available', 300, 4),
(19, 'Salad Trái Cây', 'Táo, lê, kiwi, và nho trộn sốt sữa chua ngọt dịu, mát lành.', 'salad_trai_cay_25303349b3fc4c88a0bcd58624598ecf_master.png', 'available', 300, 4),
(20, 'Salad Cá Ngừ', 'Cá ngừ đóng hộp chất lượng cao, trộn cùng rau xanh tươi ngon và sốt Italian.', 'remove-bgaisalad-tuna-mayo-3898.png', 'available', 300, 4),
(21, 'Salad Tôm Chanh Dây', 'Tôm áp chảo mọng nước, phủ sốt chanh dây thơm ngọt.', 'Salad-mang-cut-Binh-Duong-voi-tom-nuong-2-928x1024.png', 'available', 300, 4),
(23, 'Coca-Cola', 'Thức uống giải khát có ga, hương vị cổ điển được yêu thích.', '7-1.png', 'available', 10000, 5),
(24, 'Pepsi', 'Nước ngọt có ga với vị ngọt nhẹ và hương vị độc đáo.', 'th_c_u_ng_-_5_6_1.png', 'available', 10000, 5),
(25, '7UP', 'Nước ngọt có ga với hương vị chanh tươi mát.', 'th_c_u_ng_-_9_10_1.png', 'available', 10000, 5),
(26, 'Trà Chanh', 'Thức uống trà tươi mát với vị chanh thanh khiết.', '83f8dd10aa0c09f9d13dad3fe3ee5dc0.png', 'available', 10000, 5),
(27, 'Nước Suối', 'Nước uống tinh khiết giúp bổ sung độ ẩm tự nhiên cho cơ thể.', 'chai_nuoc_lavie-500ml.png', 'available', 10000, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variation`
--

CREATE TABLE `product_variation` (
  `variation_id` int NOT NULL,
  `product_id` int NOT NULL,
  `variation_name` varchar(256) NOT NULL,
  `price` int NOT NULL,
  `status` enum('available','unavailable') NOT NULL,
  `variation_quantity` int NOT NULL COMMENT 'số lượng của biến thể ấy',
  `discount_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `product_variation`
--

INSERT INTO `product_variation` (`variation_id`, `product_id`, `variation_name`, `price`, `status`, `variation_quantity`, `discount_id`) VALUES
(2, 2, 'Size Nhỏ (S)', 50000, 'available', 100, NULL),
(3, 2, 'Size Vừa (M)', 80000, 'available', 100, NULL),
(4, 2, 'Size Lớn (L)', 120000, 'available', 100, NULL),
(5, 3, 'Size Nhỏ (S)', 60000, 'available', 100, NULL),
(6, 3, 'Size Vừa (M)', 90000, 'available', 100, NULL),
(7, 3, 'Size Lớn (L)', 140000, 'available', 100, NULL),
(8, 4, 'Size Nhỏ (S)', 55000, 'available', 100, NULL),
(9, 4, 'Size Vừa (M)', 85000, 'available', 100, NULL),
(10, 4, 'Size Lớn (L)', 130000, 'available', 100, NULL),
(11, 5, 'Size Nhỏ (S)', 50000, 'available', 100, NULL),
(12, 5, 'Size Vừa (M)', 75000, 'available', 100, NULL),
(13, 5, 'Size Lớn (L)', 115000, 'available', 100, NULL),
(14, 6, 'Size Nhỏ (S)', 65000, 'available', 100, NULL),
(15, 6, 'Size Vừa (M)', 95000, 'available', 100, NULL),
(16, 6, 'Size Lớn (L)', 150000, 'available', 100, NULL),
(17, 7, '18 cm x 9 cm', 30000, 'available', 100, NULL),
(18, 8, '18 cm x 9 cm', 20000, 'available', 100, NULL),
(19, 9, '18 cm x 9 cm', 35000, 'available', 100, NULL),
(20, 10, '18 cm x 9 cm', 35000, 'available', 100, NULL),
(21, 11, '18 cm x 9 cm', 40000, 'available', 100, NULL),
(22, 12, 'Size Nhỏ (S)', 35000, 'available', 100, NULL),
(23, 12, 'Size Vừa (M)', 50000, 'available', 100, NULL),
(24, 12, 'Size Lớn (L)', 65000, 'available', 100, NULL),
(25, 13, 'Size Nhỏ (S)', 40000, 'available', 100, NULL),
(26, 13, 'Size Vừa (M)', 55000, 'available', 100, NULL),
(27, 13, 'Size Lớn (L)', 70000, 'available', 100, NULL),
(28, 14, 'Size Nhỏ (S)', 45000, 'available', 100, NULL),
(29, 14, 'Size Vừa (M)', 60000, 'available', 100, NULL),
(30, 14, 'Size Lớn (L)', 80000, 'available', 100, NULL),
(31, 15, 'Size Nhỏ (S)', 40000, 'available', 100, NULL),
(32, 15, 'Size Vừa (M)', 55000, 'available', 100, NULL),
(33, 15, 'Size Lớn (L)', 70000, 'available', 100, NULL),
(34, 16, 'Size Nhỏ (S)', 35000, 'available', 100, NULL),
(35, 16, 'Size Vừa (M)', 45000, 'available', 100, NULL),
(36, 16, 'Size Lớn (L)', 60000, 'available', 100, NULL),
(37, 17, 'Size Nhỏ (S)', 30000, 'available', 100, NULL),
(38, 17, 'Size Vừa (M)', 45000, 'available', 100, NULL),
(39, 17, 'Size Lớn (L)', 60000, 'available', 100, NULL),
(40, 18, 'Size Nhỏ (S)', 40000, 'available', 100, NULL),
(41, 18, 'Size Vừa (M)', 60000, 'available', 100, NULL),
(42, 18, 'Size Lớn (L)', 80000, 'available', 100, NULL),
(43, 19, 'Size Nhỏ (S)', 35000, 'available', 100, NULL),
(44, 19, 'Size Vừa (M)', 50000, 'available', 100, NULL),
(45, 19, 'Size Lớn (L)', 70000, 'available', 100, NULL),
(46, 20, 'Size Nhỏ (S)', 40000, 'available', 100, NULL),
(47, 20, 'Size Vừa (M)', 60000, 'available', 100, NULL),
(48, 20, 'Size Lớn (L)', 80000, 'available', 100, NULL),
(49, 21, 'Size Nhỏ (S)', 45000, 'available', 100, NULL),
(50, 21, 'Size Vừa (M)', 65000, 'available', 100, NULL),
(51, 21, 'Size Lớn (L)', 85000, 'available', 100, NULL),
(52, 23, 'Size Thường (S)', 20000, 'available', 10000, NULL),
(53, 24, 'Size Thường (S)', 20000, 'available', 10000, NULL),
(54, 25, 'Size Thường (S)', 20000, 'available', 10000, NULL),
(55, 26, 'Size Thường (S)', 15000, 'available', 10000, NULL),
(56, 27, 'Size Thường (S)', 10000, 'available', 10000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reset_account`
--

CREATE TABLE `reset_account` (
  `user_id` int NOT NULL,
  `reset_token` int DEFAULT NULL COMMENT 'mã để reset mk',
  `reset_expiry` datetime DEFAULT NULL COMMENT 'thời gian hết hạn của mã ',
  `email_send_count` int NOT NULL DEFAULT '0' COMMENT 'số lần gửi mã OTP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `review_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `rating` int NOT NULL COMMENT 'từ 1 tới 5',
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipper`
--

CREATE TABLE `shipper` (
  `shipper_id` int NOT NULL,
  `user_id` int NOT NULL,
  `vehicle_number` varchar(10) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipper_reviews`
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
-- Cấu trúc bảng cho bảng `userorder`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userorder_details`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_cart_account` (`user_id`),
  ADD KEY `fk_cart_product` (`product_id`),
  ADD KEY `fk_cart_product_variation` (`variation_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Chỉ mục cho bảng `product_variation`
--
ALTER TABLE `product_variation`
  ADD PRIMARY KEY (`variation_id`),
  ADD KEY `fk_product_variation` (`product_id`),
  ADD KEY `fk_productVariation_discount` (`discount_id`);

--
-- Chỉ mục cho bảng `reset_account`
--
ALTER TABLE `reset_account`
  ADD KEY `user_id_reset_pass` (`user_id`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`shipper_id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Chỉ mục cho bảng `shipper_reviews`
--
ALTER TABLE `shipper_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `shipper_id` (`shipper_id`),
  ADD KEY `user` (`user_id`);

--
-- Chỉ mục cho bảng `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_userorder_user_id` (`user_id`),
  ADD KEY `discount` (`discount_id`);

--
-- Chỉ mục cho bảng `userorder_details`
--
ALTER TABLE `userorder_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `fk_userorder_details_useroder` (`order_id`),
  ADD KEY `fk_userorder_details-product` (`product_id`),
  ADD KEY `fk_userorder_details_variation` (`variation_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `variation_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `shipper`
--
ALTER TABLE `shipper`
  MODIFY `shipper_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `shipper_reviews`
--
ALTER TABLE `shipper_reviews`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `userorder`
--
ALTER TABLE `userorder`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `userorder_details`
--
ALTER TABLE `userorder_details`
  MODIFY `order_details_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_account` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_cart_product_variation` FOREIGN KEY (`variation_id`) REFERENCES `product_variation` (`variation_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Các ràng buộc cho bảng `product_variation`
--
ALTER TABLE `product_variation`
  ADD CONSTRAINT `fk_product_variation` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `fk_productVariation_discount` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`discount_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `reset_account`
--
ALTER TABLE `reset_account`
  ADD CONSTRAINT `user_id_reset_pass` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `shipper`
--
ALTER TABLE `shipper`
  ADD CONSTRAINT `fk_shipper_account` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `shipper_reviews`
--
ALTER TABLE `shipper_reviews`
  ADD CONSTRAINT `shipper_id` FOREIGN KEY (`shipper_id`) REFERENCES `shipper` (`shipper_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `userorder`
--
ALTER TABLE `userorder`
  ADD CONSTRAINT `discount` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`discount_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_userorder_user_id` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`);

--
-- Các ràng buộc cho bảng `userorder_details`
--
ALTER TABLE `userorder_details`
  ADD CONSTRAINT `fk_userorder_details-product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_userorder_details_useroder` FOREIGN KEY (`order_id`) REFERENCES `userorder` (`order_id`),
  ADD CONSTRAINT `fk_userorder_details_variation` FOREIGN KEY (`variation_id`) REFERENCES `product_variation` (`variation_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

DELIMITER $$
--
-- Sự kiện
--
CREATE DEFINER=`root`@`localhost` EVENT `delete_expired_tokens` ON SCHEDULE EVERY 10 MINUTE STARTS '2024-11-23 03:32:48' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM reset_account
  WHERE reset_expiry < NOW() - INTERVAL 10 MINUTE$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
