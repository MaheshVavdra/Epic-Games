-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 08:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epic_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `epicnames`
--

CREATE TABLE `epicnames` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(32) NOT NULL,
  `copiessold` int(32) NOT NULL DEFAULT 0,
  `category` varchar(32) NOT NULL,
  `category1` varchar(32) NOT NULL,
  `price` int(32) NOT NULL,
  `onsale` int(32) NOT NULL DEFAULT 0,
  `dashboardimage` varchar(255) NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `productimage2` varchar(255) NOT NULL,
  `productimage3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `epicnames`
--

INSERT INTO `epicnames` (`id`, `name`, `description`, `quantity`, `copiessold`, `category`, `category1`, `price`, `onsale`, `dashboardimage`, `productimage`, `productimage2`, `productimage3`) VALUES
(1, 'Valorant', 'Valorant (stylized as VALORANT) is a free-to-play first-person hero shooter developed and published by Riot Games, for Microsoft Windows.', 50, 0, 'Action', 'fps', 1599, 0, '\\hd_images\\valorant\\VALORANT.jpg', '\\hd_images\\valorant\\valorant1.jpg', '‪\\hd_images\\valorant\\valorant2.jpg', '\\hd_images\\valorant\\valorant3.jpg'),
(2, 'Gta V', 'Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective. Players complete missions—linear scenarios with set objectives—to progress through the story.', 100, 0, 'Action', 'Adventure', 2599, 0, '\\hd_images\\GTA5\\GTA5.jpg', '\\hd_images\\GTA5\\GTA5_1.jpg', '\\hd_images\\GTA5\\GTA5_2.jpg', '\\hd_images\\GTA5\\GTA5_3.jpg'),
(3, 'GTA SA', 'Grand Theft Auto: San Andreas is a 2004 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the seventh title in the Grand Theft Auto series, and the follow-up to the 2002 game Grand Theft Auto: Vice City.', 150, 0, 'Action', 'Adventure', 1999, 0, '\\hd_images\\GTASA\\GTASA.jpg', '\\hd_images\\GTASA\\GTASA1.jpg', '‪\\hd_images\\GTASA\\GTASA2.jpg', '‪\\hd_images\\GTASA\\GTASA3.jpg'),
(4, 'ANTHEM', 'Anthem is an online multiplayer action role-playing video game developed by BioWare and published by Electronic Arts. The game was released worldwide for Microsoft Windows', 180, 0, 'Action', 'fps', 1499, 0, '\\hd_images\\ANTHEM\\Anthem.jpg', '\\hd_images\\ANTHEM\\anthem1.jpg', '‪\\hd_images\\ANTHEM\\anthem2.jpg', '‪\\hd_images\\ANTHEM\\anthem3.jpg'),
(5, 'Forza Horizon 5', 'Forza Horizon focuses specifically on casual street racing, rather than professionally on race tracks, as it takes place on a map of temporarily closed public roads. It features multiple types of races, from drift to rally and point-to-point races', 160, 0, 'Racing', 'Adventure', 999, 0, '\\hd_images\\forzaHorizon4\\Forza.jpg', '‪\\hd_images\\forzaHorizon4\\forza1.jpg', '\\‪hd_images\\forzaHorizon4\\forza2.jpg', '\\‪hd_images\\forzaHorizon4\\forza3.jpg'),
(6, 'Far Cry 5', 'Far Cry 5 is a 2018 first-person shooter game developed by Ubisoft Montreal and Ubisoft Toronto and published by Ubisoft. It is the fifth main installment in the Far Cry series.', 90, 0, 'Action', 'Adventure', 1899, 0, '\\hd_images\\Farcry5\\fc.jpg', '‪\\hd_images\\Farcry5\\fc1.jpg', '‪\\hd_images\\Farcry5\\fc2.jpg', '‪\\hd_images\\Farcry5\\fc3.jpg'),
(7, 'Fortnite', 'Fortnite is a Free-to-Play Battle Royale game and so much more. Hang out peacefully with friends while watching a concert or movie. Build and create your own island, or fight to be the last person standing.', 50, 0, 'Action', 'fps', 1999, 0, '\\hd_images\\fortnite\\fortnite.jpg', '\\hd_images\\fortnite\\fortnite1.jpg', '\\hd_images\\fortnite\\fortnite2.jpg', '\\hd_images\\fortnite\\fortnite3.jpg'),
(8, 'Genshin Impact', 'Genshin Impact is an open-world action role-playing game that allows the player to control one of four interchangeable characters in a party. Switching between characters can be done quickly during combat, allowing the player to use several different comb', 120, 0, 'Action', 'Adventure', 1299, 0, '\\hd_images\\GenshinImpact\\GI.jpg', '\\hd_images\\GenshinImpact\\GI1.jpg', '\\hd_images\\GenshinImpact\\GI2.jpg', '\\hd_images\\GenshinImpact\\GI3.jpg'),
(9, 'PUBG', 'An online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole.', 199, 0, 'Action', 'Adventure', 2999, 0, '\\hd_images\\PUBG\\pubg.jpg', '\\hd_images\\PUBG\\pubg1.jpg', '\\hd_images\\PUBG\\pubg2.jpg', '\\hd_images\\PUBG\\pubg3.jpg'),
(10, 'COD WW2', 'Call of Duty® returns to its historical roots with Call of Duty®: World War II, a blockbuster experience from Sledgehammer Games. From the beaches of Normandy to the Hürtgen Forest, experience a dramatic story highlighting some of the most dramatic and ic', 100, 0, 'Action', 'fps', 1199, 0, '\\hd_images\\codww2\\codww2.jpg', '\\hd_images\\codww2\\codww2_1.jpg', '\\hd_images\\codww2\\codww2_2.jpg', '\\hd_images\\codww2\\codww2_3.jpg'),
(11, 'COD BlackOps', 'Call of Duty®: Black Ops is an entertainment experience that will take you to conflicts across the globe, as elite Black Ops forces fight in the deniable operations and secret wars that occurred under the veil of the Cold War.', 125, 0, 'Action', 'fps', 1399, 0, '\\hd_images\\codBo\\codbo.jpg', '\\hd_images\\codBo\\codbo1.jpg', '\\hd_images\\codBo\\codbo2.jpg', '\\hd_images\\codBo\\codbo3.jpg'),
(12, 'Watch Dogs', 'Watch Dogs (stylized as WATCH_DOGS) is an action-adventure video game franchise developed and published by Ubisoft. The series\' eponymous first title was released in 2014, and it has featured three games in total, the most recent being 2020\'s Watch Dogs', 150, 0, 'sci-fi', 'strategy', 1899, 0, '\\hd_images\\watchdogs\\wd.jpg', '\\hd_images\\watchdogs\\wd1.jpg', '\\hd_images\\watchdogs\\wd2.jpg', '\\hd_images\\watchdogs\\wd3.jpg'),
(13, 'God Of War', 'God of War (also known as God of War IV) is the sequel to God of War III as well as a continuation of the canon God of War chronology. God of War is the eighth installment in the franchise overall.', 120, 0, 'Action', 'Adventure', 1399, 0, '\\hd_images\\gow\\gow.jpg', '\\hd_images\\gow\\gow1.jpg', '\\hd_images\\gow\\gow2.jpg', '\\hd_images\\gow\\gow3.jpg'),
(14, 'Assasin Creed valhala', 'Assassin\'s Creed Valhalla is a 2020 action role-playing video game developed by Ubisoft Montreal and published by Ubisoft. It is the twelfth major installment in the Assassin\'s Creed series, and the successor to 2018\'s Assassin\'s Creed Odyssey. Principall', 150, 0, 'Action', 'Adventure', 2999, 0, '\\hd_images\\assasinCreed\\ac.jpg', '\\hd_images\\assasinCreed\\ac1.jpg', '\\hd_images\\assasinCreed\\ac2.jpg', '\\hd_images\\assasinCreed\\ac3.jpg'),
(15, 'Apex Legends', 'An online multiplayer battle royale game featuring squads of three players using pre-made characters (called Legends), similar to those of hero shooters.\r\n\r\n', 122, 0, 'Action', 'Battle-Royale', 1599, 0, '\\hd_images\\apexLegends\\apex.jpg', '\\hd_images\\apexLegends\\apex1.jpg', '\\hd_images\\apexLegends\\apex2.jpg', '\\hd_images\\apexLegends\\apex3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `email`, `username`, `password`) VALUES
(1, 'mahesh@gmail.com', 'Mahesh', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `epicnames`
--
ALTER TABLE `epicnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
