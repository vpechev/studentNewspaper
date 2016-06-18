-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2016 at 11:10 PM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(300) NOT NULL,
  `userId` int(6) NOT NULL,
  `publishDate` datetime DEFAULT NULL,
  `category` int(6) DEFAULT NULL,
  `likesCount` int(6) DEFAULT NULL,
  `dislikesCount` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `userId`, `publishDate`, `category`, `likesCount`, `dislikesCount`) VALUES
(5, 'asdasd', ' asdasdasd', 1, '0000-00-00 00:00:00', 2, 0, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(6) UNSIGNED NOT NULL,
  `text` varchar(300) NOT NULL,
  `publishDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `text`, `publishDate`) VALUES
(18, ' asddasd', '0000-00-00 00:00:00'),
(19, ' asda', '0000-00-00 00:00:00'),
(20, ' asdasdasd', '0000-00-00 00:00:00'),
(21, ' vladko', NULL),
(22, ' NEW', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--


CREATE TABLE `videos` (
  `id` int(6) UNSIGNED NOT NULL,
  `url` varchar(50) NOT NULL,
  `label` varchar(1000) NOT NULL
) 

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
