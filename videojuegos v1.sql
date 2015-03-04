-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2015 a las 10:32:25
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videogame`
--

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
(1, 'Batman', 'Videojuego de accion', 6000, 'PS4', 20, 'Covers\\\\batman_ps4.jpg'),
(2, 'Crysis', 'videojuego de ciencia ficcion', 6000, 'PC', 20, 'Covers\\\\crysis_pc.jpg'),
(3, 'Assassins Creed 2', 'videojuego de ciencia ficcion', 6000, 'X-BOX_360', 20, 'Covers\\\\assassinscreed2_360.jpg'),
(4, 'Call of Duty: Black Ops 2', 'Video juego de guerra', 6000, 'X-Box_360', 20, 'Covers\\\\callofdutybo2_360.jpg'),
(5, 'DBZ: Kinnect', 'Video juego de pelea', 6000, 'X-Box_360', 20, 'Covers\\\\dbzkinnect_360.jpg'),
(6, 'Fallout 3', 'Video juego de ciencia ficcion', 6000, 'PC', 20, 'Covers\\\\fallout3_pc.jpg'),
(7, 'FIFA 15', 'Video juego de futbol soccer', 6000, 'PS4', 20, 'Covers\\\\fifa15_ps4.jpg'),
(8, 'Final Fantasy XIII', 'Video Juego de Fantasia y aventura', 6000, 'X-Box_360', 20, 'Covers\\\\finalfantasy13_360.jpg'),
(9, 'GTA: 4', 'Video Juego de misiones y mafias', 6000, 'PC', 20, 'Covers\\\\gta4_pc.jpg'),
(10, 'Halo 4', 'Video Juego shooter', 6000, 'X-Box_360', 20, 'Covers\\\\halo4_360.jpg'),
(11, 'Mario Galaxy II', 'Video Juego de aventura', 6000, 'WII', 20, 'Covers\\\\mariogalaxy2_wii.jpg'),
(12, 'Mario Kart', 'Video Juego de misiones y carreras', 6000, 'WII', 20, 'Covers\\\\mariokart_wii.jpg'),
(13, 'NFS: Rivals', 'Video Juego carreras', 6000, 'PS4', 20, 'Covers\\\\needforspeedrivals_ps4.jpg'),
(14, 'Call of Duty: Ghosts', 'Video Juego de guerra', 6000, 'PS4', 20, 'Covers\\\\callofdutyghost_ps4.png'),
(15, 'El Chavo', 'Video Juego de misiones y aventuras', 6000, 'WII', 20, 'Covers\\\\elchavo_wii.png'),
(16, 'God of War 2', 'Video Juego misiones y combates', 6000, 'PC', 20, 'Covers\\\\godofwar2_pc.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `videogame`
--
ALTER TABLE `videogame`
 ADD PRIMARY KEY (`id_vj`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
