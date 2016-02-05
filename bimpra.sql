-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2016 at 06:17 PM
-- Server version: 5.6.25-log
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bimpra`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking_tours`
--

CREATE TABLE IF NOT EXISTS `booking_tours` (
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `from_date` date DEFAULT NULL,
  `n_ac` int(11) NOT NULL,
  `n_cwb` int(11) NOT NULL,
  `n_cnb` int(11) NOT NULL,
  `n_ic` int(11) NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `txnid` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_tours`
--

INSERT INTO `booking_tours` (`bid`, `cid`, `tid`, `amount`, `from_date`, `n_ac`, `n_cwb`, `n_cnb`, `n_ic`, `is_paid`, `txnid`) VALUES
(1, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(2, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(3, 3, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(4, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(5, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(6, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(7, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(8, 5, 4, '300.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(9, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(10, 4, 3, '2.00', '0000-00-00', 2, 0, 0, 0, 0, NULL),
(11, 3, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(12, 3, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(13, 3, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(14, 3, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(15, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(16, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(17, 3, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 1, '565c9b7ecf52d'),
(18, 3, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, '565ca750c6beb'),
(19, 4, 4, '300.00', '0000-00-00', 1, 0, 0, 0, 0, '565d42cf1f95d'),
(20, 3, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(21, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, '565d445457f25'),
(22, 4, 4, '300.00', '0000-00-00', 1, 0, 0, 0, 0, '565d483b6b487'),
(23, 5, 4, '600.00', '0000-00-00', 1, 0, 0, 0, 0, '565d4ec7d56cd'),
(24, 3, 4, '300.00', '0000-00-00', 1, 0, 0, 0, 0, '565e9cb958697'),
(25, 4, 6, '5.00', '0000-00-00', 3, 0, 1, 1, 0, '565eb47246748'),
(26, 2, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, '565eb942a9e7b'),
(27, 4, 4, '300.00', '0000-00-00', 1, 0, 0, 0, 0, '565edd85d3086'),
(28, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, '565fcfc4f0010'),
(29, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(30, 4, 3, '1.00', '0000-00-00', 1, 0, 0, 0, 0, NULL),
(31, 4, 3, '1.00', '2015-12-17', 1, 0, 0, 0, 0, NULL),
(32, 4, 3, '1.00', '2015-12-17', 1, 0, 0, 0, 0, '565fdf4a722f7'),
(33, 3, 3, '1.00', '2015-12-23', 1, 0, 0, 0, 0, NULL),
(34, 2, 4, '300.00', '2015-12-31', 1, 0, 0, 0, 0, '5660961e48700'),
(35, 2, 4, '300.00', '2015-12-31', 1, 0, 0, 0, 0, '566098141504a'),
(36, 2, 4, '300.00', '2015-12-31', 1, 0, 0, 0, 0, '56609a9835331'),
(37, 2, 4, '300.00', '2015-12-31', 1, 0, 0, 0, 0, '56609c722e0e5'),
(38, 19, 3, '6.00', '2015-12-23', 3, 0, 0, 0, 0, '56609e98f3cfe'),
(39, 20, 4, '300.00', '2015-12-24', 1, 0, 0, 0, 0, '56609ee1ecb56'),
(40, 21, 4, '300.00', '2015-12-24', 1, 0, 0, 0, 0, '5660a25e7b8b0'),
(41, 20, 4, '300.00', '2015-12-17', 1, 0, 0, 0, 0, '5660b0960bcbd'),
(42, 20, 4, '300.00', '2015-12-17', 1, 0, 0, 0, 0, '5660b0c04356c'),
(43, 20, 4, '300.00', '2015-12-17', 1, 0, 0, 0, 0, '5660b0fe1cfd5'),
(44, 2, 3, '1.00', '2015-12-16', 1, 0, 0, 0, 0, '5661327e06a98'),
(45, 20, 5, '1.00', '2015-12-15', 1, 0, 0, 0, 0, '566322b8ec2ef'),
(46, 2, 17, '6.00', '2015-12-31', 2, 0, 0, 0, 0, '56701c94b9da6'),
(47, 2, 17, '2.00', '2016-01-01', 1, 0, 0, 0, 0, '5670284f40f26'),
(48, 20, 17, '2.00', '2015-12-31', 1, 0, 0, 0, 0, '567039803e809'),
(49, 2, 3, '1.00', '2015-12-30', 1, 0, 0, 0, 0, '567076751f1ad');

-- --------------------------------------------------------

--
-- Table structure for table `citrus_tx`
--

CREATE TABLE IF NOT EXISTS `citrus_tx` (
  `TxId` varchar(50) NOT NULL,
  `TxStatus` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `pgTxnNo` varchar(50) DEFAULT NULL,
  `issuerRefNo` varchar(50) DEFAULT NULL,
  `authIdCode` varchar(50) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `pgRespCode` varchar(50) DEFAULT NULL,
  `addressZip` varchar(50) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citrus_tx`
--

INSERT INTO `citrus_tx` (`TxId`, `TxStatus`, `amount`, `pgTxnNo`, `issuerRefNo`, `authIdCode`, `firstName`, `lastName`, `pgRespCode`, `addressZip`, `service`, `id`) VALUES
('565c379e1b986', 'CANCELED', '1.00', 'CTX1511301149238684087', '', '', 'Sandeep', 'Kumar', '3', '', '', 0),
('565c4722db16e', 'CANCELED', '1.00', 'CTX1511301255366833013', '', '', 'Sandeep', 'Kumar', '3', '', '', 0),
('565c48ead0c19', 'CANCELED', '1.00', 'CTX1511301303131108212', '', '', 'Sandeep', 'Kumar', '3', '', '', 0),
('565c7344f3e14', 'CANCELED', '300.00', 'CTX1511301603556350100', '', '', 'Ashok', 'Saini', '3', '', '', 0),
('565c91c8e24da', 'CANCELED', '2.00', 'CTX1511301814061282026', '', '', 'Sandeep', 'Kumar', '3', '', '', 0),
('565c93cb31af1', 'CANCELED', '1.00', 'CTX1511301822416435580', '', '', 'sandeep', 'kumar', '3', '', '', 0),
('565c93f96e889', 'CANCELED', '1.00', 'CTX1511301823262850391', '', '', 'sandeep', 'kumar', '3', '', '', 0),
('565c98a77a0e8', 'CANCELED', '1.00', 'CTX1511301843249971775', '', '', 'Sandeep', 'Kumar', '3', '', '', 0),
('565c9b7ecf52d', 'SUCCESS', '1.00', 'vvbq7g', 'vvbq7g', 'T61116', 'sandeep', 'kumar', '0', '122018', 'Tour', 17),
('565ca750c6beb', 'CANCELED', '1.00', 'CTX151130194558559089', '', '', 'sandeep', 'kumar', '3', '', 'Tour', 18),
('565d42cf1f95d', 'CANCELED', '300.00', 'CTX1512010649265722372', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 19),
('565d445457f25', 'CANCELED', '1.00', 'CTX1512010655537249209', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 21),
('565d483b6b487', 'CANCELED', '300.00', 'CTX1512010712326781586', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 22),
('565d4ec7d56cd', 'CANCELED', '600.00', 'CTX1512010740303589787', '', '', 'Ashok', 'Saini', '3', '', 'Tour', 23),
('565e9cb958697', 'CANCELED', '300.00', 'CTX1512020725196987455', '', '', 'sandeep', 'kumar', '3', '', 'Tour', 24),
('565eb47246748', 'CANCELED', '5.00', 'CTX1512020906322595666', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 25),
('565eb942a9e7b', 'CANCELED', '1.00', 'CTX1512020927041209878', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 26),
('565edd85d3086', 'CANCELED', '300.00', 'CTX1512021201477072779', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 27),
('565fcfc4f0010', 'CANCELED', '1.00', 'CTX1512030515226900506', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 28),
('565fdf4a722f7', 'CANCELED', '1.00', 'CTX1512030621363266351', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 32),
('5660961e48700', 'CANCELED', '300.00', 'CTX1512031921411586671', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 34),
('566098141504a', 'CANCELED', '300.00', 'CTX1512031930047288670', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 35),
('56609a9835331', 'CANCELED', '300.00', 'CTX1512031940462251716', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 36),
('56609c722e0e5', 'CANCELED', '300.00', 'CTX1512031948405171050', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 37),
('56609e98f3cfe', 'CANCELED', '6.00', 'CTX1512031957528065333', '', '', 'pingu', 'pingu', '3', '', 'Tour', 38),
('56609ee1ecb56', 'CANCELED', '300.00', 'CTX151203195904680749', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 39),
('5660a25e7b8b0', 'CANCELED', '300.00', 'CTX1512032013576868675', '', '', 's', 's', '3', '', 'Tour', 40),
('5660b0960bcbd', 'CANCELED', '300.00', 'CTX1512032114365429125', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 41),
('5660b0c04356c', 'CANCELED', '300.00', 'CTX1512032115187267878', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 42),
('5660b0fe1cfd5', 'CANCELED', '300.00', 'CTX1512032116204099383', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 43),
('5661327e06a98', 'CANCELED', '1.00', 'CTX1512040628533562464', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 44),
('566322b8ec2ef', 'CANCELED', '1.00', 'CTX1512051746084900562', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 45),
('56701c94b9da6', 'CANCELED', '6.00', 'CTX1512151359274686051', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 46),
('5670284f40f26', 'CANCELED', '2.00', 'CTX1512151449293289958', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 47),
('567039803e809', 'CANCELED', '2.00', 'CTX1512151602518113573', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 48),
('567076751f1ad', 'CANCELED', '1.00', 'CTX1512152022551848243', '', '', 'Sandeep', 'Kumar', '3', '', 'Tour', 49);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cid` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone1` varchar(10) NOT NULL,
  `phone2` varchar(10) NOT NULL,
  `landline` varchar(15) NOT NULL,
  `lactive` tinyint(1) NOT NULL,
  `dcreated` date NOT NULL,
  `dmodified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL,
  `destination_country` varchar(250) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `travel_date` date DEFAULT NULL,
  `where_in_india` varchar(250) DEFAULT NULL,
  `num_persons` int(11) DEFAULT NULL,
  `num_kids` int(11) DEFAULT NULL,
  `budget_range` int(11) DEFAULT NULL,
  `tour_description` varchar(500) DEFAULT NULL,
  `departure_city` varchar(250) DEFAULT NULL,
  `departure_country` varchar(250) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_code` varchar(5) DEFAULT NULL,
  `phone_number` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `company_address` varchar(1000) DEFAULT NULL,
  `company_phone` varchar(25) DEFAULT NULL,
  `company_mobile` varchar(25) DEFAULT NULL,
  `customer_care_no` varchar(25) DEFAULT NULL,
  `customer_care_email` varchar(250) DEFAULT NULL,
  `facebook_link` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `google_plus_link` varchar(250) DEFAULT NULL,
  `youtube_link` varchar(250) DEFAULT NULL,
  `printrest_link` varchar(250) DEFAULT NULL,
  `sms_username` varchar(250) DEFAULT NULL,
  `sms_password` varchar(250) DEFAULT NULL,
  `sms_sende_id` varchar(250) DEFAULT NULL,
  `email_s_id` varchar(250) DEFAULT NULL,
  `email_s_password` varchar(250) DEFAULT NULL,
  `forget_password_setting_template` varchar(250) DEFAULT NULL,
  `forget_contact_no_setting_template` varchar(250) DEFAULT NULL,
  `google_analytics` varchar(250) DEFAULT NULL,
  `google_map` varchar(500) DEFAULT NULL,
  `google_verification_code` varchar(250) DEFAULT NULL,
  `live_chat` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_keyword` varchar(500) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `tds` float DEFAULT NULL,
  `book_api_offline` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `company_address`, `company_phone`, `company_mobile`, `customer_care_no`, `customer_care_email`, `facebook_link`, `twitter_link`, `google_plus_link`, `youtube_link`, `printrest_link`, `sms_username`, `sms_password`, `sms_sende_id`, `email_s_id`, `email_s_password`, `forget_password_setting_template`, `forget_contact_no_setting_template`, `google_analytics`, `google_map`, `google_verification_code`, `live_chat`, `seo_title`, `seo_keyword`, `seo_description`, `tds`, `book_api_offline`) VALUES
(1, 'Bimpra Tours And Travels', 'Bimpra Tours And Travels Private Limited 914 Regus Business Centre, 9th floor, Spaze i-TechPark, Sector 49, Sohna Road, Gurgaon 122018, Haryana', '111111111111', '2222222222', '3333333333333', 'info@bimpra.com', 'bimpra.com/facebook', '', '', '', NULL, 'kkumar.sandeep89@gmail.com', 'password', NULL, '', '', '', '', NULL, '', NULL, '', '', '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `state_id` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `display_name` varchar(240) NOT NULL,
  `url_name` varchar(240) NOT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `content` text,
  `ispublished` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `type`, `display_name`, `url_name`, `slug`, `content`, `ispublished`) VALUES
(2, 'Domestic', 'Punjab', 'punjab', 'punjab', '<p>Sample state</p>\r\n<p>&nbsp;</p>\r\n<p><img src="/bimpra_ci/images/240px-Durgiana_Temple,_Amritsar3.jpg" alt="" /></p>', 1),
(6, 'Domestic', 'Kerala', 'kerala', '', '<p>Wedged between the Western Ghats on the East and the Arabian Sea on the West, the narrow strip of land known as Kerala is a destination of a lifetime. Kerala popularly known as Gods Own Country is truly a blessed land with all the natural attractions and most modern amenities. The timeless beauty of the palm fringed beaches of Kovalam and Varkala, the majesty of the undulating hills of Munnar and Vagamon, the serenity of the pristine backwaters of Kumarakom &amp; Kuttanad and the enchanting woods and forests of Thekkady and Silent Valley will have you bowled over. That such a small terrain can hold diverse geographical features and cultures is a wonder in itself. Kerala is surely the wonder you wouldn&rsquo;t want to miss even a bit of!</p>\r\n<p><strong>General Information</strong></p>\r\n<p><strong>Capital : </strong>Thiruvananthapuram</p>\r\n<p><strong>Largest City </strong>: Thiruvananthapuram</p>\r\n<p><strong>Languages </strong>: Malayalam, English</p>\r\n<p><strong>Kerala can be best traveled to and enjoyed in all months of the year except May which is the hottest.</strong></p>\r\n<p>&nbsp;</p>\r\n<table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td align="left" width="400"><img src="http://33site.ru/assets/images/domestic/kerala/kerala1.jpg" alt="" width="400" height="150" /></td>\r\n<td>&nbsp;</td>\r\n<td>\r\n<h6>Mesmerising Kerala</h6>\r\n<h6>( 1N Cochin, 1N Thekkady, 2N Kumarakom, 2N Kovalam )</h6>\r\n<a class="gdl-button small" style="color: #ffffff; background-color: #c13a32; border-color: #9a2e28;" href="/bimpra_ci/administrator/states/[~39~]">VIEW DETAILS</a></td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align="left" width="400"><img src="/bimpra_ci/administrator/states/assets/images/domestic/kerala/kerala2.jpg" alt="" width="400" height="150" /></td>\r\n<td>&nbsp;</td>\r\n<td>\r\n<h2>Tropical Miracle</h2>\r\n<h6>( 2N Munnar, 2N Kumarakom, 2N Kovalam )</h6>\r\n<a class="gdl-button small" style="color: #ffffff; background-color: #c13a32; border-color: #9a2e28;" href="/bimpra_ci/administrator/states/[~40~]">VIEW DETAILS</a></td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align="left" width="400"><img src="/bimpra_ci/administrator/states/assets/images/domestic/kerala/kerala3.jpg" alt="" width="400" height="150" /></td>\r\n<td>&nbsp;</td>\r\n<td>\r\n<h2>Mystic Beats of Kerala</h2>\r\n<h6>( 2N Munnar, 1N Thekkady, 1N Alleppey, 2N Kovalam )</h6>\r\n<a class="gdl-button small" style="color: #ffffff; background-color: #c13a32; border-color: #9a2e28;" href="/bimpra_ci/administrator/states/[~41~]">VIEW DETAILS</a></td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align="left" width="400"><img src="/bimpra_ci/administrator/states/assets/images/domestic/kerala/kerala4.jpg" alt="" width="400" height="150" /></td>\r\n<td>&nbsp;</td>\r\n<td>\r\n<h2>Coconut Holidays</h2>\r\n<h6>( 2N Munnar, 1N Thekkady, 1N Kumarakom, 1N Alleppey )</h6>\r\n<a class="gdl-button small" style="color: #ffffff; background-color: #c13a32; border-color: #9a2e28;" href="/bimpra_ci/administrator/states/[~177~]">VIEW DETAILS</a></td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align="left" width="400"><img src="/bimpra_ci/administrator/states/assets/images/domestic/kerala/kerala4.jpg" alt="" width="400" height="150" /></td>\r\n<td>&nbsp;</td>\r\n<td>\r\n<h2>Backwater Serenity</h2>\r\n<h6>( 2N Munnar, 1N Kumarakom, 1N Alleppey, 2N Kovalam )</h6>\r\n<a class="gdl-button small" style="color: #ffffff; background-color: #c13a32; border-color: #9a2e28;" href="/bimpra_ci/administrator/states/[~183~]">VIEW DETAILS</a></td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align="left" width="400"><img src="/bimpra_ci/administrator/states/assets/images/domestic/kerala/kerala4.jpg" alt="" width="400" height="150" /></td>\r\n<td>&nbsp;</td>\r\n<td>\r\n<h2>Unlimited Memories at Kerala</h2>\r\n<h6>( 2N Munnar, 1N Thekkady, 1N Alleppey, 2N Kovalam )</h6>\r\n<a class="gdl-button small" style="color: #ffffff; background-color: #c13a32; border-color: #9a2e28;" href="/bimpra_ci/administrator/states/[~184~]">VIEW DETAILS</a></td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align="left" width="400"><img src="/bimpra_ci/administrator/states/assets/images/domestic/kerala/kerala4.jpg" alt="" width="400" height="150" /></td>\r\n<td>&nbsp;</td>\r\n<td>\r\n<h2>Unlimited Memories at Kerala(7 Nights)</h2>\r\n<h6>( 2N Munnar, 1N Thekaddy, 1N Kumarakom, 1N Alleppey, 2N kovalam )</h6>\r\n<a class="gdl-button small" style="color: #ffffff; background-color: #c13a32; border-color: #9a2e28;" href="/bimpra_ci/administrator/states/[~185~]">VIEW DETAILS</a></td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1),
(7, 'International', 'Singapore', 'singapore', 'Singapore desc', '<p>Singaore description</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL,
  `region` varchar(100) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `thumb` varchar(300) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `titleUrl` varchar(300) DEFAULT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `content` text,
  `isfeatured` tinyint(1) DEFAULT NULL,
  `ispublished` tinyint(1) DEFAULT NULL,
  `date_unpublish` date DEFAULT NULL,
  `has_delux` tinyint(1) DEFAULT NULL,
  `regular_adult_single` varchar(10) DEFAULT NULL,
  `regular_cnb_single` varchar(10) DEFAULT NULL,
  `regular_cwb_single` varchar(10) DEFAULT NULL,
  `regular_inf_single` varchar(10) DEFAULT NULL,
  `regular_adult_double` varchar(10) DEFAULT NULL,
  `regular_cnb_double` varchar(10) DEFAULT NULL,
  `regular_cwb_double` varchar(10) DEFAULT NULL,
  `regular_inf_double` varchar(10) DEFAULT NULL,
  `regular_adult_triple` varchar(10) DEFAULT NULL,
  `regular_cnb_triple` varchar(10) DEFAULT NULL,
  `regular_cwb_triple` varchar(10) DEFAULT NULL,
  `regular_inf_triple` varchar(10) DEFAULT NULL,
  `delux_adult_single` varchar(10) DEFAULT NULL,
  `delux_cnb_single` varchar(10) DEFAULT NULL,
  `delux_cwb_single` varchar(10) DEFAULT NULL,
  `delux_inf_single` varchar(10) DEFAULT NULL,
  `delux_adult_double` varchar(10) DEFAULT NULL,
  `delux_cnb_double` varchar(10) DEFAULT NULL,
  `delux_cwb_double` varchar(10) DEFAULT NULL,
  `delux_inf_double` varchar(10) DEFAULT NULL,
  `delux_adult_triple` varchar(10) DEFAULT NULL,
  `delux_cnb_triple` varchar(10) DEFAULT NULL,
  `delux_cwb_triple` varchar(10) DEFAULT NULL,
  `delux_inf_triple` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `region`, `state_id`, `thumb`, `title`, `titleUrl`, `slug`, `content`, `isfeatured`, `ispublished`, `date_unpublish`, `has_delux`, `regular_adult_single`, `regular_cnb_single`, `regular_cwb_single`, `regular_inf_single`, `regular_adult_double`, `regular_cnb_double`, `regular_cwb_double`, `regular_inf_double`, `regular_adult_triple`, `regular_cnb_triple`, `regular_cwb_triple`, `regular_inf_triple`, `delux_adult_single`, `delux_cnb_single`, `delux_cwb_single`, `delux_inf_single`, `delux_adult_double`, `delux_cnb_double`, `delux_cwb_double`, `delux_inf_double`, `delux_adult_triple`, `delux_cnb_triple`, `delux_cwb_triple`, `delux_inf_triple`) VALUES
(3, 'Domestic', 2, '', 'Golden temple', 'golden-temple', 'golden temple', '<p><img src="/images/indexfejk1.jpg" alt="" /><img src="/images/the-golden-temple-39a.jpg" alt="" /></p>', 1, 1, '2015-11-28', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(4, 'Domestic', 6, '', 'Mesmerising Kerala', 'mesmerising-kerala', '( 1N Cochin, 1N Thekkady, 2N Kumarakom, 2N Kovalam )', '<div id="content">\r\n<h1>Mesmerising Kerala</h1>\r\n<h6>( 1N Cochin, 1N Thekkady, 2N Kumarakom, 2N Kovalam )</h6>\r\n<div class="packageDetailOptionsDiv">\r\n<div class="packageDetailOptions"><strong>Inclusions</strong></div>\r\n</div>\r\n<div class="packageDetailRight">\r\n<div id="ContentPlaceHolder1_TabContainer1_tab2_divOverViewInclusion">&nbsp;</div>\r\n<div id="ContentPlaceHolder1_TabContainer1_tab2_divDestCoverOuter">\r\n<p><strong>Destinations Covered</strong></p>\r\n<div id="ContentPlaceHolder1_TabContainer1_tab2_divDestiCovered" class="innerContent">1N Cochin, 1N Thekkady, 2N Kumarakom, 2N Kovalam</div>\r\n<div class="innerContent">&nbsp;</div>\r\n<p class="innerContent"><span id="ContentPlaceHolder1_TabContainer1_tab2_spOverView">Away from the hectic schedule and monotonous routine, get away for a heavenly break at Kerala. Roam in the green panoramas, soothe yourself with an Ayurvedic massage, visit the tranquil backwaters, visit the intriguing elephant sanctuaries and feel the absolute spell of nature captivating you for a lifetime. Kerala with its several offerings is a perfect destination for a soul quenching break. You&rsquo;ll fall in love with its laid back ambience and would somehow never want to return back. </span></p>\r\n</div>\r\n</div>\r\n<div class="hotelMain">\r\n<div id="ContentPlaceHolder1_TabContainer1_IncExc_divInclusion" class="hotelMainLeft">\r\n<div id="ContentPlaceHolder1_TabContainer1_IncExc_UpdatePanel4"><strong><span class="orangeContent">Inclusions</span></strong>\r\n<ul>\r\n<li><strong>1 Night accommodation in Cochin</strong></li>\r\n<li><strong>1 Night accommodation in Thekkady</strong></li>\r\n<li><strong>2 Nights accommodation in Kumarakom</strong></li>\r\n<li><strong>2 Nights accommodation in Kovalam</strong></li>\r\n<li>Daily Buffet Breakfast at Hotel</li>\r\n<li>Airport transfers</li>\r\n<li>City tour &amp; Sightseeing tours (as mentioned in Itinerary)</li>\r\n<li>All Tours &amp; Transfers by Air conditioned private vehicle</li>\r\n<li>All Hotel taxes, Service charges &amp; Govt. Service Tax (3.50%)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div id="ContentPlaceHolder1_TabContainer1_IncExc_divExclusion" class="hotelMainLeft"><strong><span class="orangeContent">Exclusions</span></strong>\r\n<ul>\r\n<li>Airfare or Train tickets.</li>\r\n<li>Monument Entrance fees, Camera fees, Guide charges, Boating charges, etc. to be paid directly by the Guest (at different Sightseeing locations).</li>\r\n<li>Tip and Porter charges</li>\r\n<li>Expenses of Personal Nature, such as- tips, liquor, laundry, beverages, etc.</li>\r\n<li>Any Service not mentioned in Inclusions</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<p>Without flights.</p>\r\n<p><strong><span class="orangeHotel">Day 1: Arrive Cochin (Local Sightseeing)</span></strong></p>\r\n<p>On your arrival at Cochin Airport, our local representative will meet you near the exit area and will transfer to your hotel. Check in at the hotel and relax for a while.<br /><br />Refresh and proceed for an <strong>local sightseeing</strong> of Cochin where we would see Chinese Fishing Nets, Jewish Synagogue, Mattancherry Palace, St. Francis Church which is the oldest European church in India, and more. Return to the hotel by evening.<br /><br />Stay overnight at hotel in Cochin.</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span class="orangeHotel"> Day 2: Cochin to Thekkady (Local Sightseeing)</span></strong></p>\r\n<p>After having morning breakfast, check out from the hotel and proceed to Thekkady, the famous wildlife sanctuary of South India. Check in at the hotel upon arrival and relax. Later <strong>visit to Spice Village</strong> &amp; in the evening, enjoy a refreshing <strong>boat safari in the spectacular Periyar Lake</strong>. Take your camera along to capture the glances of some rare varieties of birds &amp; animals at Periyar National park. It is a home to nomadic tribes of wild elephant, boar, deer, the great Indian tiger and many more. Later return back to hotel.<br /><br />Stay overnight at hotel in Thekkady. (B)</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span class="orangeHotel"> Day 3: Thekkady to Kumarakom (Local Sightseeing)</span></strong></p>\r\n<p>Have a fill at morning breakfast, pack your bags and check out from the hotel. Drive to Kumarakom.<br /><br />Kumarakom has immense natural beauty. Famous for its backwaters, it is a great attraction for tourists who wish to experience houseboat holidays. Vembanad Lake is one of the longest Lake in India and is at its maximum widest point in Kumarakom. Check in and relax for a while. In the afternoon, visit <strong>Kumarakom Bird Sanctuary</strong>, one of the favourite hunts of migratory birds from across the world that makes it a renowned bird watching centre.<br /><br />Stay overnight at hotel in Kumarakom. (B)</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span class="orangeHotel"> Day 4: Kumarakom - Alleppey - Kumarakom</span></strong></p>\r\n<p>Relish morning breakfast at hotel. Today we proceed to Alleppey, known as &ldquo;Venice of East&rdquo;. Enjoy a <strong>4 hour houseboat ride</strong> and freshly prepared lunch in the houseboat. Houseboat is the best option to explore the backwater beauty of this region. You may come across vendors selling fresh vegetables, sea food, etc. on small boats as livelihood of people in this region is mostly dependent on the backwaters. After completing the tour, we drive back to Kumarakom.<br /><br />Stay overnight at hotel in Kumarakom. (B + L)</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span class="orangeHotel"> Day 5: Kumarakom to Kovalam</span></strong></p>\r\n<p>After morning breakfast, check out from the hotel and drive to Kovalam.<br /><br />Kovalam is an evergreen and pleasant climatic beach resort. With high rocks and calm blue water bays, it is a true paradise for tourists. Well developed, warm and clean atmosphere along with white sand beaches and coconut trees are perfect for relaxing holidays with sea breeze gently playing with the waves. Check in at the hotel and relax. Rest of the day is free for your own leisure.<br /><br />Stay overnight at hotel in Kovalam. (B)</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span class="orangeHotel"> Day 6: Kovalam - Kanyakumari (90 kms) - Kovalam</span></strong></p>\r\n<p>Have morning breakfast and proceed for <strong>full day trip to Kanyakumari</strong>.<br /><br />Best described as the southern-most end of India in Tamil Nadu, Kanyakumari or the Cape Comorin is one of the most popular tourist spots of India. This is the point where the three seas meet i.e. Bay of Bengal, Arabian Sea and the Indian Ocean. The most beautiful and spectacular attraction is its unique sunrise and sunset. Enjoy the spectacular evening sunset from the Vivekananda Rock. Drive back to Kovalam.<br /><br />Stay overnight at hotel in Kovalam. (B)</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span class="orangeHotel"> Day 7: Kovalam - Departure</span></strong></p>\r\n<p>Rise to return. Have your morning breakfast and pack your bags. Today we check out from the hotel and proceed to Trivandrum Airport to catch your departing flight.<br /><br />Hope you had a great trip. (B)</p>\r\n<p><strong><span id="ContentPlaceHolder1_TabContainer1_lTerms_rptTermsCondition_spnConditionName_0" class="orangeHotel">Terms &amp; Conditions</span></strong></p>\r\n<ul>\r\n<ul>\r\n<li>Similar * means the hotels with per night room tariff differential in the range of ten-fifteen Dollars.</li>\r\n<li>Package cost includes (ground handling charges) Dollar Segment, which will be taken out of your BTQ (Basic Travel Quota)</li>\r\n<li>Normal hotel check in time is 1400 - 1600 hours and check out time is 1000 - 1200 hours</li>\r\n<li>Package cost is subject to change until full confirmation for package tour.</li>\r\n<li>Rooms are subject to availability.</li>\r\n<li>Selection of seats in Airline is subject to availability and is at sole discretion of the airlines.</li>\r\n<li>All transfers tours based on Seat-In-Coach (SIC) basis (Shared Basis).</li>\r\n<li>Date and Timing of tours programmed can be changed by local agent.</li>\r\n<li>As of now we are not holding any service, it is Subject to Availability. Booking process will start only after receiving booking amount.</li>\r\n<li>Room type (double or twin is Subject to Availability and is at sole discretion of the hotel)</li>\r\n<li>Above tour prices are subject to change in the event of increase in hotel room rates levy by the hotel especially during peak season/holiday surcharge and major events/fairs and convention.</li>\r\n<li>Tour is in group &amp; one may have to wait intermittently for transfers especially for pick-up and dropping as transfers services are used for other group tourists too.</li>\r\n<li>The time schedule fixed by the local tour operator should be strictly adhered to. For any inconvenience, loss or consequence suffered due to tourist&rsquo;s failure to keep the local tour operators timings, the tourist alone would be responsible. Please also note that unlike in the case of individual tailor made tour packages; you might have to adjust timings for the sake of general member of your tour group. Hotels mentioned now are only proposed at the moment. The hotel named in the service voucher shall be final.</li>\r\n<li>Scheduling &amp; Re-scheduling may be done on circumstance prevailing at the time tour operations in best interest of tour group at the discretion group coordinator (Destination Management Company).</li>\r\n<li>This intimation supersede all previous offers by us and any verbal communication or offer made earlier by any of our representatives.</li>\r\n</ul>\r\n</ul>\r\n<p><br /><strong>Condition Apply (refer Terms &amp; Conditions)</strong></p>\r\n<ul>\r\n<ul>\r\n<li>The aforementioned description is just for informative purpose. Final package tour components shall be mentioned on the voucher at the time of finalizing the tour package. The travel tour components mentioned here are subject to change at last minute variation that may occur due to factors beyond our control.</li>\r\n<li>I have gone through the contents of above informative brochure &amp; above mentioned terms &amp; conditions and I accept package which fits into my budget and requirement.</li>\r\n</ul>\r\n</ul>\r\n</div>', 1, 1, '2015-11-25', 1, '300', '0', '100', '0', '150', '0', '100', '0', '0', '0', '100', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Domestic', 2, '', 'test', 'test', 'test', '<p>tet</p>', 1, 1, '2015-11-12', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Domestic', 2, '', 'A test tour', 'a-test-tour', 'A test', '<p style="text-align: center;"><span style="font-size: xx-large;"><strong>Durgiyana Temple</strong></span></p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/240px-Durgiana_Temple,_Amritsar4.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: left;">Some Description</p>\r\n<p style="text-align: left;">&nbsp;</p>', 1, 1, '2016-01-01', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(7, 'Domestic', 2, '', 'thum test', 'thum-test', 'asdasd', '<p>asdasd</p>', 1, 1, '2015-12-09', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'Domestic', 2, '', 'dd', 'dd', 'dd', '<p>ddd</p>', 0, 0, '2015-12-14', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Domestic', 6, '', 'dd', 'dd', 'asdasd', '<p>asdsad</p>', 1, 1, '2015-12-02', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Domestic', 2, '', 'ccccdcd', 'ccccdcd', 'sdfsdf', '<p>dddd</p>', 1, 1, '2015-12-31', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Domestic', 2, '', 'ccccccccccccc', 'ccccccccccccc', 'ccccccccccccc', '<p>ccccccccccc</p>', 1, 1, '2015-12-10', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', 0, '', 'ddd', 'ddd', 'ddd', '<p>ddd</p>', 0, 0, '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Domestic', 2, 'images/ccccccccccccccc1.jpg', 'ffff', 'ffff', 'fffefef', '<p>dddd</p>', 0, 0, '2016-01-01', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Domestic', 2, 'images/ccccccccccccccc2.jpg', 'ffff', 'ffff', 'fffefef', '<p>dddd</p>', 1, 0, '2016-01-01', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'Domestic', 2, 'images/ccccccccccccccc3.jpg', 'proper tour', 'proper-tour', 'proper description', '<p>ddddd</p>', 1, 1, '2015-12-31', 1, '22', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '5', '5', '5', '', '8', '585858', '58', '58', '58', '58', '58', '58'),
(16, 'Domestic', 2, 'images/ccccccccccccccc4.jpg', 'oooooooo', 'oooooooo', 'ooooooooooooo', '<p>rrrr</p>', 1, 0, '2015-12-24', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'International', 7, 'images/singapore1.jpg', 'Some city', 'some-city', 'some desc', '<p><img src="/images/singapore.jpg" alt="" /></p>', 1, 1, '2015-12-31', 1, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `lactive` tinyint(1) NOT NULL,
  `dcreated` date NOT NULL,
  `dmodified` date DEFAULT NULL,
  `via_social` tinyint(1) DEFAULT NULL,
  `social_platform` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `first_name`, `last_name`, `middle_name`, `type`, `email`, `password`, `lactive`, `dcreated`, `dmodified`, `via_social`, `social_platform`) VALUES
(2, 'Sandeep ', 'Kumar', '', 1, 'kkumar.sandeep89@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2015-11-04', '2015-11-26', NULL, ''),
(5, 'Ashok', 'Saini', NULL, 3, 'ashok@mail.ru', NULL, 1, '2015-11-30', NULL, 1, 'facebook'),
(19, 'pingu', 'pingu', NULL, 3, 'pingu@pingul.com', '5f4dcc3b5aa765d61d8327deb882cf99', 0, '2015-12-03', NULL, 0, NULL),
(20, 'Sandeep', 'Kumar', NULL, 1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2015-12-03', NULL, 1, 'facebook'),
(21, 's', 's', NULL, 3, 's@s.com', '5f4dcc3b5aa765d61d8327deb882cf99', 0, '2015-12-03', NULL, 0, NULL),
(22, 'w', 'w', NULL, 3, 'w@gg.gg', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2015-12-04', NULL, 0, NULL),
(23, 'sandeep', 'kumar', NULL, 3, 'kkumar.sandeep89@gmail.com', NULL, 1, '2015-12-15', NULL, 1, 'google'),
(24, 'Rahul', 'kumar', NULL, 3, 'rforrahul@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2015-12-15', NULL, 0, NULL),
(25, 'Rahul', 'kumar', NULL, 3, 'rforrahul3@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2015-12-15', NULL, 0, NULL),
(26, 'rahul', 'kumar', NULL, 3, 'rahul4love@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 0, '2015-12-15', NULL, 0, NULL),
(27, 'Dishit', 'Dishit', NULL, 3, 'dishit@ivinfotech.in', 'd41d8cd98f00b204e9800998ecf8427e', 0, '2015-12-19', NULL, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_tours`
--
ALTER TABLE `booking_tours`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `citrus_tx`
--
ALTER TABLE `citrus_tx`
  ADD PRIMARY KEY (`TxId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`) COMMENT 'id';

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking_tours`
--
ALTER TABLE `booking_tours`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
