-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2019 a las 07:37:05
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serviciosweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `codContrato` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `referencia` varchar(120) DEFAULT NULL,
  `codPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desservicio`
--

CREATE TABLE `desservicio` (
  `codDesServ` int(11) NOT NULL,
  `desSer` varchar(250) NOT NULL,
  `codDetalleCont` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecon`
--

CREATE TABLE `detallecon` (
  `codDCon` int(11) NOT NULL,
  `costoUnitario` float NOT NULL,
  `costoTotal` float NOT NULL,
  `igv` int(11) NOT NULL,
  `servicio` int(11) NOT NULL,
  `cont` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotoportafolio`
--

CREATE TABLE `fotoportafolio` (
  `codFPort` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `portafolio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidoPat` varchar(20) NOT NULL,
  `apellidoMat` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `fechaNac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `codPortafolio` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `codPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña`
--

CREATE TABLE `reseña` (
  `codReseña` int(11) NOT NULL,
  `desResena` blob NOT NULL,
  `punto` tinyint(1) DEFAULT NULL,
  `codDetalle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `codrol` tinyint(1) NOT NULL,
  `nomrol` varchar(15) NOT NULL,
  `vistas` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `codServicio` int(11) NOT NULL,
  `nomServicio` varchar(50) NOT NULL,
  `tipoServicio` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `codTel` int(11) NOT NULL,
  `numTelefono` varchar(9) NOT NULL,
  `codPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervicio`
--

CREATE TABLE `tiposervicio` (
  `codTipoS` tinyint(4) NOT NULL,
  `nomTipoS` varchar(50) NOT NULL,
  `modalidad` varchar(20) NOT NULL DEFAULT 'full time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codUsuario` int(11) NOT NULL,
  `nomUsuario` varchar(20) NOT NULL,
  `pass` blob NOT NULL,
  `perfil` int(11) NOT NULL,
  `rol` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vistassistem`
--

CREATE TABLE `vistassistem` (
  `idvista` tinyint(4) NOT NULL,
  `nomvista` varchar(20) NOT NULL,
  `ruta` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`codContrato`),
  ADD KEY `codPerfil` (`codPerfil`);

--
-- Indices de la tabla `desservicio`
--
ALTER TABLE `desservicio`
  ADD PRIMARY KEY (`codDesServ`),
  ADD KEY `codDetalleCont` (`codDetalleCont`);

--
-- Indices de la tabla `detallecon`
--
ALTER TABLE `detallecon`
  ADD PRIMARY KEY (`codDCon`),
  ADD KEY `servicio` (`servicio`),
  ADD KEY `cont` (`cont`);

--
-- Indices de la tabla `fotoportafolio`
--
ALTER TABLE `fotoportafolio`
  ADD PRIMARY KEY (`codFPort`),
  ADD KEY `portafolio` (`portafolio`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`codPortafolio`),
  ADD KEY `codPerfil` (`codPerfil`);

--
-- Indices de la tabla `reseña`
--
ALTER TABLE `reseña`
  ADD PRIMARY KEY (`codReseña`),
  ADD KEY `codDetalle` (`codDetalle`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`codrol`),
  ADD KEY `vistas` (`vistas`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`codServicio`),
  ADD KEY `tipoServicio` (`tipoServicio`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`codTel`),
  ADD KEY `codPerfil` (`codPerfil`);

--
-- Indices de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  ADD PRIMARY KEY (`codTipoS`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`),
  ADD KEY `perfil` (`perfil`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `vistassistem`
--
ALTER TABLE `vistassistem`
  ADD PRIMARY KEY (`idvista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `codContrato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `desservicio`
--
ALTER TABLE `desservicio`
  MODIFY `codDesServ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallecon`
--
ALTER TABLE `detallecon`
  MODIFY `codDCon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotoportafolio`
--
ALTER TABLE `fotoportafolio`
  MODIFY `codFPort` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `codPortafolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reseña`
--
ALTER TABLE `reseña`
  MODIFY `codReseña` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `codrol` tinyint(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `codServicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `codTel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  MODIFY `codTipoS` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vistassistem`
--
ALTER TABLE `vistassistem`
  MODIFY `idvista` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `pk_perfil_contrato` FOREIGN KEY (`codPerfil`) REFERENCES `perfil` (`id`);

--
-- Filtros para la tabla `desservicio`
--
ALTER TABLE `desservicio`
  ADD CONSTRAINT `fk_detalleContrato_desServicio` FOREIGN KEY (`codDetalleCont`) REFERENCES `detallecon` (`codDCon`);

--
-- Filtros para la tabla `detallecon`
--
ALTER TABLE `detallecon`
  ADD CONSTRAINT `pk_contrato_contrato` FOREIGN KEY (`cont`) REFERENCES `contrato` (`codContrato`),
  ADD CONSTRAINT `pk_servicio_detalleCont` FOREIGN KEY (`servicio`) REFERENCES `servicio` (`codServicio`);

--
-- Filtros para la tabla `fotoportafolio`
--
ALTER TABLE `fotoportafolio`
  ADD CONSTRAINT `fk_portafolio_fotoPortafolio` FOREIGN KEY (`portafolio`) REFERENCES `portafolio` (`codPortafolio`);

--
-- Filtros para la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD CONSTRAINT `fk_perfil_portafolio` FOREIGN KEY (`codPerfil`) REFERENCES `perfil` (`id`);

--
-- Filtros para la tabla `reseña`
--
ALTER TABLE `reseña`
  ADD CONSTRAINT `fk_cdetalle_reseña` FOREIGN KEY (`codDetalle`) REFERENCES `detallecon` (`codDCon`);

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `fk_vistas_rol` FOREIGN KEY (`vistas`) REFERENCES `vistassistem` (`idvista`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_tipoServicio_servicio` FOREIGN KEY (`tipoServicio`) REFERENCES `tiposervicio` (`codTipoS`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fk_telefono_perfil` FOREIGN KEY (`codPerfil`) REFERENCES `perfil` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_perfil_usuario` FOREIGN KEY (`perfil`) REFERENCES `perfil` (`id`),
  ADD CONSTRAINT `fk_rol_usuario` FOREIGN KEY (`rol`) REFERENCES `rol` (`codrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
