-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 11 2024 г., 09:03
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `RudzPark`
--
CREATE DATABASE IF NOT EXISTS `RudzPark` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `RudzPark`;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`) VALUES
(1, 'Ноутбуки', 'Мощные игровые, а также для работы', './images/slider/laptops.jpg'),
(2, 'Планшеты', 'Для любых нужд', './images/slider/tablets.jpg'),
(3, 'Смартфоны', 'Лучшие модели именно у нас', './images/slider/phones.jpg'),
(4, 'Наушники', 'Прекрасное качество звука', './images/slider/headphones.jpg'),
(5, 'Телевизоры', 'Отличное качество передаваемого изображения', './images/slider/tv.jpg'),
(6, 'Аксессуары', 'Подберем дополнительные аксессуары для любой вашей покупки', './images/slider/accessories.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- База данных: `RudzPark-CI`
--
CREATE DATABASE IF NOT EXISTS `RudzPark-CI` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `RudzPark-CI`;

-- --------------------------------------------------------

--
-- Структура таблицы `advantages`
--

CREATE TABLE `advantages` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `advantages`
--

INSERT INTO `advantages` (`id`, `title`, `description`) VALUES
(1, 'Лучшие в своем деле', 'За многие годы труда доказали, что нам можно и нужно доверять. '),
(2, 'Гарантия качества', 'От года гарантии на любые товары и комплектующие к ним'),
(3, 'Быстрая доставка', 'Доставим в кратчайшие сроки в любую точку страны.'),
(4, 'Поддержка 24/7', 'Вы можете позвонить в наш колл-центр и оператор с радостью ответит на любые возникшие у вас вопросы');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `parent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `img`, `slug`, `parent`) VALUES
(1, 'Ноутбуки', 'Ноутбуки на разный вкус. Для работы или игровые', '../images/slider/laptops.jpg', '', ''),
(2, 'Планшеты', 'Для любых нужд', '../images/slider/tablets.jpg', '', ''),
(3, 'Телефоны', 'Лучшие модели именно у нас', '../images/slider/phones.jpg', '', ''),
(4, 'Наушники', 'Прекрасное качество звука', '../images/slider/headphones.jpg', '', ''),
(5, 'Телевизоры', 'Отличное качество передаваемого изображения', '../images/slider/tv.jpg', '', ''),
(6, 'Аксессуары 	 	', 'Подберем дополнительные аксессуары для любой вашей покупки', '../images/slider/accessories.jpg', '', ''),
(7, 'Что-то новое', 'описание чего-то нового. Создано из админки', 'https://media.istockphoto.com/id/1468178137/photo/close-up-side-view-of-an-orange-luxury-sports-car.jpg?s=2048x2048&w=is&k=20&c=m1ih238W2fDS6IEzeRFAx_8GiiH7WA3wstGVjpTw8EQ=', '', ''),
(22, 'Смартфоны', '', '', '', 'Телефоны'),
(23, 'Офисные', '', '', '', 'Ноутбуки'),
(25, 'iPhone', '', '', '', 'Смартфоны'),
(26, 'Samsung', '', '', '', 'Смартфоны'),
(27, 'Дорогие', '', '', '', 'Игровые'),
(28, 'Еще какие-то', '', '', '', 'Дорогие'),
(29, 'Еще глубже', '', '', '', 'Еще какие-то'),
(31, 'Суперэлитные', '', '', '', 'Дорогие'),
(35, 'сверхсуперважные', 'фывфывфывфыв', '', '', 'Офисные');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `date`) VALUES
(1, 'adminTest', '7ef5661da17eea48e8361889ec415222', '2024-02-02'),
(2, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-03'),
(3, 'sssss', 'aaaa', '0000-00-00'),
(4, 'dmitry', 'fcea920f7412b5da7be0cf42b8c93759', '0000-00-00'),
(5, 'dmitry', 'fcea920f7412b5da7be0cf42b8c93759', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `Товары`
--

CREATE TABLE `Товары` (
  `id` int NOT NULL,
  `rate` float NOT NULL,
  `inStock` tinyint NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Товары`
--

INSERT INTO `Товары` (`id`, `rate`, `inStock`, `text`, `price`, `img`, `category`) VALUES
(1, 4.2, 1, 'Ноутбук Lenovo IdeaPad 1 15ALC7 (82R4004TRK)', 1539, 'https://cdn21vek.by/img/galleries/8512/56/preview_b/ideapad115alc782r4004trk_lenovo_6508483fd3bc7.jpeg', 'Ноутбуки'),
(2, 4, 1, 'Игровой ноутбук ASUS TUF Gaming F15 FX506LHB-HN323 ', 2871.96, 'https://algo.by/media_images/site/l/1/_/1_1061377.jpg', 'Ноутбуки'),
(3, 4.8, 1, 'Ноутбук MSI Katana 17 B13VFK-883XBY', 5799, 'https://multimart.by/upload/webpimages/data/upload/cloud2256641899/product/481/03/product_image_471003_4323741[w700h700].webp?v=1706809053', 'Ноутбуки'),
(4, 3.6, 0, 'Ноутбук Lenovo IdeaPad 3 15ALC6 82KU018F с латинской раскладкой', 2290, 'https://img.5element.by/import/images/ut/goods/good_edd47be7-989d-11ed-bb92-005056012465/15alc6-82ku018fpb-ideapad-3-noutbuk-lenovo-1_600.jpg', 'Ноутбуки'),
(6, 4.2, 1, 'Смартфон POCO M4 PRO 5G 4GB/64GB Yellow EU', 489, '../images/goods/phones/Poco_M4_Pro_5G.jpg', 'Телефоны'),
(7, 4, 0, 'Смартфон Apple iPhone 15 Pro Max 256GB Blue Titanium (MU6T3J/A)', 5999, '../images/goods/phones/Apple_iPhone_15_Pro_Max.jpg', 'Телефоны'),
(8, 4.1, 1, 'Смартфон Xiaomi Redmi Note 12 8GB/256GB without NFC Ice Blue EU', 799, '../images/goods/phones/Xiaomi_Redmy_Note_12.jpg', 'Телефоны'),
(9, 4.2, 1, 'Смартфон Samsung Galaxy A34 5G SM-A346 6GB/128GB (серебристый)', 899, '../images/goods/phones/Samsung_Galaxy_A34_5G.jpg', 'Телефоны'),
(10, 3.9, 1, 'Смартфон Samsung Galaxy Z Fold5 5G 12GB/512GB (SM-F946B) черный', 6689, '../images/goods/phones/sm-f946b-chernyy-512gb-telefon-gsm-samsung-galaxy-z-fold5-5g-1_600.jpg', 'Телефоны'),
(11, 4.5, 0, 'Смартфон Samsung Galaxy S22 Ultra 5G SM-S908B/DS 12GB/512GB (графитовый)', 3510.69, '../images/goods/phones/3i5lpwdp41s4b0rim1waex6ue45my9y3.jpg', 'Телефоны'),
(15, 4.4, 1, 'Ноутбук Lenovo IdeaPad 3 15ALC6 82KU018F с латинской раскладкойНоутбук Lenovo IdeaPad 3 15ALC6 82KU018F с латинской раскладкой', 1212, 'https://img.5element.by/import/images/ut/goods/good_edd47be7-989d-11ed-bb92-005056012465/15alc6-82ku018fpb-ideapad-3-noutbuk-lenovo-1_600.jpg', 'Ноутбуки');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Товары`
--
ALTER TABLE `Товары`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Товары`
--
ALTER TABLE `Товары`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
