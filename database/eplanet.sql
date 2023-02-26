-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2023 at 10:48 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eplanet`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_slug` text NOT NULL,
  `cat_title` varchar(556) NOT NULL,
  `cat_details` varchar(556) NOT NULL,
  `cat_image` text NOT NULL,
  `cat_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `cat_delete` enum('No','Yes') NOT NULL DEFAULT 'No',
  `cat_sequence` int(11) DEFAULT NULL,
  `cat_create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_slug`, `cat_title`, `cat_details`, `cat_image`, `cat_status`, `cat_delete`, `cat_sequence`, `cat_create_date`) VALUES
(1, 'Saving_Account', 'Saving Account', 'Income up to Rs 500 per sale', 'dd', 'Active', 'No', 1, '2023-02-04 22:14:57'),
(2, 'Loan', 'Loan', 'Income up to Rs 500 per sale', 'dd', 'Active', 'No', 1, '2023-02-04 22:15:23'),
(3, 'Credit-Card', 'Credit Card', 'Income up to Rs 5000 per sale', 'dd', 'Active', 'No', 1, '2023-02-04 22:15:59'),
(4, 'Demat-Account', 'Demat Account', 'Income up to Rs 5000 per sale', 'dd', 'Active', 'No', 1, '2023-02-04 22:16:38'),
(5, 'Matual-Fumd', 'Matual Fumds', 'Income up to Rs 5000 per sale', 'dd', 'Active', 'No', 1, '2023-02-04 22:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `cat_subcat_details`
--

DROP TABLE IF EXISTS `cat_subcat_details`;
CREATE TABLE IF NOT EXISTS `cat_subcat_details` (
  `csc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(556) NOT NULL,
  `sc_id` varchar(556) NOT NULL,
  `csc_type` enum('BENEFITS','HOW TO EARN','FAQS') NOT NULL,
  `csc_image` text NOT NULL,
  `csc_description` text NOT NULL,
  `csc_specification` text NOT NULL,
  `csc_question` text NOT NULL,
  `csc_answers` text NOT NULL,
  `csc_share_link` text NOT NULL,
  `csc_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`csc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `footer_menu`
--

DROP TABLE IF EXISTS `footer_menu`;
CREATE TABLE IF NOT EXISTS `footer_menu` (
  `fm_id` int(11) NOT NULL AUTO_INCREMENT,
  `fm_slug` text NOT NULL,
  `fm_name` text NOT NULL,
  `fm_image` text NOT NULL,
  `fm_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `fm_order` int(10) NOT NULL,
  `fm_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_menu`
--

INSERT INTO `footer_menu` (`fm_id`, `fm_slug`, `fm_name`, `fm_image`, `fm_status`, `fm_order`, `fm_date`) VALUES
(1, '68f1ff7fd1fc2795bfe74b8dcd2d1452', 'Home', 'upload/footermenu/footer_home1.png', 'Deactive', 1, '2023-02-26 10:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_slug` varchar(556) NOT NULL,
  `slider_name` varchar(556) NOT NULL,
  `slider_image` text NOT NULL,
  `slider_url` text NOT NULL,
  `slider_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `slider_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sc_slug` varchar(556) NOT NULL,
  `sc_title` text NOT NULL,
  `sc_sub_title` text NOT NULL,
  `sc_image` text NOT NULL,
  `sc_amount` varchar(100) NOT NULL,
  `sc_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `sc_delete` enum('No','Yes') NOT NULL DEFAULT 'No',
  `sc_sequence` int(11) DEFAULT NULL,
  `sc_create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `profile_pic` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `user_type` enum('Superadmin','User','Admin','Agent') NOT NULL DEFAULT 'User',
  `user_status` enum('Active','Deactive','Block') NOT NULL DEFAULT 'Active',
  `password` varchar(100) NOT NULL,
  `wallet_amount` varchar(20) NOT NULL DEFAULT '0',
  `pin_code` varchar(10) NOT NULL,
  `file_upload_status` enum('Pending','Done') NOT NULL DEFAULT 'Pending',
  `pan_number` varchar(20) DEFAULT NULL,
  `pan_card_image` text,
  `addhar_card` varchar(20) DEFAULT NULL,
  `aadhar_card_back` text,
  `aadhar_card_front` text,
  `bank_hold_name` varchar(100) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_account` varchar(50) DEFAULT NULL,
  `ifsc_code` varchar(20) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `dummydata` text,
  `user_created_date` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `username`, `profile_pic`, `email`, `mobile`, `user_type`, `user_status`, `password`, `wallet_amount`, `pin_code`, `file_upload_status`, `pan_number`, `pan_card_image`, `addhar_card`, `aadhar_card_back`, `aadhar_card_front`, `bank_hold_name`, `bank_name`, `bank_account`, `ifsc_code`, `date_of_birth`, `dummydata`, `user_created_date`) VALUES
(1, 'R', 'amit8979', 'upload/userprofile/default_user.gif', 'Rk@gmail.com', '989', 'Superadmin', 'Active', '123', '800', '', 'Done', '123', '', '123', '', '', 'asdasdasd', 'sadasd', 'asdasd', 'asdasd', '2022-11-17', '', '2022'),
(17, 'Amit', 'amit6368', 'upload/userprofile/default_user.gif', 'amit6368@gmail.com', '8002106547', 'Superadmin', 'Active', '123', '800', '', 'Done', '123', '', '123', '', '', 'asdasdasd', 'sadasd', 'asdasd', 'asdasd', '2022-11-17', '', '2022'),
(22, 'asdssa', 'asdssa7697', 'upload/userprofile/default_user.gif', 'asdas@dfsdf.com', '9424377809', 'User', 'Active', '123', '0', '154', 'Pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
