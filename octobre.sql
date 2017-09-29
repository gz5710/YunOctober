-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 12:48 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `octobre`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend_access_log`
--

CREATE TABLE `backend_access_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backend_access_log`
--

INSERT INTO `backend_access_log` (`id`, `user_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', '2017-09-27 13:25:57', '2017-09-27 13:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `backend_users`
--

CREATE TABLE `backend_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backend_users`
--

INSERT INTO `backend_users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `is_activated`, `activated_at`, `last_login`, `created_at`, `updated_at`, `is_superuser`) VALUES
(1, 'Bruce', 'Gong', 'admin', 'bruce.gong.tmax@gmail.com', '$2y$10$mwM.skLYFz7qkvAmvCF.a.JHZqQaLCQBiINLf8UWkM6AYX4ojWiUK', NULL, '$2y$10$ioIZb1RTU16TiR4l06kR/.WNV6KrTSb2fYmcGiUJ9kFS8lwqKPsI2', NULL, '', 1, NULL, '2017-09-27 13:25:56', '2017-09-27 13:22:11', '2017-09-27 13:25:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `backend_users_groups`
--

CREATE TABLE `backend_users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backend_users_groups`
--

INSERT INTO `backend_users_groups` (`user_id`, `user_group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_groups`
--

CREATE TABLE `backend_user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `is_new_user_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backend_user_groups`
--

