-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 12:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_station`
--
CREATE DATABASE IF NOT EXISTS `crime_station` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crime_station`;

-- --------------------------------------------------------

--
-- Table structure for table `accident_complaint`
--

CREATE TABLE `accident_complaint` (
  `case_id` int(11) NOT NULL COMMENT 'ID number of a Case.',
  `user_id` varchar(50) NOT NULL COMMENT 'ID of user',
  `location` text NOT NULL COMMENT 'Location of Accident',
  `description` text NOT NULL COMMENT 'Description of Accident',
  `report_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Reported time of an Complaint.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accident_complaint`
--

INSERT INTO `accident_complaint` (`case_id`, `user_id`, `location`, `description`, `report_time`) VALUES
(5, 'sarojgawad2311@gmail.com', 'Mumbai-Ahemdabad Highway Near Charoti Toll Naka', 'Car Accident', '2022-02-06 10:45:51'),
(6, 'divyeshgawad72@gmail.com', 'rgaegegeegveggrgreg', 'gegergrege', '2022-02-25 12:55:38'),
(7, 'abc@gmail.com', 'Vinay Kutir Bldg no. 2, Tirupati Nagar phase- II, Virar(W).', 'Accident by the truck.', '2022-03-21 07:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` varchar(10) NOT NULL COMMENT 'ID of Admin',
  `admin_pass` varchar(10) NOT NULL COMMENT 'Password of Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_pass`) VALUES
('admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sr. no.` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Sr. no.`, `Name`, `phone_no`) VALUES
(3, 'Omkar Sanjay Kini ', '7499546663'),
(4, 'Gagan Sutar', '727612255');

-- --------------------------------------------------------

--
-- Table structure for table `missing_person_complaint`
--

CREATE TABLE `missing_person_complaint` (
  `case_id` int(11) NOT NULL COMMENT 'ID of a Case.',
  `user_id` varchar(50) NOT NULL COMMENT 'ID of User.',
  `v_name` varchar(50) NOT NULL COMMENT 'Name of Victim.',
  `v_age` int(11) NOT NULL COMMENT 'Age of Victim.',
  `v_gender` varchar(11) NOT NULL COMMENT 'Gender of Victim.',
  `v_height` float NOT NULL COMMENT 'Height of Victim.',
  `missing_location` text NOT NULL COMMENT 'Missing Location of Victim.',
  `missing_date` date NOT NULL COMMENT 'Date of missing.',
  `contact_info` varchar(10) NOT NULL COMMENT 'Contact Information.',
  `image_name` varchar(255) NOT NULL COMMENT 'Image of Victim',
  `report_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Reported time of Complaint.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing_person_complaint`
--

INSERT INTO `missing_person_complaint` (`case_id`, `user_id`, `v_name`, `v_age`, `v_gender`, `v_height`, `missing_location`, `missing_date`, `contact_info`, `image_name`, `report_time`) VALUES
(1, 'divyeshgawad72@gmail.com', 'Sahil', 22, 'male', 247, 'Virar Railway Station', '2022-01-14', '749954663', 'Missing Person/IMG_0108.JPG', '2022-01-31 18:35:44'),
(2, 'divyeshgawad72@gmail.com', 'Sahil', 12, 'male', 147, 'jjjkl', '2022-02-14', '2515551311', 'Missing Person/IMG_0107.JPG', '2022-02-25 12:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `missing_vehicle_complaint`
--

CREATE TABLE `missing_vehicle_complaint` (
  `case_id` int(11) NOT NULL COMMENT 'ID of a Case.',
  `user_id` varchar(50) NOT NULL COMMENT 'ID of User.',
  `type` varchar(50) NOT NULL COMMENT 'Type of Vehicle.',
  `vehicle_model` text NOT NULL COMMENT 'Model of Vehicle.',
  `vehicle_number` varchar(20) NOT NULL COMMENT 'Number of Vehicle.',
  `missing_location` text NOT NULL COMMENT 'Location of Missing.',
  `missing_date` date NOT NULL COMMENT 'Date of Missing.',
  `contact_info` int(10) NOT NULL COMMENT 'Conatct Info.',
  `image_name` varchar(255) NOT NULL COMMENT 'Image of Vehicle',
  `report_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Reported time of Complaint.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing_vehicle_complaint`
--

INSERT INTO `missing_vehicle_complaint` (`case_id`, `user_id`, `type`, `vehicle_model`, `vehicle_number`, `missing_location`, `missing_date`, `contact_info`, `image_name`, `report_time`) VALUES
(1, 'divyeshgawad72@gmail.com', 'others', 'Mahidra Truck', 'MH 020BB 1454', 'Bandra Toll Naka', '2022-01-15', 0, 'Missing Vehicle/IMG_0159.JPG', '2022-01-31 18:37:48'),
(2, 'divyeshgawad72@gmail.com', 'scooty', 'Mahindra KUV 100nxt', 'MH 02 BB 1454', 'ergeege', '0000-00-00', 2022, 'Missing Vehicle/IMG_0105.JPG', '2022-02-25 12:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `murder_complaint`
--

CREATE TABLE `murder_complaint` (
  `case_id` int(11) NOT NULL COMMENT 'ID of a Case.',
  `user_id` varchar(50) NOT NULL COMMENT 'ID of User.',
  `v_name` varchar(50) NOT NULL COMMENT 'Name of Victim.',
  `location` text NOT NULL COMMENT 'Location of Incident.',
  `description` text NOT NULL COMMENT 'Description of Incident.',
  `report_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Reported time of Complaint.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `murder_complaint`
--

INSERT INTO `murder_complaint` (`case_id`, `user_id`, `v_name`, `location`, `description`, `report_time`) VALUES
(1, 'divyeshgawad72@gmail.com', 'raj', 'Mumbai-Ahemdabad Highway Near Charoti Toll Naka', 'Headshot', '2022-01-31 18:32:21'),
(2, 'divyeshgawad72@gmail.com', 'hbyi', 'uhijkbj', 'ytyjghj,k', '2022-02-25 12:55:22'),
(3, 'd@gmail.com', 'RQRFF', 'WEFQR3FREW', 'FFFWEFWE', '2022-03-21 09:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `other_complaint`
--

CREATE TABLE `other_complaint` (
  `case_id` int(11) NOT NULL COMMENT 'ID of a Case.',
  `user_id` varchar(50) NOT NULL COMMENT 'ID of User.',
  `title` varchar(20) NOT NULL COMMENT 'Title of Complaint.',
  `description` text NOT NULL COMMENT 'Description of Complaint.',
  `report_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Reported time of Complaint.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_complaint`
--

INSERT INTO `other_complaint` (`case_id`, `user_id`, `title`, `description`, `report_time`) VALUES
(1, 'divyeshgawad72@gmail.com', 'Pick Pockrting', 'desc', '2022-01-31 18:49:15'),
(2, 'divyeshgawad72@gmail.com', 'asDVFAfqdwqfewe', 'desc', '2022-01-31 18:54:19'),
(3, 'divyeshgawad72@gmail.com', 'wqdqdQDWDqeFQfe', 'qdQADAD', '2022-01-31 18:55:26'),
(4, 'divyeshgawad72@gmail.com', 'Threat of Extortion ', 'Local Criminal Rajas Bhai is threatening me for Extortion Money.', '2022-03-03 17:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `robbery_complaint`
--

CREATE TABLE `robbery_complaint` (
  `case_id` int(11) NOT NULL COMMENT 'ID of a Case.',
  `user_id` varchar(50) NOT NULL COMMENT 'ID of User.',
  `location` text NOT NULL COMMENT 'Location of Incident.',
  `description` text NOT NULL COMMENT 'Description of Incident.',
  `report_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Reported time of Complaint.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `robbery_complaint`
--

INSERT INTO `robbery_complaint` (`case_id`, `user_id`, `location`, `description`, `report_time`) VALUES
(1, 'divyeshgawad72@gmail.com', 'SBI Bank', '5 Thievies steal gold', '2022-01-31 18:48:24'),
(2, 'divyeshgawad72@gmail.com', 'Vinay Kutir Bldg no. 2, Tirupati Nagar phase- II, Virar(W).', 'ji.uuuuuuuuuuuuu', '2022-02-25 12:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `sno` int(11) NOT NULL COMMENT 'Serial Number.',
  `email_id` varchar(50) NOT NULL COMMENT 'Email ID of User.',
  `name` varchar(50) NOT NULL COMMENT 'Name Of the User',
  `gender` varchar(6) NOT NULL COMMENT 'Gender of User.',
  `phone_no` varchar(10) NOT NULL COMMENT 'Phone Number of User.',
  `address` text NOT NULL COMMENT 'Address of User.',
  `password` varchar(255) NOT NULL COMMENT 'Password of User.',
  `register_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Registered time of User.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`sno`, `email_id`, `name`, `gender`, `phone_no`, `address`, `password`, `register_date`) VALUES
(1, 'divyeshgawad72@gmail.com', 'Divyesh Avdhoot Gawad', 'male', '8007831930', 'B/101, Vinay Complex, Y.K. Nagar, Virar (West).', '$2y$10$6Cy998AMOzgLtDHdfjcCheP6YUUFDKiC7zKU..AJ5LVQv3BLV8t5u', '2022-03-03 17:02:22'),
(2, 'abc@gmail.com', 'Cynthia', 'female', '1234567890', 'abcd efghi ', '$2y$10$Dl/ZL.GpGWo44mPiMnO8ou9YYQb7VNQKE6OIAHYivdUAtRlRWTo5a', '2022-03-21 07:54:20'),
(3, 'd@gmail.com', 'Divyesh', 'male', '1234567890', 'ESGvewsvwefvewfvvvfvfv', '$2y$10$MY/EZpv90jK16VB0P9dusOahe5SX9UGvwlyPJ88.OG6IYbGyTMouS', '2022-03-21 09:25:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_complaint`
--
ALTER TABLE `accident_complaint`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sr. no.`);

--
-- Indexes for table `missing_person_complaint`
--
ALTER TABLE `missing_person_complaint`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `missing_vehicle_complaint`
--
ALTER TABLE `missing_vehicle_complaint`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `murder_complaint`
--
ALTER TABLE `murder_complaint`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `other_complaint`
--
ALTER TABLE `other_complaint`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `robbery_complaint`
--
ALTER TABLE `robbery_complaint`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident_complaint`
--
ALTER TABLE `accident_complaint`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID number of a Case.', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sr. no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `missing_person_complaint`
--
ALTER TABLE `missing_person_complaint`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of a Case.', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `missing_vehicle_complaint`
--
ALTER TABLE `missing_vehicle_complaint`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of a Case.', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `murder_complaint`
--
ALTER TABLE `murder_complaint`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of a Case.', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_complaint`
--
ALTER TABLE `other_complaint`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of a Case.', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `robbery_complaint`
--
ALTER TABLE `robbery_complaint`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID of a Case.', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Serial Number.', AUTO_INCREMENT=4;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'crime_station', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"accident_complaint\",\"admin_details\",\"missing_person_complaint\",\"missing_vehicle_complaint\",\"murder_complaint\",\"other_complaint\",\"robbery_complaint\",\"users_details\"],\"table_structure[]\":[\"accident_complaint\",\"admin_details\",\"missing_person_complaint\",\"missing_vehicle_complaint\",\"murder_complaint\",\"other_complaint\",\"robbery_complaint\",\"users_details\"],\"table_data[]\":[\"accident_complaint\",\"admin_details\",\"missing_person_complaint\",\"missing_vehicle_complaint\",\"murder_complaint\",\"other_complaint\",\"robbery_complaint\",\"users_details\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"crime_station\",\"table\":\"users_details\"},{\"db\":\"crime_station\",\"table\":\"accident_complaint\"},{\"db\":\"crime_station\",\"table\":\"contact\"},{\"db\":\"crime_station\",\"table\":\"other_complaint\"},{\"db\":\"crime_station\",\"table\":\"missing_vehicle_complaint\"},{\"db\":\"crime_station\",\"table\":\"admin_details\"},{\"db\":\"crime_station\",\"table\":\"robbery_complaint\"},{\"db\":\"crime_station\",\"table\":\"murder_complaint\"},{\"db\":\"crime_station\",\"table\":\"missing_person_complaint\"},{\"db\":\"crime_station\",\"table\":\"accident2\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-02-25 07:24:05', '{\"Console\\/Mode\":\"show\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
