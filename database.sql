-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jun 2021 um 12:12
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `database`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subscriber`
--

CREATE TABLE `subscriber` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `subscriber`
--

INSERT INTO `subscriber` (`firstname`, `lastname`, `mail`) VALUES
('tobias', 'unte', 'unterh@unibz.it'),
('Tobias', 'Unterhauser', 'unterhaueser.tobias@gmail.com'),
('tobias', 'unterhauser', 'unterhauser.tobias@text.com'),


--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
