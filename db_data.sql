-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 02.28
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama_wil` varchar(255) DEFAULT NULL,
  `summ` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longtitude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama_wil`, `summ`, `latitude`, `longtitude`) VALUES
(3, 'Yogyakarta', 'Daerah Istimewa Yogyakarta', '110.3398253', '-7.803249'),
(6, 'TVRI JOGJA', 'Stasiun Televisi', '-7.765059052096422', '110.36238186807634'),
(7, 'Universitas Gadjah Mada', 'Perguruan Tinggi', '-7.771379783882492', '110.37749748620313'),
(8, 'pasar sore malioboro', NULL, '-7.799220782461251', '110.36600047732554'),
(9, 'pasar beringharjo', NULL, '-7.79880144875506 ', '110.36573711063554'),
(10, 'pasar sentul yogyakarta', NULL, '-7.801843496823679', '110.37726323321488'),
(11, 'pasar prawirotaman', NULL, '-7.819995672654673', '110.36812427644871'),
(12, 'pasar lempuyangan', NULL, '-7.792196427863933', '110.37342499177547'),
(13, 'sakola jogja', NULL, '-7.805884592881214', '110.35099830859406'),
(14, 'jollie jogja wirobrajan', NULL, '-7.804605777424229', '110.35130822481665'),
(15, 'ramayana mall malioboro', NULL, '-7.79775085907929 ', '110.36533398061545'),
(16, 'djenar batik malioboro', NULL, '-7.797888379869936', '110.36506307751401'),
(17, 'ramai mall malioboro', NULL, '-7.797168886542464', '110.36437576161076'),
(18, 'galeria mall jogjakarta', NULL, '-7.782819286904569', '110.37912120567093'),
(19, 'outlet biru new', NULL, '-7.769565967150546', '110.4019283515925'),
(20, 'lippo plaza', NULL, '-7.783720030382403', '110.39063356949795'),
(21, 'hartono mall', NULL, '-7.75971019497309 ', '110.39897188665365'),
(22, 'Tugu Jogja', NULL, '-7.782912308212503', '110.36707472665685'),
(23, 'monumen jogja kembali', NULL, '-7.749568438900221', ' 110.36960109679524'),
(24, 'monumen serang umum 1 maret 1949', NULL, '-7.801004512331978', ' 110.36533542560012'),
(25, 'monumen jendral sudirman', NULL, '-7.800287359883147', ' 110.36634771102693'),
(26, 'monumen batik yogyakarta', NULL, '-7.801103735008461', ' 110.36461543594386'),
(27, 'monumen urip sumoharjo', NULL, '-7.800320269892269', ' 110.36633931106942'),
(28, 'monumen stasiun KA jogjakarta', NULL, '-7.789409472742957', ' 110.36608547210795'),
(29, 'monumen pahlawan pancasila kentungan', NULL, '-7.754922631699836', ' 110.38795546139028'),
(30, 'monumen perjuangan TNI AU', NULL, '-7.840822345187293', ' 110.37647114662542'),
(31, 'monumen sanapati', NULL, '-7.788160696719536', ' 110.3715363759896'),
(32, 'Kampus 1 Universitas Respati Yogyakarta', NULL, '-7.781774', '110.406953'),
(33, 'Kampus 2 Universitas Respati Yogyakarta', NULL, '-7.746490107007653', '110.433677862683  '),
(34, 'UNY', NULL, '-7.77373218449292 ', '110.38624998312379'),
(35, 'UGM', NULL, '-7.771370267553385', '110.37749892072537'),
(36, 'UTY', NULL, '-7.747500413446729', '110.35541929345669'),
(37, 'kampus 1 - sanata Dharma', NULL, '-7.775020073648202', '110.39299014097304'),
(38, 'UIN', NULL, '-7.784773931800545', '110.39435647844965'),
(39, 'atma jaya', NULL, '-7.780426486847154', '110.414107710866	'),
(40, 'stikom akindo', NULL, '-7.781436026801901', '110.40676633693666'),
(41, 'ahmad dahlan - kampus 1', NULL, '-7.798757915265098', '110.38309121341372'),
(42, 'Bandara Adisucipto', NULL, '-7.7876838', '110.4317613'),
(43, 'Bandara NYIA', NULL, '-7.8969957', '110.0581783'),
(44, 'Bank BPD DIY', NULL, '-7.783803536787531', '110.36051036584985'),
(45, 'Bank BNI', NULL, '-7.781863075220652', '110.37241157148027'),
(46, 'Bank BRI Jogja', NULL, '-7.79794801932299', '110.36521444983411'),
(47, 'Bank Indonesia Jogjakarta', NULL, '-7.80110074658923', '110.36581102237187'),
(48, 'Bank Jogja', NULL, '-7.806772138930389', '110.35013712452982'),
(49, 'Bank Pasar Gedung Kiwo', NULL, '-7.8146352592851835', '110.35483152372905'),
(50, 'Bank Bpd Diy', NULL, '-7.800638488100226', '110.38323211205439'),
(51, 'Bank BNI', NULL, '-7.800102791774656', '110.3915048131303'),
(52, 'Bank Jogja', NULL, '-7.800317070387219', '110.39147777815944'),
(53, 'Bank J Trust Bank Kc Jogjakarta', NULL, '-7.78210909595706', '110.36639296693848'),
(54, 'Perpustakaan Kota Jogja', NULL, '-7.78398976163076', '110.37448251506368'),
(55, 'Perpustakaan Kolsani', NULL, '-7.788876107641377', '110.37041974895317'),
(56, 'Jogja Library Center', NULL, '-7.7907353352512185', '110.36593833811459'),
(57, 'Perpustakaan Negri Yogyakarta', NULL, '-7.7759040422942265', '110.38708656917952'),
(58, 'Perpustakaan FE UNY', NULL, '-7.773121254318819', '110.38636252253852'),
(59, 'Perpustakaan UIN Sunan Kalijaga', NULL, '-7.783706535370159', '110.39559000439368'),
(60, 'Perpustakaan FIP UNY Kampus II', NULL, '-7.797952704596133', '110.3829752550074'),
(61, 'Perpustakaan Desa Banguntapan', NULL, '-7.806879431327778', '110.40254659986982'),
(62, 'GrahaTama Pustaka', NULL, '-7.799280342179557', '110.40708374362998'),
(63, 'Stadion MaguwoHarjo', NULL, '-7.7505102003777', '110.41817530453923'),
(64, 'Stadion Kridosono', NULL, '-7.7879486495123205', '110.37361320263717'),
(65, 'Stadion Mandala Krida', NULL, '-7.79596727298891', '110.38430487505329'),
(66, 'Stadion UNY', NULL, '-7.776586357331679', '110.38548631776811'),
(67, 'Stadion Sultan Agung', NULL, '-7.875266014919182', '110.38029376300307'),
(68, 'Stadion Dwi Windu', NULL, '-7.880697905365807', '110.33178186243933'),
(69, 'SPBU Pertamina Terban', NULL, '-7.7821264369032255', '110.37213863307852'),
(70, 'SPBU Pertamina Munggur', NULL, '-7.785579613395807', '110.38789150859924'),
(71, 'SPBU Pertamina 44.552.10', NULL, '-7.783480989758981', '110.40659712311039'),
(72, 'SPBU 44.551.09 Semaki', NULL, '-7.8018201', '110.3334457'),
(73, 'SPBU Pertamina 44.552.03', NULL, '-7.7981705', '110.4072593'),
(74, 'SPBU 44.552.07 Ambarketawang', NULL, '-7.802713', '110.2115249'),
(75, 'SPBU 44.551.04 Bugisan', NULL, '-7.8123326', '110.2960346'),
(76, 'SPBU 44.551.05 Gambiran', NULL, '-7.8194754', '110.3313968'),
(77, 'SPBU 44.551.02 Ketandan', NULL, '-7.8194754', '110.3313968'),
(78, 'SPBU Pertamina Sentul 44.551.15', NULL, '-7.8084635', '110.3559444'),
(79, 'Eastparc hotel jogjakarta', NULL, '-7.7815099466418225', '110.40873357998937'),
(80, 'hotel tentrem Yogyakarta', NULL, '-7.773788480277056', '110.36833682859991'),
(81, 'the allana malioboro ', NULL, '-7.815269606141732', '110.36558489071204'),
(82, 'the amartya jogjakarta hotel', NULL, '-7.798140327212092', '110.330622967608'),
(83, 'forriz hotel yogyakarta', NULL, '-7.795439731010995', '110.35349684614057'),
(84, 'hotel santika premiere jogja', NULL, '-7.782420154954959', '110.36974298643813'),
(85, 'lafayette boutique hotel jogjakarta', NULL, '-7.759475726846422', '110.38733344999197'),
(86, 'the allana yogyakarta hotel', NULL, '-7.739326274377912', '110.37719537096723'),
(87, 'Polsek Depok Barat', NULL, '-7.783481335122462', '110.4058255590672'),
(88, 'Polsek Gondokusuman', NULL, '-7.7916470814787475', '110.38661222358782'),
(89, 'Polsek Danurajen', NULL, '-7.788371965513397', '110.37804040973619'),
(90, 'polsek pakualaman', NULL, '-7.797831735840101', '110.3765768554036'),
(91, 'polsek gondomanan', NULL, '-7.803816172627326', '110.37011139046871'),
(92, 'polsek ngampilan', NULL, '-7.797612492713144', '110.35995584092939'),
(93, 'polsek gedongtengn', NULL, '-7.78946745802536', '110.36124397188168'),
(94, 'polsek tegalrejo', NULL, '-7.77219931094855', '110.36150780280849'),
(95, 'polsek banguntapan', NULL, '-7.811242497512933', '110.40767197158544'),
(96, 'polsek depok timur', NULL, '-7.762175940468889', '110.41537804777782');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(30, 'joko uiiii', 'joko1@gmail.com', 'joko1221'),
(31, 'bambang', 'bambang@gmail.com', 'bambang1221'),
(32, 'kiki', 'kiki@gmail.com', 'kiki1221');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
