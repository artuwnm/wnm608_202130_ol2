-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2021 at 11:19 AM
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
-- Database: `wnm_608_rhughes`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
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

INSERT INTO `products` (`id`, `product_name`, `price`, `quantity`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'XMAS Lights', 5.00, 0, 'Home', '2021-04-19 09:56:43', '2021-04-19 09:56:43', 'New in box! String of 100 white Christmas lights. Get a jump on 2021 Christmas decorating with this rock-bottom deal.', 'xmas_lights.jpg', 'xmas_lights.jpg'),
(2, 'BRK Smoke Alarms', 10.00, 0, 'Home', '2021-04-19 09:58:10', '2021-04-19 09:58:10', 'New in box! These  BRK smoke alarms will keep your family safe from fire and smoke. Don\'t wait! Grab this set of two un-opened units while they last.', 'smoke_detectors.jpg', 'smoke_detectors.jpg'),
(3, 'Traxxas Stampede RC Truck', 100.00, 0, 'Toys', '2021-04-19 10:02:15', '2021-04-19 10:02:15', 'This RC Truck is no toy! With a 45mph top speed (can be increased to 60mph with battery upgrade). Barely used, this truck comes complete and ready to go with extra battery, charger and controller.', 'rc_truck_2.jpg', 'rc_truck_2.jpg'),
(4, 'Box of Random Computer Parts', 10.00, 0, 'Ephemera', '2021-04-19 10:06:49', '2021-04-19 10:06:49', 'That\'s right, this is a small box of random computer parts: fans, boards, chips plus a soldering iron to get you started right away on building that robot of your dreams.', 'random_parts.jpg', 'random_parts.jpg'),
(5, 'Bag of 50 Caliber Casings', 8.00, 0, 'Ephemera', '2021-04-19 10:10:20', '2021-04-19 10:10:20', 'Bag of assorted 50-Caliber shell casings. Some are clean and shiny and some have that trendy patina. Complete your man-cave decor with these hard to find treasures. ', '50_cal_detail.jpg', '50_cal_detail.jpg,bag_50_cal.jpg'),
(6, 'Wooden Explosives Box Top', 5.00, 0, 'Ephemera', '2021-04-19 10:14:00', '2021-04-19 10:14:00', 'One more for the man-cave! This is weathered military surplus explosives box top with the words \"danger explosives\" stenciled on it. It\'s unusual, it\'s a little weird... and there\'s only one!', 'bang_box.jpg', 'bang_box.jpg,bang_box_detail.jpg'),
(7, 'Kids Bike Helmets', 15.00, 0, 'Sporting', '2021-04-19 10:17:08', '2021-04-19 10:17:08', 'Kids bike helmets (fits 10 year olds) in either white, black or black. Pick your favorite or grab all three.', 'bike_helmets.jpg', 'bike_helmets.jpg,bike_helmet_black.jpg,bike_helmet_orange.jpg,bike_helmet_white.jpg'),
(8, 'Cyclone Max Bike Pump', 30.00, 0, 'Sporting', '2021-04-19 10:19:49', '2021-04-19 10:19:49', 'This standard size bike pump is all you need for all the bikes in your stable. It fits all tire valve sizes.', 'bike_pump_lg.jpg', 'bike_pump_lg.jpg,bikepump_lg_detail.jpg'),
(9, 'Bell Compact Bike Pump', 15.00, 0, 'Sporting', '2021-04-19 10:24:18', '2021-04-19 10:24:18', 'Never be without a pump! This compact pump is small enough to throw in a backpack or keep in your car.', 'bike_pump_sm.jpg', 'bike_pump_sm.jpg,bike_pump_sm_detail_1.jpg,bike_pump_sm_detail_2.jpg'),
(10, 'Industrial Quality Bouy', 25.00, 0, 'Ephemera', '2021-04-19 10:28:27', '2021-04-19 10:28:27', 'Complete your home nautical theme with this artifact. Or, repurpose and use on the water!', 'bouy.jpg', 'bouy.jpg'),
(11, 'Bag of Kingsford Matchlight Charcoal', 5.00, 0, 'Home', '2021-04-19 10:30:49', '2021-04-19 10:30:49', 'Why pay more when you can snatch up this deal today. This bag of high quality charcoal is new, unopened and ready to light (no fluid needed).', 'charcoal.jpg', 'charcoal.jpg'),
(12, 'Snaptain S5C 4-axis Drone', 40.00, 0, 'Toys', '2021-04-19 10:33:10', '2021-04-19 10:33:10', 'This lightly used easy to fly drone is ready to go. Complete with controller, manual, xtra batteries, charger and original packaging. ', 'drone.jpg', 'drone.jpg,drone_stuff.jpg'),
(13, 'Bass Pro Shops Fishing Backpack', 40.00, 0, 'Sporting', '2021-04-19 10:36:55', '2021-04-19 10:36:55', 'This pack is loaded with features and filled with fishing gear; pliers, plastic baits, hooks and much more. Grab this pack and a rod and you\'re ready to hit the water.', 'fishing_pack.jpg', 'fishing_pack.jpg,fishing_pack_right.jpg,fishing_pack_left.jpg'),
(14, 'Halloween Frankenstein Decoration', 5.00, 0, 'Home', '2021-04-19 10:40:32', '2021-04-19 10:40:32', 'That\'s right, no battling the crowd at Walmart to complete your Halloween decorations. Top them off with this handy Frankenstein lawn figure!', 'halloween_guy.jpg', 'halloween_guy.jpg');

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
