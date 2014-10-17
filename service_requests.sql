-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2014 at 03:22 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 136),
(2, 1, NULL, NULL, 'Categories', 2, 15),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Groups', 16, 27),
(9, 8, NULL, NULL, 'index', 17, 18),
(10, 8, NULL, NULL, 'view', 19, 20),
(11, 8, NULL, NULL, 'add', 21, 22),
(12, 8, NULL, NULL, 'edit', 23, 24),
(13, 8, NULL, NULL, 'delete', 25, 26),
(14, 1, NULL, NULL, 'Pages', 28, 31),
(15, 14, NULL, NULL, 'display', 29, 30),
(16, 1, NULL, NULL, 'Priorities', 32, 43),
(17, 16, NULL, NULL, 'index', 33, 34),
(18, 16, NULL, NULL, 'view', 35, 36),
(19, 16, NULL, NULL, 'add', 37, 38),
(20, 16, NULL, NULL, 'edit', 39, 40),
(21, 16, NULL, NULL, 'delete', 41, 42),
(22, 1, NULL, NULL, 'ServiceRequests', 44, 55),
(23, 22, NULL, NULL, 'index', 45, 46),
(24, 22, NULL, NULL, 'view', 47, 48),
(25, 22, NULL, NULL, 'add', 49, 50),
(26, 22, NULL, NULL, 'edit', 51, 52),
(27, 22, NULL, NULL, 'delete', 53, 54),
(28, 1, NULL, NULL, 'ServiceRequestsHes', 56, 67),
(29, 28, NULL, NULL, 'index', 57, 58),
(30, 28, NULL, NULL, 'view', 59, 60),
(31, 28, NULL, NULL, 'add', 61, 62),
(32, 28, NULL, NULL, 'edit', 63, 64),
(33, 28, NULL, NULL, 'delete', 65, 66),
(34, 1, NULL, NULL, 'Solvers', 68, 79),
(35, 34, NULL, NULL, 'index', 69, 70),
(36, 34, NULL, NULL, 'view', 71, 72),
(37, 34, NULL, NULL, 'add', 73, 74),
(38, 34, NULL, NULL, 'edit', 75, 76),
(39, 34, NULL, NULL, 'delete', 77, 78),
(40, 1, NULL, NULL, 'Statuses', 80, 91),
(41, 40, NULL, NULL, 'index', 81, 82),
(42, 40, NULL, NULL, 'view', 83, 84),
(43, 40, NULL, NULL, 'add', 85, 86),
(44, 40, NULL, NULL, 'edit', 87, 88),
(45, 40, NULL, NULL, 'delete', 89, 90),
(46, 1, NULL, NULL, 'Users', 92, 107),
(47, 46, NULL, NULL, 'login', 93, 94),
(48, 46, NULL, NULL, 'logout', 95, 96),
(49, 46, NULL, NULL, 'index', 97, 98),
(50, 46, NULL, NULL, 'view', 99, 100),
(51, 46, NULL, NULL, 'add', 101, 102),
(52, 46, NULL, NULL, 'edit', 103, 104),
(53, 46, NULL, NULL, 'delete', 105, 106),
(55, 1, NULL, NULL, 'AclExtras', 108, 109),
(56, 2, NULL, NULL, 'listChildCategories', 13, 14),
(71, 1, NULL, NULL, 'DocumentManager', 110, 135),
(72, 71, NULL, NULL, 'Documents', 111, 122),
(73, 72, NULL, NULL, 'index', 112, 113),
(87, 71, NULL, NULL, 'Direktorijums', 123, 134),
(88, 87, NULL, NULL, 'index', 124, 125),
(89, 87, NULL, NULL, 'view', 126, 127),
(90, 87, NULL, NULL, 'add', 128, 129),
(91, 87, NULL, NULL, 'edit', 130, 131),
(92, 87, NULL, NULL, 'delete', 132, 133),
(93, 72, NULL, NULL, 'view', 114, 115),
(94, 72, NULL, NULL, 'add', 116, 117),
(95, 72, NULL, NULL, 'edit', 118, 119),
(96, 72, NULL, NULL, 'delete', 120, 121);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

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
(19, 2, 72, '1', '1', '1', '1'),
(20, 3, 72, '1', '1', '1', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

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
(15, 2, 'Wireless', '2014-09-25 08:55:11', '2014-09-25 08:55:11');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `direktorijums`
--

INSERT INTO `direktorijums` (`id`, `user_id`, `name`, `parent_id`, `lft`, `rght`, `created`, `modified`) VALUES
(1, '1', 'Proba folder', NULL, 1, 8, '2014-10-17 14:51:33', '2014-10-17 14:51:33'),
(2, '1', 'drugi folder', 1, 2, 5, '2014-10-17 15:12:38', '2014-10-17 15:12:38'),
(3, '1', 'treci', 1, 6, 7, '2014-10-17 15:12:53', '2014-10-17 15:12:53'),
(4, '1', 'cetvrti', 2, 3, 4, '2014-10-17 15:17:05', '2014-10-17 15:17:05');

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

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `size` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `service_requests`
--

INSERT INTO `service_requests` (`id`, `status_id`, `user_id`, `category_id`, `priority_id`, `assigned_to`, `naziv_zahtjeva`, `opis_zahtjeva`, `created`, `modified`) VALUES
(2, 2, 1, 6, 1, 1, 'fsdf', 'dafd', '2014-09-10 12:22:22', '2014-10-10 10:10:09'),
(3, 1, 2, 8, 1, 3, 'Istekao antivirus sa', 'operator prepravio a sad i admin glavni, evo jos prepravki', '2014-09-10 12:28:00', '2014-10-09 16:00:36'),
(4, 1, 1, 2, 3, 1, 'Mis', 'Crkao mis', '2014-09-11 10:21:35', '2014-09-11 10:21:35'),
(5, 1, 6, 2, 2, 1, 'Mis ', 'dasdada', '2014-09-29 09:47:07', '2014-09-29 09:47:07'),
(32, 1, 2, 2, 1, 1, 'bokac dodao', 'dasdadasdadasd', '2014-10-08 13:37:10', '2014-10-09 15:17:23'),
(33, 1, 2, 4, 1, 4, 'Istekao antivirus', 'sdafdasdadasda', '2014-10-08 13:39:03', '2014-10-09 15:46:21'),
(34, 1, 6, 4, 1, 4, 'dasda', 'adasd', '2014-10-09 14:28:58', '2014-10-09 14:28:58'),
(35, 1, 6, 4, 1, 4, 'dasda', 'adasd', '2014-10-09 14:34:41', '2014-10-09 14:34:41'),
(36, 1, 6, 4, 1, 4, 'dasda', 'adasd', '2014-10-09 14:43:21', '2014-10-09 14:43:21'),
(37, 1, 6, 4, 1, 4, 'dasda', 'adasd', '2014-10-09 14:43:33', '2014-10-09 14:43:33'),
(38, 1, 6, 4, 1, 4, 'adsd', 'dasd', '2014-10-09 14:46:01', '2014-10-09 14:46:01'),
(39, 1, 6, 4, 1, 4, 'adsd', 'dasd', '2014-10-09 14:49:23', '2014-10-09 14:49:23'),
(40, 1, 6, 4, 1, 4, 'dasd', 'dad', '2014-10-09 15:02:46', '2014-10-09 15:02:46');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `service_requests_h`
--

INSERT INTO `service_requests_h` (`id`, `service_request_id`, `status_h`, `prioritet`, `assigned_to`, `kategorija`, `naziv`, `opis`, `sekvenca`, `created`, `user_id`, `ip`) VALUES
(1, 33, 1, 1, 4, 4, 'Istekao antivirus', 'sdafdasdadasda', 0, '2014-10-09 15:45:35', 1, ''),
(2, 33, 1, 1, 4, 4, 'Istekao antivirus', 'sdafdasdadasda', 0, '2014-10-09 15:46:21', 1, ''),
(3, 3, 1, 1, 3, 8, 'Istekao antivirus', 'operator prepravio', 1, '2014-10-09 15:58:11', 3, ''),
(4, 3, 1, 1, 3, 8, 'Istekao antivirus', 'operator prepravio a sad i admin glavni', 1, '2014-10-09 15:58:37', 1, ''),
(5, 3, 1, 1, 3, 8, 'Istekao antivirus', 'operator prepravio a sad i admin glavni, evo jos prepravki', 1, '2014-10-09 16:00:14', 1, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `solvers`
--

INSERT INTO `solvers` (`id`, `category_id`, `user_id`, `created`, `modified`) VALUES
(1, 1, 1, '2014-09-10 10:14:37', '2014-09-10 10:14:37'),
(2, 4, 4, '2014-09-10 10:16:03', '2014-09-10 10:16:03'),
(3, 5, 5, '2014-09-10 10:16:57', '2014-09-10 10:16:57'),
(4, 3, 3, '2014-09-10 12:27:40', '2014-09-10 12:27:40');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `created`, `modified`, `last_login`) VALUES
(1, 1, 'bokac', '6bb20f3193e6dbfc186bcdbdb7430a5812e032c6', '2014-09-09 15:55:56', '2014-09-09 15:55:56', '2014-10-17 15:12:28'),
(2, 2, 'korisnik', 'b4faad969b3eef368d6b9ba6d2848030dd1b127d', '2014-09-09 15:56:07', '2014-09-09 15:56:07', '2014-10-16 09:56:33'),
(3, 3, 'operator', 'a53530590bd1d2db3e677903a45d38a6b268e7a9', '2014-09-09 15:56:19', '2014-09-09 15:56:19', '2014-10-09 15:57:54'),
(4, 3, 'pecanac', '6ff8805379f6f14ab5c3339f1e17a263d8922d02', '2014-09-10 10:15:26', '2014-09-10 10:15:51', '2014-09-10 10:15:00'),
(5, 3, 'goran', '4eec82ef7a20fb0438f7e64840f84bb28ab23238', '2014-09-10 10:16:48', '2014-09-10 10:16:48', '2014-09-10 10:16:00'),
(6, 2, 'korisnik2', '538bd55e2f0c093efec91c1652d8d4e655b5ee43', '2014-09-29 09:45:00', '2014-09-29 09:45:00', '2014-10-16 08:48:38');

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
