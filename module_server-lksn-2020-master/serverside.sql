-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2020 pada 09.08
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serverside`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `choices`
--

CREATE TABLE `choices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `choices`
--

INSERT INTO `choices` (`id`, `choice`, `poll_id`, `created_at`, `updated_at`) VALUES
(1, 'SELASA', 2, '2020-10-21 06:28:56', '2020-10-21 06:28:56'),
(2, 'Rabu', 1, '2020-10-22 06:28:56', '2020-10-21 06:28:56'),
(3, 'kamis', 3, '2020-10-05 11:44:46', '2020-10-20 06:29:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `division`
--

CREATE TABLE `division` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `division`
--

INSERT INTO `division` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Payment', NULL, NULL),
(2, 'Procurement', NULL, NULL),
(3, 'IT', NULL, NULL),
(4, 'Finance', NULL, NULL),
(5, 'HR', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_21_022611_create_poll_table', 2),
(5, '2020_10_21_024653_create_usersrole_table', 3),
(6, '2020_10_21_053548_create_division_table', 4),
(7, '2020_10_21_053607_create_votes_table', 5),
(8, '2020_10_21_053629_create_choices_table', 5),
(9, '2020_10_21_055627_create_polls_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poll`
--

CREATE TABLE `poll` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `poll`
--

INSERT INTO `poll` (`id`, `username`, `password`, `role`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'payment_1', 'payment_1', 2, 'Payment', NULL, NULL),
(2, 'payment_2', 'payment_2', 2, 'Payment', NULL, NULL),
(3, 'payment_3', 'payment_3', 2, 'Payment', NULL, NULL),
(4, 'payment_4', 'payment_4', 2, 'Payment', NULL, NULL),
(5, 'payment_5', 'payment_5', 2, 'Payment', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `polls`
--

CREATE TABLE `polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` datetime NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `polls`
--

INSERT INTO `polls` (`id`, `title`, `description`, `deadline`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Makan Gratis Tiap hari apa??', 'Akan Diadakan makan siang gratis setiap hari tertentu antara hari Selasa/Rabu/Jumat', '2020-10-21 14:00:09', 2, '2020-10-22 06:00:09', '2020-10-22 06:00:09'),
(2, 'WFH/WFO', 'Lebih Produktif WFO/WFH', '2020-10-21 14:00:09', 1, '2020-10-22 06:00:09', '2020-10-14 06:00:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marcelino Wullur', 'smikibisa2020@gmail.com', NULL, '$2y$10$L6m0FaZIxraBdqu3X0I7D.o/rd2r/sF91aXH7sv1bbsAW3DoHe0be', NULL, '2020-10-20 18:08:52', '2020-10-20 18:08:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usersrole`
--

CREATE TABLE `usersrole` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choice_id` int(10) UNSIGNED NOT NULL,
  `poll_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `votes`
--

INSERT INTO `votes` (`id`, `choice_id`, `poll_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2020-10-21 06:30:34', '2020-10-28 06:30:34'),
(2, 1, 3, '2020-10-20 06:30:34', '2020-10-22 06:30:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `poll_password_unique` (`password`);

--
-- Indeks untuk tabel `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `usersrole`
--
ALTER TABLE `usersrole`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `choices`
--
ALTER TABLE `choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `division`
--
ALTER TABLE `division`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `poll`
--
ALTER TABLE `poll`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `usersrole`
--
ALTER TABLE `usersrole`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
