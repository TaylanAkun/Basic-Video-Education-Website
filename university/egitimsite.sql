-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Mar 2021, 18:36:10
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `egitimsite`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` enum('0') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`) VALUES
(1, 'admin@admin.com', '123', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `ders_id` int(11) NOT NULL,
  `ders_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ders_kim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`ders_id`, `ders_adi`, `ders_kim`) VALUES
(1, 'Mathematic', 0),
(2, 'Turkish', 0),
(3, 'Geometry', 0),
(4, 'Differentiation', 1),
(5, 'Meaning in the sentence', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersvideolari`
--

CREATE TABLE `dersvideolari` (
  `videoid` int(11) NOT NULL,
  `VideoAnaKategoriid` int(11) NOT NULL,
  `VideoAltKategoriid` int(11) NOT NULL,
  `VideoBaslik` text COLLATE utf8_turkish_ci NOT NULL,
  `VideoYuklenenYol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dersvideolari`
--

INSERT INTO `dersvideolari` (`videoid`, `VideoAnaKategoriid`, `VideoAltKategoriid`, `VideoBaslik`, `VideoYuklenenYol`) VALUES
(1, 1, 4, 'Array', ''),
(2, 1, 4, 'Array', ''),
(3, 1, 4, 'Array', ''),
(4, 1, 4, 'Türev', ''),
(5, 1, 4, 'Türev', ''),
(6, 1, 4, 'Türev', ''),
(7, 1, 4, 'Türev', ''),
(8, 1, 4, 'Türev', ''),
(9, 1, 4, 'Türev', ''),
(10, 1, 4, 'Türev', 'Türev ve Marjinal Maliyet (Kalkülüs - Türev Uygulamaları).mp4'),
(11, 2, 5, 'Meaning in The Sentence', 'meaninginthesentence.mp4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_idnum` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_telefon` varchar(13) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ulke` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_ad`, `kullanici_soyad`, `kullanici_idnum`, `kullanici_telefon`, `kullanici_ulke`, `kullanici_email`, `kullanici_sifre`) VALUES
(7, 'Taylan', 'Akün', 'S400372', '05075452200', 'Turkey', 'taylan@gmail.com', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `dersler`
--
ALTER TABLE `dersler`
  ADD PRIMARY KEY (`ders_id`);

--
-- Tablo için indeksler `dersvideolari`
--
ALTER TABLE `dersvideolari`
  ADD PRIMARY KEY (`videoid`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `dersler`
--
ALTER TABLE `dersler`
  MODIFY `ders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `dersvideolari`
--
ALTER TABLE `dersvideolari`
  MODIFY `videoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
