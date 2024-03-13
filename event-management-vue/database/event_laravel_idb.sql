-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 06:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_laravel_idb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$fJVrvMCtt6vKRSwjazuaneVZ5TXJ3.srdpAa8KCFpnXRe/CEiK7jq', 1, NULL, '2024-02-20 07:46:34', '2024-02-20 07:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `member` varchar(255) NOT NULL,
  `booking_price` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `event_category` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `eventtype_id` tinyint(4) DEFAULT NULL,
  `customer_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_name`, `email`, `phone_number`, `description`, `member`, `booking_price`, `payment_method`, `t_id`, `event_category`, `address`, `eventtype_id`, `customer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'khayrul Alam Rayan react', 'asdas@gmail.com', 151515, 'asdasdsad', 'asdasdas', '6229373', 'nagad', 'asdasdsad New T_ID', 'asdasd', 'asdasdasdasd', NULL, 1, 0, '2024-02-27 08:03:56', '2024-02-27 08:03:56'),
(2, 'khayrul Alam Rayan', 'superadmin@gmail.com', 19632547, 'jsjljsljsljsljsljlsjlslsj', '2500 persons', '2100393', 'bkash', 'jtjlsjlsj1254', '8', 'jlksjlsjljslsjlsjlsjj', NULL, 1, 0, '2024-02-28 04:58:08', '2024-02-28 04:58:08'),
(3, 'khayrul Alam Rayan', 'admin@gmail.com', 196345872, 'jsjljsljsljsllsjlsj', '2500 persons', '2100393', 'bkash', 'asadsad', '10', 'jlsjlsjlsjlsjlsjjs', NULL, 1, 0, '2024-02-28 05:03:34', '2024-02-28 05:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Exquisite Elevation', '2024-02-19 13:10:59', '2024-02-19 13:10:59'),
(6, 'Luxuria events', '2024-02-19 13:11:56', '2024-02-19 13:11:56'),
(7, 'Enchanted Events', '2024-02-19 13:12:20', '2024-02-19 13:12:20'),
(8, 'Exquisite Elevation', '2024-02-19 13:13:09', '2024-02-19 13:13:09'),
(9, 'Polished Events', '2024-02-19 13:13:44', '2024-02-19 13:13:44'),
(10, 'Dark Roast Events', '2024-02-19 13:13:59', '2024-02-19 13:13:59'),
(11, 'Mosaic Events', '2024-02-19 13:14:22', '2024-02-19 13:14:22'),
(12, 'Eden Springs Events', '2024-02-19 13:14:35', '2024-02-19 13:14:35'),
(13, 'River Stone Events', '2024-02-19 13:14:53', '2024-02-19 13:14:53'),
(14, 'Dancing Leaf Events', '2024-02-19 13:15:14', '2024-02-19 13:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'khayrul Alam Rayan', 'rayan@gmail.com', NULL, '$2y$12$2D1NuUz4B9BbioIkw3f9quiEZDNceQOcmQMQuSd5lAy2H/p1FdUtq', 0, NULL, '2024-02-20 07:44:12', '2024-02-20 07:44:12'),
(2, 'sadid', 'sadid@gmail.com', NULL, '$2y$12$ab/JzeNWAXin6McZb5bZMe9SNT/pcku4fpzrYtGyRylpJD6p3jqF2', 0, NULL, '2024-02-27 10:17:32', '2024-02-27 10:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'editor', 'editor@gmail.com', NULL, '$2y$12$vI9mgd7bcB609eYZDwaKweLe0oEYQyYz8VmeVX92.6mL8TVcelwdC', 1, NULL, NULL, NULL),
(4, 'valo sadid', 'sadid@gmail.com', NULL, '$2y$12$UxMWaMtzrGDPqInUsM5e9uBxjRR8JfCCbGZIrsW.ChByw4kmvNp9.', 0, NULL, NULL, NULL),
(6, 'masum', 'masum@gmail.com', NULL, '$2y$12$GZxdfyqdw9gN13FGBi71VenaSjgjDrZIWTX8lur4QGJHbclPN/S6e', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_companies`
--

