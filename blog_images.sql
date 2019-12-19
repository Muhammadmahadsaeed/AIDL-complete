-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 05:21 PM
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
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `blog_image_id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`blog_image_id`, `blog_name`, `blog_image`, `created_on`) VALUES
(7, 'asdfsadfasdfasdf', 'about us.jpg', '2019-12-19 19:48:14'),
(8, 'asdfsadfasdfasdf', 'Fast.jpg', '2019-12-19 19:48:14'),
(9, 'asdfsadfasdfasdf', 'fyp page 2.jpg', '2019-12-19 19:48:14'),
(10, 'may blog', 'fyp page.jpg', '2019-12-19 19:52:24'),
(11, 'may blog', 'fyp portal home.jpg', '2019-12-19 19:52:24'),
(12, 'may blog', 'fyp portal home2.jpg', '2019-12-19 19:52:24'),
(13, 'may blog', 'fyp page.jpg', '2019-12-19 20:10:37'),
(14, 'may blog', 'fyp portal home.jpg', '2019-12-19 20:10:37'),
(15, 'may blog', 'fyp portal home2.jpg', '2019-12-19 20:10:37'),
(16, 'asdfsadfasdfasdf', 'about us.jpg', '2019-12-19 20:30:42'),
(17, 'asdfsadfasdfasdf', 'Fast.jpg', '2019-12-19 20:30:42'),
(18, 'asdfsadfasdfasdf', 'fyp page 2.jpg', '2019-12-19 20:30:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`blog_image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `blog_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
