-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2019 г., 21:33
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Админ', 'Привет'),
(2, 'user', 'Как дела'),
(3, 'Вася', 'Привет'),
(4, 'Посетитель', 'Сайт не работает'),
(5, 'Посетитель', '444'),
(6, 'Посетитель', '444'),
(7, 'Олег', '111'),
(8, 'Вася', 'Сайт не работает'),
(10, 'Посетитель', 'Са');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `prev` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `prev`, `text`) VALUES
(1, 'Зеленский объяснил, почему не помог Меркель, когда ей стало плохо', ' Президент Украины Владимир Зеленский объяснил, почему ничего не сделал, когда канцлеру Германии Ангеле Меркель стало плохо на красной дорожке. Его слова приводит Bild.\r\n\"Я стоял рядом с ней, и поверьте мне, она была в безопасности\", — заявил Зеленский на пресс-конференции.\r\nРанее канцлеру стало плохо во время церемонии приветствия в Берлине. Внезапно Меркель начало колотить, и она несколько раз поменяла положение рук, пытаясь унять дрожь. При этом Зеленский никак не помог коллеге.'),
(2, 'Кудрин объяснил слова о \"социальном взрыве\" в России из-за бедности', 'Глава Счетной палаты Алексей Кудрин выразил надежду, что \"социального взрыва\" в России не будет.\r\nРанее телеведущий Владимир Познер задал вопрос политику, есть ли риски протестов россиян из-за возможного ухудшения их финансового положения. Кудрин ответил, что испытывает беспокойство по этому поводу.');

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
