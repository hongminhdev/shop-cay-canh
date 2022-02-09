-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 09, 2022 lúc 02:12 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopcaycanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `baiviet_tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `baiviet_tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `baiviet_noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `baiviet_slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `baiviet_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baiviet_anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaythem` date NOT NULL,
  `baiviet_tinhtrang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`baiviet_id`, `baiviet_tieude`, `baiviet_tomtat`, `baiviet_noidung`, `baiviet_slug`, `baiviet_keyword`, `baiviet_anh`, `ngaythem`, `baiviet_tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 'Cây Kim Tiền Bị Vàng Lá', '<p>Nắm được l&yacute; thuyết v&agrave; kiến thức nền tảng để c&oacute; thể thuyết tr&igrave;nh tốt</p>\r\n\r\n<p>Biết c&aacute;ch k&iacute;ch hoạt t&acirc;m thế người thuyết tr&igrave;nh xuất sắc</p>\r\n\r\n<p>Tr&igrave;nh b&agrave;y được sức mạnh thuyết phục</p>\r\n\r\n<p>Thực h&agrave;nh th&agrave;nh thạo 10 phi ng&ocirc;n từ</p>\r\n\r\n<p>Thiết kế b&agrave;i thuyết tr&igrave;nh chuy&ecirc;n nghiệp</p>\r\n\r\n<p>Thấu hiểu cơ chế ứng xử h&agrave;nh vi của m&igrave;nh, của người để &ldquo;trăm trận trăm thắng&rdquo;</p>\r\n\r\n<p>Tăng sự tự tin v&agrave; l&agrave;m chủ của bản th&acirc;n đối với ch&iacute;nh m&igrave;nh v&agrave; đối với đối phương</p>\r\n\r\n<p>Ứng dụng c&aacute;c c&ocirc;ng cụ hỗ trợ hiện đại tạo sự sinh động, cuốn h&uacute;t cho b&agrave;i thuyết tr&igrave;nh</p>', '<h2 style=\"text-align:justify\"><strong><span style=\"font-size:20px\">X&aacute;c định nguy&ecirc;n nh&acirc;n c&acirc;y Kim Tiền bị v&agrave;ng l&aacute;</span></strong></h2>\r\n\r\n<p style=\"text-align:justify\">Điều đầu ti&ecirc;n trong vấn để khắc phục v&agrave; điều trị vẫn lu&ocirc;n l&agrave; x&aacute;c định nguy&ecirc;n nh&acirc;n, v&agrave; đối với c&acirc;y cảnh cũng kh&ocirc;ng ngoại lệ, bạn cần phải x&aacute;c định được đ&uacute;ng nguy&ecirc;n nh&acirc;n th&igrave; mới c&oacute; thể khắc phục nhanh c&oacute; kết quả nhất cho&nbsp;<a href=\"https://webcaycanh.com/cay-kim-tien/\" rel=\"noopener\" target=\"_blank\">c&acirc;y Kim Tiền</a>.</p>\r\n\r\n<h3 style=\"text-align:justify\">Một số nguy&ecirc;n nh&acirc;n khiến c&acirc;y Kim Tiền v&agrave;ng l&aacute;</h3>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Thừa nước</strong>: Một trong số những nguy&ecirc;n nh&acirc;n chiếm đa số khiến&nbsp;<strong><a href=\"https://webcaycanh.com/cay-kim-tien-bi-vang-la/\">c&acirc;y Kim Tiền bị v&agrave;ng l&aacute;</a></strong>, nếu nghi&ecirc;m trọng dẫn đến c&acirc;y bị v&agrave;ng th&acirc;n, sau đ&oacute; mềm nhũn v&agrave; dẫn đến thối. Để kiểm tra đất c&oacute; bị ẩm qu&aacute; hay kh&ocirc;ng, bạn c&oacute; thể d&ugrave;ng đũa hoặc que kh&ocirc; cắm thử xuống đất, nếu r&uacute;t l&ecirc;n que bị chuyển sang m&agrave;u đen thẫm nghĩa l&agrave; trong đất đang bị trữ nước.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://webcaycanh.com/wp-content/uploads/2020/10/cay-kim-tien-vang-la-do-thua-nuoc.jpg\"><img alt=\"cây kim tiền vàng lá do thừa nước\" src=\"https://webcaycanh.com/wp-content/uploads/2020/10/cay-kim-tien-vang-la-do-thua-nuoc.jpg\" style=\"height:830px; width:500px\" /></a></p>\r\n\r\n<p style=\"text-align:center\"><em>C&acirc;y Kim Tiền bị thừa nước&nbsp;&nbsp;</em></p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Thiếu nước</strong>: Cũng l&agrave; nguy&ecirc;n nh&acirc;n chủ yếu của c&acirc;y Kim Tiền bị v&agrave;ng l&aacute;, nhưng thường th&igrave; chỉ do chủ nh&agrave; đi vắng l&acirc;u ng&agrave;y hoặc qu&ecirc;n hẳn việc tưới c&acirc;y th&igrave; mới dẫn tới t&igrave;nh trạng n&agrave;y, v&igrave; thường c&acirc;y Kim Tiền được để trong nh&agrave; v&agrave; c&acirc;y l&agrave; dạng th&acirc;n củ c&oacute; trữ nước n&ecirc;n cũng c&oacute; thể chịu được hạn thời gian kh&aacute; l&acirc;u. C&acirc;y thiếu nước c&oacute; biểu hiện l&aacute; quăn, mềm, kh&ocirc;ng được căng cả th&acirc;n v&agrave; gốc.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://webcaycanh.com/wp-content/uploads/2020/10/cay-kim-tien-vang-la-do-thieu-nuoc.jpg\"><img alt=\"cây kim tiền vàng lá do thiếu nước\" src=\"https://webcaycanh.com/wp-content/uploads/2020/10/cay-kim-tien-vang-la-do-thieu-nuoc-1024x768.jpg\" style=\"height:375px; width:500px\" /></a></p>\r\n\r\n<p style=\"text-align:center\"><em>C&acirc;y Kim Tiền v&agrave;ng l&aacute; do thiếu nước</em></p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Ch&aacute;y nắng</strong>: L&agrave; hiện tượng ngo&agrave;i bị l&aacute; v&agrave;ng c&acirc;y c&ograve;n c&oacute; những nốt x&aacute;m, do bị để nơi c&oacute; cường độ nắng qu&aacute; cao.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Gi&agrave;</strong>: Khi l&aacute; qu&aacute; gi&agrave; th&igrave; c&acirc;y cũng c&oacute; hiện tượng rụng l&aacute;, biểu hiện l&agrave; c&acirc;y bị v&agrave;ng một số l&aacute;, nhưng sẽ v&agrave;ng l&aacute; ở gần gốc chứ kh&ocirc;ng v&agrave;ng l&aacute; ở ph&iacute;a gần ngọn. V&agrave; ch&uacute;ng ta thấy c&acirc;y vẫn b&igrave;nh thường th&igrave; kh&ocirc;ng phải lo lắng.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://webcaycanh.com/wp-content/uploads/2020/10/cay-kim-tien-vang-la-do-gia.png\"><img alt=\"cây kim tiền vàng lá do già\" src=\"https://webcaycanh.com/wp-content/uploads/2020/10/cay-kim-tien-vang-la-do-gia-768x1024.png\" style=\"height:667px; width:500px\" /></a></p>\r\n\r\n<p style=\"text-align:center\"><em>C&acirc;y Kim Tiền v&agrave;ng l&aacute; do gi&agrave;</em></p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Thiếu dinh dưỡng</strong>: Nếu đất qu&aacute; cằn, đ&atilde; hết chất dinh dưỡng cũng c&oacute; thể dẫn đến c&acirc;y bị v&agrave;ng l&aacute; v&agrave; c&ograve;i cọc.</p>\r\n\r\n<h2 style=\"text-align:justify\">C&aacute;ch khắc phục c&acirc;y Kim Tiền bị v&agrave;ng l&aacute;</h2>\r\n\r\n<p style=\"text-align:justify\">Sau khi ch&uacute;ng ta đ&atilde; chuẩn đo&aacute;n được nguy&ecirc;n nh&acirc;n c&acirc;y Kim Tiền bị v&agrave;ng l&aacute; do đ&acirc;u, th&igrave; bị nguy&ecirc;n nh&acirc;n n&agrave;o ta khắc phục nguy&ecirc;n nh&acirc;n đ&oacute;, v&agrave; những c&agrave;nh l&agrave; bị v&agrave;ng ta n&ecirc;n cắt bỏ để c&acirc;y nhanh mọc nh&aacute;nh mới đẹp hơn.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Thừa nước</strong>: L&agrave;m cho đất kh&ocirc;, hoặc thay đất</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Thiếu nước</strong>: Tưới th&ecirc;m nước</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;&nbsp;<strong>Ch&aacute;y nắng</strong>: Đưa c&acirc;y v&agrave;o chỗ m&aacute;t</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Gi&agrave;</strong>: Hiện tượng tự nhi&ecirc;n kh&ocirc;ng cần l&agrave;m g&igrave;</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong>Thiếu dinh dưỡng</strong>: Thay đất hoặc bổ sung dinh dưỡng cho đất</p>\r\n\r\n<p style=\"text-align:justify\">Ngo&agrave;i ra khi trồng Kim Tiền bạn cần phải lưu &yacute; một số điểm sau để c&acirc;y c&oacute; thể sống v&agrave; ph&aacute;t triển tốt.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<em>Đất trồng</em>: Tơi xốp c&oacute; độ m&ugrave;n cao, giữ ẩm những kh&ocirc;ng giữ nước, ch&uacute;ng ta c&oacute; thể trộn đất với trấu, tro, xơ dừa, đ&aacute; perlife&hellip;để tạo ra độ m&ugrave;n v&agrave; xốp cho c&acirc;y.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<em>Điều kiện sống v&agrave; &aacute;nh s&aacute;ng</em>: C&acirc;y Kim Tiền th&iacute;ch nơi m&aacute;t mẻ c&oacute; &aacute;nh s&aacute;ng nhẹ, tr&aacute;nh được mưa, nắng to, thường c&acirc;y để ở ban c&ocirc;ng được che, ph&ograve;ng kh&aacute;ch th&ocirc;ng tho&aacute;ng, h&agrave;nh lang&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<em>C&aacute;ch trồng</em>: V&igrave; l&agrave; c&acirc;y th&acirc;n củ n&ecirc;n c&aacute;ch tốt nhất ta n&ecirc;n trồng c&acirc;y hơi nổi l&ecirc;n mặt đất, kh&ocirc;ng n&ecirc;n trồng ch&igrave;m c&acirc;y xuống đất ảnh hưởng tới sự nảy mầm của c&acirc;y.</p>\r\n\r\n<p style=\"text-align:justify\">Ch&uacute;c bạn chăm được một c&acirc;y Kim Tiền ưng &yacute;. Kh&ocirc;ng bị v&agrave;ng l&aacute; v&agrave; s&acirc;u bệnh</p>', 'cay-kim-tien-bi-vang-la', 'kim tien bi vang la', 'ckt1.png', '2021-05-17', 1, NULL, NULL),
