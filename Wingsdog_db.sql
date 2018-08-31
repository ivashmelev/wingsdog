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

-- Дамп данных таблицы Wingsdog_db.auth: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
REPLACE INTO `auth` (`id`, `login`, `password`, `mail`) VALUES
	(1, 'newadmin', '21232f297a57a5a743894a0e4a801fc3', 'shmelevivan20@gmail.com');
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;

-- Дамп данных таблицы Wingsdog_db.news: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
REPLACE INTO `news` (`id`, `header`, `date`, `img`, `text`) VALUES
	(1, '"Кубок хвостатого-2018"', '20.08.2018\r\n\r\n', 'back_header.jpg', 'Редактирую как Бог\r\n'),
	(2, 'header 2', 'date 2', 'back-dog.jpg', 'text 2'),
	(3, 'header 3', 'date 3', 'news1.jpg', 'text 3');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
