-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2022 a las 17:14:40
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
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id_localidad` int(11) NOT NULL,
  `localidad` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id_localidad`, `localidad`) VALUES
(1, 'Almirante Brown\r\n'),
(2, 'Avellaneda'),
(3, 'Berazategui'),
(4, 'Esteban Echeverría'),
(5, 'Ezeiza'),
(7, 'Florencio Varela'),
(8, 'General San Martín'),
(9, 'Hurlingham'),
(10, 'Ituzaingó'),
(11, 'José C. Paz'),
(12, 'La Matanza'),
(13, 'Lanús'),
(14, 'Lomas de Zamora'),
(15, 'Malvinas Argentinas'),
(16, 'Merlo'),
(17, 'Moreno'),
(18, 'Morón'),
(19, 'Quilmes'),
(20, 'San Fernando'),
(21, 'San Isidro'),
(22, 'San Miguel'),
(23, 'Tigre'),
(24, 'Tres de Febrero'),
(25, 'Vicente López');

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
  `id_localidad` int(11) NOT NULL,
  `barrio` varchar(150) NOT NULL,
  `calle` varchar(150) NOT NULL,
  `celular` int(10) NOT NULL,
  `observacion` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perdidos`
--

INSERT INTO `perdidos` (`ID_perdido`, `ID_usuario`, `nombre_mascota`, `especie`, `raza`, `id_localidad`, `barrio`, `calle`, `celular`, `observacion`, `foto`) VALUES
(1, 0, 'agustin', '', 'sda', 0, 'asddsa', 'guemes', 0, 'dsdsdsa', ''),
(2, 0, 'agustin', '', 'sda', 0, 'asddsa', 'guemes', 0, 'dsdsdsa', ''),
(3, 0, 'a', '', 'a', 0, 'a', 'a', 1256456734, 'a', ''),
(4, 0, 'agustin', '', 'dsdf', 0, 'sdf', 'fds', 233232, 'fds', '');

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
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_localidad`);

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
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `perdidos`
--
ALTER TABLE `perdidos`
  MODIFY `ID_perdido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
