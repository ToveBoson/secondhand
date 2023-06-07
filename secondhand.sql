-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 07 jun 2023 kl 08:55
-- Serverversion: 5.7.24
-- PHP-version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `secondhand`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL,
  `garment` varchar(32) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `sold_date` date DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `clothes`
--

INSERT INTO `clothes` (`id`, `garment`, `size`, `price`, `sold_date`, `created`, `updated`, `seller_id`) VALUES
(1, 'Blus', 'S', 80, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 1),
(2, 'Kostymbyxor', 'L', 100, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 4),
(3, 'Kofta', 'M', 90, '2023-06-07', '2023-06-06 09:30:59', '2023-06-07 08:50:31', 3),
(4, 'Kavaj', 'XS', 160, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 8),
(5, 'Kjol', 'S', 50, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 6),
(6, 'Linne', 'M', 45, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 5),
(7, 'Skjorta', 'L', 70, '2023-06-21', '2023-06-06 09:30:59', '2023-06-06 09:57:45', 7),
(8, 'Kostymbyxor', 'XS', 65, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 2),
(9, 'Collegetröja', 'XL', 95, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 4),
(10, 'Tröja', 'M', 40, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 3),
(11, 'Klänning', 'L', 85, '2023-06-07', '2023-06-06 09:30:59', '2023-06-07 08:50:47', 1),
(12, 'Jeans', 'S', 120, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 5),
(13, 'Kofta', 'S', 30, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 5),
(14, 'Byxa', 'L', 85, '2023-06-05', '2023-06-06 09:30:59', '2023-06-06 17:22:15', 8),
(15, 'Kavaj', 'M', 200, NULL, '2023-06-06 09:30:59', '2023-06-06 09:31:23', 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `sellers`
--

INSERT INTO `sellers` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Lisa', 'Andersson', 'lisa.andersson@gmail.com'),
(2, 'Martin', 'Söderström', 'martin.soderstrom@hotmail.com'),
(3, 'Leif', 'Karlsson', 'leif.karlsson@live.se'),
(4, 'Stina', 'Svensson', 'stina.svensson@hotmail.com'),
(5, 'Bror', 'Sjöberg', 'bror.sjoberg@gmail.com'),
(6, 'Ylva', 'Larsson', 'ylva.larsson@live.se'),
(8, 'Alf', 'Månsson', 'alf.mansson@live.se');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Index för tabell `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT för tabell `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
