-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2017 at 07:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullrap`
--

-- --------------------------------------------------------

--
-- Table structure for table `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `coordenadas` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `provincias`
--

INSERT INTO `provincias` (`id`, `Nombre`, `provincia`, `coordenadas`) VALUES
(2, 'albacete', 'Albacete', '38.994309, -1.858516'),
(3, 'alicante', 'Alicante', '38.345130, -0.489788'),
(4, 'almeria', 'Almeria', '36.833483, -2.463632'),
(5, 'vila', 'Avila', '40.656359, -4.681743'),
(6, 'badajoz', 'Badajoz', '38.879216, -6.970755'),
(7, 'mallorca', 'Mallorca', '39.566747, 2.648503'),
(8, 'barcelona', 'Barcelona', '41.386863, 2.170177'),
(9, 'burgos', 'Burgos', '42.343815, -3.697017'),
(10, 'caceres', 'Caceres', '39.475722, -6.372822'),
(11, 'cadiz', 'Cadiz', '36.526266, -6.288852'),
(13, 'ciudad-real', 'Ciudad Real', '38.986012, -3.930213'),
(14, 'cordoba', 'Cordoba', '37.878603, -4.779411'),
(16, 'cuenca', 'Cuenca', '40.069979, -2.137195'),
(17, 'girona', 'Girona', '41.979360, 2.821395'),
(18, 'granada', 'Granada', '37.175779, -3.588157'),
(19, 'guadalajara', 'Guadalajara', '40.632224, -3.160287'),
(21, 'huelva', 'Huelva', '37.261398, -6.944719'),
(22, 'huesca', 'Huesca', '42.133674, -0.405760'),
(23, 'jaen', 'Jaen', '37.779195, -3.784969'),
(24, 'leon', 'Leon', '42.598655, -5.567102'),
(25, 'lleida', 'Lleida', '41.617507, 0.620008'),
(27, 'lugo', 'Lugo', '43.009722, -7.556776'),
(28, 'madrid', 'Madrid', '40.416743, -3.703791'),
(29, 'malaga', 'Malaga', '36.721251, -4.421262'),
(30, 'murcia', 'Murcia', '37.992138, -1.130757'),
(32, 'ourense', 'Ourense', '42.334676, -7.863618'),
(34, 'palencia', 'Palencia', '42.010958, -4.536715'),
(35, 'las-palmas', 'Las Palmas', '28.122977, -15.436647'),
(36, 'pontevedra', 'Pontevedra', '42.429861, -8.647098'),
(37, 'salamanca', 'Salamanca', '40.969382, -5.663157'),
(38, 'santa-cruz-de-tenerife', 'Santa Cruz de Tenerife', '28.290443, -16.629207'),
(40, 'segovia', 'Segovia', '40.942324, -4.109068'),
(41, 'sevilla', 'Sevilla', '37.376455, -5.987024'),
(42, 'soria', 'Soria', '41.766339, -2.479161'),
(43, 'tarragona', 'Tarragona', '41.119002, 1.244690'),
(44, 'teruel', 'Teruel', '40.345247, -1.106454'),
(45, 'toledo', 'Toledo', '39.862543, -4.027465'),
(46, 'valencia', 'Valencia', '39.469868, -0.376273'),
(47, 'valladolid', 'Valladolid', '41.653114, -4.730719'),
(49, 'zamora', 'Zamora', '41.503240, -5.746760'),
(50, 'zaragoza', 'Zaragoza', '41.648510, -0.889273'),
(51, 'ceuta', 'Ceuta', '35.889522, -5.321607'),
(52, 'melilla', 'Melilla', '35.292131, -2.938337');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDX_provincia` (`provincia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
