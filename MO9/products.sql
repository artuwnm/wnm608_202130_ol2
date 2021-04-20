-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2021-04-20 10:13:49
-- 服务器版本： 5.7.33-cll-lve
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yuanyuan_wnm608`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `description`, `thumbnail`, `images`) VALUES
(1, 'Wear a mask', 15.00, 'Best Recommend', '2021-04-20 10:07:52', 'Original mask clip temporary storage portable antifouling folding household student storage artifact.', '', 'recommend_mask_1.jpg,Recommend_mask_2.jpg,recommend_mask_3.jpg,recommend_mask_4.jpg,recommend_mask_5.jpg'),
(2, 'Flowers and you in spring', 29.97, 'Best Recommend', '2021-04-20 10:10:43', 'Original design: lovely and all-inclusive softshell.', '', 'recommend_you_1.jpg,recommend_you_2.jpg,recommend_you_3.jpg,recommend_you_4.jpg,recommend_you_5.jpg'),
(3, 'Blossom spring', 29.97, 'Best Recommend', '2021-04-20 10:10:54', 'Original design: lovely and all-inclusive softshell.', '', 'recommend_blossom_1.jpg,recommend_blossom_2.jpg,recommend_blossom_3.jpg,recommend_blossom_4.jpg,recommend_blossom_5.jpg'),
(4, 'Eclipse of the moon', 29.97, 'Phone Case', '2021-04-20 10:11:17', 'The original design of INS wind and all-inclusive softshell.', '', 'eclipse_phone_1.jpg,eclipse_phone_2.jpg,eclipse_phone_3.jpg,eclipse_phone_4.jpg,eclipse_phone_5.jpg'),
(5, 'London winter', 29.97, 'Phone Case', '2021-04-20 10:11:34', 'Original design: all-inclusive softshell.', '', 'london_phone_1.jpg,london_phone_2.jpg,london_phone_3.jpg,london_phone_4.jpg,london_phone_5.jpg'),
(6, 'Muscle rabbit', 29.97, 'Phone Case', '2021-04-20 10:12:05', 'Original design: lovely and all-inclusive softshell.', '', 'phone_muscle_1.jpg,phone_muscle_2.jpg,phone_muscle_3.jpg,phone_muscle_4.jpg,phone_muscle_5.jpg'),
(7, 'ThenWeHug', 33.00, 'Airpods case', '2021-04-20 10:11:46', 'Original Art: Japan, Korea, and AirPods protective case, earphone case, transparent soft case.', '', 'airpods_thenwehug_1.jpg,airpods_thenwehug_2.jpg,airpods_thenwehug_3.jpg,airpods_thenwehug_4.jpg,airpods_thenwehug_5.jpg'),
(8, 'The blue moon of the echo of the universe', 33.00, 'Airpods case', '2021-04-20 10:12:18', 'Original: Apple AirPods protective cover transparent softshell.', '', 'airpods_the_1.jpg,airpods_the_2.jpg,airpods_the_3.jpg,airpods_the_4.jpg,airpods_the_5.jpg'),
(9, 'I\'m in the universe', 30.00, 'Airpods case', '2021-04-20 10:12:26', 'Original: Apple AirPods case silicone softshell.', '', 'airpods_i_1.jpg,airpods_i_2.jpg,airpods_i_3.jpg,airpods_i_4.jpg,airpods_i_5.jpg'),
(10, 'Rose in space', 18.87, 'Badge', '2021-04-20 10:12:38', 'Original: Star Universe badge lovely ins bag accessories personalized student Brooch.', '', 'badge_rose_1.jpg,badge_rose_2.jpg,badge_rose_3.jpg'),
(11, 'Bi Sheng', 6.60, 'Badge', '2021-04-20 10:13:32', 'Original: Acrylic Pendant decoration bag chain creative Cute Charm Hang Decoration AirPods key chain', '', 'badge_bi_1.jpg,badge_bi_2.jpg,badge_bi_3.jpg,badge_bi_4.jpg,badge_bi_5.jpg'),
(12, '20130613', 6.13, 'Badge', '2021-04-20 10:13:41', 'Original: Acrylic Pendant AirPods key ring', '', 'badge_20130613_1.jpg,badge_20130613_2.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
