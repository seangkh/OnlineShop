-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 20. Nov 2018 um 19:50
-- Server-Version: 10.1.26-MariaDB
-- PHP-Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `carpets_online_shop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `stock`, `image`, `category_id`) VALUES
(1, 'Armani', 'Dicke: 12mm\r\nGrösse: 290x160\r\nKnoten: 260\'000 /㎡\r\nKette: 100% Wolle\r\nUrspring: Iran/Persien', 1650, 10, 'Armani,1690-290x160.jpg', 1),
(2, 'Bakhtiari', 'Dicke: 10mm\r\nGrösse: 170x80\r\nKnoten: 160\'000 /㎡\r\nKette: 100% Wolle\r\nUrspring: Iran/Persien', 760, 12, 'Bakhtiari,760-170.jpg', 1),
(3, 'Sarooj', 'Dicke: 10mm\r\nGrösse: 180x120\r\nKnoten: 500\'000 /㎡\r\nKette: 100%Baumwolle\r\nUrspring: Iran/Persien', 1980, 12, 'Sarooj,1980-180x120.jpg', 1),
(4, 'Kerman Mashahir', 'Dicke: 15mm\r\nGrösse: 180x120\r\nKnoten: 260\'000 /㎡\r\nKette: 100%Baumwolle\r\nUrspring: Iran/Persien', 1580, 23, 'Kerman Mashahir,1580-180x120.jpg', 1),
(5, 'Yazd', 'Dicke: 9mm\r\nGrösse: 220x170\r\nKnoten: 500\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 6890, 6, 'Yazd,6890-420x300.jpg', 1),
(6, 'Kashan', 'Dicke: 10mm\r\nGrösse: 295x1503\r\nKnoten: 550\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 1780, 15, 'Kashan,1780-295x150.jpg', 1),
(7, 'Sarooj', 'Dicke: 7mm\r\nGrösse: 428x338\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Schafschurwolle\r\nUrspring: Iran/Persien', 9980, 10, 'Sarooj,9980-428x338.jpg', 1),
(8, 'Toranj', 'Dicke: 9mm\r\nGrössw: 207x146\r\nKnoten: 500\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 2999, 14, 'Toranj,2999-207x146.jpg', 1),
(9, 'Wisgoon_M', 'Dicke: 12mm\r\nGrössw: 200x180\r\nKnoten: 260\'000 /㎡\r\nKette: 100% Wolle\r\nUrspring: Iran/Persien', 740, 7, 'Wisgoon,740-200x180.jpg', 2),
(10, 'Bidjar', 'Dicke: 8mm\r\nGrösse: 240x180\r\nKnoten: 550\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 3460, 12, 'Bidjar,3460-240x180.jpg', 1),
(11, 'Bidjar', 'Dicke: 7mm\r\nGrösse: 280x190\r\nKnoten: 1\'000\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 4999, 12, 'Bidjar,3850-304x199.jpg', 1),
(12, 'Bakhtiari', 'Dicke: 8mm\r\nGrösse: 328x190\r\nKnoten: 500\'000 /㎡\r\nKette: 100% Schafschurwolle\r\nUrspring: Iran/Persien', 2530, 10, 'Bakhtiari,2530-328x190.jpg', 1),
(13, 'Bakhtiari', 'Dicke: 9mm\r\nGrösse: 203x178\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Schafschurwolle\r\nUrspring: Iran/Persien', 1690, 6, 'Bakhtiari,1690-203x198.jpg', 1),
(14, 'Esfahan', 'Dicke: 6mm\r\nGrösse: 302x1980\r\nKnoten: 1\'000\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 9000, 12, 'Esfahan,9000-242x161.jpg', 1),
(15, 'Esfahan', 'Dicke: 9mm\r\nGrösse: 199x160\r\nKnoten: 400\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 6135, 12, 'Esfahan,6135-199x199.jpg', 1),
(16, 'Esfahn', 'Dicke: 6mm\r\nGrösse: 120x75\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Seide\r\nUrspring: Iran/Persien', 800, 19, 'Esfahan,800-120x75.jpg', 1),
(17, 'Ghom Kork', 'Dicke: 15mm\r\nGrösse: 150x95\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 1450, 6, 'Ghom Kork,1450-150x95.jpg', 1),
(18, 'Ghom', 'Dicke: 10mm\r\nGrösse: 93x74\r\nKnoten: 460\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 720, 8, 'Ghom,720-93x74.jpg', 1),
(19, 'Ghom', 'Dicke: 12mm\r\nGrösse: 302x198\r\nKnoten: 500\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 3250, 7, 'Ghom,3250-302x198.jpg', 1),
(20, 'Naeen', 'Dicke: 12mm\r\nGrösse: 280x140\r\nKnoten: 550\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 3700, 8, 'Naeen,3700-280x140.jpg', 1),
(21, 'Tabriz', 'Dicke: 12mm\r\nGrössw: 208x198\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 2300, 21, 'Tabriz,2300-208x198.jpg', 1),
(22, 'Afshan_M', 'Dicke: 15mm\r\nGrösse: 300x150\r\nKnoten: 1\'500 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 485, 30, 'Afschan_M,485-300x150.jpg', 2),
(23, 'Afshan Darbari_M', 'Dicke: 15mm\r\nGrösse: 280x140\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Hemp\r\nUrspring: Iran/Persien', 550, 23, 'Afshan Darbari_M,550-280x140.jpg', 2),
(24, 'Afshan Darbari_M', 'Dicke: 12mm\r\nGrösse: 290x190\r\nKnoten: 1\'500 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 700, 9, 'Afshan Darbari_M,700-290x190.jpg', 2),
(25, 'Beheshti_M', 'Dicke: 15mm\r\nGrösse: 400x350\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 1100, 12, 'Beheschti_M,1100-400x350.jpg', 2),
(26, 'Esfahan_M', 'Dicke: 15mm\r\nGrösse: 106x70\r\nKnoten: 1\'400 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 450, 4, 'Esfahan_M,450,106x70.jpg', 2),
(27, 'Esfahan_M', 'Dicke: 15mm\r\nGrösse: 190x100\r\nKnoten: 2\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 735, 21, 'Esfahan,735-199x199.jpg', 2),
(28, 'Esfahan_M', 'Dicke: 15mm\r\nGrösse: 293x202\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 980, 31, 'Esfahan_M,980-293x202.jpg', 2),
(29, 'Kashan_M', 'Dicke: 15mm\r\nGrösse: 200x160\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 390, 43, 'Kashan_M,390-200x160.jpg', 2),
(30, 'Bheshti_M', 'Dicke: 15mm\r\nGrösse: 300x190\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 1270, 41, 'Beheschti_M,1100-400x350.jpg', 2),
(31, 'Mound_M', 'Dicke: 15mm\r\nGrösse: 20x165\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester-Hemp\r\nUrspring: Iran/Persien', 290, 30, 'Mouod_M,290-120x78.jpg', 2),
(32, 'Moud_Mahi_M', 'Dicke: 14mm\r\nGrösse: 217x143\r\nKnoten: 1\'500 /㎡\r\nKette: Wolle -Hemp\r\nUrspring: Iran/Persien', 700, 21, 'Mooud_Mahi_M,700-217x143.jpg', 2),
(33, 'Parnia_M', 'Dicke: 15mm\r\nGrössw: 280x190\r\nKnoten: 1\'600 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 599, 21, 'Parnia_M,599-280x190.jpg', 2),
(35, 'Naeen_M', 'Dicke: 16mm\r\nGrösse: 180x118\r\nKnoten: 1\'500 /㎡\r\nKette: Wolle - Polyester - Hemp\r\nUrspring: Iran/Persien', 900, 12, 'Naeen_M,900-180x118.jpg', 2),
(36, 'Tork_M', 'Dicke: 16mm\r\nGrösse: 300x160\r\nKnoten: 1\'550 /㎡\r\nKette: Wolle - Hemp\r\nUrspring: Iran/Persien', 1800, 15, 'Tork_M,1800-300x160.jpg', 2),
(37, 'Torkaman_M', 'Dicke: 15mm\r\nGrösse: 180x90\r\nKnoten: 1\'500 /㎡\r\nKette: Wolle - Hemp\r\nUrspring: Iran/Persien', 1399, 12, 'Torkaman_M,1399-180x90.jpg', 2),
(38, 'Kerman', 'Dicke: 15mm\r\nGrösse: 148x86\r\nKnoten: 260\'000 /㎡\r\nKette: 100%Baumwolle\r\nUrspring: Iran/Persien\r\nUrspring: Iran/Persien', 500, 13, 'Kerman,500-148x86.jpg', 1),
(39, 'Kheshti_M', 'Dicke: 15mm\r\nGrösse: 350x260\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 1610, 18, 'Kheschti_M,1610-350x260.jpg', 2),
(40, 'Mashhad_M', 'Dicke: 15mm\r\nGrösse: 290x230\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 1340, 10, 'Mashhad_M,1340-290x230.jpg', 2),
(41, 'Mashhad_M', 'Dicke: 17mm\r\nGrösse: 270x200\r\nKnoten: 1\'600 /㎡\r\nKette: Wolle - Polyester - Hemp\r\nUrspring: Iran/Persien', 1570, 0, 'Mashhad_M,1570-270x200', 2),
(42, 'Mashhad_M', 'Dicke: 13mm\r\nGrösse: 250x155\r\nKnoten: 1\'000 /㎡\r\nKette: Hemp - Polyester\r\nUrspring: Iran/Persien', 200, 0, 'Mashhad_M,200-250x155', 2),
(44, 'Mashhad Miniator_M', 'Dicke: 15mm\r\nGrösse: 270x190\r\nKnoten: 800 /㎡\r\nKette: Wolle - Polyester\r\nUrspring: Iran/Persien', 638, 15, 'Mashhad_Miniator_M,638-270x190.jpg', 2),
(45, 'Tabriz_M', 'Dicke: 12mm\r\nGrössw: 290x190\r\nKnoten: 1\'500 /㎡\r\nKette: Hemp - Polyester\r\nUrspring: Iran/Persien', 800, 11, 'Tabriz_M,800-290x190', 2),
(46, 'Toos_M', 'Dicke: 14mm\r\nGrösse: 197x158\r\nKnoten: 1\'450 /㎡\r\nKette: Wolle\r\nUrspring: Iran/Persien', 1790, 13, 'Toos_M,1790-197x158', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