INSERT INTO `backend_user_groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`, `code`, `description`, `is_new_user_default`) VALUES
(1, 'Owners', NULL, '2017-09-27 13:22:10', '2017-09-27 13:22:10', 'owners', 'Default group for website owners.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_preferences`
--

CREATE TABLE `backend_user_preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_throttle`
--

CREATE TABLE `backend_user_throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT '0',
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backend_user_throttle`
--

INSERT INTO `backend_user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `last_attempt_at`, `is_suspended`, `suspended_at`, `is_banned`, `banned_at`) VALUES
(1, 1, '::1', 0, NULL, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_theme_data`
--

CREATE TABLE `cms_theme_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` mediumtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms_theme_data`
--

INSERT INTO `cms_theme_data` (`id`, `theme`, `data`, `created_at`, `updated_at`) VALUES
(1, 'zwiebl-zwiebl_stellar', '{\"website_name\":\"HTML5UP Stellar\",\"website_author\":\"Zwiebl.xyz\",\"website_url\":\"http:\\/\\/demo.zwiebl.xyz\\/html5up_stellar\",\"description\":\"Modern and Clean One Page OctoberCMS Theme\",\"keywords\":\"october,octobercms,themes,templates,free octobercms themes\",\"load_google_fonts\":true,\"google_font_family\":\"Roboto+Slab:300,400,700|Raleway:300,300i,400,400i,700,700i\",\"load_fontawesome\":true,\"load_jQuery\":true,\"jQuery_version\":\"2.2.4\",\"load_octobercms_framework\":false,\"show_section_one\":true,\"show_section_two\":true,\"show_section_three\":true,\"show_section_four\":true,\"zw-bg-color-bg-one\":\"#a89cc8\",\"zw-bg-color-bg-two\":\"#5f4d93\",\"zw-bg-color-buttons\":\"8cc9f0\"}', '2017-09-27 13:22:13', '2017-09-27 13:22:13'),
(2, 'jtherczeg-elevator', '{\"site_name\":\"Elevator\"}', '2017-09-28 07:05:34', '2017-09-28 07:05:34'),
(3, 'jtherczeg-multi', '{\"site_name\":\"Multi\"}', '2017-09-28 07:06:45', '2017-09-28 07:06:45'),
(4, 'laratify-octobercms-octaskin', '{\"website_name\":\"Octaskin\",\"website_author\":\"Laratify\",\"website_url\":\"http:\\/\\/demo.laratify.dev\\/octobercms\\/?theme=octaskin\",\"description\":\"Free Modern and Clean OctoberCMS Theme based on Materialize CSS.\",\"keywords\":\"octaskin,laratify,october,octobercms,themes,templates,free octobercms themes\",\"load_google_fonts\":true,\"google_font_family\":\"Roboto+Slab:300,400,700|Raleway:300,300i,400,400i,700,700i\",\"load_fontawesome\":true,\"load_material_icons\":true,\"load_stroke7_icons\":true,\"load_jQuery\":true,\"jQuery_version\":\"2.2.4\",\"load_octobercms_framework\":false,\"primary_color\":\"#ff5722\",\"secondary_color\":\"#2196f3\",\"navigation_background_color\":\"#ff5722\",\"navigation_text_color\":\"#ffffff\",\"slideshow_background_color\":\"#455a64\",\"slideshow_text_color\":\"#ffffff\",\"header_background_color\":\"#37474f\",\"header_text_color\":\"#ffffff\",\"feature_background_color\":\"#ffffff\",\"feature_text_color\":\"#686868\",\"utility_background_color\":\"#eceff1\",\"utility_text_color\":\"#686868\",\"mainpage_background_color\":\"#ffffff\",\"mainpage_text_color\":\"#686868\",\"bottom_background_color\":\"#eceff1\",\"bottom_text_color\":\"#686868\",\"extension_background_color\":\"#ffffff\",\"extension_text_color\":\"#686868\",\"footer_background_color\":\"#455a64\",\"footer_text_color\":\"#b0bec5\",\"copyright_background_color\":\"#37474f\",\"copyright_text_color\":\"#78909c\",\"load_animate_css\":true,\"load_wow_js\":true,\"load_owl_carousel\":true}', '2017-09-28 07:10:33', '2017-09-28 07:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `cms_theme_logs`
--

CREATE TABLE `cms_theme_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `theme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `old_template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `old_content` longtext COLLATE utf8_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deferred_bindings`
--

CREATE TABLE `deferred_bindings` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `master_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slave_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slave_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_bind` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_10_01_000001_Db_Deferred_Bindings', 1),
('2013_10_01_000002_Db_System_Files', 1),
('2013_10_01_000003_Db_System_Plugin_Versions', 1),
('2013_10_01_000004_Db_System_Plugin_History', 1),
('2013_10_01_000005_Db_System_Settings', 1),
('2013_10_01_000006_Db_System_Parameters', 1),
('2013_10_01_000007_Db_System_Add_Disabled_Flag', 1),
('2013_10_01_000008_Db_System_Mail_Templates', 1),
('2013_10_01_000009_Db_System_Mail_Layouts', 1),
('2014_10_01_000010_Db_Jobs', 1),
('2014_10_01_000011_Db_System_Event_Logs', 1),
('2014_10_01_000012_Db_System_Request_Logs', 1),
('2014_10_01_000013_Db_System_Sessions', 1),
('2015_10_01_000014_Db_System_Mail_Layout_Rename', 1),
('2015_10_01_000015_Db_System_Add_Frozen_Flag', 1),
('2015_10_01_000016_Db_Cache', 1),
('2015_10_01_000017_Db_System_Revisions', 1),
('2015_10_01_000018_Db_FailedJobs', 1),
('2016_10_01_000019_Db_System_Plugin_History_Detail_Text', 1),
('2016_10_01_000020_Db_System_Timestamp_Fix', 1),
('2013_10_01_000001_Db_Backend_Users', 2),
('2013_10_01_000002_Db_Backend_User_Groups', 2),
('2013_10_01_000003_Db_Backend_Users_Groups', 2),
('2013_10_01_000004_Db_Backend_User_Throttle', 2),
('2014_01_04_000005_Db_Backend_User_Preferences', 2),
('2014_10_01_000006_Db_Backend_Access_Log', 2),
('2014_10_01_000007_Db_Backend_Add_Description_Field', 2),
('2015_10_01_000008_Db_Backend_Add_Superuser_Flag', 2),
('2016_10_01_000009_Db_Backend_Timestamp_Fix', 2),
('2014_10_01_000001_Db_Cms_Theme_Data', 3),
('2016_10_01_000002_Db_Cms_Timestamp_Fix', 3),
('2017_10_01_000003_Db_Cms_Theme_Logs', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_categories`
--

CREATE TABLE `rainlab_blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `nest_left` int(11) DEFAULT NULL,
  `nest_right` int(11) DEFAULT NULL,
  `nest_depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rainlab_blog_categories`
--

INSERT INTO `rainlab_blog_categories` (`id`, `name`, `slug`, `code`, `description`, `parent_id`, `nest_left`, `nest_right`, `nest_depth`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', 'uncategorized', NULL, NULL, NULL, 1, 2, 0, '2017-09-27 13:22:00', '2017-09-27 13:22:00'),
(2, '新闻', 'news', NULL, '这是专门用来放置新闻的分类', NULL, 3, 4, 0, '2017-09-27 13:34:14', '2017-09-27 13:34:17'),
(3, '活动', 'activities', NULL, '这是个专门存放活动的分类', NULL, 5, 6, 0, '2017-09-27 13:34:58', '2017-09-27 13:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_posts`
--

CREATE TABLE `rainlab_blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `content_html` longtext COLLATE utf8_unicode_ci,
  `published_at` timestamp NULL DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rainlab_blog_posts`
--

INSERT INTO `rainlab_blog_posts` (`id`, `user_id`, `title`, `slug`, `excerpt`, `content`, `content_html`, `published_at`, `published`, `created_at`, `updated_at`) VALUES
(1, NULL, 'First blog post', 'first-blog-post', 'The first ever blog post is here. It might be a good idea to update this post with some more relevant content.', 'This is your first ever **blog post**! It might be a good idea to update this post with some more relevant content.\n\nYou can edit this content by selecting **Blog** from the administration back-end menu.\n\n*Enjoy the good times!*', '<p>This is your first ever <strong>blog post</strong>! It might be a good idea to update this post with some more relevant content.</p>\n<p>You can edit this content by selecting <strong>Blog</strong> from the administration back-end menu.</p>\n<p><em>Enjoy the good times!</em></p>', '2017-09-27 13:21:59', 1, '2017-09-27 13:21:59', '2017-09-27 13:21:59'),
(2, 1, '这是第一个Post', 'first-post', '', '![t.jpg](http://localhost:81/octobre/storage/app/uploads/public/59c/bc4/9c3/59cbc49c31c99084848666.jpg)\r\n1. 这是第一个Post\r\n1. **这是第一个Post**', '<p><img src=\"http://localhost:81/octobre/storage/app/uploads/public/59c/bc4/9c3/59cbc49c31c99084848666.jpg\" alt=\"t.jpg\" /></p>\n<ol>\n<li>这是第一个Post</li>\n<li><strong>这是第一个Post</strong></li>\n</ol>', '2017-09-25 22:00:00', 1, '2017-09-27 13:33:31', '2017-09-27 13:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_blog_posts_categories`
--

CREATE TABLE `rainlab_blog_posts_categories` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rainlab_blog_posts_categories`
--

INSERT INTO `rainlab_blog_posts_categories` (`post_id`, `category_id`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_forum_channels`
--

CREATE TABLE `rainlab_forum_channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nest_left` int(11) DEFAULT NULL,
  `nest_right` int(11) DEFAULT NULL,
  `nest_depth` int(11) DEFAULT NULL,
  `count_topics` int(11) NOT NULL DEFAULT '0',
  `count_posts` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `is_moderated` tinyint(1) NOT NULL DEFAULT '0',
  `embed_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rainlab_forum_channels`
--

INSERT INTO `rainlab_forum_channels` (`id`, `parent_id`, `title`, `slug`, `description`, `nest_left`, `nest_right`, `nest_depth`, `count_topics`, `count_posts`, `created_at`, `updated_at`, `is_hidden`, `is_moderated`, `embed_code`) VALUES
(1, NULL, 'Channel Orange', 'channel-orange', 'A root level forum channel', 1, 12, 0, 0, 0, '2017-09-28 07:09:12', '2017-09-28 07:09:14', 0, 0, NULL),
(2, 1, 'Autumn Leaves', 'autumn-leaves', 'Disccusion about the season of falling leaves.', 2, 9, 1, 0, 0, '2017-09-28 07:09:13', '2017-09-28 07:09:13', 0, 0, NULL),
(3, 2, 'September', 'september', 'The start of the fall season.', 3, 4, 2, 0, 0, '2017-09-28 07:09:13', '2017-09-28 07:09:13', 0, 0, NULL),
(4, 2, 'October', 'october', 'The middle of the fall season.', 5, 6, 2, 0, 0, '2017-09-28 07:09:13', '2017-09-28 07:09:13', 0, 0, NULL),
(5, 2, 'November', 'november', 'The end of the fall season.', 7, 8, 2, 0, 0, '2017-09-28 07:09:13', '2017-09-28 07:09:13', 0, 0, NULL),
(6, 1, 'Summer Breeze', 'summer-breeze', 'Disccusion about the wind at the ocean.', 10, 11, 1, 0, 0, '2017-09-28 07:09:14', '2017-09-28 07:09:14', 0, 0, NULL),
(7, NULL, 'Channel Green', 'channel-green', 'A root level forum channel', 13, 18, 0, 0, 0, '2017-09-28 07:09:14', '2017-09-28 07:09:16', 0, 0, NULL),
(8, 7, 'Winter Snow', 'winter-snow', 'Disccusion about the frosty snow flakes.', 14, 15, 1, 0, 0, '2017-09-28 07:09:14', '2017-09-28 07:09:15', 0, 0, NULL),
(9, 7, 'Spring Trees', 'spring-trees', 'Disccusion about the blooming gardens.', 16, 17, 1, 0, 0, '2017-09-28 07:09:16', '2017-09-28 07:09:16', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_forum_members`
--

CREATE TABLE `rainlab_forum_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count_posts` int(11) NOT NULL DEFAULT '0',
  `count_topics` int(11) NOT NULL DEFAULT '0',
  `last_active_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_moderator` tinyint(1) NOT NULL DEFAULT '0',
  `is_banned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_forum_posts`
--

CREATE TABLE `rainlab_forum_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `content_html` text COLLATE utf8_unicode_ci,
  `topic_id` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED DEFAULT NULL,
  `edit_user_id` int(11) DEFAULT NULL,
  `delete_user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_forum_topics`
--

CREATE TABLE `rainlab_forum_topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `start_member_id` int(11) DEFAULT NULL,
  `last_post_id` int(11) DEFAULT NULL,
  `last_post_member_id` int(11) DEFAULT NULL,
  `last_post_at` datetime DEFAULT NULL,
  `is_private` tinyint(1) NOT NULL DEFAULT '0',
  `is_sticky` tinyint(1) NOT NULL DEFAULT '0',
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  `count_posts` int(11) NOT NULL DEFAULT '0',
  `count_views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `embed_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_forum_topic_followers`
--

CREATE TABLE `rainlab_forum_topic_followers` (
  `topic_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_user_mail_blockers`
--

CREATE TABLE `rainlab_user_mail_blockers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci,
  `last_activity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_event_logs`
--

CREATE TABLE `system_event_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `details` mediumtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_event_logs`
--

INSERT INTO `system_event_logs` (`id`, `level`, `message`, `details`, `created_at`, `updated_at`) VALUES
(1, 'error', 'Symfony\\Component\\Debug\\Exception\\FatalErrorException: Out of memory (allocated 2097152) (tried to allocate 8192 bytes) in C:\\xampp\\htdocs\\octobre\\vendor\\symfony\\yaml\\Inline.php:338\nStack trace:\n#0 {main}', NULL, '2017-09-28 08:26:25', '2017-09-28 08:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `system_files`
--

CREATE TABLE `system_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `disk_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `content_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_files`
--

INSERT INTO `system_files` (`id`, `disk_name`, `file_name`, `file_size`, `content_type`, `title`, `description`, `field`, `attachment_id`, `attachment_type`, `is_public`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, '59cbc49c31c99084848666.jpg', 't.jpg', 10375, 'image/jpeg', NULL, NULL, 'content_images', '2', 'RainLab\\Blog\\Models\\Post', 1, 1, '2017-09-27 13:32:44', '2017-09-27 13:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `system_mail_layouts`
--

CREATE TABLE `system_mail_layouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8_unicode_ci,
  `content_text` text COLLATE utf8_unicode_ci,
  `content_css` text COLLATE utf8_unicode_ci,
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_mail_layouts`
--

INSERT INTO `system_mail_layouts` (`id`, `name`, `code`, `content_html`, `content_text`, `content_css`, `is_locked`, `created_at`, `updated_at`) VALUES
(1, 'Default', 'default', '<html>\n    <head>\n        <style type=\"text/css\" media=\"screen\">\n            {{ css|raw }}\n        </style>\n    </head>\n    <body>\n        {{ content|raw }}\n    </body>\n</html>', '{{ content|raw }}', 'a, a:hover {\n    text-decoration: none;\n    color: #0862A2;\n    font-weight: bold;\n}\n\ntd, tr, th, table {\n    padding: 0px;\n    margin: 0px;\n}\n\np {\n    margin: 10px 0;\n}', 1, '2017-09-27 13:22:10', '2017-09-27 13:22:10'),
(2, 'System', 'system', '<html>\n    <head>\n        <style type=\"text/css\" media=\"screen\">\n            {{ css|raw }}\n        </style>\n    </head>\n    <body>\n        {{ content|raw }}\n        <hr />\n        <p>This is an automatic message. Please do not reply to it.</p>\n    </body>\n</html>', '{{ content|raw }}\n\n\n---\nThis is an automatic message. Please do not reply to it.', 'a, a:hover {\n    text-decoration: none;\n    color: #0862A2;\n    font-weight: bold;\n}\n\ntd, tr, th, table {\n    padding: 0px;\n    margin: 0px;\n}\n\np {\n    margin: 10px 0;\n}', 1, '2017-09-27 13:22:10', '2017-09-27 13:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `system_mail_templates`
--

CREATE TABLE `system_mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content_html` text COLLATE utf8_unicode_ci,
  `content_text` text COLLATE utf8_unicode_ci,
  `layout_id` int(11) DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_parameters`
--

CREATE TABLE `system_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_parameters`
--

INSERT INTO `system_parameters` (`id`, `namespace`, `group`, `item`, `value`) VALUES
(1, 'system', 'update', 'count', '0'),
(2, 'system', 'core', 'hash', '\"386846ebe3802c4f192625743abb3f06\"'),
(3, 'system', 'core', 'build', '\"419\"'),
(4, 'system', 'update', 'retry', '1506612358'),
(5, 'system', 'theme', 'history', '{\"jtherczeg.Multi\":\"jtherczeg-multi\",\"jtherczeg.elevator\":\"jtherczeg-elevator\",\"Laratify.octobercms-octaskin\":\"laratify-octobercms-octaskin\"}'),
(6, 'cms', 'theme', 'active', '\"laratify-octobercms-octaskin\"');

-- --------------------------------------------------------

--
-- Table structure for table `system_plugin_history`
--

CREATE TABLE `system_plugin_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_plugin_history`
--

INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`) VALUES
(1, 'October.Demo', 'comment', '1.0.1', 'First version of Demo', '2017-09-27 13:21:53'),
(2, 'RainLab.Blog', 'script', '1.0.1', 'create_posts_table.php', '2017-09-27 13:21:56'),
(3, 'RainLab.Blog', 'script', '1.0.1', 'create_categories_table.php', '2017-09-27 13:21:59'),
(4, 'RainLab.Blog', 'script', '1.0.1', 'seed_all_tables.php', '2017-09-27 13:22:00'),
(5, 'RainLab.Blog', 'comment', '1.0.1', 'Initialize plugin.', '2017-09-27 13:22:00'),
(6, 'RainLab.Blog', 'comment', '1.0.2', 'Added the processed HTML content column to the posts table.', '2017-09-27 13:22:00'),
(7, 'RainLab.Blog', 'comment', '1.0.3', 'Category component has been merged with Posts component.', '2017-09-27 13:22:00'),
(8, 'RainLab.Blog', 'comment', '1.0.4', 'Improvements to the Posts list management UI.', '2017-09-27 13:22:01'),
(9, 'RainLab.Blog', 'comment', '1.0.5', 'Removes the Author column from blog post list.', '2017-09-27 13:22:01'),
(10, 'RainLab.Blog', 'comment', '1.0.6', 'Featured images now appear in the Post component.', '2017-09-27 13:22:01'),
(11, 'RainLab.Blog', 'comment', '1.0.7', 'Added support for the Static Pages menus.', '2017-09-27 13:22:02'),
(12, 'RainLab.Blog', 'comment', '1.0.8', 'Added total posts to category list.', '2017-09-27 13:22:02'),
(13, 'RainLab.Blog', 'comment', '1.0.9', 'Added support for the Sitemap plugin.', '2017-09-27 13:22:02'),
(14, 'RainLab.Blog', 'comment', '1.0.10', 'Added permission to prevent users from seeing posts they did not create.', '2017-09-27 13:22:02'),
(15, 'RainLab.Blog', 'comment', '1.0.11', 'Deprecate \"idParam\" component property in favour of \"slug\" property.', '2017-09-27 13:22:02'),
(16, 'RainLab.Blog', 'comment', '1.0.12', 'Fixes issue where images cannot be uploaded caused by latest Markdown library.', '2017-09-27 13:22:03'),
(17, 'RainLab.Blog', 'comment', '1.0.13', 'Fixes problem with providing pages to Sitemap and Pages plugins.', '2017-09-27 13:22:03'),
(18, 'RainLab.Blog', 'comment', '1.0.14', 'Add support for CSRF protection feature added to core.', '2017-09-27 13:22:03'),
(19, 'RainLab.Blog', 'comment', '1.1.0', 'Replaced the Post editor with the new core Markdown editor.', '2017-09-27 13:22:03'),
(20, 'RainLab.Blog', 'comment', '1.1.1', 'Posts can now be imported and exported.', '2017-09-27 13:22:03'),
(21, 'RainLab.Blog', 'comment', '1.1.2', 'Posts are no longer visible if the published date has not passed.', '2017-09-27 13:22:04'),
(22, 'RainLab.Blog', 'comment', '1.1.3', 'Added a New Post shortcut button to the blog menu.', '2017-09-27 13:22:04'),
(23, 'RainLab.Blog', 'script', '1.2.0', 'categories_add_nested_fields.php', '2017-09-27 13:22:04'),
(24, 'RainLab.Blog', 'comment', '1.2.0', 'Categories now support nesting.', '2017-09-27 13:22:04'),
(25, 'RainLab.Blog', 'comment', '1.2.1', 'Post slugs now must be unique.', '2017-09-27 13:22:05'),
(26, 'RainLab.Blog', 'comment', '1.2.2', 'Fixes issue on new installs.', '2017-09-27 13:22:06'),
(27, 'RainLab.Blog', 'comment', '1.2.3', 'Minor user interface update.', '2017-09-27 13:22:06'),
(28, 'RainLab.Blog', 'script', '1.2.4', 'update_timestamp_nullable.php', '2017-09-27 13:22:07'),
(29, 'RainLab.Blog', 'comment', '1.2.4', 'Database maintenance. Updated all timestamp columns to be nullable.', '2017-09-27 13:22:07'),
(30, 'RainLab.Blog', 'comment', '1.2.5', 'Added translation support for blog posts.', '2017-09-27 13:22:07'),
(31, 'RainLab.Blog', 'comment', '1.2.6', 'The published field can now supply a time with the date.', '2017-09-27 13:22:08'),
(32, 'RainLab.Blog', 'comment', '1.2.7', 'Introduced a new RSS feed component.', '2017-09-27 13:22:08'),
(33, 'RainLab.Blog', 'comment', '1.2.8', 'Fixes issue with translated `content_html` attribute on blog posts.', '2017-09-27 13:22:08'),
(34, 'RainLab.Blog', 'comment', '1.2.9', 'Added translation support for blog categories.', '2017-09-27 13:22:09'),
(35, 'RainLab.Blog', 'comment', '1.2.10', 'Added translation support for post slugs.', '2017-09-27 13:22:09'),
(36, 'RainLab.Blog', 'comment', '1.2.11', 'Fixes bug where excerpt is not translated.', '2017-09-27 13:22:09'),
(37, 'RainLab.Blog', 'comment', '1.2.12', 'Description field added to category form.', '2017-09-27 13:22:09'),
(38, 'RainLab.Blog', 'comment', '1.2.13', 'Improved support for Static Pages menus, added a blog post and all blog posts.', '2017-09-27 13:22:09'),
(39, 'RainLab.Blog', 'comment', '1.2.14', 'Added post exception property to the post list component, useful for showing related posts.', '2017-09-27 13:22:09'),
(40, 'RainLab.Blog', 'comment', '1.2.15', 'Back-end navigation sort order updated.', '2017-09-27 13:22:09'),
(41, 'RainLab.Blog', 'comment', '1.2.16', 'Added `nextPost` and `previousPost` to the blog post component.', '2017-09-27 13:22:10'),
(42, 'RainLab.User', 'script', '1.0.1', 'create_users_table.php', '2017-09-28 07:08:50'),
(43, 'RainLab.User', 'script', '1.0.1', 'create_throttle_table.php', '2017-09-28 07:08:51'),
(44, 'RainLab.User', 'comment', '1.0.1', 'Initialize plugin.', '2017-09-28 07:08:51'),
(45, 'RainLab.User', 'comment', '1.0.2', 'Seed tables.', '2017-09-28 07:08:52'),
(46, 'RainLab.User', 'comment', '1.0.3', 'Translated hard-coded text to language strings.', '2017-09-28 07:08:52'),
(47, 'RainLab.User', 'comment', '1.0.4', 'Improvements to user-interface for Location manager.', '2017-09-28 07:08:52'),
(48, 'RainLab.User', 'comment', '1.0.5', 'Added contact details for users.', '2017-09-28 07:08:52'),
(49, 'RainLab.User', 'script', '1.0.6', 'create_mail_blockers_table.php', '2017-09-28 07:08:53'),
(50, 'RainLab.User', 'comment', '1.0.6', 'Added Mail Blocker utility so users can block specific mail templates.', '2017-09-28 07:08:53'),
(51, 'RainLab.User', 'comment', '1.0.7', 'Add back-end Settings page.', '2017-09-28 07:08:53'),
(52, 'RainLab.User', 'comment', '1.0.8', 'Updated the Settings page.', '2017-09-28 07:08:54'),
(53, 'RainLab.User', 'comment', '1.0.9', 'Adds new welcome mail message for users and administrators.', '2017-09-28 07:08:54'),
(54, 'RainLab.User', 'comment', '1.0.10', 'Adds administrator-only activation mode.', '2017-09-28 07:08:54'),
(55, 'RainLab.User', 'script', '1.0.11', 'users_add_login_column.php', '2017-09-28 07:08:56'),
(56, 'RainLab.User', 'comment', '1.0.11', 'Users now have an optional login field that defaults to the email field.', '2017-09-28 07:08:56'),
(57, 'RainLab.User', 'script', '1.0.12', 'users_rename_login_to_username.php', '2017-09-28 07:08:56'),
(58, 'RainLab.User', 'comment', '1.0.12', 'Create a dedicated setting for choosing the login mode.', '2017-09-28 07:08:56'),
(59, 'RainLab.User', 'comment', '1.0.13', 'Minor fix to the Account sign in logic.', '2017-09-28 07:08:57'),
(60, 'RainLab.User', 'comment', '1.0.14', 'Minor improvements to the code.', '2017-09-28 07:08:57'),
(61, 'RainLab.User', 'script', '1.0.15', 'users_add_surname.php', '2017-09-28 07:08:58'),
(62, 'RainLab.User', 'comment', '1.0.15', 'Adds last name column to users table (surname).', '2017-09-28 07:08:58'),
(63, 'RainLab.User', 'comment', '1.0.16', 'Require permissions for settings page too.', '2017-09-28 07:08:58'),
(64, 'RainLab.User', 'comment', '1.1.0', '!!! Profile fields and Locations have been removed.', '2017-09-28 07:08:59'),
(65, 'RainLab.User', 'script', '1.1.1', 'create_user_groups_table.php', '2017-09-28 07:09:01'),
(66, 'RainLab.User', 'script', '1.1.1', 'seed_user_groups_table.php', '2017-09-28 07:09:01'),
(67, 'RainLab.User', 'comment', '1.1.1', 'Users can now be added to groups.', '2017-09-28 07:09:01'),
(68, 'RainLab.User', 'comment', '1.1.2', 'A raw URL can now be passed as the redirect property in the Account component.', '2017-09-28 07:09:02'),
(69, 'RainLab.User', 'comment', '1.1.3', 'Adds a super user flag to the users table, reserved for future use.', '2017-09-28 07:09:02'),
(70, 'RainLab.User', 'comment', '1.1.4', 'User list can be filtered by the group they belong to.', '2017-09-28 07:09:02'),
(71, 'RainLab.User', 'comment', '1.1.5', 'Adds a new permission to hide the User settings menu item.', '2017-09-28 07:09:02'),
(72, 'RainLab.User', 'script', '1.2.0', 'users_add_deleted_at.php', '2017-09-28 07:09:03'),
(73, 'RainLab.User', 'comment', '1.2.0', 'Users can now deactivate their own accounts.', '2017-09-28 07:09:03'),
(74, 'RainLab.User', 'comment', '1.2.1', 'New feature for checking if a user is recently active/online.', '2017-09-28 07:09:03'),
(75, 'RainLab.User', 'comment', '1.2.2', 'Add bulk action button to user list.', '2017-09-28 07:09:03'),
(76, 'RainLab.User', 'comment', '1.2.3', 'Included some descriptive paragraphs in the Reset Password component markup.', '2017-09-28 07:09:03'),
(77, 'RainLab.User', 'comment', '1.2.4', 'Added a checkbox for blocking all mail sent to the user.', '2017-09-28 07:09:03'),
(78, 'RainLab.User', 'script', '1.2.5', 'update_timestamp_nullable.php', '2017-09-28 07:09:03'),
(79, 'RainLab.User', 'comment', '1.2.5', 'Database maintenance. Updated all timestamp columns to be nullable.', '2017-09-28 07:09:03'),
(80, 'RainLab.User', 'script', '1.2.6', 'users_add_last_seen.php', '2017-09-28 07:09:04'),
(81, 'RainLab.User', 'comment', '1.2.6', 'Add a dedicated last seen column for users.', '2017-09-28 07:09:04'),
(82, 'RainLab.User', 'comment', '1.2.7', 'Minor fix to user timestamp attributes.', '2017-09-28 07:09:05'),
(83, 'RainLab.User', 'comment', '1.2.8', 'Add date range filter to users list. Introduced a logout event.', '2017-09-28 07:09:05'),
(84, 'RainLab.User', 'comment', '1.2.9', 'Add invitation mail for new accounts created in the back-end.', '2017-09-28 07:09:05'),
(85, 'RainLab.User', 'script', '1.3.0', 'users_add_guest_flag.php', '2017-09-28 07:09:06'),
(86, 'RainLab.User', 'script', '1.3.0', 'users_add_superuser_flag.php', '2017-09-28 07:09:06'),
(87, 'RainLab.User', 'comment', '1.3.0', 'Introduced guest user accounts.', '2017-09-28 07:09:06'),
(88, 'RainLab.User', 'comment', '1.3.1', 'User notification variables can now be extended.', '2017-09-28 07:09:07'),
(89, 'RainLab.User', 'comment', '1.3.2', 'Minor fix to the Auth::register method.', '2017-09-28 07:09:07'),
(90, 'RainLab.User', 'comment', '1.3.3', 'Allow prevention of concurrent user sessions via the user settings.', '2017-09-28 07:09:07'),
(91, 'RainLab.User', 'comment', '1.3.4', 'Added force secure protocol property to the account component.', '2017-09-28 07:09:07'),
(92, 'RainLab.Forum', 'script', '1.0.1', 'create_channels_table.php', '2017-09-28 07:09:08'),
(93, 'RainLab.Forum', 'script', '1.0.1', 'create_posts_table.php', '2017-09-28 07:09:08'),
(94, 'RainLab.Forum', 'script', '1.0.1', 'create_topics_table.php', '2017-09-28 07:09:11'),
(95, 'RainLab.Forum', 'script', '1.0.1', 'create_members_table.php', '2017-09-28 07:09:12'),
(96, 'RainLab.Forum', 'script', '1.0.1', 'seed_all_tables.php', '2017-09-28 07:09:16'),
(97, 'RainLab.Forum', 'comment', '1.0.1', 'First version of Forum', '2017-09-28 07:09:16'),
(98, 'RainLab.Forum', 'script', '1.0.2', 'create_topic_watches_table.php', '2017-09-28 07:09:17'),
(99, 'RainLab.Forum', 'comment', '1.0.2', 'Add unread flags to topics', '2017-09-28 07:09:17'),
(100, 'RainLab.Forum', 'script', '1.0.3', 'members_add_mod_and_ban.php', '2017-09-28 07:09:18'),
(101, 'RainLab.Forum', 'comment', '1.0.3', 'Users can now be made moderators or be banned', '2017-09-28 07:09:18'),
(102, 'RainLab.Forum', 'script', '1.0.4', 'channels_add_hidden_and_moderated.php', '2017-09-28 07:09:19'),
(103, 'RainLab.Forum', 'comment', '1.0.4', 'Channels can now be hidden or moderated', '2017-09-28 07:09:19'),
(104, 'RainLab.Forum', 'script', '1.0.5', 'add_embed_code.php', '2017-09-28 07:09:20'),
(105, 'RainLab.Forum', 'comment', '1.0.5', 'Introduced topic and channel embedding', '2017-09-28 07:09:20'),
(106, 'RainLab.Forum', 'script', '1.0.6', 'create_channel_watches_table.php', '2017-09-28 07:09:21'),
(107, 'RainLab.Forum', 'comment', '1.0.6', 'Add unread flags to channels', '2017-09-28 07:09:22'),
(108, 'RainLab.Forum', 'script', '1.0.7', 'create_topic_followers_table.php', '2017-09-28 07:09:23'),
(109, 'RainLab.Forum', 'comment', '1.0.7', 'Forum members can now follow topics', '2017-09-28 07:09:23'),
(110, 'RainLab.Forum', 'comment', '1.0.8', 'Added Channel name to the Topics component view', '2017-09-28 07:09:23'),
(111, 'RainLab.Forum', 'comment', '1.0.9', 'Updated the Settings page', '2017-09-28 07:09:23'),
(112, 'RainLab.Forum', 'comment', '1.0.10', 'Users can now report spammers who can be banned by moderators.', '2017-09-28 07:09:23'),
(113, 'RainLab.Forum', 'comment', '1.0.11', 'Users can now quote other posts.', '2017-09-28 07:09:23'),
(114, 'RainLab.Forum', 'comment', '1.0.12', 'Improve support for CDN asset hosting.', '2017-09-28 07:09:24'),
(115, 'RainLab.Forum', 'comment', '1.0.13', 'Fixes a bug where channels cannot be selected in the Embed component inspector.', '2017-09-28 07:09:24'),
(116, 'RainLab.Forum', 'comment', '1.0.14', 'Improve the pagination code used in the component default markup.', '2017-09-28 07:09:24'),
(117, 'RainLab.Forum', 'comment', '1.0.15', 'When a User is deleted, their Member profile and posts is also deleted.', '2017-09-28 07:09:24'),
(118, 'RainLab.Forum', 'comment', '1.0.16', 'Posting topics is now throttled allowing 3 new topics every 15 minutes.', '2017-09-28 07:09:24'),
(119, 'RainLab.Forum', 'comment', '1.0.17', 'Update channel reorder page to new system reordering feature.', '2017-09-28 07:09:24'),
(120, 'RainLab.Forum', 'comment', '1.0.18', 'Minor fix to embed topic component.', '2017-09-28 07:09:24'),
(121, 'RainLab.Forum', 'script', '1.0.19', 'update_timestamp_nullable.php', '2017-09-28 07:09:25'),
(122, 'RainLab.Forum', 'comment', '1.0.19', 'Database maintenance. Updated all timestamp columns to be nullable.', '2017-09-28 07:09:25'),
(123, 'RainLab.Forum', 'script', '1.1.0', 'drop_watches_tables.php', '2017-09-28 07:09:27'),
(124, 'RainLab.Forum', 'comment', '1.1.0', 'Major performance enhancements', '2017-09-28 07:09:27'),
(125, 'RainLab.Forum', 'comment', '1.1.1', 'Fixes bug throwing error when a forum topic has no posts.', '2017-09-28 07:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `system_plugin_versions`
--

CREATE TABLE `system_plugin_versions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `is_frozen` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_plugin_versions`
--

INSERT INTO `system_plugin_versions` (`id`, `code`, `version`, `created_at`, `is_disabled`, `is_frozen`) VALUES
(1, 'October.Demo', '1.0.1', '2017-09-27 13:21:53', 0, 0),
(2, 'RainLab.Blog', '1.2.16', '2017-09-27 13:22:10', 0, 0),
(3, 'RainLab.User', '1.3.4', '2017-09-28 07:09:07', 0, 0),
(4, 'RainLab.Forum', '1.1.1', '2017-09-28 07:09:27', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_request_logs`
--

CREATE TABLE `system_request_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_code` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referer` text COLLATE utf8_unicode_ci,
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_revisions`
--

CREATE TABLE `system_revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cast` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `old_value` text COLLATE utf8_unicode_ci,
  `new_value` text COLLATE utf8_unicode_ci,
  `revisionable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` mediumtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `is_guest` tinyint(1) NOT NULL DEFAULT '0',
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Guest', 'guest', 'Default group for guest users.', '2017-09-28 07:09:01', '2017-09-28 07:09:01'),
(2, 'Registered', 'registered', 'Default group for registered users.', '2017-09-28 07:09:01', '2017-09-28 07:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_throttle`
--

CREATE TABLE `user_throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT '0',
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backend_access_log`
--
ALTER TABLE `backend_access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backend_users`
--
ALTER TABLE `backend_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_unique` (`login`),
  ADD UNIQUE KEY `email_unique` (`email`),
  ADD KEY `act_code_index` (`activation_code`),
  ADD KEY `reset_code_index` (`reset_password_code`);

--
-- Indexes for table `backend_users_groups`
--
ALTER TABLE `backend_users_groups`
  ADD PRIMARY KEY (`user_id`,`user_group_id`);

--
-- Indexes for table `backend_user_groups`
--
ALTER TABLE `backend_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_unique` (`name`),
  ADD KEY `code_index` (`code`);

--
-- Indexes for table `backend_user_preferences`
--
ALTER TABLE `backend_user_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_item_index` (`user_id`,`namespace`,`group`,`item`);

--
-- Indexes for table `backend_user_throttle`
--
ALTER TABLE `backend_user_throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `backend_user_throttle_user_id_index` (`user_id`),
  ADD KEY `backend_user_throttle_ip_address_index` (`ip_address`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `cms_theme_data`
--
ALTER TABLE `cms_theme_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_data_theme_index` (`theme`);

--
-- Indexes for table `cms_theme_logs`
--
ALTER TABLE `cms_theme_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_logs_type_index` (`type`),
  ADD KEY `cms_theme_logs_theme_index` (`theme`),
  ADD KEY `cms_theme_logs_user_id_index` (`user_id`);

--
-- Indexes for table `deferred_bindings`
--
ALTER TABLE `deferred_bindings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deferred_bindings_master_type_index` (`master_type`),
  ADD KEY `deferred_bindings_master_field_index` (`master_field`),
  ADD KEY `deferred_bindings_slave_type_index` (`slave_type`),
  ADD KEY `deferred_bindings_slave_id_index` (`slave_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rainlab_blog_categories`
--
ALTER TABLE `rainlab_blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_blog_categories_slug_index` (`slug`),
  ADD KEY `rainlab_blog_categories_parent_id_index` (`parent_id`);

--
-- Indexes for table `rainlab_blog_posts`
--
ALTER TABLE `rainlab_blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_blog_posts_user_id_index` (`user_id`),
  ADD KEY `rainlab_blog_posts_slug_index` (`slug`);

--
-- Indexes for table `rainlab_blog_posts_categories`
--
ALTER TABLE `rainlab_blog_posts_categories`
  ADD PRIMARY KEY (`post_id`,`category_id`);

--
-- Indexes for table `rainlab_forum_channels`
--
ALTER TABLE `rainlab_forum_channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rainlab_forum_channels_slug_unique` (`slug`),
  ADD KEY `rainlab_forum_channels_parent_id_index` (`parent_id`),
  ADD KEY `rainlab_forum_channels_embed_code_index` (`embed_code`);

--
-- Indexes for table `rainlab_forum_members`
--
ALTER TABLE `rainlab_forum_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_forum_members_user_id_index` (`user_id`),
  ADD KEY `rainlab_forum_members_count_posts_index` (`count_posts`),
  ADD KEY `rainlab_forum_members_count_topics_index` (`count_topics`),
  ADD KEY `rainlab_forum_members_last_active_at_index` (`last_active_at`),
  ADD KEY `rainlab_forum_members_is_moderator_index` (`is_moderator`);

--
-- Indexes for table `rainlab_forum_posts`
--
ALTER TABLE `rainlab_forum_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_forum_posts_topic_id_index` (`topic_id`),
  ADD KEY `rainlab_forum_posts_member_id_index` (`member_id`);

--
-- Indexes for table `rainlab_forum_topics`
--
ALTER TABLE `rainlab_forum_topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rainlab_forum_topics_slug_unique` (`slug`),
  ADD KEY `sticky_post_time` (`is_sticky`,`last_post_at`),
  ADD KEY `rainlab_forum_topics_channel_id_index` (`channel_id`),
  ADD KEY `rainlab_forum_topics_start_member_id_index` (`start_member_id`),
  ADD KEY `rainlab_forum_topics_last_post_at_index` (`last_post_at`),
  ADD KEY `rainlab_forum_topics_is_private_index` (`is_private`),
  ADD KEY `rainlab_forum_topics_is_locked_index` (`is_locked`),
  ADD KEY `rainlab_forum_topics_count_posts_index` (`count_posts`),
  ADD KEY `rainlab_forum_topics_count_views_index` (`count_views`),
  ADD KEY `rainlab_forum_topics_embed_code_index` (`embed_code`);

--
-- Indexes for table `rainlab_forum_topic_followers`
--
ALTER TABLE `rainlab_forum_topic_followers`
  ADD PRIMARY KEY (`topic_id`,`member_id`);

--
-- Indexes for table `rainlab_user_mail_blockers`
--
ALTER TABLE `rainlab_user_mail_blockers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_user_mail_blockers_email_index` (`email`),
  ADD KEY `rainlab_user_mail_blockers_template_index` (`template`),
  ADD KEY `rainlab_user_mail_blockers_user_id_index` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `system_event_logs`
--
ALTER TABLE `system_event_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_event_logs_level_index` (`level`);

--
-- Indexes for table `system_files`
--
ALTER TABLE `system_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_files_field_index` (`field`),
  ADD KEY `system_files_attachment_id_index` (`attachment_id`),
  ADD KEY `system_files_attachment_type_index` (`attachment_type`);

--
-- Indexes for table `system_mail_layouts`
--
ALTER TABLE `system_mail_layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_mail_templates`
--
ALTER TABLE `system_mail_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_mail_templates_layout_id_index` (`layout_id`);

--
-- Indexes for table `system_parameters`
--
ALTER TABLE `system_parameters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_index` (`namespace`,`group`,`item`);

--
-- Indexes for table `system_plugin_history`
--
ALTER TABLE `system_plugin_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_history_code_index` (`code`),
  ADD KEY `system_plugin_history_type_index` (`type`);

--
-- Indexes for table `system_plugin_versions`
--
ALTER TABLE `system_plugin_versions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_versions_code_index` (`code`);

--
-- Indexes for table `system_request_logs`
--
ALTER TABLE `system_request_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_revisions`
--
ALTER TABLE `system_revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`),
  ADD KEY `system_revisions_user_id_index` (`user_id`),
  ADD KEY `system_revisions_field_index` (`field`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_settings_item_index` (`item`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_login_unique` (`username`),
  ADD KEY `users_activation_code_index` (`activation_code`),
  ADD KEY `users_reset_password_code_index` (`reset_password_code`),
  ADD KEY `users_login_index` (`username`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`user_id`,`user_group_id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_groups_code_index` (`code`);

--
-- Indexes for table `user_throttle`
--
ALTER TABLE `user_throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_throttle_user_id_index` (`user_id`),
  ADD KEY `user_throttle_ip_address_index` (`ip_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backend_access_log`
--
ALTER TABLE `backend_access_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backend_users`
--
ALTER TABLE `backend_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backend_user_groups`
--
ALTER TABLE `backend_user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backend_user_preferences`
--
ALTER TABLE `backend_user_preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `backend_user_throttle`
--
ALTER TABLE `backend_user_throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_theme_data`
--
ALTER TABLE `cms_theme_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_theme_logs`
--
ALTER TABLE `cms_theme_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deferred_bindings`
--
ALTER TABLE `deferred_bindings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rainlab_blog_categories`
--
ALTER TABLE `rainlab_blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rainlab_blog_posts`
--
ALTER TABLE `rainlab_blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rainlab_forum_channels`
--
ALTER TABLE `rainlab_forum_channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rainlab_forum_members`
--
ALTER TABLE `rainlab_forum_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rainlab_forum_posts`
--
ALTER TABLE `rainlab_forum_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rainlab_forum_topics`
--
ALTER TABLE `rainlab_forum_topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rainlab_user_mail_blockers`
--
ALTER TABLE `rainlab_user_mail_blockers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_event_logs`
--
ALTER TABLE `system_event_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_files`
--
ALTER TABLE `system_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_mail_layouts`
--
ALTER TABLE `system_mail_layouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_mail_templates`
--
ALTER TABLE `system_mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_parameters`
--
ALTER TABLE `system_parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `system_plugin_history`
--
ALTER TABLE `system_plugin_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `system_plugin_versions`
--
ALTER TABLE `system_plugin_versions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `system_request_logs`
--
ALTER TABLE `system_request_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_revisions`
--
ALTER TABLE `system_revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_throttle`
--
ALTER TABLE `user_throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
