-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2022 at 07:10 PM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u212157355_cmtgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cu_id` int(11) NOT NULL,
  `mobile_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_graph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_graph_history` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dummydata` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cu_id`, `mobile_number`, `whatsapp_number`, `email`, `main_logo`, `fav_logo`, `app_name`, `user_graph`, `user_graph_history`, `dummydata`) VALUES
(1, '(+1) 646-652-3300', '(+1) 646-652-3300', 'support@cmtgroup.tech', 'upload/usergraph/CompressJPEG_online_500x500-image2.jpg', 'upload/usergraph/CompressJPEG_online_500x500-image2.jpg', 'Algo Trader', 'upload/usergraph/homegraph4.jpg', 'upload/usergraph/Profit1.png', 'user_graph');

-- --------------------------------------------------------

--
-- Table structure for table `payment_transition`
--

CREATE TABLE `payment_transition` (
  `pt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pt_amount` varchar(100) DEFAULT NULL,
  `pt_status` varchar(556) DEFAULT NULL,
  `pt_transition_id` varchar(556) DEFAULT NULL,
  `pt_response_msg` text DEFAULT NULL,
  `pt_order_id` varchar(556) DEFAULT NULL,
  `pt_currency` varchar(100) DEFAULT NULL,
  `pt_banktrns_id` varchar(100) DEFAULT NULL,
  `pt_date` varchar(100) DEFAULT NULL,
  `pt_outo_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ProfitLoss`
--

CREATE TABLE `ProfitLoss` (
  `pl_id` int(11) NOT NULL,
  `wallet_history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pl_amount` int(11) NOT NULL DEFAULT 0,
  `pl_type` enum('Profit','Loss','Pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Profit',
  `pl_amount_status` enum('Loss','Profit') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Loss',
  `pl_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pl_comment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `profile_pic` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `user_type` enum('Superadmin','User','Admin','Agent') NOT NULL DEFAULT 'User',
  `user_status` enum('Active','Deactive','Block') NOT NULL DEFAULT 'Active',
  `password` varchar(100) NOT NULL,
  `wallet_amount` varchar(20) NOT NULL,
  `spend_amount` varchar(100) NOT NULL,
  `spend_status` enum('Loss','Profit') NOT NULL DEFAULT 'Loss',
  `file_upload_status` enum('Pending','Done') NOT NULL DEFAULT 'Pending',
  `pan_number` varchar(20) NOT NULL,
  `pan_card_image` text NOT NULL,
  `addhar_card` varchar(20) NOT NULL,
  `aadhar_card_back` text NOT NULL,
  `aadhar_card_front` text NOT NULL,
  `bank_hold_name` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_account` varchar(50) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `user_graph_history` text DEFAULT NULL,
  `user_graph` text DEFAULT NULL,
  `tradeing_status` enum('Approved','Pending') NOT NULL DEFAULT 'Approved',
  `dummydata` text NOT NULL,
  `user_created_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `profile_pic`, `email`, `mobile`, `user_type`, `user_status`, `password`, `wallet_amount`, `spend_amount`, `spend_status`, `file_upload_status`, `pan_number`, `pan_card_image`, `addhar_card`, `aadhar_card_back`, `aadhar_card_front`, `bank_hold_name`, `bank_name`, `bank_account`, `ifsc_code`, `date_of_birth`, `user_graph_history`, `user_graph`, `tradeing_status`, `dummydata`, `user_created_date`) VALUES
