-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2018 a las 02:49:49
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecapa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `codigo` int(7) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `Dependencia` varchar(50) NOT NULL,
  `Origen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo`, `nombre`, `autor`, `editorial`, `genero`, `Estado`, `Dependencia`, `Origen`) VALUES
(1, 'El llano en llamas', 'Juan Rulfo', 'Time', 'Lirica', 'Ocupado', 'Casa Amiga', 'Grow Foundation'),
(2, 'Hola', 'Jorge', 'torres', 'Novela', 'Ocupado', 'Cofradia de Suchitlan', 'sdalsjk'),
(3, 'Borrador', 'Jose', 'Santillana', 'Deportes', 'Disponible', 'Casa Amiga', 'Grow');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `no_Prestamo` int(10) NOT NULL,
  `codigo_Libro` int(7) NOT NULL,
  `codigo_Usuario` int(7) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_dev` date NOT NULL,
  `fecha_max` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(7) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellido_Paterno` varchar(50) NOT NULL,
  `apellido_Materno` varchar(50) NOT NULL,
  `telefono` varchar(16) DEFAULT NULL,
  `domicio` varchar(55) DEFAULT NULL,
  `Poblacion` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`no_Prestamo`),
  ADD KEY `codigo_Libro` (`codigo_Libro`),
  ADD KEY `codigo_Usuario` (`codigo_Usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `codigo` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `no_Prestamo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`codigo_Libro`) REFERENCES `libros` (`codigo`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`codigo_Usuario`) REFERENCES `usuarios` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
