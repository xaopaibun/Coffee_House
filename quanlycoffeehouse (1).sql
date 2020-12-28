-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2020 lúc 04:33 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

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
-- Cấu trúc bảng cho bảng `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `iDCoffee` int(11) NOT NULL,
  `iDDonDatHang` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdondathang`
--

INSERT INTO `chitietdondathang` (`iDCoffee`, `iDDonDatHang`, `SoLuong`, `DonGia`) VALUES
(29, 1, 6, 24),
(67, 1, 2, 24000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datban`
--

CREATE TABLE `datban` (
  `HoTen` varchar(255) NOT NULL,
  `id_DonDatBan` int(11) NOT NULL,
  `SDT` varchar(255) NOT NULL,
  `Ngay` date NOT NULL,
  `Gio` varchar(255) NOT NULL,
  `TrangThai` varchar(255) DEFAULT 'Đang xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `datban`
--

INSERT INTO `datban` (`HoTen`, `id_DonDatBan`, `SDT`, `Ngay`, `Gio`, `TrangThai`) VALUES
('Nguyễn Hữu Đăng', 5, '0993601731', '2020-12-28', '7:00 PM', 'Đang xử lý'),
('Nguyễn Phương Nam', 6, '0357352974', '2020-12-15', '8:00 PM', 'Đang xử lý'),
('Phạm Văn Qúy', 7, '0352343938', '2020-12-31', '10:00 PM', 'Đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `iDDonDatHang` int(11) NOT NULL,
  `NgayDat` timestamp NULL DEFAULT current_timestamp(),
  `iDNguoiDung` int(11) NOT NULL,
  `idTrangThai` int(11) NOT NULL,
  `TongTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`iDDonDatHang`, `NgayDat`, `iDNguoiDung`, `idTrangThai`, `TongTien`) VALUES
