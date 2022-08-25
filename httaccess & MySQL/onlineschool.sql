-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220715.346923e20a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Aug 2022 um 16:34
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
  `textcontent` varchar(10000) NOT NULL,
  `page` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `articles`
--

INSERT INTO `articles` (`textid`, `textname`, `textcontent`, `page`) VALUES
(1, 'heather', ' <h1  class=\"display-5 fw-bold lh-1 mb-3\"> Hello and Welcome! </h1>\n      <h1  class=\"display-6 fw-bold lh-1 mb-3\"> I\'m Heather </h1>\n      <img src=\"/onlineschool/mainsrc/src/img/woman.jpg\" class=\"d-block mx-lg-auto img-fluid\" alt=\"Bootstrap Themes\" width=\"700\" height=\"500\" loading=\"lazy\">\n    </div>\n    <div class=\"col-lg-6\">\n      <h3  class=\"display-5 fw-bold lh-1 mb-3\"> “Tell me and I forget, teach me and I may remember, involve me and I learn.” — <small>Benjamin Franklin</small></h3>\n      <p class=\"lead\">Here I\'m teling you all about me and my passion to teach . bla bla .Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>\n    \n      <p class=\"col-md-8 fs-4\">Here yaddad yadda I\'m teling you even more about the online school how it works and bla bla bla.   </p>', 'home'),
(2, 'onlineschool', '  <h1 class=\"display-5 fw-bold lh-1 mb-3\">Online School</h1>\n      <p class=\"lead\">Here I\'m teling you all about the online school how it works and bla bla bla.  Check out the examples below for how you can remix and restyle it to your liking. </p>\n      <p class=\"col-md-8 fs-4\">Here yaddad yadda I\'m teling you all about the online school how it works and bla bla bla.   </p>\n    </div>\n    <div class=\"col-10 col-sm-8 col-lg-6\">\n      <img src=\"/onlineschool/mainsrc/src/img/onlineSchool.jpg\" class=\"d-block mx-lg-auto img-fluid\" alt=\"Bootstrap Themes\" width=\"700\" height=\"500\" loading=\"lazy\">', 'home'),
(3, 'courses', '  <h1 class=\"display-5 fw-bold lh-1 mb-3\">Courses</h1>\n      <p class=\"lead\">Here I\'m teling you all about Courses . bla bla .Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>\n      <p class=\"col-md-8 fs-4\">Here yaddad yadda I\'m teling you all about the online school how it works and bla bla bla.   </p>', 'home'),
(4, 'free greeting', '                                <h1 class=\"fw-light\">Free Learning Area </h1>\r\n        <p class=\"lead text-muted\"> Welcome ! Let\'s get to it, shall we ?</p> \r\n                 \r\n                 \r\n                 \r\n                 \r\n                 \r\n                 \r\n                 \r\n                ', 'freelearning'),
(5, 'pro greeting', '                                        <h1 class=\"fw-light\">Learning Area Pro</h1>\r\n        <p class=\"lead text-muted\"> Welcome ! Let\'s get to it, shall we ?</p>\r\n                 \r\n                 \r\n                 \r\n                 \r\n                 \r\n                 \r\n                 \r\n                                                ', 'prolearning'),
(6, 'Pro Section title 1', '                                <h2>Pro Section title 1</h2>\r\n        <p>Mr. Poopybutthole (voiced by Justin Roiland) – A yellow humanoid creature and longtime family friend. He is a parody of wacky side characters on television shows. Although he shows up at the same time as a group of Alien Parasites who take the forms of similarly zany characters, Mr. Poopybutthole himself is real.</p>                                 ', 'prolearning'),
(7, 'Pro Section title 2', '                        <h2>Pro Section title 2</h2>\r\n        <p>Arthricia (voiced by Chelsea Kane) – A young alien girl who resembles an anthropomorphic cat person. She resides on a planet with an Amish style culture whose residents engage in an annual \"purge\". She first injures Rick, mugs Morty, and steals their ship in order to use it to kill the rich people who dominate her planet and enforce the purge amongst the poor.</p>                ', 'prolearning'),
(8, 'Pro Section title 3', '                <h2>Pro Section title 3</h2>\r\n        <p>Mr. Nimbus (voiced by Dan Harmon) – The King of the Ocean, ruler of Atlantis and Rick\'s arch-nemesis. Nimbus has a treaty with Rick for him to never touch the ocean, the breaking of which causes conflict between them. He also has hydrokinetic abilities and the power to control the police at a command.</p>                ', 'prolearning'),
(9, 'enterprise greeting', '                                         <h1 class=\"fw-light\">Learning Area Enterprise</h1>\n        <p class=\"lead text-muted\"> Welcome ! Let\'s get to it, shall we ?</p>\n                 \n                 \n                 \n                 \n                 \n                 \n                 \n                                                                                                ', 'enterprise'),
(10, 'Enterprise Section title 1', '                <h2>Enterprise Section title 1</h2>\r\n        <p>Noob Noob (voiced by Justin Roiland) – The Vindicators\' intern and janitor, who appears to be of the same species as Mr. Poopybutthole except with asymmetrical eyes. He wishes to eventually become a full-fledged Vindicator, but is always made to stay behind and clean up their ship.</p>                                ', 'enterprise'),
(11, 'Enterprise Section title 2', '        <h2>Enterprise Section title 2</h2>\r\n        <p>The Ferret Pilots – A group of teenagers animated in anime style who were the original pilots of the Gotron ferrets, large ferret-like vehicles. They kidnap Morty and initially try to bribe him with Boob World currency in exchange for insider information about Rick\'s operation, but when he resists, he is forced to fight off an assassination attempt.</p>', 'enterprise'),
(12, 'Enterprise Section title 3', '        <h2>Enterprise Section title 3</h2>\r\n<p>Kendra (voiced by Lauren Tom) – A red-haired anime-like character who is the leader of the pilots from the five realities. She was hired by Rick, who did not know her real identity, to take control of the GoGotron. She later betrays and captures him in the GoGotron.</p>', 'enterprise');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `documents`
--

