-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 02:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neru_comms`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `list_style` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `img`, `list_style`) VALUES
(73, '407.jpg', 'Chibi'),
(74, '557.jpg', 'Chibi'),
(80, '420.png', 'Original ArtStyle'),
(81, '871.png', 'Digital WaterColor'),
(82, '673.png', 'Original ArtStyle'),
(83, '620.png', 'Original ArtStyle'),
(84, '430.png', 'Original ArtStyle'),
(85, '610.png', 'Original ArtStyle'),
(86, '413.png', 'Original ArtStyle'),
(87, '264.png', 'Original ArtStyle'),
(88, '548.png', 'Original ArtStyle'),
(89, '687.png', 'Chibi'),
(90, '933.png', 'Original ArtStyle'),
(91, '554.png', 'Original ArtStyle'),
(92, '229.png', 'Original ArtStyle'),
(93, '685.png', 'Original ArtStyle'),
(94, '104.png', 'Original ArtStyle');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `client_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `due_date` varchar(255) NOT NULL,
  `art_style` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`client_id`, `email`, `name`, `due_date`, `art_style`, `details`, `description`) VALUES
(6, 'radiant.harmony@icloud.com', 'Radiant Harmony', 'March 12, 2024', 'Virtual Pop Surrealism', 'Headshot', 'Radiant Harmony delves into virtual pop surrealism, crafting headshots that challenge perception and invite viewers into a world of vivid imagination and symbolism.'),
(7, 'stellar.serenade@protonmail.com', 'Stellar Serenade', 'March 15, 2024', 'Algorithmic Generative Art', 'Half Body', 'Stellar Serenade explores algorithmic generative art in half-body compositions, generating intricate patterns and forms that captivate with their complexity and beauty.'),
(8, 'mirage.melody@mailinator.com', 'Mirage Melody', 'March 18, 2024', 'Conceptual Digital Collage', 'Full Body', 'Mirage Melody weaves conceptual digital collages in full-body compositions, inviting viewers to explore the layers of meaning and emotion within each meticulously crafted piece.'),
(9, 'twilight.crescendo@live.com', 'Twilight Crescendo', 'March 22, 2024', 'Neon Cyberwave', 'Headshot', 'Twilight Crescendo\'s neon cyberwave headshots illuminate the digital realm, capturing the essence of a futuristic aesthetic with vibrant colors and electrifying energy.'),
(10, 'aria.mirage@gmail.com', 'Aria Mirage', 'January 15, 2024', 'Cyberpunk Futurism', 'Full Body', 'Aria Mirage creates vibrant cyberpunk scenes, portraying a futuristic world with intricate details and dynamic full-body compositions.'),
(11, 'luna.rhythm@yahoo.com', 'Luna Rhythm', 'January 18, 2024', 'Abstract Pixelation', 'Headshot', 'Luna Rhythm explores abstract pixelation, crafting mesmerizing headshots that challenge traditional perceptions and evoke a sense of digital emotion.'),
(12, 'phoenix.echo@hotmail.com', 'Phoenix Echo', 'January 22, 2024', 'Surreal Digital Painting', 'Half Body', 'Phoenix Echo captivates with surreal digital paintings, offering glimpses into dreamlike realms with expressive characters and evocative half-body compositions.'),
(13, 'orion.serenade@outlook.com', 'Orion Serenade', 'January 25, 2024', 'Glitch Art', 'Full Body', 'Orion Serenade pioneers glitch art, seamlessly blending digital irregularities with full-body compositions, creating visually striking and thought-provoking masterpieces.'),
(14, 'velvet.horizon@gmail.com', 'Velvet Horizon', 'January 28, 2024', 'Minimalistic Vector Art', 'Headshot', 'Velvet Horizon embraces minimalistic vector art, skillfully crafting headshots that convey simplicity and elegance through clean lines and thoughtful design.'),
(15, 'nebula.muse@aol.com', 'Nebula Muse', 'February 2, 2024', 'Augmented Reality Art', 'Half Body', 'Nebula Muse explores the boundaries of augmented reality art, presenting captivating half-body compositions that bridge the gap between the digital and physical worlds.'),
(16, 'ember.harmony@icloud.com', 'Ember Harmony', 'February 6, 2024', 'Digital Watercolor', 'Full Body', 'Ember Harmony\'s digital watercolors enchant with vibrant hues and fluid strokes, bringing life to full-body compositions that evoke emotion and connection.'),
(17, 'celestia.melody@protonmail.com', 'Celestia Melody', 'February 9, 2024', '3D Abstract Sculpture', 'Headshot', 'Celestia Melody sculpts ethereal 3D abstract headshots, exploring the intersection of form and imagination to create visually stunning and thought-provoking portraits.'),
(18, 'solar.pulse@mailinator.com', 'Solar Pulse', 'February 12, 2024', 'Virtual Reality Experience', 'Half Body', 'Solar Pulse immerses viewers in a virtual reality experience, crafting half-body compositions that transcend the digital realm, inviting exploration and interaction.'),
(19, 'midnight.crescendo@live.com', 'Midnight Crescendo', 'February 15, 2024', 'Pop Art Illustration', 'Full Body', 'Midnight Crescendo\'s pop art illustrations burst with color and energy, delivering full-body compositions that celebrate culture and individuality with vibrant flair.'),
(20, 'solstice.harmony@gmail.com', 'Solstice Harmony', 'February 18, 2024', 'Digital Graffiti', 'Headshot', 'Solstice Harmony expresses creativity through digital graffiti headshots, fusing urban artistry with digital precision, capturing the essence of individuality and expression.'),
(21, 'nova.symphony@yahoo.com', 'Nova Symphony', 'January 22, 2024', 'Motion Graphics', 'Half Body', 'Nova Symphony orchestrates mesmerizing motion graphics, seamlessly integrating technology and art into half-body compositions that captivate and inspire.'),
(22, 'cascade.melody@hotmail.com', 'Cascade Melody', 'February 25, 2024', 'Abstract Animation', 'Full Body', 'Cascade Melody\'s abstract animations come to life in full-body compositions, offering a dynamic exploration of movement, form, and emotion through the digital canvas.'),
(23, 'seraphic.sound@outlook.com', 'Seraphic Sound', 'March 1, 2024', 'Pixel Art', 'Headshot', 'Seraphic Sound pioneers pixel art headshots, showcasing intricate details and nostalgic charm in each composition, capturing the essence of digital craftsmanship.'),
(24, 'ecliptic.echo@gmail.com', 'Ecliptic Echo', 'March 4, 2024', 'Interactive Digital Installation', 'Half Body', 'Ecliptic Echo\'s interactive digital installations transcend boundaries, offering immersive experiences through thought-provoking half-body compositions that engage and captivate.'),
(25, 'ethereal.sonata@aol.com', 'Ethereal Sonata', 'March 8, 2024', 'Holographic Projection', 'Full Body', 'Ethereal Sonata creates holographic projections in full-body compositions, merging reality and fantasy to evoke a sense of wonder and connection to the ethereal.'),
(26, 'radiant.harmony@icloud.com', 'Radiant Harmony', 'March 12, 2024', 'Virtual Pop Surrealism', 'Headshot', 'Radiant Harmony delves into virtual pop surrealism, crafting headshots that challenge perception and invite viewers into a world of vivid imagination and symbolism.'),
(27, 'stellar.serenade@protonmail.com', 'Stellar Serenade', 'March 15, 2024', 'Algorithmic Generative Art', 'Half Body', 'Stellar Serenade explores algorithmic generative art in half-body compositions, generating intricate patterns and forms that captivate with their complexity and beauty.'),
(28, 'mirage.melody@mailinator.com', 'Mirage Melody', 'March 18, 2024', 'Conceptual Digital Collage', 'Full Body', 'Mirage Melody weaves conceptual digital collages in full-body compositions, inviting viewers to explore the layers of meaning and emotion within each meticulously crafted piece.'),
(29, 'twilight.crescendo@live.com', 'Twilight Crescendo', 'March 22, 2024', 'Neon Cyberwave', 'Headshot', 'Twilight Crescendo\'s neon cyberwave headshots illuminate the digital realm, capturing the essence of a futuristic aesthetic with vibrant colors and electrifying energy.'),
(30, 'aria.mirage@gmail.com', 'Aria Mirage', 'January 15, 2024', 'Cyberpunk Futurism', 'Full Body', 'Aria Mirage creates vibrant cyberpunk scenes, portraying a futuristic world with intricate details and dynamic full-body compositions.'),
(31, 'luna.rhythm@yahoo.com', 'Luna Rhythm', 'January 18, 2024', 'Abstract Pixelation', 'Headshot', 'Luna Rhythm explores abstract pixelation, crafting mesmerizing headshots that challenge traditional perceptions and evoke a sense of digital emotion.'),
(32, 'phoenix.echo@hotmail.com', 'Phoenix Echo', 'January 22, 2024', 'Surreal Digital Painting', 'Half Body', 'Phoenix Echo captivates with surreal digital paintings, offering glimpses into dreamlike realms with expressive characters and evocative half-body compositions.'),
(33, 'orion.serenade@outlook.com', 'Orion Serenade', 'January 25, 2024', 'Glitch Art', 'Full Body', 'Orion Serenade pioneers glitch art, seamlessly blending digital irregularities with full-body compositions, creating visually striking and thought-provoking masterpieces.'),
(34, 'velvet.horizon@gmail.com', 'Velvet Horizon', 'January 28, 2024', 'Minimalistic Vector Art', 'Headshot', 'Velvet Horizon embraces minimalistic vector art, skillfully crafting headshots that convey simplicity and elegance through clean lines and thoughtful design.'),
(35, 'nebula.muse@aol.com', 'Nebula Muse', 'February 2, 2024', 'Augmented Reality Art', 'Half Body', 'Nebula Muse explores the boundaries of augmented reality art, presenting captivating half-body compositions that bridge the gap between the digital and physical worlds.'),
(36, 'ember.harmony@icloud.com', 'Ember Harmony', 'February 6, 2024', 'Digital Watercolor', 'Full Body', 'Ember Harmony\'s digital watercolors enchant with vibrant hues and fluid strokes, bringing life to full-body compositions that evoke emotion and connection.'),
(37, 'celestia.melody@protonmail.com', 'Celestia Melody', 'February 9, 2024', '3D Abstract Sculpture', 'Headshot', 'Celestia Melody sculpts ethereal 3D abstract headshots, exploring the intersection of form and imagination to create visually stunning and thought-provoking portraits.'),
(38, 'solar.pulse@mailinator.com', 'Solar Pulse', 'February 12, 2024', 'Virtual Reality Experience', 'Half Body', 'Solar Pulse immerses viewers in a virtual reality experience, crafting half-body compositions that transcend the digital realm, inviting exploration and interaction.'),
(39, 'midnight.crescendo@live.com', 'Midnight Crescendo', 'February 15, 2024', 'Pop Art Illustration', 'Full Body', 'Midnight Crescendo\'s pop art illustrations burst with color and energy, delivering full-body compositions that celebrate culture and individuality with vibrant flair.'),
(40, 'solstice.harmony@gmail.com', 'Solstice Harmony', 'February 18, 2024', 'Digital Graffiti', 'Headshot', 'Solstice Harmony expresses creativity through digital graffiti headshots, fusing urban artistry with digital precision, capturing the essence of individuality and expression.'),
(41, 'nova.symphony@yahoo.com', 'Nova Symphony', 'January 22, 2024', 'Motion Graphics', 'Half Body', 'Nova Symphony orchestrates mesmerizing motion graphics, seamlessly integrating technology and art into half-body compositions that captivate and inspire.'),
(42, 'Custumeh@gmail.com', 'Custumeh', 'Jan 22, 2024', 'Chibi', 'Mala chismosa na picture bih', ''),
(46, 'walangtulog@gmail.com', 'ey gumagana na', 'May 25, 2024', 'Digital Watercolor', 'Whole Body w/BG', 'L.A Coffee low on acid'),
(47, 'tecnoboom@gmail.com', 'Tecno Powba?', 'Mar 14, 2024', 'Digital Watercolor', 'Whole Body', 'Yellow blue'),
(48, 'Lappytop@gmail.com', 'MSI', 'Feb 19, 2024', 'Digital Watercolor', 'Half Body', 'gaming laptop'),
(50, 'aria.mirage@gmail.com', 'Aria Mirage', 'January 15, 2024', 'Cyberpunk Futurism', 'Full Body', 'Aria Mirage creates vibrant cyberpunk scenes, portraying a futuristic world with intricate details and dynamic full-body compositions.'),
(51, 'luna.rhythm@yahoo.com', 'Luna Rhythm', 'January 18, 2024', 'Abstract Pixelation', 'Headshot', 'Luna Rhythm explores abstract pixelation, crafting mesmerizing headshots that challenge traditional perceptions and evoke a sense of digital emotion.'),
(52, 'phoenix.echo@hotmail.com', 'Phoenix Echo', 'January 22, 2024', 'Surreal Digital Painting', 'Half Body', 'Phoenix Echo captivates with surreal digital paintings, offering glimpses into dreamlike realms with expressive characters and evocative half-body compositions.'),
(53, 'orion.serenade@outlook.com', 'Orion Serenade', 'January 25, 2024', 'Glitch Art', 'Full Body', 'Orion Serenade pioneers glitch art, seamlessly blending digital irregularities with full-body compositions, creating visually striking and thought-provoking masterpieces.'),
(54, 'velvet.horizon@gmail.com', 'Velvet Horizon', 'January 28, 2024', 'Minimalistic Vector Art', 'Headshot', 'Velvet Horizon embraces minimalistic vector art, skillfully crafting headshots that convey simplicity and elegance through clean lines and thoughtful design.'),
(55, 'nebula.muse@aol.com', 'Nebula Muse', 'February 2, 2024', 'Augmented Reality Art', 'Half Body', 'Nebula Muse explores the boundaries of augmented reality art, presenting captivating half-body compositions that bridge the gap between the digital and physical worlds.'),
(56, 'ember.harmony@icloud.com', 'Ember Harmony', 'February 6, 2024', 'Digital Watercolor', 'Full Body', 'Ember Harmony\'s digital watercolors enchant with vibrant hues and fluid strokes, bringing life to full-body compositions that evoke emotion and connection.'),
(57, 'celestia.melody@protonmail.com', 'Celestia Melody', 'February 9, 2024', '3D Abstract Sculpture', 'Headshot', 'Celestia Melody sculpts ethereal 3D abstract headshots, exploring the intersection of form and imagination to create visually stunning and thought-provoking portraits.'),
(58, 'solar.pulse@mailinator.com', 'Solar Pulse', 'February 12, 2024', 'Virtual Reality Experience', 'Half Body', 'Solar Pulse immerses viewers in a virtual reality experience, crafting half-body compositions that transcend the digital realm, inviting exploration and interaction.'),
(59, 'midnight.crescendo@live.com', 'Midnight Crescendo', 'February 15, 2024', 'Pop Art Illustration', 'Full Body', 'Midnight Crescendo\'s pop art illustrations burst with color and energy, delivering full-body compositions that celebrate culture and individuality with vibrant flair.');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `contact_info` varchar(255) NOT NULL,
  `due` text NOT NULL,
  `style` varchar(100) NOT NULL,
  `client_details` text NOT NULL,
  `client_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `client_name`, `contact_info`, `due`, `style`, `client_details`, `client_description`) VALUES
(0, 'Nebula Muse', 'nebula.muse@aol.com', 'February 2, 2024', 'Augmented Reality Art', 'Half Body', 'Nebula Muse explores the boundaries of augmented reality art, presenting captivating half-body compositions that bridge the gap between the digital and physical worlds.'),
(1, 'Nova Symphony', 'nova.symphony@yahoo.com', 'January 22, 2024', 'Motion Graphics', 'Half Body', 'Nova Symphony orchestrates mesmerizing motion graphics, seamlessly integrating technology and art into half-body compositions that captivate and inspire.'),
(2, 'Cascade Melody', 'cascade.melody@hotmail.com', 'February 25, 2024', 'Abstract Animation', 'Full Body', 'Cascade Melody\'s abstract animations come to life in full-body compositions, offering a dynamic exploration of movement, form, and emotion through the digital canvas.'),
(3, 'Seraphic Sound', 'seraphic.sound@outlook.com', 'March 1, 2024', 'Pixel Art', 'Headshot', 'Seraphic Sound pioneers pixel art headshots, showcasing intricate details and nostalgic charm in each composition, capturing the essence of digital craftsmanship.'),
(4, 'Ecliptic Echo', 'ecliptic.echo@gmail.com', 'March 4, 2024', 'Interactive Digital Installation', 'Half Body', 'Ecliptic Echo\'s interactive digital installations transcend boundaries, offering immersive experiences through thought-provoking half-body compositions that engage and captivate.'),
(5, 'Ethereal Sonata', 'ethereal.sonata@aol.com', 'March 8, 2024', 'Holographic Projection', 'Full Body', 'Ethereal Sonata creates holographic projections in full-body compositions, merging reality and fantasy to evoke a sense of wonder and connection to the ethereal.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(70) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(14) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`, `status`) VALUES
('banjis@gmail.com', 'Maw', '123456789', 'Hiatus'),
('neru@gmail.com', 'Neru', '123456789', 'Active'),
('urenj@gmail.com', 'urenj', 'urenji123', 'Hiatus'),
('vhanges@gmail.com', 'Vhanges', '123456789', 'Hiatus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `1` (`client_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `commission`
--
ALTER TABLE `commission`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
