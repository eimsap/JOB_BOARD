-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 20, 2020 at 05:39 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujob`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertissements`
--

CREATE TABLE `advertissements` (
  `ID` int(11) NOT NULL,
  `author` varchar(22) NOT NULL,
  `name_ad` varchar(42) NOT NULL,
  `resume_ad` text NOT NULL,
  `complete_ad` text NOT NULL,
  `type_ad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertissements`
--

INSERT INTO `advertissements` (`ID`, `author`, `name_ad`, `resume_ad`, `complete_ad`, `type_ad`) VALUES
(1, 'Airbus', 'Expert Comptable', 'Airbus recherche actuellement un expert comptable pour une durée de 6 mois', 'le secteur RH d\'airbus recherche actuellement un expert comptable pour gérer la comptabilité du secteur RH pour une durée de 6 mois à compter du 1er janvier 2021.\r\nIl est primordial de maîtriser couramment l\'anglais, d\'être dynamique et motivé ', 'CDD'),
(2, 'Apple', 'développeur Swift', 'Apple cherche actuellement un nouveau développeur Swift pour un CDI', 'Dans sa politique de mise à jour d\'iOS 14 la société Apple recrute des développeurs Swift de tout age pour mettre à jour des applications obsolètes vers iOS 14.\r\nIl est primordial de maîtriser l\'anglais, le langage Swift et les produits apple', 'CDI'),
(3, 'Asus', 'Gamer pro', 'Asus recherche actuellement des joueurs expérimentés.', 'La société Asus France recrute activement des joueurs R6,Overwatch et lol pour la E-sport cup 2077.', 'CDD'),
(4, 'YAMAHA', 'Stage Mécanique ', 'YAMAHA Aix-en-Provence recrute actuellement des jeunes passionnés de mécanique ', 'YAMAHA Aix-en-Provence recrute actuellement des jeunes passionnés de mécaniques pour effectuer un stage rémunéré d\'une durée de 2 mois à partir du 9 juin 2021 au 12 août 2021.', 'stage'),
(5, 'airbus', 'Technicien de maintenance ', 'Airbus recrute actuellement un technicien de maintenance pour effectuer des tests ', 'Airbus recherche actuellement un technicien de maintenance mécanique pour effectuer des tests hebdomadaires sur le secteur Airbus Hélicoptère.', 'CDD'),
(6, 'nico.zip', 'jardinier', 'jardinage pendant 3 semaines', 'jardinage pendant 3 semaines payé 6000 euros', 'stage');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `ID` int(11) NOT NULL,
  `company_name` varchar(22) NOT NULL,
  `domain` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `currentConnection`
--

CREATE TABLE `currentConnection` (
  `ID` int(11) NOT NULL,
  `firtsname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `Cname` varchar(32) NOT NULL,
  `Cnumber` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Cpassword` varchar(32) NOT NULL,
  `contractor` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `firstname`, `Cname`, `Cnumber`, `email`, `username`, `Cpassword`, `contractor`) VALUES
(1, 'nicolas', 'uglietta', 0, 'nicolas.uglt@icloud.com', 'nico.zip', 'mdp1234', 'yes'),
(2, 'Bertille', 'villemaux', 442046779, 'b.villemaux@free.fr', 'bxty_v', 'nicottropmoche', 'no'),
(3, 'admin', 'admin', 0, 'admin@admin.com', 'admin', 'root', ''),
(4, 'Airbus', 'Airbus', 456478932, 'RH-airbus@airbus.fr', 'airbus', 'airbus', 'yes'),
(5, 'Emilie', 'spina', 600010203, 'emilie.spina@epitech.eu', 'peimlie', 'azerty', 'no'),
(6, 'JEAN', 'DUPONT', 1234567890, 'jean.dupont@gmail.com', 'jdupont13', 'vier', ''),
(7, 'remi', 'turini', 628451328, 'remi.turini@epitech.eu', 'remtutu', 'password', '');

-- --------------------------------------------------------

--
-- Table structure for table `infoad`
--

CREATE TABLE `infoad` (
  `ID` int(11) NOT NULL,
  `ad_concerned` varchar(22) NOT NULL,
  `Fname` varchar(22) NOT NULL,
  `Cname` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `message_ad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infoad`
--

INSERT INTO `infoad` (`ID`, `ad_concerned`, `Fname`, `Cname`, `mail`, `phone`, `message_ad`) VALUES
(1, '', 'iuiuiu', '', 'uvvv', 9595, 'hfjdtrsjcduffugiyvutsfgttedfguytd'),
(2, '', 'dfgh', '', 'dfghj', 23456789, 'sdfghjk'),
(3, '', 'asdfghjk', '', 'asdfghj', 12345, 'asdfdswert'),
(4, '', 'asdfghjk', '', 'qwerty', 123456, 'qwertyuiop'),
(5, '', 'bertille villemaux', '', 'b.villemaux@yahoo.fr', 678654343, 'bonjour je suis amoureuse de nicolas.\r\n<3'),
(6, '', 'bertille villemaux', '', 'b.villemaux@yahoo.fr', 678764343, 'je suis amoureuse de Nicolas <3'),
(7, '', 'bogossedu13xx', '', 'vivgaston@bogossdu13.bo', 0, 'send nudes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertissements`
--
ALTER TABLE `advertissements`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `currentConnection`
--
ALTER TABLE `currentConnection`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `infoad`
--
ALTER TABLE `infoad`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertissements`
--
ALTER TABLE `advertissements`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currentConnection`
--
ALTER TABLE `currentConnection`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `infoad`
--
ALTER TABLE `infoad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
