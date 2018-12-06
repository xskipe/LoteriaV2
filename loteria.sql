-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2018 a las 01:58:56
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Cod_usuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Cedula` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Celular` varchar(40) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Departamento` varchar(40) NOT NULL,
  `Municipio` varchar(40) NOT NULL,
  `Tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cod_usuario`, `Nombre`, `Apellido`, `Cedula`, `Password`, `Celular`, `Correo`, `Departamento`, `Municipio`, `Tipo_usuario`) VALUES
(4, 'victor', '', 'Administrador', '1234', '0', '', '', '', 'Administrador'),
(6, 'victor', '', 'victor2', '1234', '0', '', '', '', 'Usuario'),
(9, 'Victor Ernesto', 'Leal Moreno', '1090502371', '1234', '3118845203', 'ernes3210@gmail.com', 'Norte de Santander', 'Cucuta', 'Administrador'),
(12, 'asdasf', 'asdasd', '123123', '1234', '1231234', 'ernes3210@gmail.com', 'Norte de Santander', 'Cucuta', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
