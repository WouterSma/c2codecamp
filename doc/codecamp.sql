-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 apr 2022 om 16:04
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codecamp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `num_pages` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `num_pages`) VALUES
(1, 'harry balls: the secret dark room', 'jk. jk', 9124),
(2, 'nuts and butts', 'joch2em', 69),
(5, 'blabla', 'biggus dickus', 420);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `user` text NOT NULL,
  `comment` text NOT NULL,
  `twit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `user`, `comment`, `twit_id`) VALUES
(1, 'joch2em', 'Yeah i will thx!', 2),
(2, 'joch2em', 'Wow it looks so cool!', 2),
(3, 'user1', 'ddfgdfgd', 6),
(4, 'user1', 'ik snap er geen kit van', 4),
(5, 'user1', 'cool me2!', 7),
(6, 'user1', 'oh that was my own post', 7),
(7, 'user1', 'me2', 5),
(8, 'user1', 'L', 8),
(9, 'niels', 'me2', 9),
(10, 'niels', 'test3', 9);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `liked_books`
--

CREATE TABLE `liked_books` (
  `user_id` bigint(20) NOT NULL,
  `book_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `liked_books`
--

INSERT INTO `liked_books` (`user_id`, `book_id`) VALUES
(1, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `twits`
--

CREATE TABLE `twits` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `user` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `twits`
--

INSERT INTO `twits` (`id`, `title`, `user`, `message`) VALUES
(1, 'kabouter plop SUCKS', 'deez_nutter', 'Honestly i think the dutch show kabouter plop ACTUALLY F*CKING SUCKS, it has almost no story line and if you like it you arnt human.'),
(2, 'NEW DOOM GAME', 'Doomer69', 'Yo guys! You should check out the new doom game that just got released, its really cool!'),
(4, 'c# lessen', 'marcel', 'tab tab tab tab tab tab'),
(5, 'testing user', '<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:\\xampp\\htdocs\\c2codecamp\\tweeter\\create.php</b> on line <b>9</b><br />\r\n', 'twitttttyyyy'),
(6, 'test2', 'user1', 'isjflsjos'),
(7, 'hi', 'user1', 'im new here!'),
(8, 'i\'m kinda gay just so you know.', 'niels', 'so yeah don\'t judge thanks'),
(9, 'test1', 'niels', 'small pp');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`) VALUES
(1, 'user1', '$2y$10$f3qMdOsKqCO.HCLdUufRoe/teUutvNioHck5tafQC68uUbU3/mOiy', 'admin'),
(5, 'pietje', '$2y$10$F9NdjY/oQmhsMu2gy1F08uHtScCYk7QmDpYhZD.pDDBF6CpL2ab5W', 'content_leverancier'),
(9, 'user2', '$2y$10$D8.8Kt/JdH.E2998PKuw..rH.WvovFKJDlvmXmClWufdKEL/lA0SO', 'sales_manager'),
(10, 'user3', '$2y$10$SkD0sq2NEM7DS.r4IfWXvOrYtjAjCK1uhaXvf21Ivp2PGrp4CSGou', 'user'),
(12, 'niels', '$2y$10$IhSGkMjpNqqiaoBaU1Y6eeVLsP9.czB5ereNoWaC9L0fjj/Y57sAC', 'user');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `twits`
--
ALTER TABLE `twits`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `twits`
--
ALTER TABLE `twits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
