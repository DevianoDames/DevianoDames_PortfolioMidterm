-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 05, 2024 at 09:12 AM
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
  `fname` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `phone_number`, `email`, `message`, `lname`) VALUES
(1, 'Test', '1234567890', 'test@example.com', 'This is a test message.', 'User'),
(2, 'd', '322342323', 'ddd@hotmail.com', 'd', 'd');

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
(0, 1, 'Stadium_570.jpg'),
(2, 2, 'smoking_ad2_570.png'),
(4, 4, 'reebokad_1.jpg'),
(5, 4, 'reebokad_4.jpg'),
(6, 1, 'sportnet-info4_570.jpg'),
(7, 1, 'Sportsnet_image6.png'),
(9, 2, 'smoking_ad3_570.png'),
(12, 12, 'Snow-globe0002_570.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

CREATE TABLE `portfolio_items` (
  `Id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `overview` text NOT NULL,
  `problems` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_items`
--

INSERT INTO `portfolio_items` (`Id`, `title`, `description`, `image_url`, `overview`, `problems`) VALUES
(1, '', '', 'Stadium_570.jpg', 'This project involved creating a detailed 3D model of a stadium for the Dallas Cowboys and Baltimore Ravens, using Cinema 4D, alongside a promotional video to capture the essence of game day. Aimed at sports fans and professionals in sports marketing and 3D modeling, the project sought to deliver an immersive and realistic portrayal of a stadium experience.', 'Achieving a high degree of realism and detail in the 3D model without compromising performance posed a technical challenge.By employing optimized modeling techniques, strategic texturing, and efficient rendering settings, we managed to create a highly detailed yet performance-efficient model. Authenticity and atmosphere were ensured through collaboration with sports enthusiasts, resulting in a promotional video that vividly brings the game day experience to life.\r\n\r\n'),
(2, '', '', 'smoking_ad2_570.png', 'For our project with Health Canada, our team was tasked with creating an impactful awareness campaign aimed at educating teenagers about the harmful effects of two prevalent substances: e-cigarettes (vaping) and marijuana. The goal was to provide comprehensive information that would empower young people to make informed decisions about their health and well-being.', 'As we delved into the creative process, one of the primary challenges we encountered was conceptualizing designs that would genuinely captivate and engage viewers. We understood the importance of creating visuals that not only conveyed the seriousness of the issue but also stood out amidst the noise of today\'s media landscape.To tackle this obstacle, our team organized regular meetings to brainstorm ideas and collectively conceptualize designs that would effectively convey our message. These collaborative sessions served as invaluable platforms for exchanging creative insights, pooling our diverse perspectives, and refining our approach to the campaign.'),
(4, '', '', 'reebokad_1.jpg', 'The Reebok ad campaign was designed to redefine the perception of EasyTone sneakers, traditionally seen as women\'s fitness apparel, and introduce them to a male audience. The goal was to break the stigma and showcase the sneakers as a unisex option that enhances workout efficiency for men. The campaign targeted active, health-conscious men, employing a multi-platform strategy including social media, print, and online advertisements.', 'Overcoming the stereotype that EasyTone sneakers are only for women was a significant hurdle.We developed compelling narratives featuring diverse men engaging in various fitness activities, supported by testimonials from male fitness enthusiasts. Through creative storytelling and highlighting the scientific benefits of EasyTone technology, we successfully shifted perceptions and sparked interest among the target demographic.'),
(12, '', '', 'Snow-globe0002_570.jpg', '', ''),
(13, '', '', 'Earbuds_570.jpg', '', '');

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`) VALUES
(2, 'yourAdminUsername', 'hashedPasswordHere'),
(3, 'ddames', '$2y$10$Q50eEtSSYBCYRsO4IK/ejux2fYvVsWaHmfq4QCvVCsyrObn.71pUm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  ADD PRIMARY KEY (`Id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
