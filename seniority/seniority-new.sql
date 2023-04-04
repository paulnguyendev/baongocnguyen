-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2023 lúc 04:21 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `seniority`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_rgt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('licensed','non-licensed') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_suppend` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `verify_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `license_level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_root` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `agents`
--

INSERT INTO `agents` (`id`, `email`, `code`, `first_name`, `middle_name`, `last_name`, `mobile`, `username`, `status`, `password`, `token`, `thumbnail`, `qrcode`, `parent_id`, `_lft`, `_rgt`, `type`, `is_suppend`, `email_verified_at`, `deleted_at`, `verify_code`, `created_at`, `updated_at`, `license_level_id`, `is_root`) VALUES
(1, 'root.seniority@yahoo.com', 'SM999999', 'Root', 'Seniority', 'System', NULL, 'root', 'active', 'e10adc3949ba59abbe56e057f20f883e', '6d821f9d926afd05ba92ad2927a0de12', NULL, NULL, NULL, '1', '10', 'licensed', '0', NULL, NULL, NULL, '2023-02-22 00:52:15', '2023-02-23 01:11:49', NULL, '0'),
(7, 'anhnnd.hotro@gmail.com', 'SM856802', 'Nguyen Ngoc', 'Duy', 'Anh', '0932730394', 'anhnnd', 'active', 'e10adc3949ba59abbe56e057f20f883e', '65fc7eee7bbc6d231ae3cf0dc3750d4c', NULL, NULL, 1, '2', '9', 'licensed', '0', '2023-02-21 07:13:36', NULL, '636548', '2023-02-20 23:50:17', '2023-02-23 01:11:49', 2, '0'),
(10, 'anhnnd.hotro123@gmail.com', 'SM168530', 'Duy Anh', 'Nguyen', 'Ngoc', '0932732095', 'tinidev2', 'active', 'e5345451fee3d23e85ef891f9bacd2c3', '12ade91854773df7fa15f18968491498', 'default.png', NULL, 7, '3', '4', 'non-licensed', '0', NULL, NULL, NULL, '2023-02-22 23:45:51', '2023-02-23 01:11:49', 2, '0'),
(11, 'anhnnd.hotro70@gmail.com', 'SM388155', 'Nguyen', 'Duy', 'Anh', '0932730397', 'tinidev1', 'active', 'e10adc3949ba59abbe56e057f20f883e', '7c056e53ba627abde049a3f7174c342c', 'default.png', NULL, 7, '7', '8', 'licensed', '0', NULL, NULL, NULL, '2023-02-23 00:24:03', '2023-02-28 23:19:56', NULL, '0'),
(12, 'duyanh@obnlab.asia', 'SM522263', 'Nguyen', NULL, 'Paul', '0932730391', 'paulnguyen', 'pending', 'e10adc3949ba59abbe56e057f20f883e', '9d3b1387179e2fd3cab91426d398eda4', 'default.png', NULL, 7, '5', '6', 'licensed', '0', '2023-02-23 08:50:31', NULL, '332991', '2023-02-23 01:49:54', '2023-02-28 22:02:23', NULL, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `applications`
--

INSERT INTO `applications` (`id`, `email`, `code`, `first_name`, `middle_name`, `last_name`, `mobile`, `status`, `token`, `agent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(37, 'caydenHunter@gmail.com', 'SMA492359', 'Cayden', NULL, 'Hunter', '1252152152', 'closed', 'f09e814c9f14cdfd0d0fe11721b4ecec', 4, '2023-03-11 09:26:59', '2023-03-11 10:25:02', NULL),
(38, 'peyton@gmail.com', 'SMA639515', 'Peyton', NULL, 'Dixon', '1251252152', 'closed', '397418888eb24d29da23176fb78426df', 4, '2023-03-11 09:27:24', '2023-03-18 18:59:48', NULL),
(39, 'lilliana@gmail.com', 'SMA433507', 'Lilliana', NULL, 'Mcintyre', '2152151251', 'closed', 'f143eb35b1fa7d7851f907c52aedfdf5', 4, '2023-03-11 09:27:48', '2023-03-11 10:26:21', NULL),
(40, 'jazlyn@gmail.com', 'SMA415726', 'Jazlyn', NULL, 'Terry', '1251251251', 'closed', '8713ce15d9d2f733fa8a7f64fab624f2', 11, '2023-03-11 10:08:43', '2023-03-19 02:34:01', NULL),
(41, 'jovan@gmail.com', 'SMA426317', 'Jovan', NULL, 'Mcneil', '1252155125', 'closed', 'e2bbd36b2cb154dc2a247bc6ccab0874', 4, '2023-03-11 10:27:01', '2023-03-11 10:34:08', NULL),
(45, 'testing@gmail.com', 'SMA630002', 'tets', NULL, 'ting', '1251512512', 'closed', 'e9a4b0b496b3ab916b913c899487a97c', 12, '2023-03-19 01:52:47', '2023-03-19 02:34:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `application_notes`
--

CREATE TABLE `application_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_id` bigint(20) UNSIGNED DEFAULT NULL,
  `staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `condition_license_levels`
--

CREATE TABLE `condition_license_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `number_agent` int(11) DEFAULT 0,
  `direct_level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `number_product` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `condition_license_levels`
--

INSERT INTO `condition_license_levels` (`id`, `level_id`, `number_agent`, `direct_level_id`, `number_product`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 3, NULL, NULL),
(2, 3, 1, 2, 5, NULL, NULL),
(3, 4, 1, 3, 7, NULL, NULL),
(4, 5, 1, 4, 0, NULL, NULL),
(5, 6, 1, 5, 0, NULL, NULL),
(6, 7, 1, 6, 0, NULL, '2023-03-09 03:17:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `condition_non_license_levels`
--

CREATE TABLE `condition_non_license_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `number_agent` int(11) DEFAULT 0,
  `direct_level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `number_product` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `condition_non_license_levels`
--

INSERT INTO `condition_non_license_levels` (`id`, `level_id`, `number_agent`, `direct_level_id`, `number_product`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 3, NULL, '2023-03-09 02:33:39'),
(2, 3, 1, 2, 5, NULL, NULL),
(3, 4, 1, 3, 7, NULL, NULL),
(4, 5, 1, 4, 0, NULL, NULL),
(5, 6, 1, 5, 0, NULL, NULL),
(6, 7, 1, 6, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_of_home` int(11) DEFAULT NULL,
  `mortgage_balance` int(11) DEFAULT NULL,
  `birthdate_of_youngest_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ss_incom_annually` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `leads`
--

INSERT INTO `leads` (`id`, `first_name`, `middle_name`, `last_name`, `mobile`, `email`, `address`, `value_of_home`, `mortgage_balance`, `birthdate_of_youngest_person`, `marital_status`, `ss_incom_annually`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Monique', 'Sullivan', 'Stevenson', '0932730394', 'monique@gmail.com', 'example address', 12, 232, '2023-03-22', 'married', '1002', 'active', '2023-03-21 14:38:15', '2023-03-21 07:24:46', '2023-03-21 07:38:15'),
(3, 'Evans', 'West', 'Weeks', '1252151251', 'weeks@gmail.com', 'example address', 1, 2, '2023-03-22', NULL, '1', 'pending', NULL, '2023-03-21 07:39:11', '2023-03-21 07:39:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `license_agents`
--

CREATE TABLE `license_agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_rgt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_suppend` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `verify_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_root` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `license_agents`
--

INSERT INTO `license_agents` (`id`, `email`, `code`, `first_name`, `middle_name`, `last_name`, `mobile`, `username`, `status`, `password`, `token`, `thumbnail`, `qrcode`, `parent_id`, `_lft`, `_rgt`, `is_suppend`, `email_verified_at`, `deleted_at`, `verify_code`, `level_id`, `is_root`, `created_at`, `updated_at`) VALUES
(1, 'root.seniority@yahoo.com', 'SM999999', 'Root', 'Mortgage', 'Ambassador', NULL, 'root', 'active', 'e10adc3949ba59abbe56e057f20f883e', '5bf520cb3dc7e140772f6e599d3b2be3', 'default.png', NULL, NULL, '1', '32', '0', NULL, NULL, NULL, 1, '1', NULL, '2023-03-02 07:26:45'),
(4, 'anhnnd.hotro@gmail.com', 'SM101826', 'Samir', NULL, 'Trujillo', '0932730394', 'anhnnd', 'active', 'e10adc3949ba59abbe56e057f20f883e', '2642ddc42c266e774b8c63e1ea5b791d', 'default.png', NULL, 1, '2', '33', '0', '2023-03-02 03:33:42', NULL, '862794', 2, '0', '2023-03-01 20:33:27', '2023-03-11 10:34:08'),
(11, 'lukas@gmail.com', 'SM733964', 'Lukas', NULL, 'Boyer', '1251251251', 'lukas', 'active', 'e10adc3949ba59abbe56e057f20f883e', '802f452cf5591f9790e930ab7bbb2208', 'default.png', NULL, 4, '7', '8', '0', '2023-03-12 00:00:00', NULL, '111758', 1, '0', '2023-03-11 10:08:16', '2023-03-11 10:08:16'),
(12, 'Israel@gmail.com', 'SM780639', 'Israel', NULL, 'Espinoza', '2151512512', 'israel', 'active', 'e10adc3949ba59abbe56e057f20f883e', '8ecfe61c2146c68b66c52e74b0f9957c', 'default.png', NULL, 4, '9', '32', '0', '2023-03-12 00:00:00', NULL, '924258', 1, '0', '2023-03-11 10:58:45', '2023-03-18 22:38:35'),
(22, 'duyanh@obnlab.asia', 'SM967367', 'Test', NULL, 'Dev', '1251251125', 'duyanh', 'trash', 'e10adc3949ba59abbe56e057f20f883e', '646be87a7a480f16d7eee3ddf7b36405', 'default.png', NULL, 12, '28', '29', '0', '2023-03-11 19:24:08', NULL, '123536', 1, '0', '2023-03-11 12:23:38', '2023-03-11 12:25:34'),
(23, 'elena@gmail.com', 'SM705153', 'Elena', NULL, 'Barrera', '1251261612', 'elena', 'active', 'e10adc3949ba59abbe56e057f20f883e', '003faf063e7def432ab45a20065e2285', 'default.png', NULL, 12, '30', '31', '0', '2023-03-19 04:56:12', NULL, '510192', 1, '0', '2023-03-18 21:55:43', '2023-03-18 22:38:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `license_levels`
--

CREATE TABLE `license_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_payout` int(11) DEFAULT NULL,
  `team_overrides` int(11) DEFAULT NULL,
  `conditions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`conditions`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_break` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `is_default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `license_levels`
--

INSERT INTO `license_levels` (`id`, `name`, `personal_payout`, `team_overrides`, `conditions`, `created_at`, `updated_at`, `is_break`, `deleted_at`, `is_default`, `sort`, `slug`) VALUES
(1, 'Mortgage Ambassador', 50, 0, NULL, NULL, NULL, '0', NULL, '1', 1, 'mortgage'),
(2, 'Senior MA', 55, 9, NULL, NULL, NULL, '0', NULL, '0', 2, 'senior'),
(3, 'Elite MA', 60, 8, NULL, NULL, NULL, '0', NULL, '0', 3, 'elite'),
(4, 'Grand MA', 65, 7, NULL, NULL, NULL, '0', NULL, '0', 4, 'grand'),
(5, 'District Leader', 70, 4, NULL, NULL, NULL, '1', NULL, '0', 5, NULL),
(6, 'Regional Leader', 80, 5, NULL, NULL, NULL, '1', NULL, '0', 6, NULL),
(7, 'National Branch Leader', 90, 6, NULL, NULL, '2023-03-09 03:17:09', '1', NULL, '0', 7, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `license_transactions`
--

CREATE TABLE `license_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total` int(11) DEFAULT 0,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `license_transactions`
--

INSERT INTO `license_transactions` (`id`, `product_id`, `agent_id`, `total`, `type`, `status`, `note`, `created_at`, `updated_at`) VALUES
(10, 35, 4, 500, 'in', 'active', NULL, '2023-03-11 10:25:32', '2023-02-02 10:25:02'),
(11, 36, 4, 500, 'in', 'active', NULL, '2023-03-11 10:25:32', '2023-03-11 10:25:32'),
(12, 37, 4, 500, 'in', 'active', NULL, '2023-03-11 10:26:21', '2023-03-11 10:26:21'),
(14, 39, 11, 750, 'in', 'active', NULL, '2023-03-11 10:29:06', '2023-03-11 10:29:06'),
(15, 39, 11, 135, 'in', 'active', NULL, '2023-03-11 10:29:06', '2023-03-11 10:29:06'),
(16, 40, 4, 550, 'in', 'active', NULL, '2023-03-11 10:26:21', '2023-03-11 10:34:08'),
(27, 46, 12, 5000, 'in', 'active', NULL, '2023-03-19 01:54:27', '2023-03-19 01:54:27'),
(28, 46, 4, 900, 'in', 'active', NULL, '2023-03-19 01:54:27', '2023-03-19 01:54:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newtime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2023_01_27_061953_create_media_table', 2),
(3, '2023_02_20_132919_create_agents_table', 3),
(4, '2023_02_21_075017_create_staffs_table', 4),
(6, '2023_03_01_031345_create_license_levels_table', 6),
(9, '2023_03_01_031924_create_condition_license_levels_table', 7),
(10, '2023_03_01_033437_add_is_break_to_levels_table', 8),
(11, '2023_03_01_034232_create_products_table', 9),
(12, '2023_03_01_035048_add_level_id_to_agents_table', 10),
(14, '2023_03_01_035816_create_transactions_table', 11),
(15, '2023_03_01_042424_add_deleted_at_to_license_levels_table', 12),
(26, '2023_02_23_010144_add_is_root_to_agent_table', 13),
(27, '2023_03_01_091014_create_test_agent_table', 13),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 14),
(29, '2023_03_01_135626_create_license_agents_table', 14),
(30, '2023_03_02_071027_create_applications_table', 15),
(32, '2023_03_02_071257_create_application_notes_table', 16),
(33, '2023_03_02_072538_add_deleted_at_applications_table', 17),
(38, '2023_03_02_085557_create_products_table', 18),
(39, '2023_03_02_135533_add_is_default_to_license_levels_table', 19),
(40, '2023_03_03_072723_create_settings_table', 20),
(41, '2023_03_03_073558_create_non_license_levels_table', 21),
(42, '2023_03_03_073806_create_condition_license_levels_table', 22),
(43, '2023_03_03_074623_add_is_default_to_non_license_levels_table', 23),
(44, '2023_03_03_075851_create_non_license_agents_table', 24),
(45, '2023_03_11_164345_create_license_transactions_table', 25),
(46, '2023_03_18_154557_add_sort_license_levels_table', 26),
(47, '2023_03_19_042603_add_slug_license_levels_table', 27),
(53, '2023_03_21_132010_create_leads_table', 28);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `non_license_agents`
--

CREATE TABLE `non_license_agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_rgt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_suppend` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `verify_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_root` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `non_license_agents`
--

INSERT INTO `non_license_agents` (`id`, `code`, `first_name`, `middle_name`, `last_name`, `mobile`, `email`, `username`, `status`, `password`, `token`, `thumbnail`, `qrcode`, `parent_id`, `_lft`, `_rgt`, `is_suppend`, `email_verified_at`, `deleted_at`, `verify_code`, `level_id`, `is_root`, `created_at`, `updated_at`) VALUES
(1, 'SMC999999', 'Root', 'Community', 'Ambassador', NULL, 'root.ambassador@yahoo.com', 'root', 'active', 'e10adc3949ba59abbe56e057f20f883e', '5bf520cb3dc7e140772f6e599d3b2be3', NULL, NULL, NULL, '1', '6', '0', NULL, NULL, NULL, 1, '1', NULL, '2023-03-05 19:49:23'),
(2, 'SM527296', 'Natalia', NULL, 'Burton', '0932730394', 'anhnnd.hotro@gmail.com', 'anhnnd', 'active', 'e10adc3949ba59abbe56e057f20f883e', '70069fda1daad5604cedfaeba07cb8aa', 'default.png', NULL, 1, '2', '5', '0', NULL, NULL, '255281', 1, '0', '2023-03-05 19:50:11', '2023-03-09 02:36:17'),
(3, 'SM910175', 'Danyal', NULL, 'Thornton', '2151251251', 'danyal@gmail.com', 'danyal', 'active', 'e10adc3949ba59abbe56e057f20f883e', '726ecfebf20aec2e6cd6997ed2d5b698', 'default.png', NULL, 2, '3', '4', '0', NULL, NULL, '809459', 1, '0', '2023-03-08 22:49:31', '2023-03-09 03:22:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `non_license_levels`
--

CREATE TABLE `non_license_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_payout` int(11) DEFAULT NULL,
  `team_overrides` int(11) DEFAULT NULL,
  `is_break` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_default` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `non_license_levels`
--

INSERT INTO `non_license_levels` (`id`, `name`, `personal_payout`, `team_overrides`, `is_break`, `deleted_at`, `created_at`, `updated_at`, `is_default`) VALUES
(1, 'Community Ambassador', 500, 0, '0', NULL, NULL, NULL, '1'),
(2, 'Senior CA', 600, 9, '0', NULL, NULL, NULL, '0'),
(3, 'Elite CA', 700, 8, '0', NULL, NULL, NULL, '0'),
(4, 'Grand CA', 800, 7, '0', NULL, NULL, NULL, '0'),
(5, 'District Leader', 900, 4, '1', NULL, NULL, NULL, '0'),
(6, 'Regional Leader', 1000, 5, '1', NULL, NULL, NULL, '0'),
(7, 'National Leader', 1250, 6, '0', NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `application_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `code`, `first_name`, `middle_name`, `last_name`, `email`, `mobile`, `agent_id`, `application_id`, `total`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(35, '0969843864', 'Cayden', NULL, 'Hunter', 'caydenHunter@gmail.com', '1252152152', 4, 37, 1000, 'complete', NULL, '2023-03-11 10:25:02', '2023-03-11 10:34:08'),
(36, '5988861328', 'Peyton', NULL, 'Dixon', 'peyton@gmail.com', '1251252152', 4, 38, 1000, 'complete', NULL, '2023-03-11 10:25:32', '2023-03-11 10:34:08'),
(37, '7957395332', 'Lilliana', NULL, 'Mcintyre', 'lilliana@gmail.com', '2152151251', 4, 39, 1000, 'complete', NULL, '2023-03-11 10:26:21', '2023-03-11 10:34:08'),
(39, '5027577999', 'Jazlyn', NULL, 'Terry', 'jazlyn@gmail.com', '1251251251', 11, 40, 1500, 'active', NULL, '2023-03-11 10:29:06', '2023-03-11 10:29:06'),
(40, '8937832713', 'Jovan', NULL, 'Mcneil', 'jovan@gmail.com', '1252155125', 4, 41, 1000, 'active', NULL, '2023-03-11 10:34:08', '2023-03-11 10:34:08'),
(46, '12516123612', 'tets', NULL, 'ting', 'testing@gmail.com', '1251512512', 12, 45, 10000, 'active', NULL, '2023-03-19 01:54:27', '2023-03-19 01:54:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, 'dashboard_title', 'Dashboard', NULL, NULL),
(2, 'license_title', 'List of Mortgage Ambassador', NULL, NULL),
(3, 'nonlicense_title', 'List of Community Ambassador', NULL, NULL),
(4, 'application_title', 'List of Application', NULL, NULL),
(5, 'loans_title', 'List of Loans', NULL, NULL),
(6, 'dashboard_menu', 'Dashboard', NULL, NULL),
(7, 'license_menu', 'Mortgage Ambassador', NULL, NULL),
(8, 'application_menu', 'Manage Applications', NULL, NULL),
(9, 'loans_menu', 'Manage Loans', NULL, NULL),
(10, 'show_ambassador_type', 'mortgage', NULL, '2023-03-07 23:14:34'),
(11, 'show_mortgage_ambassador', '1', NULL, '2023-03-09 03:10:06'),
(12, 'show_community_ambassador', '1', NULL, '2023-03-09 01:10:29'),
(13, 'show_ranking_mortgage_ambassador', '1', NULL, '2023-03-09 03:15:58'),
(14, 'show_ranking_community_ambassador', '1', NULL, '2023-03-09 02:37:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qrcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staffs`
--

INSERT INTO `staffs` (`id`, `first_name`, `middle_name`, `last_name`, `mobile`, `email`, `username`, `password`, `status`, `token`, `thumbnail`, `qrcode`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Super', '', 'Admin', NULL, 'super.admin@yahoo.com', 'superadmin', 'c50c965538c5b765666a5182f311ea05', 'active', '40d3709bfefa17c534428e6cbe27fd3f', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total` int(11) DEFAULT 0,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'in',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agents_license_level_id_foreign` (`license_level_id`);

--
-- Chỉ mục cho bảng `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_agent_id_foreign` (`agent_id`);

--
-- Chỉ mục cho bảng `application_notes`
--
ALTER TABLE `application_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_notes_application_id_foreign` (`application_id`),
  ADD KEY `application_notes_staff_id_foreign` (`staff_id`);

--
-- Chỉ mục cho bảng `condition_license_levels`
--
ALTER TABLE `condition_license_levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `condition_license_levels_level_id_foreign` (`level_id`),
  ADD KEY `condition_license_levels_direct_level_id_foreign` (`direct_level_id`);

--
-- Chỉ mục cho bảng `condition_non_license_levels`
--
ALTER TABLE `condition_non_license_levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `condition_non_license_levels_level_id_foreign` (`level_id`),
  ADD KEY `condition_non_license_levels_direct_level_id_foreign` (`direct_level_id`);

--
-- Chỉ mục cho bảng `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `license_agents`
--
ALTER TABLE `license_agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `license_agents_level_id_foreign` (`level_id`);

--
-- Chỉ mục cho bảng `license_levels`
--
ALTER TABLE `license_levels`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `license_transactions`
--
ALTER TABLE `license_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `license_transactions_product_id_foreign` (`product_id`),
  ADD KEY `license_transactions_agent_id_foreign` (`agent_id`);

--
-- Chỉ mục cho bảng `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `non_license_agents`
--
ALTER TABLE `non_license_agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `non_license_agents_level_id_foreign` (`level_id`);

--
-- Chỉ mục cho bảng `non_license_levels`
--
ALTER TABLE `non_license_levels`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_agent_id_foreign` (`agent_id`),
  ADD KEY `products_application_id_foreign` (`application_id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_product_id_foreign` (`product_id`),
  ADD KEY `transactions_agent_id_foreign` (`agent_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `application_notes`
--
ALTER TABLE `application_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `condition_license_levels`
--
ALTER TABLE `condition_license_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `condition_non_license_levels`
--
ALTER TABLE `condition_non_license_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `license_agents`
--
ALTER TABLE `license_agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `license_levels`
--
ALTER TABLE `license_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `license_transactions`
--
ALTER TABLE `license_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `non_license_agents`
--
ALTER TABLE `non_license_agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `non_license_levels`
--
ALTER TABLE `non_license_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_license_level_id_foreign` FOREIGN KEY (`license_level_id`) REFERENCES `license_levels` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `license_agents` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `application_notes`
--
ALTER TABLE `application_notes`
  ADD CONSTRAINT `application_notes_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_notes_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `condition_license_levels`
--
ALTER TABLE `condition_license_levels`
  ADD CONSTRAINT `condition_license_levels_direct_level_id_foreign` FOREIGN KEY (`direct_level_id`) REFERENCES `license_levels` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `condition_license_levels_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `license_levels` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `condition_non_license_levels`
--
ALTER TABLE `condition_non_license_levels`
  ADD CONSTRAINT `condition_non_license_levels_direct_level_id_foreign` FOREIGN KEY (`direct_level_id`) REFERENCES `non_license_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `condition_non_license_levels_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `non_license_levels` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `license_agents`
--
ALTER TABLE `license_agents`
  ADD CONSTRAINT `license_agents_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `license_levels` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `license_transactions`
--
ALTER TABLE `license_transactions`
  ADD CONSTRAINT `license_transactions_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `license_agents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `license_transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `non_license_agents`
--
ALTER TABLE `non_license_agents`
  ADD CONSTRAINT `non_license_agents_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `non_license_levels` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `license_agents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
