


-- Table structure for table `tb_caurse`
--

CREATE TABLE IF NOT EXISTS `tb_caurse` (
  `id` int(50) NOT NULL,
  `c_id` varchar(5) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_du` int(4) NOT NULL,
  `c_hrs` int(4) NOT NULL,
  `c_fee` int(6) NOT NULL,
  `c_des` varchar(100) NOT NULL,
  `c_add` varchar(50) NOT NULL,
  `c_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `u_type` varchar(20) NOT NULL,
  `u_pw` varchar(20) NOT NULL,
  `u_tp` int(10) NOT NULL,
  `u_ch_date` date NOT NULL,
  `u_id` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `u_name`, `username`, `u_type`, `u_pw`, `u_tp`, `u_ch_date`, `u_id`) VALUES
(1, 'Power', 'Power', 'Administrator', 'admin@123', 1111111111, '2021-08-07', '0'),
(2, 'User', 'smmailofficial@gmail', 'Standard', 'admin@123', 1111111111, '2021-08-07', 'U2'),
(3, 'user', 'user2', 'Standard', '000000000', 1111111111, '2021-08-07', 'U3'),
(4, 'user', 'user2', 'Standard', '000000000', 1111111111, '2021-08-07', 'U4'),
(5, 'uservdf', 'user3', 'Administrator', '222222222', 111111111, '2021-08-07', 'U5'),
(6, 'uservdf', 'user3', 'Administrator', '222222222', 111111111, '2021-08-07', 'U6'),
(7, 'uservdf', 'user3', 'Administrator', '222222222', 111111111, '2021-08-07', ''),
(8, 'asaasas', 'asasasa', 'Standard', '111111111', 1111111111, '2021-08-07', ''),
(9, 'aaaaa', 'asasasas', 'Administrator', '222222222', 2147483647, '2021-08-07', ''),
(10, 'sddsdfsf', 'dsfsfddf', 'Standard', '1111111111', 2147483647, '2021-08-07', ''),
(11, 'sasd', 'asdadasdd', 'Standard', '22222222', 2147483647, '2021-08-07', 'U11'),
(12, 'asasasa', 'aaasas', 'Standard', '333333333', 2147483647, '2021-08-07', ''),
(13, 'asddsd', 'adasdads', 'Standard', '00000000', 1111111111, '2021-08-07', ''),
(14, 'eregrgfty', 'rtrryrtry', 'Standard', '222222222', 1111111111, '2021-08-07', 'U14'),
(15, 'sdrsdtgsd', 'sdffdfdsfsdfdf', 'Standard', '2222222222', 1111111111, '2021-08-07', 'U15'),
(16, 'asasasas', 'asasasasas', 'Standard', '111111111', 1111111111, '2021-08-07', ''),
(17, 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'Standard', '77777777', 1111111111, '2021-08-07', ''),
(18, 'asssssssssss', 'asssssssssssss', 'Standard', '99999999999', 1111111111, '2021-08-07', ''),
(19, 'sfddasdad', 'sdsadadasd', 'Administrator', '111111111', 1111111111, '2021-08-07', 'U19'),
(20, 'asasasasasass', 'asasas', 'Standard', '11111111', 2147483647, '2021-08-07', 'U20'),
(21, 'sadaDDASD', 'ASDADSDDSAD', 'Standard', '44444444', 2147483647, '2021-08-07', 'U21'),
(22, 'ASSASAS', 'ASSASAS', 'Standard', '2222222222', 1111111111, '2021-08-07', 'U22'),
(23, 'dadadads', 'adsadsd', 'Standard', '11111111', 1111111111, '2021-08-07', 'U23'),
(24, 'qqqqqqqqqqq', 'aaaaaaaaaa', 'Administrator', 'aaaaaaaaa', 1111111111, '2021-08-07', 'U24'),
(25, 'aaaaaaaaaa', 'aaaaaaaaaa', 'Standard', '1111111111', 1111111111, '2021-08-07', 'U25'),
(26, 'asasasasassas', 'asasasasasa', 'Standard', '1111111111', 1111111111, '2021-08-07', 'U26'),
(27, 'aassasas', 'asassasasa', 'Standard', '222222222', 1111111111, '2021-08-07', 'U27'),
(28, 'Newuser', 'New123', 'Administrator', '1111111111', 1111111111, '2021-08-07', 'U28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_userlog`
--

CREATE TABLE IF NOT EXISTS `tb_userlog` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `log_date` date NOT NULL,
  `log_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_userlog`
--

INSERT INTO `tb_userlog` (`id`, `u_id`, `username`, `log_date`, `log_time`) VALUES
(1, '0', 'Power', '2021-08-07', '08:17:33pm'),
(2, '0', 'Power', '2021-08-09', '01:55:18pm'),
(3, '0', 'Power', '2021-08-10', '06:06:37pm'),
(4, '0', 'Power', '2021-08-10', '06:14:40pm'),
(5, '0', 'Power', '2021-08-11', '10:55:12am'),
(6, '0', 'Power', '2021-08-11', '05:27:24pm'),
(7, '0', 'Power', '2021-08-11', '05:53:00pm'),
(8, '0', 'Power', '2021-08-11', '06:48:26pm'),
(9, '0', 'Power', '2021-08-11', '07:00:05pm'),
(10, '0', 'Power', '2021-08-11', '07:01:13pm'),
(11, '0', 'Power', '2021-08-11', '07:01:30pm'),
(12, '0', 'Power', '2021-08-11', '07:01:53pm'),
(13, '0', 'Power', '2021-08-11', '07:03:24pm'),
(14, '0', 'Power', '2021-08-11', '07:06:07pm'),
(15, '0', 'Power', '2021-08-11', '07:07:27pm');


