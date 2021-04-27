-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2021 at 08:55 PM
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
-- Database: `cjanky_teahouse_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `category` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `flavors` varchar(64) NOT NULL,
  `origin` varchar(32) NOT NULL,
  `steep_time` varchar(32) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `description`, `flavors`, `origin`, `steep_time`, `thumbnail`, `images`, `date_create`, `date_modify`) VALUES
(1, 'Green Mango', 'Green', 5.00, 'Earthy green tea balanced by the sweetness of mango. ', 'Sweet, smooth', 'China', '3 minutes', '', '', '2021-04-17 20:04:13', '2021-04-17 20:04:13'),
(2, 'Organic Chamomile', 'Herbal', 6.00, 'This Egyptian Chamomile has a hint of sweetness. ', 'Sweet', 'Egypt', '5-7 minutes', '', '', '2021-04-17 20:07:33', '2021-04-17 20:07:33'),
(3, 'Moroccan Mint', 'Herbal', 4.00, 'A blend of spearmint and green tea. ', 'Sharp', 'Morocco', '3 minutes', '', '', '2021-04-17 20:10:46', '2021-04-17 20:10:46'),
(4, 'Matcha', 'Green', 6.00, 'A pleasant bitter, nutty and sweet flavor. Use a bamboo whisk to blend with water.', 'Grassy, sweet', 'Japan', 'Stir until blended.', '', '', '2021-04-17 20:16:31', '2021-04-17 20:16:31'),
(5, 'Black Jasmine', 'Black', 10.00, 'Blend of black tea and jasmine.', 'Floral', 'China', '4 minutes', '', '', '2021-04-17 20:18:52', '2021-04-17 20:18:52'),
(6, 'Masala Chai', 'Black', 6.00, 'A blend of Indian black tea, Indian spices, milk and sweetener. ', 'Full-bodied, smooth', 'India', '5 minutes', '', '', '2021-04-17 20:25:07', '2021-04-17 20:25:07'),
(7, 'Honey Oolong', 'Oolong', 7.00, 'A blend of sweet honey and bitter oolong tea.', 'Sweet', 'China', '3-5 minutes', '', '', '2021-04-17 20:30:07', '2021-04-17 20:30:07'),
(8, 'Hibiscus', 'Herbal', 5.00, 'A tart, bright red tea.', 'Fruity, sweet, tart', 'Morocco', '3 minutes', '', '', '2021-04-17 20:33:26', '2021-04-17 20:33:26'),
(9, 'Jasmine White Tea', 'White', 14.00, 'A blend of silver needles and jasmine blossoms.', 'Floral, sweet', 'China', '3 minutes', '', '', '2021-04-17 20:36:34', '2021-04-17 20:36:34'),
(10, 'White Chocolate Puer Tea', 'Puer', 6.00, 'A fermented tea with a hint of chocolate. ', 'Sweet', 'China', '3 minutes', '', '', '2021-04-17 20:38:45', '2021-04-17 20:38:45'),
(11, 'Rose Black Tea', 'Black', 8.00, 'A rich black tea with floral notes.', 'Floral, bitter', 'Kenya', '5-7 minutes', '', '', '2021-04-17 20:41:45', '2021-04-17 20:41:45'),
(12, 'Earl Grey', 'Black', 5.00, 'Flavored with oil of bergamot, an orange Gwen in the Mediterranean.', 'Citrus', 'Italy', '3-5 minutes', '', '', '2021-04-17 20:46:13', '2021-04-17 20:46:13'),
(13, 'Ginger Green Tea', 'Green', 8.00, '', 'Honey, ginger', 'India', '1 minute', '', '', '2021-04-17 20:52:17', '2021-04-17 20:52:17');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
