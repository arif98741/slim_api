-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 11:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slimapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `name`, `publisher`) VALUES
(53, 'Et Neque Reiciendis.', 'Dr. Jessyca O\'Hara'),
(54, 'Possimus Rerum Et.', 'Dr. Daisha Prosacco IV'),
(55, 'Iure Tenetur Et.', 'Sanford Johnson'),
(56, 'Autem Officiis.', 'Cindy Schulist III'),
(57, 'Quia Rerum Ullam.', 'Kacey Barrows'),
(58, 'Mollitia Atque Eum.', 'Julien Hessel IV'),
(59, 'Praesentium.', 'Dr. Pedro Heller DDS'),
(60, 'Iure Mollitia.', 'Mr. Dashawn Kuhlman'),
(61, 'Esse Distinctio Et.', 'Roy Funk DVM'),
(62, 'Quam Laboriosam.', 'Dr. Ronaldo Kessler');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `state` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `phone`, `email`, `address`, `city`, `state`) VALUES
(111, 'Santa', 'Kshlerin', '86853010', 'qrutherford@brown.maori.nz', '3 McClure Hill, Wellingtonville, Tasman, 1712', 'Estellston', 'Kentucky'),
(112, 'Jonas', 'Witting', '72032346', 'klocko.kyra@gulgowski.net.nz', '8 Luna Crescent, Maxineston, Taranaki, 8107', 'Graysonville', 'Illinois'),
(113, 'Lavern', 'Jast', '81932527', 'ypredovic@gmail.com', '8 Wehner Line, Benedictville, Otago, 3581', 'Braedenston', 'Nebraska'),
(114, 'Giovanny', 'Stroman', '85750182', 'korn@dickinson.nz', '185 Jovan Close, Lloydville, Tasman, 6653', 'Alethaston', 'Texas'),
(115, 'Chet', 'Hansen', '75591466', 'alia37@hotmail.com', '9 Hackett Court, Juanaville, Taranaki, 3876', 'Alethaston', 'North Dakota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
