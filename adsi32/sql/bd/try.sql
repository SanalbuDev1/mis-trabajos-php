-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2017 a las 01:02:48
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `try`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud1`
--

CREATE TABLE `crud1` (
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `date1` date NOT NULL,
  `genero` varchar(255) NOT NULL,
  `juego` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `crud1`
--

INSERT INTO `crud1` (`Nombre`, `Apellido`, `id`, `date1`, `genero`, `juego`) VALUES
('SANTIAGO211556', 'PAOLA11ss', 1, '2017-02-06', 'M', 'play4'),
('sa', 'al', 2, '2017-02-07', 'F', 'play4'),
('santiago', 'alva', 3, '0000-00-00', '', ''),
('santiago', 'alva', 4, '0000-00-00', 'M', 'play4'),
('paola', 'pedo', 5, '2017-02-21', 'F', 'play4'),
('paola', 'pedito', 6, '2017-02-13', 'F', 'play3'),
('rrrsssssss', 'sss', 7, '2017-02-13', 'M', 'play4'),
('Santiago', '123', 8, '2017-02-21', 'M', 'play4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `documento` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `correo`, `celular`, `genero`, `tipo_documento`, `documento`) VALUES
(3, 'Santiago', 'Alvarez', 'Alvarito@hotmail.com', 3215264152, 'TI', 'CC', 1023546987),
(4, 'pedo', 'rios', 'pyris@pedo.com', 5555555555, 'F', 'CC', 123456789);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crud1`
--
ALTER TABLE `crud1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crud1`
--
ALTER TABLE `crud1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
