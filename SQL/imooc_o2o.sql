-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-24 03:22:29
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imooc_o2o`
--

-- --------------------------------------------------------

--
-- 表的结构 `o2o_area`
--

CREATE TABLE `o2o_area` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `city_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `o2o_bis`
--

CREATE TABLE `o2o_bis` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `licence_logo` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `city_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `bank_name` varchar(50) NOT NULL DEFAULT '',
  `bank_user` varchar(50) NOT NULL DEFAULT '',
  `faren` varchar(20) NOT NULL DEFAULT '',
  `faren_tel` varchar(20) NOT NULL DEFAULT '',
  `money` decimal(20,2) NOT NULL DEFAULT '0.00',
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o2o_bis`
--

INSERT INTO `o2o_bis` (`id`, `name`, `email`, `logo`, `licence_logo`, `description`, `city_id`, `city_path`, `bank_info`, `bank_name`, `bank_user`, `faren`, `faren_tel`, `money`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(7, '糯米团子', '953181215@qq.com', '/upload\\20170717\\d742249b1bc7712f8b790949cf518b24.jpg', '', '<p>好吃哒糯米团子</p>', 2, '2,3', '1234', '1234', 'kamisama', 'kamisama', '1234', '0.00', 0, 1, 1500280427, 1500280427),
(8, '测试商户1', '953181215@qq.com', '/upload\\20170718\\77706f01882e0ce3cf922109fda0df0c.png', '/upload\\20170718\\7868bfd46314f29af29edf6497a2b967.png', '<p>测试1</p>', 2, '2,4', '1234', '1234', '1234', '1234', '1234', '0.00', 0, 0, 1500345543, 1500365985),
(9, '测试2', '953181215@qq.com', '/upload\\20170718\\ff00f37e49d78a8b33d78d9b9b8d0689.png', '/upload\\20170718\\5f38acc959133eda32004f294fa24f44.png', '<p>测试2</p>', 1, '1', '1234', '1234', '1234', '1234', '1234', '0.00', 0, 0, 1500345641, 1500365631);

-- --------------------------------------------------------

--
-- 表的结构 `o2o_bis_account`
--

CREATE TABLE `o2o_bis_account` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `code` varchar(10) NOT NULL DEFAULT '',
  `bis_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '',
  `last_login_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `is_main` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o2o_bis_account`
--

INSERT INTO `o2o_bis_account` (`id`, `username`, `password`, `code`, `bis_id`, `last_login_ip`, `last_login_time`, `is_main`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(3, 'kamisama', '06bd377a73b32b4f694ef7b9d4544912', '6838', 7, '', 1500856582, 1, 0, 1, 1500280427, 1500856582),
(4, '1234567', '68c34c6558341a30070f0c3e135ea82e', '1720', 8, '', 0, 1, 0, 0, 1500345543, 1500365985),
(5, '1234', '1756b38cbe016fa3d21e0e1ec355f364', '2626', 9, '', 0, 1, 0, 0, 1500345641, 1500365631);

-- --------------------------------------------------------

--
-- 表的结构 `o2o_bis_location`
--

CREATE TABLE `o2o_bis_location` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `contact` varchar(20) NOT NULL DEFAULT '',
  `xpoint` varchar(20) NOT NULL DEFAULT '',
  `ypoint` varchar(20) NOT NULL DEFAULT '',
  `bis_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `open_time` varchar(20) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `is_main` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `api_address` varchar(255) NOT NULL DEFAULT '',
  `city_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `category_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `category_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o2o_bis_location`
--

INSERT INTO `o2o_bis_location` (`id`, `name`, `logo`, `address`, `tel`, `contact`, `xpoint`, `ypoint`, `bis_id`, `open_time`, `content`, `is_main`, `api_address`, `city_id`, `city_path`, `category_id`, `category_path`, `bank_info`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(3, '糯米团子', '/upload\\20170717\\d742249b1bc7712f8b790949cf518b24.jpg', '', '', '1234', '116.3757817484', '23.551290340772', 7, '23：00-6：00', '<p>深夜团子pa</p>', 1, '广东揭阳榕城区江南新城一期', 2, '2,3', 1, '1,', '', 0, 1, 1500280427, 1500280427),
(4, '测试商户1', '/upload\\20170718\\77706f01882e0ce3cf922109fda0df0c.png', '', '', '1234', '116.3757817484', '23.551290340772', 8, '12:00-19:00', '<p>测试</p>', 1, '广东揭阳榕城区江南新城一期', 2, '2,4', 5, '5,', '', 0, 0, 1500345543, 1500365985),
(5, '测试2', '/upload\\20170718\\ff00f37e49d78a8b33d78d9b9b8d0689.png', '', '', '1234', '116.3757817484', '23.551290340772', 9, '12:00-19:00', '<p>测试2</p>', 1, '广东揭阳榕城区江南新城一期', 1, '1', 5, '5,', '', 0, 0, 1500345641, 1500365631),
(6, '测试1', '/upload\\20170719\\be263be85cc3e18d40ddb51195a5f764.png', '', '123', '123', '116.3757817484', '23.551290340772', 7, '12:00-19:00', '<p>测试1</p>', 0, '广东揭阳榕城区江南新城一期', 2, '2,4', 7, '7,9', '', 0, 0, 1500428889, 1500428889);

-- --------------------------------------------------------

--
-- 表的结构 `o2o_category`
--

CREATE TABLE `o2o_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o2o_category`
--

INSERT INTO `o2o_category` (`id`, `name`, `parent_id`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, '美食', 0, 0, 1, 1499746214, 0),
(2, '娱乐', 0, 0, 1, 1499746757, 1499746757),
(4, 'KTV', 2, 0, 1, 1499758269, 1499758269),
(5, '健身', 0, 0, 1, 1499825558, 0),
(6, '学习', 0, 0, 1, 1500365782, 0),
(7, '游戏', 0, 0, 1, 1500365789, 0),
(8, '单机游戏', 7, 0, 1, 1500365799, 0),
(9, '网络游戏', 7, 0, 1, 1500365810, 0);

-- --------------------------------------------------------

--
-- 表的结构 `o2o_city`
--

CREATE TABLE `o2o_city` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `uname` varchar(50) NOT NULL DEFAULT '',
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o2o_city`
--

INSERT INTO `o2o_city` (`id`, `name`, `uname`, `parent_id`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, '北京', 'beijing', 0, 0, 1, 0, 0),
(2, '广东', 'guang dong', 0, 0, 1, 0, 0),
(3, '揭阳', 'jie yang', 2, 0, 1, 0, 0),
(4, '珠海', 'zhu hai', 2, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `o2o_deal`
--

CREATE TABLE `o2o_deal` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `se_category_id` int(11) NOT NULL DEFAULT '0',
  `bis_id` int(11) NOT NULL DEFAULT '0',
  `location_ids` varchar(100) NOT NULL DEFAULT '',
  `image` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `origin_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `current_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `city_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `buy_count` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `total_count` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `coupons_begin_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `coupons_end_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `xpoint` varchar(20) NOT NULL DEFAULT '',
  `ypoint` varchar(20) NOT NULL DEFAULT '',
  `bis_account_id` int(10) NOT NULL DEFAULT '0',
  `balance_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `notes` text NOT NULL,
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o2o_deal`
--

INSERT INTO `o2o_deal` (`id`, `name`, `category_id`, `se_category_id`, `bis_id`, `location_ids`, `image`, `description`, `start_time`, `end_time`, `origin_price`, `current_price`, `city_id`, `buy_count`, `total_count`, `coupons_begin_time`, `coupons_end_time`, `xpoint`, `ypoint`, `bis_account_id`, `balance_price`, `notes`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, '测试团购1', 7, 8, 7, '3', '/upload\\20170724\\098b236d55fd4ced32863aeefd1c2a39.jpg', '<p>测试</p>', 1500434520, 1500520920, '100.00', '10.00', 3, 0, 10, 1500434520, 1500520980, '116.3757817484', '23.551290340772', 3, '0.00', '<p>测试</p>', 0, 1, 1500434589, 1500434589),
(2, '测试团购2', 2, 4, 7, '3', '/upload\\20170724\\098b236d55fd4ced32863aeefd1c2a39.jpg', '<p>测试2</p>', 1500434580, 1500520980, '100.00', '10.00', 1, 0, 10, 1500434640, 1500521040, '116.3757817484', '23.551290340772', 3, '0.00', '<p>测试2</p>', 0, 1, 1500434650, 1500434650),
(3, '测试团购3', 2, 4, 7, '3', '/upload\\20170724\\098b236d55fd4ced32863aeefd1c2a39.jpg', '<p>测试</p>', 1500856740, 1532392740, '10.00', '5.00', 3, 0, 100, 1500856740, 1532392740, '116.3757817484', '23.551290340772', 3, '0.00', '<p>测试</p>', 0, 0, 1500856798, 1500856798);

-- --------------------------------------------------------

--
-- 表的结构 `o2o_featured`
--

CREATE TABLE `o2o_featured` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(30) NOT NULL DEFAULT '',
  `image` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o2o_featured`
--

INSERT INTO `o2o_featured` (`id`, `type`, `title`, `image`, `url`, `description`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, 0, '测试数据1', '/upload\\20170723\\1a344e6563820e0bb19566fab8bf14d1.jpg', '', '测试1', 0, 1, 1500778630, 1500778885),
(2, 0, '测试数据2', '/upload\\20170723\\3318284ee70014a30d308a3d318c9203.jpg', '', '测试2', 0, 1, 1500778655, 1500778882),
(3, 0, '测试数据3', '/upload\\20170723\\d8cee75989eb8b8353bdd6bcea0a16dd.jpg', '', '测试3', 0, 1, 1500778676, 1500778879),
(4, 0, '测试数据4', '/upload\\20170723\\e7a4a2530156a8b53ee34da188eec497.jpg', '', '测试4', 0, 1, 1500778696, 1500778875),
(5, 1, '测试数据1', '/upload\\20170723\\53a88e08cf0b4267e863db5509a627d2.jpg', '', '测试1', 0, 1, 1500794271, 1500795053),
(6, 1, '测试数据2', '/upload\\20170723\\49fe444588fa413f4bf08c9e75a0b5b0.jpg', '', '测试2', 0, 1, 1500794296, 1500795051),
(7, 1, '测试数据3', '/upload\\20170723\\4f0ab38b58c40af98eaff9fde6189a4e.jpg', '', '测试3', 0, 1, 1500794321, 1500795050),
(8, 1, '测试数据4', '/upload\\20170723\\9b602cd92cdc972f616fb13a683423a6.jpg', '', '测试4', 0, 1, 1500794340, 1500795047);

-- --------------------------------------------------------

--
-- 表的结构 `o2o_user`
--

CREATE TABLE `o2o_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '',
  `last_login_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `email` varchar(30) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `listorder` int(8) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `code` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `o2o_user`
--

INSERT INTO `o2o_user` (`id`, `username`, `password`, `last_login_ip`, `last_login_time`, `email`, `mobile`, `listorder`, `status`, `create_time`, `update_time`, `code`) VALUES
(1, 'kamisama', '31ad7b8c419bf90804b6f68ce8ad6b4c', '', 1500729417, '953181215@qq.com', '', 0, 1, 1500604496, 1500729417, 3162);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `o2o_area`
--
ALTER TABLE `o2o_area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `o2o_bis`
--
ALTER TABLE `o2o_bis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `o2o_bis_account`
--
ALTER TABLE `o2o_bis_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `bis_id` (`bis_id`);

--
-- Indexes for table `o2o_bis_location`
--
ALTER TABLE `o2o_bis_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `bis_id` (`bis_id`);

--
-- Indexes for table `o2o_category`
--
ALTER TABLE `o2o_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `o2o_city`
--
ALTER TABLE `o2o_city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `o2o_deal`
--
ALTER TABLE `o2o_deal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `se_category_id` (`se_category_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `start_time` (`start_time`),
  ADD KEY `end_time` (`end_time`);

--
-- Indexes for table `o2o_featured`
--
ALTER TABLE `o2o_featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `o2o_user`
--
ALTER TABLE `o2o_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `o2o_area`
--
ALTER TABLE `o2o_area`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `o2o_bis`
--
ALTER TABLE `o2o_bis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `o2o_bis_account`
--
ALTER TABLE `o2o_bis_account`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `o2o_bis_location`
--
ALTER TABLE `o2o_bis_location`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `o2o_category`
--
ALTER TABLE `o2o_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `o2o_city`
--
ALTER TABLE `o2o_city`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `o2o_deal`
--
ALTER TABLE `o2o_deal`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `o2o_featured`
--
ALTER TABLE `o2o_featured`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `o2o_user`
--
ALTER TABLE `o2o_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
