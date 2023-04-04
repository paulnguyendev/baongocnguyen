-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 04, 2023 lúc 02:19 AM
-- Phiên bản máy phục vụ: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `theraomega1122_therao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` varchar(255) DEFAULT NULL,
  `_rgt` varchar(255) DEFAULT NULL,
  `type` enum('licensed','non-licensed') DEFAULT NULL,
  `is_suppend` enum('0','1') DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `license_level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_root` varchar(255) DEFAULT '0'
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
  `email` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
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
(38, 'peyton@gmail.com', 'SMA639515', 'Peyton', NULL, 'Dixon', '1251252152', 'closed', '397418888eb24d29da23176fb78426df', 4, '2023-03-11 09:27:24', '2023-03-11 10:25:32', NULL),
(39, 'lilliana@gmail.com', 'SMA433507', 'Lilliana', NULL, 'Mcintyre', '2152151251', 'closed', 'f143eb35b1fa7d7851f907c52aedfdf5', 4, '2023-03-11 09:27:48', '2023-03-11 10:26:21', NULL),
(40, 'jazlyn@gmail.com', 'SMA415726', 'Jazlyn', NULL, 'Terry', '1251251251', 'closed', '8713ce15d9d2f733fa8a7f64fab624f2', 11, '2023-03-11 10:08:43', '2023-03-11 10:29:06', NULL),
(41, 'jovan@gmail.com', 'SMA426317', 'Jovan', NULL, 'Mcneil', '1252155125', 'closed', 'e2bbd36b2cb154dc2a247bc6ccab0874', 4, '2023-03-11 10:27:01', '2023-03-11 10:34:08', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `application_notes`
--

CREATE TABLE `application_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_id` bigint(20) UNSIGNED DEFAULT NULL,
  `staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text DEFAULT NULL,
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
(6, 7, 1, 6, 0, NULL, '2023-03-12 02:55:01');

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
-- Cấu trúc bảng cho bảng `license_agents`
--

CREATE TABLE `license_agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` varchar(255) DEFAULT NULL,
  `_rgt` varchar(255) DEFAULT NULL,
  `is_suppend` enum('0','1') DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_root` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `license_agents`
--

INSERT INTO `license_agents` (`id`, `email`, `code`, `first_name`, `middle_name`, `last_name`, `mobile`, `username`, `status`, `password`, `token`, `thumbnail`, `qrcode`, `parent_id`, `_lft`, `_rgt`, `is_suppend`, `email_verified_at`, `deleted_at`, `verify_code`, `level_id`, `is_root`, `created_at`, `updated_at`) VALUES
(1, 'root.seniority@yahoo.com', 'SM999999', 'Root', 'Mortgage', 'Ambassador', NULL, 'root', 'active', 'e10adc3949ba59abbe56e057f20f883e', '5bf520cb3dc7e140772f6e599d3b2be3', 'default.png', NULL, NULL, '1', '30', '0', NULL, NULL, NULL, 1, '1', NULL, '2023-03-02 07:26:45'),
(4, 'anhnnd.hotro@gmail.com', 'SM101826', 'Samir', NULL, 'Trujillo', '0932730394', 'anhnnd', 'active', 'e10adc3949ba59abbe56e057f20f883e', '2642ddc42c266e774b8c63e1ea5b791d', 'default.png', NULL, 1, '2', '31', '0', '2023-03-02 03:33:42', NULL, '862794', 2, '0', '2023-03-01 20:33:27', '2023-03-11 10:34:08'),
(11, 'lukas@gmail.com', 'SM733964', 'Lukas', NULL, 'Boyer', '1251251251', 'lukas', 'active', 'e10adc3949ba59abbe56e057f20f883e', '802f452cf5591f9790e930ab7bbb2208', 'default.png', NULL, 4, '7', '8', '0', '2023-03-12 00:00:00', NULL, '111758', 1, '0', '2023-03-11 10:08:16', '2023-03-11 10:08:16'),
(12, 'Israel@gmail.com', 'SM780639', 'Israel', NULL, 'Espinoza', '2151512512', 'israel', 'active', 'e10adc3949ba59abbe56e057f20f883e', '8ecfe61c2146c68b66c52e74b0f9957c', 'default.png', NULL, 4, '9', '30', '0', '2023-03-12 00:00:00', NULL, '924258', 1, '0', '2023-03-11 10:58:45', '2023-03-11 10:58:45'),
(22, 'duyanh@obnlab.asia', 'SM967367', 'Test', NULL, 'Dev', '1251251125', 'duyanh', 'trash', 'e10adc3949ba59abbe56e057f20f883e', '646be87a7a480f16d7eee3ddf7b36405', 'default.png', NULL, 12, '28', '29', '0', '2023-03-11 19:24:08', NULL, '123536', 1, '0', '2023-03-11 12:23:38', '2023-03-11 12:25:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `license_levels`
--

CREATE TABLE `license_levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `personal_payout` int(11) DEFAULT NULL,
  `team_overrides` int(11) DEFAULT NULL,
  `conditions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_break` varchar(255) DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `is_default` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `license_levels`
--

INSERT INTO `license_levels` (`id`, `name`, `personal_payout`, `team_overrides`, `conditions`, `created_at`, `updated_at`, `is_break`, `deleted_at`, `is_default`) VALUES
(1, 'Mortgage Ambassador', 50, 0, NULL, NULL, NULL, '0', NULL, '1'),
(2, 'Senior MA', 55, 9, NULL, NULL, NULL, '0', NULL, '0'),
(3, 'Elite MA', 60, 8, NULL, NULL, NULL, '0', NULL, '0'),
(4, 'Grand MA', 65, 7, NULL, NULL, NULL, '0', NULL, '0'),
(5, 'District Leader', 70, 4, NULL, NULL, NULL, '1', NULL, '0'),
(6, 'Regional Leader', 80, 5, NULL, NULL, NULL, '1', NULL, '0'),
(7, 'National Branch Leader', 90, 6, NULL, NULL, '2023-03-09 03:17:09', '1', NULL, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `license_transactions`
--

CREATE TABLE `license_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total` int(11) DEFAULT 0,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `license_transactions`
--

INSERT INTO `license_transactions` (`id`, `product_id`, `agent_id`, `total`, `type`, `status`, `note`, `created_at`, `updated_at`) VALUES
(10, 35, 4, 500, 'in', 'active', NULL, '2023-03-11 10:25:02', '2023-03-11 10:25:02'),
(11, 36, 4, 500, 'in', 'active', NULL, '2023-03-11 10:25:32', '2023-03-11 10:25:32'),
(12, 37, 4, 500, 'in', 'active', NULL, '2023-03-11 10:26:21', '2023-03-11 10:26:21'),
(14, 39, 11, 750, 'in', 'active', NULL, '2023-03-11 10:29:06', '2023-03-11 10:29:06'),
(15, 39, 11, 135, 'in', 'active', NULL, '2023-03-11 10:29:06', '2023-03-11 10:29:06'),
(16, 40, 4, 550, 'in', 'active', NULL, '2023-03-11 10:26:21', '2023-03-11 10:34:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `disk` varchar(255) DEFAULT NULL,
  `folder_id` varchar(255) DEFAULT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `newtime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `media`
--

INSERT INTO `media` (`id`, `type`, `title`, `caption`, `url`, `thumb`, `time`, `size`, `disk`, `folder_id`, `folder`, `newtime`, `created_at`, `updated_at`) VALUES
(1, 'jpg', 'fGurishZ9e.jpg', 'fGurishZ9e.jpg', 'fGurishZ9e.jpg', 'fGurishZ9e.jpg', '1679284496', 362467, 'public', '0', NULL, '2023-03-20 03:54:56', NULL, NULL),
(2, 'png', 'a93knGu8aZ.png', 'a93knGu8aZ.png', 'a93knGu8aZ.png', 'a93knGu8aZ.png', '1679284550', 37630, 'public', '0', NULL, '2023-03-20 03:55:50', NULL, NULL),
(3, 'png', 'mEZGV4Me41.png', 'mEZGV4Me41.png', 'mEZGV4Me41.png', 'mEZGV4Me41.png', '1679307919', 37630, 'public', '0', NULL, '2023-03-20 10:25:19', NULL, NULL),
(4, 'jpg', 'XM97ShnoDk.jpg', 'XM97ShnoDk.jpg', 'XM97ShnoDk.jpg', 'XM97ShnoDk.jpg', '1679316475', 33012, 'public', '0', NULL, '2023-03-20 12:47:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(45, '2023_03_11_164345_create_license_transactions_table', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `non_license_agents`
--

CREATE TABLE `non_license_agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` varchar(255) DEFAULT NULL,
  `_rgt` varchar(255) DEFAULT NULL,
  `is_suppend` enum('0','1') DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_root` varchar(255) DEFAULT '0',
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
  `name` varchar(255) DEFAULT NULL,
  `personal_payout` int(11) DEFAULT NULL,
  `team_overrides` int(11) DEFAULT NULL,
  `is_break` varchar(255) DEFAULT '0',
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_default` varchar(255) NOT NULL DEFAULT '0'
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
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `info_order` longtext DEFAULT NULL,
  `info_shopping` longtext DEFAULT NULL,
  `note` text DEFAULT NULL,
  `payment` longtext DEFAULT NULL,
  `products` longtext DEFAULT NULL,
  `shipping` longtext DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `total_weight` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `total_point` int(11) DEFAULT NULL,
  `total_commission` int(11) DEFAULT NULL,
  `is_affiliate` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `is_course_active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `application_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
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
(40, '8937832713', 'Jovan', NULL, 'Mcneil', 'jovan@gmail.com', '1252155125', 4, 41, 1000, 'active', NULL, '2023-03-11 10:34:08', '2023-03-11 10:34:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_real`
--

CREATE TABLE `products_real` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `orgin` varchar(255) DEFAULT NULL,
  `point` varchar(255) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `regular_price` int(11) DEFAULT NULL,
  `login_price` int(11) DEFAULT NULL,
  `_rgt` varchar(50) DEFAULT NULL,
  `in_stock` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `is_published` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `percent` varchar(255) DEFAULT NULL,
  `product_group_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products_real`
--

INSERT INTO `products_real` (`id`, `title`, `code`, `slug`, `thumbnail`, `orgin`, `point`, `sale_price`, `regular_price`, `login_price`, `_rgt`, `in_stock`, `stock`, `is_published`, `created_at`, `updated_at`, `deleted_at`, `percent`, `product_group_id`, `status`) VALUES
(1, 'Original Ointment', 'the123456', 'original-ointment', 'dcl.png', NULL, NULL, 90, 100, 100, NULL, '1', NULL, '1', '2023-03-14 08:39:45', NULL, NULL, NULL, NULL, NULL),
(2, 'Original Ointment 2', 'the123456', 'original-ointment', 'dcl.png', NULL, NULL, 80, 100, NULL, NULL, NULL, NULL, NULL, '2023-03-19 10:05:55', NULL, NULL, NULL, NULL, 'active'),
(3, 'sadasdasd', NULL, NULL, 'a93knGu8aZ.png', NULL, NULL, 123, 21312312, NULL, NULL, NULL, NULL, NULL, '2023-03-20 04:48:26', '2023-03-20 05:29:35', NULL, NULL, NULL, NULL),
(4, 'awdfqawsdasd', NULL, NULL, 'fGurishZ9e.jpg', NULL, NULL, 123, 2113123, NULL, NULL, NULL, NULL, NULL, '2023-03-20 05:29:58', '2023-03-20 05:31:20', '2023-03-20 12:31:20', NULL, NULL, NULL),
(5, 'awdfqawsdasd', NULL, NULL, 'fGurishZ9e.jpg', NULL, NULL, 123, 2113123, NULL, NULL, NULL, NULL, NULL, '2023-03-20 05:30:02', '2023-03-20 05:31:17', '2023-03-20 12:31:17', NULL, NULL, NULL),
(6, 'asdasdasdfeyreyr', NULL, NULL, 'fGurishZ9e.jpg', NULL, NULL, 12311, 123123232, NULL, NULL, NULL, NULL, NULL, '2023-03-20 05:30:46', '2023-03-20 05:46:47', NULL, NULL, NULL, NULL),
(7, 'Product 1', NULL, NULL, 'XM97ShnoDk.jpg', NULL, NULL, 800, 1000, NULL, NULL, NULL, NULL, NULL, '2023-03-20 05:48:22', '2023-03-20 05:48:22', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `retail`
--

CREATE TABLE `retail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` varchar(255) DEFAULT NULL,
  `_rgt` varchar(255) DEFAULT NULL,
  `is_suppend` enum('0','1') DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_root` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `retail`
--

INSERT INTO `retail` (`id`, `email`, `code`, `first_name`, `middle_name`, `last_name`, `mobile`, `username`, `status`, `password`, `token`, `thumbnail`, `qrcode`, `parent_id`, `_lft`, `_rgt`, `is_suppend`, `email_verified_at`, `deleted_at`, `verify_code`, `level_id`, `is_root`, `created_at`, `updated_at`) VALUES
(1, 'gianghuynh0801@gmail.com', 'SM303542', 'Huỳnh', 'Nguyễn Trường', 'Giang', '6666565656', 'asasda', 'pending', 'f67c2bcbfcfa30fccb36f72dca22a817', '18cd33470a7fb7f981fc86fe68087b4d', NULL, NULL, NULL, '1', '2', '0', NULL, NULL, '422801', 1, '0', '2023-03-16 21:38:52', '2023-03-16 21:38:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` varchar(255) DEFAULT NULL,
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
(11, 'show_mortgage_ambassador', '0', NULL, '2023-03-20 03:24:58'),
(12, 'show_community_ambassador', '1', NULL, '2023-03-12 02:32:06'),
(13, 'show_ranking_mortgage_ambassador', '1', NULL, '2023-03-09 03:15:58'),
(14, 'show_ranking_community_ambassador', '1', NULL, '2023-03-09 02:37:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staffs`
--

INSERT INTO `staffs` (`id`, `first_name`, `middle_name`, `last_name`, `mobile`, `email`, `username`, `password`, `status`, `token`, `thumbnail`, `qrcode`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Super', '', 'Admin', NULL, 'super.admin@yahoo.com', 'superadmin', '0edd85a19a02b65691d4f49df1796f74', 'active', '40d3709bfefa17c534428e6cbe27fd3f', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total` int(11) DEFAULT 0,
  `type` varchar(255) DEFAULT 'in',
  `status` varchar(255) DEFAULT 'pending',
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `whosales`
--

CREATE TABLE `whosales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` varchar(255) DEFAULT NULL,
  `_rgt` varchar(255) DEFAULT NULL,
  `is_suppend` enum('0','1') DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_root` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `whosales`
--

INSERT INTO `whosales` (`id`, `email`, `code`, `first_name`, `middle_name`, `last_name`, `mobile`, `username`, `status`, `password`, `token`, `thumbnail`, `qrcode`, `parent_id`, `_lft`, `_rgt`, `is_suppend`, `email_verified_at`, `deleted_at`, `verify_code`, `level_id`, `is_root`, `created_at`, `updated_at`) VALUES
(1, 'dewmo@gmail.com', 'SM123456', 'Giang', NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, NULL, '1', '4', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL),
(2, 'gianghuynh0801@gmail.com', 'SM851011', 'Huỳnh', 'Nguyễn Trường', 'Giang', '0969936544', 'gianghuynh0801', 'pending', 'e10adc3949ba59abbe56e057f20f883e', 'ae3d781e18d4ce5056110a1d85e0f6df', NULL, NULL, 1, '2', '3', '0', NULL, NULL, '253421', 1, '0', '2023-03-16 15:05:16', '2023-03-16 15:05:16'),
(3, 'gianghuynh0801111@gmail.com', 'SM788952', 'a', 'b', 'c', '9969455511', 'gianghuynh0801111', 'pending', '25f9e794323b453885f5181f1b624d0b', '4687f756decb298cdb83eb5ced6205f6', NULL, NULL, NULL, '5', '6', '0', NULL, NULL, '456531', 1, '0', '2023-03-16 21:23:44', '2023-03-16 21:23:44'),
(4, 'gianghuynh0801@gmail.comaaa', 'SM785828', 'Huỳnh', 'a', 'aaa', '0369669321', 'gianghuynh0801aaa', 'pending', 'af220286a2234a5e411e4e760a3c8cee', 'e39946be7d4590bddf9643c8a8bd9b79', NULL, NULL, NULL, '7', '8', '0', NULL, NULL, '115699', 1, '0', '2023-03-16 21:37:52', '2023-03-16 21:37:52');

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
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
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
-- Chỉ mục cho bảng `products_real`
--
ALTER TABLE `products_real`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `retail`
--
ALTER TABLE `retail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `license_agents_level_id_foreign` (`level_id`);

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
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `whosales`
--
ALTER TABLE `whosales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `license_agents_level_id_foreign` (`level_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- AUTO_INCREMENT cho bảng `license_agents`
--
ALTER TABLE `license_agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `license_levels`
--
ALTER TABLE `license_levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `license_transactions`
--
ALTER TABLE `license_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `products_real`
--
ALTER TABLE `products_real`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `retail`
--
ALTER TABLE `retail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `whosales`
--
ALTER TABLE `whosales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
