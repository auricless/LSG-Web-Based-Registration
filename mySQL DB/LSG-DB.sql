-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 12:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsg`
--
CREATE DATABASE IF NOT EXISTS `lsg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lsg`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(3) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `password`) VALUES
(1, 'lsg4th');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `guest_id` int(3) NOT NULL,
  `attended_time` time NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `invited_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`guest_id`, `attended_time`, `first_name`, `last_name`, `gender`, `age`, `address`, `contact`, `invited_by`) VALUES
(1, '17:00:55', 'Mark  Anthony', 'Telimban', 'Male', 21, 'Brgy Pob 3 B37 L3', '09984500297', 'Marcel'),
(2, '17:02:26', 'Gabriel ', 'Modar', 'Male', 14, 'blk 16 Lot 8 Brgy Pulido', '---', 'camille'),
(3, '17:09:48', 'regine', 'balea', 'Female', 23, 'bancal carmona ', '09171338502', 'me ;)'),
(4, '17:15:13', 'joanna marie', 'cabuay', 'Female', 22, 'Ph. 3 Moldex, Dasmarinas, cavite', '09369830871', 'Joanna'),
(5, '17:16:44', 'Marc Oriel ', 'Reduta', 'Male', 10, 'blk 16 Lot 8 Brgy Pulido', '----', 'gabriel'),
(6, '17:19:43', 'roseanne', 'bacayo', 'Female', 14, 'blk9lot6brgykua', '09393443760', 'kuya jayson'),
(7, '17:20:38', 'Victoria', 'Llanes', 'Female', 12, 'GMA cavite', '09429613457', 'kuya jayson'),
(8, '17:21:14', 'jhanized', 'mercaida', 'Female', 13, 'gma cavite', '09234450775', 'kuya jayson'),
(9, '17:22:48', 'rocelle', 'bacayo', 'Female', 15, 'blk9l6brgykua', '09466415387', 'kuyajayson'),
(10, '17:23:53', 'vanessa', 'reduta', 'Female', 11, 'GMA cavite', '09305673571', 'kuya jayson'),
(11, '17:25:09', 'rose marie', 'bacayo', 'Female', 13, 'blk9lot6brgykua', '09393443760', 'kuya jayson'),
(12, '17:26:18', 'ronniela', 'gonzaga', 'Female', 14, 'blk9lot6brgykua', '09481946945', 'kuya jayson'),
(13, '17:27:27', 'julieann', 'eupena', 'Female', 13, 'blk9lot6brgykua', '09482916979', 'kuya jayson'),
(14, '17:28:12', 'allan', 'bacayo', 'Male', 12, 'blk9lot6brgykua', '09393443760', 'kuya jayson'),
(15, '17:29:37', 'Aron', 'Ciruela', 'Male', 22, 'B7 L1 Brgy, Kapitan KUA', '09395913552', 'ako lang sadnu :('),
(16, '17:30:20', 'Marcel', 'Levardo', 'Male', 21, 'bancal carmona ', '09364205276', 'Ako pa din '),
(17, '17:32:45', 'johndavid', 'oriel', 'Male', 15, 'bkl 1 lot 51', '09421637912', 'ian'),
(18, '17:34:05', 'jhon fred', 'martinez', 'Male', 17, 'B6 L24 Brgy, lumbreras gma cavite', '09276062177', 'Kirby'),
(19, '17:36:56', 'Shena', 'Ocampo', 'Female', 20, 'Maduya, Carmona, Cavite', '09066661784', 'Shena'),
(20, '17:40:31', 'Rizza', 'Dela Pena', 'Female', 19, 'Block 1 Lot 40 Brgy. Granados', '09480459966', 'Sarili ko :('),
(21, '17:41:49', 'Richard del', 'Altre', 'Male', 18, 'Blk 21 Lot1 Brgy.Pulido GMA Cavite', '09095108960', 'myself'),
(22, '17:44:18', 'Bon Jolly', 'Adorna', 'Male', 23, 'carmona cavite', '09393364793', 'bon'),
(23, '17:52:57', 'Eurica', 'Torres', 'Female', 16, 'b2 l32 brgy. lumbreras', '1', 'Lyssa'),
(24, '17:59:47', 'Mc. Harvey', 'Penuliar', 'Male', 21, '14242 Bancal C. C', '09269476333', 'Marcel'),
(25, '18:09:25', 'kirt  john', 'zuniga', 'Male', 24, 'brgy pulido b-28 l-8 gma', '09197040921', 'vj nog nog'),
(26, '18:21:24', 'macrobhen', 'gumiit', 'Male', 16, 'b7 L18 brngy san gabriel gma cavite', '09073597215', 'me'),
(27, '18:28:06', 'Judy ann', 'Villa', 'Female', 18, 'B 14 L 15 Teachers Village GMA Cavite', '09280496982', 'Marianne'),
(28, '18:29:09', 'Marianne', 'Montes', 'Female', 16, 'B 12 L 24 Teachers Village GMA Cavite', '09753771519', 'me'),
(29, '18:37:03', 'jahzrel', 'olip', 'Male', 17, 'B18LT82BRGY, DELAS-ALAS', '8', 'me'),
(30, '18:39:15', 'joshua', 'k', 'Male', 17, 'GMA cavite', '1', 'jazhrel'),
(31, '18:39:44', 'trisha', 'muyot', 'Female', 21, 'san pedro, laguna', '09169832393', 'ate reg'),
(32, '18:40:27', 'Marvin', 'Legaspi', 'Male', 20, 'san pedro, laguna', '09057533321', 'Marcel'),
(33, '18:50:25', 'Rodan', 'dejecacion', 'Male', 12, 'B9 L6 Brgy KUA', '09184423764', 'Jayson'),
(34, '18:51:05', 'Melvin Paul', 'Sus', 'Male', 13, 'B9 L3 Brgy KUA', '09232202136', 'Jayson'),
(35, '18:51:27', 'Benjie', 'Serna', 'Male', 14, 'B9 L6 Brgy KUA', '---', 'Jayson'),
(36, '18:56:51', 'Arnulfo', 'Verano', 'Male', 22, 'Blk 16 Lot 14 AFP Housing Zone 1 Bulihan Silang Cavite', '09126358956', 'Denis'),
(37, '18:58:17', 'Vincent Gabriel', 'Banayo', 'Male', 17, 'blk 4 lot 5 AFP Housing Zone 1 Bulihan Silang Cavite', '09467370932', 'Denis'),
(38, '18:59:33', 'Jerald', 'Malong', 'Male', 20, 'Blk11 lot 8 ireland drive Franceville Homes ,Bulihan,Silang,Cavite', '09502127545', 'Denis'),
(39, '19:03:52', 'Ulysses', 'Torres', 'Female', 20, 'b2 l32 brgy. lumbreras', '09151860223', 'Me');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`guest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `guest_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
