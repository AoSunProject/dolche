-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: mysql.ukrdomen.com
-- Час створення: Чрв 24 2020 р., 15:48
-- Версія сервера: 5.6.45-log
-- Версія PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `uh1108308_dlc`
--

-- --------------------------------------------------------

--
-- Структура таблиці `arh`
--

CREATE TABLE `arh` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `ychas` varchar(100) NOT NULL,
  `nomIss` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `datB` date DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `rajon` varchar(100) DEFAULT NULL,
  `work` varchar(100) DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  `fnameO` varchar(100) DEFAULT NULL,
  `nameO` varchar(100) DEFAULT NULL,
  `snameO` varchar(100) DEFAULT NULL,
  `ychasOtez` varchar(100) DEFAULT NULL,
  `nomIssO` varchar(100) DEFAULT NULL,
  `datBOtez` date DEFAULT NULL,
  `oblOtez` varchar(200) DEFAULT NULL,
  `cityOtez` varchar(100) DEFAULT NULL,
  `lechOtez` varchar(100) DEFAULT NULL,
  `lechOtezKak` varchar(100) DEFAULT NULL,
  `fnameM` varchar(100) DEFAULT NULL,
  `nameM` varchar(100) DEFAULT NULL,
  `snameM` varchar(100) DEFAULT NULL,
  `ychasM` varchar(200) DEFAULT NULL,
  `nomIssM` varchar(50) DEFAULT NULL,
  `datBM` date DEFAULT NULL,
  `oblM` varchar(200) DEFAULT NULL,
  `cityM` varchar(200) DEFAULT NULL,
  `lechM` varchar(10) DEFAULT NULL,
  `lechMKak` varchar(200) DEFAULT NULL,
  `lechBS` varchar(10) DEFAULT NULL,
  `lechBSKak` varchar(200) DEFAULT NULL,
  `golodM` varchar(200) DEFAULT NULL,
  `golodO` varchar(200) DEFAULT NULL,
  `golodSister` varchar(200) DEFAULT NULL,
  `death1` varchar(200) DEFAULT NULL,
  `death2` varchar(200) DEFAULT NULL,
  `ves` float DEFAULT NULL,
  `rost` float DEFAULT NULL,
  `tal` float DEFAULT NULL,
  `bed` float DEFAULT NULL,
  `index` int(11) DEFAULT NULL,
  `art` varchar(50) DEFAULT NULL,
  `smouk` varchar(200) DEFAULT NULL,
  `smoukTime` varchar(200) DEFAULT NULL,
  `smokeKol` int(11) DEFAULT NULL,
  `alkogol` varchar(200) DEFAULT NULL,
  `typeDiab` varchar(200) DEFAULT NULL,
  `yearD` int(11) DEFAULT NULL,
  `vekD` int(11) DEFAULT NULL,
  `longD` int(11) DEFAULT NULL,
  `inf` varchar(200) DEFAULT NULL,
  `aut` varchar(200) DEFAULT NULL,
  `porok` varchar(200) DEFAULT NULL,
  `endoc` varchar(200) DEFAULT NULL,
  `patol` varchar(200) DEFAULT NULL,
  `DGR` varchar(200) DEFAULT NULL,
  `infarkt` varchar(200) DEFAULT NULL,
  `kolInf` varchar(11) DEFAULT NULL,
  `datInf` varchar(300) DEFAULT NULL,
  `insult` varchar(200) DEFAULT NULL,
  `kolIns` int(200) DEFAULT NULL,
  `datIns` varchar(300) DEFAULT NULL,
  `glaz` varchar(200) DEFAULT NULL,
  `diabDiab` varchar(200) DEFAULT NULL,
  `diabNep` varchar(200) DEFAULT NULL,
  `diabPrep` varchar(200) DEFAULT NULL,
  `diabPrep2` varchar(200) DEFAULT NULL,
  `Slep` varchar(200) DEFAULT NULL,
  `Lazer` varchar(200) DEFAULT NULL,
  `Katar` varchar(200) DEFAULT NULL,
  `Mal` varchar(200) DEFAULT NULL,
  `Glauk` varchar(200) DEFAULT NULL,
  `LechDR` varchar(200) DEFAULT NULL,
  `datDiab` date DEFAULT NULL,
  `datNep` date DEFAULT NULL,
  `datPrep` date DEFAULT NULL,
  `datPrep2` date DEFAULT NULL,
  `datSlep` date DEFAULT NULL,
  `datLazer` date DEFAULT NULL,
  `datKatar` date DEFAULT NULL,
  `datMal` date DEFAULT NULL,
  `datGlauk` date DEFAULT NULL,
  `OST` varchar(200) DEFAULT NULL,
  `pochki` varchar(200) DEFAULT NULL,
  `diabNefro` varchar(200) DEFAULT NULL,
  `datNefro` date DEFAULT NULL,
  `diabPochNEd` varchar(200) DEFAULT NULL,
  `datPochNEd` date DEFAULT NULL,
  `diabPochSt` varchar(200) DEFAULT NULL,
  `datPochSt` date DEFAULT NULL,
  `diabDializ` varchar(200) DEFAULT NULL,
  `datDializ` date DEFAULT NULL,
  `LechPoch` varchar(200) DEFAULT NULL,
  `datPoli` date DEFAULT NULL,
  `diabAngin` varchar(200) DEFAULT NULL,
  `datAngin` date DEFAULT NULL,
  `kakAngio` varchar(200) DEFAULT NULL,
  `diabNejr` varchar(200) DEFAULT NULL,
  `datNejr` date DEFAULT NULL,
  `diabStopp` varchar(200) DEFAULT NULL,
  `Bol` varchar(200) DEFAULT NULL,
  `golodSem` varchar(200) DEFAULT NULL,
  `periodGolod` varchar(200) DEFAULT NULL,
  `bearn` varchar(100) DEFAULT NULL,
  `vesR` varchar(100) DEFAULT NULL,
  `Boltwo` varchar(100) DEFAULT NULL,
  `BolInten` varchar(100) DEFAULT NULL,
  `Bolkak` varchar(100) DEFAULT NULL,
  `Preparat` varchar(100) DEFAULT NULL,
  `PreparatKakie` varchar(100) DEFAULT NULL,
  `datStopObsl` date DEFAULT NULL,
  `SnizhT` varchar(100) DEFAULT NULL,
  `Chyvs` varchar(100) DEFAULT NULL,
  `NarVibr` varchar(100) DEFAULT NULL,
  `Reflex` varchar(100) DEFAULT NULL,
  `Jazv` varchar(100) DEFAULT NULL,
  `GnojJazv` varchar(100) DEFAULT NULL,
  `PylsStopa` varchar(100) DEFAULT NULL,
  `Shynt` varchar(100) DEFAULT NULL,
  `Hrom` varchar(100) DEFAULT NULL,
  `Ampyt` varchar(100) DEFAULT NULL,
  `kakAmput1` varchar(100) DEFAULT NULL,
  `datAmput` int(11) DEFAULT NULL,
  `datLab` date DEFAULT NULL,
  `Natosh` varchar(100) DEFAULT NULL,
  `Pisha` varchar(100) DEFAULT NULL,
  `nmol` varchar(100) DEFAULT NULL,
  `Datnmol` date DEFAULT NULL,
  `vidsot` varchar(100) DEFAULT NULL,
  `gemogl` varchar(100) DEFAULT NULL,
  `Datgemogl` date DEFAULT NULL,
  `Datkrovi` varchar(100) DEFAULT NULL,
  `eritr` varchar(100) DEFAULT NULL,
  `gemogl2` varchar(100) DEFAULT NULL,
  `lekoz` varchar(100) DEFAULT NULL,
  `nejtrof` varchar(100) DEFAULT NULL,
  `monozit` varchar(100) DEFAULT NULL,
  `limfoz` varchar(100) DEFAULT NULL,
  `tromb` varchar(100) DEFAULT NULL,
  `mpv` varchar(100) DEFAULT NULL,
  `dryg` varchar(100) DEFAULT NULL,
  `kreat` varchar(100) DEFAULT NULL,
  `datkreat` date DEFAULT NULL,
  `kreatMocha` varchar(100) DEFAULT NULL,
  `datMocha` varchar(100) DEFAULT NULL,
  `klirkreat` varchar(100) DEFAULT NULL,
  `Protein` varchar(100) DEFAULT NULL,
  `posIzm` varchar(100) DEFAULT NULL,
  `datProtein` date DEFAULT NULL,
  `Mikroalmb` varchar(100) DEFAULT NULL,
  `kakMikro1` varchar(100) DEFAULT NULL,
  `datMikro` date DEFAULT NULL,
  `Lipiddat` date DEFAULT NULL,
  `Holest` varchar(100) DEFAULT NULL,
  `LipidVis` varchar(100) DEFAULT NULL,
  `LipidNiz` varchar(100) DEFAULT NULL,
  `Trigliz` varchar(100) DEFAULT NULL,
  `Asparta` varchar(100) DEFAULT NULL,
  `Alanin` varchar(100) DEFAULT NULL,
  `BelocS` varchar(100) DEFAULT NULL,
  `Peptid` varchar(100) DEFAULT NULL,
  `PeptiEdIzm` varchar(100) DEFAULT NULL,
  `PeptidPmol` varchar(100) DEFAULT NULL,
  `PeptidNmol` varchar(100) DEFAULT NULL,
  `S_Pep` varchar(100) DEFAULT NULL,
  `Sivor` varchar(100) DEFAULT NULL,
  `Plazma` varchar(100) DEFAULT NULL,
  `DNK` varchar(100) DEFAULT NULL,
  `PHK` varchar(100) DEFAULT NULL,
  `Sluna` varchar(100) DEFAULT NULL,
  `Biopat` varchar(100) DEFAULT NULL,
  `PrimZAbKrov` varchar(100) DEFAULT NULL,
  `LechDIabet` varchar(100) DEFAULT NULL,
  `LechInsul` varchar(100) DEFAULT NULL,
  `datLechDiab` date DEFAULT NULL,
  `diabLechTab` varchar(100) DEFAULT NULL,
  `LechGiper` varchar(100) DEFAULT NULL,
  `LechLipidGiper` varchar(100) DEFAULT NULL,
  `Onko` varchar(100) DEFAULT NULL,
  `VidOnko` varchar(100) DEFAULT NULL,
  `dateOnko` date DEFAULT NULL,
  `OnkoLek` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dateSave` date DEFAULT NULL,
  `hronSerd` varchar(100) DEFAULT NULL,
  `date_izm` date DEFAULT NULL,
  `art1` varchar(10) DEFAULT NULL,
  `datStad` int(11) DEFAULT NULL,
  `del_k` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `const`
--

CREATE TABLE `const` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `zn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `const`
--

