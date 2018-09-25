-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 25 2018 г., 20:32
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wingsdog_db`
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
(5, 'Достижение1', 'img-NaN.jpg', 'Текст1');

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
  `date` text NOT NULL,
  `text` text,
  `mail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `date`, `text`, `mail`) VALUES
(73, 'name1', '25/09/2018 в 20:45', '1', '1@mail.ru'),
(74, 'name2', '25/09/2018 в 20:45', 'new2', '1@mail.ru'),
(75, '', '25/09/2018 в 22:21', '', '');

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
(19, 'Мероприятие1', '25.09.2018', 'img-NaN.jpg', 'Текст');

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
(5, 'Дмитриев Юрий Алексеевич', 'img-5.jpg', 'Действующий инструктор, в кинологии с 1996г., фигурант РКФ - Специалист по рабочим качествам РКФ N3334, помощник судьи в защитном разделе; Подготовка собак по нормативу ЗКС; Постановка на охрану хозяина и территории; Бытовое послушание собак; Корректировка поведения собак.'),
(6, 'Варначева Елена Андреевна', 'img-6.jpg', 'инструктор-кинолог (спортивное послушание), действующий спортсмен по ОКД и международному нормативу Мондьоринг Личные собаки: малинуа Шерри - дипломы ОКД-1; ВН; квалификация по международному нормативу мондьоринг: - под судейством мадам Доминик Дюпперрэ, Щвейцария, 4 место, 177 баллов - под судейством Williiam Langlois, Франция, 2 место, 196 баллов - под судейством И.Аверин/И.Овсянников, Россия, Гранд При Чемпионата Рссии, 3 место, 196 баллов чемпион УС (полный балл); чемпион КЛЗ; чемпион собака-телохранитель; участник и победитель игровых видов спорта; стаффордширский терьер Макс - участник и призер соревнований УС; неоднократный победитель норматива КЛЗ');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
