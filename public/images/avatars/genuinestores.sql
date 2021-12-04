-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2021 at 04:23 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genuinestores`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'electronics', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Clothing', 'clothing', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Fashion', 'fashion', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) UNSIGNED NOT NULL,
  `prod_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `prod_id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, '1633606255_dc5b54547310f3f54238.jpg', 'image/jpeg', '2021-10-07 06:30:55', '2021-10-07 06:30:55'),
(2, 1, '1633606255_97fb18fa10770925c74e.jpg', 'image/jpeg', '2021-10-07 06:30:55', '2021-10-07 06:30:55'),
(3, 2, '1633606255_2be0a22e5ac00260cc16.jpeg', 'image/jpeg', '2021-10-07 06:30:55', '2021-10-07 06:30:55'),
(4, 3, '1633606255_3ee3aa4679b0041d7f94.jpg', 'image/jpeg', '2021-10-07 06:30:55', '2021-10-07 06:30:55'),
(5, 2, '1633607658_16418bdd2dbb753d36d5.jpg', 'image/jpeg', '2021-10-07 06:54:18', '2021-10-07 06:54:18'),
(6, 5, '1633607658_e361d21bb19180737a0d.jpg', 'image/jpeg', '2021-10-07 06:54:18', '2021-10-07 06:54:18'),
(7, 6, '1633607658_050a90fec87d40a8d50c.jpg', 'image/jpeg', '2021-10-07 06:54:18', '2021-10-07 06:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2021-09-23-102510', 'App\\Database\\Migrations\\Users', 'default', 'App', 1632396878, 1),
(4, '2021-09-25-081454', 'App\\Database\\Migrations\\CreateProductTable', 'default', 'App', 1632558697, 2),
(5, '2021-09-25-082021', 'App\\Database\\Migrations\\CreateCategoryTable', 'default', 'App', 1632558697, 2),
(6, '2021-09-25-082830', 'App\\Database\\Migrations\\CreateOrderTable', 'default', 'App', 1632558697, 2),
(7, '2021-09-25-085829', 'App\\Database\\Migrations\\CreateUserRoleTable', 'default', 'App', 1633134774, 3),
(8, '2021-10-02-002838', 'App\\Database\\Migrations\\CreateProductImagesTable', 'default', 'App', 1633134774, 3),
(9, '2021-10-15-052640', 'App\\Database\\Migrations\\ImageSlider', 'default', 'App', 1634275803, 4),
(10, '2021-10-22-112340', 'App\\Database\\Migrations\\CompleteUserOrder', 'default', 'App', 1634902072, 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `order_no`, `qty`, `price`, `product_name`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '1', 'genuinestore_98083', '1', 3000, 'Clothing', '1633606255_c0fc4537b845c096c686.png', 0, '2021-10-26 07:35:24', '2021-10-26 10:14:23'),
(2, '2', '2', 'genuinestore_51696', '1', 3000, 'LG - Smart Tv', '1633607658_e72ff5272def390c27c9.jpg', 0, '2021-10-26 07:35:24', '2021-10-26 10:14:23'),
(3, '2', '2', 'genuinestore_40753', '3', 3000, 'LG - Smart Tv', '1633607658_e72ff5272def390c27c9.jpg', 0, '2021-10-26 07:36:05', '2021-10-26 10:14:23'),
(4, '4', '2', 'genuinestore_82063', '1', 30000, 'LG - Smart Tv', '1633607658_e72ff5272def390c27c9.jpg', 1, '2021-10-26 08:57:31', '2021-10-26 10:55:20'),
(5, '4', '1', 'genuinestore_110369', '1', 30000, 'Clothing', '1633606255_c0fc4537b845c096c686.png', 1, '2021-10-26 08:57:31', '2021-10-26 10:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cprice` varchar(255) NOT NULL,
  `sprice` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `slug`, `cprice`, `sprice`, `qty`, `cat_id`, `status`, `description`, `cover_img`, `created_at`, `updated_at`) VALUES
(1, 'Clothing', 'T-Shirt', 'clothing', '25000', '30000', '50', 3, '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia earum eum provident officiis quaerat quisquam rem deleniti voluptatibus porro quibusdam! A eaque qui accusamus incidunt nulla in distinctio enim rerum!', '1633606255_c0fc4537b845c096c686.png', '2021-10-07 06:30:55', '2021-10-07 06:30:55'),
(2, 'LG - Smart Tv', 'Television', 'lg-smart-tv', '25000', '30000', '50', 1, '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia earum eum provident officiis quaerat quisquam rem deleniti voluptatibus porro quibusdam! A eaque qui accusamus incidunt nulla in distinctio enim rerum!', '1633607658_e72ff5272def390c27c9.jpg', '2021-10-07 06:54:18', '2021-10-07 06:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) UNSIGNED NOT NULL,
  `slider` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','customer','') NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `phone`, `email`, `role`, `country`, `city`, `address`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Ifeanyi', 'Elemson', 'male', '08067407355', 'admin@genuinestores.com', 'admin', 'Nigeria', 'Lagos', 'Lagos Nigeria', '$2y$10$8ADzzOXkhWH78xJle0ryH.BUY4.ynmqKyejSkQUcMvvT8wILMk6ni', '2021-10-03 04:24:48', '2021-10-03 04:24:48'),
(4, 'Elemson', 'ifeanyi', 'male', '07086708146', 'ielemson@gmail.com', 'customer', 'Nigeria', 'Lagos', ' This is my address ', '$2y$10$i/pOH.kOiGsRWyqguKNKVOwqdKTF4hU7Z7TgmMcd2lrWH5lIjAoua', '2021-10-22 06:02:14', '2021-10-22 06:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
