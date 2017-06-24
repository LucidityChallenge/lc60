-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2017 at 06:23 PM
-- Server version: 10.0.29-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lc`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `calculated_subtask_demand_external`
--
CREATE TABLE IF NOT EXISTS `calculated_subtask_demand_external` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` int(11)
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
,`subtask_description` mediumtext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` mediumtext
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` double
,`external_function` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `calculated_subtask_demand_final_value`
--
CREATE TABLE IF NOT EXISTS `calculated_subtask_demand_final_value` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` int(11)
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
,`subtask_description` mediumtext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` mediumtext
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` double
,`external_function` double
,`final_value` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `calculated_subtask_demand_inner`
--
CREATE TABLE IF NOT EXISTS `calculated_subtask_demand_inner` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` int(11)
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
,`subtask_description` mediumtext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` mediumtext
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
,`inner_function` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `calculated_subtask_demand_union`
--
CREATE TABLE IF NOT EXISTS `calculated_subtask_demand_union` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` int(11)
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
,`subtask_description` mediumtext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` mediumtext
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `current_task`
--
CREATE TABLE IF NOT EXISTS `current_task` (
`task_id` tinyint(4)
,`task_title` varchar(48)
,`task_start` timestamp
,`task_expiration` timestamp
,`task_text` text
,`task_url` varchar(80)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `demand_accumulated_success`
--
CREATE TABLE IF NOT EXISTS `demand_accumulated_success` (
`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_success_count` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `demand_base_success`
--
CREATE TABLE IF NOT EXISTS `demand_base_success` (
`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`task_expiration` timestamp
,`subtask_success_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `demand_view`
--
CREATE TABLE IF NOT EXISTS `demand_view` (
`subtask_id` int(11)
,`demand` int(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `demand_view_success`
--
CREATE TABLE IF NOT EXISTS `demand_view_success` (
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
-- Stand-in structure for view `demand_view_success_contemporary_demand`
--
CREATE TABLE IF NOT EXISTS `demand_view_success_contemporary_demand` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
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
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`contemporary_demand` decimal(44,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `demand_view_success_contemporary_demand_positive`
--
CREATE TABLE IF NOT EXISTS `demand_view_success_contemporary_demand_positive` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
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
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`contemporary_demand` decimal(44,0)
,`contemporary_demand_positive` decimal(44,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `demand_view_uncomplete_contemporary_demand`
--
CREATE TABLE IF NOT EXISTS `demand_view_uncomplete_contemporary_demand` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` tinyint(4)
,`subtask_success_count` int(1)
,`subtask_success_count_total` int(1)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`contemporary_demand` int(9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `demand_view_uncomplete_contemporary_demand_positive`
--
CREATE TABLE IF NOT EXISTS `demand_view_uncomplete_contemporary_demand_positive` (
`current_task_id` tinyint(4)
,`contemporary_task_id` tinyint(4)
,`subtask_id` int(11)
,`subtask_starting_demand` tinyint(4)
,`subtask_success_count` int(1)
,`subtask_success_count_total` int(1)
,`subtask_task_period_demand` tinyint(4)
,`subtask_task_id` tinyint(4)
,`subtask_super_id` int(11)
,`subtask_name` varchar(48)
,`subtask_category_id` tinyint(4)
,`subtask_base_value` tinyint(4)
,`subtask_max_value` tinyint(4)
,`subtask_inflation_rate` decimal(4,1)
,`subtask_demand_cutoff` tinyint(4)
,`subtask_description` tinytext
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(1)
,`subtask_owner_participant_id` int(11)
,`subtask_dividend_rate` decimal(4,1)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
,`contemporary_demand` int(9)
,`contemporary_demand_positive` bigint(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `dreams`
--

CREATE TABLE IF NOT EXISTS `dreams` (
  `id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `dream_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dream_url` varchar(80) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `dream_scoring`
--
CREATE TABLE IF NOT EXISTS `dream_scoring` (
`dream_id` int(11)
,`final_value_truncate` double(19,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `dream_types`
--

CREATE TABLE IF NOT EXISTS `dream_types` (
  `id` int(11) NOT NULL,
  `dream_type_name` varchar(32) NOT NULL,
  `dream_type_short_name` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `dream_type_id`
--
CREATE TABLE IF NOT EXISTS `dream_type_id` (
`dream_id` int(11)
,`dream_type_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dream_with_type`
--
CREATE TABLE IF NOT EXISTS `dream_with_type` (
`participant_id` int(11)
,`dream_id` int(11)
,`dream_timestamp` timestamp
,`dream_type_id` int(11)
,`dream_type_name` varchar(32)
,`dream_type_short_name` varchar(8)
,`final_value_truncate` double(19,2)
,`task_id` tinyint(4)
,`task_title` varchar(48)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `dream_with_type_participant`
--
CREATE TABLE IF NOT EXISTS `dream_with_type_participant` (
`participant_id` int(11)
,`participant_name` varchar(48)
,`dream_id` int(11)
,`dream_timestamp` timestamp
,`dream_type_id` int(11)
,`dream_type_name` varchar(32)
,`dream_type_short_name` varchar(8)
,`final_value_truncate` double(19,2)
,`task_id` tinyint(4)
,`task_title` varchar(48)
);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
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
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL,
  `participant_name` varchar(48) NOT NULL,
  `participant_goal` varchar(128) DEFAULT NULL,
  `participant_dj_url` varchar(80) DEFAULT NULL,
  `participant_join_url` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `recent_successes`
--
CREATE TABLE IF NOT EXISTS `recent_successes` (
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
,`inner_function` double
,`external_function` double
,`final_value` double(19,2)
,`subtask_dividend_rate` decimal(4,1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `scores`
--
CREATE TABLE IF NOT EXISTS `scores` (
`position` bigint(21)
,`participant_id` int(11)
,`participant` varchar(48)
,`successful_subtasks` bigint(21)
,`average_subtask_value` double
,`total_subtask_value` double(19,2)
,`dividend_successes` bigint(21)
,`average_dividend_value` double
,`total_dividends` double
,`total_score` double(19,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `score_view_complete`
--
CREATE TABLE IF NOT EXISTS `score_view_complete` (
`participant_id` int(11)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_value_avg` double
,`final_value_total` double
,`dividend_count_sum_total` decimal(64,0)
,`dividend_count_participant_total` bigint(21)
,`final_dividend_value_avg` double
,`final_dividend_value_total` double
,`final_value_total_with_dividends` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `score_view_complete_participant`
--
CREATE TABLE IF NOT EXISTS `score_view_complete_participant` (
`participant_id` int(11)
,`participant_name` varchar(48)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_value_avg` double
,`final_value_total` double
,`dividend_count_sum_total` decimal(64,0)
,`dividend_count_participant_total` bigint(21)
,`final_dividend_value_avg` double
,`final_dividend_value_total` double
,`final_value_total_with_dividends` double
);

-- --------------------------------------------------------

--
-- Table structure for table `subtasks`
--

CREATE TABLE IF NOT EXISTS `subtasks` (
  `id` int(11) NOT NULL,
  `task_id` tinyint(4) NOT NULL DEFAULT '1',
  `subtask_super_id` int(11) DEFAULT NULL COMMENT 'parent for sub task.',
  `subtask_name` varchar(48) NOT NULL,
  `subtask_category_id` tinyint(4) DEFAULT NULL,
  `subtask_base_value` tinyint(4) NOT NULL COMMENT 'score base.',
  `subtask_max_value` tinyint(4) DEFAULT NULL COMMENT 'Max value used to be DEFAULT ''20''',
  `subtask_starting_demand` tinyint(4) NOT NULL DEFAULT '0',
  `subtask_inflation_rate` decimal(4,1) NOT NULL DEFAULT '102.0',
  `subtask_demand_cutoff` tinyint(4) NOT NULL DEFAULT '7',
  `subtask_description` tinytext,
  `subtask_url` varchar(48) DEFAULT NULL,
  `subtask_accumulative` tinyint(1) NOT NULL DEFAULT '0',
  `subtask_task_period_demand` tinyint(4) NOT NULL DEFAULT '0',
  `participant_id` int(11) DEFAULT NULL COMMENT 'Optional owner for the subtask.',
  `subtask_dividend_rate` decimal(4,1) NOT NULL DEFAULT '0.0',
  `subtask_image` varchar(80) DEFAULT NULL,
  `subtask_symbol` int(11) DEFAULT NULL,
  `subtask_instruction` tinytext,
  `subtask_type_id` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subtask_categories`
--

CREATE TABLE IF NOT EXISTS `subtask_categories` (
  `id` tinyint(4) NOT NULL,
  `subtask_category_name` varchar(16) NOT NULL,
  `subtask_category_color` varchar(8) NOT NULL,
  `subtask_category_class` varchar(16) CHARACTER SET ascii DEFAULT NULL,
  `subtask_category_description` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subtask_dreams`
--

CREATE TABLE IF NOT EXISTS `subtask_dreams` (
  `id` int(11) NOT NULL,
  `subtask_id` int(11) NOT NULL,
  `dream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `subtask_dream_super`
--
CREATE TABLE IF NOT EXISTS `subtask_dream_super` (
`subtask_dream_attempt` int(11)
,`subtask_id` int(11)
,`dream_id` int(11)
,`implied_from_super_task` bigint(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `subtask_dream_super_name`
--
CREATE TABLE IF NOT EXISTS `subtask_dream_super_name` (
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
-- Table structure for table `subtask_shares`
--

CREATE TABLE IF NOT EXISTS `subtask_shares` (
  `subtask_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `subtask_share_holder`
--
CREATE TABLE IF NOT EXISTS `subtask_share_holder` (
`id` varchar(24)
,`subtask_id` int(11)
,`participant_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `subtask_share_holder_complete`
--
CREATE TABLE IF NOT EXISTS `subtask_share_holder_complete` (
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
,`subtask_image` varchar(80)
,`subtask_symbol` int(11)
,`subtask_instruction` tinytext
,`subtask_share_holder_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `subtask_share_holder_count`
--
CREATE TABLE IF NOT EXISTS `subtask_share_holder_count` (
`subtask_id` int(11)
,`subtask_share_holder_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `subtask_subtask_category`
--
CREATE TABLE IF NOT EXISTS `subtask_subtask_category` (
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
,`subtask_image` varchar(80)
,`subtask_symbol` int(11)
,`subtask_instruction` tinytext
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` tinytext
);

-- --------------------------------------------------------

--
-- Table structure for table `subtask_types`
--

CREATE TABLE IF NOT EXISTS `subtask_types` (
  `id` tinyint(4) NOT NULL,
  `subtask_type_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask`
--
CREATE TABLE IF NOT EXISTS `successful_subtask` (
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
,`subtask_task_period_demand` tinyint(4)
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
-- Stand-in structure for view `successful_subtask_category`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_category` (
`participant_id` int(11)
,`subtask_category_id` tinyint(4)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_category_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_category_complete_final`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_category_complete_final` (
`participant_id` int(11)
,`subtask_category_id` tinyint(4)
,`subtask_category_count_sum` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_category_complete_final_minimum`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_category_complete_final_minimum` (
`participant_id` int(11)
,`subtask_category_count_sum_min` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_category_complete_inner`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_category_complete_inner` (
`participant_id` int(11)
,`subtask_category_id` tinyint(4)
,`subtask_category_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_dividend_calculated_subtotal`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_dividend_calculated_subtotal` (
`participant_id` int(11)
,`contemporary_task_id` tinyint(4)
,`subtask_success_count_sum_subtotal` decimal(64,0)
,`subtask_success_count_participant_subtotal` bigint(21)
,`final_dividend_value_avg` double
,`final_dividend_value_subtotal` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_dividend_calculated_total`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_dividend_calculated_total` (
`participant_id` int(11)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_dividend_value_avg` double
,`final_dividend_value_total` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_dividend_scores`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_dividend_scores` (
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
,`inner_function` double
,`external_function` double
,`final_value` double
,`subtask_dividend_rate` decimal(4,1)
,`subtask_share_holder_count` bigint(21)
,`final_dividend_value` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_task`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_task` (
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
,`subtask_task_period_demand` tinyint(4)
,`subtask_description` text
,`subtask_url` varchar(48)
,`subtask_accumulative` tinyint(4)
,`subtask_owner_participant_id` int(11)
,`subtask_category_name` varchar(16)
,`subtask_category_class` varchar(16)
,`subtask_category_description` text
,`subtask_dividend_rate` decimal(4,1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_task_with_calculated_scoring`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_task_with_calculated_scoring` (
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
,`inner_function` double
,`external_function` double
,`final_value` double
,`final_value_truncate` double(19,2)
,`subtask_dividend_rate` decimal(4,1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_task_with_calculated_scoring_participant`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_task_with_calculated_scoring_participant` (
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
,`inner_function` double
,`external_function` double
,`final_value` double
,`final_value_truncate` double(19,2)
,`subtask_dividend_rate` decimal(4,1)
,`participant_name` varchar(48)
,`task_title` varchar(48)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_task_with_calculated_subtotal`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_task_with_calculated_subtotal` (
`participant_id` int(11)
,`contemporary_task_id` tinyint(4)
,`subtask_success_count_sum_subtotal` decimal(64,0)
,`subtask_success_count_participant_subtotal` bigint(21)
,`final_value_avg` double
,`final_value_subtotal` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_task_with_calculated_total`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_task_with_calculated_total` (
`participant_id` int(11)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_value_avg` double
,`final_value_total` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_task_with_calculated_total_complete`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_task_with_calculated_total_complete` (
`participant_id` int(11)
,`subtask_success_count_sum_total` decimal(64,0)
,`subtask_success_count_participant_total` bigint(21)
,`final_value_avg` double
,`final_value_total` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `successful_subtask_task_with_calculated_total_participant`
--
CREATE TABLE IF NOT EXISTS `successful_subtask_task_with_calculated_total_participant` (
`participant_id` int(11)
,`participant` varchar(48)
,`successes` bigint(21)
,`score` double(17,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` tinyint(4) NOT NULL,
  `task_title` varchar(48) NOT NULL,
  `task_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'start date for the week.',
  `task_expiration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Why I cannot set TIMESTAMP(now() + (INTERVAL 1 WEEK)) for default',
  `task_text` text NOT NULL COMMENT '64kb of text',
  `task_url` varchar(80) NOT NULL,
  `task_image_url` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `unexpired_task`
--
CREATE TABLE IF NOT EXISTS `unexpired_task` (
`task_id` tinyint(4)
,`task_title` varchar(48)
,`task_start` timestamp
,`task_expiration` timestamp
,`task_text` text
,`task_url` varchar(80)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure for view `calculated_subtask_demand_external`
--
DROP TABLE IF EXISTS `calculated_subtask_demand_external`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `calculated_subtask_demand_external` AS select `calculated_subtask_demand_inner`.`current_task_id` AS `current_task_id`,`calculated_subtask_demand_inner`.`contemporary_task_id` AS `contemporary_task_id`,`calculated_subtask_demand_inner`.`subtask_id` AS `subtask_id`,`calculated_subtask_demand_inner`.`subtask_starting_demand` AS `subtask_starting_demand`,`calculated_subtask_demand_inner`.`subtask_success_count` AS `subtask_success_count`,`calculated_subtask_demand_inner`.`subtask_success_count_total` AS `subtask_success_count_total`,`calculated_subtask_demand_inner`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`calculated_subtask_demand_inner`.`subtask_task_id` AS `subtask_task_id`,`calculated_subtask_demand_inner`.`subtask_super_id` AS `subtask_super_id`,`calculated_subtask_demand_inner`.`subtask_name` AS `subtask_name`,`calculated_subtask_demand_inner`.`subtask_category_id` AS `subtask_category_id`,`calculated_subtask_demand_inner`.`subtask_base_value` AS `subtask_base_value`,`calculated_subtask_demand_inner`.`subtask_max_value` AS `subtask_max_value`,`calculated_subtask_demand_inner`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`calculated_subtask_demand_inner`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`calculated_subtask_demand_inner`.`subtask_description` AS `subtask_description`,`calculated_subtask_demand_inner`.`subtask_url` AS `subtask_url`,`calculated_subtask_demand_inner`.`subtask_accumulative` AS `subtask_accumulative`,`calculated_subtask_demand_inner`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`calculated_subtask_demand_inner`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`calculated_subtask_demand_inner`.`subtask_category_name` AS `subtask_category_name`,`calculated_subtask_demand_inner`.`subtask_category_class` AS `subtask_category_class`,`calculated_subtask_demand_inner`.`subtask_category_description` AS `subtask_category_description`,`calculated_subtask_demand_inner`.`contemporary_demand` AS `contemporary_demand`,`calculated_subtask_demand_inner`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`calculated_subtask_demand_inner`.`inner_function` AS `inner_function`,(case when (`calculated_subtask_demand_inner`.`inner_function` >= 1) then 1 else `calculated_subtask_demand_inner`.`inner_function` end) AS `external_function` from `calculated_subtask_demand_inner`;

-- --------------------------------------------------------

--
-- Structure for view `calculated_subtask_demand_final_value`
--
DROP TABLE IF EXISTS `calculated_subtask_demand_final_value`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `calculated_subtask_demand_final_value` AS select `calculated_subtask_demand_external`.`current_task_id` AS `current_task_id`,`calculated_subtask_demand_external`.`contemporary_task_id` AS `contemporary_task_id`,`calculated_subtask_demand_external`.`subtask_id` AS `subtask_id`,`calculated_subtask_demand_external`.`subtask_starting_demand` AS `subtask_starting_demand`,`calculated_subtask_demand_external`.`subtask_success_count` AS `subtask_success_count`,`calculated_subtask_demand_external`.`subtask_success_count_total` AS `subtask_success_count_total`,`calculated_subtask_demand_external`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`calculated_subtask_demand_external`.`subtask_task_id` AS `subtask_task_id`,`calculated_subtask_demand_external`.`subtask_super_id` AS `subtask_super_id`,`calculated_subtask_demand_external`.`subtask_name` AS `subtask_name`,`calculated_subtask_demand_external`.`subtask_category_id` AS `subtask_category_id`,`calculated_subtask_demand_external`.`subtask_base_value` AS `subtask_base_value`,`calculated_subtask_demand_external`.`subtask_max_value` AS `subtask_max_value`,`calculated_subtask_demand_external`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`calculated_subtask_demand_external`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`calculated_subtask_demand_external`.`subtask_description` AS `subtask_description`,`calculated_subtask_demand_external`.`subtask_url` AS `subtask_url`,`calculated_subtask_demand_external`.`subtask_accumulative` AS `subtask_accumulative`,`calculated_subtask_demand_external`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`calculated_subtask_demand_external`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`calculated_subtask_demand_external`.`subtask_category_name` AS `subtask_category_name`,`calculated_subtask_demand_external`.`subtask_category_class` AS `subtask_category_class`,`calculated_subtask_demand_external`.`subtask_category_description` AS `subtask_category_description`,`calculated_subtask_demand_external`.`contemporary_demand` AS `contemporary_demand`,`calculated_subtask_demand_external`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`calculated_subtask_demand_external`.`inner_function` AS `inner_function`,`calculated_subtask_demand_external`.`external_function` AS `external_function`,(case when (`calculated_subtask_demand_external`.`external_function` <= 0) then `calculated_subtask_demand_external`.`subtask_base_value` else (`calculated_subtask_demand_external`.`subtask_base_value` + ((`calculated_subtask_demand_external`.`subtask_max_value` - `calculated_subtask_demand_external`.`subtask_base_value`) * `calculated_subtask_demand_external`.`external_function`)) end) AS `final_value` from `calculated_subtask_demand_external`;

-- --------------------------------------------------------

--
-- Structure for view `calculated_subtask_demand_inner`
--
DROP TABLE IF EXISTS `calculated_subtask_demand_inner`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `calculated_subtask_demand_inner` AS select `calculated_subtask_demand_union`.`current_task_id` AS `current_task_id`,`calculated_subtask_demand_union`.`contemporary_task_id` AS `contemporary_task_id`,`calculated_subtask_demand_union`.`subtask_id` AS `subtask_id`,`calculated_subtask_demand_union`.`subtask_starting_demand` AS `subtask_starting_demand`,`calculated_subtask_demand_union`.`subtask_success_count` AS `subtask_success_count`,`calculated_subtask_demand_union`.`subtask_success_count_total` AS `subtask_success_count_total`,`calculated_subtask_demand_union`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`calculated_subtask_demand_union`.`subtask_task_id` AS `subtask_task_id`,`calculated_subtask_demand_union`.`subtask_super_id` AS `subtask_super_id`,`calculated_subtask_demand_union`.`subtask_name` AS `subtask_name`,`calculated_subtask_demand_union`.`subtask_category_id` AS `subtask_category_id`,`calculated_subtask_demand_union`.`subtask_base_value` AS `subtask_base_value`,`calculated_subtask_demand_union`.`subtask_max_value` AS `subtask_max_value`,`calculated_subtask_demand_union`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`calculated_subtask_demand_union`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`calculated_subtask_demand_union`.`subtask_description` AS `subtask_description`,`calculated_subtask_demand_union`.`subtask_url` AS `subtask_url`,`calculated_subtask_demand_union`.`subtask_accumulative` AS `subtask_accumulative`,`calculated_subtask_demand_union`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`calculated_subtask_demand_union`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`calculated_subtask_demand_union`.`subtask_category_name` AS `subtask_category_name`,`calculated_subtask_demand_union`.`subtask_category_class` AS `subtask_category_class`,`calculated_subtask_demand_union`.`subtask_category_description` AS `subtask_category_description`,`calculated_subtask_demand_union`.`contemporary_demand` AS `contemporary_demand`,`calculated_subtask_demand_union`.`contemporary_demand_positive` AS `contemporary_demand_positive`,(case when (isnull(`calculated_subtask_demand_union`.`subtask_max_value`) or isnull(`calculated_subtask_demand_union`.`subtask_starting_demand`)) then 0 else (pow(`calculated_subtask_demand_union`.`contemporary_demand_positive`,(`calculated_subtask_demand_union`.`subtask_inflation_rate` / 100)) / `calculated_subtask_demand_union`.`subtask_demand_cutoff`) end) AS `inner_function` from `calculated_subtask_demand_union`;

-- --------------------------------------------------------

--
-- Structure for view `calculated_subtask_demand_union`
--
DROP TABLE IF EXISTS `calculated_subtask_demand_union`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `calculated_subtask_demand_union` AS select `demand_view_success_contemporary_demand_positive`.`current_task_id` AS `current_task_id`,`demand_view_success_contemporary_demand_positive`.`contemporary_task_id` AS `contemporary_task_id`,`demand_view_success_contemporary_demand_positive`.`subtask_id` AS `subtask_id`,`demand_view_success_contemporary_demand_positive`.`subtask_starting_demand` AS `subtask_starting_demand`,`demand_view_success_contemporary_demand_positive`.`subtask_success_count` AS `subtask_success_count`,`demand_view_success_contemporary_demand_positive`.`subtask_success_count_total` AS `subtask_success_count_total`,`demand_view_success_contemporary_demand_positive`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`demand_view_success_contemporary_demand_positive`.`subtask_task_id` AS `subtask_task_id`,`demand_view_success_contemporary_demand_positive`.`subtask_super_id` AS `subtask_super_id`,`demand_view_success_contemporary_demand_positive`.`subtask_name` AS `subtask_name`,`demand_view_success_contemporary_demand_positive`.`subtask_category_id` AS `subtask_category_id`,`demand_view_success_contemporary_demand_positive`.`subtask_base_value` AS `subtask_base_value`,`demand_view_success_contemporary_demand_positive`.`subtask_max_value` AS `subtask_max_value`,`demand_view_success_contemporary_demand_positive`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`demand_view_success_contemporary_demand_positive`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`demand_view_success_contemporary_demand_positive`.`subtask_description` AS `subtask_description`,`demand_view_success_contemporary_demand_positive`.`subtask_url` AS `subtask_url`,`demand_view_success_contemporary_demand_positive`.`subtask_accumulative` AS `subtask_accumulative`,`demand_view_success_contemporary_demand_positive`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`demand_view_success_contemporary_demand_positive`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`demand_view_success_contemporary_demand_positive`.`subtask_category_name` AS `subtask_category_name`,`demand_view_success_contemporary_demand_positive`.`subtask_category_class` AS `subtask_category_class`,`demand_view_success_contemporary_demand_positive`.`subtask_category_description` AS `subtask_category_description`,`demand_view_success_contemporary_demand_positive`.`contemporary_demand` AS `contemporary_demand`,`demand_view_success_contemporary_demand_positive`.`contemporary_demand_positive` AS `contemporary_demand_positive` from `demand_view_success_contemporary_demand_positive` union select `demand_view_uncomplete_contemporary_demand_positive`.`current_task_id` AS `current_task_id`,`demand_view_uncomplete_contemporary_demand_positive`.`contemporary_task_id` AS `contemporary_task_id`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_id` AS `subtask_id`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_starting_demand` AS `subtask_starting_demand`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_success_count` AS `subtask_success_count`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_success_count_total` AS `subtask_success_count_total`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_task_id` AS `subtask_task_id`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_super_id` AS `subtask_super_id`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_name` AS `subtask_name`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_category_id` AS `subtask_category_id`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_base_value` AS `subtask_base_value`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_max_value` AS `subtask_max_value`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_description` AS `subtask_description`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_url` AS `subtask_url`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_accumulative` AS `subtask_accumulative`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_category_name` AS `subtask_category_name`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_category_class` AS `subtask_category_class`,`demand_view_uncomplete_contemporary_demand_positive`.`subtask_category_description` AS `subtask_category_description`,`demand_view_uncomplete_contemporary_demand_positive`.`contemporary_demand` AS `contemporary_demand`,`demand_view_uncomplete_contemporary_demand_positive`.`contemporary_demand_positive` AS `contemporary_demand_positive` from `demand_view_uncomplete_contemporary_demand_positive`;

-- --------------------------------------------------------

--
-- Structure for view `current_task`
--
DROP TABLE IF EXISTS `current_task`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `current_task` AS select `task`.`id` AS `task_id`,`task`.`task_title` AS `task_title`,`task`.`task_start` AS `task_start`,`task`.`task_expiration` AS `task_expiration`,`task`.`task_text` AS `task_text`,`task`.`task_url` AS `task_url` from `tasks` `task` where ((`task`.`id` > 0) and (now() > `task`.`task_start`));

-- --------------------------------------------------------

--
-- Structure for view `demand_accumulated_success`
--
DROP TABLE IF EXISTS `demand_accumulated_success`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demand_accumulated_success` AS select `task`.`id` AS `contemporary_task_id`,`subtask`.`id` AS `subtask_id`,sum(coalesce(`demand_base_success`.`subtask_success_count`,0)) AS `subtask_success_count` from ((`tasks` `task` join `subtasks` `subtask` on(1)) left join `demand_base_success` on(((`task`.`task_expiration` > `demand_base_success`.`task_expiration`) and (`subtask`.`id` = `demand_base_success`.`subtask_id`)))) group by `task`.`id`,`subtask`.`id`;

-- --------------------------------------------------------

--
-- Structure for view `demand_base_success`
--
DROP TABLE IF EXISTS `demand_base_success`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demand_base_success` AS select `successful_subtask_task`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task`.`subtask_id` AS `subtask_id`,`task`.`task_expiration` AS `task_expiration`,(case when (`task`.`task_expiration` < now()) then count(0) else 0 end) AS `subtask_success_count` from (`successful_subtask_task` join `tasks` `task` on((`successful_subtask_task`.`contemporary_task_id` = `task`.`id`))) group by `successful_subtask_task`.`contemporary_task_id`,`successful_subtask_task`.`subtask_id`;

-- --------------------------------------------------------

--
-- Structure for view `demand_view`
--
DROP TABLE IF EXISTS `demand_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demand_view` AS select `subtask`.`id` AS `subtask_id`,(case when ((`subtask`.`subtask_starting_demand` <= 0) or isnull(`subtask`.`subtask_max_value`) or isnull(`subtask`.`subtask_starting_demand`)) then 0 else `subtask`.`subtask_starting_demand` end) AS `demand` from `subtasks` `subtask`;

-- --------------------------------------------------------

--
-- Structure for view `demand_view_success`
--
DROP TABLE IF EXISTS `demand_view_success`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demand_view_success` AS select `successful_subtask_task`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task`.`subtask_id` AS `subtask_id`,(case when ((`successful_subtask_task`.`subtask_starting_demand` <= 0) or isnull(`successful_subtask_task`.`subtask_max_value`) or isnull(`successful_subtask_task`.`subtask_starting_demand`)) then 0 else `successful_subtask_task`.`subtask_starting_demand` end) AS `subtask_starting_demand`,min(`demand_accumulated_success`.`subtask_success_count`) AS `subtask_success_count`,count(0) AS `subtask_success_count_total`,`successful_subtask_task`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task`.`subtask_name` AS `subtask_name`,`successful_subtask_task`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task`.`subtask_description` AS `subtask_description`,`successful_subtask_task`.`subtask_url` AS `subtask_url`,`successful_subtask_task`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`successful_subtask_task`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task`.`subtask_category_description` AS `subtask_category_description` from (`successful_subtask_task` join `demand_accumulated_success` on(((`successful_subtask_task`.`subtask_id` = `demand_accumulated_success`.`subtask_id`) and (`successful_subtask_task`.`contemporary_task_id` = `demand_accumulated_success`.`contemporary_task_id`)))) group by `successful_subtask_task`.`contemporary_task_id`,`successful_subtask_task`.`subtask_id`,`successful_subtask_task`.`subtask_id`,`successful_subtask_task`.`subtask_starting_demand`,`successful_subtask_task`.`subtask_task_period_demand`,`successful_subtask_task`.`subtask_task_id`,`successful_subtask_task`.`subtask_super_id`,`successful_subtask_task`.`subtask_name`,`successful_subtask_task`.`subtask_category_id`,`successful_subtask_task`.`subtask_base_value`,`successful_subtask_task`.`subtask_max_value`,`successful_subtask_task`.`subtask_inflation_rate`,`successful_subtask_task`.`subtask_demand_cutoff`,`successful_subtask_task`.`subtask_url`,`successful_subtask_task`.`subtask_accumulative`,`successful_subtask_task`.`subtask_owner_participant_id`,`successful_subtask_task`.`subtask_dividend_rate`;

-- --------------------------------------------------------

--
-- Structure for view `demand_view_success_contemporary_demand`
--
DROP TABLE IF EXISTS `demand_view_success_contemporary_demand`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demand_view_success_contemporary_demand` AS select `current_task`.`task_id` AS `current_task_id`,`demand_view_success`.`contemporary_task_id` AS `contemporary_task_id`,`demand_view_success`.`subtask_id` AS `subtask_id`,`demand_view_success`.`subtask_starting_demand` AS `subtask_starting_demand`,`demand_view_success`.`subtask_success_count` AS `subtask_success_count`,`demand_view_success`.`subtask_success_count_total` AS `subtask_success_count_total`,`demand_view_success`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`demand_view_success`.`subtask_task_id` AS `subtask_task_id`,`demand_view_success`.`subtask_super_id` AS `subtask_super_id`,`demand_view_success`.`subtask_name` AS `subtask_name`,`demand_view_success`.`subtask_category_id` AS `subtask_category_id`,`demand_view_success`.`subtask_base_value` AS `subtask_base_value`,`demand_view_success`.`subtask_max_value` AS `subtask_max_value`,`demand_view_success`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`demand_view_success`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`demand_view_success`.`subtask_description` AS `subtask_description`,`demand_view_success`.`subtask_url` AS `subtask_url`,`demand_view_success`.`subtask_accumulative` AS `subtask_accumulative`,`demand_view_success`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`demand_view_success`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`demand_view_success`.`subtask_category_name` AS `subtask_category_name`,`demand_view_success`.`subtask_category_class` AS `subtask_category_class`,`demand_view_success`.`subtask_category_description` AS `subtask_category_description`,(((`demand_view_success`.`subtask_task_period_demand` * (`demand_view_success`.`contemporary_task_id` - `current_task`.`task_id`)) - `demand_view_success`.`subtask_success_count`) + `demand_view_success`.`subtask_starting_demand`) AS `contemporary_demand` from (`current_task` join `demand_view_success`) group by `current_task`.`task_id`,`demand_view_success`.`contemporary_task_id`,`demand_view_success`.`subtask_id`,`demand_view_success`.`subtask_starting_demand`,`demand_view_success`.`subtask_success_count`,`demand_view_success`.`subtask_task_period_demand`,`demand_view_success`.`subtask_task_id`,`demand_view_success`.`subtask_super_id`,`demand_view_success`.`subtask_name`,`demand_view_success`.`subtask_category_id`,`demand_view_success`.`subtask_base_value`,`demand_view_success`.`subtask_max_value`,`demand_view_success`.`subtask_inflation_rate`,`demand_view_success`.`subtask_demand_cutoff`,`demand_view_success`.`subtask_url`,`demand_view_success`.`subtask_accumulative`,`demand_view_success`.`subtask_owner_participant_id`,`demand_view_success`.`subtask_dividend_rate`;

-- --------------------------------------------------------

--
-- Structure for view `demand_view_success_contemporary_demand_positive`
--
DROP TABLE IF EXISTS `demand_view_success_contemporary_demand_positive`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demand_view_success_contemporary_demand_positive` AS select `demand_view_success_contemporary_demand`.`current_task_id` AS `current_task_id`,`demand_view_success_contemporary_demand`.`contemporary_task_id` AS `contemporary_task_id`,`demand_view_success_contemporary_demand`.`subtask_id` AS `subtask_id`,`demand_view_success_contemporary_demand`.`subtask_starting_demand` AS `subtask_starting_demand`,`demand_view_success_contemporary_demand`.`subtask_success_count` AS `subtask_success_count`,`demand_view_success_contemporary_demand`.`subtask_success_count_total` AS `subtask_success_count_total`,`demand_view_success_contemporary_demand`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`demand_view_success_contemporary_demand`.`subtask_task_id` AS `subtask_task_id`,`demand_view_success_contemporary_demand`.`subtask_super_id` AS `subtask_super_id`,`demand_view_success_contemporary_demand`.`subtask_name` AS `subtask_name`,`demand_view_success_contemporary_demand`.`subtask_category_id` AS `subtask_category_id`,`demand_view_success_contemporary_demand`.`subtask_base_value` AS `subtask_base_value`,`demand_view_success_contemporary_demand`.`subtask_max_value` AS `subtask_max_value`,`demand_view_success_contemporary_demand`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`demand_view_success_contemporary_demand`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`demand_view_success_contemporary_demand`.`subtask_description` AS `subtask_description`,`demand_view_success_contemporary_demand`.`subtask_url` AS `subtask_url`,`demand_view_success_contemporary_demand`.`subtask_accumulative` AS `subtask_accumulative`,`demand_view_success_contemporary_demand`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`demand_view_success_contemporary_demand`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`demand_view_success_contemporary_demand`.`subtask_category_name` AS `subtask_category_name`,`demand_view_success_contemporary_demand`.`subtask_category_class` AS `subtask_category_class`,`demand_view_success_contemporary_demand`.`subtask_category_description` AS `subtask_category_description`,`demand_view_success_contemporary_demand`.`contemporary_demand` AS `contemporary_demand`,(case when (`demand_view_success_contemporary_demand`.`contemporary_demand` <= 0) then 0 else `demand_view_success_contemporary_demand`.`contemporary_demand` end) AS `contemporary_demand_positive` from `demand_view_success_contemporary_demand`;

-- --------------------------------------------------------

--
-- Structure for view `demand_view_uncomplete_contemporary_demand`
--
DROP TABLE IF EXISTS `demand_view_uncomplete_contemporary_demand`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demand_view_uncomplete_contemporary_demand` AS select `current_task`.`task_id` AS `current_task_id`,`subtask`.`task_id` AS `contemporary_task_id`,`subtask`.`id` AS `subtask_id`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,0 AS `subtask_success_count`,0 AS `subtask_success_count_total`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`task_id` AS `subtask_task_id`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_url` AS `subtask_url`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`participant_id` AS `subtask_owner_participant_id`,`subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description`,((`subtask`.`subtask_task_period_demand` * (`subtask`.`task_id` - `current_task`.`task_id`)) + `subtask`.`subtask_starting_demand`) AS `contemporary_demand` from ((`current_task` join `subtasks` `subtask`) join `subtask_categories` `subtask_category` on((`subtask`.`subtask_category_id` = `subtask_category`.`id`))) where (not(`subtask`.`id` in (select `subtask_dream_super`.`subtask_id` from `subtask_dream_super`)));

-- --------------------------------------------------------

--
-- Structure for view `demand_view_uncomplete_contemporary_demand_positive`
--
DROP TABLE IF EXISTS `demand_view_uncomplete_contemporary_demand_positive`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demand_view_uncomplete_contemporary_demand_positive` AS select `demand_view_uncomplete_contemporary_demand`.`current_task_id` AS `current_task_id`,`demand_view_uncomplete_contemporary_demand`.`contemporary_task_id` AS `contemporary_task_id`,`demand_view_uncomplete_contemporary_demand`.`subtask_id` AS `subtask_id`,`demand_view_uncomplete_contemporary_demand`.`subtask_starting_demand` AS `subtask_starting_demand`,`demand_view_uncomplete_contemporary_demand`.`subtask_success_count` AS `subtask_success_count`,`demand_view_uncomplete_contemporary_demand`.`subtask_success_count_total` AS `subtask_success_count_total`,`demand_view_uncomplete_contemporary_demand`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`demand_view_uncomplete_contemporary_demand`.`subtask_task_id` AS `subtask_task_id`,`demand_view_uncomplete_contemporary_demand`.`subtask_super_id` AS `subtask_super_id`,`demand_view_uncomplete_contemporary_demand`.`subtask_name` AS `subtask_name`,`demand_view_uncomplete_contemporary_demand`.`subtask_category_id` AS `subtask_category_id`,`demand_view_uncomplete_contemporary_demand`.`subtask_base_value` AS `subtask_base_value`,`demand_view_uncomplete_contemporary_demand`.`subtask_max_value` AS `subtask_max_value`,`demand_view_uncomplete_contemporary_demand`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`demand_view_uncomplete_contemporary_demand`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`demand_view_uncomplete_contemporary_demand`.`subtask_description` AS `subtask_description`,`demand_view_uncomplete_contemporary_demand`.`subtask_url` AS `subtask_url`,`demand_view_uncomplete_contemporary_demand`.`subtask_accumulative` AS `subtask_accumulative`,`demand_view_uncomplete_contemporary_demand`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`demand_view_uncomplete_contemporary_demand`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`demand_view_uncomplete_contemporary_demand`.`subtask_category_name` AS `subtask_category_name`,`demand_view_uncomplete_contemporary_demand`.`subtask_category_class` AS `subtask_category_class`,`demand_view_uncomplete_contemporary_demand`.`subtask_category_description` AS `subtask_category_description`,`demand_view_uncomplete_contemporary_demand`.`contemporary_demand` AS `contemporary_demand`,(case when (`demand_view_uncomplete_contemporary_demand`.`contemporary_demand` <= 0) then 0 else `demand_view_uncomplete_contemporary_demand`.`contemporary_demand` end) AS `contemporary_demand_positive` from `demand_view_uncomplete_contemporary_demand`;

-- --------------------------------------------------------

--
-- Structure for view `dream_scoring`
--
DROP TABLE IF EXISTS `dream_scoring`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dream_scoring` AS select `successful_subtask_task_with_calculated_scoring`.`dream_id` AS `dream_id`,sum(`successful_subtask_task_with_calculated_scoring`.`final_value_truncate`) AS `final_value_truncate` from `successful_subtask_task_with_calculated_scoring` group by `successful_subtask_task_with_calculated_scoring`.`dream_id`;

-- --------------------------------------------------------

--
-- Structure for view `dream_type_id`
--
DROP TABLE IF EXISTS `dream_type_id`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dream_type_id` AS select `subtask_dream`.`dream_id` AS `dream_id`,max(`dream_type`.`id`) AS `dream_type_id` from (`dream_types` `dream_type` join `subtask_dreams` `subtask_dream` on((`subtask_dream`.`subtask_id` = `dream_type`.`id`))) group by `subtask_dream`.`dream_id`;

-- --------------------------------------------------------

--
-- Structure for view `dream_with_type`
--
DROP TABLE IF EXISTS `dream_with_type`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dream_with_type` AS select `dream`.`participant_id` AS `participant_id`,`dream`.`id` AS `dream_id`,`dream`.`dream_timestamp` AS `dream_timestamp`,`dream_type_id`.`dream_type_id` AS `dream_type_id`,`dream_type`.`dream_type_name` AS `dream_type_name`,`dream_type`.`dream_type_short_name` AS `dream_type_short_name`,`dream_scoring`.`final_value_truncate` AS `final_value_truncate`,`task`.`id` AS `task_id`,`task`.`task_title` AS `task_title` from (((((`participants` `participant` join `dreams` `dream` on((`participant`.`id` = `dream`.`participant_id`))) left join `dream_type_id` on((`dream`.`id` = `dream_type_id`.`dream_id`))) left join `dream_types` `dream_type` on((`dream_type_id`.`dream_type_id` = `dream_type`.`id`))) join `dream_scoring` on((`dream`.`id` = `dream_scoring`.`dream_id`))) join `tasks` `task` on((`task`.`id` = (select min(`taskmax`.`id`) AS `id` from `tasks` `taskmax` where ((`taskmax`.`task_start` < `dream`.`dream_timestamp`) and (`taskmax`.`task_expiration` >= `dream`.`dream_timestamp`)))))) order by `dream`.`dream_timestamp`;

-- --------------------------------------------------------

--
-- Structure for view `dream_with_type_participant`
--
DROP TABLE IF EXISTS `dream_with_type_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dream_with_type_participant` AS select `dream_with_type`.`participant_id` AS `participant_id`,`participant`.`participant_name` AS `participant_name`,`dream_with_type`.`dream_id` AS `dream_id`,`dream_with_type`.`dream_timestamp` AS `dream_timestamp`,`dream_with_type`.`dream_type_id` AS `dream_type_id`,`dream_with_type`.`dream_type_name` AS `dream_type_name`,`dream_with_type`.`dream_type_short_name` AS `dream_type_short_name`,`dream_with_type`.`final_value_truncate` AS `final_value_truncate`,`dream_with_type`.`task_id` AS `task_id`,`dream_with_type`.`task_title` AS `task_title` from (`dream_with_type` join `participants` `participant` on((`dream_with_type`.`participant_id` = `participant`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `recent_successes`
--
DROP TABLE IF EXISTS `recent_successes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `recent_successes` AS select concat('d',`successful_subtask_task_with_calculated_scoring`.`dream_id`,'s',`successful_subtask_task_with_calculated_scoring`.`subtask_id`) AS `id`,`participant`.`participant_name` AS `participant_name`,`dream_type`.`dream_type_short_name` AS `dream_type_short_name`,`successful_subtask_task_with_calculated_scoring`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring`.`dream_id` AS `dream_id`,`successful_subtask_task_with_calculated_scoring`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task_with_calculated_scoring`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task_with_calculated_scoring`.`dream_url` AS `dream_url`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task_with_calculated_scoring`.`subtask_id` AS `subtask_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_name` AS `subtask_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task_with_calculated_scoring`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_description` AS `subtask_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_url` AS `subtask_url`,`successful_subtask_task_with_calculated_scoring`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task_with_calculated_scoring`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_success_count` AS `subtask_success_count`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand` AS `contemporary_demand`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`successful_subtask_task_with_calculated_scoring`.`inner_function` AS `inner_function`,`successful_subtask_task_with_calculated_scoring`.`external_function` AS `external_function`,truncate(`successful_subtask_task_with_calculated_scoring`.`final_value`,2) AS `final_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_dividend_rate` AS `subtask_dividend_rate` from ((`participants` `participant` join `successful_subtask_task_with_calculated_scoring` on((`participant`.`id` = `successful_subtask_task_with_calculated_scoring`.`participant_id`))) left join `dream_types` `dream_type` on((`successful_subtask_task_with_calculated_scoring`.`dream_type_id` = `dream_type`.`id`))) order by `successful_subtask_task_with_calculated_scoring`.`dream_timestamp` desc;

-- --------------------------------------------------------

--
-- Structure for view `scores`
--
DROP TABLE IF EXISTS `scores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `scores` AS select count(0) AS `position`,`a`.`participant_id` AS `participant_id`,`a`.`participant_name` AS `participant`,`a`.`subtask_success_count_participant_total` AS `successful_subtasks`,`a`.`final_value_avg` AS `average_subtask_value`,truncate(`a`.`final_value_total`,2) AS `total_subtask_value`,`a`.`dividend_count_participant_total` AS `dividend_successes`,`a`.`final_dividend_value_avg` AS `average_dividend_value`,`a`.`final_dividend_value_total` AS `total_dividends`,truncate(`a`.`final_value_total_with_dividends`,2) AS `total_score` from (`score_view_complete_participant` `a` join `score_view_complete_participant` `b`) where ((`a`.`final_value_total_with_dividends` < `b`.`final_value_total_with_dividends`) or (`a`.`participant_id` = `b`.`participant_id`)) group by `a`.`participant_id`,`a`.`subtask_success_count_participant_total`,`a`.`final_value_avg`,`a`.`final_value_total`,`a`.`dividend_count_participant_total`,`a`.`final_dividend_value_avg`,`a`.`final_dividend_value_total`,`a`.`final_value_total_with_dividends` order by `a`.`final_value_total_with_dividends` desc;

-- --------------------------------------------------------

--
-- Structure for view `score_view_complete`
--
DROP TABLE IF EXISTS `score_view_complete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `score_view_complete` AS select `successful_subtask_task_with_calculated_total_complete`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_total_complete`.`subtask_success_count_sum_total` AS `subtask_success_count_sum_total`,`successful_subtask_task_with_calculated_total_complete`.`subtask_success_count_participant_total` AS `subtask_success_count_participant_total`,`successful_subtask_task_with_calculated_total_complete`.`final_value_avg` AS `final_value_avg`,`successful_subtask_task_with_calculated_total_complete`.`final_value_total` AS `final_value_total`,coalesce(`successful_subtask_dividend_calculated_total`.`subtask_success_count_sum_total`,0) AS `dividend_count_sum_total`,coalesce(`successful_subtask_dividend_calculated_total`.`subtask_success_count_participant_total`,0) AS `dividend_count_participant_total`,coalesce(`successful_subtask_dividend_calculated_total`.`final_dividend_value_avg`,0) AS `final_dividend_value_avg`,coalesce(`successful_subtask_dividend_calculated_total`.`final_dividend_value_total`,0) AS `final_dividend_value_total`,(`successful_subtask_task_with_calculated_total_complete`.`final_value_total` + coalesce(`successful_subtask_dividend_calculated_total`.`final_dividend_value_total`,0)) AS `final_value_total_with_dividends` from (`successful_subtask_task_with_calculated_total_complete` left join `successful_subtask_dividend_calculated_total` on((`successful_subtask_task_with_calculated_total_complete`.`participant_id` = `successful_subtask_dividend_calculated_total`.`participant_id`)));

-- --------------------------------------------------------

--
-- Structure for view `score_view_complete_participant`
--
DROP TABLE IF EXISTS `score_view_complete_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `score_view_complete_participant` AS select `participant`.`id` AS `participant_id`,`participant`.`participant_name` AS `participant_name`,`score_view_complete`.`subtask_success_count_sum_total` AS `subtask_success_count_sum_total`,`score_view_complete`.`subtask_success_count_participant_total` AS `subtask_success_count_participant_total`,`score_view_complete`.`final_value_avg` AS `final_value_avg`,`score_view_complete`.`final_value_total` AS `final_value_total`,`score_view_complete`.`dividend_count_sum_total` AS `dividend_count_sum_total`,`score_view_complete`.`dividend_count_participant_total` AS `dividend_count_participant_total`,`score_view_complete`.`final_dividend_value_avg` AS `final_dividend_value_avg`,`score_view_complete`.`final_dividend_value_total` AS `final_dividend_value_total`,`score_view_complete`.`final_value_total_with_dividends` AS `final_value_total_with_dividends` from (`participants` `participant` join `score_view_complete` on((`participant`.`id` = `score_view_complete`.`participant_id`)));

-- --------------------------------------------------------

--
-- Structure for view `subtask_dream_super`
--
DROP TABLE IF EXISTS `subtask_dream_super`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subtask_dream_super` AS select `child`.`id` AS `subtask_dream_attempt`,`subtask`.`subtask_super_id` AS `subtask_id`,`child`.`dream_id` AS `dream_id`,1 AS `implied_from_super_task` from ((`subtask_dreams` `child` join `subtasks` `subtask` on((`child`.`subtask_id` = `subtask`.`id`))) left join `subtask_dreams` `parent` on((`subtask`.`subtask_super_id` = `parent`.`subtask_id`))) where (`subtask`.`subtask_super_id` is not null) union select `subtask_dream`.`id` AS `subtask_dream_attempt`,`subtask_dream`.`subtask_id` AS `subtask_id`,`subtask_dream`.`dream_id` AS `dream_id`,0 AS `implied_from_super_task` from `subtask_dreams` `subtask_dream`;

-- --------------------------------------------------------

--
-- Structure for view `subtask_dream_super_name`
--
DROP TABLE IF EXISTS `subtask_dream_super_name`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subtask_dream_super_name` AS select `subtask_dream_super`.`subtask_dream_attempt` AS `subtask_dream_attempt`,`subtask_dream_super`.`subtask_id` AS `subtask_id`,`subtask_dream_super`.`dream_id` AS `dream_id`,`subtask_dream_super`.`implied_from_super_task` AS `implied_from_super_task`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`parent`.`subtask_name` AS `super_subtask_name` from ((`subtask_dream_super` join `subtasks` `subtask` on((`subtask_dream_super`.`subtask_id` = `subtask`.`id`))) left join `subtasks` `parent` on((`subtask`.`subtask_super_id` = `parent`.`id`))) order by `subtask_dream_super`.`subtask_dream_attempt` desc;

-- --------------------------------------------------------

--
-- Structure for view `subtask_share_holder`
--
DROP TABLE IF EXISTS `subtask_share_holder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subtask_share_holder` AS select concat('s',`subtask_share`.`subtask_id`,'p',`subtask_share`.`participant_id`) AS `id`,`subtask_share`.`subtask_id` AS `subtask_id`,`subtask_share`.`participant_id` AS `participant_id` from `subtask_shares` `subtask_share` union select concat('s',`subtask`.`id`,'p',`subtask`.`participant_id`) AS `id`,`subtask`.`id` AS `subtask_id`,`subtask`.`participant_id` AS `participant_id` from `subtasks` `subtask` where (`subtask`.`participant_id` is not null);

-- --------------------------------------------------------

--
-- Structure for view `subtask_share_holder_complete`
--
DROP TABLE IF EXISTS `subtask_share_holder_complete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subtask_share_holder_complete` AS select `subtask_share_holder`.`subtask_id` AS `id`,`subtask_share_holder`.`subtask_id` AS `subtask_id`,`subtask_share_holder`.`participant_id` AS `participant_id`,`subtask_subtask_category`.`task_id` AS `task_id`,`subtask_subtask_category`.`subtask_super_id` AS `subtask_super_id`,`subtask_subtask_category`.`subtask_name` AS `subtask_name`,`subtask_subtask_category`.`subtask_category_id` AS `subtask_category_id`,`subtask_subtask_category`.`subtask_base_value` AS `subtask_base_value`,`subtask_subtask_category`.`subtask_max_value` AS `subtask_max_value`,`subtask_subtask_category`.`subtask_starting_demand` AS `subtask_starting_demand`,`subtask_subtask_category`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask_subtask_category`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask_subtask_category`.`subtask_description` AS `subtask_description`,`subtask_subtask_category`.`subtask_url` AS `subtask_url`,`subtask_subtask_category`.`subtask_accumulative` AS `subtask_accumulative`,`subtask_subtask_category`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask_subtask_category`.`participant_id` AS `participant_owner`,`subtask_subtask_category`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_subtask_category`.`subtask_category_description` AS `subtask_category_description`,`subtask_subtask_category`.`subtask_image` AS `subtask_image`,`subtask_subtask_category`.`subtask_symbol` AS `subtask_symbol`,`subtask_subtask_category`.`subtask_instruction` AS `subtask_instruction`,coalesce(`subtask_share_holder_count`.`subtask_share_holder_count`,0) AS `subtask_share_holder_count` from (`subtask_subtask_category` left join (`subtask_share_holder` left join `subtask_share_holder_count` on((`subtask_share_holder`.`subtask_id` = `subtask_share_holder_count`.`subtask_id`))) on((`subtask_share_holder`.`subtask_id` = `subtask_subtask_category`.`subtask_id`)));

-- --------------------------------------------------------

--
-- Structure for view `subtask_share_holder_count`
--
DROP TABLE IF EXISTS `subtask_share_holder_count`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subtask_share_holder_count` AS select `subtask_share_holder`.`subtask_id` AS `subtask_id`,count(0) AS `subtask_share_holder_count` from `subtask_share_holder` group by `subtask_share_holder`.`subtask_id` union select `subtask`.`id` AS `subtask_id`,0 AS `subtask_share_holder_count` from `subtasks` `subtask` where (not(`subtask`.`id` in (select distinct `subtask_share_holder`.`subtask_id` from `subtask_share_holder`)));

-- --------------------------------------------------------

--
-- Structure for view `subtask_subtask_category`
--
DROP TABLE IF EXISTS `subtask_subtask_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subtask_subtask_category` AS select `subtask`.`id` AS `subtask_id`,`subtask`.`task_id` AS `task_id`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_url` AS `subtask_url`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`participant_id` AS `participant_id`,`subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask`.`subtask_image` AS `subtask_image`,`subtask`.`subtask_symbol` AS `subtask_symbol`,`subtask`.`subtask_instruction` AS `subtask_instruction`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description` from (`subtasks` `subtask` left join `subtask_categories` `subtask_category` on((`subtask`.`subtask_category_id` = `subtask_category`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask`
--
DROP TABLE IF EXISTS `successful_subtask`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask` AS select `dream`.`participant_id` AS `participant_id`,`subtask_dream_super`.`dream_id` AS `dream_id`,`dream`.`dream_timestamp` AS `dream_timestamp`,`dream_type_id`.`dream_type_id` AS `dream_type_id`,`dream`.`dream_url` AS `dream_url`,`subtask`.`id` AS `subtask_id`,`subtask`.`task_id` AS `task_id`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_url` AS `subtask_url`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`participant_id` AS `subtask_owner_participant_id`,`subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description` from ((((`subtask_dream_super` join `subtasks` `subtask` on((`subtask_dream_super`.`subtask_id` = `subtask`.`id`))) left join `subtask_categories` `subtask_category` on((`subtask`.`subtask_category_id` = `subtask_category`.`id`))) join `dreams` `dream` on((`subtask_dream_super`.`dream_id` = `dream`.`id`))) left join `dream_type_id` on((`dream`.`id` = `dream_type_id`.`dream_id`))) where (`subtask`.`subtask_accumulative` <> 0) union select `dream`.`participant_id` AS `participant_id`,min(`subtask_dream_super`.`dream_id`) AS `dream_id`,`dream`.`dream_timestamp` AS `dream_timestamp`,`dream_type_id`.`dream_type_id` AS `dream_type_id`,`dream`.`dream_url` AS `dream_url`,`subtask`.`id` AS `subtask_id`,`subtask`.`task_id` AS `task_id`,`subtask`.`subtask_super_id` AS `subtask_super_id`,`subtask`.`subtask_name` AS `subtask_name`,`subtask`.`subtask_category_id` AS `subtask_category_id`,`subtask`.`subtask_base_value` AS `subtask_base_value`,`subtask`.`subtask_max_value` AS `subtask_max_value`,`subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,`subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`subtask`.`subtask_description` AS `subtask_description`,`subtask`.`subtask_url` AS `subtask_url`,`subtask`.`subtask_accumulative` AS `subtask_accumulative`,`subtask`.`participant_id` AS `subtask_owner_participant_id`,`subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_category`.`subtask_category_name` AS `subtask_category_name`,`subtask_category`.`subtask_category_class` AS `subtask_category_class`,`subtask_category`.`subtask_category_description` AS `subtask_category_description` from ((((`subtask_dream_super` join `subtasks` `subtask` on((`subtask_dream_super`.`subtask_id` = `subtask`.`id`))) left join `subtask_categories` `subtask_category` on((`subtask`.`subtask_category_id` = `subtask_category`.`id`))) join `dreams` `dream` on((`subtask_dream_super`.`dream_id` = `dream`.`id`))) left join `dream_type_id` on((`dream`.`id` = `dream_type_id`.`dream_id`))) where (`subtask`.`subtask_accumulative` = 0) group by `dream`.`participant_id`,`subtask`.`id`,`subtask`.`task_id`,`subtask`.`subtask_super_id`,`subtask`.`subtask_name`,`subtask`.`subtask_category_id`,`subtask`.`subtask_base_value`,`subtask`.`subtask_max_value`,`subtask`.`subtask_starting_demand`,`subtask`.`subtask_inflation_rate`,`subtask`.`subtask_demand_cutoff`,`subtask`.`subtask_task_period_demand`,`subtask`.`subtask_description`,`subtask`.`subtask_url`,`subtask`.`subtask_accumulative`;

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_category`
--
DROP TABLE IF EXISTS `successful_subtask_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_category` AS select `successful_subtask`.`participant_id` AS `participant_id`,`successful_subtask`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask`.`subtask_category_description` AS `subtask_category_description`,count(0) AS `subtask_category_count` from `successful_subtask` group by `successful_subtask`.`participant_id`,`successful_subtask`.`subtask_category_id`,`successful_subtask`.`subtask_category_name`,`successful_subtask`.`subtask_category_class`,`successful_subtask`.`subtask_category_description`;

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_category_complete_final`
--
DROP TABLE IF EXISTS `successful_subtask_category_complete_final`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_category_complete_final` AS select `successful_subtask_category_complete_inner`.`participant_id` AS `participant_id`,`successful_subtask_category_complete_inner`.`subtask_category_id` AS `subtask_category_id`,sum(`successful_subtask_category_complete_inner`.`subtask_category_count`) AS `subtask_category_count_sum` from `successful_subtask_category_complete_inner` group by `successful_subtask_category_complete_inner`.`participant_id`,`successful_subtask_category_complete_inner`.`subtask_category_id`;

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_category_complete_final_minimum`
--
DROP TABLE IF EXISTS `successful_subtask_category_complete_final_minimum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_category_complete_final_minimum` AS select `successful_subtask_category_complete_final`.`participant_id` AS `participant_id`,min(`successful_subtask_category_complete_final`.`subtask_category_count_sum`) AS `subtask_category_count_sum_min` from `successful_subtask_category_complete_final` group by `successful_subtask_category_complete_final`.`participant_id`;

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_category_complete_inner`
--
DROP TABLE IF EXISTS `successful_subtask_category_complete_inner`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_category_complete_inner` AS select `successful_subtask_category`.`participant_id` AS `participant_id`,`subtask_category`.`id` AS `subtask_category_id`,`successful_subtask_category`.`subtask_category_count` AS `subtask_category_count` from (`subtask_categories` `subtask_category` join `successful_subtask_category` on((`subtask_category`.`id` = `successful_subtask_category`.`subtask_category_id`))) union select `participant`.`id` AS `participant_id`,`subtask_category`.`id` AS `subtask_category_id`,0 AS `subtask_category_count` from (`participants` `participant` join `subtask_categories` `subtask_category`);

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_dividend_calculated_subtotal`
--
DROP TABLE IF EXISTS `successful_subtask_dividend_calculated_subtotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_dividend_calculated_subtotal` AS select `successful_subtask_dividend_scores`.`participant_id` AS `participant_id`,`successful_subtask_dividend_scores`.`contemporary_task_id` AS `contemporary_task_id`,sum(`successful_subtask_dividend_scores`.`subtask_success_count`) AS `subtask_success_count_sum_subtotal`,count(0) AS `subtask_success_count_participant_subtotal`,avg(`successful_subtask_dividend_scores`.`final_dividend_value`) AS `final_dividend_value_avg`,sum(`successful_subtask_dividend_scores`.`final_dividend_value`) AS `final_dividend_value_subtotal` from `successful_subtask_dividend_scores` group by `successful_subtask_dividend_scores`.`participant_id`,`successful_subtask_dividend_scores`.`contemporary_task_id`;

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_dividend_calculated_total`
--
DROP TABLE IF EXISTS `successful_subtask_dividend_calculated_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_dividend_calculated_total` AS select `successful_subtask_dividend_scores`.`participant_id` AS `participant_id`,sum(`successful_subtask_dividend_scores`.`subtask_success_count`) AS `subtask_success_count_sum_total`,count(0) AS `subtask_success_count_participant_total`,avg(`successful_subtask_dividend_scores`.`final_dividend_value`) AS `final_dividend_value_avg`,sum(`successful_subtask_dividend_scores`.`final_dividend_value`) AS `final_dividend_value_total` from `successful_subtask_dividend_scores` group by `successful_subtask_dividend_scores`.`participant_id`;

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_dividend_scores`
--
DROP TABLE IF EXISTS `successful_subtask_dividend_scores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_dividend_scores` AS select `subtask_share_holder`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring`.`participant_id` AS `dreamer_id`,`successful_subtask_task_with_calculated_scoring`.`dream_id` AS `dream_id`,`successful_subtask_task_with_calculated_scoring`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task_with_calculated_scoring`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task_with_calculated_scoring`.`dream_url` AS `dream_url`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task_with_calculated_scoring`.`subtask_id` AS `subtask_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_name` AS `subtask_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task_with_calculated_scoring`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_description` AS `subtask_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_url` AS `subtask_url`,`successful_subtask_task_with_calculated_scoring`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task_with_calculated_scoring`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_success_count` AS `subtask_success_count`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand` AS `contemporary_demand`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`successful_subtask_task_with_calculated_scoring`.`inner_function` AS `inner_function`,`successful_subtask_task_with_calculated_scoring`.`external_function` AS `external_function`,`successful_subtask_task_with_calculated_scoring`.`final_value` AS `final_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`subtask_share_holder_count`.`subtask_share_holder_count` AS `subtask_share_holder_count`,(((`successful_subtask_task_with_calculated_scoring`.`final_value` * `successful_subtask_task_with_calculated_scoring`.`subtask_dividend_rate`) / 100) / `subtask_share_holder_count`.`subtask_share_holder_count`) AS `final_dividend_value` from ((`subtask_share_holder` join `successful_subtask_task_with_calculated_scoring` on((`subtask_share_holder`.`subtask_id` = `successful_subtask_task_with_calculated_scoring`.`subtask_id`))) join `subtask_share_holder_count` on((`subtask_share_holder`.`subtask_id` = `subtask_share_holder_count`.`subtask_id`))) where (`subtask_share_holder_count`.`subtask_share_holder_count` > 0);

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_task`
--
DROP TABLE IF EXISTS `successful_subtask_task`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_task` AS select `successful_subtask`.`participant_id` AS `participant_id`,`successful_subtask`.`dream_id` AS `dream_id`,`successful_subtask`.`dream_type_id` AS `dream_type_id`,`successful_subtask`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask`.`dream_url` AS `dream_url`,`task`.`id` AS `contemporary_task_id`,`task`.`task_start` AS `contemporary_task_start`,`task`.`task_expiration` AS `contemporary_task_expiration`,`successful_subtask`.`subtask_id` AS `subtask_id`,`successful_subtask`.`task_id` AS `subtask_task_id`,`successful_subtask`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask`.`subtask_name` AS `subtask_name`,`successful_subtask`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask`.`subtask_description` AS `subtask_description`,`successful_subtask`.`subtask_url` AS `subtask_url`,`successful_subtask`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask`.`subtask_dividend_rate` AS `subtask_dividend_rate` from (`successful_subtask` join `tasks` `task` on(((`successful_subtask`.`dream_timestamp` > `task`.`task_start`) and (`successful_subtask`.`dream_timestamp` <= `task`.`task_expiration`))));

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_task_with_calculated_scoring`
--
DROP TABLE IF EXISTS `successful_subtask_task_with_calculated_scoring`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_task_with_calculated_scoring` AS select `successful_subtask_task`.`participant_id` AS `participant_id`,`successful_subtask_task`.`dream_id` AS `dream_id`,`successful_subtask_task`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task`.`dream_url` AS `dream_url`,`successful_subtask_task`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task`.`subtask_id` AS `subtask_id`,`successful_subtask_task`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task`.`subtask_name` AS `subtask_name`,`successful_subtask_task`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task`.`subtask_description` AS `subtask_description`,`successful_subtask_task`.`subtask_url` AS `subtask_url`,`successful_subtask_task`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task`.`subtask_category_description` AS `subtask_category_description`,`calculated_subtask_demand_final_value`.`subtask_success_count` AS `subtask_success_count`,`calculated_subtask_demand_final_value`.`subtask_success_count_total` AS `subtask_success_count_total`,`calculated_subtask_demand_final_value`.`contemporary_demand` AS `contemporary_demand`,`calculated_subtask_demand_final_value`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`calculated_subtask_demand_final_value`.`inner_function` AS `inner_function`,`calculated_subtask_demand_final_value`.`external_function` AS `external_function`,`calculated_subtask_demand_final_value`.`final_value` AS `final_value`,truncate(`calculated_subtask_demand_final_value`.`final_value`,2) AS `final_value_truncate`,`successful_subtask_task`.`subtask_dividend_rate` AS `subtask_dividend_rate` from (`successful_subtask_task` join `calculated_subtask_demand_final_value` on(((`successful_subtask_task`.`subtask_id` = `calculated_subtask_demand_final_value`.`subtask_id`) and (`successful_subtask_task`.`contemporary_task_id` = `calculated_subtask_demand_final_value`.`contemporary_task_id`)))) where (`successful_subtask_task`.`contemporary_task_id` = `calculated_subtask_demand_final_value`.`current_task_id`);

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_task_with_calculated_scoring_participant`
--
DROP TABLE IF EXISTS `successful_subtask_task_with_calculated_scoring_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_task_with_calculated_scoring_participant` AS select `successful_subtask_task_with_calculated_scoring`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring`.`dream_id` AS `dream_id`,`successful_subtask_task_with_calculated_scoring`.`dream_type_id` AS `dream_type_id`,`successful_subtask_task_with_calculated_scoring`.`dream_timestamp` AS `dream_timestamp`,`successful_subtask_task_with_calculated_scoring`.`dream_url` AS `dream_url`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` AS `contemporary_task_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_start` AS `contemporary_task_start`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_expiration` AS `contemporary_task_expiration`,`successful_subtask_task_with_calculated_scoring`.`subtask_id` AS `subtask_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_id` AS `subtask_task_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_super_id` AS `subtask_super_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_name` AS `subtask_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_id` AS `subtask_category_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_base_value` AS `subtask_base_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_max_value` AS `subtask_max_value`,`successful_subtask_task_with_calculated_scoring`.`subtask_starting_demand` AS `subtask_starting_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_inflation_rate` AS `subtask_inflation_rate`,`successful_subtask_task_with_calculated_scoring`.`subtask_demand_cutoff` AS `subtask_demand_cutoff`,`successful_subtask_task_with_calculated_scoring`.`subtask_task_period_demand` AS `subtask_task_period_demand`,`successful_subtask_task_with_calculated_scoring`.`subtask_description` AS `subtask_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_url` AS `subtask_url`,`successful_subtask_task_with_calculated_scoring`.`subtask_accumulative` AS `subtask_accumulative`,`successful_subtask_task_with_calculated_scoring`.`subtask_owner_participant_id` AS `subtask_owner_participant_id`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_name` AS `subtask_category_name`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_class` AS `subtask_category_class`,`successful_subtask_task_with_calculated_scoring`.`subtask_category_description` AS `subtask_category_description`,`successful_subtask_task_with_calculated_scoring`.`subtask_success_count` AS `subtask_success_count`,`successful_subtask_task_with_calculated_scoring`.`subtask_success_count_total` AS `subtask_success_count_total`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand` AS `contemporary_demand`,`successful_subtask_task_with_calculated_scoring`.`contemporary_demand_positive` AS `contemporary_demand_positive`,`successful_subtask_task_with_calculated_scoring`.`inner_function` AS `inner_function`,`successful_subtask_task_with_calculated_scoring`.`external_function` AS `external_function`,`successful_subtask_task_with_calculated_scoring`.`final_value` AS `final_value`,`successful_subtask_task_with_calculated_scoring`.`final_value_truncate` AS `final_value_truncate`,`successful_subtask_task_with_calculated_scoring`.`subtask_dividend_rate` AS `subtask_dividend_rate`,`participant`.`participant_name` AS `participant_name`,`task`.`task_title` AS `task_title` from ((`successful_subtask_task_with_calculated_scoring` join `participants` `participant` on((`successful_subtask_task_with_calculated_scoring`.`participant_id` = `participant`.`id`))) join `tasks` `task` on((`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` = `task`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_task_with_calculated_subtotal`
--
DROP TABLE IF EXISTS `successful_subtask_task_with_calculated_subtotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_task_with_calculated_subtotal` AS select `successful_subtask_task_with_calculated_scoring`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id` AS `contemporary_task_id`,sum(`successful_subtask_task_with_calculated_scoring`.`subtask_success_count`) AS `subtask_success_count_sum_subtotal`,count(0) AS `subtask_success_count_participant_subtotal`,avg(`successful_subtask_task_with_calculated_scoring`.`final_value`) AS `final_value_avg`,sum(`successful_subtask_task_with_calculated_scoring`.`final_value`) AS `final_value_subtotal` from `successful_subtask_task_with_calculated_scoring` group by `successful_subtask_task_with_calculated_scoring`.`participant_id`,`successful_subtask_task_with_calculated_scoring`.`contemporary_task_id`;

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_task_with_calculated_total`
--
DROP TABLE IF EXISTS `successful_subtask_task_with_calculated_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_task_with_calculated_total` AS select `successful_subtask_task_with_calculated_scoring`.`participant_id` AS `participant_id`,sum(`successful_subtask_task_with_calculated_scoring`.`subtask_success_count`) AS `subtask_success_count_sum_total`,count(0) AS `subtask_success_count_participant_total`,avg(`successful_subtask_task_with_calculated_scoring`.`final_value`) AS `final_value_avg`,sum(`successful_subtask_task_with_calculated_scoring`.`final_value`) AS `final_value_total` from `successful_subtask_task_with_calculated_scoring` group by `successful_subtask_task_with_calculated_scoring`.`participant_id`;

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_task_with_calculated_total_complete`
--
DROP TABLE IF EXISTS `successful_subtask_task_with_calculated_total_complete`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_task_with_calculated_total_complete` AS select `successful_subtask_task_with_calculated_total`.`participant_id` AS `participant_id`,`successful_subtask_task_with_calculated_total`.`subtask_success_count_sum_total` AS `subtask_success_count_sum_total`,`successful_subtask_task_with_calculated_total`.`subtask_success_count_participant_total` AS `subtask_success_count_participant_total`,`successful_subtask_task_with_calculated_total`.`final_value_avg` AS `final_value_avg`,`successful_subtask_task_with_calculated_total`.`final_value_total` AS `final_value_total` from `successful_subtask_task_with_calculated_total` union select `participant`.`id` AS `participant_id`,0 AS `subtask_success_count_sum_total`,0 AS `subtask_success_count_participant_total`,0 AS `final_value_avg`,0 AS `final_value_total` from `participants` `participant` where (not(`participant`.`id` in (select `successful_subtask_task_with_calculated_total`.`participant_id` from `successful_subtask_task_with_calculated_total`)));

-- --------------------------------------------------------

--
-- Structure for view `successful_subtask_task_with_calculated_total_participant`
--
DROP TABLE IF EXISTS `successful_subtask_task_with_calculated_total_participant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `successful_subtask_task_with_calculated_total_participant` AS select `participant`.`id` AS `participant_id`,`participant`.`participant_name` AS `participant`,`successful_subtask_task_with_calculated_total_complete`.`subtask_success_count_participant_total` AS `successes`,truncate(`successful_subtask_task_with_calculated_total_complete`.`final_value_total`,0) AS `score` from (`successful_subtask_task_with_calculated_total_complete` join `participants` `participant` on((`successful_subtask_task_with_calculated_total_complete`.`participant_id` = `participant`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `unexpired_task`
--
DROP TABLE IF EXISTS `unexpired_task`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `unexpired_task` AS select `current_task`.`task_id` AS `task_id`,`current_task`.`task_title` AS `task_title`,`current_task`.`task_start` AS `task_start`,`current_task`.`task_expiration` AS `task_expiration`,`current_task`.`task_text` AS `task_text`,`current_task`.`task_url` AS `task_url` from `current_task` where (now() <= `current_task`.`task_expiration`) order by `current_task`.`task_start` desc limit 1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dreams`
--
ALTER TABLE `dreams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participant_id` (`participant_id`);

--
-- Indexes for table `dream_types`
--
ALTER TABLE `dream_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subtasks`
--
ALTER TABLE `subtasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_period_id` (`task_id`),
  ADD KEY `task_super_id` (`subtask_super_id`),
  ADD KEY `subtask_category_id` (`subtask_category_id`),
  ADD KEY `participant_id` (`participant_id`),
  ADD KEY `subtask_type_id` (`subtask_type_id`);

--
-- Indexes for table `subtask_categories`
--
ALTER TABLE `subtask_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subtask_dreams`
--
ALTER TABLE `subtask_dreams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dream_subtask_subtask` (`subtask_id`),
  ADD KEY `subtask_dream_dream` (`dream_id`);

--
-- Indexes for table `subtask_shares`
--
ALTER TABLE `subtask_shares`
  ADD PRIMARY KEY (`subtask_id`,`participant_id`),
  ADD KEY `subtask_share_participant` (`participant_id`);

--
-- Indexes for table `subtask_types`
--
ALTER TABLE `subtask_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dreams`
--
ALTER TABLE `dreams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subtasks`
--
ALTER TABLE `subtasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subtask_categories`
--
ALTER TABLE `subtask_categories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subtask_dreams`
--
ALTER TABLE `subtask_dreams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dreams`
--
ALTER TABLE `dreams`
  ADD CONSTRAINT `dream_participant` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`);

--
-- Constraints for table `dream_types`
--
ALTER TABLE `dream_types`
  ADD CONSTRAINT `dream_type_subtask` FOREIGN KEY (`id`) REFERENCES `subtasks` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subtasks`
--
ALTER TABLE `subtasks`
  ADD CONSTRAINT `subtask_owner_participant_id` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`),
  ADD CONSTRAINT `subtask_subtask_category_id` FOREIGN KEY (`subtask_category_id`) REFERENCES `subtask_categories` (`id`),
  ADD CONSTRAINT `subtask_subtask_super` FOREIGN KEY (`subtask_super_id`) REFERENCES `subtasks` (`id`),
  ADD CONSTRAINT `subtask_subtask_type_id` FOREIGN KEY (`subtask_type_id`) REFERENCES `subtask_types` (`id`),
  ADD CONSTRAINT `subtask_task_id` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`);

--
-- Constraints for table `subtask_dreams`
--
ALTER TABLE `subtask_dreams`
  ADD CONSTRAINT `subtask_dream_dream` FOREIGN KEY (`dream_id`) REFERENCES `dreams` (`id`),
  ADD CONSTRAINT `subtask_dream_subtask` FOREIGN KEY (`subtask_id`) REFERENCES `subtasks` (`id`);

--
-- Constraints for table `subtask_shares`
--
ALTER TABLE `subtask_shares`
  ADD CONSTRAINT `subtask_share_participant` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`),
  ADD CONSTRAINT `subtask_share_subtask` FOREIGN KEY (`subtask_id`) REFERENCES `subtasks` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
