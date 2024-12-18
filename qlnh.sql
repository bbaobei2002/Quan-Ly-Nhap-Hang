-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2024 lúc 02:36 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `distributors`
--

CREATE TABLE `distributors` (
  `distributor_id` int(11) NOT NULL,
  `distributor_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `bank_account_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `distributors`
--

INSERT INTO `distributors` (`distributor_id`, `distributor_name`, `address`, `phone_number`, `bank_account_number`) VALUES
(1, 'Công ty TNHH Việt Nam VIFOTEX - HN', 'Km11 + 500, Đường Ngọc Hồi, Huyện Thanh Trì, Thành phố Hà Nội', '0626004678', '123456789'),
(2, 'Đại lý bia nước ngọt Khương Duу - HCM', '44/3a 13 Đường TTH10, Khu phố 3, phường Tân Thới Hiệp, Quận 12, TP Hồ Chí Minh', '01633344', '987654321'),
(3, 'Công ty TNHH Thực phẩm OK - TP.HCM', '186 Phú Định, Phường 16, Quận 8, TP.HCM', '0938451796', '2147483647'),
(5, 'dffggfg', 'Sài Gòn', '0789643737', '1298733222');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `address` varchar(255) NOT NULL,
  `id_card_number` varchar(20) NOT NULL,
  `issue_date` date NOT NULL,
  `bank_account_number` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`employee_id`, `full_name`, `date_of_birth`, `gender`, `address`, `id_card_number`, `issue_date`, `bank_account_number`, `email`, `phone_number`) VALUES
(1, 'Lê Quang Minh', '2002-06-15', '', 'Cần Thơ', '123456789', '2010-05-20', '123456789', 'minh@gmail.com', '0789643633'),
(2, 'Trần Bạch Bảo Khanh', '2002-05-07', '', 'Cần Thơ', '987654321', '2015-04-25', '987654321', 'khanh@gmail.com', '0789648888'),
(3, 'Dương Thư', '2003-06-11', '', 'Hải Phòng', '129082768', '2019-07-11', '1298733222', 'dthu@gmail.com', '0789643737'),
(5, 'Hải Nguyễn', '2003-06-11', '', 'Hải Phòng', '1223454546', '2019-07-04', '1234567789', 'hai@gmail.com', '0789643632');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pdname` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `vat` decimal(5,2) NOT NULL,
  `uses` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pdname`, `price`, `vat`, `uses`, `description`) VALUES
