-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2023 a las 17:05:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

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
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `codigo` int(2) NOT NULL,
  `nhabitacion` varchar(2) DEFAULT NULL,
  `tipo` varchar(9) DEFAULT NULL,
  `estado` varchar(7) DEFAULT NULL,
  `fechaentrada` date DEFAULT NULL,
  `fechasalida` date DEFAULT NULL,
  `nnoches` int(2) DEFAULT NULL,
  `precionoche` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`codigo`, `nhabitacion`, `tipo`, `estado`, `fechaentrada`, `fechasalida`, `nnoches`, `precionoche`) VALUES
(1, '1A', 'DOBLE', 'OCUPADA', '2016-07-01', '2016-07-14', 13, 68),
(2, '1B', 'DOBLE', '', '2016-07-15', '2016-07-30', 15, 68),
(3, '1C', 'DOBLE', 'OCUPADA', '2016-07-15', '2016-07-30', 15, 68),
(4, '1D', 'DOBLE', 'OCUPADA', '2016-07-15', '2016-07-30', 15, 68),
(5, '1E', 'Sencilla', 'OCUPADA', '2016-07-15', '2016-07-30', 15, 57),
(6, '1F', 'Sencilla', 'OCUPADA', '2016-07-15', '2016-07-30', 15, 57),
(7, '2A', 'DOBLE', 'OCUPADA', '2016-07-01', '2016-07-14', 13, 68),
(8, '2B', 'DOBLE', '', '2016-07-02', '2016-07-12', 10, 68),
(9, '2C', 'DOBLE', 'OCUPADA', '2016-07-07', '2016-07-15', 8, 68),
(10, '2D', 'DOBLE', 'OCUPADA', '2016-07-01', '2016-07-14', 13, 68),
(11, '2E', 'Sencilla', 'OCUPADA', '2016-07-08', '2016-07-22', 14, 57),
(12, '2F', 'Sencilla', 'OCUPADA', '2016-07-04', '2016-07-15', 11, 57),
(13, '3A', 'DOBLE', 'OCUPADA', '2016-07-01', '2016-07-14', 13, 68),
(14, '3B', 'DOBLE', 'OCUPADA', '2016-07-10', '2016-07-21', 11, 68),
(15, '3C', 'DOBLE', 'OCUPADA', '2016-07-09', '2016-07-22', 13, 68),
(16, '3D', 'DOBLE', 'OCUPADA', '2016-07-01', '2016-07-14', 13, 68),
(17, '3E', 'Sencilla ', 'OCUPADA', '2016-07-01', '2016-07-14', 13, 57),
(18, '3F', 'Sencilla', 'OCUPADA', '2016-07-01', '2016-07-14', 13, 57),
(19, '4A', 'SUITE', 'OCUPADA', '2016-07-16', '2016-07-31', 15, 228),
(20, '4B', 'SUITE', 'OCUPADA', '2016-07-21', '2016-08-20', 30, 228);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `codigo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
