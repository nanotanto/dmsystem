-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2016 at 06:50 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 362),
(2, 1, NULL, NULL, 'Auditors', 2, 15),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'isAuthorized', 13, 14),
(9, 1, NULL, NULL, 'Categories', 16, 29),
(10, 9, NULL, NULL, 'index', 17, 18),
(11, 9, NULL, NULL, 'view', 19, 20),
(12, 9, NULL, NULL, 'add', 21, 22),
(13, 9, NULL, NULL, 'edit', 23, 24),
(14, 9, NULL, NULL, 'delete', 25, 26),
(15, 9, NULL, NULL, 'isAuthorized', 27, 28),
(16, 1, NULL, NULL, 'CtgDocs', 30, 43),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 16, NULL, NULL, 'isAuthorized', 41, 42),
(23, 1, NULL, NULL, 'CtgFindings', 44, 57),
(24, 23, NULL, NULL, 'index', 45, 46),
(25, 23, NULL, NULL, 'view', 47, 48),
(26, 23, NULL, NULL, 'add', 49, 50),
(27, 23, NULL, NULL, 'edit', 51, 52),
(28, 23, NULL, NULL, 'delete', 53, 54),
(29, 23, NULL, NULL, 'isAuthorized', 55, 56),
(30, 1, NULL, NULL, 'Departments', 58, 71),
(31, 30, NULL, NULL, 'index', 59, 60),
(32, 30, NULL, NULL, 'view', 61, 62),
(33, 30, NULL, NULL, 'add', 63, 64),
(34, 30, NULL, NULL, 'edit', 65, 66),
(35, 30, NULL, NULL, 'delete', 67, 68),
(36, 30, NULL, NULL, 'isAuthorized', 69, 70),
(37, 1, NULL, NULL, 'Divisions', 72, 85),
(38, 37, NULL, NULL, 'index', 73, 74),
(39, 37, NULL, NULL, 'view', 75, 76),
(40, 37, NULL, NULL, 'add', 77, 78),
(41, 37, NULL, NULL, 'edit', 79, 80),
(42, 37, NULL, NULL, 'delete', 81, 82),
(43, 37, NULL, NULL, 'isAuthorized', 83, 84),
(44, 1, NULL, NULL, 'DocExternals', 86, 117),
(45, 44, NULL, NULL, 'index', 87, 88),
(46, 44, NULL, NULL, 'index_iso', 89, 90),
(47, 44, NULL, NULL, 'index_sni', 91, 92),
(48, 44, NULL, NULL, 'index_qam', 93, 94),
(49, 44, NULL, NULL, 'index_ygk', 95, 96),
(50, 44, NULL, NULL, 'index_yqs', 97, 98),
(51, 44, NULL, NULL, 'view', 99, 100),
(52, 44, NULL, NULL, 'add', 101, 102),
(53, 44, NULL, NULL, 'edit', 103, 104),
(54, 44, NULL, NULL, 'delete', 105, 106),
(55, 44, NULL, NULL, 'file', 107, 108),
(56, 44, NULL, NULL, 'search', 109, 110),
(57, 44, NULL, NULL, 'search_ygk', 111, 112),
(58, 44, NULL, NULL, 'search_yqs', 113, 114),
(59, 44, NULL, NULL, 'isAuthorized', 115, 116),
(60, 1, NULL, NULL, 'Dochis', 118, 133),
(61, 60, NULL, NULL, 'index', 119, 120),
(62, 60, NULL, NULL, 'view', 121, 122),
(63, 60, NULL, NULL, 'add', 123, 124),
(64, 60, NULL, NULL, 'edit', 125, 126),
(65, 60, NULL, NULL, 'delete', 127, 128),
(66, 60, NULL, NULL, 'file', 129, 130),
(67, 60, NULL, NULL, 'isAuthorized', 131, 132),
(68, 1, NULL, NULL, 'DochisExternals', 134, 149),
(69, 68, NULL, NULL, 'index', 135, 136),
(70, 68, NULL, NULL, 'view', 137, 138),
(71, 68, NULL, NULL, 'add', 139, 140),
(72, 68, NULL, NULL, 'edit', 141, 142),
(73, 68, NULL, NULL, 'delete', 143, 144),
(74, 68, NULL, NULL, 'file', 145, 146),
(75, 68, NULL, NULL, 'isAuthorized', 147, 148),
(76, 1, NULL, NULL, 'Docs', 150, 189),
(77, 76, NULL, NULL, 'index', 151, 152),
(78, 76, NULL, NULL, 'level1', 153, 154),
(79, 76, NULL, NULL, 'level2', 155, 156),
(80, 76, NULL, NULL, 'level3', 157, 158),
(81, 76, NULL, NULL, 'level4', 159, 160),
(82, 76, NULL, NULL, 'level5', 161, 162),
(83, 76, NULL, NULL, 'qcpc', 163, 164),
(84, 76, NULL, NULL, 'view', 165, 166),
(85, 76, NULL, NULL, 'add', 167, 168),
(86, 76, NULL, NULL, 'edit', 169, 170),
(87, 76, NULL, NULL, 'delete', 171, 172),
(88, 76, NULL, NULL, 'file', 173, 174),
(89, 76, NULL, NULL, 'search', 175, 176),
(90, 76, NULL, NULL, 'search_lev2', 177, 178),
(91, 76, NULL, NULL, 'search_lev3', 179, 180),
(92, 76, NULL, NULL, 'search_lev4', 181, 182),
(93, 76, NULL, NULL, 'search_lev5', 183, 184),
(94, 76, NULL, NULL, 'search_qcpc', 185, 186),
(95, 76, NULL, NULL, 'isAuthorized', 187, 188),
(96, 1, NULL, NULL, 'Groups', 190, 203),
(97, 96, NULL, NULL, 'index', 191, 192),
(98, 96, NULL, NULL, 'view', 193, 194),
(99, 96, NULL, NULL, 'add', 195, 196),
(100, 96, NULL, NULL, 'edit', 197, 198),
(101, 96, NULL, NULL, 'delete', 199, 200),
(102, 96, NULL, NULL, 'isAuthorized', 201, 202),
(103, 1, NULL, NULL, 'Klausuls', 204, 217),
(104, 103, NULL, NULL, 'index', 205, 206),
(105, 103, NULL, NULL, 'view', 207, 208),
(106, 103, NULL, NULL, 'add', 209, 210),
(107, 103, NULL, NULL, 'edit', 211, 212),
(108, 103, NULL, NULL, 'delete', 213, 214),
(109, 103, NULL, NULL, 'isAuthorized', 215, 216),
(110, 1, NULL, NULL, 'Pages', 218, 223),
(111, 110, NULL, NULL, 'display', 219, 220),
(112, 110, NULL, NULL, 'isAuthorized', 221, 222),
(113, 1, NULL, NULL, 'RecAudits', 224, 245),
(114, 113, NULL, NULL, 'index', 225, 226),
(115, 113, NULL, NULL, 'internal', 227, 228),
(116, 113, NULL, NULL, 'external', 229, 230),
(117, 113, NULL, NULL, 'view', 231, 232),
(118, 113, NULL, NULL, 'add', 233, 234),
(119, 113, NULL, NULL, 'edit', 235, 236),
(120, 113, NULL, NULL, 'delete', 237, 238),
(121, 113, NULL, NULL, 'file', 239, 240),
(122, 113, NULL, NULL, 'search', 241, 242),
(123, 113, NULL, NULL, 'isAuthorized', 243, 244),
(124, 1, NULL, NULL, 'RecMreviews', 246, 261),
(125, 124, NULL, NULL, 'index', 247, 248),
(126, 124, NULL, NULL, 'view', 249, 250),
(127, 124, NULL, NULL, 'add', 251, 252),
(128, 124, NULL, NULL, 'edit', 253, 254),
(129, 124, NULL, NULL, 'delete', 255, 256),
(130, 124, NULL, NULL, 'file', 257, 258),
(131, 124, NULL, NULL, 'isAuthorized', 259, 260),
(132, 1, NULL, NULL, 'Requirements', 262, 279),
(133, 132, NULL, NULL, 'index', 263, 264),
(134, 132, NULL, NULL, 'view', 265, 266),
(135, 132, NULL, NULL, 'add', 267, 268),
(136, 132, NULL, NULL, 'edit', 269, 270),
(137, 132, NULL, NULL, 'delete', 271, 272),
(138, 132, NULL, NULL, 'iso', 273, 274),
(139, 132, NULL, NULL, 'file', 275, 276),
(140, 132, NULL, NULL, 'isAuthorized', 277, 278),
(141, 1, NULL, NULL, 'Schedules', 280, 295),
(142, 141, NULL, NULL, 'index', 281, 282),
(143, 141, NULL, NULL, 'view', 283, 284),
(144, 141, NULL, NULL, 'add', 285, 286),
(145, 141, NULL, NULL, 'edit', 287, 288),
(146, 141, NULL, NULL, 'delete', 289, 290),
(147, 141, NULL, NULL, 'file', 291, 292),
(148, 141, NULL, NULL, 'isAuthorized', 293, 294),
(149, 1, NULL, NULL, 'Sections', 296, 309),
(150, 149, NULL, NULL, 'index', 297, 298),
(151, 149, NULL, NULL, 'view', 299, 300),
(152, 149, NULL, NULL, 'add', 301, 302),
(153, 149, NULL, NULL, 'edit', 303, 304),
(154, 149, NULL, NULL, 'delete', 305, 306),
(155, 149, NULL, NULL, 'isAuthorized', 307, 308),
(156, 1, NULL, NULL, 'Statuses', 310, 323),
(157, 156, NULL, NULL, 'index', 311, 312),
(158, 156, NULL, NULL, 'view', 313, 314),
(159, 156, NULL, NULL, 'add', 315, 316),
(160, 156, NULL, NULL, 'edit', 317, 318),
(161, 156, NULL, NULL, 'delete', 319, 320),
(162, 156, NULL, NULL, 'isAuthorized', 321, 322),
(163, 1, NULL, NULL, 'Users', 324, 349),
(164, 163, NULL, NULL, 'initDB', 325, 326),
(165, 163, NULL, NULL, 'grid', 327, 328),
(166, 163, NULL, NULL, 'dhtmlx', 329, 330),
(167, 163, NULL, NULL, 'grid_data', 331, 332),
(168, 163, NULL, NULL, 'login', 333, 334),
(169, 163, NULL, NULL, 'logout', 335, 336),
(170, 163, NULL, NULL, 'index', 337, 338),
(171, 163, NULL, NULL, 'view', 339, 340),
(172, 163, NULL, NULL, 'add', 341, 342),
(173, 163, NULL, NULL, 'edit', 343, 344),
(174, 163, NULL, NULL, 'delete', 345, 346),
(175, 163, NULL, NULL, 'isAuthorized', 347, 348),
(176, 1, NULL, NULL, 'AclExtras', 350, 351),
(177, 1, NULL, NULL, 'DebugKit', 352, 361),
(178, 177, NULL, NULL, 'ToolbarAccess', 353, 360),
(179, 178, NULL, NULL, 'history_state', 354, 355),
(180, 178, NULL, NULL, 'sql_explain', 356, 357),
(181, 178, NULL, NULL, 'isAuthorized', 358, 359);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 36),
(2, NULL, 'Group', 2, NULL, 37, 46),
(3, NULL, 'Group', 3, NULL, 47, 58),
(4, NULL, 'Group', 4, NULL, 59, 64),
(5, 3, 'User', 1, NULL, 56, 57),
(6, 2, 'User', 2, NULL, 38, 39),
(7, 3, 'User', 3, NULL, 48, 49),
(8, 4, 'User', 4, NULL, 60, 61),
(9, 1, 'User', 5, NULL, 2, 3),
(10, 1, 'User', 6, NULL, 4, 5),
(11, 1, 'User', 7, NULL, 6, 7),
(12, 3, 'User', 8, NULL, 50, 51),
(13, 1, 'User', 9, NULL, 8, 9),
(14, 3, 'User', 10, NULL, 52, 53),
(15, 1, 'User', 11, NULL, 10, 11),
(16, 1, 'User', 12, NULL, 12, 13),
(17, 1, 'User', 13, NULL, 14, 15),
(18, 1, 'User', 14, NULL, 16, 17),
(19, 1, 'User', 15, NULL, 18, 19),
(20, 1, 'User', 17, NULL, 20, 21),
(21, 1, 'User', 18, NULL, 22, 23),
(22, 1, 'User', 19, NULL, 24, 25),
(23, 1, 'User', 20, NULL, 26, 27),
(24, 1, 'User', 21, NULL, 28, 29),
(25, 1, 'User', 22, NULL, 30, 31),
(26, 1, 'User', 23, NULL, 32, 33),
(27, 2, 'User', 24, NULL, 40, 41),
(28, 1, 'User', 25, NULL, 34, 35),
(29, 2, 'User', 26, NULL, 42, 43),
(30, 2, 'User', 27, NULL, 44, 45),
(31, 4, 'User', 28, NULL, 62, 63),
(32, 3, 'User', 29, NULL, 54, 55);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '-1', '-1', '-1', '-1'),
(2, 1, 49, '1', '1', '1', '1'),
(3, 1, 50, '1', '1', '1', '1'),
(4, 1, 57, '1', '1', '1', '1'),
(5, 1, 58, '1', '1', '1', '1'),
(6, 1, 110, '1', '1', '1', '1'),
(7, 2, 1, '-1', '-1', '-1', '-1'),
(8, 2, 85, '1', '1', '1', '1'),
(9, 2, 86, '1', '1', '1', '1'),
(10, 2, 110, '1', '1', '1', '1'),
(11, 3, 1, '-1', '-1', '-1', '-1'),
(12, 3, 110, '1', '1', '1', '1'),
(13, 3, 76, '1', '1', '1', '1'),
(14, 3, 2, '1', '1', '1', '1'),
(15, 3, 9, '1', '1', '1', '1'),
(16, 3, 16, '1', '1', '1', '1'),
(17, 3, 23, '1', '1', '1', '1'),
(18, 3, 30, '1', '1', '1', '1'),
(19, 3, 37, '1', '1', '1', '1'),
(20, 3, 44, '1', '1', '1', '1'),
(21, 3, 60, '1', '1', '1', '1'),
(22, 3, 68, '1', '1', '1', '1'),
(23, 3, 103, '1', '1', '1', '1'),
(24, 3, 113, '1', '1', '1', '1'),
(25, 3, 124, '1', '1', '1', '1'),
(26, 3, 132, '1', '1', '1', '1'),
(27, 3, 141, '1', '1', '1', '1'),
(28, 3, 149, '1', '1', '1', '1'),
(29, 3, 156, '1', '1', '1', '1'),
(30, 4, 1, '1', '1', '1', '1'),
(31, 4, 169, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `auditors`
--

CREATE TABLE `auditors` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auditors`
--

INSERT INTO `auditors` (`id`, `name`) VALUES
(1, 'Internal'),
(2, 'External');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Quality Manual', 'Quality Manual (Level 1)'),
(2, 'Procedure', 'Standard Operating Procedure (Level 2)'),
(3, 'Work Instruction', 'Work Instruction (Level 3)'),
(4, 'Form', 'Form/Formulir (Level 4)');

-- --------------------------------------------------------

--
-- Table structure for table `ctg_docs`
--

CREATE TABLE `ctg_docs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `deskripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctg_docs`
--

INSERT INTO `ctg_docs` (`id`, `name`, `deskripsi`) VALUES
(1, 'ISO', 'International Organization for Standardization'),
(2, 'SNI', 'Standar Nasional Indonesia'),
(3, 'QAM', 'Quality Assurance Manual Book Customer');

-- --------------------------------------------------------

--
-- Table structure for table `ctg_findings`
--

CREATE TABLE `ctg_findings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctg_findings`
--

INSERT INTO `ctg_findings` (`id`, `name`, `description`) VALUES
(1, 'Observation', 'Saran untuk perbaikan'),
(2, 'Non Conformity', 'Temuan ketidaksesuaian');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `division_id`, `name`) VALUES
(1, 1, '-');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`) VALUES
(1, '-');

-- --------------------------------------------------------

--
-- Table structure for table `dochis`
--

CREATE TABLE `dochis` (
  `id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `no` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `effective_date` date NOT NULL,
  `rev_no` smallint(6) NOT NULL,
  `rev_content` text NOT NULL,
  `no_reference` varchar(30) NOT NULL,
  `remark` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dochis_externals`
--

CREATE TABLE `dochis_externals` (
  `id` int(11) NOT NULL,
  `doc_external_id` int(11) NOT NULL,
  `no` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `effective_date` date NOT NULL,
  `rev_no` mediumtext NOT NULL,
  `ctg_doc_id` int(11) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `no` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `effective_date` date NOT NULL,
  `rev_no` smallint(6) NOT NULL,
  `rev_content` text NOT NULL,
  `no_reference` varchar(30) NOT NULL,
  `remark` text NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doc_externals`
