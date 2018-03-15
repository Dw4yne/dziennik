-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Mar 2018, 20:37
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--

CREATE TABLE `klasy` (
  `id_klasy` int(11) NOT NULL,
  `klasa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_wychowawcy` int(11) NOT NULL,
  `profil` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `klasy`
--

INSERT INTO `klasy` (`id_klasy`, `klasa`, `id_wychowawcy`, `profil`) VALUES
(1, '3A', 1, 'Technik informatyk'),
(2, '3E', 3, 'Technik fotografii'),
(3, '3G', 2, 'Technik gamer');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciel`
--

CREATE TABLE `nauczyciel` (
  `id_nauczyciela` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `haslo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PESEL` char(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Adres_zamieszkania` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numer_kontaktowy` bigint(12) NOT NULL,
  `komentarz` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `nauczyciel`
--

INSERT INTO `nauczyciel` (`id_nauczyciela`, `imie`, `nazwisko`, `login`, `haslo`, `PESEL`, `Adres_zamieszkania`, `numer_kontaktowy`, `komentarz`) VALUES
(1, 'Justyna', 'Wołejko', 'loginj', 'loginj', '', '', 0, ''),
(2, 'Paweł', 'Zawadzki', 'machina', 'cyfrowa', '', '', 0, ''),
(3, 'Katarzyna', 'Wtulich', 'kata', 'wtuli', '', '', 0, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id_oceny` int(11) NOT NULL,
  `id_przedmiotu` int(11) NOT NULL,
  `id_ucznia` int(11) NOT NULL,
  `ocena` float NOT NULL,
  `waga` int(11) DEFAULT NULL,
  `id_nauczyciela` int(11) NOT NULL,
  `semestr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id_oceny`, `id_przedmiotu`, `id_ucznia`, `ocena`, `waga`, `id_nauczyciela`, `semestr`) VALUES
(12, 3, 2, 1, NULL, 3, 1),
(13, 2, 2, 2, NULL, 3, 1),
(14, 5, 2, 3, NULL, 2, 1),
(15, 10, 2, 4, NULL, 2, 1),
(16, 8, 2, 5, NULL, 1, 1),
(17, 9, 2, 6, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiot`
--

CREATE TABLE `przedmiot` (
  `id_przedmiotu` int(11) NOT NULL,
  `przedmiot` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `przedmiot`
--

INSERT INTO `przedmiot` (`id_przedmiotu`, `przedmiot`) VALUES
(1, 'Podstawy przedsiębiorczości'),
(2, 'Działalność gospodarcza w branży informatycznej'),
(3, 'Biologia'),
(4, 'Wiedza o społeczeństwie'),
(5, 'Historia'),
(6, 'j. Polski'),
(7, 'j. Niemiecki'),
(8, 'j. Angielski'),
(9, 'Matematyka'),
(10, 'Informatyka'),
(11, 'Wychowanie fizyczne'),
(12, 'Religia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczen`
--

CREATE TABLE `uczen` (
  `id_ucznia` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `haslo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_klasy` int(11) NOT NULL,
  `PESEL` char(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Adres_zamieszkania` int(50) NOT NULL,
  `numer_kontaktowy` bigint(12) NOT NULL,
  `komentarz` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `uczen`
--

INSERT INTO `uczen` (`id_ucznia`, `imie`, `nazwisko`, `login`, `haslo`, `id_klasy`, `PESEL`, `Adres_zamieszkania`, `numer_kontaktowy`, `komentarz`) VALUES
(1, 'Damian', 'Prądziński', 'prda', 'prda', 1, '', 0, 0, ''),
(2, 'Kamil', 'Soliszewski', 'login', 'haslo', 1, '', 0, 0, ''),
(3, 'Dominik', 'Kowalski', 'admin', 'admin', 1, '', 0, 0, '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klasy`
--
ALTER TABLE `klasy`
  ADD PRIMARY KEY (`id_klasy`),
  ADD KEY `klasa` (`klasa`),
  ADD KEY `id_wychowawcy` (`id_wychowawcy`);

--
-- Indeksy dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  ADD PRIMARY KEY (`id_nauczyciela`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id_oceny`),
  ADD KEY `id_przedmiotu` (`id_przedmiotu`),
  ADD KEY `id_ucznia` (`id_ucznia`),
  ADD KEY `id_nauczyciela` (`id_nauczyciela`);

--
-- Indeksy dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  ADD PRIMARY KEY (`id_przedmiotu`),
  ADD KEY `id_przedmiotu` (`id_przedmiotu`);

--
-- Indeksy dla tabeli `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`id_ucznia`),
  ADD KEY `id_klasy` (`id_klasy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klasy`
--
ALTER TABLE `klasy`
  MODIFY `id_klasy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  MODIFY `id_nauczyciela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id_oceny` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  MODIFY `id_przedmiotu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `uczen`
--
ALTER TABLE `uczen`
  MODIFY `id_ucznia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klasy`
--
ALTER TABLE `klasy`
  ADD CONSTRAINT `klasy_ibfk_1` FOREIGN KEY (`id_wychowawcy`) REFERENCES `nauczyciel` (`id_nauczyciela`);

--
-- Ograniczenia dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_ibfk_1` FOREIGN KEY (`id_przedmiotu`) REFERENCES `przedmiot` (`id_przedmiotu`),
  ADD CONSTRAINT `oceny_ibfk_2` FOREIGN KEY (`id_nauczyciela`) REFERENCES `nauczyciel` (`id_nauczyciela`),
  ADD CONSTRAINT `oceny_ibfk_3` FOREIGN KEY (`id_ucznia`) REFERENCES `uczen` (`id_ucznia`);

--
-- Ograniczenia dla tabeli `uczen`
--
ALTER TABLE `uczen`
  ADD CONSTRAINT `uczen_ibfk_1` FOREIGN KEY (`id_klasy`) REFERENCES `klasy` (`id_klasy`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
