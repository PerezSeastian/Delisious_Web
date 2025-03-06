-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2025 a las 22:08:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `altaa_cliente` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `email`, `password`, `altaa_cliente`) VALUES
(1, 'SEBASTIAN SANTIAGO PEREZ', 'sspsantiago15@gmail.com', '12345', '2025-03-01 22:04:07'),
(2, 'Admin', 'delisiousfoodfu@gmail.com', 'delifood2018', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotisacion_reserva`
--

CREATE TABLE `cotisacion_reserva` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `ocacion` varchar(1000) NOT NULL,
  `fecha` varchar(5000) NOT NULL,
  `mensaje` varchar(1000) NOT NULL,
  `estatus` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cotisacion_reserva`
--

INSERT INTO `cotisacion_reserva` (`id`, `name`, `email`, `ocacion`, `fecha`, `mensaje`, `estatus`) VALUES
(1, 'Prueba', 'correo@test.com', 'Cumpleaños', '2025-03-01 00:00:00', 'Mensaje de prueba', '2025-03-01 22:30:10'),
(11, 'SEBASTIAN SANTIAGO PEREZ', 'sspsantiago15@gmail.com', 'Cumpleaños', '0000-00-00 00:00:00', 'qwerty', '2025-03-01 22:57:27'),
(12, 'SEBASTIAN SANTIAGO PEREZ', 'proyectinnovation@gmail.com', 'Cumpleaños', '', 'qqqqq', '2025-03-01 22:59:44'),
(13, 'SEBASTIAN SANTIAGO PEREZ', 'sspsantiago15@gmail.com', 'Cumpleaños', '', '12345', '2025-03-01 23:00:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotisacion_reserva`
--
ALTER TABLE `cotisacion_reserva`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cotisacion_reserva`
--
ALTER TABLE `cotisacion_reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
