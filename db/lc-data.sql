-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2017 at 02:40 AM
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

--
-- Dumping data for table `lc60_dreams`
--

INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2000, 150, '2017-05-28 02:36:07', 'http://ld4all.com/forum/viewtopic.php?p=..');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2001, 151, '2017-05-28 02:53:55', 'http://ld4all.com/forum/viewtopic.php?p=..');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2002, 150, '2017-06-15 15:46:00', 'hi/it_is_local.');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2003, 151, '2017-06-15 16:51:00', 'LC Post.');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2005, 150, '2017-06-16 02:18:00', '');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2006, 150, '2017-06-16 05:41:00', '');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2007, 155, '2017-06-17 21:16:41', NULL);
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2008, 152, '2017-06-18 02:23:00', '');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2009, 153, '2017-06-18 02:23:00', '');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2010, 151, '2017-06-13 14:35:00', '');
INSERT INTO `lc60_dreams` (`id`, `participant_id`, `dream_timestamp`, `dream_url`) VALUES(2011, 151, '2017-06-16 14:41:00', '');

--
-- Dumping data for table `lc60_dream_types`
--

INSERT INTO `lc60_dream_types` (`id`, `dream_type_name`, `dream_type_short_name`) VALUES(1, 'Normal Dream/Non-Lucid Dream', 'ND');
INSERT INTO `lc60_dream_types` (`id`, `dream_type_name`, `dream_type_short_name`) VALUES(2, 'Normal Dream with Failed RC', 'RC-ND');
INSERT INTO `lc60_dream_types` (`id`, `dream_type_name`, `dream_type_short_name`) VALUES(3, 'Short Lucid Dream', 'S-LD');
INSERT INTO `lc60_dream_types` (`id`, `dream_type_name`, `dream_type_short_name`) VALUES(4, 'Medium Lucid Dream', 'M-LD');
INSERT INTO `lc60_dream_types` (`id`, `dream_type_name`, `dream_type_short_name`) VALUES(5, 'Long Lucid Dream', 'L-LD');
INSERT INTO `lc60_dream_types` (`id`, `dream_type_name`, `dream_type_short_name`) VALUES(6, 'Longest Lucid Dream', 'LE-LD');
INSERT INTO `lc60_dream_types` (`id`, `dream_type_name`, `dream_type_short_name`) VALUES(7, 'First Ever Lucid Dream', 'F-LD');

--
-- Dumping data for table `lc60_news`
--

INSERT INTO `lc60_news` (`id`, `title`, `description`, `url`, `content`, `image`, `publish`, `user_id`) VALUES(1, 'New1', 'Desc1', 'http://localhost:8765/news/', '1aaaaa', 'http://ld4all.com/images/logoLD4all.png', '2017-06-14 06:18:00', 1);
INSERT INTO `lc60_news` (`id`, `title`, `description`, `url`, `content`, `image`, `publish`, `user_id`) VALUES(2, 'new2', 'desc2', 'http://localhost:8765/news/add', 'future!', NULL, '2017-06-13 09:18:00', 1);
INSERT INTO `lc60_news` (`id`, `title`, `description`, `url`, `content`, `image`, `publish`, `user_id`) VALUES(3, '3title', '3desc', '', '3cont', '', '2017-06-13 07:58:00', 1);
INSERT INTO `lc60_news` (`id`, `title`, `description`, `url`, `content`, `image`, `publish`, `user_id`) VALUES(4, '4', '4', '4', '4', '', '2017-06-13 08:28:00', 1);

--
-- Dumping data for table `lc60_participants`
--

