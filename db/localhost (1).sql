-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 05 月 24 日 10:28
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `thin`
--
CREATE DATABASE `thin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `thin`;

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(11) NOT NULL,
  `num` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='购物车' AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `cart`
--

INSERT INTO `cart` (`id`, `sid`, `num`, `name`, `price`, `image`) VALUES
(36, 'admin', '6', '化妆品5', 66, '1.png'),
(35, '1111', '9', '化妆品1', 66, '3.png');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录编号',
  `name` varchar(60) NOT NULL COMMENT '名称',
  `image` varchar(100) NOT NULL COMMENT '缩略图',
  `price` float NOT NULL COMMENT '价格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品数据表' AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(3, '化妆品1', '3.png', 66),
(4, '化妆品2', '4.png', 66),
(5, '化妆品3', '1.png', 66),
(6, '化妆品4', '2.png', 66),
(7, '化妆品5', '1.png', 66);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录编号',
  `username` varchar(20) NOT NULL COMMENT '账号',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `nickname` varchar(30) NOT NULL COMMENT '联系人',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `phone` varchar(30) DEFAULT NULL COMMENT '电话',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员数据表' AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nickname`, `address`, `phone`) VALUES
(22, 'stt', '123456', '2', '22222222', '2222222222222'),
(23, '1111', '1111', '11', '1111111', '111111111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
