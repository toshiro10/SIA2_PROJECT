-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2018 at 10:56 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Research`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(50) NOT NULL,
  `id_book` int(50) DEFAULT NULL,
  `id_state` int(50) NOT NULL DEFAULT '1',
  `mdate` date NOT NULL,
  `lkey` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `volume` int(50) DEFAULT NULL,
  `journal` varchar(255) DEFAULT NULL,
  `number` int(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ee` varchar(255) DEFAULT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `id_book`, `id_state`, `mdate`, `lkey`, `title`, `year`, `volume`, `journal`, `number`, `url`, `ee`, `pages`, `photo`, `photo_dir`) VALUES
(1, 100, 1, '2018-06-12', 'kk', 'kk', 'kk', 123, 'kk', 123, 'kk', 'kk', 'kk', NULL, NULL),
(2, 2, 1, '2018-06-12', 'ooo', 'oo', '1928', 1, 'o', 1, 'o', 'o', 'o', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `authorbooks`
--

DROP TABLE IF EXISTS `authorbooks`;
CREATE TABLE `authorbooks` (
  `idAuthors` int(11) NOT NULL,
  `idBooks` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `id_user` int(50) DEFAULT NULL,
  `authorname` varchar(50) DEFAULT NULL,
  `authorfirstname` varchar(50) DEFAULT NULL,
  `authorfullname` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `authors_articles`
--

DROP TABLE IF EXISTS `authors_articles`;
CREATE TABLE `authors_articles` (
  `id_article` int(50) NOT NULL,
  `id_author` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `editor_id` int(11) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `ee` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `modified`, `created`, `year`, `title`, `editor_id`, `isbn`, `ee`, `series`, `url`, `photo`, `photo_dir`) VALUES
(1, '2018-06-12 07:47:21', '2018-06-12 07:47:21', '2000', 'kk', NULL, 'kk', 'kk', 'kk', 'kk', 'Screen Shot 2018-06-12 at 09.26.46.png', '9e35e54f-7f91-41cb-a73f-d9ee83df3ce1'),
(2, '2018-06-12 08:29:48', '2018-06-12 08:29:48', '3000', 'qqq', NULL, 'qqq', 'qqq', 'qqq', 'qqq', 'Screen Shot 2018-06-05 at 13.13.46.png', 'a8dce8b3-51d9-44bd-b689-45b848e77df8');

-- --------------------------------------------------------

--
-- Table structure for table `incollections`
--

DROP TABLE IF EXISTS `incollections`;
CREATE TABLE `incollections` (
  `id` int(11) NOT NULL,
  `mdate` date NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `year` int(11) NOT NULL,
  `publication_key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pages` varchar(50) NOT NULL,
  `crossref` varchar(255) DEFAULT NULL,
  `title_book` varchar(255) DEFAULT NULL,
  `ee` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(1, 'Brouillon'),
(2, 'Publié');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `email`, `firstname`, `lastname`, `picture`) VALUES
(1, 'a', '$2y$10$0TWYE5o1Do9puaJ2IUVBweYrFeLo3GVUvgLawyqTXkdlYTDLQ7lWq', 'admin', '2018-05-09 11:55:32', '2018-05-09 11:55:32', 'a@a', 'a', 'a', NULL),
(2, 'b', '$2y$10$0dU4NfckAI4ynCjzCccSi.GJy1wksY4TQ.fIVv3WCi1BDtPb.cSeu', 'admin', '2018-05-09 12:26:11', '2018-05-09 12:26:11', 'b@b', 'b', 'b', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorbooks`
--
ALTER TABLE `authorbooks`
  ADD PRIMARY KEY (`idAuthors`,`idBooks`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors_articles`
--
ALTER TABLE `authors_articles`
  ADD PRIMARY KEY (`id_article`,`id_author`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incollections`
--
ALTER TABLE `incollections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incollections`
--
ALTER TABLE `incollections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
