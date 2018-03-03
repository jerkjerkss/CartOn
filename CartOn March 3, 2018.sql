-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 11:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshoppingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `optiongroups`
--
-- Creation: Feb 21, 2018 at 05:40 AM
-- Last update: Feb 21, 2018 at 05:40 AM
-- Last check: Feb 25, 2018 at 01:50 AM
--

DROP TABLE IF EXISTS `optiongroups`;
CREATE TABLE IF NOT EXISTS `optiongroups` (
  `OptionGroupID` int(11) NOT NULL AUTO_INCREMENT,
  `OptionGroupName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`OptionGroupID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `optiongroups`:
--

--
-- Dumping data for table `optiongroups`
--

INSERT INTO `optiongroups` (`OptionGroupID`, `OptionGroupName`) VALUES
(1, 'color'),
(2, 'size');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--
-- Creation: Feb 21, 2018 at 05:40 AM
-- Last update: Feb 21, 2018 at 05:40 AM
-- Last check: Feb 25, 2018 at 01:50 AM
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `OptionID` int(11) NOT NULL AUTO_INCREMENT,
  `OptionGroupID` int(11) DEFAULT NULL,
  `OptionName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`OptionID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `options`:
--

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`OptionID`, `OptionGroupID`, `OptionName`) VALUES
(1, 1, 'red'),
(2, 1, 'blue'),
(3, 1, 'green'),
(4, 2, 'S'),
(5, 2, 'M'),
(6, 2, 'L'),
(7, 2, 'XL'),
(8, 2, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--
-- Creation: Feb 21, 2018 at 05:41 AM
-- Last update: Feb 21, 2018 at 05:41 AM
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `DetailID` int(11) NOT NULL AUTO_INCREMENT,
  `DetailOrderID` int(11) NOT NULL,
  `DetailProductID` int(11) NOT NULL,
  `DetailName` varchar(250) NOT NULL,
  `DetailPrice` float NOT NULL,
  `DetailSKU` varchar(50) NOT NULL,
  `DetailQuantity` int(11) NOT NULL,
  PRIMARY KEY (`DetailID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `orderdetails`:
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
-- Creation: Feb 21, 2018 at 05:41 AM
-- Last update: Feb 21, 2018 at 05:41 AM
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `OrderUserID` int(11) NOT NULL,
  `OrderAmount` float NOT NULL,
  `OrderShipName` varchar(100) NOT NULL,
  `OrderShipAddress` varchar(100) NOT NULL,
  `OrderShipAddress2` varchar(100) NOT NULL,
  `OrderCity` varchar(50) NOT NULL,
  `OrderState` varchar(50) NOT NULL,
  `OrderZip` varchar(20) NOT NULL,
  `OrderCountry` varchar(50) NOT NULL,
  `OrderPhone` varchar(20) NOT NULL,
  `OrderFax` varchar(20) NOT NULL,
  `OrderShipping` float NOT NULL,
  `OrderTax` float NOT NULL,
  `OrderEmail` varchar(100) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `OrderShipped` tinyint(1) NOT NULL DEFAULT '0',
  `OrderTrackingNumber` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `orders`:
--

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--
-- Creation: Feb 21, 2018 at 05:41 AM
-- Last update: Feb 21, 2018 at 09:10 AM
-- Last check: Feb 25, 2018 at 01:50 AM
--

DROP TABLE IF EXISTS `productcategories`;
CREATE TABLE IF NOT EXISTS `productcategories` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `productcategories`:
--

--
-- Dumping data for table `productcategories`
--

INSERT INTO `productcategories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Apparel, Footwear & Accessories'),
(2, 'Household Supplies'),
(3, 'Computer, Electronics & Accessories'),
(4, 'Handbags & Luggage'),
(5, 'Cosmetics & Skincare Products'),
(6, 'Books, Audio & Video Products'),
(7, 'Home Appliances'),
(8, 'Stationery & Sports Products');

-- --------------------------------------------------------

--
-- Table structure for table `productoptions`
--
-- Creation: Feb 21, 2018 at 05:42 AM
-- Last update: Feb 21, 2018 at 05:42 AM
-- Last check: Feb 25, 2018 at 01:50 AM
--

DROP TABLE IF EXISTS `productoptions`;
CREATE TABLE IF NOT EXISTS `productoptions` (
  `ProductOptionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ProductID` int(10) UNSIGNED NOT NULL,
  `OptionID` int(10) UNSIGNED NOT NULL,
  `OptionPriceIncrement` double DEFAULT NULL,
  `OptionGroupID` int(11) NOT NULL,
  PRIMARY KEY (`ProductOptionID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `productoptions`:
--   `OptionGroupID`
--       `optiongroups` -> `OptionGroupID`
--   `OptionID`
--       `options` -> `OptionID`
--   `ProductID`
--       `products` -> `ProductID`
--

--
-- Dumping data for table `productoptions`
--

INSERT INTO `productoptions` (`ProductOptionID`, `ProductID`, `OptionID`, `OptionPriceIncrement`, `OptionGroupID`) VALUES
(1, 1, 1, 0, 1),
(2, 1, 2, 0, 1),
(3, 1, 3, 0, 1),
(4, 1, 4, 0, 2),
(5, 1, 5, 0, 2),
(6, 1, 6, 0, 2),
(7, 1, 7, 2, 2),
(8, 1, 8, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--
-- Creation: Mar 02, 2018 at 12:32 PM
-- Last update: Mar 02, 2018 at 02:38 PM
-- Last check: Mar 02, 2018 at 11:56 PM
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(12) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) NOT NULL,
  `SellerGroupID` int(12) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductCartDesc` varchar(250) NOT NULL,
  `ProductShortDesc` varchar(1000) NOT NULL,
  `ProductLongDesc` text NOT NULL,
  `ProductThumb` varchar(100) NOT NULL,
  `ProductImage` varchar(100) NOT NULL,
  `ProductCategoryID` int(11) DEFAULT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT '0',
  `ProductUnlimited` tinyint(1) DEFAULT '1',
  `ProductLocation` varchar(250) DEFAULT NULL,
  `ProductVerified` tinyint(1) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `products`:
--   `ProductCategoryID`
--       `productcategories` -> `CategoryID`
--   `SellerGroupID`
--       `sellergroups` -> `SellerGroupID`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `SellerGroupID`, `ProductPrice`, `ProductWeight`, `ProductCartDesc`, `ProductShortDesc`, `ProductLongDesc`, `ProductThumb`, `ProductImage`, `ProductCategoryID`, `ProductUpdateDate`, `ProductStock`, `ProductLive`, `ProductUnlimited`, `ProductLocation`, `ProductVerified`) VALUES
(1, 'Cotton T-Shirt Cotton T-Shirt Cotton T-Shirt Cotton T-Shirt Cotton T-Shirt', 0, 499.5, 3, 'Light Cotton T-Shirt', 'A light cotton T-Shirt made with 100% real cotton.', 'A light cotton T-Shirt made with 100% real cotton.\r\n\r\nMade right here in the USA for over 15 years, this t-shirt is lightweight and durable.', 'TEST1.PNG', 'TEST1.PNG', 5, '2013-06-12 17:00:50', 99, 1, 0, NULL, 0),
(2, 'Los Angeles', 0, 8999.5, 8, 'Track and Trail', 'A rugged track and trail athletic shoe', 'A rugged track and trail athletic shoe', 'TEST2.PNG', 'TEST2.PNG', 4, '2013-07-25 11:04:36', NULL, 0, 1, NULL, 0),
(3, 'Asus Zenfone Live ZB501KL 16gb (Gold)  ', 1, 5000, 5, 'Asus Zenfone Live ZB501KL 16gb (Gold)  ', 'Specifications of Asus Zenfone Live ZB501KL 16gb (Gold)\r\nWhat\'s in the box:	\r\n1 x Asus Zenfone Live ZB501KL 16gb (Gold)1 x Headphones1 x USB Cable1 x USB AC Adapterincludes;earphone, charger, manual and cable\r\nGeneral Features:\r\nSKU	AS595ELAA9H9Y2ANPH-18932290\r\nScreen Size (inches)	5.0\r\nModel	ZB501KL\r\nStorage Capacity	16GB\r\nWarranty period	1 Year\r\nWarranty type	Local Manufacturer Warranty', 'Operating System: Android 6.0 with ZenUI 3.5\r\n \r\nDisplay: 5-inch HD(1280 x 720) IPS display\r\n \r\nProcessor: Qualcomm® Quad-Core Processor Snapdragon™\r\n \r\nGraphics: Adreno 305\r\n \r\nMemory: 2GB\r\n \r\nStorage: 16GB Internal Storage with microSD Card up to 128GB (Hybrid Slot)\r\n \r\nBattery: 2650mAh (non-removeable)\r\n \r\nConnectivity: Wi-Fi 802.11 b/g/n, WiFi-Direct, Miracast, hotspot, Bluetooth V 4.0\r\n \r\nOther Features: Accelerator/E-Compass/Proximity sensor/Ambient light sensor\r\nincludes:earphones,charger', 'TEST3.PNG', 'TEST3.PNG|||Capture.PNG|||Capture1.PNG|||Capture2.PNG|||Capture3.PNG|||Capture4.PNG|||TEST3.PNG', 3, '2018-03-02 12:31:28', 5, 1, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--
-- Creation: Feb 21, 2018 at 10:07 AM
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `SellerID` int(12) NOT NULL AUTO_INCREMENT,
  `SellerGroupID` int(12) NOT NULL,
  `UserID` int(12) NOT NULL,
  PRIMARY KEY (`SellerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `seller`:
--   `SellerGroupID`
--       `sellergroups` -> `SellerGroupID`
--   `UserID`
--       `users` -> `UserID`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellergroups`
--
-- Creation: Feb 21, 2018 at 10:48 AM
--

DROP TABLE IF EXISTS `sellergroups`;
CREATE TABLE IF NOT EXISTS `sellergroups` (
  `SellerGroupID` int(12) NOT NULL AUTO_INCREMENT,
  `SellerGroupName` varchar(100) NOT NULL,
  `BIRVerified` tinyint(1) NOT NULL,
  `DTIVerified` tinyint(1) NOT NULL,
  `BusinessPermitVerified` tinyint(1) NOT NULL,
  PRIMARY KEY (`SellerGroupID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `sellergroups`:
--

--
-- Dumping data for table `sellergroups`
--

INSERT INTO `sellergroups` (`SellerGroupID`, `SellerGroupName`, `BIRVerified`, `DTIVerified`, `BusinessPermitVerified`) VALUES
(1, 'XDLine', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Feb 28, 2018 at 03:07 AM
-- Last update: Mar 03, 2018 at 10:08 AM
-- Last check: Mar 01, 2018 at 12:40 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(500) DEFAULT NULL,
  `UserPassword` varchar(500) DEFAULT NULL,
  `UserToken` varchar(500) NOT NULL,
  `UserAccess` varchar(20) NOT NULL,
  `UserFirstName` varchar(50) DEFAULT NULL,
  `UserLastName` varchar(50) DEFAULT NULL,
  `UserCity` varchar(90) DEFAULT NULL,
  `UserState` varchar(20) DEFAULT NULL,
  `UserZip` varchar(12) DEFAULT NULL,
  `UserEmailVerified` tinyint(1) DEFAULT '0',
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserVerificationCode` varchar(20) DEFAULT NULL,
  `UserIP` varchar(50) DEFAULT NULL,
  `UserPhone` varchar(20) DEFAULT NULL,
  `UserFax` varchar(20) DEFAULT NULL,
  `UserCountry` varchar(20) DEFAULT NULL,
  `UserAddress` varchar(100) DEFAULT NULL,
  `UserAddress2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `UserToken`, `UserAccess`, `UserFirstName`, `UserLastName`, `UserCity`, `UserState`, `UserZip`, `UserEmailVerified`, `UserRegistrationDate`, `UserVerificationCode`, `UserIP`, `UserPhone`, `UserFax`, `UserCountry`, `UserAddress`, `UserAddress2`) VALUES
(3, 'cart@on.com', '_u9OBbEwNENjIY3VNyU71jf3wFsc9xnPzccf6TJrHxk', '', 'customer', 'Cart', 'On', NULL, NULL, NULL, 0, '2018-03-03 10:07:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
