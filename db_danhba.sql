-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 23, 2021 lúc 05:29 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_danhba`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `id` int(11) NOT NULL,
  `id_Dvi` int(11) DEFAULT NULL,
  `ten` varchar(50) NOT NULL,
  `chucvu` varchar(50) NOT NULL,
  `sdtCoquan` int(11) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`id`, `id_Dvi`, `ten`, `chucvu`, `sdtCoquan`, `sdt`, `email`) VALUES
(1, NULL, 'Nguyễn Thanh Tùng', 'Trưởng khoa', 38521442, 905776384, 'nttung@gmail.com'),
(2, NULL, 'Đặng Thị Thu Hiền', 'P.Trưởng khoa', 38421442, 935776384, 'dtthien@gmail.com'),
(3, NULL, 'Nguyễn Thị Thu Hương', 'Trợ lý khoa', 38428442, 935466384, 'ntthuong@gmail.com'),
(4, NULL, 'Nguyễn Khánh Linh', 'Trợ lý khoa', 38328442, 933866384, 'nklinhg@gmail.com'),
(5, NULL, 'Nguyễn Hữu Thọ', 'Trưởng BM', 38328442, 933866384, 'nhthog@gmail.com'),
(6, NULL, 'Đỗ Lân', 'Phó BM', 38328442, 933866384, 'dlan@gmail.com'),
(7, NULL, 'Nguyễn Đức Hậu', 'Phó BM', 38328442, 933866384, 'ndhau@gmail.com'),
(8, NULL, 'Phạm Xuân Trung', 'Giảng viên', 38328442, 933866384, 'pxtrung@gmail.com'),
(9, NULL, 'Phan Thị Thanh Huyền', 'Giảng viên', 38328442, 933866384, 'ptthuyeng@gmail.com'),
(10, NULL, 'Nguyễn Văn Đắc', 'Giảng viên', 38328442, 933866384, 'nvdacg@gmail.com'),
(11, NULL, 'Nguyễn Thị Vân', 'Giảng viên', 38328442, 933866384, 'ntvan@gmail.com'),
(12, NULL, 'Kiều Tuấn Dũng', 'Giảng viên', 956434656, 456346645, 'ktdung@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coquan`
--

CREATE TABLE `coquan` (
  `id_Dvi` int(11) NOT NULL,
  `tenDvi` varchar(50) NOT NULL,
  `diaChi` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `parent_idDvi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `coquan`
--

INSERT INTO `coquan` (`id_Dvi`, `tenDvi`, `diaChi`, `sdt`, `email`, `website`, `parent_idDvi`) VALUES
(1, 'Ban giám hiệu', 'Phòng 201 A1', 456346645, 'p201@wru.edu.vn', 'p201.tlu.edu.vn', 0),
(2, 'Hội đồng trường', 'Phòng 202 A1', 456346645, 'p202@wru.edu.vn', 'p202.tlu.edu.vn', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userID`, `username`, `pass`) VALUES
(1, 'datle', 'admin123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Dvi` (`id_Dvi`);

--
-- Chỉ mục cho bảng `coquan`
--
ALTER TABLE `coquan`
  ADD PRIMARY KEY (`id_Dvi`),
  ADD UNIQUE KEY `id_Dvi` (`id_Dvi`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `canbo`
--
ALTER TABLE `canbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD CONSTRAINT `canbo_ibfk_1` FOREIGN KEY (`id_Dvi`) REFERENCES `coquan` (`id_Dvi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
