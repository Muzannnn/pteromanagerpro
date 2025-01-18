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

-- Listage de la structure de table pteromanagerpro. config
CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  UNIQUE KEY `NameTheConfig` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.config : ~7 rows (environ)
INSERT INTO `config` (`name`, `content`) VALUES
	('project_name', 'Kittyhosting'),
	('description', 'Rendez l\'hebergement accessible a tous'),
	('favicon', 'https://cdn.discordapp.com/attachments/1001816464015229021/1329335377265426494/logo.png?ex=6789f78b&is=6788a60b&hm=a41744e4e8480daf1863ec0ab5c09c2c42aa3633e54b4139ac648b17732f4420&'),
	('icon', 'https://cdn.discordapp.com/attachments/1001816464015229021/1329335377265426494/logo.png?ex=6789f78b&is=6788a60b&hm=a41744e4e8480daf1863ec0ab5c09c2c42aa3633e54b4139ac648b17732f4420&'),
	('theme', 'default'),
	('brand_logo', 'https://cdn.discordapp.com/attachments/1001816464015229021/1329335377068032060/brand.png?ex=6789f78b&is=6788a60b&hm=8b66326cf276257ca35309813004fb6cce84942b1352251dfe3afee595a439ca&'),
	('slogan', 'Rendez l\'hebergement accessible a tous');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.roles : ~0 rows (environ)

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
  `creation_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tickets_tickets_reasons` (`reason`),
  KEY `FK_tickets_users` (`user`),
  CONSTRAINT `FK_tickets_tickets_reasons` FOREIGN KEY (`reason`) REFERENCES `tickets_reasons` (`id`),
  CONSTRAINT `FK_tickets_users` FOREIGN KEY (`user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.tickets : ~0 rows (environ)

-- Listage de la structure de table pteromanagerpro. tickets_reasons
CREATE TABLE IF NOT EXISTS `tickets_reasons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reason` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Index 1` (`reason`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.tickets_reasons : ~0 rows (environ)
INSERT INTO `tickets_reasons` (`id`, `reason`) VALUES
	(1, 'Facturation'),
	(3, 'Problème avec un service'),
	(2, 'Report Bug');

-- Listage de la structure de table pteromanagerpro. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email_verfied_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `profile_picture` text,
  `role` int DEFAULT NULL,
  `ban` int DEFAULT NULL,
  `last_login_date` timestamp NULL DEFAULT NULL,
  `creation_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `FK_users_roles` (`role`),
  CONSTRAINT `FK_users_roles` FOREIGN KEY (`role`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table pteromanagerpro.users : ~0 rows (environ)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
