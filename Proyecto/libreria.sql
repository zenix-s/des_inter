-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2023 a las 00:31:03
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
  `precio` int(11) DEFAULT NULL,
  `portada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo`, `isbn`, `titulo`, `autor`, `editorial`, `precio`, `portada`) VALUES
(1, '978-84-9964-726-5', 'Aplicaciones gráficas con Python 3', 'Cuevas Álvarez, Alberto', 'Ra-Ma S.A. Editorial y Publicaciones', 3500, ''),
(2, '978-84-415-3941-9', 'Aprenda a programar con Python 3', 'Shaw, Zed A. Acera García, Miguel Ángel', 'Anaya Multimedia', 2017, ''),
(3, '978-84-415-3651-7', 'Aprenda a programar con PYTHON', 'Shaw, Zed A.', 'Anaya Multimedia', 2014, ''),
(4, '978-84-948972-6-9', 'Aprende a programar con PYTHON', 'Luján Castillo, José Dimas', 'RC Libros', 2019, ''),
(5, '978-84-267-3489-1', 'Aprende a programar en Python : de cero al infinito', 'Guardati Buemo, Silvia Cairó Battistutti, Osvaldo', 'Marcombo', 2022, ''),
(6, '978-84-09-25816-1', 'Aprende machine learning en español : teoría + práctica Python', 'Bagnato, Juan Ignacio', 'Bagnato, Juan Ignacio', 2020, ''),
(7, '978-84-09-37529-5', 'Aprende Python con Lego Spike Prime : introducción al lenguaje Python de una forma divertida', 'López Simón, Yamal', 'López Simón, Yamal', 2022, ''),
(8, '978-84-267-2429-8', 'Aprender inteligencia artificial, combinatoria, grafos y algoritmos en Python : con 100 ejercicios prácticos', 'Pérez Castaño, Arnaldo', 'Marcombo', 2017, ''),
(9, '978-84-17449-81-0', 'Aprendiendo a programar en Python', 'García Entrambasaguas, Paula ... [et al.]', 'Servicio de Publicaciones y Divulgación Científica de la Universidad de Málaga', 2019, ''),
(10, '978-84-17449-82-7', 'Aprendiendo a programar en Python', 'García Entrambasaguas, Paula ... [et al.]', 'Servicio de Publicaciones y Divulgación Científica de la Universidad de Málaga', 2019, ''),
(11, '978-84-9881-405-7', 'Aprendizaje del lenguaje Python en FP', 'Arroyo Juan, Manuel', 'Procompal Publicaciones', 2010, ''),
(12, '978-07-65326-35-5', 'El Camino De Los Reyes', 'Brandon Sanderson', 'DragonSteel', 2009, '978-07-65326-35-5.jpg'),
(13, '978-84-18037-81-8', 'Trenza del Mar Esmeralda', 'Brandon Sanderson', 'nova', 2690, '978-84-18037-81-8.jpg'),
(14, '978-84-99899-61-9', 'El Temor de un Hombre Sabio', 'Patrick Rothfuss', 'DEBOLSILLO', 1095, '978-84-99899-61-9.jpg'),
(15, '978-84-99893-67-9', 'El camino de las sombras', 'Brent Weeks', 'DEBOLSILLO', 995, '978-84-99893-67-9.jpg'),
(16, '978-84-66657-54-9', 'Palabras Radiantes', 'Brandon Sanderson', 'NOVA', 1420, '978-84-66657-54-9.jpg'),
(17, '978-84-17347-00-0', 'Juramentada', 'Brandon Sanderson', 'NOVA', 3315, '978-84-17347-00-0.jpg'),
(18, '978-84-17347-93-2', 'El Ritmo de la Guerra', 'Brandon Sanderson', 'NOVA', 3315, '978-84-17347-93-2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre`, `username`, `password`) VALUES
(1, 'Sergio Fernandez', 'Admin', 'Admin1'),
(2, 'Antonio Romero', 'antonio', 'anton'),
(3, 'Pepe Martinez de Los Alme', 'Pepito_Mar', 'Pepito123Mar');

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
  MODIFY `codigo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
