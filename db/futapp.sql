-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2016 a las 23:11:25
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `id_partido` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `id_visitante` int(11) NOT NULL,
  `fecha` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id_partido`, `id_local`, `id_visitante`, `fecha`) VALUES
(40, 16, 17, '2016-11-04 08:00:00.000000'),
(41, 19, 15, '2016-11-04 06:10:00.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `equipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_4` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_5` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `squad` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`id`, `equipo`, `jugador_1`, `jugador_2`, `jugador_3`, `jugador_4`, `jugador_5`, `squad`) VALUES
(15, 'Roma', 'Juan', 'Carlitos', 'Pepe', 'Juan', 'Pepe', 'imagen/58126bd814093'),
(16, 'Arsenal', 'Cech', 'Alexis', 'Sanchez', 'Metzul', 'Ozil', 'imagen/58126c1b5c649'),
(17, 'Tristeza nao tem fin', 'Neymar', 'Hulk', 'Pele', 'Julio Cesar', 'Ronaldo', 'imagen/58126c5172c6b'),
(19, 'Ciclomotor', 'Torrico', 'Angeleri', 'Caruso', 'Ortigoza', 'Blandi', 'imagen/58126ce0cf88f');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
