-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 19 sep. 2017 à 14:16
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `resume` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `resume`, `prix`) VALUES
(8, 'iPhone 7 32Go', 'L’Apple iPhone 7 affiche une diagonale de 4,7 pouces, comme l\'iPhone 6 et 6s avant lui. Mais il bénéficie de la technologie Retina HD qui améliore l\'affichage. Pour la première fois, il embarque également un processeur à quatre cœurs, l\\\'A10 Fusion. En plus de son capteur photo principal de 12 Mpixels avec stabilisation optique, il intègre un capteur 7 Mpixels en façade.\r\n', 'L’Apple iPhone 7 affiche une diagonale de 4,7 pouces', 550),
(9, 'iPhone 5C 16Go', 'L\'iPhone 5C est coloré, plus fun...comme les baladeurs MP3 de la marque, les iPods. Sa coque est en acier, son écran est Retina. La 4G est aussi de la partie.\r\n', 'L\'iPhone 5C est coloré, plus fun...comme les baladeurs MP3 de la marque', 150),
(10, 'iPhone 5s 32Go', 'Argent, or ou gris, le nouvel iPhone 5S se décline en plusieurs couleurs et plusieurs capacités de stockage 16, 32 et 64 Go. Il embarque un nouveau processeur (Apple A7) gérant les instructions 64 bits.\r\n', 'Argent, or ou gris, le nouvel iPhone 5S se décline en plusieurs couleurs et plusieurs capacités de stockage ', 200),
(11, 'iPhone 4 16Go', 'Un an et demi après le lancement de l\'iPhone 4, Apple nous refait le coup de la version S, plus performante et puissante, pour une mise à jour qui pourrait décevoir malgré son importance.\r\n', 'Un an et demi après le lancement de l\'iPhone 4, Apple nous refait le coup de la version S', 100);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
