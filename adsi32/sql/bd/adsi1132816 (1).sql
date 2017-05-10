-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2017 a las 00:58:46
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi1132816`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(24) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(128) NOT NULL DEFAULT 'public/imgs/articles/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `precio`, `imagen`) VALUES
(1, 'Bombon', 10, 'public/imgs/articles/foto2.png'),
(2, 'Dildo', 25000, 'public/imgs/articles/default.png'),
(3, 'play4', 1000000, 'public/imgs/articles/default.png'),
(4, 'secadora', 100000, 'public/imgs/articles/default.png'),
(5, 'olla rocera', 90000, 'public/imgs/articles/default.png'),
(6, 'Condones', 8000, 'public/imgs/articles/default.png'),
(7, 'Marihuana', 25000, 'public/imgs/articles/default.png'),
(8, 'Licadura', 25000, 'public/imgs/articles/default.png'),
(9, 'Coker Spain', 270000, 'public/imgs/articles/default.png'),
(10, 'Cerveza', 2500, 'public/imgs/articles/default.png'),
(11, 'PAOLA', 1231, 'public/imgs/articles/default.png'),
(12, 'ROBERTO', 123123, 'public/imgs/articles/default.png'),
(13, '123', 123, 'public/imgs/articles/default.png'),
(14, 'asd', 123123123, 'public/imgs/articles/default.png'),
(15, 'roberto', 123123, 'public/imgs/articles/silhouette48.png'),
(16, 'asdasd', 123123123, 'public/imgs/articles/default.png'),
(17, 'asdasd', 123123123, 'public/imgs/articles/default.png'),
(18, 'roc', 123, 'public/imgs/articles/profile_mask2.png'),
(19, 'roc', 123, 'public/imgs/articles/profile_mask2.png'),
(20, 'roc', 123, 'public/imgs/articles/profile_mask2.png'),
(21, 'roberto', 123, 'public/imgs/articles/default.png'),
(22, 'roberto', 123, 'public/imgs/articles/default.png'),
(23, 'roc', 123, 'public/imgs/articles/photo.jpg'),
(24, 'chocalitina', 1203123, 'public/imgs/articles/44ce1727-b782-4318-bfee-da6de1a7f820.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatars`
--

CREATE TABLE `avatars` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `gender` varchar(16) DEFAULT NULL,
  `image` varchar(64) DEFAULT 'public/img/avatar.png',
  `color` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avatars`
--

INSERT INTO `avatars` (`id`, `name`, `gender`, `image`, `color`) VALUES
(4, 'santiago', 'Femenino', 'public/imgs/avatars/1490201451.png', '#000000'),
(10, 'paola2', 'Masculino', 'public/imgs/avatars/1490196025.png', '#000000'),
(15, 'rosca', 'Masculino', 'public/imgs/avatars/1490202866.png', '#000000'),
(16, 'ss', 'Masculino', 'public/imgs/avatars/1490202920.png', '#71d6f2'),
(17, 'himlarlamocha', 'Femenino', 'public/imgs/avatars/1490619649.jpg', '#000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `documento` bigint(20) NOT NULL,
  `nombres` varchar(21) NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `direcion` varchar(21) DEFAULT NULL,
  `ciudad` varchar(16) DEFAULT 'haiti',
  `correo` varchar(32) NOT NULL,
  `clave` varchar(64) NOT NULL,
  `rol` varchar(16) NOT NULL DEFAULT 'cliente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `documento`, `nombres`, `telefono`, `direcion`, `ciudad`, `correo`, `clave`, `rol`) VALUES
(1, 106065854, 'Santiago', 8774919, 'Villamaria', 'haiti', 'jeremias@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'administrador'),
(2, 1053963432, 'Paola', 87722222, 'sultana', 'haiti', 'homero@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(3, 10532212212, 'Roberto', 308765123, 'cra6a', 'haiti', 'Roberto@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(4, 10532212212, 'Roberto', 308765123, 'cra6a', 'haiti', 'Roberto@gmaol.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente'),
(5, 10532212212, 'Maria', 308765123, 'crssd6a', 'haiti', 'Maria@gmail.com', '4983a0ab83ed86e0e7213c8783940193', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `articulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `cliente_id`, `articulo_id`) VALUES
(1, 4, 1),
(2, 4, 5),
(3, 4, 9),
(4, 4, 5),
(5, 2, 5),
(6, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copia_articulos`
--

CREATE TABLE `copia_articulos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(24) NOT NULL DEFAULT 'chocolatinas',
  `precio` int(11) NOT NULL,
  `correo` varchar(24) DEFAULT 'alvarez-ty@hotmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `copia_articulos`
--

INSERT INTO `copia_articulos` (`id`, `nombre`, `precio`, `correo`) VALUES
(1, 'Bombon', 250, 'alvarez-ty@hotmail.com'),
(2, 'Dildo', 25000, 'alvarez-ty@hotmail.com'),
(3, 'play4', 1000000, 'alvarez-ty@hotmail.com'),
(4, 'secadora', 100000, 'alvarez-ty@hotmail.com'),
(5, 'olla rocera', 90000, 'alvarez-ty@hotmail.com'),
(6, 'Condones', 8000, 'alvarez-ty@hotmail.com'),
(7, 'Marihuana', 25000, 'alvarez-ty@hotmail.com'),
(8, 'Licadura', 25000, 'alvarez-ty@hotmail.com'),
(9, 'Coker Spain', 270000, 'alvarez-ty@hotmail.com'),
(10, 'Cerveza', 2500, 'alvarez-ty@hotmail.com'),
(12, 'chocolatinas', 500, 'alvarez-ty@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `gender` varchar(32) DEFAULT NULL,
  `image` varchar(64) DEFAULT 'public/img/avatar.png',
  `color` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `gender`, `image`, `color`) VALUES
(3, 'roberto', 'Femenino', 'public/imgs/avatars/1490627301.png', '#000000'),
(4, 'Edisan', 'Femenino', 'public/imgs/avatars/1490627339.png', '#5fefe0'),
(5, 'himmlar', 'Femenino', 'public/imgs/avatars/1490627709.png', '#f385b9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `articulo_id` (`articulo_id`);

--
-- Indices de la tabla `copia_articulos`
--
ALTER TABLE `copia_articulos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `copia_articulos`
--
ALTER TABLE `copia_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
