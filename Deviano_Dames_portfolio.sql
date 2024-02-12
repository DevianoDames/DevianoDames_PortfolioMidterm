-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 10, 2024 at 12:02 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Deviano_Dames_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `full_name` int(255) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `project_id`, `image_filename`) VALUES
(0, 0, 'sportnet-info1.png'),
(2, 2, 'smoking_ad2_570.png'),
(4, 4, 'reebokad_1.jpg'),
(5, 4, 'reebokad_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

CREATE TABLE `portfolio_items` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `overview` text NOT NULL,
  `problems` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_items`
--

INSERT INTO `portfolio_items` (`id`, `title`, `description`, `image_url`, `overview`, `problems`) VALUES
(0, 'SportNet', '', 'sportnet-info1.png', 'At the beginning of the semester, I was presented with the exciting challenge of crafting a state-of-the-art stadium design, conceptualizing a captivating team logo, and infusing it all with energy through a dynamic video introduction tailored for a prominent sports network. This project not only tested my creativity and technical skills but also allowed me to explore innovative ways of showcasing the spirit and essence of the sporting experience.', 'As we delved into the creative process, one of the primary challenges we encountered was conceptualizing designs that would genuinely captivate and engage viewers. We understood the importance of creating visuals that not only conveyed the seriousness of the issue but also stood out amidst the noise of today\'s media landscape.To tackle this obstacle, our team organized regular meetings to brainstorm ideas and collectively conceptualize designs that would effectively convey our message. These collaborative sessions served as invaluable platforms for exchanging creative insights, pooling our diverse perspectives, and refining our approach to the campaign.'),
(2, 'Mini Advertising', 'Smoking Ads ', 'smoking_ad2_570.png', 'For our project with Health Canada, our team was tasked with creating an impactful awareness campaign aimed at educating teenagers about the harmful effects of two prevalent substances: e-cigarettes (vaping) and marijuana. The goal was to provide comprehensive information that would empower young people to make informed decisions about their health and well-being.', 'As we delved into the creative process, one of the primary challenges we encountered was conceptualizing designs that would genuinely captivate and engage viewers. We understood the importance of creating visuals that not only conveyed the seriousness of the issue but also stood out amidst the noise of today\'s media landscape.To tackle this obstacle, our team organized regular meetings to brainstorm ideas and collectively conceptualize designs that would effectively convey our message. These collaborative sessions served as invaluable platforms for exchanging creative insights, pooling our diverse perspectives, and refining our approach to the campaign.'),
(4, 'Reebok', 'This is my reebok project', 'reebokad_1.jpg', 'For our project with Health Canada, our team was tasked with creating an impactful awareness campaign aimed at educating teenagers about the harmful effects of two prevalent substances: e-cigarettes (vaping) and marijuana. The goal was to provide comprehensive information that would empower young people to make informed decisions about their health and well-being.', 'As we delved into the creative process, one of the primary challenges we encountered was conceptualizing designs that would genuinely captivate and engage viewers. We understood the importance of creating visuals that not only conveyed the seriousness of the issue but also stood out amidst the noise of today\'s media landscape.To tackle this obstacle, our team organized regular meetings to brainstorm ideas and collectively conceptualize designs that would effectively convey our message. These collaborative sessions served as invaluable platforms for exchanging creative insights, pooling our diverse perspectives, and refining our approach to the campaign.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items_old`
--

CREATE TABLE `portfolio_items_old` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_items_old`
--

INSERT INTO `portfolio_items_old` (`id`, `title`, `description`, `image_url`) VALUES
(1, 'Sportsnet', 'At the beginning of the semester, I was presented with the exciting challenge of crafting a state-of-the-art stadium design, conceptualizing a captivating team logo, and infusing it all with energy through a dynamic video introduction tailored for a prominent sports network. This project not only tested my creativity and technical skills but also allowed me to explore innovative ways of showcasing the spirit and essence of the sporting experience', 'sportnet-info1_lz1axx_c_scale,w_570.png'),
(2, 'Mini Advertising', 'For our project with Health Canada, our team was tasked with creating an impactful awareness campaign aimed at educating teenagers about the harmful effects of two prevalent substances: e-cigarettes (vaping) and marijuana. The goal was to provide comprehensive information that would empower young people to make informed decisions about their health and well-being.', 'smoking_ad_1_urg31e_c_scale,w_570.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description text` text NOT NULL,
  `icon_class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_items_old`
--
ALTER TABLE `portfolio_items_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio_items_old`
--
ALTER TABLE `portfolio_items_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
