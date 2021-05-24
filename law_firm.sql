-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2021 pada 12.48
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law_firm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'fajarmentari', '$2y$10$zmQa1brB/OUdLZqijzw/4uAs6PoE6lxe7V/S8lHpmFBqlWEQbSm16', '2020-10-07 06:11:41', '2020-10-07 06:11:41'),
(2, 'lulu', '$2y$10$ypflN6vhDw5uKQz1mXd/ruwmbwRbu61uQwg6YYchKtuOjgYIv9ezO', '2020-10-07 06:16:13', '2020-10-07 06:16:13'),
(3, 'laila', '$2y$10$HpgJTqnwWW.1WBB7F5SR5uI4ZGHzO72Bi.srjQSmf748.lC11mRf2', '2020-10-07 06:16:34', '2020-10-07 06:16:34'),
(4, 'kiki', '$2y$10$T.indsmpWwDEa7d3D7jPi.X.KnRAZq7hctsIrkB08.LgCH3Brfgvm', '2020-10-07 06:17:28', '2020-10-07 06:17:28'),
(5, 'ADM1', '$2y$10$7QSkCEUwH1y8TSZH9Z4LGe2iLz809TrxsXBNDYxHrD.X/eQ.nUIhm', '2021-01-14 03:52:02', '2021-01-14 03:52:02'),
(6, 'ADM2', '$2y$10$cx/IOC/yOY26VJWBWXc1BupD8YDLc4GpYsWM.cQJ0Q7zjLW7NTBGS', '2021-01-14 23:30:17', '2021-01-14 23:30:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_27_232611_tentang_migration', 1),
(5, '2020_09_30_162413_purpose_migration', 2),
(6, '2020_10_05_041210_mitra__tim_migration', 3),
(7, '2020_10_05_052104_mitra__organ_migration', 4),
(8, '2020_10_07_122554_admin_migration', 5),
(9, '2020_11_28_162344_minta_darah', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_organ`
--

CREATE TABLE `mitra_organ` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mitra_organ`
--

INSERT INTO `mitra_organ` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
(8, 'Kepolisian Negara Republik Indonesia', '495065483.png', '2021-01-15 00:59:04', '2021-01-15 00:59:04'),
(9, 'Mahkamah Konstitusi', '549917412.png', '2021-01-15 01:00:49', '2021-01-15 01:00:49'),
(10, 'Mahkamah Agung', '20812026.png', '2021-01-15 01:02:52', '2021-01-15 01:02:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_tim`
--

CREATE TABLE `mitra_tim` (
  `id` int(10) UNSIGNED NOT NULL,
  `kurator_pengurus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partdom_dkijkt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partdom_samar_kal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partdom_batam_kepriau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tim_partdom_makas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paralegal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mitra_tim`
--

INSERT INTO `mitra_tim` (`id`, `kurator_pengurus`, `partdom_dkijkt`, `partdom_samar_kal`, `partdom_batam_kepriau`, `tim_partdom_makas`, `paralegal`, `created_at`, `updated_at`) VALUES
(1, 'fauziyah s.h', 'fatimah s.h', 'fatmah s.h', 'fatonah s.h', 'fauzi s.h', 'fauzani s.h', NULL, '2021-01-14 15:01:11');

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
-- Struktur dari tabel `purpose`
--

CREATE TABLE `purpose` (
  `id` int(10) UNSIGNED NOT NULL,
  `visi_misi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `motto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_choose_us` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `company`, `why_choose_us`, `created_at`, `updated_at`) VALUES
(1, 'disebut Model Verifikasi dan Validasi. \r\nSetiap proses untuk menguji sebuah perangkat lunak harus \r\nmengikuti berbagai tahap dan Model V adalah salah satu metode\r\npengembangan yang sangat tepat untuk digunakan dalam pengujian \r\nsebuah piranti lunak. \r\nDidalam metode ini ada beberapa tahap yang spesifik dimana harus \r\ndiikuti saat menguji performa sebuah piranti lunak. \r\nSetelah sebuah tahap telah selesai dilaksanakan, maka akan berlanjut ke tahap berikutnya sampai tahap yang ada berakhir. Rangkaian uji ini berbentuk seperti huruf V. \r\nDalam sikus pengembangan piranti lunak, pengujian dengan Model V dimulai dari awal proyek dilaksanakan dimana syarat dan kebutuhan telah ditentukan.[1] 24[3] 10\r\n\r\nFase Verifikasi\r\nFase verifikasi lebih mengacu pada usaha penyesuaian spesifikasi piranti lunak dengan kebutuhan pengguna, tahapan ini meliputi :\r\n\r\nRequirements analysis – Menganalisa dan mengumpulkan semua syarat dan kebutuhan pengguna\r\n\r\nSystem design – Pengembang menganalisa untuk memastikan persyaratan dan kebutuhan telah layak untuk membangun sistem yang diminta\r\n\r\nArchitecture Design – Dapat juga disebut “high-level design” dimana arsitektur sistem ditentukan selama fase ini.\r\n\r\nModule Design – Dapat juga disebut “low-level design” dimana sistem dipecah menjadi beberapa bagian agar mempermudah para pengembang untuk menulis kode.[4] 18[5] 9\r\n\r\nFase Validasi\r\nFase Validasi lebih mengacu pada penyesuaian dari seluruh proses tahapan verifikasi dengan spesifikasi dan persyaratan yang sudah ditetapkan dengan tahapan sebagai berikut :\r\n\r\nUnit testing – Menguji setiap bagian system secara terpisah.\r\n\r\nIntegration testing – Menguji beberapa bagian system secara bersamaan untuk memastikan system dapat berfungsi san bekerja secara bersama-sama.\r\n\r\nSystem testing – Menguji keseluruhan system yang telah dibangun.\r\n\r\nUser acceptance testing – Penentuan apakah system yang dibangun telah memenuhi permintaan dan memuaskan pengguna atau tidak.\r\n\r\nRelease testing – Menguji system untuk memastikan bahwa piranti lunak dapat di implemetasikan di lingkungan yang akan di terapkan.[4] 18[5] 9\r\n\r\nKelebihan\r\nDibawah berikut adalah beberapa kelebihan dalam memakai V-Model :\r\n\r\nSetiap tahap memiliki penyampaian yang lebih spesifik.\r\n\r\nPeluang sukses lebih tinggi dibanding dengan model waterfall karena metode pengembangan lebih matang dipersiapkan sejak awal rangkaian uji dimulai.\r\n\r\nWaktu yang dibutuhkan dibandingkan model waterfall lebih sedikit bahkan waktu yang diperlukan bisa sampai 50% lebih sedikit.\r\n\r\nBerfungsi dengan baik untuk proyek-proyek kecil dimana syarat dan kebutuhan mudah dipahami dan dimengerti.\r\n\r\nKegunaan sumber daya yang tinggi (efisien).[2] 15\r\n\r\nKekurangan\r\nDibawah berikut adalah beberapa kekurangan dalam memakai V-Model :\r\n\r\nTerlalu kaku (kurangnya fleksibilitas).\r\n\r\nRuang lingkup yang dibutuhkan untuk penyesuaian model sulit dan mahal.\r\n\r\nPiranti lunak dikembangkan selama tahap implementasi, sehingga tidak ada prototipe awal dari perangkat lunak yang dihasilkan.\r\n\r\nTidak memberikan jalan yang jelas untuk masalah yang ditemukan selama tahap pengujian.[2] 15', 'Keunggulan dan kelemahan metode prototype\r\n\r\nKomunikasi akan terjalin baik antara pengembang dan pelanggan.\r\nPengembang dapat bekerja lebih baik dalam menentukan kebutuhan setiap pelanggannya.\r\nPelanggan berperan aktif dalam proses pengembangan sistem.\r\nLebih menghemat waktu dalam pengembangan sistem.\r\nPenerapan menjadi lebih mudah karena pemakai mengetahui apa yang diharapkannya\r\n\r\nkekurangan\r\nPelanggan kadang tidak melihat atau menyadari bahwa perangkat lunak yang ada belum mencantumkan kualitas perangkat lunak secara keseluruhan dan juga belum memikirkan kemampuan pemeliharaan untuk jangka waktu lama.\r\nPengembang biasanya ingin cepat menyelesaikan proyek sehingga menggunakan algoritma dan bahasa pemrograman yang sederhana untuk membuat prototyping lebih cepat selesai tanpa memikirkan lebih lanjut bahwa program tersebut hanya merupakan sebuah kerangka kerja(blueprint) dari sistem.\r\nHubungan pelanggan dengan komputer yang disediakan mungkin tidak mencerminkan teknik perancangan', NULL, '2020-09-30 09:16:28');

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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admin_username_unique` (`username`);

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
-- Indeks untuk tabel `mitra_organ`
--
ALTER TABLE `mitra_organ`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra_tim`
--
ALTER TABLE `mitra_tim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mitra_tim_kurator_pengurus_unique` (`kurator_pengurus`),
  ADD UNIQUE KEY `mitra_tim_partdom_dkijkt_unique` (`partdom_dkijkt`),
  ADD UNIQUE KEY `mitra_tim_partdom_samar_kal_unique` (`partdom_samar_kal`),
  ADD UNIQUE KEY `mitra_tim_partdom_batam_kepriau_unique` (`partdom_batam_kepriau`),
  ADD UNIQUE KEY `mitra_tim_tim_partdom_makas_unique` (`tim_partdom_makas`),
  ADD UNIQUE KEY `mitra_tim_paralegal_unique` (`paralegal`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT untuk tabel `mitra_organ`
--
ALTER TABLE `mitra_organ`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mitra_tim`
--
ALTER TABLE `mitra_tim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `purpose`
--
ALTER TABLE `purpose`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
