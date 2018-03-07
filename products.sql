-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 11:04 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
-- Table structure for table `products`
--
-- Creation: Mar 05, 2018 at 09:10 AM
-- Last update: Mar 06, 2018 at 09:17 AM
-- Last check: Mar 06, 2018 at 10:02 AM
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(12) NOT NULL AUTO_INCREMENT,
  `CategoryID` int(11) DEFAULT NULL,
  `SellerGroupID` int(12) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ProductWeight` float NOT NULL,
  `ProductCartDesc` varchar(250) NOT NULL,
  `ProductShortDesc` varchar(1000) NOT NULL,
  `ProductLongDesc` text NOT NULL,
  `ProductThumb` varchar(100) NOT NULL,
  `ProductImage` varchar(100) NOT NULL,
  `ProductUpdateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ProductStock` float DEFAULT NULL,
  `ProductLive` tinyint(1) DEFAULT '0',
  `ProductUnlimited` tinyint(1) DEFAULT '1',
  `ProductLocation` varchar(250) DEFAULT NULL,
  `ProductVerified` tinyint(1) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `products`:
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `CategoryID`, `SellerGroupID`, `ProductName`, `ProductPrice`, `ProductWeight`, `ProductCartDesc`, `ProductShortDesc`, `ProductLongDesc`, `ProductThumb`, `ProductImage`, `ProductUpdateDate`, `ProductStock`, `ProductLive`, `ProductUnlimited`, `ProductLocation`, `ProductVerified`) VALUES
(1, 1, 0, 'Cotton T-Shirt', 499.5, 3, 'Light Cotton T-Shirt', 'A light cotton T-Shirt made with 100% real cotton.', 'A light cotton T-Shirt made with 100% real cotton.\r\n\r\nMade right here in the USA for over 15 years, this t-shirt is lightweight and durable.', 'TEST1.PNG', 'TEST1.PNG', '2013-06-12 17:00:50', 99, 1, 0, NULL, 0),
(2, 1, 0, 'Los Angeles Shoes', 8999.5, 8, 'Track and Trail', 'A rugged track and trail athletic shoe', 'A rugged track and trail athletic shoe', 'TEST2.PNG', 'TEST2.PNG', '2013-07-25 11:04:36', NULL, 0, 1, NULL, 0),
(3, 3, 1, 'Asus Zenfone Live ZB501KL 16gb (Gold)  ', 5000, 5, 'Asus Zenfone Live ZB501KL 16gb (Gold)  ', 'Specifications of Asus Zenfone Live ZB501KL 16gb (Gold)\r\nWhat\'s in the box:	\r\n1 x Asus Zenfone Live ZB501KL 16gb (Gold)1 x Headphones1 x USB Cable1 x USB AC Adapterincludes;earphone, charger, manual and cable\r\nGeneral Features:\r\nSKU	AS595ELAA9H9Y2ANPH-18932290\r\nScreen Size (inches)	5.0\r\nModel	ZB501KL\r\nStorage Capacity	16GB\r\nWarranty period	1 Year\r\nWarranty type	Local Manufacturer Warranty', 'Operating System: Android 6.0 with ZenUI 3.5\r\n \r\nDisplay: 5-inch HD(1280 x 720) IPS display\r\n \r\nProcessor: Qualcomm Quad-Core Processor Snapdragon\r\n \r\nGraphics: Adreno 305\r\n \r\nMemory: 2GB\r\n \r\nStorage: 16GB Internal Storage with microSD Card up to 128GB (Hybrid Slot)\r\n \r\nBattery: 2650mAh (non-removeable)\r\n \r\nConnectivity: Wi-Fi 802.11 b/g/n, WiFi-Direct, Miracast, hotspot, Bluetooth V 4.0\r\n \r\nOther Features: Accelerator/E-Compass/Proximity sensor/Ambient light sensor\r\nincludes:earphones,charger', 'TEST3.PNG', 'TEST3.PNG|||Capture.PNG|||Capture1.PNG|||Capture2.PNG|||Capture3.PNG|||Capture4.PNG|||TEST3.PNG', '2018-03-02 12:31:28', 5, 1, 0, NULL, 0),
(4, 4, 1, 'LENOVO K8 NOTE', 8999, 100, 'LENOVO K8 NOTE 4GB + 64GB (Fine Gold)   ', 'SKU	LE611ELAAMWRREANPH-46247000\r\nColor	Gold\r\nCPU Speed	2-3GHz\r\nDisplay Size	5.5\r\nScreen Size (inches)	5.5\r\nModel	K8 Note\r\nOperating System	Android\r\nCapacity (GB)	64\r\nStorage Capacity	Not Specified\r\nRAM (GB)	4\r\nWarranty period	1 Year\r\nWarranty type	Local Supplier Warranty\r\nWhat\'s in the box:	\r\n1 x Asus Zenfone Live ZB501KL 16gb (Gold)1 x Headphones1 x USB Cable1 x USB AC Adapterincludes;earphone, charger, manual and cable\r\nGeneral Features:\r\nSKU	AS595ELAA9H9Y2ANPH-18932290\r\nScreen Size (inches)	5.0\r\nModel	ZB501KL\r\nStorage Capacity	16GB\r\nWarranty period	1 Year\r\nWarranty type	Local Manufacturer Warranty', '5.5 inch FHD (1920*1080) 2.5D Corning Gorilla Glass\r\nAndroid 7.1, Nougat\r\nProcessor MTK X23 Deca-core 2.3GHz\r\nRear Camera: 13MP + 5MP dual cameras with dual CCT LED flash\r\nFront Camera: 13MP with selfie light\r\nAudio Dolby Atmos\r\nMemory 4GB RAM + 64GB ROM\r\nexpandable by up to 128GB microSD\r\n4000mAh non-removable\r\nSecurity Fingerprint reader', 'lenovo1.jpg', 'lenovo1.jpg|||lenovo2.jpg|||lenovo3.jpg|||lenovo4.jpg', '2018-03-02 12:31:28', 5, 1, 1, 'Manila, Philippines', 1),
(5, 4, 1, 'AWEADN G20 Backlight LED Pro Gaming Keyboard USB ', 499, 400, 'Wired Powered Gamer Keyboard With 2000 DPI Mouse For Computer Game LOL Light Gaming(Black)    ', 'Cool fashion design, simple structure, the principle of human engineering, effective release of left and right hand fatigue, attracting a large number of game game player and office business people.', 'Product details of AWEADN G20 Backlight LED Pro Gaming Keyboard USB Wired Powered Gamer Keyboard With 2000 DPI Mouse For Computer Game LOL Light Gaming(Black)', 'keyboard1.jpg', 'keyboard1.jpg|||keyboard2.jpg|||keyboard3.jpg', '2018-03-02 12:31:28', 2, 1, 1, 'Cavite, Philippines', 1),
(6, 4, 1, 'Apple Macbook Air 13-Inch 128GB, MQD32 ', 46999, 500, 'Display: 13.3-inch (diagonal) LED-backlit glossy widescreen display with support for millions of colors Supported resolutions: 1440 by 900 (native), 1280 by 800, 1152 by 720, and 1024 by 640 pixels', 'Apple Macbook Air 13-Inch 128GB, MQD32  ', 'Display: 13.3-inch (diagonal) LED-backlit glossy widescreen display with support for millions of colors Supported resolutions: 1440 by 900 (native), 1280 by 800, 1152 by 720, and 1024 by 640 pixels at 16:10 aspect ratio and 1024 by 768 and 800 by 600 pixels at 4:3 aspect ratio\r\nStorage: 128GB PCIe-based SSD, Configurable to 256GB or 512GB SSD, 256GB PCIe-based SSD, Configurable to 512GB SSD', 'mac1.jpg', 'mac1.jpg|||mac2.jpg', '2018-03-02 12:31:28', 4, 1, 1, 'Dasmariñas, Cavite, Philippines', 1),
(7, 4, 1, 'LG 49\" 4K UHD Smart TV Black 49UF670T ', 26999, 15.5, 'Model	SAVERS ELECTRONIC WORLD INC.-50002061\r\nSize (L x W x H cm)	110.4 x 26.1 x 70.1\r\nWeight (kg)	15.9\r\nSmart TV	Yes\r\nResolution	4K Ultra HD\r\nTechnology	LED', 'Type: 4K UHD Smart TV\r\nResolution: 3840 x 2160\r\nConnectivity: HDMI x2, USB x1', 'Type: 4K UHD Smart TV\r\nResolution: 3840 x 2160\r\nConnectivity: HDMI x2, USB x1\r\nRefresh Rate: 120 Hz\r\nResponse Time: 8 ms\r\nPower Consumption : 83 watts', 'tv1.jpg', 'tv1.jpg', '2018-03-02 12:31:28', 8, 1, 1, 'Silang, Cavite, Philippines', 1),
(8, 4, 1, 'VR Box Shinecon Smartphone 3D Virtual Reality Glasses (Black)', 26999, 15.5, 'VR Box Shinecon Smartphone 3D Virtual Reality Glasses (Black) with Bluetooth VR Remote Controller (Black) ', 'There are headphone holes on the both side. You can choose it according to your cell phone.\r\nEmploy high transparent lens, with high definition and long lifespan.\r\n\r\nNote: Players which support left-right channel division need to be installed.', 'Lens: HD Optical Resin Augmented Lens\r\nLens Diameter:38mm\r\nFOV: 110 - 115 degree with 5.5 inch Smartphone\r\nAR Function: Support,Built-in Space for Camera\r\nLens material: Spherical resin\r\nVideo Input: Cell phone\r\nSuitable for 3.5 - 6 inch Diagonal Screen Mobile Phones\r\nThe strap is elastic and adjustable\r\nAdjustable eye distance and pupillary distance', 'vr3.jpg', 'vr1.jpg|||vr2.jpg|||vr3.jpg', '2018-03-02 12:31:28', 5, 1, 1, 'Canada', 1),
(9, 4, 1, 'Acer Nitro 5 AN515-41-F722 15.6\" AMD FX-9830P 4GB Gaming Laptop with Free Acer Backpack', 44999, 500, 'Acer Nitro 5 AN515-41-F722 15.6\" AMD FX-9830P 4GB Gaming Laptop with Free Acer Backpack', '1 x Acer Nitro 5 AN515-41-F722, 1 x User Manual, 1 x Battery, 1 x AC Adapter & cord', 'Operating System: Windows 10 Home\r\nProcessor: AMD FX-Series FX-9830P 3 GHz; Quad-core    \r\nMemory: 4GB DDR4 (standard), Up to 32 GB (maximum)\r\nStorage: 128GB SSD + 1TB HDD\r\nScreen: 15.6\" IPS Display\r\nGraphics: 4GB AMD Radeon RX 550 GDDR5 \r\nConnectivity: 802.11ac wireless LAN, Gigabit LAN\r\nPorts & Connectors: 1x USB 3.0, 2x USB 2.0, Network (RJ-45), HDMI Output, 1x USB 3.1 Gen 1 Type-C\r\nBattery: 4-cell 3220 mAh Li-ion', 'laptop1.jpg', 'laptop1.jpg|||laptop2.jpg', '2018-03-02 12:31:28', 2, 1, 1, 'Makati City, Philippines', 1),
(10, 4, 1, 'Apple iPad 9.7-inch Wi-Fi Gold 128GB  ', 20990, 200, 'Apple iPad 9.7-inch Wi-Fi Gold 128GB  ', 'Pad helps you learn, play, surf, and create with a gorgeous 9.7-inch Retina display, powerful A9 chip, 8MP camera, FaceTime HD camera, Touch ID, and all-day battery life. All in a durable aluminum design that weighs just a pound.\r\n\r\nPowerful, portable, and personal with a gorgeous 9.7-inch Retina display in a thin, durable aluminum design that weighs 478 grams. iPad puts incredible capabilities in your hands with a powerful A9 chip, 8MP camera, FaceTime HD camera, Touch ID, Wi-Fi and 4G LTE, all-day battery life, and over a million apps on the App Store.', '9.7-inch Retina display\r\nA9 chip with 64-bit desktop-class architecture\r\nTouch ID fingerprint sensor\r\n8MP camera with 1080p video\r\n1.2MP FaceTime HD camera\r\n802.11ac Wi-Fi with MIMO\r\nUp to 10 hours of battery life\r\nTwo speaker audio\r\nAs per Apple Care 1 Year Warranty Policy, customer SHOULD GO DIRECTLY to Apple Care Service Centers for any product related concerns on defect or repairs WITHIN OR BEYOND Lazada 14-Day Return Polic', 'ipad1.jpg', 'ipad1.jpg|||ipad2.jpg', '2018-03-02 12:31:28', 3, 1, 1, 'Makati City, Philippines', 1),
(11, 4, 1, 'Apple iPhone X Silver 64GB  ', 54990, 300, 'Apple iPhone X Silver 64GB  ', 'iPhone X features an all-screen design with a 5.8-inch Super Retina HD display with HDR and True Tone.1 Designed with the most durable glass ever in a smartphone and a surgical grade stainless steel band. Charges wirelessly.2 Resists water and dust.3 12MP dual cameras with dual optical image stabilization for great low-light photos. TrueDepth camera with Portrait selfies and new Portrait Lighting.4 Advanced facial recognition securely unlocks iPhone X with just a glance. Powered by A11 Bionic, the most powerful and smartest chip ever in a smartphone. Supports augmented reality experiences in games and apps. With iPhone X, the next era of iPhone has begun. ', '5.8-inch Super Retina HD display with HDR and True Tone\r\nAll-glass and stainless steel design, water and dust resistant\r\n12MP dual cameras with dual OIS, Portrait mode, Portrait Lighting, and 4K video up to 60 fps\r\n7MP TrueDepth front camera with Portrait mode, Portrait Lighting\r\nFace ID for secure authentication\r\nA11 Bionic, the most powerful and smartest chip in a smartphone\r\nWireless charging — works with Qi chargers\r\nAs per Apple Care 1 Year Warranty Policy, customer SHOULD GO DIRECTLY to Apple Care Service Centers for any product related concerns on defect or repairs WITHIN OR BEYOND Lazada 14-Day Return Policy.', 'x1.jpg', 'x1.jpg|||x2.jpg', '2018-03-02 12:31:28', 3, 1, 1, 'Cebu City, Philippines', 1),
(12, 4, 1, 'Blackview S8 4G Phablet 5.7 inch Android 7.0 Cellphone 4GB + 64GB  ', 9261, 300, 'Blackview S8 4G Phablet 5.7 inch Android 7.0 MTK6750T 1.5GHz Octa Core 4GB RAM 64GB ROM 8.0MP + 0.3MP Dual Front Cameras Touch Sensor', '', 'Display: 5.7 inch, 1440 x 720 Pixel screen\r\nCPU: MTK6750T 1.5GHz Octa Core\r\nSystem: Android 7.0\r\nRAM + ROM: 4GB RAM + 64GB ROM\r\nCamera: 8.0MP ( SW 13.0MP ) + 0.3MP front cameras + 13.0MP + 0.3MP back cameras\r\nSensor: Ambient Light Sensor, Gravity Sensor, Proximity Sensor', 'phone1.jpg', 'phone1.jpg|||phone2.jpg|||phone3.jpg', '2018-03-02 12:31:28', 5, 1, 1, 'Marawi City, Philippines', 1),
(13, 4, 1, '[Buy 1 Get 1 Free Gift] Stereo Gaming Headphone', 761, 100, '1. Game quality stereo sound: Powerful 40mm subwoofer speaker delivers clear, rich sound.\r\n2. Adjustable head beam height, built in segmented parts.', '', 'Game quality stereo sound\r\nEasy to rotate to best position for clearest voice pick up\r\nSoft earcup covers designed to keep your ears comfortable\r\nBreathable material is helpful to reduce heat and moisture', 'hs1.jpg', 'hs1.jpg|||hs2.jpg', '2018-03-02 12:31:28', 5, 1, 1, 'Biringan City, Philippines', 1),
(14, 4, 1, 'Huawei P10 Lite WAS-LX1A 4GB Ram 32GB ROM Dual sim Black', 14350, 100, '1x Phone 1x Micro USB Cable 1x Wall Charger 1x Battery 1x Headphones 1 x Documentation', '', '5.2 inch FHD (1920 x 1080 pixel)\r\nHiSilicon Kirin 658 , Octa-core (4x2.1 GHz Cortex-A53 & 4x1.7 GHz Cortex-A53)\r\nEMUI 5.1\r\n4GB RAM + 32GB ROM\r\nRear Camera : 12MP , f/2.2\r\nFront Camera : 8 MP AF, F1.9\r\n3,000 mAh (TYP)', 'huawei1.jpg', 'huawei1.jpg|||huawei2.jpg', '2018-03-02 12:31:28', 7, 1, 1, 'Biringan City, Philippines', 1),
(15, 4, 1, 'Tanggo Leo Fashion Sneakers Men\'s Rubber Shoes (black)  ', 399, 100, 'Tanggo Leo Fashion Sneakers Men\'s Rubber Shoes (black)  ', 'This shoes are well-rounded shoes designed to endure lots of movement and physical activity, they also work well in everyday life.  It also a good pair of shoes provides sufficient ankle support, cushion, and tread on the sole of the shoe. ', '\r\nFunction: Breathable and comfortable\r\nGender: Men\r\nToe Shape: Round\r\nUpper Material: suede nylon\r\nOutsole Material: Rubber\r\nInsole Material: Canvas\r\nHeel Height: About 3cm', 'shoes1.jpg', 'shoes1.jpg|||shoes2.jpg', '2018-03-02 12:31:28', 2, 1, 1, 'Biringan City, Philippines', 1);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table products
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
