-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 03:05 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `employee_ID` int(11) NOT NULL,
  `employee_number` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `admin` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL,
  `start-date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_ID`, `employee_number`, `name`, `surname`, `admin`, `username`, `password`, `position`, `start-date`) VALUES
(1, 'e120b', 'Karabo', 'Mokgama', 'Yes', 'kk', '000', 'Senior Java Developer', '12-05-2019'),
(3, 'e400', 'John', 'Peter', '', 'tets', '120', 'Manager', '20-May-2019'),
(5, 'e304', 'Linda', 'Mokwena', '', 'mok', '123', 'Marketing Specialist', '01-May-2018'),
(6, 'e105', 'Mandi', 'Katlego', '', 'jk', '789', 'Account Executive', '13-June-2019'),
(7, 'e3340', 'Michael', 'Johnna', '', 'Mich', '435', 'Chief Executive Officer', '25-Jan-2003'),
(8, 'e320', 'Mbali', 'Mshove', '', 'ms', '000', 'CFO', '20-Jan-2017'),
(16, 'e180', 'Linda', 'Mangena', '', 'Linda', 'Linda', 'CEO', '11-05-2019'),
(17, 'e183', 'Thandeka', 'kheswa', '', 'Thandeka', 'Thandeka', 'testing', 'testing'),
(18, 'e261', 'Mandi', 'Thuto', '', 'Mandi', 'Mandi', 'testing', 'testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
