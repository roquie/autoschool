-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2013 г., 20:24
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
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=68 ;

--
-- Дамп данных таблицы `Administrators`
--

INSERT INTO `Administrators` (`id`, `email`, `datetime`) VALUES
(4, 'qewqe@gmail.com', '2013-10-09 00:21:00'),
(6, 'gfgdfd@gmail.com', '2013-10-02 11:15:23'),
(7, 'roquie0@gmail.com', '2013-10-01 23:12:24'),
(14, 'asd@gmail.com', '0000-00-00 00:00:00'),
(15, 'as2d@gmail.com', '0000-00-00 00:00:00'),
(16, 'aswed@gmail.com', '2013-10-02 16:09:59'),
(17, 'aswewwd@gmail.com', '2013-10-02 16:37:15'),
(18, 'aswewwdl@gmail.com', '2013-10-02 16:48:07'),
(24, 'vik.melnikov@gmail.com', '2013-10-14 19:45:19'),
(31, 'wer111@qwe.ru', '2013-10-14 23:06:11'),
(32, 'wer112321@qwe.ru', '2013-10-14 23:06:32'),
(33, '1@qwe.ru', '2013-10-14 23:06:56'),
(34, '111211@gmail.com', '2013-10-15 00:20:17'),
(35, '5555@gmail.com', '2013-10-15 00:24:44'),
(36, '123@gmail.com', '2013-10-15 00:27:40'),
(37, '123qw@gmail.com', '2013-10-15 00:28:31'),
(60, 'examw1ple@gmail.com', '2013-10-15 21:07:20'),
(61, 'example@gmail.com', '2013-10-20 12:46:58'),
(62, 'example@gmail.com', '2013-10-20 12:47:09'),
(63, 'example@gmail.com', '2013-10-20 12:47:11'),
(64, 'example@gmail.com', '2013-10-20 12:49:15'),
(65, 'example@gmail.com', '2013-10-20 13:03:22'),
(66, 'example123@gmail.com', '2013-10-20 13:10:34'),
(67, 'example1231@gmail.com', '2013-10-20 13:11:58');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Дамп данных таблицы `Contracts`
--

INSERT INTO `Contracts` (`id`, `famil`, `imya`, `ot4estvo`, `adres_reg_po_pasporty`, `pasport_seriya`, `pasport_nomer`, `pasport_kem_vydan`, `phone`) VALUES
(27, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(39, 'Мельников', 'Виктор', 'Игоревич', 'Адрес регистрации по паспорту', '123123', '11231231', 'ОВД ЧЕРТАНОВО', '8 (312) 312-31-21');

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
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `admin`, `message`, `datetime`) VALUES
(1, 21, 0, 'asdasd', '2013-10-20 16:27:05'),
(2, 21, 0, 'asdasd', '2013-10-20 16:27:11'),
(3, 21, 0, 'ohuenno', '2013-10-20 16:27:20'),
(4, 21, 0, 'sam s soboi', '2013-10-20 16:27:29'),
(5, 21, 0, 'фокус не ставится после отправки обратно на поле ввода', '2013-10-20 16:27:52'),
(6, 21, 0, 'хреново', '2013-10-20 16:27:58'),
(7, 21, 0, 'надо фиксить :)', '2013-10-20 16:28:05'),
(8, 21, 0, 'лол скролл', '2013-10-20 16:28:13'),
(9, 21, 0, 'ура', '2013-10-20 16:28:19'),
(10, 21, 0, 'он появился', '2013-10-20 16:28:25'),
(11, 32, 0, 'приветик )', '2013-10-26 15:21:01');

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
-- Структура таблицы `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(900) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'smtp', '0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Дамп данных таблицы `Statements`
--

INSERT INTO `Statements` (`id`, `famil`, `imya`, `ot4estvo`, `data_rojdeniya`, `mesto_rojdeniya`, `adres_reg_po_pasporty`, `vrem_reg`, `pasport_seriya`, `pasport_nomer`, `pasport_data_vyda4i`, `pasport_kem_vydan`, `mob_tel`, `dom_tel`, `mesto_raboty`, `about`, `nationality_id`, `education_id`) VALUES
(27, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '10238102487', 'Гендиректор ООО АэроТрансКарго', 'Интернет', 1, 1),
(73, 'Мельников', 'Виктор', 'Игоревич', '08.10.1980', 'Москва', 'Адрес регистрации по паспорту', '', '123123', '11231231', '02.10.2013', 'ОВД ЧЕРТАНОВО', '8 (312) 312-31-21', '8 (123) 123-12-31', 'Фриланс', 'Интернет', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `statement_id` int(10) unsigned NOT NULL,
  `contract_id` int(10) unsigned NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `is_approved` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `photo`, `password`, `email`, `statement_id`, `contract_id`, `group_id`, `is_approved`) VALUES
(21, 'https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg', '1e572e617b05bbf19431f271ca47fc43b5ed973b5f376731b0a81579998f3cfc', 'roquie0@gmail.com', 27, 27, 1, 0),
(32, 'img/photo.jpg', '401edf0c98803a3637ddd9edcba937304c12cc0e9adf3bfcf1a86ba506689127', 'vik.melnikov@gmail.com', 73, 39, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
