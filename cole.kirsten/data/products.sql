-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2021 at 02:36 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KCOLEWNM608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(128) NOT NULL,
  `details` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `details`, `price`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, 'Salmon', 'Fresh \"King\" Salmon', 'Wild caught Alaskan salmon.  Price per pound.', 19.99, '2021-04-17 23:00:50', '2021-04-17 23:00:50', 'img/salmon1.jpg', 'img/salmon1.jpg,images/salmon2.jpg'),
(2, 'Tuna', 'Fresh Yellowfin Tuna', 'Ahi Yellowfin Tuna sustainably caught from Hawaii.  Price per pound.', 29.99, '2021-04-17 23:01:10', '2021-04-17 23:01:10', 'img/tuna1.jpg', 'img/tuna1.jpg'),
(3, 'Shrimp', 'Fresh Jumbo Black Tiger Prawns', 'Wild Jumbo Black Tiger Prawns sustainably caught from Mexico.  Price per pound.', 26.99, '2021-04-17 23:01:40', '2021-04-17 23:01:40', 'img/shrimp1.jpg', 'img/shrimp1.jpg'),
(4, 'Octopus', 'Wild frozen octopus', 'Wild frozen octopus sustainably caught from Portugal.  Price per pound.', 37.99, '2021-04-17 23:01:52', '2021-04-17 23:01:52', 'img/octopus1.jpg', 'img/octopus1.jpg'),
(5, 'Scallops', 'Wild Sea Scallops', 'Wild Sea Scallops caught on the Atlantic coastline.  Price per pound.', 36.99, '2021-04-17 23:02:03', '2021-04-17 23:02:03', 'img/scallops1.jpg', 'img/scallops1.jpg'),
(6, 'Squid', 'Wild Squid Tubes and Tentacles', 'Wild frozen squid with tubes and tentacles sustainably caught.  Price per pound.', 14.99, '2021-04-17 23:02:17', '2021-04-17 23:02:17', 'img/squid1.jpg', 'img/squid1.jpg'),
(7, 'Snapper', 'American Red Snapper', 'American Red Snapper sustainably caught off the Atlantic coastline.  Price per pound.', 36.99, '2021-04-17 23:02:30', '2021-04-17 23:02:30', 'img/snapper1.jpg', 'img/snapper1.jpg'),
(8, 'Mussels', 'Whitewater Blue Wild Mussels', 'Whitewater Blue Wild Mussels sustainably caught off the New England coastline.  Price per pound.', 7.99, '2021-04-17 23:02:41', '2021-04-17 23:02:41', 'img/mussels1.jpg', 'img/mussels1.jpg'),
(9, 'Oysters', 'Naked Cowboy Wild Oysters', 'Naked Cowboy Wild Oysters sustainably caught off the New York Long Island Sound.  Price per pound.', 26.99, '2021-04-17 23:02:56', '2021-04-17 23:02:56', 'img/oyster1.jpg', 'img/oyster1.jpg,img/oyster2.jpg'),
(10, 'Crab', 'Red Alaskan King Crab Frozen', 'Red Alaskan King Crab sustainably caught off the coast of Alaska.  Price per pound.', 64.99, '2021-04-17 23:03:10', '2021-04-17 23:03:10', 'img/crab1.jpg', 'img/crab1.jpg'),
(11, 'Sardines', 'Wild Frozen Sardines', 'Wild frozen sardines sustainably caught off the coast of Portugal.  Price per pound.', 12.99, '2021-04-17 23:03:20', '2021-04-17 23:03:20', 'img/sardines1.jpg', 'img/sardines1.jpg'),
(12, 'Lobster', 'North American Wild Lobster', 'Wild cold water lobster sustainably caught off the Atlantic coastline.  Price per pound.', 33.99, '2021-04-17 23:03:30', '2021-04-17 23:03:30', 'img/lobster1.jpg', 'img/lobster1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
