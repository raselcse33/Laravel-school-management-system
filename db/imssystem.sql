-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 05:32 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imssystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_calenders`
--

CREATE TABLE `academic_calenders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `calender_date` date DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_calenders`
--

INSERT INTO `academic_calenders` (`id`, `title`, `calender_date`, `image`, `created_at`, `updated_at`) VALUES
(1, 'A', '2018-12-15', '1544262773.pdf', '2018-12-08 03:52:53', '2018-12-08 03:52:53'),
(2, 'Academic Calender', '2018-12-08', '1544263232.pdf', '2018-12-08 04:00:32', '2018-12-08 04:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name_id` int(11) NOT NULL,
  `student_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` date NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contuct_number` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `name`, `gender`, `class_name_id`, `student_group`, `date_time`, `nationality`, `father_name`, `mother_name`, `occupation`, `present_address`, `permanent_address`, `contuct_number`, `image`, `created_at`, `updated_at`, `status`) VALUES
(1, 'MohibUllah', 'male', 1, 'common', '2018-11-01', 'Bangladeshi', 'Zamal', 'namia', 'Farmer', 'Dhaka', 'Dhaka', 172543, '1543128626.jpg', '2018-11-25 00:50:26', '2018-11-25 00:50:26', NULL),
(2, 'Mamun', 'male', 1, 'common', '2018-11-02', 'Bangladeshi', 'Zamal', 'namia', 'Farmer', 'dhaka', 'dhaka', 1728362318, '1543128626.jpg', '2018-11-25 21:07:00', '2018-11-25 21:07:00', NULL),
(3, 'ff', 'male', 1, 'common', '2018-11-01', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 1, '1543128626.jpg', '2018-11-25 21:09:28', '2018-11-25 21:09:28', NULL),
(4, 'sures', 'male', 1, 'Common', '2018-12-05', 'Bangladesh', 'rasel', 'shumona', 'Program', 'dhaka.', 'dhaka.', 1955468451, '1543128626.jpg', '2018-12-02 00:07:37', '2018-12-02 00:07:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_names`
--

CREATE TABLE `class_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `classNameEnglish` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classNameBangla` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_names`
--

INSERT INTO `class_names` (`id`, `classNameEnglish`, `classNameBangla`, `created_at`, `updated_at`, `status`) VALUES
(1, 'First', 'প্রথম', NULL, NULL, NULL),
(2, 'Second', 'দ্বিতীয়', NULL, NULL, NULL),
(3, 'Third', 'তৃতীয়', NULL, NULL, NULL),
(4, 'Fourth', 'চতুর্থ', NULL, NULL, NULL),
(5, 'Fifth', 'পঞ্চম', NULL, NULL, NULL),
(6, 'Six', 'Six', NULL, NULL, NULL),
(7, 'Seven', 'Seven', NULL, NULL, NULL),
(8, 'Eight', 'Eight', NULL, NULL, NULL),
(9, 'Nine', 'Nine', NULL, NULL, NULL),
(10, 'Ten', 'Ten', NULL, NULL, NULL),
(11, 'Eleven', 'Eleven', '2018-11-18 22:47:33', '2018-12-04 03:21:31', NULL),
(15, 'Twelve', 'Twelve', '2018-11-19 03:11:01', '2018-11-19 03:11:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `examroutines`
--

CREATE TABLE `examroutines` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examroutines`
--

