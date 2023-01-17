-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 17 Oca 2023, 11:19:40
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fotografcilik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parola` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `isim`, `parola`, `mail`) VALUES
(1, 'ceydanur', '123456789', 'ceydanur@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soyad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`username`, `ad`, `soyad`, `mail`, `sifre`) VALUES
('cyd', 'ceyda', 'eragca', 'ceydanur@gmail.com', '1'),
('betül', 'Betül', 'Özışık', 'betulozışık@gmail.com', '12'),
('serdar', 'Serdar', 'Ortaç', 'ortaçserdar@gmail.com', '123'),
('Cehun', 'Cehun', 'Taş', 'cehunntas@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

DROP TABLE IF EXISTS `mesaj`;
CREATE TABLE IF NOT EXISTS `mesaj` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
