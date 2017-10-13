-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2017 at 05:55 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(6,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `onhand` int(10) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `optiongroups`
--

CREATE TABLE `optiongroups` (
  `OptionGroupID` int(11) NOT NULL,
  `OptionGroupName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `optiongroups`
--

INSERT INTO `optiongroups` (`OptionGroupID`, `OptionGroupName`) VALUES
(1, 'size'),
(2, 'type');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `OptionID` int(11) NOT NULL,
  `OptionName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `optiongroups_OptionGroupID` int(11) NOT NULL,
  `optiongroups_OptionGroupID1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`OptionID`, `OptionName`, `optiongroups_OptionGroupID`, `optiongroups_OptionGroupID1`) VALUES
(1, 'small', 1, 1),
(2, 'medium', 1, 1),
(3, 'large', 1, 1),
(4, 'shirt', 2, 2),
(5, 'knit', 2, 2),
(6, 'jacket', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `DetailID` int(11) NOT NULL,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `DetailQuantity` int(11) NOT NULL,
  `products_ProductID` int(12) NOT NULL,
  `orders_OrderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderUserID` int(11) NOT NULL,
  `OrderAmount` float NOT NULL,
  `OrderShipName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipAddress2` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderCity` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderState` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderZip` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderCountry` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `OrderPhone` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderFax` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `OrderShipping` float NOT NULL,
  `OrderTax` float NOT NULL,
  `OrderEmail` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderShipped` tinyint(1) NOT NULL DEFAULT '0',
  `OrderTrackingNumber` varchar(80) COLLATE latin1_german2_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

CREATE TABLE `productcategories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) COLLATE latin1_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`CategoryID`, `CategoryName`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'kids');

-- --------------------------------------------------------

--
-- Table structure for table `productoptions`
--

