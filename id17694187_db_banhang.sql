-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 03:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17694187_db_banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `STT` int(11) NOT NULL,
  `IDHoaDon` text NOT NULL,
  `IDSanPham` text NOT NULL,
  `GiaTien` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`STT`, `IDHoaDon`, `IDSanPham`, `GiaTien`, `SoLuong`) VALUES
(1, 'HD001', 'SP007', 138000, 1),
(2, 'HD001', 'SP010', 1405500, 2),
(3, 'HD001', 'SP005', 1843000, 1),
(4, 'HD002', 'SP006', 186000, 4),
(5, 'HD003', 'SP001', 4740500, 1),
(6, 'HD004', 'SP002', 6133050, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `STT` int(11) NOT NULL,
  `IDSanPham` text NOT NULL,
  `ThongSoKiThuat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `DacDiemNoiBat` text NOT NULL,
  `HinhAnh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`STT`, `IDSanPham`, `ThongSoKiThuat`, `DacDiemNoiBat`, `HinhAnh`) VALUES
(1, 'SP001', 'Thời gian sử dụng tai nghe:Dùng 8 giờ - Sạc 3 giờ, Thời gian sử dụng hộp sạc:Dùng 20 giờ - Sạc 3 giờ, Cổng sạc:Type-C, Công nghệ âm thanh:Active Noise Cancellation, Tương thích:Android|iOS (iPhone)|Windows, Tiện ích:Chống nướcChống ồn, Kết nối cùng lúc:2 thiết bị, Điều khiển:Cảm ứng chạm, Phím điều khiển:Bật/Tắt Bluetooth|Chuyển bài hát|Nghe/nhận cuộc gọi|Phát/dừng chơi nhạc, Trọng lượng:51.2g, Thương hiệu của:Hàn Quốc, Sản xuất tại:Việt Nam, Hãng:Samsung', 'Nâng tầm trải nghiệm âm và chất lượng cuộc gọi với chống ồn chủ động (ANC). Kết nối không dây Bluetooth 5.0 dễ dàng với các thiết bị ngoài, đường truyền ổn định. Chuẩn âm thanh studio với loa 2 chiều AKG mạnh mẽ. Tận hưởng âm thanh vòm lôi cuốn, chuẩn điện ảnh từ 360 Audio. Đàm thoại rõ ràng với hệ thống 3 mic và bộ phận thu nhận giọng nói (Voice Pickup Unit). Loa 2 chiều (loa trầm 11mm, loa bổng 6.5mm). Khả năng kháng nước hiệu quả cùng xếp hạng kháng nước IPX7. Thời gian sử dụng 5 giờ và 13 giờ cùng hộp sạc (bật chống ồn), sử dụng 8 giờ và 20 giờ cùng hộp sạc (tắt chống ồn).', './images/product-1.jpg, ./images/product-detail/product-1-detail-1.jpg, ./images/product-detail/product-1-detail-2.jpg, ./images/product-detail/product-1-detail-3.jpg'),
(2, 'SP002', 'Thời gian sử dụng tai nghe:Dùng 8 giờ - Sạc 1.5 giờ, Thời gian sử dụng hộp sạc:Dùng 16 giờ - Sạc 2.5 giờ, Cổng sạc:Type-C, Công nghệ âm thanh:Chống ồn HD QN1, Tương thích:Android|iOS (iPhone)|Windows, Ứng dụng kết nối:Sony Headphones Connect, Tiện ích:Chống nước|Chống ồn, Kết nối cùng lúc:1 thiết bị, Điều khiển:Cảm ứng chạm, Trọng lượng:41g, Thương hiệu của:Nhật Bản, Sản xuất tại:Malaysia, Hãng:Sony', 'Kiểu dáng nhỏ gọn thiết kế sang trọng. Thưởng thức âm thanh Hi-Res có chất lượng vượt trội nhờ công nghệ LDAC. Khả năng chống ồn tuyệt vời nhờ con chip V1 thế hệ mới. Dung lượng pin lớn, hỗ trợ sạc nhanh 5 phút dùng 60 phút. Thưởng thức trọn vẹn bài hát nhờ loại bỏ tiếng ồn của gió. Tắt nhạc khi bạn trò chuyện với người xung quanh. Chuẩn chống nước IPX4 bảo vệ tai nghe an toàn trước nước mưa và mồ hôi. Dễ dàng tiếp nhận thông tin hơn với trợ lý ảo. dáng nhỏ gọn thiết kế sang trọng.', './images/product-2.jpg, ./images/product-detail/product-2-detail-1.jpg, ./images/product-detail/product-2-detail-2.jpg, ./images/product-detail/product-2-detail-3.jpg'),
(3, 'SP003', 'Thời gian sử dụng tai nghe:Dùng 22 giờ - Sạc 3 giờ, Cổng sạc:Micro USB, Công nghệ âm thanh:Active Noise Cancelling, Jack cắm:3.5 mm, Tương thích:Android|iOS (iPhone)|Windows, Tiện ích:Chống ồn, Kết nối cùng lúc:1 thiết bị, Điều khiển:Phím nhấn, Trọng lượng:260g, Thương hiệu của:Mỹ, Sản xuất tại:Trung Quốc, Hãng:Beats', 'Thiết kế gọn nhẹ, tinh tế, đệm tai mềm thoải mái khi đeo. Kết nối không dây với Bluetooth 4.0, khoảng cách kết nối đến 10 m. Sử dụng chip Apple W1 mới kết nối nhanh và ổn định, âm thanh mạnh mẽ. Trang bị công nghệ chống ồn chủ động (Pure Active Noise Cancelling). Thời gian sử dụng 22 giờ (bật chống ồn), 40 giờ (tắt chống ồn). Tính năng Fast Fuel sạc nhanh 10 phút sử dụng được 3 giờ. Sản phẩm chính hãng Beats (Apple), nguyên seal 100%. Lưu ý: Thanh toán trước khi mở seal.', './images/product-3.jpg, ./images/product-detail/product-3-detail-1.jpg, ./images/product-detail/product-3-detail-2.jpg, ./images/product-detail/product-3-detail-3.jpg'),
(4, 'SP004', 'Thời gian sử dụng tai nghe:Dùng 5 giờ - Sạc 1.5 giờ, Thời gian sử dụng hộp sạc:Dùng 19 giờ - Sạc 2 giờ, Cổng sạc:Micro USB, Công nghệ âm thanh:Driver dynamic, Tương thích:Android|iOS (iPhone)|Windows, Ứng dụng kết nối:Bluetooth TWS, Tiện ích:Chống nước|Có mic thoại, Kết nối cùng lúc:1 thiết bị, Phím điều khiển:Nghe/nhận cuộc gọi|Phát/dừng chơi nhạc, Trọng lượng:45g, Thương hiệu của:Mỹ, Sản xuất tại:Trung Quốc, Hãng:Belkin', 'Thiết kế hiện đại, nhỏ nhắn, đệm tai êm ái, chắc chắn khi đeo. Âm thanh cuốn hút, sinh động. Kết nối thiết bị Android, iOS qua Bluetooth 5.0, khoảng cách kết nối 10 m. Xếp hạng chống nước IPX5, thoải mái dùng khi luyện tập thể thao. Sử dụng liên tục trong 5 giờ, có hộp sạc được thêm 24 giờ. Điều khiển cảm ứng đa chức năng nhanh nhạy, kèm mic thoại trên mỗi tai nghe.', './images/product-4.jpg, ./images/product-detail/product-4-detail-1.jpg, ./images/product-detail/product-4-detail-2.jpg, ./images/product-detail/product-4-detail-3.jpg'),
(5, 'SP005', 'Dung lượng pin:20.000 mAh, Hiệu suất sạc:60%, Lõi pin:Polymer, Công nghệ-Tiện ích:Power Delivery, Nguồn ra:Type C 5V - 3A|9V - 3A|12V - 2.5A|15V - 2A|20V - 1.5A|USB 5V - 2.4A,Nguồn vào:Type C 5V - 3A|9V - 3A|12V - 2.5A|15V - 2A|20V - 1.5A, Kích thước: Dày 2.5 cm|Rộng 7.4 cm|Dài 15.7 cm, Trọng lượng: 458g, Thương hiệu của:Mỹ, Sản xuất tại:Trung Quốc', 'Dung lượng pin lớn 20.000 mAh, lõi pin Polymer an toàn. Cổng Type C trang bị công nghệ sạc nhanh Power Delivery 30W cho cả nguồn ra và nguồn vào. Tương thích với nhiều loại điện thoại và máy tính bảng.', './images/product-5.jpg, ./images/product-detail/product-5-detail-1.jpg, ./images/product-detail/product-5-detail-2.jpg, ./images/product-detail/product-5-detail-3.jpg'),
(6, 'SP006', 'Thông số:Đang cập nhật', 'Đặc điểm: Đang cập nhật', './images/product-6.jpg, ./images/product-detail/product-6-detail-1.jpg, ./images/product-detail/product-6-detail-2.jpg, ./images/product-detail/product-6-detail-3.jpg'),
(7, 'SP007', 'Công nghệ\\Tiện ích:Không có, Chức năng:Sạc\\Truyền dữ liệu, Đầu vào:USB Type-A, Đầu ra: Type C:5V-3A, Độ dài dây:2m, Công suất tối đa:15W, Sản xuất tại:Trung Quốc, Thương hiệu của:Thế Giới Di Động', 'Kiểu dáng đơn giản, 2 tông màu thời thượng, chiều dài 2 m. Công suất 15 W cho tốc độ sạc nhanh. Truyền tải dữ liệu an toàn giữa điện thoại và laptop. Thiết kế 2 đầu cắm thông dụng dùng được với đa dạng thiết bị với cổng Type-C và USB.', './images/product-7.jpg, ./images/product-detail/product-7-detail-1.jpg, ./images/product-detail/product-7-detail-2.jpg, ./images/product-detail/product-7-detail-3.jpg'),
(8, 'SP008', 'Công nghệ\\Tiện ích:Không có, Chức năng:Sạc, Đầu ra: Type C:5V-1A, Jack kết nối:USB, Dòng sạc tối đa:5W, Sản xuất tại:Trung Quốc, Thương hiệu của:Thế Giới Di Động', 'Dòng điện 1A phù hợp với điện thoại cấp thấp như dòng nghe gọi, sạc dự phòng, tai nghe Bluetooth,... Thiết kế nhỏ gọn Kết hợp với nhiều loại dây cáp để sạc cho nhiều thiết bị khác nhau.', './images/product-8.jpg, ./images/product-detail/product-8-detail-1.jpg, ./images/product-detail/product-8-detail-2.jpg, ./images/product-detail/product-8-detail-3.jpg'),
(9, 'SP009', 'Thông số:Đang cập nhật', 'Thiết kế bắt mắt, vừa vặn AirPods Pro. Đảm bảo an toàn cho tai nghe, dùng bền với chất liệu silicone và nhựa dẻo chất lượng. Tránh rơi rớt, thất lạc với trang bị móc treo đính kèm. Khe cắm sạc được tích hợp, hỗ trợ sạc pin nhanh hơn.', './images/product-9.jpg, ./images/product-detail/product-9-detail-1.jpg, ./images/product-detail/product-9-detail-2.jpg, ./images/product-detail/product-9-detail-3.jpg'),
(10, 'SP010', 'Loại sản phẩm:Loa bluetooth,Tổng công suất:16W,Nguồn:Pin,Thời gian sử dụng:Dùng khoảng 10 tiếng,Thời gian sạc:Sạc khoảng 3.5 tiếng,Công nghệ âm thanh:BassUpTrue Wireless Stereo,Phím điểu khiển:Bật/Tắt Bluetooth\\Nút nguồn\\Tăng/giảm âm lượng\\Phát/dừng chơi nhạc,Tiện ích:Chống nước IPX7\\Có micro đàm thoại,Kết nối không dây:Bluetooth 4.2,Kết nối khác:AUX in,Điều khiển bằng điện thoại:Có,Khoảng cách kết nối tối đa:10m,Kích thước:Dài 7.5 cm - Rộng 7.5 cm - Cao 10.5 cm - Nặng 0.416 kg,Thương hiệu của:Trung Quốc,Sản xuất tại:Trung Quốc,Hãng:Anker', 'Thiết kế hình trụ dễ dàng cầm nắm, kèm dây treo tiện dụng. Âm thanh 360 độ lan tỏa âm thanh khắp không gian. Công nghệ Bluetooth 4.2 cho tín hiệu kết nối ổn định ngay khi ở khoảng cách xa. Công nghệ BassUp tăng cường tần số âm trầm, công suất 8 W nhân 2. Có thể liên kết 2 loa với nhau nhờ công nghệ True Wireless Stereo. Bảo vệ loa an toàn với chuẩn chống nước IPX7. Khả năng kháng nước hiệu quả cùng xếp hạng kháng nước IPX7. Thời gian sử dụng lên đến 10 tiếng, thời gian sạc 3.5 tiếng.', './images/product-10.jpg, ./images/product-detail/product-10-detail-1.jpg, ./images/product-detail/product-10-detail-2.jpg, ./images/product-detail/product-10-detail-3.jpg'),
(11, 'SP011', 'Thông số:Đang cập nhật', 'Đặc điểm: Đang cập nhật', './images/product-11.jpg, ./images/product-detail/product-11-detail-1.jpg, ./images/product-detail/product-11-detail-2.jpg, ./images/product-detail/product-11-detail-3.jpg'),
(12, 'SP012', 'Thông số:Đang cập nhật', 'Kiểu dáng thời trang và đẹp mắt. Thiết kế vừa vặn và ôm sát thân máy. Dễ dàng tháo/lắp ốp vào máy', './images/product-12.jpg, ./images/product-detail/product-12-detail-1.jpg, ./images/product-detail/product-12-detail-2.jpg, ./images/product-detail/product-12-detail-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `STT` int(11) NOT NULL,
  `IDGioHang` text NOT NULL,
  `IDSanPham` text NOT NULL,
  `IDKhachHang` text NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`STT`, `IDGioHang`, `IDSanPham`, `IDKhachHang`, `SoLuong`) VALUES
