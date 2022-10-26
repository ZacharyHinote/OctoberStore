-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 04:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `octoberstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `price`, `description`, `image_name`) VALUES
(1, 'Bloody Table Cover', 5, 'Cover your table in fear this Halloween with a Bloody Hands Table Cover. This Halloween table cover features bloody hand prints with \"HELP\" written in blood against a white background. This Bloody Hands Table Cover is durable and reusable for easy cleanup', 'BloodyTableCover.jpg'),
(2, 'Eternal Slumber Tombstone', 9, 'This cracked tombstone yard sign is printed with the epitaph \"Eternal Slumber.\" The red-eyed bat and withered, moss-covered design gives this headstone a spooky and vintage feel that\'s perfect for creating your very own Halloween graveyard. ', 'EternalSlumberTombstone.jpg'),
(3, 'Hanging Skeleton', 12, 'Is that real? The Realistic Hanging Skeleton will make you look twice! This child-size Halloween decoration has decayed bones and a creepy lip-less smile that will surely spook your Halloween party guests. The plastic skeleton just wants to hang out! Hang', 'HangingSkeleton.jpg'),
(4, 'Light Up Hairy Spider', 75, 'You can\'t hide from this monstrous spider! This Light-Up Hairy Black Spider has a foam body covered in velvety black material with a gray fur mane and fur-accented black legs that bend. Turn it on and watch the eyes light up red with fury! Place this gian', 'LightUpHairySpider.jpg'),
(5, 'Small Cauldron', 4, 'Double, double, toil, and trouble! This Small Black Cauldron is no trouble at all — in fact, it\'s a perfect pot for Halloween candy, favors, decorations, and other party \"brews.\" Although made of plastic, the jet black cauldron has a cast iron look with a', 'SmallCauldron.jpg'),
(6, 'White Stretch Spider Web, 400 sq ft', 8, 'Make their skin crawl with White Stretch Spider Web! Our synthetic fiber spider web looks just like the real deal and is easy to use. Simply uncoil and stretch over doors, furniture, and decorations both indoors and outdoors. It instantly turns your home ', 'Spider-Web.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
