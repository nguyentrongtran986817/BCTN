-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2021 lúc 06:59 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giasuphp1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `admin_image`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123', 'Trần Trọng Nguyên', '0359686971', 'mmm.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhsachgiasu`
--

CREATE TABLE `tbl_danhsachgiasu` (
  `danhsachgiasu_id` int(10) UNSIGNED NOT NULL,
  `danhsachgiasu_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `danhsachgiasu_hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_ngaysinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_hienla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_lopday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_monday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_ngayday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachgiasu_hienthi` int(10) NOT NULL,
  `danhsachgiasu_quyen` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhsachgiasu`
--

INSERT INTO `tbl_danhsachgiasu` (`danhsachgiasu_id`, `danhsachgiasu_ten`, `danhsachgiasu_sdt`, `danhsachgiasu_email`, `danhsachgiasu_password`, `danhsachgiasu_hinhanh`, `danhsachgiasu_ngaysinh`, `danhsachgiasu_hienla`, `danhsachgiasu_lopday`, `danhsachgiasu_monday`, `danhsachgiasu_ngayday`, `danhsachgiasu_hienthi`, `danhsachgiasu_quyen`, `created_at`, `updated_at`) VALUES
(51, 'Trần Trọng Nguyên', '0359686971', 'gs1@gmail.com', NULL, 'anhdaidien58.jpg', '1999-12-23', '1', '4,6', '2,5,8', '3,4,6', 1, 1, '2021-05-13 01:40:09', NULL),
(53, 'Nguyễn Thị B', '0369874521', 'gs3@gmail.com', '123', 'anh-mau57.jpg', '1999-12-23', '1', '8,11,13', '3,6', '1,7', 1, 1, '2021-05-04 10:29:52', NULL),
(54, 'Trần văn a', '0315462158', 'gs4@gmail.com', '123', 'gia-sư-mới86.jpg', '1999-12-23', '1', '4,5,11,13', '1,5,10', '4,7', 1, 1, '2021-05-04 10:29:58', NULL),
(55, 'Trần Thị Tuyết', '0359686972', 'gs5@gmail.com', '123', 'a12.png', '1999-12-23', '1', '3,9', '3,5', '3,4', 1, 1, '2021-05-03 08:06:40', NULL),
(60, 'Nguyễn Văn D', '0369852147', 'gs8@gmail.com', '123', 'logo72.png', '1986-12-23', '3', '2,8', '5', '4', 1, 1, '2021-05-13 01:23:59', NULL),
(61, 'Nguyễn Văn F', '0356842135', 'gs9@gmail.com', NULL, 'anhdaidien97.jpg', '2021-02-01', '1', '3,8', '4,6,8', '1,6,7', 1, 1, '2021-05-13 01:34:56', NULL),
(62, 'Nguyễn Văn C', '0369852147', 'gs9@gmail.com', '123', 'a43.png', '1997-12-23', '3', '11,13', '1,8', '1,5', 0, 1, '2021-05-13 01:34:17', NULL),
(63, 'Nguyễn Văn C', '0369852147', 'giasu1@gmail.com', '123', 'anhdaidien92.jpg', '1999-12-23', '1', '8', '7,8', '5,7', 1, 1, '2021-05-13 01:45:01', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhsachgiasu_gender`
--

CREATE TABLE `tbl_danhsachgiasu_gender` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhsachgiasu_gender`
--

INSERT INTO `tbl_danhsachgiasu_gender` (`id`, `gender_name`, `created_at`, `updated_at`) VALUES
(1, 'Nam', NULL, NULL),
(2, 'Nữ', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhsachlophoc`
--

