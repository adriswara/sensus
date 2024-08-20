-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2024 at 03:11 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_type`) VALUES
(1, 'admin', 'admin\r\n', 2),
(2, 'adminsensus1', 'adminsensus1', 0),
(3, 'Ajon', 'Ajon', 2);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `topik_artikel` varchar(255) NOT NULL,
  `isi_artikel` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_artikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `display_artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `topik_artikel`, `isi_artikel`, `tanggal_artikel`, `display_artikel`) VALUES
(1, 'Panduan EKTP', 'Panduan', 'Berikut adalah panduan untuk membuat e-KTP (Kartu Tanda Penduduk Elektronik) di Indonesia:\r\n\r\nSyarat Membuat e-KTP\r\nWarga Negara Indonesia (WNI).\r\nBerusia 17 tahun atau sudah menikah.\r\nMembawa dokumen pendukung seperti:\r\nKartu Keluarga (KK)\r\nAkta Kelahiran\r\nSurat Nikah (jika sudah menikah)\r\nSurat Keterangan Pindah (jika pindah domisili)\r\nCara Membuat e-KTP\r\nDatang ke kantor Dinas Kependudukan dan Catatan Sipil (Disdukcapil) setempat.\r\nMengisi formulir permohonan e-KTP yang disediakan.\r\nMelakukan perekaman data biometrik, termasuk sidik jari, iris mata, dan foto.\r\nVerifikasi data oleh petugas Disdukcapil.\r\nMenunggu proses pencetakan e-KTP. Biasanya, e-KTP akan selesai dalam beberapa hari hingga beberapa minggu, tergantung kebijakan daerah masing-masing.\r\ne-KTP Digital\r\nKemendagri juga sedang menguji coba penerbitan e-KTP dalam bentuk digital yang memiliki QR Code. Berikut langkah-langkahnya1:\r\n\r\nInstal aplikasi Identitas Digital pada ponsel pintar.\r\nRegistrasi dengan memasukkan Nomor Induk Kependudukan (NIK), email, dan nomor ponsel.\r\nAkses dokumen kependudukan melalui aplikasi, termasuk e-KTP digital yang dilengkapi dengan QR Code.\r\nJika e-KTP digital hilang, Anda dapat mengakses kembali melalui aplikasi Identitas Digital di ponsel Anda1.\r\n\r\nSemoga panduan ini membantu! Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk bertanya. 😊', '2024-07-08 17:00:00', 'ektp.png'),
(2, 'Perayaan 17 Agustus', 'Berita', 'Perayaan 17 Agustus: Merayakan Kemerdekaan Indonesia\r\nSetiap tanggal 17 Agustus, seluruh rakyat Indonesia bersatu untuk merayakan Hari Kemerdekaan Republik Indonesia. Hari ini menandai momen bersejarah ketika Indonesia memproklamasikan kemerdekaannya dari penjajahan pada tahun 1945. Perayaan ini dikenal dengan sebutan “Tujuhbelasan” atau “Agustusan” dan diisi dengan berbagai kegiatan yang penuh semangat nasionalisme dan kebersamaan1.\r\n\r\nUpacara Bendera\r\nSalah satu kegiatan utama dalam perayaan 17 Agustus adalah upacara bendera. Upacara ini diadakan di berbagai tempat, mulai dari Istana Merdeka di Jakarta hingga sekolah-sekolah dan kantor-kantor pemerintahan di seluruh Indonesia. Upacara ini melibatkan pengibaran bendera Merah Putih, pembacaan teks Proklamasi, dan menyanyikan lagu kebangsaan \"Indonesia Raya\"1.\r\n\r\nPerlombaan Tradisional\r\nSelain upacara bendera, perayaan 17 Agustus juga dimeriahkan dengan berbagai perlombaan tradisional yang melibatkan seluruh lapisan masyarakat. Beberapa perlombaan yang populer antara lain:\r\n\r\nLomba Panjat Pinang: Peserta berlomba memanjat batang pinang yang dilumuri minyak untuk mengambil hadiah di puncaknya.\r\nBalap Karung: Peserta berlomba lari dengan menggunakan karung sebagai kostum.\r\nTarik Tambang: Dua tim berusaha menarik tali ke arah masing-masing untuk memenangkan pertandingan.\r\nLomba Makan Kerupuk: Peserta berlomba makan kerupuk yang digantung tanpa menggunakan tangan1.\r\nPawai dan Karnaval\r\nDi banyak daerah, perayaan 17 Agustus juga dimeriahkan dengan pawai dan karnaval. Peserta pawai mengenakan berbagai kostum tradisional dan modern, serta menampilkan berbagai atraksi budaya. Pawai ini biasanya diiringi dengan musik tradisional dan modern, menciptakan suasana yang meriah dan penuh warna2.\r\n\r\nDekorasi dan Hiasan\r\nSelama bulan Agustus, lingkungan di seluruh Indonesia dihiasi dengan bendera Merah Putih, umbul-umbul, dan berbagai dekorasi bernuansa merah putih. Ini adalah bentuk ekspresi kebanggaan dan cinta tanah air dari masyarakat Indonesia1.\r\n\r\nRefleksi dan Doa Bersama\r\nSelain kegiatan yang bersifat hiburan, perayaan 17 Agustus juga menjadi momen refleksi dan doa bersama. Banyak komunitas dan organisasi mengadakan acara doa bersama lintas agama untuk mendoakan kesejahteraan dan kemajuan bangsa2.\r\n\r\nPerayaan 17 Agustus bukan hanya sekadar perayaan, tetapi juga menjadi simbol persatuan dan semangat juang bangsa Indonesia. Melalui berbagai kegiatan yang diadakan, masyarakat Indonesia diingatkan akan pentingnya menjaga dan menghargai kemerdekaan yang telah diperjuangkan oleh para pahlawan.\r\n\r\n1: Wikipedia 2: BBC\r\n\r\nSemoga artikel ini memberikan gambaran yang jelas tentang bagaimana perayaan 17 Agustus dirayakan di Indonesia. Jika ada yang ingin ditambahkan atau ditanyakan, jangan ragu untuk menghubungi saya! 😊🇮🇩', '2024-07-30 09:03:06', 'premium_photo-1670689708086-88f7c6c2c8d7.png'),
(3, 'Produksi Padi', 'Berita', 'Produksi Padi di Indonesia: Tantangan dan Peluang\r\nPadi merupakan salah satu komoditas pertanian utama di Indonesia, yang menjadi sumber makanan pokok bagi sebagian besar penduduk. Produksi padi di Indonesia memiliki peran penting dalam menjaga ketahanan pangan nasional. Berikut adalah gambaran mengenai produksi padi di Indonesia, tantangan yang dihadapi, serta peluang yang ada.\r\n\r\nLuas Panen dan Produksi Padi\r\nBerdasarkan data Badan Pusat Statistik (BPS), luas panen padi di Indonesia pada tahun 2022 mencapai sekitar 10,45 juta hektar, mengalami kenaikan sebesar 40,87 ribu hektar dibandingkan tahun sebelumnya1. Produksi padi pada tahun yang sama mencapai 54,75 juta ton Gabah Kering Giling (GKG)1. Angka ini menunjukkan peningkatan yang signifikan dan mencerminkan upaya pemerintah dan petani dalam meningkatkan produktivitas padi.\r\n\r\nTantangan dalam Produksi Padi\r\nProduksi padi di Indonesia tidak lepas dari berbagai tantangan, antara lain:\r\n\r\nPerubahan Iklim: Perubahan iklim yang tidak menentu dapat mempengaruhi pola tanam dan hasil panen padi. Curah hujan yang tidak teratur dan suhu ekstrem dapat menyebabkan gagal panen.\r\nHama dan Penyakit: Serangan hama dan penyakit tanaman padi seperti wereng, tikus, dan penyakit blas dapat mengurangi hasil panen secara signifikan.\r\nKetersediaan Lahan: Urbanisasi dan alih fungsi lahan pertanian menjadi lahan non-pertanian mengurangi luas lahan yang tersedia untuk budidaya padi.\r\nTeknologi Pertanian: Masih banyak petani yang menggunakan metode tradisional dalam bercocok tanam, sehingga produktivitas padi belum optimal.\r\nPeluang dalam Produksi Padi\r\nMeskipun menghadapi berbagai tantangan, produksi padi di Indonesia juga memiliki peluang besar untuk terus berkembang:\r\n\r\nPenggunaan Teknologi Modern: Penerapan teknologi modern seperti sistem irigasi yang efisien, penggunaan benih unggul, dan mekanisasi pertanian dapat meningkatkan produktivitas padi.\r\nProgram Pemerintah: Pemerintah Indonesia melalui Kementerian Pertanian terus menggalakkan program-program seperti subsidi pupuk, bantuan alat mesin pertanian, dan pelatihan bagi petani untuk meningkatkan hasil produksi padi.\r\nPenelitian dan Pengembangan: Lembaga penelitian seperti Badan Riset dan Inovasi Nasional (BRIN) terus melakukan penelitian untuk menghasilkan varietas padi yang tahan terhadap hama, penyakit, dan perubahan iklim.\r\nPeningkatan Infrastruktur: Pembangunan infrastruktur pertanian seperti jalan tani, irigasi, dan gudang penyimpanan dapat mendukung distribusi dan penyimpanan hasil panen yang lebih baik.\r\nKesimpulan\r\nProduksi padi di Indonesia merupakan sektor yang sangat vital bagi ketahanan pangan nasional. Meskipun menghadapi berbagai tantangan, dengan dukungan teknologi modern, program pemerintah, dan penelitian yang berkelanjutan, produksi padi di Indonesia memiliki peluang besar untuk terus meningkat. Upaya kolaboratif antara pemerintah, petani, dan lembaga penelitian sangat diperlukan untuk mencapai ketahanan pangan yang berkelanjutan.\r\n\r\n1: Badan Pusat Statistik\r\n\r\nSemoga artikel ini memberikan gambaran yang jelas mengenai produksi padi di Indonesia. Jika ada yang ingin ditambahkan atau ditanyakan, jangan ragu untuk menghubungi saya! 😊🌾', '2024-08-08 05:32:32', 'photo-1442544213729-6a15f1611937.png'),
(4, 'Lurah', 'Profil', 'Mr/Mrs X Lahir tgl X tahun X bulan X, lulusan X. Memiliki pengalaman X', '2024-08-13 00:32:07', 'default.png'),
(5, 'Profil Sekertaris Kelurahan', 'Profil', ' Sekertaris kelurahan Mr/Mrs x Lahir bulan x di kota x, berasal dari x', '2024-08-13 00:44:58', 'default.png'),
(6, 'test', 'Profil', ' test', '2024-08-13 00:45:19', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_name` varchar(255) NOT NULL,
  `employee_age` varchar(255) NOT NULL,
  `employee_salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `nik_keluarga` varchar(255) NOT NULL,
  `jumlah_ibu_melahirkan_keluarga` int NOT NULL,
  `jumlah_anak_lahir_laki_hidup` int NOT NULL,
  `jumlah_anak_lahir_perempuan_hidup` int NOT NULL,
  `jumlah_anak_laki_hidup` int NOT NULL,
  `jumlah_anak_perempuan_hidup` int NOT NULL,
  `jumlah_anak_diinginkan` int NOT NULL,
  `status_ibadah_rutin_keluarga` int NOT NULL,
  `kepemilikan_akte_nikah_keluarga` int NOT NULL,
  `status_konflik_keluarga` int NOT NULL,
  `status_sumber_penghasilan_keluarga` int NOT NULL,
  `status_kelayakan_makanan_keluarga` int NOT NULL,
  `status_tabungan_keluarga` int NOT NULL,
  `status_sakit_disabilitas_keluarga` int NOT NULL,
  `status_penggunaan_sosial_media_keluarga` int NOT NULL,
  `status_waktu_interaksi_keluarga` int NOT NULL,
  `status_interaksi_pasutri` int NOT NULL,
  `status_berkreasi_luarrumah_keluarga` int NOT NULL,
  `status_ikut_gotongroyong_rt_keluarga` int NOT NULL,
  `status_balita_ikut_posyandu_keluarga` int NOT NULL,
  `status_balita_ikut_binkel_keluarga` int NOT NULL,
  `status_remaja_ikut_binkel_keluarga` int NOT NULL,
  `status_remaja_ikut_pusatinformasi_konseling_keluarga` int NOT NULL,
  `status_lansia_ikut_binkel_keluarga` int NOT NULL,
  `status_keluarga_ikut_usaha_ekonomi_keluarga` int NOT NULL,
  `jenis_atap_rumah_keluarga` int NOT NULL,
  `jenis_dinding_keluarga` int NOT NULL,
  `jenis_lantai_keluarga` int NOT NULL,
  `sumber_penerangan_keluarga` int NOT NULL,
  `sumber_air_keluarga` int NOT NULL,
  `status_fasilitas_bab_keluarga` int NOT NULL,
  `luas_rumah_mPersegi_keluarga` int NOT NULL,
  `total_orang_menetap_dirumah_keluarga` int NOT NULL,
  `bahan_bakar_utama_memasak_keluarga` int NOT NULL,
  `kepemilikan_rumah_keluarga` int NOT NULL,
  `status_perolehan_info_kb_keluarga` int NOT NULL,
  `asal_perolehan_info_kb_keluarga` int NOT NULL,
  `status_petugas_asal_informasi_kb_keluarga` int NOT NULL,
  `asal_petugas_perolehan_info_kb_keluarga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`nik_keluarga`, `jumlah_ibu_melahirkan_keluarga`, `jumlah_anak_lahir_laki_hidup`, `jumlah_anak_lahir_perempuan_hidup`, `jumlah_anak_laki_hidup`, `jumlah_anak_perempuan_hidup`, `jumlah_anak_diinginkan`, `status_ibadah_rutin_keluarga`, `kepemilikan_akte_nikah_keluarga`, `status_konflik_keluarga`, `status_sumber_penghasilan_keluarga`, `status_kelayakan_makanan_keluarga`, `status_tabungan_keluarga`, `status_sakit_disabilitas_keluarga`, `status_penggunaan_sosial_media_keluarga`, `status_waktu_interaksi_keluarga`, `status_interaksi_pasutri`, `status_berkreasi_luarrumah_keluarga`, `status_ikut_gotongroyong_rt_keluarga`, `status_balita_ikut_posyandu_keluarga`, `status_balita_ikut_binkel_keluarga`, `status_remaja_ikut_binkel_keluarga`, `status_remaja_ikut_pusatinformasi_konseling_keluarga`, `status_lansia_ikut_binkel_keluarga`, `status_keluarga_ikut_usaha_ekonomi_keluarga`, `jenis_atap_rumah_keluarga`, `jenis_dinding_keluarga`, `jenis_lantai_keluarga`, `sumber_penerangan_keluarga`, `sumber_air_keluarga`, `status_fasilitas_bab_keluarga`, `luas_rumah_mPersegi_keluarga`, `total_orang_menetap_dirumah_keluarga`, `bahan_bakar_utama_memasak_keluarga`, `kepemilikan_rumah_keluarga`, `status_perolehan_info_kb_keluarga`, `asal_perolehan_info_kb_keluarga`, `status_petugas_asal_informasi_kb_keluarga`, `asal_petugas_perolehan_info_kb_keluarga`) VALUES
('0987654321', 1, 0, 1, 0, 1, 23, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 4, 5, 6, 1, 8, 9, 1, 1, 1, 5, 1, 3),
('1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('999', 999, 999, 99, 999, 99, 999, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 5, 3, 1, 3, 6, 2, 99, 99, 2, 3, 0, 3, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int NOT NULL,
  `nama_warga` varchar(255) NOT NULL,
  `umur_warga` int NOT NULL,
  `kelamin_warga` tinyint(1) NOT NULL,
  `nik_kartuKeluarga_warga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_warga` varchar(255) NOT NULL,
  `rt_warga` int NOT NULL,
  `rw_warga` int NOT NULL,
  `tglLahir_warga` date NOT NULL,
  `tempatLahir_warga` varchar(255) NOT NULL,
  `agama_warga` varchar(255) NOT NULL,
  `statusPerkawinan_warga` tinyint(1) NOT NULL,
  `hubunganKeluarga_warga` varchar(255) NOT NULL,
  `pekerjaanKeluarga_warga` varchar(255) NOT NULL,
  `pendidikan_warga` varchar(255) NOT NULL,
  `kepemilikanRumah_warga` tinyint(1) NOT NULL,
  `keberadaan_anggota_keluarga_warga` tinyint(1) NOT NULL,
  `kepemilikan_akta_kelahiran_warga` tinyint(1) NOT NULL,
  `kepesertaan_jkn_warga` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nama_warga`, `umur_warga`, `kelamin_warga`, `nik_kartuKeluarga_warga`, `alamat_warga`, `rt_warga`, `rw_warga`, `tglLahir_warga`, `tempatLahir_warga`, `agama_warga`, `statusPerkawinan_warga`, `hubunganKeluarga_warga`, `pekerjaanKeluarga_warga`, `pendidikan_warga`, `kepemilikanRumah_warga`, `keberadaan_anggota_keluarga_warga`, `kepemilikan_akta_kelahiran_warga`, `kepesertaan_jkn_warga`) VALUES
