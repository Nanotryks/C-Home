-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Mai 2017 à 07:40
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chome2`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `IdPiece` int(255) NOT NULL,
  `IdCapteur` int(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Valeur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `IdUtilisateur` int(255) NOT NULL,
  `IdMaison` int(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Porte` int(255) NOT NULL,
  `Voie` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Code_Postal` int(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Nombre_Piece` int(255) NOT NULL,
  `Nombre_Etage` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `IdMaison` int(11) NOT NULL,
  `IdPiece` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IdUtilisateur` int(100) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `numero_abonne` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `nom`, `prenom`, `mail`, `mdp`, `numero_abonne`, `telephone`) VALUES
(1, 'jgdgdf', 'dfgsdhf', '123@gmail.com', 'azertyazerty', '1231312', 1231312),
(2, 'jgdgdf', 'dfgsdhf', '123@gmail.com', 'qsdqsdqsdqsd', '1231312', 1231312),
(3, 'abcde', 'ddadqss', 'dqsfqfqsfqs@qsdqs', 'sqdqsdq', '1231312', 1231312),
(4, 'azerty', 'qsdqs', '123@gmail.com', 'qsdqsdqs', '1231312', 1231312),
(5, 'dran', 'gjghhg', 'jdrebd@test', 'sdqshfgjy', '5686797', 6547658),
(6, 'nouveaunom', 'test2', 'jdrebd@test', 'fhfghfghg', '2222222', 1231312),
(7, 'dran', 'benjamin', 'benjamin@dran.fr', 'azertyazerty', '999992222', 6943837),
(8, 'LO', 'CHEIKHOUNA', 'cheikhouna@cheikhouna.com', '60ca10a2cac0ec59bc65654222b065', '0', 0),
(9, '', '', 'jb', 'a94a8fe5ccb19ba61c4c0873d391e9', '758449357', 0),
(10, 'nom', 'PRENOM', 'jb', '60ca10a2cac0ec59bc65654222b065', '758449357', 12345),
(11, 'AZERTY', 'AZERTY', 'AZERTY', '52036e5a96b401419e3b870bb38598', '0', 12345),
(12, 'azerty', 'azerty', 'azerty', '9cf95dacd226dcf43da376cdb6cbba', '12345', 0),
(14, '', '', 'jb', '0b9c2625dc21ef05f6ad4ddf47c5f2', '0', 0),
(15, '', '', 'jb', '0b9c2625dc21ef05f6ad4ddf47c5f2', '123', 0),
(16, 'LO', 'CHEIKHOUNA', 'cheikhouna@cheikhouna.com', 'a94a8fe5ccb19ba61c4c0873d391e9', '1994', 0),
(17, '', '', 'jb', '90795a0ffaa8b88c0e250546d8439b', 'tata', 0),
(18, 'LO', 'CHEIKHOUNA', 'cheikhouna@cheikhouna.com', '90795a0ffaa8b88c0e250546d8439b', 'tata', 0),
(19, 'LO', 'CHEIKHOUNA', 'cheikhouna@cheikhouna.com', '90795a0ffaa8b88c0e250546d8439b', 'tata', 0),
(20, 'LO', 'CHEIKHOUNA', 'cheikhouna@cheikhouna.com', '3105221c1c15399d170ef540e974ef4f37f84e93', 'tete', 0),
(21, 'toto', 'tete', 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '123456789', 1234567),
(22, 'Chomes', 'G8C', 'G8c@chome.com', 'Chome', '0', 0),
(23, 'Chomes', 'Chomeur', 'Chome@Chome.com', '28df6ce1c4eb2a062b8553511431e54858c4880b', 'Chome', 0),
(24, 'dran', 'ben', 'Chome@Chome.com', '8cb2237d0679ca88db6464eac60da96345513964', '12345', 12345);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`IdCapteur`),
  ADD KEY `IdPiece` (`IdPiece`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`IdMaison`),
  ADD KEY `IdUtilisateur` (`IdUtilisateur`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`IdPiece`),
  ADD KEY `IdMaison` (`IdMaison`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IdUtilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `IdCapteur` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `IdMaison` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `IdPiece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IdUtilisateur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_ibfk_1` FOREIGN KEY (`IdPiece`) REFERENCES `piece` (`IdPiece`);

--
-- Contraintes pour la table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `maison_ibfk_1` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`);

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `piece_ibfk_1` FOREIGN KEY (`IdMaison`) REFERENCES `maison` (`IdMaison`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
