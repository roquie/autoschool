-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2013 г., 21:42
-- Версия сервера: 5.1.68-community-log
-- Версия PHP: 5.4.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mpt_auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Administrators`
--

CREATE TABLE IF NOT EXISTS `Administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `Administrators`
--

INSERT INTO `Administrators` (`id`, `email`, `datetime`) VALUES
(7, 'roquie0@gmail.com', '2013-10-01 23:12:24'),
(24, 'vik.melnikov@gmail.com', '2013-10-14 19:45:19');

-- --------------------------------------------------------

--
-- Структура таблицы `Contracts`
--

CREATE TABLE IF NOT EXISTS `Contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `famil` varchar(255) NOT NULL,
  `imya` varchar(255) NOT NULL,
  `ot4estvo` varchar(255) NOT NULL,
  `adres_reg_po_pasporty` varchar(255) NOT NULL,
  `pasport_seriya` varchar(255) NOT NULL,
  `pasport_nomer` varchar(255) NOT NULL,
  `pasport_kem_vydan` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Дамп данных таблицы `Contracts`
--

INSERT INTO `Contracts` (`id`, `user_id`, `famil`, `imya`, `ot4estvo`, `adres_reg_po_pasporty`, `pasport_seriya`, `pasport_nomer`, `pasport_kem_vydan`, `phone`) VALUES
(27, 21, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(39, 32, 'Мельников', 'Виктор', 'Игоревич', 'Адрес регистрации по паспорту', '123123', '11231231', 'ОВД ЧЕРТАНОВО', '8 (312) 312-31-21'),
(40, 33, 'Москва', 'Москва', 'Москва', 'г. Москва, ул. Одесская, д.15, кв. 64', 'Москва', 'Москва', 'Москва', '79299816349');

-- --------------------------------------------------------

--
-- Структура таблицы `Educations`
--

CREATE TABLE IF NOT EXISTS `Educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obrazovanie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Дамп данных таблицы `Educations`
--

INSERT INTO `Educations` (`id`, `obrazovanie`) VALUES
(1, 'Высшее'),
(2, 'Среднее'),
(12, 'фывфывф'),
(13, 'вфывфыв'),
(16, '123123123'),
(17, '123123'),
(18, 'lol'),
(19, 'lol'),
(28, 'lol'),
(29, 'lol'),
(70, 'asd');

-- --------------------------------------------------------

--
-- Структура таблицы `Groups`
--

