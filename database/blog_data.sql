-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `blog`;
CREATE DATABASE `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `blog`;

INSERT INTO `articles` (`id`, `title`, `content`, `publication_date`, `start_date_publication`, `end_date_publication`, `rating`, `authors_id`) VALUES
(1,	'Musiques',	'La musique, émotion concise, résonne en nous, parle sans mots.',	'2024-01-31 08:59:49',	'2024-01-01 00:00:00',	'2024-07-31 00:00:00',	5,	4),
(2,	'Sports',	'Le sport, langage du corps, transcende les limites. Dans l\'effort et la passion, chaque mouvement écrit une histoire d\'endurance et de victoire.',	'2024-01-31 09:00:59',	'2024-01-01 00:00:00',	'2024-07-31 00:00:00',	1,	1),
(3,	'Loisirs',	'Parc d\'attractions : plaisirs intenses, rires, magie. Instants éphémères, souvenirs éternels.',	'2024-01-31 09:02:48',	'2024-01-01 00:00:00',	'2024-07-31 00:00:00',	2,	1),
(4,	'Cuisines',	'Cuisine : art des saveurs, harmonie d\'ingrédients. Un plaisir simple, une explosion de goûts.',	'2024-01-31 09:03:38',	'2024-01-01 00:00:00',	'2024-07-31 00:00:00',	3,	1),
(5,	'Sports',	'JO : sport, unité mondiale. Athlètes brillent, drapeaux s\'entrelacent. Festival de paix, courage, excellence.',	'2024-01-31 09:57:53',	'2024-01-01 00:00:00',	'2024-07-31 00:00:00',	4,	3);

INSERT INTO `articles_categories` (`articles_id`, `categories_id`) VALUES
(1,	3),
(2,	2),
(3,	1),
(4,	4),
(5,	2);

INSERT INTO `authors` (`id`, `last_name`, `first_name`, `pseudo`) VALUES
(1,	NULL,	NULL,	'Anonyme'),
(2,	NULL,	NULL,	'Matéo'),
(3,	NULL,	NULL,	'Valentine'),
(4,	NULL,	NULL,	'Florent'),
(5,	NULL,	NULL,	'Axel'),
(6,	NULL,	NULL,	'Hélène'),
(7,	NULL,	NULL,	'Philémon');

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1,	'Loisirs'),
(2,	'Sports'),
(3,	'Musiques'),
(4,	'Cuisines');

INSERT INTO `comments` (`id`, `comment`, `comment_date`, `authors_id`, `articles_id`) VALUES
(9,	'C\'EST NUUUUUL !',	'2024-01-31 12:56:06',	1,	1);

-- 2024-01-31 13:41:55
