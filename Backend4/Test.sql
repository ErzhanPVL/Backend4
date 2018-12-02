-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2018 г., 19:57
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
-- База данных: `Test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Blog`
--

CREATE TABLE `Blog` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `autor` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Blog`
--

INSERT INTO `Blog` (`id`, `header`, `text`, `autor`, `date`) VALUES
(1, 'Новости дня', 'Сегодня было жарко', 'Ержик', '2018-11-21 06:10:17'),
(2, 'Время года', 'Грядёт зима', 'Ержик', '2018-11-21 06:10:17');

-- --------------------------------------------------------

--
-- Структура таблицы `comments1`
--

CREATE TABLE `comments1` (
  `id` int(5) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments1`
--

INSERT INTO `comments1` (`id`, `autor`, `text`, `date`) VALUES
(1, 'Erzh', 'Привет', '2018-11-20 14:52:11'),
(2, 'Гость', 'Тут интересно', '2018-11-21 10:52:24'),
(3, 'Guest666', 'Im here', '2018-11-21 11:00:27'),
(4, 'Zlo', 'Evil', '2018-11-21 11:01:17'),
(5, 'Guest1', 'Quest', '2018-11-21 11:02:52'),
(6, 'Гость', 'Hi', '2018-11-21 11:04:48'),
(7, 'Hello', 'Hi', '2018-11-21 11:08:22'),
(8, 'FinalGuest', 'Good bye', '2018-11-21 11:18:13');

-- --------------------------------------------------------

--
-- Структура таблицы `comments2`
--

CREATE TABLE `comments2` (
  `id` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments2`
--

INSERT INTO `comments2` (`id`, `autor`, `text`, `date`) VALUES
(1, 'FirstGuest', 'Hi', '2018-11-21 11:16:17');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(3, 'Inem', '222'),
(4, 'Hetem', '111'),
(5, 'Cristiam', '2222'),
(6, 'Albert', '2233'),
(7, 'Liza', '2552'),
(8, 'Erzh', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Blog`
--
ALTER TABLE `Blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments1`
--
ALTER TABLE `comments1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments2`
--
ALTER TABLE `comments2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Blog`
--
ALTER TABLE `Blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `comments1`
--
ALTER TABLE `comments1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `comments2`
--
ALTER TABLE `comments2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
