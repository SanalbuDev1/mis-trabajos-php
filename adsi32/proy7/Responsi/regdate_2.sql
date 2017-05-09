-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2017 a las 05:31:58
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reddate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regdate_2`
--

CREATE TABLE `regdate_2` (
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `target` varchar(100) NOT NULL,
  `security` varchar(100) NOT NULL,
  `code` int(11) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regdate_2`
--

INSERT INTO `regdate_2` (`name`, `last_name`, `date1`, `target`, `security`, `code`, `raza`, `id`) VALUES
('Santiago333', 'alvarez', '2017-02-01', '11222221', '33', 0, 'Samoyedo', 2),
('paola', 'alvarez', '2017-01-31', '222', '2222', 1, 'Vernes de la montaÃ±a', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `regdate_2`
--
ALTER TABLE `regdate_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `regdate_2`
--
ALTER TABLE `regdate_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
