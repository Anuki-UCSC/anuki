-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 07:41 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `searchdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `boarding_post`
--

CREATE TABLE `boarding_post` (
  `B_post_id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `girlsBoys` varchar(255) DEFAULT NULL,
  `person_count` int(100) DEFAULT NULL,
  `cost_per_person` int(255) DEFAULT NULL,
  `rating` int(100) DEFAULT 20,
  `image` varchar(255) DEFAULT NULL,
  `house_num` varchar(255) DEFAULT NULL,
  `lane` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` int(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `lifespan` int(255) DEFAULT NULL,
  `post_amount` int(255) DEFAULT NULL,
  `review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boarding_post`
--

INSERT INTO `boarding_post` (`B_post_id`, `category`, `girlsBoys`, `person_count`, `cost_per_person`, `rating`, `image`, `house_num`, `lane`, `city`, `postal_code`, `district`, `description`, `location`, `lifespan`, `post_amount`, `review`) VALUES
(1, 'individual', 'girls', 3, 6000, 45, 'Images/h1.jpg', '4', 'mal mawatha', 'Dalthara', 12949, 'Colombo', 'near to university of Moratuwa', 'https://goo.gl/maps/LtzP1M2NrkFUHpMb6', 2, 2000, 'aada'),
(2, 'individual', 'boys', 4, 5500, 30, 'Images/h1.jpg', '12/A', 'kammalawaththa mawatha', 'kotuwa', 10788, 'Mathara', 'near to university of Ruhuna', 'https://goo.gl/maps/AUW3hP4ryNcxPEvDA', 3, 3000, ' xdgxtdh'),
(3, 'room', 'girls', 2, 7000, 70, 'Images/h1.jpg', '4', 'mal mawatha', 'Moratuwa', 12949, 'Colombo', 'near to university of Moratuwa', 'https://goo.gl/maps/LtzP1M2NrkFUHpMb6', 2, 2000, ' dfsdsfs'),
(4, 'room', 'boys', 3, 6500, 60, 'Images/h1.jpg', '111/A', 'kammalawaththa mawatha', 'Maharagama', 10788, 'Colombo', 'near to university of jayawardhanapura', 'https://goo.gl/maps/9Rj41yabhqRgW7Mx5', 3, 3000, ' vfgdth');

-- --------------------------------------------------------

--
-- Table structure for table `food_post`
--

CREATE TABLE `food_post` (
  `F-post-id` int(100) NOT NULL,
  `FSid` int(11) NOT NULL,
  `ad_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `rating` int(255) NOT NULL,
  `ordering time deadline` time NOT NULL,
  `lifespan` int(31) NOT NULL,
  `post_amount` int(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_post`
--

INSERT INTO `food_post` (`F-post-id`, `FSid`, `ad_title`, `description`, `address`, `location`, `type`, `rating`, `ordering time deadline`, `lifespan`, `post_amount`, `image`) VALUES
(2, 2, 'Rasika Food Delivary Service', 'Food for breakfast,lunch and dinner deliver to your home', 'Old road,Maharagama', '', '', 30, '00:00:00', 3, 30000, '../bodima/Images/uploaded_foodpost/rice-and-curry-organic.jpg'),
(3, 4, 'Sri Ragavas Restaurant', 'All tamil and indian food -vegetarian food', 'No 35,Highlevel road, Maharagama', '', '', 35, '00:00:20', 6, 6000, '../bodima/Images/uploaded_foodpost/maxresdefault.jpg'),
(4, 5, 'Nelum Kole Food court', 'game kaama game rasata', 'Highlevel road, Nugegoda', '', '', 35, '00:00:18', 6, 6000, '../bodima/Images/uploaded_foodpost/nelum kole.jpg'),
(5, 3, 'Ajith Hotel & Delivary', 'breakfast,lunch and dinner family restaurant', 'No 111,Nugegoda', '', '', 35, '00:00:20', 5, 5000, '../bodima/Images/uploaded_foodpost/ajith hotel.jpg'),
(6, 5, 'Ranasiri Bakery', 'All bakery food dine in and delivary', 'sisil Mawatha,Wijayaraama', '', '', 35, '00:00:20', 6, 6000, '../bodima/Images/uploaded_foodpost/bakery.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food_supplier`
--

CREATE TABLE `food_supplier` (
  `FSid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `location_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_supplier`
--

INSERT INTO `food_supplier` (`FSid`, `name`, `NIC`, `Address`, `location_link`) VALUES
(2, 'Rasika Mallikarachchi', '7834848513v', '44/4, old road, Maharagama', ''),
(3, 'Ajith Hettige', '8834342341v', 'No: 5, Mirihana', ''),
(4, 'Bathiya Gamahe', '765432123v', '98/B, dehiwala road, nugegoda', ''),
(5, 'S. S. Thilakasiri', '564848513v', 'Madura mawatha, Boralasgamuwa', ''),
(6, 'N. C. Rathnapala', '667766554v', 'Malalasekara mawatha,Pamunuwa, Maharagama', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boarding_post`
--
ALTER TABLE `boarding_post`
  ADD PRIMARY KEY (`B_post_id`);

--
-- Indexes for table `food_post`
--
ALTER TABLE `food_post`
  ADD PRIMARY KEY (`F-post-id`,`FSid`),
  ADD KEY `FSid` (`FSid`);

--
-- Indexes for table `food_supplier`
--
ALTER TABLE `food_supplier`
  ADD PRIMARY KEY (`FSid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boarding_post`
--
ALTER TABLE `boarding_post`
  MODIFY `B_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food_post`
--
ALTER TABLE `food_post`
  MODIFY `F-post-id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_supplier`
--
ALTER TABLE `food_supplier`
  MODIFY `FSid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_post`
--
ALTER TABLE `food_post`
  ADD CONSTRAINT `food_post_ibfk_1` FOREIGN KEY (`FSid`) REFERENCES `food_supplier` (`FSid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