INSERT INTO `const` (`id`, `name`, `zn`) VALUES
(1, 'Enter', 1);

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
  `password` varchar(255) NOT NULL,
  `action` varchar(10) NOT NULL,
  `supervisor` varchar(10) NOT NULL,
  `dat` date NOT NULL,
  `datLast` date NOT NULL,
  `ipLast` varchar(25) NOT NULL,
  `role` int(11) NOT NULL,
  `email_verify` varchar(100) NOT NULL,
  `adminYes` varchar(100) DEFAULT 'No',
  `naSite` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `db_users`
--

INSERT INTO `db_users` (`id`, `fio`, `phone`, `email`, `id_kliniki`, `login`, `password`, `action`, `supervisor`, `dat`, `datLast`, `ipLast`, `role`, `email_verify`, `adminYes`, `naSite`) VALUES
(26, 'Данильченко Анна Олександрівна', '2324234', 'kissann@ukr.net', 1, 'kissann', '$2y$10$PpDRYcRTyatyn3rY4VGJcOS.yuN4wkjUEsQRMkq0XXJjNKaPhtKoO', 'False', 'True', '2020-04-27', '2020-04-27', '188.163.18.224', 2, 'YES', 'YES', '46.219.30.147'),
(34, 'ыыыыы', '+3293939393', 'uoz.server.zt@gmail.com', 1, 'admin', '$2y$10$zCuyYuLDavhV4veTVhqmkej5LfoBwxdu7LgUVgIliphtjSifhOSeC', 'False', 'True', '2020-05-12', '2020-05-12', '193.107.75.14', 2, 'YES', 'YES', '46.219.30.147'),
(35, 'Лобода Павло', '+380503344647', 'pavel.loboda@gmail.com', 1, 'loboda', '$2y$10$0iKpbtLO/PJnIOQCYnEZk.uOtQob2MbGObfDOS0x7KrFnXEFJrpne', 'False', 'False', '2020-05-14', '2020-05-14', '195.60.175.12', 1, 'YES', 'YES', '195.60.175.12'),
(36, 'Станіслав', '+380675013395', 'terma_post@ukr.net', 1, 'stas', '$2y$10$Nr.xx4qRVHN9FpfK59mzdOptnuuMK0aGbwAMSuxmOQLzysxwOpoGi', 'False', 'False', '2020-05-15', '2020-05-15', '195.60.175.12', 1, 'YES', 'YES', '81.230.246.97');

-- --------------------------------------------------------

