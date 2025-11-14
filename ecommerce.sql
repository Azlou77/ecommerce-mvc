-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 06 nov. 2025 à 19:47
-- Version du serveur : 10.6.22-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `id_product`) VALUES
(1, 'shoes', NULL),
(2, 'suits', NULL),
(8, 'accessoires', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `subcat` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `price`, `img`, `subcat`, `cat`, `color`) VALUES
(1, 'Cravate Bleu Rayure', '30.00', 'cravate-bleu-rayure', 13, 8, 'blue'),
(2, 'Cravate Bleu Pois', '30.00', 'cravate-bleu-pois', 13, 8, 'blue'),
(3, 'Montre Classique', '80.00', 'montre-classique', 15, 8, 'brown'),
(4, 'Cravate Bleu', '30.00', 'cravate-bleu', 13, 8, 'blue'),
(5, 'Derby Marron', '150.00', 'derby-cuir-marron', 2, 1, 'brown'),
(8, 'Montre Gousset Noir', '45.00', 'montre-gousset-noir', 15, 8, 'balck'),
(9, 'Montre Gousset Or', '25.00', 'montre-gousset-or', 15, 8, 'gold'),
(11, 'Mocassins en cuir Noir', '120.00', 'mocassin-cuir-noir', 2, 1, 'black'),
(12, 'Derby Monk Noir', '150.00', 'derby-monk-noir', 2, 1, 'black'),
(13, 'Costume 2 Pièces Bleu', '200.00', 'costume-2-pieces-bleu', 4, 2, 'black'),
(14, 'Costume 3 Pieces Bleu Clair', '130.00', 'costume-3-pieces-bleu-clair', 3, 2, 'blue'),
(15, 'Costume 3 Pieces Bleu Foncé', '160.00', 'costume-3-pieces-bleu-fonce', 3, 2, 'blue'),
(16, 'Costume 3 Pieces Bleu Canard', '220.00', 'costume-3-pieces-bleu-canard', 3, 2, 'blue'),
(21, 'Costume Thomas Shelby', '600.50', 'costume-thomas-shelby', 11, 2, 'black'),
(22, 'Manteau Thomas Shelby', '7000.00', 'manteau-thomas-shelby', 11, 2, 'black'),
(23, 'Casquette Thomas Shelby', '50.00', 'casquette-thomas-shelby', 11, 8, 'grey'),
(24, 'Costume 3 Pieces Bleu Motifs', '420.00', 'costume-3-pieces-bleu-motifs', 3, 2, 'blue'),
(25, 'Costume 3 Pieces Noir', '420.00', 'costume-3-pieces-noir', 3, 2, 'black'),
(26, 'Costume 3 Pièces Noir 2', '420.00', 'costume-3-pieces-noir2', 3, 2, 'black'),
(27, 'Costume 3 Pièces Marron', '320.00', 'costume-3-pieces-marron', 3, 2, 'brown'),
(28, 'Costume 3 Pièces Marron Clair', '320.00', 'costume-3-pieces-marron-clair', 3, 2, 'brown'),
(29, 'Costume 2 Pièces Bleu Fonce', '320.00', 'costume-2-pieces-bleu-fonce', 4, 2, 'black'),
(30, 'Costume 2 Pièces Bleu Clair', '420.00', 'costume-2-pieces-bleu-clair', 4, 2, 'blue'),
(31, 'Costume 2 Pièces Bleu Rayures', '420.00', 'costume-2-pieces-bleu-rayures', 4, 2, 'grey'),
(32, 'Costume 2 Pièces Bleu 2', '420.00', 'costume-2-pieces-bleu2', 4, 2, 'black'),
(33, 'Cravate Noir Pois', '30.00', 'cravate-noir-pois', 13, 8, 'black'),
(34, 'Cravate Noir Rayure', '30.00', 'cravate-noir-rayure', 13, 8, 'black'),
(35, 'Cravate Noir', '30.00', 'cravate-noir', 13, 8, 'black'),
(36, 'Derby Cuir Noir', '120.00', 'derby-cuir-noir', 2, 1, 'black'),
(38, 'Derby Buck Noir', '120.00', 'derby-buck-noir', 2, 1, 'black'),
(42, 'Derby Monk Marron Clair', '120.00', 'derby-monk-marron-clair', 2, 1, 'brown'),
(43, 'Mocassin Pampilles Marron', '120.00', 'mocassin-pampille-marron', 1, 1, 'brown'),
(44, 'Mocassin Pampilles  Noir', '120.00', 'mocassin-pampille-noir', 120, 1, 'black'),
(45, 'Mocassin Cuir Marron', '120.00', 'mocassin-cuir-marron', 1, 1, 'brown'),
(46, 'Mocassin Buck Marron', '120.00', 'mocassin-buck-marron', 1, 1, 'brown'),
(47, 'Mocassin Buck Marron Taupe', '120.00', 'mocassin-buck-marron-taupe', 1, 1, 'brown'),
(48, 'Mocassin Buck Marron Foncé', '120.00', 'mocassin-buck-marron-fonce', 1, 1, 'brown'),
(49, 'Mocassin Cuir Marron Chocolat', '120.00', 'mocassin-cuir-marron-chocolat', 1, 1, 'brown'),
(50, 'Montre Gousset Bleu', '40.00', 'montre-gousset-bleu', 15, 8, 'blue'),
(51, 'Montre Gousset Gris 2', '40.00', 'montre-gousset-gris', 0, 0, 'grey'),
(52, 'Montre Gousset Noir', '40.00', 'montre-gousset-noir', 0, 0, ''),
(53, 'Montre Gousset Or', '40.00', 'montre-gousset-or', 0, 0, ''),
(54, 'Montre Gousset Or 2', '40.00', 'montre-gousset-or2', 0, 0, ''),
(55, 'Montre Gousset Gris', '40.00', 'montre-gousset-gris', 15, 0, 'grey\r\n'),
(62, 'Derby Monk Marron Foncé', '150.00', 'derby-monk-marron-fonce', 2, 1, 'brown'),
(63, 'Derby Cuir Marron Cognac', '150.00', 'derby-cuir-marron-cognac', 2, 1, 'brown'),
(64, 'Mocassin pampille Marron Clair', '120.00', 'mocassin-pampille-marron-clair', 1, 1, 'brown'),
(65, 'Mocassin Pampille Marron Foncé', '120.00', 'mocassin-pampille-marron-fonce', 1, 1, 'brown'),
(66, 'Richelieu Adelaide Marron', '120.00', 'richelieu-adelaide-marron', 9, 1, 'brown'),
(67, 'Richelieu Adelaide Marron', '120.00', 'richelieu-adelaide-noir', 9, 1, 'black'),
(68, 'Richelieu Onecut Marron Foncé', '120.00', 'richelieu-onecut-marron-fonce', 9, 1, 'brown'),
(69, 'Richelieu Onecut Marron', '120.00', 'richelieu-onecut-marron', 9, 1, 'brown'),
(70, 'Richelieu Onecut Noir', '120.00', 'richelieu-onecut-noir', 9, 1, 'black'),
(71, 'Derby Buck Marron', '120.00', 'derby-buck-marron', 2, 1, 'brown'),
(72, 'Derby Monk Marron', '120.00', 'derby-monk-marron', 2, 1, 'brown');

-- --------------------------------------------------------

--
-- Structure de la table `subcategory`
--

CREATE TABLE `subcategory` (
  `id_subcategory` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `subcategory`
--

INSERT INTO `subcategory` (`id_subcategory`, `subcategory_name`, `cat`) VALUES
(1, 'mocassin', 1),
(2, 'derby', 1),
(3, 'costume-3-pieces', 2),
(4, 'costume-2-pieces', 2),
(9, 'richelieu', 1),
(11, 'derniers', NULL),
(13, 'cravates', 8),
(14, 'bouttons', 8),
(15, 'montres', 8);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `id_product` (`id_product`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Index pour la table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id_subcategory`),
  ADD KEY `id_category` (`cat`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id_subcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cat`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;