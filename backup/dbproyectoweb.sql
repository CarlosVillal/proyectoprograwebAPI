-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2023 a las 06:09:01
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarusuario` (IN `id` INT, IN `cedula` VARCHAR(255), IN `nombre` VARCHAR(255), IN `primApellido` VARCHAR(255), IN `segApellido` VARCHAR(255), IN `edad` INT, IN `correo` VARCHAR(255))   UPDATE `tbusuario` SET `tbusuariocedula` = cedula, 
`tbusuarionombre` = nombre, 
`tbusuarioapellido1` = primApellido, 
`tbusuarioapellido2` = segApellido, 
`tbusuarioedad` = edad, 
`tbusuariocorreo` = correo WHERE `tbusuarioid` = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarUsuario` (IN `id` INT)   DELETE FROM tbusuario WHERE tbusuarioid = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarChiste` (IN `id` INT(11), IN `chisteTexto` VARCHAR(500))   INSERT INTO `tbchiste`(`tbchisteid`, `tbchistetexto`) VALUES (id,chisteTexto)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarusuario` (IN `id` INT, IN `cedula` VARCHAR(255), IN `nombre` VARCHAR(255), IN `primApellido` VARCHAR(255), IN `segApellido` VARCHAR(255), IN `edad` INT, IN `correo` VARCHAR(255))   INSERT INTO `tbusuario`(`tbusuarioid`, `tbusuariocedula`, `tbusuarionombre`, `tbusuarioapellido1`, `tbusuarioapellido2`, `tbusuarioedad`, `tbusuariocorreo`) VALUES (id,cedula,nombre, primApellido, segApellido, edad, correo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerChistes` ()   SELECT * FROM `tbchiste`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtenerUsuarios` ()   SELECT * FROM tbusuario$$

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

--
-- Volcado de datos para la tabla `tbacceso`
--

INSERT INTO `tbacceso` (`tbaccesoid`, `tbaccesonombre`, `tbaccesopassword`) VALUES
(1, 'Yery', '12345');

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
(2, '¿Cómo se llama un programador HTML con habilidades para la jardinería? Un experto en plantillas.'),
(4, '¿Cuál es la forma orientada a objetos para volverse rico? Herencia.');

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
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`tbusuarioid`, `tbusuariocedula`, `tbusuarionombre`, `tbusuarioapellido1`, `tbusuarioapellido2`, `tbusuarioedad`, `tbusuariocorreo`) VALUES
(1, '702540125', 'Yery', 'Marín', 'Ortiz', 25, 'yerysteven3030@gmail.com'),
(2, '7', 'Yery Steven', 'Marin', 'Ortiz', 22, 'yerysteven3030@gmail.com'),
(3, '7', 'Andrés', 'aaaa', 'aaaaa', 22, 'yerysteven3030@gmail.com'),
(4, '72', 'Yery Steven', 'Marin', 'Ortiz', 22, 'yerysteven3030@gmail.com'),
(5, '722', 'Yery Steven', 'Marin', 'Ortiz', 2121, 'yerysteven3030@gmail.com');

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
  MODIFY `tbaccesoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbchiste`
--
ALTER TABLE `tbchiste`
  MODIFY `tbchisteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `tbusuarioid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