INSERT INTO `examroutines` (`id`, `title`, `image`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Exam Routines', '1543993896.pdf', '2018-11-26 00:23:26', '2018-12-05 01:11:36', NULL),
(3, 'Exam Routines one', '1544247866.pdf', '2018-12-07 23:43:58', '2018-12-07 23:44:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `examName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `examName`, `created_at`, `updated_at`, `status`) VALUES
(1, '1st Term', '2018-11-13 04:58:50', '2018-11-13 04:58:50', NULL),
(2, '2nd Term', '2018-11-13 04:59:02', '2018-11-13 04:59:02', NULL),
(3, 'Final', '2018-11-13 05:43:08', '2018-11-13 05:43:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`, `status`) VALUES
(2, 'gallery one', '1543987986.jpg', '2018-11-26 12:19:03', '2019-01-15 22:56:49', 1),
(3, 'gallery', '1543256487.jpg', '2018-11-26 12:21:27', '2018-11-26 12:21:27', NULL),
(4, 'gallery', '1543256666.jpg', '2018-11-26 12:24:26', '2018-11-26 12:24:26', NULL),
(5, 'gallery', '1543256788.jpg', '2018-11-26 12:26:28', '2018-11-26 12:26:28', NULL),
(6, 'gallery', '1543256846.jpg', '2018-11-26 12:27:26', '2018-11-26 12:27:26', NULL),
(7, 'gallery', '1543256861.jpg', '2018-11-26 12:27:41', '2018-11-26 12:27:41', NULL),
(8, 'gallery', '1543256873.jpg', '2018-11-26 12:27:53', '2018-11-26 12:27:53', NULL),
(9, 'gallery', '1543256882.jpg', '2018-11-26 12:28:02', '2018-11-26 12:28:02', NULL),
(10, 'Gallery', '1544342897.jpg', '2018-12-07 23:18:39', '2019-01-15 22:52:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `groupName` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `groupName`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Common', '2018-11-17 00:47:55', '2018-11-17 00:47:55', NULL),
(2, 'Science', '2018-11-17 00:48:06', '2018-11-17 00:48:06', NULL),
(3, 'Humanities', '2018-11-17 00:48:17', '2018-11-17 00:48:17', NULL),
(4, 'Commerce', '2018-11-17 00:48:37', '2018-11-17 00:48:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `g_p_a_ranges`
--

CREATE TABLE `g_p_a_ranges` (
  `id` int(10) UNSIGNED NOT NULL,
  `markRange` int(11) DEFAULT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gpa` float(8,2) DEFAULT NULL,
  `setting_year` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `g_p_a_ranges`
--

INSERT INTO `g_p_a_ranges` (`id`, `markRange`, `grade`, `gpa`, `setting_year`, `created_at`, `updated_at`, `status`) VALUES
(9, 80, 'A+', 5.00, 2018, '2018-11-17 22:21:38', '2018-12-07 22:47:11', NULL),
(10, 70, 'A', 4.00, 2018, '2018-11-17 22:22:14', '2018-11-17 22:22:14', NULL),
(11, 60, 'A-', 3.50, 2018, '2018-11-17 22:22:31', '2018-11-17 22:22:31', NULL),
(12, 50, 'B', 3.00, 2018, '2018-11-17 22:22:58', '2018-11-17 22:22:58', NULL),
(13, 40, 'C', 2.00, 2018, '2018-11-17 22:23:11', '2018-11-17 22:23:11', NULL),
(14, 33, 'D', 1.00, 2018, '2018-11-17 22:23:26', '2018-11-17 22:23:26', NULL),
(15, 0, 'F', 0.00, 2018, '2018-11-17 22:23:56', '2018-11-17 22:23:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `join_marks`
--

CREATE TABLE `join_marks` (
  `id` int(11) NOT NULL,
  `first_subject` varchar(255) NOT NULL,
  `first_subject_code` varchar(255) DEFAULT NULL,
  `second_subject` varchar(255) NOT NULL,
  `second_subject_code` varchar(255) DEFAULT NULL,
  `new_subject` varchar(255) NOT NULL,
  `class_name_id` varchar(255) NOT NULL,
  `status` tinyint(3) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `join_marks`
--

INSERT INTO `join_marks` (`id`, `first_subject`, `first_subject_code`, `second_subject`, `second_subject_code`, `new_subject`, `class_name_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '201', '2', '202', 'Bangla', '5', 0, '2018-12-16 23:22:31', '2018-12-16 23:22:31'),
(2, '1', '201', '2', '202', 'Bangla', '6', 0, '2018-12-16 23:22:31', '2018-12-16 23:22:31'),
(3, '1', '201', '2', '202', 'Bangla', '7', 0, '2018-12-16 23:22:31', '2018-12-16 23:22:31'),
(4, '1', '201', '2', '202', 'Bangla', '8', 0, '2018-12-16 23:22:55', '2018-12-16 23:22:55'),
(5, '1', '201', '2', '202', 'Bangla', '9', 0, '2018-12-16 23:22:55', '2018-12-16 23:22:55'),
(6, '1', '201', '2', '202', 'Bangla', '10', 1, '2018-12-16 23:22:55', '2018-12-16 23:25:38'),
(7, '1', '201', '2', '202', 'Bangla', '10', 0, '2018-12-16 23:27:12', '2018-12-16 23:27:12'),
(8, '3', '203', '4', '204', 'English', '6', 0, '2018-12-17 01:47:33', '2018-12-17 01:47:33'),
(9, '3', '203', '4', '204', 'English', '7', 0, '2018-12-17 01:47:33', '2018-12-17 01:47:33'),
(10, '3', '203', '4', '204', 'English', '8', 0, '2018-12-17 01:47:34', '2018-12-17 01:47:34'),
(11, '3', '203', '4', '204', 'english', '10', 0, '2018-12-20 03:57:36', '2018-12-20 03:57:36'),
(12, '1', '201', '2', '202', 'bangla', '11', 0, '2019-01-17 00:35:29', '2019-01-17 00:35:29'),
(13, '1', '201', '2', '202', 'bangla', '15', 0, '2019-01-17 00:35:29', '2019-01-17 00:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`id`, `name`, `purpose`, `start_time`, `end_time`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ghgfhg', 'ghgh', '2018-12-05', '2018-12-10', 'fghfghfgh', '2018-12-06 03:59:37', '2018-12-06 03:59:37'),
(2, 'MohibUllah', 'Personal', '2018-12-05', '2018-12-03', 'Need Leave', '2018-12-06 04:19:02', '2018-12-06 04:19:02'),
(3, 'kamla', 'Nai', '2018-12-04', '2018-12-11', 'ok', '2018-12-06 04:21:19', '2018-12-06 04:21:19'),
(4, 'School', 'Personal', '2018-12-06', '2018-12-25', 'Please', '2018-12-08 01:36:34', '2018-12-08 01:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `managing_committees`
--

CREATE TABLE `managing_committees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `start_time` date DEFAULT NULL,
  `end_time` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managing_committees`
--

INSERT INTO `managing_committees` (`id`, `name`, `designation`, `start_time`, `end_time`, `address`, `phone`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'MohibUllah', 'President', '2018-12-12', '2018-12-17', 'Dhaka', '01729362145', '1544082840.png', 0, '2018-12-06 01:54:00', '2018-12-06 01:54:00'),
(4, 'zamal', 'Member', '2018-12-25', '2018-12-26', 'Dhaka', '01758965471', '1544091602.png', 0, '2018-12-06 04:20:02', '2018-12-06 04:20:02'),
(6, 'Zamal', 'Member', '2016-12-07', '2018-12-25', 'Dhaka', '01789632145', '1544093937.png', 0, '2018-12-06 04:58:57', '2018-12-06 04:58:57'),
(7, 'Mamun', 'Member', '2018-12-25', '2018-12-31', 'Khulna', '01752639874', '1544094272.png', 0, '2018-12-06 05:04:32', '2018-12-06 05:04:32'),
(8, 'Kuddus', 'Member', '2018-12-24', '2018-12-23', 'Khulna', '01789632145', '1544094462.png', 0, '2018-12-06 05:07:42', '2018-12-06 05:07:42'),
(9, 'Shahid', 'Member', '2018-12-08', '2018-12-19', 'Dhaka', '01234567890', '1544248892.jpg', 1, '2019-01-15 06:27:53', '2019-01-15 00:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_08_063656_create_students_table', 2),
(4, '2018_11_08_064212_create_settings_table', 2),
(5, '2018_11_09_125552_create_teachers_table', 2),
(6, '2018_11_10_043254_create_class_names_table', 2),
(7, '2018_11_10_071949_create_pages_table', 2),
(8, '2018_11_10_072843_create_subjects_table', 2),
(9, '2018_11_10_093907_create_staff_table', 2),
(10, '2018_11_10_104418_create_posts_table', 2),
(11, '2018_11_11_042725_create_student_marks_table', 2),
(12, '2018_11_13_080900_create_subject_marks_table', 3),
(13, '2018_11_14_042934_create_g_p_a_ranges_table', 4),
(14, '2018_11_14_053013_create_subject_mark_totals_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateTime` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `summary`, `content`, `image`, `dateTime`, `created_at`, `updated_at`, `status`) VALUES
(1, 'About Us', 'about-us', '<p>Education is a shining light that fills the life with which a person is regarded as a source of respect and honor in society.</p>', '<p>Coming Soon</p>', '', '2018-11-01', NULL, '2018-11-26 13:38:38', NULL),
(4, 'Academic', 'academic', '<p>Education is the main tool for the development of the country and society. Teachers of the main drivers of educational institutions. Education promotes new ideas about the spread of human mind, life and the world. And so, education improves nation as the backbone of the nation.</p>', '<p>Coming Soon</p>', '', '2018-11-01', NULL, '2018-11-26 13:35:55', NULL),
(5, 'Students', 'students', '<p>A student is primarily a person enrolled in a school or other educational institution who attends classes</p>', '<p>Coming Soon</p>', '', '2018-11-01', NULL, '2018-11-26 13:34:36', NULL),
(7, 'News', 'news', '<p>News is information about current events. This may be provided through many different media: word of mouth, printing, postal systems, broadcasting, electronic communication, or through the testimony of observers and witnesses to events.</p>', '<p>Coming Soon</p>', '', '2018-11-01', NULL, '2018-11-26 13:33:13', NULL),
(11, 'Contacts', 'contacts', '\r\nA pair of contact lenses, positioned with the concave side facing upward\r\nFile:Contact Lens Wiki 2 3.webm\r\nPutting contacts in and taking them out\r\n\r\nOne-day disposable contact lenses with blue handling tint in blister-pack packaging\r\nA contact lens, or simply contacts, is a thin lens placed directly on the surface of the eye', 'Coming Soon', '', '0000-00-00', NULL, NULL, NULL),
(13, 'Message from the Principal', 'message', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has&nbsp; &nbsp; .</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>It has survived not only five centuries, but also the leap type and scrambled it to make a type specimen book.</p>\r\n\r\n<p>It has survived not only five centuries, but also the leap type and scrambled it to make a type specimen book.</p>', '1543383178.jpg', '2018-11-01', '2018-11-26 10:13:40', '2018-12-12 03:41:57', NULL),
(14, 'Our History', 'our-history', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '1543429960.jpg', '2018-11-01', NULL, '2018-11-28 12:32:40', NULL),
(15, 'Mission & Vision', 'mission-vision', '<p>Coming Soon</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2018-11-01', NULL, '2018-11-28 11:03:54', NULL),
(16, 'Achievement & Success', 'achievement', '<p>Coming Soon</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2018-11-01', NULL, '2018-11-28 11:19:40', NULL),
(17, 'Infrastructure', 'infrastructure', '<p>Coming Soon</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2018-11-02', NULL, '2018-11-28 11:21:26', NULL),
(18, 'Virtual Campus', 'virtual-campus', '<p>Coming Soon</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '', '2018-11-01', NULL, '2018-11-28 11:21:50', NULL),
(19, 'coming-soon', 'coming-soon', 'Coming Soon', 'Coming Soon', '', '0000-00-00', NULL, NULL, NULL),
(20, 'Lorem Ipsum is simply', 'Lorem-Ipsum-is-simply', NULL, '<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543382917.jpg', '2018-11-09', '2018-11-27 23:25:34', '2018-11-27 23:28:37', NULL),
(21, 'Academic calendar', 'calendar', '<p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>', '<p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the&nbsp; I</p>', '1543633646.pdf', '2018-11-01', '2018-11-28 22:36:07', '2018-11-30 21:07:26', NULL),
(22, 'Admission Information', 'admission-information', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the in</p>', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recent</p>', NULL, '2018-11-01', '2018-11-28 22:58:17', '2018-11-28 22:58:17', NULL),
(23, 'Available Class', 'available-class', '<p>is simply dummy</p>', '<p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of</p>', NULL, '2018-11-01', '2018-11-28 23:11:41', '2018-11-28 23:11:41', NULL),
(24, 'Text Book', 'text-book', '<p>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when a</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', NULL, '2018-11-01', '2018-11-28 23:19:33', '2018-11-28 23:33:37', NULL),
(25, 'Syllabus', 'syllabus', '<p>de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard</p>', '1543633860.pdf', '2018-11-01', '2018-11-28 23:21:34', '2018-11-30 21:11:00', NULL),
(26, 'Scholarship', 'scholarship', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of th</p>', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', NULL, '2018-11-01', '2018-11-28 23:28:52', '2018-11-28 23:28:52', NULL),
(27, 'page', 'The website has been experimentally launched', '<p>The website has been experimentally launched</p>', '<p>The website has been experimentally launched</p>', NULL, '2018-12-13', '2018-12-02 00:40:42', '2018-12-02 00:40:42', NULL),
(28, 'laravel', 'laravel', NULL, '<p>laravel</p>', '1544252513.jpg', '2018-12-10', '2018-12-08 01:00:39', '2018-12-08 01:01:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `summary`, `content`, `image`, `type`, `dateTime`, `created_at`, `updated_at`, `status`) VALUES
(1, 'The website has been experimentally launched', 'news', '<p>The website has been experimentally launched. The website has been experimentally launched.</p>', '<p>The website has been experimentally launched. The website has been experimentally launched. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543473501.jpg', 'news', '2018-11-14', NULL, '2018-11-29 00:38:21', NULL),
(2, 'Where does it come from?', 'notice', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p>The website has been experimentally launched. The website has been experimentally launched. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543473516.jpg', 'notice', '2018-11-07', NULL, '2018-11-29 00:38:36', NULL),
(3, 'Why do we use it?', 'event', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>The website has been experimentally launched. The website has been experimentally launched. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543473492.jpg', 'event', '2018-11-01', NULL, '2018-11-29 00:38:12', NULL),
(4, 'Where can I get some?', 'publication', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p>The website has been experimentally launched. The website has been experimentally launched. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1543473534.jpg', 'publication', '2018-11-02', NULL, '2018-11-29 00:38:54', NULL),
(5, 'The standard Lorem Ipsum passage, used since the 1500s', 'lorem-spam', '<p>The standard Lorem Ipsum passage, used since the 1500s &quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>', '<p>The standard Lorem Ipsum passage, used since the 1500s &quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>', '1543473584.jpg', 'news', '2018-11-01', NULL, '2018-11-29 01:16:27', NULL),
(6, 'The website has been experimentally launched', 'The website has been experimentally launched', '<p>required</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>required</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '1543473596.jpg', 'news', '2018-11-16', '2018-11-27 22:59:04', '2018-11-29 00:39:56', NULL),
(7, '1914 translation by H. Rackham', 'Rackham', '<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how ?&quot;</p>', '<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>', NULL, 'news', '2018-11-01', '2018-11-29 03:38:45', '2018-11-29 03:38:45', NULL),
(8, 'Laravel', 'laravel', NULL, '<p>laravel</p>', '1544253773.png', 'publication,result', '2018-12-04', '2018-12-08 01:07:18', '2018-12-08 01:22:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `title`, `image`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Class Routine', '1543990991.pdf', '2018-11-26 00:22:18', '2018-12-05 00:23:11', NULL),
(3, 'Class Routine One', '1544246803.pdf', '2018-12-07 23:26:43', '2018-12-07 23:31:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section`, `created_at`, `updated_at`, `status`) VALUES
(9, 'A', '2018-12-08 04:21:38', '2018-12-07 22:21:38', NULL),
(10, 'B', '2018-11-17 00:35:36', '2018-11-17 00:35:36', NULL),
(11, 'C', '2018-11-17 00:35:42', '2018-11-17 00:35:42', NULL),
(13, 'D', '2018-11-19 03:11:22', '2018-11-19 03:11:22', NULL),
(14, 'E', '2018-12-04 09:56:23', '2018-12-04 03:56:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute_code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpo_code` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eiin` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eastablished` year(4) DEFAULT NULL,
  `class_name_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `widgetone` text COLLATE utf8mb4_unicode_ci,
  `widgettwo` text COLLATE utf8mb4_unicode_ci,
  `metakeyword` text COLLATE utf8mb4_unicode_ci,
  `metadescription` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci,
  `flag` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `signature` text COLLATE utf8mb4_unicode_ci,
  `authorurl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapurl` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `name_bangla`, `slogan`, `email`, `institute_code`, `mpo_code`, `eiin`, `address`, `phone_number`, `telephone_number`, `school_time`, `eastablished`, `class_name_id`, `description`, `widgetone`, `widgettwo`, `metakeyword`, `metadescription`, `logo`, `banner`, `flag`, `icon`, `signature`, `authorurl`, `mapurl`, `created_at`, `updated_at`) VALUES
(1, 'Udaypur High School', 'গ্রীণফিল্ড স্কুল এন্ড কলেজ', 'Education is the backbon of a Nation', 'uphs113320@gmail.com', '30323102', '30323102', 6537, 'Plot # 3, Block # C, Ave # 2, Mirpur - 10, Dhaka-1216', '01711513132', '6454578', 'Saturday-Thursday 9:0-4:30', 1950, '6,7,8,9,10', '<p>Plot # 3, Block # C, Ave # 2, Mirpur - 10, Dhaka-1216</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', 'logo1544332576.jpg', 'banner1547872352.jpg', 'flag1544336559.gif', 'icon1544241644.png', 'signature1544241644.jpg', 'www.example.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.4901071261625!2d90.36662441445613!3d23.76555569411529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a85362a885%3A0xe12a6608a04f276a!2sDhaka+Residential+Model+College!5e0!3m2!1sen!2sbd!4v1547869577430', '2018-12-07 21:55:59', '2019-01-18 22:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `slider` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `content`, `slider`, `created_at`, `updated_at`, `status`) VALUES
(9, 'Award Winning College', 'education is the backbone of a nation', '<p>Education means a form of learning in which knowledge, skills and habits are transferred from.</p>', '1543986196.jpg', '2018-11-26 09:54:47', '2019-01-15 22:40:45', 0),
(10, 'Award Winning School', 'education is the backbone of a nation', 'Education means a form of learning in which knowledge, skills and habits are transferred from', '1543247718.jpg', '2018-11-26 09:55:18', '2019-01-15 22:40:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fatherName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motherName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `villageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanaName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districtName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `father` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_village` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_post` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_thana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birdth` date DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `student_id`, `father`, `mother`, `village`, `post`, `thana`, `district`, `phone_number`, `email`, `occupation`, `image`, `guardian`, `guardian_village`, `guardian_post`, `guardian_thana`, `guardian_district`, `present_address`, `permanent_address`, `date_of_birdth`, `nationality`, `religion`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Alim', 101, 'Korim Ali', 'Henufa', NULL, NULL, NULL, NULL, '01711513132', NULL, NULL, '70115.png', NULL, NULL, NULL, NULL, NULL, 'Mura Para, Uday Pur', NULL, '2018-12-21', NULL, 'Islam', 0, '2018-12-11 00:36:30', '2019-01-11 22:02:51'),
(2, 'Rohman Mondol', 104, 'Monsur Ali', 'Halima Begum', NULL, NULL, NULL, NULL, '01718170700', NULL, NULL, '24021.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13', NULL, 'Islam', 0, '2018-12-11 00:38:46', '2019-01-11 21:49:26'),
(3, 'Humaira Sadika', 103, 'Mokhles Joarder', 'Hamida Banu', NULL, NULL, NULL, NULL, '01711513132', NULL, NULL, '44584.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-20', NULL, 'Islam', 0, '2018-12-11 04:37:46', '2018-12-11 04:37:46'),
(4, 'Aslamul Haque', 1809, 'Abdul Goni', 'Bilkis Banu', NULL, NULL, NULL, NULL, '01711513132', NULL, NULL, '32962.png', NULL, NULL, NULL, NULL, NULL, 'Dhaka', NULL, '2018-12-20', NULL, 'Islam', 0, '2018-12-18 01:35:56', '2018-12-18 01:35:56'),
(5, 'Resel', 10001, 'Noman', 'rajia', NULL, NULL, NULL, NULL, '01500000025', NULL, NULL, '17609.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-21', NULL, 'Islam', 0, '2018-12-20 03:48:40', '2018-12-20 03:48:40'),
(6, 'Redwan', 10101, 'Noman', 'rajia', NULL, NULL, NULL, NULL, '01500000004', NULL, NULL, '32303.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2003-07-16', NULL, 'Islam', 0, '2018-12-21 23:10:24', '2018-12-21 23:10:24'),
(12, 'sures', 105, 'fazlul', 'nur', NULL, NULL, NULL, NULL, '01500000004', NULL, NULL, '45530.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-09', NULL, 'Islam', 0, '2019-01-10 04:55:59', '2019-01-11 22:08:07'),
(13, 'Noman', 109, 'fazlul', 'nur', NULL, NULL, NULL, NULL, '01500000004', NULL, NULL, '41256.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2001-01-01', 'Bangladesh', 'Islam', 0, '2019-01-15 21:30:33', '2019-01-15 21:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_academics`
--

CREATE TABLE `student_academics` (
  `id` int(15) NOT NULL,
  `student_table_id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `class_id` varchar(191) NOT NULL,
  `section` varchar(30) DEFAULT NULL,
  `roll` int(15) NOT NULL,
  `study_year` year(4) NOT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_academics`
--

INSERT INTO `student_academics` (`id`, `student_table_id`, `student_id`, `class_id`, `section`, `roll`, `study_year`, `status`, `created_at`, `updated_at`) VALUES
(4, 12, 105, '6', 'A', 33, 2019, 0, '2019-01-12 04:05:03', '2019-01-11 22:05:03'),
(5, 13, 109, '5', 'A', 1, 2019, 0, '2019-01-15 21:30:33', '2019-01-15 21:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` int(11) NOT NULL,
  `studentRoll` int(11) NOT NULL,
  `classNameId` int(11) DEFAULT NULL,
  `subjectCode` int(11) NOT NULL,
  `semisterId` int(11) NOT NULL,
  `examYear` year(4) NOT NULL,
  `fullMark` int(11) DEFAULT NULL,
  `heightMark` int(11) DEFAULT NULL,
  `ca` float(10,2) DEFAULT NULL,
  `cr` float(10,2) DEFAULT NULL,
  `mcq` float(10,2) DEFAULT NULL,
  `pr` float(10,2) DEFAULT NULL,
  `ap` tinyint(3) NOT NULL DEFAULT '0',
  `subjectTotal` float(10,2) DEFAULT NULL,
  `letterGrade` varchar(255) DEFAULT NULL,
  `gpa` float(10,2) DEFAULT NULL,
  `not_effect` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

CREATE TABLE `student_subjects` (
  `id` int(15) NOT NULL,
  `student_table_id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `academic_id` int(15) DEFAULT NULL,
  `student_group` varchar(25) DEFAULT NULL,
  `religion_subject` int(11) DEFAULT NULL,
  `compulsory_subjects` varchar(30) DEFAULT NULL,
  `fourth_subject` varchar(15) DEFAULT NULL,
  `study_year` year(4) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_subjects`
--

INSERT INTO `student_subjects` (`id`, `student_table_id`, `student_id`, `academic_id`, `student_group`, `religion_subject`, `compulsory_subjects`, `fourth_subject`, `study_year`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 105, 4, 'Common', 230, NULL, NULL, 2019, 0, '2019-01-16 05:22:43', '2019-01-11 22:05:03'),
(2, 13, 109, 5, 'Common', 231, NULL, NULL, 2019, 0, '2019-01-16 05:22:40', '2019-01-15 21:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_english` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_bangla` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_code` int(11) DEFAULT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `not_effect` tinyint(3) DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_common` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_english`, `subject_bangla`, `subject_code`, `group_name`, `class_id`, `not_effect`, `summary`, `description`, `religion_subject`, `subject_common`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Bangla 1st', 'Bangla 1st', 201, '1', '9,10', NULL, NULL, NULL, NULL, NULL, '2019-01-12 23:25:35', '2019-01-12 23:25:35', 0),
(2, 'Bangla 2nd', 'Bangla 2nd', 202, '1', '9,10', NULL, NULL, NULL, NULL, NULL, '2019-01-12 23:25:57', '2019-01-12 23:25:57', 0),
(3, 'Bangla', 'Bangla', 101, '1', '6,7,8', NULL, NULL, NULL, NULL, NULL, '2019-01-12 23:26:40', '2019-01-12 23:26:40', 0),
(4, 'English 1st', 'English 1st', 203, '1', '9,10', NULL, NULL, NULL, NULL, NULL, '2019-01-12 23:27:02', '2019-01-12 23:27:02', 0),
(5, 'English 2nd', 'English 2nd', 204, '1', '9,10', NULL, NULL, NULL, NULL, NULL, '2019-01-12 23:29:52', '2019-01-12 23:29:52', 0),
(6, 'Math', 'Math', 205, '1', '6,7,8', NULL, NULL, NULL, NULL, NULL, '2019-01-12 23:30:20', '2019-01-12 23:30:20', 0),
(7, 'Islam and Moral Studies', 'Islam and Moral Studies', 230, '1', '6,7,8', NULL, NULL, NULL, '1', NULL, '2019-01-15 23:20:56', '2019-01-15 23:20:56', 0),
(8, 'Hindu and Moral Studies', 'Hindu and Moral Studies', 231, '1', '6,7,8', NULL, NULL, NULL, '1', NULL, '2019-01-15 23:21:27', '2019-01-15 23:21:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject_marks`
--

CREATE TABLE `subject_marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `subjectId` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjectCode` int(11) DEFAULT NULL,
  `full_mark` int(11) DEFAULT NULL,
  `ca` int(11) DEFAULT NULL,
  `cr` int(11) DEFAULT NULL,
  `mcq` int(11) DEFAULT NULL,
  `pr` int(11) DEFAULT NULL,
  `setting_year` year(4) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_marks`
--

INSERT INTO `subject_marks` (`id`, `subjectId`, `class_id`, `subjectCode`, `full_mark`, `ca`, `cr`, `mcq`, `pr`, `setting_year`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 201, 100, 20, 50, 30, NULL, NULL, 0, '2019-01-12 23:39:40', '2019-01-12 23:39:40'),
(2, '3', NULL, 101, 100, 25, 55, 20, NULL, NULL, 0, '2019-01-12 23:40:51', '2019-01-12 23:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contuctNumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indexNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` date NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `address`, `contuctNumber`, `emailAddress`, `level1`, `level2`, `level3`, `level4`, `nidNumber`, `indexNumber`, `dateTime`, `image`, `training`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Md Mamun', 'Dhaka', '25430381121', 'as@gmail.com', 'SSc', 'HSC', 'BBA', NULL, '44511845', '1000000', '2018-11-09', '1543464904.jpg', NULL, '2018-11-26 11:16:20', '2018-11-28 22:15:04', NULL),
(2, 'sures', 'Dhaka', '01900000000', 'teacher@email.com', 'ssc', 'hsc', 'BBA', 'Masters', '3213213312321', '001', '2018-11-17', '1543465583.jpg', 'one year', '2018-11-27 22:36:55', '2018-11-28 22:26:23', NULL),
(3, 'sures', 'Dhaka', '01900000000', 'teacher1@email.com', 'ssc', 'hsc', 'BBA', 'Masters', '3213213312321', '001', '2018-11-08', '1543464885.jpg', 'one year', '2018-11-27 22:37:15', '2018-11-28 22:14:45', NULL),
(4, 'sures', 'dhaka', '01900000000', 'teacher12@email.com', 'ssc', 'hsc', 'BBA', NULL, '12456', '001', '2018-12-08', '1544249784.jpg', NULL, '2018-12-08 00:12:25', '2018-12-08 00:16:24', 0),
(5, 'sures', 'dhaka', '01900000000', 'teacher13@email.com', 'ssc', 'hsc', 'BBA', NULL, '12456', '002', '2018-12-08', '1544249992.jpg', NULL, '2018-12-08 00:19:52', '2018-12-08 00:19:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'momtaj@gmail.com', NULL, '$2y$10$Eb8sC1qJADbO864ywEYyouBEWnmnl0YyAduqg2epF.5/G0YgzycOC', 'Ajz44dHpK8UWgCP65HjL5MH8J9e2NFRQjqxFKEaZsg5DkVz5SCAGHAyLlEui', '2018-11-12 03:36:33', '2018-11-12 03:36:33'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$Eb8sC1qJADbO864ywEYyouBEWnmnl0YyAduqg2epF.5/G0YgzycOC', '0JyIojXqTAwPXu2OXUqcejHokCBYMjjSMNVnRGyh8LQjEft5VCwsg5CRM0TA', '2018-11-12 03:36:33', '2018-11-12 03:36:33'),
(3, 'admin', 'system@gmail.com', NULL, '$2y$10$Eb8sC1qJADbO864ywEYyouBEWnmnl0YyAduqg2epF.5/G0YgzycOC', 'Ajz44dHpK8UWgCP65HjL5MH8J9e2NFRQjqxFKEaZsg5DkVz5SCAGHAyLlEui', '2018-11-12 03:36:33', '2018-11-12 03:36:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_calenders`
--
ALTER TABLE `academic_calenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_names`
--
ALTER TABLE `class_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examroutines`
--
ALTER TABLE `examroutines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_p_a_ranges`
--
ALTER TABLE `g_p_a_ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_marks`
--
ALTER TABLE `join_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managing_committees`
--
ALTER TABLE `managing_committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studentId` (`student_id`);

--
-- Indexes for table `student_academics`
--
ALTER TABLE `student_academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_subjects`
--
ALTER TABLE `student_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_marks`
--
ALTER TABLE `subject_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_calenders`
--
ALTER TABLE `academic_calenders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_names`
--
ALTER TABLE `class_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `examroutines`
--
ALTER TABLE `examroutines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `g_p_a_ranges`
--
ALTER TABLE `g_p_a_ranges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `join_marks`
--
ALTER TABLE `join_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `managing_committees`
--
ALTER TABLE `managing_committees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_academics`
--
ALTER TABLE `student_academics`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_subjects`
--
ALTER TABLE `student_subjects`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject_marks`
--
ALTER TABLE `subject_marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
