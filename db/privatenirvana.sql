-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 11:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `privatenirvana`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_footer`
--

CREATE TABLE `b_footer` (
  `id` int(2) UNSIGNED NOT NULL,
  `descriptions` text NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_by` varchar(100) NOT NULL,
  `delete_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b_footer`
--

INSERT INTO `b_footer` (`id`, `descriptions`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(1, '<p>Address :<span style=\"font-size: small;\">32/216 ', '', '0000-00-00 00:00:00', 'admin', '2011-02-23 10:02:44', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_contact_us`
--

CREATE TABLE `s_contact_us` (
  `id` bigint(20) NOT NULL,
  `contact_name` varchar(150) DEFAULT NULL,
  `contact_name_native` varchar(150) DEFAULT NULL,
  `contact_address` text,
  `contact_address_native` text,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_web` varchar(255) DEFAULT NULL,
  `contact_phone1` varchar(50) DEFAULT NULL,
  `contact_phone2` varchar(50) DEFAULT NULL,
  `contact_phone3` varchar(50) DEFAULT NULL,
  `contact_phone4` varchar(50) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `googlemap` text,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_contact_us`
--

INSERT INTO `s_contact_us` (`id`, `contact_name`, `contact_name_native`, `contact_address`, `contact_address_native`, `contact_email`, `contact_web`, `contact_phone1`, `contact_phone2`, `contact_phone3`, `contact_phone4`, `facebook`, `instagram`, `googlemap`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(1, 'Private Nirvana Co.,Ltd.', 'บริษัท ไพรเวท เนอวานา จำกัด', '8 Soi Yothinpattana 11 Yake 7, Klongchan, Bangkapi, Bangkok 10240, Thailand', 'เลขที่ 8 ซอยโยธินพัฒนา 11 แยก 7 แขวงคลองจั่น เขตบางกะปิ กรุงเทพฯ 10240', 'privatenirvana@private-nirvana.com', 'www.private-nirvana.com', '+66 (0) 2538 4884', '+66 (0) 2538 3883', '+66 (0)8 1984 7554', '+66 (0) 2538 4883', 'https://www.facebook.com/privatenirvana/?_rdc=1&_rdr', 'https://www.instagram.com/privatenirvana', 'https://www.google.com/maps/place/Private+Nirvana+Residence+North/@13.807183,100.6227956,17z/data=!3m1!4b1!4m5!3m4!1s0x311d6276d230ffcd:0x1f56ab06da174885!8m2!3d13.8071778!4d100.6249896', '0000-00-00 00:00:00', NULL, '2019-04-05 07:04:54', 'admin', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `s_group`
--

CREATE TABLE `s_group` (
  `group_id` tinyint(3) UNSIGNED NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(100) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_group`
--

INSERT INTO `s_group` (`group_id`, `group_name`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(2, 'Super Admin', 'admin', '2010-04-25 04:06:00', 'admin', '2011-01-06 16:01:53', NULL, '0000-00-00 00:00:00'),
(3, 'User', 'admin', '2010-04-25 04:15:08', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_home`
--

CREATE TABLE `s_home` (
  `id` bigint(20) NOT NULL,
  `box1_1` varchar(255) DEFAULT NULL,
  `box1_2` varchar(255) DEFAULT NULL,
  `box1_3` varchar(255) DEFAULT NULL,
  `box1_1_native` varchar(255) DEFAULT NULL,
  `box1_2_native` varchar(255) DEFAULT NULL,
  `box1_3_native` varchar(255) DEFAULT NULL,
  `box1_img` varchar(100) DEFAULT NULL,
  `box1_link` text,
  `box2_1` varchar(255) DEFAULT NULL,
  `box2_2` varchar(255) DEFAULT NULL,
  `box2_3` varchar(255) DEFAULT NULL,
  `box2_4` varchar(255) DEFAULT NULL,
  `box2_1_native` varchar(255) DEFAULT NULL,
  `box2_2_native` varchar(255) DEFAULT NULL,
  `box2_3_native` varchar(255) DEFAULT NULL,
  `box2_4_native` varchar(255) DEFAULT NULL,
  `box2_img` varchar(100) DEFAULT NULL,
  `box2_link` text,
  `box3_1` varchar(255) DEFAULT NULL,
  `box3_2` varchar(255) DEFAULT NULL,
  `box3_3` varchar(255) DEFAULT NULL,
  `box3_1_native` varchar(255) DEFAULT NULL,
  `box3_2_native` varchar(255) DEFAULT NULL,
  `box3_3_native` varchar(255) DEFAULT NULL,
  `box3_img` varchar(100) DEFAULT NULL,
  `box3_link` text,
  `box4_1` varchar(150) DEFAULT NULL,
  `box4_2` varchar(150) DEFAULT NULL,
  `box4_3` text,
  `box4_1_native` varchar(150) DEFAULT NULL,
  `box4_2_native` varchar(150) DEFAULT NULL,
  `box4_3_native` text,
  `box4_link` text,
  `box4_img` varchar(150) DEFAULT NULL,
  `box5_link` text,
  `box5_img` varchar(150) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_home`
--

INSERT INTO `s_home` (`id`, `box1_1`, `box1_2`, `box1_3`, `box1_1_native`, `box1_2_native`, `box1_3_native`, `box1_img`, `box1_link`, `box2_1`, `box2_2`, `box2_3`, `box2_4`, `box2_1_native`, `box2_2_native`, `box2_3_native`, `box2_4_native`, `box2_img`, `box2_link`, `box3_1`, `box3_2`, `box3_3`, `box3_1_native`, `box3_2_native`, `box3_3_native`, `box3_img`, `box3_link`, `box4_1`, `box4_2`, `box4_3`, `box4_1_native`, `box4_2_native`, `box4_3_native`, `box4_link`, `box4_img`, `box5_link`, `box5_img`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(1, 'Welcome to', 'Private Nirvana...', 'Clean...Bright...Quiet and Private', 'Welcome to', 'Private Nirvana...', 'Clean...Bright...Quiet and Private', '619025.jpg', 'index.php', 'Private Nirvana Through', 'Ekamai-Ramintra', 'Twin House', '“ Live High THROUGH Nature ”', 'Private Nirvana Through', 'Ekamai-Ramintra', 'Twin House', '“ Live High THROUGH Nature ”', '694955.jpg', 'index.php', 'Private Nirvana Residence East', 'Single House', '“ Living Along The Trees ”', 'Private Nirvana Residence East', 'Single House', '“ Living Along The Trees ”', '604764.jpg', 'index.php', 'Every Space is', 'Our Concept', '“Clean...Bright...Quiet and Private” is the quintessential concept of our projects we have built on and dedicated to.<br />\r\nUnder the one and only trademark, “Private Nirvana,” we persist to create special neighborly home by aiming to serve a great sense of pride to our homeowners. Each project itself – feels completely relevant from now till far future–was established in a way of new strikingly modern and characterful residence without compromising on quality. What is more, sourcing only best materials, ideal locations including creating sophisticated design, we put in extra effort to exceed customer expectations.', 'Every Space is', 'Our Concept', '“Clean...Bright...Quiet and Private” is the quintessential concept of our projects we have built on and dedicated to.<br />\r\nUnder the one and only trademark, “Private Nirvana,” we persist to create special neighborly home by aiming to serve a great sense of pride to our homeowners. Each project itself – feels completely relevant from now till far future–was established in a way of new strikingly modern and characterful residence without compromising on quality. What is more, sourcing only best materials, ideal locations including creating sophisticated design, we put in extra effort to exceed customer expectations.', 'index.php', '150201.jpg', 'pdf/why_private_nirvana.pdf', '632646.jpg', '0000-00-00 00:00:00', NULL, '2019-04-09 05:04:10', 'admin', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `s_lang`
--

CREATE TABLE `s_lang` (
  `lang_id` bigint(20) NOT NULL,
  `lang_name` varchar(100) NOT NULL,
  `lang_key` varchar(50) NOT NULL,
  `lang_images` varchar(255) NOT NULL,
  `lang_status` int(2) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_lang`
--

INSERT INTO `s_lang` (`lang_id`, `lang_name`, `lang_key`, `lang_images`, `lang_status`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(1, 'ไทย', 'thai', '060326.jpg', 0, '2012-05-04 10:32:07', 'admin', '2012-05-04 13:05:00', 'admin', '0000-00-00 00:00:00', NULL),
(2, 'English', 'english', '467720.jpg', 0, '2012-05-04 10:32:15', 'admin', '2012-05-04 11:05:15', 'admin', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `s_module`
--

CREATE TABLE `s_module` (
  `module_id` bigint(20) NOT NULL,
  `module_name` varchar(50) DEFAULT NULL,
  `tag_title` text NOT NULL,
  `tag_meta` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_module`
--

INSERT INTO `s_module` (`module_id`, `module_name`, `tag_title`, `tag_meta`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(1, 'User', '', '', '2005-09-22 11:09:57', 'admin', '2010-04-25 05:04:06', 'admin', '0000-00-00 00:00:00', ''),
(6, 'Menu', '', '', '2010-04-25 05:35:53', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(2, 'Group', '', '', '2008-06-02 12:13:47', 'admin', '2010-04-25 05:04:00', 'admin', '0000-00-00 00:00:00', ''),
(5, 'User Group', '', '', '2010-04-25 05:22:22', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(4, 'Module', '', '', '2010-04-15 00:00:00', 'admin', '2010-04-25 05:04:47', 'admin', '0000-00-00 00:00:00', NULL),
(3, 'User permission', '', '', '0000-00-00 00:00:00', 'admin', '2010-04-25 05:04:54', 'admin', '0000-00-00 00:00:00', NULL),
(7, 'Setting', '', '', '2010-07-11 21:55:34', 'admin', '2010-07-31 03:07:39', 'admin', '0000-00-00 00:00:00', NULL),
(13, 'Contact US', '', '', '2019-04-05 06:43:12', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(12, 'Subscribe', '', '', '2019-04-05 04:39:34', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(14, 'News', '', '', '2019-04-05 12:14:08', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(15, 'Home', '', '', '2019-04-06 02:45:03', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(16, 'Portfolios', '', '', '2019-04-09 06:16:01', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `s_news`
--

CREATE TABLE `s_news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `images` varchar(50) DEFAULT NULL,
  `news_name` varchar(255) DEFAULT NULL,
  `news_name_native` varchar(255) DEFAULT NULL,
  `news_desc` text,
  `news_desc_native` text,
  `sorts` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `news_month` varchar(10) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `delete_by` varchar(100) DEFAULT NULL,
  `delete_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_news`
--

INSERT INTO `s_news` (`news_id`, `images`, `news_name`, `news_name_native`, `news_desc`, `news_desc_native`, `sorts`, `status`, `news_month`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(10, '645196_.jpg', '2.The atmosphere is open to watch Private Nirvana houses through Ekamai-Ramindra.', 'บรรยากาศ เปิดชมบ้าน Private Nirvana Through เอกมัย - รามอินทรา', '<p>ขอขอบคุณลูกค้าทุกท่านที่ให้ความสนใจและเลือกจองบ้าน Private Nirvana THROUGH เอกมัย - รามอินทรา เมื่อวัน ที่ 16 - 17 มีนาคม 2562 ที่ผ่านมา บรรยากาศภายในงานเต็มไปด้วยความอบอุ่นและเป็ นกันเอง พร้อมอิ่มอร่อยกับของว่างสไตล์ Cocktail ที่มีบริการตลอดทั้งวัน</p>\r\n<p>&nbsp;</p>\r\n<p>Private Nirvana THROUGH เอกมัย - รามอินทรา บ้าน 3 ชั้นที่มี Option ให้เลือกมากถึง 4 แบบ เริ่มต้น 10.8 ลบ.</p>\r\n<p>&nbsp;</p>\r\n<p>สอบถามข้อมูลเพิ่มเติม โทร. 02 003 9888</p>', '<p>ขอขอบคุณลูกค้าทุกท่านที่ให้ความสนใจและเลือกจองบ้าน Private Nirvana THROUGH เอกมัย - รามอินทรา เมื่อวัน ที่ 16 - 17 มีนาคม 2562 ที่ผ่านมา บรรยากาศภายในงานเต็มไปด้วยความอบอุ่นและเป็ นกันเอง พร้อมอิ่มอร่อยกับของว่างสไตล์ Cocktail ที่มีบริการตลอดทั้งวัน</p>\r\n<p>&nbsp;</p>\r\n<p>Private Nirvana THROUGH เอกมัย - รามอินทรา บ้าน 3 ชั้นที่มี Option ให้เลือกมากถึง 4 แบบ เริ่มต้น 10.8 ลบ.</p>\r\n<p>&nbsp;</p>\r\n<p>สอบถามข้อมูลเพิ่มเติม โทร. 02 003 9888</p>', 9999, 0, '2019-04', 'admin', '2019-04-05 13:05:16', 'admin', '2019-04-05 14:04:03', NULL, '2019-04-05 18:04:16'),
(9, '645196.jpg', '1.The atmosphere is open to watch Private Nirvana houses through Ekamai-Ramindra.', 'บรรยากาศ เปิดชมบ้าน Private Nirvana Through เอกมัย - รามอินทรา', '<p>ขอขอบคุณลูกค้าทุกท่านที่ให้ความสนใจและเลือกจองบ้าน Private Nirvana THROUGH เอกมัย - รามอินทรา เมื่อวัน ที่ 16 - 17 มีนาคม 2562 ที่ผ่านมา บรรยากาศภายในงานเต็มไปด้วยความอบอุ่นและเป็ นกันเอง พร้อมอิ่มอร่อยกับของว่างสไตล์ Cocktail ที่มีบริการตลอดทั้งวัน</p>\r\n<p>&nbsp;</p>\r\n<p>Private Nirvana THROUGH เอกมัย - รามอินทรา บ้าน 3 ชั้นที่มี Option ให้เลือกมากถึง 4 แบบ เริ่มต้น 10.8 ลบ.</p>\r\n<p>&nbsp;</p>\r\n<p>สอบถามข้อมูลเพิ่มเติม โทร. 02 003 9888</p>', '<p>ขอขอบคุณลูกค้าทุกท่านที่ให้ความสนใจและเลือกจองบ้าน Private Nirvana THROUGH เอกมัย - รามอินทรา เมื่อวัน ที่ 16 - 17 มีนาคม 2562 ที่ผ่านมา บรรยากาศภายในงานเต็มไปด้วยความอบอุ่นและเป็ นกันเอง พร้อมอิ่มอร่อยกับของว่างสไตล์ Cocktail ที่มีบริการตลอดทั้งวัน</p>\r\n<p>&nbsp;</p>\r\n<p>Private Nirvana THROUGH เอกมัย - รามอินทรา บ้าน 3 ชั้นที่มี Option ให้เลือกมากถึง 4 แบบ เริ่มต้น 10.8 ลบ.</p>\r\n<p>&nbsp;</p>\r\n<p>สอบถามข้อมูลเพิ่มเติม โทร. 02 003 9888</p>', 9999, 0, '2019-03', 'admin', '2019-03-05 13:04:16', 'admin', '2019-04-05 14:04:00', NULL, '2019-04-05 18:04:16'),
(11, '868233.jpg', '3.The atmosphere is open to watch Private Nirvana houses through Ekamai-Ramindra.', 'บรรยากาศ เปิดชมบ้าน Private Nirvana Through เอกมัย - รามอินทรา', '<p>ขอขอบคุณลูกค้าทุกท่านที่ให้ความสนใจและเลือกจองบ้าน Private Nirvana THROUGH เอกมัย - รามอินทรา เมื่อวัน ที่ 16 - 17 มีนาคม 2562 ที่ผ่านมา บรรยากาศภายในงานเต็มไปด้วยความอบอุ่นและเป็ นกันเอง พร้อมอิ่มอร่อยกับของว่างสไตล์ Cocktail ที่มีบริการตลอดทั้งวัน</p>\r\n<p>&nbsp;</p>\r\n<p>Private Nirvana THROUGH เอกมัย - รามอินทรา บ้าน 3 ชั้นที่มี Option ให้เลือกมากถึง 4 แบบ เริ่มต้น 10.8 ลบ.</p>\r\n<p>&nbsp;</p>\r\n<p>สอบถามข้อมูลเพิ่มเติม โทร. 02 003 9888</p>', '<p>ขอขอบคุณลูกค้าทุกท่านที่ให้ความสนใจและเลือกจองบ้าน Private Nirvana THROUGH เอกมัย - รามอินทรา เมื่อวัน ที่ 16 - 17 มีนาคม 2562 ที่ผ่านมา บรรยากาศภายในงานเต็มไปด้วยความอบอุ่นและเป็ นกันเอง พร้อมอิ่มอร่อยกับของว่างสไตล์ Cocktail ที่มีบริการตลอดทั้งวัน</p>\r\n<p>&nbsp;</p>\r\n<p>Private Nirvana THROUGH เอกมัย - รามอินทรา บ้าน 3 ชั้นที่มี Option ให้เลือกมากถึง 4 แบบ เริ่มต้น 10.8 ลบ.</p>\r\n<p>&nbsp;</p>\r\n<p>สอบถามข้อมูลเพิ่มเติม โทร. 02 003 9888</p>', 9999, 0, '2019-04', 'admin', '2019-04-05 15:45:28', 'admin', '2019-04-05 15:04:59', NULL, '2019-04-05 20:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `s_news_gallery`
--

CREATE TABLE `s_news_gallery` (
  `img_id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED DEFAULT NULL,
  `title_name` varchar(100) DEFAULT NULL,
  `sorts` int(11) DEFAULT '9999',
  `flag_show` int(2) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `delete_by` varchar(100) DEFAULT NULL,
  `delete_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_news_gallery`
--

INSERT INTO `s_news_gallery` (`img_id`, `news_id`, `title_name`, `sorts`, `flag_show`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(9, 9, 'prnews01_02.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(7, 9, 'prnews01_01.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(8, 9, 'prnews01_03.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(10, 9, 'prnews01_04.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(11, 9, 'prnews01_05.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(12, 9, 'prnews01_06.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(13, 9, 'prnews01_07.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(14, 9, 'prnews01_08.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(15, 9, 'prnews01_09.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(16, 9, 'prnews01_10.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(17, 10, 'prnews01_02.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(18, 10, 'prnews01_01.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(19, 10, 'prnews01_03.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(20, 10, 'prnews01_04.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(21, 10, 'prnews01_05.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(22, 10, 'prnews01_06.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(23, 10, 'prnews01_07.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(24, 10, 'prnews01_08.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(25, 10, 'prnews01_09.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(26, 10, 'prnews01_10.jpg', 9999, 0, 'admin', '2019-04-05 13:04:55', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_project`
--

CREATE TABLE `s_project` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `project_group` int(11) DEFAULT NULL,
  `images` varchar(50) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_name_native` varchar(255) DEFAULT NULL,
  `box1_img` varchar(150) DEFAULT NULL,
  `box2_img` varchar(150) DEFAULT NULL,
  `box3_img` varchar(150) DEFAULT NULL,
  `box1_1` text,
  `box1_1_native` text,
  `box1_2` text,
  `box1_2_native` text,
  `box1_3` text,
  `box1_3_native` text,
  `box1_4` text,
  `box1_4_native` text,
  `g_img1` varchar(100) DEFAULT NULL,
  `g_img2` varchar(100) DEFAULT NULL,
  `g_img3` varchar(100) DEFAULT NULL,
  `g_img4` varchar(100) DEFAULT NULL,
  `g_img5` varchar(100) DEFAULT NULL,
  `g_img6` varchar(100) DEFAULT NULL,
  `g_img7` varchar(100) DEFAULT NULL,
  `g_img8` varchar(100) DEFAULT NULL,
  `g_img9` varchar(100) DEFAULT NULL,
  `g_img10` varchar(100) DEFAULT NULL,
  `g_img11` varchar(100) DEFAULT NULL,
  `g_img12` varchar(100) DEFAULT NULL,
  `g_img13` varchar(100) DEFAULT NULL,
  `g_img14` varchar(100) DEFAULT NULL,
  `g_img15` varchar(100) DEFAULT NULL,
  `g_img16` varchar(100) DEFAULT NULL,
  `location` text,
  `facilities1_1` text,
  `facilities1_1_native` text,
  `facilities1_2` text,
  `facilities1_2_native` text,
  `sorts` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `news_month` varchar(10) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `delete_by` varchar(100) DEFAULT NULL,
  `delete_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_project`
--

INSERT INTO `s_project` (`project_id`, `project_group`, `images`, `project_name`, `project_name_native`, `box1_img`, `box2_img`, `box3_img`, `box1_1`, `box1_1_native`, `box1_2`, `box1_2_native`, `box1_3`, `box1_3_native`, `box1_4`, `box1_4_native`, `g_img1`, `g_img2`, `g_img3`, `g_img4`, `g_img5`, `g_img6`, `g_img7`, `g_img8`, `g_img9`, `g_img10`, `g_img11`, `g_img12`, `g_img13`, `g_img14`, `g_img15`, `g_img16`, `location`, `facilities1_1`, `facilities1_1_native`, `facilities1_2`, `facilities1_2_native`, `sorts`, `status`, `news_month`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(4, 1, '813336.jpg', 'Ladprao', 'Ladprao', '327386.jpg', '010806.jpg', '623914.jpg', 'Private Nirvana Ladprao', 'Private Nirvana Ladprao', '“ Natural Design House ”', '“ Natural Design House ”', 'House Info', 'House Info', '“ Natural Design House ”<br />\r\nFrom June 2004, Private Nirvana Ladprao is 27 Rai and has 92 single houses, club house, swimming pool and public park. All were sold out at the end of 2005 .<br />\r\n<br />\r\n• Located at 100 Soi Yothin Phattha n a, Pradit Manutham Rd., K longc han, Bangkapi, Bangkok', '“ Natural Design House ”<br />\r\nFrom June 2004, Private Nirvana Ladprao is 27 Rai and has 92 single houses, club house, swimming pool and public park. All were sold out at the end of 2005 .<br />\r\n<br />\r\n• Located at 100 Soi Yothin Phattha n a, Pradit Manutham Rd., K longc han, Bangkapi, Bangkok', '672078.jpg', '422970.jpg', '143566.jpg', '974281.jpg', '659160.jpg', '228435.jpg', '288575.jpg', '690956.jpg', '643071.jpg', '237153.jpg', '286020.jpg', '559406.jpg', '065061.jpg', '735042.jpg', '266981.jpg', '309002.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5626193492094!2d100.62144981483104!3d13.805219990312882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62769e597ce1%3A0xe02984b885c434cf!2sPrivate+Nirvana+Residence!5e0!3m2!1sen!2sth!4v1548583645397', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', 9999, 0, NULL, 'admin', '2019-04-09 07:16:20', 'admin', '2019-04-09 11:04:33', NULL, '2019-04-09 12:16:20'),
(5, 1, '372076.jpg', 'Kaset-Navamin', 'Kaset-Navamin', '557569.jpg', '164304.jpg', '782621.jpg', 'Private Nirvana Kaset-Navamin', 'Private Nirvana Kaset-Navamin', '“ White is Beautiful ”', '“ White is Beautiful ”', 'House Info', 'House Info', '“ White is Beautiful ”<br />\r\nFrom October 2006 to October 2009, 57 single houses were established in an area of 15 Rai, Private Nirvana Kaset - Navamin feature s club house, swimming pool and public park as well.<br />\r\n<br />\r\n• Located at 88 Mu 3, Charakhe Bua, Lad Phrao, Bangkok', '“ White is Beautiful ”<br />\r\nFrom October 2006 to October 2009, 57 single houses were established in an area of 15 Rai, Private Nirvana Kaset - Navamin feature s club house, swimming pool and public park as well.<br />\r\n<br />\r\n• Located at 88 Mu 3, Charakhe Bua, Lad Phrao, Bangkok', '360380.jpg', '693721.jpg', '585656.jpg', '707215.jpg', '070705.jpg', '741870.jpg', '849121.jpg', '270846.jpg', '416238.jpg', '745816.jpg', '380568.jpg', '552565.jpg', '792876.jpg', '428151.jpg', '936417.jpg', '156103.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5626193492094!2d100.62144981483104!3d13.805219990312882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62769e597ce1%3A0xe02984b885c434cf!2sPrivate+Nirvana+Residence!5e0!3m2!1sen!2sth!4v1548583645397', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', 9999, 0, NULL, 'admin', '2019-04-09 07:19:34', 'admin', '2019-04-09 11:04:55', NULL, '2019-04-09 12:19:34'),
(6, 1, '991623.jpg', 'Residence', 'Residence', '788381.jpg', '443127.jpg', '775972.jpg', 'Private Nirvana Residence', 'Private Nirvana Residence', '“ Private Nirvana...on third ”', '“ Private Nirvana...on third ”', 'House Info', 'House Info', '“ Private Nirvana...on third ”<br />\r\nFrom March 2012, Private Nirvana Residence has an area of 22 - 3 - 95 Rai with 80 houses, featuring swimming pool, recreation building and public park.<br />\r\n<br />\r\n• Located at Soi Yothin Phatthana 11, Praditm anutham Rd., Khlong c han, Bangkapi, Bangkok', '“ Private Nirvana...on third ”<br />\r\nFrom March 2012, Private Nirvana Residence has an area of 22 - 3 - 95 Rai with 80 houses, featuring swimming pool, recreation building and public park.<br />\r\n<br />\r\n• Located at Soi Yothin Phatthana 11, Praditm anutham Rd., Khlong c han, Bangkapi, Bangkok', '231489.jpg', '256080.jpg', '057669.jpg', '757918.jpg', '225401.jpg', '835974.jpg', '990608.jpg', '604471.jpg', '356057.jpg', '979420.jpg', '603200.jpg', '600761.jpg', '532079.jpg', '115720.jpg', '517469.jpg', '530850.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5626193492094!2d100.62144981483104!3d13.805219990312882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62769e597ce1%3A0xe02984b885c434cf!2sPrivate+Nirvana+Residence!5e0!3m2!1sen!2sth!4v1548583645397', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', 9999, 0, NULL, 'admin', '2019-04-09 07:19:55', 'admin', '2019-04-09 11:04:04', NULL, '2019-04-09 12:19:55'),
(7, 1, '929000.jpg', 'Residence North \'n East', 'Residence North \'n East', '246467.jpg', '645471.jpg', '243681.jpg', 'Private Nirvana Residence North \'n East', 'Private Nirvana Residence North \'n East', '“ Living Along The Trees... ”', '“ Living Along The Trees... ”', 'House Info', 'House Info', '“ Living Along the Trees... ”<br />\r\nFrom April 2014, i ncluding Private Nirvana Residence North, with 54 two - story houses in an area of 12 - 2 - 69 Rai and Private Nirvana Residence East with 57 three - story houses in an area of 14 - 0 - 11 Rai, respectively . Public park and sport club are also provided.<br />\r\n<br />\r\n• Located at Soi Yothin Phatthana 11 Yak 7, Khlongchan, Bangkapi, Bangkok', '“ Living Along the Trees... ”<br />\r\nFrom April 2014, i ncluding Private Nirvana Residence North, with 54 two - story houses in an area of 12 - 2 - 69 Rai and Private Nirvana Residence East with 57 three - story houses in an area of 14 - 0 - 11 Rai, respectively . Public park and sport club are also provided.<br />\r\n<br />\r\n• Located at Soi Yothin Phatthana 11 Yak 7, Khlongchan, Bangkapi, Bangkok', '546304.jpg', '581486.jpg', '650278.jpg', '754750.jpg', '110964.jpg', '419059.jpg', '507656.jpg', '312449.jpg', '225700.jpg', '711818.jpg', '269274.jpg', '125990.jpg', '532877.jpg', '899370.jpg', '342524.jpg', '350377.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5626193492094!2d100.62144981483104!3d13.805219990312882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62769e597ce1%3A0xe02984b885c434cf!2sPrivate+Nirvana+Residence!5e0!3m2!1sen!2sth!4v1548583645397', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', 9999, 0, NULL, 'admin', '2019-04-09 07:20:18', 'admin', '2019-04-09 11:04:27', NULL, '2019-04-09 12:20:18'),
(8, 2, '237032.jpg', 'Through', 'Through', '227942.jpg', '278513.jpg', '871051.jpg', 'Private Nirvana Through', 'Private Nirvana Through', '“ Living Through Completion ”', '“ Living Through Completion ”', 'House Info', 'House Info', '“ Living Through Completion ”<br />\r\nThe 10 - 3 - 15 - r ai area with 62 houses provides fitness room, swimming pool and public park. Private Nirvana Through was available for sale only from October 2010 till April 2012.<br />\r\n<br />\r\n• Located at Soi Nawamin 88, Khannayao, Bangkok 10230', '“ Living Through Completion ”<br />\r\nThe 10 - 3 - 15 - r ai area with 62 houses provides fitness room, swimming pool and public park. Private Nirvana Through was available for sale only from October 2010 till April 2012.<br />\r\n<br />\r\n• Located at Soi Nawamin 88, Khannayao, Bangkok 10230', '075579.jpg', '438538.jpg', '455628.jpg', '878295.jpg', '376300.jpg', '707365.jpg', '318162.jpg', '917589.jpg', '366195.jpg', '723364.jpg', '435161.jpg', '792519.jpg', '700559.jpg', '585204.jpg', '877113.jpg', '567184.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5626193492094!2d100.62144981483104!3d13.805219990312882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62769e597ce1%3A0xe02984b885c434cf!2sPrivate+Nirvana+Residence!5e0!3m2!1sen!2sth!4v1548583645397', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', 9999, 0, NULL, 'admin', '2019-04-09 07:22:46', 'admin', '2019-04-09 11:04:06', NULL, '2019-04-09 12:22:46'),
(9, 3, '798896.jpg', 'Life Ladprao 71', 'Life Ladprao 71', '100823.jpg', '193652.jpg', '455120.jpg', 'Private Nirvana Life-Ladprao 71', 'Private Nirvana Life-Ladprao 71', '“ More Than Townhome ”', '“ More Than Townhome ”', 'House Info', 'House Info', '“ More Than Townhome ”<br />\r\nThe houses was opened in September 2008 and sold out all 50 houses in 12 months. Private Nirvana Life Ladprao 71 is 4 - 2 - 00 Rai and has club house and public park.<br />\r\n<br />\r\n• Located at 99 Soi Nakniwas 48 Yak 14, Ladp rao, Bangkok', '“ More Than Townhome ”<br />\r\nThe houses was opened in September 2008 and sold out all 50 houses in 12 months. Private Nirvana Life Ladprao 71 is 4 - 2 - 00 Rai and has club house and public park.<br />\r\n<br />\r\n• Located at 99 Soi Nakniwas 48 Yak 14, Ladp rao, Bangkok', '973719.jpg', '125657.jpg', '356626.jpg', '069307.jpg', '473655.jpg', '853135.jpg', '148604.jpg', '349001.jpg', '708648.jpg', '495761.jpg', '347750.jpg', '264035.jpg', '470470.jpg', '641416.jpg', '256832.jpg', '066732.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5626193492094!2d100.62144981483104!3d13.805219990312882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62769e597ce1%3A0xe02984b885c434cf!2sPrivate+Nirvana+Residence!5e0!3m2!1sen!2sth!4v1548583645397', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', 9999, 0, NULL, 'admin', '2019-04-09 07:23:12', 'admin', '2019-04-09 11:04:52', NULL, '2019-04-09 12:23:12'),
(10, 3, '688366.jpg', 'Life Exclusive', 'Life Exclusive', '130850.jpg', '379504.jpg', '981478.jpg', 'Private Nirvana Life Exclusive', 'Private Nirvana Life Exclusive', '“ Highly Exclusive Townhome ”', '“ Highly Exclusive Townhome ”', 'House Info', 'House Info', '“ Highly Exclusive Townhome ”<br />\r\nPrivate Nirvana Life Exclusive’s 8 - 0 - 66.5 - r ai ar ea features fitness room, swimming pool and public park. All 74 houses were sold out within a year of 2010.<br />\r\n<br />\r\n• Located at 111 Soi Nawamin 111, Nawamin, Buengkum, Bangkok 10230', '“ Highly Exclusive Townhome ”<br />\r\nPrivate Nirvana Life Exclusive’s 8 - 0 - 66.5 - r ai ar ea features fitness room, swimming pool and public park. All 74 houses were sold out within a year of 2010.<br />\r\n<br />\r\n• Located at 111 Soi Nawamin 111, Nawamin, Buengkum, Bangkok 10230', '085659.jpg', '768009.jpg', '252280.jpg', '399843.jpg', '735908.jpg', '406972.jpg', '858769.jpg', '684913.jpg', '942837.jpg', '101791.jpg', '542149.jpg', '324290.jpg', '269751.jpg', '045328.jpg', '148218.jpg', '473687.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5626193492094!2d100.62144981483104!3d13.805219990312882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62769e597ce1%3A0xe02984b885c434cf!2sPrivate+Nirvana+Residence!5e0!3m2!1sen!2sth!4v1548583645397', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Nam Daeng Road - Bang Phli: 0 m.<br />\r\n• Kanchanaphisek Ring: 3 km.<br />\r\n• Sky Train Sri Dan Station: 5 km.<br />\r\n• Jas urban Srinakarin: 5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', '• Mega Bangna: 5.5 km.<br />\r\n• Ikea Bangna: 5.5 km.<br />\r\n• Singapore International School, Bangkok: 300m.<br />\r\n• Sarasas Witet Suvanabhumi School: 2.5 km.', 9999, 0, NULL, 'admin', '2019-04-09 07:23:40', 'admin', '2019-04-09 11:04:32', NULL, '2019-04-09 12:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `s_project_group`
--

CREATE TABLE `s_project_group` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_name_native` varchar(255) DEFAULT NULL,
  `sorts` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `delete_by` varchar(100) DEFAULT NULL,
  `delete_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_project_group`
--

INSERT INTO `s_project_group` (`project_id`, `project_name`, `project_name_native`, `sorts`, `status`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(1, 'Single House', 'บ้านเดี่ยว', 1, 0, NULL, '2019-04-09 11:27:08', 'admin', '2019-04-09 08:04:34', NULL, '2019-04-09 11:27:08'),
(2, 'Twin House', 'บ้านแฝด', 2, 0, 'admin', '2019-04-09 06:32:53', 'admin', '2019-04-09 08:04:41', NULL, '2019-04-09 11:32:53'),
(3, 'Town Home', 'ทาวน์โฮม', 3, 0, 'admin', '2019-04-09 06:33:07', 'admin', '2019-04-09 08:04:50', NULL, '2019-04-09 11:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `s_subscribe`
--

CREATE TABLE `s_subscribe` (
  `id` bigint(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_subscribe`
--

INSERT INTO `s_subscribe` (`id`, `email`, `date`, `time`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(3, 'daasdas@adsa.dxom', '2019-04-05', '10:27:26', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(4, 'dfsdf@sfd.ocs', '2019-04-05', '10:34:22', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `s_user`
--

CREATE TABLE `s_user` (
  `user_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `admin_flag` int(2) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_user`
--

INSERT INTO `s_user` (`user_id`, `name`, `username`, `password`, `email`, `admin_flag`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(1, 'Administrator', 'admin', '1234', 'admin@hotmail.com', 0, '2009-01-14 15:16:37', 'admin', '2011-02-28 11:02:18', 'admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_user_group`
--

CREATE TABLE `s_user_group` (
  `user_group_id` int(10) UNSIGNED NOT NULL,
  `user_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `group_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(100) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_user_group`
--

INSERT INTO `s_user_group` (`user_group_id`, `user_id`, `group_id`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(4, 1, 2, 'admin', '2012-05-04 10:31:34', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_user_p`
--

CREATE TABLE `s_user_p` (
  `user_p_id` bigint(20) NOT NULL,
  `user_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `group_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `module_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `read_p` char(1) DEFAULT '0',
  `add_p` char(1) DEFAULT '0',
  `update_p` char(1) DEFAULT '0',
  `delete_p` char(1) DEFAULT '0',
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_user_p`
--

INSERT INTO `s_user_p` (`user_p_id`, `user_id`, `group_id`, `module_id`, `read_p`, `add_p`, `update_p`, `delete_p`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(8, 1, 0, 8, '1', '1', '1', '1', '2011-06-18 13:19:56', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(9, 1, 0, 9, '1', '1', '1', '1', '2011-06-20 15:27:42', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(26, 1, 2, 0, '0', '0', '0', '0', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(11, 0, 2, 7, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(12, 0, 2, 6, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(13, 0, 2, 5, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(14, 0, 2, 4, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(15, 0, 2, 3, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(16, 0, 2, 2, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(17, 0, 2, 1, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(19, 0, 1, 7, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(20, 0, 1, 6, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(21, 0, 1, 5, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(22, 0, 1, 4, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(23, 0, 1, 3, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(24, 0, 1, 2, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(25, 0, 1, 1, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(27, 0, 2, 10, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(28, 0, 2, 12, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(29, 0, 2, 13, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(30, 0, 2, 14, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(31, 0, 2, 15, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(32, 0, 2, 16, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu_cate`
--

CREATE TABLE `tb_menu_cate` (
  `menucate_id` int(10) UNSIGNED NOT NULL,
  `rank` int(10) NOT NULL,
  `menucate_name` varchar(255) NOT NULL,
  `url_link` varchar(255) NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_by` varchar(100) NOT NULL,
  `delete_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_menu_cate`
--

INSERT INTO `tb_menu_cate` (`menucate_id`, `rank`, `menucate_name`, `url_link`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(1, 1, 'Home', '../home', 'admin', '2010-05-22 15:31:39', 'admin', '2019-04-06 02:04:39', '', '0000-00-00 00:00:00'),
(5, 8, 'Subscribe', '../subscribe', 'admin', '2019-04-05 04:39:30', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(6, 7, 'Contact US', '../contact', 'admin', '2019-04-05 06:43:37', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(7, 6, 'News', '../news', 'admin', '2019-04-05 12:13:49', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(8, 5, 'Portfolios', '../project_group', 'admin', '2019-04-09 06:15:34', 'admin', '2019-04-09 06:04:43', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu_submenu`
--

CREATE TABLE `tb_menu_submenu` (
  `id` int(10) UNSIGNED NOT NULL,
  `rank` int(10) NOT NULL,
  `menucate_id` int(10) NOT NULL,
  `submenu_name` varchar(255) NOT NULL,
  `submenu_url_link` varchar(255) NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_by` varchar(100) NOT NULL,
  `delete_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_footer`
--
ALTER TABLE `b_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_contact_us`
--
ALTER TABLE `s_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_group`
--
ALTER TABLE `s_group`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_id` (`group_id`);

--
-- Indexes for table `s_home`
--
ALTER TABLE `s_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_lang`
--
ALTER TABLE `s_lang`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `s_module`
--
ALTER TABLE `s_module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `s_news`
--
ALTER TABLE `s_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `s_news_gallery`
--
ALTER TABLE `s_news_gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `s_project`
--
ALTER TABLE `s_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `s_project_group`
--
ALTER TABLE `s_project_group`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `s_subscribe`
--
ALTER TABLE `s_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_user`
--
ALTER TABLE `s_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `s_user_group`
--
ALTER TABLE `s_user_group`
  ADD PRIMARY KEY (`user_group_id`);

--
-- Indexes for table `s_user_p`
--
ALTER TABLE `s_user_p`
  ADD PRIMARY KEY (`user_p_id`);

--
-- Indexes for table `tb_menu_cate`
--
ALTER TABLE `tb_menu_cate`
  ADD PRIMARY KEY (`menucate_id`);

--
-- Indexes for table `tb_menu_submenu`
--
ALTER TABLE `tb_menu_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_footer`
--
ALTER TABLE `b_footer`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `s_contact_us`
--
ALTER TABLE `s_contact_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `s_group`
--
ALTER TABLE `s_group`
  MODIFY `group_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `s_home`
--
ALTER TABLE `s_home`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `s_lang`
--
ALTER TABLE `s_lang`
  MODIFY `lang_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `s_module`
--
ALTER TABLE `s_module`
  MODIFY `module_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `s_news`
--
ALTER TABLE `s_news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `s_news_gallery`
--
ALTER TABLE `s_news_gallery`
  MODIFY `img_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `s_project`
--
ALTER TABLE `s_project`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `s_project_group`
--
ALTER TABLE `s_project_group`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `s_subscribe`
--
ALTER TABLE `s_subscribe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `s_user`
--
ALTER TABLE `s_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `s_user_group`
--
ALTER TABLE `s_user_group`
  MODIFY `user_group_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `s_user_p`
--
ALTER TABLE `s_user_p`
  MODIFY `user_p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_menu_cate`
--
ALTER TABLE `tb_menu_cate`
  MODIFY `menucate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_menu_submenu`
--
ALTER TABLE `tb_menu_submenu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