CREATE TABLE IF NOT EXISTS `Groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `Groups`
--

INSERT INTO `Groups` (`id`, `name`) VALUES
(1, 'Группа1'),
(2, 'Группа2');

-- --------------------------------------------------------

--
-- Структура таблицы `Messages`
--

CREATE TABLE IF NOT EXISTS `Messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `is_read` int(11) NOT NULL DEFAULT '0',
  `title_id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=142 ;

--
-- Дамп данных таблицы `Messages`
--

INSERT INTO `Messages` (`id`, `user_id`, `admin`, `message`, `is_read`, `title_id`, `datetime`) VALUES
(16, 21, 0, '123', 0, 22, '2013-11-13 20:57:58'),
(17, 21, 1, '123', 0, 23, '2013-11-13 20:58:42'),
(18, 21, 0, 'ololo', 0, 24, '2013-11-13 20:58:07'),
(19, 21, 1, 'axa', 0, 25, '2013-11-13 20:58:32'),
(20, 21, 0, '1', 0, 26, '2013-11-13 21:06:24'),
(21, 21, 0, '3', 0, 27, '2013-11-13 21:06:26'),
(22, 21, 0, '5', 0, 28, '2013-11-13 21:06:28'),
(23, 21, 0, '4', 0, 29, '2013-11-13 21:06:31'),
(24, 21, 0, '2', 0, 30, '2013-11-13 21:06:34'),
(25, 21, 0, 'qwe', 0, 31, '2013-11-13 21:06:36'),
(26, 21, 0, 'jdfhgjfdhg', 0, 32, '2013-11-13 21:06:39'),
(27, 21, 0, '1', 0, 33, '2013-11-13 21:10:14'),
(28, 21, 0, '2', 0, 34, '2013-11-13 21:10:18'),
(29, 21, 0, '3', 0, 35, '2013-11-13 21:10:24'),
(30, 21, 0, '4', 0, 36, '2013-11-13 21:10:27'),
(31, 21, 0, '5', 0, 37, '2013-11-13 21:10:30'),
(32, 21, 0, '6', 0, 38, '2013-11-13 21:10:34'),
(33, 21, 0, '7', 0, 39, '2013-11-13 21:10:39'),
(34, 21, 0, '8', 0, 40, '2013-11-13 21:10:43'),
(35, 21, 0, '9', 0, 41, '2013-11-13 21:10:46'),
(36, 21, 0, '10', 0, 42, '2013-11-13 21:10:51'),
(37, 21, 0, '123123', 0, 43, '2013-11-13 21:27:39'),
(38, 21, 0, 'lololo', 0, 44, '2013-11-13 23:27:44'),
(39, 21, 0, 'sdfds', 0, 45, '2013-11-13 23:29:51'),
(40, 21, 0, 'лвалваоп', 0, 46, '2013-11-14 16:16:32'),
(41, 21, 0, 'лвалваоп', 0, 47, '2013-11-14 16:16:32'),
(42, 21, 0, 'лвалваоп', 0, 49, '2013-11-14 16:16:32'),
(43, 21, 0, 'лвалваоп', 0, 48, '2013-11-14 16:16:32'),
(44, 21, 0, 'лвалваоп', 0, 50, '2013-11-14 16:16:32'),
(45, 21, 0, '123', 0, 51, '2013-11-14 16:43:43'),
(46, 21, 0, '123', 0, 52, '2013-11-14 16:43:43'),
(47, 21, 0, 'ырвап', 0, 53, '2013-11-14 16:45:02'),
(48, 21, 0, 'ырвап', 0, 54, '2013-11-14 16:45:03'),
(49, 21, 0, 'ырвап', 0, 55, '2013-11-14 16:45:03'),
(50, 21, 0, 'ырвап', 0, 56, '2013-11-14 16:45:03'),
(51, 21, 0, 'ырвап', 0, 57, '2013-11-14 16:45:04'),
(52, 21, 0, 'ырвап', 0, 58, '2013-11-14 16:45:04'),
(53, 21, 0, 'ырвап', 0, 59, '2013-11-14 16:45:13'),
(54, 21, 0, 'ырвап', 0, 60, '2013-11-14 16:45:13'),
(55, 21, 0, '1', 0, 61, '2013-11-14 17:34:02'),
(56, 21, 0, '1', 0, 62, '2013-11-14 17:34:09'),
(57, 21, 0, '1', 0, 63, '2013-11-14 17:34:09'),
(58, 21, 0, '1', 0, 64, '2013-11-14 17:42:53'),
(59, 21, 0, '1', 0, 65, '2013-11-14 17:42:53'),
(60, 21, 0, 'qwe', 0, 66, '2013-11-14 17:43:10'),
(61, 21, 0, 'qwe', 0, 67, '2013-11-14 17:43:10'),
(62, 21, 0, 'qwe123', 0, 68, '2013-11-14 17:44:12'),
(63, 21, 0, '123', 0, 69, '2013-11-14 17:45:21'),
(64, 21, 0, '123', 0, 70, '2013-11-14 17:45:21'),
(65, 21, 0, '123123', 0, 71, '2013-11-14 17:46:15'),
(66, 21, 0, '123123', 0, 72, '2013-11-14 17:46:15'),
(67, 21, 0, 'sdasd', 0, 73, '2013-11-14 17:47:46'),
(68, 21, 0, 'sdasd', 0, 74, '2013-11-14 17:47:46'),
(69, 21, 0, '123', 0, 75, '2013-11-14 17:48:20'),
(70, 21, 0, '123', 0, 76, '2013-11-14 17:48:41'),
(71, 21, 0, '123', 0, 77, '2013-11-14 17:48:42'),
(72, 21, 0, '123', 0, 78, '2013-11-14 17:48:43'),
(73, 21, 0, '123', 0, 79, '2013-11-14 17:48:43'),
(74, 21, 0, '1', 0, 80, '2013-11-14 18:09:03'),
(75, 21, 0, '1', 0, 81, '2013-11-14 18:09:04'),
(76, 21, 0, '1', 0, 82, '2013-11-14 18:09:05'),
(77, 21, 0, '1', 0, 83, '2013-11-14 18:09:06'),
(78, 21, 0, '1', 0, 84, '2013-11-14 18:09:07'),
(79, 21, 0, '1', 0, 85, '2013-11-14 18:09:08'),
(80, 21, 0, '1', 0, 86, '2013-11-14 18:09:13'),
(81, 21, 0, '1', 0, 87, '2013-11-14 18:09:15'),
(82, 21, 0, '1', 0, 88, '2013-11-14 18:09:15'),
(83, 21, 0, '1', 0, 89, '2013-11-14 18:09:42'),
(84, 21, 0, '1', 0, 90, '2013-11-14 18:09:44'),
(85, 21, 0, '1', 0, 91, '2013-11-14 18:09:44'),
(86, 21, 0, '1', 0, 92, '2013-11-14 18:09:45'),
(87, 21, 0, 'qwe', 0, 93, '2013-11-14 18:12:55'),
(88, 21, 0, 'qwe', 0, 94, '2013-11-14 18:12:56'),
(89, 21, 0, 'qwe', 0, 95, '2013-11-14 18:12:57'),
(90, 21, 0, 'qwe', 0, 96, '2013-11-14 18:12:57'),
(91, 21, 0, 'jdfsdkf', 0, 97, '2013-11-14 18:18:06'),
(92, 21, 0, 'jdfsdkf', 0, 98, '2013-11-14 18:18:07'),
(93, 21, 0, 'jdfsdkf', 0, 99, '2013-11-14 18:18:08'),
(94, 21, 0, 'sdf', 0, 100, '2013-11-14 18:18:43'),
(95, 21, 0, 'sdf', 0, 101, '2013-11-14 18:18:43'),
(96, 21, 0, 'sdf', 0, 102, '2013-11-14 18:18:44'),
(97, 21, 0, 'kfgjdkfjg', 0, 103, '2013-11-14 18:19:19'),
(98, 21, 0, 'kfgjdkfjg', 0, 104, '2013-11-14 18:19:20'),
(99, 21, 0, 'kfgjdkfjg', 0, 105, '2013-11-14 18:19:21'),
(100, 21, 0, 'kfgjdkfjg', 0, 106, '2013-11-14 18:19:22'),
(101, 21, 0, '123123123', 0, 107, '2013-11-14 18:20:18'),
(102, 21, 0, '123123123', 0, 108, '2013-11-14 18:20:19'),
(103, 21, 0, '123123123', 0, 109, '2013-11-14 18:20:20'),
(104, 21, 0, '123', 0, 110, '2013-11-14 18:29:06'),
(105, 21, 0, 'ыовраоывра', 0, 111, '2013-11-14 18:34:06'),
(106, 21, 0, '123123123', 0, 112, '2013-11-14 18:34:29'),
(107, 21, 0, '123123', 0, 113, '2013-11-14 19:38:53'),
(108, 21, 0, '12', 0, 114, '2013-11-14 19:39:10'),
(109, 21, 0, '123', 0, 115, '2013-11-14 19:39:25'),
(110, 21, 0, '12312', 0, 116, '2013-11-14 19:42:23'),
(111, 21, 0, '123', 0, 117, '2013-11-14 19:45:17'),
(112, 21, 0, '123', 0, 118, '2013-11-14 19:45:22'),
(113, 21, 0, '123', 0, 119, '2013-11-14 19:47:50'),
(114, 21, 0, '123', 0, 120, '2013-11-14 19:47:51'),
(115, 21, 0, '123', 0, 121, '2013-11-14 19:47:52'),
(116, 21, 0, '123', 0, 122, '2013-11-14 19:47:53'),
(117, 21, 0, '123', 0, 123, '2013-11-14 19:47:54'),
(118, 21, 0, '123', 0, 124, '2013-11-14 19:47:55'),
(119, 21, 0, '123', 0, 125, '2013-11-14 19:48:00'),
(120, 21, 0, 'ывоарывоар', 0, 126, '2013-11-14 19:48:33'),
(121, 21, 0, '123', 0, 127, '2013-11-15 16:53:38'),
(122, 21, 0, '123123', 0, 0, '2013-11-15 19:10:21'),
(123, 21, 0, '123', 0, 0, '2013-11-15 19:10:53'),
(124, 21, 0, 'ывиавыра', 0, 0, '2013-11-15 19:11:32'),
(125, 21, 0, 'qwe', 0, 127, '2013-11-15 19:13:36'),
(126, 21, 0, 'qweqweqwe', 0, 127, '2013-11-15 19:18:37'),
(127, 21, 0, 'здрасте', 0, 128, '2013-11-15 19:19:31'),
(128, 21, 0, 'ёпт', 0, 129, '2013-11-15 19:21:27'),
(129, 21, 0, '123', 0, 129, '2013-11-15 19:21:36'),
(130, 21, 0, 'ололо', 0, 130, '2013-11-15 19:22:14'),
(131, 21, 0, '123', 0, 130, '2013-11-15 19:22:20'),
(132, 21, 0, 'орывар', 0, 130, '2013-11-15 19:22:50'),
(133, 21, 0, '123', 0, 130, '2013-11-15 19:28:54'),
(134, 21, 0, 'азаза', 0, 130, '2013-11-15 19:30:03'),
(135, 21, 0, 'привет', 0, 130, '2013-11-15 19:30:25'),
(136, 21, 0, 'лрпароодропр', 0, 131, '2013-11-15 19:35:02'),
(137, 21, 0, '123', 0, 131, '2013-11-15 19:35:09'),
(138, 21, 0, 'ололо', 0, 116, '2013-11-15 19:37:28'),
(139, 21, 0, 'здрасте', 0, 132, '2013-11-15 19:37:52'),
(140, 21, 0, 'хотел узнать, а вы хуйло???', 0, 132, '2013-11-15 19:38:02'),
(141, 21, 0, '123', 0, 133, '2013-11-15 19:38:57');

-- --------------------------------------------------------

--
-- Структура таблицы `MsgTemplates`
--

CREATE TABLE IF NOT EXISTS `MsgTemplates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `MsgTemplates`
--

