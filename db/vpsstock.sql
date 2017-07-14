-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-14 09:31:34
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vpsstock`
--

-- --------------------------------------------------------

--
-- 表的结构 `vpsinfo`
--

CREATE TABLE `vpsinfo` (
  `id` int(11) NOT NULL,
  `sellername` varchar(20) NOT NULL COMMENT '商家名称',
  `vpstitle` varchar(200) NOT NULL COMMENT 'VPS标题',
  `vpsinfo` longtext NOT NULL COMMENT 'VPS信息',
  `buylink` varchar(50) NOT NULL COMMENT '购买链接',
  `state` int(25) DEFAULT NULL COMMENT '状态0有货，1无货',
  `uptime` varchar(50) DEFAULT NULL COMMENT '更新时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `vpsinfo`
--

INSERT INTO `vpsinfo` (`id`, `sellername`, `vpstitle`, `vpsinfo`, `buylink`, `state`, `uptime`) VALUES
(1, 'xvmlabs', 'XVM Labs VPS - 128', '128MB', 'https://xvmlabs.com/account/cart.php?a=add&pid=5', 1, '2017-07-14 09:29:51'),
(2, 'xvmlabs', 'XVM Labs VPS - 512', '512MB', 'https://xvmlabs.com/account/cart.php?a=add&pid=1', 1, '2017-07-14 09:29:51'),
(3, 'xvmlabs', 'XVM Labs VPS - 1024', '1024MB', 'https://xvmlabs.com/account/cart.php?a=add&pid=2', 1, '2017-07-14 09:29:52'),
(4, 'xvmlabs', 'XVM Labs VPS - 50G/512M', '50G硬盘；512M内存', 'https://xvmlabs.com/account/cart.php?a=add&pid=4', 1, '2017-07-14 09:29:53'),
(5, 'xvmlabs', 'XVM Labs VPS - 100G/1024M', '100G硬盘；1024M内存', 'https://xvmlabs.com/account/cart.php?a=add&pid=3', 1, '2017-07-14 09:29:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vpsinfo`
--
ALTER TABLE `vpsinfo`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `vpsinfo`
--
ALTER TABLE `vpsinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
