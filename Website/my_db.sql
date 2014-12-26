-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2014 at 07:31 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Userid` varchar(50) DEFAULT NULL,
  `adsname` varchar(50) DEFAULT NULL,
  `adsplace` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `KM` varchar(50) DEFAULT NULL,
  `capacity` varchar(50) DEFAULT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `vendor` varchar(50) DEFAULT NULL,
  `Area` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `numOfRooms` varchar(50) DEFAULT NULL,
  `numOfToillet` varchar(50) DEFAULT NULL,
  `Salary` varchar(50) DEFAULT NULL,
  `years_of_experience` varchar(50) DEFAULT NULL,
  `Skills` varchar(500) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `Userid`, `adsname`, `adsplace`, `category`, `Description`, `Price`, `KM`, `capacity`, `Model`, `vendor`, `Area`, `address`, `numOfRooms`, `numOfToillet`, `Salary`, `years_of_experience`, `Skills`, `Type`) VALUES
(31, '3', 'Wow car', 'Giza ', 'Cars', 'Beautiful car is waiting for you , black color and amazing look', '95000', '70', '6', '2012', 'sunny', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '3', 'new job', 'Tahrir ', 'It_jobs', 'we hire for new opportunity with high salary , full time job ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4000', '3', '- php,html,css languages\r\n- native English\r\n', 'web developer'),
(33, '1', 'Red car', 'Haram ', 'Cars', 'new car is now for selling with only 4 months used', '120000', '110', '4', '2009', 'KIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '1', 'new opportunity', 'Giza ', 'It_jobs', 'software engineer is needed for IT company with high salary , full time job', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5500', '4', '- high level in programming language\r\n- software engineering ', 'Software engineer'),
(30, '3', 'house', 'Dukki ', 'house', 'new house in fantastic location with children garden is now for sellin', '250000', NULL, NULL, NULL, NULL, '200', 'El-mohandseen ', '5', '2', NULL, NULL, NULL, NULL),
(29, '2', 'house', 'Agoza ', 'house', 'big house with garden and 2 flour in new compound ', '100000', NULL, NULL, NULL, NULL, '150', 'slah salem st', '3', '1', NULL, NULL, NULL, NULL),
(28, '2', 'Opportunity job', 'Haram ', 'It_jobs', 'we hiring for new job for multinational company , full time ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3500', '2', '1- 2 Language other than English\r\n2- CCNA \r\n', 'IT engineer'),
(27, '2', 'Beautiful car', 'Giza ', 'Cars', 'Fast car and beautiful is for selling , White color with 4 months used', '80000', '80', '5', '2010', 'tyota', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '2', 'Big house', 'Cairo ', 'house', 'New house is now for selling , 2 flours and near from Nile', '200,000', NULL, NULL, NULL, NULL, '150', 'Nasr El-sawra st', '3', '2', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Place` varchar(50) DEFAULT NULL,
  `Information` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Mobile`, `Password`, `Place`, `Information`) VALUES
(1, 'Amany Mohamed', 'engamany2020@gmail.com', '01148842970', '789', 'Giza', ''),
(2, 'Esraa Ahmed', 'e.ahmed@yahoo.com', '01100012403', '123', 'Haram', ''),
(3, 'Samia Kamel', 'semsema_soso@yahoo.com', '011245776399', '147', 'Giza', ''),
(4, 'Asmaa Salm', 'a.salem@yahoo.com', '01255664105', '123', 'Giza', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
