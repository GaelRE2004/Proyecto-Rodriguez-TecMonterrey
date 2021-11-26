-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 07:53:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tecm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(45) NOT NULL,
  `curp_alumno` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `semestre` int(1) NOT NULL,
  `id_grupo` varchar(1) NOT NULL,
  `direccion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `curp_alumno`, `nombre`, `apellido`, `semestre`, `id_grupo`, `direccion`) VALUES
(1, 'ROEAG040414HCHDSLA9', 'Gael Rodriguez', 'Rodriguez', 5, 'I', 'Oasis'),
(6, 'ROEAG040414HCHDSLA9', 'Jorge', 'Jaramillo', 5, 'U', 'Oasis 1080-11'),
(7, 'ROEAG040414HCHDSLA9', 'Gael', 'Estrada', 5, 'I', 'Riveras 685-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` varchar(1) NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  `turno` varchar(45) NOT NULL,
  `semestre` int(1) NOT NULL,
  `salon` varchar(2) NOT NULL,
  `cant_alumnos` int(2) NOT NULL,
  `horas_semanales` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `especialidad`, `turno`, `semestre`, `salon`, `cant_alumnos`, `horas_semanales`) VALUES
('I', '$Programación', 'Matutino', 3, '16', 51, 26),
('J', 'Mantenimiento', 'Matutino', 5, '14', 48, 28),
('U', 'Laboratorista', 'Vespertino', 6, '16', 51, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int(11) NOT NULL,
  `curp_maestro` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `nivel_academico` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `num_tel` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `curp_maestro`, `nombre`, `apellido`, `nivel_academico`, `direccion`, `num_tel`) VALUES
(1, 'NAEE205475HCHDSLA9', 'Eliseo', 'Nava', 'Ingeniero', 'Riveras', 65636951),
(3, 'NAEE205475HCHDSLA9', 'Eliseo', 'Nava', 'Licenciado', 'Oasis 1080', 65636951),
(4, 'MEEL01015MCHDSLA8', 'Leticia', 'Meza', 'Ingeniero', 'Riveras 360', 65636951);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `semestre` int(1) NOT NULL,
  `horas` int(30) NOT NULL,
  `contenido` text NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `creditos` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `semestre`, `horas`, `contenido`, `especialidad`, `nombre`, `creditos`) VALUES
(1, 5, 24, '4', 'Programación', 'DaWeb', 24),
(2, 5, 24, 'Desarrolla Apps web', 'Programación', 'DaWeb', 24),
(3, 1, 32, 'Aprende a usar las tics', '', 'TICS', 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
