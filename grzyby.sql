-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2026 at 09:45 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grzybson`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grzyby`
--

CREATE TABLE `grzyby` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `jadalny` tinyint(1) NOT NULL,
  `kolor_kapelusza` varchar(50) DEFAULT NULL,
  `wystepowanie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grzyby`
--

INSERT INTO `grzyby` (`id`, `nazwa`, `jadalny`, `kolor_kapelusza`, `wystepowanie`) VALUES
(1, 'Borowik szlachetny', 1, 'brązowy', 'lasy liściaste i iglaste'),
(2, 'Muchomor czerwony', 0, 'czerwony z bia?ymi kropkami', 'lasy iglaste'),
(3, 'Pieprznik jadalny (kurka)', 1, 'żółty', 'lasy mieszane'),
(4, 'Gąska zielonka', 1, 'zielonkawy', 'lasy sosnowe'),
(5, 'Muchomor sromotnikowy', 0, 'zielonkawy', 'lasy li?ciaste'),
(6, 'Maślak zwyczajny', 1, 'brązowy', 'lasy iglaste'),
(7, 'Czubajka kania', 1, 'brązowy w catki', 'laski, skraje lasów'),
(8, 'Koźlak', 1, 'Tęczowy', 'Bory tucholskie'),
(9, 'Koźlak kurowaty', 1, 'Fajny', 'lasy mieszane'),
(11, 'Fajny Grzybek', 1, 'Tęczowy', 'lasy iglaste'),
(12, 'kolorowe', 0, 'puropusze', 'lasy liściaste'),
(13, 'mały', 1, 'Biały', 'Bory tucholskie');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `grzyby`
--
ALTER TABLE `grzyby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grzyby`
--
ALTER TABLE `grzyby`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
