-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2024 a las 12:33:31
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repaso2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `contenido` text NOT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `fecha_publicacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `contenido`, `foto`, `categoria`, `fecha_publicacion`) VALUES
(1, 'Voluntarios Plantan Árboles en Tucumán', 'Un grupo de voluntarios se unió para plantar árboles en un parque comunitario, contribuyendo a la belleza y sostenibilidad de la región.', 'plantar.jpg', 'Cultura', '2024-11-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodistas`
--

CREATE TABLE `periodistas` (
  `id_periodista` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `especialidad` varchar(20) DEFAULT NULL,
  `fecha_alta` date NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodistas`
--

INSERT INTO `periodistas` (`id_periodista`, `usuario`, `clave`, `especialidad`, `fecha_alta`, `foto`) VALUES
(1, 'alopez', '2c564424f11a1ae4ca64e5eeff9913b1b0f244c3', 'Arte', '2023-05-02', 'foto.jpg'),
(2, 'lmoreno', 'c0d65e68e5c06134be4b096126982e7c44dcecf2', 'Economia', '2024-01-02', 'luis.jpg'),
(3, 'mromano', 'fe5c6ea8c2fa1c3611b8182ae5e09b428a3f9b1c', 'Ciencia', '2022-01-03', 'yo.jpg'),
(4, 'spaz', 'c0e2b3a5d60cf1b0fb787471b408c8c7f1e5de98', NULL, '2024-07-01', 'yop,jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `periodistas`
--
ALTER TABLE `periodistas`
  ADD PRIMARY KEY (`id_periodista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodistas`
--
ALTER TABLE `periodistas`
  MODIFY `id_periodista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
