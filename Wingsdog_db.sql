-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.19-log - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных Wingsdog_db
DROP DATABASE IF EXISTS `Wingsdog_db`;
CREATE DATABASE IF NOT EXISTS `Wingsdog_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Wingsdog_db`;

-- Дамп структуры для таблица Wingsdog_db.albom
DROP TABLE IF EXISTS `albom`;
CREATE TABLE IF NOT EXISTS `albom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.albom: ~2 rows (приблизительно)
DELETE FROM `albom`;
/*!40000 ALTER TABLE `albom` DISABLE KEYS */;
/*!40000 ALTER TABLE `albom` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.attainment
DROP TABLE IF EXISTS `attainment`;
CREATE TABLE IF NOT EXISTS `attainment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text,
  `img` text,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.attainment: ~0 rows (приблизительно)
DELETE FROM `attainment`;
/*!40000 ALTER TABLE `attainment` DISABLE KEYS */;
/*!40000 ALTER TABLE `attainment` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.auth
DROP TABLE IF EXISTS `auth`;
CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.auth: ~0 rows (приблизительно)
DELETE FROM `auth`;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
INSERT INTO `auth` (`id`, `login`, `password`, `mail`) VALUES
	(1, 'newadmin', '21232f297a57a5a743894a0e4a801fc3', 'shmelevivan20@gmail.com');
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `phone` text NOT NULL,
  `mail` text NOT NULL,
  `addres` text NOT NULL,
  `requisites` text NOT NULL,
  `time_work` text NOT NULL,
  `time_half` text NOT NULL,
  `weekend` text NOT NULL,
  `img_on_main` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.contacts: ~1 rows (приблизительно)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `img`, `phone`, `mail`, `addres`, `requisites`, `time_work`, `time_half`, `weekend`, `img_on_main`) VALUES
	(1, 'Нижегородская региональная общественная организация \r\nкинологический клуб "Крылатый Пёс"', '../img/mainimg.jpg', '8 (831) 298 14 88', 'info@mysite.ru', 'п.Примерный, Нижегородская область', '40817810099910004312', 'Пн-Пт: 10:00-19:00', 'Cб: 10:00-19:00 ', 'Вс', '../img/imgonmain.jpg');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.feedback
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `date` text NOT NULL,
  `text` text,
  `mail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.feedback: ~8 rows (приблизительно)
DELETE FROM `feedback`;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.hide_page
DROP TABLE IF EXISTS `hide_page`;
CREATE TABLE IF NOT EXISTS `hide_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `page` text NOT NULL,
  `status` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.hide_page: ~6 rows (приблизительно)
DELETE FROM `hide_page`;
/*!40000 ALTER TABLE `hide_page` DISABLE KEYS */;
INSERT INTO `hide_page` (`id`, `number`, `page`, `status`) VALUES
	(2, 0, 'Мероприятия', 'true'),
	(3, 1, 'Инструктора', 'true'),
	(4, 2, 'Достижение', 'true'),
	(5, 3, 'Передержка', 'true'),
	(6, 4, 'Фотоальбом', 'true'),
	(7, 5, 'Контакты', 'true');
/*!40000 ALTER TABLE `hide_page` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.news
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text,
  `date` text,
  `img` text,
  `text` text,
  `href_albom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.news: ~1 rows (приблизительно)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.photo
DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `albom_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `path` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `albom` (`albom_id`),
  CONSTRAINT `albom` FOREIGN KEY (`albom_id`) REFERENCES `albom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.photo: ~8 rows (приблизительно)
DELETE FROM `photo`;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.team
DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text,
  `img` text,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.team: ~0 rows (приблизительно)
DELETE FROM `team`;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
/*!40000 ALTER TABLE `team` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
