-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 21 2020 г., 11:38
-- Версия сервера: 5.6.38
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
-- База данных: `urok31`
--

-- --------------------------------------------------------

--
-- Структура таблицы `KS`
--

CREATE TABLE `KS` (
  `id` int(10) NOT NULL,
  `title` varchar(180) NOT NULL,
  `description` varchar(180) NOT NULL,
  `goal` int(180) NOT NULL,
  `donated` int(180) NOT NULL,
  `img` varchar(180) NOT NULL,
  `user` varchar(180) NOT NULL,
  `place` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `KS`
--

INSERT INTO `KS` (`id`, `title`, `description`, `goal`, `donated`, `img`, `user`, `place`) VALUES
(1, 'Escape the Dark Sector - Expand the Universe', 'Four expansions for Escape the Dark Sector, plus a second chance to get the original game and discounted bundles!    ', 30000, 190, '1.png    ', 'Tabletop games    ', 'Norwich, UK    '),
(2, 'PARABLE OF THE SOWER by Octavia E. Butler', 'Thornwillow presents the first-ever fine press edition of the visionary author’s dystopian masterpiece.', 10000, 150, '2.jpg', 'Letterpress', 'Newburgh, NY'),
(3, '  3DPrintMill- Continuous Belt 3D Printing For Everyone', '  An Infinite-Z volume 3D printer created by Naomi Wu & Creality3D, building on the work of Karl Brown and Bill Steele.  ', 12898, 140, '  3.jpg  ', '  3D Printing  ', '  Hong Kong, Hong Kong  ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `KS`
--
ALTER TABLE `KS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `KS`
--
ALTER TABLE `KS`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
