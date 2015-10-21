-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2015 at 03:28 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `cid` int(4) NOT NULL,
  `date` date NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`cid`, `date`, `data`) VALUES
(1, '2015-10-01', 'Day 1 Tasks'),
(2, '2015-10-15', 'Completed tasks'),
(3, '2015-10-10', 'Report send to Manager'),
(4, '2015-10-01', 'New Task'),
(5, '2015-10-09', 'Hello World'),
(6, '2015-10-08', 'Task No #'),
(7, '2015-10-15', 'Salary day');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(3) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `SSN` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `fname`, `lname`, `SSN`, `email`, `username`, `password`) VALUES
(1, 'Sakthivel', 'Deivasigamani', '887-000-1234', 'sakthisiga@gmail.com', 'sakthisiga', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Ganesh', 'Krishnasamy', '998-098-1123', 'ganesh.jk@gmail.com', 'ganesh', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Saravanan', 'Santhanam', '889-009-9976', 'saravanan85@gmail.com', 'saravanan', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Anitha', 'Karunakaran', '887-999-2234', 'anianikgm@gmail.com', 'anitha', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'Mani', 'Kandan', '998-009-1111', 'maniam@sakthi.com', 'mani', '07cd55c7b42715ec44c133a6a165e8d2');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(3) NOT NULL,
  `product` varchar(30) NOT NULL,
  `price` double(4,2) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `product`, `price`, `quantity`) VALUES
