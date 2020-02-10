-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2020 at 09:49 AM
-- Server version: 10.2.29-MariaDB
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
-- Database: `u7751567_webideadigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `delete` enum('0','1') DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category`, `delete`, `created_at`, `update_at`) VALUES
(9, 'Bitcoin', '0', '2019-07-17 09:43:19', '2019-07-17 09:43:36'),
(10, 'Indonesia', '0', '2019-07-17 09:45:19', NULL),
(11, 'IDea', '0', '2019-07-17 09:45:41', NULL),
(12, 'Project 2019', '0', '2019-07-18 02:24:08', '2019-07-18 02:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id_groups` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id_groups`, `name`, `description`) VALUES
(8, 'superadmin', 'superadmin'),
(12, 'Operator', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `groups_menus`
--

CREATE TABLE `groups_menus` (
  `id` int(11) NOT NULL,
  `id_groups` int(11) NOT NULL,
  `id_menus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `groups_menus`
--

INSERT INTO `groups_menus` (`id`, `id_groups`, `id_menus`) VALUES
(102, 12, 1),
(339, 8, 1),
(340, 8, 20),
(341, 8, 21),
(342, 8, 23),
(343, 8, 28),
(344, 8, 29),
(345, 8, 33),
(346, 8, 32),
(347, 8, 31),
(348, 8, 10),
(349, 8, 11),
(350, 8, 22),
(351, 8, 15),
(352, 8, 30),
(353, 8, 8),
(354, 8, 18);

-- --------------------------------------------------------

--
-- Table structure for table `media_foto`
--

CREATE TABLE `media_foto` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `media_foto`
--

INSERT INTO `media_foto` (`id`, `image_name`, `image`, `description`, `created_at`, `update_at`) VALUES
(3, 'Seminar Digital Asset dan Cryptocurrency (2018)', '03102019105148_img-20180217-wa_media_foto.jpg', '', '2019-10-03 10:52:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media_video`
--

CREATE TABLE `media_video` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `media_video`
--

INSERT INTO `media_video` (`id`, `judul`, `slug`, `url`, `keterangan`, `created_at`, `update_at`) VALUES
(4, 'IDEA DIGITAL INDONESIA', 'idea-digital-indonesia', 'https://www.youtube.com/watch?v=IJjXl2-d4Sg', '', '2019-09-20 05:43:39', '2019-09-13 10:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `is_parent` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `url`, `icon`, `description`, `is_parent`, `sort`, `is_active`) VALUES
(1, 'Home', 'home', 'fa fa-home', 'Home', 0, 1, 1),
(2, 'settings', 'pengaturan', 'fa fa-cogs', 'settings', 0, 16, 1),
(8, 'Manajemen Menu', 'menus', 'fa fa-file-text-o', 'Manajemen Menu', 2, 19, 1),
(9, 'Admin', '#', 'fa fa-users', 'Admin', 0, 12, 1),
(10, 'admin', 'users', 'fa fa-circle', 'admin', 9, 13, 1),
(11, 'Groups', 'groups', 'fa fa-circle', 'Groups', 9, 14, 1),
(15, 'Settings', 'pengaturan', 'fa fa-circle', 'Settings', 2, 17, 1),
(18, 'crud generator', 'mpampam-crud', 'fa fa-file-code-o', 'crud generator', 0, 20, 0),
(19, 'Article', 'news', 'fa fa-file-text-o', 'Article', 0, 2, 1),
(20, 'Post', 'news', 'fa fa-circle', 'Post', 19, 3, 1),
(21, 'Category', 'category', 'fa fa-circle', 'Category', 19, 4, 1),
(22, 'file manager', 'file_manager', 'fa fa-window-restore', 'file manager', 0, 15, 0),
(23, 'Pages', 'page', 'fa fa-newspaper-o', 'Pages', 0, 5, 1),
(27, 'Media', '#', 'fa fa-file-photo-o', 'Media', 0, 6, 1),
(28, 'Photos', 'Media_foto', 'fa fa-circle', 'Photos', 27, 7, 1),
(29, 'Videos', 'media_video', 'fa fa-circle', 'Videos', 27, 8, 1),
(30, 'Managament Menu', 'menu_public', 'fa fa-navicon', 'Managament Menu', 2, 18, 1),
(31, 'Contact', '#', 'fa fa-envelope-o', 'Contact', 0, 11, 1),
(32, 'Testimonial', '#', 'fa fa-podcast', 'Testimonial', 0, 10, 1),
(33, 'Team', 'Team', 'fa fa-handshake-o', 'Team', 0, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_public`
--

CREATE TABLE `menu_public` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(150) NOT NULL,
  `is_parent` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `menu_public`
--

INSERT INTO `menu_public` (`id`, `name`, `url`, `description`, `type`, `is_parent`, `is_active`, `sort`) VALUES
(4, 'Home', 'home', 'Home', '', 0, 1, 1),
(5, 'Article', 'news', 'Article', '', 0, 1, 3),
(7, 'Galery', '#', 'Galery', '', 0, 1, 4),
(8, 'Photos', 'photos', 'Photos', '', 7, 1, 5),
(9, 'Videos', 'video', 'Videos', '', 7, 1, 6),
(10, 'About', 'page/about', 'About', '', 0, 1, 2),
(12, 'Contact Us', 'contact', 'Contact Us', '', 0, 1, 9),
(13, 'Team', 'page/team', 'Team', '', 0, 1, 8),
(15, 'Project', 'page/project', 'Project', '', 0, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL,
  `delete` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`, `delete`) VALUES
(1, 'nol satu satu', 'muhfadhilfauzan030195@gmail.com', 'general', 'ss', '0'),
(2, 'nol satu satu', 'muhfadhilfauzan030195@gmail.com', 'general', 'ss', '0'),
(3, 'aco', 'muhfadhilfauzan030195@gmail.com', 'support', 'hgj,h', '0'),
(4, 'ade', 'andikakuswidyawan@gmail.com', 'partnership', 'vrt', '0'),
(5, 'ade', 'andikakuswidyawan@gmail.com', 'partnership', 'vrt', '0'),
(6, 'nol satu satu', 'andikakuswidyawan@gmail.com', 'partnership', 'jd', '0'),
(7, 'Andi', 'muhfadhilfauzan030195@gmail.com', 'partnership', 'xxxx', '0'),
(8, '', 'muhfadhilfauzan030195', 'general', '', '0'),
(9, 'Andi', 'fasayaa@yahoo.com', 'partnership', 'ssd', '0'),
(10, 'Andi', 'muhfadhilfauzan030195@gmail.com', 'general', 'ssf', '0'),
(11, 'Andi', 'muhfadhilfauzan030195@gmail.com', 'general', 'ssf', '0'),
(12, 'Andi', 'muhfadhilfauzan030195@gmail.com', 'general', 'ssf', '0'),
(13, 'Andi', 'muhfadhilfauzan030195@gmail.com', 'general', 'ssf', '0'),
(14, 'Andi', 'muhfadhilfauzan030195@gmail.com', 'general', 'ssf', '0'),
(15, '', '', 'general', '', '0'),
(16, 'aco', 'andikakuswidyawan@gmail.com', 'general', '', '0'),
(17, 'Andi', 'muhfadhilfauzan030195@gmail.com', 'partnership', 'www', '0'),
(18, 'BridgetSpeet', 'teenttomty812@gmail.com', 'general', 'Hi, your site helped me. \r\nFor this, I give you a coupon firstorder10off for services for writing student work on any of these sites: \r\n \r\nhttps://www.paperhelp.org/?pid=7837 enter here https://prnt.sc/p3v9pn \r\nhttps://www.evolutionwriters.com/?pid=7837 enter here https://prnt.sc/p3vafi \r\nhttps://myadmissionsessay.com/?pid=7837 enter here https://prnt.sc/p3vav0 \r\nhttps://expert-editing.org/?pid=7837 enter here https://prnt.sc/p3vbb4 \r\n \r\nCan use himself and give friends or relatives ;)', '0'),
(19, 'DJCecilDom', 'f.poellhuber@aon.at', 'general', 'Best 0DAY MP3 Server, Electronic Music Private Server 126 TB. \r\n \r\nhttp://0daymusic.org \r\n \r\nRegards, \r\n0DAY Music', '0'),
(20, 'MichaelVom', 'teenttomty812@gmail.com', 'general', 'I liked your site and I decided to offer an exclusive license for The News Spy Software. \r\nVisit the site and watch the video, only 5 places are available. \r\nI Recommend to Register NOW! Link ---> http://v.ht/TNSS', '0'),
(21, 'JamesHelay', 'yourmail@gmail.com', 'general', 'Hello. And Bye.', '0'),
(22, 'KennethMuh', 'raphaeApotrogouri@gmail.com', 'general', 'Good day!  ideadigitalindonesia.com \r\n \r\nDid you know that it is possible to send message completely lawfully? \r\nWe offer a new unique way of sending appeal through contact forms. Such forms are located on many sites. \r\nWhen such business offers are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nAlso, messages sent through contact Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis letter is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - feedbackform@make-success.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `slug`, `description`, `image`, `created_at`, `update_at`) VALUES
(1676, 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.', 'lorem-ipsum-adalah-contoh-teks-atau-dummy-dalam-industri-percetakan-dan-penataan-huruf-atau-typesetting', '<p class=\"MsoNormal\" [removed] justify; \">Lorem Ipsum adalah contoh teks atau dummy dalam\r\nindustri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah\r\nmenjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang\r\ntidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi\r\nsebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga\r\ntelah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia\r\nmulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran\r\nLetraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring\r\nmunculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga\r\nmemiliki versi Lorem Ipsum.<o:p></o:p></p>', '17072019023822_shutterstock_16_news.jpg', '2019-07-17 09:46:51', '2019-07-17 09:49:13'),
(1677, 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting.', 'lorem-ipsum-adalah-contoh-teks-atau-dummy-dalam-industri-percetakan-dan-penataan-huruf-atau-typesetting', 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman', '17072019023750_downloadjpg_news.jpg', '2019-07-17 09:51:04', '2019-07-17 09:51:41'),
(1678, 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman', 'sudah-merupakan-fakta-bahwa-seorang-pembaca-akan-terpengaruh-oleh-isi-tulisan-dari-sebuah-halaman', '<p class=\"MsoNormal\">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh\r\noleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud\r\npenggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf\r\nyang normal, ketimbang menggunakan kalimat seperti \"Bagian isi disini,\r\nbagian isi disini\", sehingga ia seolah menjadi naskah Inggris yang bisa\r\ndibaca. Banyak paket Desktop Publishing dan editor situs web yang kini\r\nmenggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap\r\nkalimat \"Lorem Ipsum\" akan berujung pada banyak situs web yang masih\r\ndalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke\r\ntahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena\r\ndimasukkan unsur humor atau semacamnya)<o:p></o:p></p>', '', '2019-07-17 09:53:00', '2019-07-17 09:56:40'),
(1679, 'Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf.', 'lorem-ipsum-telah-menjadi-standar-contoh-teks-sejak-tahun-1500an-saat-seorang-tukang-cetak-yang-tidak-dikenal-mengambil-sebuah-kumpulan-teks-dan-mengacaknya-untuk-menjadi-sebuah-buku-contoh-huruf', '<p class=\"MsoNormal\">Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah\r\nteks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari\r\nera 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari\r\n2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari\r\nHampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin\r\nyang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah\r\nsatu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia\r\nmendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari\r\nbagian 1.10.32 dan 1.10.33 dari naskah \"de Finibus Bonorum et\r\nMalorum\" (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang\r\nditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika\r\nyang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum,\r\n\"Lorem ipsum dolor sit amet..\", berasal dari sebuah baris di bagian\r\n1.10.32.<o:p></o:p></p>', '17072019023808_imagesjpg_news.jpg', '2019-07-17 09:55:09', NULL),
(1680, 'berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi', 'berakar-dari-sebuah-naskah-sastra-latin-klasik-dari-era-45-sebelum-masehi', '<p class=\"MsoNormal\"><o:p> </o:p></p><p class=\"MsoNormal\">Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah\r\nteks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari\r\nera 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari\r\n2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari\r\nHampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin\r\nyang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah\r\nsatu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia\r\nmendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari\r\nbagian 1.10.32 dan 1.10.33 dari naskah \"de Finibus Bonorum et\r\nMalorum\" (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang\r\nditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika\r\nyang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum,\r\n\"Lorem ipsum dolor sit amet..\", berasal dari sebuah baris di bagian\r\n1.10.32.<o:p></o:p></p><p class=\"MsoNormal\"><o:p> </o:p></p><p class=\"MsoNormal\">Bagian standar dari teks Lorem Ipsum yang digunakan sejak\r\ntahun 1500an kini di reproduksi kembali di bawah ini untuk mereka yang\r\ntertarik. Bagian 1.10.32 dan 1.10.33 dari \"de Finibus Bonorum et\r\nMalorum\" karya Cicero juga di reproduksi persis seperti bentuk aslinya,\r\ndiikuti oleh versi bahasa Inggris yang berasal dari terjemahan tahun 1914 oleh\r\nH. Rackham.<o:p></o:p></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\">Dari mana saya bisa mendapatkannya?<o:p></o:p></p>', '17072019023800_images-1jpg_news.jpg', '2019-07-17 09:58:13', '2019-07-17 09:59:17'),
(1681, 'New Project 2019 -Dana Idea', 'new-project-2019-dana-idea', '<p>Merupakan project 2019 dari IDEA DIGITAL INDONESIA dengan konsep market place yang mempertemukan orang yang ingin mendanai para mitra UKM yang bekerjasama dengan IDEA DIGITAL INDONESIA dengan konsep IMBAL HASIL. berbasis peer to peer landing IDEA DIGITAL INDONESIA akan mengeluarkan sebuah konsep platform dan aplikasi yang memberikan kemudahan para ukm dan investor untuk berinteraksi tanpa dibatasi oleh waktu dan jarak.<br></p>', '', '2019-07-18 02:22:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id_halaman` int(11) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `delete` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_halaman`, `title`, `slug`, `deskripsi`, `image`, `created_at`, `update_at`, `delete`) VALUES
(1, 'Mappabukaq bsok d sni d rmh smbil hakikah. Coba kreno mappabuka', 'mappabukaq-bsok-d-sni-d-rmh-smbil-hakikah-coba-kreno-mappabuka', '<p>sdasda</p>', '240519021700.jpg', '2019-05-24 02:17:07', '2019-05-25 09:40:10', '1'),
(2, 'HTML DOM cloneNode Method - W3Schoolsss', 'html-dom-clonenode-method-w3schoolsss', '<p [removed]=\"text-align: justify;\"><span [removed]=\"font-size: inherit;\">How to use document.createElement() to create an element, and wrap it around each selected element </span><span [removed]=\"font-size: inherit;\">Using a function to specify what to wrap around each selected element.</span></div></p><p [removed]=\"text-align: justify;\"><span [removed]=\"text-align: justify;\"><span [removed] inherit;\">How to toggle between wrapping and unwrapping an element.</span></div></p>', '240519021700.jpg', '2019-05-25 09:41:42', '2019-05-25 09:42:24', '1'),
(3, 'Good Morning Everyone - Tunggu Aku (Official Music Video)', 'good-morning-everyone-tunggu-aku-official-music-video', '<p>Official Music Video for Good Morning Everyone newest single \" Tunggu Aku\"\r\n\r\nNow Available on </p><p>Spotify : <a href=\"http://spoti.fi/2kofeCI\" target=\"_blank\">http://spoti.fi/2kofeCI</a></p><p>\r\niTunes & Apple Music : <a class=\"yt-simple-endpoint style-scope yt-formatted-string\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=http://apple.co/2AUUIQU&redir_token=k2jILGBlYYc0mkoo-WkkAXLczqZ8MTU1OTE0MTIwM0AxNTU5MDU0ODAz&event=video_description&v=LGymNBRdx5s\" rel=\"nofollow\" target=\"_blank\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?q=http://bit.ly/2jTdFZD&redir_token=k2jILGBlYYc0mkoo-WkkAXLczqZ8MTU1OTE0MTIwM0AxNTU5MDU0ODAz&event=video_description&v=LGymNBRdx5s\" rel=\"nofollow\" target=\"_blank\">http://bit.ly/2jTdFZD</a>\r\n</p><p>\r\n\r\nSong and Lyric : Yuli Perkasa\r\nProducer : Good Morning Everyone\r\n</p><p>Recorded at : GME studio and 4wd </p><p>studio\r\nMixing : Erwin Hadinata on GME Studio\r\nMastering: Randy Merrill, Sterling Sound, New York, USA\r\n\r\nMusic </p><p>Video : \r\nDirector : Ezra McGaiver\r\n</p><p>Director Of Photography : Ezra </p><p>McGaiver\r\nEditor : Ezra </p><p>McGaiver\r\nCast : Mochamad Al Ichsan & Tasya Clara<br></p>', '', '2019-05-28 10:46:35', '2019-05-29 12:49:30', '1'),
(4, 'Visi & Misi', 'visi-misi', '<p>Visi & Misi</p>', '', '2019-05-29 12:50:29', NULL, '0'),
(5, 'Data Penduduk', 'data-penduduk', '<p>Data Penduduk</p>', '', '2019-05-29 12:51:07', NULL, '1'),
(6, 'About', 'about', '<p [removed]=\"font-size: 16px;\">At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.</p><p [removed]=\"font-size: 16px;\">At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.</p><p [removed]=\"font-size: 16px;\">At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.<br></p>', 'page_310519120857.jpg', '2019-05-29 12:53:10', '2019-09-20 02:51:40', '0'),
(7, 'Project', 'project', '<p>At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.</p><p>At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.</p><p>At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.<br></p>', '', '2019-09-20 03:05:34', '2019-09-20 03:33:19', '0'),
(8, 'Team', 'team', '<p>At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.</p><p>At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.<br></p>', '', '2019-09-20 03:38:47', NULL, '0'),
(9, 'Kontak', 'kontak', '<p>At Moz, we believe there is a better way to do marketing. A more valuable, less invasive way where customers are earned rather than bought. We\'re obsessively passionate about it, and our mission is to help people achieve it. We focus on search engine optimization (SEO). It\'s one of the least understood and least transparent aspects of great marketing, and we see that as an opportunity: We\'re excited to simplify SEO for everyone through our software, education, and community.<br></p>', '', '2019-09-20 03:41:31', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `meta_seo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `domain`, `email`, `telepon`, `alamat`, `kabupaten`, `provinsi`, `logo`, `meta_seo`) VALUES
(999, 'IDEA DIGITAL INDONESIA', 'www.ideadigitalindonesia.com', 'mpampam5@gmail.com', '(0411) 4098547', 'Jalan Toddopuli X, Kota Makassar, Sulawesi Selatan.', 'Makassar', 'Sulawesi-selatan', 'logo_280619094322.png', '<meta property=\"og:title\" content=\"European Travel Destinations\"><meta property=\"og:description\" content=\"Offering tour packages for individuals or groups.\"><meta property=\"og:image\" content=\"http://euro-travel-example.com/thumbnail.jpg\"><meta property=\"og:url\" content=\"http://euro-travel-example.com/index.htm\">\r\n<script>alert(\'mpampam\')</script>');

-- --------------------------------------------------------

--
-- Table structure for table `trans_news_category`
--

CREATE TABLE `trans_news_category` (
  `id_news_category` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_news` int(11) DEFAULT NULL,
  `headline` int(11) DEFAULT 0,
  `delete` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `trans_news_category`
--

INSERT INTO `trans_news_category` (`id_news_category`, `id_category`, `id_news`, `headline`, `delete`) VALUES
(1676, 10, 1676, 0, '1'),
(1677, 9, 1677, 0, '1'),
(1678, 10, 1678, 0, '1'),
(1679, 11, 1679, 0, '1'),
(1680, 9, 1680, 0, '0'),
(1681, 11, 1681, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `key` varchar(20) DEFAULT NULL,
  `token_activation` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `active` enum('y','n') DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `first_name`, `last_name`, `email`, `phone`, `username`, `password`, `key`, `token_activation`, `last_login`, `created_at`, `update_at`, `active`) VALUES
(6, 'Muhammad', 'Irfan ibnu', 'mpampam@mail.com', '39843890432', 'admin', '$2y$10$OiKFc5yEnsVuYl7OdphZauWkdhtP7kb3iYdt2nPlCpwaWjKfM7ISC', '20190311221640', NULL, '2020-01-06 09:53:03', '2019-03-11 22:16:40', '2019-06-22 02:17:09', 'y'),
(8, 'sang', 'operator', 'operator@mail.com', '872873827832', 'operator', '$2y$10$U0AwKvpSHAe2uWIJ7MkD8u.kGt6izIRZ/Kj6GeidFvCaH/ql1kOQO', '20190313222009', NULL, '2019-06-22 02:19:52', '2019-03-13 22:20:10', '2019-06-22 02:22:33', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id_users_groups` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_groups` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id_users_groups`, `id_users`, `id_groups`) VALUES
(3, 6, 8),
(5, 8, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`) USING BTREE;

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_groups`) USING BTREE;

--
-- Indexes for table `groups_menus`
--
ALTER TABLE `groups_menus`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_menus` (`id_menus`) USING BTREE,
  ADD KEY `id_groups` (`id_groups`) USING BTREE;

--
-- Indexes for table `media_foto`
--
ALTER TABLE `media_foto`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `media_video`
--
ALTER TABLE `media_video`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `menu_public`
--
ALTER TABLE `menu_public`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`) USING BTREE;

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_halaman`) USING BTREE;

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trans_news_category`
--
ALTER TABLE `trans_news_category`
  ADD PRIMARY KEY (`id_news_category`) USING BTREE,
  ADD KEY `id_news` (`id_news`) USING BTREE,
  ADD KEY `id_category` (`id_category`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`) USING BTREE;

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id_users_groups`) USING BTREE,
  ADD KEY `id_users` (`id_users`) USING BTREE,
  ADD KEY `id_groups` (`id_groups`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id_groups` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groups_menus`
--
ALTER TABLE `groups_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `media_foto`
--
ALTER TABLE `media_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media_video`
--
ALTER TABLE `media_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `menu_public`
--
ALTER TABLE `menu_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1682;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_halaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trans_news_category`
--
ALTER TABLE `trans_news_category`
  MODIFY `id_news_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1682;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id_users_groups` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups_menus`
--
ALTER TABLE `groups_menus`
  ADD CONSTRAINT `groups_menus_ibfk_1` FOREIGN KEY (`id_groups`) REFERENCES `groups` (`id_groups`) ON DELETE CASCADE,
  ADD CONSTRAINT `groups_menus_ibfk_2` FOREIGN KEY (`id_menus`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trans_news_category`
--
ALTER TABLE `trans_news_category`
  ADD CONSTRAINT `trans_news_category_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`) ON DELETE CASCADE,
  ADD CONSTRAINT `trans_news_category_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `users_groups_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_groups_ibfk_2` FOREIGN KEY (`id_groups`) REFERENCES `groups` (`id_groups`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
