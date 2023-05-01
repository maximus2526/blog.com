-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 01 2023 г., 09:32
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blogdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `name`, `comment_text`, `comment_data`) VALUES
(45, 1, 'admin', 'Hi', '2023-04-29'),
(46, 3, 'admin', 'zxzx', '2023-04-29');

-- --------------------------------------------------------

--
-- Структура таблицы `comment_reply`
--

CREATE TABLE `comment_reply` (
  `comment_id` int(11) NOT NULL,
  `parrent_id` int(11) NOT NULL,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_img_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `post_short_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_text` text COLLATE utf8mb4_unicode_ci,
  `post_category` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`post_id`, `post_img_path`, `post_title`, `post_date`, `post_short_text`, `post_text`, `post_category`) VALUES
(1, 'img/blog-img/img2.jpg', '8 Topic', '2023-04-03', 'Lorem ipsum dolor sit amet, <b>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\n ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor \r\n incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\n exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure \r\n <b>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, \r\n eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </b>\r\n Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni\r\n dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,\r\n adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 'LIFESTYLE'),
(2, 'img/blog-img/img2.jpg', 'Test1', '2023-04-29', 'Test1Test1Test1', 'Test1Test1Test1Test1Test1Test1', 'PHOTODIARY'),
(3, 'img/blog-img/img2.jpg', 'sadfafad', '2023-04-29', 'adfsfd', 'sdaffadsadfdasfdfas', 'LIFESTYLE'),
(4, 'img/blog-img/img2.jpg', 'sadfafad', '2023-04-29', 'adfsfd', 'sdaffadsadfdasfdfas', 'LIFESTYLE'),
(7, 'img/blog-img/image1.jpg', '123231231231', '2023-04-29', '231123321231', '213213321321231', 'LIFESTYLE'),
(14, 'img/blog-img/image1.jpg', 'tetsttt', '2023-04-29', '14321432342', '34243211432143124321', 'LIFESTYLE');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Индексы таблицы `comment_reply`
--
ALTER TABLE `comment_reply`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `parrent_id` (`parrent_id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
