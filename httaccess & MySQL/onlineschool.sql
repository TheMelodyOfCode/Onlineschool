-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220715.346923e20a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Aug 2022 um 16:56
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `onlineschool`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `articles`
--

CREATE TABLE `articles` (
  `textid` int(11) NOT NULL,
  `textname` varchar(100) NOT NULL,
  `textcontent` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `articles`
--

INSERT INTO `articles` (`textid`, `textname`, `textcontent`) VALUES
(1, 'heather', '  <div id=\"heather\" class=\"row flex-lg-row-reverse align-items-center  py-5\">\n    <a name=\"tutor\"></a>\n    <div class=\"col-10 col-sm-8 col-lg-6\">\n      <h1  class=\"display-5 fw-bold lh-1 mb-3\"> Hello and Welcome! </h1>\n      <h1  class=\"display-6 fw-bold lh-1 mb-3\"> I\'m Heather </h1>\n      <img src=\"/onlineschool/mainsrc/src/img/woman.jpg\" class=\"d-block mx-lg-auto img-fluid\" alt=\"Bootstrap Themes\" width=\"700\" height=\"500\" loading=\"lazy\">\n    </div>\n    <div class=\"col-lg-6\">\n      <h3  class=\"display-5 fw-bold lh-1 mb-3\"> I love Toast</h3>\n      <p class=\"lead\">Here I\'m teling you all about me and my passion to teach . bla bla .Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>\n    \n      <p class=\"col-md-8 fs-4\">Here yaddad yadda I\'m teling you even more about the online school how it works and bla bla bla.   </p>\n\n    </div>\n  </div>'),
(2, 'onlineschool', '  <div class=\"row flex-lg-row-reverse align-items-center g-5 py-5\">\n    <div class=\"col-lg-6\">\n      <h1 class=\"display-5 fw-bold lh-1 mb-3\">Online School</h1>\n      <p class=\"lead\">Here I\'m teling you all about the online school how it works and bla bla bla.  Check out the examples below for how you can remix and restyle it to your liking. </p>\n      <p class=\"col-md-8 fs-4\">Here yaddad yadda I\'m teling you all about the online school how it works and bla bla bla.   </p>\n    </div>\n    <div class=\"col-10 col-sm-8 col-lg-6\">\n      <img src=\"/onlineschool/mainsrc/src/img/onlineSchool.jpg\" class=\"d-block mx-lg-auto img-fluid\" alt=\"Bootstrap Themes\" width=\"700\" height=\"500\" loading=\"lazy\">\n    </div>\n  </div>'),
(3, 'courses', '  <div class=\"row flex-lg-row-reverse align-items-center g-5 py-5\">\n    <div class=\"col-10 col-sm-8 col-lg-6\">\n      <img src=\"/onlineschool/mainsrc/src/img/courses.jpg\" class=\"d-block mx-lg-auto img-fluid\" alt=\"Bootstrap Themes\" width=\"700\" height=\"500\" loading=\"lazy\">\n    </div>\n    <div class=\"col-lg-6\">\n      <h1 class=\"display-5 fw-bold lh-1 mb-3\">Courses</h1>\n      <p class=\"lead\">Here I\'m teling you all about Courses . bla bla .Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>\n      <p class=\"col-md-8 fs-4\">Here yaddad yadda I\'m teling you all about the online school how it works and bla bla bla.   </p>\n    </div>\n  </div>');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `photoalbum`
--

CREATE TABLE `photoalbum` (
  `albumid` int(12) NOT NULL,
  `userid` int(12) NOT NULL,
  `albumname` varchar(255) DEFAULT NULL,
  `albumdescription` varchar(255) DEFAULT NULL,
  `albumcover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `photoalbum`
--

INSERT INTO `photoalbum` (`albumid`, `userid`, `albumname`, `albumdescription`, `albumcover`) VALUES
(93, 57, 'Spock', 'Spock Image', '5793.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `securitytokens`
--

CREATE TABLE `securitytokens` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `securitytoken` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `securitytokens`
--

INSERT INTO `securitytokens` (`id`, `userid`, `identifier`, `securitytoken`) VALUES
(2, 2, '3136353837353432353039353e06fcf11df2', '$2y$10$GylmmrB1XntYltJtubeXseZfnp0.BU.DCYfTZl0kJB9zZ2Snhlxwq'),
(3, 3, '31363538383135343038d3b19add27fdbe97', '$2y$10$aLScxnwgW5l7F.UNn0PhRuj5VkJrxi.rSPX589xOtt/5qLNZUPo5u'),
(4, 3, '313635383832343636332b080025fa22021c', '$2y$10$aLScxnwgW5l7F.UNn0PhRuj5VkJrxi.rSPX589xOtt/5qLNZUPo5u'),
(5, 2, '313635383832373236369ba2ccfd4355aa0a', '$2y$10$GylmmrB1XntYltJtubeXseZfnp0.BU.DCYfTZl0kJB9zZ2Snhlxwq'),
(6, 2, '31363538383436363533ae6c057f130f9603', '$2y$10$GylmmrB1XntYltJtubeXseZfnp0.BU.DCYfTZl0kJB9zZ2Snhlxwq'),
(9, 2, '31363630323933363334c29226e849ed5200', '$2y$10$GylmmrB1XntYltJtubeXseZfnp0.BU.DCYfTZl0kJB9zZ2Snhlxwq');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teachers`
--

CREATE TABLE `teachers` (
  `userid` int(12) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `teachers`
--

INSERT INTO `teachers` (`userid`, `firstname`, `lastname`, `username`, `mail`, `password`, `bio`) VALUES
(1, 'Summer', 'Smith', 'Summer', 'summer@test', '123', 'Summer Smith is Morty\'s 17-year-old  older sister, a more conventional and often superficial teenager, who is obsessed with improving her status among her peers.'),
(2, 'Rick', 'Sanchez', 'Rick', 'rick@test', '123', 'Rick is an eccentric and alcoholic mad scientist, who eschews many ordinary conventions such as school, marriage, love, and family.'),
(3, 'Jerry', 'Smith', 'Jerry', 'Jerry@test', '123', 'Jerry Smith is Summer and Morty\'s insecure 34-year-old father, Beth\'s husband, and Rick\'s son-in-law, who strongly disapproves of Rick\'s influence over his family. '),
(4, 'Morty', 'Smith', 'Morty', 'morty@test', '123', 'Mortimer \"Morty\" Smith is Rick\'s neurotic 14-year-old grandson who is frequently dragged into Rick\'s misadventures.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userid` int(5) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(16) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `username`, `mail`, `password`, `bio`) VALUES
(57, 'Scary', 'Terry', 'Scary T.', 's@t', '$2y$10$9qdPx2qb0zOaN93VUDeC8ujnnjmZRIwHvyuqo7OFcp2XPrsBPaF1y', '   A murderous entity who resides in the dream world. He is a \"legally safe\" parody of Freddy Krueger and has miniature swords on his fingers instead of knives. He initially tries to kill Rick and Morty, but later befriends them after they help him with his own dream problems. He is very fond of the word \"bitch\", and injects it into almost every sentence. It is revealed that scaring is simply an occupation for him, and that he is very insecure about his capabilities, which puts him under great s'),
(58, 'Bird', 'person', 'Birdperson ', 'b@p', '$2y$10$Eo54fe4hTHQgzNgxE9GN8ueke8Dyy1GU8JwLWLYigTIDooHdizc9W', '    A superhero-like being who is Rick\'s best friend. He holds a deep respect for Rick, and often offers Morty insight when Morty considers doing something that would jeopardize his and Rick\'s relationship. He was at one point in a band with Rick and Squanchy.'),
(59, 'Squan', 'Chy', 'Squanchy ', 's@c', '$2y$10$P0tqDJ8Yf.X9ElT9y1M3beYAhwLjaNztwzK1ITWfciIfDQFDjaLgu', '   A disheveled catlike creature who replaces various words in his sentences with the word \"squanch\". He is a parody of Snarf. Squanchy is one of Rick\'s best friends and wears a bracelet inscribed with \"Rick\'s BFF\".'),
(60, 'Diana', 'Sanchez', 'Diana', 'Diana@test', '$2y$10$xA4ttJAPzJhNQOVmjc6TJOfcdNnzck6aAVQklyt5MSboH2d5LGNI2', '   Diane was Rick\'s wife. She is seen in a flashback during the Season 3 premiere entering the garage with a young Beth. As Rick vows to give up science, they prepare to go for ice cream when Diane was killed by a bomb sent through a portal created by another Rick as revenge for the main Rick refusing to join him. Rick then decides to become a scientist again to avenge his family. ');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`textid`);

--
-- Indizes für die Tabelle `photoalbum`
--
ALTER TABLE `photoalbum`
  ADD PRIMARY KEY (`albumid`);

--
-- Indizes für die Tabelle `securitytokens`
--
ALTER TABLE `securitytokens`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`userid`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `articles`
--
ALTER TABLE `articles`
  MODIFY `textid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `photoalbum`
--
ALTER TABLE `photoalbum`
  MODIFY `albumid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT für Tabelle `securitytokens`
--
ALTER TABLE `securitytokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `teachers`
--
ALTER TABLE `teachers`
  MODIFY `userid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