--
-- Структура таблиці `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `id_k` int(11) NOT NULL,
  `nameP` varchar(200) DEFAULT NULL,
  `nameStol` varchar(200) NOT NULL,
  `val` varchar(200) NOT NULL,
  `date_izm` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `history`
--

INSERT INTO `history` (`id`, `id_k`, `nameP`, `nameStol`, `val`, `date_izm`) VALUES
(1, 20, NULL, 'fnameO', 'Р”СѓР±С–РЅР°111', '2020-05-19'),
(2, 20, NULL, 'nameO', 'РћР»РµРі 111', '2020-05-19'),
(3, 20, NULL, 'snameO', 'Р’Р°СЃРёР»СЊРѕРІРёС‡111', '2020-05-19'),
(4, 20, NULL, 'fnameO', 'Дубіна111', '2020-05-19'),
(5, 20, NULL, 'nameO', 'Олег 111', '2020-05-19'),
(6, 20, NULL, 'snameO', 'Васильович111', '2020-05-19'),
(7, 20, NULL, 'fnameO', 'Дубіна111', '2020-05-19'),
(8, 20, NULL, 'nameO', 'Олег 111', '2020-05-19'),
(9, 20, NULL, 'snameO', 'Васильович111', '2020-05-19'),
(10, 3, NULL, 'work', 'Не працюю, безробітний(а)', '2020-05-20'),
(11, 3, NULL, 'ychasOtez', 'Ні', '2020-05-20'),
(12, 3, NULL, 'lechOtez', 'Ні', '2020-05-20'),
(13, 3, NULL, 'lechOtezKak', 'Діета', '2020-05-20'),
(14, 3, NULL, 'ychasM', 'Ні', '2020-05-20'),
(15, 3, NULL, 'lechM', 'Ні', '2020-05-20'),
(16, 3, NULL, 'lechMKak', 'Діета', '2020-05-20'),
(17, 3, NULL, 'lechBS', 'Ні', '2020-05-20'),
(18, 3, NULL, 'lechBSKak', 'Діета', '2020-05-20'),
(19, 3, NULL, 'death1', 'Ні', '2020-05-20'),
(20, 3, NULL, 'death2', 'Ні', '2020-05-20'),
(21, 3, NULL, 'smouk', 'Ні', '2020-05-20'),
(22, 3, NULL, 'smoukTime', 'Кожен день', '2020-05-20'),
(23, 3, NULL, 'alkogol', 'Ніколи', '2020-05-20'),
(24, 3, NULL, 'typeDiab', 'ЦД 1 типу', '2020-05-20'),
(25, 3, NULL, 'infarkt', 'Ні', '2020-05-20'),
(26, 3, NULL, 'insult', 'Ні', '2020-05-20'),
(27, 3, NULL, 'diabDiab', 'Ні', '2020-05-20'),
(28, 3, NULL, 'diabNep', 'Ні', '2020-05-20'),
(29, 3, NULL, 'diabPrep', 'Ні', '2020-05-20'),
(30, 3, NULL, 'diabPrep2', 'Ні', '2020-05-20'),
(31, 3, NULL, 'Slep', 'Ні', '2020-05-20'),
(32, 3, NULL, 'Lazer', 'Ні', '2020-05-20'),
(33, 3, NULL, 'Katar', 'Ні', '2020-05-20'),
(34, 3, NULL, 'Mal', 'Ні', '2020-05-20'),
(35, 3, NULL, 'Glauk', 'Ні', '2020-05-20'),
(36, 3, NULL, 'LechDR', 'Ні', '2020-05-20'),
(37, 3, NULL, 'diabNefro', 'Ні', '2020-05-20'),
(38, 3, NULL, 'diabPochNEd', 'Ні', '2020-05-20'),
(39, 3, NULL, 'diabPochSt', 'Ні', '2020-05-20'),
(40, 3, NULL, 'diabDializ', 'Ні', '2020-05-20'),
(41, 3, NULL, 'LechPoch', 'Ні', '2020-05-20'),
(42, 3, NULL, 'diabAngin', 'Ні', '2020-05-20'),
(43, 3, NULL, 'diabNejr', 'Ні', '2020-05-20'),
(44, 3, NULL, 'diabStopp', 'Ні, все нормально', '2020-05-20'),
(45, 3, NULL, 'Bol', 'Ні, болю немає', '2020-05-20'),
(46, 3, NULL, 'golodSem', 'Ні', '2020-05-20'),
(47, 3, NULL, 'Preparat', 'Ні', '2020-05-20'),
(48, 3, NULL, 'SnizhT', 'Ні', '2020-05-20'),
(49, 3, NULL, 'Chyvs', 'Ні', '2020-05-20'),
(50, 3, NULL, 'NarVibr', 'Ні', '2020-05-20'),
(51, 3, NULL, 'Reflex', 'Ні', '2020-05-20'),
(52, 3, NULL, 'Jazv', 'Ні', '2020-05-20'),
(53, 3, NULL, 'GnojJazv', 'Ні', '2020-05-20'),
(54, 3, NULL, 'PylsStopa', 'Ні', '2020-05-20'),
(55, 3, NULL, 'Shynt', 'Ні', '2020-05-20'),
(56, 3, NULL, 'Hrom', 'Ні', '2020-05-20'),
(57, 3, NULL, 'Ampyt', 'Ні', '2020-05-20'),
(58, 3, NULL, 'kakAmput1', 'Великий палець', '2020-05-20'),
(59, 3, NULL, 'Natosh', 'Ні', '2020-05-20'),
(60, 3, NULL, 'Protein', 'Ні', '2020-05-20'),
(61, 3, NULL, 'Mikroalmb', 'Ні', '2020-05-20'),
(62, 3, NULL, 'Sivor', 'Ні', '2020-05-20'),
(63, 3, NULL, 'Plazma', 'Ні', '2020-05-20'),
(64, 3, NULL, 'DNK', 'Ні', '2020-05-20'),
(65, 3, NULL, 'Sluna', 'Ні', '2020-05-20'),
(66, 3, NULL, 'Biopat', 'Ні', '2020-05-20'),
(67, 3, NULL, 'diabLechTab', 'Бігуаніди', '2020-05-20'),
(68, 3, NULL, 'LechGiper', 'Не проводиться', '2020-05-20'),
(69, 3, NULL, 'LechLipidGiper', 'Не проводиться', '2020-05-20'),
(70, 3, NULL, 'Onko', 'Ні', '2020-05-20'),
(71, 3, NULL, 'OnkoLek', 'Ні', '2020-05-20'),
(72, 3, NULL, 'hronSerd', 'Ні', '2020-05-20'),
(73, 3, NULL, 'art1', '10`', '2020-05-20'),
(74, 20, NULL, 'work', 'ddddd', '2020-05-04'),
(75, 20, NULL, 'bearn', 'Народився(лась) вчасно', '2020-05-20'),
(76, 20, NULL, 'bearn', 'Народився(лась) передчасно', '2020-05-20'),
(77, 20, NULL, 'fname', 'ДУБІНА ', '2020-05-21'),
(78, 20, NULL, 'name', 'ВАЛЕНТИНА ', '2020-05-21'),
(79, 20, NULL, 'fname', 'ДУБІНА 11', '2020-05-21'),
(80, 20, NULL, 'name', 'ВАЛЕНТИНА 11', '2020-05-21'),
(81, 20, NULL, 'work', 'Не працюю, інвалідність', '2020-05-21'),
(82, 20, NULL, 'bearn', 'Народився(лась) передчасно', '2020-05-21'),
(83, 20, NULL, 'ves', '190', '2020-05-21'),
(84, 20, NULL, 'rost', '170', '2020-05-21'),
(85, 20, NULL, 'smouk', 'Ні', '2020-05-21'),
(86, 20, NULL, 'tal', '90', '2020-05-23'),
(87, 20, NULL, 'bed', '90', '2020-05-23'),
(88, 20, NULL, 'index', '50', '2020-05-23'),
(89, 20, NULL, 'typeDiab', 'Латентний аутоімунний (LADA)', '2020-05-23'),
(90, 20, NULL, 'vekD', '35', '2020-05-23'),
(91, 20, NULL, 'inf', '222', '2020-05-23'),
(92, 20, NULL, 'aut', '111', '2020-05-23'),
(93, 20, NULL, 'porok', '222', '2020-05-23'),
(94, 20, NULL, 'endoc', '33', '2020-05-23'),
(95, 20, NULL, 'patol', '44', '2020-05-23'),
(96, 20, NULL, 'DGR', '55', '2020-05-23'),
(97, 2, NULL, 'sex', 'Іванов11', '2020-05-25'),
(98, 2, NULL, 'work', 'Чоловіча', '2020-05-25'),
(99, 2, NULL, 'ychasOtez', '2020', '2020-05-25'),
(100, 2, NULL, 'lechOtez', 'Іванов', '2020-05-25'),
(101, 2, NULL, 'lechOtezKak', '', '2020-05-25'),
(102, 2, NULL, 'ychasM', 'Діета', '2020-05-25'),
(103, 2, NULL, 'lechM', 'Вакуленко', '2020-05-25'),
(104, 2, NULL, 'lechMKak', '', '2020-05-25'),
(105, 2, NULL, 'lechBS', 'Петрівна', '2020-05-25'),
(106, 2, NULL, 'lechBSKak', 'Так', '2020-05-25'),
(107, 2, NULL, 'death1', 'Діета', '2020-05-25'),
(108, 2, NULL, 'death2', '', '2020-05-25'),
(109, 2, NULL, 'rost', '0', '2020-05-25'),
(110, 2, NULL, 'art', '1946', '2020-05-25'),
(111, 2, NULL, 'smouk', '0', '2020-05-25'),
(112, 2, NULL, 'smoukTime', '0', '2020-05-25'),
(113, 2, NULL, 'alkogol', '10`', '2020-05-25'),
(114, 2, NULL, 'typeDiab', 'Ні', '2020-05-25'),
(115, 2, NULL, 'infarkt', '89', '2020-05-25'),
(116, 2, NULL, 'insult', 'аутизм', '2020-05-25'),
(117, 2, NULL, 'diabNep', '', '2020-05-25'),
(118, 2, NULL, 'diabPrep', '', '2020-05-25'),
(119, 2, NULL, 'diabPrep2', '', '2020-05-25'),
(120, 2, NULL, 'diabNefro', '', '2020-05-25'),
(121, 2, NULL, 'diabPochNEd', '', '2020-05-25'),
(122, 2, NULL, 'diabPochSt', '', '2020-05-25'),
(123, 2, NULL, 'diabDializ', '', '2020-05-25'),
(124, 2, NULL, 'diabAngin', 'Народився в _____ тижнів (вказати)', '2020-05-25'),
(125, 2, NULL, 'diabNejr', '', '2020-05-25'),
(126, 2, NULL, 'diabStopp', '', '2020-05-25'),
(127, 2, NULL, 'Bol', '', '2020-05-25'),
(128, 2, NULL, 'Preparat', 'Ні, болю немає', '2020-05-25'),
(129, 2, NULL, 'SnizhT', '', '2020-05-25'),
(130, 2, NULL, 'NarVibr', '', '2020-05-25'),
(131, 2, NULL, 'Jazv', '', '2020-05-25'),
(132, 2, NULL, 'Protein', '', '2020-05-25'),
(133, 2, NULL, 'Mikroalmb', '123', '2020-05-25'),
(134, 2, NULL, 'Sivor', '34', '2020-05-25'),
(135, 2, NULL, 'Plazma', '34', '2020-05-25'),
(136, 2, NULL, 'DNK', '54', '2020-05-25'),
(137, 2, NULL, 'LechDIabet', '2020-05-28', '2020-05-25'),
(138, 2, NULL, 'LechInsul', 'Ні', '2020-05-25'),
(139, 2, NULL, 'diabLechTab', 'Ні', '2020-05-25'),
(140, 2, NULL, 'LechLipidGiper', 'Базисная инсулинотерапия', '2020-05-25'),
(141, 2, NULL, 'Onko', '', '2020-05-25'),
(142, 2, NULL, 'OnkoLek', 'Не проводиться', '2020-05-25'),
(143, 2, NULL, 'art1', 'Ні', '2020-05-25'),
(144, 2, NULL, 'rost', '176', '2020-05-25'),
(145, 11, NULL, 'nomIss', '456', '2020-05-25'),
(146, 11, NULL, 'work', 'На пенсии', '2020-05-25'),
(147, 11, NULL, 'ychasOtez', 'Нет', '2020-05-25'),
(148, 11, NULL, 'lechOtez', 'Нет', '2020-05-25'),
(149, 11, NULL, 'lechOtezKak', 'Диета', '2020-05-25'),
(150, 11, NULL, 'ychasM', 'Нет', '2020-05-25'),
(151, 11, NULL, 'lechM', 'Нет', '2020-05-25'),
(152, 11, NULL, 'lechMKak', 'Диета', '2020-05-25'),
(153, 11, NULL, 'lechBS', 'Нет', '2020-05-25'),
(154, 11, NULL, 'lechBSKak', 'Диета', '2020-05-25'),
(155, 11, NULL, 'death1', 'Нет', '2020-05-25'),
(156, 11, NULL, 'death2', 'Нет', '2020-05-25'),
(157, 11, NULL, 'smouk', 'Нет', '2020-05-25'),
(158, 11, NULL, 'smoukTime', 'Каждый день', '2020-05-25'),
(159, 11, NULL, 'alkogol', 'Никогда', '2020-05-25'),
(160, 11, NULL, 'typeDiab', 'СД 1 типа', '2020-05-25'),
(161, 11, NULL, 'infarkt', 'Нет', '2020-05-25'),
(162, 11, NULL, 'insult', 'Нет', '2020-05-25'),
(163, 11, NULL, 'diabDiab', 'Нет', '2020-05-25'),
(164, 11, NULL, 'diabNep', 'Нет', '2020-05-25'),
(165, 11, NULL, 'diabPrep', 'Нет', '2020-05-25'),
(166, 11, NULL, 'diabPrep2', 'Нет', '2020-05-25'),
(167, 11, NULL, 'Slep', 'Нет', '2020-05-25'),
(168, 11, NULL, 'Lazer', 'Нет', '2020-05-25'),
(169, 11, NULL, 'Katar', 'Нет', '2020-05-25'),
(170, 11, NULL, 'Mal', 'Нет', '2020-05-25'),
(171, 11, NULL, 'Glauk', 'Нет', '2020-05-25'),
(172, 11, NULL, 'LechDR', 'Нет', '2020-05-25'),
(173, 11, NULL, 'diabNefro', 'Нет', '2020-05-25'),
(174, 11, NULL, 'diabPochNEd', 'Нет', '2020-05-25'),
(175, 11, NULL, 'diabPochSt', 'Нет', '2020-05-25'),
(176, 11, NULL, 'diabDializ', 'Нет', '2020-05-25'),
(177, 11, NULL, 'LechPoch', 'Нет', '2020-05-25'),
(178, 11, NULL, 'diabAngin', '', '2020-05-25'),
(179, 11, NULL, 'diabNejr', '', '2020-05-25'),
(180, 11, NULL, 'diabStopp', '', '2020-05-25'),
(181, 11, NULL, 'Bol', '', '2020-05-25'),
(182, 11, NULL, 'golodSem', '', '2020-05-25'),
(183, 11, NULL, 'Preparat', '', '2020-05-25'),
(184, 11, NULL, 'SnizhT', '', '2020-05-25'),
(185, 11, NULL, 'Chyvs', 'Нет', '2020-05-25'),
(186, 11, NULL, 'NarVibr', 'Нет', '2020-05-25'),
(187, 11, NULL, 'Reflex', 'Нет', '2020-05-25'),
(188, 11, NULL, 'Jazv', 'Нет', '2020-05-25'),
(189, 11, NULL, 'GnojJazv', 'Нет', '2020-05-25'),
(190, 11, NULL, 'PylsStopa', 'Нет', '2020-05-25'),
(191, 11, NULL, 'Shynt', 'Нет', '2020-05-25'),
(192, 11, NULL, 'Hrom', 'Нет', '2020-05-25'),
(193, 11, NULL, 'Ampyt', 'Нет', '2020-05-25'),
(194, 11, NULL, 'kakAmput1', '', '2020-05-25'),
(195, 11, NULL, 'Natosh', 'Нет', '2020-05-25'),
(196, 11, NULL, 'Protein', 'Нет', '2020-05-25'),
(197, 11, NULL, 'Mikroalmb', 'Нет', '2020-05-25'),
(198, 11, NULL, 'Sivor', 'Нет', '2020-05-25'),
(199, 11, NULL, 'Plazma', 'Нет', '2020-05-25'),
(200, 11, NULL, 'DNK', 'Нет', '2020-05-25'),
(201, 11, NULL, 'Sluna', 'Нет', '2020-05-25'),
(202, 11, NULL, 'Biopat', 'Нет', '2020-05-25'),
(203, 11, NULL, 'LechDIabet', 'Не проводится', '2020-05-25'),
(204, 11, NULL, 'diabLechTab', 'Бигуаниды', '2020-05-25'),
(205, 11, NULL, 'LechGiper', 'Не проводится', '2020-05-25'),
(206, 11, NULL, 'LechLipidGiper', 'Не проводится', '2020-05-25'),
(207, 11, NULL, 'Onko', 'Нет', '2020-05-25'),
(208, 11, NULL, 'OnkoLek', 'Нет', '2020-05-25'),
(209, 11, NULL, 'hronSerd', '', '2020-05-25'),
(210, 11, NULL, 'art1', '', '2020-05-25'),
(211, 12, NULL, 'diabAngin', '', '2020-05-25'),
(212, 12, NULL, 'diabNejr', '', '2020-05-25'),
(213, 12, NULL, 'diabStopp', '', '2020-05-25'),
(214, 12, NULL, 'Bol', '', '2020-05-25'),
(215, 12, NULL, 'golodSem', '', '2020-05-25'),
(216, 12, NULL, 'Preparat', '', '2020-05-25'),
(217, 12, NULL, 'SnizhT', '', '2020-05-25'),
(218, 12, NULL, 'art1', '', '2020-05-25'),
(219, 11, NULL, 'fname', '', '2020-05-25'),
(220, 11, NULL, 'name', '', '2020-05-25'),
(221, 11, NULL, 'sname', '', '2020-05-25'),
(222, 12, NULL, 'fname', '', '2020-05-25'),
(223, 12, NULL, 'name', '', '2020-05-25'),
(224, 12, NULL, 'sname', '', '2020-05-25'),
(225, 12, NULL, 'ychas', 'Ні', '2020-05-25'),
(226, 12, NULL, 'nomIss', '', '2020-05-25'),
(227, 2, NULL, 'ychasOtez', 'Ні', '2020-05-27'),
(228, 2, NULL, 'nomIssO', 'Житомир', '2020-05-27'),
(229, 2, NULL, 'ychasM', 'Ні', '2020-05-27'),
(230, 2, NULL, 'nomIssM', 'Житомирська', '2020-05-27'),
(231, 2, NULL, 'rost', '170', '2020-05-27'),
(232, 12, NULL, 'rost', '0', '2020-05-28'),
(233, 12, NULL, 'tal', '0', '2020-05-28'),
(234, 12, NULL, 'bed', '0', '2020-05-28'),
(235, 12, NULL, 'index', '0', '2020-05-28'),
(236, 12, NULL, 'typeDiab', 'ЦД 1 типу', '2020-05-28'),
(237, 12, NULL, 'yearD', '0', '2020-05-28'),
(238, 12, NULL, 'vekD', '0', '2020-05-28'),
(239, 12, NULL, 'longD', '0', '2020-05-28'),
(240, 12, NULL, 'infarkt', 'Ні', '2020-05-28'),
(241, 12, NULL, 'datInf', '', '2020-05-28'),
(242, 12, NULL, 'diabNefro', 'Ні', '2020-05-28'),
(243, 12, NULL, 'datNefro', '0000-00-00', '2020-05-28'),
(244, 12, NULL, 'diabPochNEd', 'Ні', '2020-05-28'),
(245, 12, NULL, 'datPochNEd', '0000-00-00', '2020-05-28'),
(246, 6, NULL, 'nomIss', 'Петро', '2020-05-28'),
(247, 6, NULL, 'ychasM', 'Ні', '2020-05-28'),
(248, 6, NULL, 'nomIssM', '', '2020-05-28'),
(249, 6, NULL, 'ves', '0', '2020-05-28'),
(250, 6, NULL, 'ves', '25', '2020-05-28'),
(251, 2, NULL, 'smouk', 'Ні', '2020-06-10'),
(252, 2, NULL, 'art', '10`', '2020-06-10'),
(253, 2, NULL, 'infarkt', 'Ні', '2020-06-10'),
(254, 2, NULL, 'datInf', '', '2020-06-10'),
(255, 2, NULL, 'insult', 'Ні', '2020-06-10'),
(256, 2, NULL, 'datIns', '', '2020-06-10');

