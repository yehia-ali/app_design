-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 04:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yehia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `message`) VALUES
(1, '', ''),
(2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `mi`, `lastname`, `address`, `zipcode`, `mobile`, `telephone`, `email`, `password`) VALUES
(1, '', '', '', '', '', '', '', '', ''),
(2, 'yehia', 'a', 'yehia', 'cc', '1234', '01111', '001111', 'yehia@hh', '1234'),
(3, 'd', 'd', 'dddddddddddddddddddddd', 'dddddddddddddddddddddd', 'dddddddddddddd', 'dddddddddddddddddddd', 'ssssssdddddddddddddd', 's@ss', 'ss'),
(4, 'ssssss', 's', 'ssssssssssssss', 'ssssssssssssssssss', 'ssssssssssssssssssss', 'ssssssssssssssssss', 'sssssssssssssss', 'as@ss', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offers_id` int(11) NOT NULL,
  `offers_name` varchar(50) NOT NULL,
  `offers_titles` varchar(50) NOT NULL,
  `offers_prsentage` varchar(50) NOT NULL,
  `offers_image` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pharesa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offers_id`, `offers_name`, `offers_titles`, `offers_prsentage`, `offers_image`, `status`, `pharesa`) VALUES
(3, 'Nike Air Max Neon', '12000', '7', '1141103372nike15.jpg', 'Nike', 'basketball');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_image2` varchar(200) NOT NULL,
  `product_image3` varchar(200) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_image2`, `product_image3`, `brand`, `category`, `description`, `color`, `size`) VALUES
