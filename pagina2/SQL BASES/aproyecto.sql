-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2022 a las 17:17:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE `adopcion` (
  `ID_adopcion` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `nombre_mascota` varchar(150) NOT NULL,
  `especie` varchar(150) NOT NULL,
  `raza` varchar(150) NOT NULL,
  `genero` varchar(150) NOT NULL,
  `encuentro` varchar(150) NOT NULL,
  `estado` varchar(150) NOT NULL,
  `observacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perdidos`
--

CREATE TABLE `perdidos` (
  `ID_perdido` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `nombre_mascota` varchar(150) NOT NULL,
  `especie` varchar(150) NOT NULL,
  `raza` varchar(150) NOT NULL,
  `barrio` varchar(150) NOT NULL,
  `calle` varchar(150) NOT NULL,
  `celular` int(10) NOT NULL,
  `observacion` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perdidos`
--

INSERT INTO `perdidos` (`ID_perdido`, `ID_usuario`, `nombre_mascota`, `especie`, `raza`, `barrio`, `calle`, `celular`, `observacion`, `foto`) VALUES
(1, 0, 'agustin', '', 'sda', 'asddsa', 'guemes', 0, 'dsdsdsa', ''),
(2, 0, 'agustin', '', 'sda', 'asddsa', 'guemes', 0, 'dsdsdsa', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `datos_pers` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `username`, `pass`, `datos_pers`) VALUES
(1, 'agustin paredes', '$2y$10$zk91UDSTN/7jM1Axyb59uOyJ2J4ASYSbrQbo0ktoYhHOGf3X3LBWi', ''),
(2, 'pepe juan', '$2y$10$mhobYt4vU5OWXyubcgDFE.nUVPPacRCv0HOGUM1qnZ1fAeewJ6WFy', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indices de la tabla `perdidos`
--
ALTER TABLE `perdidos`
  ADD PRIMARY KEY (`ID_perdido`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perdidos`
--
ALTER TABLE `perdidos`
  MODIFY `ID_perdido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