(2, 'Sự thật về độc của cây Kim Tiền', '<p style=\"text-align:justify\">C&oacute; lẽ rất nhiều người đ&atilde; nghe hoặc đọc được ở đ&acirc;u đ&oacute; c&acirc;y Kim Tiền c&oacute; độc, thậm ch&iacute; l&agrave; rất độc, nhưng v&igrave; t&aacute;c dụng lọc kh&iacute;, phong thủy m&agrave; nhiều người vẫn bất chấp mua v&agrave; trưng c&acirc;y tr&ecirc;n b&agrave;n l&agrave;m việc, ph&ograve;ng kh&aacute;ch, ở sảnh để chi&ecirc;u t&agrave;i lộc. Vậy ch&iacute;nh x&aacute;c độc của c&acirc;y Kim Tiền như thế n&agrave;o? Mời c&aacute;c bạn t&igrave;m hiểu chi tiết ở b&agrave;i viết dưới đ&acirc;y.</p>', '<h2>C&acirc;y Kim Tiền c&oacute; chứa độc tố canxi oxalat</h2>\r\n\r\n<p>Theo PGS Trần Hồng C&ocirc;ng &ndash; Khoa H&oacute;a Học &ndash; Trường Đại Học Khoa Học Tự Nhi&ecirc;n th&igrave; c&oacute; rất nhiều c&acirc;y cảnh c&oacute; chứa độc v&agrave; trong số đ&oacute; c&oacute; c&acirc;y Kim Tiền. Trong cuống v&agrave; l&aacute; c&acirc;y Kim Tiền chứa tinh thể canxi oxalat c&ocirc;ng thức h&oacute;a học CaC<sub>2</sub>O<sub>4</sub>&nbsp;hay Ca(COO)<sub>2</sub>. Chất n&agrave;y c&oacute; khả năng lọc kh&iacute; cực k&igrave; tốt. V&agrave; n&oacute; cũng được t&igrave;m thấy trong họ r&aacute;y (Araceae) như khoai nước (Colocasia esculenta).</p>\r\n\r\n<p><img alt=\"\" src=\"https://webcaycanh.com/wp-content/uploads/2021/01/cay-kim-tien-co-doc.jpg\" style=\"width:400px\" /></p>\r\n\r\n<p><em>C&acirc;y Kim Tiền c&oacute; chứa độc tố canxi oxalat</em></p>\r\n\r\n<p>Thường những người bắt đầu để &yacute; đến c&acirc;y cảnh nhất l&agrave; những c&acirc;y li&ecirc;n quan đến phong thủy, sức khỏe th&igrave; cũng c&oacute; tuổi đời tương đối v&agrave; nhận thức nhất định về c&acirc;y. Th&igrave; ta hẵn khoan n&oacute;i&nbsp;<strong><a href=\"https://webcaycanh.com/cay-kim-tien/\" rel=\"noreferrer noopener\" target=\"_blank\">c&acirc;y Kim Tiền</a></strong>&nbsp;v&igrave; để n&oacute;i số lượng người ăn, hay số lượng người thường xuy&ecirc;n tiếp x&uacute;c kh&ocirc;ng nhiều để c&oacute; thể chắc nịnh mức độ của n&oacute; ra sao, th&igrave; ta n&ecirc;n b&agrave;n đến c&acirc;y khoai nước.</p>\r\n\r\n<p>C&acirc;y khoai nước cũng c&oacute; t&iacute;nh chất v&agrave; tỷ lệ canxi oxalat trong cuống v&agrave; l&aacute; c&acirc;y tương tự hoặc mức độ lớn hơn c&acirc;y Kim Tiền. Th&igrave; hồi xưa c&acirc;y khoai nước rất nhiều, thường được lấy về băm cho lợn ăn, hoặc c&oacute; những lần v&ocirc; t&igrave;nh n&oacute; được trồng lẫn với c&acirc;y ch&uacute;ng ta vẫn thường hay ăn đ&oacute; l&agrave; dọc m&ugrave;ng. Th&igrave; khi ta ăn phải nếu nhẹ th&igrave; ngứa, nếu ăn nhiều th&igrave; c&oacute; th&ecirc;m ch&uacute;t r&aacute;t. Nếu ta băm rau cho lợn ăn để nhựa d&iacute;nh nhiều v&agrave;o tay th&igrave; c&oacute; người sẽ bị ngứa v&agrave; 1 thời gian sẽ hết. Về cơ bản th&igrave; cũng kh&ocirc;ng c&oacute; g&igrave; qu&aacute; nghi&ecirc;m trọng.</p>\r\n\r\n<h2>Mức độ độc của c&acirc;y Kim Tiền</h2>\r\n\r\n<p>Đến đ&acirc;y nếu bạn đọc kỹ phần tr&ecirc;n th&igrave; c&oacute; nhiều người c&oacute; lẽ đ&atilde; tự trả lời được l&agrave;&nbsp;<a href=\"https://webcaycanh.com/su-that-ve-doc-cua-cay-kim-tien/\">c&acirc;y Kim Tiền c&oacute; độc kh&ocirc;ng</a>? V&agrave; mức độ độc của n&oacute; đến đ&acirc;u?</p>\r\n\r\n<p>C&acirc;u trả lời l&agrave; c&acirc;y Kim Tiền c&oacute; độc nhưng n&oacute; ở mức độ rất thấp, v&agrave; hiện nay cũng chưa c&oacute; trường hợp n&agrave;o tử vong v&igrave; lỡ ăn phải Kim Tiền.</p>\r\n\r\n<p><img alt=\"\" src=\"https://webcaycanh.com/wp-content/uploads/2021/01/muc-do-doc-to-kim-tien-thap-400x300.jpg\" style=\"height:300px; width:400px\" /></p>\r\n\r\n<p><em>Mức độ độc tố chứa trong c&acirc;y Kim Tiền thấp</em></p>\r\n\r\n<p>C&oacute; lẽ đến đ&acirc;y th&igrave; vẫn c&oacute; v&agrave;i người suy nghĩ do Webcaycanh b&aacute;n c&acirc;y th&igrave; sẽ n&oacute;i thế để c&ograve;n b&aacute;n c&acirc;y kh&ocirc;ng th&igrave; ai mua nữa. Tuy nhi&ecirc;n c&oacute; một v&agrave;i l&yacute; do để c&aacute;c bạn được thuyết phục hơn.</p>\r\n\r\n<p><strong>Thứ nhất</strong>: T&agrave;i liệu v&agrave; số liệu được lấy từ c&aacute;c nh&agrave; khoa học v&agrave; tr&iacute;ch từ c&aacute;c nguồn c&oacute; kiểm định.</p>\r\n\r\n<p><strong>Thứ hai</strong>: Nếu bạn hoặc c&oacute; thể quen ai đ&atilde; từng v&agrave;o c&aacute;c vựa trồng c&acirc;y trong nam như: Đồng Th&aacute;p, Sa Đ&eacute;c, Bến Tre&hellip;th&igrave; c&aacute;c bạn sẽ thấy những vựa trồng c&acirc;y Kim Tiền rất l&agrave; lớn v&agrave; to, nếu thực sự n&oacute; rất l&agrave; độc th&igrave; c&oacute; lẽ người ở đ&oacute;, hay gần đ&oacute; đ&atilde; &hellip; hết rồi.</p>\r\n\r\n<p><strong>Thứ ba</strong>: Bản th&acirc;n c&aacute;c bạn đi mua th&igrave; người tiếp x&uacute;c trực tiếp trồng, bẻ l&aacute;, tỉa c&agrave;nh l&agrave; chủ tiệm b&aacute;n c&acirc;y, hoặc ch&iacute;nh l&agrave; nh&acirc;n vi&ecirc;n&nbsp;<em><a href=\"https://webcaycanh.com/\" rel=\"noreferrer noopener\" target=\"_blank\">Webcaycanh</a></em>&nbsp;nếu n&oacute; rất độc th&igrave; c&oacute; lẽ chẳng ai d&aacute;m tiếp x&uacute;c.</p>\r\n\r\n<p><strong>Thứ tư</strong>: Nếu bạn đi đường hoặc v&agrave;o c&aacute;c văn ph&ograve;ng th&igrave; kh&ocirc;ng kh&oacute; để bắt gặp c&acirc;y Kim Tiền, nếu thực sự n&oacute; rất độc th&igrave; c&oacute; lẽ nh&agrave; nước đ&atilde; cấm ho&agrave;n to&agrave;n kh&ocirc;ng c&oacute; bu&ocirc;n b&aacute;n.</p>\r\n\r\n<p><strong>Thứ năm</strong>: Những t&agrave;i liệu bạn đọc c&acirc;y Kim Tiền cực độc c&oacute; phải ch&iacute;nh thống, hay l&agrave; những trang giật tip c&acirc;u view, hay c&oacute; th&igrave; n&oacute; n&oacute;i v&agrave; nhấn mạnh về canxi oxalat.</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c bạn l&agrave; người ti&ecirc;u d&ugrave;ng th&ocirc;ng th&aacute;i, v&agrave; c&oacute; những chứng kiến ri&ecirc;ng của bản th&acirc;n.</p>', 'su-that-ve-doc-cay-kim-tien', 'cây kim tiền', 'ckt.jpg', '2021-05-17', 1, NULL, NULL),
(5, 'Cách chăm sóc cây Hương Thảo', '<p>C&acirc;y Hương Thảo l&agrave; một loại c&acirc;y gia vị rất l&agrave; thơm, nếu ai đ&atilde; từng thấy hoặc mua th&igrave; chắc hẳn sẽ bị c&acirc;y hấp dẫn bởi m&ugrave;i hương. Tuy nhi&ecirc;n cũng c&oacute; rất nhiều người phải bỏ cuộc v&igrave; chăm nhiều lần m&agrave; kh&ocirc;ng th&agrave;nh c&ocirc;ng. Vậy để c&oacute; thể chăm s&oacute;c c&acirc;y Hương Thảo&nbsp;tốt th&igrave; bạn h&atilde;y theo d&otilde;i b&agrave;i viết dưới đ&acirc;y.</p>', '<h2 style=\"text-align:justify\">Một số yếu tố khi chăm s&oacute;c c&acirc;y Hương Thảo</h2>\r\n\r\n<p style=\"text-align:justify\">Webcaycanh sẽ chỉ bạn những điểm cần lưu &yacute; khi chăm s&oacute;c c&acirc;y Hương Thảo với c&aacute;c &yacute; quan trọng b&ecirc;n tr&ecirc;n v&agrave; giảm dần xuống ph&iacute;a dưới.</p>\r\n\r\n<h3 style=\"text-align:justify\">Chọn c&acirc;y</h3>\r\n\r\n<p style=\"text-align:justify\">Để c&acirc;y c&oacute; khả năng sống s&oacute;t v&agrave; đủ sức th&iacute;ch nghi trong điều kiện mới th&igrave; bạn cần phải chọn c&acirc;y khỏe:</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://webcaycanh.com/wp-content/uploads/2020/12/chon-cay-huong-thao-400x198.jpg\" style=\"height:198px; width:400px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><em>Chọn c&acirc;y Hương Thảo</em></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Ngọn c&acirc;y cần phải hướng thẳng l&ecirc;n trời. Kh&ocirc;ng chọn c&acirc;y c&oacute; ngọn đang rũ.</li>\r\n	<li style=\"text-align: justify;\">Chọn th&acirc;n c&acirc;y ở gốc phải gi&agrave; c&oacute; m&agrave;u n&acirc;u, x&aacute;m. Kh&ocirc;ng chọn c&acirc;y h&atilde;n c&ograve;n non.</li>\r\n	<li style=\"text-align: justify;\">L&aacute; c&acirc;y phải xanh tốt, cứng c&aacute;p. Kh&ocirc;ng chọn c&acirc;y c&oacute; l&aacute; đen, l&aacute; mềm kh&ocirc;ng căng mọng, thưa thớt.</li>\r\n	<li style=\"text-align: justify;\">Bụi c&acirc;y ph&acirc;n t&aacute;n đều từ t&acirc;m chậu ra. Kh&ocirc;ng chọn c&acirc;y bị lệch nhiều ra khỏi chậu vận chuyển c&acirc;y dễ bị dập, gẫy</li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:justify\">Vị tr&iacute; đặt c&acirc;y</h3>\r\n\r\n<p style=\"text-align:justify\">C&oacute; thể n&oacute;i sau khi đ&atilde; chọn được&nbsp;<a href=\"https://webcaycanh.com/cay-huong-thao/\" rel=\"noreferrer noopener\" target=\"_blank\">c&acirc;y Hương Thảo</a>&nbsp;tốt th&igrave; gần như yếu tốt quan trọng để c&acirc;y c&oacute; thể sống v&agrave; ph&aacute;t triển đ&oacute; ch&iacute;nh l&agrave; vị tr&iacute; đặt c&acirc;y.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Đặt c&acirc;y nơi tho&aacute;ng gi&oacute;, c&oacute; m&aacute;i che mưa, hoặc khi mưa to, l&acirc;u th&igrave; phải b&ecirc; v&agrave;o trong</li>\r\n	<li style=\"text-align: justify;\">C&oacute; &aacute;nh nắng &iacute;t 4h/ng&agrave;y tr&aacute;nh &aacute;nh nắng gắt buổi trưa, m&ugrave;a đ&ocirc;ng ở miền Bắc th&igrave; c&oacute; thể đặt c&acirc;y ở ngo&agrave;i trời.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Từ những đặc điểm tr&ecirc;n th&igrave; ta c&oacute; thể thấy l&agrave; c&acirc;y Hương Thảo kh&ocirc;ng thể trồng để b&agrave;n l&agrave;m việc, văn ph&ograve;ng. Nếu muốn để trong nh&agrave; th&igrave; chỉ c&oacute; thể l&agrave; b&ecirc; v&agrave;o 1 l&aacute;t cho ph&ograve;ng thơm rồi lại b&ecirc;n ra ngo&agrave;i. Nơi đặt ph&ugrave; hợp nhất l&agrave; ban c&ocirc;ng, cửa sổ, h&agrave;nh lang&hellip;</p>\r\n\r\n<h3 style=\"text-align:justify\">Đất trồng</h3>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://webcaycanh.com/wp-content/uploads/2020/12/dat-trong-cay-huong-thao.jpg\" style=\"height:300px; width:400px\" /></p>\r\n\r\n<p style=\"text-align:justify\"><em>Đất trồng c&acirc;y Hương Thảo</em></p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Hương Thảo thuộc loại rễ ch&ugrave;m, rễ mỏng v&agrave; b&eacute; nhưng ph&aacute;t triển nhanh. Do vậy đất trồng c&acirc;y phải l&agrave; loại tơi xốp, c&oacute; độ th&ocirc;ng tho&aacute;ng, m&ugrave;n cao để c&acirc;y dễ ph&aacute;t triển v&agrave; đủ chất dinh dưỡng, n&ecirc;n b&oacute;n th&ecirc;m ph&acirc;n tan chậm, hoặc bổ sung th&ecirc;m dinh dưỡng cho c&acirc;y khi đ&atilde; trồng l&acirc;u.</p>\r\n\r\n<h3 style=\"text-align:justify\">Nước</h3>\r\n\r\n<p style=\"text-align:justify\">Cần giữ đất ẩm cho đất nhưng kh&ocirc;ng ướt, nghĩa l&agrave; lượng nước tưới vừa đủ để ẩm đất hoặc chậu c&acirc;y phải c&oacute; lỗ tho&aacute;t nước, hay được k&ecirc; l&ecirc;n cao để c&acirc;y dễ d&agrave;ng tho&aacute;t nước dư nhanh.</p>\r\n\r\n<h2 style=\"text-align:justify\">Ch&uacute;c bạn chăm s&oacute;c c&acirc;y Hương Thảo lu&ocirc;n ph&aacute;t triển lu&ocirc;n xanh tốt</h2>', 'cach-cham-soc-cay-huong-thao', 'cham soc huong thao, huong thao', 'cayhuongthao78.jpg', '2021-05-17', 1, NULL, NULL),
(6, 'Cách chăm sóc cây cảnh trong nhà', '<p style=\"text-align:justify\">C&acirc;y cảnh đặt trong nh&agrave; sẽ c&oacute; c&aacute;ch chăm s&oacute;c kh&aacute;c với c&acirc;y cảnh đặt ngo&agrave;i trời hay trồng ở vườn. Bởi c&aacute;c yếu tố như &aacute;nh s&aacute;ng, độ ẩm sẽ kh&aacute;c nhau, v&igrave; vậy việc chăm s&oacute;c cũng sẽ cầu kỳ hơn. Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chia sẻ tới c&aacute;c bạn c&aacute;ch chăm s&oacute;c c&acirc;y cảnh trong nh&agrave; để bạn tham khảo, gi&uacute;p c&acirc;y sinh trưởng v&agrave; ph&aacute;t triển tốt, chắc chắn sẽ rất hữu &iacute;ch cho bạn đ&oacute;.</p>', '<h2 style=\"text-align:justify\"><strong>1. &Aacute;nh s&aacute;ng khi chăm s&oacute;c c&acirc;y cảnh trong nh&agrave;</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Để chăm s&oacute;c&nbsp;<a href=\"https://webcaycanh.com/cay-canh-trong-nha/\"><strong>c&acirc;y cảnh trong nh&agrave;</strong></a>, yếu tố đầu ti&ecirc;n bạn cần lưu &yacute; đ&oacute; l&agrave; &aacute;nh s&aacute;ng. Vậy &aacute;nh s&aacute;ng n&agrave;o ph&ugrave; hợp để c&acirc;y ph&aacute;t triển. T&ugrave;y từng đặc điểm của mỗi loại c&acirc;y sẽ c&oacute; lượng &aacute;nh s&aacute;ng kh&aacute;c nhau. C&oacute; những loại c&acirc;y cảnh chịu được &aacute;nh s&aacute;ng thấp, nhưng c&oacute; những c&acirc;y cảnh cần &aacute;nh s&aacute;ng tự nhi&ecirc;n mới ph&aacute;t triển được.</p>\r\n\r\n<p style=\"text-align:justify\">Tuy nhi&ecirc;n d&ugrave; l&agrave; những c&acirc;y c&oacute; khả năng chịu &aacute;nh s&aacute;ng thấp th&igrave; vẫn phải đảm bảo đầy đủ &aacute;nh s&aacute;ng cho c&acirc;y ph&aacute;t triển. Nếu bạn đặt c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch, bạn n&ecirc;n đảm bảo đặt c&acirc;y ở vị tr&iacute; c&oacute; khoảng 2 &ndash; 3 giờ c&oacute; &aacute;nh s&aacute;ng tự nhi&ecirc;n trong ph&ograve;ng. Hoặc bạn n&ecirc;n đặt c&acirc;y phơi nắng 2 &ndash; 3 giờ mỗi tuần để c&acirc;y ph&aacute;t triển tự nhi&ecirc;n.</p>\r\n\r\n<p style=\"text-align:justify\">&Aacute;nh s&aacute;ng &lsquo;mạnh&rsquo; thường xuất hiện ở ph&iacute;a trước c&aacute;c cửa sổ hướng nam, cửa sổ lớn ở ph&iacute;a đ&ocirc;ng hoặc ph&iacute;a t&acirc;y kh&ocirc;ng bị cản trở. C&aacute;c cửa sổ nhỏ ở ph&iacute;a đ&ocirc;ng hoặc ph&iacute;a t&acirc;y kh&ocirc;ng c&oacute; g&igrave; cản trở cung cấp &aacute;nh s&aacute;ng &lsquo;trung b&igrave;nh&rsquo;. Cửa sổ ph&iacute;a bắc v&agrave; những cửa sổ c&oacute; k&iacute;nh mờ chỉ cung cấp &aacute;nh s&aacute;ng &lsquo;thấp&rsquo;. C&acirc;y của bạn sẽ chỉ nhận được &aacute;nh s&aacute;ng thấp nếu ch&uacute;ng c&aacute;ch hơn 2 m&eacute;t so với cửa sổ bất kỳ hướng n&agrave;o.</p>\r\n\r\n<p style=\"text-align:justify\">Ngo&agrave;i ra, nhiều gia đ&igrave;nh c&ograve;n sử dụng th&ecirc;m &aacute;nh s&aacute;ng ph&aacute;t ra từ loại đ&egrave;n giống như &aacute;nh s&aacute;ng mặt trời n&ecirc;n c&acirc;y c&oacute; thể quang hợp được như m&ocirc;i trường b&ecirc;n ngo&agrave;i, c&acirc;y sẽ ph&aacute;t triển tốt hơn. Tuy nhi&ecirc;n nếu tận dụng được &aacute;nh s&aacute;ng tự nhi&ecirc;n sẽ tốt hơn so với &aacute;nh s&aacute;ng nh&acirc;n tạo, c&acirc;y quang hợp tốt, l&aacute; xanh v&agrave; sinh trưởng khỏe mạnh.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>2. Lượng nước cho c&acirc;y cảnh trong nh&agrave;</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Yếu tố thứ hai cần lưu &yacute; khi&nbsp;<a href=\"https://webcaycanh.com/cach-cham-soc-cay-canh-trong-nha/\"><strong>chăm s&oacute;c c&acirc;y cảnh trong nh&agrave;</strong></a>&nbsp;đ&oacute; l&agrave; lượng nước. Th&ocirc;ng thường với c&acirc;y trồng trong nh&agrave; kh&ocirc;ng n&ecirc;n tưới qu&aacute; nhiều nước. Khi n&agrave;o bạn thấy đất kh&ocirc; th&igrave; l&uacute;c đ&oacute; n&ecirc;n tưới nước l&agrave; được.</p>\r\n\r\n<p style=\"text-align:justify\">Ngo&agrave;i ra khi tưới nước cho c&acirc;y, bạn n&ecirc;n d&ugrave;ng b&igrave;nh phun nước để phun cho c&acirc;y. V&agrave;o m&ugrave;a h&egrave; n&ecirc;n phun ng&agrave;y 2 lần, m&ugrave;a đ&ocirc;ng ng&agrave;y một lần để tăng cường độ ẩm, l&agrave;m sạch l&aacute;, c&oacute; lợi cho qu&aacute; tr&igrave;nh quang hợp của c&acirc;y, l&agrave;m c&acirc;y xanh tốt.</p>\r\n\r\n<p style=\"text-align:justify\">T&ugrave;y v&agrave;o từng loại c&acirc;y c&oacute; khả năng chịu nước kh&aacute;c nhau, đồng thời lượng nước cũng kh&aacute;c nhau để c&acirc;y ph&aacute;t triển. Bạn c&oacute; thể chọn những chậu c&acirc;y ph&ugrave; hợp, c&oacute; thể d&ugrave;ng chậu c&acirc;y cảnh c&oacute; đĩa đệm b&ecirc;n dưới để dễ d&agrave;ng di chuyển v&agrave; khả năng tho&aacute;t nước tốt, kh&ocirc;ng bị chảy nước ra nh&agrave;.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"cach-cham-soc-cay-canh-trong-nha\" src=\"https://webcaycanh.com/wp-content/uploads/2019/02/cach-cham-soc-cay-canh-trong-nha1.jpg\" style=\"height:334px; width:500px\" /></p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>3. B&oacute;n ph&acirc;n cho c&acirc;y</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Lượng ph&acirc;n b&oacute;n cho c&acirc;y cảnh khi trồng trong nh&agrave; ph&ugrave; hợp sẽ gi&uacute;p th&uacute;c đẩy qu&aacute; tr&igrave;nh ph&aacute;t triển của c&acirc;y. Nếu bạn b&oacute;n qu&aacute; nhiều ph&acirc;n, c&acirc;y nhanh ph&aacute;t triển, l&agrave;m mất d&aacute;ng v&agrave; ph&aacute; thế. Thậm ch&iacute; c&ograve;n l&agrave;m chết c&acirc;y.</p>\r\n\r\n<p style=\"text-align:justify\">Nhưng nếu b&oacute;n qu&aacute; &iacute;t sẽ dẫn đến c&acirc;y thiếu dưỡng chất, kh&oacute; ph&aacute;t triển v&agrave; l&agrave;m chết c&agrave;nh. V&igrave; vậy, c&aacute;ch tốt nhất l&agrave; khoảng nửa th&aacute;ng b&oacute;n ph&acirc;n cho c&acirc;y một lần, tỉ lệ b&oacute;n 5% ph&acirc;n tổng hợp cho c&acirc;y. Ngo&agrave;i ra, d&ugrave;ng nước vo gạo để tưới c&acirc;y cũng c&oacute; t&aacute;c dụng rất tốt cho sự ph&aacute;t triển của c&acirc;y.</p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y trồng trong nh&agrave; hạn chế sử dụng thuốc trừ s&acirc;u v&igrave; sẽ ảnh hưởng đến sức khỏe của ch&iacute;nh bạn. V&igrave; vậy nếu c&acirc;y c&oacute; biểu hiện của s&acirc;u bệnh, đầu ti&ecirc;n bạn n&ecirc;n d&ugrave;ng cồn để lau sạch l&aacute; v&agrave; gốc sau đ&oacute; mới sử dụng c&aacute;c loại thuốc hữu cơ để trừ s&acirc;u bệnh.</p>\r\n\r\n<p style=\"text-align:justify\">Nếu c&acirc;y c&oacute; hiện tượng v&agrave;ng &uacute;a, kh&ocirc; h&eacute;o v&agrave; rụng l&aacute;&hellip; bạn cần c&oacute; biện ph&aacute;p chăm s&oacute;c kịp thời để c&acirc;y phục hồi lại sức sống. Kh&ocirc;ng n&ecirc;n cho c&acirc;y tiếp x&uacute;c với &aacute;nh s&aacute;ng mặt trời, g&acirc;y ảnh hưởng bất lợi đến c&agrave;nh, l&aacute; v&agrave; c&oacute; thể l&agrave;m chết c&acirc;y. V&igrave; vậy n&ecirc;n đặt c&acirc;y ở những nơi tho&aacute;ng m&aacute;t, trong l&agrave;nh v&agrave; tr&aacute;nh gi&oacute; mạnh.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>4. Trồng lại c&acirc;y h&agrave;ng năm</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Trồng lại c&acirc;y h&agrave;ng năm cũng l&agrave; c&aacute;ch chăm s&oacute;c c&acirc;y cảnh trong nh&agrave; m&agrave; bạn n&ecirc;n lưu &yacute;. C&acirc;y được trồng lại bởi c&acirc;y đ&atilde; qu&aacute; to so với chậu, bạn n&ecirc;n trồng lại c&acirc;y &iacute;t nhất 1 lần/năm. Thời điểm th&iacute;ch hợp để trồng lại c&acirc;y đ&oacute; l&agrave; m&agrave;u xu&acirc;n hay đầu h&egrave;, l&uacute;c đ&oacute; thời tiết thuận lợi.</p>\r\n\r\n<p style=\"text-align:justify\">Khi đưa c&acirc;y ra khỏi chậu, lắc mạnh để đất cũ rơi khỏi rễ. Nếu bầu rễ qu&aacute; chặt v&agrave; kh&ocirc;ng thể nhấc l&ecirc;n được, sử dụng một con dao lớn để l&aacute;ch v&agrave;o phần đất s&aacute;t th&agrave;nh chậu v&agrave; dưới đ&aacute;y chậu. Sau khi nhấc c&acirc;y ra, h&atilde;y th&ecirc;m đất mới v&agrave;o đ&aacute;y chậu. Đặt c&acirc;y trở lại v&agrave; th&ecirc;m đất mới xung quanh chậu. Mỗi loại c&acirc;y ph&ugrave; hợp với từng loại đất kh&aacute;c nhau, v&igrave; vậy bạn n&ecirc;n lưu &yacute; t&igrave;m hiểu trước khi sang chậu cho c&acirc;y nh&eacute;.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch chăm s&oacute;c c&acirc;y cảnh trong nh&agrave; kh&ocirc;ng kh&oacute;, bạn cần lưu &yacute; một số yếu tố tr&ecirc;n khi trồng nh&eacute;. Đảm bảo c&aacute;c yếu tố tr&ecirc;n, c&acirc;y sẽ ph&aacute;t triển tốt, kh&ocirc;ng bị s&acirc;u bệnh v&agrave; ph&aacute;t triển tươi tốt. Hi vọng những th&ocirc;ng tin tr&ecirc;n sẽ gi&uacute;p bạn c&oacute; th&ecirc;m kinh nghiệm khi trồng c&acirc;y trong cũng như biết th&ecirc;m được kinh nghiệm chăm s&oacute;c c&acirc;y trong gia đ&igrave;nh của m&igrave;nh.</p>', 'cach-cham-soc-cay-canh-trong-nha', 'cham soc cay trong nha', 'cham-soc-cay-canh72.jpg', '2021-05-17', 1, NULL, NULL),
(7, 'Các loại cây to trồng trong nhà có ý nghĩa phong thủy cực tốt', '<p style=\"text-align:justify\">C&acirc;y to trồng trong nh&agrave; th&iacute;ch hợp với những ng&ocirc;i nh&agrave; c&oacute; diện t&iacute;ch lớn, đặt ở ph&ograve;ng kh&aacute;ch hoặc ban c&ocirc;ng. Nếu căn nh&agrave; của bạn c&oacute; diện t&iacute;ch thoải m&aacute;i để đặt c&acirc;y cảnh, bạn c&oacute; thể tham khảo c&aacute;c loại c&acirc;y to trồng trong nh&agrave; c&oacute; &yacute; nghĩa phong thủy cực tốt dưới đ&acirc;y nh&eacute;.</p>', '<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>1. C&acirc;y Thiết Mộc Lan &ndash; C&acirc;y to trồng trong nh&agrave; n&ecirc;n trồng</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">Trong số những c&acirc;y to trồng trong nh&agrave; th&igrave; đầu ti&ecirc;n phải kể đến đ&oacute; l&agrave; C&acirc;y Thiết Mộc Lan. C&acirc;y Thiết Mộc Lan hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y Ph&aacute;t T&agrave;i, dễ chăm s&oacute;c v&agrave; dễ sinh trưởng. Đặc điểm của C&acirc;y Thiết Mộc Lan đ&oacute; l&agrave; l&aacute; sắc xanh, th&iacute;ch nghi với điều kiện &aacute;nh s&aacute;ng v&agrave; độ ẩm trong nh&agrave;. D&aacute;ng thẳng, c&agrave;nh l&aacute; c&oacute; phần gọn g&agrave;ng v&agrave; th&iacute;ch hợp để đặt trang tr&iacute; c&aacute;c g&oacute;c trong ph&ograve;ng kh&aacute;ch hoặc dọc lối đi trong nh&agrave;. Hoa của C&acirc;y Thiết Mộc Lan mọc th&agrave;nh ch&ugrave;m m&agrave;u trắng v&agrave; c&oacute; m&ugrave;i rất thơm nhất l&agrave; v&agrave;o ban đ&ecirc;m.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"cac-loai-cay-to-trong-trong-nha-co-y-nghia-phong-thuy-cuc-tot\" src=\"https://webcaycanh.com/wp-content/uploads/2019/02/cac-loai-cay-to-trong-trong-nha-co-y-nghia-phong-thuy-cuc-tot.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Theo phong thủy,&nbsp;<a href=\"https://webcaycanh.com/cay-phat-tai/\">C&acirc;y Thiết Mộc Lan</a>&nbsp;được xem l&agrave; biểu tượng của may mắn v&agrave; t&agrave;i lộc. Gia chủ trồng C&acirc;y Thiết Mộc Lan trong nh&agrave; sẽ mang về t&agrave;i lộc v&agrave; tiền bạc, nhất l&agrave; khi c&acirc;y ra hoa, bởi đ&oacute; l&agrave; l&uacute;c b&aacute;o hiệu tiền t&agrave;i sắp đến với bạn. Nếu đặt c&acirc;y theo hướng Đ&ocirc;ng hoặc Đ&ocirc;ng Nam của ng&ocirc;i nh&agrave;, c&acirc;y sẽ đại diện cho h&agrave;nh Mộc, c&oacute; &yacute; nghĩa đem đến may mắn cho gia chủ.</p>\r\n\r\n<p style=\"text-align:justify\">Th&ocirc;ng thường khi mua C&acirc;y Thiết Mộc Lan nhiều người quan t&acirc;m đến số c&agrave;nh của c&acirc;y. V&iacute; dụ 2 c&agrave;nh C&acirc;y Thiết Mộc Lan l&agrave; biểu tượng của sự trọn vẹn, may mắn trong t&igrave;nh y&ecirc;u. Nếu 3 c&agrave;nh C&acirc;y Thiết Mộc Lan l&agrave; biểu tượng của hạnh ph&uacute;c, 5 c&agrave;nh C&acirc;y Thiết Mộc Lan l&agrave; biểu tượng của sức khỏe, 8 c&agrave;nh C&acirc;y Thiết Mộc Lan l&agrave; biểu tượng của sự ph&aacute;t t&agrave;i v&agrave; ph&aacute;t lộc. Ch&iacute;nh v&igrave; thế khi mua C&acirc;y Thiết Mộc Lan về trồng, bạn c&oacute; thể dựa theo những &yacute; nghĩa n&agrave;y m&agrave; chọn số lượng t&ugrave;y v&agrave;o mong muốn, ước nguyện của bản th&acirc;n.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>2. Trồng C&acirc;y Kim Tiền trong nh&agrave;</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">Trong số c&aacute;c loại c&acirc;y cảnh c&oacute; &yacute; nghĩa phong thủy cực tốt th&igrave; kh&ocirc;ng thể bỏ qua C&acirc;y Kim Tiền. C&acirc;y Kim Tiền l&agrave; lo&agrave;i c&acirc;y c&oacute; th&acirc;n rễ to khỏe v&agrave; mọng nước với phần gốc c&acirc;y ph&igrave;nh to trữ nước. C&acirc;y Kim Tiền c&oacute; t&ecirc;n khoa học l&agrave; Zamioculcas zamifollia v&agrave; c&oacute; nguồn gốc từ Ch&acirc;u Phi, thế n&ecirc;n sức sống của c&acirc;y Kim tiền rất mạnh mẽ v&agrave; dẻo dai trước nhiều m&ocirc;i trường kh&aacute;c nhau từ c&aacute;i kh&ocirc; n&oacute;ng nơi sa mạc cho đến c&aacute;i lạnh v&agrave; thiếu nắng, &iacute;t nước chốn c&ocirc;ng sở, văn ph&ograve;ng.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><a href=\"https://webcaycanh.com/cay-kim-tien/\">C&acirc;y Kim Tiền</a></strong>&nbsp;th&iacute;ch hợp để trồng trong nh&agrave; v&igrave; vẻ đẹp cứng c&aacute;p v&agrave; l&aacute; k&eacute;p dạng to mọc san s&aacute;t nhau. Đ&acirc;y l&agrave; lo&agrave;i c&acirc;y nội thất c&oacute; sức sống mạnh mẽ, dễ chăm s&oacute;c v&agrave; kh&ocirc;ng mất nhiều thời gian của bạn.</p>\r\n\r\n<p style=\"text-align:justify\">Bản th&acirc;n C&acirc;y Kim Tiền được xem l&agrave; hội tụ đầy đủ c&aacute;c yếu tố về phong thủy đ&oacute; l&agrave; Kim, Mộc, Thủy, Kim. C&acirc;y l&agrave; biểu tượng của Mộc, nếu trồng trong đất sẽ được xem l&agrave; Thổ, trồng dưới nước sẽ được xem l&agrave; Thủy, trồng trong b&igrave;nh thủy sinh được xem l&agrave; Kim. Nếu bạn để &yacute; sẽ thấy l&aacute; của C&acirc;y Kim Tiền c&oacute; viền tr&ograve;n, xanh v&agrave; mọng nước mang t&iacute;nh &acirc;m th&iacute;ch hợp với những kiến tr&uacute;c hiện đại, điều h&ograve;a v&agrave; c&acirc;n bằng &acirc;m dương. Ch&iacute;nh v&igrave; v&acirc;y, C&acirc;y Kim Tiền được đ&aacute;nh gi&aacute; l&agrave; loại c&acirc;y phong thủy đem đến t&agrave;i lộc, thịnh vượng, gi&agrave;u sang, sức khỏe cho gia chủ. Đặc biệt khi C&acirc;y Kim Tiền ra hoa gia chủ c&agrave;ng đắc lộc.</p>\r\n\r\n<p style=\"text-align:justify\">Theo ngũ h&agrave;nh, C&acirc;y Kim Tiền rất ph&ugrave; hợp với người mệnh Kim v&agrave; mệnh hỏa. Thế n&ecirc;n những người mệnh Kim v&agrave; mệnh Hỏa n&ecirc;n đặt C&acirc;y Kim Tiền trong nh&agrave; để tạo nguồn năng lượng, thuận lợi trong c&ocirc;ng việc v&agrave; cuộc sống.</p>\r\n\r\n<p style=\"text-align:justify\">Những người tuổi T&yacute; cũng được xem l&agrave; rất hợp với C&acirc;y Kim Tiền. Nếu người tuổi n&agrave;y gặp nhiều kh&oacute; khăn trong việc giữ tiền bạc v&agrave; trong c&ocirc;ng việc th&igrave; một chậu C&acirc;y Kim Tiền sẽ gi&uacute;p họ mạnh mẽ v&agrave; vượt qua kh&oacute; khăn trong cuộc sống.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>3. C&acirc;y Lưỡi Hổ</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://webcaycanh.com/cay-luoi-ho/\">C&acirc;y Lưỡi Hổ</a>&nbsp;hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y Lưỡi Cọp. C&acirc;y Lưỡi Hổ c&oacute; t&ecirc;n khoa học l&agrave; Sansevieria trifasciata, c&oacute; nguồn gốc ở v&ugrave;ng nhiệt đới T&acirc;y Phi n&ecirc;n khả năng chịu n&oacute;ng, kh&ocirc; hạn rất tốt, c&oacute; sức sống bền bỉ ngay cả trong điều kiện thiếu &aacute;nh s&aacute;ng.</p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Lưỡi Hổ l&agrave; c&acirc;y to trồng trong nh&agrave; được nhiều gia đ&igrave;nh lựa chọn. C&acirc;y kh&ocirc;ng chỉ gi&uacute;p l&agrave;m sạch kh&ocirc;ng gian, mang đến kh&ocirc;ng gian trong l&agrave;nh cho gia đ&igrave;nh bạn m&agrave; c&ograve;n c&oacute; t&aacute;c dụng về mặt sức khỏe.</p>\r\n\r\n<p style=\"text-align:justify\">Trong phong thủy, C&acirc;y Lưỡi Hổ l&agrave; biểu tượng của sức mạnh ch&uacute;a sơn l&acirc;m. L&aacute; của C&acirc;y Lưỡi Hổ giống như một con dao sắc gi&uacute;p bảo vệ gia đ&igrave;nh khỏi những điều xấu xa, trừ t&agrave; v&agrave; xua đuổi ma quỷ. L&aacute; lưỡi hổ thường mọc thẳng thể hiện sự quyết đo&aacute;n, &yacute; ch&iacute; tiến l&ecirc;n, v&igrave; vậy thường l&agrave;m qu&agrave; tặng để tặng kh&aacute;ch h&agrave;ng hay đối t&aacute;c trong những dịp đặc biệt.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"cac-loai-cay-to-trong-trong-nha-co-y-nghia-phong-thuy-cuc-tot\" src=\"https://webcaycanh.com/wp-content/uploads/2019/02/cac-loai-cay-to-trong-trong-nha-co-y-nghia-phong-thuy-cuc-tot1.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>4. C&acirc;y Vạn Ni&ecirc;n Thanh</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">Nhắc đến c&acirc;y to trồng trong nh&agrave; kh&ocirc;ng thể bỏ qua C&acirc;y Vạn Ni&ecirc;n Thanh. Đất trồng C&acirc;y Vạn Ni&ecirc;n Thanh cần đất tơi xốp, ẩm v&agrave; tr&aacute;nh được t&igrave;nh trạng ngập &uacute;ng.</p>\r\n\r\n<p style=\"text-align:justify\">Khi trồng c&acirc;y n&agrave;y, mỗi ng&agrave;y bạn n&ecirc;n tưới nước 2 lần v&agrave;o s&aacute;ng v&agrave; tối. Ch&uacute; &yacute; tưới phun vạn ni&ecirc;n thanh để l&aacute; c&acirc;y c&oacute; thể hấp thụ nước, duy tr&igrave; độ xanh tươi. Lượng ph&acirc;n b&oacute;n cho C&acirc;y Vạn Ni&ecirc;n Thanh kh&ocirc;ng qu&aacute; nhiều, một th&aacute;ng b&oacute;n ph&acirc;n 1 lần sẽ gi&uacute;p c&acirc;y ph&aacute;t triển tốt hơn.</p>\r\n\r\n<p style=\"text-align:justify\">Trong phong thủy, C&acirc;y Vạn Ni&ecirc;n Thanh l&agrave; biểu tượng của sự c&aacute;t tường, trường tồn v&agrave; bền vững bởi c&acirc;y c&oacute; thể sống đến 100 năm. V&igrave; vậy một chậu C&acirc;y Vạn Ni&ecirc;n Thanh xanh tươi thường được gia chủ b&agrave;y trong nh&agrave; với mong muốn một năm mới sung t&uacute;c, may mắn v&agrave; thịnh vượng.</p>\r\n\r\n<p style=\"text-align:justify\">Đặc biệt những người tuổi Th&igrave;n rất th&iacute;ch hợp với C&acirc;y Vạn Ni&ecirc;n Thanh n&agrave;y. Nếu đặt c&acirc;y trong nh&agrave;, bạn n&ecirc;n đặt ở hướng Đ&ocirc;ng Nam hoặc đặt tr&ecirc;n b&agrave;n l&agrave;m việc để lu&ocirc;n gặp thuận lợi v&agrave; b&igrave;nh an.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>5. C&acirc;y B&agrave;ng Singapore</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">V&agrave;i năm trở lại đ&acirc;y,&nbsp;<a href=\"https://webcaycanh.com/cay-bang-singapore/\">C&acirc;y B&agrave;ng Singapore</a>&nbsp;đ&atilde; trở th&agrave;nh hiện tượng c&acirc;y cảnh được nhiều kh&aacute;ch h&agrave;ng săn l&ugrave;ng. C&acirc;y B&agrave;ng Singapore th&iacute;ch hợp đặt trong nh&agrave;, trong ph&ograve;ng kh&aacute;ch hay trong nh&agrave; h&agrave;ng bởi k&iacute;ch thước c&acirc;y kh&ocirc;ng qu&aacute; cao v&agrave; vẻ đẹp sang trọng mang đến một kh&ocirc;ng gian sang trọng v&agrave; tr&agrave;n đầy sức sống cho ng&ocirc;i nh&agrave; của bạn.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://webcaycanh.com/wp-content/uploads/2018/01/bang-sing-1.jpg\"><img alt=\"bang-sing\" src=\"https://webcaycanh.com/wp-content/uploads/2018/01/bang-sing-1-293x400.jpg\" style=\"height:400px; width:293px\" /></a></p>\r\n\r\n<p style=\"text-align:justify\">Trong phong thủy, C&acirc;y B&agrave;ng Singapore l&agrave; biểu trưng của tiền t&agrave;i, gi&agrave;u sang v&agrave; may mắn. Đ&acirc;y cũng l&agrave; biểu tượng của nguồn năng lượng dồi d&agrave;o, mang tới cho gia chủ sức khỏe, thịnh vượng v&agrave; b&igrave;nh an.</p>\r\n\r\n<p style=\"text-align:justify\">Nếu bạn quan t&acirc;m&nbsp;<strong>c&acirc;y to trồng trong nh&agrave;</strong>&nbsp;c&oacute; &yacute; nghĩa phong thủy, bạn c&oacute; thể tham khảo những mẫu c&acirc;y tr&ecirc;n để lựa chọn nh&eacute;. Chắc chắn những mẫu c&acirc;y tr&ecirc;n sẽ tạo kh&ocirc;ng gian mới mẻ v&agrave; cải thiện phong thủy cho ng&ocirc;i nh&agrave; của bạn đ&oacute;.</p>', 'cac-loai-cay-to-trong-trong-nha-co-y-nghia-phong-thuy-cuc-tot', 'phong thuy trong nha', 'cpt49.jpg', '2021-05-17', 1, NULL, NULL),
(8, 'Cách bố trí cây cảnh trong phòng khách', '<p style=\"text-align:justify\">Bố tr&iacute; c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch kh&ocirc;ng hề đơn giản l&agrave; yếu tố thẩm mỹ m&agrave; c&ograve;n mang &yacute; nghĩa về phong thủy. Nếu biết c&aacute;ch sắp xếp đồ đạc, c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch hợp phong thủy sẽ gi&uacute;p gia chủ ng&ocirc;i ng&ocirc;i nh&agrave; đ&oacute; thăng quan, tiến chức v&agrave; thuận lợi trong c&ocirc;ng việc. V&igrave; vậy&nbsp;<strong>c&aacute;ch bố tr&iacute; c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch</strong>&nbsp;rất quan trọng, bạn c&oacute; thể tham khảo một số gợi &yacute; dưới đ&acirc;y.</p>', '<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>1. C&aacute;ch bố tr&iacute; c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">Ph&ograve;ng kh&aacute;ch l&agrave; kh&ocirc;ng gian sang trọng v&agrave; quan trọng của mỗi căn nh&agrave;. Ph&ograve;ng kh&aacute;ch l&agrave; nơi gia đ&igrave;nh hay tụ tập, qu&acirc;y quần b&ecirc;n nhau sau một ng&agrave;y l&agrave;m việc mệt mỏi. V&igrave; vậy nếu ph&ograve;ng kh&aacute;ch c&oacute; phong thủy tốt sẽ gi&uacute;p bạn đi l&ecirc;n nhanh ch&oacute;ng, thuận lợi hơn trong c&ocirc;ng việc.</p>\r\n\r\n<p style=\"text-align:justify\">Nguy&ecirc;n tắc đầu ti&ecirc;n khi bố tr&iacute; c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch đ&oacute; l&agrave; hạn chế sử dụng những c&acirc;y to, cao ở ngay giữa ph&ograve;ng. Khi lựa chọn cũng kh&ocirc;ng n&ecirc;n chọn số lượng c&acirc;y qu&aacute; nhiều, hoa cũng kh&ocirc;ng n&ecirc;n b&agrave;i tr&iacute; nhiều. Bạn n&ecirc;n chọn những c&acirc;y, hoa tạo th&agrave;nh những bức b&igrave;nh phong xanh, đẹp tự nhi&ecirc;n v&agrave; trang nh&atilde;.</p>\r\n\r\n<p style=\"text-align:justify\">Nguy&ecirc;n tắc thứ hai đ&oacute; l&agrave; kh&ocirc;ng n&ecirc;n chọn những loại c&acirc;y cảnh c&oacute; gai nhọn hay c&acirc;y mềm rũ rượi, c&acirc;y hay bị rụng hoa v&igrave; những loại c&acirc;y n&agrave;y x&eacute;t về mặt phong thủy kh&ocirc;ng c&oacute; &yacute; nghĩa tốt. Nếu đặt c&acirc;y như vậy trong ph&ograve;ng kh&aacute;ch sẽ mang đến nhiều ch&ocirc;ng gai, thất bại trong cuộc sống của gia chủ.</p>\r\n\r\n<p style=\"text-align:justify\">Nguy&ecirc;n tắc thứ ba trong c&aacute;ch bố tr&iacute; c&acirc;y cảnh trong ph&oacute;ng kh&aacute;ch đ&oacute; l&agrave; lựa chọn những c&acirc;y bonsai với tuổi thọ cao sẽ rất ph&ugrave; hợp v&igrave; n&oacute; mang &yacute; nghĩa trường tồn, bền vững theo năm th&aacute;ng. Bạn c&oacute; thể bố tr&iacute; những c&acirc;y nhỏ gọn, tr&aacute;nh vướng v&iacute;u v&agrave; c&oacute; t&aacute;c dụng khử m&ugrave;i, giảm kh&oacute;i thuốc hoặc lọc bụi như dương xỉ hay trầu b&agrave;. Một số c&acirc;y trồng trong nước như s&uacute;ng, sen&hellip; d&ugrave;ng l&agrave;m cảnh v&agrave; trang tr&iacute; ph&ugrave; hợp những g&oacute;c thư gi&atilde;n, tiếp kh&aacute;ch th&acirc;n mật.</p>\r\n\r\n<p style=\"text-align:justify\">Nguy&ecirc;n tắc thứ tư trong&nbsp;<a href=\"https://webcaycanh.com/cach-bo-tri-cay-canh-trong-phong-khach/\"><strong>c&aacute;ch bố tr&iacute; c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch</strong></a>&nbsp;đ&oacute; l&agrave; dựa tr&ecirc;n mệnh của gia chủ. Nếu gia chủ mệnh Thổ n&ecirc;n chọn những t&ocirc;ng m&agrave;u v&agrave;ng, đỏ sẽ rất tốt cho gia chủ. Nếu gia chủ mệnh Hỏa th&igrave; n&ecirc;n chọn những t&ocirc;ng m&agrave;u n&oacute;ng như đỏ, hồng hay t&iacute;m sẽ rất tốt. Nếu gia chủ mệnh Kim th&igrave; những c&acirc;y cảnh mang sắc v&agrave;ng l&agrave; sự lựa chọn hợp l&yacute;. Nếu gia chủ mệnh Mộc th&igrave; những c&acirc;y c&oacute; m&agrave;u xanh l&aacute; c&acirc;y sẽ tương sinh cho người mệnh n&agrave;y rất nhiều. Nếu gia chủ mệnh Thủy th&igrave; c&aacute;c t&ocirc;ng m&agrave;u xanh dương sẽ l&agrave; một gợi &yacute; hay đ&oacute;. Chọn c&acirc;y cảnh đ&uacute;ng mệnh, b&agrave;i tr&iacute; ph&ugrave; hợp trong ph&ograve;ng kh&aacute;ch sẽ tương sinh, hỗ trợ cho gia chủ rất nhiều trong cuộc sống v&agrave; c&ocirc;ng việc. Bạn c&oacute; thể tham khảo mệnh của m&igrave;nh cũng như dựa tr&ecirc;n c&aacute;c nguy&ecirc;n tắc tr&ecirc;n để l&agrave;m đẹp cho ph&ograve;ng kh&aacute;ch của m&igrave;nh nh&eacute;.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>2. Những c&acirc;y cảnh n&ecirc;n b&agrave;i tr&iacute; trong ph&ograve;ng kh&aacute;ch</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<strong><a href=\"https://webcaycanh.com/cay-trau-ba/\">C&acirc;y Trầu B&agrave;</a></strong>&nbsp;l&agrave; một trong những c&acirc;y cảnh được ưa chuộng nhất trong b&agrave;i tr&iacute; ph&ograve;ng kh&aacute;ch. C&acirc;y Trầu B&agrave; c&oacute; đặc điểm đ&oacute; l&agrave; l&aacute; to tr&ograve;n m&agrave;u xanh hay xanh pha v&agrave;ng v&agrave; đỏ. Đặc điểm của C&acirc;y Trầu B&agrave; đ&oacute; l&agrave; dễ sống, dễ chăm s&oacute;c v&agrave; xanh tốt quanh năm. C&acirc;y Trầu B&agrave; được nhiều gia đ&igrave;nh y&ecirc;u th&iacute;ch đặt trong ph&ograve;ng kh&aacute;ch bởi mang lại may mắn v&agrave; t&agrave;i lộc cho gia chủ.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"cach-bo-tri-cay-canh-trong-phong-khach\" src=\"https://webcaycanh.com/wp-content/uploads/2019/01/cach-bo-tri-cay-canh-trong-phong-khach1.jpg\" style=\"height:500px; width:500px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&ndash; C&acirc;y Phất Dụ cũng l&agrave; c&acirc;y cảnh được d&ugrave;ng để b&agrave;i tr&iacute; nhiều trong ph&ograve;ng kh&aacute;ch. C&acirc;y Phất Dụ bản th&acirc;n n&oacute; đ&atilde; mang nhiều yếu tố về phong thủy. C&acirc;y Phất Dụ mang yếu tố mộc nhưng khi được trồng trong đ&aacute; sẽ mang yếu tố thổ, trồng trong nước mang yếu tố thủy, chậu c&acirc;y phất dụ thắt th&ecirc;m chiếc nơ m&agrave;u đỏ lại mang yếu tố hỏa&hellip; C&acirc;y phất dụ c&oacute; m&agrave;u xanh tinh khiết, khiến ta lu&ocirc;n c&oacute; cảm gi&aacute;c y&ecirc;n b&igrave;nh, thư th&aacute;i khi đặt n&oacute; trong nh&agrave;.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; C&acirc;y Cọ Cảnh thường được đặt nhiều trong ph&ograve;ng kh&aacute;ch với t&aacute;c dụng sinh t&agrave;i lộc, l&agrave;m mới kh&ocirc;ng gian sống. Trong ph&ograve;ng kh&aacute;ch, nếu đặt một chậu C&acirc;y Cọ Cảnh sẽ mang đến cho kh&ocirc;ng gian tr&agrave;n đầy sức sống v&agrave; sang trọng hơn rất nhiều.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash;&nbsp;<a href=\"https://webcaycanh.com/cay-thuong-xuan/\">C&acirc;y Thường Xu&acirc;n</a>&nbsp;c&oacute; sức sống m&atilde;nh liệt kể cả trong điều kiện khắc nghiệt. Hơn nữa theo quan niệm phong thủy, C&acirc;y Thường Xu&acirc;n c&oacute; &yacute; nghĩa mang lại sự b&igrave;nh an v&agrave; may mắn cho gia chủ. Trong ph&ograve;ng kh&aacute;ch, bạn c&oacute; thể đặt một chậu C&acirc;y Thường Xu&acirc;n b&ecirc;n cạnh cửa sổ, gi&uacute;p kh&ocirc;ng gian xanh v&agrave; tho&aacute;ng hơn rất nhiều.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; C&acirc;y Kim Ng&acirc;n đ&uacute;ng như c&aacute;i t&ecirc;n mang đến &yacute; nghĩa gi&agrave;u c&oacute; v&agrave; may mắn. Đ&acirc;y l&agrave; c&acirc;y được đặt ở khu vực ph&ograve;ng kh&aacute;ch hay cửa ch&iacute;nh của ng&ocirc;i nh&agrave;. Người ta quan niệm, trong nh&agrave; nếu đặt C&acirc;y Kim Ng&acirc;n sẽ gi&uacute;p tiền t&agrave;i v&agrave;o như nước v&agrave; gia chủ l&agrave;m ăn rất ph&aacute;t đạt.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; C&acirc;y Ph&uacute; Qu&yacute; mang lại sự gi&agrave;u sang, ph&uacute; qu&yacute; cho ch&iacute;nh chủ nh&acirc;n sở hữu n&oacute;. Với sự kết hợp h&agrave;i h&ograve;a giữa m&agrave;u xanh l&aacute; v&agrave; viền đỏ, c&acirc;y sẽ mang đến cho ph&ograve;ng kh&aacute;ch của gia đ&igrave;nh bạn kh&ocirc;ng gian sang trọng. Đặc biệt những ai mệnh Hỏa sẽ rất th&iacute;ch hợp với việc trồng C&acirc;y Ph&uacute; Qu&yacute; n&agrave;y.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; C&acirc;y Kim Tiền c&oacute; đặc điểm đ&oacute; l&agrave; th&acirc;n c&acirc;y to khỏe với nhiều th&acirc;n nhỏ. L&aacute; c&oacute; dạng k&eacute;p v&agrave; cuống ngắn, chắc khỏe, s&aacute;ng b&oacute;ng rất đẹp. C&acirc;y Kim Tiền c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y Kim Ph&aacute;t T&agrave;i, mang đến t&agrave;i lộc cho gia chủ.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; C&acirc;y Ngọc Ng&acirc;n mang &yacute; nghĩa về tiền t&agrave;i v&agrave; may mắn cho gia chủ. C&acirc;y Ngọc Ng&acirc;n c&ograve;n c&oacute; &yacute; nghĩa kh&aacute;c đ&oacute; l&agrave; gắn kết y&ecirc;u thương giữa mọi người trong gia đ&igrave;nh v&agrave; được ưa chuộng để đặt trong ph&ograve;ng kh&aacute;ch của mỗi nh&agrave;.</p>\r\n\r\n<p style=\"text-align:justify\">C&aacute;ch bố tr&aacute;i c&acirc;y cảnh trong ph&ograve;ng kh&aacute;ch kh&ocirc;ng kh&oacute;. Bạn chỉ cần lưu &yacute; một số nguy&ecirc;n tắc tr&ecirc;n v&agrave; lựa chọn c&acirc;y cảnh ph&ugrave; hợp để b&agrave;i tr&iacute;, tạo kh&ocirc;ng gian mới v&agrave; cải thiện phong thủy cho ng&ocirc;i nh&agrave; của m&igrave;nh nh&eacute;.</p>', 'cach-bo-tri-cay-canh-trong-phong-khach', 'cach bo tri cay canh trong phong khach', 'cbtcctpk39.jpg', '2021-05-17', 1, NULL, NULL);
INSERT INTO `baiviet` (`baiviet_id`, `baiviet_tieude`, `baiviet_tomtat`, `baiviet_noidung`, `baiviet_slug`, `baiviet_keyword`, `baiviet_anh`, `ngaythem`, `baiviet_tinhtrang`, `created_at`, `updated_at`) VALUES
(9, 'Những loại cây không nên trồng trong nhà', '<p style=\"text-align:justify\">C&oacute; nhiều loại c&acirc;y tốt cho sức khỏe cũng như l&agrave;m đẹp cho kh&ocirc;ng gian của gia đ&igrave;nh bạn. Tuy nhi&ecirc;n c&oacute; những loại c&acirc;y được xem l&agrave; thải nhiều độc tố, ảnh hưởng kh&ocirc;ng nhỏ đến sức khỏe nếu như trồng trong nh&agrave;. Sau đ&acirc;y l&agrave; những loại c&acirc;y kh&ocirc;ng n&ecirc;n trồng trong nh&agrave; m&agrave; bạn n&ecirc;n biết để tr&aacute;nh.</p>', '<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>1. C&acirc;y M&atilde; Tiền kh&ocirc;ng n&ecirc;n trồng trong nh&agrave;</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">Những loại c&acirc;y kh&ocirc;ng n&ecirc;n trồng trong nh&agrave; phải nhắc đến đ&oacute; l&agrave; C&acirc;y M&atilde; Tiền. Đ&acirc;y l&agrave; một trong số c&aacute;c loại c&acirc;y cảnh c&oacute; quả nhỏ với h&igrave;nh d&aacute;ng giống quả cam, nh&igrave;n kh&aacute; độc đ&aacute;o v&agrave; thường được chọn l&agrave;m&nbsp;<a href=\"https://webcaycanh.com/cay-canh-trong-nha/\"><strong>c&acirc;y cảnh trong nh&agrave;</strong></a>.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nhung-loai-cay-khong-nen-trong-trong-nha\" src=\"https://webcaycanh.com/wp-content/uploads/2019/01/nhung-loai-cay-khong-nen-trong-trong-nha.jpg\" style=\"height:360px; width:480px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Tuy nhi&ecirc;n, C&acirc;y M&atilde; Tiền c&oacute; độc dược nằm ở quả. Trong quả c&oacute; hạt chứa nhiều chất alcaloid, nếu ăn nhầm sẽ bị co quắp to&agrave;n th&acirc;n v&agrave; t&ecirc; liệt cơ h&ocirc; hấp g&acirc;y ngạt thở dẫn đến tử vong. V&igrave; vậy c&aacute;c gia đ&igrave;nh n&ecirc;n lưu &yacute; khi c&oacute; &yacute; định trồng C&acirc;y M&atilde; Tiền trong nh&agrave; nh&eacute;.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>2. C&acirc;y Hoa Huệ Lily</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">List c&acirc;y thứ hai trong số&nbsp;<strong>những loại c&acirc;y kh&ocirc;ng n&ecirc;n trồng trong nh&agrave;</strong>&nbsp;đ&oacute; l&agrave; C&acirc;y Hoa Huệ Lily. Đ&acirc;y l&agrave; c&acirc;y c&oacute; m&agrave;u sắc đỏ nổi bật nh&igrave;n rất bắt mắt nhưng lại chứa nhiều độc tố. C&acirc;y c&oacute; củ chứa chất độc Lycorine, nếu d&iacute;nh phải sẽ dễ g&acirc;y ti&ecirc;u chảy, buồn n&ocirc;n, &oacute;i mửa khi ăn phải. Nhựa c&acirc;y c&oacute; thể g&acirc;y n&ocirc;n mửa nếu ăn phải. Tr&aacute;nh tiếp x&uacute;c trực tiếp với da v&igrave; c&oacute; thể g&acirc;y bỏng r&aacute;t, ngứa ng&aacute;y rất kh&oacute; chịu.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>3. C&acirc;y M&ocirc;n Trường Sinh</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y M&ocirc;n Trường Sinh cũng nằm trong list c&acirc;y cảnh được nhiều người y&ecirc;u th&iacute;ch trồng. Tuy nhi&ecirc;n đ&acirc;y cũng l&agrave; c&acirc;y được khuyến c&aacute;o kh&ocirc;ng n&ecirc;n trồng trong nh&agrave; bởi sẽ ảnh hưởng đến sức khỏe của con người.</p>\r\n\r\n<p style=\"text-align:justify\">Hoa l&aacute; của C&acirc;y M&ocirc;n Trường Sinh c&oacute; chứa axit oxalic v&agrave; asparagine, chất lỏng trong c&agrave;nh l&aacute; c&oacute; độc t&iacute;nh rất mạnh, nếu da tiếp x&uacute;c sẽ bị ngứa. Kh&ocirc;ng những thế, quả của C&acirc;y M&ocirc;n Trường Sinh nếu ăn nhầm sẽ g&acirc;y sưng đau yết hầu, tổn thương đến d&acirc;y thanh. Người xưa gọi c&acirc;y trường sinh đốm l&agrave; &ldquo;c&acirc;y c&acirc;m điếc&rdquo;, cả người lẫn vật ăn phải cũng c&oacute; thể bị nguy hiểm đến t&iacute;nh mạng. V&igrave; vậy đ&acirc;y l&agrave; một trong số những loại c&acirc;y kh&ocirc;ng n&ecirc;n trồng trong nh&agrave; m&agrave; bạn cần lưu &yacute;.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>4. C&acirc;y Hoa Thủy Ti&ecirc;n</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Hoa Thủy Ti&ecirc;n với những b&ocirc;ng hoa nhỏ li ti nh&igrave;n rất đẹp mắt. C&acirc;y Hoa Thủy Ti&ecirc;n được trồng nhiều ở ban c&ocirc;ng hoặc s&acirc;n vườn. Tuy nhi&ecirc;n C&acirc;y Hoa Thủy Ti&ecirc;n c&oacute; chứa nhiều độc tố v&agrave; nằm trong danh s&aacute;ch&nbsp;<a href=\"https://webcaycanh.com/nhung-loai-cay-khong-nen-trong-trong-nha/\">những loại c&acirc;y kh&ocirc;ng n&ecirc;n trồng trong nh&agrave;</a>. To&agrave;n th&acirc;n C&acirc;y Hoa Thủy Ti&ecirc;n đều c&oacute; độc, đặc biệt l&agrave; th&acirc;n củ. Nếu ăn nhầm phải C&acirc;y Hoa Thủy Ti&ecirc;n sẽ c&oacute; biểu hiện n&ocirc;n mửa, đau bụng, mạch đập rối loạn, h&ocirc; hấp kh&ocirc;ng đều v&agrave; nhiệt độ cơ thể tăng cao. V&igrave; vậy dễ bị co giật, t&ecirc; liệt dẫn đến tử vong nếu ăn nhầm phải C&acirc;y Hoa Thủy Ti&ecirc;n n&agrave;y.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nhung-loai-cay-khong-nen-trong-trong-nha\" src=\"https://webcaycanh.com/wp-content/uploads/2019/01/nhung-loai-cay-khong-nen-trong-trong-nha1.jpg\" style=\"height:500px; width:500px\" /></p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>5. C&acirc;y Tr&uacute;c Đ&agrave;o</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Tr&uacute;c Đ&agrave;o c&oacute; t&ecirc;n khoa học l&agrave; Nerium oleander. To&agrave;n th&acirc;n C&acirc;y Tr&uacute;c Đ&agrave;o đều c&oacute; chất độc mang t&ecirc;n Oleandrin, Neriin. Theo nhiều nghi&ecirc;n cứu cho thấy, nếu con người bị ngộ độc do chạm v&agrave;o c&acirc;y hoặc nuốt phải độc tố n&agrave;y sẽ g&acirc;y buồn n&ocirc;n, &oacute;i mửa, ti&ecirc;u chảy v&agrave; cơ thể mất kiểm so&aacute;t dẫn đến h&ocirc;n m&ecirc;m. Nếu kh&ocirc;ng xử l&yacute; kịp sẽ dẫn đến tử vong.</p>\r\n\r\n<p style=\"text-align:justify\">V&igrave; vậy người ta khuyến c&aacute;o kh&ocirc;ng n&ecirc;n trồng C&acirc;y Tr&uacute;c Đ&agrave;o trong nh&agrave;, cạnh nguồn nước v&igrave; hoa v&agrave; l&aacute; rụng xuống sẽ dễ dẫn đến nhiễm độc nước. Nếu gia đ&igrave;nh bạn c&oacute; &yacute; định trồng C&acirc;y Tr&uacute;c Đ&agrave;o trong nh&agrave; th&igrave; n&ecirc;n xem x&eacute;t lại nh&eacute;.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>6. C&acirc;y Ngoắt Nghẻo</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Ngoắt Nghẻo c&oacute; t&ecirc;n khoa học l&agrave; Gloriosa superba. C&acirc;y Ngoắt Nghẻo c&oacute; củ v&agrave; hạt c&oacute; chứa nhiều độc tố đ&oacute; l&agrave; Colchicine v&agrave; Alkaloid. Nếu ăn phải C&acirc;y Ngoắt Nghẻo sẽ dễ dẫn đến g&acirc;y t&ecirc; lưỡi, l&agrave;m cho cơ thể mắt cảm gi&aacute;c v&agrave; nếu nặng sẽ dẫn đến h&ocirc;n m&ecirc;, tử vong nếu kh&ocirc;ng được cấp cứu kịp thời.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>7. C&acirc;y Hoa Đỗ Quy&ecirc;n</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Hoa Đỗ Quy&ecirc;n c&oacute; t&ecirc;n khoa học l&agrave; Rhododendron occidentale. Tất cả c&aacute;c bộ phận của C&acirc;y Hoa Đỗ Quy&ecirc;n đều c&oacute; chất độc mang t&ecirc;n l&agrave; Andromedotoxin v&agrave; Arbutin glucoside.</p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Hoa Đỗ Quy&ecirc;n rất đẹp với những b&ocirc;ng hoa tươi thắm, được nhiều gia đ&igrave;nh trưng b&agrave;y trong dịp tết. Tuy nhi&ecirc;n nếu những người bị ngộ độc do c&acirc;y n&agrave;y thường c&oacute; triệu chứng buồn n&ocirc;n, uể oải, ch&oacute;ng mặt, kh&oacute; thở v&agrave; mất c&acirc;n bằng. V&igrave; vậy nếu trong gia đ&igrave;nh c&oacute; trẻ nhỏ th&igrave; n&ecirc;n cẩn thận khi trồng C&acirc;y Hoa Đỗ Quy&ecirc;n trong nh&agrave; nh&eacute;.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nhung-loai-cay-khong-nen-trong-trong-nha\" src=\"https://webcaycanh.com/wp-content/uploads/2019/01/nhung-loai-cay-khong-nen-trong-trong-nha2.jpg\" style=\"height:345px; width:500px\" /></p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>8. C&acirc;y Th&ocirc;ng Li&ecirc;n</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Th&ocirc;ng Li&ecirc;n hay c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y Huỳnh Li&ecirc;n. C&acirc;y Th&ocirc;ng Li&ecirc;n l&agrave; lo&agrave;i c&acirc;y thuộc họ Tr&uacute;c đ&agrave;o c&oacute; l&aacute; h&igrave;nh m&aacute;c, mọc so le, th&acirc;n c&acirc;y cao khoảng 3 đến 4 m&eacute;t. Th&ocirc;ng thi&ecirc;n c&oacute; xuất xứ từ ch&acirc;u Mỹ, thường gặp ở một số nơi như Kula, Maui, Waihee, Kihei, Kahana Beach, Hawaii&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Th&ocirc;ng Li&ecirc;n c&oacute; nhiều chất độc nếu để d&iacute;nh phải sẽ ảnh hưởng đến sức khỏe của con người. C&acirc;y Th&ocirc;ng Li&ecirc;n c&oacute; chứa nhiều chất độc ở hoa, l&aacute;, quả v&agrave; hạt. C&aacute;c độc tố bao gồm: thevetin, neriin, glucozid&hellip; c&oacute; thể g&acirc;y tử vong ở người. V&igrave; vậy c&aacute;c gia đ&igrave;nh phải lưu &yacute; khi trồng C&acirc;y Th&ocirc;ng Li&ecirc;n trong nh&agrave; nh&eacute;.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>9. C&acirc;y Thơm Ổi</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Thơm Ổi c&oacute; t&ecirc;n khoa học l&agrave; Lantana spp. Trong quả của C&acirc;y Thơm Ổi c&oacute; chứa chất độc Lantanin alkaloid hoặc lantadene A. Nếu ăn phải quả của c&acirc;y n&agrave;y sẽ dễ dẫn đến bỏng r&aacute;t đường ruột, rối loạn tuần ho&agrave;n m&aacute;u v&agrave; c&oacute; thể dẫn đến tử vong. V&igrave; vậy bạn n&ecirc;n lưu &yacute;&nbsp;<em>những loại c&acirc;y kh&ocirc;ng n&ecirc;n trồng trong nh&agrave;</em>&nbsp;c&oacute; c&acirc;y n&agrave;y nh&eacute;.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>10. C&acirc;y C&agrave; Độc Dược kh&ocirc;ng n&ecirc;n trồng trong nh&agrave;</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y C&agrave; Độc Dược c&oacute; t&ecirc;n khoa học l&agrave; Datura metel, thuộc họ c&agrave; Solanaceae. Khi tiếp x&uacute;c với da hhay bất kỳ vị tr&iacute; n&agrave;o của C&acirc;y C&agrave; Độc Dược đều c&oacute; thể g&acirc;y mẫn đỏ, ngứa, ch&oacute;ng mặt, nhức đầu v&agrave; g&acirc;y ảo gi&aacute;c. Thậm ch&iacute; nếu nặng sẽ g&acirc;y h&ocirc;n m&ecirc;, c&oacute; thể g&acirc;y m&ugrave; mắt hoặc tử vong.</p>\r\n\r\n<p style=\"text-align:justify\">Những loại c&acirc;y kh&ocirc;ng n&ecirc;n trồng trong nh&agrave; được ch&uacute;ng t&ocirc;i giới thiệu tr&ecirc;n đ&acirc;y sẽ gi&uacute;p bạn hiểu r&otilde; hơn về những loại c&acirc;y n&agrave;o n&ecirc;n trồng, c&acirc;y n&agrave;o kh&ocirc;ng n&ecirc;n trồng để tốt cho sức khỏe của c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh.</p>', 'nhung-loai-cay-khong-nen-trong-trong-nha', 'nhung-loai-cay-khong-nen-trong-trong-nha', 'nhung-loai-cay-khong-nen-trong-trong-nha5.jpg', '2021-05-17', 1, NULL, NULL),
(10, 'Những cây cảnh lá đỏ mang lại may mắn và tài lộc', '<p style=\"text-align:justify\">Những d&ograve;ng c&acirc;y cảnh l&aacute; đỏ được xem l&agrave; biểu tượng của may mắn trong cuộc sống v&agrave; c&ocirc;ng việc của mỗi người. Nhất l&agrave; với những ai mệnh Hỏa th&igrave; m&agrave;u đỏ được xem l&agrave; b&ugrave;a hộ mệnh của họ, đ&oacute; l&agrave; l&yacute; do tại sao họ lu&ocirc;n t&igrave;m đến những c&acirc;y cảnh l&aacute; đỏ để trồng. Trong b&agrave;i viết n&agrave;y, webcaycanh sẽ giới thiệu tới c&aacute;c bạn một số c&acirc;y cảnh l&aacute; đỏ vừa dễ chăm s&oacute;c, vừa mang đến cho bạn nhiều &yacute; nghĩa phong thủy khi trồng tại nh&agrave;.</p>', '<ol>\r\n	<li>\r\n	<h2><strong>C&acirc;y Trạng Nguy&ecirc;n &ndash; C&acirc;y cảnh l&aacute; đỏ n&ecirc;n trồng trong nh&agrave;</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>C&acirc;y Trạng Nguy&ecirc;n c&oacute; t&ecirc;n gọi kh&aacute;c đ&oacute; l&agrave; C&acirc;y Nh&acirc;t Phẩm Hồng. C&acirc;y Trạng Nguy&ecirc;n c&oacute; nguồn gốc từ miền nam Mexico, Trung Mỹ v&agrave; ch&acirc;u Phi.</p>\r\n\r\n<p><img alt=\"nhung-cay-canh-la-do-mang-lai-may-man-va-tai-loc\" src=\"https://webcaycanh.com/wp-content/uploads/2019/02/nhung-cay-canh-la-do-mang-lai-may-man-va-tai-loc.jpg\" style=\"height:300px; width:500px\" /></p>\r\n\r\n<p>Đặc điểm của&nbsp;<a href=\"https://webcaycanh.com/cay-trang-nguyen/\"><strong>C&acirc;y Trạng Nguy&ecirc;n</strong></a>&nbsp;đ&oacute; l&agrave; c&oacute; l&aacute; ph&iacute;a tr&ecirc;n m&agrave;u đỏ v&agrave; sau đ&oacute; chuyển dần sang m&agrave;u xanh. C&acirc;y rất dễ trồng, kh&ocirc;ng mất nhiều thời gian chăm s&oacute;c n&ecirc;n được nhiều người lựa chọn. Đặc biệt C&acirc;y Trạng Nguy&ecirc;n l&agrave; c&acirc;y th&iacute;ch hợp trồng trong chậu, đặt ở ban c&ocirc;ng hoặc trong ph&ograve;ng kh&aacute;ch, b&agrave;n l&agrave;m việc của mỗi người.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ trang tr&iacute; cho kh&ocirc;ng gian sống, C&acirc;y Trạng Nguy&ecirc;n c&ograve;n c&oacute; &yacute; nghĩa về phong thủy. Theo t&iacute;ch xưa, trong một kỳ thi trạng nguy&ecirc;n trọng đại được triều đ&igrave;nh tổ chức mỗi năm một lần để t&igrave;m ra người t&agrave;i, th&igrave; c&oacute; một cậu học tr&ograve; tr&ecirc;n đường đi thi thấy, một c&acirc;y xanh mọc một m&igrave;nh b&ecirc;n đường, cậu thấy lạ v&agrave; cũng đem l&ograve;ng th&iacute;ch th&uacute; liền mang c&acirc;y đi theo b&ecirc;n m&igrave;nh l&ecirc;n kinh dự thi, sau những ng&agrave;y thi cử vất vả cậu lại đem c&acirc;y theo m&igrave;nh v&agrave; trở về qu&ecirc;, sau đ&oacute; &iacute;t l&acirc;u cậu được tin b&aacute;o l&agrave; đ&atilde; đỗ trạng nguy&ecirc;n v&agrave; lo&agrave;i c&acirc;y cậu học tr&ograve; nhỏ đem theo b&ecirc;n m&igrave;nh nay đ&atilde; chuyển sang một m&agrave;u đỏ rực ở ph&iacute;a tr&ecirc;n, như c&oacute; ngụ &yacute; l&agrave; ch&uacute;c mừng sự th&agrave;nh c&ocirc;ng v&agrave; đỗ đạt của cậu. Từ đ&oacute; c&acirc;y cũng được đặt c&aacute;i t&ecirc;n l&agrave; c&acirc;y Trạng Nguy&ecirc;n.</p>\r\n\r\n<p>Từ đ&oacute;, C&acirc;y Trạng Nguy&ecirc;n được xem l&agrave; c&acirc;y c&oacute; &yacute; nghĩa may mắn, đỗ đạt v&agrave; th&agrave;nh c&ocirc;ng. V&igrave; vậy những ai mong muốn đỗ đạt v&agrave; c&oacute; c&ocirc;ng danh sự nghiệp rạng rỡ, thường trồng C&acirc;y Trạng Nguy&ecirc;n trong nh&agrave;. Kh&ocirc;ng chỉ c&aacute;c nước phương Đ&ocirc;ng m&agrave; ngay cả c&aacute;c nước phương T&acirc;y, C&acirc;y Trạng Nguy&ecirc;n c&ograve;n được gọi l&agrave; c&acirc;y gi&aacute;ng sinh v&igrave; đ&acirc;y l&agrave; lo&agrave;i hoa nở v&agrave;o dịp lễ tạ ơn, mang &yacute; nghĩa b&igrave;nh an n&ecirc;n được nhiều người y&ecirc;u th&iacute;ch v&agrave; trồng trong nh&agrave;.</p>\r\n\r\n<ol start=\"2\">\r\n	<li>\r\n	<h2><strong>C&acirc;y Trầu B&agrave; Đế Vương Đỏ</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>C&acirc;y Trầu B&agrave; Đế Vương Đỏ c&oacute; t&ecirc;n khoa học l&agrave; Philodendron Imperial Red với nguồn gốc từ họ R&aacute;y v&agrave; c&oacute; nguồn gốc nguy&ecirc;n sinh ở Indonesia.</p>\r\n\r\n<p>Đặc điểm của C&acirc;y Trầu B&agrave; Đế Vương Đỏ đ&oacute; l&agrave; c&oacute; thể sống trong điều kiện m&ocirc;i trường &aacute;nh s&aacute;ng k&eacute;m n&ecirc;n th&iacute;ch hợp để l&agrave;m c&acirc;y trang tr&iacute; nội thất, c&acirc;y cảnh văn ph&ograve;ng.</p>\r\n\r\n<p>C&acirc;y Trầu B&agrave; Đế Vương Đỏ l&agrave; dạng c&acirc;y th&acirc;n thảo dạng leo, l&aacute; đơn với gốc h&igrave;nh tr&aacute;i tim. Lo&agrave;i c&acirc;y n&agrave;y c&oacute; khả năng h&uacute;t được kh&iacute; độc từ m&aacute;y vi t&iacute;nh, loại bỏ chất g&acirc;y ung thư formaldehydes v&agrave; nhiều chất h&oacute;a học dễ bay hơi kh&aacute;c, l&agrave; loại lọc kh&ocirc;ng kh&iacute; rất tốt.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, khi chăm s&oacute;c C&acirc;y Trầu B&agrave; Đế Vương Đỏ cũng cần lưu &yacute; đến c&aacute;c yếu tố sau:</p>\r\n\r\n<p>&ndash; Đất để trồng C&acirc;y Trầu B&agrave; Đế Vương Đỏ n&ecirc;n l&agrave; loại đất xốp, tho&aacute;ng khsi v&agrave; giữ được độ ẩm. Bạn n&ecirc;n trộn đất với xơ dừa, tro, trấu v&agrave; than củi hoặc ph&acirc;n chuồng hoai mục c&agrave;ng tốt. Như vậy khi trồng c&acirc;y sẽ ph&aacute;t triển rất tốt.</p>\r\n\r\n<p>&ndash; &Aacute;nh s&aacute;ng th&iacute;ch hợp cho C&acirc;y Trầu B&agrave; Đế Vương Đỏ đ&oacute; l&agrave; b&oacute;ng r&acirc;m, &aacute;nh s&aacute;ng nhẹ v&agrave;o buổi s&aacute;ng hoặc chiều muộn. Thậm ch&iacute; với b&oacute;ng đ&egrave;n, c&acirc;y vẫn c&oacute; thể ph&aacute;t triển tốt. Tuy nhi&ecirc;n, thỉnh thoảng bạn n&ecirc;n phơi nắng cho c&acirc;y để c&acirc;y quang hợp. Lưu &yacute; kh&ocirc;ng n&ecirc;n đặt c&acirc;y dưới &aacute;nh nắng trực tiếp nh&eacute;.</p>\r\n\r\n<p>&ndash; Lượng nước để tưới cho C&acirc;y Trầu B&agrave; Đế Vương Đỏ thường tưới 1 tuần khoảng 2 lần. Tưới v&agrave;o buổi s&aacute;ng hoặc chiều muộn.</p>\r\n\r\n<p>Trong phong thủy, C&acirc;y Trầu B&agrave; Đế Vương Đỏ rất hợp với người mệnh Hỏa, mang lại may mắn, th&agrave;nh đạt, b&igrave;nh an cho gia chủ. Ngo&agrave;i ra những người tuổi Ngọ cũng rất th&iacute;ch hợp để đặt C&acirc;y Trầu B&agrave; Đế Vương Đỏ. Bạn c&oacute; thể đặt trong ph&ograve;ng kh&aacute;ch, trong ph&ograve;ng l&agrave;m việc đều được nh&eacute;.</p>\r\n\r\n<ol start=\"3\">\r\n	<li>\r\n	<h2><strong>C&acirc;y Huyết Dụ Đỏ</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>C&acirc;y Huyết Dụ Đỏ l&agrave; một trong những&nbsp;<a href=\"https://webcaycanh.com/nhung-cay-canh-la-do-mang-lai-may-man-va-tai-loc/\"><strong>c&acirc;y cảnh l&aacute; đỏ</strong></a>&nbsp;được nhiều người lựa chọn để trồng trong nh&agrave;. Đặc điểm của C&acirc;y Huyết Dụ Đỏ đ&oacute; l&agrave; c&oacute; thể ph&aacute;t triển mạnh mẽ trong điều kiện &aacute;nh s&aacute;ng tr&ecirc;n 60% hoặc những nơi nửa s&aacute;ng nửa tối đều được. V&igrave; vậy đ&acirc;y l&agrave; c&acirc;y th&iacute;ch hợp để trồng trong nh&agrave;, l&agrave;m c&acirc;y nội thất v&agrave; đặt ở văn ph&ograve;ng. Lo&agrave;i c&acirc;y n&agrave;y kh&ocirc;ng đ&ograve;i hỏi chăm s&oacute;c nhiều nhưng cũng c&acirc;y phải b&oacute;n ph&acirc;n vi liệu thường xuy&ecirc;n để l&aacute; c&acirc;y to đẹp, kh&ocirc;ng bị ch&aacute;y l&aacute;.</p>\r\n\r\n<p><img alt=\"nhung-cay-canh-la-do-mang-lai-may-man-va-tai-loc\" src=\"https://webcaycanh.com/wp-content/uploads/2019/02/nhung-cay-canh-la-do-mang-lai-may-man-va-tai-loc1.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p>C&acirc;y Huyết Dụ Đỏ kh&ocirc;ng chỉ trang tr&iacute; kh&ocirc;ng gian trong nh&agrave; m&agrave; c&ograve;n c&oacute; &yacute; nghĩa phong thủy cực tốt. C&acirc;y Huyết Dụ Đỏ được xem l&agrave; biểu tượng của sự may mắn, c&oacute; t&aacute;c dụng &ldquo;giữ của&rdquo;, tạo đường ranh giới- ngăn kh&ocirc;ng cho ma quỷ tấn c&ocirc;ng. Nếu t&agrave; ma cố x&acirc;m nhập sẽ bị diệt trừ.</p>\r\n\r\n<p>Ngo&agrave;i ra, C&acirc;y Huyết Dụ Đỏ c&ograve;n l&agrave; thực phẩm được nhiều người y&ecirc;u th&iacute;ch. Th&acirc;n v&agrave; rễ của C&acirc;y Huyết Dụ Đỏ ăn ngọt v&agrave; c&oacute; thể d&ugrave;ng để điều trị c&aacute;c bệnh như trĩ, kiết lị, sốt xuất huyết, ho ra m&aacute;u, ti&ecirc;u ra m&aacute;u, đau nhức phong thấp, rong kinh, vi&ecirc;m dạ d&agrave;y ruột&hellip; V&igrave; vậy đừng bỏ qua c&acirc;y cảnh n&agrave;y trong vườn của gia đ&igrave;nh bạn nh&eacute;.</p>\r\n\r\n<p>Với chậu C&acirc;y Huyết Dụ Đỏ, bạn c&oacute; thể đặt trong ph&ograve;ng kh&aacute;ch, văn ph&ograve;ng, nh&agrave; h&agrave;ng hay kh&aacute;ch sạn đều được. C&ograve;n nếu trồng trang tr&iacute; nội thất, bạn cũng n&ecirc;n đặt n&oacute; tại c&aacute;c g&oacute;c của ng&ocirc;i nh&agrave; v&agrave; b&ecirc;n cạnh cửa sổ.</p>\r\n\r\n<ol start=\"4\">\r\n	<li>\r\n	<h2><strong>C&acirc;y Hồng M&ocirc;n Đỏ</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Sắc đỏ của C&acirc;y Hồng M&ocirc;n Đỏ cũng khiến nhiều người th&iacute;ch th&uacute;. Đặc điểm của C&acirc;y Hồng M&ocirc;n Đỏ l&agrave; loaijc &acirc;y c&oacute; hoa v&agrave; l&aacute; h&igrave;nh tr&aacute;i tim. Sắc đỏ rực rỡ của hoa c&ograve;n đem đến sự ấm &aacute;p v&agrave; tươi vui. Trong t&igrave;nh y&ecirc;u, C&acirc;y Hồng M&ocirc;n Đỏ c&ograve;n l&agrave; biểu tượng của t&igrave;nh y&ecirc;u bất diệt, sự may mắn v&agrave; b&igrave;nh an đến với chủ nh&acirc;n của n&oacute;.</p>\r\n\r\n<p><strong><a href=\"https://webcaycanh.com/cay-hong-mon/\">C&acirc;y Hồng M&ocirc;n Đỏ</a></strong>&nbsp;thuộc loại th&acirc;n thảo mọc th&agrave;nh bụi nhỏ dạng c&acirc;y r&aacute;y nhưng th&acirc;n cứng, sống l&acirc;u năm. L&aacute; của C&acirc;y Hồng M&ocirc;n Đỏ c&oacute; m&agrave;u xanh thẫm. Tr&ecirc;n mỗi hoa c&oacute; nhiều hoa nhỏ kết th&agrave;nh h&igrave;nh trụ. Mỗi kh&oacute;m hoa tiểu hồng m&ocirc;n thường c&oacute; 17-20 l&aacute; v&agrave; 4-5 b&ocirc;ng hoa.</p>\r\n\r\n<p>Khi chăm s&oacute;c C&acirc;y Hồng M&ocirc;n Đỏ cần lưu &yacute; đến c&aacute;c yếu tố sau:</p>\r\n\r\n<p>&ndash; Nước tưới cho C&acirc;y Hồng M&ocirc;n Đỏ kh&ocirc;ng n&ecirc;n tưới qu&aacute; nhiều. Tuy nhi&ecirc;n cũng kh&ocirc;ng được để kh&ocirc; sẽ l&agrave;m c&acirc;y kh&oacute; ph&aacute;t triển. Lượng nước cho c&acirc;y ph&ugrave; hợp, đảm bảo độ ẩm từ 70 &ndash; 80%.</p>\r\n\r\n<p>&ndash; Nhiệt độ th&iacute;ch hợp để C&acirc;y Hồng M&ocirc;n Đỏ ph&aacute;t triển đ&oacute; l&agrave; từ 15 &ndash; 30 độ C. Nếu thấp hơn c&acirc;y sẽ chậm ph&aacute;t triển v&agrave; nếu nhiệt độ cao hơn, c&acirc;y c&oacute; biểu hiện v&agrave;ng l&aacute; hoặc thối rễ.</p>\r\n\r\n<p>&ndash; Đất th&iacute;ch hợp để C&acirc;y Hồng M&ocirc;n Đỏ ph&aacute;t triển đ&oacute; l&agrave; đất c&oacute; chứa nhiều chất dinh dưỡng, lu&ocirc;n đảm bảo độ tơi xốp. C&oacute; thể trộn th&ecirc;m ph&acirc;n chuồng hoặc c&aacute;c loại m&ugrave;n để đảm bảo tốc độ sinh trưởng của c&acirc;y.</p>\r\n\r\n<p>&ndash; B&oacute;n ph&acirc;n cho C&acirc;y Hồng M&ocirc;n Đỏ sẽ được b&oacute;n sau 60 ng&agrave;y kể từ khi trồng. Bạn c&oacute; thể tưới 1 th&aacute;ng 1 lần bằng ph&acirc;n NPK tổng hợp, dạng ph&acirc;n hữu cơ vi&ecirc;n cho c&acirc;y.</p>\r\n\r\n<p>&ndash; Muốn C&acirc;y Hồng M&ocirc;n Đỏ sinh trưởng, ph&aacute;t triển tốt, cho nhiều l&aacute; v&agrave; hoa th&igrave; cần phải thường xuy&ecirc;n cắt tỉa, l&agrave;m sạch cỏ dại để tập trung dinh dưỡng nu&ocirc;i c&acirc;y. L&agrave;m sạch cỏ ở phần gốc c&acirc;y, xới v&agrave; l&agrave;m cho đất tơi xốp. Cắt bỏ những c&agrave;ng kh&ocirc; h&eacute;o, l&aacute; v&agrave;ng&hellip;</p>\r\n\r\n<p>C&acirc;y Hồng M&ocirc;n Đỏ mang nhiều &yacute; nghĩa kh&aacute;c nhau. M&agrave;u hoa đỏ l&agrave; sự nồng ấm, nhiệt t&igrave;nh v&agrave; m&agrave;u xanh của sự hy vọng. Trong phong thủy, hoa C&acirc;y Hồng M&ocirc;n Đỏ mang lại may mắn, t&agrave;i lộc v&agrave; thịnh vượng cho gia chủ. Rất ph&ugrave; hợp với người mệnh Hỏa v&agrave; mệnh Thổ.</p>\r\n\r\n<p>Mỗi loại c&acirc;y cảnh l&aacute; đỏ c&oacute; đặc điểm v&agrave; &yacute; nghĩa phong thủy kh&aacute;c nhau. Hi vọng những gợi &yacute; tr&ecirc;n sẽ gi&uacute;p bạn lựa chọn cho m&igrave;nh loại c&acirc;y cảnh ph&ugrave; hợp với gia đ&igrave;nh, kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch hay kh&ocirc;ng gian l&agrave;m việc của bạn nh&eacute;. Ch&uacute;c c&aacute;c bạn trồng c&acirc;y th&agrave;nh c&ocirc;ng.</p>', 'nhung-cay-canh-la-do-mang-lai-may-man-va-tai-loc', 'cay canh la do', 'nhung-cay-canh-la-do90.png', '2021-05-22', 1, NULL, NULL),
(11, 'Cây Kim Tiền nên đặt ở đâu?', '<p style=\"text-align:justify\">C&acirc;y Kim Tiền kh&ocirc;ng chỉ l&agrave; c&acirc;y cảnh để b&agrave;n, trang tr&iacute; trong ph&ograve;ng kh&aacute;ch, ph&ograve;ng l&agrave;m việc m&agrave; c&ograve;n l&agrave; c&acirc;y mang &yacute; nghĩa phong thủy được nhiều người y&ecirc;u th&iacute;ch. Tuy nhi&ecirc;n, t&ugrave;y v&agrave;o đặc điểm cũng như &yacute; nghĩa phong thủy, vị tr&iacute; đặt C&acirc;y Kim Tiền sẽ kh&aacute;c nhau. Vậy&nbsp;<a href=\"https://webcaycanh.com/cay-kim-tien-nen-dat-o-dau/\">C&acirc;y Kim Tiền n&ecirc;n đặt ở đ&acirc;u</a>&nbsp;sẽ tốt nhất. Bạn c&oacute; thể tham khảo b&agrave;i viết dưới đ&acirc;y để hiểu r&otilde; hơn về nơi đặt C&acirc;y Kim Tiền trong nh&agrave; nh&eacute;.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>1. C&acirc;y Kim Tiền n&ecirc;n đặt ở những nơi c&oacute; nhiều &aacute;nh s&aacute;ng</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">Vị tr&iacute; đầu ti&ecirc;n th&iacute;ch hợp để đặt C&acirc;y Kim Tiền đ&oacute; l&agrave; những nơi c&oacute; nhiều &aacute;nh s&aacute;ng như ban c&ocirc;ng hay cửa sổ. C&acirc;y Kim Tiền c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; C&acirc;y Kim Ph&aacute;t T&agrave;i, thuộc c&acirc;y dễ ch&ugrave;m v&agrave; sống l&acirc;u năm, xanh tốt. Đặc điểm của C&acirc;y Kim Tiền đ&oacute; l&agrave; th&acirc;n to khỏe n&ecirc;n th&iacute;ch hợp l&agrave;m c&acirc;y cảnh trong nh&agrave;.</p>\r\n\r\n<p style=\"text-align:justify\">Tuy nhi&ecirc;n để&nbsp;<a href=\"https://webcaycanh.com/cay-kim-tien/\">C&acirc;y Kim Tiền</a>&nbsp;sinh trưởng v&agrave; ph&aacute;t triển tốt, bạn cần nắm được đặc điểm sinh trưởng của c&acirc;y. C&acirc;y Kim Tiền c&oacute; đặc điểm đ&oacute; l&agrave; th&acirc;n to khỏe, ph&igrave;nh to ở dưới gốc c&acirc;y. Tr&ecirc;n mặt đất c&acirc;y kh&ocirc;ng c&oacute; th&acirc;n ch&iacute;nh m&agrave; mầm nảy nhiều v&agrave; h&igrave;nh th&agrave;nh nhiều th&acirc;n nhỏ.</p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Kim Tiền được xem l&agrave; biểu tượng của sự thịnh vượng, may mắn v&agrave; tiền t&agrave;i trong cuộc sống. V&igrave; vậy C&acirc;y Kim Tiền thường được đặt trong ph&ograve;ng kh&aacute;ch, ph&ograve;ng l&agrave;m việc hay c&ocirc;ng sở. Để c&acirc;y ph&aacute;t triển tốt, bạn n&ecirc;n đặt c&acirc;y ở những nơi c&oacute; nhiều &aacute;nh s&aacute;ng. Nếu đặt trong ph&ograve;ng, thỉnh thoảng bạn n&ecirc;n mang c&acirc;y ra phơi nắng 2 &ndash; 3 lần/tuần, mỗi lần 4 &ndash; 5 giờ sẽ gi&uacute;p c&acirc;y quang hợp tốt hơn v&agrave; kh&ocirc;ng bị sốc nhiệt.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>2. Đặt C&acirc;y Kim Tiền trong ph&ograve;ng kh&aacute;ch</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">Một v&iacute; tr&iacute; nữa bạn c&oacute; thể đặt C&acirc;y Kim Tiền đ&oacute; l&agrave; trong ph&ograve;ng kh&aacute;ch. Ph&ograve;ng kh&aacute;ch l&agrave; vị tr&iacute; trung t&acirc;m của mỗi gia đ&igrave;nh, nơi mọi người n&oacute;i chuyện v&agrave; cũng l&agrave; nơi tiếp kh&aacute;ch của gia đ&igrave;nh. Đ&acirc;y l&agrave; vị tr&iacute; ph&ugrave; hợp để đặt C&acirc;y Kim Tiền bởi sẽ cải thiện được phong thủy trong gia đ&igrave;nh của bạn.</p>\r\n\r\n<p style=\"text-align:justify\">Trong số c&aacute;c loại c&acirc;y cảnh th&igrave; C&acirc;y Kim Tiền được coi l&agrave; c&acirc;y Ph&aacute;t. Chữ Kim trong C&acirc;y Kim Tiền c&oacute; nghĩa l&agrave; Ph&uacute; qu&yacute;, c&oacute; t&aacute;c dụng chi&ecirc;u t&agrave;i lộc rất tốt. V&igrave; vậy đ&acirc;y cũng l&agrave; c&acirc;y được nhiều người lựa chọn để l&agrave;m qu&agrave; tặng trong dịp khai trương cửa h&agrave;ng, tặng đối t&aacute;c trong dịp lễ hay ng&agrave;y tế. Điều tuyệt vời nhất khi trồng C&acirc;y Kim Tiền đ&oacute; l&agrave; ch&uacute;ng ra hoa đại diện cho sự may mắn nhất của phong thuỷ. Người ta quan niệm C&acirc;y Kim tiền nở hoa mang rất nhiều t&agrave;i lộc v&agrave; may mắn cho gia chủ.</p>\r\n\r\n<p style=\"text-align:justify\">Trong ph&ograve;ng kh&aacute;ch, nếu bạn muốn đặt C&acirc;y Kim Tiền n&ecirc;n đặt ở cung Đ&ocirc;ng Nam &ndash; quẻ tốn &ndash; mộc l&agrave; cung t&agrave;i lộc hay cung ph&iacute;a Đ&ocirc;ng &ndash; quẻ chấn &ndash; ngũ h&agrave;nh thuộc mộc. Tuyệt đối kh&ocirc;ng n&ecirc;n đặt kim tiền trong ph&ograve;ng ngủ. Đối với sảnh nh&agrave;, c&oacute; thể đặt c&acirc;y n&agrave;y nhưng n&ecirc;n c&oacute; bệ cao, gần cửa ra v&agrave;o. Đ&acirc;y là các hướng t&ocirc;́t, nằm ở cung tài l&ocirc;̣c, do đó vị tr&iacute; đặt c&acirc;y Kim Ti&ecirc;̀n ở trong văn ph&ograve;ng như tr&ecirc;n sẽ kích thích cung tài l&ocirc;̣c đ&ecirc;̉ mang đ&ecirc;́n nhi&ecirc;̀u ti&ecirc;̀n tài và may mắn cho gia chủ.</p>\r\n\r\n<p style=\"text-align:justify\">Lưu &yacute; khi đặt C&acirc;y Kim Tiền trong ph&ograve;ng kh&aacute;ch đ&oacute; l&agrave; tr&aacute;nh đặt c&acirc;y đối diện cửa. Bởi trong phong thủy th&igrave; đ&acirc;y l&agrave; điều cấm kỵ, vị tr&iacute; n&agrave;y sẽ g&acirc;y hao t&aacute;n t&agrave;i lộc, tiền t&agrave;i v&agrave; phản &yacute; nghĩa của C&acirc;y Kim Tiền khi đặt trong ph&ograve;ng kh&aacute;ch. V&igrave; vậy bạn n&ecirc;n lưu &yacute; điều n&agrave;y nh&eacute;.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"cay-kim-tien-nen-dat-o-dau\" src=\"https://webcaycanh.com/wp-content/uploads/2018/12/cay-kim-tien-nen-dat-o-dau1.jpg\" style=\"height:483px; width:500px\" /></p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><strong>3. Đặt C&acirc;y Kim Tiền tr&ecirc;n b&agrave;n l&agrave;m việc</strong></span></h2>\r\n\r\n<p style=\"text-align:justify\">Một vị tr&iacute; nữa m&agrave; bạn c&oacute; thể đặt&nbsp;<strong><a href=\"https://webcaycanh.com/cay-canh-de-ban/\">c&acirc;y tr&ecirc;n b&agrave;n l&agrave;m việc</a></strong>. B&ecirc;n cạnh &yacute; nghĩa phong thủy th&igrave; C&acirc;y Kim Tiền c&ograve;n c&oacute; t&aacute;c dụng thanh lọc v&agrave; l&agrave;m sạch kh&ocirc;ng kh&iacute;. Theo nhiều nghi&ecirc;n cứu cho thấy, c&aacute;c hợp chất hữu cơ dễ bay hơi c&oacute; hại như benzen, xylen&hellip; sẽ được C&acirc;y Kim Tiền &nbsp;h&uacute;t hết, trả lại kh&ocirc;ng kh&iacute; trong sạch cho con người.</p>\r\n\r\n<p style=\"text-align:justify\">Đặc điểm của C&acirc;y Kim Tiền &nbsp;đ&oacute; l&agrave; th&acirc;n to khỏe, dễ chăm s&oacute;c, kh&ocirc;ng cần cầu kỳ. V&igrave; vậy bạn c&oacute; thể đặt một chậu C&acirc;y Kim Tiền tr&ecirc;n b&agrave;n l&agrave;m việc để thanh lọc kh&ocirc;ng kh&iacute;, c&oacute; kh&ocirc;ng gian l&agrave;m việc trong l&agrave;nh v&agrave; mang lại nhiều &yacute; tưởng trong c&ocirc;ng việc nh&eacute;.</p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y Kim Tiền n&ecirc;n đặt ở đ&acirc;u, hi vọng những th&ocirc;ng tin tr&ecirc;n sẽ gi&uacute;p bạn t&igrave;m được vị tr&iacute; thuận lợi để đặt C&acirc;y Kim Tiền v&agrave; mang lại &yacute; nghĩa phong thủy nh&eacute;.</p>', 'cay-kim-tien-nen-dat-o-dau', 'cay kim tien dat dau', 'ckt-nen-dat-dau28.png', '2021-05-22', 1, NULL, NULL),
(13, 'haha haha haha', '<p>mệt mỏi qu&aacute;</p>', '<p>haizzzzzzzzzzzzzzzzzzz</p>', 'haha-haha-haha', 'haha', 'ysht153.jpg', '2021-05-22', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) UNSIGNED NOT NULL,
  `binhluan_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `binhluan_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `binhluan_noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `binhluan_trangthai` int(11) NOT NULL,
  `ngaygui` timestamp NULL DEFAULT NULL,
  `sanpham_id` int(10) UNSIGNED DEFAULT NULL,
  `baiviet_id` int(11) DEFAULT NULL,
  `binhluan_traloi` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `binhluan_ten`, `binhluan_email`, `binhluan_noidung`, `binhluan_trangthai`, `ngaygui`, `sanpham_id`, `baiviet_id`, `binhluan_traloi`, `created_at`, `updated_at`) VALUES
(1, 'Trịnh Thị Ngọc Hân', 'hanb1204011@gmail.com', 'a', 1, '2021-05-27 13:40:27', 31, NULL, NULL, '2016-06-01 09:11:21', '2016-06-01 09:11:21'),
(2, 'AA', 'hanb1204011@gmail.com', 'Ngon', 1, '2021-05-27 13:40:27', 31, NULL, NULL, '2016-07-01 00:43:51', '2016-07-01 00:43:51'),
(3, 'Khắc Huy', 'khachuy@gmail.com', 'cây đẹp quá', 1, '2021-05-27 13:40:27', 31, NULL, NULL, '2021-05-27 06:34:06', NULL),
(4, 'Phúc Hậu', 'hauphuc@gmail.com', 'Hay quá shop ơi! Bài viết rất bổ ích', 1, '2021-05-27 13:40:27', NULL, 5, NULL, '2021-05-27 07:13:48', NULL),
(5, 'Diễm Ngân', 'diemngan@gmail.com', 'Sản phẩm đẹp quá shop ưi!!', 1, '2021-05-27 13:40:27', 31, NULL, NULL, '2021-05-27 08:32:54', NULL),
(6, 'Ngân This', 'nganthis@gmail.com', 'Bài viết rất bổ ích', 1, '2021-05-27 13:40:27', NULL, 2, NULL, '2021-05-27 08:32:59', NULL),
(7, 'Phạm Đuôi Công', 'pdcong@gmail.com', 'Cây rất đẹp nhé shop', 1, '2021-05-27 13:40:27', 33, NULL, NULL, '2021-05-27 08:21:07', NULL),
(8, 'Ngân That', 'nganthat@gmail.com', 'Bài viết rất hay Good Goood', 1, '2021-05-27 13:40:27', NULL, 2, NULL, '2021-05-27 08:32:41', NULL),
(9, 'Thanh Bình', 'thanhbinh@gmail.com', 'Các cách trên hay quá', 1, '2021-05-27 13:40:27', NULL, 6, NULL, '2021-05-27 08:39:35', NULL),
(10, 'Hưng Vũ', 'hungvu@gmail.com', 'Bài viết cũng được', 1, '2021-05-27 13:40:27', NULL, 6, NULL, '2021-05-27 08:41:29', NULL),
(11, 'Khắc Huy', 'khuy@gmail.com', 'Duyệt bình luận mình nhé', 0, '2021-05-27 13:40:27', NULL, 5, NULL, '2021-05-27 12:39:30', NULL),
(12, 'Admin', 'admin@gmail.com', 'Cảm ơn bạn', 1, '2021-05-27 17:21:04', NULL, 5, 4, NULL, NULL),
(13, 'Admin', 'admin@gmail.com', 'Mơn bạn !!', 1, '2021-05-27 17:33:21', NULL, 2, 6, NULL, NULL),
(14, 'Admin', 'admin@gmail.com', 'Ok bạn nha!', 1, '2021-05-27 17:44:43', 31, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ctdh_id` int(11) NOT NULL,
  `order_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_id` int(10) UNSIGNED NOT NULL,
  `donhang_id` int(10) UNSIGNED NOT NULL,
  `sanpham_ten` text COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_thanhtien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phivanchuyen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ctdh_id`, `order_code`, `sanpham_id`, `donhang_id`, `sanpham_ten`, `sanpham_soluong`, `sanpham_thanhtien`, `phivanchuyen`, `created_at`, `updated_at`) VALUES
(47, '', 5, 40, 'Cây Xương Rồng', 1, '100000', '', NULL, NULL),
(48, '', 3, 40, 'Cây Sen Đá', 1, '100000', '', NULL, NULL),
(49, '', 8, 41, 'Cây Hoàng Hậu', 1, '250000', '', NULL, NULL),
(50, '', 8, 42, 'Cây Hoàng Hậu', 1, '250000', '', NULL, NULL),
(51, '', 8, 43, 'Cây Hoàng Hậu', 1, '250000', '', NULL, NULL),
(52, '', 22, 44, 'Cây Nha Đam', 1, '100000', '', NULL, NULL),
(53, '', 31, 51, 'Cây Bình An', 5, '350000', '', NULL, NULL),
(54, '', 3, 55, 'Cây Sen Đá', 1, '100000', '', NULL, NULL),
(55, '', 22, 56, 'Cây Nha Đam', 1, '100000', '', NULL, NULL),
(56, '', 22, 57, 'Cây Nha Đam', 1, '100000', '', NULL, NULL),
(57, '', 22, 58, 'Cây Nha Đam', 1, '100000', '', NULL, NULL),
(58, '', 16, 58, 'Cây Hương Thảo', 5, '150000', '', NULL, NULL),
(59, '', 30, 59, 'Cây Lan Quân Tử', 1, '400000', '', NULL, NULL),
(60, '', 29, 60, 'Cây Hồng Môn', 1, '350000', '50000', NULL, NULL),
(61, '', 8, 61, 'Cây Hoàng Hậu', 1, '250000', '50000', NULL, NULL),
(62, '', 4, 62, 'Cây Tùng La Hán', 1, '200000', '50000', NULL, NULL),
(63, '', 16, 63, 'Cây Hương Thảo', 1, '150000', '25000', NULL, NULL),
(64, '', 21, 63, 'Cây Kim Tiền', 1, '200000', '25000', NULL, NULL),
(65, '', 31, 63, 'Cây Bình An', 1, '350000', '25000', NULL, NULL),
(66, '', 33, 64, 'Cây Đuôi Công', 10, '450000', '30000', NULL, NULL),
(67, '', 22, 65, 'Cây Nha Đam', 10, '100000', '50000', NULL, NULL),
(69, '51396', 29, 67, 'Cây Hồng Môn', 5, '350000', '30000', NULL, NULL),
(70, 'a6e52', 22, 68, 'Cây Nha Đam', 1, '100000', '150000', NULL, NULL),
(71, 'a6e52', 1, 68, 'Cây Kim Ngân', 1, '150000', '150000', NULL, NULL),
(72, 'a6e52', 8, 68, 'Cây Hoàng Hậu', 1, '250000', '150000', NULL, NULL),
(73, 'a6e52', 20, 68, 'Cây Trường Sinh', 1, '300000', '150000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `donhang_id` int(10) UNSIGNED NOT NULL,
  `order_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `donhang_tongtien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang_id` int(10) UNSIGNED NOT NULL,
  `tinhtranghd_id` int(10) UNSIGNED NOT NULL,
  `id_shipping` int(10) UNSIGNED NOT NULL,
  `thanhtoan_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`donhang_id`, `order_code`, `donhang_tongtien`, `khachhang_id`, `tinhtranghd_id`, `id_shipping`, `thanhtoan_id`, `created_at`, `updated_at`) VALUES
(40, '', '200000', 13, 1, 4, 5, NULL, NULL),
(41, '', '250000', 13, 1, 5, 6, NULL, NULL),
(42, '', '250000', 13, 1, 5, 7, NULL, NULL),
(43, '', '250000', 13, 1, 5, 8, NULL, NULL),
(44, '', '100000', 13, 1, 6, 9, NULL, NULL),
(51, '', '1750000', 13, 1, 7, 16, NULL, NULL),
(53, '', '100000', 13, 1, 9, 20, NULL, NULL),
(54, '', '100000', 13, 1, 9, 21, NULL, NULL),
(55, '', '100000', 13, 1, 9, 22, NULL, NULL),
(56, '', '100000', 13, 1, 10, 23, NULL, NULL),
(57, '', '100000', 15, 1, 11, 24, NULL, NULL),
(58, '', '850000', 15, 1, 12, 25, NULL, NULL),
(59, '', '450000', 15, 1, 16, 27, NULL, NULL),
(60, '', '400000', 15, 1, 16, 28, NULL, NULL),
(61, '', '300000', 15, 1, 16, 29, NULL, NULL),
(62, '', '250000', 15, 1, 16, 30, NULL, NULL),
(63, 'ad654', '725000', 15, 2, 17, 31, NULL, NULL),
(64, '', '4530000', 15, 2, 18, 32, '2021-05-26 03:37:14', NULL),
(65, '', '1050000', 15, 2, 19, 33, '2021-05-26 03:41:30', NULL),
(67, '51396', '1780000', 15, 2, 21, 35, '2021-05-26 16:47:01', NULL),
(68, 'a6e52', '950000', 15, 2, 23, 36, '2021-05-28 01:30:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvitinh`
--

