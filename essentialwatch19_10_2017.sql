-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 03:33 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essentialwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_enterprise`
--

CREATE TABLE `t_enterprise` (
  `nomEnterprise` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `adresse` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nombre employés` int(11) NOT NULL,
  `TVA` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_enterprise`
--

INSERT INTO `t_enterprise` (`nomEnterprise`, `adresse`, `nombre employés`, `TVA`) VALUES
('Google', 'Rue de la Tulipe', 600, 'BE9638521456'),
('Interface3', 'Rue Gaucheret', 50, 'BE1236547896');

-- --------------------------------------------------------

--
-- Table structure for table `t_order`
--

CREATE TABLE `t_order` (
  `idOrder` smallint(5) UNSIGNED NOT NULL,
  `IdUser` tinyint(4) UNSIGNED NOT NULL,
  `idProduct` tinyint(4) UNSIGNED NOT NULL,
  `dateComande` date NOT NULL,
  `dateLivraison` date NOT NULL,
  `quantité` tinyint(4) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_products`
--

CREATE TABLE `t_products` (
  `idProduct` tinyint(4) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `idUser` tinyint(4) UNSIGNED NOT NULL,
  `firstName` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `lastName` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `nomEnterprise` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `telephone` tinyint(10) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`idUser`, `firstName`, `lastName`, `nomEnterprise`, `telephone`, `email`, `password`) VALUES
(40, 'bb', 'tt', 'Google', 127, 'n.corzo@interface3.be', '1265'),
(41, 'bb', 'tt', 'Google', 127, 'n.corzo@interface3.be', '1265');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_enterprise`
--
ALTER TABLE `t_enterprise`
  ADD PRIMARY KEY (`nomEnterprise`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `_foreignKey1` (`IdUser`),
  ADD KEY `_foreignKey2` (`idProduct`);

--
-- Indexes for table `t_products`
--
ALTER TABLE `t_products`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `_foreignKey3` (`nomEnterprise`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_order`
--
ALTER TABLE `t_order`
  MODIFY `idOrder` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_products`
--
ALTER TABLE `t_products`
  MODIFY `idProduct` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `idUser` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_order`
--
ALTER TABLE `t_order`
  ADD CONSTRAINT `_foreignKey1` FOREIGN KEY (`IdUser`) REFERENCES `t_users` (`idUser`),
  ADD CONSTRAINT `_foreignKey2` FOREIGN KEY (`idProduct`) REFERENCES `t_products` (`idProduct`);

--
-- Constraints for table `t_users`
--
ALTER TABLE `t_users`
  ADD CONSTRAINT `_foreignKey3` FOREIGN KEY (`nomEnterprise`) REFERENCES `t_enterprise` (`nomEnterprise`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
