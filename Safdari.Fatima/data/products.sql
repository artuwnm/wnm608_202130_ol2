-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2021 at 05:42 PM
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
-- Database: `fawnm608example`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(34, 'Kolompeh', 14.00, 'traditional', '2021-04-15 00:00:00', '2021-04-15 00:00:00', 'Kolompeh is an Iranian pastry baked in Kerman. It is a mixture of minced dates with cardamom powder and other flavorings inside. Dates, wheat flour, walnuts, and cooking oil are the main ingredients.', 'kolompeh.jpg', 'kolompeh_1.jpg,kolompeh_2.jpg'),
(2, 'Honey Brittle', 16.50, 'traditional ', '2021-04-12 12:20:01', '2021-04-15 12:20:01', 'This is one of the popular sweets served in the New Year. The sweet & crunchy caramelized brittle is perfumed with rosewater and saffron.\r\n', 'honey_brittle.jpg', 'honney_brittle_1.jpg,honney_brittle_2.jpg,honey_brittle.jpg'),
(3, 'Qorabieh', 19.50, 'cookies', '2021-04-12 12:29:18', '2021-05-12 10:44:59', 'Qorabieh is one of the most delicious from Tabriz providence of Iran. They are chewy and soft.\r\n', 'qorabieh.jpg', 'qorabieh_1.jpeg,qorabieh_3.jpg,qorabieh.jpg'),
(4, 'Bamiyeh', 12.25, 'traditional', '2021-04-15 12:42:14', '2021-04-15 12:42:14', 'Bamiyeh is one of the Iranian sweets from the south of Iran. Bamiyeh is made from a batter very similar to eclair batter, it\'s then deep-fried, and soaked in saffron rosewater syrup.\r\n', 'bamiyeh.jpg', 'bamiyeh_1.jpg,bamiyeh_2.jpg,bamiyeh.jpg'),
(5, 'Marzipan(toot)', 15.00, 'special', '2021-04-15 12:51:24', '2021-05-12 10:48:40', 'These intensely flavored candies are made with almond paste perfumed with rose water, molded, and stemmed with slivered almonds, and rolled in sanding sugar.\r\nweight: 400g', 'marzipan.jpg', 'marzipan_1.jpg,marzipan_2.jpg,marzipan.jpg'),
(6, 'Qottab', 19.99, 'special', '2021-04-15 12:59:41', '2021-04-15 12:59:41', 'Qottab is one of the most delicious pastries from the Yazd providence of Iran. They are mini hand pies filled with walnut paste that is mixed with powdered sugar, cardamom, and spices.\r\nweight: 300g', 'qottab.jpg', 'qottab_1.jpg,qottab_2.jpg,qottab.jpg'),
(7, 'Raisin Cookies', 18.50, 'cookies', '2021-04-15 13:08:01', '2021-04-15 13:08:01', 'They are a mixture of wheat flour, egg, sugar, raisins, and saffron. These raisin cookies are delicious with a freshly brewed cup of tea or ice cream.\r\n', 'raisin cookies.jpg', 'raisin cookies_1.jpg,raisin cookies_2.jpg,raisin cookies.jpg'),
(8, 'Feather', 17.99, 'cookies', '2021-04-15 13:15:23', '2021-04-15 13:15:23', 'Feather cookies are from Kerman, Iran. These cookies are light, crunchy, and tender. They are one of the most beautiful and flavorful cookies. \r\nweight: 450g', 'feather cookies.jpg', 'feather cookies_1.jpg,feather cookies_2.jpg,feather cookies.jpg'),
(9, 'Kerman', 25.00, 'gift', '2021-04-15 13:25:51', '2021-04-15 13:25:51', 'A reminisce of the gorgeous night in Kerman, being with friends, drinking tea with bite-size Persian pastries. Includes Kolompeh, rice cookies, Marzipan, and walnut cookies. \r\n', 'kerman_gift.jpg', 'kerman_gift_1.jpg,kerman_gift_2.jpg,kerman_gift.jpg'),
(10, 'Chickpea', 15.99, 'special', '2021-05-15 13:30:16', '2021-04-15 13:30:16', 'Few simple ingredients, one powerful and delicious taste. Chickpea cookies are soft, delicious, and flavored with cardamom. These cookies are gluten-free.\r\n', 'chickpea_gift.jpg', 'chickpea_gift_1.jpg,chickpea_gift_2.jpg,chickpea_gift.jpg'),
(11, 'Eshgh', 16.99, 'gift', '2021-05-15 13:34:34', '2021-04-15 13:34:34', 'This hearts-shaped Kolompeh is made with blueberries, strawberries, and saffron. This box is great as a gift. \r\n', 'kolompeh_gift.jpg', 'kolompeh_gift_1.jpg,kolompeh_gift_2.jpg,kolompeh_gift.jpg'),
(12, 'Summer', 25.00, 'gift', '2021-05-15 13:39:09', '2021-05-19 15:04:37', 'This box is great for gathering in the summer that filled with fresh and light cookies. In this box, you will find saffron Kolompeh, Rice cookies, walnut cookies, and lemon cookies.\r\n', 'summer.jpg', 'summer_gift_1.jpg,summer_gift_2.jpg,summer.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
