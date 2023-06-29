-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 09:38 AM
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
-- Database: `cwc`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `emp_id` int(11) NOT NULL,
  `degree` varchar(256) DEFAULT NULL,
  `subject` varchar(256) DEFAULT NULL,
  `institute` varchar(256) DEFAULT NULL,
  `pass_year` int(11) DEFAULT NULL,
  `duration` varchar(256) DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`emp_id`, `degree`, `subject`, `institute`, `pass_year`, `duration`, `remark`) VALUES
(2, 'btech', 'tfcs', 'xyz', 2022, '3 yrs', 'xncnxcn'),
(5, 'wjdnjd', 'qwd', 'wdkm', 0, 'abcd', 'iqiiwieiieie'),
(11, 'dbcj', 'dm c', 'djnc', 2021, 'dcn ', 'djnc'),
(12, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'bca', 'comp', 'abcd', 2019, '3 yrs', 'njxJNj');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'jiya@abc', '23a52ee24d66e9a72ec506cd9db39057'),
(5, 'user@2', '7e58d63b60197ceb55a1c487989a3720'),
(11, 'newuser', 'e2fc714c4727ee9395f324cd2e7f331f'),
(12, 'shauser', 'dd130a849d7b29e5541b05d2f7f86a4acd4f1ec598c1c9438783f56bc4f0ff80'),
(16, 'newsha', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `emp_id` int(11) NOT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `lastname` varchar(256) DEFAULT NULL,
  `emp_code` int(11) DEFAULT NULL,
  `department` varchar(256) DEFAULT NULL,
  `designation` varchar(256) DEFAULT NULL,
  `organisation` varchar(256) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `state` varchar(256) DEFAULT NULL,
  `district` varchar(256) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `fax` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`emp_id`, `firstname`, `lastname`, `emp_code`, `department`, `designation`, `organisation`, `phone`, `address`, `state`, `district`, `pincode`, `email`, `fax`) VALUES
(2, 'jiya', 'abc', 4657, 'web', 'sde', 'kxmk', '9871546', 'ensancncncn', 'rajasthan', 'gzb', 123964, 'jiya@abc', 14555),
(5, 'user2', 'abcd', 0, 'sjsj', 'smsmms', 'nssns', '91293883', 'ncncnc', 'xmmxmx', 'skndka', 81289, 'abcd@g', 1823),
(11, 'abcd', 'jsxn', 12345, 'fsnvn', 'jfvnjfn', 'fsnn', '9876543', 'jdnckjsdnnad', 'kndcndc', 'ncnncc', 129876, 'xjNj@njdsb', 12946),
(12, 'kaavya', 'dsnvsv', 6789, 'djadc', 'sdnjsd', 'smc', '88093883', 'jsdnc', '', '', 0, '', 0),
(16, 'newsha', 'kmdck', 5678, 'svkmk', 'cksm', 'fmvkfmv', '91293883', 'xaisj', 'ksmc', 'skcmks', 346578, 'kaavya@skmk', 269375);

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `emp_id` int(11) NOT NULL,
  `post` varchar(256) DEFAULT NULL,
  `office` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `type_of_charge` varchar(256) DEFAULT NULL,
  `work_handled` varchar(256) DEFAULT NULL,
  `contri` varchar(256) DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`emp_id`, `post`, `office`, `city`, `start_date`, `end_date`, `type_of_charge`, `work_handled`, `contri`, `remark`) VALUES
(2, 'sde', 'dkms', 'kanpur', '2023-06-17', '2023-06-16', 'proj', 'testing', 'jsnjancna', 'xyz'),
(5, 'jqnd', 'wm,d ', 'wm,q d', '2023-06-17', '2023-06-20', 'qgwgq', 'whdhb', 'wvgdgqvd', 'iqiiwieiieie'),
(11, 'jendjen', 'fnv fnv', 'fvnv', '2023-06-24', '2023-06-25', 'jfvfff', 'fjdc', 'dsvnv', 'keffekf'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'intern', 'jndcja', 'kanpur', '2023-06-20', '2023-06-21', 'project', 'project', 'sjnjsnj', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `t_start` date NOT NULL,
  `t_end` date NOT NULL,
  `circular` varchar(512) NOT NULL,
  `department` varchar(256) NOT NULL,
  `organiser` varchar(256) NOT NULL,
  `t_desc` varchar(256) NOT NULL,
  `t_type` varchar(256) NOT NULL,
  `t_place` varchar(256) NOT NULL,
  `speaker` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `title`, `t_start`, `t_end`, `circular`, `department`, `organiser`, `t_desc`, `t_type`, `t_place`, `speaker`) VALUES
(1, 'cloud training', '2023-06-16', '2023-06-19', 'test.php', 'computer science', 'dr. abcd', 'train students in cloud tech', 'offline', 'jiit', 'xyz'),
(5, 'web', '2023-06-16', '2023-06-20', '', 'sjdn', ',dmnc', 'dvgsgc', 'sgga', 'gadv', 'ghadv'),
(7, 'Machine learning & AI', '2023-06-17', '2023-06-19', '', 'AI', 'jjjj', 'ssss', 'ooo', 'gggg', 'rwko'),
(8, 'google cloud', '2023-06-17', '2023-06-23', 'Resume-Vaibhav Jaiswal.pdf', 'sxncj', 'kasmk', 'this', 'skmkm', 'ndcc cnn', 'sckskc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD KEY `fk_education` (`emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD KEY `fk_personal` (`emp_id`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD KEY `fk_professional` (`emp_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `fk_education` FOREIGN KEY (`emp_id`) REFERENCES `login` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_personal` FOREIGN KEY (`emp_id`) REFERENCES `login` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `professional`
--
ALTER TABLE `professional`
  ADD CONSTRAINT `fk_professional` FOREIGN KEY (`emp_id`) REFERENCES `login` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
