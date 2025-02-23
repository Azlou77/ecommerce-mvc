-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 fév. 2025 à 21:38
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.2.4

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `price`, `img`, `subcat`, `color`) VALUES
(1, 'Cravate Bleu Rayure', '30.00', 'cravate-bleu-rayure', 13, 'blue'),
(2, 'Cravate Bleu Pois', '30.00', 'cravate-bleu-pois', 13, 'blue'),
(3, 'Montre Classique', '80.00', 'montre-classique', 15, 'brown'),
(4, 'Cravate Bleu', '30.00', 'cravate-bleu', 13, 'blue'),
(5, 'Derby Classique', '150.00', 'derbys-classiques', 2, 'brown'),
(6, 'Costume Bleue Classique', '320.00', 'costume-classique', 4, 'blue'),
(7, 'Costume Coton 2 pieces Gris', '420.00', 'costume-coton-2pieces-gris', 4, 'grey'),
(8, 'Montre Gousset Noir', '45.00', 'montre-gousset-noir', 15, 'balck'),
(9, 'Montre Gousset Or', '25.00', 'montre-gousset-or', 15, 'gold'),
(10, 'Costume Trois Pièces', '350.00', 'costume-trois-pieces', 3, 'blue'),
(11, 'Mocassins en cuir Noir', '120.00', 'mocassin-cuir-noir', 1, 'black'),
(12, 'Derbys en daim Noir', '150.00', 'derby-daim-noir', 2, '0'),
(13, 'Costume coton 2 Pièces Noir', '200.00', 'costume-coton-2pieces-noir', 4, '0'),
(14, 'Costume Coton 3 Pieces Bleu', '130.00', 'costume-coton-3pieces-bleu', 3, 'blue'),
(15, 'Costume Coton 3 pieces Gris', '160.00', 'costume-coton-3pieces-gris', 3, 'grey'),
(16, 'Costume Coton 3 pieces Noir', '220.00', 'costume-coton-3pieces-noir', 3, 'black'),
(17, 'Costume Laine 2 Pièces Bleu', '110.00', 'costume-laine-2pieces-bleu-marine', 4, 'blue'),
(18, 'Costume Laine 2 Pièces Gris', '155.00', 'costume-laine-2pieces-gris', 4, 'grey'),
(19, 'Costume Laine 2 Pièces Noir', '210.00', 'costume-laine-2pieces-noir', 4, 'black'),
(20, 'Richelieu Thomas Shelby', '300.00', 'richelieu-thomas-shelby', 11, 'black'),
(21, 'Costume Thomas Shelby', '600.50', 'costume-thomas-shelby', 11, 'black'),
(22, 'Manteau Thomas Shelby', '7000.00', 'manteau-thomas-shelby', 11, 'black'),
(23, 'Casquette Thomas Shelby', '50.00', 'casquette-thomas-shelby', 11, 'grey'),
(24, 'Costume Laine 3 pièces Bleu', '420.00', 'costume-laine-3pieces-bleu', 3, 'blue'),
(25, 'Costume Laine 3 pièces Gris', '420.00', 'costume-laine-3pieces-gris', 3, 'gris'),
(26, 'Costume Laine 3 Pièces Noir', '420.00', 'costume-laine-3pieces-noir', 3, 'black'),
(27, 'Costume Lin 2 Pièces Bleu', '320.00', 'costume-lin-2pieces-bleu', 4, 'blue'),
(28, 'Costume Lin 2 Pièces Gris', '320.00', 'costume-lin-2pieces-gris', 4, 'grey'),
(29, 'Costume Lin 2 Pièces Noir', '320.00', 'costume-lin-2pieces-noir', 4, 'black'),
(30, 'Costume Lin 3 Pièces Bleu', '420.00', 'costume-lin-3pieces-bleu', 3, 'blue'),
(31, 'Costume Lin 3 Pièces Gris', '420.00', 'costume-lin-3pieces-gris', 3, 'grey'),
(32, 'Costume Lin 3 Pièces Noir', '420.00', 'costume-lin-3pieces-noir', 3, 'black'),
(33, 'Cravate Noir Pois', '30.00', 'cravate-noir-pois', 13, 'black'),
(34, 'Cravate Noir Rayure', '30.00', 'cravate-noir-rayure', 13, 'black'),
(35, 'Cravate Noir', '30.00', 'cravate-noir', 13, 'black'),
(36, 'Derby Cuir Noir', '120.00', 'derby-cuir-noir', 2, 'black'),
(37, 'Derby Daim Marron', '120.00', 'derby-daim-marron', 2, 'brown'),
(38, 'Derby Daim Noir', '120.00', 'derby-daim-noir', 2, 'black'),
(39, 'Derby Nubuck Noir', '120.00', 'derby-nubuck-noir', 2, 'black'),
(40, 'Derby Nubuck Marron', '120.00', 'derby-nubuck-marron', 2, 'brown'),
(41, 'Derby Velours Marron', '120.00', 'derby-velour-marron', 2, 'brown'),
(42, 'Derby Nubuck Noir', '120.00', 'derby-velour-noir', 2, 'black'),
(43, 'Mocassin Pampilles Marron', '120.00', 'mocassins-pampilles-marron', 1, 'brown'),
(44, 'Mocassin Pampilles ', '120.00', 'mocassins-pampilles', 120, 'black'),
(45, 'Mocassin Cuir Marron', '120.00', 'mocassin-cuir-marron', 1, 'brown'),
(46, 'Mocassin Nubuck Marron', '120.00', 'mocassin-nubuck-marron', 1, 'brown'),
(47, 'Mocassin Nubuck Noir', '120.00', 'mocassin-nubuck-noir', 1, 'black'),
(48, 'Mocassin Velours Noir', '120.00', 'mocassin-velours-noir', 1, 'black'),
(49, 'Mocassin Velours Marron', '120.00', 'mocassin-velours-marron', 1, 'brown'),
(50, 'Montre Gousset Bleu', '40.00', 'montre-gousset-bleu', 15, 'blue'),
(51, 'Montre Gousset Gris 2', '40.00', 'montre-gousset-gris', 0, 'grey'),
(52, 'Montre Gousset Noir', '40.00', 'montre-gousset-noir', 0, ''),
(53, 'Montre Gousset Or', '40.00', 'montre-gousset-or', 0, ''),
(54, 'Montre Gousset Or 2', '40.00', 'montre-gousset-or2', 0, ''),
(55, 'Montre Gousset Gris', '40.00', 'montre-gousset-gris', 15, 'grey\r\n'),
(56, 'Richelieu Cuir Marron', '120.00', 'richelieu-cuir-marron', 9, 'brown'),
(57, 'Richelieu Cuir Noir', '120.00', 'richelieu-cuir-noir', 9, 'black'),
(58, 'Richelieu Daim Marron', '120.00', 'richelieu-daim-marron', 9, 'brown'),
(59, 'Richelieu Daim Noir', '120.00', 'richelieu-daim-noir', 9, 'black'),
(60, 'Richelieu Velours Noir', '120.00', 'richelieu-velours-noir', 9, 'black'),
(61, 'Richelieu Velours Marron', '120.00', 'richelieu-velours-marron', 9, 'brown');

-- --------------------------------------------------------

--
-- Structure de la table `subcategory`
--

CREATE TABLE `subcategory` (
  `id_subcategory` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(12, 'chemise formelles', NULL),
(13, 'cravates', 8),
(14, 'bouttons', NULL),
(15, 'montres', 8),
(16, 'costume soirée', NULL),
(17, 'chemises à carreaux', NULL),
(18, 'chemises à rayues', NULL),
(19, 'Black', NULL),
(20, 'Blue', NULL),
(21, 'Grey', NULL);

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
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id_subcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
