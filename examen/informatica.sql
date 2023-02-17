-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2023 a las 19:57:17
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
-- Estructura de tabla para la tabla `informatica`
--

CREATE TABLE `informatica` (
  `items` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `hardware/software` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor unidad` double NOT NULL,
  `subtotal` double NOT NULL,
  `porcentaje` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `informatica`
--

INSERT INTO `informatica` (`items`, `nombre`, `hardware/software`, `departamento`, `cantidad`, `valor unidad`, `subtotal`, `porcentaje`) VALUES
(1, 'Disco duro', 'Hardware', 'RRHH', 2, 180000, 360000, '3'),
(2, 'Mouse', 'Hardware', 'CONTABILIDAD', 3, 42900, 128700, '0'),
(3, 'Teclado', 'Hardware', 'INFORMATICA', 1, 59900, 59900, '1'),
(4, 'Monitor', 'Hardware', 'ALMACEN', 4, 1095000, 4380000, '3'),
(5, 'CPU', 'Hardware', 'RRHH', 2, 1400000, 2800000, '23'),
(6, 'Memoria RAM', 'Hardware', 'CONTABILIDAD', 2, 156900, 313800, '2'),
(7, 'Memoria ROM', 'Hardware', 'INFORMATICA', 1, 370000, 370000, '6'),
(8, 'Impresora', 'Hardware', 'ALMACEN', 1, 280000, 280000, '4'),
(9, 'Tarjeta Madre', 'Hardware', 'CONTABILIDAD', 3, 259900, 779700, '4'),
(10, 'Unida CD', 'Hardware', 'ALMACEN', 2, 42000, 84000, '0'),
(11, 'Windows 7 Pro', 'Software', 'RRHH', 1, 125000, 125000, '2'),
(12, 'Linux', 'Software', 'DIRECCION', 3, 140000, 420000, '0'),
(13, 'Office 365', 'Software', '', 4, 218500, 874000, '3'),
(14, 'Logic Pro', 'Software', 'ALMACEN', 2, 650000, 1300000, '10'),
(15, 'FL Studio', 'Software', '', 7, 28000, 196000, '0'),
(16, 'Skype', 'Software', 'INFORMATICA', 6, 0, 0, '0'),
(17, 'Picasa', 'Software', 'RRHH', 2, 200000, 400000, '0'),
(18, 'Windows 10 Pro', 'Software', 'ALMACEN', 8, 120000, 960000, '2'),
(19, 'Google', 'Software', 'CONTABILIDAD', 9, 0, 0, '0'),
(20, 'Mozilla', 'Software', 'CONTABILIDAD', 5, 0, 0, '0'),
(21, 'Parlantes', 'Hardware', 'DIRECCION', 1, 37000, 37000, '0'),
(22, 'Tarjeta de video', 'Hardware', 'DIRECCION', 2, 320000, 640000, '5'),
(23, 'Office 2016', 'Software', 'INFORMATICA', 3, 39000, 117000, '0'),
(24, 'Antivirus Mcafee', 'Software', 'DIRECCION', 2, 81900, 163800, '1'),
(25, 'Diabema', 'Hardware', 'CONTABILIDAD', 1, 83000, 83000, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