(1, 'Thùng 24 lon nước tăng lực Redbull 250ml', 200000.00, 5.00, 'Giải khát, bổ sung năng lượng.', 'Nước tăng lực Redbull là thương hiệu nước tăng lực nổi tiếng trên thế giới. Thùng 24 lon nước tăng lực Redbull Thái Kẽm Vitamin 250ml uống sảng khoái nay thêm dinh dưỡng với kẽm, vitamin và dồi dào khoáng chất giúp cơ thể bù nước, bù khoáng, phục hồi năng lượng nhanh chóng.'),
(2, 'Thùng 12 lon nước ngọt Sprite hương chanh 320ml', 70000.00, 5.00, 'Giải khát.', 'Nước ngọt có ga thơm ngon, được ưa chuộng tại hơn 190 quốc gia. Nước ngọt Sprite hương chanh lon 320ml vị chanh tươi mát cùng, vị ga bùng nổ sảng khoái, giúp bạn đập tan cơn khát, kích thích vị giác giúp bạn ăn ngon miệng hơn. Sản phẩm cam kết chính hãng nước ngọt Sprite chất lượng và an toàn.'),
(3, 'Thùng 24 chai sữa trái cây Nutriboost hương dâu 297ml', 170000.00, 5.00, 'Bổ sung năng lượng, cung cấp nhiều vitamin.', 'Sự kết hợp hoàn hảo giữa sữa và nước trái cây vị dâu giúp bổ sung canxi cho hệ xương khớp chắc khỏe, các vitamin được bổ sung trong sữa trái cây Nutriboost dâu 297ml lốc 6 chai giúp bảo vệ cơ thể, tăng cường hệ miễn dịch, bảo vệ đôi mắt sáng khỏe. Sản phẩm sữa trái cây chính hãng từ Nutriboost.'),
(4, 'Thùng 24 ly mì Handy Hảo Hảo tôm chua cay 67g', 190000.00, 5.00, 'Cung cấp đầy đủ dinh dưỡng cần thiết cho một bữa ăn nhanh.', 'Sợi mì vàng dai ngon hòa quyện trong nước súp tôm chua cay Hảo Hảo chua ngọt, đậm đà thấm đẫm từng sợi mì sóng sánh cùng hương thơm quyến rũ ngất ngây. Mì Handy Hảo Hảo vị tôm chua cay ly 67g là lựa chọn hấp dẫn không thể bỏ qua đặc biệt là cho những ngày bận rộn cần bổ sung năng lượng nhanh chóng.'),
(5, 'Thùng 30 gói mì trộn Omachi xốt Spaghetti 90g', 240000.00, 5.00, 'Cung cấp đầy đủ dinh dưỡng cần thiết cho một bữa ăn nhanh.', 'Sợi mì vàng dai ngon hòa quyện trong nước sốt mì Omachi Spaghetti đậm đà gồm bò bằm và cà chua tươi mát cùng hương thơm ngất ngây tạo ra siêu phẩm mì với sự kết hợp hương vị hài hòa, độc đáo. 30 gói mì trộn Omachi xốt Spaghetti 90g thơm ngon hấp dẫn không thể chối từ.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `category_name`) VALUES
(1, 'Nước giải khát'),
(2, 'Mì ăn liền');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `distributor_id` int(11) NOT NULL,
  `invoice_number` varchar(50) NOT NULL,
  `invoice_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `order_id`, `employee_id`, `store_id`, `distributor_id`, `invoice_number`, `invoice_date`, `created_by`, `order_date`, `total`) VALUES
(1, 0, 0, 0, 0, '', '0000-00-00', 0, '2023-06-01', 1200000.00),
(2, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-07', 496800.00),
(3, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-23', 506000.00),
(4, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-16', 496800.00),
(5, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-16', 759000.00),
(6, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-21', 178500.00),
(7, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-22', 420000.00),
(8, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-14', 420000.00),
(9, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-20', 73500.00),
(10, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-29', 73500.00),
(11, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-13', 73500.00),
(12, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-22', 73500.00),
(13, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-22', 73500.00),
(14, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-20', 178500.00),
(15, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-21', 178500.00),
(16, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-28', 178500.00),
(17, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-28', 178500.00),
(18, 0, 0, 0, 0, '', '0000-00-00', 0, '2024-06-28', 178500.00),
(21, 21, 0, 1, 1, '1', '2024-06-08', 1, '2024-06-07', 199500.00),
(26, 26, 0, 2, 2, '1', '2024-07-04', 0, '2024-07-02', 147000.00),
(27, 27, 0, 1, 2, '1', '2024-07-03', 3, '2024-06-30', 357000.00),
(29, 0, 0, 1, 3, '1', '2024-07-02', 3, '2024-07-01', 630000.00),
(30, 0, 0, 2, 3, '1', '2024-07-03', 1, '2024-07-03', 147000.00),
(31, 0, 0, 1, 1, '1', '2024-07-02', 2, '2024-07-02', 598500.00),
(33, 0, 0, 2, 3, '1', '2024-07-03', 2, '2024-07-03', 598500.00),
(34, 0, 0, 1, 2, '1', '2024-07-04', 2, '2024-07-04', 420000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `purchase_order_details`
--

CREATE TABLE `purchase_order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `vat` decimal(5,2) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `vat_amount` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `purchase_order_details`
--

INSERT INTO `purchase_order_details` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`, `vat`, `sub_total`, `vat_amount`, `total`) VALUES
(1, 1, 1, 2, 100000.00, 10.00, 200000.00, 20000.00, 220000.00),
(2, 2, 4, 1, 460000.00, 8.00, 460000.00, 36800.00, 496800.00),
(3, 3, 3, 2, 230000.00, 10.00, 460000.00, 46000.00, 506000.00),
(4, 4, 4, 1, 460000.00, 8.00, 460000.00, 36800.00, 496800.00),
(5, 5, 3, 3, 230000.00, 10.00, 690000.00, 69000.00, 759000.00),
(6, 6, 3, 1, 170000.00, 5.00, 170000.00, 8500.00, 178500.00),
(7, 7, 1, 2, 200000.00, 5.00, 400000.00, 20000.00, 420000.00),
(8, 8, 1, 2, 200000.00, 5.00, 400000.00, 20000.00, 420000.00),
(9, 9, 2, 1, 70000.00, 5.00, 70000.00, 3500.00, 73500.00),
(10, 10, 2, 1, 70000.00, 5.00, 70000.00, 3500.00, 73500.00),
(11, 11, 2, 1, 70000.00, 5.00, 70000.00, 3500.00, 73500.00),
(12, 12, 2, 1, 70000.00, 5.00, 70000.00, 3500.00, 73500.00),
(13, 13, 2, 1, 70000.00, 5.00, 70000.00, 3500.00, 73500.00),
(14, 14, 3, 1, 170000.00, 5.00, 170000.00, 8500.00, 178500.00),
(15, 15, 3, 1, 170000.00, 5.00, 170000.00, 8500.00, 178500.00),
(16, 16, 3, 1, 170000.00, 5.00, 170000.00, 8500.00, 178500.00),
(17, 17, 3, 1, 170000.00, 5.00, 170000.00, 8500.00, 178500.00),
(18, 18, 3, 1, 170000.00, 5.00, 170000.00, 8500.00, 178500.00),
(21, 21, 4, 1, 190000.00, 5.00, 190000.00, 9500.00, 199500.00),
(26, 26, 2, 2, 70000.00, 5.00, 140000.00, 7000.00, 147000.00),
(27, 27, 3, 2, 170000.00, 5.00, 340000.00, 17000.00, 357000.00),
(29, 29, 1, 3, 200000.00, 5.00, 600000.00, 30000.00, 630000.00),
(30, 30, 2, 2, 70000.00, 5.00, 140000.00, 7000.00, 147000.00),
(31, 31, 4, 3, 190000.00, 5.00, 570000.00, 28500.00, 598500.00),
(33, 33, 4, 3, 190000.00, 5.00, 570000.00, 28500.00, 598500.00),
(34, 34, 1, 2, 200000.00, 5.00, 400000.00, 20000.00, 420000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `address`, `phone_number`, `email`) VALUES
(1, 'K_P Mart Siêu Thị mini', 'Số 11 Đường  30 Tháng 4, Xuân Khánh, Ninh Kiều, Cần Thơ', '0939806657', 'KPmart@gmail.com'),
(2, 'Cửa hàng tiện lợi Gia Đạt', 'Số 32 Đường  30 Tháng 4, An Phú, Ninh Kiều, Cần Thơ', '0292373363', 'GDmart@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userid` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) DEFAULT NULL,
  `usergmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userid`, `username`, `userpassword`, `usergmail`) VALUES
(1, 'micchan', '123', 'micchan@gmail.com'),
(2, 'micchan', '123', 'micchan@gmail.com'),
(3, 'n', '123', 'n@gmail.com'),
(4, 'z', '123', 'z1@gmail.com'),
(5, 'admin', '123', 'admin@gmail.com'),
(6, 'mi', '123', 'mi@gmail.com'),
(7, 'nvien', '123', 'nv@gmail.com'),
(8, 'admin', '123', 'adm@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`distributor_id`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`,`store_id`,`distributor_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahang_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `distributors`
--
ALTER TABLE `distributors`
  MODIFY `distributor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `purchase_order_details`
--
ALTER TABLE `purchase_order_details`
  ADD CONSTRAINT `purchase_order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `purchase_orders` (`id`),
  ADD CONSTRAINT `purchase_order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
