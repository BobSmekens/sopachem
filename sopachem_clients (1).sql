-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 jan 2019 om 16:30
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sopachem_clients`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `article_id` int(3) NOT NULL,
  `article_title` varchar(32) NOT NULL,
  `article_branche` varchar(32) NOT NULL,
  `product_id` int(11) NOT NULL,
  `article_text` varchar(500) NOT NULL,
  `product_supplier` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_branche`, `product_id`, `article_text`, `product_supplier`) VALUES
(1, 'Nanotransmitters in DNA', '1', 1, 'All I can say is WOW. I had the previous version              that I thought was the best and this one              is even better. Even though it is smaller/thinner,              they still somehow made it even more sturdy and rugged.              Amazing! This new version is rock solid!', 'fluidX'),
(2, 'Leg transplant with robots', '2', 2, 'Magnetic kickstand adjustable to 8 super secure angles. Enjoy the perfect stable angle for any situation.', 'dispendix'),
(3, 'Zerg rush', '1', 3, 'I love this case. I wanted to get a solid case that would serve all my needs. This case is perfect. It is extremely solid and can be adjusted in more ways than I have seen any case do. You will be as impressed as I if you get this case!', 'Gentegra'),
(4, 'Water resistant tea bags', '1', 6, 'Made with a Mercedes Benz like material that ensures our high-quality standards. Anti-slide cover prevents battery loss.', 'fluidX'),
(5, 'Smartwatches kill 2', '2', 5, 'Super protective bumper—thinnest in the industry with a 2 mm PC Back. Will protect against 5 ft drops on cement!', 'fluidX');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `naam` varchar(55) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `clients`
--

