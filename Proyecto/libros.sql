-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2023 a las 21:04:49
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `codigo` int(2) NOT NULL,
  `isbn` varchar(17) DEFAULT NULL,
  `titulo` varchar(108) DEFAULT NULL,
  `autor` varchar(49) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `publicacion` varchar(78) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo`, `isbn`, `titulo`, `autor`, `fecha`, `publicacion`) VALUES
(1, '978-84-9964-726-5', 'Aplicaciones gráficas con Python 3', 'Cuevas Álvarez, Alberto', '2018-02-01', 'Ra-Ma S.A. Editorial y Publicaciones'),
(2, '978-84-415-3941-9', 'Aprenda a programar con Python 3', 'Shaw, Zed A. Acera García, Miguel Ángel', '2017-10-01', 'Anaya Multimedia'),
(3, '978-84-415-3651-7', 'Aprenda a programar con PYTHON', 'Shaw, Zed A.', '2014-10-01', 'Anaya Multimedia'),
(4, '978-84-948972-6-9', 'Aprende a programar con PYTHON', 'Luján Castillo, José Dimas', '2019-09-01', 'RC Libros'),
(5, '978-84-267-3489-1', 'Aprende a programar en Python : de cero al infinito', 'Guardati Buemo, Silvia Cairó Battistutti, Osvaldo', '2022-10-01', 'Marcombo'),
(6, '978-84-09-25816-1', 'Aprende machine learning en español : teoría + práctica Python', 'Bagnato, Juan Ignacio', '2020-11-01', 'Bagnato, Juan Ignacio'),
(7, '978-84-09-37529-5', 'Aprende Python con Lego Spike Prime : introducción al lenguaje Python de una forma divertida', 'López Simón, Yamal', '2022-02-01', 'López Simón, Yamal'),
(8, '978-84-267-2429-8', 'Aprender inteligencia artificial, combinatoria, grafos y algoritmos en Python : con 100 ejercicios prácticos', 'Pérez Castaño, Arnaldo', '2017-08-01', 'Marcombo'),
(9, '978-84-17449-81-0', 'Aprendiendo a programar en Python', 'García Entrambasaguas, Paula ... [et al.]', '2019-07-01', 'Servicio de Publicaciones y Divulgación Científica de la Universidad de Málaga'),
(10, '978-84-17449-82-7', 'Aprendiendo a programar en Python', 'García Entrambasaguas, Paula ... [et al.]', '2019-07-01', 'Servicio de Publicaciones y Divulgación Científica de la Universidad de Málaga'),
(11, '978-84-9881-405-7', 'Aprendizaje del lenguaje Python en FP', 'Arroyo Juan, Manuel', '2010-02-01', 'Procompal Publicaciones');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `codigo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
