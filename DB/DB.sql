-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 04 พ.ค. 2012  น.
-- รุ่นของเซิร์ฟเวอร์: 5.1.33
-- รุ่นของ PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `designm`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `b_footer`
--

CREATE TABLE IF NOT EXISTS `b_footer` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `descriptions` text NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_by` varchar(100) NOT NULL,
  `delete_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `b_footer`
--

INSERT INTO `b_footer` (`id`, `descriptions`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(1, '<p>Address :<span style="font-size: small;">32/216 ', '', '0000-00-00 00:00:00', 'admin', '2011-02-23 10:02:44', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `s_group`
--

CREATE TABLE IF NOT EXISTS `s_group` (
  `group_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(100) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `group_id` (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `s_group`
--

INSERT INTO `s_group` (`group_id`, `group_name`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(2, 'Super Admin', 'admin', '2010-04-25 04:06:00', 'admin', '2011-01-06 16:01:53', NULL, '0000-00-00 00:00:00'),
(3, 'User', 'admin', '2010-04-25 04:15:08', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `s_lang`
--

CREATE TABLE IF NOT EXISTS `s_lang` (
  `lang_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(100) NOT NULL,
  `lang_key` varchar(50) NOT NULL,
  `lang_images` varchar(255) NOT NULL,
  `lang_status` int(2) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `s_lang`
--

INSERT INTO `s_lang` (`lang_id`, `lang_name`, `lang_key`, `lang_images`, `lang_status`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(1, 'ไทย', 'thai', '060326.jpg', 0, '2012-05-04 10:32:07', 'admin', '2012-05-04 13:05:00', 'admin', '0000-00-00 00:00:00', NULL),
(2, 'English', 'english', '467720.jpg', 0, '2012-05-04 10:32:15', 'admin', '2012-05-04 11:05:15', 'admin', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `s_module`
--

CREATE TABLE IF NOT EXISTS `s_module` (
  `module_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(50) DEFAULT NULL,
  `tag_title` text NOT NULL,
  `tag_meta` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- dump ตาราง `s_module`
--

INSERT INTO `s_module` (`module_id`, `module_name`, `tag_title`, `tag_meta`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(1, 'User', '', '', '2005-09-22 11:09:57', 'admin', '2010-04-25 05:04:06', 'admin', '0000-00-00 00:00:00', ''),
(6, 'Menu', '', '', '2010-04-25 05:35:53', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(2, 'Group', '', '', '2008-06-02 12:13:47', 'admin', '2010-04-25 05:04:00', 'admin', '0000-00-00 00:00:00', ''),
(5, 'User Group', '', '', '2010-04-25 05:22:22', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL),
(4, 'Module', '', '', '2010-04-15 00:00:00', 'admin', '2010-04-25 05:04:47', 'admin', '0000-00-00 00:00:00', NULL),
(3, 'User permission', '', '', '0000-00-00 00:00:00', 'admin', '2010-04-25 05:04:54', 'admin', '0000-00-00 00:00:00', NULL),
(7, 'Setting', '', '', '2010-07-11 21:55:34', 'admin', '2010-07-31 03:07:39', 'admin', '0000-00-00 00:00:00', NULL),
(10, 'Language Management', '', '', '2012-05-04 10:27:45', 'admin', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `s_user`
--

CREATE TABLE IF NOT EXISTS `s_user` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `delete_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `s_user`
--

INSERT INTO `s_user` (`user_id`, `name`, `username`, `password`, `email`, `admin_flag`, `create_date`, `create_by`, `update_date`, `update_by`, `delete_date`, `delete_by`) VALUES
(1, 'Administrator', 'admin', '1234', 'admin@hotmail.com', 0, '2009-01-14 15:16:37', 'admin', '2011-02-28 11:02:18', 'admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `s_user_group`
--

CREATE TABLE IF NOT EXISTS `s_user_group` (
  `user_group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `create_by` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(100) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- dump ตาราง `s_user_group`
--

INSERT INTO `s_user_group` (`user_group_id`, `user_id`, `group_id`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(4, 1, 2, 'admin', '2012-05-04 10:31:34', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `s_user_p`
--

CREATE TABLE IF NOT EXISTS `s_user_p` (
  `user_p_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `module_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `read_p` char(1) DEFAULT '0',
  `add_p` char(1) DEFAULT '0',
  `update_p` char(1) DEFAULT '0',
  `delete_p` char(1) DEFAULT '0',
  `create_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_by` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(50) DEFAULT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- dump ตาราง `s_user_p`
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
(27, 0, 2, 10, '1', '1', '1', '1', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tb_menu_cate`
--

CREATE TABLE IF NOT EXISTS `tb_menu_cate` (
  `menucate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rank` int(10) NOT NULL,
  `menucate_name` varchar(255) NOT NULL,
  `url_link` varchar(255) NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_by` varchar(100) NOT NULL,
  `delete_date` datetime NOT NULL,
  PRIMARY KEY (`menucate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- dump ตาราง `tb_menu_cate`
--

INSERT INTO `tb_menu_cate` (`menucate_id`, `rank`, `menucate_name`, `url_link`, `create_by`, `create_date`, `update_by`, `update_date`, `delete_by`, `delete_date`) VALUES
(1, 1, 'Home Menu', '../welcome', 'admin', '2010-05-22 15:31:39', 'admin', '2011-01-06 15:01:18', '', '0000-00-00 00:00:00'),
(4, 4, 'Language Management', '../lang', 'admin', '2012-05-04 10:21:07', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tb_menu_submenu`
--

CREATE TABLE IF NOT EXISTS `tb_menu_submenu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rank` int(10) NOT NULL,
  `menucate_id` int(10) NOT NULL,
  `submenu_name` varchar(255) NOT NULL,
  `submenu_url_link` varchar(255) NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_by` varchar(100) NOT NULL,
  `delete_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- dump ตาราง `tb_menu_submenu`
--

