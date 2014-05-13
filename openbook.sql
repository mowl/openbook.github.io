-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 13 mei 2014 om 14:49
-- Serverversie: 5.5.32
-- PHP-versie: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databank: `openbook`
--
CREATE DATABASE IF NOT EXISTS `openbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `openbook`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `registered_on`) VALUES
(1, 'mowl', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'Matthias', 'Van Parijs', 'me@matvp.info', '2014-05-13 11:07:09'),
(4, 'sp00f', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'Mister', 'Sp00f', 'sp00f@hotmail.com', '2014-05-13 12:49:22');
