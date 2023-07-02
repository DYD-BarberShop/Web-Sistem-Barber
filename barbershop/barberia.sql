-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-07-2022 a las 21:00:56
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19286650_barberia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barber`
--

CREATE TABLE `barber` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barber`
--

INSERT INTO `barber` (`id`, `nombre`, `descripcion`, `imagen`, `estado`) VALUES
(1, 'Yassel Loaysa', 'Campeón en la batalla Lima Este  ', 'yassel.jpg', 1),
(2, 'Juan Dasel', 'Barber de la muerte', 'favicon.png', 0),
(3, 'Martin Flores', 'Campeón en Lima Este', 'martin.jpg', 1),
(6, 'Neiser Alcalde ', 'Campeón en la categoria FreeStyle', 'neiser.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora`
--

CREATE TABLE `hora` (
  `id` int(5) NOT NULL,
  `inicio` varchar(10) NOT NULL,
  `fin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hora`
--

INSERT INTO `hora` (`id`, `inicio`, `fin`) VALUES
(25, '09:00', '10:00'),
(27, '10:00', '11:00'),
(28, '11:00', '12:00'),
(29, '12:00', '13:00'),
(30, '13:00', '14:00'),
(31, '14:00', '15:00'),
(32, '15:00', '16:00'),
(33, '16:00', '17:00'),
(34, '17:00', '18:00'),
(35, '18:00', '19:00'),
(36, '19:00', '20:00'),
(37, '20:00', '21:00'),
(38, '21:00', '22:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id` int(5) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(95) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descuento` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id`, `nombre`, `descripcion`, `estado`, `imagen`, `descuento`) VALUES
(1, '5 cortes', 'El siguiente descuento es cuando tienes 5 reservas', 'Despublicar', 'PROMO-2-826x675.png', 15),
(2, 'Fiesta patria', 'Por ser el día de la independencia ', 'Despublicar', 'fiestas-patrias-en-lima-especiales-lunademiel.jpg', 10),
(3, 'Por Navidad', 'Descuento especial por ser el nacimiento de Jesús', 'Publicar', 'navidad.png', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(5) NOT NULL,
  `baber_id` int(5) NOT NULL,
  `servicio_id` int(5) NOT NULL,
  `usuario_id` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL,
  `hora_id` int(5) NOT NULL,
  `llave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `baber_id`, `servicio_id`, `usuario_id`, `fecha`, `estado`, `hora_id`, `llave`) VALUES
(28, 1, 5, 7, '2022-04-11', 1, 29, '2022.04.11.03.50.177'),
(32, 1, 3, 6, '2022-04-13', 1, 27, '2022.04.11.04.08.376'),
(33, 3, 3, 7, '2022-04-12', 1, 28, '2022.04.11.04.14.527'),
(41, 1, 3, 6, '2022-07-20', 1, 25, '2022.07.20.04.17.306');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(5) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `stilo` varchar(40) NOT NULL,
  `precio` varchar(25) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nombre`, `stilo`, `precio`, `descripcion`, `imagen`, `estado`) VALUES
(1, 'Corte', 'Urbano', '25', 'Figado con gel', 'untitled5.png', 0),
(2, 'Corte', 'Elegante', '25', 'Figado con sera', 'untitled2.png', 0),
(3, 'Afeitado', 'Urbano', '15', 'Para adultos', 'untitled.png', 0),
(4, 'Afeitado', 'Elegante', '6', 'Para jóvenes y adultos', 'untitled1.png', 1),
(5, 'Corte', 'Urbano', '7', 'Corte especial', 'untitled3.png', 1),
(6, 'Afeitado', 'Clasico', '8', 'Este afeitado es...', 'untitled4.png', 1),
(7, 'Shana', 'shakira kiler', '15', 'sdsads', 'Angel_Beats!_full_1913526.jpg', 0),
(8, 'Corte Crop', 'Moderno', '10', 'Corte con fijación y texturizado', 'corte.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `tipo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`, `imagen`, `tipo`) VALUES
(6, 'Raúl Castro', 'castroraul0801@gmail.com', '', 'https://lh3.googleusercontent.com/a/AItbvmmYokD2rvxDP3CzJC_qeYpQTqDJHndWDFZ1dUqK=s96-c', ''),
(7, 'Elias Yupanqui Castro', 'yupanqui.elias24@gmail.com', '', 'https://lh3.googleusercontent.com/a/AItbvmmm_WSqwPU43LWhvfIc3aL7HNlCpRXDcoPev9tS=s96-c', ''),
(9, 'Elias', 'elias@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'user9.jpg', 'Admin'),
(10, 'Rober Quidev', 'roberquidev@gmail.com', NULL, 'https://lh3.googleusercontent.com/a-/AFdZucpbI5s2mjUtQTDjJA2607Qs5oBBxdk5cuKY6jNR=s96-c', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barber`
--
ALTER TABLE `barber`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hora`
--
ALTER TABLE `hora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baber_id` (`baber_id`),
  ADD KEY `servicio_id` (`servicio_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `hora_id` (`hora_id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barber`
--
ALTER TABLE `barber`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `hora`
--
ALTER TABLE `hora`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`baber_id`) REFERENCES `barber` (`id`),
  ADD CONSTRAINT `reserva_ibfk_4` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `reserva_ibfk_5` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`id`),
  ADD CONSTRAINT `reserva_ibfk_6` FOREIGN KEY (`hora_id`) REFERENCES `hora` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
