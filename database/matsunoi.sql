-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2017 at 04:11 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 7.0.24-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `content_lang`
--

CREATE TABLE `content_lang` (
  `id` tinyint(4) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_lang`
--

INSERT INTO `content_lang` (`id`, `lang_id`, `content`) VALUES
(1, 1, '<ul class=\"clearfix\">\r\n	<li>	\r\n		<span class=\"text\">\r\n			チェックイン　15:00\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			チｴックウト　12:00\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			朝食時間（無料）　6:30~9:30　場所：レストラン会場９階\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			日本語対応可能なスタッフが随時常駐。\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			日本人街レタントン通りより徒歩5分\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			全室禁煙でございます。\r\n		</span>\r\n	</li>	\r\n</ul>'),
(1, 2, '<ul class=\"clearfix\">\r\n	<li>	\r\n		<span class=\"text\">\r\n			Check – in: 15:00\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Check – out: 12:00\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Breakfast (free) from 6:30 to 9:30   Location: restaurant in 9th floor\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Staff capable of handling Japanese is always resident.\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Japanese street is 5 minutes by walk from the hotel.\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			All rooms are non-smoking room\r\n		</span>\r\n	</li>	\r\n</ul>'),
(1, 3, '<ul class=\"clearfix\">\r\n	<li>	\r\n		<span class=\"text\">\r\n			Giờ nhận phòng: 15:00\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Giờ trả phòng: 12:00\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Ăn sáng (miễn phí) từ 6:30 đến 9:30 tại nhà hàng ở lầu 9 của khách sạn\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Luôn có nhân viên biết tiếng Nhật túc trực\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Chỉ cách khu phố Nhật 5 phút đi bộ\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Tất cả các phòng trong khách sạn là phòng KHÔNG hút thuốc\r\n		</span>\r\n	</li>	\r\n</ul>'),
(2, 1, '<ul class=\"list-inline clearfix\">\r\n	<li>	\r\n		<span class=\"text\">\r\n			レイトチェックアウト料金（１８：００時までのご利用）はお部屋代の５０％となります。それ以降を過ぎますと、１泊料金となります。\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			上記料金にはサービス料5%,税10%は含まれておりません。\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			曜日やイベント等により、料金が変更になる場合がございます。\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			添い寝のお子様（六歳まで）は無料です。ただし、アメニティグッズや枕は付きません。アメニティや枕、タオル等のご利用の場合は10ドルとなります。お子様の人数はリクエスト欄にご記入ください。\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			キャンセルは予約日の48時間前（2日前）に、ご連絡お願い致します。これ以降を過ぎますと、一泊分のキャンセル料が発生します。\r\n		</span>\r\n	</li>	\r\n</ul>'),
(2, 2, '<ul class=\"list-inline clearfix\">\r\n	<li>	\r\n		<span class=\"text\">\r\n			Late check – out fee is 50% of room charge (until 18:00). After that, it will be one night charge.\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			All prices are subject to 10% VAT and 5% service charge.\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Depending on the day of the week or event, the price may be varied.\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Children (under 6 years old) are free of charge. However, amenities and pillows are not included. For usage of amenities, pillows, towels, and so on, it cost 10 USD. Please fill in at the request box.\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Cancellation must be made 48 hours (2 days) before the date of arrival. After this time, one night cancellation fee will be applied.\r\n		</span>\r\n	</li>	\r\n</ul>'),
(2, 3, '<ul class=\"list-inline clearfix\">\r\n	<li>	\r\n		<span class=\"text\">\r\n			Trả phòng trễ sẽ trả 50% tiền phòng (trước 18:00). Sau 18:00 sẽ tính một đêm tiền phòng.\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Giá phòng chưa bao gồm 10% VAT và 5% phí phục vụ\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Tùy thuộc vào thời điểm mà giá phòng có thể thay đổi\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Trẻ em (dưới 6 tuổi) sẽ không bị tính phí. Tuy nhiên các trang bị trong phòng và gối nằm sẽ không được bao gồm. Vì thế để sử dụng các vật trên khách sẽ phải trả thêm 10 USD. Nếu có trẻ em đi kèm, vui lòng điền vào ô yêu cầu.\r\n		</span>\r\n	</li>\r\n	<li>	\r\n		<span class=\"text\">\r\n			Yêu cầu hủy phòng phải được gửi trước 48 tiếng (tức 2 ngày) tính từ ngày đến. Sau khoảng thời gian này, nếu khách hủy phòng sẽ bị tính một đêm tiền phòng.\r\n		</span>\r\n	</li>	\r\n</ul>'),
(7, 1, '<p>到着出口（空港建物内）を出て、タクシー受付カウンターにて申し込む場合 TAXI表示のある受付カウンターに行き、受付係員に当ホテルの住所を提示いたします。その場で係員に料金を支払い、２枚のレシートを受け取ります。（白い紙がドライバー控え、２枚目のピンク色の紙がお客様の領収書となります）</p>\r\n\r\n<p>係員から１０番乗り場（出口を出て右側）へ進むよう、案内があります。レシート２枚を持ったまま、出口を出て指定された乗り場にお進みください。配車手配の係員が声をかけてきますので、レシートを渡し、係員と一緒に配車の車に向かいます。車に乗り、ピンク色の領収書を受け取ります。</p>\r\n\r\n<p style=\"color: #00a333;\">車内での追加料金はございません。</p>'),
(7, 2, '<p>Exit the arrival gate (within the airport building) and head for the taxi reception counter. The taxi counter is a place with the TAXI display. At the counter, please present the address of our hotel to staff. Pay the fee to the staff on the spot and receive 2 receipts. (White paper is driver&rsquo;s note, the second piece of pink color will be the customer&rsquo;s receipt)</p>\r\n\r\n<p>There is a guidance from the staff to go to No 10 gate (right hand side from exit gate). With 2 receipts, please proceed to the designated place. As staff at No 10 calls out, please pass the receipt and head for the car to be dispatched along with the staff. Take the car and you will receive the pink receipt.</p>\r\n\r\n<p style=\"color: #00a333;\">There is no additional charge in the car.</p>'),
(7, 3, NULL),
(8, 1, '<p>タクシー乗り場の場合. 到着出口を出て左へ向かいます。タクシー乗り場でお並びください。タクシー会社はたくさんございますが、白色の <span style=\"color: #00a333;\">&ldquo;Vinasun Taxi&rdquo; (電話番号 028 38 27 27 27) もしくは緑色の &ldquo;Mai Linh Taxi&rdquo; (電話番号 028 38 38 38 38).</span> のご利用をお勧めいたします。料金はメーター表示額と空港利用税１万ドンを、降車時にベトナムドンでお支払いください。</p>\r\n\r\n<p style=\"color: #ea0000;\">タクシー番号を覚えていると、お忘れものをしたときに連絡がつきます。.</p>'),
(8, 2, '<p>Leave the exit gate and head left. Please line up at the taxi stand. There are a lot of taxi companies, but we recommend using <span style=\"color: #00a333;\">&ldquo;Vinasun Taxi&rdquo; (Tel No 028 38 27 27 27) or &ldquo;Mai Linh Taxi&rdquo; (Tel No 028 38 38 38 38).</span> Please pay the meter display amount and airport use tax of 10.000 VND in Vietnam Dong when getting off.</p>\r\n\r\n<p style=\"color: #ea0000;\">Note: please remember taxi driver number in case of recontacting for lost and found.</p>\r\n\r\n<p>Because we located in a small alley from the street, in case you are lost please contact us via</p>\r\n\r\n<p style=\"color: #ea0000;\">Tel No 028 38246068.</p>'),
(8, 3, NULL),
(9, 1, '申し訳ございませんが、現在このホテルでは、ご希望の日程は満室となっております。 もう一度ご検索ください。'),
(9, 2, 'Sorry, currently there are no rooms available at this property for the dates you selected. Please try your search again'),
(9, 3, 'Xin lỗi qu&yacute; kh&aacute;ch, hiện tại ch&uacute;ng t&ocirc;i đ&atilde; hết ph&ograve;ng theo y&ecirc;u cầu của qu&yacute; kh&aacute;ch. Qu&yacute; kh&aacute;ch vui l&ograve;ng kiểm tra lại.'),
(10, 1, 'キャンセルは予約日の48時間前（2日前）に、ご連絡お願い致します。これ以降を過ぎますと、一泊分のキャンセル料が発生します。'),
(10, 2, 'Cancellation must be made 48 hours (2 days) before the date of arrival. After this time, one night cancellation fee will be applied.'),
(10, 3, 'Y&ecirc;u cầu hủy ph&ograve;ng phải được gửi trước 48 tiếng (tức 2 ng&agrave;y) t&iacute;nh từ ng&agrave;y đến. Sau khoảng thời gian n&agrave;y, nếu kh&aacute;ch hủy ph&ograve;ng sẽ bị t&iacute;nh một đ&ecirc;m tiền ph&ograve;ng.');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'base_url', 'http://houseland.com', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(2, 'site_title', 'Trang chủ Houseland', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(3, 'site_description', 'Chuyên cung cấp thông tin về nhà đất như: nhà riêng, nhà phố, đất nền, chung cư, biệt thự.  Tất cả đầy đủ pháp lý, minh bạch, rõ ràng.', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(4, 'site_keywords', 'mua ban nha dat, nha dat ho chi minh', '2016-07-27 14:37:52', '2017-10-10 09:42:00'),
(5, 'admin_email', 'hoangnhonlin', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(22, 'mail_server', 'mail.example.com', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(23, 'mail_login_name', 'login@example.com', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(24, 'mail_password', 'password', '2016-07-27 14:37:52', '2016-07-27 14:37:52'),
(105, 'site_name', 'houseland.com.vn', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(113, 'google_analystic', '<!-- Global Site Tag (gtag.js) - Google Analytics -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-88738631-22\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments)};\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-88738631-22\');\r\n</script>', '2016-07-27 14:37:52', '2017-10-04 10:21:28'),
(114, 'facebook_appid', '', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(115, 'google_fanpage', '', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(116, 'facebook_fanpage', 'https://www.facebook.com/www.icare.center', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(117, 'twitter_fanpage', '', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(130, 'logo', '/public/uploads/images/info/logo-header-1507087278.png', '2016-07-27 14:37:52', '2017-10-10 09:42:00'),
(131, 'favicon', '2017/08/29/favicon-1504021257.ico', '2016-07-27 14:37:52', '2017-10-10 09:42:00'),
(141, 'banner', '/public/uploads/images/logo.png', '2016-07-27 14:37:52', '2017-10-10 09:42:00'),
(142, 'custom_text', '', '2016-07-27 14:37:52', '2017-10-10 09:42:00'),
(143, 'email_cc', '', '2016-11-11 00:00:00', '2017-08-29 13:06:32'),
(144, 'thong_bao_chung', '\n', '2017-05-11 00:00:00', '2017-08-07 11:20:56'),
(145, 'cty_info', '', '0000-00-00 00:00:00', '2017-08-29 13:06:32'),
(146, 'hotline', '(08) 35 603 247 - 0909 787 111', '2017-07-27 00:00:00', '2017-10-10 09:41:59'),
(163, 'so_nam', '10', '2016-07-27 14:37:52', '2017-10-04 10:21:27'),
(164, 'so_kien_truc_su', '60', '2016-07-27 14:37:52', '2017-10-04 10:21:27'),
(165, 'so_cong_nhan', '900', '2016-07-27 14:37:52', '2017-10-04 10:21:27'),
(166, 'so_cong_trinh', '800', '2016-07-27 14:37:52', '2017-10-10 09:41:59'),
(167, 'so_tin_lien_quan', '10', '2016-11-11 00:00:00', '2017-10-10 09:41:59'),
(168, 'gioi_thieu_chung', '', '2017-05-11 00:00:00', '2017-10-04 10:21:28'),
(169, 'gioi_thieu_tin_tuc', '', '0000-00-00 00:00:00', '2017-10-04 10:21:28'),
(170, 'email_header', 'houseland.com.vn@gmail.com', '2017-07-27 00:00:00', '2017-10-10 09:41:59'),
(171, 'su_lua_chon_dung_dan', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(172, 'chi_nhanh_phia_nam', '<p><strong>Đại diện chi nh&aacute;nh ph&iacute;a Nam:</strong></p>\r\n\r\n<p>Địa chỉ: 166 Nguyễn Ho&agrave;ng, phường An Ph&uacute;, quận 2</p>\r\n\r\n<p>Hotline: (08) 35 00 32 47 - 0909 787 111</p>\r\n\r\n<p>Email: <a href=\"mailto:#\">houseland.com.vn@gmail.com</a></p>\r\n', '2017-08-29 00:00:00', '2017-10-04 10:21:27'),
(173, 'chi_nhanh_phia_bac', '<p><strong>Đại diện chi nh&aacute;nh ph&iacute;a Bắc:</strong></p>\r\n\r\n<p>Địa chỉ: 166 Nguyễn Ho&agrave;ng, phường An Ph&uacute;, quận 2</p>\r\n\r\n<p>Hotline: (08) 35 00 32 47 - 0909 787 111</p>\r\n\r\n<p>Email: <a href=\"mailto:#\">houseland.com.vn@gmail.com</a></p>\r\n', '2017-08-29 00:00:00', '2017-10-04 10:21:27'),
(174, 'articles_per_page', '5', '2017-08-29 00:00:00', '2017-10-10 09:41:59'),
(175, 'product_related', '4', '2017-08-29 00:00:00', '2017-10-10 09:41:59'),
(176, 'mau_nen_menu', '#ff6600', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(177, 'mau_nen_footer', '#0f1416', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(178, 'mau_nen_search', '#ff6600', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(179, 'mau_nen_copyright', '#ff6600', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(180, 'mau_nen_block', '#ff6600', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(181, 'mau_nut_dang_ky', '#fb7c28', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(182, 'mau_nut_top', '#ff6600', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(183, 'mau_menu_hover', '#ff6600', '2017-08-29 00:00:00', '2017-09-16 15:35:09'),
(184, 'icon_nam_hinh_thanh', '/public/uploads/images/ascendant-bars-graphic.png', '2017-08-29 00:00:00', '2017-10-10 09:42:00'),
(185, 'icon_kien_truc_su', '/public/uploads/images/engineer.png', '2017-08-29 00:00:00', '2017-10-10 09:42:00'),
(186, 'icon_cong_nhan', '/public/uploads/images/worker-of-construction-working-with-a-shovel-beside-material-pile.png', '2017-08-29 00:00:00', '2017-10-10 09:42:00'),
(187, 'icon_cong_trinh', '/public/uploads/images/skyline.png', '2017-08-29 00:00:00', '2017-10-10 09:42:00'),
(188, 'icon_tieu_de', '/public/uploads/images/triangle.png', '2017-08-29 00:00:00', '2017-10-10 09:42:00'),
(189, 'product_widget', '5', '0000-00-00 00:00:00', '2017-10-10 09:41:59'),
(190, 'article_related', '4', '2017-09-15 00:00:00', '2017-10-10 09:41:59'),
(191, 'mau_nen_header', '#ffffff', '0000-00-00 00:00:00', '2017-09-16 15:35:09'),
(192, 'mau_header_title', '#000000', '0000-00-00 00:00:00', '2017-09-16 15:35:09'),
(193, 'mau_header_value', '#000000', '0000-00-00 00:00:00', '2017-09-16 15:35:09'),
(194, 'mau_header_icon', '#ff6600', '0000-00-00 00:00:00', '2017-09-16 15:35:09'),
(195, 'mau_nen_header_top', '#000000', '0000-00-00 00:00:00', '2017-09-16 15:35:09'),
(196, 'mau_chu_header_top', '#ffffff', '0000-00-00 00:00:00', '2017-09-16 15:35:09'),
(197, 'mau_chu_dao', '#ff6600', '0000-00-00 00:00:00', '2017-10-04 10:21:28'),
(198, 'hover_parent', '#ff781e', '0000-00-00 00:00:00', '2017-10-04 10:21:28'),
(199, 'menu_border', '#cc5608', '0000-00-00 00:00:00', '2017-10-04 10:21:28'),
(200, 'icon_mui_ten', '/public/uploads/images/arrow-1506003900.png', '0000-00-00 00:00:00', '2017-10-10 09:42:00'),
(201, 'hot_homepage', '5', '0000-00-00 00:00:00', '2017-10-04 10:21:27'),
(202, 'product_per_page', '9', '0000-00-00 00:00:00', '2017-10-10 09:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `id` int(11) NOT NULL,
  `info_key` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `info_key`) VALUES
(2, 'description'),
(3, 'keywords'),
(7, 'site_name'),
(1, 'title');

-- --------------------------------------------------------

--
-- Table structure for table `site_info_lang`
--

CREATE TABLE `site_info_lang` (
  `info_id` int(11) NOT NULL,
  `lang_id` tinyint(4) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_info_lang`
--

INSERT INTO `site_info_lang` (`info_id`, `lang_id`, `content`) VALUES
(1, 1, 'MATSUNOI HOTEL'),
(1, 2, 'MATSUNOI HOTEL'),
(1, 3, 'Khách sạn MATSUNOI'),
(2, 1, 'MATSUNOI HOTEL'),
(2, 2, 'MATSUNOI HOTEL'),
(2, 3, 'Khách sạn MATSUNOI'),
(3, 1, 'MATSUNOI HOTEL'),
(3, 2, 'MATSUNOI HOTEL'),
(3, 3, 'Khách sạn MATSUNOI'),
(7, 1, 'MATSUNOI HOTEL'),
(7, 2, 'MATSUNOI HOTEL'),
(7, 3, 'Khách sạn MATSUNOI');

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
  ADD UNIQUE KEY `id` (`id`,`lang_id`);

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_name` (`name`) USING BTREE;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