(1, '2020-12-19 15:10:50', 1, 1, 1200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homepagedata`
--

CREATE TABLE `homepagedata` (
  `id` int(11) NOT NULL,
  `TenThuocTinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GiaTriThuocTinh` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `homepagedata`
--

INSERT INTO `homepagedata` (`id`, `TenThuocTinh`, `GiaTriThuocTinh`) VALUES
(1, 'Footer', '{\"mapshop\":\"http://localhost:8080/Ex_PHP/CoffeeHouse/IMG/bg_map.jpg\",\"footer1\":{\"TieuDe1\":\"CHu00daNG Tu00d4I Lu00c0 COFFEE HOUSE\",\"DiaChi\":\" Tru1ee5 su1edf chu00ednh: Tu1ea7ng 6 tou00e0 nhu00e0 Ladeco, 266 u0110u1ed9i Cu1ea5n, phu01b0u1eddng Liu1ec5u Giai, Hu00e0 Nu1ed9i\",\"Sdt\":\"18006750\",\"Gmail\":\"support@sapo.vn\",\"linkfb\":\"face.com\",\"linkGplus\":\"\",\"linktwitter\":\"\"},\"footer2\":{\"TieuDe2\":\"CHu0102M Su00d3C KHu00c1CH Hu00c0NG\",\"item\":{\"tieude\":\"Liu00ean Hu1ec7\",\"link\":\"\"}},\"footer3\":{\"TieuDe2\":\"Liu00ean Hu1ec7 Vu1edbi Chu00fang Tu00f4i\",\"item\":{\"tieude\":\"Liu00ean Hu1ec7\",\"link\":\"\"}},\"copyright\":\"@2020 - Bu1ea3n quyu1ec1n thuu1ed9c vu1ec1 Cafein Team | Cung cu1ea5p bu1edfi Sapo\"}'),
(2, 'GioiThieuTrangWeb', '<p><strong>C&agrave; ph&ecirc; &ndash; thức uống phổ biến thứ hai tr&ecirc;n thế giới sau nước, chức năng ch&iacute;nh của c&agrave; ph&ecirc; kh&ocirc;ng phải l&agrave; giải kh&aacute;t; nhiều người uống n&oacute; với mục đ&iacute;ch tạo cảm gi&aacute;c hưng phấn.</strong></p>\r\n\r\n<p>Theo một nghi&ecirc;n cứu của nh&agrave; ho&aacute; học Hoa Kỳ &ndash; Joe Vinson thuộc Đại học Scranton th&igrave; c&agrave; ph&ecirc; l&agrave; một nguồn quan trọng cung cấp c&aacute;c chất chống &ocirc;xi h&oacute;a cho cơ thể, vai tr&ograve; m&agrave; trước đ&acirc;y người ta chỉ thấy ở hoa quả v&agrave; rau xanh. Những chất n&agrave;y cũng gi&aacute;n tiếp l&agrave;m giảm nguy cơ bị ung thư ở người.</p>\r\n\r\n<p><strong>Lịch sử</strong></p>\r\n\r\n<p><em><strong>C&agrave; ph&ecirc;</strong></em>&nbsp;(gốc từ&nbsp;<em>caf&eacute;</em>&nbsp;trong tiếng Ph&aacute;p) l&agrave; một loại thức uống m&agrave;u đen c&oacute; chứa chất caffein, được sản xuất từ những hạt c&agrave; ph&ecirc; rang l&ecirc;n. C&agrave; ph&ecirc; được sử dụng lần đầu ti&ecirc;n v&agrave;o thế kỉ thứ 9, khi n&oacute; được kh&aacute;m ph&aacute; ra từ v&ugrave;ng cao nguy&ecirc;n Ethiopia. Từ đ&oacute;, n&oacute; lan ra Ai Cập v&agrave; Yemen v&agrave; tới thế kỉ thứ 15 th&igrave; đến Armenia, Ba Tư, Thổ Nhĩ Kỳ v&agrave; ph&iacute;a bắc Ch&acirc;u Phi. Từ thế giới Hồi gi&aacute;o, c&agrave; ph&ecirc; đến &Yacute;, sau đ&oacute; l&agrave; phần c&ograve;n lại của Ch&acirc;u &Acirc;u, Indonesia v&agrave; Hoa Kỳ. Ng&agrave;y nay, c&agrave; ph&ecirc; l&agrave; một trong những thức uống th&ocirc;ng dụng to&agrave;n cầu.</p>\r\n\r\n<p>Đồn điền c&agrave; ph&ecirc; đầu ti&ecirc;n được lập ở Việt Nam l&agrave; do người Ph&aacute;p khởi sự ở gần Kẻ Sở, Bắc Kỳ v&agrave;o năm 1888. Giống c&agrave; ph&ecirc;&nbsp;<em>arabica</em>&nbsp;(tức c&agrave; ph&ecirc; ch&egrave;) được trồng ở ven s&ocirc;ng. Sau việc canh t&aacute;c c&agrave; ph&ecirc; lan xuống v&ugrave;ng Phủ L&yacute;, Ninh B&igrave;nh, Thanh H&oacute;a, Nghệ An, Kon Tum v&agrave; Di Linh.</p>\r\n\r\n<p><strong>Ph&acirc;n Loại</strong><br />\r\nBa d&ograve;ng c&acirc;y c&agrave; ph&ecirc; ch&iacute;nh l&agrave;:</p>\r\n\r\n<ul>\r\n	<li><em>Arabica</em>&nbsp;&ndash; c&agrave; ph&ecirc; ch&egrave;</li>\r\n	<li><em>Canephora</em>&nbsp;(Robusta) &ndash; c&agrave; ph&ecirc; vối</li>\r\n	<li><em>Excelsa</em>&nbsp;(Liberia) &ndash; c&agrave; ph&ecirc; m&iacute;t</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://lh3.googleusercontent.com/-hB3sSWUufyY/VtOg4tnRcOI/AAAAAAAAA08/OAqywK0940A/s800-Ic42/caphe-voi.jpg\" /></p>\r\n\r\n<p>Chất lượng hay đẳng cấp của c&agrave; ph&ecirc; kh&aacute;c nhau t&ugrave;y theo từng loại c&acirc;y, từng loại hạt v&agrave; nơi trồng kh&aacute;c nhau. C&agrave; ph&ecirc; Robusta được đ&aacute;nh gi&aacute; thấp hơn so với c&agrave; ph&ecirc; Arabica do c&oacute; chất lượng thấp hơn v&agrave; gi&aacute; cả theo đ&oacute; cũng rẻ hơn. Loại c&agrave; ph&ecirc; đắt nhất v&agrave; hiếm nhất thế giới t&ecirc;n l&agrave; C&agrave; ph&ecirc; Kopi Luwak (hay &ldquo;c&agrave; ph&ecirc; chồn&rdquo;) của Việt Nam v&agrave; Indonesia. Đ&acirc;y kh&ocirc;ng phải l&agrave; một giống c&agrave; ph&ecirc; m&agrave; một c&aacute;ch chế biến c&agrave; ph&ecirc; bằng c&aacute;ch d&ugrave;ng bộ ti&ecirc;u h&oacute;a của lo&agrave;i cầy.</p>\r\n\r\n<p>C&agrave; ph&ecirc; chia ra nhiều loại t&ugrave;y theo c&aacute;ch rang. Rang c&agrave; ph&ecirc; l&agrave; để cho bớt độ ẩm trong hạt, dầu thơm tỏa ra. Trong kỹ nghệ, c&agrave; ph&ecirc; được rang với số lượng lớn d&ugrave;ng nhiệt độ cao trong một thời gian nhanh (khoảng 204 đến 260 &deg;C trong v&ograve;ng 5 ph&uacute;t) rồi l&agrave;m nguội bằng quạt hơi hay rảy nước cho khỏi ch&aacute;y kh&eacute;t.</p>\r\n\r\n<p>Người ta c&oacute; thể rang c&agrave; ph&ecirc; sơ s&agrave;i v&agrave; được gọi dưới c&aacute;i t&ecirc;n Cinnamon roast (thời gian khoảng 7 ph&uacute;t), rang vừa (medium roast) c&ograve;n gọi l&agrave; full city hay brown (thời gian từ 9 đến 11 ph&uacute;t) hay rang kỹ (full roast) tức l&agrave; rang kiểu Ph&aacute;p thời gian từ 12 đến 13 ph&uacute;t. Những c&aacute;ch rang kỹ nhất đến ch&aacute;y x&eacute;m khiến cho hạt c&agrave; ph&ecirc; b&oacute;ng nhẫy l&agrave; kiểu rang của người &Yacute; (espresso) th&igrave; phải từ 14 ph&uacute;t trở l&ecirc;n cho đến khi bắt đầu ch&aacute;y th&agrave;nh than.</p>\r\n\r\n<p>C&agrave; ph&ecirc; cũng ph&acirc;n biệt theo c&aacute;ch xay, xay mịn hay to hạt t&ugrave;y theo c&aacute;ch pha. Trong khoảng một trăm năm trở lại đ&acirc;y, người ta đ&atilde; chế biến ra loại c&agrave; ph&ecirc; bột, chỉ cần bỏ v&agrave;o nước s&ocirc;i l&agrave; uống được. C&agrave; ph&ecirc; bột được điều chế theo hai c&aacute;ch: l&agrave;m kh&ocirc; bằng c&aacute;ch đ&ocirc;ng lạnh (freeze drying) hay l&agrave;m kh&ocirc; bằng c&aacute;ch phun (spray drying). Cả hai đều phải được lọc trước để r&uacute;t hết tinh chất rồi phun ra th&agrave;nh những hạt li ti để l&agrave;m kh&ocirc;. &nbsp;Tuy nhi&ecirc;n những người kh&oacute; t&iacute;nh vẫn cho rằng c&agrave; ph&ecirc; bột kh&ocirc;ng thể n&agrave;o bằng c&agrave; ph&ecirc; pha được.</p>\r\n\r\n<p><strong>Ảnh hưởng của c&agrave; ph&ecirc;</strong><br />\r\n<img alt=\"\" src=\"https://lh3.googleusercontent.com/-4LR7tVvkl3w/VtOg5eaFwhI/AAAAAAAAA1A/iY9Euoxg0xY/s800-Ic42/anh%252520huong.jpg\" /></p>\r\n\r\n<p><em><strong>T&aacute;c dụng an thần</strong>.</em>&nbsp;Người ta đ&atilde; chứng minh được rằng, nếu đi ngủ trong v&ograve;ng 15 ph&uacute;t sau khi uống c&agrave; ph&ecirc; th&igrave; giấc ngủ sẽ s&acirc;u hơn, bởi m&aacute;u trong n&atilde;o được lưu th&ocirc;ng tốt hơn. Nhưng nếu tiếp tục chần chừ th&igrave; t&aacute;c dụng n&agrave;y sẽ mất dần đi, v&agrave; sau đ&oacute; th&igrave; caffein bắt đầu ph&aacute;t huy hiệu quả, ch&uacute;ng ta sẽ kh&ocirc;ng ngủ được nữa.</p>\r\n\r\n<p><em><strong>K&iacute;ch th&iacute;ch sự tập trung v&agrave; hưng phấn.</strong></em>&nbsp;N&ecirc;n uống c&agrave; ph&ecirc; nhiều lần trong ng&agrave;y, mỗi lần một ngụm nhỏ, thay v&igrave; uống một cốc thật to v&agrave;o buổi s&aacute;ng. C&aacute;ch n&agrave;y đặc biệt th&iacute;ch hợp với những người phải l&agrave;m việc v&agrave;o ban đ&ecirc;m, họ sẽ cảm thấy dễ thức khuya hơn cũng như giữ được sự tập trung cao hơn.</p>\r\n\r\n<p><em><strong>Chống &ocirc;xi h&oacute;a.</strong>&nbsp;</em>Trung t&acirc;m ung thư quốc gia Nhật Bản ở Tokyo đ&atilde; thực hiện một th&iacute; nghiệm k&eacute;o d&agrave;i 10 năm tr&ecirc;n 100.000 người uống c&agrave; ph&ecirc; v&agrave; ph&aacute;t hiện ra trong số họ chỉ c&oacute; 214 người mắc phải chứng ung thư thận. Trong khi đ&oacute; ở những người kh&ocirc;ng uống c&agrave; ph&ecirc;, tỉ lệ n&agrave;y l&agrave; 547/100.000, nghĩa l&agrave; cao hơn hai lần. Từ đ&oacute; họ r&uacute;t ra kết luận rằng c&aacute;c chất chống &ocirc;xi ho&aacute; trong c&agrave; ph&ecirc; c&oacute; khả năng bảo vệ c&aacute;c tế b&agrave;o thận khỏi bị ăn m&ograve;n. Th&iacute; nghiệm so s&aacute;nh cũng chỉ ra rằng tr&agrave; xanh kh&ocirc;ng c&oacute; t&aacute;c dụng bảo vệ tr&ecirc;n giống như của c&agrave; ph&ecirc;.</p>\r\n\r\n<p>Tuy nhi&ecirc;n để ph&aacute;t huy ảnh hưởng t&iacute;ch cực của&nbsp;loại đồ uống thơm ngon n&agrave;y ch&uacute;ng ta kh&ocirc;ng n&ecirc;n lạm dụng v&agrave;&nbsp;chỉ n&ecirc;n&nbsp;sử dụng ở liều lượng th&iacute;ch hợp để c&oacute; t&aacute;c dụng tốt đối với sức khỏe.</p>\r\n\r\n<p><strong>C&agrave; ph&ecirc; v&agrave; Vĩ nh&acirc;n</strong></p>\r\n\r\n<p>Thuộc t&iacute;nh của c&agrave; ph&ecirc; l&agrave; s&aacute;ng tạo. Ch&uacute;ng ta h&atilde;y xem c&aacute;c bậc vĩ nh&acirc;n n&oacute;i g&igrave; về c&agrave; ph&ecirc;!</p>\r\n\r\n<p><em>&ldquo;Kh&ocirc;ng c&oacute; c&agrave; ph&ecirc; ch&iacute;nh trị chỉ c&ograve;n một nữa&rdquo;</em>&nbsp;&ndash; Napoleon Bonaparte.</p>\r\n\r\n<p><em>&ldquo;Nếu kh&ocirc;ng c&oacute; c&agrave; ph&ecirc; th&igrave; kh&ocirc;ng c&oacute; định luật n&agrave;o tồn tại&rdquo;</em>&nbsp;&ndash; Albert Einstein.</p>\r\n\r\n<p><em>&ldquo;Kh&ocirc;ng c&oacute; c&agrave; ph&ecirc; buổi s&aacute;ng, cuộc đời t&ocirc;i kh&ocirc; khan v&agrave; v&ocirc; vị!&rdquo;</em>&nbsp;&ndash; Joham Sebastian Bach.</p>\r\n\r\n<p><img alt=\"\" src=\"https://lh3.googleusercontent.com/-l0QKGxlN1NU/VlKMUcl1iQI/AAAAAAAAAY8/avlqcsv_PN8/s640-Ic42/Untitled-5.jpg\" /></p>\r\n\r\n<p>C&acirc;u chuyện về c&agrave; ph&ecirc; sẽ c&ograve;n được viết tiếp như nguồn cảm hứng tu&ocirc;ng chảy m&agrave; n&oacute; mang lại cho nh&acirc;n loại mỗi ng&agrave;y.</p>\r\n\r\n<p><em>Tham khảo: Wikipedia</em></p>\r\n'),
(3, 'ThongTinCuaHang', ''),
(4, 'Header', '[{\"loichao\":\"Chu00e0o mu1eebng bu1ea1n u0111u1ebfn vu1edbi Coffee House !\",\"menu\":{\"item1\":{\"tieude\":\"Trang Chu1ee7\",\"link\":\"index.php\"},\"item2\":{\"tieude\":\"Gioi Thiu1ec7u\",\"link\":\"GioiThieu.php\"},\"item3\":{\"tieude\":\"Su1ea3n Phu1ea9m\",\"link\":\"TatCaSanPham.php\"},\"item4\":{\"tieude\":\"Du1ecbch Vu1ee5\",\"link\":\"DichVu.php\"},\"item5\":{\"tieude\":\"Tin Tu1ee9c\",\"link\":\"TinTuc.php\"},\"item6\":{\"tieude\":\"Liu00ean Hu1ec7e\",\"link\":\"LienHe.php\"}},\"backgroudimage\":\"\",\"Logo\":\"\"}]'),
(5, 'Content', '[{\"HinhAnh\":{\"HinhAnh1\":\"http://localhost/CoffeeHouse/IMG/gallery_big.jpg\",\"HinhAnh2\":\"http://localhost/CoffeeHouse/IMG/gallery_1.jpg\",\"HinhAnh3\":\"http://localhost/CoffeeHouse/IMG/gallery_2.jpg\",\"HinhAnh4\":\"http://localhost/CoffeeHouse/IMG/gallery_3.jpg\",\"HinhAnh5\":\"http://localhost/CoffeeHouse/IMG/gallery_4.jpg\"},\"ModunChungToiLa\":{\"TieuDe\":\"Chu00fang Tu00f4i Lu00e0\",\"TenCuaHang\":\"Coffee House\",\"NgayMoCua\":\"Thu1ee9 hai u0111u1ebfn Thu1ee9 bu1ea3y\",\"GioMoCua\":\"8:30am - 11:00pm\",\"Hotline\":\"18006750\",\"NoiDung\":\"Chu00fang tu00f4i u0111i khu1eafp thu1ebf giu1edbi u0111u1ec3 tu00ecm kiu1ebfm cu00e0 phu00ea tuyu1ec7t vu1eddi. Trong quu00e1 tru00ecnh u0111u00f3, chu00fang tu00f4i phu00e1t hiu1ec7n ra nhu1eefng hu1ea1t u0111u1eadu u0111u1eb7c biu1ec7t vu00e0 hiu1ebfm u0111u1ebfn nu1ed7i chu00fang tu00f4i cu00f3 thu1ec3 chu1edd u0111u1ee3i u0111u1ec3 mang chu00fang vu1ec1\",\"HinhAnh\":\"http://localhost/CoffeeHouse/IMG/bg_about.png\"}}]');

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
(1, 'Đồ Uống Nhẹ'),
(2, 'Cà Phê Cảm Hứng'),
(3, 'Cà Phê Pha Việt'),
(4, 'Cà Phê Thế Giới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `iDNguoiDung` int(11) NOT NULL,
  `Gmail` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MatKhau` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`iDNguoiDung`, `Gmail`, `MatKhau`, `HoTen`, `SDT`, `DiaChi`) VALUES
