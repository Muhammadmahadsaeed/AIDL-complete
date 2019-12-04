-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 04:28 PM
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
  `p_description` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`p_id`, `p_name`, `p_description`, `p_img`) VALUES
(14, 'as', 'fdhhdfhdfhdfhfdhddfhh', '250px-National_University_of_Computer_and_Emerging_Sciences_logo.png'),
(15, 'new product', 'aaaaaa', '68710457_223450105240650_244696394365927424_n.jpg'),
(16, 'new', 'product', 'punisher-1920x1080-logo-skull-dark-background-minimal-4k-17130.png'),
(17, 'fdh', 'fdsg', 'backblue.gif');

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
  `images` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `tittle`, `images`) VALUES
(1, 'metkon', ''),
(2, 'metkon', ''),
(3, 'metkon', 0x666164652e676966);

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
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `add_service`
--
ALTER TABLE `add_service`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
