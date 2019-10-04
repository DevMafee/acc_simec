-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 02:32 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acc_simec`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_group_head`
--

CREATE TABLE `acc_group_head` (
  `acc_group_head_id` int(11) NOT NULL,
  `acc_group_head_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_group_head_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_group_head_report_type` int(11) NOT NULL,
  `acc_group_head_status` int(2) NOT NULL DEFAULT 1,
  `acc_group_head_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acc_group_head`
--

INSERT INTO `acc_group_head` (`acc_group_head_id`, `acc_group_head_code`, `acc_group_head_title`, `acc_group_head_report_type`, `acc_group_head_status`, `acc_group_head_date`) VALUES
(1, '101', 'CAPITAL & LIABILITIES\r\nSOURCE OF FUNDS', 1, 1, '2019-10-04 13:19:06'),
(2, '102', 'PROPERTIES & ASSETS APPLICATION OF FUNDS', 2, 1, '2019-10-04 13:19:06'),
(11, '103', 'Shareholder`s Equity', 1, 1, '2019-10-04 16:00:16'),
(12, '2019001', 'Group Head Title', 1, 1, '2019-10-04 18:07:53'),
(13, '2019102', 'Group Head Title', 2, 1, '2019-10-04 18:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `acc_report_type`
--

CREATE TABLE `acc_report_type` (
  `acc_report_type_id` int(11) NOT NULL,
  `acc_report_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_report_type_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acc_report_type`
--

INSERT INTO `acc_report_type` (`acc_report_type_id`, `acc_report_type_name`, `acc_report_type_status`) VALUES
(1, 'Balance Sheet', 1),
(2, 'Trial Balance', 1),
(3, 'Profit & Loss', 1),
(4, 'Ledger', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acc_sub_head`
--

CREATE TABLE `acc_sub_head` (
  `acc_sub_head_id` int(11) NOT NULL,
  `acc_sub_head_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_sub_head_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acc_sub_head_add_less` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `acc_sub_head_group` int(11) NOT NULL,
  `acc_sub_head_report_type` int(11) NOT NULL,
  `acc_sub_head_status` int(2) NOT NULL DEFAULT 1,
  `acc_sub_head_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acc_sub_head`
--

INSERT INTO `acc_sub_head` (`acc_sub_head_id`, `acc_sub_head_code`, `acc_sub_head_title`, `acc_sub_head_add_less`, `acc_sub_head_group`, `acc_sub_head_report_type`, `acc_sub_head_status`, `acc_sub_head_date`) VALUES
(1, '2019', 'Sub Head Title', 'Add', 2, 2, 1, '2019-10-04 17:32:51'),
(2, '2015001', 'New Sub Head', 'Less', 11, 1, 1, '2019-10-04 18:28:25'),
(3, '2016', 'New Sub Head', 'Less', 11, 2, 1, '2019-10-04 18:29:17'),
(4, '201254', 'New Sub Head', 'Less', 11, 4, 1, '2019-10-04 18:30:59'),
(5, 'acc_sub_head_code', 'acc_sub_head_code', 'Less', 1, 3, 1, '2019-10-04 18:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `field_id` int(11) NOT NULL,
  `field_form` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `field_label` varchar(255) NOT NULL,
  `field_length` int(10) NOT NULL,
  `field_category` varchar(100) NOT NULL,
  `field_data_type` varchar(100) NOT NULL,
  `field_required` varchar(20) NOT NULL,
  `field_style` text NOT NULL,
  `field_readonly` varchar(20) NOT NULL,
  `field_js` text NOT NULL,
  `field_value` text NOT NULL,
  `field_status` varchar(20) NOT NULL,
  `field_added_by` int(10) NOT NULL,
  `field_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`field_id`, `field_form`, `field_name`, `field_label`, `field_length`, `field_category`, `field_data_type`, `field_required`, `field_style`, `field_readonly`, `field_js`, `field_value`, `field_status`, `field_added_by`, `field_date`) VALUES
(1, 44, 'asdasdad', 'asdasdasd', 123, 'text', 'varchar', 'yes', '', 'no', '', '', 'yes', 1, '2019-09-17 18:47:15'),
(2, 44, 'new_field_created', 'New Field Created', 250, 'text', 'varchar', 'yes', 'background-color:yellow;', 'no', 'onclick=\"alert(\'Hi\')\"', '', 'yes', 1, '2019-09-17 18:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `modules_id` int(10) NOT NULL,
  `modules_name` varchar(255) NOT NULL,
  `modules_table` varchar(255) NOT NULL,
  `modules_rank` int(10) NOT NULL,
  `modules_status` int(1) NOT NULL DEFAULT 1,
  `modules_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`modules_id`, `modules_name`, `modules_table`, `modules_rank`, `modules_status`, `modules_date`) VALUES
(49, 'acc_group_head', 'acc_group_head', 1, 1, '2019-10-04 12:54:36'),
(50, 'acc_sub_head', 'acc_sub_head', 2, 1, '2019-10-04 17:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_id_md5` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'User',
  `user_photo` varchar(255) NOT NULL,
  `user_bio` text NOT NULL,
  `user_designation` int(10) NOT NULL,
  `user_status` int(10) NOT NULL DEFAULT 1,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_id_md5`, `full_name`, `username`, `password`, `user_type`, `user_photo`, `user_bio`, `user_designation`, `user_status`, `last_login`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Md Salman Sajib', 'salman', '202cb962ac59075b964b07152d234b70', 'Master Admin', 'salman.jpg', 'Huge fan of HTML, CSS and Javascript. Web design and open source lover. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 0, 1, '2019-09-02 10:06:13'),
(2, 'c81e728d9d4c2f636f067f89cc14862c', 'Super Admin', 'superadmin', 'cdcc78f045d273c12e6d367c101f5f56', 'Super Admin', 'salman.jpg', '', 0, 1, '2019-09-06 04:04:08'),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'Only Admin', 'onlyadmin', 'cdcc78f045d273c12e6d367c101f5f56', 'Admin', '', '', 0, 1, '2019-09-06 04:04:08'),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 'User Only', 'useronly', 'cdcc78f045d273c12e6d367c101f5f56', 'User', '', '', 0, 1, '2019-09-06 04:04:08'),
(30, '34173cb38f07f89ddbebc2ac9128303f', 'New Testing', 'newtesting', '123456', 'User', '', '', 0, 1, '2019-09-12 10:01:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_group_head`
--
ALTER TABLE `acc_group_head`
  ADD PRIMARY KEY (`acc_group_head_id`);

--
-- Indexes for table `acc_report_type`
--
ALTER TABLE `acc_report_type`
  ADD PRIMARY KEY (`acc_report_type_id`);

--
-- Indexes for table `acc_sub_head`
--
ALTER TABLE `acc_sub_head`
  ADD PRIMARY KEY (`acc_sub_head_id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`modules_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_group_head`
--
ALTER TABLE `acc_group_head`
  MODIFY `acc_group_head_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `acc_report_type`
--
ALTER TABLE `acc_report_type`
  MODIFY `acc_report_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `acc_sub_head`
--
ALTER TABLE `acc_sub_head`
  MODIFY `acc_sub_head_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `modules_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
