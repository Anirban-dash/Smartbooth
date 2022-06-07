-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 08:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_booth`
--

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE `election` (
  `e_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `p_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `leader` varchar(255) DEFAULT NULL,
  `member1` varchar(255) DEFAULT NULL,
  `member2` varchar(255) DEFAULT NULL,
  `member3` varchar(255) DEFAULT NULL,
  `member4` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `voter` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `smart_id` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `aadhar`, `voter`, `dob`, `gender`, `mail`, `mobile`, `pincode`, `state`, `city`, `smart_id`, `photo`, `pass`) VALUES
(701, 'Anirban Dash', '2313243435', '34245454657', '2011-06-09', 'male', 'anirbandash.cse.2019@nist.edu', '6297906377', '721505', 'West Bengal', 'Jhargram', '2022WB70143', 'User-Profile.png', 'Ao63WJeq'),
(702, 'Anirban Dash', '2313243435', '34245454657', '2011-06-09', 'male', 'anirbandash.cse.2019@nist.edu', '6297906377', '721505', 'West Bengal', 'Jhargram', '2022WB70211', 'User-Profile.png', 'XnzwudFT'),
(703, 'Anirban Dash', '34353454645', '456456456456', '2019-01-30', 'male', 'dashanirban275@gmail.com', '6297906377', '721505', 'West Bengal', 'Jhargram', '2022WB70398', 'vue-color-avatar.png', 'UM6q2n47'),
(704, 'Swadhin Mahapatro', '324535346457', '35435454545', '2022-06-30', 'male', 'sssss@gmail.com', '2345675566', '847832', 'Bihar', 'Berhampore', '2022BH70411', '27900313.jpg', '7j19iJo5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `election`
--
ALTER TABLE `election`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `election`
--
ALTER TABLE `election`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=705;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
