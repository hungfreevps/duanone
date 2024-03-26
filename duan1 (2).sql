-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2023 lúc 05:30 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'phim hay', 4, 1, '2023-12-10'),
(2, 'hello', 2, 1, '2023-12-10'),
(3, 'phim hay', 2, 2, '2023-12-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `id` int(11) NOT NULL,
  `id_phim` int(255) NOT NULL,
  `A2` varchar(11) NOT NULL,
  `A3` varchar(11) NOT NULL,
  `A4` varchar(11) NOT NULL,
  `A5` varchar(11) NOT NULL,
  `A6` varchar(11) NOT NULL,
  `A7` varchar(11) NOT NULL,
  `A8` varchar(11) NOT NULL,
  `A9` varchar(11) NOT NULL,
  `A10` varchar(11) NOT NULL,
  `A11` varchar(11) NOT NULL,
  `A12` varchar(11) NOT NULL,
  `A13` varchar(11) NOT NULL,
  `A14` varchar(11) NOT NULL,
  `A15` varchar(11) NOT NULL,
  `A16` varchar(11) NOT NULL,
  `A17` varchar(11) NOT NULL,
  `B1` varchar(11) NOT NULL,
  `B2` varchar(11) NOT NULL,
  `B3` varchar(11) NOT NULL,
  `B4` varchar(11) NOT NULL,
  `B5` varchar(11) NOT NULL,
  `B6` varchar(11) NOT NULL,
  `B7` varchar(11) NOT NULL,
  `B8` varchar(11) NOT NULL,
  `B9` varchar(11) NOT NULL,
  `B10` varchar(11) NOT NULL,
  `B11` varchar(11) NOT NULL,
  `B12` varchar(11) NOT NULL,
  `B13` varchar(11) NOT NULL,
  `B14` varchar(11) NOT NULL,
  `B15` varchar(11) NOT NULL,
  `B16` varchar(11) NOT NULL,
  `B17` varchar(11) NOT NULL,
  `B18` varchar(11) NOT NULL,
  `C1` varchar(11) NOT NULL,
  `C2` varchar(11) NOT NULL,
  `C3` varchar(11) NOT NULL,
  `C4` varchar(11) NOT NULL,
  `C5` varchar(11) NOT NULL,
  `C6` varchar(11) NOT NULL,
  `C7` varchar(11) NOT NULL,
  `C8` varchar(11) NOT NULL,
  `C9` varchar(11) NOT NULL,
  `C10` varchar(11) NOT NULL,
  `C11` varchar(11) NOT NULL,
  `C12` varchar(11) NOT NULL,
  `C13` varchar(11) NOT NULL,
  `C14` varchar(11) NOT NULL,
  `C15` varchar(11) NOT NULL,
  `C16` varchar(11) NOT NULL,
  `C17` varchar(11) NOT NULL,
  `C18` varchar(11) NOT NULL,
  `D1` varchar(11) NOT NULL,
  `D2` varchar(11) NOT NULL,
  `D3` varchar(11) NOT NULL,
  `D4` varchar(11) NOT NULL,
  `D5` varchar(11) NOT NULL,
  `D6` varchar(11) NOT NULL,
  `D7` varchar(11) NOT NULL,
  `D8` varchar(11) NOT NULL,
  `D9` varchar(11) NOT NULL,
  `D10` varchar(11) NOT NULL,
  `D11` varchar(11) NOT NULL,
  `D12` varchar(11) NOT NULL,
  `D13` varchar(11) NOT NULL,
  `D14` varchar(11) NOT NULL,
  `D15` varchar(11) NOT NULL,
  `D16` varchar(11) NOT NULL,
  `D17` varchar(11) NOT NULL,
  `D18` varchar(11) NOT NULL,
  `E1` varchar(11) NOT NULL,
  `E2` varchar(11) NOT NULL,
  `E3` varchar(11) NOT NULL,
  `E4` varchar(11) NOT NULL,
  `E5` varchar(11) NOT NULL,
  `E6` varchar(11) NOT NULL,
  `E7` varchar(11) NOT NULL,
  `E8` varchar(11) NOT NULL,
  `E9` varchar(11) NOT NULL,
  `E10` varchar(11) NOT NULL,
  `E11` varchar(11) NOT NULL,
  `E12` varchar(11) NOT NULL,
  `E13` varchar(11) NOT NULL,
  `E14` varchar(11) NOT NULL,
  `E15` varchar(11) NOT NULL,
  `E16` varchar(11) NOT NULL,
  `E17` varchar(11) NOT NULL,
  `E18` varchar(11) NOT NULL,
  `F1` varchar(11) NOT NULL,
  `F2` varchar(11) NOT NULL,
  `F3` varchar(11) NOT NULL,
  `F4` varchar(11) NOT NULL,
  `F5` varchar(11) NOT NULL,
  `F6` varchar(11) NOT NULL,
  `F7` varchar(11) NOT NULL,
  `F8` varchar(11) NOT NULL,
  `F9` varchar(11) NOT NULL,
  `F10` varchar(11) NOT NULL,
  `F11` varchar(11) NOT NULL,
  `F12` varchar(11) NOT NULL,
  `F13` varchar(11) NOT NULL,
  `F14` varchar(11) NOT NULL,
  `F15` varchar(11) NOT NULL,
  `F16` varchar(11) NOT NULL,
  `F17` varchar(11) NOT NULL,
  `F18` varchar(11) NOT NULL,
  `G1` varchar(11) NOT NULL,
  `G2` varchar(11) NOT NULL,
  `G3` varchar(11) NOT NULL,
  `G4` varchar(11) NOT NULL,
  `G5` varchar(11) NOT NULL,
  `G6` varchar(11) NOT NULL,
  `G7` varchar(11) NOT NULL,
  `G8` varchar(11) NOT NULL,
  `G9` varchar(11) NOT NULL,
  `G10` varchar(11) NOT NULL,
  `G11` varchar(11) NOT NULL,
  `G12` varchar(11) NOT NULL,
  `G13` varchar(11) NOT NULL,
  `G14` varchar(11) NOT NULL,
  `G15` varchar(11) NOT NULL,
  `G16` varchar(11) NOT NULL,
  `G17` varchar(11) NOT NULL,
  `G18` varchar(11) NOT NULL,
  `I3` varchar(11) NOT NULL,
  `I4` varchar(11) NOT NULL,
  `I5` varchar(11) NOT NULL,
  `I6` varchar(11) NOT NULL,
  `I7` varchar(11) NOT NULL,
  `I8` varchar(11) NOT NULL,
  `I9` varchar(11) NOT NULL,
  `I10` varchar(11) NOT NULL,
  `I11` varchar(11) NOT NULL,
  `I12` varchar(11) NOT NULL,
  `I13` varchar(11) NOT NULL,
  `I14` varchar(11) NOT NULL,
  `I15` varchar(11) NOT NULL,
  `I16` varchar(11) NOT NULL,
  `J5` varchar(11) NOT NULL,
  `J6` varchar(11) NOT NULL,
  `J7` varchar(11) NOT NULL,
  `J8` varchar(11) NOT NULL,
  `J9` varchar(11) NOT NULL,
  `J10` varchar(11) NOT NULL,
  `J11` varchar(11) NOT NULL,
  `J12` varchar(11) NOT NULL,
  `J13` varchar(11) NOT NULL,
  `J14` varchar(11) NOT NULL,
  `K5` varchar(11) NOT NULL,
  `K6` varchar(11) NOT NULL,
  `K7` varchar(11) NOT NULL,
  `K8` varchar(11) NOT NULL,
  `K9` varchar(11) NOT NULL,
  `K10` varchar(11) NOT NULL,
  `K11` varchar(11) NOT NULL,
  `K12` varchar(11) NOT NULL,
  `K13` varchar(11) NOT NULL,
  `K14` varchar(11) NOT NULL,
  `L6` varchar(11) NOT NULL,
  `L7` varchar(11) NOT NULL,
  `L8` varchar(11) NOT NULL,
  `L9` varchar(11) NOT NULL,
  `L10` varchar(11) NOT NULL,
  `L11` varchar(11) NOT NULL,
  `L12` varchar(11) NOT NULL,
  `L13` varchar(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`id`, `id_phim`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`, `B16`, `B17`, `B18`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`, `C10`, `C11`, `C12`, `C13`, `C14`, `C15`, `C16`, `C17`, `C18`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `D8`, `D9`, `D10`, `D11`, `D12`, `D13`, `D14`, `D15`, `D16`, `D17`, `D18`, `E1`, `E2`, `E3`, `E4`, `E5`, `E6`, `E7`, `E8`, `E9`, `E10`, `E11`, `E12`, `E13`, `E14`, `E15`, `E16`, `E17`, `E18`, `F1`, `F2`, `F3`, `F4`, `F5`, `F6`, `F7`, `F8`, `F9`, `F10`, `F11`, `F12`, `F13`, `F14`, `F15`, `F16`, `F17`, `F18`, `G1`, `G2`, `G3`, `G4`, `G5`, `G6`, `G7`, `G8`, `G9`, `G10`, `G11`, `G12`, `G13`, `G14`, `G15`, `G16`, `G17`, `G18`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I16`, `J5`, `J6`, `J7`, `J8`, `J9`, `J10`, `J11`, `J12`, `J13`, `J14`, `K5`, `K6`, `K7`, `K8`, `K9`, `K10`, `K11`, `K12`, `K13`, `K14`, `L6`, `L7`, `L8`, `L9`, `L10`, `L11`, `L12`, `L13`, `role`) VALUES
(100, 1, 'A2', 'A3', 'A4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(106, 2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(108, 3, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(109, 4, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(110, 5, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(111, 6, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(112, 7, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(113, 8, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(114, 9, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0),
(115, 10, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giochieu`
--

CREATE TABLE `giochieu` (
  `id` int(11) NOT NULL,
  `giochieu` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giochieu`
--

INSERT INTO `giochieu` (`id`, `giochieu`) VALUES
(1, '16:30'),
(2, '00:45'),
(3, '22:00'),
(4, '21:30'),
(7, '12:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `giave` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_ghe` int(255) NOT NULL,
  `id_giochieu` time NOT NULL,
  `tong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lsghe`
--

CREATE TABLE `lsghe` (
  `id` int(11) NOT NULL,
  `idphim` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `ghe1` int(11) NOT NULL,
  `ghe2` int(11) NOT NULL,
  `ghe3` int(11) NOT NULL,
  `tong` int(11) NOT NULL,
  `tenghe` varchar(255) NOT NULL,
  `giochieu` varchar(20) NOT NULL,
  `ngaychieu` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lsghe`
--

INSERT INTO `lsghe` (`id`, `idphim`, `iduser`, `ghe1`, `ghe2`, `ghe3`, `tong`, `tenghe`, `giochieu`, `ngaychieu`, `trangthai`) VALUES
(1, 1, 2, 3, 0, 0, 75000, 'A4, A3, A2, A4, A3, A2, ', '22:00', '2023-12-21', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id_momo` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idphim` int(11) NOT NULL,
  `partner_code` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `order_info` varchar(255) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(255) NOT NULL,
  `code_cart` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `namphathanh`
--

CREATE TABLE `namphathanh` (
  `id` int(11) NOT NULL,
  `nam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `namphathanh`
--

INSERT INTO `namphathanh` (`id`, `nam`) VALUES
(1, '2018'),
(2, '2000'),
(3, '1999'),
(4, '2010'),
(5, '2004');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngaychieu`
--

CREATE TABLE `ngaychieu` (
  `id` int(11) NOT NULL,
  `ngaychieu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ngaychieu`
--

INSERT INTO `ngaychieu` (`id`, `ngaychieu`) VALUES
(1, '2022-05-19'),
(2, '2023-11-23'),
(3, '2023-12-29'),
(4, '2023-12-18'),
(5, '2023-12-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `idphim` int(11) NOT NULL,
  `tenphim` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sao` int(11) NOT NULL,
  `id_theloai` int(255) NOT NULL,
  `id_namphathanh` int(255) NOT NULL,
  `id_quocgia` int(255) NOT NULL,
  `id_giochieu` int(255) NOT NULL,
  `id_ngaychieu` int(255) NOT NULL,
  `id_tacgia` int(235) NOT NULL,
  `thoiluong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`idphim`, `tenphim`, `mota`, `img`, `sao`, `id_theloai`, `id_namphathanh`, `id_quocgia`, `id_giochieu`, `id_ngaychieu`, `id_tacgia`, `thoiluong`) VALUES
(1, 'WONKA', 'Dựa trên nhân vật từ quyến sách gối đầu giường của các em nhỏ trên toàn thế giới \"Charlie và Nhà Máy Sôcôla\" và phiên bản phim điện ảnh cùng tên vào năm 2005, WONKA kể câu chuyện kỳ diệu về hành trình của nhà phát minh, ảo thuật gia và nhà sản xuất sôcôla', 'phim1.jpg', 5, 2, 1, 1, 3, 2, 1, '116 phút'),
(2, 'NGƯỜI MẶT TRỜI', '400 năm qua, loài Ma Cà Rồng đã bí mật sống giữa loài người trong hòa bình, nhưng hiểm họa bỗng ập đến khi một cô gái loài người phát hiện được thân phận của hai anh em Ma Cà Rồng. Người anh khát máu quyết săn lùng cô để bảo vệ bí mật giống loài, trong kh', 'phim2.jpg', 5, 1, 1, 1, 1, 1, 1, '115 phút'),
(3, 'CHÚA TỂ CỦA NHỮNG CHIẾC NHẪN - SỰ TRỞ VỀ CỦA NHÀ VUA', 'Chương cuối cùng của loạt phim Chúa Tể Của Những Chiếc Nhẫn mang tới trận chiến cuối cùng giữa thiện và ác cùng tương lai của Trung Địa. Frodo và Sam đến với Mordor trên hành trình phá hủy chiếc nhẫn, trong khi Aragon tiếp tục lãnh đạo nhóm của mình chống', 'phim3.jpg', 5, 5, 3, 2, 1, 4, 1, '120 phút'),
(4, 'ALIENOID: CUỘC CHIẾN XUYÊN KHÔNG', 'Năm 2022, hai người ngoài hành tinh là Guard (Kim Woo-bin) và Thunder sinh sống tại Trái Đất đang tìm kiếm những tù nhân vượt ngục, vốn bị họ giam giữ trong cơ thể con người. Cảnh sát Moon (So Ji-sub) vô tình trở thành đối tượng bị truy đuổi mà không rõ l', 'phim4.jpg', 5, 6, 3, 4, 1, 3, 1, '143 phút'),
(5, 'ĐẤU TRƯỜNG SINH TỬ: KHÚC HÁT CỦA CHIM CA VÀ RẮN ĐỘC', 'Đấu Trường Sinh Tử: Khúc Hát Của Chim Ca Và Rắn Độc là phần tiền truyện của mạch truyện chính, lấy bối cảnh 64 năm trước phần phim đầu tiên. Mạch phim theo chân Coriolanus Snow trẻ tuổi, chính là vị Tổng thống Snow trong loạt phim sau này. Lúc này Coriola', 'phim6.jpg', 5, 1, 2, 4, 3, 1, 1, '157 phút'),
(6, 'THIẾU NIÊN VÀ CHIM DIỆC', 'Đến từ Studio Ghibli và đạo diễn Miyazaki Hayao, bộ phim là câu chuyện về hành trình kỳ diệu của cậu thiếu niên Mahito trong một thế giới hoàn toàn mới lạ. Trải qua nỗi đau mất mẹ cùng mối quan hệ chẳng mấy vui vẻ với gia đình cũng như bạn học, Mahito dần', 'phim7.jpg', 5, 6, 3, 3, 1, 3, 1, '140 phút'),
(7, 'YÊU LẠI VỢ NGẦU', 'Cặp vợ chồng trẻ No Jung Yeol (Kang Ha-neul) và Hong Na Ra (Jung So-min) từ cuộc sống hôn nhân màu hồng dần “hiện nguyên hình” trở thành cái gai trong mắt đối phương với vô vàn thói hư, tật xấu. Không thể đi đến tiếng nói chung, Jung Yeol và Na Ra quyết đ', 'phim8.jpg', 4, 6, 3, 3, 3, 2, 1, '119 phút'),
(8, 'ĐIỀU ƯỚC', '“Wish” là bộ phim hoạt hình kỷ niệm 100 năm thành lập của Walt Disney Studios (sự kiện toàn cầu D100). \"Điều Ước\" lấy bối cảnh tại một vương quốc diệu kỳ tên Rosas. Ở đây, Asha - một cô gái thông minh và mơ mộng đã ước một điều ước quá sức mạnh mẽ, đến nỗ', 'phim9.jpg', 4, 5, 5, 2, 7, 5, 1, '130 phút'),
(9, 'CHIẾM ĐOẠT', 'Kể về người vợ của một gia đình thượng lưu thuê cô bảo mẫu “trong mơ” để chăm sóc con trai mình. Nhưng cô không ngờ rằng, phía sau sự trong sáng, tinh khiết kia, cô bảo mẫu luôn che giấu âm mưu nhằm phá hoại hạnh phúc gia đình và khiến cuộc sống của cô th', 'phim10.jpg', 4, 6, 2, 3, 2, 3, 1, '114 phút'),
(10, 'BỖNG DƯNG TRÚNG MÁNH', 'Bỗng Dưng Trúng Mánh là câu chuyện từ cá biệt toàn trường hoá tài phiệt học đường của Lee Kang-jin - một học sinh vốn thường xuyên bị bắt nạt. Tình cờ nhặt được chiếc phong bì chứa đầy tiền mặt của ông trùm cho vay nặng lãi Rang, cuộc đời Kang-jin đã hoàn', 'phim11.jpg', 5, 2, 4, 1, 2, 3, 1, '142 phút');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

CREATE TABLE `quocgia` (
  `id` int(11) NOT NULL,
  `quocgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`id`, `quocgia`) VALUES
(1, 'Việt Nam'),
(2, 'Trung Quốc'),
(3, 'Japan'),
(4, 'Lào'),
(5, 'Thái Lan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `id` int(11) NOT NULL,
  `tacgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`id`, `tacgia`) VALUES
(1, 'Admin'),
(2, 'Lâm Hùng'),
(3, 'Anh Nguyen'),
(4, 'Đông Shigeo'),
(5, 'Yua Mikami');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `email`, `pass`, `sdt`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '123', '0987654321', 1),
(2, 'Anh Nguyen', 'anh@gmail.com', '123', '0987654321', 0),
(3, 'Hùng', 'hung@gmail.com', '123', '00641262162', 0),
(4, 'Đông', 'dong@gmail.com', '123', '04774267246', 0),
(5, 'Đức', 'duc@gmail.com', '123', '06763461277', 0),
(30, 'Đức1', 'duc@gmail.com', '123', '06763461277', 0),
(31, 'Đức2', 'duc@gmail.com', '123', '06763461277', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `theloai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `theloai`) VALUES
(1, 'Kinh Dị'),
(2, 'Hài Hước'),
(3, 'Hành Động'),
(5, 'Khoa Học Viễn Tưởng'),
(6, 'Tình Cảm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bl_phim` (`idpro`),
  ADD KEY `lk_bl_tk` (`iduser`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phim` (`id_phim`);

--
-- Chỉ mục cho bảng `giochieu`
--
ALTER TABLE `giochieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ghe` (`id_ghe`);

--
-- Chỉ mục cho bảng `lsghe`
--
ALTER TABLE `lsghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_phim` (`idphim`),
  ADD KEY `id_phim_2` (`idphim`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id_momo`),
  ADD KEY `iduser` (`iduser`,`idphim`),
  ADD KEY `lk_idphim2` (`idphim`);

--
-- Chỉ mục cho bảng `namphathanh`
--
ALTER TABLE `namphathanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ngaychieu`
--
ALTER TABLE `ngaychieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`idphim`),
  ADD KEY `id_theloai` (`id_theloai`),
  ADD KEY `id_namphathanh` (`id_namphathanh`),
  ADD KEY `id_quocgia` (`id_quocgia`),
  ADD KEY `id_giochieu` (`id_giochieu`,`id_ngaychieu`,`id_tacgia`),
  ADD KEY `id_tacgia` (`id_tacgia`),
  ADD KEY `id_ngaychieu` (`id_ngaychieu`);

--
-- Chỉ mục cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `giochieu`
--
ALTER TABLE `giochieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lsghe`
--
ALTER TABLE `lsghe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `namphathanh`
--
ALTER TABLE `namphathanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ngaychieu`
--
ALTER TABLE `ngaychieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `idphim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_bl_phim` FOREIGN KEY (`idpro`) REFERENCES `phim` (`idphim`),
  ADD CONSTRAINT `lk_bl_tk` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD CONSTRAINT `id_phim` FOREIGN KEY (`id_phim`) REFERENCES `phim` (`idphim`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `lk_idghe` FOREIGN KEY (`id_ghe`) REFERENCES `ghe` (`id`);

--
-- Các ràng buộc cho bảng `lsghe`
--
ALTER TABLE `lsghe`
  ADD CONSTRAINT `id_phim1` FOREIGN KEY (`idphim`) REFERENCES `phim` (`idphim`),
  ADD CONSTRAINT `id_user1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `momo`
--
ALTER TABLE `momo`
  ADD CONSTRAINT `lk_idphim2` FOREIGN KEY (`idphim`) REFERENCES `phim` (`idphim`),
  ADD CONSTRAINT `lk_iduser2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`id_quocgia`) REFERENCES `quocgia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phim_ibfk_2` FOREIGN KEY (`id_giochieu`) REFERENCES `giochieu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phim_ibfk_3` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phim_ibfk_4` FOREIGN KEY (`id_tacgia`) REFERENCES `tacgia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phim_ibfk_5` FOREIGN KEY (`id_namphathanh`) REFERENCES `namphathanh` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phim_ibfk_6` FOREIGN KEY (`id_ngaychieu`) REFERENCES `ngaychieu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
