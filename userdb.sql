-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 03:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_type` varchar(250) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(14, 'Eugene Nyirenda ', 'eugenenyirenda09@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', 'admin'),
(15, 'IAN CHITUMBA', 'ianchitumba@gmail.com', 'f1c1592588411002af340cbaedd6fc33', 'user'),
(16, 'Racheal ', 'racheal@gmail.com', 'f1c1592588411002af340cbaedd6fc33', 'user'),
(17, 'james ', 'james@gmail.com ', 'f1c1592588411002af340cbaedd6fc33', 'user'),
(18, 'Eugene Nyirenda ', 'eugenenyirenda9@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', 'user'),
(19, 'Racheal ', 'racheal@gmail.com ', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'user'),
(20, 'Taonga', 'taonga@gmail.com', '934b535800b1cba8f96a5d72f72f1611', 'user'),
(21, 'joyce', 'joyce@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'user'),
(22, 'moses', 'moses@gmail.com', 'bcbe3365e6ac95ea2c0343a2395834dd', 'admin'),
(23, 'eugene', 'eugene@gmail.com', '24389bfe4fe2eba8bf9aa9203a44cdad', 'user'),
(24, 'Agnes Banda', 'agnesbanda@gmail.com', 'ae2bac2e4b4da805d01b2952d7e35ba4', 'admin'),
(25, 'Peter', 'peter@gmail.com', 'b706835de79a2b4e80506f582af3676a', 'user'),
(26, 'Eugene Nyirenda ', 'eugenenyirenda1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(27, 'Mike', 'mike@gmail.com', '0a113ef6b61820daa5611c870ed8d5ee', 'admin'),
(28, 'EUGENE NYIRENDA', 'eugenenyirenda9@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab', 'user'),
(29, 'emm', 'emm@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 'user'),
(30, 'titus', 'titus@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'admin'),
(31, 'james ', 'james1@gmail.com ', '310dcbbf4cce62f762a2aaa148d556bd', 'user'),
(32, 'males', 'males@gmail.com', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
