-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2021 at 09:07 AM
-- Server version: 5.6.51-cll-lve
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
-- Database: `kcole608`
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
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `details`, `price`, `category`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, 'Salmon', 'Fresh Salmon', 'Wild caught Alaskan salmon.  Price per pound', 19.99, 'Fish', '2021-05-22 14:50:38', '2021-05-22 14:50:38', 'img/salmon1.jpg', 'img/salmon1.jpg'),
(2, 'Tuna', 'Fresh Yellowfin Tuna', 'Ahi Yellowfin Tuna sustainably caught from Hawaii.  Price per pound.', 29.99, 'Fish', '2021-05-22 14:53:27', '2021-05-22 14:53:27', 'img/tuna1.jpg', 'img/tuna1.jpg'),
(3, 'Shrimp', 'Fresh Jumbo Black Tiger Prawns', 'Wild Jumbo Black Tiger Prawns sustainably caught from Mexico.  Price per pound.', 26.99, 'Shellfish', '2021-05-22 14:54:32', '2021-05-22 14:54:32', 'img/shrimp1.jpg', 'img/shrimp1.jpg'),
(4, 'Octopus', 'Wild frozen octopus', 'Wild frozen octopus sustainably caught from Portugal.  Price per pound.', 37.99, 'Fish', '2021-05-22 14:55:17', '2021-05-22 14:55:17', 'img/octopus1.jpg', 'img/octopus1.jpg'),
(5, 'Scallops', 'Wild Sea Scallops', 'Wild Sea Scallops caught on the Atlantic coastline.  Price per pound.', 36.99, 'Shellfish', '2021-05-22 14:56:07', '2021-05-22 14:56:07', 'img/scallops1.jpg', 'img/scallops1.jpg'),
(6, 'Squid', 'Wild Squid Tubes and Tentacles', 'Wild frozen squid with tubes and tentacles sustainably caught.  Price per pound.', 14.99, 'Fish', '2021-05-22 14:57:22', '2021-05-22 14:57:22', 'img/squid1.jpg', 'img/squid1.jpg'),
(7, 'Snapper', 'American Red Snapper', 'American Red Snapper sustainably caught off the Atlantic coastline.  Price per pound.', 36.99, 'Fish', '2021-05-23 08:59:28', '2021-05-23 08:59:28', 'img/snapper1.jpg', 'img/snapper1.jpg'),
(8, 'Mussels', 'Whitewater Blue Wild Mussels', 'Whitewater Blue Wild Mussels sustainably caught off the New England coastline.  Price per pound.', 7.99, 'Shellfish', '2021-05-23 09:00:11', '2021-05-23 09:00:11', 'img/mussels1.jpg', 'img/mussels1.jpg'),
(9, 'Oysters', 'Naked Cowboy Wild Oysters', 'Naked Cowboy Wild Oysters sustainably caught off the New York Long Island Sound.  Price per pound.', 26.99, 'Shellfish', '2021-05-23 09:01:24', '2021-05-23 09:01:24', 'img/oyster1.jpg', 'img/oyster1.jpg'),
(10, 'Crab', 'Red Alaskan King Crab', 'Red Alaskan King Crab sustainably caught off the coast of Alaska.  Price per pound.', 64.99, 'Shellfish', '2021-05-23 09:02:10', '2021-05-23 09:02:10', 'img/crab1.jpg', 'img/crab1.jpg'),
(11, 'Sardines', 'Wild frozen sardines', 'Wild frozen sardines sustainably caught off the coast of Portugal.  Price per pound.', 12.99, 'Fish', '2021-05-23 09:02:52', '2021-05-23 09:02:52', 'img/sardines1.jpg', 'img/sardines1.jpg'),
(12, 'Lobster', 'North American Wild Lobster', 'Wild cold water lobster sustainably caught off the Atlantic coastline.  Price per pound.', 33.99, 'Shellfish', '2021-05-23 09:03:39', '2021-05-23 09:03:39', 'img/lobster1.jpg', 'img/lobster1.jpg');

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
