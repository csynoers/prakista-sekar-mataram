-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2019 at 10:08 AM
-- Server version: 10.2.22-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yobersih_5c3_yobersih`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` bigint(20) NOT NULL,
  `form_title` varchar(255) DEFAULT NULL,
  `form_contents` text DEFAULT NULL,
  `form_parent` int(11) DEFAULT NULL,
  `form_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `form_title`, `form_contents`, `form_parent`, `form_timestamp`) VALUES
(1, 'contact', NULL, NULL, '2018-05-31 04:06:43'),
(2, 'pendaftaran', NULL, NULL, '2018-05-31 04:06:43'),
(3, 'nama lengkap', '{\"tempat_lahir\":\"tempat lahir\",\"tanggal_lahir\":\"2018-06-20\",\"usia\":\"20\",\"agama\":\"islam\",\"berat_badan\":\"60\",\"tinggi_badan\":\"170\",\"alamat_rumah_tetap\":\"alamat rumah tetap\",\"no\":\"123\",\"rt\":\"1\",\"rw\":\"2\",\"dusun\":\"dusun\",\"desa\":\"desa\",\"kec\":\"kec\",\"kab\":\"kab\",\"prop\":\"prop\",\"kode_pos\":\"kodepos\",\"telepon\":\"wa\",\"handphone\":\"handphone\",\"email\":\"email@email.com\",\"asal_sekolah\":\"asal sekolah\",\"jurusan\":\"jurusab\",\"nama_bapak\":\"nama bapak\",\"usia_bapak\":\"50\",\"pekerjaan_bapak\":\"pekrejaan bapak\",\"nama_ibu\":\"nama ibu\",\"usia_ibu\":\"45\",\"pekerjaan_ibu\":\"pekerjaan ibu\",\"no_ot\":\"234\",\"rt_ot\":\"1\",\"rw_ot\":\"2\",\"dusun_ot\":\"dusu ot\",\"desa_ot\":\"desa ot\",\"kec_ot\":\"kec ot\",\"kab_ot\":\"kab ot\",\"prop_ot\":\"prop ot\",\"kode_pos_ot\":\"kode pos ot\",\"quest_a\":\"1\",\"quest_a_ket\":\"qqqqqqqqqqqq\",\"quest_b\":\"\",\"quest_b_ket\":\"\",\"quest_c\":\"Lain-lain\",\"quest_c_ket\":\"\",\"alasan\":\"alasan\",\"file_name\":\"Default-avatar7.jpg\"}', 2, '2018-06-05 01:43:42'),
(39, 'tes', '{\"email\":\"tes@gmail.com\",\"no_telp\":\"454354353455\",\"contents\":\"sdfsdgsdgdsgdg\",\"tahu_kami_dari\":\"Google\",\"pendapat_tentang_kami\":\"Sangat Ramah\"}', 1, '2018-12-08 04:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `options_id` bigint(20) NOT NULL,
  `options_title` varchar(225) DEFAULT NULL,
  `options_contents` text DEFAULT NULL,
  `options_seo` varchar(255) DEFAULT NULL,
  `options_parent` bigint(20) DEFAULT NULL,
  `options_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`options_id`, `options_title`, `options_contents`, `options_seo`, `options_parent`, `options_timestamp`) VALUES
