-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 05:27:40
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
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_partido` int(11) NOT NULL,
  `comentario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `fk_user`, `fk_partido`, `comentario`, `puntaje`) VALUES
(1, 1, 7, 'Hola', 4),
(2, 1, 7, 'Comentario', 4),
(3, 1, 7, 'La papa', 2),
(4, 1, 7, 'actualiza', 5),
(14, 1, 7, 'Holaaaaaaa sueñooo', 5),
(15, 4, 9, 'Que hacelga?', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `fk_partido` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `fk_partido`, `picture`) VALUES
(1, 7, 'imagen/5834b897baece_5834b7d156e6a_39302hd.jpg'),
(2, 7, 'imagen/5834fbb3bb490_CAMPO-FUTBOL-MALILLA_04-copia.jpg');

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
(7, 16, 17, '2016-11-04 08:00:00.000000'),
(9, 19, 15, '2016-11-23 05:17:00.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rango`
--

CREATE TABLE `rango` (
  `nivel` int(11) NOT NULL,
  `autoridad` varchar(55) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rango`
--

INSERT INTO `rango` (`nivel`, `autoridad`) VALUES
(1, 'invitado'),
(2, 'administrador'),
(3, 'visitante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `equipo` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_1` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_2` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_3` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_4` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `jugador_5` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `squad` varchar(55) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`id`, `equipo`, `jugador_1`, `jugador_2`, `jugador_3`, `jugador_4`, `jugador_5`, `squad`) VALUES
(15, 'Roma', 'Juan', 'Carlitos', 'Pepe', 'Juan', 'Pepe', 'imagen/58126bd814093'),
(16, 'Arsenal', 'Cech', 'Alexis', 'Sanchez', 'Metzul', 'Ozil', 'imagen/58126c1b5c649'),
(17, 'Tristeza nao tem fin', 'Neymar', 'Hulk', 'Pele', 'Julio Cesar', 'Ronaldo', 'imagen/58126c5172c6b'),
(19, 'Ciclomotor', 'Torrico', 'Angeleri', 'Caruso', 'Ortigoza', 'Blandi', 'imagen/58126ce0cf88f'),
(20, 'as', 'asdas', 'dasdas', 'dsadasd', 'dasdasd', 'dasdasd', 'imagen/5834ada9ca05a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nick` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nick`, `pass`, `email`, `nivel`) VALUES
(1, 'nico', '$2y$10$/nRrn8cirTu3NulES33AyuCgE3lcuQCnGzMfalDWNaXYodC9bJQT2', 'nico@futapp.com', 2),
(3, 'David', '$2y$10$zWiFmJy6/bE4SHMAXPHEJeVMlkkXcPJFyyL5qTCRtQavf6avbO6l6', 'david@futapp.com', 3),
(4, 'Antonela', '$2y$10$KLli1d4oNkfmPqmZkR5eAucypwbsBExoivHSnCJxzMr2Bjr4B/Lk6', 'anto@futapp.com', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`);

--
-- Indices de la tabla `rango`
--
ALTER TABLE `rango`
  ADD PRIMARY KEY (`nivel`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
