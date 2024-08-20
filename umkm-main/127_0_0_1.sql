-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 06:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe1`
--
CREATE DATABASE IF NOT EXISTS `cafe1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cafe1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(250) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`iduser`, `username`, `email`, `nama`, `alamat`, `telepon`, `password`, `foto`) VALUES
(21, 'admin', 'rei@gmail.com', 'Rei', 'Bandung', '089238952938483', '21232f297a57a5a743894a0e4a801fc3', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `idmenu` int(11) NOT NULL,
  `namamenu` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`idmenu`, `namamenu`, `tipe`, `harga`, `foto`) VALUES
(1, 'kopi', 'Minuman', 20000, 'expresso.jpg'),
(2, 'machiato', 'Minuman', 20000, 'blackcoffe.jpg'),
(3, 'capuchino', 'Minuman', 25000, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id_meja` int(11) NOT NULL,
  `in_use` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id_meja`, `in_use`) VALUES
(0, 1),
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `namamenu` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `namamenu`, `tipe`, `harga`, `foto`) VALUES
(1, 'indomie', 'Makanan', 10000, 'nyemek.jpg'),
(2, 'kopi', 'Minuman', 20000, 'blackcoffe.jpg'),
(3, 'mie baso', 'Makanan', 15000, 'mibaso.jpg'),
(4, 'capuchino', 'Minuman', 20000, 'cappucino.jpg'),
(5, 'indomie', 'Makanan', 90000, 'mibaso1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idpesan` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL DEFAULT 6,
  `idmenu` int(11) NOT NULL,
  `namamenu` varchar(50) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_meja` int(11) NOT NULL DEFAULT 0,
  `selesai` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idpesan`, `idpengguna`, `idmenu`, `namamenu`, `tipe`, `harga`, `jumlah`, `total`, `id_meja`, `selesai`) VALUES
