-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 07:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

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
(1, 'pasco', 'https://www.pasco.com/index.cfm', 1, 0, 1, 1, 0, 'logo-9.png'),
(2, 'impedans', 'https://impedans.com/', 0, 0, 0, 0, 1, 'logo-6.png'),
(3, 'edwards', 'https://www.edwards.com/gb', 1, 1, 0, 0, 1, 'logo-4.png'),
(4, 'nano magnetics', 'http://nanomagnetics.com/', 1, 1, 0, 1, 1, 'logo-8.png'),
(5, 'neocera', 'http://neocera.com/', 1, 0, 0, 0, 1, 'neocera.png'),
(6, 'sentech', 'https://www.sentech.co.za/', 0, 0, 0, 0, 1, 'sentech.png');

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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news` varchar(2000) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news`, `flag`, `created_on`) VALUES
(8, 'WELCOME TO ASSOCIATED INSTRUMENT DISTRIBUTORS (PVT) LIMITED\r\n\r\n', 'stop', '2019-12-07 16:47:19'),
(11, 'hello from softwarechimps.com\r\n', 'stop', '2019-12-07 17:38:39'),
(12, 'WELCOME TO ASSOCIATED INSTRUMENT DISTRIBUTORS (PVT) LIMITED', 'stop', '2019-12-07 17:38:52'),
(13, 'WELCOME TO ASSOCIATED INSTRUMENT DISTRIBUTORS (PVT) LIMITED', 'start', '2019-12-07 17:39:00');

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
(1, 'pasco', 'p-01.jpg'),
(2, 'pasco', 'p-02.jpg'),
(3, 'pasco', 'p-03.jpg'),
(4, 'pasco', 'p-04.jpg'),
(5, 'pasco', 'p-05.jpg'),
(6, 'pasco', 'p-06.jpg'),
(7, 'pasco', 'p-07.jpg'),
(8, 'pasco', 'p-08.jpg'),
(9, 'edwards', 'e-01.jpg'),
(10, 'edwards', 'e-02.jpg'),
(11, 'edwards', 'e-03.jpg'),
(12, 'edwards', 'e-04.jpg'),
(13, 'edwards', 'e-05.jpg'),
(14, 'edwards', 'e-06.jpg'),
(15, 'edwards', 'e-07.jpg'),
(16, 'edwards', 'e-08.jpg'),
(17, 'edmond_buhler', 'eb-01.jpg'),
(18, 'edmond_buhler', 'eb-02.jpg'),
(19, 'edmond_buhler', 'eb-03.jpg'),
(20, 'metkon', 'm-01.jpg'),
(21, 'metkon', 'm-02.jpg'),
(22, 'metkon', 'm-03.jpg'),
(23, 'metkon', 'm-04.jpg'),
(24, 'metkon', 'm-05.jpg'),
(25, 'metkon', 'm-06.jpg'),
(26, 'metkon', 'm-07.jpg'),
(27, 'suss', 'ks-01.jpg'),
(28, 'suss', 'ks-02.jpg'),
(29, 'alser', 'alser-01.jpg'),
(30, 'alser', 'alser-02.jpg'),
(31, 'alser', 'alser-03.jpg'),
(32, 'alser', 'alser-04.jpg'),
(33, 'alser', 'alser-05.jpg'),
(34, 'alser', 'alser-06.jpg'),
(35, 'alser', 'alser-07.jpg'),
(36, 'alser', 'alser-08.jpg'),
(37, 'micso_laser', 'ml-01.jpg'),
(38, 'micso_laser', 'ml-02.jpg'),
(39, 'micso_laser', 'ml-03.jpg'),
(40, 'neocera', 'n-01.jpg'),
(41, 'neocera', 'n-02.jpg'),
(42, 'neocera', 'n-03.jpg'),
(43, 'neocera', 'n-04.jpg'),
(44, 'neocera', 'n-05.jpg'),
(45, 'sentech', 'se-01.jpg'),
(46, 'sentech', 'se-02.jpg'),
(47, 'sentech', 'se-03.jpg'),
(48, 'rbrl', 'rbrl-01.jpg'),
(49, 'rbrl', 'rbrl-02.jpg'),
(50, 'rbrl', 'rbrl-03.jpg'),
(51, 'shore_western', 'sw-01.jpg'),
(52, 'shore_western', 'sw-02.jpg'),
(53, 'shore_western', 'sw-03.jpg'),
(54, 'shore_western', 'sw-04.jpg'),
(55, 'shore_western', 'sw-05.jpg'),
(56, 'shore_western', 'sw-06.jpg'),
(57, 'shore_western', 'sw-07.jpg'),
(58, 'shore_western', 'sw-08.jpg'),
(59, 'shore_western', 'sw-09.jpg'),
(60, 'shore_western', 'sw-10.jpg'),
(61, 'shore_western', 'sw-11.jpg'),
(62, 'shore_western', 'sw-12.jpg'),
(63, 'shore_western', 'sw-13.jpg'),
(64, 'shore_western', 'sw-14.jpg'),
(65, 'shore_western', 'sw-15.jpg'),
(66, 'shore_western', 'sw-16.jpg'),
(67, 'shore_western', 'sw-17.jpg'),
(68, 'shore_western', 'sw-18.jpg'),
(69, 'shore_western', 'sw-19.jpg'),
(70, 'shore_western', 'sw-20.jpg'),
(71, 'shore_western', 'sw-21.jpg'),
(72, 'shore_western', 'sw-22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `pro_id` int(11) NOT NULL,
  `pro_type` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`pro_id`, `pro_type`, `video_url`, `tittle`, `images`, `created_on`) VALUES
