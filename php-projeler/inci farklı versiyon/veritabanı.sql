-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Anamakine: sql210.ezyro.com
-- Üretim Zamanı: 20 Oca 2019, 23:32:23
-- Sunucu sürümü: 5.6.41-84.1
-- PHP Sürümü: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `ezyro_21763626_1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `baslik`
--

CREATE TABLE IF NOT EXISTS `baslik` (
  `baslik` varchar(50) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `baslik`
--

INSERT INTO `baslik` (`baslik`) VALUES
('Merhaba'),
('naber');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `entariler`
--

CREATE TABLE IF NOT EXISTS `entariler` (
  `entari_id` int(11) NOT NULL AUTO_INCREMENT,
  `entari_mesaj` varchar(1000) COLLATE utf32_turkish_ci NOT NULL,
  PRIMARY KEY (`entari_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `entariler`
--

INSERT INTO `entariler` (`entari_id`, `entari_mesaj`) VALUES
(1, '<a href="https://www.google.com">Google</a><br>\r\n'),
(2, '<a href="https://www.youtube.com">YouTube</a><br>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(30) NOT NULL,
  `parola` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `parola`) VALUES
(1, 'Vice', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