(1, 'R', 'K', 'amit8979', 'upload/userprofile/default_user.gif', 'Rk@gmail.com', '989', 'Superadmin', 'Active', '123', '800', '', 'Loss', 'Done', '123', '', '123', '', '', 'asdasdasd', 'sadasd', 'asdasd', 'asdasd', '2022-11-17', 'upload/usergraph/Profit2.png', 'upload/usergraph/homegraph6.jpg', 'Approved', '', '2022'),
(17, 'Amit', 'Patel', 'amit6368', 'upload/userprofile/default_user.gif', 'amit6368@gmail.com', '8002106547', 'Superadmin', 'Active', '123', '800', '', 'Loss', 'Done', '123', '', '123', '', '', 'asdasdasd', 'sadasd', 'asdasd', 'asdasd', '2022-11-17', 'upload/usergraph/Profit2.png', 'upload/usergraph/homegraph6.jpg', 'Approved', '', '2022'),
(18, 'R', 'K', 'KR8159', 'upload/usergraph/Snapchat-364022429.jpg', 'gmail', '999', 'User', 'Active', '123', '492', '', 'Loss', 'Done', 'Abc', '', 'Xyz', '', '', 'Rk', 'Dena', '123', 'Dena123', '2022-11-30', 'upload/usergraph/CompressJPEG_online_500x500-image1.jpg', 'upload/usergraph/Screenshot_20220912_151944.jpg', 'Approved', 'user_graph_history', '2022-11-30'),
(4, 'Darshan', 'Bhensadadiya', 'BhensadadiyaDarshan2588', 'upload/userprofile/default_user.gif', 'darshanbheshddiya@gmail.com', '9023335824', 'User', 'Active', '123', '0', '', 'Loss', 'Done', 'Darshan', 'assets/backend/assets/JDS.png', '707236137613', 'assets/backend/assets/JDS.png', 'assets/backend/assets/JDS.png', 'Darshan', 'Bob', '1234567890', 'Darshan12', '2022-08-19', 'upload/usergraph/Profit2.png', 'upload/usergraph/homegraph6.jpg', 'Approved', '', '2022'),
(5, 'Rashid', 'Khan', 'KhabRashid9400', 'upload/userprofile/default_user.gif', 'rashid.surroor@gmail.com', '9893398929', 'User', 'Deactive', '123123', '50', '', 'Loss', 'Done', 'Bgepo8797d', '', '676787892345', '', '', 'Rehan khan', 'Sbi', '20120676959', 'Indb0001751', '1988-05-20', 'upload/usergraph/Profit2.png', 'upload/usergraph/homegraph6.jpg', 'Approved', '', '2022'),
(13, 'sonu', 'kumar', 'kumarsonu9310', 'upload/usergraph/20221106_011545-BlendCollage_(1).jpg', 'sonulumar@gmail.com', '9424377809', 'User', 'Active', '123', '7100', '', 'Loss', 'Done', 'asdads', 'upload/usergraph/Profit7.png', 'asdas', 'upload/usergraph/Profit6.png', 'upload/usergraph/Profit5.png', 'ssss', 'ssss', '44444', 'ssss', '2002-10-10', 'upload/usergraph/Profit10.png', 'upload/usergraph/homegraph9.jpg', 'Approved', 'user_graph_history', '2022'),
(7, 'Shaan', 'Sheikh', 'SheikhShaan4919', 'upload/usergraph/IMG_20221201_0222041.jpg', 'shaansheikh1432@gmail.com', '7987371959', 'User', 'Active', 'betu1432', '11600', '', 'Loss', 'Done', 'Hsksvruskebbd', '', 'Bdjsivfjllwgs', '', '', 'Bdlsvccrd', 'Gdkksbvd', 'Vekkbsfskd', 'Bejslbevs', '2022-11-25', 'upload/usergraph/IMG_20221205_040310.jpg', 'upload/usergraph/IMG_20221204_190712.jpg', 'Approved', 'user_graph_history', '2022'),
(19, 'Gsgsb', 'Bwbs', 'BwbsGsgsb9079', 'upload/userprofile/default_user.gif', 'vsbs', '123456', 'User', 'Deactive', '123456', '0', '', 'Loss', 'Done', 'Uwbwb', '', 'Vebsbs', '', '', 'Jjbeee', 'Gsgw', 'Gsbwb', 'Vsnbs', '2022-11-14', 'upload/usergraph/Profit2.png', 'upload/usergraph/homegraph6.jpg', 'Approved', '', '2022-11-30'),
(11, 'Emmy', 'Goury', 'GouryEmmy1978', 'upload/userprofile/default_user.gif', 'imgoury@gmail.com', '7000365992', 'User', 'Active', 'Emmy@81098', '0', '', 'Loss', 'Done', 'DLGG6633B', '', '230792929870', '', '', 'Emmy', 'Astha', '15779922331', 'Dlfpg0001212', '1990-07-20', 'upload/usergraph/Profit2.png', 'upload/usergraph/homegraph6.jpg', 'Approved', '', '2022'),
(16, 'Smith', 'Watson', 'smithwatson', 'upload/userprofile/default_user.gif', 'cmt.techniciangroup@gmail.com', '7746045948', 'Superadmin', 'Active', 'cmt@1432', '0', '', 'Loss', 'Done', '123', '', '123', '', '', 'none', 'none', 'none', 'none', '2022-11-17', 'upload/usergraph/Profit2.png', 'upload/usergraph/homegraph6.jpg', 'Approved', '', '2022'),
(20, 'Kashish ', 'Bagwale', 'BagwaleKashish 6289', 'upload/userprofile/default_user.gif', 'kashishbagwale@gmail.com', '8370061024', 'User', 'Deactive', 'betu1223', '0', '', 'Loss', 'Pending', '55237689', '', '33554861', '', '', '', '', '', '', '2022-12-02', NULL, NULL, 'Approved', '', '2022-12-02'),
(21, 'Kon', 'Kyo', 'KyoKon4827', 'upload/usergraph/IMG-20221203-WA0001.jpg', '@gmail', '000', 'User', 'Active', '9', '1000', '', 'Loss', 'Done', 'Q', 'upload/usergraph/IMG-20221203-WA00013.jpg', '1', 'upload/usergraph/IMG-20221203-WA00012.jpg', 'upload/usergraph/IMG-20221203-WA00011.jpg', '123', '123', '123', '123', '2022-12-03', NULL, NULL, 'Approved', '', '2022-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_history`
--

CREATE TABLE `wallet_history` (
  `wallet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `amount_type` enum('Credit','Debit','Withdraw') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Credit',
  `amount_type_status` enum('Approve','Pending','Reject') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Approve',
  `amount_comment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` enum('Manual','Online') COLLATE utf8mb4_unicode_ci DEFAULT 'Online',
  `date_of_acion` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `payment_transition`
--
ALTER TABLE `payment_transition`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `ProfitLoss`
--
ALTER TABLE `ProfitLoss`
  ADD PRIMARY KEY (`pl_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wallet_history`
--
ALTER TABLE `wallet_history`
  ADD PRIMARY KEY (`wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_transition`
--
ALTER TABLE `payment_transition`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ProfitLoss`
--
ALTER TABLE `ProfitLoss`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wallet_history`
--
ALTER TABLE `wallet_history`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
