-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Gru 2021, 23:35
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `moosicc`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `albumy`
--

CREATE TABLE `albumy` (
  `id` int(255) NOT NULL,
  `nazwa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wykonawca_id` int(11) NOT NULL,
  `rok_wydania` int(4) NOT NULL,
  `czas_sluchania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `albumy`
--

INSERT INTO `albumy` (`id`, `nazwa`, `wykonawca_id`, `rok_wydania`, `czas_sluchania`) VALUES
(1, 'Zachód', 1, 2019, 28),
(2, 'Płyta Rodzaju', 1, 2018, 35),
(3, 'Miło było Poznać', 1, 2016, 42),
(5, 'In Tongues', 6, 2018, 55),
(6, 'Ballads 1', 6, 2018, 36),
(7, 'Nectar', 6, 2020, 54);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `piosenki`
--

CREATE TABLE `piosenki` (
  `id` int(255) NOT NULL,
  `nazwa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `album_id` int(11) NOT NULL,
  `dlugosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `piosenki`
--

INSERT INTO `piosenki` (`id`, `nazwa`, `album_id`, `dlugosc`) VALUES
(1, 'Eurobiznes', 1, 89),
(2, 'Billy Bounce', 1, 191),
(3, 'Nów', 1, 215),
(4, 'Zachód <3', 1, 228),
(5, 'Noc', 1, 100),
(6, 'Skit', 1, 90),
(7, 'Dżentelmen', 1, 188),
(8, 'Papierowa Rocznica', 1, 86),
(9, '2.0', 1, 198),
(10, '2%', 1, 152),
(11, 'Przezroczysty', 1, 119),
(12, 'Nieboskłonem', 2, 230),
(13, 'Płyta Rodzaju', 2, 207),
(14, 'Niech się stanie', 2, 262),
(15, 'Siódma noc', 2, 257),
(16, 'Zjawa', 2, 179),
(17, 'Wieczne Pióro', 2, 109),
(18, 'Ala Tołstoj', 2, 138),
(19, 'List', 2, 191),
(20, 'Ala Tołstoj 2', 2, 81),
(21, 'Szarzyzna i Duch', 2, 288),
(22, 'Wstęp', 3, 95),
(23, 'Kim Ja Jestem?', 3, 201),
(24, 'Jestem Dźwiękiem i Słowem', 3, 223),
(25, '2016-1995', 3, 76),
(26, 'Początek', 3, 188),
(27, 'Żar Ulic', 3, 264),
(28, 'Na Ziemie', 3, 16),
(29, 'Powrót do Przyszłości', 3, 322),
(30, 'Miłość', 3, 227),
(31, 'Radio Bus (Wstęp)', 3, 100),
(32, 'Radio Bus', 3, 243),
(33, 'Jest Mniej Więcej', 3, 185),
(34, 'Equinox', 3, 136),
(35, 'Miło było Poznać', 3, 234),
(60, 'Will He', 5, 202),
(61, 'Pills', 5, 187),
(62, 'Demons', 5, 176),
(63, 'Window', 5, 152),
(64, 'Bitter Fuck', 5, 154),
(65, 'worldstar money (interlude)', 5, 126),
(66, 'Plastic Taste', 5, 120),
(67, 'I Dont Wanna Waste My Time', 5, 164),
(68, 'Attention', 6, 128),
(69, 'Slow Dancing In The Dark', 6, 209),
(70, 'Test Drive', 6, 179),
(71, 'Wanted U', 6, 251),
(72, 'Can\'t Get Over You', 6, 107),
(73, 'Yeah Right', 6, 174),
(74, 'Why Am I Still In LA', 6, 199),
(75, 'No Fun', 6, 168),
(76, 'Come Thru', 6, 153),
(77, 'R.I.P.', 6, 158),
(78, 'XNXX', 6, 127),
(79, 'I\'ll See You In 40', 6, 253);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wykonawcy`
--

CREATE TABLE `wykonawcy` (
  `id` int(255) NOT NULL,
  `nazwa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rok_utworzenia` int(4) NOT NULL,
  `kraj_pochodzenia` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wykonawcy`
--

INSERT INTO `wykonawcy` (`id`, `nazwa`, `rok_utworzenia`, `kraj_pochodzenia`) VALUES
(1, 'Meek, Oh Why ?!', 2015, 'Polska'),
(2, 'Josh Golden', 2009, 'USA'),
(3, 'Hot Mulligan', 2014, 'USA'),
(6, 'George Kusunoki \"Joji\" Miller', 2017, 'Japonia');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `albumy`
--
ALTER TABLE `albumy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nazwa` (`nazwa`),
  ADD KEY `wykonawca_id` (`wykonawca_id`);

--
-- Indeksy dla tabeli `piosenki`
--
ALTER TABLE `piosenki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indeksy dla tabeli `wykonawcy`
--
ALTER TABLE `wykonawcy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rok_utworzenia` (`rok_utworzenia`),
  ADD KEY `nazwa` (`nazwa`),
  ADD KEY `kraj_pochodzenia` (`kraj_pochodzenia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `albumy`
--
ALTER TABLE `albumy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `piosenki`
--
ALTER TABLE `piosenki`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT dla tabeli `wykonawcy`
--
ALTER TABLE `wykonawcy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `albumy`
--
ALTER TABLE `albumy`
  ADD CONSTRAINT `albumy_ibfk_1` FOREIGN KEY (`wykonawca_id`) REFERENCES `wykonawcy` (`id`);

--
-- Ograniczenia dla tabeli `piosenki`
--
ALTER TABLE `piosenki`
  ADD CONSTRAINT `piosenki_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albumy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
