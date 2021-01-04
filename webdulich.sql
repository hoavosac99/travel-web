-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 12, 2020 lúc 06:57 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
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
-- Cơ sở dữ liệu: `webdulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'phu', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkytour`
--

CREATE TABLE `dangkytour` (
  `ma_dk` int(20) NOT NULL,
  `ma_khach` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_tour` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong_ve` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangkytour`
--

INSERT INTO `dangkytour` (`ma_dk`, `ma_khach`, `ma_tour`, `soluong_ve`) VALUES
(1, 'cugoi', 'a5', 5),
(2, 'hay@gmail.com', 'b3', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemthamqua`
--

CREATE TABLE `diemthamqua` (
  `ma_diem` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_diem` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huongdanvien`
--

CREATE TABLE `huongdanvien` (
  `ma_hdv` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_hdv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `huongdanvien`
--

INSERT INTO `huongdanvien` (`ma_hdv`, `ten_hdv`, `phai`, `diachi`, `sdt`, `image`) VALUES
('ha', 'trang', 2, 'bac ninh', 456, '2.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qh_den`
--

CREATE TABLE `qh_den` (
  `ma_diem` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_tour` char(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `ma_tour` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_tour` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaybd` datetime NOT NULL,
  `ngaykt` datetime NOT NULL,
  `gia` int(20) NOT NULL,
  `ma_hdv` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`ma_tour`, `ten_tour`, `image`, `ngaybd`, `ngaykt`, `gia`, `ma_hdv`, `content`) VALUES
('77', 'Đà lạt', '4.png', '2020-10-05 00:00:00', '2020-10-10 00:00:00', 1223, 'ha', 'Hành trình:	Đông Bắc: Hà Nội - Hà Giang - Quảng Bạ - Đông Bắc - Lũng Cú - Mèo Vạc - Cao Bằng - Thác Bản Giốc - Động Ngườm Ngao - Hang Pắc Pó - Hồ Ba Bề\r\nLịch trình:	6 ngày 5 đêm\r\nNgày khởi hành:	03,10,17,24,31/07; 03,07,10,21,28/08; 11,25/09; 01/10\r\nVận chuyển:	Máy bay khứ hồi & xe du lịch đời mới'),
('a5', 'bugati', '2.png', '2020-10-05 00:00:00', '2020-10-06 00:00:00', 1223, 'ha', 'tuyệt vời'),
('b1', 'Đà Nẵng ', '5.png', '2020-07-10 00:00:00', '2020-07-15 00:00:00', 200, 'ha', ''),
('b2', 'Phú Quốc', '2.png', '2020-07-10 00:00:00', '2020-07-14 00:00:00', 500, 'ha', ''),
('b3', 'SaPa', '3.png', '2020-07-10 00:00:00', '2020-07-13 00:00:00', 200, 'ha', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `ten`, `phai`, `diachi`, `sdt`, `email`) VALUES
('cugoi', 'phu', 0, 'bac ninh', 789, 'cugoi'),
('hay@gmail.com', 'Phú Nguyễn', 0, 'bac ninh', 12, 'hay@gmail.com'),
('phu@gmail.com', 'Nguyễn Văn Phú', 0, 'bac ninh', 37, 'phu@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `ma_ve` int(20) NOT NULL,
  `ten_ve` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_tour` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_khach` char(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dangkytour`
--
ALTER TABLE `dangkytour`
  ADD PRIMARY KEY (`ma_dk`),
  ADD KEY `ma_khach` (`ma_khach`),
  ADD KEY `ma_tour` (`ma_tour`);

--
-- Chỉ mục cho bảng `diemthamqua`
--
ALTER TABLE `diemthamqua`
  ADD PRIMARY KEY (`ma_diem`);

--
-- Chỉ mục cho bảng `huongdanvien`
--
ALTER TABLE `huongdanvien`
  ADD PRIMARY KEY (`ma_hdv`);

--
-- Chỉ mục cho bảng `qh_den`
--
ALTER TABLE `qh_den`
  ADD KEY `ma_tour` (`ma_tour`),
  ADD KEY `ma_diem` (`ma_diem`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`ma_tour`),
  ADD KEY `ma_hdv` (`ma_hdv`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`ma_ve`),
  ADD KEY `ma_tour` (`ma_tour`),
  ADD KEY `ma_khach` (`ma_khach`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dangkytour`
--
ALTER TABLE `dangkytour`
  MODIFY `ma_dk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `ma_ve` int(20) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dangkytour`
--
ALTER TABLE `dangkytour`
  ADD CONSTRAINT `dangkytour_ibfk_1` FOREIGN KEY (`ma_khach`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `dangkytour_ibfk_2` FOREIGN KEY (`ma_tour`) REFERENCES `tour` (`ma_tour`);

--
-- Các ràng buộc cho bảng `qh_den`
--
ALTER TABLE `qh_den`
  ADD CONSTRAINT `qh_den_ibfk_1` FOREIGN KEY (`ma_tour`) REFERENCES `tour` (`ma_tour`),
  ADD CONSTRAINT `qh_den_ibfk_2` FOREIGN KEY (`ma_diem`) REFERENCES `diemthamqua` (`ma_diem`);

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`ma_hdv`) REFERENCES `huongdanvien` (`ma_hdv`);

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_ibfk_1` FOREIGN KEY (`ma_tour`) REFERENCES `dangkytour` (`ma_tour`),
  ADD CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`ma_khach`) REFERENCES `dangkytour` (`ma_khach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
