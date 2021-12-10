-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 10 2021 г., 14:20
-- Версия сервера: 5.6.51
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `info` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `views`, `likes`, `dislikes`, `info`, `date_created`) VALUES
(1, '1.jpg', 31, 13, 9, '', '2021-12-09 15:54:30'),
(2, '2.jpg', 82, 1, 26, '', '2021-12-09 15:55:29'),
(3, '3.jpg', 71, 24, 38, '', '2021-12-09 15:56:09'),
(4, '4.jpg', 17, 0, 0, '', '2021-12-09 15:56:26'),
(5, '5.jpg', 30, 10, 10, '', '2021-12-09 15:56:55'),
(6, '6.jpg', 32, 1, 1, '', '2021-12-09 15:57:12'),
(7, '7.jpg', 18, 0, 0, '', '2021-12-09 15:57:25'),
(8, '8.jpg', 20, 3, 3, '', '2021-12-09 15:57:41'),
(9, '9.jpg', 24, 2, 7, '', '2021-12-09 15:57:57'),
(10, '10.jpg', 32, 11, 9, '', '2021-12-09 15:58:11'),
(11, '11.jpg', 17, 0, 0, '', '2021-12-09 15:58:25'),
(12, '12.jpg', 69, 9, 13, '', '2021-12-09 15:58:35');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
