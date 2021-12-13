-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2021 г., 22:33
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
-- База данных: `lesson6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kids`
--

CREATE TABLE `kids` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `photo_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `kids`
--

INSERT INTO `kids` (`id`, `name`, `price`, `photo_name`) VALUES
(1, 'Classic hard dress', 219, 'product_k1.jpg'),
(2, 'Soft pastel dress', 279, 'product_k2.jpg'),
(3, 'Knitted dress', 199, 'product_k3.jpg'),
(4, 'Pixels T-shirt', 59, 'product_k4.jpg'),
(5, 'Delicate shirt', 89, 'product_k5.jpg'),
(6, 'Striped shirt', 119, 'product_k6.jpg'),
(7, 'Sea waves jacket', 169, 'product_k7.jpg'),
(8, 'Sky dress', 299, 'product_k8.jpg'),
(9, 'Royal coat', 319, 'product_k9.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `men`
--

CREATE TABLE `men` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `photo_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `men`
--

INSERT INTO `men` (`id`, `name`, `price`, `photo_name`) VALUES
(1, 'Quilted jacket', 209, 'product_m1.jpg'),
(2, 'Cherry style shirt', 99, 'product_m2.jpg'),
(3, 'Hoodie one man', 149, 'product_m3.jpg'),
(4, 'T-shirt enzymes', 89, 'product_m4.jpg'),
(5, 'Simple T-shirt', 49, 'product_m5.jpg'),
(6, 'Sky cap', 79, 'product_m6.jpg'),
(7, 'Office shirt', 99, 'product_m7.jpg'),
(8, 'Bad guy jacket', 499, 'product_m8.jpg'),
(9, 'Military shirt', 129, 'product_m9.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `photo_name` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `city`, `photo_name`) VALUES
(1, 'Ирина', 'Москва', 'me.jpg'),
(2, 'Ольга', 'Уфа', 'tart.jpg'),
(3, 'Кристина', 'Тюмень', '288905-Deman1608.jpg'),
(4, 'Анна', 'Белгород', 'image_561004131538308381912.jpg'),
(6, 'Илья', 'Хабаровск', 'scale_1200.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `photo_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `women`
--

INSERT INTO `women` (`id`, `name`, `price`, `photo_name`) VALUES
(1, 'Simple T-shirt', 79, 'product_w1.jpg'),
(2, 'Sea suit jacket', 349, 'product_w2.jpg'),
(3, 'Nature shirt', 129, 'product_w3.jpg'),
(4, 'Lily shirt', 179, 'product_w4.jpg'),
(5, 'Classic suit', 379, 'product_w5.jpg'),
(6, 'Amazing shirt', 199, 'product_w6.jpg'),
(7, 'Silk pajamas', 289, 'product_w7.jpg'),
(8, 'Sunny shirt', 239, 'product_w8.jpg'),
(9, 'Challenge T-shirt', 139, 'product_w9.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kids`
--
ALTER TABLE `kids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `men`
--
ALTER TABLE `men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
