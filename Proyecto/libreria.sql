-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2023 a las 13:13:18
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
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
  `editorial` varchar(78) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo`, `isbn`, `titulo`, `autor`, `editorial`, `precio`) VALUES
(1, '978-84-9964-726-5', 'Aplicaciones gráficas con Python 3', 'Cuevas Álvarez, Alberto', 'Ra-Ma S.A. Editorial y Publicaciones', 3500),
(2, '978-84-415-3941-9', 'Aprenda a programar con Python 3', 'Shaw, Zed A. Acera García, Miguel Ángel', 'Anaya Multimedia', 0),
(3, '978-84-415-3651-7', 'Aprenda a programar con PYTHON', 'Shaw, Zed A.', 'Anaya Multimedia', 0),
(4, '978-84-948972-6-9', 'Aprende a programar con PYTHON', 'Luján Castillo, José Dimas', 'RC Libros', 0),
(5, '978-84-267-3489-1', 'Aprende a programar en Python : de cero al infinito', 'Guardati Buemo, Silvia Cairó Battistutti, Osvaldo', 'Marcombo', 0),
(6, '978-84-09-25816-1', 'Aprende machine learning en español : teoría + práctica Python', 'Bagnato, Juan Ignacio', 'Bagnato, Juan Ignacio', 0),
(7, '978-84-09-37529-5', 'Aprende Python con Lego Spike Prime : introducción al lenguaje Python de una forma divertida', 'López Simón, Yamal', 'López Simón, Yamal', 0),
(8, '978-84-267-2429-8', 'Aprender inteligencia artificial, combinatoria, grafos y algoritmos en Python : con 100 ejercicios prácticos', 'Pérez Castaño, Arnaldo', 'Marcombo', 0),
(9, '978-84-17449-81-0', 'Aprendiendo a programar en Python', 'García Entrambasaguas, Paula ... [et al.]', 'Servicio de Publicaciones y Divulgación Científica de la Universidad de Málaga', 0),
(10, '978-84-17449-82-7', 'Aprendiendo a programar en Python', 'García Entrambasaguas, Paula ... [et al.]', 'Servicio de Publicaciones y Divulgación Científica de la Universidad de Málaga', 0),
(11, '978-84-9881-405-7', 'Aprendizaje del lenguaje Python en FP', 'Arroyo Juan, Manuel', 'Procompal Publicaciones', 0),
(12, '978-07-65326-35-5', 'El Camino De Los Reyes', 'Brandon Sanderson', 'DragonSteel', 2009);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre`, `username`, `password`) VALUES
(1, 'Sergio Fernandez', 'admin', 'Admin1'),
(2, 'Antonio Romero', 'antonio', 'Anton1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `codigo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;