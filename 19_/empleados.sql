-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2022 a las 19:18:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `cod_empresa` int(15) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `profesion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`cod_empresa`, `nombre`, `apellidos`, `edad`, `ciudad`, `profesion`) VALUES
(1, 'Maria', 'Sanchez', 35, 'Madrid', 'Administrativa'),
(2, 'Ana', 'Gomez', 24, 'Sevilla', 'Directivo'),
(3, 'Luisa', 'Valenciaga', 34, 'Madrid', 'Administrativa'),
(4, 'Susana', 'Ñuñez', 26, 'Caceres', 'Vendedor'),
(5, 'Esther', 'Alvarez', 24, 'Caceres', 'Vendedor'),
(6, 'Miriam', 'Perez', 23, 'Sevilla', 'Directivo'),
(7, 'Juana', 'Jimenez', 25, 'Caceres', 'Vendedor'),
(8, 'Carmen', 'Oduardo', 23, 'Madrid', 'Administrativa'),
(9, 'Rocio', 'Diaz', 25, 'Madrid', 'Administrativa'),
(10, 'Raquel', 'Varea', 34, 'Sevilla', 'Directivo'),
(11, 'Francisco', 'Fernandez', 45, 'Sevilla', 'Limpiador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`cod_empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `cod_empresa` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
