/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50635
 Source Host           : localhost
 Source Database       : test

 Target Server Type    : MySQL
 Target Server Version : 50635
 File Encoding         : utf-8

 Date: 06/10/2017 02:09:46 AM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `catalog`
-- ----------------------------
DROP TABLE IF EXISTS `catalog`;
CREATE TABLE `catalog` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(6,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `onhand` int(10) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `optiongroups`
-- ----------------------------
DROP TABLE IF EXISTS `optiongroups`;
CREATE TABLE `optiongroups` (
  `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT,
  `OptionGroupName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  PRIMARY KEY (`OptionGroupID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- ----------------------------
--  Records of `optiongroups`
-- ----------------------------
BEGIN;
INSERT INTO `optiongroups` VALUES ('1', 'color'), ('2', 'size');
COMMIT;

-- ----------------------------
--  Table structure for `options`
-- ----------------------------
DROP TABLE IF EXISTS `options`;
CREATE TABLE `options` (
  `OptionID` int(11) NOT NULL AUTO_INCREMENT,
  `OptionName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  PRIMARY KEY (`OptionID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- ----------------------------
--  Records of `options`
-- ----------------------------
BEGIN;
INSERT INTO `options` VALUES ('1', 'red'), ('2', 'blue'), ('3', 'green'), ('4', 'S'), ('5', 'M'), ('6', 'L'), ('7', 'XL'), ('8', 'XXL');
COMMIT;

-- ----------------------------
--  Table structure for `orderdetails`
-- ----------------------------
DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE `orderdetails` (
  `DetailID` int(11) NOT NULL AUTO_INCREMENT,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) COLLATE latin1_german2_ci NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `DetailQuantity` int(11) NOT NULL,
  PRIMARY KEY (`DetailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- ----------------------------
--  Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- ----------------------------
--  Table structure for `productcategories`
-- ----------------------------
DROP TABLE IF EXISTS `productcategories`;
CREATE TABLE `productcategories` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- ----------------------------
--  Records of `productcategories`
-- ----------------------------
BEGIN;
INSERT INTO `productcategories` VALUES ('1', 'Running'), ('2', 'Walking'), ('3', 'HIking'), ('4', 'Track and Trail'), ('5', 'Short Sleave'), ('6', 'Long Sleave');
COMMIT;

-- ----------------------------
--  Table structure for `productoptions`
-- ----------------------------
DROP TABLE IF EXISTS `productoptions`;
CREATE TABLE `productoptions` (
  `ProductOptionID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ProductID` int(10) unsigned NOT NULL,
  `OptionID` int(10) unsigned NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL,
  PRIMARY KEY (`ProductOptionID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- ----------------------------
--  Records of `productoptions`
-- ----------------------------
BEGIN;
INSERT INTO `productoptions` VALUES ('1', '1', '1', '0', '1'), ('2', '1', '2', '0', '1'), ('3', '1', '3', '0', '1'), ('4', '1', '4', '0', '2'), ('5', '1', '5', '0', '2'), ('6', '1', '6', '0', '2'), ('7', '1', '7', '2', '2'), ('8', '1', '8', '2', '2');
COMMIT;

-- ----------------------------
--  Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `ProductID` int(12) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=991 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

-- ----------------------------
--  Records of `products`
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES ('1', '000-0001', 'Cotton T-Shirt', '9.99', '3', 'Light Cotton T-Shirt', 'A light cotton T-Shirt made with 100% real cotton.', 'A light cotton T-Shirt made with 100% real cotton.\r\n\r\nMade right here in the USA for over 15 years, this t-shirt is lightweight and durable.', '', '', '5', '2013-06-12 21:00:50', '100', '1', '0', null), ('2', '000-0004', 'Los Angeles', '179.99', '8', 'Track and Trail', 'A rugged track and trail athletic shoe', 'A rugged track and trail athletic shoe', '', '', '4', '2013-07-25 15:04:36', null, '0', '1', null);
COMMIT;

-- ----------------------------
--  Table structure for `size`
-- ----------------------------
DROP TABLE IF EXISTS `size`;
CREATE TABLE `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `size` (`size`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;
