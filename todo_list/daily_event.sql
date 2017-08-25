-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 03:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `todo_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_event`
--

CREATE TABLE IF NOT EXISTS `daily_event` (
`id` int(10) NOT NULL,
  `taskName` varchar(200) NOT NULL,
  `startTask` date NOT NULL,
  `endTask` date NOT NULL,
  `taskTime` time NOT NULL,
  `taskDesc` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_event`
--

INSERT INTO `daily_event` (`id`, `taskName`, `startTask`, `endTask`, `taskTime`, `taskDesc`) VALUES
(33, 'C++ and PHP', '2018-10-01', '2019-02-01', '10:21:00', 'I love C++'),
(34, 'YII Framework and Laravel', '2017-07-01', '2017-07-20', '10:10:00', 'I want to know YII framework. I am very in need of it'),
(35, 'Going for training', '2017-10-07', '2017-11-08', '10:02:00', 'I want to go for programming training. '),
(36, 'YII Framework Assignment', '2017-06-15', '2017-06-20', '12:00:00', 'I have yii frament assignment to do. to built a guest book.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_event`
--
ALTER TABLE `daily_event`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_event`
--
ALTER TABLE `daily_event`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
