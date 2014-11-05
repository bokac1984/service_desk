-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2014 at 03:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `service_requests`
--
CREATE DATABASE IF NOT EXISTS `service_requests` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `service_requests`;

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 158),
(2, 1, NULL, NULL, 'Categories', 2, 17),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Groups', 18, 31),
(9, 8, NULL, NULL, 'index', 19, 20),
(10, 8, NULL, NULL, 'view', 21, 22),
(11, 8, NULL, NULL, 'add', 23, 24),
(12, 8, NULL, NULL, 'edit', 25, 26),
(13, 8, NULL, NULL, 'delete', 27, 28),
(14, 1, NULL, NULL, 'Pages', 32, 37),
(15, 14, NULL, NULL, 'display', 33, 34),
(16, 1, NULL, NULL, 'Priorities', 38, 51),
(17, 16, NULL, NULL, 'index', 39, 40),
(18, 16, NULL, NULL, 'view', 41, 42),
(19, 16, NULL, NULL, 'add', 43, 44),
(20, 16, NULL, NULL, 'edit', 45, 46),
(21, 16, NULL, NULL, 'delete', 47, 48),
(22, 1, NULL, NULL, 'ServiceRequests', 52, 65),
(23, 22, NULL, NULL, 'index', 53, 54),
(24, 22, NULL, NULL, 'view', 55, 56),
(25, 22, NULL, NULL, 'add', 57, 58),
(26, 22, NULL, NULL, 'edit', 59, 60),
(27, 22, NULL, NULL, 'delete', 61, 62),
(28, 1, NULL, NULL, 'ServiceRequestsHes', 66, 79),
(29, 28, NULL, NULL, 'index', 67, 68),
(30, 28, NULL, NULL, 'view', 69, 70),
(31, 28, NULL, NULL, 'add', 71, 72),
(32, 28, NULL, NULL, 'edit', 73, 74),
(33, 28, NULL, NULL, 'delete', 75, 76),
(34, 1, NULL, NULL, 'Solvers', 80, 93),
(35, 34, NULL, NULL, 'index', 81, 82),
(36, 34, NULL, NULL, 'view', 83, 84),
(37, 34, NULL, NULL, 'add', 85, 86),
(38, 34, NULL, NULL, 'edit', 87, 88),
(39, 34, NULL, NULL, 'delete', 89, 90),
(40, 1, NULL, NULL, 'Statuses', 94, 107),
(41, 40, NULL, NULL, 'index', 95, 96),
(42, 40, NULL, NULL, 'view', 97, 98),
(43, 40, NULL, NULL, 'add', 99, 100),
(44, 40, NULL, NULL, 'edit', 101, 102),
(45, 40, NULL, NULL, 'delete', 103, 104),
(46, 1, NULL, NULL, 'Users', 108, 125),
(47, 46, NULL, NULL, 'login', 109, 110),
(48, 46, NULL, NULL, 'logout', 111, 112),
(49, 46, NULL, NULL, 'index', 113, 114),
(50, 46, NULL, NULL, 'view', 115, 116),
(51, 46, NULL, NULL, 'add', 117, 118),
(52, 46, NULL, NULL, 'edit', 119, 120),
(53, 46, NULL, NULL, 'delete', 121, 122),
(55, 1, NULL, NULL, 'AclExtras', 126, 127),
(56, 2, NULL, NULL, 'listChildCategories', 13, 14),
(97, 2, NULL, NULL, 'isAuthorized', 15, 16),
(98, 8, NULL, NULL, 'isAuthorized', 29, 30),
(99, 14, NULL, NULL, 'isAuthorized', 35, 36),
(100, 16, NULL, NULL, 'isAuthorized', 49, 50),
(101, 22, NULL, NULL, 'isAuthorized', 63, 64),
(102, 28, NULL, NULL, 'isAuthorized', 77, 78),
(103, 34, NULL, NULL, 'isAuthorized', 91, 92),
(104, 40, NULL, NULL, 'isAuthorized', 105, 106),
(105, 46, NULL, NULL, 'isAuthorized', 123, 124),
(108, 1, NULL, NULL, 'Direktorijums', 128, 141),
(109, 108, NULL, NULL, 'isAuthorized', 129, 130),
(110, 108, NULL, NULL, 'index', 131, 132),
(111, 108, NULL, NULL, 'view', 133, 134),
(112, 108, NULL, NULL, 'add', 135, 136),
(113, 108, NULL, NULL, 'edit', 137, 138),
(114, 108, NULL, NULL, 'delete', 139, 140),
(115, 1, NULL, NULL, 'Documents', 142, 157),
(116, 115, NULL, NULL, 'isAuthorized', 143, 144),
(117, 115, NULL, NULL, 'index', 145, 146),
(118, 115, NULL, NULL, 'view', 147, 148),
(119, 115, NULL, NULL, 'add', 149, 150),
(120, 115, NULL, NULL, 'edit', 151, 152),
(121, 115, NULL, NULL, 'delete', 153, 154),
(122, 115, NULL, NULL, 'download', 155, 156);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 2),
(2, NULL, 'Group', 2, NULL, 3, 4),
(3, NULL, 'Group', 3, NULL, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 3, 1, '-1', '-1', '-1', '-1'),
(3, 3, 22, '1', '1', '1', '1'),
(4, 3, 28, '1', '1', '1', '1'),
(5, 3, 2, '1', '1', '1', '1'),
(6, 3, 40, '1', '1', '1', '1'),
(7, 3, 52, '1', '1', '1', '1'),
(8, 2, 1, '-1', '-1', '-1', '-1'),
(9, 2, 25, '1', '1', '1', '1'),
(10, 2, 24, '1', '1', '1', '1'),
(11, 2, 23, '1', '1', '1', '1'),
(12, 2, 48, '1', '1', '1', '1'),
(15, 1, 48, '1', '1', '1', '1'),
(16, 3, 48, '1', '1', '1', '1'),
(17, 2, 56, '1', '1', '1', '1'),
(18, 3, 56, '1', '1', '1', '1'),
(21, 2, 108, '1', '1', '1', '1'),
(22, 3, 108, '1', '1', '1', '1'),
(23, 2, 115, '1', '1', '1', '1'),
(24, 3, 115, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `belongs_to`
--

DROP TABLE IF EXISTS `belongs_to`;
CREATE TABLE IF NOT EXISTS `belongs_to` (
  `user_id` char(10) NOT NULL,
  `file_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `naziv` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `naziv`, `created`, `modified`) VALUES
(1, NULL, 'Incident', '2014-09-10 09:35:41', '2014-09-10 09:35:41'),
(2, 1, 'Hardware', '2014-09-10 10:11:08', '2014-09-10 10:11:08'),
(3, NULL, 'Zahtjev za servisom', '2014-09-10 10:14:52', '2014-09-10 10:14:52'),
(4, NULL, 'Zahtjev za promjenama', '2014-09-10 10:14:58', '2014-09-10 10:14:58'),
(5, NULL, 'Ostalo', '2014-09-10 10:15:04', '2014-09-10 10:15:04'),
(6, 1, 'Software', '2014-09-10 10:39:14', '2014-09-10 10:39:14'),
(7, 3, 'IDDEEA', '2014-09-10 10:40:12', '2014-09-10 10:40:12'),
(8, 3, 'Muehlbauer', '2014-09-10 10:40:21', '2014-09-10 10:40:21'),
(9, 6, 'Email', '2014-09-25 08:51:37', '2014-09-25 08:51:37'),
(10, 2, 'Printing', '2014-09-25 08:53:31', '2014-09-25 08:53:31'),
(11, 2, 'Internet', '2014-09-25 08:53:55', '2014-09-25 08:53:55'),
(12, 2, 'Network', '2014-09-25 08:54:11', '2014-09-25 08:54:11'),
(13, 6, 'Virus', '2014-09-25 08:54:27', '2014-09-25 08:54:27'),
(14, 6, 'Gubitak podataka', '2014-09-25 08:54:41', '2014-09-25 08:54:41'),
(15, 2, 'Wireless', '2014-09-25 08:55:11', '2014-09-25 08:55:11'),
(16, 2, 'Ostalo', '2014-11-04 09:36:32', '2014-11-04 09:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `direktorijums`
--

DROP TABLE IF EXISTS `direktorijums`;
CREATE TABLE IF NOT EXISTS `direktorijums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` char(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `direktorijums`
--

INSERT INTO `direktorijums` (`id`, `user_id`, `name`, `parent_id`, `lft`, `rght`, `created`, `modified`) VALUES
(75, '30', 'mihic', NULL, 1, 4, '2014-10-22 12:00:59', '2014-10-22 12:00:59'),
(76, '31', 'goran', NULL, 5, 8, '2014-10-22 12:01:10', '2014-10-22 12:01:10'),
(77, '32', 'bokac', NULL, 9, 12, '2014-10-22 12:01:38', '2014-10-22 12:01:38'),
(80, '32', 'a', 77, 10, 11, '2014-10-22 12:06:01', '2014-10-22 12:06:01'),
(82, '31', 'a', 76, 6, 7, '2014-10-22 12:22:59', '2014-10-22 12:22:59'),
(83, '33', 'ranka', NULL, 13, 16, '2014-10-22 12:33:12', '2014-10-22 12:33:12'),
(84, '34', 'admin', NULL, 17, 30, '2014-10-22 12:36:06', '2014-10-22 12:36:06'),
(85, '34', 'a', 84, 18, 19, '2014-10-22 14:05:41', '2014-10-22 14:05:41'),
(86, '30', 'as', 75, 2, 3, '2014-10-22 14:06:01', '2014-10-22 14:06:01'),
(87, '', NULL, NULL, 31, 32, '2014-10-22 14:39:05', '2014-10-22 14:39:05'),
(88, '33', 'as', 83, 14, 15, '2014-10-22 14:42:05', '2014-10-22 14:42:05'),
(89, '34', 'Prvi', 84, 20, 29, '2014-10-23 12:37:33', '2014-10-23 12:37:33'),
(90, '34', 'Janbo', 89, 21, 22, '2014-10-23 13:27:37', '2014-10-23 13:27:37'),
(91, '34', 'da', 89, 23, 28, '2014-10-23 13:39:46', '2014-10-23 13:39:46'),
(92, '34', 'bokac', 91, 24, 25, '2014-10-23 13:41:25', '2014-10-23 13:41:25'),
(93, '34', 'dasdas', 91, 26, 27, '2014-10-23 13:42:19', '2014-10-23 13:42:19'),
(94, '35', 'Bojan_M', NULL, 33, 34, '2014-10-31 12:13:12', '2014-10-31 12:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `direktorijums_documents`
--

DROP TABLE IF EXISTS `direktorijums_documents`;
CREATE TABLE IF NOT EXISTS `direktorijums_documents` (
  `document_id` int(11) NOT NULL,
  `direktorijum_id` int(11) NOT NULL,
  PRIMARY KEY (`document_id`,`direktorijum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direktorijums_documents`
--

INSERT INTO `direktorijums_documents` (`document_id`, `direktorijum_id`) VALUES
(30, 75),
(30, 77),
(35, 83),
(36, 89),
(37, 84),
(38, 75),
(38, 76),
(38, 77),
(38, 83),
(38, 84),
(39, 93),
(40, 92),
(41, 75),
(41, 84),
(43, 86),
(44, 94),
(45, 94);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `size` double DEFAULT NULL,
  `path` varchar(150) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `size`, `path`, `created`, `modified`) VALUES
(30, 'ITSM043004 Zapisnik.pdf', 29068, 'files\\bokac\\ITSM043004 Zapisnik.pdf', '2014-10-22 12:02:16', '2014-10-22 14:19:47'),
(35, 'Untitled.sql', 294, 'files\\admin\\Untitled.sql', '2014-10-22 13:12:31', '2014-10-22 14:42:31'),
(36, 'datumi_u_dokumentima.sql', 2347, 'files\\datumi_u_dokumentima.sql', '2014-10-23 12:39:34', '2014-10-23 12:39:34'),
(37, 'log_win7.txt', 1031005, 'files\\admin\\log_win7.txt', '2014-10-23 12:42:11', '2014-10-23 15:46:10'),
(38, 'Untitled12.sql', 404, 'files\\admin\\Untitled12.sql', '2014-10-23 12:43:52', '2014-10-24 09:13:58'),
(39, 'Untitled2.sql', 2664, 'files\\admin\\Prvi\\da\\dasdas\\Untitled2.sql', '2014-10-23 13:45:20', '2014-10-23 13:45:20'),
(40, 'log_win7.txt', 1031005, 'files\\admin\\Prvi\\da\\bokac\\log_win7.txt', '2014-10-23 13:47:01', '2014-10-23 13:47:01'),
(41, '339328689_1305680189_big.jpg', 21088, 'files\\admin\\339328689_1305680189_big.jpg', '2014-10-24 13:19:04', '2014-10-29 12:41:03'),
(42, 'myrealm.png', 172851, 'files\\mihic\\myrealm.png', '2014-10-27 08:51:46', '2014-10-27 08:51:46'),
(43, 'Read me.txt', 32792, 'files\\mihic\\as\\Read me.txt', '2014-10-29 09:51:20', '2014-10-29 09:51:20'),
(44, 'greske.txt', 209, 'files\\Bojan_M\\greske.txt', NULL, NULL),
(45, 'novi_upit.txt', 4519, 'files\\Bojan_M\\novi_upit.txt', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administratori', '2014-09-09 14:45:39', '2014-09-09 14:45:39'),
(2, 'Korisnici', '2014-09-09 14:45:44', '2014-09-09 14:45:44'),
(3, 'Operatori', '2014-09-09 14:45:47', '2014-09-09 14:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `has_many`
--

DROP TABLE IF EXISTS `has_many`;
CREATE TABLE IF NOT EXISTS `has_many` (
  `file_id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  PRIMARY KEY (`file_id`,`folder_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

DROP TABLE IF EXISTS `priorities`;
CREATE TABLE IF NOT EXISTS `priorities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `priorities`
--

INSERT INTO `priorities` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Nizak', 'Najnizi nivo', '2014-09-10 09:35:11', '2014-09-10 09:35:11'),
(2, 'Srednji', 'Ovo je srednji nivo ', '2014-09-10 09:35:19', '2014-09-10 09:35:19'),
(3, 'Visok', 'Najvisi nivo prioriteta', '2014-09-10 09:35:23', '2014-09-10 09:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

DROP TABLE IF EXISTS `service_requests`;
CREATE TABLE IF NOT EXISTS `service_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `priority_id` int(11) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `naziv_zahtjeva` varchar(100) DEFAULT NULL,
  `opis_zahtjeva` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_assigned_to` (`user_id`),
  KEY `FK_belongs_to_service` (`category_id`),
  KEY `FK_created_request` (`assigned_to`),
  KEY `FK_has_priorities` (`priority_id`),
  KEY `FK_has_status` (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `service_requests`
--

INSERT INTO `service_requests` (`id`, `status_id`, `user_id`, `category_id`, `priority_id`, `assigned_to`, `naziv_zahtjeva`, `opis_zahtjeva`, `created`, `modified`) VALUES
(3, 1, 35, 16, 1, 31, 'Mis', 'Crkao mi je mis evo ne znam sta da radim, mora neko doci da mi to popravi', '2014-11-04 09:59:52', '2014-11-04 09:59:52'),
(4, 1, 35, 16, 1, 31, 'Mis', 'Crkao mi je mis evo ne znam sta da radim, mora neko doci da mi to popravi', '2014-11-04 10:00:20', '2014-11-04 10:00:20'),
(5, 1, 35, 7, 2, 32, 'dasd', 'adasd', '2014-11-05 11:55:52', '2014-11-05 11:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_requests_h`
--

DROP TABLE IF EXISTS `service_requests_h`;
CREATE TABLE IF NOT EXISTS `service_requests_h` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_request_id` int(11) NOT NULL,
  `status_h` int(11) DEFAULT NULL,
  `prioritet` int(11) NOT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `kategorija` int(11) NOT NULL,
  `naziv` varchar(200) NOT NULL,
  `opis` text NOT NULL,
  `sekvenca` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_changed_table` (`user_id`),
  KEY `FK_has_history` (`service_request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service_requests_h`
--

INSERT INTO `service_requests_h` (`id`, `service_request_id`, `status_h`, `prioritet`, `assigned_to`, `kategorija`, `naziv`, `opis`, `sekvenca`, `created`, `user_id`, `ip`) VALUES
(1, 4, 1, 1, 31, 16, 'Mis', 'Crkao mi je mis evo ne znam sta da radim, mora neko doci da mi to popravi', 1, '2014-11-04 10:00:20', 35, ''),
(2, 5, 1, 2, 32, 7, 'dasd', 'adasd', 1, '2014-11-05 11:55:53', 35, '');

-- --------------------------------------------------------

--
-- Table structure for table `solvers`
--

DROP TABLE IF EXISTS `solvers`;
CREATE TABLE IF NOT EXISTS `solvers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_has_category` (`category_id`),
  KEY `FK_has_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `solvers`
--

INSERT INTO `solvers` (`id`, `category_id`, `user_id`, `created`, `modified`) VALUES
(1, 1, 31, '2014-11-04 09:57:29', '2014-11-04 09:57:29'),
(2, 3, 32, '2014-11-04 09:57:38', '2014-11-04 09:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) DEFAULT NULL,
  `opis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `naziv`, `opis`) VALUES
(1, 'Otvoren', 'Status je otvoren'),
(2, 'Zatvoren', 'Oznacava tiket koji je obradjen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_belongs_to_group` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `created`, `modified`, `last_login`) VALUES
(30, 2, 'mihic', '04b776f90819a1df0d85a67b4c011266a8cc2762', '2014-10-22 12:00:59', '2014-10-22 12:00:59', '2014-10-29 12:51:37'),
(31, 3, 'goran', '4eec82ef7a20fb0438f7e64840f84bb28ab23238', '2014-10-22 12:01:10', '2014-10-22 12:01:10', '2014-10-22 12:29:18'),
(32, 1, 'bokac', '6bb20f3193e6dbfc186bcdbdb7430a5812e032c6', '2014-10-22 12:01:38', '2014-10-22 12:01:38', '2014-10-22 12:36:00'),
(33, 2, 'ranka', 'ce0750dd6a8834b740bde26e23c85ee0598928f5', '2014-10-22 12:33:12', '2014-10-22 12:33:12', '2014-10-22 14:41:58'),
(34, 1, 'admin', '7801633c76ce1ec2ca4791406849e7c3982530ed', '2014-10-22 12:36:06', '2014-10-22 12:36:06', '2014-11-05 11:56:03'),
(35, 2, 'Bojan_M', 'ad0b46571bf8b8d1c19c728c9d71d86613a5769e', '2014-10-31 12:13:11', '2014-10-31 12:13:11', '2014-11-05 11:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `users_documents`
--

DROP TABLE IF EXISTS `users_documents`;
CREATE TABLE IF NOT EXISTS `users_documents` (
  `user_id` char(10) NOT NULL,
  `document_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_documents`
--

INSERT INTO `users_documents` (`user_id`, `document_id`) VALUES
('30', 41),
('30', 43),
('31', 35),
('31', 38),
('32', 35),
('32', 37),
('32', 38),
('33', 35),
('33', 37),
('33', 38),
('34', 30),
('34', 35),
('34', 36),
('34', 37),
('34', 38),
('34', 39),
('34', 40),
('34', 41),
('35', 44),
('35', 45);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD CONSTRAINT `FK_assigned_to` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_belongs_to_service` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_created_request` FOREIGN KEY (`assigned_to`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_has_priorities` FOREIGN KEY (`priority_id`) REFERENCES `priorities` (`id`),
  ADD CONSTRAINT `FK_has_status` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);

--
-- Constraints for table `service_requests_h`
--
ALTER TABLE `service_requests_h`
  ADD CONSTRAINT `FK_changed_table` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_has_history` FOREIGN KEY (`service_request_id`) REFERENCES `service_requests` (`id`);

--
-- Constraints for table `solvers`
--
ALTER TABLE `solvers`
  ADD CONSTRAINT `FK_has_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_has_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user_belongs_to_group` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
