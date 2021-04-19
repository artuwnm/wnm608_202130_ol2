-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2021 at 10:52 PM
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
(1, 'kolompeh', 14.00, 'traditional ', '2021-04-15 12:06:11', '2021-04-15 12:06:11', 'Kolompeh is an Iranian pastry baked in Kerman. It is a mixture of minced dates with cardamom powder and other flavorings inside. Dates, wheat flour, walnuts, and cooking oil are the main ingredients.\r\nweight: 350g', 'kolompeh.jpg', 'kolompeh_1.jpg,kolompeh_2.jpg'),
(2, 'brittle', 16.50, 'traditional ', '2021-04-15 12:20:01', '2021-04-15 12:20:01', 'This is one of the popular sweets served in the New Year. The sweet & crunchy caramelized brittle is perfumed with rosewater and saffron.\r\nweight: 500g', 'honey_brittle.jpg', 'honney_brittle_1.jpg,honey_brittle_2jpg'),
(3, 'qorabieh', 19.00, 'cookies', '2021-04-15 12:29:18', '2021-04-15 12:29:18', 'Qorabieh is one of the most delicious from Tabriz providence of Iran. They are chewy and soft.\r\nweight: 275g', 'qorabieh.jpg', 'qorabieh_1.jpg,qorabieh_2.jpg'),
(4, 'bamiyeh', 12.25, 'traditional', '2021-04-15 12:42:14', '2021-04-15 12:42:14', 'Bamiyeh is one of the Iranian sweets from the south of Iran. Bamiyeh is made from a batter very similar to eclair batter, it\'s then deep-fried, and soaked in saffron rosewater syrup.\r\nweight: 350g', 'bamiyeh.jpg', 'bamiyeh_1.jpg,bamiyeh_2.jpg'),
(5, 'mrzipan(toot)', 14.99, 'special', '2021-04-15 12:51:24', '2021-04-15 12:51:24', 'These intensely flavored candies are made with almond paste perfumed with rose water, molded, and stemmed with slivered almonds, and rolled in sanding sugar.\r\nweight: 400g', 'marzipan.jpg', 'marzipan_1.jpg,mazipan_2.jpg'),
(6, 'qottab', 19.99, 'special', '2021-04-15 12:59:41', '2021-04-15 12:59:41', 'Qottab is one of the most delicious pastries from the Yazd providence of Iran. They are mini hand pies filled with walnut paste that is mixed with powdered sugar, cardamom, and spices.\r\nweight: 300g', 'qottab.jpg', 'qottab_1.jpg,qottab_2.jpg'),
(7, 'raisincookies', 18.50, 'cookies', '2021-04-15 13:08:01', '2021-04-15 13:08:01', 'They are a mixture of wheat flour, egg, sugar, raisins, and saffron. These raisin cookies are delicious with a freshly brewed cup of tea or ice cream.\r\nweight: 500g', 'raisin cookies', 'raisin cookies_1.jpg,raisin cookies_2.jpg'),
(8, 'feather', 17.99, 'cookies', '2021-04-15 13:15:23', '2021-04-15 13:15:23', 'Feather cookies are from Kerman, Iran. These cookies are light, crunchy, and tender. They are one of the most beautiful and flavorful cookies. \r\nweight: 450g', 'feather cookies.jpg', 'feather cookies_1.jpg,feather cookies_2jpg'),
(9, 'kerman', 25.00, 'gift', '2021-04-15 13:25:51', '2021-04-15 13:25:51', 'A reminisce of the gorgeous night in Kerman, being with friends, drinking tea with bite-size Persian pastries. Includes Kolompeh, rice cookies, Marzipan, and walnut cookies. \r\nweight: 350g', 'kerman_gift.jpg', 'kerman_gift_1.jpg,kerman_gift_2.jpg'),
(10, 'chickpea', 15.99, 'special', '2021-04-15 13:30:16', '2021-04-15 13:30:16', 'Few simple ingredients, one powerful and delicious taste. Chickpea cookies are soft, delicious, and flavored with cardamom. These cookies are gluten-free.\r\nweight: 350g', 'chickpea_gift.jpg', 'chickpea_gift_1.jpg,chickpea_gift_2.jpg'),
(11, 'eshgh', 16.99, 'gift', '2021-04-15 13:34:34', '2021-04-15 13:34:34', 'This hearts-shaped Kolompeh is made with blueberries, strawberries, and saffron. This box is great as a gift. \r\nweight: 250g', 'kolompeh_gift.jpg', 'kolompeh_gift_1.jpg,kolompeh_gift_2.jpg'),
(12, 'summer', 25.00, 'gift', '2021-04-15 13:39:09', '2021-04-15 13:39:09', 'This box is great for gathering in the summer that filled with fresh and light cookies. In this box, you will find saffron Kolompeh, Rice cookies, walnut cookies, and lemon cookies.\r\nweight: 250g', 'summer_gift.jpg', 'summer_gift_1.jpg, summer_gift_2.jpg');

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
