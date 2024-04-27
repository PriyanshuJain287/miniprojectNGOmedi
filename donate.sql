-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 11:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `medname` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `exp_date` date NOT NULL,
  `quan` text NOT NULL,
  `manufact` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`medname`, `type`, `exp_date`, `quan`, `manufact`) VALUES
('Zs', 'Tablets', '2024-04-02', '2 gms', 'adidas'),
('Zs', 'Capsules', '2026-09-01', '2 gms', 'adidas'),
('Zs', 'Tablets', '2024-04-10', '2 gms', 'adidas'),
('wee', 'Ointment/Cream', '2025-10-02', '100ml', 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `username` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `phone` bigint(10) NOT NULL,
  `id` int(11) NOT NULL,
  `reg_id` int(40) NOT NULL,
  `a_phone` bigint(10) NOT NULL,
  `website` text NOT NULL,
  `email` text NOT NULL,
  `area` varchar(40) NOT NULL,
  `pin` int(40) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`username`, `address`, `phone`, `id`, `reg_id`, `a_phone`, `website`, `email`, `area`, `pin`, `password`) VALUES
('testngo', '123, abcddddddd', 2344444444, 1, 0, 0, 'https://www.testngocare.com', 'testngo@gmail.com', 'Mumbai Suburban', 400078, '$2y$10$aNEbeDYBfFAONVfHNdh5nOG9NHUfLr92e'),
('testngo2', '123, abc', 1234567890, 2, 0, 0, 'https://www.testngocare2.com', 'testngo2@gmail.com', 'Mumbai Suburban', 400078, '$2y$10$DWTEtGSWFKfuNFwLbR/fpOpLt9JeMGC7V'),
('ngotest', '123, abcdefg', 1111222234, 3, 0, 0, 'https://www.ngotest.com', 'ngotest@gmail.com', 'Mumbai Suburban', 400078, '$2y$10$YIR9KfznbRld3frbNSELOeqw9ZSC/yfXl');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `age` int(11) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` text NOT NULL,
  `area` text NOT NULL,
  `pin` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `age`, `phone`, `address`, `area`, `pin`, `id`, `email`) VALUES
('priyanshu', '$2y$10$J3qIHqgasEZ6kd6GPXoal.Qt41KTg.4NEPPAJ9rfe/YFTR29Yx9V6', 20, 2147483647, '123, abc', 'Mumbai Suburban', 400078, 0, ''),
('testdonor', '$2y$10$euyGbbnDsjtu.0l5mdQ60u/2EazQcL5OsZQzp.v2QGwDBW0KIt6Ga', 20, 1234567890, '123, abcddddddd', 'Mumbai Suburban', 400078, 0, 'testdonor@gmail.com'),
('testngo3', '$2y$10$uIId.oB0LDnb4HZm8ZHR7OTOynSb5FRROhYPpaoM1jn4hOjN/ikH.', 33, 1111222234, '123, abc', 'Mumbai Suburban', 400078, 167, 'testngo3@gmail.com'),
('pabs', '$2y$10$9MJitfsN4Y6C75paM1Lj1.HAXw9ZPlqfBTfdWaKfTo7hq6ZrCqTTa', 19, 8830921356, 'sandipani hostel, SVU', 'Mumbai Suburban', 400077, 0, 'prabhat.p@somaiya.edu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
