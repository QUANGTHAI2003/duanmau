-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 05:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_bl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_kh`, `ma_hh`, `ngay_bl`) VALUES
(1, 'Hello', 'snova', 13, '06-10-2022'),
(2, 'Hello', 'snova', 13, '06-10-2022'),
(3, 'Test', 'quangthai', 13, '07-10-2022'),
(4, 'Rất tuyệt', 'quangthai', 19, '09-10-2022'),
(5, 'Sản phẩm rất chat lượng', 'snova', 19, '09-10-2022'),
(6, 'Giá rất hợp lý', 'snova', 27, '09-10-2022'),
(7, 'Giá rất hợp lý', 'snova', 27, '09-10-2022'),
(8, 'Sản phẩm rất tuyệt', 'quangthai', 17, '09-10-2022'),
(9, 'nghia dep trai', 'quangthai', 26, '10-10-2022');

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `don_gia` double(10,2) NOT NULL,
  `giam_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `hinh` varchar(50) NOT NULL,
  `ngay_nhap` varchar(20) NOT NULL,
  `mo_ta` varchar(2000) DEFAULT NULL,
  `dac_biet` bit(1) NOT NULL DEFAULT b'0',
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(13, 'Thịt bò Canada', 450000.00, 0.00, '2.webp', '19-10-2022', '', b'1', 127, 11),
(17, 'Nho mỹ nhập khẩu', 235000.00, 0.00, '15.webp', '29-09-2022', 'Nho Mỹ được biết đến là một trong những loại trái cây được ưa chuộng nhất trên thế giới với vẻ căng trong mọng nước và vị ngọt thanh đặc trưng.', b'1', 91, 2),
(18, 'Cá hồi', 1200000.00, 0.00, '30.webp', '29-09-2022', 'Thông tin sản phẩm đang được cập nhật.', b'0', 5, 9),
(19, 'Táo xanh Mỹ', 160000.00, 0.00, '21.webp', '29-09-2022', 'áo là loại cây ưa khí hậu khô, nóng và ít côn trùng và dịch bệnh. Táo GrannySmith (Táo Xanh) có nguồn gốc từ Úc du nhập vào Mỹ năm 1868. Táo có màu xanh lá, vị chua đậm, rất giòn, nhiêu nước.', b'0', 12, 2),
(21, 'Sườn lợn Brazil', 200000.00, 0.00, '9.webp', '29-09-2022', 'Thông tin sản phẩm đang được cập nhật.', b'0', 16, 11),
(26, 'Rau cải bẹ xanh non', 20000.00, 0.00, '17.webp', '08-10-2022', 'Thông tin sản phẩm đang được cập nhật.', b'0', 5, 1),
(27, 'Hành tây đặc biệt', 55000.00, 0.00, '13.webp', '04-10-2022', 'Thông tin sản phẩm đang được cập nhật.', b'0', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0',
  `hinh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vai_tro` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
('admin', '$2y$10$dgHNGDoF9tX5TQvathCHRe7eiQx7kMaXA8iMAqAD4PdPLLz0GScdi', 'Admin', b'1', 'news4.webp', 'admin@gmail.com', b'0'),
('quangthai', '$2y$10$BJOuZoYjddIsV8CY.nioWO2sbt/vc6aUZrD.PL5TycqzuvRACwwjG', 'fas', b'1', 'icon.jpg', 'tranquangthai.10102003@gmail.com', b'1'),
('quangthai123', '$2y$10$d/AsprdBIMbbnHdAlrYY8OO.iFh/IjqZLa987.rYM01FbXiBnGINe', '123412', b'1', 'user.png', 'admin@gmail.com', b'1'),
('snova', '$2y$10$hOi./DIT.ZFy1WDUpW9KVuKzu9Iw/vHCrQiBlM7vCtnukflW/HkXC', 'Trần Quang Thái', b'1', 'news6.webp', 'thaitqpc04444@fpt.edu.vn', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Rau Củ'),
(2, 'Hoa Quả'),
(9, 'Hải sản'),
(11, 'Thực phẩm tươi sống'),
(21, 'Các loại hạt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE NO ACTION,
  ADD CONSTRAINT `binh_luan_ibfk_3` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