CREATE TABLE `donvitinh` (
  `donvitinh_id` int(10) UNSIGNED NOT NULL,
  `donvitinh_ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `donvitinh_mo_ta` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donvitinh`
--

INSERT INTO `donvitinh` (`donvitinh_id`, `donvitinh_ten`, `donvitinh_mo_ta`, `created_at`, `updated_at`) VALUES
(1, 'Cây', '', NULL, NULL),
(2, 'Chậu', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhangs`
--

CREATE TABLE `khachhangs` (
  `id_khachhang` int(10) UNSIGNED NOT NULL,
  `khachhang_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang_sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang_dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `loainguoidung_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhangs`
--

INSERT INTO `khachhangs` (`id_khachhang`, `khachhang_ten`, `email`, `password`, `khachhang_sdt`, `khachhang_dia_chi`, `loainguoidung_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Long Thị Nhật', 'user5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '012332432', 'advd', 2, '', NULL, NULL),
(4, 'Tạ Thanh Bình', 'user6@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '012345676', 'abc', 2, '', NULL, NULL),
(5, 'queen', 'queen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0946711770', '21312', 2, '', NULL, NULL),
(6, 'Trịnh Thị Ngọc Hân', 'hana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0946711770', 'Ninh Kiều - Cần Thơ', 2, '', NULL, NULL),
(7, 'Trịnh Thị Hoàng Hân', 'hanab1204011@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0946711770', 'Ninh Kiêu- Cần Thơ', 2, '', NULL, NULL),
(8, 'Lê Hữu Nghĩa', 'nghiab1204035@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0946711770', 'Cà Mau', 2, '', NULL, NULL),
(9, 'huy khac', 'huykhac@gmail.com', '$2y$10$ByaHGBUvMT21DJ0PdHoUZe4vSEDROcaefhRR5w8FG12rvAI518aaW', '025412222', 'vlong', 2, NULL, '2021-05-10 07:36:50', '2021-05-10 07:36:50'),
(10, 'Vũ Viết Hưng', 'vvhung@gmail.com', '$2y$10$USYD4SgFZFdabUZNOp3.1uPUR0vkCvlJb9IP5GTaDQdUPWz4.Loii', '0548745212', 'Vĩnh Long', 2, NULL, '2021-05-10 07:42:55', '2021-05-10 07:42:55'),
(11, 'phúc hậu', 'hauhaute@gmail.com', '$2y$10$2pK84eg5Ts9KlDDoMVc...sx0d7RwaxJuHt670yV33DZ/FbfcjZq.', '0222557778', 'sa đéc', 2, NULL, '2021-05-10 07:57:37', '2021-05-10 07:57:37'),
(13, 'vanhau', 'vanhau@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '76767676676', 'vlong', 2, NULL, NULL, NULL),
(15, 'Khắc Huy', 'khachuy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '021547845', 'Vĩnh Long', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `dienthoai`, `diachi`, `noidung`, `create_at`, `updated_at`) VALUES
(1, 'huy', 'huy@gmail.com', '021548745', 'vĩnh long', 'chào shop', NULL, NULL),
(2, 'hưng', 'hung123@gmail.com', '0215478412', 'Vinh Long', 'Chào shop', NULL, NULL),
(3, 'Hậu', 'hauhau@gmail.com', '021457845', 'Vĩnh Long', 'Chào shop', NULL, NULL),
(4, 'ngân', 'ngan@gmail.com', '0213658745', 'Vĩnh Long', 'Chào shop', NULL, NULL),
(5, 'Khánh', 'khanh@gmail.com', '021457852', 'Vĩnh Long', 'Chào shop', NULL, NULL),
(6, 'Trần Hưng', 'tranhung@gmail.com', '021365874', 'Vlong', 'Chào shop', NULL, NULL),
(7, 'Bình', 'binh@gmail.com', '023654789', 'Vũng Liêm', 'Chào shop', NULL, NULL),
(8, 'Nguyễn Văn Hậu', 'ngvanhau@gmail.com', '023658741', 'Cần Thơ', 'Chào shop', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainguoidung`
--

CREATE TABLE `loainguoidung` (
  `id` int(10) UNSIGNED NOT NULL,
  `loainguoidung_ten` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loainguoidung`
--

INSERT INTO `loainguoidung` (`id`, `loainguoidung_ten`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `loaisanpham_ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `loaisanpham_mo_ta` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaisanpham_hienthi` int(11) NOT NULL,
  `loaisanpham_thoigian` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `loaisanpham_ten`, `loaisanpham_mo_ta`, `loaisanpham_hienthi`, `loaisanpham_thoigian`, `created_at`, `updated_at`) VALUES
(1, 'Cây Cảnh Phong Thủy', 'Cây cảnh từ lâu đã được biết đến không chỉ có tác dụng tốt cho sức khỏe, ý nghĩa với môi trường và dùng để trang trí không gian. Mà nó còn được coi là một trong những vật phẩm phong thủy.', 1, '2021-05-03', NULL, NULL),
(2, 'Cây Cảnh Văn Phòng', 'Theo khoa học đã chứng minh thì màu xanh lá cây sẽ giúp cho con người giảm căng thẳng mỏi mệt, cải thiện tâm trạng không được tốt và nó làm dịu mắt. Con số cây cảnh văn phòng mang lại giúp tăng 20% trí nhớ và 15% sự tập trung. Do vậy cây cảnh văn phòng là một phần không thể thiếu đối với bạn, công ty của bạn.', 1, '2021-05-03', NULL, NULL),
(3, 'Cây Cảnh Trong Nhà', 'Cây cảnh trong nhà là những loại cây cảnh ưa bóng mát, cây có thể sống và phát triển tốt ở điều kiện ít nắng và có điều hòa, chỉ có ánh điện huỳnh quang, việc để cây cảnh trong nhà là việc cần thiết, vì đa số cây sống được tốt ở trong nhà đều có tác dụng hút bụi, lọc không khí, hấp thụ các chất độc hại ở thể hơi, hấp thụ các bức xạ từ thiết bị điện tử phát ra. \r\nHơn thế nữa màu xanh của cây sẽ giúp bạn cảm thấy dễ chịu, đỡ mỏi mắt, giảm stress…Giúp bạn bớt căng thẳng và cảm thấy thoải mái khi trở về ngôi nhà thân yêu của mình.', 1, '2021-05-03', NULL, NULL),
(4, 'Cây Thủy Sinh', 'Cây thủy sinh là cây cảnh được trồng trong nước mà vẫn có thể sống và phát triển tốt. Khi được chuyển sang môi trường nước cây cảnh sẽ không cần phải tưới nước thường xuyên, hạn chế việc cây bị thối do úng nước, mặt khác cây thủy sinh được trồng trong nước nên rất sạch sẽ phù hợp với việc làm cây cảnh để bàn tạo ra sự hứng thú cho người nhìn.', 1, '2021-05-03', NULL, NULL),
(5, 'Cây Cảnh Để Bàn', 'Cây cảnh để bàn làm việc là điều cần thiết vì theo nghiên cứu của các nhà khoa học đã chứng minh thì màu xanh lá cây có tác dụng làm giảm căng thẳng, mỏi mệt, cải thiện tâm trạng không tốt và làm dịu mắt. Ngoài ra một số loại cây cảnh còn có tác dụng lọc bụi, hút bức xạ. Chính vì thế họ đã đưa ra lời khuyên đối với những người thường xuyên làm việc căng thẳng hay phải tiếp xúc với máy tính thì nên để cây cảnh để bàn hoặc bố trí cây xanh trong phòng để lấy lại cân bằng cho cơ thể, giảm tình trạng stress…', 1, '2021-05-03', NULL, NULL),
(6, 'Cây Cảnh Loại To', 'Cây Cảnh To là những loại cây cảnh để trong văn phòng, trong nhà có ý nghĩa phong thủy về tiền bạc, sức khỏe, hạnh phúc và tài lộc. Cây có chiều cao từ 40 cm trở lên', 0, '2021-05-02', NULL, NULL),
(7, 'Cây Cảnh Sen Đá', 'Cây Sen Đá được ước tính có khoảng 60 họ thực vật khác nhau và hơn 3000 loài trên thể giới. Sen Đá sống và phát triển được ở Việt Nam thì chỉ khoảng hơn 300 loại, và hơn 100 loại Sen Đá đẹp trong số đó sức sống tốt, được con người nhân giống và phát triển làm kiểng và làm cây phong thủy.', 0, '2021-05-02', NULL, NULL),
(8, 'Cây cảnh 8', NULL, 0, '2021-05-02', NULL, NULL),
(9, 'Cây cảnh 9', NULL, 0, '2021-05-02', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lohang`
--

CREATE TABLE `lohang` (
  `id` int(10) UNSIGNED NOT NULL,
  `lohang_ky_hieu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lohang_han_su_dung` int(11) NOT NULL,
  `lohang_gia_mua_vao` decimal(10,2) NOT NULL,
  `lohang_gia_ban_ra` decimal(10,2) NOT NULL,
  `lohang_so_luong_nhap` int(11) NOT NULL,
  `lohang_so_luong_da_ban` int(11) NOT NULL,
  `lohang_so_luong_doi_tra` int(11) NOT NULL,
  `lohang_so_luong_hien_tai` int(11) NOT NULL,
  `lohang_tinh_trang` int(11) DEFAULT NULL COMMENT '1',
  `sanpham_id` int(10) UNSIGNED NOT NULL,
  `nhacungcap_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lohang`
--

INSERT INTO `lohang` (`id`, `lohang_ky_hieu`, `lohang_han_su_dung`, `lohang_gia_mua_vao`, `lohang_gia_ban_ra`, `lohang_so_luong_nhap`, `lohang_so_luong_da_ban`, `lohang_so_luong_doi_tra`, `lohang_so_luong_hien_tai`, `lohang_tinh_trang`, `sanpham_id`, `nhacungcap_id`, `created_at`, `updated_at`) VALUES
(1, '12345', 5, '25000.00', '30000.00', 30, 0, 0, 30, 1, 1, 1, '2016-05-13 08:34:21', '2016-05-13 08:34:21'),
(2, 'L0001', 15, '95000.00', '120000.00', 100, 0, 0, 100, 1, 8, 1, '2016-05-19 01:34:57', '2016-05-19 01:34:57'),
(3, 'L0002', 10, '35000.00', '40000.00', 50, 0, 0, 50, 1, 2, 1, '2016-05-24 07:13:55', '2016-05-24 07:13:55'),
(4, 'L0003', 10, '25000.00', '30000.00', 50, 0, 0, 50, 1, 3, 1, '2016-05-24 07:14:29', '2016-05-24 07:14:29'),
(5, 'L0004', 20, '500000.00', '700000.00', 50, 4, 0, 46, 1, 4, 1, '2016-05-24 07:15:44', '2016-05-24 07:15:44'),
(6, 'L0005', 30, '230000.00', '280000.00', 50, 2, 0, 48, 1, 5, 1, '2016-05-24 07:17:05', '2016-05-24 07:17:05'),
(7, 'L0006', 15, '35000.00', '40000.00', 50, 0, 0, 50, 1, 7, 1, '2016-05-24 07:19:09', '2016-05-24 07:19:09'),
(8, 'L0007', 35, '350000.00', '420000.00', 50, 99, 0, -49, 1, 9, 1, '2016-05-24 07:20:04', '2016-05-24 07:20:04'),
(11, 'L0010', 3, '25000.00', '32000.00', 20, 0, 0, 20, 1, 11, 2, '2016-05-25 07:02:46', '2016-05-25 07:02:46'),
(12, 'L0011', 2, '15000.00', '21000.00', 20, 0, 0, 20, 1, 12, 2, '2016-05-25 07:03:36', '2016-05-25 07:03:36'),
(14, 'L0014', 10, '95000.00', '120000.00', 100, 4, 0, 96, 1, 8, 1, '2016-06-08 08:18:38', '2016-06-08 08:18:38'),
(15, '12358', 15, '25000.00', '30000.00', 100, 0, 0, 100, 1, 1, 2, '2016-06-18 08:45:14', '2016-06-18 08:45:14'),
(17, 'B0003', 100, '230000.00', '280000.00', 150, 1, 0, 149, NULL, 9, 8, '2016-07-04 23:01:28', '2016-07-04 23:01:28'),
(18, 'L0045', 100, '25000.00', '30000.00', 100, 0, 0, 100, NULL, 15, 3, '2016-07-05 03:04:41', '2016-07-05 03:04:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_04_14_110951_create_nhacungcap_table', 1),
('2016_04_16_005616_create_nhom_table', 1),
('2016_04_18_030252_create_tuyendung_table', 1),
('2016_04_20_062118_create_khuyenmai_table', 1),
('2016_04_28_141651_create-donvitinh-table', 1),
('2016_04_16_011341_create_loaisanpham_table', 2),
('2016_04_20_031400_create_sanpham_table', 3),
('2016_04_20_032205_create_giabanra_table', 4),
('2016_04_20_133501_create_hinhsanpham_table', 4),
('2016_04_25_174513_create_giamuavao_table', 4),
('2016_05_01_023512_create_nhom_table', 5),
('2016_05_01_023719_create_loaisanpham_table', 6),
('2016_05_01_023846_create_sanpham_table', 7),
('2016_05_01_023949_create_giabanra_table', 8),
('2016_05_01_024111_create_giamuavao_table', 8),
('2016_05_01_024136_create_hinhsanpham_table', 8),
('2016_05_09_032019_create_monngon_table', 9),
('2016_05_10_165156_create_hinhmonngon_table', 10),
('2016_05_13_074300_create_lohang_table', 11),
('2016_05_13_102657_create_sanpham_table', 12),
('2016_05_13_103740_create_lohang_table', 13),
('2016_05_13_104520_create_hinhsanpham_table', 14),
('2016_05_13_105811_create_hinhsanpham_table', 15),
('2016_05_13_162644_create_monngon_table', 16),
('2016_05_14_073949_create_nguyenlieu_table', 17),
('2016_05_16_112417_create_khuyenmai_table', 18),
('2016_05_16_150907_create_tylegia_table', 19),
('2016_05_16_160708_create_tylegia_table', 20),
('2016_05_17_075014_create_tuyendung_table', 21),
('2016_05_19_093429_create_khuyenmai_table', 22),
('2016_05_19_093815_create_sanphamkhuyenmai_table', 23),
('2016_05_20_091554_craete_pages_table', 24),
('2016_05_23_092444_create_loainguoidung_table', 24),
('2014_10_12_000000_create_users_table', 25),
('2016_05_23_094448_create_nhanvien_table', 26),
('2016_06_01_081813_create_khachhang_table', 27),
('2016_06_01_085225_create_tinhtranghd_table', 28),
('2016_06_01_084422_create_donhang_table', 29),
('2016_06_01_090918_create_chitietdonhang_table', 30),
('2016_06_01_151838_create_binhluan_table', 31),
('2016_06_22_215955_create_quangcao_table', 32),
('2014_10_12_100000_create_password_resets_table', 33),
('2019_08_19_000000_create_failed_jobs_table', 33),
('2021_05_10_160538_shipping', 33),
('2021_05_13_002811_thanhtoan', 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhacungcap_ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nhacungcap_dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nhacungcap_sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `nhacungcap_ten`, `nhacungcap_dia_chi`, `nhacungcap_sdt`, `created_at`, `updated_at`) VALUES
(1, 'Vườn đà lạt', '<p>a</p>\r\n', '01678991282', NULL, NULL),
(2, 'Rau sạch vườn nhà', '<p>104/1A Xu&acirc;n Thới 5 - H&oacute;c M&ocirc;n - tp. Hồ Ch&iacute; Minh</p>\r\n', ' 0917116441', NULL, NULL),
(3, 'Công Ty TNHH Thương Mại Và Sản Xuất Nông Sản SAPO DakLak', '<p>Cao ốc B, Ng&ocirc; Gia Tự, P.3, Q.10,&nbsp;<strong><em>Tp. Hồ Ch&iacute; Minh (TPHCM)</em></strong></p>\r\n', '0938031013', NULL, NULL),
(4, 'Doanh Phú - Công Ty TNHH Doanh Phú', '<p>75N/15 Đường Số 2, P. Hiệp B&igrave;nh Phước, Q. Thủ Đức&nbsp;<strong><em>Tp. Hồ Ch&iacute; Minh (TPHCM)</em></strong></p>\r\n', '0862833102', NULL, NULL),
(5, 'Công Ty TNHH Sản Xuất Thực Phẩm BaSao Food', '<p>Nguyễn Văn Thực, Khu 3, P. Đại Ph&uacute;c, Tp. Bắc Ninh,&nbsp;<strong><em>Bắc Ninh</em></strong></p>\r\n', '0933581989', NULL, NULL),
(6, 'Công Ty TNHH Chân Thành', '<p>141/10 đường số 11, P. B&igrave;nh Hưng H&ograve;a, Q. B&igrave;nh T&acirc;n, Tp. Hồ Ch&iacute; Minh (TPHCM)</p>\r\n', '0854084059', NULL, NULL),
(7, 'Công Ty Cổ Phần 36 An Bình Thái', '<p>Th&ocirc;n Lộng Kh&ecirc; 1, X&atilde; An Kh&ecirc;, H. Quỳnh Phụ,<strong><em>Th&aacute;i B&igrave;nh</em></strong></p>\r\n', '0363696398', NULL, NULL),
(8, 'Công Ty TNHH Hải Mạnh Bắc Ninh', '<p>Th&ocirc;n Đa Cầu, X. Nam Sơn, TP. Bắc Ninh,&nbsp;<strong><em>Bắc Ninh</em></strong></p>\r\n', '0912436220', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phivanchuyen`
--

CREATE TABLE `phivanchuyen` (
  `phi_id` int(11) NOT NULL,
  `phi_matp` int(11) NOT NULL,
  `phi_vanchuyen` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phivanchuyen`
--

INSERT INTO `phivanchuyen` (`phi_id`, `phi_matp`, `phi_vanchuyen`, `created_at`, `updated_at`) VALUES
(1, 1, 150000, NULL, NULL),
(2, 2, 50000, NULL, NULL),
(4, 4, 50000, NULL, NULL),
(8, 80, 20000, NULL, NULL),
(9, 89, 25000, NULL, NULL),
(10, 82, 30000, NULL, NULL),
(11, 6, 200000, NULL, NULL),
(13, 8, 50000, NULL, NULL),
(14, 60, 500000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_id` int(11) UNSIGNED NOT NULL,
  `sanpham_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_mota` text COLLATE utf8_unicode_ci NOT NULL,
  `motachitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `sanpham_gia` float NOT NULL,
  `ngaythem` date NOT NULL,
  `loaisanpham_id` int(10) UNSIGNED NOT NULL,
  `donvitinh_id` int(10) UNSIGNED NOT NULL,
  `sanpham_hienthi` int(11) NOT NULL,
  `sanpham_moi` int(11) NOT NULL,
  `sanpham_noibat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `sanpham_ten`, `sanpham_anh`, `sanpham_mota`, `motachitiet`, `sanpham_gia`, `ngaythem`, `loaisanpham_id`, `donvitinh_id`, `sanpham_hienthi`, `sanpham_moi`, `sanpham_noibat`, `created_at`, `updated_at`) VALUES
(1, 'Cây Kim Ngân', 'kim ngân2.jpg', 'Kim Ngân', '', 150000, '2021-05-05', 5, 1, 1, 0, 0, '2016-05-13 04:15:53', '2016-05-20 03:15:00'),
(2, 'Cây Lưỡi Hổ', 'lưỡi hổ96.jpg', 'Lưỡi hổ', '', 180000, '2021-05-05', 5, 1, 1, 0, 0, '2016-05-13 04:24:36', '2016-05-20 03:15:05'),
(3, 'Cây Sen Đá', 'sen đá48.jpg', 'Sen đá để bàn', '', 100000, '2021-05-05', 5, 2, 1, 0, 0, '2016-05-13 04:25:31', '2016-05-20 03:15:11'),
(4, 'Cây Tùng La Hán', 'tùng la hán45.jpg', 'Tùng la hán', '', 200000, '2021-05-05', 5, 2, 1, 1, 0, '2016-05-16 02:54:48', '2016-05-20 03:15:18'),
(5, 'Cây Xương Rồng', 'xương rồng7.jpg', 'Xương rồng', '', 100000, '2021-05-05', 5, 2, 1, 0, 0, '2016-05-16 03:23:00', '2016-05-16 03:23:00'),
(8, 'Cây Hoàng Hậu', 'cây hoàng hậu0.jfif', 'Hoàng hậu', '', 250000, '2021-05-05', 1, 2, 1, 1, 0, '2016-05-17 03:16:54', '2016-05-20 09:55:04'),
(16, 'Cây Hương Thảo', 'Hương-thảo63.jpg', 'Hương thảo', '', 150000, '2021-05-05', 1, 1, 1, 0, 1, NULL, NULL),
(18, 'Cây Trầu Bà Đế Vương', 'cây trầu bà đế vương63.jpg', 'Trầu Bà Đế Vương', '', 250000, '2021-05-05', 1, 1, 1, 0, 0, NULL, NULL),
(19, 'Cây Trạng Nguyên', 'trạng nguyên90.jpg', 'Trạng nguyên', '', 300000, '2021-05-05', 1, 2, 1, 0, 0, NULL, NULL),
(20, 'Cây Trường Sinh', 'trường sinh6.jpg', 'Trường sinh bất lão', '', 300000, '2021-05-05', 1, 2, 1, 0, 0, NULL, NULL),
(21, 'Cây Kim Tiền', 'kim tiền55.jpg', 'Kim tiền', '', 200000, '2021-05-05', 4, 1, 1, 1, 1, NULL, NULL),
(22, 'Cây Nha Đam', 'nha dam5.png', 'Nha đam', '', 100000, '2021-05-05', 4, 2, 1, 0, 1, NULL, NULL),
(23, 'Cây Phát Tài', 'phát tài87.jpg', 'Phát tài phát lộc', '', 300000, '2021-05-05', 4, 2, 1, 0, 1, NULL, NULL),
(24, 'Cây Phú Quý', 'phú quý0.jpg', 'Phú quý vinh hoa', '', 350000, '2021-05-05', 4, 2, 1, 0, 0, NULL, NULL),
(25, 'Cây Thịnh Vượng', 'thịnh vượng8.jpg', 'An khang thịnh vượng', '', 320000, '2021-05-05', 4, 1, 1, 0, 0, NULL, NULL),
(26, 'Cây Bàng Singapore', 'bangsingapore41.jpg', 'Cây Bàng Singapore', '', 350000, '2021-05-05', 3, 1, 1, 0, 0, NULL, NULL),
(27, 'Cây Thường Xuân', 'cây thường xuân71.jpg', 'Thường xuân', '', 250000, '2021-05-05', 3, 1, 1, 0, 0, NULL, NULL),
(28, 'Cây Ngọc Ngân', 'ngocngan57.jpg', 'Ngân ngọc', '', 200000, '2021-05-05', 3, 2, 1, 0, 0, NULL, NULL),
(29, 'Cây Hồng Môn', 'hồng môn19.jpg', 'Hồng môn', '', 350000, '2021-05-05', 3, 2, 1, 0, 1, NULL, NULL),
(30, 'Cây Lan Quân Tử', 'lan quân tử76.jpg', 'Lan quân tử', '', 400000, '2021-05-05', 3, 2, 1, 1, 0, NULL, NULL),
(31, 'Cây Bình An', 'bình an56.jpg', 'Cây Bình An loại cây treo có ý nghĩa phong thủy mang đến sự bình an và may mắn, thường được treo trước cửa nhà để các thành viên trong nhà luôn được may mắn và bình an.', '<p style=\"text-align:justify\">C&acirc;y cảnh ng&agrave;y c&agrave;ng được đa dạng v&agrave; nhiều chủng loại, để th&ecirc;m v&agrave;o bộ sưu tập c&acirc;y treo của m&igrave;nh bạn c&oacute; thể lựa chọn th&ecirc;m c&acirc;y B&igrave;nh An. C&acirc;y mang &yacute; nghĩa phong thủy mang đến may mắn v&agrave; b&igrave;nh an trong cuộc sống cho gia chủ, c&acirc;y c&oacute; m&agrave;u l&aacute; xanh nổi bật đại diện cho h&agrave;nh mộc n&ecirc;n những gia chủ c&oacute; h&agrave;nh Mộc v&agrave; h&agrave;nh Hỏa l&agrave; cực kỳ ph&ugrave; hợp. C&acirc;y B&igrave;nh An ph&ugrave; hợp l&agrave;m c&acirc;y treo, c&acirc;y để b&agrave;n, trang tr&iacute; qu&aacute;n c&agrave; ph&ecirc;, shop&hellip;</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://webcaycanh.com/wp-content/uploads/2020/08/cay-binh-an.jpg\"><img alt=\"Cây bình an\" src=\"https://webcaycanh.com/wp-content/uploads/2020/08/cay-binh-an-400x400.jpg\" style=\"height:400px; width:400px\" /></a></p>\r\n\r\n<p style=\"text-align:center\"><em>C&acirc;y B&igrave;nh An</em></p>\r\n\r\n<p style=\"text-align:justify\"><strong>ĐẶC ĐIỂM CỦA C&Acirc;Y B&Igrave;NH AN</strong></p>\r\n\r\n<p style=\"text-align:justify\"><a href=\"https://webcaycanh.com/cay-binh-an/\">C&acirc;y B&igrave;nh An</a>&nbsp;t&ecirc;n khoa học l&agrave; Peperomia angulata.&nbsp;Peperomia l&agrave; một trong hai chi lớn thuộc Họ Hồ ti&ecirc;u, với hơn 1000 lo&agrave;i được ghi nhận. Phần lớn l&agrave; c&acirc;y nhỏ mọc tr&ecirc;n gỗ mục. C&aacute;c lo&agrave;i trong chi n&agrave;y ph&acirc;n bố khắp c&aacute;c v&ugrave;ng nhiệt đới v&agrave; cận nhiệt đới tr&ecirc;n to&agrave;n thế giới, d&ugrave; tập trung ở Trung Mỹ v&agrave; bắc Nam Mỹ. C&oacute; khoảng 17 lo&agrave;i ph&acirc;n bố ở ch&acirc;u Phi.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://webcaycanh.com/wp-content/uploads/2020/08/la-cay-binh-an.jpg\"><img alt=\"Lá cây bình an\" src=\"https://webcaycanh.com/wp-content/uploads/2020/08/la-cay-binh-an-300x400.jpg\" style=\"height:400px; width:300px\" /></a></p>\r\n\r\n<p style=\"text-align:center\"><em>C&acirc;y b&igrave;nh an c&oacute; rất nhiều rễ ở c&aacute;c nh&aacute;nh để b&aacute;m</em></p>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y B&igrave;nh An nổi bật v&agrave; thu h&uacute;t người đối diện bởi h&igrave;nh d&aacute;ng nhỏ nhắn nhưng đặc biệt kh&aacute;c lạ. C&acirc;y mọc th&agrave;nh bụi, thường được trồng trong lọ để b&agrave;n hoặc treo l&ecirc;n g&oacute;c nh&agrave; hay h&agrave;nh lang. L&aacute; c&acirc;y h&igrave;nh bầu dục, mọc đối xứng qua th&acirc;n, c&oacute; c&aacute;c đường viền m&agrave;u trắng chạy dọc tr&ecirc;n mặt l&aacute; rất bắt mắt. Mỗi chiếc l&aacute; c&oacute; khoảng 3-4 đường viền t&ugrave;y k&iacute;ch thước, thuộc loại&nbsp;<a href=\"https://webcaycanh.com/cay-day-leo/\" rel=\"noopener\" target=\"_blank\">c&acirc;y d&acirc;y leo</a>&nbsp;b&aacute;m bằng rễ n&ecirc;n ở mỗi đoạn th&acirc;n c&oacute; l&aacute; khi trưởng th&agrave;nh đều c&oacute; rễ mọc ra.</p>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:20px\">C&Aacute;CH CHĂM S&Oacute;C C&Acirc;Y B&Igrave;NH AN</span></h2>\r\n\r\n<p style=\"text-align:justify\">Thuộc loại c&acirc;y xanh quanh năm, sống khỏe v&agrave; c&oacute; khả năng th&iacute;ch nghi với m&ocirc;i trường sống, tuy nhi&ecirc;n khi chăm s&oacute;c c&acirc;y B&igrave;nh An ta vẫn cần lưu &yacute; một số điểm sau.</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>NƯỚC</strong></span></h3>\r\n\r\n<p style=\"text-align:justify\">Nh&igrave;n chung tất cả c&aacute;c loại c&acirc;y treo đều ưa đất c&oacute; m&ugrave;n v&agrave; giữ ẩm tốt nhưng kh&ocirc;ng ướt. V&igrave; thường c&acirc;y được treo l&ecirc;n n&ecirc;n nước sẽ tho&aacute;t ra rất nhanh khiến c&acirc;y bị kh&ocirc; kh&eacute;o, ch&iacute;nh v&igrave; thế hay thường xuy&ecirc;n cung cấp nước cho c&aacute;c loại c&acirc;y treo, hay c&acirc;y B&igrave;nh An, c&aacute;ch tốt nhất l&agrave; ta n&ecirc;n để c&acirc;y v&agrave;o nơi m&aacute;t c&oacute; &aacute;nh nắng nhẹ, nếu mưa l&acirc;u ng&agrave;y th&igrave; n&ecirc;n bỏ c&acirc;y v&agrave;o nh&agrave;, c&ograve;n mưa bất chợt hoặc thời lượng mưa kh&ocirc;ng lớn th&igrave; cứ để c&acirc;y tắm mưa kh&ocirc;ng sao cả. Nước tưới trung b&igrave;nh khoảng 2 lần/ tuần</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>&Aacute;NH S&Aacute;NG</strong></span></h3>\r\n\r\n<p style=\"text-align:justify\">Thuộc loại c&acirc;y ưa m&aacute;t, th&iacute;ch &aacute;nh s&aacute;ng nhẹ, tr&aacute;nh để c&acirc;y ở nơi c&oacute; &aacute;nh s&aacute;ng gắt như trưa n&oacute;ng trời m&ugrave;a h&egrave;, n&ecirc;n để c&acirc;y dưới t&aacute;n c&acirc;y lớn, hi&ecirc;n nh&agrave;, cửa sổ, hoặc dưới đ&egrave;n điện nơi tho&aacute;ng gi&oacute;.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://webcaycanh.com/wp-content/uploads/2020/08/cay-binh-an-dep.jpg\"><img alt=\"Cây bình an đẹp\" src=\"https://webcaycanh.com/wp-content/uploads/2020/08/cay-binh-an-dep-400x400.jpg\" style=\"height:400px; width:400px\" /></a></p>\r\n\r\n<p style=\"text-align:center\"><em>C&acirc;y B&igrave;nh An ưa tho&aacute;ng &aacute;nh s&aacute;ng nhẹ</em></p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>ĐẤT</strong></span></h3>\r\n\r\n<p style=\"text-align:justify\">Thường c&acirc;y được trồng bằng sơ dừa, hoặc những loại đất c&oacute; khả năng giữ ẩm v&agrave; nhiều dinh dưỡng, kh&ocirc;ng n&ecirc;n trồng c&acirc;y v&agrave;o những loại đất kh&ocirc;ng c&oacute; độ tho&aacute;ng, v&agrave; giữ nước như đất thịt.</p>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>NH&Acirc;N GIỐNG</strong></span></h3>\r\n\r\n<p style=\"text-align:justify\">C&acirc;y c&oacute; thể chọn những c&agrave;nh trưởng th&agrave;nh c&oacute; rễ cắt ra rồi gi&acirc;m xuống đất l&agrave; được. Thường th&igrave; ra n&ecirc;n để c&acirc;y tr&ecirc;n mặt đất khi rễ ph&aacute;t triển b&aacute;m đất tốt th&igrave; mới cắt th&igrave; khả năng th&agrave;nh c&ocirc;ng l&agrave; 100%</p>', 350000, '2021-05-05', 2, 2, 1, 1, 1, NULL, NULL),
(32, 'Cây Hạnh Phúc', 'cây hạnh phúc88.jpg', 'Hạnh phúc', '', 420000, '2021-05-05', 2, 2, 1, 0, 0, NULL, NULL),
(33, 'Cây Đuôi Công', 'đuôi công38.jpg', 'Đuôi cong', '', 450000, '2021-05-05', 2, 2, 1, 1, 0, NULL, NULL),
(34, 'Dương Xỉ Cẩm Thạch', 'dương xỉ cẩm thạch40.jpg', 'Dương xỉ', '', 400000, '2021-05-05', 2, 2, 1, 0, 1, NULL, NULL),
(35, 'Lan Chi', 'lan chi37.jpg', 'Lan chi', '', 400000, '2021-05-05', 2, 2, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` int(11) NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_date` date NOT NULL,
  `shipping_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_city`, `shipping_email`, `shipping_phone`, `shipping_date`, `shipping_time`, `shipping_note`, `created_at`, `updated_at`) VALUES
(1, 'Hong Khac Huy', '9/21 Vinh Long', 1, 'hongkhachuy@gmail.com', '012544455', '0000-00-00', '', 'Giao trong ngay', NULL, NULL),
(2, 'Huy', 'vinh long', 1, 'huy@gmail.com', '01234567', '0000-00-00', '', 'đơn hàng', NULL, NULL),
(3, 'hưng', 'vlong', 1, 'hung123@gmail.com', '02833483678364', '0000-00-00', '', 'hahahahaha', NULL, NULL),
(4, 'Ngân', 'Vĩnh Long', 1, 'ngan@gmail.com', '0215475413', '0000-00-00', '', 'Giao trong ngày', NULL, NULL),
(5, 'Diễm Ngân', 'Vĩnh Long', 1, 'diemngan@gmail.com', '027845126', '0000-00-00', '', 'Giao trong ngày', NULL, NULL),
(6, 'Vân', 'Vĩnh Long', 1, 'van@gmail.com', '021547854', '0000-00-00', '', 'Giao trong tháng 5', NULL, NULL),
(7, 'Phúc Hậu', 'Sa Đéc', 1, 'phuchau@gmail.com', '0125478456', '0000-00-00', '', 'Giao trong ngày', NULL, NULL),
(8, 'Khắc Hưng', 'Vĩnh Long', 1, 'khachung@gmail.com', '0254784152', '0000-00-00', '', 'Giao trong ngày', NULL, NULL),
(9, 'Diễm Ngân', 'Vĩnh Long', 1, 'diemngan@gmail.com', '0236547418', '0000-00-00', '', 'Giao liền', NULL, NULL),
(10, 'Trần Văn A', 'Cần Thơ', 1, 'vana@gmail.com', '0254784153', '0000-00-00', '', 'Giao trong ngày', NULL, NULL),
(11, 'Viết Hưng', 'Vĩnh Long', 1, 'hunghung@gmail.com', '025478412', '0000-00-00', '', 'Giao trong ngày', NULL, NULL),
(12, 'Nguyễn Trung Khánh', 'Vĩnh Long', 1, 'trungkhanh@gmail.com', '021548745', '0000-00-00', '', 'Giao liền', NULL, NULL),
(15, 'hải đăng', '8/30', 1, 'haidang@gmail.com', '56455454', '2021-05-27', '9h-11h30', 'ahahah', NULL, NULL),
(16, 'phúc hậu', '14/9, phường 2', 2, 'hauphuc@gmail.com', '025454564', '2021-05-27', '12h-14h', 'Giao đúng hạn', NULL, NULL),
(17, 'Huy Hồng Khắc', '9/21', 89, 'hhkhac@gmail.com', '0325478412', '2021-05-29', '19h-21h', 'Giao đúng hạn nha shop!', NULL, NULL),
(18, 'Trần Đuôi Công', '2/31, đường Lê Lợi, phường 3', 82, 'duoicong@gmail.com', '0325412547', '2021-05-30', '16h-18h', 'Giao sớm càng tốt', NULL, NULL),
(19, 'Nguyễn Nha Đam', '7/25, đường 30/4, phường 12', 4, 'nhadam@gmail.com', '021548743', '2021-05-31', '18h-20h', 'Giao sớm nha shop!!', NULL, NULL),
(20, 'gdfgfg', 'fdggfdgfdggf', 1, 'fdgfgdfgd@gmail.com', '07312636213', '2021-05-29', '9h-11h30', 'sdfdsfsdfsdfsdf', NULL, NULL),
(21, 'Hồng Môn', '80A, đường Lê Lợi', 82, 'hongmon@gmail.com', '0215487453', '2021-06-01', '12h-14h', 'Giao sớm hơn cũng được', NULL, NULL),
(22, 'Diễm Ngân Trần', '9/78', 25, 'dntran@gmail.com', '05564545', '2021-05-30', '12h-14h', 'Good', NULL, NULL),
(23, 'Diễm Ngân Trần', '9/78', 1, 'dntran@gmail.com', '05564545', '2021-05-30', '12h-14h', 'Good', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `thanhtoan_id` int(11) UNSIGNED NOT NULL,
  `thanhtoan_hinhthuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhtoan_tinhtrang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`thanhtoan_id`, `thanhtoan_hinhthuc`, `thanhtoan_tinhtrang`, `created_at`, `updated_at`) VALUES
(1, '2', '1', NULL, NULL),
(2, '2', 'Đang chờ xử lý', NULL, NULL),
(3, '2', 'Đang chờ xử lý', NULL, NULL),
(4, '2', 'Đang chờ xử lý', NULL, NULL),
(5, '2', 'Đang chờ xử lý', NULL, NULL),
(6, '2', 'Đang chờ xử lý', NULL, NULL),
(7, '2', 'Đang chờ xử lý', NULL, NULL),
(8, '2', 'Đang chờ xử lý', NULL, NULL),
(9, '2', 'Đang chờ xử lý', NULL, NULL),
(10, '2', 'Đang chờ xử lý', NULL, NULL),
(11, '2', 'Đang chờ xử lý', NULL, NULL),
(12, '2', 'Đang chờ xử lý', NULL, NULL),
(13, '2', 'Đang chờ xử lý', NULL, NULL),
(14, '2', 'Đang chờ xử lý', NULL, NULL),
(15, '2', 'Đang chờ xử lý', NULL, NULL),
(16, '2', 'Đang chờ xử lý', NULL, NULL),
(17, '2', 'Đang chờ xử lý', NULL, NULL),
(18, '2', 'Đang chờ xử lý', NULL, NULL),
(19, '2', 'Đang chờ xử lý', NULL, NULL),
(20, '2', 'Đang chờ xử lý', NULL, NULL),
(21, '2', 'Đang chờ xử lý', NULL, NULL),
(22, '2', 'Đang chờ xử lý', NULL, NULL),
(23, '2', 'Đang chờ xử lý', NULL, NULL),
(24, '2', 'Đang chờ xử lý', NULL, NULL),
(25, '2', 'Đang chờ xử lý', NULL, NULL),
(26, '2', 'Đang chờ xử lý', NULL, NULL),
(27, '2', 'Đang chờ xử lý', NULL, NULL),
(28, '2', 'Đang chờ xử lý', NULL, NULL),
(29, '2', 'Đang chờ xử lý', NULL, NULL),
(30, '2', 'Đang chờ xử lý', NULL, NULL),
(31, '2', 'Đã thanh toán', NULL, NULL),
(32, '2', 'Đã thanh toán', NULL, NULL),
(33, '2', 'Đã thanh toán', NULL, NULL),
(34, '2', 'Đang chờ xử lý', NULL, NULL),
(35, '2', 'Đã thanh toán', NULL, NULL),
(36, '2', 'Đã thanh toán', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanhpho`
--

CREATE TABLE `tinhthanhpho` (
  `matp` int(11) NOT NULL,
  `ten_tp` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tinhthanhpho`
--

INSERT INTO `tinhthanhpho` (`matp`, `ten_tp`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Thành phố Hà Nội', 'Thành phố Trung ương', NULL, NULL),
(2, 'Tỉnh Hà Giang', 'Tỉnh', NULL, NULL),
(4, 'Tỉnh Cao Bằng', 'Tỉnh', NULL, NULL),
(6, 'Tỉnh Bắc Kạn', 'Tỉnh', NULL, NULL),
(8, 'Tỉnh Tuyên Quang', 'Tỉnh', NULL, NULL),
(10, 'Tỉnh Lào Cai', 'Tỉnh', NULL, NULL),
(11, 'Tỉnh Điện Biên', 'Tỉnh', NULL, NULL),
(12, 'Tỉnh Lai Châu', 'Tỉnh', NULL, NULL),
(14, 'Tỉnh Sơn La', 'Tỉnh', NULL, NULL),
(15, 'Tỉnh Yên Bái', 'Tỉnh', NULL, NULL),
(17, 'Tỉnh Hoà Bình', 'Tỉnh', NULL, NULL),
(19, 'Tỉnh Thái Nguyên', 'Tỉnh', NULL, NULL),
(20, 'Tỉnh Lạng Sơn', 'Tỉnh', NULL, NULL),
(22, 'Tỉnh Quảng Ninh', 'Tỉnh', NULL, NULL),
(24, 'Tỉnh Bắc Giang', 'Tỉnh', NULL, NULL),
(25, 'Tỉnh Phú Thọ', 'Tỉnh', NULL, NULL),
(26, 'Tỉnh Vĩnh Phúc', 'Tỉnh', NULL, NULL),
(27, 'Tỉnh Bắc Ninh', 'Tỉnh', NULL, NULL),
(30, 'Tỉnh Hải Dương', 'Tỉnh', NULL, NULL),
(31, 'Thành phố Hải Phòng', 'Thành phố Trung ương', NULL, NULL),
(33, 'Tỉnh Hưng Yên', 'Tỉnh', NULL, NULL),
(34, 'Tỉnh Thái Bình', 'Tỉnh', NULL, NULL),
(35, 'Tỉnh Hà Nam', 'Tỉnh', NULL, NULL),
(36, 'Tỉnh Nam Định', 'Tỉnh', NULL, NULL),
(37, 'Tỉnh Ninh Bình', 'Tỉnh', NULL, NULL),
(38, 'Tỉnh Thanh Hóa', 'Tỉnh', NULL, NULL),
(40, 'Tỉnh Nghệ An', 'Tỉnh', NULL, NULL),
(42, 'Tỉnh Hà Tĩnh', 'Tỉnh', NULL, NULL),
(44, 'Tỉnh Quảng Bình', 'Tỉnh', NULL, NULL),
(45, 'Tỉnh Quảng Trị', 'Tỉnh', NULL, NULL),
(46, 'Tỉnh Thừa Thiên Huế', 'Tỉnh', NULL, NULL),
(48, 'Thành phố Đà Nẵng', 'Thành phố Trung ương', NULL, NULL),
(49, 'Tỉnh Quảng Nam', 'Tỉnh', NULL, NULL),
(51, 'Tỉnh Quảng Ngãi', 'Tỉnh', NULL, NULL),
(52, 'Tỉnh Bình Định', 'Tỉnh', NULL, NULL),
(54, 'Tỉnh Phú Yên', 'Tỉnh', NULL, NULL),
(56, 'Tỉnh Khánh Hòa', 'Tỉnh', NULL, NULL),
(58, 'Tỉnh Ninh Thuận', 'Tỉnh', NULL, NULL),
(60, 'Tỉnh Bình Thuận', 'Tỉnh', NULL, NULL),
(62, 'Tỉnh Kon Tum', 'Tỉnh', NULL, NULL),
(64, 'Tỉnh Gia Lai', 'Tỉnh', NULL, NULL),
(66, 'Tỉnh Đắk Lắk', 'Tỉnh', NULL, NULL),
(67, 'Tỉnh Đắk Nông', 'Tỉnh', NULL, NULL),
(68, 'Tỉnh Lâm Đồng', 'Tỉnh', NULL, NULL),
(70, 'Tỉnh Bình Phước', 'Tỉnh', NULL, NULL),
(72, 'Tỉnh Tây Ninh', 'Tỉnh', NULL, NULL),
(74, 'Tỉnh Bình Dương', 'Tỉnh', NULL, NULL),
(75, 'Tỉnh Đồng Nai', 'Tỉnh', NULL, NULL),
(77, 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh', NULL, NULL),
(79, 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương', NULL, NULL),
(80, 'Tỉnh Long An', 'Tỉnh', NULL, NULL),
(82, 'Tỉnh Tiền Giang', 'Tỉnh', NULL, NULL),
(83, 'Tỉnh Bến Tre', 'Tỉnh', NULL, NULL),
(84, 'Tỉnh Trà Vinh', 'Tỉnh', NULL, NULL),
(86, 'Tỉnh Vĩnh Long', 'Tỉnh', NULL, NULL),
(87, 'Tỉnh Đồng Tháp', 'Tỉnh', NULL, NULL),
(89, 'Tỉnh An Giang', 'Tỉnh', NULL, NULL),
(91, 'Tỉnh Kiên Giang', 'Tỉnh', NULL, NULL),
(92, 'Thành phố Cần Thơ', 'Thành phố Trung ương', NULL, NULL),
(93, 'Tỉnh Hậu Giang', 'Tỉnh', NULL, NULL),
(94, 'Tỉnh Sóc Trăng', 'Tỉnh', NULL, NULL),
(95, 'Tỉnh Bạc Liêu', 'Tỉnh', NULL, NULL),
(96, 'Tỉnh Cà Mau', 'Tỉnh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtranghd`
--

CREATE TABLE `tinhtranghd` (
  `id` int(10) UNSIGNED NOT NULL,
  `tinhtranghd_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtranghd_mo_ta` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtranghd`
--

INSERT INTO `tinhtranghd` (`id`, `tinhtranghd_ten`, `tinhtranghd_mo_ta`, `created_at`, `updated_at`) VALUES
(1, 'Chưa xác nhận', NULL, NULL, NULL),
(2, 'Đã giao hàng', NULL, NULL, NULL),
(3, 'Đã hủy', NULL, NULL, NULL),
(4, 'Đã thanh toán', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `loainguoidung_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `loainguoidung_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Quản trị viên', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'PaNVt7zeenEeBuw97evvkqRfUI8kzBdlxUQMsmC5vRL2F5Ol8nvtic77ow6u', '2016-05-23 04:28:32', '2016-07-05 03:30:55'),
(9, 'Long Nhat', 'user5@gmail.com', '$2y$10$Q0idd9vD1rDU1vR0Pm.k3.InfqySExbdV2DWrYyryWxypwltE5EaO', 2, '9HmOvixYYYNp4qt0JlnCxPaygNAWVH2SlptIAdWQxToeFzSpinSZ3tmoVlpT', '2016-06-01 04:18:12', '2016-06-06 08:59:58'),
(10, 'Thanh Binh', 'user6@gmail.com', '$2y$10$Mr/sw0FPL9o6gIFR4UO8NuP6d5AZtzBDEZxXTDGuKXvso.h78MtD6', 2, 'plAQOjeG5dKopix4PWK39AgEQGkBBj9hks6zb1mNsWx8ztEyv6g03F9hvie1', '2016-06-01 04:21:32', '2016-06-07 03:29:11'),
(11, 'queen', 'queen@gmail.com', '$2y$10$DAcaZ2d3LF6Y0az4NOc.1eQYU9Ok5QUykwo01hK1bodIvhoWsRdyq', 2, NULL, '2016-06-16 08:09:40', '2016-06-16 08:09:40'),
(12, 'Hân Trịnh', 'hana@gmail.com', '$2y$10$7EhtG2kbBOZrHZA1Hxhee.coNrMWwZpDYIurQ0fZNHiSxYIxqq5.K', 2, 'x1pJLMqkV909u3XPHBtBfnqMzIYVqiRq5O4JjhKZiX8mRo3trkyLrALNl6zF', '2016-06-19 16:17:22', '2016-07-02 03:34:01'),
(13, 'HanaYuu', 'hanab1204011@gmail.com', '$2y$10$64Ev3BfH6DfLgiOMq2fxxuFk7fn86k0Cbr3BUOsnrbK5h1AOaSlW6', 2, 'vFZlzrxvSJDXGVn3IBVKUloGsE0tss1j4wdi8CtKCUmSnfnwuN3Bf38xFir5', '2016-06-23 02:08:57', '2016-06-23 02:18:43'),
(14, 'Lê Hữu Nghĩa', 'nghiab1204035@gmail.com', '$2y$10$szgXVojhj52NwpJn8rWPd..pdAAmLOC04iiHxI11Ti1g1BugvYnjS', 2, 'W0ALEMEPO23wteBdKj5rbAnNH2apvr1YhFDeFKD5kgPyBWKMRdCx35u2jtZ1', '2016-07-03 15:01:28', '2016-07-05 03:27:30'),
(15, 'huy', 'huy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL),
(16, 'hong khac huy', 'huyhuy@gmail.com', '$2y$10$yka4yJ8GO1ZCouTIQHyfr.LEvnvKc04PIAV6psHSBee/YjSBP/XRS', 2, NULL, '2021-05-10 05:51:16', '2021-05-10 05:51:16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhluan_sanpham_id_foreign` (`sanpham_id`),
  ADD KEY `FK_bl_baiviet` (`baiviet_id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ctdh_id`),
  ADD KEY `FK_sanpham_ctdh` (`sanpham_id`),
  ADD KEY `FK_donhang_ctdh` (`donhang_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`donhang_id`),
  ADD KEY `FK_khachhang_donhang` (`khachhang_id`),
  ADD KEY `FK_tinhtranghd_donhang` (`tinhtranghd_id`),
  ADD KEY `FK_shipping_donhang` (`id_shipping`),
  ADD KEY `FK_thanhtoang_donhang` (`thanhtoan_id`);

--
-- Chỉ mục cho bảng `donvitinh`
--
ALTER TABLE `donvitinh`
  ADD PRIMARY KEY (`donvitinh_id`);

--
-- Chỉ mục cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  ADD PRIMARY KEY (`id_khachhang`),
  ADD KEY `FK_loainguoidung_khachhang` (`loainguoidung_id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loainguoidung`
--
ALTER TABLE `loainguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lohang`
--
ALTER TABLE `lohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lohang_nhacungcap_id_foreign` (`nhacungcap_id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `phivanchuyen`
--
ALTER TABLE `phivanchuyen`
  ADD PRIMARY KEY (`phi_id`),
  ADD KEY `FK_matp` (`phi_matp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD KEY `FK_loaisanpham` (`loaisanpham_id`),
  ADD KEY `FK_Donvitinh` (`donvitinh_id`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`),
  ADD KEY `FK_tinhtp` (`shipping_city`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`thanhtoan_id`);

--
-- Chỉ mục cho bảng `tinhthanhpho`
--
ALTER TABLE `tinhthanhpho`
  ADD PRIMARY KEY (`matp`);

--
-- Chỉ mục cho bảng `tinhtranghd`
--
ALTER TABLE `tinhtranghd`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_loainguoidung_id_foreign` (`loainguoidung_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ctdh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `donhang_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `donvitinh`
--
ALTER TABLE `donvitinh`
  MODIFY `donvitinh_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  MODIFY `id_khachhang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loainguoidung`
--
ALTER TABLE `loainguoidung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `lohang`
--
ALTER TABLE `lohang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `phivanchuyen`
--
ALTER TABLE `phivanchuyen`
  MODIFY `phi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `thanhtoan_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tinhtranghd`
--
ALTER TABLE `tinhtranghd`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_bl_baiviet` FOREIGN KEY (`baiviet_id`) REFERENCES `baiviet` (`baiviet_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_sanpham_id_foreign` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `FK_donhang_ctdh` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`donhang_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sanpham_ctdh` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_khachhang_donhang` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhangs` (`id_khachhang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_shipping_donhang` FOREIGN KEY (`id_shipping`) REFERENCES `shipping` (`shipping_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_thanhtoang_donhang` FOREIGN KEY (`thanhtoan_id`) REFERENCES `thanhtoan` (`thanhtoan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tinhtranghd_donhang` FOREIGN KEY (`tinhtranghd_id`) REFERENCES `tinhtranghd` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khachhangs`
--
ALTER TABLE `khachhangs`
  ADD CONSTRAINT `FK_loainguoidung_khachhang` FOREIGN KEY (`loainguoidung_id`) REFERENCES `loainguoidung` (`id`);

--
-- Các ràng buộc cho bảng `lohang`
--
ALTER TABLE `lohang`
  ADD CONSTRAINT `lohang_nhacungcap_id_foreign` FOREIGN KEY (`nhacungcap_id`) REFERENCES `nhacungcap` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phivanchuyen`
--
ALTER TABLE `phivanchuyen`
  ADD CONSTRAINT `FK_matp` FOREIGN KEY (`phi_matp`) REFERENCES `tinhthanhpho` (`matp`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_Donvitinh` FOREIGN KEY (`donvitinh_id`) REFERENCES `donvitinh` (`donvitinh_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_loaisanpham` FOREIGN KEY (`loaisanpham_id`) REFERENCES `loaisanpham` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `FK_tinhtp` FOREIGN KEY (`shipping_city`) REFERENCES `tinhthanhpho` (`matp`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_loainguoidung_id_foreign` FOREIGN KEY (`loainguoidung_id`) REFERENCES `loainguoidung` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
