-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2013 at 02:08 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `Administrators`
--

INSERT INTO `Administrators` (`id`, `email`, `datetime`) VALUES
(7, 'roquie0@gmail.com', '2013-10-01 23:12:24'),
(24, 'vik.melnikov@gmail.com', '2013-10-14 19:45:19'),
(28, 'asdaaasdasd@asdas.ads', '2013-11-30 19:29:16'),
(44, '7@asdas.ads', '2013-11-30 19:30:25'),
(45, '721@asdas.ads', '2013-11-30 19:30:28'),
(46, '1@asdas.ads', '2013-11-30 19:30:30'),
(47, '2@asdas.ads', '2013-11-30 19:30:33'),
(48, '3@asdas.ads', '2013-11-30 19:30:34'),
(49, '4@asdas.ads', '2013-11-30 19:30:35'),
(50, '5@asdas.ads', '2013-11-30 19:30:37'),
(51, '6@asdas.ads', '2013-11-30 19:30:38'),
(52, '8@asdas.ads', '2013-11-30 19:30:40');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `Contracts`
--

INSERT INTO `Contracts` (`id`, `user_id`, `famil`, `imya`, `ot4estvo`, `adres_reg_po_pasporty`, `pasport_seriya`, `pasport_nomer`, `pasport_kem_vydan`, `phone`) VALUES
(27, 21, 'Петрова', 'Анастасия', 'Агафьевна', 'г. Москва, ул. Петросяна, д.13, к.9', '4382', '20934820', 'ОВД Г.КАЗАНИ 2', '+79261195550'),
(39, 32, 'Мельников', 'Виктор', 'Игоревич', 'Адрес регистрации по паспорту', '123123', '11231231', 'ОВД ЧЕРТАНОВО', '8 (312) 312-31-21'),
(41, 34, 'ыФВ', 'фыв', 'фывф', 'фывфыв', '31ц', '3цу', 'фвывфыв', '8 (344) 343-43-43');

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
-- Table structure for table `Files`
--

CREATE TABLE `Files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `path` varchar(500) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Files`
--

INSERT INTO `Files` (`id`, `filename`, `desc`, `path`) VALUES
(1, 'Dogovor.doc', 'Файл договора', 'output_blanks/other_files/'),
(2, 'Zaivlenie.doc', 'Файл заявления', 'output_blanks/other_files/f'),
(3, 'kvitanciya.doc', 'Файл квитанции', 'output_blanks/other_files/'),
(4, 'license-0000540.pdf', 'Файл лицензии', 'output_blanks/other_files/'),
(5, 'dogovor.docx', 'Шаблон для договора', 'templates/contract/'),
(6, 'template.docx', 'Шаблон для заявления', 'templates/zayavlenie/'),
(7, 'ticket.docx', 'Шаблон для квитанции', 'templates/ticket/');

-- --------------------------------------------------------

--
-- Table structure for table `Groups`
--

CREATE TABLE `Groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `Groups`
--

INSERT INTO `Groups` (`id`, `name`) VALUES
(1, 'Группа1'),
(2, 'Группа2'),
(7, 'Группа3'),
(8, 'Группа4'),
(9, 'Группа5'),
(10, 'Группа6'),
(11, 'Группа6'),
(12, 'Группа7'),
(13, 'Группа8'),
(14, 'Группа9'),
(16, 'Группа10'),
(17, 'Группа11'),
(18, 'фыв'),
(19, '123');

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `is_read` int(11) NOT NULL DEFAULT '0',
  `title_id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`id`, `user_id`, `admin`, `message`, `is_read`, `title_id`, `datetime`) VALUES
(13, 21, 0, 'sdfsdf', 0, 13, '2013-11-30 13:09:22'),
(14, 21, 0, 'lkasdlkasdlkasd', 0, 13, '2013-11-30 13:09:29'),
(17, 21, 0, 'sdfsdf', 0, 17, '2013-11-30 13:15:05'),
(18, 21, 0, 'zxczx', 0, 18, '2013-11-30 13:18:56'),
(19, 21, 0, 'alert(1111)', 0, 20, '2013-11-30 13:19:25'),
(20, 21, 0, 'ываываы', 0, 20, '2013-11-30 13:26:45'),
(21, 21, 0, 'ывывывыыввы', 0, 21, '2013-11-30 13:26:51');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`id`, `name`, `value`) VALUES
(1, 'smtp', 'a:4:{s:6:"server";s:22:"sslv3://smtp.gmail.com";s:4:"port";s:3:"465";s:5:"login";s:17:"autompt@gmail.com";s:8:"password";s:15:"123qweasdzxc123";}'),
(2, 'admin_avatar', 'img/admin_avatar.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `Statements`
--

INSERT INTO `Statements` (`id`, `user_id`, `famil`, `imya`, `ot4estvo`, `data_rojdeniya`, `mesto_rojdeniya`, `adres_reg_po_pasporty`, `vrem_reg`, `pasport_seriya`, `pasport_nomer`, `pasport_data_vyda4i`, `pasport_kem_vydan`, `mob_tel`, `dom_tel`, `mesto_raboty`, `about`, `nationality_id`, `education_id`) VALUES
(27, 21, 'dsfjgghfasdnnnqwe', 'Hидрwewr', 'Сидорович', '01.01.1974', 'г. Москва, РФ', 'г. Москва, ул. Петросяна, д.13, к.9', 'г. Казань, ул. Матрёшкина, д.77', '2937', '3453890', '20.01.1989', 'ОВД Г.КАЗАНИ', '+79091234567', '10238102487', 'Гендиректор ООО АэроТрансКарго', 'Интернет', 1, 1),
(73, 32, 'Мельников', 'Виктор', 'Игорев', '08.10.1980', 'Москва', 'Адрес регистрации по паспорту', '', '123123', '11231231', '02.10.2013', 'ОВД ЧЕРТАНОВО', '8 (312) 312-31-21', '8 (123) 123-12-31', 'Фриланс', 'Интернет', 1, 1),
(75, 34, 'ыФВ', 'фыв', 'фывф', '06.12.1979', 'фывфыв', 'фывфыв', '', '31ц', '3цу', '02.12.2013', 'фвывфыв', '8 (344) 343-43-43', '', '4234', 'Интернет', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Titles`
--

CREATE TABLE `Titles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `Titles`
--

INSERT INTO `Titles` (`id`, `title`, `user_id`) VALUES
(12, 'df', 21),
(13, 'df', 21),
(16, 'dsf', 21),
(17, 'dsf', 21),
(18, 'zczc', 21),
(19, 'zczc', 21),
(20, 'zczc', 21),
(21, 'выыв', 21);

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
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `photo`, `password`, `email`, `group_id`, `status`) VALUES
(21, 'https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg', 'd7d08d38a9afca0ddce06ac13992447f949fa6cc1d801ed2c88aa4f385fc21c9', 'roquie0@gmail.com', 2, 0),
(32, 'https://lh5.googleusercontent.com/-sUhzn4o5Wc4/AAAAAAAAAAI/AAAAAAAAFuI/3UlHj3ZH2NA/photo.jpg', 'd7d08d38a9afca0ddce06ac13992447f949fa6cc1d801ed2c88aa4f385fc21c9', 'vik.melnikov@gmail.com', 0, 0),
(34, 'http://avt.appsmail.ru/list/roquie/_avatarbig', '0f15db87e74db9659e212f6a291d38bd5bd2d52ee301632bbf86859ffc7f512f', 'roquie@list.ru', 0, 0);
