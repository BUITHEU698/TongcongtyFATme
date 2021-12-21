-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2021 lúc 04:54 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fatme`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinh_khuyenmai`
--

CREATE TABLE `chuongtrinh_khuyenmai` (
  `email_khachhang` varchar(255) NOT NULL,
  `id_chuongtrinh` int(11) NOT NULL,
  `TENCHUONGTRINH` varchar(255) NOT NULL,
  `LOAIKHUYENMAI` int(11) NOT NULL,
  `THOIGIAN_BATDAU` datetime NOT NULL,
  `TONGGIAY_BATDAU` bigint(20) NOT NULL,
  `THOIGIAN_KETTHUC` datetime NOT NULL,
  `TONGGIAY_KETTHUC` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuongtrinh_khuyenmai`
--

INSERT INTO `chuongtrinh_khuyenmai` (`email_khachhang`, `id_chuongtrinh`, `TENCHUONGTRINH`, `LOAIKHUYENMAI`, `THOIGIAN_BATDAU`, `TONGGIAY_BATDAU`, `THOIGIAN_KETTHUC`, `TONGGIAY_KETTHUC`) VALUES
('19522049@gm.uit.edu.vn', 27, 'Ngày nhà giáo Việt Nam', 2, '2021-12-20 20:54:00', 1640008440, '2021-12-31 20:54:00', 1640958840),
('19522049@gm.uit.edu.vn', 29, 'Ngày nhà giáo Việt Nam 2', 1, '2021-12-01 20:55:00', 1638366900, '2021-12-09 20:54:00', 1639058040),
('19522049@gm.uit.edu.vn', 30, 'Ngày nhà giáo Việt Nam 1', 1, '2021-12-24 20:55:00', 1640354100, '2021-12-31 20:55:00', 1640958900),
('19522049@gm.uit.edu.vn', 31, '123', 1, '2021-12-19 07:48:00', 1639874880, '2021-12-26 07:48:00', 1640479680);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `email_khachhang` varchar(255) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `TENDANHMUC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MOTA` varchar(255) NOT NULL,
  `TRANGTHAI` tinyint(4) NOT NULL,
  `NGAYDANG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`email_khachhang`, `id_danhmuc`, `TENDANHMUC`, `MOTA`, `TRANGTHAI`, `NGAYDANG`) VALUES
('19522049@gm.uit.edu.vn', 97, 'Món Ăn Nhanh', 'Ăn nhanh lắm', 1, '20/12/2021 2:35:20'),
('19522049@gm.uit.edu.vn', 98, 'Món Ăn Nặng', 'Ăn xong nặng lắm', 2, '20/12/2021 2:35:37'),
('19522049@gm.uit.edu.vn', 99, 'Món ăn Vừa 123', 'Ăn vừa vừa thôi', 1, '20/12/2021 2:35:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `email` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `email`, `password`) VALUES
(61, '19522049@gm.uit.edu.vn', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ma_khuyenmai`
--

CREATE TABLE `ma_khuyenmai` (
  `email_khachhang` varchar(255) NOT NULL,
  `id_makhuyenmai` int(11) NOT NULL,
  `TENMAKHUYENMAI` varchar(255) NOT NULL,
  `id_chuongtrinh` int(11) DEFAULT NULL,
  `GIATRIKHUYENMAI` int(11) NOT NULL,
  `GIATRIGIAMTOIDA` int(11) NOT NULL,
  `DIEUKIEN` int(11) NOT NULL,
  `DK_SOLUONG` int(11) NOT NULL,
  `GIOIHAN` int(11) NOT NULL,
  `GH_SOLUONG` int(11) NOT NULL,
  `THOIGIAN_BATDAU` datetime NOT NULL,
  `TONGGIAY_BATDAU` bigint(20) NOT NULL,
  `THOIGIAN_KETTHUC` datetime NOT NULL,
  `TONGGIAY_KETTHUC` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ma_khuyenmai`
--

INSERT INTO `ma_khuyenmai` (`email_khachhang`, `id_makhuyenmai`, `TENMAKHUYENMAI`, `id_chuongtrinh`, `GIATRIKHUYENMAI`, `GIATRIGIAMTOIDA`, `DIEUKIEN`, `DK_SOLUONG`, `GIOIHAN`, `GH_SOLUONG`, `THOIGIAN_BATDAU`, `TONGGIAY_BATDAU`, `THOIGIAN_KETTHUC`, `TONGGIAY_KETTHUC`) VALUES
('19522049@gm.uit.edu.vn', 14, '123', 0, 123, 123, 1, 0, 1, 0, '2021-12-17 08:54:00', 1639706040, '2021-12-31 08:54:00', 1640915640);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `email_khachhang` varchar(255) NOT NULL,
  `id_monan` int(11) NOT NULL,
  `TENMONAN` varchar(255) NOT NULL,
  `MOTA` varchar(255) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `GIA` bigint(20) NOT NULL,
  `NGAYDANG` varchar(255) NOT NULL,
  `TRANGTHAI` tinyint(4) NOT NULL,
  `IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuongtrinh_khuyenmai`
--
ALTER TABLE `chuongtrinh_khuyenmai`
  ADD PRIMARY KEY (`id_chuongtrinh`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`),
  ADD UNIQUE KEY `TENDANHMUC` (`TENDANHMUC`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`email`);

--
-- Chỉ mục cho bảng `ma_khuyenmai`
--
ALTER TABLE `ma_khuyenmai`
  ADD PRIMARY KEY (`id_makhuyenmai`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id_monan`),
  ADD UNIQUE KEY `TENMONAN` (`TENMONAN`),
  ADD KEY `fk_danhmuc_monan` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chuongtrinh_khuyenmai`
--
ALTER TABLE `chuongtrinh_khuyenmai`
  MODIFY `id_chuongtrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `ma_khuyenmai`
--
ALTER TABLE `ma_khuyenmai`
  MODIFY `id_makhuyenmai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `id_monan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `fk_danhmuc_monan` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