CREATE TABLE `equipment_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `service_list` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_companies`
--

INSERT INTO `equipment_companies` (`id`, `company_name`, `service_list`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ABC Corporation Bangladesh', 'Beverage dispensers', 0, '2024-02-20 06:45:45', '2024-02-20 06:45:45'),
(2, 'Cliniva Limited', 'Cooking equipment', 0, '2024-02-20 06:46:14', '2024-02-20 06:46:14'),
(3, 'Icone Enterprise', 'Glassware', 0, '2024-02-20 06:47:02', '2024-02-20 06:47:02'),
(4, 'Vision MediTech', 'Lighting', 0, '2024-02-20 06:47:53', '2024-02-20 06:47:53'),
(5, 'Saic Medical Instituttion', 'Insulated beverage carriers', 0, '2024-02-20 06:48:40', '2024-02-20 06:48:40'),
(6, 'AV equipment', 'Outdoor coolers', 0, '2024-02-20 06:50:14', '2024-02-20 06:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_services`
--

CREATE TABLE `equipment_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `equipment_companies_id` tinyint(4) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `phone` int(11) NOT NULL,
  `descripation` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment_services`
--

INSERT INTO `equipment_services` (`id`, `logo`, `address`, `email`, `equipment_companies_id`, `category_id`, `phone`, `descripation`, `status`, `created_at`, `updated_at`) VALUES
(1, '1708412292.png', 'khulna', 'superadmin@gmail.com', 3, 7, 1920362514, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 0, '2024-02-20 00:58:12', '2024-02-20 00:58:12'),
(2, '1708412319.jpg', 'khulna', 'masum@gmail.com', 1, 8, 1920362514, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 0, '2024-02-20 00:58:39', '2024-02-20 00:58:39'),
(3, '1708412337.jpg', 'Comilla', 'masum@gmail.com', 1, 4, 1920362514, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 0, '2024-02-20 00:58:57', '2024-02-20 00:58:57'),
(4, '1708412422.png', 'Comilla', 'editor@gmail.com', 4, 8, 1920362514, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 0, '2024-02-20 01:00:22', '2024-02-20 01:00:22'),
(5, '1708412956.png', 'Comilla', 'masum@gmail.com', 1, 8, 1920362514, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 0, '2024-02-20 01:09:16', '2024-02-20 01:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `eventtypes`
--

CREATE TABLE `eventtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` tinyint(4) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(200) NOT NULL,
  `availibility` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventtypes`
--

INSERT INTO `eventtypes` (`id`, `categories_id`, `event_name`, `image`, `price`, `description`, `availibility`, `created_at`, `updated_at`) VALUES
(1, 6, 'Rayan Birthday', '1708413866.jpg', 12458745.00, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 1, '2024-02-20 01:24:26', '2024-02-20 01:24:26'),
(2, 7, 'Rupali Bank Event', '1708413893.jpg', 4200785.00, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 1, '2024-02-20 01:24:53', '2024-02-20 01:24:53'),
(3, 8, 'marrage ceremony', '1708413915.jpg', 12458745.00, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 1, '2024-02-20 01:25:15', '2024-02-20 01:25:15'),
(4, 9, 'marrage ceremony', '1708413947.jpg', 4582458.00, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 1, '2024-02-20 01:25:47', '2024-02-20 01:25:47'),
(5, 11, 'Annula Programme', '1708413986.jpg', 124587.00, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 1, '2024-02-20 01:26:26', '2024-02-20 01:26:26'),
(6, 12, 'masum Office together', '1708414045.jpg', 12458745.00, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 1, '2024-02-20 01:27:25', '2024-02-20 01:27:25'),
(7, 7, 'Rayan Birthday', '1708414091.jpg', 12458745.00, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 1, '2024-02-20 01:28:11', '2024-02-20 01:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `event_speakers`
--

CREATE TABLE `event_speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `speaker_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_speakers`
--

INSERT INTO `event_speakers` (`id`, `category_id`, `speaker_name`, `email`, `phone`, `facebook`, `twitter`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 7, 'Rayan', 'masum@gmail.com', 1920362514, 'rayan@gmail.com', 'rayan@twiter.com', '1708414570.jpg', 'manage evetn', '2024-02-20 01:36:10', '2024-02-20 01:36:10'),
(2, 7, 'Rayan', 'editor@gmail.com', 1920362514, 'rayan@gmail.com', 'rayan@twiter.com', '1708414604.jpg', 'arrange event', '2024-02-20 01:36:44', '2024-02-20 01:36:44'),
(3, 8, 'Rayan', 'masum@gmail.com', 1920362514, 'rayan@gmail.com', 'rayan@twiter.com', '1708414641.jpg', 'arrange event', '2024-02-20 01:37:21', '2024-02-20 01:37:21'),
(4, 8, 'kamrul', 'masum@gmail.com', 1920362514, 'rayan@gmail.com', 'rayan@twiter.com', '1708414677.jpg', 'arrange event', '2024-02-20 01:37:57', '2024-02-20 01:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `event_venues`
--

CREATE TABLE `event_venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `event_address` varchar(200) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `sponsors_id` tinyint(4) DEFAULT NULL,
  `description` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_venues`
--

INSERT INTO `event_venues` (`id`, `category_id`, `event_address`, `latitude`, `longitude`, `image`, `sponsors_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 7, 'khulna', '450 Latitude', '40 Logintude', '1708413711.jpg', 1, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', '2024-02-20 01:21:51', '2024-02-20 01:21:51'),
(2, 10, 'khulna', '450 Latitude', '40 Logintude', '1708413787.jpg', 4, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', '2024-02-20 01:23:07', '2024-02-20 01:23:07'),
(3, 10, 'khulna', '450 Latitude', '40 Logintude', '1708413810.png', 4, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', '2024-02-20 01:23:30', '2024-02-20 01:23:30'),
(4, 9, 'Comilla', '450 Latitude', '40 Logintude', '1708413831.jpg', 3, 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', '2024-02-20 01:23:51', '2024-02-20 01:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `evtemplys`
--

CREATE TABLE `evtemplys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `emply_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `working_location` varchar(150) NOT NULL,
  `joining_date` date DEFAULT NULL,
  `regained_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evtemplys`
--

INSERT INTO `evtemplys` (`id`, `categories_id`, `emply_name`, `phone`, `email`, `working_location`, `joining_date`, `regained_date`, `created_at`, `updated_at`) VALUES
(1, 8, 'Masum Hossain', 1920362514, 'masum@gmail.com', 'Dhanmondi', '2024-02-20', '2024-02-20', '2024-02-20 07:00:44', '2024-02-20 07:00:44'),
(2, 6, 'Masum Hossain', 1920362514, 'abc@gmail.com', 'Dhanmondi', '2024-02-20', '2024-02-20', '2024-02-20 07:01:19', '2024-02-20 07:01:19'),
(3, 10, 'Masum Hossain', 1920362514, 'masum@gmail.com', 'Dhanmondi', '2024-02-20', '2024-02-20', '2024-02-20 07:01:39', '2024-02-20 07:01:39'),
(4, 11, 'Masum Hossain', 1920362514, 'editor@gmail.com', 'Dhanmondi', '2024-02-20', '2024-02-20', '2024-02-20 07:02:05', '2024-02-20 07:02:05'),
(5, 13, 'Masum Hossain', 1920362514, 'masum@gmail.com', 'Dhanmondi', '2024-02-20', '2024-02-20', '2024-02-20 07:02:58', '2024-02-20 07:02:58'),
(6, 10, 'rayan alam', 1920362514, 'abc@gmail.com', 'Dhanmondi', '2024-02-20', '2024-02-20', '2024-02-20 07:03:28', '2024-02-20 07:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_04_123018_create_categories_table', 1),
(6, '2024_01_04_123108_create_products_table', 1),
(7, '2024_01_15_101805_create_editors_table', 1),
(8, '2024_01_19_051111_create_evtemplys_table', 1),
(9, '2024_01_19_181333_create_admins_table', 1),
(10, '2024_01_21_101255_create_eventtypes_table', 1),
(11, '2024_01_21_180418_create_post_blogs_table', 1),
(12, '2024_01_22_091016_create_sponsors_table', 1),
(13, '2024_01_25_052154_create_schedule_events_table', 1),
(14, '2024_01_25_123042_create_event_venues_table', 1),
(15, '2024_01_26_165759_create_event_speakers_table', 1),
(16, '2024_02_02_145953_create_volunteers_table', 1),
(17, '2024_02_03_063805_create_bookings_table', 1),
(18, '2024_02_04_115035_create_reviews_table', 1),
(19, '2024_02_05_073413_create_contacts_table', 1),
(20, '2024_02_05_172704_create_customers_table', 1),
(21, '2024_02_08_092807_create_equipment_companies_table', 1),
(22, '2024_02_08_183700_create_equipment_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_blogs`
--

CREATE TABLE `post_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` tinyint(4) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_blogs`
--

INSERT INTO `post_blogs` (`id`, `post_name`, `image`, `category_id`, `location`, `description`, `created_at`, `updated_at`) VALUES
(6, 'Rayan Birthday', '1709099547.jpg', 9, 'dhanmondi', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims to attract your intended audience and potentially attract new attendees.', '2024-02-27 23:11:49', '2024-02-27 23:52:27'),
(7, 'Alluddhin Marriage Ceremony', '1709099372.jpg', 4, 'Kawran Bazer', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims to attract your intended audience and potentially attract new attendees.', '2024-02-27 23:49:32', '2024-02-27 23:49:32'),
(8, 'Rupali Bank', '1709099444.jpg', 4, 'Mirpur,Dhaka', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims to attract your intended audience and potentially attract new attendees.', '2024-02-27 23:50:44', '2024-02-27 23:50:44'),
(9, 'Office Together', '1709099588.jpg', 4, 'New Market', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims to attract your intended audience and potentially attract new attendees.', '2024-02-27 23:53:08', '2024-02-27 23:53:08'),
(10, 'Annual Programme', '1709099678.jpg', 10, 'Jatrabari', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims to attract your intended audience and potentially attract new attendees.', '2024-02-27 23:54:38', '2024-02-27 23:54:38'),
(11, 'Mizanur Rahman', '1709099859.jpg', 4, 'Mirpur,Dhaka', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims to attract your intended audience and potentially attract new attendees.', '2024-02-27 23:55:20', '2024-02-27 23:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(600) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review_title` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `descripation` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `rating` tinyint(4) NOT NULL DEFAULT 5,
  `customer_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review_title`, `occupation`, `descripation`, `status`, `rating`, `customer_name`, `created_at`, `updated_at`) VALUES
(1, 'merriage ceremony', 'Business Man', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims', 1, 5, '', '2024-02-20 01:39:37', '2024-02-20 01:39:37'),
(2, 'Birth Day', 'Police Officer', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims', 1, 5, '', '2024-02-20 01:40:11', '2024-02-20 01:40:11'),
(3, 'office together', 'Business Man', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims', 1, 5, '', '2024-02-20 01:40:40', '2024-02-20 01:40:40'),
(4, 'Student together', 'Banker', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims', 1, 5, '', '2024-02-20 01:41:29', '2024-02-20 01:41:29'),
(5, 'Marriage Event', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims', 1, 1, '', '2024-02-20 01:42:10', '2024-02-20 01:42:10'),
(6, 'merriage ceremony', 'Govtment officer', 'An event description is a written piece that provides an overview of your event. It serves as a persuasive statement that aims', 1, 1, '', '2024-02-20 01:42:31', '2024-02-20 01:42:31'),
(7, 'Event Management', 'Businessman', 'ljsjsjsjljsljsjjsjjs', 1, 5, '', '2024-02-26 22:05:19', '2024-02-26 22:05:19'),
(8, 'Office Together', 'Businessman', 'this is important event', 1, 5, 'khayrul Alam Rayan', '2024-02-27 23:42:57', '2024-02-27 23:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_events`
--

CREATE TABLE `schedule_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_number` varchar(255) NOT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `ending_time` timestamp NULL DEFAULT NULL,
  `category_id` tinyint(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_events`
--

INSERT INTO `schedule_events` (`id`, `day_number`, `start_time`, `ending_time`, `category_id`, `title`, `created_at`, `updated_at`) VALUES
(1, '5 day', '2024-02-16 12:35:00', '2024-02-22 12:35:00', 4, 'City Group Event', '2024-02-19 06:35:57', '2024-02-19 06:35:57'),
(2, '5 day', '2024-02-24 14:41:00', '2024-02-29 12:43:00', 6, 'Akij Group Event', '2024-02-19 06:37:38', '2024-02-19 06:37:38'),
(3, '5 day', '2024-02-20 07:07:00', '2024-03-01 07:09:00', 7, 'Mass Event', '2024-02-20 01:06:04', '2024-02-20 01:06:04'),
(4, '5 day', '2024-02-20 07:07:00', '2024-03-01 07:09:00', 7, 'Bashundara Music Event', '2024-02-20 01:06:13', '2024-02-20 01:06:13'),
(5, '5 day', '2024-02-20 07:07:00', '2024-03-01 07:09:00', 8, 'Bashundara Music Event', '2024-02-20 01:06:30', '2024-02-20 01:06:30'),
(6, '5 day', '2024-02-22 11:10:00', '2024-02-29 07:15:00', 4, 'Bashundara Event', '2024-02-20 01:10:24', '2024-02-20 01:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `company_location` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `category_id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `company_name`, `logo`, `description`, `company_location`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Bashundara', '1708413216.png', 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 'Gulsan Bazer', 0, 7, '2024-02-20 01:13:36', '2024-02-20 01:13:36'),
(2, 'Khan agro Group', '1708413266.jpg', 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 'Gulsan Bazer', 0, 7, '2024-02-20 01:14:26', '2024-02-20 01:14:26'),
(3, 'Akij Group', '1708413315.jpg', 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 'Moghbazer', 0, 8, '2024-02-20 01:15:15', '2024-02-20 01:15:15'),
(4, 'Pran Company', '1708413604.png', 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 'Gulsan Bazer', 0, 7, '2024-02-20 01:20:04', '2024-02-20 01:20:04'),
(5, 'Khan agro Group', '1708413620.jpg', 'We have all of the equipment that it takes to bring your event to life. Whether you need decor items or heavy machinery, we can get you anything', 'Moghbazer', 0, 7, '2024-02-20 01:20:20', '2024-02-20 01:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$12$J/cT6jKo5bS0rem09ImOMu4UkIYSrDF.EorMTOsjqQ3/WCnaFts26', NULL, '2024-02-19 06:34:48', '2024-02-19 06:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'volunteer', 'volunteer@gmail.com', NULL, '$2y$12$hclIvo23IuXyWEJPmpG24OnoKGNHNbUUsl/0liZOpXHZ1Ulm4SGgW', 1, NULL, '2024-02-24 12:38:43', '2024-02-24 12:38:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `editors_email_unique` (`email`);

--
-- Indexes for table `equipment_companies`
--
ALTER TABLE `equipment_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_services`
--
ALTER TABLE `equipment_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventtypes`
--
ALTER TABLE `eventtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_speakers`
--
ALTER TABLE `event_speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_venues`
--
ALTER TABLE `event_venues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evtemplys`
--
ALTER TABLE `evtemplys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evtemplys_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_blogs`
--
ALTER TABLE `post_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_events`
--
ALTER TABLE `schedule_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `volunteers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipment_companies`
--
ALTER TABLE `equipment_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipment_services`
--
ALTER TABLE `equipment_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eventtypes`
--
ALTER TABLE `eventtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event_speakers`
--
ALTER TABLE `event_speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_venues`
--
ALTER TABLE `event_venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `evtemplys`
--
ALTER TABLE `evtemplys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_blogs`
--
ALTER TABLE `post_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedule_events`
--
ALTER TABLE `schedule_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evtemplys`
--
ALTER TABLE `evtemplys`
  ADD CONSTRAINT `evtemplys_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
