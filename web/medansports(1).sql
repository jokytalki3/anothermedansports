-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2017 at 06:45 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medansports`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brand`
--

DROP TABLE IF EXISTS `Brand`;
CREATE TABLE IF NOT EXISTS `Brand` (
  `brand_id` int(4) NOT NULL,
  `brand_name` varchar(45) NOT NULL,
  PRIMARY KEY (`brand_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Brand`
--

REPLACE INTO `Brand` (`brand_id`, `brand_name`) VALUES
(1001, 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

DROP TABLE IF EXISTS `Category`;
CREATE TABLE IF NOT EXISTS `Category` (
  `cat_id` varchar(11) NOT NULL,
  `cat_name` varchar(45) NOT NULL,
  PRIMARY KEY (`cat_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Product Category';

--
-- Dumping data for table `Category`
--

REPLACE INTO `Category` (`cat_id`, `cat_name`) VALUES
('1001', 'Shoes'),
('1002', 'Garment'),
('1003', 'Sports Equipment'),
('1004', 'Trophy'),
('1005', 'Gift & Premium'),
('1006', 'Custom Made'),
('CM001', 'EMBROIDERY'),
('CM002', 'HEATPRESS'),
('CM003', 'SILKSCREEN'),
('CM004', 'STICKER'),
('CM005', 'GARMENT'),
('CM006', 'TROPHY'),
('CM007', 'NAME CARD'),
('CM008', 'BANNER'),
('CM009', 'BUNTING'),
('CM010', 'PENNANTS'),
('CM011', 'MUG'),
('CM012', 'CHOP'),
('GM001', 'ROUND NECK SHORT/LONG SLEEVE'),
('GM002', 'COLLER NECK SHORT/LONG SLEEVE'),
('GM003', 'ZIP MOCK NECK'),
('GM004', 'JERSEY'),
('GM005', 'PANT'),
('GM006', 'CORPORATE UNIFORM SHORT/LONG SLEEVE'),
('GM007', 'LAB COAT'),
('GM008', 'MUSLIMAH'),
('GM009', 'JACKET'),
('GM010', 'VEST'),
('GM011', 'COVERALL'),
('GM012', 'APRON'),
('GM013', 'CAP'),
('GM014', 'TOWEL'),
('GP001', 'USB DRIVE SERIES'),
('GP002', 'POWER BANK SERIES'),
('GP003', 'PEN SERIES'),
('GP004', 'BAG SERIES'),
('GP005', 'HOUSEHOLD SERIES'),
('GP006', 'STATIONERY SERIES'),
('GP007', 'ELECTRONIC SERIES'),
('GP008', 'ECO SERIES'),
('GP009', 'MISCELLANEOUS SERIES'),
('GP010', 'LANYARD SERIES'),
('SE001', 'GAME BALL'),
('SE002', 'INDOOR GAME'),
('SE003', 'POST, BOARD, RING & STAND'),
('SE004', 'NET NEEDLE & TROLLEY'),
('SE005', 'RACKET'),
('SE006', 'TABLE TENNIS'),
('SE007', 'HOCKEY'),
('SE008', 'OUTDOOR GAME'),
('SE009', 'TRACK & FIELD'),
('SE010', 'RUNNING'),
('SE011', 'SUPPORTIVE'),
('SE012', 'ACCESSORIES'),
('TP001', 'IMPORTED CUP'),
('TP002', 'HANGING MEDAL'),
('TP003', 'PLASTIC STANDING MEDAL'),
('TP004', 'PLAQUE'),
('TP005', 'PEWTER AWARD(TROPHY)'),
('TP006', 'POLY RESIN TROPHY'),
('TP007', 'ACRYLIC MAKE-UP TROPHY'),
('TP008', 'CASTING PART TROPHY'),
('TP009', 'PS TROPHY'),
('TP010', 'CUSTOM MADE');

-- --------------------------------------------------------

--
-- Table structure for table `Courier`
--

DROP TABLE IF EXISTS `Courier`;
CREATE TABLE IF NOT EXISTS `Courier` (
  `courier_id` int(2) NOT NULL,
  `courier_name` varchar(50) NOT NULL,
  PRIMARY KEY (`courier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Courier`
--

REPLACE INTO `Courier` (`courier_id`, `courier_name`) VALUES
(1, 'Pos Laju'),
(2, 'Bus Asia');

-- --------------------------------------------------------

--
-- Table structure for table `Courier_rate`
--

DROP TABLE IF EXISTS `Courier_rate`;
CREATE TABLE IF NOT EXISTS `Courier_rate` (
  `city` varchar(30) NOT NULL,
  `rate` float(3,2) NOT NULL,
  `courier_id` int(2) NOT NULL,
  KEY `courier_id` (`courier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

DROP TABLE IF EXISTS `Member`;
CREATE TABLE IF NOT EXISTS `Member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp_num` decimal(12,0) NOT NULL,
  `ship_addr` varchar(100) NOT NULL,
  `ship_city` varchar(30) NOT NULL,
  `ship_state` varchar(25) NOT NULL,
  `bill_addr` varchar(100) DEFAULT NULL,
  `bill_city` varchar(30) DEFAULT NULL,
  `bill_state` varchar(25) DEFAULT NULL,
  `credit_card` decimal(16,0) NOT NULL,
  `card_exp_mo` int(2) NOT NULL,
  `card_exp_yr` int(4) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Member`
--

REPLACE INTO `Member` (`member_id`, `password`, `username`, `email`, `hp_num`, `ship_addr`, `ship_city`, `ship_state`, `bill_addr`, `bill_city`, `bill_state`, `credit_card`, `card_exp_mo`, `card_exp_yr`) VALUES
(6, '$2y$10$Lk24B6fUlwus85TT1T6PtuhnZPnFREbBKv.4b29FLvxn1e7S1a.Le', 'tyu1996', '123@123.com', '119998877', 'NO. 85, Taman Tinggi, Jalan Tun Hussein Onn', 'Bintulu', 'Sarawak', NULL, NULL, NULL, '9999888877776666', 90, 20),
(7, '$2y$10$oH8IUU7jN5aGERcjEPY1M.3cSP0UrHhsnerL2k8us40gqaASB1Cle', 'abc1234', '123@123.com', '998811888', 'njnfadsn', 'fdaskjf', 'fooijdsaoifj', NULL, NULL, NULL, '9999999999999998', 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetails`
--

DROP TABLE IF EXISTS `OrderDetails`;
CREATE TABLE IF NOT EXISTS `OrderDetails` (
  `ord_d_id` int(11) NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `order_num` int(12) NOT NULL,
  `quantity` int(4) NOT NULL,
  `total` float(6,2) NOT NULL,
  `ship_date` date NOT NULL,
  `bill_date` date NOT NULL,
  PRIMARY KEY (`ord_d_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OrderDetails`
--

REPLACE INTO `OrderDetails` (`ord_d_id`, `product_id`, `order_num`, `quantity`, `total`, `ship_date`, `bill_date`) VALUES
(9001, '1001', 8000, 20, 1110.00, '2017-07-31', '2017-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

DROP TABLE IF EXISTS `Orders`;
CREATE TABLE IF NOT EXISTS `Orders` (
  `order_id` varchar(15) NOT NULL,
  `order_track_num` varchar(15) NOT NULL,
  `courier_id` int(2) NOT NULL,
  `member_id` int(11) NOT NULL,
  `payment_id` int(2) NOT NULL,
  `payment_date` date NOT NULL,
  `transaction_status` tinyint(1) NOT NULL,
  `ord_d_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`) USING BTREE,
  KEY `Courier ID` (`courier_id`),
  KEY `member_id` (`member_id`),
  KEY `payment_id` (`payment_id`),
  KEY `ord_d_id` (`ord_d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Order information';

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

DROP TABLE IF EXISTS `Payment`;
CREATE TABLE IF NOT EXISTS `Payment` (
  `payment_id` int(2) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Payment`
--

REPLACE INTO `Payment` (`payment_id`, `payment_type`) VALUES
(1, 'VISA/MASTER'),
(2, 'ONLINE BANKING'),
(3, 'PAYPAL');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` varchar(11) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `description` varchar(150) NOT NULL,
  `weight` float(5,2) NOT NULL,
  `price` float(6,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cat_id` varchar(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `tags` varchar(200) NOT NULL,
  PRIMARY KEY (`product_id`) USING BTREE,
  KEY `brand_id` (`brand_id`) USING BTREE,
  KEY `cat_id` (`cat_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='product information';

--
-- Dumping data for table `products`
--

REPLACE INTO `products` (`product_id`, `product_name`, `description`, `weight`, `price`, `status`, `cat_id`, `brand_id`, `tags`) VALUES
('0', 'KOOL SPORT KFB-S088 BEAT-X', 'S M L XL XXL XXXL', 0.20, 20.00, 1, '1002', 1001, 'kool, sports, ,sport, shirt, sport wear, top. beat-x, beat x, round neck short sleeve'),
('1001', 'Nike colourful shoe', 'Nikia', 55.50, 55.50, 0, '1001', 1001, 'Nike, shoes'),
('GM10001', 'Butterfly Addoy 1000, 2000, 3000 Table Tennis', 'The Addoy series from Butterfly is designed for the beginning recreational player. The Addoy rubber produces more speed than spin and is ideal for tho', 0.09, 30.00, 1, '1003', 1001, 'sports equipment, addoy 1000 2000 3000, table tennis bat, butterfly.'),
('TP30001', 'Table Tennis Standing Medal Clear/Gold', 'Table Tennis Plastic Standing Medal Gold clear, Height 108mm, fit 50/40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Table Tennis Plastic Standing Medal Gold clear Height 108mm, fit 50/40/25mm'),
('TP30002', 'Bowling Standing Medal Clear/Gold', 'Table Tennis Plastic Standing Medal Gold clear,sun shape, Height 115mm, fit 40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Table Tennis Plastic Standing Medal Gold clear,sun shape, Height 115mm, fit 40/25mm'),
('TP30003', 'Victory Standing Medal Clear/Gold', 'Victory Plastic Standing Medal Gold clear,sun shape, Height 115mm, fit 40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Victory Plastic Standing Medal Gold Clear, Height 113mm, fit 40/25mm'),
('TP30004', 'Football Standing Medal Blue/Blue-Gold', 'Football Plastic Standing Medal Blue-Gold Blue, Height 126mm, fit 50/40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Football Plastic Standing Medal Blue-Gold Blue, Height 126mm, fit 50/40/25mm'),
('TP30005', 'Badminton Standing Medal Blue/Clear', 'Badminton Plastic Standing Medal Blue/Clear, Height 120mm, fit 50/40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Badminton Plastic Standing Medal Blue/Clear, Height 120mm, fit 50/40/25mm'),
('TP30006', 'Golf Standing Medal Blue/Clear', 'Golf Plastic Standing Medal Blue/Clear, Spiral Shape, Height 133mm, fit 50/40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Golf Plastic Standing Medal Blue/Clear, Spiral Shape, Height 133mm, fit 50/40/25mm'),
('TP30007', 'Three Star Badminton Standing Medal Gold/Silver/Bronze', 'Three Star Badminton Plastic Standing Medal Gold/Silver/Bronze, Star shape, Height 150mm, fit 40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Three Star Badminton Plastic Standing Medal Gold/Silver/Bronze, Star shape, Height 150mm, fit 40/25mm'),
('TP30008', 'Three Star Golf Standing Medal Clear', 'Three Star Golf Plastic Standing Medal Clear, Star shape, Height 150mm, fit 50/40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Three Star Golf Plastic Standing Medal Clear, Star shape, Height 150mm, fit 50/40/25mm'),
('TP30009', 'Futsal Standing Medal Gold/Silver/Bronze', 'Futsal Plastic Standing Medal Gold/Silver/Bronze, Height 143mm', 0.00, 0.00, 1, 'TP003', 1001, 'Futsal Plastic Standing Medal Gold/Silver/Bronze, Height 143mm'),
('TP30010', 'Futsal Standing Medal Clear', 'Futsal Plastic Standing Medal Clear, Height 143mm', 0.00, 0.00, 1, 'TP003', 1001, 'Futsal Plastic Standing Medal Clear, Height 143mm'),
('TP30011', 'Empty Logo Standing Medal Gold/Clear', 'Empty Logo Plastic Standing Medal Gold/Clear, Width 110mm, Height 150mm, fit 42/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Empty Logo Plastic Standing Medal Gold/Clear, Width 110mm, Height 150mm, fit 42/25mm'),
('TP30012', 'Badminton Standing Medal with Cover(2 size)', 'Badminton Standing Medal with Cover, Width 72/82mm, Length 90/117mm, fit 40/25mm', 0.00, 0.00, 1, 'TP003', 1001, 'Badminton Standing Medal with Cover, Width 72/82mm, Length 90/117mm, fit 40/25mm'),
('TP70001', 'Crystal Blue Football Acrylic Trophy  180mm, 160mm, 140mm', 'Designed for football acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP007', 1001, 'CRYSTAL BLUE FOOTBALL ACRYLIC TROPHY, SIZE, 180mm, 160mm, 140mm, SOCCER'),
('TP70002', 'Crystal Green Basketball Acrylic Trophy  180mm, 160mm, 140mm', 'Designed for basketball acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP007', 1001, 'CRYSTAL GREEN BASKETBALL ACRYLIC TROPHY, SIZE, 180mm, 160mm, 140mm'),
('TP70003', 'Crystal Purple Table Tennis Acrylic Trophy 180mm, 160mm, 140mm', 'Designed for table tennis acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP007', 1001, 'CRYSTAL PURPLE TABLE TENNIS ACRYLIC TROPHY, SIZE, 180mm, 160mm, 140mm'),
('TP70004', 'Crystal Blue Bowling Acrylic Trophy  180mm, 160mm, 140mm', 'Designed for bowling acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP006', 1001, 'crystal blue bowling acrylic trophy, size, 180mm, 160mm, 140mm'),
('TP70005', 'Crystal Red Badminton Acrylic Trophy 180mm, 160mm, 140mm', 'Designed for badminton acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP007', 1001, 'crystal red badminton acrylic trophy, size, 180mm, 160mm, 140mm'),
('TP70006', 'Crystal Orange Volley Ball Acrylic Trophy 180mm, 160mm, 140mm', 'Designed for volley ball acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP007', 1001, 'crystal orange volley ball acrylic trophy, size, 180mm, 160mm, 140mm \r\noren'),
('TP70007', 'Crystal Purple Singer Acrylic Trophy 180mm, 160mm, 140mm', 'Designed for singer acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP007', 1001, 'crystal pink singer acrylic trophy, size, 180mm, 160mm, 140mm'),
('TP70008', 'Crystal Rainbow Colorful Flower Acrylic Trophy 180mm, 160mm, 140mm', 'Designed for rainbow colorful flower acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP007', 1001, 'crystal rainbow colorful flower acrylic trophy, size, 180mm, 160mm, 140mm'),
('TP70009', 'Crystal National Hibiscus Flower Acrylic Trophy 180mm, 160mm, 140mm', 'Designed for national hibiscus acrylic trophy. Available in 3 size, 180mm, 160mm, 140mm', 0.00, 0.00, 1, 'TP007', 1001, 'crystal national hibiscus flower acrylic trophy, size, 180mm, 160mm, 140mm');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Courier_rate`
--
ALTER TABLE `Courier_rate`
  ADD CONSTRAINT `Courier_rate_ibfk_1` FOREIGN KEY (`courier_id`) REFERENCES `Courier` (`courier_id`);

--
-- Constraints for table `OrderDetails`
--
ALTER TABLE `OrderDetails`
  ADD CONSTRAINT `OrderDetails_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_2` FOREIGN KEY (`courier_id`) REFERENCES `Courier` (`courier_id`),
  ADD CONSTRAINT `Orders_ibfk_4` FOREIGN KEY (`payment_id`) REFERENCES `Payment` (`payment_id`),
  ADD CONSTRAINT `Orders_ibfk_5` FOREIGN KEY (`ord_d_id`) REFERENCES `OrderDetails` (`ord_d_id`),
  ADD CONSTRAINT `Orders_ibfk_6` FOREIGN KEY (`member_id`) REFERENCES `Member` (`member_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `Brand` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `Category` (`cat_id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
