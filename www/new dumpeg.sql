-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2013 at 04:17 AM
-- Server version: 5.5.33
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mpt_auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administrators`
--

CREATE TABLE `Administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(130) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `Administrators`
--

INSERT INTO `Administrators` (`id`, `email`, `datetime`) VALUES
(7, 'roquie0@gmail.com', '2013-10-01 23:12:24'),
(24, 'vik.melnikov@gmail.com', '2013-10-14 19:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `Contracts`
--

CREATE TABLE `Contracts` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `Contracts`
--

INSERT INTO `Contracts` (`id`, `user_id`, `famil`, `imya`, `ot4estvo`, `adres_reg_po_pasporty`, `pasport_seriya`, `pasport_nomer`, `pasport_kem_vydan`, `phone`) VALUES
(27, 21, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(39, 32, 'Мельников', 'Виктор', 'Игоревич', 'Адрес регистрации по паспорту', '123123', '11231231', 'ОВД ЧЕРТАНОВО', '8 (312) 312-31-21'),
(40, 33, 'Москва', 'Москва', 'Москва', 'г. Москва, ул. Одесская, д.15, кв. 64', 'Москва', 'Москва', 'Москва', '79299816349');

-- --------------------------------------------------------

--
-- Table structure for table `Educations`
--

CREATE TABLE `Educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obrazovanie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `Educations`
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
-- Table structure for table `Groups`
--

CREATE TABLE `Groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Groups`
--

INSERT INTO `Groups` (`id`, `name`) VALUES
(1, 'Группа1'),
(2, 'Группа2');

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`id`, `user_id`, `admin`, `message`, `datetime`) VALUES
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
(11, 32, 0, 'приветик )', '2013-10-26 15:21:01'),
(12, 21, 0, 'ываыва', '2013-11-09 00:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `MsgTemplates`
--

CREATE TABLE `MsgTemplates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `MsgTemplates`
--

INSERT INTO `MsgTemplates` (`id`, `title`, `message`, `author`, `time`, `date`) VALUES
(1, 'asas11', 'asdas1111', 'Alexey Petrov', '17:09:53', '2013-06-14'),
(9, 'dasda', 'asdasdasd', 'Alexey Petrov', '14:36:58', '2013-05-15'),
(11, 'qweqweff', 'qweqwegdhfjh', 'Viktor Melnikov', '11:53:11', '2013-05-16'),
(12, '<script>alert(''asd'')</script>', '&lt;script&gt;alert(''asd'')&lt;/script&gt;', 'Viktor Melnikov', '21:54:53', '2013-05-15'),
(13, 'alert', '&lt;script&gt;alert', 'Viktor Melnikov', '21:56:02', '2013-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `Nationality`
--

CREATE TABLE `Nationality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grajdanstvo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Nationality`
--

INSERT INTO `Nationality` (`id`, `grajdanstvo`) VALUES
(1, 'РФ'),
(2, 'РБ');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `message` varchar(900) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id`, `title`, `message`, `group_id`) VALUES
(1, 'Заголовок для группы1, номер 1', 'Много всяких новостей для группы1', 1),
(2, 'Заголовок для группы2, номер 1', 'группа2 говорит Бла блаб лаб лабалабалабалабалабл ', 2),
(3, 'Заголовок для группы1, номер 2', 'asdasdasdasdasdasdasdasdasdasdasdasd fja9sfywn m ihfasfhw gsgf8safg as fas fisghfwgfsh shfg8fwfg', 1),
(4, 'Заголовок для группы1, номер 3', 'ыдл о арцр алар8а л ыврыр нг ролыар 0ацг ываы щышагн ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Settings`
--

CREATE TABLE `Settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(900) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`id`, `name`, `value`) VALUES
(1, 'smtp', '0');

-- --------------------------------------------------------

--
-- Table structure for table `Statements`
--

CREATE TABLE `Statements` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `Statements`
--

INSERT INTO `Statements` (`id`, `user_id`, `famil`, `imya`, `ot4estvo`, `data_rojdeniya`, `mesto_rojdeniya`, `adres_reg_po_pasporty`, `vrem_reg`, `pasport_seriya`, `pasport_nomer`, `pasport_data_vyda4i`, `pasport_kem_vydan`, `mob_tel`, `dom_tel`, `mesto_raboty`, `about`, `nationality_id`, `education_id`) VALUES
(27, 21, 'Петров', 'Сидр', 'Сидорович', '01.01.1974', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '10238102487', 'Гендиректор ООО АэроТрансКарго', 'Интернет', 1, 1),
(73, 32, 'Мельников', 'Виктор', 'Игоревич', '08.10.1980', 'Москва', 'Адрес регистрации по паспорту', '', '123123', '11231231', '02.10.2013', 'ОВД ЧЕРТАНОВО', '8 (312) 312-31-21', '8 (123) 123-12-31', 'Фриланс', 'Интернет', 1, 1),
(74, 33, 'ыва', 'Москва', 'Москва', '07.08.1994', 'Москва', 'г. Москва, ул. Одесская, д.15, кв. 64', '', 'Москва', 'Москва', 'Москва', 'Москва', '79299816349', 'Москва', 'Москва', 'Интернет', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `is_approved` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `photo`, `password`, `email`, `group_id`, `is_approved`) VALUES
(21, 'https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg', '959680866c12e03e4c8bc4a24bcc52379511d3df064b6811a4116d3fb853b8d2', 'roquie0@gmail.com', 1, 0),
(32, 'https://lh5.googleusercontent.com/-sUhzn4o5Wc4/AAAAAAAAAAI/AAAAAAAAFuI/3UlHj3ZH2NA/photo.jpg', 'd7d08d38a9afca0ddce06ac13992447f949fa6cc1d801ed2c88aa4f385fc21c9', 'vik.melnikov@gmail.com', 0, 0),
(33, 'http://cs540108.vk.me/c613418/v613418574/9cf/aqZjHR1Omao.jpg', '572121a19f5251e271535cd510e4e969eea431f765c1f39690c8721a68739d8a', 'viktor.melnikov.93@mail.ru', 0, 0);