-- --------------------------------------------------------

--
-- Структура таблиці `karta`
--

CREATE TABLE `karta` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `ychas` varchar(100) NOT NULL,
  `nomIss` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `datB` date DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `rajon` varchar(100) DEFAULT NULL,
  `work` varchar(100) DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  `fnameO` varchar(100) DEFAULT NULL,
  `nameO` varchar(100) DEFAULT NULL,
  `snameO` varchar(100) DEFAULT NULL,
  `ychasOtez` varchar(100) DEFAULT NULL,
  `nomIssO` varchar(100) DEFAULT NULL,
  `datBOtez` date DEFAULT NULL,
  `oblOtez` varchar(200) DEFAULT NULL,
  `cityOtez` varchar(100) DEFAULT NULL,
  `lechOtez` varchar(100) DEFAULT NULL,
  `lechOtezKak` varchar(100) DEFAULT NULL,
  `fnameM` varchar(100) DEFAULT NULL,
  `nameM` varchar(100) DEFAULT NULL,
  `snameM` varchar(100) DEFAULT NULL,
  `ychasM` varchar(200) DEFAULT NULL,
  `nomIssM` varchar(50) DEFAULT NULL,
  `datBM` date DEFAULT NULL,
  `oblM` varchar(200) DEFAULT NULL,
  `cityM` varchar(200) DEFAULT NULL,
  `lechM` varchar(10) DEFAULT NULL,
  `lechMKak` varchar(200) DEFAULT NULL,
  `lechBS` varchar(10) DEFAULT NULL,
  `lechBSKak` varchar(200) DEFAULT NULL,
  `golodM` varchar(200) DEFAULT NULL,
  `golodO` varchar(200) DEFAULT NULL,
  `golodSister` varchar(200) DEFAULT NULL,
  `death1` varchar(200) DEFAULT NULL,
  `death2` varchar(200) DEFAULT NULL,
  `ves` float DEFAULT NULL,
  `rost` float DEFAULT NULL,
  `tal` float DEFAULT NULL,
  `bed` float DEFAULT NULL,
  `index` int(11) DEFAULT NULL,
  `art` varchar(50) DEFAULT NULL,
  `smouk` varchar(200) DEFAULT NULL,
  `smoukTime` varchar(200) DEFAULT NULL,
  `smokeKol` int(11) DEFAULT NULL,
  `alkogol` varchar(200) DEFAULT NULL,
  `typeDiab` varchar(200) DEFAULT NULL,
  `yearD` int(11) DEFAULT NULL,
  `vekD` int(11) DEFAULT NULL,
  `longD` int(11) DEFAULT NULL,
  `inf` varchar(200) DEFAULT NULL,
  `aut` varchar(200) DEFAULT NULL,
  `porok` varchar(200) DEFAULT NULL,
  `endoc` varchar(200) DEFAULT NULL,
  `patol` varchar(200) DEFAULT NULL,
  `DGR` varchar(200) DEFAULT NULL,
  `infarkt` varchar(200) DEFAULT NULL,
  `kolInf` varchar(11) DEFAULT NULL,
  `datInf` varchar(300) DEFAULT NULL,
  `insult` varchar(200) DEFAULT NULL,
  `kolIns` int(200) DEFAULT NULL,
  `datIns` varchar(300) DEFAULT NULL,
  `glaz` varchar(200) DEFAULT NULL,
  `diabDiab` varchar(200) DEFAULT NULL,
  `diabNep` varchar(200) DEFAULT NULL,
  `diabPrep` varchar(200) DEFAULT NULL,
  `diabPrep2` varchar(200) DEFAULT NULL,
  `Slep` varchar(200) DEFAULT NULL,
  `Lazer` varchar(200) DEFAULT NULL,
  `Katar` varchar(200) DEFAULT NULL,
  `Mal` varchar(200) DEFAULT NULL,
  `Glauk` varchar(200) DEFAULT NULL,
  `LechDR` varchar(200) DEFAULT NULL,
  `datDiab` date DEFAULT NULL,
  `datNep` date DEFAULT NULL,
  `datPrep` date DEFAULT NULL,
  `datPrep2` date DEFAULT NULL,
  `datSlep` date DEFAULT NULL,
  `datLazer` date DEFAULT NULL,
  `datKatar` date DEFAULT NULL,
  `datMal` date DEFAULT NULL,
  `datGlauk` date DEFAULT NULL,
  `OST` varchar(200) DEFAULT NULL,
  `pochki` varchar(200) DEFAULT NULL,
  `diabNefro` varchar(200) DEFAULT NULL,
  `datNefro` date DEFAULT NULL,
  `diabPochNEd` varchar(200) DEFAULT NULL,
  `datPochNEd` date DEFAULT NULL,
  `diabPochSt` varchar(200) DEFAULT NULL,
  `datPochSt` date DEFAULT NULL,
  `diabDializ` varchar(200) DEFAULT NULL,
  `datDializ` date DEFAULT NULL,
  `LechPoch` varchar(200) DEFAULT NULL,
  `datPoli` date DEFAULT NULL,
  `diabAngin` varchar(200) DEFAULT NULL,
  `datAngin` date DEFAULT NULL,
  `kakAngio` varchar(200) DEFAULT NULL,
  `diabNejr` varchar(200) DEFAULT NULL,
  `datNejr` date DEFAULT NULL,
  `diabStopp` varchar(200) DEFAULT NULL,
  `Bol` varchar(200) DEFAULT NULL,
  `golodSem` varchar(200) DEFAULT NULL,
  `periodGolod` varchar(200) DEFAULT NULL,
  `bearn` varchar(100) DEFAULT NULL,
  `vesR` varchar(100) DEFAULT NULL,
  `Boltwo` varchar(100) DEFAULT NULL,
  `BolInten` varchar(100) DEFAULT NULL,
  `Bolkak` varchar(100) DEFAULT NULL,
  `Preparat` varchar(100) DEFAULT NULL,
  `PreparatKakie` varchar(100) DEFAULT NULL,
  `datStopObsl` date DEFAULT NULL,
  `SnizhT` varchar(100) DEFAULT NULL,
  `Chyvs` varchar(100) DEFAULT NULL,
  `NarVibr` varchar(100) DEFAULT NULL,
  `Reflex` varchar(100) DEFAULT NULL,
  `Jazv` varchar(100) DEFAULT NULL,
  `GnojJazv` varchar(100) DEFAULT NULL,
  `PylsStopa` varchar(100) DEFAULT NULL,
  `Shynt` varchar(100) DEFAULT NULL,
  `Hrom` varchar(100) DEFAULT NULL,
  `Ampyt` varchar(100) DEFAULT NULL,
  `kakAmput1` varchar(100) DEFAULT NULL,
  `datAmput` int(11) DEFAULT NULL,
  `datLab` date DEFAULT NULL,
  `Natosh` varchar(100) DEFAULT NULL,
  `Pisha` varchar(100) DEFAULT NULL,
  `nmol` varchar(100) DEFAULT NULL,
  `Datnmol` date DEFAULT NULL,
  `vidsot` varchar(100) DEFAULT NULL,
  `gemogl` varchar(100) DEFAULT NULL,
  `Datgemogl` date DEFAULT NULL,
  `Datkrovi` varchar(100) DEFAULT NULL,
  `eritr` varchar(100) DEFAULT NULL,
  `gemogl2` varchar(100) DEFAULT NULL,
  `lekoz` varchar(100) DEFAULT NULL,
  `nejtrof` varchar(100) DEFAULT NULL,
  `monozit` varchar(100) DEFAULT NULL,
  `limfoz` varchar(100) DEFAULT NULL,
  `tromb` varchar(100) DEFAULT NULL,
  `mpv` varchar(100) DEFAULT NULL,
  `dryg` varchar(100) DEFAULT NULL,
  `kreat` varchar(100) DEFAULT NULL,
  `datkreat` date DEFAULT NULL,
  `kreatMocha` varchar(100) DEFAULT NULL,
  `datMocha` varchar(100) DEFAULT NULL,
  `klirkreat` varchar(100) DEFAULT NULL,
  `Protein` varchar(100) DEFAULT NULL,
  `posIzm` varchar(100) DEFAULT NULL,
  `datProtein` date DEFAULT NULL,
  `Mikroalmb` varchar(100) DEFAULT NULL,
  `kakMikro1` varchar(100) DEFAULT NULL,
  `datMikro` date DEFAULT NULL,
  `Lipiddat` date DEFAULT NULL,
  `Holest` varchar(100) DEFAULT NULL,
  `LipidVis` varchar(100) DEFAULT NULL,
  `LipidNiz` varchar(100) DEFAULT NULL,
  `Trigliz` varchar(100) DEFAULT NULL,
  `Asparta` varchar(100) DEFAULT NULL,
  `Alanin` varchar(100) DEFAULT NULL,
  `BelocS` varchar(100) DEFAULT NULL,
  `Peptid` varchar(100) DEFAULT NULL,
  `PeptiEdIzm` varchar(100) DEFAULT NULL,
  `PeptidPmol` varchar(100) DEFAULT NULL,
  `PeptidNmol` varchar(100) DEFAULT NULL,
  `S_Pep` varchar(100) DEFAULT NULL,
  `Sivor` varchar(100) DEFAULT NULL,
  `Plazma` varchar(100) DEFAULT NULL,
  `DNK` varchar(100) DEFAULT NULL,
  `PHK` varchar(100) DEFAULT NULL,
  `Sluna` varchar(100) DEFAULT NULL,
  `Biopat` varchar(100) DEFAULT NULL,
  `PrimZAbKrov` varchar(100) DEFAULT NULL,
  `LechDIabet` varchar(100) DEFAULT NULL,
  `LechInsul` varchar(100) DEFAULT NULL,
  `datLechDiab` date DEFAULT NULL,
  `diabLechTab` varchar(100) DEFAULT NULL,
  `LechGiper` varchar(100) DEFAULT NULL,
  `LechLipidGiper` varchar(100) DEFAULT NULL,
  `Onko` varchar(100) DEFAULT NULL,
  `VidOnko` varchar(100) DEFAULT NULL,
  `dateOnko` date DEFAULT NULL,
  `OnkoLek` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `dateSave` date DEFAULT NULL,
  `hronSerd` varchar(100) DEFAULT NULL,
  `date_izm` date DEFAULT NULL,
  `art1` varchar(10) DEFAULT NULL,
  `datStad` int(11) DEFAULT NULL,
  `del_k` int(11) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `karta`
