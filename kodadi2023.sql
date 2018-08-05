-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 05 Ağu 2018, 07:48:53
-- Sunucu sürümü: 5.6.35
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kodadi2023`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yapilacaklar_listesi`
--

CREATE TABLE `yapilacaklar_listesi` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aciklama` text COLLATE utf8_unicode_ci,
  `tarih` datetime DEFAULT NULL,
  `yapildi` tinyint(4) NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `guncelleme_tarihi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `yapilacaklar_listesi`
--

INSERT INTO `yapilacaklar_listesi` (`id`, `baslik`, `aciklama`, `tarih`, `yapildi`, `olusturma_tarihi`, `guncelleme_tarihi`) VALUES
(1, 'TODO 1', 'TODO Açıklaması', NULL, 0, '2018-08-04 12:04:39', NULL),
(5, 'TODO 2', 'TODO açıklam 2', '2018-08-11 12:12:00', 1, '2018-08-04 19:40:10', NULL),
(7, 'Yarın ders var', 'Yarın liderlere ders verilecek', '2018-08-05 08:30:00', 0, '2018-08-04 19:40:03', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yapilacaklar_listesi`
--
ALTER TABLE `yapilacaklar_listesi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yapilacaklar_listesi`
--
ALTER TABLE `yapilacaklar_listesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