(4, 'GH004', 'SP012', 'TK002', 1),
(7, 'GH005', 'SP003', 'TK001', 1),
(8, 'GH006', 'SP002', 'TK003', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `STT` int(11) NOT NULL,
  `IDHoaDon` text NOT NULL,
  `IDKhachHang` text NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TrangThai` text NOT NULL,
  `PhuongThucThanhToan` text NOT NULL,
  `DiaChiNhan` text NOT NULL,
  `YeuCauKhac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`STT`, `IDHoaDon`, `IDKhachHang`, `TongTien`, `TrangThai`, `PhuongThucThanhToan`, `DiaChiNhan`, `YeuCauKhac`) VALUES
(1, 'HD001', 'TK001', 4792000, 'Cancel', '', '', ''),
(2, 'HD002', 'TK001', 744000, 'Cancel', '', '', ''),
(3, 'HD003', 'TK001', 4740500, 'Paid', 'TrucTiep', 'Cần Thơ|Bình Thủy|Bình Thủy|112|', ''),
(4, 'HD004', 'TK003', 6133050, 'not yet', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `STT` int(11) NOT NULL,
  `IDLoai` text NOT NULL,
  `TenLoai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`STT`, `IDLoai`, `TenLoai`) VALUES
(1, 'L01', 'Tai nghe'),
(2, 'L02', 'Sạc/cáp sạc'),
(3, 'L03', 'Ốp lưng'),
(4, 'L04', 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `STT` int(11) NOT NULL,
  `IDSanPham` text NOT NULL,
  `TenSP` text NOT NULL,
  `IDLoai` text NOT NULL,
  `DonGia` int(11) NOT NULL,
  `GiamGia` float NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`STT`, `IDSanPham`, `TenSP`, `IDLoai`, `DonGia`, `GiamGia`, `SoLuong`, `Img`) VALUES
(1, 'SP001', 'Tai nghe Bluetooth True Wireless Galaxy Buds Pro', 'L01', 4990000, 5, 10, './images/product-1.jpg'),
(2, 'SP002', 'Tai nghe Bluetooth True Wireless Sony WF-1000XM4', 'L01', 6490000, 5.5, 10, './images/product-2.jpg'),
(3, 'SP003', 'Tai nghe chụp tai Beats Studio3 Wireless MX422', 'L01', 7490000, 2, 5, './images/product-3.jpg'),
(4, 'SP004', 'Tai nghe Bluetooth True wireless Belkin Soundform Move PAC001', 'L01', 1229000, 11, 7, './images/product-4.jpg'),
(5, 'SP005', 'Pin sạc dự phòng Polymer 20.000 mAh Type C 30W PD Belkin Pocket Power BPB002', 'L04', 1900000, 3, 8, './images/product-5.jpg'),
(6, 'SP006', 'Ốp lưng Galaxy A22 LTE nhựa dẻo Soft Clear Samsung Trong', 'L03', 200000, 7, 15, './images/product-6.jpg'),
(7, 'SP007', 'Cáp Type C 2m AVA+ DS08C', 'L02', 150000, 8, 11, './images/product-7.jpg'),
(8, 'SP008', 'Adapter sạc USB 5W AVA+ DS016-BG', 'L02', 120000, 6, 8, './images/product-8.jpg'),
(9, 'SP009', 'Túi đựng Airpods Pro Nhựa dẻo Carton Silicone JM', 'L04', 150000, 1.1, 12, './images/product-9.jpg'),
(10, 'SP010', 'Loa Bluetooth Anker Soundcore Motion Q A3108', 'L04', 1500000, 6.3, 5, './images/product-10.jpg'),
(11, 'SP011', 'Gậy chụp ảnh Bluetooth Tripod Xmobile K06', 'L04', 300000, 9.9, 10, './images/product-11.jpg'),
(12, 'SP012', 'Ốp lưng iPad Air 4 2020 10.9 inch Wifi Nhựa dẻo Skin Shock JM Navy', 'L03', 750000, 1.2, 12, './images/product-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `STT` int(11) NOT NULL,
  `IDTaiKhoan` text NOT NULL,
  `TaiKhoan` text NOT NULL,
  `MatKhau` text NOT NULL,
  `Quyen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`STT`, `IDTaiKhoan`, `TaiKhoan`, `MatKhau`, `Quyen`) VALUES
(1, 'TK001', 'admin@admin.com', '123', '1'),
(2, 'TK002', 'admin2@admin.com', '123', '1'),
(3, 'TK003', 'hihi@gmail.com', '123', '0');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `ten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `ten`) VALUES
(2, 2222);

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkhachhang`
--

CREATE TABLE `thongtinkhachhang` (
  `STT` int(11) NOT NULL,
  `IDKhachHang` text COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtinkhachhang`
--

INSERT INTO `thongtinkhachhang` (`STT`, `IDKhachHang`, `HoTen`, `SDT`, `DiaChi`, `GioiTinh`) VALUES
(1, 'TK001', 'Nguyen Anh', '0123456789', 'Cần Thơ|Bình Thủy|Bình Thủy|112', 'Nam'),
(2, 'TK002', 'LongDoan', '', '', ''),
(3, 'TK003', 'hihi', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`STT`);

--
-- Indexes for table `thongtinkhachhang`
--
ALTER TABLE `thongtinkhachhang`
  ADD PRIMARY KEY (`STT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thongtinkhachhang`
--
ALTER TABLE `thongtinkhachhang`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
