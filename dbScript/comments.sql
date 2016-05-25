-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 10:40 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentnewspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(6) UNSIGNED NOT NULL,
  `authorId` int(6) NOT NULL,
  `articleId` int(6) NOT NULL,
  `text` varchar(500) DEFAULT NULL,
  `publishDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `authorId`, `articleId`, `text`, `publishDate`) VALUES
(1, 1, 5, 'alabala', '0000-00-00 00:00:00'),
(2, 1, 5, 'ÐºÐ¾Ð¼ÐµÐ½Ñ‚Ð°Ñ€ 2', '0000-00-00 00:00:00'),
(3, 1, 5, 'ÐšÐ¾Ð¼ÐµÐ½Ñ‚Ð°Ñ€ 3', '0000-00-00 00:00:00'),
(4, 1, 5, 'ÐºÐ¾Ð¼ÐµÐ½', '0000-00-00 00:00:00'),
(5, 1, 5, 'asdasdasd', '0000-00-00 00:00:00'),
(6, 1, 5, 'asdasd', '0000-00-00 00:00:00'),
(7, 1, 5, 'as', '0000-00-00 00:00:00'),
(8, 1, 5, 'assad', '0000-00-00 00:00:00'),
(9, 1, 5, 'as', '0000-00-00 00:00:00'),
(10, 1, 5, 'asasd', '0000-00-00 00:00:00'),
(11, 1, 5, 'awacacs', '0000-00-00 00:00:00'),
(12, 1, 5, 'asda', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
