-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2011 at 05:22 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ssa_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `schema_migrations`
--

CREATE TABLE IF NOT EXISTS `schema_migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `schema_migrations`
--

INSERT INTO `schema_migrations` (`id`, `version`, `type`, `created`) VALUES
(1, 1, 'migrations', '2011-01-25 17:20:02'),
(2, 1, 'app', '2011-01-25 17:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `created`, `modified`, `status`, `category`, `title`, `content`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'open', 'task', 'first task', 'task description'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'open', 'bug', 'first bug', 'bug description'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'closed', 'task', 'other task', 'other task description'),
(4, '2011-01-25 17:56:04', '2011-01-25 17:56:04', 'open', 'technical', 'Broken keyboard!', 'Please help!'),
(5, '2011-01-25 19:10:36', '2011-01-25 19:10:36', 'open', 'bug', 'Jason''s New Ticket', 'New!');
