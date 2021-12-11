-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 déc. 2021 à 15:13
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'test', 54, '2021-12-06 10:23:34'),
(2, 'test2', 54, '2021-12-06 12:47:30'),
(3, 'hello', 54, '2021-12-06 15:05:16'),
(4, 'Bonjour, je suis Toto.', 55, '2021-12-06 15:14:34'),
(5, 'Salut tous le monde /', 58, '2021-12-06 19:26:44'),
(6, 'Bienvenue Ã  tous.', 59, '2021-12-06 19:38:04'),
(7, 'mon test', 59, '2021-12-07 12:57:50'),
(8, 'Coucou tous le monde !', 59, '2021-12-07 13:12:40'),
(9, 'Comment Ã§a va ?', 60, '2021-12-07 22:23:40'),
(10, 'Hi Everybody ', 60, '2021-12-07 22:39:44'),
(11, 'Comment Ã§a va ?', 60, '2021-12-07 22:45:00'),
(12, 'Azul Felawen', 60, '2021-12-07 22:47:23'),
(13, 'rerere', 60, '2021-12-07 22:57:34'),
(14, 'rerererere', 60, '2021-12-07 22:59:15'),
(15, 'BONJOURNO', 60, '2021-12-07 23:02:29'),
(16, 'Tarif rÃ©duit ?', 60, '2021-12-07 23:04:00'),
(17, 'Bonjour et bienvenue', 61, '2021-12-08 23:28:16'),
(18, 'Hello les amis, comment Ã§a va ?', 62, '2021-12-09 13:06:20'),
(19, 'Salut Ã  tous, problÃ¨me de PHP. ', 62, '2021-12-09 13:20:15'),
(20, 'Coucou tous le monde !', 66, '2021-12-10 16:08:41');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(53, 'bbb', '$2y$10$jkMEByjtQCyYM6M1JzzixOOGZ726vwT1keEykC8MYl01piXsCLVJq'),
(63, 'admin', '$2y$10$t8yF5wwS..ReliMz9R8d6uUu0Bi79yFUOyO6/8g8DENFG39BKvLQ2'),
(65, 'mimi2', '$2y$10$URaoNSFmWapVKbRqZSsvs.TbdtI9LUf4Da5Xe229QRLZ2nlk5zHMq'),
(66, 'mama', '$2y$10$L8UUEv9NTJKoR8LnQNUZL.DJx/Ps7PoLEpsizCwl6utVXHIaIKnUO'),
(59, 'cococ', '$2y$10$UTctZkFKk5K2pBjpEir/5eqOXibchBQ5o79P1DKvP4zplvCcVFAx.'),
(62, 'bobo', '$2y$10$UXzhSbILsFcl0FZxz958/O3Wjr9Y9McreUHQ2il6kRUjvyWXN8MJK'),
(58, 'n', '$2y$10$q7jB38O4Xis/qruivE0oueDAzdIWKjy8/shOEx3WQQFgUiMq9fHwu'),
(54, 'soso', '$2y$10$wjRJtHhwt1yUVWmq3mTqlecAIrHGyAwQgM/MrYXVULpMGif3W2NR2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
