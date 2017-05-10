-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2017 a las 01:02:32
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tablas_relacionadas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schema_dpto_tbl`
--

CREATE TABLE `schema_dpto_tbl` (
  `id_dpto` int(11) NOT NULL,
  `name_dpto` varchar(100) NOT NULL,
  `id_job` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schema_employe_tbl`
--

CREATE TABLE `schema_employe_tbl` (
  `id_employe` int(11) NOT NULL,
  `employe_name` varchar(100) NOT NULL,
  `identify` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schema_job_tbl`
--

CREATE TABLE `schema_job_tbl` (
  `id_employe` int(11) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `id_job` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `schema_dpto_tbl`
--
ALTER TABLE `schema_dpto_tbl`
  ADD KEY `id_job` (`id_job`);

--
-- Indices de la tabla `schema_employe_tbl`
--
ALTER TABLE `schema_employe_tbl`
  ADD PRIMARY KEY (`id_employe`);

--
-- Indices de la tabla `schema_job_tbl`
--
ALTER TABLE `schema_job_tbl`
  ADD PRIMARY KEY (`id_employe`),
  ADD KEY `id_job` (`id_job`),
  ADD KEY `id_employe` (`id_employe`),
  ADD KEY `id_employe_2` (`id_employe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `schema_employe_tbl`
--
ALTER TABLE `schema_employe_tbl`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `schema_job_tbl`
--
ALTER TABLE `schema_job_tbl`
  MODIFY `id_employe` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `schema_dpto_tbl`
--
ALTER TABLE `schema_dpto_tbl`
  ADD CONSTRAINT `schema_dpto_tbl_ibfk_1` FOREIGN KEY (`id_job`) REFERENCES `schema_job_tbl` (`id_job`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `schema_job_tbl`
--
ALTER TABLE `schema_job_tbl`
  ADD CONSTRAINT `schema_job_tbl_ibfk_1` FOREIGN KEY (`id_employe`) REFERENCES `schema_employe_tbl` (`id_employe`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
