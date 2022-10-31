-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2022 a las 22:06:50
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

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
  `observacion` varchar(200) NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_adopcion` int(11) NOT NULL,
  `id_perdido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `foto` longblob NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `celular` int(20) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `username`, `mail`, `pass`, `foto`, `nombre_completo`, `celular`, `tipo`) VALUES
(1, 'agustin paredes', '', '$2y$10$zk91UDSTN/7jM1Axyb59uOyJ2J4ASYSbrQbo0ktoYhHOGf3X3LBWi', '', '', 0, 0),
(2, 'pepe juan', '', '$2y$10$mhobYt4vU5OWXyubcgDFE.nUVPPacRCv0HOGUM1qnZ1fAeewJ6WFy', '', '', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perdidos`
--
ALTER TABLE `perdidos`
  ADD PRIMARY KEY (`ID_perdido`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_publicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perdidos`
--
ALTER TABLE `perdidos`
  MODIFY `ID_perdido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
