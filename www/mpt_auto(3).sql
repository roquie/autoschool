-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 25 2013 г., 01:50
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `Contracts`
--

INSERT INTO `Contracts` (`id`, `famil`, `imya`, `ot4estvo`, `adres_reg_po_pasporty`, `pasport_seriya`, `pasport_nomer`, `pasport_kem_vydan`, `phone`) VALUES
(15, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(16, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(17, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(18, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(19, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(20, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(21, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(22, 'Петрова123', 'Анастасия12', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550');

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
-- Структура таблицы `PreRegs`
--

CREATE TABLE IF NOT EXISTS `PreRegs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `PreRegs`
--

INSERT INTO `PreRegs` (`id`, `email`) VALUES
(4, 'qewqe@gmail.com'),
(5, 'evgstogov391@gmail.com'),
(6, 'gfgdfd@gmail.com'),
(7, 'roquie0q@gmail.com');

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
  `grajdanstvo` varchar(255) NOT NULL,
  `mesto_rojdeniya` varchar(255) NOT NULL,
  `adres_reg_po_pasporty` varchar(255) NOT NULL,
  `vrem_reg` varchar(255) NOT NULL,
  `pasport_seriya` varchar(255) NOT NULL,
  `pasport_nomer` varchar(255) NOT NULL,
  `pasport_data_vyda4i` varchar(255) NOT NULL,
  `pasport_kem_vydan` varchar(255) NOT NULL,
  `mob_tel` varchar(255) NOT NULL,
  `dom_tel` varchar(255) NOT NULL,
  `obrazovanie` varchar(255) NOT NULL,
  `mesto_raboty` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `Statements`
--

INSERT INTO `Statements` (`id`, `famil`, `imya`, `ot4estvo`, `data_rojdeniya`, `grajdanstvo`, `mesto_rojdeniya`, `adres_reg_po_pasporty`, `vrem_reg`, `pasport_seriya`, `pasport_nomer`, `pasport_data_vyda4i`, `pasport_kem_vydan`, `mob_tel`, `dom_tel`, `obrazovanie`, `mesto_raboty`, `about`) VALUES
(18, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'РФ', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Высшее...', 'Гендиректор ООО АэроТрансКарго', 'Интернет11'),
(19, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'РФ', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Высшее...', 'Гендиректор ООО АэроТрансКарго', 'Интернет'),
(20, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'РФ', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Высшее...', 'Гендиректор ООО АэроТрансКарго', 'Интернет'),
(21, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'РФ', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Высшее...', 'Гендиректор ООО АэроТрансКарго', 'Интернет'),
(22, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'РФ', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Высшее...', 'Гендиректор ООО АэроТрансКарго', 'Интернет'),
(23, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'РФ', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Высшее...', 'Гендиректор ООО АэроТрансКарго', 'Интернет'),
(24, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'РФ', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Высшее...', 'Гендиректор ООО АэроТрансКарго', 'Интернет'),
(25, 'Петров11', 'Сидр111', 'Сидорович11', '01.01.1974', 'РФ', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '', 'Высшее...', 'Гендиректор ООО АэроТрансКарго', 'Интернет');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `photo`, `password`, `email`, `Statement_id`, `Contract_id`) VALUES
(12, 'img/photo.jpg', '959680866c12e03e4c8bc4a24bcc52379511d3df064b6811a4116d3fb853b8d2', 'lol@lol.ru', 18, 15),
(13, 'https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg?size=100', '959680866c12e03e4c8bc4a24bcc52379511d3df064b6811a4116d3fb853b8d2', 'roquie0@gmail.com', 19, 16),
(19, 'http://avt.appsmail.ru/bk/asfull/_avatar', 'b66aaf53f30c5aa9e620cd18330fce71bffd52ce39fd32e0e0fe992008e10f43', 'asfull@bk.ru', 25, 22);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
