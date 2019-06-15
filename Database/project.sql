-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 05:32 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vkey` varchar(50) NOT NULL,
  `verified` tinyint(1) DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `username`, `email`, `phone`, `password`, `vkey`, `verified`, `reg_date`) VALUES
(1, 'Admin', 'Demo', 'admin', 'bulangu97@gmail.com', '08099575767', '21232f297a57a5a743894a0e4a801fc3', '647489df1b96829e202085c8b86271ba', 1, '2019-06-10 22:01:26'),
(2, 'Admin', 'Demo', '12345678', 'bulangu97@gmail.com', '08099575767', '202cb962ac59075b964b07152d234b70', 'b3cdbdbfc072f9041f9c986a6b3e6d2b', 0, '2019-06-12 10:47:52'),
(3, 'AMINU', 'MM', 'aminu', 'aminumuhammed97@yahoo.com', '08099575767', 'e10adc3949ba59abbe56e057f20f883e', 'fddd5a5fb1407f7f2e84885a34793639', 0, '2019-06-12 10:57:50'),
(4, 'AMINU', 'MM', 'demodemo', 'aminumuhammed97@yahoo.com', '08099575767', '202cb962ac59075b964b07152d234b70', '99521155f8c0fab158a43128182d9b7a', 0, '2019-06-12 11:14:25'),
(5, 'AMINU', 'MM', 'bbbbbb', 'aminumuhammed97@yahoo.com', '08099575767', '202cb962ac59075b964b07152d234b70', '58b47c59ee15c164bd7c7b228af4c8f0', 0, '2019-06-12 12:47:02'),
(6, 'AMINU', 'MM', 'bbbbbb', 'aminumuhammed97@yahoo.com', '08099575767', '202cb962ac59075b964b07152d234b70', '0743077826e2568680d29b5819d2f52b', 0, '2019-06-12 12:49:27'),
(7, 'AMINU', 'MM', 'bbbbbb', 'aminumuhammed97@yahoo.com', '08099575767', '202cb962ac59075b964b07152d234b70', '50d38584177a6e6bd0841f8d32dfa390', 0, '2019-06-12 12:53:22'),
(8, 'AMINU', 'MM', 'bbbbbb', 'aminumuhammed97@yahoo.com', '08099575767', '202cb962ac59075b964b07152d234b70', '0d2007ce70a17c526c47880fc120bffe', 0, '2019-06-12 12:54:29'),
(9, 'AMINU', 'MM', 'bbbbbb', 'aminumuhammed97@yahoo.com', '08099575767', '202cb962ac59075b964b07152d234b70', 'd7094e33ffac2af2ee14910c817b51a5', 0, '2019-06-12 17:51:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
