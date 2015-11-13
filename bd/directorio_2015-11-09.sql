# ************************************************************
# Sequel Pro SQL dump
# Versión 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 10.0.17-MariaDB)
# Base de datos: directorio
# Tiempo de Generación: 2015-11-09 16:00:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla directorio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `directorio`;

CREATE TABLE `directorio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_unidad_administrativa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cct` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tipo_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `directorio_tipo_id_foreign` (`tipo_id`),
  CONSTRAINT `directorio_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `directorio` WRITE;
/*!40000 ALTER TABLE `directorio` DISABLE KEYS */;

INSERT INTO `directorio` (`id`, `path`, `nombre_unidad_administrativa`, `cct`, `telefono`, `celular`, `email`, `created_at`, `updated_at`, `tipo_id`)
VALUES
	(4,'11cbtis253.jpg','CBTIS 253','23DCT0253V','9838328736','9838328736','director@cbtis253.sems.gobmx','2015-11-08 23:40:35','2015-11-09 10:48:11',3),
	(5,'2bachilleresuno.jpg','BACHILLERES CHETUMAL UNO','23ECB0001A','9838371322','9838371523','bachilleresuno@gmail.com','2015-11-09 00:05:02','2015-11-09 10:49:08',3);

/*!40000 ALTER TABLE `directorio` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2015_09_08_090402_create_tipo_table',1),
	('2015_09_08_090413_create_directorio_table',1),
	('2015_11_06_141012_add_deleted_to_users_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Volcado de tabla tipo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipo`;

CREATE TABLE `tipo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;

INSERT INTO `tipo` (`id`, `tipo`, `created_at`, `updated_at`)
VALUES
	(2,'Secundario','2015-11-08 17:52:13','2015-11-08 17:52:13'),
	(3,'Media superior','2015-11-08 17:52:21','2015-11-08 17:52:21');

/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `namep`, `namem`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Administrador','Admin','admin','admin@admin.com','$2y$10$6D60ffSJHK/CTOO9HnqEoeg7O8CJMpe5sTRfTP8U.dqdpXRIkTcPq','PMXnIcq0Sjk8DyVaZLC3d7X30McKFvweuL9Ps2Fcjy9lTvl7b8F4Q7ONJS5h','0000-00-00 00:00:00','2015-11-09 10:46:27',NULL),
	(2,'Ricardo Orlando','Castillo','Olivera','ricardocastilloisc@gmail.com','$2y$10$b0/Qjd1mlh7KqYtJHJbZq.iz9t/pcu3i.RQNv6KyW7OwOOjtOUV0y','0wmuXCuc1SbxNNbXycbamqmXYwqrj61AZie73Vnl96HUZ6380UaeuOsrPoMv','2015-11-08 23:03:58','2015-11-09 10:49:31',NULL),
	(3,'Alan Ernesto ','Novelo','Sansores','alannovelo92@gmail.com','$2y$10$aqbbvbVm6eqM1Py3EXxpGOJsJsIK8yBDPx9/S0g3GXAiHFpnBR2qK',NULL,'2015-11-09 10:51:09','2015-11-09 10:51:09',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
