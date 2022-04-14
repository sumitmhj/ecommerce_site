-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 07:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `street_address_2` varchar(200) DEFAULT NULL,
  `suburb` varchar(100) NOT NULL,
  `postcode` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `street_address`, `street_address_2`, `suburb`, `postcode`) VALUES
(1, '3/241 Anzac Hwy', '', 'Plympton', '2566'),
(2, '3/241 Anzac Hwy', '', 'Plympton', '5458'),
(3, '51A Princes Rd', '', 'Greenacres', '7484'),
(4, '13/241 Anzac Hwy', '', 'Plympton', '8745'),
(5, '12/55 cross road, fularton', '', 'fularton', '7456'),
(6, '31 fun street', '', 'surfer\'s paradise', '9999'),
(7, '74 new home', '', 'hampton', '5210'),
(8, '88ww', '', 'werewr', '8745'),
(9, '51A Princes Rd', '', 'Greenacres', '5086');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `phone`, `customer_id`) VALUES
(1, 'D', 'Maharjan', 'sumitjan2@gmail.com', NULL, 1),
(2, 'nabina', 'MAHARJAN', 'nabinamaharjan9@gmail.com', NULL, 2),
(3, 'sumit', 'MAHARJAN', 'nabinamaharjan9@gmail.com', '406799037', 1),
(4, 'humu', 'mjiyua', 'hun@gmail.con', '0451710188', NULL),
(5, 'kalyan', 'kumari', 'kali@gmail.com', '0451741852', NULL),
(6, 'Hakuna', 'Matata', 'haku@gmail.com', NULL, 3),
(7, 'dinkar', 'prajapati', 'dinku@gmail.com', NULL, 4),
(8, 'kk', 'mm', 'kk@gmail.com', NULL, 5),
(9, 'aaa', 'bbb', 'aa@gmail.com', NULL, 6),
(10, 'www', 'www', 'eee@hotmail.com', '87456985665', NULL),
(11, 'Gyani', 'Maharjan', 'gyani@hotmail.com', NULL, 7),
(12, 'janu', 'ary', 'jan@gmail.com', NULL, 8),
(13, 'sumita', 'maharjan', 'sumita@gmail.com', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pref_pay_method` varchar(100) DEFAULT NULL,
  `def_pay_details` varchar(100) DEFAULT NULL,
  `signup_date` datetime NOT NULL DEFAULT current_timestamp(),
  `shipping_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `pref_pay_method`, `def_pay_details`, `signup_date`, `shipping_id`) VALUES