INSERT INTO `MsgTemplates` (`id`, `title`, `message`, `author`, `time`, `date`) VALUES
(1, 'asas11', 'asdas1111', 'Alexey Petrov', '17:09:53', '2013-06-14'),
(9, 'dasda', 'asdasdasd', 'Alexey Petrov', '14:36:58', '2013-05-15'),
(11, 'qweqweff', 'qweqwegdhfjh', 'Viktor Melnikov', '11:53:11', '2013-05-16'),
(12, '<script>alert(''asd'')</script>', '&lt;script&gt;alert(''asd'')&lt;/script&gt;', 'Viktor Melnikov', '21:54:53', '2013-05-15'),
(13, 'alert', '&lt;script&gt;alert', 'Viktor Melnikov', '21:56:02', '2013-05-15');

-- --------------------------------------------------------

--
-- Структура таблицы `Nationality`
--

CREATE TABLE IF NOT EXISTS `Nationality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grajdanstvo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `Nationality`
--

INSERT INTO `Nationality` (`id`, `grajdanstvo`) VALUES
(1, 'РФ'),
(2, 'РБ');

-- --------------------------------------------------------

--
-- Структура таблицы `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `message` varchar(900) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `News`
--

INSERT INTO `News` (`id`, `title`, `message`, `group_id`) VALUES
(1, 'Заголовок для группы1, номер 1', 'Много всяких новостей для группы1', 1),
(2, 'Заголовок для группы2, номер 1', 'группа2 говорит Бла блаб лаб лабалабалабалабалабл ', 2),
(3, 'Заголовок для группы1, номер 2', 'asdasdasdasdasdasdasdasdasdasdasdasd fja9sfywn m ihfasfhw gsgf8safg as fas fisghfwgfsh shfg8fwfg', 1),
(4, 'Заголовок для группы1, номер 3', 'ыдл о арцр алар8а л ыврыр нг ролыар 0ацг ываы щышагн ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Settings`
--

CREATE TABLE IF NOT EXISTS `Settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(900) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `Settings`
--

INSERT INTO `Settings` (`id`, `name`, `value`) VALUES
(1, 'smtp', '0'),
(2, 'admin_avatar', 'img/admin_avatar.png');

-- --------------------------------------------------------

--
-- Структура таблицы `Statements`
--

CREATE TABLE IF NOT EXISTS `Statements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `famil` varchar(255) NOT NULL,
  `imya` varchar(255) NOT NULL,
  `ot4estvo` varchar(255) NOT NULL,
  `data_rojdeniya` varchar(255) NOT NULL,
  `mesto_rojdeniya` varchar(255) NOT NULL,
  `adres_reg_po_pasporty` varchar(255) NOT NULL,
  `vrem_reg` varchar(255) NOT NULL,
  `pasport_seriya` varchar(255) NOT NULL,
  `pasport_nomer` varchar(255) NOT NULL,
  `pasport_data_vyda4i` varchar(255) NOT NULL,
  `pasport_kem_vydan` varchar(255) NOT NULL,
  `mob_tel` varchar(255) NOT NULL,
  `dom_tel` varchar(255) NOT NULL,
  `mesto_raboty` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- Дамп данных таблицы `Statements`
--

INSERT INTO `Statements` (`id`, `user_id`, `famil`, `imya`, `ot4estvo`, `data_rojdeniya`, `mesto_rojdeniya`, `adres_reg_po_pasporty`, `vrem_reg`, `pasport_seriya`, `pasport_nomer`, `pasport_data_vyda4i`, `pasport_kem_vydan`, `mob_tel`, `dom_tel`, `mesto_raboty`, `about`, `nationality_id`, `education_id`) VALUES
(27, 21, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '10238102487', 'Гендиректор ООО АэроТрансКарго', 'Интернет', 1, 1),
(73, 32, 'Мельников', 'Виктор', 'Игорев', '08.10.1980', 'Москва', 'Адрес регистрации по паспорту', '', '123123', '11231231', '02.10.2013', 'ОВД ЧЕРТАНОВО', '8 (312) 312-31-21', '8 (123) 123-12-31', 'Фриланс', 'Интернет', 1, 1),
(74, 33, 'ыва', 'Москва', 'Москва', '07.08.1994', 'Москва', 'г. Москва, ул. Одесская, д.15, кв. 64', '', 'Москва', 'Москва', 'Москва', 'Москва', '79299816349', 'Москва', 'Москва', 'Интернет', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Titles`
--

CREATE TABLE IF NOT EXISTS `Titles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=134 ;

--
-- Дамп данных таблицы `Titles`
--

INSERT INTO `Titles` (`id`, `title`, `user_id`) VALUES
(22, '123', 21),
(23, 'azaza', 21),
(24, 'azaza', 21),
(25, 'azaza1', 21),
(26, '1', 21),
(27, '1', 21),
(28, '1', 21),
(29, '1', 21),
(30, '1', 21),
(31, '1', 21),
(32, '1', 21),
(33, '1', 21),
(34, '2', 21),
(35, '3', 21),
(36, '4', 21),
(37, '5', 21),
(38, '6', 21),
(39, '7', 21),
(40, '8', 21),
(41, '9', 21),
(42, '10', 21),
(43, '123123', 21),
(44, 'ololo', 21),
(45, 'dsfsdf', 21),
(46, '121', 21),
(47, '121', 21),
(48, '121', 21),
(49, '121', 21),
(50, '121', 21),
(51, '123', 21),
(52, '123', 21),
(53, 'ывапр', 21),
(54, 'ывапр', 21),
(55, 'ывапр', 21),
(56, 'ывапр', 21),
(57, 'ывапр', 21),
(58, 'ывапр', 21),
(59, 'ывапр', 21),
(60, 'ывапр', 21),
(61, '1', 21),
(62, '1', 21),
(63, '1', 21),
(64, '1', 21),
(65, '1', 21),
(66, 'qwe', 21),
(67, 'qwe', 21),
(68, 'qwe', 21),
(69, 'qwe', 21),
(70, 'qwe', 21),
(71, '123123', 21),
(72, '123123', 21),
(73, 'asdasd', 21),
(74, 'asdasd', 21),
(75, '123', 21),
(76, '123', 21),
(77, '123', 21),
(78, '123', 21),
(79, '123', 21),
(80, '1', 21),
(81, '1', 21),
(82, '1', 21),
(83, '1', 21),
(84, '1', 21),
(85, '1', 21),
(86, '1', 21),
(87, '1', 21),
(88, '1', 21),
(89, '1', 21),
(90, '1', 21),
(91, '1', 21),
(92, '1', 21),
(93, 'qwe', 21),
(94, 'qwe', 21),
(95, 'qwe', 21),
(96, 'qwe', 21),
(97, 'jsdf', 21),
(98, 'jsdf', 21),
(99, 'jsdf', 21),
(100, 'wer', 21),
(101, 'wer', 21),
(102, 'wer', 21),
(103, 'fkgfk', 21),
(104, 'fkgfk', 21),
(105, 'fkgfk', 21),
(106, 'fkgfk', 21),
(107, '123123', 21),
(108, '123123', 21),
(109, '123123', 21),
(110, '123', 21),
(111, 'выоаоывраор', 21),
(112, '123123', 21),
(113, '123', 21),
(114, '123', 21),
(115, '123', 21),
(116, '123123', 21),
(117, '123', 21),
(118, '123', 21),
(119, '123', 21),
(120, '123', 21),
(121, '123', 21),
(122, '123', 21),
(123, '123', 21),
(124, '123', 21),
(125, '123', 21),
(126, 'ывоарывоар', 21),
(127, '123', 21),
(128, 'привет', 21),
(129, 'ку', 21),
(130, 'азаза', 21),
(131, 'оннгенаолргелд', 21),
(132, 'привет', 21),
(133, 'куку', 21);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `is_approved` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `photo`, `password`, `email`, `group_id`, `status`, `is_approved`) VALUES
(21, 'https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg', 'd7d08d38a9afca0ddce06ac13992447f949fa6cc1d801ed2c88aa4f385fc21c9', 'roquie0@gmail.com', 1, 0, 0),
(32, 'https://lh5.googleusercontent.com/-sUhzn4o5Wc4/AAAAAAAAAAI/AAAAAAAAFuI/3UlHj3ZH2NA/photo.jpg', 'd7d08d38a9afca0ddce06ac13992447f949fa6cc1d801ed2c88aa4f385fc21c9', 'vik.melnikov@gmail.com', 0, 0, 0),
(33, 'http://cs540108.vk.me/c613418/v613418574/9cf/aqZjHR1Omao.jpg', '572121a19f5251e271535cd510e4e969eea431f765c1f39690c8721a68739d8a', 'viktor.melnikov.93@mail.ru', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
