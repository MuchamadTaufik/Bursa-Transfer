-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2023 pada 19.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buser-app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(88, '2014_10_12_000000_create_users_table', 1),
(89, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(90, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(91, '2019_08_19_000000_create_failed_jobs_table', 1),
(92, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(93, '2023_12_11_130636_create_sessions_table', 1),
(94, '2023_12_14_091449_create_teams_table', 1),
(95, '2023_12_21_034932_create_pemains_table', 1),
(96, '2023_12_22_121011_create_performansis_table', 1),
(97, '2023_12_28_171003_create_notifikasis_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasis`
--

CREATE TABLE `notifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pemain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifikasis`
--

INSERT INTO `notifikasis` (`id`, `nama_pemain`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Atep Mulyadi', 'Pemain dalam performa baik, status performansinya meningkat dan lakukan lah rotasi untuk memainkan pemain.', '2023-12-28 10:17:26', '2023-12-28 10:17:26'),
(2, 'Tegar Rosemary', 'Pemain dalam performa tidak baik, status performansinya menurun dan lakukan lah rotasi untuk mengganti pemain.', '2023-12-28 10:17:56', '2023-12-28 10:17:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemains`
--

CREATE TABLE `pemains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_punggung` int(11) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `asal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemains`
--

INSERT INTO `pemains` (`id`, `nama`, `slug`, `posisi`, `no_punggung`, `umur`, `harga`, `asal`, `photo`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Benar', 'mohamed-benar', 'Right Wing', 11, 32, 290901, 'Subang', 'images/XuDNpa1oiYD2CA8VP1TQLXMSyu4re2WgR7COe99z.jpg', 1, '2023-12-25 00:28:59', '2023-12-29 11:36:33'),
(2, 'Chiesa', 'chiesa-2', 'Center Back', 23, 43, 7000, 'Jabar', 'images/5iMRn4lLy7jAYQjFz3o7SuMYB2YSt8JKyN9PIiFQ.jpg', 2, '2023-12-25 01:06:17', '2023-12-29 11:33:54'),
(3, 'Mudrik', 'mudrik', 'Left Back', 12, 19, 30000, 'Subang', 'images/IzIfZqfZzYGZjCPl89LburGMrLB6qqJiZCjNU3Et.png', 1, '2023-12-27 06:41:58', '2023-12-27 06:41:58'),
(4, 'Atep Mulyadi', 'atep-mulyadi', 'Midfielder', 34, 32, 25000, 'Bandung', 'images/AjWqzGFhUhM4zktxZG2Lrc1LGQ6yj0Tt4kh6MU51.jpg', 2, '2023-12-27 06:44:32', '2023-12-27 06:44:32'),
(5, 'Tegar Rosemary', 'tegar-rosemary', 'Keeper', 1, 20, 34000, 'Bekasi', 'images/X490JCWcl1qx7v5yjOjgNtef83xrOVA6Vh6xrXxZ.jpg', 2, '2023-12-27 06:45:44', '2023-12-29 11:34:58'),
(6, 'Ryan Fany', 'ryan-fany', 'Keeper', 1, 19, 34000, 'Bandung', 'images/Mn8VTbcZD9i7cyZtmxDhNKMJqQazspTTiUSKboaC.jpg', 1, '2023-12-29 10:29:26', '2023-12-29 10:29:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `performansis`
--

CREATE TABLE `performansis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gol` int(11) DEFAULT NULL,
  `assist` int(11) DEFAULT NULL,
  `pertandingan` int(11) DEFAULT NULL,
  `kartu_kuning` int(11) DEFAULT NULL,
  `kartu_merah` int(11) DEFAULT NULL,
  `fisik` int(11) DEFAULT NULL,
  `kecepatan` int(11) DEFAULT NULL,
  `penyerangan` int(11) DEFAULT NULL,
  `bertahan` int(11) DEFAULT NULL,
  `teknik` int(11) DEFAULT NULL,
  `pemain_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `performansis`
--

INSERT INTO `performansis` (`id`, `gol`, `assist`, `pertandingan`, `kartu_kuning`, `kartu_merah`, `fisik`, `kecepatan`, `penyerangan`, `bertahan`, `teknik`, `pemain_id`, `created_at`, `updated_at`) VALUES
(3, 21, 21, 11, 11, 2, 80, 86, 70, 80, 90, 1, '2023-12-25 01:04:00', '2023-12-27 06:29:14'),
(4, 9, 4, 8, 3, 4, 90, 89, 98, 98, 88, 2, '2023-12-25 01:06:45', '2023-12-25 01:07:02'),
(5, 4, 9, 18, 2, 2, 89, 78, 78, 87, 80, 3, '2023-12-27 06:46:18', '2023-12-27 06:46:18'),
(6, 9, 16, 18, 2, 1, 90, 85, 81, 70, 89, 4, '2023-12-27 06:46:56', '2023-12-28 10:17:26'),
(7, 0, 1, 17, 0, 0, 89, 60, 71, 70, 85, 5, '2023-12-27 06:47:32', '2023-12-28 10:17:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fArEkwfMI8QdcAPLV9bkvtofumyRemkLfs3sHqBp', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiT3cwajgyRGtpNWQ3VmRYZVNkR0JSRTZaaGl5TDhXdkRTdmU2Nzg2ayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9idXJzYS10cmFuc2ZlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkLzFOMHNma25Ed2VWbFhMSDNheldsdUw0ZjlpalNrVEpaLy9RbUtxWi80MEtzN0VNQ0xZVGUiO3M6NToiYWxlcnQiO2E6MDp7fX0=', 1703875005);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resource` bigint(20) DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `nama_team`, `slug`, `resource`, `logo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Liverpool FC', 'liverpool-fc-2', 23083111, 'images/qZyP072qHA7AsJbPvDNoRo9cT46loazFvZa47NxH.png', 2, '2023-12-25 01:22:53', '2023-12-25 01:23:08'),
(2, 'Chelsea FC', 'chelsea-fc', 1121221, 'images/MW624PUoK17d6ufXeWaojhzHA0OVmuXzxESAcFv9.png', 3, '2023-12-25 08:04:42', '2023-12-25 08:04:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('manager','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'manager',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@mail.com', 'admin', NULL, '$2y$12$tPWs/VUlz348Oybz0lX5IOVWJVvoKSJIS8CF91FC8lQ/JbKXQlnkq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-25 00:28:24', '2023-12-25 00:28:24'),
(2, 'Manager 1', 'manager@mail.com', 'manager', NULL, '$2y$12$/1N0sfknDweVlXLH3azWluL4f9ijSkTJZ//QmKqZ/40Ks7EMCLYTe', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-25 00:28:25', '2023-12-25 00:28:25'),
(3, 'Manager 2', 'manager2@mail.com', 'manager', NULL, '$2y$12$3NxkyGlOPe.Y8WNl30.oKu.uj3bdzi9r9xUjzX91SzvxXKlbb6EHK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-25 00:28:25', '2023-12-25 00:28:25'),
(4, 'Manager 3', 'manager3@mail.com', 'manager', NULL, '$2y$12$6iFCsjhXKO1nZfbz7qmnQ.Xrxym1AC3TRcJStNj4Qm0ud2zBK9iGC', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 09:10:19', '2023-12-27 09:10:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pemains`
--
ALTER TABLE `pemains`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemains_slug_unique` (`slug`),
  ADD KEY `pemains_team_id_foreign` (`team_id`);

--
-- Indeks untuk tabel `performansis`
--
ALTER TABLE `performansis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `performansis_pemain_id_foreign` (`pemain_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_slug_unique` (`slug`),
  ADD KEY `teams_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `notifikasis`
--
ALTER TABLE `notifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemains`
--
ALTER TABLE `pemains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `performansis`
--
ALTER TABLE `performansis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemains`
--
ALTER TABLE `pemains`
  ADD CONSTRAINT `pemains_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `performansis`
--
ALTER TABLE `performansis`
  ADD CONSTRAINT `performansis_pemain_id_foreign` FOREIGN KEY (`pemain_id`) REFERENCES `pemains` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