--

CREATE TABLE `doc_externals` (
  `id` int(11) NOT NULL,
  `no` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `effective_date` date NOT NULL,
  `rev_no` mediumtext NOT NULL,
  `ctg_doc_id` int(11) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'user', '2015-02-24 01:59:19', '2015-02-24 01:59:19'),
(2, 'Admin Divisi', '2015-02-24 01:59:32', '2015-02-24 01:59:32'),
(3, 'Admin Sekr. ISO', '2015-02-24 02:00:19', '2015-02-24 02:00:19'),
(4, 'Administrator', '2015-02-24 02:00:31', '2015-02-24 02:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `klausuls`
--

CREATE TABLE `klausuls` (
  `id` int(11) NOT NULL,
  `requirement_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klausuls`
--

INSERT INTO `klausuls` (`id`, `requirement_id`, `name`, `description`) VALUES
(1, 0, '-', '-'),
(2, 1, 'ISO 9001 (4)', 'Sistem Manajemen Mutu'),
(3, 1, 'ISO 9001 (4.1)', 'Persyaratan umum'),
(4, 1, 'ISO 9001 (4.2)', 'Persyaratan dokumentasi'),
(5, 1, 'ISO 9001 (4.2.1)', 'Persyaratan dokumentasi - Umum'),
(6, 1, 'ISO 9001 (4.2.2)', 'Pedoman Mutu'),
(7, 1, 'ISO 9001 (4.2.3)', 'Pengendalian dokumen'),
(8, 1, 'ISO 9001 (4.2.4)', 'Pengendalian rekaman'),
(9, 1, 'ISO 9001 (5)', 'Tanggung jawab manajemen'),
(10, 1, 'ISO 9001 (5.1)', 'Komitmen manajemen'),
(11, 1, 'ISO 9001 (5.2)', 'Fokus pada Pelanggan'),
(12, 1, 'ISO 9001 (5.3)', 'Kebijakan mutu'),
(13, 1, 'ISO 9001 (5.4)', 'Perencanaan'),
(14, 1, 'ISO 9001 (5.4.1)', 'Sasaran mutu'),
(15, 1, 'ISO 9001 (5.4.2)', 'Perencanaan sistem manajemen mutu'),
(16, 1, 'ISO 9001 (5.5)', 'Tanggung jawab, wewenang dan komunikasi'),
(17, 1, 'ISO 9001 (5.5.1)', 'Tanggung jawab dan wewenang'),
(18, 1, 'ISO 9001 (5.5.2)', 'Wakil manajemen ( MR )'),
(19, 1, 'ISO 9001 (5.5.3)', 'Komunikasi internal'),
(20, 1, 'ISO 9001 (5.6)', 'Tinjauan manajemen'),
(21, 1, 'ISO 9001 (5.6.1)', 'Tinjauan manajemen - Umum'),
(22, 1, 'ISO 9001 (5.6.2)', 'Tinjauan masukan (Review input)'),
(23, 1, 'ISO 9001 (5.6.3)', 'Tinjauan keluaran ( Review output )'),
(24, 1, 'ISO 9001 (6)', 'Pengelolaan sumber daya'),
(25, 1, 'ISO 9001 (6.1)', 'Penyediaan sumber daya'),
(26, 1, 'ISO 9001 (6.2)', 'Sumber daya manusia'),
(27, 1, 'ISO 9001 (6.2.1)', 'Sumber daya manusia - Umum'),
(28, 1, 'ISO 9001 (6.2.2)', 'Kompetensi, kesadaran dan pelatihan'),
(29, 1, 'ISO 9001 (6.3)', 'Prasarana (Infrastructure)'),
(30, 1, 'ISO 9001 (6.4)', 'Lingkungan kerja ( Work environment )'),
(31, 1, 'ISO 9001 (7)', 'Realisasi Produk (Product realization)'),
(32, 1, 'ISO 9001 (7.1)', 'Perencanaan realisasi produk'),
(33, 1, 'ISO 9001 (7.2)', 'Proses yang berkaitan dgn pelanggan'),
(34, 1, 'ISO 9001 (7.2.1)', 'Penetapan persyaratan yg berkaitan dengan produk'),
(35, 1, 'ISO 9001 (7.2.2)', 'Tinjauan persyaratan berkaitan dengan produk'),
(36, 1, 'ISO 9001 (7.2.3)', 'Komunikasi pelanggan'),
(37, 1, 'ISO 9001 (7.3)', 'Perancangan dan pengembangan (Design and development)'),
(38, 1, 'ISO 9001 (7.3.1)', 'Perencanaan perancangan dan pengembangan'),
(39, 1, 'ISO 9001 (7.3.2)', 'Masukan perancangan dan pengembangan'),
(40, 1, 'ISO 9001 (7.3.3)', 'Keluaran perancangan dan pengembangan'),
(41, 1, 'ISO 9001 (7.3.4)', 'Tinjauan perancangan dan pengembangan'),
(42, 1, 'ISO 9001 (7.3.5)', 'Verifikasi perancangan dan pengembangan'),
(43, 1, 'ISO 9001 (7.3.6)', 'Validasi perancangan dan pengembangan'),
(44, 1, 'ISO 9001 (7.3.7)', 'Pengendalian perubahan perancangan dan pengembangan'),
(45, 1, 'ISO 9001 (7.4)', 'Pembelian'),
(46, 1, 'ISO 9001 (7.4.1)', 'Proses pembelian'),
(47, 1, 'ISO 9001 (7.4.2)', 'Informasi pembelian'),
(48, 1, 'ISO 9001 (7.4.3)', 'Verifikasi produk yang dibeli'),
(49, 1, 'ISO 9001 (7.5)', 'Produksi dan penyediaan jasa/ layanan'),
(50, 1, 'ISO 9001 (7.5.1)', 'Pengendalian produksi dan penyediaan jasa/ layanan'),
(51, 1, 'ISO 9001 (7.5.2)', 'Validasi proses untuk produksi dan penyediaan jasa/ layanan'),
(52, 1, 'ISO 9001 (7.5.3)', 'Identifikasi dan mampu telusur'),
(53, 1, 'ISO 9001 (7.5.4)', 'Properti pelanggan (Customer property)'),
(54, 1, 'ISO 9001 (7.5.5)', 'Pengawetan produk'),
(55, 1, 'ISO 9001 (7.6)', 'Pengendalian sarana pemantauan dan pengukuran'),
(56, 1, 'ISO 9001 (8)', 'Pengukuran, analisis dan perbaikan'),
(57, 1, 'ISO 9001 (8.1)', 'Pengukuran, analisis dan perbaikan - Umum'),
(58, 1, 'ISO 9001 (8.2)', 'Pemantauan dan pengukuran (Monitoring & measurement)'),
(59, 1, 'ISO 9001 (8.2.1)', 'Kepuasan Pelanggan'),
(60, 1, 'ISO 9001 (8.2.2)', 'Audit internal'),
(61, 1, 'ISO 9001 (8.2.3)', 'Pemantauan dan pengukuran proses'),
(62, 1, 'ISO 9001 (8.2.4)', 'Pemantauan dan pengukuran produk'),
(63, 1, 'ISO 9001 (8.3)', 'Pengendalian produk yang tidak sesuai'),
(64, 1, 'ISO 9001 (8.4)', 'Analisis data'),
(65, 1, 'ISO 9001 (8.5)', 'Perbaikan'),
(66, 1, 'ISO 9001 (8.5.1)', 'Perbaikan berlanjut (Continual improvement)'),
(67, 1, 'ISO 9001 (8.5.2)', 'Tindakan koreksi (Corrective action)'),
(68, 1, 'ISO 9001 (8.5.3)', 'Tindakan pencegahan');

-- --------------------------------------------------------

--
-- Table structure for table `rec_audits`
--

CREATE TABLE `rec_audits` (
  `id` int(11) NOT NULL,
  `auditor_id` int(11) NOT NULL,
  `no` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `department_id` int(11) NOT NULL,
  `requirement_id` int(11) NOT NULL,
  `klausul_id` int(11) NOT NULL,
  `ctg_finding_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `received` date DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `file` text NOT NULL,
  `status_verification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_mreviews`
--

CREATE TABLE `rec_mreviews` (
  `id` int(11) NOT NULL,
  `no` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `rev` smallint(5) NOT NULL,
  `issued` date NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `name`, `description`) VALUES
(1, 'ISO 9001', 'Sistem Manajemen Mutu'),
(2, 'ISO 17025', 'Sistem Manajemen Laboratorium');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `no` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `rev` smallint(5) NOT NULL,
  `issued` date NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `department_id`, `name`) VALUES
(1, 1, '-');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status_doc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `status_doc`) VALUES
(1, 'Open', 'Active'),
(2, 'Closed', 'Obsolete');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` char(40) NOT NULL,
  `email` varchar(250) NOT NULL,
  `division_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `email`, `division_id`, `title`, `group_id`, `created`, `modified`) VALUES
(1, 'admin', 'admin', '63851a8e7bdc5079937bca22968b1572e7e587ce', '', 1, 'admin', 3, '2016-05-23 08:15:52', '2016-07-13 06:49:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`);

--
-- Indexes for table `auditors`
--
ALTER TABLE `auditors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctg_docs`
--
ALTER TABLE `ctg_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctg_findings`
--
ALTER TABLE `ctg_findings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dochis`
--
ALTER TABLE `dochis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dochis_externals`
--
ALTER TABLE `dochis_externals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `doc_externals`
--
ALTER TABLE `doc_externals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klausuls`
--
ALTER TABLE `klausuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rec_audits`
--
ALTER TABLE `rec_audits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `rec_mreviews`
--
ALTER TABLE `rec_mreviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `auditors`
--
ALTER TABLE `auditors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ctg_docs`
--
ALTER TABLE `ctg_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ctg_findings`
--
ALTER TABLE `ctg_findings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dochis`
--
ALTER TABLE `dochis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dochis_externals`
--
ALTER TABLE `dochis_externals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doc_externals`
--
ALTER TABLE `doc_externals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `klausuls`
--
ALTER TABLE `klausuls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `rec_audits`
--
ALTER TABLE `rec_audits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rec_mreviews`
--
ALTER TABLE `rec_mreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
