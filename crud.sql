-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 10:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `description` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`) VALUES
(8, '123', '123', '123'),
(13, 'fwafaw', 'fwafaw', 'fwafaw'),
(14, 'Test login', 'test login', 'test login'),
(19, '321', '321', '321'),
(20, '12512', '12521', '215215112'),
(21, '12345', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Andrei Alexandru Florin', '123@yahoo.com', '$2y$10$R7zu9nM/MA7XAn.vfoqoqeF46NeADLT8pbDWrkJMXoHOYS0nb4jxO'),
(2, 'Andrei Alexandru Florin test', 'test@yahoo.com', '$2y$10$nFI0X2nb138EMDn6.tMaOOS2RfXEMCrO6X5T6BqgEw1parZvnTUCu'),
(3, 'Andrei', 'andrei@yahoo.com', '$2y$10$V/PhqohYWHR.Q.8ikIL0cOxVA0e8xcxWoTmFqLiPYC3VdPSkfrH4G'),
(4, 'Test Final', 'testfinal@yahoo.com', '$2y$10$3hN5SSCtJKQket4jSOgLLebPqrBwjNaMOPTRGcL9d.nOnW0KyOYpi'),
(5, '12345', '12345@yahoo.com', '$2y$10$EAnL4QSwjXSp6tH3N02DkOmfqKi8JuyoVgQ2rL8ImQtATSHpVkULu'),
(6, 'Florin', 'florin@yahoo.com', '$2y$10$cNNBzjCq/n7rNmoP3DIx8Ob1R336qX7o8J0ibMjvE0gFZ7tiJQr06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
