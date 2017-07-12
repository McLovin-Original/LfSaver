-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2017 a las 03:57:54
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lifesaver`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `acc_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `acc_email` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `acc_password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `acc_tour` tinyint(1) NOT NULL,
  `usu_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`acc_id`, `acc_email`, `acc_password`, `acc_tour`, `usu_id`) VALUES
('iLReCDYt1oT7fM46KbjQGiF47QxYmz', 'pablito@gmail.com', '$2y$10$mtlDrLLI0iD55AEdVQYXKudL1/4FglKncMmu6fghYcAtS2XTt9Khu', 1, 'N8pMBubF5xCJt4CIzqiQCAKPrV2Tpq'),
('jCSfmhsjJdlVhSDGkApfpDhzlaQsui', 'jprestrepo94@misena.edu.co', '$2y$10$hdrPgz.iFuvBxDDjgjJo2e/bIsTQch/CfZGJO3KyaTwuTaVpDZT.m', 1, '9JDZ9NS2iQmrFh7iCsa1eCD1CMJBvc'),
('RInfq8beHf3lz8IbfTeGYr2KLVBtIH', 'pablofrg98@gmail.com', '$2y$10$ZPKMlm4po1qi/XxuRgbeCe/zZNkPE18v/ScTGKu7stQc6EClYyftK', 1, '9GbNxanSqGVYgvSxvfrXX6Qe0DO3Gj'),
('s2v7RS4UMDKORJES7Hsu97sTh5KNvN', 'decardona34@misena.edu.co', '$2y$10$gr4lPtUBrRbORhe.2tp9ruIqyCr0YKHzlvaD3Pa1vs2L5ixTGQY0O', 0, 'oRKjnACL3aTcKPYxZtDMOiqIv2Ijjp'),
('tyvybCRApHjkQBMQkLQRblXVLtmpqi', 'ejemplo@gmail.com', '$2y$10$SkId8uMZlq.m09hz9u.eIODTXONga8W62U5wruqU7aLSzuojmlU8i', 1, 'i1eUZ3KyPidUsftY8Cy3S8AdHMM46x'),
('Vg78LjOGpPn5f7jc6TAQl6ZczdtmQY', 'cito@quiero.com', '$2y$10$5LamkDHOkbWN/eBaoaX72.OyBejUL4VXiKvIHn1BYXFBmMnwyMGDG', 0, 'DVBbxKgz0zlZoahDOjAFBUOXAT4Nnn'),
('xp8JVuyV7EF2f9i2vxhxyH7bLj4VAU', 'ss@gmail.com', '$2y$10$rwrG3qd7lEFUcGOxpxydIeTpclZZxP.G9.7G.97VruYMe5qq26Ovq', 0, 'DvOJrmlu4HRClP7uCdfGFuryFjlF68');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica`
--

CREATE TABLE `clinica` (
  `cli_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cli_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cli_direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cli_telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clinica`
--

INSERT INTO `clinica` (`cli_id`, `cli_nombre`, `cli_direccion`, `cli_telefono`) VALUES
('hbsItJO7DkCFrjETYc0qUERvQv7pZZ', 'Las vegas', 'Cr 66', '292');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `don_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `don_fisica` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `don_mental` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `don_tatuaje` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `don_donacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `don_tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usu_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `donacion`
--

INSERT INTO `donacion` (`don_id`, `don_fisica`, `don_mental`, `don_tatuaje`, `don_donacion`, `don_tipo`, `usu_id`) VALUES
('fUYtkVPKqZAS5tfH7CFFpikL81X8ji', 'NO', 'Bipolaridad', 'NO', 'Sangre', 'NO', '9JDZ9NS2iQmrFh7iCsa1eCD1CMJBvc'),
('jZY7ckJiJQNf15o2yfEp3fiyS8rIJE', 'ANEMIA', 'NO', 'SI', 'Sangre', 'Segentos', '9JDZ9NS2iQmrFh7iCsa1eCD1CMJBvc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol_nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol_descripcion` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_nombre`, `rol_descripcion`) VALUES
('admin', 'administrador', 'Crear clinicas y las administra'),
('prueba', 'prueba', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usu_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usu_apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usu_tipo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_documento` bigint(17) DEFAULT NULL,
  `usu_nacimiento` date DEFAULT NULL,
  `usu_sexo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_direccion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_telefono` bigint(15) DEFAULT NULL,
  `usu_altura` int(11) DEFAULT NULL,
  `usu_peso` int(11) DEFAULT NULL,
  `usu_carnet` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usu_rh` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_salud` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nombre`, `usu_apellido`, `rol_id`, `usu_tipo`, `usu_documento`, `usu_nacimiento`, `usu_sexo`, `usu_direccion`, `usu_telefono`, `usu_altura`, `usu_peso`, `usu_carnet`, `usu_imagen`, `usu_rh`, `usu_salud`) VALUES
('9GbNxanSqGVYgvSxvfrXX6Qe0DO3Gj', 'Juan', 'restrepo', 'prueba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.png', NULL, NULL),
('9JDZ9NS2iQmrFh7iCsa1eCD1CMJBvc', 'Juan Pablo', 'Restrepo Garcia', 'admin', 'TI', 1136792, '1997-06-20', NULL, 'Cr 47  40 - 63', 56738291, 177, 60, '173333', 'as.jpg', 'Enfermo', 'O-'),
('DVBbxKgz0zlZoahDOjAFBUOXAT4Nnn', 'des', 'pa', 'prueba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.png', NULL, NULL),
('DvOJrmlu4HRClP7uCdfGFuryFjlF68', 'ss', 'ss', 'prueba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.png', NULL, NULL),
('i1eUZ3KyPidUsftY8Cy3S8AdHMM46x', 'pabliyo', 'el pillo', 'prueba', 'CC', 1036679990, NULL, NULL, 'Cr 47  40 - 63', 5881275, 11, 11, 'NO', 'default.png', NULL, NULL),
('N8pMBubF5xCJt4CIzqiQCAKPrV2Tpq', 'Jeronimo', 'Garcia Ortiz', 'prueba', 'CC', 1036679990, '1998-06-20', NULL, 'Cr 47 # 40 - 63', 3046143729, 178, 63, '15623', 'ddd.png', 'O+', 'Regular'),
('oRKjnACL3aTcKPYxZtDMOiqIv2Ijjp', 'daniel', 'cardona', 'prueba', 'CC', 1, NULL, NULL, '2', 1, 2, 1, NULL, 'default.png', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`acc_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`don_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `donacion_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