CREATE TABLE `productoptions` (
  `ProductOptionID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED NOT NULL,
  `OptionID` int(10) UNSIGNED NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL,
  `products_ProductID` int(12) NOT NULL,
  `options_OptionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `productoptions`
--

INSERT INTO `productoptions` (`ProductOptionID`, `ProductID`, `OptionID`, `OptionPriceIncrement`, `OptionGroupID`, `products_ProductID`, `options_OptionID`) VALUES
(1, 0, 0, NULL, 1, 1, 1),
(2, 0, 0, NULL, 1, 2, 1),
(3, 3, 0, NULL, 1, 3, 1),
(4, 4, 0, NULL, 1, 4, 1),
(5, 5, 0, NULL, 1, 5, 2),
(6, 6, 0, NULL, 1, 6, 2),
(7, 7, 0, NULL, 1, 7, 3),
(8, 8, 0, NULL, 1, 8, 3),
(9, 9, 0, NULL, 1, 9, 1),
(10, 0, 0, NULL, 1, 10, 1),
(11, 0, 0, NULL, 2, 1, 4),
(12, 0, 0, NULL, 2, 2, 4),
(13, 0, 0, NULL, 2, 3, 4),
(14, 0, 0, NULL, 2, 4, 4),
(15, 0, 0, NULL, 2, 5, 4),
(16, 0, 0, NULL, 2, 6, 4),
(17, 0, 0, NULL, 2, 7, 4),
(18, 0, 0, NULL, 2, 8, 4),
(19, 0, 0, NULL, 2, 9, 5),
(20, 0, 0, NULL, 2, 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(12) NOT NULL,
  `ProductSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `ProductName` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductCartDesc` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `ProductShortDesc` varchar(1000) COLLATE latin1_german2_ci NOT NULL,
  `ProductLongDesc` text COLLATE latin1_german2_ci NOT NULL,
  `ProductThumb` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductImage` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `ProductCategoryID` int(11) DEFAULT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT '0',
  `ProductUnlimited` tinyint(1) DEFAULT '1',
  `ProductLocation` varchar(250) COLLATE latin1_german2_ci DEFAULT NULL,
  `productcategories_CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductSKU`, `ProductName`, `ProductPrice`, `ProductWeight`, `ProductCartDesc`, `ProductShortDesc`, `ProductLongDesc`, `ProductThumb`, `ProductImage`, `ProductCategoryID`, `ProductUpdateDate`, `ProductStock`, `ProductLive`, `ProductUnlimited`, `ProductLocation`, `productcategories_CategoryID`) VALUES
(1, '12', 'Yellow Shirt', 8, 1, 'shirt', 'shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/002TED733909_YEL_A_L.jpg', 'https://bape.com/test/mania/images/product/zoom/002TED733909_YEL_A_L.jpg', 1, '2017-07-01 17:39:14', 21, 12, 12, '12', 1),
(2, '11', 'White Shirt', 12, 1, 'Dog Shirt', 'Dog Shirt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/001TED801020_WH3_A_R_L.jpg', 'https://bape.com/test/mania/images/product/zoom/001TED801020_WH3_A_R_L.jpg', 2, '2002-02-02 05:00:00', 2, 1, 1, '1', 2),
(3, '', 'Blue shirt', 0, 0, '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/001TED801070_NVY_A_L.jpg', 'https://bape.com/test/mania/images/product/zoom/001TED801070_NVY_A_L.jpg', NULL, '2017-09-10 01:41:51', NULL, 0, 1, '', 3),
(4, '', 'Orange shirt', 12, 0, '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/001TED731902_ORG_A_R_L.jpg', 'https://bape.com/test/mania/images/product/zoom/001TED731902_ORG_A_R_L.jpg', NULL, '2017-09-10 02:58:21', NULL, 0, 1, '', 2),
(5, '', 'Black Shirt', 12, 0, '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/001TED801063_BLK_A_L.jpg', 'https://bape.com/test/mania/images/product/zoom/001TED801063_BLK_A_L.jpg', NULL, '2017-09-14 01:11:24', NULL, 0, 1, '', 1),
(6, '', 'Grey Shirt', 12, 0, '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/002TED801094_GY4_A_L.jpg', 'https://bape.com/test/mania/images/product/zoom/002TED801094_GY4_A_L.jpg', NULL, '2017-09-14 01:12:26', NULL, 0, 1, '', 1),
(7, '', 'Pink Shirt', 12, 0, '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/002TED802507_PNK_A_L.jpg', 'https://bape.com/test/mania/images/product/zoom/002TED802507_PNK_A_L.jpg', NULL, '2017-09-14 01:59:23', NULL, 0, 1, '', 2),
(8, '', 'Graphic Shirt', 12, 0, '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/002TED802090_WHT_A_L.jpg', 'https://bape.com/test/mania/images/product/zoom/002TED802090_WHT_A_L.jpg', NULL, '2017-09-14 01:59:23', NULL, 0, 1, '', 3),
(9, '', 'Sweater', 12, 0, '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/001KND802504_WHT_A_L.jpg', 'https://bape.com/test/mania/images/product/zoom/001KND802504_WHT_A_L.jpg', NULL, '2017-10-13 02:38:34', NULL, 0, 1, '', 2),
(10, '', 'Camo Jacket', 12, 0, '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod porta consectetur. Sed ac porttitor sem, nec congue tellus. Quisque bibendum convallis sagittis. Cras velit massa, tristique sit amet fringilla eget, fermentum non libero. Duis dui justo, pharetra ut lectus non, convallis consectetur augue. Praesent vehicula finibus erat, sed ultrices nisi vehicula vitae. Nunc consectetur tristique nisi. Vivamus at placerat est. Nam sagittis sapien eu massa euismod tristique. Integer eu efficitur tellus. Etiam pellentesque ligula nec luctus congue. Quisque dapibus augue orci, id mattis massa convallis vel. Proin vehicula nunc velit, nec scelerisque velit dignissim ac. Praesent eleifend sapien non nisl suscipit facilisis.', 'https://bape.com/test/mania/images/product/zoom/001LJD803002_YEL_A_L.jpg', 'https://bape.com/test/mania/images/product/zoom/001LJD803002_YEL_A_L.jpg', NULL, '2017-10-13 02:55:14', NULL, 0, 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ismael', 'CZnBy8_c7FAPAnDJAVq_al5CWweRruBr', '$2y$13$lrwZNUFSTkhM9B74/.6ax.AKh2xLeX1bXiki1DvwA8hcNJuhO0.tm', NULL, 'ixique@umich.edu', 10, 1498930667, 1498930667),
(2, 'ixique', '4P8t-skerzBrNKtpOrKsGrxGzyIrPVTM', '$2y$13$qjXQJJ6EjbPxDfhxb8SMC.kdGN9djMgC4HOCt.0VgezvFI2sgB4Ze', NULL, 'ixi@umich.edu', 10, 1499642148, 1499642148),
(3, 'ish', 'IJjbXJAuDBahQu6pYYlVo1XxNtOxcC8j', '$2y$13$9gCJgcYR6HvZCcpTmNtABOZA89djW1V0jMqBGyRwpemXdTUtPD4yy', NULL, 'ixique1@umich.edu', 10, 1500138125, 1500138125),
(4, 'test', 'BCvo-uKP8oZw5ocPUjKlOaMa7NNP4QN1', '$2y$13$6fCDeerHvSy8Ca2MNL6/seRzA8SbP5sRQomBLA1aQix0IV0f6BEJu', NULL, 'test@mail.com', 10, 1501023101, 1501023101),
(5, 'ismael1', 'ZgHofC079UQ2Posb7w2bGJQpnDGwIpCM', '$2y$13$NNcJSZbVvkNC.8DYAK1NGON.EVFYY5KybowJyuEUOrOJAKN4No6Je', NULL, 'ssi@ga.com', 10, 1502242080, 1502242080);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optiongroups`
--
ALTER TABLE `optiongroups`
  ADD PRIMARY KEY (`OptionGroupID`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`OptionID`,`optiongroups_OptionGroupID`),
  ADD KEY `fk_options_optiongroups1_idx` (`optiongroups_OptionGroupID1`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`DetailID`),
  ADD KEY `fk_orderdetails_products1_idx` (`products_ProductID`),
  ADD KEY `fk_orderdetails_orders1_idx` (`orders_OrderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `fk_orders_user1_idx` (`user_id`);

--
-- Indexes for table `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `productoptions`
--
ALTER TABLE `productoptions`
  ADD PRIMARY KEY (`ProductOptionID`),
  ADD KEY `fk_productoptions_products_idx` (`products_ProductID`),
  ADD KEY `fk_productoptions_options1_idx` (`options_OptionID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `fk_products_productcategories1_idx` (`productcategories_CategoryID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `optiongroups`
--
ALTER TABLE `optiongroups`
  MODIFY `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `OptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `productoptions`
--
ALTER TABLE `productoptions`
  MODIFY `ProductOptionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `fk_options_optiongroups1` FOREIGN KEY (`optiongroups_OptionGroupID1`) REFERENCES `optiongroups` (`OptionGroupID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `fk_orderdetails_orders1` FOREIGN KEY (`orders_OrderID`) REFERENCES `orders` (`OrderID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orderdetails_products1` FOREIGN KEY (`products_ProductID`) REFERENCES `products` (`ProductID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productoptions`
--
ALTER TABLE `productoptions`
  ADD CONSTRAINT `fk_productoptions_options1` FOREIGN KEY (`options_OptionID`) REFERENCES `options` (`OptionID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productoptions_products` FOREIGN KEY (`products_ProductID`) REFERENCES `products` (`ProductID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_productcategories1` FOREIGN KEY (`productcategories_CategoryID`) REFERENCES `productcategories` (`CategoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
