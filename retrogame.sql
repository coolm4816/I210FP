-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8080
-- Generation Time: Jun 23, 2021 at 05:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retrogame`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title_name` varchar(120) NOT NULL,
  `description` text DEFAULT NULL,
  `release_date` date NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(120) NOT NULL,
  `platform_id` tinyint(4) NOT NULL,
  `publisher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title_name`, `description`, `release_date`, `price`, `image`, `platform_id`, `publisher`) VALUES
(1, 'Gameboy', 'The Game Boy is an 8-bit handheld game console developed and manufactured by Nintendo', '1989-05-21', '55.99', 'https://upload.wikimedia.org/wikipedia/commons/c/c6/Nintendo_Gameboy.jpg', 1, 'Nintendo'),
(2, 'Nintendo 64', 'he Nintendo 64 (abbreviated as N64, stylized as NINTENDO64) is a home video game console developed and marketed by Nintendo.', '1997-03-01', '75.99', 'https://upload.wikimedia.org/wikipedia/commons/1/11/N64-Console-Set.jpg', 1, 'Nintendo'),
(3, 'NES(Nintendo Entertainment System)', 'The Nintendo Entertainment System (NES) is an 8-bit third-generation home video game console produced by Nintendo.', '1982-07-15', '69.99', 'https://upload.wikimedia.org/wikipedia/commons/8/82/NES-Console-Set.jpg', 1, 'Nintendo'),
(4, 'Vintage Star Wars Action Figure-Wicket', 'Wicket was the brave young Ewok who willingly joined the Rebellion and aided in the battle against the Empire on the forest moon of Endor.', '1984-04-21', '25.99', 'https://images-na.ssl-images-amazon.com/images/I/61n%2BUNtT%2B5S._AC_SL1000_.jpg', 4, 'StarWars'),
(5, 'Pokemon Yellow Version', 'Pokémon Yellow Version: Special Pikachu Edition, more commonly known as Pokémon Yellow Version, is a 1998 role-playing video game developed by Game Freak and published by Nintendo for the Game Boy.', '1998-02-23', '45.99', 'https://upload.wikimedia.org/wikipedia/en/4/4a/Pokemon_Yellow.png', 2, 'Nintendo'),
(6, 'Atari 2600', 'The Atari 2600 is a home video game console developed and produced by Atari, Inc. ', '1972-09-11', '69.99', 'https://en.wikipedia.org/wiki/Atari#/media/File:Atari-2600-Console.jpg', 1, 'Atari Inc.'),
(7, 'Super Mario 64', 'Super Mario 64 is a platform game for the Nintendo 64 and the first Super Mario game to feature 3D gameplay.', '1996-06-23', '25.99', 'https://upload.wikimedia.org/wikipedia/en/6/6a/Super_Mario_64_box_cover.jpg', 2, 'Nintendo'),
(8, 'Mario Kart 64', 'Mario Kart 64 is a kart racing video game developed and published by Nintendo for the Nintendo 64.', '1996-12-14', '29.99', 'https://upload.wikimedia.org/wikipedia/en/7/7e/Mario_Kart_64box.png', 2, 'Nintendo'),
(9, 'Golden Eye 007', 'GoldenEye 007 is a first-person shooter developed by Rare and published by Nintendo for the Nintendo 64.', '1997-08-25', '29.99', 'https://upload.wikimedia.org/wikipedia/en/3/36/GoldenEye007box.jpg', 2, 'Nintendo'),
(10, 'The Legend of Zelda: Ocarina of Time', 'The Legend of Zelda: Ocarina of Time is an action-adventure game developed and published by Nintendo for the Nintendo 64.', '1998-11-21', '31.99', 'https://upload.wikimedia.org/wikipedia/en/8/8e/The_Legend_of_Zelda_Ocarina_of_Time_box_art.png', 2, 'Nintendo'),
(11, 'Dreamcast', 'The Dreamcast is a home video game console released by Sega', '1998-11-27', '65.99', 'https://upload.wikimedia.org/wikipedia/commons/8/81/Dreamcast-Console-Set.jpg', 1, 'Sega'),
(12, 'Mortal Kombat', 'Mortal Kombat is an arcade fighting game developed and published by Midway.', '1992-10-08', '29.99', 'https://upload.wikimedia.org/wikipedia/en/3/33/Mortal_Kombat_cover.JPG', 2, 'Midway'),
(13, 'Monopoly', 'Monopoly is a board game currently published by Hasbro. In the game, players roll two six-sided dice to move around the game board, buying and trading properties, and developing them with houses and hotels.', '1935-12-31', '25.99', 'https://upload.wikimedia.org/wikipedia/en/f/f9/Monopoly_pack_logo.png', 3, 'Hasbro'),
(14, 'Dungeons & Dragons (1974)', 'The original Dungeons & Dragons (commonly abbreviated D&D) boxed set by Gary Gygax and Dave Arneson was published by TSR, Inc.', '1974-06-14', '41.99', 'https://upload.wikimedia.org/wikipedia/en/8/8e/D%26d_Box1st.jpg', 3, 'TSR Inc.'),
(15, '1995 Legends of Batman', 'Vintage 1995 legends of batman twin pack Egyptian batman and Egyptian Catwoman box has some wear as does the plastic but package is unopened and in decent condition', '1995-02-13', '25.99', 'blob:null/38fab57d-574f-467c-9419-af8686fdc586', 4, 'Kenner'),
(16, 'Retro Spider-Man 8in Figure', 'Very first classic action figure of Spider-Man released shortly after the debut of the hit cartoon series.', '1970-03-10', '25.99', 'http://marveltoynews.com/wp-content/uploads/2014/04/Vintage-MEGO-Spider-Man-Figure-Carded-e1398126085335.jpg', 4, 'Marvel'),
(17, 'Darth Vader Action Figure', 'Authentic vintage Darth Vader 8in action figure first released in 1978 following the movies.', '1978-05-21', '29.99', 'https://jedibusiness.com/images/actionFigures/Vintage/Vintage-Darth-Vader_Big_2.jpg', 4, 'Kenner'),
(18, 'Sonic The Hedgehog', 'Sonic the Hedgehog is a platform game developed by Sonic Team and published by Sega for the Sega Genesis home video game console. The first game in the Sonic the Hedgehog franchise.', '1991-06-23', '29.99', 'https://upload.wikimedia.org/wikipedia/en/b/ba/Sonic_the_Hedgehog_1_Genesis_box_art.jpg', 2, 'Sega'),
(19, 'Ms. Pac-Man', 'Ms. Pac-Man is a maze arcade game developed by General Computer Corporation and published by Midway. It is the first sequel to Pac-Man (1980), and the first entry in the series to not be made by Namco.', '1982-01-13', '29.99', 'https://upload.wikimedia.org/wikipedia/en/4/42/Ms._Pac-Man_flyer.png', 2, 'Midway'),
(20, 'PlayStation ', 'The PlayStation (abbreviated as PS, commonly known as the PS1 or its codename PSX) is a home video game console developed and marketed by Sony Computer Entertainment', '1994-12-03', '65.99', 'https://upload.wikimedia.org/wikipedia/commons/6/63/PSone-Console-Set-NoLCD.jpg', 1, 'Sony'),
(21, 'Yahtzee', 'Yahtzee is a dice game made by Milton Bradley (a company that has since been acquired and assimilated by Hasbro), which was first marketed as Yatzie by the National Association Service of Toledo, Ohio, in the early 1940s.', '1940-12-31', '21.99', 'https://upload.wikimedia.org/wikipedia/en/0/0f/Yahtzee_1956.JPG', 3, 'Hasbro'),
(22, 'Pokémon Silver Version', 'Pokémon Silver Version are role-playing video games developed by Game Freak and published by Nintendo for the Game Boy Color.', '1999-11-21', '37.99', 'https://upload.wikimedia.org/wikipedia/en/4/4c/Pok%C3%A9mon_box_art_-_Gold_Version.png', 2, 'Nintendo'),
(23, 'Game Gear', 'The Game Gear is an 8-bit fourth generation handheld game console ', '1990-10-06', '44.99', 'https://upload.wikimedia.org/wikipedia/commons/c/cf/Sega-Game-Gear-WB.png', 1, 'Sega'),
(24, 'Donkey Kong 64', 'Donkey Kong 64 is a adventure platform game developed by Rare and published by Nintendo for the Nintendo 64. It is the first Donkey Kong game to feature 3D gameplay.', '1999-11-22', '29.99', 'https://upload.wikimedia.org/wikipedia/en/a/ae/DonkeyKong64CoverArt.jpg', 2, 'Nintendo'),
(25, 'Mario Party', 'Mario Party is a party video game developed by Hudson Soft and published by Nintendo for the Nintendo 64 game console.', '1998-12-18', '29.99', 'https://upload.wikimedia.org/wikipedia/en/c/cd/Marioparty1.jpg', 2, 'Nintendo');

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `platform_id` tinyint(4) NOT NULL,
  `platform` varchar(20) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`platform_id`, `platform`, `description`) VALUES
(1, 'Consoles', 'Old Retro Gaming Consoles'),
(2, 'Games', 'Old Retro Games for Consoles'),
(3, 'Board Games', 'Old Retro Board Games'),
(4, 'Action Figures', 'Old Retro Action Figures');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fistname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fistname`, `lastname`, `username`, `password`, `role`) VALUES
(1, 'Charles ', 'DeGraff', 'cdegraff98', 'I210', 1),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `platform_id` (`platform_id`) USING BTREE;

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`platform_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `platform_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