(1, 'seo title', 'YoBersih.com', 'seo-title', NULL, '2018-12-04 03:11:12'),
(2, 'seo keyword', 'yo bersih jogja', 'seo-keyword', NULL, '2018-12-04 03:11:40'),
(3, 'seo description', 'yo bersih jogja', 'seo-description', NULL, '2018-12-04 03:11:53'),
(4, 'categories', 'categories', 'categories', NULL, '2018-05-22 09:25:04'),
(5, 'tags', 'tags', 'tags', NULL, '2018-05-22 09:25:42'),
(7, 'form pendaftaran', '{\n\"html\": \"<h2>A. Identitas Diri</h2><form>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Nama Lengkap<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-10\\\">\\r\\n\\t\\t\\t\\t\\t\\t<input type=\\\"email\\\" class=\\\"form-control\\\" id=\\\"inputEmail3\\\" placeholder=\\\"Masukan Nama lengkap *\\\">\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Tempat \\/ Tgl. Lahir<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-5\\\">\\r\\n\\t\\t\\t\\t\\t\\t<input type=\\\"email\\\" class=\\\"form-control\\\" id=\\\"inputEmail3\\\" placeholder=\\\"Masukan Tempat Lahir*\\\">\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-5\\\">\\r\\n\\t\\t\\t\\t\\t\\t<input type=\\\"date\\\" class=\\\"form-control\\\" id=\\\"inputEmail3\\\" placeholder=\\\"Email\\\">\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Usia<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-4\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<input type=\\\"number\\\" class=\\\"form-control\\\" placeholder=\\\"Format Number\\\" aria-label=\\\"usia\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-append\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon2\\\">Tahun<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Agama<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-4\\\">\\r\\n\\t\\t\\t\\t\\t\\t<select class=\\\"form-control\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<option> -- Pilih Agama --<\\/option>\\r\\n\\t\\t\\t\\t\\t\\t\\t<option>Islam<\\/option>\\r\\n\\t\\t\\t\\t\\t\\t\\t<option>Hindu<\\/option>\\r\\n\\t\\t\\t\\t\\t\\t\\t<option>Budha<\\/option>\\r\\n\\t\\t\\t\\t\\t\\t\\t<option>Kristen<\\/option>\\r\\n\\t\\t\\t\\t\\t\\t\\t<option>Katolik<\\/option>\\r\\n\\t\\t\\t\\t\\t\\t\\t<option>Kong Hu Cu<\\/option>\\r\\n\\t\\t\\t\\t\\t\\t<\\/select>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Berat Badan(Kg)<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-4\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<input type=\\\"number\\\" class=\\\"form-control\\\" placeholder=\\\"Format Number\\\" aria-label=\\\"usia\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-append\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon2\\\">(Kg)<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Tinggi Badan(Cm)<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-4\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<input type=\\\"number\\\" class=\\\"form-control\\\" placeholder=\\\"Format Number\\\" aria-label=\\\"tinggi-badan\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-append\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon2\\\">(Cm)<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Alamat Rumah Tetap<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-10\\\">\\r\\n\\t\\t\\t\\t\\t\\t<textarea rows=\\\"3\\\" class=\\\"form-control\\\"><\\/textarea>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">(Yang Bisa dijangkau pos)<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-10\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">No.<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Rt :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Rw :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Dusun :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Desa :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Kec :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Kab :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Prop :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-12\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Kode Pos :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Telepon Rumah \\/ WA \\/ LINE<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-4\\\">\\r\\n\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Handphone :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Email<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-10\\\">\\r\\n\\t\\t\\t\\t\\t\\t<input type=\\\"email\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">Asal Sekolah<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-4\\\">\\r\\n\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Jurusan :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<h2>B. Data Orang Tua\\/Wali<\\/h2>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-4 col-form-label\\\">Nama Bapak<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-8\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-4 col-form-label mt-3\\\">Usia<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-8\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3 mt-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"number\\\" class=\\\"form-control\\\" placeholder=\\\"Format Number\\\" aria-label=\\\"nama-bapak\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-append\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon2\\\">Tahun<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-4 col-form-label\\\">Pekerjaan<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-8\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-4 col-form-label\\\">Nama Ibu<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-8\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-4 col-form-label mt-3\\\">Usia<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-8\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3 mt-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"number\\\" class=\\\"form-control\\\" placeholder=\\\"Format Number\\\" aria-label=\\\"usia-ibu\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-append\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon2\\\">Tahun<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-4 col-form-label\\\">Pekerjaan<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-8\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"\\\" aria-describedby=\\\"basic-addon2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t<label class=\\\"col-sm-2 col-form-label\\\">(Yang Bisa dijangkau pos)<\\/label>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-10\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">No.<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Rt :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Rw :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Dusun :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Desa :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Kec :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Kab :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Prop :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-12\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group mb-3\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"input-group-prepend\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<span class=\\\"input-group-text\\\" id=\\\"basic-addon1\\\">Kode Pos :<\\/span>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" class=\\\"form-control\\\" placeholder=\\\"\\\" aria-label=\\\"Username\\\" aria-describedby=\\\"basic-addon1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-12 col-form-label\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\tApakah anda pernah memiliki penyakit berat seperti (Hepatitis, Paru-Paru\\/TBC, Jantung, Ginjal, Buta Warna, dll)\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-12 text-center\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check form-check-inline\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"inlineRadioOptions\\\" id=\\\"inlineRadio1\\\" value=\\\"option1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<label class=\\\"form-check-label\\\" for=\\\"inlineRadio1\\\">Ya<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check form-check-inline\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"inlineRadioOptions\\\" id=\\\"inlineRadio2\\\" value=\\\"option2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<label class=\\\"form-check-label\\\" for=\\\"inlineRadio2\\\">Tidak<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-12 col-form-label\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\tJika Ya Sebutkan dan pada tahun berapa\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-12\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<textarea class=\\\"form-control\\\" rows=\\\"3\\\"><\\/textarea>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-12 col-form-label\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\tApakah anda pernah patah tulang dalam 2 tahun\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-12 text-center\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check form-check-inline\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"inlineRadioOptions\\\" id=\\\"inlineRadio1\\\" value=\\\"option1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<label class=\\\"form-check-label\\\" for=\\\"inlineRadio1\\\">Ya<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check form-check-inline\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"inlineRadioOptions\\\" id=\\\"inlineRadio2\\\" value=\\\"option2\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<label class=\\\"form-check-label\\\" for=\\\"inlineRadio2\\\">Tidak<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-12 col-form-label\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\tJika Ya Sebutkan dan pada tahun berapa\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-12\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<textarea class=\\\"form-control\\\" rows=\\\"3\\\"><\\/textarea>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<div class=\\\"row\\\">\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-12 col-form-label\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\tSumber informasi tentang DUTA PERSADA dari :\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-12\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"exampleRadios\\\" id=\\\"exampleRadios1\\\" value=\\\"option1\\\" >\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <label class=\\\"form-check-label\\\" for=\\\"exampleRadios1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t    Iklan Koran\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"exampleRadios\\\" id=\\\"exampleRadios1\\\" value=\\\"option1\\\" >\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <label class=\\\"form-check-label\\\" for=\\\"exampleRadios1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t    Poster\\/Brosur\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"exampleRadios\\\" id=\\\"exampleRadios1\\\" value=\\\"option1\\\" >\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <label class=\\\"form-check-label\\\" for=\\\"exampleRadios1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t    Website\\/Internet\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"exampleRadios\\\" id=\\\"exampleRadios1\\\" value=\\\"option1\\\" >\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <label class=\\\"form-check-label\\\" for=\\\"exampleRadios1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t    Guru Sekolah\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"exampleRadios\\\" id=\\\"exampleRadios1\\\" value=\\\"option1\\\" >\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <label class=\\\"form-check-label\\\" for=\\\"exampleRadios1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t    Radio\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"exampleRadios\\\" id=\\\"exampleRadios1\\\" value=\\\"option1\\\" >\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <label class=\\\"form-check-label\\\" for=\\\"exampleRadios1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t    Referensi Orang\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"exampleRadios\\\" id=\\\"exampleRadios1\\\" value=\\\"option1\\\" >\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <label class=\\\"form-check-label\\\" for=\\\"exampleRadios1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t    Presentasi\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<div class=\\\"form-check\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <input class=\\\"form-check-input\\\" type=\\\"radio\\\" name=\\\"exampleRadios\\\" id=\\\"exampleRadios1\\\" value=\\\"option1\\\" >\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <label class=\\\"form-check-label\\\" for=\\\"exampleRadios1\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t    Lain-lain\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t  <\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<input type=\\\"text\\\" name=\\\"\\\" class=\\\"form-control\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<div class=\\\"col-sm-6\\\">\\r\\n\\t\\t\\t\\t\\t\\t<div class=\\\"form-group row\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<label class=\\\"col-sm-12 col-form-label\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\tApa alasan\\/motivasi bergabung dengan DUTA PERSADA\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/label>\\r\\n\\t\\t\\t\\t\\t\\t\\t<div class=\\\"col-sm-12\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t<textarea class=\\\"form-control\\\" rows=\\\"3\\\"><\\/textarea>\\r\\n\\t\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<\\/div>\\r\\n\\t\\t\\t\\t<button type=\\\"submit\\\" class=\\\"btn btn-primary col-sm-3\\\">Daftar<\\/button>\\r\\n\\t\\t\\t<\\/form>\"\n}', 'form-pendaftaran', NULL, '2018-05-30 08:16:45'),
(8, 'Artikel', 'Artikel Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'artikel', 4, '2018-09-26 08:16:58'),
(10, 'gallery', 'gallery', 'gallery', NULL, '2018-05-28 07:05:37'),
(11, 'slide', 'slide', 'slide', NULL, '2018-05-28 07:06:11'),
(12, 'banner', 'banner', 'banner', NULL, '2018-05-28 07:06:29'),
(13, 'gallery photo', 'gallery photo', 'gallery-photo', 10, '2018-05-28 07:07:18'),
(14, 'gallery video', 'gallery video', 'gallery-video', 10, '2018-05-28 07:07:38'),
(15, 'contact footer', 'contact footer', 'contact-footer', NULL, '2018-05-28 07:11:19'),
(39, 'link satu', '{\"options_link\":\"http:\\/\\/localhost\\/scm\\/FRAME-WORK\\/CI\\/dynamic-web\\/duta-persada\",\"options_image\":\"200x1001.png\"}', 'link-satu', 12, '2018-05-31 03:10:36'),
(40, 'link dua', '{\"options_link\":\"http:\\/\\/localhost\\/scm\\/FRAME-WORK\\/CI\\/dynamic-web\\/duta-persada\",\"options_image\":\"200x100.png\"}', 'link-dua', 12, '2018-08-24 09:47:08'),
(46, 'contact footer', '<div class=\"footer\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-4 text-center\">\r\n<div class=\"us\"><i class=\"fa fa-user\"></i></div>\r\n<h3>Yo-Bersih</h3>\r\n<p style=\"text-align: center;\"><span style=\"color: #ffffff;\">Solusi untuk beragam kebutuhan layanan kebersihan barang-barang kesayangan anda</span></p>\r\n</div>\r\n<div class=\"col-sm-4 boxCen\">\r\n<div class=\"us\"><i class=\"fa fa-comments\"></i></div>\r\n<h3>Hubungi Kami</h3>\r\n<div class=\"outBox\">\r\n<div class=\"ic\"><i class=\"fa fa-map-marker\"></i></div>\r\n<span class=\"add\">Jalan Monjali no 149A (lantai 2) Sleman, Yogyakarta</span></div>\r\n<div class=\"outBox\">\r\n<div class=\"ic\"><i class=\"fa fa-volume-control-phone\"></i></div>\r\n<span class=\"add\">0878 8004 8008</span></div>\r\n</div>\r\n<div class=\"col-sm-4 sos\">\r\n<div class=\"us\"><i class=\"fa fa-share-alt\"></i></div>\r\n<h3>Follow Us</h3>\r\n<div class=\"col-sm-3\"></div>\r\n<h2 class=\"col-sm-2 smd\"><a href=\"https://www.facebook.com/pages/category/Automotive--Aircraft---Boat/Yo-Bersih-206266696937231/\"><i class=\"fa fa-facebook-square\"></i></a></h2>\r\n<h2 class=\"col-sm-2 smd\"><a href=\"https://www.instagram.com/yobersih/\"><i class=\"fa fa-instagram\">&nbsp;</i></a></h2>\r\n<div class=\"col-sm-3\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'contact-footer', NULL, '2019-03-21 14:38:51');
INSERT INTO `options` (`options_id`, `options_title`, `options_contents`, `options_seo`, `options_parent`, `options_timestamp`) VALUES
(47, 'home page', '<section class=\"hidden-lg hidden-md hidden-sm\">\r\n<div class=\"container text-center\">\r\n<h2><strong>Selamat Datang Di<span>&nbsp;</span><span style=\"color: #81c3e4;\">YO-BERSIH</span></strong></h2>\r\n<h3><strong>Cuci Mobil Panggilan Yang Menggunakan Metode Cuci Mobil Minim Air Atau Waterless</strong></h3>\r\n<h4><span style=\"color: #81c3e4;\"><strong><em>Follow and Contact Us On</em>:</strong></span></h4>\r\n<h3><strong>IG : @yobersih / FB: Yo Bersih / WA : 0878 8004 8008</strong></h3>\r\n</div>\r\n</section>\r\n<section class=\"boxContentXXX\" style=\"margin-top: 1.5rem;\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-12\">\r\n<div class=\"hotTitle\">\r\n<h1>Mengapa memilih <span class=\"text-muted\">YO-BERSIH?</span></h1>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-12\">\r\n<div class=\"services\"><img class=\"img-circle img-responsive pull-left\" src=\"data:image/png;base64,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\" alt=\"\" />\r\n<h1><span style=\"color: #808080;\">Menghemat waktu anda</span><br /><span class=\"text-muted\"></span></h1>\r\n<p style=\"text-align: justify;\"><span style=\"color: #000000;\">Yo-Bersih sangat menghargai waktu berharga, sehingga kami akan mencuci mobil anda di tempat anda berada seperti di rumah, kantor, atau kos-kosan. Sambil kami mencuci dan membersihkan mobil anda, anda tetap dapat menjalankan aktifitas pekerjaan rumah, rapat di kantor, ataupun mengerjakan tugas kuliah di kos-kosan.</span></p>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-12\">\r\n<div class=\"services\"><img class=\"img-circle img-responsive pull-right\" src=\"data:image/png;base64,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\" alt=\"\" />\r\n<h1><span style=\"color: #808080;\">Bersih dan mengkilap</span><span class=\"text-muted\"></span></h1>\r\n<p><span style=\"color: #000000;\">Cairan cuci mobil yang kami gunakan mengandung carnauba wax yang berfungsi untuk melicinkan dan mengkilapkan sekaligus memberikan efek hydrophobic atau efek daun talas pada mobil anda</span></p>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-12\">\r\n<div class=\"services\"><img class=\"img-circle img-responsive pull-left\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAD6CAIAAAAHjs1qAAAACXBIWXMAAA9hAAAPYQGoP6dpAAAKT2lDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVNnVFPpFj333vRCS4iAlEtvUhUIIFJCi4AUkSYqIQkQSoghodkVUcERRUUEG8igiAOOjoCMFVEsDIoK2AfkIaKOg6OIisr74Xuja9a89+bN/rXXPues852zzwfACAyWSDNRNYAMqUIeEeCDx8TG4eQuQIEKJHAAEAizZCFz/SMBAPh+PDwrIsAHvgABeNMLCADATZvAMByH/w/qQplcAYCEAcB0kThLCIAUAEB6jkKmAEBGAYCdmCZTAKAEAGDLY2LjAFAtAGAnf+bTAICd+Jl7AQBblCEVAaCRACATZYhEAGg7AKzPVopFAFgwABRmS8Q5ANgtADBJV2ZIALC3AMDOEAuyAAgMADBRiIUpAAR7AGDIIyN4AISZABRG8lc88SuuEOcqAAB4mbI8uSQ5RYFbCC1xB1dXLh4ozkkXKxQ2YQJhmkAuwnmZGTKBNA/g88wAAKCRFRHgg/P9eM4Ors7ONo62Dl8t6r8G/yJiYuP+5c+rcEAAAOF0ftH+LC+zGoA7BoBt/qIl7gRoXgugdfeLZrIPQLUAoOnaV/Nw+H48PEWhkLnZ2eXk5NhKxEJbYcpXff5nwl/AV/1s+X48/Pf14L7iJIEyXYFHBPjgwsz0TKUcz5IJhGLc5o9H/LcL//wd0yLESWK5WCoU41EScY5EmozzMqUiiUKSKcUl0v9k4t8s+wM+3zUAsGo+AXuRLahdYwP2SycQWHTA4vcAAPK7b8HUKAgDgGiD4c93/+8//UegJQCAZkmScQAAXkQkLlTKsz/HCAAARKCBKrBBG/TBGCzABhzBBdzBC/xgNoRCJMTCQhBCCmSAHHJgKayCQiiGzbAdKmAv1EAdNMBRaIaTcA4uwlW4Dj1wD/phCJ7BKLyBCQRByAgTYSHaiAFiilgjjggXmYX4IcFIBBKLJCDJiBRRIkuRNUgxUopUIFVIHfI9cgI5h1xGupE7yAAygvyGvEcxlIGyUT3UDLVDuag3GoRGogvQZHQxmo8WoJvQcrQaPYw2oefQq2gP2o8+Q8cwwOgYBzPEbDAuxsNCsTgsCZNjy7EirAyrxhqwVqwDu4n1Y8+xdwQSgUXACTYEd0IgYR5BSFhMWE7YSKggHCQ0EdoJNwkDhFHCJyKTqEu0JroR+cQYYjIxh1hILCPWEo8TLxB7iEPENyQSiUMyJ7mQAkmxpFTSEtJG0m5SI+ksqZs0SBojk8naZGuyBzmULCAryIXkneTD5DPkG+Qh8lsKnWJAcaT4U+IoUspqShnlEOU05QZlmDJBVaOaUt2ooVQRNY9aQq2htlKvUYeoEzR1mjnNgxZJS6WtopXTGmgXaPdpr+h0uhHdlR5Ol9BX0svpR+iX6AP0dwwNhhWDx4hnKBmbGAcYZxl3GK+YTKYZ04sZx1QwNzHrmOeZD5lvVVgqtip8FZHKCpVKlSaVGyovVKmqpqreqgtV81XLVI+pXlN9rkZVM1PjqQnUlqtVqp1Q61MbU2epO6iHqmeob1Q/pH5Z/YkGWcNMw09DpFGgsV/jvMYgC2MZs3gsIWsNq4Z1gTXEJrHN2Xx2KruY/R27iz2qqaE5QzNKM1ezUvOUZj8H45hx+Jx0TgnnKKeX836K3hTvKeIpG6Y0TLkxZVxrqpaXllirSKtRq0frvTau7aedpr1Fu1n7gQ5Bx0onXCdHZ4/OBZ3nU9lT3acKpxZNPTr1ri6qa6UbobtEd79up+6Ynr5egJ5Mb6feeb3n+hx9L/1U/W36p/VHDFgGswwkBtsMzhg8xTVxbzwdL8fb8VFDXcNAQ6VhlWGX4YSRudE8o9VGjUYPjGnGXOMk423GbcajJgYmISZLTepN7ppSTbmmKaY7TDtMx83MzaLN1pk1mz0x1zLnm+eb15vft2BaeFostqi2uGVJsuRaplnutrxuhVo5WaVYVVpds0atna0l1rutu6cRp7lOk06rntZnw7Dxtsm2qbcZsOXYBtuutm22fWFnYhdnt8Wuw+6TvZN9un2N/T0HDYfZDqsdWh1+c7RyFDpWOt6azpzuP33F9JbpL2dYzxDP2DPjthPLKcRpnVOb00dnF2e5c4PziIuJS4LLLpc+Lpsbxt3IveRKdPVxXeF60vWdm7Obwu2o26/uNu5p7ofcn8w0nymeWTNz0MPIQ+BR5dE/C5+VMGvfrH5PQ0+BZ7XnIy9jL5FXrdewt6V3qvdh7xc+9j5yn+M+4zw33jLeWV/MN8C3yLfLT8Nvnl+F30N/I/9k/3r/0QCngCUBZwOJgUGBWwL7+Hp8Ib+OPzrbZfay2e1BjKC5QRVBj4KtguXBrSFoyOyQrSH355jOkc5pDoVQfujW0Adh5mGLw34MJ4WHhVeGP45wiFga0TGXNXfR3ENz30T6RJZE3ptnMU85ry1KNSo+qi5qPNo3ujS6P8YuZlnM1VidWElsSxw5LiquNm5svt/87fOH4p3iC+N7F5gvyF1weaHOwvSFpxapLhIsOpZATIhOOJTwQRAqqBaMJfITdyWOCnnCHcJnIi/RNtGI2ENcKh5O8kgqTXqS7JG8NXkkxTOlLOW5hCepkLxMDUzdmzqeFpp2IG0yPTq9MYOSkZBxQqohTZO2Z+pn5mZ2y6xlhbL+xW6Lty8elQfJa7OQrAVZLQq2QqboVFoo1yoHsmdlV2a/zYnKOZarnivN7cyzytuQN5zvn//tEsIS4ZK2pYZLVy0dWOa9rGo5sjxxedsK4xUFK4ZWBqw8uIq2Km3VT6vtV5eufr0mek1rgV7ByoLBtQFr6wtVCuWFfevc1+1dT1gvWd+1YfqGnRs+FYmKrhTbF5cVf9go3HjlG4dvyr+Z3JS0qavEuWTPZtJm6ebeLZ5bDpaql+aXDm4N2dq0Dd9WtO319kXbL5fNKNu7g7ZDuaO/PLi8ZafJzs07P1SkVPRU+lQ27tLdtWHX+G7R7ht7vPY07NXbW7z3/T7JvttVAVVN1WbVZftJ+7P3P66Jqun4lvttXa1ObXHtxwPSA/0HIw6217nU1R3SPVRSj9Yr60cOxx++/p3vdy0NNg1VjZzG4iNwRHnk6fcJ3/ceDTradox7rOEH0x92HWcdL2pCmvKaRptTmvtbYlu6T8w+0dbq3nr8R9sfD5w0PFl5SvNUyWna6YLTk2fyz4ydlZ19fi753GDborZ752PO32oPb++6EHTh0kX/i+c7vDvOXPK4dPKy2+UTV7hXmq86X23qdOo8/pPTT8e7nLuarrlca7nuer21e2b36RueN87d9L158Rb/1tWeOT3dvfN6b/fF9/XfFt1+cif9zsu72Xcn7q28T7xf9EDtQdlD3YfVP1v+3Njv3H9qwHeg89HcR/cGhYPP/pH1jw9DBY+Zj8uGDYbrnjg+OTniP3L96fynQ89kzyaeF/6i/suuFxYvfvjV69fO0ZjRoZfyl5O/bXyl/erA6xmv28bCxh6+yXgzMV70VvvtwXfcdx3vo98PT+R8IH8o/2j5sfVT0Kf7kxmTk/8EA5jz/GMzLdsAAAAgY0hSTQAAeiUAAICDAAD5/wAAgOkAAHUwAADqYAAAOpgAABdvkl/FRgAALBhJREFUeNrtnYd/k1XbxyujIBtkT1GhDEGWgmhBZMgoKFKGLQoKQmnZUGbBAvL4SJGlFMqm7EKh2TtpdpM0adLspNlJk/SveK8Q3j4VEGlzkibh/DwfPlja9B7f+zq/69zXOSelAQvrjVEKvgRYGHcsLIw7FhbGHQsL446FhXHHwsK4Y2Fh3LGwMO5YWBh3LCyMOxYWxh0L446FhXHHwsK4Y2Fh3LGwMO5YWBh3LCyMOxYWxh0LC+OOhYVxx8LCuGNh3LGwMO5YrS5v0OvwO2o9tY8tj49rjq+pWpPOSx9KH9qD3ANtG0QbNJE9MVOcebjm8F3z3SpXlc1v8wQ8gYYAxh0rFlJ5VPct94+rj6+TrFvAXzCJPWkwbXAHYoeUipRotLcq3upD6TOONW5O5ZxsSfZ+1f5LhksCpwAeOYw7VrRk9BmZNuZl3eVt8m1z+HMg7qYQUqKE+CtaV1LXyZzJP1b9WFRbVFFXUeWugmCPccdCo/pgfZ2/jmlnHlUfnVU5qze5NwTytoS2sQe9abxPJaQC9+NZ43+U/XjDcEPtUbsCLow7VkQCg/7Q8jBPkTeNM20IbUh7QvtWieivaD3JPUczRi/iL/pV/avQKcS4Y7VE1nprmaUsX5kPjrkXpVdcIf6SRkgZyRi5UrTyd83v0BH5g36MO9ZrCVyByCU6oTmRzkuPXgIapdaH2meleOVV/VWlWxn/uSzGvZVlq7ddN1zPEGX0IfcJWZeEYj3cOpE6DaEOWSVeBTbMHXBj3LFeLq6Nu1u2ezJrciopNRFBb+ptupC7fM77vKCmgO/gY9yx/iZLveW++X6WJOsd6juJDfrf20DqwB8kP9w13TXXmzHuWCFpvdpT2lNTOFNad3gxSg1OahJn0kntSbVXHQgGMO5vtCQuSb4yfwRjRJuKNsnHeuM4/XDG8Bx5DrOOiXF/c8WwMXIUOUPpQ5MV9KZuvje19yrhqnJjeX2wHuP+ZskX8DGtzCxRVk9qz+Rn/f9bR1LHefx594z3XH4Xxv1NUbAhSDFTMoWZ3cnd3xzWwzE+lZj6Gfezm4ab8eDjMe6xEMFEWC5c3o3SLd4qAmJDfDtiu3Re+lX91VZ/+Ypxj64gpPFsPLCw3ajd3jjQm7Q2hDZA/F3jXY/fg3FPWkld0vWy9X0ofWKNV0WbVEJqR2LHzqTOXUhdupG6QetK6goNvtKB2KEdod1bFW+FeptYdTip5NQveV9CRwdpDMY9CaXyqApqCvrT+scSdOC4P7X/RPbE2fzZ34q+zZZk/1j14yb5plx57kbZxnWyddnS7MXCxRBrx7PG96P2i6WreZv49krhSoqVgnFPNrkCrpPak2nMtBhg1IPcYxJnEsCdK8v9peaXs7qzN003y63lNBuN4+AInAKJSwL9jMglEjqF8BWyjfzA8uCG6cYZzZlDskM50pwMUcZY1ljoB6J9tL2ovfKq82q8NRj3JLLsDYE7pjuf8T6LdpnKSPrI2dzZm2SbzuvPs+wsS72lBUdr8pkoNkpRbRH4Loj67zPe70TqFL0jhxBwXHPc5rdh3JNk2BGC6Hz+fPAV0fLBhNR3ae8uEy0r1hUr3UpAxxvwwu+N5Pl0B9x1/jo4cugcvhZ9DT4nShWakFd8xP7okeVRJAeMcY8XAX87FDt6kqP1Omk4c/h6yfqb2psCu8DhdyA/foCe7+Rf1F8E3z+QOjAqCQaxXaYoU2ATYNwTW56A56Lh4geMD6JByTuUdxbxFxVpi0ROUQzOBVz+4ZrDYG8gxUTuxOBcjimPmX1mjHsCi15Hh5QxGuMtw+nDf5b9zLazY/z0guvIFGYCnciHLGdWzoQMB+OeqHL73TtlO7tT0FcKfMr59LT2dI2nJvZ+1xf0yVyyPdV7htGHIa+o+anqJ2u9FeOekDbmsfnxNPY0tEx0IHZYIFhw3Xg9lli8KJVbBd5jNHM02hg/njW+1FQajQwE4x5dqT3qH2U/9qb0RkhDF1KXDGHGE+uTeKihBZ/9m/K3MYwxCInvQe6xXLxc7pZj3BNJ/qD/vvn++4z30Y42AusUGyV+lrVw1juPVh99j/EewtMcTBt823Q7NmtQYtzRSOQU5chyOhI7IuRgPn/+Q8vDeFvCRe/RFygLQtUHiGI8XLRcea7UKcW4J4wu6i8inI8HnzOONe6y4bI3EI8rtyjdyg2yDagy8rbEtqNZoy9pL2HcE0DBhiAkkXnyPIRxfQhtyHHNcZ1XF7dnzbFz5grmdiB1QDIGD8Rvl22PwUqrGPeIx+kCvjvGO+mV6ahY70bq9r30e5VHFefDUOf15ydxJqE66wWCBXQbPdoOHuMeqRz1jjxpXk8aspKBmbyZT6xP4v/EjV7jFumWzuTOSEw8ZPnHNMeivaowxj1SJyNxSGZyZiK55W9VvNWP1u+o+mh8WvYXdU9/71Pep20ICDKWt4lvLxcvN/lMGPc4Du1+R7G+GNX4YyoxNUuSxbKzEuX0tR7toZpDqHLWKewpQqcwqq+NMe4RSeqSrq1ai+Z+E1IGUAZc1l1OlNDe8HQmLqmONI49Dk2lJ314ib7E7rdj3ONUj82Px7HGtSMiqGvvSu66WLBY4pQk1hVQe9Vrqtb0IPdAsHY2pc+O6h1RzdEx7hGMyQR952rPdSV1RWLc05hp53XnbfW2xLoIEIxLDCVjWWOR2PfFwsUcOwfjHo9SupWb5ZtRTVn6iv9Vtbs69gWPkSfrMpdsNm82gkyd8BY8No/MjzDu8agyS9lc/tzQ8hUR3+n+1P67q3cnkGtvKpff9YPkBwQz/QihjZ+u6K5g3ONR/639L6rFTb/gf3HPci/hQntY9cH6A6oDCNbwIISq4orURdEr/8S4t/we58pzUU1ezpXlqj3qBL0UgYZAsb54EhvBG1a4nnuVe6O3FQLGvaUjEh71UuFSJOOPnUidipRFibJ53Uvte7m1fL5gPpI5iuur1ktdUox7fI3JEKyEdF46kjn541jj7unuJfQFqXRUZkmyIk9j2hLarhCvYNgZGPc4Up2/7g/tH6GZbJHPVyJ3AVB4Nl5CXxCVR7VRtjFy3NtUtFkoWPjY+hjjHkeq9daCcUey0GlfSt8j6iMGnyGhL4jJZ9qh2BE57vAJM3gzSk2lGPc4ksKpyOBntCciyFOH0YbdM9+Ln+1cWiaH37FPuQ8J7p9yP71qvIpxjyMJ64STGZNTyCkpxEhxn8CaEM8bkb6mvEHvYdVhJLhP5U69bLiMcY8jyR3yH8Q/jGaMHkkbOYQ2pB+1X09yz86kzs0dl4TMbIFgQY2nJtEvCPROharCyOcuAu6TOZMvGi5G6RUExr1FwSzgBUbFDjHDwrhhvPGb5rdtim0rxSvTeekjGCNefwMmeEjWy9YbfcbkiO5IcJ/CmVJiKMG4x6n8Qb+53qxwK9h2drm1/Jrx2hntmV+Uv+TJ876TfDefPx/u37v0d7uRXrJZzVD60EJ1Yeuul4S9OxYCQcwWOAXwABTri4HpXHnuSsnKOZVzpnGmfcj6EB6APpQ+X1R+cd143R1wJ/rJIhyZgWtyy3QL456QCjQEfEEfmB9gGkKgzquDTuCm8eZxzfE8RR78KXQKE31YpuHpuHuOLAfJuPt8QWh1HYx78gjQh3AIiOh8Ok/Ak6CVYU3Fc/C+E3+HYM0ZQttMUSbVRsW4Y8Wp4HF9ZH0EWQqSmpm10rVgAjHuWPGbrKOqiATctyu2a71ajDtWnApyj0PKQ4Nog5CsxfAf9X9wvTtW/ArSjzWiNamk1Mhx70nueUkfxcUiMe5YkRp3pUs5lzs38vnpbSrajGKOemTBc1Wx4lXugPua8do41jhkKxE48EoEWPGqGk/Nz/KfQxuVoaiF3qPcE9UKIow7VkSi2qgT2BPaEtpGjvt79PdKjaVRfceMccdquRx+x2+a35AsIQZtGmea2CmO6gFj3LFarnJr+Vz+XCShvTu5+49VP0ZvDQKMO1ZEstRbdlXvev1q51e3iZyJxYZib9CLcceKOwWCgauGq0jepIZbtjC72hX1NQMx7ljNFkDJtXHnV85vS2yLZKWdvrS+J5QnYnDkGHesZkvqkm6o2tCThGZ/ng6kDsvEy5hWJsYdK+6k8qj2qvYOpA1EY2MIoeH2Yk1xbFb6xrhjNUNqj/pgzcE0Zhoqy96B3GFh5UKpXRqb48e4Y71ubipzyHbKdw5jDEOyxvezdUc4E64brrv9bow7VhypwlLxvfD7AZQBqPaGD9c/blJsstRbYnYWGHesf5HCrSjWFy8ULOxK6YpwZ3BoiwSLKDZKLM8F4471j7L4LHQLfbt8O6qdNJ/bi+qq4WqMzwjjjvVyVbmqClWF09nTwXIgZ30QbdCv6l/NPjPGHas15Q/6GXbGr5pfl4qWhoI6MQU5630pfTfINkR1Q0mMO9a/DLwAf1Qb9Yz2zCrxqsG0wcgpbywFy5JkMe3MVlluBOP+Rssb9Nr99lpP7SPzo+3V26dyp4J1QbXh1IutE6lTpiiTUEdoraV1MO5vqNwBt8AhKDGUbFVsncebN545vh+1H8IB9RdbZ1LnxcLFwHor7qeJcU9++YI+a70VvArfyX9ifXLVePV3ze87FDtWiFZ8wvkkNO+OkIJwNP2fhtgzxZnl1nI4mFa8FBj3hFd9sF7ikpAtZIaFwbVzeU4e18Fl29lMK5NoIt423b6gvwB85yvz11at/Urw1Wjm6JcuRxy9BrnpGumaGA+xY9yTU66Aa69qbxo9bRhl2Ej6yLGssWnMtOH04fC/Q6hDBlEH9af2703pDfG1C6lLKjE1lqCHF/Xeq9wLD2Q8rPyKcU94OfyOpaKlITfy3KAhMeoW5V/WjSG0+bzy81O1p+JnexKMe8LL7DMjWY4UZSOEtlhbXrn8puFmtOfjYdzfLCndynRuevyw3pnUeQJnwuGaw3KnPBAMxNW1wrgnvJh25hTOlDhhHXKGHFnOI+uj+NwpFuOe8MMy9833x7PGty7l7QntIT9eIVlxSntK7BLH7eXCuCd8nlqsL0Y4vagF65j2JPecWTnzhPqE2qOO88uFcU9sGX3GY5pjw+jDWgv3VELqRPbEX9S/CO3CVnxdinF/I6TyqLZVb+tL6dtauLcltO1P7T+dO/1b/rfrReuP1hx9aH2o8+ow7ljoJXVJv5d+j2oprwgHH1OIKdDPzOPP21q19a+av0hWkt6nx7hjIRPfyV8kXNSR2DGuxt3Dhv7Lyi8h2FNtVIC+dUtlMO5JIrqNPpU7NaqVjC2M9ISQrR9AGfAR+6N1snVlljK7345xx4pIBCthBGNEfLH+QutB7jGDN2OrYut9y32n34lxx2qhHpgf9KP2i3Pcn62gROwA9qaotkjkFLXWGA7GPbF1WX85LvLU1942tRel1zLRMgjzDr8D447VDLkCrt81v3chdUkU3BuLaj7mfnyo5pDcJce4Y72utF7tXuXeTqROiYX7s5JJ+rAcaQ69jo5xx3otSVySjbKNL51JnUpIhSAKOWJvSu+B1IGDaYOH0oe+S393OG14qNGHA23wlUG0QX0pfZ/N/CDEeubH28S3vxF+Q7QSY2blMe6JPApppy8XLwdD3JQhAHckY+QXlV+sEq/KleceVB08rT191XD1lunWffP9cks5tEeWR/D3UmPped35Y+pjO6p3rJauns2fPYIxIsZD+EA8HOo9873YzHXCuCew7prvfiX4CiL3eNb4DGHGxqqNh6oPnao9dd10/bH1McfBkbqkGq/G5re99C1PoCEA7t/oM1a7q3kOXkVdxTXjtRPqE7vku5YKl45ljQ3N9CPEogxhBm/GTdPNGMR4jHsCi2FnFKoL96r2Qvwm1hFRFSTa/Xa6jX5Se3KtdG06Jx0sUDtSu2hzD8RD/xPtl68Y9wQWGAB3wO0JeIASCNUIPznYEPQGvU6/U+gQHtcc/7Lyy36UflGd1t2mos1M3swKa4U/6Me4Y7WaTD4Tt45brCnOFGf2pPSM6nuo+fz50LFg3LFaWYFggGqj7lft/5z7efSGPoH4dVXrord3NsYdqxkC4wT5MYT5/tT+USJ+EG3QPtW+KNWTYdyxmifw9FKXtLCmMHozBqdwplwzXnMFXBh3rLiQzqv7S/dXOi89GrXHbxPfXiBYwHfwMe5YcRTmS42lX/G/AjqjsYRqgarA6DNi3LHiJn9tCJDqSAsFC5G/i4VOYzxrPFgatCvBY9yxIlJ9sJ5cRwbvgXwTBPjAn6t+RrunDcYdC4HKzGWzK2cj9/FjmGPO6c4hfIOGccdC42rAx0/iTGpT0QZtgM8UZSJcxgPjjoVGDr8DIjHyHVghwN8y3fIEPBh3rPiS1qvNVeQOoA1AiHs3Urd1VesUbgXGHSvOLE0wwLaxF1cuRmhpIB8YzRxdbinHuGPFo/5U/5nGSkNYMNyZ1PmE5gSSbREw7lioLY1Hu7N6Z0dSR4TrF6yWrq50VEZeG4xxx0Kvcmv5OPa4toS2qErhx7HGFeuLI5/uhHHHQi+NV7OteltvSm9UAb4rqWt+db7Nb8O4Y8Wdgg1BSh3lY/bHCIdossRZkY/PYNyxoqK6+rq10rUIl3z6svLLO6Y7rY97fbDeaDeqa9QatSbJpFartVqtzWbz+/2Y4GYJ0spT2lNjmGNQ4f4h68NDNYdaH3eb11ZeWV5yvqTkQkmS6cKFC9evX+fxeA6HAxPcXD/DdXCXi5ejwr0/tX+2NLv1cbfarJduXNqStyX5tHnz5vz8/Dt37hiNRkxwc+UNeg8oD6B65dSB2CGdlx4HuFusF89f3JCkys3NvXr1qk6nw/i2QBd0FwZSB6J6vTqCMSIOcLdaL126lKy4b9269caNG3q9HrPbAj22Pp7Bm/Hcsn4tbr0pvZMW942tJ4w7Kgmdwp+qfupG6oZqF5DkxD0nJ2f37t2FhYVHY6hjx47Bn3v37gUDg3FHIoPPcER9BNU+mN3J3ZMTdwDu7NmzZDKZ+1ScmCj8u8Cp79q1C+OOJlsNeK8YrgymDcbR/VXavHnz/fv3bTZb7O8Qk8ksKCjAuKMS0UocThuOcf8X3B88eGC3t8LWhGw2G+OOUAKHYDRjNMb9X3C/d+8efHLsbw+DwTh48CDGHZWqXFXTuNMw7hj3N0IKt2Iefx6Sl01J7t2xmUkCKT3Kr0VfI9n4CeOOXiwWC+OOUCqParl4OZKF9ZIW99zc3NOnTxMIBGbMdfny5d27d2PcUanGU5MtzUZSCZy0uG/cuHHHjh379+8/GENBUIc/d+3ahV8zIZTaqwbcu5K6YtzfrJqZYEPQH/TXB+uhod1KKc7NzCrJqs6kzhj3NwJ3c71Z4pLQbLR75nvF+uJCdeER9RH4u6Xe8obgninORLJEMMY9Rrgb9IZXXAFv0AvsQq8NWLPsLEId4Y75ziXDpdPa00drju6s3rlGumapcOmXlV9OYk8aQhsyjDFsrXStxCl5E3CvdldnCDOQrA8cp7iD8968efPWKGjH5h07c3fuyNuxNWrKy8vLyclpivvNGzeNumfTO1wBF0Rrg8+g8WogbgHf5DrydeP1otqiA6oDG2QblomWzaycOZo5ug+lTyoxtU1FG2hvVbzVdHXct4hvTWVPZZgZbwLuMrdsBm9GMr9m2rZt25kzZ25EQTev3wy3aHx4aWnpzZs3T548CVlyYxlwU9zBeZfVle1T7VsvW/+N6Bu4ixCt0xhpw+nDB9MG96X07UnuCSb13yMZMWUAeUCZruxNwF3sEk9iTUpm3Pft20ej0QxPpW+RDDrDcw2Ag6+rLWq1Xa2t08Inw1de/DZ9BAofcHl5+f79+1+Kuzfg3aveO4IxArCOaMoCIaUrseufmj+jvUl0PIhj50BESGbcCwoKZDJZlC5feHwjlq+ZGnF3B9y5ylwkkxXeJr6dr8yv9dYmN+uBhsBD88NhtGEY99e+ZMGAD/4LBgB0rVdbZi0rs5TZ/Xb43/pgPfwT2jvEZDKfq5lpGt0PaA4gqd4GwwN2iGwjJzfuDr/jrO7sAOqAZJ7eAbhIpVIk18vqt57Wn4aYekJ/4pr52jrZuo9YH6VXphfWFl4wXdhZsxP+ielgIrxDL5aINeIOT9cZ/Rk4AFTrOP+l+yvp3zHtUe7pRemVzNE9QtzBq0BU0Pv0Ko/qtvn2J5xPwD+MYo6axp3WuD05ZIeTOZN7U3rDE79JtoltZ2u8GvAGka+a+QrcoT+5bbk9kzcT4bqHaHeWizfx7LwsSRaSd0zQBlIHJiHulnrLHfOdwppCoGGJcEkHYof/BUXCW+2J7Z+liYSU8CLiQ2hDsiXZB1UHD9ccFjqF0cM95OwdrG9F36JaKug78XfItw6NKz00PIRo1Y7YDsk6wBPYE5IQd56Dt1i4uB+1X09yz8ZKuraEtmABIaLP5s+ewZsxhjkG/rXpivfvUN4BV11UWxTh5uIvx13/DEqdT7exaiMq3NN56eXW8iQenzmnOhe6TSi2NoDPASqSDXdPwHNOd64PpU/Tzah+rvr5tPb0ffN9qpVKr6PTbDRiHbHUUFpYXZghzOhO7d54QZeJllFtVDDZUcIdzNJB+cFnfUvEt3AofWiBqqCuvi4pWYfzypflo9p98n3G+5sVm5MHd3u9vcxU9t/a/y4QLAhfI4D+a+HX53XnuQ6u2CVm2BkPTQ9L9aW3TbcBd76dL3VKK6wVexR7prCmvE1+GxAETw/G5pz2nMglcvqdyHEHnVaeRhWxOhI7Zggy1B518rEOOQnTzlwqWoqqJ/yE+8lp3enkwb3KXjWVORWoDe/6AKznKfIETkG1u/qS/tJKyUoI873IvbqTukOGDr4lnZuer8wnWolqt/q24TY8JKENUggpqYTUQbRB+1T7Wrbh8r/iflt/O7SBKAHN0odpjDRqHTX5ElboYIs0RaNZo1HhDnGBUkdJHtwlTskw+rBw1AQjvqd6T7giZV3VOgD92fwAwv9cBKStA2gDwP7+VvOb3CmvMFUA8ank0CQxIH6rYmuUcGfamPDsIZmeEz5TSMq1Hm2S4W6tt2aJstDs0EQI3esN4g2RX6V4wd3td9803QQvGx5e/aHqB3Av0BsuES75l9pRMDCM4WDihXbhLd2taaxp8BVgcbl4Ofw48pGZcLZ6SHWoaaIc0cK2pA4zK2eSTUn1vgkyHIqVAg4Tzf57hJS+1L7HFMdcflfC4w79uMlrAofwtejrzuTO8BzP4MwgW8kcOydLmvWaM9iHM4ef1Zy1eq1HFEd60UIvNaCjgMyGbWM3N219Ke5NC4DhA0tNpahWxoJ7CU/OKdWpSNLreFN48z1U+wmDb/yC/8Vd49242IosQtz9Qf990/1F/EUQkiFD7UXttVe2t9Zde1Bx8B3aO695Rd5jvXdSfdIX8EGMXyJaEh6m7Unt+ZPoJ5vPFiHuL07vgIxiCmcKwo2H1krWSl3SpMGdYCZMYE1oS0Sz814qMXWzfDOkcJFnOK2Pe6AhQLPRFgoWhs9tOnf6DcMNhpUxizPrb10hIVQ3+9LO8SPOR4WaQjD6DU8LbH5R/BJKdgkpncid1ovWO+odyHHXeDXZ0uzu5O6ocB/FGnVGdyY5WNd4NPur9yPblQl6P1LPYk0xkuKouPDuDr9jd/Xu8OlBYgrpaVFt0fuM95sa3MmMyVmVWZ9zPu9B6fG/r5M7wONxWnMaEiP4nHARwTXNtdCSs8SUNGba6dpmD129Du52v/209vQo5ihUuENuDemv1psMCetV49XQyBWiTTvak9pPZk+mmChIji0uzAz042uq1oRPD7JAnoOXK89tuitnd2r3/Kp8sPj3jfc/5X36bNCa1HGuYO5t421AHLo5loNVWFPIt/ErTBXgNMDwgX0vqCkw15ubNQ/6NVcR4zv58wXzEfqZMawxJfqSyLOx1pXSrcyWZKN6tRQauaK9s0WxpcZVkyS4W3yWXfJd/Wn9w0alqKZI5BCtFK/sQu7S1L1tkGwIp/zhd/jgCzMlmRWWinD6wrPxVkhXQDgv0ZXQ6mihEUliagdih894n0FaCcEYOe7weyEVRjUcGTpHcmqGIENsEycu6za/7XDN4SG0IQijwFjW2EeWR6jKvOMC95XClY0D6qc0p8ROcaYos7H4Mdw+5X4afstwQXcBIP5e+j3JQno2EG5lrhWv7UHuAZYdPAbdRm8cvnyP/l6JocQdcCPHHVSsL/6Q/SGyW0tI6Ufpd0J1AjqxRGQdLvI9871J7EkIQztEk2WiZTovso2xWh93CJPQiU/lTg2f4XH1cYFDADQ/lwj2ofTZKNsIOaLMLYOAXeWqCo8JMiyMLFFWeAwH0qMbxhuA+6zKWe0J7eETVolXiVwi5N49LKFTuE66DpVJhdaO0C69Mv2u+W4i4g6X/RvRN6hqfRvLpU5pT0U+/hhfqSp0grsUu8JnuEOxAy7cbuXu53Zsg5gxkj6yzFwGXr9x8h7JRFrCX9KV3DXcM4BZJ1qJ0MDVwPdPYE/4U/enJ+CJEu7wsF3UXgxVsxGQ3WDwYD/JftJ4NInFOsQgSLcQWrtw+0H6Q+Qbw8cd7rXe2lxZbvgMl4qWPrI+um68/iHrwxcLqjbLN0OAD//UXcPdRZWLOpM7h2mDfwXLDhH3kv5S2AgNZwz/VfVrc8trm7XgNeQM8EvRhrTB9MGHlYcd/oTZuNjkM+1V7h1EG4TwIkC0ep/xPkQrtPOS4+KtaoW1Yk7lnMY6zz80fyhciu+E30Goe67AfxRz1K+aX5l25k3DzXmV81JJ//uGwdRQsTvgvkW+5dn3k9qsFa2119ujh7ul3nJOey5c+4DQxEMnflV3tWUVnTGW0Wc8pj42gj4CbVzvQOwA3jVsWZMNd5adtUG2oR+tX2iFFmJKNj9b4VRc0V2ZxJn04kMPyRB4REjYm85ySiWkLhcthxwXuoVPOJ/AVyDAj2aOLlQUNndor7nbGchcsrn8uai2Dm20NDN4M+7p7yG0rVGK679rfh9OH46W9VBcY416ZHmE/IDj5TUTWDQIEuFCFPDopzSnACP4youT2AGskEf8u12ezZ9dZimDH/le8j24Goj6c/hzLtZerHXXBoKBqOLuDriPa45DtoD2lsMpLOYvfmR+FLes67y6QnVh07eByOwcbfCO6h16nz45cX/24sbG/4D2QahgnZQ6lTv1nvkePANHa45O4Ez4x1yQkNKF0mWRcNET65Nqd/UB1YGwg4TQniPPUbnQFAC/GnfoncB6rRatRjXF6X8v1yjdl0iXlFvK47B6TO6W51fnf8D4ADnrcA0X8hYCDNE46zjCXWwTf0j/MIUUOmHozhYJFj0wP4CAXaItyRRkjmON60/tDxxDRw+tG6kbOOZprGlbpVvJdWR4MI6rjzf2qj0oPXZX744N7mHBQYYCPAHxvYdEfGHlwju6O7Z6W5yA7gl4GHbGFsWW/pT+6FmHvp018mzN2SgdfBzhrnapf5T8CBB3JnYO2/HpvOlna89WO6urnFVXjFe2V2/PFGbO589fKFiYJckqqCl4bHoMdoVn522t3ho2QmDu4UkA41usLwZnGTPc1R71XtXenpSeyG8/PNtT2VPPa883691wtN4l+d239LcyRBnIKsBeWIwELqPeq09+3OFSipyiR6ZHeyR7upNCs63bEtum0dPWCNcA9E/qnnDsHIldInVKJS4Jz8Gj2+j3TPeOVB+ZXzm/L7Vv49x+cNJ0O73WW9uyGf4twx0sDdvBniuYi3zsOVwxAak5mAeBU9CKrIud4v3y/ZOZk6NxjuG3hMtEyzgOTvROIR4X3mBb2KMYo8KuJlz3m8ZKWyFZsa963ynlqfOa8+d0535V/7pFvmWeYF4/Wr9n3/bUSOyp3hPhaEaLN5p0+p0l+pKxzLHRQAEaZO2rJatLTaUGnyHGoCvdyiuGKz9IfxhMH4zcsDW2KdwpZZayZlV8JAPu4Lm3yrdOZE8cSR8ZKuX9t8wGuvuBlIFptLSJrImX9JcinAQQyb6q4dfDqOb1vXSE7mPOx5C+Q+dmrjdHm3LoHnVeHaWOAieFsNr5pe0D+gdwXtF+1RCPuENaJnAImDZmpb3yP+r/QIb6t0kehOc7+i8rvyyuLRY7xAwb47bpNqOOEclCRRFuIww9/tqqtUg2q3i5sSG0hRDwOffzwzWHAfroDcxb6i2PLI82yTdNYE1AtcjjPzX4/N3y3S3LtRIbd7Vbfb72/JGaI+DjG55ubLRFsWWOYA70pOBeQi+eCKG525mizDx53gLhAmC9RFsSHlwH3JeLl38t+PqO8U6LiY981+yKugo4KiQb575qei59OGTtcHEuGS4JnUJUw3YQzuH4f6/9fY1kTTo3ven6VlFq3UjdQi9QnVUN0Vd84R5oCBQbiidyJvaj9lslWXXHfIdhZ0CMKTWWSpwSePrhSVhSuWSDbAPTzgQL+9j6GMK5xWcx+oyl5tIMYUZHYsd2hHZLREv4Tn7LXE3kuIOluWK8MpE7EdVaNK+eBjWFM2WdbN1J1cn7+vvwwFe5q/Q+PbiC16k2AaMMl07hVnAd3CfWJ8W64j3KPYuFi0MroET5yBuHYlaKV8YsBY8v3KF3zhBlhAumwQ/ARV8qWvofzX/A1YSjly/g03v0eq8+fC/h8YAbBv4BevaP2B81Woh3KO+Ext09qlbBveHpKivH1cdHM0dHL7FrWlgB0Hcmdh5MHZzOSwcrVaguvKi/+NDykOPgqNwqg8cAkcJU/7T5THD1lC5lpaOSWEe8Zrx2TH0sR56zULAQjhYCbQdiB7QFEa8eY/1W9C3bzo5Zzh1HuOs8uk1Vm7pT/lbm3pnU+X3G+ydrT/7TQqc1nprVktXPVQuHi4FPaU81t/oXFe4geCwLFAXvMt+NAfGNWQ04e0iUB9MGj2SMHMcaB4F/Ont6Oiv9C+4XYAjn8efNqpyVzkmfzpr+MfvjCewJkIAOpQ+F6IBkI8jmbugAjpRqo8Zyi9l4wR3CIRiV92jvvQhHJ1Kn45rj/4R7lasK7uJL51h8xvsMTHxr4R560+6Q75HtCS23QkiJMUyvWsGBkNKax/P/05Sg36bYKA2xVVzgDiYbDPoXlV88V/Eb7u+WCJew7KxXjHZf0F+AQPXS5Xgy+BlCh7BZVWIIcQcpHIpcae4A+oBWJyx+Glimr4Vf02302L8piwvcpS7petn6ly56D/3yn7o/Xz0cC8nWOum6f1oUfJNsk8wle/20FS3uoXc0LuVW2dbQCxrM+lN3mi3OBr8e1f3k4hd3c715l2JXaGbqC90uZGBz+HPErn+fnA+Z2VjW2EZLAz/Ym9Ibsv4Q8ZSekLq9/h53yHEHyRyyA/IDIxgj3vAYD74uV5YLWXJr1UG0Mu7wiFe7q/PkedO50xfwFizjLZvJmdk4Dexd+rtH1EdeZxqbwq3YJt8WnvABf07iTNqq2Lq9evtS4dIFggWHVIde55mJHu4gjVtzTHMMDixm4x7x1tLoafmKfOhpG1pPrYy7N+jVeDUcB4fr4Oq9epffRbFQlomXhaMguPbXjwRl5rIPmB+Et2oqqCkw+Azw4eCCtF6tyCl6/QW6ooR7eDy+2FCczkuPUolV3DY434+5H59Qn7D4LA2tqlbGPdAQ8Aa8Td8I+oK+wzWHwY1AQgMmBJB9zcOo8dRAAgAGZhp3Gs1Ge64Pef2XrNHDveHpanvl1nIwr1EqoI3DBnfkO/F3DywPzD5zQ2srHmtmSgwlEKFn8WaRbKTX/yl4bJ6Yn0znTM+WZlv91hb/9qjiHhYkatsV20exRiW5lSemfMT+aGf1zlcMrGHcG0h20mr56jP6M82tGQKXX1RbdMF4IZLTiQHuDU8nNf+35r/p7PRoV1+11mB/f2r/r3hfna09G4PKzdbHvaqq5RU/td7aJ9Ynrz+W0lTgDiPcyO7FTeKjgXv4jQHVQs2R5wymDw5vR5UcDXLxseyx+5X7BTZBvK3wGhXcCwoKIsE92BCsD7TaZGQWiwXHHwPcG98Kn9edXyFe8bc654RtY5hjcmW5d8x3Gle/Sn7cITpKJJJAIOBvkeAHg8Fgy348AD/tb/nvBVGp1P3798cM92ddip1ZUFMwt3Iusj1wYts6EjuOY42Dh/a09nTLKvMSGPf8/PyysjI+n19ZWclrpip5lU1bi3+W13wJBAI45itXruzcuTPGuIfHZLkObr4y/2POx30ofZouGhW3Br0NoU13cvdhtGHfiL6BPqrGUxPLeq94wX3Tpk27d+/en2g6cOAA/Lljx46cnJzY4x6W3qdn2BmQcGcIM+I8i+1E6jSJPWmzfPNt0225W54Qi1pGBfdkUoxxDwuybVIdCaDfULUhnZfej9ovfiJ6V3LXyZzJWaKsQkVhqaFU5pY1JI4w7vGI+/+CvVdfairdWb1zgWDBBNaEofShz4qLYlvE243UDZKKDxkfzuLM+rnq52J9sdgpbu5qhMmD+8WLF5MV982bN1+/fr21cA+/Zrb77RqvhlhHPK45niXJmsSa1JvcG7wE+Pv2hPZ/q/VH8QzAB8LHwofDr4AsYgpnyneS7wrVhQ9MD5QuJfQ8cb5QK8a95crLy7t27Vor4v7cyymxS0y2km/pbhWpi7ZVb1suXg5uJ42Z1pvSO7y9ZkuIJzybXtSf2n8Mc8wM3owV4hXQpfxR+0epsZRio4hcIoPPkAQbHSPA3e12czica091I7kEZ3Tnzh0+n+9wxF0eBvCpPCq6jQ5u54zuzC/qX7bLt68TrssWZC8TLVskXPRsqh4vfTp3+lTu1E84n0D7lPvp57zPAehZvFnwDZAQZwozV4tWQ5IAfB9VHz2nO3fLdItup6u96jgfZmkd3IPBoM/ncz2VO7kUPiM4OzjH+Lx/AD1YC1fABYYHbIbJawpPu4ZM94HlwU3jzRJDyV+6v85oz/yh/eOU9hTQfEF/4YrhCoRt+AZyHRm+WeVWmX3mOn+dw++Aj3quaA/jjoWFccfCwrhjYWHcsbAw7lhYGHcsLIw7FhbGHQsL446FccfCwrhjYWHcsbAw7lhYGHcsLIw7FhbGHQsL446FhXHHwsK4Y2Fh3LGwMO5YGHcsLIw7FhbGHQsL446FFXf6P/k/Itb5F97NAAAAAElFTkSuQmCC\" alt=\"\" />\r\n<h1><span style=\"color: #808080;\">Layanan Terbaik</span></h1>\r\n<p><span style=\"color: #000000;\">Yo-Bersih mengutamakan kepuasan pelanggan. Kami siap memberikan hasil pencucian yang maksimal, ketepatan waktu, serta keramahan tim kami dalam melayani anda</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'home-page', NULL, '2019-01-07 05:05:18'),
(52, NULL, 'Rovi_Adi_Nanda_MSC.jpg', NULL, 19, '2018-07-26 07:41:00'),
(53, NULL, 'JamRois-2.jpg', NULL, 19, '2018-07-26 07:41:07'),
(54, NULL, 'FB_IMG_1521104212170.jpg', NULL, 19, '2018-07-26 07:41:30'),
(55, NULL, 'FB_IMG_1521103994735.jpg', NULL, 19, '2018-07-26 07:42:54'),
(57, NULL, 'DSCF3641.JPG', NULL, 30, '2018-07-26 07:55:10'),
(58, NULL, 'DSCF3648.JPG', NULL, 30, '2018-07-26 07:55:16'),
(59, NULL, 'DSCF3675.JPG', NULL, 30, '2018-07-26 07:55:30'),
(62, NULL, 'DSCF3657.JPG', NULL, 30, '2018-07-26 08:29:36'),
(64, 'Testimoni Alumni Duper Mustika Cita', 'https://www.youtube.com/embed/UjHFDokkV5Q', NULL, 14, '2018-07-30 07:52:33'),
(65, 'VIDEO PEMBELAJARAN DI DUTA PERSADA', 'https://www.youtube.com/embed/VvKemRyeiB4', NULL, 14, '2018-07-30 07:54:26'),
(66, 'Duta Persada Alumni part 1', 'https://www.youtube.com/embed/gAa10GipIAA', NULL, 14, '2018-07-30 07:55:25'),
(67, 'Enjoy on Board Dede Bagus at Star Cruise', 'https://www.youtube.com/embed/COxSAa6x8k0', NULL, 14, '2018-07-30 07:56:21'),
(74, 'website logo', '{\"options_image\":\"Logo_Yo-Bersih_grup_ok_bos.png\"}', 'website-logo', NULL, '2019-03-22 02:26:44'),
(75, 'website icon', '{\"options_image\":\"Chrome.png\"}', 'website-icon', NULL, '2018-12-08 07:15:33'),
(88, 'embed youtube', 'https://www.youtube.com/embed/PylohSp_AY0', NULL, NULL, '2018-09-25 06:29:53'),
(89, 'Sidebar Informasi', '<p>Hubungi Pak xxxxx <br />Telpon : <br />xxxxxxxxxxxx <br />xxxxxxxxxxxx (WA) <br />Pin BB : <br />xxxxxxxx<br />Website :<br />www.xxxxxxxxxx.com<br />Alamat : <br />Jl Imogiri Timur, Km 11,5 Kembangsongo, xxxxxx, xxxx, Bantul, Yogyakarta<iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.037090791991!2d110.38488772773889!3d-7.891188539106456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a543650276bb3%3A0xf3b2afb201af911f!2sJl.+Imogiri+Tim.%2C+Kembang+Songo%2C+Trimulyo%2C+Jetis%2C+Bantul%2C+Daerah+Istimewa+Yogyakarta!5e0!3m2!1sen!2sid!4v1538033481341\" width=\"100%\" height=\"150\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>', NULL, NULL, '2018-09-28 03:36:01'),
(90, 'sidebar partner', '75', 'sidebar partner', NULL, '2018-09-28 13:26:05'),
(91, 'sidebar social media', '75', 'sidebar social media', NULL, '2018-09-28 13:25:59'),
(99, NULL, '870x350.jpg', NULL, 98, '2018-09-28 06:33:34'),
(101, NULL, 'img3.jpg', NULL, 98, '2018-09-28 06:55:03'),
(109, NULL, '870x350.jpg', NULL, 108, '2018-09-28 07:09:56'),
(110, NULL, 'img3.jpg', NULL, 108, '2018-09-28 07:10:02'),
(143, 'Koleksi 2018', NULL, 'koleksi-2018', 13, '2019-01-09 02:33:48'),
(144, NULL, '1546928886496.jpg', NULL, 143, '2019-01-09 02:33:48'),
(145, NULL, '1546928985515.jpg', NULL, 143, '2019-01-09 02:34:21'),
(146, NULL, '1546942012745.jpg', NULL, 143, '2019-01-09 02:38:37'),
(147, NULL, '1546942187718.jpg', NULL, 143, '2019-01-09 02:39:06'),
(148, NULL, '1546944214992.jpg', NULL, 143, '2019-01-09 02:39:39'),
(149, NULL, '1546944280716.jpg', NULL, 143, '2019-01-09 02:40:05'),
(150, NULL, '1546943838947.jpg', NULL, 143, '2019-01-09 02:40:31'),
(151, NULL, '1546943782441.jpg', NULL, 143, '2019-01-09 02:41:02'),
(152, NULL, '1546944331104.jpg', NULL, 143, '2019-01-09 02:41:55'),
(153, NULL, '1546944397295.jpg', NULL, 143, '2019-01-09 02:42:14'),
(154, NULL, '1546943640374.jpg', NULL, 143, '2019-01-09 02:42:34'),
(155, NULL, '1546942302309.jpg', NULL, 143, '2019-01-09 02:42:58'),
(156, NULL, 'A1543634586769.jpg', NULL, 143, '2019-01-09 02:43:29'),
(157, NULL, 'B1546929072383.jpg', NULL, 143, '2019-01-09 02:43:56'),
(162, NULL, '{\"options_caption\":\"\",\"options_image\":\"slide_web_1.jpg\"}', NULL, 11, '2019-01-13 10:45:51');
INSERT INTO `options` (`options_id`, `options_title`, `options_contents`, `options_seo`, `options_parent`, `options_timestamp`) VALUES
(163, NULL, '{\"options_caption\":\"\",\"options_image\":\"slide_web_2.jpg\"}', NULL, 11, '2019-01-13 10:46:54'),
(164, NULL, '{\"options_caption\":\"\",\"options_image\":\"slide_web_3.jpg\"}', NULL, 11, '2019-01-13 10:48:45');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pages_id` bigint(20) NOT NULL,
  `pages_title` varchar(255) DEFAULT NULL,
  `pages_seo` varchar(255) DEFAULT NULL,
  `pages_contents` text DEFAULT NULL,
  `pages_media` text DEFAULT NULL,
  `pages_src` text DEFAULT NULL,
  `pages_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pages_id`, `pages_title`, `pages_seo`, `pages_contents`, `pages_media`, `pages_src`, `pages_timestamp`) VALUES
(1, 'profil', 'profil', '<div class=\"col-sm-12\">\r\n<div class=\"hotTitle\">\r\n<h3><strong><span style=\"color: #000000;\">Profil</span> <span class=\"text-muted\" style=\"color: #00ccff;\">Yo-Bersih</span></strong> <span style=\"color: #000000;\"><small>Home service car wash</small></span></h3>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-12\">\r\n<p style=\"text-align: justify;\">Yo-Bersih home service car wash adalah jasa pencucian mobil yang melayani pencucian mobil secara panggilan atau home service. Kami spesial melayani pengerjaan pencucian mobil baik di rumah, kantor ataupun kos-kosan.</p>\r\n<p style=\"text-align: justify;\"></p>\r\n<p style=\"text-align: justify;\">Yo-Bersih home service car wash memulai usahanya pada tanggal 9 November 2018 di kota Yogyakarta. Berlatar belakang semakin padat dan ramainya kendaraan di jalanan kota Yogyakarta, Yo-Bersih mencoba memberikan solusi kemudahan untuk para pemilik kendaraan khusus mobil untuk lebih mudah dalam mencuci mobilnya yang kotor. Dengan hadirnya Yo-Bersih diharapkan, pemilik mobil tidak perlu lagi harus keluar rumah atau kos atau kantor, melewati padat serta macetnya jalan raya hanya untuk mencuci mobil.</p>\r\n<p style=\"text-align: justify;\"></p>\r\n<p style=\"text-align: justify;\">Yo-Bersih home service car wash memiliki kantor operasional di jalan Monjali no 149A, Sleman, Yogyakarta, dengan nomor telepon 0878 8004 8008 dan website <span><a href=\"http://www.yobersih.com\">www.yobersih.com</a></span></p>\r\n<p style=\"text-align: justify;\"><span></span></p>\r\n<p style=\"text-align: justify;\">Terdapat dua metode pencucian yang dapat menjadi pilihan untuk mencuci mobil, yaitu cuci waterless atau hemat air dan cuci dengan air. Metode cuci waterless merupakan produk atau layanan unggulan dari Yo-Bersih. Metode cuci waterless yaitu pencucian mobil dengan hemat air dimana mobil akan di semprot dengan cairan khusus yang mengandung carnauba wax yang memiliki kandungan sebagai pelicin dan pengkilap sehingga body mobil tidak baret saat di cuci dan dapat mengkilap seperti efek daun talas. Sedangkan metode cuci dengan air yaitu pencucian dimana mobil akan disiram, dibersihkan dan dibilas dengan air yang sudah dicampur dengan shampoo mobil khusus yang mengandung PH balance dan wax sehingga aman untuk cat mobil dan memberikan hasil yang bersih mengkilap.</p>\r\n<p style=\"text-align: justify;\"></p>\r\n<h4><strong><span style=\"color: #000000;\">Slogan <span style=\"color: #00ccff;\">Yo-Bersih</span></span><span style=\"color: #00ccff;\"> </span></strong><span style=\"color: #000000;\"><small>Home service car wash</small></span></h4>\r\n<h5><strong><span style=\"color: #00ccff;\"></span> </strong><span style=\"color: #000000;\">Mobil bersih tanpa repot</span></h5>\r\n<p style=\"text-align: justify;\"></p>\r\n<h4><strong><span style=\"color: #000000;\">Motto</span> <span style=\"color: #00ccff;\">Yo-Bersih </span></strong><span style=\"color: #000000;\"><small>Home service car wash</small></span></h4>\r\n<h5 style=\"text-align: justify;\"><span style=\"color: #000000;\">Bersih, teliti, dan cepat</span></h5>\r\n</div>\r\n<div class=\"col-sm-12\">\r\n<div class=\"form boxOne\"></div>\r\n</div>', NULL, NULL, '2019-01-07 07:55:37'),
(2, 'Kontak', 'kontak', '<div class=\"col-sm-12\">\r\n<div class=\"hotTitle\">\r\n<h1>Kontak &amp; <span class=\"text-muted\">Peta Lokasi</span></h1>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-12\">\r\n<div class=\"peta\"><iframe width=\"100%\" height=\"450\" style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2219372803893!2d110.36690041491441!3d-7.766273379183436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584fc9d0f52d%3A0xfab604106364f652!2slantai+2%2C+Jl.+Monjali+No.149%2C+RW.49%2C+Kutu+Dukuh%2C+Sinduadi%2C+Mlati%2C+Kabupaten+Sleman%2C+Daerah+Istimewa+Yogyakarta+55284!5e0!3m2!1sid!2sid!4v1544243046265\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n</div>\r\n<div class=\"col-sm-12\">\r\n<div class=\"form boxOne\">Kantor Manajemen : Jalan Monjali No 149A (lantai 2) Sleman, Yogyakarta</div>\r\n<div class=\"form boxOne\">Telepon / WA : 0878 8004 8008</div>\r\n<div class=\"form boxOne\">Intagram : @yobersih</div>\r\n<div class=\"form boxOne\">Facebook : Yo Bersih&nbsp;</div>\r\n</div>', '{\"form_embed\":\"contact-form\"}', NULL, '2018-12-08 04:46:16'),
(3, 'info', 'info', '<h3><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\">Bagaimana Cara Order</span></strong></h3>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"></span></strong></p>\r\n<h4><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\">Car wash dan Bike wash</span></strong></h4>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"><img src=\"/auth/assets/tinymce/images/How_to_order_CW_BW_1.jpg\" width=\"400\" /></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\">.</span></strong></p>\r\n<h4><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\">Laundry dan Shoes care</span></strong></h4>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"><img src=\"/auth/assets/tinymce/images/How_to_order_LDR_SC_Revisi_12.jpg\" width=\"400\" /></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"></span></strong></p>\r\n<p><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\"><!-- pagebreak -->.</span></strong></p>\r\n<h3><strong><span style=\"font-family: georgia, palatino, serif; color: #000000;\">Informasi Umum</span> <span style=\"color: #00ccff;\"></span><span style=\"color: #81c3e4; background-color: #ffffff;\"></span></strong></h3>\r\n<p></p>\r\n<ul>\r\n<li><span style=\"color: #333333;\"><strong>Hari apa saja layanan Yo-Bersih tersedia?</strong></span><br /><span style=\"color: #333333;\">Yo-Bersih buka setiap hari dari hari SENIN-MINGGU, kecuali hari libur nasional tertentu.<br /></span></li>\r\n</ul>\r\n<p><span style=\"color: #333333;\"></span></p>\r\n<ul>\r\n<li><span style=\"color: #333333;\"><strong>Mulai jam berapa layanan Yo-Bersih tersedia?</strong></span></li>\r\n</ul>\r\n<p><span style=\"color: #333333;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yo-Bersih Car Wash : 07:00 WIB - 20:00 WIB<br /></span></p>\r\n<p><span style=\"color: #333333;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yo-Bersih Bike wash : 07:00 WIB - 20:00 WIB</span></p>\r\n<p><span style=\"color: #333333;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yo-Bersih Laundry : 08:00 WIB - 18:00 WIB</span></p>\r\n<p style=\"text-align: left;\"><span style=\"color: #333333;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yo- Bersih Shoes Care : 08:00 WIB - 18:00 WIB</span><span style=\"color: #333333;\"><br /></span></p>\r\n<p><span style=\"color: #333333;\">&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"color: #333333;\"><strong>Berapa lama pengerjaan cuci mobil Yo-Bersih?</strong></span><br /><span style=\"color: #333333;\">Estimasi waktu pengerjaan tiap mobil sekitar 45-60 menit untuk small car dan sekitar 60-75 menit untuk medium atau big car. Namun estimasi waktu tergantung juga dengan pilihan paket cuci yang di ambil dan kondisi saat di lapangan</span><br /><br /></li>\r\n</ul>\r\n<hr />\r\n<p><!-- pagebreak --></p>\r\n<h3><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\"><strong>Informasi Area Kerja</strong></span></span></h3>\r\n<p><span style=\"color: #808080;\"><strong></strong></span></p>\r\n<p><span style=\"color: #808080;\"><strong>&nbsp;<img src=\"/auth/assets/tinymce/images/area_kerja_Yo-Bersih_Maret_2019_1.jpg\" width=\"400\" height=\"363\" /></strong></span></p>\r\n<p><span style=\"color: #808080;\"><strong>&nbsp;</strong></span></p>\r\n<p><span style=\"color: #808080;\"><strong></strong></span></p>\r\n<p>&nbsp;</p>', NULL, NULL, '2019-03-22 04:11:06'),
(4, 'paket', 'paket', '<p><span style=\"font-family: times new roman, times, serif;\"></span></p>\r\n<h3><span style=\"color: #000000;\"><strong><span style=\"font-family: times new roman, times, serif;\">Yo-Bersih Car Wash</span></strong></span></h3>\r\n<h5><span style=\"font-family: times new roman, times, serif; color: #000000;\">Layanan cuci mobil panggilan yang datang ke lokasi tempat pelanggan. Lokasi pencucian dapat dilakukan di rumah, kantor, kos, atau apartemen. </span></h5>\r\n<h5><span style=\"font-family: times new roman, times, serif; color: #000000;\">Terdapat 2 pilihan metode pencucian mobil :<br /></span></h5>\r\n<ul>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Cuci wax hemat air atau waterless (Recomended)</span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Cuci dengan air atau reguler&nbsp; <br /></span></li>\r\n</ul>\r\n<p><span style=\"font-family: times new roman, times, serif; color: #000000;\">Terdapat 2 pilihan paket pencucian mobil :</span></p>\r\n<ul>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Paket Silver : Meliputi pencucian bagian eksterior/body luar, interior dalam, ban dan velg</span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Paket Gold : Meliputi pencucian bagian eksterior/body luar, interior dalam, ban dan velg, mesin</span></li>\r\n</ul>\r\n<p><span style=\"font-family: times new roman, times, serif; color: #000000;\">Terdapat 2 pilihan layanan tambahan :</span></p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Membersihkan jamur kaca mobil</span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Membersihkan jamur body mobil</span></li>\r\n</ul>\r\n<p><span style=\"font-family: times new roman, times, serif; color: #000000;\"></span></p>\r\n<h3><span style=\"color: #000000;\"><strong><span style=\"font-family: times new roman, times, serif;\">Yo-Bersih Bike Wash</span></strong></span></h3>\r\n<h5><span style=\"font-family: times new roman, times, serif; color: #000000;\">Layanan cuci sepeda motor panggilan yang datang ke lokasi tempat pelanggan. Lokasi pencucian dapat dilakukan di rumah, kantor, kos, atau apartemen. </span></h5>\r\n<h5><span style=\"font-family: times new roman, times, serif; color: #000000;\">Dengan metode pencucian sepeda motor Semi Waterless atau Cuci wax semi hemat air.<br /></span></h5>\r\n<p><span style=\"font-family: times new roman, times, serif; color: #000000;\"></span></p>\r\n<h3><span style=\"color: #000000;\"><strong><span style=\"font-family: times new roman, times, serif;\">Yo-Bersih Laundry<br /></span></strong></span></h3>\r\n<h5><span style=\"font-family: times new roman, times, serif; color: #000000;\">Layanan ambil antar laundry kiloan dari lokasi tempat pelanggan ke workshop laundry rekanan terbaik kami. <br /></span></h5>\r\n<h5><span style=\"font-family: times new roman, times, serif; color: #000000;\">Terdapat 2 pilihan layanan laundry kiloan :<br /></span></h5>\r\n<ul>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Laundry Reguler ( 3 hari )<br /></span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Laundry One day service ( 1 hari )<br /></span></li>\r\n</ul>\r\n<p><span style=\"font-family: times new roman, times, serif; color: #000000;\">Pilihan waktu ambil antar laundry kiloan :</span></p>\r\n<ul></ul>\r\n<ul style=\"list-style-type: circle;\">\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Pukul 08:00 - 18:00<br /></span></li>\r\n</ul>\r\n<p><span style=\"font-family: times new roman, times, serif; color: #000000;\"></span></p>\r\n<h3><span style=\"color: #000000;\"><strong><span style=\"font-family: times new roman, times, serif;\">Yo-Bersih Shoes Care<br /></span></strong></span></h3>\r\n<h5><span style=\"font-family: times new roman, times, serif; color: #000000;\">Layanan cuci sepatu dan semir sepatu panggilan yang datang ke lokasi tempat pelanggan. Lokasi pencucian dapat dilakukan di rumah, kantor, kos, atau apartemen. Layanan lain yang kami sediakan adalah ambil dan antar sepatu dari lokasi tempat pelanggan ke workshop shoes care rekanan terbaik kami.</span></h5>\r\n<h5><span style=\"font-family: times new roman, times, serif; color: #000000;\">Terdapat 2 pilihan layanan pencucian sepatu :<br /></span></h5>\r\n<ul>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Cuci On The Spot (Fast Cleaning) : Layanan cuci atau semir bagian luar sepatu yang dikerjakan di lokasi tempat pelanggan<br /></span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Ambil Antar Cuci Sepatu <br /></span></li>\r\n</ul>\r\n<p><span style=\"font-family: times new roman, times, serif; color: #000000;\">Terdapat beberapa pilihan paket untuk ambil antar cuci sepatu :</span></p>\r\n<ul>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Deep Cleaning<br /></span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Repaint</span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Bag Cleaning</span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Unyellowing</span></li>\r\n<li><span style=\"font-family: times new roman, times, serif; color: #000000;\">Reglue</span></li>\r\n</ul>\r\n<p></p>', NULL, NULL, '2019-03-21 15:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` bigint(20) NOT NULL,
  `post_title` varchar(300) DEFAULT NULL,
  `post_seo` varchar(300) DEFAULT NULL,
  `post_contents` text DEFAULT NULL,
  `post_media` int(11) DEFAULT NULL,
  `post_src` text DEFAULT NULL,
  `post_categories` int(11) DEFAULT NULL,
  `post_tags` text DEFAULT NULL,
  `post_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_seo`, `post_contents`, `post_media`, `post_src`, `post_categories`, `post_tags`, `post_timestamp`) VALUES
(1, '5 Kota termacet di Indonesia', '5-kota-termacet-di-indonesia', '<p></p>\r\n<h3><span style=\"font-family: georgia, palatino, serif;\"><strong><span style=\"color: #000000;\">Tahukah kamu 5 kota termacet di Indonesia</span></strong></span></h3>\r\n<p><span style=\"font-family: georgia, palatino, serif;\"><strong><span style=\"color: #000000;\"></span></strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Indonesia sebagai salah satu negara berkembang tentunya di ikuti juga dengan berbagai perkembangan baik teknologi, pengetahuan dan ekonomi. Salah satu perkembangan industri di Indonesia yang cukup pesat adalah di bidang transportasi, hal ini terlihat semakin banyaknya alat transportasi khususnya kendaraan bermotor yang terus bertambah. Terus bertambahnya kendaraan bermotor di Indonesia tidak lain dipengaruhi oleh banyak faktor, seperti perusahaan otomotif yang semakin inovatif yang terus menciptakan produk-produk baru ataupun berbagai kemudahan yang di dapatkan oleh masyarakat dalam memiliki kendaraan bermotor. Di satu sisi dengan bertambahnya jumlah kendaraan bermotor di Indonesia yang menandakan pertumbuhan ekonomi serta daya beli masyarakat yang semakin baik, di sisi lain menimbulkan suatu permaslahan baru yaitu kemacetan lalu lintas.<br /></span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\"></span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Jumlah pertumbuhan jumlah kendaraan yang tidak seimbang dengan jumlah penambahan ruas jalan yang ada, jelas mengakibatkan kemacetan lalu lintas di jalan raya. Di beberapa kota besar di Indonesia masalah kemacetan lalu lintas sudah sangat sering terjadi dan telah meresahkan bagi masyarakat pengguna jalan raya. Bahkan pada jam-jam tertentu seperti pagi hari misalnya dimana masyarakat mulai berangkat beraktivitas di beberapa kota besar di Indonesia tingkat kemacetan yang terjadi dapat dikatakan cukup parah. Ada banyak kerugian yang ditimbulkan akibat terjadinya kemacetan di jalan raya, seperti kerugian waktu dimana waktu yang ada menjadi terbuang sia-sia ditengah jalan raya dan juga kerugian bahan bakar dimana saat terjadi kemacetan dan kendaraan berjalan secara sangat perlahan-lahan bahkan berhenti bahan bakar didalam kendaraan akan terbuang sia-sia.</span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\"></span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Dan berikut adalah 5 Kota termacet di Indonesia berdasarkan survei yang dilakukan oleh salah satu lembaga survei.</span></span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Jakarta </span></span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Bandung</span></span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Malang</span></span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Yogyakarta</span></span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Padang</span></span></li>\r\n</ol>\r\n<p><span style=\"font-family: georgia, palatino, serif;\"><span style=\"color: #000000;\">Berdasarkan survei, pada jam-jam sibuk di ke 5 kota tersebut tingkat kemacetan lalu lintas yang terjadi berada di atas rata-rata kota-kota lain di Indonesia.</span></span></p>', NULL, '15-31-10-blog_traffic_jam_1540.jpg', 8, NULL, '2019-01-10 00:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT 1,
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2018-09-28', 20, '1538152047'),
('::1', '2018-09-29', 96, '1538206039'),
('::1', '2018-10-01', 15, '1538377821'),
('::1', '2018-10-05', 1, '1538705827'),
('::1', '2018-11-01', 4, '1541040218'),
('::1', '2018-12-03', 37, '1543829077'),
('::1', '2018-12-04', 396, '1543916804'),
('::1', '2018-12-05', 99, '1544002186'),
('::1', '2018-12-06', 31, '1544083343'),
('::1', '2018-12-07', 44, '1544173097'),
('::1', '2018-12-08', 170, '1544256298'),
('::1', '2018-12-15', 66, '1544861074'),
('::1', '2018-12-17', 18, '1545029608'),
('36.81.87.3', '2018-12-17', 10, '1545042570'),
('65.154.226.109', '2018-12-17', 2, '1545037118'),
('115.178.253.179', '2018-12-17', 22, '1545043858'),
('66.249.73.28', '2018-12-18', 2, '1545077589'),
('66.249.73.27', '2018-12-18', 5, '1545142479'),
('148.62.14.156', '2018-12-18', 2, '1545086352'),
('13.92.226.151', '2018-12-18', 2, '1545089070'),
('66.249.73.25', '2018-12-18', 5, '1545141749'),
('221.229.218.152', '2018-12-18', 16, '1545085179'),
('66.249.65.105', '2018-12-18', 1, '1545088031'),
('36.81.87.3', '2018-12-18', 38, '1545125761'),
('66.249.73.26', '2018-12-18', 2, '1545141797'),
('66.249.73.29', '2018-12-18', 1, '1545119203'),
('70.42.131.170', '2018-12-18', 1, '1545149601'),
('66.249.73.26', '2018-12-19', 2, '1545203905'),
('66.249.65.105', '2018-12-19', 2, '1545206685'),
('66.249.73.25', '2018-12-19', 4, '1545208436'),
('66.249.73.27', '2018-12-19', 2, '1545188441'),
('221.229.218.152', '2018-12-19', 16, '1545189148'),
('115.178.255.114', '2018-12-19', 2, '1545225822'),
('183.240.196.122', '2018-12-19', 1, '1545232013'),
('66.249.73.25', '2018-12-20', 2, '1545294606'),
('66.249.73.27', '2018-12-20', 1, '1545242929'),
('115.178.255.149', '2018-12-20', 1, '1545270609'),
('36.81.87.3', '2018-12-20', 1, '1545280156'),
('103.59.156.16', '2018-12-20', 1, '1545280471'),
('115.178.252.77', '2018-12-20', 5, '1545303495'),
('66.249.73.26', '2018-12-20', 1, '1545320014'),
('66.249.73.29', '2018-12-20', 1, '1545324378'),
('66.249.73.28', '2018-12-20', 1, '1545324674'),
('66.249.65.119', '2018-12-21', 1, '1545327015'),
('66.249.73.25', '2018-12-21', 3, '1545399525'),
('66.249.73.26', '2018-12-21', 2, '1545384127'),
('66.249.73.27', '2018-12-21', 6, '1545398799'),
('66.249.73.29', '2018-12-21', 1, '1545365485'),
('66.249.73.28', '2018-12-21', 1, '1545367715'),
('66.249.65.105', '2018-12-21', 1, '1545399327'),
('54.36.162.215', '2018-12-21', 1, '1545404559'),
('158.69.59.220', '2018-12-21', 1, '1545404599'),
('66.249.79.244', '2018-12-22', 1, '1545411661'),
('66.249.79.239', '2018-12-22', 1, '1545469348'),
('167.114.55.125', '2018-12-23', 1, '1545513229'),
('51.38.83.145', '2018-12-23', 1, '1545538889'),
('54.154.55.63', '2018-12-23', 1, '1545569105'),
('183.240.196.122', '2018-12-23', 1, '1545578830'),
('116.203.43.167', '2018-12-24', 1, '1545584657'),
('66.249.65.105', '2018-12-24', 1, '1545586249'),
('75.149.221.170', '2018-12-24', 1, '1545613117'),
('66.249.73.27', '2018-12-24', 1, '1545624686'),
('51.38.237.212', '2018-12-24', 1, '1545669199'),
('183.240.196.124', '2018-12-25', 2, '1545751770'),
('51.38.128.181', '2018-12-25', 1, '1545754710'),
('104.227.246.106', '2018-12-26', 2, '1545765579'),
('66.249.73.29', '2018-12-26', 1, '1545804042'),
('51.77.140.39', '2018-12-26', 1, '1545841817'),
('66.249.65.105', '2018-12-27', 1, '1545845450'),
('66.249.73.27', '2018-12-27', 1, '1545883888'),
('51.77.140.39', '2018-12-27', 1, '1545929924'),
('40.76.21.228', '2018-12-28', 1, '1545931116'),
('66.249.73.28', '2018-12-28', 1, '1545955104'),
('51.38.83.145', '2018-12-29', 1, '1546020690'),
('40.76.21.228', '2018-12-29', 1, '1546022361'),
('218.241.108.76', '2018-12-29', 2, '1546045447'),
('5.9.60.220', '2018-12-29', 1, '1546067096'),
('66.249.65.107', '2018-12-30', 1, '1546104652'),
('51.38.237.212', '2018-12-30', 1, '1546112097'),
('149.56.108.201', '2018-12-31', 1, '1546203291'),
('66.249.73.25', '2018-12-31', 1, '1546237918'),
('183.66.230.22', '2019-01-01', 1, '1546285160'),
('66.249.73.27', '2019-01-01', 4, '1546360790'),
('51.38.237.212', '2019-01-01', 1, '1546294194'),
('216.145.11.94', '2019-01-01', 1, '1546301808'),
('66.249.73.29', '2019-01-01', 1, '1546303590'),
('66.249.73.26', '2019-01-01', 1, '1546318354'),
('66.249.73.25', '2019-01-01', 1, '1546346490'),
('66.249.73.26', '2019-01-02', 1, '1546363818'),
('51.38.237.212', '2019-01-02', 1, '1546364735'),
('66.249.73.28', '2019-01-02', 1, '1546372745'),
('66.249.73.27', '2019-01-02', 1, '1546373524'),
('34.213.155.165', '2019-01-02', 1, '1546435980'),
('66.249.73.29', '2019-01-02', 1, '1546441293'),
('206.225.83.83', '2019-01-03', 1, '1546454252'),
('51.38.99.239', '2019-01-03', 1, '1546459829'),
('40.76.21.228', '2019-01-03', 2, '1546497847'),
('66.249.65.105', '2019-01-04', 1, '1546535043'),
('158.69.59.220', '2019-01-04', 1, '1546553587'),
('128.199.241.231', '2019-01-04', 13, '1546570858'),
('115.178.254.17', '2019-01-04', 8, '1546601378'),
('128.199.238.125', '2019-01-04', 5, '1546584641'),
('54.77.251.94', '2019-01-04', 1, '1546612182'),
('158.69.59.220', '2019-01-05', 1, '1546644014'),
('114.116.157.68', '2019-01-05', 1, '1546677738'),
('42.236.10.92', '2019-01-05', 1, '1546681511'),
('42.236.10.106', '2019-01-05', 1, '1546681511'),
('180.163.220.68', '2019-01-05', 1, '1546681542'),
('180.163.220.66', '2019-01-05', 1, '1546681543'),
('115.178.254.131', '2019-01-05', 13, '1546703792'),
('54.162.35.112', '2019-01-06', 4, '1546716164'),
('115.178.254.137', '2019-01-06', 18, '1546758362'),
('115.178.236.101', '2019-01-06', 27, '1546763255'),
('66.249.73.27', '2019-01-06', 1, '1546776233'),
('70.42.131.170', '2019-01-06', 1, '1546784550'),
('142.93.69.252', '2019-01-06', 1, '1546792508'),
('115.178.253.63', '2019-01-07', 67, '1546855054'),
('180.254.93.121', '2019-01-07', 62, '1546848285'),
('115.178.238.180', '2019-01-07', 24, '1546863977'),
('66.102.6.112', '2019-01-08', 1, '1546903631'),
('115.178.238.180', '2019-01-08', 20, '1546945319'),
('66.249.79.235', '2019-01-08', 1, '1546927421'),
('37.235.48.145', '2019-01-08', 1, '1546937256'),
('115.178.238.57', '2019-01-08', 6, '1546950539'),
('66.102.6.108', '2019-01-09', 1, '1546997230'),
('115.178.250.226', '2019-01-09', 9, '1547002092'),
('115.178.255.140', '2019-01-09', 6, '1547003251'),
('103.44.37.100', '2019-01-09', 10, '1547018381'),
('115.178.255.160', '2019-01-09', 8, '1547043728'),
('115.178.255.160', '2019-01-10', 24, '1547112630'),
('64.233.173.45', '2019-01-10', 2, '1547089948'),
('64.233.173.41', '2019-01-10', 1, '1547087661'),
('114.142.168.31', '2019-01-10', 2, '1547088229'),
('180.246.173.15', '2019-01-10', 6, '1547090278'),
('182.1.121.104', '2019-01-10', 1, '1547089969'),
('140.213.47.105', '2019-01-10', 6, '1547090716'),
('115.178.235.211', '2019-01-10', 2, '1547090798'),
('141.0.12.6', '2019-01-10', 1, '1547090817'),
('202.67.46.249', '2019-01-10', 11, '1547096485'),
('180.251.237.79', '2019-01-10', 2, '1547098209'),
('180.254.98.206', '2019-01-10', 7, '1547110443'),
('40.77.167.44', '2019-01-10', 1, '1547110408'),
('64.233.173.43', '2019-01-10', 1, '1547113289'),
('180.254.96.75', '2019-01-10', 2, '1547113371'),
('115.178.237.237', '2019-01-10', 5, '1547120883'),
('66.249.73.25', '2019-01-10', 1, '1547135518'),
('115.178.237.237', '2019-01-11', 1, '1547156585'),
('115.178.251.24', '2019-01-11', 2, '1547180797'),
('66.249.73.29', '2019-01-12', 1, '1547261915'),
('180.254.96.75', '2019-01-12', 1, '1547263099'),
('66.249.65.105', '2019-01-13', 1, '1547347333'),
('103.44.37.102', '2019-01-13', 5, '1547376575'),
('62.165.226.33', '2019-01-13', 1, '1547378513'),
('66.249.73.29', '2019-01-14', 1, '1547411402'),
('66.249.65.107', '2019-01-14', 1, '1547412052'),
('115.178.250.235', '2019-01-14', 1, '1547435289'),
('66.249.73.27', '2019-01-14', 1, '1547462297'),
('66.249.73.26', '2019-01-14', 1, '1547462390'),
('66.249.73.25', '2019-01-14', 1, '1547470958'),
('180.246.172.157', '2019-01-15', 2, '1547516630'),
('66.249.65.109', '2019-01-15', 2, '1547534952'),
('66.249.73.25', '2019-01-15', 1, '1547544728'),
('66.249.73.27', '2019-01-15', 1, '1547546170'),
('66.249.73.29', '2019-01-16', 1, '1547574556'),
('66.249.73.28', '2019-01-16', 2, '1547614990'),
('66.249.65.109', '2019-01-16', 1, '1547621752'),
('66.249.73.26', '2019-01-16', 1, '1547636121'),
('66.249.73.25', '2019-01-17', 2, '1547679877'),
('66.249.73.27', '2019-01-17', 2, '1547720561'),
('66.249.73.28', '2019-01-18', 1, '1547748017'),
('66.249.65.105', '2019-01-18', 2, '1547786072'),
('66.249.73.29', '2019-01-18', 2, '1547807371'),
('115.178.238.204', '2019-01-18', 6, '1547802685'),
('84.236.87.249', '2019-01-18', 1, '1547807334'),
('31.13.115.7', '2019-01-18', 1, '1547807625'),
('115.178.238.183', '2019-01-19', 2, '1547888179'),
('66.249.79.242', '2019-01-19', 2, '1547899883'),
('173.252.95.7', '2019-01-19', 2, '1547881102'),
('173.252.87.9', '2019-01-19', 1, '1547881084'),
('173.252.87.8', '2019-01-19', 1, '1547881084'),
('69.171.251.13', '2019-01-19', 1, '1547881085'),
('69.171.251.16', '2019-01-19', 1, '1547881112'),
('69.171.251.4', '2019-01-19', 1, '1547881114'),
('66.220.149.4', '2019-01-19', 1, '1547881763'),
('173.252.87.14', '2019-01-19', 1, '1547881784'),
('115.178.251.87', '2019-01-19', 1, '1547886914'),
('66.220.149.19', '2019-01-19', 1, '1547886915'),
('66.249.79.237', '2019-01-19', 1, '1547896718'),
('202.169.239.170', '2019-01-19', 1, '1547908254'),
('66.249.79.244', '2019-01-19', 1, '1547910079'),
('66.249.79.239', '2019-01-20', 1, '1547917552'),
('66.249.79.246', '2019-01-20', 1, '1547920167'),
('115.178.252.182', '2019-01-20', 1, '1547928535'),
('114.124.198.78', '2019-01-20', 1, '1547939223'),
('114.125.79.194', '2019-01-20', 1, '1547942736'),
('120.188.83.244', '2019-01-20', 1, '1547944666'),
('180.246.145.219', '2019-01-20', 1, '1547945588'),
('3.88.206.204', '2019-01-20', 1, '1547952374'),
('178.164.146.91', '2019-01-20', 1, '1547952698'),
('120.188.72.13', '2019-01-20', 1, '1547963218'),
('140.213.59.7', '2019-01-20', 1, '1547965128'),
('114.142.168.41', '2019-01-20', 1, '1547973023'),
('114.4.214.67', '2019-01-20', 1, '1547973240'),
('66.249.73.25', '2019-01-20', 5, '1547989915'),
('115.178.238.96', '2019-01-20', 1, '1547979678'),
('104.247.135.70', '2019-01-20', 1, '1547984786'),
('36.73.64.25', '2019-01-20', 1, '1547991328'),
('66.249.73.27', '2019-01-21', 1, '1548022389'),
('66.249.65.105', '2019-01-21', 1, '1548023019'),
('66.249.73.28', '2019-01-21', 1, '1548023057'),
('120.188.76.226', '2019-01-21', 1, '1548024942'),
('66.249.65.109', '2019-01-21', 1, '1548026422'),
('114.142.168.57', '2019-01-21', 1, '1548031491'),
('103.108.87.10', '2019-01-21', 1, '1548035393'),
('114.4.221.182', '2019-01-21', 1, '1548035509'),
('64.246.178.34', '2019-01-21', 1, '1548035740'),
('120.188.86.31', '2019-01-21', 1, '1548044303'),
('140.213.35.16', '2019-01-21', 1, '1548045721'),
('114.142.171.5', '2019-01-21', 1, '1548061068'),
('36.81.78.204', '2019-01-21', 1, '1548066103'),
('114.4.221.80', '2019-01-21', 1, '1548067898'),
('182.0.230.82', '2019-01-21', 1, '1548077334'),
('35.185.184.96', '2019-01-21', 1, '1548078128'),
('116.206.15.52', '2019-01-21', 1, '1548078185'),
('66.249.73.26', '2019-01-21', 1, '1548082499'),
('182.1.97.76', '2019-01-22', 1, '1548090375'),
('140.213.39.121', '2019-01-22', 1, '1548095675'),
('36.73.78.165', '2019-01-22', 1, '1548110720'),
('66.249.79.244', '2019-01-22', 1, '1548112948'),
('36.73.108.211', '2019-01-22', 1, '1548120466'),
('171.67.70.42', '2019-01-22', 1, '1548123788'),
('171.67.70.38', '2019-01-22', 1, '1548124673'),
('36.81.46.30', '2019-01-22', 1, '1548125241'),
('120.188.66.151', '2019-01-22', 1, '1548128416'),
('182.1.82.94', '2019-01-22', 1, '1548129793'),
('171.67.70.59', '2019-01-22', 1, '1548131222'),
('125.163.210.35', '2019-01-22', 1, '1548133217'),
('112.215.244.89', '2019-01-22', 1, '1548139069'),
('126.188.83.28', '2019-01-22', 1, '1548143958'),
('115.178.234.243', '2019-01-22', 3, '1548151761'),
('66.249.79.235', '2019-01-22', 1, '1548153458'),
('36.72.212.74', '2019-01-22', 1, '1548153604'),
('120.188.66.101', '2019-01-22', 1, '1548158284'),
('202.67.40.23', '2019-01-22', 1, '1548165946'),
('182.1.64.205', '2019-01-22', 1, '1548167218'),
('182.1.80.89', '2019-01-22', 1, '1548175514'),
('185.89.218.233', '2019-01-23', 1, '1548178446'),
('185.89.218.237', '2019-01-23', 2, '1548178547'),
('112.215.170.250', '2019-01-23', 1, '1548197952'),
('115.178.234.243', '2019-01-23', 1, '1548206258'),
('114.125.164.112', '2019-01-23', 1, '1548207661'),
('36.81.16.246', '2019-01-23', 3, '1548210207'),
('114.124.173.129', '2019-01-23', 1, '1548211159'),
('112.215.242.78', '2019-01-23', 1, '1548221400'),
('114.125.127.163', '2019-01-23', 1, '1548231007'),
('114.125.111.15', '2019-01-23', 1, '1548231024'),
('114.142.169.45', '2019-01-23', 1, '1548232908'),
('66.249.73.28', '2019-01-23', 1, '1548238455'),
('36.80.236.225', '2019-01-23', 1, '1548241276'),
('182.0.167.95', '2019-01-23', 1, '1548243930'),
('36.81.80.129', '2019-01-23', 1, '1548246117'),
('182.0.198.141', '2019-01-23', 1, '1548250380'),
('138.197.152.92', '2019-01-24', 1, '1548274163'),
('66.249.73.27', '2019-01-24', 1, '1548281039'),
('66.249.65.109', '2019-01-24', 2, '1548310816'),
('171.67.70.47', '2019-01-24', 1, '1548281095'),
('111.68.25.33', '2019-01-24', 1, '1548286540'),
('139.162.72.149', '2019-01-24', 1, '1548288819'),
('171.67.70.56', '2019-01-24', 1, '1548289091'),
('180.254.82.6', '2019-01-24', 1, '1548290565'),
('120.188.36.212', '2019-01-24', 1, '1548298610'),
('36.72.214.170', '2019-01-24', 1, '1548306488'),
('54.183.118.84', '2019-01-24', 1, '1548315917'),
('66.249.73.26', '2019-01-24', 1, '1548343534'),
('66.249.73.25', '2019-01-25', 2, '1548384701'),
('66.249.73.26', '2019-01-25', 1, '1548350472'),
('66.249.73.27', '2019-01-25', 3, '1548410745'),
('180.246.192.187', '2019-01-25', 1, '1548406645'),
('66.249.73.29', '2019-01-25', 1, '1548412905'),
('66.249.73.25', '2019-01-26', 1, '1548448227'),
('66.249.73.26', '2019-01-26', 1, '1548476153'),
('66.249.73.28', '2019-01-26', 1, '1548481605'),
('66.249.73.1', '2019-01-26', 1, '1548506274'),
('66.249.65.109', '2019-01-26', 1, '1548506301'),
('54.197.219.136', '2019-01-27', 4, '1548527348'),
('66.249.73.29', '2019-01-27', 1, '1548552528'),
('54.162.120.176', '2019-01-27', 1, '1548585751'),
('5.9.60.220', '2019-01-27', 1, '1548598044'),
('66.249.65.107', '2019-01-28', 1, '1548671433'),
('66.249.79.246', '2019-01-29', 1, '1548707385'),
('66.249.79.237', '2019-01-29', 1, '1548723731'),
('64.233.173.41', '2019-01-29', 1, '1548729091'),
('114.124.166.78', '2019-01-29', 1, '1548729116'),
('66.249.79.242', '2019-01-29', 4, '1548733019'),
('207.46.13.6', '2019-01-29', 2, '1548742881'),
('207.46.13.12', '2019-01-29', 1, '1548742884'),
('207.46.13.10', '2019-01-29', 4, '1548742900'),
('66.249.79.244', '2019-01-30', 1, '1548781947'),
('66.249.79.239', '2019-01-30', 1, '1548795347'),
('207.46.13.138', '2019-01-30', 1, '1548797850'),
('66.249.79.235', '2019-01-30', 1, '1548802493'),
('66.249.79.242', '2019-01-30', 2, '1548847893'),
('66.249.79.181', '2019-01-30', 1, '1548807864'),
('64.233.173.48', '2019-01-30', 1, '1548821055'),
('36.72.216.93', '2019-01-30', 4, '1548821588'),
('66.249.79.239', '2019-01-31', 1, '1548867964'),
('66.249.79.246', '2019-01-31', 1, '1548874847'),
('66.249.79.244', '2019-01-31', 1, '1548910636'),
('66.249.79.183', '2019-01-31', 1, '1548914241'),
('92.249.191.31', '2019-01-31', 1, '1548936097'),
('167.99.50.79', '2019-02-01', 1, '1548959922'),
('180.254.62.175', '2019-02-01', 1, '1548991889'),
('171.67.70.37', '2019-02-01', 1, '1548994879'),
('64.233.173.46', '2019-02-02', 1, '1549068606'),
('114.142.168.43', '2019-02-02', 3, '1549068673'),
('114.142.168.1', '2019-02-02', 3, '1549068807'),
('64.233.173.48', '2019-02-02', 2, '1549068839'),
('171.67.70.38', '2019-02-02', 1, '1549074182'),
('171.67.70.42', '2019-02-02', 1, '1549074316'),
('66.249.73.27', '2019-02-02', 3, '1549100496'),
('66.249.65.107', '2019-02-02', 1, '1549111641'),
('66.249.73.26', '2019-02-03', 1, '1549127434'),
('114.142.170.4', '2019-02-03', 1, '1549148662'),
('66.249.79.244', '2019-02-03', 3, '1549212878'),
('66.249.79.183', '2019-02-03', 1, '1549159463'),
('157.55.39.230', '2019-02-03', 1, '1549165126'),
('66.249.79.235', '2019-02-03', 1, '1549184425'),
('66.249.79.181', '2019-02-03', 1, '1549188011'),
('66.249.79.239', '2019-02-03', 1, '1549193366'),
('209.97.134.190', '2019-02-03', 1, '1549199786'),
('66.249.79.181', '2019-02-04', 1, '1549216615'),
('159.65.27.112', '2019-02-04', 2, '1549224622'),
('66.249.79.237', '2019-02-04', 1, '1549246164'),
('66.249.79.183', '2019-02-04', 1, '1549253506'),
('66.249.79.235', '2019-02-04', 1, '1549253579'),
('66.249.79.242', '2019-02-04', 1, '1549269088'),
('165.227.125.79', '2019-02-05', 1, '1549327825'),
('66.249.79.237', '2019-02-05', 1, '1549358351'),
('51.15.53.83', '2019-02-05', 1, '1549381259'),
('185.104.120.5', '2019-02-05', 2, '1549381552'),
('38.130.184.124', '2019-02-06', 1, '1549387985'),
('38.130.172.176', '2019-02-06', 1, '1549388006'),
('104.222.45.36', '2019-02-06', 1, '1549388351'),
('173.252.87.19', '2019-02-06', 1, '1549443266'),
('199.249.230.70', '2019-02-06', 1, '1549452552'),
('109.70.100.25', '2019-02-06', 1, '1549452580'),
('85.248.227.163', '2019-02-06', 2, '1549452815'),
('199.249.230.67', '2019-02-06', 1, '1549452788'),
('199.249.230.86', '2019-02-06', 1, '1549452983'),
('85.202.163.127', '2019-02-06', 1, '1549462675'),
('199.249.230.84', '2019-02-07', 1, '1549532207'),
('199.249.230.69', '2019-02-07', 1, '1549532395'),
('207.244.70.35', '2019-02-07', 1, '1549532462'),
('178.17.171.55', '2019-02-07', 1, '1549532949'),
('66.249.65.109', '2019-02-07', 1, '1549552868'),
('66.249.73.28', '2019-02-07', 2, '1549555155'),
('66.249.73.1', '2019-02-07', 2, '1549555341'),
('66.249.65.105', '2019-02-07', 1, '1549557117'),
('66.249.73.27', '2019-02-08', 2, '1549578186'),
('66.249.73.25', '2019-02-08', 2, '1549592439'),
('66.249.73.28', '2019-02-08', 2, '1549592428'),
('66.249.73.26', '2019-02-08', 1, '1549592437'),
('66.249.65.107', '2019-02-08', 1, '1549592453'),
('157.55.39.73', '2019-02-08', 2, '1549592937'),
('207.46.13.58', '2019-02-08', 4, '1549592943'),
('40.77.167.80', '2019-02-08', 1, '1549592977'),
('207.46.13.160', '2019-02-08', 1, '1549625377'),
('82.145.222.240', '2019-02-09', 3, '1549690826'),
('66.249.73.25', '2019-02-09', 1, '1549696054'),
('66.249.73.28', '2019-02-09', 1, '1549699064'),
('66.249.65.105', '2019-02-09', 1, '1549709196'),
('66.249.73.27', '2019-02-09', 2, '1549723254'),
('66.249.65.107', '2019-02-09', 1, '1549723797'),
('109.70.100.19', '2019-02-10', 1, '1549734039'),
('78.41.115.145', '2019-02-10', 1, '1549734052'),
('199.249.230.89', '2019-02-10', 1, '1549734136'),
('66.249.73.27', '2019-02-10', 1, '1549734810'),
('66.249.65.105', '2019-02-10', 1, '1549765061'),
('64.246.187.42', '2019-02-10', 1, '1549791096'),
('66.249.73.27', '2019-02-11', 2, '1549859085'),
('103.44.37.172', '2019-02-11', 4, '1549857434'),
('66.249.73.25', '2019-02-11', 2, '1549858886'),
('115.178.235.105', '2019-02-11', 4, '1549898528'),
('207.46.13.189', '2019-02-11', 1, '1549870321'),
('207.46.13.212', '2019-02-11', 1, '1549880289'),
('114.142.169.51', '2019-02-11', 4, '1549898236'),
('31.13.127.2', '2019-02-12', 1, '1549941999'),
('31.13.127.11', '2019-02-12', 1, '1549942003'),
('31.13.115.15', '2019-02-12', 1, '1549942024'),
('141.0.13.100', '2019-02-12', 1, '1549942305'),
('45.32.245.64', '2019-02-12', 3, '1549949379'),
('66.249.73.26', '2019-02-13', 2, '1550007356'),
('89.147.68.29', '2019-02-13', 1, '1550014855'),
('66.249.73.27', '2019-02-13', 3, '1550037741'),
('180.254.63.65', '2019-02-13', 1, '1550038390'),
('66.249.73.28', '2019-02-13', 1, '1550038642'),
('91.210.145.183', '2019-02-13', 1, '1550057427'),
('66.249.73.29', '2019-02-15', 1, '1550191786'),
('207.46.13.59', '2019-02-15', 1, '1550197964'),
('66.249.65.107', '2019-02-15', 1, '1550213953'),
('191.102.150.121', '2019-02-16', 1, '1550259867'),
('66.249.65.109', '2019-02-16', 1, '1550265605'),
('66.249.65.107', '2019-02-16', 2, '1550309812'),
('109.70.100.24', '2019-02-16', 1, '1550279898'),
('144.217.164.104', '2019-02-16', 1, '1550279909'),
('185.36.75.108', '2019-02-16', 1, '1550279970'),
('185.104.120.7', '2019-02-16', 1, '1550279994'),
('192.160.102.168', '2019-02-16', 1, '1550280093'),
('199.249.223.76', '2019-02-16', 1, '1550280181'),
('180.163.220.66', '2019-02-16', 1, '1550283490'),
('42.236.10.78', '2019-02-16', 1, '1550283521'),
('66.249.73.27', '2019-02-16', 3, '1550331479'),
('66.249.73.25', '2019-02-16', 2, '1550330546'),
('64.233.173.45', '2019-02-16', 1, '1550303817'),
('36.72.214.212', '2019-02-16', 2, '1550303986'),
('182.0.234.68', '2019-02-16', 1, '1550304079'),
('182.0.212.22', '2019-02-16', 1, '1550304082'),
('36.81.15.23', '2019-02-16', 1, '1550309008'),
('66.249.65.105', '2019-02-17', 2, '1550362133'),
('178.164.146.45', '2019-02-17', 1, '1550374729'),
('66.249.73.27', '2019-02-17', 4, '1550414664'),
('66.249.73.25', '2019-02-17', 1, '1550414516'),
('66.249.65.105', '2019-02-18', 1, '1550449034'),
('66.249.65.107', '2019-02-18', 1, '1550449295'),
('66.249.73.29', '2019-02-18', 1, '1550469925'),
('66.249.73.25', '2019-02-18', 1, '1550472595'),
('66.249.65.181', '2019-02-18', 1, '1550507578'),
('66.249.65.115', '2019-02-19', 1, '1550539879'),
('115.178.253.141', '2019-02-19', 9, '1550572201'),
('66.249.73.29', '2019-02-19', 1, '1550559289'),
('66.249.65.107', '2019-02-19', 2, '1550581239'),
('66.249.73.27', '2019-02-19', 1, '1550566618'),
('66.249.73.26', '2019-02-19', 1, '1550590361'),
('66.249.73.27', '2019-02-20', 1, '1550608964'),
('66.249.73.21', '2019-02-20', 1, '1550621851'),
('88.198.27.52', '2019-02-20', 1, '1550648021'),
('66.249.73.28', '2019-02-20', 1, '1550680373'),
('66.249.73.28', '2019-02-21', 1, '1550720061'),
('66.249.73.19', '2019-02-21', 2, '1550741723'),
('66.249.65.105', '2019-02-21', 2, '1550740044'),
('66.249.73.27', '2019-02-21', 1, '1550739907'),
('66.249.65.156', '2019-02-21', 1, '1550753941'),
('66.249.65.120', '2019-02-21', 1, '1550763549'),
('88.198.27.52', '2019-02-22', 2, '1550835081'),
('66.249.65.99', '2019-02-22', 2, '1550774109'),
('66.249.73.29', '2019-02-22', 1, '1550774172'),
('66.249.73.28', '2019-02-22', 1, '1550785897'),
('66.249.73.23', '2019-02-22', 1, '1550786929'),
('66.249.65.116', '2019-02-22', 1, '1550798149'),
('149.202.86.127', '2019-02-22', 1, '1550852472'),
('50.97.77.189', '2019-02-23', 1, '1550915372'),
('66.249.73.21', '2019-02-23', 1, '1550924109'),
('66.249.65.99', '2019-02-24', 1, '1550983572'),
('62.210.111.66', '2019-02-24', 1, '1550985023'),
('66.249.65.105', '2019-02-24', 1, '1550985393'),
('66.249.73.29', '2019-02-24', 1, '1550985399'),
('75.149.221.170', '2019-02-24', 1, '1550995885'),
('31.13.115.3', '2019-02-24', 1, '1551001750'),
('66.249.73.28', '2019-02-24', 1, '1551006371'),
('66.249.73.23', '2019-02-24', 1, '1551007721'),
('66.249.73.19', '2019-02-24', 1, '1551011841'),
('3.93.17.95', '2019-02-25', 1, '1551028672'),
('92.249.191.167', '2019-02-25', 1, '1551037949'),
('66.249.65.103', '2019-02-25', 3, '1551096077'),
('66.249.73.19', '2019-02-25', 1, '1551055664'),
('66.249.73.27', '2019-02-25', 1, '1551057965'),
('66.249.73.28', '2019-02-25', 1, '1551081501'),
('66.249.73.29', '2019-02-25', 1, '1551093533'),
('66.249.73.23', '2019-02-25', 2, '1551097881'),
('66.249.65.105', '2019-02-25', 1, '1551096071'),
('66.249.73.29', '2019-02-26', 2, '1551133896'),
('66.249.73.28', '2019-02-26', 1, '1551165650'),
('66.249.73.23', '2019-02-26', 1, '1551168036'),
('66.249.65.103', '2019-02-27', 1, '1551208550'),
('66.249.73.23', '2019-02-27', 1, '1551208561'),
('66.249.73.21', '2019-02-27', 2, '1551260580'),
('66.249.73.29', '2019-02-27', 3, '1551272198'),
('185.249.197.229', '2019-02-27', 1, '1551229344'),
('66.249.65.99', '2019-02-27', 1, '1551257591'),
('64.233.173.41', '2019-02-27', 1, '1551258895'),
('140.213.38.165', '2019-02-27', 1, '1551258909'),
('66.249.73.19', '2019-02-27', 1, '1551262706'),
('54.185.153.36', '2019-02-27', 1, '1551271959'),
('34.216.195.88', '2019-02-27', 1, '1551271959'),
('92.249.191.167', '2019-02-27', 1, '1551281782'),
('66.249.73.29', '2019-02-28', 2, '1551354893'),
('66.249.73.21', '2019-02-28', 2, '1551331621'),
('173.193.191.205', '2019-02-28', 1, '1551310350'),
('66.249.65.103', '2019-02-28', 2, '1551328812'),
('118.96.161.242', '2019-02-28', 13, '1551322182'),
('66.249.73.23', '2019-02-28', 1, '1551337316'),
('54.202.178.130', '2019-02-28', 1, '1551339245'),
('54.149.81.180', '2019-02-28', 1, '1551339253'),
('66.249.73.28', '2019-02-28', 1, '1551345884'),
('140.213.29.166', '2019-02-28', 1, '1551366576'),
('66.249.73.29', '2019-03-01', 2, '1551459317'),
('66.249.65.99', '2019-03-01', 2, '1551417417'),
('66.249.73.19', '2019-03-01', 1, '1551421690'),
('66.249.73.28', '2019-03-01', 1, '1551427776'),
('35.162.222.221', '2019-03-01', 1, '1551432626'),
('34.222.128.134', '2019-03-01', 1, '1551432626'),
('180.246.185.131', '2019-03-01', 9, '1551433138'),
('66.249.73.21', '2019-03-01', 1, '1551443580'),
('66.249.73.27', '2019-03-02', 2, '1551482457'),
('159.89.45.92', '2019-03-02', 1, '1551477918'),
('115.178.219.78', '2019-03-02', 4, '1551483955'),
('36.90.30.47', '2019-03-02', 1, '1551485392'),
('46.105.92.122', '2019-03-02', 1, '1551489539'),
('66.249.73.29', '2019-03-02', 1, '1551494978'),
('34.216.239.253', '2019-03-02', 1, '1551511974'),
('112.78.39.122', '2019-03-02', 1, '1551541756'),
('3.1.49.205', '2019-03-03', 1, '1551594774'),
('34.211.25.210', '2019-03-03', 1, '1551600884'),
('34.218.45.81', '2019-03-03', 1, '1551600885'),
('64.246.165.170', '2019-03-03', 1, '1551602950'),
('173.193.191.205', '2019-03-03', 1, '1551603320'),
('66.249.73.27', '2019-03-03', 1, '1551619171'),
('66.249.73.28', '2019-03-04', 2, '1551699814'),
('66.249.73.23', '2019-03-04', 2, '1551695832'),
('66.249.65.99', '2019-03-04', 1, '1551656965'),
('66.249.65.103', '2019-03-04', 1, '1551667396'),
('18.236.125.98', '2019-03-04', 1, '1551682350'),
('34.217.97.249', '2019-03-04', 1, '1551682354'),
('66.249.73.21', '2019-03-04', 1, '1551689542'),
('66.249.73.29', '2019-03-04', 1, '1551698923'),
('142.93.178.236', '2019-03-05', 1, '1551753704'),
('66.220.149.26', '2019-03-05', 1, '1551760186'),
('66.249.65.99', '2019-03-05', 1, '1551761953'),
('66.249.65.105', '2019-03-05', 2, '1551799810'),
('112.215.235.113', '2019-03-05', 1, '1551766216'),
('66.220.149.37', '2019-03-05', 1, '1551772538'),
('180.246.185.131', '2019-03-05', 1, '1551774294'),
('199.30.231.1', '2019-03-05', 1, '1551774323'),
('66.102.6.118', '2019-03-05', 1, '1551774325'),
('66.249.73.23', '2019-03-05', 1, '1551774460'),
('66.249.73.19', '2019-03-05', 1, '1551779920'),
('66.249.73.29', '2019-03-05', 1, '1551779922'),
('66.249.73.27', '2019-03-05', 1, '1551779929'),
('36.73.120.138', '2019-03-05', 4, '1551794089'),
('134.209.32.58', '2019-03-05', 1, '1551798297'),
('66.249.73.28', '2019-03-06', 2, '1551836065'),
('66.249.73.29', '2019-03-06', 1, '1551815886'),
('66.249.73.21', '2019-03-06', 2, '1551841190'),
('66.220.149.7', '2019-03-06', 1, '1551837905'),
('66.249.65.103', '2019-03-06', 1, '1551840704'),
('66.220.149.14', '2019-03-06', 1, '1551840748'),
('31.13.115.14', '2019-03-06', 1, '1551840758'),
('66.249.65.105', '2019-03-06', 1, '1551843747'),
('66.220.149.13', '2019-03-06', 1, '1551852174'),
('18.237.46.79', '2019-03-06', 1, '1551856027'),
('66.220.149.30', '2019-03-06', 1, '1551872650'),
('149.202.86.127', '2019-03-06', 1, '1551876932'),
('120.188.77.65', '2019-03-06', 1, '1551880569'),
('173.252.87.1', '2019-03-06', 1, '1551880648'),
('173.252.127.28', '2019-03-06', 1, '1551880860'),
('114.142.169.49', '2019-03-07', 1, '1551915259'),
('54.189.183.202', '2019-03-07', 1, '1551915653'),
('125.163.238.241', '2019-03-07', 2, '1551933036'),
('36.80.240.28', '2019-03-07', 7, '1551940484'),
('66.220.149.34', '2019-03-07', 1, '1551940397'),
('34.215.182.214', '2019-03-07', 1, '1551944946'),
('54.194.169.37', '2019-03-07', 1, '1551976553'),
('34.253.175.254', '2019-03-08', 1, '1551987009'),
('34.214.70.91', '2019-03-08', 1, '1552037386'),
('91.210.147.64', '2019-03-08', 1, '1552059370'),
('66.249.73.29', '2019-03-09', 2, '1552103432'),
('66.249.73.23', '2019-03-09', 1, '1552104742'),
('66.249.65.105', '2019-03-09', 2, '1552106647'),
('66.249.73.27', '2019-03-09', 1, '1552106964'),
('51.68.174.112', '2019-03-09', 1, '1552107039'),
('46.166.139.35', '2019-03-09', 1, '1552107444'),
('185.104.120.2', '2019-03-09', 1, '1552107596'),
('199.249.230.67', '2019-03-09', 1, '1552108175'),
('213.61.215.54', '2019-03-09', 1, '1552108299'),
('171.25.193.78', '2019-03-09', 1, '1552108951'),
('66.249.73.21', '2019-03-09', 1, '1552109122'),
('115.178.251.122', '2019-03-09', 3, '1552128045'),
('66.249.73.19', '2019-03-09', 1, '1552138291'),
('66.249.73.28', '2019-03-09', 1, '1552139997'),
('103.44.37.141', '2019-03-09', 2, '1552140303'),
('192.241.98.234', '2019-03-10', 2, '1552158768'),
('66.249.65.103', '2019-03-10', 2, '1552179017'),
('66.249.73.28', '2019-03-10', 2, '1552199201'),
('66.249.73.21', '2019-03-10', 1, '1552182569'),
('66.249.73.19', '2019-03-10', 1, '1552182594'),
('115.178.238.225', '2019-03-10', 1, '1552199408'),
('66.249.73.27', '2019-03-10', 2, '1552207776'),
('66.249.73.29', '2019-03-10', 2, '1552208449'),
('34.219.81.172', '2019-03-10', 1, '1552211347'),
('66.220.149.34', '2019-03-10', 1, '1552212124'),
('36.73.115.100', '2019-03-10', 1, '1552219168'),
('34.245.77.102', '2019-03-11', 1, '1552256930'),
('66.249.73.27', '2019-03-11', 1, '1552257924'),
('54.68.172.171', '2019-03-11', 1, '1552261377'),
('185.249.197.229', '2019-03-11', 1, '1552262827'),
('66.249.73.21', '2019-03-11', 1, '1552275446'),
('34.221.28.78', '2019-03-11', 1, '1552290629'),
('66.249.73.29', '2019-03-12', 2, '1552344667'),
('66.220.149.9', '2019-03-12', 1, '1552363192'),
('54.201.223.16', '2019-03-12', 1, '1552375490'),
('34.73.236.160', '2019-03-12', 1, '1552409511'),
('52.34.81.72', '2019-03-13', 1, '1552471128'),
('34.219.15.207', '2019-03-13', 1, '1552471128'),
('66.249.65.103', '2019-03-13', 1, '1552493659'),
('66.249.73.19', '2019-03-14', 1, '1552501924'),
('66.220.149.4', '2019-03-14', 1, '1552524188'),
('66.249.73.23', '2019-03-14', 1, '1552528769'),
('115.178.255.198', '2019-03-14', 11, '1552536634'),
('69.171.251.11', '2019-03-14', 1, '1552534114'),
('128.199.254.26', '2019-03-14', 3, '1552538356'),
('66.249.65.99', '2019-03-14', 1, '1552545081'),
('182.0.228.194', '2019-03-14', 1, '1552547411'),
('182.0.244.210', '2019-03-14', 1, '1552547457'),
('120.188.74.44', '2019-03-14', 1, '1552549034'),
('115.178.234.114', '2019-03-14', 1, '1552551997'),
('103.54.134.242', '2019-03-14', 15, '1552554206'),
('35.167.17.131', '2019-03-14', 1, '1552563779'),
('54.185.86.202', '2019-03-14', 1, '1552563780'),
('66.249.73.29', '2019-03-14', 1, '1552576748'),
('116.206.40.18', '2019-03-14', 1, '1552578220'),
('66.249.73.28', '2019-03-14', 1, '1552580578'),
('36.81.54.130', '2019-03-15', 3, '1552599420'),
('66.249.64.123', '2019-03-15', 1, '1552620670'),
('66.249.73.21', '2019-03-15', 1, '1552625105'),
('114.4.221.249', '2019-03-15', 2, '1552648766'),
('66.249.73.27', '2019-03-15', 1, '1552649369'),
('54.244.48.8', '2019-03-15', 1, '1552652684'),
('178.128.229.48', '2019-03-15', 1, '1552662505'),
('120.188.72.207', '2019-03-16', 1, '1552695028'),
('180.246.194.232', '2019-03-16', 5, '1552722793'),
('115.178.253.20', '2019-03-16', 1, '1552708603'),
('36.77.153.102', '2019-03-16', 2, '1552720467'),
('66.220.149.35', '2019-03-16', 1, '1552720704'),
('115.178.236.245', '2019-03-16', 7, '1552734010'),
('115.178.250.113', '2019-03-16', 1, '1552733439'),
('69.171.251.10', '2019-03-16', 1, '1552733474'),
('64.233.173.35', '2019-03-16', 1, '1552733957'),
('66.249.73.27', '2019-03-16', 3, '1552743437'),
('66.249.73.28', '2019-03-16', 1, '1552743430'),
('36.84.0.62', '2019-03-16', 3, '1552746792'),
('66.249.73.23', '2019-03-17', 1, '1552762717'),
('66.249.73.27', '2019-03-17', 1, '1552788139'),
('112.215.236.205', '2019-03-17', 7, '1552788536'),
('182.0.164.76', '2019-03-17', 1, '1552833085'),
('182.0.176.32', '2019-03-17', 3, '1552833202'),
('66.249.73.28', '2019-03-18', 1, '1552853498'),
('66.249.73.29', '2019-03-18', 2, '1552893086'),
('140.213.5.209', '2019-03-18', 1, '1552867134'),
('34.222.214.106', '2019-03-18', 1, '1552903172'),
('63.35.179.97', '2019-03-18', 1, '1552922456'),
('114.4.219.89', '2019-03-18', 3, '1552924636'),
('64.233.173.41', '2019-03-19', 1, '1552967984'),
('112.215.241.101', '2019-03-19', 5, '1552974308'),
('66.220.149.32', '2019-03-20', 1, '1553047822'),
('114.125.110.156', '2019-03-20', 2, '1553050532'),
('182.1.105.35', '2019-03-20', 2, '1553050572'),
('115.178.238.125', '2019-03-20', 1, '1553066322'),
('31.13.115.1', '2019-03-20', 1, '1553083499'),
('52.26.180.242', '2019-03-20', 1, '1553089454'),
('54.213.51.160', '2019-03-20', 1, '1553089454'),
('66.249.73.19', '2019-03-21', 1, '1553112314'),
('66.249.65.99', '2019-03-21', 2, '1553141786'),
('66.249.73.23', '2019-03-21', 1, '1553139076'),
('120.188.77.169', '2019-03-21', 1, '1553165194'),
('35.160.188.42', '2019-03-21', 1, '1553171991'),
('34.215.16.222', '2019-03-21', 1, '1553171994'),
('115.178.254.21', '2019-03-21', 2, '1553172369'),
('182.0.179.111', '2019-03-21', 1, '1553172499'),
('36.80.239.105', '2019-03-21', 16, '1553182360'),
('64.233.173.41', '2019-03-21', 3, '1553179332'),
('64.233.173.35', '2019-03-21', 1, '1553179343'),
('64.233.173.39', '2019-03-21', 2, '1553182467'),
('149.202.86.127', '2019-03-22', 1, '1553188020'),
('182.0.147.23', '2019-03-22', 1, '1553192091'),
('66.249.73.29', '2019-03-22', 1, '1553198352'),
('66.249.65.103', '2019-03-22', 1, '1553203165'),
('115.178.252.200', '2019-03-22', 6, '1553212029'),
('36.73.99.193', '2019-03-22', 60, '1553227882'),
('64.233.173.35', '2019-03-22', 7, '1553226528'),
('64.233.173.41', '2019-03-22', 4, '1553224642'),
('128.199.207.123', '2019-03-22', 24, '1553236427'),
('64.233.173.39', '2019-03-22', 1, '1553226692'),
('36.81.89.117', '2019-03-22', 2, '1553239917'),
('66.249.65.113', '2019-03-22', 2, '1553256835'),
('115.178.255.154', '2019-03-22', 1, '1553255788'),
('66.249.65.111', '2019-03-23', 4, '1553349282'),
('66.249.65.113', '2019-03-23', 5, '1553349229'),
('66.249.73.28', '2019-03-23', 1, '1553310637'),
('66.249.73.27', '2019-03-23', 1, '1553329160'),
('115.178.238.134', '2019-03-23', 1, '1553335387'),
('182.0.230.238', '2019-03-23', 6, '1553347667'),
('66.249.65.115', '2019-03-24', 1, '1553370560'),
('66.249.73.28', '2019-03-24', 1, '1553382784'),
('66.249.65.111', '2019-03-24', 4, '1553430272'),
('66.249.65.113', '2019-03-24', 1, '1553427102'),
('64.246.187.42', '2019-03-24', 1, '1553438724'),
('66.249.73.28', '2019-03-25', 3, '1553502818'),
('66.249.65.113', '2019-03-25', 1, '1553459541'),
('66.249.73.27', '2019-03-25', 2, '1553460248'),
('66.249.73.29', '2019-03-25', 2, '1553511953'),
('185.32.222.118', '2019-03-25', 1, '1553462649'),
('66.249.65.115', '2019-03-25', 2, '1553507756'),
('66.249.65.111', '2019-03-25', 1, '1553484473'),
('115.178.255.75', '2019-03-25', 13, '1553507573'),
('34.220.107.194', '2019-03-25', 1, '1553528677'),
('173.252.127.21', '2019-03-26', 1, '1553535819'),
('66.249.65.115', '2019-03-26', 2, '1553555763'),
('66.249.73.27', '2019-03-26', 2, '1553563177'),
('115.178.238.134', '2019-03-26', 1, '1553565275'),
('128.199.99.114', '2019-03-26', 1, '1553567441'),
('114.124.200.94', '2019-03-26', 1, '1553569529');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(256) DEFAULT NULL,
  `users_password` varchar(256) DEFAULT NULL,
  `users_contents` text DEFAULT NULL,
  `users_level` varchar(32) DEFAULT NULL,
  `users_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_password`, `users_contents`, `users_level`, `users_timestamp`) VALUES
(1, 'admin@yb.com', 'a6a43e7ce2b25f1167bdf4c114569378', NULL, NULL, '2019-01-04 11:07:47'),
(2, 'sinur@admin.com', '74eeb5ec0ca42aa2085685d886120eac', NULL, NULL, '2019-01-07 02:43:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`options_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `options_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
