-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 30, 2025 at 08:00 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpg_character_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `IMG` text NOT NULL,
  `Race` text NOT NULL,
  `Culture_Background` text NOT NULL,
  `Profession_Class` text NOT NULL,
  `Subclass` text NOT NULL,
  `Place_of_birth` text NOT NULL,
  `System` text NOT NULL,
  `P1` text NOT NULL,
  `P2` text NOT NULL,
  `P3` text NOT NULL,
  `P4` text NOT NULL,
  `P5` text NOT NULL,
  `P6` text NOT NULL,
  `P7` text NOT NULL,
  `P8` text NOT NULL,
  `P9` text NOT NULL,
  `P10` text NOT NULL,
  `P11` text NOT NULL,
  `P12` text NOT NULL,
  `P13` text NOT NULL,
  `P14` text NOT NULL,
  `P15` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`ID`, `Name`, `IMG`, `Race`, `Culture_Background`, `Profession_Class`, `Subclass`, `Place_of_birth`, `System`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `P10`, `P11`, `P12`, `P13`, `P14`, `P15`) VALUES
(1, 'Brandr Svensson', 'https://res.cloudinary.com/diobhpzon/image/upload/v1708709898/characterIMG/Brandr_updated_design_ii2d8k.png', 'Race: Half Elf', 'Culture: Thorwaler', 'Profession: Mercenary', '', 'Place of Birth: Waskir', 'The dark eye', 'Brandr Svenson is a half elf from Waskir. At an early age he lost his parents to monsters and was left orphaned. Because of his heritage and his eyes being an unnatural cat like shape. As a result, he spent a lot of his early life stealing food to survive the only memento of his parents that he had left was his wolf head necklace given to him by his mother as a child.', 'His life however changed one day when he stole form a man named Waldbert Hanetraub a mercenary from Andergast and the leader of the mercenary group named Serpent Riders.', 'Being impressed with the boy\'s aggression and untapped potential as a warrior Walbert decided to take him in and raise him to be a warrior and to one day succeed him.', 'Brandr then spent many years together with the Serpent riders and growing to look at them like brothers and sisters to him, the only one who he viewed differently was Waldbert who he viewed as a form of father figure.', 'This went on for several years and during that time Brandr change from a young boy to an adult, and he became more and more involved in the Serpent riders\' mercenary activities resulting in him traveling the world with them. During this time, he improved as a warrior under Waldberts tutelage he became adept at using a spear. It was also during his time with the serpent riders where he developed a romantic relationship with another young member a half elf archer named Gethlire Keller.', 'But not all good things are meant to last, during a job they were betrayed by one of the other members of the Serpent riders an Andergast named Andgor Brandtraub and Waldberts second in command. Felling that he was not getting enough out of just being the second in command of the serpent riders.', 'During the job he had gotten into contact with the people that the serpent riders were sent to take out and sold them the location of the serpent riders\' camp.', 'Being attacked in the middle of the night the serpent riders were not prepared and many of them were killed including Waldbert who was killed by Andgor, by morning there was only a few surviving members left of the serpent riders among them Brandr and Gethlire who sadly was seriously injured to the point where she would never be able to fight on the frontlines again.', 'After this the serpent riders disbanded, and the survivors went their separate ways and some of theme starting new lives like Gethlire who with the money she had opened an orphanage. While she doesn\'t go out on longer jobs, she still does small jobs in the village as well as the surrounding villages to sustain the orphanage, since her arm was injured, she can\'t use her bow anymore she now makes use of a repeater crossbow.', 'The only exception to this was Brandr who having beard witness to seeing his father figure murdered before his eyes became consumed by anger and hatred swearing to find Andgor and kill him as well as trying to find his meteors weapon the crimson lance “blood skewer” as the weapon had been lost during the attack on there camp. To do this he took up his mentors\' armor and his title becoming the next crimson reaper.', 'However, his quest for vengeance have put a toll on his mental state with him becoming more aggressive and easier to anger as well as blurring his morals. To cope with this, he started smoking and drinking to sometimes try to forget all his pain and anger but sadly the only time he truly can forget is during the midst of battle knee deep in the blood of his enemies.', 'With no end in sight when will his cycle of self-destruction end no one knows but all we know is that we know have reach the events of our story.', '', '', ''),
(2, 'Gethlire Keller', 'https://res.cloudinary.com/diobhpzon/image/upload/v1710242553/characterIMG/the_dark_eye_side_character_design_2_erhw1v.png', 'Race: Half Elf', 'Culture: Garetian', 'Former profession: Mercenary', '', 'Place of Birth: info pending', 'The dark eye', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `character_imgs`
--

CREATE TABLE `character_imgs` (
  `ID` int(11) NOT NULL,
  `Characters` json NOT NULL,
  `IMG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `character_imgs`
--

INSERT INTO `character_imgs` (`ID`, `Characters`, `IMG`) VALUES
(1, '[\"Brandr Svensson\"]', 'https://res.cloudinary.com/diobhpzon/image/upload/v1708709898/characterIMG/Brandr_updated_design_ii2d8k.png');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`ID`, `name`, `link`) VALUES
(0, 'Soulbrand wielder - The Homebrewery v.3.pdf', 'https://res.cloudinary.com/diobhpzon/image/upload/v1716883272/RPGFiles/Soulbrand_wielder_-_The_Homebrewery_v.3_sv5z3h.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

CREATE TABLE `systems` (
  `ID` int(11) NOT NULL,
  `System_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `systems`
--

INSERT INTO `systems` (`ID`, `System_name`) VALUES
(1, 'The dark eye'),
(2, 'Dungeons and dragons'),
(3, 'Pathfinder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `characterName` (`Name`(768)),
  ADD KEY `characterSystem` (`System`(768)) USING BTREE;

--
-- Indexes for table `character_imgs`
--
ALTER TABLE `character_imgs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `downloadName` (`name`(768));

--
-- Indexes for table `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `character_imgs`
--
ALTER TABLE `character_imgs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `systems`
--
ALTER TABLE `systems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
