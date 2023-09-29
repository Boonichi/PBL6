-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2010 at 01:18 SA
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hard`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoadon`
--

DROP TABLE IF EXISTS `ct_hoadon`;
CREATE TABLE IF NOT EXISTS `ct_hoadon` (
  `So_hoa_don` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_sp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `So_luong` int(11) NOT NULL,
  `Don_gia` int(11) NOT NULL,
  PRIMARY KEY (`So_hoa_don`,`Ma_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`So_hoa_don`, `Ma_sp`, `So_luong`, `Don_gia`) VALUES
('D001', 'CP-IC001', 2, 120),
('D001', 'DH-GF005', 3, 484),
('D001', 'M-AS005', 1, 120),
('D001', 'MT-SS004', 2, 200),
('D002', 'M-AS004', 1, 134),
('D002', 'M-MS002', 5, 1000),
('D002', 'MT-SS002', 3, 330),
('D003', 'M-AT001', 1, 194),
('D003', 'MT-LG001', 3, 240),
('D003', 'TBL-S004', 10, 450),
('D004', 'CP-IP005', 10, 1800),
('D004', 'DH-GF001', 5, 170),
('D004', 'M-BS009', 1, 178),
('D004', 'M-IT002', 2, 244);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `So_hoa_don` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ngay_HD` date NOT NULL,
  `Ma_khach_hang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Tri_gia` double NOT NULL,
  PRIMARY KEY (`So_hoa_don`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`So_hoa_don`, `Ngay_HD`, `Ma_khach_hang`, `Tri_gia`) VALUES
('D001', '2010-07-20', '1', 924),
('D002', '2010-07-20', '2', 1464),
('D003', '2010-07-23', '3', 884),
('D004', '2010-07-10', '4', 2392);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

DROP TABLE IF EXISTS `khach_hang`;
CREATE TABLE IF NOT EXISTS `khach_hang` (
  `Ma_khach_hang` int(5) NOT NULL AUTO_INCREMENT,
  `Ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_cv` int(5) NOT NULL,
  `Mat_khau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phai` tinyint(1) NOT NULL,
  `Dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Ma_khach_hang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`Ma_khach_hang`, `Ten_khach_hang`, `Ma_cv`, `Mat_khau`, `Phai`, `Dia_chi`, `Dien_thoai`, `Email`) VALUES
(1, 'Phạm Thị Hà Thu', 0, '', 1, '64 Ấp Chòi Dúng - Bình Mỹ - Tân Uyên - Bình Dương', '9874125', 'hathu90@yahoo.com'),
(2, 'Thái Thị Trúc Uyên', 0, '', 1, 'Trương Công Định - Vũng Tàu', '8351056', 'trucuyen@yahoo.com'),
(3, 'Phạm Thị Nhung', 0, '', 1, '56 Đinh Tiên Hoàng quận 1', '9745698', 'ptnhung@hcmuns.edu.vn'),
(4, 'Nguyễn Khắc Thiện', 0, '', 0, '12bis Đường 3-2 quận 10', '8769128', 'nkthien@hcmuns.edu.vn'),
(5, 'Tô Trần Hồ Giảng', 0, '', 0, '75 Nguyễn Kiệm quận Gò Vấp', '5792564', 'tthgiang@hcmuns.edu.vn'),
(9, 'hong phu', 0, '123', 0, '207/16/5A', '01267008420', 'darknight1611@yahoo.com'),
(7, 'Trần Quốc Thông', 0, '', 0, '123 Trần Hưng Đạo', '8754123', 'TQThong@hcmuns.edu.vn'),
(8, 'Nguyễn Anh Tuấn', 0, '123', 0, '1/2bis Nơ Trang Long Q.BT TP.HCM', '8753159', 'tuan@yahoo.com'),
(17, 'Nguyễn Hồng Phú', 1, '123', 0, '207/16/5A21321321', '01267008420', 'phu@yahoo.com'),
(18, 'Nguyen hong phu', 0, '123', 0, '', '2312412', 'phu2@yahoo.com'),
(19, 'fsdafsa', 0, '123', 0, '', '23421', 'ds@dsad.com');

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

DROP TABLE IF EXISTS `loai_sp`;
CREATE TABLE IF NOT EXISTS `loai_sp` (
  `Ma_loai_sp` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_loai_sp` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Ma_loai_sp`),
  UNIQUE KEY `Ten_loai_sp_2` (`Ten_loai_sp`),
  UNIQUE KEY `Ten_loai_sp_3` (`Ten_loai_sp`),
  KEY `Ten_loai_sp` (`Ten_loai_sp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai_sp`
--

INSERT INTO `loai_sp` (`Ma_loai_sp`, `Ten_loai_sp`) VALUES
('MAIN', 'MainBoard'),
('CPU', 'Bộ vi xử lý'),
('MONITOR', 'Màn hình'),
('CASE', 'Thùng máy tính'),
('RAM', 'Bộ nhớ RAM'),
('CARDDOHOA', 'Card đồ họa'),
('THIETBILUU', 'Thiết bị lưu trữ');

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

DROP TABLE IF EXISTS `nhom`;
CREATE TABLE IF NOT EXISTS `nhom` (
  `Ma_cv` int(5) NOT NULL,
  `Ten_cv` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Ma_cv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhom`
--

INSERT INTO `nhom` (`Ma_cv`, `Ten_cv`) VALUES
(1, 'Quản trị viên'),
(0, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

DROP TABLE IF EXISTS `quangcao`;
CREATE TABLE IF NOT EXISTS `quangcao` (
  `Ma_qc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_qc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Hien_thi` int(11) NOT NULL,
  `Lien_ket_qc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh_qc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Ma_qc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`Ma_qc`, `Ten_qc`, `Hien_thi`, `Lien_ket_qc`, `Hinh_qc`) VALUES
('003', 'http://www.intel.com/?en_US_01', 1, 'Asus', 'flash/qc_as001.swf'),
('002', 'http://tin32.com', 1, 'Sinh viên', 'flash/88_1273629604_4644096_maysinhvienDSV007.swf'),
('001', 'http://intel.com', 1, 'Intel', 'flash/qc_it001.swf');

-- --------------------------------------------------------

--
-- Table structure for table `thietbi`
--

DROP TABLE IF EXISTS `thietbi`;
CREATE TABLE IF NOT EXISTS `thietbi` (
  `Ma_tb` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_tb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ma_loai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ten_hieu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dac_tinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Gia_ban` int(10) NOT NULL,
  `Bao_hanh` int(100) NOT NULL,
  `So_luong` int(6) NOT NULL,
  `Hinh_anh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ngay_nhap` date NOT NULL,
  PRIMARY KEY (`Ma_tb`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thietbi`
--

INSERT INTO `thietbi` (`Ma_tb`, `Ten_tb`, `Ma_loai`, `Ten_hieu`, `Dac_tinh`, `Gia_ban`, `Bao_hanh`, `So_luong`, `Hinh_anh`, `Ngay_nhap`) VALUES
('M-AS001', 'ASUS Mainboard P4VP-MX', 'MAIN', 'ASUS', 'MOTADACTINH ASUS P4VP-MX - VIA chipset (Prescott Ready) - DDRam 266 VGA & Sound, NIC onboard; 01 AGP 4X; Upto P4 3.06GHz; 533 FSB', 60, 36, 15, 'thietbiroi/m_as001.jpg', '0000-00-00'),
('M-AS002', 'ASUS Mainboard P4S533-MX', 'MAIN', 'ASUS', 'MOTADACTINH ASUS P4S533-MX - SiS 651 (HT support) - support DDRam 333; VGA & Sound & NIC onboard; 01 AGP 4X; CPU upto P4 3.06GHz; 533 FSB; USB 2.0; ATX', 78, 36, 17, 'thietbiroi/m_as002.jpg', '0000-00-00'),
('M-AS003', 'ASUS Mainboard P4PE-X', 'MAIN', 'ASUS', 'ASUS P4BGV533 - Intel 845GV (S/ket 478) - support DDRam; VGA & Sound & LAN onboard; CPU upto P4 3.06 GHz; USB 2,0; 400/ 533MHz FSB; ATA 100; ATX Form factor', 124, 36, 25, 'thietbiroi/m_as003.jpg', '0000-00-00'),
('M-AS004', 'ASUS Mainboard P4PE-X', 'MAIN', 'ASUS', 'MOTADACTINH ASUS P4PE-X - Intel 845PE (support HT) - DDRam 400; Sound 6 channel; 01 AGP 4X; Upto 3.06GHz; 533 / 800 FSB', 124, 36, 19, 'thietbiroi/m_as004.jpg', '0000-00-00'),
('M-AS005', 'ASUS Mainboard P4P8X', 'MAIN', 'ASUS', 'MOTADACTINH ASUS P4P8X - Intel 865P (support HT) - Dual DDRam 333; 01 AGP 8X; Serial ATA; Sound 6 Channel; CPU Upto 3.0GHz; 400 / 533 FSB', 120, 36, 26, 'thietbiroi/m_as005.jpg', '0000-00-00'),
('M-BS009', 'BIOSTAR Mainboard P4TSP-D2', 'MAIN', 'BIOSTAR', 'BIOSTAR P4TSP-D2 - Intel 848 (Prescott Ready) - support DDRam 333; Sound 6 Channel & NIC onboard; CPU upto P4 3.2GHz; 533 / 800 FSB; ATA 133; ATX form', 178, 36, 14, 'thietbiroi/m_bs009.jpg', '0000-00-00'),
('M-BS008', 'BIOSTAR Mainboard P4TDQ', 'MAIN', 'BIOSTAR', 'BIOSTAR P4TDQ - Intel 845GV (533FSB) - DDRam 333; VGA & Sound & NIC onboard; CPU upto P4 2.8GHz; 533 FSB', 156, 36, 15, 'thietbiroi/m_bs008.jpg', '0000-00-00'),
('M-BS006', 'BIOSTAR Mainboard 8668', 'MAIN', 'BIOSTAR', 'BIOSTAR 8668 - VIA 266 (Prescott Ready) - support DDRam; VGA & Sound & NIC onboard; 01 AGP 4X; CPU upto P4 2.8GHz; 533 FSB; ATA 133; ATX', 156, 36, 15, 'thietbiroi/m_bs006.jpg', '0000-00-00'),
('M-AT001', 'ALBATRON Mainboard P4M266A', 'MAIN', 'ALBATRON', 'ALBATRON P4M266A Pro - VIA 266 (HT support) - support DDRam; VGA & Sound & NIC onboard; 01 AGP 4X; CPU upto P4 3.06GHz; 533 FSB; ATA 133; ATX', 194, 36, 5, 'thietbiroi/m_at001.jpg', '0000-00-00'),
('M-AT002', 'ALBATRON Mainboard PM845GV1-C', 'MAIN', 'ALBATRON', 'ALBATRON PM845GV1-C - Intel 845GV (S/ket 478) - support DDRam; VGA & Sound onboard; CPU upto P4 3.06GHz; 400 / 533 FSB; ATX', 180, 36, 15, 'thietbiroi/m_at002.jpg', '0000-00-00'),
('M-AT003', 'ALBATRON Mainboard PX845EV1 Pro', 'MAIN', 'ALBATRON', 'ALBATRON PX845EV1 Pro - Intel 845E (S/ket 478) - support DDRam 333; Sound 6 Channel & NIC onboard; CPU upto P4 3.06GHz; 400/533 FSB; ATA100; ATX', 167, 36, 12, 'thietbiroi/m_at003.jpg', '0000-00-00'),
('M-MS001', 'MSI Mainboard 6787', 'MAIN', 'MSI', 'MSI 6787 - VIA chipset - support DDRam 266; VGA & Sound, NIC onboard; CPU upto P4 2.8GHz; 400 / 533 FSB', 120, 36, 12, 'thietbiroi/m_ms001.jpg', '0000-00-00'),
('M-MS002', 'MSI Mainboard 6714', 'MAIN', 'MSI', 'MSI 6714 - Intel 845GV (support HT) - DDRam 333; VGA & Sound, NIC onboard; no AGP; CPU upto P4 3.06GHz; ATX', 200, 36, 12, 'thietbiroi/m_ms002.jpg', '0000-00-00'),
('M-MS003', 'MSI Mainboard 6580 Neo', 'MAIN', 'MSI', 'MSI 6580 Neo - Intel 845PE (support HT) - DDRam 400; Sound 6 channel; 01 AGP 4X; Upto 3.06GHz; 533 / 800 FSB', 160, 36, 22, 'thietbiroi/m_ms003.jpg', '0000-00-00'),
('M-IT001', 'INTEL Mainboard 845EPI', 'MAIN', 'INTEL', 'INTEL 845EPI - Intel 845E (S/ket 478) - support DDRam; Sound 6 Channel onboard; CPU upto P4 3.06GHz; 533 FSB; ATA100; ATX', 166, 36, 12, 'thietbiroi/m_it001.jpg', '0000-00-00'),
('M-IT002', 'INTEL Mainboard 845GVSR', 'MAIN', 'INTEL', 'INTEL 845GVSR - Intel 845GV (S/ket 478) - support DDRam 333; VGA & Soundcard onboard; CPU upto P4 2.8GHz; 400/533 FSB; ATA100; ATX', 122, 36, 9, 'thietbiroi/m_it002.jpg', '0000-00-00'),
('M-IT003', 'INTEL Mainboard 845PEBT2', 'MAIN', 'INTEL', 'INTEL 845PEBT2 - Intel 845PE (533FSB) - support DDRam 266/333; Sound 6 Channel onboard; CPU upto P4 3.06GHz; 400 / 533 FSB', 130, 36, 12, 'thietbiroi/m_as003.jpg', '0000-00-00'),
('M-IT004', 'INTEL Mainboard D865PERL', 'MAIN', 'INTEL', 'INTEL D865PERL - Intel 865PE (HT support) - Dual DDRam 400; 01 AGP 8X; Serial ATA; Sound 6 Channel; Upto 3.2G; 533/ 800 FSB', 144, 36, 11, 'thietbiroi/m_it004.jpg', '0000-00-00'),
('M-IT005', 'INTEL Mainboard D865GBF', 'MAIN', 'INTEL', 'INTEL D865GBF - Intel 865G (HT support) - Dual DDRam 400; VGA & Sound 6 Channel; 01 AGP 8X; Serial ATA; Upto 3.2G; 533/ 800 FSB', 144, 36, 12, 'thietbiroi/m_it005.jpg', '0000-00-00'),
('CP-IC001', 'Intel Celeron 1.8GHz', 'CPU', 'Intel Celeron', 'Intel Celeron 1.7 GHz; 128Kb Cache; bus 400MHz', 60, 36, 12, 'thietbiroi/cp_ic001.jpg', '0000-00-00'),
('CP-IC002', 'Intel Celeron 2.0GHz', 'CPU', 'Intel Celeron', 'Intel Celeron 2.0 GHz; 128Kb Cache; bus 400MHz', 56, 36, 12, 'thietbiroi/cp_ic002.jpg', '0000-00-00'),
('CP-IC003', 'Intel Celeron 2.4GHz', 'CPU', 'Intel Celeron', 'Intel Celeron 2.0 GHz; 128Kb Cache; bus 400MHz', 70, 36, 12, 'thietbiroi/cp_ic003.jpg', '0000-00-00'),
('CP-IC004', 'Intel Celeron 2.4GHz', 'CPU', 'Intel Celeron', 'Intel Celeron 2.4 GHz; 128Kb Cache; bus 400MHz', 60, 36, 11, 'thietbiroi/cp_ic004.jpg', '0000-00-00'),
('CP-IP001', 'Intel Pentium 4 1.7 GHz', 'CPU', 'Intel Pentium', 'Intel Pentium 4 1.7 GHz; 256Kb Cache; bus 400MHz', 130, 36, 8, 'thietbiroi/cp_ip001.jpg', '0000-00-00'),
('CP-IP002', 'Intel Pentium 4 1.8 GHz', 'CPU', 'Intel Pentium', 'Intel Pentium 4 1.8 GHz; 256Kb Cache; bus 400MHz', 130, 36, 23, 'thietbiroi/cp_ip002.jpg', '0000-00-00'),
('CP-IP003', 'Intel Pentium 4 1.8 GHz - 512K', 'CPU', 'Intel Pentium', 'Intel Pentium 4 1.8 GHz; 512Kb Cache; bus 400MHz', 130, 36, 11, 'thietbiroi/cp_ip003.jpg', '0000-00-00'),
('CP-IP004', 'Intel Pentium 4 2.0 GHz - 512K', 'CPU', 'Intel Pentium', 'Intel Pentium 4 2.0 GHz; 512Kb Cache; bus 400MHz', 120, 36, 12, 'thietbiroi/cp_ip004.jpg', '0000-00-00'),
('CP-IP005', 'Intel Pentium 4 2.8 GHz', 'CPU', 'Intel Pentium', 'Intel Pentium 4 2.8 GHz; 512Kb Cache; bus 533MHz', 180, 36, 19, 'thietbiroi/cp_ip005.jpg', '0000-00-00'),
('MT-LG001', 'LG Studioworks Monitor 15" (505G)', 'MONITOR', 'LG', 'LG Studioworks 15" (505G) - Made in Việt Nam', 80, 24, 9, 'thietbiroi/mt_lg001.jpg', '0000-00-00'),
('MT-LG002', 'LG Studioworks Monitor 17" (E710)', 'MONITOR', 'LG', 'LG Studioworks 17" (E710) - Made in China ', 120, 24, 3, 'thietbiroi/mt_LG002.jpg', '0000-00-00'),
('MT-LG003', 'LG Studioworks Monitor 17" (T710SH)', 'MONITOR', 'LG', 'LG Studioworks 17" (T710SH) - Siêu phẳng - Made in Việt Nam', 100, 24, 9, 'thietbiroi/mt_lg003.jpg', '0000-00-00'),
('MT-LG004', 'LG Studioworks Monitor 17" (F700B)', 'MONITOR', 'LG', 'LG Studioworks 17" (F700B) - Phẳng tuyệt đối - Made in Indonesia', 98, 24, 22, 'thietbiroi/mt_lg004.jpg', '0000-00-00'),
('MT-SS001', 'SamSung Samtron Monitor 15" (56V)0', 'MONITOR', 'SAMSUNG', 'SamSung Samtron 15" (56V) - Made in Việt Nam', 98, 24, 11, 'thietbiroi/mt_ss001.jpg', '0000-00-00'),
('MT-SS002', 'SamSung Samtron Monitor 17" (76DF)', 'MONITOR', 'SAMSUNG', 'SamSung Samtron 17" (76DF) - Siêu phẳng - Made in Việt Nam', 110, 24, 7, 'thietbiroi/mt_ss002.jpg', '0000-00-00'),
('MT-SS003', 'SamSung SyncMaster Monitor 15" (551V)', 'MONITOR', 'SAMSUNG', 'SamSung SyncMaster 15" (551V) - Made in Việt Nam', 115, 24, 4, 'thietbiroi/mt_ss003.jpg', '0000-00-00'),
('MT-SS004', 'SamSung SyncMaster Monitor 17" (753S)', 'MONITOR', 'SAMSUNG', 'SamSung SyncMaster 17" (753S) - Made in Việt Nam', 100, 24, 7, 'thietbiroi/mt_ss004.jpg', '0000-00-00'),
('MT-SS005', 'SamSung SyncMaster 17" (753DFX) - Siêu phẳng - Made in Việt Nam', 'MONITOR', 'SAMSUNG', 'SamSung SyncMaster 17" (753DFX) - Siêu phẳng - Made in Việt Nam', 90, 24, 19, 'thietbiroi/mt_ss005.jpg', '0000-00-00'),
('CASE-001', 'Huntkey Power Supply (Nguồn) 350W - Chất lượng cao', 'CASE', '', 'Huntkey Power Supply (nguồn) 350W for P3, P4 (Chất lượng cao)', 21, 12, 5, 'thietbiroi/case_001.jpg', '0000-00-00'),
('CASE-002', 'Poca Case Full Size ATX 300W (Không USB)', 'CASE', '', 'Poca Case Full Size ATX 300W (Ko USB) - China', 22, 12, 6, 'thietbiroi/case_002.jpg', '0000-00-00'),
('CASE-003', 'Poca Case Full Size ATX 300W (Có USB)', 'CASE', '', 'Poca Case Full Size ATX 300W (Có USB)', 25, 12, 8, 'thietbiroi/case_003.jpg', '0000-00-00'),
('CASE-004', 'Galaxy / GoldenField Case Full Size ATX 300W', 'CASE', '', 'Galaxy / GoldenField Case Full Size ATX 300W (Các loại) - China', 28, 12, 3, 'thietbiroi/case_004.jpg', '0000-00-00'),
('CASE-005', 'MicroLab Case Full Size ATX 300W', 'CASE', '', 'MicroLab Case Full Size ATX 300W (Các loại) - China', 23, 12, 1, 'thietbiroi/case_005.jpg', '0000-00-00'),
('RAM-K001', 'DDRam 256MB bus 400 Kingston Hyper X', 'RAM', 'KINGSTON', 'DDRam 256MB bus 400 Kingston Hyper X (KHX3200)', 24, 12, 8, 'thietbiroi/ram_k001.jpg', '0000-00-00'),
('RAM-K002', 'DDRam 512MB bus 400 Kingston Hyper X', 'RAM', 'KINGSTON', 'DDRam 512MB bus 400 Kingston Hyper X (KHX3200)', 88, 12, 8, 'thietbiroi/ram_k001.jpg', '0000-00-00'),
('RAM-K003', 'DDRam 256MB bus 466 Kingston Hyper X', 'RAM', 'KINGSTON', 'DDRam 256MB bus 466 Kingston Hyper X (KHX3700)', 45, 12, 4, 'thietbiroi/ram_k003.jpg', '0000-00-00'),
('RAM-K005', 'DDRam 512MB bus 466 Kingston Hyper X', 'RAM', 'KINGSTON', 'DDRam 512MB bus 466 Kingston Hyper X', 86, 12, 4, 'thietbiroi/ram_k005.jpg', '0000-00-00'),
('RAM-K006', 'DDRam 512MB bus 500 Kingston Hyper X', 'RAM', 'KINGSTON', 'DDRam 512MB bus 500 Kingston Hyper X (KHX4000)', 89, 12, 4, 'thietbiroi/ram_k006.jpg', '0000-00-00'),
('RAM-K007', 'SDRam 128MB Kingston for Notebook', 'RAM', 'KINGSTON', 'SODIMM 128MB PC133 Kingston for Notebook - Retail Box - Taiwan', 34, 12, 4, 'thietbiroi/ram_k007.jpg', '0000-00-00'),
('RAM-K008', 'SDRam 256MB Kingston for Notebook', 'RAM', 'KINGSTON', 'SODIMM 256MB PC133 Kingston for Notebook - Retail Box - Taiwan', 34, 12, 22, 'thietbiroi/ram_k008.jpg', '0000-00-00'),
('RAM-K009', 'DRam 256MB Kingston for Notebook', 'RAM', 'KINGSTON', 'SODIMM 256MB Kingston bus 266 for Notebook - Retail Box - Taiwan', 45, 12, 8, 'thietbiroi/ram_k009.jpg', '0000-00-00'),
('DH-GF001', 'Sparkle 64MB DDRam GeForce 2MX-400', 'CARDDOHOA', 'GeForce', 'Sparkle 64MB DDRam GeForce 2MX-400 AGP 4X (Retail Box) - Taiwan', 34, 24, 15, 'thietbiroi/dh_gf001.jpg', '0000-00-00'),
('DH-GF002', 'Sparkle 128MB DDRam GeForce FX-5600XT', 'CARDDOHOA', 'GeForce', 'Sparkle 128MB DDRam GeForce FX-5600XT AGP 8X (Retail Box)', 56, 24, 19, 'thietbiroi/dh_gf002.jpg', '0000-00-00'),
('DH-GF003', 'Sparkle 256MB DDRam GeForce FX-5700XT', 'CARDDOHOA', 'GeForce', 'MSI 128MB DDRam GeForce FX5600-8X w/TV Out, DVI, nView', 55, 24, 12, 'thietbiroi/dh_gf003.jpg', '0000-00-00'),
('DH-GF004', 'MSI 128MB DDRam GeForce FX5200-8X w/TV Out', 'CARDDOHOA', 'GeForce', 'MSI 128MB DDRam GeForce FX5600-8X w/TV Out, DVI, nView', 42, 24, 21, 'thietbiroi/dh_gf004.jpg', '0000-00-00'),
('DH-GF005', 'MSI 128MB DDRam GeForce FX5600-8X', 'CARDDOHOA', 'GeForce', 'MSI 128MB DDRam GeForce FX5600-8X w/TV Out, DVI, nView', 128, 24, 8, 'thietbiroi/dh_gf005.jpg', '0000-00-00'),
('DH-GF006', 'MSI 256MB DDRam GeForce FX5600-8X', 'CARDDOHOA', 'GeForce', 'MSI 256MB DDRam GeForce FX5600-8X w/TV Out, DVI, nView', 78, 24, 6, 'thietbiroi/dh_gf006.jpg', '0000-00-00'),
('DH-GF007', 'Gigabyte 64MB DDRam ATI Radeon 9200 AGP 8X', 'CARDDOHOA', 'Gigabyte', 'Gigabyte 64MB DDRam ATI Radeon 9200 AGP 8X, TV Out - Taiwan', 56, 24, 6, 'thietbiroi/dh_gf007.jpg', '0000-00-00'),
('TBL-S001', 'HDD Seagate Barracuda 40.0 GB', 'THIETBILUU', 'Seagate', 'HDD Seagate Barracuda 40.0 GB (7200 rpm); Ultra ATA; 2MB Cache - China', 63, 24, 14, 'thietbiroi/tbl_s001.jpg', '0000-00-00'),
('TBL-S002', 'HDD Seagate Barracuda 40.0 GB', 'THIETBILUU', 'Seagate', 'HDD Seagate Barracuda 80.0 GB (7200 rpm); Ultra ATA; 2MB Cache - China', 57, 24, 17, 'thietbiroi/tbl_s002.jpg', '0000-00-00'),
('TBL-S003', 'HDD Seagate 80.0 GB Serial ATA', 'THIETBILUU', 'Seagate', 'HDD Seagate 80.0 GB (7200 rpm) - Serial ATA - 8MB Cache - China', 56, 24, 22, 'thietbiroi/tbl_s003.jpg', '0000-00-00'),
('TBL-S004', 'HDD Seagate 120.0 GB Serial ATA', 'THIETBILUU', 'Seagate', 'HDD Seagate 120.0 GB (7200 rpm) - Serial ATA - 8MB Cache - China', 45, 24, 26, 'thietbiroi/tbl_s004.jpg', '0000-00-00'),
('TBL-S005', 'HDD Hitachi - IBM 20.0 GB (2.5)', 'THIETBILUU', 'Hitachi', 'HDD Hitachi - IBM 20.0 GB (2.5") for Notebook (IBM, Toshiba, Compaq?)', 47, 24, 11, 'thietbiroi/tbl_h005.jpg', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
