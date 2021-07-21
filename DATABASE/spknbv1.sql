-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2021 pada 14.53
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spknbv1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_training`
--

CREATE TABLE `tbl_training` (
  `id_training` int(11) NOT NULL,
  `Nama` varchar(128) NOT NULL,
  `Pekerjaan` varchar(128) NOT NULL,
  `Berobat` varchar(128) NOT NULL,
  `Pengeluaran` varchar(128) NOT NULL,
  `Pakaian` varchar(128) NOT NULL,
  `Pendidikan_Anak` varchar(128) NOT NULL,
  `Kondisi_Dinding_Rumah` varchar(128) NOT NULL,
  `Kondisi_Atap_Rumah` varchar(128) NOT NULL,
  `Kondisi_Lantai_Rumah` varchar(128) NOT NULL,
  `Penerangan` varchar(128) NOT NULL,
  `Luas_Lantai_Rumah` varchar(128) NOT NULL,
  `Sumber_Air_Minum` varchar(128) NOT NULL,
  `status_kelayakan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_training`
--

INSERT INTO `tbl_training` (`id_training`, `Nama`, `Pekerjaan`, `Berobat`, `Pengeluaran`, `Pakaian`, `Pendidikan_Anak`, `Kondisi_Dinding_Rumah`, `Kondisi_Atap_Rumah`, `Kondisi_Lantai_Rumah`, `Penerangan`, `Luas_Lantai_Rumah`, `Sumber_Air_Minum`, `status_kelayakan`) VALUES
(139, 'Ahmad', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(140, 'Suhardi', 'Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'tidak layak'),
(141, 'Sunaryo', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(146, 'Muldoko', 'Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'Tidak layak'),
(150, 'imran', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(159, 'Saiful', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(163, 'Rahmat', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(164, 'Tina', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_training2`
--

CREATE TABLE `tbl_training2` (
  `id_training` int(11) NOT NULL,
  `Nama` varchar(128) NOT NULL,
  `Pekerjaan` varchar(128) NOT NULL,
  `Berobat` varchar(128) NOT NULL,
  `Pengeluaran` varchar(128) NOT NULL,
  `Pakaian` varchar(128) NOT NULL,
  `Pendidikan_Anak` varchar(128) NOT NULL,
  `Kondisi_Dinding_Rumah` varchar(128) NOT NULL,
  `Kondisi_Atap_Rumah` varchar(128) NOT NULL,
  `Kondisi_Lantai_Rumah` varchar(128) NOT NULL,
  `Penerangan` varchar(128) NOT NULL,
  `Luas_Lantai_Rumah` varchar(128) NOT NULL,
  `Sumber_Air_Minum` varchar(128) NOT NULL,
  `status_kelayakan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_training2`
--

INSERT INTO `tbl_training2` (`id_training`, `Nama`, `Pekerjaan`, `Berobat`, `Pengeluaran`, `Pakaian`, `Pendidikan_Anak`, `Kondisi_Dinding_Rumah`, `Kondisi_Atap_Rumah`, `Kondisi_Lantai_Rumah`, `Penerangan`, `Luas_Lantai_Rumah`, `Sumber_Air_Minum`, `status_kelayakan`) VALUES
(150, 'Imran', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(151, 'Sari', 'Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'Tidak layak'),
(154, 'Kiko', 'Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'Tidak layak'),
(155, 'Paimin', 'Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'Tidak layak'),
(156, 'Ahmad', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(157, 'Suharto', 'Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'Tidak layak'),
(158, 'Ronaldo', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(159, 'Messi', 'Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'Tidak layak'),
(160, 'Kente', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(161, 'Termometer', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(162, 'Bolpoin', 'Tidak Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'layak'),
(163, 'Shihab', 'Memiliki Pekerjaan', 'Tidak mampu berobat', 'Hanya makanan pokok secara sederhana', 'Tidak mampu membeli 1 kali dalam setahun untuk setiap anggota rumah tangga', 'Hanya mampu menyekolahkan anak sampai jenjang pendidikan sekolah lanjutan tingkat pertama', 'Dinding rumah dari bambu/kayu/tembok dengan kondisi tidak baik', 'Atap dari ijuk/rumbia atau genteng/seng/asbes dengan kondisi tidak baik', 'Lantai dari tanah atau kayu/semen/keramik dengan kondisi tidak baik', 'Mempunyai penerengan bukan dari listrik atau listrik tanpa meteran', 'Luas lantai rumah kecil kurang dari 8m/orang', 'Dari sumur atau mata air tak terlindung/air sungai/air hujan/lainnya', 'Tidak layak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Nur', 'mazinoke25@gmail.com', 'default.jpg', '$2y$10$F4O.Uc2RWjWEZrKrh9Ztoe9XN7ziFevVWM8ZGpmUPnZKOZ2ArI3g6', 1, 1, 1625060407),
(8, 'Jamal', 'mazinoke26@gmail.com', 'ttd.jpeg', '$2y$10$iV4LKuLSSMrI7ItrPRMXf.vD.uJweKGsLah6WGLiv3MkITSMLW9Cm', 2, 1, 1625211511);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indeks untuk tabel `tbl_training2`
--
ALTER TABLE `tbl_training2`
  ADD PRIMARY KEY (`id_training`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT untuk tabel `tbl_training2`
--
ALTER TABLE `tbl_training2`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
