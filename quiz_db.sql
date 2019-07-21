-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2017 at 05:56 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_questions`
--

CREATE TABLE IF NOT EXISTS `master_questions` (
  `ques_id` int(11) NOT NULL AUTO_INCREMENT,
  `ques_desc` text NOT NULL,
  `ans` text NOT NULL,
  `correct_order` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ques_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `master_questions`
--

INSERT INTO `master_questions` (`ques_id`, `ques_desc`, `ans`, `correct_order`, `date_added`, `ques_status`) VALUES
(1, 'order number(32514)', '1,2,3,4,5,', '3,2,5,1,4', '2017-12-25 14:47:41', 1),
(2, 'oder all number( 97856)', '5,6,7,8,9,', '5,3,4,1,2', '2017-12-25 14:47:49', 1),
(3, 'oder number( 53241)', '1,2,3,4,5\r\n,', '5,3,2,4,1', '2017-12-25 14:47:57', 1);
