-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2023 a las 05:27:22
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyectoweb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarChiste` (IN `id` INT(11), IN `chisteTexto` VARCHAR(500))   INSERT INTO `tbchiste`(`tbchisteid`, `tbchistetexto`) VALUES (id,chisteTexto)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerChistes` ()   SELECT * FROM `tbchiste`$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbacceso`
--

CREATE TABLE `tbacceso` (
  `tbaccesoid` int(11) NOT NULL,
  `tbaccesonombre` varchar(250) NOT NULL,
  `tbaccesopassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbchiste`
--

CREATE TABLE `tbchiste` (
  `tbchisteid` int(11) NOT NULL,
  `tbchistetexto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbchiste`
--

INSERT INTO `tbchiste` (`tbchisteid`, `tbchistetexto`) VALUES
(1, 'Hola'),
(2, 'Diaz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE `tbusuario` (
  `tbusuarioid` int(11) NOT NULL,
  `tbusuariocedula` varchar(250) NOT NULL,
  `tbusuarionombre` varchar(250) NOT NULL,
  `tbusuarioapellido1` varchar(250) NOT NULL,
  `tbusuarioapellido2` varchar(250) NOT NULL,
  `tbusuarioedad` int(11) NOT NULL,
  `tbusuariocorreo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbacceso`
--
ALTER TABLE `tbacceso`
  ADD PRIMARY KEY (`tbaccesoid`);

--
-- Indices de la tabla `tbchiste`
--
ALTER TABLE `tbchiste`
  ADD PRIMARY KEY (`tbchisteid`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`tbusuarioid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbacceso`
--
ALTER TABLE `tbacceso`
  MODIFY `tbaccesoid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbchiste`
--
ALTER TABLE `tbchiste`
  MODIFY `tbchisteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `tbusuarioid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
