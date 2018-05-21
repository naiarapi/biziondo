-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2017 a las 19:17:29
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `biziondo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_usuarios`
--

CREATE TABLE IF NOT EXISTS `admin_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `admin_usuario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `admin_clave` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `admin_usuarios`
--

INSERT INTO `admin_usuarios` (`id`, `admin_nombre`, `admin_usuario`, `admin_clave`) VALUES
(1, 'Fabio Alves', 'fabio', '1234'),
(3, 'andrea', 'andrea', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE IF NOT EXISTS `citas` (
  `id_citas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_citas` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_citas` int(15) NOT NULL,
  `email_citas` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_citas` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `horario_citas` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_citas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_citas`, `nombre_citas`, `telefono_citas`, `email_citas`, `fecha_citas`, `horario_citas`) VALUES
(1, 'Andrea Monsalve', 688689221, 'andreamonbel@gmail.com', '12/10/2017', 'tarde'),
(2, 'Sandra', 688689221, 'andreamonbel@gmail.com', '12/10/2017', 'mañana'),
(3, 'andrea', 688689221, 'andreamonbel@gmail.com', '2017-11-23', 'tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_cursos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_cursos` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_cursos` date NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_cursos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_cursos`, `titulo_cursos`, `categoria`, `fecha_cursos`, `descripcion`) VALUES
(1, 'VIDA SALUDABLE, AHORA', 'Alimentación', '2017-11-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
