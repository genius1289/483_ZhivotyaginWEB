-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 29 2021 г., 04:59
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sites`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comm`
--

CREATE TABLE `comm` (
  `login` varchar(50) NOT NULL,
  `page_id` varchar(11) NOT NULL,
  `text_comm` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comm`
--

INSERT INTO `comm` (`login`, `page_id`, `text_comm`) VALUES
('', '', ''),
('admin', '42', 'fewfewfwefewfwefwfffwe'),
('admin', '42', 'test'),
('adminus', '43', 'Комментарий1'),
('admin', '43', 'WOOOW');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(70) NOT NULL,
  `image` varchar(500) NOT NULL,
  `text_news` varchar(1000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `heading`, `image`, `text_news`, `author`, `data`) VALUES
(42, 'Тестовая статья', 'image/1624934422pic1.jpg', ' ntcnb', 'admin', '2021-06-29 00:00:00'),
(43, 'Тестовая Статья 2', 'image/1624934656photomode_11062021_124051.png', ' Тестовый текст', 'adminus', '2021-06-29 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `avatar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `avatar`) VALUES
(11, 'adminus', '123', 'Георгий', 'uploads/16243292111624082127photomode_11062021_124051.png'),
(12, 'admin', '123', 'Николай', 'uploads/16243325611624082127photomode_11062021_124051.png'),
(13, 'test123', '1111', '123456', ''),
(14, 'перчик', '123', 'Маша', ''),
(15, 'просто тест', '6969', 'имя', 'uploads/162446049015698233144.png'),
(19, 'admin1', '312312', 'Георгий', ''),
(20, 'admintest', '1234', 'Георгий', ''),
(21, 'admin2', '123', 'Георгий', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
