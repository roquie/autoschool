-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 06 2013 г., 21:03
-- Версия сервера: 5.1.67-community-log
-- Версия PHP: 5.4.11

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
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `Administrators`
--

INSERT INTO `Administrators` (`id`, `email`, `datetime`) VALUES
(4, 'qewqe@gmail.com', '2013-10-09 04:21:00'),
(5, 'evgstogov391@gmail.com', '2013-10-11 02:19:42'),
(6, 'gfgdfd@gmail.com', '2013-10-02 15:15:23'),
(7, 'roquie0q@gmail.com', '2013-10-02 03:12:24'),
(8, 'lalkatest1', '2013-10-08 02:03:51'),
(10, 'lalkatest3', '2013-10-08 02:03:51'),
(11, 'lalkatest4', '2013-10-24 05:37:10'),
(12, 'lalkatest5', '2013-10-08 02:03:51'),
(13, 'lalkatest6', '2013-10-24 05:37:10'),
(14, 'asd@gmail.com', '0000-00-00 00:00:00'),
(15, 'as2d@gmail.com', '0000-00-00 00:00:00'),
(16, 'aswed@gmail.com', '2013-10-02 20:09:59'),
(17, 'aswewwd@gmail.com', '2013-10-02 20:37:15'),
(18, 'aswewwdl@gmail.com', '2013-10-02 20:48:07');

-- --------------------------------------------------------

--
-- Структура таблицы `Contracts`
--

CREATE TABLE IF NOT EXISTS `Contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `famil` varchar(255) NOT NULL,
  `imya` varchar(255) NOT NULL,
  `ot4estvo` varchar(255) NOT NULL,
  `adres_reg_po_pasporty` varchar(255) NOT NULL,
  `pasport_seriya` varchar(255) NOT NULL,
  `pasport_nomer` varchar(255) NOT NULL,
  `pasport_kem_vydan` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Дамп данных таблицы `Contracts`
--

INSERT INTO `Contracts` (`id`, `famil`, `imya`, `ot4estvo`, `adres_reg_po_pasporty`, `pasport_seriya`, `pasport_nomer`, `pasport_kem_vydan`, `phone`) VALUES
(18, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(24, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(25, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(26, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(29, 'asd', 'asd', 'asd', 'asdasd', '123123', '1231123', 'asdasd', '8 (131) 231-23-12'),
(30, 'weq', 'eqweqweq', 'qweqwe', 'qweqweqwe', '3123123', '123123', '1231231', '8 (231) 231-23-12');

-- --------------------------------------------------------

--
-- Структура таблицы `Educations`
--

CREATE TABLE IF NOT EXISTS `Educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obrazovanie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `Educations`
--

INSERT INTO `Educations` (`id`, `obrazovanie`) VALUES
(1, 'Высшее'),
(2, 'Среднее');

-- --------------------------------------------------------

--
-- Структура таблицы `GoogleAccounts`
--

CREATE TABLE IF NOT EXISTS `GoogleAccounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `GoogleAccounts`
--

INSERT INTO `GoogleAccounts` (`id`, `login`, `password`, `time`, `date`) VALUES
(1, 'roquie0@gmail.com', 'asdasd', '00:00:01', '0000-00-00'),
(2, 'vik.melnikov@gmail.com', 'qweqwe', '00:00:01', '0000-00-00'),
(3, 'example@gmail.com', 'asdasdasdasdasdasdasd', '21:19:00', '2013-05-12'),
(4, 'roquie0@GMAIL.COM', 'asdasdasdasdasdasdasd', '21:26:00', '2013-05-12'),
(5, 'roquie0@GMAIL.COM', 'sadasdasdasd', '21:26:00', '2013-05-12'),
(6, 'coolt713@gmail.com', 'asdasdasdasd', '21:28:00', '2013-05-12'),
(7, 'example@gmail.com', 'asdasdasdasd', '21:29:00', '2013-05-12'),
(8, 'example1111@gmail.com', 'asdasdasdasd', '21:30:00', '2013-05-12'),
(9, 'example@gmail.com', 'asdasdasdasd', '21:31:00', '2013-05-12'),
(10, 'roquie0@gmail.com', 'vjqgfhjkm', '21:32:00', '2013-05-12');

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
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `param` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Statements`
--

CREATE TABLE IF NOT EXISTS `Statements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `Statements`
--

INSERT INTO `Statements` (`id`, `famil`, `imya`, `ot4estvo`, `data_rojdeniya`, `mesto_rojdeniya`, `adres_reg_po_pasporty`, `vrem_reg`, `pasport_seriya`, `pasport_nomer`, `pasport_data_vyda4i`, `pasport_kem_vydan`, `mob_tel`, `dom_tel`, `mesto_raboty`, `about`, `nationality_id`, `education_id`) VALUES
(18, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Гендиректор ООО АэроТрансКарго', 'Интернет11', 1, 1),
(27, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Гендиректор ООО АэроТрансКарго', 'Интернет', 1, 1),
(28, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Гендиректор ООО АэроТрансКарго', 'Интернет', 2, 2),
(29, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Гендиректор ООО АэроТрансКарго', 'Интернет', 2, 2),
(32, 'asd', 'asd', 'asd', '08.10.1976', 'asdasd', 'asdasd', '', '123123', '1231123', '03.10.2013', 'asdasd', '8 (131) 231-23-12', '8 (123) 123-12-31', 'adasad', 'Листовка у метро', 0, 0),
(33, 'weq', 'eqweqweq', 'qweqwe', '07.10.1977', 'qweqwe', 'qweqweqwe', '', '3123123', '123123', '03.10.2013', '1231231', '8 (231) 231-23-12', '8 (123) 123-12-31', '123123', 'Знакомые', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Statement_id` int(10) unsigned NOT NULL,
  `Contract_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `photo`, `password`, `email`, `Statement_id`, `Contract_id`) VALUES
(12, 'img/photo.jpg', '959680866c12e03e4c8bc4a24bcc52379511d3df064b6811a4116d3fb853b8d2', 'lol@lol.ru', 18, 15),
(21, 'https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg', '1e572e617b05bbf19431f271ca47fc43b5ed973b5f376731b0a81579998f3cfc', 'roquie0@gmail.com', 27, 24),
(22, 'http://avt.appsmail.ru/bk/asfull/_avatarbig', 'c7bd9ce1812a352459573b9152804504dc567a2ec5d995a2a040f3c82ad9865f', 'asfull1@bk.ru', 29, 26),
(25, 'http://avt.appsmail.ru/bk/asfull/_avatarbig', '4ea8df2e4fceca768afb325594ac8a9d151fc7103600c524e0dbfe8b9ac5f189', 'asfull3@bk.ru', 32, 29),
(26, 'http://avt.appsmail.ru/bk/asfull/_avatarbig', '0db37c262e89a58d4208447083de96b32b956657a96f0ef6c1f10dd4619e6e7a', 'asfull@bk.ru', 33, 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
