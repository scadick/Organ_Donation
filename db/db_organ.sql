-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2018 at 05:06 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_organ`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drive`
--

DROP TABLE IF EXISTS `tbl_drive`;
CREATE TABLE IF NOT EXISTS `tbl_drive` (
  `drive_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `drive_title` varchar(300) NOT NULL,
  `drive_goal` varchar(10) NOT NULL,
  `drive_image` varchar(250) NOT NULL DEFAULT 'default.jpg',
  `drive_desc` text NOT NULL,
  `drive_type` varchar(50) NOT NULL,
  PRIMARY KEY (`drive_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drive_user_loc`
--

DROP TABLE IF EXISTS `tbl_drive_user_loc`;
CREATE TABLE IF NOT EXISTS `tbl_drive_user_loc` (
  `drive_user_loc_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `drive_id` smallint(6) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `location_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`drive_user_loc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

DROP TABLE IF EXISTS `tbl_location`;
CREATE TABLE IF NOT EXISTS `tbl_location` (
  `location_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_name` varchar(75) NOT NULL,
  `location_cardholders` mediumint(9) NOT NULL,
  `location_donors` mediumint(9) NOT NULL,
  `location_summers` smallint(6) NOT NULL,
  `location_falls` smallint(6) NOT NULL,
  `location_winters` smallint(6) NOT NULL,
  `location_springs` smallint(6) NOT NULL,
  `location_code` varchar(10) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story`
--

DROP TABLE IF EXISTS `tbl_story`;
CREATE TABLE IF NOT EXISTS `tbl_story` (
  `story_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_text` text NOT NULL,
  `story_image` varchar(250) DEFAULT NULL,
  `story_approval` varchar(25) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story_user`
--

DROP TABLE IF EXISTS `tbl_story_user`;
CREATE TABLE IF NOT EXISTS `tbl_story_user` (
  `story_user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_id` smallint(6) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`story_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(9) NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_phone` varchar(25) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` varchar(15) NOT NULL,
  `user_new` varchar(5) NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_loc`
--

DROP TABLE IF EXISTS `tbl_user_loc`;
CREATE TABLE IF NOT EXISTS `tbl_user_loc` (
  `user_loc_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(9) NOT NULL,
  `location_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_loc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
