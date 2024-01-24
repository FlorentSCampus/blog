-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `articles` (`id`, `title`, `text`, `publication_date`, `start_date_publication`, `end_date_publication`, `rating`, `authors_id`) VALUES
(1,	'Sport',	'Le biathlon, mariage exigeant de ski de fond et de tir, allie grâce et précision, créant une discipline hivernale captivante et unique.',	'2024-01-24',	'2024-01-01',	'2024-07-31',	5,	1),
(2,	'Sport',	'Le biathlon, où ski de fond et tir se mêlent, allie habileté physique et précision, créant une expérience hivernale unique et palpitante.',	'2024-01-24',	'2024-01-01',	'2024-07-31',	1,	2);

INSERT INTO `articles_categories` (`articles_id`, `categories_id`) VALUES
(1,	1),
(2,	1);

INSERT INTO `authors` (`id`, `last_name`, `first_name`, `pseudo`) VALUES
(1,	'Téo',	'Ma',	'Matéo'),
(2,	'Entine',	'Val',	'Valentine');

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1,	'loisirs'),
(2,	'sports'),
(3,	'musiques');

INSERT INTO `comments` (`id`, `comment`, `comment_date`, `authors_id`, `articles_id`) VALUES
(1,	'Bravo !',	'2024-01-24',	1,	1),
(2,	'Sans avis',	'2024-01-24',	1,	2),
(3,	'Bravo !',	'2024-01-24',	2,	1),
(4,	'Bravo !',	'2024-01-24',	2,	2);

-- 2024-01-24 09:55:44
