-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Tid vid skapande: 14 dec 2015 kl 17:45
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `jomo`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `jos_pa_videolesson`
--

CREATE TABLE IF NOT EXISTS `jos_pa_videolesson` (
`id` bigint(20) NOT NULL,
  `titel` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `artist` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `antal_visningar` bigint(20) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Dumpning av Data i tabell `jos_pa_videolesson`
--

INSERT INTO `jos_pa_videolesson` (`id`, `titel`, `artist`, `antal_visningar`) VALUES
(1, 'Stairway to Heaven - Solo ', ' Led Zeppelin', 20),
(2, 'Stitches', ' Shawn Mendes', 19),
(3, 'Another Brick in the Wall ', 'Grundkurs: Akustisk gitarr', 18),
(4, ' We Will Rock You ', ' Grundkurs: Akustisk gitarr', 17),
(5, 'Stilla natt', 'Jullåtar', 16),
(6, 'E-moll - ditt första ackord ', '  Grundkurs: Akustisk gitarr', 15),
(7, 'Was Made for Lovin'' You ', 'Grundkurs: Akustisk gitarr', 14),
(8, 'Olles blues  ', 'Grundkurs: Akustisk gitarr', 13),
(9, 'Olles blues ', 'Grundkurs: Piano & Keyboard', 12),
(10, 'Für Elise ', 'Beethoven', 11),
(11, 'Peaches en regalia', 'Grundkurs: Maracas', 10);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `jos_pa_videolesson`
--
ALTER TABLE `jos_pa_videolesson`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `jos_pa_videolesson`
--
ALTER TABLE `jos_pa_videolesson`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
