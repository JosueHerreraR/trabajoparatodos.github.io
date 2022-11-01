-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 20:40:48
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desercion`
--

CREATE TABLE `desercion` (
  `id_desercion` int(11) NOT NULL,
  `cod_semestre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `desercion_m` int(11) NOT NULL,
  `desercion_h` int(11) NOT NULL,
  `motivos_desercion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eficiencia_terminal`
--

CREATE TABLE `eficiencia_terminal` (
  `id_eficiencia` int(11) NOT NULL,
  `cod_semestre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `eficiencia_m` int(11) NOT NULL,
  `eficiencia_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` int(11) NOT NULL,
  `cod_susbsistema` int(11) NOT NULL,
  `nombre_especialidad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraestructura`
--

CREATE TABLE `infraestructura` (
  `id_inventario` int(11) NOT NULL,
  `ciclo_escolar` int(11) NOT NULL,
  `cod_institucion` int(11) NOT NULL,
  `administracion` int(11) NOT NULL,
  `direccion` int(11) NOT NULL,
  `prefectura` int(11) NOT NULL,
  `aulas` int(11) NOT NULL,
  `aulas_artisticas` int(11) NOT NULL,
  `sillas_aulas` int(11) NOT NULL,
  `capacidad_alumnos_matutino` int(11) NOT NULL,
  `capacidad_alumnos_vespertino` int(11) NOT NULL,
  `bilbliotecas` int(11) NOT NULL,
  `laboratorios` int(11) NOT NULL,
  `sala_maestros` int(11) NOT NULL,
  `cooperativa` int(11) NOT NULL,
  `estacionamiento` int(11) NOT NULL,
  `rampas_discapacidad` int(11) NOT NULL,
  `sillas` int(11) NOT NULL,
  `proyeccion_crecimiemto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `id_institucion` int(11) NOT NULL,
  `nombre_institucion` text NOT NULL,
  `cod_subsistema` int(11) NOT NULL,
  `cod_especialidad` text NOT NULL,
  `modalidad` text NOT NULL,
  `alumnos_registrados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula_inicial`
--

CREATE TABLE `matricula_inicial` (
  `id_inicial` int(11) NOT NULL,
  `cod_semestre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `inicial_m` int(11) NOT NULL,
  `inicial_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula_termino`
--

CREATE TABLE `matricula_termino` (
  `id_terminio` int(11) NOT NULL,
  `cod_semestre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `termino_m` int(11) NOT NULL,
  `termino_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reprobados`
--

CREATE TABLE `reprobados` (
  `id_reprobados` int(11) NOT NULL,
  `cod_semestre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `reprobados_m` int(11) NOT NULL,
  `reprobados_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` int(11) NOT NULL,
  `cod_institucion` int(11) NOT NULL,
  `modalidad` text NOT NULL,
  `periodo` text NOT NULL,
  `cod_especialidad` int(11) NOT NULL,
  `generacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsistema`
--

CREATE TABLE `subsistema` (
  `id_subsistema` int(11) NOT NULL,
  `sistema_educativo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `correo_electronico` text DEFAULT NULL,
  `contraseña` varchar(250) NOT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `cod_institucion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `correo_electronico`, `contraseña`, `rol_id`, `cod_institucion`) VALUES
(1, 'Josue_Herrera', 'josue_bofue@hotmail.com', '1537', 1, 0),
(2, 'Luis_Chuc', 'adrian_tamayo@outlook.com', '8836', 2, NULL),
(3, 'Wilfrido_Puc', 'tobyrey@hotmail.com', '4529', 1, NULL),
(4, 'Abdiel_Cen', 'cen.cantu@gmail.com', '1129', 2, NULL),
(5, 'Jose_Poot', 'jose.orlando@hotmail.com', '7894', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vunerabilidad`
--

CREATE TABLE `vunerabilidad` (
  `id_vunerabilidad` int(11) NOT NULL,
  `cod_semestre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `vunerabilidad_m` int(11) NOT NULL,
  `vunerabilidad_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vunerabilidad_atendidos`
--

CREATE TABLE `vunerabilidad_atendidos` (
  `id_atendidos` int(11) NOT NULL,
  `cod_semestre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `atentidos_m` int(11) NOT NULL,
  `atentidos_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
