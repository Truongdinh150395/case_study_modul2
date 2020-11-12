-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 12, 2020 lúc 10:01 AM
-- Phiên bản máy phục vụ: 8.0.21-0ubuntu0.20.04.4
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `QUANLYDIEM`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Class`
--

CREATE TABLE `Class` (
  `id_class` int NOT NULL,
  `ClassName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Class`
--

INSERT INTO `Class` (`id_class`, `ClassName`) VALUES
(101, 'Lớp 12A'),
(102, 'Lớp 12B');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Point`
--

CREATE TABLE `Point` (
  `id` int NOT NULL,
  `id_Student` int NOT NULL,
  `math` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `literature` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `english` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Point`
--

INSERT INTO `Point` (`id`, `id_Student`, `math`, `literature`, `english`) VALUES
(2, 2, '7', '7', '7'),
(3, 6, '5', '5', '5'),
(4, 8, '10', '10', '10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Students`
--

CREATE TABLE `Students` (
  `id_student` int NOT NULL,
  `id_class` int NOT NULL,
  `NameStudent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Students`
--

INSERT INTO `Students` (`id_student`, `id_class`, `NameStudent`, `Gender`, `Date`, `Address`) VALUES
(2, 101, 'Đinh Thế Trường', 'Nam', '1995-03-15', 'Nam Định'),
(3, 101, 'Đinh Ngọc Thanh', 'Nam', '1996-10-10', 'Nam Định'),
(6, 101, 'Hoàng Ngọc Quang', 'Nam', '1993-02-09', 'Nam Định'),
(8, 101, 'Đinh Thế Anh', 'Nam', '1996-10-07', 'Nam Định'),
(9, 101, 'Nguyễn Hồng Phúc', 'Nam', '1996-12-10', 'Nam Định'),
(10, 101, 'Nguyễn Việt Sơn', 'Nam', '1996-02-07', 'Nam Định');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Subject`
--

CREATE TABLE `Subject` (
  `id_Subject` int NOT NULL,
  `SubjectName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `Subject`
--

INSERT INTO `Subject` (`id_Subject`, `SubjectName`) VALUES
(1, 'Môn Toán'),
(2, 'Môn Lý'),
(3, 'Môn Hoá');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`id_class`);

--
-- Chỉ mục cho bảng `Point`
--
ALTER TABLE `Point`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Student` (`id_Student`);

--
-- Chỉ mục cho bảng `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_class` (`id_class`);

--
-- Chỉ mục cho bảng `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`id_Subject`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Class`
--
ALTER TABLE `Class`
  MODIFY `id_class` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `Point`
--
ALTER TABLE `Point`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `Students`
--
ALTER TABLE `Students`
  MODIFY `id_student` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `Subject`
--
ALTER TABLE `Subject`
  MODIFY `id_Subject` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Point`
--
ALTER TABLE `Point`
  ADD CONSTRAINT `Point_ibfk_1` FOREIGN KEY (`id_Student`) REFERENCES `Students` (`id_student`);

--
-- Các ràng buộc cho bảng `Students`
--
ALTER TABLE `Students`
  ADD CONSTRAINT `Students_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `Class` (`id_class`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
