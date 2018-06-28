-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 08:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chameleon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

DROP TABLE IF EXISTS `acl_phinxlog`;
CREATE TABLE `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20141229162641, 'DbAcl', '2018-04-24 04:49:06', '2018-04-24 04:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 318),
(2, 1, NULL, NULL, 'Companies', 2, 17),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 2, NULL, NULL, 'hashids', 13, 14),
(9, 2, NULL, NULL, 'isAuthorized', 15, 16),
(10, 1, NULL, NULL, 'CompanyDetails', 18, 33),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 10, NULL, NULL, 'hashids', 29, 30),
(17, 10, NULL, NULL, 'isAuthorized', 31, 32),
(18, 1, NULL, NULL, 'CompanyUsers', 34, 49),
(19, 18, NULL, NULL, 'index', 35, 36),
(20, 18, NULL, NULL, 'view', 37, 38),
(21, 18, NULL, NULL, 'add', 39, 40),
(22, 18, NULL, NULL, 'edit', 41, 42),
(23, 18, NULL, NULL, 'delete', 43, 44),
(24, 18, NULL, NULL, 'hashids', 45, 46),
(25, 18, NULL, NULL, 'isAuthorized', 47, 48),
(26, 1, NULL, NULL, 'Debug', 50, 79),
(27, 26, NULL, NULL, 'ownerExpirationDate', 51, 52),
(28, 26, NULL, NULL, 'generateRandomString', 53, 54),
(29, 26, NULL, NULL, 'generateOrderNumber', 55, 56),
(30, 26, NULL, NULL, 'easyParcel', 57, 58),
(31, 26, NULL, NULL, 'theLorryConfirmOrder', 59, 60),
(32, 26, NULL, NULL, 'theLorry', 61, 62),
(33, 26, NULL, NULL, 'easyParcelCheckOrderStatus', 63, 64),
(34, 26, NULL, NULL, 'easyParcelMakeOrder', 65, 66),
(35, 26, NULL, NULL, 'admin_template_b', 67, 68),
(36, 26, NULL, NULL, 'admin_template_c', 69, 70),
(37, 26, NULL, NULL, 'register', 71, 72),
(38, 26, NULL, NULL, 'login', 73, 74),
(39, 26, NULL, NULL, 'hashids', 75, 76),
(40, 26, NULL, NULL, 'isAuthorized', 77, 78),
(41, 1, NULL, NULL, 'Groups', 80, 95),
(42, 41, NULL, NULL, 'index', 81, 82),
(43, 41, NULL, NULL, 'view', 83, 84),
(44, 41, NULL, NULL, 'add', 85, 86),
(45, 41, NULL, NULL, 'edit', 87, 88),
(46, 41, NULL, NULL, 'delete', 89, 90),
(47, 41, NULL, NULL, 'hashids', 91, 92),
(48, 41, NULL, NULL, 'isAuthorized', 93, 94),
(49, 1, NULL, NULL, 'Inquiry', 96, 105),
(50, 49, NULL, NULL, 'ajax_send_contact_us', 97, 98),
(51, 49, NULL, NULL, 'ajax_send_subscribe_email', 99, 100),
(52, 49, NULL, NULL, 'hashids', 101, 102),
(53, 49, NULL, NULL, 'isAuthorized', 103, 104),
(54, 1, NULL, NULL, 'Main', 106, 139),
(55, 54, NULL, NULL, 'index', 107, 108),
(56, 54, NULL, NULL, 'cosco_shipping', 109, 110),
(57, 54, NULL, NULL, 'msc_shipping', 111, 112),
(58, 54, NULL, NULL, 'evergreen_shipping', 113, 114),
(59, 54, NULL, NULL, 'maersk_shipping', 115, 116),
(60, 54, NULL, NULL, 'oocl_shipping', 117, 118),
(61, 54, NULL, NULL, 'wanhap_shipping', 119, 120),
(62, 54, NULL, NULL, 'removeElementByClassName', 121, 122),
(63, 54, NULL, NULL, 'interasia_shipping', 123, 124),
(64, 54, NULL, NULL, 'mol_shipping', 125, 126),
(65, 54, NULL, NULL, 'cma_shipping', 127, 128),
(66, 54, NULL, NULL, 'kline_shipping', 129, 130),
(67, 54, NULL, NULL, 'delete_all_between', 131, 132),
(68, 54, NULL, NULL, 'hashids', 133, 134),
(69, 54, NULL, NULL, 'isAuthorized', 135, 136),
(70, 54, NULL, NULL, 'cell', 137, 138),
(71, 1, NULL, NULL, 'Pages', 140, 163),
(72, 71, NULL, NULL, 'index', 141, 142),
(73, 71, NULL, NULL, 'view', 143, 144),
(74, 71, NULL, NULL, 'add', 145, 146),
(75, 71, NULL, NULL, 'edit', 147, 148),
(76, 71, NULL, NULL, 'delete', 149, 150),
(77, 71, NULL, NULL, 'publish', 151, 152),
(78, 71, NULL, NULL, 'unpublish', 153, 154),
(79, 71, NULL, NULL, 'frontview', 155, 156),
(80, 71, NULL, NULL, 'contact_us', 157, 158),
(81, 71, NULL, NULL, 'hashids', 159, 160),
(82, 71, NULL, NULL, 'isAuthorized', 161, 162),
(83, 1, NULL, NULL, 'Profile', 164, 177),
(84, 83, NULL, NULL, 'index', 165, 166),
(85, 83, NULL, NULL, 'edit', 167, 168),
(86, 83, NULL, NULL, 'change_profile_photo', 169, 170),
(87, 83, NULL, NULL, 'change_password', 171, 172),
(88, 83, NULL, NULL, 'hashids', 173, 174),
(89, 83, NULL, NULL, 'isAuthorized', 175, 176),
(90, 1, NULL, NULL, 'Providers', 178, 193),
(91, 90, NULL, NULL, 'index', 179, 180),
(92, 90, NULL, NULL, 'view', 181, 182),
(93, 90, NULL, NULL, 'add', 183, 184),
(94, 90, NULL, NULL, 'edit', 185, 186),
(95, 90, NULL, NULL, 'delete', 187, 188),
(96, 90, NULL, NULL, 'hashids', 189, 190),
(97, 90, NULL, NULL, 'isAuthorized', 191, 192),
(98, 1, NULL, NULL, 'ProviderUsers', 194, 209),
(99, 98, NULL, NULL, 'index', 195, 196),
(100, 98, NULL, NULL, 'view', 197, 198),
(101, 98, NULL, NULL, 'add', 199, 200),
(102, 98, NULL, NULL, 'edit', 201, 202),
(103, 98, NULL, NULL, 'delete', 203, 204),
(104, 98, NULL, NULL, 'hashids', 205, 206),
(105, 98, NULL, NULL, 'isAuthorized', 207, 208),
(106, 1, NULL, NULL, 'Register', 210, 221),
(107, 106, NULL, NULL, 'index', 211, 212),
(108, 106, NULL, NULL, 'member', 213, 214),
(109, 106, NULL, NULL, 'provider', 215, 216),
(110, 106, NULL, NULL, 'hashids', 217, 218),
(111, 106, NULL, NULL, 'isAuthorized', 219, 220),
(112, 1, NULL, NULL, 'Slides', 222, 243),
(113, 112, NULL, NULL, 'index', 223, 224),
(114, 112, NULL, NULL, 'view', 225, 226),
(115, 112, NULL, NULL, 'add', 227, 228),
(116, 112, NULL, NULL, 'edit', 229, 230),
(117, 112, NULL, NULL, 'delete', 231, 232),
(118, 112, NULL, NULL, 'jsonUpdateSort', 233, 234),
(119, 112, NULL, NULL, 'publish', 235, 236),
(120, 112, NULL, NULL, 'unpublish', 237, 238),
(121, 112, NULL, NULL, 'hashids', 239, 240),
(122, 112, NULL, NULL, 'isAuthorized', 241, 242),
(123, 1, NULL, NULL, 'Users', 244, 291),
(124, 123, NULL, NULL, 'index', 245, 246),
(125, 123, NULL, NULL, 'dashboard', 247, 248),
(126, 123, NULL, NULL, 'view', 249, 250),
(127, 123, NULL, NULL, 'add', 251, 252),
(128, 123, NULL, NULL, 'edit', 253, 254),
(129, 123, NULL, NULL, 'delete', 255, 256),
(130, 123, NULL, NULL, 'login', 257, 258),
(131, 123, NULL, NULL, 'logout', 259, 260),
(132, 123, NULL, NULL, 'request_forgot_password', 261, 262),
(133, 123, NULL, NULL, 'change_password', 263, 264),
(134, 123, NULL, NULL, 'suspend', 265, 266),
(135, 123, NULL, NULL, 'activate', 267, 268),
(136, 123, NULL, NULL, 'front_login', 269, 270),
(137, 123, NULL, NULL, 'ajax_login', 271, 272),
(138, 123, NULL, NULL, 'loggedin', 273, 274),
(139, 123, NULL, NULL, 'activate_account', 275, 276),
(140, 123, NULL, NULL, 'google_login', 277, 278),
(141, 123, NULL, NULL, 'fb_login', 279, 280),
(142, 123, NULL, NULL, 'cron_remove_unverified_accounts', 281, 282),
(143, 123, NULL, NULL, 'front_forgot_password', 283, 284),
(144, 123, NULL, NULL, 'front_reset_password', 285, 286),
(145, 123, NULL, NULL, 'hashids', 287, 288),
(146, 123, NULL, NULL, 'isAuthorized', 289, 290),
(147, 1, NULL, NULL, 'Acl', 292, 293),
(148, 1, NULL, NULL, 'Bake', 294, 295),
(149, 1, NULL, NULL, 'CakePdf', 296, 297),
(150, 1, NULL, NULL, 'DebugKit', 298, 313),
(151, 150, NULL, NULL, 'Panels', 299, 304),
(152, 151, NULL, NULL, 'index', 300, 301),
(153, 151, NULL, NULL, 'view', 302, 303),
(154, 150, NULL, NULL, 'Requests', 305, 308),
(155, 154, NULL, NULL, 'view', 306, 307),
(156, 150, NULL, NULL, 'Toolbar', 309, 312),
(157, 156, NULL, NULL, 'clearCache', 310, 311),
(158, 1, NULL, NULL, 'Migrations', 314, 315),
(159, 1, NULL, NULL, 'Siezi\\SimpleCaptcha', 316, 317);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Groups', 1, NULL, 1, 4),
(2, NULL, 'Groups', 2, NULL, 5, 18),
(3, NULL, 'Groups', 3, NULL, 19, 32),
(4, NULL, 'Groups', 4, NULL, 33, 36),
(5, 1, 'Users', 1, NULL, 2, 3),
(6, 4, 'Users', 2, NULL, 34, 35),
(7, 2, 'Users', 3, NULL, 8, 9),
(8, 3, 'Users', 4, NULL, 30, 31),
(9, 3, 'Users', 5, NULL, 20, 21),
(10, 3, 'Users', 6, NULL, 22, 23),
(11, 3, 'Users', 7, NULL, 24, 25),
(12, 3, 'Users', 8, NULL, 26, 27),
(13, 2, 'Users', 10, NULL, 6, 7),
(14, 2, 'Users', 11, NULL, 10, 11),
(15, NULL, 'Groups', 5, NULL, 37, 46),
(16, 15, 'Users', 12, NULL, 40, 41),
(17, 15, 'Users', 13, NULL, 38, 39),
(18, 2, 'Users', 14, NULL, 12, 13),
(19, 2, 'Users', 15, NULL, 14, 15),
(20, 2, 'Users', 16, NULL, 16, 17),
(21, 3, 'Users', 17, NULL, 28, 29),
(22, 15, 'Users', 18, NULL, 42, 43),
(23, 15, 'Users', 19, NULL, 44, 45);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

DROP TABLE IF EXISTS `company_details`;
CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `qr_image` text COLLATE utf8_unicode_ci,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `inquiry_recipient` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `contact_number` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8_unicode_ci,
  `longtitude` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8_unicode_ci,
  `twitter` text COLLATE utf8_unicode_ci,
  `instagram` text COLLATE utf8_unicode_ci,
  `linkedin` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `name`, `logo`, `qr_image`, `email`, `address`, `inquiry_recipient`, `contact_number`, `fax`, `google_analytics`, `longtitude`, `latitude`, `facebook`, `twitter`, `instagram`, `linkedin`, `created`, `modified`) VALUES
(1, 'Company ABC', NULL, NULL, 'admin@gmail.com', '<p>Lorem ipsum dolor sit amet, cum ea paulo percipitur, enim virtute accusamus nam te. Ei bonorum nusquam civibus est, qui id facete recusabo. Probo modus ut has. Utamur iudicabit abhorreant cum no.</p>\r\n', 'admin@gmail.com', '1234-567', '12345', '<script>\r\n  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){\r\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');\r\n\r\n  ga(\'create\', \'UA-101002491-1\', \'auto\');\r\n  ga(\'send\', \'pageview\');\r\n\r\n</script>', '103.67841453967287', '1.523208409167528', 'http://facebook.com', 'http://twitter.com', 'http://instagram.com', 'http://linkedin.com', '2017-05-18 01:26:05', '2018-02-14 02:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(180) CHARACTER SET latin1 NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrator', '2018-04-24 11:53:14', '2018-04-24 11:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `body` text CHARACTER SET latin1 NOT NULL,
  `meta_title` text CHARACTER SET latin1 NOT NULL,
  `meta_keyword` text CHARACTER SET latin1 NOT NULL,
  `meta_description` text CHARACTER SET latin1 NOT NULL,
  `is_publish` smallint(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `body`, `meta_title`, `meta_keyword`, `meta_description`, `is_publish`, `created`, `modified`) VALUES
(1, 'Home', '<p>Lorem ipsum dolor sit amet, mea vide labitur id. Ea ius modo atomorum. Nec prima adipisci et. Cu eum verear percipit singulis, cu periculis persecuti usu.</p>\r\n\r\n<p>Nec etiam latine incorrupte id. Vim doctus adipiscing ad, ad iusto principes voluptatum eos. An nam suas voluptatum, et nec option consequuntur. Ei nonumy instructior has, liber aeque te per. Est nonumes evertitur conclusionemque ex.</p>\r\n\r\n<p>Summo officiis ea sea, sale nostrum id vel, duo at etiam postulant. Cum an odio lobortis. Sit atqui imperdiet in, vix erat posse ne. Equidem petentium facilisis mea ei.</p>\r\n', 'Home', 'Ranta', 'Home', 0, '2017-05-13 05:10:30', '2018-04-18 11:15:29'),
(2, 'test', 'test', 'test', 'test', 'test', 1, '2018-04-17 15:19:15', '2018-04-17 15:19:15'),
(3, 'Another Sample Page', '<p>Another Sample Page</p>\r\n', 'Another Sample Page', 'Another Sample Page', 'Another Sample Page', 1, '2018-04-17 15:55:04', '2018-04-17 15:55:04'),
(4, 'Test Page B', '<p>Test Page B</p>\r\n', 'Test Page B', 'Test Page B', 'Test Page B', 1, '2018-04-17 15:59:23', '2018-04-17 15:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `sorting` int(11) NOT NULL,
  `is_publish` smallint(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(80) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `group_id` int(11) NOT NULL,
  `activation_code` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_code` text COLLATE utf8_unicode_ci,
  `is_active` smallint(2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `email`, `username`, `password`, `photo`, `group_id`, `activation_code`, `reset_code`, `is_active`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'admin@gmail.com', 'admin@gmail.com', '$2y$10$rhyOQIxl3ue5BSaISkTRseiKDBuMUBYkvN5gHUcQhnxeQEB.u5ml6', NULL, 1, NULL, NULL, 1, '2018-04-24 11:55:34', '2018-04-24 11:55:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl_phinxlog`
--
ALTER TABLE `acl_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
