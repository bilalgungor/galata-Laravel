-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ağu 2020, 16:36:27
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `galata`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_content` text COLLATE utf8mb4_unicode_ci,
  `about_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `about_title`, `about_content`, `about_file`, `about_twitter`, `about_facebook`, `about_instagram`, `about_linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Galata İhracat Danışmanlık', '<p>Firmamız, Rusya pazarından ithal etmek istenilen &uuml;r&uuml;nlerin sağlanmasında ve T&uuml;rkiye&rsquo;de her hangi bir &uuml;r&uuml;n &uuml;retmekte olan ve &uuml;r&uuml;nlerini Rusya&rsquo;ya ihra&ccedil; etmek isteyen şirketlere bununla ilgili gerekli t&uuml;m &ccedil;alışmalarda ve aynı zamanda Rusya kapılarının a&ccedil;ılmasında b&uuml;y&uuml;k rol oynayan ticari ilişkilerin kurulması &uuml;zerine danışmanlık hizmeti vermektedir. İstanbul Kocaeli ve Maykop ofislerimizde tamamı bu işin uzmanı olan ve tamamına yakını Rus&ccedil;a konuşan ekibimizle &uuml;r&uuml;nlerinizin Rusya&rsquo;da dijital ve fiziki olarak pazarlanması, satışı ve satış sonrası desteği i&ccedil;in sizlerin hizmetinizdeyiz. Konularında tecr&uuml;beli ekiplerimizle, pazara yeni girecek firmalara, zaman, emek ve para tasarrufu sağlayarak, bilgi ve deneyimlerimizi paylaşarak sizlere de destek olmaktan mutluluk duyacağımızı belirtmek isteriz.</p>', '5e2f954e9efd9.jpg', 'twitter', 'facebook', 'instagram', NULL, NULL, '2020-01-27 22:58:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci,
  `blog_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_title`, `customer_content`, `created_at`, `updated_at`) VALUES
(1, 'Bilal', 'SD', '<p>Harika</p>', NULL, NULL),
(2, 'Halil', 'Zanaatkar', '<p>Fevkalade</p>', NULL, NULL),
(3, 'Anıl', 'Psiko', '<p>Hmm</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_10_224854_create_pages_table', 1),
(5, '2019_12_12_164255_create_abouts_table', 2),
(6, '2019_12_12_180214_create_staff_table', 3),
(7, '2020_01_17_212341_create_blogs_table', 4),
(8, '2020_01_20_222637_create_settings_table', 5),
(9, '2020_01_21_221054_create_sliders_table', 6),
(10, '2020_01_28_213516_create_customers_table', 7),
(11, '2020_01_28_221904_create_references_table', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_must` int(11) DEFAULT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `page_category` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_file`, `page_must`, `page_content`, `page_status`, `page_category`, `created_at`, `updated_at`) VALUES
(1, 'İhracat Danışmanlığı', 'ihracat-danismanligi', '23564687626465.jpg', 1, '<p>Firmamız ; Rusya&rsquo;ya ihra&ccedil; edilmek &uuml;r&uuml;n&uuml;n Pazar hacmini, m&uuml;şteri potansiyelini ve &uuml;r&uuml;n bazında mevcut t&uuml;ketici alışkanlıklarını analiz ederek m&uuml;şterilerimize piyasa danışmanlığı yapmaktadır.Rusya ekonomik yapısını, mevcut piyasa trendlerini ve i&ccedil; dinamiklerini &ouml;l&ccedil;&uuml;mleyerek hizmet vermekteyiz. &Ouml;ncelikli olarak ihra&ccedil; edilmek istenen &uuml;r&uuml;n ile ilgili araştırma yapılarak, Rusya i&ccedil;i mevcut piyasası incelenmekte ve potansiyel m&uuml;şteri portf&ouml;y&uuml; belirlenmektedir. Piyasa araştırma sonucunda ; &uuml;r&uuml;nlerinizin Rus&ccedil;alaştırılması, &uuml;lke i&ccedil;i rekabete dayanabilmesi i&ccedil;in fiyat belirlenmesi ve satış sonrası geri bildirimler ışığında sonraki değişimler sağlanmaktadır.</p>', '1', '0', NULL, '2020-01-27 20:19:48'),
(2, 'Piyasa Danışmanlığı', 'piyasa-danismanligi', '5498645139863.jpg', 2, 'Firmamız ; Rusya’ya  ihraç  edilmek ürünün Pazar hacmini, müşteri potansiyelini ve ürün bazında mevcut tüketici alışkanlıklarını analiz ederek müşterilerimize piyasa danışmanlığı yapmaktadır.Rusya ekonomik yapısını, mevcut piyasa trendlerini ve iç dinamiklerini ölçümleyerek hizmet vermekteyiz.\r\nÖncelikli olarak ihraç edilmek istenen ürün ile ilgili araştırma yapılarak, Rusya içi mevcut piyasası incelenmekte ve potansiyel müşteri portföyü belirlenmektedir.\r\nPiyasa araştırma sonucunda ; ürünlerinizin Rusçalaştırılması, ülke içi rekabete dayanabilmesi için fiyat belirlenmesi ve satış sonrası geri bildirimler ışığında sonraki değişimler sağlanmaktadır. \r\n', '1', '0', NULL, NULL),
(3, 'Hukuki Destek', 'hukuki-destek', '598794631983.jpg', 3, '<p>Rusya şirketleri ticaret hukukuna b&uuml;y&uuml;k &ouml;nem verir ve ticari akitlerin titizlikle hazırlanmasını talep ederler. &Ouml;zellikle satış s&ouml;zleşmelerinin ve kabul evraklarının son derece detaylı hazırlanmasını talep eder ve kendileri de aynı kurallara uyarlar. B&uuml;t&uuml;n bu prosed&uuml;rler T&uuml;rk şirketlerine zor gelebilir. Bu konularda yardımcı olmak i&ccedil;in her t&uuml;rl&uuml; hukuki destek vermekteyiz. Fiyat teklifinin hazırlanmasından itibaren, satış s&ouml;zleşmelerinin, banka akreditif mektup i&ccedil;eriklerinin ve kabul evraklarının hazırlanması i&ccedil;in hep yanınızda olacağız. &Ouml;zellikle satış s&ouml;zleşmesi hazırlanırken Rus şirketleri s&ouml;zleşmenin her iki dilde yapılmasını şart koşarlar ve anlaşmazlığa mahal vermemek i&ccedil;in b&uuml;t&uuml;n detayları s&ouml;zleşmede belirtmeye &ccedil;alışırlar. Bu metinlerin sizin yerinize karşı tarafla m&uuml;zakere edilerek nihai hale getirilmesini sağlıyor olacağız.</p>', '1', '0', NULL, '2020-01-27 22:05:50'),
(4, 'Teknik Destek', 'teknik-destek', NULL, 4, 'Makine / ekipman gibi sonrasında teknik servis desteği gerektirecek ürünler için de sizlere destek vermekteyiz. Rusya da gerçekleştireceğiniz satış sonrası süreçte müşterilere anlık servisin verilebilmesi çok önemlidir. Özellikle yedek parça tedariği, arıza giderme, makine bakımı gibi teknik destek konularında da yanınızda olacağız.', '1', '0', NULL, NULL),
(5, 'Pazarlama ve Satış Desteği', 'pazarlama-satis-destegi', NULL, 5, 'İhraç edilmek istenilen ürünlerinize uygun Rusya pazarının bulunması, potansiyel müşterilere ulaşılması, temas kurulması ve satışın yapılmasına kadar olan süreçleri sağlamaktayız. Bu süreç içerisinde yürütülen tüm çalışmaları ve gelişmeleri sizlerin bilgisi dahilinde gerçekleştirmekteyiz.\r\nÜrünlerinizi hem geleneksel pazarlama hem de dijital pazarlama yöntemleri kullanılarak Rusya içi piyasaya sunmaktayız. Sitenizin Rusça versiyonun hazırlanması , Rusça katalogun hazırlanması, ürünlerinizin B2B sitelerine yerleştirilmesi, sosyal medya tanıtımının yapılması gibi hizmetler yaptıklarımızın sadece bir kısmıdır.\r\nRusya da gerçekleşecek olan fuar ve forumlarda da ürünlerinizi potansiyel müşterilere tanıtarak, gerektiğinde müşteri ziyaretlerini  de organize etmekteyiz. \r\nSatış süresi boyunca müşterilerle yüz yüze veya telefon görüşmesinin gereçekleştirilmesi, Rusça yazışmaların yapılması ve tekliflerin hazırlanması için destek vermekteyiz\r\n', '1', '0', NULL, NULL),
(6, 'Lojistik Destek', 'lojistik-destek', NULL, 6, 'Pazarlama, satış ve satış sonrası süreçte en önemli konulardan birisi de müşterilerle fiziki temasların kurulmasıdır. Hem pazarlama ve satış sürecinde, hem de satış sonrası dönemde her türlü lojistik destek vermekteyiz.', '1', '0', NULL, NULL),
(7, 'Fuarlara Katılım', 'fuar-katilim', NULL, 7, 'Rusya da sektörünüzle ilgili yapılan fuarlarla ilgili sizleri sürekli bilgilendiriyor olacağız. Uygun bulduğunuz fuarlara katılmak için gerekli olan bütün işlemleri yaparak katılımınızı gerçekleştirebiliriz. Katılımcı olmadan sadece ziyaretçi olarak fuar ziyaretlerinizde de sizlere eşlik ediyor olacağız.', '1', '0', NULL, NULL),
(8, 'Müşteri Ziyaretleri', 'musteri-ziyaretleri', NULL, 8, 'Rusya da müşterilerinizi veya müşteri adaylarını sizinle birlikte ziyaret edeceğiz. Böylece herhangi bir tercümana ihtiyacınız kalmayacağı gibi yanlış anlaşılmalardan da korunmuş olacaksınız. Belli bir müşteri için bir şehre ziyaret ettiğiniz durumlarda, ziyaretinizi daha verimli hale getirmek için aynı şehirde veya yakın şehirlerde potansiyel müşteri olabilecek diğer adayları belirleyerek ziyaret programı oluşturabilmekteyiz.', '1', '0', NULL, NULL),
(9, 'Müşterilerin Ağırlanması', 'musteri-agirlanmasi', NULL, 9, 'Satış sürecinde müşterilerin de sizi ziyaret etme ihtiyacı doğmaktadır. Bu durumlarda da sizlerin yanında yer alarak müşterilerin havalimanında karşılanmasından yine havalimanından uğurlanmasına kadar olan bütün olaylarda destek vereceğiz. Şirketinizin bir üyesi gibi hem iş, hem yemek veya kültürel toplantılarda hep yanınızda bulunacağız.', '1', '0', NULL, NULL),
(10, 'İthalat Danışmanlığı', 'ithalat-danismanligi', NULL, 10, 'Hiçbir ülke tüm ihtiyaçlarının tamamını kendisi karşılayamaz ve üretemediği bu ürünleri ithal etmek durumundadır. Dolayısıyla bu ülkeler ithalat danışmanlığı hizmetleri alarak ürün anlamındaki açıklarını kapatmaya çalışırlar. Özellikle Rusya da önemli derecede etkin bir lokasyon ağına sahip firmamız hizmetleriyle Rusya da ticari ilişkilerinizi geliştirebilmeniz en sağlıklı şekilde ithalatınızı yürütülmesi için sizlere profesyonel destek sağlamaktadır. ', '1', '1', NULL, NULL),
(11, 'Sizlerde Ürünlerinizi Satabilirsiniz', 'urun-satis', NULL, 11, 'Aynı zamanda bu kadar yoğun ticari ilişkiler söz konusu olduğunda kendi firmanızın ürün ya da hizmetlerini Rusya ya pazarlamak isteyebilirsiniz. Dolayısıyla bir yandan ithalat yaparken aynı anda ihracat yapmanızda mümkündür ve akılcı yaklaşım da bunu gerektirir. Ayrıca dış ticaret danışmanlık hizmetleri bağlamında Rusya ile sağlam temellere dayalı bir altyapıya sahip firmamızı tercih ederek mükemmel fırsatlar yakalayabileceğinizi ifade etmek istiyoruz.', '1', '1', NULL, NULL),
(12, 'Fiyatlandırma Ne Zaman Başlar', 'fiyatlandirma-ne-zaman-baslar', NULL, 12, 'Diğer danışmanlık firmalarına göre çok daha farklı bir konseptte çalışmalarını sürdüren firmamızın danışmanlık hizmetleri son derece makul fiyatlar ölçüsünde uygulanıyor ve sizlere kazançlı bir ticaretin yolunu açıyor. Peki, bizi benzer firmalardan ayıran özelliklerimiz nelerdir? Hemen bu konuyu izah edelim. Öncelikle biz saygıdeğer müşterilerimizden talebinin özelliğine göre hiçbir şekilde önceden bir ödeme talep etmiyoruz. Bunun anlamı kurulacak ilk irtibatın ve gelişecek bilgilendirmelerin ilk etapta hiçbir şekilde ücrete yansımamasıdır. Ücretlendirme ancak sizlerin taleplerinizi tam olarak bizlere yansıtmanız ve bu bilgilendirmeler ışığında söz konusu ülkelerde bizim harekete geçmemizin ardından başlıyor. Biraz daha basitçe aktarmak gerekirse; bu ülkelerden temin etmeyi düşündüğünüz ürün veya mamullerin neler olduğunu öncelikle bizimle paylaşıyorsunuz ve bizler ülkemizin piyasasını gayet iyi tanıdığımız için sizleri bir anlamda doğru yönlendirmelerle korumuş oluyoruz. Rusya da araştırmalara başlanması alt yapımızdan  elde ettiğimiz verileri sizinle paylaşmamızdan itibaren bir ön ödeme talebimiz bu şekilde olacaktır. Ayrıca ister ithalat ister ihracat projelerinde hiçbir şekilde zarar etmenizi istemeyiz ve sadece ücretimizi alarak kenara çekilmek gibi bir ilkemiz yoktur. Dolayısıyla firmamız istatistiki verilere dayalı bilgilerle hareket eder ve asla kulaktan dolma bilgilere itibar etmez. ', '1', '1', NULL, NULL),
(13, 'Ürünlerinizin İthalata Satışını Sağlayabiliriz', 'ithalat-satisi', NULL, 13, 'Firmamız sadece alıcı ve satıcı firmaları buluşturan ve aradan çekilen bir hizmet anlayışına sahip değildir. Örneğin ithal etmek istediğiniz ürünü kendi ülkemizdeki iç piyasa koşullarında nasıl ve kimlere satabilirsiniz? Noktasında da hizmet vermektedir.\r\nÇünkü firma olarak daha önce edindiğimiz bağlantılar la yola çıkarak hangi ürünlerin, kimler tarafından satın alınabileceği noktasında verilere sahibiz. Bunun tam tersini ihraç anlamında da düşünebilirsiniz. Rusya Federasyonu’na tarım ürünleri ihraç etmek istiyorsunuz; fakat bu ülkelerde en güvenilir şekilde kimlerle temas kurmanız gerektiğini bilmiyorsunuz. Firmamız burada devreye girerek aradığınız ölçekte firmaları önce sizinle buluşturuyor. \r\nDilerseniz Belirli Bir Komisyonla Ürününüzü Bizler Satabiliriz\r\nTüm bunların yanı sıra dil sorununuzu ortadan kaldırarak ;aralarında hukukçularında bulunduğu alanında uzman personelimiz ile komplike anlayışımızı da dahil ettiğimiz hizmetlerimizi sizin için sunmaktayız.\r\n ', '1', '1', NULL, NULL),
(14, 'Page Title 1', 'aasdasdasdasd', '5e2f6c2c00549.jpg', 14, '<p>545554</p>', '1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `references`
--

CREATE TABLE `references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `settings_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings_value` text COLLATE utf8mb4_unicode_ci,
  `settings_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings_queue` int(11) DEFAULT NULL,
  `settings_status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `settings_description`, `settings_key`, `settings_value`, `settings_type`, `settings_queue`, `settings_status`, `settings_category`, `created_at`, `updated_at`) VALUES
(1, 'Başlık', 'title', 'Galata İhracat & Danışmanlık | Anasayfa', 'text', 0, '1', '1', NULL, '2020-01-28 23:15:57'),
(2, 'Açıklama', 'description', 'Rusya\'da Bir Danışmanlık Şirketi', 'text', 1, '1', '1', NULL, '2020-01-28 23:53:51'),
(3, 'Logo(154x43 Boyutlarında Olmalıdır.)', 'logo', '5e30e792ee69b.png', 'file', 2, '1', '2', NULL, '2020-01-28 23:01:54'),
(4, 'Icon', 'icon', 'icon.ico', 'file', 3, '1', '2', NULL, NULL),
(5, 'Anahtar Kelimeler', 'keywords', 'danısmanlık', 'text', 4, '1', '1', NULL, '2020-01-30 19:33:16'),
(6, 'Sabit Telefon', 'phone_sabit', NULL, 'text', 5, '1', '3', NULL, '2020-01-30 22:16:32'),
(7, 'GSM', 'phone_gsm', '0534 298 61 89', 'text', 6, '1', '3', NULL, NULL),
(8, 'Mail', 'mail', 'gungor.bilal@galatasaray.net', 'text', 7, '1', '3', NULL, NULL),
(9, 'İlçe', 'ilce', 'Izmit', 'text', 8, '1', '3', NULL, NULL),
(10, 'İl', 'il', 'Kocaeli', 'text', 9, '1', '3', NULL, NULL),
(11, 'Açık Adres', 'adres', 'Izmit Caddesi', 'ckeditor', 10, '1', '3', NULL, NULL),
(12, 'Footer', 'footer', 'Galata İhracat & Danışmanlık', 'text', 11, '1', '4', NULL, NULL),
(13, 'Footer Logo(154x43 Boyutlarında Olmalıdır.)', 'footer_logo', '5e30e55862af0.png', 'file', 12, '1', '4', NULL, '2020-01-28 22:52:24'),
(14, 'Rusya Sabit Telefon', 'r_phone_sabit', NULL, 'text', 14, '1', '6', NULL, '2020-01-30 22:16:32'),
(15, 'Rusya GSM', 'r_phone_gsm', '0534 298 61 89', 'text', 15, '1', '6', NULL, NULL),
(16, 'Rusya Mail', 'r_mail', 'gungor.bilal@galatasaray.net', 'text', 16, '1', '6', NULL, NULL),
(17, 'Rusya İlçe', 'r_ilce', 'maykop', 'text', 17, '1', '6', NULL, '2020-01-30 22:33:57'),
(18, 'Rusya İl', 'r_il', 'Kocaeli', 'text', 18, '1', '6', NULL, NULL),
(19, 'Rusya Açık Adres', 'r_adres', '<p>Rusya</p>', 'ckeditor', 19, '1', '6', NULL, '2020-01-30 22:38:46'),
(20, 'Anasayfa 1. Alan Yazı', 'main_1', '12 yıllık Rusya tecrübemiz ile sizlere en iyi hizmeti veriyoruz.', 'text', 20, '1', '7', NULL, '2020-01-30 23:08:21'),
(23, 'Anasayfa 2. Alan Yazı', 'main_2', 'Alanında uzman, Çoğunluğu Rus harika bir ekibe sahibiz.', 'text', 21, '1', '7', NULL, '2020-01-30 23:01:49'),
(24, 'Anasayfa 3. Alan Yazı', 'main_3', 'Çözümlerimiz genellemeden uzak, kişiye özel, fiyat ve hedefe ulaşma açısından efektiftir.', 'text', 22, '1', '7', NULL, '2020-01-30 23:02:01'),
(25, 'Anasayfa 1. Alan Renk', 'main_1_r', '#040866', 'text', 23, '1', '7', NULL, '2020-01-30 22:58:03'),
(26, 'Anasayfa 2. Alan Renk', 'main_2_r', '#040866', 'text', 23, '1', '7', NULL, '2020-01-30 23:05:57'),
(27, 'Anasayfa 3. Alan Renk', 'main_3_r', '#040866', 'text', 24, '1', '7', NULL, '2020-01-30 23:02:55'),
(28, 'Anasayfa 1. Alan Başlık', 'main_1_title', '12 YILLIK TECRÜBE', 'text', 25, '1', '7', NULL, '2020-01-30 23:08:30'),
(29, 'Anasayfa 2. Alan Başlık', 'main_2_title', 'MÜKEMMEL KADRO', 'text', 26, '1', '7', NULL, '2020-01-30 23:02:21'),
(30, 'Anasayfa 3. Alan Başlık', 'main_3_title', 'HIZLI ÇÖZÜM', 'text', 27, '1', '7', NULL, '2020-01-30 23:08:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_title2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_title2`, `slider_slug`, `slider_file`, `slider_status`, `created_at`, `updated_at`) VALUES
(1, 'İTHALAT DANIŞMANLIĞI', 'TÜRKİYE & RUSYA', 'https://galataihracat.com/hizmetler/ithalat-danismanligi', '5e2f81cccbb0d.png', '1', NULL, '2020-01-30 19:36:35'),
(2, 'PAZARLAMA VE SATIŞ DESTEĞİ', NULL, 'https://galataihracat.com/hizmetler/pazarlama-satis-destegi', '5e2f823102e62.jpg', '1', NULL, NULL),
(3, 'UZMAN KADRO', NULL, 'https://galataihracat.com/kurumsal/kadromuz', '5e2f825082af7.jpg', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_role` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `staff`
--

INSERT INTO `staff` (`id`, `staff_name`, `staff_title`, `staff_content`, `staff_role`, `created_at`, `updated_at`) VALUES
(1, 'Bilal Güngör', 'Uzman', 'Boş İşler', '1', NULL, '2020-01-30 19:40:02'),
(3, 'Anıl Yücesoyy', 'PDR Uzmanı', 'boş boş', '0', NULL, '2020-01-22 11:59:23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'galata@galata', NULL, '$2y$10$1F/CgaOjgLZEqBXVbSTCL.RpHJtm8wf3CLSDZ34yDBWDRCNV8LrxK', NULL, NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
