/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50539
Source Host           : 127.0.0.7:3306
Source Database       : humasbatu

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2017-03-31 10:15:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agenda
-- ----------------------------
DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kegiatan` varchar(255) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` varchar(255) DEFAULT NULL,
  `jam_selesai` varchar(255) DEFAULT NULL,
  `isi` text,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agenda
-- ----------------------------
INSERT INTO `agenda` VALUES ('1', 'nobar arema vs pusamania borneo FC', '2017-03-12', '2017-03-12', '18:00', '20:30', '<p><u><b>?</b></u><b>ayo nobar arema vs PBFC Minggu 12 Maret 2017</b><u></u></p>\"', '1');
INSERT INTO `agenda` VALUES ('2', 'Uklam Tahes', '2017-03-18', '2017-03-19', '08:00', '12:00', '<p>Jalan Sehat Bersama Walikota</p>', '1');
INSERT INTO `agenda` VALUES ('3', 'Konvoy Arema', '2017-03-15', '2017-03-17', '10:00', '17:30', '<p>ayo ikut my friend</p>\"\"', '1');
INSERT INTO `agenda` VALUES ('4', 'Jalan Jamaah Sekota malang', '2017-03-29', '2017-03-30', '06:30', '09:30', '<p>ikut lah jalan sehat sekota malang-batu ada hadiah doorprize 1buah sembako plus uang 200K&nbsp;</p>', '1');
INSERT INTO `agenda` VALUES ('5', 'Jalan sehat', '2017-03-30', '2017-03-31', '06:00', '10:00', '<p>jalan sehat kuy</p>', '1');

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `judul` text,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_petugas` varchar(255) DEFAULT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `jumlah_view` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES ('12', '', 'Kehumasan', 'saas', '<p><b><small></small></b></p><blockquote><b><small>uvuvwevwevwe&nbsp;</small></b></blockquote><p></p>', '170310044916.jpg|', '2017-03-30', '0', '0', '03', '2017', '20');
INSERT INTO `artikel` VALUES ('13', '002', 'Buletin', 'www123', '<p>www123</p>', '170310045814.jpg|', '2017-03-30', '0', '0', '03', '2017', '65');
INSERT INTO `artikel` VALUES ('14', '001', 'Berita', 'Pembukaan Aksioma Tingkat Kota Batu di Alun Alun', '<p>\r\n\r\n</p><p>Batu, Humas – Apel pembukaan Ajang Kompetisi Seni dan Olahraga Madrasah (Aksioma) Tahun 2017 tingkat Kota Batu di laksanakan di Alun – alun Kota Batu, Senin (09/01).</p><p>Aksioma tahun ini mengambil tema “Menumbuh kembangkan sikap kreatif dan sportif dalam mewujudkan madrasah berprestasi dan bermartabat” melibatkan lebih dari dua ribu peserta dari 14 Madrasah Ibtidaiyah se Kota Batu.</p><p>\r\n\r\n</p><p>Hadir dalam pembukaan itu Dra. Mistin Kepala Dinas Pendidikan mewakili Wali Kota Batu bersama ketua KONI Zainul Arifin membuka apel dengan melepas 1000 burung pipit sebagai symbol himbauan menjaga kelestarian alam Kota Batu.</p><p>“Semoga acara ini bisa menjadi momentum strategis madrasah supaya menjadi lebih baik dan dapat mencetak siswa yang berprestasi dan berpotensi dalam bidang seni dan olahraga. Sehingga dapat menghasilkan prestasi yg membanggakan. Panitia dpt melaksanakan acara ini dengan jujur ,transparan dan sportif hingga dapat mencapai tujuannya.” Ungkap Mistin.</p><p>Aksioma Tahun 2017 ini akan digelar mulai tanggal 9 sampai 14 Januari 2017 dengan 18 cabang olahraga dan seni. Nantinya juara tingkat kota dalam aksioma akan mewakili Kota Batu mengikuti aksioma tingkat provinsi Jawa Timur yang akan dilaksanakan di Kota Kediri. (daniel/edy/pandermannews)</p>\r\n\r\n<br><p></p>\r\n\r\n<p></p>', '170314072837.jpg|', '2017-03-14', '1', 'astro', '03', '2017', '100');
INSERT INTO `artikel` VALUES ('15', '002', 'Buletin', 'angga', '<p>peningkatan kualitas pendidikan<br><br>dan pelatihan dengan program \"In-<br>donesia Pintar\"; serta peningkatan<br><br>kesejahteraan masyarakat dengan<br><br>program \"Indonesia Kerja\" dan \"In-<br>donesia Sejahtera\" dengan men-<br>dorong land reform dan program<br><br>kepemilikan tanah seluas 9 hektar,<br><br>program rumahKampung Deret atau<br><br>rumah susun murah yang disubsidi<br><br>serta jaminan sosial untuk rakyat di<br><br>tahun 2019.<br><br>Keenam, meningkatkan<br><br>produktivitas rakyat dan daya saing<br><br>di pasar internasional sehingga bang-<br>sa Indonesia bisa maju dan bangkit<br><br>bersama bangsa-bangsa Asia lainnya.<br><br>Ketujuh, mewujudkan ke-<br>mandirian ekonomi dengan meng-<br>gerakkan sektor-sektor strategis eko-<br>nomi domestik.<br><br>Kedelapan, melakukan rev-<br>olusi karakter bangsa melalui ke-<br>bijakan penataan kembali kuriku-<br>lum pendidikan nasional dengan<br><br>mengedepankan aspek pendidikan<br></p>', '170311045457.jpg|', '2017-03-16', '0', '0', '03', '2017', '26');
INSERT INTO `artikel` VALUES ('17', '009', 'Info Kuliner', 'Roti bakar & susu segar', '<p>Di kota batu juga menghadirkan suasana dingin yang tepat untuk menikmati makanan dan minuman.</p>', '170316093425.jpg|', '2017-03-21', '0', '0', '03', '2017', '37');
INSERT INTO `artikel` VALUES ('19', '004', 'Info dan Pengumuman', 'Info kota batu', '<p>Info kota batu&nbsp;dan malang dan sekitarnya<br></p>', '170313042814.jpg|', '2017-03-13', '1', 'astro', '02', '2017', '27');
INSERT INTO `artikel` VALUES ('22', '004', 'Info dan Pengumuman', 'hehehhe', '<p>hahahaha</p>', '170313043656.jpg|', '2017-03-13', '1', 'astro', '03', '2017', '5');
INSERT INTO `artikel` VALUES ('23', '014', 'Wisata', 'wawawwa', '<p>ini wisata isi wisata&nbsp;</p>', '170313044309.jpg|', '2017-03-13', '1', 'astro', '03', '2017', '36');
INSERT INTO `artikel` VALUES ('24', '', 'Wisata', 'judul 2', '<p>ini isi judul 2</p>', '170313044740.jpg|', '2017-03-13', '1', 'astro', '03', '2017', '16');
INSERT INTO `artikel` VALUES ('30', '008', 'Info Wisata', 'BNS', '<p>Tempat yang cocok untuk menghabiskan malam bersama keluarga.</p>', '170316100609.jpg|', '2017-03-16', '0', '0', '03', '2017', '65');
INSERT INTO `artikel` VALUES ('32', '001', 'Berita', 'test', '<p>\r\n\r\n&nbsp;adalah suatu bentuk bangunan, lambang, perusahaan atau badan usaha akomodasi yang menyediakan pelayanan jasa penginapan, penyedia makanan dan minuman serta fasilitas jasa lainnya dimana semua pelayanan itu diperuntukkan bagi masyarakat umum, baik mereka yang bermalam di <b>hotel&nbsp;?</b>tersebut\r\n\r\n<br></p>', '170316033921.jpg|', '2017-03-16', '0', '0', '03', '2017', '10');
INSERT INTO `artikel` VALUES ('33', '009', 'Info Kuliner', 'Wisata Petik Apel Batu', '<p>Menyediakan petik apel &amp; aneka makanan dan minuman berbahan dasar apel.</p>', '170316095811.jpg|', '2017-03-16', '0', '0', '03', '2017', '5');
INSERT INTO `artikel` VALUES ('34', '008', 'Info Wisata', 'Alun-Alun Batu', '<p>Tempat untuk menghabiskan waktu bersama keluarga.</p>', '170316100742.jpg|', '2017-03-16', '1', 'astro', '03', '2017', '7');
INSERT INTO `artikel` VALUES ('35', '006', 'Info Villa', 'Villa Batu', '<p>Villa yang memiliki view indah.</p>', '170316101228.jpg|', '2017-03-16', '1', 'astro', '03', '2017', '1');
INSERT INTO `artikel` VALUES ('36', '006', 'Info Villa', 'Villa Pelangi', '<p>Villa yang terletak dibatu.</p>', '170316101509.jpg|', '2017-03-16', '1', 'astro', '03', '2017', null);
INSERT INTO `artikel` VALUES ('37', '007', 'Info Homestay', 'Hommies', '<p>Rumah stay untuk tinggal</p>', '170316101910.jpg|', '2017-03-16', '1', 'astro', '03', '2017', '1');
INSERT INTO `artikel` VALUES ('38', '007', 'Info Homestay', 'Home stayed', '<p>rumah singgah sementara.</p>', '170316101937.jpg|', '2017-03-16', '1', 'astro', '03', '2017', '2');
INSERT INTO `artikel` VALUES ('39', '001', 'Berita', 'Panorama', '<p>\r\n\r\n</p><p>Batu, Humas – Apel pembukaan Ajang Kompetisi Seni dan Olahraga Madrasah (Aksioma) Tahun 2017 tingkat Kota Batu di laksanakan di Alun – alun Kota Batu, Senin (09/01).</p><p>Aksioma tahun ini mengambil tema “Menumbuh kembangkan sikap kreatif dan sportif dalam mewujudkan madrasah berprestasi dan bermartabat” melibatkan lebih dari dua ribu peserta dari 14 Madrasah Ibtidaiyah se Kota Batu.</p><p>\r\n\r\n</p><p>Hadir dalam pembukaan itu Dra. Mistin Kepala Dinas Pendidikan mewakili Wali Kota Batu bersama ketua KONI Zainul Arifin membuka apel dengan melepas 1000 burung pipit sebagai symbol himbauan menjaga kelestarian alam Kota Batu.</p><p>“Semoga acara ini bisa menjadi momentum strategis madrasah supaya menjadi lebih baik dan dapat mencetak siswa yang berprestasi dan berpotensi dalam bidang seni dan olahraga. Sehingga dapat menghasilkan prestasi yg membanggakan. Panitia dpt melaksanakan acara ini dengan jujur ,transparan dan sportif hingga dapat mencapai tujuannya.” Ungkap Mistin.</p><p>Aksioma Tahun 2017 ini akan digelar mulai tanggal 9 sampai 14 Januari 2017 dengan 18 cabang olahraga dan seni. Nantinya juara tingkat kota dalam aksioma akan mewakili Kota Batu mengikuti aksioma tingkat provinsi Jawa Timur yang akan dilaksanakan di Kota Kediri. (daniel/edy/pandermannews)</p>\r\n\r\n<br><p></p>\r\n\r\n<p></p>', '170314072837.jpg|', '2017-03-14', '1', 'astro', '03', '2017', '77');
INSERT INTO `artikel` VALUES ('40', '001', 'Berita', 'Pembukaan', '<p>\r\n\r\n</p><p>Batu, Humas – Apel pembukaan Ajang Kompetisi Seni dan Olahraga Madrasah (Aksioma) Tahun 2017 tingkat Kota Batu di laksanakan di Alun – alun Kota Batu, Senin (09/01).</p><p>Aksioma tahun ini mengambil tema “Menumbuh kembangkan sikap kreatif dan sportif dalam mewujudkan madrasah berprestasi dan bermartabat” melibatkan lebih dari dua ribu peserta dari 14 Madrasah Ibtidaiyah se Kota Batu.</p><p>\r\n\r\n</p><p>Hadir dalam pembukaan itu Dra. Mistin Kepala Dinas Pendidikan mewakili Wali Kota Batu bersama ketua KONI Zainul Arifin membuka apel dengan melepas 1000 burung pipit sebagai symbol himbauan menjaga kelestarian alam Kota Batu.</p><p>“Semoga acara ini bisa menjadi momentum strategis madrasah supaya menjadi lebih baik dan dapat mencetak siswa yang berprestasi dan berpotensi dalam bidang seni dan olahraga. Sehingga dapat menghasilkan prestasi yg membanggakan. Panitia dpt melaksanakan acara ini dengan jujur ,transparan dan sportif hingga dapat mencapai tujuannya.” Ungkap Mistin.</p><p>Aksioma Tahun 2017 ini akan digelar mulai tanggal 9 sampai 14 Januari 2017 dengan 18 cabang olahraga dan seni. Nantinya juara tingkat kota dalam aksioma akan mewakili Kota Batu mengikuti aksioma tingkat provinsi Jawa Timur yang akan dilaksanakan di Kota Kediri. (daniel/edy/pandermannews)</p>\r\n\r\n<br><p></p>\r\n\r\n<p></p>', '170314072837.jpg|', '2017-03-14', '1', 'astro', '03', '2017', '5');
INSERT INTO `artikel` VALUES ('41', '001', 'Berita', 'Upacara', '<p>\r\n\r\n</p><p>Batu, Humas – Apel pembukaan Ajang Kompetisi Seni dan Olahraga Madrasah (Aksioma) Tahun 2017 tingkat Kota Batu di laksanakan di Alun – alun Kota Batu, Senin (09/01).</p><p>Aksioma tahun ini mengambil tema “Menumbuh kembangkan sikap kreatif dan sportif dalam mewujudkan madrasah berprestasi dan bermartabat” melibatkan lebih dari dua ribu peserta dari 14 Madrasah Ibtidaiyah se Kota Batu.</p><p>\r\n\r\n</p><p>Hadir dalam pembukaan itu Dra. Mistin Kepala Dinas Pendidikan mewakili Wali Kota Batu bersama ketua KONI Zainul Arifin membuka apel dengan melepas 1000 burung pipit sebagai symbol himbauan menjaga kelestarian alam Kota Batu.</p><p>“Semoga acara ini bisa menjadi momentum strategis madrasah supaya menjadi lebih baik dan dapat mencetak siswa yang berprestasi dan berpotensi dalam bidang seni dan olahraga. Sehingga dapat menghasilkan prestasi yg membanggakan. Panitia dpt melaksanakan acara ini dengan jujur ,transparan dan sportif hingga dapat mencapai tujuannya.” Ungkap Mistin.</p><p>Aksioma Tahun 2017 ini akan digelar mulai tanggal 9 sampai 14 Januari 2017 dengan 18 cabang olahraga dan seni. Nantinya juara tingkat kota dalam aksioma akan mewakili Kota Batu mengikuti aksioma tingkat provinsi Jawa Timur yang akan dilaksanakan di Kota Kediri. (daniel/edy/pandermannews)</p>\r\n\r\n<br><p></p>\r\n\r\n<p></p>', '170314072837.jpg|', '2017-03-14', '1', 'astro', '03', '2017', '73');
INSERT INTO `artikel` VALUES ('42', '001', 'Berita', 'Adzan', '<p>\r\n\r\n</p><p>Batu, Humas – Apel pembukaan Ajang Kompetisi Seni dan Olahraga Madrasah (Aksioma) Tahun 2017 tingkat Kota Batu di laksanakan di Alun – alun Kota Batu, Senin (09/01).</p><p>Aksioma tahun ini mengambil tema “Menumbuh kembangkan sikap kreatif dan sportif dalam mewujudkan madrasah berprestasi dan bermartabat” melibatkan lebih dari dua ribu peserta dari 14 Madrasah Ibtidaiyah se Kota Batu.</p><p>\r\n\r\n</p><p>Hadir dalam pembukaan itu Dra. Mistin Kepala Dinas Pendidikan mewakili Wali Kota Batu bersama ketua KONI Zainul Arifin membuka apel dengan melepas 1000 burung pipit sebagai symbol himbauan menjaga kelestarian alam Kota Batu.</p><p>“Semoga acara ini bisa menjadi momentum strategis madrasah supaya menjadi lebih baik dan dapat mencetak siswa yang berprestasi dan berpotensi dalam bidang seni dan olahraga. Sehingga dapat menghasilkan prestasi yg membanggakan. Panitia dpt melaksanakan acara ini dengan jujur ,transparan dan sportif hingga dapat mencapai tujuannya.” Ungkap Mistin.</p><p>Aksioma Tahun 2017 ini akan digelar mulai tanggal 9 sampai 14 Januari 2017 dengan 18 cabang olahraga dan seni. Nantinya juara tingkat kota dalam aksioma akan mewakili Kota Batu mengikuti aksioma tingkat provinsi Jawa Timur yang akan dilaksanakan di Kota Kediri. (daniel/edy/pandermannews)</p>\r\n\r\n<br><p></p>\r\n\r\n<p></p>', '170314072837.jpg|', '2017-03-14', '1', 'astro', '03', '2017', '75');
INSERT INTO `artikel` VALUES ('45', '007', 'Info Homestay', 'Kartika Wijaya Hotel', '<p>\r\n\r\n<p>Here the enjoyable beautiful view of Panderman Mountain which you could get when you and your family plan to your vacation at Kartika Wijaya Hotel.</p><p>The fresh air that you could feel upon you arrive and put your step at the lobby of the hotel that built in 1891 by using Dutch architecture and equipped with modern buildings.</p>\r\n\r\n<br></p>', '170329040912.jpg|', '2017-03-29', '1', 'astro', '03', '2017', '6');
INSERT INTO `artikel` VALUES ('52', '001', 'Berita', 'Pembukaan Aksioma Tingkat Kota Batu di Alun Alun', '<p>\r\n\r\n</p><p>\r\n\r\n</p><p>Batu, Humas – Apel pembukaan Ajang Kompetisi Seni dan Olahraga Madrasah (Aksioma) Tahun 2017 tingkat Kota Batu di laksanakan di Alun – alun Kota Batu, Senin (09/01).</p><p>Aksioma tahun ini mengambil tema “Menumbuh kembangkan sikap kreatif dan sportif dalam mewujudkan madrasah berprestasi dan bermartabat” melibatkan lebih dari dua ribu peserta dari 14 Madrasah Ibtidaiyah se Kota Batu.</p>\r\n\r\nHadir dalam pembukaan itu Dra. Mistin Kepala Dinas Pendidikan mewakili Wali Kota Batu bersama ketua KONI Zainul Arifin membuka apel dengan melepas 1000 burung pipit sebagai symbol himbauan menjaga kelestarian alam Kota Batu.<p></p><p>“Semoga acara ini bisa menjadi momentum strategis madrasah supaya menjadi lebih baik dan dapat mencetak siswa yang berprestasi dan berpotensi dalam bidang seni dan olahraga. Sehingga dapat menghasilkan prestasi yg membanggakan. Panitia dpt melaksanakan acara ini dengan jujur ,transparan dan sportif hingga dapat mencapai tujuannya.” Ungkap Mistin.</p><p>Aksioma Tahun 2017 ini akan digelar mulai tanggal 9 sampai 14 Januari 2017 dengan 18 cabang olahraga dan seni. Nantinya juara tingkat kota dalam aksioma akan mewakili Kota Batu mengikuti aksioma tingkat provinsi Jawa Timur yang akan dilaksanakan di Kota Kediri. (daniel/edy/pandermannews)</p>\r\n\r\n<br><p></p>', '170329074336.jpg|', '2017-03-29', '0', '0', '03', '2017', '4');
INSERT INTO `artikel` VALUES ('54', '001', 'Berita', 'dccdcaac', '<p>asasaccaac</p>', '170329084857.jpg|', '2017-03-29', '1', 'astro', '03', '2017', '1');
INSERT INTO `artikel` VALUES ('55', '006', 'Info Villa', 'wew', '<p>ssss</p>', '170330044608.jpg|', '2017-03-30', '1', 'astro', '03', '2017', '8');
INSERT INTO `artikel` VALUES ('56', '001', 'Berita', 'New Years Reptil Fun Gathering 2017 di Kota Batu', '<p>\r\n\r\n<p>Batu, Humas – Pecinta pecinta reptil di Jawa Timur mengikuti New Years Reptil Fun Gathering Expo dan Contest di Predator fun Park, Sabtu-Minggu (7-8/1).</p><p>Ada Komunitas Kura Jatim, Komunitas Ikan dan Pasuruan Reptil Community. Ratusan Reptil bisa dilihat secara langsung bagi pengunjung dan masyarakat. Di antaranya Ular, Iguana, Biawak, Kura, Ikan dll. Peserta ada yang dari luar kota, seperti Jombang, Kediri, Pasuruan, Sidoarjo dan paling jauh dari Solo.</p><p>Ketua Panitia, Bagus Setyawan, mengatakan bahwa kegiatan ini baru pertama kali di selenggarakan di Predator Fun Park dan selanjutnya akan diselenggarakan secara rutin tahunan.</p><p>Dalam acara ini juga ada lelang satwa dari komunitas. Satwa yang dilelang non apendik atau satwa yang dilindungi. “Kami melarang keras satwa dilindungi dilelang. Lelang hanya berlaku bagi satwa non dilindungi,” ujar Bagus. (edy/pandermannews)</p>\r\n\r\n<br></p>', '170330044805.jpeg|', '2017-03-30', '88', 'latifah', '03', '2017', '4');
INSERT INTO `artikel` VALUES ('58', '008', 'Info Wisata', 'tesst', '<p>testets&nbsp;</p>', '170330070929.jpg|', '2017-03-30', '1', 'astro', '03', '2017', '1');
INSERT INTO `artikel` VALUES ('61', '005', 'Info Hotel', 'test', '<p>\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n\r\n\r\ntest\r\n\r\n</p>', '170330082447.jpg|', '2017-03-30', '0', '0', '03', '2017', '4');
INSERT INTO `artikel` VALUES ('62', '005', 'Info Hotel', 'anam', '<p>anamanam</p>', '170330082630.jpg|', '2017-03-30', '1', 'astro', '03', '2017', '15');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `id_ym` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `handphone` varchar(255) DEFAULT NULL,
  `pin_bb` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `ig` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for download
-- ----------------------------
DROP TABLE IF EXISTS `download`;
CREATE TABLE `download` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `jenis_dokumen` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of download
-- ----------------------------
INSERT INTO `download` VALUES ('7', 'Hukum', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('8', 'Hukum', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095833.gif|', '2017-03-16');
INSERT INTO `download` VALUES ('10', 'Humas', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('13', 'Humas', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('14', 'Humas', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('15', 'UMUM', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('16', 'UMUM', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');
INSERT INTO `download` VALUES ('17', 'Umum', 'PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB', '<p>PERWALI NO.43 Tahun 2104 – Tentang Pedoman Penyusunan SOP KWB<br></p>', '170316095727.png|', '2017-03-16');

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES ('3', 'beautiful Malang', '<p>gondola kota batu</p>', '170316092650.jpg|', '2017-03-15', '1', 'www.google.com');
INSERT INTO `galeri` VALUES ('5', 'Photo PRESENT by Gopro ', '<p>foto kota batu menggunakan gopro</p>', '170316092759.jpg|', '2017-03-17', '1', 'http://humas.batukota.go.id/gallery/');
INSERT INTO `galeri` VALUES ('7', 'Suasana indah Pada Malam Hari', '<p>Suasana indah Pada Malam Hari di Kota Batu</p>', '170316092824.jpg|', '2017-03-10', '1', 'http://humas.batukota.go.id/gallery/');
INSERT INTO `galeri` VALUES ('9', 'HBD Kota Batu Ke-14th', '<p>Ulang Tahun Kota Batu Ke 14th</p>', '170316092843.jpg|', '2017-03-31', '1', 'http://humas.batukota.go.id/gallery/');
INSERT INTO `galeri` VALUES ('10', 'Telah Dibuka Wisata Alam Kusuma Agro Wisata', '<p>Telah Dibuka Wisata Alam Kusuma Agro Wisata Kota Batu<br></p>', '170316100032.jpg|', '2017-03-16', '1', 'Suasana indah Pada Malam Hari');

-- ----------------------------
-- Table structure for kategori_artikel
-- ----------------------------
DROP TABLE IF EXISTS `kategori_artikel`;
CREATE TABLE `kategori_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(255) DEFAULT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori_artikel
-- ----------------------------
INSERT INTO `kategori_artikel` VALUES ('5', '002', 'Buletin');
INSERT INTO `kategori_artikel` VALUES ('6', '003', 'Hukum');
INSERT INTO `kategori_artikel` VALUES ('7', '004', 'Info dan Pengumuman');
INSERT INTO `kategori_artikel` VALUES ('8', '005', 'Info Hotel');
INSERT INTO `kategori_artikel` VALUES ('9', '006', 'Info Villa');
INSERT INTO `kategori_artikel` VALUES ('10', '007', 'Info Homestay');
INSERT INTO `kategori_artikel` VALUES ('11', '008', 'Info Wisata');
INSERT INTO `kategori_artikel` VALUES ('12', '009', 'Info Kuliner');
INSERT INTO `kategori_artikel` VALUES ('13', '010', 'Kehumasan');
INSERT INTO `kategori_artikel` VALUES ('14', '011', 'Lain-lain');
INSERT INTO `kategori_artikel` VALUES ('15', '012', 'Olahraga');
INSERT INTO `kategori_artikel` VALUES ('16', '013', 'Pers Release');
INSERT INTO `kategori_artikel` VALUES ('17', '014', 'Wisata');
INSERT INTO `kategori_artikel` VALUES ('18', '001', 'Berita');

