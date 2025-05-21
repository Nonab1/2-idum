-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2025 г., 14:58
-- Версия сервера: 8.0.29
-- Версия PHP: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `2-idum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `header` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `text`, `time`, `img`) VALUES
(3, 'Loklmvfkmvf', 'ckmdwktf,gvlrgv,t;k', '23-05-2024', 'img_668cf1b5f3fc63.70121499.png'),
(4, 'ljdnvdnkjvs', 'salom', '24-07-2024', 'img_66a0df72b65840.42623579.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `text`, `img`) VALUES
(2, '1-xona', 'xmqkcmcncewajo.KMDioedfo;ejwflirgh;oigjru;J;OIhejioejfiahgijgviorwhgrf/', 'img_66548be0324806.39837987.png'),
(3, '2-xona ', 'kiojoaz', 'img_66548cc8f0f317.51215577.png'),
(4, 'mkcdml', 'klcsnk;c', 'img_669f7ff6ae7b66.05656959.png');

-- --------------------------------------------------------

--
-- Структура таблицы `slide`
--

CREATE TABLE `slide` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `slide`
--

INSERT INTO `slide` (`id`, `name`, `img`) VALUES
(4, 'non', 'img_66a397269255b3.18440555.png'),
(5, 'lol', 'img_66a3956d8a8572.87892465.png'),
(7, 'Col', 'img_66a397b794c974.52762487.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `subject`
--

CREATE TABLE `subject` (
  `id` int NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `subject`
--

INSERT INTO `subject` (`id`, `subject`) VALUES
(1, 'Kimy'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `text`, `subject`, `img`) VALUES
(1, 'Abdulaziz', 'm l/dmc.mbc ionfcnmfcikjne', 'Kimy', 'img_66549bbef141d2.79012315.png'),
(3, 'sarvar', 'cmdemck', 'admin', 'img_66558a803d1419.16256768.png'),
(4, 'lol', 'xjjxs', 'admin', 'img_66baeb15c5a2a4.53445101.jpg'),
(5, 'kek', 'xmxk', 'Kimy', 'img_66baeb30878656.47669640.jpg'),
(6, 'fine', 'ksmxks', 'admin', 'img_66baeb7445aae1.09917273.jpg'),
(7, 'wew', 'cdcds', 'admin', 'img_66baeb92052ca8.24674688.jpg'),
(8, 'suhcn', 'cs.,c ', 'admin', 'img_66baebbc0fb809.16132810.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`) VALUES
(2, 'Abdulaziz', 'samandar@gmail.com', '$2y$10$vgy0GiJVqWEhVOrVPKm0d.anv6wftCDmp5c1MbdpDKVCv87ygF7.2', 1),
(3, 'sarvar', 'sarvar@gmail.com', '$2y$10$BWyPMCSapexpAwFJtPyf/u7YlbXidg0kUa7CsZ.5BiBzfGUZ4WkiS', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
