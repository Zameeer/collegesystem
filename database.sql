-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 06:04 AM
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `lab_id` varchar(7) NOT NULL,
  `mouse` int(3) NOT NULL,
  `monitor` int(3) NOT NULL,
  `cpu` int(3) NOT NULL,
  `keyboard` int(2) NOT NULL,
  `printer` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lab_id`, `mouse`, `monitor`, `cpu`, `keyboard`, `printer`) VALUES
('lab-1', 21, 32, 43, 17, 14),
('lab-11', 2, 34, 23, 12, 1),
('lab-4', 69, 65, 69, 10, 0),
('lab-5', 544, 2, 3, 4, 5),
('lab-9', 0, 0, 0, 0, 0),
('lap-10', 16, 3, 7, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(2) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'John', 'Doe', 'john@gmail.com', '123'),
(2, 'John', 'Doe', 'john1@gmail.com', '123'),
(3, 'Sultan', 'Mirza', 'bambayi@meri.jan', 'white'),
(4, 'Jimmy', 'Carl', 'jimmycarl@jimmy.com', 'jimmy123'),
(5, 'Zameer', 'Ansari', '32zam@zam.com', 'zameer');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_name` text NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_email`, `s_phone`) VALUES
(1, 'Zameer Ansari', '32zameeransari@gmail.com', 9588633193),
(2, 'Rowdy Rathore', 'rara@gmail.com', 1733141733),
(3, 'Sallu Khan', 'sk2@gmail.com', 1234567890),
(4, 'sanskar', 'sansu@gmail.com', 993480741),
(5, 'Nilesh Gond', 'nlg@nl.com', 9876545678),
(6, 'Zishan', 'zn@gmail.com', 3028943465),
(7, 'Zane Singh', 'zane@woohoo.com', 8932348722);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD UNIQUE KEY `lab_id` (`lab_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `registration`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
