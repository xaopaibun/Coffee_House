-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2020 lúc 02:59 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlycoffeehouse`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datban`
--

CREATE TABLE `datban` (
  `HoTen` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `SDT` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `NgayGio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhcuahang`
--

CREATE TABLE `hinhanhcuahang` (
  `idHinhAnh` int(11) DEFAULT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homepagedata`
--

CREATE TABLE `homepagedata` (
  `id` int(11) NOT NULL,
  `TenThuocTinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GiaTriThuocTinh` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `homepagedata`
--

INSERT INTO `homepagedata` (`id`, `TenThuocTinh`, `GiaTriThuocTinh`) VALUES
(1, 'Footer', '{\"mapshop\":\"http://localhost:8080/Ex_PHP/CoffeeHouse/IMG/bg_map.jpg\",\"footer1\":{\"TieuDe1\":\"CHu00daNG Tu00d4I Lu00c0 COFFEE HOUSE\",\"DiaChi\":\" Tru1ee5 su1edf chu00ednh: Tu1ea7ng 6 tou00e0 nhu00e0 Ladeco, 266 u0110u1ed9i Cu1ea5n, phu01b0u1eddng Liu1ec5u Giai, Hu00e0 Nu1ed9i\",\"Sdt\":\"18006750\",\"Gmail\":\"support@sapo.vn\",\"linkfb\":\"face.com\",\"linkGplus\":\"\",\"linktwitter\":\"\"},\"footer2\":{\"TieuDe2\":\"CHu0102M Su00d3C KHu00c1CH Hu00c0NG\",\"item\":{\"tieude\":\"Liu00ean Hu1ec7\",\"link\":\"\"}},\"footer3\":{\"TieuDe2\":\"Liu00ean Hu1ec7 Vu1edbi Chu00fang Tu00f4i\",\"item\":{\"tieude\":\"Liu00ean Hu1ec7\",\"link\":\"\"}},\"copyright\":\"@2020 - Bu1ea3n quyu1ec1n thuu1ed9c vu1ec1 Cafein Team | Cung cu1ea5p bu1edfi Sapo\"}'),
(2, 'GioiThieuTrangWeb', '[{\"MoTa\":\"<p>Ch&oacute;</p>\r\n\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaicoffee`
--

CREATE TABLE `loaicoffee` (
  `idLoai` int(12) NOT NULL,
  `TenLoaiCoffee` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaicoffee`
--

INSERT INTO `loaicoffee` (`idLoai`, `TenLoaiCoffee`) VALUES
(1, 'Đồ Uống'),
(2, 'Cà Phê Cảm Hứng'),
(3, 'Cà Phê Pha Việt'),
(4, 'Cà Phê Thế Giới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Gmail` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MatKhau` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`Gmail`, `MatKhau`, `HoTen`, `SDT`) VALUES
('vanquy33338888@gmail.com', 'f169fcfb7ebb80e1b6920b6c79e3e634', 'Phạm Văn Qúy', '0352343938');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamcoffee`
--

CREATE TABLE `sanphamcoffee` (
  `idCoffee` int(32) NOT NULL,
  `idLoai` int(12) NOT NULL,
  `TenCoffee` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `NoiDungMoTa` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Gia` double NOT NULL,
  `SoLuong` int(32) NOT NULL,
  `ThongTin` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT 'hệ thống đang cập nhật',
  `ThuongHieu` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamcoffee`
--

INSERT INTO `sanphamcoffee` (`idCoffee`, `idLoai`, `TenCoffee`, `NoiDungMoTa`, `HinhAnh`, `Gia`, `SoLuong`, `ThongTin`, `ThuongHieu`) VALUES
(15, 2, 'Cà phê mocha', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; ', '04.jpg', 300000, 15, '', ''),
(16, 2, 'Cà phê The Caipirinha', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; ', '02.jpg', 50000, 20, '', ''),
(17, 3, 'Cà phê mocha', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; ', '08.jpg', 66000, 20, '', ''),
(18, 2, 'Cà Phê Sữa', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; ', '02.jpg', 96000, 15, '', ''),
(19, 4, 'Cà phê Espresso', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; ', '01.jpg', 66000, 3, '', ''),
(20, 2, 'Cà phê The Caipirinha', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; ', '06.jpg', 530000, 122, '', ''),
(21, 1, 'Cà Phê Trứng', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; ', '03.jpg', 300000, 2, '', ''),
(22, 2, 'Cà phê The Caipirinha', 'Cà phê Trứng được chọn lọc kỹ lưỡng từ vùng đất đỏ bazan Buôn Mê Thuột; ', '05.jpg', 300000, 3, '', ''),
(23, 4, 'Cà Phê đen', '', '', 456000, 4, 'hệ thống đang cập nhật', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `iDTinTuc` int(11) NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HinhAnhTinTuc` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayDangTin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `NoiDung` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `TaiKhoan` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MatKhau` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`TaiKhoan`, `MatKhau`) VALUES
('admin', 'quy'),
('admin', 'quy'),
('xaopaibun', 'de5a455a650a3c610ee7db2b3527ecd9'),
('xaopaibun2', 'e10adc3949ba59abbe56e057f20f883e'),
('PhamJin', '6b731a4c6cd7a14e2ac565386e362d81');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `homepagedata`
--
ALTER TABLE `homepagedata`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaicoffee`
--
ALTER TABLE `loaicoffee`
  ADD PRIMARY KEY (`idLoai`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Gmail`);

--
-- Chỉ mục cho bảng `sanphamcoffee`
--
ALTER TABLE `sanphamcoffee`
  ADD PRIMARY KEY (`idCoffee`),
  ADD KEY `idLoai` (`idLoai`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`iDTinTuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `homepagedata`
--
ALTER TABLE `homepagedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaicoffee`
--
ALTER TABLE `loaicoffee`
  MODIFY `idLoai` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanphamcoffee`
--
ALTER TABLE `sanphamcoffee`
  MODIFY `idCoffee` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `iDTinTuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanphamcoffee`
--
ALTER TABLE `sanphamcoffee`
  ADD CONSTRAINT `sanphamcoffee_ibfk_1` FOREIGN KEY (`idLoai`) REFERENCES `loaicoffee` (`idLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