(1, 'Sumit', '$2y$10$BRLFZh8YtX3KzAtYrgKhoOxpmvC2vLht6A15kvE7h.nv84l3RH0Ja', NULL, NULL, '2021-10-17 13:56:23', NULL),
(2, 'nabina', '$2y$10$Fan53dJiuOa08/slgcBRxeQdwbE6hZDmGE1HbwAFfKkSnJf9TD/mG', NULL, NULL, '2021-10-18 14:58:34', NULL),
(3, 'haku', '$2y$10$PdEUoTbIVU6kVWzs9Y5PF.T0skSCNSRgh3BUszGJpdASn05myU4zi', NULL, NULL, '2021-10-18 21:49:12', NULL),
(4, 'dinu', '$2y$10$BhkyXu5Bir8kU835CU0fvew9kgupPwZ6R.0J3SdY8oVzSpi3TGsVK', NULL, NULL, '2021-10-18 21:50:17', NULL),
(5, 'kkkkk', '$2y$10$nanCcktJy34s/u.xDXGl..b2KvuuoYKFm5T3KJQitqG5uUv0s7VTu', NULL, NULL, '2021-10-18 21:52:37', NULL),
(6, 'aaa', '$2y$10$jD/2NZKzs1avbylCjmMpjea295Goh166XUOC894kSrt4xxZ5GWyTS', NULL, NULL, '2021-10-19 14:20:28', NULL),
(7, 'Gyani', '$2y$10$3flqELD33h9KQec3uN6GaeLFFixzzySPW50RZb2/7Po19/6F3n7hy', NULL, NULL, '2021-10-19 14:42:02', NULL),
(8, 'jan', '$2y$10$IWAXP5f1/J7YkptR6bFMa.b6BtCaLChUz2W9mpZ6byN6jtC5l1Y0K', NULL, NULL, '2021-11-29 18:13:17', NULL),
(9, 'sumita', '$2y$10$vs7qhSQCMcANlRX8EhI.O.xTn4OIW9NOrh2x6NoI4iZXfZaKvnAdu', NULL, NULL, '2021-12-06 17:23:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `total` float(11,2) NOT NULL,
  `delivery_cost` float(11,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `credit_card_num` varchar(200) NOT NULL,
  `expiry` varchar(11) NOT NULL,
  `cvv` int(4) NOT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `billing_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `total`, `delivery_cost`, `date`, `status`, `credit_card_num`, `expiry`, `cvv`, `shipping_id`, `billing_id`, `customer_id`, `contact_id`) VALUES
(1, 820.00, 7.00, '2021-10-18 15:13:04', 1, '$2y$10$KggNmw.9GNa/P7sJPeeD1.EyXuS.w.kJ641qBfhtbcSynk3GjG1eu', '5/23', 584, 1, 1, 1, 3),
(2, 230.00, 7.00, '2021-10-18 15:14:57', 1, '$2y$10$gUVhzyfEqJRKeiHTjQoC3uo8APIaAk3h04zZqinewR3WH8eId9DGG', '2/25', 584, 2, 2, NULL, 2),
(3, 520.00, 7.00, '2021-10-18 15:17:58', 1, '$2y$10$61xdjSo./97ajn8wU8prduUTLXOSlJbdGjHHPOTf/DXmaMiUzhCOS', '5/24', 784, 3, 3, NULL, 4),
(4, 1225.00, 7.00, '2021-10-18 21:31:24', 1, '$2y$10$ToYlJuYA5Xv1kXhOV3sM2ut8PVR9M2KyQqIx9jlXlY6oVX59lkuaq', '1/24', 745, 4, 4, NULL, 4),
(5, 680.00, 7.00, '2021-10-18 21:39:53', 1, '$2y$10$o7Rv.4s8hYwzC738cpHJKuNAWI.f.1QAcrafSNoRg0o7d3gJrnGNS', '11/24', 854, 5, 6, NULL, 5),
(6, 280.00, 7.00, '2021-10-19 14:22:45', 1, '$2y$10$/fVVBnK/4EEV/upytU/DGO.wClQaAWzsffxYCYhAjSmTCw9Zk.R9e', '1/25', 547, 7, 7, 6, 9),
(7, 150.00, 7.00, '2021-10-19 14:30:30', 1, '$2y$10$wkqbjRTDqqf8WCnR6FhFOOCeDZl3qU23I/2U/R7eEDH4NxQX4Ak0q', '2/25', 741, 8, 8, NULL, 10),
(8, 720.00, 10.00, '2021-10-19 14:46:39', 1, '$2y$10$gujV/o0M5o./qrz1l98lmOZ/oyltqtmlj29OjguDUdd8ilbUZMpJm', '11/25', 586, 9, 9, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `cost` float(5,2) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `cost`, `quantity`, `product_id`, `order_id`) VALUES
(1, 300.00, 2, 4, 1),
(2, 520.00, 4, 2, 1),
(3, 100.00, 1, 7, 2),
(4, 130.00, 1, 1, 2),
(5, 520.00, 4, 2, 3),
(6, 100.00, 1, 7, 4),
(7, 950.00, 10, 14, 4),
(8, 175.00, 1, 10, 4),
(9, 130.00, 1, 1, 5),
(10, 150.00, 1, 5, 5),
(11, 175.00, 1, 10, 5),
(12, 65.00, 1, 15, 5),
(13, 160.00, 1, 19, 5),
(14, 150.00, 1, 3, 6),
(15, 130.00, 1, 2, 6),
(16, 150.00, 1, 3, 7),
(17, 260.00, 2, 1, 8),
(18, 200.00, 2, 7, 8),
(19, 260.00, 2, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sex` char(1) NOT NULL,
  `price` float(5,2) NOT NULL,
  `discount` int(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `description`, `filename`, `category`, `sex`, `price`, `discount`) VALUES
(1, 'Chuck 70', 'Converse', 'The Converse All Star Chuck \'70 is a re-crafted sneaker that uses modern details to celebrate the original Chuck Taylor All Star from the 1970s. Vintage details include stitching on the sidewall and a heavier-grade canvas upper for comfort and durability.', 'Chuck 70.jpg', 'High-Top', 'U', 130.00, 0),
(2, 'CONS One Star 70', 'Converse', 'In 1974, Converse launched a low-cut, suede version of the Chuck Taylor All Star, featuring a single star logo on one side—the One Star sneaker. Reissued in the early \'90s, the design gained traction with the skateboarding community thanks to a performance remodel. Today\'s One Star Pro provides better boardfeel and impact protection thanks to a CONS traction rubber outsole and molded CX sockliner. The low profile adds total flexibility, while a rubber-backed, suede upper keeps it durable', 'CONS One Star.jpg', 'Sneakers', 'U', 130.00, 0),
(3, 'Run Star Hike', 'Converse', 'The laidback design of the iconic Chuck Taylor All Star High Top shoe gets a hiking-inspired twist in the Run Star Hike. A leather upper and  heel loop come together with the classic star ankle patch, while a foxing stripe draws attention to the lugged platform sole.', 'Run Star Hike.jpg', 'Hiking', 'U', 150.00, 0),
(4, 'All Star BB', 'Converse', 'For those who play like they\'re ready to take off running at any given moment, the All Star BB Jet emphasizes responsiveness.A mixed-material upper of synthetic suede and ripstop nylon allows for lightweight, breathable stability. Nike Zoom cushioning in the heel and forefoot make for reactive support, while an additional Converse Speed Plate in the forefoot helps you launch ahead with each step. Accented varsity colors bring flair to the traditional look.', 'All Star BB.jpg', 'Sport', 'U', 150.00, 0),
(5, 'Metcon 7', 'Nike', 'The Nike Metcon 7 is the gold standard for weight training—even tougher and more stable than previous versions. React foam ups the comfort to keep you ready for high-intensity cardio. Plus, a tab locks down your laces so you can forget about them coming untied when you\'re focused on your next training session.', 'Metcon 7.jpg', 'Sport', 'U', 150.00, 0),
(6, 'Kyrie 7', 'Nike', 'Kyrie Irving is a creative force on and off the court. He needs his shoes to keep up with his playmaking, but also sync with his boundary-pushing style and ethos. Tuned for the next generation of energy return, control and speed, the Kyrie 7 helps players at all levels take advantage of their quick first step by optimising the shoe\'s fit, court feel and banking ability.', 'Kyrie 7.jpg', 'Sport', 'M', 190.00, 0),
(7, 'Revolution 5', 'Nike', 'When the road beckons, answer the call in a lightweight pair that\'ll keep you moving mile after mile. Soft foam cushions your stride and a reinforced heel delivers a smooth, stable ride. Crafted from knit material for breathable support, while a minimalist design fits in just about anywhere your day takes you.', 'Revolution 5.jpg', 'Running', 'F', 100.00, 0),
(8, 'Pegasus Trail 3', 'Nike', 'Find your wings with an off-road run.The Nike Pegasus Trail 3 has the same comfort you love, with a design that nods to the classic Pegasus look. Nike React foam delivers responsive cushioning while tough traction helps you stay moving through rocky terrain. More support around the midfoot helps you feel secure on your journey.', 'Pegasus Trail 3.jpg', 'Hiking', 'F', 190.00, 0),
(9, 'Blazer Mid 77', 'Nike', 'Styled for the \'70s.Loved in the \'80s. Classic in the \'90s. Ready for the future. The Nike Blazer Mid \'77 Next Nature now delivers a timeless design made from at least 20% recycled content by weight. Replaced leather upper, an environmentally intensive material, with an unbelievably crisp, partially recycled synthetic leather.', 'Blazer Mid 77.jpg', 'High-Top', 'F', 140.00, 0),
(10, 'Judy', 'Vagabond', 'Platform sneakers Judy adds a muted statement to any look this season. The low-top silhouette is set on 40 mm contrast-coloured rubber cup soles. Designed with a minimalistic upper in smooth beige leather, the sneaker brings an effortless take on a classic style. Details include lace-up fastening and padded collars for great wearability.  ', 'Judy.jpg', 'Sneakers', 'F', 175.00, 0),
(11, 'Zoe Platform', 'Vagabond', 'These croc-embossed Zoe Platform sneakers give an updated look to a classic style. The low-top silhouette features hidden lace-up fastening and padded collars for great wearability. The upper is crafted from black croc-embossed leather and grounded by 40mm chunky platform soles.', 'Zoe Platform.jpg', 'Sneakers', 'F', 175.00, 0),
(12, 'Casey', 'Vagabond', 'Add a few extra inches to your height with iconic platform sneaker Casey. This sporty off-duty staple is bold and effortless all at the same time. The clean black textile upper is set on a white chunky outsole for a contrasting look', 'Casey.jpg', 'Sneakers', 'F', 135.00, 0),
(13, 'Pacer Next', 'Puma', 'From sunrise to senset, the Pacer Next FS unisex shoes featuring mesh upper is touch of classic with modern. The SoftFoam+ sockliner delivers premium cushioning to keep your feet comfortable and fresh.', 'Pacer Next.jpg', 'Sneakers', 'U', 85.00, 20),
(14, 'Enzo', 'Puma', 'The Enzo Training Shoe brings running technology into a street-inspired style. This style\'s exaggerated collar height and clamshell construction offer a snug, yet comfortable fit, and its mesh upper brings a breathable feel in a sleek design. All the while, a TPU midfoot strap gives added support and aggressive looks. This training shoe is ready to take on every day.', 'Enzo.jpg', 'Running', 'M', 95.00, 10),
(15, 'Smash Suede', 'Puma', 'Looking for an all-time tennis classic to wear every day? You\'ve just found one. The PUMA Smash Suede is a tennis-inspired shoe that will keep you looking sporty and fresh. With the PUMA Formstrip, a soft full-suede upper and the classic tennis look, this trainer goes well with any style, any time.', 'Smash Suede.jpg', 'Sneakers', 'U', 65.00, 0),
(16, 'Janessa', 'Vagabond', 'Introducing new joggers Janessa with its clean silhouette and simple design. The sleek upper is combined with a slightly flared outsole for a streamlined shape. They are made from white textile with a tonal backpiece in synthetic leather. Details include front lace-up closure with silver-toned eyelets and padded collars for comfortable wear.', 'Janessa.jpg', 'Sneakers', 'F', 145.00, 0),
(17, 'Ocean Sparkle', 'Skechers', 'Introducing new joggers Janessa with its clean silhouette and simple design. The sleek upper is combined with a slightly flared outsole for a streamlined shape. They are made from white textile with a tonal backpiece in synthetic leather. Details include front lace-up closure with silver-toned eyelets and padded collars for comfortable wear.', 'Ocean Sparkle.jpg', 'Sneakers', 'F', 80.00, 20),
(18, 'Coco Jazz', 'Skechers', 'Go the extra mile in long-lasting cushioned comfort with the Skechers GOwalk Stability - Coco Jazz shoe. This slip-on sneaker features a breathable athletic mesh upper with an Air-Cooled Goga Mat(TM) insole and lightweight ULTRA GO(R) cushioned midsole.', 'Coco Jazz.jpg', 'Sneakers', 'F', 80.00, 20),
(19, 'Evenston Fanton', 'Skechers', 'Add to your versatile looks with easy-wearing comfort in the SKECHERS Evenston - Fanton shoe. Smooth leather upper in a lace up sporty casual comfort sneaker oxford with perforation, stitching and overlay accents. Air Cooled Memory Foam insole, flexible comfort midsole.', 'Evenston Fanton.jpg', 'Sneakers', 'M', 160.00, 0),
(20, 'Gorun Elevate', 'Skechers', 'Surpass your personal best in comfort and style with Skechers GOrun Elevate™ cushioned midsole.', 'Gorun Elevate.jpg', 'Sneakers', 'M', 120.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 50,
  `colour` varchar(25) NOT NULL,
  `size` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `stock`, `colour`, `size`, `product_id`) VALUES
(1, 2, 'Black', 10, 1),
(2, 1, 'Black', 8, 2),
(3, 2, 'Black', 11, 3),
(4, 2, 'Black', 10, 3),
(5, 2, 'Black', 9, 3),
(6, 3, 'Black', 7, 4),
(7, 4, 'White', 9, 5),
(8, 4, 'White', 10, 5),
(9, 4, 'Green', 12, 6),
(10, 4, 'Green', 9, 6),
(11, 3, 'Black', 8, 7),
(12, 4, 'Purple', 7, 8),
(13, 4, 'Purple', 8, 8),
(14, 4, 'Purple', 9, 8),
(15, 1, 'Black', 9, 9),
(16, 3, 'Brown', 8, 10),
(17, 1, 'Black', 7, 11),
(18, 1, 'Black', 9, 11),
(19, 2, 'Black', 10, 12),
(20, 3, 'Blue', 10, 13),
(21, 3, 'Red', 12, 14),
(22, 3, 'Grey', 11, 15),
(23, 3, 'White', 8, 16),
(24, 2, 'Black', 6, 17),
(25, 3, 'Blue', 6, 18),
(26, 5, 'Black', 10, 19),
(27, 2, 'White', 9, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_id` (`shipping_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_id` (`shipping_id`),
  ADD KEY `billing_id` (`billing_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`shipping_id`) REFERENCES `address` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`shipping_id`) REFERENCES `address` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`billing_id`) REFERENCES `address` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
