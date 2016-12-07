-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 07 Ara 2016, 04:18:21
-- Sunucu sürümü: 5.6.33-cll-lve
-- PHP Sürümü: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `bahadirb_dev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seo_hood` varchar(255) NOT NULL,
  `hood` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `article` mediumtext CHARACTER SET utf8 NOT NULL,
  `tags` varchar(1500) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Tablo döküm verisi `articles`
--

INSERT INTO `articles` (`id`, `seo_hood`, `hood`, `article`, `tags`, `date`) VALUES
(163, 'merhaba-blog', 'Merhaba Blog !', '<p><span style="color:#696969">Merhaba arkadaÅŸlar , sanÄ±rÄ±m size kendimi tanÄ±tmak olacak bloÄŸumdaki ilk yazÄ±m ,Trabzon&#39;un Ak&ccedil;aabat il&ccedil;esinde 96 yÄ±lÄ±nda doÄŸdum.Ä°lkokulumuda orada tamamladÄ±m.Liseyi Ak&ccedil;aabat &Ccedil;ok ProgramlÄ± Meslek Lisesinde okudum.Burada BiliÅŸim Teknolojileri b&ouml;l&uuml;m&uuml;nde mezun olup &Uuml;niversite tercihim sonucu Ordu &Uuml;niversitesinin Bilgisayar ProgramcÄ±lÄ±ÄŸÄ± B&ouml;l&uuml;m&uuml;ne geldim.Åžuan 2.sÄ±nÄ±f &ouml;ÄŸrencisi olarak bu okula devam ediyorum.HayatÄ±mÄ± bu ÅŸekilde kÄ±sa bir &ouml;zetlemiÅŸ olayÄ±m.Gel gelelim yazÄ±lÄ±m iÅŸine kuzenimin yazÄ±lÄ±mcÄ± oluÅŸu k&uuml;&ccedil;&uuml;kl&uuml;ÄŸ&uuml;mden beri dikkatimi &ccedil;ekiyordu ve yazdÄ±ÄŸÄ± kodlardan hi&ccedil; bir ÅŸey anlamama raÄŸmen hoÅŸuma gidiyordu.Bende yazÄ±lÄ±mcÄ± olmalÄ±yÄ±m deyip bu maceraya atlamÄ±ÅŸ bulundum.Halada sonu gelmeyecek olan bu derya denizinde bir ÅŸeyler &ouml;ÄŸrenmek daha da geliÅŸmek adÄ±na &ccedil;alÄ±ÅŸmalar projeler iÅŸler yapmaktayÄ±m..Ä°lk yazÄ±mÄ± uzun tutmadan Ä±sÄ±nma turlarÄ±mÄ±zÄ± yaptÄ±k diyelim.Kendinize iyi bakÄ±n ,HoÅŸ&ccedil;akalÄ±n </span></p>\r\n', 'blog,yeni,merhaba,kimim', '2016-12-04 02:02:52'),
(165, 'gelistirici-timi-olusumu-hakkinda', 'GeliÅŸtirici Timi OluÅŸumu HakkÄ±nda', '<p><img alt="" src="/admin/kcfinder/upload/images/gelistirici_timi.jpg" style="height:%20; width:%20" /></p>\r\n\r\n<p><span style="color:#696969">Bug&uuml;n sizlere yeni kurmuÅŸ olduÄŸumuz &quot;GeliÅŸtirici Timi&quot; adlÄ± oluÅŸum hakkÄ±nda biraz bilgi vereceÄŸim ! YazÄ±lÄ±m d&uuml;nyasÄ±ndaki ve yeni katÄ±lan, bu alana ilgisi olan arkadaÅŸlarmÄ±za destek ve motivasyon saÄŸlamak i&ccedil;in kurduÄŸumuz bu oluÅŸumda amacÄ±mÄ±z &Ouml;zg&uuml;r YazÄ±lÄ±m k&uuml;lt&uuml;r&uuml;ne daha fazla insanÄ± dahil etmek , bilgi alÄ±ÅŸveriÅŸi saÄŸlayarak daha kaliteli iÅŸler ortaya koymaktan yola &ccedil;Ä±ktÄ±k..Bir ka&ccedil; g&uuml;n &ouml;nce bu oluÅŸumun temellerini attÄ±k ve inÅŸallah ilerleyen zamanlarda daha geniÅŸ kitlelerede ulaÅŸma imkanÄ±mÄ±z olacak diye umuyoruz.Daha samimi ve anlÄ±k iletiÅŸim ,bilgi alÄ±ÅŸveriÅŸi, herhangi bir konuda arkadaÅŸlarÄ±mÄ±za danÄ±ÅŸmak i&ccedil;in </span><a href="http://www.facebook.com/gelistiricitim/"><span style="color:#696969">Facebook</span></a><span style="color:#696969"> ,&nbsp;</span><a href="http://instagram.com/gelistiricitim"><span style="color:#696969"> Ä°nstagram </span></a><span style="color:#696969">ve </span><a href="https://twitter.com/gelistiricitim"><span style="color:#696969">Twitter </span></a><span style="color:#696969">hesaplarÄ± oluÅŸturduk...Ayriyeten Telegram &uuml;zerinde de bir grubumuz var, bu grup sayesinde topluluÄŸumuzun bazÄ± etkinliklerde buluÅŸmalar d&uuml;zenlemeyi ,sanal d&uuml;nyadan kopup arkadaÅŸlarÄ±mÄ±zla bu etkinliklerde daha yakÄ±ndan konuÅŸup tanÄ±ÅŸma ve tartÄ±ÅŸmayÄ± d&uuml;ÅŸ&uuml;n&uuml;yoruz.Bize destek olmak ve oluÅŸumumuza katÄ±lmak ister misiniz ? </span></p>\r\n\r\n<p><span style="color:#696969">O halde ne duruyorsunuz ? AramÄ±za KatÄ±lÄ±n :)</span></p>\r\n\r\n<p><span style="color:#696969">Telegram davet baÄŸlantÄ±sÄ± i&ccedil;in </span><a href="https://telegram.me/joinchat/Dt4UD0B4zAK6ospQDWAlRQ"><span style="color:#696969">TÄ±klayÄ±nÄ±z..</span></a></p>\r\n', 'geliştirici,tim,yazılım,ilgi,oluşum,amaç,topluluk,team,development,kod,özgür,yazılım,kahve,linux,ubuntu,nedir,Telegram,medya', '2016-12-04 15:17:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `visitor` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `message` mediumtext NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `visitor`, `email`, `message`, `dates`) VALUES
(18, 'dede', 'ede', 'wedede', '2016-11-29 21:35:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_img` varchar(250) CHARACTER SET utf8 NOT NULL,
  `project_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `time_limit` varchar(200) CHARACTER SET utf8 NOT NULL,
  `goal` varchar(200) CHARACTER SET utf8 NOT NULL,
  `url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `project_img`, `project_name`, `time_limit`, `goal`, `url`, `dates`) VALUES
(25, '../upload/bahadirbilisim.png', 'BB', '3 Hafta', 'KiÅŸisel Blog', 'http://bahadirbilisim.com', '2016-12-04 15:40:32'),
(24, '../upload/teknorar.png', 'Teknorar', '2 Ay', 'Teknoloji PortalÄ±', 'http://teknorar.com', '2016-12-04 15:38:17'),
(26, '../upload/fotograf_Arsivimiz.png', 'FotoÄŸraf ArÅŸivimiz', '4 GÃ¼n', 'FotoÄŸrafÃ§Ä± BloÄŸu', 'http://', '2016-12-04 15:42:29'),
(30, '../upload/seyma_toprak.png', 'Åžeyma Toprak Photography', '1 Hafta', 'Åžeyma Toprak Ä±n Yeni Sitesi', 'http://seymatoprak.com', '2016-12-04 15:55:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `root`
--

CREATE TABLE IF NOT EXISTS `root` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 NOT NULL,
  `names` varchar(25) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(25) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `root`
--

INSERT INTO `root` (`id`, `user`, `pass`, `names`, `surname`, `date`) VALUES
(2, 'root', '5dd53a59c34c9cbd48ef3fb50b0873a1', 'mukadder', 'bahadir', '2016-11-30 16:36:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `writer`
--

CREATE TABLE IF NOT EXISTS `writer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `a_pass` varchar(255) NOT NULL,
  `author_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `author_surname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Tablo döküm verisi `writer`
--

INSERT INTO `writer` (`id`, `author_user_name`, `a_pass`, `author_name`, `author_surname`, `mail`) VALUES
(20, 'root', '5dd53a59c34c9cbd48ef3fb50b0873a1', 'root', 'radmin', 'root@gmail.com'),
(19, 'deneme 2', '683da6526e25017a879b47c2d18af205', 'Ã¼puÄ±Ã¼ÄŸp', '0pjÄŸ', 'okl@gmail.com'),
(18, 'deneme', '89756e9badc2bab9ff456b8cc62ec1d0', 'pok', 'ÄŸpok', 'ogp@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
