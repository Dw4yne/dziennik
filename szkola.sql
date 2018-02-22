-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Lut 2018, 09:49
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `idKlasy` int(11) NOT NULL,
  `nazwa klasy` varchar(2) NOT NULL,
  `idWychowawcy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `klasy`
--

INSERT INTO `klasy` (`idKlasy`, `nazwa klasy`, `idWychowawcy`) VALUES
(1, '1a', 1),
(2, '1b', 2),
(3, '1c', 3),
(4, '2a', 4),
(5, '2b', 5),
(6, '2c', 6),
(7, '3a', 7),
(8, '3b', 8),
(9, '3c', 9),
(10, '4a', 10),
(11, '4b', 11),
(12, '4c', 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciele`
--

CREATE TABLE `nauczyciele` (
  `idNauczyciela` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `telefon` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `nauczyciele`
--

INSERT INTO `nauczyciele` (`idNauczyciela`, `imie`, `nazwisko`, `telefon`, `login`, `haslo`) VALUES
(1, 'Wojciech', 'Zapiekański', '999999999', 'gruby', 'nierob');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id_oceny` int(11) NOT NULL,
  `przedmiot` varchar(50) NOT NULL,
  `id_ucznia` int(11) NOT NULL,
  `ocena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id_oceny`, `przedmiot`, `id_ucznia`, `ocena`) VALUES
(1, 'Matematyka', 1, 3),
(2, 'Jez. Angielski', 2, 4),
(3, 'Matematyka', 1, 3),
(4, 'Jez. Angielski', 2, 4),
(5, 'Witryny i aplikacje internetowe', 2, 5),
(6, 'Systemy baz danych', 1, 2),
(7, 'Historia', 2, 1),
(8, 'Biologia', 1, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opiekunowie`
--

CREATE TABLE `opiekunowie` (
  `idOpiekuna` int(11) NOT NULL,
  `imie` varchar(11) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(11) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `opiekunowie`
--

INSERT INTO `opiekunowie` (`idOpiekuna`, `imie`, `nazwisko`, `telefon`) VALUES
(1, 'Ewa', 'Sawicka', 507834067),
(2, 'Michał', 'Soliszewski', 507407867),
(3, 'Eustachy', 'Kowalski', 532507954),
(4, 'Staś', 'Jędrach', 897601980),
(5, 'Małgorzata', 'Prądzińska', 507059234),
(6, 'Ala', 'Rutkowska', 293059704),
(7, 'Mateusz', 'Jabłoński', 697039597),
(8, 'Ewelina', 'Woźniak', 103405321),
(9, 'Kuba', 'Marszałek', 607932567),
(10, 'Edward', 'Sokołowski', 908543212),
(11, 'Marysia', 'Borkowska', 607948283),
(12, 'Jagoda', 'Kaczmarek', 607543780),
(13, 'Edyp', 'Adamczyk', 123452045),
(14, 'Karolina', 'Pawłowska', 765363536),
(15, 'Magdalena', 'Szczepańska', 874745464),
(16, 'Michał', 'Nowak', 604459324),
(17, 'Alicja', 'Pawlak', 704569342),
(18, 'Justyna', 'Syberiusz', 435676332),
(19, 'Kamila', 'Wieczorek', 310341453),
(20, 'Andrzej', 'Borczyk', 564089234),
(21, 'Tadeusz', 'Kowalczyk', 123678345),
(22, 'Ameba', 'Olszewska', 321876345);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE `przedmioty` (
  `idPrzedmiotu` int(11) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `idNauczyciela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `przedmioty`
--

INSERT INTO `przedmioty` (`idPrzedmiotu`, `nazwa`, `idNauczyciela`) VALUES
(1, 'j.Polski', 1),
(2, 'j.Angielski', 2),
(3, 'j.Niemiecki', 3),
(4, 'Informatyka', 4),
(5, 'Matematyka', 5),
(6, 'Bazy danych', 6),
(7, 'Sieci komputerowe', 7),
(8, 'Biologia', 8),
(9, 'W-F', 9),
(10, 'Systemy operacyjne', 10),
(11, 'Historia', 11),
(12, 'Geografia', 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `semestr`
--

CREATE TABLE `semestr` (
  `Id_semestru` int(11) NOT NULL,
  `numer semestru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `semestr`
--

INSERT INTO `semestr` (`Id_semestru`, `numer semestru`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczen`
--

CREATE TABLE `uczen` (
  `idUcznia` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idKlasy` int(11) NOT NULL,
  `telefon` int(11) NOT NULL,
  `idOpiekuna` int(11) NOT NULL,
  `login` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `haslo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uczen`
--

INSERT INTO `uczen` (`idUcznia`, `imie`, `nazwisko`, `idKlasy`, `telefon`, `idOpiekuna`, `login`, `haslo`) VALUES
(1, 'Dominik', 'Kowalski', 0, 123123123, 0, 'domin', 'teb'),
(2, 'Kamil', 'Soliszewski', 0, 132435656, 0, 'loginiarz', 'haslarz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klasy`
--
ALTER TABLE `klasy`
  ADD PRIMARY KEY (`idKlasy`);

--
-- Indexes for table `nauczyciele`
--
ALTER TABLE `nauczyciele`
  ADD PRIMARY KEY (`idNauczyciela`);

--
-- Indexes for table `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id_oceny`);

--
-- Indexes for table `opiekunowie`
--
ALTER TABLE `opiekunowie`
  ADD PRIMARY KEY (`idOpiekuna`);

--
-- Indexes for table `przedmioty`
--
ALTER TABLE `przedmioty`
  ADD PRIMARY KEY (`idPrzedmiotu`);

--
-- Indexes for table `semestr`
--
ALTER TABLE `semestr`
  ADD PRIMARY KEY (`Id_semestru`);

--
-- Indexes for table `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`idUcznia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klasy`
--
ALTER TABLE `klasy`
  MODIFY `idKlasy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `nauczyciele`
--
ALTER TABLE `nauczyciele`
  MODIFY `idNauczyciela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id_oceny` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `opiekunowie`
--
ALTER TABLE `opiekunowie`
  MODIFY `idOpiekuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  MODIFY `idPrzedmiotu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `semestr`
--
ALTER TABLE `semestr`
  MODIFY `Id_semestru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `uczen`
--
ALTER TABLE `uczen`
  MODIFY `idUcznia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
