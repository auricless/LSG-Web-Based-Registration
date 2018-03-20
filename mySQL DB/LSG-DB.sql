-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 10:13 AM
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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(3) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_image` text NOT NULL,
  `event_date` date NOT NULL,
  `event_launch` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_image`, `event_date`, `event_launch`) VALUES
(1, 'Unstoppable', 'LSG ticket v5 - color corrected.png', '2017-12-30', 0),
(3, 'Intimate', 'widescreen.png', '2018-02-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(3) NOT NULL,
  `lsg_id` int(3) NOT NULL,
  `feedback_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `lsg_id`, `feedback_content`) VALUES
(8, 2, 'Ang panget ni jeff at aron'),
(9, 3, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `guest_id` int(3) NOT NULL,
  `lsg_id` int(3) NOT NULL,
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

INSERT INTO `guests` (`guest_id`, `lsg_id`, `attended_time`, `first_name`, `last_name`, `gender`, `age`, `address`, `contact`, `invited_by`) VALUES
(1, 1, '17:00:55', 'Mark  Anthony', 'Telimban', 'Male', 21, 'Brgy Pob 3 B37 L3', '09984500297', 'Marcel'),
(2, 1, '17:02:26', 'Gabriel ', 'Modar', 'Male', 14, 'blk 16 Lot 8 Brgy Pulido', '---', 'camille'),
(3, 1, '17:09:48', 'regine', 'balea', 'Female', 23, 'bancal carmona ', '09171338502', 'me ;)'),
(4, 1, '17:15:13', 'joanna marie', 'cabuay', 'Female', 22, 'Ph. 3 Moldex, Dasmarinas, cavite', '09369830871', 'Joanna'),
(5, 1, '17:16:44', 'Marc Oriel ', 'Reduta', 'Male', 10, 'blk 16 Lot 8 Brgy Pulido', '----', 'gabriel'),
(6, 1, '17:19:43', 'roseanne', 'bacayo', 'Female', 14, 'blk9lot6brgykua', '09393443760', 'kuya jayson'),
(7, 1, '17:20:38', 'Victoria', 'Llanes', 'Female', 12, 'GMA cavite', '09429613457', 'kuya jayson'),
(8, 1, '17:21:14', 'jhanized', 'mercaida', 'Female', 13, 'gma cavite', '09234450775', 'kuya jayson'),
(9, 1, '17:22:48', 'rocelle', 'bacayo', 'Female', 15, 'blk9l6brgykua', '09466415387', 'kuyajayson'),
(10, 1, '17:23:53', 'vanessa', 'reduta', 'Female', 11, 'GMA cavite', '09305673571', 'kuya jayson'),
(11, 1, '17:25:09', 'rose marie', 'bacayo', 'Female', 13, 'blk9lot6brgykua', '09393443760', 'kuya jayson'),
(12, 1, '17:26:18', 'ronniela', 'gonzaga', 'Female', 14, 'blk9lot6brgykua', '09481946945', 'kuya jayson'),
(13, 1, '17:27:27', 'julieann', 'eupena', 'Female', 13, 'blk9lot6brgykua', '09482916979', 'kuya jayson'),
(14, 1, '17:28:12', 'allan', 'bacayo', 'Male', 12, 'blk9lot6brgykua', '09393443760', 'kuya jayson'),
(15, 1, '17:29:37', 'Aron', 'Ciruela', 'Male', 22, 'B7 L1 Brgy, Kapitan KUA', '09395913552', 'ako lang sadnu :('),
(16, 1, '17:30:20', 'Marcel', 'Levardo', 'Male', 21, 'bancal carmona ', '09364205276', 'Ako pa din '),
(17, 1, '17:32:45', 'johndavid', 'oriel', 'Male', 15, 'bkl 1 lot 51', '09421637912', 'ian'),
(18, 1, '17:34:05', 'jhon fred', 'martinez', 'Male', 17, 'B6 L24 Brgy, lumbreras gma cavite', '09276062177', 'Kirby'),
(19, 1, '17:36:56', 'Shena', 'Ocampo', 'Female', 20, 'Maduya, Carmona, Cavite', '09066661784', 'Shena'),
(20, 1, '17:40:31', 'Rizza', 'Dela Pena', 'Female', 19, 'Block 1 Lot 40 Brgy. Granados', '09480459966', 'Sarili ko :('),
(21, 1, '17:41:49', 'Richard del', 'Altre', 'Male', 18, 'Blk 21 Lot1 Brgy.Pulido GMA Cavite', '09095108960', 'myself'),
(22, 1, '17:44:18', 'Bon Jolly', 'Adorna', 'Male', 23, 'carmona cavite', '09393364793', 'bon'),
(23, 1, '17:52:57', 'Eurica', 'Torres', 'Female', 16, 'b2 l32 brgy. lumbreras', '1', 'Lyssa'),
(24, 1, '17:59:47', 'Mc. Harvey', 'Penuliar', 'Male', 21, '14242 Bancal C. C', '09269476333', 'Marcel'),
(25, 1, '18:09:25', 'kirt  john', 'zuniga', 'Male', 24, 'brgy pulido b-28 l-8 gma', '09197040921', 'vj nog nog'),
(26, 1, '18:21:24', 'macrobhen', 'gumiit', 'Male', 16, 'b7 L18 brngy san gabriel gma cavite', '09073597215', 'me'),
(27, 1, '18:28:06', 'Judy ann', 'Villa', 'Female', 18, 'B 14 L 15 Teachers Village GMA Cavite', '09280496982', 'Marianne'),
(28, 1, '18:29:09', 'Marianne', 'Montes', 'Female', 16, 'B 12 L 24 Teachers Village GMA Cavite', '09753771519', 'me'),
(29, 1, '18:37:03', 'jahzrel', 'olip', 'Male', 17, 'B18LT82BRGY, DELAS-ALAS', '8', 'me'),
(30, 1, '18:39:15', 'joshua', 'k', 'Male', 17, 'GMA cavite', '1', 'jazhrel'),
(31, 1, '18:39:44', 'trisha', 'muyot', 'Female', 21, 'san pedro, laguna', '09169832393', 'ate reg'),
(32, 1, '18:40:27', 'Marvin', 'Legaspi', 'Male', 20, 'san pedro, laguna', '09057533321', 'Marcel'),
(33, 1, '18:50:25', 'Rodan', 'dejecacion', 'Male', 12, 'B9 L6 Brgy KUA', '09184423764', 'Jayson'),
(34, 1, '18:51:05', 'Melvin Paul', 'Sus', 'Male', 13, 'B9 L3 Brgy KUA', '09232202136', 'Jayson'),
(35, 1, '18:51:27', 'Benjie', 'Serna', 'Male', 14, 'B9 L6 Brgy KUA', '---', 'Jayson'),
(36, 1, '18:56:51', 'Arnulfo', 'Verano', 'Male', 22, 'Blk 16 Lot 14 AFP Housing Zone 1 Bulihan Silang Cavite', '09126358956', 'Denis'),
(37, 1, '18:58:17', 'Vincent Gabriel', 'Banayo', 'Male', 17, 'blk 4 lot 5 AFP Housing Zone 1 Bulihan Silang Cavite', '09467370932', 'Denis'),
(38, 1, '18:59:33', 'Jerald', 'Malong', 'Male', 20, 'Blk11 lot 8 ireland drive Franceville Homes ,Bulihan,Silang,Cavite', '09502127545', 'Denis'),
(39, 1, '19:03:52', 'Ulysses', 'Torres', 'Female', 20, 'b2 l32 brgy. lumbreras', '09151860223', 'Me'),
(40, 3, '17:06:20', 'Alliah', 'Abelida', 'Female', 18, 'B52 L2 P2 Paliparan 3, DasmariÃ±as, Cavite', '09369758367', 'Vjay'),
(42, 3, '17:10:18', 'MARYANNE', 'NEAR', 'Female', 15, 'BRGY POB2 GMA CAVITE', '-', 'JAYSON'),
(43, 3, '17:11:24', 'GERRICOARIEL', 'GUZMAN', 'Male', 17, 'BRGY.PULIDO', '09124473929', 'MARY ANNE'),
(44, 3, '17:11:34', 'Rocelle', 'Bacayo', 'Female', 15, 'Brgy kua g.m.a cavite blk 9lot6', '09466415387', 'Ate joanna'),
(45, 3, '17:11:52', 'Jayceelyn', 'Fernandez', 'Female', 14, 'Area I Pob. 4 GMA Cavite', '.', 'Mary Anne'),
(46, 3, '17:12:26', 'Rizza', 'Dela PeÃ±a', 'Female', 19, 'Blk 1 lot 40 brgy granados Gma cavite', '09480459966', 'Myself'),
(47, 3, '17:13:04', 'ULYSSES', 'TORRES', 'Female', 21, 'B2 L32 BRGY. LUMBRERAS GMA, CAVITE', '09770945208', 'LYSSA'),
(48, 3, '17:14:22', 'Gabriel', 'Modar', 'Male', 14, 'Blk 16 Lot 8 Brgy. Pulido', '09213277777', 'Camille'),
(49, 3, '17:14:34', 'Marbhenee', 'Gumiit', 'Male', 18, 'Blk 4 lot 7 Alta tierra homes, gma cavite', '09073597215', 'Me, myself and i'),
(50, 3, '17:15:47', 'Katrina ', 'Ruiz', 'Female', 18, 'Blk 37 lot 5 Brgy. Poblacion 3 GMA,  Cavite', '09092829551', 'Me Myself and I '),
(51, 3, '17:16:04', 'Victoria ', 'Llanes', 'Female', 12, '106 congsional rd brgy. memijeh', '09429613457', 'KUYA Jayson'),
(52, 3, '17:16:07', 'Camille', 'Modar', 'Female', 20, 'Blk 16 Lot 8 Brngy. Pulido GMA Cavite', '09499574341', 'Camie'),
(53, 3, '17:17:16', 'roseanne', 'bacayo', 'Female', 14, 'brgyk kua GMAcavite', '09393443760', 'kuya jayson'),
(54, 3, '17:17:41', 'vj', 'tolentino', 'Male', 19, '1486 Bancal Carmona Cavite', '09466516705', 'VJ Pogi'),
(55, 3, '17:17:42', 'Vanessa', 'Reduta', 'Female', 11, 'Brgy pulido', '09499574341', 'Jayson'),
(56, 3, '17:18:13', 'rocelle', 'bacayo', 'Female', 15, 'brgyk kua GMAcavite', '09393443760', 'kuya jayson'),
(57, 3, '17:18:55', 'rose marie', 'bacayo', 'Female', 13, 'brgyk kua GMAcavite', '09393443760', 'kuya jayson'),
(58, 3, '17:19:39', 'Macrobhen', 'Gumiit', 'Male', 16, 'Blk 4 lot 7 Alta tierra homes, gma cavite', '09073597215', 'Kuya mabs pogiiiii'),
(59, 3, '17:20:09', 'allan', 'bacayo', 'Male', 12, 'brgyk kua GMAcavite', '09393443760', 'kuya jayson'),
(60, 3, '17:25:40', 'Kirby', 'Ranchez', 'Male', 17, 'B11 L34 Brgy. Pob 4', '09500852544', 'the Holy Spirit'),
(61, 3, '17:26:46', 'matthew', 'naingue', 'Male', 25, 'area d malia', '09498593868', 'soul'),
(62, 3, '17:27:31', 'Jessa', 'Valdez', 'Female', 20, 'Carmona, Cavite', '09352579238', 'Marcel'),
(63, 3, '17:29:16', 'Bheanne', 'Gibaga', 'Female', 23, 'Block 49 Lot 3 Brgy. Acacia Silang Cavite', '09168809840', 'Regine and Aron '),
(64, 3, '17:30:34', 'Marianne', 'Montes', 'Female', 16, 'B12 L24 Karunungan Village Academy GMA, Cavite', '09753771519', '-'),
(65, 3, '17:30:35', 'Richard del', 'Altre', 'Male', 19, 'Brgy.Pulido G.M.A Cavite', '09095108960', 'None'),
(66, 3, '17:31:46', 'Justin Brian', 'Denauto', 'Male', 17, 'Blk 8 Lot 71 Brgy.Pob 5 ', '09151111558', 'None'),
(67, 3, '17:33:10', 'Chrislyn', 'Claridad', 'Female', 16, 'B4 L49 Mangga St. Brgy. Poblacion 2 GMA Cavite', '09126986841', 'myself <3'),
(68, 3, '17:33:26', 'Fave Xcyl ', 'Gardose', 'Male', 18, 'Phase 2 Block 15 Lot 63', '09503928950', 'Chrislyn '),
(69, 3, '17:34:00', 'Marc Oriel', 'Reduta', 'Male', 10, 'Blk 16 Lot 8 Brngy. Pulido GMA Cavite', '09213277777', 'Jayson'),
(70, 3, '17:35:57', 'Eurica', 'Torres', 'Female', 16, 'B2 L32 BRGY. LUMBRERAS GMA, CAVITE', '-', 'Ulysses'),
(71, 3, '17:38:34', 'cejay', 'advincula', 'Female', 19, 'core house st. bancal carmona cavite', '09094754254', 'marcel/rigine'),
(72, 3, '17:39:24', 'Mc. Harvey', 'Penuliar', 'Male', 20, 'Bancal Carmona, Cavite', '09269476333', 'marcel/rigine'),
(73, 3, '17:43:21', 'Trisha', 'Muyot', 'Female', 21, 'San Pedro, Laguna', '09169832393', 'Ate Reg'),
(74, 3, '17:49:30', 'nix', 'dela torre', 'Female', 23, 'phase 2 blck 15 lot 3 fvr gma cavite', '09069792834', 'eds'),
(75, 3, '17:50:56', 'Jeffrey', 'Punzalan', 'Male', 24, 'Blk 13 Lot 66 Poblacion 4, G.M.A., Cavite', '09185290419', 'Jeff'),
(76, 3, '17:56:19', 'jZ', 'Olip', 'Male', 18, 'B18 lt 82 Brgy Delas-alas G.M.A cavite ', '09 :))', 'jahzrel'),
(77, 3, '18:15:21', 'Jerald', 'Malong', 'Male', 20, 'Blk11 lot8 Ireland Drive Franceville Subdv. Bulihan ,Silang,Cavite', '09502127545', 'kuya deniz'),
(78, 3, '18:19:27', 'Marvin', 'Legaspi', 'Male', 20, 'San Pedro, Laguna', '09350374908', 'Marcel'),
(79, 3, '18:25:41', 'trixie marie ', 'anareta', 'Female', 18, 'carmona, cavite', '09199094288', 'bon'),
(80, 3, '18:27:50', 'kirt john ', 'zuniga', 'Male', 24, 'brgy pulido b 28 l 8 gma cavite', '09197040921', 'vj nog nog'),
(81, 3, '18:29:08', 'junnel', 'bas', 'Male', 21, 'sunshine homes', '-', 'vj nog nog'),
(82, 3, '18:30:09', 'jona marie', 'bugayong', 'Female', 22, 'b4 l20 brgy tirona GMA Cavite', '09505136867', '-'),
(83, 3, '18:32:12', 'Jhomer', 'Tapalla', 'Male', 22, 'B 7 L 32 brgy. pob. 5 GMA Cavite', '09460991262', '-'),
(84, 3, '18:34:39', 'shena', 'ocampo', 'Female', 21, 'maduya, carmona, cavite', '09066661784', 'Marcel'),
(85, 3, '18:37:29', 'regine', 'balea', 'Female', 23, 'Bancal Carmona, Cavite', '09171338502', 'me');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `guest_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