(1, 'image', NULL, 'aidl pakistan', 'pro-16.jpg', '2019-12-08 15:46:42'),
(2, 'image', NULL, 'aidl pakistan', 'pro-17.jpg', '2019-12-08 15:46:55'),
(3, 'image', NULL, 'aidl pakistan', 'pro-18.jpg', '2019-12-08 15:47:19'),
(4, 'image', NULL, 'aidl pakistan', 'pro-19.jpg', '2019-12-08 15:47:30'),
(5, 'image', NULL, 'aidl pakistan', 'pro-20.jpg', '2019-12-08 15:47:41'),
(6, 'image', NULL, 'aidl pakistan', 'pro-21.jpg', '2019-12-08 15:47:52'),
(7, 'image', NULL, 'aidl pakistan', 'pro-22.jpg', '2019-12-08 15:48:02'),
(8, 'image', NULL, 'aidl pakistan', 'pro-23.jpg', '2019-12-08 15:48:13'),
(9, 'image', NULL, 'aidl pakistan', 'pro-24.jpg', '2019-12-08 15:48:31'),
(10, 'image', NULL, 'aidl pakistan', 'pro-25.jpg', '2019-12-08 16:11:50'),
(11, 'image', NULL, 'aidl pakistan', 'pro-26.jpg', '2019-12-08 16:12:00'),
(12, 'image', NULL, 'aidl pakistan', 'pro-27.jpg', '2019-12-08 16:12:11'),
(13, 'image', NULL, 'aidl pakistan', 'pro-28.jpg', '2019-12-08 16:13:03'),
(14, 'image', NULL, 'aidl pakistan', 'pro-29.jpg', '2019-12-08 16:13:19'),
(15, 'image', NULL, 'aidl pakistan', 'pro-30.jpg', '2019-12-08 16:13:29'),
(16, 'image', NULL, 'aidl pakistan', 'pro-31.jpg', '2019-12-08 16:13:39'),
(17, 'image', NULL, 'aidl pakistan', 'pro-32.jpg', '2019-12-08 16:13:59'),
(18, 'image', NULL, 'aidl pakistan', 'pro-33.jpg', '2019-12-08 16:14:13'),
(19, 'image', NULL, 'aidl pakistan', 'pro-34.jpg', '2019-12-08 16:14:33'),
(20, 'image', NULL, 'aidl pakistan', 'pro-35.jpg', '2019-12-08 16:14:52'),
(21, 'image', NULL, 'aidl pakistan', 'pro-36.jpg', '2019-12-08 16:15:16'),
(22, 'image', NULL, 'aidl pakistan', 'pro-37.jpg', '2019-12-08 16:15:28'),
(23, 'image', NULL, 'aidl pakistan', 'pro-38.jpg', '2019-12-08 16:15:38'),
(24, 'image', NULL, 'aidl pakistan', 'pro-39.jpg', '2019-12-08 16:15:49'),
(25, 'image', NULL, 'aidl pakistan', 'pro-40.jpg', '2019-12-08 16:16:01'),
(26, 'image', NULL, 'aidl pakistan', 'pro-41.jpg', '2019-12-08 16:16:26'),
(27, 'image', NULL, 'aidl pakistan', 'pro-42.jpg', '2019-12-08 17:11:18'),
(28, 'image', NULL, 'aidl pakistan', 'pro-43.jpg', '2019-12-08 17:11:51'),
(29, 'image', NULL, 'aidl pakistan', 'pro-44.jpg', '2019-12-08 17:12:07'),
(30, 'image', NULL, 'aidl pakistan', 'pro-45.jpg', '2019-12-08 17:12:18'),
(31, 'image', NULL, 'aidl pakistan', 'pro-46.jpg', '2019-12-08 17:12:45');

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
  `create_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`pro_id`);

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
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_service`
--
ALTER TABLE `add_service`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
