-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 05:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aidl`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_client`
--

CREATE TABLE `add_client` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cdesc` varchar(2000) NOT NULL,
  `cimage` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_client`
--

INSERT INTO `add_client` (`cid`, `cname`, `cdesc`, `cimage`) VALUES
(7, 'suzuki', 'this is client ', '1574523704_9501.png'),
(9, 'this is new one', 'hello world', '1574524537_6694.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_url` varchar(255) NOT NULL,
  `cat_1` tinyint(1) NOT NULL,
  `cat_2` tinyint(1) NOT NULL,
  `cat_3` tinyint(1) NOT NULL,
  `cat_4` tinyint(1) NOT NULL,
  `cat_5` tinyint(1) NOT NULL,
  `p_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`p_id`, `p_name`, `p_url`, `cat_1`, `cat_2`, `cat_3`, `cat_4`, `cat_5`, `p_img`) VALUES
(31, 'helloo', 'superadmin@fypms.comm', 0, 1, 1, 1, 1, 'fast_logo_text.png'),
(32, 'as', 'haider@example.com', 1, 0, 0, 0, 0, '250px-National_University_of_Computer_and_Emerging_Sciences_logo.png'),
(33, 'habibi', 'haider@example.com', 0, 1, 0, 0, 0, 'friendship love.png'),
(34, 'sdfsdfsss', 'haider@example.com', 1, 1, 1, 1, 1, 'fast_logo_text.png'),
(35, 'check123', 'aaaa@a.com', 1, 0, 0, 1, 0, '250px-National_University_of_Computer_and_Emerging_Sciences_logo.png'),
(36, 'testt', 'saudkhan@riu.edu.pk', 1, 0, 1, 1, 1, 'friendship love.png'),
(37, 'habibi', 'superadmin@fypms.com', 1, 0, 0, 1, 1, '250px-National_University_of_Computer_and_Emerging_Sciences_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `add_service`
--

CREATE TABLE `add_service` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sdescription` varchar(2000) NOT NULL,
  `dateposted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_service`
--

INSERT INTO `add_service` (`sid`, `sname`, `sdescription`, `dateposted`) VALUES
(16, 'new service', 'hello world', '23-11-2019'),
(17, 'sadf', 'sfsaf', '04-12-2019');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `tittle`, `images`) VALUES
(55, 'metkon', 'about us.jpg'),
(56, 'metkon', 'Fast.jpg'),
(57, 'metkon', 'fyp page 2.jpg'),
(58, 'metkon', 'fyp page.jpg'),
(59, 'metkon', 'fyp portal home.jpg'),
(60, 'pasco', '485a7eb55f98667ba8f9d66c2f8bb096.jpg'),
(61, 'pasco', '575ed69fe8ddb4991c12b3d4ee01d9f7.jpg'),
(62, 'pasco', '7815cf0be771ed94034885f44e935225.jpg'),
(63, 'pasco', 'af86ecf734db6bda94836da813d2b2fa.jpg'),
(64, 'pasco', 'IMG-20180413-WA0002.jpg'),
(65, 'pasco', 'IMG-20180413-WA0003.jpg'),
(66, 'alser', '2f2c7e34e43d3b480bdb65498870f943.jpg'),
(67, 'alser', '3b2e5b9c85f39e0ea530f8a399c279ef.jpg'),
(68, 'edwards', '1ddec5d80e00d005809a4146b16830cd.jpg'),
(69, 'edwards', '2bfc9e293a7802d28bcc03a16e7379fe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_post` varchar(255) NOT NULL,
  `team_email` varchar(255) NOT NULL,
  `team_num` varchar(255) NOT NULL,
  `team_image` varchar(255) NOT NULL,
  `create_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`team_id`, `team_name`, `team_post`, `team_email`, `team_num`, `team_image`, `create_on`) VALUES
(1, 'mahad', 'CEO', 'mahad@gamil.com', '0336', '72045293_2405902189548979_3466253820093267968_n.jpg', '2019-12-06 00:18:44'),
(2, 'haq', 'CEO', 'haq@gmail.com', '0314', 'IMG-20191109-WA0004.jpg', '2019-12-06 00:45:39'),
(3, '', '', '', '0307-2010420', '', '2019-12-07 21:14:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_client`
--
ALTER TABLE `add_client`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `add_service`
--
ALTER TABLE `add_service`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_client`
--
ALTER TABLE `add_client`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `add_service`
--
ALTER TABLE `add_service`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