(1, 'vanquy33338888@gmail.com', 'f169fcfb7ebb80e1b6920b6c79e3e634', 'Phạm Văn Qúy', '0352343938', NULL),
(2, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Jin', '0352343938', NULL);

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
  `ThongTin` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT 'Hệ thống đang cập nhật',
  `ThuongHieu` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayGioNhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamcoffee`
--

INSERT INTO `sanphamcoffee` (`idCoffee`, `idLoai`, `TenCoffee`, `NoiDungMoTa`, `HinhAnh`, `Gia`, `SoLuong`, `ThongTin`, `ThuongHieu`, `NgayGioNhap`) VALUES
(26, 4, 'Cà phê Cappuccino', '<p>C&agrave; ph&ecirc; Cappuccino được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '006.jpg', 70000, 24, '', 'Phạm Jin', '2020-12-17 10:34:12'),
(27, 2, 'Cà phê mocha', '<p>C&agrave; ph&ecirc; mocha được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '007.jpg', 30000, 24, '', 'Nguyễn Đăng', '2020-12-17 10:34:12'),
(28, 2, 'Cà Phê Sữa', '<p>C&agrave; ph&ecirc; sữa được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '008.jpg', 100000, 9, '', 'Phạm Qúy', '2020-12-17 10:34:12'),
(29, 4, 'Bạc Sỉu', '<p>Bạc sỉu được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '0010.jpg', 123000, 21, 'Thành phần: 100% cafe hạt thượng hạng  Nguồn gốc: Buôn Ma Thuột - Đắk Lắk  Phương pháp rang: Rang đậm  Kích thước: sàn 18  Đặc tính: đắng gắt và đậm, hương thơm nồng, nước màu nâu sánh  Hàm lượng Cafein: 4%', 'Phạm Jin', '2020-12-27 17:46:41'),
(67, 2, 'Cà Phê Đen Đá', '<p>C&agrave; ph&ecirc; The Metro được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '003.jpg', 283000, 20, 'Thông Tin đang được cập nhật', 'Phạm Qúy', '2020-12-27 17:43:03'),
(72, 1, 'Cà Phê Đen Nóng', '<p>C&agrave; ph&ecirc; The Metro được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '002.jpg', 826000, 230, 'Đang dc cập nhật', 'Phạm Jin', '2020-12-27 17:42:46'),
(73, 2, 'Cà Phê Hảo Hạng', '<p>C&agrave; ph&ecirc; The Metro được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '001.jpg', 98000, 28, 'Đang dc cập nhật', 'Phạm Jin', '2020-12-27 17:47:07'),
(74, 3, 'Cà Phê Hảo Hạng', '<p>C&agrave; ph&ecirc; The Metro được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '008.jpg', 149000, 30, 'Đang dc cập nhật', 'Phạm Jin', '2020-12-27 17:41:54'),
(75, 2, 'Cà Phê Hảo Hạng', '<p>C&agrave; ph&ecirc; The Metro được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '006.jpg', 125000, 32, 'Đang dc cập nhật', 'Phạm Jin', '2020-12-27 17:26:26'),
(76, 2, 'Cà Phê Trai Tim  4.0', '<p>C&agrave; ph&ecirc; Trứng được chọn lọc kỹ lưỡng từ v&ugrave;ng đất đỏ bazan Bu&ocirc;n M&ecirc; Thuột; sau đ&oacute; trải qua qu&aacute; tr&igrave;nh s&agrave;ng lọc, rang xay dưới sự kiểm so&aacute;t nghi&ecirc;m ngặt về nhiệt độ v&agrave; thời gian để đạt đến đỉnh cao của m&ugrave;i thơm, độ nở v&agrave; hương vị ri&ecirc;ng biệt. Sự h&agrave;i h&ograve;a trong tỷ lệ pha trộn giữa hạt c&agrave; ph&ecirc; Robusta v&agrave; Arabica mang đến cho kh&aacute;ch h&agrave;ng những ly c&agrave; ph&ecirc; pha m&aacute;y &ndash; kiểu &Yacute; nhưng vẫn đậm đ&agrave; bản sắc v&agrave; đặc trưng của văn h&oacute;a nước Việt Nam.</p>\r\n', '0010.jpg', 125000, 32, 'Đang dc cập nhật', 'Phạm Jin', '2020-12-27 17:40:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `idTrangThai` int(11) NOT NULL,
  `TenTrangThai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`idTrangThai`, `TenTrangThai`) VALUES
