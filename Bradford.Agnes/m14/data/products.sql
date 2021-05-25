-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2021 at 10:44 PM
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
-- Database: `agnesbradford_wmn608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `size` varchar(64) NOT NULL,
  `brand` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(64) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `size`, `brand`, `price`, `category`, `date_create`, `date_modify`, `description`, `details`, `thumbnail`, `images`) VALUES
(1, 'Black Ankle Jogger', 'Large', 'Charlotte Russe', 10.00, 'Pants', '2021-04-18 16:33:35', '0000-00-00 00:00:00', 'Relaxed stretchy lightweight pants. Gathered at the ankle. Drawstring waist.  Never used and tags attached. ', '95% Polyester, 5% Spandex, Machine wash with like colors.', 'jogger_thumbnail.jpg', 'jogger.jpg'),
(2, 'Black Active Legging', 'Large', 'Mondetta', 15.00, 'Pants', '2021-05-15 19:05:04', '0000-00-00 00:00:00', 'Hight waist,4-way stretch and moisture wicking legging. Ankle length. Side pockets . Sheer trim detail. Inseam is 26.5', '88% Polyester, 12% Spandex. Machine wash with like colors. Gentle cycle. ', 'legging_thumbnail.jpg', 'legging.jpg'),
(3, 'Leather Look Pointe Pants', 'Large', 'Old Navy', 30.00, 'Pants', '2021-05-15 20:09:06', '0000-00-00 00:00:00', 'Leather looking ankle pants. Stretchy for a nice fit. Never worn. Tags attached. ', '95% Polyester, 5% Spandex. PU coated. Machine wash inside out. Gentle cycle. ', 'leatherpant_thumbnail.jpg', 'leatherpant.jpg'),
(4, 'Black Drape Keyhole Top', 'Large', 'Nine West', 30.00, 'Tops', '2021-04-18 16:18:00', '0000-00-00 00:00:00', 'Casual draping top. Keyhole detail on front. Never used. Tags on. ', '96% Polyester, 4% Elastene. Wash inside out. Cold water. Gentle cycle. Line dry.', 'drapetop_thumbnail.jpg', 'drapetop.jpg'),
(5, 'Striped Cowl-neck Tank', 'Large', 'New York & Company', 20.00, 'Tops', '2021-05-15 20:09:48', '0000-00-00 00:00:00', 'Casual fitting cowl neck tank. A-line cut for a figure flattering look. Light weight material. Never used. Tags on.', '65% Polyester, 35% Rayon. Hand wash coldd. Line dry.', 'stripedtank_thumbnail.jpg', 'stripedtank.jpg'),
(6, 'Black Tunic Wrap Blouse', 'X-large', 'Charlotte Ruse', 20.00, 'Tops', '2021-04-18 17:09:12', '0000-00-00 00:00:00', 'Light-weight, 3/4 length tunic top. Ties at waist and can be used as a light jacket. Semi-translucent. Never used. Tags attached. ', '100% Polyester. Hand wash cold. Hang dry.', 'tunictop_thumbnail.jpg', 'tunictop.jpg'),
(7, 'Off-Shoulder Polka Dot Black Top', 'Medium', 'New York & Company', 25.00, 'Tops', '2021-04-18 17:13:02', '0000-00-00 00:00:00', 'Ruffled sleeve, off-shoulder blouson top. Gathered at the waist. Polka dot detail.', '100% Polyester. Machine wash cold. Gentle cycle. Tumble dry low. ', 'polkadot_top_thumbnail.jpg', 'polkadot_top.jpg'),
(8, 'Evelyn Maxi Dress ', 'Large', 'Fabletics', 15.00, 'Dresses', '2021-04-18 17:17:44', '0000-00-00 00:00:00', 'Black Strappy Maxi Dress. Built in bra.\r\nEmpire waist with a-line to floor figure flattering effect. Jersey dress that feels like soft suede to the touch.', '63%Modal, 37% Polyester. Hand wash cold. Line dry', 'maxidress_thumbnail.jpg', 'maxidress.jpg'),
(9, 'Black Lace-Up Lug Sole Heeled Combat Booties', '8M', 'Nine West', 40.00, 'Shoes', '2021-04-18 18:48:04', '0000-00-00 00:00:00', 'Grunge meets sleek in this block heel combat boot. Capped toe like look, clean lines and chunky bottom.', 'Heel height 2.25 inch.\r\nPlatform height 0.9 inch.\r\nZipper closure.\r\nFaux Leather.\r\nSpot Clean.', 'Bootie_thumbnail.jpg', 'Bootie.jpg'),
(10, 'Platform Moc Pumps', '7.5M', 'Calvin Klein', 75.00, 'Shoes', '2021-04-18 18:55:37', '0000-00-00 00:00:00', 'Calvin Klein\'s pressy moc front pumps. Stylish platforms.\r\n\r\n', '3.35 inch heel.\r\n0.55 inch platform.\r\nAlmond-toe.\r\nManmade lining\r\nCushioned insole.\r\nCalvin Klein branded.\r\nLeather.\r\nWipe clean.', 'Platformpump_thumbnail.jpg', 'Platformpump.jpg'),
(11, 'Platform Sandal Heel', '7.5 M', 'Naturalizer', 40.00, 'Shoes', '2021-04-18 19:18:30', '0000-00-00 00:00:00', 'Dee sandals from Naturalizer. Slingbacks  with straps with adjustable closure. Subtle platform for a little lift.', 'Faux leather upper. \r\nRound open toe.\r\n0.5 inch platform.\r\n3.75 inch covered heel. \r\nSynthetic sole.', 'platform_sandal_thumbnail.jpg', 'platform_sandal.jpg'),
(12, 'Black Wedge Sandals', '7.5', 'Charles David', 30.00, 'shoes', '2021-04-18 19:44:17', '0000-00-00 00:00:00', 'Casual or dressy wedge sandal, great for summer styles. Elastic upper. ', '1 inch platform. \r\n4 inch wedge heel.\r\nBase material, Polyurethane. \r\nSynthetic sole. ', 'wedge_sandal_thumbnail.jpg', 'wedge_sandal.jpg'),
(13, 'Sport Wedge Heel', '7.5 M', 'Anne Klein', 30.00, 'shoes', '2021-04-18 20:01:57', '0000-00-00 00:00:00', 'Lightweight and comfortable. Casual everyday shoe. A mixed fabric upper, and a slim round toe. The sport heel is great for any occasion.', 'Stretch topline for easy wear.\r\nBreathable lining.\r\nCovered wedge heel.\r\nRubber sole. \r\n2 in heel.', 'sportyheel_thumbnail.jpg', 'sportyheel.jpg'),
(14, 'Black Pointed Toe Mule', '7M', 'Marc Fisher', 40.00, 'shoes', '2021-04-18 20:13:08', '0000-00-00 00:00:00', 'Pointed toe stylish mule. Block heel is great for ease of walking and comfort.', 'Pointed toe. Slip-on style.\r\nApprox. 2.5\" heel\r\nLeather upper. Manmade sole.', 'Muleheel_thumbnail.jpg', 'Muleheel.jpg'),
(15, 'New Product-Basic Top', 'L', '', 5.00, 'Top', '2021-05-21 17:00:07', '0000-00-00 00:00:00', 'A very nice basic top.', '100% cotton', 'tee_thumbnail.jpg', 'tee.jpg'),
(16, 'New Product -Black Jeans', '12', '', 10.00, 'Pants', '2021-05-21 17:00:50', '0000-00-00 00:00:00', 'Stretch Denim Pants', 'Denim fabric.', 'jeans_thumbnail.jpg', 'jeans.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
