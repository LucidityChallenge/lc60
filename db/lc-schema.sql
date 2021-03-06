-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2017 at 03:51 PM
-- Server version: 10.0.27-MariaDB-1
-- PHP Version: 7.0.20-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tggtt`
--
CREATE DATABASE IF NOT EXISTS `tggtt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tggtt`;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_calculated_subtask_demand_external`
-- (See below for the actual view)
--
CREATE TABLE `lc60_calculated_subtask_demand_external` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` tinyint(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` decimal(44,0)
,`external_function` decimal(47,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_calculated_subtask_demand_final_value`
-- (See below for the actual view)
--
CREATE TABLE `lc60_calculated_subtask_demand_final_value` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` tinyint(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` decimal(44,0)
,`external_function` decimal(47,0)
,`final_value` decimal(48,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_calculated_subtask_demand_inner`
-- (See below for the actual view)
--
CREATE TABLE `lc60_calculated_subtask_demand_inner` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` tinyint(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` decimal(44,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_contemporary_success_count`
-- (See below for the actual view)
--
CREATE TABLE `lc60_contemporary_success_count` (
`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`success_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_current_task`
-- (See below for the actual view)
--
CREATE TABLE `lc60_current_task` (
`task_id` tinyint(4)
,`task_title` varchar(48)
,`task_start` timestamp
,`task_expiration` timestamp
,`task_text` text
,`task_url` varchar(80)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_demand_accumulated_success`
-- (See below for the actual view)
--
CREATE TABLE `lc60_demand_accumulated_success` (
`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_success_count` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_demand_base_success`
-- (See below for the actual view)
--
CREATE TABLE `lc60_demand_base_success` (
`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`task_expiration` timestamp
,`subtask_success_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_demand_view`
-- (See below for the actual view)
--
CREATE TABLE `lc60_demand_view` (
`subtask_id` int(11)
,`demand` int(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_demand_view_complete_contemporary_demand`
-- (See below for the actual view)
--
CREATE TABLE `lc60_demand_view_complete_contemporary_demand` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` tinyint(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`contemporary_demand` decimal(44,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_demand_view_complete_contemporary_demand_positive`
-- (See below for the actual view)
--
CREATE TABLE `lc60_demand_view_complete_contemporary_demand_positive` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` tinyint(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_demand_view_success`
-- (See below for the actual view)
--
CREATE TABLE `lc60_demand_view_success` (
`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` int(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_dream_scoring`
-- (See below for the actual view)
--
CREATE TABLE `lc60_dream_scoring` (
`dream_id` int(11)
,`final_value_truncate` decimal(65,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_dream_scoring_stats`
-- (See below for the actual view)
--
CREATE TABLE `lc60_dream_scoring_stats` (
`dream_count` bigint(21)
,`dream_total_score` decimal(65,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_dream_type_id`
-- (See below for the actual view)
--
CREATE TABLE `lc60_dream_type_id` (
`dream_id` int(11)
,`dream_type_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_dream_types`
--

CREATE TABLE `lc60_dream_types` (
  `id` int(11) NOT NULL,
  `dream_type_name` varchar(32) NOT NULL,
  `dream_type_short_name` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_dream_with_type`
-- (See below for the actual view)
--
CREATE TABLE `lc60_dream_with_type` (
`participant_id` int(11)
,`dream_id` int(11)
,`dream_timestamp` timestamp
,`dream_type_id` int(11)
,`dream_type_name` varchar(32)
,`dream_type_short_name` varchar(8)
,`final_value_truncate` decimal(65,2)
,`task_id` tinyint(4)
,`task_title` varchar(48)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_dream_with_type_participant`
-- (See below for the actual view)
--
CREATE TABLE `lc60_dream_with_type_participant` (
`participant_id` int(11)
,`participant_name` varchar(48)
,`dream_id` int(11)
,`dream_timestamp` timestamp
,`dream_type_id` int(11)
,`dream_type_name` varchar(32)
,`dream_type_short_name` varchar(8)
,`final_value_truncate` decimal(65,2)
,`task_id` tinyint(4)
,`task_title` varchar(48)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_dreams`
--

CREATE TABLE `lc60_dreams` (
  `id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `dream_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dream_url` varchar(80) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_first_dream_subtask`
-- (See below for the actual view)
--
CREATE TABLE `lc60_first_dream_subtask` (
`participant_id` int(11)
,`dream_timestamp` timestamp
,`subtask_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_first_share_holder_participant`
-- (See below for the actual view)
--
CREATE TABLE `lc60_first_share_holder_participant` (
`subtask_share_holder_count` bigint(21)
,`subtask_id` int(11)
,`participant_id` int(11)
,`participant_name` varchar(48)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_manual_value`
--

CREATE TABLE `lc60_manual_value` (
  `subtask_id` int(11) NOT NULL,
  `contemporary_task_id` int(11) NOT NULL,
  `manual_demand` tinyint(11) NOT NULL,
  `manual_value` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lc60_memos`
--

CREATE TABLE `lc60_memos` (
  `id` int(11) NOT NULL,
  `memo_nickname` varchar(48) NOT NULL,
  `memo_message` tinytext NOT NULL,
  `memo_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `memo_unread` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lc60_news`
--

CREATE TABLE `lc60_news` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description` mediumtext NOT NULL,
  `url` varchar(80) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_open_list`
-- (See below for the actual view)
--
CREATE TABLE `lc60_open_list` (
`Name_exp_1` varchar(465)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_participants`
--

CREATE TABLE `lc60_participants` (
  `id` int(11) NOT NULL,
  `participant_name` varchar(48) NOT NULL,
  `participant_dj_url` varchar(255) DEFAULT NULL,
  `participant_join_url` varchar(80) DEFAULT NULL,
  `participant_image_url` varchar(255) DEFAULT NULL,
  `participant_join_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subtask_category_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_recent_successes`
-- (See below for the actual view)
--
CREATE TABLE `lc60_recent_successes` (
`id` varchar(24)
,`participant_name` varchar(48)
,`dream_type_short_name` varchar(8)
,`participant_id` int(11)
,`dream_id` int(11)
,`dream_type_id` int(11)
,`dream_timestamp` timestamp
,`dream_url` varchar(80)
,`contemporary_task_id` tinyint(4)
,`contemporary_task_start` timestamp
,`contemporary_task_expiration` timestamp
,`subtask_id` int(11)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_task_period_demand` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_success_count` decimal(42,0)
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` decimal(44,0)
,`external_function` decimal(47,0)
,`final_value` decimal(50,2)
,`subtask_dividend_rate` decimal(4,1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_score_view_complete`
-- (See below for the actual view)
--
CREATE TABLE `lc60_score_view_complete` (
`participant_id` int(11)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_value_avg` decimal(52,4)
,`final_value_total` decimal(65,0)
,`dividend_count_sum_total` decimal(64,0)
,`dividend_count_participant_total` bigint(21)
,`final_dividend_value_avg` decimal(19,13)
,`final_dividend_value_total` decimal(37,9)
,`final_value_total_with_dividends` decimal(65,9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_score_view_complete_participant`
-- (See below for the actual view)
--
CREATE TABLE `lc60_score_view_complete_participant` (
`participant_id` int(11)
,`participant_name` varchar(48)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_value_avg` decimal(52,4)
,`final_value_total` decimal(65,0)
,`dividend_count_sum_total` decimal(64,0)
,`dividend_count_participant_total` bigint(21)
,`final_dividend_value_avg` decimal(19,13)
,`final_dividend_value_total` decimal(37,9)
,`final_value_total_with_dividends` decimal(65,9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_scores`
-- (See below for the actual view)
--
CREATE TABLE `lc60_scores` (
`position` bigint(21)
,`participant_id` int(11)
,`participant` varchar(48)
,`successful_subtasks` bigint(21)
,`average_subtask_value` decimal(52,4)
,`total_subtask_value` decimal(65,2)
,`dividend_successes` bigint(21)
,`average_dividend_value` decimal(19,13)
,`total_dividends` decimal(37,9)
,`total_score` decimal(58,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_share_holders_participant`
-- (See below for the actual view)
--
CREATE TABLE `lc60_share_holders_participant` (
`subtask_id` int(11)
,`participant_id` int(11)
,`participant_name` varchar(48)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_signups`
-- (See below for the actual view)
--
CREATE TABLE `lc60_signups` (
`signup_url` varchar(45)
,`signup_image_url` varchar(12)
,`now_date` datetime
,`now_date_unix` bigint(17)
,`open_date` varchar(19)
,`open_date_unix` bigint(17)
,`begin_date` timestamp
,`begin_date_unix` bigint(17)
,`participant_count` bigint(21)
,`dream_count` bigint(21)
,`dream_total_score` decimal(63,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_start`
-- (See below for the actual view)
--
CREATE TABLE `lc60_start` (
`now_date` datetime
,`now_date_unix` bigint(17)
,`end_date` varchar(19)
,`end_date_unix` bigint(17)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_subtask_categories`
--

CREATE TABLE `lc60_subtask_categories` (
  `id` tinyint(4) NOT NULL,
  `subtask_category_name` varchar(16) NOT NULL,
  `subtask_category_color` varchar(8) NOT NULL,
  `subtask_category_class` varchar(16) CHARACTER SET ascii DEFAULT NULL,
  `subtask_category_description` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_subtask_dream_super`
-- (See below for the actual view)
--
CREATE TABLE `lc60_subtask_dream_super` (
`subtask_dream_attempt` int(11)
,`subtask_id` int(11)
,`dream_id` int(11)
,`implied_from_super_task` bigint(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_subtask_dream_super_name`
-- (See below for the actual view)
--
CREATE TABLE `lc60_subtask_dream_super_name` (
`subtask_dream_attempt` int(11)
,`subtask_id` int(11)
,`dream_id` int(11)
,`implied_from_super_task` bigint(20)
,`subtask_name` varchar(48)
,`subtask_super_id` int(11)
,`super_subtask_name` varchar(48)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_subtask_dreams`
--

CREATE TABLE `lc60_subtask_dreams` (
  `id` int(11) NOT NULL,
  `subtask_id` int(11) NOT NULL,
  `dream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_subtask_pre_values`
-- (See below for the actual view)
--
CREATE TABLE `lc60_subtask_pre_values` (
`subtask_id` int(11)
,`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`contemporary_task_id_pre` tinyint(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`contemporary_demand_pre` decimal(44,0)
,`contemporary_demand_positive_pre` decimal(44,0)
,`contemporary_demand_cur` decimal(44,0)
,`contemporary_demand_positive_cur` decimal(44,0)
,`final_value_pre` decimal(48,0)
,`final_value_cur` decimal(48,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_subtask_share_holder`
-- (See below for the actual view)
--
CREATE TABLE `lc60_subtask_share_holder` (
`id` varchar(24)
,`subtask_id` int(11)
,`participant_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_subtask_share_holder_complete`
-- (See below for the actual view)
--
CREATE TABLE `lc60_subtask_share_holder_complete` (
`id` int(11)
,`subtask_id` int(11)
,`participant_id` int(11)
,`task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_task_period_demand` tinyint(4)
,`participant_owner` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`subtask_image` varchar(255)
,`subtask_symbol` int(11)
,`subtask_instruction` tinytext
,`subtask_type_id` tinyint(4)
,`subtask_type_name` varchar(32)
,`subtask_share_holder_count` bigint(21)
,`participant_owner_name` varchar(48)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_subtask_share_holder_count`
-- (See below for the actual view)
--
CREATE TABLE `lc60_subtask_share_holder_count` (
`subtask_id` int(11)
,`subtask_share_holder_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_subtask_shares`
--

CREATE TABLE `lc60_subtask_shares` (
  `id` int(11) NOT NULL,
  `subtask_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `subtask_share_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_subtask_subtask_category`
-- (See below for the actual view)
--
CREATE TABLE `lc60_subtask_subtask_category` (
`subtask_id` int(11)
,`task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_task_period_demand` tinyint(4)
,`participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_image` varchar(255)
,`subtask_symbol` int(11)
,`subtask_instruction` tinytext
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_subtask_types`
--

CREATE TABLE `lc60_subtask_types` (
  `id` tinyint(4) NOT NULL,
  `subtask_type_name` varchar(32) NOT NULL,
  `subtask_type_ownable` tinyint(1) UNSIGNED DEFAULT '1',
  `subtask_type_shareable` tinyint(1) UNSIGNED DEFAULT '1',
  `subtask_type_unlockable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_subtask_values`
-- (See below for the actual view)
--
CREATE TABLE `lc60_subtask_values` (
`id` int(11)
,`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` tinyint(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`task_title` varchar(48)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_description` tinytext
,`subtask_accumulative` tinyint(1)
,`subtask_owner_participant_id` int(11)
,`subtask_symbol` int(11)
,`subtask_image` varchar(255)
,`subtask_type_id` tinyint(4)
,`subtask_type_name` varchar(32)
,`subtask_type_ownable` tinyint(1) unsigned
,`subtask_type_shareable` tinyint(1) unsigned
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_color` varchar(8)
,`contemporary_demand_cur` decimal(44,0)
,`contemporary_demand_positive_cur` decimal(44,0)
,`contemporary_demand_pre` decimal(44,0)
,`contemporary_demand_positive_pre` decimal(44,0)
,`final_value_pre` decimal(48,0)
,`final_value_cur` decimal(48,0)
,`subtask_share_holder_count` bigint(21)
,`subtask_type_unlockable` tinyint(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_subtasks`
--

CREATE TABLE `lc60_subtasks` (
  `id` int(11) NOT NULL,
  `task_id` tinyint(4) NOT NULL DEFAULT '1',
  `subtask_super_id` int(11) DEFAULT NULL COMMENT 'parent for sub task.',
  `subtask_name` varchar(48) NOT NULL,
  `subtask_category_id` tinyint(4) DEFAULT NULL,
  `subtask_base_value` tinyint(4) NOT NULL COMMENT 'score base.',
  `subtask_max_value` tinyint(4) DEFAULT NULL COMMENT 'Max value used to be DEFAULT ''20''',
  `subtask_starting_demand` tinyint(4) NOT NULL DEFAULT '0',
  `subtask_inflation_rate` decimal(4,1) NOT NULL DEFAULT '102.0' COMMENT 'Deprecated.',
  `subtask_demand_cutoff` tinyint(4) NOT NULL DEFAULT '7',
  `subtask_bonus_base` tinyint(4) NOT NULL DEFAULT '0',
  `subtask_description` tinytext,
  `subtask_url` varchar(48) DEFAULT NULL,
  `subtask_accumulative` tinyint(1) NOT NULL DEFAULT '0',
  `subtask_task_period_demand` tinyint(4) NOT NULL DEFAULT '0',
  `participant_id` int(11) DEFAULT NULL COMMENT 'Optional owner for the subtask.',
  `subtask_dividend_rate` decimal(4,1) NOT NULL DEFAULT '0.0',
  `subtask_image` varchar(255) DEFAULT NULL,
  `subtask_symbol` int(11) DEFAULT NULL,
  `subtask_instruction` tinytext,
  `subtask_type_id` tinyint(4) NOT NULL DEFAULT '1',
  `subtask_visible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask` (
`participant_id` int(11)
,`dream_id` int(11)
,`dream_timestamp` timestamp
,`dream_type_id` int(11)
,`dream_url` varchar(80)
,`subtask_id` int(11)
,`task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_task_period_demand` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_type_id` tinyint(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_category`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_category` (
`participant_id` int(11)
,`subtask_category_id` tinyint(4)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_category_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_category_complete_final`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_category_complete_final` (
`participant_id` int(11)
,`subtask_category_id` tinyint(4)
,`subtask_category_count_sum` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_category_complete_final_minimum`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_category_complete_final_minimum` (
`participant_id` int(11)
,`subtask_category_count_sum_min` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_category_complete_inner`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_category_complete_inner` (
`participant_id` int(11)
,`subtask_category_id` tinyint(4)
,`subtask_category_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_category_full`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_category_full` (
`participant_id` int(11)
,`subtask_category_id` tinyint(4)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`subtask_category_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_dividend_calculated_total`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_dividend_calculated_total` (
`participant_id` int(11)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_dividend_value_avg` decimal(19,13)
,`final_dividend_value_total` decimal(37,9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_dividend_scores`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_dividend_scores` (
`participant_id` int(11)
,`dreamer_id` int(11)
,`dream_id` int(11)
,`dream_type_id` int(11)
,`dream_timestamp` timestamp
,`dream_url` varchar(80)
,`contemporary_task_id` tinyint(4)
,`contemporary_task_start` timestamp
,`contemporary_task_expiration` timestamp
,`subtask_id` int(11)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_task_period_demand` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_success_count` decimal(42,0)
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` decimal(44,0)
,`external_function` decimal(47,0)
,`final_value` decimal(48,0)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_share_holder_count` bigint(21)
,`final_dividend_value` decimal(15,9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_task`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_task` (
`participant_id` int(11)
,`dream_id` int(11)
,`dream_type_id` int(11)
,`dream_timestamp` timestamp
,`dream_url` varchar(80)
,`contemporary_task_id` tinyint(4)
,`contemporary_task_start` timestamp
,`contemporary_task_expiration` timestamp
,`subtask_id` int(11)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_task_period_demand` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_dividend_rate` decimal(4,1)
,`subtask_type_id` tinyint(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_task_with_calculated_scoring`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_task_with_calculated_scoring` (
`participant_id` int(11)
,`dream_id` int(11)
,`dream_type_id` int(11)
,`dream_timestamp` timestamp
,`dream_url` varchar(80)
,`contemporary_task_id` tinyint(4)
,`contemporary_task_start` timestamp
,`contemporary_task_expiration` timestamp
,`subtask_id` int(11)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_task_period_demand` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_type_id` tinyint(4)
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` decimal(44,0)
,`external_function` decimal(47,0)
,`final_value` decimal(48,0)
,`final_value_truncate` decimal(50,2)
,`subtask_dividend_rate` decimal(4,1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_task_with_calculated_scoring_owner`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_task_with_calculated_scoring_owner` (
`participant_id` int(11)
,`dream_id` int(11)
,`dream_type_id` int(11)
,`dream_timestamp` timestamp
,`dream_url` varchar(80)
,`contemporary_task_id` tinyint(4)
,`contemporary_task_start` timestamp
,`contemporary_task_expiration` timestamp
,`subtask_id` int(11)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_task_period_demand` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` decimal(44,0)
,`external_function` decimal(47,0)
,`final_value` decimal(48,0)
,`final_value_truncate` decimal(50,2)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_type_id` tinyint(4)
,`participant_name` varchar(48)
,`task_title` varchar(48)
,`subtask_share_holder_count` bigint(21)
,`participant_holder_id` int(11)
,`participant_holder_name` varchar(48)
,`final_owner_payout` decimal(8,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_task_with_calculated_scoring_participant`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_task_with_calculated_scoring_participant` (
`participant_id` int(11)
,`dream_id` int(11)
,`dream_type_id` int(11)
,`dream_timestamp` timestamp
,`dream_url` varchar(80)
,`contemporary_task_id` tinyint(4)
,`contemporary_task_start` timestamp
,`contemporary_task_expiration` timestamp
,`subtask_id` int(11)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_starting_demand` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_bonus_base` tinyint(4)
,`subtask_task_period_demand` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_success_count` decimal(42,0)
,`subtask_success_count_total` bigint(21)
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` decimal(44,0)
,`external_function` decimal(47,0)
,`final_value` decimal(48,0)
,`final_value_truncate` decimal(50,2)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_type_id` tinyint(4)
,`participant_name` varchar(48)
,`task_title` varchar(48)
,`subtask_share_holder_count` bigint(21)
,`participant_holder_id` int(11)
,`participant_holder_name` varchar(48)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_task_with_calculated_subtotal`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_task_with_calculated_subtotal` (
`participant_id` int(11)
,`contemporary_task_id` tinyint(4)
,`subtask_success_count_sum_subtotal` decimal(64,0)
,`subtask_success_count_participant_subtotal` bigint(21)
,`final_value_avg` decimal(52,4)
,`final_value_subtotal` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_task_with_calculated_total`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_task_with_calculated_total` (
`participant_id` int(11)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_value_avg` decimal(52,4)
,`final_value_total` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_task_with_calculated_total_complete`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_task_with_calculated_total_complete` (
`participant_id` int(11)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_value_avg` decimal(52,4)
,`final_value_total` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_successful_subtask_task_with_calculated_total_participant`
-- (See below for the actual view)
--
CREATE TABLE `lc60_successful_subtask_task_with_calculated_total_participant` (
`participant_id` int(11)
,`participant` varchar(48)
,`successes` bigint(21)
,`score` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_tasks`
--

CREATE TABLE `lc60_tasks` (
  `id` tinyint(4) NOT NULL,
  `task_title` varchar(48) NOT NULL,
  `task_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'start date for the week.',
  `task_expiration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Why I cannot set TIMESTAMP(now() + (INTERVAL 1 WEEK)) for default',
  `task_text` text NOT NULL COMMENT '64kb of text',
  `task_url` varchar(80) NOT NULL,
  `task_image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lc60_unexpired_task`
-- (See below for the actual view)
--
CREATE TABLE `lc60_unexpired_task` (
`task_id` tinyint(4)
,`task_title` varchar(48)
,`task_start` timestamp
,`task_expiration` timestamp
,`task_text` text
,`task_url` varchar(80)
,`task_unexpired` int(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `lc60_users`
--

CREATE TABLE `lc60_users` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure for view `lc60_calculated_subtask_demand_external`
--
DROP TABLE IF EXISTS `lc60_calculated_subtask_demand_external`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_calculated_subtask_demand_external`  AS  select `calculated_subtask_demand_inner`.`current_task_id` AS `current_task_id`,`calculated_subtask_demand_inner`.`contemporary_task_id` AS `contemporary_task_id`,`calculated_subtask_demand_inner`.`subtask_id` AS `subtask_id`,`calculated_subtask_demand_inner`.`subtask_starting_demand` AS `subtask_starting_demand`,`calculated_subtask_demand_inner`.`subtask_success_count` AS `subtask_success_count`,`calculated_subtask_demand_inner`.`subtask_success_count_total` AS `subtask_success_count_total`,`calculated_subtask_demand_inner`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`calculated_subtask_demand_inner`.`subtask_task_id` AS `subtask_task_id`,`calculated_subtask_demand_inner`.`subtask_super_id` AS `subtask_super_id`,`calculated_subtask_demand_inner`.`subtask_name` AS `subtask_name`,`calculated_subtask_demand_inner`.`subtask_category_id` AS `subtask_category_id`,`calculated_subtask_demand_inner`.`subtask_base_value` AS `subtask_base_value`,`calculated_subtask_demand_inner`.`subtask_max_value` AS `subtask_max_value`,`calculated_subtask_demand_inner`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`calculated_subtask_demand_inner`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`calculated_subtask_demand_inner`.`subtask_bonus_base` AS `subtask_bonus_base`,`calculated_subtask_demand_inner`.`subtask_description` AS `subtask_description`,`calculated_subtask_demand_inner`.`subtask_url` AS `subtask_url`,`calculated_subtask_demand_inner`.`subtask_accumulative` AS `subtask_accumulative`,`calculated_subtask_demand_inner`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`calculated_subtask_demand_inner`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`calculated_subtask_demand_inner`.`subtask_category_name` AS `subtask_category_name`,`calculated_subtask_demand_inner`.`subtask_category_class` AS `subtask_category_class`,`calculated_subtask_demand_inner`.`subtask_category_description` AS `subtask_category_description`,`calculated_subtask_demand_inner`.`contemporary_demand` AS `contemporary_demand`,`calculated_subtask_demand_inner`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`calculated_subtask_demand_inner`.`inner_function` AS `inner_function`,(`calculated_subtask_demand_inner`.`inner_function` * `calculated_subtask_demand_inner`.`subtask_bonus_base`) AS `external_function` from `lc60_calculated_subtask_demand_inner` `calculated_subtask_demand_inner` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_calculated_subtask_demand_final_value`
--
DROP TABLE IF EXISTS `lc60_calculated_subtask_demand_final_value`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_calculated_subtask_demand_final_value`  AS  select `calculated_subtask_demand_external`.`current_task_id` AS `current_task_id`,`calculated_subtask_demand_external`.`contemporary_task_id` AS `contemporary_task_id`,`calculated_subtask_demand_external`.`subtask_id` AS `subtask_id`,`calculated_subtask_demand_external`.`subtask_starting_demand` AS `subtask_starting_demand`,`calculated_subtask_demand_external`.`subtask_success_count` AS `subtask_success_count`,`calculated_subtask_demand_external`.`subtask_success_count_total` AS `subtask_success_count_total`,`calculated_subtask_demand_external`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`calculated_subtask_demand_external`.`subtask_task_id` AS `subtask_task_id`,`calculated_subtask_demand_external`.`subtask_super_id` AS `subtask_super_id`,`calculated_subtask_demand_external`.`subtask_name` AS `subtask_name`,`calculated_subtask_demand_external`.`subtask_category_id` AS `subtask_category_id`,`calculated_subtask_demand_external`.`subtask_base_value` AS `subtask_base_value`,`calculated_subtask_demand_external`.`subtask_max_value` AS `subtask_max_value`,`calculated_subtask_demand_external`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`calculated_subtask_demand_external`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`calculated_subtask_demand_external`.`subtask_bonus_base` AS `subtask_bonus_base`,`calculated_subtask_demand_external`.`subtask_description` AS `subtask_description`,`calculated_subtask_demand_external`.`subtask_url` AS `subtask_url`,`calculated_subtask_demand_external`.`subtask_accumulative` AS `subtask_accumulative`,`calculated_subtask_demand_external`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`calculated_subtask_demand_external`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`calculated_subtask_demand_external`.`subtask_category_name` AS `subtask_category_name`,`calculated_subtask_demand_external`.`subtask_category_class` AS `subtask_category_class`,`calculated_subtask_demand_external`.`subtask_category_description` AS `subtask_category_description`,`calculated_subtask_demand_external`.`contemporary_demand` AS `contemporary_demand`,`calculated_subtask_demand_external`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`calculated_subtask_demand_external`.`inner_function` AS `inner_function`,`calculated_subtask_demand_external`.`external_function` AS `external_function`,(case when (`calculated_subtask_demand_external`.`external_function` >= `calculated_subtask_demand_external`.`subtask_max_value`) then `calculated_subtask_demand_external`.`subtask_max_value` else (`calculated_subtask_demand_external`.`external_function` + `calculated_subtask_demand_external`.`subtask_base_value`) end) AS `final_value` from `lc60_calculated_subtask_demand_external` `calculated_subtask_demand_external` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_calculated_subtask_demand_inner`
--
DROP TABLE IF EXISTS `lc60_calculated_subtask_demand_inner`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_calculated_subtask_demand_inner`  AS  select `calculated_demand`.`current_task_id` AS `current_task_id`,`calculated_demand`.`contemporary_task_id` AS `contemporary_task_id`,`calculated_demand`.`subtask_id` AS `subtask_id`,`calculated_demand`.`subtask_starting_demand` AS `subtask_starting_demand`,`calculated_demand`.`subtask_success_count` AS `subtask_success_count`,`calculated_demand`.`subtask_success_count_total` AS `subtask_success_count_total`,`calculated_demand`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`calculated_demand`.`subtask_task_id` AS `subtask_task_id`,`calculated_demand`.`subtask_super_id` AS `subtask_super_id`,`calculated_demand`.`subtask_name` AS `subtask_name`,`calculated_demand`.`subtask_category_id` AS `subtask_category_id`,`calculated_demand`.`subtask_base_value` AS `subtask_base_value`,`calculated_demand`.`subtask_max_value` AS `subtask_max_value`,`calculated_demand`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`calculated_demand`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`calculated_demand`.`subtask_bonus_base` AS `subtask_bonus_base`,`calculated_demand`.`subtask_description` AS `subtask_description`,`calculated_demand`.`subtask_url` AS `subtask_url`,`calculated_demand`.`subtask_accumulative` AS `subtask_accumulative`,`calculated_demand`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`calculated_demand`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`calculated_demand`.`subtask_category_name` AS `subtask_category_name`,`calculated_demand`.`subtask_category_class` AS `subtask_category_class`,`calculated_demand`.`subtask_category_description` AS `subtask_category_description`,`calculated_demand`.`contemporary_demand` AS `contemporary_demand`,`calculated_demand`.`contemporary_demand_positive` AS `contemporary_demand_positive`,(case when (isnull(`calculated_demand`.`subtask_max_value`) or isnull(`calculated_demand`.`subtask_starting_demand`)) then 0 else (case when (`calculated_demand`.`contemporary_demand_positive` >= `calculated_demand`.`subtask_demand_cutoff`) then `calculated_demand`.`subtask_demand_cutoff` else `calculated_demand`.`contemporary_demand_positive` end) end) AS `inner_function` from `lc60_demand_view_complete_contemporary_demand_positive` `calculated_demand` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_contemporary_success_count`
--
DROP TABLE IF EXISTS `lc60_contemporary_success_count`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_contemporary_success_count`  AS  select `lc60_successful_subtask_task`.`contemporary_task_id` AS `contemporary_task_id`,`lc60_successful_subtask_task`.`subtask_id` AS `subtask_id`,count(0) AS `success_count` from `lc60_successful_subtask_task` group by `lc60_successful_subtask_task`.`contemporary_task_id`,`lc60_successful_subtask_task`.`subtask_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_current_task`
--
DROP TABLE IF EXISTS `lc60_current_task`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_current_task`  AS  select `task`.`id` AS `task_id`,`task`.`task_title` AS `task_title`,`task`.`task_start` AS `task_start`,`task`.`task_expiration` AS `task_expiration`,`task`.`task_text` AS `task_text`,`task`.`task_url` AS `task_url` from `lc60_tasks` `task` where ((`task`.`id` >= 0) and (now() > `task`.`task_start`)) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_demand_accumulated_success`
--
DROP TABLE IF EXISTS `lc60_demand_accumulated_success`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_demand_accumulated_success`  AS  select `task`.`id` AS `contemporary_task_id`,`subtask`.`id` AS `subtask_id`,sum(coalesce(`demand_base_success`.`subtask_success_count`,0)) AS `subtask_success_count` from ((`lc60_tasks` `task` join `lc60_subtasks` `subtask` on(1)) left join `lc60_demand_base_success` `demand_base_success` on(((`task`.`task_expiration` > `demand_base_success`.`task_expiration`) and (`subtask`.`id` = `demand_base_success`.`subtask_id`)))) group by `task`.`id`,`subtask`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_demand_base_success`
--
DROP TABLE IF EXISTS `lc60_demand_base_success`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_demand_base_success`  AS  select `successful_subtask_task`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task`.`subtask_id` AS `subtask_id`,`task`.`task_expiration` AS `task_expiration`,(case when (`task`.`task_expiration` < now()) then count(0) else 0 end) AS `subtask_success_count` from (`lc60_successful_subtask_task` `successful_subtask_task` join `lc60_tasks` `task` on((`successful_subtask_task`.`contemporary_task_id` = `task`.`id`))) group by `successful_subtask_task`.`contemporary_task_id`,`successful_subtask_task`.`subtask_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_demand_view`
--
DROP TABLE IF EXISTS `lc60_demand_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_demand_view`  AS  select `subtask`.`id` AS `subtask_id`,(case when ((`subtask`.`subtask_starting_demand` <= 0) or isnull(`subtask`.`subtask_max_value`) or isnull(`subtask`.`subtask_starting_demand`)) then 0 else `subtask`.`subtask_starting_demand` end) AS `demand` from `lc60_subtasks` `subtask` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_demand_view_complete_contemporary_demand`
--
DROP TABLE IF EXISTS `lc60_demand_view_complete_contemporary_demand`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_demand_view_complete_contemporary_demand`  AS  select `current_task`.`task_id` AS `current_task_id`,`contemporary_task`.`task_id` AS `contemporary_task_id`,`subtask`.`id` AS `subtask_id`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,coalesce(`demand_view_success`.`subtask_success_count`,0) AS `subtask_success_count`,coalesce(`demand_view_success`.`subtask_success_count_total`,0) AS `subtask_success_count_total`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`task_id` AS `subtask_task_id`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_bonus_base` AS `subtask_bonus_base`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_url` AS `subtask_url`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`participant_id` AS `subtask_owner_participant_id`,`subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description`,(case when isnull(`demand_view_success`.`subtask_task_period_demand`) then ((`subtask`.`subtask_task_period_demand` * (`current_task`.`task_id` - `subtask`.`task_id`)) + `subtask`.`subtask_starting_demand`) else (((`demand_view_success`.`subtask_task_period_demand` * (`demand_view_success`.`contemporary_task_id` - `demand_view_success`.`subtask_task_id`)) - `demand_view_success`.`subtask_success_count`) + `demand_view_success`.`subtask_starting_demand`) end) AS `contemporary_demand` from ((((`lc60_current_task` `current_task` join `lc60_current_task` `contemporary_task`) join `lc60_subtasks` `subtask`) left join `lc60_subtask_categories` `subtask_category` on((`subtask`.`subtask_category_id` = `subtask_category`.`id`))) left join `lc60_demand_view_success` `demand_view_success` on(((`subtask`.`id` = `demand_view_success`.`subtask_id`) and (`contemporary_task`.`task_id` = `demand_view_success`.`contemporary_task_id`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_demand_view_complete_contemporary_demand_positive`
--
DROP TABLE IF EXISTS `lc60_demand_view_complete_contemporary_demand_positive`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_demand_view_complete_contemporary_demand_positive`  AS  select `demand_view_complete`.`current_task_id` AS `current_task_id`,`demand_view_complete`.`contemporary_task_id` AS `contemporary_task_id`,`demand_view_complete`.`subtask_id` AS `subtask_id`,`demand_view_complete`.`subtask_starting_demand` AS `subtask_starting_demand`,`demand_view_complete`.`subtask_success_count` AS `subtask_success_count`,`demand_view_complete`.`subtask_success_count_total` AS `subtask_success_count_total`,`demand_view_complete`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`demand_view_complete`.`subtask_task_id` AS `subtask_task_id`,`demand_view_complete`.`subtask_super_id` AS `subtask_super_id`,`demand_view_complete`.`subtask_name` AS `subtask_name`,`demand_view_complete`.`subtask_category_id` AS `subtask_category_id`,`demand_view_complete`.`subtask_base_value` AS `subtask_base_value`,`demand_view_complete`.`subtask_max_value` AS `subtask_max_value`,`demand_view_complete`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`demand_view_complete`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`demand_view_complete`.`subtask_bonus_base` AS `subtask_bonus_base`,`demand_view_complete`.`subtask_description` AS `subtask_description`,`demand_view_complete`.`subtask_url` AS `subtask_url`,`demand_view_complete`.`subtask_accumulative` AS `subtask_accumulative`,`demand_view_complete`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`demand_view_complete`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`demand_view_complete`.`subtask_category_name` AS `subtask_category_name`,`demand_view_complete`.`subtask_category_class` AS `subtask_category_class`,`demand_view_complete`.`subtask_category_description` AS `subtask_category_description`,`demand_view_complete`.`contemporary_demand` AS `contemporary_demand`,(case when (`demand_view_complete`.`contemporary_demand` <= 0) then 0 else `demand_view_complete`.`contemporary_demand` end) AS `contemporary_demand_positive` from `lc60_demand_view_complete_contemporary_demand` `demand_view_complete` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_demand_view_success`
--
DROP TABLE IF EXISTS `lc60_demand_view_success`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_demand_view_success`  AS  select `successful_subtask_task`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task`.`subtask_id` AS `subtask_id`,(case when ((`successful_subtask_task`.`subtask_starting_demand` = 0) or isnull(`successful_subtask_task`.`subtask_max_value`) or isnull(`successful_subtask_task`.`subtask_starting_demand`)) then 0 else `successful_subtask_task`.`subtask_starting_demand` end) AS `subtask_starting_demand`,max(`demand_accumulated_success`.`subtask_success_count`) AS `subtask_success_count`,count(0) AS `subtask_success_count_total`,`successful_subtask_task`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task`.`subtask_name` AS `subtask_name`,`successful_subtask_task`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task`.`subtask_bonus_base` AS `subtask_bonus_base`,`successful_subtask_task`.`subtask_description` AS `subtask_description`,`successful_subtask_task`.`subtask_url` AS `subtask_url`,`successful_subtask_task`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`successful_subtask_task`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task`.`subtask_category_description` AS `subtask_category_description` from (`lc60_successful_subtask_task` `successful_subtask_task` join `lc60_demand_accumulated_success` `demand_accumulated_success` on(((`successful_subtask_task`.`subtask_id` = `demand_accumulated_success`.`subtask_id`) and (`successful_subtask_task`.`contemporary_task_id` = `demand_accumulated_success`.`contemporary_task_id`)))) group by `successful_subtask_task`.`contemporary_task_id`,`successful_subtask_task`.`subtask_id`,`successful_subtask_task`.`subtask_id`,`successful_subtask_task`.`subtask_starting_demand`,`successful_subtask_task`.`subtask_task_period_demand`,`successful_subtask_task`.`subtask_task_id`,`successful_subtask_task`.`subtask_super_id`,`successful_subtask_task`.`subtask_name`,`successful_subtask_task`.`subtask_category_id`,`successful_subtask_task`.`subtask_base_value`,`successful_subtask_task`.`subtask_max_value`,`successful_subtask_task`.`subtask_inflation_rate`,`successful_subtask_task`.`subtask_demand_cutoff`,`successful_subtask_task`.`subtask_url`,`successful_subtask_task`.`subtask_accumulative`,`successful_subtask_task`.`subtask_owner_participant_id`,`successful_subtask_task`.`subtask_dividend_rate` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_dream_scoring`
--
DROP TABLE IF EXISTS `lc60_dream_scoring`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_dream_scoring`  AS  select `successful_subtask_task_with_calculated_scoring`.`dream_id` AS `dream_id`,sum(`successful_subtask_task_with_calculated_scoring`.`final_value_truncate`) AS `final_value_truncate` from `lc60_successful_subtask_task_with_calculated_scoring` `successful_subtask_task_with_calculated_scoring` group by `successful_subtask_task_with_calculated_scoring`.`dream_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_dream_scoring_stats`
--
DROP TABLE IF EXISTS `lc60_dream_scoring_stats`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_dream_scoring_stats`  AS  select count(0) AS `dream_count`,sum(`scoring`.`final_value_truncate`) AS `dream_total_score` from `lc60_dream_scoring` `scoring` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_dream_type_id`
--
DROP TABLE IF EXISTS `lc60_dream_type_id`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_dream_type_id`  AS  select `subtask_dream`.`dream_id` AS `dream_id`,max(`dream_type`.`id`) AS `dream_type_id` from (`lc60_dream_types` `dream_type` join `lc60_subtask_dreams` `subtask_dream` on((`subtask_dream`.`subtask_id` = `dream_type`.`id`))) group by `subtask_dream`.`dream_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_dream_with_type`
--
DROP TABLE IF EXISTS `lc60_dream_with_type`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_dream_with_type`  AS  select `dream`.`participant_id` AS `participant_id`,`dream`.`id` AS `dream_id`,`dream`.`dream_timestamp` AS `dream_timestamp`,`dream_type_id`.`dream_type_id` AS `dream_type_id`,`dream_type`.`dream_type_name` AS `dream_type_name`,`dream_type`.`dream_type_short_name` AS `dream_type_short_name`,`dream_scoring`.`final_value_truncate` AS `final_value_truncate`,`task`.`id` AS `task_id`,`task`.`task_title` AS `task_title` from (((((`lc60_participants` `participant` join `lc60_dreams` `dream` on((`participant`.`id` = `dream`.`participant_id`))) left join `lc60_dream_type_id` `dream_type_id` on((`dream`.`id` = `dream_type_id`.`dream_id`))) left join `lc60_dream_types` `dream_type` on((`dream_type_id`.`dream_type_id` = `dream_type`.`id`))) join `lc60_dream_scoring` `dream_scoring` on((`dream`.`id` = `dream_scoring`.`dream_id`))) join `lc60_tasks` `task` on((`task`.`id` = (select min(`taskmax`.`id`) AS `id` from `lc60_tasks` `taskmax` where ((`taskmax`.`task_start` < `dream`.`dream_timestamp`) and (`taskmax`.`task_expiration` >= `dream`.`dream_timestamp`)))))) order by `dream`.`dream_timestamp` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_dream_with_type_participant`
--
DROP TABLE IF EXISTS `lc60_dream_with_type_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_dream_with_type_participant`  AS  select `dream_with_type`.`participant_id` AS `participant_id`,`participant`.`participant_name` AS `participant_name`,`dream_with_type`.`dream_id` AS `dream_id`,`dream_with_type`.`dream_timestamp` AS `dream_timestamp`,`dream_with_type`.`dream_type_id` AS `dream_type_id`,`dream_with_type`.`dream_type_name` AS `dream_type_name`,`dream_with_type`.`dream_type_short_name` AS `dream_type_short_name`,`dream_with_type`.`final_value_truncate` AS `final_value_truncate`,`dream_with_type`.`task_id` AS `task_id`,`dream_with_type`.`task_title` AS `task_title` from (`lc60_dream_with_type` `dream_with_type` join `lc60_participants` `participant` on((`dream_with_type`.`participant_id` = `participant`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_first_dream_subtask`
--
DROP TABLE IF EXISTS `lc60_first_dream_subtask`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_first_dream_subtask`  AS  select `dream`.`participant_id` AS `participant_id`,min(`dream`.`dream_timestamp`) AS `dream_timestamp`,`subtask_dreams`.`subtask_id` AS `subtask_id` from (`lc60_dreams` `dream` join `lc60_subtask_dreams` `subtask_dreams` on((`dream`.`id` = `subtask_dreams`.`dream_id`))) group by `dream`.`participant_id`,`subtask_dreams`.`subtask_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_first_share_holder_participant`
--
DROP TABLE IF EXISTS `lc60_first_share_holder_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_first_share_holder_participant`  AS  select max(`subtask_share_holder_count`.`subtask_share_holder_count`) AS `subtask_share_holder_count`,`subtask_share_holder_count`.`subtask_id` AS `subtask_id`,min(`participant`.`id`) AS `participant_id`,min(`participant`.`participant_name`) AS `participant_name` from ((`lc60_subtask_share_holder_count` `subtask_share_holder_count` join `lc60_subtask_share_holder` `subtask_share_holder` on((`subtask_share_holder_count`.`subtask_id` = `subtask_share_holder`.`subtask_id`))) join `lc60_participants` `participant` on((`subtask_share_holder`.`participant_id` = `participant`.`id`))) group by `subtask_share_holder_count`.`subtask_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_open_list`
--
DROP TABLE IF EXISTS `lc60_open_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_open_list`  AS  select concat('[url=http://lc60.keepdream.in/subtasks/view/',`lc60_subtask_values`.`subtask_id`,']&#',convert(coalesce(`lc60_subtask_values`.`subtask_symbol`,'') using utf8),'; ',`lc60_subtask_values`.`subtask_name`,': ',coalesce(`lc60_subtask_values`.`subtask_description`,''),' ',coalesce(`lc60_subtask_values`.`subtask_category_name`,''),'. Current Value: ',`lc60_subtask_values`.`final_value_cur`,'[/url]') AS `Name_exp_1` from `lc60_subtask_values` where ((`lc60_subtask_values`.`contemporary_task_id` = `lc60_subtask_values`.`current_task_id`) and ((`lc60_subtask_values`.`subtask_type_ownable` <> 1) or (`lc60_subtask_values`.`subtask_share_holder_count` <> 0) or (`lc60_subtask_values`.`subtask_type_unlockable` <> 1))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_recent_successes`
--
DROP TABLE IF EXISTS `lc60_recent_successes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_recent_successes`  AS  select concat('d',`successful_subtask_task_with_calculated_scoring`.`dream_id`,'s',`successful_subtask_task_with_calculated_scoring`.`subtask_id`) AS `id`,`participant`.`participant_name` AS `participant_name`,`dream_type`.`dream_type_short_name` AS `dream_type_short_name`,`successful_subtask_task_with_calculated_scoring`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring`.`dream_id` AS `dream_id`,`successful_subtask_task_with_calculated_scoring`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task_with_calculated_scoring`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task_with_calculated_scoring`.`dream_url` AS `dream_url`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task_with_calculated_scoring`.`subtask_id` AS `subtask_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_name` AS `subtask_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task_with_calculated_scoring`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_description` AS `subtask_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_url` AS `subtask_url`,`successful_subtask_task_with_calculated_scoring`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task_with_calculated_scoring`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_success_count` AS `subtask_success_count`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand` AS `contemporary_demand`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`successful_subtask_task_with_calculated_scoring`.`inner_function` AS `inner_function`,`successful_subtask_task_with_calculated_scoring`.`external_function` AS `external_function`,truncate(`successful_subtask_task_with_calculated_scoring`.`final_value`,2) AS `final_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_dividend_rate` AS `subtask_dividend_rate` from ((`lc60_participants` `participant` join `lc60_successful_subtask_task_with_calculated_scoring` `successful_subtask_task_with_calculated_scoring` on((`participant`.`id` = `successful_subtask_task_with_calculated_scoring`.`participant_id`))) left join `lc60_dream_types` `dream_type` on((`successful_subtask_task_with_calculated_scoring`.`dream_type_id` = `dream_type`.`id`))) order by `successful_subtask_task_with_calculated_scoring`.`dream_timestamp` desc ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_score_view_complete`
--
DROP TABLE IF EXISTS `lc60_score_view_complete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_score_view_complete`  AS  select `successful_subtask_task_with_calculated_total_complete`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_total_complete`.`subtask_success_count_sum_total` AS `subtask_success_count_sum_total`,`successful_subtask_task_with_calculated_total_complete`.`subtask_success_count_participant_total` AS `subtask_success_count_participant_total`,`successful_subtask_task_with_calculated_total_complete`.`final_value_avg` AS `final_value_avg`,`successful_subtask_task_with_calculated_total_complete`.`final_value_total` AS `final_value_total`,coalesce(`successful_subtask_dividend_calculated_total`.`subtask_success_count_sum_total`,0) AS `dividend_count_sum_total`,coalesce(`successful_subtask_dividend_calculated_total`.`subtask_success_count_participant_total`,0) AS `dividend_count_participant_total`,coalesce(`successful_subtask_dividend_calculated_total`.`final_dividend_value_avg`,0) AS `final_dividend_value_avg`,coalesce(`successful_subtask_dividend_calculated_total`.`final_dividend_value_total`,0) AS `final_dividend_value_total`,(`successful_subtask_task_with_calculated_total_complete`.`final_value_total` + coalesce(`successful_subtask_dividend_calculated_total`.`final_dividend_value_total`,0)) AS `final_value_total_with_dividends` from (`lc60_successful_subtask_task_with_calculated_total_complete` `successful_subtask_task_with_calculated_total_complete` left join `lc60_successful_subtask_dividend_calculated_total` `successful_subtask_dividend_calculated_total` on((`successful_subtask_task_with_calculated_total_complete`.`participant_id` = `successful_subtask_dividend_calculated_total`.`participant_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_score_view_complete_participant`
--
DROP TABLE IF EXISTS `lc60_score_view_complete_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_score_view_complete_participant`  AS  select `participant`.`id` AS `participant_id`,`participant`.`participant_name` AS `participant_name`,`score_view_complete`.`subtask_success_count_sum_total` AS `subtask_success_count_sum_total`,`score_view_complete`.`subtask_success_count_participant_total` AS `subtask_success_count_participant_total`,`score_view_complete`.`final_value_avg` AS `final_value_avg`,`score_view_complete`.`final_value_total` AS `final_value_total`,`score_view_complete`.`dividend_count_sum_total` AS `dividend_count_sum_total`,`score_view_complete`.`dividend_count_participant_total` AS `dividend_count_participant_total`,`score_view_complete`.`final_dividend_value_avg` AS `final_dividend_value_avg`,`score_view_complete`.`final_dividend_value_total` AS `final_dividend_value_total`,`score_view_complete`.`final_value_total_with_dividends` AS `final_value_total_with_dividends` from (`lc60_participants` `participant` join `lc60_score_view_complete` `score_view_complete` on((`participant`.`id` = `score_view_complete`.`participant_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_scores`
--
DROP TABLE IF EXISTS `lc60_scores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_scores`  AS  select count(0) AS `position`,`a`.`participant_id` AS `participant_id`,`a`.`participant_name` AS `participant`,`a`.`subtask_success_count_participant_total` AS `successful_subtasks`,`a`.`final_value_avg` AS `average_subtask_value`,truncate(`a`.`final_value_total`,2) AS `total_subtask_value`,`a`.`dividend_count_participant_total` AS `dividend_successes`,`a`.`final_dividend_value_avg` AS `average_dividend_value`,`a`.`final_dividend_value_total` AS `total_dividends`,truncate(`a`.`final_value_total_with_dividends`,2) AS `total_score` from (`lc60_score_view_complete_participant` `a` join `lc60_score_view_complete_participant` `b`) where ((`a`.`final_value_total_with_dividends` < `b`.`final_value_total_with_dividends`) or (`a`.`participant_id` = `b`.`participant_id`)) group by `a`.`participant_id`,`a`.`subtask_success_count_participant_total`,`a`.`final_value_avg`,`a`.`final_value_total`,`a`.`dividend_count_participant_total`,`a`.`final_dividend_value_avg`,`a`.`final_dividend_value_total`,`a`.`final_value_total_with_dividends` order by -(`a`.`final_value_total_with_dividends`),`a`.`participant_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_share_holders_participant`
--
DROP TABLE IF EXISTS `lc60_share_holders_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_share_holders_participant`  AS  select `subtask_share_holder`.`subtask_id` AS `subtask_id`,`participant`.`id` AS `participant_id`,`participant`.`participant_name` AS `participant_name` from (`lc60_subtask_share_holder` `subtask_share_holder` join `lc60_participants` `participant` on((`subtask_share_holder`.`participant_id` = `participant`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_signups`
--
DROP TABLE IF EXISTS `lc60_signups`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_signups`  AS  select 'http://ld4all.com/forum/viewtopic.php?t=50770' AS `signup_url`,'baddudes.gif' AS `signup_image_url`,now() AS `now_date`,unix_timestamp(now()) AS `now_date_unix`,'2017-07-08 21:00:00' AS `open_date`,unix_timestamp('2017-07-08 21:00:00') AS `open_date_unix`,`task`.`task_start` AS `begin_date`,unix_timestamp(`task`.`task_start`) AS `begin_date_unix`,count(0) AS `participant_count`,`scoring_stats`.`dream_count` AS `dream_count`,truncate(`scoring_stats`.`dream_total_score`,0) AS `dream_total_score` from ((`lc60_participants` `participant` join `lc60_tasks` `task`) join `lc60_dream_scoring_stats` `scoring_stats`) where ((`task`.`id` = 1) and (`participant`.`id` between 0 and 100)) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_start`
--
DROP TABLE IF EXISTS `lc60_start`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_start`  AS  select now() AS `now_date`,unix_timestamp(now()) AS `now_date_unix`,'2017-06-28 18:00:00' AS `end_date`,unix_timestamp('2017-06-28 18:00:00') AS `end_date_unix` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_subtask_dream_super`
--
DROP TABLE IF EXISTS `lc60_subtask_dream_super`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_subtask_dream_super`  AS  select `child`.`id` AS `subtask_dream_attempt`,`subtask`.`subtask_super_id` AS `subtask_id`,`child`.`dream_id` AS `dream_id`,1 AS `implied_from_super_task` from ((`lc60_subtask_dreams` `child` join `lc60_subtasks` `subtask` on((`child`.`subtask_id` = `subtask`.`id`))) left join `lc60_subtask_dreams` `parent` on((`subtask`.`subtask_super_id` = `parent`.`subtask_id`))) where (`subtask`.`subtask_super_id` is not null) union select `subtask_dream`.`id` AS `subtask_dream_attempt`,`subtask_dream`.`subtask_id` AS `subtask_id`,`subtask_dream`.`dream_id` AS `dream_id`,0 AS `implied_from_super_task` from `lc60_subtask_dreams` `subtask_dream` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_subtask_dream_super_name`
--
DROP TABLE IF EXISTS `lc60_subtask_dream_super_name`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_subtask_dream_super_name`  AS  select `subtask_dream_super`.`subtask_dream_attempt` AS `subtask_dream_attempt`,`subtask_dream_super`.`subtask_id` AS `subtask_id`,`subtask_dream_super`.`dream_id` AS `dream_id`,`subtask_dream_super`.`implied_from_super_task` AS `implied_from_super_task`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`parent`.`subtask_name` AS `super_subtask_name` from ((`lc60_subtask_dream_super` `subtask_dream_super` join `lc60_subtasks` `subtask` on((`subtask_dream_super`.`subtask_id` = `subtask`.`id`))) left join `lc60_subtasks` `parent` on((`subtask`.`subtask_super_id` = `parent`.`id`))) order by `subtask_dream_super`.`subtask_dream_attempt` desc ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_subtask_pre_values`
--
DROP TABLE IF EXISTS `lc60_subtask_pre_values`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_subtask_pre_values`  AS  select `pre`.`subtask_id` AS `subtask_id`,`cur`.`current_task_id` AS `current_task_id`,`cur`.`contemporary_task_id` AS `contemporary_task_id`,`pre`.`contemporary_task_id` AS `contemporary_task_id_pre`,`cur`.`subtask_success_count` AS `subtask_success_count`,`cur`.`subtask_success_count_total` AS `subtask_success_count_total`,coalesce(`mv_pre`.`manual_demand`,`pre`.`contemporary_demand`) AS `contemporary_demand_pre`,coalesce((case when (`mv_pre`.`manual_demand` < 0) then 0 else `mv_pre`.`manual_demand` end),`pre`.`contemporary_demand_positive`) AS `contemporary_demand_positive_pre`,coalesce(`mv`.`manual_demand`,`cur`.`contemporary_demand`) AS `contemporary_demand_cur`,coalesce((case when (`mv`.`manual_demand` < 0) then 0 else `mv`.`manual_demand` end),`cur`.`contemporary_demand_positive`) AS `contemporary_demand_positive_cur`,coalesce(`mv_pre`.`manual_value`,`pre`.`final_value`) AS `final_value_pre`,coalesce(`mv`.`manual_value`,`cur`.`final_value`) AS `final_value_cur` from (((`lc60_calculated_subtask_demand_final_value` `cur` join `lc60_calculated_subtask_demand_final_value` `pre` on(((`cur`.`subtask_id` = `pre`.`subtask_id`) and (`cur`.`contemporary_task_id` = (`pre`.`contemporary_task_id` + 1))))) left join `lc60_manual_value` `mv` on(((`cur`.`subtask_id` = `mv`.`subtask_id`) and (`cur`.`current_task_id` = `mv`.`contemporary_task_id`)))) left join `lc60_manual_value` `mv_pre` on(((`pre`.`subtask_id` = `mv_pre`.`subtask_id`) and (`pre`.`current_task_id` = `mv_pre`.`contemporary_task_id`)))) where ((`pre`.`current_task_id` = `pre`.`contemporary_task_id`) and (((`cur`.`current_task_id` = (`cur`.`contemporary_task_id` + 0)) and (select (count(0) = 0) from `lc60_successful_subtask_task` `st` where (`st`.`subtask_id` = `cur`.`subtask_id`))) or ((`cur`.`current_task_id` = (`cur`.`contemporary_task_id` + 1)) and (select (count(0) <> 0) from `lc60_successful_subtask_task` `st` where (`st`.`subtask_id` = `cur`.`subtask_id`))))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_subtask_share_holder`
--
DROP TABLE IF EXISTS `lc60_subtask_share_holder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_subtask_share_holder`  AS  select concat('s',`subtask_share`.`subtask_id`,'p',`subtask_share`.`participant_id`) AS `id`,`subtask_share`.`subtask_id` AS `subtask_id`,`subtask_share`.`participant_id` AS `participant_id` from `lc60_subtask_shares` `subtask_share` union select concat('s',`subtask`.`id`,'p',`subtask`.`participant_id`) AS `id`,`subtask`.`id` AS `subtask_id`,`subtask`.`participant_id` AS `participant_id` from `lc60_subtasks` `subtask` where (`subtask`.`participant_id` is not null) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_subtask_share_holder_complete`
--
DROP TABLE IF EXISTS `lc60_subtask_share_holder_complete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_subtask_share_holder_complete`  AS  select `subtask`.`id` AS `id`,`subtask`.`id` AS `subtask_id`,`subtask_share_holder`.`participant_id` AS `participant_id`,`subtask_subtask_category`.`task_id` AS `task_id`,`subtask_subtask_category`.`subtask_super_id` AS `subtask_super_id`,`subtask_subtask_category`.`subtask_name` AS `subtask_name`,`subtask_subtask_category`.`subtask_category_id` AS `subtask_category_id`,`subtask_subtask_category`.`subtask_base_value` AS `subtask_base_value`,`subtask_subtask_category`.`subtask_max_value` AS `subtask_max_value`,`subtask_subtask_category`.`subtask_starting_demand` AS `subtask_starting_demand`,`subtask_subtask_category`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask_subtask_category`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask_subtask_category`.`subtask_description` AS `subtask_description`,`subtask_subtask_category`.`subtask_url` AS `subtask_url`,`subtask_subtask_category`.`subtask_accumulative` AS `subtask_accumulative`,`subtask_subtask_category`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask_subtask_category`.`participant_id` AS `participant_owner`,`subtask_subtask_category`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_subtask_category`.`subtask_category_description` AS `subtask_category_description`,`subtask_subtask_category`.`subtask_image` AS `subtask_image`,`subtask_subtask_category`.`subtask_symbol` AS `subtask_symbol`,`subtask_subtask_category`.`subtask_instruction` AS `subtask_instruction`,`subtask_type`.`id` AS `subtask_type_id`,`subtask_type`.`subtask_type_name` AS `subtask_type_name`,coalesce(`first_share_holder_participant`.`subtask_share_holder_count`,0) AS `subtask_share_holder_count`,`first_share_holder_participant`.`participant_name` AS `participant_owner_name` from ((((`lc60_subtasks` `subtask` left join `lc60_subtask_share_holder` `subtask_share_holder` on((`subtask_share_holder`.`subtask_id` = `subtask`.`id`))) left join `lc60_subtask_subtask_category` `subtask_subtask_category` on((`subtask`.`id` = `subtask_subtask_category`.`subtask_id`))) left join `lc60_first_share_holder_participant` `first_share_holder_participant` on((`subtask`.`id` = `first_share_holder_participant`.`subtask_id`))) left join `lc60_subtask_types` `subtask_type` on((`subtask`.`subtask_type_id` = `subtask_type`.`id`))) where (`subtask`.`subtask_visible` <> 0) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_subtask_share_holder_count`
--
DROP TABLE IF EXISTS `lc60_subtask_share_holder_count`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_subtask_share_holder_count`  AS  select `subtask_share_holder`.`subtask_id` AS `subtask_id`,count(0) AS `subtask_share_holder_count` from `lc60_subtask_share_holder` `subtask_share_holder` group by `subtask_share_holder`.`subtask_id` union select `subtask`.`id` AS `subtask_id`,0 AS `subtask_share_holder_count` from `lc60_subtasks` `subtask` where (not(`subtask`.`id` in (select distinct `subtask_share_holder`.`subtask_id` from `lc60_subtask_share_holder` `subtask_share_holder`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_subtask_subtask_category`
--
DROP TABLE IF EXISTS `lc60_subtask_subtask_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_subtask_subtask_category`  AS  select `subtask`.`id` AS `subtask_id`,`subtask`.`task_id` AS `task_id`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_url` AS `subtask_url`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`participant_id` AS `participant_id`,`subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask`.`subtask_image` AS `subtask_image`,`subtask`.`subtask_symbol` AS `subtask_symbol`,`subtask`.`subtask_instruction` AS `subtask_instruction`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description` from (`lc60_subtasks` `subtask` left join `lc60_subtask_categories` `subtask_category` on((`subtask`.`subtask_category_id` = `subtask_category`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_subtask_values`
--
DROP TABLE IF EXISTS `lc60_subtask_values`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_subtask_values`  AS  select `subtask`.`id` AS `id`,`pre`.`current_task_id` AS `current_task_id`,`pre`.`contemporary_task_id` AS `contemporary_task_id`,`subtask`.`id` AS `subtask_id`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,coalesce(`pre`.`subtask_success_count`,0) AS `subtask_success_count`,coalesce(`pre`.`subtask_success_count_total`,0) AS `subtask_success_count_total`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`task_id` AS `subtask_task_id`,`task`.`task_title` AS `task_title`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_bonus_base` AS `subtask_bonus_base`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`participant_id` AS `subtask_owner_participant_id`,`subtask`.`subtask_symbol` AS `subtask_symbol`,`subtask`.`subtask_image` AS `subtask_image`,`subtask`.`subtask_type_id` AS `subtask_type_id`,`subtask_type`.`subtask_type_name` AS `subtask_type_name`,`subtask_type`.`subtask_type_ownable` AS `subtask_type_ownable`,`subtask_type`.`subtask_type_shareable` AS `subtask_type_shareable`,`cat`.`subtask_category_name` AS `subtask_category_name`,`cat`.`subtask_category_class` AS `subtask_category_class`,`cat`.`subtask_category_color` AS `subtask_category_color`,coalesce(`pre`.`contemporary_demand_cur`,`subtask`.`subtask_starting_demand`) AS `contemporary_demand_cur`,coalesce(`pre`.`contemporary_demand_positive_cur`,`subtask`.`subtask_starting_demand`) AS `contemporary_demand_positive_cur`,coalesce(`pre`.`contemporary_demand_pre`,`subtask`.`subtask_starting_demand`) AS `contemporary_demand_pre`,coalesce(`pre`.`contemporary_demand_positive_pre`,`subtask`.`subtask_starting_demand`) AS `contemporary_demand_positive_pre`,`pre`.`final_value_pre` AS `final_value_pre`,`pre`.`final_value_cur` AS `final_value_cur`,`share_holder_count`.`subtask_share_holder_count` AS `subtask_share_holder_count`,`subtask_type`.`subtask_type_unlockable` AS `subtask_type_unlockable` from ((((((`lc60_unexpired_task` `unexpired_task` join `lc60_subtasks` `subtask`) join `lc60_tasks` `task` on((`subtask`.`task_id` = `task`.`id`))) left join `lc60_subtask_categories` `cat` on((`subtask`.`subtask_category_id` = `cat`.`id`))) left join `lc60_subtask_types` `subtask_type` on((`subtask`.`subtask_type_id` = `subtask_type`.`id`))) left join `lc60_subtask_pre_values` `pre` on(((`subtask`.`id` = `pre`.`subtask_id`) and (`pre`.`current_task_id` = `unexpired_task`.`task_id`)))) left join `lc60_subtask_share_holder_count` `share_holder_count` on((`subtask`.`id` = `share_holder_count`.`subtask_id`))) where ((`task`.`task_start` <= now()) and (`subtask`.`subtask_visible` <> 0)) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask`
--
DROP TABLE IF EXISTS `lc60_successful_subtask`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask`  AS  select `dream`.`participant_id` AS `participant_id`,`subtask_dream_super`.`dream_id` AS `dream_id`,`dream`.`dream_timestamp` AS `dream_timestamp`,`dream_type_id`.`dream_type_id` AS `dream_type_id`,`dream`.`dream_url` AS `dream_url`,`subtask`.`id` AS `subtask_id`,`subtask`.`task_id` AS `task_id`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_bonus_base` AS `subtask_bonus_base`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_url` AS `subtask_url`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`participant_id` AS `subtask_owner_participant_id`,`subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description`,`subtask`.`subtask_type_id` AS `subtask_type_id` from ((((`lc60_subtask_dream_super` `subtask_dream_super` join `lc60_subtasks` `subtask` on((`subtask_dream_super`.`subtask_id` = `subtask`.`id`))) left join `lc60_subtask_categories` `subtask_category` on((`subtask`.`subtask_category_id` = `subtask_category`.`id`))) join `lc60_dreams` `dream` on((`subtask_dream_super`.`dream_id` = `dream`.`id`))) left join `lc60_dream_type_id` `dream_type_id` on((`dream`.`id` = `dream_type_id`.`dream_id`))) where (`subtask`.`subtask_accumulative` <> 0) union select `dream`.`participant_id` AS `participant_id`,min(`dream`.`id`) AS `dream_id`,min(`dream`.`dream_timestamp`) AS `dream_timestamp`,`dream_type_id`.`dream_type_id` AS `dream_type_id`,`dream`.`dream_url` AS `dream_url`,`subtask`.`id` AS `subtask_id`,`subtask`.`task_id` AS `task_id`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_bonus_base` AS `subtask_bonus_base`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_url` AS `subtask_url`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`participant_id` AS `subtask_owner_participant_id`,`subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description`,`subtask`.`subtask_type_id` AS `subtask_type_id` from ((((`lc60_subtasks` `subtask` left join `lc60_subtask_categories` `subtask_category` on((`subtask`.`subtask_category_id` = `subtask_category`.`id`))) join `lc60_first_dream_subtask` `first_dream` on((`subtask`.`id` = `first_dream`.`subtask_id`))) join `lc60_dreams` `dream` on(((`dream`.`dream_timestamp` = `first_dream`.`dream_timestamp`) and (`dream`.`participant_id` = `first_dream`.`participant_id`)))) left join `lc60_dream_type_id` `dream_type_id` on((`dream`.`id` = `dream_type_id`.`dream_id`))) where (`subtask`.`subtask_accumulative` = 0) group by `dream`.`participant_id`,`subtask`.`id`,`subtask`.`task_id`,`subtask`.`subtask_super_id`,`subtask`.`subtask_name`,`subtask`.`subtask_category_id`,`subtask`.`subtask_base_value`,`subtask`.`subtask_max_value`,`subtask`.`subtask_starting_demand`,`subtask`.`subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff`,`subtask`.`subtask_task_period_demand`,`subtask`.`subtask_description`,`subtask`.`subtask_url`,`subtask`.`subtask_accumulative`,`subtask`.`subtask_type_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_category`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_category`  AS  select `successful_subtask`.`participant_id` AS `participant_id`,`successful_subtask`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask`.`subtask_category_description` AS `subtask_category_description`,count(0) AS `subtask_category_count` from `lc60_successful_subtask` `successful_subtask` group by `successful_subtask`.`participant_id`,`successful_subtask`.`subtask_category_id`,`successful_subtask`.`subtask_category_name`,`successful_subtask`.`subtask_category_class`,`successful_subtask`.`subtask_category_description` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_category_complete_final`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_category_complete_final`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_category_complete_final`  AS  select `successful_subtask_category_complete_inner`.`participant_id` AS `participant_id`,`successful_subtask_category_complete_inner`.`subtask_category_id` AS `subtask_category_id`,sum(`successful_subtask_category_complete_inner`.`subtask_category_count`) AS `subtask_category_count_sum` from `lc60_successful_subtask_category_complete_inner` `successful_subtask_category_complete_inner` group by `successful_subtask_category_complete_inner`.`participant_id`,`successful_subtask_category_complete_inner`.`subtask_category_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_category_complete_final_minimum`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_category_complete_final_minimum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_category_complete_final_minimum`  AS  select `successful_subtask_category_complete_final`.`participant_id` AS `participant_id`,min(`successful_subtask_category_complete_final`.`subtask_category_count_sum`) AS `subtask_category_count_sum_min` from `lc60_successful_subtask_category_complete_final` `successful_subtask_category_complete_final` group by `successful_subtask_category_complete_final`.`participant_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_category_complete_inner`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_category_complete_inner`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_category_complete_inner`  AS  select `successful_subtask_category`.`participant_id` AS `participant_id`,`subtask_category`.`id` AS `subtask_category_id`,`successful_subtask_category`.`subtask_category_count` AS `subtask_category_count` from (`lc60_subtask_categories` `subtask_category` join `lc60_successful_subtask_category` `successful_subtask_category` on((`subtask_category`.`id` = `successful_subtask_category`.`subtask_category_id`))) union select `participant`.`id` AS `participant_id`,`subtask_category`.`id` AS `subtask_category_id`,0 AS `subtask_category_count` from (`lc60_participants` `participant` join `lc60_subtask_categories` `subtask_category`) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_category_full`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_category_full`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_category_full`  AS  select `participant`.`id` AS `participant_id`,`subtask_category`.`id` AS `subtask_category_id`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description`,coalesce(`successful_subtask_category`.`subtask_category_count`,0) AS `subtask_category_count` from ((`lc60_participants` `participant` join `lc60_subtask_categories` `subtask_category`) left join `lc60_successful_subtask_category` `successful_subtask_category` on(((`subtask_category`.`id` = `successful_subtask_category`.`subtask_category_id`) and (`successful_subtask_category`.`participant_id` = `participant`.`id`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_dividend_calculated_total`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_dividend_calculated_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_dividend_calculated_total`  AS  select `successful_subtask_dividend_scores`.`participant_id` AS `participant_id`,sum(`successful_subtask_dividend_scores`.`subtask_success_count`) AS `subtask_success_count_sum_total`,count(0) AS `subtask_success_count_participant_total`,avg(`successful_subtask_dividend_scores`.`final_dividend_value`) AS `final_dividend_value_avg`,sum(`successful_subtask_dividend_scores`.`final_dividend_value`) AS `final_dividend_value_total` from `lc60_successful_subtask_dividend_scores` `successful_subtask_dividend_scores` group by `successful_subtask_dividend_scores`.`participant_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_dividend_scores`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_dividend_scores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_dividend_scores`  AS  select `subtask_share_holder`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring`.`participant_id` AS `dreamer_id`,`successful_subtask_task_with_calculated_scoring`.`dream_id` AS `dream_id`,`successful_subtask_task_with_calculated_scoring`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task_with_calculated_scoring`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task_with_calculated_scoring`.`dream_url` AS `dream_url`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task_with_calculated_scoring`.`subtask_id` AS `subtask_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_name` AS `subtask_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task_with_calculated_scoring`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_description` AS `subtask_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_url` AS `subtask_url`,`successful_subtask_task_with_calculated_scoring`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task_with_calculated_scoring`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_success_count` AS `subtask_success_count`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand` AS `contemporary_demand`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`successful_subtask_task_with_calculated_scoring`.`inner_function` AS `inner_function`,`successful_subtask_task_with_calculated_scoring`.`external_function` AS `external_function`,`successful_subtask_task_with_calculated_scoring`.`final_value` AS `final_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_share_holder_count`.`subtask_share_holder_count` AS `subtask_share_holder_count`,(((`successful_subtask_task_with_calculated_scoring`.`subtask_base_value` * `successful_subtask_task_with_calculated_scoring`.`subtask_dividend_rate`) / 100) / `subtask_share_holder_count`.`subtask_share_holder_count`) AS `final_dividend_value` from ((`lc60_subtask_share_holder` `subtask_share_holder` join `lc60_successful_subtask_task_with_calculated_scoring` `successful_subtask_task_with_calculated_scoring` on((`subtask_share_holder`.`subtask_id` = `successful_subtask_task_with_calculated_scoring`.`subtask_id`))) join `lc60_subtask_share_holder_count` `subtask_share_holder_count` on((`subtask_share_holder`.`subtask_id` = `subtask_share_holder_count`.`subtask_id`))) where (`subtask_share_holder_count`.`subtask_share_holder_count` > 0) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_task`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_task`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_task`  AS  select `successful_subtask`.`participant_id` AS `participant_id`,`successful_subtask`.`dream_id` AS `dream_id`,`successful_subtask`.`dream_type_id` AS `dream_type_id`,`successful_subtask`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask`.`dream_url` AS `dream_url`,`task`.`id` AS `contemporary_task_id`,`task`.`task_start` AS `contemporary_task_start`,`task`.`task_expiration` AS `contemporary_task_expiration`,`successful_subtask`.`subtask_id` AS `subtask_id`,`successful_subtask`.`task_id` AS `subtask_task_id`,`successful_subtask`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask`.`subtask_name` AS `subtask_name`,`successful_subtask`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask`.`subtask_bonus_base` AS `subtask_bonus_base`,`successful_subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask`.`subtask_description` AS `subtask_description`,`successful_subtask`.`subtask_url` AS `subtask_url`,`successful_subtask`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`successful_subtask`.`subtask_type_id` AS `subtask_type_id` from (`lc60_successful_subtask` `successful_subtask` join `lc60_tasks` `task` on(((`successful_subtask`.`dream_timestamp` > `task`.`task_start`) and (`successful_subtask`.`dream_timestamp` <= `task`.`task_expiration`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_task_with_calculated_scoring`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_task_with_calculated_scoring`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_task_with_calculated_scoring`  AS  select `successful_subtask_task`.`participant_id` AS `participant_id`,`successful_subtask_task`.`dream_id` AS `dream_id`,`successful_subtask_task`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task`.`dream_url` AS `dream_url`,`successful_subtask_task`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task`.`subtask_id` AS `subtask_id`,`successful_subtask_task`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task`.`subtask_name` AS `subtask_name`,`successful_subtask_task`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task`.`subtask_bonus_base` AS `subtask_bonus_base`,`successful_subtask_task`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task`.`subtask_description` AS `subtask_description`,`successful_subtask_task`.`subtask_url` AS `subtask_url`,`successful_subtask_task`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask_task`.`subtask_type_id` AS `subtask_type_id`,`calculated_subtask_demand_final_value`.`subtask_success_count` AS `subtask_success_count`,`calculated_subtask_demand_final_value`.`subtask_success_count_total` AS `subtask_success_count_total`,`calculated_subtask_demand_final_value`.`contemporary_demand` AS `contemporary_demand`,`calculated_subtask_demand_final_value`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`calculated_subtask_demand_final_value`.`inner_function` AS `inner_function`,`calculated_subtask_demand_final_value`.`external_function` AS `external_function`,`calculated_subtask_demand_final_value`.`final_value` AS `final_value`,truncate(`calculated_subtask_demand_final_value`.`final_value`,2) AS `final_value_truncate`,`successful_subtask_task`.`subtask_dividend_rate` AS `subtask_dividend_rate` from (`lc60_successful_subtask_task` `successful_subtask_task` join `lc60_calculated_subtask_demand_final_value` `calculated_subtask_demand_final_value` on(((`successful_subtask_task`.`subtask_id` = `calculated_subtask_demand_final_value`.`subtask_id`) and (`successful_subtask_task`.`contemporary_task_id` = `calculated_subtask_demand_final_value`.`contemporary_task_id`)))) where (`successful_subtask_task`.`contemporary_task_id` = `calculated_subtask_demand_final_value`.`current_task_id`) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_task_with_calculated_scoring_owner`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_task_with_calculated_scoring_owner`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_task_with_calculated_scoring_owner`  AS  select `successful_subtask_task_with_calculated_scoring_participant`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring_participant`.`dream_id` AS `dream_id`,`successful_subtask_task_with_calculated_scoring_participant`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task_with_calculated_scoring_participant`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task_with_calculated_scoring_participant`.`dream_url` AS `dream_url`,`successful_subtask_task_with_calculated_scoring_participant`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task_with_calculated_scoring_participant`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task_with_calculated_scoring_participant`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_id` AS `subtask_id`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_name` AS `subtask_name`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_bonus_base` AS `subtask_bonus_base`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_description` AS `subtask_description`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_url` AS `subtask_url`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_success_count` AS `subtask_success_count`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_success_count_total` AS `subtask_success_count_total`,`successful_subtask_task_with_calculated_scoring_participant`.`contemporary_demand` AS `contemporary_demand`,`successful_subtask_task_with_calculated_scoring_participant`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`successful_subtask_task_with_calculated_scoring_participant`.`inner_function` AS `inner_function`,`successful_subtask_task_with_calculated_scoring_participant`.`external_function` AS `external_function`,`successful_subtask_task_with_calculated_scoring_participant`.`final_value` AS `final_value`,`successful_subtask_task_with_calculated_scoring_participant`.`final_value_truncate` AS `final_value_truncate`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_type_id` AS `subtask_type_id`,`successful_subtask_task_with_calculated_scoring_participant`.`participant_name` AS `participant_name`,`successful_subtask_task_with_calculated_scoring_participant`.`task_title` AS `task_title`,`successful_subtask_task_with_calculated_scoring_participant`.`subtask_share_holder_count` AS `subtask_share_holder_count`,`participant_owner`.`id` AS `participant_holder_id`,`participant_owner`.`participant_name` AS `participant_holder_name`,truncate(((`successful_subtask_task_with_calculated_scoring_participant`.`subtask_base_value` * `successful_subtask_task_with_calculated_scoring_participant`.`subtask_dividend_rate`) / (100 * `successful_subtask_task_with_calculated_scoring_participant`.`subtask_share_holder_count`)),2) AS `final_owner_payout` from ((`lc60_subtask_share_holder` `subtask_share_holder` join `lc60_successful_subtask_task_with_calculated_scoring_participant` `successful_subtask_task_with_calculated_scoring_participant` on((`successful_subtask_task_with_calculated_scoring_participant`.`subtask_id` = `subtask_share_holder`.`subtask_id`))) join `lc60_participants` `participant_owner` on((`subtask_share_holder`.`participant_id` = `participant_owner`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_task_with_calculated_scoring_participant`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_task_with_calculated_scoring_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_task_with_calculated_scoring_participant`  AS  select `successful_subtask_task_with_calculated_scoring`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring`.`dream_id` AS `dream_id`,`successful_subtask_task_with_calculated_scoring`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task_with_calculated_scoring`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task_with_calculated_scoring`.`dream_url` AS `dream_url`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task_with_calculated_scoring`.`subtask_id` AS `subtask_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_name` AS `subtask_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task_with_calculated_scoring`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task_with_calculated_scoring`.`subtask_bonus_base` AS `subtask_bonus_base`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_description` AS `subtask_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_url` AS `subtask_url`,`successful_subtask_task_with_calculated_scoring`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task_with_calculated_scoring`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_success_count` AS `subtask_success_count`,`successful_subtask_task_with_calculated_scoring`.`subtask_success_count_total` AS `subtask_success_count_total`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand` AS `contemporary_demand`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`successful_subtask_task_with_calculated_scoring`.`inner_function` AS `inner_function`,`successful_subtask_task_with_calculated_scoring`.`external_function` AS `external_function`,`successful_subtask_task_with_calculated_scoring`.`final_value` AS `final_value`,`successful_subtask_task_with_calculated_scoring`.`final_value_truncate` AS `final_value_truncate`,`successful_subtask_task_with_calculated_scoring`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`successful_subtask_task_with_calculated_scoring`.`subtask_type_id` AS `subtask_type_id`,`participant`.`participant_name` AS `participant_name`,`task`.`task_title` AS `task_title`,`first_share_holder_participant`.`subtask_share_holder_count` AS `subtask_share_holder_count`,`first_share_holder_participant`.`participant_id` AS `participant_holder_id`,`first_share_holder_participant`.`participant_name` AS `participant_holder_name` from (((`lc60_successful_subtask_task_with_calculated_scoring` `successful_subtask_task_with_calculated_scoring` join `lc60_participants` `participant` on((`successful_subtask_task_with_calculated_scoring`.`participant_id` = `participant`.`id`))) join `lc60_tasks` `task` on((`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` = `task`.`id`))) left join `lc60_first_share_holder_participant` `first_share_holder_participant` on((`successful_subtask_task_with_calculated_scoring`.`subtask_id` = `first_share_holder_participant`.`subtask_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_task_with_calculated_subtotal`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_task_with_calculated_subtotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_task_with_calculated_subtotal`  AS  select `successful_subtask_task_with_calculated_scoring`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` AS `contemporary_task_id`,sum(`successful_subtask_task_with_calculated_scoring`.`subtask_success_count`) AS `subtask_success_count_sum_subtotal`,count(0) AS `subtask_success_count_participant_subtotal`,avg(`successful_subtask_task_with_calculated_scoring`.`final_value`) AS `final_value_avg`,sum(`successful_subtask_task_with_calculated_scoring`.`final_value`) AS `final_value_subtotal` from `lc60_successful_subtask_task_with_calculated_scoring` `successful_subtask_task_with_calculated_scoring` group by `successful_subtask_task_with_calculated_scoring`.`participant_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_task_with_calculated_total`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_task_with_calculated_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_task_with_calculated_total`  AS  select `successful_subtask_task_with_calculated_scoring`.`participant_id` AS `participant_id`,sum(`successful_subtask_task_with_calculated_scoring`.`subtask_success_count`) AS `subtask_success_count_sum_total`,count(0) AS `subtask_success_count_participant_total`,avg(`successful_subtask_task_with_calculated_scoring`.`final_value`) AS `final_value_avg`,sum(`successful_subtask_task_with_calculated_scoring`.`final_value`) AS `final_value_total` from `lc60_successful_subtask_task_with_calculated_scoring` `successful_subtask_task_with_calculated_scoring` group by `successful_subtask_task_with_calculated_scoring`.`participant_id` ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_task_with_calculated_total_complete`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_task_with_calculated_total_complete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_task_with_calculated_total_complete`  AS  select `successful_subtask_task_with_calculated_total`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_total`.`subtask_success_count_sum_total` AS `subtask_success_count_sum_total`,`successful_subtask_task_with_calculated_total`.`subtask_success_count_participant_total` AS `subtask_success_count_participant_total`,`successful_subtask_task_with_calculated_total`.`final_value_avg` AS `final_value_avg`,`successful_subtask_task_with_calculated_total`.`final_value_total` AS `final_value_total` from `lc60_successful_subtask_task_with_calculated_total` `successful_subtask_task_with_calculated_total` union select `participant`.`id` AS `participant_id`,0 AS `subtask_success_count_sum_total`,0 AS `subtask_success_count_participant_total`,0 AS `final_value_avg`,0 AS `final_value_total` from `lc60_participants` `participant` where (not(`participant`.`id` in (select `successful_subtask_task_with_calculated_total`.`participant_id` from `lc60_successful_subtask_task_with_calculated_total` `successful_subtask_task_with_calculated_total`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_successful_subtask_task_with_calculated_total_participant`
--
DROP TABLE IF EXISTS `lc60_successful_subtask_task_with_calculated_total_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_successful_subtask_task_with_calculated_total_participant`  AS  select `participant`.`id` AS `participant_id`,`participant`.`participant_name` AS `participant`,`successful_subtask_task_with_calculated_total_complete`.`subtask_success_count_participant_total` AS `successes`,truncate(`successful_subtask_task_with_calculated_total_complete`.`final_value_total`,0) AS `score` from (`lc60_successful_subtask_task_with_calculated_total_complete` `successful_subtask_task_with_calculated_total_complete` join `lc60_participants` `participant` on((`successful_subtask_task_with_calculated_total_complete`.`participant_id` = `participant`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `lc60_unexpired_task`
--
DROP TABLE IF EXISTS `lc60_unexpired_task`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tggtt`@`localhost` SQL SECURITY DEFINER VIEW `lc60_unexpired_task`  AS  select `current_task`.`task_id` AS `task_id`,`current_task`.`task_title` AS `task_title`,`current_task`.`task_start` AS `task_start`,`current_task`.`task_expiration` AS `task_expiration`,`current_task`.`task_text` AS `task_text`,`current_task`.`task_url` AS `task_url`,(now() <= `current_task`.`task_expiration`) AS `task_unexpired` from `lc60_current_task` `current_task` order by `current_task`.`task_start` desc limit 1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lc60_dream_types`
--
ALTER TABLE `lc60_dream_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc60_dreams`
--
ALTER TABLE `lc60_dreams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participant_id` (`participant_id`);

--
-- Indexes for table `lc60_manual_value`
--
ALTER TABLE `lc60_manual_value`
  ADD PRIMARY KEY (`subtask_id`,`contemporary_task_id`);

--
-- Indexes for table `lc60_memos`
--
ALTER TABLE `lc60_memos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc60_news`
--
ALTER TABLE `lc60_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Indexes for table `lc60_participants`
--
ALTER TABLE `lc60_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subtask_category_id` (`subtask_category_id`);

--
-- Indexes for table `lc60_subtask_categories`
--
ALTER TABLE `lc60_subtask_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc60_subtask_dreams`
--
ALTER TABLE `lc60_subtask_dreams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dream_subtask_subtask` (`subtask_id`),
  ADD KEY `subtask_dream_dream` (`dream_id`);

--
-- Indexes for table `lc60_subtask_shares`
--
ALTER TABLE `lc60_subtask_shares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subtask_share_subtask` (`subtask_id`),
  ADD KEY `subtask_share_participant` (`participant_id`);

--
-- Indexes for table `lc60_subtask_types`
--
ALTER TABLE `lc60_subtask_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc60_subtasks`
--
ALTER TABLE `lc60_subtasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_period_id` (`task_id`),
  ADD KEY `task_super_id` (`subtask_super_id`),
  ADD KEY `subtask_category_id` (`subtask_category_id`),
  ADD KEY `participant_id` (`participant_id`),
  ADD KEY `subtask_type_id` (`subtask_type_id`);

--
-- Indexes for table `lc60_tasks`
--
ALTER TABLE `lc60_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lc60_users`
--
ALTER TABLE `lc60_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lc60_dreams`
--
ALTER TABLE `lc60_dreams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_memos`
--
ALTER TABLE `lc60_memos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_news`
--
ALTER TABLE `lc60_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_participants`
--
ALTER TABLE `lc60_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_subtask_categories`
--
ALTER TABLE `lc60_subtask_categories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_subtask_dreams`
--
ALTER TABLE `lc60_subtask_dreams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_subtask_shares`
--
ALTER TABLE `lc60_subtask_shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_subtasks`
--
ALTER TABLE `lc60_subtasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_tasks`
--
ALTER TABLE `lc60_tasks`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lc60_users`
--
ALTER TABLE `lc60_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lc60_dream_types`
--
ALTER TABLE `lc60_dream_types`
  ADD CONSTRAINT `dream_type_subtask` FOREIGN KEY (`id`) REFERENCES `lc60_subtasks` (`id`);

--
-- Constraints for table `lc60_dreams`
--
ALTER TABLE `lc60_dreams`
  ADD CONSTRAINT `dream_participant` FOREIGN KEY (`participant_id`) REFERENCES `lc60_participants` (`id`);

--
-- Constraints for table `lc60_news`
--
ALTER TABLE `lc60_news`
  ADD CONSTRAINT `news_user_id` FOREIGN KEY (`user_id`) REFERENCES `lc60_users` (`id`);

--
-- Constraints for table `lc60_participants`
--
ALTER TABLE `lc60_participants`
  ADD CONSTRAINT `participant_subtask_category` FOREIGN KEY (`subtask_category_id`) REFERENCES `lc60_subtask_categories` (`id`);

--
-- Constraints for table `lc60_subtask_dreams`
--
ALTER TABLE `lc60_subtask_dreams`
  ADD CONSTRAINT `subtask_dream_dream` FOREIGN KEY (`dream_id`) REFERENCES `lc60_dreams` (`id`),
  ADD CONSTRAINT `subtask_dream_subtask` FOREIGN KEY (`subtask_id`) REFERENCES `lc60_subtasks` (`id`);

--
-- Constraints for table `lc60_subtask_shares`
--
ALTER TABLE `lc60_subtask_shares`
  ADD CONSTRAINT `subtask_share_participant` FOREIGN KEY (`participant_id`) REFERENCES `lc60_participants` (`id`),
  ADD CONSTRAINT `subtask_share_subtask` FOREIGN KEY (`subtask_id`) REFERENCES `lc60_subtasks` (`id`);

--
-- Constraints for table `lc60_subtasks`
--
ALTER TABLE `lc60_subtasks`
  ADD CONSTRAINT `subtask_owner_participant_id` FOREIGN KEY (`participant_id`) REFERENCES `lc60_participants` (`id`),
  ADD CONSTRAINT `subtask_subtask_category_id` FOREIGN KEY (`subtask_category_id`) REFERENCES `lc60_subtask_categories` (`id`),
  ADD CONSTRAINT `subtask_subtask_super` FOREIGN KEY (`subtask_super_id`) REFERENCES `lc60_subtasks` (`id`),
  ADD CONSTRAINT `subtask_subtask_type_id` FOREIGN KEY (`subtask_type_id`) REFERENCES `lc60_subtask_types` (`id`),
  ADD CONSTRAINT `subtask_task_id` FOREIGN KEY (`task_id`) REFERENCES `lc60_tasks` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
