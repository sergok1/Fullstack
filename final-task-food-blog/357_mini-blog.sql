-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 14 2023 г., 05:22
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `357_mini-blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `short_info` text NOT NULL,
  `biography` text NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `short_info`, `biography`, `avatar`) VALUES
(1, 'Марио', 'Росси', 'Марио Росси родился в 1975 году в Тоскане, Италия. Его кулинарное приключение началось в семейной кухне, где он унаследовал тайны итальянской гастрономии от своей бабушки. Обучение в Кулинарной школе Флоренции усилило его навыки, а стажировки в различных итальянских ресторанах придали его кулинарному искусству уникальный оттенок. Марио известен своим подходом к современной интерпретации традиционных итальянских блюд, создавая вкусные шедевры с использованием свежих, местных ингредиентов.', 'Марио Росси родился в 1975 году в Тоскане, Италия. Его кулинарное приключение началось в семейной кухне, где он унаследовал тайны итальянской гастрономии от своей бабушки. Обучение в Кулинарной школе Флоренции усилило его навыки, а стажировки в различных итальянских ресторанах придали его кулинарному искусству уникальный оттенок. Марио известен своим подходом к современной интерпретации традиционных итальянских блюд, создавая вкусные шедевры с использованием свежих, местных ингредиентов.', '/template/images/authors/chandler-bing.jpg'),
(2, 'Карла', 'Гарсия', 'Карла Гарсия, родившаяся в 1980 году в Мехико, в детстве полюбила ароматы и вкусы традиционных мексиканских блюд, готовленных ее матерью. Ее кулинарный путь начался с изучения семейных рецептов и традиций, а позднее, обучаясь в Кулинарном институте Мексики, она стала экспертом в мексиканской кухне. Карла стала известной своим талантом в создании блюд с дерзкими сочетаниями вкусов, придавая им современный стиль.', 'Карла Гарсия, родившаяся в 1980 году в Мехико, в детстве полюбила ароматы и вкусы традиционных мексиканских блюд, готовленных ее матерью. Ее кулинарный путь начался с изучения семейных рецептов и традиций, а позднее, обучаясь в Кулинарном институте Мексики, она стала экспертом в мексиканской кухне. Карла стала известной своим талантом в создании блюд с дерзкими сочетаниями вкусов, придавая им современный стиль.', '/template/images/authors/rachel-green.jpg'),
(3, 'Юкико', 'Танака', 'Родившаяся в Токио в 1982 году, Юкико Танака была увлечена искусством готовки с самого детства. Ее страсть к японской кухне привела ее к обучению в Кулинарном институте Токио, где она погрузилась в традиции суши, сашими и чаепития. С многолетним опытом работы в традиционных ресторанах и тщательным изучением японской кулинарии, Юкико стала мастером создания изысканных блюд, подчеркивая красоту и простоту японской кухни.', 'Родившаяся в Токио в 1982 году, Юкико Танака была увлечена искусством готовки с самого детства. Ее страсть к японской кухне привела ее к обучению в Кулинарном институте Токио, где она погрузилась в традиции суши, сашими и чаепития. С многолетним опытом работы в традиционных ресторанах и тщательным изучением японской кулинарии, Юкико стала мастером создания изысканных блюд, подчеркивая красоту и простоту японской кухни.', '/template/images/authors/monica-geller.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
