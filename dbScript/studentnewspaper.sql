-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2016 at 10:11 PM
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
  `text` mediumtext NOT NULL,
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
(16, 'ÑÑ‚Ð°Ñ‚Ð¸Ñ 212', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec hendrerit nisl, in accumsan nisl. Suspendisse odio risus, fermentum fringilla nisl pharetra, suscipit malesuada eros. Quisque a porttitor sapien, nec elementum dui. Donec odio lacus, pulvinar quis dui vitae, pulvinar lobortis est. Suspendisse lobortis dolor et rhoncus venenatis. Suspendisse urna leo, commodo quis massa sed, efficitur facilisis dolor. In at volutpat mi.\n\nNunc iaculis fringilla ante, ut elementum eros scelerisque nec. Vivamus interdum nisl a lacus vehicula suscipit congue et orci. Pellentesque vulputate semper nisl at eleifend. Phasellus at nisi at quam egestas interdum sit amet nec risus. Praesent volutpat nisi odio, at rutrum eros dictum vel. Nunc ullamcorper lorem sed orci rutrum sodales. Praesent aliquet orci ac semper fringilla. Nullam faucibus nisi sit amet ultrices tristique. Cras tempor lorem ac finibus dapibus. Proin non neque nec risus pulvinar convallis dignissim vel ex. Nullam eros justo, interdum a lorem et, maximus ultricies lectus.\n\nMaecenas nisi eros, egestas eu dui vel, semper tempor sapien. Morbi vitae laoreet urna, sed fringilla lectus. Fusce odio ipsum, molestie ut pharetra eget, feugiat quis erat. Curabitur rutrum nibh non blandit facilisis. In eget efficitur est. Ut ultrices convallis nulla, in semper sem. In hac habitasse platea dictumst. Aenean dolor nulla, fermentum ac urna eget, iaculis feugiat mi. Ut sed congue odio. Phasellus at ipsum id nisl condimentum bibendum. Sed turpis nisi, facilisis ac hendrerit eu, scelerisque quis massa.\n\nMorbi rhoncus laoreet elit non scelerisque. In ligula purus, facilisis sed lacus et, tempus ornare quam. Curabitur mollis suscipit felis nec mattis. Donec augue lorem, dignissim vitae nisi vel, porta fermentum nibh. Morbi a porta lacus. Etiam placerat faucibus hendrerit. Maecenas nec enim ut tellus vulputate mattis. Donec sodales urna eros, quis porttitor nisl porta non. Duis fermentum, massa eu sagittis ultricies, ipsum justo venenatis justo, a egestas eros purus ac nunc. Nulla facilisi. Pellentesque rutrum dictum rutrum. Maecenas commodo pulvinar nisi, id tincidunt justo imperdiet fringilla. Cras non accumsan diam. Suspendisse viverra rhoncus tortor vel aliquet.\n\nMauris vestibulum, erat vitae maximus ultrices, urna enim feugiat tellus, a varius est nibh nec justo. Nunc ut purus eu ante pellentesque rhoncus. Proin aliquam pellentesque orci, vitae malesuada sem sagittis ut. Donec auctor est vitae luctus eleifend. Duis facilisis leo nunc, sed maximus elit vulputate a. Quisque tellus leo, interdum vel hendrerit vitae, rhoncus sed nulla. Sed volutpat nibh sed pharetra eleifend. Aliquam laoreet turpis a lectus semper consectetur.\n\nCras vel sapien ac eros imperdiet venenatis in sed lacus. Vivamus eget diam leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed facilisis in orci ac euismod. Phasellus eleifend efficitur molestie. Maecenas pharetra tellus sed magna suscipit tristique. Suspendisse hendrerit arcu a lacus aliquet pellentesque. Duis porta luctus erat, in efficitur mi scelerisque sed. Aliquam ultrices justo vel odio eleifend faucibus.\n\nNunc accumsan mauris feugiat gravida elementum. Nunc a justo ut arcu dignissim congue. Nullam aliquam a urna id rhoncus. Pellentesque sit amet ligula vel nisi pretium pellentesque. Nunc eget ultricies turpis. Integer vulputate dolor ex, nec facilisis ante iaculis interdum. Nam sollicitudin odio a tortor rutrum, eget vehicula ligula posuere. Donec magna leo, consequat id hendrerit nec, eleifend id erat. Suspendisse dignissim lacinia volutpat. Curabitur ut lacus in nulla hendrerit dignissim in ac sapien. Duis auctor justo a nibh eleifend rhoncus.\n\nEtiam varius leo sed molestie egestas. Suspendisse urna felis, blandit at felis at, tincidunt egestas ipsum. Pellentesque aliquet urna nec maximus sollicitudin. Nullam vel enim tempus ex aliquet posuere. Pellentesque porttitor egestas urna vitae vestibulum. Nullam id enim velit. Sed venenatis dui urna. Aenean ut quam mollis, maximus ex maximus, gravida enim. Quisque congue molestie quam et rutrum. Donec ac dictum sem. Proin viverra feugiat interdum. Suspendisse egestas nunc tempus pharetra tempor. Quisque suscipit porta massa at vehicula. Mauris metus quam, imperdiet et dolor nec, convallis varius risus. Nulla et finibus arcu. Phasellus ac diam id odio auctor lobortis.\n\nSed et aliquam elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras auctor ac velit faucibus pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quis imperdiet odio. Aliquam viverra molestie consequat. In consequat ligula vitae dolor consequat bibendum. Curabitur gravida fermentum lectus ac placerat. Praesent accumsan, justo at accumsan suscipit, neque tortor pellentesque lorem, id ullamcorper leo quam eu mauris. Fusce euismod, nisl quis elementum ornare, purus risus feugiat felis, sit amet egestas felis dui at dui. Nulla facilisi. Integer interdum tortor nunc, vitae bibendum tellus euismod eu. Aenean vestibulum eu tellus quis scelerisque.\n\nFusce dictum felis magna, vel pellentesque risus pulvinar vel. Fusce convallis laoreet justo, et iaculis augue commodo ac. Nunc nisl arcu, cursus vel turpis sed, dapibus egestas purus. Maecenas in tortor eget ligula interdum gravida. Pellentesque congue eros urna, non ornare neque elementum vitae. Donec consequat volutpat massa, ac aliquet sem porttitor ut. Donec sit amet sem rhoncus, semper ex ac, mollis elit. Curabitur fringilla nisl quis metus malesuada, viverra laoreet lacus vehicula. In sit amet arcu a lorem convallis finibus id vel mi. Vestibulum nunc turpis, tincidunt sed erat vel, euismod pharetra nulla. Sed convallis arcu neque, eu consequat augue hendrerit in. Aenean sollicitudin volutpat lobortis.', 12, '2016-05-30 00:00:00', 3, 4, 0),
(17, 'Ð¡Ñ‚Ð°Ñ‚Ð¸Ñ 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id lacus malesuada, viverra mauris at, ornare nibh. In hac habitasse platea dictumst. Quisque scelerisque ornare nulla, at gravida arcu auctor non. Sed gravida sapien magna, a pulvinar tortor eleifend ut. In maximus, magna sit amet molestie pellentesque, nisi lacus vulputate nibh, cursus consequat lectus ipsum imperdiet enim. Nam eros libero, vulputate eget iaculis sed, condimentum ut dolor. Nullam congue nisl tincidunt lacinia malesuada. Sed id rutrum risus. Sed nulla nunc, eleifend non laoreet in, malesuada sed elit. Suspendisse elit augue, lobortis et leo nec, blandit varius felis. Vestibulum mattis maximus tortor, id gravida eros faucibus at. Maecenas iaculis leo justo. Morbi id dapibus justo, aliquam suscipit risus.\n\nSuspendisse potenti. Suspendisse maximus dapibus porttitor. Integer accumsan facilisis aliquet. Maecenas lacinia, nisi sed ultrices placerat, dui nunc euismod erat, sit amet efficitur mauris nisi vitae elit. Vivamus non scelerisque diam, consectetur posuere tellus. Nunc tincidunt nec ligula id rutrum. Cras velit erat, volutpat ut metus et, dictum commodo libero. Mauris egestas ex non eleifend sodales. In placerat tempor enim vel fermentum.\n\nVestibulum luctus pulvinar dictum. Nunc fermentum justo eu tempus hendrerit. Praesent condimentum eleifend justo, ac volutpat lectus fermentum sit amet. Nullam venenatis est ac volutpat fermentum. Proin eleifend auctor sapien sed congue. Nullam et elit at dui posuere semper. Vivamus semper turpis ante, sit amet iaculis tellus pharetra in. Maecenas ullamcorper elit sit amet arcu luctus, bibendum bibendum tortor porta. Duis vitae aliquam lectus. Ut lobortis purus justo, nec condimentum erat suscipit ut. Curabitur posuere pulvinar mauris vitae volutpat. Vivamus sagittis tortor et velit porttitor, at tincidunt ligula ullamcorper. Aliquam ornare cursus tortor vitae pharetra. Nulla sed tincidunt ipsum.\n\nPraesent facilisis elementum nibh sit amet finibus. Maecenas in dictum augue. Aenean lectus lorem, tincidunt id luctus in, molestie ac metus. Nulla a egestas dolor. Aliquam congue euismod dui sit amet elementum. Integer a velit euismod, commodo justo at, volutpat erat. In eros nunc, aliquam a velit imperdiet, suscipit blandit neque. Aliquam dolor metus, vestibulum at sagittis a, vehicula id tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor sapien a elit mollis, et pretium libero finibus. Nunc dignissim tellus cursus ultricies luctus. Nunc vestibulum nisl risus, quis fermentum lacus aliquet eu.\n\nCurabitur lacinia tortor vitae mollis sollicitudin. Duis imperdiet suscipit turpis, eu rutrum orci fringilla a. Aliquam odio turpis, lobortis id pellentesque quis, posuere at tellus. Quisque in velit a mi maximus eleifend condimentum eget ligula. Proin vitae ligula a massa sagittis commodo egestas sit amet ante. Curabitur et sem a arcu pulvinar blandit ornare nec est. Maecenas tristique erat ut odio tristique, vel scelerisque mi tempus. Mauris non tellus posuere, pretium lectus sit amet, tempor nulla. Sed sagittis est id congue condimentum. Sed a accumsan lacus. Mauris pharetra velit ut mattis dignissim. Mauris condimentum nibh ac quam mollis, quis maximus nunc pulvinar.', 13, '2016-06-04 00:00:00', 0, 1, 0),
(18, 'as', 'asdasd', 12, '2016-06-05 00:00:00', 1, 0, 0);

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
(20, 12, 16, 'ÐºÐ¾Ð¼ÐµÐ½Ñ‚Ð°Ñ€ 1', '2016-06-04 00:00:00'),
(21, 12, 16, 'ÐºÐ¾Ð¼ÐµÐ½Ñ‚Ð°Ñ€ 2', '2016-06-04 00:00:00'),
(22, 12, 16, 'asdasd', '2016-06-04 00:00:00'),
(23, 12, 16, 'asdasdasd', '2016-06-04 00:00:00'),
(24, 12, 16, 'asdasd', '2016-06-04 00:00:00'),
(25, 12, 16, 'alabala', '2016-06-04 00:00:00'),
(26, 12, 16, 'fsdfs', '2016-06-04 00:00:00'),
(27, 12, 16, 'asda', '2016-06-04 00:00:00'),
(28, 12, 16, 'asdasdasdasdasdasdasdasdasd', '2016-06-04 00:00:00'),
(29, 12, 16, 'as', '2016-06-04 00:00:00'),
(30, 12, 16, 'az', '2016-06-04 00:00:00'),
(31, 12, 16, 'az', '2016-06-04 00:00:00'),
(32, 12, 16, 'az', '2016-06-04 00:00:00'),
(33, 12, 16, 'zzzz', '2016-06-04 00:00:00'),
(34, 12, 16, 'zzzz', '2016-06-04 00:00:00'),
(35, 12, 16, 'zzzz', '2016-06-04 00:00:00'),
(36, 12, 16, 'zz', '2016-06-04 00:00:00'),
(37, 13, 16, 'asdasdasdasd', '2016-06-04 00:00:00'),
(38, 13, 17, 'Ð¿Ñ€ÑŠÐ² ÐºÐ¾Ð¼ÐµÐ½Ñ‚Ð°Ñ€', '2016-06-04 00:00:00'),
(39, 13, 17, 'Ð°ÑÐ´Ð°ÑÐ´Ð°ÑÐ´', '2016-06-04 00:00:00'),
(40, 13, 17, 'Ð°ÑÐ´', '2016-06-04 00:00:00'),
(41, 12, 16, 'as', '2016-06-05 00:00:00'),
(42, 12, 16, 'comment 1', '2016-06-05 00:00:00'),
(43, 12, 16, 'commen 2', '2016-06-05 00:00:00'),
(44, 12, 16, 'fsdf', '2016-06-05 00:00:00'),
(45, 12, 18, 'asasdasdasd', '2016-06-05 00:00:00'),
(46, 12, 18, 'asdasd', '2016-06-05 00:00:00'),
(47, 12, 18, 'asd', '2016-06-05 00:00:00'),
(48, -1, 0, '', '2016-06-18 00:00:00'),
(49, -1, 0, '', '2016-06-18 00:00:00'),
(50, -1, 0, '', '2016-06-18 00:00:00'),
(51, -1, 0, '', '2016-06-18 00:00:00'),
(52, -1, 0, '', '2016-06-18 00:00:00'),
(53, -1, 0, '', '2016-06-18 00:00:00'),
(54, -1, 0, '', '2016-06-18 00:00:00');

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
(2, 'Ð¼Ð½Ð¾Ð³Ð¾ Ð¸Ð½Ñ‚ÐµÑ€ÐµÑÐ½Ð° Ð½Ð¾Ð²Ð¸Ð½Ð°', '2016-06-04 00:00:00'),
(3, 'Ð”Ð¶Ð¾ÐºÐ¾Ð²Ð¸Ñ‡ Ð² Ð¸ÑÑ‚Ð¾Ñ€Ð¸ÑÑ‚Ð°, Ñ‚Ñ€Ð¸ÑƒÐ¼Ñ„Ð¸Ñ€Ð° Ð½Ð° â€žÐ Ð¾Ð»Ð°Ð½ Ð“Ð°Ñ€Ð¾Ñâ€œ', '2016-06-05 00:00:00'),
(4, 'Ð¡ÐµÐ¼Ð¸Ð½Ð°Ñ€ â€žÐ”Ð¸Ð½Ð°Ð¼Ð¸Ñ‡Ð½Ð¸ ÑÐ¸ÑÑ‚ÐµÐ¼Ð¸ Ð¸ Ñ‚ÐµÐ¾Ñ€Ð¸Ñ Ð½Ð° Ñ‡Ð¸ÑÐ»Ð°Ñ‚Ð°â€™â€™, 7 ÑŽÐ½Ð¸', '2016-06-05 00:00:00');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, 'a', 'd7afde3e7059cd0a0fe09eec4b0008cd'),
(8, 'b', 'dc0ae7e1387be9b795f5d6299e383759'),
(9, 'c', 'ed108f6919ebadc8e809f8b86ef40b05'),
(10, 'd', '39abe4bca904bca5a11121955a2996bf'),
(11, 'Ð°', '0e3c38c9b533e1bed22675205d7921c3'),
(12, 'deni', '7bb7c90cc7a4f4b1869cd0f39522a864'),
(13, 'vladko', '3f6529150a508eb709fab6608cb53bcc');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(6) UNSIGNED NOT NULL,
  `url` varchar(10000) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `url`, `label`) VALUES
(1, 'https://www.youtube.com/embed/HFG6q5-McFk', 'HTML'),
(3, 'https%3A%2F%2Fwww.youtube.com%2Fembed%2FozW7b3yHiaw', 'css'),
(4, 'https%3A%2F%2Fwww.youtube.com%2Fembed%2Feyvr78c7O0I', 'Javascript'),
(5, 'https%3A%2F%2Fwww.youtube.com%2Fembed%2F4IC900dix-o', 'MySQL'),
(6, 'https%3A%2F%2Fwww.youtube.com%2Fembed%2FE9-l6Mbx-Vs%3Flist%3DPLF4lVL1sPDSlQkQOz4FYO7kCSJACl5CbA', 'PHP'),
(7, 'https%3A%2F%2Fwww.youtube.com%2Fembed%2FpFH-6b0dNGQ%3Flist%3DPLF4lVL1sPDSnvKV5AedV0W47R6GCSfy0Y', 'Angular'),
(8, 'https%3A%2F%2Fwww.youtube.com%2Fembed%2FkqhTrYr0lOw', 'Nodejs');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
