-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2021 pada 01.34
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percetakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1115, 'dianagency', '$2y$10$6BByIvMRrLYoM1yirsZKHuuydvzuMBaTTzYTFSQsdlTnNbRmf6ezS');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(200) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `no_telp`, `email`, `password`, `remember_token`) VALUES
(12, 'Moh. Fikri Sy. Nggaibo', '082111347331', 'moh.fikri.sy.nggaibo@gmail.com', '$2y$10$.k1VnFHXAOnd.VVQHSK0a.6SzK/U6HNgZr0Hv8/le9yq9OHGOE0Pa', 'fmhjDIGgq6fLDmUWUBh3xrXYbH04bXJhMIOAlzdTuZZNf7ZgdnWdKsCNf5DK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `id_pesanan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id_pesanan` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `kode` int(10) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id_pesanandetail` int(10) NOT NULL,
  `id_pesanan` int(10) NOT NULL,
  `nama_project` varchar(50) NOT NULL,
  `id_ukuran` int(10) NOT NULL,
  `qty` int(5) NOT NULL,
  `file` varchar(50) NOT NULL,
  `jumlah_harga` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `gambar`, `updated_at`, `created_at`) VALUES
(10, 'Poster', 'Kebutuhan promosi melalui media cetak masih bertahan hingga saat ini, salah satunya dengan mencetak poster. Tujuan poster tentunya memberikan informasi, termasuk juga untuk kebutuhan iklan. Poster sangat cocok untuk ditempatkan di area publik, sehingga dapat dengan mudah terlihat oleh khalayak umum. Adapun keuntungan mencetak poster, antara lain sebagai alat promosi yang cukup efektif, memberikan informasi dengan jelas, dengan mudah terlihat oleh khalayak umum, dan harga cetak yang cukup murah', '1481907554.jpg', '2020-12-13 02:38:26', '2020-11-04 05:46:59'),
(18, 'Spanduk', 'Spanduk adalah alat pemasaran favorit untuk kebutuhan berbagai promosi. Dengan harga cetak yang cukup murah, Anda sudah dapat mempromosikan berbagai hal pada spanduk yang terpasang di area publik. Adapun keuntungan mencetak poster, antara lain harga cetak cukup murah, hasil cetak yang dapat bertahan lama, dan dapat dijadikan sebagai alat promosi dan pemasaran yang cukup efektif.', '1286081646.jpg', '2020-12-13 02:39:33', '2020-12-01 11:54:10'),
(25, 'Pin', 'Pin dapat Anda manfaatkan sebagai aksesoris menarik yang dapat dikenakan oleh orang banyak, saat melakukan kegiatan promosi perusahaan/instansi.   Keuntungan menggunakan pin, antara lain harga produksi yang relatif murah, sebagai suvenir sekaligus alat promosi, dapat dijual sebagai produk usaha, memperkuat branding usaha Anda.', '603581140.jpg', '2021-01-03 10:31:04', '2021-01-03 10:30:46'),
(26, 'X-Banner', 'X-Banner cukup efektif untuk Anda gunakan sebagai alat atau sarana promosi. Alat promosi ini menggunakan penyangga berbahan fiber dengan bentuk huruf “X”, yang dapat berdiri cukup kokoh untuk memasarkan atau mempromosikan berbagai kebutuhan Anda. Adapun keuntungan mencetak poster, antara lain harga cetak yang murah, mudah dibawa untuk kebutuhan promosi, dapat berdiri kokoh untuk keperluan promosi, dan dapat dijadikan sebagai alat promosi yang cukup efektif.', '128918431.jpg', '2021-01-03 10:31:52', '2021-01-03 10:31:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran`
--

CREATE TABLE `ukuran` (
  `id_ukuran` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukuran`
--

INSERT INTO `ukuran` (`id_ukuran`, `id_produk`, `ukuran`, `harga`) VALUES
(20, 10, 'A4 (21 X 29,7)', 10000),
(21, 10, 'A3 (29,7 X 42)', 18000),
(22, 10, 'A2 (42 X 59,4)', 25000),
(27, 18, '100 x 100', 50000),
(28, 18, '100 x 200', 100000),
(30, 18, '100 x 300', 150000),
(31, 18, '100 x 400', 200000),
(32, 18, '100 x 500', 250000),
(34, 18, '200 x 200', 200000),
(35, 18, '200 x 300', 300000),
(36, 25, '4,4 x 4,4', 8000),
(37, 25, '5,8 x 5,8', 10000),
(38, 26, '60 x 160', 250000),
(39, 18, '200 x 400', 200000),
(40, 18, '200 x 500', 250000),
(41, 18, '300 x 300', 450000),
(42, 18, '300 x 400', 600000),
(43, 18, '300 x 400', 600000),
(44, 18, '300 x 400', 600000),
(45, 18, '300 x 400', 600000);

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
(1, 'iki', 'ankhy09@gmail.com', NULL, '$2y$10$bHZbySUHMDsbUzurW88TcO14pG2Db7t0lnvwZWDYYPBYs/zfylXg6', '0KqaAkoK9CxvsKBKtZ3aEJwdHY4wWPYjdDFdaQHx4X4hoBjvplJGQeOLaCzm', '2020-08-15 02:41:26', '2020-08-15 02:41:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `pesanan_details`
--
ALTER TABLE `pesanan_details`
  ADD PRIMARY KEY (`id_pesanandetail`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`id_ukuran`);

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
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1116;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT untuk tabel `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id_pesanandetail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `id_ukuran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
