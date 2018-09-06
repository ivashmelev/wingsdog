-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 06 2018 г., 15:48
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Wingsdog_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attainment`
--

CREATE TABLE `attainment` (
  `id` int(11) NOT NULL,
  `header` text,
  `img` text,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attainment`
--

INSERT INTO `attainment` (`id`, `header`, `img`, `text`) VALUES
(1, 'header1', 'img1', 'text1'),
(2, 'header2', 'img2', 'text2'),
(3, 'he123', 'img3', 'text3');

-- --------------------------------------------------------

--
-- Структура таблицы `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth`
--

INSERT INTO `auth` (`id`, `login`, `password`, `mail`) VALUES
(1, 'newadmin', '21232f297a57a5a743894a0e4a801fc3', 'shmelevivan20@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text,
  `text` text,
  `mail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `text`, `mail`) VALUES
(1, '111', '1111', NULL),
(2, '222', '2222', NULL),
(3, 'ИВан', 'mail@mail.ru', 'Hello world'),
(4, 'Сергей', 'Отличный сайт! Просто Десяточка, все предельно понятно и удобно, сотворено чудо', ''),
(5, 'Артур Пиндосов', 'Заебато, и фотогалерея пиздатая, без тупых альбомов как в вк! Респектую, и мама Артема тоже', 'pindosfuckmom@gamil.gnom');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `header` text,
  `date` text,
  `img` text,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `date`, `img`, `text`) VALUES
(1, '456456', '6456-05-04', 'img-1.jpg', '56'),
(2, 'header 2', 'date 2', 'back-dog.jpg', 'text 2'),
(16, '12312', '12321-02-13', 'img-16.jpg', '1323'),
(17, '123', '12.03.3123', 'img-17.jpg', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `header` text,
  `img` text,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `header`, `img`, `text`) VALUES
(1, 'header1', 'img1', 'text1'),
(2, 'header2', 'img2', 'text2'),
(3, 'header3', 'img-17.jpg', 'text3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attainment`
--
ALTER TABLE `attainment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attainment`
--
ALTER TABLE `attainment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
