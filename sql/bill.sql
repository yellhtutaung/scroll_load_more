-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 10:32 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_type`
--

CREATE TABLE `card_type` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(5) NOT NULL,
  `b_amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_type`
--

INSERT INTO `card_type` (`b_id`, `b_name`, `b_amount`) VALUES
(1, '1000', 1000),
(2, '3000', 3000),
(3, '5000', 5000),
(4, '10000', 10000),
(5, '30000', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `l_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `l_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`l_id`, `t_id`, `u_id`, `l_time`) VALUES
(2, 18, 2, '2018-04-04 09:01:53'),
(3, 23, 2, '2018-04-04 09:03:37'),
(4, 25, 2, '2018-04-04 09:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `t_id` int(11) NOT NULL,
  `t_status` int(1) NOT NULL DEFAULT '0',
  `no` varchar(8) NOT NULL,
  `amount` int(11) NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`t_id`, `t_status`, `no`, `amount`, `expire`) VALUES
(1, 1, '03x5a7qn', 3000, '2017-00-00'),
(2, 1, 'vt7345ru', 3000, '2017-00-00'),
(3, 1, '0x2qso59', 3000, '2017-00-00'),
(4, 1, '00c6hw8p', 5000, '2017-00-00'),
(5, 1, '4n51ez1r', 5000, '2017-00-00'),
(6, 1, 'p91zyo76', 3000, '2019-00-00'),
(7, 1, 'y6rp0j19', 5000, '2019-00-00'),
(8, 1, '6l1znp93', 10000, '2019-00-00'),
(9, 1, '2q9qi1s7', 1000, '2019-00-00'),
(10, 1, '0s39hbb5', 1000, '2019-00-00'),
(11, 1, '61z9q1wg', 3000, '2019-00-00'),
(12, 1, 't3du00v7', 5000, '2019-00-00'),
(13, 1, '217z9wqo', 5000, '2019-00-00'),
(14, 1, '95wc13bq', 1000, '2019-00-00'),
(15, 1, '135hnup9', 3000, '2019-00-00'),
(16, 1, 'u79cbo75', 10000, '2019-00-00'),
(17, 1, '7fao8w50', 1000, '2019-00-00'),
(18, 1, '5oj60b6y', 5000, '2019-00-00'),
(19, 1, '7u054tzb', 3000, '2019-00-00'),
(20, 1, 'et54uo03', 3000, '2019-00-00'),
(21, 1, '24q86pjv', 3000, '2019-00-00'),
(22, 1, '9ft62lo2', 3000, '2019-00-00'),
(23, 1, '8vmrw135', 1000, '2019-00-00'),
(24, 1, '2d92ika9', 5000, '2019-00-00'),
(25, 1, '99kbpi67', 5000, '2019-00-00'),
(26, 1, 'c3ws8b65', 5000, '2019-00-00'),
(27, 1, 'a883efe5', 3000, '2019-00-00'),
(28, 1, '5b5a2j7d', 5000, '2019-00-00'),
(29, 1, '85x47jwi', 3000, '2019-00-00'),
(30, 1, 'bd78y81f', 1000, '2019-00-00'),
(31, 1, 'anj6g753', 3000, '2019-00-00'),
(32, 1, 'b490k2tx', 10000, '2019-00-00'),
(33, 1, 'het14q83', 3000, '2019-00-00'),
(34, 1, 'rocg3751', 1000, '2019-00-00'),
(35, 1, 'm4bw073u', 5000, '2019-00-00'),
(36, 1, '4dsw385h', 3000, '2019-00-00'),
(37, 1, 'tp05y6i0', 10000, '2019-00-00'),
(38, 1, 'gk4869we', 5000, '2019-00-00'),
(39, 1, 'x2d77u7a', 3000, '2019-00-00'),
(40, 1, 'r4u1gj44', 10000, '2019-00-00'),
(41, 1, 'mx07u9c8', 3000, '2019-00-00'),
(42, 1, 't5v181al', 3000, '2019-00-00'),
(43, 1, '99mq5ki2', 1000, '2019-00-00'),
(44, 1, '669lpwp0', 3000, '2019-00-00'),
(45, 1, 'hy00mt95', 5000, '2019-00-00'),
(46, 1, 'o669ct8d', 10000, '2019-00-00'),
(47, 1, '8n94n7rj', 3000, '2019-00-00'),
(48, 1, '81xx3j9c', 5000, '2019-00-00'),
(49, 1, '8co453so', 1000, '2019-00-00'),
(50, 1, '4yc992ka', 5000, '2019-00-00'),
(51, 1, 's05h9ca6', 5000, '2019-00-00'),
(52, 1, 'rx83yf93', 5000, '2019-00-00'),
(53, 1, '66e9u2rs', 10000, '2019-00-00'),
(54, 1, 'z072mwp7', 3000, '2019-00-00'),
(55, 1, 'ar24n38j', 1000, '2019-00-00'),
(56, 1, '4zg90lq4', 3000, '2019-00-00'),
(57, 1, 'np1vn460', 3000, '2019-00-00'),
(58, 1, '7e919oae', 3000, '2019-00-00'),
(59, 1, 'kup850v1', 3000, '2019-00-00'),
(60, 1, 'w3x8r81u', 5000, '2019-00-00'),
(61, 1, 'xw42lf94', 3000, '2019-00-00'),
(62, 1, 'w3e5y70r', 5000, '2019-00-00'),
(63, 1, 'l847pnz3', 1000, '2019-00-00'),
(64, 1, 'gq1es531', 10000, '2019-00-00'),
(65, 1, 't64zi1a4', 3000, '2019-00-00'),
(66, 1, 'ux3k43i3', 3000, '2019-00-00'),
(67, 1, '4s0ttg31', 3000, '2019-00-00'),
(68, 1, '4l9e3to0', 10000, '2019-00-00'),
(69, 1, 'qn400a5j', 3000, '2019-00-00'),
(70, 1, 'ay5m474p', 1000, '2019-00-00'),
(71, 1, '01hrf21v', 3000, '2019-00-00'),
(72, 1, '5jyb20j6', 5000, '2019-00-00'),
(73, 1, '39m8loe2', 3000, '2019-00-00'),
(74, 1, '3ohx36a1', 10000, '2019-00-00'),
(75, 1, 'z5q95jq2', 10000, '2019-00-00'),
(76, 1, 's0256rsl', 10000, '2019-00-00'),
(77, 1, 'f0lg40e4', 5000, '2019-00-00'),
(78, 1, '5es84dx3', 3000, '2019-00-00'),
(79, 1, '880mvnz2', 5000, '2019-00-00'),
(80, 1, '4sb5y7h4', 3000, '2019-00-00'),
(81, 1, '9ss414ir', 1000, '2019-00-00'),
(82, 1, '1z2f45jg', 10000, '2019-00-00'),
(83, 1, 'u97axp46', 10000, '2019-00-00'),
(84, 1, '0p88gs0k', 3000, '2019-00-00'),
(85, 1, 'mq5u712q', 1000, '2019-00-00'),
(86, 1, '5bs31rv6', 1000, '2019-00-00'),
(87, 1, '4z500fqp', 10000, '2019-00-00'),
(88, 1, 'e7g29fj6', 3000, '2019-00-00'),
(89, 1, 'yi5fd691', 5000, '2019-00-00'),
(90, 1, '4e7te74z', 5000, '2019-00-00'),
(91, 1, 'ho00fk57', 10000, '2019-00-00'),
(92, 1, 'w5e459vf', 1000, '2019-00-00'),
(93, 1, '5ga3kw11', 5000, '2019-00-00'),
(94, 1, '82pi20vd', 10000, '2019-00-00'),
(95, 1, '4stjr067', 3000, '2019-00-00'),
(96, 1, 'b91p5j3r', 5000, '2019-00-00'),
(97, 1, '4s41ilg5', 5000, '2019-00-00'),
(98, 1, 'r279w1wz', 3000, '2019-00-00'),
(99, 1, '964uaa4y', 3000, '2019-00-00'),
(100, 1, 'tuz45u02', 1000, '2019-00-00'),
(101, 1, 'nfrw1469', 1000, '2019-00-00'),
(102, 1, '80a77ujk', 10000, '2019-00-00'),
(103, 1, '62voze36', 3000, '2019-00-00'),
(104, 1, 'i5e112ak', 5000, '2019-00-00'),
(105, 1, '4d3v91cg', 3000, '2019-00-00'),
(106, 1, '0402iwgm', 10000, '2019-00-00'),
(107, 1, '8dc3b8c9', 1000, '2019-00-00'),
(108, 1, '592gn3cl', 3000, '2019-00-00'),
(109, 1, 'l4i7i1a2', 3000, '2019-00-00'),
(110, 1, 'ot72or51', 3000, '2019-00-00'),
(111, 1, 'g0z94t5e', 10000, '2019-00-00'),
(112, 1, '4l32c6lu', 3000, '2019-00-00'),
(113, 1, '790faqx9', 1000, '2019-00-00'),
(114, 1, '7z4t8r6e', 5000, '2019-00-00'),
(115, 1, 'sf8218oj', 10000, '2019-00-00'),
(116, 1, '79z3d8lv', 1000, '2019-00-00'),
(117, 1, '8x51km8h', 1000, '2019-00-00'),
(118, 1, '8eo639uh', 1000, '2019-00-00'),
(119, 1, 'l4sh3u67', 5000, '2019-00-00'),
(120, 1, '38z1dp1f', 5000, '2019-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `u_role` int(1) NOT NULL,
  `u_balance` int(6) NOT NULL,
  `u_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `uname`, `pass`, `u_role`, `u_balance`, `u_status`) VALUES
(1, 'Hein Htet Zan', 'kohtet', 'kohtet', 1, 10000, 1),
(2, 'Yell Htut', 'yellyell', 'yellyell', 2, 15200, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_type`
--
ALTER TABLE `card_type`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_type`
--
ALTER TABLE `card_type`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
