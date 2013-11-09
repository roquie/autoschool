-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 09 2013 г., 17:12
-- Версия сервера: 5.5.33
-- Версия PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `mpt_auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `is_approved` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `photo`, `password`, `email`, `group_id`, `status`, `is_approved`) VALUES
(21, 'https://lh5.googleusercontent.com/-8tZI2QQx310/AAAAAAAAAAI/AAAAAAAAADo/7_ZOUfX0-gk/photo.jpg', '959680866c12e03e4c8bc4a24bcc52379511d3df064b6811a4116d3fb853b8d2', 'roquie0@gmail.com', 1, 0, 0),
(32, 'https://lh5.googleusercontent.com/-sUhzn4o5Wc4/AAAAAAAAAAI/AAAAAAAAFuI/3UlHj3ZH2NA/photo.jpg', 'd7d08d38a9afca0ddce06ac13992447f949fa6cc1d801ed2c88aa4f385fc21c9', 'vik.melnikov@gmail.com', 0, 0, 0),
(33, 'http://cs540108.vk.me/c613418/v613418574/9cf/aqZjHR1Omao.jpg', '572121a19f5251e271535cd510e4e969eea431f765c1f39690c8721a68739d8a', 'viktor.melnikov.93@mail.ru', 0, 0, 0);
