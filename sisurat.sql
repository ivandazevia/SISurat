-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2019 pada 07.18
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagians`
--

CREATE TABLE `bagians` (
  `id_bagian` int(10) UNSIGNED NOT NULL,
  `kode_bagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bagians`
--

INSERT INTO `bagians` (`id_bagian`, `kode_bagian`, `nama_bagian`, `keterangan`) VALUES
(1, 'Admin', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi_surats`
--

CREATE TABLE `disposisi_surats` (
  `id_disposisi` int(10) UNSIGNED NOT NULL,
  `id_surats` int(10) UNSIGNED NOT NULL,
  `dari` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `untuk` int(11) NOT NULL,
  `disposisi_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_surat_disposisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_surat_disposisi` enum('internal','eksternal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_disposisi` date NOT NULL,
  `waktu_disposisi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatans`
--

CREATE TABLE `jabatans` (
  `id_jabatan` int(10) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_bagians` int(10) UNSIGNED NOT NULL,
  `level` enum('admin','user','sekretaris') COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rootJabs` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatans`
--

INSERT INTO `jabatans` (`id_jabatan`, `nama_jabatan`, `id_bagians`, `level`, `parent_jabatan`, `id_rootJabs`, `keterangan`) VALUES
(1, 'Admin', 1, 'admin', 'Admin', 1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_05_11_053458_create_bagians_table', 1),
(2, '2019_05_11_053600_create_rootjabatans_table', 1),
(3, '2019_05_11_061615_create_jabatans_table', 1),
(4, '2019_05_11_062229_create_users_table', 1),
(5, '2019_05_11_062348_create_surats_table', 1),
(6, '2019_05_11_062450_create_disposisi_surats_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rootjabatans`
--

CREATE TABLE `rootjabatans` (
  `id_rootJab` int(10) UNSIGNED NOT NULL,
  `root_jab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rootjabatans`
--

INSERT INTO `rootjabatans` (`id_rootJab`, `root_jab`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surats`
--

CREATE TABLE `surats` (
  `id_surat` int(10) UNSIGNED NOT NULL,
  `no_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `jenis_surat` enum('private','penting','biasa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_surat` enum('internal','eksternal','keluar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dari` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` int(10) UNSIGNED NOT NULL,
  `tujuan_surat_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tembusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_berkas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_disposisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_surat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_entry` date NOT NULL,
  `waktu_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `handphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jabatans` int(10) UNSIGNED NOT NULL,
  `id_bagians` int(10) UNSIGNED NOT NULL,
  `id_rootJabs` int(10) UNSIGNED NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `authority` enum('admin','user','sekretaris') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `nik`, `name`, `email`, `password`, `jenis_kelamin`, `tanggal_lahir`, `handphone`, `alamat`, `id_jabatans`, `id_bagians`, `id_rootJabs`, `last_login`, `authority`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'laki-laki', '1997-01-17', '081235923003', 'surabaya', 1, 1, 1, '2019-05-11 19:31:24', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagians`
--
ALTER TABLE `bagians`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indeks untuk tabel `disposisi_surats`
--
ALTER TABLE `disposisi_surats`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD KEY `disposisi_surats_id_surats_foreign` (`id_surats`);

--
-- Indeks untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `jabatans_id_bagians_foreign` (`id_bagians`),
  ADD KEY `jabatans_id_rootjabs_foreign` (`id_rootJabs`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rootjabatans`
--
ALTER TABLE `rootjabatans`
  ADD PRIMARY KEY (`id_rootJab`);

--
-- Indeks untuk tabel `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `surats_id_users_foreign` (`id_users`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_jabatans_foreign` (`id_jabatans`),
  ADD KEY `users_id_bagians_foreign` (`id_bagians`),
  ADD KEY `users_id_rootjabs_foreign` (`id_rootJabs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagians`
--
ALTER TABLE `bagians`
  MODIFY `id_bagian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `disposisi_surats`
--
ALTER TABLE `disposisi_surats`
  MODIFY `id_disposisi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id_jabatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rootjabatans`
--
ALTER TABLE `rootjabatans`
  MODIFY `id_rootJab` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surats`
--
ALTER TABLE `surats`
  MODIFY `id_surat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `disposisi_surats`
--
ALTER TABLE `disposisi_surats`
  ADD CONSTRAINT `disposisi_surats_id_surats_foreign` FOREIGN KEY (`id_surats`) REFERENCES `surats` (`id_surat`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  ADD CONSTRAINT `jabatans_id_bagians_foreign` FOREIGN KEY (`id_bagians`) REFERENCES `bagians` (`id_bagian`) ON DELETE CASCADE,
  ADD CONSTRAINT `jabatans_id_rootjabs_foreign` FOREIGN KEY (`id_rootJabs`) REFERENCES `rootjabatans` (`id_rootJab`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surats`
--
ALTER TABLE `surats`
  ADD CONSTRAINT `surats_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_bagians_foreign` FOREIGN KEY (`id_bagians`) REFERENCES `bagians` (`id_bagian`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_id_jabatans_foreign` FOREIGN KEY (`id_jabatans`) REFERENCES `jabatans` (`id_jabatan`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_id_rootjabs_foreign` FOREIGN KEY (`id_rootJabs`) REFERENCES `rootjabatans` (`id_rootJab`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
