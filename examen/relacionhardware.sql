-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2022 a las 11:18:11
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacionhardware`
--

CREATE TABLE `relacionhardware` (
  `id_componente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Departamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `relacionhardware`
--

INSERT INTO `relacionhardware` (`id_componente`, `nombre`, `Marca`, `Cantidad`, `Departamento`) VALUES
(1, 'Monitor', 'HP 27', 5, 'Administración'),
(2, 'Monitor', 'Philips 223', 15, 'Formación'),
(3, 'Teclado', 'Philips', 20, 'Formación'),
(4, 'Disco Duro', 'Sata', 10, 'Informática'),
(5, 'Ratón', 'ASUS', 50, 'Informática'),
(6, 'Tarjeta Gráfica', 'AMD', 5, 'Informática'),
(7, 'Procesador', 'INTEL CELERÓN', 10, 'Administración'),
(8, 'Portátil', 'ASUS', 5, 'Formación');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `relacionhardware`
--
ALTER TABLE `relacionhardware`
  ADD PRIMARY KEY (`id_componente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `relacionhardware`
--
ALTER TABLE `relacionhardware`
  MODIFY `id_componente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
