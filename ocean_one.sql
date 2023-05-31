-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 05:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocean_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` bigint(20) NOT NULL,
  `main_heading` text NOT NULL,
  `main_subtitle` text NOT NULL,
  `align_text` text NOT NULL,
  `kickstart_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `main_heading`, `main_subtitle`, `align_text`, `kickstart_text`) VALUES
(1, 'Join the Fight Against Plastic Pollution in Our Oceans', 'Plastic waste in the ocean can break down into microplastics, which can be ingested by fish and other marine life, eventually entering the human food chain.', '66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.', 'Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going plastic neutral.'),
(2, 'Let\'s Dive Into Action With Ocean One, For A Cleaner Ocean and A Brighter Future!', 'Plastic waste in the environment poses a threat to wildlife, as animals can become entangled in it or mistake it for food, leading to injury or death.', 'Consumers today are increasingly recognizing the importance of supporting businesses that prioritize positive social and environmental impact, with 66% of individuals showing a willingness to pay more for such products and services.', 'Ocean One offers a comprehensive turnkey solution to help businesses kickstart their sustainability journey and effectively reduce their environmental footprint or achieve plastic neutrality.'),
(3, 'Saving Our Oceans: Your Actions Against Plastic Waste Matter', 'Plastic waste contributes to greenhouse gas emissions during its production and disposal, exacerbating climate change and its effects on the environment.', 'The statistics speak for themselves: 73% of Millennials and 66% of the general population are demonstrating a strong inclination to invest their resources in companies that embody social and environmental responsibility.', 'Take the first step towards sustainability success with Ocean One, your trusted partner in implementing practical measures to decrease your business\'s environmental impact or attain plastic neutrality.'),
(4, 'Let\'s Come Together to Clean Up Our Oceans', 'Plastic waste takes hundreds of years to decompose, leading to unsightly litter and contamination of soil and water sources.', 'A significant shift in consumer behavior is underway, as people understand the power of their purchasing choices and are actively seeking out companies committed to making a positive difference in society and the environment.', 'Ocean One provides businesses with an all-in-one solution, making it easy and seamless to embark on the path towards reducing their environmental footprint or becoming plastic neutral.'),
(5, 'Join The Wave of Change With Ocean One, and Help Us Keep Our Oceans Blue and Thriving', 'Plastic waste is a finite resource that can be repurposed and recycled, reducing the need for new plastic production and conserving valuable natural resources.', 'An impressive 66% of people, with a remarkable 73% among Millennials, are willing to pay a premium for products and services offered by socially and environmentally responsible companies.', 'Embrace a sustainable future with Ocean One, a complete and hassle-free solution designed to empower businesses in reducing their environmental impact or achieving plastic neutrality.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
