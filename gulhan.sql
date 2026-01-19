-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Oca 2026, 23:24:51
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gulhan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '\n                <p>1978&#39;de&nbsp;kurulan G&Uuml;LHAN, şu anda 12.000 m&sup2;&nbsp;kapalı alan, 6000 m&sup2; lik a&ccedil;ık alana sahip tesislerinde iş ve inşaat makineleri sekt&ouml;r&uuml;ne kau&ccedil;uk ağırlıklı yedek par&ccedil;alar &uuml;reten lokomotif firmalardan biridir. Ayrıca firmamızda plastik ve poli&uuml;retan ke&ccedil;eler ile sipariş &uuml;zerine yedek par&ccedil;a dizaynı ve imalatı yapılmaktadır. Son yıllarda Savunma Sanayisine de ağırlık veren firmamız, Aselsan ın onaylı tedarik&ccedil;isidir ve bir&ccedil;ok projeyi başarı ile tamamlayıp teslim etmiştir.</p>\n\n                <p><strong>ISO 9001:2015</strong>&nbsp;Kalite Y&ouml;netim Sistemi ,&nbsp;<strong>TSE</strong>&nbsp;belgelerine sahip olan firmamızda; kalitenin korunması ve s&uuml;rekli iyileştirilmesi , m&uuml;şteri memnuniyetinin geliştirilmesinin devamını sağlamak ve hatasız &uuml;retim değişmeyen politikamızdır.</p>\n                \n                <p>&Uuml;r&uuml;nlerimiz, periyodik olarak b&uuml;nyemizde bulunan laboratuarımızda gerekli olan testlere tabi tutularak kontrol edilir. Her t&uuml;rl&uuml; kau&ccedil;uk ve plastik kalıbı dizaynı ve imalatı yapabilecek makine ve ekipmana sahip kapasitedeki kalıp imalathanemiz mevcuttur. Uzman personel, kaliteli hammadde ve tecr&uuml;be ile &uuml;r&uuml;nlerimizin kalitesi garanti altına alınmıştır.</p>\n                \n                <p>G&uuml;lhan, 45 yıllık tecr&uuml;besi ile sekt&ouml;re lokomotif kuruluş olarak hizmet vermektedir. &Uuml;r&uuml;nlerimiz T&uuml;rkiye genelinde kullanılmakta olup; Almanya ağırlıklı olmak &uuml;zere Amerika, Rusya, Suudi Arabistan, G&uuml;ney Kore, Singapur gibi&nbsp;<strong>D&uuml;nyanın yaklaşık 80 &uuml;lkesine</strong>&nbsp;de ihra&ccedil; edilmektedir. Amerika da, o pazar i&ccedil;in kurulmuş ve Minnesota b&ouml;lgesindeki depomuzda satış yapan firmamız mevcuttur.&nbsp;<strong>&Uuml;rd&uuml;n, Suudi Arabistan, Libya, Mısır, Azerbaycan ve G&uuml;ney Kore de bayilerimiz bulunmaktadır.</strong></p>\n                \n                <p>Yurti&ccedil;inde &ouml;zellikle inşaat sekt&ouml;r&uuml;nde tanınan ve iyi bir imaja sahip G&Uuml;LHAN, yurtdışında da aynı g&uuml;veni sağlamanın haklı gururunu s&uuml;rd&uuml;rmektedir.</p>\n                \n                <p><strong>KALİTE POLİTİKAMIZ</strong></p>\n                \n                <p>Kuruluşumuz politikası m&uuml;şterilerimizin beklentilerini karşılayacak d&uuml;zeyde kaliteli &uuml;r&uuml;n &ndash; hizmet sunarak Pazar payımızı s&uuml;rekli arttırmak, sekt&ouml;r&uuml;m&uuml;zde konumumuzu sağlamlaştırmak ve İş Sağlığı ve G&uuml;venliği Y&ouml;netim Sisteminin gereklerini yerine getirmektir.</p>\n                \n                <p><strong>Kalite Anlayışımız;</strong></p>\n                \n                <ul>\n                    <li>&Uuml;retimde ve hizmette s&uuml;rekli iyileştirmeyi ve devamlılığı sağlamak,</li>\n                    <li>Gerek yurt i&ccedil;i gerek yurt dışı fuarlara katılarak sistemlerin getirdiği yenilikleri takip etmek,</li>\n                    <li>&Uuml;r&uuml;n, satış sonrası hizmet ve &ccedil;evre boyutlarıyla m&uuml;şteri memnuniyet ve g&uuml;venini arttırmak,</li>\n                    <li>&Ccedil;alışanlarımızın teknik yeterliliğini arttırmak amacıyla i&ccedil; ve dış eğitimlere katılımlarını sağlayarak kaliteyi arttırmak,</li>\n                    <li>&Uuml;r&uuml;n kalitemizi s&uuml;rekli iyileştirme, verimlilik artışı ve maliyetlerin d&uuml;ş&uuml;r&uuml;lmesi &ccedil;alışmalarını t&uuml;m personelin katılımı ile y&uuml;r&uuml;tmek,</li>\n                    <li>&Uuml;r&uuml;nlerimizin zamanında teslimini sağlamak,</li>\n                    <li>Yeni teknolojilere uyum sağlamak,</li>\n                    <li>Firma &ccedil;alışanlarının bilgi ve refah seviyelerini y&uuml;kseltmek olarak belirlenmiş olup; Y&ouml;netim olarak; Kalite Y&ouml;netim Sistemi şartlarının s&uuml;rekli olarak uygulanmasını sağlamak ana politikamızdır.</li>\n                </ul>\n                \n                <p>Yukarıda belirtilen temel ilkeler ışığında asıl amacımız; y&ouml;netim destekli ve t&uuml;m &ccedil;alışanlarımızın katılımı ile oluşacak etkin ve s&uuml;rekli gelişmelere a&ccedil;ık kalite y&ouml;netim ve İSG Y&ouml;netim Sistemi felsefesini oluşturmaktır.&nbsp; Y&ouml;netim tarafından t&uuml;m bu faaliyetlerin ger&ccedil;ekleştirilmesi taahh&uuml;t edilerek g&uuml;vence altına alınmıştır.</p>\n            ', '2024-04-03 16:00:35', '2024-04-03 16:00:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `best_sellers`
--

CREATE TABLE `best_sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `best_sellers`
--

INSERT INTO `best_sellers` (`id`, `product_id`, `position`, `created_at`, `updated_at`) VALUES
(1, 21, 0, '2026-01-19 21:56:03', '2026-01-19 21:56:03'),
(2, 11, 1, '2026-01-19 21:56:03', '2026-01-19 21:56:03'),
(3, 3, 2, '2026-01-19 21:56:03', '2026-01-19 21:56:03'),
(4, 12, 3, '2026-01-19 21:56:03', '2026-01-19 21:56:03'),
(5, 6, 4, '2026-01-19 21:56:03', '2026-01-19 21:56:03'),
(6, 7, 5, '2026-01-19 21:56:03', '2026-01-19 21:56:03'),
(7, 13, 6, '2026-01-19 21:56:03', '2026-01-19 21:56:03'),
(8, 16, 7, '2026-01-19 21:56:03', '2026-01-19 21:56:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_tr` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `slug_tr` varchar(255) NOT NULL,
  `slug_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogcategories`
--

