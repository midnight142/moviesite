-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 05:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesite`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `FID` int(11) NOT NULL,
  `nickname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `FID`, `nickname`, `comment`) VALUES
(1, 2, 'Admin', 'Hello World'),
(2, 7, 'dsds', 'MDMDMDM'),
(3, 2, 'Admin', 'Hello '),
(4, 2, 'huhuh', 'gyugyugu');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `chapter` int(50) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

CREATE TABLE `dienthoai` (
  `id` int(11) NOT NULL,
  `MaHDT` int(11) NOT NULL,
  `TenDT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`id`, `MaHDT`, `TenDT`, `price`, `image`) VALUES
(1, 1, 'Nokia Lumia 1020', 4500000, 'null'),
(2, 1, 'Nokia 808 PureView', 2350000, 'null'),
(3, 2, 'Samsung Galaxy Ford', 1400000, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `hangdienthoai`
--

CREATE TABLE `hangdienthoai` (
  `id` int(11) NOT NULL,
  `TenHDT` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `namTL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doanhthu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangdienthoai`
--

INSERT INTO `hangdienthoai` (`id`, `TenHDT`, `country`, `namTL`, `doanhthu`) VALUES
(1, 'Nokia', 'Phần Lan', '1865', '22,56 tỷ EUR'),
(2, 'Samsung', 'Hàn Quốc', '1938', '265 tỷ USD'),
(3, 'Apple', 'My', '1976', '260,2 tỷ USD');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphim`
--

CREATE TABLE `loaiphim` (
  `id` int(50) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaiphim`
--

INSERT INTO `loaiphim` (`id`, `type`) VALUES
(1, 'Phim lẻ'),
(2, 'Phim chiếu rạp'),
(3, 'Phim Bộ');

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `id` int(50) NOT NULL,
  `name_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `director` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(10) NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quality` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(50) NOT NULL,
  `country` int(50) NOT NULL,
  `type` int(50) NOT NULL,
  `views` int(150) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `name_vi`, `name_en`, `link`, `image`, `director`, `year`, `time`, `quality`, `category`, `country`, `type`, `views`, `description`) VALUES
(1, 'Hoạt động ngoại khóa', 'Extracurricular / Human Class', 'hoat-dong-ngoai-khoa', 'http://image.phimmoi.net/film/10830/poster.medium.jpg', 'Kim Jin-Min', 2020, 'N/A', 'HD 720p', 1, 2, 3, 10000, 'Lún sâu trong thế giới tội phạm đáng sợ, một học sinh trung học mẫu mực thấy cuộc sống hai mặt của mình bị đảo lộn khi người bạn cùng lớp quan tâm đến bí mật của cậu.'),
(3, 'Captain America 3: Nội chiến Siêu Anh Hùng', 'Captain America 3: Civil War', 'captain-america-3-civil-war-i7', 'http://image.phimmoi.net/film/3086/poster.medium.jpg', '', 2016, '147 phút', 'Full HD', 1, 1, 2, 100, 'Captain America: Civil War là câu chuyện theo sau sự kiện Avengers: Age Of Ultron, các liên minh chính phủ trên toàn thế giới thông qua một hiệp ước được thiết lập để điều chỉnh hoạt động của tất cả siêu anh hùng. Điều này gây ra sự phân cực trong nội bộ nhóm Avengers, tạo nên hai phe gồm Iron Man và Captain America, gây ra một trận chiến sử thi giữa những người đồng đội'),
(4, 'Captain America 2: Chiến Binh Mùa Đông', 'Captain America 2: The Winter Soldier', 'captain-america-chien-binh-mua-dong', 'http://image.phimmoi.net/film/842/poster.medium.jpg', 'Anthony Russo, Joe Russo', 2014, '136 phút', 'Full HD', 1, 1, 2, 100, 'Bộ phim là câu chuyện tiếp nối bộ phim The Avengers, khi Steve Rogers phải tìm cách hòa nhập vào thế giới hiện đại và kết hợp với Natasha Romanoff/Black Widow để chiến đấu chống lại một kẻ thù nguy hiểm ở Washington, D.C. Sau cuộc chiến cùng đội The Avengers tại New York, Captain America (hay còn gọi là Steve Rogers) có một cuộc sống khá thầm lặng tại Washington và anh phải vật lộn để thích nghi với cuộc sông ở thế giới hiện đại.\r\n\r\nTuy nhiên, khi một người bạn trong SHIELD bị rơi vào vòng nguy '),
(5, 'Biệt Đội Siêu Anh Hùng', 'The Avengers', 'biet-doi-sieu-anh-hung-i7', 'http://image.phimmoi.net/film/44/poster.medium.jpg', 'Joss Whedon', 2012, '143 phút', 'Full HD', 1, 1, 2, 100, 'Marvel’s The Avengers là bộ phim giả tưởng kể về một nhóm siêu anh hùng với những khả năng đặc biệt, họ bao gồm: Người Sắt, Thor, Captain America, và Người Khổng Lồ được gọi chung với cái tên SHIELD. Mục đích của SHIELD là nhằm bảo vệ Trái đất khỏi âm mưu hủy hoại của những thế lực xấu từ ngoài địa cầu mà kẻ cầm đầu là Loki. Marvel’s The Avengers Là một trong những phim được mong đợi nhất hè 2012, phim quy tụ dàn diễn viên đẹp với những cảnh quay sống động đã mang về cho nhà sản xuất hơn 1 tỷ US'),
(7, 'Biệt Đội Siêu Anh Hùng 2: Đế chế Ultron', 'Avengers 2: Age of Ultron', 'biet-doi-sieu-anh-hung-2-de-che-ultron-i4', 'http://image.phimmoi.net/film/1493/poster.medium.jpg', 'Joss Whedon', 2015, '150 phút', 'Full HD', 1, 1, 2, 100, 'Trong phần này, biệt đội siêu anh hùng của chúng ta sẽ phải chiến đấu với binh đoàn robot được biết đến với cái tên là Ultron.'),
(9, 'Đưa Tôi Bay Tới Sao Kim', 'Fly Me to Venus', 'null', 'http://image.phimmoi.net/film/11062/poster.medium.jpg', 'Ke Deng', 2015, '92 phút', 'Full HD', 2, 3, 1, 12598, 'Một cô gái xinh đẹp và một phần mềm máy tính trót đem lòng yêu thương nhau. Liệu mối tình lạ đời giữa thế giới thật và thế giới ảo sẽ có cái kết tốt đẹp?'),
(10, 'Mỹ Nhân Ngư', 'The Mermaid', 'null', 'http://image.phimmoi.net/film/3669/poster.medium.jpg', 'Châu Tinh Trì', 2017, '94 phút', 'Full HD', 3, 3, 2, 17834, 'MỸ NHÂN NGƯ của Châu Tinh Trì lấy bối cảnh ở thời hiện đại. Phim xoay quanh chuyện tình cảm giữa cô người cá San San và doanh nhân trẻ thành đạt Lưu Hiên. Phim không chỉ hài hước còn mang nhiều giá trị nhân văn về tình yêu, cuộc sống và việc bảo vệ môi trường.'),
(11, 'Chuyến Tàu Băng Giá', 'Snowpiercer', 'null', 'http://image.phimmoi.net/film/844/poster.medium.jpg', 'Joon-Ho Bong', 2013, '126 phút', 'Full HD', 1, 2, 2, 46726, 'Năm 2014, trước vấn nạn Trái Đất đang nóng lên, các nhà lãnh đạo trên toàn thế giới đã quyết định tung lên bầu khí quyển vật chất CW-7, nhằm giúp nhiệt độ trung bình của địa cầu ổn định trở lại. Thế nhưng kết quả mà loài người thu được thì thật kinh hoàng: toàn bộ thế giới bị đóng băng, sự sống cứ thế dần tuyệt diệt. Chỉ có duy nhất một con tàu có tên Snowpiercer do Ngài Wilford cầm lái vẫn cứ thế lầm lũi chạy xuyên băng tuyết, chở trên đó những kẻ sót lại cuối cùng của nhân loại...'),
(12, 'Kenny Sebastian: Người Thú Vị Nhất Trong Phòng', 'The Most Interesting Person in the Room by Kenny Sebastian', 'null', 'http://image.phimmoi.net/film/11059/poster.medium.jpg', 'Angshuman Ghosh, Neville Shah', 2020, '67 phút', 'HD 720p', 6, 11, 1, 34638, 'Kết hợp nhạc kịch và khiếu hài hước, Kenny Sebastian phân tích về những đôi giày lôi thôi, những chú chim không biết bay và nỗi sợ rằng bản thân không đủ hài hước.'),
(13, 'Huyền Thoại Rồng Đen: Scorpion Báo Thù', 'Mortal Kombat Legends: Scorpion\'s Revenge', 'null', 'http://image.phimmoi.net/film/11060/poster.medium.jpg', 'Ethan Spaulding', 2020, '80 phút', 'Full HD', 1, 1, 1, 36435, 'Mortal Kombat là một tựa game chiến đấu và là trò chơi đầu tiên được phát hành vào năm 1992. Nó đã trở thành một thương hiệu về game chiến đấu đối kháng và bạo lực, đáng chú lý là chiêu cuối Fatality cho phép người chơi giết đối thủ một cách tàn bạo nhất. Scorpion là một trong những nhân vật đầu tiên cũng như là nhân vật nổi tiếng nhất. Anh chàng có câu chuyện bối cảnh bi thảm nhất trong nhượng quyền thương mại. Toàn bộ gia tộc của anh ta, bao gồm cả con trai Satoshi và vợ Harumi đã bị Quan Chi sát hại, người đã lừa Scorpion tin rằng Sub-Zero đã làm điều đó. Đó là một câu chuyện hấp dẫn với nhiều khúc ngoặt mà tất cả người hâm mộ Mortal Kombat đều thích được xem trên màn hình lớn. '),
(14, 'Thỏa Thuận Chết Người', 'Arkansas', 'null', 'http://image.phimmoi.net/film/11058/poster.medium.jpg', 'Clark Duke', 2020, '117 phút', 'Full HD', 7, 1, 1, 46333, 'Kyle và Swin sống theo lệnh của một trùm ma túy có trụ sở tại Arkansas tên là Frog, người mà họ chưa bao giờ gặp. Nhưng khi một thỏa thuận đi sai lầm khủng khiếp, hậu quả là chết người.'),
(15, 'Thiếu Nữ Báo Thù', 'Some Kind of Hate', 'null', 'http://image.phimmoi.net/film/11053/poster.medium.jpg', 'Adam Egypt Mortimer', 2015, '67 phút', 'Full HD', 1, 1, 1, 335535, 'Thiếu Nữ Báo Thù (Some Kind Of Hate) là câu chuyện xoay quanh một cô gái hiền lành và xinh đẹp và cùng với anh chàng điển trai yêu nhau trong một dịp tình cờ gặp gỡ, sao đó mọi chuyện đã xảy ra với chàng trai đó khi anh bị một nhóm côn đồ hành hạ và đánh đập sau đó đã qua đời, cô gái này dường như không còn thứ gì quyến luyến trên đời nữa quyết định trờ thành một cô gái tàn bạo và dã mang nhất để trả thù cho người yêu của mình. '),
(16, 'Sát Thủ Chuyên Nghiệp', 'Léon: The Professional', 'null', 'http://image.phimmoi.net/film/11008/poster.medium.jpg', 'Luc Besson', 1994, '110 phút', 'HD 720p', 1, 1, 1, 34735, 'Léon là một công dân nhập cư, người vừa chạy trốn từ Ý sau khi phạm tội sát nhân ở đó. Léon sống ở New York và đang làm việc cho tay anh chị Tony ở đây. Léon sống trong một căn hộ nhỏ cạnh nhà của cô bé Mathilda. Một ngày nọ, cô bé ra ngoài mua sắm, khi quay trở về nhà thì phát hiện ra cả nhà cô đã bị bắn chết. Ngay khi phát hiện ra sự việc, Mathilda vội sang nhà Léon, người không chỉ cho cô bước vào căn nhà của mình, mà sau này, Mathilda còn trở thành một phần quan trọng trong cuộc sống của ông.'),
(17, 'Truyền Thuyết Thành Phố Vàng', 'K.G.F: Chapter 1', 'null', 'http://image.phimmoi.net/film/11013/poster.medium.jpg', 'Prashanth Neel', 2018, '156 phút', 'Full HD', 1, 11, 1, 357325, 'K.G.F: Chapter 1 (El Dorado: Truyền Thuyết Thành Phố Vàng) lấy bối cảnh vào những năm 1960, nội dung phim xoay quanh cuộc đời người đàn ông Rocky. Sinh ra trong nghèo khó và hiểu hết sự đau khổ, thiếu thốn của người nghèo, Rocky quyết định đến Bombay để tìm kiếm quyền lực và tiền bạc. Sau khi đầu quân cho một băng đảng mafia, anh được cử đi giết Garuda. Cuối cùng, Rocky quyết định quay trở về ngôi làng của mình, cùng người dân nơi đây thoát khỏi cảnh nô lệ, nghèo đói. '),
(18, 'Võ Sĩ Say Đòn', 'My punch-drunk boxer', 'null', 'http://image.phimmoi.net/film/11017/poster.medium.jpg', 'Jung Hyuk-Gi', 2020, 'N/A', 'Full HD', 1, 2, 1, 34325, '“Võ Sĩ Say Đòn” là bộ phim xoay quanh Byeong-goo, từng là võ sĩ quyền anh chuyên nghiệp đầy triển vọng nhưng phải giải nghệ vì một sai lầm trong quá khứ. Kiếm sống nhờ công việc chạy vặt tại một phòng tập quyền anh do ông chủ họ Park điều hành, Byeong-gu mong muốn quay trở lại sàn đấu, nhưng chẳng may anh lại bị chẩn đoán mắc hội chứng say đòn. Một ngày nọ, cô gái trẻ Min-ji đến phòng tập quyền anh, nhìn thấy ở Byeong-gu sự đam mê và khao khát trở lại sàn đấu nên đã không ngừng khuyến khích và ủng hộ anh. Với sự hỗ trợ của Min-ji, Byeong-gu quyết định dấn thân vào thử thách nguy hiểm nhất cuộc đời, sáng tạo ra một phong cách quyền anh mới của riêng mình, đó chính là lối chơi quyền anh kiểu Pansori. '),
(19, 'Dị nhân Legion (Phần 3)', 'Legion (Season 3)', 'null', 'http://image.phimmoi.net/film/8860/poster.medium.jpg', 'Noah Hawley', 2019, '120 phút', 'Full HD', 1, 1, 1, 34325, 'Legion tên thật là David Haller, con trai của giáo sư X - Charles Xavier. David bị đa nhân cách nặng và cứ mỗi nhân cách lại có một sức mạnh khác nhau.\r\n\r\nBom tấn truyền hình của Marvel này có sự tham gia của tài tử Dan Stevens và nằm dưới sự chỉ đạo của Noah Hawley - người đã đoạt giải Emmy với siêu phẩm Fargo.'),
(20, 'Những kẻ sống sót', 'Survivors ', 'null', 'http://image.phimmoi.net/film/6872/poster.medium.jpg', 'Peter Knights', 2018, '21 phút', 'HD 720p', 8, 4, 1, 56326, 'Phim ngắn “Những kẻ sống sót” với thời lượng 21 phút được ghi hình và biên tập lại từ chuyến đi của Phan Anh tại Kenya kéo dài từ ngày 3 – 7/10/2016. Xuyên suốt bộ phim là quá trình Phan Anh ghé thăm hai khu bảo tồn Ol Pejeta và OL Jogi tại Kenya, gặp những nhà bảo tồn, kiểm lâm cũng như tận mắt được nhìn thấy những con tê giác đen, tê giác trắng và ba con tê giác miền Bắc Phi cuối cùng trên Trái Đất nhằm tìm hiểu sâu hơn về cuộc khủng hoảng săn trộm tê giác.\r\n\r\nNgoài ra, thông qua bộ phim này, anh cũng khiến nhiều khán giả bất ngờ trước hành động cạo đầu của mình trong chuyến đi nhằm thể hiện những cam kết mạnh mẽ của bản thân trong việc đẩy lùi vấn nạn săn trộm tê giác lấy sừng, đồng thời kêu gọi người dân Việt Nam dừng việc mua bán, sử dụng sừng tê giác nhằm cứu lấy loài vật này khỏi bờ vực tuyệt chủng. '),
(21, 'Bước Chân An Lạc', 'Walk with Me', 'nul', 'http://image.phimmoi.net/film/6621/poster.medium.jpg', 'Max Pugh, Marc J. Francis', 2018, '94 phút', 'Full HD', 8, 4, 1, 5346, 'Bước Chân An Lạc là bộ phim tài liệu về Thiền sư Thích Nhất Hạnh và tăng thân Làng Mai. Trong ba năm thực hiện bộ phim, Max Pugh và Marc J. Francis đã ghi lại được những hình ảnh rất chân thực, gần gũi của các vị xuất sĩ Làng Mai trong đời sống tu tập hàng ngày cũng như trong những chuyến hoằng pháp bên ngoài tu viện.\r\n\r\nVới những thước phim đẹp, tĩnh lặng, sử dụng âm thanh tự nhiên, cùng lời dẫn chuyện trích từ tác phẩm “Nẻo về của ý” của Thiền sư Thích Nhất Hạnh qua giọng đọc của diễn viên nổi tiếng Benedict Cumberbatch, bộ phim tài liệu Bước Chân An Lạc đem đến cho người xem một trải nghiệm rất đặc biệt, đầy thiền vị. Khán giả sẽ có cơ hội bước vào xứ sở của phút giây hiện tại và hiểu thêm về nếp sống của người xuất gia, đặc biệt là những người xuất gia trẻ đến từ nhiều quốc gia khác nhau trong tăng thân Làng Mai.'),
(23, 'Sự biến mất của những gã khổng lồ', 'Vanishing Giants', 'null', 'http://image.phimmoi.net/film/6871/poster.medium.jpg', 'Peter Knights', 2018, '25 phút', 'Full HD', 8, 4, 1, 32522, 'Phim ngắn “Sự biến mất của những gã khổng lồ” với thời lượng 25 phút được ghi hình và biên tập lại từ chuyến đi của Phạm Hương – Lệ Hằng tại Kenya kéo dài từ ngày 22/05/2017 đến ngày 27/05/2017. Xuyên suốt bộ phim là hành trình Phạm Hương và Lệ Hằng được chiêm ngưỡng vẻ đẹp tuyệt diệu của thiên nhiên hoang dã Kenya, thăm vườn quốc gia Amboseli, khu bảo tồn Samburu, trại voi mồ côi The David Sheldrick’s Elephant, gặp gỡ các kiểm lâm, nhà bảo tồn và giao lưu văn hóa tại làng Samburu cùng người dân bản địa.\r\n\r\nBộ phim được công chiếu vào ngày 09/01/2018 tại Lotte Cinema Cantavil, tầng 7, tòa nhà Cantavil Premier, Xa Lộ Hà Nội, Phường An Phú, Quận 2, TPHCM, sau đó được phát rộng rãi trên các đài truyền hình, trên mạng xã hội và Youtube của CHANGE. '),
(24, 'Thằng bờm', 'Thang bom', 'null', 'http://image.phimmoi.net/film/2429/poster.medium.jpg', '', 1987, '124 phút', 'Full HD', 1, 4, 8, 63463, 'Từ bài vè và các câu chuyện cười dân gian nổi tiếng, những nhà làm phim đã dựng lên chân dung thằng Bờm sống động trên màn ảnh. Thằng Bờm vừa tức cười vừa đáng thương và cũng rất đáng yêu nữa. Tức cười vì ngây ngô, đáng thương vì dốt và đáng yêu vì hồn nhiên và luôn nghĩ tới điều tốt. Thằng Bờm là một phim hài nhưng khiến chúng ta ngay sau những tràng cười sảng khoái là những suy ngẫm sâu xa về những trò cười không hề vô hại vẫn diễn ra đâu đó quanh ta, từ thời Thằng Bờm cho tới nay, và sẽ còn tiếp diễn nữa. '),
(25, 'Dưới Bầu Trời Xa Cách', 'Under the same sky ', 'null', 'http://image.phimmoi.net/film/4823/poster.medium.jpg', 'Đào Duy Phúc, Vũ Trường Khoa', 2017, '120 phút', 'Full HD', 1, 4, 2, 439754, 'Dưới bầu trời xa cách kể về câu chuyện tình yêu giữa Hải - một du học sinh Việt Nam tại Okinawa và Eri - một phóng viên bản xứ. Ấn tượng gặp gỡ ban đầu không mấy tốt đẹp đã khiến Hải cương quyết cự tuyệt khi Eri tiếp cận và muốn phỏng vấn anh. Nhưng vốn là cô gái háo thắng, Eri quyết tâm phỏng vấn Hải bằng được, thậm chí bỏ tiền ra để mua thời gian của anh. Tuy nhiên sau này, chính những lần gặp gỡ, trao đổi, chia sẻ về Việt Nam đã khiến Hải và Eri thay đổi cái nhìn về nhau, tình yêu giữa họ cũng nảy nở từ đây. '),
(27, 'Cô Dâu Tuổi Teen', 'Teen Bride / That Is Not a Child But a Minor', 'null', 'http://image.phimmoi.net/film/7211/poster.medium.jpg', 'Tsutomu Hanabusa', 2017, '105 phút', 'Full HD', 1, 4, 2, 35325, 'Oriyama Karin 16 tuổi, một nữ sinh trung học giàu có và hư hỏng. Công chúa bị cha mẹ thúc đẩy phải kết hôn với cậu nam sinh 18 tuổi đội trưởng đội bóng đá trung học đẹp trai nổi tiếng và là idol của các cô gái - Tsuruki Nao vì lời hứa với bố mẹ cô. Karin ban đầu cảm thấy căm ghét nhưng sau đó cô ấy hiến dâng bản thân cho đam mê của tuổi trẻ và chấp nhận, vì nghĩ rằng đối với họ sẽ thoải mái bởi vì họ giàu có nhưng, bất ngờ, tổ ấm mà bố mẹ họ đã chuẩn bị là bãi rác từ những thứ họ bỏ đi để của hồi môn cho họ. Và như thể nó vẫn chưa đủ là cuộc sống như tiểu thuyết, đám cưới phải được giữ bí mật . Đồng thời Izusu Ebina bạn thời thơ ấu của Karin cũng yêu cô ấy.'),
(28, 'Vòng Luân Hồi', 'Sadako', 'null', 'http://image.phimmoi.net/film/8920/poster.medium.jpg', 'Hideo Nakata', 2019, '99 phút', 'HD 720p', 3, 4, 2, 53654, 'Mayu là một cố vấn tâm lý tại bệnh viện điều trị cho cô bé được cho là hiện thân của Sadako. Hàng loạt những người tiếp xúc với cô bé đều mất tích một cách bí ẩn trong đó có em trai của Mayu, chàng trai đã vô tình giải thoát cho Sadako khỏi nơi phong ấn. Sau hàng loạt manh mối tìm được, Mayu đã tim đến hang động bên dưới giếng nước cội nguồn của oán nghiệp của Sadako. Liệu cô có giải cứu được em trai và giải được oán nghiệp cho Sadako? '),
(29, 'Quái Vật Venom', 'Venom', 'null', 'http://image.phimmoi.net/film/7022/poster.medium.jpg', 'Ruben Fleischer', 2018, '112 phút', 'HD 720p', 3, 4, 2, 52332, 'Quái Vật Venom là một kẻ thù nguy hiểm và nặng ký của Người nhện trong loạt series của Marvel. Chàng phóng viên Eddie Brock (do Tom Hardy thủ vai) bí mật theo dõi âm mưu xấu xa của một tổ chức và đã không may mắn khi nhiễm phải loại cộng sinh trùng ngoài hành tinh (Symbiote) và từ đó đã không còn làm chủ bản thân về thể chất lẫn tinh thần. Điều này đã dần biến anh thành quái vật đen tối và nguy hiểm nhất chống lại người Nhện - Venom.');

-- --------------------------------------------------------

--
-- Table structure for table `quocgia`
--

CREATE TABLE `quocgia` (
  `id` int(50) NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quocgia`
--

INSERT INTO `quocgia` (`id`, `country`) VALUES
(0, 'Anh'),
(1, 'Mỹ'),
(2, 'Hàn Quốc'),
(3, 'Trung Quốc'),
(4, 'Việt Nam'),
(5, 'Anh'),
(11, 'Ấn Độ');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(50) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com'),
(2, 'admin1', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com'),
(3, 'ad1', '827ccb0eea8a706c4c34a16891f84e7b', 'tdt.hunq@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(50) NOT NULL,
  `nameCategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `nameCategory`) VALUES
(1, 'Hành động'),
(2, 'Tình cảm'),
(3, 'Viễn tưởng'),
(6, 'Phim hài'),
(7, 'Phim hình sự'),
(8, 'Phim tài liệu');

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `id` int(11) NOT NULL,
  `name_vi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `director` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`id`, `name_vi`, `name_en`, `link`, `image`, `year`, `director`, `country`, `date`, `description`, `views`) VALUES
(1, 'Vào đêm đen', 'Into the Night', 'vao-dem-den', 'http://image.phimmoi.net/film/10842/poster.medium.jpg', 2020, 'Jason George', 1, '1/5/2020', 'Bị cướp trên một chuyến bay đêm, các hành khách và phi hành đoàn chật vật chạy đua với mặt trời khi một sự kiện vũ trụ bí ẩn tàn phá thế giới bên dưới.', 12),
(2, 'Hữu Phỉ', 'Legend Of Fei', 'huu-phi', 'http://image.phimmoi.net/film/9765/poster.medium.jpg', 2020, '', 3, '20/11/2020', 'Hữu Phỉ lấy bối cảnh Hậu Chiêu năm Kiến Nguyên thứ mười bảy, non sông chia Nam-Bắc cai trị, chiến tranh liên miên, các tuyệt đại cao thủ trong truyền thuyết lần lượt ngã xuống, chỉ còn lại bốn mươi tám trại náu mình giữa Thập Vạn Đại Sơn, nhân tài suy thoái, bụi vàng phủ hết anh hùng. Phim kể về cô con gái Chu Phỉ của đại đương gia bốn mươi tám trại rời nhà ra đi, từ đó trải bao gian nguy hiểm trở, cuối cùng trở thành danh đao một thời.', 1500),
(3, 'Minions: Sự Trỗi Dậy Của Gru', 'Minions: The Rise Of Gru', 'minions-su-troi-day-cua-gru', 'http://image.phimmoi.net/film/10352/poster.medium.jpg', 2020, 'Kyle Balda, Brad Ableson, Jonathan Del Val', 5, '3/7/2020', 'Đến ác nhân cũng có những nỗi đau khôn nguôi...', 235),
(4, 'SpongeBob: Bọt Biển Đào Tẩu', 'The SpongeBob Movie: Sponge on the Run', 'spongebob-bot-bien-dao-tau', 'http://image.phimmoi.net/film/9881/poster.medium.jpg', 2020, 'Tim Hill', 1, '21/5/2020', 'SpongeBob SquarePants, chú bọt biển hài hước cùng người bạn thân nhất của anh - Patrick Star và phần còn lại của băng đảng từ thị trấn Bikini Bottom đã xuất hiện trên màn ảnh rộng trong bộ phim hoạt hình bằng CGI đầu tiên. Sau khi chú ốc sên yêu quý của SpongeBob, Gary bị bắt sên, cậu và Patrick bắt đầu một cuộc phiêu lưu hoành tráng đến The Lost City của Atlantic để đưa Gary về nhà. Hai người bạn đã cùng nhau dấn thân vào 1 hành trình nguy hiểm và đầy những tình huống oái ăm, SpongeBob và những người bạn của mình đã chứng minh rằng: Không có gì mạnh hơn sức mạnh của tình bạn. Phim dự kiến khởi chiếu tại các rạp CGV trên toàn quốc từ 12.06.2020.', 79);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hangdienthoai`
--
ALTER TABLE `hangdienthoai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaiphim`
--
ALTER TABLE `loaiphim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hangdienthoai`
--
ALTER TABLE `hangdienthoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loaiphim`
--
ALTER TABLE `loaiphim`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