--

INSERT INTO `karta` (`id`, `fname`, `name`, `sname`, `ychas`, `nomIss`, `sex`, `datB`, `city`, `rajon`, `work`, `week`, `fnameO`, `nameO`, `snameO`, `ychasOtez`, `nomIssO`, `datBOtez`, `oblOtez`, `cityOtez`, `lechOtez`, `lechOtezKak`, `fnameM`, `nameM`, `snameM`, `ychasM`, `nomIssM`, `datBM`, `oblM`, `cityM`, `lechM`, `lechMKak`, `lechBS`, `lechBSKak`, `golodM`, `golodO`, `golodSister`, `death1`, `death2`, `ves`, `rost`, `tal`, `bed`, `index`, `art`, `smouk`, `smoukTime`, `smokeKol`, `alkogol`, `typeDiab`, `yearD`, `vekD`, `longD`, `inf`, `aut`, `porok`, `endoc`, `patol`, `DGR`, `infarkt`, `kolInf`, `datInf`, `insult`, `kolIns`, `datIns`, `glaz`, `diabDiab`, `diabNep`, `diabPrep`, `diabPrep2`, `Slep`, `Lazer`, `Katar`, `Mal`, `Glauk`, `LechDR`, `datDiab`, `datNep`, `datPrep`, `datPrep2`, `datSlep`, `datLazer`, `datKatar`, `datMal`, `datGlauk`, `OST`, `pochki`, `diabNefro`, `datNefro`, `diabPochNEd`, `datPochNEd`, `diabPochSt`, `datPochSt`, `diabDializ`, `datDializ`, `LechPoch`, `datPoli`, `diabAngin`, `datAngin`, `kakAngio`, `diabNejr`, `datNejr`, `diabStopp`, `Bol`, `golodSem`, `periodGolod`, `bearn`, `vesR`, `Boltwo`, `BolInten`, `Bolkak`, `Preparat`, `PreparatKakie`, `datStopObsl`, `SnizhT`, `Chyvs`, `NarVibr`, `Reflex`, `Jazv`, `GnojJazv`, `PylsStopa`, `Shynt`, `Hrom`, `Ampyt`, `kakAmput1`, `datAmput`, `datLab`, `Natosh`, `Pisha`, `nmol`, `Datnmol`, `vidsot`, `gemogl`, `Datgemogl`, `Datkrovi`, `eritr`, `gemogl2`, `lekoz`, `nejtrof`, `monozit`, `limfoz`, `tromb`, `mpv`, `dryg`, `kreat`, `datkreat`, `kreatMocha`, `datMocha`, `klirkreat`, `Protein`, `posIzm`, `datProtein`, `Mikroalmb`, `kakMikro1`, `datMikro`, `Lipiddat`, `Holest`, `LipidVis`, `LipidNiz`, `Trigliz`, `Asparta`, `Alanin`, `BelocS`, `Peptid`, `PeptiEdIzm`, `PeptidPmol`, `PeptidNmol`, `S_Pep`, `Sivor`, `Plazma`, `DNK`, `PHK`, `Sluna`, `Biopat`, `PrimZAbKrov`, `LechDIabet`, `LechInsul`, `datLechDiab`, `diabLechTab`, `LechGiper`, `LechLipidGiper`, `Onko`, `VidOnko`, `dateOnko`, `OnkoLek`, `id_user`, `dateSave`, `hronSerd`, `date_izm`, `art1`, `datStad`, `del_k`, `phone`, `email`) VALUES
(2, 'Іванов11', 'Іван', 'Іваович', 'Так', 'Іван', 'Чоловіча', '0000-00-00', 'Так', 'Іван', 'Не працюю, безробітний(а)', 1980, 'Так', '22', 'Не працюю, безробітний(а)', 'Так', '3', '0000-00-00', 'Не працюю, безробітний(а)', 'Ні', 'Ні', 'Діета', 'Анатолійович', 'Так', 'Ні', 'Так', '13', '0000-00-00', 'Так', 'Ні', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 0, 220, 0, 0, 1946, '0`', 'Так', 'Кожен день', 89, 'Ніколи', 'ЦД 1 типу', 0, 56, 0, 'ЦД 1 типу', '0', '78', '0', 'ЦД 1 типу', '1980', 'Так', '3', ';;', 'Так', 2, ';', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, '', '', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', 'Ні', 'Великий палець', '0000-00-00', '2020-05-13', 'Ні', '11:00', '', '2020-05-07', '20', '56', '2020-05-14', '2020-05-09', '890', '56', '0000-00-00', '45', '', '78', 'Ні', '123', '0000-00-00', 'Ні', '', '0000-00-00', '2020-05-28', 'Ні', '', '', '2020-05-07', 'Ні', '', '', '2020-05-28', '56', '54', '34', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', 'Ні', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', 'Бігуаніди', '0000-00-00', 'Ні', 34, '2020-06-10', 'Ні', '2020-06-10', '10`', 0, 0, '', ''),
(3, 'Антонов', 'Олексій', 'Петрович', 'Ні', '', 'Чоловіча', '2020-05-12', 'Коростень', 'Житомирська', 'Не працюю, безробітний(а)', 0, 'Антонов', 'Петор', 'Іванович', 'Ні', '', '2020-05-16', 'Житомирська', 'Житомир', 'Ні', 'Діета', 'Вайко', 'Інна', 'Олегівна', 'Ні', '', '2020-05-30', 'Вінниця', 'Вінниця', 'Ні', 'Діета', 'Ні', 'Діета', '1932-33', '1932-33', '1932-33', 'Ні', 'Ні', 78, 180, 90, 200, 45, '10`', 'Ні', 'Кожен день', 90, 'Ніколи', 'ЦД 1 типу', 2018, 2, 3, '', '', '', '', '', '', 'Ні', '', '', 'Ні', 0, '', '2020-05-06', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '2020-05-13', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '2020-05-16', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, '', '', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '2020-05-08', 'Ні', '11:00', '56', '2020-05-08', '12', '23', '2020-05-06', '2020-05-07', '23', '324', '34', '34', '43', '45', '45', '56', '54', '45', '2020-05-13', '54', '2020-05-22', '546', 'Ні', '456', '2020-05-14', 'Ні', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', 'одрдд', 'Ні', 'Ні', 'лрооролш', 'Таблетки', 'Базисная инсулинотерапия', '2020-05-08', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', 'поорпрл', '2020-05-06', 'Ні', 26, '2020-05-20', 'Ні', '2020-05-20', '10`', 0, 0, NULL, NULL),
(4, 'Капранов11', 'Чешко', 'Олкович', 'Ні', 'Чешко', 'Капранов11', '0000-00-00', 'Ні', '777', 'Чоловіча', 1983, 'Житомир', 'Житомирська', 'Не працюю, безробітний(а)', '11', 'Аврамовв', '0000-00-00', 'Ивинович', 'Ні', '', '1973-03-02', '', 'Житомир', 'Ні', 'Діета', 'Маркивська', '0000-00-00', 'Ивиновна', 'Ні', '', '1976-05-02', '', 'Житомир', 'Ні', 'Діета', 'Ні', 'Діета', '', 0, 0, 0, 0, 0, '0', '0', '0', 0, '10`', 'Ні', 0, 0, 0, 'ЦД 1 типу', '0', '0', '0', '', '', '', '', '', '', 0, '', '', 'Ні', '', '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 'Ні', '0000-00-00', 'Народився в _____ тижнів (вказати)', '0000-00-00', '10`', '', '0000-00-00', '', '', 'Ні', NULL, '', '', 'Ні', '', 'Ні, все нормально', 'Ні, болю немає', '', '0000-00-00', '', 'Ні', '', 'Ні', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 0, '0000-00-00', 'Ні', 'Великий палець', '0', '0000-00-00', 'Ні', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', 'Ні', '0000-00-00', '0000-00-00', 'Ні', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', '0000-00-00', '', 'Не проводиться', 'Базисная инсулинотерапия', '', 'Бігуаніди', '0000-00-00', 'Не проводиться', 26, '2020-05-16', 'Ні', '2020-05-16', 'Ні', 0, 0, NULL, NULL),
(6, 'Баранов', 'Петро', '', 'Ні', '13', 'Чоловіча', '0000-00-00', 'Ні', '', 'Не працюю, безробітний(а)', 2002, '', 'Дніпро', 'Не працюю, безробітний(а)', 'Ні', '', '0000-00-00', '', 'Ні', 'Ні', 'Діета', '', '', 'Ні', 'Так', '19', '0000-00-00', '', 'Ні', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 28, 0, 33333, 22222, 1111111, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, 'Панкреатогенний', '0', '0', '0', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, '', '', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', 'Великий палець', '0', '0000-00-00', 'Ні', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', 'Ні', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', 'Ні', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', 'Бігуаніди', '0000-00-00', 'Ні', 35, '2020-05-28', 'Ні', '2020-05-28', '10`', 0, 0, '', ''),
(7, 'Карпено', 'Інна', 'Віталіївна', 'Ні', 'Інна', 'Карпено', '0000-00-00', 'Ні', '', 'Чоловіча', 1987, 'Київ', 'Київ', 'Не працюю, безробітний(а)', '0', '', '0000-00-00', '', 'Ні', '', '', '', '', 'Ні', 'Діета', '', '0000-00-00', '', 'Ні', '', '', '', '', 'Ні', 'Діета', 'Ні', 'Діета', '', 0, 0, 0, 0, 0, '0', '0', '0', 0, '10`', 'Ні', 0, 0, 0, 'ЦД 1 типу', '0', '0', '0', '', '', '', '', '', '', 0, '', '', 'Ні', '', '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 'Ні', '0000-00-00', 'Народився(лась) передчасно', '0000-00-00', '10`', '', '0000-00-00', '', '', 'Ні', NULL, '', '', 'Ні', '', 'Ні, все нормально', 'Ні, болю немає', '', '0000-00-00', '', 'Ні', '', 'Ні', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 0, '0000-00-00', 'Ні', 'Великий палець', '0', '0000-00-00', 'Ні', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', 'Ні', '0000-00-00', '0000-00-00', 'Ні', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', '0000-00-00', '', 'Таблетки', 'Базисная инсулинотерапия', '', 'Бігуаніди', '0000-00-00', 'Не проводиться', 26, '2020-05-16', 'Ні', '2020-05-16', 'Ні', 0, 0, NULL, NULL),
(8, 'Алексієнко', 'Вадим', 'Сергійович', 'Ні', 'Вадим', 'Чоловіча', '1980-05-01', 'Київ', 'Київська', 'Не працюю, безробітний(а)', 2020, 'vfref', 'refref', 'Не працюю, безробітний(а)', 'Ні', '', '0000-00-00', '', 'Ні', 'Ні', 'Діета', '', '', 'Ні', 'Ні', '', '0000-00-00', '', 'Ні', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 0, 0, 0, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'Латентний аутоімунний (LADA)', 0, 0, 0, 'ЦД 1 типу', '0', '0', '0', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, 'Народився(лась) передчасно', 'Я був (була) при народженні великим малюком', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', 'Великий палець', '0', '0000-00-00', 'Ні', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', 'Ні', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', 'Ні', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', 'Бігуаніди', '0000-00-00', 'Ні', 26, '2020-05-16', 'Ні', '2020-05-16', '10`', 0, 0, NULL, NULL),
(9, 'Алексієнко', 'regfver', 'fergfre', 'Ні', 'regfver', 'Алексієнко', '0000-00-00', 'Ні', '', 'Чоловіча', 2020, 'regerg', 'ergregf', 'Не працюю, безробітний(а)', '0', 'rfedvg', '0000-00-00', 'regfvreg', 'Ні', '', '2020-05-14', 'rgver', '', 'Ні', 'Діета', 'refvger', '0000-00-00', 'erfreg', 'Ні', '', '2020-05-24', '', '', 'Ні', 'Діета', 'Ні', 'Діета', '', 0, 0, 0, 0, 0, '0', '0', '0', 0, '10`', 'Ні', 0, 0, 0, 'ЦД 1 типу', '0', '0', '0', '', '', '', '', '', '', 0, '', '', 'Ні', '', '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', 'Ні', '0000-00-00', '', '0000-00-00', '10`', '', '0000-00-00', '', '', 'Ні', NULL, '', '', 'Ні', '', 'Ні, все нормально', 'Ні, болю немає', '', '0000-00-00', '', 'Ні', '', 'Ні', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 0, '0000-00-00', 'Ні', 'Великий палець', '0', '0000-00-00', 'Ні', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', 'Ні', '0000-00-00', '0000-00-00', 'Ні', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', '0000-00-00', '', 'Не проводиться', 'Базисная инсулинотерапия', '', 'Бігуаніди', '0000-00-00', 'Не проводиться', 26, '2020-05-16', 'Ні', '2020-05-16', 'Ні', 0, 0, NULL, NULL),
(10, 'Петренко', 'Іван', 'btrgbrth', 'Ні', 'Іван', 'Чоловіча', '1986-05-19', 'Ні', 'Іван', 'Не працюю, безробітний(а)', 0, 'Ні', 'Іван', 'Не працюю, безробітний(а)', 'Ні', 'Ні', '0000-00-00', 'Не працюю, безробітний(а)', 'Ні', 'Ні', 'Діета', 'Не працюю, безробітний(а)', 'Ні', 'Ні', 'Ні', 'Не працюю, безробітний(а)', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 0, 0, 0, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, 'Латентний аутоімунний (LADA)', '0', '0', '0', 'Панкреатогенний', '0', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, '', '', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', 'Ні', '', '0000-00-00', '', 'Ні', '', '', '', 'Ні', 'Великий палець', '', '', 'Ні', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', 'Ні', '', '', '', 'Ні', '', '', '', 'Ні', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', 'Ні', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', 'Бігуаніди', '0000-00-00', 'Ні', 26, '2020-05-18', 'Ні', '2020-05-18', '10`', 0, 0, NULL, NULL),
(11, 'wewr', 'erfet', 'rwefef', 'Так', '6', 'Жіноча', '2020-05-13', 'Вінниця', 'Вінничина', 'Не працюю, безробітний(а)', 0, '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Діета', '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 0, 0, 0, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, '', '', '', '', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, '', '', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', '', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 26, '2020-05-25', 'Ні', '2020-05-25', '10`', 0, 0, NULL, NULL),
(12, 'qqq', 'qqqq', 'qqqq', 'Так', '14', 'Чоловіча', '2020-05-07', 'vfref', 'refref', 'Не працюю, безробітний(а)', 0, '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Діета', '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 73, 100, 150, 120, 120, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'Латентний аутоімунний (LADA)', 23, 34, 23, '', '', '', '', '', '', 'Так', '2', ';', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Так', '2020-05-20', 'Так', '2020-05-05', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, '', '', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', '', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 26, '2020-05-28', 'Ні', '2020-05-28', '10`', 0, 0, '', ''),
(13, 'Антонов', 'Олексій', '', 'Ні', '', 'Чоловіча', '2020-05-12', 'Коростень1', 'Житомирська', 'Не працюю, безробітний(а)', 0, 'Антонов', 'Петор', 'Іванович', 'Ні', '', '2020-05-16', 'Житомирська', 'Житомир', 'Ні', 'Діета', 'Вайко', 'Інна', 'Олегівна', 'Ні', '', '2020-05-30', 'Вінниця', 'Вінниця', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 0, 0, 0, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, '', '', '', '', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', NULL, 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', '', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 35, '2020-05-14', 'Ні', '2020-05-14', NULL, NULL, 0, NULL, NULL),
(14, 'fvedrgf', 'regfver', '', 'Ні', '', 'Жіноча', '2020-05-21', 'regerg', 'ergregf', 'Не працюю, безробітний(а)', 0, 'rfedvg', 'gverg', 'regfvreg', 'Ні', '', '2020-05-14', 'rgver', '', 'Ні', 'Діета', 'refvger', 'grgferf', 'erfreg', 'Ні', '', '2020-05-24', '', '', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 0, 0, 0, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, '', '', '', '', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', NULL, 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', '', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 35, '2020-05-14', 'Ні', '2020-05-14', NULL, NULL, 0, NULL, NULL),
(15, 'Хохол', 'Петро', 'Андрійович', 'Ні', '', 'Чоловіча', '1985-01-01', '', '', 'Не працюю, безробітний(а)', 0, '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Діета', '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Дієта', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 0, 0, 0, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, '', '', '', '', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', NULL, 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', '', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 35, '2020-05-14', 'Ні', '2020-05-14', NULL, NULL, 0, NULL, NULL),
(16, 'Петренко', 'Кирил', 'Васильович', 'Так', '222', 'Чоловіча', '2020-05-01', 'Київ', 'Київ', 'Не працюю, відпустка по хворобі', 34, 'Киров', 'Сергій', 'Васильович', 'Так', '2333', '2020-05-21', 'Житомир', 'Житомир', 'Так', 'Інсулін', 'Кропова', 'Ольга', 'Михайлівна', 'Так', '456', '2020-05-29', 'Житомирська', 'Львів', 'Так', 'Комбіноване - таблетки і інсулін', 'Так', 'Інсулін', '1941-45', '1941-45', '1941-45', 'Так-1932-33', 'Так-1932-33', 45, 134, 78, 34, 23, '10`', 'Так', 'Кілька днів на тиждень', 45, 'Менше 1 разу на місяць', 'ЦД 2 типу', 1980, 45, 56, 'ффффф', 'іііііі', 'вввввв', 'ааааа', 'пппп', 'ррррр', 'Так', '2', '1980;1987', 'Так', 2, '1234;1235', '2020-05-21', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Ін`єкції гіалуронідази', '2020-05-14', '2020-05-17', '2020-05-09', '2020-05-09', '2020-05-08', '2020-05-08', '2020-05-06', '2020-05-31', '2020-05-26', '555.JPG', '2020-05-15', 'Так', '2020-05-05', 'Так', NULL, 'Так', '2020-05-06', 'Так', '2020-05-06', 'Діуретики', '2020-05-15', 'Так', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Ліва нога', 'Стопа', 0, '2020-05-15', 'Так', '11:00', '45', '2020-05-15', '34', '45', '2020-05-08', '2020-05-15', '34', '45', '56', '34', '45', '56', '34', '45', '56', '34', '2020-05-28', '34', '2020-05-21', '54', 'Так', '45', '2020-05-20', 'Так', '', '2020-05-21', '2020-05-21', '1111', '2222', '33333', '4444', '5555', '6666', '7777', '7888', '9999', '000', '123', '2020-05-23', 'Так', 'Ні', 'Так', '233322323', 'Так', 'Так', '333333', 'Дієта', 'Помпова інсулінотерапія', '2020-05-15', 'Інгібітори ДПП-4', 'ACE-інгібітори', 'Фібрати', 'Так', '3333', '2020-05-22', 'Імунотерапія', 26, '2020-05-14', 'Стадія II, Період Б (стадія IIб)', '2020-05-14', NULL, NULL, 0, NULL, NULL),
(17, 'Самчук ', 'Ірина', 'Валерівна', 'Так', '343', 'Жіноча', '2020-05-21', 'Коростень', 'Житомирська', 'Працюю, повна зайнятість', 56, 'Кротун', 'Василь', 'Павлович', 'Так', '767', '2020-05-24', 'Бергамо', 'Бергамо', 'Так', 'Комбіноване - таблетки і      інсулін', 'ВАщенко', 'Інна', 'Семенівна', 'Так', '789', '2020-05-29', 'Вільнюс', 'Вільнюс', 'Так', 'Інсулін', 'Так', 'Комбіноване - таблетки і інсулін', '1941-45', '1946-47', 'Не знаю', 'Так-1941-45', 'Так-1946-47', 45, 56, 45, 234, 324, '0`', 'Так', 'Кілька днів на тиждень', 23, 'Менше 1 разу на місяць', 'Панкреатогенний', 1980, 45, 55, '34324', '234', '324', '234', '234', '324', 'Так', '2', '1908;2000', 'Так', 1, '456', '2020-05-20', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Хірургічні втручання', '2020-05-16', '2020-05-17', '2020-05-24', '2020-05-05', '2020-05-06', '2020-05-07', '2020-05-08', '2020-05-09', '2020-05-10', '', '2020-05-22', 'Так', '2020-05-19', 'Так', NULL, 'Так', '2020-05-13', 'Так', '2020-05-22', 'Блокатори Са-каналів', '2020-05-17', 'Так', '2020-05-08', 'вище стопи до коліна', 'Так', '2020-05-10', 'Печіння', 'Ні, біль з одного боку', NULL, NULL, 'Народився в _____ тижнів (вказати)', 'Нормальна', 'Спонтанна', '3', 'Здавлення', 'Так', 'Опіоіди', '2020-05-15', 'Так', 'Так', 'Ні', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Ліва нога', 'Стопа', 0, '2020-05-15', 'Ні', '11:00', '45', '2020-05-14', '45', '34', '2020-05-05', '2020-05-10', '33', '33', '33', '33', '33', '33', '33', '33', '33', '33', '2020-05-28', '33', '2020-05-14', '33', 'Так', '33', '2020-05-20', 'Так', '', '2020-05-22', '2020-05-28', '334', '43', '43', '43', '54', '43', '54', '43', '345', '435', '345', '2020-05-16', 'Так', 'Так', 'Так', '345435', 'Так', 'Так', '4354354354', 'Таблетки', 'Помпова інсулінотерапія', '2020-05-29', 'Тіазолідиндіони', 'Бета-блокатори', 'Фібрати', 'Так', 'Лейкоз', '2020-05-14', 'Імунотерапія', 26, '2020-05-15', 'Стадія II, Період Б (стадія IIб)', '2020-05-15', '10`', 0, 0, NULL, NULL),
(18, 'Чуприна1', 'Антон', 'Яковлевич', 'Так', 'Антон', 'Чоловіча', '1940-05-28', 'Федерівка', '234', 'Не працюю, безробітний(а)', 2020, '', '', 'Не працюю, безробітний(а)', 'Ні', '', '0000-00-00', '', 'Ні', 'Ні', 'Діета', '', '', 'Ні', 'Ні', '', '0000-00-00', '', 'Ні', 'Ні', 'Діета', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 10, 45, 60, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'MODY-діабет', 0, 0, 0, 'ЦД 1 типу', '0', '0', '0', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, 'Народився в _____ тижнів (вказати)', 'Я був (була) при народженні великим малюком', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', 'Ні', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', 'Ні', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', 'Ні', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', 'Бігуаніди', '0000-00-00', 'Ні', 26, '2020-05-16', 'Ні', '2020-05-16', '10`', 0, 0, NULL, NULL),
(19, 'Корнійчук', 'Петро', 'Васильович', 'Так', '', 'Чоловіча', '1975-01-01', 'Київ', '', 'Не працюю, безробітний(а)', 2, '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Діета', '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Дієта', 'Ні', 'Діета', '1932-33', '', '', 'Ні', 'Ні', 0, 0, 0, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, '', '', '', '', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Так', 'Ні', 'Ні', 'Ні', 'Так', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, біль з одного боку', 'Ні', NULL, 'Народився в _____ тижнів (вказати)', '', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', '', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 35, '2020-05-15', 'Ні', '2020-05-15', '10`', 0, 0, NULL, NULL),
(20, 'ДУБІНА ', 'ВАЛЕНТИНА', 'ФЕДОРІВНА ', 'Ні', '', 'Жіноча', '1946-09-04', 'с. Гусавка', 'с. Гусавка', 'На пенсії', 0, 'Дубіна111', 'Олег 111', 'Васильович111', 'Ні', '', '1900-05-07', 'с. Гусавка', 'с. Гусавка', 'Так', 'Інсулін', 'Дубіна', 'Інна', 'Іванівна', 'Ні', '', '1901-05-28', 'Житомир', 'Житомир', 'Так', 'Інсулін', 'Ні', 'Діета', '1941-45', '1941-45', '1941-45', 'Ні', 'Ні', 200, 170, 90, 90, 50, '0`', 'Ні', 'Кілька днів на тиждень', 12, 'Ніколи', 'Латентний аутоімунний (LADA)', 1980, 35, 30, 'вввв', 'аааа', 'пппп', 'рррр', 'оооо', 'ллллл', 'Так', '1', '1990', 'Ні', 0, '', '2020-05-06', 'Так', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '2020-05-11', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '2020-05-06', 'Так', '2020-05-05', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Прямі інгібітори реніну', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, 'Не знаю', 'Нормальна', '', '', '', 'Ні', '', '2020-05-11', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Так', 'Ліва нога', 'Стопа', 1990, '2020-05-16', 'Так', '11:00', '45', '2020-05-05', '34', '45', '2020-05-05', '2020-05-08', '12', '23', '24', '12', '23', '34', '23', '12', '23', '23', '2020-05-06', '12', '2020-05-07', '12', 'Так', '12', '2020-05-12', 'Так', '', '2020-05-20', '2020-05-13', '213', '213', '21', '123', '213', '213', '213', '213', '213', '213', '123', '2020-05-24', 'Так', 'Так', 'Так', 'аврвап', 'Ні', 'Ні', 'івіа', 'Дієта', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 26, '2020-05-23', 'Ні', '2020-05-23', '10`', 0, NULL, NULL, NULL),
(21, 'кауа', 'уауцка', 'уцкуцкауцк', '--', '', 'Чоловіча', '2020-05-06', '', '', 'Не працюю, безробітний(а)', 0, 'вуцавц', 'уцвцука', 'уцкацкуцк', '--', '', '2020-05-14', '', '', 'Ні', 'Діета', '', '', '', 'Ні', '', '0000-00-00', '', '', 'Ні', 'Дієта', 'Ні', 'Діета', '', '', '', 'Ні', 'Ні', 0, 0, 0, 0, 0, '10`', 'Ні', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, '', '', '', '', '', '', 'Ні', '', '', 'Ні', 0, '', '', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', 'Ні', '0000-00-00', '', 'Ні', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', 'Ні', NULL, '', '', '', '', '', 'Ні', '', '0000-00-00', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', 'Ні', '', 0, '0000-00-00', 'Ні', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 'Ні', '', '0000-00-00', 'Ні', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 'Ні', 'Ні', 'Ні', '', 'Ні', 'Ні', '', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 26, '2020-05-27', 'Ні', '2020-05-27', '10`', 0, NULL, NULL, NULL),
(22, 'asads', 'asdas', 'asda', '--', '', 'Чоловіча', '0000-00-00', '', '', 'Не працюю, безробітний(а)', 0, '', '', '', '--', '', '0000-00-00', '', '', '--', 'Діета', '', '', '', '--', '', '0000-00-00', '', '', '--', 'Дієта', '--', 'Діета', '', '', '', '--', '--', 0, 0, 0, 0, 0, '10`', '--', 'Кожен день', 0, 'Ніколи', 'ЦД 1 типу', 0, 0, 0, '', '', '', '', '', '', '--', '', '', '--', 0, '', '', '--', '--', '--', '--', '--', '--', '--', '--', '--', 'Ні', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '--', '0000-00-00', '--', '0000-00-00', '--', '0000-00-00', '--', '0000-00-00', 'Ні', '0000-00-00', '--', '0000-00-00', '', '--', '0000-00-00', 'Ні, все нормально', 'Ні, болю немає', '--', NULL, '', '', '', '', '', '--', '', '0000-00-00', '--', '--', '--', '--', '--', '--', '--', '--', '--', 'Ні', '', 0, '0000-00-00', '--', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '--', '', '0000-00-00', '--', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '--', '--', '--', '', '--', '--', '', 'Не проводиться', 'Базисная инсулинотерапия', '0000-00-00', 'Бігуаніди', 'Не проводиться', 'Не проводиться', 'Ні', '', '0000-00-00', 'Ні', 34, '2020-06-23', 'Ні', '2020-06-23', '10`', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Структура таблиці `klinika`
--

CREATE TABLE `klinika` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `klinika`
--

INSERT INTO `klinika` (`id`, `name`) VALUES
(1, 'Клініка №1'),
(2, 'Клініка №2');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `const`
--
ALTER TABLE `const`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Індекси таблиці `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `karta`
--
ALTER TABLE `karta`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `klinika`
--
ALTER TABLE `klinika`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `const`
--
ALTER TABLE `const`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблиці `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT для таблиці `karta`
--
ALTER TABLE `karta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблиці `klinika`
--
ALTER TABLE `klinika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