INSERT INTO `lc60_participants` (`id`, `participant_name`, `participant_dj_url`, `participant_join_url`, `participant_image_url`) VALUES(150, 'Tggtt', 'http://ld4all.com/forum/viewtopic.php?t=..', 'http://ld4all.com/forum/viewtopic.php?p=..', NULL);
INSERT INTO `lc60_participants` (`id`, `participant_name`, `participant_dj_url`, `participant_join_url`, `participant_image_url`) VALUES(151, 'Mew151', 'http://ld4all.com/forum/viewtopic.php?t=..', 'http://ld4all.com/forum/viewtopic.php?p=..', NULL);
INSERT INTO `lc60_participants` (`id`, `participant_name`, `participant_dj_url`, `participant_join_url`, `participant_image_url`) VALUES(152, 'Idler1', NULL, NULL, NULL);
INSERT INTO `lc60_participants` (`id`, `participant_name`, `participant_dj_url`, `participant_join_url`, `participant_image_url`) VALUES(153, 'Idler2', NULL, NULL, NULL);
INSERT INTO `lc60_participants` (`id`, `participant_name`, `participant_dj_url`, `participant_join_url`, `participant_image_url`) VALUES(154, 'AnotherIdler', NULL, NULL, NULL);
INSERT INTO `lc60_participants` (`id`, `participant_name`, `participant_dj_url`, `participant_join_url`, `participant_image_url`) VALUES(155, 'FirstLDer', NULL, NULL, NULL);

--
-- Dumping data for table `lc60_subtasks`
--

INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(1, 0, NULL, 'ND', 4, 0, NULL, 0, '102.0', 7, 'Normal Dream/Non-Lucid Dream', '', 1, 0, NULL, '0.0', '', 107, NULL, 3, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(2, 0, NULL, 'RC-ND', NULL, 2, NULL, 0, '102.0', 7, 'Normal Dream with Failed RC', NULL, 1, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(3, 0, NULL, 'Short-LD', NULL, 10, NULL, 0, '102.0', 7, 'Short Lucid Dream', '', 1, 0, NULL, '0.0', '', NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(4, 0, NULL, 'Medium-LD', NULL, 14, NULL, 0, '102.0', 7, 'Medium Lucid Dream', '', 1, 0, NULL, '0.0', '', NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(5, 0, NULL, 'Long-LD', NULL, 18, NULL, 0, '102.0', 7, 'Long Lucid Dream', '', 1, 0, NULL, '0.0', '', NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(6, 0, NULL, 'Longest-LD', NULL, 25, NULL, 0, '102.0', 7, 'Longest Lucid Dream', '', 1, 0, NULL, '0.0', '', NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(7, 0, NULL, 'First-LD', NULL, 30, NULL, 0, '102.0', 7, 'First Ever Lucid Dream', '', 1, 0, NULL, '0.0', '', NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(11, 0, NULL, 'DJ Entry', NULL, 2, 5, 0, '102.0', 7, NULL, NULL, 1, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(12, 0, NULL, 'Personal Goal', NULL, 50, NULL, 0, '102.0', 7, NULL, NULL, 0, 0, 150, '10.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(13, 0, NULL, '113th Monthly Quest', NULL, 75, NULL, 0, '102.0', 7, NULL, 'http://ld4all.com/forum/viewtopic.php?t=50685', 0, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(14, 0, NULL, 'Dream of LD4all Member', 1, 5, 20, 2, '102.0', 7, NULL, NULL, 1, 3, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(15, 0, NULL, 'Create any Art from Dream', NULL, 2, 20, 2, '102.0', 7, NULL, NULL, 1, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(16, 0, 15, 'Create Artwork from Dream', 2, 1, 20, 2, '102.0', 7, NULL, NULL, 1, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(17, 0, 15, 'Create Fiction from Dream', 3, 1, 20, 2, '102.0', 7, NULL, NULL, 1, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(18, 0, 15, 'Create Poetry from Dream', 4, 1, 20, 2, '102.0', 7, NULL, NULL, 1, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(19, 0, 15, 'Create Music from Dream', 5, 1, 20, 2, '102.0', 7, NULL, NULL, 1, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(20, 0, 15, 'Post Photography based on Dream or LC', 6, 1, 20, 2, '102.0', 7, NULL, NULL, 1, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(21, 0, NULL, 'Post Meme based on Dream or LC', 7, 1, 20, 2, '102.0', 7, '', '', 1, 0, NULL, '0.0', '', NULL, '', 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(22, 0, NULL, 'Successful Technique', NULL, 0, 20, 2, '102.0', 7, NULL, NULL, 0, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(23, 0, 22, 'Successful MILD', NULL, 2, 20, 2, '102.0', 7, NULL, NULL, 0, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(24, 0, 22, 'Successful WILD', NULL, 2, 20, 2, '102.0', 7, NULL, NULL, 0, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(25, 0, 22, 'Successful SSILD', NULL, 2, 20, 2, '102.0', 7, NULL, NULL, 0, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(26, 0, 22, 'Successful CALD', NULL, 2, 20, 2, '102.0', 7, NULL, NULL, 0, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(27, 0, 22, 'Successful DEILD', NULL, 2, 20, 2, '102.0', 7, NULL, NULL, 0, 0, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(28, 1, NULL, 'Sub1', 6, 10, 20, 3, '102.0', 7, NULL, NULL, 0, 4, NULL, '0.0', NULL, NULL, NULL, 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(29, 1, NULL, 'Visit a forest!', 4, 50, 60, 2, '102.0', 7, 'Blame the host!', '', 0, 0, NULL, '0.0', '', 127794, 'Nothing to see here.', 3, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(30, 1, NULL, 'Testies', 1, 20, NULL, 2, '102.0', 7, 'Win a coloring book!', '', 0, 0, NULL, '0.0', '', 128641, 'Do you like helicopters?', 1, 0);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(31, 3, NULL, 'I like Trains', NULL, 20, NULL, 0, '102.0', 7, '', '', 0, 0, NULL, '0.0', '', 128648, NULL, 17, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(32, 0, 12, 'Tggtt''s Personal Goal', NULL, 50, NULL, 0, '102.0', 7, '', '', 0, 0, NULL, '0.0', '', NULL, '', 3, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(33, 1, 12, 'Mew''s Personal Goal', NULL, 50, NULL, 0, '102.0', 7, '', '', 0, 0, NULL, '0.0', '', NULL, '', 1, 1);
INSERT INTO `lc60_subtasks` (`id`, `task_id`, `subtask_super_id`, `subtask_name`, `subtask_category_id`, `subtask_base_value`, `subtask_max_value`, `subtask_starting_demand`, `subtask_inflation_rate`, `subtask_demand_cutoff`, `subtask_description`, `subtask_url`, `subtask_accumulative`, `subtask_task_period_demand`, `participant_id`, `subtask_dividend_rate`, `subtask_image`, `subtask_symbol`, `subtask_instruction`, `subtask_type_id`, `subtask_visible`) VALUES(34, 5, NULL, 'Secret test', NULL, 5, NULL, 0, '102.0', 7, '', '', 0, 0, NULL, '0.0', '', NULL, '', 1, 1);

--
-- Dumping data for table `lc60_subtask_categories`
--

INSERT INTO `lc60_subtask_categories` (`id`, `subtask_category_name`, `subtask_category_color`, `subtask_category_class`, `subtask_category_description`) VALUES(1, 'Red', 'red', 'subtask_red', NULL);
INSERT INTO `lc60_subtask_categories` (`id`, `subtask_category_name`, `subtask_category_color`, `subtask_category_class`, `subtask_category_description`) VALUES(2, 'Orange', '#ff6600', 'subtask_orange', NULL);
INSERT INTO `lc60_subtask_categories` (`id`, `subtask_category_name`, `subtask_category_color`, `subtask_category_class`, `subtask_category_description`) VALUES(3, 'Yellow', '#ffee00', 'subtask_yellow', NULL);
INSERT INTO `lc60_subtask_categories` (`id`, `subtask_category_name`, `subtask_category_color`, `subtask_category_class`, `subtask_category_description`) VALUES(4, 'Green', 'green', 'subtask_green', NULL);
INSERT INTO `lc60_subtask_categories` (`id`, `subtask_category_name`, `subtask_category_color`, `subtask_category_class`, `subtask_category_description`) VALUES(5, 'Blue', '#0099ff', 'subtask_blue', NULL);
INSERT INTO `lc60_subtask_categories` (`id`, `subtask_category_name`, `subtask_category_color`, `subtask_category_class`, `subtask_category_description`) VALUES(6, 'Indigo', '#4400FF', 'subtask_indigo', NULL);
INSERT INTO `lc60_subtask_categories` (`id`, `subtask_category_name`, `subtask_category_color`, `subtask_category_class`, `subtask_category_description`) VALUES(7, 'Violet', '#9900FF', 'subtask_violet', NULL);

--
-- Dumping data for table `lc60_subtask_dreams`
--

INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(1, 17, 2000);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(2, 18, 2001);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(3, 12, 2001);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(4, 18, 2000);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(5, 4, 2000);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(6, 14, 2001);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(7, 1, 2001);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(8, 1, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(9, 11, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(10, 27, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(11, 12, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(12, 15, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(13, 15, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(14, 3, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(15, 17, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(16, 18, 2002);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(17, 11, 2001);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(18, 3, 2005);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(19, 11, 2005);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(20, 29, 2005);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(21, 1, 2003);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(22, 11, 2003);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(23, 14, 2005);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(25, 14, 2003);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(26, 11, 2006);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(27, 14, 2006);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(28, 4, 2006);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(29, 7, 2007);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(30, 2, 2008);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(31, 2, 2009);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(32, 4, 2010);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(33, 11, 2010);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(34, 13, 2010);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(35, 1, 2011);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(36, 11, 2011);
INSERT INTO `lc60_subtask_dreams` (`id`, `subtask_id`, `dream_id`) VALUES(37, 20, 2011);

--
-- Dumping data for table `lc60_subtask_shares`
--

INSERT INTO `lc60_subtask_shares` (`id`, `subtask_id`, `participant_id`) VALUES(1, 17, 150);
INSERT INTO `lc60_subtask_shares` (`id`, `subtask_id`, `participant_id`) VALUES(2, 21, 150);

--
-- Dumping data for table `lc60_subtask_types`
--

INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(1, 'Common');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(2, 'Special');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(3, 'Personal');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(4, 'Shared Personal');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(5, 'Technique');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(6, 'Bonus');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(11, 'Location');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(12, 'Lucid Power');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(13, 'Artistic/Creative');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(14, 'Emotional');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(15, 'Senses');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(16, 'DC Related');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(17, 'Simple Actions');
INSERT INTO `lc60_subtask_types` (`id`, `subtask_type_name`) VALUES(18, 'Hard/Uncommon Actions');

--
-- Dumping data for table `lc60_tasks`
--

INSERT INTO `lc60_tasks` (`id`, `task_title`, `task_start`, `task_expiration`, `task_text`, `task_url`, `task_image_url`) VALUES(0, 'Base', '2017-05-26 00:40:00', '2017-05-26 00:40:00', '', '', NULL);
INSERT INTO `lc60_tasks` (`id`, `task_title`, `task_start`, `task_expiration`, `task_text`, `task_url`, `task_image_url`) VALUES(1, 'Task 1: The Game', '2017-05-26 00:40:00', '2017-06-02 00:39:00', '', '', NULL);
INSERT INTO `lc60_tasks` (`id`, `task_title`, `task_start`, `task_expiration`, `task_text`, `task_url`, `task_image_url`) VALUES(2, 'Task 2: The Lose', '2017-06-02 00:39:00', '2017-06-16 05:39:00', '', '', NULL);
INSERT INTO `lc60_tasks` (`id`, `task_title`, `task_start`, `task_expiration`, `task_text`, `task_url`, `task_image_url`) VALUES(3, 'Task 3: Winning?', '2017-06-16 05:39:00', '2017-06-22 00:39:00', '', '', NULL);
INSERT INTO `lc60_tasks` (`id`, `task_title`, `task_start`, `task_expiration`, `task_text`, `task_url`, `task_image_url`) VALUES(4, 'Task 4: The World Explodes', '2017-06-22 00:39:00', '2017-06-29 00:39:00', 'Everyone loses', '', NULL);
INSERT INTO `lc60_tasks` (`id`, `task_title`, `task_start`, `task_expiration`, `task_text`, `task_url`, `task_image_url`) VALUES(5, 'Task 5: The Unknown', '2017-06-29 00:39:00', '2017-07-06 00:39:00', 'What would happen... fear!', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
