-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2022 lúc 07:11 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `company`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `activity`
--

INSERT INTO `activity` (`id`, `name`, `content`) VALUES
(1, 'Kế hoạch tổng thể', 'Khi chúng ta làm việc cùng nhau, chúng ta là đối tác, nhưng khi chúng ta đã hoàn thành công việc, chúng ta là những người bạn. Hãy cùng chia sẽ với chúng tôi những giá trị mà chúng ta tạo dựng cho cuộc sống...\r\n\r\n'),
(2, 'Quản lý dự án', 'Khi chúng ta làm việc cùng nhau, chúng ta là đối tác, nhưng khi chúng ta đã hoàn thành công việc, chúng ta là những người bạn. Hãy cùng chia sẽ với chúng tôi những giá trị mà chúng ta tạo dựng cho cuộc sống...\r\n\r\n'),
(3, 'Thiết kế kiến trúc - nội thất', 'Bố trí, sắp đặt không gian bao gồm kiến trúc, kết cấu, cấp điện, chiếu sáng, cấp thoát nước, điều hòa, thông gió,… và thời gian để tạo nên một nơi sinh sống đẹp, chất lượng, tiện ích...\r\n\r\n'),
(4, 'Thi công xây dựng', 'NextCompany là đơn vị thi công nội thất chuyên nghiệp được xây dựng cùng đội ngũ kiến trúc sư, nhân công lành nghề, có nhiều năm kinh nghiệm trong lĩnh vực thiết kế, sản xuất và thi công nội thất.\r\n\r\n'),
(5, 'Cảnh quan', 'Đào tạo những Kỹ sư Kiến trúc cảnh quan có trình độ khoa học kỹ thuật tổng hợp và có năng lực quy hoạch, thiết kế và quản lý những không gian trống trong đô thị, các khu dân cư, khu danh lam thắng cảnh...\r\n\r\n'),
(6, 'Thiết kế đô thị', 'Tại NewCT, chúng tôi luôn đánh giá môi trường và đánh giá cảnh quan xung quanh, tư vấn lập kế hoạch và các đề xuất quản lý đất đai.Lên kế hoạch xây dựng các công trình\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `id_user`, `slug_category`, `name_category`, `order`, `views`, `date`) VALUES
(1, 1, 'tin-tuc', 'Tin tức', NULL, 43, '2022-04-14 09:37:20'),
(2, 1, 'dich-vu', 'Dịch vụ', NULL, 1, '2022-04-14 14:09:22'),
(3, 1, 'gioi-thieu', 'Giới thiệu', NULL, 0, '2022-04-10 08:57:40'),
(4, 1, 'du-an', 'Dự án', NULL, 41, '2022-04-14 14:07:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_download`
--

CREATE TABLE `category_download` (
  `id_category_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_category_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_category_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_download`
--

INSERT INTO `category_download` (`id_category_download`, `id_user`, `slug_category_download`, `name_category_download`, `order`, `views`, `date`) VALUES
(1, 0, 'formulir-pendaftaran', 'Formulir Pendaftaran', 1, 0, '2021-04-21 00:37:58'),
(2, 1, 'promosi-java-web-media-2021', 'Promosi Java Web Media 2021', 2, 0, '2021-04-21 01:08:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_gallery`
--

CREATE TABLE `category_gallery` (
  `id_category_gallery` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_category_gallery` varchar(255) NOT NULL,
  `name_category_gallery` varchar(255) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `views` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category_gallery`
--

INSERT INTO `category_gallery` (`id_category_gallery`, `id_user`, `slug_category_gallery`, `name_category_gallery`, `order`, `views`, `date`) VALUES
(1, 1, 'home-slider', 'home slider', 1, 0, '2022-04-10 08:19:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_staff`
--

CREATE TABLE `category_staff` (
  `id_category_staff` int(11) NOT NULL,
  `name_category_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_staff`
--

INSERT INTO `category_staff` (`id_category_staff`, `name_category_staff`) VALUES
(1, 'Ban lãnh đạo'),
(2, 'Chuyên viên'),
(3, 'Kỹ sư hệ thống'),
(4, 'Kiến trúc sư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `type_client` enum('personal','company','organization') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_client` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_post` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `client`
--

INSERT INTO `client` (`id_client`, `id_user`, `type_client`, `name`, `leader`, `address`, `phone`, `website`, `email`, `testimonial`, `picture`, `status_client`, `country`, `date_of_birth`, `date_post`, `date`) VALUES
(1, 1, '', 'adidas', '', '', '', '', '', NULL, 'b8d57b67540ff1b9c1d795c0957b53ef.png', 'Publish', NULL, '1970-01-01', '2022-04-10 16:10:57', '2022-04-10 09:10:57'),
(2, 1, '', 'nike', '', '', '', '', '', NULL, 'fec2b574590409.5c34b44dcc3b0.png', 'Publish', NULL, '1970-01-01', '2022-04-10 16:11:09', '2022-04-10 09:29:34'),
(3, 1, '', 'batman', '', '', '', '', '', NULL, 'images-(1).png', 'Publish', NULL, '1970-01-01', '2022-04-10 16:11:22', '2022-04-10 09:11:22'),
(4, 1, '', 'levents', '', '', '', '', '', NULL, 'images-(2).png', 'Publish', NULL, '1970-01-01', '2022-04-10 16:11:32', '2022-04-10 09:11:32'),
(5, 1, '', 'ghost', '', '', '', '', '', NULL, 'images-(3).png', 'Publish', NULL, '1970-01-01', '2022-04-10 16:11:42', '2022-04-10 09:11:42'),
(6, 1, '', 'panda', '', '', '', '', '', NULL, 'images.png', 'Publish', NULL, '1970-01-01', '2022-04-10 16:11:51', '2022-04-10 09:11:51'),
(7, 1, '', 'puma', '', '', '', '', '', NULL, 'logo-puma-inkythuatso-01-03-15-39-41.png', 'Publish', NULL, '1970-01-01', '2022-04-10 16:12:00', '2022-04-10 09:29:40'),
(8, 1, '', 'typenice', '', '', '', '', '', NULL, 'typeface.png', 'Publish', NULL, '1970-01-01', '2022-04-10 16:12:09', '2022-04-10 09:29:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client_contact`
--

CREATE TABLE `client_contact` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

CREATE TABLE `config` (
  `id_config` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nameweb` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shorthand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_backup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatext` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protocol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_timeout` int(11) NOT NULL,
  `smtp_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `whatwedo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cultura_activiti` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `config`
--

INSERT INTO `config` (`id_config`, `id_user`, `nameweb`, `shorthand`, `tagline`, `intro`, `description`, `website`, `email`, `email_backup`, `address`, `phone`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `youtube`, `name_facebook`, `name_twitter`, `name_instagram`, `name_youtube`, `google_map`, `protocol`, `smtp_host`, `smtp_port`, `smtp_timeout`, `smtp_user`, `smtp_pass`, `date`, `whatwedo`, `cultura_activiti`, `slogan`) VALUES
(1, 1, 'NewCT', 'NewCT', 'Tất cả vì quyền lợi khách hàng', '<p><strong><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">TƯ DUY NGHỀ NGHIỆP:</span></span></span></span></strong><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">&nbsp;Tạo ra l&agrave; kết quả của qu&aacute; tr&igrave;nh đầu tư về tr&iacute; tuệ, thẩm mỹ v&agrave; tinh thần nhằm mang lại một kh&ocirc;ng gian sống tiện &iacute;ch v&agrave; kết nối.</span></span></span></span></p>\r\n<p><strong><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">TẦM NH&Igrave;N &amp; SỨ MẠNG:</span></span></span></span></strong><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">&nbsp;X&aacute;c định nhu cầu v&agrave; thị hiếu nh&agrave; theo xu hướng ng&agrave;y c&agrave;ng n&acirc;ng cao chất lượng cuộc sống dựa tr&ecirc;n gi&aacute; trị vật chất v&agrave; tinh thần, đặt ra những y&ecirc;u cầu khắt khe hơn về dịch vụ x&acirc;y dựng d&acirc;n dụng. Cập nhật xu thế, nắm bắt nhu cầu trong quy hoạch nh&agrave; ở theo hướng l&acirc;u d&agrave;i, đ&oacute; l&agrave; những gi&aacute; trị m&agrave; ch&uacute;ng t&ocirc;i đang theo đuổi trong suốt qu&aacute; tr&igrave;nh từ x&acirc;y dựng &yacute; tưởng đến ho&agrave;n th&agrave;nh c&ocirc;ng tr&igrave;nh.</span></span></span></span></p>', '<p>NEWCT l&agrave; c&ocirc;ng ty chuy&ecirc;n nghiệp cung cấp c&aacute;c dịch vụ: Tư vấn thiết kế, tư vấn đầu tư, x&acirc;y dựng v&agrave; thương mại uy t&iacute;n &ndash; chất lượng v&agrave; gi&aacute; cả ph&ugrave; hợp.</p>\r\n<p>Bằng t&iacute;nh kĩ năng chuy&ecirc;n m&ocirc;n xuất sắc v&agrave; tinh thần l&agrave;m việc nghi&ecirc;m t&uacute;c, ch&uacute;ng t&ocirc;i lu&ocirc;n cố gắng nổ lực h&ograve;an thiện m&igrave;nh nhằm mục ti&ecirc;u cung cấp đến qu&yacute; kh&aacute;ch h&agrave;ng những sản phẩm dịch vụ ng&agrave;y c&agrave;ng h&ograve;an thiện , với phong c&aacute;ch hiện đại.</p>', 'newct.vn', 'abc@gmail.com', 'def@gmail.com', 'Ngô Quyền Hải Phòng', '+84123456789', '0123456799', 'new ct logo.png', 'new ct logo.png', 'Chào m?ng b?n ??n v?i công ty chúng tôi', 'Chào m?ng b?n ??n v?i công ty chúng tôi', 'https://www.facebook.com/ABC media', 'http://twitter.com/ABC media', 'https://instagram.com/ABC media', 'https://www.youtube.com/channel/ABC media', 'Công ty thiết kế - Sản xuất nội thất', 'Công ty thiết kế - Sản xuất nội thất', 'Công ty thiết kế - Sản xuất nội thất', 'Công ty thiết kế - Sản xuất nội thất', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.980384380735!2d105.81945410764918!3d21.022778763202346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1649257946209!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'smtp', 'ssl://mail.websitemu.com', 465, 7, 'contact@websitemu.com', 'muhammad', '2022-04-10 08:55:15', '<p>Tại NEWCT, ch&uacute;ng t&ocirc;i x&acirc;y dựng một hệ thống c&aacute;c qui tr&igrave;nh v&agrave; giải ph&aacute;p nhằm mang đến cho qu&iacute; kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c những giải ph&aacute;p kiến tr&uacute;c v&agrave; c&ocirc;ng nghệ x&acirc;y dựng mang t&iacute;nh đột ph&aacute;.</p>\r\n<p>G&oacute;p phần hiện thực h&oacute;a giấc mơ an cư của mọi người Việt Nam, v&agrave; tiến đến việc tiến ra thế giới bằng nhiệt huyết tuổi trẻ v&agrave; niềm đam m&ecirc; chinh phục.</p>', '<p>C&ugrave;ng với đội ngũ c&aacute;c kiến tr&uacute;c sư c&oacute; năng lực chuy&ecirc;n m&ocirc;n cao, ch&uacute;ng t&ocirc;i chọn cho m&igrave;nh một phong c&aacute;ch hiện đại v&agrave; chuy&ecirc;n nghiệp trong c&aacute;c dịch vụ m&agrave; ch&uacute;ng t&ocirc;i cung cấp, m&agrave; ti&ecirc;n phong l&agrave; lĩnh vực tư vấn thiết kế, nhằm mục ti&ecirc;u đưa Kiến tr&uacute;c NextCompany th&agrave;nh một c&ocirc;ng ty h&agrave;ng đầu trong lĩnh vực x&acirc;y dựng tại VietNam.</p>\r\n<p>G&oacute;p phần kiến tạo một xu hướng kiến tr&uacute;c tr&aacute;ch nhiệm v&agrave; h&agrave;i h&ograve;a... - Kh&ocirc;ng n&oacute;i l&yacute; do &ndash; chỉ n&oacute;i kết quả - Kh&ocirc;ng tranh c&atilde;i &ndash; chỉ n&oacute;i giải ph&aacute;p - Kh&ocirc;ng chứng tỏ c&aacute; nh&acirc;n &ndash; chỉ cống hiến - Kh&ocirc;ng vụ lợi - chỉ hưởng th&agrave;nh quả từ năng lực của m&igrave;nh</p>', 'Hãy liên hệ ngay với chúng tôi!\r\nPhục vụ chu đáo - Thiết kế sáng tạo - Thi công sắc sảo - Dịch vụ hoàn hảo\r\nHãy cùng NextCompany xây dựng ngôi nhà mơ ước của bạn!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `id_category_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title_download` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_download` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL,
  `date_post` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `download`
--

INSERT INTO `download` (`id_download`, `id_category_download`, `id_user`, `title_download`, `type_download`, `content`, `picture`, `website`, `views`, `date_post`, `date`) VALUES
(3, 2, 1, 'Paket Harga Kursus Desain dan Programming Java Web Media 2020', 'Download', '<p>Paket Harga Kursus Desain dan Programming Java Web Media 2020</p>', 'Daftar_Harga_Kursus_2020_v2.pdf', '', 0, '0000-00-00 00:00:00', '2020-02-13 00:50:27'),
(4, 1, 1, 'Formulir Pendaftaran Siswa Kursus', 'Download', '<p>Formulir Pendaftaran Siswa Kursus</p>', 'FORMULIR_PENDAFTARAN_SISWA_KURSUS.pdf', '', 0, '0000-00-00 00:00:00', '2020-02-13 00:50:10'),
(5, 2, 1, 'Paket Harga Kursus Statistik Java Web Media 2020', 'Download', '<p>Paket Harga Kursus Statistik Java Web Media 2020</p>', 'KURSUS_STATISTIK.pdf', '', 0, '0000-00-00 00:00:00', '2020-02-13 00:50:48'),
(6, 2, 1, 'Panduan Untuk Admin Engineering Utama aaa', 'Download', '<p>Panduan Untuk Admin Engineering Utama</p>', '010-Undangan-Workshop-Rekonsiliasi-Feb-2021.pdf', '', 0, '2021-04-23 20:06:25', '2021-04-24 01:27:48'),
(7, 2, 1, 'Panduan Untuk Admin Engineeringa', 'Panduan', '', 'SURAT-TUGAS-BOGOR-27-29-NOVEMBER-2019.pdf', '', 0, '2021-04-24 02:31:13', '2021-04-24 01:26:00'),
(8, 2, 1, 'Panduan Website', 'Download', '<p>Panduan Website</p>', 'RENCANA-JADWAL-MAS-FAISAL-BSM.pdf', '', 4, '2021-04-24 08:20:48', '2021-04-24 03:51:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_category_gallery` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title_gallery` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_gallery` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `status_text` enum('show','notshow','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_post` datetime DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_category_gallery`, `id_user`, `title_gallery`, `type_gallery`, `content`, `picture`, `website`, `views`, `status_text`, `date_post`, `date`) VALUES
(1, 1, 1, 'NEWCT', 'Homepage', 'Công ty nội thất hàng đầu', 'thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg', 'https://www.facebook.com/', NULL, 'show', '2022-04-10 15:20:29', '2022-04-10 08:24:52'),
(2, 1, 1, 'Mang đến cho khách hàng những sản phẩm và dịch vụ tốt nhất', 'Homepage', 'Công ty đi đầu trong lĩnh vực thiết kế nội thất', 'thi-cong-do-noi-that-6172.jpg', 'https://www.facebook.com/', NULL, 'show', '2022-04-10 15:21:31', '2022-04-10 08:24:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `time` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id`, `time`, `name`, `content`, `picture`) VALUES
(1, '11/11/1993', 'bla bla', 'bla bla', 'thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg'),
(2, '11/11/2011', '124', '124', 'thi-cong-do-noi-that-6172.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `intro_in_landingpage`
--

CREATE TABLE `intro_in_landingpage` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `gallery` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `intro_in_landingpage`
--

INSERT INTO `intro_in_landingpage` (`id`, `name`, `content`, `gallery`) VALUES
(1, 'value-13', 'value-2', '2-phong-cach-thiet-ke.jpg,bao-gia-thiet-ke---thi-cong-noi-that_s2030.jpg,thi-cong-do-noi-that-6172.jpg,thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `slug_news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_news` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_news` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL,
  `date_post` datetime NOT NULL,
  `date_publish` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `list_image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_news`, `id_user`, `id_category`, `slug_news`, `title_news`, `summary`, `content`, `status_news`, `type_news`, `keywords`, `picture`, `icon`, `views`, `date_post`, `date_publish`, `date`, `list_image`) VALUES
(1, 1, 1, 'tin-tuc-1', 'tin tức 1', 'nháp tin tức 1', '<p>test tin tức 1</p>', 'Publish', 'news', 'test tin tức 1', 'thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg', '', 15, '2022-04-10 15:59:12', '2022-04-10 15:58:00', '2022-04-14 09:29:31', ''),
(2, 1, 1, 'tin-tuc-2', 'Tin tức 2', 'test tin tức 2', '<p>test tin tức 2</p>', 'Publish', 'news', 'test tin tức 2', 'thi-cong-do-noi-that-6172.jpg', '', 0, '2022-04-10 15:59:28', '2022-04-10 15:59:00', '2022-04-10 08:59:28', ''),
(3, 1, 1, 'tin-tuc-3', 'tin tức 3', 'test tin tức 3', '<p>test tin tức 3</p>', 'Publish', 'news', 'test tin tức 3', 'bao-gia-thiet-ke---thi-cong-noi-that_s2030.jpg', '', 0, '2022-04-10 15:59:44', '2022-04-10 15:59:00', '2022-04-10 08:59:44', ''),
(4, 1, 1, 'tin-tuc-4', 'Tin tức 4', 'test tin tức 4', '<p>test tin tức 4</p>', 'Publish', 'news', 'test tin tức 4', '2-phong-cach-thiet-ke.jpg', '', 0, '2022-04-10 16:00:00', '2022-04-10 15:59:00', '2022-04-10 09:00:00', ''),
(5, 1, 4, 'du-an-1', 'Dự án 1', 'Chi tiết dự án 1', '<p>Chi tiết dự &aacute;n 1</p>', 'Publish', 'news', 'Chi tiết dự án 1', 'thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg', '', 0, '2022-04-10 16:04:15', '2022-04-10 16:03:00', '2022-04-10 09:04:15', ''),
(6, 1, 4, 'du-an-3', 'Dự án 3', 'Chi tiết dự án 3', '<p>Chi tiết dự &aacute;n 3</p>', 'Publish', 'news', 'Chi tiết dự án 3', 'thi-cong-do-noi-that-6172.jpg', '', 0, '2022-04-10 16:04:36', '2022-04-10 16:04:00', '2022-04-10 09:05:51', ''),
(7, 1, 4, 'du-an-4', 'Dự án 4', 'Chi tiết dự án 4', '<p>Chi tiết dự &aacute;n 4</p>', 'Publish', 'news', 'Chi tiết dự án 5', 'thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg', '', 0, '2022-04-10 16:04:15', '2022-04-10 16:03:00', '2022-04-10 09:04:15', ''),
(8, 1, 4, 'du-an-5', 'Dự án 5', 'Chi tiết dự án 5', '<p>Chi tiết dự &aacute;n 5</p>', 'Publish', 'news', 'Chi tiết dự án 5', 'thi-cong-do-noi-that-6172.jpg', '', 0, '2022-04-10 16:04:36', '2022-04-10 16:04:00', '2022-04-10 09:05:51', ''),
(9, 1, 4, 'du-an-1', 'Dự án 1', 'Chi tiết dự án 1', '<p>Chi tiết dự &aacute;n 1</p>', 'Publish', 'news', 'Chi tiết dự án 1', 'thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg', '', 3, '2022-04-10 16:04:15', '2022-04-10 16:03:00', '2022-04-14 09:30:26', ''),
(10, 1, 4, 'du-an-3', 'Dự án 3', 'Chi tiết dự án 3', '<p>Chi tiết dự &aacute;n 3</p>', 'Publish', 'news', 'Chi tiết dự án 3', 'thi-cong-do-noi-that-6172.jpg', '', 76, '2022-04-10 16:04:36', '2022-04-10 16:04:00', '2022-04-13 07:38:22', ''),
(11, 1, 4, 'du-an-4', 'Dự án 4', 'Chi tiết dự án 4', '<p>Chi tiết dự &aacute;n 4</p>', 'Publish', 'news', 'Chi tiết dự án 5', 'thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg', '', 0, '2022-04-10 16:04:15', '2022-04-10 16:03:00', '2022-04-10 09:04:15', ''),
(12, 1, 4, 'du-an-5', 'Dự án 5', 'Chi tiết dự án 5', '<p>Chi tiết dự &aacute;n 5</p>', 'Publish', 'news', 'Chi tiết dự án 5', 'thi-cong-do-noi-that-6172.jpg', '', 42, '2022-04-10 16:04:36', '2022-04-10 16:04:00', '2022-04-14 09:37:18', ''),
(13, 1, 3, 'tam-nhin-su-menh', 'Tầm nhìn sứ mệnh', 'Tầm nhìn sứ mệnh', '<p>Tầm nh&igrave;n sứ mệnh</p>', 'Publish', 'news', 'Tầm nhìn sứ mệnh', 'bao-gia-thiet-ke---thi-cong-noi-that_s2030.jpg', '', 1, '2022-04-11 05:53:58', '2022-04-11 05:53:00', '2022-04-11 14:01:26', ''),
(14, 1, 3, 'lich-su-hinh-thanh', 'Lịch sử hình thành', 'Lịch sử hình thành', '<p>Lịch sử h&igrave;nh th&agrave;nh</p>', 'Publish', 'news', 'Lịch sử hình thành', 'ezgif-5-5a450191cc.jpg', '', 6, '2022-04-11 05:54:21', '2022-04-11 05:54:00', '2022-04-14 14:30:09', ''),
(15, 1, 3, 'dieu-khoan-dich-vu', 'Điều khoản dịch vụ', 'Điều khoản dịch vụ', '<p>Điều khoản dịch vụ</p>', 'Publish', 'news', 'Điều khoản dịch vụ', 'ezgif-5-5a450191cc.jpg', '', 1, '2022-04-11 05:54:38', '2022-04-11 05:54:00', '2022-04-11 14:01:22', ''),
(16, 1, 3, 'chinh-sach-bao-mat', 'Chính sách bảo mật', 'Chính sách bảo mật', '<p>Ch&iacute;nh s&aacute;ch bảo mật</p>', 'Publish', 'news', 'Chính sách bảo mật', 'ezgif-5-abfa1bc5ca.jpg', '', 2, '2022-04-11 05:54:52', '2022-04-11 05:54:00', '2022-04-12 04:33:51', ''),
(17, 1, 3, 'lien-he', 'Liên hệ', 'Liên hệ', '<p>Li&ecirc;n hệ</p>', 'Publish', 'news', 'Liên hệ', 'thiet-ke-noi-that-phong-khach-hai-an-hai-phong-2.jpg', '', 11, '2022-04-11 21:02:05', '2022-04-11 21:01:00', '2022-04-14 14:39:27', ''),
(21, 1, 4, 'test', 'test', 'sfsfsafsa', '<p>fsafsffsa</p>', 'Publish', 'news', 'fsfsfsafsa', '270042048_6851542858220483_6126150908330374520_n.jpg', '', 29, '2022-04-13 15:08:50', '2022-04-13 15:08:00', '2022-04-14 09:30:34', '274819045_1161674131242528_8961311952679374754_n.jpg,270042048_6851542858220483_6126150908330374520_n.jpg,hopamcoban-guitar - Copy.jpg,nitish-meena-RbbdzZBKRDY-unsplash - Copy.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id_pages` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_pages` varchar(255) NOT NULL,
  `title_pages` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `keywords` text NOT NULL,
  `show_on_menu` tinyint(4) DEFAULT NULL,
  `show_on_footer` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id_pages`, `id_user`, `slug_pages`, `title_pages`, `summary`, `content`, `keywords`, `show_on_menu`, `show_on_footer`) VALUES
(1, 1, 'lien-he', 'Liên hệ', 'bla bla bla', '<p>bla bla bla</p>', 'bla bla bla', NULL, NULL),
(2, 1, 'dich-vu', 'Dịch vụ', 'tóm tắt dịch vụ', '<p>1233414</p>', '2412421421421', 0, 0),
(3, 1, 'chinh-sach-bao-mat', 'Chính sách bảo mật', 'Chính sách bảo mật', '<div class=\"heading-page\">\r\n<h1>Ch&iacute;nh s&aacute;ch bảo mật</h1>\r\n</div>\r\n<div class=\"wrapbox-content-page\">\r\n<div class=\"content-page \">\r\n<p>Ch&iacute;nh s&aacute;ch bảo mật n&agrave;y nhằm gi&uacute;p Qu&yacute; kh&aacute;ch hiểu về c&aacute;ch website thu thập v&agrave; sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh th&ocirc;ng qua việc sử dụng trang web, bao gồm mọi th&ocirc;ng tin c&oacute; thể cung cấp th&ocirc;ng qua trang web khi Qu&yacute; kh&aacute;ch đăng k&yacute; t&agrave;i khoản, đăng k&yacute; nhận th&ocirc;ng tin li&ecirc;n lạc từ ch&uacute;ng t&ocirc;i, hoặc khi Qu&yacute; kh&aacute;ch mua sản phẩm, dịch vụ, y&ecirc;u cầu th&ecirc;m th&ocirc;ng tin dịch vụ từ ch&uacute;ng t&ocirc;i.</p>\r\n<p>Ch&uacute;ng t&ocirc;i sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của Qu&yacute; kh&aacute;ch để li&ecirc;n lạc khi cần thiết li&ecirc;n quan đến việc Qu&yacute; kh&aacute;ch sử dụng website của ch&uacute;ng t&ocirc;i, để trả lời c&aacute;c c&acirc;u hỏi hoặc gửi t&agrave;i liệu v&agrave; th&ocirc;ng tin Qu&yacute; kh&aacute;ch y&ecirc;u cầu.</p>\r\n<p><span class=\"wysiwyg-font-size-medium\">Trang web của ch&uacute;ng t&ocirc;i coi trọng việc bảo mật th&ocirc;ng tin v&agrave; sử dụng c&aacute;c biện ph&aacute;p tốt nhất để bảo vệ th&ocirc;ng tin cũng như việc thanh to&aacute;n của kh&aacute;ch h&agrave;ng.&nbsp;</span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\">Mọi th&ocirc;ng tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan ph&aacute;p luật y&ecirc;u cầu.</span></p>\r\n</div>\r\n</div>', 'Chính sách bảo mật', 1, 1),
(4, 1, 'dieu-khoan-dich-vu', 'Điều khoản dịch vụ', 'Điều khoản dịch vụ', '<p><span class=\"wysiwyg-font-size-medium\"><strong>1. Giới thiệu</strong></span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\">Ch&agrave;o mừng qu&yacute; kh&aacute;ch h&agrave;ng đến với website ch&uacute;ng t&ocirc;i.</span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\">Khi qu&yacute; kh&aacute;ch h&agrave;ng truy cập v&agrave;o trang website của ch&uacute;ng t&ocirc;i c&oacute; nghĩa l&agrave; qu&yacute; kh&aacute;ch đồng &yacute; với c&aacute;c điều khoản n&agrave;y. Trang web c&oacute; quyền thay đổi, chỉnh sửa, th&ecirc;m hoặc lược bỏ bất kỳ phần n&agrave;o trong Điều khoản mua b&aacute;n h&agrave;ng h&oacute;a n&agrave;y, v&agrave;o bất cứ l&uacute;c n&agrave;o. C&aacute;c thay đổi c&oacute; hiệu lực ngay khi được đăng tr&ecirc;n trang web m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o trước. V&agrave; khi qu&yacute; kh&aacute;ch tiếp tục sử dụng trang web, sau khi c&aacute;c thay đổi về Điều khoản n&agrave;y được đăng tải, c&oacute; nghĩa l&agrave; qu&yacute; kh&aacute;ch chấp nhận với những thay đổi đ&oacute;.</span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\">Qu&yacute; kh&aacute;ch h&agrave;ng vui l&ograve;ng kiểm tra thường xuy&ecirc;n để cập nhật những thay đổi của ch&uacute;ng t&ocirc;i.</span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\"><strong>2. Hướng dẫn sử dụng website</strong></span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\">Khi v&agrave;o web của ch&uacute;ng t&ocirc;i, kh&aacute;ch h&agrave;ng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự gi&aacute;m s&aacute;t của cha mẹ hay người gi&aacute;m hộ hợp ph&aacute;p. Kh&aacute;ch h&agrave;ng đảm bảo c&oacute; đầy đủ h&agrave;nh vi d&acirc;n sự để thực hiện c&aacute;c giao dịch mua b&aacute;n h&agrave;ng h&oacute;a theo quy định hiện h&agrave;nh của ph&aacute;p luật Việt Nam.</span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\">Trong suốt qu&aacute; tr&igrave;nh đăng k&yacute;, qu&yacute; kh&aacute;ch đồng &yacute; nhận email quảng c&aacute;o từ website. Nếu kh&ocirc;ng muốn tiếp tục nhận mail, qu&yacute; kh&aacute;ch c&oacute; thể từ chối bằng c&aacute;ch nhấp v&agrave;o đường link ở dưới c&ugrave;ng trong mọi email quảng c&aacute;o.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span class=\"wysiwyg-font-size-medium\"><strong>3. Thanh to&aacute;n an to&agrave;n v&agrave; tiện lợi</strong></span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\">Người mua c&oacute; thể tham khảo c&aacute;c phương thức thanh to&aacute;n sau đ&acirc;y v&agrave; lựa chọn &aacute;p dụng phương thức ph&ugrave; hợp:</span></p>\r\n<p><span class=\"wysiwyg-font-size-medium\"><strong><u>C&aacute;ch 1</u></strong>: Thanh to&aacute;n trực tiếp (người mua nhận h&agrave;ng tại địa chỉ người b&aacute;n)<br /></span><span class=\"wysiwyg-font-size-medium\"><strong><u>C&aacute;ch 2</u></strong><strong>:</strong>&nbsp;Thanh to&aacute;n sau (COD &ndash; giao h&agrave;ng v&agrave; thu tiền tận nơi)<br /></span><span class=\"wysiwyg-font-size-medium\"><strong><u>C&aacute;ch 3</u></strong><strong>:</strong>&nbsp;Thanh to&aacute;n online qua thẻ t&iacute;n dụng, chuyển khoản</span></p>', 'Điều khoản dịch vụ', 1, 1),
(5, 1, 'gioi-thieu', 'Giới thiệu', 'Giới thiệu', '<p>Giới thiệu</p>', 'Giới thiệu', 1, 1),
(6, 1, 'chinh-sach-doi-tra', 'Chính sách đổi trả', 'Chính sách đổi trả', '<p><strong>1. Điều kiện đổi trả</strong></p>\r\n<p>Qu&yacute; Kh&aacute;ch h&agrave;ng cần kiểm tra t&igrave;nh trạng h&agrave;ng h&oacute;a v&agrave; c&oacute; thể đổi h&agrave;ng/ trả lại h&agrave;ng&nbsp;ngay tại thời điểm giao/nhận h&agrave;ng&nbsp;trong những trường hợp sau:</p>\r\n<ul>\r\n<li>H&agrave;ng kh&ocirc;ng đ&uacute;ng chủng loại, mẫu m&atilde; trong đơn h&agrave;ng đ&atilde; đặt hoặc như tr&ecirc;n website tại thời điểm đặt h&agrave;ng.</li>\r\n<li>Kh&ocirc;ng đủ số lượng, kh&ocirc;ng đủ bộ như trong đơn h&agrave;ng.</li>\r\n<li>T&igrave;nh trạng b&ecirc;n ngo&agrave;i bị ảnh hưởng như r&aacute;ch bao b&igrave;, bong tr&oacute;c, bể vỡ&hellip;</li>\r\n</ul>\r\n<p>&nbsp;Kh&aacute;ch h&agrave;ng c&oacute; tr&aacute;ch nhiệm tr&igrave;nh giấy tờ li&ecirc;n quan chứng minh sự thiếu s&oacute;t tr&ecirc;n để ho&agrave;n th&agrave;nh việc&nbsp;ho&agrave;n trả/đổi trả h&agrave;ng h&oacute;a.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>2. Quy định về thời gian th&ocirc;ng b&aacute;o v&agrave; gửi sản phẩm đổi trả</strong></p>\r\n<ul>\r\n<li><strong>Thời gian th&ocirc;ng b&aacute;o đổi trả</strong>:&nbsp;trong v&ograve;ng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, qu&agrave; tặng hoặc bể vỡ.</li>\r\n<li><strong>Thời gian gửi chuyển trả sản phẩm</strong>: trong v&ograve;ng 14 ng&agrave;y kể từ khi nhận sản phẩm.</li>\r\n<li><strong>Địa điểm đổi trả sản phẩm</strong>: Kh&aacute;ch h&agrave;ng c&oacute; thể mang h&agrave;ng trực tiếp đến văn ph&ograve;ng/ cửa h&agrave;ng của ch&uacute;ng t&ocirc;i hoặc chuyển qua đường bưu điện.</li>\r\n</ul>\r\n<p>Trong trường hợp Qu&yacute; Kh&aacute;ch h&agrave;ng c&oacute; &yacute; kiến đ&oacute;ng g&oacute;p/khiếu nại li&ecirc;n quan đến chất lượng sản phẩm, Qu&yacute; Kh&aacute;ch h&agrave;ng vui l&ograve;ng li&ecirc;n hệ đường d&acirc;y chăm s&oacute;c kh&aacute;ch h&agrave;ng&nbsp;của ch&uacute;ng t&ocirc;i.</p>', 'Chính sách đổi trả', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_category_staff` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_staff` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id_staff`, `id_user`, `id_category_staff`, `name`, `address`, `phone`, `website`, `email`, `position`, `skill`, `date`, `status_staff`, `country`, `date_of_birth`, `picture`) VALUES
(11, 1, 1, 'Bách', '', '', '', '', 'CEO', '', NULL, 'Publish', '', '1970-01-01', '5-must-have-man-bags-for-work-Featured.png'),
(12, 1, 1, 'Quang Trung', '', '', '', '', 'Kiến trúc sư', '', NULL, 'Publish', '', '1970-01-01', '105daf000271fb2fb27eae69ad942c88.jpg'),
(13, 1, 2, 'Minh Tú', '', '', '', '', 'Kiến trúc sư', '', NULL, 'Publish', '', '1970-01-01', 'photo-1605664042212-73d09aa18a96.jfif'),
(14, 1, 2, 'Cường Nguyễn', '', '', '', '', 'Kiến trúc sư kết cấu', '', NULL, 'Publish', '', '1970-01-01', 'photo-1605664042212-73d09aa18a96.jfif'),
(15, 1, 2, 'Cường Nguyễn', '', '', '', '', 'Kiến trúc sư kết cấu', '', NULL, 'Publish', '', '1970-01-01', 'photo-1605664042212-73d09aa18a96.jfif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_secrect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_post` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `username`, `password`, `access_level`, `code_secrect`, `picture`, `description`, `date_post`, `date`) VALUES
(1, 'super admin', 'admin@gmail.com', 'administrator', '601f1889667efaebb33b8c12572835da3f027f78', 'Admin', NULL, '1649258448_36e3ad893feeec973e08.jpg', '', '2019-10-12 15:50:21', '2022-04-06 16:01:13'),
(4, 'obokozu123', 'obokozu@gmail.com', 'editor', '601f1889667efaebb33b8c12572835da3f027f78', 'User', NULL, NULL, NULL, '2022-04-10 14:35:35', '2022-04-10 07:35:50');

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
  `date_updates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_logs`
--

INSERT INTO `user_logs` (`id_user_log`, `id_user`, `ip_address`, `username`, `url`, `date_updates`) VALUES
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
(130, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-06 23:52:39'),
(131, 1, '::1', 'administrator', 'http://localhost/compro/admin/dasbor', '2022-04-07 03:25:47'),
(132, 1, '::1', 'administrator', 'http://localhost/compro/admin/kategori', '2022-04-07 03:25:55'),
(133, 1, '::1', 'administrator', 'http://localhost/compro/admin/dasbor', '2022-04-07 08:04:16'),
(134, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 08:15:32'),
(135, 1, '::1', 'administrator', 'http://localhost/compro/admin/dasbor', '2022-04-07 13:44:30'),
(136, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 14:29:21'),
(137, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 14:58:08'),
(138, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 14:58:09'),
(139, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 15:04:07'),
(140, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 15:04:09'),
(141, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 15:32:12'),
(142, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 15:32:32'),
(143, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 15:32:32'),
(144, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita', '2022-04-07 16:01:14'),
(145, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:01:17'),
(146, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:02:37'),
(147, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:02:38'),
(148, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:02:42'),
(149, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:03:55'),
(150, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:03:55'),
(151, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:03:58'),
(152, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:04:39'),
(153, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:04:39'),
(154, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/2', '2022-04-07 16:04:56'),
(155, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:05:07'),
(156, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/4', '2022-04-07 16:05:10'),
(157, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:05:12'),
(158, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/3', '2022-04-07 16:05:14'),
(159, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/3', '2022-04-07 16:05:19'),
(160, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:05:20'),
(161, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/2', '2022-04-07 16:05:28'),
(162, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:05:31'),
(163, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/1', '2022-04-07 16:05:33'),
(164, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/1', '2022-04-07 16:05:38'),
(165, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:05:38'),
(166, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/4', '2022-04-07 16:05:57'),
(167, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/4', '2022-04-07 16:06:01'),
(168, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:06:01'),
(169, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/1', '2022-04-07 16:06:20'),
(170, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/edit/1', '2022-04-07 16:06:43'),
(171, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:06:43'),
(172, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:11:58'),
(173, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:14:44'),
(174, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:17:47'),
(175, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:17:49'),
(176, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:17:51'),
(177, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:18:09'),
(178, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:18:10'),
(179, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:18:15'),
(180, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:18:33'),
(181, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:18:33'),
(182, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:18:36'),
(183, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/tambah', '2022-04-07 16:18:52'),
(184, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita/jenis_berita/Berita', '2022-04-07 16:18:52'),
(185, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 16:23:57'),
(186, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 16:24:44'),
(187, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 16:24:46'),
(188, 1, '::1', 'administrator', 'http://localhost/compro/admin/konfigurasi', '2022-04-07 16:44:24'),
(189, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita', '2022-04-07 16:45:44'),
(190, 1, '::1', 'administrator', 'http://localhost/compro/admin/dasbor', '2022-04-08 00:56:18'),
(191, 1, '::1', 'administrator', 'http://localhost/compro/admin/dasbor', '2022-04-08 01:16:41'),
(192, 1, '::1', 'administrator', 'http://localhost/compro/admin/akun', '2022-04-08 01:16:45'),
(193, 1, '::1', 'administrator', 'http://localhost/compro/admin/galeri', '2022-04-08 01:16:52'),
(194, 1, '::1', 'administrator', 'http://localhost/compro/admin/berita', '2022-04-08 01:16:57'),
(195, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:30:42'),
(196, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:31:15'),
(197, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:31:33'),
(198, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:32:06'),
(199, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:32:23'),
(200, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:32:33'),
(201, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:33:25'),
(202, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:33:44'),
(203, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:34:13'),
(204, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:34:28'),
(205, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:35:04'),
(206, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:36:58'),
(207, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:37:09'),
(208, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:37:35'),
(209, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:45:58'),
(210, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-08 16:46:00'),
(211, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 16:46:05'),
(212, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 16:46:54'),
(213, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 16:47:09'),
(214, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 16:48:02'),
(215, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 16:48:15'),
(216, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 16:55:55'),
(217, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 16:56:45'),
(218, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 16:56:57'),
(219, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 17:02:30'),
(220, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 17:02:46'),
(221, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/delete/16', '2022-04-08 17:02:52'),
(222, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 17:02:52'),
(223, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/delete/15', '2022-04-08 17:02:58'),
(224, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 17:02:58'),
(225, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:03:06'),
(226, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:06:16'),
(227, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:10:17'),
(228, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:13:09'),
(229, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:14:17'),
(230, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:18:56'),
(231, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:22:22'),
(232, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:23:25'),
(233, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/14', '2022-04-08 17:27:04'),
(234, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-08 17:27:04'),
(235, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-08 17:29:18'),
(236, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-10 04:35:51'),
(237, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-10 04:35:53'),
(238, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 04:35:55'),
(239, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:36:00'),
(240, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:36:04'),
(241, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:36:29'),
(242, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:38:39'),
(243, 1, '::1', 'administrator', 'http://localhost/compro/admin/category/edit/7', '2022-04-10 04:43:06'),
(244, 1, '::1', 'administrator', 'http://localhost/compro/admin/category/edit/7', '2022-04-10 04:44:20'),
(245, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 04:44:25'),
(246, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:44:33'),
(247, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:44:36'),
(248, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:44:43'),
(249, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:44:49'),
(250, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:45:02'),
(251, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:46:31'),
(252, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:46:33'),
(253, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:46:34'),
(254, 1, '::1', 'administrator', 'http://localhost/compro/admin/category/edit/8', '2022-04-10 04:46:54'),
(255, 1, '::1', 'administrator', 'http://localhost/compro/admin/category/edit/8', '2022-04-10 04:47:02'),
(256, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:47:02'),
(257, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:47:13'),
(258, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:47:14'),
(259, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:49:06'),
(260, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:49:06'),
(261, 1, '::1', 'administrator', 'http://localhost/compro/admin/category/delete/10', '2022-04-10 04:49:13'),
(262, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 04:49:13'),
(263, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:49:21'),
(264, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:57:12'),
(265, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:57:24'),
(266, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:58:27'),
(267, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:58:31'),
(268, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:59:55'),
(269, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 04:59:59'),
(270, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 05:00:00'),
(271, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 05:00:09'),
(272, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:02:15'),
(273, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:02:58'),
(274, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:03:51'),
(275, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:04:26'),
(276, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:05:25'),
(277, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:07:23'),
(278, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:07:50'),
(279, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:08:13'),
(280, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:09:05'),
(281, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:17:31'),
(282, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:18:30'),
(283, 1, '::1', 'administrator', 'http://localhost/compro/admin/Gallery/add', '2022-04-10 05:18:35'),
(284, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 05:18:41'),
(285, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 06:30:37'),
(286, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 06:34:15'),
(287, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 06:34:31'),
(288, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 06:54:37'),
(289, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 06:54:46'),
(290, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 06:59:03'),
(291, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:00:45'),
(292, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:00:52'),
(293, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:01:01'),
(294, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:01:36'),
(295, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:01:42'),
(296, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:01:43'),
(297, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:03:02'),
(298, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:03:05'),
(299, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/15', '2022-04-10 07:03:07'),
(300, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/15', '2022-04-10 07:03:34'),
(301, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/15', '2022-04-10 07:03:55'),
(302, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:04:22'),
(303, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/15', '2022-04-10 07:04:24'),
(304, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/15', '2022-04-10 07:05:51'),
(305, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:05:51'),
(306, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/15', '2022-04-10 07:05:53'),
(307, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:05:56'),
(308, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:05:57'),
(309, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:06:03'),
(310, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:06:04'),
(311, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:06:25'),
(312, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:06:35'),
(313, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:06:53'),
(314, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:07:00'),
(315, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:07:00'),
(316, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:07:17'),
(317, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:07:32'),
(318, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:07:34'),
(319, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:07:40'),
(320, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:07:40'),
(321, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:08:58'),
(322, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 07:09:05'),
(323, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:09:06'),
(324, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/19', '2022-04-10 07:09:08'),
(325, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/19', '2022-04-10 07:09:10'),
(326, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:09:11'),
(327, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/19', '2022-04-10 07:09:13'),
(328, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/19', '2022-04-10 07:09:16'),
(329, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:09:17'),
(330, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/delete/19', '2022-04-10 07:09:20'),
(331, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:09:20'),
(332, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 07:10:26'),
(333, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:10:55'),
(334, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:11:28'),
(335, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:11:44'),
(336, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:11:53'),
(337, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:12:27'),
(338, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:12:40'),
(339, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:12:41'),
(340, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:13:35'),
(341, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery/edit/7', '2022-04-10 07:13:40'),
(342, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery/edit/7', '2022-04-10 07:13:44'),
(343, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 07:13:44'),
(344, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:13:59'),
(345, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:14:18'),
(346, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:15:27'),
(347, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:16:10'),
(348, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:16:23'),
(349, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:16:46'),
(350, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:17:02'),
(351, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:20:43'),
(352, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:20:52'),
(353, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:20:53'),
(354, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/edit/4', '2022-04-10 07:20:56'),
(355, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/edit/4', '2022-04-10 07:23:58'),
(356, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/edit/4', '2022-04-10 07:24:23'),
(357, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:24:23'),
(358, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/edit/4', '2022-04-10 07:24:27'),
(359, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/edit/4', '2022-04-10 07:24:35'),
(360, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:24:35'),
(361, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/edit/4', '2022-04-10 07:24:38'),
(362, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/edit/4', '2022-04-10 07:24:43'),
(363, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:24:43'),
(364, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/delete/4', '2022-04-10 07:24:53'),
(365, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:24:53'),
(366, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:24:58'),
(367, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:25:00'),
(368, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-10 07:25:02'),
(369, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-10 07:30:14'),
(370, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-10 07:30:44'),
(371, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-10 07:31:08'),
(372, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-10 07:31:46'),
(373, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-10 07:33:41'),
(374, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 07:33:48'),
(375, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 07:33:57'),
(376, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 07:35:10'),
(377, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 07:35:34'),
(378, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 07:35:35'),
(379, 1, '::1', 'administrator', 'http://localhost/compro/admin/user/edit/4', '2022-04-10 07:35:45'),
(380, 1, '::1', 'administrator', 'http://localhost/compro/admin/user/edit/4', '2022-04-10 07:35:50'),
(381, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 07:35:50'),
(382, 1, '::1', 'administrator', 'http://localhost/compro/admin/user/delete/2', '2022-04-10 07:35:59'),
(383, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 07:35:59'),
(384, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 07:39:34'),
(385, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 07:40:19'),
(386, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 07:40:37'),
(387, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 07:41:26'),
(388, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 07:42:06'),
(389, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 07:42:18'),
(390, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 07:43:11'),
(391, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 07:43:33'),
(392, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 07:43:33'),
(393, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-10 07:58:59'),
(394, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-10 07:59:02'),
(395, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 07:59:03'),
(396, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 07:59:06'),
(397, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 07:59:13'),
(398, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 07:59:13'),
(399, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 07:59:16'),
(400, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 07:59:20'),
(401, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 07:59:20'),
(402, 1, '::1', 'administrator', 'http://localhost/compro/admin/category/edit/11', '2022-04-10 07:59:23'),
(403, 1, '::1', 'administrator', 'http://localhost/compro/admin/category/edit/11', '2022-04-10 07:59:28'),
(404, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 07:59:28'),
(405, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 07:59:32'),
(406, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/18', '2022-04-10 07:59:34'),
(407, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/18', '2022-04-10 07:59:37'),
(408, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 07:59:37'),
(409, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 08:00:56'),
(410, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/18', '2022-04-10 08:00:58'),
(411, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/18', '2022-04-10 08:01:00'),
(412, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 08:01:00'),
(413, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:01:02'),
(414, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:01:08'),
(415, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 08:01:08'),
(416, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/delete/19', '2022-04-10 08:01:11'),
(417, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 08:01:11'),
(418, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/18', '2022-04-10 08:02:34'),
(419, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 08:02:58'),
(420, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/18', '2022-04-10 08:03:00'),
(421, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/18', '2022-04-10 08:03:02'),
(422, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 08:03:03'),
(423, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/delete/18', '2022-04-10 08:03:06'),
(424, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 08:03:06'),
(425, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 08:03:08'),
(426, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 08:03:14'),
(427, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 08:03:14'),
(428, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 08:03:17'),
(429, 1, '::1', 'administrator', 'http://localhost/compro/admin/client/delete/3', '2022-04-10 08:03:19'),
(430, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 08:03:19'),
(431, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 08:03:26'),
(432, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 08:03:26'),
(433, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 08:03:27'),
(434, 1, '::1', 'administrator', 'http://localhost/compro/admin/user/delete/3', '2022-04-10 08:03:31'),
(435, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 08:03:32'),
(436, 1, '::1', 'administrator', 'http://localhost/compro/admin/user', '2022-04-10 08:10:51'),
(437, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 08:12:22'),
(438, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/delete/18', '2022-04-10 08:12:26'),
(439, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 08:12:26'),
(440, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 08:14:31'),
(441, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:14:34'),
(442, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:15:49'),
(443, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:16:02'),
(444, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 08:16:02'),
(445, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 08:17:11'),
(446, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 08:17:23'),
(447, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:17:32'),
(448, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:17:33'),
(449, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 08:18:00'),
(450, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 08:18:36'),
(451, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 08:19:51'),
(452, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_gallery', '2022-04-10 08:19:53'),
(453, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 08:20:01'),
(454, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 08:20:28'),
(455, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 08:20:29'),
(456, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/1', '2022-04-10 08:20:39'),
(457, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/1', '2022-04-10 08:20:43'),
(458, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 08:20:43'),
(459, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 08:20:50'),
(460, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/add', '2022-04-10 08:21:31'),
(461, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 08:21:31'),
(462, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/2', '2022-04-10 08:21:50'),
(463, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/2', '2022-04-10 08:21:53'),
(464, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery', '2022-04-10 08:21:53'),
(465, 1, '::1', 'administrator', 'http://localhost/compro/admin/gallery/edit/1', '2022-04-10 08:21:55'),
(466, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 08:25:20'),
(467, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:26:24'),
(468, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:26:24'),
(469, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 08:27:32'),
(470, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 08:27:48'),
(471, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 08:28:02'),
(472, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 08:33:09'),
(473, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:33:54'),
(474, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:33:54'),
(475, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 08:35:56'),
(476, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:36:02'),
(477, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:36:02'),
(478, 1, '::1', 'administrator', 'http://localhost/compro/admin/Config', '2022-04-10 08:41:09'),
(479, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:41:24'),
(480, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:41:24'),
(481, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:55:15'),
(482, 1, '::1', 'administrator', 'http://localhost/compro/admin/config', '2022-04-10 08:55:15'),
(483, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 08:55:30'),
(484, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:56:41'),
(485, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:56:52'),
(486, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:18'),
(487, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:23'),
(488, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:23'),
(489, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:30'),
(490, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:31'),
(491, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:40'),
(492, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:40'),
(493, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:53'),
(494, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 08:57:53'),
(495, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 08:58:04'),
(496, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:58:05'),
(497, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:58:51'),
(498, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:59:11'),
(499, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 08:59:12'),
(500, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:59:14'),
(501, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:59:28'),
(502, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 08:59:28'),
(503, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:59:29'),
(504, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:59:44'),
(505, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 08:59:44'),
(506, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 08:59:45');
INSERT INTO `user_logs` (`id_user_log`, `id_user`, `ip_address`, `username`, `url`, `date_updates`) VALUES
(507, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 09:00:00'),
(508, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 09:00:01'),
(509, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 09:03:58'),
(510, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 09:04:14'),
(511, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 09:04:15'),
(512, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 09:04:17'),
(513, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 09:04:36'),
(514, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 09:04:36'),
(515, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/6', '2022-04-10 09:04:58'),
(516, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/6', '2022-04-10 09:05:51'),
(517, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 09:05:51'),
(518, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 09:06:14'),
(519, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 09:06:56'),
(520, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-10 09:07:23'),
(521, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:07:41'),
(522, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:08:24'),
(523, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:10:55'),
(524, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:10:57'),
(525, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:09'),
(526, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:09'),
(527, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:21'),
(528, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:22'),
(529, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:31'),
(530, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:32'),
(531, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:42'),
(532, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:42'),
(533, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:51'),
(534, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:11:52'),
(535, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:12:00'),
(536, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:12:00'),
(537, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:12:09'),
(538, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:12:09'),
(539, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-10 09:50:36'),
(540, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-10 16:39:11'),
(541, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-10 22:27:36'),
(542, 1, '::1', 'administrator', 'http://localhost/compro/admin/category', '2022-04-10 22:53:21'),
(543, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 22:53:27'),
(544, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 22:53:58'),
(545, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 22:53:58'),
(546, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 22:54:01'),
(547, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 22:54:20'),
(548, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 22:54:21'),
(549, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 22:54:22'),
(550, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 22:54:38'),
(551, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 22:54:38'),
(552, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 22:54:40'),
(553, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-10 22:54:52'),
(554, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 22:54:52'),
(555, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-10 22:57:55'),
(556, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-11 12:41:11'),
(557, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-11 14:01:45'),
(558, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-11 14:02:04'),
(559, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-11 14:02:05'),
(560, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-12 00:49:53'),
(561, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-12 15:23:18'),
(562, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-13 01:00:16'),
(563, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-13 06:57:24'),
(564, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-13 07:40:16'),
(565, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/10', '2022-04-13 07:40:23'),
(566, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/edit/10', '2022-04-13 07:53:18'),
(567, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 07:53:23'),
(568, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 07:53:48'),
(569, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-13 07:53:49'),
(570, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 07:54:00'),
(571, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 07:54:23'),
(572, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 07:55:17'),
(573, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 07:55:20'),
(574, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 07:55:27'),
(575, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 08:04:30'),
(576, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-13 08:04:31'),
(577, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/delete/18', '2022-04-13 08:05:43'),
(578, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-13 08:05:44'),
(579, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/delete/19', '2022-04-13 08:05:47'),
(580, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-13 08:05:47'),
(581, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 08:05:51'),
(582, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 08:06:05'),
(583, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-13 08:06:06'),
(584, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/delete/20', '2022-04-13 08:06:14'),
(585, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-13 08:06:14'),
(586, 1, '::1', 'administrator', 'http://localhost/compro/admin/news', '2022-04-13 08:08:09'),
(587, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 08:08:10'),
(588, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 08:08:24'),
(589, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 08:08:48'),
(590, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/add', '2022-04-13 08:08:50'),
(591, 1, '::1', 'administrator', 'http://localhost/compro/admin/news/type_news/news', '2022-04-13 08:08:50'),
(592, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-13 15:59:30'),
(593, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-13 15:59:36'),
(594, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-13 16:01:44'),
(595, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-13 22:55:15'),
(596, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-14 01:12:27'),
(597, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-14 09:36:44'),
(598, 1, '::1', 'administrator', 'http://localhost/compro/admin/client', '2022-04-14 09:37:36'),
(599, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:39:34'),
(600, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:39:50'),
(601, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:40:14'),
(602, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 09:40:27'),
(603, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 09:41:56'),
(604, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 09:47:47'),
(605, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 09:48:06'),
(606, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 09:48:19'),
(607, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 09:48:27'),
(608, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:48:28'),
(609, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:49:25'),
(610, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:49:31'),
(611, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:49:44'),
(612, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:49:53'),
(613, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-14 09:50:02'),
(614, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-14 09:50:28'),
(615, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-14 09:50:58'),
(616, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-14 09:51:06'),
(617, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:51:07'),
(618, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:52:19'),
(619, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 09:52:22'),
(620, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 09:52:35'),
(621, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:52:35'),
(622, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/2', '2022-04-14 09:52:38'),
(623, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/2', '2022-04-14 09:52:42'),
(624, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 09:52:42'),
(625, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-14 14:02:47'),
(626, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:02:54'),
(627, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-14 14:02:57'),
(628, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-14 14:03:01'),
(629, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:03:01'),
(630, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/2', '2022-04-14 14:07:45'),
(631, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/2', '2022-04-14 14:07:48'),
(632, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:07:48'),
(633, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 14:16:53'),
(634, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 14:17:04'),
(635, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:17:05'),
(636, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 14:17:14'),
(637, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 14:17:23'),
(638, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:17:24'),
(639, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 14:17:28'),
(640, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 14:17:35'),
(641, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:17:35'),
(642, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/4', '2022-04-14 14:21:59'),
(643, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/4', '2022-04-14 14:22:05'),
(644, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:22:05'),
(645, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 14:22:33'),
(646, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-14 14:22:48'),
(647, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:22:49'),
(648, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/3', '2022-04-14 14:23:02'),
(649, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/3', '2022-04-14 14:23:04'),
(650, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-14 14:23:04'),
(651, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:40:55'),
(652, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:43:16'),
(653, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:47:43'),
(654, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:48:20'),
(655, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:48:41'),
(656, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:49:46'),
(657, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:50:15'),
(658, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:51:26'),
(659, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/1', '2022-04-14 14:51:29'),
(660, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/1', '2022-04-14 14:52:03'),
(661, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/1', '2022-04-14 14:52:10'),
(662, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:52:10'),
(663, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/2', '2022-04-14 14:52:13'),
(664, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/2', '2022-04-14 14:52:17'),
(665, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:52:17'),
(666, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/3', '2022-04-14 14:52:19'),
(667, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/3', '2022-04-14 14:52:24'),
(668, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:52:24'),
(669, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/3', '2022-04-14 14:52:26'),
(670, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff/edit/3', '2022-04-14 14:52:31'),
(671, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:52:31'),
(672, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:53:08'),
(673, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:53:14'),
(674, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 14:53:15'),
(675, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:53:21'),
(676, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:54:00'),
(677, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:56:42'),
(678, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:57:10'),
(679, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:57:13'),
(680, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:57:15'),
(681, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:57:34'),
(682, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:57:45'),
(683, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:58:43'),
(684, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:58:55'),
(685, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:58:56'),
(686, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 14:59:43'),
(687, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 15:00:44'),
(688, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 15:00:44'),
(689, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 15:01:01'),
(690, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 15:01:02'),
(691, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 15:01:23'),
(692, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 15:01:23'),
(693, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 15:01:24'),
(694, 1, '::1', 'administrator', 'http://localhost/compro/admin/staff', '2022-04-14 16:40:02'),
(695, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 16:40:07'),
(696, 1, '::1', 'administrator', 'http://localhost/compro/admin/category_staff', '2022-04-14 16:49:05'),
(697, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:15:56'),
(698, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:17:13'),
(699, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:17:55'),
(700, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:19:46'),
(701, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:20:02'),
(702, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:21:24'),
(703, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:22:31'),
(704, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:36:12'),
(705, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:52:27'),
(706, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:53:56'),
(707, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-14 17:54:14'),
(708, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-15 00:56:13'),
(709, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 00:56:26'),
(710, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 00:56:40'),
(711, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 00:57:49'),
(712, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 00:58:11'),
(713, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 01:03:15'),
(714, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 01:06:28'),
(715, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 01:07:32'),
(716, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 01:07:48'),
(717, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 01:08:10'),
(718, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 01:09:27'),
(719, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 01:09:57'),
(720, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 01:10:56'),
(721, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 01:11:05'),
(722, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 01:18:22'),
(723, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-15 01:18:33'),
(724, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 01:18:34'),
(725, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 01:18:51'),
(726, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-15 01:19:21'),
(727, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-19 11:57:47'),
(728, 1, '::1', 'administrator', 'http://localhost/compro/admin/dashboard', '2022-04-21 03:19:07'),
(729, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:19:14'),
(730, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/6', '2022-04-21 03:19:17'),
(731, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:22:08'),
(732, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:24:03'),
(733, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:24:17'),
(734, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:24:37'),
(735, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:25:49'),
(736, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:26:22'),
(737, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-21 03:27:06'),
(738, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-21 03:27:51'),
(739, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-21 03:30:04'),
(740, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:30:12'),
(741, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:30:14'),
(742, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:30:16'),
(743, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:30:17'),
(744, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:30:20'),
(745, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:30:42'),
(746, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:30:47'),
(747, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:30:47'),
(748, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:31:28'),
(749, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:37:28'),
(750, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/6', '2022-04-21 03:37:30'),
(751, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/6', '2022-04-21 03:37:33'),
(752, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:37:33'),
(753, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-21 03:38:08'),
(754, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-21 03:38:14'),
(755, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-21 03:38:43'),
(756, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-21 03:38:59'),
(757, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/add', '2022-04-21 03:39:05'),
(758, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:39:05'),
(759, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/7', '2022-04-21 03:39:10'),
(760, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/7', '2022-04-21 03:39:12'),
(761, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:39:12'),
(762, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/delete/7', '2022-04-21 03:39:16'),
(763, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:39:17'),
(764, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/4', '2022-04-21 03:43:15'),
(765, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/4', '2022-04-21 03:43:28'),
(766, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:43:29'),
(767, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/3', '2022-04-21 03:43:32'),
(768, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/3', '2022-04-21 03:43:35'),
(769, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:43:35'),
(770, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-21 03:43:44'),
(771, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-21 03:43:46'),
(772, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:43:46'),
(773, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:43:55'),
(774, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:43:58'),
(775, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:43:59'),
(776, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/3', '2022-04-21 03:45:47'),
(777, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/3', '2022-04-21 03:45:49'),
(778, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:45:49'),
(779, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/4', '2022-04-21 03:45:52'),
(780, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/4', '2022-04-21 03:45:54'),
(781, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:45:54'),
(782, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:45:56'),
(783, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/5', '2022-04-21 03:45:58'),
(784, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:45:58'),
(785, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/6', '2022-04-21 03:46:01'),
(786, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/6', '2022-04-21 03:46:02'),
(787, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:46:03'),
(788, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-21 03:46:18'),
(789, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages/edit/1', '2022-04-21 03:46:20'),
(790, 1, '::1', 'administrator', 'http://localhost/compro/admin/pages', '2022-04-21 03:46:20'),
(791, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:00:34'),
(792, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-21 04:01:35'),
(793, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:01:37'),
(794, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-21 04:01:48'),
(795, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:01:48'),
(796, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-21 04:01:57'),
(797, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:01:58'),
(798, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-21 04:02:07'),
(799, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:02:07'),
(800, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/add', '2022-04-21 04:02:25'),
(801, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:02:26'),
(802, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:02:28'),
(803, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:04:37'),
(804, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:05:10'),
(805, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:05:20'),
(806, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:06:37'),
(807, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:07:27'),
(808, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:07:30'),
(809, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:08:05'),
(810, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:08:08'),
(811, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:08:09'),
(812, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:08:37'),
(813, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity/edit/6', '2022-04-21 04:09:09'),
(814, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:09:09'),
(815, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:09:27'),
(816, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:09:40'),
(817, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:09:58'),
(818, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:12:00'),
(819, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:23:24'),
(820, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:23:33'),
(821, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:23:46'),
(822, 1, '::1', 'administrator', 'http://localhost/compro/admin/activity', '2022-04-21 04:23:49'),
(823, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:29:49'),
(824, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:30:02'),
(825, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:30:14'),
(826, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:32:50'),
(827, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:33:11'),
(828, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:33:30'),
(829, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:37:30'),
(830, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/add', '2022-04-21 04:37:50'),
(831, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/add', '2022-04-21 04:38:24'),
(832, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/add', '2022-04-21 04:38:50'),
(833, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:39:11'),
(834, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/add', '2022-04-21 04:39:27'),
(835, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:39:41'),
(836, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/add', '2022-04-21 04:39:45'),
(837, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:39:45'),
(838, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:40:34'),
(839, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:41:42'),
(840, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:41:57'),
(841, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/edit/1', '2022-04-21 04:42:04'),
(842, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/edit/1', '2022-04-21 04:42:49'),
(843, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/edit/1', '2022-04-21 04:42:57'),
(844, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:42:58'),
(845, 1, '::1', 'administrator', 'http://localhost/compro/admin/history/add', '2022-04-21 04:47:48'),
(846, 1, '::1', 'administrator', 'http://localhost/compro/admin/history', '2022-04-21 04:47:48'),
(847, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:00:12'),
(848, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:00:37'),
(849, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:01:03'),
(850, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:01:13'),
(851, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:01:21'),
(852, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:02:17'),
(853, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:02:27'),
(854, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro/edit/1', '2022-04-21 05:02:36'),
(855, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro/edit/1', '2022-04-21 05:03:04'),
(856, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:03:05'),
(857, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro/edit/1', '2022-04-21 05:03:09'),
(858, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:03:55'),
(859, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:04:25'),
(860, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro/edit/1', '2022-04-21 05:04:32'),
(861, 1, '::1', 'administrator', 'http://localhost/compro/admin/intro', '2022-04-21 05:04:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_post` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id_video`, `id_user`, `title`, `description`, `video`, `date_post`, `date`) VALUES
(1, 1, 'INSTALASI XAMPP DAN SUBLIME TEXT', 'INSTALASI XAMPP DAN SUBLIME TEXT', 'A66PiaPuTZs', '0000-00-00 00:00:00', '2020-02-13 00:48:03'),
(2, 1, 'Sesi 2 Konfigurasi, Halaman Login, Belajar Controller dan View', 'Sesi 2 Konfigurasi, Halaman Login, Belajar Controller dan View', 'kFfAir_JgIU', '0000-00-00 00:00:00', '2020-02-13 00:48:31'),
(3, 1, 'Makan bersama dengan Bunda', 'Makan bersama dengan Bunda', 'jVr6CYLhjQo', '0000-00-00 00:00:00', '2021-04-23 20:49:17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `category_download`
--
ALTER TABLE `category_download`
  ADD PRIMARY KEY (`id_category_download`);

--
-- Chỉ mục cho bảng `category_gallery`
--
ALTER TABLE `category_gallery`
  ADD PRIMARY KEY (`id_category_gallery`);

--
-- Chỉ mục cho bảng `category_staff`
--
ALTER TABLE `category_staff`
  ADD PRIMARY KEY (`id_category_staff`);

--
-- Chỉ mục cho bảng `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Chỉ mục cho bảng `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id_config`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `intro_in_landingpage`
--
ALTER TABLE `intro_in_landingpage`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id_pages`);

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
-- AUTO_INCREMENT cho bảng `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category_download`
--
ALTER TABLE `category_download`
  MODIFY `id_category_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category_gallery`
--
ALTER TABLE `category_gallery`
  MODIFY `id_category_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category_staff`
--
ALTER TABLE `category_staff`
  MODIFY `id_category_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `intro_in_landingpage`
--
ALTER TABLE `intro_in_landingpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id_pages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id_user_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=862;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
