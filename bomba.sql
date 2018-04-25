-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2018 a las 01:59:08
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bomba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletas`
--

CREATE TABLE `boletas` (
  `boletas_id` int(11) NOT NULL,
  `boleta_nombre_socio` varchar(100) NOT NULL,
  `boleta_fecha` date NOT NULL,
  `boleta_cantidad` int(11) NOT NULL,
  `boleta_aporte` int(100) NOT NULL,
  `boleta_codigo` int(11) NOT NULL,
  `boleta_talonario` int(11) NOT NULL,
  `boleta_lim_fecha` date NOT NULL,
  `boleta_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `boletas`
--

INSERT INTO `boletas` (`boletas_id`, `boleta_nombre_socio`, `boleta_fecha`, `boleta_cantidad`, `boleta_aporte`, `boleta_codigo`, `boleta_talonario`, `boleta_lim_fecha`, `boleta_estado`) VALUES
(1, 'Luis Aguilera', '2017-11-12', 0, 20000, 5, 2, '0000-00-00', 1),
(3, 'felipe rivas', '2018-01-01', 0, 10000, 5, 1, '0000-00-00', 1),
(4, 'felipe rivas', '2018-01-10', 0, 10000, 5, 1, '0000-00-00', 0),
(5, 'felipe rivas', '2017-12-05', 0, 3000, 5, 1, '0000-00-00', 0),
(6, 'felipe rivas', '2017-09-05', 0, 2000, 5, 1, '0000-00-00', 1),
(7, 'felipe', '2017-12-12', 0, 30000, 5, 1, '0000-00-00', 1),
(8, 'Luis Aguilera', '2017-11-20', 0, 2000, 5, 2, '0000-00-00', 0),
(9, 'felipe', '2017-10-12', 0, 8000, 1, 2, '0000-00-00', 0),
(10, 'luis', '2017-11-19', 0, 4000, 1, 1, '0000-00-00', 0),
(11, 'Felipe Rivas', '2018-02-06', 0, 20000, 5, 1, '0000-00-00', 0),
(12, 'felipe rivas', '2018-02-06', 0, 2000, 5, 1, '0000-00-00', 0),
(13, 'luis', '2018-03-15', 0, 2000, 9, 1, '0000-00-00', 0),
(14, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(15, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(16, 'felipe rivas', '2018-03-22', 3, 2000, 5, 2, '0000-00-00', 1),
(17, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(18, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(19, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(20, 'felipe rivas', '2018-03-22', 3, 2000, 5, 2, '0000-00-00', 1),
(21, 'felipe rivas', '2018-03-22', 3, 1999, 5, 2, '0000-00-00', 1),
(22, 'felipe rivas', '2018-03-22', 3, 1999, 5, 2, '0000-00-00', 1),
(23, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(24, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(25, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(26, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(27, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(28, 'luis', '2018-03-22', 3, 2000, 9, 2, '0000-00-00', 1),
(29, 'luis', '2018-12-22', 3, 2000, 9, 2, '0000-00-00', 1),
(30, 'luis', '2018-12-22', 3, 2000, 9, 2, '0000-00-00', 1),
(31, 'luis', '2018-12-22', 3, 2000, 9, 2, '0000-00-00', 1),
(32, 'luis', '2018-03-22', 2, 2000, 9, 2, '2018-05-22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `privilegio_id` int(11) NOT NULL,
  `privilegio_nombre` varchar(25) NOT NULL,
  `privilegio_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`privilegio_id`, `privilegio_nombre`, `privilegio_estado`) VALUES
(1, 'Recaudador', 1),
(2, 'Tesorero', 1),
(3, 'Secretario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `socio_id` int(11) NOT NULL,
  `socio_nombre` varchar(100) NOT NULL,
  `socio_rut` varchar(11) NOT NULL,
  `socio_direccion` varchar(100) NOT NULL,
  `socio_sector` varchar(100) NOT NULL,
  `socio_fecha_nacimiento` date NOT NULL,
  `socio_telefono` varchar(100) NOT NULL,
  `socio_monto` int(11) NOT NULL,
  `socio_fech_pago` date NOT NULL,
  `socio_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`socio_id`, `socio_nombre`, `socio_rut`, `socio_direccion`, `socio_sector`, `socio_fecha_nacimiento`, `socio_telefono`, `socio_monto`, `socio_fech_pago`, `socio_estado`) VALUES
(5, 'felipe rivas', '15790506-6', 'Quemchi 6193', 'Davila 1', '2017-10-26', '56666666', 2000, '2018-04-12', 1),
(8, 'hakjhaskjh sahjkhsakj', '19187619-9', 'hasjkashkjhas', 'Davila 1', '2017-11-15', 'jdkjdalkd', 2000, '2017-09-15', 1),
(9, 'luis Aguilera', '19187619-9', 'ajskjak', 'jaskjask', '2017-12-05', '56721935', 1500, '2012-12-05', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talonarios`
--

CREATE TABLE `talonarios` (
  `talonario_id` int(11) NOT NULL,
  `talonario_recaudador` int(11) NOT NULL,
  `talonario_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `talonarios`
--

INSERT INTO `talonarios` (`talonario_id`, `talonario_recaudador`, `talonario_estado`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_rut` varchar(20) NOT NULL,
  `usuario_password` varchar(50) NOT NULL,
  `usuario_nombre` varchar(100) NOT NULL,
  `usuario_privilegio` int(11) NOT NULL,
  `usuario_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_rut`, `usuario_password`, `usuario_nombre`, `usuario_privilegio`, `usuario_estado`) VALUES
(1, '19187619-9', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Luis Aguilera', 3, 1),
(2, '19174099-8', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Carlos Molina', 1, 1),
(7, '18676359-9', '8cb2237d0679ca88db6464eac60da96345513964', 'Carlos Fuentes', 1, 1),
(8, '15345687-9', '8cb2237d0679ca88db6464eac60da96345513964', 'Juanito Perez', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletas`
--
ALTER TABLE `boletas`
  ADD PRIMARY KEY (`boletas_id`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`privilegio_id`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`socio_id`);

--
-- Indices de la tabla `talonarios`
--
ALTER TABLE `talonarios`
  ADD PRIMARY KEY (`talonario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletas`
--
ALTER TABLE `boletas`
  MODIFY `boletas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `socio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `talonarios`
--
ALTER TABLE `talonarios`
  MODIFY `talonario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