(1, 'Mango', 1.23, 1),
(2, 'Mango', 1.23, 1),
(3, 'Orange', 3.45, 3),
(4, 'Orange', 3.45, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_values` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `option_name`, `option_values`) VALUES
(1, 'Rubber Ducky', '2.99', 'ducky.jpg', '', ''),
(2, 'Horse', '3400.00', 'horse.jpg', 'Color', 'white,black,green'),
(3, 'T-Shirt', '45.67', 'tshirt.jpg', 'Size', 'small,medium,large');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `phone` bigint(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=309 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `state`, `city`, `phone`) VALUES
(13, 'Ganesh Krishnasamy', 'California', 'Los Angeles', 4245589567),
(15, 'Anitha Karunakaran', 'Oregon', 'Portland', 9988777889),
(27, 'Sakthi', 'California', 'Torrance', 999999222),
(32, 'Sakthi', 'California', 'Torrance', 999999222),
(35, 'Sakthi', 'California', 'Torrance', 999999222),
(37, 'Sakthi', 'California', 'Torrance', 999999222),
(38, 'Sakthi', 'California', 'Torrance', 999999222),
(39, 'Sakthi', 'California', 'Torrance', 999999222),
(40, 'Sakthi', 'California', 'Torrance', 999999222),
(42, 'Sakthi', 'California', 'Torrance', 999999222),
(43, 'Sakthi', 'California', 'Torrance', 999999222),
(44, 'Sakthi', 'California', 'Torrance', 999999222),
(45, 'Sakthi', 'California', 'Torrance', 999999222),
(46, 'Sakthi', 'California', 'Torrance', 999999222),
(47, 'Sakthi', 'California', 'Torrance', 999999222),
(48, 'Sakthi', 'California', 'Torrance', 999999222),
(49, 'Sakthi', 'California', 'Torrance', 999999222),
(50, 'Sakthi', 'California', 'Torrance', 999999222),
(51, 'Sakthi', 'California', 'Torrance', 999999222),
(52, 'Sakthi', 'California', 'Torrance', 999999222),
(53, 'Sakthi', 'California', 'Torrance', 999999222),
(54, 'Sakthi', 'California', 'Torrance', 999999222),
(56, 'Sakthi', 'California', 'Torrance', 999999222),
(58, 'Sakthi', 'California', 'Torrance', 999999222),
(59, 'Sakthi', 'California', 'Torrance', 999999222),
(60, 'Sakthi', 'California', 'Torrance', 999999222),
(61, 'Sakthi', 'California', 'Torrance', 999999222),
(62, 'Sakthi', 'California', 'Torrance', 999999222),
(63, 'Sakthi', 'California', 'Torrance', 999999222),
(64, 'Sakthi', 'California', 'Torrance', 999999222),
(65, 'Sakthi', 'California', 'Torrance', 999999222),
(66, 'Sakthi', 'California', 'Torrance', 999999222),
(67, 'Sakthi', 'California', 'Torrance', 999999222),
(68, 'Sakthi', 'California', 'Torrance', 999999222),
(69, 'Sakthi', 'California', 'Torrance', 999999222),
(70, 'Sakthi', 'California', 'Torrance', 999999222),
(71, 'Sakthi', 'California', 'Torrance', 999999222),
(72, 'Sakthi', 'California', 'Torrance', 999999222),
(73, 'Sakthi', 'California', 'Torrance', 999999222),
(75, 'Sakthi', 'California', 'Torrance', 999999222),
(76, 'Sakthi', 'California', 'Torrance', 999999222),
(77, 'Sakthi', 'California', 'Torrance', 999999222),
(78, 'Sakthi', 'California', 'Torrance', 999999222),
(79, 'Sakthi', 'California', 'Torrance', 999999222),
(80, 'Sakthi', 'California', 'Torrance', 999999222),
(81, 'Sakthi', 'California', 'Torrance', 999999222),
(82, 'Sakthi', 'California', 'Torrance', 999999222),
(83, 'Sakthi', 'California', 'Torrance', 999999222),
(84, 'Sakthi', 'California', 'Torrance', 999999222),
(85, 'Sakthi', 'California', 'Torrance', 999999222),
(86, 'Sakthi', 'California', 'Torrance', 999999222),
(87, 'Sakthi', 'California', 'Torrance', 999999222),
(88, 'Sakthi', 'California', 'Torrance', 999999222),
(89, 'Sakthi', 'California', 'Torrance', 999999222),
(90, 'Sakthi', 'California', 'Torrance', 999999222),
(93, 'Sakthi', 'California', 'Torrance', 999999222),
(94, 'Sakthi', 'California', 'Torrance', 999999222),
(95, 'Sakthi', 'California', 'Torrance', 999999222),
(96, 'Sakthi', 'California', 'Torrance', 999999222),
(97, 'Sakthi', 'California', 'Torrance', 999999222),
(98, 'Sakthi', 'California', 'Torrance', 999999222),
(99, 'Sakthi', 'California', 'Torrance', 999999222),
(100, 'Sakthi', 'California', 'Torrance', 999999222),
(101, 'Sakthi', 'California', 'Torrance', 999999222),
(102, 'Sakthi', 'California', 'Torrance', 999999222),
(103, 'Sakthi', 'California', 'Torrance', 999999222),
(104, 'Sakthi', 'California', 'Torrance', 999999222),
(105, 'Sakthi', 'California', 'Torrance', 999999222),
(106, 'Sakthi', 'California', 'Torrance', 999999222),
(107, 'Sakthi', 'California', 'Torrance', 999999222),
(108, 'Sakthi', 'California', 'Torrance', 999999222),
(109, 'Sakthi', 'California', 'Torrance', 999999222),
(110, 'Sakthi', 'California', 'Torrance', 999999222),
(111, 'Sakthi', 'California', 'Torrance', 999999222),
(112, 'Sakthi', 'California', 'Torrance', 999999222),
(113, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(114, 'Sakthi', 'California', 'Torrance', 999999222),
(115, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(116, 'Anitha', 'Newyork', 'New York', 7878171839),
(117, 'Sakthi', 'California', 'Torrance', 999999222),
(118, 'Sakthi', 'California', 'Torrance', 999999222),
(119, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(120, 'Anitha', 'Newyork', 'New York', 7878171839),
(121, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(122, 'Sakthi', 'California', 'Torrance', 999999222),
(123, 'Sakthi', 'California', 'Torrance', 999999222),
(124, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(125, 'Anitha', 'Newyork', 'New York', 7878171839),
(126, 'Sakthi', 'California', 'Torrance', 999999222),
(127, 'Anitha', 'Newyork', 'New York', 7878171839),
(128, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(129, 'Sakthi', 'California', 'Torrance', 999999222),
(130, 'Anitha', 'Newyork', 'New York', 7878171839),
(131, 'Anitha', 'Newyork', 'New York', 7878171839),
(132, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(133, 'Anitha', 'Newyork', 'New York', 7878171839),
(134, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(135, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(136, 'Sakthi', 'California', 'Torrance', 999999222),
(137, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(138, 'Sakthi', 'California', 'Torrance', 999999222),
(139, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(141, 'Sakthi', 'California', 'Torrance', 999999222),
(142, 'Sakthi', 'California', 'Torrance', 999999222),
(143, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(144, 'Anitha', 'Newyork', 'New York', 7878171839),
(145, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(146, 'Sakthi', 'California', 'Torrance', 999999222),
(147, 'Sakthi', 'California', 'Torrance', 999999222),
(148, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(149, 'Anitha', 'Newyork', 'New York', 7878171839),
(150, 'Sakthi', 'California', 'Torrance', 999999222),
(151, 'Anitha', 'Newyork', 'New York', 7878171839),
(152, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(153, 'Sakthi', 'California', 'Torrance', 999999222),
(154, 'Anitha', 'Newyork', 'New York', 7878171839),
(156, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(157, 'Anitha', 'Newyork', 'New York', 7878171839),
(158, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(159, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(160, 'Sakthi', 'California', 'Torrance', 999999222),
(161, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(163, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(164, 'Anitha', 'Newyork', 'New York', 7878171839),
(165, 'Sakthi', 'California', 'Torrance', 999999222),
(166, 'Sakthi', 'California', 'Torrance', 999999222),
(167, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(168, 'Anitha', 'Newyork', 'New York', 7878171839),
(169, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(170, 'Sakthi', 'California', 'Torrance', 999999222),
(172, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(174, 'Sakthi', 'California', 'Torrance', 999999222),
(176, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(177, 'Sakthi', 'California', 'Torrance', 999999222),
(178, 'Anitha', 'Newyork', 'New York', 7878171839),
(179, 'Anitha', 'Newyork', 'New York', 7878171839),
(180, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(181, 'Anitha', 'Newyork', 'New York', 7878171839),
(182, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(183, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(184, 'Sakthi', 'California', 'Torrance', 999999222),
(185, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(186, 'Sakthi', 'California', 'Torrance', 999999222),
(187, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(188, 'Anitha', 'Newyork', 'New York', 7878171839),
(189, 'Sakthi', 'California', 'Torrance', 999999222),
(190, 'Sakthi', 'California', 'Torrance', 999999222),
(191, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(192, 'Anitha', 'Newyork', 'New York', 7878171839),
(193, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(195, 'Sakthi', 'California', 'Torrance', 999999222),
(196, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(197, 'Anitha', 'Newyork', 'New York', 7878171839),
(198, 'Sakthi', 'California', 'Torrance', 999999222),
(199, 'Anitha', 'Newyork', 'New York', 7878171839),
(200, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(201, 'Sakthi', 'California', 'Torrance', 999999222),
(202, 'Anitha', 'Newyork', 'New York', 7878171839),
(203, 'Anitha', 'Newyork', 'New York', 7878171839),
(204, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(206, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(207, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(208, 'Sakthi', 'California', 'Torrance', 999999222),
(209, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(210, 'Sakthi', 'California', 'Torrance', 999999222),
(211, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(212, 'Anitha', 'Newyork', 'New York', 7878171839),
(213, 'Sakthi', 'California', 'Torrance', 999999222),
(214, 'Sakthi', 'California', 'Torrance', 999999222),
(215, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(216, 'Anitha', 'Newyork', 'New York', 7878171839),
(217, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(218, 'Sakthi', 'California', 'Torrance', 999999222),
(219, 'Sakthi', 'California', 'Torrance', 999999222),
(220, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(221, 'Anitha', 'Newyork', 'New York', 7878171839),
(222, 'Sakthi', 'California', 'Torrance', 999999222),
(223, 'Anitha', 'Newyork', 'New York', 7878171839),
(225, 'Sakthi', 'California', 'Torrance', 999999222),
(226, 'Anitha', 'Newyork', 'New York', 7878171839),
(227, 'Anitha', 'Newyork', 'New York', 7878171839),
(228, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(229, 'Anitha', 'Newyork', 'New York', 7878171839),
(230, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(231, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(232, 'Sakthi', 'California', 'Torrance', 999999222),
(233, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(234, 'Sakthi', 'California', 'Torrance', 999999222),
(235, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(236, 'Anitha', 'Newyork', 'New York', 7878171839),
(237, 'Sakthi', 'California', 'Torrance', 999999222),
(239, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(240, 'Anitha', 'Newyork', 'New York', 7878171839),
(241, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(242, 'Sakthi', 'California', 'Torrance', 999999222),
(243, 'Sakthi', 'California', 'Torrance', 999999222),
(244, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(245, 'Anitha', 'Newyork', 'New York', 7878171839),
(246, 'Sakthi', 'California', 'Torrance', 999999222),
(247, 'Anitha', 'Newyork', 'New York', 7878171839),
(249, 'Sakthi', 'California', 'Torrance', 999999222),
(250, 'Anitha', 'Newyork', 'New York', 7878171839),
(251, 'Anitha', 'Newyork', 'New York', 7878171839),
(252, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(253, 'Anitha', 'Newyork', 'New York', 7878171839),
(254, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(255, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(256, 'Sakthi', 'California', 'Torrance', 999999222),
(257, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(259, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(260, 'Anitha', 'Newyork', 'New York', 7878171839),
(261, 'Sakthi', 'California', 'Torrance', 999999222),
(262, 'Sakthi', 'California', 'Torrance', 999999222),
(263, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(264, 'Anitha', 'Newyork', 'New York', 7878171839),
(265, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(266, 'Sakthi', 'California', 'Torrance', 999999222),
(267, 'Sakthi', 'California', 'Torrance', 999999222),
(268, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(269, 'Anitha', 'Newyork', 'New York', 7878171839),
(270, 'Sakthi', 'California', 'Torrance', 999999222),
(271, 'Anitha', 'Newyork', 'New York', 7878171839),
(272, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(273, 'Sakthi', 'California', 'Torrance', 999999222),
(274, 'Anitha', 'Newyork', 'New York', 7878171839),
(275, 'Anitha', 'Newyork', 'New York', 7878171839),
(276, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(277, 'Anitha', 'Newyork', 'New York', 7878171839),
(278, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(279, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(280, 'Sakthi', 'California', 'Torrance', 999999222),
(281, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(282, 'Sakthi', 'California', 'Torrance', 999999222),
(283, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(284, 'Anitha', 'Newyork', 'New York', 7878171839),
(286, 'Sakthi', 'California', 'Torrance', 999999222),
(288, 'Anitha', 'Newyork', 'New York', 7878171839),
(289, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(290, 'Sakthi', 'California', 'Torrance', 999999222),
(291, 'Sakthi', 'California', 'Torrance', 999999222),
(293, 'Anitha', 'Newyork', 'New York', 7878171839),
(294, 'Sakthi', 'California', 'Torrance', 999999222),
(296, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(298, 'Anitha', 'Newyork', 'New York', 7878171839),
(299, 'Anitha', 'Newyork', 'New York', 7878171839),
(300, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(302, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(303, 'Mani', 'Wisconsin', 'Milwauke', 772651632),
(304, 'Sakthi', 'California', 'Torrance', 999999222),
(305, 'Sakthi', 'California', 'Torrance', 999999222),
(306, 'Sakthi', 'California', 'Torrance', 999999222),
(307, 'Kannan', 'Erode', 'Erode', 9988777653),
(308, 'Moorthi', 'Thirupur', 'Thirupur', 999911234);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `ssn` varchar(13) NOT NULL,
  `place` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `type` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `ssn`, `place`, `email`, `phone`, `username`, `type`) VALUES
(1, 'Sakthivel', 'Deivasigamani', '899-344-2145', '', '', '', '', 0),
(2, 'Anitha', 'Karunakaran', '987-409-0334', '', '', '', '', 0),
(3, 'Prakash', 'Ramasamy', '655-345-2239', '', '', '', '', 0),
(4, 'Suresh', 'Tulasimani', '998-333-2212', '', '', '', '', 0),
(5, 'Moorthi', 'Babu', '878-377-1009', '', '', '', '', 0),
(6, 'Mani', 'Ram', '444-000-9987', 'Chennai', 'mani@ram.com', '99878777381', 'mani', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=309;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