CREATE TABLE `tbl_danhsachlophoc` (
  `danhsachlophoc_id` int(10) UNSIGNED NOT NULL,
  `danhsachlophoc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_monhoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_lophoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_luong` double NOT NULL,
  `danhsachlophoc_sobuoi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_thuhoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_thoigian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_yeucau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_lienhe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachlophoc_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhsachlophoc`
--

INSERT INTO `tbl_danhsachlophoc` (`danhsachlophoc_id`, `danhsachlophoc_name`, `danhsachlophoc_gioitinh`, `danhsachlophoc_monhoc`, `danhsachlophoc_lophoc`, `danhsachlophoc_diachi`, `danhsachlophoc_luong`, `danhsachlophoc_sobuoi`, `danhsachlophoc_thuhoc`, `danhsachlophoc_thoigian`, `danhsachlophoc_yeucau`, `danhsachlophoc_lienhe`, `danhsachlophoc_status`, `created_at`, `updated_at`) VALUES
(9, 'Trần Trọng Nguyên', '1', '1,3,5', '5,8', 'Dĩ An, Bình Dương', 20000000, '4', '5,7', '120p', 'Sinh Viên Nữ', '0359686971', '1', NULL, NULL),
(10, 'Phạm Văn A', '1', '2,5,7,9', '3,1', 'Dĩ An, Bình Dương', 2000000, '3', '5,6', '120p', 'Vui tính', '0359697586', '1', NULL, NULL),
(11, 'Phạm Văn B', '1', '1,8', '5,8', 'Dĩ An, Bình Dương', 2000000, '3', '3,5', '120p', 'Vui tính', '0359697583', '1', NULL, NULL),
(12, 'Phạm Thị Anh Thư', '2', '1,4', '11', 'Gò Vấp, TP.Hồ Chí Minh', 15000000, '5', '6', '160P', 'bằng giỏi', '0908224467', '1', NULL, NULL),
(13, 'Trần Văn Tưởng', '1', '1,8', '5,8', 'Thủ Đức, Tp.HCM', 5000000, '3', '2,6,7', '120', 'Dạy tốt', '0164852156', '1', NULL, NULL),
(14, 'Trần Văn Thi', '1', '1,10', '8,12', 'Gò Vấp, TP.Hồ Chí Minh', 4200000, '3', '7', '120p', 'Dạy dễ hiểu', '0164259837', '1', NULL, NULL),
(15, 'Phạm Minh Thọ', '1', '10', '13', 'Thủ Đức, Tp.HCM', 5300000, '2', '7', '240p', 'Dạy chất lượng', '0369585731', '1', NULL, NULL),
(16, 'Phạm Minh Thuận', '1', '1', '10,13', 'Bình Thạnh, TP Hồ Chí Minh', 10000000, '3', '4,5', '240p', 'Dạy dễ hiểu', '0245689543', '1', NULL, NULL),
(19, 'Trần Văn Tưởng', '1', '1', '10', 'Thủ Đức, Tp.HCM', 5300000, '2', '4', '160P', 'Dạy dễ hiểu', '0164852156', '0', NULL, NULL),
(20, 'Phạm Văn B', '1', '4', '7', 'Dĩ An, Bình Dương', 15, '5', '4', '120p', 'Vui tính', '0369585731', '0', NULL, NULL),
(21, 'Phạm Văn E', '1', '1,8', '4,8', 'Dĩ An, Bình Dương', 10000000, '5', '4,5', '240p', 'Vui tính', '0908224467', '0', NULL, NULL),
(22, 'Phạm Văn B', '1', '1', '2,4', 'Dĩ An, Bình Dương', 4200000, '3', '2', '240p', 'Vui tính', '0369585731', '0', NULL, NULL),
(23, 'Phạm Văn B', '1', '1', '11', 'Dĩ An, Bình Dương', 10000000, '3', '7', '240p', 'Vui tính', '0359697583', '0', NULL, NULL),
(24, 'Trần Văn Thi', '1', '1,8', '11,13', 'Bình Thạnh, TP Hồ Chí Minh', 10000000, '5', '5,7', '240p', 'Vui tính', '0164852156', '0', NULL, NULL),
(25, 'Phạm Thị Anh Thư', '1', '1,3', '13', 'Gò Vấp, TP.Hồ Chí Minh', 10000000, '5', '6,7', '240p', 'Vui tính', '0369585731', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhsachuser`
--

CREATE TABLE `tbl_danhsachuser` (
  `danhsachuser_id` int(10) UNSIGNED NOT NULL,
  `danhsachuser_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhsachuser_quyen` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhsachuser`
--

INSERT INTO `tbl_danhsachuser` (`danhsachuser_id`, `danhsachuser_name`, `email`, `password`, `gender`, `birth`, `address`, `phone`, `danhsachuser_quyen`, `created_at`, `updated_at`) VALUES
(1, 'Trần Trọng Nguyên', 'user1@gmail.com', '123', 'Nam', '1999-12-23', 'Bình Dương', '0359686971', 0, NULL, NULL),
(3, 'Trần Trọng Nguyên', 'user2@gmail.com', '123', '1', '1999-12-23', 'Dĩ An', '0359686971', NULL, NULL, NULL),
(6, 'Trần Trọng Nguyên', 'user3@gmail.com', '123', '2', '1999-12-23', 'Dĩ An', '0359686971', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhsachuser_gender`
--

CREATE TABLE `tbl_danhsachuser_gender` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhsachuser_gender`
--

INSERT INTO `tbl_danhsachuser_gender` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nam', NULL, NULL),
(2, 'Nữ', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhangs`
--

CREATE TABLE `tbl_nhangs` (
  `id` int(100) UNSIGNED NOT NULL,
  `nhangs_mags` varchar(255) NOT NULL,
  `nhangs_ten` varchar(255) NOT NULL,
  `nhangs_ngaysinh` varchar(255) NOT NULL,
  `nhangs_hienla` varchar(255) NOT NULL,
  `nhangs_hoten` varchar(255) NOT NULL,
  `nhangs_diachi` varchar(255) NOT NULL,
  `nhangs_sdt` varchar(255) NOT NULL,
  `nhangs_monhoc` varchar(255) NOT NULL,
  `nhangs_slhs` varchar(255) NOT NULL,
  `nhangs_hocluc` varchar(255) NOT NULL,
  `nhangs_thoigianhoc` varchar(255) NOT NULL,
  `nhangs_yeucau` varchar(255) NOT NULL,
  `nhangs_trangthai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhangs`
--

INSERT INTO `tbl_nhangs` (`id`, `nhangs_mags`, `nhangs_ten`, `nhangs_ngaysinh`, `nhangs_hienla`, `nhangs_hoten`, `nhangs_diachi`, `nhangs_sdt`, `nhangs_monhoc`, `nhangs_slhs`, `nhangs_hocluc`, `nhangs_thoigianhoc`, `nhangs_yeucau`, `nhangs_trangthai`) VALUES
(1, '51', 'Trần Trọng Nguyên', '1999-12-23', 'Sinh Viên', 'Phạm Thị Anh Thư', 'Quận 11, TP Hồ Chí Minh', '0368587765', 'Toán', '1', 'Khá', 'Thứ 2 - Thứ 4 ; 8h - 16h', 'Không có', '1'),
(2, '51', 'Trần Trọng Nguyên', '1999-12-23', 'Sinh Viên', 'Thái Minh Nguyệt', 'Thủ Dầu Một, Bình Dương', '0359686972', 'Toán', '1', 'Giỏi', 'Thứ', 'Không có', '0'),
(3, '52', 'Nguyễn Văn A', '1999-12-23', 'Cử nhân', 'Phạm Thị Anh Thư', 'Quận 11, TP Hồ Chí Minh', '0368587765', 'Toán', '1', 'Khá', 'Thứ 2 - Thứ 4 ; 8h - 16h', 'a', '1'),
(4, '51', 'Trần Trọng Nguyên', '1999-12-23', 'Sinh Viên', 'Trần Mạnh Hùng', 'Quận 11, TP Hồ Chí Minh', '0368587765', 'Toán', '1', 'Khá', 'Thứ 2 - Thứ 4 ; 8h - 16h', 'a', '0'),
(5, '51', 'Trần Trọng Nguyên', '1999-12-23', 'Sinh Viên', 'Thái Minh Nguyệt', 'Thủ Dầu Một, Bình Dương', '0368587765', 'Toán', '2', 'giỏi', 'Thứ 2 - Thứ 4 ; 8h - 16h', 'Không có', '0'),
(6, '51', 'Trần Trọng Nguyên', '1999-12-23', 'Sinh Viên', 'Thái Minh Nguyệt', 'Quận 11, TP Hồ Chí Minh', '0368587765', 'Toán', '2', 'Giỏi', 'Thứ 2 - Thứ 4 ; 8h - 16h', 'Không có', '0'),
(7, '51', 'Trần Trọng Nguyên', '1999-12-23', 'Sinh Viên', 'Phạm Thị Anh Thư', 'Quận 11, TP Hồ Chí Minh', '0368587765', 'Toán', '2', 'Giỏi', 'Thứ 2 - Thứ 4 ; 8h - 16h', 'Không có', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanlop`
--

CREATE TABLE `tbl_nhanlop` (
  `nhanlop_id` int(11) NOT NULL,
  `nhanlop_malop` varchar(255) NOT NULL,
  `nhanlop_name` varchar(255) NOT NULL,
  `nhanlop_gioitinh` varchar(225) NOT NULL,
  `nhanlop_monday` varchar(255) NOT NULL,
  `nhanlop_lopday` varchar(255) NOT NULL,
  `nhanlop_luong` varchar(255) NOT NULL,
  `nhanlop_sobuoi` varchar(255) NOT NULL,
  `nhanlop_thuday` varchar(255) NOT NULL,
  `nhanlop_yeucau` varchar(255) NOT NULL,
  `nhanlop_lienhe` varchar(255) NOT NULL,
  `giasu_id` varchar(255) NOT NULL,
  `nhanlop_ten` varchar(255) NOT NULL,
  `nhanlop_sdt` varchar(255) NOT NULL,
  `nhanlop_status` varchar(255) NOT NULL,
  `nhanlop_ngaynhan` varchar(255) NOT NULL,
  `nhanlop_noidung` varchar(255) NOT NULL,
  `nhanlop_trangthai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanlop`
--

INSERT INTO `tbl_nhanlop` (`nhanlop_id`, `nhanlop_malop`, `nhanlop_name`, `nhanlop_gioitinh`, `nhanlop_monday`, `nhanlop_lopday`, `nhanlop_luong`, `nhanlop_sobuoi`, `nhanlop_thuday`, `nhanlop_yeucau`, `nhanlop_lienhe`, `giasu_id`, `nhanlop_ten`, `nhanlop_sdt`, `nhanlop_status`, `nhanlop_ngaynhan`, `nhanlop_noidung`, `nhanlop_trangthai`) VALUES
(15, '9', 'Trần Trọng Nguyên', 'Nam', 'Toán', 'Lớp 4', '20000000', '4', 'Thứ 6', 'Sinh Viên Nữ', '0359686971', '51', 'Trần Trọng Nguyên', '0359686971', '0', '2021-05-04', 'không có', '1'),
(16, '12', 'Phạm Thị Anh Thư', 'Nữ', 'Toán', 'Lớp 10', '15000000', '5', 'Thứ 7', 'bằng giỏi', '0908224467', '51', 'Trần Trọng Nguyên', '0359686971', '0', '2021-05-04', 'không có', '1'),
(17, '10', 'Phạm Văn A', 'Nam', 'Lý', 'Lớp 2', '2000000', '3', 'Thứ 6', 'Vui tính', '0359697586', '53', 'Nguyễn Thị B', '0369874521', '1', '2021-05-11', 'không có', '0'),
(18, '11', 'Phạm Văn B', 'Nam', 'Toán', 'Lớp 4', '2000000', '3', 'Thứ 4', 'Vui tính', '0359697583', '51', 'Trần Trọng Nguyên', '0359686971', '1', '2021-05-11', 'không có', '0'),
(19, '13', 'Trần Văn Tưởng', 'Nam', 'Toán', 'Lớp 4', '5000000', '3', 'Thứ 3', 'Dạy tốt', '0164852156', '52', 'Nguyễn Văn A', '0346897521', '1', '2021-05-12', 'không có', '0'),
(20, '14', 'Trần Văn Thi', 'Nam', 'Toán', 'Lớp 7', '4200000', '3', 'Chủ nhật', 'Dạy dễ hiểu', '0164259837', '51', 'Trần Trọng Nguyên', '0359686971', '1', '2021-05-13', 'không có', '0'),
(21, '15', 'Phạm Minh Thọ', 'Nam', 'Tin Học', 'Lớp 12', '5300000', '2', 'Chủ nhật', 'Dạy chất lượng', '0369585731', '61', 'Nguyễn Văn F', '0356842135', '1', '2021-05-13', 'không có', '0'),
(22, '16', 'Phạm Minh Thuận', 'Nam', 'Toán', 'Lớp 9', '10000000', '3', 'Thứ 5', 'Dạy dễ hiểu', '0245689543', '51', 'Trần Trọng Nguyên', '0359686971', '1', '2021-05-13', 'không có', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanlop_trangthai`
--

CREATE TABLE `tbl_nhanlop_trangthai` (
  `trangthai_id` int(11) NOT NULL,
  `trangthai_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanlop_trangthai`
--

INSERT INTO `tbl_nhanlop_trangthai` (`trangthai_id`, `trangthai_name`) VALUES
(1, 'Chưa thanh toán'),
(2, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` int(11) NOT NULL,
  `provider` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_themgiasu_hienla`
--

CREATE TABLE `tbl_themgiasu_hienla` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hienla_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_themgiasu_hienla`
--

INSERT INTO `tbl_themgiasu_hienla` (`id`, `hienla_name`, `created_at`, `updated_at`) VALUES
(1, 'Sinh Viên', NULL, NULL),
(2, 'Giảng viên', NULL, NULL),
(3, 'Cử nhân', NULL, NULL),
(4, 'Kỹ sư', NULL, NULL),
(5, 'Thạc sĩ', NULL, NULL),
(6, 'Tiến sĩ', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_themgiasu_lopday`
--

CREATE TABLE `tbl_themgiasu_lopday` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lopday_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_themgiasu_lopday`
--

INSERT INTO `tbl_themgiasu_lopday` (`id`, `lopday_name`, `created_at`, `updated_at`) VALUES
(1, 'Lớp Lá', NULL, NULL),
(2, 'Lớp 1', NULL, NULL),
(3, 'Lớp 2', NULL, NULL),
(4, 'Lớp 3', NULL, NULL),
(5, 'Lớp 4', NULL, NULL),
(6, 'Lớp 5', NULL, NULL),
(7, 'Lớp 6', NULL, NULL),
(8, 'Lớp 7', NULL, NULL),
(9, 'Lớp 8', NULL, NULL),
(10, 'Lớp 9', NULL, NULL),
(11, 'Lớp 10', NULL, NULL),
(12, 'Lớp 11', NULL, NULL),
(13, 'Lớp 12', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_themgiasu_monday`
--

CREATE TABLE `tbl_themgiasu_monday` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `monday_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_themgiasu_monday`
--

INSERT INTO `tbl_themgiasu_monday` (`id`, `monday_name`, `created_at`, `updated_at`) VALUES
(1, 'Toán', NULL, NULL),
(2, 'Lý', NULL, NULL),
(3, 'Hóa', NULL, NULL),
(4, 'Văn', NULL, NULL),
(5, 'Anh', NULL, NULL),
(6, 'Vẽ', NULL, NULL),
(7, 'Sinh', NULL, NULL),
(8, 'Sử', NULL, NULL),
(9, 'Địa', NULL, NULL),
(10, 'Tin Học', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_themgiasu_ngayday`
--

CREATE TABLE `tbl_themgiasu_ngayday` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ngayday_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_themgiasu_ngayday`
--

INSERT INTO `tbl_themgiasu_ngayday` (`id`, `ngayday_name`, `created_at`, `updated_at`) VALUES
(1, 'Thứ 2', NULL, NULL),
(2, 'Thứ 3', NULL, NULL),
(3, 'Thứ 4', NULL, NULL),
(4, 'Thứ 5', NULL, NULL),
(5, 'Thứ 6', NULL, NULL),
(6, 'Thứ 7', NULL, NULL),
(7, 'Chủ Nhật', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_themgiasu_thuday`
--

CREATE TABLE `tbl_themgiasu_thuday` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thuday_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_themgiasu_thuday`
--

INSERT INTO `tbl_themgiasu_thuday` (`id`, `thuday_name`, `created_at`, `updated_at`) VALUES
(1, 'Thứ 2', NULL, NULL),
(2, 'Thứ 3', NULL, NULL),
(3, 'Thứ 4', NULL, NULL),
(4, 'Thứ 5', NULL, NULL),
(5, 'Thứ 6', NULL, NULL),
(6, 'Thứ 7', NULL, NULL),
(7, 'Chủ nhật', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_danhsachgiasu`
--
ALTER TABLE `tbl_danhsachgiasu`
  ADD PRIMARY KEY (`danhsachgiasu_id`);

--
-- Chỉ mục cho bảng `tbl_danhsachgiasu_gender`
--
ALTER TABLE `tbl_danhsachgiasu_gender`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_danhsachlophoc`
--
ALTER TABLE `tbl_danhsachlophoc`
  ADD PRIMARY KEY (`danhsachlophoc_id`);

--
-- Chỉ mục cho bảng `tbl_danhsachuser`
--
ALTER TABLE `tbl_danhsachuser`
  ADD PRIMARY KEY (`danhsachuser_id`);

--
-- Chỉ mục cho bảng `tbl_danhsachuser_gender`
--
ALTER TABLE `tbl_danhsachuser_gender`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_nhangs`
--
ALTER TABLE `tbl_nhangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_nhanlop`
--
ALTER TABLE `tbl_nhanlop`
  ADD PRIMARY KEY (`nhanlop_id`);

--
-- Chỉ mục cho bảng `tbl_nhanlop_trangthai`
--
ALTER TABLE `tbl_nhanlop_trangthai`
  ADD PRIMARY KEY (`trangthai_id`);

--
-- Chỉ mục cho bảng `tbl_themgiasu_hienla`
--
ALTER TABLE `tbl_themgiasu_hienla`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_themgiasu_lopday`
--
ALTER TABLE `tbl_themgiasu_lopday`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_themgiasu_monday`
--
ALTER TABLE `tbl_themgiasu_monday`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_themgiasu_ngayday`
--
ALTER TABLE `tbl_themgiasu_ngayday`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_themgiasu_thuday`
--
ALTER TABLE `tbl_themgiasu_thuday`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_danhsachgiasu`
--
ALTER TABLE `tbl_danhsachgiasu`
  MODIFY `danhsachgiasu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `tbl_danhsachgiasu_gender`
--
ALTER TABLE `tbl_danhsachgiasu_gender`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_danhsachlophoc`
--
ALTER TABLE `tbl_danhsachlophoc`
  MODIFY `danhsachlophoc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_danhsachuser`
--
ALTER TABLE `tbl_danhsachuser`
  MODIFY `danhsachuser_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_danhsachuser_gender`
--
ALTER TABLE `tbl_danhsachuser_gender`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_nhangs`
--
ALTER TABLE `tbl_nhangs`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanlop`
--
ALTER TABLE `tbl_nhanlop`
  MODIFY `nhanlop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanlop_trangthai`
--
ALTER TABLE `tbl_nhanlop_trangthai`
  MODIFY `trangthai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_themgiasu_hienla`
--
ALTER TABLE `tbl_themgiasu_hienla`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_themgiasu_lopday`
--
ALTER TABLE `tbl_themgiasu_lopday`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_themgiasu_monday`
--
ALTER TABLE `tbl_themgiasu_monday`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_themgiasu_ngayday`
--
ALTER TABLE `tbl_themgiasu_ngayday`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_themgiasu_thuday`
--
ALTER TABLE `tbl_themgiasu_thuday`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
