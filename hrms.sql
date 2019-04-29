-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29 Apr 2019 pada 18.45
-- Versi Server: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_company`
--

CREATE TABLE `m_company` (
  `company_id` int(20) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `company_address` varchar(40) NOT NULL,
  `company_phone` varchar(20) NOT NULL,
  `company_logo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_company`
--

INSERT INTO `m_company` (`company_id`, `company_name`, `company_address`, `company_phone`, `company_logo`) VALUES
(4, 'PT. Mustibisa Corp', 'Jl. Sebisa bisanya', '0213213213', ''),
(5, 'PT Apapun Jadi', 'Jalan Cipinang Raya', '08123123123123', ''),
(6, 'PT. Sumber Makmur', 'Jl. Jatinegara timur IV ', '0', ''),
(10, 'PT Apapun Jadiin Kuy', 'Jl. merdeka 6', '0', ''),
(11, 'PT. Sumber berkah', 'Jl. jatinegara timur 3', '2147483647', ''),
(12, 'PT. Tembang kenangan', 'Jl. tubagus angke ', '2147483647', ''),
(13, 'PT. Berkahilah', 'Jl. Kebembeng 3', '089984343434', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_library`
--

CREATE TABLE `m_library` (
  `lib_id` int(11) NOT NULL,
  `lib_name` varchar(255) NOT NULL,
  `lib_header` varchar(255) NOT NULL,
  `lib_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_user`
--

CREATE TABLE `m_user` (
  `userid` int(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `f_active` tinyint(1) DEFAULT NULL,
  `f_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_user`
--

INSERT INTO `m_user` (`userid`, `username`, `fullname`, `email`, `password`, `f_active`, `f_delete`) VALUES
(21, 'admin', 'Administrator', 'jerryerlangga82@gmail.com', 'edde84ada076b4917feda282040c08a8', NULL, NULL),
(0, 'erlangga', 'Jerry Erlangga', 'jerryerlangga82@gmail.com', 'edde84ada076b4917feda282040c08a8', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
