-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2022 pada 16.13
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_performa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penilaian`
--

CREATE TABLE `data_penilaian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karyawan_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_penilaian` date NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absensi` int(11) NOT NULL,
  `pemahaman` int(11) NOT NULL,
  `pencapaian` int(11) NOT NULL,
  `kebersihan_lingkungan` int(11) NOT NULL,
  `kerapihan` int(11) NOT NULL,
  `perilaku` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_penilaian`
--

INSERT INTO `data_penilaian` (`id`, `karyawan_id`, `tanggal_penilaian`, `periode`, `absensi`, `pemahaman`, `pencapaian`, `kebersihan_lingkungan`, `kerapihan`, `perilaku`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-09-03', '2022-09', 50, 75, 50, 75, 75, 75, 400, '2022-09-06 23:14:37', '2022-09-06 23:14:37'),
(2, 2, '2022-01-01', '2022-04', 75, 75, 75, 75, 50, 75, 425, '2022-09-11 01:03:21', '2022-09-11 01:03:21'),
(3, 3, '2022-01-01', '2022-02', 50, 50, 75, 100, 75, 100, 450, '2022-09-11 01:04:07', '2022-09-11 01:04:07'),
(4, 4, '2022-01-01', '2022-01', 75, 75, 75, 50, 75, 100, 450, '2022-09-11 01:04:55', '2022-09-11 01:04:55'),
(5, 1, '2022-01-01', '2022-01', 50, 50, 100, 75, 50, 25, 350, '2022-09-11 01:05:54', '2022-09-11 01:05:54'),
(6, 5, '2022-01-01', '2022-01', 50, 25, 75, 100, 75, 10, 335, '2022-09-11 01:06:41', '2022-09-11 01:06:41'),
(7, 6, '2022-01-01', '2022-01', 50, 50, 75, 25, 100, 25, 325, '2022-09-11 01:07:28', '2022-09-11 01:07:28');

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
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nik`, `name`, `jenis_kelamin`, `alamat`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, '105552', 'nanang aditya', 'laki_laki', 'sepatan', 'karyawan', '2022-09-06 23:12:11', '2022-09-06 23:12:11'),
(2, '102226', 'deni', 'laki_laki', 'tangerang', 'karyawan', '2022-09-11 00:59:53', '2022-09-11 00:59:53'),
(3, '102225', 'jamal', 'laki_laki', 'tangerang', 'karyawan', '2022-09-11 01:00:29', '2022-09-11 01:00:29'),
(4, '102224', 'putra', 'laki_laki', 'Tangerang', 'karyawan', '2022-09-11 01:01:19', '2022-09-11 01:01:19'),
(5, '102223', 'rio', 'laki_laki', 'tangerang', 'karyawan', '2022-09-11 01:01:52', '2022-09-11 01:01:52'),
(6, '102221', 'fiki', 'laki_laki', 'tangerang', 'karyawan', '2022-09-11 01:02:30', '2022-09-11 01:02:30');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_07_142322_create_karyawan_table', 1),
(6, '2022_08_20_051410_create_data_penilaian_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `name`, `email`, `email_verified_at`, `password`, `role_user`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '105552', 'admin', 'admin@gmail.com', NULL, '$2y$10$AfxWnvk5QYbY.XjtxipZf.i6aXnbOC.Nq45ZmxEc71rJv8BVFRRDi', 1, 1, NULL, '2022-09-06 23:10:06', '2022-09-06 23:10:06'),
(2, '105578', 'karyawan', 'karyawan@gmail.com', NULL, '$2y$10$TD8zr3CV6FE4JJKkDbZvdu0mlZPOfeTCpFNx9v2EI9gElNtBjeHcG', 3, 1, NULL, '2022-09-06 23:10:06', '2022-09-06 23:13:44'),
(3, '137552', 'leader', 'leader@gmail.com', NULL, '$2y$10$fyOccUBfJuXCcosyzKn7qObtCu6PwHkn54FBqhHzTm35ShE/8BUR2', 2, 1, NULL, '2022-09-06 23:10:06', '2022-09-06 23:13:59'),
(4, '105552', 'nanang aditya', 'nanang@gmail.com', NULL, '$2y$10$TxD4BgcpFp9BMTlheskv/e8rXZ7nxCscr2R8YnvSRbbkoKI.4bOoW', 3, 1, NULL, '2022-09-06 23:13:13', '2022-09-06 23:13:27'),
(5, '102221', 'fiki', 'fiki@gmail.com', NULL, '$2y$10$aUJOclzpu4juR1ER9qisN.j4uKeFrUsQqd3u9wFe5xqnHQOdvDy9O', 3, 1, NULL, '2022-09-11 00:53:31', '2022-09-11 00:53:54'),
(6, '102223', 'rio', 'rio@gmail.com', NULL, '$2y$10$NccD73TUPTMCyqssz3xoHue0nWgfSxYd1QbY6QHSBaNhhbtkJJCtq', 3, 1, NULL, '2022-09-11 00:54:49', '2022-09-11 00:55:10'),
(7, '102224', 'putra', 'putra@gmail.com', NULL, '$2y$10$wFDsHzODSkaL2EifTbomcOJz96sxX0sZAj5o8RbyFED9B/i9Xn8T.', 3, 1, NULL, '2022-09-11 00:56:10', '2022-09-11 00:56:32'),
(8, '102225', 'jamal', 'jamal@gmail.com', NULL, '$2y$10$SxDpmFnq7W6hRuz6hkQu.O9v.9TnJz0Rx7eCaZRDDZTOYdNy5T27C', 3, 1, NULL, '2022-09-11 00:57:27', '2022-09-11 00:57:27'),
(9, '102226', 'deni', 'deni@gmail.com', NULL, '$2y$10$iiiguNjcr2/8NEIJy2UpzugDVuWU/sgtt0FdfZt37zp8ItEYgve0i', 3, 1, NULL, '2022-09-11 00:57:54', '2022-09-11 00:58:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penilaian`
--
ALTER TABLE `data_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_penilaian_karyawan_id_foreign` (`karyawan_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `data_penilaian`
--
ALTER TABLE `data_penilaian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_penilaian`
--
ALTER TABLE `data_penilaian`
  ADD CONSTRAINT `data_penilaian_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