INSERT INTO `blogcategories` (`id`, `name_tr`, `name_en`, `slug_tr`, `slug_en`, `created_at`, `updated_at`) VALUES
(1, 'Yurt Dışı Fuarlar', 'Foreign Exhibitions', 'yurt-disi-fuarlar', 'foreign-exhibitions', '2024-04-03 17:05:41', '2024-07-20 05:45:27'),
(2, 'Kurumsal', 'Corporate', 'kurumsal', 'corporate', '2024-04-03 17:05:47', '2024-07-20 05:45:35'),
(3, 'Savunma Sanayi', 'Defense Industry', 'savunma-sanayi', 'defense-industry', '2024-04-03 17:05:54', '2024-07-20 05:45:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogphotos`
--

CREATE TABLE `blogphotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_tr` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `description_tr` text NOT NULL,
  `description_en` text NOT NULL,
  `slug_tr` varchar(255) NOT NULL,
  `slug_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `name_tr`, `name_en`, `description_tr`, `description_en`, `slug_tr`, `slug_en`, `created_at`, `updated_at`) VALUES
(2, '/images/logo.png', 'Savunma Sanayisine Yeni Projeler', 'New projects to defense industry', '<p>Jandarma i&ccedil;in&nbsp;<strong>% 100 yerli olarak imalatını yaptığımız</strong>&nbsp;18.000 adet Mahkum kelep&ccedil;esi testlerden tek seferde ge&ccedil;erek, başarı ile teslim edilmiştir.</p>\r\n\r\n<p>Daha &ouml;nceden ithal edilen kelep&ccedil;elere</p>', '<p>Jandarma i&ccedil;in&nbsp;<strong>% 100 yerli olarak imalatını yaptığımız</strong>&nbsp;18.000 adet Mahkum kelep&ccedil;esi testlerden tek seferde ge&ccedil;erek, başarı ile teslim edilmiştir.</p>\r\n\r\n<p>Daha &ouml;nceden ithal edilen kelep&ccedil;elere toz kapağı da ekleyerek, d&uuml;nyada bir ilke imza atmanın gururunu yaşıyoruz.</p>', 'savunma-sanayisine-yeni-projeler', 'new-projects-to-defense-industry', '2024-04-03 17:11:21', '2024-07-19 15:21:25'),
(4, '/images/logo.png', 'Baku Build 2014', 'Baku Build 2014', '<p>2014 ekim ayında Azerbeycan da -&nbsp;&nbsp;&nbsp;<strong>Baku Build 2014&nbsp; (22 - 25 Ekim)</strong></p>\r\n\r\n<p>Firmamız bu fuar ile bug&uuml;ne kadar ki katıldığı yurtdışı fuar sayısını 8 e &ccedil;ıkartmıştır.</p>', '<p>2014 ekim ayında Azerbeycan da -&nbsp;&nbsp;&nbsp;<strong>Baku Build 2014&nbsp; (22 - 25 Ekim)</strong></p>\r\n\r\n<p>Firmamız bu fuar ile bug&uuml;ne kadar ki katıldığı yurtdışı fuar sayısını 8 e &ccedil;ıkartmıştır.</p>', 'baku-build-2014', 'baku-build-2014', '2024-04-03 17:19:44', '2024-07-19 15:21:09'),
(5, '/upload/blogs/world-of-concrete-2019.jpg', 'World Of Concrete 2019', 'World Of Concrete 2019', '<p>22-25 Ocak 2019&nbsp;tarihleri arasında Las Vegas&#39;da d&uuml;zenlenecek olan beton fuarında&nbsp;C7184 nolu stantdayız.</p>', '<p>We are at the C7184 stand at the concrete exhibition in Las Vegas between 22-25 January 2019.</p>', 'world-of-concrete-2019', 'world-of-concrete-2019', '2024-04-03 17:22:24', '2024-07-19 15:20:35'),
(6, '/upload/blogs/bauma-munih-2019-8-14-nisan-2019.jpg', 'BAUMA / MÜNİH 2019 8-14 Nisan 2019', 'BAUMA / MÜNİCH 2019', '<p>8-14 Nisan 2019&nbsp;tarihleri arasında M&uuml;nih&#39;da d&uuml;zenlenecek olan beton fuarında A2.113 nolu standayız.</p>', '<p>We are at the A2.113 stand at BAUMA in M&uuml;nich&nbsp;between 8-14 April&nbsp;2019.</p>', 'bauma-munih-2019-8-14-nisan-2019', 'bauma-munich-2019', '2024-04-03 17:23:22', '2024-07-19 15:20:17'),
(7, '/upload/blogs/the-big-5-heavy-dubai-25-28-kasim-2019.jpg', 'The BIG 5 HEAVY DUBAI, 25-28 KASIM 2019', 'The BIG 5 HEAVY DUBAI, 25-28 KASIM 2019', '<p>25-28 KASIM 2019</p>\r\n\r\n<p>DUBAI WORLD TRADE CENTRE, DUBAI</p>\r\n\r\n<p>Saat: 11:00 - 19:00<br />\r\nGulhan Stand No: Rashid A171</p>', '<p>25-28 KASIM 2019</p>\r\n\r\n<p>DUBAI WORLD TRADE CENTRE, DUBAI</p>\r\n\r\n<p>Saat: 11:00 - 19:00<br />\r\nGulhan Stand No: Rashid A171</p>', 'the-big-5-heavy-dubai-25-28-kasim-2019', 'the-big-5-heavy-dubai-25-28-kasim-2019', '2024-04-03 17:24:20', '2024-07-19 15:19:54'),
(8, '/images/logo.png', 'Yeni Ostim Satış Mağazamız ve Merkez Ofisimiz', 'New Ostim Sales Store & Central Office', '<p>Mayıs 2021</p>\r\n\r\n<p>Ostim satış mağazamız ve şirket﻿imizin merkez ofisi Turan &Ccedil;iğdem Caddesinden Ostim Prestij İş Merkezine Taşınmıştır.</p>\r\n\r\n<p>Yeni Adresimiz: 100. Yıl Bulvarı Prestij İş Merkezi No: 55-D/7 Ostim Ankara</p>', '<p>May 2021</p>\r\n\r\n<p>The new address of our Ostim Sales Store &amp; Central Office</p>\r\n\r\n<p>New Adress: 100. Yıl Bulvarı Prestij İş Merkezi No: 55-D/7 Ostim Ankara T&uuml;rkiye</p>', 'yeni-ostim-satis-magazamiz-ve-merkez-ofisimiz', 'new-ostim-sales-store-central-office', '2024-04-03 17:24:49', '2024-07-19 15:19:25'),
(9, '/upload/blogs/enerji-kesintisi-hakkinda-bilgilendirme.jpg', 'Enerji kesintisi hakkında bilgilendirme', 'Information about power outage', '<p>T&uuml;rkiye genelindeki sanayi b&ouml;lgelerinde 26, 27 ve 28 Ocak 2022 tarihlerinde planlanan enerji kesintisi nedeniyle &uuml;retim hatlarımızda ve sevkiyat departmanlarımızda aksaklık yaşanacaktır.</p>\r\n\r\n<p>Teklifler ve belgeler i&ccedil;in e-post</p>', '<p>The disruptions are going to been on our production lines and shipping departments due to the planned power outage in industrial zones across Turkey in 26th, 27th and 28th January of 2022.<br />\r\n<br />\r\nWe will keep you assisting for quotations and documentations via e-mails and phones. We apologize in advance for possible delays and disruptions beyond our control.</p>\r\n\r\n<p>E-posta: fabrika@gulhan.com<br />\r\nTel: +90 312 385 53 22</p>', 'enerji-kesintisi-hakkinda-bilgilendirme', 'information-about-power-outage', '2024-04-03 17:25:20', '2024-07-19 15:19:01'),
(10, '/upload/blogs/bauma-munih-24-30-ekim-2022.jpg', 'BAUMA / MÜNİH, 24-30 Ekim 2022', 'BAUMA / MUNICH 2022', '<p>24-30 Ekim 2022 tarihleri arasında Bauma M&uuml;nih fuarında&nbsp; A2.113 nolu standdayız.</p>', '<p>We are at the A2.113 stand at BAUMA in M&uuml;nich&nbsp;between October 24-30, 2022.</p>', 'bauma-munih-24-30-ekim-2022', 'bauma-munich-2022', '2024-04-03 17:26:42', '2024-07-19 15:18:35'),
(11, '/upload/blogs/ctt-expo-2023-moskova-rusya-23-26-mayis.jpg', 'CTT Expo 2023 Moskova Rusya / 23-26 Mayıs', 'CTT Expo 2023 Moskow Russia / 23-26 May', '<p>23-26 Mayıs 2023 tarihleri arasında Moskova CTT Expo fuarında&nbsp; 13-548 nolu standdayız.</p>', '<p>CTT 2023, 23-26 Mayıs, Booth. 13-548</p>', 'ctt-expo-2023-moskova-rusya-23-26-mayis', 'ctt-expo-2023-moskow-russia-23-26-may', '2024-04-03 17:27:19', '2024-07-19 15:18:10'),
(12, '/upload/blogs/world-of-concrete-2024.jpg', 'World Of Concrete 2024', 'World Of Concrete 2024', '<p>23-25 Ocak 2024 tarihleri arasında Las Vegas&#39;da d&uuml;zenlenecek olan beton fuarında&nbsp;C7184 nolu stantdayız. Ziyaretimize bekliyoruz.</p>', '<p>We are at the C7184 stand at the concrete exhibition in Las Vegas between 23-25 January 2019.&nbsp;We will be waiting for your kind visit.</p>', 'world-of-concrete-2024', 'world-of-concrete-2024', '2024-04-03 17:27:48', '2024-07-19 15:17:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_blogcategory`
--

CREATE TABLE `blog_blogcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `blogcategory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blog_blogcategory`
--

INSERT INTO `blog_blogcategory` (`id`, `blog_id`, `blogcategory_id`, `created_at`, `updated_at`) VALUES
(2, 2, 3, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 2, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 2, NULL, NULL),
(12, 12, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(91) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `slug` varchar(135) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `brands`
--

INSERT INTO `brands` (`id`, `name`, `category_id`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'PUTZMEISTER', NULL, 'putzmeister', '2024-04-17 07:43:13', '2024-04-17 07:43:13'),
(7, 'SERMAC', NULL, 'sermac', '2024-04-17 07:43:21', '2024-04-17 07:43:21'),
(9, 'SCHWING', NULL, 'schwing', '2024-04-17 07:44:12', '2024-04-17 07:44:12'),
(10, 'Diğer', NULL, 'diger', '2024-04-17 08:44:49', '2024-04-17 08:44:49'),
(11, 'DYNAPAC', NULL, 'dynapac', '2024-04-17 08:50:49', '2024-04-17 08:50:49'),
(12, 'DEMAG', NULL, 'demag', '2024-04-17 08:50:56', '2024-04-17 08:50:56'),
(13, 'VIBROMAX', NULL, 'vibromax', '2024-04-17 08:56:07', '2024-04-17 08:56:07'),
(14, 'BOMAG', NULL, 'bomag', '2024-04-17 08:56:16', '2024-04-17 08:56:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brand_product`
--

CREATE TABLE `brand_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `brand_product`
--

INSERT INTO `brand_product` (`id`, `brand_id`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 6, 3, NULL, NULL),
(4, 6, 4, NULL, NULL),
(5, 6, 5, NULL, NULL),
(6, 7, 6, NULL, NULL),
(7, 7, 7, NULL, NULL),
(8, 10, 8, NULL, NULL),
(9, 10, 9, NULL, NULL),
(10, 10, 10, NULL, NULL),
(11, 11, 11, NULL, NULL),
(12, 12, 12, NULL, NULL),
(13, 12, 13, NULL, NULL),
(16, 13, 16, NULL, NULL),
(18, 13, 18, NULL, NULL),
(21, 6, 21, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` enum('man','woman') NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `careers`
--

INSERT INTO `careers` (`id`, `gender`, `name`, `surname`, `nationality`, `address`, `district`, `city`, `phone`, `email`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'man', 'Can', 'Oğuzorhan', 'Türkiye', 'adres', 'ilçe', 'Ankara', '05303415722', 'canoguzorhan066@gmail.com', '/upload/cv/CanOğuzorhan1713268263-32.jpeg', '2024-04-16 11:51:03', '2024-04-16 11:51:03'),
(2, 'man', 'Can Oğuzorhan', 'kadsmklda', 'Türkiye', 'dasda', 'dasdas', 'Ankara', '05303415722', 'canoguzorhan066@gmail.com', '/upload/cv/Can Oğuzorhankadsmklda1713269293-93.jpeg', '2024-04-16 12:08:13', '2024-04-16 12:08:13'),
(3, 'man', 'Can', 'Oğuzorhan', 'Türkiye', 'adress', 'ilçe', 'Ankara', '0530646666', 'canoguzorhan066@gmail.com', '/upload/cv/CanOğuzorhan1713269344-67.jpeg', '2024-04-16 12:09:04', '2024-04-16 12:09:04'),
(4, 'man', 'an', 'Oğuzorhan', 'Türkiye', 'adres', 'ilçe', 'Ankara', '05303415722', 'canoguzorhan066@gmail.com', '/upload/cv/anOğuzorhan1713269428-35.jpg', '2024-04-16 12:10:28', '2024-04-16 12:10:28'),
(5, 'man', 'Can', 'Oğuzorhan', 'Türkiye', 'adres', 'ilçe', 'Ankara', '05303415722', 'canoguzorhan066@gmail.com', '/upload/cv/CanOğuzorhan1713269905-27.jpg', '2024-04-16 12:18:25', '2024-04-16 12:18:25'),
(6, 'man', 'Can', 'Oğuzorhan', 'Türkiye', 'adres cad.', 'ilçe', 'Ankara', '05303415722', 'canoguzorhan066@gmail.com', '/upload/cv/CanOğuzorhan1713270215-41.jpeg', '2024-04-16 12:23:35', '2024-04-16 12:23:35'),
(7, 'man', 'Can', 'Oğuzorhan', 'Türkiye', 'adres', 'ilçe', 'Ankara', '05303415722', 'canoguzorhan066@gmail.com', '/upload/cv/CanOğuzorhan1713270276-21.jpeg', '2024-04-16 12:24:36', '2024-04-16 12:24:36'),
(8, 'man', 'Can', 'Oğuzorhan', 'Türkiye', 'adres', 'ilçe', 'Ankara', '05303415722', 'canoguzorhan066@gmail.com', '/upload/cv/CanOğuzorhan1713270324-33.jpeg', '2024-04-16 12:25:24', '2024-04-16 12:25:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shops` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`shops`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contacts`
--

INSERT INTO `contacts` (`id`, `shops`, `created_at`, `updated_at`) VALUES
(1, '[{\"name_tr\":\"OST\\u0130M SATI\\u015e MA\\u011eAZASI\",\"name_en\":\"SALES OFFICE\",\"address\":\"100. Y\\u0131l Bulvar\\u0131 Prestij \\u0130\\u015f Merkezi No: 55-D\\/7 Ostim Ankara T\\u00fcrkiye\",\"phone\":\"+90 (312) 385 53 22\",\"fax\":\"+90 (312) 354 23 57\",\"email_tr\":\"info@gulhan.com\",\"email_en\":\"export@gulhan.com\",\"map\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3057.746057488857!2d32.743355245675644!3d39.96942997490234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d349bf0e80bcb3%3A0x2c48e2b762b92ec6!2zR8O8bGhhbiBLYXXDp3Vr!5e0!3m2!1str!2str!4v1713253341410!5m2!1str!2str\\\" width=\\\"100%\\\" height=\\\"250\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade\\\"><\\/iframe>\"},{\"name_tr\":\"FABR\\u0130KA \\u0130LET\\u0130\\u015e\\u0130M\",\"name_en\":\"CONTACT FACTORY\",\"address\":\"Ba\\u015fkent OSB 16. Cadde No: 5 Mal\\u0131k\\u00f6y Ankara T\\u00fcrkiye\",\"phone\":\"+90 (312) 267 53 22\",\"fax\":\"+90 (312) 354 23 57\",\"email_tr\":\"fabrika@gulhan.com\",\"email_en\":\"export@gulhan.com\",\"map\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m14!1m8!1m3!1d1532.7731119004698!2d32.38528150000001!3d39.79473779999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d3300824dbbc7d%3A0xe2c87da707e2cd36!2zR8O8bGhhbiBZZWRlayBQYXLDp2E!5e0!3m2!1str!2str!4v1713357953072!5m2!1str!2str\\\" width=\\\"100%\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade\\\"><\\/iframe>\"},{\"name_tr\":\"\\u0130STANBUL SATI\\u015e MA\\u011eAZASI\",\"name_en\":\"\\u0130STANBUL BRANCH\",\"address\":\"Esen\\u015fehir Mahallesi, Necip Faz\\u0131l Bulvar\\u0131 No:45, \\u00dcmraniye - Dudullu, \\u0130stanbul T\\u00fcrkiye\",\"phone\":\"+90 216 517 29 21\",\"fax\":\"+90 (541) 507 30 44\",\"email_tr\":\"istanbul@gulhan.com\",\"email_en\":\"export@gulhan.com\",\"map\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d24085.815921982077!2d29.153784875274358!3d41.009348355178105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cacf18f0b96243%3A0xeb0de0354da1cc0a!2sYukar%C4%B1%20Dudullu%2C%20Necip%20Faz%C4%B1l%20Blv.%2C%2034776%20Dudullu%20Osb%2F%C3%9Cmraniye%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1713425443920!5m2!1str!2str\\\" width=\\\"100%\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade\\\"><\\/iframe>\"},{\"name_tr\":\"ABD SATI\\u015e OF\\u0130S\\u0130\",\"name_en\":\"SALES OFFICE USA\",\"address\":\"1380 BEVERAGE DRIVE SUITE-W STONE MOUNTAIN, GA Georgia Amerika Birle\\u015fik Devletleri\",\"phone\":\"+1 (678) 628-0275\",\"fax\":\"+90 (541) 507 30 44\",\"email_tr\":\"usa@gulhan.com\",\"email_en\":\"usa@gulhan.com\",\"map\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m14!1m8!1m3!1d1657.3050174804434!2d-84.18986646806313!3d33.82237528551049!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5a8b3e6a4e947%3A0x4ee4ac43107e6d9a!2s1380%20Beverage%20Dr%2C%20Stone%20Mountain%2C%20GA%2030083%2C%20USA!5e0!3m2!1sen!2str!4v1713358122904!5m2!1sen!2str\\\" width=\\\"100%\\\" height=\\\"450\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" loading=\\\"lazy\\\" referrerpolicy=\\\"no-referrer-when-downgrade\\\"><\\/iframe>\"}]', '2024-04-03 16:00:35', '2024-04-18 07:37:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `shops` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`shops`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `footers`
--

INSERT INTO `footers` (`id`, `description`, `shops`, `created_at`, `updated_at`) VALUES
(1, '1978\'de kurulan GÜLHAN, şu anda 10000 m² lik kapalı alana sahip tesislerinde iş ve inşaat makineleri sektörüne kauçuk ağırlıklı yedek parçalar üreten lokomotif firmalardan biridir.', '[{\"name_tr\":\"\\u0130stanbul Sat\\u0131\\u015f Ma\\u011fazas\\u0131\",\"name_en\":\"\\u0130stanbul Store\",\"address\":\"Esen\\u015fehir Mahallesi, Necip Faz\\u0131l Bulvar\\u0131 No:45, \\u00dcmraniye - Dudullu, \\u0130stanbul T\\u00fcrkiye\",\"phone\":\"+90 216 517 29 21\",\"fax\":\"+90 (541) 507 30 44\",\"email_tr\":\"istanbul@gulhan.com\",\"email_en\":\"export@gulhan.com\"},{\"name_tr\":\"Ostim Sat\\u0131\\u015f Ma\\u011fazas\\u0131\",\"name_en\":\"Ostim Store\",\"address\":\"100. Y\\u0131l Bulvar\\u0131 Prestij \\u0130\\u015f Merkezi No: 55-D\\/7 Ostim Ankara T\\u00fcrkiye\",\"phone\":\"+90 (312) 385 53 22\",\"fax\":\"+90 (312) 354 23 57\",\"email_tr\":\"info@gulhan.com\",\"email_en\":\"export@gulhan.com\"},{\"name_tr\":\"Fabrika \\u0130leti\\u015fim\",\"name_en\":\"Factory Contact\",\"address\":\"Ba\\u015fkent OSB 16. Cadde No: 5 Mal\\u0131k\\u00f6y Ankara T\\u00fcrkiye\",\"phone\":\"+90 (312) 267 53 22\",\"fax\":\"+90 (312) 354 23 57\",\"email_tr\":\"fabrika@gulhan.com\",\"email_en\":\"export@gulhan.com\"}]', '2024-04-03 16:00:35', '2024-04-03 16:00:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `media`
--

INSERT INTO `media` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '\n                <p>Kau&ccedil;uk Nedir&nbsp;</p>\n\n                <p>Kau&ccedil;uk, bitki &ouml;zsuyundan elde edilen bir lif. Doğal kau&ccedil;uk, ağa&ccedil;ların &ouml;zsuyundan yapılır.&nbsp;<a href=\'http://tekstilsayfasi.blogspot.com.tr/2012/12/sentetik-liflerin-tanimi-ve.html\' target=\'_blank\'>Sentetik&nbsp;</a>kau&ccedil;uk, kimyasal end&uuml;stri tarafından yağdan &uuml;retilir. Her iki t&uuml;r de &ccedil;ok y&ouml;nl&uuml; maddelerdir. Brezilya, Seylan, Meksika, Cava Adası, Orta ve Doğu Afrika&#39;da yetişir. Y&uuml;zlerce yıldan beri, doğal kau&ccedil;uk, kau&ccedil;uk ağacına &ccedil;izikler atmak suretiyle s&uuml;t halinde akan i&ccedil;indeki &ouml;zsuyu toplayarak, bu suyu kurumaya ve sertleşmeye bıraktıktan sonra &ccedil;eşitli işlemler kullanılarak elde edilmektedir. 20. y&uuml;zyıl boyunca, kimyadaki ilerlemeler, yağdaki kau&ccedil;uğun kullanılarak suni versiyonunun yapılmasına imk&acirc;n tanıdı.<br />\n                <br />\n                Kau&ccedil;uk, bug&uuml;nk&uuml; end&uuml;strinin &ouml;nemli maddelerinden biridir. Motorlu ve motorsuz taşıtların&nbsp;<a href=\'http://tekstilsayfasi.blogspot.com.tr/2012/11/lastik-nedir-araba-ve-tasit-lastikleri.html\' target=\'_blank\'>tekerlekleri</a>, &ccedil;eşitli yağmurluklar, ayakkabılar, elektrik&ccedil;ilikte en &ouml;nemli izoleler, d&uuml;ğme, tarak, kalem gibi maddeler, yapıştırma sol&uuml;syonları, vernikler, kau&ccedil;uğun end&uuml;striye uygulanma şekilleridir. Doğal kau&ccedil;uğun, bu kadar &ccedil;ok kullanılması ve ihtiyaca cevap verememesi sebebiyle; kau&ccedil;uğu ucuz ve bol miktarlarda elde edebilmek i&ccedil;in 1906 yılında Almanlar tarafından sentetik (yapay) kau&ccedil;uk elde edilmiştir. Kau&ccedil;uk aslında bir ağa&ccedil; adıdır. Bu ağacın kendisinden ve &ouml;zsuyu olan&nbsp;<a href=\'http://tekstilsayfasi.blogspot.com.tr/2012/11/lateks-nedir.html\' target=\'_blank\'>lateks</a>inden elde edilen maddeler end&uuml;stride kullanım sahası bulmuştur. Son yıllarda tabii kau&ccedil;uğun yanı sıra sentetik kau&ccedil;uğun da yaygınlaşması ile pek &ccedil;ok kau&ccedil;uk t&uuml;r&uuml; ortaya &ccedil;ıkmıştır. Her yıl &uuml;retilen milyonlarca ton kau&ccedil;uğun b&uuml;y&uuml;k bir kısmı sentetiktir.<br />\n                <br />\n                Kau&ccedil;uğun en &ouml;nemli &ouml;zelliği y&uuml;ksek bir elastikiyete sahip olması, yani eski haline d&ouml;nebilen bir uzayabilirliğinin olmasıdır. Kau&ccedil;uk işleme end&uuml;strisinin gelişmesinin ve kau&ccedil;uğun hemen her sekt&ouml;rde kullanılmasının temelinde de bu vardır. Kau&ccedil;uk, daha &ccedil;ok s&uuml;tleğengiller (Euphorbiaceae) familyası bitkilerinde, ayrıca compositae, apocynaceae ve asclepiadaceae familyaları bitkilerinde bulunan l&acirc;teksin (bitkilerde s&uuml;t g&ouml;r&uuml;n&uuml;m&uuml;nde &ouml;zsu) kurutulmasıyla elde edilen &uuml;r&uuml;nd&uuml;r. Kau&ccedil;uğun adı, Amazon b&ouml;lgesi yerlilerinin dilinden gelir (caa-o-cu - ağlayan ağa&ccedil;). Brezilya&#39;da eskiden kurutulmuş bir bal&ccedil;ık kalıp &uuml;st&uuml;nde kat kat s&uuml;r&uuml;len kau&ccedil;uğun pıhtılaştırılması ile ayakkabı yapılıyordu. Lateksin bezler arasında kurutulması ile de, su ge&ccedil;irmez bezler &uuml;retiliyordu. Kau&ccedil;uktan ilk olarak 1530&#39;larda bahsedilmeye başlandı. Daha &ouml;nceleri bilinmiyordu. Modern kau&ccedil;uk imalat end&uuml;strisi ise, kau&ccedil;uğun k&uuml;k&uuml;rtle sertleştirilmesi (vulkonizasyon) işlemiyle başlamıştır (1839). Bu end&uuml;strinin gelişmesi, kau&ccedil;uğun hammaddesinin işlenerek bir&ccedil;ok yerde kullanılmasına sebep oldu. 1839-1840 yıllarında Amerika Birleşik Devletlerinde Goodyear, İngiltere&#39;de Hancock, kau&ccedil;uğu k&uuml;k&uuml;rtle birleştirdiler ve sıcakta yapışkan olmayan, soğukta esnekliğini kaybetmeyen bir madde elde ettiler. Bug&uuml;nk&uuml; lastik tekerlek sanayinin temeli atıldı.<br />\n                &nbsp;</p>\n                \n                <p>Kau&ccedil;uk Tarih&ccedil;esi<br />\n                Konuşma dilimizde &#39;&#39;lastik&#39;&#39; diye adlandırdığımız şey, ham maddesi tropikal ağa&ccedil;lardan elde edilen bitkisel bir &uuml;r&uuml;nd&uuml;r. Bu ağa&ccedil;lardan Brezilya kau&ccedil;uk ağacı (Hevea brasiliensis) adı veri&shy;len bir &ccedil;eşidi ticari &ouml;nem taşır. Brezilya&#39;nın Amazon b&ouml;lgesi ormanlarına has bir bitki olan bu ağa&ccedil;, sonraları Uzak Doğu&#39;ya da g&ouml;t&uuml;r&uuml;lm&uuml;ş, iklim şartları aynı olan bu b&ouml;lgelerde de kolay&shy;lıkla &uuml;retilmiştir. 20 - 30 m. boyunda, yuvarlak g&ouml;vdeli, yaprakları tepesinde k&uuml;melenmiş Brezilya kau&ccedil;uk ağacı, humusu bol yaş topraklarda yetişir. Kau&ccedil;uğu ilk olarak (1940&#39;lı yıllarda) tam anlamıyla g&uuml;nl&uuml;k yaşamımıza sokan kişi kau&ccedil;uğun babası olarak da bilinen Jonhson Goodyear&#39;dir. Ham kau&ccedil;uğa lateks denir.&nbsp;<a href=\'http://tekstilsayfasi.blogspot.com.tr/2013/01/pamuk-fiziksel-kimyasal-ozellikleri.html\' target=\'_blank\'>Pamuk</a>&nbsp;veya viskonla karıştırılarak, kemer korse, lastik &ccedil;orap (varis &ccedil;orabı) yapımında kullanılır. Kau&ccedil;uk, giysi, hortum ve lastik yapmak i&ccedil;in esnek bir maddeye d&ouml;n&uuml;şt&uuml;r&uuml;lebilir. Kau&ccedil;uğun emici &ouml;zellikleri, onu otomobil s&uuml;spansiyonunda kullanışlı madde yapar. Kau&ccedil;uk aynı zamanda end&uuml;striyel maddelerin titreşimlerini de azaltır. Ayrıca kau&ccedil;uktan su ge&ccedil;irmezlik&nbsp;<a href=\'http://tekstilsayfasi.blogspot.com.tr/2014/01/apre-nedir.html\' target=\'_blank\'>apre</a>sinde de faydalanılır. Kau&ccedil;uk suya dayanıklı olduğu i&ccedil;in, dalgı&ccedil; giysilerinde, yağmurluklarda kullanılır. Kau&ccedil;uk iyi bir elektrik yalıtkanıdır ve genellikle elektrik tellerini kaplamada kullanılır. Kau&ccedil;uk, milyonlarca hava kabarcığından oluşan k&ouml;p&uuml;k hale d&ouml;n&uuml;şt&uuml;r&uuml;lebilir. Bu k&ouml;p&uuml;ğe kalıp verilip, s&uuml;nger ve yastık gibi &ccedil;ok sayıda hafif &uuml;r&uuml;n elde edilebilir. Kau&ccedil;uğun elde edilmesine, ilk olarak Brezilya&#39;da başlanmıştır. 19. y&uuml;zyıl başlarında yıllık &uuml;retim 30 tondu. Bug&uuml;n ise sentetik yollarla elde edilen 1 milyon tondan fazla suni kau&ccedil;uk dışında D&uuml;nya doğal kau&ccedil;uk &uuml;retimi yılda 4 milyon tonu bulur. Y&uuml;zyıla yakın bir s&uuml;reden beri kau&ccedil;uk &uuml;retimi, teknik ve end&uuml;stri alanındaki gelişmelerle birlikte y&uuml;r&uuml;m&uuml;ş, bunların ilerlemesine yeni bir hamle vermiştir. Esnekliği, aşınmaya dayanıklılığı, su ge&ccedil;irmezliği kau&ccedil;uğu, modern end&uuml;strinin &ouml;zellikle mekanik ulaştırma tekniğinin en g&ouml;zde maddelerinden biri durumuna getirmiştir.</p>\n                \n                <p>&nbsp;</p>\n                \n                <p>Kau&ccedil;uk Tarihi Kronolojisi;&nbsp;</p>\n                \n                <p>1493 - Amerika&#39;ya yaptığı ikinci yolculuk sırasında Kristof Kolomb, Haiti Adası&#39;nda yerlilerin acayip bir topla oynadıklarını g&ouml;rd&uuml;. Bu &ouml;yle bir toptu ki yere vurduk&ccedil;a zıplıyordu.</p>\n                \n                <p>1521 - Meksika&#39;nın İspanyol egemenliği altında bulunduğu yıl&shy;larda bazı ispanyol gezginleri, yerlilerin elastik bir madde kullan&shy;makta olduklarını g&ouml;rm&uuml;şlerdi. Avrupa&#39;da da bunlara ait &ccedil;e&shy;şitli s&ouml;ylentiler dolaşmaya başlamıştı. Yerlilerin&nbsp;<a href=\'http://tekstilsayfasi.blogspot.com.tr/2012/12/boyar-madde-ve-renk-bilgisi.html\' target=\'_blank\'>renk</a>&nbsp;renk t&uuml;yleri, &shy;bir bitkiden &ccedil;ıkardıkları s&uuml;te benzeyen beyazımsı maddeyle v&uuml;cutlarına yapıştırdıkları, b&ouml;ylece b&uuml;y&uuml;c&uuml; kılığına b&uuml;r&uuml;nd&uuml;k&shy;leri s&ouml;yleniyordu. İ&ccedil;ine ayaklarını batırıp &ccedil;ıkardıkları bu s&uuml;t gibi maddenin kuruduktan sonra &ccedil;arığa benzer bir &ccedil;eşit ayakkabı bi&ccedil;imini aldığı da dolaşan s&ouml;ylentiler arasındaydı.</p>\n                \n                <p>1735 - Charles de la Condamine adında bir Fransız, hi&ccedil;bir Av&shy;rupa&#39;lının karşılaşmadığı bu acayip bitkilerin esrarını &ccedil;&ouml;zmek &uuml;zere Amazon ormanlarına doğru yola &ccedil;ıktı. Yerliler ağaca &#39;g&ouml;z yaşı&#39; anlamına gelen &#39;heve&#39; yahut &#39;cao ochu&#39; adını veriyorlardı. Ser&uuml;venle dolu bir yolculuktan sonra de la Condamine, bu esrarengiz ağacı buldu. Kabuğunu keserek &ccedil;ıkardığı s&uuml;t&uuml; (Iateks = kau&ccedil;uk) kurutup bazı modeller yaptı ve Fransa&#39;ya yolladı. O &ccedil;ağın bilim adamları bu acayip cevheri inceleyip &ccedil;&ouml;z&uuml;mlemeye koyuldular.</p>\n                \n                <p>1763 - Birka&ccedil; Fransız kimyacısı cevheri trebentin yağı ve etere batırıp eritmeyi başardılar. Bu yıllarda lateksin, lastik adı altın&shy;da, m&uuml;rekkep lekelerini kağıt &uuml;zerinden &ccedil;ıkarmak i&ccedil;in silgi ola&shy;rak kullanılmaya başlandığı g&ouml;r&uuml;l&uuml;r.</p>\n                \n                <p>1793 - Peal adında bir İngiliz, kau&ccedil;uğu trebentin i&ccedil;inde eriterek su ge&ccedil;irmez bir madde yapma patentini aldı.</p>\n                \n                <p>1823 - Charles Macintosh adında İsko&ccedil;ya&#39;lı bir kimyacı, su ge&shy;&ccedil;irmez maddelerin yapım metodunu geliştirdi ve lastik eşya yapmak &uuml;zere ilk fabrikayı kurdu. Bug&uuml;n bile İngiltere&#39;de &#39;mackintosh&#39; adıyla anılan su ge&ccedil;irmez&nbsp;<a href=\'http://tekstilsayfasi.blogspot.com.tr/2015/10/hangi-tur-kumaslar-kis-aylari-icin.html\' target=\'_blank\'>pardes&uuml;ler</a>&nbsp;(muşamba) yapılır. Bu ilk lastik eşyanın bazı kusurları vardı: sıcak havaya dayanamayıp eriyor ve &ccedil;abuk eskiyordu. Soğuk havalarda ise sertleşip esnekliğini kaybediyordu.</p>\n                \n                <p>1839 - Charles Goodyear adındaki Amerika&#39;lının bir raslantı sonucu bulduğu sistem, lastik sanayinde devrim yarattı. Goodyear, lateksi ısıtıp k&uuml;k&uuml;rtle işleyerek daha elastiki ve dayanıklı bir duruma getirdi. B&ouml;ylece kau&ccedil;uğa hava şartlarından etkilenmez bir nitelik kazandırdı. Bu işleme, vulkanize etmek denir. K&uuml;&shy;k&uuml;rtleme işlemi, kau&ccedil;uğun kullanılış alanlarını genişlettiği gibi fiyatlarını da artırdı. Kau&ccedil;uk yıllık &uuml;retim 30 ton&shy;dan hızlıca 350 tona y&uuml;kseldi.</p>\n                \n                <p>1873 - İngiltere h&uuml;k&uuml;meti bir d&ouml;nem iklim y&ouml;n&uuml;nden Amazon ormanlarına benzerlik g&ouml;steren s&ouml;m&uuml;rgelerinde kau&ccedil;uk ağa&ccedil;ları yetiştirmeyi d&uuml;ş&uuml;nd&uuml;. Farris adında biri, bu ağa&ccedil;ların tekelini bırakmak istemeyen Brezilya H&uuml;k&uuml;meti g&uuml;mr&uuml;ğ&uuml;nden sıyrılarak 2000 kadar Brezilya kau&ccedil;uk ağacı tohumunu İngiltere&#39;ye ka&ccedil;ırdı. Ama Kalk&uuml;ta&#39;ya getirilen tohumlardan ancak bir d&uuml;zinesi tuttuğu gibi bunlardan s&uuml;rg&uuml;n veren altı tanesi de kuruyup gitti. Bir s&uuml;re sonra Henry Wickham adında bir İngiliz, Brezilya&#39;dan 70.000 tohum ka&ccedil;ırdı. Seylan&#39;a g&ouml;t&uuml;r&uuml;len bu tohumlardan 2.000 tanesi iklime alışarak gelişti. B&uuml;t&uuml;n bu olaylar bir sır perdesi arka&shy;sında cereyan etti.</p>\n                \n                <p>1885 - Afrika&#39;da yetişen, Lastik ağacı (Ficus elastica) adlı bir ağa&ccedil;tan da kau&ccedil;uk elde edildi. B&ouml;ylece yıllık &uuml;retim 4.000 tona ulaşmış oldu.</p>\n                \n                <p>1907 - Hi&ccedil; kimsenin haberi olmaksızın Seylan&#39;da gizli gizli ye&shy;tiştirilen Brezilya kau&ccedil;uk ağa&ccedil;larının tohumları Malezya&#39;ya aktarıldı. H. N. Ridley adındaki İngiliz botanik&ccedil;isinin &ccedil;alışmalarıyla elde edilen başarı sonucu yılda 6.000 tonluk kau&ccedil;uk, D&uuml;nya pazarlarına s&uuml;r&uuml;ld&uuml;. Bu, kolay ve &ccedil;abuk kazan&ccedil;lar sağlayan Brezilya ve Afrika kau&ccedil;uk t&uuml;ccarlarının sonu oldu. Holanda&#39;lıların Endonezya, Amerika&#39;lıların Liberya ve Brezilya, Fransız&#39;ların &Ccedil;in Hindistanı&#39;nda kurdukları kau&ccedil;uk ağacı &ccedil;iftlikleriyle D&uuml;nya kau&ccedil;uk &uuml;retiminde uluslararası bir yarış başladı. Motorlu kara ara&ccedil;larının hızla gelişmesi lastik&nbsp;<a href=\'http://tekstilsayfasi.blogspot.com.tr/2012/11/lastik-nedir-araba-ve-tasit-lastikleri.html\' target=\'_blank\'>tekerlek</a>&nbsp;piyasasını iyice canlandırdı. Kau&ccedil;uk &uuml;retimi başlı başına bir tarım end&uuml;strisi halini aldı. Daha y&uuml;ksek verimli ağa&ccedil; yetiştirilmesi ve tohumla&shy;rın ıslahı yoluna gidildi. Gerek &ccedil;iftliklerin işletimi, gerek lateksin toplanmasında daha ekonomik metodlar ortaya konuldu. Bug&uuml;n ileri end&uuml;stri &uuml;lkelerinde sentetik kau&ccedil;uk yapımı gittik&ccedil;e artmakla birlikte Brezilya kau&ccedil;uk ağa&ccedil;larından &ccedil;ıkarılan doğal kau&ccedil;uk hala &ouml;n planda gelmektedir. D&uuml;nya&#39;da Kau&ccedil;uk &Uuml;retiminde Malezya, Endonezya ve Tayland başta olmak &uuml;zere G&uuml;neydoğu Asya &Uuml;lkeleri s&ouml;z sahibidir.</p>\n            ', '2024-04-03 16:00:35', '2024-04-03 16:00:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_19_102413_create_menus_table', 1),
(6, '2024_03_19_140646_create_footers_table', 1),
(7, '2024_03_20_065428_create_contacts_table', 1),
(8, '2024_03_20_075546_create_media_table', 1),
(9, '2024_03_20_095313_create_photos_table', 1),
(10, '2024_03_20_130936_create_multi_photos_table', 1),
(11, '2024_03_20_144703_create_videos_table', 1),
(12, '2024_03_21_072304_create_blogs_table', 1),
(13, '2024_03_21_110301_create_abouts_table', 1),
(14, '2024_03_21_111836_create_missions_table', 1),
(15, '2024_03_22_072920_create_blogcategories_table', 1),
(16, '2024_03_22_074708_create_blog_blogcategory_table', 1),
(17, '2024_03_22_081920_create_blogphotos_table', 1),
(18, '2024_03_25_151804_create_productcategories_table', 1),
(19, '2024_03_25_160426_create_brands_table', 1),
(20, '2024_03_25_164317_create_products_table', 1),
(21, '2024_03_25_164427_create_product_productcategory_table', 1),
(22, '2024_03_25_164718_create_product_brand_table', 1),
(23, '2024_03_26_150435_create_brand_product_table', 1),
(24, '2024_04_03_124758_create_user_carts_table', 2),
(25, '2024_04_16_143812_create_careers_table', 2),
(26, '2024_04_22_091330_create_sliders_table', 3),
(27, '2026_01_19_233409_create_orders_table', 4),
(28, '2026_01_20_005315_create_best_sellers_table', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `missions`
--

INSERT INTO `missions` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '\n                <p>MİSYON</p>\n\n                <p>45 yıllık deneyimin getirdiği birikimle ve mevcut kaynaklarımızı etkin kullanarak daha kaliteli, rekabet&ccedil;i ve yenilik&ccedil;i &uuml;r&uuml;nler &uuml;retip, kendi sekt&ouml;r&uuml;nde fark yaratan &ouml;nc&uuml; bir imalat&ccedil;ı-ihracat&ccedil;ı firma olmak.</p>\n                \n                <p>VİZYON</p>\n                \n                <p>M&uuml;şterilerimizin değişken talepleri ve ihtiya&ccedil;ları doğrultusunda; mevcut kabiliyetlerimizi geliştirerek ve gerekli adımları atarak uluslararası tanınırlığa ulaşmış bir firma haline gelmek ve konusunda g&uuml;venilir markalardan biri olmaya devam etmek.</p>\n            ', '2024-04-03 16:00:35', '2024-04-03 16:00:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `multi_photos`
--

CREATE TABLE `multi_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `multi_photos`
--

INSERT INTO `multi_photos` (`id`, `photo_id`, `image`, `position`, `created_at`, `updated_at`) VALUES
(2, 10, '/upload/photos/big-5-exhibition-dubai-2021-01712212258.jpg', 1, '2024-04-04 06:30:58', '2024-04-04 06:30:58'),
(3, 10, '/upload/photos/big-5-exhibition-dubai-2021-11712212258.jpg', 2, '2024-04-04 06:30:58', '2024-04-04 06:30:58'),
(4, 10, '/upload/photos/big-5-exhibition-dubai-2021-21712212258.jpg', 3, '2024-04-04 06:30:58', '2024-04-04 06:30:58'),
(5, 10, '/upload/photos/big-5-exhibition-dubai-2021-31712212258.jpg', 4, '2024-04-04 06:30:58', '2024-04-04 06:30:58'),
(6, 10, '/upload/photos/big-5-exhibition-dubai-2021-41712212258.jpg', 5, '2024-04-04 06:30:58', '2024-04-04 06:30:58'),
(7, 10, '/upload/photos/big-5-exhibition-dubai-2021-51712212258.jpg', 6, '2024-04-04 06:30:58', '2024-04-04 06:30:58'),
(8, 9, '/upload/photos/woc-2020-las-vegas-01712213385.jpg', 7, '2024-04-04 06:49:45', '2024-04-04 06:49:45'),
(9, 9, '/upload/photos/woc-2020-las-vegas-11712213385.jpg', 8, '2024-04-04 06:49:45', '2024-04-04 06:49:45'),
(10, 9, '/upload/photos/woc-2020-las-vegas-21712213385.jpg', 9, '2024-04-04 06:49:45', '2024-04-04 06:49:45'),
(11, 9, '/upload/photos/woc-2020-las-vegas-31712213385.jpg', 10, '2024-04-04 06:49:45', '2024-04-04 06:49:45'),
(12, 9, '/upload/photos/woc-2020-las-vegas-41712213385.jpg', 11, '2024-04-04 06:49:45', '2024-04-04 06:49:45'),
(13, 8, '/upload/photos/excon-2019-biec-bengaluru-hindistan-01712213563.jpg', 12, '2024-04-04 06:52:43', '2024-04-04 06:52:43'),
(14, 8, '/upload/photos/excon-2019-biec-bengaluru-hindistan-11712213563.png', 13, '2024-04-04 06:52:43', '2024-04-04 06:52:43'),
(15, 8, '/upload/photos/excon-2019-biec-bengaluru-hindistan-21712213563.png', 14, '2024-04-04 06:52:43', '2024-04-04 06:52:43'),
(16, 8, '/upload/photos/excon-2019-biec-bengaluru-hindistan-31712213563.jpg', 15, '2024-04-04 06:52:43', '2024-04-04 06:52:43'),
(17, 8, '/upload/photos/excon-2019-biec-bengaluru-hindistan-41712213563.png', 16, '2024-04-04 06:52:43', '2024-04-04 06:52:43'),
(18, 8, '/upload/photos/excon-2019-biec-bengaluru-hindistan-51712213563.jpg', 17, '2024-04-04 06:52:43', '2024-04-04 06:52:43'),
(19, 8, '/upload/photos/excon-2019-biec-bengaluru-hindistan-61712213563.png', 18, '2024-04-04 06:52:43', '2024-04-04 06:52:43'),
(20, 8, '/upload/photos/excon-2019-biec-bengaluru-hindistan-71712213563.png', 19, '2024-04-04 06:52:43', '2024-04-04 06:52:43'),
(21, 7, '/upload/photos/the-big-5-heavy-dubai-2019-01712213711.jpg', 20, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(22, 7, '/upload/photos/the-big-5-heavy-dubai-2019-11712213711.jpg', 21, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(23, 7, '/upload/photos/the-big-5-heavy-dubai-2019-21712213711.jpg', 22, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(24, 7, '/upload/photos/the-big-5-heavy-dubai-2019-31712213711.jpg', 23, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(25, 7, '/upload/photos/the-big-5-heavy-dubai-2019-41712213711.jpg', 24, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(26, 7, '/upload/photos/the-big-5-heavy-dubai-2019-51712213711.jpg', 25, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(27, 7, '/upload/photos/the-big-5-heavy-dubai-2019-61712213711.jpg', 26, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(28, 7, '/upload/photos/the-big-5-heavy-dubai-2019-71712213711.jpg', 27, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(29, 7, '/upload/photos/the-big-5-heavy-dubai-2019-81712213711.jpg', 28, '2024-04-04 06:55:11', '2024-04-04 06:55:11'),
(30, 6, '/upload/photos/bauma-2019-01712213758.jpeg', 29, '2024-04-04 06:55:58', '2024-04-04 06:55:58'),
(31, 6, '/upload/photos/bauma-2019-11712213758.jpeg', 30, '2024-04-04 06:55:58', '2024-04-04 06:55:58'),
(32, 6, '/upload/photos/bauma-2019-21712213758.jpeg', 31, '2024-04-04 06:55:58', '2024-04-04 06:55:58'),
(33, 6, '/upload/photos/bauma-2019-31712213758.jpeg', 32, '2024-04-04 06:55:58', '2024-04-04 06:55:58'),
(34, 5, '/upload/photos/world-of-concrete-2019-01712213808.jpeg', 33, '2024-04-04 06:56:48', '2024-04-04 06:56:48'),
(35, 5, '/upload/photos/world-of-concrete-2019-11712213808.jpeg', 34, '2024-04-04 06:56:48', '2024-04-04 06:56:48'),
(36, 5, '/upload/photos/world-of-concrete-2019-21712213808.jpeg', 35, '2024-04-04 06:56:48', '2024-04-04 06:56:48'),
(37, 5, '/upload/photos/world-of-concrete-2019-31712213808.jpeg', 36, '2024-04-04 06:56:48', '2024-04-04 06:56:48'),
(38, 5, '/upload/photos/world-of-concrete-2019-41712213808.jpeg', 37, '2024-04-04 06:56:48', '2024-04-04 06:56:48'),
(39, 4, '/upload/photos/world-of-concrete-2018-01712213861.png', 38, '2024-04-04 06:57:41', '2024-04-04 06:57:41'),
(40, 4, '/upload/photos/world-of-concrete-2018-11712213861.jpeg', 39, '2024-04-04 06:57:41', '2024-04-04 06:57:41'),
(41, 4, '/upload/photos/world-of-concrete-2018-21712213861.jpeg', 40, '2024-04-04 06:57:41', '2024-04-04 06:57:41'),
(42, 4, '/upload/photos/world-of-concrete-2018-31712213861.jpeg', 41, '2024-04-04 06:57:41', '2024-04-04 06:57:41'),
(43, 4, '/upload/photos/world-of-concrete-2018-41712213861.jpg', 42, '2024-04-04 06:57:41', '2024-04-04 06:57:41'),
(44, 3, '/upload/photos/samoter-2017-01712213897.jpg', 43, '2024-04-04 06:58:17', '2024-04-04 06:58:17'),
(45, 3, '/upload/photos/samoter-2017-11712213897.jpg', 44, '2024-04-04 06:58:17', '2024-04-04 06:58:17'),
(46, 2, '/upload/photos/bauma-2016-01712214015.jpg', 45, '2024-04-04 07:00:15', '2024-04-04 07:00:15'),
(47, 2, '/upload/photos/bauma-2016-11712214015.jpg', 46, '2024-04-04 07:00:15', '2024-04-04 07:00:15'),
(48, 2, '/upload/photos/bauma-2016-21712214015.jpg', 47, '2024-04-04 07:00:15', '2024-04-04 07:00:15'),
(49, 1, '/upload/photos/beton-pompasi-yedekleri-01712214055.jpg', 48, '2024-04-04 07:00:55', '2024-04-04 07:00:55'),
(50, 1, '/upload/photos/beton-pompasi-yedekleri-11712214055.jpg', 49, '2024-04-04 07:00:55', '2024-04-04 07:00:55'),
(51, 1, '/upload/photos/beton-pompasi-yedekleri-21712214055.jpg', 50, '2024-04-04 07:00:55', '2024-04-04 07:00:55'),
(52, 1, '/upload/photos/beton-pompasi-yedekleri-31712214055.jpg', 51, '2024-04-04 07:00:55', '2024-04-04 07:00:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `status` enum('new','read','completed') NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `name`, `title`, `company`, `phone`, `email`, `country`, `message`, `ip_address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fatih avcı', 'patron', 'avcı holding', '05531105200', '66fatihavci@gmail.com', 'Türkiye', 'Merhaba bu bir test teklifidir', '127.0.0.1', 'read', '2026-01-19 21:15:46', '2026-01-19 21:39:00'),
(2, 'rwar', NULL, NULL, '05531105200', 'rwarara@tes', 'testt', NULL, '127.0.0.1', 'read', '2026-01-19 21:19:48', '2026-01-19 21:36:17'),
(3, 'dadasdadada', NULL, NULL, '05554444444', 'disdanisman@gmail.com', 'Türkiye', NULL, '127.0.0.1', 'completed', '2026-01-19 21:20:33', '2026-01-19 21:39:07'),
(4, 'fatih avcı', 'ceo', 'avcı aş', '05554444444', '66fatihavci@gmail.com', 'Türkiye', 'teklif', '127.0.0.1', 'new', '2026-01-19 21:44:24', '2026-01-19 21:44:24'),
(5, 'ada dada', 'adadada', 'Acme A.Ş.', '05554444444', 'info@lineupcampus.com', 'Türkiye', 'adsadadadaa', '127.0.0.1', 'new', '2026-01-19 21:48:13', '2026-01-19 21:48:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `product_code`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 21, 'deneme', '6545', 3, '2026-01-19 21:15:46', '2026-01-19 21:15:46'),
(2, 1, 3, 'Piston Takozu', '008601', 1, '2026-01-19 21:15:46', '2026-01-19 21:15:46'),
(3, 1, 8, 'BALANS KAPLİNİ', '009706', 3, '2026-01-19 21:15:46', '2026-01-19 21:15:46'),
(4, 1, 7, 'ŞAPKALI SARI BURÇ', '008512', 1, '2026-01-19 21:15:46', '2026-01-19 21:15:46'),
(5, 2, 8, 'BALANS KAPLİNİ', '009706', 1, '2026-01-19 21:19:48', '2026-01-19 21:19:48'),
(6, 2, 9, 'FORD SÜSPANSİYON TAKOZU', '009721', 1, '2026-01-19 21:19:48', '2026-01-19 21:19:48'),
(7, 2, 10, 'OLUK AYAĞI', '009708', 1, '2026-01-19 21:19:48', '2026-01-19 21:19:48'),
(8, 3, 21, 'deneme', '6545', 1, '2026-01-19 21:20:33', '2026-01-19 21:20:33'),
(9, 4, 21, 'deneme', '6545', 1, '2026-01-19 21:44:24', '2026-01-19 21:44:24'),
(10, 4, 3, 'Piston Takozu', '008601', 2, '2026-01-19 21:44:24', '2026-01-19 21:44:24'),
(11, 5, 9, 'FORD SÜSPANSİYON TAKOZU', '009721', 1, '2026-01-19 21:48:13', '2026-01-19 21:48:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_tr` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `short_description_tr` varchar(255) NOT NULL,
  `short_description_en` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `slug_tr` varchar(255) NOT NULL,
  `slug_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `photos`
--

INSERT INTO `photos` (`id`, `image`, `name_tr`, `name_en`, `short_description_tr`, `short_description_en`, `position`, `slug_tr`, `slug_en`, `created_at`, `updated_at`) VALUES
(1, '/upload/photos/beton-pompasi-yedekleri.jpg', 'Beton Pompası Yedekleri', 'Beton Pompası Yedekleri', 'Beton Pompası Yedekleri', 'Beton Pompası Yedekleri', 10, 'beton-pompasi-yedekleri', 'beton-pompasi-yedekleri', '2024-04-03 17:47:24', '2024-07-22 08:28:57'),
(2, '/upload/photos/bauma-2016.jpg', 'BAUMA 2016', 'BAUMA 2016', 'BAUMA 2016', 'BAUMA 2016', 9, 'bauma-2016', 'bauma-2016', '2024-04-03 17:48:41', '2024-07-22 08:27:24'),
(3, '/upload/photos/samoter-2017.jpg', 'SAMOTER 2017', 'SAMOTER 2017', 'SAMOTER 2017', 'SAMOTER 2017', 8, 'samoter-2017', 'samoter-2017', '2024-04-03 17:48:57', '2024-07-22 08:27:18'),
(4, '/upload/photos/world-of-concrete-2018.png', 'WORLD OF CONCRETE 2018', 'WORLD OF CONCRETE 2018', 'WORLD OF CONCRETE 2018', 'WORLD OF CONCRETE 2018', 7, 'world-of-concrete-2018', 'world-of-concrete-2018', '2024-04-03 17:49:18', '2024-07-22 08:27:13'),
(5, '/upload/photos/world-of-concrete-2019.jpeg', 'World Of Concrete 2019', 'World Of Concrete 2019', 'World Of Concrete 2019', 'World Of Concrete 2019', 6, 'world-of-concrete-2019', 'world-of-concrete-2019', '2024-04-03 17:55:51', '2024-07-22 08:27:08'),
(6, '/upload/photos/bauma-2019.jpeg', 'BAUMA 2019', 'BAUMA 2019', 'BAUMA 2019', 'BAUMA 2019', 5, 'bauma-2019', 'bauma-2019', '2024-04-03 17:56:15', '2024-07-22 08:27:03'),
(7, '/upload/photos/the-big-5-heavy-dubai-2019.jpg', 'The Big 5 Heavy Dubai 2019', 'The Big 5 Heavy Dubai 2019', 'The Big 5 Heavy Dubai 2019', 'The Big 5 Heavy Dubai 2019', 4, 'the-big-5-heavy-dubai-2019', 'the-big-5-heavy-dubai-2019', '2024-04-03 17:56:45', '2024-07-22 08:26:58'),
(8, '/upload/photos/excon-2019-biec-bengaluru-hindistan.jpg', 'EXCON 2019 BIEC BENGALURU HİNDİSTAN', 'EXCON 2019 BIEC BENGALURU HİNDİSTAN', 'EXCON 2019 BIEC BENGALURU HİNDİSTAN', 'EXCON 2019 BIEC BENGALURU HİNDİSTAN', 3, 'excon-2019-biec-bengaluru-hindistan', 'excon-2019-biec-bengaluru-hindistan', '2024-04-03 17:57:11', '2024-07-22 08:26:53'),
(9, '/upload/photos/woc-2020-las-vegas.jpg', 'WOC 2020 LAS VEGAS', 'WOC 2020 LAS VEGAS', 'WOC 2020 LAS VEGAS', 'WOC 2020 LAS VEGAS', 2, 'woc-2020-las-vegas', 'woc-2020-las-vegas', '2024-04-03 17:57:34', '2024-07-22 08:26:27'),
(10, '/upload/photos/big-5-exhibition-dubai-2021.jpg', 'Big 5 Exhibition Dubai 2021', 'Big 5 Exhibition Dubai 2021', 'Big 5 Exhibition Dubai 2021', 'Big 5 Exhibition Dubai 2021', 1, 'big-5-exhibition-dubai-2021', 'big-5-exhibition-dubai-2021', '2024-04-03 17:57:57', '2024-07-22 08:26:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `productcategories`
--

CREATE TABLE `productcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_tr` varchar(91) NOT NULL,
  `name_en` varchar(91) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `slug_tr` varchar(135) NOT NULL,
  `slug_en` varchar(135) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `productcategories`
--

INSERT INTO `productcategories` (`id`, `image`, `name_tr`, `name_en`, `category_id`, `slug_tr`, `slug_en`, `created_at`, `updated_at`) VALUES
(12, '/upload/product-category/.jpg', 'Beton Pompası Yedekleri', 'Concrete Pumps Spares', NULL, 'beton-pompasi-yedekleri', 'concrete-pumps-spares', '2024-04-17 07:53:53', '2024-09-16 09:29:42'),
(13, '/upload/product-category/putzmeister.png', 'PUTZMEISTER', 'PUTZMEISTER', 12, 'putzmeister', 'putzmeister', '2024-04-17 07:54:07', '2024-07-18 19:02:33'),
(14, '/upload/product-category/sermac.png', 'SERMAC', 'SERMAC', 12, 'sermac', 'sermac', '2024-04-17 07:54:24', '2024-07-22 15:01:27'),
(15, '/images/mikser-yedekleri.jpg', 'Mikser Yedekleri', 'Concrete Truck Mixers Spares', NULL, 'mikser-yedekleri', 'concrete-truck-mixers-spares', '2024-04-17 07:55:30', '2024-07-18 18:35:18'),
(16, '/upload/product-category/mikserler-beton.jpg', 'Mikserler (Beton)', 'Mixer (Concrete)', 15, 'mikserler-beton', 'mixer-concrete', '2024-04-17 07:58:11', '2024-07-22 15:03:41'),
(17, '/images/asfalt-makine-yedekleri.jpg', 'Asfalt Makineleri Yedekleri', 'Asphalt Machinery Spares', NULL, 'asfalt-makineleri-yedekleri', 'asphalt-machinery-spares', '2024-04-17 08:09:19', '2024-07-18 18:35:32'),
(18, '/images/no-image.png', 'Finisher Yedekleri', 'Finishers Spare', 17, 'finisher-yedekleri', 'finishers-spare', '2024-04-17 08:09:31', '2024-07-22 15:04:04'),
(19, '/upload/product-category/silindir-takozlari.jpg', 'Silindir Takozları', 'Roller Mountings', 17, 'silindir-takozlari', 'roller-mountings', '2024-04-17 08:27:45', '2024-07-22 15:04:21'),
(20, '/upload/product-category/schwing.png', 'SCHWING', 'SCHWING', 12, 'schwing', 'schwing', '2024-04-17 13:11:47', '2024-07-22 15:01:37'),
(21, '/upload/product-category/cifa.png', 'CIFA', 'CIFA', 12, 'cifa', 'cifa', '2024-04-17 13:12:12', '2024-07-22 15:01:50'),
(22, '/upload/product-category/junjin.png', 'JUNJIN', 'JUNJIN', 12, 'junjin', 'junjin', '2024-04-17 13:12:34', '2024-07-22 15:01:59'),
(23, '/upload/product-category/zoomlion.png', 'ZOOMLION', 'ZOOMLION', 12, 'zoomlion', 'zoomlion', '2024-04-17 13:14:32', '2024-07-22 15:02:09'),
(24, '/upload/product-category/reich.jpg', 'REICH', 'REICH', 12, 'reich', 'reich', '2024-04-17 13:15:00', '2024-07-22 15:02:19'),
(25, '/images/no-image.png', 'WAITZINGER', 'WAITZINGER', 12, 'waitzinger', 'waitzinger', '2024-04-17 13:15:16', '2024-07-22 15:02:30'),
(26, '/upload/product-category/wibau-diger.jpg', 'WIBAU-DİĞER', 'WIBAU-OTHER', 12, 'wibau-diger', 'wibau-other', '2024-04-17 13:15:37', '2024-07-22 15:02:54'),
(27, '/upload/product-category/beton-pompalari-yedek-parcalari.jpg', 'Beton Pompaları Yedek Parçaları', 'Concrete Pump Spares', 12, 'beton-pompalari-yedek-parcalari', 'concrete-pump-spares', '2024-04-17 13:15:54', '2024-07-22 15:03:12'),
(28, '/images/is-makineleri-yedek-parcalari.jpg', 'İş Makineleri Yedek Parçaları', 'Earth Moving Machines Spare Parts', NULL, 'is-makineleri-yedek-parcalari', 'earth-moving-machines-spare-parts', '2024-04-17 13:17:29', '2024-07-20 10:02:04'),
(29, '/upload/product-category/for-volvo.png', 'for VOLVO', 'VOLVO', 28, 'for-volvo', 'volvo', '2024-04-17 13:18:01', '2024-07-22 15:05:04'),
(30, '/upload/product-category/tamrock.jpeg', 'TAMROCK', 'TAMROCK', 28, 'tamrock', 'tamrock', '2024-04-17 13:18:21', '2024-07-22 15:05:19'),
(31, '/upload/product-category/caterpillar.png', 'CATERPILLAR', 'CATERPILLAR', 28, 'caterpillar', 'caterpillar', '2024-04-17 13:18:40', '2024-07-22 15:05:30'),
(32, '/upload/product-category/atlas-copco.png', 'ATLAS COPCO', 'ATLAS COPCO', 28, 'atlas-copco', 'atlas-copco', '2024-04-17 13:18:55', '2024-07-22 15:05:41'),
(33, '/upload/product-category/yol-supurme.jpg', 'Yol Süpürme', 'Road Cleaning Machine Spares', 28, 'yol-supurme', 'road-cleaning-machine-spares', '2024-04-17 13:19:10', '2024-07-22 15:05:59'),
(34, '/images/kaplinler.png', 'Kaplinler', 'Couplings', NULL, 'kaplinler', 'couplings', '2024-04-17 13:19:22', '2024-07-20 10:12:47'),
(36, '/upload/product-category/kaplin.jpg', 'Kaplin', 'Coupling', 34, 'kaplin', 'coupling', '2024-04-17 13:27:38', '2024-07-22 15:06:26'),
(37, '/upload/product-category/elek-takozlari.jpg', 'Özel İmalatlar', 'Special Products', NULL, 'ozel-imalatlar', 'special-products', '2024-04-17 13:28:09', '2024-07-20 10:12:57'),
(38, '/upload/product-category/ozel-imalat.jpg', 'Özel İmalat', 'Special Production', 37, 'ozel-imalat', 'special-production', '2024-04-17 13:28:35', '2024-07-22 15:06:49'),
(39, '/images/no-image.png', 'Takozlar', 'Mountings', NULL, 'takozlar', 'mountings', '2024-04-17 13:29:19', '2024-07-20 10:13:11'),
(40, '/upload/product-category/dayama-takozlari.jpg', 'Dayama Takozları', 'Mountings', 39, 'dayama-takozlari', 'mountings', '2024-04-17 13:29:44', '2024-07-22 15:07:05'),
(41, '/upload/product-category/motor-kulak-takozlari.jpg', 'Motor Kulak Takozları', 'Engine Mountings', 39, 'motor-kulak-takozlari', 'engine-mountings', '2024-04-17 13:30:00', '2024-07-22 15:07:20'),
(42, '/upload/product-category/elek-takozlari.jpg', 'Elek Takozları', 'Screening Mountings', 39, 'elek-takozlari', 'screening-mountings', '2024-04-17 13:30:17', '2024-07-22 15:08:35'),
(43, '/images/no-image.png', 'Çakıcı Takozlar', 'Mounts For Hammers', 39, 'cakici-takozlar', 'mounts-for-hammers', '2024-04-17 13:30:31', '2024-07-22 15:08:51'),
(47, '/upload/product-category/.jpg', 'dene', 'dene', NULL, 'dene', 'dene', '2024-10-08 09:48:28', '2024-10-08 09:48:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_tr` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `description_tr` text DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `original_no` varchar(255) DEFAULT NULL,
  `gyp_code` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `slug_tr` varchar(255) NOT NULL,
  `slug_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `image`, `name_tr`, `name_en`, `description_tr`, `description_en`, `original_no`, `gyp_code`, `size`, `slug_tr`, `slug_en`, `created_at`, `updated_at`) VALUES
(3, '/upload/products/piston-takozu.jpg', 'Piston Takozu', 'PISTON RAM', '<p>Piston Takozu</p>', NULL, '019033-000', '008601', '180', 'piston-takozu', 'piston-ram', '2024-04-17 08:30:21', '2024-07-19 15:43:50'),
(4, '/upload/products/bezli-piston-takozu.jpg', 'Bezli Piston Takozu', 'PISTON SEAL', '<p>BEZLİ PİSTON TAKOZU</p>', NULL, NULL, '008622', '150', 'bezli-piston-takozu', 'piston-seal', '2024-04-17 08:36:54', '2024-07-19 15:43:25'),
(5, '/upload/products/karistirici-conta.jpg', 'Karıştırıcı Conta', 'BEARING FLANGE SEAL ( CONIC )', '<p>KARIŞTIRICI CONTA</p>', NULL, NULL, '008605', '35', 'karistirici-conta', 'bearing-flange-seal-conic', '2024-04-17 08:39:23', '2024-07-19 15:43:03'),
(6, '/upload/products/s-tup-bogaz-kecesi.jpg', 'S Tüp Boğaz Keçesi', 'S-VALVE SEAL (GASKET)', '<p>S T&uuml;p Boğaz Ke&ccedil;esi</p>', NULL, '1261028', '008503', NULL, 's-tup-bogaz-kecesi', 's-valve-seal-gasket', '2024-04-17 08:41:05', '2024-07-19 15:42:39'),
(7, '/upload/products/sapkali-sari-burc.jpg', 'ŞAPKALI SARI BURÇ', 'BUSHING', '<p>ŞAPKALI SARI BUR&Ccedil;</p>', NULL, '1071085', '008512', NULL, 'sapkali-sari-burc', 'bushing', '2024-04-17 08:44:08', '2024-07-19 15:42:16'),
(8, '/upload/products/balans-kaplini.jpg', 'BALANS KAPLİNİ', 'BALANCE COUPLING', NULL, NULL, NULL, '009706', NULL, 'balans-kaplini', 'balance-coupling', '2024-04-17 08:47:57', '2024-07-19 15:41:37'),
(9, '/upload/products/ford-suspansiyon-takozu.jpg', 'FORD SÜSPANSİYON TAKOZU', 'SUSPENSION MOUNTINGS FOR FORD', NULL, NULL, 'KTCC485B878AA', '009721', NULL, 'ford-suspansiyon-takozu', 'suspension-mountings-for-ford', '2024-04-17 08:48:42', '2024-07-19 15:41:19'),
(10, '/upload/products/oluk-ayagi.jpg', 'OLUK AYAĞI', 'CHUTE HOLDER', NULL, NULL, NULL, '009708', NULL, 'oluk-ayagi', 'chute-holder', '2024-04-17 08:50:05', '2024-07-19 15:40:58'),
(11, '/images/no-image.png', 'Palet Pabucu', 'TRACK PAD', NULL, NULL, '97371173 952613279 952666855', '009601', NULL, 'palet-pabucu', 'track-pad', '2024-04-17 08:51:35', '2024-07-19 15:40:39'),
(12, '/upload/products/plate.jpg', 'PLATE', 'PLATE', NULL, NULL, NULL, '009611', NULL, 'plate', 'plate', '2024-04-17 08:55:05', '2024-07-19 15:40:13'),
(13, '/upload/products/terazi-takozu.jpg', 'TERAZİ TAKOZU', 'MOUNTING', NULL, NULL, NULL, '009605', NULL, 'terazi-takozu', 'mounting', '2024-04-17 08:55:43', '2024-07-19 15:34:48'),
(16, '/upload/products/titresim-takozu.jpg', 'Titreşim Takozu', 'VIBRATION MOUNT', NULL, NULL, '04010-22019', '011001', '1802-1102', 'titresim-takozu', 'vibration-mount', '2024-04-17 09:03:38', '2024-07-19 15:34:26'),
(18, '/upload/products/kabin-takozu.jpg', 'KABİN TAKOZU', 'Rubber Cabin Vibration', NULL, NULL, '02622-50228', '011017', NULL, 'kabin-takozu', 'rubber-cabin-vibration', '2024-04-17 09:05:12', '2024-07-19 15:33:40'),
(21, '/upload/products/deneme-1728481198.jpg', 'deneme', 'trying', '<p>t&uuml;rk&ccedil;e a&ccedil;ıklama</p>', '<p>english introduction</p>', '96699669', '6545', '56*56*6', 'deneme', 'trying', '2024-10-09 13:39:58', '2024-10-09 13:39:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_brand`
--

CREATE TABLE `product_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_productcategory`
--

CREATE TABLE `product_productcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `productcategory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `product_productcategory`
--

INSERT INTO `product_productcategory` (`id`, `product_id`, `productcategory_id`, `created_at`, `updated_at`) VALUES
(3, 3, 13, NULL, NULL),
(4, 4, 13, NULL, NULL),
(5, 5, 13, NULL, NULL),
(6, 6, 14, NULL, NULL),
(7, 7, 14, NULL, NULL),
(8, 8, 16, NULL, NULL),
(9, 9, 16, NULL, NULL),
(10, 10, 16, NULL, NULL),
(11, 11, 18, NULL, NULL),
(12, 12, 18, NULL, NULL),
(13, 13, 18, NULL, NULL),
(16, 16, 19, NULL, NULL),
(18, 18, 19, NULL, NULL),
(22, 21, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_tr` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `short_description_tr` varchar(255) NOT NULL,
  `short_description_en` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `name_tr`, `name_en`, `short_description_tr`, `short_description_en`, `position`, `created_at`, `updated_at`) VALUES
(4, '/upload/sliders/1719326907.jpg', 'Slider 1 tr', 'Slider 1 en', 'lorem ipsum tr', 'lorem ipsum en', 1, '2024-06-24 16:53:02', '2024-07-18 16:39:50'),
(5, '/upload/sliders/1719326918.jpg', 'Slider 2', '', 'lorem ipsum', '', 2, '2024-06-24 16:54:26', '2024-06-25 14:48:38'),
(6, '/upload/sliders/1719326927.jpg', 'Slider 3', '', 'lorem ipsum', '', 3, '2024-06-24 16:54:58', '2024-06-25 14:48:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(105) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$pJV6yZvgkM/86yk0YdYKuOTevkCiiP5odJnyTplrBI0iJjf5D9Gp6', 'admin', NULL, '2024-04-03 16:00:35', '2025-01-07 07:41:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_carts`
--

CREATE TABLE `user_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_tr` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `short_description_tr` varchar(255) NOT NULL,
  `short_description_en` varchar(255) NOT NULL,
  `video_tr` text NOT NULL,
  `video_en` text NOT NULL,
  `slug_tr` varchar(255) NOT NULL,
  `slug_en` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `videos`
--

INSERT INTO `videos` (`id`, `image`, `name_tr`, `name_en`, `short_description_tr`, `short_description_en`, `video_tr`, `video_en`, `slug_tr`, `slug_en`, `position`, `created_at`, `updated_at`) VALUES
(1, '/upload/videos/gulhan-movie-2016.jpg', 'GULHAN MOVIE 2016', 'GULHAN MOVIE 2016', 'Üretim', 'Manufacture', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/OzZjptj9AF8?si=t6rEWCaM8cWPA00_\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/OzZjptj9AF8?si=t6rEWCaM8cWPA00_\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'gulhan-movie-2016', 'gulhan-movie-2016', 6, '2024-04-03 18:10:32', '2024-09-13 14:52:29'),
(2, '/upload/videos/science-life.jpg', 'SCIENCE & LIFE', 'SCIENCE & LIFE', 'Üretim', 'Manufacture', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wiza-77UNoo?si=GmrC0Hj9PgbvOOPU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wiza-77UNoo?si=GmrC0Hj9PgbvOOPU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'science-life', 'science-life', 5, '2024-04-03 18:11:17', '2024-09-13 14:52:18'),
(3, '/upload/videos/gulhan-spare-parts-2022-institutional-film.jpg', 'Gulhan Spare Parts 2022 INSTITUTIONAL FILM', 'Gulhan Spare Parts 2022 INSTITUTIONAL FILM', 'Üretim', 'Manufacture', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/X6CZPInhRxI?si=Qz4Moq_2fwmoknNc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/X6CZPInhRxI?si=Qz4Moq_2fwmoknNc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'gulhan-spare-parts-2022-institutional-film', 'gulhan-spare-parts-2022-institutional-film', 4, '2024-04-03 18:11:52', '2024-09-13 14:52:09'),
(4, '/upload/videos/intro.jpg', 'Intro', 'Intro', 'Üretim', 'Manufacture', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JIVjJKmMv_s?si=ABF1X2uSnmBqfSEZ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JIVjJKmMv_s?si=ABF1X2uSnmBqfSEZ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'intro', 'intro', 3, '2024-04-03 18:12:20', '2024-09-13 14:51:50'),
(5, '/upload/videos/piston-takozu-uretimi.jpg', 'PİSTON TAKOZU ÜRETİMİ', 'PISTON RAM MANUFACTURE', 'Üretim', 'Manufacture', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TroR_yeBfK0?si=J7-j67j84wTjQYLB\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TroR_yeBfK0?si=J7-j67j84wTjQYLB\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'piston-takozu-uretimi', 'piston-ram-manufacture', 2, '2024-04-03 18:13:11', '2024-09-13 14:51:31'),
(6, '/upload/videos/lojistik-departmani.jpg', 'Lojistik Departmanı', 'Ligistic Department', 'Üretim', 'Manufacture', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7EHAkVHyL2Q?si=Y9gQWrA_Thz3I10l\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7EHAkVHyL2Q?si=Y9gQWrA_Thz3I10l\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'lojistik-departmani', 'ligistic-department', 1, '2024-04-03 18:13:30', '2024-09-13 14:47:09');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `best_sellers`
--
ALTER TABLE `best_sellers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `best_sellers_product_id_foreign` (`product_id`);

--
-- Tablo için indeksler `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogphotos`
--
ALTER TABLE `blogphotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogphotos_blog_id_foreign` (`blog_id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blog_blogcategory`
--
ALTER TABLE `blog_blogcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_blogcategory_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_blogcategory_blogcategory_id_foreign` (`blogcategory_id`);

--
-- Tablo için indeksler `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `brand_product`
--
ALTER TABLE `brand_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_product_brand_id_foreign` (`brand_id`),
  ADD KEY `brand_product_product_id_foreign` (`product_id`);

--
-- Tablo için indeksler `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `multi_photos`
--
ALTER TABLE `multi_photos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Tablo için indeksler `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_brand_product_id_foreign` (`product_id`),
  ADD KEY `product_brand_brand_id_foreign` (`brand_id`);

--
-- Tablo için indeksler `product_productcategory`
--
ALTER TABLE `product_productcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_productcategory_product_id_foreign` (`product_id`),
  ADD KEY `product_productcategory_productcategory_id_foreign` (`productcategory_id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `user_carts`
--
ALTER TABLE `user_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_carts_user_id_foreign` (`user_id`),
  ADD KEY `user_carts_product_id_foreign` (`product_id`);

--
-- Tablo için indeksler `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `best_sellers`
--
ALTER TABLE `best_sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `blogphotos`
--
ALTER TABLE `blogphotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `blog_blogcategory`
--
ALTER TABLE `blog_blogcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `brand_product`
--
ALTER TABLE `brand_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `multi_photos`
--
ALTER TABLE `multi_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `product_productcategory`
--
ALTER TABLE `product_productcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `user_carts`
--
ALTER TABLE `user_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `best_sellers`
--
ALTER TABLE `best_sellers`
  ADD CONSTRAINT `best_sellers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `blogphotos`
--
ALTER TABLE `blogphotos`
  ADD CONSTRAINT `blogphotos_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `blog_blogcategory`
--
ALTER TABLE `blog_blogcategory`
  ADD CONSTRAINT `blog_blogcategory_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_blogcategory_blogcategory_id_foreign` FOREIGN KEY (`blogcategory_id`) REFERENCES `blogcategories` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `brand_product`
--
ALTER TABLE `brand_product`
  ADD CONSTRAINT `brand_product_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `brand_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Tablo kısıtlamaları `product_brand`
--
ALTER TABLE `product_brand`
  ADD CONSTRAINT `product_brand_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_brand_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `product_productcategory`
--
ALTER TABLE `product_productcategory`
  ADD CONSTRAINT `product_productcategory_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_productcategory_productcategory_id_foreign` FOREIGN KEY (`productcategory_id`) REFERENCES `productcategories` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `user_carts`
--
ALTER TABLE `user_carts`
  ADD CONSTRAINT `user_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `productcategories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
