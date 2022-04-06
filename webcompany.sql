-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 07, 2022 lúc 01:53 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webcompany`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `slug_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ringkasan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_berita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_berita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori`, `slug_berita`, `judul_berita`, `ringkasan`, `isi`, `status_berita`, `jenis_berita`, `keywords`, `gambar`, `icon`, `hits`, `tanggal_post`, `tanggal_publish`, `tanggal`) VALUES
(1, 1, 7, 'nextcompany-thiết-kế-nội-thất-hiện-??ại-sang-trọng', 'Nextcompany thiết kế nội thất Hiện đại - Sang trọng', '', '', 'Publish', 'Berita', '', 'ezgif-5-ccb09ff207.jpg', '', 0, '2022-04-07 06:03:31', '2022-04-07 06:03:00', '2022-04-06 23:03:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jenis_client` enum('Perorangan','Perusahaan','Organisasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimpinan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_testimoni` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_client` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `client`
--

INSERT INTO `client` (`id_client`, `id_user`, `jenis_client`, `nama`, `pimpinan`, `alamat`, `telepon`, `website`, `email`, `isi_testimoni`, `gambar`, `status_client`, `tempat_lahir`, `tanggal_lahir`, `tanggal_post`, `tanggal`) VALUES
(1, 1, 'Perorangan', 'Nextcompany thiết kế nội thất Hiện đại - Sang trọng', '', '', '', '', '', '', 'ezgif-5-ccb09ff207.jpg', 'Publish', '', '1970-01-01', '2022-04-07 06:03:08', '2022-04-06 23:03:08'),
(2, 1, 'Perusahaan', 'Nextcompany thiết kế nội thất Hiện đại - Sang trọng', '', '', '', '', '', '', 'ezgif-5-ccb09ff207.jpg', 'Publish', '', '1970-01-01', '2022-04-07 06:03:57', '2022-04-06 23:03:57'),
(3, 1, 'Organisasi', 'Nextcompany thiết kế nội thất Hiện đại - Sang trọng', '', '', '', '', '', '', 'ezgif-5-ccb09ff207.jpg', 'Publish', '', '1970-01-01', '2022-04-07 06:04:07', '2022-04-06 23:04:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `id_kategori_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_download` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_download` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `download`
--

INSERT INTO `download` (`id_download`, `id_kategori_download`, `id_user`, `judul_download`, `jenis_download`, `isi`, `gambar`, `website`, `hits`, `tanggal_post`, `tanggal`) VALUES
(3, 2, 1, 'Paket Harga Kursus Desain dan Programming Java Web Media 2020', 'Download', '<p>Paket Harga Kursus Desain dan Programming Java Web Media 2020</p>', 'Daftar_Harga_Kursus_2020_v2.pdf', '', 0, '0000-00-00 00:00:00', '2020-02-13 00:50:27'),
(4, 1, 1, 'Formulir Pendaftaran Siswa Kursus', 'Download', '<p>Formulir Pendaftaran Siswa Kursus</p>', 'FORMULIR_PENDAFTARAN_SISWA_KURSUS.pdf', '', 0, '0000-00-00 00:00:00', '2020-02-13 00:50:10'),
(5, 2, 1, 'Paket Harga Kursus Statistik Java Web Media 2020', 'Download', '<p>Paket Harga Kursus Statistik Java Web Media 2020</p>', 'KURSUS_STATISTIK.pdf', '', 0, '0000-00-00 00:00:00', '2020-02-13 00:50:48'),
(6, 2, 1, 'Panduan Untuk Admin Engineering Utama aaa', 'Download', '<p>Panduan Untuk Admin Engineering Utama</p>', '010-Undangan-Workshop-Rekonsiliasi-Feb-2021.pdf', '', 0, '2021-04-23 20:06:25', '2021-04-24 01:27:48'),
(7, 2, 1, 'Panduan Untuk Admin Engineeringa', 'Panduan', '', 'SURAT-TUGAS-BOGOR-27-29-NOVEMBER-2019.pdf', '', 0, '2021-04-24 02:31:13', '2021-04-24 01:26:00'),
(8, 2, 1, 'Panduan Website', 'Download', '<p>Panduan Website</p>', 'RENCANA-JADWAL-MAS-FAISAL-BSM.pdf', '', 4, '2021-04-24 08:20:48', '2021-04-24 03:51:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_kategori_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_galeri` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_galeri` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_post` datetime DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_kategori_galeri`, `id_user`, `judul_galeri`, `jenis_galeri`, `isi`, `gambar`, `website`, `hits`, `status_text`, `tanggal_post`, `tanggal`) VALUES
(4, 5, 1, 'chào mừng đến với Next Company', 'Homepage', '<p>C&ocirc;ng ty đi đầu trong lĩnh vực thiết kế nội thất, thi c&ocirc;ng nội thất v&agrave; sản xuất đồ nội thất tại H&agrave; Nội - Hải Ph&ograve;ng - Đ&agrave; Nẵng - Hồ Ch&iacute; Minh.</p>', 'ezgif-4-12589a6d5a.jpg', 'http://google.com', NULL, 'Ya', NULL, '2022-04-06 22:32:35'),
(5, 5, 1, 'Thành công của bạn cũng là thành công của chúng tôi', 'Homepage', '<p>&nbsp;Next Company mong muốn trở th&agrave;nh nh&agrave; cung cấp dịch vụ x&acirc;y dựng d&acirc;n dụng gi&aacute; trị gia tăng, hướng đến trở th&agrave;nh một m&ocirc; h&igrave;nh chuẩn mực v&agrave; ti&ecirc;n phong trong lĩnh vực x&acirc;y dựng tại thị trường Việt Nam.&nbsp;</p>', 'slideshow_3.jpg', '', NULL, 'Ya', NULL, '2022-04-06 16:29:45'),
(7, 5, 1, 'Kursus Web Development Java Web Media', 'Galeri', '<p>Kursus Web Development Java Web Media</p>', 'web-development-javawebmedia1.png', '', NULL, 'Ya', NULL, '2020-02-13 00:52:02'),
(8, 5, 1, 'Web Application Java Web Media', 'Galeri', '<p>Web Application Java Web Media</p>', 'web-application-pendaftaran-online-javawebmedia1.jpg', '', NULL, 'Ya', NULL, '2020-02-13 00:52:18'),
(9, 5, 1, 'Kursus Statistik di Java Web Media', 'Galeri', '<p>Kursus Statistik di Java Web Media</p>', 'instagram-kursus-statistik-javawebmedia1.png', '', NULL, 'Ya', NULL, '2020-02-13 00:53:55'),
(10, 5, 1, 'Web Development Java Web Media', 'Galeri', '<p>Web Development Java Web Media</p>', 'website-perusahaan-company-profile-web-javawebmedia12.jpg', '', NULL, 'Ya', NULL, '2020-02-13 00:54:28'),
(12, 6, 1, 'Festival Kabupaten Lestari 2019', 'Galeri', '<p>Festival Kabupaten Lestari 2019</p>', '1.jpg', 'http://javawebmedia.com', NULL, 'Ya', '2021-04-24 02:45:16', '2021-04-24 05:27:53'),
(13, 6, 1, 'Welcome to Java Web Media', 'Galeri', '<p>Welcome to Java Web Media</p>', 'Kursus-Banner-02.jpg', 'http://javawebmedia.com', NULL, 'Ya', '2021-04-24 08:13:13', '2021-04-24 01:13:13'),
(14, 5, 1, 'Mang đến cho khách hàng những sản phẩm và dịch vụ tốt nhất', 'Homepage', '<p>Next Company đ&atilde; mang lại h&agrave;ng tri&ecirc;u c&ocirc;ng tr&igrave;nh đẹp chất lượng đến kh&aacute;ch h&agrave;ng ở mọi tỉnh th&agrave;nh tr&ecirc;n cả nước.</p>', 'ezgif-4-12589a6d5a.jpg', 'https://google.com', NULL, 'Ya', '2022-04-06 23:37:50', '2022-04-06 16:37:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `slug_kategori`, `nama_kategori`, `urutan`, `hits`, `tanggal`) VALUES
(4, 1, 'tin-tức', 'Tin tức', 4, 0, '2022-04-06 16:58:28'),
(5, 1, 'dự-án', 'Dự án', 5, 8, '2022-04-06 15:53:29'),
(6, 1, 'giới-thiệu', 'Giới thiệu', 2, 3, '2022-04-06 15:53:23'),
(7, 1, 'dịch-vụ', 'dịch vụ', 2, 0, '2022-04-06 15:58:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kategori_download`
--

CREATE TABLE `kategori_download` (
  `id_kategori_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kategori_download`
--

INSERT INTO `kategori_download` (`id_kategori_download`, `id_user`, `slug_kategori_download`, `nama_kategori_download`, `urutan`, `hits`, `tanggal`) VALUES
(1, 0, 'formulir-pendaftaran', 'Formulir Pendaftaran', 1, 0, '2021-04-21 00:37:58'),
(2, 1, 'promosi-java-web-media-2021', 'Promosi Java Web Media 2021', 2, 0, '2021-04-21 01:08:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id_kategori_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori_galeri` varchar(255) NOT NULL,
  `nama_kategori_galeri` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id_kategori_galeri`, `id_user`, `slug_kategori_galeri`, `nama_kategori_galeri`, `urutan`, `hits`, `tanggal`) VALUES
(4, 0, 'kegiatan', 'Kegiatan', 4, 0, '2021-04-21 00:38:46'),
(5, 0, 'banner-website', 'Banner Website', 4, 0, '2021-04-21 00:38:46'),
(6, 1, 'family-gathering', 'Family gathering', 2, 0, '2021-04-21 00:40:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kategori_staff`
--

CREATE TABLE `kategori_staff` (
  `id_kategori_staff` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kategori_staff`
--

INSERT INTO `kategori_staff` (`id_kategori_staff`, `id_user`, `slug_kategori_staff`, `nama_kategori_staff`, `urutan`, `hits`, `tanggal`) VALUES
(1, 0, 'pejabat-eselon-1', 'Pejabat Eselon 1', 1, 0, '2021-04-21 00:44:24'),
(2, 0, 'pejabat-struktural', 'Pejabat Struktural', 2, 0, '2021-04-21 00:44:24'),
(3, 1, 'team-inti', 'Team Inti', 2, 0, '2021-04-21 01:54:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namaweb` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentang` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatext` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protocol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_timeout` int(11) NOT NULL,
  `smtp_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `id_user`, `namaweb`, `singkatan`, `tagline`, `tentang`, `deskripsi`, `website`, `email`, `email_cadangan`, `alamat`, `telepon`, `hp`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `youtube`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `nama_youtube`, `google_map`, `protocol`, `smtp_host`, `smtp_port`, `smtp_timeout`, `smtp_user`, `smtp_pass`, `tanggal`) VALUES
(1, 1, 'Công ty thiết kế - Sản xuất nội thất', 'Công ty thiết kế - Sản xuất nội thất', 'Tất cả vì quyền lợi khách hàng', '<p><strong>TƯ DUY NGHỀ NGHIỆP:</strong>&nbsp;Tạo ra l&agrave; kết quả của qu&aacute; tr&igrave;nh đầu tư về tr&iacute; tuệ, thẩm mỹ v&agrave; tinh thần nhằm mang lại một kh&ocirc;ng gian sống tiện &iacute;ch v&agrave; kết nối.</p>\r\n<p><strong>TẦM NH&Igrave;N &amp; SỨ MẠNG:</strong>&nbsp;X&aacute;c định nhu cầu v&agrave; thị hiếu nh&agrave; theo xu hướng ng&agrave;y c&agrave;ng n&acirc;ng cao chất lượng cuộc sống dựa tr&ecirc;n gi&aacute; trị vật chất v&agrave; tinh thần, đặt ra những y&ecirc;u cầu khắt khe hơn về dịch vụ x&acirc;y dựng d&acirc;n dụng. Cập nhật xu thế, nắm bắt nhu cầu trong quy hoạch nh&agrave; ở theo hướng l&acirc;u d&agrave;i, đ&oacute; l&agrave; những gi&aacute; trị m&agrave; ch&uacute;ng t&ocirc;i đang theo đuổi trong suốt qu&aacute; tr&igrave;nh từ x&acirc;y dựng &yacute; tưởng đến ho&agrave;n th&agrave;nh c&ocirc;ng tr&igrave;nh.</p>', 'Tất cả vì quyền lợi khách hàng', 'Hồ Chí Minh city', 'chungvd.it@gmail.com', 'chungcnt52dh1@gmail.com', '<p><b>Công ty thiết kế - Sản xuất nội thất</b><br>Lanmark 81<br>Hồ chí Minh city<br>Hotline: 0123456789<br>Whatsapp: +84123456789<br>Email: contact@abcompany.co</p>', '+84123456789', '+84123456789', 'new ct logo.png', 'new ct logo.png', 'Chào m?ng b?n ??n v?i công ty chúng tôi', 'Chào m?ng b?n ??n v?i công ty chúng tôi', 'https://www.facebook.com/ABC media', 'http://twitter.com/ABC media', 'https://instagram.com/ABC media', 'https://www.youtube.com/channel/ABC media', 'Công ty thiết kế - Sản xuất nội thất', 'Công ty thiết kế - Sản xuất nội thất', 'Công ty thiết kế - Sản xuất nội thất', 'Công ty thiết kế - Sản xuất nội thất', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.980384380735!2d105.81945410764918!3d21.022778763202346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1649257946209!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'smtp', 'ssl://mail.websitemu.com', 465, 7, 'contact@websitemu.com', 'muhammad', '2022-04-06 22:49:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kategori_staff` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_staff` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses_level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rahasia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `kode_rahasia`, `gambar`, `keterangan`, `tanggal_post`, `tanggal`) VALUES
(1, 'super admin', 'admin@gmail.com', 'administrator', '601f1889667efaebb33b8c12572835da3f027f78', 'Admin', NULL, '1649258448_36e3ad893feeec973e08.jpg', '', '2019-10-12 15:50:21', '2022-04-06 16:01:13'),
(2, 'Rayyan', 'andoyoandoyo@gmail.com', 'rayyan', 'acc5d43e0936dbf3f27b906891aaafdf9ede4508', 'User', NULL, NULL, '', '2019-04-24 17:21:18', '2019-04-24 10:21:18'),
(3, 'Kheira Alexandrina', 'andoyoandoyo@gmail.com', 'diana', '6a90af129eeefc2f6e6a38746a2b33cb04c2c632', 'User', NULL, NULL, '<p>adada</p>', '2019-10-12 14:10:05', '2021-04-21 01:07:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_logs`
--

CREATE TABLE `user_logs` (
  `id_user_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_updates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_logs`
--

INSERT INTO `user_logs` (`id_user_log`, `id_user`, `ip_address`, `username`, `url`, `tanggal_updates`) VALUES
(1, 1, '::1', 'javawebmedia', 'http://localhost/webci4/admin/dasbor', '2021-05-03 01:19:34'),
(2, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/dasbor', '2022-04-06 14:59:03'),
(3, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/logo', '2022-04-06 15:02:03'),
(4, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/logo', '2022-04-06 15:02:09'),
(5, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/logo', '2022-04-06 15:02:09'),
(6, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/logo', '2022-04-06 15:05:15'),
(7, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/logo', '2022-04-06 15:05:16'),
(8, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/logo', '2022-04-06 15:06:24'),
(9, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/logo', '2022-04-06 15:06:24'),
(10, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/icon', '2022-04-06 15:06:39'),
(11, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/icon', '2022-04-06 15:06:42'),
(12, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/icon', '2022-04-06 15:06:43'),
(13, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/seo', '2022-04-06 15:07:57'),
(14, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/seo', '2022-04-06 15:08:28'),
(15, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi/seo', '2022-04-06 15:08:28'),
(16, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:08:32'),
(17, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:12:51'),
(18, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:12:52'),
(19, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:14:40'),
(20, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:18:16'),
(21, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:18:27'),
(22, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:18:27'),
(23, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:19:09'),
(24, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:19:10'),
(25, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 15:20:41'),
(26, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 15:20:48'),
(27, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 15:20:48'),
(28, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 15:21:07'),
(29, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 15:21:07'),
(30, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 15:21:33'),
(31, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 15:21:38'),
(32, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 15:21:38'),
(33, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/dasbor', '2022-04-06 15:21:45'),
(34, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/dasbor', '2022-04-06 15:44:48'),
(35, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/dasbor', '2022-04-06 15:45:47'),
(36, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/dasbor', '2022-04-06 15:45:49'),
(37, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/dasbor', '2022-04-06 15:49:34'),
(38, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/panduan', '2022-04-06 15:49:40'),
(39, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita', '2022-04-06 15:50:13'),
(40, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita', '2022-04-06 15:50:40'),
(41, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita/tambah', '2022-04-06 15:50:57'),
(42, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita', '2022-04-06 15:51:37'),
(43, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:52:42'),
(44, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/edit/6', '2022-04-06 15:53:18'),
(45, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/edit/6', '2022-04-06 15:53:23'),
(46, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:53:23'),
(47, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/edit/5', '2022-04-06 15:53:25'),
(48, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/edit/5', '2022-04-06 15:53:29'),
(49, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:53:29'),
(50, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/edit/4', '2022-04-06 15:53:58'),
(51, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/edit/4', '2022-04-06 15:54:02'),
(52, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:54:02'),
(53, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:54:49'),
(54, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/delete/2', '2022-04-06 15:54:55'),
(55, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:54:55'),
(56, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/delete/3', '2022-04-06 15:54:59'),
(57, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:54:59'),
(58, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/delete/1', '2022-04-06 15:55:02'),
(59, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:55:03'),
(60, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita', '2022-04-06 15:55:06'),
(61, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita/delete/24', '2022-04-06 15:55:48'),
(62, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita', '2022-04-06 15:55:48'),
(63, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita', '2022-04-06 15:56:12'),
(64, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/client', '2022-04-06 15:56:20'),
(65, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/client', '2022-04-06 15:56:46'),
(66, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/client', '2022-04-06 15:56:48'),
(67, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/staff', '2022-04-06 15:56:51'),
(68, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/staff/delete/10', '2022-04-06 15:56:53'),
(69, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/staff', '2022-04-06 15:56:54'),
(70, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/staff/delete/9', '2022-04-06 15:56:56'),
(71, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/staff', '2022-04-06 15:56:56'),
(72, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/user', '2022-04-06 15:56:59'),
(73, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/staff', '2022-04-06 15:57:13'),
(74, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 15:57:17'),
(75, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:57:28'),
(76, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:57:58'),
(77, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/berita/tambah', '2022-04-06 15:58:14'),
(78, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:58:16'),
(79, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:58:30'),
(80, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 15:58:31'),
(81, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 16:01:06'),
(82, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 16:01:13'),
(83, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/akun', '2022-04-06 16:01:13'),
(84, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/dasbor', '2022-04-06 16:01:16'),
(85, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri', '2022-04-06 16:28:26'),
(86, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri/edit/5', '2022-04-06 16:28:39'),
(87, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri/edit/5', '2022-04-06 16:29:45'),
(88, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri', '2022-04-06 16:29:46'),
(89, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri/edit/4', '2022-04-06 16:30:10'),
(90, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri/edit/4', '2022-04-06 16:32:33'),
(91, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri/edit/4', '2022-04-06 16:33:10'),
(92, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri/edit/4', '2022-04-06 16:35:19'),
(93, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri', '2022-04-06 16:35:19'),
(94, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri/tambah', '2022-04-06 16:36:25'),
(95, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri/tambah', '2022-04-06 16:37:49'),
(96, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/galeri', '2022-04-06 16:37:50'),
(97, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 16:58:20'),
(98, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/edit/4', '2022-04-06 16:58:24'),
(99, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori/edit/4', '2022-04-06 16:58:28'),
(100, 1, '::1', 'javawebmedia', 'http://localhost/compro/admin/kategori', '2022-04-06 16:58:28'),
(101, 1, '::1', 'administrator', 'http://localhost/compro/admin/dasbor', '2022-04-06 22:30:47'),
(102, 1, '::1', 'administrator', 'http://localhost/compro/admin/galeri', '2022-04-06 22:30:56'),
(103, 1, '::1', 'administrator', 'http://localhost/compro/admin/galeri/edit/4', '2022-04-06 22:31:06'),
(104, 1, '::1', 'administrator', 'http://localhost/compro/admin/galeri/edit/4', '2022-04-06 22:31:19'),
(105, 1, '::1', 'administrator', 'http://localhost/compro/admin/galeri', '2022-04-06 22:31:19'),
(106, 1, '::1', 'administrator', 'http://localhost/compro/admin/galeri/edit/4', '2022-04-06 22:31:30'),
(107, 1, '::1', 'administrator', 'http://localhost/compro/admin/galeri/edit/4', '2022-04-06 22:31:34'),
(108, 1, '::1', 'administrator', 'http://localhost/compro/admin/galeri', '2022-04-06 22:31:34'),
(109, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 22:33:44'),
(110, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 22:48:32'),
(111, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 22:49:19'),
(112, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-06 22:49:19'),
(113, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:00:30'),
(114, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:01:08'),
(115, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:03:08'),
(116, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:03:08'),
(117, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-06 23:03:18'),
(118, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-06 23:03:31'),
(119, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-06 23:03:31'),
(120, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:03:43'),
(121, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:03:57'),
(122, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:03:57'),
(123, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:04:06'),
(124, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:04:07'),
(125, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-06 23:05:48'),
(126, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-06 23:06:00'),
(127, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-06 23:06:17'),
(128, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-06 23:06:18'),
(129, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-06 23:06:22'),
(130, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-06 23:52:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id_video`, `id_user`, `judul`, `keterangan`, `video`, `tanggal_post`, `tanggal`) VALUES
(1, 1, 'INSTALASI XAMPP DAN SUBLIME TEXT', 'INSTALASI XAMPP DAN SUBLIME TEXT', 'A66PiaPuTZs', '0000-00-00 00:00:00', '2020-02-13 00:48:03'),
(2, 1, 'Sesi 2 Konfigurasi, Halaman Login, Belajar Controller dan View', 'Sesi 2 Konfigurasi, Halaman Login, Belajar Controller dan View', 'kFfAir_JgIU', '0000-00-00 00:00:00', '2020-02-13 00:48:31'),
(3, 1, 'Makan bersama dengan Bunda', 'Makan bersama dengan Bunda', 'jVr6CYLhjQo', '0000-00-00 00:00:00', '2021-04-23 20:49:17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Chỉ mục cho bảng `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Chỉ mục cho bảng `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Chỉ mục cho bảng `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Chỉ mục cho bảng `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Chỉ mục cho bảng `kategori_download`
--
ALTER TABLE `kategori_download`
  ADD PRIMARY KEY (`id_kategori_download`);

--
-- Chỉ mục cho bảng `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id_kategori_galeri`);

--
-- Chỉ mục cho bảng `kategori_staff`
--
ALTER TABLE `kategori_staff`
  ADD PRIMARY KEY (`id_kategori_staff`);

--
-- Chỉ mục cho bảng `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id_user_log`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `kategori_download`
--
ALTER TABLE `kategori_download`
  MODIFY `id_kategori_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id_kategori_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `kategori_staff`
--
ALTER TABLE `kategori_staff`
  MODIFY `id_kategori_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id_user_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
