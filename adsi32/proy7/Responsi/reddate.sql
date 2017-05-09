-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2017 a las 05:32:06
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
-- Estructura de tabla para la tabla `regdate_1`
--

CREATE TABLE `regdate_1` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cc` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `text1` varchar(255) NOT NULL,
  `select1` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `security` varchar(100) NOT NULL,
  `rango` varchar(100) NOT NULL,
  `id1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regdate_1`
--

INSERT INTO `regdate_1` (`name`, `address`, `password`, `cc`, `date1`, `text1`, `select1`, `target`, `security`, `rango`, `id1`) VALUES
('Santiago', 'alvarez-ty@hotmail.com', 'llolo1212', '312 808 2312', '2017-02-17', 'santiago', 'Bancolombia', '123', '123', 'Empleado', 2),
('santiago', '', '', '', '0000-00-00', '', '', '', '', '', 4),
('<z', 'alvarez-ty@hotmail.com', 'llolo1212', '23', '0323-02-13', '2323', 'Bancolombia', '323', '23233', 'Admin', 6),
('Santiago', 'alvarez-ty@hotmail.com', 'llolo1212', '1212', '2017-02-21', 'asas', 'Bancolombia', '32323', '2323', 'Admin', 7),
('Paola yaneth Rios', 'alvarez-ty@hotmail.com', 'llolo1212', '10538634332', '2017-02-15', 'ss', 'Bancolombia', '221122', '221', 'Admin', 9);

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
-- Indices de la tabla `regdate_1`
--
ALTER TABLE `regdate_1`
  ADD PRIMARY KEY (`id1`);

--
-- Indices de la tabla `regdate_2`
--
ALTER TABLE `regdate_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `regdate_1`
--
ALTER TABLE `regdate_1`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `regdate_2`
--
ALTER TABLE `regdate_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
