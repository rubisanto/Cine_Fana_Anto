-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2022 at 07:35 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cine_fana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_pseudo` varchar(50) NOT NULL,
  `admin_mail` varchar(50) NOT NULL,
  `admin_adress` varchar(30) NOT NULL,
  `admin_date_of_birth` date NOT NULL,
  `admin_sex` varchar(10) DEFAULT NULL,
  `admin_first_name` varchar(50) NOT NULL,
  `admin_last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(30) NOT NULL,
  `article_date` date NOT NULL,
  `article_author` varchar(50) NOT NULL,
  `article_content` text NOT NULL,
  `article_type` varchar(30) NOT NULL,
  `article_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_date`, `article_author`, `article_content`, `article_type`, `article_picture`) VALUES
(1, 'Willl Smith', '2022-04-05', 'Thomas', 'Quelques minutes avant de recevoir son premier Oscar, le 27 mars dernier, Will Smith surprend le monde entier. Une blague de mauvais goût adressée à sa femme, Jada Pinkett-Smith, met l’acteur en colère. Il monte sur scène et gifle l’humoriste Chris Rock. Depuis cette soirée, la star hollywoodienne a présenté ses excuses à plusieurs reprises et a démissionné de l’Académie.\r\n\r\nSa carrière commence, elle aussi, à pâtir de ce geste. Certains de ses projets sont notamment mis de côté, dont Fast & Loose, sa nouvelle collaboration avec Netflix. Pour ce film d’action, Will Smith devait jouer sous la direction de David Leitch, le cascadeur de John Wick et réalisateur de Deadpool 2, Atomic Blonde et prochainement de Bullet Train avec Brad Pitt.\r\n\r\nEn phase de développement, le projet faisait déjà briller les yeux des plus grands studios, comme la Warner, la MGM ou encore la Paramount. C’est finalement le géant du streaming qui avait décroché le gros lot.', 'acteur', '1.jpg'),
(2, 'Obi-Wan Kenobi sur Disney+ :', '2022-04-05', 'Jean', 'Attention spoilers, l’article suivant dévoile des éléments importants de l’épisode 3 de la série “Obi-Wan Kenobi”.\r\n\r\nC’est un événement majeur que les fans de Star Wars n’auraient manqué pour rien au monde : le combat entre Obi-Wan Kenobi et Dark Vador, le premier depuis La Revanche des Sith, il y a 17 ans. Dans l’épisode 3 de la série Disney+, les deux personnages se retrouvent. La séquence est d’autant plus forte que le maître Jedi vient d’apprendre qu’Anakin Skywalker était toujours vivant et qu’il se cache sous le casque du Seigneur noir.\r\n\r\nSi l’émotion est présente à l’écran, elle l’était également sur le plateau de tournage. Au cours de la promotion d’Obi-Wan Kenobi, Ewan McGregor a plusieurs fois parlé de ses retrouvailles intimidantes avec Dark Vador. Dans une récente interview pour Entertainment Tonight, l’acteur révèle que la scène a attiré une foule de techniciens, désireux de suivre ce moment épique.\r\n\r\n“Des centaines de personnes sont arrivées sur le plateau pour voir Hayden Christensen dans le costume de Vador, se remémore-t-il. Je me demandais : ‘Pourquoi y a-t-il autant de monde aujourd’hui ?’, puis Hayden est sorti et je me suis dis : “Ah oui bien sûr, ils sont tous là pour ça. Tout le monde est là pour voir le moment.”\r\n\r\nIl poursuit : “Je n’avais jamais vu une équipe réagir de la sorte lorsqu’il est arrivé. C’était l’un des plus grands moments de tournage que j’ai pu vivre.\"\r\n\r\nInterrogé sur le futur de Dark Vador et la possibilité de voir un jour une série centré sur le personnage, Hayden Christensen s’est dit partant : “Il y a certainement d’autres choses à explorer. Il y a tellement d’autres histoires qui ont été racontées dans d’autres formats. J’adorerais poursuivre mon aventure avec lui.”\r\n\r\nObi-Wan Kenobi est disponible sur Disney+.', 'acteur', '2.jpg'),
(3, 'Most Wanted Criminals', '2022-04-05', 'Anto', 'Les départs s\'enchaînent au sein du casting de Most Wanted Criminals. Lancée en 2020 sur CBS, la série policière créée par Rene Balcer et produite par Dick Wolf, dérivée de la série F.B.I (avec FBI : International) suit une équipe d\'agents du FBI entraînés à traquer les criminels les plus dangereux et recherchés du pays a perdu pas moins de trois acteurs récurrents en l\'espace de deux ans.\r\n\r\nNathaniel Arcand tout d\'abord, qui interprétait l\'agent spécial Clinton Skye, a quitté la série en saison 2, suivi par Kellan Lutz (Kenny Crosby) au début de la saison 3.\r\n\r\nEn janvier 2022, c\'est au tour de Julian McMahon, qui tenait pourtant le rôle principal de la série sous les traits de l\'agent spécial de supervision Jess LaCroix, de quitter l\'aventure lors d\'un épisode choc diffusé en mars dernier qui concluait le destin du héros.\r\n\r\nCe dernier a par la suite été remplacé par Dylan McDermott au casting dès le mois d\'avril, celui-ci incarnant un nouveau personnage pour l\'occasion, intitulé Remy Scott. En dépit de ce remplacement au pied levé, l\'hémorragie d\'interprètes ne semble pas prête de s\'arrêter.\r\n\r\nSelon le site TVLine, c\'est désormais au tour de l\'agent spécial Ivan Ortiz, joué par Miguel Gomez, de quitter la série. L\'acteur avait rejoint la saison 2 en tant que personnage récurrent suite au départ de Nathaniel Arcand, et ne fera pas partie de la saison 4.\r\n\r\nMalgré cet énième départ, la série maintient son succès puisque CBS a annoncé en mai que Most Wanted Criminals était renouvelée pour deux saisons supplémentaires.\r\n\r\nEn France, les deux premières saisons de la série ont été proposées sur Serieclub, avant d\'être diffusée l\'été dernier sur TF1 qui l\'a finalement déprogrammée peu après le lancement de la saison 2, encore inédite à ce jour sur nos écrans.', 'serie', '3.jpg'),
(4, 'Scream 6', '2022-04-05', 'Kilian', 'Scream, c\'est terminé pour Neve Campbell ! Après avoir incarné le personnage emblématique de Sidney Prescott dans les 5 longs-métrages de la franchise, la comédienne a décidé de ne pas rempiler pour le nouvel opus.\r\n\r\nAprès le succès du dernier épisode au cinéma, qui a rapporté 140 millions de dollars de recettes mondiales pour un budget de 25M, Paramount a officiellement lancé une suite en février dernier. \r\n\r\nLe tournage est prévu pour l\'été 2022 avec la même équipe créative : le duo de réalisateurs Matt Bettinelli-Olpin et Tyler Gillett, mais aussi les deux scénaristes, James Vanderbilt et Guy Busick.\r\n\r\nLe 18 mars, on apprenait que Courteney Cox avait signé pour se glisser à nouveau dans le costume de la journaliste Gale Weathers, toujours avide d\'un scoop !\r\n\r\nToutefois, les fans commençaient à s\'inquiéter : Neve Campbell, star de la saga, allait-elle aussi revenir dans le rôle mythique de Sidney Prescott ?\r\n\r\nLe 6 juin, la mauvaise nouvelle tombe. Après d\'âpres négociations avec Paramount et Spyglass Media, l\'actrice a décidé de refuser de jouer dans le 6ème volet de Scream.\r\n\r\nCitée par Deadline, la comédienne est très claire sur le sujet : \"Malheureusement, je ne ferai pas le prochain film Scream\", a-t-elle déclaré.\r\n\r\n\"En tant que femme, j\'ai dû travailler extrêmement dur dans ma carrière pour établir ma valeur, surtout lorsqu\'il s\'agit de Scream\", a-t-elle poursuivi.\r\n\r\n\"J\'ai estimé que l\'offre présentée n\'était pas à la hauteur de la valeur que j\'ai apportée à la franchise. Ça a été une décision très difficile\", explique-t-elle.', 'film', '4.jpg'),
(5, 'Miss Marvel', '2022-04-06', 'Walid', 'Tout le monde l’appelle Miss Marvel, mais son vrai nom est Kamala Khan ! Ce mercredi 8 juin, la plateforme Disney+ va dévoiler le tout premier épisode de sa nouvelle série Marvel, suivant les aventures d’une jeune fan des Avengers – et plus particulièrement de Captain Marvel – héritant de pouvoirs cosmiques lui permettant de concrétiser son rêve le plus cher : devenir à son tour une super-héroïne.\r\n\r\nAu cours d’un entretien accordé au magazine britannique Empire, le patron des studios Marvel Kevin Feige est revenu sur l’arrivée de la toute première héroïne musulmane au sein de la franchise. A cette occasion, le producteur a ainsi pu évoquer ses pouvoirs, mais également les différences de la série avec les comic-books Marvel dont sont adaptés les films et séries du MCU :\r\n\r\nNous adaptons les comics, mais il ne s’agit pas d’une transposition exacte. Kamala est arrivée dans les comic-books durant un contexte bien particulier. Et elle arrive au sein du MCU également durant un contexte particulier, or ces deux contextes ne sont pas vraiment identiques.\r\n\r\nKevin Feige a également pu évoquer au cours de cet entretien les pouvoirs de Kamala Khan. Si la jeune femme ne posséde pas les mêmes dons que ceux de son idole Captain Marvel, le producteur a néanmoins expliqué en quoi consisteront ses pouvoirs cosmiques :\r\n\r\nCe que nous allons apprendre sur l’origine de ses pouvoirs, et en quoi ceux-ci consistent, est spécifique au MCU. (…) Si vous voulez voir des mains et des bras géants, vous les verrez sous forme psychique, et non pas comme des sortes d\'extensions en plastique.\r\nIntroduite dans les comics Marvel en 2014, Kamala Khan hérite de dons cosmiques lui permettant de modifier la taille de ses membres; à l\'inverse d\'Ant-Man qui peut, quant à lui, modifier les proportions de son organisme tout entier, la jeune femme peut choisir quelle partie de son corps elle souhaite agrandir, un don qui la rapproche davantage d\'un certain Red Richards des Quatre fantastiques. A noter également que dans les comics, Kamala dispose de pouvoirs d\'auto-guérison.\r\n\r\nLa série Miss Marvel est à suivre chaque semaine en exclusivité sur la plateforme Disney+ à partir du mercredi 8 juin !', 'serie', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_author` varchar(30) NOT NULL,
  `comment_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_first_name` varchar(50) NOT NULL,
  `contact_last_name` varchar(50) NOT NULL,
  `contact_type` varchar(30) NOT NULL,
  `contact_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(30) NOT NULL,
  `post_date` date NOT NULL,
  `post_author` varchar(30) NOT NULL,
  `post_content` text NOT NULL,
  `post_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`post_id`, `post_title`, `post_date`, `post_author`, `post_content`, `post_type`) VALUES
(1, 'Post 1', '2022-04-05', 'Thomas', 'Quelques minutes avant de recevoir son premier Oscar, le 27 mars dernier, Will Smith surprend le monde entier. Une blague de mauvais goût adressée à sa femme, Jada Pinkett-Smith, met l’acteur en colère. Il monte sur scène et gifle l’humoriste Chris Rock. Depuis cette soirée, la star hollywoodienne a présenté ses excuses à plusieurs reprises et a démissionné de l’Académie.\r\n\r\nSa carrière commence, elle aussi, à pâtir de ce geste. Certains de ses projets sont notamment mis de côté, dont Fast & Loose, sa nouvelle collaboration avec Netflix. Pour ce film d’action, Will Smith devait jouer sous la direction de David Leitch, le cascadeur de John Wick et réalisateur de Deadpool 2, Atomic Blonde et prochainement de Bullet Train avec Brad Pitt.\r\n\r\nEn phase de développement, le projet faisait déjà briller les yeux des plus grands studios, comme la Warner, la MGM ou encore la Paramount. C’est finalement le géant du streaming qui avait décroché le gros lot.', 'acteur'),
(2, 'Post 2', '2022-04-05', 'Thomas', 'Quelques minutes avant de recevoir son premier Oscar, le 27 mars dernier, Will Smith surprend le monde entier. Une blague de mauvais goût adressée à sa femme, Jada Pinkett-Smith, met l’acteur en colère. Il monte sur scène et gifle l’humoriste Chris Rock. Depuis cette soirée, la star hollywoodienne a présenté ses excuses à plusieurs reprises et a démissionné de l’Académie.\r\n\r\nSa carrière commence, elle aussi, à pâtir de ce geste. Certains de ses projets sont notamment mis de côté, dont Fast & Loose, sa nouvelle collaboration avec Netflix. Pour ce film d’action, Will Smith devait jouer sous la direction de David Leitch, le cascadeur de John Wick et réalisateur de Deadpool 2, Atomic Blonde et prochainement de Bullet Train avec Brad Pitt.\r\n\r\nEn phase de développement, le projet faisait déjà briller les yeux des plus grands studios, comme la Warner, la MGM ou encore la Paramount. C’est finalement le géant du streaming qui avait décroché le gros lot.', 'acteur'),
(3, 'Post 3', '2022-04-05', 'Thomas', 'Quelques minutes avant de recevoir son premier Oscar, le 27 mars dernier, Will Smith surprend le monde entier. Une blague de mauvais goût adressée à sa femme, Jada Pinkett-Smith, met l’acteur en colère. Il monte sur scène et gifle l’humoriste Chris Rock. Depuis cette soirée, la star hollywoodienne a présenté ses excuses à plusieurs reprises et a démissionné de l’Académie.\r\n\r\nSa carrière commence, elle aussi, à pâtir de ce geste. Certains de ses projets sont notamment mis de côté, dont Fast & Loose, sa nouvelle collaboration avec Netflix. Pour ce film d’action, Will Smith devait jouer sous la direction de David Leitch, le cascadeur de John Wick et réalisateur de Deadpool 2, Atomic Blonde et prochainement de Bullet Train avec Brad Pitt.\r\n\r\nEn phase de développement, le projet faisait déjà briller les yeux des plus grands studios, comme la Warner, la MGM ou encore la Paramount. C’est finalement le géant du streaming qui avait décroché le gros lot.', 'acteur'),
(4, 'Post 4', '2022-04-05', 'Thomas', 'Quelques minutes avant de recevoir son premier Oscar, le 27 mars dernier, Will Smith surprend le monde entier. Une blague de mauvais goût adressée à sa femme, Jada Pinkett-Smith, met l’acteur en colère. Il monte sur scène et gifle l’humoriste Chris Rock. Depuis cette soirée, la star hollywoodienne a présenté ses excuses à plusieurs reprises et a démissionné de l’Académie.\r\n\r\nSa carrière commence, elle aussi, à pâtir de ce geste. Certains de ses projets sont notamment mis de côté, dont Fast & Loose, sa nouvelle collaboration avec Netflix. Pour ce film d’action, Will Smith devait jouer sous la direction de David Leitch, le cascadeur de John Wick et réalisateur de Deadpool 2, Atomic Blonde et prochainement de Bullet Train avec Brad Pitt.\r\n\r\nEn phase de développement, le projet faisait déjà briller les yeux des plus grands studios, comme la Warner, la MGM ou encore la Paramount. C’est finalement le géant du streaming qui avait décroché le gros lot.', 'acteur'),
(5, 'Post 5', '2022-04-05', 'Thomas', 'Quelques minutes avant de recevoir son premier Oscar, le 27 mars dernier, Will Smith surprend le monde entier. Une blague de mauvais goût adressée à sa femme, Jada Pinkett-Smith, met l’acteur en colère. Il monte sur scène et gifle l’humoriste Chris Rock. Depuis cette soirée, la star hollywoodienne a présenté ses excuses à plusieurs reprises et a démissionné de l’Académie.\r\n\r\nSa carrière commence, elle aussi, à pâtir de ce geste. Certains de ses projets sont notamment mis de côté, dont Fast & Loose, sa nouvelle collaboration avec Netflix. Pour ce film d’action, Will Smith devait jouer sous la direction de David Leitch, le cascadeur de John Wick et réalisateur de Deadpool 2, Atomic Blonde et prochainement de Bullet Train avec Brad Pitt.\r\n\r\nEn phase de développement, le projet faisait déjà briller les yeux des plus grands studios, comme la Warner, la MGM ou encore la Paramount. C’est finalement le géant du streaming qui avait décroché le gros lot.', 'acteur');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(30) NOT NULL,
  `product_date` date NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `product_synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_pseudo` varchar(50) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_adress` varchar(30) NOT NULL,
  `user_date_of_birth` date NOT NULL,
  `user_sex` varchar(10) DEFAULT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_pseudo`, `user_mail`, `user_adress`, `user_date_of_birth`, `user_sex`, `user_first_name`, `user_last_name`, `user_password`) VALUES
(1, 'admin', 'admin@test.fr', 'admin', '1996-06-06', NULL, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
