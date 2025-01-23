-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour pteromanagerpro
CREATE DATABASE IF NOT EXISTS `pteromanagerpro` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pteromanagerpro`;

-- Listage de la structure de table pteromanagerpro. auth_tokens
CREATE TABLE IF NOT EXISTS `auth_tokens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL DEFAULT '0',
  `created_at` varchar(255) NOT NULL DEFAULT '0',
  `expires_at` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_auth_tokens_users` (`user_id`),
  CONSTRAINT `FK_auth_tokens_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.auth_tokens : ~0 rows (environ)

-- Listage de la structure de table pteromanagerpro. config
CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  UNIQUE KEY `NameTheConfig` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.config : ~8 rows (environ)
INSERT INTO `config` (`name`, `content`) VALUES
	('project_name', 'Kittyhosting'),
	('description', 'Rendez l\'hebergement accessible a tous'),
	('favicon', 'https://cdn.discordapp.com/attachments/1001816464015229021/1329335377265426494/logo.png?ex=6789f78b&is=6788a60b&hm=a41744e4e8480daf1863ec0ab5c09c2c42aa3633e54b4139ac648b17732f4420&'),
	('icon', 'https://cdn.discordapp.com/attachments/1001816464015229021/1329335377265426494/logo.png?ex=6789f78b&is=6788a60b&hm=a41744e4e8480daf1863ec0ab5c09c2c42aa3633e54b4139ac648b17732f4420&'),
	('theme', 'default'),
	('brand_logo', 'https://cdn.discordapp.com/attachments/1001816464015229021/1329335377068032060/brand.png?ex=6789f78b&is=6788a60b&hm=8b66326cf276257ca35309813004fb6cce84942b1352251dfe3afee595a439ca&'),
	('slogan', 'Rendez l\'hebergement accessible a tous'),
	('login_background', 'https://www.usinenouvelle.com/mediatheque/2/1/6/000565612_896x598_c.jpg');

-- Listage de la structure de table pteromanagerpro. csrf
CREATE TABLE IF NOT EXISTS `csrf` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` longtext,
  `ip` longtext,
  `url` longtext,
  `expire_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.csrf : ~0 rows (environ)

-- Listage de la structure de table pteromanagerpro. roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `level` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.roles : ~5 rows (environ)
INSERT INTO `roles` (`id`, `name`, `level`) VALUES
	(1, 'Admin', 25),
	(2, 'Modérateur', 10),
	(3, 'Support', 8),
	(9, 'User', 2);

-- Listage de la structure de table pteromanagerpro. security
CREATE TABLE IF NOT EXISTS `security` (
  `type` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `validity` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `Index 1` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.security : ~0 rows (environ)

-- Listage de la structure de table pteromanagerpro. tickets
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reason` int DEFAULT NULL,
  `user` int DEFAULT NULL,
  `service` int DEFAULT NULL,
  `object` varchar(50) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `creation_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tickets_tickets_reasons` (`reason`),
  KEY `FK_tickets_users` (`user`),
  KEY `FK_tickets_tickets_statuts` (`status`),
  CONSTRAINT `FK_tickets_tickets_reasons` FOREIGN KEY (`reason`) REFERENCES `tickets_reasons` (`id`),
  CONSTRAINT `FK_tickets_tickets_statuts` FOREIGN KEY (`status`) REFERENCES `tickets_statuts` (`id`),
  CONSTRAINT `FK_tickets_users` FOREIGN KEY (`user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.tickets : ~0 rows (environ)

-- Listage de la structure de table pteromanagerpro. tickets_reasons
CREATE TABLE IF NOT EXISTS `tickets_reasons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reason` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 1` (`reason`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.tickets_reasons : ~3 rows (environ)
INSERT INTO `tickets_reasons` (`id`, `reason`) VALUES
	(1, 'Facturation'),
	(3, 'Problème avec un service'),
	(2, 'Report Bug');

-- Listage de la structure de table pteromanagerpro. tickets_statuts
CREATE TABLE IF NOT EXISTS `tickets_statuts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 1` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.tickets_statuts : ~0 rows (environ)

-- Listage de la structure de table pteromanagerpro. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `phone_number` varchar(25) DEFAULT NULL,
  `adress` varchar(25) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `town` varchar(25) DEFAULT NULL,
  `zip_code` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email_verfied_at` int DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `profile_picture` text,
  `role` int DEFAULT NULL,
  `ban` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `last_login_date` int DEFAULT NULL,
  `creation_date` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `FK_users_roles` (`role`),
  CONSTRAINT `FK_users_roles` FOREIGN KEY (`role`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.users : ~1 rows (environ)
INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `phone_number`, `adress`, `country`, `town`, `zip_code`, `email`, `email_verfied_at`, `password`, `profile_picture`, `role`, `ban`, `last_login_date`, `creation_date`) VALUES
	(7, 'Muzan', 'Ilhann', 'Musitelli', NULL, NULL, NULL, NULL, NULL, 'ilhann.musi@gmail.com', NULL, '$2a$10$BFdfE0Ay/q0mHSsZUw3Q..CwTQKOkjEoo1MVJOdtGdq5pgLmiN5j.', '/assets/images/logo.png', 1, '0', 1737396478, 1737396478);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
