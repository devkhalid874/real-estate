-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2025 at 09:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE `about_section` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '<p>Fox Squad Real Estate&nbsp;is a premier real estate firm based in Dubai, dedicated to providing exceptional property solutions for investors, end-users, and tenants. With a deep understanding of the dynamic Dubai real estate market, we offer a diverse portfolio of properties, including&nbsp;luxury residences, commercial spaces, and high-yield investment opportunities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our team of experienced professionals<strong> </strong>is committed to delivering&nbsp;world-class services with integrity, transparency, and innovation, ensuring seamless transactions and maximizing value for our clients.</p>', '1762853069.png', '2025-11-11 04:24:29', '2025-11-11 04:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `buyingselling`
--

CREATE TABLE `buyingselling` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyingselling`
--

INSERT INTO `buyingselling` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Buying and Selling', '<p>At Fox Squad Real Estate, we specialize in helping clients buy and sell properties across Dubai at the best prices in the market. With over 20 years of industry experience, we provide unmatched insights into Dubai&rsquo;s real estate landscape, ensuring our clients receive top-tier service and achieve the best possible deals.</p>\r\n\r\n<p>Whether you&rsquo;re looking to invest in a new property, sell an existing asset, or secure your dream home, our dedicated team is here to guide you through every step of the process. We focus on understanding each client&rsquo;s unique needs and investment goals, offering personalized advice, accurate property valuations, and comprehensive market analysis. Our expert negotiators work to achieve optimal terms, ensuring our clients are well-positioned to make informed decisions.</p>\r\n\r\n<p><strong>Choose Fox Squad Real Estate for all your buying and selling needs in Dubai, where we turn your real estate goals into reality.</strong></p>', '1762853977.jpg', '2025-11-11 04:39:37', '2025-11-11 04:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Damac smart Heights Tecom,Dubai,UAE', '<p><a href=\"http://tel : +971585801932\">+971585801932</a> | +<a href=\"http://tel : +971588766887\">971588766887</a></p>', 'admin@foxsquad.ae', '2025-11-11 05:36:29', '2025-11-11 05:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investdubai`
--

CREATE TABLE `investdubai` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investdubai`
--

INSERT INTO `investdubai` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Why Invest in Dubai?', '<p>✅ <strong>Tax-Free Environment</strong>&nbsp;&ndash; No income tax, capital gains tax, or inheritance tax.</p>\r\n\r\n<p>✅&nbsp;<strong>High Rental Yields</strong>&nbsp;&ndash; Dubai offers some of the world&rsquo;s most attractive rental returns.</p>\r\n\r\n<p>✅&nbsp;<strong>Strategic Location</strong>&nbsp;&ndash; A global hub connecting Europe, Asia, and Africa.</p>\r\n\r\n<p>✅&nbsp;<strong>Investor-Friendly Policies</strong>&nbsp;&ndash; 100% foreign ownership and long-term residence visas.</p>\r\n\r\n<p>✅&nbsp;<strong>World-Class Infrastructure</strong>&nbsp;&ndash; Luxury living, business-friendly environment, and futuristic developments.</p>', '1762942016.png', '2025-11-12 05:06:02', '2025-11-12 05:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lease`
--

CREATE TABLE `lease` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lease`
--

INSERT INTO `lease` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Renting and Leasing Services in Dubai – Fox Squad Real Estate', '<p>Fox Squad Real Estate offers seamless renting and leasing solutions across Dubai, connecting clients with the best rental properties and quality tenants. With deep expertise in Dubai&rsquo;s rental market and a commitment to exceptional service, we simplify the process of renting and leasing for property owners and tenants alike.</p>\r\n\r\n<p>For property owners, we provide full-service leasing management, from tenant sourcing and screening to contract management and maintenance coordination. Our team ensures that each rental property is marketed effectively to attract reliable tenants, maximizing occupancy rates and rental income.</p>\r\n\r\n<p>For tenants, we offer a wide range of rental options to suit every need and lifestyle, whether you&#39;re looking for a cozy apartment or a spacious family home. We prioritize clear communication and transparency, helping tenants find their ideal property with ease and confidence.</p>\r\n\r\n<p><strong>Choose Fox Squad Real Estate for all your renting and leasing needs in Dubai &ndash; where our expertise and dedication lead to successful tenancies.</strong></p>', '1762853899.jpg', '2025-11-11 04:38:19', '2025-11-11 04:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_06_103630_add_is_admin_to_users_table', 2),
(6, '2025_11_06_144914_about_section', 3),
(7, '2025_11_10_093443_create_property_management_table', 4),
(8, '2025_11_10_101215_create_lease_table', 5),
(9, '2025_11_10_103233_create_buyingselling_table', 6),
(10, '2025_11_10_105447_create_offplan_table', 7),
(11, '2025_11_11_100306_create_contact_table', 8),
(12, '2025_11_11_104139_create_partnership_table', 9),
(13, '2025_11_11_110458_create_squad_table', 10),
(14, '2025_11_11_114904_create_ourvision_table', 11),
(15, '2025_11_12_082543_create_ourmission_table', 12),
(17, '2025_11_12_090233_create_ourservices_controller', 13),
(18, '2025_11_12_092736_create_whychooseus_table', 14),
(19, '2025_11_12_094528_create_investdubai_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `offplan`
--

CREATE TABLE `offplan` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offplan`
--