CREATE TABLE `documents` (
  `documentid` int(12) NOT NULL,
  `userid` int(12) NOT NULL,
  `documentname` varchar(255) NOT NULL,
  `documentdescription` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `documents`
--

INSERT INTO `documents` (`documentid`, `userid`, `documentname`, `documentdescription`, `document`) VALUES
(118, 57, 'Hausaufagbe 18', 'homework                                     ', 'Scary T._23.08.2022.pdf'),
(125, 1, '333', 'XXX                                     ', ''),
(126, 57, 'Homework 22', 'bloody difficult       ', 'Scary T._24.08.2022.pdf');

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
(95, 59, 'Rick', 'neu     ', '5995.png'),
(99, 1, 'Animation and voice recording', 'Animation for the show is done using Toon Boom Harmony, post-production work is done in Adobe After Effects, and background art is done in Adobe Photoshop', '199.png'),
(100, 1, 'Writing', 'Harmon has noted that the writers\' room at the show\'s studio bears a striking resemblance to the one used for Community            ', '1100.png'),
(102, 1, 'Rick and Morty', 'Rick and Morty was created by Justin Roiland and Dan Harmon. The duo first met at Channel 101, a non-profit monthly short film festival in Los Angeles co-founded by Harmon    ', '1102.png'),
(103, 1, 'Philosophy', 'Rick and Morty has been described as \"a never-ending fart joke wrapped around a studied look into nihilism\".             ', '1103.png'),
(104, 1, 'Comedic style', 'The general formula of Rick and Morty consists of the juxtaposition of two conflicting scenarios: an extremely selfish, \r\nalcoholic grandfather dragging his grandson along for interdimensional adventures, intercut with domestic family drama. ', '1104.png');

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
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userid` int(5) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(16) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `membership` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `username`, `mail`, `password`, `bio`, `membership`, `status`) VALUES
(1, 'Summer', 'Smith', 'Summer', 'summer@test', '$2y$10$vjeoiPil/IkYXQRyYB6MEuXV2lj1BQVvXfWaU08QyZP72Rd8yQRrW', '   Summer Smith is Morty\'s 17-year-old  older sister, a more conventional and often superficial teenager, who is obsessed with improving her status among her peers.                  ', 'enterprise', 'Teacher'),
(2, 'Rick', 'Sanchez', 'Rick', 'rick@test', '$2y$10$ytXriOkQ.7Y9M1D3f.vXmuH5nsiCzmFHY3xiDyyms1NYbBOsTmJIu', 'Richard \"Rick\" Sanchez is a sociopathic, nihilistic, grouchy, crude, rude, narcissistic,\r\nself-centered, alcoholic mad scientist who is the widowed father of Beth Smith and the maternal grandfather of Morty and Summer.  ', 'enterprise', 'Teacher'),
(3, 'Jerry', 'Smith', 'Jerry', 'jerry@test', '$2y$10$2URmfGq/UZESDiu4bmVk/eWPdbUFuDv.CATwfq5rm5dHWxCDteMP2', '   Jerry Smith is Summer and Morty\'s insecure 34-year-old father, Beth\'s husband, and Rick\'s son-in-law, who strongly disapproves of Rick\'s influence over his family. ', 'enterprise', 'Teacher'),
(4, 'Morty', 'Smith', 'Morty', 'm@s', '123', 'Mortimer \"Morty\" Smith is Rick\'s neurotic 14-year-old grandson who is frequently dragged into Rick\'s misadventures.', 'enterprise', ''),
(57, 'Scary', 'Terry', 'Scary T.', 's@t', '$2y$10$9qdPx2qb0zOaN93VUDeC8ujnnjmZRIwHvyuqo7OFcp2XPrsBPaF1y', '   A murderous entity who resides in the dream world. He is a \"legally safe\" parody of Freddy Krueger and has miniature swords on his fingers instead of knives. He initially tries to kill Rick and Morty, but later befriends them after they help him with his own dream problems. He is very fond of the word \"bitch\", and injects it into almost every sentence. It is revealed that scaring is simply an occupation for him, and that he is very insecure about his capabilities, which puts him under great s', 'enterprise', 'Student'),
(58, 'Bird', 'person', 'Birdperson ', 'b@p', '$2y$10$Eo54fe4hTHQgzNgxE9GN8ueke8Dyy1GU8JwLWLYigTIDooHdizc9W', '    A superhero-like being who is Rick\'s best friend. He holds a deep respect for Rick, and often offers Morty insight when Morty considers doing something that would jeopardize his and Rick\'s relationship. He was at one point in a band with Rick and Squanchy.', 'pro', 'Student'),
(59, 'Squan', 'Chy', 'Squanchy', 's@c', '$2y$10$Jk2tiKDGezL3LHU.uC.5p.KLAkJqlg1J22pd0AlPaYHJgdxYTYsRS', 'A disheveled catlike creature who replaces various words in his sentences with the word \"squanch\". \r\nHe is a parody of Snarf. \r\nSquanchy is one of Rick\'s best friends and wears a bracelet inscribed with \"Rick\'s BFF\".        ', 'pro', 'Student'),
(60, 'Diana', 'Sanchez', 'Diana', 'Diana@test', '$2y$10$xA4ttJAPzJhNQOVmjc6TJOfcdNnzck6aAVQklyt5MSboH2d5LGNI2', '   Diane was Rick\'s wife. She is seen in a flashback during the Season 3 premiere entering the garage with a young Beth. As Rick vows to give up science, they prepare to go for ice cream when Diane was killed by a bomb sent through a portal created by another Rick as revenge for the main Rick refusing to join him. Rick then decides to become a scientist again to avenge his family. ', 'free', 'Student');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`textid`);

--
-- Indizes für die Tabelle `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`documentid`);

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
  MODIFY `textid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `documents`
--
ALTER TABLE `documents`
  MODIFY `documentid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT für Tabelle `photoalbum`
--
ALTER TABLE `photoalbum`
  MODIFY `albumid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT für Tabelle `securitytokens`
--
ALTER TABLE `securitytokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
