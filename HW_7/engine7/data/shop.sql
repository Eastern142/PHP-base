-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 22 2019 г., 23:57
-- Версия сервера: 8.0.15
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `goods_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Игорь', 'Отличный магазин. Доволен.'),
(2, 'Дмитрий', 'Отличные ноутбуки и магазин.');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `filename` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `filename`, `likes`) VALUES
(1, 'GT63TITAN1.png', 7),
(2, 'GT63TITAN2.png', 2),
(3, 'GT63TITAN3.png', 1),
(4, 'GT63TITAN4.png', 0),
(5, 'GT63TITAN5.png', 0),
(6, 'GT75TITAN1.png', 0),
(7, 'GT75TITAN2.png', 0),
(8, 'GT75TITAN3.png', 0),
(9, 'GT75TITAN4.png', 0),
(10, 'GT75TITAN5.png', 0),
(11, 'GT83TITAN1.png', 0),
(12, 'GT83TITAN2.png', 0),
(13, 'GT83TITAN3.png', 0),
(14, 'GT83TITAN4.png', 0),
(15, 'GT83TITAN5.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `image`, `name`, `price`, `description`) VALUES
(1, 'GT63TITAN1.png', 'MSI GT63 TITAN', 2500, 'Представляем ноутбук MSI с шестиядерным процессором Intel: прирост производительности за счет дополнительных ядер достигает 40%. Чем больше ядер, тем комфортнее играть!'),
(2, 'GT75TITAN1.png', 'MSI GT75 TITAN', 2700, 'MSI GT75 Titan — машина с механической клавиатурой для гейминга высокого уровня, где эргономика и высокая производительность может стоить победы.'),
(3, 'GT83TITAN1.png', 'MSI GT83 TITAN', 3200, 'Эта геймерская платформа построена на самом последнем процессоре Intel Core i7-8850H с максимальной тактовой частотой 4,3 ГГц и двух топовых видеокартах GeForce GTX 1080.');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `prevew` text NOT NULL,
  `full` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `prevew`, `full`) VALUES
(1, 'Путин дал Шипулину 3 миллиона на биатлон и поддержал еще 58 проектов в Свердловской области', 'Самый большой грант от президента, 13 миллионов, выиграл фестиваль «Старый новый рок»', 'Фонд президентских грантов назвал победителей второго конкурса 2019 года. Деньги получат 59 проектов из Свердловской области. Мы изучили этот список и рассказываем о самых интересных из них.\r\n\r\nСамый внушительный грант — 13 миллионов рублей — достался Ассоциации музыкантов Урала на проведение фестиваля «Старый новый рок». На фестиваль-практикум «Кинопроба» выделили чуть больше 8 миллионов, а на фестиваль уличного кино — 6,8 миллиона. На порядок меньше, всего 790 тысяч рублей, получит благотворительный фонд «Умная среда» на проведение фестиваля EverJazz.\r\n\r\nЕще один победитель конкурса — проект популяризации биатлона и культуры здорового образа жизни среди детей и подростков «Чемпионы будущего» благотворительного фонда Антона Шипулина. «В основе проекта лежит освоение детьми и подростками инновационного вида спортивной подготовки — лазерного биатлона», — говорится в описании. Сумма гранта — 2,9 млн рублей.\r\n\r\nОрганизация «Дари добро» выиграла 499 тысяч рублей на создание теплого дома для бездомных и престарелых людей, оказавшихся в трудной ситуации. Дом должен появиться в поселке Студенческом Белоярского района. А в селе Мезенском на средства гранта — 574 тысячи рублей — сделают зимний городок для местных жителей.\r\n\r\n«Синара-Фонд» получит 2,9 млн рублей на арт-платформу для развития и продвижения уральского современного искусства.\r\n\r\nПроект развития системы реабилитации онкопациентов организации «Вместе ради жизни» выиграл грант в 2,9 млн рублей (о работе организации мы рассказывали подробно). Благотворительный фонд «Я особенный» получит 2,7 млн на Школу особых родителей для семей, имеющих детей с особенностями интеллекта и психического развития.\r\n\r\nПравославная служба милосердия на 2,9 млн рублей создаст проект «Дорога к дому». В центре социальной адаптации 10 человек смогут пройти полугодовую программу социализации.\r\n\r\n«Аистенок» получит 6,5 млн на оказание помощи семьям с детьми в трудной жизненной ситуации, а «Семья детям» — 1,6 млн на проект «Служба по принятию решений», который поможет специалистам государственных учреждений четырех муниципалитетов, в том числе Екатеринбурга, в развитии Школ приемных родителей.\r\n\r\nФонд «Люблю и благодарю» выиграл грант в 493 тысячи рублей на организацию горячего питания для жителей Уралмаша и Эльмаша, об этом проекте мы тоже уже рассказывали.\r\n\r\nА вот уральский «Битлз клуб» на 499 тысяч рублей проведет цикл лекций-концертов о рок-музыке в колониях.'),
(2, 'Проиграли все три матча на выезде: «Автомобилист» в Казани уступил лидеру Востока «Ак Барсу»', 'Екатеринбуржцы открыли счёт в матче, и это была их единственная шайба', 'Ох и нелёгкие времена у екатеринбургского «Автомобилиста»! После восьмиматчевой победной серии екатеринбуржцы стали проигрывать. За последние девять игр «Автомобилист» выиграл всего дважды.\r\n\r\nНе задалась у «Авто» и эта выездная серия: екатеринбуржцы в овертайме уступили СКА и крупно проиграли московскому «Динамо».\r\n\r\nА сегодня в Казани «Автомобилист» впервые в этом сезоне встретился с «Ак Барсом», лидером Восточной конференции, который потерпел всего три поражения за 15 игр. В заявке не оказалось Павла Дацюка, травмированного Джефа Плэтта и Дениса Бодровка, которому в прошлом матче под визор залетела шайба.\r\n\r\nХозяева ожидаемо давили и лидировали в матче, значительно перебросав гостей. Но в первом периоде «Автомобилист» ещё бился и даже открыл счёт в матче.\r\n\r\nНа пятой минуте Дэн Секстон в одиночку прорвался к воротам от синей линии и забросил шайбу.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `hash`) VALUES
(1, 'admin', '$2y$10$ER/3u9uaqEQ/sKN/9/ynVOCCBSvRFgJiWNCYCHXyZuRXGt8EnKM0i', '7411374705daf19495497e1.21344534'),
(2, 'Brian', '$2y$10$iN50QxLtRM8P//LZfSR7/.Pqlp687irGxObEUyuKx1gI2N6MLqSvW', '12731520535daf6a818a0582.42984422'),
(3, 'Игорь', '$2y$10$FzUIyldLzaZ7OZaOIy4UAeILcSGoxIvXKA4iusARMuc1fTtX306Jq', '4311430695daf6b48d10f68.75439729');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
