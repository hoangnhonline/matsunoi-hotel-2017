-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 01:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matsunoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `album_img`
--

CREATE TABLE `album_img` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `album_lang`
--

CREATE TABLE `album_lang` (
  `album_id` int(11) NOT NULL,
  `language_id` tinyint(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `display_order` int(11) NOT NULL,
  `category_id` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `image_url` varchar(255) DEFAULT NULL,
  `meta_id` int(11) NOT NULL DEFAULT '0',
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Table structure for table `content_lang`
--

CREATE TABLE `content_lang` (
  `content_id` tinyint(4) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_lang`
--

INSERT INTO `content_lang` (`content_id`, `lang_id`, `content`) VALUES
(1, 1, '<ul class=\"clearfix\">\r\n	<li><span class=\"text\">チェックイン　<strong>15:00</strong></span></li>\r\n	<li><span class=\"text\">チｴックウト　<strong>12:00 </strong></span></li>\r\n	<li><span class=\"text\">朝食時間（無料）　<strong>6:30~9:30</strong>　場所：レストラン会場９階 </span></li>\r\n	<li><span class=\"text\">日本語対応可能なスタッフが随時常駐。 </span></li>\r\n	<li><span class=\"text\">日本人街レタントン通りより徒歩5分 </span></li>\r\n	<li><span class=\"text\">全室禁煙でございます。 </span></li>\r\n</ul>'),
(1, 2, '<ul class=\"clearfix\">\r\n	<li><span class=\"text\">Check &ndash; in: <strong>15:00</strong></span></li>\r\n	<li><span class=\"text\">Check &ndash; out: <strong>12:00 </strong></span></li>\r\n	<li><span class=\"text\">Breakfast (free) from <strong>6:30 to 9:30</strong> Location: restaurant in 9th floor </span></li>\r\n	<li><span class=\"text\">Staff capable of handling Japanese is always resident. </span></li>\r\n	<li><span class=\"text\">Japanese street is 5 minutes by walk from the hotel. </span></li>\r\n	<li><span class=\"text\">All rooms are non-smoking room </span></li>\r\n</ul>'),
(1, 3, '<ul class=\"clearfix\">\r\n	<li><span class=\"text\">Giờ nhận ph&ograve;ng: <strong>15:00</strong></span></li>\r\n	<li><span class=\"text\">Giờ trả ph&ograve;ng: <strong>12:00 </strong></span></li>\r\n	<li><span class=\"text\">Ăn s&aacute;ng (miễn ph&iacute;) từ<strong> 6:30 đến 9:30</strong> tại nh&agrave; h&agrave;ng ở lầu 9 của kh&aacute;ch sạn </span></li>\r\n	<li><span class=\"text\">Lu&ocirc;n c&oacute; nh&acirc;n vi&ecirc;n biết tiếng Nhật t&uacute;c trực </span></li>\r\n	<li><span class=\"text\">Chỉ c&aacute;ch khu phố Nhật 5 ph&uacute;t đi bộ </span></li>\r\n	<li><span class=\"text\">Tất cả c&aacute;c ph&ograve;ng trong kh&aacute;ch sạn l&agrave; ph&ograve;ng KH&Ocirc;NG h&uacute;t thuốc </span></li>\r\n</ul>'),
(2, 1, '<ul class=\"list-inline clearfix\">\r\n	<li><span class=\"text\">レイトチェックアウト料金（１８：００時までのご利用）はお部屋代の５０％となります。それ以降を過ぎますと、１泊料金となります。 </span></li>\r\n	<li><span class=\"text\">上記料金にはサービス料5%,税10%は含まれておりません。 </span></li>\r\n	<li><span class=\"text\">曜日やイベント等により、料金が変更になる場合がございます。 </span></li>\r\n	<li><span class=\"text\">添い寝のお子様（六歳まで）は無料です。ただし、アメニティグッズや枕は付きません。アメニティや枕、タオル等のご利用の場合は10ドルとなります。お子様の人数はリクエスト欄にご記入ください。 </span></li>\r\n	<li><span class=\"text\">キャンセルは予約日の48時間前（2日前）に、ご連絡お願い致します。これ以降を過ぎますと、一泊分のキャンセル料が発生します。 </span></li>\r\n</ul>'),
(2, 2, '<ul class=\"list-inline clearfix\">\r\n	<li><span class=\"text\">Late check &ndash; out fee is 50% of room charge (until 18:00). After that, it will be one night charge. </span></li>\r\n	<li><span class=\"text\">All prices are subject to 10% VAT and 5% service charge. </span></li>\r\n	<li><span class=\"text\">Depending on the day of the week or event, the price may be varied. </span></li>\r\n	<li><span class=\"text\">Children (under 6 years old) are free of charge. However, amenities and pillows are not included. For usage of amenities, pillows, towels, and so on, it cost 10 USD. Please fill in at the request box. </span></li>\r\n	<li><span class=\"text\">Cancellation must be made 48 hours (2 days) before the date of arrival. After this time, one night cancellation fee will be applied. </span></li>\r\n</ul>'),
(2, 3, '<ul class=\"list-inline clearfix\">\r\n	<li><span class=\"text\">Trả ph&ograve;ng trễ sẽ trả 50% tiền ph&ograve;ng (trước 18:00). Sau 18:00 sẽ t&iacute;nh một đ&ecirc;m tiền ph&ograve;ng. </span></li>\r\n	<li><span class=\"text\">Gi&aacute; ph&ograve;ng chưa bao gồm 10% VAT v&agrave; 5% ph&iacute; phục vụ </span></li>\r\n	<li><span class=\"text\">T&ugrave;y thuộc v&agrave;o thời điểm m&agrave; gi&aacute; ph&ograve;ng c&oacute; thể thay đổi </span></li>\r\n	<li><span class=\"text\">Trẻ em (dưới 6 tuổi) sẽ kh&ocirc;ng bị t&iacute;nh ph&iacute;. Tuy nhi&ecirc;n c&aacute;c trang bị trong ph&ograve;ng v&agrave; gối nằm sẽ kh&ocirc;ng được bao gồm. V&igrave; thế để sử dụng c&aacute;c vật tr&ecirc;n kh&aacute;ch sẽ phải trả th&ecirc;m 10 USD. Nếu c&oacute; trẻ em đi k&egrave;m, vui l&ograve;ng điền v&agrave;o &ocirc; y&ecirc;u cầu. </span></li>\r\n	<li><span class=\"text\">Y&ecirc;u cầu hủy ph&ograve;ng phải được gửi trước 48 tiếng (tức 2 ng&agrave;y) t&iacute;nh từ ng&agrave;y đến. Sau khoảng thời gian n&agrave;y, nếu kh&aacute;ch hủy ph&ograve;ng sẽ bị t&iacute;nh một đ&ecirc;m tiền ph&ograve;ng. </span></li>\r\n</ul>'),
(7, 1, 'キャンセルは予約日の48時間前（2日前）に、ご連絡お願い致します。これ以降を過ぎますと、一泊分のキャンセル料が発生します。'),
(7, 2, 'Cancellation must be made 48 hours (2 days) before the date of arrival. After this time, one night cancellation fee will be applied.'),
(7, 3, 'Y&ecirc;u cầu hủy ph&ograve;ng phải được gửi trước 48 tiếng (tức 2 ng&agrave;y) t&iacute;nh từ ng&agrave;y đến. Sau khoảng thời gian n&agrave;y, nếu kh&aacute;ch hủy ph&ograve;ng sẽ bị t&iacute;nh một đ&ecirc;m tiền ph&ograve;ng.');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `code`, `display_order`, `created_at`, `updated_at`) VALUES
(1, 'Japanese', 'jp', 1, '2017-09-28 00:00:00', '2017-09-28 00:00:00'),
(2, 'English', 'en', 2, '2017-09-28 00:00:00', '2017-09-28 00:00:00'),
(3, 'Vietnamese', 'vn', 3, '2017-09-28 00:00:00', '2017-09-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `id` int(11) NOT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meta_data_lang`
--

CREATE TABLE `meta_data_lang` (
  `meta_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `custom_text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nearby`
--

CREATE TABLE `nearby` (
  `id` int(11) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nearby`
--

INSERT INTO `nearby` (`id`, `display_order`, `image_url`) VALUES
(1, 1, '/public/uploads/images/nearby/central-post-office-1507794786.jpg'),
(2, 2, '/public/uploads/images/nearby/ben-thanh-market-1507794786.jpg'),
(3, 3, '/public/uploads/images/nearby/water-puppet-theater-1507794786.jpg'),
(4, 4, '/public/uploads/images/nearby/japanese-street-%E2%80%93-le-thanh-ton-1507794786.jpg'),
(5, 5, '/public/uploads/images/nearby/takashimaya-1507794786.jpg'),
(6, 6, '/public/uploads/images/nearby/pharmacies-convenient-stores-eateries-1507794786.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nearby_lang`
--

CREATE TABLE `nearby_lang` (
  `nearby_id` tinyint(4) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nearby_lang`
--

INSERT INTO `nearby_lang` (`nearby_id`, `lang_id`, `name`, `description`) VALUES
(1, 1, '中央郵便局ま', '中央郵便局まで徒歩約１０分'),
(1, 2, 'Central post office', 'About 10 minutes on foot to Central post office'),
(1, 3, 'Bưu điện Thành Phố', 'Cách Bưu Điện trung tâm thành phố khoảng 10 phút đi bộ'),
(2, 1, 'ベンタン市場ま', 'ベンタン市場まで車で約５分'),
(2, 2, 'Ben Thanh market', 'About 5 minutes by car to Ben Thanh market'),
(2, 3, 'Chợ Bến Thành', 'Cách chợ Bến Thành khoảng 5 phút đi xe'),
(3, 1, '水上人形劇場', '水上人形劇場まで車で約５分'),
(3, 2, 'Water Puppet Theater', 'About 5 minutes by car to Water Puppet Theater'),
(3, 3, 'Nhà hát Múa rối nước', 'Cách Nhà hát múa rối nước 5 phút đi xe'),
(4, 1, '日本人街レタントン通り', '日本人街レタントン通りより徒歩約5分'),
(4, 2, 'Japanese Street – Le Thanh Ton', 'About 5 minutes by walk from the Japanese Street – Le Thanh Ton'),
(4, 3, 'Japanese Street – Le Thanh Ton', 'Cách khu phố Nhật - Lê Thánh Tôn 5 phút đi bộ'),
(5, 1, '高島屋デパート', '高島屋デパートまで車で約５分'),
(5, 2, 'Takashimaya department store', 'About 5 minutes by car to Takashimaya department store'),
(5, 3, 'Takashimaya', 'Cách trung tâm thương mại Takashimaya 5 phút đi xe'),
(6, 1, '薬局やコンビニエンスストア、飲食店は', '薬局やコンビニエンスストア、飲食店は徒歩２分圏内にあります。'),
(6, 2, 'Pharmacies, convenient stores, eateries', 'Pharmacies, convenient stores, eateries are within 2 minutes walk'),
(6, 3, 'Nhà thuốc, cửa hàng tiện lợi, quán ăn', 'Nhà thuốc, cửa hàng tiện lợi, nhà hàng... chi cách 2 phút đi bộ');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `display_order`, `is_hot`, `status`, `price`, `image_url`, `created_user`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 65, NULL, 1, 1, '2017-10-09 00:00:00', '2017-10-09 00:00:00'),
(2, 2, 0, 1, 75, NULL, 1, 1, '2017-10-09 00:00:00', '2017-10-09 00:00:00'),
(3, 3, 0, 1, 75, NULL, 1, 1, '2017-10-09 00:00:00', '2017-10-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `room_lang`
--

CREATE TABLE `room_lang` (
  `room_id` tinyint(4) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_lang`
--

INSERT INTO `room_lang` (`room_id`, `lang_id`, `name`, `description`) VALUES
(1, 1, 'Deluxe', NULL),
(1, 2, 'Deluxe', NULL),
(1, 3, 'Deluxe', NULL),
(2, 1, 'Twin', NULL),
(2, 2, 'Twin', NULL),
(2, 3, 'Twin', NULL),
(3, 1, 'Superior', NULL),
(3, 2, 'Superior', NULL),
(3, 3, 'Superior', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `display_order`, `image_url`, `type`) VALUES
(1, 1, '/public/uploads/images/services/wifi-1507790938.png', 1),
(2, 2, '/public/uploads/images/services/breakfast-1507792768.png', 1),
(3, 3, '/public/uploads/images/services/cleaning-1507792907.png', 1),
(4, 4, '/public/uploads/images/services/transformers-1507793048.png', 1),
(5, 5, '/public/uploads/images/services/water-server-1507793019.png', 1),
(6, 6, '/public/uploads/images/services/charger-1507793019.png', 1),
(7, 7, '/public/uploads/images/services/photocopy-1507793019.png', 1),
(8, 8, '/public/uploads/images/services/laundry-1507793019.png', 1),
(9, 1, '/public/uploads/images/services/tv-1507793019.png', 2),
(10, 2, '/public/uploads/images/services/toilet-1507793019.png', 2),
(11, 3, '/public/uploads/images/services/airconditioner-1507793019.png', 2),
(12, 4, '/public/uploads/images/services/refrigerator-1507793019.png', 2),
(13, 5, '/public/uploads/images/services/safetybox-1507793019.png', 2),
(14, 6, '/public/uploads/images/services/dryer-1507793019.png', 2),
(15, 7, '/public/uploads/images/services/bathtub-1507793019.png', 2),
(16, 8, '/public/uploads/images/services/kettle-1507793019.png', 2),
(17, 9, '/public/uploads/images/services/slippers-1507793019.png', 2),
(18, 10, '/public/uploads/images/services/towels-1507793019.png', 2),
(19, 11, '/public/uploads/images/services/toothbrush-1507793019.png', 2),
(20, 12, '/public/uploads/images/services/razor-1507793019.png', 2),
(21, 13, '/public/uploads/images/services/shampoo-1507793019.png', 2),
(22, 14, '/public/uploads/images/services/comb-1507793019.png', 2),
(23, 15, '/public/uploads/images/services/swab-1507793019.png', 2),
(24, 16, '/public/uploads/images/services/shoeprint-1507793019.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services_lang`
--

CREATE TABLE `services_lang` (
  `services_id` tinyint(4) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services_lang`
--

INSERT INTO `services_lang` (`services_id`, `lang_id`, `name`, `description`) VALUES
(1, 1, 'WI-FI(館内無料)', NULL),
(1, 2, 'Wifi (free inside hotel)', NULL),
(1, 3, 'Wifi (miễn phí)', NULL),
(2, 1, '朝食', NULL),
(2, 2, 'Breakfast', NULL),
(2, 3, 'Bữa sáng', NULL),
(3, 1, 'お部屋の清掃（無料）', NULL),
(3, 2, 'Room Cleaning (free)', NULL),
(3, 3, 'Dọn phòng (miễn phí)', NULL),
(4, 1, '変圧器（貸出、無料）', NULL),
(4, 2, 'Adapter', NULL),
(4, 3, 'Adapter', NULL),
(5, 1, 'ペットボトル水（無料）', NULL),
(5, 2, 'Water bottle', NULL),
(5, 3, 'Nước uống', NULL),
(6, 1, '充電器', NULL),
(6, 2, 'Charger', NULL),
(6, 3, 'Sạc điện thoại', NULL),
(7, 1, 'コピー（有料）', NULL),
(7, 2, 'Photocopy (charged)', NULL),
(7, 3, 'Photocopy (tính phí)', NULL),
(8, 1, 'クリーニング（有料）', NULL),
(8, 2, 'Laundry (charged)', NULL),
(8, 3, 'Giặt ủi (tính phí)', NULL),
(9, 1, 'TV', NULL),
(9, 2, 'TV', NULL),
(9, 3, 'TV', NULL),
(10, 1, 'トイレ（ウォシュレット付き）', NULL),
(10, 2, 'Toilet (with washlet)', NULL),
(10, 3, 'Toilet (với vòi rửa)', NULL),
(11, 1, 'エアコン', NULL),
(11, 2, 'Air conditioner', NULL),
(11, 3, 'Điều hòa', NULL),
(12, 1, '冷蔵庫（空）', NULL),
(12, 2, 'Refrigrator', NULL),
(12, 3, 'Refrigrator', NULL),
(13, 1, '金庫', NULL),
(13, 2, 'Safety box', NULL),
(13, 3, 'Két sắt', NULL),
(14, 1, 'ドライヤー', NULL),
(14, 2, 'Dryer', NULL),
(14, 3, 'Máy sấy tóc', NULL),
(15, 1, 'バスタブ', NULL),
(15, 2, 'Bathtube', NULL),
(15, 3, 'Bồn tắm', NULL),
(16, 1, '電気ケトル', '1'),
(16, 2, 'Electric kettle', '1'),
(16, 3, 'Bình đun nước', '1'),
(17, 1, 'スリッパ', NULL),
(17, 2, 'Slippers', NULL),
(17, 3, 'Dép', NULL),
(18, 1, 'タオル、バスタオル　', NULL),
(18, 2, 'Towel and bath towel', NULL),
(18, 3, 'Khăn tắm', NULL),
(19, 1, '歯磨きセット', NULL),
(19, 2, 'Toothpaste set', NULL),
(19, 3, 'Bộ bàn chải', NULL),
(20, 1, 'カミソリ', NULL),
(20, 2, 'Razor', NULL),
(20, 3, 'Dao cạo râu', NULL),
(21, 1, 'シャンプー/リンス/ボディソープ', NULL),
(21, 2, 'Shampoo / Conditioner / Body shower', NULL),
(21, 3, 'Dầu gội / Dầu xả / Sữa tắm', NULL),
(22, 1, 'くし', NULL),
(22, 2, 'Corm', NULL),
(22, 3, 'Lược', NULL),
(23, 1, '綿棒', NULL),
(23, 2, 'Cotton swab', NULL),
(23, 3, 'Tăm bông', NULL),
(24, 1, 'シューズクリーナー', NULL),
(24, 2, 'Shoes cleaner', NULL),
(24, 3, 'Dụng cụ vệ sinh giày', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `id` int(11) NOT NULL,
  `info_key` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `site_info_lang`
--

CREATE TABLE `site_info_lang` (
  `info_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `text_key` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 : text, 2 : content',
  `created_user` tinyint(4) NOT NULL,
  `updated_user` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `text_lang`
--

CREATE TABLE `text_lang` (
  `text_id` int(11) NOT NULL,
  `language_id` tinyint(4) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `display_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `leader_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `changed_password` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) NOT NULL,
  `created_user` int(11) NOT NULL,
  `updated_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `display_name`, `email`, `password`, `role`, `leader_id`, `status`, `changed_password`, `remember_token`, `created_user`, `updated_user`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@matsunoi.vn', '$2y$10$cuj..B4n2qP1JXrj6ahgs.tAyOlCuPmAycKIMNqf6bOBgD8F626Mu', 3, 1, 1, 0, 'vPbgJkjkPHkkBwqhua6t9cHKKH18rm1nS2Ri1Myvlgbgle2I5VMosKMCtWdN', 1, 1, '2017-06-28 00:00:00', '2017-10-06 13:31:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_img`
--
ALTER TABLE `album_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `album_lang`
--
ALTER TABLE `album_lang`
  ADD PRIMARY KEY (`album_id`),
  ADD UNIQUE KEY `album_id` (`album_id`,`language_id`),
  ADD KEY `album_id_2` (`album_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `is_hot` (`is_hot`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_lang`
--
ALTER TABLE `content_lang`
  ADD UNIQUE KEY `room_id` (`content_id`,`lang_id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `room_id_2` (`content_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_data_lang`
--
ALTER TABLE `meta_data_lang`
  ADD UNIQUE KEY `meta_id` (`meta_id`,`lang_id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `meta_id_2` (`meta_id`);

--
-- Indexes for table `nearby`
--
ALTER TABLE `nearby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nearby_lang`
--
ALTER TABLE `nearby_lang`
  ADD UNIQUE KEY `room_id` (`nearby_id`,`lang_id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `room_id_2` (`nearby_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `room_lang`
--
ALTER TABLE `room_lang`
  ADD UNIQUE KEY `room_id` (`room_id`,`lang_id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `room_id_2` (`room_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_lang`
--
ALTER TABLE `services_lang`
  ADD UNIQUE KEY `room_id` (`services_id`,`lang_id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `room_id_2` (`services_id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_key` (`info_key`);

--
-- Indexes for table `site_info_lang`
--
ALTER TABLE `site_info_lang`
  ADD UNIQUE KEY `info_id` (`info_id`,`lang_id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `info_id_2` (`info_id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_lang`
--
ALTER TABLE `text_lang`
  ADD UNIQUE KEY `text_id` (`text_id`,`language_id`),
  ADD KEY `text_id_2` (`text_id`),
  ADD KEY `lang_id` (`language_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `album_img`
--
ALTER TABLE `album_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `album_lang`
--
ALTER TABLE `album_lang`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nearby`
--
ALTER TABLE `nearby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
