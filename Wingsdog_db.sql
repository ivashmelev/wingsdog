-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.37 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных Wingsdog_db
CREATE DATABASE IF NOT EXISTS `Wingsdog_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Wingsdog_db`;

-- Дамп структуры для таблица Wingsdog_db.albom
CREATE TABLE IF NOT EXISTS `albom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.albom: ~1 rows (приблизительно)
DELETE FROM `albom`;
/*!40000 ALTER TABLE `albom` DISABLE KEYS */;
INSERT INTO `albom` (`id`, `name`, `text`) VALUES
	(1, 'тест 1', '1');
/*!40000 ALTER TABLE `albom` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.attainment
CREATE TABLE IF NOT EXISTS `attainment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text,
  `img` text,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.attainment: ~5 rows (приблизительно)
DELETE FROM `attainment`;
/*!40000 ALTER TABLE `attainment` DISABLE KEYS */;
INSERT INTO `attainment` (`id`, `header`, `img`, `text`) VALUES
	(6, 'Достижение1', 'img-NaN.png', 'Текст1\r\n2\r\n3'),
	(7, 'Достижение2', 'img-7.jpg', '132'),
	(8, 'Достижение3', 'img-8.jpg', '<left>Привет Мир</left>\r\n<center>Пишу тебе письмо</center>\r\n<right>Храни величие свое </right>\r\n<justify>Как можно дальше, высоко</justify>'),
	(9, '123', 'img-9.jpg', '123');
/*!40000 ALTER TABLE `attainment` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.auth
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
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `mail` text NOT NULL,
  `addres` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.contacts: ~0 rows (приблизительно)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `phone`, `mail`, `addres`) VALUES
	(1, 'Нижегородская региональная общественная организация кинологический клуб "Крылатый Пёс"', '8 (831) 298 14 88', 'info@mysite.ru', 'п.Примерный, Нижегородская область');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `date` text NOT NULL,
  `text` text,
  `mail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.feedback: ~3 rows (приблизительно)
DELETE FROM `feedback`;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`id`, `name`, `date`, `text`, `mail`) VALUES
	(73, 'name1', '25/09/2018 в 20:45', '1', '1@mail.ru'),
	(74, 'name2', '25/09/2018 в 20:45', 'new2', '1@mail.ru'),
	(75, '', '25/09/2018 в 22:21', '', '');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text,
  `date` text,
  `img` text,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.news: ~3 rows (приблизительно)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `header`, `date`, `img`, `text`) VALUES
	(21, '1', '23.03.275760', 'img-NaN.jpg', '132\r\n312\r\n13'),
	(22, 'Достижение1', '06.07.275760', 'img-22.jpg', '678'),
	(23, '123123', '12.03.0123', 'img-23.jpg', '<left>12</left>\r\n<right>23</right>\r\n<justify>65</justify>\r\n<center><b>567</b></center>'),
	(24, 'Тест1', '11.11.111111', 'img-24.jpg', '<left><b>1</b></left>\r\n<center><i>2</i></center>\r\n<right><u>3</u></right>\r\n<left><b>4</b></left>');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.photo
CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `albom_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `path` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `albom` (`albom_id`),
  CONSTRAINT `albom` FOREIGN KEY (`albom_id`) REFERENCES `albom` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.photo: ~0 rows (приблизительно)
DELETE FROM `photo`;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;

-- Дамп структуры для таблица Wingsdog_db.team
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text,
  `img` text,
  `text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы Wingsdog_db.team: ~2 rows (приблизительно)
DELETE FROM `team`;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` (`id`, `header`, `img`, `text`) VALUES
	(5, 'Дмитриев Юрий Алексеевич', 'img-5.jpg', 'Действующий инструктор, в кинологии с 1996г., фигурант РКФ - Специалист по рабочим качествам РКФ N3334, помощник судьи в защитном разделе; Подготовка собак по нормативу ЗКС; Постановка на охрану хозяина и территории; Бытовое послушание собак; Корректировка поведения собак.'),
	(6, 'Варначева Елена Андреевна', 'img-6.jpg', 'инструктор-кинолог (спортивное послушание), действующий спортсмен по ОКД и международному нормативу Мондьоринг Личные собаки: малинуа Шерри - дипломы ОКД-1; ВН; квалификация по международному нормативу мондьоринг: - под судейством мадам Доминик Дюпперрэ, Щвейцария, 4 место, 177 баллов - под судейством Williiam Langlois, Франция, 2 место, 196 баллов - под судейством И.Аверин/И.Овсянников, Россия, Гранд При Чемпионата Рссии, 3 место, 196 баллов чемпион УС (полный балл); чемпион КЛЗ; чемпион собака-телохранитель; участник и победитель игровых видов спорта; стаффордширский терьер Макс - участник и призер соревнований УС; неоднократный победитель норматива КЛЗ'),
	(7, '1', 'img-7.jpg', '2');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
