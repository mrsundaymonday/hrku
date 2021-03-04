-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 12:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id` int(11) NOT NULL,
  `namafile` text NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id`, `namafile`, `uploaded`) VALUES
(1, 'payroll_1574238722.xlsx', '2019-11-20 09:32:02'),
(2, 'payroll_1594185214.xlsx', '2020-07-08 07:13:34'),
(3, 'payroll_1611649862.xlsx', '2021-01-26 09:31:02'),
(4, 'payroll_1611650176.xlsx', '2021-01-26 09:36:16'),
(5, 'payroll_1611657771.xlsx', '2021-01-26 11:42:51'),
(6, 'payroll_1611659871.xlsx', '2021-01-26 12:17:51'),
(7, 'payroll_1611716963.xlsx', '2021-01-27 04:09:23'),
(8, 'payroll_1611717025.xlsx', '2021-01-27 04:10:25'),
(9, 'payroll_1611737633.xlsx', '2021-01-27 09:53:53'),
(10, 'payroll_1611738089.xlsx', '2021-01-27 10:01:30'),
(11, 'payroll_1611738114.xlsx', '2021-01-27 10:01:54'),
(12, 'payroll_1611739387.xlsx', '2021-01-27 10:23:13'),
(13, 'payroll_1611739896.xlsx', '2021-01-27 10:31:36'),
(14, 'payroll_1611740034.xlsx', '2021-01-27 10:33:54'),
(15, 'payroll_1611740068.xlsx', '2021-01-27 10:34:28'),
(16, 'payroll_1611740792.xlsx', '2021-01-27 10:46:32'),
(17, 'payroll_1611740836.xlsx', '2021-01-27 10:47:16'),
(18, 'payroll_1611741705.xlsx', '2021-01-27 11:01:45'),
(19, 'payroll_1611741742.xlsx', '2021-01-27 11:02:22'),
(20, 'payroll_1611741919.xlsx', '2021-01-27 11:05:19'),
(21, 'payroll_1611741927.xlsx', '2021-01-27 11:05:27'),
(22, 'payroll_1611742085.xlsx', '2021-01-27 11:08:05'),
(23, 'payroll_1611742146.xlsx', '2021-01-27 11:09:06'),
(24, 'payroll_1611744453.xlsx', '2021-01-27 11:47:33'),
(25, 'payroll_1611796208.xlsx', '2021-01-28 02:10:08'),
(26, 'payroll_1611799160.xlsx', '2021-01-28 02:59:20'),
(27, 'payroll_1611803584.xlsx', '2021-01-28 04:13:04'),
(28, 'payroll_1613458489.xlsx', '2021-02-16 07:54:49'),
(29, 'payroll_1613458555.xlsx', '2021-02-16 07:55:55'),
(30, 'payroll_1613458732.xlsx', '2021-02-16 07:58:52'),
(31, 'payroll_1613458849.xlsx', '2021-02-16 08:00:49'),
(32, 'payroll_1613459575.xlsx', '2021-02-16 08:12:55'),
(33, 'payroll_1613459681.xlsx', '2021-02-16 08:14:41'),
(34, 'payroll_1613459698.xlsx', '2021-02-16 08:14:58'),
(35, 'payroll_1613550950.xlsx', '2021-02-17 15:35:50'),
(36, 'payroll_1613550982.xlsx', '2021-02-17 15:36:22'),
(37, 'payroll_1613551155.xlsx', '2021-02-17 15:39:15'),
(38, 'payroll_1613636799.xlsx', '2021-02-18 15:26:39'),
(39, 'payroll_1613968745.xlsx', '2021-02-22 11:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest`
--

CREATE TABLE `tbl_guest` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guest`
--

INSERT INTO `tbl_guest` (`id`, `user`, `password`, `nama`, `alamat`, `hp`, `telp`, `email`) VALUES
(1, 'leo', 'e10adc3949ba59abbe56e057f20f883e ', 'Leo Wibisono', 'Perum JIngga Blok D-44', '081255555', '0228554555', 'aledeveloper310773@gmail.com'),
(2, 'gugun', 'e10adc3949ba59abbe56e057f20f883e ', 'Gugun Gunadi', 'Perumahan Majalaya Sari', '0815666', '022699955', 'gugun.gunadi@transstudiomall.com'),
(3, 'sani', 'e10adc3949ba59abbe56e057f20f883e ', 'Rizkisani', 'Perumahan  Ciparay', '0812566', '02256577', 'rizkisani@transstudiomall.com'),
(5, 'rully', 'e10adc3949ba59abbe56e057f20f883e', 'Rully Rusly', 'Perum Bumi Orange', 'Perum Bumi Oran', '0224454456', 'rully@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mastercabang`
--

CREATE TABLE `tbl_mastercabang` (
  `id_cabang` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mastercabang`
--

INSERT INTO `tbl_mastercabang` (`id_cabang`, `nama_cabang`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Trans Studio Mall Bandung', 'leo', '2021-02-24 10:00:40', 'leo', '2021-02-24 10:00:40'),
(2, 'Trans Studio Mall Cibubur', 'leo', '2021-02-24 10:06:39', 'leo', '2021-02-24 10:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterdepartemen`
--

CREATE TABLE `tbl_masterdepartemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masterdepartemen`
--

INSERT INTO `tbl_masterdepartemen` (`id_departemen`, `nama_departemen`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Finance Accounting', 'leo', '2021-02-26 03:52:00', 'leo', '2021-02-26 03:52:00'),
(2, 'Marcomm', 'leo', '2021-02-26 03:52:12', 'leo', '2021-02-26 03:56:49'),
(3, 'Tenant Relation', 'leo', '2021-02-26 03:52:26', 'leo', '2021-02-26 03:52:26'),
(4, 'Board Of Director', 'leo', '2021-02-26 09:42:02', 'leo', '2021-02-26 09:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mastergrade`
--

CREATE TABLE `tbl_mastergrade` (
  `id_grade` int(11) NOT NULL,
  `nama_grade` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_mastergrade`
--

INSERT INTO `tbl_mastergrade` (`id_grade`, `nama_grade`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'A', 'sani', '2021-03-02 05:57:06', 'sani', '2021-03-02 05:57:06'),
(3, 'B', 'sani', '2021-03-02 06:22:49', 'sani', '2021-03-02 06:22:49'),
(4, 'C', 'sani', '2021-03-02 06:22:54', 'sani', '2021-03-02 06:22:54'),
(5, 'D', 'sani', '2021-03-02 06:22:59', 'sani', '2021-03-02 06:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mastergrade_komponen`
--

CREATE TABLE `tbl_mastergrade_komponen` (
  `id_mastergrade_komponen` int(11) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `id_grade` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterjabatan`
--

CREATE TABLE `tbl_masterjabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_jabatansupervisi` int(11) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masterjabatan`
--

INSERT INTO `tbl_masterjabatan` (`id_jabatan`, `nama_jabatan`, `id_departemen`, `id_level`, `id_jabatansupervisi`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(2, 'Collection Head', 1, 6, 4, 'leo', '2021-02-26 09:21:02', 'leo', '2021-02-26 10:21:31'),
(3, 'Staff Collection', 1, 7, 2, 'leo', '2021-02-26 09:39:35', 'leo', '2021-02-26 09:52:27'),
(4, 'Direksi', 4, 4, 4, 'leo', '2021-02-26 09:43:23', 'leo', '2021-02-26 09:50:26'),
(5, 'Head of marcomm', 2, 6, 4, 'leo', '2021-02-26 09:53:25', 'leo', '2021-02-26 09:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterkaryawan`
--

CREATE TABLE `tbl_masterkaryawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(20) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masterkaryawan`
--

INSERT INTO `tbl_masterkaryawan` (`id_karyawan`, `nik`, `nama`, `alamat`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, '01.219.0300', 'fahmi', 'Jl. Turangga no.12 , Kec, Batununggal, Bandung', 'sani', '2021-03-02 09:58:07', 'sani', '2021-03-02 09:58:07'),
(2, '01.219.0059', 'Rano', 'Jl. Buah batu No. 32 , Kec. Batununggal, Kota Bandung', 'sani', '2021-03-02 09:59:14', 'sani', '2021-03-02 09:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterkomponen`
--

CREATE TABLE `tbl_masterkomponen` (
  `id_komponengaji` int(11) NOT NULL,
  `id_komponengrade` int(11) NOT NULL,
  `nama_komponengaji` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_masterkomponen`
--

INSERT INTO `tbl_masterkomponen` (`id_komponengaji`, `id_komponengrade`, `nama_komponengaji`, `type`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(2, 1, 'Gajipokok', 'penambah', 'sani', '2021-03-02 07:59:11', 'sani', '2021-03-02 07:59:46'),
(3, 1, 'Tunj. Transport', 'penambah', 'rizkisani', '2021-03-02 11:30:47', 'rizkisani', '2021-03-02 11:30:47'),
(4, 1, 'Tunj. Fungsional', 'penambah', 'rizkisani', '2021-03-02 11:31:14', 'rizkisani', '2021-03-02 11:31:14'),
(5, 1, 'Tunj. Jabatan', 'penambah', 'rizkisani', '2021-03-02 11:31:30', 'rizkisani', '2021-03-02 11:31:30'),
(6, 1, 'Tunj. KJK', 'penambah', 'rizkisani', '2021-03-02 11:31:47', 'rizkisani', '2021-03-02 11:31:47'),
(7, 1, 'Lembur', 'penambah', 'rizkisani', '2021-03-02 11:32:01', 'rizkisani', '2021-03-02 11:32:01'),
(8, 1, 'T.Lain-lain', 'penambah', 'rizkisani', '2021-03-02 11:32:17', 'rizkisani', '2021-03-02 11:32:17'),
(9, 1, 'BPJS TK', 'pengurang', 'rizkisani', '2021-03-02 11:32:35', 'rizkisani', '2021-03-02 11:32:35'),
(10, 1, 'BPJS Kesehatan', 'pengurang', 'rizkisani', '2021-03-02 11:32:54', 'rizkisani', '2021-03-02 11:32:54'),
(11, 1, 'Koperasi', 'pengurang', 'rizkisani', '2021-03-02 11:33:11', 'rizkisani', '2021-03-02 11:33:11'),
(12, 1, 'Pot. Lain-lain (Gaji)', 'pengurang', 'rizkisani', '2021-03-02 11:33:28', 'rizkisani', '2021-03-02 11:33:28'),
(13, 1, 'Pot. Kehadiran', 'pengurang', 'rizkisani', '2021-03-02 11:33:47', 'rizkisani', '2021-03-02 11:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterlevel`
--

CREATE TABLE `tbl_masterlevel` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(100) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masterlevel`
--

INSERT INTO `tbl_masterlevel` (`id_level`, `nama_level`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Administrator', 'leo', '2021-02-26 04:45:08', 'leo', '2021-02-26 09:08:01'),
(2, 'Admin Finance', 'leo', '2021-02-26 04:45:19', 'leo', '2021-02-26 09:04:57'),
(4, 'Direksi', 'leo', '2021-02-26 09:05:25', 'leo', '2021-02-26 09:05:25'),
(5, 'Kepala Cabang', 'leo', '2021-02-26 09:05:40', 'leo', '2021-02-26 09:05:40'),
(6, 'Kepala Departemen', 'leo', '2021-02-26 09:06:20', 'leo', '2021-02-26 09:07:33'),
(7, 'Staff', 'leo', '2021-02-26 09:08:16', 'leo', '2021-02-26 09:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterlokasi`
--

CREATE TABLE `tbl_masterlokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `jarak` double NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masterlokasi`
--

INSERT INTO `tbl_masterlokasi` (`id_lokasi`, `nama_lokasi`, `id_cabang`, `latitude`, `longitude`, `jarak`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(2, 'Office P3', 1, -6.9170323, 6333816, 100, 'leo', '2021-02-25 06:22:54', 'leo', '2021-02-25 06:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masterperiode`
--

CREATE TABLE `tbl_masterperiode` (
  `id_masterperiode` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(20) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_masterperiode`
--

INSERT INTO `tbl_masterperiode` (`id_masterperiode`, `bulan`, `tahun`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, '1', '2021', 0, 'sani', '2021-03-02 11:02:25', 'sani', '2021-03-02 11:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mastershift`
--

CREATE TABLE `tbl_mastershift` (
  `id_shift` int(11) NOT NULL,
  `nama_shift` varchar(50) NOT NULL,
  `jam_masuk` varchar(5) NOT NULL,
  `jam_pulang` varchar(5) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mastershift`
--

INSERT INTO `tbl_mastershift` (`id_shift`, `nama_shift`, `jam_masuk`, `jam_pulang`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(4, 'Shift1', '08:00', '18:00', 'leo', '2021-03-01 12:27:04', 'leo', '2021-03-01 12:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_karyawan`
--

CREATE TABLE `tbl_master_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `id_masterkaryawan` int(11) NOT NULL,
  `id_komponenpenambah` int(11) NOT NULL,
  `jumlah_penambah` int(11) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(20) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran`
--

CREATE TABLE `tbl_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `id_masterkaryawan` int(11) NOT NULL,
  `id_komponen_pengurang` int(11) NOT NULL,
  `jumlah_pengurang` double NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(20) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengeluaran`
--

INSERT INTO `tbl_pengeluaran` (`id_pengeluaran`, `id_masterkaryawan`, `id_komponen_pengurang`, `jumlah_pengurang`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(6, 1, 9, 125000, 'sani', '2021-03-03 08:29:42', 'sani', '2021-03-03 08:29:42'),
(7, 1, 10, 40000, 'sani', '2021-03-03 08:29:42', 'sani', '2021-03-03 08:29:42'),
(8, 1, 11, 540000, 'sani', '2021-03-03 08:29:43', 'sani', '2021-03-03 08:29:43'),
(9, 1, 12, 0, 'sani', '2021-03-03 08:29:43', 'sani', '2021-03-03 08:29:43'),
(10, 1, 13, 0, 'sani', '2021-03-03 08:29:43', 'sani', '2021-03-03 08:29:43'),
(11, 2, 9, 90000, 'sani', '2021-03-03 08:31:06', 'sani', '2021-03-03 08:31:06'),
(12, 2, 10, 124000, 'sani', '2021-03-03 08:31:06', 'sani', '2021-03-03 08:31:06'),
(13, 2, 11, 0, 'sani', '2021-03-03 08:31:06', 'sani', '2021-03-03 08:31:06'),
(14, 2, 12, 76000, 'sani', '2021-03-03 08:31:06', 'sani', '2021-03-03 08:31:06'),
(15, 2, 13, 150000, 'sani', '2021-03-03 08:31:06', 'sani', '2021-03-03 08:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slip`
--

CREATE TABLE `tbl_slip` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `periode` varchar(100) DEFAULT NULL,
  `tahun` varchar(4) NOT NULL,
  `gapok` double DEFAULT NULL,
  `tj_transport` double DEFAULT NULL,
  `tj_fungsional` double DEFAULT NULL,
  `tj_jabatan` double DEFAULT NULL,
  `tj_kjk` double DEFAULT NULL,
  `lembur` double DEFAULT NULL,
  `tj_lain2` double DEFAULT NULL,
  `total_penambahan` double DEFAULT NULL,
  `bpjs_tk` double DEFAULT NULL,
  `bpjs_kesehatan` double DEFAULT NULL,
  `koperasi` double DEFAULT NULL,
  `pot_lain2` double DEFAULT NULL,
  `pot_kehadiran` double DEFAULT NULL,
  `total_pengurang` double DEFAULT NULL,
  `total_diterima` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slip`
--

INSERT INTO `tbl_slip` (`id`, `nik`, `nama`, `dept`, `periode`, `tahun`, `gapok`, `tj_transport`, `tj_fungsional`, `tj_jabatan`, `tj_kjk`, `lembur`, `tj_lain2`, `total_penambahan`, `bpjs_tk`, `bpjs_kesehatan`, `koperasi`, `pot_lain2`, `pot_kehadiran`, `total_pengurang`, `total_diterima`) VALUES
(1, '01.219.0304', 'uli', 'ENGG', 'Januari', '2021', 2800000, 100000, 100000, 240000, 0, 0, 0, 3240000, 200000, 175000, 160000, 0, 0, 535000, 2705000),
(2, '01.219.0305', 'Gugun', 'VM', 'Januari', '2021', 2800000, 100000, 150000, 240000, 0, 0, 0, 3290000, 200000, 175000, 160000, 0, 0, 535000, 2755000),
(3, '01.219.0306', 'Rully Rusly', 'MARCOMM', 'Januari', '2021', 2800000, 100000, 2000000, 240000, 0, 0, 0, 5140000, 200000, 175000, 160000, 0, 0, 535000, 4605000),
(4, '01.219.0307', 'Leo Wibisono', 'HRD', 'Januari', '2021', 2800000, 150000, 120000, 240000, 0, 0, 0, 3310000, 200000, 175000, 160000, 0, 0, 535000, 2775000),
(5, '01.219.0308', 'Rully Rusly', 'FNA', 'Januari', '2021', 2800000, 100000, 170000, 240000, 0, 0, 0, 3310000, 200000, 175000, 160000, 0, 0, 535000, 2775000),
(6, '01.219.0309', 'Gunawan', 'OPR', 'Januari', '2021', 2800000, 100000, 100000, 240000, 0, 0, 0, 3240000, 200000, 175000, 160000, 0, 0, 535000, 2705000),
(7, '01.219.0310', 'Husni', 'SAFETY', 'Januari', '2021', 2800000, 100000, 1000000, 240000, 0, 0, 0, 4140000, 200000, 175000, 160000, 0, 0, 535000, 3605000),
(8, '01.219.0311', 'Rizkisani', 'FNA', 'Januari', '2021', 2800000, 100000, 200000, 240000, 0, 0, 0, 3340000, 200000, 175000, 160000, 0, 0, 535000, 2805000),
(9, '01.219.0304', 'uli', 'ENGG', 'Februari', '2021', 2800000, 100000, 100000, 240000, 0, 0, 0, 3240000, 200000, 175000, 160000, 0, 0, 535000, 2705000),
(10, '01.219.0305', 'Gugun', 'VM', 'Februari', '2021', 2800000, 100000, 150000, 240000, 0, 0, 0, 3290000, 200000, 175000, 160000, 0, 0, 535000, 2755000),
(11, '01.219.0306', 'Rully Rusly', 'MARCOMM', 'Februari', '2021', 2800000, 100000, 2000000, 240000, 0, 0, 0, 5140000, 200000, 175000, 160000, 0, 0, 535000, 4605000),
(12, '01.219.0307', 'Leo Wibisono', 'HRD', 'Februari', '2021', 2800000, 150000, 120000, 240000, 0, 0, 0, 3310000, 200000, 175000, 160000, 0, 0, 535000, 2775000),
(13, '01.219.0308', 'Rully Rusly', 'FNA', 'Februari', '2021', 2800000, 100000, 170000, 240000, 0, 0, 0, 3310000, 200000, 175000, 160000, 0, 0, 535000, 2775000),
(14, '01.219.0309', 'Gunawan', 'OPR', 'Februari', '2021', 2800000, 100000, 100000, 240000, 0, 0, 0, 3240000, 200000, 175000, 160000, 0, 0, 535000, 2705000),
(15, '01.219.0310', 'Husni', 'SAFETY', 'Februari', '2021', 2800000, 100000, 1000000, 240000, 0, 0, 0, 4140000, 200000, 175000, 160000, 0, 0, 535000, 3605000),
(16, '01.219.0311', 'Rizkisani', 'FNA', 'Februari', '2021', 2800000, 100000, 200000, 240000, 0, 0, 0, 3340000, 200000, 175000, 160000, 0, 0, 535000, 2805000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_detail_slipkomponen`
--

CREATE TABLE `tbl_transaksi_detail_slipkomponen` (
  `id_detail_slipkomponen` int(11) NOT NULL,
  `id_slip` int(11) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(20) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nik`, `username`, `password`, `level`) VALUES
(1, '01.219.0307', 'yuyun', '637a6025f350d2a73a867791e2ea540e4d2b6a4f', 'admin'),
(2, '01.219.0311', 'sani', '89e0bdd6b73691afe4ae1f803b1b3f83ee9cb4a6', 'admin'),
(3, '01.219.0306', 'rully', '5360f3da5dfbe3895b435da5b8dffe0e0639ea8c', 'admin'),
(4, '01.219.0305', 'gugun', '5f6d705ac2ee8ecb6d6ca348d6663fc81e65ccc7', 'karyawan'),
(5, '01.219.0307', 'leo', '5360f3da5dfbe3895b435da5b8dffe0e0639ea8c', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guest`
--
ALTER TABLE `tbl_guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mastercabang`
--
ALTER TABLE `tbl_mastercabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `tbl_masterdepartemen`
--
ALTER TABLE `tbl_masterdepartemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tbl_mastergrade`
--
ALTER TABLE `tbl_mastergrade`
  ADD PRIMARY KEY (`id_grade`);

--
-- Indexes for table `tbl_mastergrade_komponen`
--
ALTER TABLE `tbl_mastergrade_komponen`
  ADD PRIMARY KEY (`id_mastergrade_komponen`);

--
-- Indexes for table `tbl_masterjabatan`
--
ALTER TABLE `tbl_masterjabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_masterkaryawan`
--
ALTER TABLE `tbl_masterkaryawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_masterkomponen`
--
ALTER TABLE `tbl_masterkomponen`
  ADD PRIMARY KEY (`id_komponengaji`);

--
-- Indexes for table `tbl_masterlevel`
--
ALTER TABLE `tbl_masterlevel`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbl_masterlokasi`
--
ALTER TABLE `tbl_masterlokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tbl_masterperiode`
--
ALTER TABLE `tbl_masterperiode`
  ADD PRIMARY KEY (`id_masterperiode`);

--
-- Indexes for table `tbl_mastershift`
--
ALTER TABLE `tbl_mastershift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `tbl_master_karyawan`
--
ALTER TABLE `tbl_master_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `tbl_slip`
--
ALTER TABLE `tbl_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi_detail_slipkomponen`
--
ALTER TABLE `tbl_transaksi_detail_slipkomponen`
  ADD PRIMARY KEY (`id_detail_slipkomponen`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_guest`
--
ALTER TABLE `tbl_guest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_mastercabang`
--
ALTER TABLE `tbl_mastercabang`
  MODIFY `id_cabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_masterdepartemen`
--
ALTER TABLE `tbl_masterdepartemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_mastergrade`
--
ALTER TABLE `tbl_mastergrade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_mastergrade_komponen`
--
ALTER TABLE `tbl_mastergrade_komponen`
  MODIFY `id_mastergrade_komponen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_masterjabatan`
--
ALTER TABLE `tbl_masterjabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_masterkaryawan`
--
ALTER TABLE `tbl_masterkaryawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_masterkomponen`
--
ALTER TABLE `tbl_masterkomponen`
  MODIFY `id_komponengaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_masterlevel`
--
ALTER TABLE `tbl_masterlevel`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_masterlokasi`
--
ALTER TABLE `tbl_masterlokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_masterperiode`
--
ALTER TABLE `tbl_masterperiode`
  MODIFY `id_masterperiode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_mastershift`
--
ALTER TABLE `tbl_mastershift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_master_karyawan`
--
ALTER TABLE `tbl_master_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_slip`
--
ALTER TABLE `tbl_slip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_transaksi_detail_slipkomponen`
--
ALTER TABLE `tbl_transaksi_detail_slipkomponen`
  MODIFY `id_detail_slipkomponen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
