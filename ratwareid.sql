CREATE TABLE `userdata` (
  `id` int(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `f_active` tinyint(1) DEFAULT NULL,
  `f_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `userdata` (`id`, `username`, `email`, `password`, `f_active`, `f_delete`) VALUES
(21, 'admin', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL);


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
(5, 'PT Apapun Jadi', 'Jalan Cipinang Raya', '0', ''),
(6, 'PT. Sumber Makmur', 'Jl. Jatinegara timur IV ', '0', ''),
(10, 'PT Apapun Jadiin Kuy', 'Jl. merdeka 6', '0', ''),
(11, 'PT. Sumber berkah', 'Jl. jatinegara timur 3', '2147483647', ''),
(12, 'PT. Tembang kenangan', 'Jl. tubagus angke ', '2147483647', ''),
(13, 'PT. Berkahilah', 'Ase', '089984343434', '');
