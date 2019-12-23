-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2017 at 05:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wadproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `Checkout`
--

CREATE TABLE `Checkout` (
  `name` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `add1` varchar(50) DEFAULT NULL,
  `add2` varchar(50) DEFAULT NULL,
  `ToAdd` varchar(80) DEFAULT NULL,
  `del_date` varchar(50) DEFAULT NULL,
  `del_time` varchar(20) NOT NULL,
  `R_name` varchar(50) DEFAULT NULL,
  `R_phone` int(11) DEFAULT NULL,
  `S_req` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` varchar(4) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `fprice` varchar(6) NOT NULL,
  `fpic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `fname`, `fprice`, `fpic`) VALUES
('c1', 'Black Forest Cake', 'RM 4', 'images/c1.jpg'),
('c2', 'Chocolate Indulgence Cake', 'RM 6', 'images/c2.jpg'),
('c3', 'Red Velvet Cake', 'RM 5', 'images/c3.jpg'),
('c4', 'Rainbow Cake', 'RM 5', 'images/c4.jpg'),
('c5', 'Oreo Cheesecake', 'RM 6', 'images/c5.jpg'),
('h1', 'Hokkaido Cupcake (Chocolate)', 'RM 4', 'images/h1.jpg'),
('na1', 'Beef Briyani Rice', 'RM 7', 'images/na1.jpg'),
('na2', 'Lamb Briyani Rice', 'RM 8', 'images/na2.jpg'),
('na3', 'Grilled Chicken Briyani Rice', 'RM 6', 'images/na3.jpg'),
('p1', 'Chicken Crunchy Pizza', 'RM 16', 'images/p1.jpg'),
('p2', 'Chicken Special Crunchy Pizza', 'RM 20', 'images/p2.jpg'),
('p3', 'Meat Crunchy Pizza', 'RM 16', 'images/p3.jpg'),
('p4', 'Meat Special Crunchy Pizza', 'RM 20', 'images/p4.jpg'),
('p5', 'Mix Crunchy Pizza', 'RM 18', 'images/p5.jpg'),
('p6', 'Blackpepper Vegee', 'RM 25', 'images/p6.jpg'),
('p7', 'Blackpepper Veege', 'RM 20', 'images/p7.jpg'),
('wf1', 'Grilled Salmon ', 'RM 14', 'images/wf1.jpg'),
('wf2', 'Fish And Chips', 'RM 10', 'images/wf2.jpg'),
('wf3', 'Butter Chicken Grill', 'RM 13', 'images/wf3.jpg'),
('wf4', 'Black Pepper Grilled Beef', 'RM 14', 'images/wf4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE `subs` (
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`email`) VALUES
('l'),
('li@gmail.com'),
('noralanarosli@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('aa', 'la@gmail.com', 'c9089f3c9adaf0186f6ffb1ee8d650'),
('alana', 'noralanarosli@gmail.com', '8e11fa010d298eb03348b379d4f957'),
('ama', 'li@gmail.com', '7ce8636c076f5f42316676f7ca5ccf'),
('amal', 'lo@gmail.com', '2e3817293fc275dbee74bd71ce6eb0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Checkout`
--
ALTER TABLE `Checkout`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_2` (`password`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
