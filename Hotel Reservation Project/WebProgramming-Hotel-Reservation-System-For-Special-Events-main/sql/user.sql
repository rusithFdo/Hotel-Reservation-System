-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 02:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `lastLogIn` datetime NOT NULL,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`, `lastLogIn`, `isDeleted`) VALUES
(1, 'hansaka', 'Sudusinghe', 'hansakasudusinghe@gmail.com', '989c5c88ae8cb90e2219c9f124ca4e816d7fa0c6', '2022-05-04 21:19:38', 0),
(2, 'Chamal', 'Samarawickrama', 'hansakajayawarna@gmail.com', 'cba710c6eac68d4450ae1f3e3f1a2a1b8ff1c1dd', '0000-00-00 00:00:00', 0),
(3, 'Sahan', 'Weerasinghe', 'isurubag@gmail.com', '435e3ba2c6346c6b4dce056a933e511e1f78286b', '0000-00-00 00:00:00', 0),
(4, 'Aloka', 'sathishan', 'isurubag@gmail.com', '435e3ba2c6346c6b4dce056a933e511e1f78286b', '0000-00-00 00:00:00', 0),
(5, 'Lakmal', 'Niranjan', 'cccc@gmail.com', '435e3ba2c6346c6b4dce056a933e511e1f78286b', '0000-00-00 00:00:00', 0),
(6, 'Dilshan', 'Ranjan', 'chgfdjhic@gmail.com', '435e3ba2c6346c6b4dce056a933e511e1f78286b', '0000-00-00 00:00:00', 0),
(8, 'saman', 'Rathnapriya', 'isuri602@gmail.com', ' e2c9e935c4907f0232cfe73a32d7205488da4606', '0000-00-00 00:00:00', 0),
(10, 'Hansaka', 'Sudusinghe', 'hansakajayawarna@gmail.com', ' f1bc47067f5f36b6893cd9fce0e22e8d4cba9209', '0000-00-00 00:00:00', 0),
(12, 'Kamal', 'Gunarathne', 'kaal12345@gmail.com', ' ef344ffb78aee0f0d4df7655167b93ea9182016d', '0000-00-00 00:00:00', 0),
(13, 'Rusith', 'Fernando', 'rusith123@gmail.com', ' 989c5c88ae8cb90e2219c9f124ca4e816d7fa0c6', '0000-00-00 00:00:00', 0),
(14, 'Kamal', 'Gunarathne', 'test@gmail.com', ' f16bd521076a2646b2c431b1254400600001e538', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
