-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 07, 2020 lúc 06:31 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3_blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Food', 1, '2020-03-05 16:16:21', '2020-03-06 09:28:37'),
(2, 'Tech', 1, '2020-03-05 19:24:43', '2020-03-05 19:24:43'),
(3, 'Travel', 1, '2020-03-05 22:39:46', '2020-03-05 22:39:46'),
(4, 'Music', 1, '2020-03-06 22:11:48', '2020-03-06 22:11:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'hay', 4, '2020-03-06 06:16:50', '2020-03-06 06:16:50'),
(2, 3, 'Nice!', 1, '2020-03-06 06:50:00', '2020-03-06 06:50:00'),
(3, 5, 'axc', 1, '2020-03-06 06:51:45', '2020-03-06 06:51:45'),
(4, 5, 'good job', 1, '2020-03-06 06:57:19', '2020-03-06 06:57:19'),
(5, 1, 'abc', 1, '2020-03-06 18:03:01', '2020-03-06 18:03:01');

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
(1, '2020_03_05_214543_create_users_table', 1),
(2, '2020_03_05_214626_create_posts_table', 1),
(3, '2020_03_05_214705_create_categories_table', 1),
(4, '2020_03_05_214847_create_comments_table', 1),
(5, '2020_03_06_085726_update_users_table', 2),
(6, '2020_03_06_091730_update_users_table', 3),
(7, '2020_03_06_092043_update_role_users_table', 4),
(8, '2020_03_06_093137_update_users_table_drop_isactive', 5),
(9, '2020_03_06_093256_update_users_table_drop_isactive', 6),
(10, '2020_03_06_093432_update_users_table_isactive', 7),
(11, '2020_03_06_132635_update_comments_table_drop_isactive', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` int(11) NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `like`, `view`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ispum Expedita', 'Expedita qui quia accusamus perferendis doloremque magnam. Et consequatur officiis qui quia. Quas vel consequatur occaecati vitae modi. Voluptatem et repudiandae at dicta inventore eaque. Eaque dignissimos quia unde voluptates et dolor. Voluptas velit et aperiam eum.', NULL, 0, '0', 1, 4, '2020-03-05 18:30:09', '2020-03-06 21:51:32'),
(2, 'Consequatur dolorem est sunt.', 'Neque omnis qui labore earum deleniti inventore in. Et minima ut exercitationem fuga. Et nobis id saepe animi dolor. Sit voluptatibus a sint. Ut ipsam corrupti magni quia. Beatae quia cupiditate dolorem architecto illum.', NULL, 0, '0', 3, 0, '2020-03-05 18:30:09', '2020-03-05 18:30:09'),
(3, 'Sequi maxime dolores qui ea eveniet odit voluptatem nihil.', 'Voluptatem aut voluptas eum ut tempora et. Enim aut unde ut ea aliquid. Numquam dolorum unde ut ipsum molestiae. Rem velit est placeat neque. Consequatur placeat neque nesciunt magni. Quos consequatur est ab molestias sunt officia ex.', NULL, 0, '0', 2, 8, '2020-03-05 18:30:09', '2020-03-06 19:11:16'),
(4, 'Atque aut aperiam laborum perspiciatis.', 'Ut dolorum et dignissimos minima. Est voluptate debitis aut neque voluptatem cumque sint. Amet repudiandae repudiandae odit veniam sapiente enim. Voluptatem similique vel et in ipsum dolores pariatur vel.', NULL, 0, '0', 1, 3, '2020-03-05 18:30:09', '2020-03-06 19:11:23'),
(5, 'Dolor itaque molestiae numquam voluptates iusto expedita deleniti.', 'Aut animi enim a accusantium quas enim. Optio voluptas dolores vel fuga et quod aspernatur vel. Eaque ex labore ducimus dolores maxime ad beatae assumenda. Optio deleniti est libero laudantium omnis. Recusandae qui reiciendis soluta magnam sunt sint autem. Dolorem et ut aperiam impedit ducimus omnis.', NULL, 0, '0', 2, 3, '2020-03-05 18:30:09', '2020-03-06 19:11:33'),
(6, 'Velit repudiandae recusandae voluptatem voluptatem doloremque.', 'Ut quos alias enim consequuntur. Porro sit occaecati iste et ipsa ut et. Reiciendis vel aut quisquam quo eum quisquam voluptatem. Dolorem magnam quia tempore incidunt qui architecto autem. Sapiente voluptatum explicabo deleniti sit nostrum aut.', NULL, 0, '0', 2, 8, '2020-03-05 18:30:09', '2020-03-05 18:30:09'),
(7, 'Sit soluta in perferendis eveniet sint similique blanditiis et.', 'Harum sed voluptatem dignissimos possimus est dolorum est. Est quas provident cupiditate illum cumque laudantium corporis. Et tempore vero quaerat dicta dicta aut aut. Ut dolorem iusto nihil cum.', NULL, 0, '0', 2, 6, '2020-03-05 18:30:09', '2020-03-06 19:12:00'),
(8, 'Et eaque ipsa eum.', 'Ipsam cumque vel eaque aut amet amet error. Consequatur assumenda cumque saepe iste adipisci mollitia veritatis sed. Neque aliquam laboriosam at velit quia doloremque. Quia et omnis perspiciatis deserunt praesentium voluptas.', NULL, 0, '0', 2, 4, '2020-03-05 18:30:09', '2020-03-06 19:11:48'),
(9, 'Et voluptatem architecto provident cumque sed sit sequi.', 'Sint officiis odio corporis sunt aut assumenda consequatur quas. Animi provident inventore esse aut alias. A omnis eum consectetur molestiae totam eligendi provident. Accusamus porro nulla nisi aspernatur. Quam et est veritatis et non sit. Repudiandae rerum est excepturi qui neque.', NULL, 0, '0', 1, 6, '2020-03-05 18:30:09', '2020-03-06 19:11:41'),
(52, '5 Mẹo nấu ăn', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, culpa aliquid. Suscipit, quidem alias quod excepturi est tenetur natus temporibus? Repudiandae numquam ipsam dolore. Ad sequi in minima harum delectus.', NULL, 0, '0', 1, 1, '2020-03-06 09:32:02', '2020-03-06 09:32:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `dob`, `phone`, `email`, `password`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'truongnq1', NULL, '2020-03-19', '0969475298', 'admin@example.com', '$2y$10$NikzWeiuI3O41bCBJN5xbOCp/8gOXouVQhb7djF0VvXqwMEa/jO5m', 2, 1, '2020-03-05 15:59:19', '2020-03-06 22:12:11'),
(2, 'Schuyler Hahn', NULL, '1991-12-30', '270.370.8472', 'ashtyn28@example.org', '$2y$10$A2Pu2I7ZQxVBjY3djn9LtO1DDDs15r0JNdoDFOhIthhInrdGe8o7u', 1, 1, '2020-03-05 18:13:51', '2020-03-05 18:13:51'),
(3, 'Mortimer Ryan', NULL, '1972-06-05', '384-261-5242', 'lakin.fanny@example.org', '$2y$10$.eFFqsDj7onCZORiAGnLBeHh8zwic6xYi8VsXXiamdFjWcI8u2A6S', 1, 1, '2020-03-05 18:13:51', '2020-03-05 18:13:51'),
(4, 'Prof. Kayden Morissette', NULL, '1991-06-19', '+1 (236) 674-2599', 'orpha.kohler@example.net', '$2y$10$EHuHPUB8LX74AwRF8Ix/bODleOphjINDzbpFd5XinBD43t7xJC0BW', 1, 1, '2020-03-05 18:13:51', '2020-03-05 18:13:51'),
(5, 'Sherman Rau', NULL, '2004-09-11', '412.992.6821 x91996', 'esther.schowalter@example.org', '$2y$10$plkuuHn/YxyGD/vrkKlM8.mo8NADuDM1vZ100ZKEJZV.Fdxl0VQBi', 1, 1, '2020-03-05 18:13:51', '2020-03-05 18:13:51'),
(6, 'Prof. Burdette Welch', NULL, '1980-07-07', '+19208736456', 'elmo15@example.net', '$2y$10$rQe4Wa3HlcPOQn9bsYwlKuYgd1tzdoMKOQdviuXkIi7BN40fOw/KK', 1, 1, '2020-03-05 18:13:51', '2020-03-05 18:13:51'),
(7, 'Aidan Maggio', NULL, '2000-01-13', '(926) 820-3687', 'zbruen@example.net', '$2y$10$uzH.Uz9V8aEnzCadN80W.exM.QVgu/PWRmVZ1CVRlw.rs/gpWpB/O', 1, 1, '2020-03-05 18:13:51', '2020-03-05 18:13:51'),
(8, 'Franco Luettgen', NULL, '1984-01-10', '405.991.7644 x0791', 'borer.ludie@example.org', '$2y$10$amj8xARWJTzRJy9Zyhd6wuG7kCMSxBeiAhGpemffFrfLhkgJ5UkTK', 1, 1, '2020-03-05 18:13:51', '2020-03-05 18:13:51'),
(9, 'Nolan Mohr IV', NULL, '1993-10-30', '859.983.7172 x97399', 'turner.mercedes@example.org', '$2y$10$Ihis.s4l4j7x2aHxMQEzFucOpYcDTxiHihuRHeGKosOYLba9XRCti', 1, 1, '2020-03-05 18:13:51', '2020-03-05 18:13:51'),
(202, 'truongnguyen', NULL, '2020-04-14', '0969475287', 'user@example.com', '$2y$10$Obj4pZhgX6W21FCCSPhfk.nWjr8Y/jTaOkZ0..LkN5832RI8WunIi', 1, 0, '2020-03-06 02:51:25', '2020-03-06 02:51:25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