INSERT INTO `offplan` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Off-Plan Property', '<p>Fox Squad Real Estate offers expert guidance in off-plan investments across Dubai, partnering with the city&rsquo;s top developers, including Emaar, Damac, Azizi, Sobha, Danube, Nakheel, Deyaar, and The Heart of Europe. Our team connects clients with a diverse range of premium off-plan projects, giving investors early access to Dubai&rsquo;s most exciting and high-potential developments.</p>\r\n\r\n<p>Our off-plan services include detailed project insights, market analysis, and guidance through every step of the buying process. Whether you&rsquo;re looking for luxury waterfront living, vibrant urban residences, or unique investment opportunities, we help you select projects that align with your goals and maximize future returns.</p>\r\n\r\n<p><strong>Trust Fox Squad Real Estate for off-plan investments in Dubai, where we help you build your future in the city&rsquo;s most promising developments.</strong></p>', '1762854061.jpg', '2025-11-11 04:41:01', '2025-11-11 04:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `ourmission`
--

CREATE TABLE `ourmission` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourmission`
--

INSERT INTO `ourmission` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Our Mission', '<p><strong>✔ </strong>To offer **innovative** and tailored real estate solutions for investors, homeowners, and tenants.</p>\r\n\r\n<p><strong>✔ </strong>To uphold the highest standards of **professionalism, ethics, and client satisfaction**.</p>\r\n\r\n<p><strong>✔ </strong>To leverage **market insights and technology** for enhanced property investment decisions.</p>', '2025-11-12 03:43:31', '2025-11-12 04:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `ourservices`
--

CREATE TABLE `ourservices` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourservices`
--

INSERT INTO `ourservices` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Our Services', '<p>🏡&nbsp;<strong>Residential Sales &amp; Leasing</strong>&nbsp;&ndash; Find the perfect home or rental in Dubai&rsquo;s prime locations.</p>\r\n\r\n<p>🏢&nbsp;<strong>Commercial Properties</strong>&nbsp;&ndash; Office spaces, retail units, and warehouses tailored to business needs.</p>\r\n\r\n<p>📈&nbsp;<strong>Investment Advisory</strong>&nbsp;&ndash; Maximize ROI with expert insights on high-growth opportunities.</p>\r\n\r\n<p>🛠&nbsp;<strong>Property Management</strong>&nbsp;&ndash; Hassle-free management solutions for landlords and investors.</p>\r\n\r\n<p>📃&nbsp;<strong>Legal &amp; Financial Assistance</strong>&nbsp;&ndash; Guidance on mortgages, visas, and property transactions.</p>', '1762939517.png', '2025-11-12 04:25:17', '2025-11-12 04:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `ourvision`
--

CREATE TABLE `ourvision` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourvision`
--

INSERT INTO `ourvision` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Our Vision', '<p>&quot;To be the most trusted and preferred real estate partner in Dubai, delivering unparalleled service and investment opportunities that shape the future of the city&rsquo;s skyline.&quot;</p>', '2025-11-11 07:11:05', '2025-11-11 07:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Fox Partnership', '1762858912.jpg', '2025-11-11 06:01:06', '2025-11-11 06:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_management`
--