(86, 6, 4, 'capuchino', 'Minuman', 20000, 2, 40000, 2, 1),
(87, 6, 1, 'indomie', 'Makanan', 10000, 2, 20000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idpengguna` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idpengguna`, `username`, `email`, `nama`, `alamat`, `telepon`, `password`, `foto`) VALUES
(6, 'user', 'reival12xxx@gmail.com', 'reival', 'Bandung', '0893281932131', 'ee11cbb19052e40b07aac0ca060c23ee', 'man.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idpesan`),
  ADD KEY `id_meja` (`id_meja`),
  ADD KEY `idmenu` (`idmenu`),
  ADD KEY `idpengguna` (`idpengguna`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idpengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_meja`) REFERENCES `meja` (`id_meja`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`idpengguna`) REFERENCES `user` (`idpengguna`);
--
-- Database: `catshop018`
--
CREATE DATABASE IF NOT EXISTS `catshop018` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `catshop018`;

-- --------------------------------------------------------

--
-- Table structure for table `categories018`
--

CREATE TABLE `categories018` (
  `cate_id_018` int(11) NOT NULL,
  `cate_name_018` varchar(20) NOT NULL,
  `description_018` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories018`
--

INSERT INTO `categories018` (`cate_id_018`, `cate_name_018`, `description_018`) VALUES
(2, 'Anggora', 'salah satu ras kucing domestik alami tertua. Ras ini berasal dari Ankara, Turkis.'),
(3, 'Persia', 'ras kucing domestik berbulu panjang dengan karakter wajah bulat dan moncong pendek.'),
(4, 'Mixdom', 'jenis kucing hasil campuran antara kucing domestik dan kucing ras dengan jenis apa pun.'),
(6, 'Domestic', 'kucing domestik atau kucing rumah adalah sejenis mamalia karnivora dari keluarga Felidae');

-- --------------------------------------------------------

--
-- Table structure for table `cats018`
--

CREATE TABLE `cats018` (
  `id_018` int(11) NOT NULL,
  `name_018` varchar(100) NOT NULL,
  `type_018` varchar(100) NOT NULL,
  `gender_018` varchar(10) NOT NULL,
  `age_018` int(11) NOT NULL,
  `price_018` int(11) NOT NULL,
  `sold_018` tinyint(1) NOT NULL DEFAULT 0,
  `photo_cats_018` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cats018`
--

INSERT INTO `cats018` (`id_018`, `name_018`, `type_018`, `gender_018`, `age_018`, `price_018`, `sold_018`, `photo_cats_018`) VALUES
(10, 'nolas', 'Persia', 'Male', 12, 300, 1, 'exclamation-mark.png'),
(13, 'mami', 'anggora', 'Female', 12, 400, 1, 'Kiki.png'),
(18, 'mbul', 'Anggora', 'Male', 13, 400, 1, 'default.png'),
(19, 'kum', 'Persia', 'Female', 12, 300, 1, 'default.png'),
(22, 'aiko', 'Mixdom', 'Female', 2, 200, 1, 'default.png'),
(23, 'udon', 'Persia', 'Male', 13, 400, 0, 'default.png'),
(24, 'udin', 'Anggora', 'Male', 19, 300, 0, 'default.png'),
(25, 'aiko', 'Mixdom', 'Female', 2, 400, 0, 'default.png'),
(26, 'anabul', 'Persia', 'Male', 10, 500, 0, 'default.png'),
(27, 'banul', 'Anggora', 'Female', 5, 100, 0, 'default.png'),
(28, 'nabul', 'Anggora', 'Male', 21, 500, 0, 'default.png'),
(29, 'sabu', 'Domestic', 'Female', 8, 50, 0, 'default.png'),
(30, 'mina', 'Domestic', 'Male', 20, 300, 0, 'default.png'),
(31, 'kiman', 'Domestic', 'Male', 10, 350, 0, 'default.png'),
(32, 'sumi', 'Persia', 'Male', 9, 150, 0, 'default.png'),
(33, 'akira', 'Anggora', 'Male', 12, 450, 0, 'default.png'),
(34, ' bean', 'Mixdom', 'Male', 10, 600, 0, 'default.png'),
(35, 'bubu', 'Persia', 'Female', 2, 200, 0, 'default.png'),
(36, 'bobby', 'Anggora', 'Male', 10, 205, 0, 'default.png'),
(37, 'chucky', 'Domestic', 'Male', 12, 321, 0, 'default.png'),
(38, 'boots', 'Persia', 'Male', 3, 150, 0, 'default.png'),
(39, 'butters', 'Persia', 'Female', 4, 90, 0, 'default.png'),
(40, 'coco', 'Mixdom', 'Female', 10, 200, 0, 'default.png'),
(41, 'cupcake', 'Anggora', 'Female', 10, 200, 0, 'default.png'),
(42, 'cutie pie', 'Domestic', 'Female', 3, 100, 0, 'default.png'),
(43, 'donut', 'Persia', 'Male', 4, 180, 0, 'default.png'),
(44, 'eong', 'Mixdom', 'Male', 7, 380, 0, 'default.png'),
(45, 'bunbun', 'Anggora', 'Female', 7, 129, 0, 'default.png'),
(46, 'fluffy', 'Domestic', 'Female', 10, 302, 0, 'default.png'),
(47, 'dumpling', 'Anggora', 'Male', 20, 500, 0, 'default.png'),
(48, 'goofy', 'Mixdom', 'Female', 10, 99, 0, 'default.png'),
(49, 'kayden', 'Persia', 'Male', 12, 400, 0, 'default.png'),
(50, 'kimiko', 'Mixdom', 'Male', 9, 300, 0, 'default.png'),
(51, 'lala', 'Domestic', 'Female', 12, 321, 0, 'default.png'),
(52, 'milo', 'Persia', 'Male', 15, 430, 0, 'default.png'),
(53, 'mocha', 'Anggora', 'Male', 19, 210, 0, 'default.png'),
(54, 'chino', 'Persia', 'Female', 21, 349, 0, 'default.png'),
(55, 'oreo', 'Domestic', 'Male', 10, 210, 0, 'default.png'),
(56, 'nugget', 'Persia', 'Female', 9, 110, 0, 'default.png'),
(57, 'nicko', 'Mixdom', 'Male', 12, 210, 0, 'default.png'),
(58, 'pear', 'Anggora', 'Female', 15, 401, 0, 'default.png'),
(59, 'pepper', 'Domestic', 'Male', 18, 359, 0, 'default.png'),
(60, 'rocky', 'Domestic', 'Male', 10, 540, 0, 'default.png'),
(61, 'yuki', 'Anggora', 'Female', 3, 150, 0, 'default.png'),
(62, 'spike', 'Mixdom', 'Male', 21, 145, 0, 'default.png'),
(63, 'yumi', 'Domestic', 'Female', 6, 200, 0, 'default.png'),
(64, 'yum yum', 'Persia', 'Female', 3, 190, 0, 'default.png'),
(65, 'zappo', 'Mixdom', 'Male', 10, 201, 0, 'default.png'),
(66, 'zippi', 'Anggora', 'Female', 12, 210, 0, 'default.png'),
(67, 'tuminer', 'Domestic', 'Female', 14, 500, 0, 'default.png'),
(68, 'sumar', 'Anggora', 'Male', 12, 200, 0, 'default.png'),
(69, 'bebas', 'Mixdom', 'Male', 12, 5000, 1, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `catsales018`
--

CREATE TABLE `catsales018` (
  `sale_id_018` int(11) NOT NULL,
  `sale_date_018` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_id_018` int(11) NOT NULL,
  `costumer_name_018` varchar(100) NOT NULL,
  `costumer_address_018` varchar(200) NOT NULL,
  `costumer_phone_018` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catsales018`
--

INSERT INTO `catsales018` (`sale_id_018`, `sale_date_018`, `cat_id_018`, `costumer_name_018`, `costumer_address_018`, `costumer_phone_018`) VALUES
(1, '2023-03-27 05:54:17', 13, 'reival', 'sariwangi', '0821277312'),
(2, '2023-03-27 16:26:30', 15, 'serli', 'bandung', '0837472642'),
(3, '2023-03-29 14:18:27', 20, 'wulan', 'bandung', '08732676726'),
(4, '2023-03-29 14:30:39', 19, 'sherly', 'bandung', '08723726'),
(5, '2023-05-02 02:36:44', 10, 'udin', 'bandung', '0871721878'),
(6, '2023-06-14 03:19:01', 18, 'Ipal', 'sariwangi', '089292929'),
(7, '2023-06-14 03:24:21', 22, 'human', 'bandung', '01289382'),
(8, '2023-06-14 12:38:44', 69, 'Reival', 'bandung', '0898219');

-- --------------------------------------------------------

--
-- Table structure for table `users018`
--

CREATE TABLE `users018` (
  `userid_018` int(11) NOT NULL,
  `username_018` varchar(50) NOT NULL,
  `password_018` varchar(255) NOT NULL,
  `usertype_018` varchar(15) NOT NULL,
  `fullname_018` varchar(100) NOT NULL,
  `photo_018` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users018`
--

INSERT INTO `users018` (`userid_018`, `username_018`, `password_018`, `usertype_018`, `fullname_018`, `photo_018`) VALUES
(3, 'Reival', '$2y$10$vZVXn/XEBbuWl6DOYmdSO.IA9yktmofWCMMb2zIqQw0ZAlsT54i36', 'Manager', 'Reival ', 'Kiki2.png'),
(4, 'ipal', '$2y$10$XPW56o1dPPIbU5D5vtypmeLH2OHPLjJTPqvj.3dyumvEf94Lq/tjy', 'Cashier', 'Ipal', 'Kiki.png'),
(9, 'wulan', '$2y$10$pMsCKTwzU4MFNC/y4Mtqb.b5wWe7GdvXsCd0lxVW1WDAqwRzXKxYO', 'Manager', 'wulan sopiani', 'Kiki1.png'),
(10, 'ivalmu', '$2y$10$hdaZs8eYsFo58bKj6IRNVe9Mef5qFs1eb6MTggzJKg6yGhywUhzQa', 'Manager', 'rei', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories018`
--
ALTER TABLE `categories018`
  ADD PRIMARY KEY (`cate_id_018`);

--
-- Indexes for table `cats018`
--
ALTER TABLE `cats018`
  ADD PRIMARY KEY (`id_018`);

--
-- Indexes for table `catsales018`
--
ALTER TABLE `catsales018`
  ADD PRIMARY KEY (`sale_id_018`);

--
-- Indexes for table `users018`
--
ALTER TABLE `users018`
  ADD PRIMARY KEY (`userid_018`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories018`
--
ALTER TABLE `categories018`
  MODIFY `cate_id_018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cats018`
--
ALTER TABLE `cats018`
  MODIFY `id_018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `catsales018`
--
ALTER TABLE `catsales018`
  MODIFY `sale_id_018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users018`
--
ALTER TABLE `users018`
  MODIFY `userid_018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Database: `coba`
--
CREATE DATABASE IF NOT EXISTS `coba` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `coba`;

-- --------------------------------------------------------

--
-- Table structure for table `latihan1`
--

CREATE TABLE `latihan1` (
  `id_018` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latihan1`
--

INSERT INTO `latihan1` (`id_018`, `nama`, `gender`, `umur`, `alamat`) VALUES
(2, 'rei', 'Male', '21', 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `nyobain`
--

CREATE TABLE `nyobain` (
  `id_018` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nyobain`
--

INSERT INTO `nyobain` (`id_018`, `nama`, `gender`, `alamat`) VALUES
(5, 'bund', 'Female', 'bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `latihan1`
--
ALTER TABLE `latihan1`
  ADD PRIMARY KEY (`id_018`);

--
-- Indexes for table `nyobain`
--
ALTER TABLE `nyobain`
  ADD PRIMARY KEY (`id_018`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `latihan1`
--
ALTER TABLE `latihan1`
  MODIFY `id_018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nyobain`
--
ALTER TABLE `nyobain`
  MODIFY `id_018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `data_game`
--
CREATE DATABASE IF NOT EXISTS `data_game` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `data_game`;

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `jenis_camera` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `elektronik`
--
CREATE DATABASE IF NOT EXISTS `elektronik` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `elektronik`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kd_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kd_barang`, `nama_barang`, `jumlah_barang`, `harga_beli`, `harga_jual`, `tanggal_masuk`) VALUES
('B0002', 'setrika', 25, 500000, 670000, '2018-05-15'),
('B0003', 'televisi', 9, 1400000, 2300000, '2018-05-15'),
('B0004', 'kipas angin', 20, 4000000, 4750000, '2018-05-15'),
('B0005', 'mesin cuci', 10, 4000000, 5780000, '2018-05-15'),
('B0006', 'charger', 7, 100000, 125000, '2023-06-12'),
('B0007', 'kabel data', 100, 15000, 20000, '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beli`
--

CREATE TABLE `tbl_beli` (
  `nofaktur` varchar(11) NOT NULL,
  `kd_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `hsatuan` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_beli`
--

INSERT INTO `tbl_beli` (`nofaktur`, `kd_barang`, `nama_barang`, `hsatuan`, `jumlah_beli`, `harga`, `bayar`, `kembalian`, `tanggal`) VALUES
('F0001', 'B0002', 'setrika', 670000, 1, 670000, 6000000, 730000, '2018-05-15'),
('F0001', 'B0003', 'televisi', 2300000, 2, 4600000, 6000000, 730000, '2018-05-15'),
('F0002', 'B0005', 'mesin cuci', 5780000, 2, 11560000, 20000000, 40000, '2018-05-15'),
('F0002', 'B0001', 'kulkas', 1500000, 1, 1500000, 20000000, 40000, '2018-05-15'),
('F0002', 'B0003', 'televisi', 2300000, 3, 6900000, 20000000, 40000, '2018-05-15'),
('F0003', 'B0001', 'kulkas', 1500000, 2, 3000000, 3000000, 0, '2023-05-16'),
('F0003', 'B0001', 'kulkas', 1500000, 2, 3000000, 3000000, 0, '2023-05-16'),
('F0003', 'B0001', 'kulkas', 1500000, 2, 3000000, 3000000, 0, '2023-05-16'),
('F0003', 'B0001', 'kulkas', 1500000, 2, 3000000, 3000000, 0, '2023-05-16'),
('F0003', 'B0001', 'kulkas', 1500000, 2, 3000000, 3000000, 0, '2023-05-16'),
('F0004', 'B0001', 'kulkas', 1500000, 2, 3000000, 10000000, 100000, '2023-05-30'),
('F0004', 'B0003', 'televisi', 2300000, 3, 6900000, 10000000, 100000, '2023-05-30'),
('F0005', 'B0001', 'kulkas', 1500000, 2, 3000000, 20000000, 5500000, '2023-06-12'),
('F0005', 'B0003', 'televisi', 2300000, 3, 6900000, 20000000, 5500000, '2023-06-12'),
('F0005', 'B0003', 'televisi', 2300000, 2, 4600000, 20000000, 5500000, '2023-06-12'),
('F0005', 'B0001', 'kulkas', 1500000, 2, 3000000, 20000000, 5500000, '2023-06-12'),
('F0005', 'B0003', 'televisi', 2300000, 3, 6900000, 20000000, 5500000, '2023-06-12'),
('F0005', 'B0003', 'televisi', 2300000, 2, 4600000, 20000000, 5500000, '2023-06-12'),
('F0006', 'B0001', 'kulkas', 1500000, 2, 3000000, 20000000, 5375000, '2023-06-12'),
('F0006', 'B0003', 'televisi', 2300000, 3, 6900000, 20000000, 5375000, '2023-06-12'),
('F0006', 'B0003', 'televisi', 2300000, 2, 4600000, 20000000, 5375000, '2023-06-12'),
('F0006', 'B0006', 'charger', 125000, 1, 125000, 20000000, 5375000, '2023-06-12'),
('F0007', 'B0001', 'kulkas', 1500000, 2, 3000000, 20000000, 5375000, '2023-06-12'),
('F0007', 'B0003', 'televisi', 2300000, 3, 6900000, 20000000, 5375000, '2023-06-12'),
('F0007', 'B0003', 'televisi', 2300000, 2, 4600000, 20000000, 5375000, '2023-06-12'),
('F0007', 'B0006', 'charger', 125000, 1, 125000, 20000000, 5375000, '2023-06-12'),
('F0008', 'B0001', 'kulkas', 1500000, 2, 3000000, 20000000, 5375000, '2023-06-12'),
('F0008', 'B0003', 'televisi', 2300000, 3, 6900000, 20000000, 5375000, '2023-06-12'),
('F0008', 'B0003', 'televisi', 2300000, 2, 4600000, 20000000, 5375000, '2023-06-12'),
('F0008', 'B0006', 'charger', 125000, 1, 125000, 20000000, 5375000, '2023-06-12'),
('F0009', 'B0001', 'kulkas', 1500000, 2, 3000000, 35000000, 32000000, '2023-06-20'),
('F0010', 'B0002', 'setrika', 670000, 1, 670000, 1000000, 330000, '2023-06-20'),
('F0011', 'B0002', 'setrika', 670000, 2, 1340000, 1400000, 60000, '2023-06-20'),
('F0012', 'B0003', 'televisi', 2300000, 1, 2300000, 2300000, 0, '2023-06-20'),
('F0013', 'B0004', 'kipas angin', 4750000, 1, 4750000, 4800000, 50000, '2023-06-20'),
('F0014', 'B0006', 'charger', 125000, 1, 125000, 800000, 5000, '2023-06-20'),
('F0014', 'B0002', 'setrika', 670000, 1, 670000, 800000, 5000, '2023-06-20'),
('F0015', 'B0006', 'charger', 125000, 1, 125000, 150000, 25000, '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` int(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `jenis_kelamin`, `email`, `no_telp`, `agama`, `alamat`) VALUES
('Reival', 'ipal', 'Laki-Laki', 'reival@gmail.com', 892198, 'Islam', 'sariwangi'),
('rima', 'regiani', 'Perempuan', 'regianirima@gmail.com', 12345, 'Islam', 'banjarwangi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tmp_beli`
--

CREATE TABLE `tbl_tmp_beli` (
  `id_tmp` int(11) NOT NULL,
  `kd_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `hsatuan` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `tbl_tmp_beli`
--
DELIMITER $$
CREATE TRIGGER `batal` AFTER DELETE ON `tbl_tmp_beli` FOR EACH ROW BEGIN
UPDATE tbl_barang SET jumlah_barang = jumlah_barang + OLD.jumlah_beli
WHERE kd_barang = OLD.kd_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `beli` AFTER INSERT ON `tbl_tmp_beli` FOR EACH ROW BEGIN 
UPDATE tbl_barang SET jumlah_barang = jumlah_barang - new.jumlah_beli 
WHERE kd_barang = new.`kd_barang`; 
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_tmp_beli`
--
ALTER TABLE `tbl_tmp_beli`
  ADD PRIMARY KEY (`id_tmp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tmp_beli`
--
ALTER TABLE `tbl_tmp_beli`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `e_buku_menu`
--
CREATE DATABASE IF NOT EXISTS `e_buku_menu` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `e_buku_menu`;

-- --------------------------------------------------------

--
-- Table structure for table `extra_menu`
--

CREATE TABLE `extra_menu` (
  `idproduk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extra_menu`
--

INSERT INTO `extra_menu` (`idproduk`, `nama`, `harga`) VALUES
(9, 'es', 1000),
(9, 'hangat', 0),
(8, 'tempe', 1500),
(7, 'sambel goreng', 0),
(7, 'tahu', 1000),
(6, 'sambal goreng', 0),
(6, 'sambal terasi', 0),
(6, 'tahu', 1000),
(17, 'dingin', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `hargaproduk` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kategori` enum('Makanan','Minuman') NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `hargaproduk`, `deskripsi`, `foto`, `kategori`, `createdat`) VALUES
(6, 'Nasi paket ayam goreng', 10000, 'nasi + ayam', '1680998059.jpg', 'Makanan', '2023-04-08 21:34:45'),
(7, 'Nasi paket ayam bakar', 15000, 'nasi + ayam + lalapan', '1680998052.jpg', 'Makanan', '2023-04-08 21:35:20'),
(8, 'Nasi paket ayam geprek', 20000, 'nasi + ayam + lalapan + sambel', '1680998044.jpg', 'Makanan', '2023-04-08 21:35:50'),
(9, 'Teh Manis', 3000, 'teh manis', 'sorin-popa-F6zJEnVv6to-unsplash.jpg', 'Minuman', '2023-04-08 21:36:29'),
(17, 'americano', 15000, 'kopi Americano adalah espresso yang ditambahkan air panas. Soal rasa, tentunya Americano lebih ringan dibandingkan espresso. Menurut cerita, kopi Americano ini hadir berkat para tentara Amerika yang datang ke Italia.', '1700386822.jpg', 'Minuman', '2023-11-19 09:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `idqrcode` int(11) NOT NULL,
  `url` varchar(50) NOT NULL,
  `qrname` varchar(50) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`idqrcode`, `url`, `qrname`, `createdat`) VALUES
(3, 'http://localhost/ebukumenu', '1680986488.png', '2023-04-08 20:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `namalengkap`, `username`, `password`, `createdat`) VALUES
(5, 'reival', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-11-18 22:33:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`idqrcode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `idqrcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `game`
--
CREATE DATABASE IF NOT EXISTS `game` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `game`;

-- --------------------------------------------------------

--
-- Table structure for table `list_game`
--

CREATE TABLE `list_game` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `desk` varchar(255) NOT NULL,
  `spek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_game`
--
ALTER TABLE `list_game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_game`
--
ALTER TABLE `list_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `herodb`
--
CREATE DATABASE IF NOT EXISTS `herodb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `herodb`;

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `power` varchar(300) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `picture` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`id`, `nama`, `power`, `foto`, `picture`) VALUES
(6, 'Flash', 'Speed Run : Koneksinya dengan Speed Force memberinya banyak kemampuan, menjadikannya salah satu pahlawan paling menarik dan berbahaya di DC Universe', 'thor.jpeg', 0xffd8ffe000104a46494600010100000100010000ffdb0084000a0708161615181615161819181a1c1c1c1c1a181a1a1a1a1c1a1a1c191a191c181a1c212e25211e2b2118182638262b2f313535351a243b403b333f2e343531010c0c0c100f101e12121e342124243434343434343434343434343134343434343134343434343434343434353434343434313431343434343434343431343434ffc000110800b1011c03012200021101031101ffc4001c0000020203010100000000000000000000030402050001060708ffc40040100002010204040403050605030501000001021100030412213105415161227181910613a132b1c1d1f042526272a2e107338292f12334b2145374c2d215ffc400190100030101010000000000000000000000000102030405ffc400271101010002010401030403000000000000000102112103123141041322716191c1f0233251ffda000c03010002110311003f00f454350bc054da28175e9a0a5fb7ce907dc88ab177a52e09aa88a49d682c69d74a0b5ba7082b669db693ad02d58935656d001452855988342be6440307ad357941da91bcd96279981e748d82d1eb5a74a0debac1495127a75a6331a60329a50a79519cd018eb4e00ae0a4ef8a79f5a52e26b4150135a6f0bc12edcd632a7376dbd06e4feb4ab3f87f830b8d9df4407407f69847d04d663be215cf92d90721ca236d39f6989ec23d73cfa9ae235c3a7ddcd4d3e1b503563eba7d3fb8a9fff00ce44d54ebdcc4fbd661b8c26eef9bb8fb1e91f68f7dba54319c551f4855f34327dc803dab2eecafb6bdb8cf45dee0986d3dc8f78a8ba41a1d962e485c91d81523d623eb56781c266f03c47ecb074683dc033558f52cf29cba52ce15e2ded41bab4ee32d94728db8e9d391aa6e2175f3650343b47335d1397359e9ac4db2eb0ad1aee2b4ca4000998113d696b9877cb01b5993d3b450ace29a723033b53211d690be61bbfebfb53b79c030489aaec7b418eb1fde83852fbce94134c3a4af48a4ef18a141dd314ae237a3679a5314f1ad20839a83bf2a54dc33bfad12dbc89f7a9daf4d96a1e7a230e7427df9d237d225e9776a3be8293b8282ac2d4366a8b350d9e84a4c686d502f5167a08c61d75a3b372148dbbf04772054aebc1efd6802bbc694b33509ef543e653d16d26ac63515607fb5199050656e35019a8d7d35d29560698191ea786b3f32e226be23063a73a4f3c55afc28b37bbaa3104f5d04f7d09a595d4b463376431c6f1c6dabada603226509ccf32563f6b9d71566da5987bc0b480d901de60ebee34fcb4ee6f70c3915d98b962dbea4656239693a72ae7f8ae0d0f8b2ea3d620473db402b8f7ff005dd31dce095ff8a2c81098471dfe6049f4086aaee710b4d3933db27521a1d67f9809f4cb42c6aac6f552fad3945c62cfe7b18f1eff00648300cfee95307caba7f87388ba103331820153e25f6dc0f3eb5c2e02c5c573f2cac303a1999dc69b1d47d6ba5f85b8c2b5c5f9c00034cc3781c888d3d34a751ad3d1be21b2ae8b70001c019ba907969d3eef2ae56e9aeaf87f1ab17d4ae50a8e5915a7460bcf91d7588ae5f1d6f2b11df4f2adfa5971a61d6c7576acc65d2a34dcfd297b188930dbf23d69bbca08835517908244d6cc51c7087f383faf6a99417044c38fa8d222804e63e33da8b7ad031060813a741d6830b11e11e7f85555fbbe55678bda7a083d675fc2a92f5cd7631408d3b46d3af2a4b16f3e94c16e73af5a4ef6f5357200ea2148324cc8e9a9007b09a961f78a813535277e9f41ad4a867200a0d30f1cb6efbfad08ad01f4593ce82fda86ee6862f509db1d282e9447ba286ce28201a82d457719a39c4d41524d326d2d935bc4351574a5b1075a01673432d527341634d2207a20bd4acd44bd069e2713057a131eb12284ce7ad69c0313cb6a03b45013372aebe1319af11fc27ea42ebfee35404d5c7c2988cb88553b3e9eabe31f558f5a9cbfd69e37ee8ebeec8b0180d14b291bc4b13f8d719c60b13206877aeb789076b57add985630d99b60a3ed11ec2bccee62ef592aef73e72b1fb0a503c0d259375067662a77ae5b8eddf865a9caa78d036cc104b1d80d6aa3e59fb57195413b318f4f3f3abaf89b8a1b578a22f861489dc0600c4f69a15ac5e7b4a8cf28208421409991b0d753d790a78f82ca7263056c215699d888ed554f85f978864719adb3183cb5da7b11f7d3d6520efa7414d62c0759fdbb6bee80687cd7ee3da96cee3c2cb8571150e000d9038420ce82255947a1aeb13006e5ab8bfb761d907f1246751fed3f7d79f7c3571735ccd2cce7424c0f00255447291a9aef7e15e32a6e5d59304f3e81409f768a72f6ddc4673ba6aa8580e755d8943323635d9718e00cd2f6721d3450c334ee743bf402b90ffd33872486d74ca41d08df4f4aebc73994e1c770b8de55edaef3a6e7b5443c99933b7a77a35fb640d363bfa7ebeb4bb91c840f3935448de5d3733faf7a41ce900c93c8e87a7aef4ddc7d08efa1a56facebce8108b02090779fa1e94b5e514e62cc1826489060fd3dc7d691633a9a9ad202cda9d06bd397954ec731d6b417f46b0686a4c5b7ae9e95135b43e2edf88a97a501ef575e6952d15a6b94366a19b6e682cf58cf4167a60400160798dbd68f9a292cf52f9940385e96bed5147ef50bad4e1509cd09cd4d8d05cd32459aa135a635027a5234cb509cd64f5a8b1a034c668980b855d586841d3b1e54be6a670c9241a03d0c5ecb767f60c66fe1ccb00f944faa8aabf887060b789069cb969b476ab14b24b91c8db527ccae83de4d6ef45d461fb48c54f703ec9f6fbab9328eee9d9be5e4bfe22f0d617b3919542812c36d0721b9aa0e1d60ac296041019489120eda1d41aedfe27bf7189444cebfb6db905b72a49d2089d3bd79f3e11d1896b8a3b9793eda9a31e62f29abb5abb64a8e1b1d1714cecc06bcc1807d08247ad02f5b7c9989cca4486aa8bd898dba6ff77ebb512272c9d07c2b7151af3b443422cf730c7c8483567c238b0b61de2661049dc92ccc7d8572972ee52aabf654051fc4da3393feaca3d3bd58f0f80b6f2cb46624f424a64f70846dfb555633dbd1709f1295281d33aba8d46b04cec796a0c4d5a3f11f9836caa77d049ec7a9d0686b87c295f94ca0b00b051a08201fb48e39af7990477356782c5655ff00a8e32eba189e5b7b1d263ef1163474b8db76710855c87600c3ace61d24c76e75c7637815c530833832411a92a264e9d23d20d34dc62da3ea7e598d3c713ee91e9579c278a0b8721f182093204911aea34d80f3ef578e77167974e64f3ebb6c830c209ebde96c5a15e9e86bd1fe21c22dcb67e536a24644210c8dc30cbe23be9d74eb5e74ea644ec647fcfb8ae8c72ee8e7cb1edaae7591341649d69ab891500b1f7d5510afcbd48a895d69ab839d01bfbd4a917581e5afa548b548c452e075de907b4b3d44dca033d0cbd3d33305e86e6839ab0b53d048b5694cd446d322b128235b0a13bd6c5c91407340ad9341735277a5dda99319a879aa2cd50cd48245ea0ed5a66a1b3506dcd3f862065079d5729a7f0a65a7a501e8b8624946237496ec5518476fb40ffaaaa785dd259d813a91ea003af9531c1b1259524c9b96d975e4f6f3853eaa295e0ec0df7559ca140f7c807ddf7d73d9c58e899732aaf1bc0be7bdc4371d517c4021cb999b5d586bcb69ae0b8860f0f69ca952181832275ea7a9f335e918856171911b2b344749201d7d437d2b89e3b852090e0e6d7366ebd6768acf99c3a2652c72fc4789285ca82477aa0ba6541e44b7b8cbf98f7ae90fc3388b8e5550a8dfc7e181bf3d76aafc770a6b68c0eb95e0f9b0234f55fa5698d8cf2dd0ecac62191b419881db59abfc2ddb16d4a8f1a93242cf2323c4a63eb274aa3c5207b8481be525a4ebe100e9d49d7d69a5211741af21b69fbcc7a546797a8e8f8ff1fba7765c45fafc42ebfe4dbc839b3b6becbf89349dfe3f758eb7b51c91469ec09ae77118d1cf53d3f67d07e74b3e29f62607498fa0a530b5ae5d4e8f4f8937f9e5d3af18b827c770cef284fdf5bc3715cad21c863d77f40457246f9ea3faaa6b8b3cfefd3d8d3bd2fd4f1f97878b8cfd9dee1f8d5cf999d8e690334687c22240eba0dba55b9e1d62fabb870332e6cb0490415cc40009d83469bc0af35c3e2c8fb27d397a8e5e62ba7e07c646607ec91ab09dc7320f311cf71ce44d2de582ef43a1f227dbf6e5ea7aa42fa6a46ba75107d472f2a54e82adb8de4f9ce5042b7880e99b703aeb3554dd2bae5dcdbc7cf0b86571ca6ac44369426da8aa34a191bd0488a15cb7266886a541bd5338e7f4a117a1e6ebb544b53666146926a0cd5a63a504bd00466addb341cd5247a085cf1e950679a8b3d05de9849de82ef5b5bf00c019b94f2fef401b797d7bd034db35433544d4736b1d2809335449ad3356d2d31e4691896cc6ba7aeb4cd86caa4f33b505ad11a1ab7e13812e53689df527d073dff38a2dd0d6dd6701b612d233feccb13d3c3e211ca07e3555c07101aff4939a07590cabe5950fbd3bc6af2dac3adb0492e08049dc13371cf9ce51da4d547c2847ce573d481e6447dd3ef58c9b96b4b75662678ca85c42cff130ef2ce009ee0a81d2abfe32c37851f427413fbd3a827a74ff005533f14290e0f352167cb2b7ff00627d2a5885188c365076331d03418ed94803d69653ed9578dd65613f84b14af951a7c325091fb2a0ca1f2e5ea39550fc5d6512ddf6800bdc55558e68cccd1db29df940ab6e0fc3ded5b773ab92b6906d2eec33313fc2b27d4f4ae7be36b2cd79429902646c209d4c729f08f29d235396aef71d3d392e531bedcb61d2066227a0da4c6dd84093d077a43178992403e67a9ec3ee1ca99e278a8f0a9eda74e7ee75f403955431fd7e357863eeb5f93d5edff1e37c79617e9a7dfef50a9289a98b2626b4db8b4156517e550c8a069b56235a72cde32181823591f78fc452353568322959b5619dc6baeb17c5fb7c832f2e87f77f9586dd088e9484d57e131451832ec7461d474ab5c4430cebcf7f5d8fe1e7474ef6dedf5e9d5f231faf87d49e679fd67aa0e6d4c79d156d4eb3403bcfeb5a3ae2826844d6cf3921606b3ad2f719674022b576fb3981a0ed59940d229077e6e54d1b50790fd4d259e88b76a999b6bb432d402f586e5006cd520e2952f5acd4032ef4bbbd44dca13bd01366a816a817a896a0c5cd5ab44027a9dff2a1d9b6eed9514b36f0a274ea7a0ef4b9c725b719c1600ea14c4c7207f1dbbd2b448b3c0d9cce091a7eb4a731389553b807dcd73989e30cec5ad2b2249852e6141e53ccd217f10da9cf1353b569d860116e92439f26127e9a46f5d025f45b5e1604819490752352557a690093ac69a0dfc5f1171e619d9966624c18ea262ae7847182965d5745464b9a1244e74b7909da0a33e9b68bd26a72dd5c92787a463ae0c4166424baa0f09232e5503364f49d3ce92c35f2851818cb0c3b9ea7ad1b83de452b706a9a30ea577cbf48f43558ce4f4e9578cf4cb2b77cbaaf894adcb22f2ecc564749583ed994fa553f0756cff2848322483cc82cc58f24551aff002f7a77865f0f6ded9d50045f562ea4fe3ed565f0de004e25dbab212390582449ebe0fad67bed9635d6eca2712b0059775272dab6c50ed371d8acf9e9e81abc3f89635d6e33312da328e5ac904f7d01d7bc57ba626eab61ca757923a2a01a7b81eb5e2df1e5a22e28ca142a8240e4cfb8fe907d6963378ae6771ce59e6395bb70b124ee6a02a4c234fd6b5bb424d31bdde565c37099b5a65f0b95a08d0d5bf01c248d6acb19c3f4dab2b972da63c38fbb842295c461e2ba87c2c8db6a43198331b5399158e6dd62a15617ecf5a4ae0d6ae56762569b91e756dc2b1112a7cc03cff787a8d63b11cea968f6ee9043030447d3634acdb5e8f53b329fde17771227bedfaec4454024ea7da980032865fda1207423423d223fd29d6877132c56985dc67f23a5f4f3e3c5e67e12c9af4a4efe360c517137a040dff0aac23bd55ac647a196adcd054d69ea99182f512f41cf512f401f35419e84cd432d4019ae544bd085cde6a05e741418ff00322963c4adab0cf2c0119950c3113a80d100c527c483e87365432276923531cce84694bd9b48a24788f7dbdaa6d398acf1dc7afdd52965570f6bf76dc827f9ee1f139eff004aadb1615664e63bc9fc054cdc9a559ce633b5258ed72680fe2adb374a1499eff4a0038a4d2697b77582b206214904af262b3973758ccdee69f6491485d614a9c76bf0863f3db6b04c324b277427c43d0c1ab1b8e479d705c3716d6aea5d53f60cf623623d457758fdc32c9570197c9b51f97a55637d233c7dae7e1dbb39ed8319c08d24e606437a0ce6ba4c071344b18977808d7cc13d343f728ae4b85b941b8198156279298cd1e823d4d6be28c6a9c062590c10ea5418986c96e4f73a9f5a9cb1dda78e5c475b89ba170f71e74470c5d635427308d79e65f3d06e6bc2789e29efdc676072b3337510ba6879802141f2af73e0b81b69825b589f15bb56c362249937aea6636a41985571239e64d7422bc838f65169822e55d154745cc0c4f3e5ad29e34abe76e519a493d6ac38560d9d811b4d5755a704e2bf21fc4b994ee39f989e75396f5c2f1d6f9777c370d900ab9f96185734fc6adb2ffd375f23a30f3075a67e1be2f9ddedb1120665820c8e7eda7bd6165f2e9961dbd838274aafc560f4d057458b7d262a8ae711cad95c4ab681ba1e8694b4ec8e5f1f86df4aae181e66ba4c7ac9d36aabc4020695a4acee2a4bd868340648ab16eb533870e2055ed9dc59c2311bdbf558de46e0772048eeab561c4af7d92235d446db6be9a88ea0d73cb991c726520fa8d45740cc1d0c6d018760647f4b48f2a37db96fd574e33eb74ee37ccf1f8545fbb4bd11c46fbf7a0661dfdeb4ae28f4661142635b66a831ad18345a865ab33545a80ccd58cd503512680916a7384da4667cf3216401fb507513cb91246b00d2028b62e9460e370675e63620f62247ad14459f15c2fcd4cb025632003c2a44e550394c91fea9d77ae451a1a361b74fd6d5e80d97c24490c0107aa9d567beb07ba91e5c8fc43602b87880f3feed27ef07d7b5435261e36a1171cc835043a9076e5ad6041c85004b8f00c6950b6a009359bfe51bf95492cb3030341bb12001fccc4c0f5a015baf1b6dfadeb56f08efa28303593a003a99d87730298f02027edb745042089e7a33790cbe6688aaf780d3c00c8000541e4a349efbd002c26132b0d558cf84cc8898fa47d34aeb6de24c221322d831a6baef54f87c22a01cc833ea627ee1ed4ed86f176a73146596f88b04b9333ed4cd8c08ba97031d1555b28e791d1ccf5d11b4a5500deaf7e1ac2fcc6b8236427d95ff003a77c270f28fc41c51ff00f4e968982e73dce72ec4bb0f204e9d80e95e75c7eee997f8493eac907fa5abb5f8d5c25d0836cabfd5e2fb88af3fe3e61dbf980f454531eec4d4fa6d3ca96a6e915bf9663372a3299153a515a67038b6b5716e21865323a791ec469eb41748a8520f69e09c413156832efb32f356e60fe755dc57866844771e62bcf7e1fe30d86ba1d6483a32f265fcc6e0d7b0d8b8988b6b710e656120fe07b83a4563963db5d3865dd355c4e26c9cbe9548ef120ed5dee370032911a6e2b8cc66172b1e94a5194d2a1c41914fe0dffb52f76dd6eda99ad12b1f89f84abd85c5da1001c9717f71b4fe93208f3239553709c4c0d75c8648eb6da15c7ddf5ae9786df26ddfc3ee2f5b65507ff7141287cc9f0ffaab8ac1dec8c09db623a82208f6268d6e1f4f3ecea4be165c5f07949235020cf556fb2df81ee3bd548aeab0be2b650f89ed4803f7ed372f5991e95457f0654c01986e0f63b52c72df17d34f93d1edb33c66e5f4ed18d0c9a99a835753cb427ad41cc548d45a9840d68d6c9a813404ab2a00d481a02ef845dcc850ee92cbdd18f8c69d18868fe26e941e2d8417919376dd277cc36dcecd2574ea3a5078612ae1f929f707465f22091eb4f632edb4326e2e5e59466788d260403aea091b7956794e578d70d6d0c8ab0b5872751f647da624051e6c7404f4dfb50b1b88b66e16446f11262e68b9899272a1d67782d1ca0d1870fb97b57cd001039003f85468be828531f116d078173b756954f6d1dbcc95f2340c5e1312cb9d95b2a862a0ae45194c36440000473004d5f70fe0c88035cd63f7b9c76ad7184c4621912d3ac28ddc8011154e67663a05541a98981cceeaca259bd16e07c1eddcc2ae20b1670ecac860283a3210373227b6deac6583ca39002a9be1abf6d2f9b26e165b99503aac206e4c55a1a01d274304e9caae315e1665304a920c6a343062ab1a9ce011a99eba7951d48d34a5a68f6949d6ad14edb6115d77f876c0ddb89cd9207f57e75c407abff81f16531b6b580d994f790607d2a72f031f3149fe205e2312239adb3fd0b5c3f15b84dd7fe63f957a2ff899843f3b38dc2a883d996d8fa9ae238470a7c4dc665f08cd33dcea07f7a8ada15c1c4e561cb50743140bb60ab15df983d47235dbddb210aa6287ccb5e1058cfccb73b325c1ac03b8e836ae678b5954bd08cce8a7c2cc218889831b89e7a790a045387a81adb1a8d4a9baea7e0ef890e15f2bc9b2e75dfc27f797b751fa3cb4d60a564b3472d9771ef579d1d03290ca448235041d883d2b98e2b850648d45731f097c5270e7e55cf1596db9942798fe1ea3d4739e9b8862d165f3ca3a92a17c458f22b1ff00158dc2cae899cb1406c09a05ecab53c16311ee05baff002909ec4fab1d2bbcbffe1cdbc427ccc26295d809cac06fd091a8f515a76d67dd1e7c97f2b0653aa9041e846c6ab3e22c385bc5d0425cf1af627edafa313e84539c430af65dd2e0caea60a9df4ff8a42e6203db756dd7c6b3c8c80c3d41fe914e7059730c6131594dbb8761ff004de3781b1f3ca74fe4ab7c4605b31c96d5d4ea0939627581d8ce6ff5472ae52d5c2415eba8f3598fa48f5abee1bc66d8b6ab7412cba03fc3b8fbcd679e37cc7a1f1faf859db9dd4fe57ac6a1bd0ee5ed240ad4731bd763c411d239cd04d4d6e472acb8e0ec29902c6a39ab4fad4156280906a7f0046ba4d256ad49a6092ba0d2806f117b4807d0524c69ac2e04b6a49f5fc2a37309e23ae94006d2491115716c045e9de930a1008de818ac49681c85006c6e2f31f2a0d8b99499d5581565fde4610ca7cc503273a8bbf2148d49c67821c390ece815e5ada824dc740c0070002141d60b11255a262ba0f9a976d25f4624b128ea4432ba81a982410c20ce9ace94be3700d8a550b97e65b104b10aa2ca82c5998e81520c9e8d4b7c2d6259ed06255b5675136d4a89432d94ccc831b86300c567bedbcb4d7743488c4881cf59e94edcb80682a5885449557ccfcfc303d0cd5426390b10c72b747197ea743ef5533c6f8a9bd3ca7986c3ebad4f0d8d6b7711d774757ff69063e949be2ad89970637cbafb3185fad237f8aaaea8675d7c33a7504f8666041046bce9dca14c6bd27fc4cb6b72d35c5d55ed9653d864bb3fd43da85fe0e602ddcb24b0075699f3ff008f7aace1fc48e2b02558f8c23dbff7670b3ef6eabfe01e346ca365d868fd54ecaf1fba4103cc77159e5371aba3f8ef088a580fb3ae9cb59503ca75af33c53936e4ea4693df6aeb3e24e2c6e480649db6d667481b44cd7238fb39140e6779ed449a8157142a338d28348d95959594012d5b2cc146e4c53d8d3906407681cfb93f5fbe83c35c2b827bc79d3dc46ca9820e8c06bdf91a021c09573eb1eb5d30bed63fea59728c3db4d763cb41a6a34ae26d5e2bb54afe31d8413a5570177c53e2038969bca0b41975d24ea67db976ef5597902ab37ef8851ea24fd0fbd575338969543fc247b31fcea46c007e95371ae9b1a10a20b91ca92a6bdbbc6a8356ab2b77322d51359594c837ada6f5959403784de8d73ed1acaca0d65c87952ef5959424b622924deb2b28330df66916acaca019c37f978aff00e35cff00cedd67c3bff6cbfccdff0091acacac3aae8e88389fb6de5ffe6aab8eff0096bfcdf9d656565836c9436f714ce23ec9fd73159595b7a60ea7e08ff2ee7f30ff00cad525f04ffdf7a5cfb8d656517c058dff00b6ff00cff89aa4e37b8f2acaca65ed4f73f1fce8159594aa9959595948089b8f4fbe9fc6fd84fe5fc2b2b280acacacaca0328aff00657d7efacaca0055bacaca03ffd9);
INSERT INTO `display` (`id`, `nama`, `power`, `foto`, `picture`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(9) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `power` varchar(300) NOT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `nama`, `power`, `foto`) VALUES
(144, 'reival', 'fly', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- Database: `java`
--
CREATE DATABASE IF NOT EXISTS `java` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `java`;

-- --------------------------------------------------------

--
-- Table structure for table `datamhs`
--

CREATE TABLE `datamhs` (
  `npm` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Database: `masyarakat`
--
CREATE DATABASE IF NOT EXISTS `masyarakat` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `masyarakat`;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(5) NOT NULL,
  `tgl_pengaduan` varchar(20) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('belum proses','proses','selesai') NOT NULL,
  `userid` int(11) NOT NULL,
  `view` varchar(20) NOT NULL DEFAULT 'tampil'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `fullname`, `isi_laporan`, `foto`, `status`, `userid`, `view`) VALUES
(198, '2023-06-21', 'Reival', 'Banjir karena banyak sampah di daerah kami', 'gambar.jpg', 'selesai', 19, 'tampil'),
(199, '2023-06-21', 'Reival', 'Test', 'noImage.png', 'proses', 5, 'unTampil'),
(202, '2023-06-21', 'Sanda', 'Bukit Longsor', 'img.jpg', 'proses', 19, 'unTampil'),
(214, '2023-06-22', 'Reival', 'Banjir', 'noImage.png', 'proses', 5, 'unTampil'),
(215, '2023-07-04', 'Reival', 'te', 'Aljazeerah-1-1-1448x2048.jpg', 'proses', 5, 'tampil'),
(216, '2023-07-04', 'Reival', 'rer', 'Screenshot_(6).png', 'proses', 5, 'unTampil'),
(217, '2023-07-04', 'Reival', 'den', 'noImage.png', 'belum proses', 17, 'tampil'),
(218, '2023-07-04', 'Reival', 'rei', 'noImage.png', 'proses', 5, 'unTampil');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `telp_petugas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`userid`, `username`, `password`, `level`, `fullname`, `telp_petugas`) VALUES
(5, 'Deni', '$2y$10$b/WdCokglSOr5kESzPhZj.K6XvjDlXn9MIzlT/lnP4yTLTgzYAItm', 'Admin', 'Deni Purwanto', '08912938712984'),
(17, 'Reival', '$2y$10$9XxEBI8EOag5Vk327R8BCu4zebH6FiX6A9j7mnYN9kSgUS5qxAg6G', 'Masyarakat', 'Reival', '08912039812093'),
(18, 'Sanda', '$2y$10$uYAYhF8LMLBBFkgPRtLmDuw6Rm5VjD2EYkQXE2JJn7yPu5xW3JTby', 'Masyarakat', 'Sanda', '0891928372198'),
(19, 'Anisa', '$2y$10$pXE4.waq/mNALCpXTddK7ez9lDGNu3bCxSm6oGkBf5Uq8BE7Y4M8u', 'Admin', 'Anisa', '08618273218');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(5) NOT NULL,
  `id_pengaduan` int(5) NOT NULL,
  `tgl_tanggapan` varchar(20) NOT NULL,
  `tanggapan` text NOT NULL,
  `foto_tanggapan` varchar(200) NOT NULL,
  `View` varchar(20) NOT NULL DEFAULT 'tampil'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `foto_tanggapan`, `View`) VALUES
(175, 197, '2023-06-21', 'Jalan Sedang diperbaiki', 'Screenshot_2023-06-21_101703.png', 'tampil'),
(176, 198, '2023-06-21', 'Sudah selesai diperbaiki', 'gambar9.jpg', 'tampil'),
(179, 202, '2023-06-21', 'Akan segera kami perbaiki', 'Screenshot_2023-06-21_140226.png', 'tampil'),
(188, 199, '2023-06-22', 'test1', 'jalan_rusak2.jpg', 'tampil'),
(189, 215, '2023-07-04', 'ccc', '2-1024x10241.jpg', 'tampil'),
(190, 214, '2023-07-04', 'proses', 'Screenshot_(7).png', 'tampil'),
(191, 216, '2023-07-04', 'wsw', 'Screenshot_(5).png', 'tampil'),
(192, 218, '2023-07-04', 'se', 'Screenshot_(7)1.png', 'tampil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- Database: `matematika`
--
CREATE DATABASE IF NOT EXISTS `matematika` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `matematika`;

-- --------------------------------------------------------

--
-- Table structure for table `luas`
--

CREATE TABLE `luas` (
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `luas`
--

INSERT INTO `luas` (`panjang`, `lebar`, `hasil`) VALUES
(10, 5, 50),
(10, 15, 150);

-- --------------------------------------------------------

--
-- Table structure for table `volume`
--

CREATE TABLE `volume` (
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volume`
--

INSERT INTO `volume` (`panjang`, `lebar`, `tinggi`, `hasil`) VALUES
(10, 5, 5, 250),
(10, 15, 20, 3000);
--
-- Database: `material`
--
CREATE DATABASE IF NOT EXISTS `material` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `material`;

-- --------------------------------------------------------

--
-- Table structure for table `common`
--

CREATE TABLE `common` (
  `Name_Material` varchar(50) NOT NULL,
  `Base_Material` varchar(20) NOT NULL,
  `Qty` int(11) NOT NULL DEFAULT 0,
  `Photo` varchar(200) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `common`
--

INSERT INTO `common` (`Name_Material`, `Base_Material`, `Qty`, `Photo`) VALUES
('Besi', 'Logam', 50, 'src/upload/Besi.jpg'),
('Nikel', 'Logam', 50, 'src/upload/Nikel.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `craft`
--

CREATE TABLE `craft` (
  `Name_Material` varchar(50) NOT NULL,
  `Ingredient_1` varchar(50) NOT NULL,
  `Amount_1` int(11) NOT NULL,
  `Ingredient_2` varchar(50) NOT NULL,
  `Amount_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `craft`
--

INSERT INTO `craft` (`Name_Material`, `Ingredient_1`, `Amount_1`, `Ingredient_2`, `Amount_2`) VALUES
('Feronikel', 'Besi', 10, 'Nikel', 15);

-- --------------------------------------------------------

--
-- Table structure for table `high`
--

CREATE TABLE `high` (
  `ID` int(11) NOT NULL,
  `Name_Material` varchar(50) NOT NULL,
  `Ingredient_1` varchar(50) NOT NULL,
  `Amount_1` int(11) NOT NULL,
  `Ingredient_2` varchar(50) NOT NULL,
  `Amount_2` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Photo` varchar(200) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `high`
--

INSERT INTO `high` (`ID`, `Name_Material`, `Ingredient_1`, `Amount_1`, `Ingredient_2`, `Amount_2`, `Qty`, `Photo`) VALUES
(4, 'Feronikel', 'Besi', 500, 'Nikel', 750, 50, 'src/upload/Feronikel.jpg');

--
-- Triggers `high`
--
DELIMITER $$
CREATE TRIGGER `Kurangi` AFTER INSERT ON `high` FOR EACH ROW BEGIN
	UPDATE common SET Qty = Qty - NEW.Amount_1
    WHERE Name_Material = NEW.Ingredient_1;
    UPDATE common SET Qty = Qty - NEW.Amount_2
    WHERE Name_Material = NEW.Ingredient_2;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `Id_Shipment` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Delivery` varchar(20) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `shipment`
--
DELIMITER $$
CREATE TRIGGER `stok` AFTER INSERT ON `shipment` FOR EACH ROW BEGIN
	IF NEW.Type = "common" THEN
    	UPDATE common SET Qty = Qty - NEW.Quantity
    	WHERE Name_Material = NEW.Material;	
    ELSEIF NEW.Type = "high" THEN
    	UPDATE high SET Qty = Qty - NEW.Quantity
    	WHERE Name_Material = NEW.Material;	
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `No_Identity` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Fullname`, `No_Identity`, `Username`, `Password`) VALUES
(6, 'Fajar Maulana', '0472179525', 'Fajar', 'Fajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `common`
--
ALTER TABLE `common`
  ADD PRIMARY KEY (`Name_Material`);

--
-- Indexes for table `craft`
--
ALTER TABLE `craft`
  ADD PRIMARY KEY (`Name_Material`);

--
-- Indexes for table `high`
--
ALTER TABLE `high`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`Id_Shipment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `high`
--
ALTER TABLE `high`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `Id_Shipment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Database: `petclinic1`
--
CREATE DATABASE IF NOT EXISTS `petclinic1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `petclinic1`;

-- --------------------------------------------------------

--
-- Table structure for table `doctors_210018`
--

CREATE TABLE `doctors_210018` (
  `doctor_id_210018` int(11) NOT NULL,
  `doctor_name_210018` varchar(50) NOT NULL,
  `doctor_gender_210018` varchar(11) NOT NULL,
  `doctor_address_210018` varchar(100) NOT NULL,
  `doctor_phone_210018` varchar(30) NOT NULL,
  `doctor_photo_210018` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_210018`
--

INSERT INTO `doctors_210018` (`doctor_id_210018`, `doctor_name_210018`, `doctor_gender_210018`, `doctor_address_210018`, `doctor_phone_210018`, `doctor_photo_210018`) VALUES
(2, 'reival muhamad', 'Female', 'jakarta', '082131', 'Dokter.jpg'),
(4, 'wulan', 'Female', 'sariwangi', '0832131', '56bebe68-da59-461d-b55a-491d598b71d5_43.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicals_210018`
--

CREATE TABLE `medicals_210018` (
  `mr_id_210018` int(11) NOT NULL,
  `mr_date_210018` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pet_id_210018` int(11) NOT NULL,
  `doctor_id_210018` int(11) NOT NULL,
  `symptom_210018` varchar(100) NOT NULL,
  `diagnose_210018` varchar(255) NOT NULL,
  `treatment_210018` varchar(255) NOT NULL,
  `cost_210018` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicals_210018`
--

INSERT INTO `medicals_210018` (`mr_id_210018`, `mr_date_210018`, `pet_id_210018`, `doctor_id_210018`, `symptom_210018`, `diagnose_210018`, `treatment_210018`, `cost_210018`) VALUES
(1, '2023-01-03 02:32:37', 1, 2, 'flu', 'flu', 'obat', 2000),
(2, '2023-01-03 05:44:57', 1, 2, 'batuk', 'batuk', 'obat', 1000),
(3, '2023-02-28 13:05:27', 1, 2, 'Batuk', 'flu', 'obat flu', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pets_210018`
--

CREATE TABLE `pets_210018` (
  `id` int(11) NOT NULL,
  `pet_name_210018` varchar(100) NOT NULL,
  `pet_type_210018` varchar(30) NOT NULL,
  `pet_gender_210018` varchar(20) NOT NULL,
  `pet_age_210018` int(11) NOT NULL,
  `pet_owner_210018` varchar(100) NOT NULL,
  `pet_address_210018` varchar(255) NOT NULL,
  `pet_phone_210018` varchar(20) NOT NULL,
  `pet_photo_210018` varchar(255) NOT NULL DEFAULT 'dafault.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets_210018`
--

INSERT INTO `pets_210018` (`id`, `pet_name_210018`, `pet_type_210018`, `pet_gender_210018`, `pet_age_210018`, `pet_owner_210018`, `pet_address_210018`, `pet_phone_210018`, `pet_photo_210018`) VALUES
(1, 'cuwi', 'Cat', 'Male', 2, 'reival', 'sariwangi', '08931231', 'cat.jpeg'),
(3, 'miko', 'Cat', 'Male', 6, 'reival', 'sariwangi', '0832322', 'kitty.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_210018`
--

CREATE TABLE `user_210018` (
  `userid_210018` int(11) NOT NULL,
  `username_210018` varchar(255) NOT NULL,
  `password_210018` varchar(100) NOT NULL,
  `usertype_210018` varchar(30) NOT NULL,
  `fullname_210018` varchar(255) NOT NULL,
  `photo_210018` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_210018`
--

INSERT INTO `user_210018` (`userid_210018`, `username_210018`, `password_210018`, `usertype_210018`, `fullname_210018`, `photo_210018`) VALUES
(2, 'reival', '$2y$10$sS8q7ELJGxojhbFTaZSd.u505czUWK7HXTdN2M45kEMkSXtYVpxIe', 'Manager', 'rei', 'ronaldo.jpg'),
(3, 'ipal', '$2y$10$WCwHnfC3Zbr.ZBqZhpADu.ooDypZi45KwBT5TXJAlHN/.UidD1Dh6', 'Staff', 'reival', 'mesi.gif'),
(6, '12345', '$2y$10$spA32XGaMb.YYMURLTYBceEozFFDqzP7Qeh1f2xN/RfmM4i7vNadq', 'Manager', 'reival', 'default.png'),
(7, '12345', '$2y$10$q.W096LJ5N/p/xkW8xFHc.1HpzUFI35HltCgkM5ZTDGcN6ZNRIMQi', 'Manager', 'muhamad', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_210018`
--
ALTER TABLE `doctors_210018`
  ADD PRIMARY KEY (`doctor_id_210018`);

--
-- Indexes for table `medicals_210018`
--
ALTER TABLE `medicals_210018`
  ADD PRIMARY KEY (`mr_id_210018`);

--
-- Indexes for table `pets_210018`
--
ALTER TABLE `pets_210018`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_210018`
--
ALTER TABLE `user_210018`
  ADD PRIMARY KEY (`userid_210018`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_210018`
--
ALTER TABLE `doctors_210018`
  MODIFY `doctor_id_210018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicals_210018`
--
ALTER TABLE `medicals_210018`
  MODIFY `mr_id_210018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pets_210018`
--
ALTER TABLE `pets_210018`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_210018`
--
ALTER TABLE `user_210018`
  MODIFY `userid_210018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Database: `petshop018`
--
CREATE DATABASE IF NOT EXISTS `petshop018` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `petshop018`;

-- --------------------------------------------------------

--
-- Table structure for table `petaccessories018`
--

CREATE TABLE `petaccessories018` (
  `acc_id_018` int(11) NOT NULL,
  `acc_name_018` varchar(200) NOT NULL,
  `pet_acc_018` varchar(200) NOT NULL,
  `acc_type_018` varchar(200) NOT NULL,
  `acc_color_018` varchar(200) NOT NULL,
  `weight_018` int(11) NOT NULL,
  `acc_from_018` varchar(200) NOT NULL,
  `guarantee_018` int(11) NOT NULL,
  `price_018` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petaccessories018`
--

INSERT INTO `petaccessories018` (`acc_id_018`, `acc_name_018`, `pet_acc_018`, `acc_type_018`, `acc_color_018`, `weight_018`, `acc_from_018`, `guarantee_018`, `price_018`) VALUES
(1, 'mbul', 'cat', 'wearable', 'orange', 500, 'local', 4, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petaccessories018`
--
ALTER TABLE `petaccessories018`
  ADD PRIMARY KEY (`acc_id_018`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petaccessories018`
--
ALTER TABLE `petaccessories018`
  MODIFY `acc_id_018` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--
-- Error reading structure for table phpmyadmin.pma__bookmark: #1932 - Table 'phpmyadmin.pma__bookmark' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__bookmark: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__bookmark`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--
-- Error reading structure for table phpmyadmin.pma__central_columns: #1932 - Table 'phpmyadmin.pma__central_columns' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__central_columns: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__central_columns`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--
-- Error reading structure for table phpmyadmin.pma__column_info: #1932 - Table 'phpmyadmin.pma__column_info' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__column_info: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__column_info`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--
-- Error reading structure for table phpmyadmin.pma__designer_settings: #1932 - Table 'phpmyadmin.pma__designer_settings' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__designer_settings: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__designer_settings`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--
-- Error reading structure for table phpmyadmin.pma__export_templates: #1932 - Table 'phpmyadmin.pma__export_templates' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__export_templates: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__export_templates`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--
-- Error reading structure for table phpmyadmin.pma__favorite: #1932 - Table 'phpmyadmin.pma__favorite' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__favorite: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__favorite`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--
-- Error reading structure for table phpmyadmin.pma__history: #1932 - Table 'phpmyadmin.pma__history' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__history: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__history`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--
-- Error reading structure for table phpmyadmin.pma__navigationhiding: #1932 - Table 'phpmyadmin.pma__navigationhiding' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__navigationhiding: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__navigationhiding`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--
-- Error reading structure for table phpmyadmin.pma__pdf_pages: #1932 - Table 'phpmyadmin.pma__pdf_pages' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__pdf_pages: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__pdf_pages`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--
-- Error reading structure for table phpmyadmin.pma__recent: #1932 - Table 'phpmyadmin.pma__recent' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__recent: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__recent`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--
-- Error reading structure for table phpmyadmin.pma__relation: #1932 - Table 'phpmyadmin.pma__relation' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__relation: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__relation`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--
-- Error reading structure for table phpmyadmin.pma__savedsearches: #1932 - Table 'phpmyadmin.pma__savedsearches' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__savedsearches: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__savedsearches`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--
-- Error reading structure for table phpmyadmin.pma__table_coords: #1932 - Table 'phpmyadmin.pma__table_coords' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__table_coords: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__table_coords`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--
-- Error reading structure for table phpmyadmin.pma__table_info: #1932 - Table 'phpmyadmin.pma__table_info' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__table_info: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__table_info`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--
-- Error reading structure for table phpmyadmin.pma__table_uiprefs: #1932 - Table 'phpmyadmin.pma__table_uiprefs' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__table_uiprefs: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__table_uiprefs`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--
-- Error reading structure for table phpmyadmin.pma__tracking: #1932 - Table 'phpmyadmin.pma__tracking' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__tracking: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__tracking`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--
-- Error reading structure for table phpmyadmin.pma__userconfig: #1932 - Table 'phpmyadmin.pma__userconfig' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__userconfig: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__userconfig`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--
-- Error reading structure for table phpmyadmin.pma__usergroups: #1932 - Table 'phpmyadmin.pma__usergroups' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__usergroups: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__usergroups`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--
-- Error reading structure for table phpmyadmin.pma__users: #1932 - Table 'phpmyadmin.pma__users' doesn't exist in engine
-- Error reading data for table phpmyadmin.pma__users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `phpmyadmin`.`pma__users`' at line 1
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `testdb`
--
CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testdb`;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`) VALUES
(2, 'wulan', 'sopi'),
(3, 'Reival', 'Muhamad'),
(4, 'nazla', 'rahma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `travel`
--
CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `Id` int(11) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`Id`, `Destination`, `Cost`) VALUES
(11, 'Jakarta - Bandung', 300000),
(12, 'Bandung - Surabaya', 200000),
(13, 'Bandung - Yogyakarta', 250000),
(14, 'jakarta - bali', 100000),
(15, 'bandung \r\nbandung - yogyakarta', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Car_Type` varchar(20) NOT NULL,
  `Amount_Car` int(11) NOT NULL,
  `Cost` varchar(50) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`Id`, `Name`, `Phone`, `Destination`, `Car_Type`, `Amount_Car`, `Cost`, `Date`) VALUES
(3, 'Virsa', '0876572184', 'Jakarta - Bandung', '6-Seat', 2, '600000', '2023-10-14'),
(4, 'Diego', '08761295840', 'Bandung - Yogyakarta', '4-Seat', 1, '350000', '2023-10-14'),
(5, 'Reival', '918209', 'Jakarta - Bandung', '4-Seat', 1, '400000', '2023-10-21'),
(6, 'wulan', '08686868', 'Bandung - Surabaya', '6-Seat', 1, '350000', '2023-10-22'),
(7, 'Reivalll', '84290348', 'jakarta - bali', '6-Seat', 1, '250000', '2023-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Name`, `Email`, `Phone`, `Username`, `Password`) VALUES
(1, 'Fajar', 'Fajar@micro.com', '08721912421', 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `tugas3`
--
CREATE DATABASE IF NOT EXISTS `tugas3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tugas3`;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` int(11) NOT NULL,
  `NamaHotel` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Bintang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`HotelID`, `NamaHotel`, `Alamat`, `Bintang`) VALUES
(1, 'Hotel A', 'Jalan A No. 111', 3),
(2, 'Hotel B', 'Jalan B No. 112', 5),
(3, 'Hotel C', 'Jalan C No. 113', 4),
(4, 'Hotel D', 'Jalan D No. 114', 4),
(5, 'Hotel E', 'Jalan E No. 115', 4),
(6, 'Hotel F', 'Jalan F No. 121', 5),
(7, 'Hotel G', 'Jalan G No. 122', 4),
(8, 'Hotel H', 'Jalan H No. 123', 4),
(9, 'Hotel I', 'Jalan I No. 124', 4),
(11, 'hotel 11', 'jalan hotel 11', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `KamarID` int(11) NOT NULL,
  `HotelID` int(11) DEFAULT NULL,
  `NomorKamar` varchar(10) DEFAULT NULL,
  `JenisKamar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`KamarID`, `HotelID`, `NomorKamar`, `JenisKamar`) VALUES
(1, 1, '100', 'Standard'),
(2, 1, '102', 'Standard'),
(3, 3, '103', 'Suite'),
(4, 3, '104', 'Suite'),
(5, 4, '105', 'Deluxe'),
(6, 4, '106', 'Deluxe'),
(7, 5, '107', 'Presidential'),
(8, 5, '108', 'Presidential'),
(9, 2, '109', 'Standard'),
(10, 2, '110', 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `ReservasiID` int(11) NOT NULL,
  `KamarID` int(11) DEFAULT NULL,
  `TanggalCheckIn` date DEFAULT NULL,
  `TanggalCheckOut` date DEFAULT NULL,
  `NamaPemesan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`ReservasiID`, `KamarID`, `TanggalCheckIn`, `TanggalCheckOut`, `NamaPemesan`) VALUES
(1, 1, '2023-10-10', '2023-10-15', 'John Doe'),
(2, 2, '2023-11-05', '2023-11-10', 'Jane Smith'),
(3, 3, '2023-09-15', '2023-09-20', 'Alice Johnson'),
(4, 4, '2023-08-20', '2023-08-25', 'Bob Wilson'),
(5, 5, '2023-07-25', '2023-07-30', 'Eve Davis'),
(6, 6, '2023-06-10', '2023-06-15', 'Charlie Brown'),
(7, 7, '2023-05-08', '2023-05-10', 'evan'),
(8, 8, '2023-05-05', '2023-04-10', 'christ'),
(9, 9, '2023-04-06', '2023-03-09', 'Dome'),
(10, 10, '2023-02-03', '2023-02-06', 'Felix');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HotelID`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`KamarID`),
  ADD KEY `HotelID` (`HotelID`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`ReservasiID`),
  ADD KEY `KamarID` (`KamarID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`);

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`KamarID`) REFERENCES `kamar` (`KamarID`);
--
-- Database: `umkm`
--
CREATE DATABASE IF NOT EXISTS `umkm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `umkm`;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `name`, `description`, `photo`) VALUES
(2, 'tape', 'tape enak ', 'tas.jpg'),
(3, 'sale', 'pisang sale enak', 'model3.jpg'),
(4, 'makanan', 'makanan makanan', 'model2.jpeg'),
(5, 'telur asin', 'enak', 'WARGAMEKAR (1).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;