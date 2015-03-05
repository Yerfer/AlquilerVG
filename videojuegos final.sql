-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2015 a las 01:53:42
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `videojuegos`
--
CREATE DATABASE IF NOT EXISTS `videojuegos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `videojuegos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `nombre`, `telefono`) VALUES
(313, 'Yerfer Porras', 322),
(989, 'hvhyj', 76),
(1111, 'Juan Perez', 5551),
(12345, 'Andres AcuÃ±a', 642);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE IF NOT EXISTS `prestamo` (
`id_prestamo` bigint(20) unsigned NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_videojuego` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `id_cliente`, `id_videojuego`) VALUES
(13, 313, 2),
(14, 313, 5),
(15, 313, 6),
(16, 313, 8),
(22, 989, 1),
(23, 989, 2),
(11, 1111, 9),
(12, 1111, 2),
(17, 12345, 4),
(18, 12345, 5),
(19, 12345, 7),
(20, 12345, 9),
(21, 12345, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videogame`
--

DROP TABLE IF EXISTS `videogame`;
CREATE TABLE IF NOT EXISTS `videogame` (
  `id_vj` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio_dia` float NOT NULL,
  `consola` text NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videogame`
--

INSERT INTO `videogame` (`id_vj`, `nombre`, `descripcion`, `precio_dia`, `consola`, `stock`, `imagen`) VALUES
(1, 'Batman', 'Videojuego de accion', 6000, 'PS4', 12, 'Covers\\\\batman_ps4.jpg'),
(2, 'Crysis', 'videojuego de ciencia ficcion', 6000, 'PC', 8, 'Covers\\\\crysis_pc.jpg'),
(3, 'Assassins Creed 2', 'videojuego de ciencia ficcion', 6000, 'X-BOX_360', 13, 'Covers\\\\assassinscreed2_360.jpg'),
(4, 'Call of Duty: Black Ops 2', 'Video juego de guerra', 6000, 'X-Box_360', 11, 'Covers\\\\callofdutybo2_360.jpg'),
(5, 'DBZ: Kinnect', 'Video juego de pelea', 6000, 'X-Box_360', 9, 'Covers\\\\dbzkinnect_360.jpg'),
(6, 'Fallout 3', 'Video juego de ciencia ficcion', 6000, 'PC', 12, 'Covers\\\\fallout3_pc.jpg'),
(7, 'FIFA 15', 'Video juego de futbol soccer', 6000, 'PS4', 11, 'Covers\\\\fifa15_ps4.jpg'),
(8, 'Final Fantasy XIII', 'Video Juego de Fantasia y aventura', 6000, 'X-Box_360', 11, 'Covers\\\\finalfantasy13_360.jpg'),
(9, 'GTA: 4', 'Video Juego de misiones y mafias', 6000, 'PC', 11, 'Covers\\\\gta4_pc.jpg'),
(10, 'Halo 4', 'Video Juego shooter', 6000, 'X-Box_360', 11, 'Covers\\\\halo4_360.jpg'),
(11, 'Mario Galaxy II', 'Video Juego de aventura', 6000, 'WII', 10, 'Covers\\\\mariogalaxy2_wii.jpg'),
(12, 'Mario Kart', 'Video Juego de misiones y carreras', 6000, 'WII', 12, 'Covers\\\\mariokart_wii.jpg'),
(13, 'NFS: Rivals', 'Video Juego carreras', 6000, 'PS4', 12, 'Covers\\\\needforspeedrivals_ps4.jpg'),
(14, 'Call of Duty: Ghosts', 'Video Juego de guerra', 6000, 'PS4', 13, 'Covers\\\\callofdutyghost_ps4.png'),
(15, 'El Chavo', 'Video Juego de misiones y aventuras', 6000, 'WII', 13, 'Covers\\\\elchavo_wii.png'),
(16, 'God of War 2', 'Video Juego misiones y combates', 6000, 'PC', 13, 'Covers\\\\godofwar2_pc.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
 ADD PRIMARY KEY (`id_prestamo`,`id_cliente`,`id_videojuego`), ADD UNIQUE KEY `id_prestamo` (`id_prestamo`), ADD KEY `id_cliente` (`id_cliente`), ADD KEY `id_videojuego` (`id_videojuego`);

--
-- Indices de la tabla `videogame`
--
ALTER TABLE `videogame`
 ADD PRIMARY KEY (`id_vj`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
MODIFY `id_prestamo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`cedula`) ON UPDATE CASCADE,
ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_videojuego`) REFERENCES `videogame` (`id_vj`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
