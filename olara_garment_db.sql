-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 05:53 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olara_garment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addvertismentnew`
--

CREATE TABLE `addvertismentnew` (
  `add_id` int(10) UNSIGNED NOT NULL,
  `add_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_discription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addvertisments`
--

CREATE TABLE `addvertisments` (
  `add_id` int(10) UNSIGNED NOT NULL,
  `add_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_discription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addvertisments`
--

INSERT INTO `addvertisments` (`add_id`, `add_title`, `add_discription`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sales', 'about new year sales', '28957.jpg', '2019-09-10 11:22:16', '2019-09-10 11:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `add_designs`
--

CREATE TABLE `add_designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desctiption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metirial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_designs`
--

INSERT INTO `add_designs` (`id`, `created_at`, `updated_at`, `title`, `image`, `desctiption`, `size`, `quantity`, `color`, `metirial`, `orderDate`) VALUES
(1, '2019-09-09 21:05:51', '2019-09-09 21:05:51', 'Frock', 'C:\\wamp64\\tmp\\php56EE.tmp', 'cghv cgb', 'Medium', 'bbk', 'blue', 'wetlook', '2019-09-03'),
(2, '2019-09-10 02:16:22', '2019-09-10 02:16:22', 't_shirt', 'C:\\wamp64\\tmp\\phpB5D.tmp', 'hikj', 'Small', '20', 'blue', 'wetlook', '2019-09-19'),
(3, '2019-09-10 16:17:07', '2019-09-10 16:17:07', 't_shirt', 'C:\\wamp64\\tmp\\phpFE7.tmp', 'fcvhjnl', 'Medium', 'hhbk', 'blue', 'wetlook', '2019-09-20'),
(4, '2019-09-10 21:50:03', '2019-09-10 21:50:03', 't_shirt', 'C:\\wamp64\\tmp\\phpDAA3.tmp', 'Black cotton Tshirt with following design', 'Small', '50', 'black', 'coton', '2019-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_payments`
--

