-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 fév. 2021 à 09:28
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `b12021`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id_actualites` int(3) NOT NULL,
  `titre` varchar(256) DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id_actualites`, `titre`, `texte`, `image`) VALUES
(1, 'Le pecorino, la star des fromages italiens', 'Que vous soyez amateur de fromage ou pas, vous avez sûrement entendu parler du pecorino, le fromage qui fait la fierté des Italiens. Grâce à sa texture, son goût et ses variétés plus exquises les unes que les autres, ce fromage a su s’imposer progressivement dans bon nombre de recettes. Nous vous proposons ici d’aller à la rencontre du fromage italien par excellence, celui qui accompagne plusieurs chefs cuisiniers.', 'img/lastarlepecorino.jpeg'),
(2, 'Comment couper les fromages ?', 'Dans la catégorie des fromages ronds de petits formats, on retrouve le Camembert, le Chaource ou le Brillat-Savarin. La découpe de ces fromages est assez simple. Pour y procéder, vous n’aurez qu’à privilégier l’égalité des parts, en allant du centre au bord.\r\n\r\n        De leur côté, les fromages longs se retrouvent dans la catégorie des fromages de chèvre tels que le Sainte-maure-de-touraine. Vous devez idéalement les couper en rondelles. Pour ceux en forme de bûches mais plus grands, vous pouvez par la suite découper les rondelles en deux si vous le souhaitez', 'img/Paroles-fromagers_header.jpg'),
(3, 'Le Picodon : un fromage à découvrir absolument', 'Le Picodon est caractérisé par un goût franc et subtil à la fois, derrière lequel on perçoit des notes de noisette. En forme de palet d’environ 5 cm de diamètre sur moins de 3 cm de haut, le Picodon est un fromage à pâte blanche ou jaune. Pendant sa période d’affinage, le Picodon se recouvre d’une croûte fleurie bleue et blanche. Celle-ci peut paraître plus fragile, si l’affinage se prolonge, devenant ainsi plus cassante.\r\n\r\n        Fromage généreux et délicieux à la fois, le Picodon est exclusivement constitué de lait de chèvre entier et contient 45 % de matières grasses. C’est d’ailleurs aux chèvres que le Picodon doit son goût, celles-ci se nourrissant de fourrage ou de céréales produites localement. En outre, les chèvres qui produisent le lait qui donne naissance au Picodon sont de race Alpine, Saanen, Rove ou encore Massif central.', 'img/picodon-bandeau-article-1.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id_actualites`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id_actualites` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
