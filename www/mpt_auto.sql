-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 23 2013 г., 20:18
-- Версия сервера: 5.5.30-log
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `PreRegs`
--

INSERT INTO `PreRegs` (`id`, `email`) VALUES
(4, 'qewqe@gmail.com'),
(5, 'evgstogov391@gmail.com'),
(6, 'gfgdfd@gmail.com');

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
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(200) NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `first_name`, `last_name`, `email`, `photo`) VALUES
(3, 'Иван121', 'Иванов', 'email2@gmail.com', ''),
(4, 'Петр', 'Петров', 'email3@gmail.com', ''),
(20, 'Alexey', 'Petrov', 'roquie0@gmail.com', 'https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg'),
(21, 'Viktor', 'Melnikov', 'vik.melnikov@gmail.com', '/public/img/photo.jpg'),
(22, 'Александр111', 'Беляков4', 'coolt713@gmail.com', '/public/img/photo.jpg'),
(23, 'Сергей', 'Караваев', 'karavaykaravay@gmail.com', 'http://roquie.tk/public/img/photo.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
