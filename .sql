-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2021 lúc 03:27 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

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
  `id_chuongtrinh` int(11) NOT NULL,
  `tenchuongtrinh` varchar(255) NOT NULL,
  `loaikhuyenmai` int(11) NOT NULL,
  `thoigian_batdau` datetime NOT NULL,
  `tonggiay_batdau` bigint(20) NOT NULL,
  `thoigian_ketthuc` datetime NOT NULL,
  `tonggiay_ketthuc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuongtrinh_khuyenmai`
--

INSERT INTO `chuongtrinh_khuyenmai` (`id_chuongtrinh`, `tenchuongtrinh`, `loaikhuyenmai`, `thoigian_batdau`, `tonggiay_batdau`, `thoigian_ketthuc`, `tonggiay_ketthuc`) VALUES
(22, 'Ngày nhà giáo Việt Nam', 1, '2021-11-22 02:56:00', 1637546160, '2021-11-28 02:56:00', 1638064560),
(23, 'Ngày nhà giáo Việt Nam 1', 2, '2021-11-03 15:20:00', 1635949200, '2021-11-06 15:21:00', 1636208460);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `TENDANHMUC` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TRANGTHAI` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `TENDANHMUC`, `TRANGTHAI`) VALUES
(80, 'các món phụ 123', 1),
(85, 'tuấn đẹp trai', 1);

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
(58, '19522049@gm.uit.edu.vn', '202cb962ac59075b964b07152d234b70'),
(59, 'anhdagia7321@gmail.com', '202cb962ac59075b964b07152d234b70'),
(60, '19522254@gm.uit.edu.vn', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `sdt_khachhang` varchar(255) NOT NULL,
  `id_monan` int(11) NOT NULL,
  `TENMONAN` varchar(255) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `GIA` bigint(20) NOT NULL,
  `GIAKHUYENMAI` bigint(20) NOT NULL,
  `TINHTRANG` tinyint(4) NOT NULL,
  `IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`sdt_khachhang`, `id_monan`, `TENMONAN`, `id_danhmuc`, `GIA`, `GIAKHUYENMAI`, `TINHTRANG`, `IMAGE`) VALUES
('1', 21, '2121', 80, 21212, 1212121, 1, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuongtrinh_khuyenmai`
--
ALTER TABLE `chuongtrinh_khuyenmai`
  ADD PRIMARY KEY (`id_chuongtrinh`),
  ADD UNIQUE KEY `tenchuongtrinh` (`tenchuongtrinh`);

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
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id_monan`),
  ADD KEY `fk_danhmuc_monan` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chuongtrinh_khuyenmai`
--
ALTER TABLE `chuongtrinh_khuyenmai`
  MODIFY `id_chuongtrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `id_monan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