INSERT INTO `clients` (`client_id`, `naam`, `email`, `phone`) VALUES
(1, 'Rick Buter', 'rick.Buter@gmail.com', 689923441),
(2, 'Koen Holman', 'koenholman@hotmail.com', 688224533),
(3, 'Erwin Kosters', 'erwin^^kosters@erwin.nl', 613375934),
(4, 'Daisy Gorilla', 'gorilla=daisy@live.nl', 658391840),
(5, 'Thomas Huster', 'thomashuster@codegorilla.nl', 398439382),
(6, 'Thomas Huster', 'thomashuster@codegorilla.nl', 398439382);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(90) NOT NULL,
  `product_description` varchar(1300) NOT NULL,
  `product_category` varchar(60) NOT NULL,
  `product_img_url` varchar(32) NOT NULL,
  `product_rating` varchar(60) NOT NULL,
  `product_supplier` varchar(32) NOT NULL,
  `product_branche` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_category`, `product_img_url`, `product_rating`, `product_supplier`, `product_branche`) VALUES
(1, 'mig 2.0', 'cGinger, short hair hangs over a chiseled, frowning face. Bloodshot blue eyes, set wickedly within their sockets, watch vigilantly over the farms they\'ve cared for for so long.\r\nScars reaching from the bottom of the left cheekbone , first running towards thin lips and ending on his right cheekbone l', 'Technology', '..\\img/pippin.png', '&#9734&#9734&#9734&#9734&#9734', 'Porvair Sciences', '1'),
(2, 'Genesis Easy', 'White, perfectly groomed hair double braided to reveal a full, charming face. Piercing sapphire eyes, set thightly within their sockets, watch gratefully over the haven they\'ve fought for for so long.\r\nA tattoo resembling a rose is subtly placed on the side of her right eye and leaves a gracious memory of redemption.\r\n\r\nThe is the face of Nilerea Dawnthorn, a true hero among elves. She stands ordinary among others, despite her athletic frame.\r\n\r\nThere\'s something inexplicable about her, perhaps it\'s her sensitivity or perhaps it\'s simply a feeling of shame. But nonetheless, people tend to subtly ignore her, while secretly training to become more like her.', 'Fluids', '..\\img/genesig.png', '&#9734&#9734&#9734&#9734', 'Gentegra', '2'),
(3, 'Kapa Probe Force', 'Chestnut, short hair slightly covers a chiseled, frowning face. Dead hazel eyes, set seductively within their sockets, watch eagerly over the lands they\'ve been seperated from for so long.\r\nA gunshot left a mark stretching from the bottom of the right cheek , running towards the other eye and ending on his forehead leaves a lasting punishment of a new life.\r\n\r\nThis is the face of Gunnar Masser, a true prodigy among humans. He stands easily among others, despite his brawny frame.\r\n\r\nThere\'s something enticing about him, perhaps it\'s his persistence or perhaps it\'s simply his perseverance. But nonetheless, people tend to ask him about his latest victory, while awkwardly avoid talking about his past.', 'Fluids', '..\\img/probeforce.png', '&#9734&#9734&#9734&#9734&#9734&#9734&#9734', 'FluidX', '1'),
(4, 'GeneSIG v16', 'Blonde, frizzy hair neatly coiffured to reveal a craggy, friendly face. Expressive gray eyes, set sunken within their sockets, watch affectionately over the deserts they\'ve rarely felt at home at for so long.\r\nA tattoo resembling a skull is displayed just above the side of her left eye and leaves a tormenting burden of companionship.\r\n\r\nThe is the face of Camryn Wakelin, a true noblewoman among vampires. She stands ordinary among others, despite her brawny frame.\r\n\r\nThere\'s something puzzling about her, perhaps it\'s a feeling of guilt or perhaps it\'s simply her reputation. But nonetheless, people tend to brag about knowing her, while trying to subtlely stare.', 'Technology', '..\\img/zugase.png', '&#9734&#9734&#9734&#9734', 'Dispendix', '1'),
(5, 'MIC', 'Gray, frizzy hair hangs over a lean, cheerful face. Shuttered green eyes, set seductively within their sockets, watch intently over the village they\'ve sought solace in for so long.\r\nSmooth skin alluringly compliments his eyes and mouth and leaves an intriguing memory of his fortunate survival.\r\n\r\nThis is the face of Grukag Firesong, a true adventurer among orcs. He stands ordinary among others, despite his subtle frame.\r\n\r\nThere\'s something irregular about him, perhaps it\'s his good looks or perhaps it\'s simply his odd friends. But nonetheless, people tend to ask him about his adventures, while trying to hide from him.', 'Fluids', '..\\img/mic.png', '&#9734&#9734&#9734&#9734&#9734&#9734&#9734', 'FluidX', '2'),
(7, 'fluidX whole rack', 'Brown, coily hair gently hangs over a lean, lived-in face. Shining black eyes, set lightly within their sockets, watch delightedly over the wildlife they\'ve felt disconnected from for so long.\r\nA tattoo of an eagle claw is almost hidden on the side of her right eye and leaves a stinging memory of reclaimed honor.\r\n\r\nThe is the face of Sarina Evatt, a true vindicator among werewolves. She stands ordinary among others, despite her scraggy frame.\r\n\r\nThere\'s something enthralling about her, perhaps it\'s her sense of humor or perhaps it\'s simply her bravery. But nonetheless, people tend to pretend to be her friend, while treating her to a good meal when she\'s around.', 'Technology', '..\\img/magpurrix.png', '&#9734&#9734&#9734&#9734&#9734&#9734', 'Porvair Sciences', '2'),
(8, 'crime prep', 'Black, short hair awkwardly hangs over a skinny, frowning face. Bulging blue eyes, set appealingly within their sockets, watch anxiously over the clan they\'ve looked after for so long.\r\nA sword left a mark reaching from the top of the left cheek , running towards his upper lip and ending above his right eye leaves an amusing memory of redemption.\r\n\r\nThis is the face of Adam Adwell, a true warden among werewolves. He stands towering above others, despite his light frame.\r\n\r\nThere\'s something mystifying about him, perhaps it\'s a feeling of remorse or perhaps it\'s simply his presence. But nonetheless, people tend to ask him about his latest victory, while trying to avoid him.', 'Fluids', '..\\img/spaceship.png', '&#9734&#9734', 'FluidX', '1');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`),
  ADD KEY `article_branche` (`article_branche`);

--
-- Indexen voor tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_branche` (`product_branche`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`article_branche`) REFERENCES `products` (`product_branche`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
