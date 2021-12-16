-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 09:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technofire`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `department_id`, `address`, `birthday`, `role`) VALUES
(1, 'Admin', 'admin@technofire.com', '01700000000', 'admin@technofire.com', 1, 'Dhaka', '1998-12-16 23:10:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `catagory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagory`) VALUES
(1, 'Fire Extinguisher'),
(2, 'Passive Fire Protection (PFP)'),
(3, 'Fire Hoses, Nozzles & Valves'),
(4, 'Fire Hydrants & Sprinkles'),
(5, 'Gas Suppression System'),
(6, 'Fire Detection System'),
(7, 'Fire Pumps & Controllers'),
(8, 'Fire Trucks & Vehicles'),
(9, 'Security Surveillance System'),
(10, 'Access Control System'),
(11, 'Public Address & Sound System'),
(12, 'Safety Equipments'),
(26, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `clients_name` varchar(255) NOT NULL,
  `clients_picture` varchar(255) NOT NULL,
  `clients_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clients_name`, `clients_picture`, `clients_address`) VALUES
(1, '', 'Cl_01.png', ''),
(2, '', 'Cl_02.png', ''),
(3, '', 'Cl_03.png', ''),
(4, '', 'Cl_04.png', ''),
(5, '', 'Cl_05.png', ''),
(6, '', 'Cl_06.png', ''),
(7, '', 'Cl_07.png', ''),
(9, '', 'Cl_01.png', ''),
(11, '', 'Cl_03.png', ''),
(12, '', 'Cl_04.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `picture_name` varchar(200) NOT NULL,
  `pictures` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `picture_name`, `pictures`) VALUES
(1, 'abc-5kg.jpg', 'abc-5kg.jpg'),
(2, 'access-control.jpg', 'access-control.jpg'),
(3, 'extinguisher-ball.jpg', 'extinguisher-ball.jpg'),
(4, 'gass.jpg', 'gass.jpg'),
(5, 'Landing-Valve-Flange.jpg', 'Landing-Valve-Flange.jpg'),
(6, 'product_pictureUpright-Glass-Bulb-Sprinkler-0.jpg', 'product_pictureUpright-Glass-Bulb-Sprinkler-0.jpg'),
(7, 'sri-malysia.jpg', 'sri-malysia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_picture` longtext NOT NULL,
  `price` varchar(15) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_picture`, `price`, `catagory_id`, `description`, `role`) VALUES
(1, 'Safety Equipment', 'safety-equipment.jpg', '', 12, 'Personal protective equipment (PPE) is protective clothing, helmets, goggles, or other garments or equipment designed to protect the wearer’s body from injury or infection. The hazards addressed by protective equipment include physical, electrical, heat, chemicals, biohazards, and airborne particulate matter.', 2),
(2, 'SRI Fire Extinguisher', 'sri-malysia.jpg', '', 1, 'SRI Fire Extinguisher', 2),
(3, 'Auto Fire off (AFO Fire Ball 1.3 Kg)', 'extinguisher-ball.jpg', '', 1, 'AFO Fire Ball 1.3 kg Net Weight: 1.3 kg Manufactured: Made in China Color: As given picture.', 2),
(4, 'Extinguisher ABC Dry Powder 3kg', 'abc-3kg.jpg', '', 1, 'Weight: 3kg Max working pressure: 14bar Testing pressure: 25bar Temperature range: -30~+60 Degree Materials grade: 50% DCP Material: Mono Ammonium Phosphate Color: As given picture.', 2),
(5, '5 kg ABC Extinguisher', 'abc-5kg.jpg', '', 1, 'Weight: 5kg Max working pressure: 14bar Testing pressure: 25bar Temperature range: -30~+60 Degree Materials grade: 50% DCP Material: Mono Ammonium Phosphate Color: As given picture.', 2),
(6, 'Passive Fire Protection (PFP)', 'Active-vs-Passive_final.png', '', 2, 'Passive fire protection (PFP) is an integral component of the components of structural fire protection and fire safety in a building. PFP attempts to contain fires or slow the spread, such as by fire-resistant walls, floors, and doors. PFP systems must comply with the associated listing and approval use and compliance in order to provide the effectiveness expected by building codes.', 2),
(7, 'Landing Valve Flange', 'Landing-Valve-Flange.jpg', '', 3, 'Landing Valve Flange', 2),
(8, 'Upright Glass Bulb Sprinkler 0.5′', 'Upright-Glass-Bulb-Sprinkler-0.jpg', '', 4, 'Upright Glass Bulb Sprinkler 0.5′', 2),
(9, 'Gas Suppression System', 'gass.jpg', '', 5, 'Gaseous fire suppression, also called clean agent fire suppression, is a term to describe the use of inert gases and chemical agents to extinguish a fire. These agents are governed by the National Fire Protection Association (NFPA) Standard for Clean Agent Fire Extinguishing Systems – NFPA 2001 in the US, with different standards and regulations elsewhere. The system typically consists of the agent, agent storage containers, agent release valves, fire detectors, fire detection system (wiring control panel, actuation signaling), agent delivery piping, and agent dispersion nozzles. Less typically, the agent may be delivered by means of solid propellant gas generators that produce either inert or chemically active gas.', 2),
(10, 'Access Control', 'access-control.jpg', '', 10, 'Access control is the selective restriction of access to a place or other resource. The act of accessing may mean consuming, entering or using. Permission to access a resource is called authorization.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `logo` longtext NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `logo`, `slogan`, `email`, `mobile`, `address`, `linkedin`, `twitter`, `facebook`, `instagram`, `role`) VALUES
(1, 'Technofire', 'logo.png', 'Fire Safety on, Tension Gone.', 'admin@technofire.com', '01700000000', 'Dhaka', 'https://www.linkedin.com/', 'https://twitter.com/', 'http://facebook.com/', 'https://www.instagram.com/', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
