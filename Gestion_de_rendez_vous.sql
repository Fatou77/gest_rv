-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 17 Octobre 2019 à 08:10
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Gestion_de_rendez_vous`
--

-- --------------------------------------------------------

--
-- Structure de la table `medcin`
--

CREATE TABLE `medcin` (
  `idmed` int(10) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idsp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medcin`
--

INSERT INTO `medcin` (`idmed`, `nom`, `prenom`, `email`, `idsp`) VALUES
(1, 'wade', 'flilou', 'wadef45@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `idrv` int(10) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `civilite` varchar(11) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `jour` varchar(10) NOT NULL,
  `heur` time NOT NULL,
  `idsec` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`idrv`, `nom`, `prenom`, `civilite`, `age`, `jour`, `heur`, `idsec`) VALUES
(1, 'diop', 'ahmadou', 'mr', 15, 'lundi', '12:30:00', 1),
(2, 'deme', 'Aminta', 'mll', 15, 'mercredi', '08:15:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE `secretaire` (
  `idsec` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secretaire`
--

INSERT INTO `secretaire` (`idsec`, `nom`, `prenom`, `email`) VALUES
(1, 'diop', 'fatou', 'diopfatou@gmail.com'),
(2, 'falle', 'Aida', 'fall47@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `idser` int(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `idsec` int(10) NOT NULL,
  `idmed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `idsp` int(10) NOT NULL,
  `nomsp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`idsp`, `nomsp`) VALUES
(1, 'cardiologue'),
(2, 'psychiatrique'),
(3, 'dermatologie'),
(4, 'radiologie');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `nom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `nom`) VALUES
(1, 'lofatou65@gmail.com', '5227769', 'service medical');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `medcin`
--
ALTER TABLE `medcin`
  ADD PRIMARY KEY (`idmed`),
  ADD KEY `idsp` (`idsp`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`idrv`),
  ADD KEY `idsec` (`idsec`);

--
-- Index pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`idsec`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idser`),
  ADD KEY `idsec` (`idsec`),
  ADD KEY `idmed` (`idmed`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`idsp`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `medcin`
--
ALTER TABLE `medcin`
  MODIFY `idmed` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `idrv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `secretaire`
--
ALTER TABLE `secretaire`
  MODIFY `idsec` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `idser` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idsp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `medcin`
--
ALTER TABLE `medcin`
  ADD CONSTRAINT `medcin_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `specialite` (`idsp`);

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `rendez_vous_ibfk_2` FOREIGN KEY (`idsec`) REFERENCES `secretaire` (`idsec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`idsec`) REFERENCES `secretaire` (`idsec`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`idmed`) REFERENCES `medcin` (`idmed`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