-- ----------------------------
-- Table structure for komentar_artikel
-- ----------------------------
DROP TABLE IF EXISTS `komentar_artikel`;
CREATE TABLE `komentar_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_artikel` varchar(255) DEFAULT NULL,
  `komentar` text,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of komentar_artikel
-- ----------------------------
INSERT INTO `komentar_artikel` VALUES ('1', '14', 'Kapan Acara dimulai ??', 'Yuko', 'yukotanjung@gmail.com', '2017-03-14');
INSERT INTO `komentar_artikel` VALUES ('2', '14', 'Test', 'Erlangga', 'erlanggaax13@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('3', '17', 'test informasi\r\n', 'Erlangga', 'erlanggaax13@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('4', '17', 'test', 'marvick', 'marvick@marvick.marvick', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('6', '1', 'okeoeoekoek', 'jonathan', 'ok@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('7', '1', 'asd', 'aku', '@okoko.mail', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('8', '1', 'jonathan Orlen', 'jonathan', 'jonatha@orlen.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('9', '29', 'werw', 'wer', 'wahyu.orlen@hotmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('10', '26', 'wizz yo', 'wizz', 'wizz@yahoo.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('11', '1', 'nttaps', 'anam', 'choirulanam2222@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('12', '13', 'asdfasfasfsaf', 'oleng', '@gmail', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('13', '14', '<p>test part 2</p>', 'astro', null, '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('14', '29', 'Saluuuut bwt tulisan anda, impian merupakan sesuatu yang pasti dapatkan hari esok, bila kita selalu berdoa dan bekerja. Ora Et Labora', 'Laluna', 'laluna@gmail.comn', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('15', '3', 'wwww', 'Aaaas', 'erlanggaax2222@gmail.com', '2017-03-15');
INSERT INTO `komentar_artikel` VALUES ('16', '31', 'ini hotel ya ?', 'anam', 'choirulanam2222@gmail.com', '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('17', '32', 'artikelnya bagus min', 'anam', 'choirulanam2222@gmail.com', '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('18', '32', '<p>wah makasih ya :v</p>', 'astro', null, '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('19', '1', 'asdasd', 'asd', 'asdad', '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('20', '1', 'ok deh sip', 'asd', 'asd', '2017-03-16');
INSERT INTO `komentar_artikel` VALUES ('21', '34', 'sa', 'dasd', 'pellondou.jo@gmail.com', '2017-03-29');
INSERT INTO `komentar_artikel` VALUES ('22', '2', 'q', 'q', 'q', '2017-03-29');
INSERT INTO `komentar_artikel` VALUES ('23', '56', 'Kok geli ya liat reptil gitu ..', 'Yuko', 'yukotanjung@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('24', '30', 'bagus sekalii', 'Yuko', 'yukotanjung@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('25', '34', 'testesa', 'Erlangga', 'erlanggaax13@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('26', '34', 'sasa', 'sasa', 'sasa', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('27', '34', 'assa', 'saas', 'assa', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('28', '34', 'waawaw', 'Test', 'erlanggaax2222@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('29', '34', 'anggazzz', 'angga', 'angga@angga.angga', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('30', '34', '', '', '', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('31', '1', 'errrrrr', 'Erlangga', 'erlanggaax13@gmail.com', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('32', '14', 'sasa', 'Assasa', 'assa', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('33', '14', 'wawawwa', 'asmi', 'asas', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('34', '13', 'errrrrr', 'baru', 'awaw', '2017-03-30');
INSERT INTO `komentar_artikel` VALUES ('35', '55', 'test', 'test', 'anam', '2017-03-30');

-- ----------------------------
-- Table structure for sambutan
-- ----------------------------
DROP TABLE IF EXISTS `sambutan`;
CREATE TABLE `sambutan` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `jenis_sambutan` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sambutan
-- ----------------------------
INSERT INTO `sambutan` VALUES ('0', '6	walikota	asdad	<p>asdasdasd<br></p>	170314071951.png|	2017-03-14', null, null, null, '0000-00-00');
INSERT INTO `sambutan` VALUES ('1', 'walikota', 'Pengertian Kota Batu dan asal usulnya', 'Kota adalah', '170313033511.jpg|', '2017-03-13');
INSERT INTO `sambutan` VALUES ('2', 'humas', 'Humas 111', 'Humas Humas123', '170310042644.jpg|', '2017-03-10');
INSERT INTO `sambutan` VALUES ('3', 'pers', 'Test Sambutan baru', 'sasa baru', '170310042837.jpg|', '2017-03-10');
INSERT INTO `sambutan` VALUES ('4', 'walikota', 'Silsilah Keluarga', '<p>kota batu</p>', '170313033523.jpg|', '2017-03-13');
INSERT INTO `sambutan` VALUES ('5', 'walikota', 'okeoekoke', '<p>sdfdfsdfsdfsdfsdf<br></p>', '170314071858.png|', '2017-03-14');
INSERT INTO `sambutan` VALUES ('6', 'walikota', 'asdad', '<p>asdasdasd<br></p>', '170314071951.png|', '2017-03-14');
INSERT INTO `sambutan` VALUES ('7', 'walikota', 'SAMBUTAN WALIKOTA BATU PADA ACARA PEMBUKAAN AJANG KOMPETISI SENI DAN OLAHRAGA MADRASAH (AKSIOMA), KOTA BATU TAHUN 2017', '<p>\r\n\r\n</p><p><strong>WALIKOTA BATU</strong></p><p><strong>SAMBUTAN WALIKOTA BATU</strong></p><p><strong>PADA ACARA </strong><strong>PEMBUKAAN AJANG KOMPETISI SENI DAN OLAHRAGA MADRASAH (AKSIOMA),</strong></p><p><strong>KOTA BATU TAHUN 2017</strong></p><p><strong>&nbsp;</strong></p><p><strong>Batu</strong><strong>, 9 Januari 2017</strong></p><p><strong>&nbsp;</strong></p><p>Yang saya hormati :</p><ol><li>Forkompinda Kota Batu;</li><li>Kepala Kementrian Agama Kota Batu;</li><li>Ketua KONI Kota Batu;</li><li>Kepala Satuan Kerja di Pemerintah Kota Batu;</li><li>Ketua Dewan Pendidikan Kota Batu;</li><li>Kepala UPTD Batu, Junrejo dan Bumiaji;</li><li>Para Kepala Madrasah di Kota Batu;</li><li>Panitia AKSIOMA se-Kota Batu;</li><li>Pendamping Peserta Ajang Kompetisi Seni Dan Olahraga Madrasah (AKSIOMA) Kota Batu;</li></ol><p>Anak- anak yang saya sayangi peserta Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) Tingkat Kota Batu.</p><p><strong><em>Assalamu’alaikum Wr. Wb.</em></strong></p><p><strong><em>Salam sejahtera bagi kita semua,</em></strong></p><p><strong><em>&nbsp; &nbsp; &nbsp; &nbsp; </em></strong>Sebagai insan yang beriman dan bertakwa,  marilah kita sampaikan puji syukur ke hadirat Allah SWT. Berkat karunia dan hidayah-Nya, kita berkesempatan untuk bersama-sama menghadiri pembukaan <strong><em>Ajang Kompetisi Seni dan Olahraga Madrasah </em></strong><strong><em>(AKSIOMA)</em></strong><strong><em>&nbsp;se </em></strong><strong><em>Kota Batu</em></strong><strong><em>&nbsp;Tahun 201</em></strong><strong><em>7</em></strong><strong><em>. </em></strong>Shalawat serta salam marilah kita haturkan kepada junjungan kita, Nabi Muhammad SAW, keluarga,sahabat dan segenap umatnya.</p><p></p><p><strong><em>Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Pendidikan Nasional bertujuan untuk berkembangnya potensi peserta didik agar menjadi manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia, berilmu, cakap, kreatif, mandiri dan menjadi warga negara yang demokratis dan bertanggung jawab.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Salah satu faktor kunci penting pendidikan dalam mengembangkan potensi peserta didik baik pada bidang pengetahuan, teknologi, olahraga, seni, bahasa, dan kecakapan hidup lainnya, adalah perlu ada upaya maksimal baik melalui proses pembelajaran yang bermutu maupun latihan-latihan yang kontinue dan komprehensif. Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) dapat dijadikan wadah untuk mengembangkan potensi peserta didik pada bidang seni dan olahraga sebagai salah satu instrumen untuk mengukur kompetensi siswa dan mutu madrasah.</p><p></p><p><strong><em>Para Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) se Kota Batu Tahun 2017 ini merupakan momentum strategis bagi madrasah untuk berhijrah dari yang semula madrasah hanya merupakan sesuatu hal yang biasa menjadi lebih baik dan lebih hidup. Berhijrah artinya dalam rangka mencetak siswa madrasah yang mempunyai berbagai kemampuan khususnya di bidang seni dan olahraga.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Kegiatan ini memberikan perhatian pada kekuatan jiwa dan raga siswa madrasah dalam mengembangkan kreatifitas dan prestasi serta mutu madrasah. Kompetisi ini juga merupakan salah satu dari proses pembelajaran dan untuk berekspresi, bertindak sportif serta beraktualisasi diri.</p><p></p><p><strong><em>Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Kompetisi atau lomba yang diadakan pada AKSIOMA ini akan memberikan kesempatan dan peluang yang sama kepada semua siswa madrasah untuk berkompetisi pada berbagai bidang seni dan olahraga, selain itu kegiatan ini juga merupakan bagian dari upaya pemerintah dalam memberikan layanan pendidikan sesuai dengan bakat dan kemampuan siswa sebagaimana tertuang pada pasal 12 Undang-Undang Nomor 20 Tahun 2013 tentang <strong>Sistem Pendidikan Nasional.</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Adapun tujuan yang ingin dicapai dalam pelaksanaan AKSIOMA adalah :</p><ol><li>Mengembangkan potensi dan kreativitas siswa;</li><li>Menumbuhkan watak yang jujur, tekun, cermat dan berpandangan terbuka;</li><li>Membangun budaya berkompetisi secara sehat, fair dan sportif;</li><li>Membangun citra madrasah sebagai basis pengembangan rohani dan jasmani, skill dan intelektualitas;</li><li>Memberikan penghargaan bagi siswa berprestasi sesuai dengan minat dan bakatnya; dan</li><li>Terbangunnya rasa kebersamaan antar siswa madrasah dan antar madrasah.</li></ol><p></p><p><strong><em>Para Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; AKSIOMA memberikan nuansa yang sangat melekat tentang pentingnya pengembangan potensi dan kreativitas siswa madrasah, sebab diantara sekian banyak siswa tentu diantaranya ada yang memiliki bakat dibidang seni dan olahraga yang apabila diarahkan, dikembangkan dan dilatih tentu akan dapat menghasilkan prestasi yang membanggakan. Oleh karenanya saya menyambut baik dan sangat mendukung kegiatan ini, sebab AKSIOMA ini merupakan ajang yang tepat untuk menyalurkan bakat siswa, karenanya ajang ini perlu dilakukan secara berkelanjutan sehingga dapat melahirkan bakat-bakat potensial yang kelak dapat mengharumkan nama Jawa Timur dikancah regional, nasional bahkan tidak menutup kemungkinan tingkat dunia.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Dengan event ini, madrasah diharapkan bisa menjadi lumbung atlet yang berkualitas. Kini saatnya bagi madrasah untuk membuktikan bahwa lembaga berbasis Islam ini bisa lebih baik lagi. Apapun bisa kita</p><p>raih dengan bermodalkan keimanan dan ketekunan, serta kekuatan doa. Majulah siswa madrasah dengan semangat tinggi agar kalian bisa menjadi yang terbaik.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; AKSIOMA ini merupakan barometer tolak ukur kemampuan daerah dalam bidang seni dan olahraga agar dapat bersaing di tingkat nasional. Dari berbagai hasil riset dan sains, hasil raport dan UN bukan segalanya, tapi kompetensi dan kejujuran mempunyai peran besar. Maka dari itu, siswa madrasah harus memegang teguh dua hal tersebut.</p><p><strong>&nbsp;</strong></p><p><strong><em>Hadirin yang saya hormati,</em></strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Saya berpesan kepada Panitia dan Peserta Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) se Kota Batu &nbsp;Tahun 2017 agar melaksanakan kegiatan secara jujur, transparan dan sportif, sehingga tujuan dilaksanakan kompetisi madrasah ini dapat tercapai.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Kepada peserta kegiatan ini jadikanlah Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) ini sebagai salah satu wadah strategis untuk merealisasikan paradigma pendidikan bercorak Character Building (Pembangunan Karakter). Marilah kita renungkan kata seorang bijak berkata <strong><em>“ perbuatan seorang bijak dihadapan seribu orang, lebih bermanfaat dari untaian hikmah seribu bijak dihadapan satu orang “. </em></strong>Dengan kata lain keteladanan adalah kunci dari pendidikan karakter.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Dengan mengambil tema kegiatan yaitu <strong>“</strong><strong>Menumbuhkembangkan ikap kreatif,professional dan sportif dalam mewujudkan madrasah yang berprestasi dan bermartabat </strong><strong>“</strong>, kepada anak-anakku sekalian Peserta AKSIOMA se Kota Batu Tahun 2017 ini harus merasa bangga menjadi siswa madrasah, jangan minder, sebab semua ilmu bisa kita dapatkan di madrasah, tak hanya ilmu agama tetapi sains, seni dan olahraga juga terakomodasi.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Ada nilai plus pada madrasah yang tidak dimiliki oleh sekolah umum yaitu selain diberikan pengetahuan umum, siswa diberikan porsi pendidikan akhlak/agama lebih banyak dibandingkan sekolah umum, sehingga lulusan madrasah selain mengusai ilmu pengetahuan juga memiliki kualitas keimanan dan ketaqwaan yang baik. Madrasah tak hanya bisa mencetak orang yang bisa mengaji, tapi juga kader-kader bangsa yang berkarakter serta profesional.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; Dengan perpaduan antara iman, ilmu dan amal, merupakan nilai lebih dari madrasah. Dengan agama hidup kita jadi berkah, dengan ilmu bisa terarah, dengan olahraga hidup kita akan jadi sehat dan dengan seni hidup kita terasa indah. Selamat Berlomba dan Bertanding, junjung tinggi sportifitas dan kejujuran dalam meraih prestasi.</p><p>Akhirnya, dengan mengucap :</p><p><strong><em>Bismillahirrahmaanirrahiim</em></strong></p><p>Pada hari ini, Senin tanggal 9 Januari 2017, Ajang Kompetisi Seni dan Olahraga Madrasah (AKSIOMA) , se Kota Batu Tahun 2017 secara resmi saya nyatakan dimulai pelaksanaannya.</p><p>Semoga Allah SWT senantiasa meridhoi dan memudahkan langkah-langkah kita. Sekian.</p><p><strong><em>Wabillahitaufiq walhidayah,</em></strong></p><p><strong><em>Wassalamu’alaikum Wr. Wb.</em></strong></p><p><strong><em>&nbsp;</em></strong></p><p><strong>&nbsp;</strong></p><p><strong>WALIKOTA BATU</strong></p><p><strong>&nbsp;</strong></p><p><strong>&nbsp;</strong></p><p><strong>EDDY RUMPOKO</strong></p>\r\n\r\n<br><p></p>', '170329075441.jpg|', '2017-03-29');

-- ----------------------------
-- Table structure for sejarah_kota
-- ----------------------------
DROP TABLE IF EXISTS `sejarah_kota`;
CREATE TABLE `sejarah_kota` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sejarah_kota
-- ----------------------------
INSERT INTO `sejarah_kota` VALUES ('2', 'Sejarah', '<p>\r\n\r\n</p><p><strong></strong>\r\n\r\n<p><strong>Kota Batu</strong>&nbsp;adalah sebuah <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kota\">kota</a>&nbsp;di <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Provinsi\">Provinsi</a>&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Jawa_Timur\" title=\"Link: https://id.wikipedia.org/wiki/Jawa_Timur\">Jawa Timur</a>, <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Indonesia\" title=\"Link: https://id.wikipedia.org/wiki/Indonesia\">Indonesia</a>. Kota ini terletak 90 km sebelah barat daya <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Surabaya\">Surabaya</a>&nbsp;atau 15 km sebelah barat laut <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Malang\">Malang</a>. Kota Batu berada di jalur yang menghubungkan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Malang\">Malang</a>–<a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kediri\">Kediri</a>&nbsp;dan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Malang\">Malang</a>–<a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Jombang\" title=\"Link: https://id.wikipedia.org/wiki/Jombang\">Jombang</a>. Kota Batu berbatasan dengan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kabupaten_Mojokerto\">Kabupaten Mojokerto</a>&nbsp;dan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kabupaten_Pasuruan\">Kabupaten Pasuruan</a>&nbsp;di sebelah utara serta dengan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kabupaten_Malang\">Kabupaten Malang</a>&nbsp;di sebelah timur, selatan, dan barat. Wilayah kota ini berada di ketinggian 700-1.700 meter di atas permukaan laut dengan suhu udara rata-rata mencapai 12-19 derajat <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Celsius\">Celsius</a>.</p><p>Kota Batu dahulu merupakan bagian dari Kabupaten Malang, yang kemudian ditetapkan menjadi <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kota_administratif\">kota administratif</a>&nbsp;pada 6 Maret 1993. Pada tanggal 17 Oktober 2001, Batu ditetapkan sebagai kota otonom yang terpisah dari Kabupaten Malang.</p><p>Batu dikenal sebagai salah satu kota wisata terkemuka di Indonesia karena potensi keindahan alam yang luar biasa. Kekaguman bangsa Belanda terhadap keindahan dan keelokan alam Batu membuat wilayah kota Batu disejajarkan dengan sebuah negara di Eropa yaitu <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Swiss\">Swiss</a>&nbsp;dan dijuluki sebagai <em>De Kleine Zwitserland</em>&nbsp;atau Swiss Kecil di Pulau Jawa<a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kota_Batu#cite_note-asalusul-2\">[2]</a>&nbsp;Bersama dengan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kota_Malang\">Kota Malang</a>&nbsp;dan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kabupaten_Malang\">Kabupaten Malang</a>, Kota Batu merupakan bagian dari kesatuan wilayah yang dikenal dengan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Malang_Raya\">Malang Raya</a>&nbsp;(Wilayah Metropolitan Malang).</p><p>Sejak abad ke-10, wilayah Batu dan sekitarnya telah dikenal sebagai tempat peristirahatan bagi kalangan keluarga kerajaan, karena wilayah adalah daerah pegunungan dengan kesejukan udara yang nyaman, juga didukung oleh keindahan pemandangan alam sebagai ciri khas daerah pegunungan.</p><p>Pada waktu pemerintahan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kerajaan_Medang\">Kerajaan Medang</a>&nbsp;di bawah <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Mpu_Sindok\">Raja Sindok</a>, seorang petinggi Kerajaan bernama Mpu Supo diperintah oleh Raja untuk membangun tempat peristirahatan keluarga kerajaan di pegunungan yang didekatnya terdapat mata air. Dengan upaya yang keras, akhirnya Mpu Supo menemukan suatu kawasan yang sekarang lebih dikenal sebagai kawasan Wisata Songgoriti.</p><p>Atas persetujuan Raja Sindok, Mpu Supo yang konon kabarnya juga sakti mandraguna itu mulai membangun kawasan Songgoriti sebagai tempat peristirahatan keluarga kerajaan serta dibangun sebuah <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Candi\">candi</a>&nbsp;yang diberi nama <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Candi_Sanggariti\">Candi Supo</a><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kota_Batu#cite_note-asalusul-2\">[2]</a>.</p><p>Di tempat peristirahatan tersebut terdapat sumber mata air yang mengalir dingin dan sejuk seperti semua mata air di wilayah pegunungan. Mata air dingin tersebut sering digunakan mencuci keris-keris yang bertuah sebagai benda pusaka dari Kerajaan Medang. Oleh karena sumber mata air yang sering digunakan untuk mencuci benda-benda kerajaan yang bertuah dan mempunyai kekuatan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Supranatural\">supranatural</a>&nbsp;yang maha dahsyat, akhirnya sumber mata air yang semula terasa dingin dan sejuk akhirnya berubah menjadi sumber air panas, dan sumber air panas itu sampai sekarang menjadi sumber abadi di kawasan Wisata Songgoriti.</p><p>Wilayah Kota Batu yang terletak di dataran tinggi di lereng pegunungan dengan ketinggian 700 sampai 1.700 meter di atas permukaan laut, berdasarkan kisah-kisah orang tua maupun dokumen yang ada maupun yang dilacak keberadaannya, sampai saat ini belum diketahui kepastiannya tentang kapan nama “Batu” mulai disebut untuk menamai kawasan peristirahatan tersebut.</p><p>Dari beberapa pemuka masyarakat setempat memang pernah mengisahkan bahwa sebutan Batu berasal dari nama seorang ulama pengikut Pangeran Diponegoro yang bernama Abu Ghonaim atau disebut sebagai Kyai Gubug Angin yang selanjutnya masyarakat setempat akrab menyebutnya dengan panggilan Mbah Wastu. Dari kebiasaan kultur Jawa yang sering memperpendek dan mempersingkat mengenai sebutan nama seseorang yang dirasa terlalu panjang, juga agar lebih singkat penyebutannya serta lebih cepat bila memanggil seseorang, akhirnya lambat laun sebutan Mbah Wastu dipanggil Mbah Tu menjadi Mbatu atau Batu sebagai sebutan yang digunakan untuk sebuah kota dingin di Jawa Timur.</p><p>Sedikit menengok ke belakang tentang sejarah keberadaan Abu Ghonaim sebagai cikal bakal serta orang yang dikenal sebagai pemuka masyarakat yang memulai <em>babad alas</em>&nbsp;dan dipakai sebagai inspirasi dari sebutan wilayah Batu, sebenarnya Abu Ghonaim sendiri adalah berasal dari wilayah Jawa Tengah. Abu Ghonaim sebagai pengikut Pangeran Diponegoro yang setia, dengan sengaja meninggalkan daerah asalnya Jawa Tengah dan hijrah ke kaki <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Panderman\">Gunung Panderman</a>&nbsp;untuk menghindari pengejaran dan penangkapan dari serdadu Belanda (Kompeni).</p><p>Abu Ghonaim atau Mbah Wastu yang memulai kehidupan barunya bersama dengan masyarakat yang ada sebelumnya serta ikut berbagi rasa, pengetahuan dan ajaran yang diperolehnya semasa menjadi pengikut <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Pangeran_Diponegoro\">Pangeran Diponegoro</a>. Akhirnya banyak penduduk dan sekitarnya dan masyarakat yang lain berdatangan dan menetap untuk berguru, menuntut ilmu serta belajar agama kepada Mbah Wastu<a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Kota_Batu#cite_note-asalusul-2\">[2]</a>.</p><p>Awalnya mereka hidup dalam kelompok (komunitas) di daerah Bumiaji, Sisir dan Temas, namun akhirnya lambat laun komunitasnya semakin besar dan banyak serta menjadi suatu masyarakat yang ramai.</p><p><strong>Geografi</strong></p><p>Salah satu wilayah perkebunan di <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Bumiaji,_Batu\">Kecamatan Bumiaji</a>, Kota Batu dengan latar belakang <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Kawi\">Gunung Kawi</a>.</p><p>Wilayah Kota Batu terletak di kaki dan lereng pegunungan dan berada pada ketinggian rata-rata 700-1.700 m di atas permukaan laut dengan suhu udara rata-rata mencapai 12-19 derajat <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Celsius\">Celsius</a>. Batu dikelilingi beberapa <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung\">gunung</a>, di antaranya adalah:</p><ul><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Anjasmoro\">Gunung Anjasmoro</a>&nbsp;(2.277 m)</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Arjuno\">Gunung Arjuno</a>&nbsp;(3.339 m)</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/w/index.php?title=Gunung_Banyak&amp;action=edit&amp;redlink=1\">Gunung Banyak</a>&nbsp;(1.306 m)</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Kawi\">Gunung Kawi</a>&nbsp;(2.551 m)</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Panderman\">Gunung Panderman</a>&nbsp;(2.045 m)</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Semeru\">Gunung Semeru</a>&nbsp;(3.676 m)</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Welirang\">Gunung Welirang</a>&nbsp;(3.156 m)</li><li><a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/w/index.php?title=Gunung_Wukir&amp;action=edit&amp;redlink=1\">Gunung Wukir</a>&nbsp;(335 m)</li></ul><p>Dengan luas wilayah sekitar 202,30 km², sebagian besar keadaan topografi kota Batu didominasi kawasan dataran tinggi dan perbukitan yang berlembah-lembah yang terletak di lereng dua <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Pegunungan\">pegunungan</a>&nbsp;besar, yaitu <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Arjuno\">Arjuno</a>–<a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Welirang\">Welirang</a>&nbsp;dan <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Butak\">Butak</a>–<a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Kawi\">Kawi</a>–<a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Gunung_Panderman\">Panderman</a>. Di wilayah kota Batu, yang terletak di sebelah utara pusat kota terdapat sebuah hutan lebat yang merupakan kawasan hutan lindung, yakni <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Taman_Hutan_Raya_Raden_Soerjo\">Taman Hutan Raya Raden Soerjo</a>.</p><p>Jenis tanah yang berada di kota Batu sebagian besar merupakan andosol, selanjutnya secara berurutan adalah kambisol, latosol dan aluvial. Tanahnya berupa tanah mekanis yang banyak mengandung mineral yang berasal dari ledakan gunung berapi. Sifat tanah semacam ini mempunyai tingkat kesuburan yang tinggi.</p><p>Sebagai layaknya wilayah pegunungan yang subur, Batu dan sekitarnya juga memiliki panorama alam yang indah dan berudara sejuk, tentunya hal ini akan menarik minat masyarakat lain untuk mengunjungi dan menikmati Batu sebagai kawasan pegunungan yang mempunyai daya tarik tersendiri. Untuk itulah di awal abad ke-19 Batu berkembang menjadi daerah tujuan wisata, khususnya orang-orang Belanda, sehingga orang-orang Belanda itu ikut membangun tempat-tempat peristirahatan (<em>villa</em>) bahkan bermukim di Batu.</p><p>Situs dan bangunan-bangunan peninggalan Belanda atau semasa pemerintahan Hindia Belanda itu masih berbekas bahkan menjadi aset dan kunjungan wisata hingga saat ini.</p><p>Keindahan alam Batu yang memadukan antara nuansa arsitektur Eropa dan pegunungan yang indah memukau Presiden <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Soekarno\">Soekarno</a>&nbsp;dan Wakil Presiden <a target=\"_blank\" rel=\"nofollow\" href=\"https://id.wikipedia.org/wiki/Mohammad_Hatta\">Mohammad Hatta</a>, sehingga setelah Perang Kemerdekaan, Soekarno-Hatta sempat berkunjung dan beristirahat di kawasan Selecta, Batu.</p>\r\n\r\n</p>', '170311042904.jpg|', '2017-03-11');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES ('6', 'jos', null, '170321083531.jpg|', '2017-03-21', '1', '');
INSERT INTO `slider` VALUES ('7', 'Sip', null, '170321085910.jpg|', '2017-03-21', '1', '');
INSERT INTO `slider` VALUES ('8', 's', null, '170321085935.jpg|', '2017-03-21', '1', '');
INSERT INTO `slider` VALUES ('9', 'd', null, '170321090002.jpg|', '2017-03-21', '1', '');
INSERT INTO `slider` VALUES ('10', 'a', null, '170321090038.jpg|', '2017-03-21', '1', '');
INSERT INTO `slider` VALUES ('11', 'baru1', null, '170329061553.jpg|', '2017-03-29', '1', 'awaw');

-- ----------------------------
-- Table structure for struktur_humas
-- ----------------------------
DROP TABLE IF EXISTS `struktur_humas`;
CREATE TABLE `struktur_humas` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of struktur_humas
-- ----------------------------
INSERT INTO `struktur_humas` VALUES ('4', 'Struktur Organisasi Humas', '<p>\r\n\r\n</p><h4><br></h4><h4><br></h4><h4><p></p><p></p>\r\n\r\nBagian Hubungan Masyarakat sebagai bagian dari Sekretariat Kota Batu dibawah Asisten Umum dan Pemerintahan Sekretaris Daerah secara struktural terdiri dari Kepala Bagian (Eselon IIIa), 3 sub bagian (Eselon IVa) yaitu : Sub Bagian Peliputan dan Dokumentasi, Sub Bagian Pengolahan Data, Sub Bagian Publikasi dan Kerjasama Pers.\r\n\r\n<br><p></p><p></p></h4><p></p>', '170313082534.jpeg|', '2017-03-13');

-- ----------------------------
-- Table structure for struktur_pemkot
-- ----------------------------
DROP TABLE IF EXISTS `struktur_pemkot`;
CREATE TABLE `struktur_pemkot` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of struktur_pemkot
-- ----------------------------
INSERT INTO `struktur_pemkot` VALUES ('1', 'Struktur Organisasi Pemerintah', '<p>Struktur Organisasi Pemerintah</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', '170309094839.jpg|', '2017-03-13');

-- ----------------------------
-- Table structure for testimonial
-- ----------------------------
DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE `testimonial` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of testimonial
-- ----------------------------
INSERT INTO `testimonial` VALUES ('1', 'noob', 'noob@gmial.ocm', 'wowowwoowowowowowowo', '2017-03-10', null);
INSERT INTO `testimonial` VALUES ('2', 'anam', 'choirulanam2222@gmail.com', 'jijijiiijijijk', '2017-03-15', '0');
INSERT INTO `testimonial` VALUES ('3', 'anam', 'angga@angga.angga', 'test my friend', '2017-03-10', '0');
INSERT INTO `testimonial` VALUES ('5', 'Haaai :v', 'gaada:v@yahoo.com', 'ini keterangan ya? :v', '2017-03-11', '0');
INSERT INTO `testimonial` VALUES ('6', 'Haaai :v', 'gaada:v@yahoo.com', 'ini keterangan ya? :v', '2017-03-11', '0');
INSERT INTO `testimonial` VALUES ('7', 'Haaai :v', 'gaada:v@yahoo.com', 'ini keterangan ya? :v', '2017-03-11', '0');
INSERT INTO `testimonial` VALUES ('8', 'Haaai :v', 'gaada:v@yahoo.com', 'ini keterangan ya? :v', '2017-03-11', '0');
INSERT INTO `testimonial` VALUES ('9', 'angga', 'angga@angga.angga', 'angga\nangga\nangga', '2017-03-15', '0');
INSERT INTO `testimonial` VALUES ('10', 'ee', 'ee', 'eee', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('11', 'Yuko', 'yukotanjung@gmail.com', 'Coba testimonial', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('12', 'sasa', 'assa', 'assasa', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('13', 'test', 'test', 'test', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('14', 'anam', 'test 1', 'coba ulang', '2017-03-30', '0');
INSERT INTO `testimonial` VALUES ('15', 'aaaa', 'aaaa', 'aaaaa', '2017-03-30', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `upass` varchar(255) DEFAULT NULL,
  `akses` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'astro', '8cd07cf78166032f36fd06cb40163942', '||product|promo|berita|galery|contact|email|user|slider|kritik|paket|tentang|');
INSERT INTO `user` VALUES ('2', 'admin', 'admin', null);
INSERT INTO `user` VALUES ('3', 'oke', 'okoko', null);

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `kode_petugas` varchar(255) DEFAULT NULL,
  `nama_petugas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('3', '2017-03-22', 'aw', 'iTHRuRRut8Q', '0', '0');

-- ----------------------------
-- Table structure for visi_humas
-- ----------------------------
DROP TABLE IF EXISTS `visi_humas`;
CREATE TABLE `visi_humas` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of visi_humas
-- ----------------------------
INSERT INTO `visi_humas` VALUES ('1', 'Baru  jum', '<p></p><h3><br></h3><h3><br></h3><h3><br></h3><h3></h3><h3><blockquote>Visi Humas Kota Wisata Batu</blockquote></h3><h3><em>“Membangun reputasi melalui media relations serta mengoptimalkan sosialisai kebijakan kepala daerah”</em></h3><p><em><br></em></p><p><em><br></em></p><p><em><br></em></p><h3></h3><h3></h3><h3><blockquote>Misi Humas Kota Wisata Batu</blockquote></h3><h3><em>Membangun pencitraan kelembagaan pemerintah daerah<br>Mengembangkan penyampaian informasi yang akurat, jujur dan bertanggung jawab kepada publik</em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><h3><em><br></em></h3><p><em><br></em></p><p></p>', '170309092021.jpg|', '2017-03-13');

-- ----------------------------
-- Table structure for visi_pemkot
-- ----------------------------
DROP TABLE IF EXISTS `visi_pemkot`;
CREATE TABLE `visi_pemkot` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of visi_pemkot
-- ----------------------------
INSERT INTO `visi_pemkot` VALUES ('2', 'Visi Misi Pemerintah Kota Batu', '<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p><strong></strong>\r\n\r\n</p><div><div><b>Pengertian, Perbedaan Visi &amp; Misi Serta Contohnya| </b>Hai teman-teman, mengenai pembahasan kita yaitu pengertian visi misi dan perbedaannya pasti sering membuat kebingungan dan sering timbul pertanyaan, apa itu visi dan apa itu misi, apalagi mengenai perbedaan visi dan misi. Mengenai hal tersebut kali ini kami akan informasikan lengkap mengenai visi dan misi. Kita mulai dari <b><a target=\"_blank\" rel=\"nofollow\" href=\"http://www.artikelsiana.com/\">Pengertian visi dan pengertian misi secara umum</a></b>... <u><b>Pengertian Visi adalah</b></u>&nbsp;tujuan atau gambaran masa depan yang akan kita raih dalam waktu telah ditentukan. Sedangkan <u><b>Pengertian Misi adalah</b></u>&nbsp;apa yang kita lakukan untuk mencapai visi tersebut. </div></div><h3><b>Pembahasan Visi (what be believe we can be)</b></h3><div><div><b>Macam-Macam Pengertian Visi - </b>Selain pengertian visi diatas. Visi juga dapat diartikan sebagai gambaran situasi dan karakteristik mengenai yang dicipai dalam organisasi, lembaga tau perusahaan dalam suatu waktu yang jauh kedepannya. atau pengertian visi dapat juga seperti cara pandang jauh ke depan mengenai arah dan kemana organisasi, lembaga, perusahaan agar mampu eksis, antisipatif dan inovatif. </div></div><div><br></div><div>\r\n\r\n<div><div><b>Pengertian, Perbedaan Visi &amp; Misi Serta Contohnya| </b>Hai teman-teman, mengenai pembahasan kita yaitu pengertian visi misi dan perbedaannya pasti sering membuat kebingungan dan sering timbul pertanyaan, apa itu visi dan apa itu misi, apalagi mengenai perbedaan visi dan misi. Mengenai hal tersebut kali ini kami akan informasikan lengkap mengenai visi dan misi. Kita mulai dari <b><a target=\"_blank\" rel=\"nofollow\" href=\"http://www.artikelsiana.com/\" title=\"Link: http://www.artikelsiana.com/\">Pengertian visi dan pengertian misi secara umum</a></b>... <u><b>Pengertian Visi adalah</b></u>&nbsp;tujuan atau gambaran masa depan yang akan kita raih dalam waktu telah ditentukan. Sedangkan <u><b>Pengertian Misi adalah</b></u>&nbsp;apa yang kita lakukan untuk mencapai visi tersebut. </div></div><h3><b>Pembahasan Visi (what be believe we can be)</b></h3><div><div><b>Macam-Macam Pengertian Visi - </b>Selain pengertian visi diatas. Visi juga dapat diartikan sebagai gambaran situasi dan karakteristik mengenai yang dicipai dalam organisasi, lembaga tau perusahaan dalam suatu waktu yang jauh kedepannya. atau pengertian visi dapat juga seperti cara pandang jauh ke depan mengenai arah dan kemana organisasi, lembaga, perusahaan agar mampu eksis, antisipatif dan inovatif. </div></div>\r\n\r\n<br></div>\r\n\r\n<p></p>', '170313073858.jpg|', '2017-03-13');

-- ----------------------------
-- Table structure for widget
-- ----------------------------
DROP TABLE IF EXISTS `widget`;
CREATE TABLE `widget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of widget
-- ----------------------------
INSERT INTO `widget` VALUES ('3', 'baru', '170329062619.jpg|');
