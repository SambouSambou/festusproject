-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 03:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted`
--

CREATE TABLE `accepted` (
  `password` varchar(50) NOT NULL,
  `section` varchar(20) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Nii Jesse', 'jesse@admin.com', 'uuuu');

-- --------------------------------------------------------

--
-- Table structure for table `admin_section`
--

CREATE TABLE `admin_section` (
  `internID` varchar(150) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bs_section`
--

CREATE TABLE `bs_section` (
  `internID` varchar(150) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clock_in`
--

CREATE TABLE `clock_in` (
  `InternID` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `InternDepartment` varchar(20) NOT NULL,
  `date_in` date NOT NULL,
  `time_in` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clock_in`
--

INSERT INTO `clock_in` (`InternID`, `fname`, `InternDepartment`, `date_in`, `time_in`) VALUES
('1', 'NIi Mccoy', 'MIS', '2020-10-28', '2020-10-28 14:29:25.000000'),
('1', 'NIi Mccoy', 'MIS', '2020-10-28', '2020-10-28 14:29:28.000000'),
('1', 'NIi Mccoy', 'MIS', '2020-10-28', '2020-10-28 14:29:30.000000');

-- --------------------------------------------------------

--
-- Table structure for table `clock_out`
--

CREATE TABLE `clock_out` (
  `internID` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `internDepartment` varchar(20) NOT NULL,
  `date_out` date NOT NULL,
  `time_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clock_out`
--

INSERT INTO `clock_out` (`internID`, `fname`, `internDepartment`, `date_out`, `time_out`) VALUES
('1', 'NIi Mccoy', 'MIS', '2020-10-28', '2020-10-28 14:29:27'),
('1', 'NIi Mccoy', 'MIS', '2020-10-28', '2020-10-28 14:29:29'),
('1', 'NIi Mccoy', 'MIS', '2020-10-28', '2020-10-28 14:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `cst_section`
--

CREATE TABLE `cst_section` (
  `internID` varchar(150) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dm_section`
--

CREATE TABLE `dm_section` (
  `internID` varchar(150) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `icti_section`
--

CREATE TABLE `icti_section` (
  `internID` varchar(150) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intern_r`
--

CREATE TABLE `intern_r` (
  `internID` varchar(50) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `report` varchar(200) NOT NULL,
  `InternDepartment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern_r`
--

INSERT INTO `intern_r` (`internID`, `fname`, `report`, `InternDepartment`) VALUES
('2', 'Adiza Alhassan', 'I am happy to be here', 'MIS'),
('3', 'Adiza', 'REPORT', 'MIS'),
('3', 'Oko Jesse Nii Mccoy Jnr', 'ccvcvcvc', 'MIS'),
('3', 'Oko Jesse Nii Mccoy Jnr', 'bdfhhg', 'MIS'),
('3', 'Oko Jesse Nii Mccoy Jnr', '', 'MIS'),
('3', 'Oko Jesse Nii Mccoy Jnr', '', 'MIS');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `workerID` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`workerID`, `fullname`, `title`, `comment`, `date`, `time`) VALUES
(0, 'NIi Mccoy', 'THis is it', 'Lorem ipsum dolor sit amet', '2020-10-27', '09:43:43'),
(1, 'NIi Mccoy', 'yeah', 'this is a test', '2020-10-27', '09:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(50) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `resaddress` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `course` varchar(150) NOT NULL,
  `level` varchar(50) NOT NULL,
  `specialty` varchar(150) NOT NULL,
  `caretaker` varchar(50) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `pgender` varchar(50) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `presaddress` varchar(250) NOT NULL,
  `createdDate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `firstname`, `lastname`, `gender`, `dob`, `nationality`, `number`, `email`, `resaddress`, `school`, `course`, `level`, `specialty`, `caretaker`, `fullname`, `pgender`, `pemail`, `pnumber`, `presaddress`, `createdDate`) VALUES
(1, 'Samuel', '', 'Male', '1990-12-31', 'Ghanaian', '239458483', 'asfon@mail.com', 'kasoa', 'accra aace', 'english', '100', 'Software Development', 'Parent', 'kofi darkwa', 'Male', 'adfpkmpd@mail.com', '239098742', 'kasoa', '2023-02-23 01:49:51'),
(2, 'sdfn', 'sdonvn', 'Male', '2000-02-01', 'ghanaian', '239094581', 'asdno@mail.com', 'kasoa', 'kasoa', 'kasoa', '100', 'Software Development', 'Parent', 'sdof', 'Male', 'ad@mail.com', '243409812', 'oasmpk', '2023-02-23 02:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userID` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(550) NOT NULL,
  `lastname` varchar(550) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `specialty` varchar(150) NOT NULL,
  `initialpassword` varchar(200) NOT NULL DEFAULT 'IMS@2023'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userID`, `username`, `firstname`, `lastname`, `designation`, `phonenumber`, `email`, `specialty`, `initialpassword`) VALUES
(14, '', 'Festus.Idun', 'Festus', 'Idun', 'Administrator', 272663737, 'festusidun@mail.com', 'Cyber Security', 'IMS@2023'),
(16, '', 'Stephen.Sambou', 'Stephen', 'Sambou', 'Administrator', 273295688, 'stephensambou@mail.com', 'Software Development', 'IMS@2023'),
(18, '', 'James.Dadzie', 'James', 'Dadzie', 'Administrator', 239045943, 'jamesdadzie@mail.com', 'Human Resource/Administration', 'IMS@2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