(5, 'Đang chờ xử lý'),
(6, 'Đang giao'),
(7, 'Đã Hủy'),
(8, 'Đã hòan tất');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `iDTinTuc` int(11) NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HinhAnhTinTuc` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgayDangTin` timestamp NULL DEFAULT current_timestamp(),
  `NoiDung` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`iDTinTuc`, `TieuDe`, `HinhAnhTinTuc`, `NgayDangTin`, `NoiDung`) VALUES
(4, '89% người trưởng thành ở Mỹ tiêu thụ cà phê đặc sản', 'skw6442-skw6447.jpg', '2020-12-26 15:34:10', '<p>59% người trưởng th&agrave;nh ở Mỹ ti&ecirc;u thụ c&agrave; ph&ecirc; đặc sản</p>\r\n\r\n<p>Theo Hiệp hội C&agrave; ph&ecirc; quốc gia Mỹ (NCA), c&oacute; tới 63% người trưởng th&agrave;nh ti&ecirc;u thụ c&agrave; ph&ecirc; h&agrave;ng ng&agrave;y, trong đ&oacute; 59% l&agrave; c&agrave; ph&ecirc; đặc sản, tăng trưởng mạnh mẽ từ mức 9% v&agrave;o năm 1999, v&agrave; dự kiến sẽ l&ecirc;n tới 61% v&agrave;o năm 2019, với đối tượng kh&aacute;ch h&agrave;ng th&uacute;c đẩy sự gia tăng n&agrave;y l&agrave; giới trẻ.<br />\r\nL&agrave;n s&oacute;ng c&agrave; ph&ecirc; thứ ba c&oacute; từ đ&acirc;u?<br />\r\nTheo Chi nh&aacute;nh Thương vụ Việt Nam tại San Francisco, thị trường c&agrave; ph&ecirc; đ&atilde; trải qua nhiều l&agrave;n s&oacute;ng. L&agrave;n s&oacute;ng thứ nhất v&agrave;o những năm 1960 được đ&aacute;nh dấu bằng việc phổ th&ocirc;ng h&oacute;a việc ti&ecirc;u thụ c&agrave; ph&ecirc;, l&agrave;n s&oacute;ng thứ hai diễn ra v&agrave;o những năm 1980 v&agrave; 1990 với việc dịch chuyển sang ti&ecirc;u thụ c&aacute;c loại c&agrave; ph&ecirc; c&oacute; chất lượng cao hơn, v&agrave; thị trường giờ đ&acirc;y đang trải qua l&agrave;n s&oacute;ng thứ ba với việc chuyển sang c&aacute;c loại c&agrave; ph&ecirc; đặc sản v&agrave; bền vững.</p>\r\n\r\n<p>Thuật ngữ c&agrave; ph&ecirc; đặc sản(&quot;specialty coffee&quot;) c&oacute; nguồn gốc từ Mỹ. Ban đầu thuật ngữ n&agrave;y được sử dụng để m&ocirc; tả c&aacute;c loại c&agrave; ph&ecirc; được b&aacute;n trong c&aacute;c cửa h&agrave;ng chuy&ecirc;n kinh doanh c&agrave; ph&ecirc;, kh&ocirc;ng phải l&agrave; c&aacute;c loại c&agrave; ph&ecirc; được b&aacute;n tại c&aacute;c si&ecirc;u thị v&agrave; cửa h&agrave;ng b&aacute;n lẻ kh&aacute;c.&nbsp;</p>\r\n\r\n<p>C&agrave; ph&ecirc; đặc sản thường l&agrave; c&aacute;c loại c&agrave; ph&ecirc; chất lượng cao hơn, c&oacute; nguồn gốc duy nhất (single origin) hoặc pha trộn, những loại c&agrave; ph&ecirc; độc đ&aacute;o như c&agrave; ph&ecirc; tẩm hương vị, c&agrave; ph&ecirc; c&oacute; nguồn gốc đặc biệt hoặc được li&ecirc;n kết đến một c&acirc;u chuyện hấp dẫn.&nbsp;</p>\r\n\r\n<p>Tuy nhi&ecirc;n, với sự tăng trưởng nhanh ch&oacute;ng c&aacute;c cửa h&agrave;ng b&aacute;n c&agrave; ph&ecirc; đặc sản cũng như việc tăng cường sự hiện diện tại c&aacute;c si&ecirc;u thị, thuật ngữ &quot;c&agrave; ph&ecirc; đặc sản&quot; giờ đ&acirc;y được coi l&agrave; để chỉ những loại c&agrave; ph&ecirc; c&oacute; gi&aacute; cao, hoặc được người ti&ecirc;u d&ugrave;ng cho l&agrave; kh&aacute;c với c&aacute;c loại c&agrave; ph&ecirc; đại tr&agrave; c&oacute; tr&ecirc;n thị trường.&nbsp;</p>\r\n\r\n<p>C&agrave; ph&ecirc; đặc sản l&agrave; loại c&agrave; ph&ecirc; được canh t&aacute;c trong những điều kiện l&yacute; tưởng về độ cao, chất đất, kh&iacute; hậu,&hellip; Mỗi giai đoạn từ kh&acirc;u giống, canh t&aacute;c, thu hoạch, chế biến, bảo quản, đ&oacute;ng g&oacute;i, lưu th&ocirc;ng, pha chế,&hellip; đều cần được đảm bảo để c&oacute; được chất lượng c&agrave; ph&ecirc; tốt nhất.&nbsp;</p>\r\n\r\n<p>Theo Hiệp hội c&agrave; ph&ecirc; đặc sản Mỹ, trong thang điểm từ 1 - 100, c&agrave; ph&ecirc; cần phải đạt tối thiểu 80 điểm mới được coi l&agrave; c&agrave; ph&ecirc; đặc sản. Qu&aacute; tr&igrave;nh đ&aacute;nh gi&aacute; n&agrave;y gồm nhiều bước, từ h&igrave;nh ảnh trực quan đến c&aacute;c th&iacute; nghiệm về m&ugrave;i vị.</p>\r\n\r\n<p>Theo Hiệp hội c&agrave; ph&ecirc; đặc sản Ch&acirc;u &Acirc;u (SCAE), c&agrave; ph&ecirc; đặc sản l&agrave; một sản phẩm đồ uống thủ c&ocirc;ng c&oacute; chất lượng độc đ&aacute;o, một hương vị ri&ecirc;ng biệt, c&aacute; t&iacute;nh kh&aacute;c biệt, v&agrave; vượt trội so với c&agrave; ph&ecirc; th&ocirc;ng thường.<br />\r\nC&agrave; ph&ecirc; đ&oacute; được pha chế từ c&aacute;c hạt c&agrave; ph&ecirc; được trồng trong một khu vực được x&aacute;c định, đ&aacute;p ứng c&aacute;c ti&ecirc;u chuẩn cao nhất cho c&agrave; ph&ecirc; d&ugrave;ng để rang, bảo quản v&agrave; pha chế. M&ocirc; tả n&agrave;y chỉ ra rằng, c&agrave; ph&ecirc; đặc sản kh&ocirc;ng chỉ kh&aacute;c biệt, m&agrave; c&ograve;n l&agrave; một sản phẩm sang trọng v&agrave; cao cấp hơn với c&aacute;c yếu tố độc đ&aacute;o nhất định.&nbsp;</p>\r\n\r\n<p>N&oacute; cũng h&agrave;m &yacute; rằng c&agrave; ph&ecirc; đặc sản l&agrave; một thuật ngữ chỉ nhiều loại c&agrave; ph&ecirc; kh&aacute;c nhau được định gi&aacute; cao hơn c&aacute;c loại c&agrave; ph&ecirc; kh&aacute;c, hoặc được người ti&ecirc;u d&ugrave;ng cảm nhận l&agrave; kh&aacute;c biệt.</p>\r\n\r\n<p>Xu hướng ti&ecirc;u thụ c&agrave; ph&ecirc; đặc sản ng&agrave;y một tăng<br />\r\nTheo Hiệp hội C&agrave; ph&ecirc; quốc gia Mỹ (NCA), c&oacute; tới 63% người trưởng th&agrave;nh ti&ecirc;u thụ c&agrave; ph&ecirc; h&agrave;ng ng&agrave;y, trong đ&oacute; 59% l&agrave; c&agrave; ph&ecirc; đặc sản, tăng trưởng mạnh mẽ từ mức 9% v&agrave;o năm 1999, v&agrave; dự kiến sẽ tăng l&ecirc;n mức 61% v&agrave;o năm 2019, đối tượng kh&aacute;ch h&agrave;ng th&uacute;c đẩy sự gia tăng n&agrave;y l&agrave; giới trẻ.</p>\r\n\r\n<p>Theo Hiệp hội c&agrave; ph&ecirc; đặc sản Mỹ (SCAA), số lượng c&aacute;c nh&agrave; b&aacute;n lẻ c&agrave; ph&ecirc; đặc sản đ&atilde; tăng 10 lần trong 20 năm trong giai đoạn 1993 - 2013, từ 2.850 l&ecirc;n 29.200 trong đ&oacute; 45% l&agrave; c&aacute;c chuỗi b&aacute;n lẻ v&agrave; 55% l&agrave; c&aacute;c cửa h&agrave;ng độc lập (kinh doanh tại &iacute;t hơn 3 địa điểm). Sự ph&aacute;t triển của c&aacute;c cửa h&agrave;ng c&agrave; ph&ecirc; nhỏ đ&atilde; c&oacute; ảnh hưởng mạnh mẽ trong việc th&uacute;c đẩy nhu cầu về c&agrave; ph&ecirc; đặc sản.&nbsp;</p>\r\n'),
(5, 'Cà phê đang đứng trước nguy cơ bi tuyệt chủng?', 'peruvian-coffee-3.jpg', '2020-12-27 17:49:37', '<p>Người ti&ecirc;u d&ugrave;ng sẽ phải đối mặt với t&igrave;nh trạng thiếu c&agrave; ph&ecirc;, c&ograve;n những người n&ocirc;ng d&acirc;n trồng c&agrave; ph&ecirc; c&oacute; nguy cơ mất sinh kế...<br />\r\nBa trong năm loại c&agrave; ph&ecirc; hoang dại c&oacute; nguy cơ tuyệt chủng dưới t&aacute;c động c&aacute;c yếu tố biến đổi kh&iacute; hậu, bệnh v&agrave; t&agrave;n ph&aacute; rừng khiến loại đồ uống đầy ưa th&iacute;ch n&agrave;y trong tương lai l&acirc;m nguy.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; kết quả nghi&ecirc;n cứu của c&aacute;c nh&agrave; khoa học thuộc Viện nghi&ecirc;n cứu Kew (Anh). Bằng c&aacute;ch sử dụng kỹ thuật m&aacute;y t&iacute;nh để m&ocirc; h&igrave;nh h&oacute;a v&agrave; nghi&ecirc;n cứu thực địa, c&aacute;c nh&agrave; khoa học Anh đ&atilde; xem x&eacute;t v&agrave; dự đo&aacute;n 124 giống c&agrave; ph&ecirc; c&oacute; nguy cơ ra sao khi h&agrave;nh tinh đang trở n&ecirc;n ấm l&ecirc;n v&agrave; hệ sinh th&aacute;i bị suy giảm.</p>\r\n\r\n<p>Hơn 2 tỉ t&aacute;ch c&agrave; ph&ecirc; được ti&ecirc;u thụ mỗi ng&agrave;y, nhưng ng&agrave;nh c&ocirc;ng nghiệp c&agrave; ph&ecirc; c&oacute; gi&aacute; trị h&agrave;ng tỉ USD lại phụ thuộc v&agrave;o v&agrave;i giống c&agrave; ph&ecirc; hoang d&atilde; chỉ được trồng thương mại tại một số v&ugrave;ng tr&ecirc;n thế giới.</p>\r\n\r\n<p>Theo nh&oacute;m nghi&ecirc;n cứu, c&oacute; khoảng 75 lo&agrave;i c&agrave; ph&ecirc; được đ&aacute;nh gi&aacute; bị đe dọa tuyệt chủng, trong đ&oacute;, 13 lo&agrave;i bị đe dọa nghi&ecirc;m trọng, 40 lo&agrave;i nguy cơ tuyệt chủng kể cả loại c&agrave; ph&ecirc; Arabica v&agrave; c&oacute; 22 lo&agrave;i dễ bị tổn thương.</p>\r\n\r\n<p>&ldquo;Nh&igrave;n chung, nguy cơ tuyệt chủng của hầu hết loại c&agrave; ph&ecirc; đều rất cao, gần 60%, một con số vượt qua mức rủi ro trung b&igrave;nh của c&aacute;c lo&agrave;i thực vật&rdquo;, &ocirc;ng Aaron Davis, người đứng đầu nh&oacute;m nghi&ecirc;n cứu n&oacute;i.</p>\r\n\r\n<p>Ng&agrave;nh c&ocirc;ng nghiệp c&agrave; ph&ecirc; to&agrave;n cầu dựa v&agrave;o 2 loại l&agrave; arabica v&agrave; robusta. Arabica được đ&aacute;nh gi&aacute; cao hơn về m&ugrave;i vị v&agrave; độ axit, v&agrave; chiếm 60% tổng sản lượng c&agrave; ph&ecirc; được b&aacute;n tr&ecirc;n to&agrave;n cầu. Loại c&agrave; ph&ecirc; n&agrave;y c&ograve;n giữ nguy&ecirc;n đặc t&iacute;nh hoang d&atilde; chỉ c&ograve;n ở 2 nước l&agrave; Ethiopia v&agrave; Nam Sundan.</p>\r\n\r\n<p>Nh&oacute;m nghi&ecirc;n cứu đ&atilde; tiếp cận nguồn dữ liệu kh&iacute; hậu được ghi nhận hơn 40 năm qua tại Ethiopia v&agrave; thấy rằng m&ocirc;i trường sống tự nhi&ecirc;n của c&acirc;y c&agrave; ph&ecirc; đang bị t&aacute;c động ti&ecirc;u cực nhanh như thế n&agrave;o bởi nạn ph&aacute; rừng v&agrave; sự gia tăng nhiệt độ. Điều n&agrave;y cho thấy ch&uacute;ng kh&ocirc;ng c&ograve;n sự an to&agrave;n d&ugrave; nhiều khu vực đ&atilde; được khoanh th&agrave;nh khu bảo tồn.</p>\r\n\r\n<p>Hệ quả tất yếu, nh&oacute;m nghi&ecirc;n cứu nhấn mạnh, người ti&ecirc;u d&ugrave;ng sẽ phải đối mặt với t&igrave;nh trạng thiếu c&agrave; ph&ecirc;, c&ograve;n những người n&ocirc;ng d&acirc;n trồng c&agrave; ph&ecirc; c&oacute; nguy cơ mất sinh kế, v&agrave; phải di cư do biến đổi kh&iacute; hậu t&agrave;n ph&aacute; m&ugrave;a m&agrave;ng.</p>\r\n\r\n<p>&Ocirc;ng Tadesse Woldermariam Gole, một chuy&ecirc;n gia nghi&ecirc;n cứu về m&ocirc;i trường, biến đổi kh&iacute; hậu v&agrave; c&agrave; ph&ecirc;, nh&igrave;n nhận, Ethiopia l&agrave; qu&ecirc; hương của loại c&agrave; ph&ecirc; Arabica, dựa tr&ecirc;n tầm quan trọng n&agrave;y, ch&uacute;ng ta cần phải nỗ lực hết sức để hiểu c&aacute;c rủi ro t&aacute;c động đến sự tồn tại của giống lo&agrave;i n&agrave;y.</p>\r\n\r\n<p>&ldquo;C&aacute;c nh&agrave; bu&ocirc;n cần phải trả một mức gi&aacute; hợp l&yacute; cho những người sản xuất c&agrave; ph&ecirc; để họ c&oacute; thể đầu tư v&agrave; bảo tồn tốt hơn loại c&agrave; ph&ecirc; Arabica. Ngo&agrave;i ra, ch&iacute;nh phủ cũng phải tham gia trong c&ocirc;ng cuộc n&agrave;y nhằm gi&uacute;p c&agrave; ph&ecirc; sinh sống hoang d&atilde; v&agrave; c&aacute;c đồn điền c&agrave; ph&ecirc; ph&aacute;t triển một c&aacute;ch tốt nhất&rdquo;, &ocirc;ng Tadesse Woldermariam Gole gợi &yacute;.</p>\r\n\r\n<p>&Ocirc;ng Aaron Davis đ&aacute;nh gi&aacute; hiện tại chưa c&oacute; diễn ra sự thiếu hụt c&agrave; ph&ecirc;, một trong những mặt h&agrave;ng c&oacute; gi&aacute; trị tr&ecirc;n thế giới. &ldquo;Nếu l&agrave; một người th&iacute;ch uống c&agrave; ph&ecirc;, bạn kh&ocirc;ng cần phải lo lắng về điều đ&oacute;. Điều ch&uacute;ng t&ocirc;i muốn n&oacute;i ch&iacute;nh l&agrave; tầm nh&igrave;n d&agrave;i hạn, nếu kh&ocirc;ng c&oacute; c&aacute;c h&agrave;nh động bảo vệ c&aacute;c nguồn lực t&agrave;i nguy&ecirc;n qu&yacute; gi&aacute; n&agrave;y. Ch&uacute;ng ta sẽ kh&ocirc;ng bao giờ thấy được tương lai s&aacute;ng lạn cho ng&agrave;nh c&ocirc;ng nghiệp c&agrave; ph&ecirc; nữa&rdquo;, &ocirc;ng Davis đ&aacute;nh gi&aacute;.</p>\r\n'),
(6, 'Giá cà phê thế giới đảo chiều trong tháng 2', 'coffeecolectiveespresso.jpg', '2020-12-27 17:51:58', '<h2>Theo Tổ chức C&agrave; ph&ecirc; Thế giới (ICO), gi&aacute; c&agrave; ph&ecirc; thế giới giảm 0,95 trong th&aacute;ng 2 xuống 100,67 US cent/pound, tương đương mức trong th&aacute;ng 12/2018.</h2>\r\n\r\n<p><a href=\"https://vietnambiz.mediacdn.vn/2019/3/18/2-15529040490531826308333.png\" title=\"\"><img alt=\"Giá cà phê thế giới đảo chiều trong tháng 2 - Ảnh 1.\" id=\"img_92af88e0-4966-11e9-92a2-8d0f4958e9e2\" src=\"https://vietnambiz.mediacdn.vn/thumb_w/640/2019/3/18/2-15529040490531826308333.png\" title=\"Giá cà phê thế giới đảo chiều trong tháng 2 - Ảnh 1.\" /></a></p>\r\n\r\n<p>Cụ thể, chỉ số gi&aacute; tổng hợp ICO trung b&igrave;nh h&agrave;ng th&aacute;ng đ&atilde; giảm 0,9% xuống 100,67 US cent/pound trong th&aacute;ng 2, tăng nhẹ so với mức trung b&igrave;nh h&agrave;ng th&aacute;ng thấp nhất năm c&agrave; ph&ecirc; 2018 - 2019 hồi th&aacute;ng 12/2018 l&agrave; 100,61 US cent/pound.&nbsp;</p>\r\n\r\n<p>Tuy nhi&ecirc;n, chỉ số n&agrave;y vẫn thấp hơn 27,5% so với mức trung b&igrave;nh 10 năm l&agrave; 138,84 US cent/pound.&nbsp;</p>\r\n\r\n<p>Nối tiếp đ&agrave; tăng của th&aacute;ng 1, chỉ số gi&aacute; tổng hợp h&agrave;ng ng&agrave;y khởi đầu tr&ecirc;n ngưỡng 100 US cent/pound, trung b&igrave;nh đạt 103,32 US cent/pound trong tuần đầu ti&ecirc;n. Mặc d&ugrave; vậy, gi&aacute; c&agrave; ph&ecirc; đ&atilde; giảm trong thời gian c&ograve;n lại của năm, chạm mức đ&aacute;y ghi nhận trong ng&agrave;y 26/2 ở 97,44 US cent/pound.</p>\r\n\r\n<p>Tăng trưởng xuất khẩu bền vững trong 4 th&aacute;ng đầu năm c&agrave; ph&ecirc; 2018 - 2019 so với năm ngo&aacute;i v&agrave; triển vọng một m&ugrave;a bội thu tại Brazil trong 2019 - 2020 l&agrave; nguy&ecirc;n nh&acirc;n khiến gi&aacute; c&agrave; ph&ecirc; đạt mức thấp trong năm nay.&nbsp;</p>\r\n\r\n<p><a href=\"https://vietnambiz.mediacdn.vn/2019/3/18/3-15529040815091209318589.png\" title=\"\"><img alt=\"Giá cà phê thế giới đảo chiều trong tháng 2 - Ảnh 2.\" id=\"img_a5f63a20-4966-11e9-94d7-39cbf763c067\" src=\"https://vietnambiz.mediacdn.vn/thumb_w/640/2019/3/18/3-15529040815091209318589.png\" title=\"Giá cà phê thế giới đảo chiều trong tháng 2 - Ảnh 2.\" /></a></p>\r\n\r\n<p>Gi&aacute; của c&aacute;c nh&oacute;m chỉ số biến động tr&aacute;i chiều trong th&aacute;ng 2. Theo đ&oacute;, gi&aacute; c&agrave; ph&ecirc; arabica Brazil giảm 2,8% xuống 100,06 US cent/pound. Gi&aacute; c&agrave; ph&ecirc; arabica Colombia cũng giảm 1% xuống 127,93 US cent/pound trong khi gi&aacute; c&agrave; ph&ecirc; từ c&aacute;c quốc gia kh&aacute;c kh&ocirc;ng thay đổi ở 128,4 US cent/pound.&nbsp;</p>\r\n\r\n<p>Về sự kh&aacute;c biệt, gi&aacute; c&agrave; ph&ecirc; arabica h&agrave;ng ng&agrave;y từ quốc gia kh&aacute;c thường giao dịch tr&ecirc;n mức của c&agrave; ph&ecirc; arabica Colombia trong th&aacute;ng 2, dẫn tới sự thu về về ch&ecirc;nh lệnh l&agrave; 0,52 US cent/pound trong th&aacute;ng. Điều n&agrave;y phản &aacute;nh sự tr&aacute;i chiều về t&iacute;nh sẵn c&oacute; của hai loại c&agrave; ph&ecirc;.&nbsp;</p>\r\n\r\n<p>Trong khi đ&oacute;, gi&aacute; c&agrave; ph&ecirc; robusta tăng 0,5% l&ecirc;n 78,65 US cent/pound, ghi nhận th&aacute;ng tăng thứ hai li&ecirc;n tiếp.&nbsp;</p>\r\n\r\n<p>Sự sụt giảm của gi&aacute; arabica kết hợp với đ&agrave; tăng của gi&aacute; c&agrave; ph&ecirc; robusta đ&atilde; l&agrave;m thu hẹp ch&ecirc;nh lệch giữa hai giống c&agrave; ph&ecirc;. Trong th&aacute;ng 2, ch&ecirc;nh lệch về gi&aacute; trung b&igrave;nh đ&atilde; giảm 10,7% xuống 33,6 US cent/pound. Theo ICO, lần cuối khoảng c&aacute;ch về gi&aacute; giữa hai loại c&agrave; ph&ecirc; đạt mức n&agrave;y l&agrave; th&aacute;ng 4/2018, với ch&ecirc;nh lệch của gi&aacute; c&agrave; ph&ecirc; giao dịch tr&ecirc;n s&agrave;n New York v&agrave; London chỉ l&agrave; 32,75 US cent/pound.&nbsp;</p>\r\n\r\n<p>Biến động trong một ng&agrave;y của chỉ số gi&aacute; tổng hợp ICO kh&ocirc;ng thay đổi ở 6% v&igrave; biến động trong một ng&agrave;y của c&agrave; ph&ecirc; robusta giảm 1 điểm phần trăm, trong khi tăng đối với to&agrave;n bộ chỉ số nh&oacute;m c&agrave; ph&ecirc; arabica.&nbsp;</p>\r\n\r\n<p><a href=\"https://vietnambiz.mediacdn.vn/2019/3/18/4-15529041043151433106066.png\" title=\"\"><img alt=\"Giá cà phê thế giới đảo chiều trong tháng 2 - Ảnh 3.\" id=\"img_b384d6b0-4966-11e9-8aa6-61e5f33c1e19\" src=\"https://vietnambiz.mediacdn.vn/thumb_w/640/2019/3/18/4-15529041043151433106066.png\" title=\"Giá cà phê thế giới đảo chiều trong tháng 2 - Ảnh 3.\" /></a></p>\r\n'),
(7, 'Giá cà phê arabica năm 2019 dự kiến tăng tại Brazil thấp', 'birch-coffee-shops-in-nyc.jpg', '2020-12-27 17:53:22', '<p>C&aacute;c chuy&ecirc;n gia dự đo&aacute;n th&acirc;m hụt to&agrave;n cầu một triệu bao loại 60 kg trong ni&ecirc;n vụ 2019 - 2020, trong khi ước t&iacute;nh thặng dư l&agrave; 4,25 triệu bao ni&ecirc;n vụ 2018 - 2019.</p>\r\n\r\n<p>Nguồn cung to&agrave;n cầu thắt chặt trong m&ugrave;a vụ tới dự kiến sẽ k&eacute;o gi&aacute; c&agrave; ph&ecirc; arabica l&ecirc;n 1,25 USD/pound v&agrave;o cuối năm 2019, tăng 24,8% so với chốt phi&ecirc;n ng&agrave;y 11/3.</p>\r\n\r\n<p>&quot;Gi&aacute; arabica sẽ được hỗ trợ bởi thực tế Brazil bước v&agrave;o thời k&igrave; mất m&ugrave;a trong ni&ecirc;n vụ 2019 &ndash; 2020&quot;, Caroline Bain, nh&agrave; ph&acirc;n t&iacute;ch tại Capital Economics, cho biết.</p>\r\n\r\n<p>C&aacute;c nh&agrave; sản xuất h&agrave;ng đầu Brazil k&igrave; vọng sản lượng c&agrave; ph&ecirc; ni&ecirc;n vụ 2019 - 2020 ở mức trung b&igrave;nh 55 triệu bao, &iacute;t thay đổi so với dự b&aacute;o trước đ&oacute;.</p>\r\n\r\n<p>Điều n&agrave;y thể hiện mức giảm khoảng 8,3% so với vụ m&ugrave;a kỉ lục 2018 - 2019, thời điểm gi&aacute; arabica xuống mức thấp nhất trong gần 13 năm ở 92 cent/pound v&agrave;o ng&agrave;y 18/9/2018.&nbsp;</p>\r\n\r\n<p>Mức gi&aacute; n&agrave;y thấp hơn rất nhiều so với chi ph&iacute; sản xuất ở nhiều nước v&agrave; buộc một số người trồng đầu tư &iacute;t hơn v&agrave;o trang trại của m&igrave;nh. Một nh&agrave; ph&acirc;n t&iacute;ch cho biết, sản lượng c&agrave; ph&ecirc; to&agrave;n cầu sẽ bắt đầu giảm trong giai đoạn 2019 - 2020.</p>\r\n\r\n<p>Gi&aacute; arabica thực tế đ&atilde; tăng mạnh trong v&agrave;i tuần trước cuộc bầu cử tổng thống Brazil v&agrave;o th&aacute;ng 10/2018.</p>\r\n\r\n<p>C&aacute;c nh&agrave; ph&acirc;n t&iacute;ch cũng đang theo d&otilde;i chặt chẽ ch&iacute;nh s&aacute;ch của Brazil, đặc biệt l&agrave; tiềm năng về gi&aacute; mua tối thiểu mới hoặc lưới an to&agrave;n cho n&ocirc;ng d&acirc;n trồng c&agrave; ph&ecirc; của đất nước n&agrave;y.&nbsp;</p>\r\n\r\n<p>Shawn Hackett, chủ tịch của Hackett Financial Advisors, cho biết c&aacute;c ch&iacute;nh s&aacute;ch n&agrave;y c&oacute; thể gi&uacute;p hỗ trợ thị trường v&agrave; đồng thời loại bỏ c&aacute;c nguồn cung cấp cho xuất khẩu ra khỏi thị trường thế giới.</p>\r\n\r\n<p>Ngo&agrave;i ra, gi&aacute; của c&agrave; ph&ecirc; Rrobusta dự kiến sẽ đạt 1.775 USD/tấn v&agrave;o cuối năm 2019, tăng 16% so với mức gi&aacute; đ&oacute;ng cửa ng&agrave;y 11/3, theo&nbsp;<em>Reuters</em>.</p>\r\n\r\n<p>Sản lượng c&agrave; ph&ecirc; tại Việt Nam, nước trồng c&agrave; ph&ecirc; nhiều nhất thế giới, ước đạt 29,75 triệu bao trong ni&ecirc;n vụ 2019 - 2020, tương đương với ước t&iacute;nh sản xuất cho ni&ecirc;n vụ 2018 - 2019.</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `TaiKhoan` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `MatKhau` varchar(32) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`TaiKhoan`, `iduser`, `MatKhau`) VALUES
('xaopaibun', 3, 'de5a455a650a3c610ee7db2b3527ecd9'),
('PhamJin', 5, '6b731a4c6cd7a14e2ac565386e362d81'),
('admin', 6, '4a7d1ed414474e4033ac29ccb8653d9b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD KEY `iDCoffee` (`iDCoffee`),
  ADD KEY `chitietdondathang_ibfk_2` (`iDDonDatHang`);

--
-- Chỉ mục cho bảng `datban`
--
ALTER TABLE `datban`
  ADD PRIMARY KEY (`id_DonDatBan`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`iDDonDatHang`),
  ADD KEY `iDNguoiDung` (`iDNguoiDung`);

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
  ADD PRIMARY KEY (`iDNguoiDung`);

--
-- Chỉ mục cho bảng `sanphamcoffee`
--
ALTER TABLE `sanphamcoffee`
  ADD PRIMARY KEY (`idCoffee`),
  ADD KEY `idLoai` (`idLoai`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idTrangThai`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`iDTinTuc`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `datban`
--
ALTER TABLE `datban`
  MODIFY `id_DonDatBan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `iDDonDatHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `homepagedata`
--
ALTER TABLE `homepagedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaicoffee`
--
ALTER TABLE `loaicoffee`
  MODIFY `idLoai` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `iDNguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanphamcoffee`
--
ALTER TABLE `sanphamcoffee`
  MODIFY `idCoffee` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `idTrangThai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `iDTinTuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `chitietdondathang_ibfk_1` FOREIGN KEY (`iDCoffee`) REFERENCES `sanphamcoffee` (`idCoffee`),
  ADD CONSTRAINT `chitietdondathang_ibfk_2` FOREIGN KEY (`iDDonDatHang`) REFERENCES `dondathang` (`iDDonDatHang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanphamcoffee`
--
ALTER TABLE `sanphamcoffee`
  ADD CONSTRAINT `sanphamcoffee_ibfk_1` FOREIGN KEY (`idLoai`) REFERENCES `loaicoffee` (`idLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