(1, 'test111111q2', 1, 1, '0987654321', '1', 1, 1, '2015-07-11', '1', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(2, 'bambanggas', 123, 2, '0987654321', 'aaa', 8, 8, '1991-01-01', 'bdgcoret', '1', 2, '1', '1', '1', 1, 1, 1, 1),
(3, '1', 1, 2, '', '1', 1, 1, '1111-11-11', '1', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(4, 'Bambangss', 21, 1, '', 'JL BAGUSBAGUS', 11, 11, '1101-11-11', 'hihihi', '7', 2, '3', '5', '1', 1, 2, 2, 3),
(5, 'kajshdk', 12, 1, '', 'knk', 1, 1, '9999-09-09', 'jkha', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(6, 'kajshdk', 12, 1, '', 'knk', 1, 1, '9999-09-09', 'jkha', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(7, '999', 999, 1, '', '9', 999, 99, '9999-09-09', '999', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(8, '999', 999, 1, '', '9', 999, 99, '9999-09-09', '999', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(9, '1', 1, 1, '', '1', 1, 1, '1111-11-11', '11', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(10, '1', 1, 1, '', '1', 1, 1, '1111-11-11', '11', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(11, '1', 1, 1, '0987654321', '1', 1, 1, '1111-11-11', '1', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(12, '1', 2, 1, '0987654321', '2', 2, 2, '2222-02-22', '22', '1', 1, '1', '1', '1', 1, 1, 1, 1),
(13, '90', 90, 1, '0987654321', '90', 90, 90, '9090-09-09', '909090', '3', 4, '3', '5', '7', 2, 2, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD UNIQUE KEY `nik_keluarga` (`nik_keluarga`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
