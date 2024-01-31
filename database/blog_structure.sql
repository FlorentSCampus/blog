-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `blog`;
CREATE DATABASE `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `blog`;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(50) NOT NULL,
  `content` char(150) NOT NULL,
  `publication_date` datetime NOT NULL,
  `start_date_publication` datetime NOT NULL,
  `end_date_publication` datetime NOT NULL,
  `rating` int(11) NOT NULL,
  `authors_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articles_authors1_idx` (`authors_id`),
  CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `articles_categories`;
CREATE TABLE `articles_categories` (
  `articles_id` int(10) unsigned NOT NULL,
  `categories_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`articles_id`,`categories_id`),
  KEY `fk_articles_categories_categories1_idx` (`categories_id`),
  KEY `fk_articles_categories_articles1_idx` (`articles_id`),
  CONSTRAINT `articles_categories_ibfk_4` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `articles_categories_ibfk_5` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `last_name` char(50) DEFAULT NULL,
  `first_name` char(50) DEFAULT NULL,
  `pseudo` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` char(150) NOT NULL,
  `comment_date` datetime NOT NULL,
  `authors_id` int(10) unsigned NOT NULL,
  `articles_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments_authors1_idx` (`authors_id`),
  KEY `fk_comments_articles1_idx` (`articles_id`),
  CONSTRAINT `comments_ibfk_5` FOREIGN KEY (`authors_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comments_ibfk_6` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-01-31 13:42:17