CREATE TABLE `property_management` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_management`
--

INSERT INTO `property_management` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Property Management', '<p>At Fox Squad Real Estate, we offer property owners the ultimate peace of mind with our exclusive property management services across Dubai. With over 20 years of experience in the market, we provide a fully hands-off experience for owners looking to maximize their rental returns without the day-to-day stress of property management. By giving us exclusive management of your property, you can rest assured that every aspect is handled professionally, from tenant sourcing and screening to maintenance, rent collection, and legal compliance. We take on all responsibilities, managing everything from minor repairs to lease renewals, allowing you to enjoy consistent returns and worry-free property ownership.</p>\r\n\r\n<p>With Fox Squad Real Estate, your investment is in expert hands. You receive steady, reliable rental income while we handle the challenges. Our commitment is to protect and grow your ROI, ensuring a seamless experience that lets you focus on enjoying the benefits of property ownership &ndash; without the headaches.</p>\r\n\r\n<p><strong>Choose Fox Squad Real Estate as Your Exclusive Property management partner in Dubai, and enjoy a truly stress-free ownership experience.</strong></p>', '1762853767.jpg', '2025-11-11 04:36:07', '2025-11-11 04:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iNNnzcQiFkpAMDg0kQ5ooD5v6xD1aYlP1Rj9pLkm', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOTJ1d1JieGhWU1dYVWdEOHkwZ25TTHFlU2g0c3ZGaVFoWDBSU0ZzYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hYm91dC1zZWN0aW9ucyI7czo1OiJyb3V0ZSI7czoxNzoiYWRtaW4uYWJvdXQuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1763024560);

-- --------------------------------------------------------

--
-- Table structure for table `squad`
--

CREATE TABLE `squad` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `squad`
--

INSERT INTO `squad` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Junaid Umrani', 'Managing Director', '1762860948.jpg', '2025-11-11 06:35:48', '2025-11-11 06:35:48'),
(2, 'Mazhar Hussain', 'Senior Agent', '1762860982.jpg', '2025-11-11 06:36:22', '2025-11-11 06:36:22'),
(3, 'Faisal Abro', 'Senior Advisor', '1762861018.jpg', '2025-11-11 06:36:58', '2025-11-11 06:36:58'),
(4, 'Isabella Blanchard', 'H.R Manager', '1762861162.jpg', '2025-11-11 06:39:22', '2025-11-11 06:39:22'),
(5, 'Priya Gupta', 'Agent', '1762861310.jpg', '2025-11-11 06:41:50', '2025-11-11 06:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$QyFamkImI5muOzFKacVKUe/VFt8ao4sNKfuiBD6QnIJ4oTq84pwVi', 1, NULL, '2025-11-06 05:41:17', '2025-11-06 05:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `whychooseus`
--

CREATE TABLE `whychooseus` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooseus`
--

INSERT INTO `whychooseus` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Why Choose Us?', '<p><strong>✔ Expert Market Insights</strong>&nbsp;&ndash; Stay ahead with data-driven strategies.</p>\r\n\r\n<p><strong>✔&nbsp;Wide Property Selection</strong>&nbsp;&ndash; From luxury villas to affordable apartments.</p>\r\n\r\n<p><strong>✔&nbsp;Personalized Consultation</strong>&nbsp;&ndash; We understand your needs and deliver tailored solutions.</p>\r\n\r\n<p><strong>✔&nbsp;Transparency &amp; Trust</strong>&nbsp;&ndash; Ethical practices and customer-first approach.</p>', '1762940590.png', '2025-11-12 04:41:28', '2025-11-12 04:43:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_section`
--
ALTER TABLE `about_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyingselling`
--
ALTER TABLE `buyingselling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `investdubai`
--
ALTER TABLE `investdubai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lease`
--
ALTER TABLE `lease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offplan`
--
ALTER TABLE `offplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourmission`
--
ALTER TABLE `ourmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourservices`
--
ALTER TABLE `ourservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourvision`
--
ALTER TABLE `ourvision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `property_management`
--
ALTER TABLE `property_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `squad`
--
ALTER TABLE `squad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whychooseus`
--
ALTER TABLE `whychooseus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_section`
--
ALTER TABLE `about_section`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyingselling`
--
ALTER TABLE `buyingselling`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investdubai`
--
ALTER TABLE `investdubai`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lease`
--
ALTER TABLE `lease`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `offplan`
--
ALTER TABLE `offplan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourmission`
--
ALTER TABLE `ourmission`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourservices`
--
ALTER TABLE `ourservices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourvision`
--
ALTER TABLE `ourvision`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_management`
--
ALTER TABLE `property_management`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `squad`
--
ALTER TABLE `squad`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whychooseus`
--
ALTER TABLE `whychooseus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
