-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 mai 2018 à 07:42
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sia_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `authors_books`
--

DROP TABLE IF EXISTS `authors_books`;
CREATE TABLE IF NOT EXISTS `authors_books` (
  `id_author` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  PRIMARY KEY (`id_author`,`id_book`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(50) DEFAULT NULL,
  `authorname` varchar(50) DEFAULT NULL,
  `authorfirstname` varchar(50) DEFAULT NULL,
  `authorfullname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modified` datetime NOT NULL,
  `created` datetime,
  `year` varchar(255),
  `title` varchar(255),
  `editor_id` int(11),
  `isbn` varchar(255),
  `ee` varchar(255),
  `series` varchar(255),
  `url` varchar(255),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `incollections`
--

DROP TABLE IF EXISTS `incollections`;
CREATE TABLE IF NOT EXISTS `incollections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mdate` date DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `year` int(11) DEFAULT NULL,
  `publication_key` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `pages` varchar(50) DEFAULT NULL,
  `crossref` varchar(255) DEFAULT NULL,
  `title_book` varchar(255) DEFAULT NULL,
  `ee` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `email`, `firstname`, `lastname`, `picture`) VALUES
(1, 'a', '$2y$10$0TWYE5o1Do9puaJ2IUVBweYrFeLo3GVUvgLawyqTXkdlYTDLQ7lWq', 'admin', '2018-05-09 11:55:32', '2018-05-09 11:55:32', 'a@a', 'a', 'a', NULL),
(2, 'b', '$2y$10$0dU4NfckAI4ynCjzCccSi.GJy1wksY4TQ.fIVv3WCi1BDtPb.cSeu', 'admin', '2018-05-09 12:26:11', '2018-05-09 12:26:11', 'b@b', 'b', 'b', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------

--
-- Structure de la table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(1, 'Brouillon'),
(2, 'Publié');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------

--
-- Structure de la table `authors_articles`
--

DROP TABLE IF EXISTS `authors_articles`;
CREATE TABLE IF NOT EXISTS `authors_articles` (
  `id_article` int(50) NOT NULL,
  `id_author` int(50) NOT NULL,
  PRIMARY KEY (`id_article`,`id_author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Structure de la table `inproceedings`
--

DROP TABLE IF EXISTS `inproceedings`;
CREATE TABLE IF NOT EXISTS `inproceedings` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `id_book` int(50) DEFAULT NULL,
  `id_state` int(50) NOT NULL DEFAULT '1',
  `mdate` date NOT NULL,
  `lkey` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `crossref` varchar(255) DEFAULT NULL,
  `booktitle` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ee` varchar(255) DEFAULT NULL,
  `pages` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=359 DEFAULT CHARSET=utf8;
COMMIT;