(3, 'Nike Air Max Neon', '12000', '1141103372nike15.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Nike', 'sale', '', '', ''),
(4, 'Nike Air Max Green', '12000', '832975975nike5.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Nike', 'sale', '', '', ''),
(6, 'Adidas Gent', '13000', '13634363832010-Adidas-Men-Basketball-Shoes-2.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Adidas', 'sale', '', '', ''),
(7, 'Adidas 599 LRG', '15000', '872686791Adidas Basketball Shoes 599_LRG.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Adidas', 'sale', '', '', ''),
(8, 'Lebron 11 Siver', '18000', '124030907nike13.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Nike', 'sale', '', '', ''),
(9, 'Adidas Adizero Black', '18000', '14237873113-adidas-Rose-Dominate-Adizero-shoes.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Adidas', 'banners', '', '', ''),
(11, 'Lebron 11 Red', '18000', '567507982nike10.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Nike', 'sale', '', '', ''),
(13, 'Nike Hypervenom', '10000', '000.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Nike', 'Girls', 'Girls', '', ''),
(14, 'Nike C Lou Generation', '12000', '533123642013_Discount_Nike_C_Luo_9_Generation_Online_Blue_Green.jpg', '', '', 'Nike', 'sale', '', '', ''),
(15, 'Nike Mercurial Vapor 7 Superfly II FG Lightning', '12000', '1157463277Nike-Mercurial-Vapor-7-Superfly-III-FG-Lightning-Soccer-Shoes-Fluorescent-Yellow-Black.jpg', '', '', 'Nike', 'sale', '', '', ''),
(16, 'Nike Magista Obra', '12000', '335092704Cheap-Nike-Magista-Obra-.jpg', '', '', 'Nike', 'new', '', '', ''),
(17, 'Adidas Chaussures', '12000', '697721412chaussures001.jpg', '', '', 'Adidas', 'football', '', '', ''),
(19, 'Nike Flyknit Lunar Green Blue', '8000', '745184160Nike_Nike_Flyknit_Lunar_2_Mens_Fluorescent_Green_Blue_Running_Shoes_2015_Outlet.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Nike', 'occasion', '', '', ''),
(20, 'Nike Flyknit Lunar Sea Blue', '8000', '1239262802Nike_Nike_Flyknit_Lunar_2_Mens_Sky_Blue_Sea_Blue_Running_Shoes_2015_Cheap.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Nike', 'occasion', '', '', ''),
(21, 'Nike Flyknit Green', '8000', '470680173flyknit.jpg', '', '', 'Nike', 'occasion', '', '', ''),
(26, 'Nike Hypervenom Phantom', '15000', '15416832542014-Nike-Hypervenom-Phantom-FG-Red-Fluorescent-Yellow.jpg', '', '', 'Nike', 'sale', '', '', ''),
(29, 'Adidas Gents', '10000', '00.jpg', '', '', 'Adidas', 'boy', 'DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD', '', ''),
(30, 'Nike Flyknit Gray & Pink', '8000', '948731815nw1.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Nike', 'occasion', '', '', ''),
(31, 'Reebok Zigtech Shake', '10000', '245113227reebok-zigtech-shake-running-shoes-offer-lemonstore-1405-13-lemonstore@1.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'Reebok', 'occasion', '', '', ''),
(99, 'sssssssssssssss', 'ss', '2540283chart (1).png', '', '', 'sss', 'Girls', '', '', ''),
(106, 'ddd', 'dd', '828857422adidas-all-star-basketball-shoes-adizero-shadow.jpg', '', '', 'ddd', 'feature', '', '', ''),
(157, 'Reebok Blast', '10000', '547866585reebok-blast-profile.jpg', '', '', 'Reebok', 'feature', '', '', ''),
(185, 'ssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssss', '9329224Adidas_Rose_Shoes_009.jpg', '', '', 'ss', 'Girls', '', '', ''),
(202, 'sssssssss', 'ssssssssssssssssssssssssssssssssss', '199279Adidas_Rose_Shoes_009.jpg', '', '', 'ssssssssssssssssssssssss', 'new', '', '', ''),
(222, 'Nike Air Max Neon', '12000', '1141103372nike15.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'ss', 'sale', '', '', ''),
(365, 'yyy', 'eee', '357299805Adidas_Rose_Shoes_009.jpg', '357299805Adidas_Rose_Shoes_009.jpg', '357299805Adidas_Rose_Shoes_009.jpg', 'eee', 'feature', '', '', ''),
(538, 'yeha', '2000', 'chart (1).png', '', '', 'zamalek', 'boy', '', '', ''),
(644, 'ss', 'ss', '7906189logo.png', '', '', 'sss', 'Girls', '', '', ''),
(977, 'yehia', '2000', '542053223', '', '', '', 'feature', 'yehia ali yehia', '', ''),
(2681, 'yehia', '8000', '7Adidas_Rose_Shoes_009.jpg', '', '', 'yehiia', 'basketball', '', '', ''),
(4088, 'sssssssssssssss', '333333', '729553223Adidas_Rose_Shoes_009.jpg', '', '', '333333333333333333333333333333', 'feature', '', '', ''),
(4183, 'sssssssss', 'ssssssssssssssssssssssssssssssssss', '7011414Adidas_Rose_Shoes_009.jpg', '', '', 'ssssssssssssssssssssssss', 'new', '', '', ''),
(4676, 'yaya', 'yaya', '10reebok-zigtech-shake-running-shoes-offer-lemonstore-1405-13-lemonstore@1.jpg', '', '', 'yaya', 'sale', '', '', ''),
(8443, 'ddd', 'dd', '1707458chart (1).png', '', '', 'dd', 'Girls', '', '', ''),
(21396, 'sss', '2000', '1900329Adidas_Rose_Shoes_009.jpg', '', '', 'yehiia', 'Girls', '', '', ''),
(21561, 'Lebron 11 ', '15000', '1125171488heat-lebron-11-17.jpg', '', '', 'Nike', 'new', '', '', ''),
(30777, 'oooo', 'ooooooooooooooo', '58023071.jpg', '580230774f22892-753c-48ca-a7be-5037a6ba5712.jpg', '58023073.jpg', 'oooooooooooo', 'Girls', 'ooooooooooo', 'oooooooooooooo', '31018'),
(33333, 'ssssssss', 'sssss', '1141103372nike15.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'sssssssssssss', 'Boys', '', '', ''),
(34746, 'ye', '20000000000000000', '626312374f22892-753c-48ca-a7be-5037a6ba5712.jpg', '626312374f22892-753c-48ca-a7be-5037a6ba5712.jpg', '626312374f22892-753c-48ca-a7be-5037a6ba5712.jpg', 'nika', 'Girls', 'sss', 'white', '87460'),
(41660, 'ssssssssssssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssss', '962066651', '', '', '', 'feature', 'sssssssssssss', '', ''),
(47210, 'dddddd', 'dddddddddddddddddddddddddddddddddddd', '3564148chart (1).png', '', '', 'ddddddddddddddddddddddddddddddddd', 'Boys', '', '', ''),
(51292, 'Adidas Adizero F50', '10000', '1272267959adizero-F50-FG.jpg', '', '', 'Adidas', 'new', '', '', ''),
(51356, 'ww', 'ww', '53402713.jpg', '53402711.jpg', '534027174f22892-753c-48ca-a7be-5037a6ba5712.jpg', 'w', 'Girls', '', '', ''),
(89920, 'sssssssssssssss', 'ssssssssssssssss', '8banner2.jpg', '', '', 'sssssssssssssss', 'basketball', '', '', ''),
(93055, 'hh', '2000', '6bg2.jpg', '', '', 'hh', 'basketball', '', '', ''),
(270253, 'ddddd', 'ddddddddddddddddddd', '7676392Adidas_Rose_Shoes_009.jpg', '', '', 'ddddddddddddddd', 'Girls', '', '', ''),
(358159, 'Flyknit 360', '8000', '40329068flyknit.jpg', '', '', 'Nike', 'feature', '', '', ''),
(431860, 'Nike Hypervenom Neymar Jr.', '12000', '852236910hypervenom.png', '', '', 'Nike', 'feature', '', '', ''),
(492951, 'yehia', 'yehia', '580139logo2.png', '', '', 'yehia', 'Girls', '', '', ''),
(650480, 'yaya', 'ddd', 'bg2.jpg', '', '', 'dd', 'basketball', '', '', ''),
(657831, 'sssssss', 'ssssssssssssssssssss', 'Adidas_Rose_Shoes_009.jpg', '', '', 'ss', 'sale', '', '', ''),
(663379, 'sss', 'yehia', '779541016', '', '', '', 'feature', 'sssssssssssss', '3', '81350'),
(717193, 'yehia', 'sss', '63771-1485198810-ØµØ­ØªÙŠ.png', '', '', 'ss', 'basketball', '', '', ''),
(890439, 'sss', 'ss', '8Adidas_Rose_Shoes_009.jpg', '', '', 'ss', 'sale', '', '', ''),
(930417, 't', 'yaya', '8143616logo1.png', '', '', 'yy', 'Girls', '', '', ''),
(961461, 'Adidas Bounce Titan', '9000', '367527167Rabatt_Prezzo_Ridotto_Adidas_Bounce_Titan_Herren_White_Schwarz_Running_Sho_Online.jpg', '', '', 'Adidas', 'feature', '', '', ''),
(1965636, 'tt', 'tt', '4696350logo.png', '', '', 'tt', 'Girls', '', '', ''),
(2028806, 'gg', 'gg', 'bg2.jpg', '1141103372nike15.jpg', '1141103372nike15.jpg', 'gg', 'basketball', '', '', ''),
(2084032, 'sss', 'ss', 'logo1.png', '', '', 'sss', 'feature', '', '', ''),
(8127740, 'sss', 'sssssssssssssssssssssssssssssssssssssssssss', '933013916Adidas_Rose_Shoes_009.jpg', '', '', 'sssssssssssssssssssssssssssssssssss', 'feature', '', '', ''),
(8576109, 'ssssssssssssssssssssssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssss', '747131348chart.jpeg', '', '', '', 'feature', 'sssssssssssssssssssssssssss', 'd', '57858'),
(9054040, 'xx', 'xx', '3-adidas-Rose-Dominate-Adizero-shoes.jpg', '', '', 'xx', 'banners', '', '', ''),
(23545989, 'j', 'jjjjjjjjjjjjjjjjjj', 'bg3.jpg', '', '', 'jjjjjjjjjjjjj', 'basketball', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(1) NOT NULL,
  `slider_title` varchar(20) DEFAULT NULL,
  `slider_stutas` varchar(50) DEFAULT NULL,
  `slider_image` varchar(500) DEFAULT NULL,
  `slider_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(1, 71339, 20),
(2, 82631, 30),
(3, 3, 20),
(4, 4, 20),
(5, 6, 20),
(6, 7, 20),
(7, 8, 20),
(8, 9, 20),
(9, 10, 19),
(10, 11, 23),
(11, 13, 20),
(12, 14, 20),
(13, 15, 20),
(14, 16, 20),
(15, 17, 20),
(16, 19, 20),
(17, 20, 20),
(18, 21, 20),
(19, 26, 13),
(20, 28, -1),
(21, 29, 18),
(22, 30, 20),
(23, 31, 20),
(26, 431860, 40),
(27, 21561, 30),
(28, 358159, 30),
(29, 157, 25),
(30, 51292, 20),
(31, 961461, 10),
(32, 48250, 55),
(33, 48250, 55),
(34, 48250, 55),
(35, 48250, 55),
(36, 48250, 55),
(37, 48250, 55),
(38, 48250, 55),
(39, 48250, 55),
(40, 48250, 55),
(41, 48250, 55),
(42, 131512, 555),
(43, 9462, 33),
(44, 9462, 33),
(45, 782, 22),
(46, 782, 22),
(47, 782, 22),
(48, 782, 22),
(49, 77, 222),
(50, 55130994, 24455),
(51, 23771, 211),
(52, 215617, 88),
(53, 90121, 44),
(54, 2084032, 555),
(55, 2084032, 555),
(56, 2084032, 555),
(57, 70356, 22),
(58, 97398, 222222),
(59, 97398, 222222),
(60, 97398, 222222),
(61, 650480, 20),
(62, 2028806, 200),
(63, 2028806, 200),
(64, 23545989, 22),
(65, 89920, 2000),
(66, 93055, 200),
(67, 2681, 200),
(68, 657831, 200),
(69, 657831, 200),
(70, 657831, 200),
(71, 890439, 200),
(72, 4676, 2000),
(73, 4183, 5),
(74, 202, 5),
(75, 106, 200),
(76, 9054040, 200),
(77, 953964, 2147483647),
(78, 8127740, 2147483647),
(79, 365, 33),
(80, 4088, 2147483647),
(81, 185, 2147483647),
(82, 270253, 88),
(83, 21396, 2000),
(84, 977, 8),
(85, 41660, 55),
(86, 8576109, 8),
(87, 538, 0),
(88, 47210, 0),
(89, 663379, 3),
(90, 663379, 3),
(91, 99, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `customerid`, `amount`, `order_stat`, `order_date`) VALUES
(1, 1, 19000, 'ON HOLD', 'Apr 18, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transacton_detail_id`, `product_id`, `order_qty`, `transaction_id`) VALUES
(1, 51292, 1, 1),
(2, 961461, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offers_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`),
  ADD UNIQUE KEY `slider_id` (`slider_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
