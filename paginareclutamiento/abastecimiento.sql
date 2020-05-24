-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2020 a las 07:58:12
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abastecimiento`
--

CREATE TABLE `abastecimiento` (
  `id_soldado` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `fecha_reclutamiento` date NOT NULL,
  `fotos` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `antecedentes` tinytext COLLATE utf8_spanish2_ci NOT NULL,
  `cod_provincia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `abastecimiento`
--

INSERT INTO `abastecimiento` (`id_soldado`, `nombre`, `edad`, `email`, `fecha_nacimiento`, `telefono`, `fecha_reclutamiento`, `fotos`, `antecedentes`, `cod_provincia`) VALUES
(146, 'Jose Maria', 20, 'josemariacarrero16@gmail.com', '2322-03-12', 123456789, '2322-03-12', 'foto1.jpg', 'no', 2),
(147, 'Jose Maria', 20, 'josemariacarrero16@gmail.com', '2322-03-12', 123456789, '2322-03-12', 'foto1.jpg', 'no', 2),
(148, 'Jose Maria', 20, 'josemariacarrero16@gmail.com', '2322-03-12', 123456789, '2322-03-12', 'foto1.jpg', 'no', 2),
(180, 'Jose Maria', 19, 'josemariacarrero16@gmail.com', '2322-03-12', 123456789, '2322-03-12', 'foto1.jpg', 'no', 2),
(181, 'Jose Maria', 19, 'josemariacarrero16@gmail.com', '2322-03-12', 123456789, '2322-03-12', 'foto1.jpg', 'no', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abastecimiento`
--
ALTER TABLE `abastecimiento`
  ADD PRIMARY KEY (`id_soldado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abastecimiento`
--
ALTER TABLE `abastecimiento`
  MODIFY `id_soldado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
