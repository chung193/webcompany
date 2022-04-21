-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2022 lúc 07:05 AM
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `intro_in_landingpage`
--
ALTER TABLE `intro_in_landingpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `intro_in_landingpage`
--
ALTER TABLE `intro_in_landingpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
