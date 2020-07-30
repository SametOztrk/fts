-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Tem 2020, 00:39:24
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samet', 'admin@admin.com', NULL, '$2y$10$p1smVhqicnL5Ve4aOHc6ledw1ZMOBS3wiC.ywAYt4jlIPdSQlx1Sm', NULL, '2019-09-26 09:57:52', '2019-09-26 09:57:52'),
(2, 'samet', 'samet@blog.com', NULL, '$2y$10$19EsYT6.5kEBJ9ZKhgo.T.aKu60V2y1FoyYCiZiUdM.uKNQkgK9ni', NULL, '2020-03-14 11:03:27', '2020-03-14 11:03:27'),
(3, 'admin', 'admin@blog.com', NULL, '$2y$10$S1MNUvwZh.x/1tX/aH4CYebwDnd2Nug5DVycdagJvAmx9O5COewuC', NULL, '2020-03-14 11:15:26', '2020-03-14 11:15:26'),
(4, 'Ahmed', 'ahmed@admin.com', NULL, '$2y$10$WHMUNbdS8pNmMUHVQBkNyOrgmjuNQWX/W28wxD06O7EfVSxJXdSw.', NULL, '2020-05-11 16:13:54', '2020-05-11 16:13:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faturas`
--

CREATE TABLE `faturas` (
  `fatura_id` bigint(20) UNSIGNED NOT NULL,
  `müsteri_id` bigint(20) UNSIGNED NOT NULL,
  `sefer_id` bigint(20) UNSIGNED NOT NULL,
  `ücret` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `faturas`
--

INSERT INTO `faturas` (`fatura_id`, `müsteri_id`, `sefer_id`, `ücret`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 50, '2020-05-11 17:28:39', '2020-05-11 17:28:39'),
(2, 1, 1, 50, '2020-05-11 17:28:39', '2020-05-11 17:28:39'),
(3, 1, 1, 50, '2020-05-11 17:28:40', '2020-05-11 17:28:40'),
(4, 1, 1, 50, '2020-05-11 18:24:06', '2020-05-11 18:24:06'),
(5, 1, 1, 50, '2020-05-11 18:24:06', '2020-05-11 18:24:06'),
(6, 1, 1, 50, '2020-05-11 18:24:06', '2020-05-11 18:24:06'),
(7, 1, 1, 50, '2020-05-11 18:24:55', '2020-05-11 18:24:55'),
(8, 1, 1, 50, '2020-05-11 18:24:56', '2020-05-11 18:24:56'),
(9, 1, 1, 50, '2020-05-11 18:24:56', '2020-05-11 18:24:56'),
(10, 1, 1, 50, '2020-05-11 18:24:57', '2020-05-11 18:24:57'),
(11, 1, 1, 50, '2020-05-11 18:24:57', '2020-05-11 18:24:57'),
(12, 1, 1, 50, '2020-05-11 18:24:58', '2020-05-11 18:24:58'),
(13, 1, 1, 50, '2020-05-11 18:24:58', '2020-05-11 18:24:58'),
(14, 1, 1, 50, '2020-05-11 18:24:58', '2020-05-11 18:24:58'),
(15, 1, 1, 50, '2020-05-11 18:24:58', '2020-05-11 18:24:58'),
(16, 1, 1, 50, '2020-05-11 18:24:58', '2020-05-11 18:24:58'),
(17, 1, 1, 50, '2020-05-11 18:24:58', '2020-05-11 18:24:58'),
(18, 1, 1, 50, '2020-05-11 18:24:58', '2020-05-11 18:24:58'),
(19, 1, 1, 50, '2020-05-11 18:25:04', '2020-05-11 18:25:04'),
(20, 1, 1, 50, '2020-05-11 18:25:04', '2020-05-11 18:25:04'),
(21, 1, 1, 50, '2020-05-11 18:25:04', '2020-05-11 18:25:04'),
(22, 1, 1, 50, '2020-05-11 18:25:04', '2020-05-11 18:25:04'),
(23, 1, 1, 50, '2020-05-11 18:25:05', '2020-05-11 18:25:05'),
(24, 1, 1, 50, '2020-05-11 18:25:05', '2020-05-11 18:25:05'),
(25, 1, 1, 50, '2020-05-11 18:25:05', '2020-05-11 18:25:05'),
(26, 1, 1, 50, '2020-05-11 18:25:05', '2020-05-11 18:25:05'),
(27, 1, 1, 50, '2020-05-11 18:25:05', '2020-05-11 18:25:05'),
(28, 1, 1, 50, '2020-05-11 18:25:53', '2020-05-11 18:25:53'),
(29, 1, 1, 50, '2020-05-11 18:25:53', '2020-05-11 18:25:53'),
(30, 1, 1, 50, '2020-05-11 18:25:53', '2020-05-11 18:25:53'),
(31, 1, 1, 50, '2020-05-11 18:26:43', '2020-05-11 18:26:43'),
(32, 1, 1, 50, '2020-05-11 18:26:43', '2020-05-11 18:26:43'),
(33, 1, 1, 50, '2020-05-11 18:26:43', '2020-05-11 18:26:43'),
(34, 1, 1, 50, '2020-05-11 18:48:31', '2020-05-11 18:48:31'),
(35, 1, 1, 50, '2020-05-11 18:48:32', '2020-05-11 18:48:32'),
(36, 1, 1, 50, '2020-05-11 18:48:32', '2020-05-11 18:48:32'),
(37, 1, 4, 1000, '2020-05-11 20:42:32', '2020-05-11 20:42:32'),
(38, 1, 4, 1000, '2020-05-11 20:42:35', '2020-05-11 20:42:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `havalimanlarıs`
--

CREATE TABLE `havalimanlarıs` (
  `liman_id` bigint(20) UNSIGNED NOT NULL,
  `liman_adı` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sehir_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `havalimanlarıs`
--

INSERT INTO `havalimanlarıs` (`liman_id`, `liman_adı`, `sehir_id`, `created_at`, `updated_at`) VALUES
(1, 'İstanbul limanı', 1, '2019-09-26 09:59:04', '2019-09-26 09:59:04'),
(2, 'mardin havalimanı', 2, '2020-05-10 16:04:23', '2020-05-10 16:04:23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_30_111125_create_havalimanlarıs_table', 1),
(4, '2019_07_30_111145_create_sehirlers_table', 1),
(5, '2019_07_30_111159_create_rotas_table', 1),
(6, '2019_07_30_111224_create_seferlers_table', 1),
(7, '2019_07_30_111237_create_faturas_table', 1),
(8, '2019_07_30_111251_create_ucaklars_table', 1),
(9, '2019_07_30_112330_create_admins_table', 1),
(10, '2019_08_03_132800_create_yıllık_plans_table', 1),
(11, '2019_08_15_072540_create_ucuslars_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rotas`
--

CREATE TABLE `rotas` (
  `rota_id` bigint(20) UNSIGNED NOT NULL,
  `liman_id` bigint(20) UNSIGNED NOT NULL,
  `hedef_liman_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `rotas`
--

INSERT INTO `rotas` (`rota_id`, `liman_id`, `hedef_liman_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2020-05-10 16:04:30', '2020-05-10 16:04:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seferlers`
--

CREATE TABLE `seferlers` (
  `sefer_id` bigint(20) UNSIGNED NOT NULL,
  `ucak_id` bigint(20) UNSIGNED NOT NULL,
  `ucus_id` bigint(20) UNSIGNED NOT NULL,
  `ücret` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `seferlers`
--

INSERT INTO `seferlers` (`sefer_id`, `ucak_id`, `ucus_id`, `ücret`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 50, '2020-05-10 16:13:30', '2020-05-10 16:13:30'),
(2, 1, 1, 20, '2020-05-10 16:16:32', '2020-05-10 16:16:32'),
(3, 1, 2, 50, '2020-05-10 16:17:30', '2020-05-10 16:17:30'),
(4, 1, 3, 1000, '2020-05-10 16:19:48', '2020-05-10 16:19:48'),
(5, 1, 4, 33, '2020-05-11 18:39:23', '2020-05-11 18:39:23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirlers`
--

CREATE TABLE `sehirlers` (
  `sehir_id` bigint(20) UNSIGNED NOT NULL,
  `sehir_adı` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sehirlers`
--

INSERT INTO `sehirlers` (`sehir_id`, `sehir_adı`, `created_at`, `updated_at`) VALUES
(1, 'İstanbul', '2019-09-26 09:58:44', '2019-09-26 09:58:44'),
(2, 'mardin', '2020-05-10 16:04:15', '2020-05-10 16:04:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ucaklars`
--

CREATE TABLE `ucaklars` (
  `ucak_id` bigint(20) UNSIGNED NOT NULL,
  `seri_no` int(11) NOT NULL,
  `koltuk_sayısı` int(11) NOT NULL,
  `ucak_adı` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ucaklars`
--

INSERT INTO `ucaklars` (`ucak_id`, `seri_no`, `koltuk_sayısı`, `ucak_adı`, `created_at`, `updated_at`) VALUES
(1, 123456789, 50, 'zzzzz', '2020-05-10 16:05:04', '2020-05-10 16:05:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ucuslars`
--

CREATE TABLE `ucuslars` (
  `ucus_id` bigint(20) UNSIGNED NOT NULL,
  `rota_id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ucuslars`
--

INSERT INTO `ucuslars` (`ucus_id`, `rota_id`, `plan_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-05-10 16:05:59', '2020-05-10 16:05:59'),
(2, 1, 52, '2020-05-10 16:17:22', '2020-05-10 16:17:22'),
(3, 1, 57, '2020-05-10 16:19:41', '2020-05-10 16:19:41'),
(4, 1, 59, '2020-05-11 18:39:13', '2020-05-11 18:39:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samet', 'samet@blog', NULL, '$2y$10$JPTwsjfjyIf/HP6ERMhpK.9zOQAEb2PebR.wbwpdq1KnZBkXz4jOG', NULL, '2020-05-10 15:44:54', '2020-05-10 15:44:54');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yıllık_plans`
--

CREATE TABLE `yıllık_plans` (
  `yıllık_plan_id` bigint(20) UNSIGNED NOT NULL,
  `baslangıc_tarihi` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `yıllık_plans`
--

INSERT INTO `yıllık_plans` (`yıllık_plan_id`, `baslangıc_tarihi`, `created_at`, `updated_at`) VALUES
(1, '2020-05-10', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(2, '2020-05-11', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(3, '2020-05-12', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(4, '2020-05-13', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(5, '2020-05-14', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(6, '2020-05-15', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(7, '2020-05-16', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(8, '2020-05-17', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(9, '2020-05-18', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(10, '2020-05-19', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(11, '2020-05-20', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(12, '2020-05-21', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(13, '2020-05-22', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(14, '2020-05-23', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(15, '2020-05-24', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(16, '2020-05-25', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(17, '2020-05-26', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(18, '2020-05-27', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(19, '2020-05-28', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(20, '2020-05-29', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(21, '2020-05-30', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(22, '2020-05-31', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(23, '2020-06-01', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(24, '2020-06-02', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(25, '2020-06-03', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(26, '2020-06-04', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(27, '2020-06-05', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(28, '2020-06-06', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(29, '2020-06-07', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(30, '2020-06-08', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(31, '2020-06-09', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(32, '2020-06-10', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(33, '2020-06-11', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(34, '2020-06-12', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(35, '2020-06-13', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(36, '2020-06-14', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(37, '2020-06-15', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(38, '2020-06-16', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(39, '2020-06-17', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(40, '2020-06-18', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(41, '2020-06-19', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(42, '2020-06-20', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(43, '2020-06-21', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(44, '2020-06-22', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(45, '2020-06-23', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(46, '2020-06-24', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(47, '2020-06-25', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(48, '2020-06-26', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(49, '2020-06-27', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(50, '2020-06-28', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(51, '2020-06-29', '2020-05-10 16:05:31', '2020-05-10 16:05:31'),
(52, '2020-05-10', '2020-05-10 16:16:54', '2020-05-10 16:16:54'),
(53, '2020-05-11', '2020-05-10 16:16:54', '2020-05-10 16:16:54'),
(54, '2020-05-12', '2020-05-10 16:16:54', '2020-05-10 16:16:54'),
(55, '2020-05-11', '2020-05-10 16:19:23', '2020-05-10 16:19:23'),
(56, '2020-05-12', '2020-05-10 16:19:23', '2020-05-10 16:19:23'),
(57, '2020-05-13', '2020-05-10 16:19:23', '2020-05-10 16:19:23'),
(58, '2020-12-10', '2020-05-11 18:28:48', '2020-05-11 18:28:48'),
(59, '2020-12-11', '2020-05-11 18:28:48', '2020-05-11 18:28:48'),
(60, '2020-12-12', '2020-05-11 18:28:48', '2020-05-11 18:28:48');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Tablo için indeksler `faturas`
--
ALTER TABLE `faturas`
  ADD PRIMARY KEY (`fatura_id`),
  ADD KEY `müsteri_id` (`müsteri_id`),
  ADD KEY `sefer_id` (`sefer_id`);

--
-- Tablo için indeksler `havalimanlarıs`
--
ALTER TABLE `havalimanlarıs`
  ADD PRIMARY KEY (`liman_id`),
  ADD KEY `sehir_id` (`sehir_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `rotas`
--
ALTER TABLE `rotas`
  ADD PRIMARY KEY (`rota_id`),
  ADD KEY `liman_id` (`liman_id`),
  ADD KEY `hedef_liman_id` (`hedef_liman_id`);

--
-- Tablo için indeksler `seferlers`
--
ALTER TABLE `seferlers`
  ADD PRIMARY KEY (`sefer_id`),
  ADD KEY `ucak_id` (`ucak_id`),
  ADD KEY `ucus_id` (`ucus_id`);

--
-- Tablo için indeksler `sehirlers`
--
ALTER TABLE `sehirlers`
  ADD PRIMARY KEY (`sehir_id`);

--
-- Tablo için indeksler `ucaklars`
--
ALTER TABLE `ucaklars`
  ADD PRIMARY KEY (`ucak_id`);

--
-- Tablo için indeksler `ucuslars`
--
ALTER TABLE `ucuslars`
  ADD PRIMARY KEY (`ucus_id`),
  ADD KEY `plan_id` (`plan_id`),
  ADD KEY `rota_id` (`rota_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `yıllık_plans`
--
ALTER TABLE `yıllık_plans`
  ADD PRIMARY KEY (`yıllık_plan_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `faturas`
--
ALTER TABLE `faturas`
  MODIFY `fatura_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `havalimanlarıs`
--
ALTER TABLE `havalimanlarıs`
  MODIFY `liman_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `rotas`
--
ALTER TABLE `rotas`
  MODIFY `rota_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `seferlers`
--
ALTER TABLE `seferlers`
  MODIFY `sefer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `sehirlers`
--
ALTER TABLE `sehirlers`
  MODIFY `sehir_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `ucaklars`
--
ALTER TABLE `ucaklars`
  MODIFY `ucak_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ucuslars`
--
ALTER TABLE `ucuslars`
  MODIFY `ucus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yıllık_plans`
--
ALTER TABLE `yıllık_plans`
  MODIFY `yıllık_plan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `faturas`
--
ALTER TABLE `faturas`
  ADD CONSTRAINT `faturas_ibfk_1` FOREIGN KEY (`müsteri_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faturas_ibfk_2` FOREIGN KEY (`sefer_id`) REFERENCES `seferlers` (`sefer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `havalimanlarıs`
--
ALTER TABLE `havalimanlarıs`
  ADD CONSTRAINT `havalimanlarıs_ibfk_1` FOREIGN KEY (`sehir_id`) REFERENCES `sehirlers` (`sehir_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `rotas`
--
ALTER TABLE `rotas`
  ADD CONSTRAINT `rotas_ibfk_1` FOREIGN KEY (`liman_id`) REFERENCES `havalimanlarıs` (`liman_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rotas_ibfk_2` FOREIGN KEY (`hedef_liman_id`) REFERENCES `havalimanlarıs` (`liman_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `seferlers`
--
ALTER TABLE `seferlers`
  ADD CONSTRAINT `seferlers_ibfk_1` FOREIGN KEY (`ucak_id`) REFERENCES `ucaklars` (`ucak_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seferlers_ibfk_2` FOREIGN KEY (`ucus_id`) REFERENCES `ucuslars` (`ucus_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `ucuslars`
--
ALTER TABLE `ucuslars`
  ADD CONSTRAINT `ucuslars_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `yıllık_plans` (`yıllık_plan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ucuslars_ibfk_2` FOREIGN KEY (`rota_id`) REFERENCES `rotas` (`rota_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
