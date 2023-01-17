-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2023, 20:58:07
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ks_sport`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_tablo`
--

CREATE TABLE `admin_tablo` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `kullanici_sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `admin_tablo`
--

INSERT INTO `admin_tablo` (`id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `degerlendirme_tablo`
--

CREATE TABLE `degerlendirme_tablo` (
  `id` int(11) NOT NULL,
  `kullanici_mesaj` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `degerlendirme_tablo`
--

INSERT INTO `degerlendirme_tablo` (`id`, `kullanici_mesaj`) VALUES
(17, 'selam ben fazıl'),
(18, 'hallooo'),
(64, 'selaaammm'),
(65, 'çko ii');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimler_tablosu`
--

CREATE TABLE `egitimler_tablosu` (
  `id` int(11) NOT NULL,
  `s_egitim` varchar(100) NOT NULL,
  `b_egitim` varchar(100) NOT NULL,
  `k_egitim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `egitimler_tablosu`
--

INSERT INTO `egitimler_tablosu` (`id`, `s_egitim`, `b_egitim`, `k_egitim`) VALUES
(1, 'Aylık 4.000TL', 'Aylık 2.000TL', 'Aylık 3.000TL'),
(2, '2 Aylık 7.000TL', '2 Aylık 3.000TL', '2 Aylık 5.000TL'),
(3, '3 Aylık 10.000TL', '3 Aylık 5.000TL', '3 Aylık 7.000TL');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar_tablo`
--

CREATE TABLE `kullanicilar_tablo` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `kullanici_sifre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanicilar_tablo`
--

INSERT INTO `kullanicilar_tablo` (`id`, `kullanici_adi`, `e_mail`, `kullanici_sifre`) VALUES
(35, 'fazil', 'fazil06erdogan@gmail.com', 'fazil'),
(40, 'fazlıı', 'faz@gmail.com', 'fazlıı'),
(42, 'erdogannn', 'erdogan@gmail.com', 'erdogan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_mesajlari_tablo`
--

CREATE TABLE `kullanici_mesajlari_tablo` (
  `id` int(11) NOT NULL,
  `kullanici_adisoyadi` varchar(50) NOT NULL,
  `kullanici_mesaj` varchar(500) NOT NULL,
  `e_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanici_mesajlari_tablo`
--

INSERT INTO `kullanici_mesajlari_tablo` (`id`, `kullanici_adisoyadi`, `kullanici_mesaj`, `e_mail`) VALUES
(35, 'fazıl', 'selam', 'fazıl@gmail.com'),
(37, 'halo', 'halo', 'halo@gmail.com'),
(39, 'faruk', 'harika yaw', 'faerukfa@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyelertablo`
--

CREATE TABLE `uyelertablo` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `sifre` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `uyelertablo`
--

INSERT INTO `uyelertablo` (`id`, `kullanici_adi`, `sifre`) VALUES
(1, 'Admin', 's');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_tablo`
--
ALTER TABLE `admin_tablo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `degerlendirme_tablo`
--
ALTER TABLE `degerlendirme_tablo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitimler_tablosu`
--
ALTER TABLE `egitimler_tablosu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar_tablo`
--
ALTER TABLE `kullanicilar_tablo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`);

--
-- Tablo için indeksler `kullanici_mesajlari_tablo`
--
ALTER TABLE `kullanici_mesajlari_tablo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyelertablo`
--
ALTER TABLE `uyelertablo`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_tablo`
--
ALTER TABLE `admin_tablo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `degerlendirme_tablo`
--
ALTER TABLE `degerlendirme_tablo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Tablo için AUTO_INCREMENT değeri `egitimler_tablosu`
--
ALTER TABLE `egitimler_tablosu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar_tablo`
--
ALTER TABLE `kullanicilar_tablo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici_mesajlari_tablo`
--
ALTER TABLE `kullanici_mesajlari_tablo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `uyelertablo`
--
ALTER TABLE `uyelertablo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
