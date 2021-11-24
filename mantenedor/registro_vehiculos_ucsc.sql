-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 01:12:56
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
-- Base de datos: `registro vehiculos ucsc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` int(11) NOT NULL,
  `fk_id_facultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrir`
--

CREATE TABLE `carrir` (
  `Run_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE `contiene` (
  `id_carrera` int(11) NOT NULL,
  `id_facultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre_departamento` int(11) NOT NULL,
  `fk_id_facultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispone`
--

CREATE TABLE `dispone` (
  `id_departamento` int(11) NOT NULL,
  `id_estacionamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esta`
--

CREATE TABLE `esta` (
  `id_departamento` int(11) NOT NULL,
  `id_facultdad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `id_estacionamiento` int(11) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `Run_usuario` int(9) NOT NULL,
  `fk_id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL,
  `nombre_facultad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresa`
--

CREATE TABLE `ingresa` (
  `fecha` date NOT NULL,
  `fk_id_registro` int(11) NOT NULL,
  `hora_ingreso` time NOT NULL,
  `fk_patente_vehiculo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `Run_usuario` int(11) NOT NULL,
  `fk_id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE `pertenece` (
  `Run_usuario` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_ingreso` int(11) NOT NULL,
  `hora_salida` int(11) DEFAULT NULL,
  `fk_patente_vehiculo` int(11) NOT NULL,
  `fk_id_estacionamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--

CREATE TABLE `tiene` (
  `Run_usuario` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Run_usuario` int(8) NOT NULL,
  `Nombre_usuario` varchar(25) NOT NULL,
  `Correo_electronico` varchar(64) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL,
  `Contraseña` varchar(15) NOT NULL,
  `Administrador` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Run_usuario`, `Nombre_usuario`, `Correo_electronico`, `tipo_usuario`, `Contraseña`, `Administrador`) VALUES
(13909954, 'shamako', 'apinto@ing.ucsc.c', 'alumno', '1234', b'1'),
(19909354, 'kast', 'apinto@ing.ucsc.c', 'alumno', '', b'0'),
(19909951, 'kast', 'apinto@ing.ucsc.c', 'funcionario', '', b'0'),
(19909954, 'kast ', 'correo@gmail.com', 'carrier', '1234', b'0'),
(19909955, 'Alexis Pinta', 'apinto@ing.ucsc.c', '', '', b'0'),
(109394985, 'kast', 'apinto@ing.ucsc.c', 'personal', '', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `Patente_vehiculo` varchar(6) NOT NULL,
  `Marca_vehiculo` varchar(25) NOT NULL,
  `Modelo_vehiculo` varchar(25) NOT NULL,
  `tipo_vehiculo` varchar(15) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `fk_run_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`Patente_vehiculo`, `Marca_vehiculo`, `Modelo_vehiculo`, `tipo_vehiculo`, `Descripcion`, `fk_run_usuario`) VALUES
('cses3a', 'porche', 've3', 'motocicleta', '', 13909954),
('cxesaa', 'porche', 've3', 'Automovil', 'mea vola lima', 13909954);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `fk_id_facultad` (`fk_id_facultad`);

--
-- Indices de la tabla `carrir`
--
ALTER TABLE `carrir`
  ADD PRIMARY KEY (`Run_usuario`) USING BTREE;

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`id_facultad`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `fk_id_facultad` (`fk_id_facultad`);

--
-- Indices de la tabla `dispone`
--
ALTER TABLE `dispone`
  ADD PRIMARY KEY (`id_departamento`),
  ADD UNIQUE KEY `id_departamento` (`id_departamento`),
  ADD UNIQUE KEY `id_departamento_2` (`id_departamento`),
  ADD KEY `id_estacionamiento` (`id_estacionamiento`);

--
-- Indices de la tabla `esta`
--
ALTER TABLE `esta`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `id_facultdad` (`id_facultdad`);

--
-- Indices de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD PRIMARY KEY (`id_estacionamiento`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`Run_usuario`),
  ADD KEY `fk_id:carrera` (`fk_id_carrera`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`);

--
-- Indices de la tabla `ingresa`
--
ALTER TABLE `ingresa`
  ADD PRIMARY KEY (`fk_id_registro`),
  ADD KEY `fk_patente_vehiculo` (`fk_patente_vehiculo`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`Run_usuario`),
  ADD KEY `fk_id_departamento` (`fk_id_departamento`);

--
-- Indices de la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD PRIMARY KEY (`Run_usuario`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `fk_patente_vehiculo` (`fk_patente_vehiculo`),
  ADD KEY `fk_id_estacionamiento` (`fk_id_estacionamiento`);

--
-- Indices de la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD PRIMARY KEY (`Run_usuario`),
  ADD KEY `id_facultad` (`id_carrera`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Run_usuario`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`Patente_vehiculo`),
  ADD KEY `fk_run_usuario` (`fk_run_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  MODIFY `id_estacionamiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingresa`
--
ALTER TABLE `ingresa`
  MODIFY `fk_id_registro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrir`
--
ALTER TABLE `carrir`
  ADD CONSTRAINT `carrir_ibfk_1` FOREIGN KEY (`Run_usuario`) REFERENCES `usuario` (`Run_usuario`);

--
-- Filtros para la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`id_facultad`) REFERENCES `facultad` (`id_facultad`),
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `dispone`
--
ALTER TABLE `dispone`
  ADD CONSTRAINT `dispone_ibfk_1` FOREIGN KEY (`id_estacionamiento`) REFERENCES `estacionamiento` (`id_estacionamiento`),
  ADD CONSTRAINT `dispone_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `esta`
--
ALTER TABLE `esta`
  ADD CONSTRAINT `esta_ibfk_1` FOREIGN KEY (`id_facultdad`) REFERENCES `facultad` (`id_facultad`),
  ADD CONSTRAINT `esta_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`fk_id_carrera`) REFERENCES `usuario` (`Run_usuario`);

--
-- Filtros para la tabla `ingresa`
--
ALTER TABLE `ingresa`
  ADD CONSTRAINT `ingresa_ibfk_1` FOREIGN KEY (`fk_id_registro`) REFERENCES `registro` (`id_registro`),
  ADD CONSTRAINT `ingresa_ibfk_2` FOREIGN KEY (`fk_patente_vehiculo`) REFERENCES `vehiculo` (`Patente_vehiculo`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`Run_usuario`) REFERENCES `usuario` (`Run_usuario`);

--
-- Filtros para la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD CONSTRAINT `pertenece_ibfk_1` FOREIGN KEY (`Run_usuario`) REFERENCES `personal` (`Run_usuario`),
  ADD CONSTRAINT `pertenece_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`fk_id_estacionamiento`) REFERENCES `estacionamiento` (`id_estacionamiento`);

--
-- Filtros para la tabla `tiene`
--
ALTER TABLE `tiene`
  ADD CONSTRAINT `tiene_ibfk_1` FOREIGN KEY (`Run_usuario`) REFERENCES `estudiante` (`Run_usuario`),
  ADD CONSTRAINT `tiene_ibfk_2` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_3` FOREIGN KEY (`fk_run_usuario`) REFERENCES `usuario` (`Run_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
