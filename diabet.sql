-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Квт 04 2020 р., 22:20
-- Версія сервера: 5.7.19
-- Версія PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `diabet`
--

-- --------------------------------------------------------

--
-- Структура таблиці `db_users`
--

CREATE TABLE `db_users` (
  `id` int(11) NOT NULL,
  `fio` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_kliniki` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `action` varchar(10) NOT NULL,
  `supervisor` varchar(10) NOT NULL,
  `dat` date NOT NULL,
  `datLast` date NOT NULL,
  `ipLast` varchar(25) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `db_users`
--

INSERT INTO `db_users` (`id`, `fio`, `phone`, `email`, `id_kliniki`, `login`, `password`, `action`, `supervisor`, `dat`, `datLast`, `ipLast`, `role`) VALUES
(1, 'ццц', '333', 'wer', 1, 'kkk', '111', 'ee', 'ee', '2020-04-07', '2020-04-01', '12323', 1);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
