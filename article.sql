-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3310
-- Généré le :  sam. 07 mai 2022 à 10:14
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smartconseil`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `HeaderImage` varchar(255) NOT NULL,
  `Introduction` mediumtext NOT NULL,
  `Description` text NOT NULL,
  `LastMod` datetime NOT NULL DEFAULT current_timestamp(),
  `Language` varchar(2) NOT NULL,
  `KeyWords` varchar(1000) NOT NULL,
  `State` int(11) NOT NULL,
  `NumVisit` int(11) NOT NULL,
  `IdTheme` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `IdHost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `Title`, `Image`, `HeaderImage`, `Introduction`, `Description`, `LastMod`, `Language`, `KeyWords`, `State`, `NumVisit`, `IdTheme`, `IdUser`, `IdHost`) VALUES
(1, 'Ligula tristique quis risus', 'https://lh3.googleusercontent.com/IeH77MeeYFCVBKgTGvNhXIhMuN60YtU7s7zdZ_KzZmoCSurMsR_Y14g1snsBZqrVzHL6Yh4=s136', 'test', 'Mauris convallis non ligula non interdum. Gravida', 'Mauris convallis non ligula non interdum. Gravida', '2022-05-07 09:09:51', '1', '1', 1, 1, 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