CREATE TABLE `bank_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `deposit_date` date NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitprice` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `cus_id`, `qty`, `color`, `size`, `unitprice`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 3, 7, 20, 'Black', 'Small', 1000, 20000, '2019-09-10 04:46:18', '2019-09-10 04:46:18'),
(2, 2, 2, 5, 'Blue', 'Medium', 1500, 7500, '2019-09-10 04:55:41', '2019-09-10 04:55:41'),
(3, 2, 2, 20, 'Black', 'Small', 1500, 30000, '2019-09-10 07:07:51', '2019-09-10 07:07:51'),
(4, 2, 2, 20, 'Black', 'Small', 1500, 30000, '2019-09-10 08:41:18', '2019-09-10 08:41:18'),
(5, 2, 11, 20, 'Black', 'Small', 1500, 30000, '2019-09-10 21:38:14', '2019-09-10 21:38:14'),
(6, 2, 12, 20, 'Red', 'Small', 1500, 30000, '2019-09-10 21:47:24', '2019-09-10 21:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `url`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'T shirts', 'tshirts new', 'tshirts.lk', 0, NULL, '2019-09-09 07:06:26', '2019-09-10 11:19:12'),
(2, 0, 'Frocks', 'new linan frocks', 'frocks.lk', 0, NULL, '2019-09-09 14:45:46', '2019-09-09 14:45:46'),
(3, 0, 'Tops', 'new Kurutha Tops', 'Tops.lk', 0, NULL, '2019-09-09 14:46:11', '2019-09-09 14:46:11'),
(4, 0, 'Blouse', 'Blouses for young ladies', 'blouse.lk', 0, NULL, '2019-09-09 14:46:44', '2019-09-09 14:46:44'),
(5, 0, 'Jeans', 'new Jeans', 'Jeans.lk', 0, NULL, '2019-09-09 14:47:08', '2019-09-09 14:47:08'),
(6, 0, 'Skirts', 'Skirts from malashiya', 'Skirts.lk', 0, NULL, '2019-09-09 14:47:35', '2019-09-09 14:47:35'),
(7, 0, 'shorts', 'new shorts', 'shorts.lk', 0, NULL, '2019-09-10 11:18:00', '2019-09-10 11:18:00'),
(8, 0, 'Hats', 'New Hats', 'hats.lk', 0, NULL, '2019-09-10 15:29:38', '2019-09-10 15:29:38'),
(10, 0, 'wefd', 'sdv', 'sdcdf', 0, NULL, '2019-09-10 16:27:21', '2019-09-10 16:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `fname`, `comment`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'sajani', 'Deliver Late', 2, '2019-09-10 06:37:04', '2019-09-10 06:37:04'),
(8, 'akila', 'Products are excellent.!!\r\nThank You', 9, '2019-09-10 20:50:30', '2019-09-10 20:50:30'),
(9, 'Navindya', 'wow :) delivery so fast...!!', 12, '2019-09-10 21:02:11', '2019-09-10 21:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Shamilani', 'Kamal@gmail.com', 'sales', 'details', '2019-09-10 06:50:51', '2019-09-10 06:50:51'),
(2, 'maheshika kularathna', 'madukularathnePP@gmail.com', 'sales', 'please send the sales details', '2019-09-10 20:14:56', '2019-09-10 20:14:56'),
(3, 'Navi', 'navindyajy@gmail.com', 'Sales', 'Can you give more sales details', '2019-09-10 21:48:34', '2019-09-10 21:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `cproducts`
--

CREATE TABLE `cproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagePath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `email`, `password`, `address`, `contactno`, `districcode`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'akila', 'shiran', 'akila@gmail.com', '$2y$10$gHjV2F1iquELttamFdNKpewC6Ighlziq0B53BCRu2XkG6stKr.eGm', 'palmadulla', '0717777894', NULL, 'biw5Nvm3lDlIIz2MtxBcMtmfcoUj5Gebcp6phylXDeaPzbBp7oI6puqKFyo8', '2019-09-10 11:03:48', '2019-09-10 11:03:48'),
(10, 'madushani', 'kularathna', 'madukularathna94@gmail.com', '$2y$10$liZvYapczjXTbWenxSV5bemQEjZX7hXzN4JLG41UjpeIripRDUn5.', 'badulla', '0771234568', NULL, '1f4d2KeQ6lFk4rtrIuofaHOGfOTZP9BuyTuBK4iYHJdtj2YECubvey20ueC1', '2019-09-10 11:05:03', '2019-09-10 11:05:03'),
(11, 'samadhini', 'withanage', 'withanage@gmail.com', '$2y$10$2Rwa8k/NTD6YX1cDCTEef.j7kinipwyKeXR3X0mHNSv3cPICvJKD2', 'Aranayake', '0770123654', '1', 'wRDIDn8VzOZXECfXRSvoV41zdgoyDG7pPSxoEfUKAq2ryxMdSK0Rs2ZTU0YV', '2019-09-10 11:06:43', '2019-09-10 11:06:43'),
(12, 'Navindya', 'Jayasekara', 'navindyajy@gmail.com', '$2y$10$Zgj/PTUUoOszmsELClK2qeSYujRDFq0topsWp/.A.wGRRYKwJjOdG', 'Ambalangoda', '0716010655', NULL, 'Huswrz0XzurECUFLYkoUEiupQr13GyNtt87zaB2KCtKuhzPbGGDN8KuR60wt', '2019-09-10 21:00:12', '2019-09-10 21:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desctiption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metirial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderDate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(98, '2014_10_12_000000_create_users_table', 6),
(145, '2014_10_12_000000_create_customers_table', 15),
(100, '2019_06_16_062215_create_comments_table', 6),
(5, '2019_06_16_062340_create_designs_table', 1),
(101, '2019_06_16_062246_create_rates_table', 6),
(102, '2019_06_16_062356_create_customers_table', 6),
(103, '2019_06_16_062415_create_carts_table', 6),
(146, '2014_10_12_100000_create_password_resets_table', 15),
(147, '2019_06_16_062434_create_orders_table', 15),
(148, '2019_06_16_062458_create_payments_table', 15),
(149, '2019_06_16_062525_create_bank_payments_table', 15),
(150, '2019_06_16_062600_create_products_table', 15),
(29, '2019_06_16_062728_create_categories_table', 2),
(110, '2019_06_16_062756_create_addvertisments_table', 6),
(151, '2019_06_16_062624_create_admins_table', 15),
(63, '2019_06_17_174737_create_category_table', 3),
(64, '2019_06_17_180111_create_category_table', 4),
(96, '2019_06_18_112141_create_category_table', 5),
(113, '2019_06_18_120730_create_category_table', 6),
(152, '2019_06_16_062644_create_sales_table', 15),
(153, '2019_06_17_145008_create_cproducts_table', 15),
(154, '2019_06_17_165213_create_add_designs_table', 15),
(155, '2019_06_18_121832_create_category_table', 15),
(156, '2019_09_08_070424_create_carts_table', 15),
(157, '2019_09_08_082016_create_Addvertismentnew_table', 15),
(121, '2019_09_09_001430_create_comment_table', 14),
(158, '2019_09_08_085324_create_addvertisments_table', 15),
(159, '2019_09_08_202926_create_ratings_table', 15),
(160, '2019_09_08_203132_create_posts_table', 15),
(161, '2019_09_09_002754_create_comments_table', 15),
(162, '2019_09_09_003040_create_replies_table', 15),
(163, '2019_09_09_003600_add_coloum_user_id_in_replies', 15),
(164, '2019_09_09_005745_create_contacts_table', 15),
(165, '2019_09_08_070425_create_carts_table', 16),
(166, '2019_09_10_162538_create_admin_table', 17),
(167, '2019_09_10_173705_create_users_table', 18),
(168, '2019_09_10_180134_create_ratings_table', 19),
(169, '2019_09_10_180230_create_posts_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `cus_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `payment_invoice_no` int(11) NOT NULL,
  `pay_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `cus_id`, `amount`, `date`, `payment_invoice_no`, `pay_method`, `created_at`, `updated_at`) VALUES
(1, 9, 1500, '2019-09-01', 456, 'paypal', NULL, NULL),
(2, 9, 5000, '2019-09-04', 459, 'paypal', NULL, NULL),
(3, 10, 3500, '2019-09-05', 459, 'paypal', NULL, NULL),
(4, 10, 2000, '2019-09-05', 462, 'paypal', NULL, NULL),
(5, 9, 750, '2019-09-08', 456, 'paypal', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Service', NULL, NULL),
(2, 'Products', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_date`, `category_id`, `pro_name`, `pro_size`, `pro_code`, `pro_details`, `pro_color`, `pro_price`, `image`, `created_at`, `updated_at`) VALUES
(2, '2019-09-11', 2, 'cotton frocks', 'S', 'fr001', 'QC Level:05 , Meterial :cotton', 'Red', 1500.00, '5713.jpg', '2019-09-09 14:49:19', '2019-09-10 22:05:49'),
(3, '2019-09-19', 2, 'Silks Frocks', 'l', 'fr002', 'QC Level:05, Metirial: Silks', 'pink', 1000.00, '40971.png', '2019-09-09 14:58:06', '2019-09-10 22:06:28'),
(4, '2019-09-13', 5, 'denim Jeans', 'M', 'j001', 'QC Level:05, Metirial:denim', 'blue', 1200.00, '6930.jpg', '2019-09-09 14:59:36', '2019-09-09 14:59:36'),
(5, '2019-09-21', 3, 'denim Tops', 'S', 'blue', 'QC level:05 , Meterial :denim', 'blue', 2000.00, '98981.jpg', '2019-09-09 15:00:46', '2019-09-09 15:00:46'),
(6, '2019-09-19', 4, 'indian Blouses', 'l', 'bl001', 'QC level:05, meterial:cotton', 'white', 1500.00, '28546.jpg', '2019-09-09 15:10:45', '2019-09-09 15:10:45'),
(8, '2019-09-12', 3, 'kurutha Tops', 'extra small', 'TP002', 'QC: level 05 , Meterial : Handloom', 'blue', 1200.00, '37093.jpg', '2019-09-10 13:23:47', '2019-09-10 13:23:47'),
(10, '2019-09-20', 6, 'Cotton Skirts', 'Learge', 'sk003', 'Cotton Skirts', 'blue', 2500.00, '45592.jpg', '2019-09-10 22:14:03', '2019-09-10 22:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_id` int(10) UNSIGNED NOT NULL,
  `rateable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `rateable_id`, `rateable_type`, `user_id`) VALUES
(6, '2019-09-10 12:56:57', '2019-09-10 12:56:57', 4, 1, 'App\\Post', 9),
(7, '2019-09-10 12:57:11', '2019-09-10 12:57:11', 4, 2, 'App\\Post', 9),
(8, '2019-09-10 22:09:32', '2019-09-10 22:09:32', 5, 2, 'App\\Post', 9);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(11) NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `sales_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_product_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `price`, `sales_img`, `sales_product_details`, `created_at`, `updated_at`) VALUES
(3, 1623, '26866.jpg', 'b mjbk', '2019-09-09 21:38:00', '2019-09-09 21:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samadhini', 'sama@gmail.com', 'sama', NULL, NULL, NULL),
(2, 'yuvin', 'yuvin@gmail.com', 'yuvin', NULL, NULL, NULL),
(3, 'kusum', 'kusum@gmail.com', 'kusum', NULL, NULL, NULL),
(4, 'sumanarathna', 'sumanarathna@gmail.com', 'sumanarathna', NULL, NULL, NULL),
(5, 'janith', 'janith@gmail.com', 'janith', NULL, NULL, NULL),
(6, 'saumya', 'saumya@gmail.com', 'saumya', NULL, NULL, NULL),
(7, 'viraj', 'viraj@gmail.com', 'viraj', NULL, NULL, NULL),
(8, 'tharaka', 'tharaka@gmail.com', 'tharaka', NULL, NULL, NULL),
(9, 'nilan', 'nilan@gmail.com', 'nilan', NULL, NULL, NULL),
(10, 'hesara', 'hesara@gmail.com', 'hesara', NULL, NULL, NULL),
(11, 'omika', 'omika@gmail.com', 'omika', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addvertismentnew`
--
ALTER TABLE `addvertismentnew`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `addvertisments`
--
ALTER TABLE `addvertisments`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `add_designs`
--
ALTER TABLE `add_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `bank_payments`
--
ALTER TABLE `bank_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `cproducts`
--
ALTER TABLE `cproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_id_rateable_type_index` (`rateable_id`,`rateable_type`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_index` (`user_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

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
-- AUTO_INCREMENT for table `addvertismentnew`
--
ALTER TABLE `addvertismentnew`
  MODIFY `add_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addvertisments`
--
ALTER TABLE `addvertisments`
  MODIFY `add_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_designs`
--
ALTER TABLE `add_designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_payments`
--
ALTER TABLE `bank_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cproducts`
--
ALTER TABLE `cproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
