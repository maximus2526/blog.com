-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 05 2023 г., 09:26
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
(1, 63, 'admin', '12231', '2023-05-03'),
(2, 63, 'admin', 'gfddfg', '2023-05-03');

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
(63, '/img/blog-img/image1.jpg', '134214322341', '2023-05-03', '1234432114324321', '3214214333421342', 'LIFESTYLE'),
(64, '/img/blog-img/image1.jpg', 'Test1', '2023-05-02', 'Test1', 'Test1', 'LIFESTYLE'),
(65, '/img/blog-img/image1.jpg', 'Test1', '2023-05-02', 'Test1', 'Test1', 'LIFESTYLE'),
(66, '/img/blog-img/image1.jpg', 'Test1', '2023-05-02', 'Test1', 'Test1', 'LIFESTYLE'),
(68, '/img/blog-img/image1.jpg', 'Test1', '2023-05-02', 'Test1', 'Test1', 'LIFESTYLE'),
(69, '/img/blog-img/image1.jpg', 'Test1', '2023-05-02', 'Test1', 'Test1', 'LIFESTYLE'),
(70, '/img/blog-img/image1.jpg', 'Test1', '2023-05-02', 'Test1', 'Test1', 'LIFESTYLE'),
(71, '/img/blog-img/image1.jpg', 'Test1', '2023-05-02', 'Test1', 'Test1', 'LIFESTYLE'),
(72, '/img/blog-img/image1.jpg', 'dfsgdgfsgfd', '2023-05-03', 'dfsggfsdgdfs', 'sgdfdfgdgsdfsd', 'LIFESTYLE'),
(73, '/img/blog-img/image1.jpg', 'dfdfasdafaf', '2023-05-03', 'adsfadfsdafs', 'adfsadfsadfsa', 'LIFESTYLE');

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

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
