-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 jun 2022 om 11:28
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quikitdatabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `uren`
--

CREATE TABLE `uren` (
  `uren_id` int(255) NOT NULL,
  `begintijd` varchar(50) NOT NULL,
  `eindtijd` varchar(50) NOT NULL,
  `pauze` varchar(50) NOT NULL,
  `werkdag` varchar(50) NOT NULL,
  `projecten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `uren`
--

INSERT INTO `uren` (`uren_id`, `begintijd`, `eindtijd`, `pauze`, `werkdag`, `projecten`) VALUES
(87, '12:00', '22:00', '99', 'Donderdag', 'ApplicatieQuikIT'),
(88, '12:00', '18:00', '12', 'Vrijdag', 'ApplicatieQuikIT'),
(89, '12:00', '18:00', '99', 'Vrijdag', 'ApplicatieQuikIT');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'pieter', 'pieterleeg12345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'jasper', 'jaspergames@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'test', 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'matthijs', 'matthijs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'pieter', 'pieter@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'test12345', 'test12345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `uren`
--
ALTER TABLE `uren`
  ADD PRIMARY KEY (`uren_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `uren`
--
ALTER TABLE `uren`
  MODIFY `uren_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
